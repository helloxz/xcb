<?php
	error_reporting(E_ALL^E_NOTICE^E_WARNING^E_DEPRECATED);
	session_start();
	include_once './config/db.class.php';	//载入数据库类
	include_once './config/smtp.class.php';	//载入SMTP类
	$name = $_POST['name'];					//获取姓名
	$name = htmlspecialchars($name);		//过滤姓名
	$grade = $_POST['grade'];				//获取年级
	$cla = $_POST['cla'];					//获取班级
	$cla = htmlspecialchars($cla);			//过滤班级
	$tel = $_POST['tel'];					//获取电话
	$email = $_POST['email'];				//获取有效
	$qq = $_POST['qq'];						//获取QQ号
	$other = $_POST['other'];				//获取团队
	$other = htmlspecialchars($other);		//过滤
	$code = $_SESSION["helloweba_char"];	//生成的验证码
	$verification = $_POST['verification'];	//获取验证码
	$verification = strtolower($verification);
	$ip = $_POST['ip'];						//获取IP地址
	$get_info = $_POST['get_info'];			//获取操作系统
	$reg_time = time();						//注册时间

	$q_url = 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];
    $q_url = str_replace('receive.php', 'query.php', $q_url);

	##########################################
	$smtpserver = "smtp.exmail.qq.com";//SMTP服务器
	$smtpserverport = 25;//SMTP服务器端口
	$smtpusermail = "service@xiaoz.me";//SMTP服务器的用户邮箱
	$smtpemailto = $email;//发送给谁
	$smtpuser = "service@xiaoz.me";//SMTP服务器的用户帐号
	$smtppass = "xiaoz1993.";//SMTP服务器的用户密码
	$mailsubject = '网页设计大赛报名成功';//邮件主题
	$mailbody = '亲爱的'.$name."同学：<p style = 'text-indent:2em;'>您好，很高兴的通知您已成功参加由计算机科学系举办的网页设计大赛。您可以<a href = '$q_url'>点此查询</a>报名状态！若有疑问请联系管理员QQ:337003006，感谢您的支持！</p>"."<br /><div style = 'color:#999;'>
		此邮件由系统自动发送，若不是您本人请求，请直接忽略。
	</div>";//邮件内容

	$mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件
	##########################################
	$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
	$smtp->debug = FALSE;//是否显示发送的调试信息
	
	$con = $db->connect();					//连接数据库
	//SQL语句
	$sql = "INSERT INTO `userinfo`(`name`, `grade`, `cla`, `tel`, `email`, `qq`, `other`, `reg_time`, `ip`, `browser`) VALUES ('$name','$grade','$cla','$tel','$email','$qq','$other','$reg_time','$ip','$get_info')";

	if ($code == $verification) {
		//执行插入
		$query = $db->query($sql,$con);
		echo "报名成功！";
		//发送邮件
		$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype);
	}
	
	else{
		echo "NO";
	}
?>
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    var width = document.body.clientWidth;                  //获取浏览器宽度
    var height = document.body.clientHeight;                 //获取浏览器高度
    width = (width - 240) / 2;
    width = width + 'px';
    height = (height - 180) / 2;
    height = height + 'px';
    
    $("#NewsCenter").click(function(){
        $("#hot").show();
        $("#quick").hide();
    });
    $("#Quick").click(function(){
        $("#hot").hide();
        $("#quick").show();
    });
    $("#dropdown").mouseover(function(){
    	$("#dropdown-menu").show();
    });
    $("#dropdown").click(function(){
    	$("#dropdown-menu").hide();
    });
    $("#loading").css("left",width);
    $("#loading").css("top",height);

});

//判断验证码
function check_img(){
    	var verification = document.getElementById("verification").value;						//获取验证码
    	var ver = verification.length;
    	if (ver > 4 || ver < 4) {
    		document.getElementById("msg-img").innerHTML = '验证码错误！';
            return false;
    	};
    	if (ver == 4) {
			$.get("./config/check.php?f=ver",{verification:verification},function(data,status){
    			if(data == 0) {
                    document.getElementById("msg-img").innerHTML = '验证码错误！';
                    return false;
                }
                if (data == 1) {
                    document.getElementById("msg-img").innerHTML = '<span style = "color:green;">√</span>';
                    return true;
                };
    		});
    	};
}
//判断邮箱
function check_mail() {
    var email = document.getElementById("email").value;
    var pattern = /^([\.a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-])+/;
    //邮箱为空
    if (email == '') {
        document.getElementById("msg-mail").innerHTML = '请填写E-mail';
        return false;
    };
    //邮箱不合法
    if (!pattern.test(email)) {
        document.getElementById("msg-mail").innerHTML = '请输入有效的E-mail';
        document.getElementById("email").focus();
        return false;
    };
    //邮箱正确
    if (pattern.test(email)) {
        $.get("./config/check.php?f=email",{email:email},function(data,status){
            if (data == 3) {
                document.getElementById("msg-mail").innerHTML = '已经报名！';
                return false;
            };
            if (data == 4) {
                document.getElementById("msg-mail").innerHTML = '<span style = "color:green;">√</span>';
                return true;
            };
        });
    };
}
//判断电话号码
function check_tel(){
    var tel = document.getElementById("tel").value;               //获取电话号码
    var myreg = /^0?1[3|4|5|8][0-9]\d{8}$/;
    //电话号码为空
    if (tel == '') {
        document.getElementById("msg-tel").innerHTML = '请填写联系电话！';
        return false;
    };
    //电话号码不满足11位
    if (tel.length != 11) {
        document.getElementById("msg-tel").innerHTML = '格式错误！';
        return false;
    };
    //电话号码不符合规范
    if (!myreg.test(tel)) {
        document.getElementById("msg-tel").innerHTML = '格式错误！';
        return false;
    };
    if (myreg.test(tel)) {
        document.getElementById("msg-tel").innerHTML = '<span style = "color:green;">√</span>';
        return true;
    };
}
//判断班级
function check_cla(){
    var cla = document.getElementById("cla").value;               //获取班级
    if (cla.length < 4 || cla.length > 12) {
        document.getElementById("msg-cla").innerHTML = "格式错误！";
        return false;
    }
    else{
        document.getElementById("msg-cla").innerHTML = '<span style = "color:green;">√</span>';
        return true;
    }
}
//判断姓名
function check_name(){
    var name = document.getElementById("name").value;             //获取姓名
    if (name.length < 2 || name.length > 5) {
        document.getElementById("msg-name").innerHTML = "格式错误！";
        document.getElementById("name").focus();
        return false;
    }
    else{
        document.getElementById("msg-name").innerHTML = '<span style = "color:green;">√</span>';
        return true;
    }
}
//判断QQ号
function check_qq(){
    var qq = document.getElementById("qq").value;              //获取QQ号
    var reg = /^[1-9]\d{4,10}$/;
    if (qq == '') {
        document.getElementById("msg-qq").innerHTML = '请填写QQ号！';
        return false;
    }
    if (!reg.test(qq)) {
        document.getElementById("msg-qq").innerHTML = "格式错误！";
        return false;
    }
    else{
        document.getElementById("msg-qq").innerHTML = '<span style = "color:green;">√</span>';
        return true;
    }

}

//将表单提交处理
function send_form(){
    var name = document.getElementById("name").value;             //获取姓名
    var grade = document.getElementById("grade").value;           //获取年纪
    var cla = document.getElementById("cla").value;               //获取班级
    var tel = document.getElementById("tel").value;               //获取电话号码
    var email = document.getElementById("email").value;           //获取有效
    var qq = document.getElementById("qq").value;                   //获取QQ号
    var other = document.getElementById("other").value;           //获取团队信息
    var verification = document.getElementById("verification").value;//获取验证码
    var ip = document.getElementById("ip").innerHTML;             //获取IP
    var get_info = document.getElementById("get_info").innerHTML;   //获取操作系统
    $("#all").css("opacity","0.5");
    $("#loading").show();
    $.post("./receive.php",{name:name,grade:grade,cla:cla,tel:tel,email:email,qq:qq,other:other,verification:verification,ip:ip,get_info:get_info},function(data,status){
        //alert(data);
        if (status == 'success') {
            document.getElementById("msg").innerHTML = "报名成功！";
        }
    });
    }



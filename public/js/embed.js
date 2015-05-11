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


//将表单提交处理
function send_form(){
    // alert("你好");
    var name = document.getElementById("name").value;             //获取姓名
    var grade = document.getElementById("grade").value;           //获取年纪
    var cla = document.getElementById("cla").value;               //获取班级
    var tel = document.getElementById("tel").value;               //获取电话号码
    var email = document.getElementById("email").value;           //获取有效
    var qq = document.getElementById("qq").value;              //获取QQ号
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
        };
    });
}



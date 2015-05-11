/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
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
});



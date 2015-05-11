<?php
    error_reporting(E_ALL^E_NOTICE^E_WARNING^E_DEPRECATED);
    include_once '../config/db.class.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $yzm = $_POST['yzm'];
    
    $con = $db->connect();
    $sql = "SELECT * FROM `admin` WHERE `nickname` = '$username'";
    $query = $db->query($sql,$con);
    $re = $db->fetch_assoc($query);
    
    if($re['password'] == $password) {
        echo "<script>window.location.href = 'http://www.xiaoz.me';</script>";
    }
    else {
        echo 'no';
    }

    
    


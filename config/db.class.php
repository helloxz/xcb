<?php
    header("Content-Type: text/html;charset=utf-8"); 

    class DateBase {
            private $host;
            private $user;
            private $pass;
            private $table;

            function __construct($host,$user,$pass,$table) {
                    $this->host = $host;
                    $this->user = $user;
                    $this->pass = $pass;
                    $this->table = $table;
                    $this->connect();
            }

            function connect() {
                    $link = mysql_connect($this->host,$this->user,$this->pass) or die("<h3>数据库连接失败！</h3>");
                    $se = mysql_select_db($this->table,$link);
                    return $link;
            }

            function select($table,$con) {
                    $select = mysql_select_db($table,$con);
                    return $select;
            }
            function query($v,$con) {
                    mysql_query("set names 'utf8'");	//防止插入数据库的时候乱码
                    $query = mysql_query($v,$con);
                    return $query;
            }
            function fetch_row($data) {
                    $row = mysql_fetch_row($data);
                    return $row;
            }
            function fetch_assoc($data) {
                    $assoc = mysql_fetch_assoc($data);
                    return $assoc;
            }
            function fetch_arr($result,$f) {
                    $fetch_arr = mysql_fetch_array($result,$f);
                    return $fetch_arr;
            }

            function rows($row) {
                    $my_rows = mysql_num_rows($row);
                    return $my_rows;
            }

            function close($c) {
                    mysql_close($c);
            }
	}
	
    $db = new DateBase('192.168.0.112','root','mysqlroot','xsb');
?>


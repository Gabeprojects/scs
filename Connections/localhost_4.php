<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_localhost_4 = "localhost";
$database_localhost_4 = "jua";
$username_localhost_4 = "root";
$password_localhost_4 = "";
$localhost_4 = mysql_pconnect($hostname_localhost_4, $username_localhost_4, $password_localhost_4) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
<?php
$con = mysql_connect('localhost','root','') or die('error: could not connect to MySQL database');
mysql_select_db('security_test',$con) or die(mysql_error());
?>

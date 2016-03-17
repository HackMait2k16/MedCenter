<?php
ob_start();
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$db_name = 'medcenter';
@mysql_connect($mysql_host, $mysql_user, $mysql_pass) or die("Could not connect to host:");
	@mysql_select_db($db_name) or die("Could not connect to database:");
?>
<?php
	error_reporting(0);
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "_db_wasse";
	@mysql_connect($server,$username,$password) or die("Connection fail!");
	@mysql_select_db($database) or die("Database $database cann't access!");


	function AntiInject($param){
		$var = mysql_real_escape_string($param);
		return $var;
	}

	function EncPassword($param){
		$pass = md5($param);
		return $pass;
	}

	function _redirectToP($page){
        header("location: $page");
    }

	function SQLQuery($table, $param, $var){
		$q = "SELECT * FROM `".$table."` WHERE `".$var."`='".$param."'";
		$h = mysql_query($q);
		$r = mysql_fetch_array($h);
		return $r;
	}
?>

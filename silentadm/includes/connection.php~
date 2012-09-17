<?php
//This connection class provides connection object
include "constants.php";
class CONNECTION{
	var $connect;
	function connection()
	{
		$connect=mysql_connect(SERVER,UNAME_DB,PASSWD_DB) or die(mysql_error());
		mysql_select_db($connect,DB_NAME) or die(mysql_error());
	}
}
?>

<?php
//This php file creates database for this project
include "connection.php";
$query="CREATE DATABASE IF NOT EXISTS silentadm";
mysql_connect(SERVER,UNAME_DB,PASSWD_DB) or die(mysql_error());
mysql_query($query) or die(mysql_error());

//Creates users table
$query="";




?>

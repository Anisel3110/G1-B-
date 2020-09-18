<?php 

/* DEFINE DATABASE */

define('HOST', 'localhost');
define('DB_NAME', "dashmyboard");
define('USER', 'root');
define('PASS', '');

function connect_start()
{
	$link = new PDO("mysql:host=".HOST.";dbname=".DB_NAME, USER, PASS);
	if($link)
		$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $link;
}

function connect_end(&$link)
{
	$link = NULL;
}
?>
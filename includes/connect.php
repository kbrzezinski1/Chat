<?php


function connect()
{
	$servername = "localhost:8111";
	$username = "root";
	$password = '';
	$db = "czat";
	$dsn = "mysql:host=$servername;dbname=$db;charset=UTF8";

	try {
		$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

		return new PDO($dsn, $username, $password, $options);
	} catch (PDOException $e) {
		die($e->getMessage());
	}
}


return connect();

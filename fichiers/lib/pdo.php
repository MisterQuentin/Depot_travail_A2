<?php

function connexion($host,$baseName,$login,$password){
	$dsn = "mysql:host=".$host.";port=3306;dbname=".$baseName;
	$pdo = new PDO($dsn, $login, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
	return $pdo;
}

$pdo = connexion(HOST,BASENAME,LOGIN,PASSWORD);

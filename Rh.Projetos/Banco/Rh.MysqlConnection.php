<?php
function getConnection()
{
	$dsn = "mysql:host=localhost;dbname=rh_candidatos;charset=utf8";
	$user = "root";
	$pass = "";

	try
	{
		$pdo = new PDO($dsn, $user, $pass);
		return $pdo;
	} 
	catch(PDOException $ex)
	{
		echo "Erro: ".$ex->getMessage();
	}
}
<?php

include 'Banco/Rh.MysqlConnection.php';

class VagasRepositorio
{
	// private $conn;
	// function __construct() 
	// {
	// 	$conn = getConnection();
	// }

	public function InserirVagas(Vagas $vagas=null)
	{ 
		$conn = getConnection();
		
		$sql = "INSERT INTO vagas (descricao) VALUES (:descricao)";

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(':descricao', $vagas->getDescricaoVagas()); 

		if($stmt->execute())
		{
			echo "Salvo com sucesso!";
			$last_id = $conn->lastInsertId($sql);
			return $last_id;
		}
		else
		{
			echo "Erro ao salvar!";
		}
	}

	public function Listar()
	{
		$conn = getConnection();
		$sql = "SELECT * FROM tecnologias";

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare($sql);
		$stmt->execute();

		return $stmt->fetchall(PDO::FETCH_ASSOC);

		//$resultado = $stmt->setFetchMode(PDO::FETCH_ASSOC);		
	}
}
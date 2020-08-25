<?php

include 'Banco/Rh.MysqlConnection.php';

class TecnologiaRepositorio
{
	public function InserirTecnologia(Tecnologia $tecnologia)
	{ 
		$conn = getConnection();

		$sql = "INSERT INTO tecnologias (descricao) VALUES (:descricao)";

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(':descricao', $tecnologia->getDescricaoTecnologia());		 
		 
		if($stmt->execute())
		{
			echo "Salvo com sucesso!";
		}
		else
		{
			echo "Erro ao salvar!";
		}	
	}
}
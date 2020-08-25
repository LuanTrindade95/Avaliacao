<?php

class CargoRepositorio
{
	public function InserirCargo($idVaga, $idTecnologia)
	{
		$conn = getConnection();

		$sql = "INSERT INTO cargo (id_vagas,id_tecnologias) VALUES (:idVaga,:idTecnologia)";

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(':idVaga', $idVaga);
		$stmt->bindValue(':idTecnologia', $idTecnologia);	

		if($stmt->execute())
		{
			var_dump($tecnologias);
			echo "Salvo com sucesso!";
		}
		else
		{
			echo "Erro ao salvar!";
		}
	}
}
?>
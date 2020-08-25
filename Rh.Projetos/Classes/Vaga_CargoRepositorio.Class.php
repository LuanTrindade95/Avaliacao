<?php

class VagaCargoRepositorio
{
	public function InserirVagaCargo($idCandidato, $idTecnologia)
	{
		$conn = getConnection();

		$sql = "INSERT INTO vaga_cargo (id_candidatos,id_tecnologias) VALUES (:idCandidato,:idTecnologia)";

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(':idCandidato', $idCandidato);
		$stmt->bindValue(':idTecnologia', $idTecnologia);	

		if($stmt->execute())
		{
			var_dump($idCandidato);
			var_dump($idTecnologia);
			echo "Salvo com sucesso!";
		}
		else
		{
			echo "Erro ao salvar!";
		}
	}
}
?>
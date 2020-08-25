<?php

include 'Banco/Rh.MysqlConnection.php';
// include 'Rh.CargoPretendidoRepositorio.Class.php';

class CandidatoRepositorio
{
	public function InserirCandidato(Candidatos $candidatos)
	{ 
		$conn = getConnection();

		// $idSelect = "SELECT id_vagas FROM cargopretendido";
		// var_dump($idSelect);

		// $idInsert = "INSERT INTO vaga_cargo (id_vagas) VALUES (id_vagas)";
		// var_dump($idInsert);

		$sql = "INSERT INTO candidatos (nome,email,rg,cpf,dtnasc,sexo,endereco,telefone,cidade,nascionalidade,cargo_pretendido,formacao) 
		VALUES (:nome,:email,:rg,:cpf,:dtnasc,:sexo,:endereco,:telefone,:cidade,:nascionalidade,:cargo_pretendido,:formacao)";

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(':nome', $candidatos->getNome());
		$stmt->bindValue(':email', $candidatos->getEmail());
		$stmt->bindValue(':rg', $candidatos->getRG());
		$stmt->bindValue(':cpf', $candidatos->getCPF());
		$stmt->bindValue(':dtnasc', $candidatos->getDtnasc());
		$stmt->bindValue(':sexo', $candidatos->getSexo());
		$stmt->bindValue(':endereco', $candidatos->getEndereco());
		$stmt->bindValue(':telefone', $candidatos->getTelefone());
		$stmt->bindValue(':cidade', $candidatos->getCidade());
		$stmt->bindValue(':nascionalidade', $candidatos->getNascionalidade());
		$stmt->bindValue(':cargo_pretendido', $candidatos->getIdVaga());
		$stmt->bindValue(':formacao', $candidatos->getFormacao());
		 
		 
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

	public function ListarCargoPretendido()
	{
		$conn = getConnection();
		$sql = "SELECT * FROM vagas";

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare($sql);
		$stmt->execute();

		return $stmt->fetchall(PDO::FETCH_ASSOC);

		//$resultado = $stmt->setFetchMode(PDO::FETCH_ASSOC);		
	}
	
	public function imprimirTecnologias($idVaga, $idCandidato = 0)
	{
		$conn = getConnection();
		$sql = " 
			SELECT 
				tecnologias.id,
				tecnologias.descricao,
				(
					CASE 
						WHEN EXISTS 
						(
							SELECT 1 FROM vaga_cargo
							WHERE vaga_cargo.id_tecnologias = tecnologias.id
								AND vaga_cargo.id_candidatos = :idCandidato
						) THEN 1 ELSE 0
					END
				) as Selecionado 
			FROM cargo 
			INNER JOIN tecnologias 
				ON tecnologias.id = cargo.id_tecnologias
			WHERE cargo.id_vagas = :idVaga
		";

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":idVaga", $idVaga);
		$stmt->bindValue(":idCandidato", $idCandidato);
		$stmt->execute();

		return $stmt->fetchall(PDO::FETCH_ASSOC);

		//$resultado = $stmt->setFetchMode(PDO::FETCH_ASSOC);		
	}
}
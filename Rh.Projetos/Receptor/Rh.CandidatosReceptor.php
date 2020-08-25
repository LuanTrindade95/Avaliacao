<?php
header('Content-Type:application/json; charset=utf-8');
include 'Classes/CandidatoRepositorio.class.php';
include 'Classes/Candidatos.class.php';
include 'Classes/Vaga_CargoRepositorio.class.php';

$Candidatos = new Candidatos();
$CandidatosRepositorio = new CandidatoRepositorio();
$Vaga_CargoRepositorio = new VagaCargoRepositorio();

if( isset($_POST['acao']) && $_POST['acao'] == "imprimirTecnologias" ) 
{
	echo json_encode($CandidatosRepositorio->imprimirTecnologias($_POST['idVaga'], $_POST['idCandidato']),null);
	exit();
}

	$Candidatos->setNome($_POST["nome"]);
	$Candidatos->setEmail($_POST["email"]);
	$Candidatos->setRG($_POST["rg"]);
	$Candidatos->setCPF($_POST["cpf"]);
	$Candidatos->setDtnasc($_POST["dtnasc"]);
	$Candidatos->setSexo($_POST["sexo"]);
	$Candidatos->setEndereco($_POST["endereco"]);
	$Candidatos->setTelefone($_POST["telefone"]);
	$Candidatos->setCidade($_POST["cidade"]);
	$Candidatos->setNascionalidade($_POST["nascionalidade"]);	
	$Candidatos->setFormacao($_POST["formacao"]);
	$Candidatos->setIdVaga($_POST["vaga"]);

// $CandidatosRepositorio->InserirCandidato($Candidatos);

$idCandidatos = $CandidatosRepositorio->InserirCandidato($Candidatos);

$tecnologias = $_POST["tecnologias"];

if( !empty($tecnologias) )
{
	foreach ($tecnologias as $t) 
	{
		$Vaga_CargoRepositorio->InserirVagaCargo($idCandidatos, $t);
	}
}




// $cargoRepositorio = new CargoPretendidoRepositorio();
// $cargoRepositorio->InserirCargoPretendido($Candidatos);
<?php

include 'Classes/VagasRepositorio.Class.php';
include 'Classes/CargoRepositorio.Class.php';
include 'Classes/Vagas.Class.php';

$vagasRepositorio = new VagasRepositorio();
$cargoRepositorio = new CargoRepositorio();
$vagas = new Vagas;

$vagas->setDescricaoVagas($_POST["descricao"]);
$cargoArrayDescricao = $_POST["tecnologias"];

$idVaga = $vagasRepositorio->InserirVagas($vagas);

if( !empty($cargoArrayDescricao) ) 
{
	foreach ($cargoArrayDescricao as $v) 
	{	
		$cargoRepositorio->InserirCargo($idVaga, $v);
	}
}

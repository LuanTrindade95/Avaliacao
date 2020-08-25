<?php
include 'Classes/TecnologiaRepositorio.Class.php';
include 'Classes/Tecnologia.Class.php';

$tecnologia = new Tecnologia();

$tecnologia->setDescricaoTecnologia($_POST["descricao"]);

$TecnologiaRepositorio = new TecnologiaRepositorio();
$TecnologiaRepositorio->InserirTecnologia($tecnologia);
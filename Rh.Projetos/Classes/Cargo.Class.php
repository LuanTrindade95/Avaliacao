<?php

class Cargo
{
	public $idvaga;
	public $idtecnologia;

	public function getIdVaga()
	{
		return $this->$idvaga;
	}

	public function setIdVaga($e)
	{
		$this->$idvaga = $e;
	}

	public function getIdTecnologia()
	{
		return $this->$idtecnologia;
	}

	public function setIdTecnologia($e)
	{
		$this->$idtecnologia = $e;
	}
}

?>
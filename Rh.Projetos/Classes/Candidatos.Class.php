<?php

class Candidatos
{
	public $nome;
	public $email;
	public $rg;
	public $cpf;
	public $dtnasc;
	public $sexo;
	public $endereco;
	public $telefone;
	public $cidade;
	public $nascionalidade;
	public $idVaga;
	public $formacao;

	public function getNome()
	{
		return $this->nome;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function getRG()
	{
		return $this->rg;
	}

	public function getCPF()
	{
		return $this->cpf;
	}

	public function getDtnasc()
	{
		return $this->dtnasc;
	}

	public function getSexo()
	{
		return $this->sexo;
	}

	public function getEndereco()
	{
		return $this->endereco;
	}
	
	public function getTelefone()
	{
		return $this->telefone;
	}

	public function getCidade()
	{
		return $this->cidade;
	}

	public function getNascionalidade()
	{
		return $this->nascionalidade;
	}

	public function getIdVaga()
	{
		return $this->idVaga;
	}

	public function getFormacao()
	{
		return $this->formacao;
	}

	public function setNome($e)
	{
		$this->nome = $e;
	}

	public function setEmail($e)
	{
		$this->email = $e;
	}

	public function setRG($e)
	{
		$this->rg = $e;
	}

	public function setCPF($e)
	{
		$this->cpf = $e;
	}

	public function setDtnasc($e)
	{
		$this->dtnasc = $e;
	}

	public function setSexo($e)
	{
		$this->sexo = $e;
	}

	public function setEndereco($e)
	{
		$this->endereco = $e;
	}
	
	public function setTelefone($e)
	{
		$this->telefone = $e;
	}

	public function setCidade($e)
	{
		$this->cidade = $e;
	}

	public function setNascionalidade($e)
	{
		$this->nascionalidade = $e;
	}

	public function setIdVaga($e)
	{
		$this->idVaga = $e;
	}

	public function setFormacao($e)
	{
		$this->formacao = $e;
	}
}
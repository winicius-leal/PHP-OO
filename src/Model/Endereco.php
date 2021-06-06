<?php

 namespace Alura\Banco\Model; //Alura\Banco é o namespace RAIZ

class Endereco
{
	private string $cidade;
	private string $bairro;
	private string $rua;
	private string $numero;

	function __construct(string $cidade, string $bairro, string $rua, string $numero)
	{
		$this->cidade = $cidade;
		$this->bairro = $bairro;
		$this->rua = $rua;
		$this->numero = $numero;

	}

	public function getCidade():string
	{
		return $this->cidade;
	}


	public function setCidade(string $cidade):void
	{
		$this->cidade = $cidade;
	}

	public function getBairro():string
	{
		return $this->bairro;
	}

	public function setBairro(string $bairro):void
	{
		$this->bairro = $bairro;
	}
	public function getRua():string
	{
		return $this->rua;
	}
	public function setRua(string $rua):void
	{
		$this->rua = $rua;
	}
	public function getNumero():string
	{
		return $this->numero;
	}
	public function setNumero(string $numero):void
	{
		$this->numero = $numero;
	}

	public function __toString(): string
	{
    	return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
	}
	public function __get(string $nomeAtributo)
	{
	    $metodo = 'get' . ucfirst($nomeAtributo);
	    return $this->$metodo();
	}
}
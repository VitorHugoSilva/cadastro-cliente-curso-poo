<?php
/**
 *
 */
class Cliente
{
	private $nome;
	private $cpf;
	private $dataNasc;
	private $telefone;
	private $endereco;
	private $cep;
	private $bairro;
	private $cidade;
	private $uf;
	private $email;


	public function getNome()
	{
		return $this->nome;
	}

	public function setNome($nome)
	{
		$this->nome = $nome;
		return $this;
	}

	public function getCpf()
	{
		return $this->cpf;
	}

	public function setCpf($cpf)
	{
		$this->cpf = $cpf;
		return $this;
	}

	public function getDataNasc()
	{
		return $this->dataNasc;
	}

	public function setDataNasc($dataNasc)
	{
		$this->dataNasc = $dataNasc;
		return $this;
	}

	public function getTelefone()
	{
		return $this->telefone;
	}

	public function setTelefone($telefone)
	{
		$this->telefone = $telefone;
		return $this;
	}

	public function getEndereco()
	{
		return $this->endereco;
	}

	public function setEndereco($endereco)
	{
		$this->endereco = $endereco;
		return $this;
	}

	public function getCep()
	{
		return $this->cep;
	}

	public function setCep($cep)
	{
		$this->cep = $cep;
		return $this;
	}

	public function getBairro()
	{
		return $this->bairro;
	}

	public function setBairro($bairro)
	{
		$this->bairro = $bairro;
		return $this;
	}

	public function getCidade()
	{
		return $this->cidade;
	}

	public function setCidade($cidade)
	{
		$this->cidade = $cidade;
		return $this;
	}

	public function getUf()
	{
		return $this->uf;
	}

	public function setUf($uf)
	{
		$this->uf = $uf;
		return $this;
	}
	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;
		return $this;
	}

}
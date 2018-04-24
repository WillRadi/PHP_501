<?php

class Pessoa
{
	public function __construct()
	{
		echo "estou construindo um objeto";
	}

	public function __destruct()
	{
		echo "estou destruindo um objeto";
	}
}

// Automaticamente executa o construtor
$pessoa = new Pessoa();


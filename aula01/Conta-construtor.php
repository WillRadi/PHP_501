<?php

class Conta
{
	public $titular;
	public $saldo;

	public function __construct(string $titular, int $saldoInicial)
	{
		$this->titular = $titular;
		$this->saldo = $saldoInicial;
	}
}

$conta = new Conta('Will', 100);
var_dump($conta);
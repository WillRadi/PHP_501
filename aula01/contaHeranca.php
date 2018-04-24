<?php

abstract class Conta
{
	public $saldo;

	public function sacar()
	{
		return 'sacando';
	}

	public function depositar()
	{
		return 'depositando';
	}

	public verSaldo()
	{
		return $this->saldo;
	}
}

class contaCorrente extends Conta
{
	// Sobrescrevendo método/atributo:
	$public function sacar(){
		return 'sacando da CC';
	}
}

class contaPoupanca extends Conta
{

}


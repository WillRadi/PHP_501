<?php

class Conta
{
	public $saldo;
	public $nroConta;

	public function sacar(int $valorSaque)
	{
		if ($this->verSaldo() >= $valorSaque) {
			$this->saldo -= $valorSaque;
		} else {
			return 'Saldo insuficiente';
		}
	}

	public function depositar(int $valorDeposito)
	{
		$this->saldo += $valorDeposito;
	}

	public function verSaldo()
	{
		return $this->saldo;
	}
}

$conta = new Conta();

$conta->nroConta = rand(100, 999) . '-' . rand(0, 9);
$conta->depositar(500);
echo "Saldo tual da conta {$conta->nroConta} é {$conta->verSaldo()}";

echo '<br>';

$conta->sacar(75);
echo "Saldo tual da conta {$conta->nroConta} é {$conta->verSaldo()}";
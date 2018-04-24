<?php

class Conta
{
	private $saldo = 0;
	private $titular;
	private $numero;
	private $agencia;

	public function __call($metodo, array $parametros)
	{
		$atributo = lcfirst(substr($metodo, 3));
		$acao = substr($metodo, 0,3);

		echo $acao . ' : ' . $atributo . '<br>';
	}
}
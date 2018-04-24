<?php

trait Calculadora
{
	public function subtrair(int $num1, int $num2)
	{
		return $num1 - $num2;
	}
}

class Pessoa
{
	use Calculadora;

	public function getIdade()
	{
		return $this->subtrair(2018, 1991);
	}
}

$pessoa = new Pessoa();
echo $pessoa->getIdade();
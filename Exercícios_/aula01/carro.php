<?php

class Carro
{
	public $cor;
	public $marca;
	public $velocidade;
	public $marcha;

	public function acelerar(int $velocidadeFinal)
	{
		$this->velocidade = $velocidadeFinal;
		// $this->velocidade += 10;
	}

	public function freiar()
	{
		$this->velocidade = 0;
		// $this->velocidade -= 10;
	}

	public function trocarMarcha(int $novaMarcha)
	{
		$this->marcha = $novaMarcha;
	}

	public function verVelocidade()
	{
		return $this->velocidade;
	}

	public function verMarcha()
	{
		return $this->marcha;
	}
}

$carro1 = new Carro();

$carro1->marca 	= 'Fiat';
$carro1->cor 	= 'Preto';
var_dump($carro1);


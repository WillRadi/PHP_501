<?php

interface FreteStrategy
{
	public function calcular();
}

class FreteNormal implements FreteStrategy
{
	public function calcular()
	{
		echo "Frete normal";
	}
}

class FreteExpresso implements FreteStrategy
{
	public function calcular()
	{
		echo "Frete expresso";
	}
}

class FreteTurbo implements FreteStrategy
{
	public function calcular()
	{
		echo "Frete turbo";
	}
}

class Pedido
{
	public $frete;

	public function __construct(FreteStrategy $frete, int $preco)
	{
		$this->frete = $frete;
		// if($tipoFrete == 'normal')
		// {
		// 	echo 'Frete normal';
		// } elseif ($tipoFrete == 'expresso')
		// {
		// 	echo 'Frete expresso';
		// } elseif ($tipoFrete == 'turbo')
		// {
		// 	echo 'Frete turbo';
		// } else {
		// 	echo 'Nenhum frete selecionado';
		// }
	}

	public function calcularTotalPedido()
	{
		$this->frete->calcular();
	}
}

$frete = new FreteNormal();
$pedido = new Pedido($frete, 50);
$pedido->calcularTotalPedido();
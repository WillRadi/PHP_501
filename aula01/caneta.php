<?php

class Caneta
{
	// Atributos/propriedades
	public $cor;

	public $marca;

	// Estado (faz parte dos atributos):
	public $tampada = true;

	// Métodos

	public function escrever(string $texto)
	{
		return "Estou escrevendo" . $texto;
	}

	public function destampar()
	{
		$this->tampada = false;
	}

	public function tampar()
	{
		$this->tampada = true;
	}

	public function verCor()
	{
		return $this->cor;
	}
}

echo '<pre>';
$azul = new Caneta();
$vermelha = new Caneta();
// var_dump($azul);
// var_dump($vermelha);

// Chama-se alteração de estado do objeto:
$azul->cor = 'Azul';
$vermelha->cor = 'Vermelha';
$azul->marca = 'Bic';
$vermelha->marca = 'Faber-Castell';
var_dump($azul);
var_dump($vermelha);

echo '<pre>';
$azul->destampar();
echo $azul->escrever(' meu segundo objeto');
echo '<br>';
echo $azul->verCor();
<?php

class Pessoa
{
	public function __get($atributo)
	{
		echo "Estou tentando acessar o atributo {$atributo}"
	}

	public function __set($atributo, $valor)
	{
		echo "Estou tentando settar o valor {$valor} no atributo (Pegar um valor e colocar ele num atributo) {$atributo}"
	}
}

$pessoa = new Pessoa();
$pessoa->nome = 'Will';
echo '<br>';
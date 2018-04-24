<?php

class Caneta
{
	public static $tamanho = 10;
	private $cor;

	public function __construct(string $cor)
	{
		$this->cor = $cor;
	}

	public function getCor()
	{
		return $this->cor;
	}

	public function getTamanho()
	{
		return self::$tamanho;
	}
}
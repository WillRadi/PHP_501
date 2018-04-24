<?php

class Pai
{
	protected static $nome = 'Classe pai';
	public static function getNome()
	{
		return static::$nome
	}
}

class Filha extends Pai
{
	protected static $nome = 'Classe filha';
}

echo Filha::getNome();
echo Pai::getNome();
<?php
// Normalmente usado para conexão com bco de dados ou para trabalhar com sessão.
// Não se isntancia a conexão, mas sim a classe dentro da função getInstance (no caso, Banco)
class Conexao
{
	private static $instance = null;

	private function __construct(){}
	private function __clone(){}

	public static function getInstance()
	{
		if (!self::$instance) {
			self::$instance = new Banco();
		}

		return self::$instance;
	}
}


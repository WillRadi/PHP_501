<?php
// usar o Sigleton

class Conexao
{
	private static $instance = null;
	private function __construct(){}
	private function __clone(){}
	public static function getInstance()
	{
		if (!self::$instance) {
			self::$instance = new PDO('pgsql:host=localhost;dbname=aula','will','123');
			self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		return self::$instance;
	}
}


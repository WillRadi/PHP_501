<?php 

namespace Lib\Db;

use PDO;

class Connection
{
	private static $instance = null;

	private function __construct(){}
	private function __clone(){}

	public static function getInstance()
	{
		if (!self::$instance) {
			self::$instance = new PDO(DBDSN, DBUSER, DBPASS);
		}

		return self::$instance;
	}
}
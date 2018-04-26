<?php

namespace Model;

use TableGateway\TableGateway;

class User
{
	private $table;
	private $userData;
	
	public function __construct(string $nome, string $email, string $pass)
	{
		$this->userData = ['name' => $nome, 'email' => $email, 'pass' => $pass];
	}

	public function save()
	{
		$this->table = new TableGateway('users');
		$this->table->insert($this->userData);
	}

	public static function find(int $id)
	{
		$table = new TableGateway('users');
		$data = $table->find('*', 'id={$id}');
	}
}
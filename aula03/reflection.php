<?php

class User
{
	private $name;
	private $email;

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}
}

$reflection = new ReflectionClass('User');
echo '<pre>';
print_r($reflection->getProperties());
print_r($reflection->getMethods());

echo '<hr>';

public function test(string $test): string
{
	return $test;
}

// Encontarar Reflection que analise funções
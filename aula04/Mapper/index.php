<?php 
require 'autoload.php';

use Entity\Users;

// Instancia da Entidade Users;

// Mapper vai receber a instancia e salvar no banco

// Mapper retornar uma instancia de User

// Mapper vai receber a instancia e salvar no banco

// Mapper lista de Users

$mapper = new Mapper\UsersMapper();

$user = new Users();
$user->setName('Max');
$user->setEmail('maxmigle@migle');
$user->setPass('13546');
$user->

$mapper->create($user);


// $user4 = $mapper->findOne(4);

// var_dump($user4);
//print_r($mapper->findAll());
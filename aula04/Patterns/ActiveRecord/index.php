<?php 

require 'autoload.php';

use Model\User;

$lucas = new User('Tobias','pug@gmail.com', md5('123'));
$lucas->save();
$id = 14;
$lucas->findUser($id);
//$lucas = User::find($id);
// $lucas->nome = "Lucas Marques";
// $lucas->save();
// print_r(User::all());
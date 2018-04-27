<?php

require '../config/config.php';
require '../autoload.php';

use Lib\FrontController\FrontController;

(new FrontController())->run();

// User - lista usuários	= ok

// User/edit/$id - exibe usuário de id = $id 	= ok

// User/new - Exibe formulário para criaçao de usuario 

// user/create - recebe os dados do formulário e o cadastra
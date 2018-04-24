<?php

//String de conexão ≃ Data Source Name, User, Password
// Postgres: "pgsql:host=localhost;dbname=aula",
// "will",
// "123";
$dbPsql = new PDO("pgsql:host=localhost;dbname=aula","will","123");

// Se retornar um objeto, deu certo:
// echo '<pre>';
// var_dump($dbPsql);

// Ativando o recurso de rollback
// Reportando erros:
$dbPsql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//
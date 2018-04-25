<?php

require_once  dirname(__DIR__).'/DB/conexao.php';

$sql = "SELECT * FROM users";

// Cria um objeto do tipo queryString:
$stmt = $con->query($sql);

// Executa a query e traz todos os resultados no formato selecionado através da constante da classe PDO
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
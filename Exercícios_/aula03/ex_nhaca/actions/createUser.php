<?php

$nome = $_POST['name'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$db = $_POST['dbchoice'];

require_once '../DB/conexao.php';

try {
	// Inicia a transação
	$con->beginTransaction();

	// Declara a SQL:
	$sql = "INSERT INTO users (name, email, pass) VALUES ('{$nome}', '{$email}', '{$senha}')";
	
	// Executa a query -- Lembrando que exec é para querys que não precisam retorndar dados do banco.
	$con->exec($sql);

	// Se não ocorrer erro, ou seja, uma excessão, executará o commit:
	$con->commit();

	// Voltando para a home:
	header('location: ../index.php');
	
} catch (PDOException $e) {
	// Se der erro, ele cai no catch da excessão e então, faz o rollback:
	$con->rollback();

	// E exibe a msg de erro a partir do $e, q é um obj do tipo PDOException:
	echo "Erro: " . $e->getMessage();
}
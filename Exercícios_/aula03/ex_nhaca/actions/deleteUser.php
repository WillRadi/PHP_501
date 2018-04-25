<?php

$db = $_GET['dbchoice'];
$id = $_GET['id'];

require_once '../DB/conexao.php';
try {
	$con->beginTransaction();
	$sql = "DELETE FROM users WHERE id={$id}";
	$con->exec($sql);
	$con->commit();
	header('location:../index.php');
} catch (PDOException $e) {
	$con->rollback();
	echo "Erro: " . $e->getMessage();
}
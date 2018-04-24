<?php

require_once 'conexao.php';

// $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('Dhessica', 'dhessicaradi@gmail.com', MD5('123'))";
// echo $dbPsql->exec($sql);
// $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('Wendy', 'wendyradi@gmail.com', MD5('123'))";
// echo $dbPsql->exec($sql);
// $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('Mary', 'maryradi@gmail.com', MD5('123'))";
// echo $dbPsql->exec($sql);

// $sql = "UPDATE usuarios SET senha=MD5('321') WHERE id=3";
// echo $dbPsql->exec($sql);

// $sql = "DELETE FROM usuarios WHERE id=5";
// echo $dbPsql->exec($sql);

// $sql = "DELETE FROM usuarios WHERE id=3";
// echo $dbPsql->exec($sql);

// $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('Dhessica', 'dhessicaradi@gmail.com', MD5('123'))";
// echo $dbPsql->exec($sql);

// ==============================================

$sql = "SELECT * FROM usuarios";
$stmt = $dbPsql->query($sql);

// Lembrar que o stmt traz o índice numérico e índice com nome da coluna (array associativo).
// echo '<pre>';
// foreach ($stmt as $register) {
// 	print_r($register);
// }

// Constantes possíveis como parâmetro do método fetchAll:
// FETCH_ASSOC - Array associativo
// FETCH_NUM - Array indice numérico
// FETCH_OBJ - 
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>';
foreach ($usuarios as $usuario) {
	var_dump($usuario);
}

try {
	$dbPsql->beginTransaction();

	$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('William', 'williamradi@gmail.com', MD5('123'))";
	echo $dbPsql->exec($sql);

	// se der certo, faz o commit
	$dbPsql->commit();
} catch (PDOException $e)
{
	$dbPsql->rollback();
	echo "Erro: " . $e->getMessage();
}
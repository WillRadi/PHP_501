<?php

require_once 'conexao.php';

// $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?,?,?);";
// ou 
$sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";


try {
	$dbPsql->beginTransaction();

	$stmt = $dbPsql->prepare($sql);

	// para bindParam deve ser passado uma variável, não o tipo primitivo.
	// $stmt->bindParam(':nome', $nome);
	// $stmt->bindParam(':email', $email);
	// $stmt->bindParam(':senha', $senha);

	$stmt->bindValue(':nome', 'Paulo');
	$stmt->bindValue(':email', 'pauloradi@gmail');
	$stmt->bindValue(':senha', '1234');

	$stmt->execute();

	$dbPsql->commit();
} catch (PDOException $e)
{
	$dbPsql->rollback();
	echo "Erro: " . $e->getMessage();
}
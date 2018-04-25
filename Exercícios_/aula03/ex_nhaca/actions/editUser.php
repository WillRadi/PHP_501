<?php
require_once '../DB/conexao.php';

$sql = "SELECT * FROM users WHERE id={$id}";

$stmt = $con->query($sql);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

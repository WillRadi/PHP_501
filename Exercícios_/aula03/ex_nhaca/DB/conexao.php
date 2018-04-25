<?php

if (empty($db)) {
	$db = $_POST['dbchoice'] ?? "mysql" ;
}

if ($db == 'mysql') {
	$con = new PDO("mysql:host=localhost;dbname=aula","will","@da4linux");
} else {
	$con = new PDO("pgsql:host=localhost;dbname=aula", "will", "123");
}

$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
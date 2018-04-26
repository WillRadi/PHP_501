<?php
// TableGateway é usado em conjunto com Mapper ===> Mapper passa dados p TG, que joga no banco.

require 'conexao.php';

class TableGateway
{
	private $con;

	public function __construct()
	{
		$this->con = Conexao::getInstance();
	}

	private function bind(PDOStatement $stmt, array $data)
	{
		foreach ($data as $key => $value) {
			$stmt->bindValue(':' . $key, $value);
		}
		return $stmt;
	}

	public function insert(string $tabela, array $data)
	{
		foreach ($data as $chave => $valor) {
			$keys[] = $chave;
			$params[] = ":{$chave}";
		}

		$keys = implode(',', $keys);
		$params = implode(',', $params);

		$sql = "INSERT INTO {$tabela} ({$keys}) VALUES ($params)";

		try {
			$this->con->beginTransaction();
			$stmt = $this->con->prepare($sql);
			$this->bind($stmt, $data);
			$stmt->execute();
			$this->con->commit();
		} catch (PDOException $e) {
			$this->con->rollback();
			echo "Erro: " . $e->getMessage();
		}
	}

	public function update()
	{

	}

	public function delete()
	{

	}

	public function find()
	{

	}

	public function findAll()
	{

	}
}

$array = [
			'name' => 'GenericoNome', 
			'email' => 'generico@emailgenerico',
			'pass' => '654321'
		];
$teste = new TableGateway();
$teste->insert('users', $array);
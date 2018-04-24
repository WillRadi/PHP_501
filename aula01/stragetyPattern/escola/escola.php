<?php

class Aluno
{
	public $nome;
	public $email;

	public function __construct(string $nome, string $email)
	{
		$this->nome = $nome;
		$this->email = $email;
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function getEmail()
	{
		return $this->email;
	}
}

class Turma
{
	public $curso;
	public $periodo;

	public function __construct(string $curso, string $periodo)
	{
		$this->curso = $curso;
		$this->periodo = $periodo;
	}

	public function getCurso()
	{
		return $this->curso;
	}

	public function getPeriodo()
	{
		return $this->periodo;
	}
}

class Matricula
{
	public $aluno;
	public $turma;

	public function __construct(Aluno $aluno, Turma $turma)
	{
		$this->aluno = $aluno;
		$this->turma = $turma;
	}

	public function getAluno()
	{
		return $this->aluno;
	}

	public function getTurma()
	{
		return $this->turma;
	}
}

$will = new Aluno('Will', 'williamradi@gmail.com');
$turma = new Turma('PHP', 'diurno');

echo $will->getNome();
echo '<br>';
echo $turma->getCurso();
echo '<br>';

$matricula = new Matricula($will, $turma);
echo '<pre>';
// var_dump($matricula);
echo $matricula->aluno->getNome();
echo '<br>';
echo $matricula->turma->getCurso();

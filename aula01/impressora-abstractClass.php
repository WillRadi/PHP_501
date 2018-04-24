<?php 

class Impressora
{
	public function imprimir(docGenerico $doc)
	{
		$conteudo = $doc->getConteudo();
		echo $conteudo;
	}
}



abstract class docGenerico
{
	public abstract function getConteudo();
}



class Documento extends docGenerico
{
	public $conteudo;

	public function __construct(string $conteudo)
	{
		$this->conteudo = $conteudo;
	}
	public function getConteudo()
	{
		return $this->conteudo;
	}
}

class Planilha extends docGenerico
{
	public $conteudo;

	public function __construct(array $conteudo)
	{
		foreach ($conteudo as $linha) {
			$this->conteudo .= $linha .'<br>';
		}
	}
	public function getConteudo()
	{
		return $this->conteudo;
	}
}

$documento = new Documento('4linux');
$imp = new Impressora();
$imp->imprimir($documento);
echo '<hr>';
$planilha = new Planilha(['4linux','php','501']);
$imp->imprimir($planilha);

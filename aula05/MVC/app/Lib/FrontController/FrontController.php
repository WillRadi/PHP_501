<?php

// recebe Rota e sabe o q fazer com ela.

namespace Lib\FrontController;

class FrontController
{
	public function run()
	{
		//?r=ROTA
		// Se não estiver setado o parâmetro r no GET, ele assume o 'home'
		$rota = $_GET['r'] ?? 'home';

		// Preparando para acessar métodos da rota chamada;
		$rota = explode('/', $rota);

		// Se não houver nada nos parâmetros, acessa o controller home, com action index
		$controller = $rota[0] ?? 'home';
		$action = $rota[1] ?? 'index';

		// Passando também o ID para receber com parâmetro (&id=__) ou por rota (.../10)

		$id = null;
		if (isset($rota[2])) {
			$id = $rota[2];
		} else if (isset($_GET['id'])) {
			$id = $_GET['id'];
		}

		// paranauê pra especificar o Controller (Classe do controller):
		$controller = 'Controller\\' . ucfirst($controller) . 'Controller';

		
		// Criar uma instância da Classe contida no $controller:
		// Todos os controllers dentro da pasta Controller.. POr isso o controller\\
		// Logo, o objController vai receber Controller/HomeController() e instanciar ele
		$objController = new $controller();

		// Aqui chama o action passdo por rota
		// Acessa o método passado via get
		$objController->$action($id);
	}
}
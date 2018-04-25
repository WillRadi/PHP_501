<?php 
function limpaTela()
{
	system('clear');
}

function menu()
{
	do {
		echo '-------------------' . PHP_EOL;
		echo '-  1 - atender    -' . PHP_EOL;
		echo '-  2 - add pedido -' . PHP_EOL;
		echo '-  3 - ver fila   -' . PHP_EOL;
		echo '-  0 - sair       -' . PHP_EOL;
		echo '-------------------' . PHP_EOL;

		$op = readline('Digite uma opcao: ');


	} while ($op < 0 || $op > 3 );
	return $op;
}

$fila = new SplQueue();

do {
	$op = menu();

	switch ($op) {
		case '1':
			if (count($fila) <= 0) {
				echo "Não há pedidos. Impossível atender." . PHP_EOL;
			} else {
				echo "O pedido " . $fila->dequeue() . " Foi atendido" . PHP_EOL;
			}
			limpaTela();
			break;

		case '2':
			$pedido = readline('Qual o pedido? ' . PHP_EOL);
			$fila->enqueue($pedido);
			echo "Pesido adicionado com sucesso!" . PHP_EOL;
			limpaTela();
			break;

		case '3':
			echo "Lista de pedidos: " . PHP_EOL;
			$i = 1;
			foreach ($fila as $pedido) {
				echo $i . " - " . $pedido . PHP_EOL;
				$i++;
			}
			readline('Continuar');
			limpaTela();
			break;
		default:
			break;
	}
} while ($op != 0);

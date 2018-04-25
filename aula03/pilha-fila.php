<?php

$pilha = new splStack();

echo 'Pilha:';
$pilha->push(1);
$pilha->push(2);
$pilha->push(3);
$pilha->push(4);

foreach ($pilha as $key => $value) {
	#terminar
}

echo '<hr>';

$fila = new SplQueue();

// Coloca na fila:
$fila->enqueue(1);
$fila->enqueue(2);
$fila->enqueue(3);
$fila->enqueue(4);

// Tira da fila:
$fila->dequeue();
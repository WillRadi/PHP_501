<?php

trait Log
{
	public function escreverlog($msg)
	{
		echo "Log da {$msg} ";
	}
}

class x
{
	use Log;
}

class y extends x
{
	public function save()
	{
		$this->escreverlog('Trait');
	}
}

$y = new y();
$y->save();
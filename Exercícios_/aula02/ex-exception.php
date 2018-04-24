<?php
class NumeroNegativo extends Exception{}
class ResultadoMaiorQueCinquenta extends Exception {}
class ResultadoMenorQueZero extends Exception {}
class MultiplicarPorZero extends Exception {}
class DivisaoPorZero extends Exception {}
class DivisaoDeZero extends Exception {}


class Calculadora
{
	public function somar(int $num1, int $num2)
	{
		$result = $num1 + $num2;
		if ($num1 < 0 || $num2 < 0) {
			throw new NumeroNegativo;
		} elseif($result >= 50) {
			throw new ResultadoMaiorQueCinquenta;
		} else {
			return $result;
		}
	}	

	public function subtrair(int $num1, int $num2)
	{
		$result = $num1 - $num2;
		if ($result < 0) {
			throw new ResultadoMenorQueZero;
		} else {
			return $result;
		}
	}	

	public function didivir(int $num1, int $num2)
	{
		$result = $num1 / $num2;

		if ($num2 === 0) {
			throw new DivisaoPorZero;
		} elseif ($num1 === 0){
			throw new DivisaoDeZero;
		} else {
			return $result;
		}
	}	

	public function multiplicar(int $num1, int $num2)
	{
		$result = $num1 * $num2;

		if ($num2 === 0) {
			throw new MultiplicarPorZero;
		} elseif ($result > 50) {
		 	throw new ResultadoMaiorQueCinquenta;
		} else {
			return $result;
		} 
	}
}

$calc = new Calculadora;

try {
	$calc->multiplicar(2, 0);
	
} 
catch (NumeroNegativo $e)
{
	echo 'Número passo é menor do que 0';
}
catch (ResultadoMaiorQueCinquenta $e)
{
	echo 'Resultado maior do que 50';
}
catch (ResultadoMenorQueZero $e)
{
	echo 'Resultado Negativo';
}
catch (MultiplicarPorZero $e)
{
	echo 'Não é possível multiplicar por 0';
}
catch (DivisaoPorZero $e)
{
	echo 'Não é possível dividir por 0';
}
catch (DivisaoDeZero $e)
{
	echo 'Não é possível dividir 0';
}
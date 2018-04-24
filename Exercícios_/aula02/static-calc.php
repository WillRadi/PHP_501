<?php

class Calc
{
	public static function somar(int $num1, int $num2)
	{
		return $num1 + $num2;
	}	

	public static function subtrair(int $num1, int $num2)
	{
		return $num1 - $num2;
	}	

	public static function dividir(int $num1, int $num2)
	{
		return $num1 / $num2;
	}	

	public static function multiplicar(int $num1, int $num2)
	{
		return $num1 * $num2;
	}
}

echo Calc::somar(5, 8);
echo '<br>';
echo Calc::subtrair(5, 8);
echo '<br>';
echo Calc::dividir(5, 8);
echo '<br>';
echo Calc::multiplicar(5, 8);
echo '<br>';
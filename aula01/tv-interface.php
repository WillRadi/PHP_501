<?php 

interface TvInterface
{
	public function aumentaVolume();
	public function diminuiVolume();
	public function liga();
	public function desliga();
	public function trocarCanal(int $novoCanal);
}

class Tv implements TvInterface
{
	public $status;
	public $canal;
	public $volume;

	public function __construct()
	{
		$status = false;
		$canal = 2;
		$volume = 30;
	}

	public function liga()
	{
		if (!$this->status) {
			$this->status = true;
			echo 'A tv ligou<br>';
		} else {
			echo 'TV já está ligada';
		}
	}

	public function desliga()
	{
		if ($this->status) {
			$this->status = false;
		} else {
			echo 'TV já está desligada';
		}
	}

	public function aumentaVolume()
	{
		if ($this->status) {
			$this->volume += 10;
			echo "Volume: " . $this->volume;
		} else {
			echo 'Tv desligada';
		}
	}

	public function diminuiVolume()
	{
		if ($this->status) {
			$this->volume -= 10;
			echo "Volume: " . $this->volume;
		} else {
			echo 'Tv desligada';
		}
	}

	public function trocarCanal(int $novoCanal)
	{
		if ($this->status) {
			$this->canal = $novoCanal;
		} else {
			echo 'Tv desligada';
		}
	}
}

$tv = new Tv();

$tv->liga();
echo $tv->volume;

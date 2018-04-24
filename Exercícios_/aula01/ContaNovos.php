<?php 

abstract class Conta
{
	public $saldo;
	public $numConta;
	public $titular;
	public $status;

	public function sacar(int $valor)
	{
		if ($this->status) {
			if ($this->verSaldo() >= $valor) {
				$this->saldo -= $valor;
			} else {
				return 'Saldo insuficiente';
			}
		} else {
			echo 'Conta inexistente';
			die();
		}
	}

	public final function verSaldo()
	{
		if ($this->status == true) {
			return $this->saldo;
		} else {
			echo 'Conta inexistente';
		}
	}


	public function fecharConta()
	{
		if ($this->status == true) {
			if($this->verSaldo() == 0)
			{
				$status = false;
			} else {
				echo 'Saldo da conta é diferente de 0,00. Impossível fechá-la' . PHP_EOL;
			}
		} else {
			echo 'Conta inexistente';
			die();
		}
	}

	public abstract function abrirConta(int $valor);
	public abstract function depositar(int $valor);
	public abstract function gerarNumConta();
}

class ContaCorrente extends Conta
{
	public $chequeEspecial;

	public function abrirConta(int $valor)
	{
		if (empty($this->conta)) {
			if ($valor >= 50) {
				$this->status = true;
				$this->numConta = $this->gerarNumConta();
				$this->saldo = $valor;
			} else {
				echo 'Valor mínimo para abertura da conta deve ser R$50,00' . PHP_EOL;
				die();
			}
		} else {
			echo 'Conta já aberta';
			die();
		}
	}

	public function gerarNumConta()
	{
		return "CC: " . rand(100, 999) . '-' . rand(10, 99);
	}

	public function depositar(int $valor)
	{
		if ($this->status == true) {
			$this->saldo += $valor;
		} else {
			echo 'Conta inexistente';
			die();
		}
	}

	public function sacar(int $valor)
	{
		if ($this->status == true) {
			if ($valor >= $this->verSaldo()) {
				$this->chequeEspecial = true;
				$this->saldo -= ($valor + 1);
			} else {
				$this->saldo -= $valor;
			}
		} else {
			echo 'Conta inexistente';
			die();
		}
	}
}

class contaPoupanca extends Conta
{
	public $numConta;

	public function depositar(int $valor)
	{
		if ($this->status == true) {
			$this->saldo += ($valor + 1);
		} else {
			echo 'Conta inexistente';
			die();
		}
	}

	public function gerarNumConta()
	{
		return "CP: " . rand(100, 999) . '-' . rand(10, 99);
	}

	public function abrirConta(int $valor)
	{
		if (empty($this->status)) {
			if ($valor >= 100) {
				$this->status = true;
				$this->numConta = $this->gerarNumConta();
				$this->saldo = $valor;
			} else {
				echo 'Valor mínimo para abertura da conta deve ser R$100,00' . PHP_EOL;
				die();
			}
		} else {
			echo 'Conta já está aberta';
			die();
		}
	}
}

// ====================================================================================

$tipo = readline('Qual tipo de conta vc deseja abrir (cc / cp)? ' . PHP_EOL);

if ($tipo == 'cc')
{
	$conta = new ContaCorrente();
} else {
	$conta = new contaPoupanca();
}

$valor = readline('Qual o valor que deseja depositar? ' . PHP_EOL);

$conta->abrirConta($valor);
echo 'Conta ' . $conta->numConta . ' gerada com sucesso' . PHP_EOL;

$saque = readline('Quanto deseja sacar? O saldo atual é ' . $conta->verSaldo() . ' ' . PHP_EOL);
$conta->sacar($saque);
echo 'ok. Seu Salto atual é de ' . $conta->verSaldo() . ' ' . PHP_EOL;


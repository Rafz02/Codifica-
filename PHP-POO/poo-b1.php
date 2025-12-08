<?php

class ContaBancaria {

    protected $numeroConta;
    protected $titular;
    protected $saldo;

    public function __construct($titular, $saldoInicial = 0)
    {
        $this->titular = $titular;

        if ($saldoInicial < 0) {
            echo "Saldo inicial inválido, colocando 0.\n";
            $this->saldo = 0;
        } else {
            $this->saldo = $saldoInicial;
        }
    }

    public function getNumeroConta() {
        return $this->numeroConta;
    }

    public function getTitular() {
        return $this->titular;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function depositar($valor) {
        if ($valor <= 0) {
            echo "Valor para depositar inválido!\n";
        } else {
            $this->saldo += $valor;
            echo "Depósito feito.\n";
        }
    }

    public function sacar($valor) {
        if ($valor <= 0) {
            echo "Valor para sacar inválido!\n";
        } else if ($valor > $this->saldo) {
            echo "Não tem saldo suficiente!\n";
        } else {
            $this->saldo -= $valor;
            echo "Saque realizado.\n";
        }
    }

    public function exibirSaldo() {
        echo "Conta: " . $this->numeroConta . " - Titular: " . $this->titular . " - Saldo: R$ " . $this->saldo . "\n";
    }
}

class ContaCorrente extends ContaBancaria {

    private const TAXA_SAQUE = 3.50;
    private const TAXA_TRANSFERENCIA = 1.50;

    public function __construct($titular, $saldoInicial = 0)
    {
        parent::__construct($titular, $saldoInicial);
        $this->numeroConta = $this->gerarNumeroConta();
    }

    public static function gerarNumeroConta() {
        $numeros = "";
        for ($i = 0; $i < 8; $i++) {
            $numeros .= rand(0, 9);
        }

        $soma = 0;
        for ($i = 0; $i < 8; $i++) {
            $soma += $numeros[$i] * ($i + 1);
        }

        $digito = $soma % 11;
        if ($digito == 10) {
            $digito = 0;
        }

        return $numeros . "-" . $digito;
    }

    public function sacar($valor) {
        $valorTotal = $valor + self::TAXA_SAQUE;

        if ($valor <= 0) {
            echo "Valor inválido.\n";
        } else if ($valorTotal > $this->saldo) {
            echo "Saldo insuficiente para sacar com a taxa.\n";
        } else {
            $this->saldo -= $valorTotal;
            echo "Saque feito (taxa aplicada).\n";
        }
    }

    public function transferirDinheiro($contaDestino, $valor) {
        $total = $valor + self::TAXA_TRANSFERENCIA;

        if ($valor <= 0) {
            echo "Valor inválido.\n";
        } else if ($total > $this->saldo) {
            echo "Saldo insuficiente para transferir.\n";
        } else {
            $this->saldo -= $total;
            $contaDestino->depositar($valor);
            echo "Transferência feita.\n";
        }
    }
}

class ContaPoupanca extends ContaBancaria {

    protected $porcentagemRendimento = 0.01; // 1%

    public function __construct($titular, $saldoInicial = 0)
    {
        parent::__construct($titular, $saldoInicial);
        $this->numeroConta = $this->gerarNumeroConta();
    }

    public static function gerarNumeroConta() {
        $numeros = "";
        for ($i = 0; $i < 6; $i++) {
            $numeros .= rand(0, 9);
        }

        $soma = 0;
        for ($i = 0; $i < 6; $i++) {
            $soma += $numeros[$i] * ($i + 1);
        }

        $digito = $soma % 11;
        if ($digito == 10) {
            $digito = 0;
        }

        return $numeros . "-" . $digito;
    }

    public function getPorcentagemRendimento() {
        return $this->porcentagemRendimento;
    }

    public function setPorcentagemRendimento($novoValor) {
        if ($novoValor < 0) {
            echo "Valor de rendimento inválido!\n";
        } else {
            $this->porcentagemRendimento = $novoValor;
        }
    }

    public function aplicarRendimento() {
        $rendimento = $this->saldo * $this->porcentagemRendimento;
        $this->saldo += $rendimento;
        echo "Rendimento aplicado.\n";
    }
}



// Testando codiguinho
echo "Criando contas";
$cc1 = new ContaCorrente("Rafael", 500);
$cc2 = new ContaCorrente("Marcia", -50);

$cp1 = new ContaPoupanca("Pedro Alvares", 200);
$cp2 = new ContaPoupanca("Ana Catarina", -10);

echo "Números das contas";
echo $cc1->getNumeroConta() . "\n";
echo $cp1->getNumeroConta() . "\n";

echo "Testando Poupança";
$cp1->exibirSaldo();
$cp1->depositar(100);
$cp1->sacar(50);
$cp1->exibirSaldo();

echo "Testando Conta Corrente";
$cc1->exibirSaldo();
$cc1->sacar(100);
$cc1->exibirSaldo();

echo "Transferência";
$cc1->transferirDinheiro($cp1, 80);
$cc1->exibirSaldo();
$cp1->exibirSaldo();

echo "Rendimento";
$cp1->setPorcentagemRendimento(0.02);
$cp1->aplicarRendimento();
$cp1->exibirSaldo();




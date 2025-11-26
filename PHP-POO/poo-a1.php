<?php
class ContaBancaria{
    private float $NumeroConta;
    private string $NomeTitular;
    private float $Saldo;

    public function __construct($NumeroConta, $NomeTitular, $Saldo)
    {
        $this->NumeroConta = $NumeroConta;
        $this->NomeTitular = $NomeTitular;
        $this->Saldo = $Saldo;
    }

    public function depositar($Quantidade)
    {
        if($Quantidade > 0){
            $this->Saldo += $Quantidade;
        }else{
            echo "Valor invalidado, ERRO";
        }

    }

    public function sacar($Quantidade)
    {
        if ($Quantidade > 0 && $Quantidade <= $this->Saldo){
            $this-> Saldo -= $Quantidade;
        }else{
            echo "Valor invalidado ou Saldo tá baixo kk";
        }
            
    }

    public function exibirsaldo(){
        echo "Saldo total na conta é (" . $this->NumeroConta . ") é igual R$ $this->Saldo";
    }

}
//executando o banquinho
$conta = new ContaBancaria(6767, "Rafael", 1671);

$conta->depositar(567);
$conta->sacar(267);
$conta->exibirsaldo();
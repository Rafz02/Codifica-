<?php

class Funcionarios{
    private string $Nome;
    private string $Cargo;
    private float $Salario;

    public function __construct($Nome, $Cargo, $Salario){
        $this->Nome = $Nome;
        $this->Cargo = $Cargo;
        $this->Salario = $Salario;
    }

    public function  ajustarSalario($NovoSalario){
        if ($this->Salario == $NovoSalario){
            echo "Ajuste com problemas.";
        } else {
            $this->Salario = $NovoSalario;
            echo 'Salário renovado com sucesso.';
        }
    }

    public function alterarCargo(string $NovoCargo){
        $this->Cargo = $NovoCargo;
        echo "Cargo do funcionário $this->Nome sendo atualizado para $NovoCargo";
    }

    public function  exibirDetalhes(){
        echo "Detalhe \n \n \n Funcionário: $this->Nome. \n Cargo: $this->Cargo. \n Salário: R$ $this->Salario";
    }

  }
$func = new Funcionarios("Rafael", "Repositor", 1671);
$func->exibirDetalhes();
$func->ajustarSalario(2000);
$func->alterarCargo("Supervisor");
$func->exibirDetalhes();
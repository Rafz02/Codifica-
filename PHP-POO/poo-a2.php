<?php

class Produto{
    private string $Nome;
    private float $Preco;
    private float $QuantidadeEstoque;

    public function __Construct($Nome, $Preco, $QuantidadeEstoque){
        $this->Nome = $Nome;
        $this->Preco = $Preco;
        $this->QuantidadeEstoque = $QuantidadeEstoque;
    }

    public function  AlterarPreco($NovoPreco){
        $this->Preco = $NovoPreco;
    }

    public function AjustarEstoque($Quantidade){
        $this->QuantidadeEstoque = $Quantidade;
    }

    public function ExibirDetalhes(){
        echo 'Produto: ' . $this->Nome . PHP_EOL . 'Preço: ' . $this->Preco . PHP_EOL . 'Quantidade: ' . $this->QuantidadeEstoque . PHP_EOL;
    }

}


//Execultando codiguinho
$ProdutoA = new Produto("Pitu", 4.67, 67);
$ProdutoA->ExibirDetalhes();
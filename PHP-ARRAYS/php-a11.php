<?php
/*Você está desenvolvendo um sistema para gerenciar o estoque de uma loja de roupas.
Dados de Estoque:
• Código do Produto: xxxx
• Nome do produto: xxxx
• Tamanho: xxxx
• Cor: xxxx
• Quantidade: xxxx
Funções:
• exibirMenu(): Função para oferecer as 5 opções ao usuário e continua em um
loop até que o usuário escolha a opção de sair.
• adicionarProduto($estoque, $codigo, $nomeProduto, $tamanho, $cor,
$quantidade): Adiciona um novo produto ao estoque, com seus atributos.
• venderProduto($estoque, $codigo, $quantidade): Remove um produto do
estoque, com seus atributos.
• verificarEstoque($estoque, $codigo): Verifica se um produto com as
características especificadas está disponível no estoque.
• listarEstoque($estoque): Imprime a lista completa do estoque, com todos os
produtos e suas quantidades.
Procedimentos:
1. Crie a branch com o nome de xx-cod-php-a11, onde xx são as suas iniciais.
2. Crie um array para armazenar os produtos e suas informações.
3. Utilize um switch case para oferecer opções ao usuário em um loop até que o
usuário escolha a opção de sair. Neste script, use a função exibirMenu() para
exibir o menu de opções e solicitar ao usuário que insira uma escolha.
4. Utilize um loop while para continuar executando até que o usuário escolha a
opção 5 para sair. As opções são:
a. (1) Adicionar um produto
b. (2) Remover um produto
c. (3) Verificar o estoque
d. (4) Listar o estoque
e. (5) Sair
5. Utilize a função adicionarProduto() para inserir dados de estoque
6. Utilize a função venderProduto() para simular a venda de alguns produtos. Se a
quantidade for zero, remover o produto do array
7. Utilize a função verificarEstoque() para verificar a disponibilidade de um produto
específico.
8. Utilize a função listarEstoque() para exibir o estoque atualizado*/

$estoque = [];

function exibirMenu() {
    echo "\n------ MENU ------\n";
    echo "1. Adicionar um produto\n";
    echo "2. Remover um produto (vender)\n";
    echo "3. Verificar o estoque\n";
    echo "4. Listar o estoque\n";
    echo "5. Sair\n";
    $opcao = readline("Escolha sua opção: ");
    return $opcao;
}

function adicionarProduto(&$estoque, $codigo, $nome, $tamanho, $cor, $quantidade) {
    $estoque[] = [
        'codigo' => $codigo,
        'nome' => $nome,
        'tamanho' => $tamanho,
        'cor' => $cor,
        'quantidade' => (int)$quantidade
    ];
    echo "Produto adicionado com sucesso!\n";
}

function venderProduto(&$estoque, $codigo, $quantidadeRemover) {
    foreach ($estoque as $index => $produto) {
        if ($produto['codigo'] === $codigo) {
            if ($produto['quantidade'] >= $quantidadeRemover) {
                $estoque[$index]['quantidade'] -= $quantidadeRemover;
                echo "Venda feita com sucesso meu rei!\n";

                
                if ($estoque[$index]['quantidade'] == 0) {
                    unset($estoque[$index]);
                    echo "Produto foi de base, esgotado.\n";
                }
            } else {
                echo "Acabou, vazio esgotado, não tem mais nada!\n";
            }
            return;
        }
    }
    echo "Produto evaporado e não a sequer vestijos!\n";
}

function verificarEstoque($estoque, $codigo) {
    foreach ($estoque as $produto) {
        if ($produto['codigo'] === $codigo) {
            echo "Produto encontrado: {$produto['nome']} ({$produto['quantidade']} unidades)\n";
            return;
        }
    }
    echo "Produto não encontrado no estoque.\n";
}

function listarEstoque($estoque) {
    if (empty($estoque)) {
        echo "Estoque vazio.\n";
        return;
    }

    echo "\n------ ESTOQUE ------\n";
    foreach ($estoque as $produto) {
        echo "Código: {$produto['codigo']}, ";
        echo "Nome: {$produto['nome']}, ";
        echo "Tamanho: {$produto['tamanho']}, ";
        echo "Cor: {$produto['cor']}, ";
        echo "Quantidade: {$produto['quantidade']}\n";
    }
}

while (true) {
    $opcao = exibirMenu();

    switch ($opcao) {
        case 1:
            $codigo = readline("Código do produto: ");
            $nome = readline("Nome do produto: ");
            $tamanho = readline("Tamanho: ");
            $cor = readline("Cor: ");
            $quantidade = readline("Quantidade: ");
            adicionarProduto($estoque, $codigo, $nome, $tamanho, $cor, $quantidade);
            break;

        case 2:
            $codigo = readline("Código do produto para vender: ");
            $quantidade = (int)readline("Quantidade a vender: ");
            venderProduto($estoque, $codigo, $quantidade);
            break;

        case 3:
            $codigo = readline("Código do produto para verificar: ");
            verificarEstoque($estoque, $codigo);
            break;

        case 4:
            listarEstoque($estoque);
            break;

        case 5:
            echo "Programa sendo encerrado em 3,2,1..\n";
            exit;

        default:
            echo "Opção inválida. Tente novamente, qualquer coisa tente de novo.\n";
            break;
    }
}

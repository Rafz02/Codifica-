SELECT 
    produtos.id AS id_produto,
    produtos.nome AS nome_produto,
    produtos.categoria,
    produtos.preco,
    fornecedores.id AS id_fornecedor,
    fornecedores.razao_social AS nome_fornecedor
FROM produtos
JOIN fornecedores
ON produtos.id = fornecedores.id;
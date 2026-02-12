CREATE database if not exist gestao_produtos;
DROP TABLE produtos;

CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(30) NOT NULL,
    descricao TEXT,
    categoria VARCHAR(50),
    preco DECIMAL(10,2),
    peso DECIMAL(5,2),
    quantidade BIGINT,
    fornecedor VARCHAR(100),
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    atualizado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    deletado_em TIMESTAMP NULL DEFAULT NULL


CREATE table fornecedores (
    id int auto_increment primary key,
    razao_social varchar(30),
    cnpj decimal(10),
    criado_em timestamp default current_timestamp,
    atualizado_em timestamp default current_timestamp,
    deletado_em timestamp default current_timestamp on update current_timestamp);
    select* from fornecedores;
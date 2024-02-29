-- Criar banco de dados (Modelagem física)


CREATE DATABASE vendas CHARACTER SET utf8mb4;

USE vendas;


-- _________________________________

-- Criar tabela fabricantes


CREATE TABLE fabricantes(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(45) NOT NULL
);


-- _________________________________

-- Criar tabela produtos

CREATE TABLE produtos(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(45) NOT NULL, 
    descricao TEXT(1000) NOT NULL,
    preco DECIMAL(6,2) NOT NULL,
    quantidade TINYINT(4) NOT NULL,
    fabricante_id INT NOT NULL
);


-- _________________________________

-- Criação da chave estrangeira (relacionamento entre as tabelas)

ALTER TABLE produtos
    
    ADD CONSTRAINT fk_produtos_fabricantes
    FOREIGN KEY(fabricante_id) REFERENCES fabricantes(id)


-- RODAR ATÉ AQUI 1ª PARTE
-- ________________________________________________________________________________________
-- APÓS RODAR 2ª PARTE (PARA INSERÇÃO DE DADOS)

-- Inserir Fabricantes

INSERT INTO fabricantes (nome) VALUES('Asus');
INSERT INTO fabricantes (nome) VALUES('Dell');
INSERT INTO fabricantes (nome) 
VALUES('Apple'), ('LG'), ('Samsung'), ('Brastemp'),('Positivo'), ('Microsoft');

-- _________________________________

-- Inserir Produtos

INSERT INTO produtos (nome, descricao, preco, quantidade, fabricante_id) VALUES(
'Ultrabook',
'Ultrabook Asus com preocessador Intel Core i9, memoria RAM de 16Gb e Windows 11',
6500.99,
7,
1 -- Asus
);

INSERT INTO produtos (nome, descricao, preco, quantidade, fabricante_id) VALUES(
    'Tablet Android',
    'Tablet com a versão 12 do sistema operacional da Google, possui tela de 10 polegadas e armazenamento de 64 GB',
    4999,
    3,
    5 -- Samsung
);

INSERT INTO produtos (nome, descricao, preco, quantidade, fabricante_id) VALUES(
    'Geladeira',
    'Refrigerador Frost-free com acesso à Internet das Coisas e bla bla bla',
    1500,
    10,
    6 -- Brastemp
    ),
(
    'iPhone 13 Pro Max',
    'Alta durabilidade, processador Bionic 14, 128 GB de armazenamento, 6GB de RAM e caro pra caramba',
    6999.99,
    3,
    3 -- Apple
    ),
(
    'iPad Mini',
    'Tablet Apple com tela retina display de 4k, memória interna de 64GB,acesso ai iCloud',
    5000,
    8,
    3 -- Apple
);

INSERT INTO produtos (nome, descricao, preco, quantidade, fabricante_id) VALUES(
    'Xbox',
    'Console de última geração com acesso aos melhores jogos e bla bla',
    2500,
    6,
    8 -- Microsoft
    ),
(
    'Ultrabook',
    'Equipamento com processamento AMD Ryzen5, 12GB de RAM, placa de vídeo RTX',
    4500.68,
    12,
    7 -- Positivo
);



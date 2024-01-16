
CREATE DATABASE IF NOT EXISTS `estoque`;
USE `estoque`;

CREATE TABLE IF NOT EXISTS `produto` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50),
  `descricao` varchar(100),
  `preco` decimal(10,2),
  `plataforma` varchar(100),
  `categoria` varchar(50),
  `quantidade` int(11) NOT NULL,
  `tipo` varchar(100),
  PRIMARY KEY (`id_produto`)
);

INSERT INTO produto (nome, descricao, preco, plataforma, categoria, quantidade, tipo) 
VALUES 
('Nintendo Switch', 'Console híbrido da Nintendo', 299.99, 'Nintendo', 'Console', 3, 'console'),
('PlayStation 4', 'Console anterior da Sony', 299.99, 'PlayStation', 'Console', 4, 'console'),
('Xbox One', 'Console da geração anterior da Microsoft', 249.99, 'Xbox', 'Console', 7, 'console'),
('PlayStation 5', 'Console de última geração', 499.99, 'PlayStation', 'Console', 5, 'console'),
('Xbox Series X', 'Potente console da Microsoft', 549.99, 'Xbox', 'Console', 0, 'console'),
('The Witcher 3', 'RPG épico de mundo aberto', 29.99, 'PC, PlayStation, Xbox', 'RPG', 2, 'jogo'),
('Mario Kart 8 Deluxe', 'Jogo de corrida da Nintendo', 59.99, 'Nintendo Switch', 'Corrida', 6, 'jogo'),
('FIFA 22', 'Simulador de futebol', 49.99, 'PC, PlayStation, Xbox', 'Esportes', 10, 'jogo'),
('The Legend of Zelda: Breath of the Wild', 'Aventura épica da Nintendo', 49.99, 'Nintendo Switch', 'Aventura', 8, 'jogo'),
('Red Dead Redemption 2', 'Ação no Velho Oeste', 39.99, 'PlayStation, Xbox', 'Ação', 5, 'jogo'),
('Minecraft', 'Mundo aberto e construção', 19.99, 'PC, PlayStation, Xbox', 'Sandbox', 2, 'jogo'),
('Teclado', 'Teclado mecânico RGB', 99.99, 'PC', 'Acessório', 5, 'periferico'),
('Mouse', 'Mouse sem fio ergonômico', 49.99, 'PC', 'Acessório', 6, 'periferico'),
('Fone de Ouvido', 'Fone com cancelamento de ruído', 129.99, 'Múltiplas', 'Acessório', 4, 'periferico'),
('Monitor', 'Monitor de 27 polegadas', 199.99, 'PC', 'Acessório', 1, 'periferico'),
('Webcam', 'Câmera HD para videoconferências', 79.99, 'PC', 'Acessório', 3, 'periferico'),
('HD Externo', '1TB de armazenamento portátil', 79.99, 'Múltiplas', 'Armazenamento', 3, 'periferico');



CREATE VIEW produto_view AS SELECT * FROM `produto`;


CREATE VIEW quantidade_produtos_view AS SELECT
    SUM(CASE WHEN plataforma LIKE "%nintendo%" THEN quantidade ELSE 0 END) AS nintendo,
    SUM(CASE WHEN plataforma LIKE "%playstation%" THEN quantidade ELSE 0 END) AS sony,
    SUM(CASE WHEN plataforma LIKE "%pc%" THEN quantidade ELSE 0 END) AS pc,
    SUM(CASE WHEN plataforma LIKE "%xbox%" THEN quantidade ELSE 0 END) AS xbox
FROM produto_view;
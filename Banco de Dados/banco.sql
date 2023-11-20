
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

INSERT INTO produto (id_produto, nome, descricao, preco, plataforma, categoria, quantidade) 
VALUES 
('Nintendo Switch', 'Console híbrido da Nintendo', 299.99, 'Nintendo', 'Console', 3),
('PlayStation 4', 'Console anterior da Sony', 299.99, 'PlayStation', 'Console', 4),
('Xbox One', 'Console da geração anterior da Microsoft', 249.99, 'Xbox', 'Console', 7),
('PlayStation 5', 'Console de última geração', 499.99, 'PlayStation', 'Console', 5),
('Xbox Series X', 'Potente console da Microsoft', 549.99, 'Xbox', 'Console', 0),
('The Witcher 3', 'RPG épico de mundo aberto', 29.99, 'PC, PlayStation, Xbox', 'RPG', 2),
('Mario Kart 8 Deluxe', 'Jogo de corrida da Nintendo', 59.99, 'Nintendo Switch', 'Corrida', 6),
('FIFA 22', 'Simulador de futebol', 49.99, 'PC, PlayStation, Xbox', 'Esportes', 10),
('The Legend of Zelda: Breath of the Wild', 'Aventura épica da Nintendo', 49.99, 'Nintendo Switch', 'Aventura', 8),
('Red Dead Redemption 2', 'Ação no Velho Oeste', 39.99, 'PlayStation, Xbox', 'Ação', 5),
('Minecraft', 'Mundo aberto e construção', 19.99, 'PC, PlayStation, Xbox', 'Sandbox', 2),
('Teclado', 'Teclado mecânico RGB', 99.99, 'PC', 'Acessório', 5),
('Mouse', 'Mouse sem fio ergonômico', 49.99, 'PC', 'Acessório', 6),
('Fone de Ouvido', 'Fone com cancelamento de ruído', 129.99, 'Múltiplas', 'Acessório', 4),
('Monitor', 'Monitor de 27 polegadas', 199.99, 'PC', 'Acessório'),
('Webcam', 'Câmera HD para videoconferências', 79.99, 'PC', 'Acessório', 3),
('HD Externo', '1TB de armazenamento portátil', 79.99, 'Múltiplas', 'Armazenamento', 3);

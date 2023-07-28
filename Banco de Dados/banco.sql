
CREATE DATABASE IF NOT EXISTS `estoque`;
USE `estoque`;

CREATE TABLE IF NOT EXISTS `produto` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50),
  `descricao` varchar(100),
  `preco` decimal(10,2),
  `plataforma` varchar(100),
  `categoria` varchar(50),
  PRIMARY KEY (`id_produto`)
);
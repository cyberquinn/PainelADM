-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para paineladm
CREATE DATABASE IF NOT EXISTS `paineladm` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `paineladm`;

-- Copiando estrutura para tabela paineladm.contato
CREATE TABLE IF NOT EXISTS `contato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL DEFAULT 'Autônomo',
  `email` varchar(60) DEFAULT NULL,
  `mensagem` varchar(255) DEFAULT NULL,
  `dataCriancao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela paineladm.contato: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `contato` DISABLE KEYS */;
REPLACE INTO `contato` (`id`, `nome`, `email`, `mensagem`, `dataCriancao`, `dataAtualizacao`) VALUES
	(1, '  Laura Valença', '  lauravalencaarruda@gmail.com', '  É nóix', '2021-01-28 11:30:26', '2021-02-02 11:25:56'),
	(2, 'Hermes', 'hermes@gmail.com', 'Willsom', '2021-01-28 11:32:17', '2021-01-28 11:32:17'),
	(3, 'Juliana', 'juliana@gmail.com', 'Xóvem', '2021-01-28 11:32:45', '2021-01-28 11:32:45'),
	(4, 'Reginaldo', 'reginaldo@gmail.com', 'Muito simples', '2021-01-28 11:33:14', '2021-01-28 11:33:14');
/*!40000 ALTER TABLE `contato` ENABLE KEYS */;

-- Copiando estrutura para tabela paineladm.produtos
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL DEFAULT 'Anônimo',
  `tipo` varchar(50) DEFAULT NULL,
  `valor` float unsigned DEFAULT NULL,
  `dataCriacao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela paineladm.produtos: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
REPLACE INTO `produtos` (`id`, `nome`, `tipo`, `valor`, `dataCriacao`, `dataAtualizacao`) VALUES
	(1, '  Teclado ', '  Periféricos novos', 154.55, '2021-01-27 10:51:44', '2021-02-02 10:01:23'),
	(2, ' Monitor Gamer', ' Periférico', 399, '2021-01-27 10:52:07', '2021-02-02 09:09:06'),
	(3, 'Gabinete', 'Micro', 1800, '2021-01-27 10:52:30', '2021-02-02 09:09:07'),
	(4, 'Headphone', 'Acessório', 390.9, '2021-02-02 09:09:52', '2021-02-02 09:09:52'),
	(5, 'Mouse', 'Acessório', 150, '2021-02-02 09:10:21', '2021-02-02 09:10:21');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;

-- Copiando estrutura para tabela paineladm.servicos
CREATE TABLE IF NOT EXISTS `servicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL DEFAULT 'Atônomo',
  `tipo` varchar(15) DEFAULT NULL,
  `valor` float unsigned DEFAULT NULL,
  `dataCriacao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela paineladm.servicos: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `servicos` DISABLE KEYS */;
REPLACE INTO `servicos` (`id`, `nome`, `tipo`, `valor`, `dataCriacao`, `dataAtualizacao`) VALUES
	(1, ' Laura Valença', NULL, NULL, '2021-01-27 11:01:21', '2021-02-02 10:43:09'),
	(2, 'Remoção de conta google', 'Software', 50, '2021-01-27 11:01:50', '2021-01-27 11:01:50'),
	(3, 'Consultoria de redes', 'Mídia', 70, '2021-02-02 09:06:09', '2021-02-02 09:06:09'),
	(4, 'Currículo', 'Prof.', 29.69, '2021-02-02 09:07:55', '2021-02-02 09:07:55'),
	(5, '  Id. Visual', '  Prof.', 40, '2021-02-02 09:08:45', '2021-02-02 10:13:40');
/*!40000 ALTER TABLE `servicos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

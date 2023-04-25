-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 24-Abr-2023 às 05:04
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `adobook`
--
DROP DATABASE IF EXISTS `adobook`;
CREATE DATABASE IF NOT EXISTS `adobook` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `adobook`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `ID` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) NOT NULL,
  `DESCRICAO` varchar(255) NOT NULL,
  `IMAGEM` varchar(999) NOT NULL,
  `DATA_CRIACAO` date NOT NULL,
  `GENERO` varchar(255) NOT NULL,
  `CONDICAO` varchar(50) NOT NULL,
  `DOADOR` varchar(100) NOT NULL,
  `CELULAR` varchar(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `book`
--

INSERT INTO `book` (`ID`, `Nome`, `DESCRICAO`, `IMAGEM`, `DATA_CRIACAO`, `GENERO`, `CONDICAO`, `DOADOR`, `CELULAR`) VALUES
(1, 'StarWars', 'Este é um dos melhores livros da historia', 'https://m.media-amazon.com/images/P/B08DRPYWS9.01._SCLZZZZZZZ_SX500_.jpg', '2023-04-19', 'livros', 'Semi-Novo', 'Ana Klara', '21970351912'),
(4, 'Harry potter - e a pedra filosofal', 'melhor livro de todos ', 'https://m.media-amazon.com/images/P/B01LQM96G4.01._SCLZZZZZZZ_SX500_.jpg', '2023-04-19', 'Semi-Novo', 'Semi-Novo', 'Pedro Nery', ''),
(20, 'harry', 'estado', 'https://m.media-amazon.com/images/P/B01LQM96G4.01._SCLZZZZZZZ_SX500_.jpg', '2023-04-22', 'Comedia', 'seminovo', 'PEDRO HENRIQUE', ''),
(21, 'starteck', 'anakin skywalker', 'https://books.google.com.br/books/content?id=P6nsmewVu3YC&hl=pt-BR&pg=PP1&img=1&zoom=3&sig=ACfU3U38U154rYBOO2jrgH5H-ShC7xRtMw&w=1280', '2022-04-23', 'Comedia', 'seminovo', 'anakin skywalker', ''),
(22, 'starteck', 'pedro nery', 'https://books.google.com.br/books/content?id=P6nsmewVu3YC&hl=pt-BR&pg=PP1&img=1&zoom=3&sig=ACfU3U38U154rYBOO2jrgH5H-ShC7xRtMw&w=1280', '2023-04-22', 'Comedia', 'Semi-Novo', 'pedro nery', ''),
(23, 'homem aranha ', 'pedro Soares', 'https://books.google.com.br/books/publisher/content?id=PdUeEAAAQBAJ&hl=pt-BR&pg=PA1&img=1&zoom=3&sig=ACfU3U19czV7GV6Zdvqct-J54WNjeqmAJQ&w=1280', '2023-04-22', 'livros', '', 'pedro Soares', ''),
(24, 'spider man', 'pedro sky', 'https://books.google.com.br/books/publisher/content?id=PdUeEAAAQBAJ&hl=pt-BR&pg=PA1&img=1&zoom=3&sig=ACfU3U19czV7GV6Zdvqct-J54WNjeqmAJQ&w=1280', '2023-04-22', 'eletronicos', 'Semi-Novo', 'pedro sky', ''),
(25, 'aranhazinha', 'sou melhor', 'https://books.google.com.br/books/publisher/content?id=PdUeEAAAQBAJ&hl=pt-BR&pg=PA1&img=1&zoom=3&sig=ACfU3U19czV7GV6Zdvqct-J54WNjeqmAJQ&w=1280', '2023-04-22', 'eletronicos', 'seminovo', 'oso pap', ''),
(26, 'SDAD', 'asdad', 'asdad', '2023-04-23', 'Comedia', 'seminovo', 'pedro asdad', ''),
(27, 'rt', 'aoskdaoskdaoskds', 'https://books.google.com.br/books/publisher/content?id=PdUeEAAAQBAJ&hl=pt-BR&pg=PA1&img=1&zoom=3&sig=ACfU3U19czV7GV6Zdvqct-J54WNjeqmAJQ&w=1280', '2023-04-24', 'Autoajuda', 'seminovo', 'Pedro SOKOVIA', ''),
(28, 'spider man', 'teste', 'https://books.google.com.br/books/content?id=P6nsmewVu3YC&hl=pt-BR&pg=PP1&img=1&zoom=3&sig=ACfU3U38U154rYBOO2jrgH5H-ShC7xRtMw&w=1280', '2023-04-24', 'Ficcao', 'novo', 'PEDRO skywalker', '21965766575');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `observations` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `observations`) VALUES
(1, 'OEDR', '21965755647', 'ALTEREI'),
(2, 'pedro', '21452', 'asda'),
(3, 'sassa', '525', 'asdada');
--
-- Banco de dados: `agenda`
--
DROP DATABASE IF EXISTS `agenda`;
CREATE DATABASE IF NOT EXISTS `agenda` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `agenda`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `observations` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `observations`) VALUES
(1, 'sdasd', 'dsdasd', 'adasdasd'),
(2, 'pedro', '219657665785', 'sadasdassd');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

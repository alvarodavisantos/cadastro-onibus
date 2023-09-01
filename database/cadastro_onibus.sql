-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 01-Set-2023 às 00:46
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
-- Banco de dados: `cadastro_alunos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `g30_admin`
--

DROP TABLE IF EXISTS `g30_admin`;
CREATE TABLE IF NOT EXISTS `g30_admin` (
  `codigo_admin` int NOT NULL AUTO_INCREMENT,
  `nome_admin` varchar(50) NOT NULL,
  `login_admin` varchar(30) NOT NULL,
  `senha_admin` varchar(255) NOT NULL,
  PRIMARY KEY (`codigo_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `g30_admin`
--

INSERT INTO `g30_admin` (`codigo_admin`, `nome_admin`, `login_admin`, `senha_admin`) VALUES
(1, 'Fernando', 'fer', '202cb962ac59075b964b07152d234b70'),
(9, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `g30_aluno`
--

DROP TABLE IF EXISTS `g30_aluno`;
CREATE TABLE IF NOT EXISTS `g30_aluno` (
  `matricula_aluno` int NOT NULL,
  `nome` varchar(30) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `cep` varchar(14) NOT NULL,
  `num_residencia` int NOT NULL,
  `curso` varchar(3) NOT NULL,
  `nascimento` date DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`matricula_aluno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `g30_aluno`
--

INSERT INTO `g30_aluno` (`matricula_aluno`, `nome`, `cidade`, `cep`, `num_residencia`, `curso`, `nascimento`, `email`, `telefone`) VALUES
(2018308589, 'Pedro Henrique Dorigueto', 'JF', '36091021', 13, 'INF', '2021-01-12', 'pedrodorigueto@gmail.com', '40028922'),
(2020309353, 'Ana Carla', 'Bicas', '36081690', 200, 'INF', '2004-01-06', 'anacarla1607@hotmail.com', '96684595'),
(2021458789, 'Paulo Fernando Nascimento', 'Mar de Espanha', '35410787', 300, 'ELT', '2005-02-05', 'paulofer@gmail.com', '40068966'),
(2018308745, 'Pablo Martins Rodrigues', 'Paula Lima', '37848565', 787, 'MEC', '2002-07-11', 'pablomarrod@yahoo.com', '32224579');

-- --------------------------------------------------------

--
-- Estrutura da tabela `g30_onibus`
--

DROP TABLE IF EXISTS `g30_onibus`;
CREATE TABLE IF NOT EXISTS `g30_onibus` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `origem` varchar(50) NOT NULL,
  `destino` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `hora_saida` time NOT NULL,
  `hora_chegada` time NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `g30_onibus`
--

INSERT INTO `g30_onibus` (`codigo`, `origem`, `destino`, `hora_saida`, `hora_chegada`) VALUES
(2, 'Três Rios', 'Juiz de Fora', '08:00:00', '10:30:00'),
(3, 'Bicas', 'Juiz de Fora', '13:30:00', '15:00:00'),
(4, 'Mar de Espanha', 'Juiz de Fora', '12:15:00', '13:00:00'),
(5, 'Rio de Janeiro', 'Juiz de Fora', '13:00:00', '15:00:00'),
(6, 'Bicas', 'Juiz de Fora', '14:00:00', '14:30:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

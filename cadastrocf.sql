-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 10-Fev-2018 às 20:48
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cadastrocf`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `CPF` varchar(14) NOT NULL,
  `dataNascimento` date NOT NULL,
  `endereco` varchar(60) NOT NULL,
  `bairro` varchar(20) NOT NULL,
  `CEP` varchar(9) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `telefoneFixo` varchar(14) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `ie` varchar(15) NOT NULL,
  `modified` date NOT NULL,
  `created` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

DROP TABLE IF EXISTS `funcionarios`;
CREATE TABLE IF NOT EXISTS `funcionarios` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `CPF` varchar(14) NOT NULL,
  `dataNascimento` date NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `CEP` varchar(9) NOT NULL,
  `created` date NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `telefoneFixo` varchar(14) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `RG` varchar(7) NOT NULL,
  `modified` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

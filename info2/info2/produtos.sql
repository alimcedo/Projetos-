-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: Jun 18, 2018 as 01:10 
-- Versão do Servidor: 5.5.8
-- Versão do PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `idprodutos` int(11) NOT NULL AUTO_INCREMENT,
  `nomeprodutos` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `quantidade` int(100) NOT NULL,
  PRIMARY KEY (`idprodutos`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idprodutos`, `nomeprodutos`, `categoria`, `quantidade`) VALUES
(1, 'Core I7', 'Processador', 100),
(2, 'HDD', 'Disco', 12),
(3, 'HP P1005', 'Impressora', 20),
(4, 'teste', 'Disco', 10);

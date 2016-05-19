-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19-Maio-2016 às 04:59
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pricetracking`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `name` varchar(55) NOT NULL,
  `type` varchar(55) NOT NULL,
  `sales` int(10) NOT NULL,
  `quant` int(11) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`name`, `type`, `sales`, `quant`, `price`) VALUES
('Teste', 'Teste', 123, 213, 2.46),
('Teste2', 'Teste2', 124, 23, 2.44);

-- --------------------------------------------------------

--
-- Estrutura da tabela `services`
--

CREATE TABLE `services` (
  `name` varchar(55) NOT NULL,
  `type` varchar(55) NOT NULL,
  `time` varchar(55) NOT NULL,
  `price` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `services`
--

INSERT INTO `services` (`name`, `type`, `time`, `price`) VALUES
('teste2', 'teste2', '3h', '2.46'),
('teste', '', '3h30min', '2.50'),
('teste', 'teste', '3h30min', '2.50'),
('teste', 'teste', '', '2.50');

-- --------------------------------------------------------

--
-- Estrutura da tabela `store`
--

CREATE TABLE `store` (
  `name` varchar(55) NOT NULL,
  `location` varchar(55) NOT NULL,
  `worktime` varchar(55) NOT NULL,
  `codProdServ` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `store`
--

INSERT INTO `store` (`name`, `location`, `worktime`, `codProdServ`) VALUES
('Teste', 'Teste', '8h-18h', 'somecode'),
('Teste1', 'Teste1', '8h21h', 'someothercode');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

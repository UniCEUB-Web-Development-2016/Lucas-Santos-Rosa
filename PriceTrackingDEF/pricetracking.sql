-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21-Jun-2016 às 00:29
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
  `idt_products` int(11) NOT NULL,
  `codStore` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `type` varchar(55) NOT NULL,
  `sales` int(11) NOT NULL,
  `quant` int(11) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`idt_products`, `codStore`, `name`, `type`, `sales`, `quant`, `price`) VALUES
(1, 1, 'Product', 'teste', 333, 213, 2.46),
(2, 0, 'kteste', 'qtipo', 2, 55, 2.99),
(3, 0, 'kteste', 'qtipo', 2, 55, 2.99),
(9, 1, 'produto', 'produto', 6, 6, 6),
(10, 1, 'produto', 'produto', 6, 6, 6),
(11, 1, 'produto', 'produto', 6, 6, 6),
(12, 7, 'qteste2', 'sometype', 333, 2, 2.5),
(15, 7, 'Product1', 'tyope', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `services`
--

CREATE TABLE `services` (
  `idt_services` int(11) NOT NULL,
  `codStore` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `type` varchar(55) NOT NULL,
  `time` varchar(30) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `services`
--

INSERT INTO `services` (`idt_services`, `codStore`, `name`, `type`, `time`, `price`) VALUES
(1, 0, 'nome', 'tipo', '3h', 2),
(2, 0, 'outroteste', 'maisteste', '', 5000),
(3, 0, 'servicename', 'typend', '2h38min', 2.45),
(4, 0, 'fromlog', 'tolog', '6h', 9999),
(6, 7, 'swadledog', '1tipo', '8h', 5000),
(7, 7, 'teste', 'mtype', '18h', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `store`
--

CREATE TABLE `store` (
  `idt_store` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `local` text NOT NULL,
  `worktime` varchar(55) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `store`
--

INSERT INTO `store` (`idt_store`, `name`, `local`, `worktime`, `email`, `password`) VALUES
(1, 'nome', 'No Where', '8h18h', 'some@mail', 'passw'),
(2, 'nome', 'No Where', '8h18h', 'some@mail', 'passw'),
(3, 'Teste', 'No Where', '8h-18h', 'asdfasdf@hjerew', 'sdfasdfasdf'),
(5, 'maisteste', 'Some Where', '24h', 'email@theemail.com', 'asdfghjklÃ§222'),
(7, 'teste33', 'Some Where', '18h-00h', 'emailmoke@someemail.com.br', 'qwerty123'),
(8, 'store', 'local', '6h', 'email23@someemail.com.br', 'ghtydfas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`idt_products`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`idt_services`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`idt_store`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `idt_products` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `idt_services` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `idt_store` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

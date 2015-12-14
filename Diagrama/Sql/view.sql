-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14-Dez-2015 às 02:01
-- Versão do servidor: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sch`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `view`
--

CREATE TABLE `view` (
  `IDVIEW` int(11) NOT NULL,
  `Controller_IDCONTROLLER` int(11) NOT NULL,
  `NOME` varchar(45) NOT NULL,
  `LABEL` varchar(45) NOT NULL,
  `ROUTE` varchar(45) NOT NULL,
  `STATUS` int(1) NOT NULL COMMENT '1 - Ativo\n2 - Inativo',
  `VIEWPARENT` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `view`
--

INSERT INTO `view` (`IDVIEW`, `Controller_IDCONTROLLER`, `NOME`, `LABEL`, `ROUTE`, `STATUS`, `VIEWPARENT`) VALUES
(4, 1, 'Administracao', 'Administracao', 'administracao', 1, 6),
(6, 1, 'glyphicon glyphicon-home', 'Home', 'home', 1, 0),
(10, 1, 'administracao/breadcrumb', 'Breadcrumb', 'administracao/breadcrumb', 1, 4),
(11, 1, 'Adcionar breadcrumb', 'Adcionar breadcrumb', 'administracao/breadcrumb/add', 1, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `view`
--
ALTER TABLE `view`
  ADD PRIMARY KEY (`IDVIEW`),
  ADD KEY `fk_VIEW_Controller_idx` (`Controller_IDCONTROLLER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `view`
--
ALTER TABLE `view`
  MODIFY `IDVIEW` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `view`
--
ALTER TABLE `view`
  ADD CONSTRAINT `fk_VIEW_Controller` FOREIGN KEY (`Controller_IDCONTROLLER`) REFERENCES `controller` (`IDCONTROLLER`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

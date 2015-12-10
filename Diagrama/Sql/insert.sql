-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10-Dez-2015 às 20:12
-- Versão do servidor: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sch`
--
CREATE DATABASE IF NOT EXISTS `sch` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sch`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `controller`
--

DROP TABLE IF EXISTS `controller`;
CREATE TABLE IF NOT EXISTS `controller` (
  `IDCONTROLLER` int(11) NOT NULL,
  `NOME` varchar(45) NOT NULL,
  `Module_idModule` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `controller`
--

INSERT INTO `controller` (`IDCONTROLLER`, `NOME`, `Module_idModule`) VALUES
(1, 'Application', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `module`
--

DROP TABLE IF EXISTS `module`;
CREATE TABLE IF NOT EXISTS `module` (
  `idModule` int(11) NOT NULL,
  `NOME` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `module`
--

INSERT INTO `module` (`idModule`, `NOME`) VALUES
(1, 'Application');

-- --------------------------------------------------------

--
-- Estrutura da tabela `view`
--

DROP TABLE IF EXISTS `view`;
CREATE TABLE IF NOT EXISTS `view` (
  `IDVIEW` int(11) NOT NULL,
  `Controller_IDCONTROLLER` int(11) NOT NULL,
  `NOME` varchar(45) NOT NULL,
  `LABEL` varchar(45) NOT NULL,
  `ROUTE` varchar(45) NOT NULL,
  `STATUS` int(1) NOT NULL COMMENT '1 - Ativo\n2 - Inativo',
  `VIEWPARENT` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `view`
--

INSERT INTO `view` (`IDVIEW`, `Controller_IDCONTROLLER`, `NOME`, `LABEL`, `ROUTE`, `STATUS`, `VIEWPARENT`) VALUES
(3, 1, 'Adicionar Album', 'Add', 'album/add', 1, 5),
(4, 1, 'Administracao', 'Administracao', 'administracao', 1, 0),
(5, 1, 'Album', 'Album', 'album', 1, 6),
(6, 1, 'Home', 'Home', 'home', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `controller`
--
ALTER TABLE `controller`
  ADD PRIMARY KEY (`IDCONTROLLER`),
  ADD KEY `fk_Controller_Module1_idx` (`Module_idModule`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`idModule`);

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
-- AUTO_INCREMENT for table `controller`
--
ALTER TABLE `controller`
  MODIFY `IDCONTROLLER` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `idModule` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `view`
--
ALTER TABLE `view`
  MODIFY `IDVIEW` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `controller`
--
ALTER TABLE `controller`
  ADD CONSTRAINT `fk_Controller_Module1` FOREIGN KEY (`Module_idModule`) REFERENCES `module` (`idModule`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `view`
--
ALTER TABLE `view`
  ADD CONSTRAINT `fk_VIEW_Controller` FOREIGN KEY (`Controller_IDCONTROLLER`) REFERENCES `controller` (`IDCONTROLLER`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

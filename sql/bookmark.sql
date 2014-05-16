-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 15, 2014 at 10:02 PM
-- Server version: 5.5.37
-- PHP Version: 5.3.10-1ubuntu3.11

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bookmark`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_links`
--

CREATE TABLE IF NOT EXISTS `tb_links` (
  `id_dono` int(10) NOT NULL,
  `link` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_links`
--

INSERT INTO `tb_links` (`id_dono`, `link`) VALUES
(1, 'http://blenolopes.com'),
(1, 'http://uol.com.br'),
(1, 'http://infonet.com.br'),
(1, 'http://xvideos.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_usuarios`
--

CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `email` varchar(128) NOT NULL,
  `senha` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `usuario`, `email`, `senha`) VALUES
(1, 'Bleno Lopes', 'blenolopes@gmail.com', '733e9283fd4da012e9cd5b9c89fd66fc9d97127b');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

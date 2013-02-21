-- phpMyAdmin SQL Dump
-- version 3.5.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 21, 2013 at 06:30 AM
-- Server version: 5.5.28
-- PHP Version: 5.3.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `digifort_task`
--
CREATE DATABASE `digifort_task` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `digifort_task`;

-- --------------------------------------------------------

--
-- Table structure for table `task4`
--

CREATE TABLE IF NOT EXISTS `task4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `manager` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `task4`
--

INSERT INTO `task4` (`id`, `user`, `password`, `company`, `manager`) VALUES
(21, 'robo', 'welcome', 'delta', 0),
(22, 'pokka ', 'welcome', 'delta', 0),
(23, 'POKKA_DELTA', 'welcom', 'delta', 1);

-- --------------------------------------------------------

--
-- Table structure for table `task4.1`
--

CREATE TABLE IF NOT EXISTS `task4.1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `task4.1`
--

INSERT INTO `task4.1` (`id`, `user`) VALUES
(1, 'paramesh'),
(2, 'paramesh');

-- --------------------------------------------------------

--
-- Table structure for table `task4.2`
--

CREATE TABLE IF NOT EXISTS `task4.2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `task4.2`
--

INSERT INTO `task4.2` (`id`, `user`, `password`) VALUES
(1, 'mozilla', 'asdfasdada');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

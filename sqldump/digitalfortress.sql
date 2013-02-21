-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 21, 2013 at 03:54 PM
-- Server version: 5.5.22
-- PHP Version: 5.3.10-1ubuntu3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `digitalfortress`
--

-- --------------------------------------------------------

--
-- Table structure for table `ans`
--

CREATE TABLE IF NOT EXISTS `ans` (
  `category` varchar(50) NOT NULL,
  `task` int(11) NOT NULL,
  `ans` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ans`
--

INSERT INTO `ans` (`category`, `task`, `ans`) VALUES
('web', 1, '69a329523ce1ec88bf63061863d9cb14'),
('web', 1, 'cd82c2c598628fec1536f4a7de52be3f'),
('web', 2, '9c3d3ae35c97f33e4b138f1165be8c2c'),
('web', 3, 'ace838c1d455cca23d43fc3088520493'),
('web', 4, 'b8c1d9854e0ebcbf56807e2444801487'),
('web', 5, 'b9aa9c59bf8e5bcbfde4d93527af2bad'),
('web', 6, '5e89ce5a13b727e63700ea63da91051c'),
('web', 7, '47cece22250309aaa0d4673ee81d5800'),
('trivia', 1, 'eeacb1876d7501201fc7ee11284ff97d'),
('trivia', 2, 'af2b380c61bf56abb151235840943626'),
('trivia', 3, '12c07ff4b794b79724ca32aa05857309'),
('trivia', 4, 'd05d7f45f4c24ce3ac55b166caf693c5'),
('trivia', 5, '50522dc92e4265baf6a2ad91b8bbc0e5'),
('trivia', 6, 'e990a305abb5414d992b8b0110589281'),
('trivia', 7, '7d53c51ef8cf0f015d8d8fe9d775d484'),
('crypto', 1, 'df477fa834799ab9d5ad55b085cd1b2b'),
('crypto', 2, '151f385b3d37358645953b028e15b8c4'),
('crypto', 3, 'd5fb3c081dabca799d1021b7c791c879'),
('crypto', 4, 'c03e520126fe600a888ca329a71901ef'),
('crypto', 5, '2b2f1544169e24dde08fc928f9876710'),
('crypto', 6, '0dba5a7dcf113aea83d9622fd346cd57'),
('crypto', 7, '2e1ba4e2e743a2cc8c892e06960cc87c'),
('crypto', 8, '193978f0d3161191daf6d6155b634c7e'),
('crypto', 9, '503cab77d96283687a5c3df7f37e8f3d'),
('crypto', 10, '756e011c24568ec216c965cee99710ae'),
('crypto', 11, 'bdfbf96ac0343099a42a2aa5efb9b86e');

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE IF NOT EXISTS `scores` (
  `handle` varchar(25) NOT NULL,
  `task_id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  PRIMARY KEY (`handle`,`task_id`,`category`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`handle`, `task_id`, `category`) VALUES
('testhandle', 3, '1'),
('testhandle1', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_name` varchar(40) NOT NULL,
  `handle` varchar(40) NOT NULL,
  `pid` bigint(20) NOT NULL,
  PRIMARY KEY (`pid`,`user_name`,`handle`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_name`, `handle`, `pid`) VALUES
('test', 'testhandle', 10005),
('test2', 'testhandle1', 100053);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

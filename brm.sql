-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 15, 2017 at 01:38 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `brm`
--
CREATE DATABASE IF NOT EXISTS `brm` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `brm`;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `BRM_ID` int(11) NOT NULL AUTO_INCREMENT,
  `BRM_TITLE` varchar(20) NOT NULL,
  `BRM_PRICE` varchar(20) NOT NULL,
  `BRM_AUTHER` varchar(20) NOT NULL,
  `DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`BRM_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`BRM_ID`, `BRM_TITLE`, `BRM_PRICE`, `BRM_AUTHER`, `DATE`) VALUES
(2, 'java', '120', 'murli11', '2017-08-12 09:44:33'),
(3, 'cpp', '550', 'sahani', '2017-08-09 10:08:24');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 09, 2019 at 12:37 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventia`
--

-- --------------------------------------------------------

--
-- Table structure for table `anni`
--

DROP TABLE IF EXISTS `anni`;
CREATE TABLE IF NOT EXISTS `anni` (
  `design` varchar(50) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anni`
--

INSERT INTO `anni` (`design`, `price`) VALUES
('Lantern Love', 15000),
('Royal Touch', 10000),
('White Palace', 5000),
('Firefly', 20000),
('Jenevieve', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `birt`
--

DROP TABLE IF EXISTS `birt`;
CREATE TABLE IF NOT EXISTS `birt` (
  `design` varchar(50) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `birt`
--

INSERT INTO `birt` (`design`, `price`) VALUES
('Poodle Party', 15000),
('Baby Party', 10000),
('The Bash', 5000),
('Blue Whale', 20000),
('Rockstar Party', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `username` varchar(50) NOT NULL,
  `event` varchar(50) NOT NULL,
  `design` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `password`, `email`) VALUES
('ag', '123', 'ag@gmail.com'),
('ab', '456', 'ab@gmail.com'),
('prakash', '789', 'prakash@gmail.com'),
('BL', '789', 'bl@gmail.com'),
('abc', '000', 'abc@gmail.com'),
('amith', '789', 'amith@gmail.com'),
('User', '147', 'user@gmail.com'),
('tejas', '789', 'tejas@gmail.com'),
('ggg', '000', 'ggg@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `party`
--

DROP TABLE IF EXISTS `party`;
CREATE TABLE IF NOT EXISTS `party` (
  `design` varchar(50) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `party`
--

INSERT INTO `party` (`design`, `price`) VALUES
('Skylight', 15000),
('Silver Ball', 10000),
('NightLife', 5000),
('Cocktail', 20000),
('Karaoke', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `reception`
--

DROP TABLE IF EXISTS `reception`;
CREATE TABLE IF NOT EXISTS `reception` (
  `design` varchar(50) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reception`
--

INSERT INTO `reception` (`design`, `price`) VALUES
('White Heaven', 15000),
('La Rose', 10000),
('Willow Garden', 5000),
('Paradise', 20000),
('Floreshia', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

DROP TABLE IF EXISTS `venue`;
CREATE TABLE IF NOT EXISTS `venue` (
  `username` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `date` int(50) NOT NULL,
  `time` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

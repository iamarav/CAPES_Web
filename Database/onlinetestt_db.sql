-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 02, 2019 at 08:52 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinetestt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ans`
--

DROP TABLE IF EXISTS `ans`;
CREATE TABLE IF NOT EXISTS `ans` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `answer` varchar(50) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `applied_job`
--

DROP TABLE IF EXISTS `applied_job`;
CREATE TABLE IF NOT EXISTS `applied_job` (
  `sno` int(100) NOT NULL AUTO_INCREMENT,
  `jobid` varchar(1000) DEFAULT NULL,
  `userid` varchar(1000) DEFAULT NULL,
  `date` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_data`
--

DROP TABLE IF EXISTS `company_data`;
CREATE TABLE IF NOT EXISTS `company_data` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(10000) DEFAULT NULL,
  `description` text,
  `employees` varchar(1000) DEFAULT NULL,
  `location` varchar(1000) DEFAULT NULL,
  `verified` int(10) DEFAULT '0',
  `banned` int(10) DEFAULT '0',
  `meta` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dbans`
--

DROP TABLE IF EXISTS `dbans`;
CREATE TABLE IF NOT EXISTS `dbans` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(1000) NOT NULL,
  `opt1` varchar(100) NOT NULL,
  `opt2` varchar(100) NOT NULL,
  `opt3` varchar(100) NOT NULL,
  `opt4` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `title` varchar(1000) NOT NULL,
  `company` varchar(1000) NOT NULL,
  `category` varchar(1000) NOT NULL,
  `locat` varchar(1000) NOT NULL,
  `country` varchar(100) NOT NULL DEFAULT '',
  `aboutc` varchar(1000) NOT NULL,
  `posted_on` varchar(1000) NOT NULL,
  `posted_by` varchar(1000) NOT NULL,
  `expired` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` text NOT NULL,
  `contact` varchar(1000) DEFAULT NULL,
  `email` varchar(1000) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `imgc` blob,
  `usercategory` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

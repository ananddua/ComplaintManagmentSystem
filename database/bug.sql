-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 20, 2015 at 06:38 AM
-- Server version: 5.5.30
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bug`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bug_details`
--

CREATE TABLE IF NOT EXISTS `bug_details` (
  `bug_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_name` varchar(45) NOT NULL,
  `priority` varchar(45) NOT NULL,
  `summary` varchar(45) NOT NULL,
  `details` varchar(45) NOT NULL,
  `os` varchar(45) NOT NULL,
  `software` varchar(45) NOT NULL,
  `date` varchar(45) NOT NULL,
  `customer_id` varchar(45) NOT NULL,
  `assigned` varchar(45) NOT NULL,
  `expected_date` varchar(45) DEFAULT NULL,
  `tech_id` int(10) unsigned DEFAULT NULL,
  `solution` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`bug_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `bug_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_register`
--

CREATE TABLE IF NOT EXISTS `customer_register` (
  `cid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `customer_name` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phno` varchar(45) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `customer_register`
--


-- --------------------------------------------------------

--
-- Table structure for table `manager_register`
--

CREATE TABLE IF NOT EXISTS `manager_register` (
  `mid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `manager_name` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phno` varchar(45) NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `manager_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_register`
--

CREATE TABLE IF NOT EXISTS `product_register` (
  `pid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_name` varchar(45) NOT NULL,
  `version` varchar(45) NOT NULL,
  `vendor` varchar(45) NOT NULL,
  `mid` int(10) unsigned NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `product_register`
--


-- --------------------------------------------------------

--
-- Table structure for table `techperson_register`
--

CREATE TABLE IF NOT EXISTS `techperson_register` (
  `tid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `tech_name` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phno` varchar(45) NOT NULL,
  `mid` int(10) unsigned NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `techperson_register`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

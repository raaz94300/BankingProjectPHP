-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2018 at 01:29 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bankingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account_request`
--

CREATE TABLE IF NOT EXISTS `tbl_account_request` (
  `ar_id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `adhaar` varchar(20) DEFAULT NULL,
  `pan` varchar(10) DEFAULT NULL,
  `padd` varchar(250) DEFAULT NULL,
  `pcity` varchar(50) DEFAULT NULL,
  `pdistrict` varchar(50) DEFAULT NULL,
  `pstate` varchar(25) DEFAULT NULL,
  `ppincode` varchar(10) DEFAULT NULL,
  `cadd` varchar(250) DEFAULT NULL,
  `ccity` varchar(50) DEFAULT NULL,
  `cdistrict` varchar(50) DEFAULT NULL,
  `cpincode` varchar(10) DEFAULT NULL,
  `cstate` varchar(25) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT '0',
  `creatdate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ar_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_account_request`
--

INSERT INTO `tbl_account_request` (`ar_id`, `userid`, `name`, `fname`, `adhaar`, `pan`, `padd`, `pcity`, `pdistrict`, `pstate`, `ppincode`, `cadd`, `ccity`, `cdistrict`, `cpincode`, `cstate`, `phone`, `email`, `status`, `creatdate`) VALUES
(2, 'JSA028602', 'Neelesh', 'Vijay', '1234567891', '1452BQUp7', 'kosamkheda1', 'narsinghpur', 'narsinghpur', 'mp', '487110', 'bhopal1', 'bhopal', 'bhopal', '250026', 'mp', '7828867719', 'nkp@gmail.com', 3, '2018-04-01 20:09:49'),
(3, 'JSA059003', 'Neelesh', 'Vijay', '1234567891', '1452BQUp7', 'kosamkheda1', 'narsinghpur', 'narsinghpur', 'mp', '487110', 'bhopal1', 'bhopal', 'bhopal', '250026', 'mp', '7828867719', 'nkp@gmail.com', 2, '2018-04-01 20:13:03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logindetails`
--

CREATE TABLE IF NOT EXISTS `tbl_logindetails` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `userid` varchar(9) DEFAULT NULL,
  `pass` varchar(12) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `usertype` int(1) NOT NULL DEFAULT '0',
  `creatDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`,`phone`,`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_logindetails`
--

INSERT INTO `tbl_logindetails` (`user_id`, `name`, `email`, `phone`, `userid`, `pass`, `status`, `usertype`, `creatDate`) VALUES
(2, 'Neelesh', 'nkp@gmail.com', '7828867719', 'JSA063302', '7828867719', 1, 1, '2018-04-01 21:56:57'),
(3, 'Neelesh', 'nkp@gmail.com', '7828867719', 'JSA059003', '7828867719', 1, 1, '2018-04-01 21:59:20'),
(4, 'Neelesh', 'nkp@gmail.com', '7828867719', 'JSA028602', '7828867719', 3, 1, '2018-04-01 22:25:23'),
(5, 'Neelesh Kumar Prajapati', 'nkp@gmail.com', '0', 'admin', 'admin', 1, 2, '2018-04-01 23:01:23');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

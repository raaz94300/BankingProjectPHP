-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2018 at 03:51 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_account_request`
--

INSERT INTO `tbl_account_request` (`ar_id`, `userid`, `name`, `fname`, `adhaar`, `pan`, `padd`, `pcity`, `pdistrict`, `pstate`, `ppincode`, `cadd`, `ccity`, `cdistrict`, `cpincode`, `cstate`, `phone`, `email`, `status`, `creatdate`) VALUES
(2, 'JSA028602', 'Neelesh Kumar', 'Vijay Kumar', '44444', '1452BQUp2', 'kosamkheda2', 'narsinghpur2  ', 'narsinghpur2', 'mp2', '487120', 'bhopal2', 'bhopal2', 'bhopal2', '250022', 'mp2', '7828867219', 'nkp1222@gmail.com', 3, '2018-04-01 20:09:49'),
(3, 'JSA059003', 'Neelesh', 'Vijay', '1234567891', '1452BQUp7', 'kosamkheda1', 'narsinghpur', 'narsinghpur', 'mp', '487110', 'bhopal1', 'bhopal', 'bhopal', '250026', 'mp', '7828867719', 'nkp@gmail.com', 2, '2018-04-01 20:13:03'),
(4, 'JSA037204', 'vivek sharma', 'akshay sharma', '12312312312', 'BQU21P4', 'Narayan Nagar \r\nHoshangabad Road ', 'Bhopal', 'Bhopal', 'M.p.', '462026', 'Narayan Nagar \r\nHoshangabad Road ', 'Bhopal', 'Bhopal', '462026', 'M. P.', '9993895021', 'vivek@gmail.com', 3, '2018-04-02 06:56:33'),
(5, 'JSA039005', 'vivek1 sharma', 'akshay1 sharma', '12312312312', 'BQU21P4', 'Narayan Nagar \r\nHoshangabad Road ', 'Bhopal', 'Bhopal', 'M.p.', '462026', 'Narayan Nagar \r\nHoshangabad Road ', 'Bhopal', 'Bhopal', '462026', 'M. P.', '9993895022', 'vivek1@gmail.com', 3, '2018-04-02 07:01:18'),
(6, NULL, 'vivek1 sharma', 'akshay1 sharma', '12312312312', 'BQU21P4', 'Narayan Nagar \r\nHoshangabad Road ', 'Bhopal', 'Bhopal', 'M.p.', '462026', 'Narayan Nagar \r\nHoshangabad Road ', 'Bhopal', 'Bhopal', '462026', 'M. P.', '9993895022', 'vivek1@gmail.com', 2, '2018-04-02 07:03:42'),
(7, NULL, 'vivek1 sharma', 'akshay1 sharma', '12312312312', 'BQU21P4', 'Narayan Nagar \r\nHoshangabad Road ', 'Bhopal', 'Bhopal', 'M.p.', '462026', 'Narayan Nagar \r\nHoshangabad Road ', 'Bhopal', 'Bhopal', '462026', 'M. P.', '9993895022', 'vivek1@gmail.com', 0, '2018-04-02 07:04:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_card_request`
--

CREATE TABLE IF NOT EXISTS `tbl_card_request` (
  `crrid` int(11) NOT NULL AUTO_INCREMENT,
  `crtype` varchar(50) NOT NULL,
  `cardNo` varchar(16) DEFAULT NULL,
  `crlimit` varchar(20) DEFAULT NULL,
  `userid` varchar(50) NOT NULL,
  `anual_Income` varchar(20) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `remark` varchar(500) DEFAULT NULL,
  `currentDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`crrid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_card_request`
--

INSERT INTO `tbl_card_request` (`crrid`, `crtype`, `cardNo`, `crlimit`, `userid`, `anual_Income`, `status`, `remark`, `currentDate`) VALUES
(1, 'Credit Cart', '351915897', '100000', 'JSA059003', '5800000', 1, 'Test', '2018-04-06 13:18:48'),
(2, 'Credit Cart', '160790900', '25000', 'JSA059003', '213123', 1, 'dsfdfs', '2018-04-06 13:35:45'),
(3, 'Debit Cart', NULL, '150000', 'JSA059003', '78966', 2, 'visa card', '2018-04-06 13:45:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loan`
--

CREATE TABLE IF NOT EXISTS `tbl_loan` (
  `loan_id` int(11) NOT NULL AUTO_INCREMENT,
  `loan_name` varchar(50) NOT NULL,
  `loan_persentage` int(3) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`loan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_loan`
--

INSERT INTO `tbl_loan` (`loan_id`, `loan_name`, `loan_persentage`, `status`, `createdate`) VALUES
(1, 'Home Loan', 30, 1, '2018-04-02 13:09:37'),
(2, 'Education Loan', 25, 1, '2018-04-02 13:09:37'),
(3, 'personal Loan', 33, 1, '2018-04-03 06:40:46'),
(4, 'Car Loan', 12, 1, '2018-04-03 07:03:50'),
(5, 'scoler Loan', 5, 1, '2018-04-03 07:04:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loan_request`
--

CREATE TABLE IF NOT EXISTS `tbl_loan_request` (
  `loan_req_id` int(11) NOT NULL AUTO_INCREMENT,
  `loanid` int(11) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `amount` double(9,2) DEFAULT NULL,
  `duration` int(3) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `remark` varchar(500) DEFAULT NULL,
  `loan_Start_Date` varchar(20) DEFAULT NULL,
  `loan_End_Date` varchar(20) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '0-notApprove, 1- Approved, 2-rejected, 3-close',
  `createdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`loan_req_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_loan_request`
--

INSERT INTO `tbl_loan_request` (`loan_req_id`, `loanid`, `userid`, `amount`, `duration`, `dob`, `remark`, `loan_Start_Date`, `loan_End_Date`, `status`, `createdate`) VALUES
(1, 1, 'JSA028602', 58000.00, 5, '1985-04-17', 'test Remark', '2018-04-04', '2018-04-25', 1, '2018-04-02 13:16:30'),
(2, 4, 'JSA028602', 500000.00, 15, '2018-04-19', 'Car Loan for Secound Hand Car ', NULL, NULL, 0, '2018-04-03 07:05:59');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_logindetails`
--

INSERT INTO `tbl_logindetails` (`user_id`, `name`, `email`, `phone`, `userid`, `pass`, `status`, `usertype`, `creatDate`) VALUES
(2, 'Neelesh', 'nkp@gmail.com', '7828867719', 'JSA063302', '7828867719', 1, 1, '2018-04-01 21:56:57'),
(3, 'Neelesh', 'nkp@gmail.com', '7828867719', 'JSA059003', '7828867719', 1, 1, '2018-04-01 21:59:20'),
(4, 'Neelesh', 'nkp@gmail.com', '7828867719', 'JSA028602', 'abc@123', 3, 1, '2018-04-01 22:25:23'),
(5, 'Neelesh Kumar Prajapati', 'nkp@gmail.com', '0', 'admin', 'admin', 1, 2, '2018-04-01 23:01:23'),
(6, 'vivek sharma', 'vivek@gmail.com', '9993895021', 'JSA037204', '9993895021', 3, 1, '2018-04-02 06:58:34'),
(7, 'vivek1 sharma', 'vivek1@gmail.com', '9993895022', 'JSA039005', '9993895022', 3, 1, '2018-04-02 07:01:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payee`
--

CREATE TABLE IF NOT EXISTS `tbl_payee` (
  `payee_id` int(11) NOT NULL AUTO_INCREMENT,
  `payee_userid` varchar(50) DEFAULT NULL,
  `sender_userid` varchar(50) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `current_Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payee_name` varchar(50) DEFAULT NULL,
  `payee_remark` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`payee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_payee`
--

INSERT INTO `tbl_payee` (`payee_id`, `payee_userid`, `sender_userid`, `status`, `current_Time`, `payee_name`, `payee_remark`) VALUES
(1, 'JSA063302', '1', 1, '2018-04-02 08:06:39', 'Neelesh', 'Test id'),
(2, 'JSA045809', '1', 1, '2018-04-02 09:22:46', 'Neelesh', 'test'),
(3, 'JSA063302', '1', 1, '2018-04-02 10:43:41', 'Pravin Kumar', 'test'),
(4, 'JSA045809', '1', 1, '2018-04-02 10:49:30', 'Pravin Kumar', 'test'),
(5, 'JSA045809', 'JSA028602', 1, '2018-04-02 10:50:57', 'Neelesh', 'sddasdsa'),
(6, 'JSA044819', 'JSA028602', 1, '2018-04-02 10:51:14', 'Pravin Kumar Pankaj', 'Testing'),
(9, 'JSA044819', 'JSA028602', 1, '2018-04-03 06:37:11', 'Santosh', 'test'),
(10, 'JSA044845', 'JSA028602', 1, '2018-04-03 06:37:33', 'mukund', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction`
--

CREATE TABLE IF NOT EXISTS `tbl_transaction` (
  `txn_id` int(11) NOT NULL AUTO_INCREMENT,
  `txn_remark` varchar(150) DEFAULT NULL,
  `txn_DebitAmt` double(9,2) DEFAULT NULL,
  `txn_CreditAmt` double(9,2) DEFAULT NULL,
  `txn_userid` varchar(20) DEFAULT NULL,
  `txn_senderid` varchar(20) DEFAULT NULL,
  `txn_recieverid` varchar(20) DEFAULT NULL,
  `txn_status` int(1) NOT NULL DEFAULT '1' COMMENT '0-faild, 1-sucess ,2- pending',
  `txn_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`txn_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_transaction`
--

INSERT INTO `tbl_transaction` (`txn_id`, `txn_remark`, `txn_DebitAmt`, `txn_CreditAmt`, `txn_userid`, `txn_senderid`, `txn_recieverid`, `txn_status`, `txn_time`) VALUES
(0, 'TestCheckNo : 24554', 0.00, 210554.00, 'JSA028602', '', 'JSA028602', 1, '2018-03-28 11:35:49'),
(1, 'test1', 50000.00, 0.00, 'JSA028602', '', 'JSA045809', 1, '2018-04-03 11:38:09'),
(2, 'test1', 0.00, 50000.00, 'JSA045809', 'JSA028602', '', 1, '2018-04-02 11:38:09'),
(3, 'test12k', 12000.00, 0.00, 'JSA028602', '', 'JSA044819', 1, '2018-04-02 11:50:09'),
(4, 'test12k', 0.00, 12000.00, 'JSA044819', 'JSA028602', '', 1, '2018-04-02 11:50:09'),
(5, 'test Cash : ', 0.00, 1233.00, 'JSA028602', '', 'JSA028602', 1, '2018-04-02 12:03:35'),
(6, 'Salary Check No : 86475', 0.00, 5000.00, 'JSA028602', '', 'JSA028602', 1, '2018-04-02 12:04:57'),
(8, 'testCash', 0.00, 12300.00, 'JSA028602', '', 'JSA028602', 1, '2018-04-02 12:07:15');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

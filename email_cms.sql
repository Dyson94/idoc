-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2015 at 07:26 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `email_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `draft`
--

CREATE TABLE IF NOT EXISTS `draft` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `from_mail` varchar(200) NOT NULL,
  `to_addr` varchar(200) NOT NULL,
  `keyword` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `draft`
--

INSERT INTO `draft` (`id`, `from_mail`, `to_addr`, `keyword`, `message`) VALUES
(22, '1@gmail.com', 'kavi@gmail.com', 'personal', 'test 1');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `user_email` varchar(50) NOT NULL,
  `user_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_email`, `user_pass`) VALUES
('1@gmail.com', '12345'),
('2@gmail.com', '200'),
('3@gmail.com', '300'),
('4@gmail.com', '400');

-- --------------------------------------------------------

--
-- Table structure for table `mess`
--

CREATE TABLE IF NOT EXISTS `mess` (
  `from_mail` varchar(100) NOT NULL,
  `to` varchar(100) NOT NULL,
  `keyword` varchar(100) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `uid` int(30) NOT NULL AUTO_INCREMENT,
  `from_mail` varchar(100) NOT NULL,
  `to_addr` varchar(100) NOT NULL,
  `keyword` varchar(200) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`uid`, `from_mail`, `to_addr`, `keyword`, `message`) VALUES
(31, 'kavi@gmail.com', 'sgsangeetha@gmail.com', 'primary', 'hai'),
(32, 'kavi@gmail.com', 'sgsangeetha@gmail.com', 'primary', 'hai'),
(33, 'kavi@gmail.com', 'sabi@gmail.com', 'Social', 'welcome'),
(34, 'kavi@gmail.com', 'ramya@gmail.com', 'social', 'hai'),
(35, 'kavi@gmail.com', 'ravi@gmail.com', 'primary', 'how are u\r\n'),
(36, 'kavi@gmail.com', '123@gmail.com', 'promotion', 'hiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii...............'),
(37, '1@gmail.com', 'vi@gmail.com', 'social', 'test 111'),
(39, '1@gmail.com', 'kavi@gmail.com', '', 'helo'),
(40, '1@gmail.com', 'kavi@gmail.com', 'personal', 'cefvefvefvefv'),
(41, 'kavi@gmail.com', 'kavi@gmail.com', 'promotion', 'this is a test for promotional'),
(42, 'kavi@gmail.com', '1@gmail.com', 'personal', 'hello this a test message for 1 on inbox'),
(43, '1@gmail.com', 'kavi@gmail.com', 'social', 'hello test for social from 1');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_cpass` varchar(100) NOT NULL,
  `gen` varchar(20) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(100) NOT NULL,
  `mno` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `uname`, `user_email`, `user_pass`, `user_cpass`, `gen`, `dob`, `address`, `country`, `mno`) VALUES
(1, 'Manickam', '1@gmail.com', '100', '100', 'male', '26-08-1990', '114A,Raja nagar,coimbatore', 'India', '7897897890'),
(2, 'Shalini', '2@gmail.com', '200', '200', 'Female', '13-03-1992', '87,Ist floor,Bucking street,Florida', 'America', '7689789690'),
(3, 'Dinesh', '3@gmail.com', '300', '300', 'male', '03-09-1988', '56,IO street,cubaba', 'Zimbabwe', '9898787898'),
(4, 'vishnu Priya', '4@gmail.com', '400', '400', 'female', '21-06-1993', '84,Reformed street', 'Bhutan', '8220619049'),
(5, 'vignesh1100', '5@gmail.com', '500', '500', 'male', '26-03-1992', '76,rajio street', 'germany', '8807204970'),
(6, 'jana', '6@gmail.com', '12345', '12345', 'male', '30-09-1989', '76,rajio street', 'India', '8905674321'),
(7, 'yu', '45@gmail.com', '12', '12', 'female', '28-09-89', '', 'germany', '8'),
(8, 'kavi', 'kavi@gmail.com', '12345', 'kavi', 'female', '9-10-1991', 'selvapuram cbe', 'india', '998776564564');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

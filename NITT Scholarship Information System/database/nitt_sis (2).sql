-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 22, 2013 at 09:14 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nitt_sis`
--

-- --------------------------------------------------------

--
-- Table structure for table `contect`
--

CREATE TABLE IF NOT EXISTS `contect` (
  `name` varchar(30) NOT NULL,
  `department` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `phone` int(12) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contect`
--

INSERT INTO `contect` (`name`, `department`, `designation`, `phone`, `email`) VALUES
('anil meravat', 'MCA', 'Student', 2147483647, 'anilmeravat@gmail.com'),
('anil meravat', 'MCA', 'Student', 2147483647, 'anilmeravat@gmail.com'),
('koli', 'Computer Science', 'Student student', 1234567890, 'koli@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `home_page_info`
--

CREATE TABLE IF NOT EXISTS `home_page_info` (
  `state` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `information` text NOT NULL,
  `updatedby` varchar(10) NOT NULL,
  `updatedon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_page_info`
--

INSERT INTO `home_page_info` (`state`, `category`, `information`, `updatedby`, `updatedon`, `link`) VALUES
('Madhya Pradesh', 'obc', 'hi this is first time\r\nwhats up?', '205112076', '2013-10-21 07:24:59', 'http://www.nitt.edu'),
('default', 'default', '             Welcome                  \r\nget your information here\r\n   documents                                                                             \r\nok\r\n                                                    www.google.com', 'anil', '2013-10-21 18:45:09', 'www.nitt.edu');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `name` varchar(25) NOT NULL,
  `roll_no` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `category` varchar(7) NOT NULL,
  `state` varchar(20) NOT NULL,
  `reg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`roll_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `roll_no`, `password`, `phone_no`, `email`, `category`, `state`, `reg_time`) VALUES
('', '', '', 0, '', 'obc', 'Madhya Pradesh', '2013-10-21 18:27:15'),
('mayank sahu', '205112044', '12345', 123456789, 'mayanksahujma@gmail.com', 'obc', 'Madhya Pradesh', '2013-10-18 21:30:46'),
('sapan namdeo', '205112068', 'Nitt500', 2147483647, 'sapan@hotmail.com', 'obc', 'Madhya Pradesh', '2013-10-21 18:37:41'),
('anil', '205112076', 'anil', 2147483647, 'anilmeravat@gmail.com', 'gen', '', '2013-10-19 16:27:18');

-- --------------------------------------------------------

--
-- Table structure for table `student_inbox`
--

CREATE TABLE IF NOT EXISTS `student_inbox` (
  `reciever` varchar(10) NOT NULL,
  `msg_id` int(10) NOT NULL AUTO_INCREMENT,
  `sender_name` varchar(20) NOT NULL DEFAULT 'Admin',
  `sender_id` varchar(10) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `massage` text NOT NULL,
  `sent_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1001 ;

--
-- Dumping data for table `student_inbox`
--

INSERT INTO `student_inbox` (`reciever`, `msg_id`, `sender_name`, `sender_id`, `subject`, `massage`, `sent_time`) VALUES
('205112076', 1000, 'Admin', 'admin id', 'hell.......... try', '     welcome\r\nthis is first masg to you\r\n\r\n      have a good day', '2013-10-22 06:46:45');

-- --------------------------------------------------------

--
-- Table structure for table `webmail_password`
--

CREATE TABLE IF NOT EXISTS `webmail_password` (
  `roll_no` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`roll_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webmail_password`
--

INSERT INTO `webmail_password` (`roll_no`, `password`, `type`) VALUES
('', '', 'student'),
('123', '', 'student'),
('205112044', 'mayank', 'student'),
('205112068', 'Nitt500', 'student'),
('205112076', 'anil', 'student'),
('205112080', '2232', 'student');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

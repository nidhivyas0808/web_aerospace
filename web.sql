-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 10, 2021 at 06:36 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `role` enum('admin') NOT NULL DEFAULT 'admin',
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `role`, `password`) VALUES
(1, 'nidhi888', 'admin', '12341234');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `imagee` varchar(30) NOT NULL,
  `course_name` varchar(30) NOT NULL,
  `course_dur` varchar(30) NOT NULL,
  `eligibility` varchar(30) NOT NULL,
  `course_fee` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `imagee`, `course_name`, `course_dur`, `eligibility`, `course_fee`) VALUES
(10, '3.jpg', 'Aviation, Hospitality(PG)', '24 months', 'Graduated', '2,00000rs.'),
(12, '8.png', ' Travel & Customer Service', '12months', '12th pass', '1,20000rs.'),
(13, '1.jpg', ' Hospitality Services(PG)', '6 months', 'Graduated', '2,00000rs.'),
(14, '6.jpg', 'Aviation(PG)', '6 months', 'Graduated', '1,50000rs.'),
(16, '5.png', 'Cabin Crew(Diploma)', '6 months', '12th pass', '30,000rs.'),
(18, '7.jpg', 'Travel Management(PG)', '11months', 'Graduated', '1,50000rs.');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE IF NOT EXISTS `enquiry` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `enquiry_subject` varchar(200) NOT NULL,
  `message` varchar(300) NOT NULL,
  `reply` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `contact`, `email`, `enquiry_subject`, `message`, `reply`) VALUES
(8, 'Mahima Sisodiya', 2147483647, 'maahi@gmail.com', 'Institute', 'Admission Process', 'contact you soon'),
(9, 'Nidhi Vyas', 2147483647, 'nidhivyas2311@gmail.com', 'course', 'how to take admision', 'mail you the process thruogh email'),
(10, 'mani badiya', 2147483647, 'manigmail.com', 'course', 'how to take admision', 'contact you soon'),
(13, 'viven', 2147483647, 'nidhivyas2311@gmail.com', 'hii', 'hello', 'Contact you Soon'),
(14, 'Kridha', 888179890, 'kridha@gmail.com', 'Institute', 'Admission Process', 'Contact you Soon'),
(16, 'Kridha', 2147483647, 'kridha@gmail.com', 'hello', 'hiiiiiiii', 'in your contact'),
(17, 'Ayush', 2147483647, 'ayushh@gmail.com', 'Institute', 'how to take admision', 'contact you soon'),
(18, 'kaaju ansari', 2147483647, 'kaaju@gmail.com', 'course', 'how to take admision', 'Contact you Soon');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `contact` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `name`, `email`, `course`, `gender`, `contact`) VALUES
(19, 'Mahima Sisodiya', 'mahi@gmail.com', 'Hospitality, Travel & Customer Service', 'Female', 2147483647),
(20, 'Mantasha Ansari', 'mann@gmail.com', 'Hospitality, Travel & Customer Service', 'Female', 2147483647),
(21, 'Trisha Sharma ', 'trish@gmail.com', 'Hospitality Management', 'Female', 2147483647),
(22, 'Nitisha vyas', 'nittu@gmail.com', 'Aviation & Hospitality Services (Post Graduate) Airport Ground Services (Post Graduate)', 'Female', 2147483647),
(24, 'mani', 'mani@gmail.com', 'Aviation, Hospitality and Travel Management ', 'Female', 2147483647),
(25, 'City', 'city@gmail.com', 'Certificate Course in Hospitality, Travel & Customer Service', 'Female', 2147483647),
(27, 'nitisha vyas', 'n@gmail.com', 'Certificate Course in Aviation, Hospitality and Travel Management', 'Female', 2147483647),
(28, 'nitisha vyas', 'n@gmail.com', 'Aviation & Hospitality Services (Post Graduate) Airport Ground Services (Post Graduate)', 'Female', 2147483647),
(29, 'Kridha', 'kridha@gmail.com', 'Aviation & Hospitality Services (Post Graduate) Airport Ground Services (Post Graduate)', 'Female', 888179890),
(30, 'Ajay vyas', 'ajay@gmail.com', 'Hospitality Management', 'Male', 2147483647),
(31, 'Ayush', 'ayushh@gmail.com', 'Aviation & Hospitality Services (Post Graduate) Airport Ground Services (Post Graduate)', 'Male', 2147483647),
(32, 'kaaju ansari', 'kaaju@gmail.com', 'Certificate Course in Hospitality, Travel & Customer Service', 'Female', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `email`, `password`) VALUES
(25, 'n@gmail.com', '3333333333333'),
(26, 'nidhivyas2311@gmail.com', '3333333333'),
(29, 'nidhivyas2311@gmail.com', '1234'),
(31, 'h@gmail.com', '11111111'),
(32, 'ciii@gmail.com', '4352617'),
(33, 'z@gmail.com', '1234567'),
(34, 'rk@gmail.com', '123456789'),
(35, 'nu@gmail.com', '234444444'),
(36, 'nitisha@gmail.com', '345679'),
(39, 'kridha@gmail.com', '8888'),
(40, 'ajay@gmail.com', '1234'),
(41, 'ayushh@gmail.com', '3333'),
(42, 'kaaju@gmail.com', '12345');

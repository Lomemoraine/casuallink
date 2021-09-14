-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2021 at 04:24 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `allusershist`
--

CREATE TABLE IF NOT EXISTS `allusershist` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `idno` int(10) NOT NULL,
  `photo` text NOT NULL,
  `tel` int(10) NOT NULL,
  `pphoto` text NOT NULL,
  `area` varchar(50) NOT NULL,
  `rate` int(10) NOT NULL,
  `cm` varchar(50) NOT NULL,
  `date` timestamp(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `allusershist`
--

INSERT INTO `allusershist` (`id`, `fname`, `gender`, `idno`, `photo`, `tel`, `pphoto`, `area`, `rate`, `cm`, `date`) VALUES
(1, 'nelson mwaura', 'Male', 90, 'pp.jpg', 726426754, '', 'Embakasi', 113, 'very fuckingS', '0000-00-00 00:00:00.00000'),
(2, 'raine', 'female', 123, 'Capt.png', 726426754, 'pp.jpg', 'Embakasi', 0, '', '0000-00-00 00:00:00.00000'),
(4, 'saimo', '', 0, '', 0, '', '', 0, '', '0000-00-00 00:00:00.00000'),
(5, 'saimon', '', 0, '', 0, '', '', 0, '', '0000-00-00 00:00:00.00000'),
(6, 'mwema', 'Male', 123456, 'Capt.png', 726426754, 'pp.jpg', 'Embakasi', 0, '', '0000-00-00 00:00:00.00000'),
(7, 'mwema', 'Male', 123456, 'Capt.png', 726426754, 'pp.jpg', 'Embakasi', 0, '', '0000-00-00 00:00:00.00000'),
(8, 'vgdx', 'Male', 1111, 'Capt.png', 741751245, 'pp.jpg', 'Embakasi', 0, '', '0000-00-00 00:00:00.00000'),
(9, 'dgdg', 'Male', 120, 'Capt.png', 726426754, 'pp.jpg', 'Embakasi', 0, '', '0000-00-00 00:00:00.00000');

-- --------------------------------------------------------

--
-- Table structure for table `ausers`
--

CREATE TABLE IF NOT EXISTS `ausers` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `idno` int(50) NOT NULL COMMENT 'primary key',
  `photo` text NOT NULL,
  `tel` int(50) NOT NULL,
  `pphoto` text NOT NULL,
  `area` varchar(50) NOT NULL,
  `rate` int(10) NOT NULL,
  `cm` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ausers`
--

INSERT INTO `ausers` (`id`, `fname`, `gender`, `idno`, `photo`, `tel`, `pphoto`, `area`, `rate`, `cm`) VALUES
(2, 'nelson mwaura', 'Male', 9, 'Capt.png', 726426754, 'pp.jpg', 'Embakasi', 82, 'why');

-- --------------------------------------------------------

--
-- Table structure for table `cusers`
--

CREATE TABLE IF NOT EXISTS `cusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(100) NOT NULL,
  `area` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `cusers`
--

INSERT INTO `cusers` (`id`, `cname`, `area`, `uname`, `password`) VALUES
(1, 'crown paint', 'Embakasi', 'cpaint', '1234'),
(2, 'kingsmart', 'Idustrial Area', 'king', '1234'),
(3, 'tononoka', 'Embakasi', 'tononoka', '1234'),
(4, 'superior homes', 'Athi river', 'shk', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `session` varchar(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `idno` int(50) NOT NULL,
  `total` int(50) NOT NULL,
  `time` timestamp(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `session`, `fname`, `idno`, `total`, `time`) VALUES
(1, 'cpaint', 'nelson mwaura', 9, 4200, '2021-08-27 13:33:51.0000'),
(2, 'tononoka', 'nelson mwaura', 9, 2000, '2021-08-27 13:41:08.0000');

-- --------------------------------------------------------

--
-- Table structure for table `sworkers`
--

CREATE TABLE IF NOT EXISTS `sworkers` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `session` varchar(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `idno` int(10) NOT NULL,
  `tel` int(50) NOT NULL,
  `rate` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sworkers`
--

INSERT INTO `sworkers` (`id`, `session`, `fname`, `gender`, `idno`, `tel`, `rate`) VALUES
(1, 'tononoka', 'nelson mwaura', 'Male', 9, 726426754, 0),
(2, 'tononoka', 'nelson mwaura', 'Male', 9, 726426754, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(5) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `idno` int(50) NOT NULL,
  `photo` text NOT NULL,
  `tel` int(50) NOT NULL,
  `pphoto` text NOT NULL,
  `area` varchar(50) NOT NULL,
  `rate` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `gender`, `idno`, `photo`, `tel`, `pphoto`, `area`, `rate`) VALUES
(4, 'nelson mwaura', 'Male', 9, 'Capt.png', 726426754, 'pp.jpg', 'Embakasi', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

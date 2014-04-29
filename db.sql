n SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Apr 29, 2014 at 11:03 AM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `nabresco`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_accounts`
--

CREATE TABLE `admin_accounts` (
  `user_id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `admin_accounts`
--

INSERT INTO `admin_accounts` (`user_id`, `username`, `password`, `fname`, `lname`, `email`) VALUES
(13, 'rashednaber', 'naber1452', 'Rashed', 'AlNaber', 'rashed.naber@nabresco.com'),
(14, 'raednaber', 'KitKit1452', 'Raed', 'AlNaber', 'raed.naber@nabresco.com'),
(15, 'admin', '123456', 'admin', 'admin', 'admin@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(5) NOT NULL AUTO_INCREMENT,
  `project_description` varchar(200) NOT NULL,
  `project_client` varchar(200) NOT NULL,
  `project_location` varchar(50) NOT NULL,
  `project_country` varchar(50) NOT NULL,
  `project_year` varchar(20) NOT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_description`, `project_client`, `project_location`, `project_country`, `project_year`) VALUES
(2, 'J.E.A', 'Jordan Electricity Authority', 'Multiple locations', 'Jordan', '1956-1975'),
(3, 'JOPETROL', 'Consolidated Contractors', 'Zarqa', 'Jordan', '1957-1958'),
(4, 'JOPETROL', 'SNAMME Project - Milan, Italy', 'Zarqa', 'Jordan', '1957-1961'),
(5, 'Aqaba Port', 'Ed. Zublin AG.', 'Aqaba', 'Jordan', '1958-1967');


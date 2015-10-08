-- phpMyAdmin SQL Dump
-- version 4.2.9.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Oct 08, 2015 at 07:24 AM
-- Server version: 5.5.40
-- PHP Version: 5.4.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ktprame`
--

-- --------------------------------------------------------

--
-- Table structure for table `citizens`
--

CREATE TABLE IF NOT EXISTS `citizens` (
  `nik` varchar(20) NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `digitalizations`
--

CREATE TABLE IF NOT EXISTS `digitalizations` (
`digitalizationId` int(11) NOT NULL,
  `digitalizerEmail` varchar(50) NOT NULL,
  `postId` int(11) NOT NULL,
  `data` text NOT NULL,
  `nik` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `digitalizers`
--

CREATE TABLE IF NOT EXISTS `digitalizers` (
  `digitalizerEmail` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `fullname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `posters`
--

CREATE TABLE IF NOT EXISTS `posters` (
  `postersEmail` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `postcode` varchar(5) NOT NULL,
  `fullname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
`postId` int(11) NOT NULL,
  `posterEmail` varchar(50) NOT NULL,
  `postTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `state` enum('submitted','accepted','rejected','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `citizens`
--
ALTER TABLE `citizens`
 ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `digitalizations`
--
ALTER TABLE `digitalizations`
 ADD PRIMARY KEY (`digitalizationId`);

--
-- Indexes for table `digitalizers`
--
ALTER TABLE `digitalizers`
 ADD PRIMARY KEY (`digitalizerEmail`);

--
-- Indexes for table `posters`
--
ALTER TABLE `posters`
 ADD PRIMARY KEY (`postersEmail`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`postId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `digitalizations`
--
ALTER TABLE `digitalizations`
MODIFY `digitalizationId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `postId` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

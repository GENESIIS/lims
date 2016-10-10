-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2016 at 10:13 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_lims_db`
--
CREATE DATABASE IF NOT EXISTS `demo_lims_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `demo_lims_db`;

-- --------------------------------------------------------

--
-- Table structure for table `arm`
--

DROP TABLE IF EXISTS `arm`;
CREATE TABLE IF NOT EXISTS `arm` (
  `arm_id` int(20) NOT NULL,
  `regnum` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `admiton` date NOT NULL,
  `outpatient` varchar(10) NOT NULL,
  `dischrg` date NOT NULL,
  `trainin` varchar(50) NOT NULL,
  `amputepay` varchar(15) NOT NULL,
  `spons` varchar(25) NOT NULL,
  `sponspaid` varchar(15) NOT NULL,
  `observation` varchar(150) NOT NULL,
  `recomand` varchar(200) NOT NULL,
  `type` varchar(24) NOT NULL,
  `confirm` varchar(150) NOT NULL,
  `condate` date NOT NULL,
  `repdate` date NOT NULL,
  `note` varchar(75) NOT NULL,
  `crton` date NOT NULL,
  `crtby` char(20) NOT NULL,
  `modon` date NOT NULL,
  `modby` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

DROP TABLE IF EXISTS `district`;
CREATE TABLE IF NOT EXISTS `district` (
  `d_id` int(3) NOT NULL,
  `district` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `foot`
--

DROP TABLE IF EXISTS `foot`;
CREATE TABLE IF NOT EXISTS `foot` (
  `f_id` int(20) NOT NULL,
  `regnum` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `admiton` date NOT NULL,
  `outpatient` varchar(10) NOT NULL,
  `dischrg` date DEFAULT NULL,
  `trainin` varchar(50) NOT NULL,
  `amputepay` varchar(15) NOT NULL,
  `spons` varchar(25) NOT NULL,
  `sponspaid` varchar(15) NOT NULL,
  `observation` varchar(150) NOT NULL,
  `recomand` varchar(200) NOT NULL,
  `type` varchar(24) NOT NULL,
  `confirm` varchar(150) NOT NULL,
  `condate` date NOT NULL,
  `repdate` date NOT NULL,
  `note` varchar(75) NOT NULL,
  `crton` date NOT NULL,
  `crtby` char(20) NOT NULL,
  `modon` date NOT NULL,
  `modby` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Stand-in structure for view `foot_vw`
--
DROP VIEW IF EXISTS `foot_vw`;
CREATE TABLE IF NOT EXISTS `foot_vw` (
`regnum` varchar(15)
);

-- --------------------------------------------------------

--
-- Table structure for table `limb`
--

DROP TABLE IF EXISTS `limb`;
CREATE TABLE IF NOT EXISTS `limb` (
  `lid` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `amputepay` varchar(15) NOT NULL,
  `sponspaid` varchar(15) NOT NULL,
  `observation` varchar(150) NOT NULL,
  `recomand` varchar(200) NOT NULL,
  `confirm` varchar(150) NOT NULL,
  `condate` date NOT NULL,
  `crton` date NOT NULL,
  `crtby` char(20) NOT NULL,
  `modon` date NOT NULL,
  `modby` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `memberarm`
--

DROP TABLE IF EXISTS `memberarm`;
CREATE TABLE IF NOT EXISTS `memberarm` (
  `regnum` int(25) NOT NULL,
  `month` int(3) NOT NULL,
  `year` int(5) NOT NULL,
  `date` date NOT NULL,
  `district` char(35) NOT NULL,
  `title` text NOT NULL,
  `fname` char(20) NOT NULL,
  `lname` char(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `national` varchar(25) NOT NULL,
  `religion` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `sex` char(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `education` text NOT NULL,
  `fammem` int(2) NOT NULL,
  `prioremp` varchar(50) NOT NULL,
  `presntemp` varchar(50) NOT NULL,
  `surgerydate` date NOT NULL,
  `doctor` varchar(35) NOT NULL,
  `surgeonhospitle` char(100) NOT NULL,
  `anyother` varchar(50) NOT NULL,
  `afteramp` varchar(50) NOT NULL,
  `vocational` varchar(50) NOT NULL,
  `cause` varchar(25) NOT NULL,
  `whicharm` char(10) NOT NULL,
  `aobelbow` char(10) NOT NULL,
  `crton` date NOT NULL,
  `crtby` char(20) NOT NULL,
  `modon` date NOT NULL,
  `modby` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `memberfoot`
--

DROP TABLE IF EXISTS `memberfoot`;
CREATE TABLE IF NOT EXISTS `memberfoot` (
  `regnum` int(25) NOT NULL,
  `month` int(3) NOT NULL,
  `year` int(5) NOT NULL,
  `date` date NOT NULL,
  `district` char(35) NOT NULL,
  `title` text NOT NULL,
  `fname` char(20) NOT NULL,
  `lname` char(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `national` varchar(25) NOT NULL,
  `religion` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `sex` char(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `education` text NOT NULL,
  `fammem` int(2) NOT NULL,
  `prioremp` varchar(50) NOT NULL,
  `presntemp` varchar(50) NOT NULL,
  `surgerydate` date NOT NULL,
  `doctor` varchar(35) NOT NULL,
  `surgeonhospitle` char(100) NOT NULL,
  `anyother` varchar(50) NOT NULL,
  `afteramp` varchar(50) NOT NULL,
  `vocational` varchar(50) NOT NULL,
  `cause` varchar(25) NOT NULL,
  `whichleg` char(10) NOT NULL,
  `aouk` char(10) NOT NULL,
  `crton` date NOT NULL,
  `crtby` char(20) NOT NULL,
  `modon` date NOT NULL,
  `modby` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `memberother`
--

DROP TABLE IF EXISTS `memberother`;
CREATE TABLE IF NOT EXISTS `memberother` (
  `regnum` int(25) NOT NULL,
  `month` int(3) NOT NULL,
  `year` int(5) NOT NULL,
  `date` date NOT NULL,
  `district` char(35) NOT NULL,
  `title` text NOT NULL,
  `fname` char(20) NOT NULL,
  `lname` char(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `national` varchar(25) NOT NULL,
  `religion` varchar(25) NOT NULL,
  `dob` date NOT NULL,
  `sex` char(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `education` text NOT NULL,
  `fammem` int(2) NOT NULL,
  `prioremp` varchar(50) NOT NULL,
  `presntemp` varchar(50) NOT NULL,
  `surgerydate` date NOT NULL,
  `doctor` varchar(35) NOT NULL,
  `surgeonhospitle` char(100) NOT NULL,
  `anyother` varchar(50) NOT NULL,
  `afteramp` varchar(50) NOT NULL,
  `vocational` varchar(50) NOT NULL,
  `cause` varchar(25) NOT NULL,
  `other` varchar(75) NOT NULL,
  `whichlego` char(10) NOT NULL,
  `whicharmo` char(10) NOT NULL,
  `crton` date NOT NULL,
  `crtby` char(20) NOT NULL,
  `modon` date NOT NULL,
  `modby` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `other`
--

DROP TABLE IF EXISTS `other`;
CREATE TABLE IF NOT EXISTS `other` (
  `oa_id` int(20) NOT NULL,
  `regnum` varchar(12) NOT NULL,
  `date` date NOT NULL,
  `admiton` date NOT NULL,
  `outpatient` varchar(10) NOT NULL,
  `dischrg` date NOT NULL,
  `trainin` varchar(50) NOT NULL,
  `amputepay` varchar(15) NOT NULL,
  `spons` varchar(25) NOT NULL,
  `sponspaid` varchar(15) NOT NULL,
  `observation` varchar(150) NOT NULL,
  `recomand` varchar(200) NOT NULL,
  `type` varchar(24) NOT NULL,
  `confirm` varchar(150) NOT NULL,
  `condate` date NOT NULL,
  `repdate` date NOT NULL,
  `note` varchar(75) NOT NULL,
  `crton` date NOT NULL,
  `crtby` char(20) NOT NULL,
  `modon` date NOT NULL,
  `modby` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(3) NOT NULL,
  `username` char(30) NOT NULL,
  `userlevel` char(20) NOT NULL,
  `pw` varchar(75) NOT NULL,
  `crtby` varchar(30) NOT NULL,
  `crton` date NOT NULL,
  `modby` varchar(30) NOT NULL,
  `modon` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure for view `foot_vw`
--
DROP TABLE IF EXISTS `foot_vw`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `foot_vw` AS (select `foot`.`regnum` AS `regnum` from `foot` where (`foot`.`confirm` = ''));

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arm`
--
ALTER TABLE `arm`
  ADD PRIMARY KEY (`arm_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `foot`
--
ALTER TABLE `foot`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `limb`
--
ALTER TABLE `limb`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `memberarm`
--
ALTER TABLE `memberarm`
  ADD PRIMARY KEY (`regnum`);

--
-- Indexes for table `memberfoot`
--
ALTER TABLE `memberfoot`
  ADD PRIMARY KEY (`regnum`);

--
-- Indexes for table `memberother`
--
ALTER TABLE `memberother`
  ADD PRIMARY KEY (`regnum`);

--
-- Indexes for table `other`
--
ALTER TABLE `other`
  ADD PRIMARY KEY (`oa_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arm`
--
ALTER TABLE `arm`
  MODIFY `arm_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `d_id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `foot`
--
ALTER TABLE `foot`
  MODIFY `f_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `memberarm`
--
ALTER TABLE `memberarm`
  MODIFY `regnum` int(25) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `memberfoot`
--
ALTER TABLE `memberfoot`
  MODIFY `regnum` int(25) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `memberother`
--
ALTER TABLE `memberother`
  MODIFY `regnum` int(25) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `other`
--
ALTER TABLE `other`
  MODIFY `oa_id` int(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(3) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

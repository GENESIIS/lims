-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2016 at 05:34 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(3) NOT NULL,
  `user_fname` varchar(50) NOT NULL,
  `user_lname` varchar(75) NOT NULL,
  `username` char(30) NOT NULL,
  `userlevel` char(20) NOT NULL,
  `pw` varchar(75) NOT NULL,
  `crtby` varchar(30) NOT NULL,
  `crton` date NOT NULL,
  `modby` varchar(30) NOT NULL,
  `modon` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `user_fname`, `user_lname`, `username`, `userlevel`, `pw`, `crtby`, `crton`, `modby`, `modon`) VALUES
(1, 'Super', 'Admin', 'sadmin', 'super admin', 'c5edac1b8c1d58bad90a246d8f08f53b', 'dev', '2016-11-16', '', '0000-00-00'),
(2, '', '', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2016-07-13', '', '0000-00-00'),
(3, '', '', 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'admin', '2016-07-14', '', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

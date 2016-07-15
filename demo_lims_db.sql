-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: mysql.demo.vebdesign.biz
-- Generation Time: Jul 15, 2016 at 03:14 AM
-- Server version: 5.6.25-log
-- PHP Version: 7.0.6

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
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `d_id` int(3) NOT NULL,
  `district` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`d_id`, `district`) VALUES
(1, 'Jaffna'),
(2, 'Kilinochchi'),
(3, 'Mannar'),
(4, 'Mullaitivu'),
(5, 'Vavuniya'),
(6, 'Puttalam'),
(7, 'Kurunegala'),
(8, 'Gampaha'),
(9, 'Colombo'),
(10, 'Kalutara'),
(11, 'Anuradhapura'),
(12, 'Polonnaruwa'),
(13, 'Matale'),
(14, 'Kandy'),
(15, 'Nuwara Eliya'),
(16, 'Kegalle'),
(17, 'Ratnapura'),
(18, 'Trincomalee'),
(19, 'Batticaloa'),
(20, 'Ampara'),
(21, 'Badulla'),
(22, 'Monaragala'),
(23, 'Hambantota'),
(24, 'Matara'),
(25, 'Galle');

-- --------------------------------------------------------

--
-- Table structure for table `limb`
--

CREATE TABLE `limb` (
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
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `regnum` int(25) NOT NULL,
  `month` int(3) NOT NULL,
  `year` int(5) NOT NULL,
  `date` date NOT NULL,
  `district` char(35) NOT NULL,
  `title` text NOT NULL,
  `fname` char(20) NOT NULL,
  `lname` char(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `sex` char(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `education` text NOT NULL,
  `fammem` int(2) NOT NULL,
  `prioremp` varchar(50) NOT NULL,
  `presntemp` varchar(50) NOT NULL,
  `surgerydate` date NOT NULL,
  `reason` text NOT NULL,
  `surgeonhospitle` char(100) NOT NULL,
  `whichleg` char(10) NOT NULL,
  `bouk` char(10) NOT NULL,
  `crton` date NOT NULL,
  `crtby` char(20) NOT NULL,
  `modon` date NOT NULL,
  `modby` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(3) NOT NULL,
  `username` char(30) NOT NULL,
  `userlevel` char(20) NOT NULL,
  `pw` varchar(75) NOT NULL,
  `crtby` varchar(30) NOT NULL,
  `crton` date NOT NULL,
  `modby` varchar(30) NOT NULL,
  `modon` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `userlevel`, `pw`, `crtby`, `crton`, `modby`, `modon`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2016-07-13', '', '0000-00-00'),
(2, 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'admin', '2016-07-14', '', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `limb`
--
ALTER TABLE `limb`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`regnum`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `d_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `regnum` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

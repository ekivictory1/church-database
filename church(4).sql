-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2018 at 09:17 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `church`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `pwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `congregation`
--

CREATE TABLE `congregation` (
  `id` int(100) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `residence` varchar(128) NOT NULL,
  `date` varchar(128) NOT NULL,
  `status` varchar(12) NOT NULL,
  `pwd` varchar(128) NOT NULL,
  `interdict` varchar(128) NOT NULL,
  `offering_1` varchar(128) NOT NULL,
  `offering_2` varchar(128) NOT NULL,
  `offering_3` varchar(128) NOT NULL,
  `offering_4` varchar(128) NOT NULL,
  `tithe_1` varchar(128) NOT NULL,
  `tithe_2` varchar(128) NOT NULL,
  `tithe_3` varchar(128) NOT NULL,
  `tithe_4` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `congregation`
--

INSERT INTO `congregation` (`id`, `name`, `email`, `residence`, `date`, `status`, `pwd`, `interdict`, `offering_1`, `offering_2`, `offering_3`, `offering_4`, `tithe_1`, `tithe_2`, `tithe_3`, `tithe_4`) VALUES
(9, 'margaret wanjiru', 'wanjirufff', 'gakoenn', '12/19/2017', '', '1222', '', '', '', '', '', '1485', '8444', '4444', '4444'),
(10, 'joseph githumbi', 'james@gmail.com', 'githunguri', '12/26/2017', '', '1234', ' 45455', '', '', '', '', '555', '555', '555', '5555'),
(11, 'brian muchai', 'brian@gmail.com', 'gakoe', '12/12/2017', '', '1234', '', '', '', '', '', '', '', '', ''),
(12, 'paul', 'paul@gmail.com', 'voi', '12/19/2017', '', '1234', 'yes', '', '', '', '', '44444', '454854', '', '44498');

-- --------------------------------------------------------

--
-- Table structure for table `offering`
--

CREATE TABLE `offering` (
  `id` int(128) NOT NULL,
  `offering` varchar(128) NOT NULL,
  `offering_1` varchar(128) NOT NULL,
  `offering_2` varchar(128) NOT NULL,
  `offering_3` varchar(128) NOT NULL,
  `offering_4` varchar(128) NOT NULL,
  `offering_5` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offering`
--

INSERT INTO `offering` (`id`, `offering`, `offering_1`, `offering_2`, `offering_3`, `offering_4`, `offering_5`) VALUES
(1, 'OFFERINGS', '85468948', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `congregation`
--
ALTER TABLE `congregation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offering`
--
ALTER TABLE `offering`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `congregation`
--
ALTER TABLE `congregation`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `offering`
--
ALTER TABLE `offering`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

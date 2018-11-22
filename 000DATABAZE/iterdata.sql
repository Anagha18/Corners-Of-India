-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2018 at 07:55 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `places`
--

-- --------------------------------------------------------

--
-- Table structure for table `iterdata`
--

CREATE TABLE `iterdata` (
  `ID` int(11) NOT NULL,
  `Place` text NOT NULL,
  `Days` varchar(1) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Place1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iterdata`
--

INSERT INTO `iterdata` (`ID`, `Place`, `Days`, `Username`, `Place1`) VALUES
(1, 'Ranchi', '1', 'krithika', 'Day 1:\r\n1. Deori Temple\r\n2. Jonha Falls\r\n3. Rock Garden'),
(2, 'Ranchi', '2', 'krithika', 'Day 2:\r\n1. Pahari Mandir\r\n2. Hudru Falls\r\n3. Birsa Zoological Park'),
(3, 'Ranchi', '3', 'krithika', 'Day 3:\r\n1. Sun Temple\r\n2. Kanke Dam\r\n3. Hirni Falls'),
(4, 'Agra', '1', 'oshin', 'Day 1:\r\n1. Taj Mahal\r\n2. Agra Fort\r\n3. Fathepur Sikri'),
(5, 'Surat', '1', 'oshin', 'Day 1:\r\n1. Sri Shirdi Sai Temple\r\n2. Linear Park\r\n3. Dumas Beach\r\n2.\r\n3.'),
(6, 'Chandigarh', '1', 'krithika', 'Day 1:\r\n1. Rock Garden\r\n2. Sukhna Lake\r\n3. Elante Mall');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `iterdata`
--
ALTER TABLE `iterdata`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `iterdata`
--
ALTER TABLE `iterdata`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

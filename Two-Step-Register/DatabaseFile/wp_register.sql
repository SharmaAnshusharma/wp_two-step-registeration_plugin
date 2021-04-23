-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 05:01 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wordpress1`
--

-- --------------------------------------------------------

--
-- Table structure for table `wp_register`
--

CREATE TABLE `wp_register` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Qualification` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wp_register`
--

INSERT INTO `wp_register` (`ID`, `Name`, `Email`, `Mobile`, `Address`, `Qualification`) VALUES
(1, 'Anshu Sharma', 'rahulsharma1298@gmail.com', '7007976332', 'lucknow', 'MCA'),
(2, 'Anshu Sharma', 'rahulsharma1298@gmail.com', '8974561230', 'lucknow', 'MCA'),
(3, 'Anshu Sharma', 'rahulsharma1298@gmail.com', '7007976332', 'lucknow', 'MCA'),
(4, 'Anshu Sharma', 'rahulsharma1298@gmail.com', '7007976332', 'lucknow', 'MCA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wp_register`
--
ALTER TABLE `wp_register`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wp_register`
--
ALTER TABLE `wp_register`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

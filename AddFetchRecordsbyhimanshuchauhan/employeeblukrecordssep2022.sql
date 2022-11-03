-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2022 at 06:22 AM
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
-- Database: `employeeblukrecordssep2022`
--

-- --------------------------------------------------------

--
-- Table structure for table `bulkrecordmaster`
--

CREATE TABLE `bulkrecordmaster` (
  `Id` int(11) NOT NULL,
  `DeptCode` varchar(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bulkrecordmaster`
--

INSERT INTO `bulkrecordmaster` (`Id`, `DeptCode`, `Name`, `Contact`) VALUES
(1, '101', 'li', '1'),
(2, '101', 'ti', '1111'),
(3, '101', 'dear', '2'),
(4, '101', 'bear', '9222'),
(5, '102', 'h', '9516'),
(6, '102', 'p', '9'),
(7, '102', 'ayush', '9516'),
(8, '103', 'abhi', '120'),
(9, '103', 'bablu', '130'),
(10, '103', 'cc', '14'),
(11, '103', 'dd', '15'),
(12, '104', 'sumit', '1025'),
(14, '105', 'lion', '12'),
(15, '105', 'bablu', '21'),
(16, '106', 'afsd', '111'),
(17, '106', 'asdf', '2030');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bulkrecordmaster`
--
ALTER TABLE `bulkrecordmaster`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bulkrecordmaster`
--
ALTER TABLE `bulkrecordmaster`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

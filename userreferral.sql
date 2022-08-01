-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2022 at 10:41 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userreferral`
--

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE `userregistration` (
  `Id` int(11) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `ReferenceCode` varchar(50) NOT NULL,
  `ReferralCode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`Id`, `FullName`, `Email`, `Password`, `ReferenceCode`, `ReferralCode`) VALUES
(3, 'owolabi salaam', 'Salaam@gmail.com', '000000', '202207311110', '00000000'),
(4, 'OWOLABI Quadri', 'manquadry@gmail.com', '11111', '202207311513', '00000000'),
(5, 'Adekunle Gold', 'Gold@gmail.com', '22222', '202207310605', '202207311110'),
(6, 'Abiodun bello', 'Bello@yahoo.com', '123456', '202208011814', '202207311110'),
(7, 'shade oyeyemi', 'Oyeyemi@gmail.com', '11111', '202208012117', '202207311110'),
(8, 'Yemi esho', 'Yemos@gmail.com', '99999', '202208013552', '202207311513'),
(9, 'Yemi Alade', 'Yeamos@yahoo.com', '22222', '202208013116', '202207310605');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userregistration`
--
ALTER TABLE `userregistration`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userregistration`
--
ALTER TABLE `userregistration`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

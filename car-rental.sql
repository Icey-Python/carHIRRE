-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 16, 2023 at 11:11 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car-rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `transaction_id` text NOT NULL,
  `status` text NOT NULL,
  `name` text NOT NULL,
  `car name` text NOT NULL,
  `car price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `transaction_id`, `status`, `name`, `car name`, `car price`) VALUES
(3, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(4, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(5, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(6, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(7, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(8, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(9, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(10, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(11, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(12, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(13, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(14, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(15, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(16, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(17, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(18, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(19, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(20, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(21, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(22, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(23, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(24, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(25, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(26, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(27, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(28, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(29, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(30, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(31, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(32, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(33, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(34, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(35, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(36, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(37, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(38, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(39, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(40, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(41, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(42, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(43, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(44, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(45, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(46, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(47, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(48, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(49, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(50, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(51, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(52, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(53, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(54, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(55, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(56, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(57, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(58, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(59, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(60, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(61, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000'),
(62, 'ws_CO_16032023103307076702716555', 'Transaction  was cancelled by user', 'Jamie', 'black porche', '15000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2021 at 06:51 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparksbank_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction_details`
--

CREATE TABLE `transaction_details` (
  `sno` int(5) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `receiver` varchar(100) NOT NULL,
  `balance` int(10) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_details`
--

INSERT INTO `transaction_details` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'Ram', 'Singh', 23000, '2021-07-13 10:24:15'),
(2, 'Danish', 'Khan', 45000, '2021-07-15 14:23:34'),
(3, 'Dolly', 'Singh', 10000, '2021-07-15 14:24:57'),
(4, 'Firoz', 'Shah', 30000, '2021-07-15 15:43:59'),
(5, 'Kriti', 'Shankar', 35780, '2021-07-15 15:51:29'),
(6, 'Amisha', 'Devi', 2000, '2021-07-16 11:13:00'),
(7, 'Eesha', 'Gandhi', 25000, '2021-07-16 12:00:01'),
(8, 'Akash', 'Dube', 90000, '2021-07-17 15:23:23'),
(9, 'Givisha', 'Sharan', 67890, '2021-07-17 15:09:23'),
(10, 'Suman', 'Singh', 50000, '2021-07-18 04:09:00');

-- --------------------------------------------------------

--
-- Table structure for table `users_details`
--

CREATE TABLE `users_details` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `balance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_details`
--

INSERT INTO `users_details` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Ram', 'ram03@gmail.com', 23000),
(2, 'Danish', 'danishkhan@gmail.com', 45000),
(3, 'Dolly', 'dolly123@gmail.com', 10000),
(4, 'Firoz', 'firozshah@gmail.com', 30000),
(5, 'Kriti', 'kritiii23@gmail.com', 35780),
(6, 'Amisha', 'ami09@gmail.com', 2000),
(7, 'Eesha', 'eeesha12@gmail.com', 25000),
(8, 'Akash', 'akash24@gmail.com', 90000),
(9, 'Givisha', 'givis101@gmail.com', 67890),
(10, 'Suman', 'sumansingh@gmail.com', 50000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `sno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

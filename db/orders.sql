-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2023 at 12:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoes`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `apart` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `postal` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `c_number` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `user_id`, `fname`, `lname`, `country`, `street`, `apart`, `city`, `state`, `postal`, `email`, `c_number`, `c_email`) VALUES
(1, 1, 1, 'Tushar', 'Singh', 'India', '60 foot road', 'Mansarovar Soc. Godadra, Surat', 'Surat', 'Gujarat', '395010', 'tushar@gmail.com', '08849799273', 'harsh@gmail.com'),
(2, 2, 1, 'Tushar', 'Singh', 'India', 'B-173/174 Mansarovar Soc. ', 'Aas Paas mandir, Godadra, Surat', 'Surat', 'Gujarat', '395010', 'tushar@gmail.com', '08849799273', 'harsh@gmail.com'),
(3, 3, 1, 'Tushar', 'Singh', 'India', '60 foot road', 'Mansarovar Soc. Godadra, Surat', 'Surat', 'Gujarat', '395010', 'tushar@gmail.com', '08849799273', 'harsh@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

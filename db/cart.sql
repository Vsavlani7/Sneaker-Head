-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2023 at 11:39 AM
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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `prod_id` int(100) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL,
  `size` int(100) NOT NULL,
  `color` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `prod_id`, `brand`, `name`, `image`, `price`, `quantity`, `size`, `color`, `code`) VALUES
(1, 1, 9, 'Adidas', 'Yeezy Boost 500', 'yezzy500main.jpg', '70000', 1, 8, '---', '---'),
(2, 1, 11, 'Airjordan', 'Grey', 'greymain.jpg', '65000', 3, 8, '---', '---'),
(5, 1, 12, 'AirJordan', '1s', '1smain.jpg', '44000', 1, 7, '---', '---'),
(6, 1, 5, 'Adidas', 'U_Path Run', 'upathmain.jpg', '40000', 2, 7, '---', '---'),
(7, 1, 5, 'Adidas', 'U_Path Run', 'upathmain.jpg', '40000', 1, 8, '---', '---'),
(8, 2, 1, 'NIKE', 'AIR JORDAN 1', 'nairmain.jpg', '150000', 2, 7, 'Brown', 'JA11435'),
(9, 1, 1, 'NIKE', 'AIR JORDAN 1', 'nairmain.jpg', '150000', 1, 0, 'Brown', 'JA11435'),
(10, 1, 1, 'NIKE', 'AIR JORDAN 1', 'nairmain.jpg', '150000', 1, 6, 'Brown', 'JA11435'),
(11, 1, 2, 'Nike', 'Ease', 'easemain.jpg', '20000', 1, 8, '---', '---');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

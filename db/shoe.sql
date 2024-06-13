-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2023 at 11:38 AM
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
-- Table structure for table `shoe`
--

CREATE TABLE `shoe` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` mediumtext NOT NULL,
  `code` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `size6` int(255) NOT NULL,
  `size7` int(255) NOT NULL,
  `size8` int(255) NOT NULL,
  `size9` int(255) NOT NULL,
  `cartimg` varchar(255) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `img4` varchar(255) NOT NULL,
  `img5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shoe`
--

INSERT INTO `shoe` (`id`, `name`, `brand`, `price`, `description`, `code`, `color`, `size6`, `size7`, `size8`, `size9`, `cartimg`, `img1`, `img2`, `img3`, `img4`, `img5`) VALUES
(1, 'AIR JORDAN 1', 'NIKE', '150000', 'This are the new Air Jordan 1 thunder edition ', 'JA11435', 'Brown', 2, 2, 2, 2, 'nairmain.jpg', 'naimg1.jpg', 'naimg2.jpg', 'naimg3.jpg', 'naimg4.jpg', 'naimg5.jpg'),
(2, 'Ease', 'Nike', '20000', '---', '---', '---', 3, 3, 3, 3, 'easemain.jpg', 'neimg1.jpg', 'neimg2.jpg', 'neimg3.jpg', 'neimg4.jpg', 'neimg5.jpg'),
(3, 'Fly Red', 'Nike', '25000', '---', '---', '---', 3, 3, 3, 3, 'frmain.jpg', 'nfimg1.jpg', 'nfimg2.jpg', 'nfimg3.jpg', 'nfimg4.jpg', 'nfimg5.jpg'),
(4, 'Pandas', 'Nike', '30000', '---', '---', '---', 3, 3, 3, 3, 'pandamain.jpg', 'npimg1.jpg', 'npimg2.jpg', 'npimg3.jpg', 'npimg4.jpg', 'npimg5.jpg'),
(5, 'U_Path Run', 'Adidas', '40000', '---', '---', '---', 3, 3, 3, 3, 'upathmain.jpg', 'adbimg1.jpg', 'adbimg2.jpg', 'adbimg3.jpg', 'adbimg4.jpg', 'adbimg5.jpg'),
(6, 'Forum Low', 'Adidas', '50000', '---', '---', '---', 3, 3, 3, 3, 'forumlmain.jpg', 'adlimg1.jpg', 'adlimg2.jpg', 'adlimg3.jpg', 'adlimg4.jpg', 'adlimg5.jpg'),
(7, 'Yezzy Boost 700 V2', 'Adidas', '60000', '---', '---', '---', 3, 3, 3, 3, 'yezzyv2main.jpg', 'ad7img1.jpg', 'ad7img2.jpg', 'ad7img3.jpg', 'ad7img4.jpg', 'ad7img5.jpg'),
(8, 'Yeezy Boost 700 Wave Runner', 'Adidas', '65000', '---', '---', '---', 3, 3, 3, 3, 'yezzywrmain.jpg', 'y7img1.jpg', 'y7img2.jpg', 'y7img3.jpg', 'y7img4.jpg', 'y7img5.jpg'),
(9, 'Yeezy Boost 500', 'Adidas', '70000', '---', '---', '---', 3, 3, 3, 3, 'yezzy500main.jpg', 'y5img1.jpg', 'y5img2.jpg', 'y5img3.jpg', 'y5img4.jpg', 'y5img5.jpg'),
(10, 'Psg', 'Air Jordan', '55000', '---', '---', '---', 3, 3, 3, 3, 'jpsgmain.jpg', 'arpsimg1.jpg', 'arpsimg2.jpg', 'arpsimg3.jpg', 'arpsimg4.jpg', 'arpsimg5.jpg'),
(11, 'Grey', 'Airjordan', '65000', '---', '---', '---', 3, 3, 3, 3, 'greymain.jpg', 'argimg1.jpg', 'argimg2.jpg', 'argimg3.jpg', 'argimg4.jpg', 'argimg5.jpg'),
(12, '1s', 'AirJordan', '44000', '---', '---', '---', 3, 3, 3, 3, '1smain.jpg', 'ar1img1.jpg', 'ar1img2.jpg', 'ar1img3.jpg', 'ar1img4.jpg', 'ar1img5.jpg'),
(13, '4s', 'Airjordan', '45000', '---', '---', '---', 3, 3, 3, 3, '4smain.jpg', '4simg1.jpg', '4simg2.jpg', '4simg3.jpg', '4simg4.jpg', '4simg5.jpg'),
(14, '11s', 'AirJordan', '65000', '---', '---', '---', 3, 3, 3, 3, '11smain.jpg', '11simg1.jpg', '11simg2.jpg', '11simg3.jpg', '11simg4.jpg', '11simg5.jpg'),
(15, 'Fire', 'Converse', '53000', '---', '---', '---', 3, 3, 3, 3, 'firemain.jpg', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', 'img5.jpg'),
(16, 'High', 'Converse', '---', '---', '---', '---', 3, 3, 3, 3, 'highmain.jpg', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', 'img5.jpg'),
(17, 'Chuck', 'Converse', '---', '---', '---', '---', 3, 3, 3, 3, 'chuckmain.jpg', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', 'img5.jpg'),
(18, 'Ferrari Edition', 'Puma', '---', '---', '---', '---', 3, 3, 3, 3, 'ferrarimain.jpg', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', 'img5.jpg'),
(19, 'O7', 'Puma', '---', '---', '---', '---', 3, 3, 3, 3, 'o7main.jpg', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', 'img5.jpg'),
(20, 'BMW Edition', 'Puma', '---', '---', '---', '---', 3, 3, 3, 3, 'bmwmain.jpg', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', 'img5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shoe`
--
ALTER TABLE `shoe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shoe`
--
ALTER TABLE `shoe`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

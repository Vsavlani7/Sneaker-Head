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
-- Table structure for table `collab`
--

CREATE TABLE `collab` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `code` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `size6` int(255) NOT NULL,
  `size7` int(255) NOT NULL,
  `size8` int(255) NOT NULL,
  `size9` int(255) NOT NULL,
  `bannerimg` varchar(255) NOT NULL,
  `cartimg` varchar(255) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `img4` varchar(255) NOT NULL,
  `img5` varchar(255) NOT NULL,
  `img6` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `collab`
--

INSERT INTO `collab` (`id`, `name`, `brand`, `price`, `description`, `code`, `color`, `size6`, `size7`, `size8`, `size9`, `bannerimg`, `cartimg`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`) VALUES
(1001, 'AirJordan Travis Scott Edition', 'Nike', '30000', '---', '---', '---', 3, 3, 3, 3, 'travis.png', 'timg3.jpg', 'timg1.jpg', 'timg2.jpg', 'travismain.jpg', 'timg4.jpg', 'timg5.jpg', 'timg6.jpg'),
(1002, 'Billie Eilesh Edition', 'Converse', '---', '---', '---', '---', 3, 3, 3, 3, 'billie2.png', 'billiemain.jpg', 'bimg1.jpg', 'bimg2.jpg', 'bimg3.jpg', 'bimg4.jpg', 'bimg5.jpg', 'bimg6.jpg'),
(1003, 'Anime Edition', 'Adidas', '---', '---', '---', '---', 3, 3, 3, 3, 'anime.png', 'animemain.jpg', 'img1.jpg', 'img2.jpg', 'img3.jpg', 'img4.jpg', 'img5.jpg', 'img6.jpg'),
(1004, 'Weeknd Edition', 'Puma', '---', '---', '---', '---', 3, 3, 3, 3, 'weeknd.png', 'weekndmain.jpg', 'wimg1.jpg', 'wimg2.jpg', 'wimg3.jpg', 'wimg4.jpg', 'wimg5.jpg', 'wimg6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collab`
--
ALTER TABLE `collab`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collab`
--
ALTER TABLE `collab`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

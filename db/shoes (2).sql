-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Mar 21, 2023 at 05:49 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
-- Table structure for table `adminregister`
--

CREATE TABLE `adminregister` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminregister`
--

INSERT INTO `adminregister` (`id`, `fname`, `lname`, `city`, `phone`, `email`, `password`) VALUES
(1, 'Vishal', 'Savlani', 'Surat', '9586666118', 'visshalsavlani44@gmail.com', '$2y$10$rMYDMMJ3pGUdZXThHEDwQ.BXlcwDL2hRYmzyyw/343WOrsEEg6m5y');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `prod_id`, `brand`, `name`, `image`, `price`, `quantity`, `size`, `color`, `code`) VALUES
(36, 32, 1001, 'Nike', 'Nike X Travis Scott ', 'travismain1.png', '30000', 1, 8, '---', '---'),
(48, 36, 1002, 'Converse', 'Converse X Billie Eilesh', 'billiemain11.jpg', '80000', 1, 6, 'Blue', 'CB1220'),
(126, 50, 8, 'Puma', 'Bulbasaur Edition', 'bp4.jpg', '3500', 1, 8, 'Green', 'PB4560'),
(128, 43, 8, 'Puma', 'Bulbasaur Edition', 'bp4.jpg', '3500', 1, 6, 'Green', 'PB4560');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `collab`
--

INSERT INTO `collab` (`id`, `name`, `brand`, `price`, `description`, `code`, `color`, `size6`, `size7`, `size8`, `size9`, `bannerimg`, `cartimg`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`) VALUES
(1, 'Nike X Travis Scott ', 'Nike', '120000', 'This are the new Air Jordan Travis Scott edition to blow your mind. ', 'AJT140', 'Brown', 3, 3, 3, 3, 'travis.png', 'timg3.jpg', 'timg1.jpg', 'timg2.jpg', 'travismain1.png', 'timg4.jpg', 'timg5.jpg', 'timg6.jpg'),
(2, 'Converse X Billie Eilesh', 'Converse', '80000', 'This are the new limited edition converse blue star inspired by the Billie Eilish', 'CB1220', 'Blue', 3, 3, 3, 3, 'billie2.png', 'billie333.jpg', 'bimg2.jpg', 'bimg1.jpg', 'billiemain11.jpg', 'billie444.jpg', 'billie555.jpg', 'billie66.jpg'),
(3, 'Adidas X Anime ', 'Adidas', '90000', 'Inspired by the emerging anime culture Adidas Dragon Ball Z anime edition.', 'AD1450', 'Orange Blue', 3, 3, 3, 3, 'dbz.png', 'dimg3.jpg', 'dimg1.jpg', 'dimg22.jpg', 'dmain.jpg', 'dimg4.jpg', 'dimg5.jpg', 'goku.jpg\r\n'),
(4, 'Puma X The Weeknd ', 'Puma', '110000', 'This is the Puma sneaky sneakers inspired by the legend The Weeknd.', 'PW0000', 'Black', 3, 3, 3, 3, 'weeknd.png', 'wimg3.jpg', 'wimg111.jpg', 'wimg2.jpg', 'weekndmain11.jpg', 'wimg4.jpg', 'wimg555.jpg', 'weeknd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupon_codes`
--

CREATE TABLE `coupon_codes` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `discount_percentage` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coupon_codes`
--

INSERT INTO `coupon_codes` (`id`, `code`, `discount_percentage`) VALUES
(1, 'Sneakers20', '0.20');

-- --------------------------------------------------------

--
-- Table structure for table `coupon_usage`
--

CREATE TABLE `coupon_usage` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coupon_usage`
--

INSERT INTO `coupon_usage` (`id`, `code`, `user_id`) VALUES
(8, 'Sneakers20', 43),
(9, 'Sneakers20', 53),
(10, 'Sneakers20', 55);

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
  `c_email` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `user_id`, `fname`, `lname`, `country`, `street`, `apart`, `city`, `state`, `postal`, `email`, `c_number`, `c_email`, `date`) VALUES
(1, 1, 43, 'Vishal', 'Savlani', '', 'Ramnagar Rander Road', '301 J1', 'Surat', 'Gujarat', '395009', '', '9586666118', 'visshalsavlani44@gmail.com', '2023-03-15 09:52:32'),
(2, 2, 43, 'Vishal', 'Savlani', '', 'Ramnagar Rander Road', '301 J1', 'Surat', 'Gujarat', '395009', '', '9586666118', 'visshalsavlani44@gmail.com', '2023-03-15 10:14:13'),
(3, 3, 43, 'Vishal', 'Savlani', '', 'Ramnagar Rander Road', '301 J1', 'Surat', 'Gujarat', '395009', '', '9586666118', 'visshalsavlani44@gmail.com', '2023-03-15 10:14:25'),
(4, 4, 43, 'Vishal', 'Savlani', '', 'Ramnagar Rander Road', '301 J1', 'Surat', 'Gujarat', '395009', '', '9586666118', 'visshalsavlani44@gmail.com', '2023-03-15 10:16:16'),
(5, 5, 43, 'Vishal', 'Savlani', '', 'Ramnagar Rander Road', '301 J1', 'Surat', 'Gujarat', '395009', '', '9586666118', 'visshalsavlani44@gmail.com', '2023-03-15 10:43:13'),
(6, 6, 43, 'Vishal', 'Savlani', '', 'Ramnagar Rander Road', '301 J1', 'Surat', 'Gujarat', '395009', '', '9586666118', 'visshalsavlani44@gmail.com', '2023-03-15 14:18:52'),
(7, 7, 43, 'Vishal', 'Savlani', '', 'Ramnagar Rander Road', '301 J1', 'Surat', 'Gujarat', '395009', '', '9586666118', 'visshalsavlani44@gmail.com', '2023-03-16 03:22:03'),
(8, 8, 43, 'Vishal', 'Savlani', '', 'Ramnagar Rander Road', '301 J1', 'Surat', 'Gujarat', '395009', '', '9586666118', 'visshalsavlani44@gmail.com', '2023-03-16 04:37:26'),
(9, 9, 43, 'Vishal', 'Savlani', '', 'Ramnagar Rander Road', '301 J1', 'Surat', 'Gujarat', '395009', '', '9586666118', 'visshalsavlani44@gmail.com', '2023-03-16 14:19:34'),
(10, 10, 43, 'Vishal', 'Savlani', '', 'Ramnagar Rander Road', '301 J1', 'Surat', 'Gujarat', '395009', '', '9586666118', 'visshalsavlani44@gmail.com', '2023-03-16 14:24:43'),
(11, 11, 53, 'Jash', 'Patel', '', 'Ramnagar Rander Road', '301 J2', 'Surat', 'Gujarat', '395009', '', '7990689909', 'visshalsavlani44@gmail.com', '2023-03-18 11:32:01'),
(12, 12, 55, 'Aman', 'Singh', '', 'Ramnagar Rander Road', '301 J1', 'Surat', 'Gujarat', '395009', '', '9586666119', 'visshalsavlani44@gmail.com', '2023-03-19 09:39:09');

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`id`, `order_id`, `user_id`, `prod_id`, `size`, `quantity`, `price`) VALUES
(1, 1, 43, 9, 8, 1, '70000'),
(2, 2, 43, 1001, 9, 1, '24000'),
(5, 5, 43, 7, 8, 1, '60000'),
(6, 6, 43, 1, 7, 1, '150000'),
(7, 7, 43, 1, 8, 1, '30000'),
(8, 8, 43, 2, 7, 1, '224000'),
(9, 8, 43, 3, 8, 1, '224000'),
(10, 8, 43, 4, 8, 1, '224000'),
(11, 9, 43, 5, 6, 1, '8000'),
(12, 9, 43, 6, 8, 1, '8000'),
(13, 10, 43, 8, 7, 1, '3500'),
(14, 11, 53, 6, 6, 1, '2400'),
(15, 12, 55, 5, 8, 1, '4000');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `number` varchar(255) NOT NULL,
  `expirymonth` varchar(255) NOT NULL,
  `expiryyear` int(11) NOT NULL,
  `cvv` int(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `user_id`, `number`, `expirymonth`, `expiryyear`, `cvv`, `name`) VALUES
(1, 43, '1200120012001200', '06', 2026, 160, 'vishal'),
(2, 43, '-', '-', 0, 0, '-'),
(3, 43, '-', '-', 0, 0, '-'),
(4, 43, '-', '-', 0, 0, '-'),
(5, 43, '-', '-', 0, 0, '-'),
(6, 43, '-', '-', 0, 0, '-'),
(7, 43, '-', '-', 0, 0, '-'),
(8, 43, '-', '-', 0, 0, '-'),
(9, 43, '-', '-', 0, 0, '-'),
(10, 43, '-', '-', 0, 0, '-'),
(11, 53, '-', '-', 0, 0, '-'),
(12, 55, '-', '-', 0, 0, '-');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `otp` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `lname`, `city`, `phone`, `email`, `password`, `otp`) VALUES
(3, 'Dixita', 'Rana', 'Surat', '9632587410', 'dix123@gmail.com', '$2y$10$aLc8pXbdHRuSKo84Ac6ixOqGojWjxxh9LczQStQlrnSmI1y4WM2ni', ''),
(43, 'Vishal', 'Savlani', 'Surat', '9586666118', 'visshalsavlani44@gmail.com', '$2y$10$AL9ss9ArR0mxm2v3cRQuqeE61vS.7gr5IXc0oybVExMtrceL15TE.', '150991'),
(50, 'Aman', 'Singh', 'Surat', '9632587410', 'savlanigaurav5@gmail.com', '$2y$10$zU7X6gE6b7j5ZhRuWs2qIuNB9QhJG4bbSppCEHaFDEkLlTQrx8rsa', '973959'),
(54, 'Aman', 'Singh', 'Surat', '9586666118', 'gauravrajumarsavlani@gmail.com', '$2y$10$sQWfypeR3Ulyi15J5LCmNe.KN9JQPf04fn0I80CVvntRs/bc8eHDO', '204634');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `review` mediumtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `prod_id`, `user_id`, `review`, `date`) VALUES
(2, 1, 1, 'Nicee shoes nice shoes', '2023-03-11 11:06:37'),
(7, 6, 53, 'I loved it', '2023-03-18 11:33:06'),
(8, 5, 55, 'nicee', '2023-03-19 09:40:18');

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
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `img4` varchar(255) NOT NULL,
  `img5` varchar(255) NOT NULL,
  `img6` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shoe`
--

INSERT INTO `shoe` (`id`, `name`, `brand`, `price`, `description`, `code`, `color`, `size6`, `size7`, `size8`, `size9`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`) VALUES
(1, 'Nike X Travis Scott', 'Nike', '120000', 'This are the new Air Jordan Travis Scott edition to blow your mind. ', 'AJT140', 'Brown', 3, 3, 2, 0, 'timg3.jpg', 'timg1.jpg', 'timg2.jpg', 'travismain1.png', 'timg4.jpg', 'timg5.jpg'),
(2, 'Converse X Billie Eilish', 'Converse', '80000', 'This are the new limited edition converse blue stars inspired by the bad girl Billie Eilish', 'CBE560', 'Blue', 6, 5, 6, 6, 'billie333.jpg', 'bimg2.jpg', 'bimg1.jpg', 'billiemain11.jpg', 'billie444.jpg', 'billie555.jpg'),
(3, 'Adidas X Goku', 'Adidas', '90000', 'Inspired by the emerging anime culture in the World, here are the new Adidas Goku Sneakers.', 'AAG902', 'Orange', 6, 6, 5, 6, 'dimg3.jpg', 'dimg1.jpg', 'dimg22.jpg', 'dmain.jpg', 'dimg4.jpg', 'dimg5.jpg'),
(4, 'Puma X The Weeknd', 'Puma', '110000', 'This are the brand new Puma 140ease inspired by the Starboy THE WEEKND.', 'PXO450', 'Black', 6, 6, 5, 6, 'wimg3.jpg', 'wimg111.jpg', 'wimg2.jpg', 'weekndmain11.jpg', 'wimg4.jpg', 'wimg555.jpg'),
(5, 'Pikachu Edition', 'Puma', '5000', 'This are special pikachu shoes for the pokemon lovers. ', 'AP9510', 'Yellow', 0, 0, 0, 0, 'adidaspikamain.jpg', 'adidaspikaimg1.jpg', 'adidaspikaimg2.jpg', 'adidaspikaimg333.jpg', 'adidaspikaimg44.jpg', 'adidaspikaimg55.jpg'),
(6, 'Squirtle Edition', 'Puma', '3000', 'These are new pokemon edition puma shoes.', 'PS6320', 'Blue', 3, 4, 3, 4, 'sp1.jpg', 'sp2.jpg', 'sp3.jpg', 'sp4.jpg', 'sp5.jpg', 'sp6.jpg'),
(7, 'Charmendar Edition', 'Puma', '4000', 'These are new pokemon edition puma shoes.', 'PC9903', 'Orange', 4, 4, 4, 4, 'cp1.jpg', 'cp2.jpg', 'cp3.jpg', 'cp4.jpg', 'cp5.jpg', 'cp6.jpg'),
(8, 'Bulbasaur Edition', 'Puma', '3500', 'These are new pokemon edition puma shoes.', 'PB4560', 'Green', 4, 3, 4, 4, 'bp1.jpg', 'bp2.jpg', 'bp3.jpg', 'bp4.jpg', 'bp5.jpg', 'bp6.jpg'),
(9, '1s retro', 'Air Jordan', '14000', 'This are the OG Jordan 1s retro.', 'AR1560', 'Red', 0, 0, 2, 0, '1srmain.jpg', '1srimg1.jpg', '1srimg2.jpg', '1srimg33.jpg', '1srimg44.jpg', '1srimg55.jpg'),
(10, '11s', 'Air Jordan', '65000', '---', '---', '---', 3, 3, 3, 3, '11simg3.jpg', '11simg1.jpg', '11simg2.jpg', '11smain.png', '11simg4.jpg', '11simg5.jpg'),
(11, 'Grey', 'Air Jordan', '65000', '---', '---', '---', 3, 3, 1, 3, 'argimg3.jpg', 'argimg1.jpg', 'argimg2.jpg', 'greymain.png', 'argimg4.jpg', 'argimg5.jpg'),
(12, 'Fly Red', 'Nike', '25000', '---', '---', '---', 3, 3, 3, 3, 'nfimg3.jpg', 'nfimg1.jpg', 'nfimg2.jpg', 'frmain.png', 'nfimg4.jpg', 'nfimg5.jpg'),
(13, '4s', 'Airjordan', '45000', '---', '---', '---', 3, 3, 3, 3, '4simg3.jpg', '4simg1.jpg', '4simg2.jpg', '4smain.png', '4simg4.jpg', '4simg5.jpg'),
(14, 'Black Phantom', 'Nike', '4000', 'This are the party ready nike black phantom green edition shoes.', 'NP4962', 'Black Green', 1, 0, 2, 0, 'neon1.jpg', 'neon2.jpg', 'neon3.jpg', 'neon4.png', 'neon5.jpg', 'neon6.jpg'),
(15, 'AIR Dua', 'Nike', '150000', 'This are the new Air Jordan 1 thunder edition ', 'JA11435', 'Brown', 0, 1, 1, 2, 'naimg3.jpg', 'naimg1.jpg', 'naimg2.jpg', 'nairmain.png', 'naimg4.jpg', 'naimg5.jpg'),
(16, 'Ease', 'Nike', '20000', '---', '---', '---', 3, 3, 1, 3, 'neimg3.jpg', 'neimg1.jpg', 'neimg2.jpg', 'easemain.png', 'neimg4.jpg', 'neimg5.jpg'),
(17, 'Chuck', 'Converse', '6000', '---', '---', '---', 3, 3, 3, 3, 'chuckimg3.jpg', 'chuckimg1.jpg', 'chuckimg2.jpg', 'chuckmain.png', 'chuckimg4.jpg', 'chuckimg5.jpg'),
(18, 'Ferrari Edition', 'Puma', '18000', '---', '---', '---', 3, 3, 3, 3, 'ferrariimg33.jpg', 'ferrariimg1.jpg', 'ferrariimg2.jpg', 'ferrarimain1.jpg', 'ferrariimg4.jpg', 'ferrariimg55.jpg'),
(19, 'Chuck Blue', 'Converse', '2500', 'Say hello to the converse chuck blueeeee', 'CB2593', 'Blue', 0, 1, 0, 0, 'chuckb1.jpg', 'chuckb2.jpg', 'chuckb3.jpg', 'chuckb4.jpg', 'chuckb5.jpg', 'chuckb6.jpg'),
(20, 'Fire', 'Converse', '53000', '---', '---', '---', 3, 3, 2, 3, 'fireimg3.jpg', 'fireimg1.jpg', 'fireimg2.jpg', 'firemain.png', 'fireimg4.jpg', 'fireimg5.jpg'),
(21, 'BMW Edition', 'Puma', '7000', '---', '---', '---', 3, 3, 3, 3, 'pbmwimg3.jpg', 'pbmwimg1.jpg', 'pbmwimg2.jpg', 'bmwmain.png', 'pbmwimg4.jpg', 'pbmwimg5.jpg'),
(22, 'Pandas', 'Nike', '30000', '---', '---', '---', 2, 3, 3, 3, 'npimg3.jpg', 'npimg1.jpg', 'npimg2.jpg', 'pandamain.png', 'npimg4.jpg', 'npimg5.jpg'),
(23, 'Yezzy Boost 700 V2', 'Adidas', '60000', '---', '---', '---', 3, 2, 1, 3, 'ad7img3.jpg', 'ad7img1.jpg', 'ad7img4.jpg', 'yezzyv2main.png', 'ad7img2.jpg', 'ad7img5.jpg'),
(24, 'Yeezy Boost 700 Wave Runner', 'Adidas', '65000', '---', '---', '---', 3, 2, 0, 2, 'y7img3.jpg', 'y7img1.jpg', 'y7img2.jpg', 'yezzywrmain.png', 'y7img4.jpg', 'y7img5.jpg'),
(25, 'T Lows', 'Nike', '6000', 'Nike Tlows giving the jordan vibe in low ankle', 'NT1203', 'White Blue', 1, 0, 1, 1, 'niketlows1.jpg', 'niketlows2.jpg', 'niketlows3333.jpg', 'niketlows44.jpg', 'niketlows55.jpg', 'niketlows66.jpg'),
(26, 'High Champ', 'Puma', '1000', 'The high puma sky why shoesss', 'PS1520', 'White', 1, 0, 0, 0, 'pumahighw11.jpg', 'pumahighw2.jpg', 'pumahighw3.jpg', 'pumahighw44.jpg', 'pumahighw6.jpg', 'pumahighw5.jpg'),
(27, 'Forum Low', 'Adidas', '50000', '---', '---', '---', 3, 3, 2, 3, 'adlimg33.jpg', 'adlimg1.jpg', 'adlimg2.jpg', 'forumlmain.png', 'adlimg4.jpg', 'adlimg5.jpg'),
(28, 'Coffee Lows', 'Nike', '9000', 'This are nike lows giving the coffee vibes', 'NC7456', 'Coffee Brown', 2, 0, 0, 0, 'nikecomain.jpg', 'nikecoimg1.jpg', 'nikecoimg2.jpg', 'nikecoimg33.jpg', 'nikecoimg4.jpg', 'nikecoimg5.jpg'),
(29, '1s Ice Blue', 'Air Jordan', '12000', 'The cool ice blue jordan 1s.', 'JI8520', 'Blue', 1, 0, 0, 2, '1sicemain.jpg', '1siceimg1.jpg', '1siceimg2.jpg', '1siceimg33.jpg', '1siceimg4.jpg', '1siceimg5.jpg'),
(30, 'O7', 'Puma', '1000', '---', '---', '---', 3, 3, 3, 3, '07img3.jpg', '07img1.jpg', '07img2.jpg', 'o7main.jpg', '07img4.jpg', '07img5.jpg'),
(31, 'U_Path Run', 'Adidas', '40000', '---', '---', '---', 3, 3, 3, 3, 'adbimg3.jpg', 'adbimg1.jpg', 'adbimg2.jpg', 'adbimg55.jpg\r\n', 'adbimg4.jpg', 'adbimg55.jpg'),
(32, 'Yeezy Boost 500', 'Adidas', '70000', '---', '---', '---', 3, 3, 0, 3, 'y5img3.jpg', 'y5img1.jpg', 'y5img2.jpg', 'yezzy500main.png', 'y5img4.jpg', 'y5img5.jpg'),
(33, 'Psg', 'Air Jordan', '55000', '---', '---', '---', 3, 3, 2, 3, 'arpsimg33.jpg', 'arpsimg1.jpg', 'arpsimg2.jpg', 'jpsgmain.png', 'arpsimg4.jpg', 'arpsimg5.jpg'),
(34, '1s', 'Air Jordan', '44000', '---', '---', '---', 3, 3, 3, 2, 'ar1img3.jpg', 'ar1img1.jpg', 'ar1img2.jpg', '1smain1.png', 'ar1img4.jpg', 'ar1img5.jpg'),
(35, 'High', 'Converse', '3000', '---', '---', '---', 3, 3, 3, 3, 'highimg3.jpg', 'highimg1.jpg', 'highimg2.jpg', 'highmain11.png', 'highimg4.jpg', 'highimg5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `prod_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `prod_id`) VALUES
(1, 1, 1),
(2, 1, 3),
(4, 1, 12),
(11, 26, 11),
(23, 49, 5),
(24, 43, 1),
(25, 43, 8),
(26, 53, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminregister`
--
ALTER TABLE `adminregister`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collab`
--
ALTER TABLE `collab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon_codes`
--
ALTER TABLE `coupon_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon_usage`
--
ALTER TABLE `coupon_usage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoe`
--
ALTER TABLE `shoe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminregister`
--
ALTER TABLE `adminregister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `collab`
--
ALTER TABLE `collab`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `coupon_codes`
--
ALTER TABLE `coupon_codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coupon_usage`
--
ALTER TABLE `coupon_usage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `shoe`
--
ALTER TABLE `shoe`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

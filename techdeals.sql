-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 03:28 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techdeals`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `comment` text NOT NULL,
  `productid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `name`, `comment`, `productid`) VALUES
(33, 'Rhythm', 'Good Sound quality and bass!!', 46),
(34, 'Bhumika', 'Smooth and Clean phone. Loved it!!...', 36),
(35, 'Bhumika', 'Good but battery drains fastt', 47),
(36, 'Bhumika', 'Still nice!', 47),
(39, 'Rhythm', 'hehehe', 46);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `type` varchar(15) NOT NULL,
  `description` text NOT NULL,
  `brand_name` varchar(15) NOT NULL,
  `price` int(7) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `picture`, `name`, `type`, `description`, `brand_name`, `price`, `userid`) VALUES
(36, '432150680_myproduct_.jpg', 'iPhone 13', 'mobile', 'kbib', 'apple', 999, 4),
(46, '518426006_myproduct_.jpg', 'High Bass Earphone', 'earphone', 'Bahut tej horaha haii', 'Sony', 99, 5),
(47, '571057270_myproduct_.jpg', 'Legion 5', 'laptop', 'kjbjob', 'Lenovo', 9999, 4);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `username` varchar(12) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(30) NOT NULL,
  `zip` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `first_name`, `last_name`, `email`, `password`, `username`, `city`, `state`, `zip`) VALUES
(4, 'Rhythm', 'Sapkota', 'roshansa89@gmail.com', 'b91caba63c053f299fce69f6c903d515', 'rhythm', 'kathmandu', 'kathmandu', '44600'),
(5, 'Bhumika', 'Adhikari', 'ad.bhumika@gmail.com', '149d51d31f46023ba4aeb9532ce9975c', 'bhumika69', 'kathmandu', 'kathmandu', '44600'),
(8, 'sanam', 'maharjan', 'sanambennylalchaurasia@gmail.c', '9215658dc8d88798b7c7d1f0f8df4d64', 'sanam', 'kathmandu', 'kathmandu', '44600'),
(9, 'roshan', 'sapkota', 'roshansapkota@gmail.com', 'd6dfb33a2052663df81c35e5496b3b1b', 'roshan', 'kathmandu', 'kathmandu', '44600');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

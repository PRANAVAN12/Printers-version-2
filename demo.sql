-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2020 at 03:56 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admi`
--

CREATE TABLE `admi` (
  `id` int(11) NOT NULL,
  `UserName` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admi`
--

INSERT INTO `admi` (`id`, `UserName`, `password`) VALUES
(1, 'Rana', '123');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `id` int(11) NOT NULL,
  `UserName` varchar(60) NOT NULL,
  `mobile` int(11) NOT NULL,
  `Address` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id`, `UserName`, `mobile`, `Address`) VALUES
(1, 'Pranavan', 779563651, 'Navaral Street, Mathgal'),
(2, 'Pranavan', 779563651, 'Navaral Street, Mathgal'),
(3, 'Pranav', 779563654, 'nelliyadi Point petro'),
(4, 'Rana', 779563651, 'Navaral Street, Mathgal'),
(7, 'soqevewug', 3, 'Dolorem corporis exc'),
(8, 'box', 49, 'Ut hic voluptatibus '),
(9, 'Mirsha', 212221212, 'Elumendaa kandupidi'),
(10, 'tesafi', 12, 'Voluptas voluptas es');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `categary` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` varchar(1500) NOT NULL,
  `image` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `categary`, `quantity`, `user_id`, `description`, `image`) VALUES
(1, 'Banner Printing', 44, 3, 'This is for my girlfriend-no girlfriend', ''),
(2, 'Banner Printing', 44, 2, 'This is for my girlfriend', '2104541275-design-word-concept_23-2147844787.jpg'),
(3, 'Sticker Printing', 44, 2, 'Hello', ''),
(4, 'WeddingCard Printing', 500, 2, 'For wedding', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(600) NOT NULL,
  `mobile` int(11) NOT NULL,
  `password` varchar(60) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT 'PRIMARY KEY',
  `UserName` varchar(100) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Mobile` int(11) NOT NULL,
  `Password` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `UserName`, `Email`, `Mobile`, `Password`) VALUES
(2, 'Pranavan', 'npranavan@gmail.com', 789456, '1234'),
(3, 'hari', 'hai@gmail.com', 778291684, 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'test', 'test@gmail.com', 778291684, '827ccb0eea8a706c4c34a16891f84e7b'),
(6, 'Pranavan', 'tuni@mailinator.com', 779563651, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admi`
--
ALTER TABLE `admi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admi`
--
ALTER TABLE `admi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'PRIMARY KEY', AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

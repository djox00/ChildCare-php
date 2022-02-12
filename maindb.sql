-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2022 at 04:28 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` text COLLATE utf8mb4_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_croatian_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `user_id`, `username`) VALUES
(2, 88, 'djox00');

-- --------------------------------------------------------

--
-- Table structure for table `kids`
--

CREATE TABLE `kids` (
  `id` int(11) NOT NULL,
  `ime` text COLLATE utf8mb4_croatian_ci NOT NULL,
  `prezime` text COLLATE utf8mb4_croatian_ci NOT NULL,
  `godine` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_croatian_ci;

--
-- Dumping data for table `kids`
--

INSERT INTO `kids` (`id`, `ime`, `prezime`, `godine`) VALUES
(5, 'Adi', 'Petrović', 7),
(6, 'Amer', 'Osmanović', 11),
(7, 'Mirnes', 'Hodžić', 6),
(8, 'Dario', 'Stevanović', 16),
(9, 'Asja', 'Rahmanović', 14),
(10, 'Sanja', 'Goletić', 15);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) COLLATE utf8mb4_croatian_ci NOT NULL,
  `last_name` varchar(30) COLLATE utf8mb4_croatian_ci NOT NULL,
  `user_name` varchar(30) COLLATE utf8mb4_croatian_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_croatian_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_croatian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `user_name`, `password`, `email`) VALUES
(88, 'Djordje', 'Djuric', 'djox00', '$2y$10$0KG2MTSsnKajObXR7YMxTurEKJ.d0OIIqW.y8Ivd8T8immbAtu0w2', 'djordjedjuric05@gmail.com'),
(89, 'Srdjan', 'Djuric', 'srx', '$2y$10$Mrb3eKjtk9hc75FssDscau7.uKA8aQhxxNUD2REaM.8H7ZjKFOeQ.', 'srx@gmail.com'),
(90, 'Amar', 'Alic', 'amar', '$2y$10$bqKRIem0d3RVZZDS1TLdLe1FuIPed21Hk8TiNBTg/GW1zyX0nslMK', 'dsad@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `wishes`
--

CREATE TABLE `wishes` (
  `id` int(30) NOT NULL,
  `kids_id` int(11) NOT NULL,
  `kids_ime` text COLLATE utf8mb4_croatian_ci NOT NULL,
  `wish` text COLLATE utf8mb4_croatian_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_croatian_ci;

--
-- Dumping data for table `wishes`
--

INSERT INTO `wishes` (`id`, `kids_id`, `kids_ime`, `wish`, `user_id`) VALUES
(70, 7, 'Mirnes', 'sad', NULL),
(71, 9, 'Asja', 'dsada', NULL),
(72, 7, 'Mirnes', 'sdad', NULL),
(73, 6, 'Amer', 'sadasd', NULL),
(74, 7, 'Mirnes', 'sdadsa', NULL),
(75, 7, 'Mirnes', 'sdadsa', NULL),
(76, 7, 'Mirnes', 'sdadsa', NULL),
(77, 7, 'Mirnes', 'sdadsa', NULL),
(78, 7, 'Mirnes', 'sdadsa', NULL),
(79, 7, 'Mirnes', 'sdadsa', NULL),
(80, 7, 'Mirnes', 'sdadsa', NULL),
(81, 7, 'Mirnes', 'sdadsa', NULL),
(82, 7, 'Mirnes', 'sdadsa', NULL),
(83, 7, 'Mirnes', 'sdadsa', NULL),
(84, 7, 'Mirnes', 'sdadsa', NULL),
(85, 7, 'Mirnes', 'sdadsa', NULL),
(86, 7, 'Mirnes', 'sdadsa', NULL),
(87, 7, 'Mirnes', 'sdadsa', NULL),
(88, 7, 'Mirnes', 'sdadsa', NULL),
(89, 7, 'Mirnes', 'sdadsa', NULL),
(90, 7, 'Mirnes', 'sdadsa', NULL),
(91, 7, 'Mirnes', 'sdadsa', NULL),
(92, 7, 'Mirnes', 'sdadsa', NULL),
(93, 7, 'Mirnes', 'sdadsa', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `kids`
--
ALTER TABLE `kids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishes`
--
ALTER TABLE `wishes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kids_id` (`kids_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kids`
--
ALTER TABLE `kids`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `wishes`
--
ALTER TABLE `wishes`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `wishes`
--
ALTER TABLE `wishes`
  ADD CONSTRAINT `kids_id` FOREIGN KEY (`kids_id`) REFERENCES `kids` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

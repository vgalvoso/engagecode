-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2021 at 04:01 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codebasedb`
--
CREATE DATABASE IF NOT EXISTS `codebasedb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `codebasedb`;

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `Id` bigint(20) UNSIGNED NOT NULL,
  `RequestorId` bigint(20) UNSIGNED NOT NULL,
  `ApproverId` bigint(20) UNSIGNED NOT NULL,
  `Request` varchar(250) NOT NULL,
  `DateRequested` date NOT NULL,
  `DateModified` date NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `userpassword` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `userpassword`, `firstname`, `middlename`, `lastname`, `role`) VALUES
(1, 'vgalvoso', 'password', 'Van Hudson', '', 'Galvoso', 1),
(2, 'ereh', 'password', 'Eren', 'D', 'Jaeger', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

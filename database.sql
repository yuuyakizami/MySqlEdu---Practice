-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 07:21 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `name` varchar(25) DEFAULT NULL,
  `owner` varchar(50) DEFAULT NULL,
  `species` varchar(40) DEFAULT NULL,
  `sex` char(1) DEFAULT NULL,
  `birth` date DEFAULT NULL,
  `death` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usermessage`
--

CREATE TABLE `usermessage` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usermessage`
--

INSERT INTO `usermessage` (`id`, `name`, `email`, `message`, `reg_date`) VALUES
(58, 'Zairo Angelo Tirador', 'zairoangelo@gmail.com', 'Hi Sweetheart', '2022-12-06 13:09:26'),
(59, 'Zairo Angelo Tirador', 'zairoangelo@gmail.com', 'asdasdsad', '2022-12-08 06:19:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` mediumint(6) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(60) NOT NULL,
  `registration_date` datetime NOT NULL,
  `user_level` tinyint(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `registration_date`, `user_level`) VALUES
(1, 'Catriona', 'Red', 'catrionared@gmail.com', '$2y$10$UClu5204Km2elv3y9NdxUOp9hy3O/uhLWpJmM71PaEJdvhs02zPGC', '2022-11-13 21:13:09', 1),
(5, 'Zairo Angelo', 'Tirador', 'zairoangelo@gmail.com', '$2y$10$eu6tFNpYeUQQA3p7MPUl3./sOCW/W6TEtIbz1o9QTB7zUyEhR7aTa', '2022-11-15 23:32:16', 1),
(6, 'Zairo Angelo', 'Tirador', 'zairoangelo@gmail.com', '$2y$10$zPXZCwyN9GvVCp0.V9YFSeIdCpQAZ2CeAuCZ/RFElmFmUcuUy7Ci2', '2022-11-16 21:35:44', 0),
(7, 'Roney ', 'batersal', 'rodneybatersal@gmail.com', '$2y$10$zjPq.LkT6nPuBGNCWa44ue1uLxIkTOgmYiN0x7r.jd36iypm49LAa', '2022-11-20 17:58:55', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usermessage`
--
ALTER TABLE `usermessage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usermessage`
--
ALTER TABLE `usermessage`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` mediumint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

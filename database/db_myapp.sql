-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2023 at 11:26 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_myapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `date_log` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_created` datetime NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_pass` text NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `user_role` int(11) NOT NULL,
  `department` varchar(255) NOT NULL,
  `id_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `date_log`, `date_created`, `username`, `user_pass`, `user_email`, `f_name`, `l_name`, `user_role`, `department`, `id_number`) VALUES
(1, '2023-11-28 10:18:20', '2023-10-26 18:38:24', 'neru214', '698d51a19d8a121ce581499d7b701668', 'neru@yahoo.com', 'neru', 'tokisaki', 1, '', '4444'),
(12, '2023-11-09 03:52:51', '0000-00-00 00:00:00', 'smith111', '423e1e08f8e176e45906020dc2a87a86', 'smith@smith', 'smith', 'monoko', 0, '', '111'),
(24, '2023-11-15 09:17:51', '2023-11-15 17:17:51', 'ron123', '436d6463f08c99c14c0ee50dceffe055', 'ron@ron', 'ron', 'tokisaki', 2, '', '12333'),
(25, '2023-11-15 15:57:38', '2023-11-15 23:57:38', 'neko123', 'fe2de73cdd650fe5ddedf71e3be6c7a9', 'neko@neko', 'neko', 'nekonii', 2, '', '4566'),
(26, '2023-11-15 15:59:03', '2023-11-15 23:59:03', 'chi123', '6ccb6d1ccccf5037ffa7dfd5f130e183', 'chi@chi', 'chi', 'chimaru', 2, '', '345678'),
(27, '2023-11-15 15:59:38', '2023-11-15 23:59:38', 'maru123', '45113954759d92fc90f2edc7078cc02b', 'maru@maru', 'maru', 'marutu', 2, '', '8933'),
(36, '2023-11-28 09:16:06', '2023-11-16 09:18:09', 'ghjkl', '00860bc0b271ca5e255aa0c9e43f5e98', 'ghj@hjk', 'asasa', 'ghj', 2, '', '111s'),
(37, '2023-11-28 07:26:30', '2023-11-28 15:26:30', 'ron456', 'aa3fcbcf0c155a6ebe4391c1833c9bae', 'ron123@ron', 'ron', 'mingming', 2, '', '45227'),
(38, '2023-11-28 10:20:14', '2023-11-28 18:19:31', 'asuna123', '81dc9bdb52d04dc20036dbd8313ed055', 'asuna@yahoo.com', 'Asunaa', 'Tokisakii', 2, '', '22344000');

--
-- Indexes for dumped tables
--

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

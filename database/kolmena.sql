-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 18, 2024 at 12:31 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kolmena`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `product_id` int(11) NOT NULL,
  `productName` varchar(200) NOT NULL,
  `category` varchar(100) NOT NULL,
  `power` varchar(100) NOT NULL,
  `price` varchar(50) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `images` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`product_id`, `productName`, `category`, `power`, `price`, `description`, `images`, `created_at`) VALUES
(1, 'Shower Set 3', 'Computers', 'stes', '300', 'its help for gooss', '[\"661fcb865129d.jpg\",\"661fcb86512f0.jpg\",\"661fcb8651324.jpg\",\"661fcb8651350.jpg\"]', '2024-04-17 13:15:50'),
(2, 'Water Mixer', 'Mixer', 'stes', '300', 'qwerty', '[\"662026f7eaf4d.jpg\",\"662026f7eafc7.jpg\"]', '2024-04-17 19:45:59'),
(3, 'shower set 1', 'water', 'pwd', '300', 'water', '[\"66203da84d160.jpg\",\"66203da84d1d2.jpg\",\"66203da84d20b.jpg\",\"66203da84d238.jpg\"]', '2024-04-17 21:22:48'),
(4, 'water pump pun1100', 'pump', 'pwd', '300', 'qwerty', '[\"66203e159778d.jpg\",\"66203e1597805.jpg\",\"66203e1597840.jpg\"]', '2024-04-17 21:24:37');

-- --------------------------------------------------------

--
-- Table structure for table `post_media`
--

CREATE TABLE `post_media` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `fileName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullName` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `token` varchar(100) DEFAULT NULL,
  `token_expire` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `varified` tinyint(4) NOT NULL DEFAULT 0,
  `deleted` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullName`, `email`, `password`, `phone`, `token`, `token_expire`, `created_at`, `varified`, `deleted`) VALUES
(1, 'Jesus Sante', 'santisoftpro@gmail.com', '$2y$10$420EHBU6.4KKqdKw4f/gbe1tmP2zKzvgGMwIKYic0lDtyqqkvzrv2', NULL, NULL, '2024-04-16 15:20:36', '2024-04-16 15:20:36', 0, 1),
(2, 'Jesus Sante', 'lamaamoses@gmail.com', '$2y$10$xYWjnaZb17crCM3ML9hw4OysLjyKtswb.e4XaTYaITbtk.3rSJNUC', NULL, NULL, '2024-04-16 15:26:25', '2024-04-16 15:26:25', 0, 1),
(3, 'Jesus Sante', 'q=s', '$2y$10$WrAmlcvph/sw5xlI.Jf2huwhmFckvFIGdJ/89sAlCHTKdR1N9wsle', NULL, NULL, '2024-04-16 15:27:15', '2024-04-16 15:27:15', 0, 1),
(4, 'qwerty', 'james@gmail.com', '$2y$10$R0qv3CCsqS33HsEYiMYekeSLlgdFKtRexz4geK0LmJhLctXFMytZe', NULL, NULL, '2024-04-16 16:34:42', '2024-04-16 16:34:42', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

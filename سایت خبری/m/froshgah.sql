-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2024 at 08:48 PM
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
-- Database: `froshgah`
--

-- --------------------------------------------------------

--
-- Table structure for table `abote`
--

CREATE TABLE `abote` (
  `id` int(11) NOT NULL,
  `user` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `semat` varchar(11) NOT NULL,
  `count_post` int(11) DEFAULT NULL,
  `login` datetime NOT NULL DEFAULT current_timestamp(),
  `count_edit` int(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `abote`
--

INSERT INTO `abote` (`id`, `user`, `password`, `semat`, `count_post`, `login`, `count_edit`, `email`, `phone`) VALUES
(1, 'mr_pasban', '12345', '09148691426', NULL, '2024-08-14 13:22:51', NULL, '1', 0),
(2, 'aref', 'jami', '09155631125', NULL, '2024-08-15 16:49:06', NULL, '1', 0),
(3, 'aref', 'jami', '09151604855', NULL, '2024-08-15 17:35:00', NULL, '1', 0),
(4, 'aref', 'jami', '09151604855', NULL, '2024-08-15 17:35:51', NULL, '1', 0),
(5, 'aref', 'jami', '09151604855', NULL, '2024-08-15 17:35:54', NULL, '1', 0),
(6, 'aref', 'jami', '09151604855', NULL, '2024-08-15 17:36:24', NULL, '1', 0),
(7, 'aref', 'jami', '09151604855', NULL, '2024-08-15 17:37:05', NULL, '1', 0),
(8, 'aref', 'jami', '09151604855', NULL, '2024-08-15 17:37:16', NULL, '1', 0),
(9, 'aref', 'jami', '09151604855', NULL, '2024-08-15 17:37:46', NULL, '1', 0),
(10, 'aref', 'jami', '09151604855', NULL, '2024-08-15 17:58:43', NULL, '1', 0),
(11, 'aref', 'jami', '09155631125', NULL, '2024-08-15 19:00:09', NULL, '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `seen` int(11) NOT NULL,
  `mtn` int(11) NOT NULL,
  `edit` int(11) NOT NULL,
  `count_like` int(11) NOT NULL,
  `daste_bandi` int(11) NOT NULL,
  `titel` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `titel`
--

CREATE TABLE `titel` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `mtn` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `titel`
--

INSERT INTO `titel` (`id`, `name`, `mtn`) VALUES
(1, 'ورزشی ', 'abc'),
(2, 'سیاسی ', 'abc'),
(3, 'خاورمیانه ', 'abc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abote`
--
ALTER TABLE `abote`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `titel`
--
ALTER TABLE `titel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abote`
--
ALTER TABLE `abote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `titel`
--
ALTER TABLE `titel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

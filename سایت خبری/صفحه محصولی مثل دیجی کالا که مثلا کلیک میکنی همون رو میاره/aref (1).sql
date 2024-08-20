-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2024 at 12:20 PM
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
-- Database: `aref`
--

-- --------------------------------------------------------

--
-- Table structure for table `aref`
--

CREATE TABLE `aref` (
  `id` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sale_price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aref`
--

INSERT INTO `aref` (`id`, `price`, `title`, `sale_price`, `image`) VALUES
(1, '80000', 'loster', '7000', 'https://dkstatics-public.digikala.com/digikala-products/2136069.jpg?x-oss-process=image/resize,m_lfit,h_300,w_300/format,webp/quality,q_80'),
(2, '10000', 'اkjhgkhgghkkghkhghgk', '5327654', 'https://dkstatics-public.digikala.com/digikala-products/845b0dd11787c17cb51cd8e8004a196933d3fa92_1699192361.jpg?x-oss-process=image/resize,m_lfit,h_300,w_300/format,webp/quality,q_80'),
(3, '365375478', 'jjjjjjjgrthrthtrhhfdhytrhhrt', '535437854', 'https://dkstatics-public.digikala.com/digikala-products/48358e5dc97b69573bf070b5016d2b4878e68407_1605620273.jpg?x-oss-process=image/resize,m_lfit,h_300,w_300/format,webp/quality,q_80');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aref`
--
ALTER TABLE `aref`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aref`
--
ALTER TABLE `aref`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

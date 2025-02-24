-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 24, 2025 at 06:42 PM
-- Server version: 8.0.41-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invoice`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounttk`
--

CREATE TABLE `accounttk` (
  `id` int NOT NULL,
  `accno` int DEFAULT NULL,
  `credit` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Crops`
--

CREATE TABLE `Crops` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Crops`
--

INSERT INTO `Crops` (`id`, `name`, `created_at`) VALUES
(1, 'আলু', '2025-01-13 07:25:32'),
(2, 'পটোল', '2025-01-13 07:29:58'),
(5, 'ধান', '2025-01-13 09:52:33'),
(6, 'ঘম', '2025-01-13 09:53:07'),
(8, 'রসুন', '2025-01-16 15:03:03'),
(9, 'দানা', '2025-01-16 15:08:46');

-- --------------------------------------------------------

--
-- Table structure for table `depo`
--

CREATE TABLE `depo` (
  `id` int NOT NULL,
  `depo` varchar(255) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `depo`
--

INSERT INTO `depo` (`id`, `depo`, `unit`, `created_at`) VALUES
(8, 'দিয়ের পাসে', 'সাতাং', '2025-01-11 11:52:28'),
(9, 'পুবপারা', 'সাতানং', '2025-01-19 04:11:00'),
(10, 'দক্ষিন পারা ', 'সাতাং', '2025-01-20 16:31:31');

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE `farmers` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `fathername` varchar(255) NOT NULL,
  `mathername` varchar(255) DEFAULT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `groupx` varchar(255) DEFAULT NULL,
  `credit` decimal(10,2) DEFAULT NULL,
  `last_update` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`id`, `name`, `fathername`, `mathername`, `phone`, `email`, `address`, `created_at`, `groupx`, `credit`, `last_update`) VALUES
(7, 'hasmoat ali', 'saidul', 'null', '01770601214', '', 'potigara', '2025-01-09 11:31:57', 'group1', NULL, '2025-02-24 18:32:13'),
(8, 'nahid', 'fozlul', 'nisma', '01877357091', 'nahidhk2007@gmail.com', 'ataikula pabna', '2025-01-09 11:32:45', 'nahid group', '656.00', '2025-02-24 18:34:10'),
(9, 'hasmot ali 1', 'name', 'null', '01877357091', 'nahidhk2007@gmail.com', 'ataikula pabna', '2025-01-09 12:31:36', 'nahid group', NULL, '2025-02-24 18:32:13'),
(10, 'rohim', 'rohoman ali', 'rohima', '01877357091', 'nahidhk2007@gmail.com', 'ataikula pabna', '2025-01-09 17:46:12', 'group1', NULL, '2025-02-24 18:32:13'),
(11, 'khkon ali sordar', 'khairul ali', 'komola katun', '01877357091', 'nahidhk2007@gmail.com', 'ataikula pabna', '2025-01-09 17:49:14', 'nahid group', '656.00', '2025-02-24 18:34:37'),
(12, 'Nahid HK', '', '', '0192398343443', 'nahidhk2007@gmail.com', 'ataikula pabna', '2025-01-24 06:09:14', 'nahid group', NULL, '2025-02-24 18:32:13');

-- --------------------------------------------------------

--
-- Table structure for table `groupx`
--

CREATE TABLE `groupx` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `groupx`
--

INSERT INTO `groupx` (`id`, `name`, `created_at`) VALUES
(1, 'group1', '2025-01-07 07:28:04'),
(5, 'nahid group', '2025-01-07 17:46:46');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int NOT NULL,
  `accountno` int DEFAULT NULL,
  `notes` varchar(500) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `crop` varchar(200) DEFAULT NULL,
  `quantity` varchar(200) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `invoiceid` int DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `users` varchar(255) DEFAULT NULL,
  `dpct` varchar(255) DEFAULT NULL,
  `amaount` float DEFAULT NULL,
  `groupx` varchar(100) DEFAULT NULL,
  `submitdate` date DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `less` decimal(15,2) DEFAULT NULL,
  `receive` decimal(15,2) DEFAULT NULL,
  `typex` varchar(123) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `accountno`, `notes`, `description`, `crop`, `quantity`, `price`, `name`, `fname`, `invoiceid`, `unit`, `users`, `dpct`, `amaount`, `groupx`, `submitdate`, `created`, `less`, `receive`, `typex`) VALUES
(1, 10, 'notes and ', '10', 'দানা', '13', 800, 'rohim', 'rohoman ali', 20011025, 'কেজি', 'sadhin kha', 'দিয়ের পাসে', 10400, 'group1', '2025-01-20', '2025-01-20 01:51:21', NULL, NULL, NULL),
(2, 11, 'notes and ', '11', 'রসুন', '25', 21, 'khkon ali sordar', 'khairul ali', 20011125, 'সাতানং', 'sadhin kha', 'পুবপারা', 530, 'nahid group', '2025-01-20', '2025-01-20 01:55:59', NULL, NULL, NULL),
(3, 8, '', '12', 'রসুন', '40', 21, 'nahid', 'fozlul', 2001825, 'সাতানং', 'Nahid HK', 'দিয়ের পাসে', 848, 'nahid group', '2025-01-20', '2025-01-20 03:02:50', NULL, NULL, NULL),
(4, 8, '', '13', 'ঘম', '13', 21, 'nahid', 'fozlul', 2001825, 'সাতানং', 'MD HASMOT ALI', 'পুবপারা', 276, 'nahid group', '2025-01-20', '2025-01-20 03:03:44', NULL, NULL, NULL),
(5, 8, 'notes and ', '13', 'রসুন', '1', 800, 'nahid', 'fozlul', 2001825, 'সাতানং', 'MD HASMOT ALI', 'পুবপারা', 800, 'nahid group', '2025-01-20', '2025-01-20 09:11:22', NULL, '700.00', NULL),
(6, 10, '', '10', 'দানা', '13', 43.9, 'rohim', 'rohoman ali', 20011025, 'কেজি', 'Nahid HK', 'দিয়ের পাসে', 570.7, 'group1', '2025-01-20', '2025-01-20 15:44:10', NULL, NULL, NULL),
(7, 9, '', '14', 'ধান', '25', 23.12, 'hasmot ali 1', 'name', 2001925, 'সাতানং', 'sadhin kha', 'দক্ষিন পারা', 578, 'nahid group', '2025-01-20', '2025-01-20 16:33:11', NULL, NULL, NULL),
(8, 10, 'gghg', '10', 'ধান', '20', 60, 'rohim', 'rohoman ali', 21011025, 'সাতানং', 'sadhin kha', 'দিয়ের পাসে', 1200, 'group1', '2025-01-21', '2025-01-21 12:12:32', NULL, NULL, NULL),
(9, 11, 'This is a shoart nate and exampule naote this page', '11', 'রসুন', '33', 30.03, 'khkon ali sordar', 'khairul ali', 21011125, 'সাতানং', 'sadhin kha', 'পুবপারা', 990.99, 'nahid group', '2025-01-21', '2025-01-21 12:43:50', NULL, NULL, NULL),
(10, 11, 'Thim', '11', 'ধান', '33', 43.9, 'khkon ali sordar', 'khairul ali', 21011125, 'সাতানং', 'sadhin kha', 'পুবপারা', 1448.7, 'nahid group', '2025-01-21', '2025-01-21 13:36:07', NULL, NULL, NULL),
(11, 8, 'notes and ', '13', 'রসুন', '10', 30.99, 'nahid', 'fozlul', 2101825, 'সাতানং', 'sadhin kha', 'পুবপারা', 309.9, 'nahid group', '2025-01-21', '2025-01-21 15:17:17', NULL, NULL, NULL),
(12, 10, 'কন নোট নাই ', '10', 'রসুন', '12', 50, 'rohim', 'rohoman ali', 23011025, 'পাউন্দ', 'sadhin kha', 'দিয়ের পাসে', 600, 'group1', '2025-01-23', '2025-01-23 06:25:12', NULL, NULL, 'Due'),
(13, 10, 'কন নোট নাই ', '10', 'আলু', '33', 90, 'rohim', 'rohoman ali', 23011025, 'সাতানং', 'Nahid HK', 'দিয়ের পাসে', 2970, 'group1', '2025-01-23', '2025-01-23 06:28:52', NULL, NULL, 'Due'),
(14, 10, 'কন নোট নাই ', '10', '', '25', 21.21, 'rohim', 'rohoman ali', 23011025, '', '', 'দিয়ের পাসে', 530.25, 'group1', '2025-01-23', '2025-01-23 06:33:07', NULL, NULL, 'Unpiad'),
(15, 10, 'কন নোট নাই ', '10', 'রসুন', '20', 50, 'rohim', 'rohoman ali', 23011025, 'সাতানং', 'sadhin kha', 'দিয়ের পাসে', 1000, 'group1', '2025-01-23', '2025-01-23 08:10:44', NULL, NULL, 'Unpiad'),
(16, 10, '', '15', 'ঘম', '40', 19, 'rohim', 'rohoman ali', 23011025, 'সাতানং', 'sadhin kha', 'দক্ষিন পারা', 760, 'group1', '2025-01-23', '2025-01-23 08:19:41', NULL, NULL, 'Unpiad'),
(17, 11, '', '11', '', '13', 21.21, 'khkon ali sordar', 'khairul ali', 2021125, 'মন', 'MD HASMOT ALI', 'পুবপারা', 275.73, 'nahid group', '2025-02-02', '2025-02-02 01:34:36', NULL, NULL, 'Unpiad');

-- --------------------------------------------------------

--
-- Table structure for table `lands`
--

CREATE TABLE `lands` (
  `id` int NOT NULL,
  `account` int DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `depid` int DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `unit` varchar(50) NOT NULL,
  `showunit` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lands`
--

INSERT INTO `lands` (`id`, `account`, `description`, `depid`, `quantity`, `unit`, `showunit`, `created_at`) VALUES
(10, 10, 'দিয়ের পাসে', 8, 20, 'সাতাং', 'দিয়ের পাসে - 20 - সাতাং', '2025-01-11 11:56:56'),
(11, 11, 'পুবপারা', 9, 33, 'সাতানং', 'পুবপারা - 33 - সাতানং', '2025-01-19 04:11:37'),
(12, 8, 'দিয়ের পাসে', 8, 40, 'সাতাং', 'দিয়ের পাসে - 40 - সাতাং', '2025-01-20 09:01:45'),
(13, 8, 'পুবপারা', 9, 13, 'সাতানং', 'পুবপারা - 13 - সাতানং', '2025-01-20 09:02:11'),
(14, 9, 'দক্ষিন পারা', 10, 33, 'সাতাং', 'দক্ষিন পারা - 33 - সাতাং', '2025-01-20 16:32:06'),
(15, 10, 'দক্ষিন পারা', 10, 40, 'সাতাং', 'দক্ষিন পারা - 40 - সাতাং', '2025-01-23 08:19:03');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `created_at`) VALUES
(5, 'গ্রাম', '2025-01-13 07:22:46'),
(6, 'লিটার', '2025-01-13 09:10:54'),
(7, 'কেজি', '2025-01-13 09:53:28'),
(8, 'মন', '2025-01-13 09:53:42'),
(9, 'পাউন্দ', '2025-01-16 15:03:37'),
(10, 'সাতানং', '2025-01-16 15:04:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(155) DEFAULT NULL,
  `mobile` varchar(11) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `pin` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `mobile`, `name`, `pin`, `created_at`) VALUES
(1, 'nahidhk', '303034', 'Nahid HK', 1322, '2025-01-08 10:48:25'),
(4, 'hasmot', '2303023', 'sadhin kha', 1111, '2025-01-08 11:15:20'),
(5, 'hasmoatali', '01770601214', 'MD HASMOT ALI', 1122, '2025-01-16 19:17:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounttk`
--
ALTER TABLE `accounttk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Crops`
--
ALTER TABLE `Crops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `depo`
--
ALTER TABLE `depo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmers`
--
ALTER TABLE `farmers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groupx`
--
ALTER TABLE `groupx`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lands`
--
ALTER TABLE `lands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
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
-- AUTO_INCREMENT for table `accounttk`
--
ALTER TABLE `accounttk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Crops`
--
ALTER TABLE `Crops`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `depo`
--
ALTER TABLE `depo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `farmers`
--
ALTER TABLE `farmers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `groupx`
--
ALTER TABLE `groupx`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `lands`
--
ALTER TABLE `lands`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2021 at 07:16 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chart`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

CREATE TABLE `activity_logs` (
  `id` int(10) NOT NULL,
  `user_id` int(6) DEFAULT NULL,
  `name` varchar(25) DEFAULT NULL,
  `sale_posting` int(2) DEFAULT NULL,
  `posting_conversion` int(2) DEFAULT NULL,
  `area` varchar(50) DEFAULT NULL,
  `entry_time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity_logs`
--

INSERT INTO `activity_logs` (`id`, `user_id`, `name`, `sale_posting`, `posting_conversion`, `area`, `entry_time`) VALUES
(1, 10102, 'Abdul Malek', 20, 10, 'Mohakhali', '2021-11-08'),
(2, 10101, 'Baker Uddin', 20, 10, 'Rampura', '2021-11-17'),
(3, 10103, 'Akash Srabon', 5, 3, 'DHOS, Mirpur', NULL),
(4, 10104, 'Nazim udding', 2, 5, 'Pallabi', NULL),
(5, 10105, 'Abrar Rahman', 11, 9, 'Bonsree', NULL),
(6, 10106, 'Rafiq Jilani', 33, 8, 'Gulshan', NULL),
(7, 10107, 'Noyon Tara', 22, 11, 'Dhanmondi', NULL),
(8, 10108, 'Jay Jay din', 11, 15, 'Rayer Bazar', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `campaign_per_one`
--

CREATE TABLE `campaign_per_one` (
  `campain_id` int(10) UNSIGNED NOT NULL,
  `day` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campaign_per_one`
--

INSERT INTO `campaign_per_one` (`campain_id`, `day`, `views`) VALUES
(1, '1', 500),
(2, '2', 510),
(3, '3', 480),
(4, '4', 990),
(5, '5', 200),
(6, '6', 480),
(7, '7', 600),
(8, '8', 400),
(9, '9', 700),
(10, '10', 760);

-- --------------------------------------------------------

--
-- Table structure for table `campaign_per_two`
--

CREATE TABLE `campaign_per_two` (
  `campain_id` int(10) UNSIGNED NOT NULL,
  `day` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campaign_per_two`
--

INSERT INTO `campaign_per_two` (`campain_id`, `day`, `views`) VALUES
(10, '1', 12),
(11, '2', 25),
(12, '3', 90),
(14, '4', 9);

-- --------------------------------------------------------

--
-- Table structure for table `daily_sales`
--

CREATE TABLE `daily_sales` (
  `sales_id` int(10) UNSIGNED NOT NULL,
  `day` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_sales` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `daily_sales`
--

INSERT INTO `daily_sales` (`sales_id`, `day`, `total_sales`) VALUES
(1, '0', 22),
(2, '2', 15),
(3, '3', 78),
(4, '4', 38),
(5, '5', 60),
(11, '5', 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_logs`
--
ALTER TABLE `activity_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaign_per_one`
--
ALTER TABLE `campaign_per_one`
  ADD PRIMARY KEY (`campain_id`);

--
-- Indexes for table `campaign_per_two`
--
ALTER TABLE `campaign_per_two`
  ADD PRIMARY KEY (`campain_id`);

--
-- Indexes for table `daily_sales`
--
ALTER TABLE `daily_sales`
  ADD PRIMARY KEY (`sales_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_logs`
--
ALTER TABLE `activity_logs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `campaign_per_one`
--
ALTER TABLE `campaign_per_one`
  MODIFY `campain_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `campaign_per_two`
--
ALTER TABLE `campaign_per_two`
  MODIFY `campain_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `daily_sales`
--
ALTER TABLE `daily_sales`
  MODIFY `sales_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

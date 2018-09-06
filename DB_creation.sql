-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2018 at 05:26 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `licensing`
--

-- --------------------------------------------------------

--
-- Table structure for table `enterprise`
--

CREATE TABLE `enterprise` (
  `enterprise_id` bigint(20) UNSIGNED NOT NULL,
  `enterprise_name` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `enterprise_type` enum('OTHER','INTEGRATOR','DISTRIBUTOR') COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `enterprise`
--

INSERT INTO `enterprise` (`enterprise_id`, `enterprise_name`, `enterprise_type`) VALUES
(1, 'ISS', 'OTHER');

-- --------------------------------------------------------

--
-- Table structure for table `license`
--

CREATE TABLE `license` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_user_id` int(11) DEFAULT NULL,
  `project_id` int(11) NOT NULL,
  `name` text COLLATE utf8_spanish_ci NOT NULL,
  `mail` text COLLATE utf8_spanish_ci NOT NULL,
  `integrator_id` bigint(20) NOT NULL,
  `final_user` text COLLATE utf8_spanish_ci NOT NULL,
  `wholesaler_id` bigint(20) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `request_type` enum('NEW','UPGRADE','RENOVATION','CONFIGURATION_CHANGE') COLLATE utf8_spanish_ci NOT NULL,
  `license_type` enum('PERMANENT','DEMO','TEMPORAL') COLLATE utf8_spanish_ci NOT NULL,
  `date_requested` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `comment` text COLLATE utf8_spanish_ci NOT NULL,
  `license_details` varchar(4000) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `user_password_hash` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `user_type` tinyint(1) NOT NULL,
  `date_added` date NOT NULL,
  `phone` int(11) NOT NULL,
  `enterprise_id` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `full_name`, `user_email`, `user_password_hash`, `user_type`, `date_added`, `phone`, `enterprise_id`) VALUES
(1, 'tester', 'tester', 'tester@tester.tester', '$2y$10$JM6qD8iZ/l1ZyguYHfUxM.tDqSvpxNCFnQZuW1uWhLLdO.XBLHCCG', 1, '2018-08-22', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enterprise`
--
ALTER TABLE `enterprise`
  ADD PRIMARY KEY (`enterprise_id`),
  ADD UNIQUE KEY `enterprise_id` (`enterprise_id`);

--
-- Indexes for table `license`
--
ALTER TABLE `license`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enterprise`
--
ALTER TABLE `enterprise`
  MODIFY `enterprise_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `license`
--
ALTER TABLE `license`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

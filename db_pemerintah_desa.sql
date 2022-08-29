-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2022 at 06:13 AM
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
-- Database: `db_pemerintah_desa`
--

-- --------------------------------------------------------

--
-- Table structure for table `borns`
--

CREATE TABLE `borns` (
  `id` int(11) NOT NULL,
  `kk` bigint(20) DEFAULT NULL,
  `baby_nik` bigint(20) DEFAULT NULL,
  `baby_name` varchar(100) DEFAULT NULL,
  `baby_gender` varchar(50) DEFAULT NULL,
  `borned_at` varchar(50) DEFAULT NULL,
  `mother_name` varchar(100) DEFAULT NULL,
  `neighbourhood` int(11) DEFAULT NULL,
  `hamlet` int(11) DEFAULT NULL,
  `village` varchar(200) DEFAULT NULL,
  `urban_village` varchar(200) DEFAULT NULL,
  `district` varchar(200) DEFAULT NULL,
  `regency` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comes`
--

CREATE TABLE `comes` (
  `id` int(11) NOT NULL,
  `come_nik` bigint(20) DEFAULT NULL,
  `come_name` varchar(100) DEFAULT NULL,
  `come_gender` varchar(50) DEFAULT NULL,
  `come_at` varchar(50) DEFAULT NULL,
  `neighbourhood` int(11) DEFAULT NULL,
  `hamlet` int(11) DEFAULT NULL,
  `village` varchar(200) DEFAULT NULL,
  `urban_village` varchar(200) DEFAULT NULL,
  `district` varchar(200) DEFAULT NULL,
  `regency` varchar(200) DEFAULT NULL,
  `whistleblower_nik` bigint(20) DEFAULT NULL,
  `whistleblower_name` varchar(200) DEFAULT NULL,
  `reason` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `deaths`
--

CREATE TABLE `deaths` (
  `id` int(11) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dead_at` varchar(50) NOT NULL,
  `neighbourhood` int(11) NOT NULL,
  `hamlet` int(11) NOT NULL,
  `village` varchar(200) NOT NULL,
  `urban_village` varchar(200) NOT NULL,
  `district` varchar(200) NOT NULL,
  `regency` varchar(200) NOT NULL,
  `reason` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `moves`
--

CREATE TABLE `moves` (
  `id` int(11) NOT NULL,
  `nik` bigint(20) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `moved_at` varchar(50) DEFAULT NULL,
  `neighbourhood` int(11) DEFAULT NULL,
  `hamlet` int(11) DEFAULT NULL,
  `village` varchar(200) DEFAULT NULL,
  `urban_village` varchar(200) DEFAULT NULL,
  `district` varchar(200) DEFAULT NULL,
  `regency` varchar(200) DEFAULT NULL,
  `reason` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `is_active`) VALUES
(1, 'admin', '$2y$10$yBXXx06ayDrZtBt67kshie1EZiTq73k7j2XGfO35C33j.iuV99SRm', 'admin@admin.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `borns`
--
ALTER TABLE `borns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comes`
--
ALTER TABLE `comes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deaths`
--
ALTER TABLE `deaths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moves`
--
ALTER TABLE `moves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `borns`
--
ALTER TABLE `borns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comes`
--
ALTER TABLE `comes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deaths`
--
ALTER TABLE `deaths`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `moves`
--
ALTER TABLE `moves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

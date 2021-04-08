-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 08, 2021 at 12:39 PM
-- Server version: 10.3.27-MariaDB-0+deb10u1
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpid`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` int(100) NOT NULL,
  `label1` varchar(255) NOT NULL,
  `label2` varchar(255) DEFAULT NULL,
  `label3` varchar(255) DEFAULT NULL,
  `status` int(100) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`id`, `label1`, `label2`, `label3`, `status`, `created_at`) VALUES
(3, 'sagsd', 'one more', 'two more', 1, '2021-04-08 00:48:45'),
(4, 'hdgd', 'gfdgf', 'dgfdg', 1, '2021-04-08 01:25:52'),
(5, 'afds', NULL, NULL, 1, '2021-04-08 05:49:51'),
(6, 'fdsfg', NULL, NULL, 1, '2021-04-08 05:50:26');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'VnliN2txdjBzaGVHR1JvZGVsK1JhZz09OjojWE8/iJLLCS/EiwY0qN9j');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(100) NOT NULL,
  `image` text NOT NULL,
  `status` int(50) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `image`, `status`, `created_at`) VALUES
(19, '20210408075109546.jpg', 1, '2021-04-08 02:21:09'),
(20, '20210408075109552.jpg', 1, '2021-04-08 02:21:09'),
(21, '20210408075109556.jpg', 1, '2021-04-08 02:21:09'),
(22, '20210408075109560.jpg', 1, '2021-04-08 02:21:09'),
(23, '20210408075109564.jpg', 1, '2021-04-08 02:21:09');

-- --------------------------------------------------------

--
-- Table structure for table `latest_news`
--

CREATE TABLE `latest_news` (
  `id` int(100) NOT NULL,
  `news` text NOT NULL,
  `status` int(50) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `latest_news`
--

INSERT INTO `latest_news` (`id`, `news`, `status`, `created_at`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting', 1, '2021-04-08 05:02:42'),
(3, 'Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting', 1, '2021-04-08 06:07:50');

-- --------------------------------------------------------

--
-- Table structure for table `news_updates`
--

CREATE TABLE `news_updates` (
  `id` int(100) NOT NULL,
  `news_updates` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(100) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_updates`
--

INSERT INTO `news_updates` (`id`, `news_updates`, `image`, `status`, `created_at`) VALUES
(3, 'afds', '20210408121335816.jpg', 1, '2021-04-08 06:43:35'),
(4, 'dgfss', '20210408122245440.jpg', 1, '2021-04-08 06:52:45'),
(5, 'dsdg', '20210408123755094.png', 1, '2021-04-08 07:07:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latest_news`
--
ALTER TABLE `latest_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_updates`
--
ALTER TABLE `news_updates`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `latest_news`
--
ALTER TABLE `latest_news`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news_updates`
--
ALTER TABLE `news_updates`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

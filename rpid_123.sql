-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 06:04 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpid_123`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(100) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `aboutus` text NOT NULL,
  `status` int(10) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `aboutus`, `status`, `created_at`) VALUES
(1, 'About Us', 'To secure a challenging position where I can effectively contribute my Technical   skills and Knowledge for the growth and development of the organization.\r\n\r\nLong term association with an organization where individual skills, potential like hardworking, sincerity, honesty is acknowledged and challenges are there to progress in life and career.', 1, '2021-04-20 03:42:24');

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` int(100) NOT NULL,
  `label1` varchar(255) NOT NULL,
  `label2` varchar(255) DEFAULT NULL,
  `label3` varchar(255) DEFAULT NULL,
  `status` int(100) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`id`, `label1`, `label2`, `label3`, `status`, `created_at`) VALUES
(3, 'this is first achievement', '', '', 1, '2021-04-08 00:48:45'),
(8, 'When some one got first prize its feel good', NULL, NULL, 1, '2021-04-17 02:43:43'),
(9, 'I have 1 year and 5 months of working experience in NIC Bhubaneswar.', NULL, NULL, 1, '2021-04-20 03:44:52'),
(12, 'Before that I am working in Phoenix Software Solutions for 2 years and 1 month.', NULL, NULL, 1, '2021-04-20 03:46:01');

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
(1, 'admin', 'S250QlkvdmkzZTFMb1VpQlZVUVQwQT09OjraetNBLi3Sjp47dO2YT75t');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(100) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` text NOT NULL,
  `status` int(50) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `title`, `image`, `status`, `created_at`) VALUES
(19, NULL, '20210408075109546.jpg', 1, '2021-04-08 02:21:09'),
(20, NULL, '20210408075109552.jpg', 1, '2021-04-08 02:21:09'),
(21, NULL, '20210408075109556.jpg', 1, '2021-04-08 02:21:09'),
(22, NULL, '20210408075109560.jpg', 1, '2021-04-08 02:21:09'),
(23, NULL, '20210408075109564.jpg', 1, '2021-04-08 02:21:09'),
(25, 'jhjhh', '20210419075250073.jpg', 1, '2021-04-19 05:52:50'),
(26, 'banner1', '20210420055748850.jpg', 1, '2021-04-20 03:57:48');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `status` int(10) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `mobile`, `emailid`, `message`, `status`, `created_at`) VALUES
(1, 'mrutunjay pani', '9876543213', 'mrutunjaypani1991@gmail.com', 'hii', 1, '2021-04-16 14:09:25'),
(2, 'mrutunjay pani', '9876543213', 'mrutunjaypani1991@gmail.com', 'gkfjh', 1, '2021-04-16 14:10:37'),
(3, 'Preety', '9861019237', 'samal.madhusmita90@gmail.com', 'hello', 1, '2021-04-17 02:42:57'),
(4, 'Preety', '986101923888', 'admin@admin.com', 'sdsdsd', 1, '2021-04-19 02:49:58'),
(8, 'sukhendu nayak', '986111111', 'su@gmail.com', 'hello I want a message', 1, '2021-04-20 03:53:21');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(100) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text NOT NULL,
  `status` int(10) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `title`, `description`, `status`, `created_at`) VALUES
(1, 'abcd', 'hellow world', 1, '2021-04-19 02:25:45'),
(2, 'what is rice', 'rice is heart of odisha', 1, '2021-04-19 02:47:05'),
(3, 'sanjay', 'Completed Microsoft Technology Associate Certification: .NET from Microsoft', 1, '2021-04-20 03:59:02');

-- --------------------------------------------------------

--
-- Table structure for table `latest_news`
--

CREATE TABLE `latest_news` (
  `id` int(100) NOT NULL,
  `news` text NOT NULL,
  `status` int(50) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `latest_news`
--

INSERT INTO `latest_news` (`id`, `news`, `status`, `created_at`) VALUES
(8, 'hello', 1, '2021-04-19 06:21:20'),
(10, 'Before that I am working in Phoenix Software Solutions for 2 years and 1 month.', 1, '2021-04-20 03:47:57');

-- --------------------------------------------------------

--
-- Table structure for table `news_updates`
--

CREATE TABLE `news_updates` (
  `id` int(100) NOT NULL,
  `news_updates` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(100) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_updates`
--

INSERT INTO `news_updates` (`id`, `news_updates`, `image`, `status`, `created_at`) VALUES
(3, 'afds', '20210408121335816.jpg', 1, '2021-04-08 06:43:35'),
(4, 'dgfss', '20210408122245440.jpg', 1, '2021-04-08 06:52:45'),
(6, 'news', '20210408094509366.jpg', 1, '2021-04-08 07:45:09'),
(7, 'news and update', '20210417024426249.png', 1, '2021-04-17 02:44:26'),
(8, 'hello krushna', '20210420055826247.jpg', 1, '2021-04-20 03:58:26');

-- --------------------------------------------------------

--
-- Table structure for table `photo_gallery`
--

CREATE TABLE `photo_gallery` (
  `id` int(100) NOT NULL,
  `image` text NOT NULL,
  `status` int(50) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photo_gallery`
--

INSERT INTO `photo_gallery` (`id`, `image`, `status`, `created_at`) VALUES
(7, '20210419075443296.jpg', 1, '2021-04-19 05:54:43'),
(8, '20210419075507277.jpg', 1, '2021-04-19 05:55:07'),
(9, '20210420055141818.jpg', 1, '2021-04-20 03:51:41'),
(10, '20210420055153114.jpg', 1, '2021-04-20 03:51:53');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(100) NOT NULL,
  `team_member_name` varchar(100) NOT NULL,
  `mobile_no` varchar(100) DEFAULT NULL,
  `email_id` varchar(100) DEFAULT NULL,
  `member_designation` varchar(100) NOT NULL,
  `member_photo` varchar(255) NOT NULL,
  `status` int(10) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `team_member_name`, `mobile_no`, `email_id`, `member_designation`, `member_photo`, `status`, `created_at`) VALUES
(3, 'Mr. Radhakrushna Senapati', NULL, NULL, 'Senior Reaserch Fellow', 'team2.png', 1, '2021-04-16 13:39:55'),
(4, 'Mr. Subhendu Shekhar Pradhan', NULL, NULL, 'Computer Assistant', 'team1.png', 1, '2021-04-16 13:38:58'),
(5, 'Pritam', NULL, NULL, 'software developer', 'nrri.png', 1, '2021-04-17 02:45:59'),
(6, 'Preety', NULL, NULL, 'Consultant', 'Jellyfish.jpg', 1, '2021-04-20 03:55:01'),
(10, 'Pritam', NULL, NULL, 'Developer', 'Chrysanthemum.jpg', 1, '2021-04-20 03:54:20');

-- --------------------------------------------------------

--
-- Table structure for table `video_gallery`
--

CREATE TABLE `video_gallery` (
  `id` int(100) NOT NULL,
  `label1` varchar(255) DEFAULT NULL,
  `v_link` text NOT NULL,
  `status` int(10) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video_gallery`
--

INSERT INTO `video_gallery` (`id`, `label1`, `v_link`, `status`, `created_at`) VALUES
(1, 'agg1', 'https://www.youtube.com/embed/3R1njaCHG6c', 1, '2021-04-16 11:58:43'),
(2, 'agg2', 'https://www.youtube.com/embed/PQpqdl7SBgk', 1, '2021-04-16 12:00:57'),
(5, 'ag', 'https://www.youtube.com/embed/_vMdyrLxEig', 1, '2021-04-16 13:43:13'),
(7, 'drone video', 'https://www.youtube.com/watch?v=P2YPG8PO9JU', 1, '2021-04-20 03:56:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
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
-- Indexes for table `photo_gallery`
--
ALTER TABLE `photo_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_gallery`
--
ALTER TABLE `video_gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `latest_news`
--
ALTER TABLE `latest_news`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `news_updates`
--
ALTER TABLE `news_updates`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `photo_gallery`
--
ALTER TABLE `photo_gallery`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `video_gallery`
--
ALTER TABLE `video_gallery`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2021 at 01:37 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indian_doctor`
--

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
-- Table structure for table `bank_info`
--

CREATE TABLE `bank_info` (
  `id` int(100) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `user_id` int(100) NOT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `account_no` varchar(255) DEFAULT NULL,
  `ifsc_code` varchar(255) DEFAULT NULL,
  `upi_no` varchar(255) DEFAULT NULL,
  `ac_holder_name` varchar(255) DEFAULT NULL,
  `status` int(100) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank_info`
--

INSERT INTO `bank_info` (`id`, `user_type`, `user_id`, `bank_name`, `account_no`, `ifsc_code`, `upi_no`, `ac_holder_name`, `status`, `created_at`, `updated_at`) VALUES
(1, '6', 3, 'sbi', '', '', '', '', 0, '2021-02-04 11:51:07', '2021-02-20 11:50:46');

-- --------------------------------------------------------

--
-- Table structure for table `booking_req`
--

CREATE TABLE `booking_req` (
  `id` int(100) NOT NULL,
  `customer_id` int(100) NOT NULL,
  `booking_mob` varchar(255) DEFAULT NULL,
  `cust_lat` varchar(255) DEFAULT NULL,
  `cust_long` varchar(255) DEFAULT NULL,
  `booking_add` text,
  `booking_email` varchar(255) DEFAULT NULL,
  `booking_pin` varchar(255) DEFAULT NULL,
  `vehicle_id` int(100) NOT NULL,
  `service_type_id` int(100) NOT NULL,
  `schedule_date` varchar(255) DEFAULT NULL,
  `schedule_location` text,
  `additional_contact` varchar(255) DEFAULT NULL,
  `location` text,
  `supplier_assign` varchar(255) DEFAULT NULL,
  `mechanic_assign` varchar(255) DEFAULT NULL,
  `status` enum('0','1','2','3','4') NOT NULL DEFAULT '0' COMMENT '0=pending not started yet\r\n1=ongoing\r\n2=completed\r\n3=rejected\r\n4=upcoming',
  `payment_status` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0=unpaid  1=paid',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_req`
--

INSERT INTO `booking_req` (`id`, `customer_id`, `booking_mob`, `cust_lat`, `cust_long`, `booking_add`, `booking_email`, `booking_pin`, `vehicle_id`, `service_type_id`, `schedule_date`, `schedule_location`, `additional_contact`, `location`, `supplier_assign`, `mechanic_assign`, `status`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 1, '2134567890', '12', '122', 'wdddddd', 'j@gmail.com', '752078', 11, 1, 'dddd', 'dfghjkjhgf', '9876666777', 'cbbvnvbvnv', '1', '1', '2', '0', '2021-02-20 11:24:56', '2021-02-20 12:00:58'),
(2, 2, '8998765654', '2367', '1234', 'bbsrhhhh', 'jyoti@gmail.com', '752021', 12, 4, '12/1/2021', 'bomikhal,bbsr', '7978675689', 'Rasulgarh,bbsr', '1', '1', '1', '0', '2021-02-20 13:12:51', NULL),
(3, 2, '8998765654', '2367', '1234', 'bbsrhhhh', 'jyoti@gmail.com', '752021', 12, 2, '12/1/2021', 'bomikhal,bbsr', '7978675689', 'Rasulgarh,bbsr', '2', '1', '1', '0', '2021-02-20 07:42:51', NULL),
(4, 2, '8998765654', '2367', '1234', 'bbsrhhhh', 'jyoti@gmail.com', '752021', 12, 3, '12/1/2021', 'bomikhal,bbsr', '7978675689', 'Rasulgarh,bbsr', '1', '2', '2', '0', '2021-02-20 07:42:51', NULL),
(5, 4, '8998765654', '2367', '1234', 'bbsrhhhh', 'jyoti@gmail.com', '752021', 12, 2, '12/1/2021', 'bomikhal,bbsr', '7978675689', 'Rasulgarh,bbsr', '3', '1', '1', '0', '2021-02-20 07:42:51', NULL),
(6, 2, '8998765654', '2367', '1234', 'bbsrhhhh', 'jyoti@gmail.com', '752021', 12, 3, '12/1/2021', 'bomikhal,bbsr', '7978675689', 'Rasulgarh,bbsr', '1', '1', '1', '0', '2021-02-20 07:42:51', NULL),
(7, 6, '8998765654', '2367', '1234', 'bbsrhhhh', 'jyoti@gmail.com', '752021', 12, 1, '12/1/2021', 'bomikhal,bbsr', '7978675689', 'Rasulgarh,bbsr', '1', '2', '2', '0', '2021-02-20 07:42:51', NULL),
(8, 2, '8998765654', '2367', '1234', 'bbsrhhhh', 'jyoti@gmail.com', '752021', 12, 3, '12/1/2021', 'bomikhal,bbsr', '7978675689', 'Rasulgarh,bbsr', '1', '1', '4', '0', '2021-02-20 07:42:51', NULL),
(9, 1, '2134567890', '12', '122', 'wdddddd', 'j@gmail.com', '752078', 11, 1, 'dddd', 'dfghjkjhgf', '9876666777', 'cbbvnvbvnv', '3', '1', '1', '0', '2021-02-25 17:27:28', NULL),
(10, 3, '8998765654', '2367', '1234', 'bbsrhhhh', 'jyoti@gmail.com', '8998765654', 12, 2, '12/1/2021', 'bomikhal,bbsr', '7978675689', 'Rasulgarh,bbsr', '1', '1', '2', '0', '2021-02-25 17:27:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `company_name`
--

CREATE TABLE `company_name` (
  `id` int(100) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `model_name` varchar(255) DEFAULT NULL,
  `status` int(100) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_name`
--

INSERT INTO `company_name` (`id`, `company_name`, `model_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'c1', 'm1', 1, '2021-03-02 03:41:15', NULL),
(2, 'c2', 'm2', 0, '2021-03-02 03:41:21', NULL),
(3, 'c3', 'm3', 1, '2021-03-05 06:07:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `id` int(100) NOT NULL,
  `cust_name` varchar(255) DEFAULT NULL,
  `cust_gender` varchar(255) DEFAULT NULL,
  `cust_dob` varchar(255) DEFAULT NULL,
  `cust_mob` varchar(255) DEFAULT NULL,
  `cust_alternative_no` varchar(255) DEFAULT NULL,
  `cust_email` varchar(255) DEFAULT NULL,
  `cust_address` text,
  `cust_pin` varchar(255) DEFAULT NULL,
  `cust_photo` varchar(255) DEFAULT NULL,
  `status` int(100) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`id`, `cust_name`, `cust_gender`, `cust_dob`, `cust_mob`, `cust_alternative_no`, `cust_email`, `cust_address`, `cust_pin`, `cust_photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'pritam ', 'male', '1991-12-29', '7898765678', '6789876567', 'pritam@gmail.com', 'nuabajar,cuttack', '752050', '20171207_100317.jpg', 1, '2021-02-21 18:30:00', NULL),
(2, 'jyoti', 'female', '1999-12-27', '7978681379', '9078388743', 'jyoti@gmail.com', 'bomikhal,rasulgarh', '752096', '20171207_100248.jpg', 0, '2021-02-21 18:30:00', NULL),
(3, 'Mithilesh', 'male', '1992-08-04', '9583465382', '7978681379', 'mithileshmohapatra@gmail.com', 'rammandir,bbsr', '753011', '2018-12-09-13-06-08-956.jpg', 1, '2021-02-22 08:11:52', NULL),
(4, 'rashmi', 'other', '1992-03-24', '8763457185', '7008246656', 'rekharashmi702@gmail.com', 'sishupalgarh,bbsr', '751002', '20171211_114203.jpg', 0, '2021-02-22 10:11:42', NULL),
(5, 'raghu', 'male', '1999-01-21', '7978681379', '4849499009', 'raghu@gmail.com', 'Nayagarh', '752091', '12.jpg', 0, '2021-02-22 11:43:26', NULL),
(6, 'Mrutunjay Pani', 'male', '1991-06-17', '9337917821', '7978681379', 'mp@gmail.com', 'baleswar', '752019', 'team1.jpg', 1, '2021-02-22 12:59:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cust_vehicle_info`
--

CREATE TABLE `cust_vehicle_info` (
  `id` int(100) NOT NULL,
  `customer_id` int(100) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `model_name` varchar(255) DEFAULT NULL,
  `vehicle_type` varchar(255) DEFAULT NULL,
  `fuel_type` varchar(255) DEFAULT NULL,
  `mode` varchar(255) DEFAULT NULL,
  `transmission_type` varchar(255) DEFAULT NULL,
  `break_type` varchar(255) DEFAULT NULL,
  `vehicle_no` varchar(255) DEFAULT NULL,
  `engine_no` varchar(255) DEFAULT NULL,
  `chassis_no` varchar(255) DEFAULT NULL,
  `key_no` varchar(255) DEFAULT NULL,
  `rc_book` text,
  `status` int(100) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cust_vehicle_info`
--

INSERT INTO `cust_vehicle_info` (`id`, `customer_id`, `company_name`, `model_name`, `vehicle_type`, `fuel_type`, `mode`, `transmission_type`, `break_type`, `vehicle_no`, `engine_no`, `chassis_no`, `key_no`, `rc_book`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, '1', '1', 'eee', 'eee', 'gggh', 'hg', 'ghj', '1234', '68789709', '4783466437', '5555', '13.jpg', 1, '2021-03-02 03:42:58', NULL),
(5, 5, '2', '2', 'v', 'd', 'o', 't', 'b', '3333', '68789709', '4783466437', '1234', '1.jpg', 0, '2021-03-02 12:21:18', NULL),
(6, 6, '2', '2', 'w', 'ww', 'w', 'w', 'w', '3333', '68789709', '4783466437', '1234', '11.jpg', 0, '2021-03-02 12:53:13', NULL),
(7, 3, '3', '3', '', '', '', '', '', '', '', '', '', '12.jpg', 1, '2021-03-07 18:26:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `estimated_sheet`
--

CREATE TABLE `estimated_sheet` (
  `id` int(100) NOT NULL,
  `req_id` int(100) NOT NULL,
  `mechanic_id` int(100) NOT NULL,
  `product_or_service` enum('0','1') DEFAULT NULL COMMENT '0=product,1=service',
  `service_type` varchar(255) DEFAULT NULL,
  `service_product_name` varchar(255) DEFAULT NULL,
  `estimate_price` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `total_amount` varchar(255) DEFAULT NULL,
  `s_gst_percent` varchar(255) DEFAULT NULL,
  `s_gst_amount` varchar(255) DEFAULT NULL,
  `s_grand_total` varchar(255) DEFAULT NULL,
  `status` int(100) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `estimated_sheet`
--

INSERT INTO `estimated_sheet` (`id`, `req_id`, `mechanic_id`, `product_or_service`, `service_type`, `service_product_name`, `estimate_price`, `quantity`, `total_amount`, `s_gst_percent`, `s_gst_amount`, `s_grand_total`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '1', NULL, 'petrol pipe Broke', '200', '40', '200', '15', NULL, NULL, 0, '2021-02-26 10:55:52', NULL),
(2, 2, 1, '0', NULL, 'petrol pipe Broke', '400', '50', '400', '15', '75', '7000', 0, '2021-03-09 07:06:33', NULL),
(3, 10, 2, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, '2021-03-09 07:21:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `final_supplier_estimation`
--

CREATE TABLE `final_supplier_estimation` (
  `id` int(100) NOT NULL,
  `req_id` int(100) NOT NULL,
  `supp_id` int(100) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_price` varchar(255) DEFAULT NULL,
  `discount_percent` varchar(255) DEFAULT NULL,
  `discount_amount` varchar(255) DEFAULT NULL,
  `product_qty` varchar(255) DEFAULT NULL,
  `total_price` varchar(255) DEFAULT NULL,
  `gst_percent` varchar(255) DEFAULT NULL,
  `gst_amount` varchar(255) DEFAULT NULL,
  `grand_total` varchar(255) DEFAULT NULL,
  `status` int(100) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `final_supplier_estimation`
--

INSERT INTO `final_supplier_estimation` (`id`, `req_id`, `supp_id`, `product_name`, `product_price`, `discount_percent`, `discount_amount`, `product_qty`, `total_price`, `gst_percent`, `gst_amount`, `grand_total`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, '15', '100', '2666', 0, '2021-03-10 06:30:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mechanic_info`
--

CREATE TABLE `mechanic_info` (
  `id` int(100) NOT NULL,
  `mech_name` varchar(255) DEFAULT NULL,
  `mech_alternative_no` varchar(255) DEFAULT NULL,
  `mech_email` varchar(255) DEFAULT NULL,
  `mech_gstin` varchar(255) DEFAULT NULL,
  `mech_contact_no` varchar(255) DEFAULT NULL,
  `mech_address` text,
  `mech_location` text,
  `mech_speciality` text,
  `mech_lat` varchar(255) DEFAULT NULL,
  `mech_long` varchar(255) DEFAULT NULL,
  `mech_id_proof` text,
  `mech_photo` text,
  `status` int(100) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mechanic_info`
--

INSERT INTO `mechanic_info` (`id`, `mech_name`, `mech_alternative_no`, `mech_email`, `mech_gstin`, `mech_contact_no`, `mech_address`, `mech_location`, `mech_speciality`, `mech_lat`, `mech_long`, `mech_id_proof`, `mech_photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mrutunjay Pani', '90876543421', 'mp@gmail.com', '123456', '7008095321', 'bbsr', 'patia', 'x', '', '', '12.jpg', '1.jpg', 1, '2021-02-20 07:54:54', NULL),
(2, 'jyoti', '3736337377', 'a@gmail.com', '62722', '90876545321', 'bbba', 'bbsr', 'hsjs', '', '', '20171207_100248.jpg', '20171207_100248.jpg', 1, '2021-02-20 07:58:02', NULL),
(3, 'Mithilesh Mohapatra', '08976543777', 'mithileshmohapatra@gmail.com', '123456', '79876567898', 'ctc', 'bbsr', '', NULL, NULL, '20171207_100440.jpg', '20171207_100248.jpg', 1, '2021-02-20 08:02:33', NULL),
(4, 'chico', '08976543777', 'chico@gmail.com', '123456', '08976543777', 'ctc', 'bbsr', '', NULL, NULL, '18.jpg', '13.jpg', 0, '2021-02-24 10:31:11', NULL),
(5, 'xyz', 'ghjkl', 'a@gmail.com', '1234567', '', 'bnjkl', '', '', '', '', '15.jpg', '16.jpg', 0, '2021-02-24 13:30:54', NULL),
(6, 'mm', '908909878', 'a@gmail.com', '12345', '23456789', 'bbba', 'vbnm', 'asd', '', '', '1.jpg', '12.jpg', 0, '2021-02-24 13:33:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mechanic_speciality`
--

CREATE TABLE `mechanic_speciality` (
  `id` int(100) NOT NULL,
  `speciality` varchar(255) DEFAULT NULL,
  `status` int(100) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mechanic_speciality`
--

INSERT INTO `mechanic_speciality` (`id`, `speciality`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Break Down', 1, '2021-02-03 10:15:33', NULL),
(2, 'ongoing', 0, '2021-02-24 11:31:02', '2021-02-24 11:31:02');

-- --------------------------------------------------------

--
-- Table structure for table `payment_info`
--

CREATE TABLE `payment_info` (
  `id` int(100) NOT NULL,
  `req_id` int(100) NOT NULL,
  `payment_amount` varchar(255) DEFAULT NULL,
  `bill_amount` varchar(255) DEFAULT NULL,
  `payment_type` varchar(255) DEFAULT NULL,
  `payment_details` text,
  `card` varchar(255) DEFAULT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `status` int(100) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service_type`
--

CREATE TABLE `service_type` (
  `id` int(11) NOT NULL,
  `service_type` varchar(111) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_type`
--

INSERT INTO `service_type` (`id`, `service_type`, `created_at`, `updated_at`, `status`) VALUES
(1, 'All', '2021-02-20 06:42:19', NULL, 0),
(2, 'Break Down', '2021-02-20 06:42:35', NULL, 1),
(3, 'Accidental Work', '2021-02-20 06:43:05', NULL, 1),
(4, 'Towing Service', '2021-02-20 06:43:25', NULL, 0),
(5, 'Other', '2021-02-20 06:43:33', NULL, 1),
(6, 'ffff', '2021-02-27 08:30:27', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `supplier_estimation`
--

CREATE TABLE `supplier_estimation` (
  `id` int(100) NOT NULL,
  `req_id` int(100) NOT NULL,
  `supp_id` int(100) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_price` varchar(255) DEFAULT NULL,
  `discount_percent` varchar(255) DEFAULT NULL,
  `discount_amount` varchar(255) DEFAULT NULL,
  `product_qty` varchar(255) DEFAULT NULL,
  `total_price` varchar(255) DEFAULT NULL,
  `gst_percent` varchar(255) DEFAULT NULL,
  `gst_amount` varchar(255) DEFAULT NULL,
  `grand_total` varchar(255) DEFAULT NULL,
  `status` int(100) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supplier_info`
--

CREATE TABLE `supplier_info` (
  `id` int(100) NOT NULL,
  `supp_name` varchar(255) DEFAULT NULL,
  `supp_alternative_no` varchar(255) DEFAULT NULL,
  `supp_email` varchar(255) DEFAULT NULL,
  `supp_gstin` varchar(255) DEFAULT NULL,
  `supp_contact_no` varchar(255) DEFAULT NULL,
  `supp_address` text,
  `supp_location` text,
  `supp_lat` varchar(255) DEFAULT NULL,
  `supp_long` varchar(255) DEFAULT NULL,
  `supp_id_proof` text,
  `supp_photo` text,
  `status` int(100) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier_info`
--

INSERT INTO `supplier_info` (`id`, `supp_name`, `supp_alternative_no`, `supp_email`, `supp_gstin`, `supp_contact_no`, `supp_address`, `supp_location`, `supp_lat`, `supp_long`, `supp_id_proof`, `supp_photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'jyoti', '08976543777', 'jyoti@gmail.com', '12345', '08976543777', 'bbba', 'bbsr', NULL, NULL, '18.jpg', '16.jpg', 0, '2021-02-24 08:13:16', NULL),
(2, 'Mithilesh Mohapatra', '08976543777', 'mm@gmail.com', '123456', '08976543777', 'bbba', 'bbsr', NULL, NULL, '16.jpg', '15.jpg', 1, '2021-02-24 10:37:55', NULL),
(3, 'Jivan Jyoti', '9087654323', 'jj@gmail.com', '123455', '9087654321', 'ctc', 'bbsr', NULL, NULL, '15.jpg', '16.jpg', 0, '2021-02-24 10:39:25', NULL),
(4, 'xyz', '1234567889', 'a@gmail.com', '134566', '23456789', 'bbba', 'bbsr', NULL, NULL, '15.jpg', '15.jpg', 1, '2021-02-24 13:31:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(11) NOT NULL,
  `user_type` varchar(111) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `user_type`, `created_at`, `updated_at`, `status`) VALUES
(5, 'p-user1', '2021-01-20 11:00:36', NULL, 0),
(6, 'm-user', '2021-01-20 11:23:55', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_type`
--

CREATE TABLE `vehicle_type` (
  `id` int(11) NOT NULL,
  `vehicle_type` varchar(111) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_type`
--

INSERT INTO `vehicle_type` (`id`, `vehicle_type`, `created_at`, `updated_at`, `status`) VALUES
(11, 'Two ', '2021-01-21 06:45:42', NULL, 0),
(12, 'Four', '2021-01-21 06:50:31', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bank_info`
--
ALTER TABLE `bank_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_req`
--
ALTER TABLE `booking_req`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_name`
--
ALTER TABLE `company_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cust_vehicle_info`
--
ALTER TABLE `cust_vehicle_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estimated_sheet`
--
ALTER TABLE `estimated_sheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `final_supplier_estimation`
--
ALTER TABLE `final_supplier_estimation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mechanic_info`
--
ALTER TABLE `mechanic_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mechanic_speciality`
--
ALTER TABLE `mechanic_speciality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_info`
--
ALTER TABLE `payment_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_type`
--
ALTER TABLE `service_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier_estimation`
--
ALTER TABLE `supplier_estimation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier_info`
--
ALTER TABLE `supplier_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bank_info`
--
ALTER TABLE `bank_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking_req`
--
ALTER TABLE `booking_req`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `company_name`
--
ALTER TABLE `company_name`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_info`
--
ALTER TABLE `customer_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cust_vehicle_info`
--
ALTER TABLE `cust_vehicle_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `estimated_sheet`
--
ALTER TABLE `estimated_sheet`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `final_supplier_estimation`
--
ALTER TABLE `final_supplier_estimation`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mechanic_info`
--
ALTER TABLE `mechanic_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mechanic_speciality`
--
ALTER TABLE `mechanic_speciality`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment_info`
--
ALTER TABLE `payment_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_type`
--
ALTER TABLE `service_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `supplier_estimation`
--
ALTER TABLE `supplier_estimation`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier_info`
--
ALTER TABLE `supplier_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 09, 2020 at 11:14 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `IM-MPLAY`
--

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE `Category` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `stock_id` int(11) NOT NULL,
  `items_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Cod`
--

CREATE TABLE `Cod` (
  `id` int(11) NOT NULL,
  `cod_code` int(11) NOT NULL,
  `request_code` varchar(255) NOT NULL,
  `grf_number` varchar(255) NOT NULL,
  `create_date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Cod`
--

INSERT INTO `Cod` (`id`, `cod_code`, `request_code`, `grf_number`, `create_date`, `status`) VALUES
(0, 1, 'REQ-1', '`001', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `conditions`
--

CREATE TABLE `conditions` (
  `condition_code` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `conversion`
--

CREATE TABLE `conversion` (
  `id` int(11) NOT NULL,
  `from_text` text NOT NULL,
  `to_text` text NOT NULL,
  `from_qty` int(255) NOT NULL,
  `to_qty` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `firewall_ips`
--

CREATE TABLE `firewall_ips` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `log_id` int(11) DEFAULT NULL,
  `blocked` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `firewall_ips`
--

INSERT INTO `firewall_ips` (`id`, `ip`, `log_id`, `blocked`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '::1', 4, 1, '2020-07-07 00:21:02', '2020-07-07 00:21:02', NULL),
(2, '::1', 5, 1, '2020-07-07 00:21:02', '2020-07-07 00:21:02', NULL),
(3, '::1', 17, 1, '2020-07-08 03:05:28', '2020-07-08 03:05:28', NULL),
(4, '::1', 22, 1, '2020-07-08 03:09:07', '2020-07-08 03:09:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `firewall_logs`
--

CREATE TABLE `firewall_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'medium',
  `middleware` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referrer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `request` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `firewall_logs`
--

INSERT INTO `firewall_logs` (`id`, `ip`, `level`, `middleware`, `user_id`, `url`, `referrer`, `request`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '::1', 'medium', 'login', 0, 'http://localhost/im/public/login', 'http://localhost/im/public/', '_token=jwHHaUO6lP9E4u8H0i1lYKnyVzaNbAmJlJv00gH5&email=admin@mail.com&password=******', '2020-07-07 00:20:57', '2020-07-07 00:20:57', NULL),
(2, '::1', 'medium', 'login', 0, 'http://localhost/im/public/login', 'http://localhost/im/public/', '_token=jwHHaUO6lP9E4u8H0i1lYKnyVzaNbAmJlJv00gH5&email=admin@mail.com&password=******', '2020-07-07 00:21:00', '2020-07-07 00:21:00', NULL),
(3, '::1', 'medium', 'login', 0, 'http://localhost/im/public/login', 'http://localhost/im/public/', '_token=jwHHaUO6lP9E4u8H0i1lYKnyVzaNbAmJlJv00gH5&email=admin@mail.com&password=******', '2020-07-07 00:21:02', '2020-07-07 00:21:02', NULL),
(4, '::1', 'medium', 'login', 0, 'http://localhost/im/public/login', 'http://localhost/im/public/', '_token=jwHHaUO6lP9E4u8H0i1lYKnyVzaNbAmJlJv00gH5&email=admin@mail.com&password=******', '2020-07-07 00:21:02', '2020-07-07 00:21:02', NULL),
(5, '::1', 'medium', 'login', 0, 'http://localhost/im/public/login', 'http://localhost/im/public/', '_token=jwHHaUO6lP9E4u8H0i1lYKnyVzaNbAmJlJv00gH5&email=admin@mail.com&password=******', '2020-07-07 00:21:02', '2020-07-07 00:21:02', NULL),
(6, '::1', 'medium', 'login', 0, 'http://localhost/im/public/login', 'http://localhost/im/public/', '_token=jwHHaUO6lP9E4u8H0i1lYKnyVzaNbAmJlJv00gH5&email=admin@mail.com&password=******', '2020-07-07 00:21:02', '2020-07-07 00:21:02', NULL),
(7, '::1', 'medium', 'login', 0, 'http://localhost/im/public/login', 'http://localhost/im/public/', '_token=jwHHaUO6lP9E4u8H0i1lYKnyVzaNbAmJlJv00gH5&email=admin@mail.com&password=******', '2020-07-07 00:21:02', '2020-07-07 00:21:02', NULL),
(8, '::1', 'medium', 'login', 0, 'http://localhost/im/public/login', 'http://localhost/im/public/', '_token=jwHHaUO6lP9E4u8H0i1lYKnyVzaNbAmJlJv00gH5&email=admin@mail.com&password=******', '2020-07-07 02:04:41', '2020-07-07 02:04:41', NULL),
(9, '::1', 'medium', 'login', 0, 'http://localhost/im/public/login', 'http://localhost/im/public/', '_token=jwHHaUO6lP9E4u8H0i1lYKnyVzaNbAmJlJv00gH5&email=admin@mail.com&password=******', '2020-07-07 02:05:36', '2020-07-07 02:05:36', NULL),
(10, '::1', 'medium', 'login', 0, 'http://localhost/im/public/login', 'http://localhost/im/public/login', '_token=jWEpmYZj0XfBVRVDLGf08Tyr0sBXfRZHegf1iKMe&email=admin@mail.com&password=******', '2020-07-07 02:33:03', '2020-07-07 02:33:03', NULL),
(11, '::1', 'medium', 'login', 0, 'http://localhost/im/public/login', 'http://localhost/im/public/login', '_token=jWEpmYZj0XfBVRVDLGf08Tyr0sBXfRZHegf1iKMe&email=admin@mail.com&password=******', '2020-07-07 02:33:03', '2020-07-07 02:33:03', NULL),
(12, '::1', 'medium', 'login', 0, 'http://localhost/im/public/login', 'http://localhost/im/public/login', '_token=jWEpmYZj0XfBVRVDLGf08Tyr0sBXfRZHegf1iKMe&email=admin@gmail.com&password=******', '2020-07-07 02:33:09', '2020-07-07 02:33:09', NULL),
(13, '::1', 'medium', 'login', 0, 'http://localhost/im/public/login', 'http://localhost/im/public/login', '_token=DsVfWd514sD8TPV7TpolsGIWGNfYEE3JG8udHP2f&email=irvslyy23@gmail.com&password=******', '2020-07-08 03:04:54', '2020-07-08 03:04:54', NULL),
(14, '::1', 'medium', 'login', 0, 'http://localhost/im/public/login', 'http://localhost/im/public/login', '_token=DsVfWd514sD8TPV7TpolsGIWGNfYEE3JG8udHP2f&email=irvslyy23@gmail.com&password=******', '2020-07-08 03:05:08', '2020-07-08 03:05:08', NULL),
(15, '::1', 'medium', 'login', 0, 'http://localhost/im/public/login', 'http://localhost/im/public/login', '_token=DsVfWd514sD8TPV7TpolsGIWGNfYEE3JG8udHP2f&email=irvslyy23@gmail.com&password=******', '2020-07-08 03:05:14', '2020-07-08 03:05:14', NULL),
(16, '::1', 'medium', 'login', 0, 'http://localhost/im/public/login', 'http://localhost/im/public/login', '_token=DsVfWd514sD8TPV7TpolsGIWGNfYEE3JG8udHP2f&email=irvslyy23@gmail.com&password=******', '2020-07-08 03:05:14', '2020-07-08 03:05:14', NULL),
(17, '::1', 'medium', 'login', 0, 'http://localhost/im/public/login', 'http://localhost/im/public/login', '_token=DsVfWd514sD8TPV7TpolsGIWGNfYEE3JG8udHP2f&email=irvslyy23@gmail.com&password=******', '2020-07-08 03:05:27', '2020-07-08 03:05:27', NULL),
(18, '::1', 'medium', 'login', 0, 'http://localhost/im/public/login', 'http://localhost/im/public/login', '_token=DsVfWd514sD8TPV7TpolsGIWGNfYEE3JG8udHP2f&email=irvslyy23@gmail.com&password=******', '2020-07-08 03:08:43', '2020-07-08 03:08:43', NULL),
(19, '::1', 'medium', 'login', 0, 'http://localhost/im/public/login', 'http://localhost/im/public/login', '_token=3CCQ1W2cAtJhslBhVBktKdOg5H2mPmofUSfFojAY&email=irvslyy23@gmail.com&password=******', '2020-07-08 03:08:56', '2020-07-08 03:08:56', NULL),
(20, '::1', 'medium', 'login', 0, 'http://localhost/im/public/login', 'http://localhost/im/public/login', '_token=3CCQ1W2cAtJhslBhVBktKdOg5H2mPmofUSfFojAY&email=irvslyy23@gmail.com&password=******', '2020-07-08 03:09:01', '2020-07-08 03:09:01', NULL),
(21, '::1', 'medium', 'login', 0, 'http://localhost/im/public/login', 'http://localhost/im/public/login', '_token=3CCQ1W2cAtJhslBhVBktKdOg5H2mPmofUSfFojAY&email=irvslyy23@gmail.com&password=******', '2020-07-08 03:09:07', '2020-07-08 03:09:07', NULL),
(22, '::1', 'medium', 'login', 0, 'http://localhost/im/public/login', 'http://localhost/im/public/login', '_token=3CCQ1W2cAtJhslBhVBktKdOg5H2mPmofUSfFojAY&email=irvslyy23@gmail.com&password=******', '2020-07-08 03:09:07', '2020-07-08 03:09:07', NULL),
(23, '::1', 'medium', 'login', 0, 'http://localhost/im/public/login', 'http://localhost/im/public/login', '_token=3CCQ1W2cAtJhslBhVBktKdOg5H2mPmofUSfFojAY&email=irvslyy23@gmail.com&password=******', '2020-07-08 03:12:13', '2020-07-08 03:12:13', NULL),
(24, '::1', 'medium', 'login', 0, 'http://localhost/im/public/login', 'http://localhost/im/public/login', '_token=3CCQ1W2cAtJhslBhVBktKdOg5H2mPmofUSfFojAY&email=irvslyy23@gmail.com&password=******', '2020-07-08 03:12:18', '2020-07-08 03:12:18', NULL),
(25, '::1', 'medium', 'login', 0, 'http://localhost/im/public/login', 'http://localhost/im/public/login', '_token=3CCQ1W2cAtJhslBhVBktKdOg5H2mPmofUSfFojAY&email=irvslyy23@gmail.com&password=******', '2020-07-08 03:12:21', '2020-07-08 03:12:21', NULL),
(26, '::1', 'medium', 'login', 0, 'http://localhost/im/public/login', 'http://localhost/im/public/login', '_token=EUNisBVMQV93EBKkV4tzd4v4yGGUunA84SNoDaMY&email=irvslyy23@gmail.com&password=******', '2020-07-08 03:13:52', '2020-07-08 03:13:52', NULL),
(27, '::1', 'medium', 'login', 0, 'http://localhost/im/public/login', 'http://localhost/im/public/', '_token=EUNisBVMQV93EBKkV4tzd4v4yGGUunA84SNoDaMY&email=irvslyy23@gmail.com&password=******', '2020-07-08 03:31:26', '2020-07-08 03:31:26', NULL),
(28, '::1', 'medium', 'login', 0, 'http://localhost/im/public/login', 'http://localhost/im/public/', '_token=EUNisBVMQV93EBKkV4tzd4v4yGGUunA84SNoDaMY&email=irvslyy23@gmail.com&password=******', '2020-07-08 03:31:30', '2020-07-08 03:31:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Grf`
--

CREATE TABLE `Grf` (
  `grf_number` int(11) NOT NULL,
  `heir_code` varchar(255) NOT NULL,
  `employee_number` varchar(255) NOT NULL,
  `access_code` varchar(255) NOT NULL,
  `create_date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Grf`
--

INSERT INTO `Grf` (`grf_number`, `heir_code`, `employee_number`, `access_code`, `create_date`, `status`) VALUES
(1, '1', '21', '221', '2', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `Items`
--

CREATE TABLE `Items` (
  `id` int(11) NOT NULL,
  `items_code` varchar(255) DEFAULT NULL,
  `product_code` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `qty` int(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `serial_number` varchar(255) DEFAULT NULL,
  `imei` varchar(255) DEFAULT NULL,
  `merk` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `production_year` varchar(255) DEFAULT NULL,
  `input_date` varchar(255) DEFAULT NULL,
  `output_date` varchar(255) DEFAULT NULL,
  `buy_price` varchar(255) DEFAULT NULL,
  `product_category` varchar(255) DEFAULT NULL,
  `status_product` varchar(255) DEFAULT NULL,
  `status_item` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Items`
--

INSERT INTO `Items` (`id`, `items_code`, `product_code`, `product_name`, `qty`, `unit`, `serial_number`, `imei`, `merk`, `color`, `production_year`, `input_date`, `output_date`, `buy_price`, `product_category`, `status_product`, `status_item`) VALUES
(188, 'HJKS3', '2132', 'INLINE CLOSURE - 264 CORE', 15, NULL, '12312342', '123213123', 'HUAWAI', 'Merah', '2019', '05-03-2020', NULL, 'Rp. 500000', 'Terpakai', NULL, NULL),
(189, 'HJKS4', '2', 'INLINE CLOSURE - 48 CORE', NULL, NULL, '12312342', '123213123', 'HUAWAI', 'Merah', '2020', '05-03-2020', NULL, 'Rp. 500000', 'Terpakai', NULL, NULL),
(190, 'HJKS5', '2', 'INLINE CLOSURE - 96 CORE', NULL, NULL, '12312342', '123213123', 'HUAWAI', 'Merah', '2017', '05-03-2020', NULL, 'Rp. 500000', 'Terpakai', NULL, NULL),
(191, 'HJKS6', '2', 'INLINE CLOSURE - 24 CORE', NULL, NULL, '12312342', '123213123', 'HUAWAI', 'Merah', '2018', '05-03-2020', NULL, 'Rp. 500000', 'Terpakai', NULL, NULL),
(192, 'HJKS3', '2', 'INLINE CLOSURE - 264 CORE', NULL, NULL, '12312342', '123213123', 'HUAWAI', 'Merah', '2019', '05-03-2020', NULL, 'Rp. 500000', 'Terpakai', NULL, NULL),
(193, 'HJKS4', '2', 'INLINE CLOSURE - 48 CORE', NULL, NULL, '12312342', '123213123', 'HUAWAI', 'Merah', '2020', '05-03-2020', NULL, 'Rp. 500000', 'Terpakai', NULL, NULL),
(194, 'HJKS5', '2', 'INLINE CLOSURE - 96 CORE', NULL, NULL, '12312342', '123213123', 'HUAWAI', 'Merah', '2017', '05-03-2020', NULL, 'Rp. 500000', 'Terpakai', NULL, NULL),
(195, 'HJKS6', '2', 'INLINE CLOSURE - 24 CORE', NULL, NULL, '12312342', '123213123', 'HUAWAI', 'Merah', '2018', '05-03-2020', NULL, 'Rp. 500000', 'Terpakai', NULL, NULL),
(196, 'HJKS3', '2', 'INLINE CLOSURE - 264 CORE', NULL, NULL, '12312342', '123213123', 'HUAWAI', 'Merah', '2019', '05-03-2020', NULL, 'Rp. 500000', 'Terpakai', NULL, NULL),
(197, 'HJKS4', '2', 'INLINE CLOSURE - 48 CORE', NULL, NULL, '12312342', '123213123', 'HUAWAI', 'Merah', '2020', '05-03-2020', NULL, 'Rp. 500000', 'Terpakai', NULL, NULL),
(198, 'HJKS5', '2', 'INLINE CLOSURE - 96 CORE', NULL, NULL, '12312342', '123213123', 'HUAWAI', 'Merah', '2017', '05-03-2020', NULL, 'Rp. 500000', 'Terpakai', NULL, NULL),
(199, 'HJKS6', '2', 'INLINE CLOSURE - 24 CORE', NULL, NULL, '12312342', '123213123', 'HUAWAI', 'Merah', '2018', '05-03-2020', NULL, 'Rp. 500000', 'Terpakai', NULL, NULL),
(200, 'HJKS3', '2', 'INLINE CLOSURE - 264 CORE', NULL, NULL, '12312342', '123213123', 'HUAWAI', 'Merah', '2019', '05-03-2020', NULL, 'Rp. 500000', 'Terpakai', NULL, NULL),
(201, 'HJKS4', '2', 'INLINE CLOSURE - 48 CORE', NULL, NULL, '12312342', '123213123', 'HUAWAI', 'Merah', '2020', '05-03-2020', NULL, 'Rp. 500000', 'Terpakai', NULL, NULL),
(202, 'HJKS5', '2', 'INLINE CLOSURE - 96 CORE', NULL, NULL, '12312342', '123213123', 'HUAWAI', 'Merah', '2017', '05-03-2020', NULL, 'Rp. 500000', 'Terpakai', NULL, NULL),
(203, 'HJKS6', '2', 'INLINE CLOSURE - 24 CORE', NULL, NULL, '12312342', '123213123', 'HUAWAI', 'Merah', '2018', '05-03-2020', NULL, 'Rp. 500000', 'Terpakai', NULL, NULL),
(204, 'HJKS3', '2', 'INLINE CLOSURE - 264 CORE', NULL, NULL, '12312342', '123213123', 'HUAWAI', 'Merah', '2019', '05-03-2020', NULL, 'Rp. 500000', 'Terpakai', NULL, NULL),
(205, 'HJKS4', '2', 'INLINE CLOSURE - 48 CORE', NULL, NULL, '12312342', '123213123', 'HUAWAI', 'Merah', '2020', '05-03-2020', NULL, 'Rp. 500000', 'Terpakai', NULL, NULL),
(206, 'HJKS5', '2', 'INLINE CLOSURE - 96 CORE', NULL, NULL, '12312342', '123213123', 'HUAWAI', 'Merah', '2017', '05-03-2020', NULL, 'Rp. 500000', 'Terpakai', NULL, NULL),
(207, 'HJKS6', '2', 'INLINE CLOSURE - 24 CORE', NULL, NULL, '12312342', '123213123', 'HUAWAI', 'Merah', '2018', '05-03-2020', NULL, 'Rp. 500000', 'Terpakai', NULL, NULL),
(208, 'HJKS3', '2', 'INLINE CLOSURE - 264 CORE', NULL, NULL, '12312342', '123213123', 'HUAWAI', 'Merah', '2019', '05-03-2020', NULL, 'Rp. 500000', 'Terpakai', NULL, NULL),
(209, 'HJKS4', '2', 'INLINE CLOSURE - 48 CORE', NULL, NULL, '12312342', '123213123', 'HUAWAI', 'Merah', '2020', '05-03-2020', NULL, 'Rp. 500000', 'Terpakai', NULL, NULL),
(210, 'HJKS5', '2', 'INLINE CLOSURE - 96 CORE', NULL, NULL, '12312342', '123213123', 'HUAWAI', 'Merah', '2017', '05-03-2020', NULL, 'Rp. 500000', 'Terpakai', NULL, NULL),
(211, 'HJKS6', '2', 'INLINE CLOSURE - 24 CORE', NULL, NULL, '12312342', '123213123', 'HUAWAI', 'Merah', '2018', '05-03-2020', NULL, 'Rp. 500000', 'Terpakai', NULL, NULL),
(212, 'HJKS3', '2', 'INLINE CLOSURE - 264 CORE', NULL, NULL, '12312342', '123213123', 'HUAWAI', 'Merah', '2019', '05-03-2020', NULL, 'Rp. 500000', 'Terpakai', NULL, NULL),
(213, 'HJKS4', '2', 'INLINE CLOSURE - 48 CORE', NULL, NULL, '12312342', '123213123', 'HUAWAI', 'Merah', '2020', '05-03-2020', NULL, 'Rp. 500000', 'Terpakai', NULL, NULL),
(214, 'HJKS5', '2', 'INLINE CLOSURE - 96 CORE', NULL, NULL, '12312342', '123213123', 'HUAWAI', 'Merah', '2017', '05-03-2020', NULL, 'Rp. 500000', 'Terpakai', NULL, NULL),
(215, 'HJKS6', '2', 'INLINE CLOSURE - 24 CORE', NULL, NULL, '12312342', '123213123', 'HUAWAI', 'Merah', '2018', '05-03-2020', NULL, 'Rp. 500000', 'Terpakai', NULL, NULL),
(216, 'HJKS3', '2', 'INLINE CLOSURE - 264 CORE', NULL, NULL, '12312342', '123213123', 'HUAWAI', 'Merah', '2019', '05-03-2020', NULL, 'Rp. 500000', 'Terpakai', NULL, NULL),
(217, 'HJKS4', '2', 'INLINE CLOSURE - 48 CORE', NULL, NULL, '12312342', '123213123', 'HUAWAI', 'Merah', '2020', '05-03-2020', NULL, 'Rp. 500000', 'Terpakai', NULL, NULL),
(218, 'HJKS5', '2', 'INLINE CLOSURE - 96 CORE', NULL, NULL, '12312342', '123213123', 'HUAWAI', 'Merah', '2017', '05-03-2020', NULL, 'Rp. 500000', 'Terpakai', NULL, NULL),
(219, 'HJKS6', '2', 'INLINE CLOSURE - 24 CORE', NULL, NULL, '12312342', '123213123', 'HUAWAI', 'Merah', '2018', '05-03-2020', NULL, 'Rp. 500000', 'Terpakai', NULL, NULL),
(323, 'HJKS4', '2', 'Pasir', 1, 'KUBIC', '12312342', '123213123', 'HUAWAI', 'Merah', '2018', '23-06-2020', NULL, 'Rp. 500000', 'Terpakai', NULL, NULL),
(324, 'HJKS4', '2', 'Pasir', 1, 'KUBIC', '12312342', '123213123', 'HUAWAI', 'Merah', '2018', '23-06-2020', NULL, 'Rp. 500000', 'Terpakai', NULL, NULL),
(325, 'HJKS4', '2', 'Pasir', 1, 'KUBIC', '12312342', '123213123', 'HUAWAI', 'Merah', '2018', '23-06-2020', NULL, 'Rp. 500000', 'Terpakai', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Logistic`
--

CREATE TABLE `Logistic` (
  `id` int(11) NOT NULL,
  `logistic_number` int(11) NOT NULL,
  `cod_number` varchar(255) NOT NULL,
  `shipping_number` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_06_25_162017_create_products_table', 2),
(5, '2020_06_29_084031_create_testing_table', 2),
(6, '2019_07_15_000000_create_firewall_ips_table', 3),
(7, '2019_07_15_000000_create_firewall_logs_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Request`
--

CREATE TABLE `Request` (
  `id` int(11) NOT NULL,
  `request_code` int(11) DEFAULT NULL,
  `request_list` int(225) NOT NULL,
  `stock_code` int(11) NOT NULL,
  `items_code` int(11) NOT NULL,
  `wh_code` int(11) NOT NULL,
  `product_code` int(11) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` varchar(225) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Request`
--

INSERT INTO `Request` (`id`, `request_code`, `request_list`, `stock_code`, `items_code`, `wh_code`, `product_code`, `product_name`, `qty`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 169, 188, 1, 2132, 'INLINE CLOSURE - 264 CORE', 1, 'pending', '2020-07-09 03:55:59', '2020-07-09 03:55:59');

-- --------------------------------------------------------

--
-- Table structure for table `segment`
--

CREATE TABLE `segment` (
  `id` int(11) NOT NULL,
  `segment_name` varchar(255) NOT NULL,
  `qty` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `segment`
--

INSERT INTO `segment` (`id`, `segment_name`, `qty`) VALUES
(5, 'INLINE CLOSURE', 'Unit');

-- --------------------------------------------------------

--
-- Table structure for table `Shipping`
--

CREATE TABLE `Shipping` (
  `shipping_number` int(11) NOT NULL,
  `req_code` varchar(255) NOT NULL,
  `gerf_number` varchar(255) NOT NULL,
  `create_date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `segment_code` int(11) DEFAULT NULL,
  `items_code` varchar(255) DEFAULT NULL,
  `vendor_code` int(111) DEFAULT NULL,
  `wh_code` int(11) DEFAULT NULL,
  `condition_code` int(11) DEFAULT NULL,
  `storage_code` int(11) DEFAULT NULL,
  `update_date` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `segment_code`, `items_code`, `vendor_code`, `wh_code`, `condition_code`, `storage_code`, `update_date`, `status`) VALUES
(169, 5, '188', 4, 1, NULL, NULL, NULL, NULL),
(170, 5, '189', 4, NULL, NULL, NULL, NULL, NULL),
(171, 5, '190', 4, NULL, NULL, NULL, NULL, NULL),
(172, 5, '191', 4, 1231238, NULL, 8, '05-03-2020', NULL),
(173, 5, '192', 4, NULL, NULL, NULL, NULL, NULL),
(174, 5, '193', 4, NULL, NULL, NULL, NULL, NULL),
(175, 5, '194', 4, NULL, NULL, NULL, NULL, NULL),
(176, 5, '195', 4, 1231238, NULL, 8, '05-03-2020', NULL),
(177, 5, '196', 4, NULL, NULL, NULL, NULL, NULL),
(178, 5, '197', 4, NULL, NULL, NULL, NULL, NULL),
(179, 5, '198', 4, NULL, NULL, NULL, NULL, NULL),
(180, 5, '199', 4, 1231238, NULL, 8, '05-03-2020', NULL),
(181, 5, '200', 4, NULL, NULL, NULL, NULL, NULL),
(182, 5, '201', 4, NULL, NULL, NULL, NULL, NULL),
(183, 5, '202', 4, NULL, NULL, NULL, NULL, NULL),
(184, 5, '203', 4, 1231238, NULL, 8, '05-03-2020', NULL),
(185, 5, '204', 4, NULL, NULL, NULL, NULL, NULL),
(186, 5, '205', 4, NULL, NULL, NULL, NULL, NULL),
(187, 5, '206', 4, NULL, NULL, NULL, NULL, NULL),
(188, 5, '207', 4, 1231238, NULL, 9, '01-04-2020', NULL),
(189, 5, '208', 4, NULL, NULL, NULL, NULL, NULL),
(190, 5, '209', 4, NULL, NULL, NULL, NULL, NULL),
(191, 5, '210', 4, NULL, NULL, NULL, NULL, NULL),
(192, 5, '211', 4, 1231238, NULL, 9, '01-04-2020', NULL),
(193, 5, '212', 4, NULL, NULL, NULL, NULL, NULL),
(194, 5, '213', 4, NULL, NULL, NULL, NULL, NULL),
(195, 5, '214', 4, NULL, NULL, NULL, NULL, NULL),
(196, 5, '215', 4, NULL, NULL, NULL, NULL, NULL),
(197, 5, '216', 4, NULL, NULL, NULL, NULL, NULL),
(198, 5, '217', 4, NULL, NULL, NULL, NULL, NULL),
(199, 5, '218', 4, NULL, NULL, NULL, NULL, NULL),
(200, 5, '219', 4, NULL, NULL, NULL, NULL, NULL),
(304, NULL, '323', 4, NULL, NULL, NULL, NULL, NULL),
(305, NULL, '324', 4, NULL, NULL, NULL, NULL, NULL),
(306, NULL, '325', 4, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `storage`
--

CREATE TABLE `storage` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `wh_code` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `storage`
--

INSERT INTO `storage` (`id`, `name`, `color`, `location`, `wh_code`, `status`) VALUES
(8, 'Storage 1', 'red', NULL, 1231238, NULL),
(9, 'STORAGE 2', 'RED', NULL, 1231238, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE `testing` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `testing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin IM', 'admin@gmail.com', NULL, '$2y$12$cL98l.l7TgAWlw3KupKyl.Oe5IUMHcXZpZo1XPvFU3rP8BCpRIY4m', NULL, '2020-02-12 02:30:14', '2020-02-12 02:30:14'),
(2, 'irvslyy', 'irvslyy23@gmail.com', '2020-06-21 20:07:00', '$2y$10$ouHCUYRh7RiU0cUHAKdFO.3MfbW90xynQsjNbPvUPWXTh9ji5BtOm', NULL, '2020-06-21 20:07:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` int(11) NOT NULL,
  `vendor_name` varchar(255) NOT NULL,
  `vendor_contract` varchar(255) NOT NULL,
  `start_contract` varchar(255) NOT NULL,
  `end_contract` varchar(255) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `vendor_name`, `vendor_contract`, `start_contract`, `end_contract`, `status`) VALUES
(4, 'TES', 'TES', 'TES', 'TES', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

CREATE TABLE `warehouse` (
  `id` int(11) NOT NULL,
  `wh_name` varchar(255) NOT NULL,
  `regional` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `wh_type` varchar(255) NOT NULL,
  `contract_status` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`id`, `wh_name`, `regional`, `location`, `wh_type`, `contract_status`, `start_date`, `end_date`, `status`) VALUES
(1, 'Warehouses jakarta', 'jakarta barat', 'jalan raya', 'Gudang', '08888888888', '01-03-2013', '10-03-2022', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Cod`
--
ALTER TABLE `Cod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conditions`
--
ALTER TABLE `conditions`
  ADD PRIMARY KEY (`condition_code`);

--
-- Indexes for table `conversion`
--
ALTER TABLE `conversion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `firewall_ips`
--
ALTER TABLE `firewall_ips`
  ADD PRIMARY KEY (`id`),
  ADD KEY `firewall_ips_ip_index` (`ip`);

--
-- Indexes for table `firewall_logs`
--
ALTER TABLE `firewall_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `firewall_logs_ip_index` (`ip`);

--
-- Indexes for table `Grf`
--
ALTER TABLE `Grf`
  ADD PRIMARY KEY (`grf_number`);

--
-- Indexes for table `Items`
--
ALTER TABLE `Items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Logistic`
--
ALTER TABLE `Logistic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Request`
--
ALTER TABLE `Request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `segment`
--
ALTER TABLE `segment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Shipping`
--
ALTER TABLE `Shipping`
  ADD PRIMARY KEY (`shipping_number`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storage`
--
ALTER TABLE `storage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testing`
--
ALTER TABLE `testing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warehouse`
--
ALTER TABLE `warehouse`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Category`
--
ALTER TABLE `Category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `conditions`
--
ALTER TABLE `conditions`
  MODIFY `condition_code` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `conversion`
--
ALTER TABLE `conversion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `firewall_ips`
--
ALTER TABLE `firewall_ips`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `firewall_logs`
--
ALTER TABLE `firewall_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `Grf`
--
ALTER TABLE `Grf`
  MODIFY `grf_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Items`
--
ALTER TABLE `Items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=326;

--
-- AUTO_INCREMENT for table `Logistic`
--
ALTER TABLE `Logistic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Request`
--
ALTER TABLE `Request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `segment`
--
ALTER TABLE `segment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Shipping`
--
ALTER TABLE `Shipping`
  MODIFY `shipping_number` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=307;

--
-- AUTO_INCREMENT for table `storage`
--
ALTER TABLE `storage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `testing`
--
ALTER TABLE `testing`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `warehouse`
--
ALTER TABLE `warehouse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1231240;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

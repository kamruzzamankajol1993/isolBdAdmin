-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2024 at 08:38 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isolbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutusaccrediations`
--

CREATE TABLE `aboutusaccrediations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `des` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutusaccrediations`
--

INSERT INTO `aboutusaccrediations` (`id`, `title`, `des`, `image`, `created_at`, `updated_at`) VALUES
(1, NULL, '<p>ytytytty</p>', NULL, '2022-08-01 02:55:23', '2022-08-01 02:55:27');

-- --------------------------------------------------------

--
-- Table structure for table `aboutusexperties`
--

CREATE TABLE `aboutusexperties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `des` text DEFAULT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aboutusexpertiesbigs`
--

CREATE TABLE `aboutusexpertiesbigs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `des` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutusexpertiesbigs`
--

INSERT INTO `aboutusexpertiesbigs` (`id`, `des`, `created_at`, `updated_at`) VALUES
(1, '<p>dwqweq33</p>', '2022-08-01 03:37:56', '2022-08-01 03:38:01');

-- --------------------------------------------------------

--
-- Table structure for table `aboutusservices`
--

CREATE TABLE `aboutusservices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `des` text DEFAULT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutusservices`
--

INSERT INTO `aboutusservices` (`id`, `title`, `des`, `image`, `created_at`, `updated_at`) VALUES
(1, 'ee1', '<p>eee1</p>', 'ri-discuss-line icon', '2022-08-01 03:05:52', '2022-08-01 03:06:29');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ward_id` int(100) DEFAULT NULL,
  `staff_id` varchar(100) DEFAULT NULL,
  `staff_main_id` varchar(100) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `image` text DEFAULT NULL,
  `status` int(20) DEFAULT 1,
  `cstatus` int(11) DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `ward_id`, `staff_id`, `staff_main_id`, `name`, `email`, `phone`, `username`, `email_verified_at`, `password`, `image`, `status`, `cstatus`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, '4004', NULL, 'superadmin', 'superadmin@gmail.com', NULL, 'superadmin', NULL, '$2y$10$P7XKbcdy.V46KeuF1PljgOoXXfAQvqjuZkPg71AyMlNUkdcWbBXjS', 'user-photo/1645269974.jpg', 1, 5, 'XmKAZzGMxyEqhEkWT5dWStqrfdF9n4fkpa6HXXlsJb2okZcExrduOQzQl3Q8', '2021-03-24 05:29:53', '2022-02-19 05:26:14'),
(2, NULL, NULL, NULL, 'admin', 'admin@gmail.com', NULL, NULL, NULL, '$2y$10$oKyZWZD/FsdnA47iBH36hO6pWRTwXVf.kQiOUyaPlu.xY7ZE4beW6', NULL, 1, 5, NULL, '2021-03-24 06:14:00', '2021-03-24 06:14:00'),
(40, NULL, NULL, NULL, 'নতুন এনজিও', 'kkajol428@gmail.com', NULL, 'ntun-enjioo', NULL, '$2y$10$6CWE1QOeMd7NQBnSXluNA.ZBQHF9QITWKKQSePX3evQ7ylgFCKOTe', NULL, 1, 0, NULL, '2024-03-04 00:43:55', '2024-03-04 00:43:55'),
(41, NULL, NULL, '2', 'Mizan Islam', 'soqkd@nlik.com', NULL, 'mizan-islam', NULL, '$2y$10$PMCIBFNCF34GrHRpaWI2muqWnkMBj.8k4/D2DG8u0B0eyQ/EW/9mq', NULL, 1, 0, NULL, '2024-03-04 13:37:20', '2024-03-04 13:37:20');

-- --------------------------------------------------------

--
-- Table structure for table `big_fives`
--

CREATE TABLE `big_fives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `des` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `big_fives`
--

INSERT INTO `big_fives` (`id`, `des`, `created_at`, `updated_at`) VALUES
(1, '<p>ssssss</p>', '2022-07-29 07:18:20', '2022-07-29 07:18:24');

-- --------------------------------------------------------

--
-- Table structure for table `big_others`
--

CREATE TABLE `big_others` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `des` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `big_others`
--

INSERT INTO `big_others` (`id`, `title`, `des`, `created_at`, `updated_at`) VALUES
(1, 'q', 'qw', '2022-07-29 07:30:01', '2022-07-29 07:30:01');

-- --------------------------------------------------------

--
-- Table structure for table `employeereviews`
--

CREATE TABLE `employeereviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `des` text DEFAULT NULL,
  `desig` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employeereviews`
--

INSERT INTO `employeereviews` (`id`, `title`, `des`, `desig`, `created_at`, `updated_at`) VALUES
(1, 'ee', '<p>e33</p>', 'eeee', '2022-07-30 00:56:55', '2022-07-30 00:57:09');

-- --------------------------------------------------------

--
-- Table structure for table `employerreviews`
--

CREATE TABLE `employerreviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `des` text DEFAULT NULL,
  `desig` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employerreviews`
--

INSERT INTO `employerreviews` (`id`, `title`, `des`, `desig`, `created_at`, `updated_at`) VALUES
(1, '112', '112', '112', '2022-07-30 00:57:27', '2022-07-30 00:58:12');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `headlines`
--

CREATE TABLE `headlines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `headlines`
--

INSERT INTO `headlines` (`id`, `title`, `created_at`, `updated_at`) VALUES
(2, 'ghj', '2022-07-29 06:25:21', '2022-07-29 06:25:21');

-- --------------------------------------------------------

--
-- Table structure for table `how_it_works`
--

CREATE TABLE `how_it_works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `des` text DEFAULT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `how_it_works`
--

INSERT INTO `how_it_works` (`id`, `des`, `image`, `created_at`, `updated_at`) VALUES
(1, '<p>grtert</p>', 'public/uploads/1659293868.jpg', '2022-08-01 01:57:48', '2022-08-01 01:57:48');

-- --------------------------------------------------------

--
-- Table structure for table `jobcategories`
--

CREATE TABLE `jobcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobcategories`
--

INSERT INTO `jobcategories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(7, 'CRUISESHIP', '2022-10-16 20:20:40', '2022-10-16 20:20:40'),
(8, 'MEGAYACHT', '2022-10-16 20:20:58', '2022-10-16 20:20:58'),
(9, 'RIVER CRUISE', '2022-10-16 20:21:06', '2022-10-16 20:21:06'),
(10, 'MARCHANT NAVY', '2022-10-16 20:21:16', '2022-10-16 20:21:16'),
(11, 'OFFSHORE', '2022-10-16 20:21:24', '2022-10-16 20:21:24'),
(12, 'HOTEL & RESORT', '2022-10-16 20:21:35', '2022-10-16 20:21:35'),
(13, 'CHARTERED CREW', '2022-10-16 20:21:43', '2022-10-16 20:21:43'),
(14, 'HOUSEHOLD BUTLER', '2022-10-16 20:22:06', '2022-10-16 20:22:06'),
(15, 'Chamical Tanker', '2022-10-16 20:22:52', '2022-10-16 20:22:52'),
(16, 'Container SHIP', '2022-10-16 20:23:02', '2022-10-16 20:23:02'),
(17, 'Crewboat', '2022-10-16 20:23:12', '2022-10-16 20:23:12'),
(18, 'General Cargo', '2022-10-16 20:23:20', '2022-10-16 20:23:20'),
(19, 'Tugboat', '2022-10-16 20:23:30', '2022-10-16 20:23:30'),
(20, 'Bulk Carrier', '2022-10-16 20:23:39', '2022-10-16 20:23:39'),
(21, 'High Speed Craft', '2022-10-16 20:24:16', '2022-10-16 20:24:16'),
(22, 'LPG Carrier', '2022-10-16 20:24:25', '2022-10-16 20:24:25'),
(23, 'Tanker-Crude', '2022-10-16 20:24:34', '2022-10-16 20:24:34'),
(24, 'Tanker-Product', '2022-10-16 20:24:44', '2022-10-16 20:24:44'),
(25, 'Tanker-VLCC / ULCC', '2022-10-16 20:24:51', '2022-10-16 20:24:51'),
(26, 'Vehicle Carrier', '2022-10-16 20:25:00', '2022-10-16 20:25:00'),
(27, 'Pasenger Ferry', '2022-10-16 20:25:35', '2022-10-16 20:25:35'),
(28, 'Pasenger Ship', '2022-10-16 20:25:43', '2022-10-16 20:25:43'),
(29, 'Offshore Support Vessel', '2022-10-16 20:25:50', '2022-10-16 20:25:50'),
(30, 'SHIPYARD', '2022-10-16 20:26:12', '2022-10-16 20:26:12'),
(31, 'CORPORATE / LAND BASED JOBS', '2022-10-16 20:26:32', '2022-10-16 20:26:32'),
(32, 'Scrapship For Sale', '2022-10-16 20:26:41', '2022-10-16 20:26:41'),
(33, 'CHARTERED SHIP', '2022-10-16 20:26:51', '2022-10-16 20:26:51'),
(34, 'CHARTERED PRIVATE JET', '2022-10-16 20:27:02', '2022-10-16 20:27:02'),
(35, 'PORT-MEANING SERVICES', '2022-10-16 20:27:15', '2022-10-16 20:27:15');

-- --------------------------------------------------------

--
-- Table structure for table `jobdepartments`
--

CREATE TABLE `jobdepartments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `cat_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobdepartments`
--

INSERT INTO `jobdepartments` (`id`, `name`, `cat_id`, `created_at`, `updated_at`) VALUES
(8, 'ART SALES', 'CRUISESHIP', '2022-10-16 20:29:34', '2022-10-16 20:29:34'),
(9, 'BEAUTY / SPA / FITNESS JOBS', 'CRUISESHIP', '2022-10-16 20:29:52', '2022-10-16 20:29:52'),
(10, 'INTERIOR JOB', 'MEGAYACHT', '2022-10-16 20:31:31', '2022-10-16 20:31:31'),
(11, 'CULINARY / KITCHEN', 'MEGAYACHT', '2022-10-16 20:31:52', '2022-10-16 20:31:52'),
(12, 'BEAUTY / SPA / FITNESS', 'RIVER CRUISE', '2022-10-16 20:32:50', '2022-10-16 20:32:50'),
(13, 'CULINARY / KITCHEN', 'RIVER CRUISE', '2022-10-16 20:33:04', '2022-10-16 20:33:04'),
(14, 'CULINARY / KITCHEN', 'MARCHANT NAVY', '2022-10-16 20:33:20', '2022-10-16 20:33:20'),
(15, 'DECK', 'MARCHANT NAVY', '2022-10-16 20:33:33', '2022-10-16 20:33:33'),
(16, 'ADMINISTRATION', 'OFFSHORE', '2022-10-16 20:34:22', '2022-10-16 20:34:22'),
(17, 'ENGINEERING', 'OFFSHORE', '2022-10-16 20:34:42', '2022-10-16 20:34:42'),
(18, 'FRONT DESK', 'HOTEL & RESORT', '2022-10-16 20:35:01', '2022-10-16 20:35:01'),
(19, 'EVANT PLANNER', 'HOTEL & RESORT', '2022-10-16 20:35:19', '2022-10-16 20:35:19'),
(20, 'PRIVATE JET', 'CHARTERED CREW', '2022-10-16 20:36:26', '2022-10-16 20:36:26'),
(21, 'PRIVATE YACHT', 'CHARTERED CREW', '2022-10-16 20:36:42', '2022-10-16 20:36:42'),
(22, 'CULINARY / KITCHEN', 'HOUSEHOLD BUTLER', '2022-10-16 20:37:05', '2022-10-16 20:37:05'),
(23, 'ADMINISTRATION', 'PORT-MEANING SERVICES', '2022-10-16 20:37:15', '2022-10-16 20:37:15'),
(24, 'DECK', 'Chamical Tanker', '2022-10-16 20:37:37', '2022-10-16 20:37:37'),
(25, 'RATINGS', 'Chamical Tanker', '2022-10-16 20:37:50', '2022-10-16 20:37:50'),
(26, 'DECK', 'Container SHIP', '2022-10-16 20:38:07', '2022-10-16 20:38:07'),
(27, 'RATINGS', 'Container SHIP', '2022-10-16 20:38:28', '2022-10-16 20:38:28'),
(28, 'DECK', 'Crewboat', '2022-10-16 20:38:57', '2022-10-16 20:39:24'),
(29, 'RATINGS', 'Crewboat', '2022-10-16 20:39:15', '2022-10-16 20:39:15'),
(30, 'DECK', 'General Cargo', '2022-10-16 20:39:41', '2022-10-16 20:39:41'),
(31, 'RATINGS', 'General Cargo', '2022-10-16 20:39:50', '2022-10-16 20:40:00'),
(32, 'DECK', 'Tugboat', '2022-10-16 20:44:22', '2022-10-16 20:44:22'),
(33, 'DECK', 'Bulk Carrier', '2022-10-16 20:44:42', '2022-10-16 20:44:42'),
(34, 'RATINGS', 'Bulk Carrier', '2022-10-16 20:44:55', '2022-10-16 20:44:55'),
(35, 'DECK', 'High Speed Craft', '2022-10-16 20:45:07', '2022-10-16 20:45:07'),
(36, 'RATINGS', 'High Speed Craft', '2022-10-16 20:45:23', '2022-10-16 20:45:34'),
(37, 'DECK', 'LPG Carrier', '2022-10-16 20:45:52', '2022-10-16 20:45:52'),
(38, 'RATINGS', 'LPG Carrier', '2022-10-16 20:46:06', '2022-10-16 20:46:06'),
(39, 'DECK', 'Tanker-Crude', '2022-10-16 20:46:26', '2022-10-16 20:46:26'),
(40, 'RATINGS', 'Tanker-Crude', '2022-10-16 20:46:38', '2022-10-16 20:46:38'),
(41, 'DECK', 'Tanker-Product', '2022-10-16 20:47:45', '2022-10-16 20:47:45'),
(42, 'RATINGS', 'Tanker-Product', '2022-10-16 20:47:57', '2022-10-16 20:47:57'),
(43, 'DECK', 'Tanker-VLCC / ULCC', '2022-10-16 20:48:26', '2022-10-16 20:48:26'),
(44, 'RATINGS', 'Tanker-VLCC / ULCC', '2022-10-16 20:48:36', '2022-10-16 20:48:36'),
(45, 'DECK', 'Vehicle Carrier', '2022-10-16 20:49:12', '2022-10-16 20:49:12'),
(46, 'RATINGS', 'Vehicle Carrier', '2022-10-16 20:49:37', '2022-10-16 20:49:37'),
(47, 'DECK', 'Pasenger Ferry', '2022-10-16 20:49:51', '2022-10-16 20:49:51'),
(48, 'RATINGS', 'Pasenger Ferry', '2022-10-16 20:49:59', '2022-10-16 20:49:59'),
(49, 'RATINGS', 'Pasenger Ship', '2022-10-16 20:50:09', '2022-10-16 20:50:09'),
(50, 'DECK', 'Pasenger Ship', '2022-10-16 20:50:34', '2022-10-16 20:50:34'),
(51, 'DECK', 'Offshore Support Vessel', '2022-10-16 20:50:52', '2022-10-16 20:51:15'),
(52, 'RATINGS', 'Offshore Support Vessel', '2022-10-16 20:51:08', '2022-10-16 20:51:08'),
(53, 'DECK', 'SHIPYARD', '2022-10-16 20:51:27', '2022-10-16 20:51:27'),
(54, 'RATINGS', 'SHIPYARD', '2022-10-16 20:51:39', '2022-10-16 20:51:39'),
(55, 'ADMINISTRATION', 'CORPORATE / LAND BASED JOBS', '2022-10-16 20:52:04', '2022-10-16 20:52:04'),
(56, 'CUSTOMER SERVICE/CALL CENTER', 'CORPORATE / LAND BASED JOBS', '2022-10-16 20:52:14', '2022-10-16 20:52:14'),
(57, 'CULINARY / KITCHEN', 'CRUISESHIP', '2022-10-17 11:47:10', '2022-10-17 11:47:10'),
(58, 'DECK', 'CRUISESHIP', '2022-10-17 11:47:42', '2022-10-17 11:47:42'),
(59, 'DECK -SECURITY', 'CRUISESHIP', '2022-10-17 11:48:02', '2022-10-17 11:48:02'),
(60, 'ENGINE', 'CRUISESHIP', '2022-10-17 11:48:27', '2022-10-17 11:48:27'),
(61, 'ELECTRO-TECHNICAL', 'CRUISESHIP', '2022-10-17 11:49:33', '2022-10-17 11:49:33'),
(62, 'ENTERTAINMENT', 'CRUISESHIP', '2022-10-17 11:50:09', '2022-10-17 11:50:09'),
(63, 'ENTERTAINMENT -TECHNICAL', 'CRUISESHIP', '2022-10-17 11:50:34', '2022-10-17 11:50:34'),
(64, 'FINANCIAL SERVICES', 'CRUISESHIP', '2022-10-17 11:50:51', '2022-10-17 11:50:51'),
(65, 'FOOD AND BEVERAGE', 'CRUISESHIP', '2022-10-17 11:51:11', '2022-10-17 11:51:11'),
(66, 'FRONT OFFICE / ADMINISTRATION JOBS', 'CRUISESHIP', '2022-10-17 11:51:27', '2022-10-17 11:51:27'),
(67, 'SHORE EXCURSIONS', 'CRUISESHIP', '2022-10-17 11:51:52', '2022-10-17 11:51:52'),
(68, 'GENTLEMAN DANCE HOST', 'CRUISESHIP', '2022-10-17 11:52:08', '2022-10-17 11:52:08'),
(69, 'GIFT SHOPS / RETAIL SALES', 'CRUISESHIP', '2022-10-17 11:52:20', '2022-10-17 11:52:20'),
(70, 'GUEST ACTIVITIES JOBS', 'CRUISESHIP', '2022-10-17 11:52:44', '2022-10-17 11:52:44'),
(71, 'HOUSEKEEPING', 'CRUISESHIP', '2022-10-17 11:53:00', '2022-10-17 11:53:00'),
(72, 'HOTEL MANAGEMENT', 'CRUISESHIP', '2022-10-17 11:53:22', '2022-10-17 11:53:22'),
(73, 'INFORMATION TECHNOLOGY / IT', 'CRUISESHIP', '2022-10-17 11:53:37', '2022-10-17 11:53:37'),
(74, 'INSTRUCTORS', 'CRUISESHIP', '2022-10-17 11:54:24', '2022-10-17 11:54:24'),
(75, 'INVENTORY', 'CRUISESHIP', '2022-10-17 11:54:40', '2022-10-17 11:54:40'),
(76, 'LECTURERS / SPEAKERS', 'CRUISESHIP', '2022-10-17 11:54:56', '2022-10-17 11:55:11'),
(77, 'MEDICAL', 'CRUISESHIP', '2022-10-17 11:55:29', '2022-10-17 11:55:29'),
(78, 'ONBOARD HUMAN RESOURCES', 'CRUISESHIP', '2022-10-17 11:56:00', '2022-10-17 11:56:00'),
(79, 'ADMINISTRATION', 'CRUISESHIP', '2022-10-17 11:57:26', '2022-10-17 11:57:26'),
(80, 'CUSTOMER SERVICE/CALL CENTER', 'CRUISESHIP', '2022-10-17 11:57:42', '2022-10-17 11:57:42'),
(81, 'ENVIRONMENTAL SERVICES', 'CRUISESHIP', '2022-10-17 11:58:31', '2022-10-17 11:58:31'),
(82, 'FINANCE/MANAGEMENT', 'CRUISESHIP', '2022-10-17 11:58:50', '2022-10-17 11:58:50'),
(83, 'FINANCE/ACCOUNTING', 'CRUISESHIP', '2022-10-17 11:59:04', '2022-10-17 11:59:04'),
(87, 'ENGINEERING', 'MEGAYACHT', '2022-10-17 12:03:25', '2022-10-17 12:03:25'),
(88, 'DECK', 'MEGAYACHT', '2022-10-17 12:03:38', '2022-10-17 12:03:38'),
(89, 'SPECIALIST', 'MEGAYACHT', '2022-10-17 12:04:12', '2022-10-17 12:04:12'),
(90, 'DECK -SECURITY', 'MEGAYACHT', '2022-10-17 12:04:24', '2022-10-17 12:04:24'),
(91, 'FINANCIAL', 'MEGAYACHT', '2022-10-17 12:04:39', '2022-10-17 12:04:39'),
(92, 'FOOD AND BEVERAGE', 'MEGAYACHT', '2022-10-17 12:04:59', '2022-10-17 12:04:59'),
(93, 'FRONT OFFICE / ADMINISTRATION', 'MEGAYACHT', '2022-10-17 12:05:28', '2022-10-17 12:05:28'),
(94, 'SHORE EXCURSIONS', 'MEGAYACHT', '2022-10-17 12:05:56', '2022-10-17 12:05:56'),
(95, 'INVENTORY', 'MEGAYACHT', '2022-10-17 12:06:15', '2022-10-17 12:06:15'),
(96, 'DECK', 'RIVER CRUISE', '2022-10-17 12:24:04', '2022-10-17 12:24:04'),
(97, 'DECK -SECURITY', 'RIVER CRUISE', '2022-10-17 12:25:06', '2022-10-17 12:25:06'),
(98, 'ENGINE', 'RIVER CRUISE', '2022-10-17 12:25:17', '2022-10-17 12:25:17'),
(99, 'ELECTRO-TECHNICAL', 'RIVER CRUISE', '2022-10-17 12:25:51', '2022-10-17 12:25:51'),
(100, 'FINANCIAL SERVICES', 'RIVER CRUISE', '2022-10-17 12:26:11', '2022-10-17 12:26:11'),
(101, 'FOOD AND BEVERAGE', 'RIVER CRUISE', '2022-10-17 12:26:31', '2022-10-17 12:26:31'),
(102, 'FRONT OFFICE / ADMINISTRATION', 'RIVER CRUISE', '2022-10-17 12:26:51', '2022-10-17 12:26:51'),
(103, 'SHORE EXCURSIONS', 'RIVER CRUISE', '2022-10-17 12:27:10', '2022-10-17 12:27:10'),
(104, 'HOUSEKEEPING', 'RIVER CRUISE', '2022-10-17 12:27:23', '2022-10-17 12:27:23'),
(105, 'INFORMATION TECHNOLOGY / IT', 'RIVER CRUISE', '2022-10-17 12:27:44', '2022-10-17 12:27:44'),
(106, 'INVENTORY', 'RIVER CRUISE', '2022-10-17 12:27:57', '2022-10-17 12:27:57'),
(107, 'DECK -SECURITY', 'MARCHANT NAVY', '2022-10-17 12:29:41', '2022-10-17 12:29:41'),
(108, 'ENGINE', 'MARCHANT NAVY', '2022-10-17 12:30:28', '2022-10-17 12:30:28'),
(109, 'ELECTRO-TECHNICAL', 'MARCHANT NAVY', '2022-10-17 12:30:45', '2022-10-17 12:30:45'),
(110, 'HOUSEKEEPING', 'MARCHANT NAVY', '2022-10-17 12:30:58', '2022-10-17 12:30:58'),
(111, 'INFORMATION TECHNOLOGY / IT', 'MARCHANT NAVY', '2022-10-17 12:31:10', '2022-10-17 12:31:10'),
(112, 'INVENTORY', 'MARCHANT NAVY', '2022-10-17 12:31:36', '2022-10-17 12:31:36'),
(113, 'CATERING', 'OFFSHORE', '2022-10-17 12:32:18', '2022-10-17 12:32:18'),
(114, 'KITCHEN', 'HOTEL & RESORT', '2022-10-17 12:34:02', '2022-10-17 12:34:02'),
(115, 'HOSPITALITY', 'HOTEL & RESORT', '2022-10-17 12:35:39', '2022-10-17 12:35:39'),
(116, 'BEAUTY / SPA / FITNESS', 'HOTEL & RESORT', '2022-10-17 12:35:54', '2022-10-17 12:35:54'),
(117, 'HOUSEKEEPING', 'HOTEL & RESORT', '2022-10-17 12:36:06', '2022-10-17 12:36:06'),
(118, 'MAINTANENCE', 'HOTEL & RESORT', '2022-10-17 12:36:24', '2022-10-17 12:36:24'),
(119, 'FINANCIAL', 'HOTEL & RESORT', '2022-10-17 12:36:55', '2022-10-17 12:36:55'),
(120, 'INFORMATION TECHNOLOGY / IT', 'HOTEL & RESORT', '2022-10-17 12:37:07', '2022-10-17 12:37:07'),
(121, 'INVENTORY', 'HOTEL & RESORT', '2022-10-17 12:37:20', '2022-10-17 12:37:20'),
(122, 'PORTER', 'HOTEL & RESORT', '2022-10-17 12:37:32', '2022-10-17 12:37:32'),
(123, 'FOOD AND BEVERAGE', 'HOTEL & RESORT', '2022-10-17 12:38:03', '2022-10-17 12:38:03'),
(124, 'ADMINISTRATION', 'HOUSEHOLD BUTLER', '2022-10-17 12:39:00', '2022-10-17 12:39:00'),
(125, 'Household Staff', 'HOUSEHOLD BUTLER', '2022-10-17 12:39:34', '2022-10-17 12:39:34'),
(127, 'OFFICERS', 'SHIPYARD', '2022-10-17 12:40:53', '2022-10-17 12:40:53'),
(128, 'OFFICERS', 'Offshore Support Vessel', '2022-10-17 12:41:06', '2022-10-17 12:41:06'),
(129, 'OFFICERS', 'Pasenger Ship', '2022-10-17 12:41:27', '2022-10-17 12:41:27'),
(130, 'OFFICERS', 'Pasenger Ferry', '2022-10-17 12:42:18', '2022-10-17 12:42:18'),
(131, 'OFFICERS', 'Vehicle Carrier', '2022-10-17 12:42:29', '2022-10-17 12:42:29'),
(132, 'OFFICERS', 'Tanker-VLCC / ULCC', '2022-10-17 12:42:40', '2022-10-17 12:42:40'),
(133, 'OFFICERS', 'Tanker-Product', '2022-10-17 12:42:47', '2022-10-17 12:42:47'),
(134, 'OFFICERS', 'Tanker-Crude', '2022-10-17 12:43:02', '2022-10-17 12:43:02'),
(135, 'OFFICERS', 'LPG Carrier', '2022-10-17 12:43:19', '2022-10-17 12:43:19'),
(136, 'OFFICERS', 'High Speed Craft', '2022-10-17 12:43:55', '2022-10-17 12:43:55'),
(137, 'OFFICERS', 'Bulk Carrier', '2022-10-17 12:44:11', '2022-10-17 12:44:11'),
(138, 'OFFICERS', 'Tugboat', '2022-10-17 12:44:23', '2022-10-17 12:44:23'),
(139, 'OFFICERS', 'General Cargo', '2022-10-17 12:44:38', '2022-10-17 12:44:38'),
(140, 'OFFICERS', 'Crewboat', '2022-10-17 12:44:49', '2022-10-17 12:44:49'),
(141, 'OFFICERS', 'Container SHIP', '2022-10-17 12:45:02', '2022-10-17 12:45:02'),
(142, 'OFFICERS', 'Chamical Tanker', '2022-10-17 12:45:14', '2022-10-17 12:45:14'),
(143, 'GALLEY/KITCHEN', 'Chamical Tanker', '2022-10-17 12:47:04', '2022-10-17 12:47:04'),
(144, 'GALLEY/KITCHEN', 'Container SHIP', '2022-10-17 12:47:18', '2022-10-17 12:47:18'),
(145, 'GALLEY/KITCHEN', 'Crewboat', '2022-10-17 12:47:29', '2022-10-17 12:47:29'),
(146, 'GALLEY/KITCHEN', 'General Cargo', '2022-10-17 12:47:38', '2022-10-17 12:47:38'),
(147, 'GALLEY/KITCHEN', 'Tugboat', '2022-10-17 12:47:50', '2022-10-17 12:47:50'),
(148, 'GALLEY/KITCHEN', 'Bulk Carrier', '2022-10-17 12:48:02', '2022-10-17 12:48:02'),
(149, 'GALLEY/KITCHEN', 'High Speed Craft', '2022-10-17 12:48:15', '2022-10-17 12:48:15'),
(150, 'GALLEY/KITCHEN', 'LPG Carrier', '2022-10-17 12:48:28', '2022-10-17 12:48:28'),
(151, 'GALLEY/KITCHEN', 'Tanker-Crude', '2022-10-17 12:48:39', '2022-10-17 12:48:39'),
(152, 'GALLEY/KITCHEN', 'Tanker-Product', '2022-10-17 12:48:50', '2022-10-17 12:48:50'),
(153, 'GALLEY/KITCHEN', 'Tanker-VLCC / ULCC', '2022-10-17 12:49:00', '2022-10-17 12:49:00'),
(154, 'GALLEY/KITCHEN', 'Vehicle Carrier', '2022-10-17 12:49:11', '2022-10-17 12:49:11'),
(155, 'GALLEY/KITCHEN', 'Pasenger Ferry', '2022-10-17 12:49:23', '2022-10-17 12:49:23'),
(156, 'GALLEY/KITCHEN', 'Pasenger Ship', '2022-10-17 12:49:34', '2022-10-17 12:49:34'),
(157, 'GALLEY/KITCHEN', 'Offshore Support Vessel', '2022-10-17 12:49:42', '2022-10-17 12:49:42'),
(158, 'GALLEY/KITCHEN', 'SHIPYARD', '2022-10-17 12:50:21', '2022-10-17 12:50:21'),
(159, 'HOUSEKEEPING', 'Offshore Support Vessel', '2022-10-17 12:51:09', '2022-10-17 12:51:09'),
(160, 'HOUSEKEEPING', 'Pasenger Ship', '2022-10-17 12:51:23', '2022-10-17 12:51:23'),
(161, 'HOUSEKEEPING', 'Pasenger Ferry', '2022-10-17 12:51:31', '2022-10-17 12:51:31'),
(162, 'HOUSEKEEPING', 'Vehicle Carrier', '2022-10-17 12:51:38', '2022-10-17 12:51:38'),
(163, 'HOUSEKEEPING', 'Tanker-VLCC / ULCC', '2022-10-17 12:51:48', '2022-10-17 12:51:48'),
(164, 'HOUSEKEEPING', 'Tanker-Product', '2022-10-17 12:51:58', '2022-10-17 12:51:58'),
(165, 'HOUSEKEEPING', 'Tanker-Crude', '2022-10-17 12:52:06', '2022-10-17 12:52:06'),
(166, 'HOUSEKEEPING', 'LPG Carrier', '2022-10-17 12:52:17', '2022-10-17 12:52:17'),
(167, 'HOUSEKEEPING', 'High Speed Craft', '2022-10-17 12:52:27', '2022-10-17 12:52:27'),
(168, 'HOUSEKEEPING', 'Bulk Carrier', '2022-10-17 12:52:36', '2022-10-17 12:52:36'),
(169, 'HOUSEKEEPING', 'Tugboat', '2022-10-17 12:52:44', '2022-10-17 12:52:44'),
(170, 'HOUSEKEEPING', 'General Cargo', '2022-10-17 12:52:52', '2022-10-17 12:52:52'),
(171, 'HOUSEKEEPING', 'Crewboat', '2022-10-17 12:53:01', '2022-10-17 12:53:01'),
(172, 'HOUSEKEEPING', 'Container SHIP', '2022-10-17 12:53:11', '2022-10-17 12:53:11'),
(173, 'HOUSEKEEPING', 'Chamical Tanker', '2022-10-17 12:53:24', '2022-10-17 12:53:24'),
(174, 'ADMINISTRATION', 'Chamical Tanker', '2022-10-17 12:54:15', '2022-10-17 12:54:15'),
(175, 'ADMINISTRATION', 'Container SHIP', '2022-10-17 12:54:24', '2022-10-17 12:54:24'),
(176, 'ADMINISTRATION', 'Crewboat', '2022-10-17 12:54:32', '2022-10-17 12:54:32'),
(177, 'ADMINISTRATION', 'General Cargo', '2022-10-17 12:54:41', '2022-10-17 12:54:41'),
(178, 'ADMINISTRATION', 'Tugboat', '2022-10-17 12:54:50', '2022-10-17 12:54:50'),
(179, 'ADMINISTRATION', 'Bulk Carrier', '2022-10-17 12:55:01', '2022-10-17 12:55:01'),
(180, 'ADMINISTRATION', 'High Speed Craft', '2022-10-17 12:55:09', '2022-10-17 12:55:09'),
(181, 'ADMINISTRATION', 'LPG Carrier', '2022-10-17 12:55:19', '2022-10-17 12:55:19'),
(182, 'ADMINISTRATION', 'Tanker-Crude', '2022-10-17 12:55:27', '2022-10-17 12:55:27'),
(183, 'ADMINISTRATION', 'Tanker-Product', '2022-10-17 12:55:45', '2022-10-17 12:55:45'),
(184, 'ADMINISTRATION', 'Tanker-VLCC / ULCC', '2022-10-17 12:55:54', '2022-10-17 12:55:54'),
(185, 'ADMINISTRATION', 'Vehicle Carrier', '2022-10-17 12:56:05', '2022-10-17 12:56:05'),
(186, 'ADMINISTRATION', 'Pasenger Ferry', '2022-10-17 12:56:13', '2022-10-17 12:56:13'),
(187, 'ADMINISTRATION', 'Pasenger Ship', '2022-10-17 12:56:21', '2022-10-17 12:56:21'),
(188, 'ADMINISTRATION', 'Offshore Support Vessel', '2022-10-17 12:56:37', '2022-10-17 12:56:37'),
(190, 'FINANCIAL', 'SHIPYARD', '2022-10-17 12:57:40', '2022-10-17 12:57:40'),
(191, 'DECK -SECURITY', 'SHIPYARD', '2022-10-17 12:57:59', '2022-10-17 12:57:59'),
(192, 'ENGINE', 'SHIPYARD', '2022-10-17 12:58:09', '2022-10-17 12:58:09'),
(193, 'ELECTRO-TECHNICAL', 'SHIPYARD', '2022-10-17 12:58:25', '2022-10-17 12:58:25'),
(194, 'INFORMATION TECHNOLOGY / IT', 'SHIPYARD', '2022-10-17 12:58:43', '2022-10-17 12:58:43'),
(195, 'INVENTORY', 'SHIPYARD', '2022-10-17 12:58:55', '2022-10-17 12:58:55'),
(196, 'ENVIRONMENTAL SERVICES', 'CORPORATE / LAND BASED JOBS', '2022-10-17 12:59:45', '2022-10-17 12:59:45'),
(197, 'FINANCE/MANAGEMENT', 'CORPORATE / LAND BASED JOBS', '2022-10-17 13:00:01', '2022-10-17 13:00:01'),
(198, 'FINANCE/ACCOUNTING', 'CORPORATE / LAND BASED JOBS', '2022-10-17 13:00:15', '2022-10-17 13:00:15'),
(199, 'FINANCE/AUDIT', 'CORPORATE / LAND BASED JOBS', '2022-10-17 13:00:38', '2022-10-17 13:00:38'),
(200, 'FOOD AND BEVERAGE', 'CORPORATE / LAND BASED JOBS', '2022-10-17 13:00:56', '2022-10-17 13:00:56'),
(201, 'GUEST SERVICES', 'CORPORATE / LAND BASED JOBS', '2022-10-17 13:01:09', '2022-10-17 13:01:09'),
(202, 'HUMAN RESOURCES', 'CORPORATE / LAND BASED JOBS', '2022-10-17 13:01:24', '2022-10-17 13:01:24'),
(203, 'INFORMATION TECHNOLOGY', 'CORPORATE / LAND BASED JOBS', '2022-10-17 13:01:36', '2022-10-17 13:01:36'),
(204, 'INVENTORY', 'CORPORATE / LAND BASED JOBS', '2022-10-17 13:02:18', '2022-10-17 13:02:18'),
(205, 'LEGAL', 'CORPORATE / LAND BASED JOBS', '2022-10-17 13:02:36', '2022-10-17 13:02:36'),
(206, 'MARINE OPERATIONS', 'CORPORATE / LAND BASED JOBS', '2022-10-17 13:02:48', '2022-10-17 13:02:48'),
(207, 'MARKETING', 'CORPORATE / LAND BASED JOBS', '2022-10-17 13:03:02', '2022-10-17 13:03:02'),
(208, 'MEWBUILD & FLEET DESIGN', 'CORPORATE / LAND BASED JOBS', '2022-10-17 13:03:16', '2022-10-17 13:03:16'),
(209, 'PORT ACTIVITIES', 'CORPORATE / LAND BASED JOBS', '2022-10-17 13:03:30', '2022-10-17 13:03:30'),
(210, 'PUBLIC RELATIONS', 'CORPORATE / LAND BASED JOBS', '2022-10-17 13:03:51', '2022-10-17 13:03:51'),
(211, 'PURCHASING', 'CORPORATE / LAND BASED JOBS', '2022-10-17 13:04:45', '2022-10-17 13:04:45'),
(212, 'SALES', 'CORPORATE / LAND BASED JOBS', '2022-10-17 13:04:55', '2022-10-17 13:04:55'),
(213, 'SECURITY SERVICES', 'CORPORATE / LAND BASED JOBS', '2022-10-17 13:05:10', '2022-10-17 13:05:10'),
(214, 'TRAVEL / AIR & SEA', 'CORPORATE / LAND BASED JOBS', '2022-10-17 13:05:25', '2022-10-17 13:05:25');

-- --------------------------------------------------------

--
-- Table structure for table `jobtitles`
--

CREATE TABLE `jobtitles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `cat_id` varchar(255) DEFAULT NULL,
  `dp_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobtitles`
--

INSERT INTO `jobtitles` (`id`, `name`, `cat_id`, `dp_id`, `created_at`, `updated_at`) VALUES
(1, 'Purser', 'MEGAYACHT', 'INTERIOR JOB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Interior Manager', 'MEGAYACHT', 'INTERIOR JOB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Chief Steward(ess)', 'MEGAYACHT', 'INTERIOR JOB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Head Housekeeper', 'MEGAYACHT', 'INTERIOR JOB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Housekeeping Stewardess', 'MEGAYACHT', 'INTERIOR JOB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Head of Service', 'MEGAYACHT', 'INTERIOR JOB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Service Stewardess', 'MEGAYACHT', 'INTERIOR JOB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Spa Manager', 'MEGAYACHT', 'INTERIOR JOB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Spa Steward(ess)', 'MEGAYACHT', 'INTERIOR JOB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Butler', 'MEGAYACHT', 'INTERIOR JOB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, '2nd Steward(ess)', 'MEGAYACHT', 'INTERIOR JOB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, '3rd Steward(ess)', 'MEGAYACHT', 'INTERIOR JOB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Steward(ess)', 'MEGAYACHT', 'INTERIOR JOB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Laundry Steward(ess)', 'MEGAYACHT', 'INTERIOR JOB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Sole Steward(ess)', 'MEGAYACHT', 'INTERIOR JOB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Junior Steward(ess)', 'MEGAYACHT', 'INTERIOR JOB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Stew / Deck', 'MEGAYACHT', 'INTERIOR JOB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Concierge', 'MEGAYACHT', 'INTERIOR JOB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Florist', 'MEGAYACHT', 'INTERIOR JOB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Bartender', 'MEGAYACHT', 'INTERIOR JOB', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Head Chef', 'MEGAYACHT', 'CULINARY / KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Sole Chef', 'MEGAYACHT', 'CULINARY / KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Sous Chef', 'MEGAYACHT', 'CULINARY / KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Cook/Crew Chef', 'MEGAYACHT', 'CULINARY / KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Stew / Cook', 'MEGAYACHT', 'CULINARY / KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Chief Engineer', 'MEGAYACHT', 'ENGINEERING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, '2nd Engineer', 'MEGAYACHT', 'ENGINEERING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, '3rd Engineer', 'MEGAYACHT', 'ENGINEERING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'Sole Engineer', 'MEGAYACHT', 'ENGINEERING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'ETO', 'MEGAYACHT', 'ENGINEERING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'AV/IT Officer', 'MEGAYACHT', 'ENGINEERING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Electrician', 'MEGAYACHT', 'ENGINEERING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'Motorman', 'MEGAYACHT', 'ENGINEERING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Captain', 'MEGAYACHT', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'Chief Officer', 'MEGAYACHT', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, '2nd Officer', 'MEGAYACHT', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, '3rd Officer', 'MEGAYACHT', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'Security Officer', 'MEGAYACHT', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'Mate', 'MEGAYACHT', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'Bosun', 'MEGAYACHT', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'Lead Deckhand', 'MEGAYACHT', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'Deckhand', 'MEGAYACHT', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'Junior Deckhand', 'MEGAYACHT', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'Carpenter', 'MEGAYACHT', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'Beautician', 'MEGAYACHT', 'SPECIALIST ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'Hairdresser', 'MEGAYACHT', 'SPECIALIST ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'Massage Therapist', 'MEGAYACHT', 'SPECIALIST ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'Personal Trainer', 'MEGAYACHT', 'SPECIALIST ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'Doctor', 'MEGAYACHT', 'SPECIALIST ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'Paramedic', 'MEGAYACHT', 'SPECIALIST ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'Nurse', 'MEGAYACHT', 'SPECIALIST ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'Yoga/Pilates Instructor', 'MEGAYACHT', 'SPECIALIST ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'Divemaster', 'MEGAYACHT', 'SPECIALIST ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'Dive Instructor', 'MEGAYACHT', 'SPECIALIST ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'name', 'cat_id', 'dp_id', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 'Childcare', 'MEGAYACHT', 'SPECIALIST ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'Helicopter Pilot', 'MEGAYACHT', 'SPECIALIST ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 'Chief Security ', 'MEGAYACHT', 'DECK -SECURITY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 'Security Officer', 'MEGAYACHT', 'DECK -SECURITY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 'Surveillance Manager', 'MEGAYACHT', 'DECK -SECURITY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'Surveillance Operator', 'MEGAYACHT', 'DECK -SECURITY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 'Security Guard', 'MEGAYACHT', 'DECK -SECURITY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'Financial Controller', 'MEGAYACHT', 'FINANCIAL ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 'Senior Auditor', 'MEGAYACHT', 'FINANCIAL ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 'Junior Auditor', 'MEGAYACHT', 'FINANCIAL ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 'Crew Payroll Manager', 'MEGAYACHT', 'FINANCIAL ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, '2nd Purser Payroll', 'MEGAYACHT', 'FINANCIAL ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, '2nd Purser Administration - Guest Accounts', 'MEGAYACHT', 'FINANCIAL ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 'Staff Accountant', 'MEGAYACHT', 'FINANCIAL ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 'Food and Beverage Director', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 'Assistant Food and Beverage Director', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 'Restaurant Manager ', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 'Maitre D\'', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 'Buffet Restaurant Manager', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 'Assistant Restaurant Manager / ', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 'Maitre D\'', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 'Head Waiter ', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 'Head Butler', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, 'Butler', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, 'Assistant Butler', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, 'Night Butler', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, 'Waitress ', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, 'Chef de Rang', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 'Waiter ', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 'Waitress', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 'Assistant Waiter ', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 'Assistant Waitress', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 'Buffet Steward ', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 'Stewardess ', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 'Buffet / Snack Attendant', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 'Officer / Staff / Crew Mess Attendant', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 'Restaurant Utility Cleaner', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 'Bar Manager', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 'Assistant Bar Manager', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 'Cellar Master', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 'Head Sommelier ', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 'Wine Waiter', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 'Sommelier ', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 'Wine Waitress ', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 'Assistant Sommelier ', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 'Head Bartender', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 'Bartender', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 'Barista Bar Waiter / Waitress ', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, 'Bar Utility Cleaner', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, 'Room Service Manager', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, 'Room Service Attendant', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, 'Room Service Telephone Operator', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, 'Private Bar Attendant', 'MEGAYACHT', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 'Chief Purser ', 'MEGAYACHT', 'FRONT OFFICE / ADMINISTRATION', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, 'Front Office Manager', 'MEGAYACHT', 'FRONT OFFICE / ADMINISTRATION', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 'Deputy Purser', 'MEGAYACHT', 'FRONT OFFICE / ADMINISTRATION', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, '1st Purser-Administration', 'MEGAYACHT', 'FRONT OFFICE / ADMINISTRATION', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, '2nd Purser', 'MEGAYACHT', 'FRONT OFFICE / ADMINISTRATION', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 'Administration Purser', 'MEGAYACHT', 'FRONT OFFICE / ADMINISTRATION', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, 'Assistant Purser', 'MEGAYACHT', 'FRONT OFFICE / ADMINISTRATION', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, 'Junior Assistant Purser', 'MEGAYACHT', 'FRONT OFFICE / ADMINISTRATION', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, 'Receptionist', 'MEGAYACHT', 'FRONT OFFICE / ADMINISTRATION', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, 'Guest Service Associate', 'MEGAYACHT', 'FRONT OFFICE / ADMINISTRATION', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, 'Concierge', 'MEGAYACHT', 'FRONT OFFICE / ADMINISTRATION', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, 'Crew Purser', 'MEGAYACHT', 'FRONT OFFICE / ADMINISTRATION', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, 'Assistant Crew Purser', 'MEGAYACHT', 'FRONT OFFICE / ADMINISTRATION', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, 'Future Cruise Sales Consultant', 'MEGAYACHT', 'FRONT OFFICE / ADMINISTRATION', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, 'Senior Auditor Hotel Operations', 'MEGAYACHT', 'FRONT OFFICE / ADMINISTRATION', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(124, 'Junior Auditor Hotel Operations', 'MEGAYACHT', 'FRONT OFFICE / ADMINISTRATION', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(125, 'Night Auditor', 'MEGAYACHT', 'FRONT OFFICE / ADMINISTRATION', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(126, 'Printer', 'MEGAYACHT', 'FRONT OFFICE / ADMINISTRATION', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(127, 'Desktop Publishing and Applications', 'MEGAYACHT', 'FRONT OFFICE / ADMINISTRATION', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(128, 'Shore Excursion / Tour Manager', 'MEGAYACHT', 'SHORE EXCURSIONS', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(129, 'Asst. Shore Excursion Manager ', 'MEGAYACHT', 'SHORE EXCURSIONS', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(130, 'Shore Excursion Staff', 'MEGAYACHT', 'SHORE EXCURSIONS', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(131, 'Travel Guide', 'MEGAYACHT', 'SHORE EXCURSIONS', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(132, 'Expedition Leader', 'MEGAYACHT', 'SHORE EXCURSIONS', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(133, 'Expedition Guide', 'MEGAYACHT', 'SHORE EXCURSIONS', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(134, 'Storekeeper', 'MEGAYACHT', 'INVENTORY', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(135, 'Beauty Salon ', 'RIVER CRUISE', 'BEAUTY / SPA / FITNESS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(136, 'Spa Manager', 'RIVER CRUISE', 'BEAUTY / SPA / FITNESS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(137, 'Assistant Beauty Salon ', 'RIVER CRUISE', 'BEAUTY / SPA / FITNESS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(138, 'Spa Manager', 'RIVER CRUISE', 'BEAUTY / SPA / FITNESS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(139, 'Beauty Therapist', 'RIVER CRUISE', 'BEAUTY / SPA / FITNESS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(140, 'Nail Technician ', 'RIVER CRUISE', 'BEAUTY / SPA / FITNESS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(141, 'Hair Stylist ', 'RIVER CRUISE', 'BEAUTY / SPA / FITNESS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(142, 'Hairdresser', 'RIVER CRUISE', 'BEAUTY / SPA / FITNESS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(143, 'Barber ', 'RIVER CRUISE', 'BEAUTY / SPA / FITNESS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(144, 'Massage Therapist', 'RIVER CRUISE', 'BEAUTY / SPA / FITNESS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(145, 'Personal Trainer', 'RIVER CRUISE', 'BEAUTY / SPA / FITNESS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(146, 'Fitness Instructor', 'RIVER CRUISE', 'BEAUTY / SPA / FITNESS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(147, 'Spa Receptionist', 'RIVER CRUISE', 'BEAUTY / SPA / FITNESS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(148, 'Spa Physician', 'RIVER CRUISE', 'BEAUTY / SPA / FITNESS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(149, 'Acupuncturist', 'RIVER CRUISE', 'BEAUTY / SPA / FITNESS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(150, 'Alternative Instructor', 'RIVER CRUISE', 'BEAUTY / SPA / FITNESS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(151, 'Physiotherapist', 'RIVER CRUISE', 'BEAUTY / SPA / FITNESS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(152, 'Executive Chef', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(153, 'Executive Sous Chef', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(154, 'Sous Chef', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(155, 'Chef De Partie', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(156, 'Demi Chef De Partie', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(157, 'Chef Tournant', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(158, '1st Cook ', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(159, 'Commis 1', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(160, '2nd Cook ', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(161, 'Commis 2', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(162, '3rd Cook', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(163, 'Sushi Chef', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(164, 'Cook Trainee', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(165, 'Crew Cook', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(166, 'Crew Cook Assistant', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(167, 'Crew Cook Utility', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(168, 'Pastry Chef Supervisor', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(169, 'Assistant Pastry ', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(170, 'Chef Supervisor', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(171, 'Pastry Chef', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(172, 'Pastry Trainee', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(173, 'Baker Supervisor', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(174, 'Assistant Baker ', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(175, 'Supervisor', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(176, 'Baker', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(177, 'Baker Trainee', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(178, 'Butcher Supervisor', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(179, 'Assistant Butcher ', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(180, 'Supervisor Butcher', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(181, 'Butcher Trainee', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(182, 'Butcher ', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(183, 'Utility Sanitation Officer', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(184, 'Galley Steward', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(185, 'Galley Cleaner', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(186, 'Officer Messman ', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(187, 'Staff Messman', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(188, 'Pantry Man', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(189, 'Dishwasher / Potwasher', 'RIVER CRUISE', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(190, 'Captain', 'RIVER CRUISE', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(191, 'Master', 'RIVER CRUISE', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(192, 'Staff Captain', 'RIVER CRUISE', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(193, 'Chief Officer', 'RIVER CRUISE', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(194, 'Safety Officer', 'RIVER CRUISE', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(195, '1st Officer', 'RIVER CRUISE', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(196, '2nd Officer', 'RIVER CRUISE', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(197, '3rd Officer', 'RIVER CRUISE', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(198, 'Apprentice Deck Officer', 'RIVER CRUISE', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(199, 'Deck Cadet', 'RIVER CRUISE', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(200, 'Environmental Officer', 'RIVER CRUISE', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(201, 'Quarter Master ', 'RIVER CRUISE', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(202, 'Helmsman', 'RIVER CRUISE', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(203, 'Bosun AB - ', 'RIVER CRUISE', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(204, 'Able Seaman OS - ', 'RIVER CRUISE', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(205, 'Ordinary Seaman', 'RIVER CRUISE', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(206, 'Carpenter', 'RIVER CRUISE', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(207, 'Fireman ', 'RIVER CRUISE', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(208, 'Firefighting Team Leader', 'RIVER CRUISE', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(209, 'Deckhand', 'RIVER CRUISE', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(210, 'Antarctic / Arctic Ice Pilot', 'RIVER CRUISE', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(211, 'Chief Security ', 'RIVER CRUISE', 'DECK -SECURITY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(212, 'Security Officer', 'RIVER CRUISE', 'DECK -SECURITY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(213, 'Surveillance Manager', 'RIVER CRUISE', 'DECK -SECURITY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(214, 'Surveillance Operator', 'RIVER CRUISE', 'DECK -SECURITY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(215, 'Security Guard', 'RIVER CRUISE', 'DECK -SECURITY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(216, 'Chief Engineer', 'RIVER CRUISE', 'ENGINE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(217, 'Staff Chief Engineer', 'RIVER CRUISE', 'ENGINE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(218, '1st Engineer', 'RIVER CRUISE', 'ENGINE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(219, '2nd Engineer', 'RIVER CRUISE', 'ENGINE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(220, '3rd EngineerJunior ', 'RIVER CRUISE', 'ENGINE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(221, '3rd Engineer ', 'RIVER CRUISE', 'ENGINE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(222, '4th Engineer Apprentice  ', 'RIVER CRUISE', 'ENGINE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(223, 'Graduate Engineer', 'RIVER CRUISE', 'ENGINE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(224, 'Engine Cadet', 'RIVER CRUISE', 'ENGINE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(225, 'Hotel Service Engineer', 'RIVER CRUISE', 'ENGINE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(226, 'Engine Mechanic', 'RIVER CRUISE', 'ENGINE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(227, 'Engine Storekeeper', 'RIVER CRUISE', 'ENGINE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(228, 'Motorman', 'RIVER CRUISE', 'ENGINE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(229, 'Fitter', 'RIVER CRUISE', 'ENGINE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(230, 'Oiler Wiper ', 'RIVER CRUISE', 'ENGINE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(231, 'Engine Utility Man', 'RIVER CRUISE', 'ENGINE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(232, 'Plumber', 'RIVER CRUISE', 'ENGINE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(233, 'Upholsterer', 'RIVER CRUISE', 'ENGINE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(234, 'Chief Electrical ', 'RIVER CRUISE', 'ELECTRO-TECHNICAL ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(235, 'Engineer', 'RIVER CRUISE', 'ELECTRO-TECHNICAL ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(236, 'Electrical Engineer', 'RIVER CRUISE', 'ELECTRO-TECHNICAL ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(237, 'Electrician', 'RIVER CRUISE', 'ELECTRO-TECHNICAL ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(238, 'Electronics Engineer Junior ', 'RIVER CRUISE', 'ELECTRO-TECHNICAL ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(239, 'Electro-Technical Cadet ', 'RIVER CRUISE', 'ELECTRO-TECHNICAL ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(240, 'Chief Refrigeration Engineer', 'RIVER CRUISE', 'ELECTRO-TECHNICAL ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(241, 'Refrigeration Engineer', 'RIVER CRUISE', 'ELECTRO-TECHNICAL ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(242, 'Air Conditioning Technician', 'RIVER CRUISE', 'ELECTRO-TECHNICAL ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(243, 'Financial Controller', 'RIVER CRUISE', 'FINANCIAL SERVICES ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(244, 'Senior Auditor', 'RIVER CRUISE', 'FINANCIAL SERVICES ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(245, 'Junior Auditor', 'RIVER CRUISE', 'FINANCIAL SERVICES ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(246, 'Crew Payroll Manager', 'RIVER CRUISE', 'FINANCIAL SERVICES ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(247, '2nd Purser Payroll', 'RIVER CRUISE', 'FINANCIAL SERVICES ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(248, '2nd Purser Administration - Guest Accounts', 'RIVER CRUISE', 'FINANCIAL SERVICES ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(249, 'Staff Accountant', 'RIVER CRUISE', 'FINANCIAL SERVICES ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(250, 'Food and Beverage Director', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(251, 'Assistant Food and Beverage Director', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(252, 'Restaurant Manager ', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(253, 'Maitre D\'', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(254, 'Buffet Restaurant Manager', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(255, 'Assistant Restaurant Manager ', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(256, 'Maitre D\'', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(257, 'Head Waiter ', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(258, 'Head Butler', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(259, 'Butler', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(260, 'Assistant Butler', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(261, 'Night Butler', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(262, 'Waitress ', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(263, 'Chef de Rang', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(264, 'Waiter ', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(265, 'Waitress', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(266, 'Assistant Waiter ', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(267, 'Assistant Waitress', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(268, 'Buffet Steward ', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(269, 'Stewardess ', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(270, 'Buffet / Snack Attendant', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(271, 'Officer / Staff / Crew Mess Attendant', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(272, 'Restaurant Utility Cleaner', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(273, 'Bar Manager', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(274, 'Assistant Bar Manager', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(275, 'Cellar Master', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(276, 'Head Sommelier ', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(277, 'Wine Waiter', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(278, 'Sommelier ', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(279, 'Wine Waitress ', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(280, 'Assistant Sommelier ', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(281, 'Head Bartender', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(282, 'Bartender', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(283, 'Barista Bar Waiter / Waitress ', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(284, 'Bar Utility Cleaner', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(285, 'Room Service Manager', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(286, 'Room Service Attendant', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(287, 'Room Service Telephone Operator', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(288, 'Private Bar Attendant', 'RIVER CRUISE', 'FOOD AND BEVERAGE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(289, 'Chief Purser ', 'RIVER CRUISE', 'FRONT OFFICE / ADMINISTRATION ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(290, 'Front Office Manager', 'RIVER CRUISE', 'FRONT OFFICE / ADMINISTRATION ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(291, 'Deputy Purser', 'RIVER CRUISE', 'FRONT OFFICE / ADMINISTRATION ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(292, '1st Purser-Administration', 'RIVER CRUISE', 'FRONT OFFICE / ADMINISTRATION ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(293, '2nd Purser', 'RIVER CRUISE', 'FRONT OFFICE / ADMINISTRATION ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(294, 'Administration Purser', 'RIVER CRUISE', 'FRONT OFFICE / ADMINISTRATION ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(295, 'Assistant Purser', 'RIVER CRUISE', 'FRONT OFFICE / ADMINISTRATION ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(296, 'Junior Assistant Purser', 'RIVER CRUISE', 'FRONT OFFICE / ADMINISTRATION ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(297, 'Receptionist', 'RIVER CRUISE', 'FRONT OFFICE / ADMINISTRATION ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(298, 'Guest Service Associate', 'RIVER CRUISE', 'FRONT OFFICE / ADMINISTRATION ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(299, 'Concierge', 'RIVER CRUISE', 'FRONT OFFICE / ADMINISTRATION ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(300, 'Crew Purser', 'RIVER CRUISE', 'FRONT OFFICE / ADMINISTRATION ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(301, 'Assistant Crew Purser', 'RIVER CRUISE', 'FRONT OFFICE / ADMINISTRATION ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(302, 'Future Cruise Sales Consultant', 'RIVER CRUISE', 'FRONT OFFICE / ADMINISTRATION ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(303, 'Senior Auditor Hotel Operations', 'RIVER CRUISE', 'FRONT OFFICE / ADMINISTRATION ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(304, 'Junior Auditor Hotel Operations', 'RIVER CRUISE', 'FRONT OFFICE / ADMINISTRATION ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(305, 'Night Auditor', 'RIVER CRUISE', 'FRONT OFFICE / ADMINISTRATION ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(306, 'Printer', 'RIVER CRUISE', 'FRONT OFFICE / ADMINISTRATION ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(307, 'Desktop Publishing and Applications', 'RIVER CRUISE', 'FRONT OFFICE / ADMINISTRATION ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(308, 'Shore Excursion / Tour Manager', 'RIVER CRUISE', 'SHORE EXCURSIONS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(309, 'Asst. Shore Excursion Manager ', 'RIVER CRUISE', 'SHORE EXCURSIONS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(310, 'Shore Excursion Staff', 'RIVER CRUISE', 'SHORE EXCURSIONS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(311, 'Travel Guide', 'RIVER CRUISE', 'SHORE EXCURSIONS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(312, 'Expedition Leader', 'RIVER CRUISE', 'SHORE EXCURSIONS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(313, 'Expedition Guide', 'RIVER CRUISE', 'SHORE EXCURSIONS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(314, 'Chief Housekeeper', 'RIVER CRUISE', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(315, 'Assistant Chief Housekeeper', 'RIVER CRUISE', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(316, 'Housekeeping Supervisor', 'RIVER CRUISE', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(317, 'Head Room Steward', 'RIVER CRUISE', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(318, 'Stateroom Attendant', 'RIVER CRUISE', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(319, 'Stateroom Attendant Night', 'RIVER CRUISE', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(320, 'Guest Area Attendant Night', 'RIVER CRUISE', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(321, 'Assistant Stateroom Attendant', 'RIVER CRUISE', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(322, 'Senior Deck Supervisor (Housekeeping)', 'RIVER CRUISE', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(323, 'Pool & Deck Supervisor', 'RIVER CRUISE', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(324, 'Pool & Deck Attendant', 'RIVER CRUISE', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(325, 'Public Area Attendant Supervisor', 'RIVER CRUISE', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(326, 'Public Area Attendant', 'RIVER CRUISE', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(327, 'Crew Area Attendant Supervisor', 'RIVER CRUISE', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(328, 'Crew Area Attendant', 'RIVER CRUISE', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(329, 'Head Butler', 'RIVER CRUISE', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(330, 'Butler', 'RIVER CRUISE', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(331, 'Laundry ', 'RIVER CRUISE', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(332, 'Supervisor', 'RIVER CRUISE', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(333, 'Assistant Laundry Supervisor', 'RIVER CRUISE', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(334, 'Laundry Attendant', 'RIVER CRUISE', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(335, 'Dry Cleaner', 'RIVER CRUISE', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(336, 'Linen Keeper', 'RIVER CRUISE', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(337, 'Facilities Horticulturist-Florist', 'RIVER CRUISE', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(338, 'Hotel Steward/ess ', 'RIVER CRUISE', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(339, 'Utility Cleaner', 'RIVER CRUISE', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(340, 'Tailor', 'RIVER CRUISE', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(341, 'IT Technical Analyst', 'RIVER CRUISE', 'INFORMATION TECHNOLOGY / IT ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(342, 'Internet Manager', 'RIVER CRUISE', 'INFORMATION TECHNOLOGY / IT ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(343, 'Provision Master', 'RIVER CRUISE', 'INVENTORY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(344, 'Hotel Controller', 'RIVER CRUISE', 'INVENTORY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(345, 'Inventory Manager', 'RIVER CRUISE', 'INVENTORY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(346, 'Hotel Storekeeper', 'RIVER CRUISE', 'INVENTORY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(347, 'Provision Master - ', 'RIVER CRUISE', 'INVENTORY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(348, 'Storekeeper', 'RIVER CRUISE', 'INVENTORY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(349, 'Assistant Storekeeper', 'RIVER CRUISE', 'INVENTORY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(350, 'Executive Chef', 'MARCHANT NAVY', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(351, '1st Cook ', 'MARCHANT NAVY', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(352, 'Commis ', 'MARCHANT NAVY', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(353, 'Pastry Chef', 'MARCHANT NAVY', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(354, 'Baker ', 'MARCHANT NAVY', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(355, 'Butcher ', 'MARCHANT NAVY', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(356, 'Galley Steward', 'MARCHANT NAVY', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(357, 'Galley Cleaner', 'MARCHANT NAVY', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(358, 'Officer Messman ', 'MARCHANT NAVY', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(359, 'Staff Messman', 'MARCHANT NAVY', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(360, 'Pantry Man', 'MARCHANT NAVY', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(361, 'Dishwasher / Potwasher', 'MARCHANT NAVY', 'CULINARY / KITCHEN ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(362, 'Captain', 'MARCHANT NAVY', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(363, 'Master', 'MARCHANT NAVY', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(364, 'Staff Captain', 'MARCHANT NAVY', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(365, 'Chief Officer', 'MARCHANT NAVY', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(366, 'Safety Officer', 'MARCHANT NAVY', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(367, '1st Officer', 'MARCHANT NAVY', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(368, '2nd Officer', 'MARCHANT NAVY', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(369, '3rd Officer', 'MARCHANT NAVY', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(370, 'Apprentice Deck Officer', 'MARCHANT NAVY', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(371, 'Deck Cadet', 'MARCHANT NAVY', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(372, 'Environmental Officer', 'MARCHANT NAVY', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(373, 'Quarter Master ', 'MARCHANT NAVY', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(374, 'Helmsman', 'MARCHANT NAVY', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(375, 'Bosun AB - ', 'MARCHANT NAVY', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(376, 'Able Seaman OS - ', 'MARCHANT NAVY', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(377, 'Ordinary Seaman', 'MARCHANT NAVY', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(378, 'Carpenter', 'MARCHANT NAVY', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(379, 'Fireman / ', 'MARCHANT NAVY', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(380, 'Firefighting Team Leader', 'MARCHANT NAVY', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(381, 'Deckhand', 'MARCHANT NAVY', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(382, 'Antarctic / Arctic Ice Pilot', 'MARCHANT NAVY', 'DECK ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(383, 'Chief Security ', 'MARCHANT NAVY', 'DECK -SECURITY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(384, 'Security Officer', 'MARCHANT NAVY', 'DECK -SECURITY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(385, 'Surveillance Manager', 'MARCHANT NAVY', 'DECK -SECURITY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(386, 'Surveillance Operator', 'MARCHANT NAVY', 'DECK -SECURITY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(387, 'Security Guard', 'MARCHANT NAVY', 'DECK -SECURITY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(388, 'Chief Engineer', 'MARCHANT NAVY', 'ENGINE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(389, 'Staff Chief Engineer', 'MARCHANT NAVY', 'ENGINE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(390, '1st Engineer', 'MARCHANT NAVY', 'ENGINE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(391, '2nd Engineer', 'MARCHANT NAVY', 'ENGINE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(392, '3rd EngineerJunior ', 'MARCHANT NAVY', 'ENGINE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(393, '3rd Engineer / ', 'MARCHANT NAVY', 'ENGINE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(394, '4th Engineer Apprentice / ', 'MARCHANT NAVY', 'ENGINE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(395, 'Graduate Engineer', 'MARCHANT NAVY', 'ENGINE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(396, 'Engine Cadet', 'MARCHANT NAVY', 'ENGINE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(397, 'Hotel Service Engineer', 'MARCHANT NAVY', 'ENGINE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(398, 'Engine Mechanic', 'MARCHANT NAVY', 'ENGINE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(399, 'Engine Storekeeper', 'MARCHANT NAVY', 'ENGINE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(400, 'Motorman', 'MARCHANT NAVY', 'ENGINE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(401, 'Fitter', 'MARCHANT NAVY', 'ENGINE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(402, 'Oiler Wiper ', 'MARCHANT NAVY', 'ENGINE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(403, 'Engine Utility Man', 'MARCHANT NAVY', 'ENGINE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(404, 'Plumber', 'MARCHANT NAVY', 'ENGINE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(405, 'Upholsterer', 'MARCHANT NAVY', 'ENGINE ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(406, 'Chief Electrical ', 'MARCHANT NAVY', 'ELECTRO-TECHNICAL ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(407, 'Engineer', 'MARCHANT NAVY', 'ELECTRO-TECHNICAL ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(408, 'Electrical Engineer', 'MARCHANT NAVY', 'ELECTRO-TECHNICAL ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(409, 'Electrician', 'MARCHANT NAVY', 'ELECTRO-TECHNICAL ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(410, 'Electronics Engineer Junior ', 'MARCHANT NAVY', 'ELECTRO-TECHNICAL ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(411, 'Electro-Technical Cadet ', 'MARCHANT NAVY', 'ELECTRO-TECHNICAL ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(412, 'Chief Refrigeration Engineer', 'MARCHANT NAVY', 'ELECTRO-TECHNICAL ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(413, 'Refrigeration Engineer', 'MARCHANT NAVY', 'ELECTRO-TECHNICAL ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(414, 'Air Conditioning Technician', 'MARCHANT NAVY', 'ELECTRO-TECHNICAL ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(415, 'Cleaner ', 'MARCHANT NAVY', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(416, 'Housekeeper', 'MARCHANT NAVY', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(417, 'Utility Cleaner', 'MARCHANT NAVY', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(418, 'Computer Systems Officer', 'MARCHANT NAVY', 'INFORMATION TECHNOLOGY / IT ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(419, 'Provision Master', 'MARCHANT NAVY', 'INVENTORY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(420, 'Hotel Controller', 'MARCHANT NAVY', 'INVENTORY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(421, 'Inventory Manager', 'MARCHANT NAVY', 'INVENTORY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(422, 'Hotel Storekeeper', 'MARCHANT NAVY', 'INVENTORY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(423, 'Provision Master - ', 'MARCHANT NAVY', 'INVENTORY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(424, 'Storekeeper', 'MARCHANT NAVY', 'INVENTORY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(425, 'Assistant Storekeeper', 'MARCHANT NAVY', 'INVENTORY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(426, 'Rig Manager', 'OFFSHORE', 'ADMINISTRATION', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(427, 'Toolpusher', 'OFFSHORE', 'ADMINISTRATION', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(428, 'Admin', 'OFFSHORE', 'ADMINISTRATION', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(429, 'Driller', 'OFFSHORE', 'ENGINEERING', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(430, 'Derrickhand', 'OFFSHORE', 'ENGINEERING', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(431, 'Motorman', 'OFFSHORE', 'ENGINEERING', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(432, 'Roughnech', 'OFFSHORE', 'ENGINEERING', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(433, 'Roustabout', 'OFFSHORE', 'ENGINEERING', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(434, 'Labour', 'OFFSHORE', 'ENGINEERING', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(435, 'Chemical Technician ', 'OFFSHORE', 'ENGINEERING', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(436, 'Chemical Engineer', 'OFFSHORE', 'ENGINEERING', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(437, 'Chemical Process Engineer', 'OFFSHORE', 'ENGINEERING', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(438, 'Chef', 'OFFSHORE', 'CATERING', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(439, 'Cook', 'OFFSHORE', 'CATERING', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(440, 'Waiter', 'OFFSHORE', 'CATERING', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(441, 'Cleaner', 'OFFSHORE', 'CATERING', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(442, 'Steward', 'OFFSHORE', 'CATERING', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(443, 'Concierge', 'HOTEL & RESORT', 'FRONT DESK', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(444, 'Secretary', 'HOTEL & RESORT', 'FRONT DESK', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(445, 'Front Desk Associate', 'HOTEL & RESORT', 'FRONT DESK', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(446, 'Receptionist', 'HOTEL & RESORT', 'FRONT DESK', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(447, 'Front Desk Associate', 'HOTEL & RESORT', 'FRONT DESK', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(448, 'Front Office Manager', 'HOTEL & RESORT', 'FRONT DESK', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(449, 'Clark', 'HOTEL & RESORT', 'FRONT DESK', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(450, 'Reservation Agent', 'HOTEL & RESORT', 'FRONT DESK', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(451, 'Guest Service Associate', 'HOTEL & RESORT', 'FRONT DESK', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(452, 'Bellboy', 'HOTEL & RESORT', 'FRONT DESK', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(453, 'Reservationist', 'HOTEL & RESORT', 'FRONT DESK', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(454, 'Valet', 'HOTEL & RESORT', 'FRONT DESK', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(455, 'Evant Manager', 'HOTEL & RESORT', 'EVANT PLANNER ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(456, 'Exexutive Conference Manager', 'HOTEL & RESORT', 'EVANT PLANNER ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(457, 'Executive Meeting Manager', 'HOTEL & RESORT', 'EVANT PLANNER ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(458, 'Meeting & Convention Planner', 'HOTEL & RESORT', 'EVANT PLANNER ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(459, 'Meeting Coordinator', 'HOTEL & RESORT', 'EVANT PLANNER ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(460, 'Meeting Manager', 'HOTEL & RESORT', 'EVANT PLANNER ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(461, 'Meeting Specialist', 'HOTEL & RESORT', 'EVANT PLANNER ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(462, 'Evant Manager', 'HOTEL & RESORT', 'EVANT PLANNER ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(463, 'Wedding Cordinator', 'HOTEL & RESORT', 'EVANT PLANNER ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(464, 'Café Manager ', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(465, 'Catering Manager', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(466, 'Chef', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(467, 'Cook', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(468, 'F & B Manager', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(469, 'Kitchen Manager', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(470, 'Pastry Chef', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(471, 'Restaurent Manager', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(472, 'Sous Chef', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(473, 'Executive Chef', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(474, 'Executive Sous Chef', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(475, 'Sous Chef', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(476, 'Chef De Partie', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(477, 'Demi Chef De Partie', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `jobtitles` (`id`, `name`, `cat_id`, `dp_id`, `created_at`, `updated_at`) VALUES
(478, 'Chef Tournant', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(479, '1st Cook ', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(480, 'Commis 1', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(481, '2nd Cook ', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(482, 'Commis 2', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(483, '3rd Cook', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(484, 'Sushi Chef', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(485, 'Cook Trainee', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(486, 'Crew Cook', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(487, 'Crew Cook Assistant', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(488, 'Crew Cook Utility', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(489, 'Pastry Chef Supervisor', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(490, 'Assistant Pastry ', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(491, 'Chef Supervisor', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(492, 'Pastry Chef', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(493, 'Pastry Trainee', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(494, 'Baker Supervisor', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(495, 'Assistant Baker ', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(496, 'Supervisor', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(497, 'Baker', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(498, 'Baker Trainee', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(499, 'Butcher Supervisor', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(500, 'Assistant Butcher ', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(501, 'Supervisor Butcher', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(502, 'Butcher Trainee', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(503, 'Butcher ', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(504, 'Utility Sanitation Officer', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(505, 'Galley Steward', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(506, 'Galley Cleaner', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(507, 'Officer Messman ', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(508, 'Staff Messman', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(509, 'Pantry Man', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(510, 'Dishwasher / Potwasher', 'HOTEL & RESORT', 'KITCHEN', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(511, 'Back Office Assistant', 'HOTEL & RESORT', 'HOSPITALITY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(512, 'Catering Sales Manager', 'HOTEL & RESORT', 'HOSPITALITY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(513, 'Director of Hotel Sales ', 'HOTEL & RESORT', 'HOSPITALITY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(514, 'Group Sales Manager', 'HOTEL & RESORT', 'HOSPITALITY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(515, 'Guest Room Sales Manager', 'HOTEL & RESORT', 'HOSPITALITY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(516, 'Hotel Manger', 'HOTEL & RESORT', 'HOSPITALITY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(517, 'Lodging Manger', 'HOTEL & RESORT', 'HOSPITALITY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(518, 'Sales & Marketing Manger', 'HOTEL & RESORT', 'HOSPITALITY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(519, 'Shift Leader', 'HOTEL & RESORT', 'HOSPITALITY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(520, 'Shift Manger ', 'HOTEL & RESORT', 'HOSPITALITY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(521, 'Spa Manger', 'HOTEL & RESORT', 'HOSPITALITY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(522, 'Wedding Sales Manger', 'HOTEL & RESORT', 'HOSPITALITY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(523, 'Beauty Salon ', 'HOTEL & RESORT', 'BEAUTY / SPA / FITNESS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(524, 'Spa Manager', 'HOTEL & RESORT', 'BEAUTY / SPA / FITNESS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(525, 'Assistant Beauty Salon ', 'HOTEL & RESORT', 'BEAUTY / SPA / FITNESS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(526, 'Spa Manager', 'HOTEL & RESORT', 'BEAUTY / SPA / FITNESS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(527, 'Beauty Therapist', 'HOTEL & RESORT', 'BEAUTY / SPA / FITNESS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(528, 'Nail Technician ', 'HOTEL & RESORT', 'BEAUTY / SPA / FITNESS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(529, 'Hair Stylist ', 'HOTEL & RESORT', 'BEAUTY / SPA / FITNESS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(530, 'Hairdresser', 'HOTEL & RESORT', 'BEAUTY / SPA / FITNESS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(531, 'Barber ', 'HOTEL & RESORT', 'BEAUTY / SPA / FITNESS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(532, 'Massage Therapist', 'HOTEL & RESORT', 'BEAUTY / SPA / FITNESS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(533, 'Personal Trainer', 'HOTEL & RESORT', 'BEAUTY / SPA / FITNESS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(534, 'Fitness Instructor', 'HOTEL & RESORT', 'BEAUTY / SPA / FITNESS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(535, 'Spa Receptionist', 'HOTEL & RESORT', 'BEAUTY / SPA / FITNESS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(536, 'Spa Physician', 'HOTEL & RESORT', 'BEAUTY / SPA / FITNESS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(537, 'Acupuncturist', 'HOTEL & RESORT', 'BEAUTY / SPA / FITNESS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(538, 'Alternative Instructor', 'HOTEL & RESORT', 'BEAUTY / SPA / FITNESS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(539, 'Physiotherapist', 'HOTEL & RESORT', 'BEAUTY / SPA / FITNESS ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(540, 'Director of Housekeeping', 'HOTEL & RESORT', 'HOUSEKEEPING', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(541, 'Director of Maintanence', 'HOTEL & RESORT', 'HOUSEKEEPING', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(542, 'Director of Operations', 'HOTEL & RESORT', 'HOUSEKEEPING', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(543, 'Executive Housekeeper', 'HOTEL & RESORT', 'HOUSEKEEPING', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(544, 'Housekeeper', 'HOTEL & RESORT', 'HOUSEKEEPING', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(545, 'Housekeeping Aide', 'HOTEL & RESORT', 'HOUSEKEEPING', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(546, 'Housekeeping Supervisor', 'HOTEL & RESORT', 'HOUSEKEEPING', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(547, 'Lead Housekeeper', 'HOTEL & RESORT', 'HOUSEKEEPING', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(548, 'Maid', 'HOTEL & RESORT', 'HOUSEKEEPING', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(549, 'Maintance Supervisor', 'HOTEL & RESORT', 'MAINTANENCE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(550, 'Maintanence Worker', 'HOTEL & RESORT', 'MAINTANENCE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(551, 'Chief Electrical ', 'HOTEL & RESORT', 'MAINTANENCE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(552, 'Engineer', 'HOTEL & RESORT', 'MAINTANENCE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(553, 'Electrical Engineer', 'HOTEL & RESORT', 'MAINTANENCE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(554, 'Electrician', 'HOTEL & RESORT', 'MAINTANENCE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(555, 'Electronics Engineer Junior ', 'HOTEL & RESORT', 'MAINTANENCE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(556, 'Electro-Technical Cadet ', 'HOTEL & RESORT', 'MAINTANENCE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(557, 'Chief Refrigeration Engineer', 'HOTEL & RESORT', 'MAINTANENCE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(558, 'Refrigeration Engineer', 'HOTEL & RESORT', 'MAINTANENCE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(559, 'Air Conditioning Technician', 'HOTEL & RESORT', 'MAINTANENCE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(560, 'Chief Engineer', 'HOTEL & RESORT', 'MAINTANENCE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(561, 'Staff Chief Engineer', 'HOTEL & RESORT', 'MAINTANENCE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(562, '1st Engineer', 'HOTEL & RESORT', 'MAINTANENCE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(563, '2nd Engineer', 'HOTEL & RESORT', 'MAINTANENCE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(564, '3rd EngineerJunior ', 'HOTEL & RESORT', 'MAINTANENCE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(565, '3rd Engineer / ', 'HOTEL & RESORT', 'MAINTANENCE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(566, '4th Engineer Apprentice / ', 'HOTEL & RESORT', 'MAINTANENCE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(567, 'Graduate Engineer', 'HOTEL & RESORT', 'MAINTANENCE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(568, 'Engine Cadet', 'HOTEL & RESORT', 'MAINTANENCE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(569, 'Hotel Service Engineer', 'HOTEL & RESORT', 'MAINTANENCE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(570, 'Engine Mechanic', 'HOTEL & RESORT', 'MAINTANENCE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(571, 'Engine Storekeeper', 'HOTEL & RESORT', 'MAINTANENCE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(572, 'Motorman', 'HOTEL & RESORT', 'MAINTANENCE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(573, 'Fitter', 'HOTEL & RESORT', 'MAINTANENCE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(574, 'Oiler Wiper ', 'HOTEL & RESORT', 'MAINTANENCE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(575, 'Engine Utility Man', 'HOTEL & RESORT', 'MAINTANENCE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(576, 'Plumber', 'HOTEL & RESORT', 'MAINTANENCE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(577, 'Upholsterer', 'HOTEL & RESORT', 'MAINTANENCE', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(578, 'Financial Controller', 'HOTEL & RESORT', 'FINANCIAL ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(579, 'Senior Auditor', 'HOTEL & RESORT', 'FINANCIAL ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(580, 'Junior Auditor', 'HOTEL & RESORT', 'FINANCIAL ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(581, 'Crew Payroll Manager', 'HOTEL & RESORT', 'FINANCIAL ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(582, '2nd Purser Payroll', 'HOTEL & RESORT', 'FINANCIAL ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(583, '2nd Purser Administration - Guest Accounts', 'HOTEL & RESORT', 'FINANCIAL ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(584, 'Staff Accountant', 'HOTEL & RESORT', 'FINANCIAL ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(585, 'Chief Housekeeper', 'HOTEL & RESORT', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(586, 'Assistant Chief Housekeeper', 'HOTEL & RESORT', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(587, 'Housekeeping Supervisor', 'HOTEL & RESORT', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(588, 'Head Room Steward', 'HOTEL & RESORT', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(589, 'Stateroom Attendant', 'HOTEL & RESORT', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(590, 'Stateroom Attendant Night', 'HOTEL & RESORT', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(591, 'Guest Area Attendant Night', 'HOTEL & RESORT', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(592, 'Assistant Stateroom Attendant', 'HOTEL & RESORT', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(593, 'Senior Deck Supervisor (Housekeeping)', 'HOTEL & RESORT', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(594, 'Pool & Deck Supervisor', 'HOTEL & RESORT', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(595, 'Pool & Deck Attendant', 'HOTEL & RESORT', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(596, 'Public Area Attendant Supervisor', 'HOTEL & RESORT', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(597, 'Public Area Attendant', 'HOTEL & RESORT', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(598, 'Crew Area Attendant Supervisor', 'HOTEL & RESORT', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(599, 'Crew Area Attendant', 'HOTEL & RESORT', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(600, 'Head Butler', 'HOTEL & RESORT', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(601, 'Butler', 'HOTEL & RESORT', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(602, 'Laundry ', 'HOTEL & RESORT', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(603, 'Supervisor', 'HOTEL & RESORT', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(604, 'Assistant Laundry Supervisor', 'HOTEL & RESORT', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(605, 'Laundry Attendant', 'HOTEL & RESORT', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(606, 'Dry Cleaner', 'HOTEL & RESORT', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(607, 'Linen Keeper', 'HOTEL & RESORT', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(608, 'Facilities Horticulturist-Florist', 'HOTEL & RESORT', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(609, 'Hotel Steward/ess ', 'HOTEL & RESORT', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(610, 'Utility Cleaner', 'HOTEL & RESORT', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(611, 'Tailor', 'HOTEL & RESORT', 'HOUSEKEEPING ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(612, 'Computer Systems Officer', 'HOTEL & RESORT', 'INFORMATION TECHNOLOGY / IT ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(613, 'Computer Systems Hardware Technician', 'HOTEL & RESORT', 'INFORMATION TECHNOLOGY / IT ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(614, 'Data Systems Manager', 'HOTEL & RESORT', 'INFORMATION TECHNOLOGY / IT ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(615, 'Data Systems Asst. Manager', 'HOTEL & RESORT', 'INFORMATION TECHNOLOGY / IT ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(616, 'IT Technical Analyst', 'HOTEL & RESORT', 'INFORMATION TECHNOLOGY / IT ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(617, 'Internet Manager', 'HOTEL & RESORT', 'INFORMATION TECHNOLOGY / IT ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(618, 'Provision Master', 'HOTEL & RESORT', 'INVENTORY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(619, 'Hotel Controller', 'HOTEL & RESORT', 'INVENTORY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(620, 'Inventory Manager', 'HOTEL & RESORT', 'INVENTORY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(621, 'Hotel Storekeeper', 'HOTEL & RESORT', 'INVENTORY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(622, 'Provision Master - ', 'HOTEL & RESORT', 'INVENTORY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(623, 'Storekeeper', 'HOTEL & RESORT', 'INVENTORY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(624, 'Assistant Storekeeper', 'HOTEL & RESORT', 'INVENTORY ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(625, 'Baggage Porter', 'HOTEL & RESORT', 'PORTER', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(626, 'Bell Attendant', 'HOTEL & RESORT', 'PORTER', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `job_seekers`
--

CREATE TABLE `job_seekers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `your_self` longtext DEFAULT NULL,
  `seaman_book_or_bd_cdc` varchar(100) DEFAULT NULL,
  `seaman_book_or_bd_cdc_detail` longtext DEFAULT NULL,
  `password_valid_till_one_year` varchar(255) DEFAULT NULL,
  `full_vaccinated_for_covid` varchar(255) DEFAULT NULL,
  `placement_onboard_considered` varchar(255) DEFAULT NULL,
  `ielts_score` varchar(255) DEFAULT NULL,
  `ielts_score_des` longtext DEFAULT NULL,
  `work_experience` varchar(100) DEFAULT NULL,
  `work_experience_des` longtext DEFAULT NULL,
  `settled_country` varchar(255) DEFAULT NULL,
  `interested_to_work_on_ship` varchar(255) DEFAULT NULL,
  `relative_work_on_ship` varchar(100) DEFAULT NULL,
  `relative_work_on_ship_des` longtext DEFAULT NULL,
  `pay_isol_or_other` varchar(100) DEFAULT NULL,
  `pay_third_party` varchar(100) DEFAULT NULL,
  `fill_up_by_assists` varchar(100) DEFAULT NULL,
  `family_members_country` varchar(255) DEFAULT NULL,
  `assists_and_family_des` longtext DEFAULT NULL,
  `expected_salary` longtext DEFAULT NULL,
  `hear_about_us` varchar(255) DEFAULT NULL,
  `married_or_not` varchar(100) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `hospitali_course` varchar(255) DEFAULT NULL,
  `sea_motion_work` varchar(255) DEFAULT NULL,
  `get_us_visa` varchar(100) DEFAULT NULL,
  `visa_cancelled_or_not` varchar(100) DEFAULT NULL,
  `refused_us_visa` varchar(100) DEFAULT NULL,
  `travel_country` varchar(100) DEFAULT NULL,
  `terrorist_organization_member` varchar(100) DEFAULT NULL,
  `police_clearance_certificate` varchar(100) DEFAULT NULL,
  `illegal_activity` varchar(100) DEFAULT NULL,
  `arrested` varchar(100) DEFAULT NULL,
  `mental_or_physical_disorder` varchar(100) DEFAULT NULL,
  `disease` varchar(100) DEFAULT NULL,
  `insurgent_organization` varchar(100) DEFAULT NULL,
  `served_military` varchar(100) DEFAULT NULL,
  `charitable_organization` varchar(100) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `personal_summary` longtext DEFAULT NULL,
  `team` varchar(255) DEFAULT NULL,
  `ritz_carlton_brand_work` varchar(255) DEFAULT NULL,
  `valid_schengen_visa` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `gender_identity` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `martial_status` varchar(255) DEFAULT NULL,
  `age_bracket` varchar(255) DEFAULT NULL,
  `disability` varchar(255) DEFAULT NULL,
  `veteran_status` varchar(255) DEFAULT NULL,
  `preferred_pronouns` varchar(255) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_seekers`
--

INSERT INTO `job_seekers` (`id`, `your_self`, `seaman_book_or_bd_cdc`, `seaman_book_or_bd_cdc_detail`, `password_valid_till_one_year`, `full_vaccinated_for_covid`, `placement_onboard_considered`, `ielts_score`, `ielts_score_des`, `work_experience`, `work_experience_des`, `settled_country`, `interested_to_work_on_ship`, `relative_work_on_ship`, `relative_work_on_ship_des`, `pay_isol_or_other`, `pay_third_party`, `fill_up_by_assists`, `family_members_country`, `assists_and_family_des`, `expected_salary`, `hear_about_us`, `married_or_not`, `qualification`, `hospitali_course`, `sea_motion_work`, `get_us_visa`, `visa_cancelled_or_not`, `refused_us_visa`, `travel_country`, `terrorist_organization_member`, `police_clearance_certificate`, `illegal_activity`, `arrested`, `mental_or_physical_disorder`, `disease`, `insurgent_organization`, `served_military`, `charitable_organization`, `first_name`, `last_name`, `email_address`, `phone`, `cv`, `personal_summary`, `team`, `ritz_carlton_brand_work`, `valid_schengen_visa`, `gender`, `gender_identity`, `nationality`, `martial_status`, `age_bracket`, `disability`, `veteran_status`, `preferred_pronouns`, `status`, `created_at`, `updated_at`) VALUES
(1, 'OBpS8ojZn6', 'no', 'KfInH6HCnw', 'No, I do not have a passport.', 'Yes, I am fully vaccinated for COVID.', 'My schedule is negotiable. Either a placement that is more\r\n                                            immediate or one that is made in two years interests me.', 'no', 'NdwA7HnARc', 'no', 'soJGQLGjO5', 'USA', 'Working on a cruise ship is a great way to gain experience\r\n                                            and skills that I can use in any career.', 'no', 'KYDJFesOAT', 'no', 'no', 'no', 'Canada,UK,Europe', 'CUCvXHMWxK', 'VOoq5EhyF2', 'Social media.', 'no', 'O level', 'Hotel Management', 'I work well under pressure because I use the pressure to\r\n                                            help me work more efficiently', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'Mizan', 'Islam', 'kajol1122018@gmail.com', '9552327255', 'uploads/1709568609.pdf', 'MWqZ4T9pfM', 'Beverage', 'Yes, I currently work for The Ritz-Carlton.', 'no', 'Female', 'Female', 'Central American', 'Domestic partnership', '46-50 years', 'I have a disability', 'Protected veteran but choose not to self-identify classification', 'They/Them/Theirs', 'Pending', '2024-03-04 09:32:44', '2024-03-04 10:10:09'),
(2, '8t92yF46Iv', 'no', 'RUGD3zXbKr', 'No, I do not have a passport.', 'I am not currently fully vaccinated for COVID; however, I am willing to complete the series', 'Currently I am interested only in more immediate placement onboard.', 'no', 'q3GDCXvWmM', 'no', 'Mjs7bxrsk2', 'Canada', 'Working on a cruise ship is a great way to gain experience and skills that I can use in any career.', 'no', 'WItdbJw3vh', 'no', 'no', 'no', 'USA,Canada', '26aVJdSNP6', 'dGhMBEUJjv', 'Internet ads.', 'no', 'O level', 'Hotel Management', 'I work well under pressure because I use the pressure to help me work more efficiently', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'Mizan', 'Islam', 'kajol1122018@gmail.com', '5842414987', 'uploads/1709572585.pdf', '1J0lLvJVJL', 'Beverage', 'Yes, I currently work for The Ritz-Carlton.', 'no', 'Female', 'Female', 'Central American', 'Domestic partnership', '46-50 years', 'I have a disability', 'Protected veteran but choose not to self-identify classification', 'They/Them/Theirs', 'Accepted', '2024-03-04 10:13:22', '2024-03-04 13:37:19'),
(3, 'CRDqzXqzgi', 'no', 'Zeia2aBUU7', 'No, I do not have a passport.', 'I am not currently fully vaccinated for COVID; however, I am willing to complete the series', 'Currently I am interested only in more immediate placement onboard.', 'no', 'b8L5SPUOj4', 'no', 'zeKEHF2gCK', 'Canada', 'Working on a cruise ship is a great way to gain experience and skills that I can use in any career.', 'no', 'irZCzYY7Cc', 'no', 'no', 'no', 'Canada', 'NhvvcwawnT', 'FQxsumlcMi', 'Internet ads.', 'no', 'O level', 'Hotel Management', 'I work well under pressure because I use the pressure to help me work more efficiently', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'Mizan', 'Islam', 'kajol1122018@gmail.com', '3399720759', 'uploads/1709580873.pdf', 'F0Tl4vETmu', 'Beverage', 'Yes, I currently work for The Ritz-Carlton.', 'no', 'Female', 'Female', 'Central American', 'Domestic partnership', '46-50 years', 'I have a disability', 'Protected veteran but choose not to self-identify classification', 'They/Them/Theirs', 'Pending', '2024-03-04 13:07:04', '2024-03-04 13:34:33');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_02_19_095110_create_permission_tables', 1),
(6, '2022_02_19_102354_create_admins_table', 1),
(7, '2022_02_07_091424_create_system_information_table', 2),
(8, '2022_07_28_192432_create_video_backgrounds_table', 3),
(9, '2022_07_28_211442_create_sliders_table', 4),
(10, '2022_07_28_221403_create_second_logos_table', 5),
(11, '2022_07_28_230818_create_headlines_table', 6),
(12, '2022_07_28_232703_create_whyjoinuses_table', 7),
(13, '2022_07_28_232752_create_missions_table', 7),
(14, '2022_07_28_235400_create_big_fives_table', 8),
(15, '2022_07_28_235440_create_big_others_table', 8),
(16, '2022_07_30_044504_create_sixthrows_table', 9),
(17, '2022_07_30_050703_create_seventhrows_table', 10),
(18, '2022_07_30_055719_create_urgent_vacancies_table', 11),
(19, '2022_07_30_061020_create_employeereviews_table', 12),
(20, '2022_07_30_061137_create_employerreviews_table', 12),
(21, '2022_07_30_070747_create_tenthrows_table', 13),
(22, '2022_07_31_182423_create_how_it_works_table', 14),
(23, '2022_07_31_182539_create_whyusmissions_table', 14),
(24, '2022_07_31_182618_create_whyusvisions_table', 14),
(25, '2022_07_31_182638_create_whyusvalues_table', 14),
(26, '2022_07_31_182717_create_aboutusexperties_table', 14),
(27, '2022_07_31_182801_create_aboutusexpertiesbigs_table', 14),
(28, '2022_07_31_182830_create_aboutusservices_table', 14),
(29, '2022_07_31_182926_create_aboutusaccrediations_table', 14),
(30, '2022_10_16_220454_create_jobcategories_table', 15),
(31, '2022_10_16_220526_create_jobdepartments_table', 15),
(32, '2022_10_16_220713_create_jobtitles_table', 15),
(33, '2024_03_02_095226_create_partner_with_us_table', 16),
(34, '2024_03_04_081239_create_job_seekers_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `missions`
--

CREATE TABLE `missions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `des` text DEFAULT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\Admin', 1),
(1, 'App\\User', 1),
(2, 'App\\Models\\Admin', 2),
(10, 'App\\Models\\Admin', 19),
(10, 'App\\Models\\Admin', 20),
(13, 'App\\Models\\Admin', 23),
(13, 'App\\Models\\Admin', 25),
(13, 'App\\Models\\Admin', 26),
(13, 'App\\Models\\Admin', 27),
(13, 'App\\Models\\Admin', 28),
(13, 'App\\Models\\Admin', 29),
(13, 'App\\Models\\Admin', 30),
(13, 'App\\Models\\Admin', 41),
(14, 'App\\Models\\Admin', 36),
(14, 'App\\Models\\Admin', 37),
(14, 'App\\Models\\Admin', 38),
(14, 'App\\Models\\Admin', 39),
(14, 'App\\Models\\Admin', 40);

-- --------------------------------------------------------

--
-- Table structure for table `partner_with_us`
--

CREATE TABLE `partner_with_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `des` text DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partner_with_us`
--

INSERT INTO `partner_with_us` (`id`, `name`, `company_name`, `state`, `country`, `email`, `phone`, `des`, `status`, `created_at`, `updated_at`) VALUES
(3, 'নতুন এনজিও', 'gjhfgj', 'sdfgsdfgdfs', 'Bangladesh', 'kkajol428@gmail.com', '11111111111111111111', 'sdfsdfsdf', 'Accepted', '2024-03-02 05:11:43', '2024-03-04 00:37:11'),
(4, 'Hedy Gould', 'Gentry Cross Inc', 'Incididunt earum eos', 'Syrian Arab Republic', 'zoni@mailinator.com', '+1 (578) 962-1828', 'Officia totam quaera', 'Pending', '2024-03-02 05:12:05', '2024-03-02 05:12:05'),
(5, 'Jameson Carter', 'Durham Powers Co', 'Tempora ut sint culp', 'Norfolk Island', 'zedocoq@mailinator.com', '+1 (781) 435-7845', 'Ea commodo enim quos', 'Rejected', '2024-03-02 05:12:15', '2024-03-04 00:45:06');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `group_name` varchar(255) DEFAULT NULL,
  `app_url` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `group_name`, `app_url`, `created_at`, `updated_at`) VALUES
(1, 'dashboard.view', 'admin', 'dashboard', 'admin/dashboard_add', '2021-03-24 02:04:15', '2022-02-15 02:50:30'),
(2, 'dashboard.edit', 'admin', 'dashboard', NULL, '2021-03-24 02:04:15', '2021-03-24 02:04:15'),
(8, 'admin.create', 'admin', 'admin', 'admin/admin_add', '2021-03-24 02:04:16', '2022-02-15 02:48:17'),
(9, 'admin.view', 'admin', 'admin', 'admin/admin.view', '2021-03-24 02:04:16', '2022-02-15 02:48:20'),
(10, 'admin.edit', 'admin', 'admin', 'admin/admin.edit', '2021-03-24 02:04:16', '2022-02-15 02:48:23'),
(11, 'admin.delete', 'admin', 'admin', 'admin/admin.delete', '2021-03-24 02:04:16', '2022-02-15 02:48:25'),
(12, 'admin.approve', 'admin', 'admin', 'admin/admin.approve', '2021-03-24 02:04:16', '2022-02-15 02:48:27'),
(13, 'role.create', 'admin', 'role', NULL, '2021-03-24 02:04:16', '2021-03-24 02:04:16'),
(14, 'role.view', 'admin', 'role', NULL, '2021-03-24 02:04:16', '2021-03-24 02:04:16'),
(15, 'role.edit', 'admin', 'role', NULL, '2021-03-24 02:04:17', '2021-03-24 02:04:17'),
(16, 'role.delete', 'admin', 'role', NULL, '2021-03-24 02:04:17', '2021-03-24 02:04:17'),
(17, 'role.approve', 'admin', 'role', NULL, '2021-03-24 02:04:17', '2021-03-24 02:04:17'),
(18, 'profile.view', 'admin', 'profile', NULL, '2021-03-24 02:04:17', '2021-03-24 02:04:17'),
(19, 'profile.edit', 'admin', 'profile', NULL, '2021-03-24 02:04:17', '2021-03-24 02:04:17'),
(20, 'permission.create', 'admin', 'permission', NULL, NULL, NULL),
(21, 'permission.view', 'admin', 'permission', NULL, NULL, NULL),
(22, 'permission.edit', 'admin', 'permission', NULL, NULL, NULL),
(23, 'permission.delete', 'admin', 'permission', NULL, NULL, NULL),
(29, 'user.create', 'admin', 'User', 'admin/user_add', NULL, NULL),
(30, 'user.view', 'admin', 'User', NULL, NULL, NULL),
(31, 'user.edit', 'admin', 'User', NULL, NULL, NULL),
(32, 'user.delete', 'admin', 'User', NULL, NULL, NULL),
(33, 'user.print', 'admin', 'User', NULL, NULL, NULL),
(315, 'system_information_add', 'admin', 'System information', 'admin/system_information_add', NULL, NULL),
(316, 'system_information_view', 'admin', 'System information', NULL, NULL, NULL),
(317, 'system_information_update', 'admin', 'System information', NULL, NULL, NULL),
(318, 'system_information_delete', 'admin', 'System information', NULL, NULL, NULL),
(390, 'video_background_add', 'admin', 'video_background', 'admin/video_background_add', NULL, NULL),
(391, 'video_background_view', 'admin', 'video_background', 'admin/video_background_view', NULL, NULL),
(392, 'video_background_delete', 'admin', 'video_background', 'admin/video_background_delete', NULL, NULL),
(393, 'video_background_update', 'admin', 'video_background', 'admin/video_background_update', NULL, NULL),
(394, 'second_row_add', 'admin', 'second_row', 'admin/second_row_add', NULL, NULL),
(395, 'second_row_view', 'admin', 'second_row', 'admin/second_row_view', NULL, NULL),
(396, 'second_row_delete', 'admin', 'second_row', 'admin/second_row_delete', NULL, NULL),
(397, 'second_row_update', 'admin', 'second_row', 'admin/second_row_update', NULL, NULL),
(398, 'special_news_add', 'admin', 'special_new', 'admin/special_news_add', NULL, NULL),
(399, 'special_news_view', 'admin', 'special_new', 'admin/special_news_view', NULL, NULL),
(400, 'special_news_delete', 'admin', 'special_new', 'admin/special_news_delete', NULL, NULL),
(401, 'special_news_update', 'admin', 'special_new', 'admin/special_news_update', NULL, NULL),
(402, 'third_row_add', 'admin', 'third_row', 'admin/third_row_add', NULL, NULL),
(403, 'third_row_view', 'admin', 'third_row', 'admin/third_row_view', NULL, NULL),
(404, 'third_row_delete', 'admin', 'third_row', 'admin/third_row_delete', NULL, NULL),
(405, 'third_row_add_update', 'admin', 'third_row', 'admin/third_row_add_update', NULL, NULL),
(406, 'fourth_row_add', 'admin', 'fourth_row', 'admin/fourth_row_add', NULL, NULL),
(407, 'fourth_row_view', 'admin', 'fourth_row', 'admin/fourth_row_view', NULL, NULL),
(408, 'fourth_row_delete', 'admin', 'fourth_row', 'admin/fourth_row_delete', NULL, NULL),
(410, 'fourth_row_update', 'admin', 'fourth_row', 'admin/fourth_row_update', NULL, NULL),
(411, 'fifth_row_add', 'admin', 'fifth_row', 'admin/fifth_row_add', NULL, NULL),
(412, 'fifth_row_view', 'admin', 'fifth_row', 'admin/fifth_row_view', NULL, NULL),
(413, 'fifth_row_delete', 'admin', 'fifth_row', 'admin/fifth_row_delete', NULL, NULL),
(414, 'fifth_row_update', 'admin', 'fifth_row', 'admin/fifth_row_update', NULL, NULL),
(415, 'sixth_row_add', 'admin', 'sixth_row', 'admin/sixth_row_add', NULL, NULL),
(416, 'sixth_row_view', 'admin', 'sixth_row', 'admin/sixth_row_view', NULL, NULL),
(417, 'sixth_row_delete', 'admin', 'sixth_row', 'admin/sixth_row_delete', NULL, NULL),
(418, 'sixth_row_update', 'admin', 'sixth_row', 'admin/sixth_row_update', NULL, NULL),
(419, 'seventh_row_add', 'admin', 'seventh_row', 'admin/seventh_row_add', NULL, NULL),
(420, 'seventh_row_view', 'admin', 'seventh_row', 'admin/seventh_row_view', NULL, NULL),
(421, 'seventh_row_delete', 'admin', 'seventh_row', 'admin/seventh_row_delete', NULL, NULL),
(422, 'seventh_row_update', 'admin', 'seventh_row', 'admin/seventh_row_update', NULL, NULL),
(423, 'eight_row_add', 'admin', 'eight_row', 'admin/eight_row_add', NULL, NULL),
(424, 'eight_row_view', 'admin', 'eight_row', 'admin/eight_row_view', NULL, NULL),
(425, 'eight_row_delete', 'admin', 'eight_row', 'admin/eight_row_delete', NULL, NULL),
(426, 'eight_row_update', 'admin', 'eight_row', 'admin/eight_row_update', NULL, NULL),
(427, 'ninth_row_add', 'admin', 'ninth_row', 'admin/ninth_row_add', NULL, NULL),
(428, 'ninth_row_view', 'admin', 'ninth_row', 'admin/ninth_row_view', NULL, NULL),
(429, 'ninth_row_delete', 'admin', 'ninth_row', 'admin/ninth_row_delete', NULL, NULL),
(430, 'ninth_row_update', 'admin', 'ninth_row', 'admin/ninth_row_update', NULL, NULL),
(431, 'tenth_row_add', 'admin', 'tenth_row', 'admin/tenth_row_add', NULL, NULL),
(432, 'tenth_row_view', 'admin', 'tenth_row', 'admin/tenth_row_view', NULL, NULL),
(433, 'tenth_row_delete', 'admin', 'tenth_row', 'admin/tenth_row_delete', NULL, NULL),
(434, 'tenth_row_update', 'admin', 'tenth_row', 'admin/tenth_row_update', NULL, NULL),
(435, 'how_it_work_view', 'admin', 'how_it_work', 'admin/how_it_work_view', NULL, NULL),
(436, 'how_it_work_update', 'admin', 'how_it_work', 'admin/how_it_work_update', NULL, NULL),
(437, 'how_it_work_delete', 'admin', 'how_it_work', 'admin/how_it_work_delete', NULL, NULL),
(438, 'why_us_mission', 'admin', 'why_us', 'admin/why_us_mission', NULL, NULL),
(439, 'why_us_vision', 'admin', 'why_us', 'admin/why_us_vision', NULL, NULL),
(440, 'why_us_values', 'admin', 'why_us', 'admin/why_us_values', NULL, NULL),
(441, 'about_us_experties', 'admin', 'about_us', 'admin/about_us_experties', NULL, NULL),
(442, 'about_us_service', 'admin', 'about_us', 'admin/about_us_service', NULL, NULL),
(443, 'about_us_accrediations', 'admin', 'about_us', 'admin/about_us_accrediations', NULL, NULL),
(444, 'job_category_add', 'admin', 'job_category', 'admin/job_category_add', NULL, NULL),
(445, 'job_category_view', 'admin', 'job_category', 'admin/job_category_view', NULL, NULL),
(446, 'job_category_delete', 'admin', 'job_category', 'admin/job_category_delete', NULL, NULL),
(447, 'job_category_update', 'admin', 'job_category', 'admin/job_category_update', NULL, NULL),
(448, 'job_department_add', 'admin', 'job_department', 'admin/job_department_add', NULL, NULL),
(449, 'job_department_view', 'admin', 'job_department', 'admin/job_department_view', NULL, NULL),
(450, 'job_department_delete', 'admin', 'job_department', 'admin/job_department_delete', NULL, NULL),
(451, 'job_department_update', 'admin', 'job_department', 'admin/job_department_update', NULL, NULL),
(452, 'job_title_add', 'admin', 'job_title', 'admin/job_title_add', NULL, NULL),
(453, 'job_title_view', 'admin', 'job_title', 'admin/job_title_view', NULL, NULL),
(454, 'job_title_delete', 'admin', 'job_title', 'admin/job_title_delete', NULL, NULL),
(455, 'job_title_update', 'admin', 'job_title', 'admin/job_title_update', NULL, NULL),
(456, 'employeeSectionView', 'admin', 'employee', 'admin/employeeSectionView', NULL, NULL),
(457, 'partnerWithUsAdd', 'admin', 'partnerWithUs', 'admin/partnerWithUsAdd', NULL, NULL),
(458, 'partnerWithUsView', 'admin', 'partnerWithUs', 'admin/partnerWithUsView', NULL, NULL),
(459, 'partnerWithUsDelete', 'admin', 'partnerWithUs', 'admin/partnerWithUsDelete', NULL, NULL),
(460, 'partnerWithUsUpdate', 'admin', 'partnerWithUs', 'admin/partnerWithUsUpdate', NULL, NULL),
(461, 'jobSeekerAdd', 'admin', 'jobSeeker', 'admin/jobSeekerAdd', NULL, NULL),
(462, 'jobSeekerView', 'admin', 'jobSeeker', 'admin/jobSeekerView', NULL, NULL),
(463, 'jobSeekerDelete', 'admin', 'jobSeeker', 'admin/jobSeekerDelete', NULL, NULL),
(464, 'jobSeekerUpdate', 'admin', 'jobSeeker', 'admin/jobSeekerUpdate', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'admin', '2021-03-24 02:04:14', '2021-03-24 02:04:14'),
(2, 'admin', 'admin', '2021-03-24 02:04:14', '2021-03-24 02:04:14'),
(10, 'Teacher', 'admin', '2022-01-30 22:59:56', '2022-01-30 22:59:56'),
(13, 'employee', 'admin', '2022-02-07 23:46:42', '2022-02-07 23:46:42'),
(14, 'partner', 'admin', '2024-03-04 00:26:13', '2024-03-04 00:26:13');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(1, 10),
(1, 13),
(1, 14),
(2, 1),
(2, 2),
(2, 10),
(2, 13),
(2, 14),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(18, 2),
(18, 13),
(18, 14),
(19, 1),
(19, 2),
(19, 13),
(19, 14),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(315, 1),
(315, 2),
(316, 1),
(316, 2),
(317, 1),
(317, 2),
(318, 1),
(390, 1),
(390, 2),
(391, 1),
(391, 2),
(392, 1),
(392, 2),
(393, 1),
(393, 2),
(394, 1),
(394, 2),
(395, 1),
(395, 2),
(396, 1),
(396, 2),
(397, 1),
(397, 2),
(398, 1),
(398, 2),
(399, 1),
(399, 2),
(400, 1),
(400, 2),
(401, 1),
(401, 2),
(402, 1),
(402, 2),
(403, 1),
(403, 2),
(404, 1),
(404, 2),
(405, 1),
(405, 2),
(406, 1),
(406, 2),
(407, 1),
(407, 2),
(408, 1),
(408, 2),
(410, 1),
(410, 2),
(411, 1),
(411, 2),
(412, 1),
(412, 2),
(413, 1),
(413, 2),
(414, 1),
(414, 2),
(415, 1),
(415, 2),
(416, 1),
(416, 2),
(417, 1),
(417, 2),
(418, 1),
(418, 2),
(419, 1),
(419, 2),
(420, 1),
(420, 2),
(421, 1),
(421, 2),
(422, 1),
(422, 2),
(423, 1),
(423, 2),
(424, 1),
(424, 2),
(425, 1),
(425, 2),
(426, 1),
(426, 2),
(427, 1),
(427, 2),
(428, 1),
(428, 2),
(429, 1),
(429, 2),
(430, 1),
(430, 2),
(431, 1),
(431, 2),
(432, 1),
(432, 2),
(433, 1),
(433, 2),
(434, 1),
(434, 2),
(435, 1),
(435, 2),
(436, 1),
(436, 2),
(437, 1),
(437, 2),
(438, 1),
(438, 2),
(439, 1),
(439, 2),
(440, 1),
(440, 2),
(441, 1),
(441, 2),
(442, 1),
(442, 2),
(443, 1),
(443, 2),
(444, 1),
(444, 2),
(445, 1),
(445, 2),
(446, 1),
(446, 2),
(447, 1),
(447, 2),
(448, 1),
(448, 2),
(449, 1),
(449, 2),
(450, 1),
(450, 2),
(451, 1),
(451, 2),
(452, 1),
(452, 2),
(453, 1),
(453, 2),
(454, 1),
(454, 2),
(455, 1),
(455, 2),
(456, 1),
(457, 1),
(458, 1),
(459, 1),
(460, 1),
(461, 1),
(462, 1),
(463, 1),
(464, 1);

-- --------------------------------------------------------

--
-- Table structure for table `second_logos`
--

CREATE TABLE `second_logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `des` text DEFAULT NULL,
  `image` text NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `second_logos`
--

INSERT INTO `second_logos` (`id`, `title`, `des`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, '<p>ghfghfghfg</p>', 'public/uploads/1659049264.png', NULL, '2022-07-29 06:01:04', '2022-07-29 06:01:04'),
(2, 'new', 'ff', 'public/uploads/1659049608.png', NULL, '2022-07-29 06:06:48', '2022-07-29 06:06:48');

-- --------------------------------------------------------

--
-- Table structure for table `seventhrows`
--

CREATE TABLE `seventhrows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `des` text DEFAULT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seventhrows`
--

INSERT INTO `seventhrows` (`id`, `title`, `des`, `image`, `created_at`, `updated_at`) VALUES
(3, 'new', 'wed', 'public/uploads/download.png', '2022-07-29 23:55:18', '2022-07-29 23:55:18'),
(4, 'new', 'ere', 'public/uploads/photo-1523275335684-37898b6bafoooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo30.jpg', '2022-07-29 23:55:19', '2022-07-29 23:55:19');

-- --------------------------------------------------------

--
-- Table structure for table `sixthrows`
--

CREATE TABLE `sixthrows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `des` text DEFAULT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'public/uploads/1659046233.png', NULL, '2022-07-29 05:10:33', '2022-07-29 05:10:33');

-- --------------------------------------------------------

--
-- Table structure for table `system_information`
--

CREATE TABLE `system_information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `System_Name` varchar(255) DEFAULT NULL,
  `Phone` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `system_information`
--

INSERT INTO `system_information` (`id`, `logo`, `icon`, `System_Name`, `Phone`, `Email`, `Address`, `created_at`, `updated_at`) VALUES
(1, 'public/uploads/1659034473.png', 'public/uploads/1659034473.png', 'ISOL', '01800000', 'kk@gmail.com', 'Dhaka', '2022-02-07 04:03:26', '2022-07-29 01:54:33');

-- --------------------------------------------------------

--
-- Table structure for table `tenthrows`
--

CREATE TABLE `tenthrows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `urgent_vacancies`
--

CREATE TABLE `urgent_vacancies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `des` text DEFAULT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `urgent_vacancies`
--

INSERT INTO `urgent_vacancies` (`id`, `title`, `des`, `image`, `created_at`, `updated_at`) VALUES
(1, 'rewre', '<p>ewrwer</p>', 'public/uploads/1659161300.jpeg', '2022-07-30 00:08:20', '2022-07-30 00:08:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `video_backgrounds`
--

CREATE TABLE `video_backgrounds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video_file` text NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video_backgrounds`
--

INSERT INTO `video_backgrounds` (`id`, `video_file`, `name`, `created_at`, `updated_at`) VALUES
(1, 'public/uploads/1659042398.mp4', '0', '2022-07-29 04:06:38', '2022-07-29 04:06:38');

-- --------------------------------------------------------

--
-- Table structure for table `whyjoinuses`
--

CREATE TABLE `whyjoinuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `des` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `whyjoinuses`
--

INSERT INTO `whyjoinuses` (`id`, `title`, `des`, `created_at`, `updated_at`) VALUES
(1, 'hgj5', '<p>hgjhgj555</p>', '2022-07-29 06:36:06', '2022-07-29 06:36:18');

-- --------------------------------------------------------

--
-- Table structure for table `whyusmissions`
--

CREATE TABLE `whyusmissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `des` text DEFAULT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `whyusmissions`
--

INSERT INTO `whyusmissions` (`id`, `des`, `image`, `created_at`, `updated_at`) VALUES
(1, '<p>rtrtr44</p>', 'public/uploads/1659295424.png', '2022-08-01 02:23:44', '2022-08-01 02:23:53');

-- --------------------------------------------------------

--
-- Table structure for table `whyusvalues`
--

CREATE TABLE `whyusvalues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `whyusvalues`
--

INSERT INTO `whyusvalues` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'rtr', 'public/uploads/1659295476.jpg', '2022-08-01 02:24:36', '2022-08-01 02:24:36'),
(2, 'fff', 'public/uploads/1659295553.jpg', '2022-08-01 02:25:53', '2022-08-01 02:25:53');

-- --------------------------------------------------------

--
-- Table structure for table `whyusvisions`
--

CREATE TABLE `whyusvisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `des` text DEFAULT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `whyusvisions`
--

INSERT INTO `whyusvisions` (`id`, `des`, `image`, `created_at`, `updated_at`) VALUES
(1, '<p>4err3</p>', 'public/uploads/1659295451.png', '2022-08-01 02:24:11', '2022-08-01 02:24:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutusaccrediations`
--
ALTER TABLE `aboutusaccrediations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutusexperties`
--
ALTER TABLE `aboutusexperties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutusexpertiesbigs`
--
ALTER TABLE `aboutusexpertiesbigs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aboutusservices`
--
ALTER TABLE `aboutusservices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Indexes for table `big_fives`
--
ALTER TABLE `big_fives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `big_others`
--
ALTER TABLE `big_others`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employeereviews`
--
ALTER TABLE `employeereviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employerreviews`
--
ALTER TABLE `employerreviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `headlines`
--
ALTER TABLE `headlines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `how_it_works`
--
ALTER TABLE `how_it_works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobcategories`
--
ALTER TABLE `jobcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobdepartments`
--
ALTER TABLE `jobdepartments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobtitles`
--
ALTER TABLE `jobtitles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_seekers`
--
ALTER TABLE `job_seekers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `missions`
--
ALTER TABLE `missions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `partner_with_us`
--
ALTER TABLE `partner_with_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `second_logos`
--
ALTER TABLE `second_logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seventhrows`
--
ALTER TABLE `seventhrows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sixthrows`
--
ALTER TABLE `sixthrows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_information`
--
ALTER TABLE `system_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenthrows`
--
ALTER TABLE `tenthrows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `urgent_vacancies`
--
ALTER TABLE `urgent_vacancies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video_backgrounds`
--
ALTER TABLE `video_backgrounds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whyjoinuses`
--
ALTER TABLE `whyjoinuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whyusmissions`
--
ALTER TABLE `whyusmissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whyusvalues`
--
ALTER TABLE `whyusvalues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whyusvisions`
--
ALTER TABLE `whyusvisions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutusaccrediations`
--
ALTER TABLE `aboutusaccrediations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aboutusexperties`
--
ALTER TABLE `aboutusexperties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `aboutusexpertiesbigs`
--
ALTER TABLE `aboutusexpertiesbigs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aboutusservices`
--
ALTER TABLE `aboutusservices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `big_fives`
--
ALTER TABLE `big_fives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `big_others`
--
ALTER TABLE `big_others`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employeereviews`
--
ALTER TABLE `employeereviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employerreviews`
--
ALTER TABLE `employerreviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `headlines`
--
ALTER TABLE `headlines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `how_it_works`
--
ALTER TABLE `how_it_works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobcategories`
--
ALTER TABLE `jobcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `jobdepartments`
--
ALTER TABLE `jobdepartments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

--
-- AUTO_INCREMENT for table `jobtitles`
--
ALTER TABLE `jobtitles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=627;

--
-- AUTO_INCREMENT for table `job_seekers`
--
ALTER TABLE `job_seekers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `missions`
--
ALTER TABLE `missions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partner_with_us`
--
ALTER TABLE `partner_with_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=465;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `second_logos`
--
ALTER TABLE `second_logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seventhrows`
--
ALTER TABLE `seventhrows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sixthrows`
--
ALTER TABLE `sixthrows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `system_information`
--
ALTER TABLE `system_information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tenthrows`
--
ALTER TABLE `tenthrows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `urgent_vacancies`
--
ALTER TABLE `urgent_vacancies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `video_backgrounds`
--
ALTER TABLE `video_backgrounds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `whyjoinuses`
--
ALTER TABLE `whyjoinuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `whyusmissions`
--
ALTER TABLE `whyusmissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `whyusvalues`
--
ALTER TABLE `whyusvalues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `whyusvisions`
--
ALTER TABLE `whyusvisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

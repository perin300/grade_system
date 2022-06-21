-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2021 at 11:35 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gradesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_masters`
--

CREATE TABLE `course_masters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Course_code` int(11) NOT NULL,
  `Course_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_noof_lect` int(2) NOT NULL,
  `course_noof_tut` int(2) NOT NULL,
  `course_noof_lab` int(2) NOT NULL,
  `course_credit` int(2) NOT NULL,
  `course_th_totmarks` int(3) NOT NULL,
  `course_th_passmarks` int(3) NOT NULL,
  `course_int_totmarks` int(3) NOT NULL,
  `course_int_passmarks` int(3) NOT NULL,
  `course_lab_totmarks` int(3) NOT NULL,
  `course_lab_passmarks` int(3) NOT NULL,
  `course_ovl_totmarks` int(3) NOT NULL,
  `course_ovl_passmarks` int(3) NOT NULL,
  `course_pass_ind` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `course_category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_type` char(2) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_masters`
--

INSERT INTO `course_masters` (`id`, `Course_code`, `Course_name`, `course_noof_lect`, `course_noof_tut`, `course_noof_lab`, `course_credit`, `course_th_totmarks`, `course_th_passmarks`, `course_int_totmarks`, `course_int_passmarks`, `course_lab_totmarks`, `course_lab_passmarks`, `course_ovl_totmarks`, `course_ovl_passmarks`, `course_pass_ind`, `created_at`, `updated_at`, `course_category`, `course_type`) VALUES
(2, 5002, 'MSC', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '0', NULL, NULL, '', '');

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
-- Table structure for table `grade_masters`
--

CREATE TABLE `grade_masters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Program_code` int(11) NOT NULL,
  `Grade_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Grade_strt_pct` int(11) NOT NULL,
  `Grade_end_pct` int(11) NOT NULL,
  `Grade_points` double(8,2) NOT NULL,
  `Grade_class_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade_remark` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grade_masters`
--

INSERT INTO `grade_masters` (`id`, `Program_code`, `Grade_name`, `Grade_strt_pct`, `Grade_end_pct`, `Grade_points`, `Grade_class_name`, `grade_remark`, `created_at`, `updated_at`) VALUES
(1, 5002, 'A+', 75, 80, 8.00, 'First Class', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `institute_masters`
--

CREATE TABLE `institute_masters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Institute_code` int(11) NOT NULL,
  `Institute_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Institute_address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Institute_flag` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `institute_masters`
--

INSERT INTO `institute_masters` (`id`, `Institute_code`, `Institute_name`, `Institute_address`, `created_at`, `updated_at`, `Institute_flag`) VALUES
(1, 1001, 'LJ KU', '', '2020-11-21 06:14:32', '2021-03-25 09:36:38', '0'),
(2, 2001, 'LJICA', '', '2020-11-21 06:14:32', '2021-03-17 10:13:36', '0'),
(6, 4901, 'ME Civil Structureal Engineering', '', '2021-05-14 22:18:03', '2021-05-14 22:18:25', '0');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_11_21_112736_create_institute_masters_table', 1),
(4, '2020_11_21_112839_create_program_masters_table', 1),
(5, '2021_03_20_135854_create_program_types_table', 2),
(6, '2021_03_20_135949_create_program_categories_table', 2),
(7, '2021_03_22_143414_create_grade_masters_table', 3),
(8, '2021_03_22_143534_create_course_masters_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `program_categories`
--

CREATE TABLE `program_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ProgCat_code` int(11) NOT NULL,
  `ProgCat_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ProgCat_flag` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `program_categories`
--

INSERT INTO `program_categories` (`id`, `ProgCat_code`, `ProgCat_name`, `created_at`, `updated_at`, `ProgCat_flag`) VALUES
(1, 1, 'Bachelor Courses', NULL, '2021-03-25 09:37:43', '0');

-- --------------------------------------------------------

--
-- Table structure for table `program_masters`
--

CREATE TABLE `program_masters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Program_code` int(11) NOT NULL,
  `Program_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Program_category` int(2) NOT NULL,
  `Program_type` int(1) NOT NULL,
  `Program_flag` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `program_masters`
--

INSERT INTO `program_masters` (`id`, `Program_code`, `Program_name`, `created_at`, `updated_at`, `Program_category`, `Program_type`, `Program_flag`) VALUES
(1, 1001, 'Bachelor Architecture', '2020-11-21 06:14:32', '2021-03-25 08:59:29', 0, 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `program_types`
--

CREATE TABLE `program_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ProgType_code` int(11) NOT NULL,
  `ProgType_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ProgType_flag` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `program_types`
--

INSERT INTO `program_types` (`id`, `ProgType_code`, `ProgType_name`, `created_at`, `updated_at`, `ProgType_flag`) VALUES
(1, 1, 'Regular', NULL, NULL, '0'),
(2, 2, 'Part TIme', '2021-03-22 07:28:03', '2021-03-22 07:28:03', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$eH0inT/VgIwda/ctvTFaLOv.kZhQ/DRx1YNMi88ulABcJo4ICJvPi', '2020-11-21 06:14:32', '2020-11-21 06:14:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_masters`
--
ALTER TABLE `course_masters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `course_masters_course_name_unique` (`Course_name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade_masters`
--
ALTER TABLE `grade_masters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `grade_masters_grade_name_unique` (`Grade_name`),
  ADD UNIQUE KEY `grade_masters_grade_class_name_unique` (`Grade_class_name`);

--
-- Indexes for table `institute_masters`
--
ALTER TABLE `institute_masters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `institute_masters_institute_name_unique` (`Institute_name`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program_categories`
--
ALTER TABLE `program_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `program_categories_progcat_name_unique` (`ProgCat_name`);

--
-- Indexes for table `program_masters`
--
ALTER TABLE `program_masters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `program_masters_program_name_unique` (`Program_name`);

--
-- Indexes for table `program_types`
--
ALTER TABLE `program_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `program_types_progtype_name_unique` (`ProgType_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_masters`
--
ALTER TABLE `course_masters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grade_masters`
--
ALTER TABLE `grade_masters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `institute_masters`
--
ALTER TABLE `institute_masters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `program_categories`
--
ALTER TABLE `program_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `program_masters`
--
ALTER TABLE `program_masters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `program_types`
--
ALTER TABLE `program_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

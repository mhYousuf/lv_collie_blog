-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2020 at 04:42 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sc_lv_callie_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone_verified_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL COMMENT '0 = Inactive, 1 = Active',
  `online` int(11) NOT NULL COMMENT '0 = Inactive, 1 = Active',
  `login_at` timestamp NULL DEFAULT NULL,
  `logout_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `role`, `username`, `name`, `password`, `email`, `phone`, `nid`, `remember_token`, `email_verified_at`, `phone_verified_at`, `status`, `online`, `login_at`, `logout_at`, `created_at`, `updated_at`) VALUES
(1, 'Superadmin', 'admin', 'MD. Yousuf Hossain', '$2y$10$6V5djGpNGjP6QG12Y.rV8.kSEiFISdOQerZOGPqPJ21VQ4sAF8PDe', 'yousufhossain50@gmail.com', '01839072709', NULL, NULL, NULL, NULL, 1, 1, '2020-03-27 03:22:48', NULL, '2020-02-25 12:17:35', '2020-03-27 03:22:48');

-- --------------------------------------------------------

--
-- Table structure for table `basic`
--

CREATE TABLE `basic` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copy_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copy_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copy_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL COMMENT '0 = Inactive, 1 = Active',
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basic`
--

INSERT INTO `basic` (`id`, `title`, `website_name`, `phone`, `email`, `logo`, `footer_logo`, `address`, `copy_name`, `copy_link`, `copy_year`, `footer_description`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'web developer', 'www.vasterad.com', '01839072709', 'boy230728@gmail.com', '1582685191.jpg', '1582685192.jpg', 'baburhat,chandpur', 'softwareinbd', 'http://softwareinbd.com/', '2020', '/lsdjhfjgf', 1, NULL, NULL, '2020-02-25 20:46:30', '2020-02-25 20:46:30');

-- --------------------------------------------------------

--
-- Table structure for table `bl_details`
--

CREATE TABLE `bl_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '1',
  `category_id` int(11) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL COMMENT '0 = Inactive, 1 = Active',
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bl_details`
--

INSERT INTO `bl_details` (`id`, `user_id`, `category_id`, `sub_cat_id`, `date`, `heading`, `image`, `description`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 5, 1, 1, '2020-03-27', 'Easily balance workloads and  manage resources', '1585290136.jpg', 'Ne bonorum praesent cum, labitur persequeris definitionem quo cu Ne bonorum praesent cum, labitur persequeris definitionem quo cu Ne bonorum praesent cum, labitur persequeris definitionem quo cu Ne bonorum praesent cum, labitur persequeris definitionem quo cu Ne bonorum praesent cum, labitur persequeris definitionem quo cu', 1, NULL, NULL, '2020-03-27 00:22:15', '2020-03-27 04:57:38'),
(3, 1, 3, 3, '2020-03-27', 'Easily balance workloads and  manage resources', '1585290415.jpg', 'Ne bonorum praesent cum, labitur persequeris definitionem quo cu Ne bonorum praesent cum, labitur persequeris definitionem quo cu \r\nNe bonorum praesent cum, labitur persequeris definitionem quo cu Ne bonorum praesent cum, labitur persequeris definitionem quo cu \r\nNe bonorum praesent cum, labitur persequeris definitionem quo cu Ne bonorum praesent cum, labitur persequeris definitionem quo cu \r\nNe bonorum praesent cum, labitur persequeris definitionem quo cu Ne bonorum praesent cum, labitur persequeris definitionem quo cu', 1, NULL, NULL, '2020-03-27 00:26:55', '2020-03-27 04:50:41'),
(6, 1, 2, 2, '2020-03-02', 'Easily balance workloads and  manage resources', '1585303284.jpg', 'Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris. Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.\r\nMel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris. Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.\r\nMel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris. Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.', 1, NULL, NULL, '2020-03-27 04:01:23', '2020-03-27 08:15:16'),
(12, 1, 4, 4, '2020-03-12', 'Easily balance workloads and  manage resources', '1585318984.jpg', 'XDFJSDFJDGDHGHGKkshdsjsgk', 1, NULL, NULL, '2020-03-27 08:23:03', '2020-03-27 08:23:03');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL COMMENT '0 = Inactive, 1 = Active',
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Travel', 1, NULL, NULL, '2020-03-27 00:20:07', '2020-03-27 00:20:07'),
(2, 'Health', 1, NULL, NULL, '2020-03-27 00:23:05', '2020-03-27 00:23:05'),
(3, 'Fashion', 1, NULL, NULL, '2020-03-27 00:25:41', '2020-03-27 00:25:41'),
(4, 'Technology & Health', 1, NULL, NULL, '2020-03-27 04:41:54', '2020-03-27 04:41:54');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL COMMENT '0 = Inactive, 1 = Active',
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `message`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Shovo', 'boyg98096@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 1, NULL, NULL, '2020-02-26 03:20:00', '2020-02-26 03:20:00'),
(2, 'Mithu Mall', 'boyg98096@gmail.com', 'vLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 1, NULL, NULL, '2020-02-26 03:20:27', '2020-02-26 03:20:27');

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
(4, '2020_02_11_170235_create_sub_category_table', 4),
(5, '2020_02_11_174528_create_ls_subcategory_table', 5),
(7, '2020_02_13_070912_create_ct_details_table', 7),
(49, '2020_02_08_171957_create_basic_table', 8),
(50, '2020_02_09_174505_create_social_table', 8),
(51, '2020_02_10_102312_create_category_table', 8),
(52, '2020_02_12_165123_create_sub_category_table', 8),
(53, '2020_02_14_091912_create_admin_table', 8),
(54, '2020_02_18_100103_create_bl_details_table', 8),
(55, '2020_02_19_100729_create_users_table', 8),
(56, '2020_02_21_101201_create_comment_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL COMMENT '0 = Inactive, 1 = Active',
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `icon`, `url`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'fa fa-facebook', 'https://www.youtube.com/watch?v=S6lzo-OWoqI', 1, NULL, NULL, '2020-02-25 20:50:10', '2020-02-25 20:50:10'),
(2, 'fa fa-envelope-o', 'https://www.youtube.com/watch?v=S6lzo-OWoqI', 0, NULL, NULL, '2020-02-26 02:51:37', '2020-02-26 02:51:59');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `subcategory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL COMMENT '0 = Inactive, 1 = Active',
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `category_id`, `subcategory_name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, 'Travel & Lifestyle', 1, NULL, NULL, '2020-03-27 00:20:31', '2020-03-27 00:20:31'),
(2, 2, 'TECHNOLOGY & HEALTH', 1, NULL, NULL, '2020-03-27 00:23:21', '2020-03-27 00:23:21'),
(3, 3, 'Fashion & Health', 1, NULL, NULL, '2020-03-27 00:26:21', '2020-03-27 00:26:21'),
(4, 4, 'Fashion & Health', 1, NULL, NULL, '2020-03-27 04:42:27', '2020-03-27 04:55:20'),
(5, 1, 'yousuf', 0, NULL, NULL, '2020-03-27 06:07:05', '2020-03-27 06:21:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Webusers',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone_verified_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL COMMENT '0 = Inactive, 1 = Active',
  `online` int(11) NOT NULL COMMENT '0 = Inactive, 1 = Active',
  `login_at` timestamp NULL DEFAULT NULL,
  `logout_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `phone`, `password`, `address`, `remember_token`, `email_verified_at`, `phone_verified_at`, `status`, `online`, `login_at`, `logout_at`, `created_at`, `updated_at`) VALUES
(1, 'Webusers', 'Shovo', 'globex@gmail.com', '0254876887', '$2y$10$OiArbgiqbQL/aq1cnRjY/uSQeBdRk4MvRNYFBLa6ItbewOb/KX3YW', ',jhggfd', NULL, NULL, NULL, 1, 0, NULL, NULL, '2020-02-25 12:19:49', '2020-02-25 12:19:49'),
(2, 'Webusers', 'Mithu Mall', 'yousufhossain50@gmail.com', '01839072709', '$2y$10$vkksxbkdk19Ysk81Mtu1/e2a2Wpd4kgY/6yMX9EwOI49cF7Ju9hK.', 'k.,tdjgddd,ukhkgd', NULL, NULL, NULL, 1, 0, '2020-03-27 03:41:07', '2020-03-27 04:28:20', '2020-02-25 12:20:58', '2020-03-27 04:28:20'),
(3, 'Webusers', 'Mithu Mall', 'yousufhossain50@gmail.com', '01839072709', '$2y$10$RhoMS68WBElXcb9cNsmpBu66D43E/tKg621bta2xXQ2eBRUOUfvrS', 'j,ftdjhfagae', NULL, NULL, NULL, 1, 0, NULL, NULL, '2020-02-25 12:22:27', '2020-02-25 12:22:27'),
(4, 'Webusers', 'Mehediul Hassan', 'mdmiton321@gmail.com', '01632651361', '$2y$10$QXU7Et1fTnDfSMLNTSITZ.QElAzkt4PEzZzkMIv0wKVxzUNZC.qKy', 'chandpur', NULL, NULL, NULL, 1, 1, '2020-03-25 11:57:28', NULL, '2020-03-25 11:32:30', '2020-03-25 11:57:28'),
(5, 'Webusers', 'yousuf hossain', 'boy230728@gmail.com', '01839072709', '$2y$10$km75GuB8BW6nhV4O7mA.EueobJo7v5QJgP1hdmnLONlaCQS2eBzA6', 'chandpur', NULL, NULL, NULL, 1, 1, '2020-03-27 07:46:43', '2020-03-27 06:23:21', '2020-03-26 07:37:31', '2020-03-27 07:46:43'),
(6, 'Webusers', 'John Doe', 'john@gmail.com', '01569874589', '$2y$10$v8UX80ZSiOGf6dZfR61eLO7BKLIpiJEfQKPwxV2ubO.mMasfrSgnK', 'Test', NULL, NULL, NULL, 1, 1, '2020-03-26 10:21:14', NULL, '2020-03-26 10:20:16', '2020-03-26 10:21:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basic`
--
ALTER TABLE `basic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bl_details`
--
ALTER TABLE `bl_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `basic`
--
ALTER TABLE `basic`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bl_details`
--
ALTER TABLE `bl_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.2.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Nov 21, 2015 at 11:34 AM
-- Server version: 5.5.41-log
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `taskrmastr`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(14, 'Shopping', 'shopping', '2015-11-21 19:23:21', '2015-11-21 19:23:21'),
(15, 'CS71 Project', 'cs71_project', '2015-11-21 19:27:36', '2015-11-21 19:27:36');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_11_20_103843_create_categories_and_tasks_tables', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
`id` int(10) unsigned NOT NULL,
  `category_id` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `category_id`, `name`, `slug`, `completed`, `description`, `created_at`, `updated_at`) VALUES
(15, 14, 'Milk', 'milk', 0, 'Buy milk from Costco', '2015-11-21 19:24:35', '2015-11-21 19:24:35'),
(16, 14, 'Jacket', 'blazer', 0, 'Buy a jacket from Walmart.', '2015-11-21 19:25:09', '2015-11-21 19:25:09'),
(17, 14, 'Cookies', 'cookies', 0, 'Buy cookies for basketball game.', '2015-11-21 19:25:32', '2015-11-21 19:25:32'),
(18, 14, 'Envelopes', 'envelopes', 0, 'Buy envelopes for mailing cards.', '2015-11-21 19:25:53', '2015-11-21 19:25:53'),
(19, 14, 'Headphones', 'headphones', 0, 'Buy a pair of headphones for flight.', '2015-11-21 19:26:43', '2015-11-21 19:26:43'),
(20, 15, 'Sidebar', 'sidebar', 0, 'Complete sidebar implementation.', '2015-11-21 19:28:15', '2015-11-21 19:28:15'),
(21, 15, 'Analytics', 'analytics', 0, 'Decide on what analytics to present.', '2015-11-21 19:28:50', '2015-11-21 19:28:50'),
(22, 15, 'Account Recovery', 'recovery', 0, 'Add account recovery.', '2015-11-21 19:29:21', '2015-11-21 19:29:21'),
(23, 15, 'Metadata', 'metadata', 0, 'Add category/task metadata.', '2015-11-21 19:29:44', '2015-11-21 19:29:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'yashspatel23', 'yash.spatel23@gmail.com', '$2y$10$0wY7CHejMzLsKhh2hkfB4eLXjgDZ8wXsdEFscrYB0ypgs1dBFK1q2', 'LLjxRikGQwa2IGCbcACOYtbOAbLMP9joL6KoubR8mjXjZh9T1PUVDTHGLzPy', '2015-11-13 05:13:50', '2015-11-21 19:32:39'),
(2, 'yashspatel23', 'yash.spatel23@gmail.coms', '$2y$10$H5AS5Eu4INX47altJEVyhuBTeVNNr/LQJHmg0RAltq9KvyYA.sHOy', NULL, '2015-11-13 05:20:43', '2015-11-13 05:20:43'),
(3, 'testUser', 'test@gmail.com', '$2y$10$PXmSFeczJENlz8mYvaLoAu05sXBC7r2yeIt3JaQjlU9KImwUVsDv6', 'pMEoqUMJ5oEWp5uZ28UBdU51xCPC1MZ50XHAlP5Wh0RX5FwGzc7jNDTtYFEm', '2015-11-15 01:18:39', '2015-11-21 19:32:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
 ADD PRIMARY KEY (`id`), ADD KEY `tasks_category_id_foreign` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
ADD CONSTRAINT `tasks_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 02, 2026 at 11:09 AM
-- Server version: 8.4.7
-- PHP Version: 8.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tumble_gym_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `lead_users`
--

DROP TABLE IF EXISTS `lead_users`;
CREATE TABLE IF NOT EXISTS `lead_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(120) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `age` int NOT NULL,
  `volunteer_role` varchar(60) NOT NULL,
  `availability` varchar(30) NOT NULL,
  `pre_exp` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lead_users`
--

INSERT INTO `lead_users` (`id`, `name`, `email`, `phone`, `age`, `volunteer_role`, `availability`, `pre_exp`, `created_at`) VALUES
(1, 'Test', 'admin@gmail.com', '9924777005', 1, 'Photography Team', 'Full Day', '', '2025-11-13 17:03:15'),
(2, 'Test', 'test3@gmail.com', '7575801648', 17, 'Medical Assistance', 'Full Day', '', '2025-11-13 17:08:06'),
(3, 'Test', 'admin@gmail.com', '9925312435', 16, 'Crowd Management', 'Full Day', '', '2025-11-13 17:10:14'),
(4, 'Test', 'admin@gmail.com', '8799289328', 18, 'Medical Assistance', 'Full Day', '', '2025-11-13 17:19:27');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

DROP TABLE IF EXISTS `registrations`;
CREATE TABLE IF NOT EXISTS `registrations` (
  `id` int NOT NULL AUTO_INCREMENT,
  `child_name` varchar(100) NOT NULL,
  `child_age` varchar(20) NOT NULL,
  `parent_name` varchar(100) NOT NULL,
  `email` varchar(120) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `school` varchar(150) DEFAULT NULL,
  `amount` int NOT NULL,
  `status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'paid',
  `razorpay_payment_id` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `screenshot` varchar(255) DEFAULT NULL,
  `agreed` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `child_name`, `child_age`, `parent_name`, `email`, `mobile`, `school`, `amount`, `status`, `razorpay_payment_id`, `created_at`, `screenshot`, `agreed`) VALUES
(3, 'Test', '3-5', 'Test P', 'test@gmail.com', '0000000000', NULL, 100, 'paid', 'pay_RfCJFsFxc4IjBZ', '2025-11-13 16:17:31', NULL, NULL),
(4, 'Test', '3-5', 'Test P', 'test@gmail.com', '0000000000', NULL, 100, 'paid', 'pay_RfCJFsFxc4IjBZ', '2025-11-13 16:17:31', NULL, NULL),
(5, 'Child Test', '3-5', 'Parent', 'test@gmail.com', '9624009993', NULL, 100, 'pending', NULL, '2025-11-13 17:41:22', NULL, NULL),
(6, 'test', '3-5', 'test', 'test@gmail.com', '9879856685', '', 599, 'pending', NULL, '2025-11-13 19:00:44', 'images/payments/1763040644_payment-qr.jpg', ''),
(7, 'Test', '3-5', 'test', 'test@gmail.com', '2222222222', '', 599, 'pending', NULL, '2025-11-13 19:06:13', 'images/payments/1763040973_admin-profile.jpg', ''),
(8, 'Test', '3-5', 'test', 'test@gmail.com', '3333333333', '', 599, 'pending', NULL, '2025-11-13 19:07:15', 'images/payments/1763041035_payment-qr.jpg', ''),
(9, 'test', '3-5', 'test', 'info@tridentsinteriorsolution.com1', '9879856685', '', 599, 'pending', NULL, '2025-11-13 19:08:38', 'images/payments/1763041118_admin-profile.jpg', ''),
(10, 'Test', '3-5', 'test', 'info@tridentsinteriorsolution.com1', '0000000000', '', 599, 'pending', NULL, '2025-11-13 19:16:15', 'images/payments/1763041575_admin-profile.jpg', ''),
(11, 'test', '3-5', 'test', 'test3@gmail.com', '9879856685', '', 599, 'pending', NULL, '2025-11-13 19:24:29', 'images/payments/1763042069_admin-profile.jpg', ''),
(12, 'test', '3-5', 'test', 'test2@gmail.com', '2222222221', '', 599, 'paid', NULL, '2025-12-03 10:16:11', 'images/payments/1764737171_service-image.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

DROP TABLE IF EXISTS `site_settings`;
CREATE TABLE IF NOT EXISTS `site_settings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `setting_key` varchar(100) NOT NULL,
  `setting_value` text,
  `setting_type` varchar(50) DEFAULT 'text',
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `setting_key` (`setting_key`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `setting_key`, `setting_value`, `setting_type`, `updated_at`) VALUES
(1, 'site_name', 'Tumble GYM', 'text', '2025-11-13 11:08:00'),
(2, 'site_email', 'info@tumblegym.in', 'email', '2025-11-13 11:08:54'),
(3, 'site_phone', '+91 96060 23971', 'text', '2025-11-13 11:09:10'),
(4, 'site_logo', 'uploads/settings/logo_1762255339.png', 'image', '2025-11-04 11:22:19'),
(7, 'site_description', '', 'text', '2025-10-27 12:27:23'),
(8, 'facebook_url', '', 'text', '2025-10-27 12:27:23'),
(9, 'instagram_url', '', 'text', '2025-10-27 12:27:23'),
(10, 'youtube_url', '', 'text', '2025-10-29 03:58:26'),
(11, 'linkedin_url', '', 'text', '2025-10-27 12:27:23'),
(12, 'meta_keywords', '', 'text', '2025-10-27 12:27:23'),
(13, 'meta_description', '', 'text', '2025-10-27 12:27:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$XSlqCwZOhQVmbhJlKLK20usWvJF0dsrjNS0zlluGuHJgMthliDNDO', '2025-10-27 10:40:55', '2025-11-13 11:50:19');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 14, 2022 at 04:56 AM
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
-- Database: `db_veteran`
--
CREATE DATABASE IF NOT EXISTS `db_veteran` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_veteran`;

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_activation_attempts`
--

INSERT INTO `auth_activation_attempts` (`id`, `ip_address`, `user_agent`, `token`, `created_at`) VALUES
(1, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36', NULL, '2022-06-05 05:39:08'),
(2, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36', NULL, '2022-06-05 05:39:11');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Akun Untuk Admin'),
(2, 'siswa', 'Akun untuk siswa'),
(3, 'guru', 'Akun untuk guru');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 2),
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '127.0.0.1', 'admin@admin.com', 1, '2022-06-02 01:50:42', 1),
(2, '127.0.0.1', 'admin@admin.com', 1, '2022-06-02 01:53:35', 1),
(3, '127.0.0.1', 'admin', NULL, '2022-06-02 11:43:37', 0),
(4, '127.0.0.1', 'hakim', NULL, '2022-06-02 11:44:46', 0),
(5, '127.0.0.1', 'hakim@hakim.com', 2, '2022-06-02 11:46:53', 1),
(6, '127.0.0.1', 'hakim@hakim.com', 2, '2022-06-02 11:48:55', 1),
(7, '127.0.0.1', 'firman', NULL, '2022-06-02 11:55:55', 0),
(8, '127.0.0.1', 'hakim', NULL, '2022-06-02 11:56:44', 0),
(9, '127.0.0.1', 'admin', NULL, '2022-06-02 11:59:46', 0),
(10, '127.0.0.1', 'sd', NULL, '2022-06-02 12:00:56', 0),
(11, '127.0.0.1', 'hakim@hakim.com', 2, '2022-06-02 12:03:49', 1),
(12, '127.0.0.1', 'hakim', NULL, '2022-06-02 12:20:15', 0),
(13, '127.0.0.1', 'hakim@hakim.com', 2, '2022-06-02 12:20:24', 1),
(14, '127.0.0.1', 'hakim@hakim.com', 2, '2022-06-02 12:55:22', 1),
(15, '127.0.0.1', 'hakim@hakim.com', 2, '2022-06-05 05:36:53', 1),
(16, '127.0.0.1', 'hakim@hakim.com', 2, '2022-06-05 07:28:12', 1),
(17, '127.0.0.1', 'hakim@hakim.com', 2, '2022-06-05 07:45:19', 1),
(18, '127.0.0.1', 'firman', NULL, '2022-06-06 11:50:24', 0),
(19, '127.0.0.1', 'firman', NULL, '2022-06-06 11:50:24', 0),
(20, '127.0.0.1', 'firman', NULL, '2022-06-06 11:50:38', 0),
(21, '127.0.0.1', 'hakim@hakim.com', 2, '2022-06-06 11:50:48', 1),
(22, '127.0.0.1', 'hakim@hakim.com', 2, '2022-06-06 13:07:50', 1),
(23, '127.0.0.1', 'hakim@hakim.com', 2, '2022-06-06 13:11:21', 1),
(24, '127.0.0.1', 'fdas', NULL, '2022-06-06 13:11:52', 0),
(25, '127.0.0.1', 'hakim@hakim.com', 2, '2022-06-06 13:12:03', 1),
(26, '127.0.0.1', 'hakim@hakim.com', 2, '2022-06-06 13:17:18', 1),
(27, '127.0.0.1', 'siswa1', 3, '2022-06-06 13:34:35', 0),
(28, '127.0.0.1', 'siswahkmfrm@gmail.com', 5, '2022-06-06 13:37:12', 1),
(29, '127.0.0.1', 'siswahkmfrm@gmail.com', 5, '2022-06-06 13:40:33', 1),
(30, '127.0.0.1', 'siswahkmfrm@gmail.com', 5, '2022-06-06 13:40:41', 1),
(31, '127.0.0.1', 'siswahkmfrm@gmail.com', 5, '2022-06-06 13:42:55', 1),
(32, '127.0.0.1', 'siswahkmfrm@gmail.com', 5, '2022-06-06 13:57:46', 1),
(33, '127.0.0.1', 'firman', NULL, '2022-06-06 14:09:22', 0),
(34, '127.0.0.1', 'frman', NULL, '2022-06-06 14:09:29', 0),
(35, '127.0.0.1', 'firman', NULL, '2022-06-06 14:09:36', 0),
(36, '127.0.0.1', 'hakim@hakim.com', 2, '2022-06-06 14:10:15', 1),
(37, '127.0.0.1', 'hakim@hakim.com', 2, '2022-06-06 14:21:10', 1),
(38, '127.0.0.1', 'siswahkmfrm@gmail.com', 5, '2022-06-06 14:35:35', 1),
(39, '127.0.0.1', 'hakim', NULL, '2022-06-06 14:40:11', 0),
(40, '127.0.0.1', 'siswahkmfrm@gmail.com', 5, '2022-06-06 14:40:18', 1),
(41, '127.0.0.1', 'hakim@hakim.com', 2, '2022-06-06 19:10:37', 1),
(42, '127.0.0.1', 'siswahkmfrm@gmail.com', 5, '2022-06-06 19:11:11', 1),
(43, '127.0.0.1', 'hakim@hakim.com', 2, '2022-06-06 19:44:58', 1),
(44, '127.0.0.1', 'siswahkmfrm@gmail.com', 5, '2022-06-06 19:46:38', 1),
(45, '127.0.0.1', 'siswahkmfrm@gmail.com', 5, '2022-06-06 19:51:46', 1),
(46, '127.0.0.1', 'hakim', NULL, '2022-06-07 01:50:33', 0),
(47, '127.0.0.1', 'siswahkmfrm@gmail.com', 5, '2022-06-07 01:51:36', 1),
(48, '127.0.0.1', 'hakim@hakim.com', 2, '2022-06-11 07:17:11', 1),
(49, '127.0.0.1', 'hakim@hakim.com', 2, '2022-06-11 07:24:53', 1),
(50, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-11 07:30:12', 1),
(51, '127.0.0.1', 'admin@admin.com', 2, '2022-06-11 07:44:02', 1),
(52, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-11 07:46:04', 1),
(53, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-11 07:46:18', 1),
(54, '127.0.0.1', 'admin', NULL, '2022-06-11 07:46:31', 0),
(55, '127.0.0.1', 'admin@admin.com', 2, '2022-06-11 07:46:39', 1),
(56, '127.0.0.1', 'hakim', NULL, '2022-06-11 07:49:07', 0),
(57, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-11 07:49:15', 1),
(58, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-11 07:50:34', 1),
(59, '127.0.0.1', 'admin@admin.com', 2, '2022-06-11 07:50:48', 1),
(60, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-11 07:59:15', 1),
(61, '127.0.0.1', 'admin@admin.com', 2, '2022-06-11 08:15:42', 1),
(62, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-11 08:16:03', 1),
(63, '127.0.0.1', 'admin', NULL, '2022-06-11 08:26:09', 0),
(64, '127.0.0.1', 'admin', NULL, '2022-06-11 08:26:19', 0),
(65, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-11 08:26:26', 1),
(66, '127.0.0.1', 'admin@admin.com', 2, '2022-06-11 08:27:02', 1),
(67, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-11 08:28:44', 1),
(68, '127.0.0.1', 'admin', NULL, '2022-06-11 08:29:07', 0),
(69, '127.0.0.1', 'admin@admin.com', 2, '2022-06-11 08:29:17', 1),
(70, '127.0.0.1', 'asdas', NULL, '2022-06-11 08:32:33', 0),
(71, '127.0.0.1', 'asdasd', NULL, '2022-06-11 08:32:37', 0),
(72, '127.0.0.1', 'adasd', NULL, '2022-06-11 08:33:10', 0),
(73, '127.0.0.1', 'admin@admin.com', 2, '2022-06-11 08:36:09', 1),
(74, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-12 02:42:39', 1),
(75, '127.0.0.1', 'admin', NULL, '2022-06-12 02:43:00', 0),
(76, '127.0.0.1', 'admin@admin.com', 2, '2022-06-12 02:43:07', 1),
(77, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-12 02:55:40', 1),
(78, '127.0.0.1', 'admin@admin.com', 2, '2022-06-12 02:56:21', 1),
(79, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-12 02:58:03', 1),
(80, '127.0.0.1', 'admin@admin.com', 2, '2022-06-12 02:58:25', 1),
(81, '127.0.0.1', 'admin@admin.com', 2, '2022-06-12 03:00:05', 1),
(82, '127.0.0.1', 'admin@admin.com', 2, '2022-06-12 03:01:30', 1),
(83, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-12 03:01:58', 1),
(84, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-12 03:02:18', 1),
(85, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-12 03:02:44', 1),
(86, '127.0.0.1', 'adsa', NULL, '2022-06-12 03:02:47', 0),
(87, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-12 03:03:27', 1),
(88, '127.0.0.1', 'admin@admin.com', 2, '2022-06-12 03:05:27', 1),
(89, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-12 03:06:33', 1),
(90, '127.0.0.1', 'admin@admin.com', 2, '2022-06-12 03:08:35', 1),
(91, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-12 03:14:55', 1),
(92, '127.0.0.1', 'admin@admin.com', 2, '2022-06-12 03:28:40', 1),
(93, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-12 03:29:02', 1),
(94, '127.0.0.1', 'admin@admin.com', 2, '2022-06-12 03:29:37', 1),
(95, '127.0.0.1', 'admin@admin.com', 2, '2022-06-12 03:30:12', 1),
(96, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-12 03:31:23', 1),
(97, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-12 03:33:51', 1),
(98, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-12 03:35:31', 1),
(99, '127.0.0.1', 'ada', NULL, '2022-06-12 03:35:59', 0),
(100, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-12 03:43:24', 1),
(101, '127.0.0.1', 'hakim', NULL, '2022-06-12 03:44:11', 0),
(102, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-12 03:44:16', 1),
(103, '127.0.0.1', 'hakim', NULL, '2022-06-12 03:45:41', 0),
(104, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-12 03:45:46', 1),
(105, '127.0.0.1', 'admin@admin.com', 2, '2022-06-12 03:50:47', 1),
(106, '127.0.0.1', 'admin@admin.com', 2, '2022-06-12 03:56:26', 1),
(107, '127.0.0.1', 'admin@admin.com', 2, '2022-06-12 03:57:19', 1),
(108, '127.0.0.1', 'hakim', NULL, '2022-06-12 04:06:45', 0),
(109, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-12 04:06:51', 1),
(110, '127.0.0.1', 'admin@admin.com', 2, '2022-06-12 04:08:21', 1),
(111, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-12 04:14:03', 1),
(112, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-12 04:14:19', 1),
(113, '127.0.0.1', 'admin@admin.com', 2, '2022-06-12 04:35:24', 1),
(114, '127.0.0.1', 'admin@admin.com', 2, '2022-06-12 04:36:05', 1),
(115, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-12 04:37:22', 1),
(116, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-12 04:40:00', 1),
(117, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-12 04:41:47', 1),
(118, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-12 04:42:41', 1),
(119, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-12 04:44:19', 1),
(120, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-12 05:03:31', 1),
(121, '127.0.0.1', 'admin', NULL, '2022-06-12 05:07:55', 0),
(122, '127.0.0.1', 'admin@admin.com', 2, '2022-06-12 05:07:59', 1),
(123, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-12 11:44:23', 1),
(124, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-12 11:45:02', 1),
(125, '127.0.0.1', 'admin@admin.com', 2, '2022-06-12 11:45:20', 1),
(126, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-12 11:46:31', 1),
(127, '127.0.0.1', 'admin@admin.com', 2, '2022-06-12 11:52:43', 1),
(128, '127.0.0.1', 'hakim', NULL, '2022-06-12 11:53:17', 0),
(129, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-12 11:53:23', 1),
(130, '127.0.0.1', 'admin@admin.com', 2, '2022-06-12 12:02:45', 1),
(131, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-12 12:04:31', 1),
(132, '127.0.0.1', 'hakim', NULL, '2022-06-12 12:06:17', 0),
(133, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-12 12:06:23', 1),
(134, '127.0.0.1', 'hakim', NULL, '2022-06-13 20:38:45', 0),
(135, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-13 20:39:26', 1),
(136, '127.0.0.1', 'admin@admin.com', 2, '2022-06-13 20:58:04', 1),
(137, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-13 21:05:39', 1),
(138, '127.0.0.1', 'hakimastina@gmail.com', 1, '2022-06-13 21:14:48', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-siswa', 'mengatur siswa'),
(2, 'manage profile', 'mengatur profil akun');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1653961644, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'hakimastina@gmail.com', 'hakim', '$2y$10$7bVFBWXvzib5Ke0Zp0SZHORQmiQoDN1GeqhXdc81Gh.Toby4d0isO', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-06-11 07:28:59', '2022-06-11 07:28:59', NULL),
(2, 'admin@admin.com', 'admin', '$2y$10$52u7abXx5oCbK.HmwhIZ3OIIX6al4lzzvypxZntuiybs4Sj5yDTL2', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-06-11 07:29:25', '2022-06-11 07:29:25', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

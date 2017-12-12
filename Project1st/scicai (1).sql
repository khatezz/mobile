-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2017 at 12:52 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scicai`
--

-- --------------------------------------------------------

--
-- Table structure for table `addidentifies`
--

CREATE TABLE IF NOT EXISTS `addidentifies` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `sec_id` int(11) NOT NULL,
  `title_identify` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `items_identify` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addidentifies`
--

INSERT INTO `addidentifies` (`id`, `user_id`, `sec_id`, `title_identify`, `items_identify`, `created_at`, `updated_at`) VALUES
(4, 4, 1, 'Lights', 10, '2017-07-19 02:17:01', '2017-07-19 02:20:35');

-- --------------------------------------------------------

--
-- Table structure for table `addtrues`
--

CREATE TABLE IF NOT EXISTS `addtrues` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `sec_id` int(11) NOT NULL,
  `title_true` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `items_true` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addtrues`
--

INSERT INTO `addtrues` (`id`, `user_id`, `sec_id`, `title_true`, `items_true`, `created_at`, `updated_at`) VALUES
(4, 4, 1, 'Electricity', 10, '2017-07-19 02:12:03', '2017-07-19 02:12:03');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE IF NOT EXISTS `announcements` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `announce` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `user_id`, `announce`, `seen`, `created_at`, `updated_at`) VALUES
(1, 8, 'Take a quiz on motion', 1, '2017-07-04 17:28:05', '2017-07-04 17:28:05'),
(2, 4, 'Take a quiz on Light', 1, '2017-07-14 06:18:11', '2017-07-14 06:18:11'),
(3, 4, 'Today is no class', 1, '2017-07-14 06:18:33', '2017-07-14 06:18:33'),
(4, 4, 'Please bring art materials this coming tuesday', 1, '2017-07-14 06:19:01', '2017-07-14 06:19:01'),
(5, 4, 'Resume Class this Tuesday', 1, '2017-08-01 17:56:13', '2017-08-01 17:56:13'),
(6, 4, 'lalalalalal', 0, '2017-11-19 11:14:00', '2017-11-19 11:15:00'),
(8, 4, 'hahahahaha', 0, '2017-12-03 20:12:15', '2017-12-03 20:12:15'),
(9, 4, 'science', 0, '2017-12-03 20:12:48', '2017-12-03 20:12:48');

-- --------------------------------------------------------

--
-- Table structure for table `filetables`
--

CREATE TABLE IF NOT EXISTS `filetables` (
  `id` int(10) unsigned NOT NULL,
  `file_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `filetables`
--

INSERT INTO `filetables` (`id`, `file_title`, `file_name`, `created_at`, `updated_at`) VALUES
(7, 'electricity', '42255.docx', NULL, NULL),
(10, 'motion', '76535.docx', NULL, NULL),
(11, 'docs', '56399.docx', NULL, NULL),
(12, 'excel', '40413.xlsx', NULL, NULL),
(13, 'sample', '49647.docx', NULL, NULL),
(14, 'solar system', '66685.jpg', NULL, NULL),
(15, 'motion', '23640.docx', NULL, NULL),
(16, 'motion', '69655.docx', NULL, NULL),
(17, 'motion', '97786.docx', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `identifies`
--

CREATE TABLE IF NOT EXISTS `identifies` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `quest` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `identifies`
--

INSERT INTO `identifies` (`id`, `user_id`, `quiz_id`, `quest`, `answer`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'What is Light?', 'rukawa kaede', '2017-07-04 17:27:46', '2017-07-04 17:27:46'),
(3, 4, 2, 'hshahdsa1', 'ggfdh', '2017-07-19 02:13:32', '2017-07-19 02:13:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_05_22_074823_create_quizzes_table', 1),
(4, '2017_05_22_142443_create_pages_table', 1),
(5, '2017_05_24_095749_create_multiples_table', 1),
(6, '2017_05_29_055309_create_trues_table', 1),
(7, '2017_05_29_072326_create_identifies_table', 1),
(8, '2017_06_02_030923_create_announcements_table', 1),
(9, '2017_06_08_052252_create_addtrues_table', 1),
(10, '2017_06_08_101348_create_addidentifies_table', 1),
(11, '2017_06_10_055502_create_students_table', 1),
(12, '2017_06_17_123136_create_sections_table', 1),
(13, '2017_06_19_003352_create_quotes_table', 1),
(14, '2017_07_03_002851_create_pupils_table', 1),
(15, '2017_07_03_102409_create_multipleans_table', 1),
(16, '2017_07_04_131052_create_teachers_table', 1),
(17, '2017_07_10_121945_create_defquizzes_table', 2),
(18, '2017_07_10_123626_create_useranswers_table', 3),
(19, '2017_07_10_124031_create_userans_table', 4),
(20, '2017_07_14_032042_create_filetables_table', 5),
(21, '2017_07_15_070333_create_defquiz1s_table', 6),
(22, '2017_07_15_073120_create_userans1s_table', 7),
(23, '2017_07_25_001536_create_answer_users_table', 8),
(24, '2017_07_25_002351_create_answerstuds_table', 9),
(25, '2017_11_21_213628_create_me_table', 10),
(26, '2017_11_21_214149_add_age_to_me_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `multiples`
--

CREATE TABLE IF NOT EXISTS `multiples` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `quest` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multiples`
--

INSERT INTO `multiples` (`id`, `user_id`, `quiz_id`, `quest`, `a`, `b`, `c`, `d`, `answer`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'What is building blocks of matter?', 'matter', 'atom', 'solid', 'liquid', 'B', '2017-07-04 17:00:42', '2017-07-04 17:01:45'),
(2, 1, 1, 'What is speed?', 'in ur dreams', 'molecules', 'solid', 'liquid', 'A', '2017-07-04 17:02:14', '2017-07-04 17:02:14'),
(3, 1, 1, 'sino ang basketbolistang henyo', 'sakuragi', 'teika', 'rukawa', 'gori', 'A', '2017-07-04 17:06:43', '2017-07-04 17:06:43'),
(4, 21, 4, 'What is building blocks of matter?', 'matte', 'motion', 'solid', 'liquid', 'A', '2017-10-16 19:49:53', '2017-10-16 19:50:03'),
(5, 4, 6, 'what is motion', 'matter', 'atom', 'solid', 'heat', 'A', '2017-10-16 20:00:52', '2017-10-16 20:00:52'),
(6, 4, 6, 'What is speed?', 'remote', 'motion', 'kilometers', 'meters', 'A', '2017-10-16 20:01:50', '2017-10-16 20:01:50'),
(7, 4, 6, 'What is building blocks of matter?', 'atoms', 'heat', 'motion', 'matter', 'A', '2017-10-16 20:02:33', '2017-10-16 20:02:33'),
(8, 4, 6, 'what is sound', 'sing', 'dance', 'music', 'liquid', 'A', '2017-10-16 20:02:57', '2017-10-16 20:02:57'),
(9, 4, 6, 'what is flower', 'rose', 'santan', 'mmm', 'ham', 'A', '2017-10-16 20:03:28', '2017-10-16 20:03:28');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE IF NOT EXISTS `quizzes` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `sec_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `items` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `user_id`, `sec_id`, `title`, `items`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Motion', 3, '2017-07-04 16:54:45', '2017-07-04 17:06:03'),
(4, 21, 1, 'moti', 5, '2017-10-16 19:49:03', '2017-10-16 19:50:26'),
(8, 4, 1, 'motion', 5, '2017-10-18 17:57:12', '2017-10-18 17:57:12'),
(9, 4, 1, 'sound', 3, '2017-11-21 12:15:13', '2017-11-21 12:15:13');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE IF NOT EXISTS `sections` (
  `id` int(10) unsigned NOT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `section`, `code`) VALUES
(1, 'Charles', 'char01'),
(2, 'Augustine', 'aug01'),
(3, 'Edward', 'edward01'),
(4, 'Dominic', 'dom01');

-- --------------------------------------------------------

--
-- Table structure for table `trues`
--

CREATE TABLE IF NOT EXISTS `trues` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trues`
--

INSERT INTO `trues` (`id`, `user_id`, `quiz_id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(2, 4, 2, 'gwapo ba si ichijoji teika', 'True', '2017-07-08 05:36:44', '2017-07-08 05:44:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `sec_id` int(11) NOT NULL DEFAULT '0',
  `section` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin01',
  `type` int(11) NOT NULL DEFAULT '1',
  `code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin01',
  `fname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'nopassword',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `sec_id`, `section`, `type`, `code`, `fname`, `lname`, `username`, `avatar`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 1, 'admin01', 1, 'admin01', 'crismarie', 'gentiles', 'Criserza', '1507508335.jpg', '$2y$10$LUsZm7LVUfE58dF/Ow8R2ebx./w06fj.x3UNnOfoTxQMDIqRjjjHC', 'ajQ4f9Hh2aRkN8nvodxAiXZmvMFOLPv5burWFuQfQofgpaY3AhyqKjzKXo93', '2017-07-04 18:55:52', '2017-10-08 16:18:57'),
(8, 1, '', 2, 'admin01', 'Rukawa', 'Kaede', 'Rukawa', 'default.jpg', '$2y$10$JNpBorour3hGA2s36ACp3uOOdWCp0hMuGT/9BGO3.71x88kCZ.e1e', NULL, '2017-07-07 18:01:17', '2017-07-07 18:01:17'),
(9, 1, 'char01', 1, 'admin01', 'Maricris', 'Gentiles', 'Maricris01', 'default.jpg', '$2y$10$aBkpk9a/QqGmkDtE6QIg3.d.O90KQu1LU7fGGTB89cfag/fDqvxn.', NULL, '2017-10-27 21:52:10', '2017-10-27 21:52:10'),
(10, 1, '', 1, 'admin01', 'Crisha', 'Gentiles', 'Crisha01', 'default.jpg', '$2y$10$4E7GULAgMDYnMW3Gwvtu5ugZmxkkC0uFoaVFWiPC1Ar3BgEFuyvsq', NULL, '2017-10-27 22:33:29', '2017-10-27 22:33:29'),
(11, 1, '', 1, 'admin01', 'Crispin', 'Gentiles', 'Crispin01', 'default.jpg', '$2y$10$gpHeHC/jI0hCgHs15zkZyeURQVzPQwhaTEXuKdxTx2GKWnIo1.mJu', NULL, '2017-10-27 23:02:44', '2017-10-27 23:02:44'),
(12, 1, '', 1, 'admin01', 'Christine', 'Gentiles', 'Christine01', 'default.jpg', '$2y$10$bl.E9AZzA.2HWqy1axJBKuPszlyRxrM7eml926GXDth7OobU2qB4u', NULL, '2017-10-27 23:04:32', '2017-10-27 23:04:32'),
(13, 1, '', 1, 'crispin02', 'Crispin mark', 'Gentiles', 'Crispin02', 'default.jpg', '$2y$10$JgcOwah6hXYYunGevWQVwejlQsl5bXOH7XT1wu9vJ.UV2HqQbrdi6', NULL, '2017-10-27 23:11:29', '2017-10-27 23:11:29'),
(14, 1, '', 2, 'admin01', 'Sakuragi', 'Hanamichi', 'Sakuragi01', 'default.jpg', '$2y$10$EnIPzz8.b9qvSoo/KKoWbuWB6tboJVxd6akj7TXkutOL5U4rpS9f6', NULL, '2017-10-27 23:30:20', '2017-10-27 23:30:20'),
(15, 1, '', 2, 'admin01', 'Sasasa', 'Sasasa', 'Sasasa', 'default.jpg', '$2y$10$CMlmMTF1d64KwZTJxmIj8ukRu1AmzvOL95V/8T3m7M8F4Fn3qvQGO', NULL, '2017-10-29 04:21:31', '2017-10-29 04:21:31'),
(16, 1, '', 1, 'char01', 'sasuke', 'uchicha', 'sasuke25', 'default.jpg', '$2y$10$9fo1bkuFPkZLGqu0sxYqIucciMR3IPqOuKiS4IEcBZLRVO3aOa7Ee', NULL, '2017-10-29 04:26:56', '2017-10-29 04:26:56'),
(24, 1, '', 1, 'marites', 'marites', 'gentiles', 'char01', 'default.jpg', '$2y$10$vTF.7f30RxZtagwE3C9.1uWz93WXjR.tQPN3OeB6fOrZiSARhlNEm', NULL, '2017-10-29 13:14:09', '2017-10-29 13:14:09'),
(25, 1, '', 1, 'char01', 'markus', 'gentiles', 'markus', 'default.jpg', '$2y$10$bLc6liuixWoccQV1VkuV.ObEYkRkIKA4.IpJtcrXxiKDR.Yg5UVaK', NULL, '2017-10-29 13:27:54', '2017-10-29 13:27:54'),
(26, 1, '', 1, 'char01', 'ckenli', 'uchicha', 'ckenli', 'default.jpg', '$2y$10$UyTr17ciWJ5ofpvBeh356OA7veoNgkWoTOctSyXwnpOVyGUn16VY6', NULL, '2017-10-29 13:48:11', '2017-10-29 13:48:11'),
(32, 1, 'char01', 1, 'admin01', 'jescels', 'asum', 'jescels', 'default.jpg', '$2y$10$ONlqQiw214yMkovUrrXu9uJsne4qQJiHufreUfw0LxBy4RiddK0Ie', NULL, '2017-11-04 22:40:39', '2017-11-04 22:40:39'),
(34, 1, 'char01', 1, 'admin01', 'irene', 'asum', 'irene01', 'default.jpg', '$2y$10$gK2MYuTqgtSFOkmEspETuusRNnA2jn5jdNqAXTlwBbJvgBMo9BiTu', NULL, '2017-11-04 22:42:46', '2017-11-04 22:42:46'),
(35, 0, 'char01', 1, 'admin01', 'veronica', 'labrador', 'veronica01', 'default.jpg', '$2y$10$tZlm9idGrPqI2s1j2gMwhOCYxHUxY7WEvJvgFzNabGE3cwgowy4DO', NULL, '2017-11-21 13:01:38', '2017-11-21 13:01:38'),
(36, 0, 'char01', 1, 'admin01', 'veronica', 'labrador', 'veronica01', 'default.jpg', '$2y$10$DP.SgVdKr1gvRKVm7OzYG.9Wg1YgQHaj7Zdlz5qZWEERcIYkGPXLe', NULL, '2017-11-21 13:01:58', '2017-11-21 13:01:58'),
(37, 0, 'admin01', 1, 'admin01', 'Marites', 'Gentiles', 'Marites01', 'default.jpg', '$2y$10$iIvnLsyvm.CPpHun5DiI.uEu5aJDwgwGNu.vAalXHbkVCHm3r8/Py', NULL, '2017-11-29 00:46:52', '2017-11-29 00:46:52'),
(38, 0, 'admin01', 1, 'admin01', 'Crispin', 'Gentiles', 'Crispin01', 'default.jpg', '$2y$10$P7qmvxvxHghSXLORNj51yel9jGLQEbBbLVRxV0.4bU3ZydoaaTX5K', NULL, '2017-11-29 00:48:08', '2017-11-29 00:48:08'),
(40, 0, 'admin01', 1, 'char01', 'joya2', 'tuscano', 'joya02', 'default.jpg', '$2y$10$H4wo2M9VMpmNICTSa9M46eUHi0Qp8SJa37xjNKOMu7XG9huvKdwNa', NULL, '2017-11-29 03:28:28', '2017-11-29 03:28:28'),
(42, 0, 'admin01', 1, 'admin01', 'Naruto', 'Uzumaki', 'Naruto', 'default.jpg', '$2y$10$5h6YrCK7aNcmjcBaibfE.OsRB3inB.oA4BGgAd9Ct8Ybqn.a7ctru', NULL, '2017-11-29 05:04:27', '2017-11-29 05:04:27'),
(44, 0, 'admin01', 1, 'admin01', 'crusha', 'gentiles', 'crusha', 'default.jpg', '$2y$10$Nyehefxp5u6ZCjvATG2x/eMmf7kZ6xdCw1zGC80/TVc8OZKyrcR3O', NULL, '2017-11-29 08:32:53', '2017-11-29 08:32:53'),
(45, 0, 'admin01', 1, 'char01', 'jayjay', 'hala', 'jayjay01', 'default.jpg', '$2y$10$uA4VRpWQilO0SMLd5qReFOr6sbANfcxHyvcUtnmP3GR5v9KkELeiq', NULL, '2017-11-29 21:03:09', '2017-11-29 21:03:09'),
(46, 0, 'admin01', 1, 'char01', 'lorna', 'bigkas', 'lorna01', 'default.jpg', '$2y$10$Xam6c0bFnPrD/5Oje03XhehhjoVF4NnSsF7t7xopi08pgu2MYW0RO', NULL, '2017-12-01 17:23:48', '2017-12-01 17:23:48'),
(47, 0, 'admin01', 1, 'char01', 'veronica', 'gentiles', 'veronica', 'default.jpg', '$2y$10$vD8d3Z4olqNvGTaaRaXwHuVWv06L7nQ4WU..whYpQYOIPpNN0Oaya', NULL, '2017-12-02 09:00:15', '2017-12-02 09:00:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addidentifies`
--
ALTER TABLE `addidentifies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addtrues`
--
ALTER TABLE `addtrues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filetables`
--
ALTER TABLE `filetables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `identifies`
--
ALTER TABLE `identifies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multiples`
--
ALTER TABLE `multiples`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trues`
--
ALTER TABLE `trues`
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
-- AUTO_INCREMENT for table `addidentifies`
--
ALTER TABLE `addidentifies`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `addtrues`
--
ALTER TABLE `addtrues`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `filetables`
--
ALTER TABLE `filetables`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `identifies`
--
ALTER TABLE `identifies`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `multiples`
--
ALTER TABLE `multiples`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `trues`
--
ALTER TABLE `trues`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

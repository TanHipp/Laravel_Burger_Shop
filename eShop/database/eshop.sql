-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 30, 2023 lúc 06:54 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `eshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'sdsdsa', 'duongthaitan13@gmail.com', 'ád', '2023-07-28 21:09:23', '2023-07-28 21:09:23'),
(2, 'TÁhgasassa', 'duongthaitan13@gmail.comzxxz', 'zxczxcczx', '2023-07-28 21:14:22', '2023-07-28 21:14:22'),
(3, 'TÁhgasassa', 'duongthaitan13@gmail.com', 'ádasasdasasd', '2023-07-28 21:19:30', '2023-07-28 21:19:30'),
(4, 'TÁhgasassa', 'duongthaitan13@gmail.com', 'ádasasdasasd', '2023-07-28 21:21:50', '2023-07-28 21:21:50'),
(5, 'zxczxczx', 'duongthaitan13@gmail.com', 'zxczxczx', '2023-07-28 21:25:32', '2023-07-28 21:25:32'),
(6, 'Dương Thái Tân', 'duongthaitan13@gmail.comzxc', 'Hehe cái này hay nè ní', '2023-07-28 21:56:29', '2023-07-28 21:56:29'),
(7, 'sdsdsa', 'duongthaitan13@gmail.com', 'ÁDASD', '2023-07-28 22:01:43', '2023-07-28 22:01:43'),
(8, 'sdsdsa', 'duongthaitan13@gmail.com', 'ÁDASD', '2023-07-28 22:01:58', '2023-07-28 22:01:58'),
(9, 'sdsdsa', 'duongthaitan13@gmail.com', 'ádasd', '2023-07-28 22:02:08', '2023-07-28 22:02:08'),
(10, 'sdsdsa', 'duongthaitan13@gmail.com', 'ádasd', '2023-07-28 22:02:34', '2023-07-28 22:02:34'),
(11, 'sdsdsa', 'duongthaitan13@gmail.com', 'ádasd', '2023-07-28 22:02:39', '2023-07-28 22:02:39'),
(12, 'sdsdsa', 'duongthaitan13@gmail.com', 'ádasd', '2023-07-28 22:03:13', '2023-07-28 22:03:13'),
(13, 'sdsdsa', 'duongthaitan13@gmail.comzxxz', 'ÁDASD', '2023-07-28 22:03:32', '2023-07-28 22:03:32'),
(14, 'ád', 'duongthaitan13@gmail.comzxc', 'dsadsad', '2023-07-28 22:03:54', '2023-07-28 22:03:54'),
(15, 'xczc', 'duongthaitan13@gmail.comzxxz', 'zxczxc', '2023-07-28 22:04:18', '2023-07-28 22:04:18'),
(16, 'xczc', 'duongthaitan13@gmail.comzxxz', 'zxczxc', '2023-07-28 22:05:10', '2023-07-28 22:05:10'),
(17, 'xczc', 'duongthaitan13@gmail.comzxxz', 'zxczxc', '2023-07-28 22:05:11', '2023-07-28 22:05:11'),
(18, 'xczc', 'duongthaitan13@gmail.comzxxz', 'zxczxc', '2023-07-28 22:05:13', '2023-07-28 22:05:13'),
(19, 'xczc', 'duongthaitan13@gmail.comzxxz', 'zxczxc', '2023-07-28 22:05:13', '2023-07-28 22:05:13'),
(20, 'xczc', 'duongthaitan13@gmail.comzxxz', 'zxczxc', '2023-07-28 22:05:14', '2023-07-28 22:05:14'),
(21, 'xczc', 'duongthaitan13@gmail.comzxxz', 'zxczxc', '2023-07-28 22:05:59', '2023-07-28 22:05:59'),
(22, 'xczc', 'duongthaitan13@gmail.comzxxz', 'zxczxc', '2023-07-28 22:06:01', '2023-07-28 22:06:01'),
(23, 'xczc', 'duongthaitan13@gmail.comzxxz', 'zxczxc', '2023-07-28 22:06:15', '2023-07-28 22:06:15'),
(24, 'xczc', 'duongthaitan13@gmail.comzxxz', 'zxczxc', '2023-07-28 22:06:17', '2023-07-28 22:06:17'),
(25, 'xczc', 'duongthaitan13@gmail.comzxxz', 'zxczxc', '2023-07-28 22:06:20', '2023-07-28 22:06:20'),
(26, 'xczc', 'duongthaitan13@gmail.comzxxz', 'zxczxc', '2023-07-28 22:06:23', '2023-07-28 22:06:23'),
(27, 'xczc', 'duongthaitan13@gmail.comzxxz', 'zxczxc', '2023-07-28 22:06:29', '2023-07-28 22:06:29'),
(28, 'ZXZX', 'duongthaitan13@gmail.comzxc', 'ádsadsadsad', '2023-07-28 22:06:47', '2023-07-28 22:06:47'),
(29, 'ZXZX', 'duongthaitan13@gmail.comzxc', 'ádsadsadsad', '2023-07-28 22:07:17', '2023-07-28 22:07:17'),
(30, 'sdsdsa', 'duongthaitan13@gmail.com', 'ádsadsadsad', '2023-07-28 22:12:36', '2023-07-28 22:12:36'),
(31, 'ZXZX', 'duongthaitan13@gmail.comzxxz', 'ádasd', '2023-07-28 22:12:42', '2023-07-28 22:12:42'),
(32, 'ZXZX', 'duongthaitan13@gmail.comzxxz', 'ZXzXz', '2023-07-28 22:12:58', '2023-07-28 22:12:58'),
(33, 'ZXZX', 'duongthaitan13@gmail.comzxc', 'ZXZXX', '2023-07-28 22:13:18', '2023-07-28 22:13:18'),
(34, 'ádasdasdfsdasdfasdsdfadsfadss', 'duongthaitan13@gmail.comzxxz', 'ádasdasdasd', '2023-07-28 22:14:22', '2023-07-28 22:14:22'),
(35, 'ádsadsaasd', 'duongthaitan13@gmail.comzxxz', 'ádsaasdasda', '2023-07-28 22:14:33', '2023-07-28 22:14:33'),
(36, 'sdafasdfsdfa', 'duongthaitan13@gmail.comzxc', 'sdagfasdgsd', '2023-07-28 22:22:43', '2023-07-28 22:22:43'),
(37, 'ádsad', 'duongthaitan13@gmail.comzxc', 'ádasd', '2023-07-28 22:25:54', '2023-07-28 22:25:54'),
(38, 'fdsdsf', 'duongthaitan13@gmail.comzxc', 'sdfsdfsdf', '2023-07-28 22:26:43', '2023-07-28 22:26:43'),
(39, 'fdsdsf', 'duongthaitan13@gmail.comzxc', 'sdfsdfsdf', '2023-07-28 22:28:06', '2023-07-28 22:28:06'),
(40, 'ádsdassd', 'duongthaitan13@gmail.comzxxz', 'ádasdas', '2023-07-28 22:28:48', '2023-07-28 22:28:48'),
(41, 'ádsdassd', 'duongthaitan13@gmail.comzxxz', 'ádasdas', '2023-07-28 22:30:01', '2023-07-28 22:30:01'),
(42, 'ádsdassd', 'duongthaitan13@gmail.comzxxz', 'ádasdas', '2023-07-28 22:30:02', '2023-07-28 22:30:02'),
(43, 'dssad', 'duongthaitan13@gmail.comzxc', 'ádasdas', '2023-07-28 22:34:29', '2023-07-28 22:34:29'),
(44, 'ádasd', 'duongthaitan13@gmail.comzxc', 'ádas', '2023-07-28 22:35:28', '2023-07-28 22:35:28'),
(45, 'ádasd', 'duongthaitan13@gmail.comzxc', 'ádas', '2023-07-28 22:35:28', '2023-07-28 22:35:28'),
(46, 'dsfgsdfdgs', 'duongthaitan13@gmail.comzxxz', 'dfsgdfs', '2023-07-28 22:58:41', '2023-07-28 22:58:41'),
(47, 'dsfgsdfdgs', 'duongthaitan13@gmail.comzxxz', 'dfsgdfs', '2023-07-28 22:58:42', '2023-07-28 22:58:42'),
(48, 'Tân', 'duongthaitan13@gmail.comzxxz', 'Hahahahahaha', '2023-07-29 15:43:30', '2023-07-29 15:43:30'),
(49, 'Tân', 'duongthaitan13@gmail.comzxxz', 'Hahahahahaha', '2023-07-29 15:43:30', '2023-07-29 15:43:30'),
(50, 'Thái tân', 'duongthaitan13@gmail.comzxxz', 'Cái này đươnc nè cần pahscbafakljkjgascagklucb', '2023-07-29 15:46:29', '2023-07-29 15:46:29'),
(51, 'Thái tân', 'duongthaitan13@gmail.comzxxz', 'Cái này đươnc nè cần pahscbafakljkjgascagklucb', '2023-07-29 15:46:30', '2023-07-29 15:46:30'),
(52, 'sdsdsa', 'duongthaitan13@gmail.com', 'hihihaha', '2023-07-30 15:44:43', '2023-07-30 15:44:43'),
(53, 'sdsdsa', 'duongthaitan13@gmail.com', 'hihihaha', '2023-07-30 15:44:43', '2023-07-30 15:44:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_mucs`
--

CREATE TABLE `danh_mucs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ten_danh_muc` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_mucs`
--

INSERT INTO `danh_mucs` (`id`, `ten_danh_muc`, `created_at`, `updated_at`) VALUES
(58, 'Hamburger', '2023-07-29 22:30:07', '2023-07-29 22:30:07'),
(59, 'Nước Giải Khát', '2023-07-29 22:30:33', '2023-07-29 22:30:33');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_10_143012_create_danh_mucs_table', 1),
(6, '2023_05_10_145826_create_san_phams_table', 2),
(7, '2023_07_25_231417_create_categories_table', 3),
(8, '2023_07_25_231541_create_products_table', 4),
(10, '2023_07_29_035834_create_contacts_table', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_phams`
--

CREATE TABLE `san_phams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Ten_San_Pham` varchar(200) DEFAULT NULL,
  `Gia` decimal(20,0) DEFAULT NULL,
  `Mo_Ta` text DEFAULT NULL,
  `anh_bia` varchar(500) DEFAULT NULL,
  `Id_Nguoi_Tao` bigint(20) UNSIGNED DEFAULT NULL,
  `Id_Danh_Muc` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_phams`
--

INSERT INTO `san_phams` (`id`, `Ten_San_Pham`, `Gia`, `Mo_Ta`, `anh_bia`, `Id_Nguoi_Tao`, `Id_Danh_Muc`, `created_at`, `updated_at`) VALUES
(169, 'Hamburger Bò Siêu Cay', 40000, 'Bánh hamburger bò với phần nhân là thịt bò được nêm nếm vừa phải ăn kèm với phần phô mai beo béo', '/file/Iw5QBF6mFaRGJhHQCVWIy72mX5oNJYJYEXLUZcAr.png', NULL, 58, '2023-07-29 22:31:04', '2023-07-29 22:31:04'),
(170, 'Hamburger Bò Cay', 40000, 'Bánh hamburger bò với phần nhân là thịt bò được nêm nếm vừa phải ăn kèm với phần phô mai beo béo', '/file/r3NI0RkJfGG7IB1fyES7k3EfY5xuxzblkGkEeOeT.png', NULL, 58, '2023-07-29 22:31:21', '2023-07-29 22:31:21'),
(172, 'Hamburger Bò Bóng Đêm', 70000, 'Bánh hamburger bò với phần nhân là thịt bò được nêm nếm vừa phải ăn kèm với phần phô mai beo béo', '/file/CON0o6D0fddZ2i9t7MKIyeSjZTIAITg8nQ81YkuS.png', NULL, 58, '2023-07-29 22:33:25', '2023-07-29 22:33:25'),
(173, 'Hamburger Bò Siêu To', 100000, 'Bánh hamburger bò với phần nhân là thịt bò được nêm nếm vừa phải ăn kèm với phần phô mai beo béo', '/file/ZOg0ji4ZatLXAzjrz1Dbw9inZEGRgBKifSUqfTWX.png', NULL, 58, '2023-07-29 22:34:39', '2023-07-29 22:34:39'),
(174, 'Hamburger Bò', 40000, 'Bánh hamburger bò với phần nhân là thịt bò được nêm nếm vừa phải ăn kèm với phần phô mai beo béo', '/file/klB4yGSCqlKbZMIeR4TyLMBpDJymh51BfGdjV0vA.png', NULL, 58, '2023-07-29 22:36:02', '2023-07-29 22:36:02'),
(177, 'Hamburger Bò Siêu Cay', 40000, 'Bánh hamburger bò với phần nhân là thịt bò được nêm nếm vừa phải ăn kèm với phần phô mai beo béo', '/file/HUsZgF5YAHsRqBc1gYvNecUqdIJYhg3nHNEFjByM.png', NULL, NULL, '2023-07-29 22:38:22', '2023-07-29 22:38:22'),
(178, 'Hamburger Bò Siêu Cay', 40000, 'Bánh hamburger bò với phần nhân là thịt bò được nêm nếm vừa phải ăn kèm với phần phô mai beo béo', '/file/Ob12GAhVmXQvMp3MLARbzzpIvWqQjPfmqyXo4uJS.png', NULL, 58, '2023-07-29 22:39:37', '2023-07-29 22:39:37'),
(179, 'Hamburger Bò Siêu Cay', 4000000, 'Bánh hamburger bò với phần nhân là thịt bò được nêm nếm vừa phải ăn kèm với phần phô mai beo béo', '/file/ZnBRnLmeJ1tyn7UXPkJv95Umg4nFk88eANL7FzqZ.png', NULL, 58, '2023-07-29 22:39:50', '2023-07-29 22:39:50'),
(180, 'Hamburger Bò Siêu Cay', 40000, 'Bánh hamburger bò với phần nhân là thịt bò được nêm nếm vừa phải ăn kèm với phần phô mai beo béo', '/file/OM116gTPIscbR7fEBng4Qz32iQ9cxVGTLaQ2IqLO.png', NULL, 58, '2023-07-29 22:40:09', '2023-07-29 22:40:09'),
(181, 'Hamburger Bò Siêu Cay', 100000, 'Bánh hamburger bò với phần nhân là thịt bò được nêm nếm vừa phải ăn kèm với phần phô mai beo béo', '/file/y8tuwf2TBxcZJ3MWgAcZebKu928moKnaSxN3RWs8.png', NULL, 58, '2023-07-29 22:40:55', '2023-07-29 22:40:55'),
(182, 'Hamburger Bò Siêu Cay', 40000, 'Bánh hamburger bò với phần nhân là thịt bò được nêm nếm vừa phải ăn kèm với phần phô mai beo béo', '/file/e4ZMIzyLxGdVYbr6eFMHVwqKt4Pfpo6mAAbIQNNo.png', NULL, 58, '2023-07-29 22:41:09', '2023-07-29 22:41:09'),
(183, 'Hamburger Bò Siêu Cay', 40000, 'Bánh hamburger bò với phần nhân là thịt bò được nêm nếm vừa phải ăn kèm với phần phô mai beo béo', '/file/icjJCPXv0hRPSm6CYfuoZGF2ejTbFM2XHeidWCsb.png', NULL, 58, '2023-07-29 22:41:20', '2023-07-29 22:41:20'),
(185, 'Hamburger Bò Siêu Cay', 40000, 'Bánh hamburger bò với phần nhân là thịt bò được nêm nếm vừa phải ăn kèm với phần phô mai beo béo', '/file/aM3AVJdFwgSbZkVletPEUlsXZuGY0VcUSnvqPUVN.png', NULL, 58, '2023-07-29 22:42:04', '2023-07-30 15:27:06'),
(186, 'Hamburger Bò Siêu Cay', 40000, 'Bánh hamburger bò với phần nhân là thịt bò được nêm nếm vừa phải ăn kèm với phần phô mai beo béo', '/file/MhDRFL5x0QpOqQbNaTLSkoODTFUpwtN1VPLLIyax.png', NULL, 58, '2023-07-29 22:42:16', '2023-07-30 15:20:10'),
(187, 'Hamburger Bò Siêu Cay', 40000, 'Bánh hamburger bò với phần nhân là thịt bò được nêm nếm vừa phải ăn kèm với phần phô mai beo béo', '/file/lRYdc7FMS0YP9jamCoiRTcX4ZdaUDX6yt35ONDDO.png', NULL, 58, '2023-07-29 22:42:45', '2023-07-29 22:42:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
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

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Duong Thai Tan', 'duongthaitan00@gmail.com', NULL, '$2y$10$0MSxAANIXSDEvQs11JyrVOFZorauaioMIxwJ5vQdhPMl3LSzTUOja', NULL, '2023-06-07 15:46:21', '2023-06-07 15:46:21'),
(2, 'Admin', 'rewr@gmail.com', NULL, '$2y$10$.0u25Z7pktBAAxlubiXUvuwnW1e7GNbVXLSbpBq70S5QZMMu6MYqe', NULL, '2023-06-07 15:56:31', '2023-06-07 15:56:31'),
(3, 'Admin1', 'rwr@gmail.com', NULL, '$2y$10$M1ZxDVwnPBTqPTSBlybbo.edtLJz05XwhBN6mutQZArjHNHfcG9t6', NULL, '2023-06-07 15:57:28', '2023-06-07 15:57:28'),
(4, 'Admin3', 'h@gmail.com', NULL, '$2y$10$WTJEAemSzi//vmKHV3iMIuzF6K/aCWZDo6dKznugDVY6PzTTXfZkC', NULL, '2023-06-07 16:01:47', '2023-06-07 16:01:47'),
(5, 'Admin4', 'a@gmail.com', NULL, '$2y$10$pqgm0s//UXtGvlRcMIPSQOHU2dqT8S.tG0iORc2f.IwMXjA1lImIW', NULL, '2023-06-07 16:03:04', '2023-06-07 16:03:04'),
(6, 'Admin5', 'g@gmail.com', NULL, '$2y$10$OkAMDi1i4YIfP.QKVlI59.yvcK/aFmKJtpSfp7/HrLZs2kzRh9yDS', NULL, '2023-06-07 16:04:45', '2023-06-07 16:04:45'),
(7, 'Admin11', 'wr@gmail.com', NULL, '$2y$10$Z6oY1VKTGKsIdBFw0g36iOt0kTKarqPzqg0N/YoLe0vTpA2jiJPnS', NULL, '2023-06-11 13:22:12', '2023-06-11 13:22:12'),
(8, 'Admin12', 'duongthaita3@gmail.com', NULL, '$2y$10$BeavbGA5cE8B7gnHDGx0oerIDSGo8Je0fiZ7wESQQauq9wiq6yHfu', NULL, '2023-06-11 17:04:12', '2023-06-11 17:04:12'),
(9, 'Admin11qq', 'xxz@gmail.com', NULL, '$2y$10$RRS2A0DIqbygfTtpGrt3WOZpZdlLRhhjhtMe8Eh102sQCkWPkDmmm', NULL, '2023-06-16 00:09:11', '2023-06-16 00:09:11'),
(10, 'zxcz', 'duongthaisdzxczcxtan00@gmail.com', NULL, '$2y$10$wuYQ/HkFqiw7GYmOPEcZjuhXVNMZc/6JApF5B9QrU7mybCSRLzVEm', NULL, '2023-06-16 16:33:27', '2023-06-16 16:33:27'),
(11, 'Admin1111', 'duongthaitan11123@gmail.com', NULL, '$2y$10$EVnfKCY9DzVBEW3KhpV7TOVbNqlp9/dniZ48aaD9AnVYi.V/vWfs2', NULL, '2023-07-22 08:36:08', '2023-07-22 08:36:08'),
(12, 'Admin5', 'gasa@gmail.com', NULL, '$2y$10$l2hPB8vpGZ3rlyLJNpTVfOiFpmlWY5CiaE/h/CRvUnadzxoJAxDoi', NULL, '2023-07-22 08:47:21', '2023-07-22 08:47:21'),
(13, 'Admin123', 'duongthaitansadasdasasdasd00@gmail.com', NULL, '$2y$10$VtQl/jrwo9Mvq0inDedV2.1CExIOt2DVb/sIA0hNBgWgt/LrgXYDu', NULL, '2023-07-27 17:56:36', '2023-07-27 17:56:36');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danh_mucs`
--
ALTER TABLE `danh_mucs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `san_phams`
--
ALTER TABLE `san_phams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_San_Pham_Id_Nguoi_Tao` (`Id_Nguoi_Tao`),
  ADD KEY `idx_San_Pham_Id_Danh_Muc_Tao` (`Id_Danh_Muc`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `danh_mucs`
--
ALTER TABLE `danh_mucs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `san_phams`
--
ALTER TABLE `san_phams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

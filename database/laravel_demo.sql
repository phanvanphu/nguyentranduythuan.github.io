-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2019 at 04:15 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `delete_user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `title`, `slug`, `thumbnail`, `description`, `position`, `status`, `link`, `create_user`, `update_user`, `created_at`, `updated_at`, `deleted_at`, `delete_user`) VALUES
(1, 1, 'Tủ lạnh', 'may-giat', '0', 'Nội dung  tủ lạnh', 1, 1, 'https://www.dai-ichi-life.com.vn/images/zone/306/tintuc_hoatdonhcongdong.jpg', '1', '1', NULL, NULL, NULL, '1'),
(2, 1, 'Xe Máy', 'xe-may', '0', 'Nội dung xe máy', 1, 1, 'https://www.dai-ichi-life.com.vn/images/zone/306/tintuc_hoatdonhcongdong.jpg', '1', '1', NULL, NULL, NULL, '1'),
(3, 1, 'Máy Tính', 'may-tinh', '1', 'Máy Tính xách tay', 1, 1, 'https://cdn.tgdd.vn/Products/Images/44/198907/dell-inspiron-3576-i3-7020u-4gb-1tb-2gb-amd-520-wi-thumb-600x600.jpg', '1', '1', '2019-06-26 02:20:28', '2019-06-26 02:20:28', NULL, '1'),
(4, 1, 'Điện Thoại', 'dien-thoai', '1', 'Điện thoại đẹp quá', 1, 1, 'https://cdn.tgdd.vn/Products/Images/42/179530/samsung-galaxy-s10-plus-black-600x600.jpg', '1', '1', '2019-06-26 02:21:47', '2019-06-26 02:21:47', NULL, '1'),
(5, 1, 'Quạt Điện', 'quat-dien', '1', 'Quạt điện đẹp quá', 1, 1, 'https://www.dai-ichi-life.com.vn/images/zone/306/tintuc_hoatdonhcongdong.jpg', '1', '1', '2019-06-26 02:23:38', '2019-06-26 02:23:38', NULL, '1'),
(6, 1, 'Máy Lọc Khí', 'may-loc-khi', '1', 'máy lọc khí tinh tế quá', 1, 1, 'http://itexpressvn.com/Cache/Uploads/2017/10/le_hoi_halloween_itexpress.jpg', '1', '1', '2019-06-26 02:24:17', '2019-06-26 02:24:17', NULL, '1'),
(7, 1, 'Nồi cơm điện cao tần', 'noi-com-dien-cao-tan', '1', 'Nồi cơm điện cao tần', 1, 1, 'http://sohanews.sohacdn.com/thumb_w/660/2015/4-150821human05-854db-1440345087166-60-14-359-600-crop-1440345207614.jpg', '1', '1', '2019-06-26 02:25:03', '2019-06-26 02:25:03', NULL, '1'),
(8, 1, 'Đồ dùng gia định', 'do-dung-gia-dinh', '1', 'Đồ dùng gia định đẹp quá trời', 1, 1, 'http://sohanews.sohacdn.com/thumb_w/660/2015/4-150821human05-854db-1440345087166-60-14-359-600-crop-1440345207614.jpg', '1', '1', '2019-06-26 02:28:13', '2019-06-26 02:28:13', NULL, '1'),
(9, 1, 'Tivi-Loa-Đồng Hồ', 'tivi-loa-dong-ho', '1', 'Tivi-Loa-Đồng Hồ', 1, 1, 'https://image.bnews.vn/MediaUpload/Medium/2016/06/30/154452-cong-truong.jpg', '1', '1', '2019-06-26 02:30:05', '2019-06-26 02:30:05', NULL, '1'),
(10, 1, 'Phụ Kiện', 'phu-kien', '1', 'phụ kiện đẹp lắm', 1, 1, 'https://image.bnews.vn/MediaUpload/Medium/2016/06/30/154452-cong-truong.jpg', '1', '1', '2019-06-26 02:30:42', '2019-06-26 02:30:42', NULL, '1'),
(11, 1, 'Ô tô', 'o-to', '1', 'ssssssssssss', 1, 1, 'http://itexpressvn.com/Cache/Uploads/2017/10/le_hoi_halloween_itexpress.jpg', '1', '1', '2019-06-26 20:25:12', '2019-06-26 20:25:12', NULL, '1'),
(12, 1, 'Máy tính bàn', 'may-tinh-ban', '3a_1-0913.jpg', 'ssssssssssss', 1, 1, 'http://itexpressvn.com/Cache/Uploads/2017/10/le_hoi_halloween_itexpress.jpg', '1', '1', '2019-06-26 20:27:24', '2019-06-26 20:27:24', NULL, '1'),
(13, 4, 'SAMSUNG', 'samsung', 'bi-tu-choi-mu-van-khong-bo-cuoc-vu-sean-longstaff.jpg', 'SSSSSSSS', 1, 1, 'https://image.bnews.vn/MediaUpload/Medium/2016/06/30/154452-cong-truong.jpg', '1', '1', '2019-06-26 20:30:34', '2019-06-26 20:30:34', NULL, '1'),
(14, 3, 'Máy tính xách tay', 'may-tinh-xach-tay', 'download (2).jpg', 'ssssssssssss', 1, 1, 'https://image.bnews.vn/MediaUpload/Medium/2016/06/30/154452-cong-truong.jpg', '1', '1', '2019-06-26 23:33:47', '2019-06-26 23:33:47', NULL, '1'),
(15, 5, 'Quạt điện Panasonic', 'quat-dien-panasonic', 'download.jpg', 'dddddddddđ', 1, 0, 'https://www.dai-ichi-life.com.vn/images/zone/306/tintuc_hoatdonhcongdong.jpg', '1', '1', '2019-06-27 00:09:42', '2019-06-27 00:09:42', NULL, '1');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_06_26_020944_create_categories_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('pax_creaction@gmail.com', '$2y$10$cPNmKILxTVKCisQeqoVB0uWSjSTqUfvUjHr2Q.Y4ielcbS8KrmdHC', '2019-06-25 23:29:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` int(10) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'PAX_CREATION', 'pax_creaction@gmail.com', NULL, '$2y$10$iukFK6FdkfXcYL6fuyNt0OAZRA2eEIZuwOLnniLAZwkfnpvIwcJPO', 1, NULL, '2019-06-25 19:50:45', '2019-06-25 19:50:45'),
(2, 'PAX', 'pax@gmail.com', NULL, '$2y$10$d1EfzG0Tyc3DG8YHFGTTWOoiy7iCOwxKtolzXz7YRrquh1IaIsgdO', 0, NULL, '2019-06-25 19:51:41', '2019-06-25 19:51:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

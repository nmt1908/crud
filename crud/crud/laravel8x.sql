-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 02, 2024 lúc 08:57 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laravel8x`
--

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
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `img`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nguyen Minh Tam', 'nmt190803@gmail.com', NULL, '$2y$10$3533tMPm5OJjE1HfTFWnleV9ArWcwBj.SAmPb9fkUo0DnPiPv/yZy', 908786359, '364211981_1725009301303821_7161833721915672206_n.jpg', NULL, '2024-03-31 01:07:57', '2024-04-02 11:51:41'),
(4, 'Tran Quoc Viet', 'quocviet@gmail.com', NULL, '$2y$10$lRXkeHDDj/D8nmg0yMn9aOYNWdI8OOD2ubfwDRvKPK6VAGFiaWWjq', 908786359, 'Screenshot 2024-04-03 013338.png', NULL, '2024-03-31 01:48:03', '2024-04-02 11:30:51'),
(6, 'Nguyen Duc Manh', 'ducmanh@gmail.com', NULL, '$2y$10$dB6EnNGJ0fSsNtdk3f5.8uFPIIP9BRELMvOVjcNCziCVuPEsTJK2G', 908786359, 'z5310271546839_0284d18e19915470fc3495b80ee54fb0.jpg', NULL, '2024-03-31 02:34:56', '2024-03-31 02:34:56'),
(7, 'Thai Trong Nghia', 'ttn@gmail.com', NULL, '$2y$10$LZDKwJH5je4Km/B19q7N1.ymPO27xOm/OwecS3B0kEkvpUIK3Jp1m', 908786359, 'Screenshot 2024-04-03 013246.png', NULL, '2024-03-31 02:35:16', '2024-03-31 02:35:16'),
(8, 'Nguyen Van Duc', 'nvd@gmail.com', NULL, '$2y$10$PCHWCu4Exvaf7DQgwWsSX.4OGCqT/2eGto4gT.M4qd7PSRgu5/aSS', 908786359, 'Screenshot 2024-04-03 015602.png', NULL, '2024-03-31 02:35:30', '2024-03-31 02:35:30'),
(9, 'Tran Quoc Viet', 'tqv@gmail.com', NULL, '$2y$10$Dm362/65n12O6v6I0K7Hz.iYaeRy4hv55RihVCVGMLn5rtT/IDfUe', 908786359, 'Screenshot 2024-03-30 215820.png', NULL, '2024-03-31 02:35:54', '2024-03-31 02:35:54'),
(10, 'abc', 'abc@gmail.com', NULL, '$2y$10$vYosDuhu678WEJ7noL6Dr.OLXDICJ8eHsjF4AovKhM2r4KTiw.AgW', 908786359, 'Screenshot 2024-03-30 232717.png', NULL, '2024-03-31 02:37:58', '2024-03-31 02:37:58'),
(11, 'zzz', 'zzz@gmail.com', NULL, '$2y$10$O8Vs.dqtHcBohNAS65Kkdep07uxn/ym4KgrkMX7G/q6d4L57T9FwW', 908786359, 'Screenshot 2024-03-30 232717.png', NULL, '2024-03-31 02:38:25', '2024-03-31 02:38:25'),
(12, '111', '111@gmail.com', NULL, '$2y$10$Z0SjgeCYFGMWb9D.JTq4Je9yTK2atFlHoNUQl4hmrTq6iiMQs8Dqq', 908786359, 'Screenshot 2024-03-30 215820.png', NULL, '2024-03-31 02:38:41', '2024-03-31 02:38:41'),
(13, '333', '333@gmail.com', NULL, '$2y$10$LV.wLSEt2EPw.dHfwKU.vOitI8yxe7PpYDies8vaj2an5PbxgbchG', 908786359, 'Screenshot 2024-03-30 232717.png', NULL, '2024-03-31 02:38:54', '2024-03-31 02:38:54'),
(14, '555', '555@gmail.com', NULL, '$2y$10$2IaO.ING3Djl73Ci/fw5vOdP9J2gd9C54oVrq0soOheNj/iClheyW', 908786359, 'Screenshot 2024-03-26 200200.png', NULL, '2024-03-31 02:39:34', '2024-03-31 02:39:34');

--
-- Chỉ mục cho các bảng đã đổ
--

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
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

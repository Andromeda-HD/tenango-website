-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 19, 2025 at 09:06 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tenango`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$12$HdvrjFsnA6ewGxnPpUND3ebj7z5C9ufp.fgwfAyb3J31ZTbUnE202', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `nama`, `kategori`, `harga`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Espresso Single Shot', 'kopi', 20000, 'Espresso original dengan biji premium Tenango.', '1763572720.jpg', '2025-11-16 12:57:29', '2025-11-19 09:18:40'),
(2, 'Cappuccino', 'kopi', 28000, 'Cappuccino creamy dengan foam lembut.', '1763572732.jpg', '2025-11-16 12:57:29', '2025-11-19 09:18:52'),
(3, 'Latte Caramel', 'kopi', 32000, 'Latte dengan sirup karamel homemade.', '1763572746.jpg', '2025-11-16 12:57:29', '2025-11-19 09:19:06'),
(4, 'Matcha Latte', 'non_kopi', 28000, 'Matcha premium dengan susu segar.', '1763572756.jpg', '2025-11-16 12:57:29', '2025-11-19 09:19:16'),
(5, 'Lemon Tea', 'non_kopi', 18000, 'Teh lemon segar.', '1763572766.jpg', '2025-11-16 12:57:29', '2025-11-19 09:19:26'),
(6, 'Chocolate Ice', 'non_kopi', 25000, 'Minuman coklat dingin manis.', '1763572782.jpg', '2025-11-16 12:57:29', '2025-11-19 09:19:42'),
(7, 'French Fries', 'snack', 22000, 'Kentang goreng crispy.', '1763572794.jpg', '2025-11-16 12:57:29', '2025-11-19 09:19:54'),
(8, 'Churros Mini', 'snack', 28000, 'Churros kecil dengan saus coklat.', '1763572805.jpg', '2025-11-16 12:57:29', '2025-11-19 09:20:05'),
(9, 'Banana Nugget', 'snack', 25000, 'Nugget pisang topping coklat.', '1763572816.jpg', '2025-11-16 12:57:29', '2025-11-19 09:20:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_11_16_192959_create_menus_table', 2),
(5, '2025_11_16_203216_create_admins_table', 2),
(6, '2025_11_19_144346_create_spot_fotos_table', 3),
(7, '2025_11_19_155046_create_reservations_table', 4),
(8, '2025_11_19_163808_create_sales_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `guests` int NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `phone`, `email`, `date`, `time`, `guests`, `note`, `created_at`, `updated_at`) VALUES
(3, 'Andromeda', '082233445588', 'andro@gmail.com', '2025-11-28', '05:10:00', 4, NULL, '2025-11-19 09:06:16', '2025-11-19 12:55:27'),
(5, 'Andromeda', '082233445588', 'andro@gmail.com', '2025-11-22', '09:50:00', 2, '--', '2025-11-19 12:45:39', '2025-11-19 12:45:39');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` bigint UNSIGNED NOT NULL,
  `menu_id` bigint UNSIGNED NOT NULL,
  `quantity` int NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `menu_id`, `quantity`, `date`, `created_at`, `updated_at`) VALUES
(1, 1, 467, '2025-06-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(2, 1, 183, '2025-07-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(3, 1, 404, '2025-08-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(4, 1, 154, '2025-09-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(5, 1, 460, '2025-10-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(6, 1, 391, '2025-11-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(7, 2, 222, '2025-06-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(8, 2, 392, '2025-07-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(9, 2, 269, '2025-08-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(10, 2, 331, '2025-09-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(11, 2, 307, '2025-10-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(12, 2, 442, '2025-11-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(13, 3, 450, '2025-06-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(14, 3, 337, '2025-07-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(15, 3, 446, '2025-08-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(16, 3, 125, '2025-09-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(17, 3, 149, '2025-10-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(18, 3, 169, '2025-11-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(19, 4, 436, '2025-06-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(20, 4, 214, '2025-07-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(21, 4, 248, '2025-08-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(22, 4, 374, '2025-09-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(23, 4, 110, '2025-10-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(24, 4, 445, '2025-11-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(25, 5, 402, '2025-06-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(26, 5, 203, '2025-07-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(27, 5, 332, '2025-08-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(28, 5, 352, '2025-09-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(29, 5, 117, '2025-10-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(30, 5, 469, '2025-11-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(31, 6, 215, '2025-06-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(32, 6, 113, '2025-07-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(33, 6, 238, '2025-08-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(34, 6, 156, '2025-09-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(35, 6, 114, '2025-10-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(36, 6, 478, '2025-11-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(37, 7, 301, '2025-06-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(38, 7, 311, '2025-07-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(39, 7, 267, '2025-08-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(40, 7, 138, '2025-09-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(41, 7, 482, '2025-10-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(42, 7, 188, '2025-11-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(43, 8, 412, '2025-06-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(44, 8, 131, '2025-07-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(45, 8, 113, '2025-08-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(46, 8, 426, '2025-09-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(47, 8, 251, '2025-10-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(48, 8, 366, '2025-11-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(49, 9, 188, '2025-06-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(50, 9, 209, '2025-07-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(51, 9, 293, '2025-08-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(52, 9, 286, '2025-09-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(53, 9, 410, '2025-10-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10'),
(54, 9, 183, '2025-11-19', '2025-11-19 08:44:10', '2025-11-19 08:44:10');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('5LwRoD652THYp2qVFwatSvO0cuMfikDyix4Snv2s', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36 Edg/142.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQThKUlBzSXFDNkM3eUxyTkJPVE5PZTJXN1UxTTVMUjNEMmtuTDRvdyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO3M6NToicm91dGUiO3M6MTU6ImFkbWluLmRhc2hib2FyZCI7fXM6ODoiYWRtaW5faWQiO2k6MTt9', 1763585740);

-- --------------------------------------------------------

--
-- Table structure for table `spot_fotos`
--

CREATE TABLE `spot_fotos` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spot_fotos`
--

INSERT INTO `spot_fotos` (`id`, `judul`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(3, 'Jembatan Ayunda', 'Spot foto Favorit', 'images/uploads/1763565407_web-1334584_1920.jpg', '2025-11-19 07:16:47', '2025-11-19 07:16:47'),
(4, 'Danau', 'Cocok buat yang suka danau', 'images/uploads/1763571764_earth-4257309_1920.jpg', '2025-11-19 09:02:44', '2025-11-19 09:02:44'),
(5, 'I Alone', 'Foto-foto estetik sendiri kayak wibu ngak ada teman', 'images/uploads/1763571819_bench-1544926_1920.jpg', '2025-11-19 09:03:39', '2025-11-19 09:03:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sales_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `spot_fotos`
--
ALTER TABLE `spot_fotos`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `spot_fotos`
--
ALTER TABLE `spot_fotos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

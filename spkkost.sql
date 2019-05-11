-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Bulan Mei 2019 pada 10.48
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spkkost`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `criterias`
--

CREATE TABLE `criterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `criterias`
--

INSERT INTO `criterias` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'fasilitas', '2019-05-07 01:15:37', '2019-05-07 01:15:37'),
(2, 'harga', '2019-05-07 01:15:44', '2019-05-07 01:15:44'),
(3, 'jarak', '2019-05-07 01:15:49', '2019-05-07 01:15:49'),
(4, 'ukuran', '2019-05-08 00:37:15', '2019-05-08 00:37:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_05_05_134116_create_criterias_table', 1),
(9, '2019_05_05_134915_create_randomindexs_table', 1),
(10, '2019_05_07_085138_create_perbandingankriterias_table', 1),
(11, '2019_05_07_130830_create_pvector_ctriterias_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perbandingankriterias`
--

CREATE TABLE `perbandingankriterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `criteria1_id` bigint(20) UNSIGNED NOT NULL,
  `criteria2_id` bigint(20) UNSIGNED NOT NULL,
  `nilai` double NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `perbandingankriterias`
--

INSERT INTO `perbandingankriterias` (`id`, `criteria1_id`, `criteria2_id`, `nilai`, `user_id`, `created_at`, `updated_at`) VALUES
(7, 1, 2, 0.25, 1, '2019-05-07 01:29:48', '2019-05-08 00:39:59'),
(8, 1, 3, 3, 1, '2019-05-07 01:29:48', '2019-05-08 00:39:59'),
(9, 2, 3, 2, 1, '2019-05-07 01:29:48', '2019-05-08 00:39:59'),
(10, 1, 4, 2, 1, '2019-05-08 00:39:59', '2019-05-08 00:39:59'),
(11, 2, 4, 3, 1, '2019-05-08 00:39:59', '2019-05-08 00:39:59'),
(12, 3, 4, 3, 1, '2019-05-08 00:39:59', '2019-05-08 00:39:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pvector_ctriterias`
--

CREATE TABLE `pvector_ctriterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `criteria_id` bigint(20) UNSIGNED NOT NULL,
  `nilai` double NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pvector_ctriterias`
--

INSERT INTO `pvector_ctriterias` (`id`, `criteria_id`, `nilai`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 0.24683375104427738, 1, '2019-05-07 05:25:33', '2019-05-08 00:39:59'),
(2, 2, 0.4537092731829574, 1, '2019-05-07 05:25:33', '2019-05-08 00:39:59'),
(3, 3, 0.19709273182957393, 1, '2019-05-07 05:25:33', '2019-05-08 00:39:59'),
(4, 4, 0.10236424394319131, 1, '2019-05-08 00:39:59', '2019-05-08 00:39:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `randomindexs`
--

CREATE TABLE `randomindexs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `value` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `randomindexs`
--

INSERT INTO `randomindexs` (`id`, `amount`, `value`, `created_at`, `updated_at`) VALUES
(1, 1, 0.00, NULL, NULL),
(2, 2, 0.00, NULL, NULL),
(3, 3, 0.58, NULL, NULL),
(4, 4, 0.90, NULL, NULL),
(5, 5, 1.12, NULL, NULL),
(6, 6, 1.24, NULL, NULL),
(7, 7, 1.32, NULL, NULL),
(8, 8, 1.41, NULL, NULL),
(9, 9, 1.45, NULL, NULL),
(10, 10, 1.49, NULL, NULL),
(11, 11, 1.51, NULL, NULL),
(12, 12, 1.15, NULL, NULL),
(13, 13, 1.56, NULL, NULL),
(14, 14, 1.57, NULL, NULL),
(15, 15, 1.59, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('member','admin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatars/1.png',
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `role`, `email_verified_at`, `password`, `avatar`, `provider`, `provider_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'administrator A', 'administrator', 'administrator@spkkost.com', 'admin', NULL, '$2y$10$lQ7PJHPGfQ3nolFCIWu/AuClsMqSfSaFQNvDd8FVmwFSczSiYG0OW', 'saat-ini-tidak-ada-file.png', NULL, NULL, NULL, '2019-05-07 01:12:22', '2019-05-07 01:12:22');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `criterias`
--
ALTER TABLE `criterias`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `perbandingankriterias`
--
ALTER TABLE `perbandingankriterias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perbandingankriterias_criteria1_id_foreign` (`criteria1_id`),
  ADD KEY `perbandingankriterias_criteria2_id_foreign` (`criteria2_id`),
  ADD KEY `perbandingankriterias_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `pvector_ctriterias`
--
ALTER TABLE `pvector_ctriterias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pvector_ctriterias_criteria_id_foreign` (`criteria_id`),
  ADD KEY `pvector_ctriterias_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `randomindexs`
--
ALTER TABLE `randomindexs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `criterias`
--
ALTER TABLE `criterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `perbandingankriterias`
--
ALTER TABLE `perbandingankriterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pvector_ctriterias`
--
ALTER TABLE `pvector_ctriterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `randomindexs`
--
ALTER TABLE `randomindexs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `perbandingankriterias`
--
ALTER TABLE `perbandingankriterias`
  ADD CONSTRAINT `perbandingankriterias_criteria1_id_foreign` FOREIGN KEY (`criteria1_id`) REFERENCES `criterias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `perbandingankriterias_criteria2_id_foreign` FOREIGN KEY (`criteria2_id`) REFERENCES `criterias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `perbandingankriterias_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pvector_ctriterias`
--
ALTER TABLE `pvector_ctriterias`
  ADD CONSTRAINT `pvector_ctriterias_criteria_id_foreign` FOREIGN KEY (`criteria_id`) REFERENCES `criterias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pvector_ctriterias_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

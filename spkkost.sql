-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jun 2019 pada 01.08
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
  `category` enum('benefit','cost') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `criterias`
--

INSERT INTO `criterias` (`id`, `name`, `category`, `created_at`, `updated_at`) VALUES
(1, 'harga', 'cost', '2019-05-12 11:58:28', '2019-05-12 11:58:28'),
(2, 'fasilitas', 'benefit', '2019-05-12 11:58:43', '2019-05-12 11:58:43'),
(3, 'ukuran', 'benefit', '2019-05-12 11:58:54', '2019-05-15 12:57:35'),
(4, 'jarak', 'cost', '2019-05-12 11:59:32', '2019-05-12 11:59:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `criteria_kost`
--

CREATE TABLE `criteria_kost` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kost_id` bigint(20) UNSIGNED NOT NULL,
  `criteria_id` bigint(20) UNSIGNED NOT NULL,
  `value` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `criteria_kost`
--

INSERT INTO `criteria_kost` (`id`, `kost_id`, `criteria_id`, `value`, `created_at`, `updated_at`) VALUES
(13, 11, 1, 500000, '2019-05-16 08:49:45', '2019-06-01 18:09:11'),
(14, 11, 2, 2, '2019-05-16 08:49:45', '2019-06-01 18:09:11'),
(15, 11, 3, 6, '2019-05-16 08:49:45', '2019-06-01 18:09:11'),
(16, 11, 4, 550, '2019-05-16 08:49:45', '2019-06-01 18:09:11'),
(17, 12, 1, 700000, '2019-05-17 18:17:38', '2019-05-17 18:17:38'),
(18, 12, 2, 3, '2019-05-17 18:17:38', '2019-05-17 18:17:38'),
(19, 12, 3, 9, '2019-05-17 18:17:38', '2019-05-17 18:17:38'),
(20, 12, 4, 400, '2019-05-17 18:17:38', '2019-05-17 18:17:38'),
(21, 13, 1, 400000, '2019-05-17 18:18:40', '2019-05-17 18:18:40'),
(22, 13, 2, 2, '2019-05-17 18:18:40', '2019-05-17 18:18:40'),
(23, 13, 3, 6, '2019-05-17 18:18:40', '2019-05-17 18:18:40'),
(24, 13, 4, 550, '2019-05-17 18:18:40', '2019-05-17 18:18:40'),
(29, 15, 1, 500000, '2019-05-17 18:21:20', '2019-05-17 18:21:20'),
(30, 15, 2, 2, '2019-05-17 18:21:20', '2019-05-17 18:21:20'),
(31, 15, 3, 6, '2019-05-17 18:21:20', '2019-05-17 18:21:20'),
(32, 15, 4, 1200, '2019-05-17 18:21:20', '2019-05-17 18:21:20'),
(33, 16, 1, 800000, '2019-05-17 18:23:31', '2019-05-17 18:23:31'),
(34, 16, 2, 5, '2019-05-17 18:23:31', '2019-05-17 18:23:31'),
(35, 16, 3, 9, '2019-05-17 18:23:31', '2019-05-17 18:23:31'),
(36, 16, 4, 650, '2019-05-17 18:23:31', '2019-05-17 18:23:31'),
(37, 17, 1, 500000, '2019-05-17 18:24:44', '2019-05-17 18:24:44'),
(38, 17, 2, 2, '2019-05-17 18:24:44', '2019-05-17 18:24:44'),
(39, 17, 3, 6, '2019-05-17 18:24:44', '2019-05-17 18:24:44'),
(40, 17, 4, 450, '2019-05-17 18:24:44', '2019-05-17 18:24:44'),
(41, 18, 1, 1000000, '2019-05-17 18:25:52', '2019-05-17 18:25:52'),
(42, 18, 2, 5, '2019-05-17 18:25:52', '2019-05-17 18:25:52'),
(43, 18, 3, 16, '2019-05-17 18:25:52', '2019-05-17 18:25:52'),
(44, 18, 4, 3500, '2019-05-17 18:25:52', '2019-05-17 18:25:52'),
(45, 19, 1, 800000, '2019-05-17 18:27:35', '2019-05-17 18:27:35'),
(46, 19, 2, 5, '2019-05-17 18:27:35', '2019-05-17 18:27:35'),
(47, 19, 3, 12, '2019-05-17 18:27:35', '2019-05-17 18:27:35'),
(48, 19, 4, 3700, '2019-05-17 18:27:35', '2019-05-17 18:27:35'),
(49, 20, 1, 900000, '2019-05-17 18:28:39', '2019-05-17 18:28:39'),
(50, 20, 2, 5, '2019-05-17 18:28:39', '2019-05-17 18:28:39'),
(51, 20, 3, 9, '2019-05-17 18:28:39', '2019-05-17 18:28:39'),
(52, 20, 4, 2000, '2019-05-17 18:28:39', '2019-05-17 18:28:39'),
(53, 21, 1, 600000, '2019-05-17 18:29:45', '2019-05-17 18:29:45'),
(54, 21, 2, 3, '2019-05-17 18:29:45', '2019-05-17 18:29:45'),
(55, 21, 3, 6, '2019-05-17 18:29:45', '2019-05-17 18:29:45'),
(56, 21, 4, 400, '2019-05-17 18:29:45', '2019-05-17 18:29:45'),
(57, 22, 1, 700000, '2019-05-17 18:30:59', '2019-05-17 18:30:59'),
(58, 22, 2, 5, '2019-05-17 18:30:59', '2019-05-17 18:30:59'),
(59, 22, 3, 9, '2019-05-17 18:30:59', '2019-05-17 18:30:59'),
(60, 22, 4, 800, '2019-05-17 18:30:59', '2019-05-17 18:30:59'),
(61, 23, 1, 1000000, '2019-05-17 18:34:31', '2019-05-17 18:34:31'),
(62, 23, 2, 5, '2019-05-17 18:34:31', '2019-05-17 18:34:31'),
(63, 23, 3, 9, '2019-05-17 18:34:31', '2019-05-17 18:34:31'),
(64, 23, 4, 950, '2019-05-17 18:34:31', '2019-05-17 18:34:31'),
(65, 24, 1, 700000, '2019-05-17 18:36:11', '2019-05-17 18:36:11'),
(66, 24, 2, 5, '2019-05-17 18:36:11', '2019-05-17 18:36:11'),
(67, 24, 3, 12, '2019-05-17 18:36:11', '2019-05-17 18:36:11'),
(68, 24, 4, 650, '2019-05-17 18:36:11', '2019-05-17 18:36:11'),
(69, 25, 1, 1000000, '2019-05-17 18:38:53', '2019-05-17 18:38:53'),
(70, 25, 2, 5, '2019-05-17 18:38:53', '2019-05-17 18:38:53'),
(71, 25, 3, 14, '2019-05-17 18:38:53', '2019-05-17 18:38:53'),
(72, 25, 4, 650, '2019-05-17 18:38:53', '2019-05-17 18:38:53'),
(73, 26, 1, 750000, '2019-05-17 18:39:44', '2019-05-17 18:39:44'),
(74, 26, 2, 3, '2019-05-17 18:39:44', '2019-05-17 18:39:44'),
(75, 26, 3, 12, '2019-05-17 18:39:44', '2019-05-17 18:39:44'),
(76, 26, 4, 650, '2019-05-17 18:39:44', '2019-05-17 18:39:44'),
(77, 27, 1, 850000, '2019-05-17 18:40:46', '2019-05-17 18:40:46'),
(78, 27, 2, 5, '2019-05-17 18:40:46', '2019-05-17 18:40:46'),
(79, 27, 3, 12, '2019-05-17 18:40:46', '2019-05-17 18:40:46'),
(80, 27, 4, 300, '2019-05-17 18:40:46', '2019-05-17 18:40:46'),
(81, 28, 1, 800000, '2019-05-17 18:42:16', '2019-05-17 18:42:16'),
(82, 28, 2, 5, '2019-05-17 18:42:16', '2019-05-17 18:42:16'),
(83, 28, 3, 9, '2019-05-17 18:42:16', '2019-05-17 18:42:16'),
(84, 28, 4, 850, '2019-05-17 18:42:16', '2019-05-17 18:42:16'),
(85, 29, 1, 1200000, '2019-05-17 18:43:13', '2019-05-17 18:43:13'),
(86, 29, 2, 5, '2019-05-17 18:43:13', '2019-05-17 18:43:13'),
(87, 29, 3, 12, '2019-05-17 18:43:13', '2019-05-17 18:43:13'),
(88, 29, 4, 200, '2019-05-17 18:43:13', '2019-05-17 18:43:13'),
(89, 30, 1, 1000000, '2019-05-17 18:43:47', '2019-05-17 18:43:47'),
(90, 30, 2, 5, '2019-05-17 18:43:47', '2019-05-17 18:43:47'),
(91, 30, 3, 12, '2019-05-17 18:43:47', '2019-05-17 18:43:47'),
(92, 30, 4, 950, '2019-05-17 18:43:47', '2019-05-17 18:43:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kosts`
--

CREATE TABLE `kosts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('l','p') COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gmap` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kosts`
--

INSERT INTO `kosts` (`id`, `name`, `address`, `type`, `phone_number`, `gmap`, `foto`, `created_at`, `updated_at`) VALUES
(11, 'Rei Home', 'Jl Perjuangan 1', 'l', '085705075132', NULL, 'fotos/GmRYyKxIjaXUFo8Q6lDm7S60LqXqcG9csYZBcrxm.png', '2019-05-16 08:49:45', '2019-06-01 18:09:11'),
(12, 'Ridho', 'Jl Alam Segar 3', 'l', '081349416332', NULL, 'fotos/tZgNpj7A0aJAsWpCgb3RZfzJNp57pc0MBDjNi8H4.png', '2019-05-17 18:17:38', '2019-05-17 18:17:38'),
(13, 'Farhan', 'Jl Pramuka 10', 'l', '082159719707', NULL, 'fotos/oqzsXTTt8kn4zsPB28BAjRlSYIi6rygY68oaUoBP.png', '2019-05-17 18:18:40', '2019-05-17 18:18:40'),
(15, 'Firdaus', 'Jl Perjuangan', 'l', '081350934533', NULL, 'fotos/yAG9k2Gbu5aGxVlySfOhnsm3n3QpcBqjtG1UGGaz.png', '2019-05-17 18:21:20', '2019-05-17 18:21:20'),
(16, 'Kost Putra Biru', 'jl H.Suwandi', 'l', '082255373992', NULL, 'fotos/acfh1hLvAssFW5RcENsGN5ZXmJrSi8sF61iWWbYE.png', '2019-05-17 18:23:31', '2019-05-17 18:23:31'),
(17, 'Kost Putra Jawsika', 'Jl Pramuka 5A', 'l', '082110822735', NULL, 'fotos/2toKEurwoLzYc6teEooKWBLz4setQyIEtoxqSzIR.png', '2019-05-17 18:24:44', '2019-05-17 18:24:44'),
(18, 'Kost Putra Alam P', 'Jl. Juanda', 'l', '082144443000', NULL, 'fotos/qWvzdYja4hZzYZOKMaylhQHSKxVbUQqTQJ6Aml6y.png', '2019-05-17 18:25:52', '2019-05-17 18:25:52'),
(19, 'Kost Putra Pak Tohir', 'Jl drs Anang Hasyim', 'l', '085845677784', NULL, 'fotos/uw02MkiybtzfiDlBSR8RNfB92MVXCi5JlaQqmpRN.png', '2019-05-17 18:27:35', '2019-05-17 18:27:35'),
(20, 'Filemon', 'Jl Pemuda VI', 'l', '08176662374', NULL, 'fotos/YZLf9vHNd9UwoP7uPJA4F0w99SFzNwjhVbIlVo2f.png', '2019-05-17 18:28:39', '2019-05-17 18:28:39'),
(21, 'Fun', 'Jl Perjuangan 1', 'p', '082153254675', NULL, 'fotos/JmUk42r1DZWTiY8xg50lsjim8daKLJde2qm2VZc3.png', '2019-05-17 18:29:45', '2019-05-17 18:29:45'),
(22, 'Kost Orange', 'Jl Perjuangan 3', 'p', '081219171992', NULL, 'fotos/oQpVwnllAiDp0R31eUXzafcQQdkG1tGXQqA5e9Ad.png', '2019-05-17 18:30:59', '2019-05-17 18:30:59'),
(23, 'Melody', 'Jl Pramuka Komp. PK', 'p', '081350345677', NULL, 'fotos/A7b0ynBYxpTyWxCsCSx68ixhl5xt7z6BsB44j2H6.png', '2019-05-17 18:34:31', '2019-05-17 18:34:31'),
(24, 'Ginanda', 'Jl Pramuka No 81', 'p', '082253252528', NULL, 'fotos/v0p9yA58J180Qvql1wHklcDeU9EOh3KMwhnMTbWg.png', '2019-05-17 18:36:11', '2019-05-17 18:36:11'),
(25, 'Fatima Muslimah', 'Jl Perjuangan 4', 'p', '081347677220', NULL, 'fotos/HWcwCpVVlUhGGhNrZhXVXFybj2pd6o4Ird5xrYbu.png', '2019-05-17 18:38:53', '2019-05-17 18:38:53'),
(26, 'Kasturi', 'Jl Pramuka 6', 'p', '081347710312', NULL, 'fotos/A30D4KlJ0iR3LJKsKQXD7xyCjiJFNlE6G2FzlUpz.png', '2019-05-17 18:39:44', '2019-05-17 18:39:44'),
(27, 'Naren', 'Jl Pramuka 15', 'p', '081347968679', NULL, 'fotos/BUAPLsOARAweegzrKSl9YUukFRhUYWU1OJ3EJJgc.png', '2019-05-17 18:40:46', '2019-05-17 18:40:46'),
(28, 'Diana', 'Jl M. Yamin', 'p', '08125550483', NULL, 'fotos/DZJcwxGaUdq1avq6p7fJuKorrm1ELZFAqCjZ1uE5.png', '2019-05-17 18:42:16', '2019-05-17 18:42:16'),
(29, 'Gelatik Permai', 'Jl gelatik', 'p', '082365652828', NULL, 'fotos/BgHL7DJsWcjgArZdT6fOg0hoTJSo7fLplJs8majH.png', '2019-05-17 18:43:13', '2019-05-17 18:43:13'),
(30, 'Rafa', 'Gn. Rahmat', 'p', '081244323111', NULL, 'fotos/55awjD6zPvx1OH4VivIwEiqAffSgq0GmLva4jw9w.png', '2019-05-17 18:43:47', '2019-05-17 18:43:47');

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
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2019_05_05_134116_create_criterias_table', 1),
(11, '2019_05_05_134915_create_randomindexs_table', 1),
(12, '2019_05_07_085138_create_perbandingankriterias_table', 1),
(13, '2019_05_07_130830_create_pvector_ctriterias_table', 1),
(14, '2019_05_11_205636_create_social_accounts_table', 1),
(15, '2019_05_13_031741_create_kosts_table', 2),
(17, '2019_05_13_032419_create_criteria_kost_table', 3),
(18, '2019_05_18_044615_create_preferensialternatif_table', 4);

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
(8, 1, 2, 2, 1, '2019-05-15 13:27:22', '2019-05-15 13:27:54'),
(9, 1, 3, 1, 1, '2019-05-15 13:27:22', '2019-05-15 13:27:22'),
(10, 1, 4, 0.5, 1, '2019-05-15 13:27:22', '2019-05-15 13:27:22'),
(11, 2, 3, 1.5, 1, '2019-05-15 13:27:22', '2019-05-15 13:27:22'),
(12, 2, 4, 0.5, 1, '2019-05-15 13:27:22', '2019-05-15 13:27:22'),
(13, 3, 4, 0.3333333333333333, 1, '2019-05-15 13:27:22', '2019-05-15 13:27:22'),
(14, 1, 2, 2, 2, '2019-05-29 19:23:29', '2019-06-01 16:28:17'),
(15, 1, 3, 3, 2, '2019-05-29 19:23:29', '2019-06-01 16:28:17'),
(16, 1, 4, 0.5, 2, '2019-05-29 19:23:29', '2019-06-01 16:28:17'),
(17, 2, 3, 1.5, 2, '2019-05-29 19:23:29', '2019-06-01 16:28:17'),
(18, 2, 4, 0.5, 2, '2019-05-29 19:23:29', '2019-06-01 16:28:17'),
(19, 3, 4, 3, 2, '2019-05-29 19:23:29', '2019-06-01 16:28:17'),
(20, 1, 2, 2, 4, '2019-06-01 18:27:03', '2019-06-01 19:50:37'),
(21, 1, 3, 1, 4, '2019-06-01 18:27:03', '2019-06-01 19:50:37'),
(22, 1, 4, 0.5, 4, '2019-06-01 18:27:03', '2019-06-01 19:50:37'),
(23, 2, 3, 1, 4, '2019-06-01 18:27:03', '2019-06-01 19:50:37'),
(24, 2, 4, 1, 4, '2019-06-01 18:27:03', '2019-06-01 19:50:37'),
(25, 3, 4, 2, 4, '2019-06-01 18:27:03', '2019-06-01 19:50:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `preferensialternatif`
--

CREATE TABLE `preferensialternatif` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `kost_id` bigint(20) UNSIGNED NOT NULL,
  `preferensi` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `preferensialternatif`
--

INSERT INTO `preferensialternatif` (`id`, `user_id`, `kost_id`, `preferensi`, `created_at`, `updated_at`) VALUES
(1, 1, 11, 0.4750100797894916, '2019-05-17 20:55:42', '2019-05-17 20:55:42'),
(2, 1, 12, 0.5451069209735177, '2019-05-17 20:55:42', '2019-05-17 20:55:42'),
(3, 1, 13, 0.5221748431307255, '2019-05-17 20:55:42', '2019-05-17 20:55:42'),
(5, 1, 15, 0.39191370992841584, '2019-05-17 20:55:42', '2019-05-17 20:55:42'),
(6, 1, 16, 0.5203964352012995, '2019-05-17 20:55:42', '2019-05-17 20:55:42'),
(7, 1, 17, 0.5091008981940355, '2019-05-17 20:55:42', '2019-05-17 20:55:42'),
(8, 1, 18, 0.460738910948995, '2019-05-17 20:55:42', '2019-05-17 20:55:42'),
(9, 1, 19, 0.4432324211735976, '2019-05-17 20:55:42', '2019-05-17 20:55:42'),
(10, 1, 20, 0.4196751528246626, '2019-05-17 20:55:42', '2019-05-17 20:55:42'),
(11, 1, 21, 0.5377269925064042, '2019-05-17 20:55:43', '2019-05-17 20:55:43'),
(12, 1, 22, 0.512902115974595, '2019-05-17 20:55:43', '2019-05-17 20:55:43'),
(13, 1, 23, 0.4558222597406034, '2019-05-17 20:55:43', '2019-05-17 20:55:43'),
(14, 1, 24, 0.5670803331194412, '2019-05-17 20:55:43', '2019-05-17 20:55:43'),
(15, 1, 25, 0.5465462861673269, '2019-05-17 20:55:43', '2019-05-17 20:55:43'),
(16, 1, 26, 0.48483290423335673, '2019-05-17 20:55:43', '2019-05-17 20:55:43'),
(17, 1, 27, 0.6947416850098511, '2019-05-17 20:55:43', '2019-05-17 20:55:43'),
(18, 1, 28, 0.48985353002437776, '2019-05-17 20:55:43', '2019-05-17 20:55:43'),
(19, 1, 29, 0.8029983360865713, '2019-05-17 20:55:43', '2019-05-17 20:55:43'),
(20, 1, 30, 0.48566159932259007, '2019-05-17 20:55:43', '2019-05-17 20:55:43'),
(21, 2, 11, 0.4750100797894916, '2019-05-29 21:15:46', '2019-05-29 21:15:46'),
(22, 2, 12, 0.5451069209735177, '2019-05-29 21:15:46', '2019-05-29 21:15:46'),
(23, 2, 13, 0.5221748431307255, '2019-05-29 21:15:46', '2019-05-29 21:15:46'),
(25, 2, 15, 0.39191370992841584, '2019-05-29 21:15:46', '2019-05-29 21:15:46'),
(26, 2, 16, 0.5203964352012995, '2019-05-29 21:15:46', '2019-05-29 21:15:46'),
(27, 2, 17, 0.5091008981940355, '2019-05-29 21:15:46', '2019-05-29 21:15:46'),
(28, 2, 18, 0.460738910948995, '2019-05-29 21:15:46', '2019-05-29 21:15:46'),
(29, 2, 19, 0.4432324211735976, '2019-05-29 21:15:46', '2019-05-29 21:15:46'),
(30, 2, 20, 0.4196751528246626, '2019-05-29 21:15:46', '2019-05-29 21:15:46'),
(31, 2, 21, 0.5377269925064042, '2019-05-29 21:15:46', '2019-05-29 21:15:46'),
(32, 2, 22, 0.512902115974595, '2019-05-29 21:15:46', '2019-05-29 21:15:46'),
(33, 2, 23, 0.4558222597406034, '2019-05-29 21:15:46', '2019-05-29 21:15:46'),
(34, 2, 24, 0.5670803331194412, '2019-05-29 21:15:46', '2019-05-29 21:15:46'),
(35, 2, 25, 0.5465462861673269, '2019-05-29 21:15:46', '2019-05-29 21:15:46'),
(36, 2, 26, 0.48483290423335673, '2019-05-29 21:15:46', '2019-05-29 21:15:46'),
(37, 2, 27, 0.6947416850098511, '2019-05-29 21:15:46', '2019-05-29 21:15:46'),
(38, 2, 28, 0.48985353002437776, '2019-05-29 21:15:46', '2019-05-29 21:15:46'),
(39, 2, 29, 0.8029983360865713, '2019-05-29 21:15:46', '2019-05-29 21:15:46'),
(40, 2, 30, 0.48566159932259007, '2019-05-29 21:15:46', '2019-05-29 21:15:46');

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
(5, 1, 0.23582381670616964, 1, '2019-05-15 13:23:33', '2019-05-15 13:27:54'),
(6, 2, 0.18315916110033756, 1, '2019-05-15 13:23:33', '2019-05-15 13:27:54'),
(7, 3, 0.1591431444372621, 1, '2019-05-15 13:23:33', '2019-05-15 13:27:54'),
(8, 4, 0.4218738777562307, 1, '2019-05-15 13:23:33', '2019-05-15 13:27:54'),
(9, 1, 0.3070241139934235, 2, '2019-05-29 19:23:29', '2019-06-01 16:28:17'),
(10, 2, 0.16601205699671173, 2, '2019-05-29 19:23:29', '2019-06-01 16:28:17'),
(11, 3, 0.24400803799780782, 2, '2019-05-29 19:23:29', '2019-06-01 16:28:17'),
(12, 4, 0.282955791012057, 2, '2019-05-29 19:23:30', '2019-06-01 16:28:17'),
(13, 1, 0.25476190476190474, 4, '2019-06-01 18:27:03', '2019-06-01 19:50:37'),
(14, 2, 0.20476190476190476, 4, '2019-06-01 18:27:03', '2019-06-01 19:50:37'),
(15, 3, 0.28809523809523807, 4, '2019-06-01 18:27:03', '2019-06-01 19:50:37'),
(16, 4, 0.2523809523809524, 4, '2019-06-01 18:27:03', '2019-06-01 19:50:37');

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
-- Struktur dari tabel `social_accounts`
--

CREATE TABLE `social_accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `social_accounts`
--

INSERT INTO `social_accounts` (`id`, `user_id`, `provider_id`, `provider_name`, `created_at`, `updated_at`) VALUES
(1, 2, '117639808300532729235', 'google', '2019-05-15 13:47:25', '2019-05-15 13:47:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('member','admin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatars/1.png',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'administrator A', 'administrator@spkkost.com', 'admin', NULL, '$2y$10$Wfh.jjs84iqoHulOE0aZQe4N8HCzqNppjeaG6EsgnjBdFjWc5mhEC', 'avatars/RNBj6JmPHEoDLUQ1GzuZ5rxIlM1KNLsaBtFhFmq4.png', NULL, '2019-05-12 11:49:42', '2019-05-30 07:07:19'),
(2, 'anas misbahuddin', 'anas.misbahuddin4869@gmail.com', 'member', NULL, NULL, 'avatars/1.png', 'a8BfZlFG3CMXl36h5Dh3zxXr0wG5kPOHPq5xZTmWr782zkCwKUz46nOqNplw', '2019-05-15 13:47:25', '2019-05-15 13:47:25'),
(3, 'gui', 'gui@gmail.com', 'member', NULL, '$2y$10$Ta1HLcFZJ9RDLv9/UX8hsuXTCqprxFCO45j.o/b8ucb0JDTO/w32.', 'avatars/1.png', NULL, '2019-05-27 18:19:24', '2019-05-27 18:19:24'),
(4, 'fiul', 'hdi.zone@gmail.com', 'member', NULL, '$2y$10$H3tZQpRU9q9RgQi3fxKkI.d13tDY5XIAGZmbGPh9nxHwAaeAHZuHO', 'avatars/1.png', NULL, '2019-06-01 18:25:16', '2019-06-01 18:25:16'),
(5, 'aliffia', 'aliffia@mail.com', 'member', NULL, '$2y$10$Qt4YqskgMZP9NrfZrtFDweOU7R28NwS4e.MmQ5zxMCl8EGiWJf/hm', 'avatars/1.png', NULL, '2019-06-01 22:13:51', '2019-06-01 22:13:51');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `criterias`
--
ALTER TABLE `criterias`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `criteria_kost`
--
ALTER TABLE `criteria_kost`
  ADD PRIMARY KEY (`id`),
  ADD KEY `criteria_kost_kost_id_foreign` (`kost_id`),
  ADD KEY `criteria_kost_criteria_id_foreign` (`criteria_id`);

--
-- Indeks untuk tabel `kosts`
--
ALTER TABLE `kosts`
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
-- Indeks untuk tabel `preferensialternatif`
--
ALTER TABLE `preferensialternatif`
  ADD PRIMARY KEY (`id`),
  ADD KEY `preferensialternatif_user_id_foreign` (`user_id`),
  ADD KEY `preferensialternatif_kost_id_foreign` (`kost_id`);

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
-- Indeks untuk tabel `social_accounts`
--
ALTER TABLE `social_accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `social_accounts_provider_id_unique` (`provider_id`),
  ADD KEY `social_accounts_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT untuk tabel `criteria_kost`
--
ALTER TABLE `criteria_kost`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT untuk tabel `kosts`
--
ALTER TABLE `kosts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `perbandingankriterias`
--
ALTER TABLE `perbandingankriterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `preferensialternatif`
--
ALTER TABLE `preferensialternatif`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `pvector_ctriterias`
--
ALTER TABLE `pvector_ctriterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `randomindexs`
--
ALTER TABLE `randomindexs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `social_accounts`
--
ALTER TABLE `social_accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `criteria_kost`
--
ALTER TABLE `criteria_kost`
  ADD CONSTRAINT `criteria_kost_criteria_id_foreign` FOREIGN KEY (`criteria_id`) REFERENCES `criterias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `criteria_kost_kost_id_foreign` FOREIGN KEY (`kost_id`) REFERENCES `kosts` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `perbandingankriterias`
--
ALTER TABLE `perbandingankriterias`
  ADD CONSTRAINT `perbandingankriterias_criteria1_id_foreign` FOREIGN KEY (`criteria1_id`) REFERENCES `criterias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `perbandingankriterias_criteria2_id_foreign` FOREIGN KEY (`criteria2_id`) REFERENCES `criterias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `perbandingankriterias_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `preferensialternatif`
--
ALTER TABLE `preferensialternatif`
  ADD CONSTRAINT `preferensialternatif_kost_id_foreign` FOREIGN KEY (`kost_id`) REFERENCES `kosts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `preferensialternatif_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pvector_ctriterias`
--
ALTER TABLE `pvector_ctriterias`
  ADD CONSTRAINT `pvector_ctriterias_criteria_id_foreign` FOREIGN KEY (`criteria_id`) REFERENCES `criterias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pvector_ctriterias_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `social_accounts`
--
ALTER TABLE `social_accounts`
  ADD CONSTRAINT `social_accounts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

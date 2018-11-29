-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2018 at 07:17 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kmb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `job_title`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'Prihar Reformasi', 'refoningrum12@gmail.com', 'admin', '$2y$10$20pgBQzqO7cUa8eq2AJImOdU5o8xxNKWbbISrtWGTNIzBwqV.pgrC', 'kNzURkPiADOnFrDyWZK7Oz5cvc41O8eemu9EH5yVI7e5GCbasayxO730F4P4', '2018-11-19 08:30:40', '2018-11-19 08:30:40');

-- --------------------------------------------------------

--
-- Table structure for table `daftars`
--

CREATE TABLE `daftars` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `universitas` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `jabatan_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftars`
--

INSERT INTO `daftars` (`id`, `name`, `nik`, `universitas`, `alamat`, `no_telp`, `jabatan_id`, `status`) VALUES
(4, 'Herfiza', '3306106407960001999', 'UGM', 'Yogyakarta', '08990876576', 4, ''),
(6, 'Kusumaningrum', '123456789987', 'UGM', 'Yogyakarta', '0899087656', 5, ''),
(8, 'Swastika', '3306106407960000877', 'UGM', 'Yogyakarta', '089908765709', 3, ''),
(10, 'Herfiza', '33061064079600006', 'UGM', 'Yogyakarta', '0899087659', 8, ''),
(11, 'Herfiza', '330610640796000122', 'UGM', 'Yogyakarta', '0899087657', 4, ''),
(12, 'Swastika', '33061064079600013', 'UGM', 'Yogyakarta', '089908765709', 5, ''),
(13, 'Herfiza', '330610640796000199', 'UGM', 'Yogyakarta', '08990876576', 4, 'Konfirmasi'),
(15, 'test', '1234567890', 'UGM', 'Yogyakarta', '089908765709', 2, 'Belum Konfirmasi'),
(16, 'Swastika', '3306106407960001311', 'UGM', 'Yogyakarta', '089908765709', 5, 'Konfirmasi'),
(17, 'Swastikac', '33061064079600019933', 'UGM', 'Yogyakarta', '08990876593', 5, 'Belum Konfirmasi'),
(18, 'kiki', '330610640796000133', 'UGM', 'Yogyakarta', '089908765709', 6, 'Belum Konfirmasi'),
(19, 'Hellen', '330610640796000177', 'UGM', 'Yogyakarta', '089908765709', 5, 'Belum Konfirmasi'),
(20, 'kikitisnahayu', '330610640796000099', 'UGM', 'Yogyakarta', '08990876576', 7, 'Belum Konfirmasi'),
(21, 'hi', '3306106407960001993', 'UGM', 'Yogyakarta', '089908765709', 5, 'Belum Konfirmasi');

-- --------------------------------------------------------

--
-- Table structure for table `jabatans`
--

CREATE TABLE `jabatans` (
  `id` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatans`
--

INSERT INTO `jabatans` (`id`, `deskripsi`) VALUES
(1, 'Ketua'),
(2, 'Wakil Ketua'),
(3, 'Sekretaris'),
(4, 'Bendahara'),
(5, 'Media Komunikasi & Informasi'),
(6, 'Pengabdian Masyarakat'),
(7, 'Kewirausahaan'),
(8, 'Pengembangan Sumber Daya Manusia');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_11_16_090637_create_admins_table', 1),
(5, '2017_11_22_164057_tabel_pemesanans', 3);

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
('refoningrum12@gmail.com', '$2y$10$xS5KlKMhGFDq69woqOzcduY0vLs/fDU5esKSZOxuSq.NZYl8R77PW', '2018-11-21 20:20:39');

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `id` int(10) DEFAULT NULL,
  `daftar_id` int(11) UNSIGNED NOT NULL,
  `jabatan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'Kusumaningrum', 'kusuma@gmail.com', '$2y$10$jlzFt0CWFixMtZN0UN/0suNyh.ZqMLryKLGWVLf2FDHr7enEKlpOC', 'uLE892MdrSAved80DKoSEfPqEnRF8qYhRAaX2u9lYMIZ5t0nK2Kdw1DdCSAO', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `daftars`
--
ALTER TABLE `daftars`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`),
  ADD UNIQUE KEY `nik_2` (`nik`),
  ADD KEY `jabatan_id` (`jabatan_id`);

--
-- Indexes for table `jabatans`
--
ALTER TABLE `jabatans`
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
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD KEY `daftar_id` (`daftar_id`),
  ADD KEY `jabatan_id` (`jabatan_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `daftars`
--
ALTER TABLE `daftars`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `jabatans`
--
ALTER TABLE `jabatans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftars`
--
ALTER TABLE `daftars`
  ADD CONSTRAINT `daftars_ibfk_1` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD CONSTRAINT `pengurus_ibfk_1` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengurus_ibfk_2` FOREIGN KEY (`daftar_id`) REFERENCES `daftars` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

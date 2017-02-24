-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 24, 2017 at 06:59 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `defi`
--

-- --------------------------------------------------------

--
-- Table structure for table `golongans`
--

CREATE TABLE `golongans` (
  `id` int(10) UNSIGNED NOT NULL,
  `Kode_golongan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nama_golongan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Besaran_uang` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `golongans`
--

INSERT INTO `golongans` (`id`, `Kode_golongan`, `Nama_golongan`, `Besaran_uang`, `created_at`, `updated_at`) VALUES
(1, 'GL01', '1A', 10000000, '2017-02-21 21:48:32', '2017-02-23 21:39:25'),
(2, 'GL02', '1B', 8000000, '2017-02-22 00:58:34', '2017-02-23 21:39:37'),
(3, 'GL03', '1C', 5000000, '2017-02-23 01:01:11', '2017-02-23 21:40:31');

-- --------------------------------------------------------

--
-- Table structure for table `jabatans`
--

CREATE TABLE `jabatans` (
  `id` int(10) UNSIGNED NOT NULL,
  `Kode_jabatan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nama_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Besaran_uang` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jabatans`
--

INSERT INTO `jabatans` (`id`, `Kode_jabatan`, `Nama_jabatan`, `Besaran_uang`, `created_at`, `updated_at`) VALUES
(1, 'JB01', 'Manager', 10000000, '2017-02-21 21:48:25', '2017-02-23 21:38:31'),
(2, 'JB02', 'staff', 4000000, '2017-02-22 00:50:04', '2017-02-23 21:38:48');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_lemburs`
--

CREATE TABLE `kategori_lemburs` (
  `id` int(10) UNSIGNED NOT NULL,
  `Kode_lembur` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_id` int(10) UNSIGNED NOT NULL,
  `golongan_id` int(10) UNSIGNED NOT NULL,
  `Besaran_uang` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_lemburs`
--

INSERT INTO `kategori_lemburs` (`id`, `Kode_lembur`, `jabatan_id`, `golongan_id`, `Besaran_uang`, `created_at`, `updated_at`) VALUES
(1, 'KL01', 1, 1, 20000, '2017-02-21 21:49:15', '2017-02-21 21:49:29'),
(2, 'KL02', 1, 2, 18000, '2017-02-22 01:58:08', '2017-02-23 21:41:12'),
(4, 'KL03', 2, 1, 10000, '2017-02-23 20:50:51', '2017-02-23 21:41:41'),
(6, 'KL04', 2, 3, 8000, '2017-02-23 21:41:58', '2017-02-23 21:41:58');

-- --------------------------------------------------------

--
-- Table structure for table `lembur_pegawais`
--

CREATE TABLE `lembur_pegawais` (
  `id` int(10) UNSIGNED NOT NULL,
  `Kode_lembur_id` int(10) UNSIGNED NOT NULL,
  `pegawai_id` int(10) UNSIGNED NOT NULL,
  `Jumlah_jam` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lembur_pegawais`
--

INSERT INTO `lembur_pegawais` (`id`, `Kode_lembur_id`, `pegawai_id`, `Jumlah_jam`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 3, '2017-02-21 21:49:39', '2017-02-21 21:49:39');

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
(3, '2017_02_02_035644_create_jabatans_table', 1),
(4, '2017_02_02_040044_create_golongans_table', 1),
(5, '2017_02_02_041541_create_kategori_lemburs_table', 1),
(6, '2017_02_02_042402_create_pegawais_table', 1),
(7, '2017_02_02_043203_create_lembur_pegawais_table', 1),
(8, '2017_02_02_043214_create_tunjangans_table', 1),
(9, '2017_02_02_043225_create_tunjangan_pegawais_table', 1),
(10, '2017_02_02_043244_create_penggajians_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawais`
--

CREATE TABLE `pegawais` (
  `id` int(10) UNSIGNED NOT NULL,
  `Nip` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `jabatan_id` int(10) UNSIGNED NOT NULL,
  `golongan_id` int(10) UNSIGNED NOT NULL,
  `Photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawais`
--

INSERT INTO `pegawais` (`id`, `Nip`, `user_id`, `jabatan_id`, `golongan_id`, `Photo`, `created_at`, `updated_at`) VALUES
(1, '111212', 2, 1, 1, 'b4d97c10ddd336ad552d9be515c04da4.jpg', '2017-02-21 21:49:02', '2017-02-21 21:52:38'),
(2, '111218', 3, 1, 1, 'a19b5c673fd913221b6941221c4d5672.png', '2017-02-21 21:54:43', '2017-02-21 21:58:06'),
(5, '121314', 7, 2, 1, 'b2e62649fcaa4a666b48a18fa21b346f.jpg', '2017-02-23 23:26:35', '2017-02-23 23:26:35');

-- --------------------------------------------------------

--
-- Table structure for table `penggajians`
--

CREATE TABLE `penggajians` (
  `id` int(10) UNSIGNED NOT NULL,
  `tunjangan_pegawai_id` int(10) UNSIGNED NOT NULL,
  `Jumlah_jam_lembur` int(11) NOT NULL,
  `Jumlah_uang_lembur` int(11) NOT NULL,
  `Gaji_pokok` int(11) NOT NULL,
  `Total_gaji` int(11) NOT NULL,
  `Tanggal_pengambilan` date NOT NULL,
  `Status_pengambilan` tinyint(4) NOT NULL,
  `Petugas_penerima` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penggajians`
--

INSERT INTO `penggajians` (`id`, `tunjangan_pegawai_id`, `Jumlah_jam_lembur`, `Jumlah_uang_lembur`, `Gaji_pokok`, `Total_gaji`, `Tanggal_pengambilan`, `Status_pengambilan`, `Petugas_penerima`, `created_at`, `updated_at`) VALUES
(19, 1, 3, 60000, 20000000, 20060000, '2024-02-17', 0, 'admin', '2017-02-23 23:46:21', '2017-02-23 23:46:21'),
(20, 2, 0, 0, 20000000, 20000000, '2024-02-17', 0, 'admin', '2017-02-23 23:49:56', '2017-02-23 23:49:56');

-- --------------------------------------------------------

--
-- Table structure for table `tunjangans`
--

CREATE TABLE `tunjangans` (
  `id` int(10) UNSIGNED NOT NULL,
  `Kode_tunjangan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_id` int(10) UNSIGNED NOT NULL,
  `golongan_id` int(10) UNSIGNED NOT NULL,
  `Status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Jumlah_anak` int(11) DEFAULT NULL,
  `Besaran_uang` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tunjangans`
--

INSERT INTO `tunjangans` (`id`, `Kode_tunjangan`, `jabatan_id`, `golongan_id`, `Status`, `Jumlah_anak`, `Besaran_uang`, `created_at`, `updated_at`) VALUES
(1, 'TJ02', 1, 1, 'Sudah', NULL, 1000000, '2017-02-21 21:49:58', '2017-02-23 21:42:54');

-- --------------------------------------------------------

--
-- Table structure for table `tunjangan_pegawais`
--

CREATE TABLE `tunjangan_pegawais` (
  `id` int(10) UNSIGNED NOT NULL,
  `Kode_tunjangan_id` int(10) UNSIGNED NOT NULL,
  `pegawai_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tunjangan_pegawais`
--

INSERT INTO `tunjangan_pegawais` (`id`, `Kode_tunjangan_id`, `pegawai_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2017-02-22 21:26:21', '2017-02-22 21:26:21'),
(2, 1, 2, '2017-02-23 18:53:59', '2017-02-23 18:53:59'),
(5, 1, 5, '2017-02-23 23:47:14', '2017-02-23 23:47:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `permission`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$UIfMD65k8Cj0vRYNbmuqAONuQ2MCRGiIr/uRv0lUSn8od7kEJMtpe', 'Admin', 'JZQLkyfIVQm6QOZKdMo9qFtag1GNpfNwbZxxCY1BSpZl2FTrVsaRlOLxNh6L', '2017-02-21 21:48:12', '2017-02-21 21:48:12'),
(2, 'Defiana Mustika', 'defiana@gmail.com', '$2y$10$2bVJCEjNMgxL57eTYsqfW.BH620eW780pNVpPTKy/ELg8YNi48iy6', 'Admin', 'mSSxY2PveELf1RPUOhqXR2CpHDQexpxmaTnYA1y1DDyVi0K6YYaompkhZCxu', '2017-02-21 21:49:02', '2017-02-21 21:49:02'),
(3, 'Tika', 'tika@contoh.com', '$2y$10$aUDfEVP6nihfLZcaAq2gcOLMyotqHt36kCLpOgmbBaJfcnaljhH8.', 'Admin', NULL, '2017-02-21 21:54:43', '2017-02-21 21:54:43'),
(4, 'Rere', 'rere@gmail.com', '$2y$10$td8pHS3nr5KZPt7KeL3gE.yEnReMhQmJL9.Q/4CvSZBJlahsN1Yta', 'Pegawai', 'ihMWuAGvHcgUo9a3YhGryDxXYggOx4EulG5vygYbLeG037gG0iSQWPjspPLz', '2017-02-22 00:54:07', '2017-02-22 00:54:07'),
(5, 'admin', 'admin@apa.com', '$2y$10$F.upZs32heVLjJVMF5OsMOtVj58uqQMAQQ1uY77k/XKzUwbAdTUIa', 'Admin', '6D9sLx1VrGQ3W5wdpD0iJ3GlFnprw9vBsh7Ku9q9lNNPQ2PBESm7ACEWZuJv', '2017-02-22 18:22:02', '2017-02-22 18:22:02'),
(6, 'ica', 'ici@gmail.com', '$2y$10$BfY691uakUvFAXlh2t73jeKYO8zdp6.Ut/zEPOE9HB/Vwfwf58C2u', 'Admin', NULL, '2017-02-23 01:03:02', '2017-02-23 01:03:02'),
(7, 'Cika', 'Cika@gmail.com', '$2y$10$qFzIySDayxnd74zdxetMwOhYHS5MGPVzROiHbN74kf7SZ.yHwOiNC', 'HRD', NULL, '2017-02-23 23:26:35', '2017-02-23 23:26:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `golongans`
--
ALTER TABLE `golongans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `golongans_kode_golongan_unique` (`Kode_golongan`);

--
-- Indexes for table `jabatans`
--
ALTER TABLE `jabatans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jabatans_kode_jabatan_unique` (`Kode_jabatan`);

--
-- Indexes for table `kategori_lemburs`
--
ALTER TABLE `kategori_lemburs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kategori_lemburs_kode_lembur_unique` (`Kode_lembur`),
  ADD KEY `kategori_lemburs_jabatan_id_foreign` (`jabatan_id`),
  ADD KEY `kategori_lemburs_golongan_id_foreign` (`golongan_id`);

--
-- Indexes for table `lembur_pegawais`
--
ALTER TABLE `lembur_pegawais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lembur_pegawais_kode_lembur_id_foreign` (`Kode_lembur_id`),
  ADD KEY `lembur_pegawais_pegawai_id_foreign` (`pegawai_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pegawais`
--
ALTER TABLE `pegawais`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pegawais_nip_unique` (`Nip`),
  ADD KEY `pegawais_user_id_foreign` (`user_id`),
  ADD KEY `pegawais_jabatan_id_foreign` (`jabatan_id`),
  ADD KEY `pegawais_golongan_id_foreign` (`golongan_id`);

--
-- Indexes for table `penggajians`
--
ALTER TABLE `penggajians`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penggajians_tunjangan_pegawai_id_foreign` (`tunjangan_pegawai_id`);

--
-- Indexes for table `tunjangans`
--
ALTER TABLE `tunjangans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tunjangans_kode_tunjangan_unique` (`Kode_tunjangan`),
  ADD KEY `tunjangans_jabatan_id_foreign` (`jabatan_id`),
  ADD KEY `tunjangans_golongan_id_foreign` (`golongan_id`);

--
-- Indexes for table `tunjangan_pegawais`
--
ALTER TABLE `tunjangan_pegawais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tunjangan_pegawais_kode_tunjangan_id_foreign` (`Kode_tunjangan_id`),
  ADD KEY `tunjangan_pegawais_pegawai_id_foreign` (`pegawai_id`);

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
-- AUTO_INCREMENT for table `golongans`
--
ALTER TABLE `golongans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jabatans`
--
ALTER TABLE `jabatans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kategori_lemburs`
--
ALTER TABLE `kategori_lemburs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `lembur_pegawais`
--
ALTER TABLE `lembur_pegawais`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `pegawais`
--
ALTER TABLE `pegawais`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `penggajians`
--
ALTER TABLE `penggajians`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tunjangans`
--
ALTER TABLE `tunjangans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tunjangan_pegawais`
--
ALTER TABLE `tunjangan_pegawais`
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
-- Constraints for table `kategori_lemburs`
--
ALTER TABLE `kategori_lemburs`
  ADD CONSTRAINT `kategori_lemburs_golongan_id_foreign` FOREIGN KEY (`golongan_id`) REFERENCES `golongans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kategori_lemburs_jabatan_id_foreign` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lembur_pegawais`
--
ALTER TABLE `lembur_pegawais`
  ADD CONSTRAINT `lembur_pegawais_kode_lembur_id_foreign` FOREIGN KEY (`Kode_lembur_id`) REFERENCES `kategori_lemburs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lembur_pegawais_pegawai_id_foreign` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pegawais`
--
ALTER TABLE `pegawais`
  ADD CONSTRAINT `pegawais_golongan_id_foreign` FOREIGN KEY (`golongan_id`) REFERENCES `golongans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pegawais_jabatan_id_foreign` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pegawais_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penggajians`
--
ALTER TABLE `penggajians`
  ADD CONSTRAINT `penggajians_tunjangan_pegawai_id_foreign` FOREIGN KEY (`tunjangan_pegawai_id`) REFERENCES `tunjangan_pegawais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tunjangans`
--
ALTER TABLE `tunjangans`
  ADD CONSTRAINT `tunjangans_golongan_id_foreign` FOREIGN KEY (`golongan_id`) REFERENCES `golongans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tunjangans_jabatan_id_foreign` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tunjangan_pegawais`
--
ALTER TABLE `tunjangan_pegawais`
  ADD CONSTRAINT `tunjangan_pegawais_kode_tunjangan_id_foreign` FOREIGN KEY (`Kode_tunjangan_id`) REFERENCES `tunjangans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tunjangan_pegawais_pegawai_id_foreign` FOREIGN KEY (`pegawai_id`) REFERENCES `pegawais` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2019 at 09:23 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisprak_api`
--

-- --------------------------------------------------------

--
-- Table structure for table `asisten`
--

CREATE TABLE `asisten` (
  `id_asisten` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `asisten`
--

INSERT INTO `asisten` (`id_asisten`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 53, NULL, NULL),
(2, 1, '2019-07-11 09:15:13', '2019-07-11 09:15:13'),
(3, 2, '2019-07-12 05:52:19', '2019-07-12 05:52:19'),
(4, 53, '2019-07-14 01:03:02', '2019-07-14 01:03:02');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nidn` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nidn`, `user_id`, `created_at`, `updated_at`) VALUES
('0406019904', 53, NULL, NULL),
('0406019905', 12, NULL, NULL),
('07801609', 24, '2019-07-11 08:07:29', '2019-07-11 08:07:29'),
('07801610', 25, '2019-07-12 05:14:21', '2019-07-12 05:14:21'),
('07801612', 53, '2019-07-14 01:01:46', '2019-07-14 01:01:46');

-- --------------------------------------------------------

--
-- Table structure for table `kepala_lab`
--

CREATE TABLE `kepala_lab` (
  `id_kepala_lab` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kepala_lab`
--

INSERT INTO `kepala_lab` (`id_kepala_lab`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 17, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `laboram`
--

CREATE TABLE `laboram` (
  `id_laboram` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laboram`
--

INSERT INTO `laboram` (`id_laboram`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 22, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NPM` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `user_id` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `sks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`NPM`, `user_id`, `semester`, `sks`, `frs`, `status`, `created_at`, `updated_at`) VALUES
('068016016', 53, 6, 'test', 'test', '1', NULL, NULL),
('068016090', 12, 6, 'test', 'test', '0', '2019-07-11 07:49:28', '2019-07-11 07:49:28'),
('068016091', 13, 6, 'test', 'test', '0', '2019-07-11 07:52:41', '2019-07-11 07:52:41'),
('068016092', 14, 6, 'test.pdf', 'test.pdf', '0', '2019-07-12 05:02:05', '2019-07-12 05:02:05'),
('09876087', 29, 6, 'file.pdf', 'file.pdf', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mata_praktikum`
--

CREATE TABLE `mata_praktikum` (
  `id` int(10) UNSIGNED NOT NULL,
  `mata_praktikum` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nidn` int(11) NOT NULL,
  `id_asisten` int(11) NOT NULL,
  `npm` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwal` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mata_praktikum`
--

INSERT INTO `mata_praktikum` (`id`, `mata_praktikum`, `nidn`, `id_asisten`, `npm`, `jadwal`, `created_at`, `updated_at`) VALUES
(1, 'PEMROGRAMAN ANDROID', 406018803, 21, '068016016', 'SENIN 08:00', NULL, '2019-07-11 08:50:21'),
(2, '	SISTEM INFORMASI BISNIS', 406018803, 21, '078016078,078016087', '', '2019-07-03 23:18:46', '2019-07-03 23:18:46'),
(3, 'MANAJEMEN PROYEK', 406018803, 21, '061010018,061010097', 'Selasa 08:00 WIB', '2019-07-04 02:32:42', '2019-07-04 02:32:42'),
(6, '	SISTEM INFORMASI MANAJEMEN', 406018803, 21, '[068016016,068016017,068016018]', 'RABU 08:00 WIB', '2019-07-11 08:24:38', '2019-07-11 08:24:38'),
(7, 'PEMROGRAMAN BERORIENTASI OBYEK', 406018803, 21, '[068016016,068016017,068016018,068016019]', 'RABU 08:00 WIB', '2019-07-11 08:49:50', '2019-07-11 08:57:22'),
(8, 'Pemrograman Web 1', 406018803, 2, '[068016016,068016017,068016018]', 'RABU 08:00 WIB', '2019-07-28 18:32:58', '2019-07-28 18:32:58'),
(9, 'Pemrograman Web 2', 406018803, 2, '[068016016,068016017,068016018]', 'RABU 08:00 WIB', '2019-07-28 18:33:39', '2019-07-28 18:33:39');

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
(1, '2019_05_16_061336_create_nilais_table', 1),
(2, '2019_05_16_062857_create_jadwals_table', 1),
(3, '2019_05_16_064007_create_mata_praktikums_table', 1),
(4, '2019_05_16_064904_create_moduls_table', 1),
(5, '2019_05_18_072714_create_t_u_s_table', 1),
(6, '2019_05_18_073820_create_mahasiswas_table', 1),
(7, '2019_05_18_074327_create_asistens_table', 1),
(8, '2019_05_18_074636_create_dosens_table', 1),
(9, '2019_05_18_074850_create_laborams_table', 1),
(10, '2019_05_18_075456_create_kepala_labs_table', 1),
(11, '2019_05_18_075943_create_sks_table', 2),
(12, '2019_05_27_043107_update_user_table_api_toke_field', 3),
(13, '2019_05_27_071856_update_user_add_flag', 4),
(14, '2019_06_17_065714_update_mahasiswa_add_sks', 5),
(15, '2019_06_17_073108_update_mahasiswa_add_status', 6),
(16, '2019_06_17_075142_update_mata_praktikum', 7);

-- --------------------------------------------------------

--
-- Table structure for table `modul`
--

CREATE TABLE `modul` (
  `id_modul` int(10) UNSIGNED NOT NULL,
  `id_mata_praktikum` int(11) NOT NULL,
  `file` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modul`
--

INSERT INTO `modul` (`id_modul`, `id_mata_praktikum`, `file`, `created_at`, `updated_at`) VALUES
(1, 6, 'modul.pdf', NULL, NULL),
(2, 7, 'modul2.pdf', '2019-07-11 20:34:08', '2019-07-11 20:34:08'),
(3, 8, 'modul3.pdf', '2019-07-12 06:07:54', '2019-07-12 06:07:54');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(10) UNSIGNED NOT NULL,
  `npm` int(11) NOT NULL,
  `id_mata_praktikum` int(11) NOT NULL,
  `keaktifan` int(11) NOT NULL,
  `tugas` int(11) NOT NULL,
  `ujian` int(11) NOT NULL,
  `kehadiran` int(11) NOT NULL,
  `angka_akhir` int(3) DEFAULT NULL,
  `huruf_mutu` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `npm`, `id_mata_praktikum`, `keaktifan`, `tugas`, `ujian`, `kehadiran`, `angka_akhir`, `huruf_mutu`, `created_at`, `updated_at`) VALUES
(1, 68016016, 6, 100, 100, 100, 100, 100, 'A', NULL, NULL),
(2, 68016016, 7, 100, 100, 100, 100, 100, 'A', NULL, NULL),
(3, 68016016, 8, 100, 100, 100, 100, 100, 'A', '2019-07-11 20:47:07', '2019-07-11 20:47:07'),
(4, 68016016, 9, 100, 100, 100, 100, 100, 'A', '2019-07-12 06:27:38', '2019-07-12 06:27:38');

-- --------------------------------------------------------

--
-- Table structure for table `tu`
--

CREATE TABLE `tu` (
  `id_tu` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tu`
--

INSERT INTO `tu` (`id_tu`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 29, NULL, NULL),
(2, 17, '2019-07-11 09:22:56', '2019-07-11 09:22:56'),
(3, 17, '2019-07-11 20:25:34', '2019-07-11 20:25:34'),
(4, 53, '2019-07-14 01:06:07', '2019-07-14 01:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_flag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `api_token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `email`, `password`, `status_flag`, `api_token`, `level`, `created_at`, `updated_at`) VALUES
(14, 'fahmi prasanda', 'fahmiprasanda', 'fahmiprasanda@mail.com', '$2y$10$sHEjAzXUQ0vrZq90LvLTzOxxbqQAh/6PMollRfBUFxqYCqeAOmLQG', 'mahasiswa', '$2y$12$aZvcpTzJYZNRSif2rJu1Uei25zm0sPhMrqh3y/czbwp4N/YIwdf8u', NULL, NULL, NULL),
(53, 'TEST UPDATE', 'UPDATEUSERNAME', 'update@mail.com', '$2y$10$bI8xQGKAOTCg010gWZeZg.25JxiRH90jnYbU3MtAJI9qOTXMLSvBy', NULL, '$2y$10$28M4oHuzLt/zY8fT0UCsCuBbUD14.uZhiWH/BjJ2TpDms6.khaqTy', NULL, '2019-07-11 07:19:10', '2019-07-14 01:00:29'),
(54, 'Test Register', 'Register', 'Register@unpak.ac.id', '$2y$10$lhjNnU9SW0BMnD6oi4hmo.Y.Q6J3HJT64JlK9RFs5G6cC.bunQucS', NULL, '$2y$10$nX3nPn0pclsT09nCCdiRB.5gh9reYF62nHEh4XyONjqLEZ351ISNC', NULL, '2019-07-13 07:17:34', '2019-07-13 07:17:34'),
(55, 'Test New Register', 'Register123', 'NewRegister@unpak.ac.id', '$2y$10$sHEjAzXUQ0vrZq90LvLTzOxxbqQAh/6PMollRfBUFxqYCqeAOmLQG', NULL, '$2y$10$754vI1hGmrJNX0PcRQllIOE.uyvbjgUVo0EdkFRLM79Mg9guOgUMm', NULL, '2019-07-14 00:57:43', '2019-07-14 00:57:43'),
(56, 'sandra dini utami', 'sandra', 'sandra@unpak.ac.id', '$2y$10$54/Iq5B2B36qLYYhDhvFeuNYPTDHIpsENenmxtT5TLb6KaU5V53Fu', NULL, '$2y$10$xGjXvVlvnhaCls1v3T9OzOzDhbstqYOO8Ae/hx7i4sn5J7OPziSBG', NULL, '2019-07-25 18:09:37', '2019-07-25 18:09:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asisten`
--
ALTER TABLE `asisten`
  ADD PRIMARY KEY (`id_asisten`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nidn`);

--
-- Indexes for table `kepala_lab`
--
ALTER TABLE `kepala_lab`
  ADD PRIMARY KEY (`id_kepala_lab`);

--
-- Indexes for table `laboram`
--
ALTER TABLE `laboram`
  ADD PRIMARY KEY (`id_laboram`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NPM`);

--
-- Indexes for table `mata_praktikum`
--
ALTER TABLE `mata_praktikum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modul`
--
ALTER TABLE `modul`
  ADD PRIMARY KEY (`id_modul`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tu`
--
ALTER TABLE `tu`
  ADD PRIMARY KEY (`id_tu`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id_unique` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asisten`
--
ALTER TABLE `asisten`
  MODIFY `id_asisten` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kepala_lab`
--
ALTER TABLE `kepala_lab`
  MODIFY `id_kepala_lab` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `laboram`
--
ALTER TABLE `laboram`
  MODIFY `id_laboram` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mata_praktikum`
--
ALTER TABLE `mata_praktikum`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `modul`
--
ALTER TABLE `modul`
  MODIFY `id_modul` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tu`
--
ALTER TABLE `tu`
  MODIFY `id_tu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

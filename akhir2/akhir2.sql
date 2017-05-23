-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2017 at 02:37 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akhir2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pengguna_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `pengguna_id`, `created_at`, `updated_at`) VALUES
(1, 'admin', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doperator`
--

CREATE TABLE `doperator` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nip` int(200) NOT NULL,
  `telepon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pengguna_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doperator`
--

INSERT INTO `doperator` (`id`, `nama`, `nip`, `telepon`, `pengguna_id`, `created_at`, `updated_at`) VALUES
(1, 'Moch. Hanafi', 1515015054, '085252728011', 1, NULL, NULL),
(6, 'Celine Aloyshima', 53, '080808', 31, '2017-05-19 15:47:42', '2017-05-19 15:47:42'),
(7, ' ', 1, '', 33, '2017-05-19 17:50:23', '2017-05-19 17:50:23');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `pengguna_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `nama_file`, `id_kategori`, `pengguna_id`, `created_at`, `updated_at`) VALUES
(101, 'Penguins.jpg', 2, 1, '2017-05-19 15:05:19', '2017-05-19 15:05:19'),
(102, 'MODUL KB.pdf', 1, 1, '2017-05-19 16:25:22', '2017-05-19 16:25:22'),
(103, 'Tulips.jpg', 1, 1, '2017-05-19 17:54:56', '2017-05-19 17:54:56'),
(104, 'Koala.jpg', 2, 2, '2017-05-19 18:03:07', '2017-05-19 18:03:07');

-- --------------------------------------------------------

--
-- Table structure for table `file_member`
--

CREATE TABLE `file_member` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_member` int(10) UNSIGNED NOT NULL,
  `id_file` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `jenis`, `created_at`, `updated_at`) VALUES
(1, 'PDF,DOC,DOCX', 'Pengetikan', '2016-05-10 16:00:00', '2016-05-27 16:00:00'),
(2, 'JPG,JPEG,PNG', 'Editing Photo', '2016-05-23 16:00:00', '2016-05-26 16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nim` int(200) NOT NULL,
  `angkatan` int(100) NOT NULL,
  `pengguna_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `nama`, `nim`, `angkatan`, `pengguna_id`, `created_at`, `updated_at`) VALUES
(1, 'Hanafi', 54, 2015, 2, NULL, NULL),
(18, 'celine', 53, 2015, 29, '2017-05-19 14:50:11', '2017-05-19 14:50:11'),
(19, 'herman', 56, 2015, 30, '2017-05-19 15:46:32', '2017-05-19 15:46:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_05_11_120610_buat_table_pengguna', 1),
('2016_05_11_121919_buat_table_admin', 2),
('2016_05_11_121935_buat_table_dosen', 3),
('2016_05_11_122054_buat_table_mahasiswa', 4),
('2016_05_11_122134_buat_table_file', 5),
('2016_05_11_122623_buat_table_kategori', 6),
('2016_05_11_133701_buat_table_upload', 7),
('2016_05_12_104645_buat_table_file_mahasiswa', 8),
('2016_05_18_122710_buat_table_angkatan', 9),
('2016_05_25_140341_tb_apa_aja', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `created_at`, `updated_at`, `username`, `password`, `level`, `remember_token`) VALUES
(1, NULL, '2017-05-19 17:58:35', 'admin', 'admin', '1', '7TJLJerfFYni768tIzdkKSEpWlVqZdjA5IbMyGNtuxDfxLTw8mAySCmcyvF6'),
(2, NULL, '2017-05-19 18:21:38', 'mh', 'mh', '3', 'e3CtRkSHqlShv1t8oDjOt6t1c8uTuk6z0I4t8t95eEdRLMQP6XM2iXJQt4Eq'),
(3, NULL, '2017-05-19 18:00:06', 'han', 'han', '2', 'Dn9C6WcR8r1Ph37w75n6zMG5gIpditDu38oMR5oDUYaYRX1eimAR0pPVMPOh'),
(29, '2017-05-19 14:50:11', '2017-05-19 14:50:11', 'celine', '053', '3', NULL),
(30, '2017-05-19 15:46:31', '2017-05-19 15:46:31', 'herman', '56', '3', NULL),
(31, '2017-05-19 15:47:41', '2017-05-19 15:47:41', 'celine', '053', '2', NULL),
(33, '2017-05-19 17:50:23', '2017-05-19 17:50:23', ' ', ' ', '2', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengguna_id` (`pengguna_id`);

--
-- Indexes for table `doperator`
--
ALTER TABLE `doperator`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengguna_id` (`pengguna_id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pengguna` (`pengguna_id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `file_member`
--
ALTER TABLE `file_member`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mahasiswa` (`id_member`),
  ADD KEY `id_file` (`id_file`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_angkatan` (`angkatan`),
  ADD KEY `pengguna_id` (`pengguna_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `doperator`
--
ALTER TABLE `doperator`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `file_member`
--
ALTER TABLE `file_member`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `doperator`
--
ALTER TABLE `doperator`
  ADD CONSTRAINT `doperator_ibfk_1` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`);

--
-- Constraints for table `file`
--
ALTER TABLE `file`
  ADD CONSTRAINT `file_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `file_member`
--
ALTER TABLE `file_member`
  ADD CONSTRAINT `file_member_ibfk_1` FOREIGN KEY (`id_member`) REFERENCES `member` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `file_member_ibfk_2` FOREIGN KEY (`id_file`) REFERENCES `file` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

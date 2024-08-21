-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 06, 2024 at 03:31 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gis_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `tb_kelahiran`
--

CREATE TABLE `tb_kelahiran` (
  `id_kelahiran` int(11) NOT NULL,
  `nik` char(100) NOT NULL,
  `no_kk` char(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `golongan_darah` varchar(25) NOT NULL,
  `agama` enum('islam','kriten','hindu','budha') NOT NULL,
  `status` varchar(100) NOT NULL,
  `pendidikan` enum('sd','smp','sma','d3','d4','s1','s2','s3') NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `rt_kd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kelahiran`
--

INSERT INTO `tb_kelahiran` (`id_kelahiran`, `nik`, `no_kk`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `golongan_darah`, `agama`, `status`, `pendidikan`, `alamat`, `rt_kd`) VALUES
(9, '93283189', '983103810', 'safa', 'perempuan', 'gor', '2024-05-26', 'o', 'islam', 'nika', 'sd', 'gor', '10'),
(10, '93283189', '983103810', 'safa', 'perempuan', 'gor', '2024-05-26', 'o', 'islam', 'nika', 'sd', 'gor', '11');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelurahan`
--

CREATE TABLE `tb_kelurahan` (
  `kd_kelurahan` varchar(255) NOT NULL,
  `no_kelurahan` varchar(255) NOT NULL,
  `nama_kelurahan` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `geojson` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_kelurahan`
--

INSERT INTO `tb_kelurahan` (`kd_kelurahan`, `no_kelurahan`, `nama_kelurahan`, `latitude`, `longitude`, `geojson`) VALUES
('10', '0.10', 'moodu', '0.5464874', '123.0640492', 'post-images/map.geojson'),
('11', '0.11', 'ipilo', '0.542805', '123.072452', 'post-images/ipilo.geojson');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kematian`
--

CREATE TABLE `tb_kematian` (
  `id_kematian` int(11) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `goldar` varchar(255) NOT NULL,
  `Agama` enum('islam','kriten','hindu','budha') NOT NULL,
  `status` int(11) NOT NULL,
  `pendidikan` enum('sd','smp','sma','d3','d4','s1','s2','s3') NOT NULL,
  `no_kk` bigint(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `rt_kd` int(11) NOT NULL,
  `tgl_kematian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kepindahan`
--

CREATE TABLE `tb_kepindahan` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `goldar` varchar(10) NOT NULL,
  `agama` enum('islam','kriten','hindu','budha') NOT NULL,
  `status` varchar(100) NOT NULL,
  `pendidikan` enum('sd','smp','sma','d3','d4','s1','s2','s3') NOT NULL,
  `no_kk` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `rt_kd` int(11) NOT NULL,
  `pindah ke` varchar(255) NOT NULL,
  `tgl_pindah` date NOT NULL,
  `alasan_pindah` varchar(255) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_rt`
--

CREATE TABLE `tb_rt` (
  `kd_rt` varchar(255) NOT NULL,
  `nama_rt` varchar(255) NOT NULL,
  `kelurahan_kd` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_rt`
--

INSERT INTO `tb_rt` (`kd_rt`, `nama_rt`, `kelurahan_kd`, `latitude`, `longitude`) VALUES
('10', 'rt 01', '10', '0.5464874', '123.0640492'),
('11', 'rto02', '10', '0.545466', '123.066788'),
('111', 'rt02ipilo', '11', '0.545638', '123.072109');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `level` enum('admin','rt','rw','camat') NOT NULL,
  `rt_kd` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `level`, `rt_kd`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin', 'admin', NULL, NULL, '$2y$10$XXtGIoXUf7/H2fAQXK5iaOkQZyImDtSbm1VEJOdRxuAFXcfywZg4q', NULL, '2024-03-12 21:44:19', '2024-03-12 21:44:19'),
(3, 'dandi mointi', 'petugasRt', 'rt', '10', NULL, '$2y$10$WHh7h3LetEvBYSAAbZQH1uNNye9novHT6RmYlQnaz1CVZaC.a0B.6', NULL, '2024-05-25 20:07:06', '2024-05-25 20:07:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tb_kelahiran`
--
ALTER TABLE `tb_kelahiran`
  ADD PRIMARY KEY (`id_kelahiran`),
  ADD KEY `rt_kd` (`rt_kd`);

--
-- Indexes for table `tb_kelurahan`
--
ALTER TABLE `tb_kelurahan`
  ADD PRIMARY KEY (`kd_kelurahan`);

--
-- Indexes for table `tb_kematian`
--
ALTER TABLE `tb_kematian`
  ADD PRIMARY KEY (`id_kematian`);

--
-- Indexes for table `tb_kepindahan`
--
ALTER TABLE `tb_kepindahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_rt`
--
ALTER TABLE `tb_rt`
  ADD PRIMARY KEY (`kd_rt`),
  ADD KEY `kelurahan_kd` (`kelurahan_kd`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`username`),
  ADD KEY `rute_kd` (`rt_kd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kelahiran`
--
ALTER TABLE `tb_kelahiran`
  MODIFY `id_kelahiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_kematian`
--
ALTER TABLE `tb_kematian`
  MODIFY `id_kematian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kepindahan`
--
ALTER TABLE `tb_kepindahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

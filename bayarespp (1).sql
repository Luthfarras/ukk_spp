-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2021 at 06:53 AM
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
-- Database: `bayarespp`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `nama_kelas` varchar(11) NOT NULL,
  `kompetensi_keahlian` varchar(50) DEFAULT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`, `kompetensi_keahlian`, `updated_at`, `created_at`) VALUES
(4, 'XR1', 'Rekayasa Perangkat Lunak', '2021-03-23', '2021-03-23'),
(5, 'XT5', 'Teknik Komputer & Jaringan', '2021-03-23', '2021-03-23'),
(6, 'XIIR6', 'Rekayasa Perangkat Lunak', '2021-03-23', '2021-03-23'),
(7, 'XIIT2', 'Teknik Komputer & Jaringan', '2021-03-23', '2021-03-23'),
(8, 'XIT4', 'Teknik Komputer & Jaringan', '2021-03-23', '2021-03-23'),
(9, 'XIR3', 'Rekayasa Perangkat Lunak', '2021-03-23', '2021-03-23');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `jumlah_bayar` int(50) NOT NULL,
  `spp_bulan` varchar(50) NOT NULL,
  `tunggakan` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `id_petugas`, `id_siswa`, `tgl_bayar`, `jumlah_bayar`, `spp_bulan`, `tunggakan`, `created_at`, `updated_at`) VALUES
(16, 8, 11, '2021-03-09', 1000000, 'februari', 0, '2021-03-23 16:15:30', '2021-03-23 16:15:30'),
(17, 9, 10, '2021-02-08', 3000000, 'desember', 0, '2021-03-23 16:16:54', '2021-03-23 16:16:54'),
(18, 10, 12, '2021-03-04', 2000000, 'agustus', 0, '2021-03-23 16:17:54', '2021-03-23 16:17:54'),
(19, 11, 13, '2020-10-06', 1500000, 'april', 0, '2021-03-23 16:19:46', '2021-03-23 16:19:46'),
(20, 8, 10, '2021-03-27', 1000000, 'juni', 0, '2021-03-23 17:58:50', '2021-03-23 17:58:50'),
(21, 8, 14, '2021-03-24', 1000000, 'juni', 0, '2021-03-23 20:29:22', '2021-03-23 20:29:22'),
(22, 9, 11, '2021-03-02', 2000000, 'desember', 0, '2021-03-23 20:31:48', '2021-03-23 20:31:48'),
(23, 8, 15, '2022-02-03', 2000000, 'desember', 4000000, '2021-03-25 22:14:00', '2021-03-25 22:14:00'),
(24, 8, 13, '2021-03-09', 3000000, 'mei', -3000000, '2021-03-26 00:02:31', '2021-03-26 00:02:31'),
(25, 8, 16, '2021-03-18', 3000000, 'maret', 2000000, '2021-03-26 00:05:06', '2021-03-26 00:05:06');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `level` enum('admin','petugas','siswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nisn` char(10) NOT NULL,
  `nis` char(8) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `foto` varchar(600) NOT NULL,
  `id_spp` int(11) NOT NULL,
  `tunggakan` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nisn`, `nis`, `nama`, `id_kelas`, `alamat`, `no_telp`, `foto`, `id_spp`, `tunggakan`, `created_at`, `updated_at`) VALUES
(10, '001', '01', 'hermione', 5, 'hogsmeade', '0934', 'wp4369858.jpg', 4, 0, '2021-03-23 23:12:04', '2021-03-23 16:12:04'),
(11, '002', '02', 'harry', 7, 'leaky cauldron', '0999', '1616541082_3e93d160a46165614b2c7b89db26c39b.jpg', 5, 0, '2021-03-23 16:11:22', '2021-03-23 16:11:22'),
(12, '003', '03', 'lupin', 8, 'grimmauld place', '0888', '1616541264_1f668603a46fbdb0625f7ca84e3f4d6d.jpg', 6, 0, '2021-03-23 16:14:24', '2021-03-23 16:14:24'),
(13, '004', '04', 'ronald', 9, 'burrow', '0222', '1616541542_8b34334b12708e3143a16830dd6529b3.jpg', 5, 0, '2021-03-26 07:02:31', '2021-03-26 00:02:31'),
(14, '006', '06', 'farras', 7, 'malang', '098765', 'tumblr_pnqngzxM6D1t53iad_540.jpg', 5, 0, '2021-03-24 03:27:46', '2021-03-23 20:27:46'),
(15, '007', '07', 'james bond', 7, 'douglas st.', '09876', '1616735569_3e93d160a46165614b2c7b89db26c39b.jpg', 6, 0, '2021-03-26 05:14:00', '2021-03-25 22:14:00'),
(16, '008', '08', 'eff', 7, 'burrow', '0999', '1616742281_zepeto-4.jpg', 5, 0, '2021-03-26 07:05:06', '2021-03-26 00:05:06');

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `id` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `nominal` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`id`, `tahun`, `nominal`, `created_at`, `updated_at`) VALUES
(4, 2020, 6000000, '2021-03-23', '2021-03-23'),
(5, 2021, 5000000, '2021-03-23', '2021-03-24'),
(6, 2022, 6000000, '2021-03-23', '2021-03-23'),
(7, 2023, 1000000, '2021-03-24', '2021-03-24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_petugas` varchar(255) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama_petugas`, `level`) VALUES
(8, 'luthfarras', 'd107222a47df3d5d121171402ed75fc6', 'Luthfarras', 'admin'),
(9, 'luna', 'f109462a25588697b997cbf6bf1b3670', 'Luna', 'petugas'),
(10, 'draco', '1fdea432bbb39471809d65e2380da8f7', 'Draco', 'admin'),
(11, 'pansy', '575f6313a40b5e5841dd6db5c595f09c', 'Pansy', 'admin'),
(12, 'luthfa', '0661d924a41eaa6c8d31771a2be0fb79', 'luthfa', 'petugas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_spp` (`id_spp`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nominal` (`nominal`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `spp`
--
ALTER TABLE `spp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_3` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pembayaran_ibfk_4` FOREIGN KEY (`id_petugas`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`),
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`id_spp`) REFERENCES `spp` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

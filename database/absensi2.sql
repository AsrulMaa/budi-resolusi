-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2019 at 05:33 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_absensi`
--

CREATE TABLE `tb_absensi` (
  `id` int(11) NOT NULL,
  `id_hitung_hadir` int(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `mp` varchar(30) NOT NULL,
  `tingkat_mengajar` varchar(20) NOT NULL,
  `kelas` varchar(16) NOT NULL,
  `tms` int(16) NOT NULL,
  `tmh` int(16) NOT NULL,
  `infal` int(16) NOT NULL,
  `total_tms` int(16) NOT NULL,
  `total_tmh` int(16) NOT NULL,
  `total_infal` int(16) NOT NULL,
  `kehadiran` int(16) NOT NULL,
  `kehadiran_infal` int(16) NOT NULL,
  `tidak_masuk` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_absensi`
--

INSERT INTO `tb_absensi` (`id`, `id_hitung_hadir`, `nama`, `mp`, `tingkat_mengajar`, `kelas`, `tms`, `tmh`, `infal`, `total_tms`, `total_tmh`, `total_infal`, `kehadiran`, `kehadiran_infal`, `tidak_masuk`) VALUES
(7, 1, 'budi sihabudin', 'TIK', 'sma', '3', 2, 4, 8, 0, 0, 0, 0, 0, 0),
(8, 2, 'Sari rahmawati', 'Agama', 'sma', '3', 12, 10, 3, 0, 0, 0, 0, 0, 0),
(9, 1, 'Sari rahmawati', 'Agama', 'sma', '2', 6, 6, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_hitung_hadir`
--

CREATE TABLE `tb_hitung_hadir` (
  `id` int(11) NOT NULL,
  `nama_minggu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hitung_hadir`
--

INSERT INTO `tb_hitung_hadir` (`id`, `nama_minggu`) VALUES
(1, 'm1'),
(2, 'm2'),
(3, 'm3'),
(4, 'm4'),
(5, 'm5');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status_aktif` int(1) NOT NULL,
  `daftar_pada` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_role_pengguna`
--

CREATE TABLE `tb_role_pengguna` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_hitung_hadir`
--
ALTER TABLE `tb_hitung_hadir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_role_pengguna`
--
ALTER TABLE `tb_role_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_absensi`
--
ALTER TABLE `tb_absensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_hitung_hadir`
--
ALTER TABLE `tb_hitung_hadir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_role_pengguna`
--
ALTER TABLE `tb_role_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

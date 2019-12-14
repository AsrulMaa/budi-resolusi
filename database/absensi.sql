-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2019 at 10:08 PM
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
  `id_bulan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `mp` varchar(25) NOT NULL,
  `tingkat_mengajar` varchar(25) NOT NULL,
  `kelas` varchar(16) NOT NULL,
  `tms` int(11) NOT NULL,
  `tmh` int(11) NOT NULL,
  `infal` int(11) NOT NULL,
  `tms2` int(11) NOT NULL,
  `tmh2` int(11) NOT NULL,
  `infal2` int(11) NOT NULL,
  `tms3` int(11) NOT NULL,
  `tmh3` int(11) NOT NULL,
  `infal3` int(11) NOT NULL,
  `tms4` int(11) NOT NULL,
  `tmh4` int(11) NOT NULL,
  `infal4` int(11) NOT NULL,
  `tms5` int(11) NOT NULL,
  `tmh5` int(11) NOT NULL,
  `infal5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_absensi`
--

INSERT INTO `tb_absensi` (`id`, `id_bulan`, `nama`, `mp`, `tingkat_mengajar`, `kelas`, `tms`, `tmh`, `infal`, `tms2`, `tmh2`, `infal2`, `tms3`, `tmh3`, `infal3`, `tms4`, `tmh4`, `infal4`, `tms5`, `tmh5`, `infal5`) VALUES
(1, 0, 'Budi Sihabudin ', 'Seni Budaya', 'Sma', '3', 0, 0, 0, 0, 0, 0, 8, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 0, 'Sari', 'Agama', 'SMA', '3', 9, 9, 0, 9, 9, 0, 9, 9, 0, 9, 9, 0, 9, 9, 0),
(3, 0, 'Heni', 'Matematika', 'sma', '3', 10, 10, 0, 10, 10, 0, 10, 10, 0, 10, 10, 0, 10, 10, 0),
(4, 0, 'Ira', 'Bahasa', 'sma', '2', 0, 0, 0, 6, 0, 0, 6, 6, 0, 6, 0, 0, 6, 7, 0),
(5, 0, 'Sarah', 'Penjaskes', 'SMA', '3', 5, 0, 0, 5, 0, 0, 5, 0, 0, 5, 0, 0, 5, 6, 3),
(6, 0, 'Koeri', 'Bahasa Sunda', 'sma', '3', 4, 0, 0, 4, 4, 0, 4, 0, 0, 4, 0, 0, 4, 0, 0),
(7, 0, 'Mawar', 'Bahasa Arab', 'Ponpes', '3', 7, 0, 0, 7, 0, 0, 7, 0, 0, 7, 0, 0, 7, 0, 0),
(8, 0, 'Prayoga', 'Bahasa Inggris', 'sma', '2', 2, 0, 0, 2, 0, 0, 2, 0, 0, 2, 0, 0, 2, 0, 0),
(9, 0, 'Anisa', 'Seni Budaya', 'SMA', '3', 9, 0, 0, 9, 0, 0, 9, 0, 0, 9, 0, 0, 9, 0, 0),
(12, 0, 'Hani', 'Sejarah', 'sma', '2', 0, 0, 0, 5, 0, 0, 5, 0, 0, 5, 0, 0, 5, 0, 0),
(13, 0, 'Rukmanah', 'Sains', 'sma', '2', 10, 0, 0, 0, 0, 0, 5, 0, 0, 5, 0, 0, 5, 0, 0),
(14, 0, 'Yanti', 'Hadroh', 'Ponpes', '3', 0, 0, 0, 2, 2, 0, 2, 0, 0, 2, 2, 0, 2, 0, 0),
(15, 0, 'budi sihabudin', 'TIK', 'sma', '3', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 0, 'sarimun', 'Agama', 'sma', '3', 5, 0, 0, 5, 0, 0, 5, 0, 0, 5, 0, 0, 5, 0, 0),
(17, 0, 'sukiem', 'TIK', 'sma', '3', 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6, 6),
(18, 0, 'Sukaesih', 'njj', 'jhjh', 'hj', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_bulan`
--

CREATE TABLE `tb_bulan` (
  `id` int(11) NOT NULL,
  `nama_bulan` enum('januari','februari','maret','april','mei','juni','juli','agustus','september','oktober','november','desember') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id` int(11) NOT NULL,
  `id_guru` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `mp` varchar(25) NOT NULL,
  `tingkat_mengajar` varchar(25) NOT NULL,
  `kelas` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`id`, `id_guru`, `nama`, `mp`, `tingkat_mengajar`, `kelas`) VALUES
(8, 'p001', 'budi sihabudin', 'TIK', 'sma', '3'),
(9, 'p002', 'Sari rahmawati', 'Agama', 'sma', '2'),
(10, 'p003', 'Nina N', 'Seni Budaya', 'sma', '1'),
(11, 'p004', 'Rani', 'Ekonomi', 'sma', '3'),
(12, 'p005', 'Yanti', 'Penjaskes', 'sma', '3'),
(13, 'p006', 'Udin', 'Bahsa Indonesia', 'sma', '3'),
(14, 'p007', 'Rohmah', 'Kerajinan', 'sma', '3'),
(15, 'p008', 'Sugem', 'Geografi', 'sma', '2'),
(16, 'p009', 'Susan', 'Fisika', 'sma', '2'),
(17, 'p010', 'Sarimah', 'Bahasa Sunda', 'Sma', '3'),
(18, 'p011', 'Hindun', 'Bahsa', 'Sma', '3');

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
-- Indexes for table `tb_bulan`
--
ALTER TABLE `tb_bulan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_bulan`
--
ALTER TABLE `tb_bulan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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

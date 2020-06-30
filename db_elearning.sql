-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2020 at 07:56 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_mapel`
--

CREATE TABLE `detail_mapel` (
  `id` int(6) UNSIGNED NOT NULL,
  `judulMateri` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `uploadMateri` varchar(30) NOT NULL,
  `pertanyaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`username`, `password`, `role`) VALUES
('sutomo', 'sutomo123', 'guru');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `id` int(6) UNSIGNED NOT NULL,
  `jawaban` varchar(50) NOT NULL,
  `namaMapel` date NOT NULL,
  `namaPenjawab` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id` int(6) UNSIGNED NOT NULL,
  `bab` varchar(50) NOT NULL,
  `materi` varchar(30) NOT NULL,
  `kelas` varchar(30) DEFAULT NULL,
  `upload_ebook` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id`, `bab`, `materi`, `kelas`, `upload_ebook`) VALUES
(1, 'Tema 6', 'Menuju Masyarakat Sehat', 'VI', 'Kelas_06_SD_Tematik_6_Menuju_Masyarakat_Sehat_Siswa.pdf'),
(2, 'Tema 7', 'Kepemimpinan', 'VI', 'Kelas_06_SD_Tematik_7_Kepemimpinan_Siswa.pdf'),
(3, 'Tema 8', 'Bumiku', 'VI', 'Kelas_06_SD_Tematik_8_Bumiku_Siswa.pdf'),
(4, 'Tema 9', 'Menjelajahi Luar Angkasa', 'VI', 'Kelas_06_SD_Tematik_9_Menjelajah_Angkasa_Luar_Siswa.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `mapel_animasi`
--

CREATE TABLE `mapel_animasi` (
  `id` int(6) UNSIGNED NOT NULL,
  `bab` varchar(50) NOT NULL,
  `materi` varchar(100) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `upload_video` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel_animasi`
--

INSERT INTO `mapel_animasi` (`id`, `bab`, `materi`, `kelas`, `upload_video`) VALUES
(1, 'Tema 6', 'Menuju Masyarakat Sehat', 'VI', '5jQH0k9D2hY'),
(2, 'Tema 7', 'Kepemimpinan', 'VI', '5jQH0k9D2hY'),
(3, 'Tema 8', 'Bumiku', 'VI', '5jQH0k9D2hY'),
(4, 'Tema 9', 'Menjelajahi Luar Angkasa', 'VI', '5jQH0k9D2hY'),
(5, 'Bahasa Inggris', 'Meet And Greet', 'VI', 'vBpn5rhgEO8'),
(6, 'Bahasa Inggris', 'Greetings', 'VI', '4LLRkQoW5s4'),
(7, 'Bahasa Inggris', 'Simple Present Tense', 'VI', 'a_CAnaLWlFA'),
(8, 'Bahasa Inggris', 'Introduce Your Self', 'VI', '9YIA4NHc5qw'),
(11, 'Bahasa Indonesia', 'Teks Nonfiksi', 'VI', 'l3keYWajvyM'),
(13, 'Bahasa Indonesia', 'Teks Laporan Hasil Observasi', 'VI', 'KkQxnLs0K6M');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `kelas` varchar(40) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`username`, `password`, `kelas`, `role`) VALUES
('alma', 'alma123', 'VI', 'siswa'),
('andre', 'andre123', 'V', 'siswa'),
('farida', 'farida123', 'IV', 'siswa'),
('fera', 'FERA123', 'VI', 'siswa');

-- --------------------------------------------------------

--
-- Table structure for table `tryout`
--

CREATE TABLE `tryout` (
  `id` int(6) UNSIGNED NOT NULL,
  `bab` varchar(100) NOT NULL,
  `materi` varchar(100) NOT NULL,
  `tujuanKompetensi` varchar(200) NOT NULL,
  `kodePertanyaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_mapel`
--
ALTER TABLE `detail_mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapel_animasi`
--
ALTER TABLE `mapel_animasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tryout`
--
ALTER TABLE `tryout`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_mapel`
--
ALTER TABLE `detail_mapel`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `mapel_animasi`
--
ALTER TABLE `mapel_animasi`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tryout`
--
ALTER TABLE `tryout`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

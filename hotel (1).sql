-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2023 at 03:34 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kmr` int NOT NULL,
  `no_kmr` int NOT NULL,
  `tipe` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `foto` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `harga_kmr` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kmr`, `no_kmr`, `tipe`, `status`, `foto`, `harga_kmr`) VALUES
(5, 2019, 'Superior 1 bed besar (room only)', 'Tersedia', '102284.png', 280000),
(6, 2016, 'Superior 1 bed besar (with breakfast)', 'Tersedia', '487042.png', 330000),
(7, 3002, 'Deluxe 1 bed besar (room only)', 'Tersedia', '35704.jpg', 320000),
(8, 3005, 'Deluxe 1 bed besar (with breakfast)', 'Tersedia', '944817.jpg', 370000),
(9, 4010, 'Deluxe pool 1 bed besar (room only)', 'Tersedia', '495662.jpg', 380000),
(10, 4025, 'Deluxe pool 1 bed besar (with breakfast)', 'Tersedia', '582179.jpg', 450000),
(11, 5007, 'Junior suite 1 bed besar (with breakfast)', 'Tersedia', '887029.jpg', 600000),
(12, 5009, 'President 1 bed besar (with breakfast)', 'Tersedia', '412189.jpg', 800000);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesan` int NOT NULL,
  `id_user` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_kmr` int NOT NULL,
  `tanggal_pesanan` date NOT NULL,
  `tgl_ci` date NOT NULL,
  `tgl_co` date NOT NULL,
  `jml_kmr` int NOT NULL,
  `ttl_psn` decimal(10,0) NOT NULL,
  `stts_rsr` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesan`, `id_user`, `id_kmr`, `tanggal_pesanan`, `tgl_ci`, `tgl_co`, `jml_kmr`, `ttl_psn`, `stts_rsr`) VALUES
(21, 'adhee', 9, '2023-11-30', '2023-12-01', '2023-12-02', 1, '380000', 'belum di proses');

-- --------------------------------------------------------

--
-- Table structure for table `staf`
--

CREATE TABLE `staf` (
  `id_staf` int NOT NULL,
  `nama_staf` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_ktp` int NOT NULL,
  `no_hp` int NOT NULL,
  `jns_kelamin` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `staf`
--

INSERT INTO `staf` (`id_staf`, `nama_staf`, `alamat`, `no_ktp`, `no_hp`, `jns_kelamin`, `jabatan`) VALUES
(2, 'widya dian', 'cilacap', 2330293, 882211, 'perempuan', 'HR admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'adhe nur w', 'adhee', '1234', 'tamu'),
(2, 'ayu', 'admin', 'admin', 'pegawai'),
(4, 'niko', 'niko', '23', 'tamu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kmr`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `staf`
--
ALTER TABLE `staf`
  ADD PRIMARY KEY (`id_staf`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kmr` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `staf`
--
ALTER TABLE `staf`
  MODIFY `id_staf` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

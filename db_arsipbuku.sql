-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2021 at 06:01 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_arsipbuku`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(2) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `username`, `password`, `fullname`, `gambar`) VALUES
(1, 'admin', 'admin', 'Rezky Nur Fauzi', 'gambar_admin/patrick.jpg'),
(2, 'admon', 'admon', 'Fauzi', 'gambar_admin/static-assets-upload13306213440472454');

-- --------------------------------------------------------

--
-- Table structure for table `data_anggota`
--

CREATE TABLE `data_anggota` (
  `id` int(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `umur` varchar(2) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_anggota`
--

INSERT INTO `data_anggota` (`id`, `email`, `nama`, `username`, `password`, `jk`, `umur`, `ttl`, `alamat`, `foto`) VALUES
(1, 'rizfauzi13@gmail.com', 'Rizky Fauzi', 'rizky', 'rizky123', 'L', '21', 'Ciamis, 07 Oktober 1999', 'Kertahayu', 'gambar_anggota/patrick.jpg'),
(3, 'anggota01@gmail.com', 'Anggota 1', 'anggota01', 'anggota01', 'L', '22', 'Bandung, 19 Januari 1997', 'Dago', 'gambar_anggota/220px-Sandy_Cheeks.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_dokumen`
--

CREATE TABLE `data_dokumen` (
  `id` int(3) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `tgl_input` varchar(20) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `buku` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_dokumen`
--

INSERT INTO `data_dokumen` (`id`, `judul`, `kategori`, `asal`, `tgl_input`, `gambar`, `buku`) VALUES
(1, 'Contoh', 'Biasa', '-', '2021/09/28', '', 'buku/Laporan Penjualan Berdasarkan Kategori 2021-09-25 - 2021-09-25.pdf'),
(4, 'Koss', 'Penting', 'Gak Asal asalan', '2021/09/28', '', 'buku/Curriculum Vitae - Exel Hilman.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `cari` varchar(50) NOT NULL,
  `saran` varchar(255) NOT NULL,
  `tgl_kunjung` date NOT NULL,
  `jam_kunjung` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id`, `nama`, `keperluan`, `cari`, `saran`, `tgl_kunjung`, `jam_kunjung`) VALUES
(1, 'Rizaldi', 'Mencari Dokumen', '', 'Aplikasinya kurang baik', '2021-09-14', '09:04:24'),
(2, 'Rully', 'Mencari seseorang', 'Pak Abdul', 'Website nya kurang menarik', '2021-09-14', '09:10:19'),
(3, 'Zaenudin', 'Mencari seseorang', 'Bu Aminah', 'Aplikasinya mantap', '2021-09-14', '09:11:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `data_anggota`
--
ALTER TABLE `data_anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_dokumen`
--
ALTER TABLE `data_dokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_anggota`
--
ALTER TABLE `data_anggota`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_dokumen`
--
ALTER TABLE `data_dokumen`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

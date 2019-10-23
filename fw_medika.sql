-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2019 at 08:51 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fw_medika`
--
CREATE DATABASE IF NOT EXISTS `fw_medika` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `fw_medika`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username_admin` varchar(255) NOT NULL,
  `password_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username_admin`, `password_admin`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `deskripsi_barang` text NOT NULL,
  `harga` int(11) NOT NULL,
  `stok_barang` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `deskripsi_barang`, `harga`, `stok_barang`, `gambar`) VALUES
(1, 'xxxxxxx', 'xxxxxxxxxxx', 20000, 18, '1571812736.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL,
  `nama_kota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `nama_kota`) VALUES
(1, 'Pekanbaru');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `email_pelanggan` varchar(255) NOT NULL,
  `namaD_pelanggan` varchar(255) NOT NULL,
  `namaB_pelanggan` varchar(255) NOT NULL,
  `pass_pelanggan` varchar(255) NOT NULL,
  `alamat_pelanggan` text NOT NULL,
  `id_kota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`email_pelanggan`, `namaD_pelanggan`, `namaB_pelanggan`, `pass_pelanggan`, `alamat_pelanggan`, `id_kota`) VALUES
('x@gmail.com', 'xx', 'xx', 'x', 'xxx', 1);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `jumlah_beli` int(11) NOT NULL,
  `totalHarga` bigint(20) NOT NULL,
  `tanggal_jual` date NOT NULL,
  `ket` text NOT NULL,
  `id` int(11) NOT NULL,
  `email_pelanggan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_penjualan`, `jumlah_beli`, `totalHarga`, `tanggal_jual`, `ket`, `id`, `email_pelanggan`) VALUES
(1, 2, 40000, '2019-10-23', 'Belum Bayar', 1, 'x@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `saran_kritik`
--

CREATE TABLE `saran_kritik` (
  `id_saran` int(11) NOT NULL,
  `nama_saran` varchar(255) NOT NULL,
  `email_saran` varchar(255) NOT NULL,
  `komentar_saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saran_kritik`
--

INSERT INTO `saran_kritik` (`id_saran`, `nama_saran`, `email_saran`, `komentar_saran`) VALUES
(1, 'xxxxxxx', 'xxxxxxxx@gmail.com', 'xxxxxxxxxxx'),
(2, 'xxxxxxxxx', 'xxxxxxxx@gmail.com', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username_admin`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`email_pelanggan`),
  ADD KEY `fk_pl_kota` (`id_kota`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `fk_pj_br` (`id`),
  ADD KEY `fk_pj_pl` (`email_pelanggan`);

--
-- Indexes for table `saran_kritik`
--
ALTER TABLE `saran_kritik`
  ADD PRIMARY KEY (`id_saran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `saran_kritik`
--
ALTER TABLE `saran_kritik`
  MODIFY `id_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD CONSTRAINT `fk_pl_kota` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id_kota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `fk_pj_br` FOREIGN KEY (`id`) REFERENCES `barang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pj_pl` FOREIGN KEY (`email_pelanggan`) REFERENCES `pelanggan` (`email_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

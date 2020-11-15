-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 15, 2020 at 11:57 AM
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
-- Database: `db_toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id` bigint(100) NOT NULL,
  `idToko` varchar(100) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga_beli` varchar(10) NOT NULL,
  `harga_jual` varchar(10) NOT NULL,
  `harga_member` varchar(10) NOT NULL,
  `idRak` varchar(50) NOT NULL,
  `idSup` varchar(50) NOT NULL,
  `idSatuan` bigint(100) NOT NULL,
  `expired` date NOT NULL,
  `stok_toko` int(5) NOT NULL,
  `stok_gudang` int(5) NOT NULL,
  `batas_stok` int(5) NOT NULL,
  `gambar` tinytext NOT NULL,
  `is_aktif` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_det_transaksi`
--

CREATE TABLE `tb_det_transaksi` (
  `idToko` varchar(100) NOT NULL,
  `idTransaksi` varchar(50) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `qty` int(3) NOT NULL,
  `diskon` varchar(10) NOT NULL,
  `total` varchar(10) NOT NULL,
  `valid` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id` bigint(100) NOT NULL,
  `idToko` varchar(100) NOT NULL,
  `idKat` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `is_aktif` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_log_modal_awal`
--

CREATE TABLE `tb_log_modal_awal` (
  `idLog` bigint(100) NOT NULL,
  `idToko` varchar(100) NOT NULL,
  `idUser` varchar(100) NOT NULL,
  `Modal` int(10) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_log_shift`
--

CREATE TABLE `tb_log_shift` (
  `idLog` bigint(100) NOT NULL,
  `idToko` varchar(100) NOT NULL,
  `idUser` varchar(100) NOT NULL,
  `waktu` datetime NOT NULL,
  `total` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_modal_awal`
--

CREATE TABLE `tb_modal_awal` (
  `idModal` bigint(100) NOT NULL,
  `idToko` varchar(100) NOT NULL,
  `Modal` int(10) NOT NULL,
  `is_aktif` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_opname`
--

CREATE TABLE `tb_opname` (
  `id` bigint(100) NOT NULL,
  `idToko` varchar(100) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `idSup` varchar(50) NOT NULL,
  `idRak` varchar(50) NOT NULL,
  `tgl` date NOT NULL,
  `stok_toko` int(5) NOT NULL,
  `stok_gudang` int(5) NOT NULL,
  `stok` int(5) NOT NULL,
  `selisih` int(5) NOT NULL,
  `is_akttif` enum('yes','no') NOT NULL,
  `idUser` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_rak`
--

CREATE TABLE `tb_rak` (
  `id` bigint(100) NOT NULL,
  `idToko` varchar(100) NOT NULL,
  `idRak` varchar(50) NOT NULL,
  `nama_rak` varchar(50) NOT NULL,
  `is_aktif` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_satuan`
--

CREATE TABLE `tb_satuan` (
  `idSatuan` bigint(100) NOT NULL,
  `nama_satuan` varchar(50) NOT NULL,
  `is_aktif` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_supplier`
--

CREATE TABLE `tb_supplier` (
  `id` bigint(100) NOT NULL,
  `idToko` varchar(100) NOT NULL,
  `idSup` varchar(50) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(15) NOT NULL,
  `is_aktif` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_toko`
--

CREATE TABLE `tb_toko` (
  `id` bigint(100) NOT NULL,
  `idToko` varchar(100) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_toko` varchar(50) NOT NULL,
  `pemilik` varchar(50) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `tmp_lahir` varchar(40) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `telp` varchar(17) NOT NULL,
  `alamat` tinytext NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `kota_kap` char(2) NOT NULL,
  `provinsi` char(2) NOT NULL,
  `foto_profil` tinytext NOT NULL,
  `reg_date` date NOT NULL,
  `exp_date` date NOT NULL,
  `is_aktif` enum('yes','no') NOT NULL,
  `is_login` enum('yes','no') NOT NULL,
  `last_login` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `idToko` varchar(100) NOT NULL,
  `idTransaksi` varchar(50) NOT NULL,
  `idUser` varchar(30) NOT NULL,
  `tgl` date NOT NULL,
  `jam` time NOT NULL,
  `diskon` varchar(10) NOT NULL,
  `valid` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` bigint(100) NOT NULL,
  `idToko` varchar(100) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `tmp_lahir` varchar(40) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `telp` varchar(17) NOT NULL,
  `alamat` tinytext NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `kota_kab` char(2) NOT NULL,
  `provinsi` char(2) NOT NULL,
  `foto_profil` tinytext NOT NULL,
  `is_aktif` enum('yes','no') NOT NULL,
  `is_login` enum('yes','no') NOT NULL,
  `last_login` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_log_modal_awal`
--
ALTER TABLE `tb_log_modal_awal`
  ADD PRIMARY KEY (`idLog`);

--
-- Indexes for table `tb_log_shift`
--
ALTER TABLE `tb_log_shift`
  ADD PRIMARY KEY (`idLog`);

--
-- Indexes for table `tb_modal_awal`
--
ALTER TABLE `tb_modal_awal`
  ADD PRIMARY KEY (`idModal`);

--
-- Indexes for table `tb_opname`
--
ALTER TABLE `tb_opname`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_rak`
--
ALTER TABLE `tb_rak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_satuan`
--
ALTER TABLE `tb_satuan`
  ADD PRIMARY KEY (`idSatuan`);

--
-- Indexes for table `tb_supplier`
--
ALTER TABLE `tb_supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_toko`
--
ALTER TABLE `tb_toko`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_log_modal_awal`
--
ALTER TABLE `tb_log_modal_awal`
  MODIFY `idLog` bigint(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_log_shift`
--
ALTER TABLE `tb_log_shift`
  MODIFY `idLog` bigint(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_modal_awal`
--
ALTER TABLE `tb_modal_awal`
  MODIFY `idModal` bigint(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_opname`
--
ALTER TABLE `tb_opname`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_rak`
--
ALTER TABLE `tb_rak`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_satuan`
--
ALTER TABLE `tb_satuan`
  MODIFY `idSatuan` bigint(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_supplier`
--
ALTER TABLE `tb_supplier`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_toko`
--
ALTER TABLE `tb_toko`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

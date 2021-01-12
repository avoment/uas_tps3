-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2021 at 01:50 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cucian`
--

CREATE TABLE `tbl_cucian` (
  `ID` int(8) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jenis` varchar(9) NOT NULL,
  `berat` int(5) NOT NULL,
  `tanggal_ambil` date NOT NULL,
  `harga` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cucian`
--

INSERT INTO `tbl_cucian` (`ID`, `nama`, `jenis`, `berat`, `tanggal_ambil`, `harga`) VALUES
(615001, 'Egi', 'Paket 2', 3, '2020-12-26', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis`
--

CREATE TABLE `tbl_jenis` (
  `id` int(3) NOT NULL,
  `nama` varchar(10) NOT NULL,
  `harga` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jenis`
--

INSERT INTO `tbl_jenis` (`id`, `nama`, `harga`) VALUES
(1, 'Paket 1', 3500),
(2, 'Paket 2', 4000),
(3, 'Paket 3', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id_user`, `username`, `password`, `nama_user`, `role`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin Prodi SI Uniga', 'admin'),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'Mahasiswa Prodi SI Uniga', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `t_jasa`
--

CREATE TABLE `t_jasa` (
  `id` varchar(4) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `sabun` int(4) NOT NULL,
  `softener` int(4) NOT NULL,
  `parfum` int(4) NOT NULL,
  `harga` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_jasa`
--

INSERT INTO `t_jasa` (`id`, `nama`, `sabun`, `softener`, `parfum`, `harga`) VALUES
('101', 'Cuci Kering', 100, 100, 0, 3000),
('102', 'Cuci Kering Setrika', 100, 100, 20, 4500),
('201', 'Selimut Kecil', 100, 100, 50, 12000),
('202', 'Selimut Besar', 100, 100, 50, 18000),
('103', 'Setrika', 0, 0, 20, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `t_masuk`
--

CREATE TABLE `t_masuk` (
  `id_trans` int(4) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jasa` varchar(25) NOT NULL,
  `berat` int(4) NOT NULL,
  `total` int(9) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_masuk`
--

INSERT INTO `t_masuk` (`id_trans`, `tgl_masuk`, `nama`, `jasa`, `berat`, `total`, `status`) VALUES
(1001, '2020-01-07', 'Ayu', 'Setrika', 5, 15000, 'Dalam Proses'),
(1002, '2020-01-08', 'Ida', 'Cuci Kering Setrika', 2, 9000, 'Siap Ambil'),
(1003, '2020-01-09', 'Lely', 'Cuci Kering', 2, 6000, 'Sudah Diambil');

-- --------------------------------------------------------

--
-- Table structure for table `t_sabun`
--

CREATE TABLE `t_sabun` (
  `id_sabun` int(11) NOT NULL,
  `sabun` int(5) NOT NULL,
  `softener` int(5) NOT NULL,
  `parfum` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_sabun`
--

INSERT INTO `t_sabun` (`id_sabun`, `sabun`, `softener`, `parfum`) VALUES
(1, 20000, 20000, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `t_uang`
--

CREATE TABLE `t_uang` (
  `bulan` date NOT NULL,
  `total_masuk` int(12) NOT NULL,
  `gaji_pegawai` int(12) NOT NULL,
  `biaya_listrik` int(12) NOT NULL,
  `biaya_air` int(12) NOT NULL,
  `sewa` int(12) NOT NULL,
  `untung` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_uang`
--

INSERT INTO `t_uang` (`bulan`, `total_masuk`, `gaji_pegawai`, `biaya_listrik`, `biaya_air`, `sewa`, `untung`) VALUES
('2021-01-02', 3000000, 1200000, 200000, 70000, 100000, 1430000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

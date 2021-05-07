-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 03:16 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku_tamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE `kunjungan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `tgl_kunjungan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`id`, `nama`, `ttl`, `alamat`, `no_hp`, `tgl_kunjungan`) VALUES
(1, 'Deden Sukandar', 'Sumedang,5 Juli 1998', 'Cinangsi,Cisitu Sumedang', '083877002635', '2021-05-07'),
(2, 'Indra Supeno', 'Makassar,23 April 1989', 'Jl.Pegangsaan timur,Jakarta Sekatan', '082192871771', '2021-05-07'),
(3, 'Andi Mario', 'Pare - pare,19 Maret 1997', 'Cibubur,Jakarta Timur', '082763899212', '2021-05-07'),
(4, 'Asep Silet', 'Bandung,12 Agustus 1997', 'Jl.Dago Indah,Bandung Barat', '081234127112', '2021-05-07'),
(6, 'Muhammad Ibnu', 'Bogor,27 Juni 1995', 'Cibinong,Bogor', '081229338127', '2021-05-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kunjungan`
--
ALTER TABLE `kunjungan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

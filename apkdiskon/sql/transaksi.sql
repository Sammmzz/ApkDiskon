-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2025 at 03:48 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apkdiscount`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(100) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `diskon` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `potongan` int(11) DEFAULT NULL,
  `total_bayar` int(11) DEFAULT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `nama_barang`, `harga`, `jumlah`, `diskon`, `total`, `potongan`, `total_bayar`, `waktu`) VALUES
(1, 'suncreen', 100000, 1, 10, 100000, 10000, 90000, '2025-04-05 12:52:38'),
(2, 'kaca', 100000, 1, 10, 100000, 10000, 90000, '2025-04-05 12:53:58'),
(3, 'kacamata', 250000, 2, 20, 500000, 100000, 400000, '2025-04-06 04:02:35'),
(4, 'kacamata', 250000, 2, 20, 500000, 100000, 400000, '2025-04-06 04:03:42'),
(5, 'sabun cuci muka', 25000, 2, 10, 50000, 5000, 45000, '2025-04-07 12:46:20'),
(6, 'sabun cuci muka', 25000, 2, 10, 50000, 5000, 45000, '2025-04-07 12:49:10'),
(7, 'sabun Mandi', 50000, 1, 10, 50000, 5000, 45000, '2025-04-07 12:54:40'),
(8, 'sabun batang', 20000, 2, 10, 40000, 4000, 36000, '2025-04-07 12:56:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

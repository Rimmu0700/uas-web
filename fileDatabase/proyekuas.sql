-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2025 at 03:17 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyekuas`
--

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `merek` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`id`, `gambar`, `nama`, `harga`, `merek`) VALUES
(2, 'Acer Nitro 16.png', 'ACER NITRO V 16 GeForce RTX 4050 Ryzen 7 8845HS', 'Rp16.299.000', 'Acer'),
(3, 'Acer predator helios 16.jpg', 'ACER GAMING PREDATOR HELIOS NEO 16', 'Rp21.067.000', 'Acer'),
(4, 'Asus ROG Strix G15.png', 'ASUS ROG STRIX-G15', 'Rp18.799.000', 'Asus'),
(5, 'Lenovo legion pro 7i.webp', 'Lenovo Legion Pro 7i', 'Rp52.499.000', 'Lenovo'),
(6, 'MSI GT77.png', 'MSI TITAN GT77', 'Rp99.999.000', 'MSI'),
(7, 'Msi raider GE78 HX.png', 'MSI RAIDER GE78HX', 'Rp46.899.000', 'MSI'),
(8, 'Razer blade 18.jpg', 'RAZER BLADE 18', 'Rp54.199.000', 'Razer'),
(9, 'Razer blade 16.png', 'RAZER BLADE 16', 'Rp30.489.000', 'Razer'),
(10, 'Asus ROG Strix scar.png', 'ASUS ROG STRIX SCAR 18', 'Rp74.999.000', 'Asus'),
(22, 'Acer Nitro 16.png', 'ACER NITRO V 16 GeForce RTX 4050 Ryzen 7 8845HS', 'Rp16.299.000', 'Acer'),
(31, 'dekjus', 'dekjuskomangkka', 'dekjus', 'dekjus');

-- --------------------------------------------------------

--
-- Table structure for table `monitor`
--

CREATE TABLE `monitor` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `harga` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `monitor`
--

INSERT INTO `monitor` (`id`, `nama`, `tipe`, `gambar`, `harga`) VALUES
(1, 'ACER ED270U', 'monitor', 'acer_ed270u.jpg', 'Rp 1.599.000'),
(2, 'AOC 27G2', 'monitor', 'aoc_27g2.jpg', 'Rp1.299.000'),
(3, 'AOC 24G2', 'monitor', 'aoc_24g2.jpg', 'Rp1.067.000'),
(4, 'MSI G225F', 'monitor', 'g225F_msi.jpg', 'Rp1.799.000'),
(5, 'KOORUI 24E3', 'monitor', 'koorui_24e3.jpg', 'Rp5.499.000'),
(6, 'LENOVO R25I', 'monitor', 'lenovo_r25i.jpg', 'Rp9.999.000'),
(7, 'VIEWSONIC VX2758A', 'monitor', 'viewsonix_vx2758a.jpg', 'Rp4.899.000'),
(10, 'aha', 'ahah', 'haha', 'ahah'),
(11, 'ahah', 'ahah', 'ahah', 'ahah'),
(12, 'dekjus', 'dekjus', 'dekjus', 'dekjus'),
(13, 'komang', 'komang', 'komang', 'komang'),
(14, 'sayasuka', 'sayasuka', 'sayasuka', 'sayasuka');

-- --------------------------------------------------------

--
-- Table structure for table `perlengkapan`
--

CREATE TABLE `perlengkapan` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `perlengkapan`
--

INSERT INTO `perlengkapan` (`id`, `gambar`, `tipe`, `nama`, `harga`) VALUES
(1, 'logi.jpg', 'Mouse', 'Logitech gpro', 'Rp 2.197.000'),
(2, 'daxa sedna.webp', 'headset', 'DAXA SEDNA', 'Rp 570.000'),
(3, 'daxa m71.jpg', 'keyboard', 'DAXA M71', 'Rp 1.200.000'),
(4, 'innox2.jpg', 'Mouse', 'INNO X2 4K', 'Rp 750.000'),
(5, 'logi g733.jpg', 'headset', 'LOGI G733', 'Rp 1.730.000'),
(6, 'razer v3.png', 'Mouse', 'Razer v3 pro', 'Rp 1.700.000'),
(7, 'VXE MAD R.webp', 'Mouse', 'VXE MAD R', 'Rp 899.999'),
(8, 'mad60he.jpg', 'keyboard', 'MAD 60HE', 'Rp 999.000'),
(9, 'rtx.jpg', 'vga', 'RTX 5090', 'Rp 40.000.000'),
(10, 'Razer hustman mini.webp', 'keyboard', 'Razer hustman', 'Rp 1.200.000'),
(11, 'inno x3 pro.jpg', 'Mouse', 'INNO X3 PRO', 'Rp 799.000'),
(13, 'ahaha', 'ahah', 'ahah', 'ahaha'),
(14, 'komang', 'komang', 'komang', 'komang'),
(15, 'sayasuka', 'sayasuka', 'sayasuka', 'sayasuka');

-- --------------------------------------------------------

--
-- Table structure for table `register1`
--

CREATE TABLE `register1` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register1`
--

INSERT INTO `register1` (`id`, `username`, `password`, `email`) VALUES
(1, 'jaja', 'jaja', ''),
(2, 'jaja', 'ajaj', 'jajaj'),
(3, 'hahah', 'haha', 'haha'),
(4, 'dekagus', 'dekagus123', 'dekagus@gmail.com'),
(5, 'tommy', 'tommy', 'tommy'),
(6, 'hahaha', 'hahaha', 'hahaha'),
(7, 'tommy', 'tommy', 'kfdlks@gmail.com'),
(8, 'tommy', 'h', 'tommy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monitor`
--
ALTER TABLE `monitor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perlengkapan`
--
ALTER TABLE `perlengkapan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register1`
--
ALTER TABLE `register1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `monitor`
--
ALTER TABLE `monitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `perlengkapan`
--
ALTER TABLE `perlengkapan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `register1`
--
ALTER TABLE `register1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

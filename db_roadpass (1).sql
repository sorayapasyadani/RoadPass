-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2022 at 03:16 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_roadpass`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_telp` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_name`, `username`, `password`, `admin_telp`, `admin_email`, `admin_address`) VALUES
(1, 'Ayak', 'admin', '123', '085850410115', 'ayak@gmail.com', 'Surabaya');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bayar`
--

CREATE TABLE `tb_bayar` (
  `id_bayar` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_bayar`
--

INSERT INTO `tb_bayar` (`id_bayar`, `nama`, `bank`, `image`) VALUES
(7, 'Soraya', 'Mandiri', 'bukti.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`category_id`, `category_name`) VALUES
(2, 'Data Mobil');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Alamat` varchar(200) NOT NULL,
  `No Hp` varchar(100) NOT NULL,
  `Product` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`id_penjualan`, `Nama`, `Alamat`, `No Hp`, `Product`) VALUES
(5, 'Widea', 'Jl. Keputih No 304, Sukolilo , Surabaya, Jawa Timur ', '085849291335', 3),
(6, 'Mefita', 'Jl. Tegal Mulyorejo Baru, Kejawan Putih, Sukolilo, Surabaya, Jawa Timur', '087261738446', 2),
(7, 'Alfenia', 'Jl. Yonkav 88, Bangil, Pasuruan, Jawa Timur', '089736272664', 6),
(8, 'Syifa', 'Jl.  Jenderal Sudirman, Waru, Sidoarjo, Jawa Timur', '087542612334', 8),
(9, 'Fasya', 'Jl. DR. Soetomo No. 42, Tuban, Jawa Timur', '087652345117', 7),
(10, 'Nabillah', 'Jl. Mastrip No. 90, Buduran, Sidoarjo, Jawa Timur', '085654213345', 3),
(11, 'Hafid', 'Jl. Keputih gg 3C No 16 B1, Sukolilo, Surabaya, Jawa Timur', '097653425115', 5),
(12, 'Wulan', 'Jl. Waru Rejo No 108, Gempol, Pasuruan, Jawa Timur', '085850410115', 2),
(13, 'Salsa', 'Keputih  gg makam No 5E, Sukolilo, Surabaya, Jawa Timur', '085842819117', 5),
(14, 'Kurnia', 'Prumahan Wisma Mukti Blok 8D No. 89, Sukolilo, Surabaya, Jawa Timur', '08754342277', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_status` tinyint(1) NOT NULL,
  `data_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`product_id`, `category_id`, `product_name`, `product_price`, `product_description`, `product_image`, `product_status`, `data_created`) VALUES
(2, 2, 'Toyota Kijang Innova', 450000, '<p>B930VUA</p>\r\n', 'produk1648800683.jpg', 1, '2022-04-01 08:11:23'),
(3, 2, 'Mitsubishi Pajero Sport', 700000, '<p>B2476UO</p>\r\n', 'produk1648800938.jpg', 1, '2022-04-01 08:15:38'),
(4, 2, 'Toyota Avanza', 300000, '<p>B139RFS</p>\r\n', 'produk1649313371.jpg', 1, '2022-04-07 06:36:11'),
(5, 2, 'Honda Brio', 500000, '<p>B239SOY</p>\r\n', 'produk1649313704.jpg', 1, '2022-04-07 06:41:44'),
(6, 2, 'Toyota Fortuner', 700000, '<p>B115SNU</p>\r\n', 'produk1649313836.jpg', 1, '2022-04-07 06:43:56'),
(7, 2, 'Mitsubishi Xpander', 600000, '<p>B123BMC</p>\r\n', 'produk1649313981.jpg', 1, '2022-04-07 06:46:21'),
(8, 2, 'Honda HRV', 700000, '<p>B675IVH</p>\r\n', 'produk1649314132.jpg', 1, '2022-04-07 06:48:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tb_bayar`
--
ALTER TABLE `tb_bayar`
  ADD PRIMARY KEY (`id_bayar`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_bayar`
--
ALTER TABLE `tb_bayar`
  MODIFY `id_bayar` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

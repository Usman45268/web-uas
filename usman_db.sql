-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2021 at 04:45 PM
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
-- Database: `usman_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(250) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `link_toko` varchar(500) NOT NULL,
  `gambar_link` varchar(1000) DEFAULT NULL,
  `kategori_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `deskripsi`, `link_toko`, `gambar_link`, `kategori_barang`) VALUES
(6, 'Acer Predator Nitro 5 AN515-55', '- Intel Core i5-10300H processor (Smart Cache 8Mb , Up to 4.50 GHz)\r\n- Windows 10 Home\r\n- 8GB/16GB o', 'https://www.tokopedia.com/acerid/acer-predator-nitro-5-an515-55-i5-10300h-gtx1650ti-8gb-512-nvme-144hz-8-gb?whid=0', 'https://ecs7.tokopedia.net/img/cache/900/VqbcmM/2020/9/26/0bba3b5a-a058-48ea-9336-a389a04d9290.jpg', 1),
(7, 'LENOVO V15 ADA', 'Processor : AMD Ryzen 3 3250U 2.60GHz\r\nRAM : 8GB DDR4\r\nHarddisk : 1TB HDD SATA + 1 SLOT SSD M.2 (22m', 'https://www.tokopedia.com/pernikpadget/lenovo-v15-ada-ryzen-3-3250u-ram-8gb-hdd-1tb-15-6-ssd-m2-new-gaming?src=topads', 'https://ecs7.tokopedia.net/img/cache/900/VqbcmM/2021/1/25/4f6028ec-bb2a-42fe-917c-e3ae54965879.jpg', 1),
(8, 'OPPO A52', 'SIM : Dual SIM (Nano-SIM, dual stand-by)\r\nDisplay : Type : IPS LCD capacitive touchscreen, 16M color', 'https://www.tokopedia.com/hapeworldstore/oppo-a52-smartphone-6gb-128gb-100-segel-garansi-resmi-1-tahun-putih?src=topads', 'https://ecs7.tokopedia.net/img/cache/900/product-1/2020/6/11/55897564/55897564_2e78fc75-3d8c-4703-8247-f8ebf591ff00_650_650', 2),
(9, 'Iphone 12', 'Belanja di Raja Ponsel dijamin :\r\n1. Barangnya BNIB (Brand New In Box)\r\n2. Barang 100% dijamin origi', 'https://www.tokopedia.com/rajaponselcom/apple-iphone-12-128-gb-smartphone-biru?src=topads', 'https://ecs7.tokopedia.net/img/cache/900/VqbcmM/2020/10/30/89cb482f-664a-4f91-8cd8-62a8fbed54f2.jpg', 2),
(10, 'Wacom Cintiq 16HD', '13.6 x 7.6\" Active Area\r\n15.6\" 1920 x 1080 \r\n8192 Levels of Pen Pressure Sensitivity\r\n210 cd/m² Brig', 'https://www.tokopedia.com/tokojbc/new-wacom-cintiq-16hd-cintiq-16-venus-garansi-resmi?src=topads', 'https://ecs7.tokopedia.net/img/cache/900/product-1/2019/2/7/227025/227025_9a3332c9-1f5d-4837-9e56-d3573419aaaf_1000_1000.jpg', 3),
(11, 'Wacom DTK-2260/K0-CX Cintiq 22', 'Supported Resolution: 640 x 480, 720 x 400, 800 x 600, 1024 x 768, 1280 x 720, 1280 x 1024, 1600 x 1', 'https://www.tokopedia.com/wacom-official/wacom-dtk-2260-k0-cx-cintiq-22-venus-creative-pen-display-fhd?src=topads', 'https://ecs7.tokopedia.net/img/cache/900/product-1/2019/8/12/29264723/29264723_ea730cd8-b45b-4178-ba51-30ba72bb8f07_700_700', 3);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori_barang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori_barang`) VALUES
(1, 'laptop'),
(2, 'smartphone'),
(3, 'alat design');

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `id_toko` int(11) NOT NULL,
  `nama_toko` varchar(100) NOT NULL,
  `link_toko` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`id_toko`, `nama_toko`, `link_toko`) VALUES
(1, 'Tokopedia', 'https://www.tokopedia.com'),
(2, 'Sophee', 'https://shopee.co.id');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `kategori` (`kategori_barang`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `kategori` FOREIGN KEY (`kategori_barang`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 22, 2015 at 04:58 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `futuretech`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiet_hoadon`
--

CREATE TABLE IF NOT EXISTS `chitiet_hoadon` (
  `ma_hoadon` int(11) NOT NULL DEFAULT '0',
  `ma_sanpham` varchar(11) NOT NULL,
  `so_luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc_sanpham`
--

CREATE TABLE IF NOT EXISTS `danhmuc_sanpham` (
  `id_loai` int(11) NOT NULL,
  `ten_loai` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE IF NOT EXISTS `hoa_don` (
  `ma_hoadon` int(11) NOT NULL,
  `id_taikhoan` int(24) NOT NULL,
  `ngay_lap` date NOT NULL,
  `ngay_nhanhang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE IF NOT EXISTS `khach_hang` (
`id_taikhoan` int(24) NOT NULL,
  `ho_ten` varchar(64) NOT NULL,
  `dia_chi` varchar(256) NOT NULL,
  `dien_thoai` varchar(12) NOT NULL,
  `email` varchar(64) NOT NULL,
  `user_name` varchar(64) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE IF NOT EXISTS `san_pham` (
  `id_loai` int(11) NOT NULL,
  `hang_sanxuat` varchar(36) NOT NULL,
  `ma_sanpham` varchar(11) NOT NULL,
  `ten_sanpham` varchar(88) NOT NULL,
  `gia_sanpham` int(11) NOT NULL,
  `ten_loai` varchar(36) NOT NULL,
  `hinh_sanpham` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tai_khoan`
--

CREATE TABLE IF NOT EXISTS `tai_khoan` (
`id_taikhoan` int(24) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(32) NOT NULL,
  `ho_ten` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiet_hoadon`
--
ALTER TABLE `chitiet_hoadon`
 ADD PRIMARY KEY (`ma_hoadon`), ADD KEY `ma_sanpham` (`ma_sanpham`);

--
-- Indexes for table `danhmuc_sanpham`
--
ALTER TABLE `danhmuc_sanpham`
 ADD PRIMARY KEY (`id_loai`);

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
 ADD PRIMARY KEY (`ma_hoadon`), ADD KEY `id_taikhoan` (`id_taikhoan`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
 ADD PRIMARY KEY (`id_taikhoan`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
 ADD PRIMARY KEY (`ma_sanpham`), ADD KEY `id_loai` (`id_loai`);

--
-- Indexes for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
 ADD PRIMARY KEY (`id_taikhoan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
MODIFY `id_taikhoan` int(24) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
MODIFY `id_taikhoan` int(24) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiet_hoadon`
--
ALTER TABLE `chitiet_hoadon`
ADD CONSTRAINT `chitiet_hoadon_ibfk_1` FOREIGN KEY (`ma_sanpham`) REFERENCES `san_pham` (`ma_sanpham`),
ADD CONSTRAINT `chitiet_hoadon_ibfk_2` FOREIGN KEY (`ma_hoadon`) REFERENCES `hoa_don` (`ma_hoadon`);

--
-- Constraints for table `hoa_don`
--
ALTER TABLE `hoa_don`
ADD CONSTRAINT `hoa_don_ibfk_1` FOREIGN KEY (`id_taikhoan`) REFERENCES `khach_hang` (`id_taikhoan`);

--
-- Constraints for table `khach_hang`
--
ALTER TABLE `khach_hang`
ADD CONSTRAINT `khach_hang_ibfk_1` FOREIGN KEY (`id_taikhoan`) REFERENCES `tai_khoan` (`id_taikhoan`);

--
-- Constraints for table `san_pham`
--
ALTER TABLE `san_pham`
ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`id_loai`) REFERENCES `danhmuc_sanpham` (`id_loai`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

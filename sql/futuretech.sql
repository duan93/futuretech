-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 02, 2015 at 09:36 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `futuretech`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `AdminID` int(8) NOT NULL,
  `Adminname` varchar(32) NOT NULL,
  `Password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `brandproduct`
--

CREATE TABLE IF NOT EXISTS `brandproduct` (
  `IdBrand` int(12) NOT NULL,
  `Brand` varchar(64) NOT NULL,
  `TypeId` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brandproduct`
--

INSERT INTO `brandproduct` (`IdBrand`, `Brand`, `TypeId`) VALUES
(1, 'Apple', 1),
(2, 'Samsung', 1),
(3, 'Sony', 1),
(4, 'HTC', 1),
(5, 'Blackberry', 1),
(6, 'Apple', 2),
(7, 'Apple', 3);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `ContactID` int(12) NOT NULL,
  `ContactName` varchar(50) NOT NULL,
  `ContactEmail` varchar(30) NOT NULL,
  `ContactPhone` int(15) NOT NULL,
  `ContactDesc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE IF NOT EXISTS `orderdetails` (
  `OrderID` int(12) NOT NULL,
  `ProductID` int(12) NOT NULL,
  `ProductPrice` double(10,0) NOT NULL,
  `Quantity` int(5) NOT NULL,
  `Totals` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `OrderID` int(12) NOT NULL,
  `OrderDate` date NOT NULL,
  `OrderTotal` int(10) NOT NULL,
  `UserID` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `productdetail`
--

CREATE TABLE IF NOT EXISTS `productdetail` (
  `ProductID` int(12) NOT NULL,
  `BatteryCapacity` varchar(64) NOT NULL,
  `Os` varchar(64) NOT NULL,
  `Ram` varchar(64) NOT NULL,
  `InterialMemorize` varchar(64) NOT NULL,
  `Resolution` varchar(64) NOT NULL,
  `ScreenSize` varchar(64) NOT NULL,
  `Camera` varchar(64) NOT NULL,
  `NFC` varchar(64) NOT NULL,
  `Wifi` varchar(64) NOT NULL,
  `Networks` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `productdetail`
--

INSERT INTO `productdetail` (`ProductID`, `BatteryCapacity`, `Os`, `Ram`, `InterialMemorize`, `Resolution`, `ScreenSize`, `Camera`, `NFC`, `Wifi`, `Networks`) VALUES
(1, '2750 mAh', 'Ios', '1G', '128G', '1080x1920 px', '5,5 in', '12px', 'no', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(2, '2750 mAh', 'Ios\n', '1G', '64G', '1080x1920 px', '5.5 in', '12px', 'no', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(3, '2750 mAh', 'Ios\r\n', '1G', '128G', '1080x1920 px', '5.5 in', '12px', 'no', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(4, '2750 mAh', 'Ios\r\n', '1G', '128G', '1080x1920 px', '5.5 in', '12px', 'no', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(5, '1810 mAh', 'Ios\r\n', '1G', '16G', '750x1334 px', '4.7 in', '8px', 'no', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(6, '1810 mAh', 'Ios\r\n', '1G', '64G', '750x1334 px', '4.7 in', '8px', 'no', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(7, '1810 mAh', 'Ios\r\n', '1G', '128G', '750x1334 px', '4.7 in', '8px', 'no', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(8, '1800 mAh', 'BB 10', '2G', '16G', '768 x 1280 px', '4.2 in', '8.0 Mp', 'yes', '802.11 b/g/n', 'A-GPS\r\nGLONASS'),
(9, '3450 mAh', 'BB 10', '3G', '32G', '1440 px', '4.5 in', '13.0 Mp', 'yes', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(10, '3000 mAh', 'Android', '4.0 GB', '32 GB', '1440 x 2560 px', '5.7 in', '16.0 Mp', 'yes', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(11, '3000 mAh', 'Android', '4.0 GB', '32 GB', '1440 x 2560 px', '5.7 in', '16.0 Mp', 'yes', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(12, '3000 mAh', 'Android', '4.0 GB', '32 GB', '1440 x 2560 px', '5.7 in', '16.0 Mp', 'yes', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(13, '3000 mAh', 'Android', '3.0 GB', '32 GB', '1600x2560 px', '5.6 in', '16.0 Mp', 'yes', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(14, '3000 mAh', 'Android', '3.0 GB', '32 GB', '1600x2560 px', '5.6 in', '16.0 Mp', 'yes', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(15, '2930 mAh', 'Android', '3.0 GB', '16 GB', '1080 x 1920 px', '5.2 in', '20.7 Mp', 'yes', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(16, '2930 mAh', 'Android', '3.0 GB', '32 GB', '1080 x 1920 px', '5.1 in', '23 Mp', 'yes', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(17, '2930 mAh', 'Android', '2 GB', '16 GB', '1080 x 1920 px', '6 in', '13 Mp', 'yes', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(18, '2930 mAh', 'Android', '3 GB', '32 GB', '1080 x 1920 px', '5.2 in', '20.7 Mp', 'yes', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(19, '2930 mAh', 'Android', '3 GB', '32 GB', '1080 x 1920 px', '5.2 in', '20.7 Mp', 'yes', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(20, '3100 mAh', 'Android', '3 GB', '16 GB', '1080 x 1920 px', '5.2 in', '20.7 Mp', 'yes', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(21, '2840 mAh', 'Android', '3 GB', '32 GB', '1080 x 1920 px', '5.2 in', '20.7 Mp', 'yes', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(22, '2840 mAh', 'Android', '2 GB', '16 GB', '1080 x 1920 px', '5 in', '20.7 Mp', 'yes', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(23, '2800 mAh', 'Android', '2 GB', '16 GB', '1080 x 1920 px', '5 in', '13 Mp', 'yes', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(24, '8820 mAh', 'iOS', '2.0 GB', '64 GB', '1536 x 2048 px', '9.7 in', '8.0 Mp', 'no', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(25, '5124 mAh', 'iOS', '2.0 GB', '16 GB', '1536 x 2048 px', '7.9 in', '8.0 Mp', 'no', '802.11 a/b/g/n/ac', ''),
(26, '5124 mAh', 'iOS', '2.0 GB', '16 GB', '1536 x 2048 px', '7.9 in', '8.0 Mp', 'no', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(27, '5124 mAh', 'iOS', '2.0 GB', '16 GB', '1536 x 2048 px', '7.9 in', '8.0 Mp', 'no', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(28, '5124 mAh', 'iOS', '2.0 GB', '64 GB', '1536 x 2048 px', '7.9 in', '8.0 Mp', 'no', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(29, '5124 mAh', 'iOS', '2.0 GB', '128 GB', '1536 x 2048 px', '7.9 in', '8.0 Mp', 'no', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(30, '5124 mAh', 'iOS', '2.0 GB', '16 GB', '1536 x 2048 px', '7.9 in', '8.0 Mp', 'no', '802.11 a/b/g/n/ac', ''),
(31, '5124 mAh', 'iOS', '2.0 GB', '64 GB', '1536 x 2048 px', '7.9 in', '8.0 Mp', 'no', '802.11 a/b/g/n/ac', ''),
(32, '5124 mAh', 'iOS', '2.0 GB', '128 GB', '1536 x 2048 px', '7.9 in', '8.0 Mp', 'no', '802.11 a/b/g/n/ac', ''),
(33, '8820 mAh', 'iOS', '2.0 GB', '16 GB', '1536 x 2048 px', '9.7 in', '8.0 Mp', 'no', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(34, '8820 mAh', 'iOS', '2.0 GB', '64 GB', '1536 x 2048 px', '9.7 in', '8.0 Mp', 'no', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(35, '8820 mAh', 'iOS', '2.0 GB', '128 GB', '1536 x 2048 px', '9.7 in', '8.0 Mp', 'no', '802.11 a/b/g/n/ac', 'A-GPS\r\nGLONASS'),
(36, '39.7', 'Mac os', '8 GB', '256GB PCIe', '2304 x 1440 Mp', '12 in', 'HD', 'no', '802.11 a/b/g/n/ac', 'no'),
(37, '39.7', 'Mac os', '8 GB', '256GB PCIe', '2304 x 1440 Mp', '12 in', 'HD', 'no', '802.11 a/b/g/n/ac', 'no'),
(38, '99.5 Watt-hour Lithium polymer', 'Mac os', '16GB – 1600Mhz – DDR3L Onboard', '512GB PCle', '1800 x 2880 Mp', '15.4 in', '720p FaceTime HD', 'no', '802.11 a/b/g/n/ac', 'no'),
(39, '74.9 Watt-hour Lithium polymer', 'Mac os', '8GB - 1866MHz - LPDDR3 Onboard', '512GB PCle', '2560 x 1600 Mp', '13.3 in', '720p FaceTime HD', 'no', '802.11 a/b/g/n/ac', 'no'),
(40, '38 Watt-hour Lithium Polymer', 'Mac os', '4GB 1600MHz LPDDR3 Onboard', '256GB PCIe', '1440 x 900 Mp', '13.3 in', '720p FaceTime HD', 'no', '802.11 a/b/g/n/ac', 'no'),
(41, '74.9 Watt-hour Lithium polymer', 'Mac os', '8GB - 1866MHz - LPDDR3 Onboard', '256GB PCIe', '2560 x 1600 Mp', '13.3 in', '720p FaceTime HD', 'no', '802.11 a/b/g/n/ac', 'no'),
(42, '38 Watt-hour Lithium Polymer', 'Mac os', '4GB 1600MHz LPDDR3 Onboard', '256GB PCIe', '1366 x 768 Mp', '11.6 in', '720p FaceTime HD', 'no', '802.11 a/b/g/n/ac', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `ProductID` int(12) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `ProductImage` varchar(255) NOT NULL,
  `ProductPrice` double(10,0) NOT NULL,
  `ProductDesc` text NOT NULL,
  `TypeId` int(11) NOT NULL,
  `ProductCategory` varchar(50) NOT NULL,
  `ProductBrand` varchar(50) NOT NULL,
  `IdBrand` int(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `ProductName`, `ProductImage`, `ProductPrice`, `ProductDesc`, `TypeId`, `ProductCategory`, `ProductBrand`, `IdBrand`) VALUES
(1, 'Apple iPhone 6S Plus 128GB', 'apple_iphone_6s.png', 25510000, 'Máy mới 100% nguyên seal, chưa active.\n01 đổi 01 trong 03 ngày đầu.\nBảo hành 12 tháng tất cả các bộ phận, kể cả màn hình và mất nguồn.\nPhụ kiện bảo hành 30 ngày.\nPhụ kiện gồm: Cáp, Sạc, Tai nghe, Que lấy sim.\n(Chỉ áp dụng cho gói bảo hành 1 năm )', 1, 'Điện Thoại', 'Apple', 1),
(2, 'Apple iPhone 6S Plus 64GB', 'apple_iphone_6s.png', 23310000, 'Máy mới 100% nguyên seal, chưa active.\r\n01 đổi 01 trong 03 ngày đầu.\r\nBảo hành 12 tháng tất cả các bộ phận, kể cả màn hình và mất nguồn.\r\nPhụ kiện bảo hành 30 ngày.\r\nPhụ kiện gồm: Cáp, Sạc, Tai nghe, Que lấy sim.\r\n(Chỉ áp dụng cho gói bảo hành 1 năm )', 1, 'Điện Thoại', 'Apple', 1),
(3, 'Apple iPhone 6S Plus 16GB', 'apple_iphone_6s.png', 19810000, 'Máy mới 100% nguyên seal, chưa active.\r\n01 đổi 01 trong 03 ngày đầu.\r\nBảo hành 12 tháng tất cả các bộ phận, kể cả màn hình và mất nguồn.\r\nPhụ kiện bảo hành 30 ngày.\r\nPhụ kiện gồm: Cáp, Sạc, Tai nghe, Que lấy sim.\r\n(Chỉ áp dụng cho gói bảo hành 1 năm )', 1, 'Điện Thoại', 'Apple', 1),
(4, 'Apple iPhone 6 Plus 128GB', 'apple_iphone_6.png', 18110000, 'Máy mới 100% nguyên seal, chưa active.\r\n01 đổi 01 trong 03 ngày đầu.\r\nBảo hành 12 tháng tất cả các bộ phận, kể cả màn hình và mất nguồn.\r\nPhụ kiện bảo hành 30 ngày.\r\nPhụ kiện gồm: Cáp, Sạc, Tai nghe, Que lấy sim.\r\n(Chỉ áp dụng cho gói bảo hành 1 năm )', 1, 'Điện Thoại', 'Apple', 1),
(5, 'Apple iPhone 6 16GB', 'apple_iphone_6.png', 13610000, 'Máy mới 100% nguyên seal, chưa active.\r\n01 đổi 01 trong 03 ngày đầu.\r\nBảo hành 12 tháng tất cả các bộ phận, kể cả màn hình và mất nguồn.\r\nPhụ kiện bảo hành 30 ngày.\r\nPhụ kiện gồm: Cáp, Sạc, Tai nghe, Que lấy sim.\r\n(Chỉ áp dụng cho gói bảo hành 1 năm )', 1, 'Điện Thoại', 'Apple', 1),
(6, 'Apple iPhone 6 64GB', 'apple_iphone_6.png', 15810000, 'Máy mới 100% nguyên seal, chưa active.\r\n01 đổi 01 trong 03 ngày đầu.\r\nBảo hành 12 tháng tất cả các bộ phận, kể cả màn hình và mất nguồn.\r\nPhụ kiện bảo hành 30 ngày.\r\nPhụ kiện gồm: Cáp, Sạc, Tai nghe, Que lấy sim.\r\n(Chỉ áp dụng cho gói bảo hành 1 năm )', 1, 'Điện Thoại', 'Apple', 1),
(7, 'Apple iPhone 6 128GB', 'apple_iphone_6.png', 17910000, 'Máy mới 100% nguyên seal, chưa active.\r\n01 đổi 01 trong 03 ngày đầu.\r\nBảo hành 12 tháng tất cả các bộ phận, kể cả màn hình và mất nguồn.\r\nPhụ kiện bảo hành 30 ngày.\r\nPhụ kiện gồm: Cáp, Sạc, Tai nghe, Que lấy sim.\r\n(Chỉ áp dụng cho gói bảo hành 1 năm )', 1, 'Điện Thoại', 'Apple', 1),
(8, 'BlackBerry Z10 STL-004', 'blackberry_z10.png', 2910000, 'Máy mới 100%, nguyên seal.\r\n01 đổi 01 trong 03 ngày đầu\r\nPhụ kiện bảo hành 30 ngày.\r\nMàn hình và cảm ứng bảo hành 01 tháng.\r\nBộ phận khác bảo hành 12 tháng.\r\nPhụ kiện bao gồm: Sạc, cáp, tai nghe.', 1, 'Điện Thoại', 'Blackberry', 5),
(9, 'Blackberry Passport (CTY)', 'blackberry_z10.png', 12310000, '- Sản phẩm là hàng mới 100% từ nhà phân phối chính thức Blackberry tại Việt Nam. Giá niêm yết ở trên đã bao gồm 10% VAT.\r\n- Sản phẩm được bảo hành theo chính sách của Blackberry Việt Nam. (12 tháng, phụ kiện 06 tháng).\r\n- Phụ kiện kèm theo sản phẩm gồm: cáp, sạc, tai nghe, sách hướng dẫn.', 1, 'Điện Thoại', 'Blackberry', 5),
(10, 'Samsung Galaxy Note 5 32GB (Korea)', 'samsung_note5.png', 12540000, 'Máy mới 100%, nguyên seal.\r\n01 đổi 01 trong 03 ngày đầu\r\nPhụ kiện bảo hành 30 ngày.\r\nMàn hình và cảm ứng bảo hành 01 tháng.\r\nBộ phận khác bảo hành 12 tháng.\r\n- Phụ kiện bao gồm: sạc, cáp, tai nghe, nút cao su tai nghe, sách hướng dẫn.', 1, 'Điện Thoại', 'Samsung', 2),
(11, 'Samsung Galaxy S6 Edge Plus 32GB (CTY)', 'samsung_s6.png', 18000000, 'Sản phẩm là hàng mới 100% từ nhà phân phối chính thức Samsung tại Việt Nam. Giá niêm yết ở trên đã bao gồm 10% VAT.\r\n- Sản phẩm được bảo hành theo chính sách của Samsung Việt Nam. (12 tháng, phụ kiện 06 tháng).\r\n- Phụ kiện kèm theo sản phẩm gồm: cáp, sạc, tai nghe, sách hướng dẫn.\r\n', 1, 'Điện Thoại', 'Samsung', 2),
(12, 'Samsung Galaxy Note 5 32GB Dual Sim', 'samsung_note5.png', 14610000, 'Máy mới 100%, nguyên seal.\r\n01 đổi 01 trong 03 ngày đầu\r\nPhụ kiện bảo hành 30 ngày.\r\nMàn hình và cảm ứng bảo hành 01 tháng.\r\nBộ phận khác bảo hành 12 tháng.\r\nPhụ kiện bao gồm: sạc, cáp, tai nghe, nút cao su tai nghe, sách hướng dẫn.', 1, 'Điện Thoại', 'Samsung', 2),
(13, 'Samsung Galaxy Note Edge SCL24 (TRAY)', 'samsung_s6.png', 7960000, 'Máy mới 100%.\r\nPhụ kiện bao gồm: Cáp, Tai Nghe, Sạc Nhanh (Quick Charge).\r\n01 đổi 01 trong 03 ngày đầu\r\nPhụ kiện bảo hành 30 ngày.\r\nMàn hình và cảm ứng bảo hành 01 tháng.\r\nBộ phận khác bảo hành 12 tháng.\r\nLưu Ý: Sản phẩm không bao gồm Hộp (TRAY).', 1, 'Điện Thoại', 'Samsung', 2),
(14, 'Samsung Galaxy S6 Edge Plus (Korea)', 'samsung_s6.png', 14000000, 'Máy mới 100%, nguyên seal.\r\n01 đổi 01 trong 03 ngày đầu\r\nPhụ kiện bảo hành 30 ngày.\r\nMàn hình và cảm ứng bảo hành 01 tháng.\r\nBộ phận khác bảo hành 12 tháng.\r\nPhụ kiện bao gồm: Hộp, Sạc, cáp, tai nghe, sách hướng dẫn.', 1, 'Điện Thoại', 'Samsung', 2),
(15, 'Sony Xperia Z3+', 'sony_xperia_z3_compact.png', 10560000, 'Máy mới 100%, nguyên seal.\r\n01 đổi 01 trong 03 ngày đầu\r\nPhụ kiện bảo hành 30 ngày.\r\nMàn hình và cảm ứng bảo hành 01 tháng.\r\nBộ phận khác bảo hành 12 tháng.\r\nPhụ kiện bao gồm: sạc, cáp, tai nghe, sách hướng dẫn.', 1, 'Điện Thoại', 'Sony', 3),
(16, 'Sony Xperia Z5 Dual (CTY)', 'sony_z5.png', 15310000, '- Sản phẩm là hàng mới 100% từ nhà phân phối chính thức Sony tại Việt Nam. Giá niêm yết ở trên đã bao gồm 10% VAT.\r\n- Sản phẩm được bảo hành theo chính sách của Sony Việt Nam. (12 tháng, phụ kiện 06 tháng).\r\n- Phụ kiện kèm theo sản phẩm gồm: cáp, sạc, tai nghe, sách hướng dẫn.\r\n', 1, 'Điện Thoại', 'Sony', 3),
(17, 'Sony Xperia C5 Ultra Dual (CTY)', 'sony_c5.png', 7990000, '- Sản phẩm là hàng mới 100% từ nhà phân phối chính thức Sony tại Việt Nam. Giá niêm yết ở trên đã bao gồm 10% VAT.\r\n- Sản phẩm được bảo hành theo chính sách của Sony Việt Nam. (12 tháng, phụ kiện 06 tháng).\r\n- Phụ kiện kèm theo sản phẩm gồm: cáp, sạc, tai nghe, sách hướng dẫn.', 1, 'Điện Thoại', 'Sony', 3),
(18, 'Sony Xperia Z3+ (CTY)', 'sony_z3+d.png', 15210000, 'Tai nghe Digital Noise Cancelling Headset MDR-NC31trị giá 1.190.000 VNĐ\r\nSạc nhanh Quick Charger UCH10 trị gía 690.000 VNĐ\r\nQuà tặng đặc biệt: bao da chính hãng Z3+ trị giá 1.500.000 VNĐ\r\nSố lượng có hạn ( Vui lòng liên hệ cửa hàng để biết thêm thông tin)', 1, 'Điện Thoại', 'Sony', 3),
(19, 'Sony Xperia Z3+ E6533 Dual Sim', 'sony_z3+d.png', 11460000, 'Máy mới 100%, nguyên seal.\r\n01 đổi 01 trong 03 ngày đầu\r\nPhụ kiện bảo hành 30 ngày.\r\nMàn hình và cảm ứng bảo hành 01 tháng.\r\nBộ phận khác bảo hành 12 tháng.\r\nPhụ kiện bao gồm: sạc, cáp, tai nghe, sách hướng dẫn.', 1, 'Điện Thoại', 'Sony', 3),
(20, 'Sony Xperia Z3 Dual Sim', 'sony_z3+d.png', 9960000, 'Máy mới 100%, nguyên seal.\r\n01 đổi 01 trong 03 ngày đầu\r\nPhụ kiện bảo hành 30 ngày.\r\nMàn hình và cảm ứng bảo hành 01 tháng.\r\nBộ phận khác bảo hành 12 tháng.\r\nPhụ kiện bao gồm: sạc, cáp, tai nghe, sách hướng dẫn.', 1, 'Điện Thoại', 'Sony', 3),
(21, 'HTC One M9 (CTY)', 'htc_m9.png', 13510000, '- Sản phẩm là hàng mới 100% từ nhà phân phối chính thức của HTC tại Việt Nam. Giá niêm yết ở trên đã bao gồm 10% VAT.\r\n- Sản phẩm được bảo hành theo chính sách của HTC Việt Nam. (12 tháng, phụ kiện 06 tháng).\r\n- Phụ kiện kèm theo sản phẩm gồm: cáp, sạc, tai nghe, sách hướng dẫn.', 1, 'Điện Thoại', 'HTC', 4),
(22, 'HTC One M8 Eye (CTY)', 'htc_m8.png', 8110000, '- Sản phẩm là hàng mới 100% từ nhà phân phối chính thức của HTC tại Việt Nam. Giá niêm yết ở trên đã bao gồm 10% VAT.\r\n- Sản phẩm được bảo hành theo chính sách của HTC Việt Nam. (12 tháng, phụ kiện 06 tháng).\r\n- Phụ kiện kèm theo sản phẩm gồm: cáp, sạc, tai nghe, sách hướng dẫn.', 1, 'Điện Thoại', 'HTC', 4),
(23, 'HTC ONE E9', 'htc_e7.png', 6800000, 'Máy mới 100%, nguyên seal.\r\n01 đổi 01 trong 03 ngày đầu\r\nPhụ kiện bảo hành 30 ngày.\r\nMàn hình và cảm ứng bảo hành 01 tháng.\r\nBộ phận khác bảo hành 12 tháng.\r\n- Phụ kiện bao gồm: Sạc, cáp, tai nghe.', 1, 'Điện Thoại', 'HTC', 4),
(24, 'Apple iPad Air 2 4G 64GB Gold', 'apple_ipadair2.png', 11340000, 'Tặng: sạc, cáp chính hãng.\r\nTặng Tai Nghe IPhone 5 Chính Hãng ( Trị Giá 380.000đ).\r\nKhi Khách Hàng Mua Sản Phẩm cùng với : Bao Da + Dán Màn Hình.\r\n(Khuyến mãi áp dụng khi mua: iPad + Bao da + Dán màn hình).\r\nChỉ áp dụng cho sản phẩm iPad mới 100%.', 2, 'Tablet', 'Apple', 1),
(25, 'Apple iPad Mini 4 WiFi (CTY)', 'apple_ipadmini_4.png', 10010000, 'Tặng Tai Nghe IPhone 5 Chính Hãng ( Trị Giá 380.000đ).\r\nKhi Khách Hàng Mua Sản Phẩm cùng với : Bao Da + Dán Màn Hình.\r\n(Khuyến mãi áp dụng khi mua: Ipad + Bao da + Dán màn hình).\r\nChỉ áp dụng cho sản phẩm Ipad mới 100%.', 2, 'Tablet', 'Apple', 1),
(26, 'Apple iPad Mini 4 4G (CTY)', 'apple_ipadmini_4.png', 12910000, 'Tặng Tai Nghe IPhone 5 Chính Hãng ( Trị Giá 380.000đ).\r\nKhi Khách Hàng Mua Sản Phẩm cùng với : Bao Da + Dán Màn Hình.\r\n(Khuyến mãi áp dụng khi mua: Ipad + Bao da + Dán màn hình).\r\nChỉ áp dụng cho sản phẩm Ipad mới 100%.', 2, 'Tablet', 'Apple', 1),
(27, 'Apple iPad Mini 4 4G 16GB', 'apple_ipadmini_4.png', 14260000, 'Tặng Tai Nghe IPhone 5 Chính Hãng ( Trị Giá 380.000đ).\r\nKhi Khách Hàng Mua Sản Phẩm cùng với : Bao Da + Dán Màn Hình.\r\n(Khuyến mãi áp dụng khi mua: Ipad + Bao da + Dán màn hình).\r\nChỉ áp dụng cho sản phẩm Ipad mới 100%.', 2, 'Tablet', 'Apple', 1),
(28, 'Apple iPad Mini 4 4G 64GB', 'apple_ipadmini_4.png', 14260000, 'Tặng Tai Nghe IPhone 5 Chính Hãng ( Trị Giá 380.000đ).\r\nKhi Khách Hàng Mua Sản Phẩm cùng với : Bao Da + Dán Màn Hình.\r\n(Khuyến mãi áp dụng khi mua: Ipad + Bao da + Dán màn hình).\r\nChỉ áp dụng cho sản phẩm Ipad mới 100%.', 2, 'Tablet', 'Apple', 1),
(29, 'Apple iPad Mini 4 4G 128GB', 'apple_ipadmini_4.png', 16860000, 'Tặng Tai Nghe IPhone 5 Chính Hãng ( Trị Giá 380.000đ).\r\nKhi Khách Hàng Mua Sản Phẩm cùng với : Bao Da + Dán Màn Hình.\r\n(Khuyến mãi áp dụng khi mua: Ipad + Bao da + Dán màn hình).\r\nChỉ áp dụng cho sản phẩm Ipad mới 100%.', 2, 'Tablet', 'Apple', 1),
(30, 'Apple iPad Mini 4 WiFi 16GB', 'apple_ipadmini_4.png', 9360000, 'Tặng Tai Nghe IPhone 5 Chính Hãng ( Trị Giá 380.000đ).\r\nKhi Khách Hàng Mua Sản Phẩm cùng với : Bao Da + Dán Màn Hình.\r\n(Khuyến mãi áp dụng khi mua: Ipad + Bao da + Dán màn hình).\r\nChỉ áp dụng cho sản phẩm Ipad mới 100%.', 2, 'Tablet', 'Apple', 1),
(31, 'Apple iPad Mini 4 WiFi 64GB', 'apple_ipadmini_4.png', 11360000, 'Tặng Tai Nghe IPhone 5 Chính Hãng ( Trị Giá 380.000đ).\r\nKhi Khách Hàng Mua Sản Phẩm cùng với : Bao Da + Dán Màn Hình.\r\n(Khuyến mãi áp dụng khi mua: Ipad + Bao da + Dán màn hình).\r\nChỉ áp dụng cho sản phẩm Ipad mới 100%.', 2, 'Tablet', 'Apple', 1),
(32, 'Apple iPad Mini 4 WiFi 128GB', 'apple_ipadmini_4.png', 13360000, 'Tặng Tai Nghe IPhone 5 Chính Hãng ( Trị Giá 380.000đ).\r\nKhi Khách Hàng Mua Sản Phẩm cùng với : Bao Da + Dán Màn Hình.\r\n(Khuyến mãi áp dụng khi mua: Ipad + Bao da + Dán màn hình).\r\nChỉ áp dụng cho sản phẩm Ipad mới 100%.', 2, 'Tablet', 'Apple', 1),
(33, 'Apple iPad Air 2 4G 16GB', 'apple_ipadair2.png', 11760000, 'Tặng Tai Nghe IPhone 5 Chính Hãng ( Trị Giá 380.000đ).\r\nKhi Khách Hàng Mua Sản Phẩm cùng với : Bao Da + Dán Màn Hình.\r\n(Khuyến mãi áp dụng khi mua: Ipad + Bao da + Dán màn hình).\r\nChỉ áp dụng cho sản phẩm Ipad mới 100%.', 2, 'Tablet', 'Apple', 1),
(34, 'Apple iPad Air 2 4G 64GB', 'apple_ipadair2.png', 13060000, 'Tặng Tai Nghe IPhone 5 Chính Hãng ( Trị Giá 380.000đ).\r\nKhi Khách Hàng Mua Sản Phẩm cùng với : Bao Da + Dán Màn Hình.\r\n(Khuyến mãi áp dụng khi mua: iPad + Bao da + Dán màn hình).\r\nChỉ áp dụng cho sản phẩm iPad mới 100%.', 2, 'Tablet', 'Apple', 1),
(35, 'Apple iPad Air 2 4G 128GB', 'apple_ipadair2.png', 15860000, 'Tặng Tai Nghe IPhone 5 Chính Hãng ( Trị Giá 380.000đ).\r\nKhi Khách Hàng Mua Sản Phẩm cùng với : Bao Da + Dán Màn Hình.\r\n(Khuyến mãi áp dụng khi mua: iPad + Bao da + Dán màn hình).\r\nChỉ áp dụng cho sản phẩm iPad mới 100%.\r\n', 2, 'Tablet', 'Apple', 1),
(36, 'Apple The New Macbook - MJY42 (Gray)', 'apple_macbook.png', 32160000, 'Máy mới 100%, nguyên seal, chưa Active.\r\n01 đổi 01 trong 03 ngày đầu\r\nPhụ kiện bảo hành 30 ngày.\r\nMàn hình và cảm ứng bảo hành 01 tháng.\r\nBộ phận khác bảo hành 12 tháng.\r\nPhụ kiện bao gồm: dây nguồn, sách hướng dẫn, thùng máy.', 3, 'Laptop', 'Apple', 1),
(37, 'Apple The New Macbook - MF855 (Sliver)', 'apple_macbook.png', 26860000, 'Máy mới 100%, nguyên seal, chưa Active.\r\n01 đổi 01 trong 03 ngày đầu\r\nPhụ kiện bảo hành 30 ngày.\r\nMàn hình và cảm ứng bảo hành 01 tháng.\r\nBộ phận khác bảo hành 12 tháng.\r\nPhụ kiện bao gồm: dây nguồn, sách hướng dẫn, thùng máy.', 3, 'Laptop', 'Apple', 1),
(38, 'Apple Macbook Pro 2015 - MJLT2', 'apple_macbook_pro.png', 49360000, 'Máy mới 100%, nguyên seal, chưa Active.\r\n01 đổi 01 trong 03 ngày đầu\r\nPhụ kiện bảo hành 30 ngày.\r\nMàn hình và cảm ứng bảo hành 01 tháng.\r\nBộ phận khác bảo hành 12 tháng.\r\nPhụ kiện bao gồm: dây nguồn, sách hướng dẫn, thùng máy.', 3, 'Laptop', 'Apple', 1),
(39, 'Apple Macbook Pro 2015 - MF841', 'apple_macbook_pro.png', 36260000, 'Máy mới 100%, nguyên seal, chưa Active.\r\n01 đổi 01 trong 03 ngày đầu\r\nPhụ kiện bảo hành 30 ngày.\r\nMàn hình và cảm ứng bảo hành 01 tháng.\r\nBộ phận khác bảo hành 12 tháng.\r\nPhụ kiện bao gồm: dây nguồn, sách hướng dẫn, thùng máy.', 3, 'Laptop', 'Apple', 1),
(40, 'Apple Macbook Air 2015 - MJVG2', 'apple_macbook_air.png', 24160000, 'Máy mới 100%, nguyên seal, chưa Active.\r\n01 đổi 01 trong 03 ngày đầu\r\nPhụ kiện bảo hành 30 ngày.\r\nMàn hình và cảm ứng bảo hành 01 tháng.\r\nBộ phận khác bảo hành 12 tháng.\r\nPhụ kiện bao gồm: dây nguồn, sách hướng dẫn, thùng máy.', 3, 'Laptop', 'Apple', 1),
(41, 'Apple Macbook Pro 2015 - MF839', 'apple_macbook_pro.png', 26360000, 'Máy mới 100%, nguyên seal, chưa Active.\r\n01 đổi 01 trong 03 ngày đầu\r\nPhụ kiện bảo hành 30 ngày.\r\nMàn hình và cảm ứng bảo hành 01 tháng.\r\nBộ phận khác bảo hành 12 tháng.\r\nPhụ kiện bao gồm: dây nguồn, sách hướng dẫn, thùng máy.', 3, 'Laptop', 'Apple', 1),
(42, 'Apple Macbook Air 2015 - MJVP2', 'apple_macbook_air.png', 22060000, 'Máy mới 100%, nguyên seal, chưa Active.\r\n01 đổi 01 trong 03 ngày đầu\r\nPhụ kiện bảo hành 30 ngày.\r\nMàn hình và cảm ứng bảo hành 01 tháng.\r\nBộ phận khác bảo hành 12 tháng.\r\nPhụ kiện bao gồm: dây nguồn, sách hướng dẫn, thùng máy.', 3, 'Laptop', 'Apple', 1),
(43, 'Apple 60W MagSafe Power Adapter', 'magesafe260w.png', 960000, 'Mới 100%, nguyên hộp, nguyên seal.\r\nBảo hành 30 ngày (1 đổi 1) ', 4, 'Phụ kiện', 'Apple', 1),
(44, 'MagSafe To MagSafe 2 Converter', '', 190000, 'Mới 100%, nguyên hộp, nguyên seal.\r\nBảo hành 30 ngày (1 đổi 1)', 4, 'Phụ kiện', 'Apple', 1),
(45, 'Apple 85W MagSafe Power Adapter', 'magesafe260w.jpg', 1230000, 'Mới 100%, nguyên hộp, nguyên seal.\r\nBảo hành 30 ngày (1 đổi 1) ', 4, 'Phụ kiện', 'Apple', 1),
(46, 'Camera Connection Kit', '', 610000, 'Mới 100%, nguyên hộp, nguyên seal.', 4, 'Phụ kiện', 'Apple', 1),
(47, 'Lightning Digital AV Adapter', '', 890000, 'Mới 100%, nguyên hộp, nguyên seal.\r\nBảo hành 30 ngày (1 đổi 1)', 4, 'Phụ kiện', 'Apple', 1),
(48, 'Tai nghe iPhone 5 Original (Fullbox)', '', 560000, 'Mới 100%, nguyên hộp, nguyên seal.\r\nBảo hành 3 tháng 1 đổi 1', 4, 'Phụ kiện', 'Apple', 1),
(49, 'Apple TV Gen 3', '', 2000000, 'Máy mới 100% nguyên seal, chưa kích hoạt.\r\n- Phụ kiện gồm: Cáp nguồn, điều khiển từ xa.', 4, 'Phụ kiện', 'Apple', 1),
(50, 'Apple Magic Mouse', '', 2000000, 'Mới 100% nguyên seal.', 4, 'Phụ kiện', 'Apple', 1),
(51, 'Cáp chuyển iPhone 4 ra HDMI (MD098ZMA)', '', 560000, 'Sử dụng cho: Iphone 4', 4, 'Phụ kiện', 'Apple', 1);

-- --------------------------------------------------------

--
-- Table structure for table `producttype`
--

CREATE TABLE IF NOT EXISTS `producttype` (
  `TypeId` int(11) NOT NULL,
  `TypeName` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `producttype`
--

INSERT INTO `producttype` (`TypeId`, `TypeName`) VALUES
(1, 'SMART PHONE'),
(2, 'TABLET'),
(3, 'LAPTOP'),
(4, 'PHỤ KIỆN'),
(5, 'TIN TỨC');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `UserID` int(12) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Avatar` varchar(50) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Phone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `brandproduct`
--
ALTER TABLE `brandproduct`
  ADD PRIMARY KEY (`IdBrand`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`ContactID`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `PKMA_ID` (`ProductID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD UNIQUE KEY `Order_ID` (`OrderID`),
  ADD KEY `Order_ID_2` (`OrderID`),
  ADD KEY `User_ID` (`UserID`);

--
-- Indexes for table `productdetail`
--
ALTER TABLE `productdetail`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `TypeId` (`TypeId`),
  ADD KEY `IdBrand` (`IdBrand`);

--
-- Indexes for table `producttype`
--
ALTER TABLE `producttype`
  ADD PRIMARY KEY (`TypeId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(8) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `brandproduct`
--
ALTER TABLE `brandproduct`
  MODIFY `IdBrand` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `ContactID` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `OrderID` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductID` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(12) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `orders` (`OrderID`),
  ADD CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `productdetail`
--
ALTER TABLE `productdetail`
  ADD CONSTRAINT `productdetail_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `products` (`ProductID`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`TypeId`) REFERENCES `producttype` (`TypeId`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`IdBrand`) REFERENCES `brandproduct` (`IdBrand`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

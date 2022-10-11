-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 11, 2022 at 08:33 AM
-- Server version: 5.5.68-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quatestgialai_vn_`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created` date DEFAULT '0000-00-00',
  `created_by` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `created`, `created_by`, `status`) VALUES
(13, 'NƯỚC UỐNG ĐÓNG CHAI, NƯỚC KHOÁNG THIÊN NHIÊN ĐÓNG CHAI', '0000-00-00', NULL, 1),
(14, 'NƯỚC ĐÁ DÙNG LIỀN', '1900-01-01', NULL, 1),
(15, 'NƯỚC SINH HOẠT', '1900-01-02', NULL, 1),
(16, 'NƯỚC DƯỚI ĐẤT', '1900-01-03', NULL, 1),
(17, 'NƯỚC MẶT', '1900-01-04', NULL, 1),
(18, 'NƯỚC THẢI', '1900-01-05', NULL, 1),
(19, 'CHÈ CÁC LOẠI', '1900-01-06', NULL, 1),
(20, 'CÀ PHÊ BỘT', '1900-01-07', NULL, 1),
(21, 'CÀ PHÊ HẠT RANG', '1900-01-08', NULL, 1),
(22, 'THỰC PHẨM', '1900-01-09', NULL, 1),
(23, 'ĐẤT', '1900-01-10', NULL, 1),
(24, 'PHÂN URÊ', '1900-01-11', NULL, 1),
(25, 'PHÂN BÓN HỖN HỢP NPK', '1900-01-12', NULL, 1),
(26, 'PHÂN BÓN', '1900-01-13', NULL, 1),
(27, 'KHÔNG KHÍ XUNG QUANH', '1900-01-14', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chiso`
--

CREATE TABLE `chiso` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `method` int(11) NOT NULL,
  `qc` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `chiso` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chiso`
--

INSERT INTO `chiso` (`id`, `category`, `method`, `qc`, `chiso`, `status`) VALUES
(39, 23, 254, 'QCVD112', '25', 1),
(40, 18, 201, 'QCVD112', '25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chitieu`
--

CREATE TABLE `chitieu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `donvi` text COLLATE utf8_unicode_ci NOT NULL,
  `method` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `result` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quydinh` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `tenmau` int(11) NOT NULL,
  `machitieu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitieu`
--

INSERT INTO `chitieu` (`id`, `name`, `note`, `mass`, `price`, `donvi`, `method`, `result`, `quydinh`, `status`, `tenmau`, `machitieu`) VALUES
(800, 'Bào tử kỵ khí sinh H2S', '(1)(4)', 'mg/L', 150000, '', 'TCVN 6191:1996', 'bình thường', '', 0, 199, 759),
(801, 'Pseudomonas aeruginosa', '(1)(4)', 'mg/L', 150000, '', 'TCVN 8881:2011', 'bình thường', '', 0, 199, 757),
(802, 'Escherichiacoli (E.coli)', '(1)(4)', 'mg/L', 150000, '', 'ISO 9308-1:2014', 'bình thường', '', 0, 199, 756),
(880, 'Bào tử kỵ khí sinh H2S', '(1)(4)', 'mg/L', 150000, '', 'TCVN 6191:1996', 'bình thường', '', 0, 200, 759),
(881, 'Pseudomonas aeruginosa', '(1)(4)', 'mg/L', 150000, '', 'TCVN 8881:2011', 'bình thường', '', 0, 200, 757),
(882, 'Escherichiacoli (E.coli)', '(1)(4)', 'mg/L', 150000, '', 'ISO 9308-1:2014', 'bình thường', '', 0, 200, 756),
(883, 'Bào tử kỵ khí sinh H2S', '(1)(4)', 'mg/L', 150000, '', 'TCVN 6191:1996', 'bình thường', '', 0, 200, 34),
(917, 'Coliform tổng', '(1)(4)', 'mg/L', 150000, '', 'ISO 9308-1:2014', 'bình thường', '', 0, 201, 809),
(918, 'Escherichiacoli (E.coli)', '(1)(4)', 'mg/L', 150000, '', 'ISO 9308-1:2014', 'bình thường', '', 0, 201, 808),
(927, 'Escherichiacoli (E.coli)', '(1)', 'CFU/250ml', 150000, '', 'ISO 9308-1:2014', 'bình thường', '', 0, 202, 926),
(928, 'Escherichiacoli (E.coli)', '(1)', 'CFU/250ml', 150000, '', 'ISO 9308-1:2014', 'bình thường', '', 0, 202, 925),
(929, 'Escherichiacoli (E.coli)', '(1)', 'CFU/250ml', 150000, '', 'ISO 9308-1:2014', 'bình thường', '', 0, 202, 924),
(930, 'Escherichiacoli (E.coli)', '(1)(4)', 'mg/L', 150000, '', 'ISO 9308-1:2014', 'bình thường', '', 0, 202, 923),
(931, 'Coliform tổng', '(1)(4)', 'mg/L', 150000, '', 'ISO 9308-1:2014', 'bình thường', '', 0, 202, 922),
(932, 'Độ ẩm', '(1)', '%', 100000, '', 'TCVN 4048:2011', 'bình thường', '', 0, 203, 255),
(934, 'pH (KCl, H2O)', '(1)', '-', 100000, '', 'TCVN 5979:2007', 'bình thường', '', 0, 203, 254),
(935, 'Escherichiacoli (E.coli)', '(1)(4)', 'CFU/250ml', 150000, '', 'ISO 9308-1:2014', 'bình thường', '', 0, 203, 65),
(936, 'Liên cầu phân Faecal Streptococci', '(1)', 'CFU/250ml', 150000, '', 'TCVN 6189-2:2009', 'bình thường', '', 0, 202, 100);

-- --------------------------------------------------------

--
-- Table structure for table `code`
--

CREATE TABLE `code` (
  `id` int(11) NOT NULL,
  `name` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `code`
--

INSERT INTO `code` (`id`, `name`, `ten`, `status`) VALUES
(1, '28:2010/BTNM5', '', 1),
(2, '8-2:2011/BYT', '', 1),
(3, '8-1:2011/BYT', '', 1),
(4, 'QCVN 1-1:2018/BYT', ' CHẤT LƯỢNG NƯỚC SẠCH SỬ DỤNG CHO MỤC ĐÍCH SINH HOẠT', 1),
(5, '02:2009/BYT', '', 1),
(6, '06-1:2010/BYT', '', 1),
(7, '08-mt:2015/BTNMT', '', 1),
(8, '14:2008/BTNMT', '', 1),
(9, 'QCVN 02:2009/BYT', 'QUY CHUẨN KỸ THUẬT QUỐC GIA VỀ CHẤT LƯỢNG NƯỚC SINH HOẠT ', 1),
(10, 'QCVN6-1:2010/BYT', 'QCVN6-1:2010/BYT', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mauchitietchitieu`
--

CREATE TABLE `mauchitietchitieu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `donvi` text COLLATE utf8_unicode_ci NOT NULL,
  `method` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `result` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quydinh` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `tenmau` int(11) NOT NULL,
  `machitieu` int(11) NOT NULL,
  `mamau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mauchitietchitieu`
--

INSERT INTO `mauchitietchitieu` (`id`, `name`, `note`, `mass`, `price`, `donvi`, `method`, `result`, `quydinh`, `status`, `tenmau`, `machitieu`, `mamau`) VALUES
(10, 'Bào tử kỵ khí sinh H2S', '(1)(4)', 'mg/L', 150000, '', 'TCVN 6191:1996', 'bình thường', '', 0, 759, 199, 11),
(11, 'Pseudomonas aeruginosa', '(1)(4)', 'mg/L', 150000, '', 'TCVN 8881:2011', 'bình thường', '', 0, 757, 199, 11),
(12, 'Escherichiacoli (E.coli)', '(1)(4)', 'mg/L', 150000, '', 'ISO 9308-1:2014', 'bình thường', '', 0, 756, 199, 11),
(13, 'Coliform tổng', '(1)(4)', 'mg/L', 150000, '', 'ISO 9308-1:2014', 'bình thường', '', 0, 809, 200, 12),
(14, 'Escherichiacoli (E.coli)', '(1)(4)', 'mg/L', 150000, '', 'ISO 9308-1:2014', 'bình thường', '', 0, 808, 200, 12),
(15, 'Escherichiacoli (E.coli)', '(1)', 'CFU/250ml', 150000, '', 'ISO 9308-1:2014', 'bình thường', '', 0, 926, 202, 13),
(16, 'Escherichiacoli (E.coli)', '(1)', 'CFU/250ml', 150000, '', 'ISO 9308-1:2014', 'bình thường', '', 0, 925, 202, 13),
(17, 'Escherichiacoli (E.coli)', '(1)', 'CFU/250ml', 150000, '', 'ISO 9308-1:2014', 'bình thường', '', 0, 924, 202, 13),
(18, 'Escherichiacoli (E.coli)', '(1)(4)', 'mg/L', 150000, '', 'ISO 9308-1:2014', 'bình thường', '', 0, 923, 202, 13),
(19, 'Coliform tổng', '(1)(4)', 'mg/L', 150000, '', 'ISO 9308-1:2014', 'bình thường', '', 0, 922, 202, 13),
(20, 'Escherichiacoli (E.coli)', '(1)', 'CFU/250ml', 150000, '', 'ISO 9308-1:2014', 'bình thường', '', 0, 926, 202, 14);

-- --------------------------------------------------------

--
-- Table structure for table `mauchitieu`
--

CREATE TABLE `mauchitieu` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mauchitieu`
--

INSERT INTO `mauchitieu` (`id`, `name`) VALUES
(11, 'Mẫu 2'),
(12, 'Mẫu 1'),
(13, 'Mẫu 3');

-- --------------------------------------------------------

--
-- Table structure for table `mauthunghiem`
--

CREATE TABLE `mauthunghiem` (
  `id` int(11) NOT NULL,
  `com` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `macode` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `buyer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tax` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `date` date NOT NULL,
  `createdate` date NOT NULL,
  `status` int(11) NOT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ketluan` int(11) NOT NULL,
  `tentieuchuan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaytraketqua` date NOT NULL,
  `sobankq` int(11) NOT NULL,
  `nhanketqua` int(11) NOT NULL,
  `giaonhanmau` int(11) NOT NULL,
  `phithunghiem` int(11) NOT NULL,
  `khachhangtratruoc` int(11) NOT NULL,
  `ngaydukien` date NOT NULL,
  `ngaychuyenmau` date NOT NULL,
  `nguoichuyenmau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nguoinhanmau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaytrakqnt` date NOT NULL,
  `tinhtrangmau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tailieukemtheo` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `ngaychuyenketqua` date NOT NULL,
  `ngaynhanketqua` date NOT NULL,
  `nguoinhanketqua` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sum` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mauthunghiem`
--

INSERT INTO `mauthunghiem` (`id`, `com`, `macode`, `address`, `buyer`, `role`, `tax`, `phone`, `fax`, `email`, `number`, `date`, `createdate`, `status`, `user`, `ketluan`, `tentieuchuan`, `ngaytraketqua`, `sobankq`, `nhanketqua`, `giaonhanmau`, `phithunghiem`, `khachhangtratruoc`, `ngaydukien`, `ngaychuyenmau`, `nguoichuyenmau`, `nguoinhanmau`, `ngaytrakqnt`, `tinhtrangmau`, `ghichu`, `tailieukemtheo`, `ngaychuyenketqua`, `ngaynhanketqua`, `nguoinhanketqua`, `sum`) VALUES
(64, 'lê bá dũng', 'dungleba16@gmail.com', 'hcm', 'ĐÀo Thị Minh Chiên', '21312', '822803', '0941172223', '323', 'dungleba16@gmail.com', 0, '2021-02-01', '2022-02-06', 0, '', 0, '', '2022-02-06', 0, 0, 0, 0, 12, '2022-02-06', '0000-00-00', '', 'Vinh', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', 32323),
(65, 'lê bá dũng', 'dungleba16@gmail.com', 'hcm', '', '21312', '3', '0941172223', '323', '', 0, '2021-06-22', '2022-02-06', 0, '', 0, '', '2022-02-06', 0, 0, 0, 0, 0, '2022-02-06', '0000-00-00', '', 'Trương Minh Nhân', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', NULL),
(66, 'lê bá dũng', 'dungleba16@gmail.com', 'hcm', 'ĐÀo Thị Minh Chiên', '21312', '822803', '0941172223', '323', 'dungleba16@gmail.com', 0, '2021-06-07', '2022-02-09', 2, '', 0, '', '2022-02-09', 0, 0, 0, 0, 0, '2022-02-09', '0000-00-00', 'Trương Minh Nhân', 'Vinh', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', 0),
(67, 'lê bá dũng', 'dungleba16@gmail.com', 'hcm', '', '21312', '3', '0941172223', '323', '', 0, '2021-06-07', '2022-03-06', 0, '', 1, 'demo3312312', '2022-03-06', 43, 0, 0, 0, 43321, '2022-03-06', '0000-00-00', '', 'Vinh', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', 32323),
(68, 'công ty TNHH cao scu...', '391', 'tổ 2 - yên thế', '', '', '', '0981244', '', '', 0, '2022-10-05', '2022-10-06', 2, '', 0, '', '2022-10-06', 0, 0, 0, 0, 0, '2022-10-06', '0000-00-00', 'Vinh', 'Vinh', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `method`
--

CREATE TABLE `method` (
  `id` int(11) NOT NULL,
  `chitieu` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `method` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `conditions` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `method`
--

INSERT INTO `method` (`id`, `chitieu`, `name`, `method`, `mass`, `conditions`, `price`, `note`, `status`, `category`) VALUES
(1, 0, 'Màu sắc', 'SOP.02-11', 'Pt-Co', '', 70000, '(1)(4)', 1, 13),
(2, 0, 'Mùi, vị', 'SOP.02-10', '-', '', 70000, '', 1, 13),
(3, 0, 'Độ đục', 'SOP.02-12', 'NTU', '', 70000, '(1)(4)', 1, 13),
(4, 0, 'pH', 'TCVN 6492:2011', '-', '', 70000, '(1)(4)', 1, 13),
(5, 0, ' Hàm lượng độ cứng toàn phần', 'TCVN 6224:1996', 'mg/L', '', 115000, '(1)(4)', 1, 13),
(6, 0, ' Hàm lượng cặn hòa tan (TDS)', 'TCVN 6625:2000', 'mg/L', '', 115000, '(1)(4)', 1, 13),
(7, 0, 'Hàm lượng cặn toàn phần (TS)', 'TCVN 6625:2000', 'mg/L', '', 115000, '', 1, 13),
(8, 0, 'Hàm lượng cặn lơ lửng (TSS)', 'TCVN 6625:2000', 'mg/L', '', 115000, '(1)(4)', 1, 13),
(9, 0, '  Hàm lượng Nitrit (NO2-)', 'TCVN 6178:1996', 'mg/L', '', 115000, '(1)(4)', 1, 13),
(10, 0, '  Hàm lượng Nitrat (NO3-)', 'TCVN 6180:1996', 'mg/L', '', 115000, '(1)(4)', 1, 13),
(11, 0, '  Hàm lượng sắt tổng (Fe)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)(4)', 1, 13),
(12, 0, ' Hàm lượng clorua (Cl-)', 'TCVN 6194:1996', 'mg/L', '', 115000, '(1)(4)', 1, 13),
(13, 0, ' Hàm lượng Sunphat (SO42-)', 'TCVN 6200:1996', 'mg/L', '', 115000, '(1)(4)', 1, 13),
(14, 0, ' Hàm lượng Amoni', 'TCVN 5988:1995', 'mg/L', '', 140000, '(1)(4)', 1, 13),
(15, 0, 'Chỉ số Pecmanganat', 'TCVN 6186:1996', 'mg/L', '', 115000, '(1)(4)', 1, 13),
(16, 0, 'Clo dư', 'SOP.02-13', 'mg/L', '', 115000, '', 1, 13),
(17, 0, 'Hàm lượng Florua (F-)', 'SOP.02-14', 'mg/L', '', 115000, '(1)(4)', 1, 13),
(18, 0, 'Hàm lượng Đồng (Cu)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)(4)', 1, 13),
(19, 0, 'Hàm lượng Kẽm (Zn)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)(4)', 1, 13),
(20, 0, 'Hàm lượng Mangan (Mn)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)(4)', 1, 13),
(21, 0, ' Hàm lượng Kali (K)', 'TCVN 6196-3:2000', 'mg/L', '', 150000, '(1)(4)', 1, 13),
(22, 0, ' Hàm lượng Natri (Na)', 'TCVN 6196-3:2000', 'mg/L', '', 150000, '(1)(4)', 1, 13),
(23, 0, 'Hàm lượng Niken (Ni)', 'SMEWW 3111B: 2017', 'mg/L', '', 150000, '-1', 1, 13),
(24, 0, 'Hàm lượng Crôm (Cr)', 'SMEWW 3111B: 2017', 'mg/L', '', 150000, '(1)', 1, 13),
(25, 0, ' Hàm lượng Nhôm (Al)', 'SMEWW 3500 (Al)-B- 2017', 'mg/L', '', 150000, '(1)(4)', 1, 13),
(26, 0, ' Hàm lượng Chì (Pb)', 'SMEWW 3113B:2017', 'mg/L', '', 150000, '(1)(4)', 1, 13),
(27, 0, 'Hàm lượng Asen (As)', 'SMEWW 3113B:2017', 'mg/L', '', 150000, '(1)(4)', 1, 13),
(28, 0, 'Hàm lượng Cadimi (Cd)', 'SMEWW 3113B:2017', 'mg/L', '', 150000, '(1)(4)', 1, 13),
(29, 0, 'Hàm lượng Thủy ngân (Hg)', 'SMEWW 3112B:2017', 'mg/L', '', 220000, '(1)(4)', 1, 13),
(30, 0, 'Coliform tổng', 'ISO 9308-1:2014', 'mg/L', '', 150000, '(1)(4)', 1, 13),
(31, 0, 'Escherichiacoli (E.coli)', 'ISO 9308-1:2014', 'mg/L', '', 150000, '(1)(4)', 1, 13),
(32, 0, 'Liên cầu phân Faecal Streptococci', 'TCVN 6189-2:2009', 'mg/L', '', 150000, '(1)(4)', 1, 13),
(33, 0, 'Pseudomonas aeruginosa', 'TCVN 8881:2011', 'mg/L', '', 150000, '(1)(4)', 1, 13),
(34, 0, 'Bào tử kỵ khí sinh H2S', 'TCVN 6191:1996', 'mg/L', '', 150000, '(1)(4)', 1, 13),
(35, 0, 'Màu sắc', 'SOP.02-11', 'Pt-Co', '', 70000, '(1)(4)', 1, 14),
(36, 0, 'Mùi, vị', 'SOP.02-10', '-', '', 70000, '', 1, 14),
(37, 0, 'Độ đục', 'SOP.02-12', 'NTU', '', 70000, '(1)(4)', 1, 14),
(38, 0, 'pH', 'TCVN 6492:2011', '-', '', 70000, '(1)(4)', 1, 14),
(39, 0, 'Hàm lượng độ cứng ', 'TCVN 6224:1996', 'mg/L', '', 115000, '(1)(4)', 1, 14),
(40, 0, 'Hàm lượng cặn hòa tan (TDS)', 'TCVN 6625:2000', 'mg/L', '', 115000, '(1)(4)', 1, 14),
(41, 0, 'Hàm lượng cặn toàn phần (TS)', 'TCVN 6625:2000', 'mg/L', '', 115000, '', 1, 14),
(42, 0, 'Hàm lượng cặn lơ lửng (TSS)', 'TCVN 6625:2000', 'mg/L', '', 115000, '(1)(4)', 1, 14),
(43, 0, 'Hàm lượng Nitrit (NO2-)', 'TCVN 6178:1996', 'mg/L', '', 115000, '(1)(4)', 1, 14),
(44, 0, 'Hàm lượng Nitrat (NO3-)', 'TCVN 6180:1996', 'mg/L', '', 115000, '(1)(4)', 1, 14),
(45, 0, 'Hàm lượng sắt tổng (Fe)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)(4)', 1, 14),
(46, 0, 'Hàm lượng clorua (Cl-)', 'TCVN 6194:1996', 'mg/L', '', 115000, '(1)(4)', 1, 14),
(47, 0, 'Hàm lượng Sunphat (SO42-)', 'TCVN 6200:1996', 'mg/L', '', 115000, '(1)(4)', 1, 14),
(48, 0, ' Hàm lượng Amoni', 'TCVN 5988:1995', 'mg/L', '', 140000, '(1)(4)', 1, 14),
(49, 0, 'Chỉ số Pecmanganat', 'TCVN 6186:1996', 'mg/L', '', 115000, '(1)(4)', 1, 14),
(50, 0, 'Clo dư', 'SOP.02-13', 'mg/L', '', 115000, '(4)', 1, 14),
(51, 0, 'Hàm lượng Florua (F-)', 'SOP.02-14', 'mg/L', '', 115000, '(1)(4)', 1, 14),
(52, 0, 'Hàm lượng Đồng (Cu)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)(4)', 1, 14),
(53, 0, 'Hàm lượng Kẽm (Zn)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)(4)', 1, 14),
(54, 0, 'Hàm lượng Mangan (Mn)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)(4)', 1, 14),
(55, 0, 'Hàm lượng Kali (K)', 'TCVN 6196-3:2000', 'mg/L', '', 150000, '(1)(4)', 1, 14),
(56, 0, 'Hàm lượng Natri (Na)', 'TCVN 6196-3:2000', 'mg/L', '', 150000, '(1)(4)', 1, 14),
(57, 0, 'Hàm lượng Niken (Ni)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 14),
(58, 0, 'Hàm lượng Crôm (Cr)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 14),
(59, 0, 'Hàm lượng Chì (Pb)', 'SMEWW 3113B:2017', 'mg/L', '', 150000, '(1)(4)', 1, 14),
(60, 0, 'Hàm lượng Nhôm (Al)', 'SMEWW 3500 (Al)-B- 2017', 'mg/L', '', 150000, '(1)(4)', 1, 14),
(61, 0, 'Hàm lượng Asen (As)', 'SMEWW 3113B:2017', 'mg/L', '', 150000, '(1)(4)', 1, 14),
(62, 0, 'Hàm lượng Cadimi (Cd)', 'SMEWW 3113B:2017', 'mg/L', '', 150000, '(1)(4)', 1, 14),
(63, 0, 'Hàm lượng Thủy ngân (Hg)', 'SMEWW 3112B:2017', 'mg/L', '', 220000, '(1)(4)', 1, 14),
(64, 0, 'Coliform tổng', 'ISO 9308-1:2014', 'CFU/250ml', '', 150000, '(1)(4)', 1, 14),
(65, 0, 'Escherichiacoli (E.coli)', 'ISO 9308-1:2014', 'CFU/250ml', '', 150000, '(1)(4)', 1, 14),
(66, 0, 'Liên cầu phân Faecal Streptococci', 'TCVN 6189-2:2009', 'CFU/250ml', '', 150000, '(1)(4)', 1, 14),
(67, 0, 'Pseudomonas aeruginosa', 'TCVN 8881:2011', 'CFU/250ml', '', 150000, '(1)(4)', 1, 14),
(68, 0, 'Bào tử kỵ khí sinh H2S', 'TCVN 6191:1996', 'CFU/50ml', '', 150000, '(1)(4)', 1, 14),
(69, 0, 'Màu sắc', 'SOP.02-11', 'Pt-Co', '', 70000, '(1)', 1, 15),
(70, 0, 'Mùi, vị', 'SOP.02-10', '-', '', 70000, '', 1, 15),
(71, 0, 'Độ đục', 'SOP.02-12', 'NTU', '', 70000, '(1)', 1, 15),
(72, 0, 'pH', 'TCVN 6492:2011', '-', '', 70000, '(1)', 1, 15),
(73, 0, 'Hàm lượng độ cứng ', 'TCVN 6224:1996', 'mg/L', '', 115000, '(1)', 1, 15),
(74, 0, 'Hàm lượng cặn hòa tan (TDS)', 'TCVN 6625:2000', 'mg/L', '', 115000, '(1)', 1, 15),
(75, 0, 'Hàm lượng cặn toàn phần (TS)', 'TCVN 6625:2000', 'mg/L', '', 115000, '', 1, 15),
(76, 0, 'Hàm lượng cặn lơ lửng (TSS)', 'TCVN 6625:2000', 'mg/L', '', 115000, '(1)', 1, 15),
(77, 0, 'Hàm lượng Nitrit (NO2-)', 'TCVN 6178:1996', 'mg/L', '', 115000, '(1)', 1, 15),
(78, 0, 'Hàm lượng Nitrat (NO3-)', 'TCVN 6180:1996', 'mg/L', '', 115000, '(1)', 1, 15),
(79, 0, 'Hàm lượng sắt tổng (Fe)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 15),
(80, 0, 'Hàm lượng clorua (Cl-)', 'TCVN 6194:1996', 'mg/L', '', 115000, '(1)', 1, 15),
(81, 0, 'Hàm lượng Sunphat (SO42-)', 'TCVN 6200:1996', 'mg/L', '', 115000, '(1)', 1, 15),
(82, 0, 'Hàm lượng Amoni', 'TCVN 5988:1995', 'mg/L', '', 140000, '(1)', 1, 15),
(83, 0, 'Chỉ số Pecmanganat', 'TCVN 6186:1996', 'mg/L', '', 115000, '(1)', 1, 15),
(84, 0, 'Clo dư', 'SOP.02-13', 'mg/L', '', 115000, '', 1, 15),
(85, 0, 'Hàm lượng Florua (F-)', 'SOP.02-14', 'mg/L', '', 115000, '(1)', 1, 15),
(86, 0, 'Hàm lượng Đồng (Cu)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 15),
(87, 0, 'Hàm lượng Kẽm (Zn)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 15),
(88, 0, 'Hàm lượng Mangan (Mn)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 15),
(89, 0, 'Hàm lượng Kali (K)', 'TCVN 6196-3:2000', 'mg/L', '', 150000, '(1)', 1, 15),
(90, 0, 'Hàm lượng Natri (Na)', 'TCVN 6196-3:2000', 'mg/L', '', 150000, '(1)', 1, 15),
(91, 0, 'Hàm lượng Niken (Ni)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 15),
(92, 0, 'Hàm lượng Crôm (Cr)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 15),
(93, 0, 'Hàm lượng Chì (Pb)', 'SMEWW 3113B:2017', 'mg/L', '', 150000, '(1)', 1, 15),
(94, 0, 'Hàm lượng Nhôm (Al)', 'SMEWW 3500 (Al)-B- 2017', 'mg/L', '', 150000, '(1)', 1, 15),
(95, 0, 'Hàm lượng Asen (As)', 'SMEWW 3113B:2017', 'mg/L', '', 150000, '(1)', 1, 15),
(96, 0, 'Hàm lượng Cadimi (Cd)', 'SMEWW 3113B:2017', 'mg/L', '', 150000, '(1)', 1, 15),
(97, 0, 'Hàm lượng Thủy ngân (Hg)', 'SMEWW 3112B:2017', 'mg/L', '', 220000, '(1)', 1, 15),
(98, 0, 'Coliform tổng', 'ISO 9308-1:2014', 'CFU/250ml', '', 150000, '(1)', 1, 15),
(99, 0, 'Escherichiacoli (E.coli)', 'ISO 9308-1:2014', 'CFU/250ml', '', 150000, '(1)', 1, 15),
(100, 0, 'Liên cầu phân Faecal Streptococci', 'TCVN 6189-2:2009', 'CFU/250ml', '', 150000, '(1)', 1, 15),
(101, 0, 'Pseudomonas aeruginosa', 'TCVN 8881:2011', 'CFU/250ml', '', 150000, '(1)', 1, 15),
(102, 0, 'Bào tử kỵ khí sinh H2S', 'TCVN 6191:1996', 'CFU/50ml', '', 150000, '(1)', 1, 15),
(103, 0, 'pH', 'TCVN 6492:2011', '-', '', 70000, '(1)', 1, 16),
(104, 0, 'Nhiệt độ', 'SMEWW 2550B:2017', '0C', '', 70000, '', 1, 16),
(105, 0, 'Hàm lượng Oxy hòa tan (DO)', 'SMEWW 5210B:2017', 'mg/L', '', 115000, '', 1, 16),
(106, 0, 'Độ đục', 'TCVN 6184:2008', 'NTU', '', 100000, '', 1, 16),
(107, 0, 'Hàm lượng độ cứng toàn phần', 'TCVN 6224:1996', 'mg/L', '', 100000, '(1)', 1, 16),
(108, 0, 'Hàm lượng cặn lơ lửng (TSS)', 'TCVN 6625:2000', 'mg/L', '', 115000, '(1)', 1, 16),
(109, 0, 'Chỉ số Pecmanganat', 'TCVN 6186:1996', 'mg/L', '', 115000, '(1)', 1, 16),
(110, 0, 'Nhu cầu oxy hóa học (COD)', 'SMEWW 5220C:2017', 'mg/L', '', 115000, '(1)', 1, 16),
(111, 0, 'Hàm lượng Nitrit (NO2-)', 'TCVN 6178:1996', 'mg/L', '', 115000, '(1)', 1, 16),
(112, 0, 'Hàm lượng Nitrat (NO3-)', 'SMEWW 4500-NO3-.E:2017', 'mg/L', '', 115000, '(1)', 1, 16),
(113, 0, ' Hàm lượng Photphat (PO43-)', 'TCVN 6202:2008', 'mg/L', '', 115000, '(1)', 1, 16),
(114, 0, ' Hàm lượng clorua (Cl-)', 'TCVN 6194:1996', 'mg/L', '', 115000, '(1)', 1, 16),
(115, 0, 'Hàm lượng Sunphat (SO42-)', 'TCVN 6200:1996', 'mg/L', '', 115000, '(1)', 1, 16),
(116, 0, 'Hàm lượng tổng chất rắn hòa tan (TDS)', 'SMEWW 2540C:2017', 'mg/L', '', 115000, '(1)', 1, 16),
(117, 0, 'Hàm lượng Kẽm (Zn)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 16),
(118, 0, 'Hàm lượng Mangan (Mn)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 16),
(119, 0, 'Hàm lượng Crôm (Cr)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 16),
(120, 0, 'Hàm lượng Niken (Ni)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 16),
(121, 0, 'Hàm lượng Chì (Pb)', 'SMEWW 3113B:2017', 'mg/L', '', 150000, '(1)', 1, 16),
(122, 0, 'Hàm lượng Asen (As)', 'SMEWW 3113B:2017', 'mg/L', '', 150000, '(1)', 1, 16),
(123, 0, 'Hàm lượng Cadimi (Cd)', 'SMEWW 3113B:2017', 'mg/L', '', 150000, '(1)', 1, 16),
(124, 0, 'Hàm lượng Thủy ngân (Hg)', 'SMEWW 3112B:2017', 'mg/L', '', 220000, '(1)', 1, 16),
(125, 0, 'Hàm lượng Đồng (Cu)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 16),
(126, 0, 'Hàm lượng Sắt (Fe)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 16),
(127, 0, 'Coliform tổng', 'TCVN 6187-2:1996', 'MPN/100ml', '', 150000, '(1)', 1, 16),
(128, 0, 'Coliform tổng', 'ISO 9308-1:2014', 'CFU/250ml', '', 150000, '(1)', 1, 16),
(129, 0, 'Escherichiacoli (E.coli)', 'TCVN 6187-2:1996', 'MPN/100ml', '', 150000, '(1)', 1, 16),
(130, 0, 'Hàm lượng Kali (K)', 'TCVN 6196-3:2000', 'mg/L', '', 150000, '', 1, 16),
(131, 0, 'Hàm lượng Natri (Na)', 'TCVN 6196-3:2000', 'mg/L', '', 150000, '', 1, 16),
(132, 0, 'Hàm lượng Nhôm (Al)', 'SMEWW 3500 (Al)-B- 2017', 'mg/L', '', 150000, '', 1, 16),
(133, 0, 'Màu sắc', 'SOP.02-11', 'Pt-Co', '', 70000, '', 1, 16),
(134, 0, 'Mùi, vị', 'SOP.02-10', '-', '', 70000, '', 1, 16),
(135, 0, 'Hàm lượng Florua (F-)', 'SOP.02-14', 'mg/L', '', 115000, '', 1, 16),
(136, 0, 'Chỉ số Pecmanganat', 'TCVN 6186:1996', 'mg/L', '', 115000, '(1)', 1, 16),
(137, 0, ' Hàm lượng Amoni', 'TCVN 5988:1995', 'mg/L', '', 140000, '(1)', 1, 16),
(138, 0, 'Tổng dầu mỡ', 'SMEWW 5520B:2017', 'mg/L', '', 250000, '', 1, 16),
(139, 0, 'Dầu mỡ khoáng', 'SMEWW 5520.B&F-2017', 'mg/L', '', 250000, '', 1, 16),
(140, 0, 'Dầu mỡ động thực vật', 'SMEWW 5520B:2017', 'mg/L', '', 500000, '', 1, 16),
(141, 0, 'pH', 'TCVN 6492:2011', '-', '', 70000, '(1)', 1, 17),
(142, 0, 'Nhiệt độ', 'SMEWW 2550B:2017', '0C', '', 100000, '', 1, 17),
(143, 0, 'Hàm lượng Oxy hòa tan (DO)', 'SMEWW 5210B:2017', 'mg/L', '', 115000, '(1)', 1, 17),
(144, 0, 'Độ đục', 'TCVN 6184:2008', 'NTU', '', 100000, '', 1, 17),
(145, 0, 'Hàm lượng độ cứng toàn phần', 'TCVN 6224:1996', 'mg/L', '', 100000, '(1)', 1, 17),
(146, 0, 'Hàm lượng cặn lơ lửng (TSS)', 'TCVN 6625:2000', 'mg/L', '', 115000, '(1)', 1, 17),
(147, 0, ' Hàm lượng tổng chất rắn hòa tan (TDS)', 'SMEWW 2540C:2017', 'mg/L', '', 115000, '(1)', 1, 17),
(148, 0, 'Nhu cầu oxy hóa học (COD)', 'SMEWW 5220C:2017', 'mg/L', '', 115000, '(1)', 1, 17),
(149, 0, 'Nhu cầu oxy sinh hóa (BOD)', 'SMEWW 5210B:2017', 'mg/L', '', 115000, '(1)', 1, 17),
(150, 0, 'Hàm lượng Nitrit (NO2-)', 'TCVN 6178:1996', 'mg/L', '', 115000, '(1)', 1, 17),
(151, 0, 'Hàm lượng Nitrat (NO3-)', 'SMEWW 4500-NO3-.E:2017', 'mg/L', '', 115000, '(1)', 1, 17),
(152, 0, 'Hàm lượng Photphat (PO43-)', 'TCVN 6202:2008', 'mg/L', '', 115000, '(1)', 1, 17),
(153, 0, 'Hàm lượng clorua (Cl-)', 'TCVN 6194:1996', 'mg/L', '', 115000, '(1)', 1, 17),
(154, 0, 'Hàm lượng Sunfat (SO42-)', 'TCVN 6200:1996', 'mg/L', '', 115000, '(1)', 1, 17),
(155, 0, 'Hàm lượng Kẽm (Zn)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 17),
(156, 0, 'Hàm lượng Mangan (Mn)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 17),
(157, 0, 'Hàm lượng Crôm (Cr)', 'SMEWW 3111B: 2017', 'mg/L', '', 150000, '(1)', 1, 17),
(158, 0, 'Hàm lượng Niken (Ni)', 'SMEWW 3111B: 2017', 'mg/L', '', 150000, '(1)', 1, 17),
(159, 0, 'Hàm lượng Chì (Pb)', 'SMEWW 3113B:2017', 'mg/L', '', 150000, '(1)', 1, 17),
(160, 0, 'Hàm lượng Asen (As)', 'SMEWW 3113B:2017', 'mg/L', '', 150000, '(1)', 1, 17),
(161, 0, 'Hàm lượng Cadimi (Cd)', 'SMEWW 3113B:2017', 'mg/L', '', 150000, '(1)', 1, 17),
(162, 0, 'Hàm lượng Thủy ngân (Hg)', 'SMEWW 3112B:2017', 'mg/L', '', 220000, '(1)', 1, 17),
(163, 0, 'Hàm lượng Đồng (Cu)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 17),
(164, 0, 'Hàm lượng Sắt (Fe)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 17),
(165, 0, 'Coliform tổng', 'TCVN 6187-2:1996', 'MPN/100ml', '', 150000, '(1)', 1, 17),
(166, 0, 'Escherichiacoli (E.coli)', 'TCVN 6187-2:1996', 'MPN/100ml', '', 150000, '(1)', 1, 17),
(167, 0, 'Hàm lượng Nitơ tổng số', 'TCVN 6638:2000', 'mg/L', '', 180000, '(1)', 1, 17),
(168, 0, 'Hàm lượng Amoni', 'TCVN 5988:1995', 'mg/L', '', 140000, '(1)', 1, 17),
(169, 0, 'Tổng dầu mỡ', 'SMEWW 5520B:2017', 'mg/L', '', 250000, '', 1, 17),
(170, 0, 'Dầu mỡ khoáng', 'SMEWW 5520.B&F-2017', 'mg/L', '', 250000, '', 1, 17),
(171, 0, 'Dầu mỡ động thực vật', 'SMEWW 5520B:2017', 'mg/L', '', 500000, '', 1, 17),
(172, 0, 'pH', 'TCVN 6492:2011', '-', '', 70000, '(1)', 1, 18),
(173, 0, 'Nhiệt độ', 'SMEWW 2550B:2017', '0C', '', 100000, '', 1, 18),
(174, 0, 'Hàm lượng cặn lơ lửng (TSS)', 'TCVN 6625:2000', 'mg/L', '', 115000, '(1)', 1, 18),
(175, 0, 'Nhu cầu oxy hóa học (COD)', 'SMEWW 5220C:2017', 'mg/L', '', 115000, '(1)', 1, 18),
(176, 0, 'Nhu cầu oxy sinh hóa (BOD5)', 'SMEWW 5210B:2017', 'mg/L', '', 115000, '(1)', 1, 18),
(177, 0, 'Hàm lượng Nitrat (NO3-)', 'SMEWW 4500-NO3-.E:2017', 'mg/L', '', 115000, '(1)', 1, 18),
(178, 0, 'Hàm lượng Photphat (PO43-)', 'TCVN 6202:2008', 'mg/L', '', 115000, '(1)', 1, 18),
(179, 0, 'Hàm lượng Tổng Photpho', 'TCVN 6202:2008', 'mg/L', '', 115000, '(1)', 1, 18),
(180, 0, 'Hàm lượng clorua (Cl-)', 'TCVN 6194:1996', 'mg/L', '', 115000, '(1)', 1, 18),
(181, 0, 'Hàm lượng Amoni', 'TCVN 5988:1995', 'mg/L', '', 140000, ' (1', 1, 18),
(182, 0, 'Hàm lượng Nitơ tổng số', 'TCVN 6638:2000', 'mg/L', '', 180000, '(1)', 1, 18),
(183, 0, 'Hàm lượng độ cứng toàn phần', 'TCVN 6224:1996', 'mg/L', '', 100000, '(1)', 1, 18),
(184, 0, 'Hàm lượng Nitrit (NO2-)', 'TCVN 6178:1996', 'mg/L', '', 115000, '(1)', 1, 18),
(185, 0, 'Hàm lượng tổng chất rắn hòa tan (TDS)', 'SMEWW 2540C:2017', 'mg/L', '', 115000, '(1)', 1, 18),
(186, 0, 'Hàm lượng Sunfat (SO42-)', 'TCVN 6200:1996', 'mg/L', '', 115000, '(1)', 1, 18),
(187, 0, 'Hàm lượng Kẽm (Zn)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 18),
(188, 0, 'Hàm lượng Mangan (Mn)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 18),
(189, 0, 'Hàm lượng Crôm (Cr)', 'SMEWW 3111B: 2017', 'mg/L', '', 150000, '(1)', 1, 18),
(190, 0, 'Hàm lượng Niken (Ni)', 'SMEWW 3111B: 2017', 'mg/L', '', 150000, '(1)', 1, 18),
(191, 0, 'Hàm lượng Chì (Pb)', 'SMEWW 3113B:2017', 'mg/L', '', 150000, '(1)', 1, 18),
(192, 0, 'Hàm lượng Asen (As)', 'SMEWW 3113B:2017', 'mg/L', '', 150000, '(1)', 1, 18),
(193, 0, 'Hàm lượng Cadimi (Cd)', 'SMEWW 3113B:2017', 'mg/L', '', 150000, '(1)', 1, 18),
(194, 0, 'Hàm lượng Thủy ngân (Hg)', 'SMEWW 3112B:2017', 'mg/L', '', 150000, '(1)', 1, 18),
(195, 0, 'Hàm lượng Đồng (Cu)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 18),
(196, 0, 'Hàm lượng Sắt (Fe)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 18),
(197, 0, 'Coliform tổng', 'TCVN 6187-2:1996', 'MPN/100ml', '', 150000, '(1)', 1, 18),
(198, 0, 'Escherichiacoli (E.coli)', 'TCVN 6187-2:1996', 'MPN/100ml', '', 150000, '(1)', 1, 18),
(199, 0, 'Hàm lượng Oxy hòa tan (DO)', 'SMEWW 5210B:2017', 'mg/L', '', 115000, '(1)', 1, 18),
(200, 0, 'Tổng dầu mỡ', 'SMEWW 5520B:2017', 'mg/L', '', 250000, '', 1, 18),
(201, 0, 'Dầu mỡ khoáng', 'SMEWW 5520.B&F-2017', 'mg/L', '', 250000, '', 1, 18),
(202, 0, 'Dầu mỡ động thực vật', 'SMEWW 5520B:2017', 'mg/L', '', 500000, '', 1, 18),
(203, 0, 'Trạng thái ', 'Cảm quan', '-', '', 70000, '', 1, 19),
(204, 0, 'Màu sắc', 'Cảm quan', '-', '', 70000, '', 1, 19),
(205, 0, 'Mùi vị', 'Cảm quan', '-', '', 70000, '', 1, 19),
(206, 0, 'Chất chiết trong nước', 'TCVN 5610:2007', '%', '', 130000, '(1)', 1, 19),
(207, 0, 'Tro tổng số', 'TCVN 5611:2007', '%', '', 120000, '(1)', 1, 19),
(208, 0, 'Tro tan trong nước', 'TCVN 5084:1990', '%', '', 120000, '', 1, 19),
(209, 0, 'Độ kiềm của tro tan trong nước ', 'TCVN 5085:1990', '%', '', 120000, '', 1, 19),
(210, 0, 'Tro không tan trong axit, % (m/m)', 'TCVN 5612 : 2007', '%', '', 120000, '(1)', 1, 19),
(211, 0, 'Hàm lượng As ', 'AOAC 986.15:2011', 'mg/L', '', 150000, '(1)(4)', 1, 19),
(212, 0, 'Hàm lượng Cd ', 'AOAC 999.11:2011', 'mg/L', '', 150000, '(1)(4)', 1, 19),
(213, 0, 'Hàm lượng Pb', 'AOAC 999.11:2011', 'mg/L', '', 150000, '(1)(4)', 1, 19),
(214, 0, 'Hàm lượng Hg ', 'AOAC 971.21:2012', 'mg/L', '', 150000, '(1)(4)', 1, 19),
(215, 0, ' Độ ẩm', 'TCVN 5613:2007', '%', '', 100000, '(1)', 1, 19),
(216, 0, ' Tạp chất sắt', 'TCVN 5614:1991', '%', '', 100000, '(1)', 1, 19),
(217, 0, ' Tạp chất lạ', 'TCVN 5615:1991', '%', '', 100000, '(1)', 1, 19),
(218, 0, 'Màu sắc', 'Cảm quan', '-', '', 70000, '', 1, 20),
(219, 0, 'Mùi vị', 'TCVN 5249:1990', '-', '', 70000, '', 1, 20),
(220, 0, 'Trạng thái', 'Cảm quan', '-', '', 70000, '', 1, 20),
(221, 0, 'Độ ẩm', 'TCVN 7035:2002', '%', '', 70000, '(1)', 1, 20),
(222, 0, 'Hàm lượng tro không tan trong acid', 'TCVN 5253:1990', '%', '', 130000, '(1)', 1, 20),
(223, 0, 'Hàm lượng tro tổng số', 'TCVN 5253:1990', '%', '', 130000, '(1)', 1, 20),
(224, 0, 'Tỉ lệ chất tan trong nước', 'TCVN 5252:1990', '%', '', 120000, '(1)', 1, 20),
(225, 0, 'Hàm lượng cafein', 'TCVN 9723:2013', '%', '', 440000, '(1)', 1, 20),
(226, 0, 'Hàm lượng chì (Pb)', 'AOAC 999.11:2011', 'mg/L', '', 150000, '(1)(4)', 1, 20),
(227, 0, 'Hàm lượng Asen (As)', 'AOAC 986.15:2011', 'mg/L', '', 150000, '(1)(4)', 1, 20),
(228, 0, 'Hàm lượng Cadimi', 'AOAC 999.11:2011', 'mg/L', '', 150000, '(1)(4)', 1, 20),
(229, 0, 'Hàm lượng Thủy ngân', 'AOAC 971.21:2012', 'mg/L', '', 150000, '(1)(4)', 1, 20),
(230, 0, 'Độ mịn trên rây Φ 0.25 mm', 'TCVN 10821:2015', '%', '', 70000, '', 1, 20),
(231, 0, 'Độ mịn dưới rây Φ 0.56 mm', 'TCVN 10821:2015', '%', '', 70000, '', 1, 20),
(232, 0, 'Tạp chất lạ', 'TCVN 5252:1990', '%', '', 120000, '(1)', 1, 20),
(233, 0, 'Phương pháp thử nếm', 'TCVN 5249:1990', '-', '', 120000, '', 1, 20),
(234, 0, 'Màu sắc', 'Cảm quan', '-', '', 70000, '', 1, 21),
(235, 0, 'Mùi vị', 'TCVN 5249:1990', '-', '', 70000, '', 1, 21),
(236, 0, 'Trạng thái', 'Cảm quan', '-', '', 70000, '', 1, 21),
(237, 0, 'Độ ẩm', 'TCVN 7035:2002', '%', '', 100000, '(1)', 1, 21),
(238, 0, 'Hàm lượng tro không tan trong acid ', 'TCVN 5253:1990', '%', '', 130000, '(1)', 1, 21),
(239, 0, 'Hàm lượng tro tổng số', 'TCVN 5253:1990', '%', '', 120000, '(1)', 1, 21),
(240, 0, 'Tỉ lệ chất tan trong nước', 'TCVN 5252:1990', '%', '', 130000, '(1)', 1, 21),
(241, 0, 'Hàm lượng cafein', 'TCVN 9723:2013', '%', '', 440000, '(1)', 1, 21),
(242, 0, 'Hàm lượng chì (Pb)', 'AOAC 999.11:2011', 'mg/L', '', 150000, '(1)(4)', 1, 21),
(243, 0, 'Hàm lượng Asen (As)', 'AOAC 986.15:2011', 'mg/L', '', 150000, '(1)(4)', 1, 21),
(244, 0, 'Hàm lượng Cadimi', 'AOAC 999.11:2011', 'mg/L', '', 150000, '(1)(4)', 1, 21),
(245, 0, 'Hàm lượng Thủy ngân', 'AOAC 971.21:2012', 'mg/L', '', 150000, '(1)(4)', 1, 21),
(246, 0, 'Hạt tốt, tính theo % khối lượng, không nhỏ hơn', 'TCVN 5250:2015', '%', '', 70000, '', 1, 21),
(247, 0, 'Hạt lỗi, tính theo % khối lượng, không lớn hơn', 'TCVN 5250:2015', '%', '', 70000, '', 1, 21),
(248, 0, 'Mảnh vỡ, tính theo % khối lượng, không lớn hơn', 'TCVN 5250:2015', '%', '', 70000, '', 1, 21),
(249, 0, 'Hàm lượng tạp chất, tính theo % khối lượng, không lớn hơn', 'TCVN 5250:2015', '%', '', 70000, '', 1, 21),
(250, 0, 'Hàm lượng chì (Pb)', 'AOAC 999.11:2011', 'mg/L', '', 150000, '(1)(4)', 1, 22),
(251, 0, 'Hàm lượng Asen (As)', 'AOAC 986.15:2011', 'mg/L', '', 150000, '(1)(4)', 1, 22),
(252, 0, 'Hàm lượng Cadimi', 'AOAC 999.11:2011', 'mg/L', '', 150000, '(1)(4)', 1, 22),
(253, 0, 'Hàm lượng Thủy ngân', 'AOAC 971.21:2012', 'mg/L', '', 150000, '(1)(4)', 1, 22),
(254, 0, 'pH (KCl, H2O)', 'TCVN 5979:2007', '-', '', 100000, '(1)', 1, 23),
(255, 0, 'Độ ẩm', 'TCVN 4048:2011', '%', '', 100000, '(1)', 1, 23),
(256, 0, 'Hàm lượng chất hữu cơ', 'TCVN 8941:2011', '%', '', 160000, '(1)', 1, 23),
(257, 0, ' Hàm lượng photpho dễ tiêu', 'TCVN 8661:2011', '%', '', 160000, '(1)', 1, 23),
(258, 0, 'Hàm lượng acid humic/acid fulvic', 'TCVN 11456:2016', '%', '', 250000, '(1)', 1, 23),
(259, 0, 'Hàm lượng Nitơ tổng số', 'TCVN 6498:1999', '%', '', 180000, '(1)', 1, 23),
(260, 0, 'Hàm lượng Nitơ dễ tiêu', 'TCVN 5255:2009', '%', '', 180000, '(1)', 1, 23),
(261, 0, 'Hàm lượng Kali dễ tiêu', 'TCVN 8662:2011', '%', '', 160000, '(1)', 1, 23),
(262, 0, ' Hàm lượng Kali tổng số', 'TCVN 8660:2011', '%', '', 160000, '', 1, 23),
(263, 0, ' Hàm lượng P2O5 tổng số', 'TCVN 8940:2011', '%', '', 160000, '', 1, 23),
(264, 0, 'Hàm lượng Sắt (Fe)', 'TCVN 8246:2009', 'mg/L', '', 150000, '(1)', 1, 23),
(265, 0, 'Hàm lượng Đồng (Cu)', 'TCVN 6496:2009', 'mg/L', '', 150000, '(1)', 1, 23),
(266, 0, 'Hàm lượng Kẽm (Zn)', 'TCVN 6496:2009', 'mg/L', '', 150000, '(1)', 1, 23),
(267, 0, 'Hàm lượng Mangan (Mn)', 'TCVN 6496:2009', 'mg/L', '', 150000, '(1)', 1, 23),
(268, 0, 'Hàm lượng Crôm (Cr)', 'TCVN 6496:2009', 'mg/L', '', 150000, '(1)', 1, 23),
(269, 0, 'Hàm lượng Niken (Ni)', 'TCVN 6496:2009', 'mg/L', '', 150000, '(1)', 1, 23),
(270, 0, 'Hàm lượng Canxi (Ca)', 'TCVN 8246:2009', 'mg/L', '', 150000, '(1)', 1, 23),
(271, 0, 'Hàm lượng Magie (Mg)', 'TCVN 8246:2009', 'mg/L', '', 150000, '(1)', 1, 23),
(272, 0, ' Hàm lượng Chì (Pb)', 'TCVN 6496:2009', 'mg/L', '', 150000, '(1)', 1, 23),
(273, 0, 'Hàm lượng Asen (As)', 'TCVN 8467:2010', 'mg/L', '', 150000, '(1)', 1, 23),
(274, 0, 'Hàm lượng Cadimi (Cd)', 'TCVN 6496:2009', 'mg/L', '', 150000, '(1)', 1, 23),
(275, 0, ' Hàm lượng Thủy ngân (Hg)', 'TCVN 8882:2011', 'mg/L', '', 220000, '', 1, 23),
(276, 0, ' Hàm lượng Nitơ tổng số', 'TCVN 2620:2014', '%', '', 180000, '(1)', 1, 24),
(277, 0, ' Hàm lượng Nitơ tổng số', 'TCVN 5815:2018', '%', '', 180000, '(1)', 1, 25),
(278, 0, ' Hàm lượng P2O5 hữu hiệu', 'TCVN 5815:2018', '%', '', 160000, '(1)', 1, 25),
(279, 0, ' Hàm lượng K2O hữu hiệu', 'TCVN 5815:2018', '%', '', 160000, '(1)', 1, 25),
(280, 0, ' Hàm lượng Nitơ tổng', 'TCVN 8557:2010', '%', '', 180000, '(1)', 1, 26),
(281, 0, ' Hàm lượng P2O5 tổng số', 'TCVN 8563:2010', '%', '', 160000, '(1)', 1, 26),
(282, 0, ' Hàm lượng P2O5 hữu hiệu', 'TCVN 8559:2010', '%', '', 160000, '(1)(3)', 1, 26),
(283, 0, ' Độ ẩm', 'TCVN 9297:2012', '%', '', 100000, '(1)(3)', 1, 26),
(284, 0, 'Hàm lượng chất hữu cơ tổng số ', 'TCVN 9294:2012', '%', '', 150000, '(1)(3)', 1, 26),
(285, 0, 'Hàm lượng axít humic', 'TCVN 8561:2010', '%', '', 250000, '(1)(3)', 1, 26),
(286, 0, 'Hàm lượng axít fulvic', 'TCVN 8561:2010', '%', '', 250000, '(1)', 1, 26),
(287, 0, ' Hàm lượng K2O hữu hiệu', 'TCVN 8560:2018', '%', '', 160000, '(1)', 1, 26),
(288, 0, ' Hàm lượng Natri', 'TCVN 8560:2018', '%', '', 150000, '', 1, 26),
(289, 0, ' Hàm lượng K2O tổng số', 'TCVN 8562:2010', '%', '', 160000, '(1)', 1, 26),
(290, 0, 'pH (KCl, H2O)', 'TCVN 5979:2007', '-', '', 100000, '(1)', 1, 26),
(291, 0, 'Tỷ lệ C/N', 'C:TCVN 9294:2012', '-', '', 340000, '(1)', 1, 26),
(292, 0, 'Tỷ lệ C/N', 'N: TCVN 8557:2010', '-', '', 340000, '-1', 1, 26),
(293, 0, ' Hàm lượng Kẽm (Zn)', 'TCVN 9289:2012', 'mg/L', '', 150000, '(1)(3)', 1, 26),
(294, 0, ' Hàm lượng Đồng (Cu)', 'TCVN 9286:2018', 'mg/L', '', 150000, '(1)(3)', 1, 26),
(295, 0, ' Hàm lượng Sắt (Fe)', 'TCVN 9283:2018', 'mg/L', '', 150000, '(1)(3)', 1, 26),
(296, 0, ' Hàm lượng Mangan (Mn)', 'TCVN 9288:2012', 'mg/L', '', 150000, '(1)(3)', 1, 26),
(297, 0, ' Hàm lượng Magie (Mg)', 'TCVN 9285:2018', 'mg/L', '', 150000, '(1)', 1, 26),
(298, 0, ' Hàm lượng Canxi (Ca)', 'TCVN 9284:2018', 'mg/L', '', 150000, '(1)', 1, 26),
(299, 0, ' Hàm lượng Chì (Pb) ', 'TCVN 9290:2018', 'mg/L', '', 150000, '(1)(3)', 1, 26),
(300, 0, ' Hàm lượng Cadimi (Cd)', 'TCVN 9291:2018', 'mg/L', '', 150000, '(1)(3)', 1, 26),
(301, 0, ' Hàm lượng Thủy ngân (Hg)', 'TCVN 10676:2015', 'mg/L', '', 150000, '(1)(3)', 1, 26),
(302, 0, ' Hàm lượng Asen (As)', 'TCVN 11403:2016', 'mg/L', '', 150000, '(1)(3)', 1, 26),
(303, 0, 'VSV cố định nitơ', 'TCVN 6166:2002', 'mg/L', '', 180000, '(1)', 1, 26),
(304, 0, 'VSV phân giải Photpho khó tan', 'TCVN 6167:1996', 'mg/L', '', 160000, '(1)(3)', 1, 26),
(305, 0, 'VSV phân giải Xenlulo', 'TCVN 6168:2002', 'mg/L', '', 200000, '(1)', 1, 26),
(306, 0, 'Nhiệt độ', 'QCVN 46:2012/BTNMT', 'Đo tại hiện trường', '', 100000, '', 1, 27),
(307, 0, 'Độ ẩm', 'QCVN 46:2012/BTNMT', 'Đo tại hiện trường', '', 100000, '', 1, 27),
(308, 0, 'Áp suất', 'QCVN 46:2012/BTNMT', 'Đo tại hiện trường', '', 100000, '', 1, 27),
(309, 0, 'Tiếng ồn', 'TCVN 7878-2:2010', 'Đo tại hiện trường', '', 100000, '', 1, 27),
(310, 0, 'Tổng bụi lơ lững (TSP)', 'TCVN 5067:1995', 'Lấy tại hiện trường, thử nghiệm tại PTN', '', 300000, '', 1, 27),
(311, 0, 'SO2', 'TCVN 5971:1995', 'Lấy tại hiện trường, thử nghiệm tại PTN', '', 150000, '', 1, 27),
(312, 0, 'CO', 'SOP.04-03', 'Lấy tại hiện trường, thử nghiệm tại PTN', '', 150000, '', 1, 27),
(313, 0, 'NO2', 'TCVN 6137:2009', 'Lấy tại hiện trường, thử nghiệm tại PTN', '', 150000, '', 1, 27),
(315, 0, 'Tin chính trị, kinh tế', '32', '324', '432', 234, '43242', 1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `id` int(11) NOT NULL,
  `name` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `permission` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`id`, `name`, `permission`) VALUES
(0, 'quantri', '0'),
(1, 'nhanvien', 'A,C');

-- --------------------------------------------------------

--
-- Table structure for table `tenmau`
--

CREATE TABLE `tenmau` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chitieu` text COLLATE utf8_unicode_ci NOT NULL,
  `biennhan` text COLLATE utf8_unicode_ci NOT NULL,
  `method` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `statusmau` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `mass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mathunghiem` int(11) NOT NULL,
  `sum` int(11) NOT NULL,
  `date` date NOT NULL,
  `mota` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaylaymau` date NOT NULL,
  `ngaynhanmau` date NOT NULL,
  `thoigiankiemnghiem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thoigianluumau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noiguimau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tailieudinhkem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ketluan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `ngayxacnhan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tenmau`
--

INSERT INTO `tenmau` (`id`, `name`, `chitieu`, `biennhan`, `method`, `statusmau`, `mass`, `code`, `mathunghiem`, `sum`, `date`, `mota`, `ngaylaymau`, `ngaynhanmau`, `thoigiankiemnghiem`, `thoigianluumau`, `noiguimau`, `tailieudinhkem`, `diachi`, `ketluan`, `status`, `ngayxacnhan`) VALUES
(199, 'Tin chính trị, kinh tế', '<ul><li><sup>(1)(4)</sup>Escherichiacoli (E.coli)</li></ul>', ',<sup>(1)(4)</sup>Escherichiacoli (E.coli)', '32', '32', '43', 'Mdungleba16@gmail.com.1.2022', 64, 150000, '2022-02-06', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', 0, '0000-00-00'),
(200, 'rubbermangyang1', '<ul><li><sup>(1)(4)</sup>Bào tử kỵ khí sinh H2S</li><li><sup>(1)(4)</sup>Escherichiacoli (E.coli)</li><li><sup>(1)(4)</sup>Pseudomonas aeruginosa</li><li><sup>(1)(4)</sup>Bào tử kỵ khí sinh H2S</li></ul>', ',<sup>(1)(4)</sup>Bào tử kỵ khí sinh H2S,<sup>(1)(4)</sup>Escherichiacoli (E.coli),<sup>(1)(4)</sup>Pseudomonas aeruginosa,<sup>(1)(4)</sup>Bào tử kỵ khí sinh H2S', '4', '43', '43', 'Mdungleba16@gmail.com.1.2022', 65, 600000, '2022-02-06', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', 0, '0000-00-00'),
(201, '23', '<ul><li><sup>(1)(4)</sup>Escherichiacoli (E.coli)</li><li><sup>(1)(4)</sup>Coliform tổng</li></ul>', ',<sup>(1)(4)</sup>Escherichiacoli (E.coli),<sup>(1)(4)</sup>Coliform tổng', '32', '32', '32', 'Mdungleba16@gmail.com.1.2022', 66, 300000, '2022-02-09', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', 0, '0000-00-00'),
(202, 'Tin chính trị, kinh tế', '<ul><li><sup>(1)</sup>Liên cầu phân Faecal Streptococci</li><li><sup>(1)(4)</sup>Coliform tổng</li><li><sup>(1)(4)</sup>Escherichiacoli (E.coli)</li><li><sup>(1)</sup>Escherichiacoli (E.coli)</li><li><sup>(1)</sup>Escherichiacoli (E.coli)</li><li><sup>(1)</sup>Escherichiacoli (E.coli)</li></ul>', ',<sup>(1)</sup>Liên cầu phân Faecal Streptococci,<sup>(1)(4)</sup>Coliform tổng,<sup>(1)(4)</sup>Escherichiacoli (E.coli),<sup>(1)</sup>Escherichiacoli (E.coli),<sup>(1)</sup>Escherichiacoli (E.coli),<sup>(1)</sup>Escherichiacoli (E.coli)', '32', '43', '32', 'Mdungleba16@gmail.com.1.2022', 67, 900000, '2022-03-06', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', 2, '2022-10-11'),
(203, '', '<ul><li><sup>(1)(4)</sup>Escherichiacoli (E.coli)</li><li><sup>(1)</sup>pH (KCl, H2O)</li><li><sup>(1)</sup>Độ ẩm</li></ul>', ',<sup>(1)(4)</sup>Escherichiacoli (E.coli),<sup>(1)</sup>pH (KCl, H2O),<sup>(1)</sup>Độ ẩm', '', '', '', 'M391.1.2022', 68, 350000, '2022-10-06', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created` date DEFAULT '0000-00-00',
  `created_by` varchar(45) DEFAULT NULL,
  `modified` date DEFAULT '0000-00-00',
  `modified_by` varchar(45) DEFAULT NULL,
  `register_date` datetime DEFAULT '0000-00-00 00:00:00',
  `register_ip` varchar(25) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `ordering` int(11) DEFAULT '10',
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `fullname`, `password`, `created`, `created_by`, `modified`, `modified_by`, `register_date`, `register_ip`, `status`, `ordering`, `group_id`) VALUES
(1, 'admin', 'admin01@gmail.com', 'Admin 123466', 'c030437f6e8e94d244bc602606df5235', '0000-00-00', NULL, '2018-08-27', 'admin', '2013-12-03 08:12:23', '127.0.0.1', 1, 10, 0),
(2, 'vinh', '', 'Vinh', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00', NULL, '0000-00-00', NULL, '0000-00-00 00:00:00', NULL, 1, 10, 0),
(3, 'nthuy', '', 'Nguyễn Tất Huy', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00', NULL, '0000-00-00', NULL, '0000-00-00 00:00:00', NULL, 1, 10, 0),
(4, 'dmglinh', '', 'Đỗ Mỹ Gia Linh', '631c0fef35de6595b7cec7092b641eee', '0000-00-00', NULL, '0000-00-00', NULL, '0000-00-00 00:00:00', NULL, 1, 10, 0),
(5, 'ltbvy', '', 'Nguyễn Thị Kim Yến', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00', NULL, '0000-00-00', NULL, '0000-00-00 00:00:00', NULL, 1, 10, 0),
(6, 'ntly', '', 'Nguyễn Thụy Lý', 'ba6535e64db1576e876940aa77b66d61', '2019-11-21', NULL, '2019-11-21', NULL, '2019-11-21 00:00:00', NULL, 1, 10, 0),
(7, 'lvttly', 'dungleba16@gmail.com', 'Lê Võ thị Trúc Ly', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00', NULL, '0000-00-00', NULL, '0000-00-00 00:00:00', NULL, 1, 10, 0),
(8, 'ltbvy1', 'dungleba16@gmail.com', 'Lê thị bảo vy', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00', NULL, '0000-00-00', NULL, '0000-00-00 00:00:00', NULL, 1, 10, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chiso`
--
ALTER TABLE `chiso`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chitieu`
--
ALTER TABLE `chitieu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mauchitietchitieu`
--
ALTER TABLE `mauchitietchitieu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mauchitieu`
--
ALTER TABLE `mauchitieu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mauthunghiem`
--
ALTER TABLE `mauthunghiem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `method`
--
ALTER TABLE `method`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenmau`
--
ALTER TABLE `tenmau`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `chiso`
--
ALTER TABLE `chiso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `chitieu`
--
ALTER TABLE `chitieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=937;

--
-- AUTO_INCREMENT for table `code`
--
ALTER TABLE `code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mauchitietchitieu`
--
ALTER TABLE `mauchitietchitieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `mauchitieu`
--
ALTER TABLE `mauchitieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `mauthunghiem`
--
ALTER TABLE `mauthunghiem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `method`
--
ALTER TABLE `method`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=316;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tenmau`
--
ALTER TABLE `tenmau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

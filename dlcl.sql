-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 12, 2022 lúc 01:02 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dlcl`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created` date DEFAULT '0000-00-00',
  `created_by` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
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
-- Cấu trúc bảng cho bảng `chiso`
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
-- Đang đổ dữ liệu cho bảng `chiso`
--

INSERT INTO `chiso` (`id`, `category`, `method`, `qc`, `chiso`, `status`) VALUES
(39, 23, 254, 'QCVD112', '25', 1),
(40, 18, 201, 'QCVD112', '25', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitieu`
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
  `tenmau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitieu`
--

INSERT INTO `chitieu` (`id`, `name`, `note`, `mass`, `price`, `donvi`, `method`, `result`, `quydinh`, `status`, `tenmau`) VALUES
(701, 'Liên cầu phân Faecal Streptococci', '(1)(4)', 'CFU/250ml', 150000, '', 'TCVN 6189-2:2009', 'bình thường', '', 0, 185),
(702, 'Pseudomonas aeruginosa', '(1)(4)', 'CFU/250ml', 150000, '', 'TCVN 8881:2011', 'bình thường', '', 0, 185),
(703, 'Tổng dầu mỡ', '', 'mg/L', 250000, '', 'SMEWW 5520B:2017', 'bình thường', '', 0, 185),
(704, 'Tổng dầu mỡ', '', 'mg/L', 250000, '', 'SMEWW 5520B:2017', 'bình thường', '', 0, 186),
(705, 'Tổng dầu mỡ', '', 'mg/L', 250000, '', 'SMEWW 5520B:2017', 'bình thường', '', 0, 186),
(706, 'Chỉ số Pecmanganat', '(1)', 'mg/L', 115000, '', 'TCVN 6186:1996', 'bình thường', '', 0, 186),
(707, 'Hàm lượng Florua (F-)', '', 'mg/L', 115000, '', 'SOP.02-14', 'bình thường', '', 0, 186),
(708, 'Bào tử kỵ khí sinh H2S', '(1)(4)', 'mg/L', 150000, '', 'TCVN 6191:1996', 'bình thường', '', 0, 187),
(709, 'Coliform tổng', '(1)(4)', 'CFU/250ml', 150000, '', 'ISO 9308-1:2014', 'bình thường', '', 0, 187),
(710, 'Hàm lượng Thủy ngân (Hg)', '(1)(4)', 'mg/L', 220000, '', 'SMEWW 3112B:2017', 'bình thường', '', 0, 187),
(713, 'Pseudomonas aeruginosa', '(1)(4)', 'mg/L', 150000, '', 'TCVN 8881:2011', 'bình thường', '', 0, 189),
(714, 'Liên cầu phân Faecal Streptococci', '(1)(4)', 'mg/L', 150000, '', 'TCVN 6189-2:2009', 'bình thường', '', 0, 189),
(715, 'Coliform tổng', '(1)(4)', 'mg/L', 150000, '', 'ISO 9308-1:2014', 'bình thường', '', 0, 189);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `code`
--

CREATE TABLE `code` (
  `id` int(11) NOT NULL,
  `name` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `code`
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
-- Cấu trúc bảng cho bảng `mauchitieu`
--

CREATE TABLE `mauchitieu` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mauthunghiem`
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
  `tailieukemtheo` int(11) NOT NULL,
  `ngaychuyenketqua` date NOT NULL,
  `ngaynhanketqua` date NOT NULL,
  `nguoinhanketqua` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sum` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mauthunghiem`
--

INSERT INTO `mauthunghiem` (`id`, `com`, `macode`, `address`, `buyer`, `role`, `tax`, `phone`, `fax`, `email`, `number`, `date`, `createdate`, `status`, `user`, `ketluan`, `tentieuchuan`, `ngaytraketqua`, `sobankq`, `nhanketqua`, `giaonhanmau`, `phithunghiem`, `khachhangtratruoc`, `ngaydukien`, `ngaychuyenmau`, `nguoichuyenmau`, `nguoinhanmau`, `ngaytrakqnt`, `tinhtrangmau`, `ghichu`, `tailieukemtheo`, `ngaychuyenketqua`, `ngaynhanketqua`, `nguoinhanketqua`, `sum`) VALUES
(55, 'lê bá dũng', '15', 'hcm', 'demo', '', '3', '0941172223', '', '', 0, '2021-05-01', '2021-05-23', 0, '', 0, 'demo3312312', '2021-05-23', 3, 1, 1, 0, 0, '2021-05-31', '2021-06-01', 'Lê thị bảo vy', 'Nguyễn Thị Kim Yến', '2021-06-01', ',43(CFU/250ml),(mg/L)', ',dũng lê(M15.1.2021),Mẫu đất(M15.2.2021)', 0, '2021-06-01', '2021-06-01', '', NULL),
(56, 'dungleba16@gmail.com', '3', 'hcm', '', '', '', '0941172223', '', '', 0, '2022-01-11', '2022-01-11', 0, '', 0, '', '0000-00-00', 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00', '', 'Nguyễn Thị Kim Yến', '0000-00-00', '', '', 0, '0000-00-00', '0000-00-00', '', NULL),
(57, 'lê bá dũng', 'dungleba16@gmail.com', 'hcm', '', '', '', '0941172223', '', '', 0, '2021-06-07', '2022-01-11', 0, '', 0, '', '0000-00-00', 0, 0, 0, 0, 0, '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '', 0, '0000-00-00', '0000-00-00', '', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `method`
--

CREATE TABLE `method` (
  `id` int(11) NOT NULL,
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
-- Đang đổ dữ liệu cho bảng `method`
--

INSERT INTO `method` (`id`, `name`, `method`, `mass`, `conditions`, `price`, `note`, `status`, `category`) VALUES
(1, 'Màu sắc', 'SOP.02-11', 'Pt-Co', '', 70000, '(1)(4)', 1, 13),
(2, 'Mùi, vị', 'SOP.02-10', '-', '', 70000, '', 1, 13),
(3, 'Độ đục', 'SOP.02-12', 'NTU', '', 70000, '(1)(4)', 1, 13),
(4, 'pH', 'TCVN 6492:2011', '-', '', 70000, '(1)(4)', 1, 13),
(5, ' Hàm lượng độ cứng toàn phần', 'TCVN 6224:1996', 'mg/L', '', 115000, '(1)(4)', 1, 13),
(6, ' Hàm lượng cặn hòa tan (TDS)', 'TCVN 6625:2000', 'mg/L', '', 115000, '(1)(4)', 1, 13),
(7, 'Hàm lượng cặn toàn phần (TS)', 'TCVN 6625:2000', 'mg/L', '', 115000, '', 1, 13),
(8, 'Hàm lượng cặn lơ lửng (TSS)', 'TCVN 6625:2000', 'mg/L', '', 115000, '(1)(4)', 1, 13),
(9, '  Hàm lượng Nitrit (NO2-)', 'TCVN 6178:1996', 'mg/L', '', 115000, '(1)(4)', 1, 13),
(10, '  Hàm lượng Nitrat (NO3-)', 'TCVN 6180:1996', 'mg/L', '', 115000, '(1)(4)', 1, 13),
(11, '  Hàm lượng sắt tổng (Fe)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)(4)', 1, 13),
(12, ' Hàm lượng clorua (Cl-)', 'TCVN 6194:1996', 'mg/L', '', 115000, '(1)(4)', 1, 13),
(13, ' Hàm lượng Sunphat (SO42-)', 'TCVN 6200:1996', 'mg/L', '', 115000, '(1)(4)', 1, 13),
(14, ' Hàm lượng Amoni', 'TCVN 5988:1995', 'mg/L', '', 140000, '(1)(4)', 1, 13),
(15, 'Chỉ số Pecmanganat', 'TCVN 6186:1996', 'mg/L', '', 115000, '(1)(4)', 1, 13),
(16, 'Clo dư', 'SOP.02-13', 'mg/L', '', 115000, '', 1, 13),
(17, 'Hàm lượng Florua (F-)', 'SOP.02-14', 'mg/L', '', 115000, '(1)(4)', 1, 13),
(18, 'Hàm lượng Đồng (Cu)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)(4)', 1, 13),
(19, 'Hàm lượng Kẽm (Zn)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)(4)', 1, 13),
(20, 'Hàm lượng Mangan (Mn)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)(4)', 1, 13),
(21, ' Hàm lượng Kali (K)', 'TCVN 6196-3:2000', 'mg/L', '', 150000, '(1)(4)', 1, 13),
(22, ' Hàm lượng Natri (Na)', 'TCVN 6196-3:2000', 'mg/L', '', 150000, '(1)(4)', 1, 13),
(23, 'Hàm lượng Niken (Ni)', 'SMEWW 3111B: 2017', 'mg/L', '', 150000, '-1', 1, 13),
(24, 'Hàm lượng Crôm (Cr)', 'SMEWW 3111B: 2017', 'mg/L', '', 150000, '(1)', 1, 13),
(25, ' Hàm lượng Nhôm (Al)', 'SMEWW 3500 (Al)-B- 2017', 'mg/L', '', 150000, '(1)(4)', 1, 13),
(26, ' Hàm lượng Chì (Pb)', 'SMEWW 3113B:2017', 'mg/L', '', 150000, '(1)(4)', 1, 13),
(27, 'Hàm lượng Asen (As)', 'SMEWW 3113B:2017', 'mg/L', '', 150000, '(1)(4)', 1, 13),
(28, 'Hàm lượng Cadimi (Cd)', 'SMEWW 3113B:2017', 'mg/L', '', 150000, '(1)(4)', 1, 13),
(29, 'Hàm lượng Thủy ngân (Hg)', 'SMEWW 3112B:2017', 'mg/L', '', 220000, '(1)(4)', 1, 13),
(30, 'Coliform tổng', 'ISO 9308-1:2014', 'mg/L', '', 150000, '(1)(4)', 1, 13),
(31, 'Escherichiacoli (E.coli)', 'ISO 9308-1:2014', 'mg/L', '', 150000, '(1)(4)', 1, 13),
(32, 'Liên cầu phân Faecal Streptococci', 'TCVN 6189-2:2009', 'mg/L', '', 150000, '(1)(4)', 1, 13),
(33, 'Pseudomonas aeruginosa', 'TCVN 8881:2011', 'mg/L', '', 150000, '(1)(4)', 1, 13),
(34, 'Bào tử kỵ khí sinh H2S', 'TCVN 6191:1996', 'mg/L', '', 150000, '(1)(4)', 1, 13),
(35, 'Màu sắc', 'SOP.02-11', 'Pt-Co', '', 70000, '(1)(4)', 1, 14),
(36, 'Mùi, vị', 'SOP.02-10', '-', '', 70000, '', 1, 14),
(37, 'Độ đục', 'SOP.02-12', 'NTU', '', 70000, '(1)(4)', 1, 14),
(38, 'pH', 'TCVN 6492:2011', '-', '', 70000, '(1)(4)', 1, 14),
(39, 'Hàm lượng độ cứng ', 'TCVN 6224:1996', 'mg/L', '', 115000, '(1)(4)', 1, 14),
(40, 'Hàm lượng cặn hòa tan (TDS)', 'TCVN 6625:2000', 'mg/L', '', 115000, '(1)(4)', 1, 14),
(41, 'Hàm lượng cặn toàn phần (TS)', 'TCVN 6625:2000', 'mg/L', '', 115000, '', 1, 14),
(42, 'Hàm lượng cặn lơ lửng (TSS)', 'TCVN 6625:2000', 'mg/L', '', 115000, '(1)(4)', 1, 14),
(43, 'Hàm lượng Nitrit (NO2-)', 'TCVN 6178:1996', 'mg/L', '', 115000, '(1)(4)', 1, 14),
(44, 'Hàm lượng Nitrat (NO3-)', 'TCVN 6180:1996', 'mg/L', '', 115000, '(1)(4)', 1, 14),
(45, 'Hàm lượng sắt tổng (Fe)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)(4)', 1, 14),
(46, 'Hàm lượng clorua (Cl-)', 'TCVN 6194:1996', 'mg/L', '', 115000, '(1)(4)', 1, 14),
(47, 'Hàm lượng Sunphat (SO42-)', 'TCVN 6200:1996', 'mg/L', '', 115000, '(1)(4)', 1, 14),
(48, ' Hàm lượng Amoni', 'TCVN 5988:1995', 'mg/L', '', 140000, '(1)(4)', 1, 14),
(49, 'Chỉ số Pecmanganat', 'TCVN 6186:1996', 'mg/L', '', 115000, '(1)(4)', 1, 14),
(50, 'Clo dư', 'SOP.02-13', 'mg/L', '', 115000, '(4)', 1, 14),
(51, 'Hàm lượng Florua (F-)', 'SOP.02-14', 'mg/L', '', 115000, '(1)(4)', 1, 14),
(52, 'Hàm lượng Đồng (Cu)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)(4)', 1, 14),
(53, 'Hàm lượng Kẽm (Zn)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)(4)', 1, 14),
(54, 'Hàm lượng Mangan (Mn)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)(4)', 1, 14),
(55, 'Hàm lượng Kali (K)', 'TCVN 6196-3:2000', 'mg/L', '', 150000, '(1)(4)', 1, 14),
(56, 'Hàm lượng Natri (Na)', 'TCVN 6196-3:2000', 'mg/L', '', 150000, '(1)(4)', 1, 14),
(57, 'Hàm lượng Niken (Ni)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 14),
(58, 'Hàm lượng Crôm (Cr)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 14),
(59, 'Hàm lượng Chì (Pb)', 'SMEWW 3113B:2017', 'mg/L', '', 150000, '(1)(4)', 1, 14),
(60, 'Hàm lượng Nhôm (Al)', 'SMEWW 3500 (Al)-B- 2017', 'mg/L', '', 150000, '(1)(4)', 1, 14),
(61, 'Hàm lượng Asen (As)', 'SMEWW 3113B:2017', 'mg/L', '', 150000, '(1)(4)', 1, 14),
(62, 'Hàm lượng Cadimi (Cd)', 'SMEWW 3113B:2017', 'mg/L', '', 150000, '(1)(4)', 1, 14),
(63, 'Hàm lượng Thủy ngân (Hg)', 'SMEWW 3112B:2017', 'mg/L', '', 220000, '(1)(4)', 1, 14),
(64, 'Coliform tổng', 'ISO 9308-1:2014', 'CFU/250ml', '', 150000, '(1)(4)', 1, 14),
(65, 'Escherichiacoli (E.coli)', 'ISO 9308-1:2014', 'CFU/250ml', '', 150000, '(1)(4)', 1, 14),
(66, 'Liên cầu phân Faecal Streptococci', 'TCVN 6189-2:2009', 'CFU/250ml', '', 150000, '(1)(4)', 1, 14),
(67, 'Pseudomonas aeruginosa', 'TCVN 8881:2011', 'CFU/250ml', '', 150000, '(1)(4)', 1, 14),
(68, 'Bào tử kỵ khí sinh H2S', 'TCVN 6191:1996', 'CFU/50ml', '', 150000, '(1)(4)', 1, 14),
(69, 'Màu sắc', 'SOP.02-11', 'Pt-Co', '', 70000, '(1)', 1, 15),
(70, 'Mùi, vị', 'SOP.02-10', '-', '', 70000, '', 1, 15),
(71, 'Độ đục', 'SOP.02-12', 'NTU', '', 70000, '(1)', 1, 15),
(72, 'pH', 'TCVN 6492:2011', '-', '', 70000, '(1)', 1, 15),
(73, 'Hàm lượng độ cứng ', 'TCVN 6224:1996', 'mg/L', '', 115000, '(1)', 1, 15),
(74, 'Hàm lượng cặn hòa tan (TDS)', 'TCVN 6625:2000', 'mg/L', '', 115000, '(1)', 1, 15),
(75, 'Hàm lượng cặn toàn phần (TS)', 'TCVN 6625:2000', 'mg/L', '', 115000, '', 1, 15),
(76, 'Hàm lượng cặn lơ lửng (TSS)', 'TCVN 6625:2000', 'mg/L', '', 115000, '(1)', 1, 15),
(77, 'Hàm lượng Nitrit (NO2-)', 'TCVN 6178:1996', 'mg/L', '', 115000, '(1)', 1, 15),
(78, 'Hàm lượng Nitrat (NO3-)', 'TCVN 6180:1996', 'mg/L', '', 115000, '(1)', 1, 15),
(79, 'Hàm lượng sắt tổng (Fe)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 15),
(80, 'Hàm lượng clorua (Cl-)', 'TCVN 6194:1996', 'mg/L', '', 115000, '(1)', 1, 15),
(81, 'Hàm lượng Sunphat (SO42-)', 'TCVN 6200:1996', 'mg/L', '', 115000, '(1)', 1, 15),
(82, 'Hàm lượng Amoni', 'TCVN 5988:1995', 'mg/L', '', 140000, '(1)', 1, 15),
(83, 'Chỉ số Pecmanganat', 'TCVN 6186:1996', 'mg/L', '', 115000, '(1)', 1, 15),
(84, 'Clo dư', 'SOP.02-13', 'mg/L', '', 115000, '', 1, 15),
(85, 'Hàm lượng Florua (F-)', 'SOP.02-14', 'mg/L', '', 115000, '(1)', 1, 15),
(86, 'Hàm lượng Đồng (Cu)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 15),
(87, 'Hàm lượng Kẽm (Zn)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 15),
(88, 'Hàm lượng Mangan (Mn)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 15),
(89, 'Hàm lượng Kali (K)', 'TCVN 6196-3:2000', 'mg/L', '', 150000, '(1)', 1, 15),
(90, 'Hàm lượng Natri (Na)', 'TCVN 6196-3:2000', 'mg/L', '', 150000, '(1)', 1, 15),
(91, 'Hàm lượng Niken (Ni)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 15),
(92, 'Hàm lượng Crôm (Cr)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 15),
(93, 'Hàm lượng Chì (Pb)', 'SMEWW 3113B:2017', 'mg/L', '', 150000, '(1)', 1, 15),
(94, 'Hàm lượng Nhôm (Al)', 'SMEWW 3500 (Al)-B- 2017', 'mg/L', '', 150000, '(1)', 1, 15),
(95, 'Hàm lượng Asen (As)', 'SMEWW 3113B:2017', 'mg/L', '', 150000, '(1)', 1, 15),
(96, 'Hàm lượng Cadimi (Cd)', 'SMEWW 3113B:2017', 'mg/L', '', 150000, '(1)', 1, 15),
(97, 'Hàm lượng Thủy ngân (Hg)', 'SMEWW 3112B:2017', 'mg/L', '', 220000, '(1)', 1, 15),
(98, 'Coliform tổng', 'ISO 9308-1:2014', 'CFU/250ml', '', 150000, '(1)', 1, 15),
(99, 'Escherichiacoli (E.coli)', 'ISO 9308-1:2014', 'CFU/250ml', '', 150000, '(1)', 1, 15),
(100, 'Liên cầu phân Faecal Streptococci', 'TCVN 6189-2:2009', 'CFU/250ml', '', 150000, '(1)', 1, 15),
(101, 'Pseudomonas aeruginosa', 'TCVN 8881:2011', 'CFU/250ml', '', 150000, '(1)', 1, 15),
(102, 'Bào tử kỵ khí sinh H2S', 'TCVN 6191:1996', 'CFU/50ml', '', 150000, '(1)', 1, 15),
(103, 'pH', 'TCVN 6492:2011', '-', '', 70000, '(1)', 1, 16),
(104, 'Nhiệt độ', 'SMEWW 2550B:2017', '0C', '', 70000, '', 1, 16),
(105, 'Hàm lượng Oxy hòa tan (DO)', 'SMEWW 5210B:2017', 'mg/L', '', 115000, '', 1, 16),
(106, 'Độ đục', 'TCVN 6184:2008', 'NTU', '', 100000, '', 1, 16),
(107, 'Hàm lượng độ cứng toàn phần', 'TCVN 6224:1996', 'mg/L', '', 100000, '(1)', 1, 16),
(108, 'Hàm lượng cặn lơ lửng (TSS)', 'TCVN 6625:2000', 'mg/L', '', 115000, '(1)', 1, 16),
(109, 'Chỉ số Pecmanganat', 'TCVN 6186:1996', 'mg/L', '', 115000, '(1)', 1, 16),
(110, 'Nhu cầu oxy hóa học (COD)', 'SMEWW 5220C:2017', 'mg/L', '', 115000, '(1)', 1, 16),
(111, 'Hàm lượng Nitrit (NO2-)', 'TCVN 6178:1996', 'mg/L', '', 115000, '(1)', 1, 16),
(112, 'Hàm lượng Nitrat (NO3-)', 'SMEWW 4500-NO3-.E:2017', 'mg/L', '', 115000, '(1)', 1, 16),
(113, ' Hàm lượng Photphat (PO43-)', 'TCVN 6202:2008', 'mg/L', '', 115000, '(1)', 1, 16),
(114, ' Hàm lượng clorua (Cl-)', 'TCVN 6194:1996', 'mg/L', '', 115000, '(1)', 1, 16),
(115, 'Hàm lượng Sunphat (SO42-)', 'TCVN 6200:1996', 'mg/L', '', 115000, '(1)', 1, 16),
(116, 'Hàm lượng tổng chất rắn hòa tan (TDS)', 'SMEWW 2540C:2017', 'mg/L', '', 115000, '(1)', 1, 16),
(117, 'Hàm lượng Kẽm (Zn)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 16),
(118, 'Hàm lượng Mangan (Mn)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 16),
(119, 'Hàm lượng Crôm (Cr)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 16),
(120, 'Hàm lượng Niken (Ni)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 16),
(121, 'Hàm lượng Chì (Pb)', 'SMEWW 3113B:2017', 'mg/L', '', 150000, '(1)', 1, 16),
(122, 'Hàm lượng Asen (As)', 'SMEWW 3113B:2017', 'mg/L', '', 150000, '(1)', 1, 16),
(123, 'Hàm lượng Cadimi (Cd)', 'SMEWW 3113B:2017', 'mg/L', '', 150000, '(1)', 1, 16),
(124, 'Hàm lượng Thủy ngân (Hg)', 'SMEWW 3112B:2017', 'mg/L', '', 220000, '(1)', 1, 16),
(125, 'Hàm lượng Đồng (Cu)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 16),
(126, 'Hàm lượng Sắt (Fe)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 16),
(127, 'Coliform tổng', 'TCVN 6187-2:1996', 'MPN/100ml', '', 150000, '(1)', 1, 16),
(128, 'Coliform tổng', 'ISO 9308-1:2014', 'CFU/250ml', '', 150000, '(1)', 1, 16),
(129, 'Escherichiacoli (E.coli)', 'TCVN 6187-2:1996', 'MPN/100ml', '', 150000, '(1)', 1, 16),
(130, 'Hàm lượng Kali (K)', 'TCVN 6196-3:2000', 'mg/L', '', 150000, '', 1, 16),
(131, 'Hàm lượng Natri (Na)', 'TCVN 6196-3:2000', 'mg/L', '', 150000, '', 1, 16),
(132, 'Hàm lượng Nhôm (Al)', 'SMEWW 3500 (Al)-B- 2017', 'mg/L', '', 150000, '', 1, 16),
(133, 'Màu sắc', 'SOP.02-11', 'Pt-Co', '', 70000, '', 1, 16),
(134, 'Mùi, vị', 'SOP.02-10', '-', '', 70000, '', 1, 16),
(135, 'Hàm lượng Florua (F-)', 'SOP.02-14', 'mg/L', '', 115000, '', 1, 16),
(136, 'Chỉ số Pecmanganat', 'TCVN 6186:1996', 'mg/L', '', 115000, '(1)', 1, 16),
(137, ' Hàm lượng Amoni', 'TCVN 5988:1995', 'mg/L', '', 140000, '(1)', 1, 16),
(138, 'Tổng dầu mỡ', 'SMEWW 5520B:2017', 'mg/L', '', 250000, '', 1, 16),
(139, 'Dầu mỡ khoáng', 'SMEWW 5520.B&F-2017', 'mg/L', '', 250000, '', 1, 16),
(140, 'Dầu mỡ động thực vật', 'SMEWW 5520B:2017', 'mg/L', '', 500000, '', 1, 16),
(141, 'pH', 'TCVN 6492:2011', '-', '', 70000, '(1)', 1, 17),
(142, 'Nhiệt độ', 'SMEWW 2550B:2017', '0C', '', 100000, '', 1, 17),
(143, 'Hàm lượng Oxy hòa tan (DO)', 'SMEWW 5210B:2017', 'mg/L', '', 115000, '(1)', 1, 17),
(144, 'Độ đục', 'TCVN 6184:2008', 'NTU', '', 100000, '', 1, 17),
(145, 'Hàm lượng độ cứng toàn phần', 'TCVN 6224:1996', 'mg/L', '', 100000, '(1)', 1, 17),
(146, 'Hàm lượng cặn lơ lửng (TSS)', 'TCVN 6625:2000', 'mg/L', '', 115000, '(1)', 1, 17),
(147, ' Hàm lượng tổng chất rắn hòa tan (TDS)', 'SMEWW 2540C:2017', 'mg/L', '', 115000, '(1)', 1, 17),
(148, 'Nhu cầu oxy hóa học (COD)', 'SMEWW 5220C:2017', 'mg/L', '', 115000, '(1)', 1, 17),
(149, 'Nhu cầu oxy sinh hóa (BOD)', 'SMEWW 5210B:2017', 'mg/L', '', 115000, '(1)', 1, 17),
(150, 'Hàm lượng Nitrit (NO2-)', 'TCVN 6178:1996', 'mg/L', '', 115000, '(1)', 1, 17),
(151, 'Hàm lượng Nitrat (NO3-)', 'SMEWW 4500-NO3-.E:2017', 'mg/L', '', 115000, '(1)', 1, 17),
(152, 'Hàm lượng Photphat (PO43-)', 'TCVN 6202:2008', 'mg/L', '', 115000, '(1)', 1, 17),
(153, 'Hàm lượng clorua (Cl-)', 'TCVN 6194:1996', 'mg/L', '', 115000, '(1)', 1, 17),
(154, 'Hàm lượng Sunfat (SO42-)', 'TCVN 6200:1996', 'mg/L', '', 115000, '(1)', 1, 17),
(155, 'Hàm lượng Kẽm (Zn)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 17),
(156, 'Hàm lượng Mangan (Mn)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 17),
(157, 'Hàm lượng Crôm (Cr)', 'SMEWW 3111B: 2017', 'mg/L', '', 150000, '(1)', 1, 17),
(158, 'Hàm lượng Niken (Ni)', 'SMEWW 3111B: 2017', 'mg/L', '', 150000, '(1)', 1, 17),
(159, 'Hàm lượng Chì (Pb)', 'SMEWW 3113B:2017', 'mg/L', '', 150000, '(1)', 1, 17),
(160, 'Hàm lượng Asen (As)', 'SMEWW 3113B:2017', 'mg/L', '', 150000, '(1)', 1, 17),
(161, 'Hàm lượng Cadimi (Cd)', 'SMEWW 3113B:2017', 'mg/L', '', 150000, '(1)', 1, 17),
(162, 'Hàm lượng Thủy ngân (Hg)', 'SMEWW 3112B:2017', 'mg/L', '', 220000, '(1)', 1, 17),
(163, 'Hàm lượng Đồng (Cu)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 17),
(164, 'Hàm lượng Sắt (Fe)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 17),
(165, 'Coliform tổng', 'TCVN 6187-2:1996', 'MPN/100ml', '', 150000, '(1)', 1, 17),
(166, 'Escherichiacoli (E.coli)', 'TCVN 6187-2:1996', 'MPN/100ml', '', 150000, '(1)', 1, 17),
(167, 'Hàm lượng Nitơ tổng số', 'TCVN 6638:2000', 'mg/L', '', 180000, '(1)', 1, 17),
(168, 'Hàm lượng Amoni', 'TCVN 5988:1995', 'mg/L', '', 140000, '(1)', 1, 17),
(169, 'Tổng dầu mỡ', 'SMEWW 5520B:2017', 'mg/L', '', 250000, '', 1, 17),
(170, 'Dầu mỡ khoáng', 'SMEWW 5520.B&F-2017', 'mg/L', '', 250000, '', 1, 17),
(171, 'Dầu mỡ động thực vật', 'SMEWW 5520B:2017', 'mg/L', '', 500000, '', 1, 17),
(172, 'pH', 'TCVN 6492:2011', '-', '', 70000, '(1)', 1, 18),
(173, 'Nhiệt độ', 'SMEWW 2550B:2017', '0C', '', 100000, '', 1, 18),
(174, 'Hàm lượng cặn lơ lửng (TSS)', 'TCVN 6625:2000', 'mg/L', '', 115000, '(1)', 1, 18),
(175, 'Nhu cầu oxy hóa học (COD)', 'SMEWW 5220C:2017', 'mg/L', '', 115000, '(1)', 1, 18),
(176, 'Nhu cầu oxy sinh hóa (BOD5)', 'SMEWW 5210B:2017', 'mg/L', '', 115000, '(1)', 1, 18),
(177, 'Hàm lượng Nitrat (NO3-)', 'SMEWW 4500-NO3-.E:2017', 'mg/L', '', 115000, '(1)', 1, 18),
(178, 'Hàm lượng Photphat (PO43-)', 'TCVN 6202:2008', 'mg/L', '', 115000, '(1)', 1, 18),
(179, 'Hàm lượng Tổng Photpho', 'TCVN 6202:2008', 'mg/L', '', 115000, '(1)', 1, 18),
(180, 'Hàm lượng clorua (Cl-)', 'TCVN 6194:1996', 'mg/L', '', 115000, '(1)', 1, 18),
(181, 'Hàm lượng Amoni', 'TCVN 5988:1995', 'mg/L', '', 140000, ' (1', 1, 18),
(182, 'Hàm lượng Nitơ tổng số', 'TCVN 6638:2000', 'mg/L', '', 180000, '(1)', 1, 18),
(183, 'Hàm lượng độ cứng toàn phần', 'TCVN 6224:1996', 'mg/L', '', 100000, '(1)', 1, 18),
(184, 'Hàm lượng Nitrit (NO2-)', 'TCVN 6178:1996', 'mg/L', '', 115000, '(1)', 1, 18),
(185, 'Hàm lượng tổng chất rắn hòa tan (TDS)', 'SMEWW 2540C:2017', 'mg/L', '', 115000, '(1)', 1, 18),
(186, 'Hàm lượng Sunfat (SO42-)', 'TCVN 6200:1996', 'mg/L', '', 115000, '(1)', 1, 18),
(187, 'Hàm lượng Kẽm (Zn)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 18),
(188, 'Hàm lượng Mangan (Mn)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 18),
(189, 'Hàm lượng Crôm (Cr)', 'SMEWW 3111B: 2017', 'mg/L', '', 150000, '(1)', 1, 18),
(190, 'Hàm lượng Niken (Ni)', 'SMEWW 3111B: 2017', 'mg/L', '', 150000, '(1)', 1, 18),
(191, 'Hàm lượng Chì (Pb)', 'SMEWW 3113B:2017', 'mg/L', '', 150000, '(1)', 1, 18),
(192, 'Hàm lượng Asen (As)', 'SMEWW 3113B:2017', 'mg/L', '', 150000, '(1)', 1, 18),
(193, 'Hàm lượng Cadimi (Cd)', 'SMEWW 3113B:2017', 'mg/L', '', 150000, '(1)', 1, 18),
(194, 'Hàm lượng Thủy ngân (Hg)', 'SMEWW 3112B:2017', 'mg/L', '', 150000, '(1)', 1, 18),
(195, 'Hàm lượng Đồng (Cu)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 18),
(196, 'Hàm lượng Sắt (Fe)', 'SMEWW 3111B:2017', 'mg/L', '', 150000, '(1)', 1, 18),
(197, 'Coliform tổng', 'TCVN 6187-2:1996', 'MPN/100ml', '', 150000, '(1)', 1, 18),
(198, 'Escherichiacoli (E.coli)', 'TCVN 6187-2:1996', 'MPN/100ml', '', 150000, '(1)', 1, 18),
(199, 'Hàm lượng Oxy hòa tan (DO)', 'SMEWW 5210B:2017', 'mg/L', '', 115000, '(1)', 1, 18),
(200, 'Tổng dầu mỡ', 'SMEWW 5520B:2017', 'mg/L', '', 250000, '', 1, 18),
(201, 'Dầu mỡ khoáng', 'SMEWW 5520.B&F-2017', 'mg/L', '', 250000, '', 1, 18),
(202, 'Dầu mỡ động thực vật', 'SMEWW 5520B:2017', 'mg/L', '', 500000, '', 1, 18),
(203, 'Trạng thái ', 'Cảm quan', '-', '', 70000, '', 1, 19),
(204, 'Màu sắc', 'Cảm quan', '-', '', 70000, '', 1, 19),
(205, 'Mùi vị', 'Cảm quan', '-', '', 70000, '', 1, 19),
(206, 'Chất chiết trong nước', 'TCVN 5610:2007', '%', '', 130000, '(1)', 1, 19),
(207, 'Tro tổng số', 'TCVN 5611:2007', '%', '', 120000, '(1)', 1, 19),
(208, 'Tro tan trong nước', 'TCVN 5084:1990', '%', '', 120000, '', 1, 19),
(209, 'Độ kiềm của tro tan trong nước ', 'TCVN 5085:1990', '%', '', 120000, '', 1, 19),
(210, 'Tro không tan trong axit, % (m/m)', 'TCVN 5612 : 2007', '%', '', 120000, '(1)', 1, 19),
(211, 'Hàm lượng As ', 'AOAC 986.15:2011', 'mg/L', '', 150000, '(1)(4)', 1, 19),
(212, 'Hàm lượng Cd ', 'AOAC 999.11:2011', 'mg/L', '', 150000, '(1)(4)', 1, 19),
(213, 'Hàm lượng Pb', 'AOAC 999.11:2011', 'mg/L', '', 150000, '(1)(4)', 1, 19),
(214, 'Hàm lượng Hg ', 'AOAC 971.21:2012', 'mg/L', '', 150000, '(1)(4)', 1, 19),
(215, ' Độ ẩm', 'TCVN 5613:2007', '%', '', 100000, '(1)', 1, 19),
(216, ' Tạp chất sắt', 'TCVN 5614:1991', '%', '', 100000, '(1)', 1, 19),
(217, ' Tạp chất lạ', 'TCVN 5615:1991', '%', '', 100000, '(1)', 1, 19),
(218, 'Màu sắc', 'Cảm quan', '-', '', 70000, '', 1, 20),
(219, 'Mùi vị', 'TCVN 5249:1990', '-', '', 70000, '', 1, 20),
(220, 'Trạng thái', 'Cảm quan', '-', '', 70000, '', 1, 20),
(221, 'Độ ẩm', 'TCVN 7035:2002', '%', '', 70000, '(1)', 1, 20),
(222, 'Hàm lượng tro không tan trong acid', 'TCVN 5253:1990', '%', '', 130000, '(1)', 1, 20),
(223, 'Hàm lượng tro tổng số', 'TCVN 5253:1990', '%', '', 130000, '(1)', 1, 20),
(224, 'Tỉ lệ chất tan trong nước', 'TCVN 5252:1990', '%', '', 120000, '(1)', 1, 20),
(225, 'Hàm lượng cafein', 'TCVN 9723:2013', '%', '', 440000, '(1)', 1, 20),
(226, 'Hàm lượng chì (Pb)', 'AOAC 999.11:2011', 'mg/L', '', 150000, '(1)(4)', 1, 20),
(227, 'Hàm lượng Asen (As)', 'AOAC 986.15:2011', 'mg/L', '', 150000, '(1)(4)', 1, 20),
(228, 'Hàm lượng Cadimi', 'AOAC 999.11:2011', 'mg/L', '', 150000, '(1)(4)', 1, 20),
(229, 'Hàm lượng Thủy ngân', 'AOAC 971.21:2012', 'mg/L', '', 150000, '(1)(4)', 1, 20),
(230, 'Độ mịn trên rây Φ 0.25 mm', 'TCVN 10821:2015', '%', '', 70000, '', 1, 20),
(231, 'Độ mịn dưới rây Φ 0.56 mm', 'TCVN 10821:2015', '%', '', 70000, '', 1, 20),
(232, 'Tạp chất lạ', 'TCVN 5252:1990', '%', '', 120000, '(1)', 1, 20),
(233, 'Phương pháp thử nếm', 'TCVN 5249:1990', '-', '', 120000, '', 1, 20),
(234, 'Màu sắc', 'Cảm quan', '-', '', 70000, '', 1, 21),
(235, 'Mùi vị', 'TCVN 5249:1990', '-', '', 70000, '', 1, 21),
(236, 'Trạng thái', 'Cảm quan', '-', '', 70000, '', 1, 21),
(237, 'Độ ẩm', 'TCVN 7035:2002', '%', '', 100000, '(1)', 1, 21),
(238, 'Hàm lượng tro không tan trong acid ', 'TCVN 5253:1990', '%', '', 130000, '(1)', 1, 21),
(239, 'Hàm lượng tro tổng số', 'TCVN 5253:1990', '%', '', 120000, '(1)', 1, 21),
(240, 'Tỉ lệ chất tan trong nước', 'TCVN 5252:1990', '%', '', 130000, '(1)', 1, 21),
(241, 'Hàm lượng cafein', 'TCVN 9723:2013', '%', '', 440000, '(1)', 1, 21),
(242, 'Hàm lượng chì (Pb)', 'AOAC 999.11:2011', 'mg/L', '', 150000, '(1)(4)', 1, 21),
(243, 'Hàm lượng Asen (As)', 'AOAC 986.15:2011', 'mg/L', '', 150000, '(1)(4)', 1, 21),
(244, 'Hàm lượng Cadimi', 'AOAC 999.11:2011', 'mg/L', '', 150000, '(1)(4)', 1, 21),
(245, 'Hàm lượng Thủy ngân', 'AOAC 971.21:2012', 'mg/L', '', 150000, '(1)(4)', 1, 21),
(246, 'Hạt tốt, tính theo % khối lượng, không nhỏ hơn', 'TCVN 5250:2015', '%', '', 70000, '', 1, 21),
(247, 'Hạt lỗi, tính theo % khối lượng, không lớn hơn', 'TCVN 5250:2015', '%', '', 70000, '', 1, 21),
(248, 'Mảnh vỡ, tính theo % khối lượng, không lớn hơn', 'TCVN 5250:2015', '%', '', 70000, '', 1, 21),
(249, 'Hàm lượng tạp chất, tính theo % khối lượng, không lớn hơn', 'TCVN 5250:2015', '%', '', 70000, '', 1, 21),
(250, 'Hàm lượng chì (Pb)', 'AOAC 999.11:2011', 'mg/L', '', 150000, '(1)(4)', 1, 22),
(251, 'Hàm lượng Asen (As)', 'AOAC 986.15:2011', 'mg/L', '', 150000, '(1)(4)', 1, 22),
(252, 'Hàm lượng Cadimi', 'AOAC 999.11:2011', 'mg/L', '', 150000, '(1)(4)', 1, 22),
(253, 'Hàm lượng Thủy ngân', 'AOAC 971.21:2012', 'mg/L', '', 150000, '(1)(4)', 1, 22),
(254, 'pH (KCl, H2O)', 'TCVN 5979:2007', '-', '', 100000, '(1)', 1, 23),
(255, 'Độ ẩm', 'TCVN 4048:2011', '%', '', 100000, '(1)', 1, 23),
(256, 'Hàm lượng chất hữu cơ', 'TCVN 8941:2011', '%', '', 160000, '(1)', 1, 23),
(257, ' Hàm lượng photpho dễ tiêu', 'TCVN 8661:2011', '%', '', 160000, '(1)', 1, 23),
(258, 'Hàm lượng acid humic/acid fulvic', 'TCVN 11456:2016', '%', '', 250000, '(1)', 1, 23),
(259, 'Hàm lượng Nitơ tổng số', 'TCVN 6498:1999', '%', '', 180000, '(1)', 1, 23),
(260, 'Hàm lượng Nitơ dễ tiêu', 'TCVN 5255:2009', '%', '', 180000, '(1)', 1, 23),
(261, 'Hàm lượng Kali dễ tiêu', 'TCVN 8662:2011', '%', '', 160000, '(1)', 1, 23),
(262, ' Hàm lượng Kali tổng số', 'TCVN 8660:2011', '%', '', 160000, '', 1, 23),
(263, ' Hàm lượng P2O5 tổng số', 'TCVN 8940:2011', '%', '', 160000, '', 1, 23),
(264, 'Hàm lượng Sắt (Fe)', 'TCVN 8246:2009', 'mg/L', '', 150000, '(1)', 1, 23),
(265, 'Hàm lượng Đồng (Cu)', 'TCVN 6496:2009', 'mg/L', '', 150000, '(1)', 1, 23),
(266, 'Hàm lượng Kẽm (Zn)', 'TCVN 6496:2009', 'mg/L', '', 150000, '(1)', 1, 23),
(267, 'Hàm lượng Mangan (Mn)', 'TCVN 6496:2009', 'mg/L', '', 150000, '(1)', 1, 23),
(268, 'Hàm lượng Crôm (Cr)', 'TCVN 6496:2009', 'mg/L', '', 150000, '(1)', 1, 23),
(269, 'Hàm lượng Niken (Ni)', 'TCVN 6496:2009', 'mg/L', '', 150000, '(1)', 1, 23),
(270, 'Hàm lượng Canxi (Ca)', 'TCVN 8246:2009', 'mg/L', '', 150000, '(1)', 1, 23),
(271, 'Hàm lượng Magie (Mg)', 'TCVN 8246:2009', 'mg/L', '', 150000, '(1)', 1, 23),
(272, ' Hàm lượng Chì (Pb)', 'TCVN 6496:2009', 'mg/L', '', 150000, '(1)', 1, 23),
(273, 'Hàm lượng Asen (As)', 'TCVN 8467:2010', 'mg/L', '', 150000, '(1)', 1, 23),
(274, 'Hàm lượng Cadimi (Cd)', 'TCVN 6496:2009', 'mg/L', '', 150000, '(1)', 1, 23),
(275, ' Hàm lượng Thủy ngân (Hg)', 'TCVN 8882:2011', 'mg/L', '', 220000, '', 1, 23),
(276, ' Hàm lượng Nitơ tổng số', 'TCVN 2620:2014', '%', '', 180000, '(1)', 1, 24),
(277, ' Hàm lượng Nitơ tổng số', 'TCVN 5815:2018', '%', '', 180000, '(1)', 1, 25),
(278, ' Hàm lượng P2O5 hữu hiệu', 'TCVN 5815:2018', '%', '', 160000, '(1)', 1, 25),
(279, ' Hàm lượng K2O hữu hiệu', 'TCVN 5815:2018', '%', '', 160000, '(1)', 1, 25),
(280, ' Hàm lượng Nitơ tổng', 'TCVN 8557:2010', '%', '', 180000, '(1)', 1, 26),
(281, ' Hàm lượng P2O5 tổng số', 'TCVN 8563:2010', '%', '', 160000, '(1)', 1, 26),
(282, ' Hàm lượng P2O5 hữu hiệu', 'TCVN 8559:2010', '%', '', 160000, '(1)(3)', 1, 26),
(283, ' Độ ẩm', 'TCVN 9297:2012', '%', '', 100000, '(1)(3)', 1, 26),
(284, 'Hàm lượng chất hữu cơ tổng số ', 'TCVN 9294:2012', '%', '', 150000, '(1)(3)', 1, 26),
(285, 'Hàm lượng axít humic', 'TCVN 8561:2010', '%', '', 250000, '(1)(3)', 1, 26),
(286, 'Hàm lượng axít fulvic', 'TCVN 8561:2010', '%', '', 250000, '(1)', 1, 26),
(287, ' Hàm lượng K2O hữu hiệu', 'TCVN 8560:2018', '%', '', 160000, '(1)', 1, 26),
(288, ' Hàm lượng Natri', 'TCVN 8560:2018', '%', '', 150000, '', 1, 26),
(289, ' Hàm lượng K2O tổng số', 'TCVN 8562:2010', '%', '', 160000, '(1)', 1, 26),
(290, 'pH (KCl, H2O)', 'TCVN 5979:2007', '-', '', 100000, '(1)', 1, 26),
(291, 'Tỷ lệ C/N', 'C:TCVN 9294:2012', '-', '', 340000, '(1)', 1, 26),
(292, 'Tỷ lệ C/N', 'N: TCVN 8557:2010', '-', '', 340000, '-1', 1, 26),
(293, ' Hàm lượng Kẽm (Zn)', 'TCVN 9289:2012', 'mg/L', '', 150000, '(1)(3)', 1, 26),
(294, ' Hàm lượng Đồng (Cu)', 'TCVN 9286:2018', 'mg/L', '', 150000, '(1)(3)', 1, 26),
(295, ' Hàm lượng Sắt (Fe)', 'TCVN 9283:2018', 'mg/L', '', 150000, '(1)(3)', 1, 26),
(296, ' Hàm lượng Mangan (Mn)', 'TCVN 9288:2012', 'mg/L', '', 150000, '(1)(3)', 1, 26),
(297, ' Hàm lượng Magie (Mg)', 'TCVN 9285:2018', 'mg/L', '', 150000, '(1)', 1, 26),
(298, ' Hàm lượng Canxi (Ca)', 'TCVN 9284:2018', 'mg/L', '', 150000, '(1)', 1, 26),
(299, ' Hàm lượng Chì (Pb) ', 'TCVN 9290:2018', 'mg/L', '', 150000, '(1)(3)', 1, 26),
(300, ' Hàm lượng Cadimi (Cd)', 'TCVN 9291:2018', 'mg/L', '', 150000, '(1)(3)', 1, 26),
(301, ' Hàm lượng Thủy ngân (Hg)', 'TCVN 10676:2015', 'mg/L', '', 150000, '(1)(3)', 1, 26),
(302, ' Hàm lượng Asen (As)', 'TCVN 11403:2016', 'mg/L', '', 150000, '(1)(3)', 1, 26),
(303, 'VSV cố định nitơ', 'TCVN 6166:2002', 'mg/L', '', 180000, '(1)', 1, 26),
(304, 'VSV phân giải Photpho khó tan', 'TCVN 6167:1996', 'mg/L', '', 160000, '(1)(3)', 1, 26),
(305, 'VSV phân giải Xenlulo', 'TCVN 6168:2002', 'mg/L', '', 200000, '(1)', 1, 26),
(306, 'Nhiệt độ', 'QCVN 46:2012/BTNMT', 'Đo tại hiện trường', '', 100000, '', 1, 27),
(307, 'Độ ẩm', 'QCVN 46:2012/BTNMT', 'Đo tại hiện trường', '', 100000, '', 1, 27),
(308, 'Áp suất', 'QCVN 46:2012/BTNMT', 'Đo tại hiện trường', '', 100000, '', 1, 27),
(309, 'Tiếng ồn', 'TCVN 7878-2:2010', 'Đo tại hiện trường', '', 100000, '', 1, 27),
(310, 'Tổng bụi lơ lững (TSP)', 'TCVN 5067:1995', 'Lấy tại hiện trường, thử nghiệm tại PTN', '', 300000, '', 1, 27),
(311, 'SO2', 'TCVN 5971:1995', 'Lấy tại hiện trường, thử nghiệm tại PTN', '', 150000, '', 1, 27),
(312, 'CO', 'SOP.04-03', 'Lấy tại hiện trường, thử nghiệm tại PTN', '', 150000, '', 1, 27),
(313, 'NO2', 'TCVN 6137:2009', 'Lấy tại hiện trường, thử nghiệm tại PTN', '', 150000, '', 1, 27);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission`
--

CREATE TABLE `permission` (
  `id` int(11) NOT NULL,
  `name` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `permission` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permission`
--

INSERT INTO `permission` (`id`, `name`, `permission`) VALUES
(0, 'quantri', '0'),
(1, 'nhanvien', 'A,C');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tenmau`
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
-- Đang đổ dữ liệu cho bảng `tenmau`
--

INSERT INTO `tenmau` (`id`, `name`, `chitieu`, `biennhan`, `method`, `statusmau`, `mass`, `code`, `mathunghiem`, `sum`, `date`, `mota`, `ngaylaymau`, `ngaynhanmau`, `thoigiankiemnghiem`, `thoigianluumau`, `noiguimau`, `tailieudinhkem`, `diachi`, `ketluan`, `status`, `ngayxacnhan`) VALUES
(185, 'dũng lê', '<ul><li><sup>(1)</sup>Hàm lượng Mangan (Mn)</li><li><sup>(1)</sup>Hàm lượng Canxi (Ca)</li><li><sup>(1)</sup>Hàm lượng Asen (As)</li><li><sup></sup> Hàm lượng Thủy ngân (Hg)</li></ul>', ',<sup>(1)</sup>Hàm lượng Mangan (Mn),<sup>(1)</sup>Hàm lượng Canxi (Ca),<sup>(1)</sup>Hàm lượng Asen (As),<sup></sup> Hàm lượng Thủy ngân (Hg)', '4', '43', '43', 'M15.1.2021', 55, 670000, '2021-05-23', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', 0, '0000-00-00'),
(186, 'Mẫu đất', '<ul><li><sup></sup>Hàm lượng Florua (F-)</li><li><sup>(1)</sup>Chỉ số Pecmanganat</li><li><sup></sup>Tổng dầu mỡ</li><li><sup></sup>Tổng dầu mỡ</li></ul>', ',<sup></sup>Hàm lượng Florua (F-),<sup>(1)</sup>Chỉ số Pecmanganat,<sup></sup>Tổng dầu mỡ,<sup></sup>Tổng dầu mỡ', '', '', '2', 'M15.2.2021', 55, 730000, '2021-05-23', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', 0, '0000-00-00'),
(187, '312', '<ul><li><sup>(1)(4)</sup>Hàm lượng Thủy ngân (Hg)</li><li><sup>(1)(4)</sup>Coliform tổng</li><li><sup>(1)(4)</sup>Bào tử kỵ khí sinh H2S</li></ul>', ',<sup>(1)(4)</sup>Hàm lượng Thủy ngân (Hg),<sup>(1)(4)</sup>Coliform tổng,<sup>(1)(4)</sup>Bào tử kỵ khí sinh H2S', '312', '', '321', 'M3.1.2022', 56, 520000, '2022-01-11', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', 0, '0000-00-00'),
(188, '12', '<ul></ul>', '', '321', '321', '32131', 'Mdungleba16@gmail.com.1.2022', 57, 0, '2022-01-11', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', 0, '0000-00-00'),
(189, 'Tin chính trị, kinh tế', '<ul><li><sup>(1)(4)</sup>Bào tử kỵ khí sinh H2S</li><li><sup>(1)</sup> Hàm lượng P2O5 hữu hiệu</li></ul>', ',<sup>(1)(4)</sup>Bào tử kỵ khí sinh H2S,<sup>(1)</sup> Hàm lượng P2O5 hữu hiệu', '4', '43', '43', 'Mdungleba16@gmail.com.2.2022', 57, 310000, '2022-01-11', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
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
  `status` tinyint(1) DEFAULT 0,
  `ordering` int(11) DEFAULT 10,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `fullname`, `password`, `created`, `created_by`, `modified`, `modified_by`, `register_date`, `register_ip`, `status`, `ordering`, `group_id`) VALUES
(1, 'admin', 'admin01@gmail.com', 'Admin 123466', 'c030437f6e8e94d244bc602606df5235', '0000-00-00', NULL, '2018-08-27', 'admin', '2013-12-03 08:12:23', '127.0.0.1', 1, 10, 0),
(2, 'tmnhan', '', 'Trương Minh Nhân', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00', NULL, '0000-00-00', NULL, '0000-00-00 00:00:00', NULL, 1, 10, 0),
(3, 'nthuy', '', 'Nguyễn Tất Huy', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00', NULL, '0000-00-00', NULL, '0000-00-00 00:00:00', NULL, 1, 10, 0),
(4, 'dmglinh', '', 'Đỗ Mỹ Gia Linh', '631c0fef35de6595b7cec7092b641eee', '0000-00-00', NULL, '0000-00-00', NULL, '0000-00-00 00:00:00', NULL, 1, 10, 0),
(5, 'ltbvy', '', 'Nguyễn Thị Kim Yến', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00', NULL, '0000-00-00', NULL, '0000-00-00 00:00:00', NULL, 1, 10, 0),
(6, 'ntly', '', 'Nguyễn Thụy Lý', 'ba6535e64db1576e876940aa77b66d61', '2019-11-21', NULL, '2019-11-21', NULL, '2019-11-21 00:00:00', NULL, 1, 10, 0),
(7, 'lvttly', 'dungleba16@gmail.com', 'Lê Võ thị Trúc Ly', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00', NULL, '0000-00-00', NULL, '0000-00-00 00:00:00', NULL, 1, 10, 0),
(8, 'ltbvy1', 'dungleba16@gmail.com', 'Lê thị bảo vy', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00', NULL, '0000-00-00', NULL, '0000-00-00 00:00:00', NULL, 1, 10, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chiso`
--
ALTER TABLE `chiso`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitieu`
--
ALTER TABLE `chitieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `mauchitieu`
--
ALTER TABLE `mauchitieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `mauthunghiem`
--
ALTER TABLE `mauthunghiem`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `method`
--
ALTER TABLE `method`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tenmau`
--
ALTER TABLE `tenmau`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `chiso`
--
ALTER TABLE `chiso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `chitieu`
--
ALTER TABLE `chitieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=717;

--
-- AUTO_INCREMENT cho bảng `code`
--
ALTER TABLE `code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `mauchitieu`
--
ALTER TABLE `mauchitieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `mauthunghiem`
--
ALTER TABLE `mauthunghiem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `method`
--
ALTER TABLE `method`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=315;

--
-- AUTO_INCREMENT cho bảng `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tenmau`
--
ALTER TABLE `tenmau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

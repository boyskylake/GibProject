-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:56596
-- Generation Time: Nov 19, 2018 at 05:45 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pigfarm`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id_act` int(7) NOT NULL,
  `name_act` varchar(255) NOT NULL,
  `date_act` varchar(50) NOT NULL,
  `detail_act` text NOT NULL,
  `id_photo` int(7) NOT NULL,
  `date_in` varchar(255) NOT NULL,
  `status_act` int(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id_act`, `name_act`, `date_act`, `detail_act`, `id_photo`, `date_in`, `status_act`) VALUES
(23, 'สุกรขุน', '2018-09-22  ', 'จำหน่ายสุกรขุน ราคาเป็นกันเอง', 38, '13-09-2018', 1),
(24, 'ลูกสุกร', '2018-09-29 ', '', 34, '13-09-2018', 1),
(30, 'ลูกสุกร', '2018-09-27  ', 'จับลูกสุกรขาย ตัวละ 1000 บาท', 36, '13-09-2018', 1),
(32, 'สุกร', '2018-09-28 ', '', 33, '13-09-2018', 1),
(33, 'สุกรขุนเกิดใหม่', '2018-10-26', 'สุกรขุนเกิดใหม่', 45, '27-10-2018', 0);

-- --------------------------------------------------------

--
-- Table structure for table `act_photo`
--

CREATE TABLE `act_photo` (
  `id_photo` int(7) NOT NULL,
  `name_photo` varchar(255) NOT NULL,
  `id_act` int(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `act_photo`
--

INSERT INTO `act_photo` (`id_photo`, `name_photo`, `id_act`) VALUES
(37, 'DSCF5170.JPG', 23),
(34, 'DSCF5133.JPG', 24),
(35, 'DSCF5133.JPG', 24),
(33, 'DSCF5159.JPG', 32),
(36, 'DSCF5140.JPG', 30),
(38, 'DSCF5170.JPG', 23),
(39, 'DSCF5140.JPG', 32),
(40, 'DSCF5149.JPG', 32),
(41, 'DSCF5155.JPG', 23),
(42, 'DSCF5130.JPG', 30),
(43, 'DSCF5140.JPG', 30),
(44, 'DSCF5165.JPG', 24),
(45, 'DSCF5235.JPG', 33);

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `list` varchar(255) NOT NULL,
  `b_money` int(5) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`id`, `date`, `list`, `b_money`, `created_date`) VALUES
(112, '2018-10-26', 'ซื้อผัก', 2000, '2018-10-26 12:49:20'),
(2, '2014-01-30', 'ข้าวกลางวัน', 30, '2014-02-04 18:02:38'),
(3, '2014-01-30', 'ข้าวเย็น', 35, '2014-02-04 18:02:54'),
(4, '2014-01-30', 'ซื้อขนม', 30, '2014-02-04 18:03:11'),
(5, '2014-01-30', 'เติมเงิน', 25, '2014-02-04 18:03:22'),
(6, '2014-01-31', 'ซื้อปลาท่องโก๋', 10, '2014-02-04 18:04:57'),
(7, '2014-01-31', 'ข้าวต้ม', 35, '2014-02-04 18:05:14'),
(8, '2014-01-31', 'ข้าวกลางวัน', 40, '2014-02-04 18:05:22'),
(9, '2014-01-31', 'ซื้อผลไม้', 20, '2014-02-04 18:05:41'),
(10, '2014-01-31', 'ซื้อน้ำเปล่า	+ ขนม', 35, '2014-02-04 18:06:36'),
(11, '2014-01-31', 'ซักผ้า', 15, '2014-02-04 18:06:20'),
(12, '2014-02-01', 'ข้าวกลางวัน', 35, '2014-02-04 18:10:49'),
(13, '2014-02-01', 'ใส่กระจกมอเตอร์ไซค์', 100, '2014-02-04 18:11:27'),
(14, '2014-02-01', 'ล้างมอเตอร์ไซค์', 40, '2014-02-04 18:11:49'),
(15, '2014-02-01', 'ซื้อผลไม้', 20, '2014-02-04 18:11:55'),
(16, '2014-02-02', 'ข้าวกลางวัน', 35, '2014-02-04 18:12:22'),
(17, '2014-02-02', 'กินย่างเกาหลี (อาอี๋)', 220, '2014-02-04 18:12:48'),
(18, '2014-02-02', 'ซื้อน้ำเปล่า	', 15, '2014-02-04 18:12:58'),
(19, '2014-02-03', 'ข้าวกลางวัน', 30, '2014-02-04 18:13:13'),
(20, '2014-02-03', 'ซื้อผลไม้', 20, '2014-02-04 18:13:22'),
(21, '2014-02-03', 'ซื้อน้ำเปล่า	', 15, '2014-02-04 18:13:32'),
(22, '2014-02-03', 'ซื้อไข่ต้ม', 15, '2014-02-04 18:13:40'),
(23, '2014-02-04', 'ข้าวกลางวัน', 40, '2014-02-04 18:14:04'),
(24, '2014-02-04', 'ซื้อไข่ต้ม', 15, '2014-02-04 18:14:14'),
(25, '2014-02-04', 'ซื้อผลไม้', 20, '2014-02-04 18:14:21'),
(26, '2014-02-05', 'ข้าวกลางวัน', 35, '2014-02-05 06:16:24'),
(27, '2014-02-05', 'ซื้อขนมปัง(นัดมอ)', 30, '2014-02-05 06:17:00'),
(28, '2014-02-05', 'ซักผ้า', 20, '2014-02-05 06:17:09'),
(29, '2014-02-05', 'ซื้อผลไม้', 25, '2014-02-05 13:30:07'),
(30, '2014-02-05', 'ซื้อไข่ต้ม', 15, '2014-02-05 13:30:12'),
(31, '2014-02-05', 'ซื้อนมโฟโมส', 17, '2014-02-05 13:30:24'),
(32, '2014-02-05', 'ซื้อยาสีฟัน', 31, '2014-02-05 13:30:36'),
(33, '2014-02-05', 'เติมเงิน', 20, '2014-02-05 13:31:04'),
(34, '2014-02-05', 'ซื้อน้ำเปล่า	', 15, '2014-02-05 17:05:51'),
(35, '2014-02-06', 'ข้าวกลางวัน', 35, '2014-02-06 14:53:36'),
(36, '2014-02-06', 'ซื้อผลไม้', 25, '2014-02-06 14:53:42'),
(37, '2014-02-06', 'ซื้อไข่ต้ม', 15, '2014-02-06 14:53:50'),
(38, '2014-02-07', 'ซื้อน้ำเปล่า	', 15, '2014-02-07 16:18:00'),
(39, '2014-02-07', 'กินนม(สุดเขต)', 90, '2014-02-07 16:18:26'),
(40, '2014-02-07', 'ข้าวกลางวัน', 30, '2014-02-07 16:18:38'),
(41, '2014-02-07', 'ทำบุญ', 10, '2014-02-07 16:18:51'),
(42, '2014-02-07', 'กินข้าวต้ม', 42, '2014-02-07 16:19:20'),
(43, '2014-02-07', 'ซื้อเค้กให้แอ้', 20, '2014-02-07 16:19:36'),
(44, '2014-02-07', 'จ่ายค่าเสื้อ ค่าย Linux & C', 150, '2014-02-07 16:23:16'),
(45, '2014-02-07', 'จ่ายค่าเสื้อ ค่าย Linux & C (ให้เจมส์)', 150, '2014-02-07 16:23:30'),
(46, '2014-02-08', 'ซื้อขนม', 20, '2014-02-08 10:01:31'),
(47, '2014-02-08', 'ข้าวกลางวัน', 35, '2014-02-08 10:01:40'),
(48, '2014-02-08', 'เติมน้ำมันรถ', 100, '2014-02-08 10:02:00'),
(49, '2014-02-08', 'ซื้อน้ำเปล่า	', 15, '2014-02-08 13:46:33'),
(50, '2014-02-08', 'ซื้อสปอนเซอร์', 10, '2014-02-08 13:46:51'),
(51, '2014-02-08', 'ข้าวเย็น', 40, '2014-02-08 16:59:19'),
(52, '2014-02-09', 'ข้าวกลางวัน', 35, '2014-02-09 07:37:37'),
(53, '2014-02-09', 'ซักผ้า', 15, '2014-02-09 07:39:00'),
(54, '2014-02-09', 'ซื้อผลไม้', 25, '2014-02-09 12:41:24'),
(55, '2014-02-09', 'ซื้อน้ำเปล่า	', 15, '2014-02-09 12:41:30'),
(56, '2014-02-09', 'ซื้อไข่ต้ม', 15, '2014-02-09 12:41:38'),
(57, '2014-02-09', 'ซื้อขนมปัง(เซเว่น)', 7, '2014-02-09 12:42:13'),
(58, '2014-02-09', 'ซื้อผลไม้(แอ้)', 20, '2014-02-09 12:42:28'),
(59, '2014-02-10', 'ฝากเงิน(ไทยพาณิชย์)', 200, '2014-02-10 04:16:59'),
(60, '2014-02-10', 'ข้าวกลางวัน', 30, '2014-02-10 04:17:13'),
(61, '2014-02-10', 'ซื้อผลไม้', 20, '2014-02-10 09:56:28'),
(62, '2014-02-10', 'ซื้อขนมปัง(เซเว่น)', 13, '2014-02-10 09:56:46'),
(63, '2014-02-10', 'ซื้อนมไวตามิลล์', 10, '2014-02-10 09:57:06'),
(64, '2014-02-10', 'ซื้อไข่ต้ม', 15, '2014-02-10 09:57:11'),
(65, '2014-02-10', 'แอ้ยืมซื้อผลไม้', 20, '2014-02-11 12:08:03'),
(66, '2014-02-10', 'ข้าวเย็น(ไข่เจียว)', 25, '2014-02-11 12:08:39'),
(67, '2014-02-11', 'ข้าวเย็น(ไข่เจียว)(แอ้)', 25, '2014-02-11 12:08:49'),
(68, '2014-02-11', 'ข้าวเช้า', 30, '2014-02-11 12:09:09'),
(69, '2014-02-11', 'แกน Lotting', 30, '2014-02-11 12:09:21'),
(70, '2014-02-11', 'ข้าวกลางวัน', 40, '2014-02-11 12:09:39'),
(71, '2014-02-11', 'ซื้อไข่ต้ม', 15, '2014-02-11 12:09:55'),
(72, '2014-02-12', 'ข้าวกลางวัน', 30, '2014-02-12 13:55:03'),
(74, '2014-02-12', 'ซื้อข้าวโพดทอด(นัดมอ)', 20, '2014-02-12 13:55:40'),
(75, '2014-02-12', 'ซื้อไข่ต้ม', 15, '2014-02-12 13:55:47'),
(76, '2014-02-12', 'ซื้อนมโฟโมส', 12, '2014-02-12 13:56:03'),
(77, '2014-02-12', 'ซื้อน้ำเปล่า	', 15, '2014-02-12 14:01:40'),
(78, '2014-02-13', 'ข้าวกลางวัน', 40, '2014-02-13 14:39:07'),
(79, '2014-02-13', 'ซื้อขนมปัง(เซเว่น)', 14, '2014-02-13 17:08:24'),
(80, '2014-02-13', 'ซื้อน้ำเปล่า	', 15, '2014-02-13 14:39:37'),
(85, '2018-08-13', 'ยาบ้า', 100, '2018-08-13 10:03:13'),
(86, '2018-08-13', 'ซื้อผัก', 700, '2018-08-13 13:15:36'),
(87, '2018-08-13', 'ซื้อผัก', 500, '2018-08-26 14:22:17'),
(88, '2018-08-26', 'ซื้อผัก1', 1000, '2018-08-26 17:18:13'),
(108, '2018-09-20', 'ซื้อหวัดซีน วัคซีนลดไข้ จำนวน 3', 375, '2018-10-30 08:22:55'),
(101, '2018-09-20', 'ซื้อหวัดซีน วัคซีน1 จำนวน 200', 24000, '2018-09-20 09:51:00'),
(102, '2018-09-20', 'ซื้อหวัดซีน วัคซีน2 จำนวน 10', 1200, '2018-09-20 11:52:03'),
(103, '2018-09-20', 'ซื้อหวัดซีน วัคซีน1 จำนวน 10', 200, '2018-09-20 13:37:45'),
(104, '2018-09-20', 'ซื้อหวัดซีน วัคซีน1 จำนวน 200', 20000, '2018-09-20 13:38:32'),
(105, '2018-09-20', 'ซื้อหวัดซีน วัคซีน1 จำนวน 12', 240, '2018-09-20 13:40:26'),
(106, '2018-09-20', 'ซื้อหวัดซีน วัคซีน1 จำนวน 12', 240, '2018-09-20 13:41:01'),
(107, '2018-09-20', 'ซื้อหวัดซีน วัคซีนโรค จำนวน 14', 280, '2018-10-25 19:04:11'),
(109, '2018-09-21', 'ซื้อหวัดซีน วัคซีนเสริม จำนวน 9', 900, '2018-10-25 16:03:50'),
(115, '2018-10-26', 'ซื้อหวัดซีน วัคซีนโรคปากและเท้าเปื่อย จำนวน 10', 2300, '2018-10-25 20:00:30'),
(116, '2018-10-26', 'ซื้อหวัดซีน วัคซีนที่1 จำนวน 5', 2500, '2018-10-26 10:46:53'),
(117, '2018-10-30', 'ซื้อหวัดซีน วัคซีนลดไข้1 จำนวน 600', 3000, '2018-10-30 03:43:33'),
(118, '2018-10-30', 'ซื้อหวัดซีน วัคซีนลดไข้ 2 จำนวน 5', 1500, '2018-10-30 09:43:46');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `UserID` int(3) UNSIGNED ZEROFILL NOT NULL,
  `Username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Status` enum('ADMIN','USER') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'USER'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`UserID`, `Username`, `Password`, `Name`, `Status`) VALUES
(001, 'user', '123', 'test 321', 'USER'),
(002, 'admin', '123', 'test 123', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `pf_amount`
--

CREATE TABLE `pf_amount` (
  `id_an` int(11) NOT NULL,
  `amount` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pf_amount`
--

INSERT INTO `pf_amount` (`id_an`, `amount`) VALUES
(1, 55);

-- --------------------------------------------------------

--
-- Table structure for table `pf_buyvac`
--

CREATE TABLE `pf_buyvac` (
  `Id` int(11) NOT NULL,
  `id_buy` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date_buy` date NOT NULL,
  `amount` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `status` enum('มี','หมด') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'มี'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pf_buyvac`
--

INSERT INTO `pf_buyvac` (`Id`, `id_buy`, `name`, `date_buy`, `amount`, `price`, `status`) VALUES
(2, 101, 'วัคซีน2', '2018-09-20', 0, 120, 'หมด'),
(3, 107, 'วัคซีนโรค', '2018-09-21', 13, 20, 'มี'),
(4, 108, 'วัคซีนลดไข้', '2018-09-21', 3, 125, 'มี'),
(5, 109, 'วัคซีนเสริม', '2018-09-20', 5, 100, 'มี'),
(9, 115, 'วัคซีนโรคปากและเท้าเปื่อย', '2018-10-26', 7, 230, 'มี'),
(10, 116, 'วัคซีนที่1', '2018-10-26', 5, 500, 'มี'),
(11, 117, 'วัคซีนลดไข้1', '2018-10-30', 600, 5, 'มี'),
(12, 118, 'วัคซีนลดไข้ 2', '2018-10-29', 5, 100, 'มี');

-- --------------------------------------------------------

--
-- Table structure for table `pf_pig`
--

CREATE TABLE `pf_pig` (
  `Id` int(11) NOT NULL,
  `No` int(11) NOT NULL,
  `id_stall` int(11) NOT NULL,
  `id_typepig` int(11) NOT NULL,
  `bdate` date NOT NULL,
  `status` enum('อยู่','ขายแล้ว') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'อยู่'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pf_pig`
--

INSERT INTO `pf_pig` (`Id`, `No`, `id_stall`, `id_typepig`, `bdate`, `status`) VALUES
(1, 1, 2, 0, '2018-09-14', 'ขายแล้ว'),
(2, 2, 1, 1, '2018-09-29', 'ขายแล้ว'),
(4, 111, 1, 1, '2018-09-21', 'ขายแล้ว'),
(5, 123, 2, 2, '2018-09-13', 'ขายแล้ว'),
(6, 1234, 1, 1, '2018-09-21', 'ขายแล้ว'),
(7, 1, 4, 2, '2018-09-03', 'ขายแล้ว'),
(8, 112, 2, 1, '2018-08-26', 'ขายแล้ว'),
(9, 2, 4, 3, '2018-08-04', 'ขายแล้ว'),
(10, 3, 4, 3, '2018-09-01', 'ขายแล้ว'),
(11, 301, 4, 3, '2018-09-01', 'อยู่'),
(12, 201, 2, 2, '2018-07-06', 'ขายแล้ว'),
(13, 202, 2, 2, '2018-07-01', 'อยู่'),
(14, 113, 1, 1, '2018-10-01', 'ขายแล้ว'),
(15, 114, 1, 1, '2018-10-01', 'ขายแล้ว'),
(16, 115, 1, 1, '2018-10-01', 'ขายแล้ว'),
(17, 116, 1, 1, '2018-10-01', 'อยู่'),
(18, 203, 2, 2, '2018-10-01', 'อยู่'),
(19, 204, 2, 2, '2018-10-01', 'อยู่'),
(20, 205, 2, 2, '2018-10-01', 'อยู่'),
(21, 302, 3, 3, '2018-09-06', 'อยู่'),
(22, 303, 3, 3, '2018-09-05', 'อยู่');

-- --------------------------------------------------------

--
-- Table structure for table `pf_stall`
--

CREATE TABLE `pf_stall` (
  `Id_sl` int(11) NOT NULL,
  `name_sl` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pf_stall`
--

INSERT INTO `pf_stall` (`Id_sl`, `name_sl`) VALUES
(1, 'คอก1'),
(2, 'คอก2'),
(3, 'คอก3'),
(4, 'คอก4'),
(5, 'คอก5');

-- --------------------------------------------------------

--
-- Table structure for table `pf_typepig`
--

CREATE TABLE `pf_typepig` (
  `Id_tp` int(11) NOT NULL,
  `name_tp` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pf_typepig`
--

INSERT INTO `pf_typepig` (`Id_tp`, `name_tp`) VALUES
(1, 'แม่พันธุ์'),
(2, 'พ่อพันธุ์'),
(3, 'สุกรขุน');

-- --------------------------------------------------------

--
-- Table structure for table `pf_vaccine`
--

CREATE TABLE `pf_vaccine` (
  `Id` int(11) NOT NULL,
  `id_pig` int(11) NOT NULL,
  `id_vacbuy` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pf_vaccine`
--

INSERT INTO `pf_vaccine` (`Id`, `id_pig`, `id_vacbuy`, `date`) VALUES
(1, 4, 3, '2018-07-31'),
(2, 4, 3, '2018-09-27'),
(3, 4, 3, '2018-09-20'),
(4, 4, 2, '2018-09-20'),
(5, 4, 2, '2018-09-21'),
(6, 4, 2, '2018-09-21'),
(7, 4, 2, '2018-09-24'),
(8, 5, 3, '2018-09-27'),
(9, 4, 5, '2018-09-21'),
(10, 4, 4, '2018-09-22'),
(11, 5, 4, '2018-09-21'),
(12, 5, 4, '2018-09-27'),
(13, 6, 4, '2018-10-10'),
(14, 9, 4, '2018-09-01'),
(15, 8, 7, '2018-10-17'),
(16, 7, 3, '2018-10-02'),
(17, 8, 4, '2018-10-13'),
(18, 8, 5, '2018-10-26'),
(19, 13, 5, '2018-10-05'),
(20, 12, 9, '2018-10-26'),
(21, 15, 3, '2018-10-30'),
(22, 16, 5, '2018-10-30'),
(23, 20, 9, '2018-10-23'),
(24, 22, 5, '2018-10-21'),
(25, 15, 4, '2018-10-29'),
(26, 14, 9, '2018-10-30');

-- --------------------------------------------------------

--
-- Table structure for table `recieve`
--

CREATE TABLE `recieve` (
  `id` int(5) NOT NULL,
  `date` date NOT NULL,
  `from` varchar(255) NOT NULL,
  `r_money` int(5) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recieve`
--

INSERT INTO `recieve` (`id`, `date`, `from`, `r_money`, `created_date`) VALUES
(30, '2018-10-26', 'ขายสุกร', 3000, '2018-10-26 12:54:49'),
(2, '2014-02-01', 'กดเงินมา', 300, '2014-02-04 17:59:51'),
(3, '2014-02-03', 'กดเงินมา', 200, '2014-02-04 18:00:14'),
(4, '2014-02-05', 'กดเงินมา', 200, '2014-02-05 13:29:52'),
(5, '2014-02-06', 'กดเงินมา', 300, '2014-02-06 14:53:20'),
(6, '2014-02-07', 'กดเงินมา', 500, '2014-02-07 16:17:42'),
(7, '2014-02-09', 'เจมส์ให้ค่าเสื้อ', 50, '2014-02-09 07:38:07'),
(8, '2014-02-09', 'เจมส์ให้ค่าเสื้อ', 100, '2014-02-09 12:41:02'),
(9, '2014-02-10', 'กดเงินมา', 500, '2014-02-10 04:16:33'),
(10, '2014-02-12', 'ยืมโก้(สุรินทร์) - นัดมอ', 100, '2014-02-12 13:56:36'),
(11, '2014-02-12', 'กดเงินมา', 300, '2014-02-12 13:56:44'),
(13, '2018-08-13', 'ซื้อขนม', 10, '2018-08-13 08:12:08'),
(14, '2018-08-13', 'ขายยา', 200000, '2018-08-13 09:02:59'),
(15, '2018-08-13', 'ขายหมู', 600, '2018-08-13 13:10:49'),
(16, '2018-08-13', 'asdasdsad', 100, '2018-08-13 14:22:01'),
(17, '2018-08-13', 'ขายหมา', 300, '2018-08-13 14:26:34'),
(18, '2018-09-10', 'ซื้อขนม', 10, '2018-09-10 05:39:52'),
(19, '2018-09-10', 'ซื้อม่ราา', 1000, '2018-09-10 05:40:26'),
(20, '2018-09-13', 'ขายสุกรเลขที่ 2', 3000, '2018-09-13 18:30:05'),
(28, '2018-09-21', 'ขายสุกรเลขที่ 111', 8000, '2018-09-20 17:55:22'),
(29, '2018-09-21', 'ขายสุกรเลขที่ 123', 6600, '2018-09-20 17:59:26'),
(31, '2018-10-26', 'ขายหมู', 20000, '2018-10-26 01:33:42'),
(32, '2018-10-26', 'ขายสุกรเลขที่ 1234', 5500, '2018-10-26 01:59:08'),
(33, '2018-10-26', 'ขายสุกรเลขที่ 3', 5500, '2018-10-26 01:59:54'),
(34, '2018-10-26', 'ขายสุกรเลขที่ 1', 4000, '2018-10-26 02:01:02'),
(35, '2018-10-28', 'ขายสุกรเลขที่ 112', 5490, '2018-10-28 02:53:47'),
(36, '2018-10-28', 'ขายสุกรเลขที่ 2', 4505, '2018-10-28 03:23:11'),
(37, '2018-10-28', 'ขายสุกรเลขที่ 201', 348, '2018-10-28 08:46:49'),
(38, '2018-10-30', 'ขายหมู', 5000, '2018-10-30 03:40:52'),
(39, '2018-10-30', 'ขายหมู', 2500, '2018-10-30 04:14:09'),
(40, '2018-10-30', 'ขายสุกรเลขที่ 113', 3190, '2018-10-30 04:22:51'),
(41, '2018-10-30', 'ขายสุกรเลขที่ 114', 6670, '2018-10-30 04:23:49'),
(42, '2018-10-30', 'ขายสุกรเลขที่ 115', 2915, '2018-10-30 04:24:24'),
(43, '2018-10-30', 'ขายหมู', 2500, '2018-10-30 04:43:19');

-- --------------------------------------------------------

--
-- Table structure for table `td_about`
--

CREATE TABLE `td_about` (
  `Id` int(11) NOT NULL,
  `Topic` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `td_about`
--

INSERT INTO `td_about` (`Id`, `Topic`, `Description`) VALUES
(2, 'สินค้าของฟาร์ม', 'ลูกหมู อายุ 1 เดือน\r\nหมูขุน'),
(3, 'ที่ตั้งฟาร์มสุกรลักษมี', 'ตั้งอยู่ที่ เลขที่ 130 หมู่ 2 ตำบลวาใหญ่ อำเภออากาศอำนวย จังหวัดสกลนคร 47170');

-- --------------------------------------------------------

--
-- Table structure for table `td_contect`
--

CREATE TABLE `td_contect` (
  `Id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `td_contect`
--

INSERT INTO `td_contect` (`Id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'สิริรัตน์  คำเกาะ', 'sirirat.kh58@snru.ac.th', '0844172967', 'มีลูกหมูขายกี่ตัว'),
(2, 'พิมพ์ชนก', 'pimchanok.su58@snru.ac.th', '0615809943', 'อยากซื้อสุกร 3 ตัว');

-- --------------------------------------------------------

--
-- Table structure for table `td_service`
--

CREATE TABLE `td_service` (
  `Id` int(11) NOT NULL,
  `Topic` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `td_service`
--

INSERT INTO `td_service` (`Id`, `Topic`, `Description`) VALUES
(3, 'บริการขายสุกร', 'ซื้อลูกสุกรวันนี้  บริการจับให้ฟรี ');

-- --------------------------------------------------------

--
-- Table structure for table `td_team`
--

CREATE TABLE `td_team` (
  `Id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` text COLLATE utf8_unicode_ci NOT NULL,
  `twitter` text COLLATE utf8_unicode_ci NOT NULL,
  `rss` text COLLATE utf8_unicode_ci NOT NULL,
  `pic_file` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `td_team`
--

INSERT INTO `td_team` (`Id`, `name`, `position`, `facebook`, `twitter`, `rss`, `pic_file`) VALUES
(4, 'เอี่ยมวิลัย  คำเกาะ', 'ผู้ให้อาหารสุกร', 'https://www.facebook.com/kib.sirirat', 'https://www.twitter.com', '', '55555.jpg'),
(5, 'ลักษมี  อ่อนอำพันธุ์', 'เจ้าชองฟาร์ม', 'https://www.facebook.com/kib.sirirat', '', '', '000.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id_act`);

--
-- Indexes for table `act_photo`
--
ALTER TABLE `act_photo`
  ADD PRIMARY KEY (`id_photo`);

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `pf_amount`
--
ALTER TABLE `pf_amount`
  ADD PRIMARY KEY (`id_an`);

--
-- Indexes for table `pf_buyvac`
--
ALTER TABLE `pf_buyvac`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `pf_pig`
--
ALTER TABLE `pf_pig`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `pf_stall`
--
ALTER TABLE `pf_stall`
  ADD PRIMARY KEY (`Id_sl`);

--
-- Indexes for table `pf_typepig`
--
ALTER TABLE `pf_typepig`
  ADD PRIMARY KEY (`Id_tp`);

--
-- Indexes for table `pf_vaccine`
--
ALTER TABLE `pf_vaccine`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `recieve`
--
ALTER TABLE `recieve`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `td_about`
--
ALTER TABLE `td_about`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `td_contect`
--
ALTER TABLE `td_contect`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `td_service`
--
ALTER TABLE `td_service`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `td_team`
--
ALTER TABLE `td_team`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id_act` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `act_photo`
--
ALTER TABLE `act_photo`
  MODIFY `id_photo` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `UserID` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pf_amount`
--
ALTER TABLE `pf_amount`
  MODIFY `id_an` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pf_buyvac`
--
ALTER TABLE `pf_buyvac`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `pf_pig`
--
ALTER TABLE `pf_pig`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `pf_stall`
--
ALTER TABLE `pf_stall`
  MODIFY `Id_sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pf_typepig`
--
ALTER TABLE `pf_typepig`
  MODIFY `Id_tp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pf_vaccine`
--
ALTER TABLE `pf_vaccine`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `recieve`
--
ALTER TABLE `recieve`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `td_about`
--
ALTER TABLE `td_about`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `td_contect`
--
ALTER TABLE `td_contect`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `td_service`
--
ALTER TABLE `td_service`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `td_team`
--
ALTER TABLE `td_team`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

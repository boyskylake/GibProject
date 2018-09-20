-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2018 at 08:10 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
(23, 'act1', '2018-09-22', 'act1 detail', 23, '13-09-2018', 1),
(24, 'act2', '2018-09-29', 'act2 detail', 24, '13-09-2018', 1),
(30, 'act8', '2018-09-27', 'ngdbcxv', 30, '13-09-2018', 1),
(32, 'act10', '2018-09-28', 'regdfgfdgsdf', 31, '13-09-2018', 0);

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
(23, 'Learn-coding-online.jpeg', 23),
(24, 'line api.png', 24),
(30, 'Program-Code-Feature-Image.jpg', 30),
(31, 'img_23744_tmp_5aPPR_600x600.jpg', 32);

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
(1, '2014-01-30', 'น้ำมันรถ', 100, '2014-02-04 18:02:21'),
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
(73, '2014-02-12', 'ซื้อขนมปัง(นัดมอ)', 30, '2014-02-12 13:55:19'),
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
(108, '2018-09-20', 'ซื้อหวัดซีน วัคซีน3 จำนวน 10', 120, '2018-09-20 16:04:50'),
(101, '2018-09-20', 'ซื้อหวัดซีน วัคซีน1 จำนวน 200', 24000, '2018-09-20 09:51:00'),
(102, '2018-09-20', 'ซื้อหวัดซีน วัคซีน2 จำนวน 10', 1200, '2018-09-20 11:52:03'),
(103, '2018-09-20', 'ซื้อหวัดซีน วัคซีน1 จำนวน 10', 200, '2018-09-20 13:37:45'),
(104, '2018-09-20', 'ซื้อหวัดซีน วัคซีน1 จำนวน 200', 20000, '2018-09-20 13:38:32'),
(105, '2018-09-20', 'ซื้อหวัดซีน วัคซีน1 จำนวน 12', 240, '2018-09-20 13:40:26'),
(106, '2018-09-20', 'ซื้อหวัดซีน วัคซีน1 จำนวน 12', 240, '2018-09-20 13:41:01'),
(107, '2018-09-20', 'ซื้อหวัดซีน วัคซีน1 จำนวน 12', 240, '2018-09-20 13:41:56'),
(109, '2018-09-21', 'ซื้อหวัดซีน วัคซีน2 จำนวน 10', 1000, '2018-09-20 17:15:31');

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
(3, 107, 'วัคซีน1', '2018-09-21', 11, 20, 'มี'),
(4, 108, 'วัคซีน3', '2018-09-21', 7, 12, 'มี'),
(5, 109, 'วัคซีน2', '2018-09-20', 9, 100, 'มี');

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
(6, 1234, 1, 1, '2018-09-21', 'อยู่');

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
(3, 'คอก3');

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
(1, 'แม่พัน'),
(2, 'พ่อพัน');

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
(12, 5, 4, '2018-09-27');

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
(1, '2014-01-30', 'มีเงินอยู่', 540, '2014-02-04 17:59:26'),
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
(19, '2018-09-10', 'ซื้อม่ราา', 100, '2018-09-10 05:40:26'),
(20, '2018-09-13', 'ขายสุกรเลขที่ 2', 3000, '2018-09-13 18:30:05'),
(28, '2018-09-21', 'ขายสุกรเลขที่ 111', 6600, '2018-09-20 17:55:22'),
(29, '2018-09-21', 'ขายสุกรเลขที่ 123', 6600, '2018-09-20 17:59:26');

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
(1, 'หัวข้อ', 'รายละเอียด'),
(2, 'หัวข้อ2', 'รายละเอียด2'),
(3, 'หัวข้อ22', 'ละเอียด//');

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
(3, 'service', 'detail service');

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
(2, 'name122', 'position122', 'facebook22', 'twitter22', 'rss22', '37293500_2121795891398520_2020020138325049344_n.jpg'),
(3, 'name3222', 'position3222', '', '', '', 'Capture.PNG'),
(4, 'name sername', 'position', 'https://www.facebook.com', 'https://www.twitter.com', '', 'DSC_0155_Cover.jpg');

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
  MODIFY `id_act` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `act_photo`
--
ALTER TABLE `act_photo`
  MODIFY `id_photo` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `UserID` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pf_buyvac`
--
ALTER TABLE `pf_buyvac`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pf_pig`
--
ALTER TABLE `pf_pig`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pf_stall`
--
ALTER TABLE `pf_stall`
  MODIFY `Id_sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pf_typepig`
--
ALTER TABLE `pf_typepig`
  MODIFY `Id_tp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pf_vaccine`
--
ALTER TABLE `pf_vaccine`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `recieve`
--
ALTER TABLE `recieve`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

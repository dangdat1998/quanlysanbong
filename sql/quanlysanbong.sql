-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2022 at 10:21 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlysanbong`
--

-- --------------------------------------------------------

--
-- Table structure for table `dat_san`
--

CREATE TABLE `dat_san` (
  `id` int(11) NOT NULL,
  `ma_kh` int(11) NOT NULL,
  `ma_san` int(11) NOT NULL,
  `bat_dau` datetime NOT NULL,
  `ket_thuc` datetime NOT NULL,
  `da_thanh_toan` tinyint(1) NOT NULL,
  `don_gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `dat_san`
--

INSERT INTO `dat_san` (`id`, `ma_kh`, `ma_san`, `bat_dau`, `ket_thuc`, `da_thanh_toan`, `don_gia`) VALUES
(253, 6, 21, '2022-05-23 05:00:00', '2022-05-23 06:45:00', 1, 3000),
(254, 3, 22, '2022-05-24 07:00:00', '2022-05-24 09:00:00', 1, 3000),
(255, 3, 21, '2022-05-24 10:00:00', '2022-05-24 12:00:00', 1, 3000),
(256, 3, 21, '2022-05-24 12:15:00', '2022-05-24 14:00:00', 1, 3000),
(257, 3, 24, '2022-05-24 20:00:00', '2022-05-24 22:30:00', 1, 8000),
(260, 4, 20, '2022-06-02 05:00:00', '2022-06-02 05:15:00', 1, 3000),
(261, 4, 20, '2022-06-02 05:30:00', '2022-06-02 05:45:00', 1, 3000),
(262, 1, 20, '2022-06-02 06:00:00', '2022-06-02 06:15:00', 1, 3000),
(263, 3, 20, '2022-06-03 05:00:00', '2022-06-03 12:15:00', 1, 3000),
(273, 3, 27, '2022-06-03 08:00:00', '2022-06-03 09:30:00', 1, 3000),
(275, 6, 22, '2022-06-03 09:00:00', '2022-06-03 16:15:00', 1, 3000),
(277, 3, 20, '2022-06-03 19:00:00', '2022-06-03 19:15:00', 1, 8000),
(278, 3, 21, '2022-06-03 07:00:00', '2022-06-03 10:15:00', 1, 3000),
(279, 3, 23, '2022-06-03 09:00:00', '2022-06-03 09:15:00', 1, 3000),
(280, 3, 28, '2022-06-03 05:00:00', '2022-06-03 11:15:00', 0, 3000),
(281, 6, 21, '2022-06-04 20:00:00', '2022-06-04 21:45:00', 1, 8000),
(282, 6, 28, '2022-06-04 10:00:00', '2022-06-04 12:00:00', 1, 3000),
(283, 7, 23, '2022-06-04 20:00:00', '2022-06-04 22:00:00', 0, 8000),
(295, 3, 24, '2022-06-04 06:00:00', '2022-06-04 12:30:00', 0, 3000),
(296, 3, 22, '2022-06-04 05:00:00', '2022-06-04 05:30:00', 0, 3000),
(297, 3, 20, '2022-06-04 05:00:00', '2022-06-04 19:15:00', 1, 3000),
(302, 3, 22, '2022-06-04 09:00:00', '2022-06-04 22:15:00', 0, 3000),
(303, 3, 22, '2022-06-07 05:00:00', '2022-06-07 18:15:00', 0, 3000),
(304, 3, 24, '2022-06-07 07:00:00', '2022-06-07 15:15:00', 0, 3000),
(305, 3, 20, '2022-06-07 07:00:00', '2022-06-07 15:15:00', 0, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `username` varchar(225) CHARACTER SET utf8 NOT NULL,
  `title` text NOT NULL,
  `content` longtext CHARACTER SET utf8 NOT NULL,
  `time` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `username`, `title`, `content`, `time`) VALUES
(16, 'dangdat', 'Lịch nghỉ lễ', 'Sân sẽ nghỉ vào thứ 3 tuần này (7/6/1998)\n', '1654323846'),
(17, 'dangdat', 'Lịch mở cửa', 'Sân sẽ mở cửa vào lúc 8h sáng\n', '1654323870');

-- --------------------------------------------------------

--
-- Table structure for table `san_bong`
--

CREATE TABLE `san_bong` (
  `id` int(11) NOT NULL,
  `ten` varchar(40) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `san_bong`
--

INSERT INTO `san_bong` (`id`, `ten`) VALUES
(20, 'Sân 1'),
(21, 'Sân 2'),
(22, 'Sân 3'),
(23, 'Sân 4'),
(24, 'Sân 5'),
(26, 'Sân 6'),
(27, 'Sân 7'),
(28, 'Sân 8');

-- --------------------------------------------------------

--
-- Table structure for table `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8 NOT NULL,
  `sdt` varchar(255) CHARACTER SET utf8 NOT NULL,
  `username` varchar(40) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(40) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `chucvu` varchar(255) CHARACTER SET utf8 NOT NULL,
  `time` varchar(225) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `tai_khoan`
--

INSERT INTO `tai_khoan` (`id`, `ten`, `sdt`, `username`, `password`, `chucvu`, `time`) VALUES
(1, 'Nguyễn Như Quỳnh', '0999999889', 'quynh', '123456', '1', '1653311761'),
(3, 'Đăng Đạt', '0912892822', 'dangdat', '123456', '1', '1653311761'),
(4, 'Minh Tuấn', '0199292000', 'duc', '123456', '0', '1653311761'),
(5, 'Hoàng Minh Đức', '0199292020', 'duc1', '123456', '0', '1653311821'),
(6, 'Nguyễn Tiến Anh', '01655938742', 'tienanh', '123456', '0', '1653324835'),
(7, 'Trần Trung Hiếu', '0355000009', 'trunghieu', '123456', '0', '1653326723'),
(9, 'quynh', '0101910', 'quynh1909', '123456', '0', '1654102714');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dat_san`
--
ALTER TABLE `dat_san`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dat_san_ibfk_1` (`ma_kh`),
  ADD KEY `dat_san_ibfk_2` (`ma_san`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `san_bong`
--
ALTER TABLE `san_bong`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dat_san`
--
ALTER TABLE `dat_san`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=306;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `san_bong`
--
ALTER TABLE `san_bong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dat_san`
--
ALTER TABLE `dat_san`
  ADD CONSTRAINT `dat_san_ibfk_2` FOREIGN KEY (`ma_san`) REFERENCES `san_bong` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

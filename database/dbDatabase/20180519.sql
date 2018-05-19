-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th5 19, 2018 lúc 09:13 AM
-- Phiên bản máy phục vụ: 10.1.29-MariaDB
-- Phiên bản PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dbshopmipham`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucsanpham`
--

CREATE TABLE `danhmucsanpham` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenDanhMuc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DoUuTien` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmucsanpham`
--

INSERT INTO `danhmucsanpham` (`id`, `TenDanhMuc`, `DoUuTien`, `created_at`, `updated_at`) VALUES
(1, 'Trang điểm', 1, '2018-05-18 16:02:41', '2018-05-18 16:02:41'),
(2, 'Chăm sóc da mặt', 2, '2018-05-18 16:03:00', '2018-05-18 16:03:00'),
(3, 'Chăm sóc tóc', 3, '2018-05-18 16:03:55', '2018-05-18 16:03:55'),
(4, 'Nước hoa', 3, '2018-05-18 16:07:39', '2018-05-18 16:07:39'),
(5, 'Mỹ phẩm dành cho nam', 5, '2018-05-18 16:07:58', '2018-05-18 16:07:58');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th5 19, 2018 lúc 10:24 AM
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
-- Cấu trúc bảng cho bảng `chitietnhap`
--

CREATE TABLE `chitietnhap` (
  `id` int(10) UNSIGNED NOT NULL,
  `MaNhapSP` int(10) UNSIGNED NOT NULL,
  `MaSanPham` int(10) UNSIGNED NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `Gia` double(12,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietxuat`
--

CREATE TABLE `chitietxuat` (
  `id` int(10) UNSIGNED NOT NULL,
  `MaXuatSP` int(10) UNSIGNED NOT NULL,
  `MaSanPham` int(10) UNSIGNED NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `Gia` double(12,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanhsanpham`
--

CREATE TABLE `hinhanhsanpham` (
  `id` int(10) UNSIGNED NOT NULL,
  `HinhAnh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaSanPham` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(10) UNSIGNED NOT NULL,
  `HoTen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `HinhAnh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GioiTinh` tinyint(1) NOT NULL,
  `DiaChi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `DienThoai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaTaiKhoan` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitaikhoan`
--

CREATE TABLE `loaitaikhoan` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenLoaiTaiKhoan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaitaikhoan`
--

INSERT INTO `loaitaikhoan` (`id`, `TenLoaiTaiKhoan`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2018-05-18 15:49:42', '2018-05-18 15:49:42'),
(2, 'user', '2018-05-18 15:49:49', '2018-05-18 15:49:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_05_07_214242__create_loaitaikhoan_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2018_05_07_214829__create_khachhang_table', 1),
(5, '2018_05_09_204142__create_nhacungcap_table', 1),
(6, '2018_05_09_204308__create_slide_table', 1),
(7, '2018_05_09_204506__create_danhmucsanpham_table', 1),
(8, '2018_05_09_205206__create_sanpham_table', 1),
(9, '2018_05_09_205914__create_hinhanhsanpham_table', 1),
(10, '2018_05_09_211703__create_nhapsanpham_table', 1),
(11, '2018_05_09_212427__create_chitietnhapsanpham_table', 1),
(12, '2018_05_09_212931__create_xuatsanpham_table', 1),
(13, '2018_05_09_220629__create_chitietxuat_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenNhaCC` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HinhAnh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `DienThoai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChiWeb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GioiThieu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`id`, `TenNhaCC`, `HinhAnh`, `DiaChi`, `DienThoai`, `email`, `DiaChiWeb`, `GioiThieu`, `created_at`, `updated_at`) VALUES
(1, 'Công ty mỹ phẩm Hoàng Anh', 'vckQ7L_1.jpg', 'Hà Nội', '098767543221', 'hoanganh@gmailcom', 'www.hoanganh.com', '<p>L&agrave; c&ocirc;ng ty h&agrave;ng đầu trong lĩnh vực mỹ phẩm tại ch&acirc;u &aacute;</p>', '2018-05-18 15:58:12', '2018-05-18 15:58:12'),
(2, 'Công ty mỹ phẩm Mai Linh', 'psO5L2_2.jpg', 'Quảng Nam', '0987654322', 'mailinh@gmail.com', 'www.mailinh.com', '<p>L&agrave; c&ocirc;ng ty sản xuất mỹ phẩm uy t&iacute;n chất lượng</p>', '2018-05-18 15:59:14', '2018-05-18 15:59:14'),
(3, 'Công ty mỹ phẩm  Mộc Châu', 'ftPGb6_4.JPG', 'Sơn La', '0987654321', 'mocchau@gmail.com', 'www.mocchau.com', '<p>l&agrave; c&ocirc;ng ty sản xuất sữa tắm h&agrave;ng đầu việt nam</p>', '2018-05-18 16:00:16', '2018-05-18 16:00:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhapsanpham`
--

CREATE TABLE `nhapsanpham` (
  `id` int(10) UNSIGNED NOT NULL,
  `MaNhaCC` int(10) UNSIGNED NOT NULL,
  `NgayNhap` date NOT NULL,
  `ChuThich` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `TrangThai` tinyint(1) NOT NULL,
  `MaTaiKhoan` int(10) UNSIGNED NOT NULL,
  `HoTen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `DienThoai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(10) UNSIGNED NOT NULL,
  `TenSanPham` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `XuatXu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ThanhPhan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `CongDung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HanSuDung` date NOT NULL,
  `MieuTa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `HinhAnh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `Gia` double(12,2) NOT NULL,
  `GiaUuDai` double(12,2) NOT NULL,
  `PhanTramKhauTru` double(12,2) NOT NULL,
  `DoUuTien` int(11) NOT NULL,
  `SoLuotXem` int(11) NOT NULL,
  `SoLuotMua` int(11) NOT NULL,
  `MaDanhMuc` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `TenSanPham`, `XuatXu`, `ThanhPhan`, `CongDung`, `HanSuDung`, `MieuTa`, `HinhAnh`, `SoLuong`, `Gia`, `GiaUuDai`, `PhanTramKhauTru`, `DoUuTien`, `SoLuotXem`, `SoLuotMua`, `MaDanhMuc`, `created_at`, `updated_at`) VALUES
(1, 'Gel tẩy tế bào chết mặt nam việt quất Nature Republic Cranberry Real Nature Peeling Gel 120ml', 'Hàn quốc', '• Thành phần chứa 500ppm chiết xuất nam việt quất', 'Tẩy tế bào chết, làm sạch da, dưỡng da mềm mại, sáng mịn', '2018-05-18', '<p>Gel tẩy tế b&agrave;o chết mặt Nature Republic Cranberry Real Nature Peeling Gel chứa chiết xuất nam việt quất gi&agrave;u Vitamin A, C kết hợp với nhiều loại thực vật tự nhi&ecirc;n dễ d&agrave;ng loại bỏ ho&agrave;n to&agrave;n lớp tế b&agrave;o chết v&agrave; sừng gi&agrave; tr&ecirc;n bề mặt da đồng thời nu&ocirc;i dưỡng l&agrave;n da mềm mại, s&aacute;ng mịn v&agrave; khỏe mạnh.&nbsp;</p>\r\n\r\n<p>Hướng dẫn sử dụng v&agrave; bảo quản</p>\r\n\r\n<ul>\r\n	<li>Rửa mặt sạch v&agrave; lau kh&ocirc;</li>\r\n	<li>Lấy một lượng vừa đủ thoa đều l&ecirc;n mặt, tr&aacute;nh v&ugrave;ng mắt v&agrave; miệng</li>\r\n	<li>Massage nhẹ nh&agrave;ng trong khoảng 1 - 2 ph&uacute;t</li>\r\n	<li>Rửa sạch bằng nước ấm</li>\r\n	<li>Sử dụng 1 - 2 lần/tuần</li>\r\n	<li>Bảo quản nơi kh&ocirc; r&aacute;o, tho&aacute;ng m&aacute;t, tr&aacute;nh &aacute;nh nắng trực tiếp v&agrave; nhiệt độ cao</li>\r\n	<li>Để xa tầm tay trẻ em</li>\r\n</ul>\r\n\r\n<p>Th&ocirc;ng tin thương hiệu</p>\r\n\r\n<p>Nature Republic l&agrave; thương hiệu mỹ phẩm của H&agrave;n Quốc. Kể từ lần đầu ti&ecirc;n xuất hiện v&agrave;o năm 2009, Nature Republic đ&atilde; được c&ocirc;ng nhận rộng r&atilde;i l&agrave; một trong những thương hiệu mỹ phẩm th&acirc;n thiện với m&ocirc;i trường. Sản phẩm của Nature Republic rất đa dạng, bao gồm mỹ phẩm chăm s&oacute;c da v&agrave; t&oacute;c, mỹ phẩm trang điểm, mỹ phẩm d&agrave;nh cho nam giới, phụ kiện l&agrave;m đẹp&hellip; Sử dụng nguồn nguy&ecirc;n liệu tự nhi&ecirc;n để sản xuất ra c&aacute;c loại mỹ phẩm an to&agrave;n v&agrave; cho hiệu quả cao, Nature Republic hiện được biết tới tr&ecirc;n to&agrave;n thế giới.</p>', 'OHrvZdVBAA_sua2.jpg', 200, 249.00, 199.00, 10.00, 2, 0, 0, 2, '2018-05-18 16:11:51', '2018-05-18 16:11:51'),
(2, 'Combo 2 tuýp sữa rửa mặt dừa Skinfood Beauty In A Food Coconut Cleansing Foam 150ml/tuýp', 'Hàn Quốc', 'Thành phần chứa chiết xuất dừa giàu Lauric Acid', 'Làm sạch, kháng khuẩn, bảo vệ da, phục hồi độ săn chắc cho da', '2018-06-01', '<p>Sữa rửa mặt dừa Skinfood Beauty In A Food Coconut Cleansing Foam l&agrave; một sản phẩm nằm trong d&ograve;ng l&agrave;m sạch chiết xuất từ c&aacute;c th&agrave;nh phần tự nhi&ecirc;n. C&ocirc;ng thức l&agrave;m sạch hiệu quả nhờ lớp bọt d&agrave;y, mịn sẽ loại bỏ bụi bẩn, b&atilde; nhờn, cặn trang điểm m&agrave; kh&ocirc;ng l&agrave;m kh&ocirc; da. Chiết xuất dừa gi&agrave;u Lauric Acid c&oacute; khả năng kh&aacute;ng khuẩn, bảo vệ v&agrave; phục hồi độ săn chắc cho l&agrave;n da, duy tr&igrave; l&agrave;n da mềm mại, tươi trẻ mỗi ng&agrave;y.</p>\r\n\r\n<p>Hướng dẫn sử dụng v&agrave; bảo quản</p>\r\n\r\n<ul>\r\n	<li>L&agrave;m ướt da mặt</li>\r\n	<li>Lấy một lượng vừa đủ v&agrave;o l&ograve;ng b&agrave;n tay, tạo bọt v&agrave; massage nhẹ nh&agrave;ng l&ecirc;n da</li>\r\n	<li>Rửa sạch với nước</li>\r\n	<li>Sử dụng h&agrave;ng ng&agrave;y v&agrave;o buổi s&aacute;ng v&agrave; buổi tối</li>\r\n	<li>Bảo quản nơi kh&ocirc; r&aacute;o, tho&aacute;ng m&aacute;t, tr&aacute;nh &aacute;nh nắng trực tiếp v&agrave; nhiệt độ cao</li>\r\n	<li>Để xa tầm tay trẻ em</li>\r\n</ul>\r\n\r\n<p>Th&ocirc;ng tin thương hiệu</p>\r\n\r\n<p>Với quan điểm &quot;thực phẩm tốt cho sức khỏe th&igrave; cũng tốt cho da&rdquo;, qua nhiều năm nghi&ecirc;n cứu Skinfood đ&atilde; c&oacute; mặt v&agrave; được biết đến như một thương hiệu mỹ phẩm ti&ecirc;n phong cho kh&aacute;i niệm độc đ&aacute;o v&agrave; ho&agrave;n to&agrave;n tạo n&ecirc;n được t&iacute;nh kh&aacute;c biệt so với những d&ograve;ng mỹ phẩm kh&aacute;c. Skinfood đang từng ng&agrave;y ho&agrave;n thiện sứ mệnh &ldquo;nu&ocirc;i dưỡng v&agrave; cung cấp đầy đủ nguồn dinh dưỡng cho l&agrave;n da của bạn&rdquo; từ những thực phẩm th&acirc;n quen h&agrave;ng ng&agrave;y như bơ, c&agrave; chua, dưa leo cho đến những nguồn thực phẩm độc đ&aacute;o đến từ c&aacute;c miền đất kh&aacute;c như trứng c&aacute;, qu&yacute;t dại hay gạo cổ&hellip; Với Skinfood, thật dễ d&agrave;ng để bạn lựa chọn cho m&igrave;nh những sản phẩm ưng &yacute;, ph&ugrave; hợp với nhu cầu.</p>', 'uDJxHopjlj_suaruamat1.jpg', 100, 200.00, 155.00, 10.00, 2, 0, 0, 2, '2018-05-18 16:13:59', '2018-05-18 16:13:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` int(10) UNSIGNED NOT NULL,
  `TieuDe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HinhAnh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MoTa` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MaLoaiTaiKhoan` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `MaLoaiTaiKhoan`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '$2y$10$hcjgrqf2ALXorm3mk6yk0OiePyO3fHYCUbQJznzYo62zey3hGmbj6', 1, NULL, '2018-05-18 15:50:09', '2018-05-18 15:50:09'),
(2, 'user@gmail.com', '$2y$10$4qU1XljS8ElzvDgAg/bcUe9s8WVh8eQ10jrWDJmDa.MwAfTR1.G3K', 2, NULL, '2018-05-18 15:50:28', '2018-05-18 15:50:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xuatsanpham`
--

CREATE TABLE `xuatsanpham` (
  `id` int(10) UNSIGNED NOT NULL,
  `MaKhachHang` int(10) UNSIGNED DEFAULT NULL,
  `TenVanChuyen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ChuThich` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `TrangThai` tinyint(1) NOT NULL,
  `NgayXuat` date NOT NULL,
  `HoTen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `DienThoai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietnhap`
--
ALTER TABLE `chitietnhap`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chitietnhap_manhapsp_foreign` (`MaNhapSP`),
  ADD KEY `chitietnhap_masanpham_foreign` (`MaSanPham`);

--
-- Chỉ mục cho bảng `chitietxuat`
--
ALTER TABLE `chitietxuat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chitietxuat_maxuatsp_foreign` (`MaXuatSP`),
  ADD KEY `chitietxuat_masanpham_foreign` (`MaSanPham`);

--
-- Chỉ mục cho bảng `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hinhanhsanpham`
--
ALTER TABLE `hinhanhsanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hinhanhsanpham_masanpham_foreign` (`MaSanPham`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `khachhang_mataikhoan_foreign` (`MaTaiKhoan`);

--
-- Chỉ mục cho bảng `loaitaikhoan`
--
ALTER TABLE `loaitaikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhapsanpham`
--
ALTER TABLE `nhapsanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nhapsanpham_manhacc_foreign` (`MaNhaCC`),
  ADD KEY `nhapsanpham_mataikhoan_foreign` (`MaTaiKhoan`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sanpham_madanhmuc_foreign` (`MaDanhMuc`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_maloaitaikhoan_foreign` (`MaLoaiTaiKhoan`);

--
-- Chỉ mục cho bảng `xuatsanpham`
--
ALTER TABLE `xuatsanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `xuatsanpham_makhachhang_foreign` (`MaKhachHang`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietnhap`
--
ALTER TABLE `chitietnhap`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chitietxuat`
--
ALTER TABLE `chitietxuat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `hinhanhsanpham`
--
ALTER TABLE `hinhanhsanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaitaikhoan`
--
ALTER TABLE `loaitaikhoan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `nhapsanpham`
--
ALTER TABLE `nhapsanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `xuatsanpham`
--
ALTER TABLE `xuatsanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietnhap`
--
ALTER TABLE `chitietnhap`
  ADD CONSTRAINT `chitietnhap_manhapsp_foreign` FOREIGN KEY (`MaNhapSP`) REFERENCES `nhapsanpham` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `chitietnhap_masanpham_foreign` FOREIGN KEY (`MaSanPham`) REFERENCES `sanpham` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `chitietxuat`
--
ALTER TABLE `chitietxuat`
  ADD CONSTRAINT `chitietxuat_masanpham_foreign` FOREIGN KEY (`MaSanPham`) REFERENCES `sanpham` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `chitietxuat_maxuatsp_foreign` FOREIGN KEY (`MaXuatSP`) REFERENCES `xuatsanpham` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `hinhanhsanpham`
--
ALTER TABLE `hinhanhsanpham`
  ADD CONSTRAINT `hinhanhsanpham_masanpham_foreign` FOREIGN KEY (`MaSanPham`) REFERENCES `sanpham` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `khachhang_mataikhoan_foreign` FOREIGN KEY (`MaTaiKhoan`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `nhapsanpham`
--
ALTER TABLE `nhapsanpham`
  ADD CONSTRAINT `nhapsanpham_manhacc_foreign` FOREIGN KEY (`MaNhaCC`) REFERENCES `nhacungcap` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `nhapsanpham_mataikhoan_foreign` FOREIGN KEY (`MaTaiKhoan`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_madanhmuc_foreign` FOREIGN KEY (`MaDanhMuc`) REFERENCES `danhmucsanpham` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_maloaitaikhoan_foreign` FOREIGN KEY (`MaLoaiTaiKhoan`) REFERENCES `loaitaikhoan` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `xuatsanpham`
--
ALTER TABLE `xuatsanpham`
  ADD CONSTRAINT `xuatsanpham_makhachhang_foreign` FOREIGN KEY (`MaKhachHang`) REFERENCES `khachhang` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

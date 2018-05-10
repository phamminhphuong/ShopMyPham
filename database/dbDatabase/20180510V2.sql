-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th5 10, 2018 lúc 05:53 PM
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
(1, '123123123', 3, '2018-05-10 14:53:33', '2018-05-10 14:53:33');

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

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `HoTen`, `NgaySinh`, `HinhAnh`, `GioiTinh`, `DiaChi`, `DienThoai`, `MaTaiKhoan`, `created_at`, `updated_at`) VALUES
(1, 'Pham Văn Hà', '2012-12-12', 'qlPcjyskwB_maytinhkhoe028.jpg', 1, 'Hà Nội', '09668109051', 2, '2018-05-10 15:29:58', '2018-05-10 15:29:58');

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
(1, 'admin', '2018-05-10 14:49:21', '2018-05-10 15:12:33'),
(2, 'user', '2018-05-10 14:49:24', '2018-05-10 15:12:44');

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
(66, '2014_05_07_214242__create_loaitaikhoan_table', 1),
(67, '2014_10_12_000000_create_users_table', 1),
(68, '2014_10_12_100000_create_password_resets_table', 1),
(69, '2018_05_07_214829__create_khachhang_table', 1),
(70, '2018_05_09_204142__create_nhacungcap_table', 1),
(71, '2018_05_09_204308__create_slide_table', 1),
(72, '2018_05_09_204506__create_danhmucsanpham_table', 1),
(73, '2018_05_09_205206__create_sanpham_table', 1),
(74, '2018_05_09_205914__create_hinhanhsanpham_table', 1),
(75, '2018_05_09_211703__create_nhapsanpham_table', 1),
(76, '2018_05_09_212427__create_chitietnhapsanpham_table', 1);

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
(1, 'Công ty nước hoa pháp', '4YAkNW_maytinhkhoe035.jpg', 'Hà Nội', '0987654321', 'nuochoa@gmail.com', 'www.nuochoa.com', '<p>L&agrave; c&ocirc;ng ty sản xuất nước hoa h&agrave;ng dầu</p>', '2018-05-10 15:29:23', '2018-05-10 15:29:23');

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

--
-- Đang đổ dữ liệu cho bảng `nhapsanpham`
--

INSERT INTO `nhapsanpham` (`id`, `MaNhaCC`, `NgayNhap`, `ChuThich`, `TrangThai`, `MaTaiKhoan`, `HoTen`, `DiaChi`, `DienThoai`, `created_at`, `updated_at`) VALUES
(1, 1, '2018-05-08', 'Nhập nước hoa', 1, 2, 'Hoàng văn anh', 'Hà Nội', '0987654321', NULL, NULL);

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
(1, 'ấdsd', 'ádasdad', 'ádaasdf', 'ádasd', '2012-12-12', '<p>&aacute;dasdasds</p>', 'wsKNEpzSGh_maytinhkhoe034.jpg', 0, 12.00, 1212.00, 12.00, 0, 0, 0, 1, '2018-05-10 15:05:18', '2018-05-10 15:09:18'),
(2, 'ádasdad', 'ádasdasd', 'ádasd', 'ádasd', '2018-05-02', '<p>&aacute;dasdad</p>', 'G1p2H5yOWD_maytinhkhoe037.jpg', 0, 12.00, 21.00, 21.00, 0, 0, 0, 1, '2018-05-10 15:08:07', '2018-05-10 15:09:31'),
(3, 'ádasd', 'ádasd', 'ádasđ', 'ádasd', '2018-05-08', '<p>&aacute;dasasd</p>', 'f2IGBjRAmH_maytinhkhoe028.jpg', 0, 12.00, 12.00, 12.00, 0, 0, 0, 1, '2018-05-10 15:09:50', '2018-05-10 15:09:50');

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

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `TieuDe`, `HinhAnh`, `MoTa`, `Link`, `created_at`, `updated_at`) VALUES
(1, '123123', 'Nhh4PX69we_maytinhkhoe027.jpg', '<p>1231231123</p>', '111', '2018-05-10 14:53:10', '2018-05-10 14:53:10');

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
(1, 'admin@gmail.com', '$2y$10$aerpE92Lx5f/ULp4fVdUIeonIGNu0eUVSjmXWFNcefCVKNqOyvLZO', 1, 'SXAnPmNjM8I3KElrsygloACW3lNqmFEQE1ustMq6wg4VXu5IE410TFCUp8iW', '2018-05-10 15:13:10', '2018-05-10 15:13:10'),
(2, 'user@gmail.com', '$2y$10$s2/W/PKYxOLQKqnqvubNGe4/uUN3BjdKmAZ.DIEOPMSajqtJPC4fC', 2, NULL, '2018-05-10 15:28:21', '2018-05-10 15:28:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xuatsanpham`
--

CREATE TABLE `xuatsanpham` (
  `id` int(10) UNSIGNED NOT NULL,
  `MaKhachHang` int(11) DEFAULT NULL,
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
-- Đang đổ dữ liệu cho bảng `xuatsanpham`
--

INSERT INTO `xuatsanpham` (`id`, `MaKhachHang`, `TenVanChuyen`, `ChuThich`, `TrangThai`, `NgayXuat`, `HoTen`, `DiaChi`, `DienThoai`, `created_at`, `updated_at`) VALUES
(1, 0, 'Ô tô', 'Bán hàng', 1, '2018-05-21', 'Hoang thi Anh', 'hà Nội', '0987654321', NULL, NULL),
(2, NULL, 'Ô tô', 'Bán hàng', 1, '2018-05-21', 'Hoang thi Anh', 'hà Nội', '0987654321', NULL, NULL),
(3, NULL, 'sdfdsf', 'sdfsdfsdf', 1, '2018-05-14', 'sád', 'ádasd', '0987654321', NULL, NULL);

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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietnhap`
--
ALTER TABLE `chitietnhap`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `hinhanhsanpham`
--
ALTER TABLE `hinhanhsanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `loaitaikhoan`
--
ALTER TABLE `loaitaikhoan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `nhapsanpham`
--
ALTER TABLE `nhapsanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `xuatsanpham`
--
ALTER TABLE `xuatsanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th6 01, 2018 lúc 03:34 AM
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

--
-- Đang đổ dữ liệu cho bảng `chitietnhap`
--

INSERT INTO `chitietnhap` (`id`, `MaNhapSP`, `MaSanPham`, `SoLuong`, `Gia`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1232, 100000.00, '2018-05-27 07:33:09', '2018-05-27 07:33:09'),
(2, 2, 1, 2, 100000.00, '2018-05-31 05:38:35', '2018-05-31 05:38:35');

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

--
-- Đang đổ dữ liệu cho bảng `chitietxuat`
--

INSERT INTO `chitietxuat` (`id`, `MaXuatSP`, `MaSanPham`, `SoLuong`, `Gia`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 3, 100000.00, '2018-05-31 15:35:57', '2018-05-31 15:35:57'),
(2, 1, 2, 3, 155.00, '2018-05-31 15:35:57', '2018-05-31 15:35:57'),
(3, 1, 9, 1, 99.00, '2018-05-31 15:35:57', '2018-05-31 15:35:57'),
(4, 2, 2, 3, 155.00, '2018-05-31 15:49:41', '2018-05-31 15:49:41'),
(5, 2, 3, 2, 3332.00, '2018-05-31 15:49:41', '2018-05-31 15:49:41'),
(6, 4, 1, 4, 100000.00, '2018-05-31 17:14:19', '2018-05-31 17:14:19'),
(7, 4, 2, 4, 140000.00, '2018-05-31 17:14:19', '2018-05-31 17:14:19'),
(8, 4, 7, 16, 145000.00, '2018-05-31 17:14:19', '2018-05-31 17:14:19');

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
(2, 'Chăm sóc da', 2, '2018-05-18 16:03:00', '2018-05-24 08:08:59'),
(3, 'Chăm sóc tóc', 3, '2018-05-18 16:03:55', '2018-05-18 16:03:55'),
(4, 'Nước hoa', 3, '2018-05-18 16:07:39', '2018-05-18 16:07:39'),
(5, 'Mỹ phẩm dành cho nam', 5, '2018-05-18 16:07:58', '2018-05-18 16:07:58'),
(6, 'Phụ kiện', 4, '2018-05-24 08:09:37', '2018-05-24 08:09:37');

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
(1, 'Lưu Diệc Phi', '2011-11-11', 'Y5klC1Zxy0_luuDiecPhi.png', 0, 'Hà Nội', '0987654321', 1, '2018-05-29 14:21:32', '2018-05-29 14:21:32'),
(2, 'Nguyen Hoang Ha', '2018-05-03', 'XbvNRhNDrm_luuDiecPhi.png', 0, 'Hà Nội', '0987654321', 2, NULL, '2018-05-31 10:27:11');

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

--
-- Đang đổ dữ liệu cho bảng `nhapsanpham`
--

INSERT INTO `nhapsanpham` (`id`, `MaNhaCC`, `NgayNhap`, `ChuThich`, `TrangThai`, `MaTaiKhoan`, `HoTen`, `DiaChi`, `DienThoai`, `created_at`, `updated_at`) VALUES
(1, 1, '2018-05-16', 'ádasasd', 0, 1, '', '', '', '2018-05-27 07:33:08', '2018-05-27 07:33:08'),
(2, 1, '2018-05-08', 'zzx', 0, 1, '', '', '', '2018-05-31 05:38:35', '2018-05-31 05:38:35');

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
(1, 'Gel tẩy tế bào chết mặt nam việt quất Nature Republic Cranberry Real Nature Peeling Gel 120ml', 'Hàn quốc', '• Thành phần chứa 500ppm chiết xuất nam việt quất', 'Tẩy tế bào chết, làm sạch da, dưỡng da mềm mại, sáng mịn', '2018-05-18', '<p>Gel tẩy tế b&agrave;o chết mặt Nature Republic Cranberry Real Nature Peeling Gel chứa chiết xuất nam việt quất gi&agrave;u Vitamin A, C kết hợp với nhiều loại thực vật tự nhi&ecirc;n dễ d&agrave;ng loại bỏ ho&agrave;n to&agrave;n lớp tế b&agrave;o chết v&agrave; sừng gi&agrave; tr&ecirc;n bề mặt da đồng thời nu&ocirc;i dưỡng l&agrave;n da mềm mại, s&aacute;ng mịn v&agrave; khỏe mạnh.&nbsp;</p>\r\n\r\n<p>Hướng dẫn sử dụng v&agrave; bảo quản</p>\r\n\r\n<ul>\r\n	<li>Rửa mặt sạch v&agrave; lau kh&ocirc;</li>\r\n	<li>Lấy một lượng vừa đủ thoa đều l&ecirc;n mặt, tr&aacute;nh v&ugrave;ng mắt v&agrave; miệng</li>\r\n	<li>Massage nhẹ nh&agrave;ng trong khoảng 1 - 2 ph&uacute;t</li>\r\n	<li>Rửa sạch bằng nước ấm</li>\r\n	<li>Sử dụng 1 - 2 lần/tuần</li>\r\n	<li>Bảo quản nơi kh&ocirc; r&aacute;o, tho&aacute;ng m&aacute;t, tr&aacute;nh &aacute;nh nắng trực tiếp v&agrave; nhiệt độ cao</li>\r\n	<li>Để xa tầm tay trẻ em</li>\r\n</ul>\r\n\r\n<p>Th&ocirc;ng tin thương hiệu</p>\r\n\r\n<p>Nature Republic l&agrave; thương hiệu mỹ phẩm của H&agrave;n Quốc. Kể từ lần đầu ti&ecirc;n xuất hiện v&agrave;o năm 2009, Nature Republic đ&atilde; được c&ocirc;ng nhận rộng r&atilde;i l&agrave; một trong những thương hiệu mỹ phẩm th&acirc;n thiện với m&ocirc;i trường. Sản phẩm của Nature Republic rất đa dạng, bao gồm mỹ phẩm chăm s&oacute;c da v&agrave; t&oacute;c, mỹ phẩm trang điểm, mỹ phẩm d&agrave;nh cho nam giới, phụ kiện l&agrave;m đẹp&hellip; Sử dụng nguồn nguy&ecirc;n liệu tự nhi&ecirc;n để sản xuất ra c&aacute;c loại mỹ phẩm an to&agrave;n v&agrave; cho hiệu quả cao, Nature Republic hiện được biết tới tr&ecirc;n to&agrave;n thế giới.</p>', 'vemDQwEoQH_9605211455518.jpg', 1327, 100000.00, 100000.00, 0.00, 2, 0, 0, 2, '2018-05-18 16:11:51', '2018-05-31 17:15:21'),
(2, 'Combo 2 tuýp sữa rửa mặt dừa Skinfood Beauty In A Food Coconut Cleansing Foam 150ml/tuýp', 'Hàn Quốc', 'Thành phần chứa chiết xuất dừa giàu Lauric Acid', 'Làm sạch, kháng khuẩn, bảo vệ da, phục hồi độ săn chắc cho da', '2018-06-01', '<p>Sữa rửa mặt dừa Skinfood Beauty In A Food Coconut Cleansing Foam l&agrave; một sản phẩm nằm trong d&ograve;ng l&agrave;m sạch chiết xuất từ c&aacute;c th&agrave;nh phần tự nhi&ecirc;n. C&ocirc;ng thức l&agrave;m sạch hiệu quả nhờ lớp bọt d&agrave;y, mịn sẽ loại bỏ bụi bẩn, b&atilde; nhờn, cặn trang điểm m&agrave; kh&ocirc;ng l&agrave;m kh&ocirc; da. Chiết xuất dừa gi&agrave;u Lauric Acid c&oacute; khả năng kh&aacute;ng khuẩn, bảo vệ v&agrave; phục hồi độ săn chắc cho l&agrave;n da, duy tr&igrave; l&agrave;n da mềm mại, tươi trẻ mỗi ng&agrave;y.</p>\r\n\r\n<p>Hướng dẫn sử dụng v&agrave; bảo quản</p>\r\n\r\n<ul>\r\n	<li>L&agrave;m ướt da mặt</li>\r\n	<li>Lấy một lượng vừa đủ v&agrave;o l&ograve;ng b&agrave;n tay, tạo bọt v&agrave; massage nhẹ nh&agrave;ng l&ecirc;n da</li>\r\n	<li>Rửa sạch với nước</li>\r\n	<li>Sử dụng h&agrave;ng ng&agrave;y v&agrave;o buổi s&aacute;ng v&agrave; buổi tối</li>\r\n	<li>Bảo quản nơi kh&ocirc; r&aacute;o, tho&aacute;ng m&aacute;t, tr&aacute;nh &aacute;nh nắng trực tiếp v&agrave; nhiệt độ cao</li>\r\n	<li>Để xa tầm tay trẻ em</li>\r\n</ul>\r\n\r\n<p>Th&ocirc;ng tin thương hiệu</p>\r\n\r\n<p>Với quan điểm &quot;thực phẩm tốt cho sức khỏe th&igrave; cũng tốt cho da&rdquo;, qua nhiều năm nghi&ecirc;n cứu Skinfood đ&atilde; c&oacute; mặt v&agrave; được biết đến như một thương hiệu mỹ phẩm ti&ecirc;n phong cho kh&aacute;i niệm độc đ&aacute;o v&agrave; ho&agrave;n to&agrave;n tạo n&ecirc;n được t&iacute;nh kh&aacute;c biệt so với những d&ograve;ng mỹ phẩm kh&aacute;c. Skinfood đang từng ng&agrave;y ho&agrave;n thiện sứ mệnh &ldquo;nu&ocirc;i dưỡng v&agrave; cung cấp đầy đủ nguồn dinh dưỡng cho l&agrave;n da của bạn&rdquo; từ những thực phẩm th&acirc;n quen h&agrave;ng ng&agrave;y như bơ, c&agrave; chua, dưa leo cho đến những nguồn thực phẩm độc đ&aacute;o đến từ c&aacute;c miền đất kh&aacute;c như trứng c&aacute;, qu&yacute;t dại hay gạo cổ&hellip; Với Skinfood, thật dễ d&agrave;ng để bạn lựa chọn cho m&igrave;nh những sản phẩm ưng &yacute;, ph&ugrave; hợp với nhu cầu.</p>', 'uDJxHopjlj_suaruamat1.jpg', 93, 150000.00, 140000.00, 5.00, 2, 0, 0, 2, '2018-05-18 16:13:59', '2018-05-31 17:15:21'),
(3, 'Nước hoa nữ Bvlgari Goldea Eau de Parfum 90ml', 'Italy', 'Phấn hoa, tinh dầu', 'Hương hoa cỏ phương Đông, tỏa hương trong vòng một cánh tay', '2018-05-27', '<p>Nước hoa nữ Bvlgari Goldea Eau de Parfum, lấy cảm hứng từ v&agrave;ng v&agrave; &aacute;nh s&aacute;ng, l&agrave; d&ograve;ng nước hoa được Bvlgari giới thiệu v&agrave;o th&aacute;ng 10 năm 2015. Goldea c&oacute; nghĩa l&agrave; vị thần của v&agrave;ng. Goldea Eau de Parfum thuộc nh&oacute;m hương hoa cỏ phương Đ&ocirc;ng với hỗn hợp m&ugrave;i hương độc đ&aacute;o chứa xạ hương ở cả 3 tầng, nhưng lại đem đến cảm gi&aacute;c mạnh hơn ở hổ ph&aacute;ch, hoa ngọc lan t&acirc;y v&agrave; hoa nh&agrave;i. Nước hoa c&oacute; độ tỏa hương vừa phải, lưu hương tốt, th&iacute;ch hợp sử dụng trong m&ugrave;a thu, đ&ocirc;ng.&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Nồng độ: Eau de Parfum</li>\r\n	<li>Nh&oacute;m nước hoa: Hương hoa cỏ phương Đ&ocirc;ng</li>\r\n	<li>Năm ra mắt: 2015</li>\r\n	<li>Nh&agrave; pha chế: Alberto Morillas</li>\r\n	<li>Độ lưu hương: Từ 3 - 6 giờ</li>\r\n	<li>Độ toả hương: Tỏa hương trong v&ograve;ng một c&aacute;nh tay</li>\r\n</ul>', 'thUia27eHy_13144295931934 (1).jpg', 3, 1200000.00, 1000000.00, 15.00, 0, 0, 0, 4, '2018-05-25 07:33:23', '2018-05-31 16:11:46'),
(4, 'Nước hoa nữ Latino N.93', 'Việt Nam', 'hoa', 'Lưu giữ hương thơm', '2018-05-19', '<p>Sản phẳm gi&aacute; cả phải chăng c&ocirc;ng dụng hiệu quả</p>', 'CoFcOF4elR_13232944250910 (1).jpg', 102, 80000.00, 80000.00, 0.00, 0, 0, 0, 4, '2018-05-25 07:35:34', '2018-05-31 16:12:24'),
(5, 'Nước hoa channer Pháp', 'Pháp', 'Tinh dầu cây ca cao, phấn hoa', 'Lưu hương thơm quý phái', '2018-11-12', '<p>L&agrave; sản phẩm chất lượng cao</p>', '2GrLZuXIMD_20121109-nuoc-hoa-chanel-no5-chua-chat-gay-di-ung-1.jpg', 0, 700000.00, 700000.00, 0.00, 2, 0, 0, 4, '2018-05-25 07:39:51', '2018-05-31 16:12:05'),
(6, 'Sữa rửa mặt làm sạch và se khít lỗ chân lông', 'Hàn Quốc', 'Chiết xuất từ ốc sên và hoa Calendula', 'Làm sạch da đầu', '2019-11-11', '<p><strong>Sữa rửa mặt l&agrave;m sạch v&agrave; se kh&iacute;t lỗ ch&acirc;n l&ocirc;ng It&#39;s Well Plus Snail Calendula Prestige Foaming Cleanser&nbsp;</strong>gi&uacute;p l&agrave;m sạch bề mặt da, th&ocirc;ng tho&aacute;ng lỗ ch&acirc;n l&ocirc;ng, loại bỏ tế b&agrave;o chết v&agrave; lớp trang điểm tr&ecirc;n bề mặt da. Ngo&agrave;i ra, sản phẩm c&ograve;n&nbsp; gi&uacute;p ngăn chặn sự t&iacute;ch tụ Melanin, cho l&agrave;n da thanh khiết v&agrave; trắng s&aacute;ng hơn. Sữa rửa mặt sử dụng chiết xuất từ thực vật v&agrave; ứng dụng c&ocirc;ng nghệ sinh học để gi&uacute;p bảo vệ l&agrave;n da tối ưu, khi tiếp x&uacute;c với nước, kết cấu kem sẽ được giải ph&oacute;ng ra th&agrave;nh bọt mịn v&agrave; gi&uacute;p loại bỏ dễ d&agrave;ng tế b&agrave;o chết.</p>', '5PK3xOb9eK_15430929154078.jpg', 0, 140000.00, 120000.00, 10.00, 0, 0, 0, 5, '2018-05-25 07:43:34', '2018-05-31 16:12:46'),
(7, 'Dầu gội sạch gàu dành cho nam Clear Men Cool Sport bạc hà 650g', 'Việt Nam', 'Water, Sodium Laureth Sulfate, Cocamidopropyl Betaine, Dimethiconol, Citric Acid, Menthol, Parfum...', 'Giúp tóc sạch gàu, chắc khỏe, bóng mượt', '2020-11-11', '<p>Nghi&ecirc;n cứu cho thấy da đầu nam giới rất dễ sinh ra g&agrave;u. Dầu gội sạch g&agrave;u d&agrave;nh cho nam Clear Men Cool Sport bạc h&agrave; c&ocirc;ng thức đặc biệt d&agrave;nh ri&ecirc;ng cho nam với Bio Nutrium 10 - sự kết hợp từ c&aacute;c dưỡng chất, Vitamin v&agrave; kho&aacute;ng chất - c&ugrave;ng bạc h&agrave; m&aacute;t lạnh gi&uacute;p phục hồi c&aacute;c dưỡng chất cần thiết cho da đầu, nu&ocirc;i dưỡng t&oacute;c v&agrave; da đầu, ngăn g&agrave;u quay trở lại. Đặc biệt tinh chất bạc h&agrave; mang đến cho bạn cảm gi&aacute;c sảng kho&aacute;i bất tận. Sản phẩm ph&ugrave; hợp với mọi loại t&oacute;c</p>', 'YX61fqrIkF_9495684546590.jpg', 84, 200000.00, 145000.00, 20.00, 0, 0, 0, 5, '2018-05-25 07:45:53', '2018-05-31 17:15:21'),
(8, 'Dầu gội kích thích mọc tóc Yves Rocher Stimulating Shampoo 300ml Bottle', 'Pháp', 'Chiết xuất từ cây đậu Lupin trắng', 'Giúp mái tóc bóng mượt và bồng bềnh', '2021-11-11', '<p><strong>Dầu gội k&iacute;ch th&iacute;ch mọc t&oacute;c Yves Rocher Stimulating Shampoo 300ml Bottle</strong>&nbsp;l&agrave; sản phẩm đặc biệt d&agrave;nh cho t&oacute;c yếu v&agrave; g&atilde;y rụng. Sản phẩm được chiết xuất từ c&acirc;y đậu Lupin trắng gi&uacute;p l&agrave;m dịu những k&iacute;ch ứng tr&ecirc;n da đầu v&agrave; loại bỏ b&atilde; g&agrave;u, gi&uacute;p m&aacute;i t&oacute;c b&oacute;ng mượt v&agrave; bồng bềnh.</p>\r\n\r\n<p>Với c&ocirc;ng thức đặc biệt kh&ocirc;ng chứa cồn v&agrave; Paraben,&nbsp;<strong>Yves Rocher Stimulating Shampoo</strong>&nbsp;tạo sự c&acirc;n bằng tự nhi&ecirc;n cho t&oacute;c v&agrave; da đầu, mang đến những điều kiện tốt để t&oacute;c ph&aacute;t triển b&igrave;nh thường. Những dấu hiệu dẫn đến rụng t&oacute;c, rối loạn tiết b&atilde; nhờn, m&aacute;u kh&ocirc;ng lưu th&ocirc;ng được tới ch&acirc;n t&oacute;c, thiếu hụt Vitamin v&agrave; c&aacute;c kho&aacute;ng chất sẽ được giảm tối đa khi sử dụng sản phẩm</p>', '05PafeB4nd_13130641244190.jpg', 100, 2000000.00, 2000000.00, 0.00, 0, 0, 0, 3, '2018-05-25 07:51:42', '2018-05-25 16:18:05'),
(9, 'Xịt tạo kiểu tóc Nature Republic Herb Styling Hair Spray 300ml', 'Hàn Quốc', 'Chiết xuất hoa oải hương, bạc hà, hoa cúc La Mã, cây hương thảo...', 'Tạo kiểu, giữ nếp tóc, giúp tóc mềm, bóng mượ', '2018-05-27', '<p>Xịt tạo kiểu t&oacute;c Nature Republic Herb Styling Hair Spray l&agrave; sản phẩm tạo kiểu t&oacute;c dạng xịt tiện lợi gi&uacute;p bạn dễ d&agrave;ng tạo kiểu t&oacute;c theo &yacute; muốn, định h&igrave;nh v&agrave; giữ nếp t&oacute;c ho&agrave;n hảo, ph&ugrave; hợp với mọi kiểu t&oacute;c, từ t&oacute;c ngắn tới t&oacute;c d&agrave;i, t&oacute;c uốn. Th&agrave;nh phần chứa chiết xuất hoa oải hương, bạc h&agrave;, c&uacute;c La M&atilde;, c&acirc;y hương thảo... cung cấp dưỡng chất v&agrave; độ ẩm cho t&oacute;c, gi&uacute;p nếp t&oacute;c mềm mại, tự nhi&ecirc;n.&nbsp;</p>', '0sSQVR8PHS_13170414714910.jpg', 102, 135.00, 135.00, 0.00, 0, 0, 0, 3, '2018-05-25 07:53:05', '2018-05-31 16:11:06'),
(10, 'Kem Dưỡng Ban Ngày Cho Da Nhạy Cảm Simple Kind To Skin Vital Vitamin (Bestseller)', 'Hàn quốc', 'Kem dưỡng ban ngày Simple thành phần phức hợp 2 Vital Vitamins: Pro-Vitamin B5', 'Sản phẩm có chứa Glycerin và dầu Borage Seed giúp giữ ẩm và nuôi dưỡng da', '2018-05-06', '<p>Kem dưỡng ban ng&agrave;y cho da nhạy cảm Simple Kind To Skin Vital Vitamin Day Cream SPF 15 UVA/UVB, một sản phẩm của h&atilde;ng Simple từ Anh Quốc, l&agrave; sự kết hợp ho&agrave;n hảo giữa c&aacute;c th&agrave;nh phần tự nhi&ecirc;n gi&agrave;u vitamin dưỡng ẩm cho da suốt 12h v&agrave; bảo vệ da khỏi tia UVA v&agrave; UVB. Kem dưỡng da đến từ thương hiệu Simple xuất xứ Anh Quốc hiện đ&atilde; c&oacute; mặt tại tất cả c&aacute;c cửa h&agrave;ng mỹ phẩm ch&iacute;nh h&atilde;ng của&nbsp;<a href=\"https://beautygarden.vn/\">Beauty Garden</a>.&nbsp;</p>', 'sAv2cMVlI3_kem-duong-ban-ngay-Simple-Kind-To-Skin-Vital-Vitamin-Day-Cream-SPF-15-beauty-garden-1.jpg', 2, 500000.00, 450000.00, 10.00, 0, 0, 0, 2, '2018-05-25 07:59:16', '2018-05-31 16:10:46'),
(11, 'Nhíp Lấy Mụn T07 Vacosi', 'Hàn quốc', 'Kẽm', 'Đầu gắp tinh nhọn giúp lấy nhân mụn dễ dàng, an toàn  -   Hạn chế làm tổn thương da', '2010-11-09', '<p><strong>Nhíp l&acirc;́y mụn T07</strong>&nbsp;từ Vacosi đã có mặt tại h&ecirc;̣ th&ocirc;́ng cửa hàng mỹ ph&acirc;̉m chính hãng&nbsp;<a href=\"https://beautygarden.vn/\">Beauty Garden</a>&nbsp;giúp loại bỏ những n&ocirc;́t mụn m&ocirc;̣t cách d&ecirc;̃ dàng, ti&ecirc;̣n lợi cho bạn tự tin với làn da sạch mụn</p>', 'h8FWqFJkv1_nhip-lay-mun-vacosi.jpg', 50000, 46000.00, 3.00, 0.00, 3, 0, 0, 6, '2018-05-25 08:01:27', '2018-05-31 16:13:36'),
(12, 'Cọ Phấn Phủ Và Tạo Khối Wet N Wild', 'Việt Nam', 'Nhựa', 'Có khả năng”ăn phấn” tốt và tán phấn mỏng, giúp da bám phấn đều đặn, tự nhiên, không dày và không bột bở', '2020-11-11', '<p><a href=\"https://beautygarden.vn/co-phan-phu-va-tao-khoi-wet-n-wild.html\">Wet n Wild l&agrave; thương hiệu mỹ phẩm b&igrave;nh d&acirc;n phổ th&ocirc;ng nổi tiếng ở Mỹ</a>. Sản phẩm của thương hiệu n&agrave;y b&agrave;y b&aacute;n trong khắp c&aacute;c si&ecirc;u thị của Mỹ, l&agrave; đối thủ cạnh tranh trực tiếp với c&aacute;c thương hiệu phổ th&ocirc;ng nổi tiếng kh&aacute;c như Covergirl, Maybelline,... Qua hơn 30 năm th&agrave;nh lập v&agrave; ph&aacute;t triển, Wet n Wild cung cấp cho kh&aacute;ch h&agrave;ng của m&igrave;nh c&aacute;c sản phẩm phong ph&uacute;, đa dạng, ph&ugrave; hơp với nhu cầu l&agrave;m đẹp của mọi đối tượng, đặc biệt l&agrave; c&aacute;c phụ nữ th&agrave;nh thị trẻ trung s&agrave;nh điệu. Nhờ chất lượng sản phẩm ho&agrave;n hảo với gi&aacute; cả rất dễ chịu, Wet n Wild nhanh ch&oacute;ng chiếm được một lượng lớn kh&aacute;ch h&agrave;ng trung th&agrave;nh tr&ecirc;n khắp thế giới.</p>', '0o8bQGs6Fa_co-wetnwild.jpg', 100, 100000.00, 100000.00, 0.00, 0, 0, 0, 6, '2018-05-25 08:07:03', '2018-05-31 16:13:58');

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
(1, 'admin@gmail.com', '$2y$10$hcjgrqf2ALXorm3mk6yk0OiePyO3fHYCUbQJznzYo62zey3hGmbj6', 1, 'RfPf97AfRONuGnibCmnIoXgsuBtzfIvUhy64wt29T5EbCJ2KEhefTdLy7Sic', '2018-05-18 15:50:09', '2018-05-18 15:50:09'),
(2, 'user@gmail.com', '$2y$10$fVYvYU4IuizVM9BFBkJYXOvykTo4C.7KR4hUnPUtBww.elVS.jBg6', 2, 'qHyyjTXge3Th8w53NTn3T6wfSMRWxvc79s0CZyPUqvS5ahctEBR1xEh07bD3', '2018-05-18 15:50:28', '2018-05-31 10:13:28'),
(3, 'hongha@gmail.com', '$2y$10$WZSjjo36SSyFswFX7Pfzy.PZlpxU/2y6AtrA5aRYWk6OTOnr/mB82', 2, 'Jaojq38HAVGQMRaqtL9R3W7UBjXiH2yhStncjHFhw8ycLI6Sg6C7awYdKbnY', '2018-05-25 14:41:11', '2018-05-25 14:41:11');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `xuatsanpham`
--

CREATE TABLE `xuatsanpham` (
  `id` int(10) UNSIGNED NOT NULL,
  `MaKhachHang` int(10) UNSIGNED DEFAULT NULL,
  `TenVanChuyen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ChuThich` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `TrangThai` tinyint(1) DEFAULT NULL,
  `NgayXuat` date DEFAULT NULL,
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
(1, NULL, '', '', 1, '2018-05-31', 'assadsad', 'asdasd', 'sdadas', '2018-05-31 15:35:57', '2018-05-31 15:50:29'),
(2, NULL, '', '', NULL, NULL, 'ádfsdfsd', 'sdfdfd', '1234567891', '2018-05-31 15:49:41', '2018-05-31 15:49:41'),
(3, NULL, '', '', 1, '2018-06-01', 'ádfsdfsd', 'sdfdfd', '1234567891', '2018-05-31 15:49:55', '2018-05-31 17:15:25'),
(4, NULL, '', '', 1, '2018-06-01', 'hoàng anh', 'Hà Nội', '123456789', '2018-05-31 17:14:19', '2018-05-31 17:15:21');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `chitietxuat`
--
ALTER TABLE `chitietxuat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `hinhanhsanpham`
--
ALTER TABLE `hinhanhsanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `xuatsanpham`
--
ALTER TABLE `xuatsanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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

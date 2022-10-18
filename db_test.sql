-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 17, 2022 lúc 04:10 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_test`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login_id` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id` int(11) NOT NULL,
  `id_hoadon` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`id`, `id_hoadon`, `name`, `id_sp`, `soluong`, `price`) VALUES
(1, 3, 'Ban ghi ', 1, 3, 1000),
(2, 3, 'XÚC XÍCH BÒ', 2, 1, 1000),
(3, 4, 'Ban ghi ', 1, 4, 1000),
(4, 6, 'Ban ghi ', 1, 4, 1000),
(5, 9, 'XÚC XÍCH BÒ', 2, 1, 1000),
(6, 10, 'XÚC XÍCH BÒ', 2, 1, 1000),
(7, 11, 'XÚC XÍCH BÒ', 2, 1, 1000),
(8, 12, 'XÚC XÍCH BÒ', 2, 1, 1000),
(9, 13, 'XÚC XÍCH BÒ', 2, 1, 1000),
(10, 15, 'XÚC XÍCH BÒ', 2, 1, 1000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int(11) NOT NULL,
  `hoten` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `diachi` text NOT NULL,
  `trangthai` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`id`, `hoten`, `phone`, `email`, `diachi`, `trangthai`, `created_at`) VALUES
(1, '123', '123', '123', '123', 0, '2022-10-16 16:12:41'),
(2, '123', '123', '123', '123', 0, '2022-10-16 16:13:00'),
(3, '123', '123', '123', '123', 0, '2022-10-16 16:18:43'),
(4, '123ascasd', '23323123', '1233331', '12312312312321321321312312312', 0, '2022-10-16 16:23:15'),
(5, '12321312', '1231231212', '123123', '12312312', 0, '2022-10-16 16:24:14'),
(6, 'NA', '1231231231', 'ae1@gmail.com', '123123123123', 0, '2022-10-16 16:25:27'),
(7, 'NA1', '1231231231', '23', '123123', 0, '2022-10-16 16:26:35'),
(8, 'NA1', '1231231231', '23', '123123', 0, '2022-10-16 16:26:41'),
(9, '123ascasd', '123', '123123', '123', 0, '2022-10-16 16:28:29'),
(10, '123ascasd', '123', '123123', '123', 0, '2022-10-16 16:30:11'),
(11, '123ascasd', '123', '123123', '123', 0, '2022-10-16 16:30:18'),
(12, '123ascasd', '123', '123123', '123', 0, '2022-10-16 16:30:50'),
(13, '123ascasd', '123', '123123', '123', 0, '2022-10-16 16:30:55'),
(14, '123123', '3333333333', '33', '33313123123', 0, '2022-10-16 16:31:11'),
(15, '123ascasd', '123', '123123', '123', 0, '2022-10-16 16:31:47'),
(16, 'đô', '1232141241', '123231', 'phú cường', 0, '2022-10-17 09:53:57'),
(17, 'đô', '1232141241', '123231', 'phú cường', 0, '2022-10-17 12:43:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `image`, `price`, `description`, `created_at`, `status`) VALUES
(2, 'XÚC XÍCH BÒ', '/assets/ảnh/xúc xích bò (2).jpg', 250000, NULL, '2022-10-16 15:17:37', 1),
(3, 'Giò Bò', '/assets/ảnh/giò bò (2).jpg', 250000, NULL, '2022-10-17 13:22:23', 1),
(4, 'GIÒ ĐÀ ĐIỂU', '/assets/ảnh/giò đà điểu (2).jpg', 300000, NULL, '2022-10-17 13:24:03', 1),
(5, 'GIÒ HOA', '/assets/ảnh/giò hoa (2).jpg', 140000, NULL, '2022-10-17 13:24:03', 1),
(6, 'GIÒ TAI', '/assets/ảnh/giof tai.jpg', 130000, NULL, '2022-10-17 13:25:45', 1),
(7, 'CHẢ CÁ', '/assets/ảnh/chả cá (2).jpg', 150000, NULL, '2022-10-17 13:25:45', 1),
(8, 'CHẢ MỰC', '/assets/ảnh/chả mực (2).jpg', 520000, NULL, '2022-10-17 13:27:05', 1),
(9, 'CHẢ QUẾ', '/assets/ảnh/chả quế.jpg', 180000, NULL, '2022-10-17 13:27:05', 1),
(10, 'CHẢ LỤA', '/assets/ảnh/giò lợn.jpg', 120000, NULL, '2022-10-17 13:28:30', 1),
(12, 'MỌC', '/assets/ảnh/mọc (2).jpg', 100000, NULL, '2022-10-17 13:29:23', 1),
(13, 'CHẢ LỢN', '/assets/ảnh/chả lợn (2).jpg', 120000, NULL, '2022-10-17 13:36:36', 1),
(14, 'XÚC XÍCH LỢN', '/assets/ảnh/xúc xích lợn (2).jpg', 130000, NULL, '2022-10-17 13:43:18', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

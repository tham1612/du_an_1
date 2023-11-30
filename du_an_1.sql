-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th10 26, 2023 lúc 01:53 PM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `du_an_1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id_bl` int NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int NOT NULL,
  `idpro` int NOT NULL,
  `ngaybinhluan` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id_bl`, `noidung`, `iduser`, `idpro`, `ngaybinhluan`) VALUES
(13, 'mat hang nayg rdtfyguhijkl', 77, 61, '16/12/2004'),
(14, 'mat hang nayg rdtfyguhijkl', 77, 61, ''),
(16, 'muahang', 71, 45, '15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int NOT NULL,
  `namedm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `namedm`) VALUES
(3, '  thêm mới 3'),
(4, ' 5555'),
(5, ' fwaa'),
(6, '  5555imhhujgny'),
(7, 'hihih'),
(8, 'thắm xinh gái quá đi'),
(9, '     123 thanh hehhehe'),
(10, '  5555imhhujgny'),
(11, '  gg224'),
(12, '  thanh xinh gái  nhưng thắm xg hơnhh'),
(13, 'them moi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_pr` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` double(10,2) DEFAULT '0.00',
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mota` text,
  `luotxem` int DEFAULT '0',
  `iddm` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_pr`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(45, 'feger', 1234567.00, '2.jpg,3.jpg', 'ggg', 15, 10),
(46, 'feger', 995.00, '2.jpg', 'ggg', 0, 6),
(47, 'feger', 123.00, '3.jpg', 'ffff', 0, 10),
(48, 'feger', 995.00, '1_b.jpg', 'lll', 0, 10),
(49, 'feger', 1234567.00, '3.jpg', 'ppp', 0, 3),
(50, 'thamxg', 995.00, '1_b.jpg', 'yjojnknj', 0, 12),
(51, 'thamxg gjbkm', 1.00, '3_b.jpg', 'lklkl', 20, 12),
(52, 'ewtg', 1.00, '4_b.jpg', 'ooo', 0, 12),
(53, 'feger', 1234567.00, '6.jpg', 'kk', 555555, 10),
(54, 'feger124', 44.00, '1_b.jpg', '5555333', 63, 3),
(55, 'feger', 2553.00, '3_b.jpg', '540595', 0, 11),
(56, 'feger', 2553.00, '1_b.jpg', '\r\nkọ oimj', 0, 7),
(57, 'feger', 1234567.00, '3.jpg', 'yugbkjnnjb', 5, 10),
(58, 'thamxg', 995.00, '1_b.jpg', 'Jd đính đá like auth chất lượng kh phải giới thiệu nhiều đủ size sẵn kho\r\nSize 36->45 \r\nCtv sale 460 vip 450 \r\nFree giấy gói + box bảo vệ', 63, 12),
(59, 'thamxg gjbkm', 1234567.00, '3.jpg', '63', 0, 12),
(60, 'ewtg', 1.00, '3_b.jpg', 'ứedfgvhbj', 0, 12),
(61, 'thamxg gjbkm', 995.00, '2_b.jpg', 'dfyghjkl\r\n', 0, 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_tk` int NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` tinyint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id_tk`, `user`, `pass`, `email`, `diachi`, `tel`, `role`) VALUES
(71, 'tuoi', '123', 'thamnt1612@gmail.com', NULL, NULL, 0),
(72, 'trang', '123', 'thamnt1612@gmail.com', NULL, NULL, 0),
(73, 'tuoi', '123', 'thamnt1612@gmail.com', NULL, NULL, 0),
(74, 'admin', '123', 'tham@gmail.com', NULL, NULL, 1),
(76, 'ph43585', '123', 'thamnt1612@gmail.com', NULL, NULL, 0),
(77, 'thamnt1612@gmail.com', '123', 'thamnt1612@gmail.com', NULL, NULL, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_bl`),
  ADD KEY `lk_binhluan_sanpham` (`idpro`),
  ADD KEY `lk_binhluan_taikhoan` (`iduser`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_pr`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_tk`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_bl` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_pr` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_tk` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `lk_binhluan_sanpham` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id_pr`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `lk_binhluan_taikhoan` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id_tk`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

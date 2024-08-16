-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 20, 2024 lúc 02:39 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mixue`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan1`
--

CREATE TABLE `binhluan1` (
  `mabl` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaybl` date NOT NULL,
  `noidung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `idcomment` int(11) NOT NULL,
  `idkh` int(11) NOT NULL,
  `idhanghoa` int(11) NOT NULL,
  `content` text NOT NULL,
  `luotthich` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthanghoa`
--

CREATE TABLE `cthanghoa` (
  `idhanghoa` int(11) NOT NULL,
  `idsize` int(11) NOT NULL,
  `idtopping` int(11) NOT NULL,
  `idloai` int(11) NOT NULL,
  `dongia` float NOT NULL,
  `hinh` varchar(100) NOT NULL,
  `giamgia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cthanghoa`
--

INSERT INTO `cthanghoa` (`idhanghoa`, `idsize`, `idtopping`, `idloai`, `dongia`, `hinh`, `giamgia`) VALUES
(1, 1, 0, 1, 25000, 'sundeaxoai.jpg', 0),
(2, 1, 0, 1, 25000, 'kemcamlocxoay.jpg', 0),
(3, 1, 0, 1, 25000, 'hongtrakem.jpg', 0),
(4, 1, 0, 1, 54000, 'ocque.jpg', 0),
(5, 1, 0, 1, 10000, 'mamxoisuper.jpg', 0),
(6, 1, 0, 1, 25000, 'sundeatranchau.jpg', 0),
(7, 1, 0, 1, 25000, 'kembonmua.jpg', 0),
(9, 1, 0, 5, 54000, 'bavuong.jpg', 0),
(10, 1, 0, 5, 54000, 'duongden.jpg', 0),
(11, 1, 0, 5, 54000, 'duongden.jpg', 0),
(12, 1, 0, 5, 68000, 'bavuong.jpg', 0),
(13, 1, 0, 5, 49000, 'duongchi.jpg', 0),
(14, 1, 0, 5, 49000, 'thachdua.jpg', 0),
(15, 1, 0, 5, 69000, 'trasuanuong.jpg', 0),
(16, 1, 0, 5, 62000, 'mamxoi.jpg', 0),
(17, 1, 0, 2, 60000, 'Olongkiwi.jpeg', 0),
(18, 1, 0, 2, 50000, 'chanhtuoi.jpg', 0),
(19, 1, 0, 2, 50000, 'bonmua.jpg', 0),
(20, 1, 0, 2, 50000, 'hongtramatong.jpg', 0),
(21, 1, 0, 2, 50000, 'olong4mua.jpg', 0),
(22, 1, 0, 2, 62000, 'trachanhlohoi.jpg', 0),
(23, 1, 0, 2, 62000, 'tradaobigsize.jpg', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthoadon`
--

CREATE TABLE `cthoadon` (
  `masohd` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `mausac` varchar(20) NOT NULL,
  `size` int(3) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahh` int(11) NOT NULL,
  `tenhh` varchar(60) NOT NULL,
  `maloai` int(11) NOT NULL,
  `dacbiet` bit(1) NOT NULL,
  `soluotxem` int(11) NOT NULL,
  `ngaylap` date NOT NULL,
  `mota` varchar(2000) NOT NULL,
  `hinh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`mahh`, `tenhh`, `maloai`, `dacbiet`, `soluotxem`, `ngaylap`, `mota`, `hinh`) VALUES
(1, 'Super Sundea Xoài', 1, b'1', 10, '0000-00-00', 'Qúa Đã ', 'hongtramatong.jpg'),
(2, 'Kem Cam Lốc Xoáy', 1, b'0', 0, '0000-00-00', '', 'kemcamlocxoay.jpg'),
(3, 'Hồng Trà Kem', 1, b'0', 0, '0000-00-00', '', 'hongtrakem.jpg'),
(4, 'Kem Ốc Quế Mixue', 1, b'0', 0, '0000-00-00', '', 'ocque.jpg'),
(5, 'Super Sundea Mâm Xôi', 1, b'0', 0, '0000-00-00', '', 'mamxoi.jpg'),
(6, 'Super Sundea Trân Châu Đường Đen', 1, b'0', 0, '0000-00-00', '', 'sundeatranchau.jpg'),
(7, 'Trà Kem Bốn Mùa', 1, b'0', 0, '0000-00-00', '', 'kembonmua.jpg'),
(8, 'Trà Sữa 3Q', 5, b'0', 0, '0000-00-00', '', 'trasua3g.jpg'),
(9, 'Trà Sữa Trân Châu', 5, b'0', 0, '0000-00-00', '', 'trasuachantrau.jpg'),
(10, 'Trà Sữa Trân Châu Đường Đen', 5, b'0', 0, '0000-00-00', '', 'duongden.jpg'),
(11, 'Trà Sữa Bá Vương', 5, b'0', 0, '0000-00-00', '', 'bavuong.jpg'),
(12, 'Dương Chi Cam Lộ', 5, b'0', 0, '0000-00-00', '', 'duongchi.jpg'),
(13, 'Trà Sữa Thạch Dừa', 5, b'0', 0, '0000-00-00', '', 'thachdua.jpg'),
(14, 'Trà Sữa 2J', 5, b'0', 0, '0000-00-00', '', 'trasua3q.jpg'),
(15, 'Trà Sữa Nướng', 5, b'0', 0, '0000-00-00', '', 'trasuanuong.jpg'),
(16, 'Trà Mâm Xôi', 2, b'0', 0, '0000-00-00', '', 'mamxoi.jpg'),
(17, 'Trà Olong Kiwi', 2, b'0', 0, '0000-00-00', '', 'Olongkiwi.jpeg'),
(18, 'Nước Chanh Tươi Lạnh', 2, b'0', 0, '0000-00-00', '', 'chanhtuoi.jpg'),
(19, 'Trà Đào Bốn Mùa', 2, b'0', 0, '0000-00-00', '', 'bonmua.jpg'),
(20, 'Hồng Trà Mật Ong', 2, b'0', 0, '0000-00-00', '', 'hongtramatong.jpg'),
(21, 'Trà Olong Bốn Mùa', 2, b'0', 0, '0000-00-00', '', 'olong4mua.jpg'),
(22, 'Trà Chanh Lô Hội', 2, b'0', 0, '0000-00-00', '', 'trachanhlohoi.jpg'),
(76, 'tra dao', 1, b'1', 2, '0000-00-00', 'thom', 'bavuong.jpg'),
(77, 'Trà Đào BigSize1', 2, b'1', 2, '0000-00-00', 'Thơm Ngon', ''),
(78, 'Hồng Trà Kemm', 1, b'1', 2, '0000-00-00', 'ssssccc', 'tradaobigsize.jpg'),
(79, 'Hồng Trà Kemm', 1, b'1', 2, '0000-00-00', 'ssssccc', 'tradaobigsize.jpg'),
(80, 'Hồng Trà Kemm', 1, b'1', 2, '0000-00-00', 'ssssccc', 'tradaobigsize.jpg'),
(88, 'Super Sundea huỳnh', 1, b'1', 4, '0000-00-00', 'ssssccc', 'kembonmua.jpg'),
(89, 'Trà Đào 21', 2, b'1', 123, '0000-00-00', '123', 'hongtrakem.jpg'),
(90, 'Trà Đào 21', 2, b'1', 123, '0000-00-00', '123', 'hongtrakem.jpg'),
(91, 'Super Sundea huỳnh', 1, b'1', 10, '0000-00-00', '12312', 'mamxoi.jpg'),
(95, 'Trà Đào BigSize', 2, b'1', 123123, '0000-00-00', 'đẹp', 'tradaobigsize.jpg'),
(97, 'Trà Đào hahahaa', 2, b'1', 10, '0000-00-00', 'ssssccc', 'tradaobigsize.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `masohd` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaydat` date NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(11) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `diachi` text DEFAULT NULL,
  `sodienthoai` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `username`, `matkhau`, `email`, `diachi`, `sodienthoai`) VALUES
(1, 'tú trần', 'tutran', '8f8e2909a8f683c31159ee51d593a642', 'tu@gmail.com', 'hcm', '9090789678'),
(2, 'minh minh', 'minhminh', '8f8e2909a8f683c31159ee51d593a642', 'minh@gmail.com', 'bình định', '90907896789'),
(3, 'teo', 'teoteo', '3ff19fad9f5844248f601ab23381cc88', 'teo123@gmail.com', 'hcm', '9090789698'),
(4, 'ý nhi', 'nhinhi', '87f038af05196e3dfa958a521f6f400e', 'ngvynhi.itc@gmail.com', 'thoại ngọc hầu', '9090789699'),
(8, 'Nguyễn Thiên Huỳnh', 'huynhhuynh', '908cc7b5885f692ba99fb5f56f3af17f', 'thienhuynh0611@gmail.com', 'Bình Dương', '0981630592'),
(9, 'nguyen thien huynh', 'huynh2', 'abfe0bee82a1ed49eaf0543545781507', 'thienhuynh011@gmail.com', 'cc', '0293813881'),
(10, 'Phát Ngu', 'phat', 'abfe0bee82a1ed49eaf0543545781507', 'huynhtanphat@gmail.com', 'Tân Phú', '0987654321'),
(11, 'Nguyễn Thiên Huỳnh', 'mumxinhiu', 'af24ab1c1ddc04dd95ebfdd9232dd164', 'huyh@gmail.com', 'Hồ Chí Minh', '0981630592');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `idloai` int(11) NOT NULL,
  `tenloai` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`idloai`, `tenloai`) VALUES
(1, 'Kem'),
(2, 'Trà trái cây'),
(5, 'Trà sữa'),
(6, 'Thức uống đặc biệt gong cha'),
(7, 'Trà nguyên chất'),
(8, 'Thức uống sáng '),
(9, 'Thức uống đá xay'),
(10, 'Topping');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `idnv` int(11) NOT NULL,
  `hoten` varchar(250) NOT NULL,
  `dia` text NOT NULL,
  `username` varchar(250) NOT NULL,
  `matkhau` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`idnv`, `hoten`, `dia`, `username`, `matkhau`) VALUES
(2, 'Nguyễn Thiên Huỳnh', 'Tân Phú', 'huynh2', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `idsize` int(11) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`idsize`, `size`) VALUES
(1, 'S'),
(2, 'M'),
(3, 'L');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan1`
--
ALTER TABLE `binhluan1`
  ADD PRIMARY KEY (`mabl`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idcomment`);

--
-- Chỉ mục cho bảng `cthanghoa`
--
ALTER TABLE `cthanghoa`
  ADD PRIMARY KEY (`idhanghoa`),
  ADD KEY `FK_cthanghoa_size` (`idsize`),
  ADD KEY `FK_loai_cthanghoa` (`idloai`);

--
-- Chỉ mục cho bảng `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`masohd`,`mahh`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`mahh`),
  ADD KEY `FK_hanghoa_loai` (`maloai`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`masohd`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`idloai`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`idnv`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`idsize`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan1`
--
ALTER TABLE `binhluan1`
  MODIFY `mabl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `idcomment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `cthanghoa`
--
ALTER TABLE `cthanghoa`
  MODIFY `idhanghoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `mahh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `masohd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `idloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `idnv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `size`
--
ALTER TABLE `size`
  MODIFY `idsize` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cthanghoa`
--
ALTER TABLE `cthanghoa`
  ADD CONSTRAINT `FK_cthanghoa_size` FOREIGN KEY (`idsize`) REFERENCES `size` (`idsize`),
  ADD CONSTRAINT `FK_loai_cthanghoa` FOREIGN KEY (`idloai`) REFERENCES `loai` (`idloai`);

--
-- Các ràng buộc cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `FK_hanghoa_loai` FOREIGN KEY (`maloai`) REFERENCES `loai` (`idloai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 26, 2021 lúc 10:21 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `timviec`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `IDad` int(11) NOT NULL,
  `tenad` varchar(20) NOT NULL,
  `matkhau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congviec`
--

CREATE TABLE `congviec` (
  `IDcv` int(10) NOT NULL,
  `tencv` varchar(30) NOT NULL,
  `soluong` int(5) NOT NULL,
  `dotuoi` varchar(10) NOT NULL,
  `hannop` text NOT NULL,
  `IDgt` int(1) NOT NULL,
  `IDnn` int(11) NOT NULL,
  `IDtp` int(11) NOT NULL,
  `IDct` int(5) NOT NULL,
  `IDtd` int(11) NOT NULL,
  `IDht` int(11) NOT NULL,
  `IDkn` int(10) NOT NULL,
  `IDtv` int(1) NOT NULL,
  `IDluong` int(5) NOT NULL,
  `thoigiantao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `mota` varchar(255) NOT NULL,
  `yeucau` varchar(255) NOT NULL,
  `quyenloi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `congviec`
--

INSERT INTO `congviec` (`IDcv`, `tencv`, `soluong`, `dotuoi`, `hannop`, `IDgt`, `IDnn`, `IDtp`, `IDct`, `IDtd`, `IDht`, `IDkn`, `IDtv`, `IDluong`, `thoigiantao`, `mota`, `yeucau`, `quyenloi`) VALUES
(1, 'abc', 10, '', '', 1, 5, 27, 0, 2, 2, 1, 1, 4, '2021-12-21 03:21:23', '', '', ''),
(2, 'ahhhh', 5, '', '', 2, 1, 30, 0, 1, 2, 2, 2, 3, '2021-12-21 03:21:40', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gioitinh`
--

CREATE TABLE `gioitinh` (
  `IDgt` int(1) NOT NULL,
  `tengt` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `gioitinh`
--

INSERT INTO `gioitinh` (`IDgt`, `tengt`) VALUES
(1, 'Nam'),
(2, 'Nữ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhthuc`
--

CREATE TABLE `hinhthuc` (
  `IDht` int(10) NOT NULL,
  `tenht` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hinhthuc`
--

INSERT INTO `hinhthuc` (`IDht`, `tenht`) VALUES
(1, 'Bán thời gian'),
(2, 'Giờ hành chính');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kinhnghiem`
--

CREATE TABLE `kinhnghiem` (
  `IDkn` int(10) NOT NULL,
  `tenkn` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `kinhnghiem`
--

INSERT INTO `kinhnghiem` (`IDkn`, `tenkn`) VALUES
(1, 'Không có kinh nghiệm'),
(2, '1 năm'),
(3, '2 năm'),
(4, '3 năm'),
(5, '4 năm'),
(6, 'Trên 5 năm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `luong`
--

CREATE TABLE `luong` (
  `IDluong` int(10) NOT NULL,
  `mucluong` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `luong`
--

INSERT INTO `luong` (`IDluong`, `mucluong`) VALUES
(1, '1-3 triệu'),
(2, '3-5 triệu'),
(3, '5-8 triệu'),
(4, '8-10 triệu'),
(5, '10-15 triệu'),
(6, 'Thương lượng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nganhnghe`
--

CREATE TABLE `nganhnghe` (
  `IDnn` int(10) NOT NULL,
  `tennn` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nganhnghe`
--

INSERT INTO `nganhnghe` (`IDnn`, `tennn`) VALUES
(1, 'Quản trị kinh doanh'),
(2, 'Marketing'),
(3, 'Tài Chính'),
(4, 'Quản Lý'),
(5, 'Kinh tế Quốc tế');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quymo`
--

CREATE TABLE `quymo` (
  `IDqm` int(1) NOT NULL,
  `tenqm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `quymo`
--

INSERT INTO `quymo` (`IDqm`, `tenqm`) VALUES
(1, 'Dưới 100 người'),
(2, '100-500 người'),
(3, '500-1000 người'),
(4, 'Trên 1000 người');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `IDtk` int(5) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `tentk` varchar(20) NOT NULL,
  `phanquyen` int(1) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `sdt` int(13) NOT NULL,
  `quymo` varchar(50) NOT NULL,
  `mota` varchar(200) NOT NULL,
  `website` varchar(100) NOT NULL,
  `taikhoan` varchar(20) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`IDtk`, `ten`, `tentk`, `phanquyen`, `diachi`, `sdt`, `quymo`, `mota`, `website`, `taikhoan`, `matkhau`, `email`) VALUES
(7, 'Đầu tư thế giới di động', '', 1, 'Hà Nội', 987151662, '', '', '', 'cty', 'be8fe4c12c4e43217c06098a2595a950', 'cty@gmail.com'),
(17, 'Công ty Cổ phần Đầu tư Thế giới Di động', '', 1, 'Hà Nội', 2147483647, '500-1000 người', '', '', 'mmmm', '14e1b600b1fd579f47433b88e8d85291', 'hmy@gmail.com'),
(18, 'Công Ty Cổ Phần Bất Động Sản Thế Kỷ', '', 1, 'Hà Nội', 2147483647, '100-500 người', '', '', '2222222', '14e1b600b1fd579f47433b88e8d85291', 'mmmm@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `IDtk` int(10) NOT NULL,
  `tentk` varchar(30) NOT NULL,
  `taikhoan` varchar(20) NOT NULL,
  `matkhau` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tai_khoan`
--

INSERT INTO `tai_khoan` (`IDtk`, `tentk`, `taikhoan`, `matkhau`, `email`) VALUES
(2, 'HuyenMy', 'my', 'd9b1d7db4cd6e70935368a1efb10e377', 'my@gmail.com'),
(3, 'mmmm', 'mmmm', 'd9b1d7db4cd6e70935368a1efb10e377', 'mm@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhpho`
--

CREATE TABLE `thanhpho` (
  `IDtp` int(10) NOT NULL,
  `tentp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thanhpho`
--

INSERT INTO `thanhpho` (`IDtp`, `tentp`) VALUES
(1, 'Đà Nẵng'),
(2, 'Daklak'),
(3, 'Hà Nội'),
(4, 'Cao Bằng'),
(5, 'Lạng Sơn'),
(6, 'Dak Nông'),
(7, 'Gia Lai'),
(8, 'Kon Tum'),
(9, 'Lâm Đồng'),
(10, 'Quảng Nam'),
(11, 'Huế'),
(12, 'Quảng Trị'),
(13, 'Quảng Bình'),
(14, 'Hà Tĩnh'),
(15, 'Thanh Hóa'),
(16, 'Nghệ An'),
(17, 'Hải Phòng'),
(18, 'Nam Định'),
(19, 'Hải Dương'),
(20, 'Nam Định'),
(21, 'Bình Dương'),
(22, 'Đồng Nai'),
(23, 'Khánh Hòa'),
(24, 'Cần Thơ'),
(25, 'An Giang'),
(26, 'Bạc Liêu'),
(27, 'Bắc Cạn'),
(28, 'Bắc Giang'),
(29, 'Bắc Ninh'),
(30, 'Bến Tre'),
(31, 'Bình Phước'),
(32, 'Bình Thuận'),
(33, 'Bình Định'),
(34, 'Cà Mau'),
(35, 'Điện Biên'),
(36, 'Đồng Tháp'),
(37, 'Gia Lai'),
(38, 'Hà Giang'),
(39, 'Hà Nam'),
(40, 'Hà Tây'),
(41, 'Hậu Giang'),
(42, 'Hòa Bình'),
(43, 'Hưng Yên'),
(44, 'Kiên Giang'),
(45, 'Lai Châu'),
(46, 'Lạng Sơn'),
(47, 'Lào Cai'),
(48, 'Long An'),
(49, 'Ninh Bình'),
(50, 'Ninh Thuận'),
(51, 'Phú Thọ'),
(52, 'Phú Yên'),
(53, 'Quảng Ngãi'),
(54, 'Quảng Ninh'),
(55, 'Sóc Trăng'),
(56, 'Sơn La'),
(57, 'Tây Ninh'),
(58, 'Thái Bình'),
(59, 'Thái Nguyên'),
(60, 'Tiền Giang'),
(61, 'Trà Vinh'),
(62, 'Tuyên Quang'),
(63, 'Vĩnh Long'),
(64, 'Vĩnh Phúc'),
(65, 'Yên Bái'),
(66, 'TP. Hồ Chí Minh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuviec`
--

CREATE TABLE `thuviec` (
  `IDtv` int(1) NOT NULL,
  `thoigian` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thuviec`
--

INSERT INTO `thuviec` (`IDtv`, `thoigian`) VALUES
(1, '1 tháng'),
(2, '2 tháng'),
(3, '3 tháng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trinhdo`
--

CREATE TABLE `trinhdo` (
  `IDtd` int(10) NOT NULL,
  `tentd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `trinhdo`
--

INSERT INTO `trinhdo` (`IDtd`, `tentd`) VALUES
(1, 'Cao Đẳng'),
(2, 'Đại Học'),
(3, 'Trung Cấp'),
(4, 'Lao động phổ thông');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`IDad`);

--
-- Chỉ mục cho bảng `congviec`
--
ALTER TABLE `congviec`
  ADD PRIMARY KEY (`IDcv`),
  ADD KEY `IDnn` (`IDnn`),
  ADD KEY `IDtp` (`IDtp`),
  ADD KEY `IDtd` (`IDtd`),
  ADD KEY `IDht` (`IDht`),
  ADD KEY `IDluong` (`IDluong`),
  ADD KEY `IDgt` (`IDgt`),
  ADD KEY `IDct` (`IDct`),
  ADD KEY `IDkn` (`IDkn`),
  ADD KEY `IDtv` (`IDtv`);

--
-- Chỉ mục cho bảng `gioitinh`
--
ALTER TABLE `gioitinh`
  ADD PRIMARY KEY (`IDgt`);

--
-- Chỉ mục cho bảng `hinhthuc`
--
ALTER TABLE `hinhthuc`
  ADD PRIMARY KEY (`IDht`);

--
-- Chỉ mục cho bảng `kinhnghiem`
--
ALTER TABLE `kinhnghiem`
  ADD PRIMARY KEY (`IDkn`);

--
-- Chỉ mục cho bảng `luong`
--
ALTER TABLE `luong`
  ADD PRIMARY KEY (`IDluong`);

--
-- Chỉ mục cho bảng `nganhnghe`
--
ALTER TABLE `nganhnghe`
  ADD PRIMARY KEY (`IDnn`);

--
-- Chỉ mục cho bảng `quymo`
--
ALTER TABLE `quymo`
  ADD PRIMARY KEY (`IDqm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`IDtk`);

--
-- Chỉ mục cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`IDtk`);

--
-- Chỉ mục cho bảng `thanhpho`
--
ALTER TABLE `thanhpho`
  ADD PRIMARY KEY (`IDtp`);

--
-- Chỉ mục cho bảng `thuviec`
--
ALTER TABLE `thuviec`
  ADD PRIMARY KEY (`IDtv`);

--
-- Chỉ mục cho bảng `trinhdo`
--
ALTER TABLE `trinhdo`
  ADD PRIMARY KEY (`IDtd`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `IDad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `congviec`
--
ALTER TABLE `congviec`
  MODIFY `IDcv` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `gioitinh`
--
ALTER TABLE `gioitinh`
  MODIFY `IDgt` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `hinhthuc`
--
ALTER TABLE `hinhthuc`
  MODIFY `IDht` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `kinhnghiem`
--
ALTER TABLE `kinhnghiem`
  MODIFY `IDkn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `luong`
--
ALTER TABLE `luong`
  MODIFY `IDluong` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `nganhnghe`
--
ALTER TABLE `nganhnghe`
  MODIFY `IDnn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `quymo`
--
ALTER TABLE `quymo`
  MODIFY `IDqm` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `IDtk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `IDtk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `thanhpho`
--
ALTER TABLE `thanhpho`
  MODIFY `IDtp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `thuviec`
--
ALTER TABLE `thuviec`
  MODIFY `IDtv` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `trinhdo`
--
ALTER TABLE `trinhdo`
  MODIFY `IDtd` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `congviec`
--
ALTER TABLE `congviec`
  ADD CONSTRAINT `congviec_ibfk_1` FOREIGN KEY (`IDluong`) REFERENCES `luong` (`IDluong`),
  ADD CONSTRAINT `congviec_ibfk_2` FOREIGN KEY (`IDtd`) REFERENCES `trinhdo` (`IDtd`),
  ADD CONSTRAINT `congviec_ibfk_3` FOREIGN KEY (`IDht`) REFERENCES `hinhthuc` (`IDht`),
  ADD CONSTRAINT `congviec_ibfk_4` FOREIGN KEY (`IDnn`) REFERENCES `nganhnghe` (`IDnn`),
  ADD CONSTRAINT `congviec_ibfk_5` FOREIGN KEY (`IDtp`) REFERENCES `thanhpho` (`IDtp`),
  ADD CONSTRAINT `congviec_ibfk_6` FOREIGN KEY (`IDgt`) REFERENCES `gioitinh` (`IDgt`),
  ADD CONSTRAINT `congviec_ibfk_7` FOREIGN KEY (`IDtv`) REFERENCES `thuviec` (`IDtv`),
  ADD CONSTRAINT `congviec_ibfk_8` FOREIGN KEY (`IDkn`) REFERENCES `kinhnghiem` (`IDkn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

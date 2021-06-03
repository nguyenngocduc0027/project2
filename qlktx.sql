-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 10, 2020 lúc 05:41 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlktx`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietchuyenphong`
--

CREATE TABLE `chitietchuyenphong` (
  `MaDK` int(11) NOT NULL,
  `MaSV` bigint(20) NOT NULL,
  `MaPhongChuyen` varchar(10) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `MaPhongO` varchar(20) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `Lydo` varchar(300) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `TinhTrang` varchar(20) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `NgayChuyen` date DEFAULT NULL,
  `NgayDangKy` date DEFAULT current_timestamp(),
  `LanChuyen` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietchuyenphong`
--

INSERT INTO `chitietchuyenphong` (`MaDK`, `MaSV`, `MaPhongChuyen`, `MaPhongO`, `Lydo`, `TinhTrang`, `NgayChuyen`, `NgayDangKy`, `LanChuyen`) VALUES
(97, 20170027, NULL, 'A304', NULL, 'đã trả', NULL, '2020-05-29', 0),
(98, 20170027, NULL, 'A304', NULL, 'đã trả', NULL, '2020-05-29', 0),
(99, 20170027, NULL, 'A304', NULL, 'đã trả', NULL, '2020-06-02', 0),
(100, 20170027, NULL, 'A304', NULL, 'đã trả', NULL, '2020-06-11', 0),
(101, 20170027, NULL, 'A304', NULL, 'đã trả', NULL, '2020-06-11', 0),
(102, 20170027, 'A104', 'A204', 'test', 'đã trả', '2020-06-28', '2020-06-28', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdangky`
--

CREATE TABLE `chitietdangky` (
  `MaDK` int(11) NOT NULL,
  `MaSV` bigint(11) NOT NULL,
  `MaPhong` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `MaNV` varchar(20) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `NgayDangKy` date NOT NULL DEFAULT current_timestamp(),
  `NgayTraPhong` date DEFAULT NULL,
  `TinhTrang` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdangky`
--

INSERT INTO `chitietdangky` (`MaDK`, `MaSV`, `MaPhong`, `MaNV`, `NgayDangKy`, `NgayTraPhong`, `TinhTrang`) VALUES
(97, 20170027, 'A304', 'NV1', '2020-05-29', '2020-05-29', 'đã duyệt'),
(98, 20170027, 'A304', 'NV1', '2020-05-29', '2020-05-29', 'đã duyệt'),
(99, 20170027, 'A304', 'NV1', '2020-06-01', '2020-06-02', 'đã duyệt'),
(100, 20170027, 'A304', 'NV1', '2020-06-09', '2020-06-11', 'đã duyệt'),
(101, 20170027, 'A304', 'NV1', '2020-06-11', '2020-06-11', 'đã duyệt'),
(102, 20170027, 'A104', 'NV1', '2020-06-28', '2020-06-28', 'đã duyệt'),
(103, 20172529, 'A204', NULL, '2020-07-04', NULL, 'chưa duyệt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadondiennuoc`
--

CREATE TABLE `hoadondiennuoc` (
  `MaHD` int(11) NOT NULL,
  `MaPhong` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `TienDien` decimal(10,0) NOT NULL,
  `TienNuoc` decimal(10,0) NOT NULL,
  `Thang` int(11) NOT NULL,
  `TinhTrang` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL DEFAULT 'chưa thu'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadondiennuoc`
--

INSERT INTO `hoadondiennuoc` (`MaHD`, `MaPhong`, `TienDien`, `TienNuoc`, `Thang`, `TinhTrang`) VALUES
(18, 'A304', '300', '100', 2, 'đã thu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khu`
--

CREATE TABLE `khu` (
  `MaKhu` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `TenKhu` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Sex` varchar(3) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `khu`
--

INSERT INTO `khu` (`MaKhu`, `TenKhu`, `Sex`) VALUES
('A', 'Khu A', 'Nam'),
('B', 'Khu B', 'Nam'),
('C', 'Khu C', 'Nam'),
('D', 'Khu D', 'Nu'),
('E', 'Khu E', 'Nu'),
('F', 'Khu F', 'Nu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `HoTen` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `NgaySinh` date DEFAULT NULL,
  `DiaChi` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `SDT` bigint(12) DEFAULT NULL,
  `MatKhau` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `HoTen`, `NgaySinh`, `DiaChi`, `SDT`, `MatKhau`) VALUES
('BAOVE', 'Nguyễn Văn B', '1998-06-03', 'đâsdsad', 1235568, '123456'),
('NV1', 'Nguyễn Ngọc Đức', '1999-05-16', 'Thanh Hóa', 123456777, 'fcea920f7412b5da7be0cf42b8c93759'),
('NV2', 'Nguyễn Văn A', '1998-06-09', 'Hà Nội', 123456789, '123456'),
('NV3', 'Nguyễn Văn B', '1993-06-02', 'Hà Nội', 123568648, 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong`
--

CREATE TABLE `phong` (
  `MaPhong` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `MaKhu` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `SoNguoiToiDa` int(2) DEFAULT NULL,
  `SoNguoiHienTai` int(2) DEFAULT 0,
  `Gia` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `phong`
--

INSERT INTO `phong` (`MaPhong`, `MaKhu`, `SoNguoiToiDa`, `SoNguoiHienTai`, `Gia`) VALUES
('306', 'A', 8, 0, '300'),
('A101', 'A', 8, 0, '300000'),
('A102', 'A', 8, 0, '300000'),
('A103', 'A', 8, 0, '300000'),
('A104', 'A', 8, 0, '300000'),
('A201', 'A', 6, 0, '400000'),
('A202', 'A', 6, 0, '400000'),
('A203', 'A', 6, 0, '400000'),
('A204', 'A', 6, 2, '400000'),
('A301', 'A', 4, 0, '600000'),
('A302', 'A', 4, 0, '600000'),
('A303', 'A', 4, 0, '600000'),
('A304', 'A', 4, 1, '600000'),
('B101', 'B', 8, 0, '300000'),
('B102', 'B', 8, 0, '300000'),
('B103', 'B', 8, 0, '300000'),
('B104', 'B', 8, 0, '300000'),
('B201', 'B', 6, 0, '400000'),
('B202', 'B', 6, 0, '400000'),
('B203', 'B', 6, 0, '400000'),
('B204', 'B', 6, 0, '400000'),
('B301', 'B', 4, 0, '600000'),
('B302', 'B', 4, 0, '600000'),
('B303', 'B', 4, 0, '600000'),
('B304', 'B', 4, 0, '600000'),
('C101', 'C', 8, 0, '300000'),
('C102', 'C', 8, 0, '300000'),
('C103', 'C', 8, 0, '300000'),
('C104', 'C', 8, 0, '300000'),
('C201', 'C', 6, 0, '400000'),
('C202', 'C', 6, 0, '400000'),
('C203', 'C', 6, 0, '400000'),
('C204', 'C', 6, 0, '400000'),
('C301', 'C', 4, 0, '600000'),
('C302', 'C', 4, 0, '600000'),
('C303', 'C', 4, 0, '600000'),
('C304', 'C', 4, 0, '600000'),
('D101', 'D', 8, 0, '300000'),
('D102', 'D', 8, 0, '300000'),
('D103', 'D', 8, 0, '300000'),
('D104', 'D', 8, 0, '300000'),
('D201', 'D', 6, 0, '400000'),
('D202', 'D', 6, 0, '400000'),
('D203', 'D', 6, 0, '400000'),
('D204', 'D', 6, 0, '400000'),
('D301', 'D', 4, 0, '600000'),
('D302', 'D', 4, 0, '600000'),
('D303', 'D', 4, 0, '600000'),
('D304', 'D', 4, 0, '600000'),
('E101', 'E', 8, 0, '300000'),
('E102', 'E', 8, 0, '300000'),
('E103', 'E', 8, 0, '300000'),
('E104', 'E', 8, 0, '300000'),
('E201', 'E', 6, 0, '400000'),
('E202', 'E', 6, 0, '400000'),
('E203', 'E', 6, 0, '400000'),
('E204', 'E', 6, 0, '400000'),
('E301', 'E', 4, 0, '600000'),
('E302', 'E', 4, 0, '600000'),
('E303', 'E', 4, 0, '600000'),
('E304', 'E', 4, 0, '600000'),
('F101', 'F', 8, 0, '300000'),
('F102', 'F', 8, 0, '300000'),
('F103', 'F', 8, 0, '300000'),
('F104', 'F', 8, 0, '300000'),
('F201', 'F', 6, 0, '400000'),
('F202', 'F', 6, 0, '400000'),
('F203', 'F', 6, 0, '400000'),
('F204', 'F', 6, 0, '400000'),
('F301', 'F', 4, 0, '600000'),
('F302', 'F', 4, 0, '600000'),
('F303', 'F', 4, 0, '600000'),
('F304', 'F', 4, 0, '600000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `MaSV` bigint(50) NOT NULL,
  `HoTen` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `GioiTinh` varchar(10) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `NgaySinh` date DEFAULT NULL,
  `DiaChi` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `SDT` bigint(12) DEFAULT NULL,
  `MatKhau` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`MaSV`, `HoTen`, `GioiTinh`, `NgaySinh`, `DiaChi`, `SDT`, `MatKhau`) VALUES
(20170027, 'Nguyễn Ngọc duk', 'Nam', '1999-05-16', 'Thanh Hóa', 1212121212, '22193a299114a04bbd6b7c7eb64839d3'),
(20170028, 'Lê Việt Hùng', 'Nam', '1999-05-16', 'Sơn La', 378049798, '22193a299114a04bbd6b7c7eb64839d3'),
(20170029, 'Lê Văn A', 'Nam', '1999-05-16', 'Việt Nam', 378049798, '49b739000cd79e2692d98edd60c85926'),
(20170031, 'tets', 'Nữ', '0000-00-00', 'ađasad', 1564646465, '20170031'),
(20172017, 'adsađââsđá', 'Nữ', '0000-00-00', 'áđasada', 123456, '29ce822e8b7e51a318e382b0e34f4360'),
(20172518, 'Duy Mặt Lol', 'Nam', '1999-07-26', 'Thái Bình', 1355256565, '47b01866336b1d82b921b8236698d5cf'),
(20172529, 'Nguyễn Sơn Hải', 'Nam', '1999-05-16', 'Bách khoa', 1326516588, 'dc3696620b220de6475e7d06473867ac'),
(20172696, 'Hoàng Nhật Minh', 'Nam', '1999-08-17', 'Thanh Hóa', 123456789, '4bb81d9d3e272a7b63506b32b206e200'),
(20172748, 'Tạ Hoàng Phúc', 'Nữ', '1999-05-17', 'Việt Nam', 1312258, 'dc36d12d2337a2965cd048ac6e8a5da0'),
(20172899, 'Đinh Vũ Minh Tuấn', 'Nam', '1999-05-16', 'Thanh Hóa', 378049798, 'adcb52da735e0fb132e7088b9c625368');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongbao`
--

CREATE TABLE `thongbao` (
  `MaTB` int(11) NOT NULL,
  `MaSV` bigint(20) NOT NULL,
  `MaNV` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `TieuDe` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `NoiDung` varchar(500) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `LoaiTB` varchar(10) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `NgayTB` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `thongbao`
--

INSERT INTO `thongbao` (`MaTB`, `MaSV`, `MaNV`, `TieuDe`, `NoiDung`, `LoaiTB`, `NgayTB`) VALUES
(77, 20170027, 'NV1', 'Thông Báo Đăng Ký Phòng Ký Túc Xá', 'Bạn đã đăng ký thành công ! Phòng : A304. Vui lòng lên ký túc xá để thanh toán tiền phòng và nhận phòng trước ngày 2020-5-32 15:17:49. Nếu không lên nhận phòng hệ thống sẽ hủy phòng của bạn và thêm bạn vào danh sách Xấu. Xin Cảm ơn !!!', 'đăng ký', '2020-05-29'),
(78, 20170027, 'NV1', 'Thông Báo Trả Phòng Ký Túc Xá', 'Bạn đã Trả phòng thành công. Xin Cảm ơn !!!', 'trả phòn', '2020-05-29'),
(79, 20170027, 'NV1', 'Thông Báo Đăng Ký Phòng Ký Túc Xá', 'Bạn đã đăng ký thành công ! Phòng : A304. Vui lòng lên ký túc xá để thanh toán tiền phòng và nhận phòng trước ngày 2020-5-32 15:37:50. Nếu không lên nhận phòng hệ thống sẽ hủy phòng của bạn và thêm bạn vào danh sách Xấu. Xin Cảm ơn !!!', 'đăng ký', '2020-05-29'),
(80, 20170027, 'NV1', 'Thông Báo Trả Phòng Ký Túc Xá', 'Bạn đã Trả phòng thành công. Xin Cảm ơn !!!', 'trả phòn', '2020-05-29'),
(81, 20170027, 'NV1', 'Thông Báo Đăng Ký Phòng Ký Túc Xá', 'Bạn đã đăng ký thành công ! Phòng : A304. Vui lòng lên ký túc xá để thanh toán tiền phòng và nhận phòng trước ngày 2020-6-5 10:11:58. Nếu không lên nhận phòng hệ thống sẽ hủy phòng của bạn và thêm bạn vào danh sách Xấu. Xin Cảm ơn !!!', 'đăng ký', '2020-06-02'),
(82, 20170027, 'NV1', 'Thông Báo Trả Phòng Ký Túc Xá', 'Bạn đã Trả phòng thành công. Xin Cảm ơn !!!', 'trả phòn', '2020-06-02'),
(83, 20170027, 'NV1', 'Thông Báo Đăng Ký Phòng Ký Túc Xá', 'Bạn đã đăng ký thành công ! Phòng : A304. Vui lòng lên ký túc xá để thanh toán tiền phòng và nhận phòng trước ngày 2020-6-14 13:26:20. Nếu không lên nhận phòng hệ thống sẽ hủy phòng của bạn và thêm bạn vào danh sách Xấu. Xin Cảm ơn !!!', 'đăng ký', '2020-06-11'),
(84, 20170027, 'NV1', 'Thông Báo Trả Phòng Ký Túc Xá', 'Bạn đã Trả phòng thành công. Xin Cảm ơn !!!', 'trả phòn', '2020-06-11'),
(85, 20170027, 'NV1', 'Thông Báo Đăng Ký Phòng Ký Túc Xá', 'Bạn đã đăng ký thành công ! Phòng : A304. Vui lòng lên ký túc xá để thanh toán tiền phòng và nhận phòng trước ngày 2020-6-14 13:29:46. Nếu không lên nhận phòng hệ thống sẽ hủy phòng của bạn và thêm bạn vào danh sách Xấu. Xin Cảm ơn !!!', 'đăng ký', '2020-06-11'),
(86, 20170027, 'NV1', 'Thông Báo Trả Phòng Ký Túc Xá', 'Bạn đã Trả phòng thành công. Xin Cảm ơn !!!', 'trả phòn', '2020-06-11'),
(87, 20170027, 'NV1', 'Thông Báo Đăng Ký Phòng Ký Túc Xá', 'Bạn đã đăng ký thành công ! Phòng : A204. Vui lòng lên ký túc xá để thanh toán tiền phòng và nhận phòng trước ngày 2020-6-31 16:28:53. Nếu không lên nhận phòng hệ thống sẽ hủy phòng của bạn và thêm bạn vào danh sách Xấu. Xin Cảm ơn !!!', 'đăng ký', '2020-06-28'),
(88, 20170027, 'NV1', 'Thông Báo Chuyển Phòng Ký Túc Xá', 'Chuyển Phòng của bạn đã bị hủy. vui lòng lên gặp Nhân viên Ký túc xá để biết thêm chi tiết. Xin cảm ơn !!!', 'chuyển ph', '2020-06-28'),
(89, 20170027, 'NV1', 'Thông Báo Chuyển Phòng Ký Túc Xá', 'Chuyển Phòng của bạn đã bị hủy. vui lòng lên gặp Nhân viên Ký túc xá để biết thêm chi tiết. Xin cảm ơn !!!', 'chuyển ph', '2020-06-28'),
(90, 20170027, 'NV1', 'Thông Báo Chuyển Phòng Ký Túc Xá', 'Bạn đã chuyển phòng thành công ! Phòng : A104. Vui lòng lên ký túc xá để thanh toán tiền phòng và nhận phòng trước ngày 2020-6-31 16:34:25. Nếu không lên nhận phòng hệ thống sẽ hủy phòng của bạn và thêm bạn vào danh sách Xấu. Xin Cảm ơn !!!', 'chuyển ph', '2020-06-28'),
(91, 20170027, 'NV1', 'Thông Báo Trả Phòng Ký Túc Xá', 'Bạn đã Trả phòng thành công. Xin Cảm ơn !!!', 'trả phòn', '2020-06-28');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietchuyenphong`
--
ALTER TABLE `chitietchuyenphong`
  ADD PRIMARY KEY (`MaDK`),
  ADD KEY `MaPhongO` (`MaPhongO`),
  ADD KEY `MaPhongChuyen` (`MaPhongChuyen`);

--
-- Chỉ mục cho bảng `chitietdangky`
--
ALTER TABLE `chitietdangky`
  ADD PRIMARY KEY (`MaDK`),
  ADD KEY `MaNV` (`MaNV`),
  ADD KEY `MaPhong` (`MaPhong`),
  ADD KEY `MaSV` (`MaSV`);

--
-- Chỉ mục cho bảng `hoadondiennuoc`
--
ALTER TABLE `hoadondiennuoc`
  ADD PRIMARY KEY (`MaPhong`,`Thang`),
  ADD UNIQUE KEY `MaHD` (`MaHD`);

--
-- Chỉ mục cho bảng `khu`
--
ALTER TABLE `khu`
  ADD PRIMARY KEY (`MaKhu`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`);

--
-- Chỉ mục cho bảng `phong`
--
ALTER TABLE `phong`
  ADD PRIMARY KEY (`MaPhong`),
  ADD KEY `MaKhu` (`MaKhu`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MaSV`);

--
-- Chỉ mục cho bảng `thongbao`
--
ALTER TABLE `thongbao`
  ADD PRIMARY KEY (`MaTB`),
  ADD KEY `MaSV` (`MaSV`),
  ADD KEY `MaNV` (`MaNV`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitietdangky`
--
ALTER TABLE `chitietdangky`
  MODIFY `MaDK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT cho bảng `hoadondiennuoc`
--
ALTER TABLE `hoadondiennuoc`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `thongbao`
--
ALTER TABLE `thongbao`
  MODIFY `MaTB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietchuyenphong`
--
ALTER TABLE `chitietchuyenphong`
  ADD CONSTRAINT `chitietchuyenphong_ibfk_1` FOREIGN KEY (`MaDK`) REFERENCES `chitietdangky` (`MaDK`),
  ADD CONSTRAINT `chitietchuyenphong_ibfk_2` FOREIGN KEY (`MaPhongO`) REFERENCES `phong` (`MaPhong`),
  ADD CONSTRAINT `chitietchuyenphong_ibfk_3` FOREIGN KEY (`MaPhongChuyen`) REFERENCES `phong` (`MaPhong`);

--
-- Các ràng buộc cho bảng `chitietdangky`
--
ALTER TABLE `chitietdangky`
  ADD CONSTRAINT `chitietdangky_ibfk_1` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`),
  ADD CONSTRAINT `chitietdangky_ibfk_2` FOREIGN KEY (`MaPhong`) REFERENCES `phong` (`MaPhong`),
  ADD CONSTRAINT `chitietdangky_ibfk_4` FOREIGN KEY (`MaSV`) REFERENCES `sinhvien` (`MaSV`);

--
-- Các ràng buộc cho bảng `hoadondiennuoc`
--
ALTER TABLE `hoadondiennuoc`
  ADD CONSTRAINT `hoadondiennuoc_ibfk_1` FOREIGN KEY (`MaPhong`) REFERENCES `phong` (`MaPhong`);

--
-- Các ràng buộc cho bảng `phong`
--
ALTER TABLE `phong`
  ADD CONSTRAINT `phong_ibfk_1` FOREIGN KEY (`MaKhu`) REFERENCES `khu` (`MaKhu`);

--
-- Các ràng buộc cho bảng `thongbao`
--
ALTER TABLE `thongbao`
  ADD CONSTRAINT `thongbao_ibfk_1` FOREIGN KEY (`MaSV`) REFERENCES `sinhvien` (`MaSV`),
  ADD CONSTRAINT `thongbao_ibfk_2` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 13, 2019 lúc 06:42 PM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `onlineshopdb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `productId` int(11) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `productImage` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`productId`, `productName`, `productImage`, `price`, `status`) VALUES
(608, 'Máy Ảnh Canon EOS M50 + Kit 15-45mm (24.1MP)...', 'img/products/b3ef1d86739ec9c4eb776c55a81a73b6.jpg', 13990000, 1),
(609, 'Camera chống trộm Xiaomi 360° 1080P Mi Home...', 'img/products/a1d40d53b39d7710d02f90a25ef8db46.jpg', 740000, 1),
(610, 'Bộ giá đỡ điện thoại, máy ảnh 3 chân tripod', 'img/products/b7d29263cc28921adca2e6fcfd04285e.jpg', 58899, 1),
(611, 'Camera Giám Sát IP Yoosee 3 Râu - Hàng nhập...', 'img/products/7792981185242576f2ca9e9e25316768.jpg', 284980, 1),
(612, 'Camera IP Wifi Ezviz CS-CV246 - Hàng Chính...', 'img/products/0594e4684d3c0dae72237bff55419278.jpg', 525000, 1),
(613, 'Camera Hồng Ngoại IP Xiaomi Mi Smart Home...', 'img/products/f80fa45730786550559f376776eba4a5.jpg', 390000, 1),
(614, 'Camera IP Wifi Yoosee Full HD 1080P 3 Râu -...', 'img/products/56e087c391d4a4adb6c85c6d7957b0b8.jpg', 368964, 1),
(615, 'Hộp Film Fujifilm Mini 20 Tấm - Hàng Chính...', 'img/products/19da10cb95de985a61bbb3106a7d227e.jpg', 249000, 1),
(616, 'Máy Ảnh Canon 750D + Lens 18-55 IS STM (Lê...', 'img/products/b02b462394bc3c59e5876ec0d9cb6ae8.jpg', 11490000, 1),
(617, 'Thẻ Nhớ SDXC Sandisk Extreme Pro 170MB/s V30...', 'img/products/00a248a6b7849f83ea1d9cb630ac89d5.jpg', 425000, 1),
(618, 'Tay Cầm Chống Rung Zhiyun SMOOTH 4 Dùng Cho...', 'img/products/d7e3daebbcd593500be43e0b845f1b5a.jpg', 1719000, 1),
(619, 'Combo Bộ Giá đỡ chụp hình cho điện thoại,...', 'img/products/bbcdf1a6a4e710a0e8b048789f327cec.png', 78278, 1),
(620, 'Thẻ Nhớ SDHC Sandisk Extreme Pro 95MB/s 32GB...', 'img/products/4b5db1334e5ee273d8c80350b8a1424b.jpg', 249000, 1),
(621, 'Combo hộp chống ẩm máy ảnh và ẩm kế điện tử,...', 'img/products/514684c95fdafba38c7fdc5ee0b8a598.jpg', 199000, 1),
(622, 'Chân Máy Ảnh Tripod Weifeng 3520 - Hàng Nhập...', 'img/products/05d07a21385ea2ef0f6a7f0dd67552b4.jpg', 244444, 1),
(623, 'Lens Canon 50mm f/1.8 STM (Lê Bảo Minh) -...', 'img/products/1431230400000_1143786.jpg', 2400000, 1),
(624, 'Thẻ Nhớ SD SanDisk Ultra Class 10 16GB -...', 'img/products/full_sd-ultra-48-16-01.jpg', 85000, 1),
(625, 'Chân Máy Ảnh Benro T880 EX (Tripod) - Hàng...', 'img/products/t8800.jpg', 488888, 1),
(626, 'Chân máy ảnh Tripod 3110 tặng Giá kẹp điện...', 'img/products/a4cd2501f3adc06d593188329f46cc5a.jpg', 76999, 1),
(627, 'Thẻ Nhớ SDHC Lexar Professional 633x 16GB...', 'img/products/cd9152c669add7bb05f934c1243285de.png', 104000, 1),
(628, 'Mic Thu Âm Cho Điện Thoại Và Máy Ảnh BOYA BY...', 'img/products/7498924c7c499ab6b0c8968c752a1d84.jpg', 275000, 1),
(629, 'Tủ Chống Ẩm Andbon AB-30C (30 lít) - Hàng...', 'img/products/87ffe518081596b05b4f2b1fb9ed5ace.jpg', 1150555, 1),
(630, 'Micro Gài Áo Cho Máy Quay Boya BY-M1 - Hàng...', 'img/products/7e8fde48753521a91d61094a9ae21487.jpg', 299999, 1),
(631, 'Thẻ Nhớ SD SanDisk Ultra Class 10 32GB -...', 'img/products/_sdsdunb032ggn3infronthr_gallery.jpg', 120000, 1),
(632, 'Hộp Film Fujifilm Mini 10 Tấm - Hàng Chính...', 'img/products/3dd732a0ec2eda32cdd41fc325b7327d.jpg', 160000, 1),
(633, 'Camera IP Xiaomi MJSXJ02CM Mi Home Security...', 'img/products/3cdbfa34087d2335a0e6b9904e55969a.jpg', 715000, 1),
(634, 'Camera IP Wifi Ezviz ECS-CV206 - Hàng chính...', 'img/products/39064fa4a99c1ed7e09609cd3f3ae1c2.jpg', 490000, 1),
(635, 'Bộ Vệ Sinh Máy Ảnh', 'img/products/b9f9e4e82e5b0681d938be3a4fa3bbfe.jpg', 68000, 1),
(636, 'Máy Ảnh Selfie Lấy Liền Fujifilm Instax Mini...', 'img/products/d.u5168.d20170608.t122753.944199.jpg', 1599000, 1),
(637, 'Hộp chụp sản phẩm 2 bảng LED 6 màu Backdrops...', 'img/products/de0380f76afd22b697074ee7ab5507c7.jpg', 258000, 1),
(638, 'Thẻ Nhớ SDXC Lexar Professional 633x 64GB...', 'img/products/8c6d574dabfbc36d725132ce65670111.png', 235000, 1),
(639, 'Chân Máy Ảnh Tripod WEIFENG WT-3520 - Hàng...', 'img/products/5a43fc7c1f74f99fdeadf458184e48fe.jpg', 222222, 1),
(640, 'Bộ 2 pin và sạc đôi RavPower NP-FW50 cho...', 'img/products/561f8dccc81335e2a09077006e527d80.jpg', 731555, 1),
(641, 'Pin Panasonic CR 2032 - Hàng chính hãng', 'img/products/9d4393b0ec71bd7197de1031159d51b3.jpg', 45000, 1),
(642, 'Camera Quan Sát Yoosee 3 Râu 1.0Mpx Z063HL -...', 'img/products/88897737dfaec1c1f8bbf000ce67c76d.png', 384988, 1),
(643, 'Thẻ Nhớ SD SanDisk Ultra Class 10 32GB -...', 'img/products/73c36355c6a9c88de2bccd3e532e3165.jpg', 120000, 1),
(644, 'Dây cáp kết nối máy ảnh Canon với máy tính', 'img/products/9e7be1b999fe913e0c4c0c057bce657b.jpg', 89000, 1),
(645, 'Tripod Chân Nhện 22cm - Hàng Nhập Khẩu', 'img/products/c032a8239306f42bed5db2e17285a97f.jpg', 99000, 1),
(646, 'Thẻ Nhớ Lexar SDXC Professional 633x 32GB...', 'img/products/c1b92de932a89c251fb5dbd2d492626f.png', 170000, 1),
(647, 'Camera IP Wifi mini V380 Full HD 1080P Hàng...', 'img/products/273ce2117a754bab6bbebe7eff4c2eaf.png', 280000, 1),
(648, 'Giá đỡ điện thoại, máy ảnh 3 chân Tripod...', 'img/products/5859b0e6f827fc2df5078d12ad73efce.jpg', 64939, 1),
(649, 'Chân Máy Ảnh Tripod Yunteng VCT - 668 - Hàng...', 'img/products/34688695d67b1a96439181022825bc3f.jpg', 399999, 1),
(650, 'Thẻ nhớ Samsung Evo Plus 32GB chuyên dụng...', 'img/products/48bf4e954563f36b9fc6bff289681755.jpg', 105000, 1),
(651, 'Camera IP Wifi Dahua 3Mp IPC-C35P - Hàng...', 'img/products/-1.u504.d20161011.t160935.440433.jpg', 1060000, 1),
(652, 'Camera Ezviz C6C CS-CV246 (Ez360 1080P) -...', 'img/products/0b9e8d07bd27ed6184b8f4da96f3bbc1.jpg', 636480, 1),
(653, 'Máy Quay DJI OSMO Pocket - Hàng Chính hãng', 'img/products/6ccff1f06b3d00093e97ea6b6515936e.jpg', 7190000, 1),
(654, 'tung1', 'img/products/tung.jpg', 30000000, 0),
(655, 'tung1', 'img/products/tung1.jpg', 30000000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `userid` mediumint(6) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` char(60) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_level` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`userid`, `first_name`, `last_name`, `email`, `password`, `registration_date`, `user_level`, `status`) VALUES
(158, 'Tùng', 'Thanh', 'tung120320@gmail.com', '$2y$10$ovzEkFxSxrChy6N/8APyeeqbk/ZuYfSV5sVKXzlFKe86XC9S9e1Cm', '2019-10-13 16:41:45', 2, 1),
(159, 'Tùng', 'Thanh', 't@gmail.com', '$2y$10$gXeoIeqj8kmQ8xON9mhW4uOrhvAZFl/GrAy5kHVivu7M//PWmDcW2', '2019-09-17 04:19:04', 2, 0),
(161, 'test', 'test', 'test@gmail.com', '$2y$10$0UiVrHvxH2BhdE1YskuQK.QIdQ7IFgO6MyFL8/ulMLm6KlPHTrHMe', '2019-09-16 04:43:02', 2, 0),
(162, 'admin', 'tung', 'admin@gmail.com', '$2y$10$CK.L0C42hzlvRxKYqOYoHO6Ojzbrk8pKb2yBtkZuBhJHOYfF/owPq', '2019-09-17 03:07:33', 1, 1),
(167, 'Tùng', 'Thanh', 'thanhtung120300@hotmail.com', '$2y$10$P14TKOJhxKw75UJpk4ebMe0P90klzeONqR4cESp4oeoEPZUm/zgMi', '2019-09-17 03:50:03', 1, 1),
(219, 'Tùng', 'Thanh', 'qwe@gmail.com', '$2y$10$xkoLQKtyB4.GRu6RwCT7eOaQhJGTa7DIigGiZjDZ06MIK8ilcGSky', '2019-09-18 02:14:35', 0, 0),
(221, 'Tùng', 'Thanh', 'abc120320@gmail.com', '$2y$10$tO/1A6cNavx/i/0EkBb.1O68KprZJ78nCbLankEPq6/AZU3wlDGb6', '2019-09-17 07:45:25', 1, 1),
(223, 'abc1', 'abc1', 'abc@gmail.com', '$2y$10$3hh36sVDHUu7nx1UIrX.cuWLKp8YP4n9V.dVCvYdFe/JFR4v9zf8m', '2019-09-18 02:11:12', 2, 0),
(224, 'abcd', 'abcd', 'abcd@gmail.com', '$2y$10$P/EYoqq90EC2JwTxG9tF1eVtxQntQXFlZUcyB4etCqehGgVd7Fttm', '2019-09-17 07:50:34', 2, 0),
(225, 'a', 'a', 'a', '$2y$10$GuQkr9mxtkzBVW.ouWY7NO6WbFKE4Q.pzKxoF/viNi6xy0Jrzwni2', '2019-09-18 02:10:50', 2, 0),
(241, 'test1@gmail.com', 'test1@gmail.com', 'test1@gmail.com', '$2y$10$t/pH3nJBezmCsWtj.wrvsObnkaiPOw0MBIT4yCi49lDKAE5JzQsyy', '2019-09-18 02:11:43', 2, 0),
(242, 'test2@gmail.com', 'test2@gmail.com', 'test2@gmail.com', '$2y$10$wKHbI4vbvcVZgbyl9v.V5OD/cHMwpQdFuiKJPZXL6xmzIGPyu7QMC', '2019-09-18 02:13:01', 2, 0),
(243, 'test3@gmail.com', 'test3@gmail.com', 'test3@gmail.com', '$2y$10$CBxW1Ma5OrW33U6Al1v/peMFogukVsr/8j5eG3d3xRXBo45wZVplO', '2019-09-18 02:16:18', 2, 0),
(244, 'test4@gmail.com', 'test4@gmail.com', 'test4@gmail.com', '$2y$10$rGogB84xodPYu5sZp.RCyeyg1pUlYcTgv6uE8tW6BxEFUPST2UafK', '2019-09-18 02:19:19', 2, 0),
(245, 'test5@gmail.com', 'test5@gmail.com', 'test5@gmail.com', '$2y$10$UaVsl.VxIp1s2kiHiIgNsO8FpxlANq.QhvYxFAciK/GUGrASodj7.', '2019-09-18 02:19:51', 2, 0),
(246, 'test6@gmail.com', 'test6@gmail.com', 'test6@gmail.com', '$2y$10$ZSmlKLvO2j1Jpuo.E38e3u3CR9zn6g8zz4DeQxWy5mFELUYdk1Hle', '2019-09-18 02:20:19', 2, 0),
(248, '???', 'test7@gmail.com', 'test7@gmail.com', '$2y$10$7q3Vs2jsalwBraPGZD.K5e0CUNEwm9b5aFeD13I6uRiwG95y.S5AW', '2019-10-10 08:24:21', 2, 0),
(249, 'test8@gmail.com', 'test8@gmail.com', 'test8@gmail.com', '$2y$10$6d60FOOwn.pGiusJilzdMuTqdHSuMQboFXlMU82igwxv50iyiyYGm', '2019-09-18 02:25:14', 2, 0),
(251, 'test9@gmail.com', 'test9@gmail.com', 'test9@gmail.com', '$2y$10$m.iFwLAA7PaJDjCtrHOQfeJaINdo53xZQKgbmGJTXYXCgVQEHX0V.', '2019-10-10 08:23:21', 2, 0),
(252, 'test10@gmail.com', 'test10@gmail.com', 'test10@gmail.com', '$2y$10$2PUeFEiqF0YZschKuHTYtuv12I1DpgqZEVFn.RVspZ8zmNQ7ovr3G', '2019-10-10 08:23:44', 2, 0),
(253, 'test11@gmail.com', 'test11@gmail.com', 'test11@gmail.com', '$2y$10$V5EHyaMWY.KXv/XVDZVa6.StrmYqcProqsYo/libdY5HIqlb08I7C', '2019-10-13 08:33:32', 2, 0),
(254, 'test12@gmail.com', 'test12@gmail.com', 'test12@gmail.com', '$2y$10$pI19JtvnFaFjmkXtyviuJu065.PdGHWkapiMgwgJx0iP9xqZ/72BK', '2019-10-13 08:33:35', 2, 0),
(255, 'Tùng', 'Thanh', 'test13@gmail.com', '$2y$10$jafqsrO.44YYeKSD4FPN5.jrDmvDx5KXCnISzKjob.CEI/3Lr/PeK', '2019-10-13 08:37:39', 2, 0),
(256, 'Tùng', 'Thanh', 'tung1203201@gmail.com', '$2y$10$stmTSy3SJd5NqHpiTnPT9.vSp2km9ZeoxTXVVH/bl18Cg3yx5M8y6', '2019-10-10 07:17:00', 1, 1),
(257, 'Tùng', 'Thanh', 'tung1203201q@gmail.com', '$2y$10$TDHwVvGM5t38Cs9XxgTqRevV3ckMbsADzq4FD/APVntN7kzj5UrRy', '2019-10-10 07:18:05', 1, 1),
(258, 'Tùng', 'Thanh', 'tung120320@gmail.com2', '$2y$10$9fcbrGAWL0RKDmHY9mAKeuH4TEUe0StDfVMCH19plLi6jV6YEgBnC', '2019-10-10 07:20:52', 1, 1),
(259, 'Tùng', 'Thanh', 'tung120320@gmail.com3', '$2y$10$CZBtvaBGag2rMzeTDBetd.B24H2Un2oX0egwsJWGW5OvJB.chymdW', '2019-10-10 07:22:11', 1, 1),
(260, 'Tùng', 'Thanh', 'tung120320@gmail.com4', '$2y$10$JoanC8RAwfJrpkCmS34/2uE/CZ0frK5BfBD9B8569va8nISqlNsYS', '2019-10-10 07:22:56', 1, 1),
(261, 'Tùng', 'Thanh', 'tung120320@gmail.com5', '$2y$10$vAQLtprW279SRgdrFMQiguD0JNYIqZT.Somi7Ze9OsazQ4Y0/1Ruu', '2019-10-10 07:25:24', 1, 1),
(262, 'Tùng', 'Thanh', 'tung120320@gmail.com6', '$2y$10$qehdgJhGBeO0j34vXq8pj.rp5y6dEuJb/HuMIccA0fhr4cMM8fGQK', '2019-10-10 07:26:40', 1, 1),
(263, 'Tùng', 'Thanh', 'tung120320@gmail.com7', '$2y$10$IpTOwAyNcU2sGipvmaXpEO.KLPzYeZQ/m9.ipFScqHSRC2I68mOKC', '2019-10-10 07:27:29', 1, 1),
(264, 'Tùng1', 'Thanh', 'tung120320@gmail.com8', '$2y$10$.EQNDEuetKgMRH.amjf.LeV.N53Gdfze4SQPYjwq7HxTn6MhUTTZy', '2019-10-13 08:38:27', 2, 0),
(265, 'Tùng', 'Thanh', 'tung120320@gmail.com1', '$2y$10$TWUrgRG3.nJoeUuM1Zjzuut6b6cjsi8d.US58i2VAcr8bgEJ.2hdm', '2019-10-13 08:38:52', 2, 0),
(266, 'Tùng2', 'Thanh2', 'tung120320@gmail.com12', '$2y$10$33A8N4VH2VhdKzZygVDkJuwIeRD5ZvYloFbrZNOJe.6GER.BZIxXG', '2019-10-13 08:38:06', 2, 0),
(267, 'Tùng', 'Thanh', 'tung12032012@gmail.com', '$2y$10$ce.m1krJDztFJ6.McNlT8.6Syvt5cDEErB82.8aIGdWWYmCXLDFm.', '2019-10-13 08:38:14', 2, 0),
(268, 'Tùng334', 'Thanh4', 'tung1203203@gmail.com', '$2y$10$HaMfpzY2e7xJBKfddV4hZeZdg0AhLbwuXSfKGw8kfAxOBbwUmTwti', '2019-10-13 08:49:09', 2, 1),
(269, 'Tùng5', 'Thanh5', 'tung1203205@gmail.com', '$2y$10$yG0gtjfrP5/sKo01Wl4EMOr19/7i9M8d/nZ9QgY7/SkmFsqwQqCVi', '2019-10-13 08:39:12', 2, 0),
(270, 'Tùng12', 'Thanh12', 'tung12032013@gmail.com', '$2y$10$XwMl7eI2iwNY6WkQOeNLxOoT991QDyc0pU/zEZuyOukA.G.3klPgy', '2019-10-13 08:20:58', 2, 0),
(271, 'Tùng123', 'Thanh123', 'tung120320123@gmail.com', '$2y$10$K6.gk3iub3QYC2kSpqwhjeJjBHomDey55Y2HLRm4QIdaZUffbHuXW', '2019-10-13 08:20:07', 2, 0),
(272, 'Tùng', 'Thanh', 'tung12032021@gmail.com', '$2y$10$HxFrj7BDlrOvvQo8/8omUOaW9yRFFwzagkcs8Fn5IYgNIkmc20IVK', '2019-10-13 08:49:35', 2, 1),
(273, 'Tùng111', 'Thanh', 'tung12032210@gmail.com', '$2y$10$o79Y9J60AYtVY2vuUVBkUO2SDMi5tPQTM5eqHJrgFb3zLWHcEbkUC', '2019-10-13 10:29:17', 0, 1),
(274, 'Tùng', 'Thanh', 'tung1203209999@gmail.com', '$2y$10$83jeroMj0cY/gHbjDW5OaeYsFt5XnfNsgFHp9JB3UtmfbitxPDthe', '2019-10-13 10:31:34', 2, 1),
(275, 'Tùng', 'Thanh', 'tung12032011111@gmail.com', '$2y$10$WTPZ7535YTHCTKfTezoB4.OPPBh7oSDPYz0I1.1NV3HZGogQ0u.e2', '2019-10-13 10:33:21', 2, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=656;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `userid` mediumint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=276;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

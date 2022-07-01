-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th6 25, 2022 lúc 02:54 AM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mvc_test`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `gender` tinyint(1) NOT NULL DEFAULT 0,
  `salary` int(11) NOT NULL DEFAULT 0,
  `birthday` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `employees`
--

INSERT INTO `employees` (`id`, `name`, `description`, `gender`, `salary`, `birthday`, `created_at`) VALUES
(67, 'Le Xuan Hoan', 'sfhsdfgsdfg', 0, 4523, '0432-02-04 00:00:00', '2022-06-24 16:57:05'),
(69, 'Le Xuan Hoan', 'ewtewrt', 1, 4323, '0043-03-31 00:00:00', '2022-06-24 16:58:37'),
(70, 'Le Xuan Hoan', 'ewtewrt', 1, 4300000, '0043-03-31 00:00:00', '2022-06-24 16:58:37'),
(71, 'svien2', 'ertwertewr', 0, 45345, '0032-05-23 00:00:00', '2022-06-24 17:01:34'),
(73, 'Le Xuan Hoan2', '234234', 1, 234234, '0234-04-23 00:00:00', '2022-06-24 17:03:44'),
(74, 'Le Xuan Hoan2', '234234', 1, 234234, '0234-04-23 00:00:00', '2022-06-24 17:03:44'),
(75, '324234wer', 'wrwerwer', 0, 235, '0234-04-02 00:00:00', '2022-06-24 17:11:04'),
(76, '324234wer', 'wrwerwer', 0, 23523, '2342-04-02 00:00:00', '2022-06-24 17:11:04'),
(77, 'sadfasdf', 'sadfsadf', 1, 234234, '0233-04-23 00:00:00', '2022-06-24 19:12:25'),
(78, 'sadfasdf', 'sadfsadf', 1, 234234, '0233-04-23 00:00:00', '2022-06-24 19:12:25'),
(79, 'Le Xuan Hoan', 'hoanledz', 0, 135345345, '9323-02-22 00:00:00', '2022-06-24 19:41:09'),
(81, 'Le Xuan Hoan', 'sdgsdfg', 0, 36345, '0345-05-31 00:00:00', '2022-06-24 19:44:15'),
(82, 'Le Xuan Hoan', 'sdgsdfg', 0, 36345, '0345-05-31 00:00:00', '2022-06-24 19:44:15'),
(83, 'sfasdf', '25234234we', 1, 23423423, '0234-04-23 00:00:00', '2022-06-24 19:46:39'),
(84, 'sfasdf', '25234234we', 1, 23423423, '0234-04-23 00:00:00', '2022-06-24 19:46:39');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

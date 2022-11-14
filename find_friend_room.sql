-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 08:05 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `find_friend_room`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(10) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `nick_name` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `line` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `trait` varchar(2000) NOT NULL,
  `r_name` varchar(100) NOT NULL,
  `r_address` varchar(255) NOT NULL,
  `r_no` varchar(10) NOT NULL,
  `r_floor` int(2) NOT NULL,
  `r_price` int(10) NOT NULL,
  `r_phone` varchar(15) NOT NULL,
  `f_bed_one` tinyint(1) NOT NULL DEFAULT 0,
  `f_bed_two` tinyint(1) NOT NULL DEFAULT 0,
  `f_wardrobe` tinyint(1) NOT NULL DEFAULT 0,
  `f_shelf` tinyint(1) NOT NULL DEFAULT 0,
  `f_table_one` tinyint(1) NOT NULL DEFAULT 0,
  `f_table_two` tinyint(1) NOT NULL DEFAULT 0,
  `f_fridge` tinyint(1) NOT NULL DEFAULT 0,
  `f_air` tinyint(1) NOT NULL DEFAULT 0,
  `f_heater` tinyint(1) NOT NULL DEFAULT 0,
  `f_television` tinyint(1) NOT NULL DEFAULT 0,
  `f_wifi` tinyint(1) NOT NULL DEFAULT 0,
  `f_lan` tinyint(1) NOT NULL DEFAULT 0,
  `f_is_elevator` tinyint(1) NOT NULL DEFAULT 0,
  `f_is_parking` tinyint(1) NOT NULL DEFAULT 0,
  `f_is_keycard` tinyint(1) NOT NULL DEFAULT 0,
  `f_is_kitchen` tinyint(1) NOT NULL DEFAULT 0,
  `f_is_pet` tinyint(1) NOT NULL DEFAULT 0,
  `detail` varchar(2000) NOT NULL,
  `img1` varchar(20) NOT NULL,
  `img2` varchar(20) NOT NULL,
  `img3` varchar(20) NOT NULL,
  `img4` varchar(20) NOT NULL,
  `user_id` int(10) NOT NULL,
  `date_time` varchar(50) NOT NULL DEFAULT current_timestamp(),
  `is_closed` tinyint(1) NOT NULL DEFAULT 0,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `full_name`, `nick_name`, `gender`, `age`, `line`, `phone`, `trait`, `r_name`, `r_address`, `r_no`, `r_floor`, `r_price`, `r_phone`, `f_bed_one`, `f_bed_two`, `f_wardrobe`, `f_shelf`, `f_table_one`, `f_table_two`, `f_fridge`, `f_air`, `f_heater`, `f_television`, `f_wifi`, `f_lan`, `f_is_elevator`, `f_is_parking`, `f_is_keycard`, `f_is_kitchen`, `f_is_pet`, `detail`, `img1`, `img2`, `img3`, `img4`, `user_id`, `date_time`, `is_closed`, `avatar`) VALUES
(14, 'อภินันท์ ชาติจันทึก', 'เฟรม', 'ชาย', 21, 'godframedark', '0979570661', 'ดี', 'H2 Chrome', 'รามอินทรา21', '2/25', 3, 9000, '0999999999', 1, 0, 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 0, '', 'qGayV3KBa8.webp', 'XutBr6uLZ4.jpg', '', '', 12, '2022-11-02 08:38:12', 0, 'fUMe3ZUdcj.jpg'),
(15, 'อภินันท์ ชาติจันทึก', 'เฟรม', 'ชาย', 21, 'godframedark', '0979570661', 'ดี', 'H2 Chrome', 'รามอินทรา21', '2/25', 3, 9000, '0999999999', 1, 0, 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 0, '', '0OSPTGgpyS.webp', 'rpWlkb9V6d.jpg', '', '', 12, '2022-11-02 08:38:30', 0, ''),
(16, 'Loga Thrim', 'GFD', 'ชาย', 20, 'godframedark', '0993755370', 'เฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆเฉยๆ', 'Tempo One', 'ซอยรามคำแหง12 แยก2 แขวงหัวหมาก เขตบางกะปิ กรุงเทพ 10240', '1/129', 8, 7500, '0987654321', 1, 0, 1, 1, 0, 0, 1, 1, 1, 1, 0, 0, 1, 1, 0, 1, 0, '', 'TmiHBH6FXR.png', 'cfblKzcOvW.jpg', 'TRRad6M091.webp', 'u0CKq7Eqw1.jpg', 12, '2022-11-09 09:33:00', 0, 'OnVelI8WTE.jpg'),
(18, 'The Frame', 'Frame', 'ชาย', 18, 'frameisx', '0964835271', 'good boy, sad man, aka some noi', 'หอปลายฟ้า', 'บ้านคลอง สี่แยกวุ่นวาย พิษณุโลก', '5/28', 2, 2000, '0875489431', 1, 0, 1, 0, 0, 0, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 1, 'ห้อง 20 ตารางเมตร', 's93w63aE1g.webp', 'CXdm1c5Wc9.jpg', 'MtJG2QwqIq.jpg', 'MrENlvlrqC.jpg', 12, '2022-11-09 13:58:23', 0, 'OnVelI8WTE.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `avatar`) VALUES
(12, 'Mind', 'gfd7812548965@gmail.com', '$2y$12$YvGMpwpxwnWiEoXGUlrPHOIfR4xw/OnAX7qS9G3dRPQhQSA2i/Mwq', 'OnVelI8WTE.jpg'),
(13, 'Aphinant Chatchanthuek', 'logathrim@gmail.com', '$2y$12$W8LASygZ9H6KVx3/odthDOVVzxDeoI5/vtq/nhpqxY8E9h0IGYm7O', ''),
(14, 'Aphinant Chatchanthuek', 'logathrim1@gmail.com', '$2y$12$.lK4FXYaTlNWqDTYHc3SYe.j.L65xHfApKs55Rp0AD6jebCcH4aYW', ''),
(15, 'Aphinant Chatchanthuek', 'logathrim2@gmail.com', '$2y$12$qFvWuwFK6RthQPUL4R2tN.5ISH5qOxoLBS4reuGflFpyFBvE0PKp6', ''),
(17, 'Aphinant Chatchanthuek', 'logathrim3@gmail.com', '$2y$12$eZrJIORGZAA3nT3u4OuG5O4YDoSKscZZ1GOBXIEG9WjJtvy.qQMkm', ''),
(18, 'Frame', 'logathrim4@gmail.com', '$2y$12$CCUfq.apG0wg0jEvrKIfLe1cIGjYSeNrHUcsO6J.28NVZAnm0u//O', ''),
(19, 'Aphinant Chatchanthuek', 'logathrim5@gmail.com', '$2y$12$AOvHus09RsuHNTx5B2/qReNh/8U4nvs.GD1SLSZ9NtIR98X/aKyWi', ''),
(20, 'Aphinant Chatchanthuek', 'logathrim6@gmail.com', '$2y$12$pFJHmRdHHJXLgM1hikRdrueBcCPE7SegtmKZugofd00puu3DbZAl6', ''),
(21, 'Aphinant Chatchanthuek', 'logathrim7@gmail.com', '$2y$12$8Dl3wqOIlxdckfzQN8mTWuJVingsDRuRvqtjqpnB4lU5I4js4YW3S', ''),
(22, 'Aphinant Chatchanthuek', 'logathrim8@gmail.com', '$2y$12$.0kAoWweG586orS8l4JZsuCfP4CDttUWS7Pa6jCc8iKo5qFbUrEW2', ''),
(23, 'Aphinant Chatchanthuek', 'logathrim9@gmail.com', '$2y$12$NfsQLNDHTXlIKXzAjQ2WVuFfKBzqkXLuY5FLp3C0Xh7U4rUsufUWm', ''),
(24, 'Aphinant Chatchanthuek', 'logathrim10@gmail.com', '$2y$12$cQzZ4V0kr1U0aScvOhBEsem.L46SpI2jYG3EOXFv2efw1jJSr9eNm', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

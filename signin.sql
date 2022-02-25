-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2022 at 03:59 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signin`
--

-- --------------------------------------------------------

--
-- Table structure for table `grading`
--

CREATE TABLE `grading` (
  `graded_img` int(255) NOT NULL,
  `grader_id` int(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `mo` varchar(255) NOT NULL,
  `dr` varchar(255) NOT NULL,
  `device_type` varchar(255) NOT NULL,
  `original_image_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grading`
--

INSERT INTO `grading` (`graded_img`, `grader_id`, `image_name`, `mo`, `dr`, `device_type`, `original_image_id`) VALUES
(350, 79, '9907_left.jpeg', 'M0', 'S2', 'F', 54),
(351, 79, '9788_right.jpeg', 'M1', 'S4', 'F', 56),
(352, 79, '9848_left.jpeg', 'M0', 'S0', 'F', 58),
(353, 79, '9947_right.jpeg', 'M0', 'S3', 'F', 60),
(354, 79, '9876_right.jpeg', 'M0', 'S2', 'F', 62),
(355, 79, '9797_left.jpeg', 'M0', 'S1', 'F', 64),
(356, 79, '9874_left.jpeg', 'M0', 'S3', 'F', 66),
(357, 79, '987_right.jpeg', 'M0', 'S3', 'F', 68),
(358, 79, '9831_right.jpeg', 'M1', 'S4', 'F', 70),
(359, 79, '9800_left.jpeg', 'M0', 'S2', 'F', 72),
(360, 79, '9832_right.jpeg', 'M0', 'S2', 'F', 74),
(361, 79, '9817_left.jpeg', 'M1', 'S2', 'F', 76),
(362, 79, '99_left.jpeg', 'M1', 'S3', 'F', 78),
(363, 79, '9971_left.jpeg', 'M0', 'S2', 'F', 80),
(364, 79, '9894_left.jpeg', 'M1', 'S3', 'F', 82),
(365, 82, '9907_left.jpeg', 'M1', 'S0', 'F', 54),
(366, 82, '9788_right.jpeg', 'M0', 'S2', 'F', 56),
(367, 82, '9848_left.jpeg', 'M1', 'S2', 'F', 58),
(368, 82, '9947_right.jpeg', '', 'S0', 'F', 60),
(369, 82, '9876_right.jpeg', 'M0', 'S1', 'F', 62),
(370, 82, '9797_left.jpeg', 'M1', 'S0', 'F', 64),
(371, 79, '9879_right.jpeg', 'M1', 'S2', 'F', 84),
(372, 79, '9799_right.jpeg', 'M0', 'S3', 'F', 86),
(373, 79, '9797_right.jpeg', 'M0', 'S3', 'F', 88),
(374, 79, '9884_right.jpeg', 'M0', 'S1', 'F', 90);

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `u_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `signIn_check` tinyint(1) DEFAULT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`u_id`, `name`, `email`, `Password`, `signIn_check`, `role`) VALUES
(79, 'shamama', 'shamamahaque61@gmail.com', 'shamama', 1, 'grader'),
(82, 'insiya', 'haurainsia4@gmail.com', 'insiya', 1, 'grader'),
(87, 'fdgsdfg', 'dr.reseh2021@gmail.com', 'fjhfyjhgy', 0, 'admin'),
(89, 'admin_mq', 'maarij.qamar@gmail.com', 'admin', 1, 'admin'),
(91, 'technician', 'technician@gmail.com', 'technician27', 1, 'technician'),
(92, 'abc', 'mqmaarij@gmail.com', 'testing', 1, 'grader');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `image_name` varchar(255) NOT NULL,
  `img_dir` varchar(255) NOT NULL,
  `image_create_time` varchar(255) NOT NULL,
  `image_id` int(255) NOT NULL,
  `mr_no` varchar(255) NOT NULL,
  `img_orientation` varchar(255) NOT NULL,
  `device_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`image_name`, `img_dir`, `image_create_time`, `image_id`, `mr_no`, `img_orientation`, `device_type`) VALUES
('9907_left.jpeg', './assets_main/uploads/9907_left.jpeg', '2022-02-14 11:03:51', 54, '', '', 'F'),
('9896_left.jpeg', './assets_main/uploads/9896_left.jpeg', '2022-02-14 11:03:51', 55, '', '', 'F'),
('9788_right.jpeg', './assets_main/uploads/9788_right.jpeg', '2022-02-14 11:03:51', 56, '', '', 'F'),
('994_left.jpeg', './assets_main/uploads/994_left.jpeg', '2022-02-14 11:03:51', 57, '', '', 'F'),
('9848_left.jpeg', './assets_main/uploads/9848_left.jpeg', '2022-02-14 11:03:51', 58, '', '', 'F'),
('9800_right.jpeg', './assets_main/uploads/9800_right.jpeg', '2022-02-14 11:03:51', 59, '', '', 'F'),
('9947_right.jpeg', './assets_main/uploads/9947_right.jpeg', '2022-02-14 11:03:51', 60, '', '', 'F'),
('9945_left.jpeg', './assets_main/uploads/9945_left.jpeg', '2022-02-14 11:03:51', 61, '', '', 'F'),
('9876_right.jpeg', './assets_main/uploads/9876_right.jpeg', '2022-02-14 11:03:51', 62, '', '', 'F'),
('9875_right.jpeg', './assets_main/uploads/9875_right.jpeg', '2022-02-14 11:03:51', 63, '', '', 'F'),
('9797_left.jpeg', './assets_main/uploads/9797_left.jpeg', '2022-02-14 11:03:51', 64, '', '', 'F'),
('9796_left.jpeg', './assets_main/uploads/9796_left.jpeg', '2022-02-14 11:03:51', 65, '', '', 'F'),
('9874_left.jpeg', './assets_main/uploads/9874_left.jpeg', '2022-02-14 11:03:51', 66, '', '', 'F'),
('9857_left.jpeg', './assets_main/uploads/9857_left.jpeg', '2022-02-14 11:03:51', 67, '', '', 'F'),
('987_right.jpeg', './assets_main/uploads/987_right.jpeg', '2022-02-17 07:58:07', 68, '', '', 'F'),
('9868_left.jpeg', './assets_main/uploads/9868_left.jpeg', '2022-02-17 07:58:07', 69, '', '', 'F'),
('9831_right.jpeg', './assets_main/uploads/9831_right.jpeg', '2022-02-17 07:58:07', 70, '', '', 'F'),
('9811_left.jpeg', './assets_main/uploads/9811_left.jpeg', '2022-02-17 07:58:07', 71, '', '', 'F'),
('9800_left.jpeg', './assets_main/uploads/9800_left.jpeg', '2022-02-17 07:58:07', 72, '', '', 'F'),
('997_right.jpeg', './assets_main/uploads/997_right.jpeg', '2022-02-17 07:58:07', 73, '', '', 'F'),
('9832_right.jpeg', './assets_main/uploads/9832_right.jpeg', '2022-02-17 07:58:07', 74, '', '', 'F'),
('9832_left.jpeg', './assets_main/uploads/9832_left.jpeg', '2022-02-17 07:58:07', 75, '', '', 'F'),
('9817_left.jpeg', './assets_main/uploads/9817_left.jpeg', '2022-02-17 07:58:07', 76, '', '', 'F'),
('9812_left.jpeg', './assets_main/uploads/9812_left.jpeg', '2022-02-17 07:58:07', 77, '', '', 'F'),
('99_left.jpeg', './assets_main/uploads/99_left.jpeg', '2022-02-17 07:58:07', 78, '', '', 'F'),
('997_left.jpeg', './assets_main/uploads/997_left.jpeg', '2022-02-17 07:58:07', 79, '', '', 'F'),
('9971_left.jpeg', './assets_main/uploads/9971_left.jpeg', '2022-02-17 07:58:07', 80, '', '', 'F'),
('9951_right.jpeg', './assets_main/uploads/9951_right.jpeg', '2022-02-17 07:58:07', 81, '', '', 'F'),
('9894_left.jpeg', './assets_main/uploads/9894_left.jpeg', '2022-02-17 07:58:07', 82, '', '', 'F'),
('9893_left.jpeg', './assets_main/uploads/9893_left.jpeg', '2022-02-17 07:58:07', 83, '', '', 'F'),
('9879_right.jpeg', './assets_main/uploads/9879_right.jpeg', '2022-02-17 07:58:07', 84, '', '', 'F'),
('9830_right.jpeg', './assets_main/uploads/9830_right.jpeg', '2022-02-17 07:58:07', 85, '', '', 'F'),
('9799_right.jpeg', './assets_main/uploads/9799_right.jpeg', '2022-02-17 07:58:07', 86, '', '', 'F'),
('9980_right.jpeg', './assets_main/uploads/9980_right.jpeg', '2022-02-17 07:58:07', 87, '', '', 'F'),
('9797_right.jpeg', './assets_main/uploads/9797_right.jpeg', '2022-02-17 08:05:07', 88, '', '', 'F'),
('9976_right.jpeg', './assets_main/uploads/9976_right.jpeg', '2022-02-17 08:05:07', 89, '', '', 'F'),
('9884_right.jpeg', './assets_main/uploads/9884_right.jpeg', '2022-02-17 08:05:07', 90, '', '', 'F'),
('9831_left.jpeg', './assets_main/uploads/9831_left.jpeg', '2022-02-17 08:05:07', 91, '', '', 'F'),
('9965_right.jpeg', './assets_main/uploads/9965_right.jpeg', '2022-02-17 08:05:07', 92, '', '', 'F'),
('9930_right.jpeg', './assets_main/uploads/9930_right.jpeg', '2022-02-17 08:05:07', 93, '', '', 'F'),
('9889_left.jpeg', './assets_main/uploads/9889_left.jpeg', '2022-02-17 08:05:07', 94, '', '', 'F'),
('985_left.jpeg', './assets_main/uploads/985_left.jpeg', '2022-02-17 08:05:07', 95, '', '', 'F'),
('9895_right.jpeg', './assets_main/uploads/9895_right.jpeg', '2022-02-17 08:05:07', 96, '', '', 'F'),
('9871_right.jpeg', './assets_main/uploads/9871_right.jpeg', '2022-02-17 08:05:07', 97, '', '', 'F'),
('9828_left.jpeg', './assets_main/uploads/9828_left.jpeg', '2022-02-17 08:05:07', 98, '', '', 'F'),
('9826_right.jpeg', './assets_main/uploads/9826_right.jpeg', '2022-02-17 08:05:07', 99, '', '', 'F'),
('9999_right.jpeg', './assets_main/uploads/9999_right.jpeg', '2022-02-17 08:05:07', 100, '', '', 'F'),
('9947_left.jpeg', './assets_main/uploads/9947_left.jpeg', '2022-02-17 08:05:07', 101, '', '', 'F'),
('9937_left.jpeg', './assets_main/uploads/9937_left.jpeg', '2022-02-17 08:05:07', 102, '', '', 'F'),
('9828_right.jpeg', './assets_main/uploads/9828_right.jpeg', '2022-02-17 08:05:07', 103, '', '', 'F'),
('9813_left.jpeg', './assets_main/uploads/9813_left.jpeg', '2022-02-17 08:05:07', 104, '', '', 'F'),
('MR01_right_P.jpeg', './assets_main/uploads/MR01_right_P.jpeg', '2022-02-25 03:56:57', 111, 'MR01', 'right', 'P'),
('MR01_right_F.jpeg', './assets_main/uploads/MR01_right_F.jpeg', '2022-02-25 03:57:28', 112, 'MR01', 'right', 'F');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grading`
--
ALTER TABLE `grading`
  ADD PRIMARY KEY (`graded_img`),
  ADD KEY `grader_id` (`grader_id`),
  ADD KEY `original_image_id` (`original_image_id`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`image_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grading`
--
ALTER TABLE `grading`
  MODIFY `graded_img` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=375;

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `image_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `grading`
--
ALTER TABLE `grading`
  ADD CONSTRAINT `grading_ibfk_1` FOREIGN KEY (`grader_id`) REFERENCES `signin` (`u_id`),
  ADD CONSTRAINT `grading_ibfk_2` FOREIGN KEY (`original_image_id`) REFERENCES `uploads` (`image_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

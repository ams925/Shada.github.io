-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2021 at 05:51 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shada`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_info`
--

CREATE TABLE `booking_info` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(20) NOT NULL,
  `child` int(10) NOT NULL,
  `adult` int(10) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_info`
--

INSERT INTO `booking_info` (`id`, `full_name`, `address`, `email`, `contact`, `child`, `adult`, `check_in`, `check_out`) VALUES
(1, 'Jake Paul', 'America', 'jake@f.com', 2147483647, 5, 2, '2021-08-25', '2022-03-17'),
(2, 'Asif Mahmud', 'd', '1001073@daffodil.ac', 1, 1, 1, '2021-10-25', '2021-10-04');

-- --------------------------------------------------------

--
-- Table structure for table `food_menu`
--

CREATE TABLE `food_menu` (
  `id` int(11) NOT NULL,
  `food_image` varchar(50) NOT NULL,
  `food_name` varchar(50) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_menu`
--

INSERT INTO `food_menu` (`id`, `food_image`, `food_name`, `price`) VALUES
(1, '../file_upload/food1.jpg', 'Family Platter', 499),
(2, '../file_upload/birani.jpg', 'Chicken Biriyani', 100),
(3, '../file_upload/borgir.jpg', 'Six Pack Burger', 199),
(4, '../file_upload/cooked-chicken.jpg', 'Cooked Chicken ', 99),
(5, '../file_upload/salad-bowl.jpg', 'Salad Bowl', 29),
(6, '../file_upload/coffe.jpg', 'Hot Coffee', 12),
(7, '../file_upload/egg-salad.jpg', 'Healthy Egg Salad', 39),
(8, '../file_upload/fried-egg.jpg', 'Fried Egg', 19),
(9, '../file_upload/pancakes.jpg', 'Butter Pancakes', 49),
(10, '../file_upload/meat-balls.jpg', 'Cheese Meat Ball', 59),
(11, '../file_upload/pasta.jpg', 'Pasta', 39);

-- --------------------------------------------------------

--
-- Table structure for table `room_manage`
--

CREATE TABLE `room_manage` (
  `id` int(11) NOT NULL,
  `room_image` varchar(200) NOT NULL,
  `room_name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_manage`
--

INSERT INTO `room_manage` (`id`, `room_image`, `room_name`, `description`, `price`) VALUES
(1, '../file_upload/room1.jpg', 'Deluxe Suite', 'A very good room', 169),
(2, '../file_upload/room6.jpg', 'Penthouse', 'A life of luxury', 699),
(3, '../file_upload/room4.jpg', 'Mini Suite', 'Have one bed perfect for spending the busy night.', 122),
(4, '../file_upload/room6.jpg', 'Twin Bed', 'Furnished with two separate bed perfecr for two person spending the night.', 170);

-- --------------------------------------------------------

--
-- Table structure for table `staff_info`
--

CREATE TABLE `staff_info` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `contact` int(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_info`
--

INSERT INTO `staff_info` (`id`, `full_name`, `contact`, `address`, `position`) VALUES
(4, 'Ryan Gomes', 59478531, 'Uganda', 'Toilet Cleaning'),
(5, 'Roni Shaheb', 2147483647, 'Oman', 'Baburchi'),
(6, 'Tonmoy Shaheb', 2147483647, 'City Hostel er CHIPA', 'Haradin Ghumno');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `full_name`, `username`, `password`, `role`) VALUES
(1, 'asif', 'test', '1', 0),
(2, 'admin', 'admin', '1', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_info`
--
ALTER TABLE `booking_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_menu`
--
ALTER TABLE `food_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_manage`
--
ALTER TABLE `room_manage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_info`
--
ALTER TABLE `staff_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_info`
--
ALTER TABLE `booking_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `food_menu`
--
ALTER TABLE `food_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `room_manage`
--
ALTER TABLE `room_manage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staff_info`
--
ALTER TABLE `staff_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

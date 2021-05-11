-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2021 at 05:20 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interview`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_new`
--

CREATE TABLE `user_new` (
  `userId` int(11) UNSIGNED NOT NULL,
  `first_name` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `middle_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `last_name` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `phone` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `profile_image_path` text DEFAULT NULL,
  `deleted` int(10) DEFAULT 0,
  `role` varchar(45) DEFAULT NULL,
  `added_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_new`
--

INSERT INTO `user_new` (`userId`, `first_name`, `middle_name`, `email`, `last_name`, `phone`, `password`, `profile_image_path`, `deleted`, `role`, `added_date`) VALUES
(1, 'hemendra', 'babu', 'h@gmail.com', NULL, NULL, 'e10adc3949ba59abbe56e057f20f883e', NULL, 0, 'Admin', '2021-05-11 20:06:12'),
(2, 'ramraj', '', 'ram@gmail.com', 'chaudhary', '9696985698', 'e10adc3949ba59abbe56e057f20f883e', 'WhatsApp_Image_2021-05-07_at_09_22_44.jpeg', 1, 'User', '2021-05-11 20:07:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_new`
--
ALTER TABLE `user_new`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_new`
--
ALTER TABLE `user_new`
  MODIFY `userId` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

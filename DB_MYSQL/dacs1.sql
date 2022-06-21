-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2022 at 12:38 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dacs1`
--

-- --------------------------------------------------------

--
-- Table structure for table `discover_tour`
--

CREATE TABLE `discover_tour` (
  `id_discover_tour` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `peonum` int(11) NOT NULL,
  `tournum` int(11) NOT NULL,
  `sleep` varchar(255) NOT NULL,
  `difficulty` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discover_tour`
--

INSERT INTO `discover_tour` (`id_discover_tour`, `name`, `img`, `time`, `peonum`, `tournum`, `sleep`, `difficulty`, `price`) VALUES
(1, 'The Sea Explorer', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRpOVqDbnPTm8T1xy1kJjWC_PYftmc6ckbC6Q&usqp=CAU', 3, 30, 3, 'Sleep in cozy hotels', 'easy', 999),
(2, 'The Forest Hiker', 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0c/35/95/ae/mountain-village-telluride.jpg?w=700&h=-1&s=1', 7, 40, 6, 'Sleep in provided tents', 'medium', 6500),
(3, 'VKU Tour', 'https://vku.udn.vn/uploads/no-image.png', 1, 100, 1, 'No overnight', 'easy', 100),
(4, 'Relaxing beach', 'https://pix10.agoda.net/hotelImages/301716/-1/fe9724d8fb4da3dd4590353bd771a276.jpg?ca=9&ce=1&s=1024x768', 7, 10, 200, 'Sleep in 5-star luxury hotel', 'Easy', 99999),
(5, 'High Snow Mountain', 'https://www.tourtrungquoc.net.vn/images/diadiem/nhung-ngon-nui-tuyet-2.jpg', 14, 15, 5, 'For adventurous people', 'hard', 50000),
(6, 'HA LONG BAY', 'https://images.baodantoc.vn/uploads/2021/Th%C3%A1ng%206/Ngay%2020/vinh-16240967369661608835259.jpg', 7, 2, 2, 'Special tour for couples', 'easy', 18000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `discover_tour`
--
ALTER TABLE `discover_tour`
  ADD PRIMARY KEY (`id_discover_tour`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `discover_tour`
--
ALTER TABLE `discover_tour`
  MODIFY `id_discover_tour` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

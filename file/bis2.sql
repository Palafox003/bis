-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2017 at 09:47 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bis2`
--

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` double NOT NULL,
  `size` int(11) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`id`, `name`, `cost`, `size`, `img`) VALUES
(5, '', 3112, 3, 'Scarlet_Spider_Vol_2_1_Bagley_Variant_Textless.jpg'),
(6, '', 11, 2, 'Combined_Baby_Variants_from_Superior_Spider-Man_Vol_1_33_&_Amazing_Spider-Man_Vol_3_9.jpeg'),
(7, '', 112, 2, '1cf73c028b2338b64805ac7cb852dd1d.jpg'),
(8, '', 112, 2, '1cf73c028b2338b64805ac7cb852dd1d.jpg'),
(9, '', 112, 2, '1cf73c028b2338b64805ac7cb852dd1d.jpg'),
(10, 'jhg', 4476, 1, '1cf73c028b2338b64805ac7cb852dd1d.jpg'),
(11, 'jas', 122, 3, 'superior-spider-man-14.jpg'),
(12, 'jas', 122, 3, 'ht23FOe.jpg'),
(13, 'Spid', 32, 1, 'FB_IMG_14830569173322007.jpg'),
(14, 'Spid', 32, 1, 'FB_IMG_14830569173322007.jpg'),
(15, 'asd', 12, 1, 'WhatsApp Image 2017-11-12 at 6.30.41 PM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Name`, `Mail`, `Phone`) VALUES
(1, 'Garza', 'Garza.com', '61231'),
(2, 'Cuate', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

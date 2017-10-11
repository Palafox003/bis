-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2017 at 10:03 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pc_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `name`, `lastname`, `age`, `sex`, `img`) VALUES
(1, 'Jose Alfredo', 'Santes Benitez', 18, '1', '13641215_498929006967298_7247031750632014567_o.jpg'),
(2, 'Carlos Arturo', 'Nieves Mota', 18, '1', 'ugcuserfile-a48f208e-392f-45c3-992a-0c84dfcd74b6-19ef7add0dcba5e0-full.jpg'),
(3, 'Diego', 'Santiago', 18, '1', 'ugcuserfile-bf82ef29-4547-4999-81d3-6fca538aa4ec-564cf8620b1a1acf-full.jpg'),
(4, 'Karla', 'Carrera', 19, '2', 'ugcuserfile-ec3ae6e4-9f14-455e-ab2c-65ee8d89374b-b13652e2941de963-full.jpg'),
(5, 'Karla', 'Carrera', 19, '2', 'ugcuserfile-ec3ae6e4-9f14-455e-ab2c-65ee8d89374b-b13652e2941de963-full.jpg'),
(6, 'Karla', 'Carrera', 19, '2', 'ugcuserfile-ec3ae6e4-9f14-455e-ab2c-65ee8d89374b-b13652e2941de963-full.jpg'),
(7, 'Prueba', 'Prueba', 1, 'Male', 'ugcuserfile-a48f208e-392f-45c3-992a-0c84dfcd74b6-19ef7add0dcba5e0-full.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

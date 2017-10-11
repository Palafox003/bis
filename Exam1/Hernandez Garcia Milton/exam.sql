-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2017 at 09:58 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `characteristics`
--

CREATE TABLE `characteristics` (
  `id` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `KeyProduct` varchar(255) NOT NULL,
  `Model` varchar(255) NOT NULL,
  `Manufacturer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `characteristics`
--

INSERT INTO `characteristics` (`id`, `Name`, `KeyProduct`, `Model`, `Manufacturer`) VALUES
('12', '121', '12', '12', '12'),
('12', '121', '12', '12', '12'),
('12', '121', '12', '12', '12'),
('12', '121', '12', '12', '12'),
('12', '121', '12', '12', '12'),
('12', '121', '12', '12', '12'),
('12', '121', '12', '12', '12'),
('12', '121', '12', '12', '12'),
('1234', '1234', '1234', '1234', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `info1`
--

CREATE TABLE `info1` (
  `Name` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info1`
--

INSERT INTO `info1` (`Name`, `LastName`) VALUES
('121212', '121212'),
('Milton', 'Hernandez'),
('', ''),
('12', '12'),
('', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-10-2017 a las 20:53:03
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id_products` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id_products`, `price`, `description`) VALUES
(1, '15', 'book'),
(2, '10', 'pen'),
(3, '10', 'pencil'),
(4, '75', 'calculators'),
(5, '20', 'colors'),
(6, '10', 'markers'),
(7, '26', 'notebooks'),
(8, '20', 'crayons'),
(9, '27', 'painting supplies'),
(10, '19', 'art glues'),
(11, '30', 'folders'),
(12, '20', 'permanent markers'),
(13, '20', 'shredders'),
(14, '18', 'diaries'),
(15, '70', 'note counting machines'),
(16, '24', 'paintng supplies'),
(17, '50', 'refills'),
(18, '19', 'sketching'),
(19, '10', 'adhesives'),
(20, '30', 'albums'),
(21, '10', 'gel pen'),
(22, '4', 'paper clip'),
(23, '19', 'towel'),
(24, '20', 'plastic stick'),
(25, '10', 'pencil'),
(26, '20', 'labels'),
(27, '10', 'binders'),
(28, '29', 'stapler'),
(29, '25', 'geometric game'),
(30, '10', 'compass'),
(31, '19', 'draft'),
(32, '6', 'pencil sharpener'),
(33, '21', 'scissors'),
(34, '5', 'staples'),
(35, '17', 'painting'),
(36, '2', 'colors sheets'),
(37, '5', 'cartilins'),
(38, '5', 'paper shell'),
(39, '15', 'corrector'),
(40, '4', 'silicon'),
(41, '40', 'silicon gun'),
(42, '12', 'chinese paper'),
(43, '1.50', 'copies'),
(44, '29', 'drawing notebook'),
(45, '16', 'letter envelopes'),
(46, '16', 'pinter catridges'),
(47, '30', 'kraft paper'),
(48, '20', 'children educational books'),
(49, '10', 'erasers'),
(50, '29', 'clip board'),
(51, '30', 'pencil box'),
(52, '25', 'pencil case'),
(53, '8', 'glue'),
(54, '45', 'carpet'),
(55, '9', 'separators'),
(56, '15', 'CDs'),
(57, '160', 'memories'),
(58, '26', 'CD/DVD'),
(59, '30', 'scale (plastic, wooden and steel)'),
(60, '10', 'carbon paper'),
(61, '50', 'rent receipt book'),
(62, '19', 'receipt book'),
(63, '30', 'clip board'),
(64, '27', 'grid sheets');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `Name` varchar(255) NOT NULL,
  `Last` varchar(255) NOT NULL,
  `Pass1` varchar(255) NOT NULL,
  `Pass2` varchar(255) NOT NULL,
  `Mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`Name`, `Last`, `Pass1`, `Pass2`, `Mail`) VALUES
('John', 'Dohe', '12345', '12345', '1234@gmail.com'),
('John', 'Dohe', '12345', '12345', '1234@gmail.com'),
('John', 'Dohe', '12345', '12345', '1234@gmail.com'),
('John', 'Dohe', '12345', '12345', '1234@gmail.com'),
('John', 'Dohe', '12345', '12345', '1234@gmail.com'),
('John', 'Dohe', '12345', '12345', '1234@gmail.com'),
('John', 'Dohe', '12345', '12345', '1234@gmail.com'),
('John', 'Dohe', '12345', '12345', '1234@gmail.com'),
('John', 'Dohe', '12345', '12345', '1234@gmail.com'),
('John', 'Dohe', '12345', '12345', '1234@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_products`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id_products` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

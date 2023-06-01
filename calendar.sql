-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-08-2017 a las 06:22:51
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


-- !40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT;
-- !40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS;
-- !40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION;
-- !40101 SET NAMES utf8mb4;

--
-- Base de datos: `calendar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `events`
--
USE calendar;

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(9) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `color` varchar(7) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Seleccionar tabla
--
SELECT * FROM events;

--
-- Volcado de datos para la tabla `events`
--

INSERT INTO `events` (`id`, `title`, `name`, `email`, `phone`, `company`, `color`, `start`, `end`) VALUES
(1, 'Evento Azul', 'Ana Pérez', 'ana.perez@tucasa.com', 654321098,'Tu Casa SL', '#0071c5', '2017-08-01 00:00:00', '2017-08-02 00:00:00'),
(2, 'Eventos 2', 'Banana Boy', 'banana.b@gmail.com', 123456789, 'Bananas', '#40E0D0', '2017-08-02 00:00:00', '2017-08-03 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT; -- AUTO_INCREMENT=4;
-- !40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT;
-- !40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS;
-- !40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION;

-- ALTER TABLE `events`
-- ADD `name` varchar(255),
-- ADD `company` varchar(255),
-- ADD `email` varchar(255),
-- ADD `phone` int(9);
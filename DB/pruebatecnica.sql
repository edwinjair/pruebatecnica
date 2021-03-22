-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-03-2021 a las 00:11:38
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebatecnica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombres` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_paterno` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_materno` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_documento` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `numero_documento` int(11) NOT NULL,
  `nacionalidad` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `contraseña` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombres`, `apellido_paterno`, `apellido_materno`, `tipo_documento`, `numero_documento`, `nacionalidad`, `contraseña`, `fecha_registro`) VALUES
(3, 'Edwin', 'Lazaro', 'Sanchez', 'Carné Ext.', 98761258, 'Chile', '1234', '2021-03-22'),
(6, 'Milagros', 'Coronado', 'Gomez', 'DNI', 85296354, 'Perú', '4567', '2021-03-22');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

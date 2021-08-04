-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-08-2021 a las 07:54:55
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `myfirstapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL,
  `usuario_email` varchar(80) NOT NULL,
  `usuario_pass` varchar(250) NOT NULL,
  `usuario_nombre1` varchar(60) NOT NULL,
  `usuario_nombre2` varchar(60) DEFAULT NULL,
  `usuario_apellido1` varchar(60) NOT NULL,
  `usuario_apellido2` varchar(60) DEFAULT NULL,
  `usuario_rol` varchar(50) NOT NULL,
  `usuario_estado` int(11) NOT NULL,
  `usuario_fcreacion` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `usuario_email`, `usuario_pass`, `usuario_nombre1`, `usuario_nombre2`, `usuario_apellido1`, `usuario_apellido2`, `usuario_rol`, `usuario_estado`, `usuario_fcreacion`) VALUES
(1, 'daniel.bolivar.freelance@gmail.com', 'eyJpdiI6IkgyQnpwK0FtT3B1TXhBeE9jVUZkdGc9PSIsInZhbHVlIjoiNExsdUJkTXNXa3dYRXY5cmdLREpMUT09IiwibWFjIjoiZGI0MzI1ZGEyY2ZjNzc1YjZjYzVhNDZiNzNjNGMyMTAxMGFjNDA3ZDI5ZGY5MWZjNGM2MTVkY2NkOGNlNjg3OCJ9', 'Daniel', NULL, 'Bolivar', NULL, 'Administrador', 1, '2021-08-03 19:30:34');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

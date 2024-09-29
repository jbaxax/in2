-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 29-09-2024 a las 03:56:59
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemadeventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_user` text NOT NULL,
  `token` varchar(100) NOT NULL,
  `fyh_creacion` datetime NOT NULL,
  `fyh_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_usuario`, `nombres`, `email`, `password_user`, `token`, `fyh_creacion`, `fyh_actualizacion`) VALUES
(7, 'Roma', 'roma123@gmail.com', '$2y$10$fdT9uBkhn0RUnQvcrAmyzecpX.rGrDUThHVMVtQDTkfOlF.Q0k3TW', '', '2024-09-24 09:01:02', '0000-00-00 00:00:00'),
(8, 'roman', 'roman123@gmail.com', '$2y$10$b51A3ovXCCbjtf7x/nglMO9EA.zh3nV7USeEc4tpCnEALUdkr85Zq', '', '2024-09-24 09:02:31', '0000-00-00 00:00:00'),
(9, 'Walter', 'walterjave123@gmail.com', '$2y$10$9yyEBYSCGBoiaNFRkaIipO3wctbR67WattCHnn78SKk8xAVk9SFz.', '', '2024-09-24 09:25:36', '0000-00-00 00:00:00'),
(10, 'Lolito', 'lolito123@gmail.com', '$2y$10$Skf3jr5zszmobCU3SQweYOhm/LYYM26DoE2Eby6YzyxIQ6IAtt4lm', '', '2024-09-24 09:51:22', '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

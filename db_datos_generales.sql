-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-06-2022 a las 02:10:42
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_datos_generales`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_datos`
--

CREATE TABLE `t_datos` (
  `Id_persona` bigint(20) UNSIGNED NOT NULL,
  `Clave` varchar(8) NOT NULL,
  `Descripcion` varchar(200) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Precio` int(11) NOT NULL,
  `Total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_datos`
--

INSERT INTO `t_datos` (`Id_persona`, `Clave`, `Descripcion`, `Cantidad`, `Precio`, `Total`) VALUES
(3, '12345678', 'el producto es una cámara 4k', 3, 2, 6),
(6, '34567899', 'el producto es una cámara 4k', 6, 2, 12);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_datos`
--
ALTER TABLE `t_datos`
  ADD PRIMARY KEY (`Clave`),
  ADD UNIQUE KEY `Id_persona` (`Id_persona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_datos`
--
ALTER TABLE `t_datos`
  MODIFY `Id_persona` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

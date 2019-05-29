-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2019 a las 23:05:08
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `trigames`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `apellido_paterno` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `apellido_materno` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `correo` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contraseña_cuenta` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nacionalidad` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nivel_usuario` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombre`, `apellido_paterno`, `apellido_materno`, `fecha_nacimiento`, `correo`, `contraseña_cuenta`, `nacionalidad`, `nivel_usuario`) VALUES
(1, 'Luis', 'Leon', 'Vargas', '1997-03-31', 'mariobros1068@hotmail.com', '12356', 'Mexicano', b'0'),
(2, 'Luis Adrian', 'Santander', 'Ibarra', '1997-10-09', 'uchihsantander@gmail.com', 'SpiderToby117', 'Mexicano', b'0'),
(3, 'Jorge Alberto', 'Lucio', 'Santes', '1997-04-23', 'albertosantes21@hotail.com', 'Alberto.23', 'Mexicano', b'0'),
(4, 'Carlos Alonso', 'Manzano', 'Perez', '1996-11-10', '', 'charly123', ' Mexicano', b'0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videojuego`
--

CREATE TABLE `videojuego` (
  `nombreVideojuego` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `genero` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `fechaLanzamiento` date NOT NULL,
  `clasificacion` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `precio` bigint(255) NOT NULL,
  `opiniones` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `videojuego`
--

INSERT INTO `videojuego` (`nombreVideojuego`, `genero`, `fechaLanzamiento`, `clasificacion`, `precio`, `opiniones`) VALUES
('Alice Madness Return', 'Platform', '2011-06-14', 'ESRB', 150, ''),
('GearsofWar', 'TPS', '2016-10-16', 'ESRB', 1299, ''),
('GTA V', 'Open World', '2013-09-17', 'ESRB', 599, ''),
('HALO', 'FPS', '2001-11-15', 'ESRB', 299, ''),
('Kinect Adventures', 'Kinect', '2010-11-10', 'PEGI 3', 245, ''),
('Minecraft', 'SandBox', '2011-11-18', 'PEGI 7', 1299, ''),
('OUTLAST', 'Survival Horror', '2013-09-04', 'ESRB', 249, ''),
('Planet Coaster', 'Strategy Simulator', '2016-11-17', 'ESRB', 675, ''),
('Pokemon OmegaRubi', 'RPG', '2014-11-21', 'PEGI 3', 1099, ''),
('Portal 2', 'Accion Puzzle', '2011-04-19', 'PEGI 12', 299, ''),
('Viva Piñata', 'Simulator', '2006-12-11', 'PEGI 3', 100, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD KEY `nacionalidad` (`nacionalidad`) USING BTREE,
  ADD KEY `nivel_usuario` (`nivel_usuario`) USING BTREE,
  ADD KEY `nombre` (`nombre`) USING BTREE,
  ADD KEY `apellido_paterno` (`apellido_paterno`) USING BTREE,
  ADD KEY `apellido_materno` (`apellido_materno`) USING BTREE,
  ADD KEY `fecha_nacimiento` (`fecha_nacimiento`) USING BTREE,
  ADD KEY `contraseña_cuenta` (`contraseña_cuenta`) USING BTREE;

--
-- Indices de la tabla `videojuego`
--
ALTER TABLE `videojuego`
  ADD PRIMARY KEY (`nombreVideojuego`),
  ADD KEY `genero` (`genero`) USING BTREE,
  ADD KEY `lanzamiento` (`fechaLanzamiento`) USING BTREE,
  ADD KEY `precio` (`precio`) USING BTREE,
  ADD KEY `clasificacion` (`clasificacion`) USING BTREE,
  ADD KEY `opiniones` (`opiniones`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

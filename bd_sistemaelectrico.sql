-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2024 a las 07:15:44
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
-- Base de datos: `bd_sistemaelectrico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alimentadores`
--

CREATE TABLE `alimentadores` (
  `id_alimentador` int(11) NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `zona` varchar(150) NOT NULL,
  `id_subestacion` int(11) NOT NULL,
  `estado_alimentador` char(2) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `nivel_tension` char(10) NOT NULL,
  `fecha_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alimentadores`
--

INSERT INTO `alimentadores` (`id_alimentador`, `codigo`, `marca`, `zona`, `id_subestacion`, `estado_alimentador`, `id_usuario`, `fecha_registro`, `nivel_tension`, `fecha_actualizacion`) VALUES
(2, 'Alim 1524', 'Simens', 'energiza zona industrial', 25, 'ac', 1, '2024-11-21 08:45:59', '22.9KV', '2024-11-24 23:15:50'),
(3, 'Alim 1523', 'Simens', 'energiza proanco ', 22, 'ac', 1, '2024-11-21 08:51:16', '10 KV', '2024-11-24 19:41:12'),
(4, 'AMT1520', 'Simens', 'energiza chalacala', 13, 'ac', 2, '2024-11-21 17:21:15', '22.9KV', '2024-12-09 12:28:53'),
(5, 'AMT 1511', 'Simens', 'energiza la poechos', 13, 'ac', 2, '2024-11-21 20:29:17', '10 KV', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `interrupcion`
--

CREATE TABLE `interrupcion` (
  `id_interrupcion` int(11) NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fin` time NOT NULL,
  `duracion` time NOT NULL,
  `proteccion` varchar(50) NOT NULL,
  `causa` varchar(50) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `estado_interrupcion` char(2) NOT NULL,
  `id_alimentador` int(11) NOT NULL,
  `potencia_interrumpida` float NOT NULL,
  `zona_afectada` varchar(100) NOT NULL,
  `id_supervisorcco` int(11) NOT NULL,
  `id_supervisorset` int(11) NOT NULL,
  `fecha_registro` date NOT NULL,
  `fecha_actualizacion` datetime NOT NULL,
  `nro_interrupcion` int(11) NOT NULL,
  `mantenimiento` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `interrupcion`
--

INSERT INTO `interrupcion` (`id_interrupcion`, `hora_inicio`, `hora_fin`, `duracion`, `proteccion`, `causa`, `descripcion`, `id_usuario`, `estado_interrupcion`, `id_alimentador`, `potencia_interrumpida`, `zona_afectada`, `id_supervisorcco`, `id_supervisorset`, `fecha_registro`, `fecha_actualizacion`, `nro_interrupcion`, `mantenimiento`) VALUES
(17, '10:15:40', '10:19:50', '00:04:10', '50/51P', 'fuertes vientos por la zona', 'se aperturo secc fruticola', 2, 'ac', 3, 5.2, 'querecotillo', 3, 4, '2024-12-04', '0000-00-00 00:00:00', 3, 0),
(18, '15:20:25', '15:25:12', '00:04:47', '50/51N', 'incendio ', 'Se aperturo SED 152412', 2, 'ac', 2, 5.56, 'salitral', 1, 4, '2024-12-04', '0000-00-00 00:00:00', 4, 0),
(19, '14:25:00', '14:29:30', '00:04:30', '50/51P', 'caida de líneas sobre arbol', 'se eperturo seccioamiento brasil', 2, 'in', 4, 4.5, 'Mallares', 3, 3, '2024-12-06', '0000-00-00 00:00:00', 5, 1),
(20, '10:17:20', '10:35:00', '13:42:40', '50/51P', 'camion choca estructura', 'se aperturo seccionamiento buenos aires', 2, 'in', 2, 5.6, 'salitral', 2, 4, '2024-12-09', '0000-00-00 00:00:00', 6, 1),
(22, '15:40:45', '15:42:40', '00:01:55', '50/51P', 'fuertes vientos por la zona', 'desconectar sed 1504260', 2, 'ac', 3, 5.6, 'chalacala', 4, 2, '2024-12-09', '0000-00-00 00:00:00', 7, 0),
(23, '15:20:25', '15:25:12', '00:04:47', '50/51P', 'caida de línea ', 'realizar poda', 2, 'in', 3, 5.4, 'querecotillo', 3, 3, '2024-11-01', '0000-00-00 00:00:00', 6, 1),
(24, '10:16:14', '10:20:25', '00:04:11', '50/51N', 'arbol choca con la linea de mt', 'Apertura de seccionamiento Buenos Aires', 2, 'in', 2, 7.6, 'Mallares', 3, 2, '2024-11-14', '0000-00-00 00:00:00', 7, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimiento`
--

CREATE TABLE `mantenimiento` (
  `id_mantenimiento` int(11) NOT NULL,
  `codigo_man` char(20) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `responsable` varchar(30) NOT NULL,
  `tipo_mantenimiento` varchar(30) NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fin` time NOT NULL,
  `estado_mantenimiento` char(10) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_alimentador` int(11) NOT NULL,
  `id_supervisorcco` int(11) NOT NULL,
  `fecha_registro` date NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `fecha_actualizacion` datetime NOT NULL,
  `duracion` time NOT NULL,
  `id_interrupcion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mantenimiento`
--

INSERT INTO `mantenimiento` (`id_mantenimiento`, `codigo_man`, `descripcion`, `responsable`, `tipo_mantenimiento`, `hora_inicio`, `hora_fin`, `estado_mantenimiento`, `id_usuario`, `id_alimentador`, `id_supervisorcco`, `fecha_registro`, `fecha_creacion`, `fecha_actualizacion`, `duracion`, `id_interrupcion`) VALUES
(12, '2024-12-06-05', 'mant programado', 'Enosa ', 'preventivo', '15:20:25', '17:16:00', 'ac', 2, 4, 3, '2024-12-06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '01:55:35', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametro`
--

CREATE TABLE `parametro` (
  `id_parametro` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL,
  `tipo` char(10) NOT NULL,
  `estado_parametro` char(2) NOT NULL,
  `fecha_registro` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fecha_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `parametro`
--

INSERT INTO `parametro` (`id_parametro`, `descripcion`, `tipo`, `estado_parametro`, `fecha_registro`, `fecha_actualizacion`) VALUES
(1, 'supervisor', 'nivel', 'ac', '0000-00-00 00:00:00', '2024-11-15 19:25:55'),
(2, 'operador', 'nivel', 'ac', '0000-00-00 00:00:00', '2024-11-15 19:25:55'),
(3, 'masculino', 'genero', 'ac', '2024-11-15 13:39:44', '2024-11-15 19:38:55'),
(4, 'femenino', 'genero', 'ac', '2024-11-15 13:39:44', '2024-11-15 19:38:55'),
(5, 'diurno', 'turno', 'ac', '2024-11-15 13:54:09', '2024-11-15 19:53:19'),
(6, 'nocturno', 'turno', 'ac', '2024-11-15 13:54:09', '2024-11-15 19:53:19'),
(7, 'Contador', 'nivel', 'ac', '2024-11-15 21:03:51', '2024-11-15 21:03:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subestacion`
--

CREATE TABLE `subestacion` (
  `id_subestacion` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `ubicacion` varchar(100) NOT NULL,
  `estado_subestacion` char(2) NOT NULL,
  `potencia` char(10) NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `fecha_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `subestacion`
--

INSERT INTO `subestacion` (`id_subestacion`, `nombre`, `ubicacion`, `estado_subestacion`, `potencia`, `fecha_registro`, `fecha_actualizacion`) VALUES
(13, 'Set Poechos', '-4.593242886148324, -80.48482501674987', 'ac', '35 Mva', '2024-11-20 01:49:57', '2024-12-03 12:44:58'),
(22, 'Set Corrales', '-3.60280628791463, -80.48032738250029', 'ac', ' 35 mva', '2024-11-20 11:54:59', '2024-12-03 12:54:24'),
(25, 'Set Chulucanas', '-5.092607017825245, -80.15908139979324', 'ac', '45 Mva', '2024-11-20 12:20:09', '2024-12-03 12:55:10'),
(32, 'Set Constante', '-5.675834352273968, -80.84616901767258', 'ac', '35 Mva', '2024-11-20 04:35:21', '2024-12-03 12:55:48'),
(33, 'Set La Union', '-5.402689625049366, -80.74235930119082', 'ac', '35 Mva', '2024-12-03 12:47:32', '2024-12-03 11:33:59'),
(34, 'Set Castilla', '-5.193797393000617, -80.61570251106373', 'ac', '30 Mw', '2024-12-03 10:32:14', '2024-12-03 11:22:47'),
(36, 'Set Sechura', '-5.560236893438041, -80.81935029296875', 'ac', '35 mva', '2024-12-03 10:40:40', '2024-12-03 12:56:50'),
(37, 'Set Sullana', '-4.91890191425368, -80.69683710959512', 'ac', '50 Mva', '2024-12-03 11:00:18', '2024-12-03 12:57:50'),
(38, 'Set Paita', '-5.0936090160706655, -81.09642250077466', 'ac', '45 Mva', '2024-12-03 11:26:21', '2024-12-03 11:27:49'),
(39, 'Set Mancora', '-4.1030011545303875, -81.052809765625', 'ac', '30 Mva', '2024-12-03 11:36:38', '2024-12-03 11:38:39'),
(40, 'Las Lomas', '-4.654677944463001, -80.23937092906958', 'ac', '35 Mva', '2024-12-03 11:41:41', '0000-00-00 00:00:00'),
(41, 'Set Morropon', '-5.186809679380931, -79.97369982484173', 'ac', '35 Mva', '2024-12-03 11:43:25', '2024-12-03 11:45:37'),
(42, 'Set Tumbes', '-3.553877030547505, -80.42384248046875', 'ac', '35 Mva', '2024-12-03 11:46:44', '2024-12-03 11:49:45'),
(43, 'Set Coscomba', '-5.173570289184762, -80.70177662771417', 'ac', '35 Mva', '2024-12-03 11:56:48', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supervisorcco`
--

CREATE TABLE `supervisorcco` (
  `id_supervisorcco` int(11) NOT NULL,
  `nombre_suc` varchar(50) NOT NULL,
  `apellidos_suc` varchar(70) NOT NULL,
  `empresa_suc` varchar(40) NOT NULL,
  `email_suc` varchar(50) NOT NULL,
  `celular_suc` char(10) NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `fecha_actualizacion` datetime NOT NULL,
  `estado_supervisorcco` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `supervisorcco`
--

INSERT INTO `supervisorcco` (`id_supervisorcco`, `nombre_suc`, `apellidos_suc`, `empresa_suc`, `email_suc`, `celular_suc`, `fecha_registro`, `fecha_actualizacion`, `estado_supervisorcco`) VALUES
(1, 'William', 'Castillo Ruiz', 'Enosa', 'willy@gmail.com', '958466755', '2024-11-21 17:35:42', '2024-11-21 17:35:42', 'ac'),
(2, 'Jhon', 'Jimenez', 'Enosa', 'jhon@gmail.com', '958456714', '2024-11-26 10:05:56', '2024-11-27 01:06:16', 'ac'),
(3, 'Jorge ', 'Luna Jimenez', 'Enosa', 'jorge@gmail.com', '958456714', '2024-11-27 07:50:36', '0000-00-00 00:00:00', 'ac'),
(4, 'Jose', 'Garcia lopez', 'Enosa', 'jose15@gmail.com', '956457', '2024-11-29 06:42:23', '0000-00-00 00:00:00', 'ac'),
(5, 'Jose', 'Jaramillo Calle', 'Ingenosac', 'jose@gmail.com', '955788566', '2024-12-08 03:49:24', '2024-12-08 17:50:47', 'ac'),
(6, 'Juan', 'Benitez Cardoza', 'Enosa', 'juanb@gmail.com', '958746522', '2024-12-08 03:55:39', '2024-12-08 17:52:16', 'ac'),
(7, 'Juan', 'Lopez Juarez', 'Enosa', 'juan@gmail.com', '958456788', '2024-12-08 04:09:53', '0000-00-00 00:00:00', 'ac');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supervisorset`
--

CREATE TABLE `supervisorset` (
  `id_supervisorset` int(11) NOT NULL,
  `nombre_sus` varchar(50) NOT NULL,
  `apellidos_sus` varchar(100) NOT NULL,
  `empresa_sus` varchar(30) NOT NULL,
  `email_sus` varchar(30) NOT NULL,
  `celular_sus` char(9) NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `fecha_actualizacion` datetime NOT NULL,
  `estado_supervisorset` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `supervisorset`
--

INSERT INTO `supervisorset` (`id_supervisorset`, `nombre_sus`, `apellidos_sus`, `empresa_sus`, `email_sus`, `celular_sus`, `fecha_registro`, `fecha_actualizacion`, `estado_supervisorset`) VALUES
(1, 'Raul', 'vasquez litano', 'Enosa', 'raul@gmail.com', '958746122', '2024-11-21 17:34:52', '2024-11-21 17:34:52', 'ac'),
(2, 'Marco', 'garcia benitez', 'Enosa', 'marco@gmail.com', '975645788', '2024-11-27 10:20:03', '2024-11-29 19:47:14', 'ac'),
(3, 'Miguel', 'Huancas Farfan', 'Enosa', 'miguel@gmail.com', '958746123', '2024-11-29 07:59:38', '2024-11-29 20:01:17', 'ac'),
(4, 'Rafael', 'Jara Moran', 'Enosa', 'rafo@gmail.com', '988654777', '2024-11-29 20:05:33', '0000-00-00 00:00:00', 'ac'),
(5, 'Jesus', 'Chapillequen Vasquez', 'Enosa', 'jesus@gmail.com', '988654777', '2024-12-08 18:41:48', '2024-12-08 18:42:23', 'ac');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `dni` char(8) NOT NULL,
  `id_parametro_genero` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password_user` varchar(100) NOT NULL,
  `id_parametro_nivel` int(11) NOT NULL,
  `estado_usuario` char(2) NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `fecha_actualizacion` datetime NOT NULL,
  `id_parametro_turno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellidos`, `direccion`, `telefono`, `dni`, `id_parametro_genero`, `email`, `password_user`, `id_parametro_nivel`, `estado_usuario`, `fecha_registro`, `fecha_actualizacion`, `id_parametro_turno`) VALUES
(1, 'Luis', 'Litano Perez', 'Av Gullman 355', '958413496', '02807456', 3, 'koki0470@gmail.com', '$2y$10$1yKqXZbkjZyoN2NHH9v0fOPnHJoD.mqsN.wjNwlCmnhQl5lbuZkbe', 2, 'ac', '2024-11-18 19:17:45', '2024-11-18 19:17:45', 5),
(2, 'Oscar', 'Valle Ruiz', 'Av Gullman 355', '958413758', '47548967', 3, 'oscar@gmail.com', '$2y$10$k3Cu8Uoihkmpc0zrCfQI4OfK0U/65Qo9COG4uxY48Ayz2YhQno7Rq', 1, 'ac', '2024-11-21 14:27:27', '0000-00-00 00:00:00', 5),
(3, 'Pedro', 'trelles', 'Av Gullman 355', '96745555', '02845698', 3, 'pedro@gmail.com', '$2y$10$62ssGeY1hXdTEOpRhy3dN.cUxVBXReosnuJa6cAKjq7WOKwvuh2pq', 2, 'ac', '2024-11-21 14:28:37', '0000-00-00 00:00:00', 5),
(4, 'Marco', 'trelles', 'av Salaverry 966', '958744623', '02854789', 3, 'marco@gmail.com', '$2y$10$Z.ncWGOtZz..45uW/3jIH.P8pdZV9YoYUnt6fbukBiaLYA9k60FH.', 1, 'ac', '2024-11-21 20:23:41', '0000-00-00 00:00:00', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alimentadores`
--
ALTER TABLE `alimentadores`
  ADD PRIMARY KEY (`id_alimentador`),
  ADD KEY `id_subestacion` (`id_subestacion`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `interrupcion`
--
ALTER TABLE `interrupcion`
  ADD PRIMARY KEY (`id_interrupcion`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_alimentador` (`id_alimentador`),
  ADD KEY `id_supervisorcco` (`id_supervisorcco`),
  ADD KEY `id_supervisorset` (`id_supervisorset`);

--
-- Indices de la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  ADD PRIMARY KEY (`id_mantenimiento`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_alimentador` (`id_alimentador`),
  ADD KEY `id_supervisorcco` (`id_supervisorcco`),
  ADD KEY `id_interrupcion` (`id_interrupcion`);

--
-- Indices de la tabla `parametro`
--
ALTER TABLE `parametro`
  ADD PRIMARY KEY (`id_parametro`);

--
-- Indices de la tabla `subestacion`
--
ALTER TABLE `subestacion`
  ADD PRIMARY KEY (`id_subestacion`);

--
-- Indices de la tabla `supervisorcco`
--
ALTER TABLE `supervisorcco`
  ADD PRIMARY KEY (`id_supervisorcco`);

--
-- Indices de la tabla `supervisorset`
--
ALTER TABLE `supervisorset`
  ADD PRIMARY KEY (`id_supervisorset`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_parametro_nivel` (`id_parametro_nivel`),
  ADD KEY `id_parametro_genero` (`id_parametro_genero`),
  ADD KEY `id_parametro_turno` (`id_parametro_turno`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alimentadores`
--
ALTER TABLE `alimentadores`
  MODIFY `id_alimentador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `interrupcion`
--
ALTER TABLE `interrupcion`
  MODIFY `id_interrupcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  MODIFY `id_mantenimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `parametro`
--
ALTER TABLE `parametro`
  MODIFY `id_parametro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `subestacion`
--
ALTER TABLE `subestacion`
  MODIFY `id_subestacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `supervisorcco`
--
ALTER TABLE `supervisorcco`
  MODIFY `id_supervisorcco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `supervisorset`
--
ALTER TABLE `supervisorset`
  MODIFY `id_supervisorset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alimentadores`
--
ALTER TABLE `alimentadores`
  ADD CONSTRAINT `alimentadores_ibfk_1` FOREIGN KEY (`id_subestacion`) REFERENCES `subestacion` (`id_subestacion`) ON UPDATE CASCADE,
  ADD CONSTRAINT `alimentadores_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `interrupcion`
--
ALTER TABLE `interrupcion`
  ADD CONSTRAINT `interrupcion_ibfk_2` FOREIGN KEY (`id_alimentador`) REFERENCES `alimentadores` (`id_alimentador`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `interrupcion_ibfk_3` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `interrupcion_ibfk_4` FOREIGN KEY (`id_supervisorcco`) REFERENCES `supervisorcco` (`id_supervisorcco`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `interrupcion_ibfk_5` FOREIGN KEY (`id_supervisorset`) REFERENCES `supervisorset` (`id_supervisorset`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  ADD CONSTRAINT `mantenimiento_ibfk_2` FOREIGN KEY (`id_alimentador`) REFERENCES `alimentadores` (`id_alimentador`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `mantenimiento_ibfk_3` FOREIGN KEY (`id_supervisorcco`) REFERENCES `supervisorcco` (`id_supervisorcco`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `mantenimiento_ibfk_4` FOREIGN KEY (`id_interrupcion`) REFERENCES `interrupcion` (`id_interrupcion`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_parametro_genero`) REFERENCES `parametro` (`id_parametro`) ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`id_parametro_nivel`) REFERENCES `parametro` (`id_parametro`) ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_3` FOREIGN KEY (`id_parametro_turno`) REFERENCES `parametro` (`id_parametro`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

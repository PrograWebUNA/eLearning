-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 10-04-2017 a las 07:12:42
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `elearning`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `COLABORACION`
--

CREATE TABLE `COLABORACION` (
  `ID_COLABORACION` int(11) NOT NULL,
  `ID_USUARIO` int(11) DEFAULT NULL,
  `TIPO_COLABORACION` int(11) DEFAULT NULL,
  `COLABORACION_PADRE` int(11) DEFAULT NULL,
  `TAREA` int(11) DEFAULT NULL,
  `FECHA_CREACION` date DEFAULT NULL,
  `FECHA_MODIFICACION` date DEFAULT NULL,
  `CONTENIDO` varchar(255) DEFAULT NULL,
  `VISIBLE` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `COLABORACION`:
--   `COLABORACION_PADRE`
--       `COLABORACION` -> `ID_COLABORACION`
--   `TAREA`
--       `TAREA` -> `ID_TAREA`
--   `TIPO_COLABORACION`
--       `TIPO_COLABORACION` -> `ID_TIPO_COLABORACION`
--   `COLABORACION_PADRE`
--       `COLABORACION` -> `ID_COLABORACION`
--   `TAREA`
--       `TAREA` -> `ID_TAREA`
--   `TIPO_COLABORACION`
--       `TIPO_COLABORACION` -> `ID_TIPO_COLABORACION`
--   `ID_USUARIO`
--       `users` -> `ID_USUARIO`
--   `ID_USUARIO`
--       `users` -> `ID_USUARIO`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CURSO`
--

CREATE TABLE `CURSO` (
  `ID_CURSO` int(11) NOT NULL,
  `NOMBRE` varchar(100) DEFAULT NULL,
  `DURACION` varchar(40) DEFAULT NULL,
  `FECHA_INICIO` date DEFAULT NULL,
  `FECHA_FIN` date DEFAULT NULL,
  `ESTADO` tinyint(1) DEFAULT NULL,
  `URL_IMAGEN` varchar(300) NOT NULL,
  `DESCRIPCION` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `CURSO`:
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `MATRICULA`
--

CREATE TABLE `MATRICULA` (
  `ID_MATRICULA` int(11) NOT NULL,
  `ID_USUARIO` int(11) DEFAULT NULL,
  `CURSO` int(11) DEFAULT NULL,
  `NOMBRE` varchar(100) DEFAULT NULL,
  `ANIO` int(11) DEFAULT NULL,
  `FECHA_MATRICULA` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `MATRICULA`:
--   `CURSO`
--       `CURSO` -> `ID_CURSO`
--   `ID_USUARIO`
--       `users` -> `ID_USUARIO`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `RECURSO`
--

CREATE TABLE `RECURSO` (
  `ID_RECURSO` int(11) NOT NULL,
  `TIPO_RECURSO` int(11) DEFAULT NULL,
  `RECURSO_PADRE` int(11) DEFAULT NULL,
  `SEMANA` int(11) DEFAULT NULL,
  `NOMBRE` varchar(100) DEFAULT NULL,
  `URL` varchar(255) DEFAULT NULL,
  `VISIBLE` tinyint(1) DEFAULT NULL,
  `SECUENCIA` int(11) DEFAULT NULL,
  `NOTAS` varchar(255) DEFAULT NULL,
  `ESTADO` tinyint(1) DEFAULT NULL,
  `ID_USUARIO` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `RECURSO`:
--   `RECURSO_PADRE`
--       `RECURSO` -> `ID_RECURSO`
--   `SEMANA`
--       `SEMANA` -> `ID_SEMANA`
--   `TIPO_RECURSO`
--       `TIPO_RECURSO` -> `ID_TIPO_RECURSO`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `RECURSO_ROL`
--

CREATE TABLE `RECURSO_ROL` (
  `ID_RECURSO_ROL` int(11) NOT NULL,
  `RECURSO` int(11) DEFAULT NULL,
  `ROL` int(11) DEFAULT NULL,
  `ESTADO` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `RECURSO_ROL`:
--   `RECURSO`
--       `RECURSO` -> `ID_RECURSO`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ROL`
--

CREATE TABLE `ROL` (
  `ID_ROL` int(11) NOT NULL,
  `NOMBRE` varchar(20) DEFAULT NULL,
  `ESTADO` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `ROL`:
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ROL_CURSO`
--

CREATE TABLE `ROL_CURSO` (
  `ID_ROL_CURSO` int(11) NOT NULL,
  `CURSO` int(11) DEFAULT NULL,
  `ROL` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `ROL_CURSO`:
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `SEMANA`
--

CREATE TABLE `SEMANA` (
  `ID_SEMANA` int(11) NOT NULL,
  `CURSO` int(11) DEFAULT NULL,
  `TEMA` varchar(150) DEFAULT NULL,
  `FECHA_INICIO` date DEFAULT NULL,
  `FECHA_FIN` date DEFAULT NULL,
  `VISIBLE` tinyint(1) DEFAULT NULL,
  `ESTADO` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `SEMANA`:
--   `CURSO`
--       `CURSO` -> `ID_CURSO`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TAREA`
--

CREATE TABLE `TAREA` (
  `ID_TAREA` int(11) NOT NULL,
  `CURSO` int(11) DEFAULT NULL,
  `DESCRIPCION` varchar(255) DEFAULT NULL,
  `CALIFICACION` int(11) DEFAULT NULL,
  `FECHA_CREACION` date DEFAULT NULL,
  `FECHA_ENTREGA` date DEFAULT NULL,
  `PUNTAJE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `TAREA`:
--   `CURSO`
--       `CURSO` -> `ID_CURSO`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TIPO_COLABORACION`
--

CREATE TABLE `TIPO_COLABORACION` (
  `ID_TIPO_COLABORACION` int(11) NOT NULL,
  `NOMBRE` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `TIPO_COLABORACION`:
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TIPO_RECURSO`
--

CREATE TABLE `TIPO_RECURSO` (
  `ID_TIPO_RECURSO` int(11) NOT NULL,
  `NOMBRE` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `TIPO_RECURSO`:
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `ID_USUARIO` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IDENTIFICACION` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `GENERO` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PAIS` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ULTIMA_FECHA_INGRESO` date DEFAULT NULL,
  `IP` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OS` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NAVEGADOR` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LENGUAJE` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- RELACIONES PARA LA TABLA `users`:
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `USUARIO_ROL`
--

CREATE TABLE `USUARIO_ROL` (
  `ID_USUARIO_ROL` int(11) NOT NULL,
  `ID_USUARIO` int(11) DEFAULT NULL,
  `ROL` int(11) DEFAULT NULL,
  `ESTADO` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELACIONES PARA LA TABLA `USUARIO_ROL`:
--   `ID_USUARIO`
--       `users` -> `ID_USUARIO`
--   `ROL`
--       `ROL` -> `ID_ROL`
--

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `COLABORACION`
--
ALTER TABLE `COLABORACION`
  ADD PRIMARY KEY (`ID_COLABORACION`),
  ADD KEY `COLABORACION_PADRE` (`COLABORACION_PADRE`),
  ADD KEY `TAREA` (`TAREA`),
  ADD KEY `TIPO_COLABORACION` (`TIPO_COLABORACION`),
  ADD KEY `ID_USUARIO` (`ID_USUARIO`);

--
-- Indices de la tabla `CURSO`
--
ALTER TABLE `CURSO`
  ADD PRIMARY KEY (`ID_CURSO`);

--
-- Indices de la tabla `MATRICULA`
--
ALTER TABLE `MATRICULA`
  ADD PRIMARY KEY (`ID_MATRICULA`),
  ADD KEY `CURSO` (`CURSO`),
  ADD KEY `ID_USUARIO` (`ID_USUARIO`);

--
-- Indices de la tabla `RECURSO`
--
ALTER TABLE `RECURSO`
  ADD PRIMARY KEY (`ID_RECURSO`),
  ADD KEY `RECURSO_PADRE` (`RECURSO_PADRE`),
  ADD KEY `SEMANA` (`SEMANA`),
  ADD KEY `TIPO_RECURSO` (`TIPO_RECURSO`);

--
-- Indices de la tabla `RECURSO_ROL`
--
ALTER TABLE `RECURSO_ROL`
  ADD PRIMARY KEY (`ID_RECURSO_ROL`),
  ADD KEY `RECURSO` (`RECURSO`);

--
-- Indices de la tabla `ROL`
--
ALTER TABLE `ROL`
  ADD PRIMARY KEY (`ID_ROL`);

--
-- Indices de la tabla `ROL_CURSO`
--
ALTER TABLE `ROL_CURSO`
  ADD PRIMARY KEY (`ID_ROL_CURSO`);

--
-- Indices de la tabla `SEMANA`
--
ALTER TABLE `SEMANA`
  ADD PRIMARY KEY (`ID_SEMANA`),
  ADD KEY `CURSO` (`CURSO`);

--
-- Indices de la tabla `TAREA`
--
ALTER TABLE `TAREA`
  ADD PRIMARY KEY (`ID_TAREA`),
  ADD KEY `CURSO` (`CURSO`);

--
-- Indices de la tabla `TIPO_COLABORACION`
--
ALTER TABLE `TIPO_COLABORACION`
  ADD PRIMARY KEY (`ID_TIPO_COLABORACION`);

--
-- Indices de la tabla `TIPO_RECURSO`
--
ALTER TABLE `TIPO_RECURSO`
  ADD PRIMARY KEY (`ID_TIPO_RECURSO`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_USUARIO`);

--
-- Indices de la tabla `USUARIO_ROL`
--
ALTER TABLE `USUARIO_ROL`
  ADD PRIMARY KEY (`ID_USUARIO_ROL`),
  ADD KEY `ID_USUARIO` (`ID_USUARIO`),
  ADD KEY `ROL` (`ROL`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `COLABORACION`
--
ALTER TABLE `COLABORACION`
  MODIFY `ID_COLABORACION` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `CURSO`
--
ALTER TABLE `CURSO`
  MODIFY `ID_CURSO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `MATRICULA`
--
ALTER TABLE `MATRICULA`
  MODIFY `ID_MATRICULA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `RECURSO`
--
ALTER TABLE `RECURSO`
  MODIFY `ID_RECURSO` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `RECURSO_ROL`
--
ALTER TABLE `RECURSO_ROL`
  MODIFY `ID_RECURSO_ROL` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ROL`
--
ALTER TABLE `ROL`
  MODIFY `ID_ROL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `ROL_CURSO`
--
ALTER TABLE `ROL_CURSO`
  MODIFY `ID_ROL_CURSO` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `SEMANA`
--
ALTER TABLE `SEMANA`
  MODIFY `ID_SEMANA` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `TAREA`
--
ALTER TABLE `TAREA`
  MODIFY `ID_TAREA` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `TIPO_COLABORACION`
--
ALTER TABLE `TIPO_COLABORACION`
  MODIFY `ID_TIPO_COLABORACION` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `TIPO_RECURSO`
--
ALTER TABLE `TIPO_RECURSO`
  MODIFY `ID_TIPO_RECURSO` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `ID_USUARIO` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `USUARIO_ROL`
--
ALTER TABLE `USUARIO_ROL`
  MODIFY `ID_USUARIO_ROL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `COLABORACION`
--
ALTER TABLE `COLABORACION`
  ADD CONSTRAINT `colaboracion_ibfk_1` FOREIGN KEY (`COLABORACION_PADRE`) REFERENCES `COLABORACION` (`ID_COLABORACION`),
  ADD CONSTRAINT `colaboracion_ibfk_2` FOREIGN KEY (`TAREA`) REFERENCES `TAREA` (`ID_TAREA`),
  ADD CONSTRAINT `colaboracion_ibfk_3` FOREIGN KEY (`TIPO_COLABORACION`) REFERENCES `TIPO_COLABORACION` (`ID_TIPO_COLABORACION`),
  ADD CONSTRAINT `colaboracion_ibfk_4` FOREIGN KEY (`COLABORACION_PADRE`) REFERENCES `COLABORACION` (`ID_COLABORACION`),
  ADD CONSTRAINT `colaboracion_ibfk_5` FOREIGN KEY (`TAREA`) REFERENCES `TAREA` (`ID_TAREA`),
  ADD CONSTRAINT `colaboracion_ibfk_6` FOREIGN KEY (`TIPO_COLABORACION`) REFERENCES `TIPO_COLABORACION` (`ID_TIPO_COLABORACION`),
  ADD CONSTRAINT `colaboracion_ibfk_7` FOREIGN KEY (`ID_USUARIO`) REFERENCES `users` (`ID_USUARIO`),
  ADD CONSTRAINT `colaboracion_ibfk_8` FOREIGN KEY (`ID_USUARIO`) REFERENCES `users` (`ID_USUARIO`);

--
-- Filtros para la tabla `MATRICULA`
--
ALTER TABLE `MATRICULA`
  ADD CONSTRAINT `matricula_ibfk_1` FOREIGN KEY (`CURSO`) REFERENCES `CURSO` (`ID_CURSO`),
  ADD CONSTRAINT `matricula_ibfk_2` FOREIGN KEY (`ID_USUARIO`) REFERENCES `users` (`ID_USUARIO`);

--
-- Filtros para la tabla `RECURSO`
--
ALTER TABLE `RECURSO`
  ADD CONSTRAINT `recurso_ibfk_1` FOREIGN KEY (`RECURSO_PADRE`) REFERENCES `RECURSO` (`ID_RECURSO`),
  ADD CONSTRAINT `recurso_ibfk_2` FOREIGN KEY (`SEMANA`) REFERENCES `SEMANA` (`ID_SEMANA`),
  ADD CONSTRAINT `recurso_ibfk_3` FOREIGN KEY (`TIPO_RECURSO`) REFERENCES `TIPO_RECURSO` (`ID_TIPO_RECURSO`);

--
-- Filtros para la tabla `RECURSO_ROL`
--
ALTER TABLE `RECURSO_ROL`
  ADD CONSTRAINT `recurso_rol_ibfk_1` FOREIGN KEY (`RECURSO`) REFERENCES `RECURSO` (`ID_RECURSO`);

--
-- Filtros para la tabla `SEMANA`
--
ALTER TABLE `SEMANA`
  ADD CONSTRAINT `semana_ibfk_1` FOREIGN KEY (`CURSO`) REFERENCES `CURSO` (`ID_CURSO`);

--
-- Filtros para la tabla `TAREA`
--
ALTER TABLE `TAREA`
  ADD CONSTRAINT `tarea_ibfk_1` FOREIGN KEY (`CURSO`) REFERENCES `CURSO` (`ID_CURSO`);

--
-- Filtros para la tabla `USUARIO_ROL`
--
ALTER TABLE `USUARIO_ROL`
  ADD CONSTRAINT `usuario_rol_ibfk_1` FOREIGN KEY (`ID_USUARIO`) REFERENCES `users` (`ID_USUARIO`),
  ADD CONSTRAINT `usuario_rol_ibfk_2` FOREIGN KEY (`ROL`) REFERENCES `ROL` (`ID_ROL`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

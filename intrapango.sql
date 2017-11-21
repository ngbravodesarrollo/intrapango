-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2017 a las 00:45:39
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8
use intrapango;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `intrapango`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id` int(11) NOT NULL,
  `nombre` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_anio` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catedras`
--

CREATE TABLE `catedras` (
  `id` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `cuatrimestre` int(11) NOT NULL,
  `turno` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_profesor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `catedras`
--

INSERT INTO `catedras` (`id`, `id_materia`, `anio`, `cuatrimestre`, `turno`, `id_profesor`) VALUES
(1, 1, 2017, 1, 'mañana', 1),
(2, 1, 2017, 2, 'tarde', 1),
(3, 2, 2017, 1, 'noche', 1),
(4, 3, 2017, 2, 'mañana', 1),
(5, 1, 2017, 2, 'mañana', 1),
(6, 3, 2017, 1, 'noche', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consignas`
--

CREATE TABLE `consignas` (
  `id` int(11) NOT NULL,
  `id_tp` int(11) NOT NULL,
  `pregunta` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `horas_semanales` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `nombre`, `horas_semanales`) VALUES
(1, 'Matematica', 8),
(2, 'Programacion', 8),
(3, 'ingles', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parciales`
--

CREATE TABLE `parciales` (
  `id` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `id_catedra` int(11) NOT NULL,
  `tipo_examen` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nota` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_permiso` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_admin_permisos`
--

CREATE TABLE `p_admin_permisos` (
  `id_admin` int(11) NOT NULL,
  `id_permisos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_alumnos_catedras`
--

CREATE TABLE `p_alumnos_catedras` (
  `id_alumno` int(11) NOT NULL,
  `id_catedra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `p_alumnos_catedras`
--

INSERT INTO `p_alumnos_catedras` (`id_alumno`, `id_catedra`) VALUES
(5, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_carreras_alumnos`
--

CREATE TABLE `p_carreras_alumnos` (
  `id_carrera` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `fecha_inscripto` date NOT NULL,
  `fecha_egreso` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_carreras_materias`
--

CREATE TABLE `p_carreras_materias` (
  `id_carrera` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_materias_materias`
--

CREATE TABLE `p_materias_materias` (
  `id_materia` int(11) NOT NULL,
  `id_correlativa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_prof_materias`
--

CREATE TABLE `p_prof_materias` (
  `id_profesor` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `p_prof_materias`
--

INSERT INTO `p_prof_materias` (`id_profesor`, `id_materia`) VALUES
(3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `p_roles_permisos`
--

CREATE TABLE `p_roles_permisos` (
  `id_rol` int(11) NOT NULL,
  `id_permiso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE `respuestas` (
  `id` int(11) NOT NULL,
  `id_consigna` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `respuesta` text COLLATE utf8mb4_unicode_ci,
  `opcion` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajos_practicos`
--

CREATE TABLE `trabajos_practicos` (
  `id` int(11) NOT NULL,
  `id_catedra` int(11) NOT NULL,
  `titulo` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_nac` date NOT NULL,
  `DNI` int(10) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `email`, `nombre`, `apellido`, `fecha_nac`, `DNI`, `id_rol`) VALUES
(1, 'daniela', '5f4dcc3b5aa765d61d8327deb882cf99', 'adlfkjsdlkf', 'Daniela', 'Valente', '0000-00-00', 0, 60),
(2, 'brian', '5f4dcc3b5aa765d61d8327deb882cf99', 'dkfjsldkf', 'Brian', 'Valente', '0000-00-00', 0, 30),
(3, 'cristian', '81dc9bdb52d04dc20036dbd8313ed055', 'cristian_german2@hotmail.com', 'Cristian', 'Lavayen', '1994-08-12', 38319986, 60),
(5, 'alumno', '81dc9bdb52d04dc20036dbd8313ed055', 'alumno@alumno.com', 'oliver', 'queen', '1994-08-12', 38319986, 30);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `catedras`
--
ALTER TABLE `catedras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `consignas`
--
ALTER TABLE `consignas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `parciales`
--
ALTER TABLE `parciales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `trabajos_practicos`
--
ALTER TABLE `trabajos_practicos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `catedras`
--
ALTER TABLE `catedras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `consignas`
--
ALTER TABLE `consignas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `parciales`
--
ALTER TABLE `parciales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `trabajos_practicos`
--
ALTER TABLE `trabajos_practicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-04-2021 a las 01:11:29
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vacunacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaciones`
--

CREATE TABLE `asignaciones` (
  `Id_vacunatorio` int(10) NOT NULL,
  `DNI` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asignaciones`
--

INSERT INTO `asignaciones` (`Id_vacunatorio`, `DNI`) VALUES
(1, 100),
(2, 100),
(1, 102);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centros`
--

CREATE TABLE `centros` (
  `Id` int(10) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `localidad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `centros`
--

INSERT INTO `centros` (`Id`, `nom`, `localidad`) VALUES
(20300039, 'Hospital Municipal “Dr. Raúl Caccavo”', 'Coronel\r\nSuárez'),
(20300055, 'Hospital Municipal “Lucero del Alba”', 'Huanguelén'),
(20300098, 'Unidad Sanitaria Pueblo San José', 'San José'),
(23300063, 'Unidad Sanitaria Dr. Lew Frandzman', 'Santa María'),
(23300080, 'Unidad Sanitaria Pueblo Santa Trinidad', 'Santa Trinidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_vacunas`
--

CREATE TABLE `tipos_vacunas` (
  `Id` int(11) NOT NULL,
  `nom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `DNI` int(10) NOT NULL,
  `apelnom` varchar(100) NOT NULL,
  `telefono` bigint(10) DEFAULT NULL,
  `role` varchar(3) NOT NULL,
  `RUP` varchar(10) NOT NULL,
  `clave` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`DNI`, `apelnom`, `telefono`, `role`, `RUP`, `clave`) VALUES
(100, 'Juan Enfermero', 2926100100, 'enf', '600100', 'f899139df5e1059396431415e770c6dd'),
(101, 'Pedro Gestion', 2926101101, 'ges', '', '38b3eff8baf56627478ec76a704e9b52'),
(102, 'Pedro Enfermero', 2926102102, 'enf', '200300', 'ec8956637a99787bd197eacd77acce5e'),
(103, 'Juan Admin', 2926103103, 'adm', '', '6974ce5ac660610b44d9b9fed0ff9548');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacunados`
--

CREATE TABLE `vacunados` (
  `DNI` int(8) NOT NULL,
  `apelnom` varchar(100) NOT NULL,
  `domicilio` varchar(100) NOT NULL,
  `edad` int(3) NOT NULL,
  `grupo_riesgo` int(1) NOT NULL,
  `tipo_vacuna` int(10) NOT NULL,
  `fecha_dosis1` date NOT NULL,
  `Id_vacunatorio` int(10) NOT NULL,
  `RUP1` int(10) NOT NULL,
  `fecha_dosis2` date NOT NULL,
  `RUP2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacunatorios`
--

CREATE TABLE `vacunatorios` (
  `Id` int(11) NOT NULL,
  `Id_centro` int(10) NOT NULL,
  `medico` varchar(50) NOT NULL,
  `horario` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vacunatorios`
--

INSERT INTO `vacunatorios` (`Id`, `Id_centro`, `medico`, `horario`, `telefono`) VALUES
(1, 20300039, 'Doctor Chapatin', '8:00Hs a 16:00Hs', '2926100000'),
(2, 20300055, 'Doctor House', '7:00Hs a 18:00Hs', '2926100001');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `centros`
--
ALTER TABLE `centros`
  ADD PRIMARY KEY (`Id`) USING BTREE;

--
-- Indices de la tabla `tipos_vacunas`
--
ALTER TABLE `tipos_vacunas`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`DNI`);

--
-- Indices de la tabla `vacunados`
--
ALTER TABLE `vacunados`
  ADD PRIMARY KEY (`DNI`);

--
-- Indices de la tabla `vacunatorios`
--
ALTER TABLE `vacunatorios`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tipos_vacunas`
--
ALTER TABLE `tipos_vacunas`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `vacunatorios`
--
ALTER TABLE `vacunatorios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-04-2021 a las 01:15:57
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
  `Id_usuario` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asignaciones`
--

INSERT INTO `asignaciones` (`Id_vacunatorio`, `Id_usuario`) VALUES
(1, 1),
(1, 3),
(2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centros`
--

CREATE TABLE `centros` (
  `Id` int(10) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `localidad` varchar(20) NOT NULL,
  `disable` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `centros`
--

INSERT INTO `centros` (`Id`, `nom`, `localidad`, `disable`) VALUES
(20300039, 'Hospital Municipal “Dr. Raúl Caccavo”', 'Coronel\r\nSuárez', 0),
(20300055, 'Hospital Municipal “Lucero del Alba”', 'Huanguelén', 0),
(20300098, 'Unidad Sanitaria Pueblo San José', 'San José', 0),
(23300063, 'Unidad Sanitaria Dr. Lew Frandzman', 'Santa María', 0),
(23300080, 'Unidad Sanitaria Pueblo Santa Trinidad', 'Santa Trinidad', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dosis`
--

CREATE TABLE `dosis` (
  `Id` int(10) NOT NULL,
  `DNI` int(8) NOT NULL,
  `tipo_vacuna` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `Id_usuario` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enfermeros`
--

CREATE TABLE `enfermeros` (
  `Id_usuario` int(10) NOT NULL,
  `RUP` int(10) NOT NULL,
  `telefono` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_vacunas`
--

CREATE TABLE `tipo_vacunas` (
  `Id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `origen` varchar(30) NOT NULL,
  `laboratorio` varchar(30) NOT NULL,
  `dosis` int(5) NOT NULL,
  `disable` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_vacunas`
--

INSERT INTO `tipo_vacunas` (`Id`, `nom`, `origen`, `laboratorio`, `dosis`, `disable`) VALUES
(1, 'Moderna mRNA-1273', '', '', 0, 0),
(2, 'Pfizer/BioNTech', '', '', 0, 0),
(3, 'AztraZeneca/U. de Oxford', '', '', 0, 0),
(4, 'Janssen', '', '', 0, 0),
(5, 'Sputnik V', '', '', 0, 0),
(6, 'epepepep', '', '', 0, 0),
(7, 'xxxxxxxxp', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(11) NOT NULL,
  `DNI` int(10) NOT NULL,
  `apelnom` varchar(100) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `role` varchar(3) NOT NULL,
  `clave` varchar(32) NOT NULL,
  `recuperacion` varchar(32) NOT NULL,
  `disable` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `DNI`, `apelnom`, `mail`, `role`, `clave`, `recuperacion`, `disable`) VALUES
(1, 100, 'Juan Enfermero', 'fg.sistemas@hotmail.com', 'enf', 'f899139df5e1059396431415e770c6dd', '019c95d3614356db6813c2151d6f61ef', 0),
(2, 101, 'Pedro Gestion', '', 'ges', '38b3eff8baf56627478ec76a704e9b52', '', 0),
(3, 102, 'Pedro Enfermero', 'jfergimenez@gmail.com', 'enf', '698d51a19d8a121ce581499d7b701668', '74e79c7c4aef66b9833a33714fdcf258', 0),
(4, 103, 'Juan Admin', '', 'adm', '6974ce5ac660610b44d9b9fed0ff9548', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacunados`
--

CREATE TABLE `vacunados` (
  `Id` int(10) NOT NULL,
  `DNI` int(8) NOT NULL,
  `apelnom` varchar(100) NOT NULL,
  `domicilio` varchar(100) NOT NULL,
  `edad` int(3) NOT NULL,
  `grupo_riesgo` int(1) NOT NULL,
  `tipo_vacuna` int(10) NOT NULL,
  `Id_vacunatorio` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vacunados`
--

INSERT INTO `vacunados` (`Id`, `DNI`, `apelnom`, `domicilio`, `edad`, `grupo_riesgo`, `tipo_vacuna`, `Id_vacunatorio`) VALUES
(1, 100, 'Juan 100', 'Alsina 100', 10, 2, 4, 1),
(2, 500, 'Maria', 'Colon 1200', 33, 4, 4, 2),
(3, 555, 'Ariel 555', 'Alem 55', 55, 2, 5, 1),
(4, 700, 'p7', 'aa1', 7, 2, 3, 1),
(5, 800, 'Andrade', 'Alsina 150', 60, 2, 1, 1),
(6, 900, 'Mario', 'Belgrano 4900', 80, 4, 5, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacunatorios`
--

CREATE TABLE `vacunatorios` (
  `Id` int(11) NOT NULL,
  `Id_centro` int(10) NOT NULL,
  `medico` varchar(50) NOT NULL,
  `horario` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `disable` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vacunatorios`
--

INSERT INTO `vacunatorios` (`Id`, `Id_centro`, `medico`, `horario`, `telefono`, `disable`) VALUES
(1, 20300039, 'Doctor Chapatin', '8:00Hs a 16:00Hs', '2926100000', 0),
(2, 20300055, 'Doctor House', '7:00Hs a 18:00Hs', '2926100001', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `centros`
--
ALTER TABLE `centros`
  ADD PRIMARY KEY (`Id`) USING BTREE;

--
-- Indices de la tabla `dosis`
--
ALTER TABLE `dosis`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `enfermeros`
--
ALTER TABLE `enfermeros`
  ADD PRIMARY KEY (`Id_usuario`);

--
-- Indices de la tabla `tipo_vacunas`
--
ALTER TABLE `tipo_vacunas`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `DNI` (`DNI`);

--
-- Indices de la tabla `vacunados`
--
ALTER TABLE `vacunados`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `vacunatorios`
--
ALTER TABLE `vacunatorios`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dosis`
--
ALTER TABLE `dosis`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_vacunas`
--
ALTER TABLE `tipo_vacunas`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `vacunados`
--
ALTER TABLE `vacunados`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `vacunatorios`
--
ALTER TABLE `vacunatorios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

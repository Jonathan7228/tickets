-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2017 a las 20:10:13
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_mvtickets`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `intId` int(11) NOT NULL,
  `strName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_customers`
--

INSERT INTO `tbl_customers` (`intId`, `strName`) VALUES
(1, 'admin dfasfasfd'),
(2, 'admin2'),
(3, 'Otro cliente'),
(4, 'Viviana Alvarez Ltda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_engineers`
--

CREATE TABLE `tbl_engineers` (
  `intId` int(11) NOT NULL,
  `strName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_engineers`
--

INSERT INTO `tbl_engineers` (`intId`, `strName`) VALUES
(1, 'Jonathan Bedoya'),
(2, 'Alejandro Velazques'),
(3, 'Oswaldo Ortiz'),
(4, 'Otro sadfasdfasfasfda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tickets`
--

CREATE TABLE `tbl_tickets` (
  `intId` int(11) NOT NULL,
  `intIdEngineerGet` int(11) NOT NULL,
  `intIdCustomer` int(11) NOT NULL,
  `tmpDateGet` datetime NOT NULL,
  `strDescriptionGet` longtext NOT NULL,
  `intIdEngineerSol` int(11) NOT NULL,
  `tmpDateSol` datetime NOT NULL,
  `strDescriptionSol` longtext NOT NULL,
  `bitStatus` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_tickets`
--

INSERT INTO `tbl_tickets` (`intId`, `intIdEngineerGet`, `intIdCustomer`, `tmpDateGet`, `strDescriptionGet`, `intIdEngineerSol`, `tmpDateSol`, `strDescriptionSol`, `bitStatus`) VALUES
(1, 1, 1, '2017-11-26 03:42:00', 'sadfasdf', 1, '2017-11-26 17:56:29', 'sdfsadfasdf', 1),
(2, 1, 2, '2017-11-26 04:10:26', 'sadfasdfasdf', 0, '0000-00-00 00:00:00', '', 0),
(3, 0, 0, '2017-11-26 03:42:00', 'sadfasdf', 0, '0000-00-00 00:00:00', '', 0),
(4, 0, 0, '2017-11-26 03:42:00', 'sadfasdf', 0, '0000-00-00 00:00:00', '', 0),
(5, 2, 1, '2017-11-26 18:00:36', 'sdfadsfasdf', 0, '0000-00-00 00:00:00', '', 0),
(6, 1, 4, '2017-11-26 20:04:36', 'ajflfasdlfsadf sfÃ±lasÃ±kfsflskjfsaifslkfsdajf xvkfÃ± lkjlsfjoasijfkljasjfÃ±', 3, '2017-11-26 20:05:24', 'sdfj Ã±sadfj Ã±sadfjasjÃ±asdf', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`intId`);

--
-- Indices de la tabla `tbl_engineers`
--
ALTER TABLE `tbl_engineers`
  ADD PRIMARY KEY (`intId`);

--
-- Indices de la tabla `tbl_tickets`
--
ALTER TABLE `tbl_tickets`
  ADD PRIMARY KEY (`intId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `intId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tbl_engineers`
--
ALTER TABLE `tbl_engineers`
  MODIFY `intId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tbl_tickets`
--
ALTER TABLE `tbl_tickets`
  MODIFY `intId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

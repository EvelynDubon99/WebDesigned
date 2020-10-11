-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2020 a las 06:26:34
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `intento`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_platillo`
--

CREATE TABLE `detalle_platillo` (
  `ID_platillo` int(11) NOT NULL,
  `ID_ingredientes` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle_platillo`
--

INSERT INTO `detalle_platillo` (`ID_platillo`, `ID_ingredientes`, `cantidad`) VALUES
(1, 1, 2),
(1, 2, 2),
(1, 3, 1),
(1, 4, 1),
(1, 5, 1),
(1, 6, 1),
(1, 7, 1),
(1, 8, 1),
(1, 9, 1),
(1, 10, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingredientes`
--

CREATE TABLE `ingredientes` (
  `ID_ingredientes` int(11) NOT NULL,
  `ID_status` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ingredientes`
--

INSERT INTO `ingredientes` (`ID_ingredientes`, `ID_status`, `Nombre`, `Cantidad`, `Descripcion`) VALUES
(1, 1, 'lomito', 10, 'carne'),
(2, 1, 'papa', 6, 'verdura'),
(3, 1, 'queso mozarella', 3, 'lacteo'),
(4, 1, 'cebolla toreada', 10, 'verdura'),
(5, 1, 'cema', 10, 'lacteo'),
(6, 1, 'tortillas', 10, 'otros'),
(7, 1, 'aguacate', 5, 'fruta'),
(8, 1, 'combo de salas parrilla', 5, 'otros'),
(9, 1, 'salsa picante', 4, 'otros'),
(10, 1, 'consome de cortesia', 10, 'otros'),
(21, 1, 'Fresas', 20, 'fruta'),
(23, 1, 'manzana', 80, 'Fruta'),
(24, 2, 'Cebolla', 0, 'Verdura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `ID_menu` int(11) NOT NULL,
  `ID_platillo` int(11) NOT NULL,
  `Tiempo_comida` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`ID_menu`, `ID_platillo`, `Tiempo_comida`) VALUES
(1, 1, 'Almuerzo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platillo`
--

CREATE TABLE `platillo` (
  `ID_platillo` int(11) NOT NULL,
  `ID_status` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` int(11) NOT NULL,
  `detalle` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `platillo`
--

INSERT INTO `platillo` (`ID_platillo`, `ID_status`, `nombre`, `precio`, `detalle`) VALUES
(1, 3, 'Papotas al gratín', 75, 'Lascas gruesas asadas en nuestra parrilla y gratinadas con queso mozarella, por encima tiras de carne asada, hilos de crema, cebolla toreada y cubos de aguacate, servido en skillets de hierro.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `ID_role` int(11) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`ID_role`, `rol`) VALUES
(1, 'administrador'),
(2, 'empleados'),
(3, 'logeado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE `status` (
  `ID_status` int(11) NOT NULL,
  `Descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `status`
--

INSERT INTO `status` (`ID_status`, `Descripcion`) VALUES
(1, 'stock'),
(2, 'no stock'),
(3, 'habilitado'),
(4, 'deshabilitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID_user` int(11) NOT NULL,
  `ID_role` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contraseña` varchar(20) NOT NULL,
  `telefono` int(11) NOT NULL,
  `direccion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID_user`, `ID_role`, `nombre`, `usuario`, `apellido`, `correo`, `contraseña`, `telefono`, `direccion`) VALUES
(12, 3, 'Mario', 'mario', 'Yon', 'dga@gmail.com', '123', 14562, '4ta calle 6-92 zona 5 Col Los planes Villa nueva'),
(13, 2, 'Fernando', 'Fernando123', '', '', '12345', 0, ''),
(27, 1, 'Evelyn', 'Eve123', '', '', '2010', 0, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalle_platillo`
--
ALTER TABLE `detalle_platillo`
  ADD KEY `ID_platillo` (`ID_platillo`),
  ADD KEY `ID_ingredientes` (`ID_ingredientes`);

--
-- Indices de la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD PRIMARY KEY (`ID_ingredientes`),
  ADD UNIQUE KEY `Nombre` (`Nombre`),
  ADD KEY `ID_status` (`ID_status`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ID_menu`),
  ADD KEY `ID_platillo` (`ID_platillo`);

--
-- Indices de la tabla `platillo`
--
ALTER TABLE `platillo`
  ADD PRIMARY KEY (`ID_platillo`),
  ADD KEY `ID_status` (`ID_status`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID_role`);

--
-- Indices de la tabla `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`ID_status`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_user`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD KEY `ID_role` (`ID_role`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
  MODIFY `ID_ingredientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `ID_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `platillo`
--
ALTER TABLE `platillo`
  MODIFY `ID_platillo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `status`
--
ALTER TABLE `status`
  MODIFY `ID_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_platillo`
--
ALTER TABLE `detalle_platillo`
  ADD CONSTRAINT `detalle_platillo_ibfk_1` FOREIGN KEY (`ID_platillo`) REFERENCES `platillo` (`ID_platillo`),
  ADD CONSTRAINT `detalle_platillo_ibfk_2` FOREIGN KEY (`ID_ingredientes`) REFERENCES `ingredientes` (`ID_ingredientes`);

--
-- Filtros para la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD CONSTRAINT `ingredientes_ibfk_1` FOREIGN KEY (`ID_status`) REFERENCES `status` (`ID_status`);

--
-- Filtros para la tabla `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`ID_platillo`) REFERENCES `platillo` (`ID_platillo`);

--
-- Filtros para la tabla `platillo`
--
ALTER TABLE `platillo`
  ADD CONSTRAINT `platillo_ibfk_1` FOREIGN KEY (`ID_status`) REFERENCES `status` (`ID_status`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`ID_role`) REFERENCES `roles` (`ID_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

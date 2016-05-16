-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2016 a las 16:22:51
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ciamsa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cultivo_etapas_referencias`
--

CREATE TABLE IF NOT EXISTS `cultivo_etapas_referencias` (
  `id` int(11) NOT NULL,
  `idreferencia` int(11) DEFAULT NULL,
  `idproducto` int(11) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `etapas_cultivo_id` int(11) NOT NULL DEFAULT '0',
  `tipo_cultivo_id` int(11) NOT NULL DEFAULT '0',
  `productos_id` int(11) NOT NULL DEFAULT '0',
  `referencia_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE IF NOT EXISTS `departamentos` (
  `id` int(11) NOT NULL,
  `departamento` varchar(255) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `departamento`, `estado`) VALUES
(1, 'Amazonas', 1),
(2, 'Antioquia', 1),
(3, 'Arauca', 1),
(4, 'Atlantico', 1),
(5, 'Bogota', 1),
(6, 'Bolívar', 1),
(7, 'Boyacá', 1),
(8, 'Caldas', 1),
(9, 'Caquetá', 1),
(10, 'Casanare', 1),
(11, 'Cauca', 1),
(12, 'Cesar', 1),
(13, 'Choco', 1),
(14, 'Córdoba', 1),
(15, 'Cundinamarca', 1),
(16, 'Guainía', 1),
(17, 'Guaviare', 1),
(18, 'Huila', 1),
(19, 'La Guajira', 1),
(20, 'Magdalena', 1),
(21, 'Meta', 1),
(22, 'Nariño', 1),
(23, 'Norte de Santander', 1),
(24, 'Putumayo', 1),
(25, 'Quindio', 1),
(26, 'Risaralda', 1),
(27, 'San Andrés y Providencia', 1),
(28, 'Santander', 1),
(29, 'Sucre', 1),
(30, 'Tolima', 1),
(31, 'Valle del Cauca', 1),
(32, 'Vaupés', 1),
(33, 'Vichada', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etapas_cultivo`
--

CREATE TABLE IF NOT EXISTS `etapas_cultivo` (
  `id` int(11) NOT NULL,
  `etapas` varchar(45) DEFAULT NULL,
  `imagen` varchar(45) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `etapas_cultivo`
--

INSERT INTO `etapas_cultivo` (`id`, `etapas`, `imagen`, `estado`) VALUES
(1, 'Siembra', 'null', 1),
(2, 'Crecimiento y Desarroollo', '0', 1),
(3, 'Produccion', '0', 1),
(4, 'Crecimiento Vegetativo', '0', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL,
  `nombre_producto` varchar(255) DEFAULT NULL,
  `logo` varchar(45) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre_producto`, `logo`, `estado`) VALUES
(1, 'FORKAMIX', 'null', 1),
(2, 'NUTRIKIMIA', '0', 1),
(3, 'NITROEFFI100', '0', 1),
(4, 'SIMPLES', 'null', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `referencia`
--

CREATE TABLE IF NOT EXISTS `referencia` (
  `id` int(11) NOT NULL,
  `nombreReferencia` varchar(45) DEFAULT NULL,
  `componentes` varchar(45) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `productos_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `referencia`
--

INSERT INTO `referencia` (`id`, `nombreReferencia`, `componentes`, `estado`, `productos_id`) VALUES
(1, '22-3-20+(ES)', 'null', 1, 1),
(2, '24-0-17Ciamsa3', 'null', 1, 1),
(3, '15-15-15+(ESM)', 'null', 1, 1),
(4, '25-4-24', 'null', 1, 1),
(5, '10-20-20Papa', 'null', 1, 1),
(7, '17-6-18+6 Cafetero', 'null', 1, 1),
(8, '18-18-18+(ES)', 'null', 1, 1),
(9, '13-26-10+4 Papa', 'null', 1, 1),
(10, '10-30-10+3 Papa', 'null', 1, 1),
(11, '25-15-0', 'null', 1, 1),
(12, '10-20-30', 'null', 1, 1),
(13, '12-34-12 Papa', 'null', 1, 1),
(14, '14-4-23+4 Platano', 'null', 1, 1),
(15, '34-5-5+(ES)', 'null', 1, 1),
(16, '15-15-15+9(S)', 'null', 1, 2),
(17, '27-6-6', 'null', 1, 2),
(18, '16-16-16', 'null', 1, 2),
(19, '8-24-24+2(S)', 'null', 1, 2),
(20, '12-24-12', 'null', 1, 2),
(21, 'NITRO EFII', 'null', 1, 3),
(22, 'NITRO UAN32 (LIQUIDO)', 'null', 1, 3),
(23, 'Urea Granulada 46-0-0', 'null', 1, 4),
(24, 'Urea Prilled 46-0-0', 'null', 1, 4),
(25, 'SAM', 'null', 1, 4),
(26, 'SAM Estandar', 'null', 1, 4),
(27, 'Kieserita', 'null', 1, 4),
(28, 'Esta-Kieserita', 'null', 1, 4),
(29, 'Kom-Kail+B', 'null', 1, 4),
(30, 'MAP Fosfato mono amoniaco 11-52-0', 'null', 1, 4),
(31, 'KCL Cloruro de potasio 0-0-60', 'null', 1, 4),
(32, 'DAP Dinamico de potasio 18-46-0', 'null', 1, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_cultivo`
--

CREATE TABLE IF NOT EXISTS `tipo_cultivo` (
  `id` int(11) NOT NULL,
  `cultivo` varchar(45) DEFAULT NULL,
  `icono` varchar(255) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_cultivo`
--

INSERT INTO `tipo_cultivo` (`id`, `cultivo`, `icono`, `estado`) VALUES
(1, 'Cafe', 'null', 1),
(2, 'Pasto', '0', 1),
(3, 'Maiz', '0', 1),
(4, 'Hortalizas', '0', 1),
(5, 'Arroz', '0', 1),
(6, 'Caña', 'null', 1),
(7, 'Platano', '0', 1),
(8, 'Frutales', '0', 1),
(9, 'Papa', '0', 1),
(10, 'Palma', '0', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `ciudad` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `celular` varchar(255) DEFAULT NULL,
  `fertilizante` varchar(255) DEFAULT NULL,
  `informacion` varchar(255) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `tipo_cultivo_id` int(11) NOT NULL,
  `etapas_cultivo_id` int(11) NOT NULL,
  `departamentos_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cultivo_etapas_referencias`
--
ALTER TABLE `cultivo_etapas_referencias`
  ADD PRIMARY KEY (`id`,`etapas_cultivo_id`,`tipo_cultivo_id`,`productos_id`,`referencia_id`), ADD KEY `fk_cultivo_etapas_referencias_etapas_cultivo1_idx` (`etapas_cultivo_id`), ADD KEY `fk_cultivo_etapas_referencias_tipo_cultivo1_idx` (`tipo_cultivo_id`), ADD KEY `fk_cultivo_etapas_referencias_productos1_idx` (`productos_id`), ADD KEY `fk_cultivo_etapas_referencias_referencia1_idx` (`referencia_id`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `etapas_cultivo`
--
ALTER TABLE `etapas_cultivo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `referencia`
--
ALTER TABLE `referencia`
  ADD PRIMARY KEY (`id`), ADD KEY `fk_referencia_productos1_idx` (`productos_id`);

--
-- Indices de la tabla `tipo_cultivo`
--
ALTER TABLE `tipo_cultivo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`,`tipo_cultivo_id`,`etapas_cultivo_id`,`departamentos_id`), ADD KEY `fk_Usuario_tipo_cultivo1_idx` (`tipo_cultivo_id`), ADD KEY `fk_Usuario_etapas_cultivo1_idx` (`etapas_cultivo_id`), ADD KEY `fk_Usuario_departamentos1_idx` (`departamentos_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cultivo_etapas_referencias`
--
ALTER TABLE `cultivo_etapas_referencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT de la tabla `etapas_cultivo`
--
ALTER TABLE `etapas_cultivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `referencia`
--
ALTER TABLE `referencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `tipo_cultivo`
--
ALTER TABLE `tipo_cultivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cultivo_etapas_referencias`
--
ALTER TABLE `cultivo_etapas_referencias`
ADD CONSTRAINT `fk_cultivo_etapas_referencias_etapas_cultivo1` FOREIGN KEY (`etapas_cultivo_id`) REFERENCES `etapas_cultivo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_cultivo_etapas_referencias_productos1` FOREIGN KEY (`productos_id`) REFERENCES `productos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_cultivo_etapas_referencias_referencia1` FOREIGN KEY (`referencia_id`) REFERENCES `referencia` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_cultivo_etapas_referencias_tipo_cultivo1` FOREIGN KEY (`tipo_cultivo_id`) REFERENCES `tipo_cultivo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `referencia`
--
ALTER TABLE `referencia`
ADD CONSTRAINT `fk_referencia_productos1` FOREIGN KEY (`productos_id`) REFERENCES `productos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
ADD CONSTRAINT `fk_Usuario_departamentos1` FOREIGN KEY (`departamentos_id`) REFERENCES `departamentos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Usuario_etapas_cultivo1` FOREIGN KEY (`etapas_cultivo_id`) REFERENCES `etapas_cultivo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Usuario_tipo_cultivo1` FOREIGN KEY (`tipo_cultivo_id`) REFERENCES `tipo_cultivo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-10-2024 a las 23:52:24
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
-- Base de datos: `shop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `imagen`, `estado`) VALUES
(1, 'CUIDADO', '20241027021111.jpg', 1),
(5, 'ALIMENTACIÓN', '20231017154052.jpg', 1),
(7, 'HIGIENE', '20241029013918.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

CREATE TABLE `configuracion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `whatsapp` varchar(20) DEFAULT NULL,
  `direccion` varchar(255) NOT NULL,
  `host_smtp` varchar(100) NOT NULL,
  `user_smtp` varchar(100) NOT NULL,
  `pass_smtp` varchar(100) NOT NULL,
  `puerto_smtp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `configuracion`
--

INSERT INTO `configuracion` (`id`, `nombre`, `telefono`, `correo`, `whatsapp`, `direccion`, `host_smtp`, `user_smtp`, `pass_smtp`, `puerto_smtp`) VALUES
(1, 'CONICA S.A.S', '3152996063', 'admin@gmail.com', '3152996063', 'COLOMBIA', 'smtp.gmail.com', 'ConicaSAS3@gmail.com', 'ikhnyjislfpyzhgj', 465);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_ventas`
--

CREATE TABLE `detalle_ventas` (
  `id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` decimal(10,3) NOT NULL,
  `producto` varchar(255) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` decimal(10,3) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `ventas` int(11) NOT NULL DEFAULT 0,
  `imagen` varchar(150) DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `cantidad`, `ventas`, `imagen`, `estado`, `id_categoria`) VALUES
(4, 'Suplemento de hierbas orgánicas para aves de corral', 'Este suplemento está hecho de una mezcla de hierbas orgánicas seleccionadas específicamente para mejorar la salud y el bienestar de las aves de corral. Contiene una combinación equilibrada de hierbas que promueven la digestión saludable, refuerzan el sistema inmunológico y aumentan la producción de huevos.', 20.000, 20, 0, '20241027021509.jpg', 1, 5),
(8, 'Alimento orgánico para cerdos en crecimiento', 'Este alimento orgánico está formulado especialmente para cerdos en crecimiento, proporcionando una nutrición completa y equilibrada para su desarrollo óptimo. Elaborado con ingredientes orgánicos de alta calidad, este alimento promueve un crecimiento saludable, mejora la salud intestinal y fortalece el sistema inmunológico de los cerdos jóvenes.', 50.000, 30, 0, '20241027021642.jpg', 1, 5),
(9, 'Forraje orgánico para ovejas y cabras', 'Este forraje orgánico está diseñado para satisfacer las necesidades nutricionales específicas de las ovejas y cabras. Contiene una mezcla balanceada de hierbas, leguminosas y otros ingredientes orgánicos que proporcionan una fuente natural de vitaminas, minerales y proteínas. Además, ayuda a mejorar la salud digestiva y promueve la producción de leche en las ovejas y cabras.', 80.000, 0, 0, '20241027021822.jpg', 1, 5),
(10, 'Champú orgánico para animales de granja', 'Este champú orgánico está formulado especialmente para limpiar suavemente el pelaje de tus animales de granja sin dañar su piel sensible. Hecho con ingredientes naturales y orgánicos, este champú ayuda a eliminar la suciedad y los olores, dejando el pelaje limpio, brillante y saludable.', 60.000, 18, 0, '20241027022316.jpg', 1, 7),
(11, 'Bálsamo orgánico para pezuñas', 'Este bálsamo orgánico está diseñado para mantener las pezuñas de tus animales de granja en óptimas condiciones. Formulado con ingredientes orgánicos como aceites naturales y extractos de hierbas, este bálsamo ayuda a hidratar y proteger las pezuñas, previniendo grietas, sequedad y enfermedades relacionadas. Ideal para mantener la salud y el bienestar de tus animales, especialmente aquellos que pasan mucho tiempo en condiciones adversas.', 40.000, 30, 0, '20241027022117.jpg', 1, 7),
(12, 'Repelente orgánico de insectos ', 'Este repelente orgánico de insectos proporciona una protección efectiva contra moscas, mosquitos y otros insectos molestos para tus animales de granja. Formulado con aceites esenciales orgánicos y extractos de plantas, este repelente es seguro y no tóxico, lo que lo hace ideal para su uso en animales sensibles.', 120.000, 12, 0, '20241027022206.jpg', 1, 1),
(13, 'Higiene y frescor para caballos', 'Estabilidad, higiene y frescor para el establo. Neutraliza el amoníaco y rompe las cadenas de infección. Absorbe la humedad y produce un olor fresco.', 13.000, 5, 0, '20241029014719.jpg', 1, 7),
(14, 'Nutrimin', 'Suplemento nutricional vitamínico mineral.', 12.000, 8, 0, '20241029015838.jpg', 1, 1),
(15, 'Completo multivitamínico 16.9 fl oz para animales de granja', 'vitamina B12 Plus Hierro para aves de corral Gallo Suplemento líquido 16.9 fl oz', 10.000, 12, 0, '20241029015928.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `correo` varchar(150) DEFAULT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `clave` varchar(100) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `tipo` int(11) NOT NULL,
  `perfil` varchar(100) DEFAULT NULL,
  `verify` int(11) NOT NULL DEFAULT 0,
  `token` varchar(100) DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `correo`, `nombre`, `apellido`, `clave`, `direccion`, `tipo`, `perfil`, `verify`, `token`, `estado`) VALUES
(1, 'ana.info1999@gmail.com', 'admin', 'ADMINISTRADOR', '$2y$10$YJPEpg7HtOh4dkGwyi2HeeZokS6oJcwi4ttaav/pSDecXaXyuFIGi', 'PERÚ', 1, NULL, 0, NULL, 0),
(11, 'admin@gmail.com', 'Administrador', 'CONICA', '$2y$10$wfD1sJwk26XSKPZ7NToI.ewPfQj8CaPhhIVfIABDz0k0bq/pjQPPe', 'COLOMBIA', 1, NULL, 0, NULL, 1),
(13, 'yuli@gmail.com', 'yuli ortiz', NULL, '$2y$10$ft5DdMuHpg3pdNG7UGDkd.tXU/Mc0KszQ/fGeuq1LvFTtGMGcHeKm', NULL, 2, NULL, 0, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `transaccion` varchar(100) DEFAULT NULL,
  `total` decimal(10,3) NOT NULL,
  `pago` decimal(10,3) NOT NULL DEFAULT 0.000,
  `nombre` varchar(150) DEFAULT NULL,
  `apellido` varchar(150) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  `pais` varchar(50) DEFAULT NULL,
  `cod` varchar(20) DEFAULT NULL,
  `envio` decimal(10,3) DEFAULT 0.000,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `proceso` int(11) NOT NULL DEFAULT 1,
  `tipo` int(11) NOT NULL DEFAULT 1,
  `estado` int(11) NOT NULL DEFAULT 1,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_ventas`
--
ALTER TABLE `detalle_ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_venta` (`id_venta`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `detalle_ventas`
--
ALTER TABLE `detalle_ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

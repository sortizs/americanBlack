-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-10-2018 a las 05:37:10
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `americanblack`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `producto` int(11) NOT NULL,
  `usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `total` int(11) NOT NULL,
  `usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`id`, `fecha`, `total`, `usuario`) VALUES
(2, '2018-10-30 10:33:57', 60000, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id`, `descripcion`) VALUES
(1, 'HOMBRE'),
(2, 'MUJER');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  `genero` int(11) NOT NULL,
  `img` varchar(45) DEFAULT NULL,
  `tipo_producto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `stock`, `valor`, `genero`, `img`, `tipo_producto_id`) VALUES
(2, 'BUSO BLOQUES', 50, 60000, 1, 'buso-bloques.jpg', 5),
(4, 'BLUSA MOSTAZA', 50, 28000, 2, 'BLUSA-MOSTAZA.jpg', 2),
(5, 'BLUSA ROJA FLORES', 50, 35000, 2, 'BLUSA-ROJA-FLORES.jpg', 2),
(6, 'PANTALON GRIS', 50, 60000, 2, 'PANTALON-GRIS.jpg', 3),
(7, 'PANTALON NEGRO ROTOS', 50, 60000, 2, 'PANTALON-NEGRO-ROTOS.jpg', 3),
(8, 'PANTALON BRILLO', 50, 60000, 2, 'PANTALON-BRILLO.jpg', 3),
(9, 'BUSO BLANCO', 50, 73000, 2, 'BUSO-BLANCO.jpg', 5),
(10, 'CAMISA AZUL', 50, 55000, 2, 'CAMISA-AZUL.jpg', 1),
(11, 'BUSO FLORES', 50, 60000, 2, 'BUSO-FLORES.jpg', 5),
(12, 'BUSO MOSTAZA', 50, 58000, 2, 'BUSO-MOSTAZA.jpg', 5),
(13, 'CAMISA MARFIL', 50, 55000, 2, 'CAMISA-MARFIL.jpg', 1),
(14, 'CAMISA NEGRA FLORES', 50, 48000, 1, 'CAMISA-NEGRA-FLORES.jpg', 1),
(15, 'CAMISA POLO BLANCO', 50, 48000, 1, 'CAMISA-POLO-BLANCO.jpg', 1),
(16, 'CAMISA POLO', 50, 48000, 1, 'CAMISA-POLO.jpg', 1),
(17, 'PANATLON AZUL ROTO ', 50, 60000, 1, 'PANATLON-AZUL-ROTO.jpg', 3),
(18, 'PANTALON NEGRO', 50, 60000, 1, 'PANTALON-NEGRO.jpg', 3),
(19, 'PANTALON ROTOS', 50, 60000, 1, 'PANTALON-ROTOS.jpg', 3),
(20, 'SHORT BLANCO', 50, 28000, 1, 'SHORT-BLANCO.jpg', 4),
(21, 'SHORT GRIS MILITAR', 50, 28000, 1, 'SHORT-GRIS-MILITAR.jpg', 4),
(22, 'BUSO MORADO BLOQUES', 50, 60000, 1, 'BUSO-MORADO-BLOQUES.jpg', 5),
(23, 'BUSO MOSTAZA BLOQUES', 50, 60000, 1, 'BUSO-MOSTAZA-BLOQUES.jpg', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_producto`
--

CREATE TABLE `tipo_producto` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_producto`
--

INSERT INTO `tipo_producto` (`id`, `descripcion`) VALUES
(1, ' CAMISETA'),
(2, ' BLUSA'),
(3, ' PANTALON'),
(4, ' SHORT'),
(5, ' BUSO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `descripcion`) VALUES
(1, 'ADMINISTRADOR'),
(2, 'USUARIO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `direccion` varchar(60) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `clave` varchar(45) DEFAULT NULL,
  `tipo_usuario` int(11) NOT NULL,
  `estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `direccion`, `telefono`, `correo`, `clave`, `tipo_usuario`, `estado`) VALUES
(3, 'VANESSA', 'ECHEVERRY', 'CALLE 79A', '123123123', 'VANESSA@MAIL.COM', '8cb2237d0679ca88db6464eac60da96345513964', 1, '1'),
(4, 'LAURA', 'HOLGUIN', 'KRA 95', '1234567890', 'LAURA@MAIL.COM', '8cb2237d0679ca88db6464eac60da96345513964', 2, '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_CARRITO_PRODUCTO1_idx` (`producto`),
  ADD KEY `fk_CARRITO_USUARIO1_idx` (`usuario`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_carrito` (`usuario`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_PRODUCTO_GENERO1_idx` (`genero`),
  ADD KEY `fk_producto_tipo_producto1_idx` (`tipo_producto_id`);

--
-- Indices de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_USUARIO_TIPO_USUARIO_idx` (`tipo_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `fk_CARRITO_PRODUCTO1` FOREIGN KEY (`producto`) REFERENCES `producto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_CARRITO_USUARIO1` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `usuario_carrito` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_PRODUCTO_GENERO1` FOREIGN KEY (`genero`) REFERENCES `genero` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_producto_tipo_producto1` FOREIGN KEY (`tipo_producto_id`) REFERENCES `tipo_producto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_USUARIO_TIPO_USUARIO` FOREIGN KEY (`tipo_usuario`) REFERENCES `tipo_usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

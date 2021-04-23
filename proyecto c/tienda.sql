-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2021 a las 00:42:16
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Precio` decimal(20,0) NOT NULL,
  `Descripcion` text NOT NULL,
  `Imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID`, `Nombre`, `Precio`, `Descripcion`, `Imagen`) VALUES
(1, 'Mouse Ergonómico Microsoft Negro', '169900', 'Mouse Ergonómico Microsoft Negro', 'https://http2.mlstatic.com/D_NQ_NP_2X_747575-MCO44059304520_112020-F.webp'),
(2, 'Mouse Arc Bluetooth Microsoft Verde', '314900', 'Mouse Arc Bluetooth Microsoft Verde', 'https://http2.mlstatic.com/D_NQ_NP_741026-MCO45228593092_032021-O.webp'),
(3, 'Teclado gamer Weibo WB-539 QWERTY español España negro con luz 3 colores', '43900', 'Teclado gamer Weibo WB-539 QWERTY español España negro con luz 3 colores', 'https://http2.mlstatic.com/D_NQ_NP_2X_960273-MLA45315694627_032021-F.webp'),
(4, 'Pc Torre Gamer Ryzen 3 3200g A320m Ssd 240gb Ram 8gb Mon 22', '2099900', 'Pc Torre Gamer Ryzen 3 3200g A320m Ssd 240gb Ram 8gb Mon 22', 'https://http2.mlstatic.com/D_NQ_NP_2X_898762-MCO44651580400_012021-F.webp'),
(5, 'Realme 6 Dual SIM 128 GB blanco cometa 4 GB RAM', '689900', 'Realme 6 Dual SIM 128 GB blanco cometa 4 GB RAM', 'https://http2.mlstatic.com/D_NQ_NP_2X_782697-MLA44156542820_112020-F.webp'),
(6, 'iPhone 11 128 GB Morado', '2820000', 'iPhone 11 128 GB Morado', 'https://http2.mlstatic.com/D_NQ_NP_2X_933986-MLA44514926865_012021-F.webp'),
(7, 'Cámara Deportiva Gopro Hero 9 Black - Tienda Oficial', '1949900', 'Cámara Deportiva Gopro Hero 9 Black - Tienda Oficial', 'https://http2.mlstatic.com/D_NQ_NP_2X_967690-MCO43489334543_092020-F.webp'),
(8, 'Camara Go Pro Con Control Remoto 4 K 16mp - Dragon Touch', '247900', 'Camara Go Pro Con Control Remoto 4 K 16mp - Dragon Touch', 'https://http2.mlstatic.com/D_NQ_NP_757807-MCO44445255668_122020-O.webp');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `id` int(11) NOT NULL,
  `email` varchar(32) NOT NULL,
  `telefono` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre`, `apellido`, `id`, `email`, `telefono`) VALUES
('silfredo', 'orozco', 12623364, 'area4@gmail.com', 2147483647),
('eduardo', 'orozco', 123456789, 'eduardo@hotmail.com', 2147483647),
('leonardo', 'pardo', 123456789, 'leo@hotmail.com', 2147483647),
('ROGGER', 'OROZCO', 987654321, 'roggerorozco04@gmail.com', 2147483647),
('silfredo', 'orozco', 1083559993, 'silfredoantonio1991@hotmail.com', 2147483647),
('YADIRIS', 'MEJIA', 1002022687, 'yadis@hotmail.com', 2147483647),
('yancarlos', 'sanchez', 1234567890, 'yancarlos@hotmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `ID` int(11) NOT NULL,
  `ClaveTransacciones` varchar(250) NOT NULL,
  `PaypalDatos` text NOT NULL,
  `Fecha` datetime NOT NULL,
  `Correo` varchar(5000) NOT NULL,
  `Total` decimal(60,0) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`ID`, `ClaveTransacciones`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `status`) VALUES
(1, '123456789', '', '2021-04-23 16:54:49', 'silfredoantonio1991@hotmail.com', '7000000', 'pendiente'),
(2, '123456789', '', '2021-04-23 16:54:49', 'silfredoantonio1991@hotmail.com', '7000000', 'pendiente'),
(3, 'js4llkikdi5c353pegd5qefrjs', '', '2021-04-23 17:17:57', 'silfredoantonio1991@hotmail.com', '169900', 'pendiente'),
(4, 'js4llkikdi5c353pegd5qefrjs', '', '2021-04-23 17:24:55', 'yadirispao@hotmail.com', '4219700', 'pendiente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

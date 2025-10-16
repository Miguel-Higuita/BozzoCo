-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2025 a las 04:15:48
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
-- Base de datos: `bozzo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio`
--

CREATE TABLE `inicio` (
  `id_inicio` int(11) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `servicio` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `descripcion` longtext NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `inicio`
--

INSERT INTO `inicio` (`id_inicio`, `imagen`, `servicio`, `usuario`, `descripcion`, `creado`) VALUES
(5, 'a39430bd77d77dba5464763b1eb7867d.jpg', 5, 2, 'pasar pasar pasar pasar pasar pasar pasar pasar pasar pasar pasar pasar pasar pasar pasar pasar pasar pasar pasar pasar pasar pasar pasar pasar ', '2025-10-07 04:44:33'),
(6, '3739a8a92550de77186f2bc0e13331ad.jpg', 3, 3, 'martes gvfhfgjhhhj hfgjghkjh gjhfgjkghkfg gjhdhjkhfgk gjjkdf hg gjhdhjkhfgk gjjkdf hg gjhdhjkhfgk gjjkdf hg gjhdhjkhfgk gjjkdf hg gjhdhjkhfgk gjjkdf h', '2025-10-07 20:06:16'),
(7, 'be09d5c281e1ecb83362a046301007db.jpg', 2, 8, 'martes 2 g gjhdhjkhfgk gjjkdf hg gjhdhjkhfgk gjjkdf hg gjhdhjkhfgk gjjkdf hg gjhdhjkhfgk gjjkdf hg gjhdhjkhfgk gjjkdf hg gjhdhjkhfgk gjjkdf hg gjhdhjkhfgk gjjkdf hg gjhdhjkhfgk gjjkdf hg gjhdhjkhfgk gjjkdf hg gjhdhjkhfgk gjjkdf h', '2025-10-07 20:07:45'),
(8, 'd1d05164d53960ac02bb2da021469db1.jpg', 3, 8, 'Miercoles madrugada j fghdhfgj hgfjhjdg fgjhgjkfghk fgjghkghk fgjhdgkghk jghkgfkh gjghkgkfk jghkk fsdgfdhgj fghdhfgj hgfjhjdg fgjhgjkfghk fgjghkghk fgjhdgkghk jghkgfkh gjghkgkfk jghkk', '2025-10-08 07:03:04'),
(9, 'b85d44335b63b0eb31c4566ba6b6efcb.jpg', 3, 3, 'asddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', '2025-10-11 02:55:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id_servicio` int(11) NOT NULL,
  `nombre_servicio` varchar(45) NOT NULL,
  `descripcion_servicio` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id_servicio`, `nombre_servicio`, `descripcion_servicio`) VALUES
(1, 'Plomeria', 'Ofrecemos soluciones rápidas, seguras y garantizadas para todo tipo de instalaciones y reparaciones hidráulicas. Nuestro equipo de plomeros capacitados atiende desde fugas menores hasta proyectos completos de fontanería en hogares, oficinas y comercios.'),
(2, 'Vigilancia', 'Brindamos soluciones integrales en seguridad física para la protección de personas, bienes e instalaciones. Nuestro personal de vigilancia está altamente capacitado para garantizar un entorno seguro, confiable y controlado en todo momento.'),
(3, 'Aseo', 'Ofrecemos soluciones profesionales en limpieza y mantenimiento para hogares, oficinas, empresas e instituciones. Nuestro personal está capacitado para garantizar espacios limpios, ordenados e higiénicos, mejorando la comodidad y el bienestar de quienes los disfrutan.'),
(4, 'Mecánica', 'Brindamos servicios de mecánica general y especializada para vehículos. Realizamos diagnóstico, reparación y mantenimiento preventivo y correctivo, asegurando el buen funcionamiento y la seguridad de su automóvil.'),
(5, 'Electricidad', 'Ofrecemos servicios eléctricos profesionales para instalaciones residenciales, comerciales e industriales. Realizamos reparación, instalación y mantenimiento de sistemas eléctricos con garantía y cumplimiento de normas de seguridad.'),
(6, 'Carpinteria', ''),
(7, 'Conductor', ''),
(8, 'Repostería', ''),
(9, 'Reparación de computadores', ''),
(10, 'Organización de eventos', ''),
(11, 'Entrenamiento personal', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `celular` varchar(10) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `nick` varchar(45) NOT NULL,
  `password` char(60) NOT NULL,
  `perfil` varchar(24) NOT NULL,
  `descripcion` longtext NOT NULL,
  `creacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `celular`, `correo`, `nick`, `password`, `perfil`, `descripcion`, `creacion`) VALUES
(1, 'Carlos', 'Ramirez', '3141234567', 'carlos.ramirez@mail.com', 'CarlosA', '12345', 'admin', '', '2025-10-09 03:16:50'),
(2, 'Miguel', 'Gómez', '3128524121', 'Miguel.Angel@gmail.com', 'mig123', '1234', '0', 'Realiza instalaciones, reparaciones y mantenimiento de sistemas de agua y desagüe en hogares y empresas.', '2025-10-16 02:00:50'),
(3, 'Juan ', 'Gonzales', '3021568641', 'juan.gonzales@hotmail.com', 'juango', '5678', '0', 'Se encarga de la seguridad de propiedades, control de accesos y monitoreo de actividades sospechosas.', '2025-10-16 02:02:02'),
(4, 'Victor ', 'Herrera', '3131213421', 'victor.herrera@gmail.com', 'Victorlo', '8521', '0', 'Fabrica, repara y da mantenimiento a muebles, puertas y estructuras de madera.', '2025-10-16 02:02:57'),
(5, 'Juan ', 'Villegas', '3242562312', 'Juan.Villegas@gmail.com', 'juavi', '4567', '0', 'Instala y repara sistemas eléctricos, realiza mantenimiento preventivo y atiende emergencias eléctricas.', '2025-10-16 02:03:27'),
(6, 'Andres ', 'Perez', '3026589545', 'Andres.Perez@hotmail.com', 'andrp', '6547', '0', 'Ofrece servicios de transporte privado o empresarial, garantizando puntualidad y seguridad.', '2025-10-16 02:04:27'),
(7, 'Sandra ', 'Aurelia', '3185462302', 'Sandra.Aurelia@hotmail.com', 'sandrue', '9874', '0', 'Limpia y mantiene espacios residenciales o comerciales, asegurando ambientes ordenados y saludables.', '2025-10-16 02:04:59'),
(8, 'Camila', 'Restrepo', '3104567890', 'camila.restrepo@servicor.com ', 'camis', '3214', '0', 'Camila prepara y vende postres como brownies, galletas y tortas  por encargo.', '2025-10-16 02:06:18'),
(9, 'Julián', 'Cifuentes', '3209876543', 'julian.cifuentes@techcol.com ', 'juliaci', '9823', '0', 'Julián ofrece mantenimiento y reparación de equipos, instalación de software y recuperación de datos.', '2025-10-16 02:06:56'),
(10, 'Valeria', 'Montoya', '3001234567', 'valeria.montoya@eventosya.com ', 'valemonto', '6512', '0', 'Valeria coordina bodas, conferencias y eventos corporativos, desde la logística hasta la decoración.', '2025-10-16 02:07:27'),
(11, 'Esteban', 'Quintero', '3157418520', 'esteban.quintero@fitzone.co', 'estebman', '7777', '0', 'Esteban diseña rutinas de ejercicio personalizadas y da seguimiento a metas de salud y bienestar.', '2025-10-16 02:09:55');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inicio`
--
ALTER TABLE `inicio`
  ADD PRIMARY KEY (`id_inicio`),
  ADD KEY `FK_Servicios` (`servicio`),
  ADD KEY `FK_Usuario` (`usuario`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inicio`
--
ALTER TABLE `inicio`
  MODIFY `id_inicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `inicio`
--
ALTER TABLE `inicio`
  ADD CONSTRAINT `FK_Servicios` FOREIGN KEY (`servicio`) REFERENCES `servicio` (`id_servicio`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_Usuario` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

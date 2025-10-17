-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2025 a las 02:41:51
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

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
(1, 'e14ce4583b1dfd61b66114634c2aebcf.jpg', 5, 1, 'Profesional responsable de la instalación, mantenimiento y reparación de sistemas eléctricos en entornos residenciales, comerciales o industriales. Garantiza la correcta distribución de energía, la seguridad de las instalaciones y el cumplimiento de normas técnicas y de seguridad eléctrica. Realiza diagnósticos de fallas, montaje de tableros eléctricos, cableado, conexión de equipos y mantenimiento preventivo. Colabora con otros profesionales para asegurar la eficiencia y funcionalidad de los sistemas eléctricos.', '2025-10-17 00:03:27'),
(2, '6d52d7fa71c74b8fbbaba1179ae72058.jpg', 3, 2, 'Empleado de aseo encargado de mantener limpias y ordenadas las instalaciones, asegurando un ambiente higiénico y seguro. Realiza limpieza de pisos, mobiliario, baños y áreas comunes, manejo adecuado de productos y equipos de limpieza, recolección de residuos y disposición correcta de materiales. Cumple con normas de higiene y seguridad, contribuyendo al bienestar de empleados y visitantes.', '2025-10-17 00:03:37'),
(3, 'a7d2b0be048b1f449afb32ddc17e21c5.jpg', 2, 4, 'Empleado de vigilancia encargado de proteger personas, bienes e instalaciones, garantizando la seguridad y el orden. Supervisa accesos, controla el ingreso y salida de visitantes, realiza rondas de inspección, monitorea cámaras y detecta situaciones sospechosas. Cumple protocolos de seguridad, responde a emergencias y colabora con el equipo para prevenir riesgos y mantener un entorno seguro y protegido.', '2025-10-17 00:03:48'),
(4, 'a1cf29d90d0d88801b60914693df8aec.jpg', 3, 8, 'Empleada de aseo responsable de mantener limpias y ordenadas las instalaciones, asegurando higiene y salubridad. Realiza limpieza de pisos, oficinas, baños y áreas comunes, manejo adecuado de productos y equipos de limpieza, y disposición correcta de residuos. Colabora con el equipo para mantener un entorno seguro y saludable, cumpliendo normas de higiene y protocolos internos.', '2025-10-17 00:04:15'),
(5, 'a4acffab351bdcad246df8080b8de81c.jpg', 3, 5, 'Profesional de aseo proactivo, encargado de mantener espacios limpios, ordenados y seguros. Realiza limpieza de oficinas, baños y áreas comunes, maneja productos y equipos de manera eficiente y asegura la correcta disposición de residuos. Contribuye al bienestar general, promoviendo un entorno higiénico, organizado y agradable para empleados y visitantes, cumpliendo siempre con normas de seguridad e higiene.', '2025-10-17 00:04:43'),
(6, 'a85cf70f122c56ca12a92e77317da2cc.jpg', 6, 6, 'Carpintero experto en la fabricación, montaje y reparación de muebles, estructuras y acabados de madera. Maneja herramientas manuales y eléctricas con precisión, interpreta planos y diseños, garantiza la calidad de cada proyecto y trabaja de manera segura. Contribuye a ambientes funcionales y estéticamente atractivos, cumpliendo tiempos de entrega y normas de seguridad en todo momento.', '2025-10-17 00:04:57'),
(7, 'cf85989ed9832db5bcf96c8a4468d825.jpg', 6, 9, 'Especialista en acabados de madera, responsable de lijado, barnizado, pulido y pintura de muebles y estructuras. Asegura superficies uniformes y resistentes, siguiendo especificaciones de diseño y estándares de calidad. Trabaja con precisión y eficiencia, aplicando técnicas modernas y tradicionales para realzar la estética de cada proyecto, garantizando durabilidad y satisfacción del cliente.', '2025-10-17 00:05:13'),
(8, 'fd3742cc3199f5a4921186cf0a0564de.jpg', 6, 11, 'Encargado de la instalación de muebles, puertas, ventanas y estructuras de madera en obras residenciales o comerciales. Interpreta planos, ajusta piezas y realiza ensamblajes precisos, asegurando funcionalidad y acabado impecable. Trabaja en equipo, mantiene herramientas organizadas y respeta normas de seguridad, contribuyendo a proyectos terminados de forma eficiente y dentro de los plazos establecidos.', '2025-10-17 00:05:23'),
(9, '7c20742831aab4505b005407f15103ba.jpg', 11, 10, 'Entrenadora personal apasionada por ayudar a sus clientes a alcanzar sus metas de forma saludable y efectiva. Experta en diseño de rutinas personalizadas, entrenamiento funcional y nutrición básica, combina motivación y conocimiento técnico para mejorar fuerza, resistencia y bienestar general. Se enfoca en resultados sostenibles, adaptando cada plan a las necesidades individuales y promoviendo hábitos de vida activos y equilibrados.', '2025-10-17 00:13:14'),
(10, 'bf3e12ce1d8042f47bb813c115838c10.jpg', 9, 4, 'Técnico en mantenimiento de sistemas con experiencia en instalación, configuración y reparación de hardware y software. Especializado en optimización de equipos, resolución de fallas y soporte técnico a usuarios. Capacitado para garantizar el funcionamiento eficiente de sistemas informáticos, redes y dispositivos tecnológicos, aplicando soluciones rápidas y efectivas que aseguran la continuidad operativa y la seguridad de la información.', '2025-10-17 00:16:08'),
(11, 'f42dcc43b1d239e72c9a86be43925267.jpg', 3, 14, 'Empleada de aseo responsable y comprometido con mantener espacios limpios, ordenados e higiénicos. Experto en limpieza de oficinas, áreas comunes y superficies, utilizando productos y herramientas de manera segura y eficiente. Se enfoca en la organización, el cumplimiento de normas de higiene y la atención a los detalles, asegurando ambientes agradables y saludables para todos los usuarios y colaboradores.', '2025-10-17 00:30:09');

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
(11, 'Esteban', 'Quintero', '3157418520', 'esteban.quintero@fitzone.co', 'estebman', '7777', '0', 'Esteban diseña rutinas de ejercicio personalizadas y da seguimiento a metas de salud y bienestar.', '2025-10-16 02:09:55'),
(12, 'Valentina', 'Gómez', '3241234567', 'valentina.gomez@mail.com', 'ValenG', 'abc123', '0', '', '2025-10-16 15:00:00'),
(13, 'Sebastián', 'López', '3252345678', 'sebastian.lopez@mail.com', 'SebasL', 'pass456', '0', '', '2025-10-16 15:05:00'),
(14, 'Alejandra', 'Martínez', '3263456789', 'alejandra.martinez@mail.com', 'AleM', 'qwerty', '0', '', '2025-10-16 15:10:00'),
(15, 'Fernando', 'Ramírez', '3274567890', 'fernando.ramirez@mail.com', 'FerR', 'xyz789', '0', '', '2025-10-16 15:15:00'),
(16, 'Isabella', 'Díaz', '3285678901', 'isabella.diaz@mail.com', 'IsaD', '123abc', '0', '', '2025-10-16 15:20:00'),
(17, 'Mateo', 'Suárez', '3296789012', 'mateo.suarez@mail.com', 'MatS', '456def', '0', '', '2025-10-16 15:25:00'),
(18, 'Camila', 'Rojas', '3307890123', 'camila.rojas@mail.com', 'CamR', '789ghi', '0', '', '2025-10-16 15:30:00'),
(19, 'Diego', 'Vargas', '3318901234', 'diego.vargas@mail.com', 'DieV', 'pass123', '0', '', '2025-10-16 15:35:00'),
(20, 'Natalia', 'Castro', '3329012345', 'natalia.castro@mail.com', 'NatC', 'abc789', '0', '', '2025-10-16 15:40:00'),
(21, 'Andrés', 'Pérez', '3330123456', 'andres.perez@mail.com', 'AndP', 'def456', '0', '', '2025-10-16 15:45:00'),
(22, 'Laura', 'García', '3341234567', 'laura.garcia@mail.com', 'LauG', 'ghi123', '0', '', '2025-10-16 15:50:00'),
(23, 'Julián', 'Hernández', '3352345678', 'julian.hernandez@mail.com', 'JulH', 'jkl456', '0', '', '2025-10-16 15:55:00'),
(24, 'Sara', 'Morales', '3363456789', 'sara.morales@mail.com', 'SarM', 'mno789', '0', '', '2025-10-16 16:00:00'),
(25, 'Ricardo', 'Torres', '3374567890', 'ricardo.torres@mail.com', 'RicT', 'pqr123', '0', '', '2025-10-16 16:05:00'),
(26, 'Daniela', 'Ramírez', '3385678901', 'daniela.ramirez@mail.com', 'DanR', 'stu456', '0', '', '2025-10-16 16:10:00'),
(27, 'Santiago', 'Martínez', '3396789012', 'santiago.martinez@mail.com', 'SanM', 'vwx789', '0', '', '2025-10-16 16:15:00'),
(28, 'Andrea', 'López', '3407890123', 'andrea.lopez@mail.com', 'AndL', 'yz1234', '0', '', '2025-10-16 16:20:00'),
(29, 'José', 'Gómez', '3418901234', 'jose.gomez@mail.com', 'JosG', 'abc567', '0', '', '2025-10-16 16:25:00'),
(30, 'Camilo', 'Díaz', '3429012345', 'camilo.diaz@mail.com', 'CamD', 'def890', '0', '', '2025-10-16 16:30:00'),
(31, 'Mariana', 'Vargas', '3430123456', 'mariana.vargas@mail.com', 'MarV', 'ghi234', '0', '', '2025-10-16 16:35:00');

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
  MODIFY `id_inicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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

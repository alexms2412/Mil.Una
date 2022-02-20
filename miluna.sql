-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-02-2022 a las 16:26:17
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `miluna`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

CREATE TABLE `contenido` (
  `idContenido` int(11) NOT NULL,
  `tipo_contenido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion_contenido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enlace_contenido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contenido`
--

INSERT INTO `contenido` (`idContenido`, `tipo_contenido`, `descripcion_contenido`, `enlace_contenido`) VALUES
(1, 'vewv', 'vrtvw', 'IMG-2440-620f8fd5a4eef.jpg'),
(2, 'foto', 'fotoo', '8-copia-62125b51b88cb.jpg'),
(3, 'foto', 'fotoo', 'IMG-2525-621239d7ed985.jpg'),
(4, 'foto', 'fotoo', 'IMG-2548-621239ee1f8ed.jpg'),
(6, 'foto', 'foto2', '9-62125ba2adfb5.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20220214182802', '2022-02-18 11:39:05', 292);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleo`
--

CREATE TABLE `empleo` (
  `idEmpleo` int(11) NOT NULL,
  `nombre_empleo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `empresa_empleo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enlace_empleo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empleo`
--

INSERT INTO `empleo` (`idEmpleo`, `nombre_empleo`, `empresa_empleo`, `enlace_empleo`) VALUES
(1, 'Team Assistant , Atención y gestión de tareas administrativas y back office', 'Engel', 'https://es.trabajo.org/oferta-1266-20220219-5cca60ec3155f7082cf95543ab973e52?utm_campaign=google_jobs_apply&utm_source=google_jobs_apply&utm_medium=organic'),
(2, 'GESTOR/A PUNTO VENTAS -VALENCIA', 'Adeco', 'https://www.adecco.es/oferta-trabajo/46301-gestora-punto-ventas-valencia?ID=5d17445b-27ba-412f-b915-890494b9b36f&utm_campaign=google_jobs_apply&utm_source=google_jobs_apply&utm_medium=organic'),
(3, 'Azafatas imagen valencia', 'Azafatas', 'https://es.bebee.com/job/20220215-f9cff513f795522cc6dc3b204a2a8032?utm_campaign=google_jobs_apply&utm_source=google_jobs_apply&utm_medium=organic');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `idEvento` int(11) NOT NULL,
  `tipo_evento` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre_evento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion_evento` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha_evento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`idEvento`, `tipo_evento`, `nombre_evento`, `descripcion_evento`, `fecha_evento`) VALUES
(1, 'Charla', 'Crea tu CV', 'Maria Lopez encargada de recursos humanos, realizará una presentación de como hacer tu propio CV.', '2022-04-05'),
(2, 'Visita', 'Visita Museo Ciudad de las Artes y las Ciencias', 'Pasar el dia paseando por la zona de la ciudad de las artes y las ciencias de valencia. Se entra al museo de ciencia a primera hora de la mañana, la visita al museo está prevista que tenga una duración de 4h. Al finalizar la visita nos tomaremos algo.', '2022-06-05'),
(3, 'Charla', 'Crea tu CV', 'Maria Lopez encargada de recursos humanos, realizará una presentación de como hacer tu propio CV.', '2022-01-02'),
(4, 'Visita', 'Visita Museo Ciudad de las Artes y las Ciencias', 'Pasar el dia paseando por la zona de la ciudad de las artes y las ciencias de valencia. Se entra al museo de ciencia a primera hora de la mañana, la visita al museo está prevista que tenga una duración de 4h. Al finalizar la visita nos tomaremos algo.', '2022-05-13'),
(5, 'Visita', 'Visita Museo Ciudad de las Artes y las Ciencias', 'Pasar el dia paseando por la zona de la ciudad de las artes y las ciencias de valencia. Se entra al museo de ciencia a primera hora de la mañana, la visita al museo está prevista que tenga una duración de 4h. Al finalizar la visita nos tomaremos algo.', '2023-06-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`roles`)),
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correo_usuario` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `roles`, `password`, `nombre`, `apellidos`, `correo_usuario`) VALUES
(1, 'admin', '[\"ROLE_ADMIN\"]', '$2y$13$IvkofeogqJ32v0GSLYLgS.XX/.Z.JHseDn4X9YaiN/gvODy.oJ3Wu', NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contenido`
--
ALTER TABLE `contenido`
  ADD PRIMARY KEY (`idContenido`);

--
-- Indices de la tabla `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `empleo`
--
ALTER TABLE `empleo`
  ADD PRIMARY KEY (`idEmpleo`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`idEvento`);

--
-- Indices de la tabla `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contenido`
--
ALTER TABLE `contenido`
  MODIFY `idContenido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `empleo`
--
ALTER TABLE `empleo`
  MODIFY `idEmpleo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `idEvento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

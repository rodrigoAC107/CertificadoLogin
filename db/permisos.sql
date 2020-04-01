-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-04-2020 a las 06:32:37
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `permisos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `certificados`
--

CREATE TABLE `certificados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `organizacion_id` bigint(20) NOT NULL,
  `nombre_empleado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido_empleado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dni_empleado` bigint(20) NOT NULL,
  `cuit_cuil_empleado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_cuit_cuil_empleado` bigint(20) NOT NULL,
  `telefono_empleado` bigint(20) NOT NULL,
  `direccion_empleado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hora_ingreso_empleado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hora_salida_empleado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dias_laborables_empleado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `certificados`
--

INSERT INTO `certificados` (`id`, `organizacion_id`, `nombre_empleado`, `apellido_empleado`, `dni_empleado`, `cuit_cuil_empleado`, `numero_cuit_cuil_empleado`, `telefono_empleado`, `direccion_empleado`, `hora_ingreso_empleado`, `hora_salida_empleado`, `dias_laborables_empleado`, `created_at`, `updated_at`) VALUES
(4, 41529284, 'Rodrigo Gabriel', 'Cruz', 123123123, 'CUIT', 123123123, 3874150562, 'La Rioja Argentina.', '06:00', '06:00', 'asdasdasd', '2020-04-01 04:31:30', '2020-04-01 04:31:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_03_31_201039_create_organizacion_table', 1),
(4, '2020_03_31_201054_create_certificados_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organizacion`
--

CREATE TABLE `organizacion` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `razon_social_organizacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion_organizacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion_organizacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cuit_organizacion` bigint(20) NOT NULL,
  `rubro_organizacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actividad_organizacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono_organizacion` bigint(20) NOT NULL,
  `email_organizacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inciso_organizacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `organizacion`
--

INSERT INTO `organizacion` (`id`, `razon_social_organizacion`, `descripcion_organizacion`, `direccion_organizacion`, `cuit_organizacion`, `rubro_organizacion`, `actividad_organizacion`, `telefono_organizacion`, `email_organizacion`, `inciso_organizacion`, `created_at`, `updated_at`) VALUES
(1, 'rasd', 'asdasd', 'La Rioja Argentina', 41529284, 'asdasd', 'asdasd', 3874150562, 'rodrigoacosta1115@gmail.com', '1', '2020-04-01 01:35:46', '2020-04-01 02:11:47'),
(3, 'rasd', 'asdasd', 'La Rioja', 41529285, 'asdasd', 'asdasd', 3874150562, 'rodrigoacosta115@gmail.com', '1', '2020-04-01 04:22:06', '2020-04-01 04:23:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cuit_organizacion` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `cuit_organizacion`, `name`, `email`, `email_verified_at`, `password`, `activo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 41529284, 'Rodrigo Gabriel Acosta Cruz', 'rodrigoacosta1115@gmail.com', NULL, '$2y$10$.rPXmxdDEBoEfEH8J8JndeTQOgdpe7okY.PvRoU9dGUcf80Guvyoe', 1, NULL, '2020-04-01 01:35:24', '2020-04-01 01:35:24'),
(2, 41529285, 'Rodrigo', 'admin@admin.com', NULL, '$2y$10$CcTEYKwptrbXPT/1WW1d0.aXFLj94X8vFuu/3jwjL0QZQ.TaQDFoi', 1, NULL, '2020-04-01 04:20:45', '2020-04-01 04:20:45');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `certificados`
--
ALTER TABLE `certificados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `organizacion`
--
ALTER TABLE `organizacion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `organizacion_email_organizacion_unique` (`email_organizacion`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `certificados`
--
ALTER TABLE `certificados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `organizacion`
--
ALTER TABLE `organizacion`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

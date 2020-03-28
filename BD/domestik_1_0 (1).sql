-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-03-2020 a las 12:27:22
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `domestik_1.0`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bancos`
--

CREATE TABLE `bancos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `bancos`
--

INSERT INTO `bancos` (`id`, `nombre`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'BCP', '2020-03-24 05:00:25', '2020-03-24 05:00:25', NULL),
(2, 'Interbank', '2020-03-24 05:00:32', '2020-03-24 05:00:32', NULL),
(3, 'BBVA Continetal', '2020-03-24 05:00:38', '2020-03-24 05:00:38', NULL),
(4, 'Banco de la Nación', '2020-03-24 05:00:48', '2020-03-24 05:00:48', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_nac` date NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logins_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `direccion`, `telefono`, `fecha_nac`, `correo`, `logins_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Edinson', 'Oliva Remigio', 'Bolívar 2054', '987654321', '1991-11-19', 'edinsonoliva@gmail.com', 7, '2020-03-24 10:36:21', '2020-03-24 10:36:21', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes_pagos`
--

CREATE TABLE `clientes_pagos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nro_boleta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `monto` decimal(8,2) NOT NULL,
  `clientes_id` bigint(20) UNSIGNED NOT NULL,
  `pagos_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes_servicios`
--

CREATE TABLE `clientes_servicios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `clientes_id` bigint(20) UNSIGNED NOT NULL,
  `servicios_id` bigint(20) UNSIGNED NOT NULL,
  `clientes_pagos_id` bigint(20) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta_bancarias`
--

CREATE TABLE `cuenta_bancarias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nro_cuenta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bancos_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cuenta_bancarias`
--

INSERT INTO `cuenta_bancarias` (`id`, `nro_cuenta`, `bancos_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '41534853346097', 1, '2020-03-24 05:00:59', '2020-03-24 05:00:59', NULL),
(2, '04055510623', 4, '2020-03-24 05:01:54', '2020-03-24 05:01:54', NULL),
(3, '2003131966151', 2, '2020-03-24 05:02:25', '2020-03-24 05:02:25', NULL),
(4, '001104420200104572', 3, '2020-03-24 05:03:31', '2020-03-24 05:03:31', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `e_nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_nac` date NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_empleados_id` bigint(20) UNSIGNED NOT NULL,
  `logins_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `e_nombre`, `apellido`, `direccion`, `telefono`, `fecha_nac`, `correo`, `tipo_empleados_id`, `logins_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Gerson', 'Oliva Remigio', 'Bolívar 2054', '969281666', '1995-10-03', 'gerssonoliva@gmail.com', 2, 4, '2020-03-23 22:48:59', '2020-03-23 22:48:59', NULL),
(2, 'Brayan', 'Oliva Remigio', 'Bolívar 2054, Lambayeque', '987654321', '1994-04-14', 'brayannoliva@gmail.com', 3, 5, '2020-03-23 22:52:33', '2020-03-23 22:52:33', NULL),
(3, 'Milagros', 'Sánchez Muñoz', 'Demetrio Acosta 801', '987654321', '1992-10-19', 'milisanchez@gmail.com', 3, 6, '2020-03-24 05:47:30', '2020-03-24 05:47:30', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logins`
--

CREATE TABLE `logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `logins`
--

INSERT INTO `logins` (`id`, `usuario`, `contra`, `foto`, `estado`, `descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', '123456', NULL, 'A', NULL, '2020-03-23 02:12:40', '2020-03-23 02:12:40', NULL),
(2, 'gerson', '123456', NULL, 'A', NULL, '2020-03-23 22:44:03', '2020-03-23 22:44:03', NULL),
(3, 'gerson', '123456', NULL, 'A', NULL, '2020-03-23 22:45:23', '2020-03-23 22:45:23', NULL),
(4, 'gerson', '123456', NULL, 'A', NULL, '2020-03-23 22:48:59', '2020-03-23 22:48:59', NULL),
(5, 'brayan', '123456', NULL, 'A', NULL, '2020-03-23 22:52:33', '2020-03-23 22:52:33', NULL),
(6, 'mili', '123456', NULL, 'A', NULL, '2020-03-24 05:47:30', '2020-03-24 05:47:30', NULL),
(7, 'edinson', '123456', NULL, 'A', NULL, '2020-03-24 10:36:21', '2020-03-24 10:36:21', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2020_03_21_040257_add_deleted_at_column_to_tipo_empleados_tables', 2),
(23, '2020_03_21_053053_create_pago_servicios_table', 8),
(24, '2020_03_21_053114_add_deleted_at_column_to_pago_servicios_tables', 8),
(166, '2014_10_12_000000_create_users_table', 9),
(167, '2014_10_12_100000_create_password_resets_table', 9),
(168, '2019_08_19_000000_create_failed_jobs_table', 9),
(169, '2020_03_11_182117_create_bancos_table', 9),
(170, '2020_03_12_212644_create_cuentas_bancarias_table', 9),
(171, '2020_03_13_213137_add_deleted_at_column_to_banco_tables', 9),
(172, '2020_03_13_213220_add_deleted_at_column_to_cuenta_bancaria_tables', 9),
(173, '2020_03_21_025528_create_proveedores_table', 9),
(174, '2020_03_21_032304_add_deleted_at_column_to_proveedores_tables', 9),
(175, '2020_03_21_032534_create_productos_table', 9),
(176, '2020_03_21_032906_add_deleted_at_column_to_productos_tables', 9),
(177, '2020_03_21_035856_create_tipo_empleados_table', 9),
(178, '2020_03_21_040621_create_logins_table', 9),
(179, '2020_03_21_041520_add_deleted_at_column_to_logins_tables', 9),
(180, '2020_03_21_043528_create_empleados_table', 9),
(181, '2020_03_21_050323_add_deleted_at_column_to_empleados_tables', 9),
(182, '2020_03_21_051826_add_deleted_at_column_to_tipo_empleados_tables', 9),
(183, '2020_03_21_051931_create_clientes_table', 9),
(184, '2020_03_21_051948_add_deleted_at_column_to_clientes_tables', 9),
(185, '2020_03_21_052220_create_pagos_table', 9),
(186, '2020_03_21_052236_add_deleted_at_column_to_pagos_tables', 9),
(187, '2020_03_21_053053_create_clientes_pagos_table', 9),
(188, '2020_03_21_053114_add_deleted_at_column_to_clientes_pagos_tables', 9),
(189, '2020_03_21_053711_create_servicios_table', 9),
(190, '2020_03_21_053725_add_deleted_at_column_to_servicios_tables', 9),
(191, '2020_03_21_054005_create_clientes_servicios_table', 9),
(192, '2020_03_21_054023_add_deleted_at_column_to_clientes_servicios_tables', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_ing` date NOT NULL,
  `costo` decimal(8,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `proveedores_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `p_nombre`, `fecha_ing`, `costo`, `stock`, `proveedores_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Ariel 25kg', '2020-03-24', '25.00', 234, 2, '2020-03-24 05:09:15', '2020-03-24 05:09:15', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `nombre`, `ruc`, `direccion`, `telefono`, `correo`, `titular`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Ilusionistas SAC', '10733905285', 'Bolívar 2054', '969281666', 'gerssonoliva@gmail.com', 'Gerson Oliva Remigio', '2020-03-24 05:06:45', '2020-03-24 05:06:45', NULL),
(2, 'P&G', '20733385285', 'Bolívar 2054, Lambayeque', '987654321', 'p&g@gmail.com', 'Milagros Sánchez Muñoz', '2020-03-24 05:07:43', '2020-03-24 05:07:43', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `costo` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_empleados`
--

CREATE TABLE `tipo_empleados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_empleados`
--

INSERT INTO `tipo_empleados` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Administrador', NULL, '2020-03-23 08:07:30', '2020-03-23 08:07:30', NULL),
(2, 'Contador', NULL, '2020-03-23 08:19:15', '2020-03-23 08:19:15', NULL),
(3, 'Domestik', NULL, '2020-03-23 08:19:40', '2020-03-23 08:19:40', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Gerson', 'admin@domestik.com', NULL, '$2y$10$XB.ZHkWYAhk8lVsBi2ZDle.7usRiAGlFAklCyICqzX6mbEsX8ZCuW', 'xzjgiQz2U2Vf79ZaQWSw6NDwwGng0P0Kn91Ti4jG1g2WKsp1M1TM9T0hE8L5', '2020-03-25 10:38:37', '2020-03-25 10:38:37');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bancos`
--
ALTER TABLE `bancos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clientes_logins_id_foreign` (`logins_id`);

--
-- Indices de la tabla `clientes_pagos`
--
ALTER TABLE `clientes_pagos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clientes_pagos_clientes_id_foreign` (`clientes_id`),
  ADD KEY `clientes_pagos_pagos_id_foreign` (`pagos_id`);

--
-- Indices de la tabla `clientes_servicios`
--
ALTER TABLE `clientes_servicios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clientes_servicios_clientes_id_foreign` (`clientes_id`),
  ADD KEY `clientes_servicios_servicios_id_foreign` (`servicios_id`),
  ADD KEY `clientes_servicios_clientes_pagos_id_foreign` (`clientes_pagos_id`);

--
-- Indices de la tabla `cuenta_bancarias`
--
ALTER TABLE `cuenta_bancarias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cuenta_bancarias_bancos_id_foreign` (`bancos_id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `empleados_tipo_empleados_id_foreign` (`tipo_empleados_id`),
  ADD KEY `empleados_logins_id_foreign` (`logins_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productos_proveedores_id_foreign` (`proveedores_id`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_empleados`
--
ALTER TABLE `tipo_empleados`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de la tabla `bancos`
--
ALTER TABLE `bancos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `clientes_pagos`
--
ALTER TABLE `clientes_pagos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clientes_servicios`
--
ALTER TABLE `clientes_servicios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cuenta_bancarias`
--
ALTER TABLE `cuenta_bancarias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `logins`
--
ALTER TABLE `logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_empleados`
--
ALTER TABLE `tipo_empleados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_logins_id_foreign` FOREIGN KEY (`logins_id`) REFERENCES `logins` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `clientes_pagos`
--
ALTER TABLE `clientes_pagos`
  ADD CONSTRAINT `clientes_pagos_clientes_id_foreign` FOREIGN KEY (`clientes_id`) REFERENCES `clientes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `clientes_pagos_pagos_id_foreign` FOREIGN KEY (`pagos_id`) REFERENCES `pagos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `clientes_servicios`
--
ALTER TABLE `clientes_servicios`
  ADD CONSTRAINT `clientes_servicios_clientes_id_foreign` FOREIGN KEY (`clientes_id`) REFERENCES `clientes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `clientes_servicios_clientes_pagos_id_foreign` FOREIGN KEY (`clientes_pagos_id`) REFERENCES `clientes_pagos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `clientes_servicios_servicios_id_foreign` FOREIGN KEY (`servicios_id`) REFERENCES `servicios` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `cuenta_bancarias`
--
ALTER TABLE `cuenta_bancarias`
  ADD CONSTRAINT `cuenta_bancarias_bancos_id_foreign` FOREIGN KEY (`bancos_id`) REFERENCES `bancos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_logins_id_foreign` FOREIGN KEY (`logins_id`) REFERENCES `logins` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `empleados_tipo_empleados_id_foreign` FOREIGN KEY (`tipo_empleados_id`) REFERENCES `tipo_empleados` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_proveedores_id_foreign` FOREIGN KEY (`proveedores_id`) REFERENCES `proveedores` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-05-2020 a las 23:14:11
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
(1, 'BCP', '2020-04-13 02:49:51', '2020-04-13 02:49:51', NULL),
(2, 'BBVA Continetal', '2020-04-13 02:50:03', '2020-04-13 02:50:03', NULL),
(3, 'Interbank', '2020-04-13 02:50:09', '2020-04-13 02:50:09', NULL),
(4, 'Banco de la Nación', '2020-04-13 02:50:22', '2020-04-13 02:50:22', NULL),
(5, 'Banco Falabella', '2020-04-13 03:32:02', '2020-04-13 03:32:02', NULL),
(6, 'afdsfds', '2020-04-22 20:41:52', '2020-04-22 20:42:17', '2020-04-22 20:42:17');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `direccion`, `telefono`, `fecha_nac`, `correo`, `created_at`, `updated_at`, `deleted_at`, `estado`, `users_id`) VALUES
(1, 'Gerson', 'Remigio', 'Bolívar 2054', '969281666', '2020-04-01', 'gerssonoliva@gmail.com', '2020-04-19 05:46:34', '2020-04-19 05:46:34', NULL, 'A', 26);

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
  `cci` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bancos_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cuenta_bancarias`
--

INSERT INTO `cuenta_bancarias` (`id`, `nro_cuenta`, `cci`, `bancos_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '41534853346097', '00241513485334609780', 1, '2020-04-13 02:51:25', '2020-04-13 02:51:25', NULL),
(2, '001104420200104572', '01144200020010457219', 2, '2020-04-13 02:56:14', '2020-04-13 02:56:14', NULL),
(3, '2003131966151', '00320001313196615131', 3, '2020-04-13 03:31:49', '2020-04-13 03:31:49', NULL),
(4, '04055510623', '01800000405551062302', 4, '2020-04-13 03:33:27', '2020-04-13 03:33:27', NULL),
(5, '8050100688121', '05450180010068812123', 5, '2020-04-13 03:35:27', '2020-04-13 03:35:27', NULL);

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
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `e_nombre`, `apellido`, `direccion`, `telefono`, `fecha_nac`, `correo`, `tipo_empleados_id`, `users_id`, `estado`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'Gerson', 'Oliva Remigio', 'Bolívar 2054', '969281666', '1995-10-03', 'gerssonoliva@gmail.com', 1, 23, 'A', '2020-04-13 04:51:37', '2020-04-13 04:51:37', NULL),
(5, 'Milagros', 'Sánchez Muñoz', 'Demetrio 801', '987654321', '1992-10-18', 'milisanchez@gmail.com', 3, 24, 'A', '2020-04-13 04:53:43', '2020-04-13 04:53:43', NULL),
(6, 'Brayan', 'Oliva Remigio', 'Bolívar 2054', '987654321', '1994-06-14', 'brayanoliva@gmail.com', 4, 25, 'A', '2020-04-13 04:54:47', '2020-04-13 04:54:47', NULL),
(8, 'Luisa', 'Perez García', 'Balta 1054', '987654321', '1999-06-01', 'luisaperez@gmail.com', 5, 33, 'A', '2020-04-30 17:12:09', '2020-04-30 17:12:09', NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_03_11_182117_create_bancos_table', 1),
(5, '2020_03_12_212644_create_cuentas_bancarias_table', 1),
(6, '2020_03_13_213137_add_deleted_at_column_to_banco_tables', 1),
(7, '2020_03_13_213220_add_deleted_at_column_to_cuenta_bancaria_tables', 1),
(8, '2020_03_21_025528_create_proveedores_table', 1),
(9, '2020_03_21_032304_add_deleted_at_column_to_proveedores_tables', 1),
(10, '2020_03_21_032534_create_productos_table', 1),
(11, '2020_03_21_032906_add_deleted_at_column_to_productos_tables', 1),
(12, '2020_03_21_035856_create_tipo_empleados_table', 1),
(13, '2020_03_21_040621_create_logins_table', 1),
(14, '2020_03_21_041520_add_deleted_at_column_to_logins_tables', 1),
(15, '2020_03_21_043528_create_empleados_table', 1),
(16, '2020_03_21_050323_add_deleted_at_column_to_empleados_tables', 1),
(17, '2020_03_21_051826_add_deleted_at_column_to_tipo_empleados_tables', 1),
(18, '2020_03_21_051931_create_clientes_table', 1),
(19, '2020_03_21_051948_add_deleted_at_column_to_clientes_tables', 1),
(20, '2020_03_21_052220_create_pagos_table', 1),
(21, '2020_03_21_052236_add_deleted_at_column_to_pagos_tables', 1),
(22, '2020_03_21_053053_create_clientes_pagos_table', 1),
(23, '2020_03_21_053114_add_deleted_at_column_to_clientes_pagos_tables', 1),
(24, '2020_03_21_053711_create_servicios_table', 1),
(25, '2020_03_21_053725_add_deleted_at_column_to_servicios_tables', 1),
(26, '2020_03_21_054005_create_clientes_servicios_table', 1),
(27, '2020_03_21_054023_add_deleted_at_column_to_clientes_servicios_tables', 1),
(28, '2020_04_12_182434_add_users_id_at_column_to_clientes_tables', 2),
(29, '2020_04_12_182512_add_users_id_at_column_to_empleados_tables', 2),
(30, '2020_04_12_215713_add_cci_at_column_to_cuenta_bancarias_tables', 3);

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
(1, 'Ariel 25kg', '2020-04-30', '50.00', 100, 1, '2020-04-30 17:20:04', '2020-04-30 17:20:04', NULL);

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
(1, 'Ilusionistas SAC', '10733905285', 'Bolívar 2054', '969281666', 'ilusionistas@gmail.com', 'Gerson Oliva Remigio', '2020-04-30 17:16:49', '2020-04-30 17:16:49', NULL),
(2, 'Ilusionistas SAC', '10733905285', 'Bolívar 2054', '969281666', 'ilusionistas@gmail.com', 'Edinson Oliva Remigio', '2020-04-30 17:17:15', '2020-04-30 17:19:31', '2020-04-30 17:19:31'),
(3, 'Ilusionistas SAC', '10733905285', 'Bolívar 2054', '969281666', 'ilusionistas@gmail.com', 'Edinson Oliva Remigio', '2020-04-30 17:18:06', '2020-04-30 17:19:35', '2020-04-30 17:19:35');

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

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `nombre`, `costo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Limpieza de hogar', '49.99', '2020-04-30 22:23:27', '2020-04-30 22:23:27', NULL),
(2, 'Lavandería', '39.99', '2020-04-30 22:24:34', '2020-04-30 22:24:34', NULL),
(3, 'Cocina', '39.99', '2020-04-30 22:26:37', '2020-04-30 22:26:37', NULL);

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
(1, 'Gerente', NULL, '2020-04-13 03:59:24', '2020-04-13 03:59:24', NULL),
(2, 'Administrador', NULL, '2020-04-13 03:59:39', '2020-04-13 03:59:39', NULL),
(3, 'Contador', NULL, '2020-04-13 03:59:47', '2020-04-13 03:59:47', NULL),
(4, 'Asesor Legal', NULL, '2020-04-13 03:59:56', '2020-04-13 03:59:56', NULL),
(5, 'Domestik', NULL, '2020-04-13 04:00:08', '2020-04-13 04:00:08', NULL),
(6, 'Cliente', NULL, '2020-04-23 23:30:58', '2020-04-23 23:30:58', NULL);

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
  `tipo_empleados_id` bigint(20) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `tipo_empleados_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'admin@domestik.com', NULL, '$2y$10$4DSvAxXMHW87T6kkL7uF8OZPL6lscfCuplz5YHa/PTd0dPFfu.bo2', 2, NULL, '2020-04-13 02:43:27', '2020-04-13 02:43:27'),
(23, 'Gerson_O', 'gerson@domestik.com', NULL, '$2y$10$KGmnn3MsA7ZHf0Wlp1Cg8.7jV44GF7Aad5I8a9w2yOBwjVKRRW/Ry', 1, NULL, '2020-04-13 04:51:37', '2020-04-13 04:51:37'),
(24, 'Milagros_S', 'mili@domestik.com', NULL, '$2y$10$PrueiG/UBRbeY2QDP5zYPeQQFYq7aoharMsc.AtDI5aJxVQT51tK6', 3, NULL, '2020-04-13 04:53:43', '2020-04-13 04:53:43'),
(25, 'Bayan_O', 'brayan@domestik.com', NULL, '$2y$10$yHhNUKf6zB8Yd36X5RUKJ.ztJOv3DYqq6zABIVflTvU.dnLwF/LJ.', 4, NULL, '2020-04-13 04:54:47', '2020-04-13 04:54:47'),
(26, 'Gerson', 'gerssonoliva@domestik.com', NULL, '$2y$10$HbGUNEQnvkjkEXYydIrEXe5ztd2Zmjd4o1y/5gooLfnUP2bIFbky6', 6, NULL, '2020-04-19 05:46:33', '2020-04-19 05:46:33'),
(33, 'Luisa', 'luisa@domestik.com', NULL, '$2y$10$t4vCWJw04jSx1ZJm.M2JTuZ41mV55VzXkVbJxc6Bv6xd4WaBdTkii', 5, NULL, '2020-04-30 17:12:09', '2020-04-30 17:12:09');

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
  ADD KEY `clientes_users_id_foreign` (`users_id`);

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
  ADD KEY `empleados_users_id_foreign` (`users_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_empleados`
--
ALTER TABLE `tipo_empleados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

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
  ADD CONSTRAINT `empleados_tipo_empleados_id_foreign` FOREIGN KEY (`tipo_empleados_id`) REFERENCES `tipo_empleados` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `empleados_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_proveedores_id_foreign` FOREIGN KEY (`proveedores_id`) REFERENCES `proveedores` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

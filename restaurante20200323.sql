-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-03-2020 a las 01:11:18
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `restaurante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Category 1', 'category-1', '2020-02-12 16:56:46', '2020-02-12 16:56:46'),
(2, NULL, 1, 'Category 2', 'category-2', '2020-02-12 16:56:46', '2020-02-12 16:56:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellido` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono1` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono2` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono3` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono4` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion1` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ciudad1` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numerodireccion1` int(11) DEFAULT NULL,
  `orientacion1` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ciudad2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numerodireccion2` int(11) DEFAULT NULL,
  `orientacion2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ciudad3` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numerodireccion3` int(11) DEFAULT NULL,
  `orientacion3` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dni` int(11) DEFAULT NULL,
  `cantidad_compras` int(11) DEFAULT NULL,
  `avatar` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cuit` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `observacion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quien_creo` int(11) DEFAULT NULL,
  `quien_modfico` int(11) DEFAULT NULL,
  `promos` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `afavor` double DEFAULT NULL,
  `deuda` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `ultima_compra` timestamp NULL DEFAULT NULL,
  `facebook` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `telefono1`, `telefono2`, `telefono3`, `telefono4`, `direccion1`, `ciudad1`, `numerodireccion1`, `orientacion1`, `direccion2`, `ciudad2`, `numerodireccion2`, `orientacion2`, `direccion`, `ciudad3`, `numerodireccion3`, `orientacion3`, `dni`, `cantidad_compras`, `avatar`, `cuit`, `observacion`, `quien_creo`, `quien_modfico`, `promos`, `afavor`, `deuda`, `created_at`, `updated_at`, `deleted_at`, `ultima_compra`, `facebook`, `instagram`, `email`) VALUES
(1, 'diego', 'carlos', '23233213', '1151566', '151771', '156646', 'calle mendoza', 'San Juan', 1556, 'sur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 34778999, 2, NULL, '123456789', NULL, 1, 1, NULL, NULL, NULL, '2020-03-23 01:42:05', '2020-03-23 01:42:05', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(25, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 4),
(26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, NULL, 6),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, NULL, 2),
(31, 5, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, NULL, 3),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 5),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 10),
(39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, NULL, 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, NULL, 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2),
(46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3),
(47, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4),
(48, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5),
(49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(50, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8),
(52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11),
(55, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12),
(56, 7, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(57, 7, 'precio', 'number', 'Precio', 1, 1, 1, 1, 1, 1, '{}', 2),
(58, 7, 'stock', 'number', 'Stock', 0, 1, 1, 1, 1, 1, '{}', 3),
(59, 7, 'nombre', 'text', 'Nombre', 1, 1, 1, 1, 1, 1, '{}', 4),
(60, 7, 'observacion', 'text_area', 'Observacion', 0, 1, 1, 1, 1, 1, '{}', 5),
(61, 7, 'icono', 'image', 'Icono', 0, 1, 1, 1, 1, 1, '{}', 6),
(62, 7, 'foto1', 'image', 'Foto1', 0, 1, 1, 1, 1, 1, '{}', 7),
(63, 7, 'foto2', 'image', 'Foto2', 0, 1, 1, 1, 1, 1, '{}', 8),
(64, 7, 'foto3', 'image', 'Foto3', 0, 1, 1, 1, 1, 1, '{}', 9),
(65, 7, 'foto4', 'image', 'Foto4', 0, 1, 1, 1, 1, 1, '{}', 10),
(66, 7, 'foto5', 'image', 'Foto5', 0, 1, 1, 1, 1, 1, '{}', 11),
(67, 7, 'foto6', 'image', 'Foto6', 0, 1, 1, 1, 1, 1, '{}', 12),
(68, 7, 'foto7', 'image', 'Foto7', 0, 1, 1, 1, 1, 1, '{}', 13),
(69, 7, 'foto8', 'image', 'Foto8', 0, 1, 1, 1, 1, 1, '{}', 14),
(70, 7, 'categoria_id', 'number', 'Categoria Id', 0, 1, 1, 1, 1, 1, '{}', 15),
(71, 7, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 16),
(72, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 17),
(73, 7, 'deleted_at', 'timestamp', 'Deleted At', 0, 0, 0, 0, 0, 0, '{}', 18),
(74, 8, 'id', 'number', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(75, 8, 'categoria', 'number', 'Categoria', 0, 1, 1, 1, 1, 1, '{}', 2),
(76, 8, 'estado', 'text', 'Estado', 0, 1, 1, 1, 1, 1, '{}', 3),
(77, 8, 'precio_total', 'number', 'Precio Total', 0, 1, 1, 1, 1, 1, '{}', 4),
(78, 8, 'path_pdf', 'text', 'Path Pdf', 0, 1, 1, 1, 1, 1, '{}', 5),
(79, 8, 'cliente', 'number', 'Cliente', 0, 1, 1, 1, 1, 1, '{}', 6),
(80, 8, 'creado_por', 'number', 'Creado Por', 0, 1, 1, 1, 1, 1, '{}', 7),
(81, 8, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 8),
(82, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(83, 8, 'deleted_at', 'timestamp', 'Deleted At', 0, 1, 1, 1, 1, 1, '{}', 10),
(84, 9, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(85, 9, 'nombre', 'text', 'Nombre', 0, 1, 1, 1, 1, 1, '{}', 2),
(86, 9, 'apellido', 'text', 'Apellido', 1, 1, 1, 1, 1, 1, '{}', 3),
(87, 9, 'telefono1', 'number', 'Telefono1', 0, 1, 1, 1, 1, 1, '{}', 4),
(88, 9, 'telefono2', 'number', 'Telefono2', 0, 1, 1, 1, 1, 1, '{}', 5),
(89, 9, 'telefono3', 'number', 'Telefono3', 0, 1, 1, 1, 1, 1, '{}', 6),
(90, 9, 'telefono4', 'number', 'Telefono4', 0, 1, 1, 1, 1, 1, '{}', 7),
(91, 9, 'direccion1', 'text', 'Direccion1', 0, 1, 1, 1, 1, 1, '{}', 8),
(92, 9, 'ciudad1', 'text', 'Ciudad1', 0, 1, 1, 1, 1, 1, '{}', 9),
(93, 9, 'numerodireccion1', 'text', 'Numerodireccion1', 0, 1, 1, 1, 1, 1, '{}', 10),
(94, 9, 'orientacion1', 'text', 'Orientacion1', 0, 1, 1, 1, 1, 1, '{}', 11),
(95, 9, 'direccion2', 'text', 'Direccion2', 0, 1, 1, 1, 1, 1, '{}', 12),
(96, 9, 'ciudad2', 'text', 'Ciudad2', 0, 1, 1, 1, 1, 1, '{}', 13),
(97, 9, 'numerodireccion2', 'text', 'Numerodireccion2', 0, 1, 1, 1, 1, 1, '{}', 14),
(98, 9, 'orientacion2', 'text', 'Orientacion2', 0, 1, 1, 1, 1, 1, '{}', 15),
(99, 9, 'direccion', 'text', 'Direccion', 0, 1, 1, 1, 1, 1, '{}', 16),
(100, 9, 'ciudad3', 'text', 'Ciudad3', 0, 1, 1, 1, 1, 1, '{}', 17),
(101, 9, 'numerodireccion3', 'text', 'Numerodireccion3', 0, 1, 1, 1, 1, 1, '{}', 18),
(102, 9, 'orientacion3', 'text', 'Orientacion3', 0, 1, 1, 1, 1, 1, '{}', 19),
(103, 9, 'dni', 'text', 'Dni', 0, 1, 1, 1, 1, 1, '{}', 20),
(104, 9, 'cantidad_compras', 'text', 'Cantidad Compras', 0, 1, 1, 1, 1, 1, '{}', 21),
(105, 9, 'avatar', 'text', 'Avatar', 0, 1, 1, 1, 1, 1, '{}', 22),
(106, 9, 'cuit', 'text', 'Cuit', 0, 1, 1, 1, 1, 1, '{}', 23),
(107, 9, 'observacion', 'text', 'Observacion', 0, 1, 1, 1, 1, 1, '{}', 24),
(108, 9, 'quien_creo', 'text', 'Quien Creo', 0, 1, 1, 1, 1, 1, '{}', 25),
(109, 9, 'quien_modfico', 'text', 'Quien Modfico', 0, 1, 1, 1, 1, 1, '{}', 26),
(110, 9, 'promos', 'text', 'Promos', 0, 1, 1, 1, 1, 1, '{}', 27),
(111, 9, 'afavor', 'text', 'Afavor', 0, 1, 1, 1, 1, 1, '{}', 28),
(112, 9, 'deuda', 'text', 'Deuda', 0, 1, 1, 1, 1, 1, '{}', 29),
(113, 9, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 30),
(114, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 31),
(115, 9, 'deleted_at', 'timestamp', 'Deleted At', 0, 1, 1, 1, 1, 1, '{}', 32),
(116, 9, 'ultima_compra', 'timestamp', 'Ultima Compra', 0, 1, 1, 1, 1, 1, '{}', 33),
(117, 9, 'facebook', 'text', 'Facebook', 0, 1, 1, 1, 1, 1, '{}', 34),
(118, 9, 'instagram', 'text', 'Instagram', 0, 1, 1, 1, 1, 1, '{}', 35),
(119, 11, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(120, 11, 'nombre', 'text', 'Nombre', 0, 1, 1, 1, 1, 1, '{}', 2),
(121, 11, 'apellido', 'text', 'Apellido', 0, 1, 1, 1, 1, 1, '{}', 3),
(122, 11, 'telefono1', 'number', 'Telefono1', 0, 1, 1, 1, 1, 1, '{}', 4),
(123, 11, 'telefono2', 'number', 'Telefono2', 0, 1, 1, 1, 1, 1, '{}', 5),
(124, 11, 'telefono3', 'number', 'Telefono3', 0, 1, 1, 1, 1, 1, '{}', 6),
(125, 11, 'telefono4', 'text', 'Telefono4', 0, 1, 1, 1, 1, 1, '{}', 7),
(126, 11, 'direccion1', 'text', 'Direccion1', 0, 1, 1, 1, 1, 1, '{}', 8),
(127, 11, 'ciudad1', 'text', 'Ciudad1', 0, 1, 1, 1, 1, 1, '{}', 9),
(128, 11, 'numerodireccion1', 'text', 'Numerodireccion1', 0, 1, 1, 1, 1, 1, '{}', 10),
(129, 11, 'orientacion1', 'text', 'Orientacion1', 0, 1, 1, 1, 1, 1, '{}', 11),
(130, 11, 'direccion2', 'text', 'Direccion2', 0, 1, 1, 1, 1, 1, '{}', 12),
(131, 11, 'ciudad2', 'text', 'Ciudad2', 0, 1, 1, 1, 1, 1, '{}', 13),
(132, 11, 'numerodireccion2', 'text', 'Numerodireccion2', 0, 1, 1, 1, 1, 1, '{}', 14),
(133, 11, 'orientacion2', 'text', 'Orientacion2', 0, 1, 1, 1, 1, 1, '{}', 15),
(134, 11, 'cantidad_compras', 'text', 'Cantidad Compras', 0, 1, 1, 1, 1, 1, '{}', 16),
(135, 11, 'avatar', 'text', 'Avatar', 0, 1, 1, 1, 1, 1, '{}', 17),
(136, 11, 'cuit', 'text', 'Cuit', 0, 1, 1, 1, 1, 1, '{}', 18),
(137, 11, 'observacion', 'text', 'Observacion', 0, 1, 1, 1, 1, 1, '{}', 19),
(138, 11, 'quien_creo', 'text', 'Quien Creo', 0, 1, 1, 1, 1, 1, '{}', 20),
(139, 11, 'quien_modfico', 'text', 'Quien Modfico', 0, 1, 1, 1, 1, 1, '{}', 21),
(140, 11, 'promos', 'text', 'Promos', 0, 1, 1, 1, 1, 1, '{}', 22),
(141, 11, 'afavor', 'text', 'Afavor', 0, 1, 1, 1, 1, 1, '{}', 23),
(142, 11, 'deuda', 'text', 'Deuda', 0, 1, 1, 1, 1, 1, '{}', 24),
(143, 11, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 25),
(144, 11, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 26),
(145, 11, 'deleted_at', 'timestamp', 'Deleted At', 0, 1, 1, 1, 1, 1, '{}', 27),
(146, 11, 'ultima_compra', 'timestamp', 'Ultima Compra', 0, 1, 1, 1, 1, 1, '{}', 28),
(147, 11, 'facebook', 'text', 'Facebook', 0, 1, 1, 1, 1, 1, '{}', 29),
(148, 11, 'instagram', 'text', 'Instagram', 0, 1, 1, 1, 1, 1, '{}', 30),
(149, 13, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(150, 13, 'idproducto', 'text', 'Idproducto', 1, 1, 1, 1, 1, 1, '{}', 2),
(151, 13, 'idticket', 'text', 'Idticket', 1, 1, 1, 1, 1, 1, '{}', 3),
(152, 13, 'precio', 'text', 'Precio', 0, 1, 1, 1, 1, 1, '{}', 4),
(153, 13, 'estado', 'text', 'Estado', 0, 1, 1, 1, 1, 1, '{}', 5),
(154, 13, 'observacion', 'text', 'Observacion', 0, 1, 1, 1, 1, 1, '{}', 6),
(155, 13, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 7),
(156, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 8),
(157, 13, 'deleted_at', 'timestamp', 'Deleted At', 0, 1, 1, 1, 1, 1, '{}', 9),
(158, 13, 'cantidad', 'text', 'Cantidad', 0, 1, 1, 1, 1, 1, '{}', 10),
(159, 13, 'quien_creo', 'text', 'Quien Creo', 0, 1, 1, 1, 1, 1, '{}', 11),
(160, 13, 'quien_actualizo', 'text', 'Quien Actualizo', 0, 1, 1, 1, 1, 1, '{}', 12),
(161, 13, 'unidadmedida', 'text', 'Unidadmedida', 0, 1, 1, 1, 1, 1, '{}', 13),
(162, 13, 'tamanio', 'text', 'Tamanio', 0, 1, 1, 1, 1, 1, '{}', 14),
(163, 13, 'aderezos', 'text', 'Aderezos', 0, 1, 1, 1, 1, 1, '{}', 15),
(167, 8, 'ticket_belongsto_cliente_relationship', 'relationship', 'clientes', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Cliente\",\"table\":\"clientes\",\"type\":\"belongsTo\",\"column\":\"cliente\",\"key\":\"id\",\"label\":\"apellido\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 11),
(168, 13, 'productosenticket_belongsto_producto_relationship', 'relationship', 'productos', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Producto\",\"table\":\"productos\",\"type\":\"belongsTo\",\"column\":\"idproducto\",\"key\":\"id\",\"label\":\"nombre\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 16),
(169, 13, 'productosenticket_belongsto_ticket_relationship', 'relationship', 'tickets', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Ticket\",\"table\":\"tickets\",\"type\":\"belongsTo\",\"column\":\"idticket\",\"key\":\"id\",\"label\":\"id\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2020-02-12 16:56:45', '2020-02-12 16:56:45'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2020-02-12 16:56:45', '2020-02-12 16:56:45'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, NULL, '2020-02-12 16:56:45', '2020-02-12 16:56:45'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, NULL, '2020-02-12 16:56:46', '2020-02-12 16:56:46'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, NULL, '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(7, 'productos', 'productos', 'Producto', 'Productos', 'voyager-pizza', 'App\\Producto', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-03-06 13:46:29', '2020-03-06 13:46:29'),
(8, 'tickets', 'tickets', 'Ticket', 'Tickets', 'voyager-basket', 'App\\Ticket', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-03-06 18:19:48', '2020-03-23 02:01:56'),
(9, 'clientes', 'clientes', 'Cliente', 'Clientes', 'voyager-people', 'App\\Cliente', NULL, NULL, NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-03-12 16:40:58', '2020-03-23 01:44:17'),
(11, 'proveedores', 'proveedores', 'Proveedore', 'Proveedores', 'voyager-truck', 'App\\Proveedore', NULL, '\\App\\Http\\Controllers\\ProveedoreController', NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-03-12 18:49:01', '2020-03-13 00:45:39'),
(13, 'productosentickets', 'productosentickets', 'Productosenticket', 'Productosentickets', 'voyager-hotdog', 'App\\Productosenticket', NULL, '\\App\\Http\\Controllers\\ProductosenticketController', NULL, 1, 1, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-03-13 16:01:35', '2020-03-23 02:35:14');

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
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-02-12 16:56:45', '2020-02-12 16:56:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2020-02-12 16:56:46', '2020-02-12 16:56:46', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 5, '2020-02-12 16:56:46', '2020-02-12 16:56:46', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2020-02-12 16:56:46', '2020-02-12 16:56:46', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2020-02-12 16:56:46', '2020-02-12 16:56:46', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 9, '2020-02-12 16:56:46', '2020-02-12 16:56:46', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 10, '2020-02-12 16:56:46', '2020-02-12 16:56:46', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 11, '2020-02-12 16:56:46', '2020-02-12 16:56:46', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 12, '2020-02-12 16:56:46', '2020-02-12 16:56:46', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 13, '2020-02-12 16:56:46', '2020-02-12 16:56:46', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 14, '2020-02-12 16:56:46', '2020-02-12 16:56:46', 'voyager.settings.index', NULL),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 8, '2020-02-12 16:56:46', '2020-02-12 16:56:46', 'voyager.categories.index', NULL),
(12, 1, 'Posts', '', '_self', 'voyager-news', NULL, NULL, 6, '2020-02-12 16:56:47', '2020-02-12 16:56:47', 'voyager.posts.index', NULL),
(13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 7, '2020-02-12 16:56:47', '2020-02-12 16:56:47', 'voyager.pages.index', NULL),
(14, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 13, '2020-02-12 16:56:47', '2020-02-12 16:56:47', 'voyager.hooks', NULL),
(15, 1, 'Productos', '', '_self', 'voyager-pizza', NULL, NULL, 15, '2020-03-06 13:46:29', '2020-03-06 13:46:29', 'voyager.productos.index', NULL),
(16, 1, 'Tickets', '', '_self', 'voyager-basket', NULL, NULL, 16, '2020-03-06 18:19:48', '2020-03-06 18:19:48', 'voyager.tickets.index', NULL),
(17, 1, 'Clientes', '', '_self', 'voyager-people', NULL, NULL, 17, '2020-03-12 16:40:58', '2020-03-12 16:40:58', 'voyager.clientes.index', NULL),
(18, 1, 'Proveedores', '', '_self', 'voyager-truck', NULL, NULL, 18, '2020-03-12 18:49:01', '2020-03-12 18:49:01', 'voyager.proveedores.index', NULL),
(20, 1, 'Productosentickets', '', '_self', 'voyager-hotdog', NULL, NULL, 19, '2020-03-13 16:01:35', '2020-03-13 16:01:35', 'voyager.productosentickets.index', NULL);

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
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2016_01_01_000000_create_pages_table', 2),
(25, '2016_01_01_000000_create_posts_table', 2),
(26, '2016_02_15_204651_create_categories_table', 2),
(27, '2017_04_11_000000_alter_post_nullable_fields_table', 2),
(28, '2020_02_26_123155_create_tasks_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2020-02-12 16:56:47', '2020-02-12 16:56:47');

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
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2020-02-12 16:56:46', '2020-02-12 16:56:46'),
(2, 'browse_bread', NULL, '2020-02-12 16:56:46', '2020-02-12 16:56:46'),
(3, 'browse_database', NULL, '2020-02-12 16:56:46', '2020-02-12 16:56:46'),
(4, 'browse_media', NULL, '2020-02-12 16:56:46', '2020-02-12 16:56:46'),
(5, 'browse_compass', NULL, '2020-02-12 16:56:46', '2020-02-12 16:56:46'),
(6, 'browse_menus', 'menus', '2020-02-12 16:56:46', '2020-02-12 16:56:46'),
(7, 'read_menus', 'menus', '2020-02-12 16:56:46', '2020-02-12 16:56:46'),
(8, 'edit_menus', 'menus', '2020-02-12 16:56:46', '2020-02-12 16:56:46'),
(9, 'add_menus', 'menus', '2020-02-12 16:56:46', '2020-02-12 16:56:46'),
(10, 'delete_menus', 'menus', '2020-02-12 16:56:46', '2020-02-12 16:56:46'),
(11, 'browse_roles', 'roles', '2020-02-12 16:56:46', '2020-02-12 16:56:46'),
(12, 'read_roles', 'roles', '2020-02-12 16:56:46', '2020-02-12 16:56:46'),
(13, 'edit_roles', 'roles', '2020-02-12 16:56:46', '2020-02-12 16:56:46'),
(14, 'add_roles', 'roles', '2020-02-12 16:56:46', '2020-02-12 16:56:46'),
(15, 'delete_roles', 'roles', '2020-02-12 16:56:46', '2020-02-12 16:56:46'),
(16, 'browse_users', 'users', '2020-02-12 16:56:46', '2020-02-12 16:56:46'),
(17, 'read_users', 'users', '2020-02-12 16:56:46', '2020-02-12 16:56:46'),
(18, 'edit_users', 'users', '2020-02-12 16:56:46', '2020-02-12 16:56:46'),
(19, 'add_users', 'users', '2020-02-12 16:56:46', '2020-02-12 16:56:46'),
(20, 'delete_users', 'users', '2020-02-12 16:56:46', '2020-02-12 16:56:46'),
(21, 'browse_settings', 'settings', '2020-02-12 16:56:46', '2020-02-12 16:56:46'),
(22, 'read_settings', 'settings', '2020-02-12 16:56:46', '2020-02-12 16:56:46'),
(23, 'edit_settings', 'settings', '2020-02-12 16:56:46', '2020-02-12 16:56:46'),
(24, 'add_settings', 'settings', '2020-02-12 16:56:46', '2020-02-12 16:56:46'),
(25, 'delete_settings', 'settings', '2020-02-12 16:56:46', '2020-02-12 16:56:46'),
(26, 'browse_categories', 'categories', '2020-02-12 16:56:46', '2020-02-12 16:56:46'),
(27, 'read_categories', 'categories', '2020-02-12 16:56:46', '2020-02-12 16:56:46'),
(28, 'edit_categories', 'categories', '2020-02-12 16:56:46', '2020-02-12 16:56:46'),
(29, 'add_categories', 'categories', '2020-02-12 16:56:46', '2020-02-12 16:56:46'),
(30, 'delete_categories', 'categories', '2020-02-12 16:56:46', '2020-02-12 16:56:46'),
(31, 'browse_posts', 'posts', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(32, 'read_posts', 'posts', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(33, 'edit_posts', 'posts', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(34, 'add_posts', 'posts', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(35, 'delete_posts', 'posts', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(36, 'browse_pages', 'pages', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(37, 'read_pages', 'pages', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(38, 'edit_pages', 'pages', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(39, 'add_pages', 'pages', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(40, 'delete_pages', 'pages', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(41, 'browse_hooks', NULL, '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(42, 'browse_productos', 'productos', '2020-03-06 13:46:29', '2020-03-06 13:46:29'),
(43, 'read_productos', 'productos', '2020-03-06 13:46:29', '2020-03-06 13:46:29'),
(44, 'edit_productos', 'productos', '2020-03-06 13:46:29', '2020-03-06 13:46:29'),
(45, 'add_productos', 'productos', '2020-03-06 13:46:29', '2020-03-06 13:46:29'),
(46, 'delete_productos', 'productos', '2020-03-06 13:46:29', '2020-03-06 13:46:29'),
(47, 'browse_tickets', 'tickets', '2020-03-06 18:19:48', '2020-03-06 18:19:48'),
(48, 'read_tickets', 'tickets', '2020-03-06 18:19:48', '2020-03-06 18:19:48'),
(49, 'edit_tickets', 'tickets', '2020-03-06 18:19:48', '2020-03-06 18:19:48'),
(50, 'add_tickets', 'tickets', '2020-03-06 18:19:48', '2020-03-06 18:19:48'),
(51, 'delete_tickets', 'tickets', '2020-03-06 18:19:48', '2020-03-06 18:19:48'),
(52, 'browse_clientes', 'clientes', '2020-03-12 16:40:58', '2020-03-12 16:40:58'),
(53, 'read_clientes', 'clientes', '2020-03-12 16:40:58', '2020-03-12 16:40:58'),
(54, 'edit_clientes', 'clientes', '2020-03-12 16:40:58', '2020-03-12 16:40:58'),
(55, 'add_clientes', 'clientes', '2020-03-12 16:40:58', '2020-03-12 16:40:58'),
(56, 'delete_clientes', 'clientes', '2020-03-12 16:40:58', '2020-03-12 16:40:58'),
(57, 'browse_proveedores', 'proveedores', '2020-03-12 18:49:01', '2020-03-12 18:49:01'),
(58, 'read_proveedores', 'proveedores', '2020-03-12 18:49:01', '2020-03-12 18:49:01'),
(59, 'edit_proveedores', 'proveedores', '2020-03-12 18:49:01', '2020-03-12 18:49:01'),
(60, 'add_proveedores', 'proveedores', '2020-03-12 18:49:01', '2020-03-12 18:49:01'),
(61, 'delete_proveedores', 'proveedores', '2020-03-12 18:49:01', '2020-03-12 18:49:01'),
(67, 'browse_productosentickets', 'productosentickets', '2020-03-13 16:01:35', '2020-03-13 16:01:35'),
(68, 'read_productosentickets', 'productosentickets', '2020-03-13 16:01:35', '2020-03-13 16:01:35'),
(69, 'edit_productosentickets', 'productosentickets', '2020-03-13 16:01:35', '2020-03-13 16:01:35'),
(70, 'add_productosentickets', 'productosentickets', '2020-03-13 16:01:35', '2020-03-13 16:01:35'),
(71, 'delete_productosentickets', 'productosentickets', '2020-03-13 16:01:35', '2020-03-13 16:01:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(2, 0, NULL, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(3, 0, NULL, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(4, 0, NULL, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-02-12 16:56:47', '2020-02-12 16:56:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) UNSIGNED NOT NULL,
  `precio` double NOT NULL,
  `stock` int(11) DEFAULT NULL,
  `nombre` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icono` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `precio`, `stock`, `nombre`, `observacion`, `icono`, `foto1`, `foto2`, `foto3`, `foto4`, `foto5`, `foto6`, `foto7`, `foto8`, `categoria_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 42.5, 80, 'empanadas carne', 'viene la docena junta', 'productos/March2020/D9y7q2oTNAxngpYXBva6.png', 'productos/March2020/NBTMhf9JWfQe7G0EZjlp.png', 'productos/March2020/nzkvhYMt6ZNs9kN24irN.jpg', 'productos/March2020/rprXdyhedPX5Sl6D62MX.jpg', 'productos/March2020/tvkZwN1b3NMDxWDXCYHB.jpg', 'productos/March2020/NHk22d5LxNnUBb8BcLGr.jpg', 'productos/March2020/WWQQhQcT6xyLttTNZHSP.jpg', 'productos/March2020/A50nC0X3KCCc8XhPKxNh.jpg', 'productos/March2020/hEb0Djj6DlH6Jp8F2K36.jpg', NULL, '2020-03-06 13:54:00', '2020-03-06 14:01:40', NULL),
(2, 75.98, 43, 'lomo', 'sanguche de carne con otras cosas', 'productos/March2020/CEKzsfs782BfH092oc6W.jpg', 'productos/March2020/Qp9X8sGVznE4qZe0A1do.jpg', 'productos/March2020/hVpb9KbGCIMl276juF8u.jpg', 'productos/March2020/roI8TBSU6GRByKcNFUu0.jpg', 'productos/March2020/t1FPJMJkmJorigm4M7aq.jpg', 'productos/March2020/9h0LEMKpjosFmgPEspHV.jpg', 'productos/March2020/FoPdpk2vGEEVy0FpFukw.jpg', 'productos/March2020/R0lwMM3uLLeXaOdjwTnn.jpg', 'productos/March2020/6ywr44u4PBlQATLi7J3l.jpg', NULL, '2020-03-06 16:38:35', '2020-03-06 16:38:35', NULL),
(3, 188.94, 89, 'papas fritas', NULL, 'productos/March2020/WyVzAEjwFBRWyE6f73Fo.jpg', 'productos/March2020/b6S9L9dpdRScYxSg0EGM.jpg', 'productos/March2020/ni4XsO2vsSe3qeIhjIZn.jpg', 'productos/March2020/bI3WSKVXwLfi70GUP5z9.jpg', 'productos/March2020/IpD7m4EiyKeOF1FaPDwb.jpg', 'productos/March2020/LwPxrL3Il0vdK5KYJeTI.jpg', 'productos/March2020/n6UspKM7mpJgUCQSh2Gg.jpg', 'productos/March2020/bO8GJx1TaHRtD6b8VOLV.jpg', 'productos/March2020/NDsplirm3SVX21gzulpV.jpg', NULL, '2020-03-06 16:43:37', '2020-03-06 16:43:37', NULL),
(4, 254.32, 95, 'asado', NULL, 'productos/March2020/8RJXa7xBJnoootcWllKD.jpg', 'productos/March2020/vsq7MYj4ODAzs3EP9nUa.jpg', 'productos/March2020/z9JAHD9gNrIXqHaae8C1.jpg', 'productos/March2020/59g4mmt38nwa6QAlMMS7.jpg', 'productos/March2020/tD6TpEwSo4zubuC3vB8z.jpg', 'productos/March2020/SVfmENV2WoC95vnOM3B6.jpg', 'productos/March2020/wp92rXwcIUVnU7t91RiP.jpg', 'productos/March2020/OBswsQL3B7tZ0peVlFK8.jpg', 'productos/March2020/v9f5RyvDFEpey3Kxx65c.jpg', NULL, '2020-03-06 16:47:00', '2020-03-06 16:47:40', NULL),
(5, 37.54, 580, 'pancho', NULL, 'productos/March2020/eOIzy4Xd0xwGTKINZiCk.jpg', 'productos/March2020/pKtDNkrpI6GyvoOFQubu.jpg', 'productos/March2020/vYjyG0bDFdpuzfegORvI.jpg', 'productos/March2020/8GGTLlDQ4pffpgepOKAv.jpg', 'productos/March2020/MueKpeZ2qffVCCICwYS4.jpg', 'productos/March2020/i49pWq3w2UMa7tQYikpH.jpg', 'productos/March2020/phgchs8DYYdSiwbN7S6k.jpg', 'productos/March2020/2HmW1XNNE8RgpFWSR2VX.jpg', 'productos/March2020/k0GxEL90TGdJN5GvquHW.jpg', NULL, '2020-03-06 16:53:17', '2020-03-06 16:53:17', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productosentickets`
--

CREATE TABLE `productosentickets` (
  `id` int(10) UNSIGNED NOT NULL,
  `idproducto` int(11) NOT NULL,
  `idticket` int(11) NOT NULL,
  `precio` double DEFAULT NULL,
  `estado` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `observacion` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `quien_creo` int(11) DEFAULT NULL,
  `quien_actualizo` int(11) DEFAULT NULL,
  `unidadmedida` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tamanio` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aderezos` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellido` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono1` int(11) DEFAULT NULL,
  `telefono2` int(11) DEFAULT NULL,
  `telefono3` int(11) DEFAULT NULL,
  `telefono4` int(11) DEFAULT NULL,
  `direccion1` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ciudad1` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numerodireccion1` int(11) DEFAULT NULL,
  `orientacion1` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion2` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ciudad2` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numerodireccion2` int(11) DEFAULT NULL,
  `orientacion2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cantidad_compras` int(11) DEFAULT NULL,
  `avatar` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cuit` int(11) DEFAULT NULL,
  `observacion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quien_creo` int(11) DEFAULT NULL,
  `quien_modfico` int(11) DEFAULT NULL,
  `promos` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `afavor` double DEFAULT NULL,
  `deuda` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `ultima_compra` timestamp NULL DEFAULT NULL,
  `facebook` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2020-02-12 16:56:46', '2020-02-12 16:56:46'),
(2, 'user', 'Normal User', '2020-02-12 16:56:46', '2020-02-12 16:56:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Empanadas Simona', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Empanadas', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Las mejores empanadas de todo San Juan', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', 'settings/February2020/6wIwv2hERgNHGQ5xwBw2.png', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tickets`
--

CREATE TABLE `tickets` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoria` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `precio_total` double DEFAULT NULL,
  `path_pdf` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cliente` int(11) DEFAULT NULL,
  `creado_por` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tickets`
--

INSERT INTO `tickets` (`id`, `categoria`, `estado`, `precio_total`, `path_pdf`, `cliente`, `creado_por`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '6', 'en proceso', 998.32, NULL, 1, 1, '2020-03-06 18:21:00', '2020-03-23 01:47:15', NULL),
(2, '3', 'en proceso', 459.99, NULL, 12, 1, '2020-03-23 01:28:13', '2020-03-23 01:28:13', NULL),
(3, '1', 'en proceso', 789.25, NULL, 1, 1, '2020-03-23 01:28:00', '2020-03-23 01:46:46', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2020-02-12 16:56:47', '2020-02-12 16:56:47'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2020-02-12 16:56:47', '2020-02-12 16:56:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/February2020/a9BWAY7vhwMmYQF2N2tr.png', NULL, '$2y$10$e.XAMg4N2V3PQNFS69S42.PgHKX7TYIgrZ1AzAMIYpL6/qm2Sunt.', 'eNZp05xm2D1M8QjQwJqUvjb8gWZhLpY3VgKPDw1UYR1s9W1agSUq4iwF9Wxc', '{\"locale\":\"en\"}', '2020-02-12 16:56:46', '2020-02-18 17:17:21'),
(2, 1, 'Diego Checarelli', 'diegochecarelli@hotmail.com', 'users/default.png', NULL, '$2y$10$bpOqq8IWprW/2JY9p.ToRu2yV1STKa17E5.ZKtJlbQy1qkDJw7WLq', NULL, '{\"locale\":\"es\"}', '2020-02-21 15:17:55', '2020-02-21 15:17:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user_roles`
--

INSERT INTO `user_roles` (`user_id`, `role_id`) VALUES
(2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indices de la tabla `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indices de la tabla `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indices de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productosentickets`
--
ALTER TABLE `productosentickets`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indices de la tabla `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indices de la tabla `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT de la tabla `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `productosentickets`
--
ALTER TABLE `productosentickets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Filtros para la tabla `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

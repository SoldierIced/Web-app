-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 09-01-2020 a las 21:34:23
-- Versión del servidor: 5.7.23
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
-- Base de datos: `webapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2020_01_07_025847_create_nacionalidades_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nacionalidades`
--

DROP TABLE IF EXISTS `nacionalidades`;
CREATE TABLE IF NOT EXISTS `nacionalidades` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `nacionalidades`
--

INSERT INTO `nacionalidades` (`id`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Argentina', '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(2, 'Bolivia', '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(3, 'Paraguay', '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(4, 'Chile', '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(5, 'Colombia', '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(6, 'Uruguay', '2020-01-10 00:25:49', '2020-01-10 00:25:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_access_tokens`
--

DROP TABLE IF EXISTS `oauth_access_tokens`;
CREATE TABLE IF NOT EXISTS `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_auth_codes`
--

DROP TABLE IF EXISTS `oauth_auth_codes`;
CREATE TABLE IF NOT EXISTS `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_clients`
--

DROP TABLE IF EXISTS `oauth_clients`;
CREATE TABLE IF NOT EXISTS `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_personal_access_clients`
--

DROP TABLE IF EXISTS `oauth_personal_access_clients`;
CREATE TABLE IF NOT EXISTS `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_personal_access_clients_client_id_index` (`client_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oauth_refresh_tokens`
--

DROP TABLE IF EXISTS `oauth_refresh_tokens`;
CREATE TABLE IF NOT EXISTS `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nacionalidad_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `nombre`, `apellido`, `email`, `nacionalidad_id`, `created_at`, `updated_at`) VALUES
(1, 'langosh.eileen', 'Prof. Maria Walsh', 'DuBuque', 'auer.sabrina@example.org', 1, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(2, 'abbott.suzanne', 'Makenzie Glover', 'Mueller', 'alessia62@example.net', 1, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(3, 'ilarson', 'Giovanna Hettinger', 'Koch', 'jayden.stanton@example.net', 2, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(4, 'ptremblay', 'Ms. Therese Bergstrom I', 'Hayes', 'macejkovic.dolores@example.com', 6, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(5, 'shayna.zulauf', 'Stanford Graham', 'Koss', 'deven.price@example.net', 2, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(6, 'koelpin.josie', 'Helga Vandervort Jr.', 'Mosciski', 'enoch.dare@example.com', 4, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(7, 'anna.zemlak', 'Herbert Von', 'Kuhn', 'purdy.shakira@example.net', 1, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(8, 'ujones', 'Mrs. Kattie Leannon', 'Heller', 'ischultz@example.net', 4, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(9, 'rjast', 'Raymundo Hermiston II', 'Huels', 'jamie.terry@example.net', 3, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(10, 'champlin.concepcion', 'Marques Pacocha', 'Labadie', 'martine.hand@example.net', 4, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(11, 'lori.wilderman', 'Juvenal McLaughlin', 'Wiegand', 'blittle@example.com', 4, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(12, 'price.heloise', 'Mrs. Adaline Dibbert DDS', 'Ritchie', 'ayundt@example.org', 4, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(13, 'satterfield.maybell', 'Dawson Stokes', 'Kub', 'njerde@example.net', 6, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(14, 'xavier19', 'Darion Swaniawski', 'Fahey', 'hallie.langosh@example.org', 4, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(15, 'cbeahan', 'Stephen Weimann V', 'Nolan', 'chris.carter@example.org', 2, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(16, 'nkshlerin', 'Cole Dickinson', 'Rice', 'mckenzie.max@example.com', 4, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(17, 'leora.batz', 'Rick Leannon', 'Reichert', 'uhane@example.net', 5, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(18, 'courtney.walsh', 'Louisa Rosenbaum PhD', 'Maggio', 'lenora.kunze@example.net', 1, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(19, 'izabella44', 'Mr. Derick Simonis', 'Runolfsson', 'wcorwin@example.org', 3, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(20, 'america43', 'Roselyn Bosco', 'Kuhlman', 'cleo.towne@example.org', 1, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(21, 'qdenesik', 'Mrs. Calista Schiller II', 'Nitzsche', 'fdach@example.org', 1, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(22, 'micheal66', 'Mr. Monty Bartell', 'Schneider', 'owisozk@example.net', 6, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(23, 'bcremin', 'Maynard Pacocha II', 'Leannon', 'hahn.johnathan@example.com', 4, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(24, 'uhomenick', 'Marcos Franecki', 'Weimann', 'klocko.okey@example.net', 3, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(25, 'darien.senger', 'Kieran Connelly', 'Schroeder', 'bpredovic@example.org', 3, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(26, 'nziemann', 'Matilde Gutmann', 'Kuhn', 'mboehm@example.org', 3, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(27, 'kassulke.russell', 'Adan Hegmann', 'Herman', 'marjorie.wyman@example.com', 1, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(28, 'arlo.blanda', 'Annette Braun', 'Lehner', 'jarrett.ernser@example.org', 5, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(29, 'zane.schroeder', 'Jerad Hackett', 'Kassulke', 'hbergstrom@example.org', 2, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(30, 'lizeth64', 'Nettie Prosacco', 'Brown', 'phalvorson@example.net', 5, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(31, 'isaiah97', 'Dr. Camron Rippin PhD', 'Shields', 'johnston.mabel@example.com', 2, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(32, 'nasir52', 'Ricardo Fisher', 'Shields', 'ewald03@example.net', 2, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(33, 'oyost', 'Doris Borer', 'Mann', 'qmertz@example.org', 1, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(34, 'flo.walter', 'Cesar Herman DDS', 'Mohr', 'reilly.dannie@example.com', 3, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(35, 'roberts.gia', 'Danyka Nolan', 'Herman', 'gbernhard@example.org', 3, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(36, 'cullen52', 'Sophie Simonis', 'Tremblay', 'htillman@example.org', 5, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(37, 'maddison.bashirian', 'Mrs. Lilian Wintheiser', 'O\'Keefe', 'daugherty.frida@example.net', 2, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(38, 'glover.christ', 'Miss Rosalyn Kunze', 'Pouros', 'nia78@example.net', 1, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(39, 'justine27', 'Brionna Ebert', 'Windler', 'qbogisich@example.net', 1, '2020-01-10 00:25:49', '2020-01-10 00:25:49'),
(40, 'gcremin', 'Owen Pfannerstill', 'Monahan', 'rippin.antonette@example.net', 6, '2020-01-10 00:25:49', '2020-01-10 00:25:49');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

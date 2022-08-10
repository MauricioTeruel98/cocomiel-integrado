-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 08-08-2022 a las 19:58:19
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cocomiel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` int(255) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `description` text,
  `precio` int(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_images_users` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`id`, `user_id`, `image_path`, `description`, `precio`, `created_at`, `updated_at`) VALUES
(25, 8, '1659998991combo_peppa.jpeg', 'COMBO MESA Y SILLA PEPPA', 10500, '2022-08-08 22:49:51', '2022-08-08 22:49:51'),
(26, 8, '1659999009combo_nube.jpeg', 'COMBO MESA Y SILLA NUBE', 10500, '2022-08-08 22:50:09', '2022-08-08 22:50:09'),
(27, 8, '1659999021abc_encastrable.jpeg', 'ABC ENCASTRABLE', 3000, '2022-08-08 22:50:21', '2022-08-08 22:50:21'),
(28, 8, '1659999036tangram.jpeg', 'TANGRAM', 800, '2022-08-08 22:50:36', '2022-08-08 22:50:36'),
(29, 8, '1659999054torre_aprendizaje.jpeg', 'TORRE APRENDIZAJE', 11000, '2022-08-08 22:50:54', '2022-08-08 22:50:54'),
(30, 8, '1659999074perchero_2.jpeg', 'PERCHERO MONTESSORI', 6000, '2022-08-08 22:51:14', '2022-08-08 22:51:14'),
(31, 8, '1659999094sillon_jurasico_1.jpeg', 'SILLONESA JURÁSICO', 9500, '2022-08-08 22:51:34', '2022-08-08 22:51:34'),
(32, 8, '1659999130mi_primera_huerta.jpeg', 'KIT MI PRIMERA HUERTA', 3500, '2022-08-08 22:52:10', '2022-08-08 22:52:10'),
(33, 8, '1659999142atril_pizarron_1.jpeg', 'ATRIL PIZARRON', 6500, '2022-08-08 22:52:22', '2022-08-08 22:52:22'),
(34, 8, '1659999155combo_universo.jpeg', 'COMBO UNIVERSO', 9000, '2022-08-08 22:52:35', '2022-08-08 22:52:35'),
(35, 8, '1659999172motricidad.jpeg', 'ARCOIRIS DE MOTRICIDAD', 1200, '2022-08-08 22:52:52', '2022-08-08 22:52:52'),
(36, 8, '1659999185arco_waldorf.jpeg', 'ARCOIRIS WALDORF', 1600, '2022-08-08 22:53:05', '2022-08-08 22:53:05'),
(37, 8, '1659999201dino.jpeg', 'DINO', 800, '2022-08-08 22:53:21', '2022-08-08 22:53:21'),
(38, 8, '1659999211dino2.jpeg', 'DINO', 800, '2022-08-08 22:53:31', '2022-08-08 22:53:31'),
(39, 8, '1659999223jirafa.jpeg', 'JIRAFA', 800, '2022-08-08 22:53:43', '2022-08-08 22:53:43'),
(40, 8, '1659999242nube.jpeg', 'NUBE', 800, '2022-08-08 22:54:02', '2022-08-08 22:54:02'),
(41, 8, '1659999260combo-promo.png', 'LLEVÁ 3 Y PAGA:', 2000, '2022-08-08 22:54:20', '2022-08-08 22:54:20'),
(42, 8, '1659999274tabla-oceanica.jpeg', 'TABLA OCEÁNICA', 4500, '2022-08-08 22:54:34', '2022-08-08 22:54:34'),
(43, 8, '1659999297plaza-montessori.jpeg', 'PLAZA MONTESSORI POR ENCARGO', 21000, '2022-08-08 22:54:57', '2022-08-08 22:54:57'),
(44, 8, '1659999312luz.jpeg', 'LUZ DE NOCHE', 3000, '2022-08-08 22:55:12', '2022-08-08 22:55:12'),
(45, 8, '1659999327encastre.jpeg', 'ENCASTRE PLANETAS', 1200, '2022-08-08 22:55:27', '2022-08-08 22:55:27'),
(46, 8, '1659999343tortuga-encastre.jpeg', 'TORTUGA ENCASTRE', 1000, '2022-08-08 22:55:43', '2022-08-08 22:55:43'),
(47, 8, '1659999353arcoiris-dino.jpeg', 'ARCOIRIS DINO', 1000, '2022-08-08 22:55:53', '2022-08-08 22:55:53'),
(48, 8, '1659999364casa_muñecas.jpeg', 'CASITA DE MUÑECAS', 9500, '2022-08-08 22:56:04', '2022-08-08 22:56:04'),
(49, 8, '1659999375balancin1.jpeg', 'BALANCIN', 8000, '2022-08-08 22:56:15', '2022-08-08 22:56:15'),
(50, 8, '1659999386tabla-equilibrio1.jpeg', 'TABLA EQUILIBRIO', 3500, '2022-08-08 22:56:26', '2022-08-08 22:56:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `role` varchar(20) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `surname` varchar(200) DEFAULT NULL,
  `nick` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--


--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `fk_images_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

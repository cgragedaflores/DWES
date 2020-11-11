

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `_33_biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `_33_book`
--

DROP TABLE IF EXISTS `_33_book`;
CREATE TABLE IF NOT EXISTS `_33_book` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `isbn` varchar(20) NOT NULL,
  `tittle` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `editorial` varchar(50) NOT NULL,
  `location_id` int(11) NOT NULL,
  `publication_date` date DEFAULT NULL,
  `inserted_on` datetime DEFAULT NULL,
  `book_status` int(1) NOT NULL,
  `imageName` varchar(200) NOT NULL,
  PRIMARY KEY (`book_id`),
  KEY `fk_books_location` (`location_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

--
-- RELACIONES PARA LA TABLA `_33_book`:
--   `location_id`
--       `_33_location` -> `location_id`
--

--
-- Truncar tablas antes de insertar `_33_book`
--

TRUNCATE TABLE `_33_book`;
--
-- Volcado de datos para la tabla `_33_book`
--

INSERT INTO `_33_book` (`book_id`, `isbn`, `tittle`, `author`, `editorial`, `location_id`, `publication_date`, `inserted_on`, `book_status`, `imageName`) VALUES
(3, '9788420455778', 'Linea de Fuego', 'Aurtor Pérez-Reverte', 'ALFAGUARA', 1, '2020-10-06', '2020-11-06 11:11:45', 1, 'http://localhost/33Biblioteca_Local/img/portadas/Linea_de_Fuego.jpg'),
(4, '978-84-01-02287-6', 'Las tinieblas y el alba(La precuela de Los pilares', 'Follett, Ken', 'Plaza & Janez', 1, '2020-09-15', '2020-11-06 11:31:47', 1, 'http://localhost/33Biblioteca_Local/img/portadas/Las_Tinieblas_Alba.jpg'),
(5, '978-84-204-3965-5', 'La vida contada por un sapiens a un neandertal', 'Millás Juan Jos / Arsuaga, Juan Luis', 'ALFAGUARA', 1, '2020-09-23', '2020-11-06 11:39:07', 1, 'http://localhost/33Biblioteca_Local/img/portadas/La vida contada por un sapiens a un neandertal.jpg'),
(6, '978-84-670-6029-4', 'Emocionarte. La doble vida de los cuadros ', 'Amor Carlos del', 'Espasa', 1, '2020-10-20', '2020-11-06 11:47:18', 1, 'http://localhost/33Biblioteca_Local/img/portadas/Emocionarte.jpg'),
(7, '978-84-17752-92-7', 'Dime qué comes y te diré qué bacterias tienes El i', 'García-Orea Haro, Blanca', 'GRIJALBO ILUSTRADOS', 1, '2020-10-08', '2020-11-06 12:08:23', 1, 'http://localhost/33Biblioteca_Local/img/portadas/Dime qué comes.png'),
(8, '978-84-08-23335-0', '¿A qué estás esperando?', 'Maxwell,Megan', 'Esencia', 1, '2020-10-29', '2020-11-06 12:11:19', 1, 'http://localhost/33Biblioteca_Local/img/portadas/AqueEstasEsperando.jpg'),
(11, '978-84-204-3945-7', 'La buena suerte', 'Montero,Rosa', 'ALFAGUARA', 1, '2020-08-27', '2020-11-06 12:16:45', 1, 'http://localhost/33Biblioteca_Local/img/portadas/LabuenaSuerte.jpg'),
(12, '     978-84-270-4785', 'Lucha por lo justo', 'Spiriman Yeah!(Jesús Candel)', 'Martinez Roca', 1, '2020-10-27', '2020-11-06 12:21:14', 1, 'http://localhost/33Biblioteca_Local/img/portadas/LuchaPorLoJusto.jpg'),
(13, '978-84-253-5825-8', 'Si nos enseñaran a perder, ganaríamos siempre', 'Espinosa,Albert', 'Grijalbo', 1, '2020-10-08', '2020-11-06 12:23:35', 1, 'http://localhost/33Biblioteca_Local/img/portadas/PerderGanar.jpg'),
(14, '978-84-17860-79-0', 'El infinito en un junco La invención de los libros', 'Vallejo Irene', 'Siruela', 1, '2020-11-04', '2020-11-06 12:27:13', 1, 'http://localhost/33biblioteca_Local/img/portadas/Elinfinito.jpg'),
(15, '     978-84-9066-861', 'Como polvo en el viento', 'Padura Leonardo', 'Tusquets Editores', 1, '2020-08-25', '2020-11-06 12:29:00', 1, 'http://localhost/33biblioteca_Local/img/portadas/Como polvo en el viento.jpg'),
(16, '978-84-7953-903-0', 'El libro tibetano de la vida y de la muerte', 'Rinpche, sogyal', 'Urano', 1, '2015-01-19', '2020-11-06 12:30:27', 1, 'http://localhost/33biblioteca_Local/img/portadas/El libro tibetano de la vida y de la muerte.jpg'),
(17, '978-84-9895-405-0', 'Adiós al frío', 'Sastre Elvira', 'Visor Libros', 1, '2020-08-01', '2020-11-06 12:31:42', 1, 'http://localhost/33biblioteca_Local/img/portadas/AdiosAlFrio.jpg'),
(18, '978-84-696-2967-3', 'El Menhir de Oro', 'Goscinny Rene', 'Editorial Bruño', 1, '2020-10-22', '2020-11-06 12:34:49', 1, 'http://localhost/33biblioteca_Local/img/portadas/El Menhir de Oro.jpg'),
(19, '978-84-272-2123-9', 'Diario de Greg 15. Tocado y hundido', 'Kinney Jeff', 'RBA Molino', 1, '2020-10-28', '2020-11-06 12:36:25', 1, 'http://localhost/33biblioteca_Local/img/portadas/Diario de Greg 15. Tocado y hundido.jpg'),
(20, '978-84-344-3309-0', 'El dominio mental La geopolítica de la mente', 'Baños Bajo, Pedro', 'Editorial Ariel', 1, '2020-10-29', '2020-11-06 12:38:02', 1, 'http://localhost/33biblioteca_Local/img/portadas/El dominio mental.jpg'),
(21, '978-84-306-2339-6', 'Los europeos Tres vidas y el nacimiento de la cult', 'Figes Orlando', 'TAURUS', 1, '2020-06-04', '2020-11-06 12:40:42', 1, 'http://localhost/33biblioteca_Local/img/portadas/Los europeos.jpg'),
(22, '978-84-253-5962-0', 'Optimismo y salud Lo que la ciencia sabe de los be', 'Rojas Marcos, Luis', 'GRIJALBO', 1, '2020-10-22', '2020-11-06 12:41:58', 1, 'http://localhost/33biblioteca_Local/img/portadas/Optimismo y salud.jpg'),
(23, '978-84-9066-731-6', 'Patria', 'Arumburu, Fernando', 'Maxi-Tusquests', 1, '2019-08-27', '2020-11-06 12:43:55', 1, 'http://localhost/33biblioteca_Local/img/portadas/Patria.jpg'),
(24, '     978-84-270-4749', 'Los Compas y la maldición de Mikecrack', 'Mikecrack, El Trollino y Timba Vk', 'Ediciones Martinez Roca', 1, '2020-10-29', '2020-11-06 12:44:52', 1, 'http://localhost/33biblioteca_Local/img/portadas/Los Compas y la maldición de Mikecrack.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `_33_location`
--

DROP TABLE IF EXISTS `_33_location`;
CREATE TABLE IF NOT EXISTS `_33_location` (
  `location_id` int(11) NOT NULL AUTO_INCREMENT,
  `module` varchar(20) NOT NULL,
  `_position` varchar(20) DEFAULT NULL,
  `shelf` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`location_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- RELACIONES PARA LA TABLA `_33_location`:
--

--
-- Truncar tablas antes de insertar `_33_location`
--

TRUNCATE TABLE `_33_location`;
--
-- Volcado de datos para la tabla `_33_location`
--

INSERT INTO `_33_location` (`location_id`, `module`, `_position`, `shelf`) VALUES
(1, '1', 'vertical', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `_33_partners`
--

DROP TABLE IF EXISTS `_33_partners`;
CREATE TABLE IF NOT EXISTS `_33_partners` (
  `dni` varchar(9) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `addres` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `passwd` varchar(30) NOT NULL,
  `birthdate` date NOT NULL,
  `member_type` varchar(20) DEFAULT NULL,
  `phone_number` varchar(9) DEFAULT NULL,
  `joined_on` datetime DEFAULT NULL,
  `partners_status` int(1) NOT NULL,
  PRIMARY KEY (`dni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONES PARA LA TABLA `_33_partners`:
--

--
-- Truncar tablas antes de insertar `_33_partners`
--

TRUNCATE TABLE `_33_partners`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `_33_reservations`
--

DROP TABLE IF EXISTS `_33_reservations`;
CREATE TABLE IF NOT EXISTS `_33_reservations` (
  `reservation_id` int(11) NOT NULL AUTO_INCREMENT,
  `partner_id` varchar(9) NOT NULL,
  `book_id` int(11) NOT NULL,
  `inital_date` date NOT NULL,
  `return_date` date NOT NULL,
  `real_return_date` date DEFAULT NULL,
  `reserved_on` datetime DEFAULT NULL,
  PRIMARY KEY (`reservation_id`),
  KEY `fk_reservation_books` (`book_id`),
  KEY `fk_reservation_partners` (`partner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONES PARA LA TABLA `_33_reservations`:
--   `book_id`
--       `_33_book` -> `book_id`
--   `partner_id`
--       `_33_partners` -> `dni`
--

--
-- Truncar tablas antes de insertar `_33_reservations`
--

TRUNCATE TABLE `_33_reservations`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `_33_reservations_log`
--

DROP TABLE IF EXISTS `_33_reservations_log`;
CREATE TABLE IF NOT EXISTS `_33_reservations_log` (
  `reservation_log_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) NOT NULL,
  `customer_id` varchar(9) DEFAULT NULL,
  `initial_date` date DEFAULT NULL,
  `with_pentalty` int(11) DEFAULT NULL,
  PRIMARY KEY (`reservation_log_id`),
  KEY `fk_reservationLog_books` (`book_id`),
  KEY `fk_reservationLog_partners` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONES PARA LA TABLA `_33_reservations_log`:
--   `book_id`
--       `_33_book` -> `book_id`
--   `customer_id`
--       `_33_partners` -> `dni`
--

--
-- Truncar tablas antes de insertar `_33_reservations_log`
--

TRUNCATE TABLE `_33_reservations_log`;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `_33_book`
--
ALTER TABLE `_33_book`
  ADD CONSTRAINT `fk_books_location` FOREIGN KEY (`location_id`) REFERENCES `_33_location` (`location_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `_33_reservations`
--
ALTER TABLE `_33_reservations`
  ADD CONSTRAINT `fk_reservation_books` FOREIGN KEY (`book_id`) REFERENCES `_33_book` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_reservation_partners` FOREIGN KEY (`partner_id`) REFERENCES `_33_partners` (`dni`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `_33_reservations_log`
--
ALTER TABLE `_33_reservations_log`
  ADD CONSTRAINT `fk_reservationLog_books` FOREIGN KEY (`book_id`) REFERENCES `_33_book` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_reservationLog_partners` FOREIGN KEY (`customer_id`) REFERENCES `_33_partners` (`dni`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

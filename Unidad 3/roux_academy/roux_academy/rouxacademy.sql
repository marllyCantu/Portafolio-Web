-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2021 a las 02:12:14
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `rouxacademy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artistas`
--

CREATE TABLE `artistas` (
  `ID_Artista` int(3) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `descripcion` varchar(400) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `artistas`
--

INSERT INTO `artistas` (`ID_Artista`, `nombre`, `descripcion`, `foto`) VALUES
(1, 'Barot Bellingham', 'Barot has just finished his final year at The Royal Academy of Painting and Sculpture, where he excelled in glass etching paintings and portraiture. Hailed as one of the most diverse artists of his generation, Barot is equally as skilled with watercolors as he is with oils.', 'images/artists/Barot_Bellingham_tn.jpg'),
(2, 'Jonathan G. Ferrar II', 'Labeled as “The Artist to Watch in 2016” by the London Review, Johnathan has already sold one of the highest priced commissions paid to an art student, ever on record. The piece, entitled Gratitude Resort, a work in oil and mixed media, was sold for $750,000.', 'images/artists/Jonathan_Ferrar_tn.jpg'),
(3, 'Hillary Hewitt Goldwynn-Post', 'Hillary is a sophomore art sculpture student at New York University, and has already won all the major international prizes for new sculptors, including the Divinity Circle, the International Sculptor’s Medal, and the Academy of Paris Award. Hillary’s CAC exhibit features paintings that contain only water images including waves, deep sea, and river.', 'images/artists/Hillary_Goldwynn_tn.jpg'),
(4, ' Hassum Harrod', 'The Art College in New Dehli has sponsored Hassum for his entire undergraduate career at the university, seeing great promise in his contemporary paintings of landscapes - that use equal parts muted and vibrant tones. Hassum will be speaking on “The use and absence of color in modern art”.', 'images/artists/Hassum_Harrod_tn.jpg'),
(5, 'Jennifer_Jerome', 'A native of New Orleans, much of Jennifer’s work has centered around abstract images that depict flooding and rebuilding, having grown up as a teenager in the post-flood years. Despite the sadness of devastation and lives lost.', 'images/artists/Jennifer_Jerome_tn.jpg'),
(6, 'LaVonne L. LaRue', 'LaVonne’s giant-sized paintings all around Chicago tell the story of love, nature, and conservation - themes that are central to her heart. LaVonne will share her love and skill of graffiti art on Monday’s schedule, as she starts the painting of a 20-foot high wall in the Rousseau Room of Hotel Contempo in front of a standing-room only audience in Art in Unexpected Places.', 'images/artists/LaVonne_LaRue_tn.jpg'),
(7, 'Constance Olivia Smith', 'Constance received the Fullerton-Brighton-Norwell Award for Modern Art for her mixed-media image of a tree of life, with jewel-adorned branches depicting the arms of humanity, and precious gemstone-decorated leaves representing the spouting buds of togetherness.', 'images/artists/Constance_Smith_tn.jpg'),
(8, 'Riley Rudolph Rewington', 'A first-year student at the Roux Academy of Art, Media, and Design, Riley is already changing the face of modern art at the university. Riley’s exquisite abstract pieces have no intention of ever being understood, but instead beg the viewer to dream, create, pretend, and envision with their mind’s eye. Riley will be speaking on the “Art of Abstract” during Thursday’s schedule.', 'images/artists/Riley_Rewington_tn.jpg'),
(9, 'Xhou Ta', 'A senior at the China International Art University, Xhou has become well-known for his miniature sculptures, often the size of a rice granule, that are displayed by rear projection of microscope images on canvas. Xhou will discuss the art and science behind his incredibly detailed works of art.', 'images/artists/Xhou_Ta_tn.jpg'),
(10, 'Marlly Cantu', 'Estudiante de la carrera de Ingeniería en Tecnologías de la Información en la Universidad Politécnica de Victoria. Fecha de entrea del producto para la unidad 3: 10 de noviembre de 2021', 'images/artists/yo.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistentes`
--

CREATE TABLE `asistentes` (
  `ID_Asistente` int(3) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `company` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `tipo` varchar(30) DEFAULT NULL,
  `comentario` varchar(400) DEFAULT NULL,
  `referencia` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asistentes`
--

INSERT INTO `asistentes` (`ID_Asistente`, `nombre`, `company`, `email`, `tipo`, `comentario`, `referencia`) VALUES
(1, 'Otra prueba', 'una de por ahi', 'uno@hotmail.com', 'comment', 'No se que', 'friend'),
(2, 'Mateo', 'Kinder', 'mateo@gmail.com', 'question', 'Mi comentario personal', 'friend'),
(3, 'Daniel Guzman', 'Primaria', 'daniel@gmail.com', 'comment', 'Aquí va mi comentario', 'facebook'),
(4, 'Ana Garcia', 'UPV', '19@upv.edu.mx', 'Pregunta', '¿Funciona?', 'Twitter'),
(5, 'Avril Castillo', 'Secundaria', 'ac@gmail.com', 'Comentario', 'Buen día', 'Twitter');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_Usuario` int(3) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `contra` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_Usuario`, `nombre`, `contra`) VALUES
(1, 'admin', '17c4520f6cfd1ab53d8745e84681eb49'),
(2, 'marlly', '17c4520f6cfd1ab53d8745e84681eb49'),
(3, 'profe', '17c4520f6cfd1ab53d8745e84681eb49');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `artistas`
--
ALTER TABLE `artistas`
  ADD PRIMARY KEY (`ID_Artista`);

--
-- Indices de la tabla `asistentes`
--
ALTER TABLE `asistentes`
  ADD PRIMARY KEY (`ID_Asistente`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `artistas`
--
ALTER TABLE `artistas`
  MODIFY `ID_Artista` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `asistentes`
--
ALTER TABLE `asistentes`
  MODIFY `ID_Asistente` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_Usuario` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

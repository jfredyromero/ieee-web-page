-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 22, 2022 at 03:49 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ieee`
--
DROP DATABASE IF EXISTS `ieee`;
CREATE DATABASE IF NOT EXISTS `ieee` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ieee`;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(10) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id_admin`, `usuario`, `nombre`, `password`) VALUES
(1, 'jvargas', 'Jorge Andrés Vargas', '$2y$12$K.sqU2VjnzgMF5kl71BXiuQgtysJZ4GiEqGj0.vXPDpKk2Mw0ubvO'),
(2, 'admin', 'Super Usuario', '$2y$12$G1p3YBNUfUvT2s5QbIMLQ.cF65Z0nZdVk4L3660ec4Tj7FxiGTtdu'),
(3, 'jfredy', 'Jhon Fredy Romero', '$2y$12$UtGFTrh1NLV3U1qUmn9ZIOxcbdGjzjqdWThew70SOTDlXSN8niUWa'),
(4, 'dgomez', 'Daniel Gomez', '$2y$12$DbNTVBHUbYk7kEX2R2ERKeRhzG0hJsjvqh3yKbzpGCHlKzmatVzs2');

-- --------------------------------------------------------

--
-- Table structure for table `cargos`
--

CREATE TABLE `cargos` (
  `id` int(11) NOT NULL,
  `cargo` varchar(20) NOT NULL,
  `urlLogo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cargos`
--

INSERT INTO `cargos` (`id`, `cargo`, `urlLogo`) VALUES
(1, 'Coordinador TET', 'medallaTET.svg'),
(2, 'Web Master', 'medallaWebMaster.svg'),
(3, 'Coordinadora WIE', 'medallaWIE.svg'),
(4, 'Presidente', 'medallaPresidente.svg'),
(5, 'Vicepresidente', 'medallaVice.svg'),
(6, 'Fiscal', 'medallaFiscal.svg'),
(7, 'Tesorero', 'medallaTesorero.svg'),
(8, 'Secretario', 'medallaSecretario.svg'),
(9, 'Coordinador', 'medallaCoordinador.svg'),
(10, 'Sub-Coordinador', 'medallaCoordinador.svg'),
(11, 'Voluntario', 'medallaVoluntario.svg');

-- --------------------------------------------------------

--
-- Table structure for table `cargos_de_miembros`
--

CREATE TABLE `cargos_de_miembros` (
  `id` int(11) NOT NULL,
  `miembro` int(11) NOT NULL,
  `cargo` int(11) NOT NULL,
  `comite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cargos_de_miembros`
--

INSERT INTO `cargos_de_miembros` (`id`, `miembro`, `cargo`, `comite`) VALUES
(1, 22, 9, 2),
(2, 26, 4, NULL),
(3, 26, 6, NULL),
(5, 24, 7, NULL),
(6, 19, 2, NULL),
(8, 24, 2, NULL),
(9, 19, 11, 5),
(12, 22, 10, 2),
(13, 23, 10, 5),
(14, 24, 10, 5),
(15, 25, 11, 4),
(16, 26, 11, 5),
(17, 1, 10, 5),
(18, 1, 10, 3),
(19, 1, 10, 4),
(20, 1, 9, 5),
(21, 1, 9, 3),
(22, 1, 9, 4),
(23, 1, 2, NULL),
(24, 2, 10, 2),
(25, 2, 10, 1),
(26, 2, 10, 5),
(27, 2, 10, 3),
(28, 2, 6, NULL),
(29, 3, 10, 3),
(30, 4, 10, 3),
(31, 4, 2, NULL),
(32, 5, 10, 1),
(33, 5, 10, 3),
(34, 5, 10, 4),
(35, 5, 9, 1),
(36, 5, 5, NULL),
(37, 6, 10, 5),
(38, 6, 5, NULL),
(39, 6, 4, NULL),
(40, 7, 10, 2),
(41, 8, 10, 3),
(42, 9, 10, 2),
(43, 9, 9, 2),
(44, 10, 10, 4),
(45, 10, 4, NULL),
(46, 11, 10, 3),
(47, 12, 10, 3),
(48, 13, 10, 5),
(49, 13, 10, 3),
(50, 14, 10, 3),
(51, 14, 6, NULL),
(52, 14, 7, NULL),
(53, 15, 10, 1),
(54, 15, 9, 3),
(55, 16, 10, 4),
(56, 16, 9, 3),
(57, 16, 7, NULL),
(58, 16, 3, NULL),
(59, 17, 10, 2),
(60, 17, 10, 3),
(61, 17, 9, 2),
(62, 17, 9, 3),
(63, 18, 10, 2),
(64, 18, 10, 5),
(65, 18, 10, 3),
(66, 18, 10, 4),
(67, 27, 4, NULL),
(68, 28, 5, NULL),
(69, 27, 11, 1),
(70, 28, 11, 4),
(71, 31, 9, 1),
(72, 31, 11, 1),
(73, 32, 11, 1),
(74, 32, 10, 1),
(75, 33, 9, 3),
(76, 34, 11, 3),
(77, 33, 11, 3),
(78, 34, 10, 3),
(79, 35, 9, 5),
(80, 36, 10, 5),
(81, 35, 11, 5),
(82, 36, 11, 5),
(83, 37, 9, 4),
(84, 38, 11, 4),
(85, 37, 11, 4),
(86, 38, 10, 4),
(87, 39, 9, 2),
(88, 40, 11, 2),
(89, 39, 11, 5),
(90, 40, 10, 2),
(91, 40, 11, 1),
(92, 39, 11, 2),
(93, 34, 11, 2),
(94, 26, 11, 1),
(95, 41, 11, 3),
(96, 42, 11, 3),
(97, 42, 11, 2),
(98, 43, 11, 1),
(99, 44, 6, NULL),
(100, 44, 11, 5),
(101, 45, 11, 3),
(102, 46, 11, 3),
(103, 47, 11, 5),
(104, 48, 11, 1),
(105, 49, 11, 3),
(106, 50, 11, 5),
(107, 50, 10, 2),
(108, 50, 11, 2),
(109, 51, 1, NULL),
(110, 51, 11, 5),
(111, 52, 11, 1),
(112, 53, 11, 4),
(113, 53, 11, 2),
(114, 53, 9, 2),
(115, 54, 7, NULL),
(116, 54, 11, 3),
(117, 55, 11, 3),
(118, 23, 11, 5),
(119, 57, 11, 3),
(120, 58, 11, 3),
(121, 59, 11, 4),
(122, 60, 11, 5),
(123, 61, 11, 3),
(124, 62, 11, 3),
(125, 63, 11, 4),
(126, 63, 11, 2),
(127, 64, 11, 5),
(128, 65, 11, 4),
(129, 65, 11, 2),
(130, 66, 11, 5),
(131, 67, 11, 5),
(132, 68, 11, 1),
(133, 69, 11, 3),
(134, 70, 11, 3),
(135, 71, 11, 1),
(136, 72, 11, 4),
(137, 72, 11, 2),
(138, 73, 11, 3),
(139, 74, 11, 5),
(140, 74, 10, 5),
(141, 75, 11, 5),
(142, 76, 11, 1),
(143, 77, 11, 3),
(144, 78, 11, 5),
(145, 72, 3, NULL),
(146, 79, 11, 4),
(147, 79, 11, 2),
(148, 80, 10, 3),
(149, 80, 11, 3),
(150, 80, 11, 2),
(151, 81, 11, 1),
(152, 58, 8, NULL),
(153, 35, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comites`
--

CREATE TABLE `comites` (
  `id` int(11) NOT NULL,
  `comite` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comites`
--

INSERT INTO `comites` (`id`, `comite`) VALUES
(1, 'Académico'),
(2, 'Lúdicas'),
(3, 'Logística'),
(4, 'Patrocinios'),
(5, 'Publicidad');

-- --------------------------------------------------------

--
-- Table structure for table `miembros`
--

CREATE TABLE `miembros` (
  `id` int(11) NOT NULL,
  `primerNombre` varchar(30) NOT NULL,
  `segundoNombre` varchar(30) DEFAULT NULL,
  `nombrePreferido` tinyint(4) NOT NULL DEFAULT 1,
  `primerApellido` varchar(30) NOT NULL,
  `segundoApellido` varchar(30) DEFAULT NULL,
  `nombreEnRama` varchar(30) NOT NULL,
  `anioIngresoRama` year(4) NOT NULL,
  `anioSalidaRama` year(4) DEFAULT NULL,
  `correo` varchar(100) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `frase` varchar(400) NOT NULL,
  `urlFoto` varchar(400) NOT NULL,
  `urlLinkedin` varchar(400) DEFAULT NULL,
  `estado` int(1) NOT NULL DEFAULT 0,
  `ocupacionActual` varchar(30) DEFAULT NULL,
  `contactos` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `miembros`
--

INSERT INTO `miembros` (`id`, `primerNombre`, `segundoNombre`, `nombrePreferido`, `primerApellido`, `segundoApellido`, `nombreEnRama`, `anioIngresoRama`, `anioSalidaRama`, `correo`, `celular`, `frase`, `urlFoto`, `urlLinkedin`, `estado`, `ocupacionActual`, `contactos`) VALUES
(1, 'Diego ', '', 1, 'Mosquera ', 'Betancourt', 'Diego ', 2006, 2012, 'mosquerabetancourt@gmail.com', '3006929993', 'La rama IEEE aportó en mí la cultura corporativa y el liderazgo.', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', '', 1, '', ''),
(2, 'Dario ', 'Fernando ', 1, 'Gustin ', 'Insuasty', 'Dario ', 2016, 2018, 'dariogustin@hotmail.com', '3115637110', 'El relacionamiento con personas y entidades.', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', '', 1, '', ''),
(3, 'Sebastian ', '', 1, 'Orozco', '', 'Sebastian ', 2011, 2014, 'seorozco19@gmail.com', '3013446877', 'Buenos momentos, networking, amigos.', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', '', 1, '', ''),
(4, 'Carlos ', 'Andres ', 1, 'Ararat ', 'Mina', 'Carlos ', 2011, 2015, 'camlx2@gmail.com', '3104710476', 'Relaciones personales y conocimiento del mundo laboral.', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', '', 1, '', ''),
(5, 'Johan ', '', 1, 'Tique', '', 'Johan ', 2010, 2012, 'johan.tique@gmail.com', '3137568475', 'Amigos que con el transcurso de los años se han convertido en familia. Adicionalmente a eso aportó contactos, experiencia de logística, mejora del liderazgo y aventuras.', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', '', 1, '', ''),
(6, 'Diego ', '', 1, 'Calero', '', 'Diego ', 2011, 2014, 'diegof9310@gmail.com', '3014442049', 'Considero que la rama me dejo primero, un gran grupo de amigos muy valiosos. A nivel profesional, me ayudo a poder aprender y desarrollar diferentes habilidades que no conocía, habilidades que en la industria se denominan softskills o habilidades blandas.', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', '', 1, '', ''),
(7, 'Diana ', '', 1, 'Samboní', '', 'Diana ', 2013, 2015, 'dianasamboni22@gmail.com', '3003519066', 'Entender que desde cualquier rama de trabajo es posible impactar positivamente la vida de las personas, en mi experiencia personal estuve muy ligada al trabajo con la WIE y fue muy grato poder llevar alegría a tantas personas.', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', '', 1, '', ''),
(8, 'Herlan', '', 1, 'Alban ', 'Diaz', 'Herlan', 2005, 2008, 'healban@unicauca.edu.co', '3005242562', 'Espacios para relacionamiento con compañeros local y regionalmente, aprendizaje, organización y emprendimiento.', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', '', 1, '', ''),
(9, 'Santiago ', 'Andrés', 1, 'Agredo ', 'Parra', 'Santiago ', 2009, 2011, 'Sant1ago@msn.com', '3002693668', 'Liderazgo, proactividad, networking, ', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', '', 1, '', ''),
(10, 'Juan ', 'Andrés ', 1, 'Cárdenas ', 'Diaz', 'Juan ', 2008, 2011, 'juancadi28@gmail.com', '3014014267', 'Fue una gran experiencia que me permitió fortalecer grandes lazos de amistad, desarrollar habilidades blandas de gran utilidad para la vida laboral, relacionarme con empresas del sector de las TI y profesionales académicos de universidades de todo el país (Networking) y sobre todo poder aportar como voluntario al desarrollo de la comunidad académica de la FIET a través de diferentes eventos coordi', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', '', 1, '', ''),
(11, 'Jairo ', 'Andrés ', 1, 'Castaño', 'Rosero', 'Jairo ', 2006, 2008, 'jacastano@gmail.com', '3163413155', 'Me aportó ganas, trabajo en equipo.', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', '', 1, '', ''),
(12, 'Danny ', 'Alejandro ', 1, 'Solano ', 'Concha', 'Danny ', 2008, 2011, 'dannysenju@gmail.com', '3012503312', 'Contactos, experiencia en grupos, organización de procesos y eventos, amistades.', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', '', 1, '', ''),
(13, 'Daniela ', 'Alexandra ', 1, 'Embus ', 'Gaviria', 'Daniela ', 2013, 2016, 'daeg95@gmail.com', '3113733453', 'Me ayudo a quitar un poco la timidez, ya que debíamos realizar saloneos y además de conseguir patrocinios. Por medio de la visita técnica, me dio una perspectiva  del mundo laboral en esta carrera. Fomento la parte social a través de las actividades que realizaba la WIE.', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', '', 1, '', ''),
(14, 'Eileen ', '', 1, 'Martínez', ' Gómez', 'Eileen M', 2012, 2014, 'eileenjohanam@gmail.com', '3187944450', 'La Rama Estudiantil IEEE me permitió fortalecer habilidades blandas muy necesarias en el mundo laboral como el liderazgo, el trabajo en equipo, la transparencia, entre otras. También me permitió compartir momentos únicos y anécdotas inolvidables.', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', '', 1, '', ''),
(15, 'Maria ', 'Camila ', 1, 'Chavez ', 'Tobar', 'Maria ', 2015, 2017, 'camichavez19@gmail.com', '3', 'Trabajar en equipo. Soy una persona impaciente, que le gusta que las cosas se hagan bien y lo más rapido posible y me choqué un par de veces trabajando en grupo, pero entendí que todos tenemos un ritmo diferente y que el objetivo primordial es la realizacion de los objetivos y metas.', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', '', 1, '', ''),
(16, 'Isabel ', 'Cristina ', 1, 'Chávez ', 'Tobar', 'Isabel ', 2011, 2014, 'isabelchaveztobar@gmail.com', '3014477761', 'La rama estudiantil permite fortalecer habilidades blandas importantes para la vida laboral. Me aportó amigos valiosos con los que aun cuento. Pertenecer a la rama fue muy importante, me enseño no solo a pensar en lo académico si no poder aportar en tema sociales y buscar en generar espacios de aprendizaje como también lúdicos para todos los estudiantes de ingeniería. \n', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', '', 1, '', ''),
(17, 'Jhonnier ', 'Alberto ', 1, 'Sanchez ', 'Dorado', 'Jhonnier ', 2011, 2012, 'jhonnier.sanchez@gmail.com', '3104615833', 'Me aportó gestión, autodisciplina, colaboración, trabajo en grupo.', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', '', 1, '', ''),
(18, 'Silvana', ' Lorena ', 1, 'Criollo ', 'Obando', 'Silvana', 2010, 2014, 'silvanaco87@gmail.com', '3005137747', 'La rama me permitió desarrollar habilidades blandas que fueron un excelente complemento a mi formación académica. Adicional que encontré grandes amigos con los que a hoy en día sigo en contacto. Coordinadora del capítulo de Computer Society. ', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', '', 1, '', ''),
(19, 'Jhon', 'Fredy', 2, 'Romero', 'Núñez', 'Fredy', 2021, 2021, 'jhonrom@unicauca.edu.com', '3014822371', 'Mi mamá me dio la vida y la rama IEEE las ganas de vivirla', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', 'https://www.linkedin.com/in/jhon-fredy-romero-n%C3%BA%C3%B1ez-25b4b9174/', 1, '', ''),
(22, 'Santiago', 'de Jesús', 1, 'Martinez', 'Semanate', 'Santi', 2018, 2021, 'santimartinez@unicauca.edu.co', '3124285279', 'Nose', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', '', 1, '', ''),
(23, 'Angel', 'Gabriel', 1, 'Pasaje', 'Erazo', 'Angel', 2021, 2022, 'apasaje@unicauca.edu.co', '3204391332', 'si', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', '', 1, '', ''),
(24, 'Jose', 'Miguel', 1, 'Betancourt', 'Chaves', 'Betan', 2020, 2021, 'josebetancourt@unicauca.edu.co', '3046076944', 'Bla bla bla', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', '', 1, '', ''),
(25, 'Daniel', '', 1, 'Gomez', 'Mendez', 'Negru', 2021, 2021, 'dgomez216@unicauca.edu.co', '3218933997', 'Bla bla bla', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', '', 1, '', ''),
(26, 'Valentina', '', 1, 'Solano', 'Mogollón', 'Valen', 2019, 2022, 'smvalentina@unicauca.edu.co', '3207775660', 'La Rama me enseño a potenciar habilidades como el liderazgo y la organización de proyectos', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', '', 1, '', ''),
(27, 'Lina', 'Virginia', 1, 'Muñoz', 'Garcés', 'Gigi', 2020, NULL, 'linavm@unicauca.edu.co', '3105110389', 'Que dice la banda', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(28, 'Juan Diego', NULL, 1, 'Bravo', 'Guevara', 'Bravo', 2020, NULL, 'juandbravo@unicauca.edu.co', '3012329288', 'El único modo de hacer un gran trabajo es amar lo que haces', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(31, 'Johan', 'Santiago', 2, 'Yangana', NULL, 'Santiago Yangana', 2021, NULL, 'johanyangana@unicauca.edu.co', '3122275035', 'Hola mundo', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(32, 'Luis', 'Fernando', 1, 'Coral', 'Patiño', 'Luchito', 2022, NULL, 'lfcoral@unicauca.edu.co', '3158004328', 'Hola soy lucho', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(33, 'Fredy', 'Andrés', 1, 'Dorado', 'Martínez', 'Fredy', 2021, NULL, 'andreslolomfc@unicauca.edu.co', '', 'Hola soy Fredy Andrés', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(34, 'Luis', 'Gerardo', 1, 'Sánchez', NULL, 'Lucho', 2021, NULL, 'lgsanchez@unicauca.edu.co', '', 'Hola soy lucho', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(35, 'Jorge', 'Andrés', 1, 'Vargas', 'Cordoba', 'Apu', 2020, NULL, 'javargas@unicauca.edu.co', '', 'Hola soy Apu', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(36, 'Juan', 'José', 1, 'Contreras', 'Correa', 'JuanJo', 2021, NULL, 'jcontreras@unicauca.edu.co', '', 'Hola soy JuanJo', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(37, 'Juan Ángel', NULL, 1, 'Gutierrez', 'Chito', 'Juan Ángel', 2018, NULL, 'juanagutierrez@unicauca.edu.co', '', 'Hola soy Juan Ángel', 'https://i.pinimg.com/originals/e2/a4/ec/e2a4ec5bef48a63d2e142676db049449.jpg', NULL, 1, NULL, NULL),
(38, 'María', 'Paula', 1, 'Cabezas', 'Charry', 'Mapu Heads', 2021, NULL, 'mcabezas@unicauca.edu.co', '', 'Hola soy María Paula', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(39, 'Bernardo', NULL, 1, 'García', 'Osorio', 'Berni', 2019, NULL, 'bernardogarcia@unicauca.edu.co', '', 'Hola soy berni', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(40, 'Santiago', 'de Jesús', 1, 'Martínez', 'Semanate', 'Santi Martínez', 2019, NULL, 'santimartinez@unicauca.edu.co', '', 'Hola soy Santi Martínez', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(41, 'Jhon', 'Sebastian', 1, 'Alegria ', NULL, 'Jhon', 2021, NULL, 'jsalegria@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(42, 'Fabián', 'Andrés', 1, 'Bastidas', NULL, 'Fabio', 2021, NULL, 'fabianba@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(43, 'Lina', 'Maria', 1, 'Cabrera', 'Garcia', 'Lina', 2021, NULL, 'lmarcg@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(44, 'Ana', 'Isabel', 1, 'Caicedo', 'Camayo', 'Anita', 2021, NULL, 'anitacaicedo@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(45, 'Mariana', '', 1, 'Cardona', 'Tobar', 'Mariana', 2021, NULL, 'mcardona216@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(46, 'Laura', 'Sofía ', 1, 'Daza', 'Rosero', 'Lauris', 2020, NULL, 'lauradaza@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(47, 'Jose', 'Carlos', 1, 'Dorado', 'Quiñonez', 'Charlie', 2021, NULL, 'jcdorado@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(48, 'Nathalia', 'Isabel', 1, 'Guerrero', 'López', 'Nathis', 2021, NULL, 'nathaliaguel@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(49, 'Luis', 'Carlos', 1, 'Gutierrez', NULL, 'Guti', 2018, NULL, 'luiscach@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(50, 'Sofía', NULL, 1, 'Henao', 'Ordoñez', 'Sofi', 2021, NULL, 'adrisofihe@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(51, 'Verónica ', NULL, 1, 'Lopez', 'Paladines', 'Vero', 2020, NULL, 'veronicalp@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(52, 'Victor', 'Manuel', 1, 'Macías', 'Martinez', 'Vic', 2020, NULL, 'vmmacias@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(53, 'Juan', 'Manuel', 1, 'Muñoz', 'Mera', 'Juanmota', 2021, NULL, 'jumamunoz@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(54, 'Isabella', NULL, 1, 'Omen', 'Rengifo', 'Isa', 2020, NULL, 'iomen@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(55, 'Jaime', 'Alfonso', 1, 'Pabón', NULL, 'Jaime', 2018, NULL, 'japabon216@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(57, 'Francisco', 'David', 1, 'Pino', 'Mamiam', 'Junior', 2021, NULL, 'fdpino@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(58, 'Paula', 'Andrea', 1, 'Rosero', 'Pérez', 'Pau', 2020, NULL, 'parosero@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(59, 'Felipe', 'Alejandro', 1, 'Tosse', NULL, 'Tosse', 2016, NULL, 'ftosse@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(60, 'Alejandra', NULL, 1, 'Valencia', 'Fernandez', 'Alejandra', 2021, NULL, 'alejandravalencia@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(61, 'Aymer', 'Camilo', 2, 'Ortiz', 'Pulido', 'El Mono', 2022, NULL, 'aymercsamilo@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(62, 'Juan ', 'Felipe', 1, 'Chaves', 'Tibaduiza', 'Chaves', 2022, NULL, 'jufechaves@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(63, 'Manuel', 'Alejandro', 1, 'Rosero', 'Mamian', 'Manuel', 2022, NULL, 'manuelar@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(64, 'Maria', 'Paula', 1, 'Guaca', 'Campo', 'Maria Paula', 2022, NULL, 'mpguaca@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(65, 'Juan', 'Manuel', 1, 'Ordoñez', 'Fajardo', 'Juanmita', 2022, NULL, 'jumordonez@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(66, 'Juan', 'Jose', 1, 'Zarama', 'Erazo', 'Zarama', 2022, NULL, 'juanjozam@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(67, 'Luisa ', 'Marcela', 1, 'Alegría', 'Martinez', 'Luisa', 2022, NULL, 'lmaralegria@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(68, 'Alexandra', '', 1, 'Joaquí', 'Samboní', 'Alexandra', 2022, NULL, 'alexandrajoaqui@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(69, 'Isabel', 'Sofia', 1, 'Muñoz', 'Prado', 'Sofi', 2022, NULL, 'isasofi@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(70, 'Camilo', 'Eduardo', 1, 'Castro', 'Ruiz', 'Camilo', 2022, NULL, 'camiloecastro@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(71, 'Angela', 'Isabel', 1, 'Becerra', 'Muñoz', 'Angela', 2022, NULL, 'angelabecerra@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(72, 'Luna', 'Sofía', 1, 'Echeverry', 'Anacona', 'Luna', 2022, NULL, 'lunaecheverry@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(73, 'Eduardo', 'Jose', 1, 'Muñoz', 'Ceron', 'Edu', 2022, NULL, 'eduardoj@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(74, 'Mariam', 'Sofia', 1, 'Rodriguez', 'Portilla', 'Mariam', 2022, NULL, 'mariamr@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(75, 'Andres', 'Felipe', 1, 'Hurtado', 'Zuñiga', 'Andres', 2022, NULL, 'andrehur@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(76, 'Edier', 'Dario', 1, 'Bravo', 'Bravo', 'Edier', 2022, NULL, 'edierbra@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(77, 'Julian', 'David', 1, 'Burbano', 'Guerrero', 'Juli', 2022, NULL, 'julianburbano@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(78, 'Katerine', NULL, 1, 'Samboní', 'Guevara', 'Kate', 2022, NULL, 'ksamboni@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(79, 'Manuela', NULL, 1, 'Gaviria', 'Vélez', 'Manu', 2022, NULL, 'magaviria@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(80, 'Gustavo', NULL, 1, 'Paz', 'Macias', 'Gus', 2022, NULL, 'ghpaz@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL),
(81, 'Juan', 'Camilo', 1, 'Sanchez', NULL, 'Sanchez', 2016, NULL, 'juank-milo@unicauca.edu.co', '', '', 'https://www.pngitem.com/pimgs/m/661-6619328_default-avatar-png-blank-person-transparent-png.png', NULL, 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cargos_de_miembros`
--
ALTER TABLE `cargos_de_miembros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `miembro` (`miembro`),
  ADD KEY `cargo` (`cargo`),
  ADD KEY `comite` (`comite`);

--
-- Indexes for table `comites`
--
ALTER TABLE `comites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `miembros`
--
ALTER TABLE `miembros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cargos_de_miembros`
--
ALTER TABLE `cargos_de_miembros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `comites`
--
ALTER TABLE `comites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `miembros`
--
ALTER TABLE `miembros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cargos_de_miembros`
--
ALTER TABLE `cargos_de_miembros`
  ADD CONSTRAINT `cargo_del_miembro` FOREIGN KEY (`cargo`) REFERENCES `cargos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comite_del_cargo_del_miembro` FOREIGN KEY (`comite`) REFERENCES `comites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `miembro_del_cargo` FOREIGN KEY (`miembro`) REFERENCES `miembros` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

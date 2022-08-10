-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 20-01-2022 a las 00:15:58
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `online`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `answered_commenters`
--

CREATE TABLE `answered_commenters` (
  `id` int(11) NOT NULL,
  `avatar` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `last_name` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `age` int(3) NOT NULL,
  `sex` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `direction` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `phone` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `user` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `mail` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `commenter_date` datetime NOT NULL,
  `commenter` text COLLATE utf8_spanish_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `blog_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `answered_commenters`
--

INSERT INTO `answered_commenters` (`id`, `avatar`, `name`, `last_name`, `age`, `sex`, `direction`, `phone`, `user`, `mail`, `commenter_date`, `commenter`, `user_id`, `blog_id`) VALUES
(86, '', 'Jayson', 'Street', 21, 'h', 'Dallas, Texas, United States', '', 'jayson.street', 'jayson.street@gmail.com', '2022-01-13 13:39:00', 'hey hey', 68, 4),
(87, '', 'Jayson', 'Street', 21, 'h', 'Dallas, Texas, United States', '', 'jayson.street', 'jayson.street@gmail.com', '2022-01-13 14:47:38', 'hey hey', 68, 4),
(88, '', 'Jayson', 'Street', 21, 'h', 'Dallas, Texas, United States', '', 'jayson.street', 'jayson.street@gmail.com', '2022-01-13 14:47:46', 'hey hey', 68, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `titulo` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `imagen` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `extracto` varchar(1500) COLLATE utf8_spanish_ci NOT NULL,
  `texto` text COLLATE utf8_spanish_ci NOT NULL,
  `comentarios_fb` varchar(600) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `blog`
--

INSERT INTO `blog` (`id`, `titulo`, `fecha`, `imagen`, `extracto`, `texto`, `comentarios_fb`) VALUES
(1, '¿Què es HTML?', '2020-08-27 15:56:58', 'html5.png', 'HTML, siglas en inglés de HyperText Markup Language (‘lenguaje de marcas de hipertexto’), hace referencia al lenguaje de marcado para la elaboración de páginas web.', ' HTML, siglas en inglés de HyperText Markup Language (‘lenguaje de marcas de hipertexto’), hace referencia al lenguaje de marcado para la elaboración de páginas web. Es un estándar que sirve de referencia del software que conecta con la elaboración de páginas web en sus diferentes versiones, define una estructura básica y un código (denominado código HTML) para la definición de contenido de una página web, como texto, imágenes, videos, juegos, entre otros. Es un estándar a cargo del World Wide Web Consortium (W3C) o Consorcio WWW, organización dedicada a la estandarización de casi todas las tecnologías ligadas a la web, sobre todo en lo referente a su escritura e interpretación. HTML se considera el lenguaje web más importante siendo su invención crucial en la aparición, desarrollo y expansión de la World Wide Web (WWW). Es el estándar que se ha impuesto en la visualización de páginas web y es el que todos los navegadores actuales han adoptado.\r\n\r\nEl lenguaje HTML basa su filosofía de desarrollo en la diferenciación. Para añadir un elemento externo a la página (imagen, vídeo, script, entre otros.), este no se incrusta directamente en el código de la página, sino que se hace una referencia a la ubicación de dicho elemento mediante texto. De este modo, la página web contiene solamente texto mientras que recae en el navegador web (interpretador del código) la tarea de unir todos los elementos y visualizar la página final. Al ser un estándar, HTML busca ser un lenguaje que permita que cualquier página web escrita en una determinada versión, pueda ser interpretada de la misma forma (estándar) por cualquier navegador web actualizado.\r\n\r\n¿Cuáles son las características principales del HTML? HTML es un lenguaje de marcado que nos permite indicar la estructura de nuestro documento mediante etiquetas. Este lenguaje nos ofrece una gran adaptabilidad, una estructuración lógica y es fácil de interpre­tar tanto por humanos como por máquinas.\r\n\r\nSin embargo, a lo largo de sus diferentes versiones, se han incorporado y suprimido diversas características, con el fin de hacerlo más eficiente y facilitar el desarrollo de páginas web compatibles con distintos navegadores y plataformas (PC de escritorio, portátiles, teléfonos inteligentes, tabletas, etc.) No obstante, para interpretar correctamente una nueva versión de HTML, los desarrolladores de navegadores web deben incorporar estos cambios y el usuario debe ser capaz de usar la nueva versión del navegador con los cambios incorporados. Normalmente los cambios son aplicados mediante parches de actualización automática (Firefox, Chrome) u ofreciendo una nueva versión del navegador con todos los cambios incorporados, en un sitio web de descarga oficial (Internet Explorer). Por lo que un navegador desactualizado no será capaz de interpretar correctamente una página web escrita en una versión de HTML superior a la que pueda interpretar, lo que obliga muchas veces a los desarrolladores a aplicar técnicas y cambios que permitan corregir problemas de visualización e incluso de interpretación de código HTML. Así mismo, las páginas escritas en una versión anterior de HTML deberían ser actualizadas o reescritas, lo que no siempre se cumple. Es por ello que ciertos navegadores todavía mantienen la capacidad de interpretar páginas web de versiones HTML anteriores. Por estas razones, todavía existen diferencias entre distintos navegadores y versiones al interpretar una misma página web. ', '<div class=\"fb-comments\" data-href=\"http://localhost/digitallife/contacto.html\" data-width=\"500 \" data-numposts=\"50\"></div>'),
(2, '¿Què es Marketing Digital?', '2020-11-10 03:45:30', 'marketing-digital.png', 'La mercadotecnia digital o marketing digital está caracterizada por la combinación y utilización de estrategias de comercialización en medios digitales.', 'La mercadotecnia digital o marketing digital (también llamado marketing 2.0, mercadotecnia en internet, cybermarketing o cibermercadotecnia) está caracterizada por la combinación y utilización de estrategias de comercialización en medios digitales. El marketing digital se configura como la mercadotecnia que hace uso de dispositivos electrónicos tales como: computadora personal, teléfono inteligente, teléfono celular, tableta, televisor inteligente y consolas para involucrar a las partes interesadas.\r\n\r\nLa mercadotecnia digital se aplica a tecnologías o plataformas tales como sitios web, correo electrónico, aplicaciones web (clásicas y móviles) y redes sociales. También puede darse a través de los canales que no utilizan Internet como la televisión, la radio, los mensajes SMS, etc. Los social media son un componente del marketing digital. Muchas organizaciones usan una combinación de los canales tradicionales y digitales de marketing; sin embargo, el marketing digital se está haciendo más popular entre los mercadólogos ya que permite hacer un seguimiento más preciso de su retorno de inversión (ROI) en comparación con otros canales tradicionales de marketing.\r\n\r\nLa tendencia global actual en marketing en línea es combinar diferentes técnicas como marketing de contenidos, marketing en redes sociales, marketing de influencers, publicidad programática, email marketing, SEO, SEM, y otras.\r\n\r\nTambién se aplican técnicas del marketing tradicional en combinación con las técnicas de los nuevos medios. Se trata de un componente del comercio electrónico, por lo que puede incluir la gestión de contenidos, las relaciones públicas, la reputación en línea, el servicio al cliente y las ventas. Una de las características principales de esta nueva tendencia, es que posibilita la realización de campañas y estrategias personalizadas pues ofrece una gran capacidad analítica y así lograr lanzar campañas para mercados objetivos muy segmentados. El marketing digital pretende ser una adaptación de la filosofía de la web 2.0 al marketing, se refiere a la transformación del marketing como resultado del efecto de las redes en Internet. Debe estar centrada en el público y debe existir una interacción entre la campaña de promoción y el público que la recibe. Algunas características del Marketing Digital podrían ser un contenido atractivo y un entorno donde el público pueda recibir la información. El contenido que ofrece el Marketing Digital como el entorno deben tener interacción con el público. Las redes sociales están creciendo en inversión sobre los métodos de publicidad tradicionales, prácticamente todas las redes de amplia utilización incorporan ya fórmulas para efectuar publicidad efectiva en ellas.\r\n\r\nEl marketing digital representa un cambio dramático en beneficio de las búsquedas y compras de bienes y servicios independientemente de la publicidad, campañas de marketing y mensajes. En él, los clientes toman decisiones bajo sus propios términos, apoyándose en las redes de confianza para formar opiniones, tales como personas cercanas o comentarios de los diferentes usuarios que ya han probado antes un producto o servicio. Se puede decir que ha cambiado los roles del marketing, antes el marketing lo hacían los directivos y sus agencias, con este significativo cambio el marketing digital lo puede hacer cualquiera. Hoy en día vemos mucho contenido que es generado por diferentes usuarios de marcas y que llegan a ser más compartidos y tener un mayor impacto entre clientes actuales y potenciales que lo que comunica la misma marca en sus plataformas oficiales. Estos cambios tienen implicaciones dramáticas sobre cómo el marketing es creado y la forma en la que los consumidores toman un rol participativo en el desarrollo de nuevos productos y marcas. Hemos pasado de decisiones dirigidas por la compañía a compañías que promueven la co creación con sus consumidores utilizando plataformas digitales. El marketing digital ha generado importantes cambios en cómo se comercializan los servicios, como la banca o las telecomunicaciones.', '<div class=\"fb-comments\" data-href=\"http://localhost/digitallife/contacto.html\" data-width=\"500 \" data-numposts=\"50\"></div>'),
(3, '¿Què es internet?', '2020-11-16 02:40:15', 'internet.jpg', 'Internet es un conjunto descentralizado de redes de comunicación interconectadas que utilizan la familia de protocolos TCP/IP.', 'Internet (el internet o, también, la internet)3​ es un conjunto descentralizado de redes de comunicación interconectadas que utilizan la familia de protocolos TCP/IP, lo cual garantiza que las redes físicas heterogéneas que la componen constituyan una red lógica única de alcance mundial. Sus orígenes se remontan a 1969, cuando se estableció la primera conexión de computadoras, conocida como ARPANET, entre tres universidades en California (Estados Unidos).\r\n\r\nUno de los servicios que más éxito ha tenido en internet ha sido la World Wide Web (WWW o la Web), hasta tal punto que es habitual la confusión entre ambos términos. La WWW es un conjunto de protocolos que permite, de forma sencilla, la consulta remota de archivos de hipertexto. Esta fue un desarrollo posterior (1990) y utiliza internet como medio de transmisión.\r\n', '<div class=\"fb-comments\" data-href=\"http://localhost/digitallife/contacto.html\" data-width=\"500 \" data-numposts=\"50\"></div>'),
(4, '¿Què es la programaciòn?', '2020-11-10 03:44:10', 'code-foto.jpg', 'La programación es el proceso utilizado para idear y ordenar las acciones necesarias para realizar un proyecto.', 'La programación es el proceso utilizado para idear y ordenar las acciones necesarias para realizar un proyecto, preparar ciertas máquinas o aparatos para que empiecen a funcionar en el momento y en la forma deseados o elaborar programas para su empleo en computadoras.\r\n\r\nEn la actualidad, la noción de programación se encuentra muy asociada a la creación de aplicaciones informática y videojuegos. Es el proceso por el cual una persona desarrolla un programa valiéndose de una herramienta que le permita escribir el código (el cual puede estar en uno o varios lenguajes, como C++, Java y Python, entre otros) y de otra que sea capaz de “traducirlo” a lo que se conoce como lenguaje de máquina, que puede comprender el microprocesador.', '<div class=\"fb-comments\" data-href=\"http://localhost/digitallife/contacto.html\" data-width=\"500 \" data-numposts=\"50\"></div>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `commenters`
--

CREATE TABLE `commenters` (
  `id` int(11) NOT NULL,
  `avatar` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `last_name` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `age` int(3) NOT NULL,
  `sex` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `direction` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `phone` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `user` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `mail` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `commenter_date` datetime NOT NULL,
  `commenter` text COLLATE utf8_spanish_ci NOT NULL,
  `blog_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `commenters`
--

INSERT INTO `commenters` (`id`, `avatar`, `name`, `last_name`, `age`, `sex`, `direction`, `phone`, `user`, `mail`, `commenter_date`, `commenter`, `blog_id`) VALUES
(64, '', 'Sebastian', 'Angel Castro', 20, 'h', 'San Cristobal, Chiapas, México', '', 'sebastian.castro', 'Sebastian.castro@gmail.com', '2020-12-01 12:24:58', 'Buen articulo, voy a comenzar a aprender Java.', 4),
(65, '', 'Jayson', 'Street', 21, 'h', 'Dallas, Texas, United States', '', 'jayson.street', 'jayson.street@gmail.com', '2020-12-01 12:45:19', 'It\'s a good article, in this moment i will search more information about this theme\r\nand i gonna to learn movil development!', 4),
(66, '', 'Jayson', 'Street', 21, 'h', 'Dallas, Texas, United States', '', 'jayson.street', 'jayson.street@gmail.com', '2020-12-01 12:46:51', 'It\'s a excelent information', 1),
(67, '', 'Sebastian', 'Angel Castro', 20, 'h', 'San Cristobal, Chiapas, México', '', 'sebastian.castro', 'Sebastian.castro@gmail.com', '2020-12-01 12:54:30', 'Es increible como todos estamos conectados!', 3),
(68, '', 'Edward', 'Snowden', 19, 'h', 'Huston, Texas, United States', '', 'edward_snowden.42', 'edward_snowden.42@gmail.com', '2020-12-01 13:04:57', 'This article is very good and i will learn Python !!', 4),
(69, '', 'Edward', 'Snowden', 19, 'h', 'Huston, Texas, United States', '', 'edward_snowden.42', 'edward_snowden.42@gmail.com', '2020-12-01 13:07:45', 'Woow it\'s awesome like we can to do a online business !!', 2),
(70, '', 'Edward', 'Snowden', 19, 'h', 'Huston, Texas, United States', '', 'edward_snowden.42', 'edward_snowden.42@gmail.com', '2020-12-01 13:13:18', 'Thanks for the information !!', 1),
(77, '', 'Jayson', 'Street', 21, 'h', 'Dallas, Texas, United States', '', 'jayson.street', 'jayson.street@gmail.com', '2022-01-09 12:16:33', 'Hello you have a good post', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opiniones`
--

CREATE TABLE `opiniones` (
  `id` int(11) NOT NULL,
  `avatar` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `last_name` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `age` int(3) NOT NULL,
  `sex` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `direction` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `phone` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `user` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `mail` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `commenter_date` datetime NOT NULL,
  `commenter` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `opiniones`
--

INSERT INTO `opiniones` (`id`, `avatar`, `name`, `last_name`, `age`, `sex`, `direction`, `phone`, `user`, `mail`, `commenter_date`, `commenter`) VALUES
(5, 'avatar-m.jpg', 'Sebastian Eduardo', 'Angel Castro', 20, 'h', 'San Cristobal, Chiapas, México', '', 'sebastian.castro', 'Sebastian.castro@gmail.com', '2020-12-24 09:26:12', 'Muchas gracias por hacer mi proyecto, espero volver a trabajar juntos muy pronto'),
(6, '', 'Jayson', 'Street', 21, 'h', 'Dallas, Texas, United States', '', 'jayson.street', 'jayson.street@gmail.com', '2020-12-24 09:27:26', 'Excelent service man, thanks for all'),
(7, 'avatar-m.jpg', 'Jose Luis', 'Castro Alvarado', 19, 'h', 'San Cristobal, Chiapas, México', '', 'jose.luis-castro42', 'jose.luis-castro42@gmail.com', '2020-12-24 09:28:34', 'Thanks for my web pages'),
(8, 'avatar-w.png', 'Mariana Isabel', 'Castillo Lau', 22, 'm', 'Ciudad de México', '', 'isa_mariana34', 'isa_mariana34@gmail.com', '2020-12-24 09:29:26', 'Te agradesco por entregar mi proyecto a tiempo, suerte y mucho &eacute;xito.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `avatar` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `last_name` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `age` int(3) NOT NULL,
  `sex` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `direction` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `phone` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `user` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `mail` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `token` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `code` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `verify_mail` int(1) NOT NULL,
  `send_ads` int(1) NOT NULL,
  `ip` varchar(300) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `avatar`, `name`, `last_name`, `age`, `sex`, `direction`, `phone`, `user`, `mail`, `password`, `token`, `code`, `verify_mail`, `send_ads`, `ip`) VALUES
(5, 'avatar-m.jpg', 'Sebastian Eduardo', 'Angel Castro', 20, 'h', 'San Cristobal, Chiapas, M&eacute;xico', '', 'sebastian.castro', 'Sebastian.castro@gmail.com', '$2y$15$Mk9fQYsDHfY84OqytOZZ8O1Ow3wtL7XJO22HLfvLRAHyEoZ5YttMC', '', '3c316a6ec7c2f', 1, 0, ''),
(6, '', 'Jayson', 'Street', 21, 'h', 'Dallas, Texas, United States', '', 'jayson.street', 'jayson.street@gmail.com', '$2y$15$iHas7GQrroSKts3PBeMIT.Dw6wtigi8CvcJrhvcjiltvGl.rgw2Dm', '', '5fc68b4a833b8', 1, 0, ''),
(7, '', 'Edward', 'Snowden', 19, 'h', 'Huston, Texas, United States', '', 'edward.edu', 'edward.edu@gmail.com', '$2y$15$VrFYSXCg82wmv7KwthwuKOT0gintZZ9h4dnqr5hHRR.hNsA2DUsEG', '', '5fc69308c7901', 1, 0, ''),
(8, '', 'Jose Luis', 'Castro Alvarado', 19, 'h', 'San Cristobal, Chiapas, M&eacute;xico', '', 'jose.luis', 'jose.luis@gmail.com', '$2y$15$kWbL3KgFIpyBpoEzFZTXHesjjiY3yOdihZru0WeAXL78SPyomz6yi', '', '5fe3ce4ac2085', 1, 0, ''),
(9, 'avatar-w.png', 'Mariana Isabel', 'Castillo Lau', 22, 'm', 'Ciudad de M&eacute;xico', '', 'isa_mariana34', 'isa_mariana34@gmail.com', '$2y$15$kYtfu.ZE1IBnAQ0g315sJ.ze2ttmPgLQRNetwPkOYUDJL0nlFifD2', '', '5fe3cf147b517', 1, 0, ''),
(24, 'avatar-m.jpg', 'esteban', '', 0, 'h', '', '', 'esteban24', 'esteban24@gmail.com', '$2y$15$99JUpPx08M0xManT/vHsCeVk9s03E3jN/TJGBEp6qbjb5YSAR3Bby', '', '619d2676a74ae', 1, 0, ''),
(27, 'avatar-m.jpg', 'Hubble', '', 0, 'h', '', '', 'hubble32', 'hubble32@gmail.com', '$2y$15$k62weqB.Y5qNsaQdZluTzez.mNU63veFgg8EaH/mwc7AizhzxHAKy', '', '619fe027a2f88', 0, 0, ''),
(28, 'avatar-m.jpg', 'Hubble', '', 0, 'h', '', '', 'hubble322', 'hubble322@gmail.com', '$2y$15$Zq3ZsH3WuO4lxrGHCwUl4e3EeOuwQyUOegd3cjtpOxfuQx2f3FTGy', '', '619fe04c6a9ca', 0, 1, ''),
(29, 'avatar-m.jpg', 'jose luis', '', 0, 'h', '', '', 'jose.luis', 'jose.luis@gmail.com', '$2y$15$FCCKjAlYH8abdogdgsZBdu0oPd.MaKnm8ACoJtU8NECIIEA.eXAca', '', '61acf799db8c2', 0, 1, '127.0.0.1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `views`
--

CREATE TABLE `views` (
  `id` int(11) NOT NULL,
  `ip` varchar(300) DEFAULT NULL,
  `date_view` datetime DEFAULT NULL,
  `ip_view` varchar(300) NOT NULL,
  `home` varchar(300) NOT NULL,
  `contact` varchar(300) NOT NULL,
  `projects` varchar(300) NOT NULL,
  `blog` varchar(300) NOT NULL,
  `about` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `views`
--

INSERT INTO `views` (`id`, `ip`, `date_view`, `ip_view`, `home`, `contact`, `projects`, `blog`, `about`) VALUES
(350, '127.0.0.1', '2021-12-21 14:28:22', '127.0.0.1', '600', '145', '73', '1255', '122'),
(351, '127.0.0.1', '2021-12-21 22:03:40', '', '', '', '', '', ''),
(352, '127.0.0.1', '2021-12-21 22:34:31', '', '', '', '', '', ''),
(353, '127.0.0.1', '2021-12-21 23:06:43', '', '', '', '', '', ''),
(354, '127.0.0.1', '2021-12-21 23:47:44', '', '', '', '', '', ''),
(355, '127.0.0.1', '2021-12-22 10:24:50', '', '', '', '', '', ''),
(356, '127.0.0.1', '2021-12-22 10:55:27', '', '', '', '', '', ''),
(357, '127.0.0.1', '2021-12-22 11:44:09', '', '', '', '', '', ''),
(358, '127.0.0.1', '2021-12-22 12:15:10', '', '', '', '', '', ''),
(359, '127.0.0.1', '2021-12-22 13:32:39', '', '', '', '', '', ''),
(360, '127.0.0.1', '2021-12-22 14:02:57', '', '', '', '', '', ''),
(361, '127.0.0.1', '2021-12-22 18:16:27', '', '', '', '', '', ''),
(362, '127.0.0.1', '2021-12-22 18:50:53', '', '', '', '', '', ''),
(363, '127.0.0.1', '2021-12-22 19:21:29', '', '', '', '', '', ''),
(364, '127.0.0.1', '2021-12-23 22:02:05', '', '', '', '', '', ''),
(365, '127.0.0.1', '2021-12-23 22:32:38', '', '', '', '', '', ''),
(366, '127.0.0.1', '2021-12-23 23:46:28', '', '', '', '', '', ''),
(367, '127.0.0.1', '2021-12-25 00:58:35', '', '', '', '', '', ''),
(368, '127.0.0.1', '2021-12-25 20:33:23', '', '', '', '', '', ''),
(369, '127.0.0.1', '2021-12-25 21:11:24', '', '', '', '', '', ''),
(370, '127.0.0.1', '2021-12-25 21:44:31', '', '', '', '', '', ''),
(371, '127.0.0.1', '2021-12-25 22:15:50', '', '', '', '', '', ''),
(372, '127.0.0.1', '2021-12-26 10:20:52', '', '', '', '', '', ''),
(373, '127.0.0.1', '2021-12-26 17:02:55', '', '', '', '', '', ''),
(374, '127.0.0.1', '2021-12-26 21:57:09', '', '', '', '', '', ''),
(375, '127.0.0.1', '2021-12-26 23:07:50', '', '', '', '', '', ''),
(376, '127.0.0.1', '2021-12-27 11:26:13', '', '', '', '', '', ''),
(377, '127.0.0.1', '2021-12-28 21:05:43', '', '', '', '', '', ''),
(378, '127.0.0.1', '2021-12-28 22:40:13', '', '', '', '', '', ''),
(379, '127.0.0.1', '2021-12-29 20:38:59', '', '', '', '', '', ''),
(380, '127.0.0.1', '2021-12-30 10:31:40', '', '', '', '', '', ''),
(381, '127.0.0.1', '2021-12-30 11:23:23', '', '', '', '', '', ''),
(382, '127.0.0.1', '2021-12-30 13:41:41', '', '', '', '', '', ''),
(383, '127.0.0.1', '2021-12-30 14:19:06', '', '', '', '', '', ''),
(384, '127.0.0.1', '2021-12-30 19:39:30', '', '', '', '', '', ''),
(385, '127.0.0.1', '2021-12-30 20:21:17', '', '', '', '', '', ''),
(386, '127.0.0.1', '2021-12-30 22:59:38', '', '', '', '', '', ''),
(387, '127.0.0.1', '2021-12-30 23:44:51', '', '', '', '', '', ''),
(388, '127.0.0.1', '2022-01-02 12:17:24', '', '', '', '', '', ''),
(389, '127.0.0.1', '2022-01-02 21:41:21', '', '', '', '', '', ''),
(390, '127.0.0.1', '2022-01-02 22:11:21', '', '', '', '', '', ''),
(391, '127.0.0.1', '2022-01-03 11:30:05', '', '', '', '', '', ''),
(392, '127.0.0.1', '2022-01-03 12:32:59', '', '', '', '', '', ''),
(393, '127.0.0.1', '2022-01-03 13:09:50', '', '', '', '', '', ''),
(394, '127.0.0.1', '2022-01-04 10:13:55', '', '', '', '', '', ''),
(395, '127.0.0.1', '2022-01-04 10:13:55', '', '', '', '', '', ''),
(396, '127.0.0.1', '2022-01-04 11:02:55', '', '', '', '', '', ''),
(397, '127.0.0.1', '2022-01-04 11:43:18', '', '', '', '', '', ''),
(398, '127.0.0.1', '2022-01-04 13:13:45', '', '', '', '', '', ''),
(399, '127.0.0.1', '2022-01-04 13:47:03', '', '', '', '', '', ''),
(400, '127.0.0.1', '2022-01-04 19:17:14', '', '', '', '', '', ''),
(401, '127.0.0.1', '2022-01-04 19:47:29', '', '', '', '', '', ''),
(402, '127.0.0.1', '2022-01-04 20:17:51', '', '', '', '', '', ''),
(403, '127.0.0.1', '2022-01-04 20:47:53', '', '', '', '', '', ''),
(404, '127.0.0.1', '2022-01-04 21:18:21', '', '', '', '', '', ''),
(405, '127.0.0.1', '2022-01-04 21:48:40', '', '', '', '', '', ''),
(406, '127.0.0.1', '2022-01-04 22:18:42', '', '', '', '', '', ''),
(407, '127.0.0.1', '2022-01-04 22:48:52', '', '', '', '', '', ''),
(408, '127.0.0.1', '2022-01-04 23:22:29', '', '', '', '', '', ''),
(409, '127.0.0.1', '2022-01-05 00:07:17', '', '', '', '', '', ''),
(410, '127.0.0.1', '2022-01-05 10:59:57', '', '', '', '', '', ''),
(411, '127.0.0.1', '2022-01-05 11:36:21', '', '', '', '', '', ''),
(412, '127.0.0.1', '2022-01-05 21:13:11', '', '', '', '', '', ''),
(413, '127.0.0.1', '2022-01-05 21:43:40', '', '', '', '', '', ''),
(414, '127.0.0.1', '2022-01-05 22:31:43', '', '', '', '', '', ''),
(415, '127.0.0.1', '2022-01-05 23:39:52', '', '', '', '', '', ''),
(416, '127.0.0.1', '2022-01-06 10:02:40', '', '', '', '', '', ''),
(417, '127.0.0.1', '2022-01-06 12:02:20', '', '', '', '', '', ''),
(418, '127.0.0.1', '2022-01-06 13:57:44', '', '', '', '', '', ''),
(419, '127.0.0.1', '2022-01-06 14:27:51', '', '', '', '', '', ''),
(420, '127.0.0.1', '2022-01-06 20:37:20', '', '', '', '', '', ''),
(421, '127.0.0.1', '2022-01-06 21:13:47', '', '', '', '', '', ''),
(422, '127.0.0.1', '2022-01-06 22:22:24', '', '', '', '', '', ''),
(423, '127.0.0.1', '2022-01-07 00:02:51', '', '', '', '', '', ''),
(424, '127.0.0.1', '2022-01-07 10:37:33', '', '', '', '', '', ''),
(425, '127.0.0.1', '2022-01-07 11:13:46', '', '', '', '', '', ''),
(426, '127.0.0.1', '2022-01-07 11:55:49', '', '', '', '', '', ''),
(427, '127.0.0.1', '2022-01-07 13:05:23', '', '', '', '', '', ''),
(428, '127.0.0.1', '2022-01-07 13:40:49', '', '', '', '', '', ''),
(429, '127.0.0.1', '2022-01-07 14:20:03', '', '', '', '', '', ''),
(430, '127.0.0.1', '2022-01-07 19:39:51', '', '', '', '', '', ''),
(431, '127.0.0.1', '2022-01-07 21:00:46', '', '', '', '', '', ''),
(432, '127.0.0.1', '2022-01-07 21:55:18', '', '', '', '', '', ''),
(433, '127.0.0.1', '2022-01-07 22:25:44', '', '', '', '', '', ''),
(434, '127.0.0.1', '2022-01-07 22:56:16', '', '', '', '', '', ''),
(435, '127.0.0.1', '2022-01-08 11:03:56', '', '', '', '', '', ''),
(436, '127.0.0.1', '2022-01-08 11:35:34', '', '', '', '', '', ''),
(437, '127.0.0.1', '2022-01-08 13:20:02', '', '', '', '', '', ''),
(438, '127.0.0.1', '2022-01-09 10:19:26', '', '', '', '', '', ''),
(439, '127.0.0.1', '2022-01-09 11:03:38', '', '', '', '', '', ''),
(440, '127.0.0.1', '2022-01-09 11:56:16', '', '', '', '', '', ''),
(441, '127.0.0.1', '2022-01-09 12:26:22', '', '', '', '', '', ''),
(442, '127.0.0.1', '2022-01-09 17:14:40', '', '', '', '', '', ''),
(443, '127.0.0.1', '2022-01-09 17:45:53', '', '', '', '', '', ''),
(444, '127.0.0.1', '2022-01-09 19:08:30', '', '', '', '', '', ''),
(445, '127.0.0.1', '2022-01-10 10:16:41', '', '', '', '', '', ''),
(446, '127.0.0.1', '2022-01-10 11:27:45', '', '', '', '', '', ''),
(447, '127.0.0.1', '2022-01-10 21:11:59', '', '', '', '', '', ''),
(448, '127.0.0.1', '2022-01-10 22:02:46', '', '', '', '', '', ''),
(449, '127.0.0.1', '2022-01-10 22:38:01', '', '', '', '', '', ''),
(450, '127.0.0.1', '2022-01-11 10:37:45', '', '', '', '', '', ''),
(451, '127.0.0.1', '2022-01-11 11:46:53', '', '', '', '', '', ''),
(452, '127.0.0.1', '2022-01-11 18:53:08', '', '', '', '', '', ''),
(453, '127.0.0.1', '2022-01-11 20:26:13', '', '', '', '', '', ''),
(454, '127.0.0.1', '2022-01-11 20:58:58', '', '', '', '', '', ''),
(455, '127.0.0.1', '2022-01-11 21:04:11', '', '', '', '', '', ''),
(456, '127.0.0.1', '2022-01-11 21:04:14', '', '', '', '', '', ''),
(457, '127.0.0.1', '2022-01-11 21:04:20', '', '', '', '', '', ''),
(458, '127.0.0.1', '2022-01-11 21:04:24', '', '', '', '', '', ''),
(459, '127.0.0.1', '2022-01-12 10:05:11', '', '', '', '', '', ''),
(460, '127.0.0.1', '2022-01-12 10:35:29', '', '', '', '', '', ''),
(461, '127.0.0.1', '2022-01-12 11:05:43', '', '', '', '', '', ''),
(462, '127.0.0.1', '2022-01-12 13:22:35', '', '', '', '', '', ''),
(463, '127.0.0.1', '2022-01-12 14:49:04', '', '', '', '', '', ''),
(464, '127.0.0.1', '2022-01-12 21:07:08', '', '', '', '', '', ''),
(465, '127.0.0.1', '2022-01-12 22:13:10', '', '', '', '', '', ''),
(466, '127.0.0.1', '2022-01-12 22:49:22', '', '', '', '', '', ''),
(467, '127.0.0.1', '2022-01-13 10:24:16', '', '', '', '', '', ''),
(468, '127.0.0.1', '2022-01-13 10:54:17', '', '', '', '', '', ''),
(469, '127.0.0.1', '2022-01-13 11:51:37', '', '', '', '', '', ''),
(470, '127.0.0.1', '2022-01-13 13:17:03', '', '', '', '', '', ''),
(471, '127.0.0.1', '2022-01-13 18:54:01', '', '', '', '', '', ''),
(472, '127.0.0.1', '2022-01-14 10:18:43', '', '', '', '', '', ''),
(473, '127.0.0.1', '2022-01-18 09:54:13', '', '', '', '', '', ''),
(474, '127.0.0.1', '2022-01-18 09:54:13', '', '', '', '', '', ''),
(475, '127.0.0.1', '2022-01-18 10:25:02', '', '', '', '', '', ''),
(476, '127.0.0.1', '2022-01-18 11:24:01', '', '', '', '', '', ''),
(477, '127.0.0.1', '2022-01-18 21:48:45', '', '', '', '', '', ''),
(478, '127.0.0.1', '2022-01-19 16:23:58', '', '', '', '', '', ''),
(479, '127.0.0.1', '2022-01-19 17:16:59', '', '', '', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `answered_commenters`
--
ALTER TABLE `answered_commenters`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `commenters`
--
ALTER TABLE `commenters`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `opiniones`
--
ALTER TABLE `opiniones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `answered_commenters`
--
ALTER TABLE `answered_commenters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT de la tabla `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `commenters`
--
ALTER TABLE `commenters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT de la tabla `opiniones`
--
ALTER TABLE `opiniones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `views`
--
ALTER TABLE `views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=480;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

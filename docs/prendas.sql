-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-03-2015 a las 13:29:17
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tendencias_oi_2015`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prendas`
--

CREATE TABLE IF NOT EXISTS `prendas` (
`id` int(11) NOT NULL,
  `imagen` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  `categoria` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `url` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `prenda` text COLLATE utf8_spanish2_ci NOT NULL,
  `bitly` varchar(30) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `prendas`
--

INSERT INTO `prendas` (`id`, `imagen`, `categoria`, `url`, `prenda`, `bitly`) VALUES
(1, '1.jpg', 'extra-normal', 'cacharel-chompa-carola-pantalon-caracas', 'Navigata Chompa Carola 16307856 S/.79.90 Pantalón Caracas 16323481 S/.129', 'http://bit.ly/1E9Dvtr'),
(2, '2.jpg', 'extra-normal', 'marquis-blusa-pope-chompa-carina-blazer-mila-pantalon-jogger', 'Marquis Blusa Pope 16399959 S/.79.90 Chompa Carina 16469756 S/.99.90 Blazer Mila 16388025 S/.169 Pantalón Jogger 16354532 S/.129', 'http://bit.ly/1HOf48w'),
(3, '3.jpg', 'extra-normal', 'marquis-poleron-besbre-pantalon-off', 'Marquis Polerón Besbre 16347849 S/.79.90 Pantalón Off 16740564 S/.99.90', 'http://bit.ly/1GKMXcL'),
(4, '4.jpg', 'extra-normal', 'navigata-blusa-beck-jean-boyfriend', 'Navigata Blusa Beck 16613317 S/.79.90 Jean Boyfriend 16289948 S/.129', 'http://bit.ly/1ArEd39'),
(5, '5.jpg', 'extra-normal', 'marquis-mochila-muriel', 'Marquis Mochila Muriel S/.139', 'http://bit.ly/1EEmX1X'),
(6, '6.jpg', 'extra-normal', 'marquis-polo-grey-marl-blazer-longline', 'Marquis Polo Grey Marl 16430361 S/.99.90 Blazer Longline 16291665 S/.299', 'http://bit.ly/1FgHgS7'),
(7, '6.jpg', 'extra-normal', 'marquis-polo-cami-chompa-maxi-pantalon-gris', 'Marquis Polo Cami 16314475 S/.59.90 Chompa Maxi 16396045 S/.69.90 Pantalón Gris 16706002 S/.99.90', 'http://bit.ly/1BaE7Nn'),
(8, '2.jpg', 'masculine', 'marquis-chompa-window-pantalon-gris', 'Marquis Chompa Window 16435849 S/.129 Pantalón Gris 16706002 S/.99', 'http://bit.ly/1xioRO5'),
(9, '3.jpg', 'masculine', 'marquis-sweater-soho-culotte-gray', 'Marquis Sweater Soho 16387873 S/.129 Culotte Gray 16354537 S/.99.90', 'http://bit.ly/1MwZEbp'),
(10, '4.jpg', 'masculine', 'marquis-polo-ciara-chaleco-long-pantalon-fango', 'Marquis Polo Ciara 16347915 S/.59.90 Chaleco Long 16354687 S/.249 Pantalón Fango 16743416 S/.129', 'http://bit.ly/1F5W7OV'),
(11, '5.jpg', 'masculine', 'index-zapato-felix-marquis-cartera-caul', 'Index Zapato Félix 16554331 S/.59.90 Marquis Cartera Caúl 16512810 S/.129', 'http://bit.ly/18FlYR5'),
(12, '6.jpg', 'masculine', 'marquis-blusa-sheer-abrigo-caro-short-frixo', 'Marquis Blusa Sheer 16388007 S/.79.90 Abrigo Caro 16354537 S/.199 Short Frixo 16740844 S/.129', 'http://bit.ly/1b6zYoG'),
(13, '6.jpg', 'masculine', 'marquis-blusa-black', 'Marquis Blusa Black 16354677 S/.129', 'http://bit.ly/1Cawwnu'),
(14, '1.jpg', 'metalicos', 'marquis-casaca-ceja-falda-clave', 'Marquis Casaca Ceja 16701867 S/.299 Falda Clave 16674854 S/.129', 'http://bit.ly/1ArPnVo'),
(15, '4.jpg', 'metalicos', 'marquis-sweater-naif-short-metal', 'Marquis Sweater Naif 16435831 S/.69.90 Short Metal 16701872 S/.129', 'http://bit.ly/1MwZLDQ'),
(16, '2.jpg', 'metalicos', 'marquis-blusa-cupid-chaleco-oveja-jean-cabo', 'Marquis Blusa Cupid 16674886 S/.129 Chaleco Oveja 16380087 S/.199 Jean Cabo 16743363 S/.129', 'http://bit.ly/1EEu1LX'),
(17, '5.jpg', 'metalicos', 'index-collar-max-collar-max-marquis-zapato-mirna', 'Index Collar Max 16650809 S/.29.90 Collar Max 16650796 S/.29.90 Marquis Zapato Mirna 16339847 S/.99.90', 'http://bit.ly/1AiKGhA'),
(18, '1.jpg', 'animal-print', 'mch-abrigo-linda-marquis-culotte-midi', 'MCH Abrigo Linda 16730087 S/.369 Marquis Culotte Midi 16354527 S/.99.90', 'http://bit.ly/1F5XqNT'),
(19, '2.jpg', 'animal-print', 'marquis-blusa-jungle-casaca-celeste-pantalon-cierre', 'Marquis Blusa Jungle 16354662 S/.79.90 Casaca Celeste 16354657 S/.169 Pantalón Cierre 16354511 S/.99.90', 'http://bit.ly/1Byx0mz'),
(20, '3.jpg', 'animal-print', 'marquis-casaca-sherpass-falda-midi-index-pashmina-animal', 'Marquis Casaca Sherpass 16387983 S/.199 Falda Midi 16354647 S/.99.90 Index Pashmina Animal 16336013 S/.29.90', 'http://bit.ly/1xipVkW'),
(21, '4.jpg', 'animal-print', 'marquis-sweater-cami-abrigo-fur-falda-cuerda', 'Marquis Sweater Cami 16396036 s/.99.90 Abrigo Fur 16593655 S/.199 Falda Cuerda 16387993 S/.129', 'http://bit.ly/1ByxbOJ'),
(22, '5.jpg', 'animal-print', 'marquis-poleron-felino-casaca-celia-jean-boyfriend', 'Marquis Polerón Felino 16381468 S/.79.90 Casaca Celia 16354652 S/.179 Jean Boyfriend 16354652 S/.129', 'http://bit.ly/1NQPPH3'),
(23, '6.jpg', 'animal-print', 'marquis-cartera-miau-zapato-mini', 'Marquis Cartera Miau 16282506 S/.149 Zapato Mini 16301384 S/.139', 'http://bit.ly/1F5YaCB'),
(24, '4.jpg', 'cuadros', 'cuadros/marquis-vestido-cheks-casaca-blue', 'Marquis Vestido Cheks 16380101 S/.99.90 Casaca Blue 16379832 S/.149', 'http://bit.ly/1BAQ3LQ'),
(25, '3.jpg', 'cuadros', 'cuadros/marquis-casaca-frata-pantalon-burde', 'Marquis Casaca Frata 16700666 S/.249 Pantalón Burde 16740579 S/.99.90', 'http://bit.ly/1EEvH86'),
(26, '6.jpg', 'cuadros', 'cuadros/marquis-chompa-vino-blazer-pame-pantalon-cuti', 'Marquis Chompa Vino 16435826 S/.99.90 Blazer Pame 16740559 S/.169 Pantalón Cuti 16674898 S/.129', 'http://bit.ly/1GxJgnh'),
(27, '6.jpg', 'cuadros', 'cuadros/marquis-polo-flock-blazer-look-jean-highrise', 'Marquis Polo Flock 16380106 S/.79.90 Blazer Look 16399954 S/.169 Jean Highrise 16328136 S/.99.90', 'http://bit.ly/1EEvTUV'),
(28, '1.jpg', 'cuadros', 'cuadros/oasis-vestido-tartan-marquis-abrigo-impe', 'Oasis Vestido Tartán 16433875 S/.249 Marquis Abrigo Impe 16390354 S/.179', 'http://bit.ly/1E9Kanv'),
(29, '2.jpg', 'cuadros', 'cuadros/oasis-polo-geo-texture-marquis-blazer-cool', 'Oasis Polo Geo Texture 16405918 S/.119 Marquis Blazer Cool 16380092 S/.199', 'http://bit.ly/1CbkQ5i'),
(30, '5.jpg', 'cuadros', 'cuadros/index-zapato-fenix-collar-maxi-5', 'Index Zapato Fénix 16552932 S/.59.90 Collar Maxi 5 16650780 S/.29.90', 'http://bit.ly/1DcPfjC'),
(31, '3.jpg', 'bohemio', 'index-blusa-fli-blazer-long-jeans-hip', 'Index Blusa Fli 16375472 S/.59.90 Blazer Long 16398334 S/.129 Jeans Hip 16469527 S/.99.90', 'http://bit.ly/1BAQhmg'),
(32, '3.jpg', 'bohemio', 'index-vestido-berry-sweater-hef-pepe-jeans-chaleco-bartle', 'Index Vestido Berry 16393643 S/.79.90 Sweater Hef 16391009 S/.79.90 Pepe Jeans Chaleco Bartle 16725634 S/.129', 'http://bit.ly/18gHQSN'),
(33, '1.jpg', 'bohemio', 'barbados-blusa-campsie-jean-carlos', 'Barbados Blusa Campsie 16305685 S/.99.90 Jean Carlos 16725638 S/.129', 'http://bit.ly/1FVHe01'),
(34, '1.jpg', 'bohemio', 'index-sweater-morti-enterizo-retro', 'Index Sweater Morti 16489705 S/.99.90 Enterizo Retro 16393648 S/.99.90', 'http://bit.ly/1x0lVej'),
(35, '2.jpg', 'bohemio', 'index-blusa-esco-sweater-mosta-short-velt', 'Index Blusa Esco 16399988 S/.59.90 Sweater Mosta 16394967 S/.69.90 Short Velt 16394064 S/.79.90', 'http://bit.ly/1NQQKan'),
(36, '2.jpg', 'militar', 'index-blusa-blanca-casaca-mili', 'Index Blusa Blanca 16756159 S/.79.90 Casaca Mili 16398339 S/.159', 'http://bit.ly/1b6BZ4d'),
(37, '3.jpg', 'militar', 'index-polo-much-casaca-army', 'Index Polo Much 16262188 S/.29.90 Casaca Army 16646441 S/.139', 'http://bit.ly/1EEwKoA'),
(38, '3.jpg', 'militar', 'index-polo-rib-casaca-bambo-pantalon-cint', 'Index Polo Rib 16327874 S/.39.90 Casaca Bambo 16393638 S/.99.90 Pantalón Cint 16400128 S/.99.90', 'http://bit.ly/1Mx0Lb0'),
(39, '1.jpg', 'militar', 'index-botin-martin', 'Index Botín Martín 16301243 S/.129', 'http://bit.ly/1MwhSb6'),
(40, '3.jpg', 'tomboy', 'index-poleron-sport-falda-tubo', 'Index Polerón Sport 16379059 S/.99.90 Falda Tubo 16680809 S/.89.90', 'http://bit.ly/19fBTXf'),
(41, '4.jpg', 'tomboy', 'index-blusa-mel', 'Index Blusa Mel 16392271 S/.119', 'http://bit.ly/1AiLovh'),
(42, '4.jpg', 'tomboy', 'index-polo-rib-falda-slim', 'Index Polo Rib 16392237 S/.79.90 Falda Slim 16392232 S/.59.90', 'http://bit.ly/1EExj1J'),
(43, '1.jpg', 'tomboy', 'index-poleron-mori-leg-rolling', 'Index Polerón Mori 16375467 S/.79.90 Leg Rolling 16497929 S/.79.90', 'http://bit.ly/1DcQorx'),
(44, '5.jpg', 'tomboy', 'index-chaleco-joan-vestido-funky', 'Index Chaleco Joan 16392276 S/.179 Vestido Funky 16392266 S/.79.90', 'http://bit.ly/1GKWe4u'),
(45, '5.jpg', 'tomboy', 'index-poleron-boy-blazer-jam-falda-leo', 'Index Polerón Boy 16392247 S/.79.90 Blazer Jam 16453161 S/.129 Falda Leo 16392227 S/.59.90', 'http://bit.ly/1ByzEca'),
(46, '2.jpg', 'tomboy', 'index-polo-shut-casaca-size-falda-flare', 'Index Polo Shut 16299328 S/.39.90 Casaca Size 16372339 S/.159 Falda Flare 16394935 S/.69.90', 'http://bit.ly/1HOAYZd'),
(64, '2.jpg', 'imprescindibles', 'barbados-blusa-mac-casaca-marley-jean-keila', 'Barbados Blusa Mac 16300390 S/.59.90 Casaca Marley 16300397 S/.129 Jean Keila 16443112 S/.99.90', ''),
(65, '1.jpg', 'imprescindibles', 'index-polo-rib', 'Index Polo Rib 16537725 S/.39.90', ''),
(66, '3.jpg', 'imprescindibles', 'index-sweater-volume-jean-joc-meta', 'Index Sweater Volume 16274674 S/.59.90 Jean Joc Meta 16497934 S/.79.90', ''),
(67, '4.jpg', 'imprescindibles', 'index-cardigan-print-pantalon-fango', 'Index Cardigan Print 16271378 S/.69.90 Pantalón Fango 16743416 S/.59.90', ''),
(68, '5.jpg', 'imprescindibles', 'index-sweater-doggi-pantalon-print', 'Index Sweater Doggi 16405231 S/.59.90 Pantalón Print 16411189 S/.59.90', ''),
(69, 'X.jpg', 'imprescindibles', 'index-sweater-textu', 'Index Sweater Textu 16446056 S/.49.90', ''),
(70, '7.jpg', 'imprescindibles', 'index-casaca-moto-vestido-skuba', 'Index Casaca Moto 16306362 S/.99.90 Vestido Skuba 16445380 S/.59.90', ''),
(71, '9.jpg', 'imprescindibles', 'index-pantalon-flaf', 'Index Pantalón Flaf 16290230 S/.59.90', ''),
(72, '8.jpg', 'imprescindibles', 'index-polo-frase-pantalon-flaf', 'Index Polo Frase 16295818 S/.49.90 Pantalón Flaf 16290230 S/.59.90', ''),
(73, '6.jpg', 'imprescindibles', 'index-sweater-bujo-casaca-parky', 'Index Sweater Bujo 16446069 S/.59.90 Casaca Parky 16306133 S/.129', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `prendas`
--
ALTER TABLE `prendas`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `prendas`
--
ALTER TABLE `prendas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=79;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

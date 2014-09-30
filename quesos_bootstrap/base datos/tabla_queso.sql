-- Adminer 4.0.2 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = '-03:00';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `queso`;
CREATE TABLE `queso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) NOT NULL,
  `descripcion` varchar(800) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `maduracion` int(11) NOT NULL,
  `presentacion` int(11) NOT NULL,
  `conservacion` int(11) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `queso` (`id`, `nombre`, `descripcion`, `tipo`, `maduracion`, `presentacion`, `conservacion`, `imagen`) VALUES
(1,	'Sardo',	'Todo el sabor de un condimento que no puede faltar en un queso Sardo. Es un queso magro de masa blanca, suave, algo picante. Es de pasta compacta y quebradiza.	Es ideal para rayar y condimentar, realzando el sabor de las comidas.',	'duro',	120,	4,	18,	'sardo.jpg'),
(2,	'Pategras',	'En tus tablas no debe faltar el sabroso Pategr&aacute;s. Originario de Holanda, conocido como el c&aacute;scara colorada. Es un queso de color marfil, de consistencia firme pero el&aacute;stica. Posee ojos grandes y es de superficie brillante. Ideal para consumir solo o en picadas.',	'semiduro',	30,	4,	19,	'pategras.jpg'),
(3,	'Mozzarella',	'El mayor rendimiento y sabor en tus pizzas y gratinados, con nuestra Mozzarella. Es un queso blanco cremoso de masa firme y textura compacta y sedosa. Estas caracter&iacute;sticas lo convierten en un queso especial para comidas livianas. ',	'blando',	30,	3,	10,	'muzzarella.jpg'),
(4,	'Cremoso',	'Sabor en tus mezclas de paltas entre nachos y picantes asentuando los sabores. Es un queso blanco cremoso de masa firme, textura blanda, mantecosa y el&aacute;stica. De maduraci&oacute;n r&aacute;pida, ideal para derretir y suavizar sabores fuertes o para rellenos de tartas. ',	'blando',	15,	3,	10,	'cremoso.jpg');

-- 2014-06-23 21:59:39
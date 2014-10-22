-- Adminer 4.0.2 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = '-03:00';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `telefono` int(11) NOT NULL,
  `mail` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `cliente` (`id`, `nombre`, `apellido`, `direccion`, `telefono`, `mail`) VALUES
(1,	'maria',	'perez',	'paz 868',	234545,	'maria@gmail.com'),
(2,	'jose',	'garcia',	'alem 485',	28393748,	'jose@gmail.com'),
(3,	'carlos',	'rodriguez',	'maipu 228',	374658,	'carlos@hotmail.com');

DROP TABLE IF EXISTS `compras`;
CREATE TABLE `compras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `importe` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_cliente` (`id_cliente`),
  CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `factura`;
CREATE TABLE `factura` (
  `id_queso` int(11) NOT NULL,
  `id_compra` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  KEY `id_queso` (`id_queso`),
  KEY `id_compra` (`id_compra`),
  CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`id_queso`) REFERENCES `queso` (`id`),
  CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`id_compra`) REFERENCES `compras` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `prod_cliente`;
CREATE TABLE `prod_cliente` (
  `id_queso` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  KEY `id_queso` (`id_queso`),
  KEY `id_cliente` (`id_cliente`),
  CONSTRAINT `prod_cliente_ibfk_1` FOREIGN KEY (`id_queso`) REFERENCES `queso` (`id`),
  CONSTRAINT `prod_cliente_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `queso`;
CREATE TABLE `queso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) NOT NULL,
  `descripcion` varchar(800) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `maduracion` int(11) NOT NULL,
  `presentacion` int(11) NOT NULL,
  `conservacion` int(11) NOT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `precio` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `queso` (`id`, `nombre`, `descripcion`, `tipo`, `maduracion`, `presentacion`, `conservacion`, `imagen`, `precio`) VALUES
(1,	'Sardo',	'Todo el sabor de un condimento que no puede faltar en un queso Sardo. Es un queso magro de masa blanca, suave, algo picante. Es de pasta compacta y quebradiza.	Es ideal para rayar y condimentar, realzando el sabor de las comidas.',	'duro',	140,	4,	18,	'images/sardo.jpg',	80),
(2,	'Pategras',	'En tus tablas no debe faltar el sabroso Pategr&aacute;s. Originario de Holanda, conocido como el c&aacute;scara colorada. Es un queso de color marfil, de consistencia firme pero el&aacute;stica. Posee ojos grandes y es de superficie brillante. Ideal para consumir solo o en picadas.',	'semiduro',	30,	4,	19,	'images/pategras.jpg',	60),
(3,	'Mozzarella',	'El mayor rendimiento y sabor en tus pizzas y gratinados, con nuestra Mozzarella. Es un queso blanco cremoso de masa firme y textura compacta y sedosa. Estas caracter&iacute;sticas lo convierten en un queso especial para comidas livianas. ',	'blando',	20,	3,	10,	'images/muzzarella.jpg',	40),
(4,	'Cremoso',	'Sabor en tus mezclas de paltas entre nachos y picantes asentuando los sabores. Es un queso blanco cremoso de masa firme, textura blanda, mantecosa y el&aacute;stica. De maduraci&oacute;n r&aacute;pida, ideal para derretir y suavizar sabores fuertes o para rellenos de tartas. ',	'blando',	15,	1,	10,	'images/cremoso.jpg',	45),
(5,	'Fontina',	'Es un queso italiano, suave, semiduro, con una piel marr&oacute;n. Funde muy bien y es una interesante alternativa a la mozzarella en las pizzas, pudiendo ser usado tambien como el parmesano en los espaguetis y otros guisos italianos.',	'duro',	90,	3,	16,	'images/fontina.jpg',	70),
(6,	'Parmesano',	'El parmesano es uno de los quesos del grupo denominado grana y algunas veces se vende bajo ese nombre. Todos los quesos de este tipo tienen un contenido en grasa significativamente m&aacute;s bajo que otros quesos bien conocidos duros y semiduros, y de esta forma son comparativamente bajos en calor&iacute;as.',	'duro',	150,	4,	16,	'images/parmesano.jpg',	75),
(7,	'Provolone',	'Es un queso duro italiano, pero con una textura suave. Es perfecto para compartir una tabla de quesos.',	'duro',	130,	3,	18,	'images/provolone.jpg',	68),
(8,	'Filadelfia',	'Es el nombre de una marca de queso blando muy popular, con toda la grasa; es originario de los Estados Unidos.',	'blando',	7,	1,	10,	'images/filadelfia.jpg',	57),
(9,	'Riccota',	'Es un queso italiano bastante inusual porque se hace del suero de la leche de la vaca y no de la cuajada.Es un ingrediente favorito en la cocina italiana, especialmente para hacer pasta, rellenos de tartas dulces y para cartas de queso. Se le puede a&ntilde;adir az&uacute;car, espolvorear con chocolate y canela y servir como un postre.',	'blando',	7,	1,	10,	'images/riccota.jpg',	46),
(10,	'Chevrette',	'Es un queso cremoso doble de cabra, al que se se a&ntilde;ade sabor con ajo y hierbas.',	'blando',	7,	1,	10,	'images/chevrette.jpg',	50);

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `usuario` (`id`, `username`, `password`) VALUES
(1,	'root',	'toor');

-- 2014-10-22 17:50:51

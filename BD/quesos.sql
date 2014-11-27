-- Adminer 4.0.2 MySQL dump

SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = '-03:00';
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DELIMITER ;;

DROP PROCEDURE IF EXISTS `incVisitados`;;
CREATE PROCEDURE `incVisitados`(id_que int, id_cli int, canti int)
begin
		declare cant int;

		select cantidad into cant from prod_cliente where ((id_queso = id_que) and (id_cliente = id_cli)) ;

		set cant = cant + canti;

		update prod_cliente set cantidad = 67 where ((id_queso = id_que) and (id_cliente = id_cli)) ;

	end;;

DELIMITER ;

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `telefono` int(11) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `cliente` (`id`, `nombre`, `apellido`, `direccion`, `telefono`, `mail`, `username`, `password`) VALUES
(1,	'maria',	'perez',	'paz 868',	234545,	'maria@gmail.com',	'maria',	'pmaria'),
(2,	'jose',	'garcia',	'alem 485',	28393748,	'jose@gmail.com',	'jose',	'pjose'),
(3,	'carlos',	'rodriguez',	'maipu 228',	374658,	'carlos@hotmail.com',	'carlos',	'pcarlos'),
(4,	'raul',	'gonzalez',	'avellaneda 24',	858557,	'raul@gmail.com',	'raul',	'praul'),
(6,	'susana',	'gimenez',	'belgrano 897',	12345,	'susi@gmail.com',	'su',	'pass');

DROP TABLE IF EXISTS `compras`;
CREATE TABLE `compras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_cliente_compras` (`id_cliente`),
  CONSTRAINT `FK_cliente_compras` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `compras` (`id`, `id_cliente`) VALUES
(2,	1),
(10,	2),
(1,	3),
(5,	3),
(6,	3),
(7,	3),
(3,	6),
(4,	6),
(8,	6),
(9,	6);

DROP TABLE IF EXISTS `factura`;
CREATE TABLE `factura` (
  `id_queso` int(11) NOT NULL,
  `id_compra` int(11) NOT NULL,
  `precio` decimal(12,2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`id_queso`,`id_compra`),
  KEY `FK_compras_factura` (`id_compra`),
  CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`id_compra`) REFERENCES `compras` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_queso_factura` FOREIGN KEY (`id_queso`) REFERENCES `queso` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `factura` (`id_queso`, `id_compra`, `precio`, `cantidad`) VALUES
(1,	1,	80.00,	3),
(1,	4,	80.00,	1),
(1,	5,	80.00,	1),
(1,	6,	80.00,	1),
(1,	7,	80.00,	1),
(2,	2,	60.00,	1),
(2,	4,	60.00,	1),
(3,	2,	40.00,	2),
(3,	8,	40.00,	1),
(3,	9,	40.00,	1),
(4,	4,	45.00,	2),
(4,	8,	45.00,	1),
(4,	9,	45.00,	1),
(5,	1,	70.00,	1),
(5,	3,	70.00,	1),
(5,	5,	70.00,	1),
(5,	6,	70.00,	1),
(5,	7,	70.00,	1),
(5,	8,	70.00,	1),
(5,	9,	70.00,	1),
(6,	4,	75.00,	3),
(7,	1,	68.00,	1),
(7,	8,	68.00,	2),
(7,	9,	68.00,	2),
(7,	10,	68.00,	1),
(10,	10,	50.00,	2);

DROP TABLE IF EXISTS `prod_cliente`;
CREATE TABLE `prod_cliente` (
  `id_queso` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`id_queso`,`id_cliente`),
  KEY `FK_cliente_prod_cliente` (`id_cliente`),
  CONSTRAINT `FK_cliente_prod_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_queso_prod_cliente` FOREIGN KEY (`id_queso`) REFERENCES `queso` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `prod_cliente` (`id_queso`, `id_cliente`, `cantidad`) VALUES
(1,	1,	8),
(1,	3,	6),
(2,	1,	7),
(6,	3,	8),
(8,	1,	2),
(8,	4,	5);

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

-- 2014-11-27 02:26:28

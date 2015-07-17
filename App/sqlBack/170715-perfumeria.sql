/*
 Navicat Premium Data Transfer

 Source Server         : laboratorio
 Source Server Type    : MySQL
 Source Server Version : 50542
 Source Host           : localhost
 Source Database       : perfumeria

 Target Server Type    : MySQL
 Target Server Version : 50542
 File Encoding         : utf-8

 Date: 07/17/2015 00:33:41 AM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `Aroma`
-- ----------------------------
DROP TABLE IF EXISTS `Aroma`;
CREATE TABLE `Aroma` (
  `idAroma` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `sexo` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `celular` int(20) DEFAULT NULL,
  `ciudad` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `registro` date DEFAULT NULL,
  `estado` int(2) DEFAULT NULL,
  PRIMARY KEY (`idAroma`),
  UNIQUE KEY `correo` (`correo`,`celular`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `Aroma`
-- ----------------------------
BEGIN;
INSERT INTO `Aroma` VALUES ('1', 'Laura', 'Femenino', 'lau@gmail.com', '300456789', 'Barranquilla', '2011-12-11', '1'), ('2', 'Estefan', 'Femenino', 'estefan@hotmail.com', '311890876', 'Medellin', '2014-12-11', '1'), ('3', 'Karen', 'Femenino', 'karen@gmail.com', '312900897', 'Bogotá', '2014-12-11', '1'), ('4', 'Diana', 'Femenino', 'diana@hotmail.com', '300678987', 'Bogotá', '2015-05-06', '1');
COMMIT;

-- ----------------------------
--  Table structure for `Foto_Aroma`
-- ----------------------------
DROP TABLE IF EXISTS `Foto_Aroma`;
CREATE TABLE `Foto_Aroma` (
  `idFoto` int(11) NOT NULL AUTO_INCREMENT,
  `idAroma` int(10) DEFAULT NULL,
  `foto1` varchar(50) DEFAULT NULL,
  `foto2` varchar(50) DEFAULT NULL,
  `foto3` varchar(50) DEFAULT NULL,
  `foto4` varchar(50) DEFAULT NULL,
  `registro` date DEFAULT NULL,
  PRIMARY KEY (`idFoto`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `Foto_Aroma`
-- ----------------------------
BEGIN;
INSERT INTO `Foto_Aroma` VALUES ('1', '1', 'vanilla1.jpg', 'vanilla2.jpg', 'vanilla3.jpg', 'vanilla4.jpg', '2015-07-03'), ('2', '2', 'rojo1.jpg', 'rojo2.jpg', 'rojo3.jpg', 'rojo4.jpg', '2015-07-06'), ('3', '3', 'pink1.jpg', 'pink2.jpg', 'pink3.jpg', 'pink4.jpg', '2015-07-06'), ('4', '4', 'blue1.jpg', 'blue2.jpg', 'blue3.jpg', 'blue4.jpg', '2015-07-06');
COMMIT;

-- ----------------------------
--  Table structure for `Fuera_Servicio`
-- ----------------------------
DROP TABLE IF EXISTS `Fuera_Servicio`;
CREATE TABLE `Fuera_Servicio` (
  `idFueraServicios` int(11) NOT NULL AUTO_INCREMENT,
  `idAroma` int(10) DEFAULT NULL,
  `desde` int(2) DEFAULT NULL,
  `hasta` int(2) DEFAULT NULL,
  `registro` date DEFAULT NULL,
  PRIMARY KEY (`idFueraServicios`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `Fuera_Servicio`
-- ----------------------------
BEGIN;
INSERT INTO `Fuera_Servicio` VALUES ('1', '1', '2', '4', '2015-07-09'), ('2', '2', '10', '15', '2015-07-09'), ('3', '3', '8', '10', '2015-07-09'), ('4', '4', '1', '6', '2015-07-09');
COMMIT;

-- ----------------------------
--  Table structure for `Operacion`
-- ----------------------------
DROP TABLE IF EXISTS `Operacion`;
CREATE TABLE `Operacion` (
  `idOperacion` int(10) NOT NULL AUTO_INCREMENT,
  `idAroma` int(10) DEFAULT NULL,
  `nariz` varchar(2) DEFAULT NULL,
  `labios` varchar(2) DEFAULT NULL,
  `senos` varchar(2) DEFAULT NULL,
  `abdomen` varchar(2) DEFAULT NULL,
  `cola` varchar(2) DEFAULT NULL,
  `registro` date DEFAULT NULL,
  PRIMARY KEY (`idOperacion`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `Operacion`
-- ----------------------------
BEGIN;
INSERT INTO `Operacion` VALUES ('1', '1', 'Si', 'Si', 'Si', 'Si', 'No', '2015-07-03'), ('2', '2', 'No', 'No', 'Si', 'No', 'No', '2015-07-06'), ('3', '3', 'No', 'No', 'No', 'No', 'No', '2015-07-06'), ('4', '4', 'No', 'No', 'No', 'Si', 'No', '2015-07-06');
COMMIT;

-- ----------------------------
--  Table structure for `Perfil_Aroma`
-- ----------------------------
DROP TABLE IF EXISTS `Perfil_Aroma`;
CREATE TABLE `Perfil_Aroma` (
  `idPerfilAroma` int(10) NOT NULL AUTO_INCREMENT,
  `idAroma` int(10) DEFAULT NULL,
  `nomAroma` varchar(30) DEFAULT NULL,
  `edad` int(2) DEFAULT NULL,
  `peso` int(3) DEFAULT NULL,
  `estatura` int(3) DEFAULT NULL,
  `busto` int(2) DEFAULT NULL,
  `colPiel` varchar(10) DEFAULT NULL,
  `colOjos` varchar(10) DEFAULT NULL,
  `colCabello` varchar(10) DEFAULT NULL,
  `colFavorito` varchar(10) DEFAULT NULL,
  `idiomas` varchar(100) DEFAULT NULL,
  `tatuajes` varchar(2) DEFAULT NULL,
  `operaciones` varchar(2) DEFAULT NULL,
  `actividadSexual` varchar(10) DEFAULT NULL,
  `sexoEs` varchar(500) DEFAULT NULL,
  `soy` text,
  `experiencia` varchar(2) DEFAULT NULL,
  `tiempoExperiencia` int(2) DEFAULT NULL,
  `cumple` date DEFAULT NULL,
  `registro` date NOT NULL,
  PRIMARY KEY (`idPerfilAroma`,`registro`),
  KEY `nomAroma` (`nomAroma`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `Perfil_Aroma`
-- ----------------------------
BEGIN;
INSERT INTO `Perfil_Aroma` VALUES ('1', '1', 'Vanilla Sky', '22', '80', '170', '34', 'Morena', 'Cafe', 'Castaño', 'Rosado', 'Español / English', 'No', 'Si', '1 - 3', 'Es un grán deseo para disfrutarlo al máximo', 'Soy estrovertida, alegre, sociable y me gusta interactuar con la gente.', 'No', '0', '1997-07-08', '2015-07-03'), ('2', '2', 'Frutos Rojos', '20', '65', '160', '40', 'Blanca', 'Negro', 'Peli Roja', 'Rojo', 'Español', 'No', 'No', '3 - 5', 'Es un grán deseo para disfrutarlo al máximo', 'Deseo intenso por complacer al máximo', 'No', '0', '1992-03-10', '2015-07-03'), ('3', '3', 'Pink Rose', '18', '58', '172', '30', 'Blanca', 'Negro', 'Negro', 'Azul', 'Español', 'No', 'No', '5 -10', 'Es un grán deseo para disfrutarlo al máximo', 'Soy una rosa sensual', 'No', '0', '1993-09-16', '2015-07-06'), ('4', '4', 'Blue Hot', '20', '57', '170', '30', 'Blanca', 'Miel', 'Castaño', 'Azul', 'Español / English', 'No', 'Si', '10 - 20', 'Es un grán deseo para disfrutarlo al máximo', 'Caliente', 'No', '0', '1991-07-27', '2015-07-06');
COMMIT;

-- ----------------------------
--  Table structure for `Servicio_Aroma`
-- ----------------------------
DROP TABLE IF EXISTS `Servicio_Aroma`;
CREATE TABLE `Servicio_Aroma` (
  `idServicio` int(10) NOT NULL,
  `idAroma` int(10) DEFAULT NULL,
  `sexOral` varchar(2) DEFAULT NULL,
  `sexAnal` varchar(2) DEFAULT NULL,
  `sexHombre` varchar(2) DEFAULT NULL,
  `sexMujer` varchar(2) DEFAULT NULL,
  `trio` varchar(2) DEFAULT NULL,
  `trioHMH` varchar(2) DEFAULT NULL,
  `trioMHM` varchar(2) DEFAULT NULL,
  `lluviaDorada` varchar(2) DEFAULT NULL,
  `viaja` varchar(2) DEFAULT NULL,
  `baile` varchar(2) DEFAULT NULL,
  `masaje` varchar(2) DEFAULT NULL,
  `encuentro` varchar(50) DEFAULT NULL,
  `registro` date DEFAULT NULL,
  PRIMARY KEY (`idServicio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `Servicio_Aroma`
-- ----------------------------
BEGIN;
INSERT INTO `Servicio_Aroma` VALUES ('0', '1', 'Si', 'No', 'Si', 'Si', 'Si', 'No', 'Si', 'No', 'Si', 'No', 'No', 'Hotel', '2015-07-03'), ('1', '2', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'No', 'Si', 'Si', 'Si', 'Hotel / Residencia', '2015-07-06'), ('2', '3', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Hotel', '2015-07-06'), ('3', '4', 'Si', 'Si', 'Si', 'Si', 'Si', 'No', 'Si', 'Si', 'No', 'No', 'Si', 'Hotel', '2015-07-06');
COMMIT;

-- ----------------------------
--  Table structure for `Tarifa_Aroma`
-- ----------------------------
DROP TABLE IF EXISTS `Tarifa_Aroma`;
CREATE TABLE `Tarifa_Aroma` (
  `idTarifas` int(10) NOT NULL AUTO_INCREMENT,
  `idAroma` int(10) DEFAULT NULL,
  `valorHora` varchar(10) DEFAULT NULL,
  `valor2Hora` varchar(10) DEFAULT NULL,
  `valor3Hora` varchar(10) DEFAULT NULL,
  `valorDia` varchar(10) DEFAULT NULL,
  `registro` date DEFAULT NULL,
  PRIMARY KEY (`idTarifas`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `Tarifa_Aroma`
-- ----------------------------
BEGIN;
INSERT INTO `Tarifa_Aroma` VALUES ('1', '1', '250000', '500000', '650000', '1200000', '2015-07-03'), ('2', '2', '300000', '600000', '900000', '1600000', '2015-07-06'), ('3', '3', '380000', '600000', '1000000', '1900000', '2015-07-06'), ('4', '4', '400000', '800000', '1100000', '2000000', '2015-07-06');
COMMIT;

-- ----------------------------
--  Table structure for `usuarios`
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `mailUser` varchar(100) DEFAULT NULL,
  `registro` date DEFAULT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `usuarios`
-- ----------------------------
BEGIN;
INSERT INTO `usuarios` VALUES ('1', 'admin', 'admin', 'info@laperfumeria.com', '2015-07-16');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;

/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50534
 Source Host           : localhost
 Source Database       : perfumeria

 Target Server Type    : MySQL
 Target Server Version : 50534
 File Encoding         : utf-8

 Date: 06/10/2015 18:04:08 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `Aroma`
-- ----------------------------
DROP TABLE IF EXISTS `Aroma`;
CREATE TABLE `Aroma` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `idAroma` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `nombre` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `nomAroma` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `sexo` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `edad` int(2) DEFAULT NULL,
  `ciudad` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `estatura` int(4) DEFAULT NULL,
  `cabello` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `busto` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `ojos` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `piel` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `caderas` int(10) DEFAULT NULL,
  `idiomas` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `tatuajes` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `foto1` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `foto2` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `foto3` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `foto4` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `registrada` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idAroma` (`idAroma`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `Aroma`
-- ----------------------------
BEGIN;
INSERT INTO `Aroma` VALUES ('1', 'lau@hotmail.com', 'Laura', 'Vanilla Sky', 'M', '22', 'Barranquilla', '140', 'Negro', '32', 'Cafe', 'Morena', '67', 'Español', 'No', 'rojo1.jpg', 'rojo2.jpg', 'rojo3.jpg', 'rojo4.jpg', '2015-06-09'), ('2', 'estefan@gmail.com', 'Estefan', 'Frutos Rojos', 'M', '24', 'Medellin', '170', 'Rubio', '27', 'Miel', 'Blanca', '60', 'Español / English', 'No', 'rojo1.jpg', 'rojo2.jpg', 'rojo3.jpg', 'rojo4.jpg', '2015-06-09');
COMMIT;

-- ----------------------------
--  Table structure for `Servicio`
-- ----------------------------
DROP TABLE IF EXISTS `Servicio`;
CREATE TABLE `Servicio` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `idAroma` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `orientacionSexual` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `sexoOral` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `sexoOral2` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `sexoAnal` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `conMujeres` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `conParejas` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `trioHMH` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `trioMHM` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `jugetes` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `despedidaSoltero` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `baileErotico` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `lluviaDorada` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idAroma` (`idAroma`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `Servicio`
-- ----------------------------
BEGIN;
INSERT INTO `Servicio` VALUES ('1', 'lau@hotmail.com', 'Heterosexual', 'Si', 'Si', 'No', 'Si', 'Si', 'No', 'Si', 'Si', 'No', 'No', 'No'), ('2', 'estefan@gmail.com', 'Heterosexual', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si', 'Si');
COMMIT;

-- ----------------------------
--  Table structure for `Tarifa`
-- ----------------------------
DROP TABLE IF EXISTS `Tarifa`;
CREATE TABLE `Tarifa` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `hora1` int(30) DEFAULT NULL,
  `hora2` int(30) DEFAULT NULL,
  `hora3` int(30) DEFAULT NULL,
  `dia` int(30) DEFAULT NULL,
  `encuentro` varchar(50) DEFAULT NULL,
  `idAroma` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idAromas` (`idAroma`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `Tarifa`
-- ----------------------------
BEGIN;
INSERT INTO `Tarifa` VALUES ('1', '150', '280', '350', '1000000', 'Hotel', 'lau@hotmail.com'), ('2', '300', '550', '800', '1800000', 'Hotel / Apartamento', 'estefan@gmail.com');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;

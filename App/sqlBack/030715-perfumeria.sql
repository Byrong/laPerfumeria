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

 Date: 07/03/2015 18:13:33 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `Aroma`
-- ----------------------------
BEGIN;
INSERT INTO `Aroma` VALUES ('1', 'Laura', 'M', 'lau@gmail.com', '300456789', 'Barranquilla', '2015-06-09', '0'), ('2', 'Estefan', 'M', 'estefan@hotmail.com', '311890876', 'Medellin', '2015-06-09', '1');
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `colOjos` varchar(10) DEFAULT NULL,
  `colCabello` varchar(10) DEFAULT NULL,
  `colFavorito` varchar(10) DEFAULT NULL,
  `tatuajes` varchar(2) DEFAULT NULL,
  `operaciones` varchar(2) DEFAULT NULL,
  `actividadSexual` varchar(2) DEFAULT NULL,
  `soy` text,
  `experiencia` varchar(2) DEFAULT NULL,
  `tiempoExperiencia` int(2) DEFAULT NULL,
  `registro` date DEFAULT NULL,
  PRIMARY KEY (`idPerfilAroma`),
  KEY `nomAroma` (`nomAroma`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `Perfil_Aroma`
-- ----------------------------
BEGIN;
INSERT INTO `Perfil_Aroma` VALUES ('1', '1', 'Vanilla Sky', '22', '80', '170', 'Cafe', 'Castaño', 'Rosado', 'No', 'No', '1-', 'Soy estrovertida, alegre, sociable y me gusta interactuar con la gente.', 'No', '0', '2015-07-03'), ('2', '2', 'Frutos Rojos', '20', '65', '160', 'Negro', 'Peli Roja', 'Rojo', 'No', 'No', '3-', 'Deseo intenso por complacer al máximo', 'No', '0', '2015-07-03');
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

SET FOREIGN_KEY_CHECKS = 1;

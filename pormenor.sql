/*
Navicat MySQL Data Transfer

Source Server         : Local
Source Server Version : 50719
Source Host           : 127.0.0.1:3306
Source Database       : pormenor

Target Server Type    : MYSQL
Target Server Version : 50719
File Encoding         : 65001

Date: 2018-04-11 11:56:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for equipas
-- ----------------------------
DROP TABLE IF EXISTS `equipas`;
CREATE TABLE `equipas` (
  `equipaId` int(11) NOT NULL AUTO_INCREMENT,
  `equipaNome` varchar(45) NOT NULL,
  `equipaURL` varchar(255) NOT NULL,
  PRIMARY KEY (`equipaId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of equipas
-- ----------------------------
INSERT INTO `equipas` VALUES ('1', 'Futebol Clube do Porto', 'imgs/thumbs/fcp.png');
INSERT INTO `equipas` VALUES ('2', 'Sport Lisboa e Benfica', 'imgs/thumbs/slb.png');
INSERT INTO `equipas` VALUES ('3', 'Sporting Clube de Portugal', 'imgs/thumbs/scp.png');
INSERT INTO `equipas` VALUES ('4', 'Sporting Clube de Braga', 'imgs/thumbs/scb.png');
INSERT INTO `equipas` VALUES ('5', 'Rio Ave Futebol Clube', 'imgs/thumbs/rAve.png');

-- ----------------------------
-- Table structure for golos
-- ----------------------------
DROP TABLE IF EXISTS `golos`;
CREATE TABLE `golos` (
  `goloJogadorId` int(11) NOT NULL,
  `goloJogoId` int(11) NOT NULL,
  `goloQuant` int(11) NOT NULL,
  PRIMARY KEY (`goloJogadorId`,`goloJogoId`),
  KEY `fk_jogadores_has_jogos_jogos1_idx` (`goloJogoId`),
  KEY `fk_jogadores_has_jogos_jogadores1_idx` (`goloJogadorId`),
  CONSTRAINT `fk_jogadores_has_jogos_jogadores1` FOREIGN KEY (`goloJogadorId`) REFERENCES `jogadores` (`jogadorId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_jogadores_has_jogos_jogos1` FOREIGN KEY (`goloJogoId`) REFERENCES `jogos` (`jogoId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of golos
-- ----------------------------

-- ----------------------------
-- Table structure for jogadores
-- ----------------------------
DROP TABLE IF EXISTS `jogadores`;
CREATE TABLE `jogadores` (
  `jogadorId` int(11) NOT NULL AUTO_INCREMENT,
  `jogadorNome` varchar(45) NOT NULL,
  `jogadorEquipaId` int(11) NOT NULL,
  `jogadorPosicaoId` int(11) NOT NULL,
  PRIMARY KEY (`jogadorId`),
  KEY `fk_jogadores_equipas1_idx` (`jogadorEquipaId`),
  KEY `fk_jogadores_posicoes1_idx` (`jogadorPosicaoId`),
  CONSTRAINT `fk_jogadores_equipas1` FOREIGN KEY (`jogadorEquipaId`) REFERENCES `equipas` (`equipaId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_jogadores_posicoes1` FOREIGN KEY (`jogadorPosicaoId`) REFERENCES `posicoes` (`posicaoId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jogadores
-- ----------------------------

-- ----------------------------
-- Table structure for jogos
-- ----------------------------
DROP TABLE IF EXISTS `jogos`;
CREATE TABLE `jogos` (
  `jogoId` int(11) NOT NULL AUTO_INCREMENT,
  `jogoJornadaId` int(11) NOT NULL,
  `jogoCasaEquipaId` int(11) NOT NULL,
  `jogoForaEquipaId` int(11) NOT NULL,
  PRIMARY KEY (`jogoId`),
  KEY `fk_jogos_jornadas_idx` (`jogoJornadaId`),
  KEY `fk_jogos_equipas1_idx` (`jogoCasaEquipaId`),
  KEY `fk_jogos_equipas2_idx` (`jogoForaEquipaId`),
  CONSTRAINT `fk_jogos_equipas1` FOREIGN KEY (`jogoCasaEquipaId`) REFERENCES `equipas` (`equipaId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_jogos_equipas2` FOREIGN KEY (`jogoForaEquipaId`) REFERENCES `equipas` (`equipaId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_jogos_jornadas` FOREIGN KEY (`jogoJornadaId`) REFERENCES `jornadas` (`jornadaId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jogos
-- ----------------------------
INSERT INTO `jogos` VALUES ('2', '1', '1', '2');
INSERT INTO `jogos` VALUES ('3', '1', '3', '4');
INSERT INTO `jogos` VALUES ('4', '2', '5', '1');
INSERT INTO `jogos` VALUES ('5', '2', '2', '3');

-- ----------------------------
-- Table structure for jornadas
-- ----------------------------
DROP TABLE IF EXISTS `jornadas`;
CREATE TABLE `jornadas` (
  `jornadaId` int(11) NOT NULL AUTO_INCREMENT,
  `jornadaData` date NOT NULL,
  PRIMARY KEY (`jornadaId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jornadas
-- ----------------------------
INSERT INTO `jornadas` VALUES ('1', '2018-03-21');
INSERT INTO `jornadas` VALUES ('2', '2018-03-22');

-- ----------------------------
-- Table structure for posicoes
-- ----------------------------
DROP TABLE IF EXISTS `posicoes`;
CREATE TABLE `posicoes` (
  `posicaoId` int(11) NOT NULL AUTO_INCREMENT,
  `posicaoNome` varchar(45) NOT NULL,
  `posicaoZona` enum('Guarda Redes','Defesa','Médio','Avançado') NOT NULL,
  PRIMARY KEY (`posicaoId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of posicoes
-- ----------------------------

-- ----------------------------
-- Table structure for resultados
-- ----------------------------
DROP TABLE IF EXISTS `resultados`;
CREATE TABLE `resultados` (
  `resultadoJogoId` int(11) NOT NULL,
  `resultadoGolosCasa` int(11) NOT NULL DEFAULT '0',
  `resultadoGolosFora` int(11) NOT NULL DEFAULT '0',
  `resultadoPtsCasa` int(11) NOT NULL DEFAULT '0',
  `resultadoPtsFora` int(11) NOT NULL DEFAULT '0',
  `resultadoVitCasa` int(11) NOT NULL DEFAULT '0',
  `resultadoVitFora` int(11) NOT NULL DEFAULT '0',
  `resultadoEmpCasa` int(11) NOT NULL DEFAULT '0',
  `resultadoEmpFora` int(11) NOT NULL DEFAULT '0',
  `resultadoDerCasa` int(11) NOT NULL DEFAULT '0',
  `resultadoDerFora` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`resultadoJogoId`),
  KEY `fk_resultados_jogos1_idx` (`resultadoJogoId`),
  CONSTRAINT `fk_resultados_jogos1` FOREIGN KEY (`resultadoJogoId`) REFERENCES `jogos` (`jogoId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of resultados
-- ----------------------------
INSERT INTO `resultados` VALUES ('2', '0', '1', '0', '3', '0', '1', '0', '0', '1', '0');
INSERT INTO `resultados` VALUES ('3', '2', '2', '1', '1', '0', '0', '1', '1', '0', '0');
INSERT INTO `resultados` VALUES ('4', '2', '1', '3', '0', '1', '0', '0', '0', '0', '1');
INSERT INTO `resultados` VALUES ('5', '3', '0', '3', '0', '1', '0', '0', '0', '0', '1');
SET FOREIGN_KEY_CHECKS=1;
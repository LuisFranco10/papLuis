/*
 Navicat Premium Data Transfer

 Source Server         : Local
 Source Server Type    : MySQL
 Source Server Version : 50721
 Source Host           : 127.0.0.1:3306
 Source Schema         : futebol

 Target Server Type    : MySQL
 Target Server Version : 50721
 File Encoding         : 65001

 Date: 12/11/2019 17:08:21
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for clubes
-- ----------------------------
DROP TABLE IF EXISTS `clubes`;
CREATE TABLE `clubes`  (
  `clubeId` int(11) NOT NULL AUTO_INCREMENT,
  `clubeNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `clubeEstadioURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `clubeFundacao` int(11) NOT NULL,
  `clubePresidenteNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `clubeSkin` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `clubeLogoURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`clubeId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of clubes
-- ----------------------------
INSERT INTO `clubes` VALUES (1, 'Sporting Clube de Portugal', 'imagens/estadios/alvalade.jpg', 1906, 'Frederico Varandas', '24, 110, 69', 'imagens/logos/sporting.png');
INSERT INTO `clubes` VALUES (2, 'Sport Lisboa e Benfica', 'imagens/estadios/luz.jpg', 1904, 'Luís Filipe Vieira', '255, 13, 0', 'imagens/logos/benfica.png');
INSERT INTO `clubes` VALUES (3, 'Futebol Clube do Porto', 'imagens/estadios/dragao.jpg', 1898, 'Jorge Nuno Pinto da Costa', '1, 18, 90', 'imagens/logos/porto.png');

-- ----------------------------
-- Table structure for epocas
-- ----------------------------
DROP TABLE IF EXISTS `epocas`;
CREATE TABLE `epocas`  (
  `epocaId` int(11) NOT NULL AUTO_INCREMENT,
  `epocaNome` varchar(9) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`epocaId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of epocas
-- ----------------------------
INSERT INTO `epocas` VALUES (1, '2017/2018');
INSERT INTO `epocas` VALUES (2, '2018/2019');
INSERT INTO `epocas` VALUES (3, '2019/2020');

-- ----------------------------
-- Table structure for jogadores
-- ----------------------------
DROP TABLE IF EXISTS `jogadores`;
CREATE TABLE `jogadores`  (
  `jogadorId` int(11) NOT NULL AUTO_INCREMENT,
  `jogadorFotoURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `jogadorNumero` int(11) NOT NULL,
  `jogadorNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `jogadorPosicao` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `jogadorNacionalidade` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`jogadorId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jogadores
-- ----------------------------
INSERT INTO `jogadores` VALUES (4, 'imagens/jogadores/brunoFernandes.jpg', 8, 'Bruno Fernandes', 'Médio', 'Portuguesa');
INSERT INTO `jogadores` VALUES (5, 'imagens/jogadores/svilar.jpg', 1, 'Miles Svilar', 'GR', 'Belga');

-- ----------------------------
-- Table structure for plantel
-- ----------------------------
DROP TABLE IF EXISTS `plantel`;
CREATE TABLE `plantel`  (
  `plantelJogadorId` int(11) NOT NULL,
  `plantelClubeId` int(11) NOT NULL,
  `plantelEpocaId` int(11) NOT NULL,
  PRIMARY KEY (`plantelJogadorId`, `plantelClubeId`, `plantelEpocaId`) USING BTREE,
  INDEX `fk_jogadores_has_clubes_clubes1_idx`(`plantelClubeId`) USING BTREE,
  INDEX `fk_jogadores_has_clubes_jogadores_idx`(`plantelJogadorId`) USING BTREE,
  INDEX `fk_jogadores_has_clubes_epocas1_idx`(`plantelEpocaId`) USING BTREE,
  CONSTRAINT `fk_jogadores_has_clubes_clubes1` FOREIGN KEY (`plantelClubeId`) REFERENCES `clubes` (`clubeId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_jogadores_has_clubes_epocas1` FOREIGN KEY (`plantelEpocaId`) REFERENCES `epocas` (`epocaId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_jogadores_has_clubes_jogadores` FOREIGN KEY (`plantelJogadorId`) REFERENCES `jogadores` (`jogadorId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of plantel
-- ----------------------------
INSERT INTO `plantel` VALUES (4, 1, 1);
INSERT INTO `plantel` VALUES (5, 2, 3);

SET FOREIGN_KEY_CHECKS = 1;

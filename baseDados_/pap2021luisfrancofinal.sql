/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3307
 Source Server Type    : MySQL
 Source Server Version : 50731
 Source Host           : localhost:3306
 Source Schema         : pap2021luisfranco

 Target Server Type    : MySQL
 Target Server Version : 50731
 File Encoding         : 65001

 Date: 21/07/2021 18:46:11
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
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of clubes
-- ----------------------------
INSERT INTO `clubes` VALUES (1, 'Sporting', 'imagens/estadios/alvalade.jpg', 1906, 'Frederico Varandas', '#186E45', 'imagens/logos/sporting.png');
INSERT INTO `clubes` VALUES (2, 'Benfica', 'imagens/estadios/luz.jpg', 1904, 'Luis Filipe Vieira', '#FF0D00', 'imagens/logos/benfica.png');
INSERT INTO `clubes` VALUES (3, 'Porto', 'imagens/estadios/dragao.jpg', 1903, 'Pinto da Costa', '#01125A', 'imagens/logos/porto.png');
INSERT INTO `clubes` VALUES (9, 'aves', 'imagens/estadios/telstar2.png', 1908, 'xico tonto', '#003', 'imagens/logos/aves.png');

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
  `jogadorClubeId` int(11) NOT NULL,
  PRIMARY KEY (`jogadorId`) USING BTREE,
  INDEX `fk_jogadores_clubes1_idx`(`jogadorClubeId`) USING BTREE,
  CONSTRAINT `fk_jogadores_clubes1` FOREIGN KEY (`jogadorClubeId`) REFERENCES `clubes` (`clubeId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of jogadores
-- ----------------------------
INSERT INTO `jogadores` VALUES (1, 'imagens/jogadores/brunoFernandes.jpg', 8, 'Bruno Fernandes', 'Medio Centro', 'Portugues', 1);
INSERT INTO `jogadores` VALUES (2, 'imagens/jogadores/marega.jpg', 11, 'Marega', 'Avancado', 'Malines', 3);
INSERT INTO `jogadores` VALUES (3, 'imagens/jogadores/mathieu.jpg', 3, 'Mat', 'centraleiro', 'Avec', 1);
INSERT INTO `jogadores` VALUES (5, 'imagens/jogadores/svilar.jpg', 1, 'svilar', 'keeper', 'Ta maluco', 2);
INSERT INTO `jogadores` VALUES (6, 'imagens/jogadores/alvalade.jpg', 12, 'MC PEDRAO', 'Ponta quieta', 'meio tuga meio australiano', 1);

-- ----------------------------
-- Table structure for jogos
-- ----------------------------
DROP TABLE IF EXISTS `jogos`;
CREATE TABLE `jogos`  (
  `jogoId` int(11) NOT NULL AUTO_INCREMENT,
  `jogoData` date NOT NULL,
  `jogoCasaClubeId` int(11) NOT NULL,
  `jogoForaClubeId` int(11) NOT NULL,
  `jogoCasaGolos` int(11) NOT NULL,
  `jogoForaGolos` int(11) NOT NULL,
  PRIMARY KEY (`jogoId`) USING BTREE,
  INDEX `fk_jogos_clubes1_idx`(`jogoCasaClubeId`) USING BTREE,
  INDEX `fk_jogos_clubes2_idx`(`jogoForaClubeId`) USING BTREE,
  CONSTRAINT `fk_jogos_clubes1` FOREIGN KEY (`jogoCasaClubeId`) REFERENCES `clubes` (`clubeId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_jogos_clubes2` FOREIGN KEY (`jogoForaClubeId`) REFERENCES `clubes` (`clubeId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of jogos
-- ----------------------------
INSERT INTO `jogos` VALUES (2, '2021-07-29', 1, 2, 1, 2);
INSERT INTO `jogos` VALUES (3, '2021-07-07', 2, 1, 6, 2);

-- ----------------------------
-- Table structure for pontos
-- ----------------------------
DROP TABLE IF EXISTS `pontos`;
CREATE TABLE `pontos`  (
  `pontoId` int(11) NOT NULL AUTO_INCREMENT,
  `pontoResultado` enum('V','E','D') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'V',
  `pontoValor` int(11) NOT NULL,
  `pontoJogoId` int(11) NOT NULL,
  `pontoClubeId` int(11) NOT NULL,
  PRIMARY KEY (`pontoId`) USING BTREE,
  INDEX `fk_pontos_jogos1_idx`(`pontoJogoId`) USING BTREE,
  INDEX `fk_pontos_clubes1_idx`(`pontoClubeId`) USING BTREE,
  CONSTRAINT `fk_pontos_clubes1` FOREIGN KEY (`pontoClubeId`) REFERENCES `clubes` (`clubeId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pontos_jogos1` FOREIGN KEY (`pontoJogoId`) REFERENCES `jogos` (`jogoId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of pontos
-- ----------------------------
INSERT INTO `pontos` VALUES (1, 'V', 3, 2, 2);
INSERT INTO `pontos` VALUES (2, 'D', 0, 2, 1);
INSERT INTO `pontos` VALUES (3, 'D', 0, 3, 1);
INSERT INTO `pontos` VALUES (4, 'V', 3, 3, 2);

SET FOREIGN_KEY_CHECKS = 1;

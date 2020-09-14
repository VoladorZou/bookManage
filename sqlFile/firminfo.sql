/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 50553
 Source Host           : localhost:3306
 Source Schema         : bookmanage

 Target Server Type    : MySQL
 Target Server Version : 50553
 File Encoding         : 65001

 Date: 31/12/2019 20:42:49
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for firminfo
-- ----------------------------
DROP TABLE IF EXISTS `firminfo`;
CREATE TABLE `firminfo`  (
  `firmName` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `chairman` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `phoneNum` int(11) NOT NULL
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of firminfo
-- ----------------------------
INSERT INTO `firminfo` VALUES ('php小组', 'Mr.chen', '松山湖', 888888);

SET FOREIGN_KEY_CHECKS = 1;

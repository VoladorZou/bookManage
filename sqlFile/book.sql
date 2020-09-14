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

 Date: 31/12/2019 20:42:30
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for book
-- ----------------------------
DROP TABLE IF EXISTS `book`;
CREATE TABLE `book`  (
  `bookName` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `bookID` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `press` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `bookNum` int(50) NOT NULL
) ENGINE = MyISAM CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of book
-- ----------------------------
INSERT INTO `book` VALUES ('php教程', 'b01', '人民教育出版社', 11);
INSERT INTO `book` VALUES ('python教程', 'b02', '人民教育出版社', 13);
INSERT INTO `book` VALUES ('路由与交换', 'b04', '人民邮电出版社', 17);
INSERT INTO `book` VALUES ('操作系统', 'b07', '电子工业出版社', 15);
INSERT INTO `book` VALUES ('算法与数据结构', 'b06', '电子工业出版社', 12);
INSERT INTO `book` VALUES ('计算机网络', 'b03', '电子工业出版社', 13);
INSERT INTO `book` VALUES ('C语言教程', 'b05', '人民邮电出版社', 23);

SET FOREIGN_KEY_CHECKS = 1;

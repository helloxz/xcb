/*
Navicat MySQL Data Transfer

Source Server         : 192.168.0.111
Source Server Version : 50611
Source Host           : 192.168.0.111:3306
Source Database       : xcb

Target Server Type    : MYSQL
Target Server Version : 50611
File Encoding         : 65001

Date: 2015-03-10 17:45:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` tinyint(6) NOT NULL AUTO_INCREMENT COMMENT '管理员信息',
  `nickname` char(12) NOT NULL COMMENT '昵称',
  `name` char(20) NOT NULL COMMENT '姓名',
  `email` char(40) NOT NULL COMMENT '邮箱',
  `password` varchar(64) NOT NULL COMMENT '密码',
  `ip` char(20) DEFAULT NULL COMMENT 'IP地址',
  `time` time DEFAULT NULL COMMENT '登录时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'xiaoz', '邹修平', 'xiaozblog@163.com', 'xiaoz', null, null);

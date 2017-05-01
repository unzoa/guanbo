/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : csj

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2017-04-05 12:48:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `article`
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8,
  `img` text CHARACTER SET utf8,
  `content` text CHARACTER SET utf8,
  `intro` text CHARACTER SET utf8,
  `time` date DEFAULT NULL,
  `view` int(11) DEFAULT '0',
  `type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('5', '第一条测试文章jj', 'Upload/2017-01-12/5876f05908d18.jpg', '			hahaha,  here  is content		', '			hahaha,this is intro									', '2017-01-11', '36', '1');
INSERT INTO `article` VALUES ('7', '哈哈', 'Upload/2017-01-11/5876427712560.jpg', null, '卡卡卡', '2017-01-11', '24', '2');
INSERT INTO `article` VALUES ('8', '第二条测试文章', 'Upload/2017-01-12/5876f11032a6c.jpg', '这是中文的&lt;h2&gt;nana&lt;/h2&gt;', '嗯，这里是中文的简介', '2017-01-12', '24', '1');

-- ----------------------------
-- Table structure for `banner`
-- ----------------------------
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img` text CHARACTER SET utf8,
  `intro` text CHARACTER SET utf8,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of banner
-- ----------------------------
INSERT INTO `banner` VALUES ('1', 'Upload/2017-03-09/58c1176b7e579.doc', '');
INSERT INTO `banner` VALUES ('2', 'Upload/2017-01-23/58859263b708c.jpg', '好的好的');
INSERT INTO `banner` VALUES ('3', 'Upload/2017-01-23/5885929a03fa5.jpg', '浩浩荡荡');

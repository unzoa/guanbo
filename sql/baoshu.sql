/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50520
Source Host           : localhost:3306
Source Database       : baoshu

Target Server Type    : MYSQL
Target Server Version : 50520
File Encoding         : 65001

Date: 2017-04-05 12:48:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `bs_dongtai`
-- ----------------------------
DROP TABLE IF EXISTS `bs_dongtai`;
CREATE TABLE `bs_dongtai` (
  `did` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(11) DEFAULT NULL,
  `jid` varchar(11) DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `daytime` date DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `teamid` int(11) DEFAULT NULL,
  PRIMARY KEY (`did`)
) ENGINE=InnoDB AUTO_INCREMENT=200 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bs_dongtai
-- ----------------------------
INSERT INTO `bs_dongtai` VALUES ('107', '宝慧金刚', '大头', '39', '2017-01-03', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('108', '宝慧金刚', '上师心咒', '6', '2017-01-03', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('110', '宝慧金刚', '十福心咒', '6', '2017-01-03', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('111', '宝慧金刚', '金刚持心咒', '6', '2017-01-03', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('112', '宝慧金刚', '大威德', '1', '2017-01-03', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('113', '宝慧金刚', '财宝金刚', '1', '2017-01-03', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('114', '宝慧金刚', '九大金刚', '1', '2017-01-03', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('116', '宝慧金刚', '文殊金刚', '1', '2017-01-03', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('117', '幸运金刚', '莲师心咒', '1', '2017-01-03', '54', '2');
INSERT INTO `bs_dongtai` VALUES ('118', '幸运金刚', '财宝天王', '16', '2017-01-03', '54', '2');
INSERT INTO `bs_dongtai` VALUES ('119', '宝慧金刚', '财宝金刚', '7', '2017-01-03', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('120', '宝慧金刚', '百字明', '3', '2017-01-04', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('121', '幸运金刚', '莲师心咒', '2', '2017-01-04', '54', '2');
INSERT INTO `bs_dongtai` VALUES ('122', '幸运金刚', '财宝天王', '11', '2017-01-04', '54', '2');
INSERT INTO `bs_dongtai` VALUES ('123', '宝慧金刚', '上师心咒', '3', '2017-01-04', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('124', '宝慧金刚', '十福心咒', '3', '2017-01-04', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('125', '宝慧金刚', '财宝金刚', '3', '2017-01-04', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('126', '宝慧金刚', '文殊金刚', '3', '2017-01-04', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('127', '宝慧金刚', '金刚持心咒', '3', '2017-01-04', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('128', '大日莲花', '上师心咒', '5', '2017-01-04', '48', '2');
INSERT INTO `bs_dongtai` VALUES ('129', '宝慧金刚', '大头', '21', '2017-01-04', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('130', '宝慧金刚', '大威德', '3', '2017-01-04', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('131', '宝慧金刚', '九大金刚', '1', '2017-01-04', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('132', '幸运金刚', '财宝天王', '13', '2017-01-05', '54', '2');
INSERT INTO `bs_dongtai` VALUES ('133', '宝慧金刚', '文殊金刚', '1', '2017-01-05', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('134', '宝慧金刚', '上师心咒', '3', '2017-01-05', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('135', '宝慧金刚', '十福心咒', '1', '2017-01-05', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('136', '大日莲花', '灯供', '380', '2017-01-06', '48', '2');
INSERT INTO `bs_dongtai` VALUES ('137', '宝慧金刚', '大头', '35', '2017-01-06', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('138', '宝慧金刚', '大威德', '3', '2017-01-06', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('139', '宝慧金刚', '文殊金刚', '1', '2017-01-06', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('140', '宝慧金刚', '九大金刚', '1', '2017-01-06', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('141', '宝慧金刚', '上师心咒', '3', '2017-01-07', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('142', '宝慧金刚', '十福心咒', '3', '2017-01-07', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('143', '幸运金刚', '财宝天王', '13', '2017-01-08', '54', '2');
INSERT INTO `bs_dongtai` VALUES ('144', '宝慧金刚', '上师心咒', '1', '2017-01-08', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('145', '大日莲花', '大头', '11', '2017-01-08', '48', '2');
INSERT INTO `bs_dongtai` VALUES ('146', '宝慧金刚', '上师心咒', '3', '2017-01-09', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('147', '宝慧金刚', '十福心咒', '3', '2017-01-09', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('148', '宝慧金刚', '金刚持心咒', '3', '2017-01-09', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('149', '宝慧金刚', '上师心咒', '3', '2017-01-10', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('150', '宝慧金刚', '十福心咒', '3', '2017-01-10', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('151', '宝慧金刚', '文殊金刚', '3', '2017-01-10', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('152', '宝慧金刚', '光明佛母', '1', '2017-01-10', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('153', '宝慧金刚', '上师心咒', '1', '2017-01-11', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('154', '宝慧金刚', '上师心咒', '5', '2017-01-20', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('155', '宝慧金刚', '大头', '16', '2017-01-20', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('156', '宝慧金刚', '大威德', '1', '2017-01-20', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('157', '宝慧金刚', '光明佛母', '1', '2017-01-20', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('158', '宝慧金刚', '财宝天王', '1', '2017-01-20', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('159', '宝慧金刚', '十福心咒', '3', '2017-01-20', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('160', '宝慧金刚', '莲师心咒', '1', '2017-01-20', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('161', '宝慧金刚', '金刚持心咒', '1', '2017-01-20', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('162', '宝慧金刚', '文殊金刚', '1', '2017-01-20', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('163', '宝慧金刚', '财宝金刚', '1', '2017-01-20', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('164', '宝慧金刚', '灯供', '111', '2017-01-20', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('165', '宝慧金刚', '上师心咒', '3', '2017-01-21', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('166', '宝慧金刚', '大头', '108', '2017-01-21', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('167', '宝慧金刚', '大头', '9', '2017-01-22', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('168', '宝慧金刚', '上师心咒', '1', '2017-01-26', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('169', '宝慧金刚', '大威德', '1', '2017-01-26', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('170', '宝慧金刚', '光明佛母', '1', '2017-01-26', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('171', '宝慧金刚', '财宝天王', '1', '2017-01-26', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('172', '宝慧金刚', '十福心咒', '1', '2017-01-26', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('173', '宝慧金刚', '莲师心咒', '1', '2017-01-26', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('174', '宝慧金刚', '金刚持心咒', '1', '2017-01-26', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('175', '宝慧金刚', '文殊金刚', '1', '2017-01-26', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('176', '宝慧金刚', '九大金刚', '5', '2017-01-26', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('177', '宝慧金刚', '度母', '1', '2017-01-26', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('178', '宝慧金刚', '金刚持心咒', '1', '2017-01-26', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('179', '宝慧金刚', '大头', '3', '2017-01-26', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('180', '宝慧金刚', '上师心咒', '3', '2017-02-01', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('181', '宝慧金刚', '大威德', '3', '2017-02-01', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('182', '宝慧金刚', '十福心咒', '3', '2017-02-01', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('183', '宝慧金刚', '金刚持心咒', '3', '2017-02-01', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('184', '宝慧金刚', '文殊金刚', '3', '2017-02-01', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('185', '宝慧金刚', '财宝金刚', '3', '2017-02-01', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('186', '大日莲花', '上师心咒', '10', '2017-02-04', '48', '2');
INSERT INTO `bs_dongtai` VALUES ('187', '大日莲花', '灯供', '76', '2017-02-04', '48', '2');
INSERT INTO `bs_dongtai` VALUES ('188', '大日莲花', '灯供', '760', '2017-02-04', '48', '2');
INSERT INTO `bs_dongtai` VALUES ('189', '宝慧金刚', '上师心咒', '10', '2017-02-11', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('190', '宝慧金刚', '财宝天王', '10', '2017-02-11', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('191', '宝慧金刚', '十福心咒', '3', '2017-02-11', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('192', '宝慧金刚', '上师心咒', '10', '2017-02-17', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('193', '宝慧金刚', '大威德', '10', '2017-02-17', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('194', '宝慧金刚', '财宝天王', '10', '2017-02-17', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('195', '宝慧金刚', '十福心咒', '10', '2017-02-17', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('196', '宝慧金刚', '文殊金刚', '10', '2017-02-17', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('197', '宝慧金刚', '度母', '1', '2017-02-17', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('198', '宝慧金刚', '九大金刚', '1', '2017-02-17', '49', '2');
INSERT INTO `bs_dongtai` VALUES ('199', '管理员', '上师心咒', '23', '2017-02-26', '31', '2');

-- ----------------------------
-- Table structure for `bs_gonggao`
-- ----------------------------
DROP TABLE IF EXISTS `bs_gonggao`;
CREATE TABLE `bs_gonggao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bs_gonggao
-- ----------------------------
INSERT INTO `bs_gonggao` VALUES ('23', '还是世界');
INSERT INTO `bs_gonggao` VALUES ('24', '浑身解数');
INSERT INTO `bs_gonggao` VALUES ('25', '已更新修改头像功能(☆_☆)');
INSERT INTO `bs_gonggao` VALUES ('26', '帝洛巴千诺     帝洛巴千诺     帝洛巴千诺      帝洛巴千诺     帝洛巴千诺     帝洛巴千诺     帝洛巴千诺');

-- ----------------------------
-- Table structure for `bs_jing`
-- ----------------------------
DROP TABLE IF EXISTS `bs_jing`;
CREATE TABLE `bs_jing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `big_img` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bs_jing
-- ----------------------------
INSERT INTO `bs_jing` VALUES ('1', '上师心咒', 'Upload/2017-01-06/586f65da40912.png');
INSERT INTO `bs_jing` VALUES ('2', '百字明', 'Upload/2017-01-06/586f658436866.png');
INSERT INTO `bs_jing` VALUES ('3', '大头', 'Upload/2016-11-26/o.png');
INSERT INTO `bs_jing` VALUES ('4', '灯供', 'Upload/2017-01-06/586f66453c48d.png');
INSERT INTO `bs_jing` VALUES ('5', '大威德', 'Upload/2017-01-06/586f65f8eaa81.png');
INSERT INTO `bs_jing` VALUES ('6', '光明佛母', 'Upload/2017-01-06/586f65bf346f9.png');
INSERT INTO `bs_jing` VALUES ('7', '大日如来', 'Upload/2017-01-06/586f66341eb5a.png');
INSERT INTO `bs_jing` VALUES ('8', '财宝天王', 'Upload/2017-01-06/586f655e1a479.png');
INSERT INTO `bs_jing` VALUES ('9', '十福心咒', 'Upload/2017-01-06/586f6e6b36b60.png');
INSERT INTO `bs_jing` VALUES ('10', '莲师心咒', 'Upload/2017-01-06/586f6e7c00b07.png');
INSERT INTO `bs_jing` VALUES ('11', '金刚持心咒', 'Upload/2017-01-06/586f66247d14d.png');
INSERT INTO `bs_jing` VALUES ('12', '文殊金刚', 'Upload/2017-01-06/586f691e677bc.png');
INSERT INTO `bs_jing` VALUES ('13', '文殊心咒', 'Upload/2017-01-06/586f68e64f31b.png');
INSERT INTO `bs_jing` VALUES ('14', '九大金刚', 'Upload/2017-01-06/586f6813270d2.png');
INSERT INTO `bs_jing` VALUES ('15', '财宝金刚', 'Upload/2017-01-06/586f68fd77ca1.png');
INSERT INTO `bs_jing` VALUES ('16', '黄财神', 'Upload/2017-01-06/586f672c5f91a.png');
INSERT INTO `bs_jing` VALUES ('17', '度母', 'Upload/2017-01-06/586f666e7d25c.png');
INSERT INTO `bs_jing` VALUES ('18', '四归一', 'Upload/2017-01-06/586f6828d81a1.png');
INSERT INTO `bs_jing` VALUES ('19', '供', 'Upload/2017-01-06/586f694c72a5c.png');

-- ----------------------------
-- Table structure for `bs_level`
-- ----------------------------
DROP TABLE IF EXISTS `bs_level`;
CREATE TABLE `bs_level` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bs_level
-- ----------------------------
INSERT INTO `bs_level` VALUES ('1', '宝冠');
INSERT INTO `bs_level` VALUES ('2', '宝石');
INSERT INTO `bs_level` VALUES ('3', '黄金');
INSERT INTO `bs_level` VALUES ('4', '花冠');
INSERT INTO `bs_level` VALUES ('5', '新密');
INSERT INTO `bs_level` VALUES ('6', '新人');

-- ----------------------------
-- Table structure for `bs_team`
-- ----------------------------
DROP TABLE IF EXISTS `bs_team`;
CREATE TABLE `bs_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bs_team
-- ----------------------------
INSERT INTO `bs_team` VALUES ('1', '坛城');
INSERT INTO `bs_team` VALUES ('2', '普眼');

-- ----------------------------
-- Table structure for `bs_user`
-- ----------------------------
DROP TABLE IF EXISTS `bs_user`;
CREATE TABLE `bs_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `pwd` varchar(255) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `level_id` int(11) DEFAULT '6',
  `team_id` text,
  `jianduan` int(11) DEFAULT '0',
  `lastDaytime` text,
  `newDaytime` text,
  `img` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bs_user
-- ----------------------------
INSERT INTO `bs_user` VALUES ('16', '象鼻王', '111595', '188', '男', '1', '2', '0', '', '', 'upload/2017/01/01/14832568749889.png');
INSERT INTO `bs_user` VALUES ('31', '管理员', '123', '18804054602', '男', '1', '2', '0', '2017-02-26', '', 'upload/2017/01/04/14835047641784.png');
INSERT INTO `bs_user` VALUES ('48', '大日莲花', '123456', '18524442421', '女', '3', '2', '28', '2017-02-04', '2017-02-04', 'upload/2017/01/03/14834526302689.jpg');
INSERT INTO `bs_user` VALUES ('49', '宝慧金刚', '111595', '12345678901', '男', '3', '2', '30', '2017-02-17', '2017-02-17', 'upload/2017/01/01/14832574937082.png');
INSERT INTO `bs_user` VALUES ('52', '恒喜智', 'qi123', '15640507795', '男', '3', '2', '0', null, null, 'upload/2017/01/01/14832388875566.jpg');
INSERT INTO `bs_user` VALUES ('53', '羯摩金刚', '201501', '13591642821', '男', '3', '2', '0', null, null, null);
INSERT INTO `bs_user` VALUES ('54', '幸运金刚', 'liuyang123', '18640241058', '男', '6', '2', '2', '2017-01-08', '2017-01-05', null);
INSERT INTO `bs_user` VALUES ('55', '悦意莲花', '870516', '13704024253', '女', '6', '2', '0', null, null, null);

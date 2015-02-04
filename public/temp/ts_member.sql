/*
 Navicat Premium Data Transfer

 Source Server         : VM
 Source Server Type    : MySQL
 Source Server Version : 50619
 Source Host           : 127.0.0.1
 Source Database       : tscmf

 Target Server Type    : MySQL
 Target Server Version : 50619
 File Encoding         : utf-8

 Date: 02/04/2015 23:48:40 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `ts_member`
-- ----------------------------
DROP TABLE IF EXISTS `ts_member`;
CREATE TABLE `ts_member` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(200) DEFAULT NULL COMMENT '用户名',
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(30) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL COMMENT '密码',
  `avatar` varchar(200) DEFAULT NULL COMMENT '头像地址',
  `type` enum('2','1') DEFAULT NULL COMMENT '用户类型(1求职者，2企业HR)',
  `status` enum('4','3','2','1','0') DEFAULT '0' COMMENT '用户状态（0未激活，1正常，2禁言，3禁止访问、4删除）',
  `created_at` timestamp NULL DEFAULT NULL COMMENT '创建时间',
  `updated_at` timestamp NULL DEFAULT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `ts_member`
-- ----------------------------
BEGIN;
INSERT INTO `ts_member` VALUES ('1', 'trueinfo', 'justin.bj@msn.com', '18500190250', '$2y$10$Q4mmuxd8BIGmugVV9yELKeTMeRBK2fVNNJ296l.8U7YX3OQfG8P4y', '', '1', '1', null, '2014-12-22 09:11:32'), ('2', 'justin', 'goooder@gmail.com', '13811109684', '$2y$10$F3/JX6jDgwsX3gBY9Cfdz..5BTK9gUNwCQQIE4L35ZCDfm1gvw2/K', '/uploads/201412/20141223095955_Tulips.jpg', '2', '1', '2014-12-22 09:08:44', '2014-12-23 10:00:44');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;

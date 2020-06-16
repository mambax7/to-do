-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `list`;
CREATE TABLE `list` (
  `sn` mediumint(9) unsigned NOT NULL AUTO_INCREMENT COMMENT '流水號',
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '待辦事項',
  `directions` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '描述',
  `end` date NOT NULL COMMENT '到期日',
  `priority` enum('高','中','低') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '優先順序',
  `assign` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '指派對象',
  `done` enum('0','1') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '是否完成',
  `create_time` datetime NOT NULL COMMENT '建立時間',
  `update_time` datetime NOT NULL COMMENT '最後更新時間',
  PRIMARY KEY (`sn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 2020-06-16 06:50:50

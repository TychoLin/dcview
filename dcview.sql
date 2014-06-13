-- Adminer 4.1.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `dcview`;
CREATE DATABASE `dcview` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `dcview`;

DROP TABLE IF EXISTS `tblArticle`;
CREATE TABLE `tblArticle` (
  `article_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `article_title` varchar(128) DEFAULT NULL,
  `article_content` text,
  `article_sh_trade_status` int(10) unsigned NOT NULL,
  `article_sh_price` int(10) unsigned NOT NULL,
  `article_sh_area` int(10) unsigned NOT NULL,
  `article_create_time` datetime NOT NULL,
  `article_update_time` datetime NOT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `tblReply`;
CREATE TABLE `tblReply` (
  `reply_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `reply_content` text NOT NULL,
  `reply_create_time` datetime NOT NULL,
  `reply_update_time` datetime NOT NULL,
  PRIMARY KEY (`reply_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 2014-06-13 09:37:48

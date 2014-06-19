-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.17-1~dotdeb.1 - (Debian)
-- Server OS:                    debian-linux-gnu
-- HeidiSQL Version:             8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table dcview.tblArticle
DROP TABLE IF EXISTS `tblArticle`;
CREATE TABLE IF NOT EXISTS `tblArticle` (
  `article_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `sh_sub_category_id` int(10) unsigned NOT NULL,
  `article_title` varchar(128) DEFAULT NULL,
  `article_content` text,
  `article_sh_trade_status` int(10) unsigned NOT NULL,
  `article_sh_price` int(10) unsigned NOT NULL,
  `article_sh_area` int(10) unsigned NOT NULL,
  `article_email` varchar(254) DEFAULT NULL,
  `article_phone_number` char(10) DEFAULT NULL,
  `article_img_url1` varchar(2000) DEFAULT NULL,
  `article_img_url2` varchar(2000) DEFAULT NULL,
  `article_status` int(10) unsigned NOT NULL DEFAULT '1' COMMENT '1: normal;2: report',
  `article_create_time` datetime NOT NULL,
  `article_update_time` datetime NOT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8;

-- Dumping data for table dcview.tblArticle: ~101 rows (approximately)
DELETE FROM `tblArticle`;
/*!40000 ALTER TABLE `tblArticle` DISABLE KEYS */;
INSERT INTO `tblArticle` (`article_id`, `user_id`, `sh_sub_category_id`, `article_title`, `article_content`, `article_sh_trade_status`, `article_sh_price`, `article_sh_area`, `article_email`, `article_phone_number`, `article_img_url1`, `article_img_url2`, `article_status`, `article_create_time`, `article_update_time`) VALUES
	(1, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2011-01-14 00:00:00', '2011-07-06 00:00:00'),
	(2, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2010-09-11 00:00:00', '2010-03-06 00:00:00'),
	(3, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2011-08-17 00:00:00', '2011-06-08 00:00:00'),
	(4, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2013-04-14 00:00:00', '2013-03-11 00:00:00'),
	(5, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2013-11-11 00:00:00', '2013-11-03 00:00:00'),
	(6, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2012-10-08 00:00:00', '2012-10-12 00:00:00'),
	(7, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2011-03-18 00:00:00', '2011-01-07 00:00:00'),
	(8, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2011-11-03 00:00:00', '2013-01-11 00:00:00'),
	(9, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2011-11-16 00:00:00', '2011-07-07 00:00:00'),
	(10, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2011-04-19 00:00:00', '2012-07-13 00:00:00'),
	(11, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2011-05-09 00:00:00', '2012-10-14 00:00:00'),
	(12, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2013-09-15 00:00:00', '2012-06-14 00:00:00'),
	(13, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2011-12-07 00:00:00', '2011-05-01 00:00:00'),
	(14, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2010-07-11 00:00:00', '2012-12-05 00:00:00'),
	(15, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2012-04-03 00:00:00', '2010-11-09 00:00:00'),
	(16, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2012-02-12 00:00:00', '2011-09-09 00:00:00'),
	(17, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2011-09-05 00:00:00', '2011-05-08 00:00:00'),
	(18, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2012-03-01 00:00:00', '2012-07-20 00:00:00'),
	(19, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2011-01-14 00:00:00', '2013-10-02 00:00:00'),
	(20, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2013-03-16 00:00:00', '2011-02-08 00:00:00'),
	(21, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2010-03-05 00:00:00', '2013-05-15 00:00:00'),
	(22, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2012-07-03 00:00:00', '2013-02-03 00:00:00'),
	(23, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2013-09-03 00:00:00', '2011-10-20 00:00:00'),
	(24, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2012-04-05 00:00:00', '2010-03-08 00:00:00'),
	(25, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2011-02-17 00:00:00', '2011-03-08 00:00:00'),
	(26, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2012-01-18 00:00:00', '2011-11-01 00:00:00'),
	(27, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2011-07-03 00:00:00', '2011-08-04 00:00:00'),
	(28, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2013-05-04 00:00:00', '2011-06-15 00:00:00'),
	(29, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2011-12-08 00:00:00', '2012-08-04 00:00:00'),
	(30, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2013-09-06 00:00:00', '2011-08-14 00:00:00'),
	(31, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2013-09-05 00:00:00', '2013-11-07 00:00:00'),
	(32, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2012-02-20 00:00:00', '2011-07-08 00:00:00'),
	(33, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2013-11-20 00:00:00', '2010-01-14 00:00:00'),
	(34, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2010-04-06 00:00:00', '2010-05-20 00:00:00'),
	(35, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2012-07-04 00:00:00', '2012-03-16 00:00:00'),
	(36, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2013-02-20 00:00:00', '2013-06-06 00:00:00'),
	(37, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2010-12-12 00:00:00', '2013-11-09 00:00:00'),
	(38, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2012-01-08 00:00:00', '2010-10-08 00:00:00'),
	(39, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2013-04-01 00:00:00', '2011-08-02 00:00:00'),
	(40, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2013-08-02 00:00:00', '2011-03-18 00:00:00'),
	(41, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2010-01-19 00:00:00', '2010-07-08 00:00:00'),
	(42, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2013-07-12 00:00:00', '2013-06-08 00:00:00'),
	(43, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2011-10-17 00:00:00', '2013-08-01 00:00:00'),
	(44, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2013-03-16 00:00:00', '2010-08-07 00:00:00'),
	(45, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2010-04-16 00:00:00', '2011-09-04 00:00:00'),
	(46, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2011-10-18 00:00:00', '2011-10-04 00:00:00'),
	(47, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2010-12-05 00:00:00', '2012-02-11 00:00:00'),
	(48, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2010-05-06 00:00:00', '2010-12-13 00:00:00'),
	(49, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2010-09-15 00:00:00', '2012-03-11 00:00:00'),
	(50, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2010-05-11 00:00:00', '2011-01-11 00:00:00'),
	(51, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2011-06-08 00:00:00', '2013-05-02 00:00:00'),
	(52, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2013-10-09 00:00:00', '2013-07-03 00:00:00'),
	(53, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2013-05-12 00:00:00', '2010-04-12 00:00:00'),
	(54, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2011-06-01 00:00:00', '2013-10-01 00:00:00'),
	(55, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2011-01-10 00:00:00', '2010-04-19 00:00:00'),
	(56, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2011-09-20 00:00:00', '2010-07-04 00:00:00'),
	(57, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2010-06-04 00:00:00', '2012-01-16 00:00:00'),
	(58, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2010-10-17 00:00:00', '2011-10-14 00:00:00'),
	(59, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2011-09-14 00:00:00', '2011-04-07 00:00:00'),
	(60, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2010-11-14 00:00:00', '2012-04-05 00:00:00'),
	(61, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2011-09-16 00:00:00', '2012-04-15 00:00:00'),
	(62, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2010-12-08 00:00:00', '2010-01-02 00:00:00'),
	(63, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2013-09-12 00:00:00', '2010-03-05 00:00:00'),
	(64, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2013-05-08 00:00:00', '2013-09-13 00:00:00'),
	(65, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2012-08-12 00:00:00', '2013-11-19 00:00:00'),
	(66, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2013-03-11 00:00:00', '2010-10-20 00:00:00'),
	(67, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2012-05-08 00:00:00', '2010-09-09 00:00:00'),
	(68, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2013-04-09 00:00:00', '2011-04-05 00:00:00'),
	(69, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2013-06-01 00:00:00', '2010-05-15 00:00:00'),
	(70, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2010-03-16 00:00:00', '2012-10-08 00:00:00'),
	(71, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2012-08-13 00:00:00', '2013-02-06 00:00:00'),
	(72, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2011-05-06 00:00:00', '2010-03-20 00:00:00'),
	(73, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2012-10-17 00:00:00', '2012-05-12 00:00:00'),
	(74, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2012-05-04 00:00:00', '2012-07-01 00:00:00'),
	(75, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2011-08-17 00:00:00', '2012-04-01 00:00:00'),
	(76, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2013-07-16 00:00:00', '2011-12-05 00:00:00'),
	(77, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2013-06-14 00:00:00', '2011-07-15 00:00:00'),
	(78, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2010-03-18 00:00:00', '2011-12-06 00:00:00'),
	(79, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2010-11-05 00:00:00', '2010-07-20 00:00:00'),
	(80, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2010-11-17 00:00:00', '2012-09-02 00:00:00'),
	(81, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2012-10-06 00:00:00', '2011-02-11 00:00:00'),
	(82, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2013-04-06 00:00:00', '2010-02-06 00:00:00'),
	(83, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2010-02-07 00:00:00', '2011-11-07 00:00:00'),
	(84, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2010-06-10 00:00:00', '2012-09-09 00:00:00'),
	(85, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2012-10-13 00:00:00', '2011-11-17 00:00:00'),
	(86, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2011-10-06 00:00:00', '2012-08-12 00:00:00'),
	(87, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2011-03-19 00:00:00', '2010-06-18 00:00:00'),
	(88, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2013-11-17 00:00:00', '2013-05-02 00:00:00'),
	(89, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2013-06-06 00:00:00', '2011-10-19 00:00:00'),
	(90, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2010-08-10 00:00:00', '2011-06-06 00:00:00'),
	(91, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2012-05-20 00:00:00', '2013-12-05 00:00:00'),
	(92, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2012-05-17 00:00:00', '2011-10-09 00:00:00'),
	(93, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2012-03-10 00:00:00', '2012-12-16 00:00:00'),
	(94, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2012-08-05 00:00:00', '2010-10-17 00:00:00'),
	(95, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2011-10-17 00:00:00', '2012-07-17 00:00:00'),
	(96, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2011-09-07 00:00:00', '2012-03-03 00:00:00'),
	(97, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2011-08-16 00:00:00', '2012-02-10 00:00:00'),
	(98, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2010-08-17 00:00:00', '2012-11-11 00:00:00'),
	(99, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2012-07-08 00:00:00', '2011-02-18 00:00:00'),
	(100, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, 1, '2013-07-03 00:00:00', '2010-05-02 00:00:00'),
	(101, 1, 2, 'test', 'test', 2, 100000, 3, NULL, NULL, NULL, NULL, 1, '2014-06-17 11:29:10', '2014-06-17 11:29:10'),
	(103, 1, 1, '中文測試', '中文測試', 1, 0, 1, '', '', '', '', 1, '2014-06-19 16:14:29', '2014-06-19 16:14:29');
/*!40000 ALTER TABLE `tblArticle` ENABLE KEYS */;


-- Dumping structure for table dcview.tblReply
DROP TABLE IF EXISTS `tblReply`;
CREATE TABLE IF NOT EXISTS `tblReply` (
  `reply_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `reply_content` text NOT NULL,
  `reply_create_time` datetime NOT NULL,
  `reply_update_time` datetime NOT NULL,
  PRIMARY KEY (`reply_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table dcview.tblReply: ~0 rows (approximately)
DELETE FROM `tblReply`;
/*!40000 ALTER TABLE `tblReply` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblReply` ENABLE KEYS */;


-- Dumping structure for table dcview.tblSHMainCategory
DROP TABLE IF EXISTS `tblSHMainCategory`;
CREATE TABLE IF NOT EXISTS `tblSHMainCategory` (
  `sh_main_category_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sh_main_category_name` varchar(36) NOT NULL,
  `sh_main_category_rank` int(10) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`sh_main_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table dcview.tblSHMainCategory: ~2 rows (approximately)
DELETE FROM `tblSHMainCategory`;
/*!40000 ALTER TABLE `tblSHMainCategory` DISABLE KEYS */;
INSERT INTO `tblSHMainCategory` (`sh_main_category_id`, `sh_main_category_name`, `sh_main_category_rank`) VALUES
	(1, '數位相機', 1),
	(2, '手機相關', 1),
	(3, '其他', 1);
/*!40000 ALTER TABLE `tblSHMainCategory` ENABLE KEYS */;


-- Dumping structure for table dcview.tblSHSubCategory
DROP TABLE IF EXISTS `tblSHSubCategory`;
CREATE TABLE IF NOT EXISTS `tblSHSubCategory` (
  `sh_sub_category_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sh_main_category_id` int(10) unsigned NOT NULL,
  `sh_sub_category_name` varchar(36) NOT NULL,
  `sh_sub_category_rank` int(10) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`sh_sub_category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

-- Dumping data for table dcview.tblSHSubCategory: ~56 rows (approximately)
DELETE FROM `tblSHSubCategory`;
/*!40000 ALTER TABLE `tblSHSubCategory` DISABLE KEYS */;
INSERT INTO `tblSHSubCategory` (`sh_sub_category_id`, `sh_main_category_id`, `sh_sub_category_name`, `sh_sub_category_rank`) VALUES
	(1, 1, 'Canon', 1),
	(2, 1, 'Canon SLR', 1),
	(3, 1, 'Fujifilm', 1),
	(4, 1, 'Fujifilm SLR', 1),
	(5, 1, 'Konica Minolta', 1),
	(6, 1, 'Konica Minolta SLR', 1),
	(7, 1, 'Nikon', 1),
	(8, 1, 'Nikon SLR', 1),
	(9, 1, 'Olympus', 1),
	(10, 1, 'Olympus SLR', 1),
	(11, 1, 'Pentax', 1),
	(12, 1, 'Pentax SLR', 1),
	(13, 1, 'Sony', 1),
	(14, 1, 'Sony DSLR', 1),
	(15, 1, 'BenQ', 1),
	(16, 1, 'Casio', 1),
	(17, 1, 'Contax', 1),
	(18, 1, 'Epson', 1),
	(19, 1, 'GE', 1),
	(20, 1, 'Kodak', 1),
	(21, 1, 'Kyocera', 1),
	(22, 1, 'Leica', 1),
	(23, 1, 'Panasonic', 1),
	(24, 1, 'Panasonic DSLR', 1),
	(25, 1, 'Premier', 1),
	(26, 1, 'Ricoh', 1),
	(27, 1, 'Toshiba', 1),
	(28, 1, 'Samsung', 1),
	(29, 1, 'Sanyo', 1),
	(30, 1, 'Sigma', 1),
	(31, 1, '傳統相機', 1),
	(32, 1, '其他相機', 1),
	(33, 3, '鏡頭', 1),
	(34, 3, '列印設備', 1),
	(35, 3, '閃光燈', 1),
	(36, 3, '記憶/儲存', 1),
	(37, 3, '電池', 1),
	(38, 3, '腳架', 1),
	(39, 3, '電源充電', 1),
	(40, 3, '背包皮套', 1),
	(41, 3, '讀卡機', 1),
	(42, 2, 'Acer', 1),
	(43, 2, 'Alcatel', 1),
	(44, 2, 'Apple', 1),
	(45, 2, 'ASUS', 1),
	(46, 2, 'bara', 1),
	(47, 2, 'BenQ', 1),
	(48, 2, 'BungBungame', 1),
	(49, 2, 'FET', 1),
	(50, 2, 'HTC', 1),
	(51, 2, 'HUAWEI', 1),
	(52, 2, 'LG', 1),
	(53, 2, 'Samsung', 1),
	(54, 2, 'SONY', 1),
	(55, 2, '小米', 1),
	(56, 2, '其他', 1);
/*!40000 ALTER TABLE `tblSHSubCategory` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

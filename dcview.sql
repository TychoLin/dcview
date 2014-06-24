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
  `article_create_time` datetime NOT NULL,
  `article_update_time` datetime NOT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=utf8;

-- Dumping data for table dcview.tblArticle: ~105 rows (approximately)
DELETE FROM `tblArticle`;
/*!40000 ALTER TABLE `tblArticle` DISABLE KEYS */;
INSERT INTO `tblArticle` (`article_id`, `user_id`, `sh_sub_category_id`, `article_title`, `article_content`, `article_sh_trade_status`, `article_sh_price`, `article_sh_area`, `article_email`, `article_phone_number`, `article_img_url1`, `article_img_url2`, `article_create_time`, `article_update_time`) VALUES
	(1, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2011-01-14 00:00:00', '2011-07-06 00:00:00'),
	(2, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2010-09-11 00:00:00', '2010-03-06 00:00:00'),
	(3, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2011-08-17 00:00:00', '2011-06-08 00:00:00'),
	(4, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2013-04-14 00:00:00', '2013-03-11 00:00:00'),
	(5, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2013-11-11 00:00:00', '2013-11-03 00:00:00'),
	(6, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2012-10-08 00:00:00', '2012-10-12 00:00:00'),
	(7, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2011-03-18 00:00:00', '2011-01-07 00:00:00'),
	(8, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2011-11-03 00:00:00', '2013-01-11 00:00:00'),
	(9, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2011-11-16 00:00:00', '2011-07-07 00:00:00'),
	(10, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2011-04-19 00:00:00', '2012-07-13 00:00:00'),
	(11, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2011-05-09 00:00:00', '2012-10-14 00:00:00'),
	(12, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2013-09-15 00:00:00', '2012-06-14 00:00:00'),
	(13, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2011-12-07 00:00:00', '2011-05-01 00:00:00'),
	(14, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2010-07-11 00:00:00', '2012-12-05 00:00:00'),
	(15, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2012-04-03 00:00:00', '2010-11-09 00:00:00'),
	(16, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2012-02-12 00:00:00', '2011-09-09 00:00:00'),
	(17, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2011-09-05 00:00:00', '2011-05-08 00:00:00'),
	(18, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2012-03-01 00:00:00', '2012-07-20 00:00:00'),
	(19, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2011-01-14 00:00:00', '2013-10-02 00:00:00'),
	(20, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2013-03-16 00:00:00', '2011-02-08 00:00:00'),
	(21, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2010-03-05 00:00:00', '2013-05-15 00:00:00'),
	(22, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2012-07-03 00:00:00', '2013-02-03 00:00:00'),
	(23, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2013-09-03 00:00:00', '2011-10-20 00:00:00'),
	(24, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2012-04-05 00:00:00', '2010-03-08 00:00:00'),
	(25, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2011-02-17 00:00:00', '2011-03-08 00:00:00'),
	(26, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2012-01-18 00:00:00', '2011-11-01 00:00:00'),
	(27, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2011-07-03 00:00:00', '2011-08-04 00:00:00'),
	(28, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2013-05-04 00:00:00', '2011-06-15 00:00:00'),
	(29, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2011-12-08 00:00:00', '2012-08-04 00:00:00'),
	(30, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2013-09-06 00:00:00', '2011-08-14 00:00:00'),
	(31, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2013-09-05 00:00:00', '2013-11-07 00:00:00'),
	(32, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2012-02-20 00:00:00', '2011-07-08 00:00:00'),
	(33, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2013-11-20 00:00:00', '2010-01-14 00:00:00'),
	(34, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2010-04-06 00:00:00', '2010-05-20 00:00:00'),
	(35, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2012-07-04 00:00:00', '2012-03-16 00:00:00'),
	(36, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2013-02-20 00:00:00', '2013-06-06 00:00:00'),
	(37, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2010-12-12 00:00:00', '2013-11-09 00:00:00'),
	(38, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2012-01-08 00:00:00', '2010-10-08 00:00:00'),
	(39, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2013-04-01 00:00:00', '2011-08-02 00:00:00'),
	(40, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2013-08-02 00:00:00', '2011-03-18 00:00:00'),
	(41, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2010-01-19 00:00:00', '2010-07-08 00:00:00'),
	(42, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2013-07-12 00:00:00', '2013-06-08 00:00:00'),
	(43, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2011-10-17 00:00:00', '2013-08-01 00:00:00'),
	(44, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2013-03-16 00:00:00', '2010-08-07 00:00:00'),
	(45, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2010-04-16 00:00:00', '2011-09-04 00:00:00'),
	(46, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2011-10-18 00:00:00', '2011-10-04 00:00:00'),
	(47, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2010-12-05 00:00:00', '2012-02-11 00:00:00'),
	(48, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2010-05-06 00:00:00', '2010-12-13 00:00:00'),
	(49, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2010-09-15 00:00:00', '2012-03-11 00:00:00'),
	(50, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2010-05-11 00:00:00', '2011-01-11 00:00:00'),
	(51, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2011-06-08 00:00:00', '2013-05-02 00:00:00'),
	(52, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2013-10-09 00:00:00', '2013-07-03 00:00:00'),
	(53, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2013-05-12 00:00:00', '2010-04-12 00:00:00'),
	(54, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2011-06-01 00:00:00', '2013-10-01 00:00:00'),
	(55, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2011-01-10 00:00:00', '2010-04-19 00:00:00'),
	(56, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2011-09-20 00:00:00', '2010-07-04 00:00:00'),
	(57, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2010-06-04 00:00:00', '2012-01-16 00:00:00'),
	(58, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2010-10-17 00:00:00', '2011-10-14 00:00:00'),
	(59, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2011-09-14 00:00:00', '2011-04-07 00:00:00'),
	(60, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2010-11-14 00:00:00', '2012-04-05 00:00:00'),
	(61, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2011-09-16 00:00:00', '2012-04-15 00:00:00'),
	(62, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2010-12-08 00:00:00', '2010-01-02 00:00:00'),
	(63, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2013-09-12 00:00:00', '2010-03-05 00:00:00'),
	(64, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2013-05-08 00:00:00', '2013-09-13 00:00:00'),
	(65, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2012-08-12 00:00:00', '2013-11-19 00:00:00'),
	(66, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2013-03-11 00:00:00', '2010-10-20 00:00:00'),
	(67, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2012-05-08 00:00:00', '2010-09-09 00:00:00'),
	(68, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2013-04-09 00:00:00', '2011-04-05 00:00:00'),
	(69, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2013-06-01 00:00:00', '2010-05-15 00:00:00'),
	(70, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2010-03-16 00:00:00', '2012-10-08 00:00:00'),
	(71, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2012-08-13 00:00:00', '2013-02-06 00:00:00'),
	(72, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2011-05-06 00:00:00', '2010-03-20 00:00:00'),
	(73, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2012-10-17 00:00:00', '2012-05-12 00:00:00'),
	(74, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2012-05-04 00:00:00', '2012-07-01 00:00:00'),
	(75, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2011-08-17 00:00:00', '2012-04-01 00:00:00'),
	(76, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2013-07-16 00:00:00', '2011-12-05 00:00:00'),
	(77, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2013-06-14 00:00:00', '2011-07-15 00:00:00'),
	(78, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2010-03-18 00:00:00', '2011-12-06 00:00:00'),
	(79, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2010-11-05 00:00:00', '2010-07-20 00:00:00'),
	(80, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2010-11-17 00:00:00', '2012-09-02 00:00:00'),
	(81, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2012-10-06 00:00:00', '2011-02-11 00:00:00'),
	(82, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2013-04-06 00:00:00', '2010-02-06 00:00:00'),
	(83, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2010-02-07 00:00:00', '2011-11-07 00:00:00'),
	(84, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2010-06-10 00:00:00', '2012-09-09 00:00:00'),
	(85, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2012-10-13 00:00:00', '2011-11-17 00:00:00'),
	(86, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2011-10-06 00:00:00', '2012-08-12 00:00:00'),
	(87, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2011-03-19 00:00:00', '2010-06-18 00:00:00'),
	(88, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2013-11-17 00:00:00', '2013-05-02 00:00:00'),
	(89, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2013-06-06 00:00:00', '2011-10-19 00:00:00'),
	(90, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2010-08-10 00:00:00', '2011-06-06 00:00:00'),
	(91, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2012-05-20 00:00:00', '2013-12-05 00:00:00'),
	(92, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2012-05-17 00:00:00', '2011-10-09 00:00:00'),
	(93, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2012-03-10 00:00:00', '2012-12-16 00:00:00'),
	(94, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2012-08-05 00:00:00', '2010-10-17 00:00:00'),
	(95, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2011-10-17 00:00:00', '2012-07-17 00:00:00'),
	(96, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2011-09-07 00:00:00', '2012-03-03 00:00:00'),
	(97, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2011-08-16 00:00:00', '2012-02-10 00:00:00'),
	(98, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2010-08-17 00:00:00', '2012-11-11 00:00:00'),
	(99, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2012-07-08 00:00:00', '2011-02-18 00:00:00'),
	(100, 1, 1, 'this is article title', 'this is article content', 1, 10000, 1, NULL, NULL, NULL, NULL, '2013-07-03 00:00:00', '2010-05-02 00:00:00'),
	(101, 1, 2, 'test', 'test', 2, 100000, 3, NULL, NULL, NULL, NULL, '2014-06-17 11:29:10', '2014-06-17 11:29:10'),
	(103, 1, 1, '中文測試', '中文測試', 1, 0, 1, '', '', '', '', '2014-06-19 16:14:29', '2014-06-19 16:14:29'),
	(104, 1, 1, '本版純屬交流', '本版純屬交流，不歡迎打廣告(含已經刊登於其他拍賣者) 同物品一週內若重複刊登，我們將會全數刪除! 請詳述您的物件內容，否則將予以刪除!', 1, 999999999, 1, '', '', '', '', '2014-06-20 10:55:04', '2014-06-20 10:55:04'),
	(105, 1, 10, '&lt;span&gt;test&lt;/span&gt;', '本版純屬交流，不歡迎打廣告(含已經刊登於其他拍賣者) 同物品一週內若重複刊登，我們將會全數刪除! 請詳述您的物件內容，否則將予以刪除!', 2, 888888, 2, 'test1@example.com', '', '', '', '2014-06-20 12:06:01', '2014-06-20 12:06:01'),
	(106, 1, 1, 'android flash rom', 'http://kakasi5555.pixnet.net/blog/post/46482206-htc-desire-%E5%BF%AB%E9%80%9F%E5%88%B7rom%E6%95%99%E5%AD%B8-(%E8%A7%A3%E6%B1%BA%E5%85%A7%E5%AD%98%E4%B8%8D%E8%B6%B3%E5%95%8F%E9%A1%8C)\r\n\r\nhttp://forum.xda-developers.com/showthread.php?t=2070704&amp;highlight=lock+screen\r\n\r\n\r\nwtf', 1, 777777, 1, '', '', '', '', '2014-06-20 14:55:44', '2014-06-24 15:23:07');
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
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8;

-- Dumping data for table dcview.tblReply: ~103 rows (approximately)
DELETE FROM `tblReply`;
/*!40000 ALTER TABLE `tblReply` DISABLE KEYS */;
INSERT INTO `tblReply` (`reply_id`, `article_id`, `user_id`, `reply_content`, `reply_create_time`, `reply_update_time`) VALUES
	(1, 17, 1, '我有興趣', '2012-03-05 00:00:00', '2010-02-13 00:00:00'),
	(2, 9, 1, '我有興趣', '2012-06-10 00:00:00', '2011-12-20 00:00:00'),
	(3, 2, 1, '我有興趣', '2010-01-04 00:00:00', '2010-04-09 00:00:00'),
	(4, 12, 1, '我有興趣', '2012-12-01 00:00:00', '2010-04-14 00:00:00'),
	(5, 8, 1, '我有興趣', '2012-11-14 00:00:00', '2013-03-11 00:00:00'),
	(6, 14, 1, '我有興趣', '2013-03-09 00:00:00', '2013-08-17 00:00:00'),
	(7, 4, 1, '我有興趣', '2013-05-17 00:00:00', '2011-04-16 00:00:00'),
	(8, 13, 1, '我有興趣', '2011-05-05 00:00:00', '2013-05-01 00:00:00'),
	(9, 4, 1, '我有興趣', '2012-05-16 00:00:00', '2013-05-07 00:00:00'),
	(10, 8, 1, '我有興趣', '2010-09-04 00:00:00', '2013-10-06 00:00:00'),
	(11, 11, 1, '我有興趣', '2013-10-11 00:00:00', '2010-04-03 00:00:00'),
	(12, 1, 1, '我有興趣', '2013-07-01 00:00:00', '2010-10-02 00:00:00'),
	(13, 15, 1, '我有興趣', '2011-01-06 00:00:00', '2010-10-11 00:00:00'),
	(14, 7, 1, '我有興趣', '2012-07-02 00:00:00', '2012-12-01 00:00:00'),
	(15, 16, 1, '我有興趣', '2013-11-10 00:00:00', '2011-08-12 00:00:00'),
	(16, 18, 1, '我有興趣', '2013-07-14 00:00:00', '2010-08-08 00:00:00'),
	(17, 13, 1, '我有興趣', '2010-02-18 00:00:00', '2011-08-19 00:00:00'),
	(18, 11, 1, '我有興趣', '2013-07-12 00:00:00', '2012-06-20 00:00:00'),
	(19, 18, 1, '我有興趣', '2011-04-09 00:00:00', '2011-10-07 00:00:00'),
	(20, 10, 1, '我有興趣', '2012-11-15 00:00:00', '2010-07-15 00:00:00'),
	(21, 2, 1, '我有興趣', '2013-09-09 00:00:00', '2012-06-09 00:00:00'),
	(22, 9, 1, '我有興趣', '2011-05-09 00:00:00', '2012-02-05 00:00:00'),
	(23, 19, 1, '我有興趣', '2013-08-04 00:00:00', '2013-01-06 00:00:00'),
	(24, 5, 1, '我有興趣', '2010-02-06 00:00:00', '2013-04-19 00:00:00'),
	(25, 15, 1, '我有興趣', '2010-11-06 00:00:00', '2010-02-16 00:00:00'),
	(26, 14, 1, '我有興趣', '2013-05-06 00:00:00', '2010-05-08 00:00:00'),
	(27, 10, 1, '我有興趣', '2011-09-05 00:00:00', '2012-06-09 00:00:00'),
	(28, 13, 1, '我有興趣', '2011-03-19 00:00:00', '2010-05-04 00:00:00'),
	(29, 19, 1, '我有興趣', '2013-07-04 00:00:00', '2010-12-02 00:00:00'),
	(30, 6, 1, '我有興趣', '2010-09-12 00:00:00', '2012-09-19 00:00:00'),
	(31, 12, 1, '我有興趣', '2010-09-18 00:00:00', '2012-01-02 00:00:00'),
	(32, 11, 1, '我有興趣', '2010-07-20 00:00:00', '2012-09-11 00:00:00'),
	(33, 4, 1, '我有興趣', '2011-12-15 00:00:00', '2010-03-02 00:00:00'),
	(34, 12, 1, '我有興趣', '2010-11-13 00:00:00', '2013-09-06 00:00:00'),
	(35, 2, 1, '我有興趣', '2012-06-05 00:00:00', '2012-12-18 00:00:00'),
	(36, 17, 1, '我有興趣', '2012-01-13 00:00:00', '2012-05-20 00:00:00'),
	(37, 18, 1, '我有興趣', '2012-05-18 00:00:00', '2011-06-13 00:00:00'),
	(38, 3, 1, '我有興趣', '2011-11-10 00:00:00', '2010-11-19 00:00:00'),
	(39, 16, 1, '我有興趣', '2010-06-18 00:00:00', '2012-08-15 00:00:00'),
	(40, 11, 1, '我有興趣', '2012-02-08 00:00:00', '2012-05-05 00:00:00'),
	(41, 12, 1, '我有興趣', '2013-05-02 00:00:00', '2012-04-07 00:00:00'),
	(42, 5, 1, '我有興趣', '2010-01-17 00:00:00', '2013-03-11 00:00:00'),
	(43, 6, 1, '我有興趣', '2010-11-15 00:00:00', '2013-06-16 00:00:00'),
	(44, 14, 1, '我有興趣', '2013-08-08 00:00:00', '2011-09-11 00:00:00'),
	(45, 9, 1, '我有興趣', '2011-12-20 00:00:00', '2011-09-02 00:00:00'),
	(46, 6, 1, '我有興趣', '2013-09-15 00:00:00', '2013-01-17 00:00:00'),
	(47, 15, 1, '我有興趣', '2011-11-20 00:00:00', '2012-12-14 00:00:00'),
	(48, 8, 1, '我有興趣', '2011-01-08 00:00:00', '2010-07-18 00:00:00'),
	(49, 16, 1, '我有興趣', '2010-11-14 00:00:00', '2010-02-04 00:00:00'),
	(50, 14, 1, '我有興趣', '2013-01-19 00:00:00', '2011-07-05 00:00:00'),
	(51, 1, 1, '我有興趣', '2013-08-17 00:00:00', '2012-09-19 00:00:00'),
	(52, 4, 1, '我有興趣', '2013-05-10 00:00:00', '2011-07-10 00:00:00'),
	(53, 18, 1, '我有興趣', '2011-08-05 00:00:00', '2013-12-07 00:00:00'),
	(54, 10, 1, '我有興趣', '2011-07-14 00:00:00', '2013-11-06 00:00:00'),
	(55, 14, 1, '我有興趣', '2012-11-05 00:00:00', '2013-10-20 00:00:00'),
	(56, 8, 1, '我有興趣', '2010-09-10 00:00:00', '2012-09-07 00:00:00'),
	(57, 17, 1, '我有興趣', '2013-06-13 00:00:00', '2013-12-16 00:00:00'),
	(58, 2, 1, '我有興趣', '2010-06-20 00:00:00', '2011-03-10 00:00:00'),
	(59, 1, 1, '我有興趣', '2013-02-04 00:00:00', '2013-06-05 00:00:00'),
	(60, 5, 1, '我有興趣', '2012-03-09 00:00:00', '2012-12-17 00:00:00'),
	(61, 13, 1, '我有興趣', '2010-01-12 00:00:00', '2010-07-15 00:00:00'),
	(62, 4, 1, '我有興趣', '2013-02-16 00:00:00', '2012-02-07 00:00:00'),
	(63, 16, 1, '我有興趣', '2012-10-02 00:00:00', '2013-01-12 00:00:00'),
	(64, 6, 1, '我有興趣', '2012-08-20 00:00:00', '2011-05-16 00:00:00'),
	(65, 16, 1, '我有興趣', '2011-10-02 00:00:00', '2013-04-18 00:00:00'),
	(66, 11, 1, '我有興趣', '2012-02-03 00:00:00', '2011-08-02 00:00:00'),
	(67, 20, 1, '我有興趣', '2013-07-04 00:00:00', '2011-08-10 00:00:00'),
	(68, 20, 1, '我有興趣', '2011-10-17 00:00:00', '2013-05-01 00:00:00'),
	(69, 5, 1, '我有興趣', '2010-10-04 00:00:00', '2011-04-11 00:00:00'),
	(70, 1, 1, '我有興趣', '2012-12-13 00:00:00', '2012-04-13 00:00:00'),
	(71, 5, 1, '我有興趣', '2011-06-02 00:00:00', '2010-12-09 00:00:00'),
	(72, 8, 1, '我有興趣', '2012-01-14 00:00:00', '2010-07-19 00:00:00'),
	(73, 16, 1, '我有興趣', '2011-08-15 00:00:00', '2011-05-20 00:00:00'),
	(74, 19, 1, '我有興趣', '2010-08-01 00:00:00', '2012-02-17 00:00:00'),
	(75, 9, 1, '我有興趣', '2013-07-05 00:00:00', '2013-06-10 00:00:00'),
	(76, 9, 1, '我有興趣', '2012-10-16 00:00:00', '2011-08-20 00:00:00'),
	(77, 17, 1, '我有興趣', '2010-11-10 00:00:00', '2011-03-04 00:00:00'),
	(78, 14, 1, '我有興趣', '2013-09-20 00:00:00', '2010-02-09 00:00:00'),
	(79, 10, 1, '我有興趣', '2010-02-04 00:00:00', '2010-01-10 00:00:00'),
	(80, 16, 1, '我有興趣', '2010-01-16 00:00:00', '2011-11-13 00:00:00'),
	(81, 12, 1, '我有興趣', '2010-08-07 00:00:00', '2011-08-20 00:00:00'),
	(82, 20, 1, '我有興趣', '2013-03-04 00:00:00', '2010-05-09 00:00:00'),
	(83, 12, 1, '我有興趣', '2012-12-16 00:00:00', '2013-12-09 00:00:00'),
	(84, 17, 1, '我有興趣', '2010-04-04 00:00:00', '2012-05-20 00:00:00'),
	(85, 9, 1, '我有興趣', '2010-12-16 00:00:00', '2010-09-18 00:00:00'),
	(86, 2, 1, '我有興趣', '2012-01-19 00:00:00', '2010-08-20 00:00:00'),
	(87, 1, 1, '我有興趣', '2010-04-18 00:00:00', '2012-10-15 00:00:00'),
	(88, 6, 1, '我有興趣', '2013-09-18 00:00:00', '2013-01-15 00:00:00'),
	(89, 16, 1, '我有興趣', '2010-09-14 00:00:00', '2010-10-10 00:00:00'),
	(90, 13, 1, '我有興趣', '2010-09-12 00:00:00', '2010-12-14 00:00:00'),
	(91, 9, 1, '我有興趣', '2011-04-15 00:00:00', '2012-01-19 00:00:00'),
	(92, 16, 1, '我有興趣', '2011-07-06 00:00:00', '2012-11-05 00:00:00'),
	(93, 1, 1, '我有興趣', '2013-02-15 00:00:00', '2010-05-20 00:00:00'),
	(94, 5, 1, '我有興趣', '2013-11-12 00:00:00', '2012-12-17 00:00:00'),
	(95, 15, 1, '我有興趣', '2011-08-02 00:00:00', '2013-07-02 00:00:00'),
	(96, 8, 1, '我有興趣', '2011-12-13 00:00:00', '2013-11-13 00:00:00'),
	(97, 7, 1, '我有興趣', '2011-05-13 00:00:00', '2010-12-09 00:00:00'),
	(98, 1, 1, '我有興趣', '2013-08-19 00:00:00', '2011-12-15 00:00:00'),
	(99, 8, 1, '我有興趣', '2011-11-03 00:00:00', '2010-07-11 00:00:00'),
	(100, 18, 1, '我有興趣', '2013-02-11 00:00:00', '2012-08-02 00:00:00'),
	(101, 106, 1, 'magnific popup', '2014-06-24 11:56:29', '2014-06-24 11:56:29'),
	(102, 106, 1, 'yo yo yo yo man', '2014-06-24 12:10:10', '2014-06-24 12:10:10'),
	(103, 106, 1, 'abc', '2014-06-24 15:25:35', '2014-06-24 15:25:35');
/*!40000 ALTER TABLE `tblReply` ENABLE KEYS */;


-- Dumping structure for table dcview.tblReport
DROP TABLE IF EXISTS `tblReport`;
CREATE TABLE IF NOT EXISTS `tblReport` (
  `article_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `report_comment` varchar(120) NOT NULL,
  `report_create_time` datetime NOT NULL,
  PRIMARY KEY (`article_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='report article';

-- Dumping data for table dcview.tblReport: ~0 rows (approximately)
DELETE FROM `tblReport`;
/*!40000 ALTER TABLE `tblReport` DISABLE KEYS */;
INSERT INTO `tblReport` (`article_id`, `user_id`, `report_comment`, `report_create_time`) VALUES
	(106, 1, 'test', '2014-06-24 16:17:07');
/*!40000 ALTER TABLE `tblReport` ENABLE KEYS */;


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

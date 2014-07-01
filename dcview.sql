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
  `article_status` int(10) unsigned NOT NULL DEFAULT '1',
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table dcview.tblArticle: ~6 rows (approximately)
DELETE FROM `tblArticle`;
/*!40000 ALTER TABLE `tblArticle` DISABLE KEYS */;
INSERT INTO `tblArticle` (`article_id`, `user_id`, `sh_sub_category_id`, `article_status`, `article_title`, `article_content`, `article_sh_trade_status`, `article_sh_price`, `article_sh_area`, `article_email`, `article_phone_number`, `article_img_url1`, `article_img_url2`, `article_create_time`, `article_update_time`) VALUES
	(1, 1, 1, 1, '', '', 1, 0, 1, '', '', '', '', '2014-06-26 17:44:25', '2014-06-26 17:44:25'),
	(2, 1, 1, 1, '', '', 1, 0, 1, '', '', '', '', '2014-06-26 17:44:42', '2014-06-26 17:44:42'),
	(3, 1, 1, 1, '', '', 1, 222222, 1, '', '', '', '', '2014-06-26 17:44:56', '2014-06-26 17:44:56'),
	(4, 1, 1, 2, 'test', 'test', 1, 333333, 1, '', '', '', '', '2014-06-27 11:29:14', '2014-06-27 11:29:14'),
	(5, 1, 1, 1, '', '', 1, 0, 1, '', '', '', '', '2014-06-30 15:41:13', '2014-06-30 15:41:13'),
	(6, 1, 1, 1, 'new post', '', 1, 0, 1, '', '', '', '', '2014-06-30 16:55:56', '2014-06-30 16:55:56');
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table dcview.tblReply: ~1 rows (approximately)
DELETE FROM `tblReply`;
/*!40000 ALTER TABLE `tblReply` DISABLE KEYS */;
INSERT INTO `tblReply` (`reply_id`, `article_id`, `user_id`, `reply_content`, `reply_create_time`, `reply_update_time`) VALUES
	(1, 4, 1, 'yo yo yo', '2014-06-30 14:58:53', '2014-06-30 14:58:53');
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

-- Dumping data for table dcview.tblReport: ~19 rows (approximately)
DELETE FROM `tblReport`;
/*!40000 ALTER TABLE `tblReport` DISABLE KEYS */;
INSERT INTO `tblReport` (`article_id`, `user_id`, `report_comment`, `report_create_time`) VALUES
	(4, 1, 'bug 2', '2014-06-30 14:59:10'),
	(4, 2, 'hello', '2014-06-30 17:14:42'),
	(4, 3, 'hello', '2014-06-30 17:14:42'),
	(4, 4, 'hello', '2014-06-30 17:14:42'),
	(4, 5, 'hello', '2014-06-30 17:14:42'),
	(4, 6, 'hello', '2014-06-30 17:14:42'),
	(4, 7, 'hello', '2014-06-30 17:14:42'),
	(4, 8, 'hello', '2014-06-30 17:14:42'),
	(4, 9, 'hello', '2014-06-30 17:14:42'),
	(4, 10, 'hello', '2014-06-30 17:14:42'),
	(4, 11, 'hello', '2014-06-30 17:14:42'),
	(4, 12, 'hello', '2014-06-30 17:14:42'),
	(4, 13, 'hello', '2014-06-30 17:14:42'),
	(4, 14, 'hello', '2014-06-30 17:14:42'),
	(4, 15, 'hello', '2014-06-30 17:14:42'),
	(4, 16, 'hello', '2014-06-30 17:14:42'),
	(4, 17, 'hello', '2014-06-30 17:14:42'),
	(4, 18, 'hello', '2014-06-30 17:14:42'),
	(4, 19, 'hello world hello world hello world hello world', '2014-06-30 17:14:42');
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

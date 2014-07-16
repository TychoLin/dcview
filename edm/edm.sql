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

-- Dumping structure for table dcviewEdm.tblEdm
DROP TABLE IF EXISTS `tblEdm`;
CREATE TABLE IF NOT EXISTS `tblEdm` (
  `edm_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `edm_volume` int(10) unsigned NOT NULL,
  `edm_title` varchar(120) NOT NULL,
  `edm_summary` text NOT NULL,
  `edm_publish_date` date NOT NULL,
  `edm_thumbnail_path1` varchar(64) NOT NULL,
  `edm_thumbnail_path2` varchar(64) NOT NULL,
  `edm_create_time` datetime NOT NULL,
  `edm_update_time` datetime NOT NULL,
  PRIMARY KEY (`edm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table dcviewEdm.tblEdm: ~0 rows (approximately)
DELETE FROM `tblEdm`;
/*!40000 ALTER TABLE `tblEdm` DISABLE KEYS */;
INSERT INTO `tblEdm` (`edm_id`, `edm_volume`, `edm_title`, `edm_summary`, `edm_publish_date`, `edm_thumbnail_path1`, `edm_thumbnail_path2`, `edm_create_time`, `edm_update_time`) VALUES
	(1, 516, '紅外線攝影的好幫手-STC UV-IR CUT濾鏡運用分享', '', '2014-06-18', '/upload/edm/2014/06/20140618/i-dsR9mg8-M.jpg', '/upload/edm/2014/06/20140618/516s.jpg', '2014-07-16 18:05:29', '2014-07-16 18:05:29'),
	(2, 515, 'Nikon V3 -輕巧極意,秒速顛峰', '', '2014-06-11', '/upload/edm/2014/06/20140611/i-zpphDdb-M.jpg', '/upload/edm/2014/06/20140611/515s.jpg', '2014-07-16 18:08:37', '2014-07-16 18:08:37');
/*!40000 ALTER TABLE `tblEdm` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table dcviewEdm.tblEdmInfo
DROP TABLE IF EXISTS `tblEdmInfo`;
CREATE TABLE IF NOT EXISTS `tblEdmInfo` (
  `edm_info_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `edm_id` int(10) unsigned NOT NULL,
  `edm_info_type` int(10) unsigned NOT NULL,
  `edm_info_title` varchar(120) NOT NULL,
  `edm_info_author` varchar(60) NOT NULL,
  `edm_info_summary` text NOT NULL,
  `edm_info_url` varchar(2000) NOT NULL,
  `edm_info_thumbnail_path` varchar(64) NOT NULL,
  `edm_info_rank` tinyint(3) unsigned NOT NULL,
  `edm_info_create_time` datetime NOT NULL,
  `edm_info_update_time` datetime NOT NULL,
  PRIMARY KEY (`edm_info_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

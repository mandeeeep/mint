/*
SQLyog Enterprise - MySQL GUI v6.15
MySQL - 5.1.36-community-log : Database - dharanpaper
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `dharanpaper`;

USE `dharanpaper`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `admins` */

DROP TABLE IF EXISTS `admins`;

CREATE TABLE `admins` (
  `au_id` int(10) unsigned NOT NULL,
  `au_name` varchar(255) DEFAULT NULL,
  `au_uname` varchar(32) NOT NULL,
  `au_pwd` varchar(64) NOT NULL,
  `au_type` int(11) DEFAULT NULL,
  `updated_on` int(20) DEFAULT NULL,
  `au_status` int(11) DEFAULT '1',
  PRIMARY KEY (`au_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='admin users for the job portal';

/*Table structure for table `articles` */

DROP TABLE IF EXISTS `articles`;

CREATE TABLE `articles` (
  `al_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `al_rr_id` int(11) DEFAULT NULL,
  `al_title` varchar(255) DEFAULT NULL,
  `al_content` blob,
  `al_hits` double DEFAULT '0',
  `al_pub_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `al_status` int(11) DEFAULT '0',
  PRIMARY KEY (`al_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `gallery` */

DROP TABLE IF EXISTS `gallery`;

CREATE TABLE `gallery` (
  `ga_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ga_pub_date` timestamp NULL DEFAULT NULL,
  `ga_title` varchar(255) NOT NULL,
  `ga_desc` text,
  `ga_ns_id` int(10) unsigned DEFAULT '0',
  `ga_status` int(11) DEFAULT '0',
  PRIMARY KEY (`ga_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `gallery_items` */

DROP TABLE IF EXISTS `gallery_items`;

CREATE TABLE `gallery_items` (
  `gi_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gi_ga_id` int(10) unsigned NOT NULL,
  `gi_img` varchar(255) NOT NULL,
  `gi_caption` varchar(255) DEFAULT NULL,
  `gi_status` int(11) DEFAULT '0',
  PRIMARY KEY (`gi_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `news` */

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `ns_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ns_nc_id` int(10) unsigned NOT NULL,
  `ns_rr_id` int(11) NOT NULL,
  `ns_title` varchar(255) NOT NULL,
  `ns_content` blob NOT NULL,
  `ns_nepali` int(11) DEFAULT '0',
  `ns_title_np` varchar(255) DEFAULT NULL,
  `ns_content_np` blob,
  `ns_shorty` varchar(255) DEFAULT NULL,
  `ns_img` varchar(255) DEFAULT NULL,
  `ns_tags` varchar(255) DEFAULT NULL,
  `ns_video` varchar(255) DEFAULT NULL,
  `ns_hits` double DEFAULT '0',
  `ns_pub_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ns_status` int(11) DEFAULT '0',
  PRIMARY KEY (`ns_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `news_categories` */

DROP TABLE IF EXISTS `news_categories`;

CREATE TABLE `news_categories` (
  `nc_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nc_title` varchar(25) NOT NULL,
  `nc_n_cnt` int(11) DEFAULT '0',
  `nc_status` int(11) DEFAULT '1',
  PRIMARY KEY (`nc_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `reporters` */

DROP TABLE IF EXISTS `reporters`;

CREATE TABLE `reporters` (
  `rr_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rr_name` varchar(255) NOT NULL,
  `rr_img` varchar(255) DEFAULT NULL,
  `rr_occupation` varchar(255) DEFAULT NULL,
  `rr_bio` varchar(255) DEFAULT NULL,
  `rr_join_date` date DEFAULT NULL,
  `rr_article_cnt` double DEFAULT NULL,
  `rr_email` varchar(255) DEFAULT NULL,
  `rr_pwd` varchar(64) DEFAULT NULL,
  `rr_status` int(11) DEFAULT '0',
  PRIMARY KEY (`rr_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Table structure for table `sys_settings` */

DROP TABLE IF EXISTS `sys_settings`;

CREATE TABLE `sys_settings` (
  `cfg_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cfg_val` text,
  `updated_on` int(20) DEFAULT NULL,
  PRIMARY KEY (`cfg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='global configs';

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;

DROP TABLE IF EXISTS `365wzs_cats`;
CREATE TABLE `365wzs_cats` (
  `id` int(11) NOT NULL,
  `name` varchar(128) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `365wzs_contents`;

CREATE TABLE `365wzs_contents` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `365wzs_favors`;

CREATE TABLE `365wzs_favors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `descs` varchar(128) NOT NULL,
  `click_count` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `365wzs_items`;

CREATE TABLE `365wzs_items` (
  `id` int(128) NOT NULL AUTO_INCREMENT,
  `num_iid` varchar(50) NOT NULL,
  `nick` varchar(128) NOT NULL,
  `title` varchar(128) NOT NULL,
  `cid` int(128) NOT NULL,
  `content_id` int(128) DEFAULT NULL,
  `click_url` varchar(512) NOT NULL,
  `shop_click_url` varchar(512) NOT NULL,
  `pic_url` varchar(128) NOT NULL,
  `thumb` int(1) DEFAULT '0',
  `price` float NOT NULL,
  `item_location` varchar(128) NOT NULL,
  `commission_rate` float DEFAULT NULL,
  `commission` float DEFAULT NULL,
  `commission_num` varchar(50) DEFAULT NULL,
  `commission_volume` float DEFAULT NULL,
  `volume` int(11) DEFAULT NULL,
  `click_count` int(128) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `365wzs_posts`;

CREATE TABLE `365wzs_posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `descs` varchar(128) NOT NULL,
  `click_count` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `365wzs_thumbs`;

CREATE TABLE `365wzs_thumbs` (
  `id` int(128) NOT NULL AUTO_INCREMENT,
  `status` int(1) NOT NULL,
  `median_url` varchar(128) DEFAULT NULL,
  `small_url` varchar(128) DEFAULT NULL,
  `item_id` int(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `365wzs_users`;

CREATE TABLE `365wzs_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


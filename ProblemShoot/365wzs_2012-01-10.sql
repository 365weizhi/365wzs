-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Ö÷»ú: localhost
-- Éú³ÉÈÕÆÚ: 2013 Äê 01 ÔÂ 10 ÈÕ 02:36
-- ·þÎñÆ÷°æ±¾: 5.0.51
-- PHP °æ±¾: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Êý¾Ý¿â: `365wzs`
-- 

-- --------------------------------------------------------

-- 
-- ±íµÄ½á¹¹ `365wzs_categories`
-- 

CREATE TABLE `365wzs_categories` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(128) NOT NULL,
  `nick` varchar(128) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50020858 ;

-- 
-- µ¼³ö±íÖÐµÄÊý¾Ý `365wzs_categories`
-- 

INSERT INTO `365wzs_categories` VALUES (50006843, '?£¤3?¡ê?¨¦???-?', '?£¤3¨¦??');

-- --------------------------------------------------------

-- 
-- ±íµÄ½á¹¹ `365wzs_contents`
-- 

CREATE TABLE `365wzs_contents` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` varchar(255) default 'Ä¬ÈÏ×¨¿¯',
  `pic_url` varchar(255) default NULL,
  `favor_count` int(11) NOT NULL default '0',
  `like_count` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

-- 
-- µ¼³ö±íÖÐµÄÊý¾Ý `365wzs_contents`
-- 

INSERT INTO `365wzs_contents` VALUES (1, 'default', 1, NULL, NULL, 1, 0);
INSERT INTO `365wzs_contents` VALUES (2, 'default', 2, '?¡ë1¨¨¡ë2', 'http://img01.taobaocdn.com/bao/uploaded/i1/17957019029094364/T1fOQJXclXXXXXXXXX_!!0-item_pic.jpg', 1, 0);
INSERT INTO `365wzs_contents` VALUES (3, '?¡¤¡®?£¤3¨¦??', 1, NULL, 'http://img01.taobaocdn.com/bao/uploaded/i1/17957029614760404/T1mngIXoNaXXXXXXXX_!!0-item_pic.jpg', 0, 0);
INSERT INTO `365wzs_contents` VALUES (6, '¨¨??¨¦¡ê??¡ã¡®?1¡ä', 3, '¨¨??¨¦¡ê??????????', 'http://img03.taobaocdn.com/bao/uploaded/i3/17957019034557264/T14poJXdhbXXXXXXXX_!!0-item_pic.jpg', 2, 0);
INSERT INTO `365wzs_contents` VALUES (7, '¨¦???¡­??€?????1¡ë', 3, '???¨¨¡ì¡ê¨¦??', 'http://img01.taobaocdn.com/bao/uploaded/i1/17957019029094364/T1fOQJXclXXXXXXXXX_!!0-item_pic.jpg', 1, 0);
INSERT INTO `365wzs_contents` VALUES (8, '??¡®¨¦¡ª2¨¨¡ã?', 2, '??¡®¨¦¡ª2?¡±????', NULL, 0, 0);

-- --------------------------------------------------------

-- 
-- ±íµÄ½á¹¹ `365wzs_content_favors`
-- 

CREATE TABLE `365wzs_content_favors` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `description` varchar(255) default NULL,
  `click_count` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- 
-- µ¼³ö±íÖÐµÄÊý¾Ý `365wzs_content_favors`
-- 

INSERT INTO `365wzs_content_favors` VALUES (1, 1, 1, 'test.', 0);
INSERT INTO `365wzs_content_favors` VALUES (3, 3, 2, '¨¨????????¨¦¡±?', 0);
INSERT INTO `365wzs_content_favors` VALUES (4, 3, 6, '?£¤???????????¡è??oo????o?¨¨????a???', 0);
INSERT INTO `365wzs_content_favors` VALUES (5, 1, 6, 't', 0);
INSERT INTO `365wzs_content_favors` VALUES (6, 3, 7, '??????????????? ?¡¯¡¥~ ???¨¨|?¨¨¡¥¡ä??¡®?¡ã??¡ã¡±', 0);
INSERT INTO `365wzs_content_favors` VALUES (7, 2, 6, '', 0);

-- --------------------------------------------------------

-- 
-- ±íµÄ½á¹¹ `365wzs_content_likes`
-- 

CREATE TABLE `365wzs_content_likes` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `click_count` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- µ¼³ö±íÖÐµÄÊý¾Ý `365wzs_content_likes`
-- 


-- --------------------------------------------------------

-- 
-- ±íµÄ½á¹¹ `365wzs_favors`
-- 

CREATE TABLE `365wzs_favors` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `description` varchar(255) default NULL,
  `click_count` int(11) default '0',
  `content_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

-- 
-- µ¼³ö±íÖÐµÄÊý¾Ý `365wzs_favors`
-- 

INSERT INTO `365wzs_favors` VALUES (1, 1, 1, '?¡è???¡è¨¦¡ê????¨¦???-?- - ?????£¤¨¦?¡°??¡¥?????¡¥¨¦€??????¡®', 0, 1);
INSERT INTO `365wzs_favors` VALUES (2, 1, 5, '¨¨???????¡è¨¨?¡è?¡°??2??¡±¡§¨¨?? - -', 0, 1);
INSERT INTO `365wzs_favors` VALUES (3, 1, 6, '???¨¨¦Ì¡¤??£¤¨¨????¡ª??o?¡¤¡®?£¤3?????€???¨¦????¡ì~???', 0, 3);
INSERT INTO `365wzs_favors` VALUES (4, 1, 7, '¨¨????¡¥??o??¡§?oo¨¦?¡ê¨¨?¡À?????£¤????1???????', 0, 3);
INSERT INTO `365wzs_favors` VALUES (5, 3, 1, '¨¦?¡ê?1???¡®???¨¦???-??¡À¡­?????¡ë?oo????o???????????¡ì€¨¦€¡ª?o?', 0, 6);
INSERT INTO `365wzs_favors` VALUES (6, 3, 8, '?€??1?¨¦???-? ??¡¥??£¤?¡±?¨¨??¨¦???¡­??€????', 0, 7);
INSERT INTO `365wzs_favors` VALUES (7, 3, 5, '?2??¡±¡§¨¨???¡ã¡À???¨¨|?????o???|- - ', 0, 7);
INSERT INTO `365wzs_favors` VALUES (8, 2, 8, 'sajdfhqwjkhsxfedwsd', 0, 2);
INSERT INTO `365wzs_favors` VALUES (9, 2, 5, '?£¤??|??¡ã¡ä¨¨¡é?', 0, 2);
INSERT INTO `365wzs_favors` VALUES (10, 2, 1, 'xieju', 0, 2);

-- --------------------------------------------------------

-- 
-- ±íµÄ½á¹¹ `365wzs_follows`
-- 

CREATE TABLE `365wzs_follows` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `follow_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- µ¼³ö±íÖÐµÄÊý¾Ý `365wzs_follows`
-- 

INSERT INTO `365wzs_follows` VALUES (3, 17, 1);
INSERT INTO `365wzs_follows` VALUES (4, 17, 2);

-- --------------------------------------------------------

-- 
-- ±íµÄ½á¹¹ `365wzs_items`
-- 

CREATE TABLE `365wzs_items` (
  `id` int(128) NOT NULL auto_increment,
  `num_iid` varchar(50) NOT NULL,
  `nick` varchar(128) NOT NULL,
  `title` varchar(128) NOT NULL,
  `cid` int(128) NOT NULL,
  `content_id` int(128) default NULL,
  `click_url` varchar(512) NOT NULL,
  `shop_click_url` varchar(512) NOT NULL,
  `pic_url` varchar(128) NOT NULL,
  `price` float NOT NULL,
  `item_location` varchar(128) NOT NULL,
  `commission_rate` float default NULL,
  `commission` float default NULL,
  `commission_num` varchar(50) default NULL,
  `commission_volume` float default NULL,
  `volume` int(11) default NULL,
  `click_count` int(128) default '0',
  `rank` int(5) default NULL,
  `description` varchar(255) default NULL,
  `like_count` int(11) default '0',
  `favor_count` int(11) default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `num_iid` (`num_iid`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

-- 
-- µ¼³ö±íÖÐµÄÊý¾Ý `365wzs_items`
-- 

INSERT INTO `365wzs_items` VALUES (1, '15844149584', '¨¦??¨¦??¨¨?¡ê¨¨???¡ª¡ª¨¨?¡ã?o¡ª', '¨¦??¨¦??¨¨?¡ê¨¨??¨¦???¡ë??£¤3¨¦??2012?¡ì??-¡ê?¨C¡ã?¡°??¡ã¨C?¡è¡ä?13?o??£¤3???¨¦??SH2223L12???0906', 50012027, 50012027, 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB07S4%2FK0CFcRfH0G7DbPkiN9MMI6HOGSxncQvSKvs6foY47%2B92OAfWFIPnT2ZqSUflNpochwWu1ZE3s40jKrh2ZbrPzYnd5p2bFzCrfLWf78guLYNcg0RhaDv483k9xzpKLYX5vpDo0DgWznKIjIabAoD0%2FAJFOQucTDriAZVQPOMaxbXMGO%2Fc%3D&spm=2014.12673864.1.0', 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB04MQzdgG3VSuWRIvnJbEpKV5PSE6evRo4EF6M8D4t63iV5IZLRA96c9ewpqC2UmfXlm9eYXkScOtRvBTavt%2BMlvsPVZuaxOY6f3QSAqTheVQ4adP6q1gHkzQJZEl0CcQDrgEHsKWmITV3EG9yN4uDWOi53SmkNvXEf&spm=2014.12673864.1.0', 'http://img03.taobaocdn.com/bao/uploaded/i3/17957019034557264/T14poJXdhbXXXXXXXX_!!0-item_pic.jpg', 129, '?¡À¡À????¦Ì???¡ª', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 1, 3);
INSERT INTO `365wzs_items` VALUES (5, '21388900572', '', '???299¨¨¦Ì??¡°? ?2????¨¦??¨¦????¨C?|???¡­ ??¡è?o¡¤?¦Ì????¨¦¡­??£¤??¡ê¡§???????¨C¡À10ml ?????????', 0, NULL, '', '', 'http://img03.taobaocdn.com/bao/uploaded/i3/T1AZknXkddXXbXgeI1_040725.jpg', 0.01, '', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, 3);
INSERT INTO `365wzs_items` VALUES (6, '16010518495', '¨¦??¨¦??¨¨?¡ê¨¨???¡ª¡ª¨¨?¡ã?o¡ª', '¨¦??¨¦??¨¨?¡ê¨¨??¨¦???¡ë??£¤3¨¦??2012?¡ì??-¡ê?¨C¡ã?¡°?¨¨?¡ä¨¨????¡°??¡­?¡é?¨¦???£¤3¨¦??SH2232L12???', 50012027, 50012027, 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB07S4%2FK0CFcRfH0G7DbPkiN9MMI6ZIhyX59isTxFMsJkGzG%2BvsoPAj%2FDuin0c2HesPKfjlo0TcCs%2FGQda3Y09oHmgmTSUXq%2BAZCDEseX6pYqmUcDmhyH543VTNPmsD9I9vIM6x%2F19sFg3s83fquzGjnyYO3QLfQvNg7EHmrfgIEsBxyQ95K3Nw%3D&spm=2014.12673864.1.0', 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB04MQzdgG3VSuWRIvnJbEpKV5PSEtarog19FfEI8jaQZa5i1lg%2B%2F18WE3Cr%2FLnYmyS8esQEsBzi2p5oEGtowJij1zDzJm43oQbXKkqGQRmyyEQor6YqeT8MeDY35PWtETzuJnvDROOd%2FPpGoXZc5Z8iw0M69T%2FxiuJS&spm=2014.12673864.1.0', 'http://img03.taobaocdn.com/bao/uploaded/i3/17957019036696541/T1jJEIXc8eXXXXXXXX_!!0-item_pic.jpg', 129, '?¡À¡À????¦Ì???¡ª', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, 1);
INSERT INTO `365wzs_items` VALUES (7, '16215761764', '¨¦??¨¦??¨¨?¡ê¨¨???¡ª¡ª¨¨?¡ã?o¡ª', '¨¦??¨¦??¨¨?¡ê¨¨??¨¦???¡ë??£¤3¨¦??2012?¡ì?????¨C¡ã?¡°?¨¦-¡±??¡¥¨¨¡ä¡ä?o¡¥¨¨¡ë2??-?-¡¯?£¤3???¨¦?a??¡ã¨¦?¡äSH2078???', 50012028, 50012028, 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB07S4%2FK0CFcRfH0G7DbPkiN9MMI6ZInMw7kvqdkxNI27GK%2BmWd1iPqpESo81TKzUktf2UViMvGzdRUTSOhex0Dqx3wRXnM3gzQjpwErEphAOk79WDXRbbm2%2BpRWTRnMbcRrfx7sZPyy7i1mVYJTVDg1EOYojoMfgHR4jSpv18Kt8F%2BNHxYNX4k%3D&spm=2014.12673864.1.0', 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB04MQzdgG3VSuWRIvnJbEpKV5PSEtatR1Jaxyjb27S1O54G1Q7edb7ItgJ6Ahq5gxKebuVdvpuEn7U%2FhBJ6C55B5kaD8iCGemJNGxLOzfekH3ep26wo5wLyHAueB0zy8pwfwSfwZxt%2BHbBlwimMNEYlpjNqYBcEG%2F0y&spm=2014.12673864.1.0', 'http://img01.taobaocdn.com/bao/uploaded/i1/17957029614760404/T1mngIXoNaXXXXXXXX_!!0-item_pic.jpg', 158, '?¡À¡À????¦Ì???¡ª', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, 1);
INSERT INTO `365wzs_items` VALUES (8, '17562243446', '¨¦??¨¦??¨¨?¡ê¨¨???¡ª¡ª¨¨?¡ã?o¡ª', '¨¦??¨¦??¨¨?¡ê¨¨??¨¦???¡ë??£¤3¨¦??2012?¡ì?????¨C¡ã?¡°?¨¦-¡±??¡¥¨¨¡ä¡ä????-??£¤3???¨¦?a??¡ã¨¦?¡äSH2073???', 50012028, 50012028, 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB07S4%2FK0CFcRfH0G7DbPkiN9MMI6ZIkwy0xbVbUccD1YX3D3pHD29FnVjYWIR5ugYEl1BmeMAk%2Flk0vIp5sITi1m10pgPkdtYubZsX3qJh4XPh9AbEPCVvM2aV9pUJ4LxDEcnsEWk%2F1VgoB1B1XC5mX1rXxyNptsOU3mCLSpuCcUdYhdeHZPPk%3D&spm=2014.12673864.1.0', 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB04MQzdgG3VSuWRIvnJbEpKV5PSEtauXsgG5CVv%2FkanBTpUEi3sP%2FpHh%2FcKaJDkVBpS545wTDgYiFsT6o1965hdfSSUueAr6eQd1iKdfMAGdaUeCbUWnnjLvHyMyBd6%2F3Yznu9%2FeQpMQNkbl72pkSq6i42xmOtyoA6J&spm=2014.12673864.1.0', 'http://img01.taobaocdn.com/bao/uploaded/i1/17957019029094364/T1fOQJXclXXXXXXXXX_!!0-item_pic.jpg', 158, '?¡À¡À????¦Ì???¡ª', NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 0, 2);

-- --------------------------------------------------------

-- 
-- ±íµÄ½á¹¹ `365wzs_items_categories`
-- 

CREATE TABLE `365wzs_items_categories` (
  `id` int(11) NOT NULL auto_increment,
  `item_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- µ¼³ö±íÖÐµÄÊý¾Ý `365wzs_items_categories`
-- 


-- --------------------------------------------------------

-- 
-- ±íµÄ½á¹¹ `365wzs_likes`
-- 

CREATE TABLE `365wzs_likes` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `description` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- µ¼³ö±íÖÐµÄÊý¾Ý `365wzs_likes`
-- 

INSERT INTO `365wzs_likes` VALUES (1, 3, 1, '¨¨??¨¨???€?');

-- --------------------------------------------------------

-- 
-- ±íµÄ½á¹¹ `365wzs_messages`
-- 

CREATE TABLE `365wzs_messages` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `notice_user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` int(2) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- µ¼³ö±íÖÐµÄÊý¾Ý `365wzs_messages`
-- 


-- --------------------------------------------------------

-- 
-- ±íµÄ½á¹¹ `365wzs_posts`
-- 

CREATE TABLE `365wzs_posts` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `descs` varchar(128) NOT NULL,
  `click_count` int(11) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- µ¼³ö±íÖÐµÄÊý¾Ý `365wzs_posts`
-- 


-- --------------------------------------------------------

-- 
-- ±íµÄ½á¹¹ `365wzs_profiles`
-- 

CREATE TABLE `365wzs_profiles` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `pic_url` varchar(255) default NULL,
  `description` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- µ¼³ö±íÖÐµÄÊý¾Ý `365wzs_profiles`
-- 


-- --------------------------------------------------------

-- 
-- ±íµÄ½á¹¹ `365wzs_registrations`
-- 

CREATE TABLE `365wzs_registrations` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) default NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `status` varchar(1) default '0',
  `activekey` varchar(128) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- 
-- µ¼³ö±íÖÐµÄÊý¾Ý `365wzs_registrations`
-- 

INSERT INTO `365wzs_registrations` VALUES (1, NULL, 'shuyy', '17feacbfe08c75a9e6e698765c5bf151', '', '0', '12a63f9f04e5526944ffcb26c40fcb1a');
INSERT INTO `365wzs_registrations` VALUES (2, NULL, 'wenjq', 'e071b0825e40db944fc437c4436fdf03', '394246577@qq.com', '0', 'd36cee2b39a8c44921a8db6ef31a6656');
INSERT INTO `365wzs_registrations` VALUES (3, NULL, 'shuyy2', '6c161d94241b39b7a6c0a6dc0b11d275', '394246577@qq.com', '0', '5e9063cfd7d3049eb9e3393a3902fd7e');
INSERT INTO `365wzs_registrations` VALUES (4, NULL, 'shuyy3', '94ac2188a6fd38666271373f9260a00f', '394246577@qq.com', '0', '2012caa206e6f3740773c45502ad2e7c');
INSERT INTO `365wzs_registrations` VALUES (5, NULL, 'forgeneral', 'c9b01e9360fa1dac3a61f46bfd5c7d5a', 'forgeneral@163.com', '0', '07128b7748738c91e7359f9776d5c3eb');
INSERT INTO `365wzs_registrations` VALUES (6, NULL, 'jonny', '4297f44b13955235245b2497399d7a93', 'billqiang@qq.com', '0', 'a609804dd2b60a8da073ddd9b7aa0ffd');

-- --------------------------------------------------------

-- 
-- ±íµÄ½á¹¹ `365wzs_users`
-- 

CREATE TABLE `365wzs_users` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- µ¼³ö±íÖÐµÄÊý¾Ý `365wzs_users`
-- 

INSERT INTO `365wzs_users` VALUES (1, 'shuyy3', '94ac2188a6fd38666271373f9260a00f', '394246577@qq.com');
INSERT INTO `365wzs_users` VALUES (2, 'forgeneral', 'c9b01e9360fa1dac3a61f46bfd5c7d5a', 'forgeneral@163.com');
INSERT INTO `365wzs_users` VALUES (3, 'jonny', '4297f44b13955235245b2497399d7a93', 'billqiang@qq.com');

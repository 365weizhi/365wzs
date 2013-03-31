SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
CREATE TABLE `365wzs_categories` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(128) NOT NULL,
  `son_count` int(11) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50050550 ;
INSERT INTO `365wzs_categories` VALUES (1, '未分类', 25);
INSERT INTO `365wzs_categories` VALUES (2, '布贴画', 0);
CREATE TABLE `365wzs_category_items` (
  `id` int(11) NOT NULL auto_increment,
  `item_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;
INSERT INTO `365wzs_category_items` VALUES (33, 5, 1);
INSERT INTO `365wzs_category_items` VALUES (9, 9, 1);
INSERT INTO `365wzs_category_items` VALUES (11, 11, 1);
INSERT INTO `365wzs_category_items` VALUES (12, 12, 1);
INSERT INTO `365wzs_category_items` VALUES (13, 13, 1);
INSERT INTO `365wzs_category_items` VALUES (14, 14, 1);
INSERT INTO `365wzs_category_items` VALUES (15, 15, 1);
INSERT INTO `365wzs_category_items` VALUES (16, 16, 1);
INSERT INTO `365wzs_category_items` VALUES (17, 17, 1);
INSERT INTO `365wzs_category_items` VALUES (18, 18, 1);
INSERT INTO `365wzs_category_items` VALUES (19, 19, 1);
INSERT INTO `365wzs_category_items` VALUES (20, 20, 1);
INSERT INTO `365wzs_category_items` VALUES (21, 21, 1);
INSERT INTO `365wzs_category_items` VALUES (22, 22, 1);
INSERT INTO `365wzs_category_items` VALUES (23, 23, 1);
INSERT INTO `365wzs_category_items` VALUES (24, 24, 1);
INSERT INTO `365wzs_category_items` VALUES (25, 25, 1);
INSERT INTO `365wzs_category_items` VALUES (26, 26, 1);
INSERT INTO `365wzs_category_items` VALUES (27, 27, 1);
INSERT INTO `365wzs_category_items` VALUES (28, 28, 1);
INSERT INTO `365wzs_category_items` VALUES (29, 29, 1);
INSERT INTO `365wzs_category_items` VALUES (30, 30, 1);
INSERT INTO `365wzs_category_items` VALUES (31, 31, 1);
INSERT INTO `365wzs_category_items` VALUES (32, 32, 1);

CREATE TABLE `365wzs_contents` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` varchar(255) default '默认专刊',
  `pic_url` varchar(255) default NULL,
  `item_count` int(11) NOT NULL default '0',
  `create_time` varchar(25) NOT NULL,
  `update_time` varchar(25) NOT NULL,
  `favor_count` int(11) default '0',
  `like_count` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=131 ;

INSERT INTO `365wzs_contents` VALUES (127, '我的专刊', 125, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (128, '我的专刊', 126, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (126, 'default', 122, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (125, 'default', 121, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (5, '我的专刊', 1, '默认专刊', 'http://img07.taobaocdn.com/bao/uploaded/i7/T1rbHEXoxhXXavrTQ1_042501.jpg', 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (6, '我的专刊', 2, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (7, '我的专刊', 3, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (8, '我的专刊', 4, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (9, '我的专刊', 5, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (10, '我的专刊', 6, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (11, '我的专刊', 7, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (12, '我的专刊', 8, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (13, '我的专刊', 9, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (14, '我的专刊', 10, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (15, '我的专刊', 11, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (16, '我的专刊', 12, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (17, '我的专刊', 13, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (18, '我的专刊', 14, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (19, '我的专刊', 15, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (20, '我的专刊', 16, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (21, '我的专刊', 17, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (22, '我的专刊', 18, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (23, '我的专刊', 19, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (24, '我的专刊', 20, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (25, '我的专刊', 21, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (26, '我的专刊', 22, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (27, '我的专刊', 23, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (28, '我的专刊', 24, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (29, '我的专刊', 25, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (30, '我的专刊', 26, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (31, '我的专刊', 27, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (32, '我的专刊', 28, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (33, '我的专刊', 29, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (34, '我的专刊', 30, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (35, '我的专刊', 31, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (36, '我的专刊', 32, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (37, '我的专刊', 33, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (38, '我的专刊', 34, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (39, '我的专刊', 35, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (40, '我的专刊', 36, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (41, '我的专刊', 37, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (42, '我的专刊', 38, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (43, '我的专刊', 39, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (44, '我的专刊', 40, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (45, '我的专刊', 41, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (46, '我的专刊', 42, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (47, '我的专刊', 43, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (48, '我的专刊', 44, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (49, '我的专刊', 45, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (50, '我的专刊', 46, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (51, '我的专刊', 47, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (52, '我的专刊', 48, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (53, '我的专刊', 49, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (54, '我的专刊', 50, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (55, '我的专刊', 51, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (56, '我的专刊', 52, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (57, '我的专刊', 53, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (58, '我的专刊', 54, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (59, '我的专刊', 55, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (60, '我的专刊', 56, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (61, '我的专刊', 57, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (62, '我的专刊', 58, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (63, '我的专刊', 59, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (64, '我的专刊', 60, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (65, '我的专刊', 61, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (66, '我的专刊', 62, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (67, '我的专刊', 63, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (68, '我的专刊', 64, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (69, '我的专刊', 65, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (70, '我的专刊', 66, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (71, '我的专刊', 67, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (72, '我的专刊', 68, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (73, '我的专刊', 69, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (74, '我的专刊', 70, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (75, '我的专刊', 71, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (76, '我的专刊', 72, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (77, '我的专刊', 73, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (78, '我的专刊', 74, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (79, '我的专刊', 75, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (80, '我的专刊', 76, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (81, '我的专刊', 77, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (82, '我的专刊', 78, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (83, '我的专刊', 79, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (84, '我的专刊', 80, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (85, '我的专刊', 81, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (86, '我的专刊', 82, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (87, '我的专刊', 83, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (88, '我的专刊', 84, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (89, '我的专刊', 85, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (90, '我的专刊', 86, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (91, '我的专刊', 87, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (92, '我的专刊', 88, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (93, '我的专刊', 89, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (94, '我的专刊', 90, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (95, '我的专刊', 91, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (96, '我的专刊', 92, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (97, '我的专刊', 93, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (98, '我的专刊', 94, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (99, '我的专刊', 95, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (100, '我的专刊', 96, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (101, '我的专刊', 97, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (102, '我的专刊', 98, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (103, '我的专刊', 99, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (104, '我的专刊', 100, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (105, '我的专刊', 101, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (106, '我的专刊', 102, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (107, '我的专刊', 103, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (108, '我的专刊', 104, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (109, '我的专刊', 105, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (110, '我的专刊', 106, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (111, '我的专刊', 107, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (112, '我的专刊', 108, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (113, '我的专刊', 109, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (114, '我的专刊', 110, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (115, '我的专刊', 111, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (116, '我的专刊', 112, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (117, '我的专刊', 113, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (118, '我的专刊', 114, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (119, '我的专刊', 115, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (120, '我的专刊', 116, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (121, '我的专刊', 117, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (122, '我的专刊', 118, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (123, '我的专刊', 119, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (124, '我的专刊', 120, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (129, '我的专刊', 127, '默认专刊', NULL, 0, '', '', 0, 0);
INSERT INTO `365wzs_contents` VALUES (130, 'default', 129, '默认专刊', 'http://img03.taobaocdn.com/bao/uploaded/i3/683785340/T2zImXXgtXXXXXXXXX_!!683785340.jpg', 1, '', '1363514918', 0, 0);

CREATE TABLE `365wzs_content_favors` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `description` varchar(255) default NULL,
  `click_count` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

INSERT INTO `365wzs_content_favors` VALUES (1, 1, 5, '4', 0);

CREATE TABLE `365wzs_content_likes` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `click_count` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE `365wzs_favors` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;
 

INSERT INTO `365wzs_favors` VALUES (1, 122, 7, 5);
INSERT INTO `365wzs_favors` VALUES (2, 122, 8, 5);
INSERT INTO `365wzs_favors` VALUES (3, 129, 10, 0);

CREATE TABLE `365wzs_follows` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `follow_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

INSERT INTO `365wzs_follows` VALUES (1, 1, 129);
INSERT INTO `365wzs_follows` VALUES (2, 129, 1);
INSERT INTO `365wzs_follows` VALUES (3, 129, 1);

CREATE TABLE `365wzs_forums` (
  `id` int(11) NOT NULL auto_increment,
  `group_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `create_time` varchar(50) NOT NULL,
  `update_time` varchar(50) NOT NULL,
  `type` varchar(25) default '普通',
  `count` int(11) NOT NULL default '0',
  `replies` int(11) NOT NULL default '0',
  `rank` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

INSERT INTO `365wzs_forums` VALUES (4, 1, '测试', '内容', 2, '2013-01-20 05:20:39', '2013-01-20 05:20:39', '普通', 0, 0, 0);
INSERT INTO `365wzs_forums` VALUES (3, 1, '测试', '内容', 2, '2013-01-20 05:19:13', '2013-01-20 05:19:13', '普通', 0, 0, 0);
INSERT INTO `365wzs_forums` VALUES (5, 1, '测试', '内容', 2, '2013-01-20 05:21:32', '2013-01-20 05:21:32', '普通', 0, 0, 0);
INSERT INTO `365wzs_forums` VALUES (6, 1, '测试', '内容', 2, '2013-01-20 05:21:46', '2013-01-20 05:21:46', '普通', 0, 0, 0);
INSERT INTO `365wzs_forums` VALUES (7, 2, '测试2', '12', 2, '2013-01-20 05:47:53', '2013-01-20 05:47:53', '普通', 0, 0, 0);
INSERT INTO `365wzs_forums` VALUES (8, 3, '测试3', '普通', 2, '2013-01-20 05:48:11', '2013-01-20 05:48:11', '普通', 0, 0, 0);
INSERT INTO `365wzs_forums` VALUES (9, 1, '测试组员添加话题', '测试组员', 2, '2013-01-20 02:23:57', '2013-01-20 02:23:57', '问答', 0, 0, 0);
INSERT INTO `365wzs_forums` VALUES (10, 1, '测试组员添加话题', '测试', 2, '2013-01-20 02:25:30', '2013-01-20 02:25:30', '普通', 0, 0, 0);
INSERT INTO `365wzs_forums` VALUES (11, 1, '测试跳转', '跳转', 2, '2013-01-20 02:27:48', '2013-01-20 02:27:48', '普通', 0, 0, 0);
INSERT INTO `365wzs_forums` VALUES (12, 1, '测试添加后跳转', '跳转', 2, '2013-01-20 02:28:07', '2013-01-20 02:28:07', '普通', 0, 0, 0);
INSERT INTO `365wzs_forums` VALUES (13, 1, '测试其他用户添加话题', '测试', 4, '2013-01-20 02:36:37', '2013-01-20 02:36:37', '普通', 0, 0, 0);

CREATE TABLE `365wzs_forum_posts` (
  `id` int(11) NOT NULL auto_increment,
  `forum_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `time` varchar(50) NOT NULL,
  `count` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE `365wzs_groups` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(128) NOT NULL,
  `location` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(128) NOT NULL,
  `members` int(11) NOT NULL default '0',
  `rank` int(11) NOT NULL default '0',
  `description` text NOT NULL,
  `forum_count` int(11) NOT NULL default '0',
  `create_time` varchar(50) NOT NULL,
  `last_update` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

INSERT INTO `365wzs_groups` VALUES (1, '特色美食', '广州', 2, '地域', 2, 0, '大饼', 6, '', '');
INSERT INTO `365wzs_groups` VALUES (3, '特色商品', '深圳', 2, '地域', 1, 0, '测试\r\n', 1, '2013-01-20 05:03:07', '');
INSERT INTO `365wzs_groups` VALUES (4, '均匀写真集', '广州', 2, '地域', 1, 0, '保证高清', 0, '2013-01-20 07:02:16', '');
INSERT INTO `365wzs_groups` VALUES (5, '换一个用户创建小组', '广州', 4, '地域', 1, 0, '测试', 0, '2013-01-21 04:19:12', '');
INSERT INTO `365wzs_groups` VALUES (6, '测试aftersave', '广州', 4, '地域', 1, 0, '测试', 0, '2013-01-21 04:22:09', '');
INSERT INTO `365wzs_groups` VALUES (7, '测试after', '广州', 4, '地域', 1, 0, '测试', 0, '2013-01-21 04:25:10', '');
INSERT INTO `365wzs_groups` VALUES (8, '测试是否添加到UserGroup', '广州', 4, '地域', -1, 0, '广州', 0, '2013-01-21 04:27:58', '');

CREATE TABLE `365wzs_items` (
  `id` int(128) NOT NULL auto_increment,
  `num_iid` varchar(50) NOT NULL,
  `nick` varchar(128) NOT NULL,
  `title` varchar(128) NOT NULL,
  `cid` int(128) NOT NULL,
  `click_url` varchar(512) NOT NULL,
  `shop_click_url` varchar(512) NOT NULL,
  `pic_url` varchar(128) NOT NULL,
  `price` float NOT NULL,
  `item_location` varchar(128) NOT NULL,
  `click_count` int(128) default '0',
  `rank` int(5) default NULL,
  `update_time` varchar(50) NOT NULL,
  `description` varchar(255) default NULL,
  `user_id` int(11) default NULL,
  `content_id` int(11) default NULL,
  `like_count` int(11) default '0',
  `favor_count` int(11) default '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `num_iid` (`num_iid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

INSERT INTO `365wzs_items` VALUES (1, '15646982545', '', '南京云锦特色产品 云锦鼠标垫/中国特色外事礼品送老外出国礼品', 2, 'http://item.taobao.com/item.htm?spm=a230r.1.10.30.ODNI9O&id=15646982545', 'http://item.taobao.com/item.htm?spm=a230r.1.10.30.ODNI9O&id=15646982545', 'http://img07.taobaocdn.com/bao/uploaded/i7/T1rbHEXoxhXXavrTQ1_042501.jpg', 0, '', 0, NULL, '1363158130', '测试添加商品到专刊', 1, 5, 0, 0);
INSERT INTO `365wzs_items` VALUES (2, '9954190437', '', '中国特色小礼物 复古丝绸双面镜 结婚喜宴回礼品 涉外事出国 镜子', 1, 'http://item.taobao.com/item.htm?spm=a230r.1.10.194.dX4Ssf&id=9954190437&_u=canhs0s8e83', 'http://item.taobao.com/item.htm?spm=a230r.1.10.194.dX4Ssf&id=9954190437&_u=canhs0s8e83', 'http://img03.taobaocdn.com/bao/uploaded/i3/T1NW43XktAXXc3AmTb_125245.jpg', 0, '', 0, NULL, '1363158252', '测试分析专刊第二次', 1, 5, 0, 0);
INSERT INTO `365wzs_items` VALUES (3, '14135379025', '西府旗舰店', '【西府】京剧脸谱 泥塑 板子 中国风特色 工艺品 出国外事礼品', 1, 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB07S4%2FK0CFcRfH0G7DLkP9xIxJLW2Wdpn26w%2BLnai%2FwD7oZIF1aoXblvPSn40M9pQpVqFsAfRyilrXNxtxa%2F60JX9lMqtxpu2PKCcTPzGxo3Cvn5nhoRxB%2BfT3jrGR3DnFYRy%2FUXOIFtcb6MlEvKYTVIQRQBSjPDZV5%2Fi%2FGjwNBNye2G4SI6NgyNzrR7Q%3D%3D&spm=2014.12673864.1.0', 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB04MQzdgG69RGcaJPbqJAptU%2FrOZbXWrhLj1U56RuclEQhFl4Xw8QipfyhI0vch7ctESqbLeW5axYm2GPoHDEyCMCyIKvuexEjXyeX5F5xyqsDzlZWoFBWrOS%2BjEGGI%2Benq8ydmcEA3XSFih6E8wZ9r0OYTQ8giN34SVYvw05I%3D&spm=2014.12673864.1.0', 'http://img04.taobaocdn.com/bao/uploaded/i4/17502029924356205/T1CvIOXfBXXXXXXXXX_!!0-item_pic.jpg', 0, '陕西西安', 0, NULL, '1363158470', '这个商品很好看', 1, 5, 0, 0);
INSERT INTO `365wzs_items` VALUES (4, '18014728001', '西府旗舰店', '【西府】不锈钢青花瓷筷子 中国风8件套装 餐具 出国礼品', 1, 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB07S4%2FK0CFcRfH0G7DLkP9xIxJLW2Wdpn26w%2BLnaiwJAgm1T3WQrQX0eoT2%2Fwn7C%2B0mT9EIyLQ41aMrDZVJ3Wccu8%2BLvQeljdtbUpncyQdym%2BtqcSLdfQ38O7XBQGmIgvpCSSdJ3S2%2BFI6gC%2FkpjtoAQs42%2Bdcd27bxlQppeeRzUxv83ZgoDsE2CB22Vg%3D%3D&spm=2014.12673864.1.0', 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB04MQzdgG69RGcaJPbqJAptU%2FrOZbXWrhLj1U56RuQM70Oee1qpvCGJBEUZ3yo9k8jYpeCuKRBPfWoiD%2B4E7RYVjT%2FsxUqN7uJGsjHmj%2FzDLcEEv7iOAEGxZ7dLQnzeRBEQ7XxYChbO8X14RxV3AhRHHMsLoiVcYr7KSg5i73w%3D&spm=2014.12673864.1.0', 'http://img04.taobaocdn.com/bao/uploaded/i4/17502019035752632/T19OQHXmpcXXXXXXXX_!!0-item_pic.jpg', 0, '陕西西安', 0, NULL, '1363161402', '测试', 122, 5, 0, 0);
INSERT INTO `365wzs_items` VALUES (5, '16832839833', '', '陕西 特产 西安 特色 小吃 唐十三 青花瓷十大怪 350克 礼盒装', 1, 'http://item.taobao.com/item.htm?spm=a230r.1.10.170.HQjWNP&id=16832839833&_u=canhs0s726c', 'http://item.taobao.com/item.htm?spm=a230r.1.10.170.HQjWNP&id=16832839833&_u=canhs0s726c', 'http://img01.taobaocdn.com/bao/uploaded/i1/T1dQrZXe0iXXaz5l2a_121914.jpg', 0, '', 0, NULL, '', '', 0, 0, 0, 0);
INSERT INTO `365wzs_items` VALUES (6, '9514621355', '金平利鑫食品专营店', '北京特产 红螺食品 驴打滚 豆沙 200g 特色美食小吃 2斤包邮', 1, 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB07S4%2FK0CFcRfH0G7DLkP9xIxJLW2Wdpn26w%2BLnaiwJAgm1T3WQrQX0eoT2%2Fwn7C%2B0mT9EIyLQ41aMrDZVJ3Wccu8nY71jelK5tALvrSgWG0CuXR0VLIVWx%2BIs%2BtEQ3axDky86L0mKtCITileTBvHGxfQdF5pVjd9zoYE8TZ0d5Us4EnJjZMuFkN4r3&spm=2014.12673864.1.0', 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB04MQzdgG69RGcaJPbqJAptU%2FrOZbXWrhLj1U56RuQM70Oee1qpvCGJBEUZ3yo9k8jYpeCuKRBPfWoiD%2B4E7RYVjTkxGvqCZQL07i3qFTbU4hGew11XpD68XL%2FFCbeAhntQTKcA0kG1Nmt%2BAuv7GXOwolAtKDt80%2FUxqfTz8%2BY%3D&spm=2014.12673864.1.0', 'http://img01.taobaocdn.com/bao/uploaded/i1/T1pep3Xk0oXXav3iU9_103749.jpg', 0, '北京北京', 0, NULL, '1363161606', '好看的衣服~~', 122, 5, 0, 0);
INSERT INTO `365wzs_items` VALUES (7, '3981708140', '', '正浩馅饼 糕点小吃食品 绿豆素饼 厦门鼓浪屿特产馅饼 矿泉水制作', 1, 'http://item.taobao.com/item.htm?id=3981708140&ali_refid=a3_420435_1006:1102554353:6:%CC%D8%C9%AB%D0%A1%B3%D4:24617d1417825161ed802b2f3145b915&ali_trackid=1_24617d1417825161ed802b2f3145b915', 'http://item.taobao.com/item.htm?id=3981708140&ali_refid=a3_420435_1006:1102554353:6:%CC%D8%C9%AB%D0%A1%B3%D4:24617d1417825161ed802b2f3145b915&ali_trackid=1_24617d1417825161ed802b2f3145b915', 'http://img02.taobaocdn.com/bao/uploaded/i2/T1MElSXkRtXXc_c8nb_095051.jpg', 0, '', 0, NULL, '1363161964', '测试', 122, 5, 0, 0);
INSERT INTO `365wzs_items` VALUES (8, '5188343217', '孙大侠gsm', '龙龟尊者 石湾陶瓷公仔/大师原作手工工艺品/收藏商务礼品', 1, 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB07S4%2FK0CITy7klxn%2Fr3HZwuuY0VC7BwYKdml09NJInzldYJgSYwR5NslJCBxFU3UrelTJe4ey8ogFYwyBVXvlWoImrExl%2Fv6e4rZg6RBfJhaY5OLly5pMaaVno2IS1Nmdm1DM61Yrk%2BbDMykd9w6xfL8VzIABiESuq9db%2F3%2F2GEtcoI3nxLnbXivuO&spm=2014.12673864.1.0', 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB04MQzdgG69RGcaJPbqJAptU%2FrOZbXWrhLj1U56RuQM70Oee1qpvCGJBEUZ3yo9k8jYpeCuKRBPfWoiD%2B4E7RYVihG%2BzI5%2FpkPJoXSGu7JbmV7%2FW4hQVI1dzTa%2Bw2l3XYr9aTUbyVP6DCydErEwQvNyd8MUMp43VuxJHjRdnjQ%3D&spm=2014.12673864.1.0', 'http://img08.taobaocdn.com/bao/uploaded/i8/T1lBpyXopBXXbObNYX_085439.jpg', 0, '广东佛山', 0, NULL, '1363162295', '', 122, 5, 0, 0);
INSERT INTO `365wzs_items` VALUES (9, '18771067227', '', '龙泉宝剑凤凰剑镇宅宝剑硬剑手工艺品收藏装饰未开刃', 1, 'http://item.taobao.com/item.htm?spm=a230r.1.10.95.SyM6TB&id=18771067227&_u=canhs0s9fe7', 'http://item.taobao.com/item.htm?spm=a230r.1.10.95.SyM6TB&id=18771067227&_u=canhs0s9fe7', 'http://img01.taobaocdn.com/bao/uploaded/i1/15877031625332238/T13UU6XlVaXXXXXXXX_!!0-item_pic.jpg', 0, '', 0, NULL, '', NULL, 0, 0, 0, 0);
INSERT INTO `365wzs_items` VALUES (10, '13230122574', '', '猫头鹰 天然植物材料 手工编织 树枝猫头鹰 手工艺品M5', 1, 'http://item.taobao.com/item.htm?spm=a230r.1.10.46.SyM6TB&id=13230122574&_u=canhs0s1b27', 'http://item.taobao.com/item.htm?spm=a230r.1.10.46.SyM6TB&id=13230122574&_u=canhs0s1b27', 'http://img03.taobaocdn.com/bao/uploaded/i3/683785340/T2zImXXgtXXXXXXXXX_!!683785340.jpg', 0, '', 0, NULL, '1363514918', '测试一下分享之后会不会修改专刊update时间', 129, 130, 0, 0);
INSERT INTO `365wzs_items` VALUES (11, '27981263', '', '云南丽江纳西族民族工艺品地方特色民族工艺品（中号）放牛娃', 1, 'http://item.taobao.com/item.htm?spm=a230r.1.10.344.ZqKxjB&id=27981263&_u=canhs0s8fe9', 'http://item.taobao.com/item.htm?spm=a230r.1.10.344.ZqKxjB&id=27981263&_u=canhs0s8fe9', 'http://img02.taobaocdn.com/bao/uploaded/i2/T1zwPNXjNmXXalBrZ._081443.jpg', 0, '', 0, NULL, '', NULL, 0, 0, 0, 0);
INSERT INTO `365wzs_items` VALUES (12, '8411415772', '湖湘贡旗舰店', '湖南臭豆腐 80g长沙臭豆腐干 湖南地方特产特色小吃 真空包装零食', 1, 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB07S4%2FK0CFcRfH0G7DLkP9xIxJLW2Wdpn26w%2BLnai0b5zwI5qn6LKxEUkakQjPunYK%2BWVxTtcitQaHT59omNizqpJTFFhst4yBCl0jUQGvz2O7DKwUFV2anmLyVk65HeCbKW7Xo0JGfxmARFV809GlixCUYtWlQCgGVGIvUDEpEnuWNbnuuyAwdyli4&spm=2014.12673864.1.0', 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB04MQzdgG69RGcaJPbqJAptU%2FrOZbXWrhLj1U56RuWxSAHLkLRjWwIpTxrSbBoam91b5BMzJzUYgKQd%2FnbAnL%2B4ASTMp%2FM9ehheIyeaLgOlRTh0d9YM1muYtePAAsP%2FATUNWBLAbPhoApqXCsvsiGDFZbRZv3P1QRl%2FGJl4s%2FI%3D&spm=2014.12673864.1.0', 'http://img01.taobaocdn.com/bao/uploaded/i1/T1X_kqXoNeXXXrmbvX_084327.jpg', 0, '湖南长沙', 0, NULL, '', NULL, 0, 0, 0, 0);
INSERT INTO `365wzs_items` VALUES (13, '10666321226', '悠闲时刻食品专营店', '上海特产 老字号功德林素食食品 五香烤麸 豆干 地方特色小吃零食', 1, 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB07S4%2FK0CFcRfH0G7DLkP9xIxJLW2Wdpn26w%2BLnai0b5zwI5qn6LKxEUkakQjPunYK%2BWVxTtcitQaHT59omNizqpftKhSCoR4qquOL2RRWM1sDRydFfWfPwd0g6nZVpoLYl9YTcQSY1RTmceaGAD9%2BaLuunHYDDGbTduE5vtpDFCfcmxr%2FnHyaoO3ryqA%3D%3D&spm=2014.12673864.1.0', 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB04MQzdgG69RGcaJPbqJAptU%2FrOZbXWrhLj1U56RuWxSAHLkLRjWwIpTxrSbBoam91b5BMzJzUYgKQd%2FnbAnL%2B4APmlTRIZz4PKtrfxq6qfzmhjpZkI1Fp9i0RzBQeProKGG8eVM0w3%2BZCG0x%2FNOtoSB4b78sdygZtACrj7Cn0%3D&spm=2014.12673864.1.0', 'http://img01.taobaocdn.com/bao/uploaded/i1/T1BvG_XohiXXcnEPE3_050531.jpg', 0, '上海上海', 0, NULL, '', NULL, 0, 0, 0, 0);
INSERT INTO `365wzs_items` VALUES (14, '16484205635', '寓意真礼旗舰店', '大百子天津泥人张地方特色手出国送老外礼品中国风圣诞节装饰品', 1, 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB07S4%2FK0CFcRfH0G7DLkP9xIxJLW2Wdpn26w%2BLnai0b5zwI5qn6LKxEUkakQjPunYK%2BWVxTtcitQaHT59omNizqoEXvQLpH3zfphXYMbjt46Vonyq8CM3PMgoifJClxMBust7Cl5qhnEu95PPKKKSEc7gc5xnCdOdhLaSByefuGIwuWJDfqJ10PSG11%2BT0%3D&spm=2014.12673864.1.0', 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB04MQzdgG69RGcaJPbqJAptU%2FrOZbXWrhLj1U56RuWxSAHLkLRjWwIpTxrSbBoam91b5BMzJzUYgKQd%2FnbAnL%2B4BSjPuvWarT4M2nYMp4R0bhZA5RoaCNvdBcStbKaxIfH8YSsW8H3FWDnkl34KcZIw9sFy4GqkIl7GdutFEdbU&spm=2014.12673864.1.0', 'http://img03.taobaocdn.com/bao/uploaded/i3/T1wBAwXdRXXXbpnhIT_011842.jpg', 0, '天津天津', 0, NULL, '', NULL, 0, 0, 0, 0);
INSERT INTO `365wzs_items` VALUES (15, '12367807821', '', '【藏秘珍坊】西藏特产野生雪参 雪人参 碎参 中老年滋补保健 50克', 1, 'http://detail.tmall.com/item.htm?spm=a230r.1.10.2.8pOlYf&id=12367807821&ad_id=&am_id=&cm_id=&pm_id=', 'http://detail.tmall.com/item.htm?spm=a230r.1.10.2.8pOlYf&id=12367807821&ad_id=&am_id=&cm_id=&pm_id=', 'http://img04.taobaocdn.com/bao/uploaded/i4/T1VdmTXcphXXb5w6_a_121654.jpg', 0, '', 0, NULL, '', NULL, 0, 0, 0, 0);
INSERT INTO `365wzs_items` VALUES (16, '13092723777', '琪雅丽人', '东北地方特产/茄子蒂干/干茄子裤干/茄子托干/药用保健纯茄子裤蒂', 1, 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB07S4%2FK0CITy7klxn%2Fr3HZwuuY0VC7BwYKdml09NJPcSS56MOCUCjFc4p3V1fuXwayjGj8vofYJWKHDqmCrz86zYxZCh2OHlQ1PObKPjI%2FP5VPuS7pHDsDgXpYgZ%2BKQyYHPHp5rpryVPlxVKfi%2BJLCqukt2UVNgmMuNh%2F%2Fx7IU7lvLLUsMftAcVasmD&spm=2014.12673864.1.0', 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB04MQzdgG69RGcaJPbqJAptU%2FrOZbXWrhLj1U56RuWxSAHLkLRjWwIpTxrSbBoam91b5BMzJzUYgKQd%2FnbAnL%2B4DJZZJRhAOT6h%2FFDJewMTyyLziF8c5%2Bkjp%2FA9g8zqBeSiJkamGmQTUHjrPwQR%2FWFcX9ad8vxQP8uWBO5Rxg%3D%3D&spm=2014.12673864.1.0', 'http://img01.taobaocdn.com/bao/uploaded/i1/T1oeGSXedqXXcAOw3U_014710.jpg', 0, '北京北京', 0, NULL, '', NULL, 0, 0, 0, 0);
INSERT INTO `365wzs_items` VALUES (17, '18050908857', '春日迟迟521', '岐伯药枕 保健枕头 庆阳香包 岐黄养疗药枕 陇绣 地方特产礼盒', 1, 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB07S4%2FK0CITy7klxn%2Fr3HZwuuY0VC7BwYKdml09NJStgA75DR2CuB64Zrvi%2FQ%2BLxB2f8mvowoNRIeIyGs7DRSco2z%2FwgMdXWuAOHH4UvcEg5%2Fnv147iNThsXH0dSOBwQywJg11zKqFxe6P0tVyglwUaliEz4EJFsrMyJbbJuehCZyeEaIxO6Sjga0l%2F2A%3D%3D&spm=2014.12673864.1.0', 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB04MQzdgG69RGcaJPbqJAptU%2FrOZbXWrhLj1U56RuJPTV9LVMw8t4aHcrkTDhZwbJSXdu0b6XRGZPSZlgFKQnPfICpSVL%2B9NaXiH2tCS1%2BCj1E28igWaFTsZK7O7W9FhnMeSIoM%2BcF4BFr3NqBw2OCmK3hXdGpJQdwG%2Fh28OYQ%3D&spm=2014.12673864.1.0', 'http://img03.taobaocdn.com/bao/uploaded/i3/T1BvPjXexmXXbFsqvX_113908.jpg', 0, '甘肃西峰', 0, NULL, '', NULL, 0, 0, 0, 0);
INSERT INTO `365wzs_items` VALUES (18, '16046678517', '', '千年崖柏 6cm 健身保健球 西藏三宝 抗癌提神神木 仙作精品工艺', 1, 'http://item.taobao.com/item.htm?spm=a230r.1.10.8.3wKrcz&id=16046678517&_u=canhs0s1a42', 'http://item.taobao.com/item.htm?spm=a230r.1.10.8.3wKrcz&id=16046678517&_u=canhs0s1a42', 'http://img03.taobaocdn.com/bao/uploaded/i3/14378028731160149/T1_.3wXapcXXXXXXXX_!!0-item_pic.jpg', 0, '', 0, NULL, '', NULL, 0, 0, 0, 0);
INSERT INTO `365wzs_items` VALUES (19, '14575046133', '', '西藏特产 土特产 2012珍品藏茶野生龙胆花 润肺止咳保健美容养颜', 1, 'http://item.taobao.com/item.htm?spm=a230r.1.10.225.8pOlYf&id=14575046133&_u=canhs0se4b3', 'http://item.taobao.com/item.htm?spm=a230r.1.10.225.8pOlYf&id=14575046133&_u=canhs0se4b3', 'http://img01.taobaocdn.com/bao/uploaded/i1/10773020868939690/T1ci3TXeJeXXXXXXXX_!!0-item_pic.jpg', 0, '', 0, NULL, '', NULL, 0, 0, 0, 0);
INSERT INTO `365wzs_items` VALUES (20, '19806520979', '莲生吉', '西藏雪域康桑极品藏香 高档特醇藏药纯天然手工开光保健香佛香', 1, 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB07S4%2FK0CITy7klxn%2Fr3HZwuuY0VC7BwYKdml09NJStgA75DR2CuB64Zrvi%2FQ%2BLxB2f8mvowoNRIeIyGs7DRSco3LLj5LWYEt2BgWca1byLI4JQ%2F9PBZr%2FPE3PdPi78%2Bdnp5ALqJpUK5iEp82oez3RKhQEYVUQ3CdYfOFpxzd10EOR1Rwg11Zzww2R1&spm=2014.12673864.1.0', 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB04MQzdgG69RGcaJPbqJAptU%2FrOZbXWrhLj1U56RuJPTV9LVMw8t4aHcrkTDhZwbJSXdu0b6XRGZPSZlgFKQnPfJ%2FvMPArqaGPWLJfc7sj0NdV4TFXHWEesk8Xpg8KkQeiOwYvMPS1JWgAF%2BPp08RPe0RgjgR2hM1rG6gNJbg%3D%3D&spm=2014.12673864.1.0', 'http://img01.taobaocdn.com/bao/uploaded/i1/T11dyhXl4kXXXKD.cV_022144.jpg', 0, '四川成都', 0, NULL, '', NULL, 0, 0, 0, 0);
INSERT INTO `365wzs_items` VALUES (21, '13693186173', '异国沉香', '班智达藏香 保健养生 西藏产纯天然手工藏香 藏药材熏香 2筒包邮', 1, 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB07S4%2FK0CITy7klxn%2Fr3HZwuuY0VC7BwYKdml09NJStgA75DR2CuB64Zrvi%2FQ%2BLxB2f8mvowoNRIeIyGs7DRSco2zgsI7TIHf734wQ2dY%2BaDzIGIFxGCCu0UOnZe5mdEmoE4T41OO9k6JqBJcGoNMLrKEHKz8oonW0bkHBDZdgchvLhVGDqQ3MLesVTFQ%3D%3D&spm=2014.12673864.1.0', 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB04MQzdgG69RGcaJPbqJAptU%2FrOZbXWrhLj1U56RuJPTV9LVMw8t4aHcrkTDhZwbJSXdu0b6XRGZPSZlgFKQnPfIC23Kc3t9U3MmIgnFk9tbOMpVM%2BmXUeHDVV2r2B0Wc6sqyFlC6s28xfx1NKVpM1jPv8e%2BYOBpjbLu1P3ynY%3D&spm=2014.12673864.1.0', 'http://img01.taobaocdn.com/bao/uploaded/i1/T1TW5OXk4rXXcFCmba_091927.jpg', 0, '广西防城港', 0, NULL, '', NULL, 0, 0, 0, 0);
INSERT INTO `365wzs_items` VALUES (22, '22512904303', '', '龙乡贡养生保健酒 五指毛桃酒16杯装 配制酒 药酒 河源地方特产', 1, 'http://item.taobao.com/item.htm?spm=a230r.1.10.228.yaAMnu&id=22512904303&_u=canhs0s6232', 'http://item.taobao.com/item.htm?spm=a230r.1.10.228.yaAMnu&id=22512904303&_u=canhs0s6232', 'http://img01.taobaocdn.com/bao/uploaded/i1/10253032072144093/T1VdJXXChdXXXXXXXX_!!0-item_pic.jpg', 0, '', 0, NULL, '', NULL, 0, 0, 0, 0);
INSERT INTO `365wzs_items` VALUES (23, '4710803634', '', '地方特产散装茶美容消脂首选保健茶特级陈年甘甜型柚茶29元/粒', 1, 'http://item.taobao.com/item.htm?spm=a230r.1.10.27.yaAMnu&id=4710803634', 'http://item.taobao.com/item.htm?spm=a230r.1.10.27.yaAMnu&id=4710803634', 'http://img05.taobaocdn.com/bao/uploaded/i5/T1ZO8GXcdfXXX_80.9_102850.jpg', 0, '', 0, NULL, '', NULL, 0, 0, 0, 0);
INSERT INTO `365wzs_items` VALUES (24, '27981325', '', '云南丽江纳西族东巴图腾文化地方特色民族工艺品东巴抽象鱼', 1, 'http://item.taobao.com/item.htm?spm=a230r.1.10.140.GOftfC&id=27981325&_u=canhs0s67ab', 'http://item.taobao.com/item.htm?spm=a230r.1.10.140.GOftfC&id=27981325&_u=canhs0s67ab', 'http://img03.taobaocdn.com/bao/uploaded/i3/T1wsKeXeFdXXazZwg9_073426.jpg', 0, '', 0, NULL, '', NULL, 0, 0, 0, 0);
INSERT INTO `365wzs_items` VALUES (25, '14608888806', '蝶恋花丝巾', '独家专卖西藏纯手工打造纯天然罕见白牦牛角保健手镯手饰不同尺寸', 1, 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB07S4%2FK0CITy7klxn%2Fr3HZwuuY0VC7BwYKdml09NJUMPlp6EQf1ZluGAIleI5Noabzv1tdveBBZBBnXB9pJm1hthJD%2B%2F1yjUgPUMYZa6fvbwUfTicKq901t3sQlFKfn85E5XX%2FPRxBiDrWQqTiYjSO6kDwo7Q8UZ1f5oGkVnJO9VBp0%2BIKbpfHqvdgyJw%3D%3D&spm=2014.12673864.1.0', 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB04MQzdgG69RGcaJPbqJAptU%2FrOZbXWrhLj1U56RuO2ZJdPM4pym5tDD5QYGOE436kvM92YrM86mqieIjEBFX%2FVgtT%2FHOv37omQljLxZvxKn7tRKAFXOOPRvBFwf7cH3Ep5CbkvBFSVmWacT7tUXSu5of6hctVdZvHuuUzqQFU%3D&spm=2014.12673864.1.0', 'http://img08.taobaocdn.com/bao/uploaded/i8/T1MBp5XfVqXXX3UCcU_015652.jpg', 0, '山东青岛', 0, NULL, '', NULL, 0, 0, 0, 0);
INSERT INTO `365wzs_items` VALUES (26, '13791652828', '谭章敏', '特价/广东韶关南雄特色美食/酸菜饼/方便速食休闲食品/', 1, 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB07S4%2FK0CITy7klxn%2Fr3HZwuuY0VC7BwYKdml09NJUMPlp6EQf1ZluGAIleI5Noabzv1tdveBBZBBnXB9pJm1hthJnxi9dJYpmhtZbSgR4mgTX2ht7rWBlXxalRztkkZArPRoaanipJipaxxQemhau%2BlOYId8nPbfvnovum%2B3KhaMpVe4uj5qn4XLX30Q%3D%3D&spm=2014.12673864.1.0', 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB04MQzdgG69RGcaJPbqJAptU%2FrOZbXWrhLj1U56RuO2ZJdPM4pym5tDD5QYGOE436kvM92YrM86mqieIjEBFX%2FVgt0YBYnmh1r6YjxvicWMoW10Dw5uQSTnQouHByDDXG9lEV4S9ogdgfXwdqYihnSw47Aepl8SZxTxaPlB5jw%3D&spm=2014.12673864.1.0', 'http://img01.taobaocdn.com/bao/uploaded/i1/T1IGN5XdFlXXX_j13._112134.jpg', 0, '广东韶关', 0, NULL, '', NULL, 0, 0, 0, 0);
INSERT INTO `365wzs_items` VALUES (27, '7853805334', '丽萍713', '广东特色烧腊--明炉烤鸭/脆皮烧鸭 250克（真空包装）', 1, 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB07S4%2FK0CITy7klxn%2Fr3HZwuuY0VC7BwYKdml09NJUMPlp6EQf1ZluGAIleI5Noabzv1tdveBBZBBnXB9pJm1hthJgJiaJAPjqraRTHYqIYQ1Jsyb%2FcOb0yrkB2Ot5F3rRfIY8%2FVngmc%2FMoDYN%2BqtA%2FL2h6W2nYT9khJXMsYBDu14ikQWIeIXKSJ5E%2F&spm=2014.12673864.1.0', 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB04MQzdgG69RGcaJPbqJAptU%2FrOZbXWrhLj1U56RuO2ZJdPM4pym5tDD5QYGOE436kvM92YrM86mqieIjEBFX%2FVgtwJz9uBWmPoHlO%2FQtY01YtYpkmi%2FC%2BRcOuGN%2FxaV8oFeUkDF9jTeKJ6QinuMWghel5HG0y5VUW2TANnGXI%3D&spm=2014.12673864.1.0', 'http://img04.taobaocdn.com/bao/uploaded/i4/13408020236105719/T1a_lEXEBdXXXXXXXX_!!2-item_pic.png', 0, '广东东莞', 0, NULL, '', NULL, 0, 0, 0, 0);
INSERT INTO `365wzs_items` VALUES (28, '4300835573', '潮汕名产', '老潮夫广东特产小吃特价童年零食粤之品潮阳蛋黄酥145g特色食品', 1, 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB07S4%2FK0CITy7klxn%2Fr3HZwuuY0VC7BwYKdml09NJUMPlp6EQf1ZluGAIleI5Noabzv1tdveBBZBBnXB9pJm1htg3DqszM03id1TJgbSgkx%2BBWRkMu2P7PQAprZX4PyNufDVamVJIrU5Dt31w3JPTyU20%2FDwadplbtEZ%2BPTku2uPN6ps69c8%2Bc0aTc%3D&spm=2014.12673864.1.0', 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB04MQzdgG69RGcaJPbqJAptU%2FrOZbXWrhLj1U56RuO2ZJdPM4pym5tDD5QYGOE436kvM92YrM86mqieIjEBFX%2FVhfSDfSitk3Q0hwO6f%2FFxdY5AwuwW4Gy4sY%2FL3KiepDs69E%2BbtibRZf9p1iQLIVCnSbD7sF97OamWO52oOw%3D%3D&spm=2014.12673864.1.0', 'http://img04.taobaocdn.com/bao/uploaded/i4/T1gq19XahvXXcapuTa_091005.jpg', 0, '广东汕头', 0, NULL, '', NULL, 0, 0, 0, 0);
INSERT INTO `365wzs_items` VALUES (29, '7854043122', '丽萍713', '舌尖上的中国 现烤 半肥瘦叉烧肉 香港广东特色美食 250g', 1, 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB07S4%2FK0CITy7klxn%2Fr3HZwuuY0VC7BwYKdml09NJUMPlp6EQf1ZluGAIleI5Noabzv1tdveBBZBBnXB9pJm1hthJgJiaJAPjqraRTHYqIYQ1Jsyb%2FcOb0yrkB2Ot5F3rRfIY8%2FVngmc%2FMoDYN%2BqtA%2FL2h6W2nYT9khJXMsYBDu14ikQWIZkiKTH6vZ&spm=2014.12673864.1.0', 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB04MQzdgG69RGcaJPbqJAptU%2FrOZbXWrhLj1U56RuO2ZJdPM4pym5tDD5QYGOE436kvM92YrM86mqieIjEBFX%2FVgtwJz9uBWmPoHlO%2FQtY01YtYpkmi%2FC%2BRcOuGN%2FxaV8oFeUkDF9jTeKJ6QinuMWghel5HG0y5VUW2TANnGXI%3D&spm=2014.12673864.1.0', 'http://img04.taobaocdn.com/bao/uploaded/i4/T1aztNXoNeXXapjUw8_102133.jpg', 0, '广东东莞', 0, NULL, '', NULL, 0, 0, 0, 0);
INSERT INTO `365wzs_items` VALUES (30, '10952669160', '', '老广州/广东省立中山图书馆 嘉汇汉唐 八折优惠打折折扣*', 1, 'http://detail.tmall.com/item.htm?spm=a230r.1.10.48.AwSuoL&id=10952669160&_u=canhs0seb9f', 'http://detail.tmall.com/item.htm?spm=a230r.1.10.48.AwSuoL&id=10952669160&_u=canhs0seb9f', 'http://img.taobaocdn.com/bao/uploaded/i1/T1TX5jXapnXXbo2EI2', 0, '', 0, NULL, '', NULL, 0, 0, 0, 0);
INSERT INTO `365wzs_items` VALUES (31, '17075714202', '', '草原旭日促销淘宝年货牛肉干风干之零食特色礼盒装318克地域风情', 1, 'http://item.taobao.com/item.htm?spm=a230r.1.10.78.31A8tG&id=17075714202&_u=canhs0s2938', 'http://item.taobao.com/item.htm?spm=a230r.1.10.78.31A8tG&id=17075714202&_u=canhs0s2938', 'http://img02.taobaocdn.com/bao/uploaded/i2/12798021115339617/T1X.s3Xi4aXXXXXXXX_!!0-item_pic.jpg', 0, '', 0, NULL, '', NULL, 0, 0, 0, 0);
INSERT INTO `365wzs_items` VALUES (32, '10349345675', '苏绣厂家', '牡丹刺绣围巾/地域风情礼物/江南特色产物/苏州刺绣/送朋友礼物', 1, 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB07S4%2FK0CITy7klxn%2Fr3HZwuuY0VC7BwYKdml09NJapUd9NMFk3v%2F06haGo8WIKrEzOVL%2BvR8hwWPr1wCQjDOyDrl7eIJ2RfQBAtgmAFHK9KgbDgCgsgc0NXHj89svM3tOQmFRYvnSq3OCJY3Q%2BD5qZxaM2C4t3%2FOfpnpYBweNtUykmPGiUWfBrwmqueg%3D%3D&spm=2014.12673864.1.0', 'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB04MQzdgG69RGcaJPbqJAptU%2FrOZbXWrhLj1U56RuDT4wqRDl0pQyiU1giNUY%2B9kkGNuWhC6VVGshRCkhv0J50Rl6mJmPzddeGOb3ung4384jXVbc8Mv%2FODf2SBnAaYxBEPrKnwyLAzE8DVG%2FtTfzwvp34DaT39lk%2FCZZZYjMU%3D&spm=2014.12673864.1.0', 'http://img03.taobaocdn.com/bao/uploaded/i3/T1SIubXXNvXXaxp8I4_054030.jpg', 0, '江苏苏州', 0, NULL, '', NULL, 0, 0, 0, 0);

CREATE TABLE `365wzs_likes` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

INSERT INTO `365wzs_likes` VALUES (2, 129, 1);
INSERT INTO `365wzs_likes` VALUES (3, 129, 1);

CREATE TABLE `365wzs_messages` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `notice_user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` int(2) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE `365wzs_posts` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `comment` varchar(128) NOT NULL,
  `time` varchar(50) NOT NULL,
  `click_count` int(11) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

INSERT INTO `365wzs_posts` VALUES (1, 2, 1, '还可以', '2013-03-12 19:04:22', 0);

CREATE TABLE `365wzs_profiles` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `description` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;


INSERT INTO `365wzs_profiles` VALUES (1, 121, NULL);
INSERT INTO `365wzs_profiles` VALUES (2, 121, NULL);
INSERT INTO `365wzs_profiles` VALUES (3, 122, NULL);
INSERT INTO `365wzs_profiles` VALUES (4, 129, NULL);

CREATE TABLE `365wzs_registrations` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) default NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `status` varchar(1) default '0',
  `activekey` varchar(128) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;


INSERT INTO `365wzs_registrations` VALUES (1, NULL, 'jonny123', '71e086f1080d6221a0893415d08cb7e3', 'billqiang@qq.com', '0', '0fb9432ef3ee1e9addd8522476ab15de');


CREATE TABLE `365wzs_users` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(128) NOT NULL,
  `nickname` varchar(128) default NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `pic_url` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `address` varchar(128) default NULL,
  `birthdate` varchar(11) default NULL,
  `group_id` int(11) NOT NULL,
  `is_rebot` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=131 ;

INSERT INTO `365wzs_users` VALUES (1, '外乡人\r', '', '', '', '', 'ea38912b0a235c2f7fb63f699be5df8c.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (2, '无名小卒\r', '', '', '', '', 'f19b90ed4f14502e31917dd4f1913104.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (3, '老溜号\r', '', '', '', '', '68aceda9ff548ccf3fdb4ceaf3663867.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (4, 'no\r', '', '', '', '', 'c7af5c89570fb53aec69a180f3436bc9.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (5, '侃呀侃\r', '', '', '', '', '3d1f064e65232c74ed39bd36caf91804.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (6, '我爱微风\r', '', '', '', '', 'd00abc90962cfee299e68a1fdd2f4e8b.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (7, '一老知青\r', '', '', '', '', 'e6378d3bc898f0754344947713ffdde1.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (8, '不灭的灵\r', '', '', '', '', 'f4cae3b368648df74dfcf3a8acada8d8.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (9, '毕静\r', '', '', '', '', '4472ef7ec40605c6b656d0660ab27072.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (10, '珍惜生命\r', '', '', '', '', '7d5d570d80b2fd5a98bc3b5027c23b61.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (11, '普通人\r', '', '', '', '', '3fdc6b8352f0ce53ef71a6147305e027.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (12, '浪迹天涯\r', '', '', '', '', '6f8482a5374554ad537a4bd4cd3a39cd.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (13, '吾临天下\r', '', '', '', '', '965fe69423d6b6820902c727ebb5d91e.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (14, '网景\r', '', '', '', '', 'b84c1a1cc257a4609b812ce9eca2e34a.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (15, '兰馨\r', '', '', '', '', '93fb5922fd01305f6a42630633f03df5.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (16, '蝴蝶\r', '', '', '', '', '4922c9d29b84127ca14f86112b6daa2d.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (17, '职业看客\r', '', '', '', '', '1fa1a2e7959011e0b6407e921217b80d.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (18, '秋叶\r', '', '', '', '', '6d285651b16f96d74ff5e89664be64f9.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (19, '三羊\r', '', '', '', '', '39345c73ebe45da7cd16410badaf59f3.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (20, '老侃\r', '', '', '', '', 'd1f59224ad1a694625444ef701f8cf42.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (21, '外科医生\r', '', '', '', '', '6b0422c221cd36bddeb099ded0b14d26.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (22, '八千里路\r', '', '', '', '', 'bd99e6694813f50a4b58cb04db20dc8f.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (23, '琢人\r', '', '', '', '', 'c1766101b1de941d31fde5917ea0ba69.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (24, '鱼德\r', '', '', '', '', 'f6ae097ce909a57c56e646991ee2b0fb.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (25, '一起开心\r', '', '', '', '', '5e782be80533886c5493ee307052df62.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (26, '一江春水\r', '', '', '', '', 'a805b3284e95fd9623be2e1bac72a54f.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (27, '海蓝蓝\r', '', '', '', '', 'f94941aa41ef9454393f1dae703f8cbf.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (28, '一叶舟\r', '', '', '', '', '4c8ff2e87f34ea21943de61b11ebe3ad.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (29, '遐想之乐\r', '', '', '', '', '5815f2fbddce27fd3a6788dea769e68d.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (30, '澳八\r', '', '', '', '', 'd8aef7fc865a30bf0879610a06cfc02e.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (31, '罗马人\r', '', '', '', '', 'c6892d62e1ff2620e1697b2ce83e5835.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (32, 'ox2uk\r', '', '', '', '', 'a2cae9f87f1dd3b9669de76c91bf2927.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (33, '青青小草\r', '', '', '', '', '59760f492c62ad70ce48eb3a58cb092c.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (34, '麦田扑手\r', '', '', '', '', 'cf720ada8e335f791c62c2216ab10a21.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (35, '晨曦\r', '', '', '', '', 'de482cc38142ec397ce85a8201cf91cc.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (36, '老东西\r', '', '', '', '', 'bb6540e00d07623ef9aedb7a4666b6e4.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (37, '蝌蚪\r', '', '', '', '', '1df1995c4aef7b5bac020f294655b1af.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (38, '小青\r', '', '', '', '', 'e440219329de4c92e496cb2d88cc3c84.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (39, 'No\r', '', '', '', '', '0238864729430361a6877dd0edfb2df2.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (40, '倚梦幻歌\r', '', '', '', '', '5378a81dfd326170e774028707c66114.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (41, '石久\r', '', '', '', '', 'd45382144f27e0f4e6f5c4c70f36422a.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (42, '皆大欢喜\r', '', '', '', '', 'be39abb43deb9b92bc5f89ceeb5247e8.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (43, '衔不住\r', '', '', '', '', '32702d5e3b23b0292840e612544fdee2.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (44, '无为\r', '', '', '', '', '2bd45bdf50dc4e3828f38a3c4d3428a7.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (45, '君子兰\r', '', '', '', '', 'e9a1dca276e7f7959420b10f7100846e.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (46, '观虎斗\r', '', '', '', '', 'c83c107e0fe8e54824422fbbfa0a6a49.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (47, '日出\r', '', '', '', '', '064185ca9f5e763fe49b1fad740d0959.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (48, '西外\r', '', '', '', '', '82092a76d7c992e11a7559d69e094008.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (49, '化石。\r', '', '', '', '', '54125096223ccbed50294a51470ba161.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (50, '寒江雪\r', '', '', '', '', 'ddb896ba327235ce89944431b066ac2c.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (51, 'vanchael\r', '', '', '', '', '21ab7366314c36aa65ee8ecd28e0ad70.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (52, '心琴\r', '', '', '', '', '71bd39e0c011dcce9e814c42a5d2e918.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (53, '泉水\r', '', '', '', '', '7c48914f1ae53ee0515fff060095d831.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (54, '微坛骑士\r', '', '', '', '', 'e219bb4a4b51c7b1157162e35f219ea5.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (55, 'Timothy\r', '', '', '', '', '458831546672f2fcad14356a8bfc0ae2.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (56, '荷荷\r', '', '', '', '', '9d43a4dd3ff0528dd903f9b00ec3c486.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (57, '春竹/秋叶\r', '', '', '', '', '6342e19cd0e76615fbf68a5acfd2aca4.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (58, '海鸥\r', '', '', '', '', 'c5bf0da85415802efcc45913a496cbb3.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (59, 'Bell\r', '', '', '', '', '2cb665bb4e909c48cfce334b073ce3c5.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (60, '一帆\r', '', '', '', '', 'e5c8ad50414775be6c36ccae99b74904.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (61, '水手\r', '', '', '', '', 'd3673e4577eaa845e8cc210eeb37a6eb.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (62, '罗真人\r', '', '', '', '', '76dc2ff605cb356255f2af1711f0fcf2.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (63, '曾经年轻\r', '', '', '', '', 'a40b8ae80b7422c33d7346a766ff5b8e.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (64, '别开天地\r', '', '', '', '', '9d2acbbd7ad6cf87dec90338c6593fd4.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (65, '春竹\r', '', '', '', '', 'be076db38fbf10bfbc7f8a3ceb8ab324.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (66, '外科医生。\r', '', '', '', '', 'ea3d9dc4bc7562698368c24ac14a003e.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (67, '职业看客。\r', '', '', '', '', 'e6b62a75d4786b91724e4d4034bb885a.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (68, '毕 静\r', '', '', '', '', '65f605edf316df19e202b244a32e7dea.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (69, '字谜\r', '', '', '', '', '679ae88dd05c09aa9d8577b9851c0ade.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (70, '岁月如歌\r', '', '', '', '', '9902408cd1572806159f3422141978f7.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (71, 'test\r', '', '', '', '', '1fd94de8c776d546d46902d35a437fe2.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (72, 'Stella\r', '', '', '', '', 'efeee76f739af14a2c51744a4c111813.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (73, '云儿\r', '', '', '', '', 'c3654d4b9e2be9988db719311525199c.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (74, '大漠清泉\r', '', '', '', '', '124a010db7c3de9422e41d7623168b71.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (75, '微潭雅士\r', '', '', '', '', '32a5bf7d2413e928c99b50bf7631c74e.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (76, 'US citizen\r', '', '', '', '', 'aba4f69666c6fc1dc7355eeb06c15c0c.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (77, '一点点\r', '', '', '', '', '2182e44520de226da1e8e9144b902eae.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (78, '戴过红领巾\r', '', '', '', '', '8c5bb18f2f863942494d6b44abad1456.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (79, '过客\r', '', '', '', '', 'c882b8967316cda410f341cab719a4e6.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (80, '插几句话\r', '', '', '', '', '1399a170c87cd50c27b74b3d72f8f689.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (81, '不是清华人\r', '', '', '', '', 'c4ae6c7c2470b2fb0f78c2ae5d1b8d47.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (82, '化石.\r', '', '', '', '', '15413d09c697a2182b6e6af083933c9b.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (83, 'Lan Xin\r', '', '', '', '', '5795adf7265f1e82a01346a9501c8ba1.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (84, '山青水秀\r', '', '', '', '', '6041fd4bdcb5e36092d7f841526c03ca.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (85, 'Yes\r', '', '', '', '', '0809740c3dae22fd94fb5a4ce192d088.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (86, '读者瞎支招\r', '', '', '', '', '80dd66962963c6d5f7a35117ff400118.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (87, '天涯咫尺\r', '', '', '', '', '040f46eae8a0f767d1d34ca1bf09cf41.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (88, '一毛\r', '', '', '', '', '1871570a0b19fec1a54deba7fdd27fff.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (89, '冬雪\r', '', '', '', '', 'f8e799e2339339918177a4ab64da9a44.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (90, '老溜的粉丝\r', '', '', '', '', '2b3a01e14c985f04661cd5bcb197b3a7.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (91, '凡人\r', '', '', '', '', 'b1fda978f00c9d74723f7e118d2e8c77.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (92, '彩虹\r', '', '', '', '', '835b781c0b0d4e255d1b5b7edbdfa524.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (93, 'Lily\r', '', '', '', '', 'c49659019625d23cca3969514037d77f.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (94, '听风\r', '', '', '', '', 'd17deb2d4a42b8648d96db71c53c8338.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (95, 'CZ\r', '', '', '', '', '7913b5e94a6edddfc26c0ed2d39fefb7.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (96, '知音难觅\r', '', '', '', '', '8e7bf7f711cd9ef2c910836c6efbb753.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (97, '白云\r', '', '', '', '', 'a03f581c947c17af88f952a4a6dd40f7.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (98, '学人\r', '', '', '', '', 'df6c902d15a2deff44b2303c9daf57e5.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (99, '无言\r', '', '', '', '', 'f3b396ebe3f10dcc259073120cbc8447.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (100, '一佛光人\r', '', '', '', '', 'c1d6c3f5e32c44e320ee1ecf398641b1.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (101, '小土豆\r', '', '', '', '', '5c70afbdafc5093762705df2f8dff9f0.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (102, '绿茵\r', '', '', '', '', '9b2299330300c499b2d4e75029cb235c.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (103, '医生的妻子\r', '', '', '', '', 'd171ab8227d6c24fc27a877543d68def.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (104, '夏草\r', '', '', '', '', '9e6b8f61fbae4f33ffa1737d8f490134.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (105, 'newmic2\r', '', '', '', '', 'bed31516609523454fbdbb917d722108.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (106, '侃呀侃之灵\r', '', '', '', '', '604f8db3aa720feee9326d3de3112247.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (107, 'PhotoDude\r', '', '', '', '', '9d0e889aec22054fd6ed7a79fc2c7127.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (108, '专业黄绿\r', '', '', '', '', 'ed5e9f8d5c2bd9963d5a7d43d47a6c04.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (109, '好玩\r', '', '', '', '', '4ae40d02cd78a37f7b71e020fc21ff26.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (110, '鸽子\r', '', '', '', '', '2c3ff1c12a2090836db68294e99e3a8c.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (111, 'ice3\r', '', '', '', '', '17c80f3cd64925466ba9b848ca6e4b36.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (112, '云之上\r', '', '', '', '', 'ead5f8f2359d895221f5fdd58c7a5536.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (113, '妙玉\r', '', '', '', '', '605ba271d6519c4587bb09f4186774e2.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (114, '大连原子\r', '', '', '', '', '353921e07a35d0c80b80d78683241d2a.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (115, '辖醋\r', '', '', '', '', '168d3a0a168bf1e7353765b7bab10c2b.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (116, '配角(男)\r', '', '', '', '', 'f3b29bd0c4e2cfa88ebfb2b319ae15b7.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (117, '巴黎人\r', '', '', '', '', '388789a7251ce18854ff640b158de4c2.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (118, '清华的落后分子\r', '', '', '', '', '42fe21d723e4e52e1ae5f8754a1ee942.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (119, '君\r', '', '', '', '', 'dc1d1fca4894107f67d91e93054551c5.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (120, '退一步\r', '', '', '', '', 'dd3390602e7ebc7ba54cedb612783f7b.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (130, 'test', NULL, 'test', 'test@test.com', '', '', '', NULL, NULL, 0, 0);
INSERT INTO `365wzs_users` VALUES (127, '梦中所梦', NULL, '', '', '', '6a9b3ae85fd575f7c785eb2bc891262e.jpg', '', NULL, NULL, 0, 1);
INSERT INTO `365wzs_users` VALUES (129, 'jonny123', 'jonny123', '71e086f1080d6221a0893415d08cb7e3', 'cs@cs.com', '男', '0b9c79a0d88ca8afba8ea3088242dacc.jpg', '还不错。', NULL, '', 0, 0);

CREATE TABLE `365wzs_user_groups` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

INSERT INTO `365wzs_user_groups` VALUES (22, 4, 3);
INSERT INTO `365wzs_user_groups` VALUES (13, 2, 4);
INSERT INTO `365wzs_user_groups` VALUES (19, 2, 1);
INSERT INTO `365wzs_user_groups` VALUES (21, 4, 1);
INSERT INTO `365wzs_user_groups` VALUES (23, 4, 6);
INSERT INTO `365wzs_user_groups` VALUES (25, 4, 5);
INSERT INTO `365wzs_user_groups` VALUES (26, 4, 7);

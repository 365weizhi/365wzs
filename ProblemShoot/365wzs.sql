

DROP TABLE IF EXISTS `365wzs_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `365wzs_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `nick` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50020858 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `365wzs_categories`
--

LOCK TABLES `365wzs_categories` WRITE;
/*!40000 ALTER TABLE `365wzs_categories` DISABLE KEYS */;
INSERT INTO `365wzs_categories` VALUES (26,'æ±½è½¦/ç”¨å“/é…ä»¶/æ”¹è£…','Test Add 2'),(50020808,'fTest nick','å®¶å±…é¥°å“'),(50020857,'Test Tese','ç‰¹è‰²æ‰‹å·¥è‰º');
/*!40000 ALTER TABLE `365wzs_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `365wzs_contents`
--

DROP TABLE IF EXISTS `365wzs_contents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `365wzs_contents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50020862 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `365wzs_contents`
--

LOCK TABLES `365wzs_contents` WRITE;
/*!40000 ALTER TABLE `365wzs_contents` DISABLE KEYS */;
INSERT INTO `365wzs_contents` VALUES (50020859,'Test Content 2',3),(50020858,'Test Content 1',0),(50020860,'default',14),(50020861,'default',15);
/*!40000 ALTER TABLE `365wzs_contents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `365wzs_favors`
--

DROP TABLE IF EXISTS `365wzs_favors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `365wzs_favors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `click_count` int(11) DEFAULT '0',
  `content_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `365wzs_favors`
--

LOCK TABLES `365wzs_favors` WRITE;
/*!40000 ALTER TABLE `365wzs_favors` DISABLE KEYS */;
INSERT INTO `365wzs_favors` VALUES (1,1,1,'It\'s ok',NULL,50026316),(2,2,2,'test add favor',NULL,50020858),(3,3,1,'',0,50020859),(4,3,1,'testa',0,50020859),(5,3,1,'My favorite',0,50020859),(6,3,1,'',0,50020859),(7,3,1,'Share',0,50020859),(8,3,6,'test count shared',0,50020859),(9,3,5,'',0,50020859),(10,7,1,'Test test3 favor',0,0),(11,14,1,'like test',0,50020860),(12,14,6,'test favor 2',0,50020860),(13,15,1,'I like it',0,50020861);
/*!40000 ALTER TABLE `365wzs_favors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `365wzs_items`
--

DROP TABLE IF EXISTS `365wzs_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `rank` int(5) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `like_count` int(11) DEFAULT '0',
  `favor_count` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `365wzs_items`
--

LOCK TABLES `365wzs_items` WRITE;
/*!40000 ALTER TABLE `365wzs_items` DISABLE KEYS */;
INSERT INTO `365wzs_items` VALUES (1,'19570336100','wuyixian2009','åŒ…é‚®ç§‹å†¬æ–°æ¬¾å“¥å¼Ÿé¢æ–™å¤§ç å¥³è£¤æ¾ç´§è…°å¼¹åŠ›å°è„šè£¤é“…ç¬”è£¤æ‰“åº•è£¤é´è£¤',162201,162201,'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB07S4%2FK0CITy7klxn%2F7bvn0ay1CgnvZZrsXn0zID3f6gkiSpxhjOguxTX0tryEaXjzq2eY9w%2BMY7aPOmvQ45pSDDZ1kcg5aH%2BE3PegqVtPeSdhULflgu1d4zqvyHoA5VM8Q0JbS%2B18sVHWOETn7bpm1s2BTmi25cwx3%2FH3kKo2%2BEC5oYZ7AyKE%3D&spm=2014.12673864.1.0','http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB04MQzdgG69RGcaJPb63yl1mhX6164Xm9xDGDH%2BTT7fL1JsVmaxB8NAuwOyKd5WuHHwpTxqASgRurek1mPDNBiUjFld8%2Bn35qZTl1aoekN1LMnGx%2BkomCqvCSusSQWzZzHZ9%2BB1xl%2BNkAXT0qmeC%2BDHCHgPJNw0J1OM&spm=2014.12673864.1.0','http://img02.taobaocdn.com/bao/uploaded/i2/T1Y.zQXo0cXXaXtbE._081414.jpg',0,138,'å¹¿ä¸œå¹¿å·ž',NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,5,5),(6,'10823146594','å“å¡è½¦å“ä¸“è¥åº—','æ²¿é€”é«˜æ¡£æ— éª¨é›¨åˆ·å™¨ æ±½è½¦é›¨åˆ®å™¨ é›¨åˆ·èƒ¶æ¡ é›¨åˆ®ç‰‡ é›¨åˆ®èƒ¶æ¡ æ­£å“',50012888,50012888,'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB07S4%2FK0CFcRfH0G7DbPkiN9MMKobtjBSFWgnaMe4XXej%2BhkyDChiwYC4J4Y3Cqhl%2BDnAXcjC0j%2FIi2MGRB9mEtvrRkgcH9US6aYMk3L4SfeHW2LXYclOCkkV5Z%2FM8k1RV9Ot0INo46cs6rw3xGzYZN9bqono4mMyOcT0EQ6KRLFV7Zi3h7K7U%3D&spm=2014.12673864.1.0','http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB04MQzdgG3VSuWRIvnJbEpKV5PQZdsyOfCnkrlRwXyaRwSxK%2F1KRSO1%2BmI60M9V9tK0lx3yvb%2BtUqfotgtvJ8vwyIwvFcODfsJED8uZd3TIfdC2JG3BP25KshQmZMObti%2BYyXSOa30SFRXBO1zvdrABWBHnIM8sWZM0&spm=2014.12673864.1.0','http://img02.taobaocdn.com/bao/uploaded/i2/T1KAvRXllXXXaQ8s76_060915.jpg',0,25,'æ±Ÿè‹å—äº¬',NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,0,2),(5,'17024960350','å“å¡è½¦å“ä¸“è¥åº—','ç‰¹å– æ²¿é€”å†°ä¸æ±½è½¦ååž« å¤å­£æ±½è½¦åº§åž«å‡‰åž« å››å­£é€šç”¨è½¦åž« æ±½è½¦ç”¨å“',50012090,50012090,'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB07S4%2FK0CFcRfH0G7DbPkiN9MMKobtjBGAHtbA%2BVgjck7jEwYRy6LtRt8Roy9X2HMspWnvlVhbxCbkGCiUji0mbRnKl1%2BZI2gcDIVvX85XFtS3PL%2B1Xh4FEILBS1REnghmKS4N1wBttPzl2fDOzcUSvt53nShUiSq1izF7EIFWqG%2BYhh70joO0%3D&spm=2014.12673864.1.0','http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB04MQzdgG3VSuWRIvnJbEpKV5PQZdsyOLC524ujBqi9WY5Wcat3HzmvG1ypnpr9YFG69%2BXk2ffx654L6Cnv99DYivIc%2F4lEY14L9qSSnJC7erH3l50tE6TqKIgi0EBg9QNcJ1oxh%2B4BFxxGR9c%2FUtXap5Pq%2FZJkOVq8&spm=2014.12673864.1.0','http://img04.taobaocdn.com/bao/uploaded/i4/T19YvkXcXrXXbB4R_b_125152.jpg',0,598,'æ±Ÿè‹å—äº¬',NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,1,1),(4,'15165857066','å“å¡è½¦å“ä¸“è¥åº—','å¡é£žå¾—G37 ä¸ªæ€§æ±½è½¦è´´çº¸ baby in car å¯çˆ±è½¦èº«è´´ åå…‰è´´ æžç¬‘',50010665,50010665,'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB07S4%2FK0CFcRfH0G7DbPkiN9MMKobtgFgvw9FK9AXjFVGLkXtcas01x44YkH2iuAQuzECXhFPU0qgIj3VfcW1PMV%2FPTGYdn9RwGNhif7xFoIHZdk1wN%2BYH0I%2Fh8%2FJ1hqxdOeaUvRC9EhfjFkovHkRgurdDA6avpB0QsCQSP5HLnHFJlelviRho%3D&spm=2014.12673864.1.0','http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB04MQzdgG3VSuWRIvnJbEpKV5PQZdsxxMHLRJz8B4rLVpHGBMEaWN6%2BR7QLTPm3MpXXhJmcW01b%2Fn58r7hAcWOXPOW2MaO9iYRuH3A4R3KBPwcYHgcPqZ%2Fxw13H8Rc8B3ZpwEV5gy0ayWzV34UUHQr94hg4PEPGeo9S&spm=2014.12673864.1.0','http://img02.taobaocdn.com/bao/uploaded/i2/T12YnsXnxcXXXLOFQ__105237.jpg',0,4.8,'æ±Ÿè‹å—äº¬',NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,0,0),(7,'12909410729','å“å¡è½¦å“ä¸“è¥åº—','æ²¿é€”Y35 è½¦ç”¨é›¨åˆ·ç²¾ æ±½è½¦çŽ»ç’ƒæ°´é›¨åˆ®ç²¾ é«˜æ•ˆèƒ½ æµ“ç¼©çŽ»ç’ƒæ¸…æ´—å‰‚',260605,260605,'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB07S4%2FK0CFcRfH0G7DbPkiN9MMKobtjBSO5iMfoEzXyu%2FBa5YMHOuteVRTUMo0%2BqSb6itf0Vx1o8d9W1Vg7MEbhEOk8Kqc55VrkpPf2Ps2WUEb9xS9XY0sjWodLua0fc1X5euJ%2Bz1IAlHpMqa%2BhQa7qEmtfqu9Nm3wqtsOp3k1IU2w57xLdt9g%3D&spm=2014.12673864.1.0','http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB04MQzdgG3VSuWRIvnJbEpKV5PQZdsyOfKRRuXKoooivrnDNVkpmaWrQiubcd952i3m4nRY0myEVRxKlFBODRBEXGWZjowjXBEwICsbcv%2FLCltNinfl8QFPMFmTz7%2FYev6qOfGDZcNGIyFUz31DyMzH1DFJJZozqA3r&spm=2014.12673864.1.0','http://img02.taobaocdn.com/bao/uploaded/i2/T1qSfIXlRcXXc8pXwW_022321.jpg',0,8.5,'æ±Ÿè‹å—äº¬',NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,0,0),(8,'12909410729','å“å¡è½¦å“ä¸“è¥åº—','æ²¿é€”Y35 è½¦ç”¨é›¨åˆ·ç²¾ æ±½è½¦çŽ»ç’ƒæ°´é›¨åˆ®ç²¾ é«˜æ•ˆèƒ½ æµ“ç¼©çŽ»ç’ƒæ¸…æ´—å‰‚',260605,260605,'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB07S4%2FK0CFcRfH0G7DbPkiN9MMKobtjBSO65qg1kFdChncsn9uXYv2GDk1xeIwIZtJ4k45%2BPEnZ%2F4jY2Av6w50fgS%2BDXyITo4vScUN2DEyy%2BSk%2BKseNil6RW1u93sa7Zdmt7FXzpKwBe6tGbhuFZb6bn1a1QPHzEzrHW8b%2Fp2TotkIQrugB794%3D&spm=2014.12673864.1.0','http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB04MQzdgG3VSuWRIvnJbEpKV5PQZdsyOfKSRa77b651tvGMvOjy7YLBNE1iqwq6cIvO8sKkDIrwKjj2BzgkVmAunxwMVc2QHmIyWeRhU6sYxvfW8XL7Nqsm63OQj9Vx4HGXzbfg1vXCZxyAdRH3pA8brOkVW2nS3Nka&spm=2014.12673864.1.0','http://img02.taobaocdn.com/bao/uploaded/i2/T1qSfIXlRcXXc8pXwW_022321.jpg',0,8.5,'æ±Ÿè‹å—äº¬',NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,0,0),(9,'10823146594','å“å¡è½¦å“ä¸“è¥åº—','æ²¿é€”é«˜æ¡£æ— éª¨é›¨åˆ·å™¨ æ±½è½¦é›¨åˆ®å™¨ é›¨åˆ·èƒ¶æ¡ é›¨åˆ®ç‰‡ é›¨åˆ®èƒ¶æ¡ æ­£å“',50012888,50012888,'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB07S4%2FK0CFcRfH0G7DbPkiN9MMKobtjBSO65qg1kFdChncsn9uXYv2GDk1xeIwIZtJ4k45%2BPEnZ%2F4jY2Av6w50fgS%2BDXyITo4vScUN2DEyy%2BSk%2BKseNil6RW1u93sa7Zdmt7FXzpKwBe6tGbhuFZb6bn1a1QPHzEzrHW8b%2Fp2YZmf9sWOnrUHg%3D&spm=2014.12673864.1.0','http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB04MQzdgG3VSuWRIvnJbEpKV5PQZdsyOfKSRa77b651tvGMvOjy7YLBNE1iqwq6cIvO8sKkDIrwKjj2BzgkVmAunxwMVc2QHmIyWeRhU6sYxvfW8XL7Nqsm63OQj9Vx4HGXzbfg1vXCZxyAdRH3pA8brOkVW2nS3Nka&spm=2014.12673864.1.0','http://img02.taobaocdn.com/bao/uploaded/i2/T1KAvRXllXXXaQ8s76_060915.jpg',0,25,'æ±Ÿè‹å—äº¬',NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,1,0);
/*!40000 ALTER TABLE `365wzs_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `365wzs_items_categories`
--

DROP TABLE IF EXISTS `365wzs_items_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `365wzs_items_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `365wzs_items_categories`
--

LOCK TABLES `365wzs_items_categories` WRITE;
/*!40000 ALTER TABLE `365wzs_items_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `365wzs_items_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `365wzs_likes`
--

DROP TABLE IF EXISTS `365wzs_likes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `365wzs_likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `365wzs_likes`
--

LOCK TABLES `365wzs_likes` WRITE;
/*!40000 ALTER TABLE `365wzs_likes` DISABLE KEYS */;
INSERT INTO `365wzs_likes` VALUES (1,3,6,''),(2,3,1,'test like count'),(3,3,1,'test like count'),(4,3,5,'test like share'),(5,3,9,''),(6,7,1,'like lo'),(7,14,1,'like'),(8,15,1,'Because i like it');
/*!40000 ALTER TABLE `365wzs_likes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `365wzs_messages`
--

DROP TABLE IF EXISTS `365wzs_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `365wzs_messages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `notice_user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` int(2) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `365wzs_messages`
--

LOCK TABLES `365wzs_messages` WRITE;
/*!40000 ALTER TABLE `365wzs_messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `365wzs_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `365wzs_posts`
--

DROP TABLE IF EXISTS `365wzs_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `365wzs_posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `descs` varchar(128) NOT NULL,
  `click_count` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `365wzs_posts`
--

LOCK TABLES `365wzs_posts` WRITE;
/*!40000 ALTER TABLE `365wzs_posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `365wzs_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `365wzs_profiles`
--

DROP TABLE IF EXISTS `365wzs_profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `365wzs_profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `pic_url` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `365wzs_profiles`
--

LOCK TABLES `365wzs_profiles` WRITE;
/*!40000 ALTER TABLE `365wzs_profiles` DISABLE KEYS */;
/*!40000 ALTER TABLE `365wzs_profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `365wzs_registrations`
--

DROP TABLE IF EXISTS `365wzs_registrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `365wzs_registrations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `status` varchar(1) DEFAULT '0',
  `activekey` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `365wzs_registrations`
--

LOCK TABLES `365wzs_registrations` WRITE;
/*!40000 ALTER TABLE `365wzs_registrations` DISABLE KEYS */;
INSERT INTO `365wzs_registrations` VALUES (1,NULL,'test3','098f6bcd4621d373cade4e832627b4f6','t@q.com','0','7000f50d5fb198e669cabeb983ccd9ec'),(2,NULL,'test4','098f6bcd4621d373cade4e832627b4f6','terst@qq.com','0','de2415a5fcc0551d1d9890fc8b5d03a6'),(3,NULL,'test4','098f6bcd4621d373cade4e832627b4f6','','0','2ea1cae28cb13afe43c3c545d28ef072'),(4,NULL,'activate','098f6bcd4621d373cade4e832627b4f6','test@qq.com','0','1926deef49be25123914597efac1ad31'),(5,NULL,'testContent','45edd741812abf42a7b799a6fc558d9c','test@qq.com','0','4e36b0d16382c01ec7a8b9091306d64b'),(6,NULL,'testContent2','098f6bcd4621d373cade4e832627b4f6','test@qq.com','0','b8017364797f2d0dde8f6fee763ffe51'),(7,NULL,'jonny','098f6bcd4621d373cade4e832627b4f6','test@qq.com','0','da480cd757a7b91d3118dc3417943782');
/*!40000 ALTER TABLE `365wzs_registrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `365wzs_users`
--

DROP TABLE IF EXISTS `365wzs_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `365wzs_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `365wzs_users`
--

LOCK TABLES `365wzs_users` WRITE;
/*!40000 ALTER TABLE `365wzs_users` DISABLE KEYS */;
INSERT INTO `365wzs_users` VALUES (1,'whenjonny','whenjonny','whenjonny@gmail.com'),(2,'username','password','whenjonny@gmail.com'),(3,'test','098f6bcd4621d373cade4e832627b4f6',''),(4,'test','098f6bcd4621d373cade4e832627b4f6',''),(5,'test2','d41d8cd98f00b204e9800998ecf8427e',''),(6,'','','t@q.com'),(7,'test3','098f6bcd4621d373cade4e832627b4f6','t@q.com'),(8,'test3','098f6bcd4621d373cade4e832627b4f6','t@q.com'),(9,'test4','test','test@qq.com'),(10,'activate','098f6bcd4621d373cade4e832627b4f6','test@qq.com'),(11,'test','test','test@test.com'),(12,'test','test','test@test.com'),(13,'testContent','45edd741812abf42a7b799a6fc558d9c','test@qq.com'),(14,'testContent2','098f6bcd4621d373cade4e832627b4f6','test@qq.com'),(15,'jonny','098f6bcd4621d373cade4e832627b4f6','test@qq.com');
/*!40000 ALTER TABLE `365wzs_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-12-20  0:16:54

-- MySQL dump 10.13  Distrib 5.5.22, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: 365wzs
-- ------------------------------------------------------
-- Server version	5.5.22-0ubuntu1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `365wzs_cats`
--

DROP TABLE IF EXISTS `365wzs_cats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `365wzs_cats` (
  `id` int(11) NOT NULL,
  `name` varchar(128) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `365wzs_cats`
--

LOCK TABLES `365wzs_cats` WRITE;
/*!40000 ALTER TABLE `365wzs_cats` DISABLE KEYS */;
INSERT INTO `365wzs_cats` VALUES (0,'Cloths'),(1,'Coats'),(2,'Tshirts'),(50023950,'å®žä½“æœåŠ¡'),(26,'æ±½è½¦/ç”¨å“/é…ä»¶/æ”¹è£…'),(50020808,'å®¶å±…é¥°å“'),(50020857,'ç‰¹è‰²æ‰‹å·¥è‰º'),(50025707,'æ™¯ç‚¹é—¨ç¥¨/åº¦å‡çº¿è·¯/æ—…æ¸¸æœåŠ¡'),(30,'ç”·è£…'),(50230002,'æœåŠ¡å•†å“'),(50158001,'ç½‘ç»œåº—é“ºä»£é‡‘/ä¼˜æƒ åˆ¸'),(50026316,'èŒ¶/é…’/å†²é¥®');
/*!40000 ALTER TABLE `365wzs_cats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `365wzs_contents`
--

DROP TABLE IF EXISTS `365wzs_contents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `365wzs_contents` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `365wzs_contents`
--

LOCK TABLES `365wzs_contents` WRITE;
/*!40000 ALTER TABLE `365wzs_contents` DISABLE KEYS */;
INSERT INTO `365wzs_contents` VALUES (50026316,'èŒ¶/é…’/å†²é¥®');
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
  `descs` varchar(128) NOT NULL,
  `click_count` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `365wzs_favors`
--

LOCK TABLES `365wzs_favors` WRITE;
/*!40000 ALTER TABLE `365wzs_favors` DISABLE KEYS */;
INSERT INTO `365wzs_favors` VALUES (1,1,1,'hello',0);
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
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `365wzs_items`
--

LOCK TABLES `365wzs_items` WRITE;
/*!40000 ALTER TABLE `365wzs_items` DISABLE KEYS */;
INSERT INTO `365wzs_items` VALUES (26,'16466838268','y1983827741','2012æ–°æ¬¾è€å…‹ç™»å±±å¥³éž‹2018åŠ ç»’ NIKEåŠ æ¯›ç§‹å†¬æ¬¾å¤šè‰²ä¼‘é—²è¿åŠ¨çŽ°è´§',50012036,50012036,'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB07S4%2FK0CITy7klxn%2F7bvn0ay1DdMFcTPSdVR%2FMm1IKi15%2FIzi1W%2Bb%2FzExp%2BYlkNr9Cu1DUftHFKfnUkrWFtPQUIcG9vCRyDRPM5HLy31QlzEegTyDhBJhwi3JNAhObFyWIAgth19mqP8Kuy62y4Z43c%2BrH5%2FNVdZIVocS9OYqJdBTAKeUO%2FKU%3D&spm=2014.12673864.1.0','http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB04MQzdgG69RGcaJPb63yl1mhX76yQU9sOism%2BckgxNiYfCCJJUM2NlmDk7z2k366TQwXNQiBK3u177RSQvxP3QK15jyjrWjPOWCJsA6iGTitsjCCxw09iHPHF7WjbnUZOtcUczlFNJw0FM12Wka7vj%2FciQEQ3U9osn&spm=2014.12673864.1.0','http://img05.taobaocdn.com/bao/uploaded/i5/T1hGaJXeJpXXXk3SQ6_062744.jpg',0,568,'ç¦å»ºåŽ¦é—¨',NULL,NULL,NULL,NULL,NULL,0),(27,'17963407096','èŒ¶èŒ¶hx','æ­£å“ è€å…‹Nike Zoom Rookie penny ç°è“å–· ç¯®çƒ è¿åŠ¨ ä¹”ä¸¹éž‹ ç”·éž‹',50012031,50012031,'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB07S4%2FK0CITy7klxn%2F7bvn0ay1DdMFcTPSdVR%2FMm1IKi15%2FIzi1W%2Bb%2FzExp%2BYlkNr9Cu1DUftHFKfnUkr7Ja4utsUx70UdOgcsOUqYDwHAnNkhANbZbCuYm7T%2FxXEWobsVlxr66yx07OVmv%2FUqO1x5aoQnX9wOQmu%2FEu%2BAVeMfnfUZwO9QpUe0%3D&spm=2014.12673864.1.0','http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB04MQzdgG69RGcaJPb63yl1mhX76yQU9sOism%2BckgxNiYfCCJJUM2NlmDk7z2k366TQwXNQiBK3u177RS9xRj12gRKXbqogpf6sptxnWIhazvuUb9yfcbb3Iny7A4I14QtXR6rB%2B2RNyKSu0MiMzJabmtI%2FJ4YBe28q&spm=2014.12673864.1.0','http://img01.taobaocdn.com/bao/uploaded/i1/T1kG29XflkXXcFn935_060132.jpg',0,949,'å¹¿ä¸œä¸œèŽž',NULL,NULL,NULL,NULL,NULL,0),(28,'20929112868','èŒ¶èŒ¶hx','æ­£å“è€å…‹ NIKE AIR JORDAN 9 RETRO AJ9é™é‡ ç¯®çƒ è¿åŠ¨ å›žåŠ› ç”·éž‹',50012031,50012031,'http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB07S4%2FK0CITy7klxn%2F7bvn0ay1DdMFcTPSdVR%2FMm1IKi15%2FIzi1W%2Bb%2FzExp%2BYlkNr9Cu1DUftHFKfnUkr7Ja4utsUx70UdOgcsOUqYDwHAnNkhANbZbCuYm7T%2FxXEWobsVlxr66yx07OVmv%2FUqO1x5aoQnX9wOQmu%2FEu%2BAVe9Ov38q5HRyXsRk%3D&spm=2014.12673864.1.0','http://s.click.taobao.com/t?e=zGU34CA7K%2BPkqB04MQzdgG69RGcaJPb63yl1mhX76yQU9sOism%2BckgxNiYfCCJJUM2NlmDk7z2k366TQwXNQiBK3u177RS9xRj12gRKXbqogpf6sptxnWIhazvuUb9yfcbb3Iny7A4I14QtXR6rB%2B2RNyKSu0MiMzJabmtI%2FJ4YBe28q&spm=2014.12673864.1.0','http://img02.taobaocdn.com/bao/uploaded/i2/T1qJT8XfhcXXXr.aE__105343.jpg',0,580,'å¹¿ä¸œä¸œèŽž',NULL,NULL,NULL,NULL,NULL,0);
/*!40000 ALTER TABLE `365wzs_items` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `365wzs_posts`
--

LOCK TABLES `365wzs_posts` WRITE;
/*!40000 ALTER TABLE `365wzs_posts` DISABLE KEYS */;
INSERT INTO `365wzs_posts` VALUES (1,1,1,'Test the first time',0),(2,1,1,'helloworld',0);
/*!40000 ALTER TABLE `365wzs_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `365wzs_thumbs`
--

DROP TABLE IF EXISTS `365wzs_thumbs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `365wzs_thumbs` (
  `id` int(128) NOT NULL AUTO_INCREMENT,
  `status` int(1) NOT NULL,
  `median_url` varchar(128) DEFAULT NULL,
  `small_url` varchar(128) DEFAULT NULL,
  `item_id` int(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `365wzs_thumbs`
--

LOCK TABLES `365wzs_thumbs` WRITE;
/*!40000 ALTER TABLE `365wzs_thumbs` DISABLE KEYS */;
INSERT INTO `365wzs_thumbs` VALUES (11,1,NULL,NULL,0),(12,1,NULL,NULL,0),(13,1,NULL,NULL,0),(14,1,NULL,NULL,0),(15,1,NULL,NULL,0),(16,1,NULL,NULL,0),(17,1,NULL,NULL,0),(18,1,NULL,NULL,0),(19,1,NULL,NULL,0);
/*!40000 ALTER TABLE `365wzs_thumbs` ENABLE KEYS */;
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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `365wzs_users`
--

LOCK TABLES `365wzs_users` WRITE;
/*!40000 ALTER TABLE `365wzs_users` DISABLE KEYS */;
INSERT INTO `365wzs_users` VALUES (1,'username','5f4dcc3b5aa765d61d8327deb882cf99','test@qq.com'),(2,'username','5f4dcc3b5aa765d61d8327deb882cf99','email@qq.com'),(3,'username2','5f4dcc3b5aa765d61d8327deb882cf99','email@qq.com');
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

-- Dump completed on 2012-12-09 11:21:34

-- MySQL dump 10.13  Distrib 5.1.73, for redhat-linux-gnu (x86_64)
--
-- Host: localhost    Database: gentai
-- ------------------------------------------------------
-- Server version	5.1.73

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
-- Table structure for table `gt_protablekp`
--

DROP TABLE IF EXISTS `gt_protablekp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gt_protablekp` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'å”¯ä¸€è‡ªå¢žid',
  `cid` int(11) NOT NULL COMMENT 'ä¸»æ¡ç›®id',
  `kdate` varchar(20) NOT NULL COMMENT 'å¼€ç¥¨æ—¥æœŸ',
  `kom` int(10) NOT NULL COMMENT 'å¼€ç¥¨é‡‘é¢',
  `fsdate` varchar(20) NOT NULL COMMENT 'å‘ç¥¨å¯„é€æ—¥æœŸ',
  `fstype` varchar(100) NOT NULL COMMENT 'å‘ç¥¨å¯„å¯„é€æ–¹å¼',
  `vtax` int(10) NOT NULL COMMENT 'å¢žå€¼ç¨Žé¢',
  `othertax` int(10) NOT NULL COMMENT 'å…¶ä»–ç¨Žé¢',
  `salescost` int(10) NOT NULL COMMENT 'å”®å‰æˆæœ¬',
  `thingcost` int(10) NOT NULL COMMENT 'é…ä»¶æˆæœ¬',
  `sentcost` int(10) NOT NULL COMMENT 'é€è´§æˆæœ¬',
  `mancost` int(10) NOT NULL COMMENT 'äººåŠ›æˆæœ¬',
  `cost` int(10) NOT NULL COMMENT 'æ€»æˆæœ¬',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gt_protablekp`
--

LOCK TABLES `gt_protablekp` WRITE;
/*!40000 ALTER TABLE `gt_protablekp` DISABLE KEYS */;
INSERT INTO `gt_protablekp` VALUES (7,6,'12',12,'12','12',0,0,0,0,0,0,0),(8,6,'22',22,'22','22',0,0,0,0,0,0,0);
/*!40000 ALTER TABLE `gt_protablekp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gt_protables`
--

DROP TABLE IF EXISTS `gt_protables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gt_protables` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'å”¯ä¸€è‡ªå¢žid',
  `cid` int(1) NOT NULL DEFAULT '1' COMMENT 'å°ç»„åˆ†ç±»id',
  `date` varchar(15) NOT NULL COMMENT 'å¡«è¡¨æ—¥æœŸå­—ç¬¦ä¸²',
  `author` varchar(10) NOT NULL COMMENT 'å¡«è¡¨äºº',
  `customer_a` varchar(20) NOT NULL COMMENT 'å®¢æˆ·å•ä½',
  `customer_b` varchar(10) NOT NULL COMMENT 'å®¢æˆ·å§“å',
  `salesman` varchar(10) NOT NULL COMMENT 'ä¸šåŠ¡è´Ÿè´£äºº',
  `mdate` varchar(15) NOT NULL COMMENT 'æˆ‘æ–¹ç­¾å­—å­—ç¬¦ä¸²',
  `ydate` varchar(15) NOT NULL COMMENT 'å®¢æˆ·ç­¾å­—å­—ç¬¦ä¸²',
  `cdate` varchar(15) NOT NULL COMMENT 'åˆåŒç­¾è®¢æ—¥æœŸå­—ç¬¦ä¸²',
  `aom` int(10) NOT NULL COMMENT 'åˆåŒé‡‘é¢',
  `paytype` varchar(20) NOT NULL COMMENT 'ä»˜æ¬¾æ–¹å¼',
  `cnum` int(20) NOT NULL COMMENT 'åˆåŒç¼–å·',
  `onum` int(20) NOT NULL COMMENT 'ä¸‹å•ç¼–å·',
  `prjman` varchar(10) NOT NULL COMMENT 'é¡¹ç›®è´Ÿè´£äºº',
  `startom` int(10) NOT NULL COMMENT 'æ–¹æ¡ˆæŠ¥ä»·',
  `overom` int(10) NOT NULL COMMENT 'æœ€ç»ˆæŠ¥ä»·',
  `tman` varchar(10) NOT NULL COMMENT 'ä¸»è¦æ²Ÿé€šäºº',
  `otman` varchar(10) NOT NULL COMMENT 'è¾…åŠ©æ²Ÿé€šäºº',
  `odate` varchar(20) NOT NULL COMMENT 'ä¸‹å•æ—¥æœŸ',
  `sdate` varchar(20) NOT NULL COMMENT 'å‘è´§æ—¥æœŸ',
  `stype` varchar(20) NOT NULL COMMENT 'å‘è´§æ–¹å¼',
  `techman` varchar(10) NOT NULL COMMENT 'å®‰è£…è°ƒè¯•äºº',
  `tdate` varchar(20) NOT NULL COMMENT 'å®‰è£…æ—¥æœŸ',
  `checkdate` varchar(20) NOT NULL COMMENT 'éªŒè´§æ—¥æœŸ',
  `checkman` varchar(10) NOT NULL COMMENT 'éªŒæ”¶äºº',
  `cpu` varchar(20) NOT NULL COMMENT 'CPU',
  `memery` varchar(20) NOT NULL COMMENT 'å†…å­˜',
  `harddisk` varchar(25) NOT NULL COMMENT 'ç¡¬ç›˜',
  `board` varchar(20) NOT NULL COMMENT 'ä¸»æ¿',
  `other` varchar(50) NOT NULL COMMENT 'å…¶ä»–é…ä»¶',
  `kdate` varchar(20) NOT NULL COMMENT 'å¼€ç¥¨æ—¥æœŸ',
  `kom` int(10) NOT NULL COMMENT 'å¼€ç¥¨é‡‘é¢',
  `vtax` int(10) NOT NULL COMMENT 'å¢žå€¼ç¨Žé¢',
  `othertax` int(10) NOT NULL COMMENT 'å…¶ä»–>ç¨Žé¢',
  `salescost` int(10) NOT NULL COMMENT 'å”®å‰æˆæœ¬',
  `sentcost` int(10) NOT NULL COMMENT 'é€è´§æˆæœ¬',
  `mancost` int(10) NOT NULL COMMENT 'äººåŠ›æˆæœ¬',
  `cost` int(10) NOT NULL COMMENT 'æ€»æˆæœ¬',
  `gsdate` varchar(20) NOT NULL COMMENT 'è´§æ¬¾åº”åˆ°æ—¥æœŸ',
  `godate` varchar(20) NOT NULL COMMENT 'å®žé™…ä»˜æ¬¾æ—¥æœŸ',
  `gom` int(10) NOT NULL COMMENT 'ä»˜æ¬¾é‡‘é¢',
  `shom` int(10) NOT NULL COMMENT 'åº”æ”¶è´¦æ¬¾',
  `subdate` int(20) NOT NULL COMMENT 'æäº¤æ—¥æœŸ',
  `htstatus` int(1) NOT NULL DEFAULT '0' COMMENT 'åˆåŒçŠ¶æ€',
  `xdstatus` int(1) NOT NULL DEFAULT '0',
  `fhstatus` int(1) NOT NULL DEFAULT '0',
  `kpstatus` int(1) NOT NULL DEFAULT '0',
  `skstatus` int(1) NOT NULL DEFAULT '0',
  `showstatus` int(1) NOT NULL DEFAULT '0' COMMENT 'æ˜¾ç¤ºçŠ¶æ€',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gt_protables`
--

LOCK TABLES `gt_protables` WRITE;
/*!40000 ALTER TABLE `gt_protables` DISABLE KEYS */;
INSERT INTO `gt_protables` VALUES (6,1,'1','1','1','1','1','1','1','1',1,'1',1,1,'1',1,1,'1','1','1','1','1','1','1','1','1','1','1','1','1','1','',0,0,0,0,0,0,0,'','',0,0,1423633895,0,0,0,0,0,1);
/*!40000 ALTER TABLE `gt_protables` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gt_protablesk`
--

DROP TABLE IF EXISTS `gt_protablesk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gt_protablesk` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'è‡ªå¢žå”¯ä¸€æ ‡è¯†id',
  `cid` int(10) NOT NULL COMMENT 'ä¸»æ¡ç›®id',
  `gsdate` varchar(20) NOT NULL COMMENT 'è´§æ¬¾åº”åˆ°æ—¥æœŸ',
  `godate` varchar(20) NOT NULL COMMENT 'å®žé™…åˆ°æ¬¾æ—¥æœŸ',
  `gom` int(10) NOT NULL COMMENT 'ä»˜æ¬¾é‡‘é¢',
  `shom` int(10) NOT NULL COMMENT 'åº”æ”¶è´¦æ¬¾',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gt_protablesk`
--

LOCK TABLES `gt_protablesk` WRITE;
/*!40000 ALTER TABLE `gt_protablesk` DISABLE KEYS */;
INSERT INTO `gt_protablesk` VALUES (3,6,'123','123',123,123),(4,6,'22','22',22,22);
/*!40000 ALTER TABLE `gt_protablesk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gt_users`
--

DROP TABLE IF EXISTS `gt_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gt_users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'è‡ªå¢žid',
  `gid` int(1) NOT NULL COMMENT 'æƒé™',
  `uname` varchar(15) NOT NULL COMMENT 'ç”¨æˆ·å',
  `upass` varchar(50) NOT NULL COMMENT 'md5åŠ å¯†åŽå¯†ç ',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gt_users`
--

LOCK TABLES `gt_users` WRITE;
/*!40000 ALTER TABLE `gt_users` DISABLE KEYS */;
INSERT INTO `gt_users` VALUES (1,1,'gentaiht','196c5457b4c8eb83c5a6bb044ae6d488'),(2,2,'gentaixd','c53bda6bde4001946d925172de3df3f6'),(3,3,'gentaifh','d13b7df242527d2a662e8b4cc092adc0'),(4,4,'gentaikp','78d250ca5764c2aff6bbcb1e46a919c3'),(5,5,'gentaisk','beab31e6addb878f05cdf00f82c7ce1e'),(6,0,'gentai','e0f5bf1c1699f4ffcee5160a31acf265');
/*!40000 ALTER TABLE `gt_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-02-11 18:19:49

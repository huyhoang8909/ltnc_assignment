-- MySQL dump 10.13  Distrib 5.1.73, for redhat-linux-gnu (x86_64)
--
-- Host: localhost    Database: media_center
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
-- Table structure for table `CART`
--

DROP TABLE IF EXISTS `CART`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CART` (
  `CART_ID` int(11) NOT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `STATUS` varchar(10) NOT NULL,
  PRIMARY KEY (`CART_ID`),
  KEY `FK_USER_CART2` (`USER_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CART`
--

LOCK TABLES `CART` WRITE;
/*!40000 ALTER TABLE `CART` DISABLE KEYS */;
/*!40000 ALTER TABLE `CART` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `CART_ITEM`
--

DROP TABLE IF EXISTS `CART_ITEM`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CART_ITEM` (
  `CART_ID` int(11) NOT NULL,
  `ITEM_ID` int(11) NOT NULL,
  PRIMARY KEY (`CART_ID`,`ITEM_ID`),
  KEY `FK_CART_ITEM2` (`ITEM_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CART_ITEM`
--

LOCK TABLES `CART_ITEM` WRITE;
/*!40000 ALTER TABLE `CART_ITEM` DISABLE KEYS */;
/*!40000 ALTER TABLE `CART_ITEM` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `CATEGORY`
--

DROP TABLE IF EXISTS `CATEGORY`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CATEGORY` (
  `CATEGORY_ID` int(11) NOT NULL,
  `CATEGORY_CATEGORY_ID` int(11) DEFAULT NULL,
  `CATEGORY_NAME` varchar(50) NOT NULL,
  PRIMARY KEY (`CATEGORY_ID`),
  KEY `FK_PARENT_CATEGORY` (`CATEGORY_CATEGORY_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CATEGORY`
--

LOCK TABLES `CATEGORY` WRITE;
/*!40000 ALTER TABLE `CATEGORY` DISABLE KEYS */;
/*!40000 ALTER TABLE `CATEGORY` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `CUSTOMERADDRESS`
--

DROP TABLE IF EXISTS `CUSTOMERADDRESS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `CUSTOMERADDRESS` (
  `ADDRESS_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USER_ID` int(11) NOT NULL,
  `RECIPIENT` varchar(50) NOT NULL,
  `PHONE_NUMBER` varchar(15) NOT NULL,
  `ADDRESS_LINE_1` varchar(256) DEFAULT NULL,
  `ADDRESS_LINE_2` varchar(256) DEFAULT NULL,
  `DISTRICT` varchar(50) NOT NULL,
  `PROVINCE` varchar(50) NOT NULL,
  `COUNTRY` varchar(50) NOT NULL,
  `ZIPCODE` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`ADDRESS_ID`),
  KEY `FK_USER_ADDRESS` (`USER_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CUSTOMERADDRESS`
--

LOCK TABLES `CUSTOMERADDRESS` WRITE;
/*!40000 ALTER TABLE `CUSTOMERADDRESS` DISABLE KEYS */;
/*!40000 ALTER TABLE `CUSTOMERADDRESS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ITEM`
--

DROP TABLE IF EXISTS `ITEM`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ITEM` (
  `ITEM_ID` int(11) NOT NULL AUTO_INCREMENT,
  `MANUFACTURER_ID` int(11) NOT NULL,
  `PROMOTION_ID` int(11) DEFAULT NULL,
  `CATEGORY_ID` int(11) NOT NULL,
  `ITEM_NAME` varchar(256) NOT NULL,
  `ITEM_PRICE` float(10,0) NOT NULL,
  `ITEM_QUANTITY` int(11) NOT NULL,
  PRIMARY KEY (`ITEM_ID`),
  KEY `FK_ITEM_CATEGORY` (`CATEGORY_ID`),
  KEY `FK_ITEM_MANUFACTURER` (`MANUFACTURER_ID`),
  KEY `FK_ITEM_PROMOTION` (`PROMOTION_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ITEM`
--

LOCK TABLES `ITEM` WRITE;
/*!40000 ALTER TABLE `ITEM` DISABLE KEYS */;
/*!40000 ALTER TABLE `ITEM` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ITEM_SUPPLIER`
--

DROP TABLE IF EXISTS `ITEM_SUPPLIER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ITEM_SUPPLIER` (
  `SUPPLIER_ID` int(11) NOT NULL,
  `ITEM_ID` int(11) NOT NULL,
  PRIMARY KEY (`SUPPLIER_ID`,`ITEM_ID`),
  KEY `FK_ITEM_SUPPLIER2` (`ITEM_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ITEM_SUPPLIER`
--

LOCK TABLES `ITEM_SUPPLIER` WRITE;
/*!40000 ALTER TABLE `ITEM_SUPPLIER` DISABLE KEYS */;
/*!40000 ALTER TABLE `ITEM_SUPPLIER` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MANUFACTURER`
--

DROP TABLE IF EXISTS `MANUFACTURER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MANUFACTURER` (
  `MANUFACTURER_ID` int(11) NOT NULL AUTO_INCREMENT,
  `MANUFACTURER_NAME` varchar(50) NOT NULL,
  PRIMARY KEY (`MANUFACTURER_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MANUFACTURER`
--

LOCK TABLES `MANUFACTURER` WRITE;
/*!40000 ALTER TABLE `MANUFACTURER` DISABLE KEYS */;
/*!40000 ALTER TABLE `MANUFACTURER` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ORDERS`
--

DROP TABLE IF EXISTS `ORDERS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ORDERS` (
  `ORDER_ID` int(11) NOT NULL AUTO_INCREMENT,
  `SHIPPING_TYPE_ID` int(11) NOT NULL,
  `PAYMENT_TYPE_ID` tinyint(4) DEFAULT NULL,
  `USER_ID` int(11) NOT NULL,
  `ADDRESS_ID` int(11) NOT NULL,
  `PAYMENT_ID` int(11) DEFAULT NULL,
  `ORDER_STATUS` tinyint(4) NOT NULL,
  `ORDER_DATE` datetime NOT NULL,
  `DELIVERY_DATE` datetime NOT NULL,
  `TOTAL` float(8,2) NOT NULL,
  `PAYMENT_KEY` varchar(20) NOT NULL,
  `PAYMENT_CODE` varchar(20) NOT NULL,
  PRIMARY KEY (`ORDER_ID`),
  KEY `FK_ORDER_CUSTOMERADDRESS` (`ADDRESS_ID`),
  KEY `FK_ORDER_PAYMENT` (`PAYMENT_ID`),
  KEY `FK_ORDER_PAYMENTTYPE` (`PAYMENT_TYPE_ID`),
  KEY `FK_ORDER_SHIPPING` (`SHIPPING_TYPE_ID`),
  KEY `FK_ORDER_USER` (`USER_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ORDERS`
--

LOCK TABLES `ORDERS` WRITE;
/*!40000 ALTER TABLE `ORDERS` DISABLE KEYS */;
/*!40000 ALTER TABLE `ORDERS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ORDER_ITEM`
--

DROP TABLE IF EXISTS `ORDER_ITEM`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ORDER_ITEM` (
  `ITEM_ID` int(11) NOT NULL,
  `ORDER_ID` int(11) NOT NULL,
  PRIMARY KEY (`ITEM_ID`,`ORDER_ID`),
  KEY `FK_ORDER_ITEM2` (`ORDER_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ORDER_ITEM`
--

LOCK TABLES `ORDER_ITEM` WRITE;
/*!40000 ALTER TABLE `ORDER_ITEM` DISABLE KEYS */;
/*!40000 ALTER TABLE `ORDER_ITEM` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PAYMENTTYPE`
--

DROP TABLE IF EXISTS `PAYMENTTYPE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PAYMENTTYPE` (
  `PAYMENT_TYPE_ID` tinyint(4) NOT NULL,
  `PAYMENT_TYPE_DESC` varchar(50) NOT NULL,
  PRIMARY KEY (`PAYMENT_TYPE_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PAYMENTTYPE`
--

LOCK TABLES `PAYMENTTYPE` WRITE;
/*!40000 ALTER TABLE `PAYMENTTYPE` DISABLE KEYS */;
/*!40000 ALTER TABLE `PAYMENTTYPE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PROMOTION`
--

DROP TABLE IF EXISTS `PROMOTION`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PROMOTION` (
  `PROMOTION_ID` int(11) NOT NULL AUTO_INCREMENT,
  `START_DATE` datetime DEFAULT NULL,
  `END_DATE` datetime DEFAULT NULL,
  `DISCOUNT_PERCENT` tinyint(4) DEFAULT NULL,
  `PROMOTION_CODE` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`PROMOTION_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PROMOTION`
--

LOCK TABLES `PROMOTION` WRITE;
/*!40000 ALTER TABLE `PROMOTION` DISABLE KEYS */;
/*!40000 ALTER TABLE `PROMOTION` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `RETURNSTATUS`
--

DROP TABLE IF EXISTS `RETURNSTATUS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `RETURNSTATUS` (
  `RETURN_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `START_DATE` date NOT NULL,
  `END_DATE` date NOT NULL,
  `STATUS` tinyint(4) NOT NULL,
  PRIMARY KEY (`RETURN_ID`),
  KEY `FK_USER_RETURN` (`USER_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `RETURNSTATUS`
--

LOCK TABLES `RETURNSTATUS` WRITE;
/*!40000 ALTER TABLE `RETURNSTATUS` DISABLE KEYS */;
/*!40000 ALTER TABLE `RETURNSTATUS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `RETURNSTATUS_ITEM`
--

DROP TABLE IF EXISTS `RETURNSTATUS_ITEM`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `RETURNSTATUS_ITEM` (
  `RETURN_ID` int(11) NOT NULL,
  `ITEM_ID` int(11) NOT NULL,
  PRIMARY KEY (`RETURN_ID`,`ITEM_ID`),
  KEY `FK_RETURNSTATUS_ITEM2` (`ITEM_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `RETURNSTATUS_ITEM`
--

LOCK TABLES `RETURNSTATUS_ITEM` WRITE;
/*!40000 ALTER TABLE `RETURNSTATUS_ITEM` DISABLE KEYS */;
/*!40000 ALTER TABLE `RETURNSTATUS_ITEM` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `REVIEWS`
--

DROP TABLE IF EXISTS `REVIEWS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `REVIEWS` (
  `REVIEW_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USER_ID` int(11) NOT NULL,
  `ITEM_ID` int(11) NOT NULL,
  `RATING` tinyint(4) NOT NULL,
  `COMMENT` text,
  PRIMARY KEY (`REVIEW_ID`),
  KEY `FK_ITEM_REVIEWS` (`ITEM_ID`),
  KEY `FK_USER_REVIEW` (`USER_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `REVIEWS`
--

LOCK TABLES `REVIEWS` WRITE;
/*!40000 ALTER TABLE `REVIEWS` DISABLE KEYS */;
/*!40000 ALTER TABLE `REVIEWS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ROLE`
--

DROP TABLE IF EXISTS `ROLE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ROLE` (
  `ROLE_ID` tinyint(4) NOT NULL,
  `ROLE_NAME` varchar(25) NOT NULL,
  `DESCRIPTION` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ROLE_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ROLE`
--

LOCK TABLES `ROLE` WRITE;
/*!40000 ALTER TABLE `ROLE` DISABLE KEYS */;
/*!40000 ALTER TABLE `ROLE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ROLE_USER`
--

DROP TABLE IF EXISTS `ROLE_USER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ROLE_USER` (
  `ROLE_ID` tinyint(4) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  PRIMARY KEY (`ROLE_ID`,`USER_ID`),
  KEY `FK_ROLE_USER2` (`USER_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ROLE_USER`
--

LOCK TABLES `ROLE_USER` WRITE;
/*!40000 ALTER TABLE `ROLE_USER` DISABLE KEYS */;
/*!40000 ALTER TABLE `ROLE_USER` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `SHIPPINGTYPE`
--

DROP TABLE IF EXISTS `SHIPPINGTYPE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `SHIPPINGTYPE` (
  `SHIPPING_TYPE_ID` int(11) NOT NULL,
  `SHIPPING_TYPE_NAME` varchar(50) NOT NULL,
  `SHIPPING_COST` float(6,0) NOT NULL,
  `SHIPPING_DAYS` tinyint(4) NOT NULL,
  PRIMARY KEY (`SHIPPING_TYPE_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SHIPPINGTYPE`
--

LOCK TABLES `SHIPPINGTYPE` WRITE;
/*!40000 ALTER TABLE `SHIPPINGTYPE` DISABLE KEYS */;
/*!40000 ALTER TABLE `SHIPPINGTYPE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `SUPPLIER`
--

DROP TABLE IF EXISTS `SUPPLIER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `SUPPLIER` (
  `SUPPLIER_ID` int(11) NOT NULL,
  `SUPPLIER_NAME` varchar(50) NOT NULL,
  `SUPPLIER_TYPE` varchar(50) NOT NULL,
  PRIMARY KEY (`SUPPLIER_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SUPPLIER`
--

LOCK TABLES `SUPPLIER` WRITE;
/*!40000 ALTER TABLE `SUPPLIER` DISABLE KEYS */;
/*!40000 ALTER TABLE `SUPPLIER` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TRACKINGTABLE`
--

DROP TABLE IF EXISTS `TRACKINGTABLE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TRACKINGTABLE` (
  `TRACKING_ID` int(11) NOT NULL AUTO_INCREMENT,
  `POSITION` varchar(200) NOT NULL,
  `TIME` datetime NOT NULL,
  PRIMARY KEY (`TRACKING_ID`,`POSITION`,`TIME`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TRACKINGTABLE`
--

LOCK TABLES `TRACKINGTABLE` WRITE;
/*!40000 ALTER TABLE `TRACKINGTABLE` DISABLE KEYS */;
/*!40000 ALTER TABLE `TRACKINGTABLE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `USER`
--

DROP TABLE IF EXISTS `USER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `USER` (
  `USER_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CART_ID` int(11) DEFAULT NULL,
  `USER_NAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `EMAIL_ADRESS` varchar(50) NOT NULL,
  `PHONE` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`USER_ID`),
  KEY `AK_ID_USERNAME` (`USER_NAME`),
  KEY `FK_USER_CART` (`CART_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `USER`
--

LOCK TABLES `USER` WRITE;
/*!40000 ALTER TABLE `USER` DISABLE KEYS */;
/*!40000 ALTER TABLE `USER` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `USERPAYMENT`
--

DROP TABLE IF EXISTS `USERPAYMENT`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `USERPAYMENT` (
  `PAYMENT_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `CARD_NAME` varchar(50) NOT NULL,
  `CREDIT_CARD_NUMBER` varchar(20) NOT NULL,
  `SECURITY_NUMBER` int(11) NOT NULL,
  `EXP_DATE` varchar(1024) NOT NULL,
  PRIMARY KEY (`PAYMENT_ID`),
  KEY `FK_USER_PAYMENT` (`USER_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `USERPAYMENT`
--

LOCK TABLES `USERPAYMENT` WRITE;
/*!40000 ALTER TABLE `USERPAYMENT` DISABLE KEYS */;
/*!40000 ALTER TABLE `USERPAYMENT` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `USER_ITEM_FAVOURITE`
--

DROP TABLE IF EXISTS `USER_ITEM_FAVOURITE`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `USER_ITEM_FAVOURITE` (
  `USER_ID` int(11) NOT NULL,
  `ITEM_ID` int(11) NOT NULL,
  PRIMARY KEY (`USER_ID`,`ITEM_ID`),
  KEY `FK_USER_ITEM_FAVOURITE2` (`ITEM_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `USER_ITEM_FAVOURITE`
--

LOCK TABLES `USER_ITEM_FAVOURITE` WRITE;
/*!40000 ALTER TABLE `USER_ITEM_FAVOURITE` DISABLE KEYS */;
/*!40000 ALTER TABLE `USER_ITEM_FAVOURITE` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `activities`
--

DROP TABLE IF EXISTS `activities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activities` (
  `activity_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `activity` varchar(255) NOT NULL,
  `module` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL,
  `deleted` tinyint(12) NOT NULL DEFAULT '0',
  PRIMARY KEY (`activity_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activities`
--

LOCK TABLES `activities` WRITE;
/*!40000 ALTER TABLE `activities` DISABLE KEYS */;
/*!40000 ALTER TABLE `activities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ci3_sessions`
--

DROP TABLE IF EXISTS `ci3_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ci3_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ci3_sessions`
--

LOCK TABLES `ci3_sessions` WRITE;
/*!40000 ALTER TABLE `ci3_sessions` DISABLE KEYS */;
INSERT INTO `ci3_sessions` VALUES ('fe96c1c20cda950945e9a953bd44c25d764b403d','192.168.33.1',1461843104,'__ci_last_regenerate|i:1461843060;requested_page|s:35:\"http://media-center.local/index.php\";previous_page|s:35:\"http://media-center.local/index.php\";'),('0dfa1777677eb3b65cb4a6a94655ae26c591e118','192.168.33.1',1462259815,'__ci_last_regenerate|i:1462259750;requested_page|s:41:\"http://media-center.local/index.php/admin\";previous_page|s:35:\"http://media-center.local/index.php\";message|s:0:\"\";__ci_vars|a:1:{s:7:\"message\";s:3:\"old\";}'),('144855d632517f8a3dad119d68cf4ac4c1723116','192.168.33.1',1462260669,'__ci_last_regenerate|i:1462260510;requested_page|s:35:\"http://media-center.local/index.php\";previous_page|s:35:\"http://media-center.local/index.php\";'),('bf2ab85c06e753a9ff6eb0390691f670f902174d','192.168.33.1',1462264027,'__ci_last_regenerate|i:1462264027;requested_page|s:35:\"http://media-center.local/index.php\";previous_page|s:35:\"http://media-center.local/index.php\";'),('b3d5e5f58d76553542dcd0e217aedd20ae3c09ae','192.168.33.1',1462264756,'__ci_last_regenerate|i:1462264755;requested_page|s:35:\"http://media-center.local/index.php\";previous_page|s:35:\"http://media-center.local/index.php\";'),('c5ec8c6778ce6e92e79954d02bacc647e9e29e81','192.168.33.1',1462265123,'__ci_last_regenerate|i:1462265122;requested_page|s:35:\"http://media-center.local/index.php\";previous_page|s:35:\"http://media-center.local/index.php\";'),('1f02e12ea75fa3440b8270ac5c6a2adb0df7999c','192.168.33.1',1462266094,'__ci_last_regenerate|i:1462265809;requested_page|s:50:\"http://media-center.local/index.php/docs/developer\";previous_page|s:50:\"http://media-center.local/index.php/docs/developer\";'),('ae67cce3b70e78686245db7e75ff0f170c87601d','192.168.33.1',1462266315,'__ci_last_regenerate|i:1462266144;requested_page|s:35:\"http://media-center.local/index.php\";previous_page|s:35:\"http://media-center.local/index.php\";'),('31729645cbcb565cd4fbde53d91387e1ac9f19c0','192.168.33.1',1462266482,'__ci_last_regenerate|i:1462266474;requested_page|s:35:\"http://media-center.local/index.php\";previous_page|s:35:\"http://media-center.local/index.php\";'),('0267fbbbbcb0e8ff79eb2935c43982db98f5fd85','192.168.33.1',1462267209,'__ci_last_regenerate|i:1462266943;requested_page|s:35:\"http://media-center.local/index.php\";previous_page|s:35:\"http://media-center.local/index.php\";');
/*!40000 ALTER TABLE `ci3_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_queue`
--

DROP TABLE IF EXISTS `email_queue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_queue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `to_email` varchar(254) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `alt_message` text,
  `max_attempts` int(11) NOT NULL DEFAULT '3',
  `attempts` int(11) NOT NULL DEFAULT '0',
  `success` tinyint(1) NOT NULL DEFAULT '0',
  `date_published` datetime DEFAULT NULL,
  `last_attempt` datetime DEFAULT NULL,
  `date_sent` datetime DEFAULT NULL,
  `csv_attachment` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_queue`
--

LOCK TABLES `email_queue` WRITE;
/*!40000 ALTER TABLE `email_queue` DISABLE KEYS */;
/*!40000 ALTER TABLE `email_queue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_attempts` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_attempts`
--

LOCK TABLES `login_attempts` WRITE;
/*!40000 ALTER TABLE `login_attempts` DISABLE KEYS */;
/*!40000 ALTER TABLE `login_attempts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `permission_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(100) NOT NULL,
  `status` enum('active','inactive','deleted') NOT NULL DEFAULT 'active',
  PRIMARY KEY (`permission_id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (2,'Site.Content.View','Allow users to view the Content Context','active'),(3,'Site.Reports.View','Allow users to view the Reports Context','active'),(4,'Site.Settings.View','Allow users to view the Settings Context','active'),(5,'Site.Developer.View','Allow users to view the Developer Context','active'),(6,'Bonfire.Roles.Manage','Allow users to manage the user Roles','active'),(7,'Bonfire.Users.Manage','Allow users to manage the site Users','active'),(8,'Bonfire.Users.View','Allow users access to the User Settings','active'),(9,'Bonfire.Users.Add','Allow users to add new Users','active'),(10,'Bonfire.Database.Manage','Allow users to manage the Database settings','active'),(11,'Bonfire.Emailer.Manage','Allow users to manage the Emailer settings','active'),(12,'Bonfire.Logs.View','Allow users access to the Log details','active'),(13,'Bonfire.Logs.Manage','Allow users to manage the Log files','active'),(14,'Bonfire.Emailer.View','Allow users access to the Emailer settings','active'),(15,'Site.Signin.Offline','Allow users to login to the site when the site is offline','active'),(16,'Bonfire.Permissions.View','Allow access to view the Permissions menu unders Settings Context','active'),(17,'Bonfire.Permissions.Manage','Allow access to manage the Permissions in the system','active'),(18,'Bonfire.Modules.Add','Allow creation of modules with the builder.','active'),(19,'Bonfire.Modules.Delete','Allow deletion of modules.','active'),(20,'Permissions.Administrator.Manage','To manage the access control permissions for the Administrator role.','active'),(21,'Permissions.Editor.Manage','To manage the access control permissions for the Editor role.','active'),(49,'Bonfire.Roles.Add','To add New Roles','active'),(23,'Permissions.User.Manage','To manage the access control permissions for the User role.','active'),(24,'Permissions.Developer.Manage','To manage the access control permissions for the Developer role.','active'),(48,'Bonfire.Profiler.View','To view the Console Profiler Bar.','active'),(26,'Activities.Own.View','To view the users own activity logs','active'),(27,'Activities.Own.Delete','To delete the users own activity logs','active'),(28,'Activities.User.View','To view the user activity logs','active'),(29,'Activities.User.Delete','To delete the user activity logs, except own','active'),(30,'Activities.Module.View','To view the module activity logs','active'),(31,'Activities.Module.Delete','To delete the module activity logs','active'),(32,'Activities.Date.View','To view the users own activity logs','active'),(33,'Activities.Date.Delete','To delete the dated activity logs','active'),(34,'Bonfire.UI.Manage','Manage the Bonfire UI settings','active'),(35,'Bonfire.Settings.View','To view the site settings page.','active'),(36,'Bonfire.Settings.Manage','To manage the site settings.','active'),(37,'Bonfire.Activities.View','To view the Activities menu.','active'),(38,'Bonfire.Database.View','To view the Database menu.','active'),(39,'Bonfire.Migrations.View','To view the Migrations menu.','active'),(40,'Bonfire.Builder.View','To view the Modulebuilder menu.','active'),(41,'Bonfire.Roles.View','To view the Roles menu.','active'),(42,'Bonfire.Sysinfo.View','To view the System Information page.','active'),(43,'Bonfire.Translate.Manage','To manage the Language Translation.','active'),(44,'Bonfire.Translate.View','To view the Language Translate menu.','active'),(45,'Bonfire.UI.View','To view the UI/Keyboard Shortcut menu.','active');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_permissions`
--

DROP TABLE IF EXISTS `role_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_permissions` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  PRIMARY KEY (`role_id`,`permission_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_permissions`
--

LOCK TABLES `role_permissions` WRITE;
/*!40000 ALTER TABLE `role_permissions` DISABLE KEYS */;
INSERT INTO `role_permissions` VALUES (1,2),(1,3),(1,4),(1,5),(1,6),(1,7),(1,8),(1,9),(1,10),(1,11),(1,12),(1,13),(1,14),(1,15),(1,16),(1,17),(1,18),(1,19),(1,20),(1,21),(1,23),(1,24),(1,26),(1,27),(1,28),(1,29),(1,30),(1,31),(1,32),(1,33),(1,34),(1,35),(1,36),(1,37),(1,38),(1,39),(1,40),(1,41),(1,42),(1,43),(1,44),(1,45),(1,48),(1,49),(2,2),(2,3),(6,2),(6,3),(6,4),(6,5),(6,6),(6,7),(6,8),(6,9),(6,10),(6,11),(6,12),(6,13),(6,48);
/*!40000 ALTER TABLE `role_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(60) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `default` tinyint(1) NOT NULL DEFAULT '0',
  `can_delete` tinyint(1) NOT NULL DEFAULT '1',
  `login_destination` varchar(255) NOT NULL DEFAULT '/',
  `default_context` varchar(255) DEFAULT 'content',
  `deleted` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Administrator','Has full control over every aspect of the site.',0,0,'','content',0),(2,'Editor','Can handle day-to-day management, but does not have full power.',0,1,'','content',0),(4,'User','This is the default user with access to login.',1,0,'','content',0),(6,'Developer','Developers typically are the only ones that can access the developer tools. Otherwise identical to Administrators, at least until the site is handed off.',0,1,'','content',0);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schema_version`
--

DROP TABLE IF EXISTS `schema_version`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `schema_version` (
  `type` varchar(40) NOT NULL,
  `version` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schema_version`
--

LOCK TABLES `schema_version` WRITE;
/*!40000 ALTER TABLE `schema_version` DISABLE KEYS */;
INSERT INTO `schema_version` VALUES ('core',43);
/*!40000 ALTER TABLE `schema_version` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `name` varchar(30) NOT NULL,
  `module` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES ('site.title','core','My Bonfire'),('site.system_email','core','admin@mybonfire.com'),('site.status','core','1'),('site.list_limit','core','25'),('site.show_profiler','core','1'),('site.show_front_profiler','core','1'),('auth.allow_register','core','1'),('auth.login_type','core','email'),('auth.use_usernames','core','1'),('auth.allow_remember','core','1'),('auth.remember_length','core','1209600'),('auth.do_login_redirect','core','1'),('auth.use_extended_profile','core','0'),('sender_email','email',''),('protocol','email','mail'),('mailpath','email','/usr/sbin/sendmail'),('smtp_host','email',''),('smtp_user','email',''),('smtp_pass','email',''),('smtp_port','email',''),('smtp_timeout','email',''),('mailtype','email','text'),('site.languages','core','a:3:{i:0;s:7:\"english\";i:1;s:10:\"portuguese\";i:2;s:7:\"persian\";}'),('auth.allow_name_change','core','1'),('auth.name_change_frequency','core','1'),('auth.name_change_limit','core','1'),('auth.password_min_length','core','8'),('auth.password_force_numbers','core','0'),('auth.password_force_symbols','core','0'),('auth.password_force_mixed_case','core','0'),('form_save','core.ui','ctrl+s/⌘+s'),('goto_content','core.ui','alt+c'),('auth.user_activation_method','core','0'),('auth.password_show_labels','core','0'),('password_iterations','users','8'),('site.offline_reason','core','');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_cookies`
--

DROP TABLE IF EXISTS `user_cookies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_cookies` (
  `user_id` bigint(20) unsigned NOT NULL,
  `token` varchar(128) NOT NULL,
  `created_on` datetime NOT NULL,
  KEY `token` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_cookies`
--

LOCK TABLES `user_cookies` WRITE;
/*!40000 ALTER TABLE `user_cookies` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_cookies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_meta`
--

DROP TABLE IF EXISTS `user_meta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_meta` (
  `meta_id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) NOT NULL DEFAULT '',
  `meta_value` text,
  PRIMARY KEY (`meta_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_meta`
--

LOCK TABLES `user_meta` WRITE;
/*!40000 ALTER TABLE `user_meta` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_meta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL DEFAULT '4',
  `email` varchar(254) NOT NULL,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password_hash` char(60) DEFAULT NULL,
  `reset_hash` varchar(40) DEFAULT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_ip` varchar(45) NOT NULL DEFAULT '',
  `created_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `reset_by` int(10) DEFAULT NULL,
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_message` varchar(255) DEFAULT NULL,
  `display_name` varchar(255) DEFAULT '',
  `display_name_changed` date DEFAULT NULL,
  `timezone` varchar(40) NOT NULL DEFAULT 'UM6',
  `language` varchar(20) NOT NULL DEFAULT 'english',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `activate_hash` varchar(40) NOT NULL DEFAULT '',
  `force_password_reset` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'admin@mybonfire.com','admin','$2a$08$8DW9IP/B/xA7AIFvrMHhTOIFjfnfNLmDunE.J7iZ94QDV66lmHpxS',NULL,'0000-00-00 00:00:00','','2016-04-22 22:01:17',0,NULL,0,NULL,'admin',NULL,'UM6','english',1,'',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-03 16:33:45

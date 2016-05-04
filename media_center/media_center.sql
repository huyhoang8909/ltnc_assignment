-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2016 at 09:58 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `media_center`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

DROP TABLE IF EXISTS `activities`;
CREATE TABLE IF NOT EXISTS `activities` (
  `activity_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `activity` varchar(255) NOT NULL,
  `module` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL,
  `deleted` tinyint(12) NOT NULL DEFAULT '0',
  PRIMARY KEY (`activity_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`activity_id`, `user_id`, `activity`, `module`, `created_on`, `deleted`) VALUES
(1, 1, 'logged in from: 127.0.0.1', 'users', '2016-05-04 07:48:27', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `CART_ID` int(11) NOT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `STATUS` varchar(10) NOT NULL,
  PRIMARY KEY (`CART_ID`),
  KEY `FK_USER_CART2` (`USER_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart_item`
--

DROP TABLE IF EXISTS `cart_item`;
CREATE TABLE IF NOT EXISTS `cart_item` (
  `CART_ID` int(11) NOT NULL,
  `ITEM_ID` int(11) NOT NULL,
  PRIMARY KEY (`CART_ID`,`ITEM_ID`),
  KEY `FK_CART_ITEM2` (`ITEM_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `CATEGORY_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CATEGORY_CATEGORY_ID` int(11) DEFAULT NULL,
  `CATEGORY_NAME` varchar(50) NOT NULL,
  `CATEGORY_PRIORITY` tinyint(4) NOT NULL,
  PRIMARY KEY (`CATEGORY_ID`),
  KEY `FK_PARENT_CATEGORY` (`CATEGORY_CATEGORY_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CATEGORY_ID`, `CATEGORY_CATEGORY_ID`, `CATEGORY_NAME`, `CATEGORY_PRIORITY`) VALUES
(1, NULL, 'Books', 0),
(2, NULL, 'Camera & Photo', 3),
(3, 1, 'Programming Languages', 1),
(4, 1, 'Software Development', 2);

-- --------------------------------------------------------

--
-- Table structure for table `ci3_sessions`
--

DROP TABLE IF EXISTS `ci3_sessions`;
CREATE TABLE IF NOT EXISTS `ci3_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci3_sessions`
--

INSERT INTO `ci3_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('fe96c1c20cda950945e9a953bd44c25d764b403d', '192.168.33.1', 1461843104, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436313834333036303b7265717565737465645f706167657c733a33353a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e706870223b70726576696f75735f706167657c733a33353a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e706870223b),
('0dfa1777677eb3b65cb4a6a94655ae26c591e118', '192.168.33.1', 1462259815, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436323235393735303b7265717565737465645f706167657c733a34313a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e7068702f61646d696e223b70726576696f75735f706167657c733a33353a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e706870223b6d6573736167657c733a303a22223b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('144855d632517f8a3dad119d68cf4ac4c1723116', '192.168.33.1', 1462260669, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436323236303531303b7265717565737465645f706167657c733a33353a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e706870223b70726576696f75735f706167657c733a33353a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e706870223b),
('bf2ab85c06e753a9ff6eb0390691f670f902174d', '192.168.33.1', 1462264027, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436323236343032373b7265717565737465645f706167657c733a33353a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e706870223b70726576696f75735f706167657c733a33353a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e706870223b),
('b3d5e5f58d76553542dcd0e217aedd20ae3c09ae', '192.168.33.1', 1462264756, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436323236343735353b7265717565737465645f706167657c733a33353a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e706870223b70726576696f75735f706167657c733a33353a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e706870223b),
('c5ec8c6778ce6e92e79954d02bacc647e9e29e81', '192.168.33.1', 1462265123, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436323236353132323b7265717565737465645f706167657c733a33353a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e706870223b70726576696f75735f706167657c733a33353a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e706870223b),
('1f02e12ea75fa3440b8270ac5c6a2adb0df7999c', '192.168.33.1', 1462266094, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436323236353830393b7265717565737465645f706167657c733a35303a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e7068702f646f63732f646576656c6f706572223b70726576696f75735f706167657c733a35303a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e7068702f646f63732f646576656c6f706572223b),
('ae67cce3b70e78686245db7e75ff0f170c87601d', '192.168.33.1', 1462266315, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436323236363134343b7265717565737465645f706167657c733a33353a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e706870223b70726576696f75735f706167657c733a33353a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e706870223b),
('31729645cbcb565cd4fbde53d91387e1ac9f19c0', '192.168.33.1', 1462266482, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436323236363437343b7265717565737465645f706167657c733a33353a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e706870223b70726576696f75735f706167657c733a33353a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e706870223b),
('0267fbbbbcb0e8ff79eb2935c43982db98f5fd85', '192.168.33.1', 1462267209, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436323236363934333b7265717565737465645f706167657c733a33353a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e706870223b70726576696f75735f706167657c733a33353a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e706870223b),
('1162e532b7522966c834286754ae8999b950baf0', '127.0.0.1', 1462341116, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436323334303930363b757365725f69647c733a313a2231223b617574685f637573746f6d7c733a353a2261646d696e223b757365725f746f6b656e7c733a34303a2238643166326362346662653831383039363436666663316238313335316230306235633165633437223b6964656e746974797c733a31393a2261646d696e406d79626f6e666972652e636f6d223b726f6c655f69647c733a313a2231223b6c6f676765645f696e7c623a313b7265717565737465645f706167657c733a33353a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e706870223b70726576696f75735f706167657c733a36333a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e7068702f646f63732f646576656c6f7065722f696e7374616c6c6174696f6e223b6c616e67756167657c733a373a22656e676c697368223b),
('714f815e13debff798d362cd74dfec95fcda747b', '127.0.0.1', 1462342926, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436323334323633313b757365725f69647c733a313a2231223b617574685f637573746f6d7c733a353a2261646d696e223b757365725f746f6b656e7c733a34303a2238643166326362346662653831383039363436666663316238313335316230306235633165633437223b6964656e746974797c733a31393a2261646d696e406d79626f6e666972652e636f6d223b726f6c655f69647c733a313a2231223b6c6f676765645f696e7c623a313b7265717565737465645f706167657c733a33353a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e706870223b70726576696f75735f706167657c733a33353a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e706870223b6c616e67756167657c733a373a22656e676c697368223b),
('1b392b3cd205803bc9cefca76342ceefa8fb3bb9', '127.0.0.1', 1462343053, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436323334333035333b757365725f69647c733a313a2231223b617574685f637573746f6d7c733a353a2261646d696e223b757365725f746f6b656e7c733a34303a2238643166326362346662653831383039363436666663316238313335316230306235633165633437223b6964656e746974797c733a31393a2261646d696e406d79626f6e666972652e636f6d223b726f6c655f69647c733a313a2231223b6c6f676765645f696e7c623a313b7265717565737465645f706167657c733a33353a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e706870223b70726576696f75735f706167657c733a33353a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e706870223b6c616e67756167657c733a373a22656e676c697368223b),
('07f4369bd6ea7c234f11cdf29865b3ccf8680a78', '127.0.0.1', 1462343958, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436323334333935373b757365725f69647c733a313a2231223b617574685f637573746f6d7c733a353a2261646d696e223b757365725f746f6b656e7c733a34303a2238643166326362346662653831383039363436666663316238313335316230306235633165633437223b6964656e746974797c733a31393a2261646d696e406d79626f6e666972652e636f6d223b726f6c655f69647c733a313a2231223b6c6f676765645f696e7c623a313b7265717565737465645f706167657c733a33353a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e706870223b70726576696f75735f706167657c733a33353a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e706870223b6c616e67756167657c733a373a22656e676c697368223b),
('d16408138a386f32a80a2e6b4f47a2f219be3961', '127.0.0.1', 1462345575, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436323334353535383b757365725f69647c733a313a2231223b617574685f637573746f6d7c733a353a2261646d696e223b757365725f746f6b656e7c733a34303a2238643166326362346662653831383039363436666663316238313335316230306235633165633437223b6964656e746974797c733a31393a2261646d696e406d79626f6e666972652e636f6d223b726f6c655f69647c733a313a2231223b6c6f676765645f696e7c623a313b7265717565737465645f706167657c733a33353a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e706870223b70726576696f75735f706167657c733a33353a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e706870223b6c616e67756167657c733a373a22656e676c697368223b),
('2ea58147bba00d70b43bf2ca4ba4c0cc0e18bbff', '127.0.0.1', 1462346393, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436323334363039343b757365725f69647c733a313a2231223b617574685f637573746f6d7c733a353a2261646d696e223b757365725f746f6b656e7c733a34303a2238643166326362346662653831383039363436666663316238313335316230306235633165633437223b6964656e746974797c733a31393a2261646d696e406d79626f6e666972652e636f6d223b726f6c655f69647c733a313a2231223b6c6f676765645f696e7c623a313b7265717565737465645f706167657c733a33353a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e706870223b70726576696f75735f706167657c733a33353a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e706870223b6c616e67756167657c733a373a22656e676c697368223b),
('4096ab3c342d7f4628ad52d7a1b98134198945e2', '127.0.0.1', 1462346585, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436323334363535333b757365725f69647c733a313a2231223b617574685f637573746f6d7c733a353a2261646d696e223b757365725f746f6b656e7c733a34303a2238643166326362346662653831383039363436666663316238313335316230306235633165633437223b6964656e746974797c733a31393a2261646d696e406d79626f6e666972652e636f6d223b726f6c655f69647c733a313a2231223b6c6f676765645f696e7c623a313b7265717565737465645f706167657c733a33353a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e706870223b70726576696f75735f706167657c733a33353a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e706870223b6c616e67756167657c733a373a22656e676c697368223b),
('14460a546e43fad6b5f2deed5584c632411ea710', '127.0.0.1', 1462347008, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436323334363938323b757365725f69647c733a313a2231223b617574685f637573746f6d7c733a353a2261646d696e223b757365725f746f6b656e7c733a34303a2238643166326362346662653831383039363436666663316238313335316230306235633165633437223b6964656e746974797c733a31393a2261646d696e406d79626f6e666972652e636f6d223b726f6c655f69647c733a313a2231223b6c6f676765645f696e7c623a313b7265717565737465645f706167657c733a33353a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e706870223b70726576696f75735f706167657c733a33353a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e706870223b6c616e67756167657c733a373a22656e676c697368223b),
('07e9cb7fb6a1e6b6222e2d684936a22f7328503a', '127.0.0.1', 1462347650, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436323334373336323b757365725f69647c733a313a2231223b617574685f637573746f6d7c733a353a2261646d696e223b757365725f746f6b656e7c733a34303a2238643166326362346662653831383039363436666663316238313335316230306235633165633437223b6964656e746974797c733a31393a2261646d696e406d79626f6e666972652e636f6d223b726f6c655f69647c733a313a2231223b6c6f676765645f696e7c623a313b7265717565737465645f706167657c733a35393a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e7068702f646f63732f646576656c6f7065722f7475745f626c6f67223b70726576696f75735f706167657c733a35393a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e7068702f646f63732f646576656c6f7065722f7475745f626c6f67223b6c616e67756167657c733a373a22656e676c697368223b),
('0140eea32aec4e744e16aa1254c15adbe44fdab1', '127.0.0.1', 1462347915, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436323334373732323b757365725f69647c733a313a2231223b617574685f637573746f6d7c733a353a2261646d696e223b757365725f746f6b656e7c733a34303a2238643166326362346662653831383039363436666663316238313335316230306235633165633437223b6964656e746974797c733a31393a2261646d696e406d79626f6e666972652e636f6d223b726f6c655f69647c733a313a2231223b6c6f676765645f696e7c623a313b7265717565737465645f706167657c733a33353a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e706870223b70726576696f75735f706167657c733a35393a22687474703a2f2f6d656469612d63656e7465722e6c6f63616c2f696e6465782e7068702f646f63732f646576656c6f7065722f7475745f626c6f67223b6c616e67756167657c733a373a22656e676c697368223b);

-- --------------------------------------------------------

--
-- Table structure for table `customeraddress`
--

DROP TABLE IF EXISTS `customeraddress`;
CREATE TABLE IF NOT EXISTS `customeraddress` (
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `email_queue`
--

DROP TABLE IF EXISTS `email_queue`;
CREATE TABLE IF NOT EXISTS `email_queue` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `ITEM_ID` int(11) NOT NULL AUTO_INCREMENT,
  `MANUFACTURER_ID` int(11) NOT NULL,
  `PROMOTION_ID` int(11) DEFAULT NULL,
  `CATEGORY_ID` int(11) NOT NULL,
  `ITEM_NAME` varchar(256) NOT NULL,
  `ITEM_PRICE` float(10,0) NOT NULL,
  `ITEM_QUANTITY` int(11) NOT NULL,
  `IMAGE` varchar(55) NOT NULL,
  PRIMARY KEY (`ITEM_ID`),
  KEY `FK_ITEM_CATEGORY` (`CATEGORY_ID`),
  KEY `FK_ITEM_MANUFACTURER` (`MANUFACTURER_ID`),
  KEY `FK_ITEM_PROMOTION` (`PROMOTION_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`ITEM_ID`, `MANUFACTURER_ID`, `PROMOTION_ID`, `CATEGORY_ID`, `ITEM_NAME`, `ITEM_PRICE`, `ITEM_QUANTITY`, `IMAGE`) VALUES
(1, 1, NULL, 1, 'Modern PHP: New Features and Good Practices', 777, 10, 'ebook_php_1.jpg'),
(2, 1, NULL, 1, 'PhP: Learn PHP Programming Quick & Easy', 777, 10, 'ebook_php_2.jpg'),
(3, 1, NULL, 1, 'PHP and MySQL Web Development (4th Edition)', 777, 10, 'ebook_php_3.jpg'),
(4, 1, NULL, 1, 'PHP Cookbook: Solutions & Examples for PHP Programmers', 777, 10, 'ebook_php_4.jpg'),
(5, 1, NULL, 2, 'dd', 0, 0, 'dd'),
(6, 1, NULL, 2, 'dd', 22, 22, ''),
(7, 1, NULL, 2, 'dd', 22, 22, ''),
(8, 1, NULL, 2, 'dd', 22, 22, ''),
(9, 1, NULL, 2, 'dd', 22, 22, '');

-- --------------------------------------------------------

--
-- Table structure for table `item_supplier`
--

DROP TABLE IF EXISTS `item_supplier`;
CREATE TABLE IF NOT EXISTS `item_supplier` (
  `SUPPLIER_ID` int(11) NOT NULL,
  `ITEM_ID` int(11) NOT NULL,
  PRIMARY KEY (`SUPPLIER_ID`,`ITEM_ID`),
  KEY `FK_ITEM_SUPPLIER2` (`ITEM_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

DROP TABLE IF EXISTS `manufacturer`;
CREATE TABLE IF NOT EXISTS `manufacturer` (
  `MANUFACTURER_ID` int(11) NOT NULL AUTO_INCREMENT,
  `MANUFACTURER_NAME` varchar(50) NOT NULL,
  PRIMARY KEY (`MANUFACTURER_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`MANUFACTURER_ID`, `MANUFACTURER_NAME`) VALUES
(1, 'Kang'),
(2, 'Shang');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

DROP TABLE IF EXISTS `order_item`;
CREATE TABLE IF NOT EXISTS `order_item` (
  `ITEM_ID` int(11) NOT NULL,
  `ORDER_ID` int(11) NOT NULL,
  PRIMARY KEY (`ITEM_ID`,`ORDER_ID`),
  KEY `FK_ORDER_ITEM2` (`ORDER_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paymenttype`
--

DROP TABLE IF EXISTS `paymenttype`;
CREATE TABLE IF NOT EXISTS `paymenttype` (
  `PAYMENT_TYPE_ID` tinyint(4) NOT NULL,
  `PAYMENT_TYPE_DESC` varchar(50) NOT NULL,
  PRIMARY KEY (`PAYMENT_TYPE_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `permission_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(100) NOT NULL,
  `status` enum('active','inactive','deleted') NOT NULL DEFAULT 'active',
  PRIMARY KEY (`permission_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`permission_id`, `name`, `description`, `status`) VALUES
(2, 'Site.Content.View', 'Allow users to view the Content Context', 'active'),
(3, 'Site.Reports.View', 'Allow users to view the Reports Context', 'active'),
(4, 'Site.Settings.View', 'Allow users to view the Settings Context', 'active'),
(5, 'Site.Developer.View', 'Allow users to view the Developer Context', 'active'),
(6, 'Bonfire.Roles.Manage', 'Allow users to manage the user Roles', 'active'),
(7, 'Bonfire.Users.Manage', 'Allow users to manage the site Users', 'active'),
(8, 'Bonfire.Users.View', 'Allow users access to the User Settings', 'active'),
(9, 'Bonfire.Users.Add', 'Allow users to add new Users', 'active'),
(10, 'Bonfire.Database.Manage', 'Allow users to manage the Database settings', 'active'),
(11, 'Bonfire.Emailer.Manage', 'Allow users to manage the Emailer settings', 'active'),
(12, 'Bonfire.Logs.View', 'Allow users access to the Log details', 'active'),
(13, 'Bonfire.Logs.Manage', 'Allow users to manage the Log files', 'active'),
(14, 'Bonfire.Emailer.View', 'Allow users access to the Emailer settings', 'active'),
(15, 'Site.Signin.Offline', 'Allow users to login to the site when the site is offline', 'active'),
(16, 'Bonfire.Permissions.View', 'Allow access to view the Permissions menu unders Settings Context', 'active'),
(17, 'Bonfire.Permissions.Manage', 'Allow access to manage the Permissions in the system', 'active'),
(18, 'Bonfire.Modules.Add', 'Allow creation of modules with the builder.', 'active'),
(19, 'Bonfire.Modules.Delete', 'Allow deletion of modules.', 'active'),
(20, 'Permissions.Administrator.Manage', 'To manage the access control permissions for the Administrator role.', 'active'),
(21, 'Permissions.Editor.Manage', 'To manage the access control permissions for the Editor role.', 'active'),
(49, 'Bonfire.Roles.Add', 'To add New Roles', 'active'),
(23, 'Permissions.User.Manage', 'To manage the access control permissions for the User role.', 'active'),
(24, 'Permissions.Developer.Manage', 'To manage the access control permissions for the Developer role.', 'active'),
(48, 'Bonfire.Profiler.View', 'To view the Console Profiler Bar.', 'active'),
(26, 'Activities.Own.View', 'To view the users own activity logs', 'active'),
(27, 'Activities.Own.Delete', 'To delete the users own activity logs', 'active'),
(28, 'Activities.User.View', 'To view the user activity logs', 'active'),
(29, 'Activities.User.Delete', 'To delete the user activity logs, except own', 'active'),
(30, 'Activities.Module.View', 'To view the module activity logs', 'active'),
(31, 'Activities.Module.Delete', 'To delete the module activity logs', 'active'),
(32, 'Activities.Date.View', 'To view the users own activity logs', 'active'),
(33, 'Activities.Date.Delete', 'To delete the dated activity logs', 'active'),
(34, 'Bonfire.UI.Manage', 'Manage the Bonfire UI settings', 'active'),
(35, 'Bonfire.Settings.View', 'To view the site settings page.', 'active'),
(36, 'Bonfire.Settings.Manage', 'To manage the site settings.', 'active'),
(37, 'Bonfire.Activities.View', 'To view the Activities menu.', 'active'),
(38, 'Bonfire.Database.View', 'To view the Database menu.', 'active'),
(39, 'Bonfire.Migrations.View', 'To view the Migrations menu.', 'active'),
(40, 'Bonfire.Builder.View', 'To view the Modulebuilder menu.', 'active'),
(41, 'Bonfire.Roles.View', 'To view the Roles menu.', 'active'),
(42, 'Bonfire.Sysinfo.View', 'To view the System Information page.', 'active'),
(43, 'Bonfire.Translate.Manage', 'To manage the Language Translation.', 'active'),
(44, 'Bonfire.Translate.View', 'To view the Language Translate menu.', 'active'),
(45, 'Bonfire.UI.View', 'To view the UI/Keyboard Shortcut menu.', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

DROP TABLE IF EXISTS `promotion`;
CREATE TABLE IF NOT EXISTS `promotion` (
  `PROMOTION_ID` int(11) NOT NULL AUTO_INCREMENT,
  `START_DATE` datetime DEFAULT NULL,
  `END_DATE` datetime DEFAULT NULL,
  `DISCOUNT_PERCENT` tinyint(4) DEFAULT NULL,
  `PROMOTION_CODE` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`PROMOTION_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `returnstatus`
--

DROP TABLE IF EXISTS `returnstatus`;
CREATE TABLE IF NOT EXISTS `returnstatus` (
  `RETURN_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `START_DATE` date NOT NULL,
  `END_DATE` date NOT NULL,
  `STATUS` tinyint(4) NOT NULL,
  PRIMARY KEY (`RETURN_ID`),
  KEY `FK_USER_RETURN` (`USER_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `returnstatus_item`
--

DROP TABLE IF EXISTS `returnstatus_item`;
CREATE TABLE IF NOT EXISTS `returnstatus_item` (
  `RETURN_ID` int(11) NOT NULL,
  `ITEM_ID` int(11) NOT NULL,
  PRIMARY KEY (`RETURN_ID`,`ITEM_ID`),
  KEY `FK_RETURNSTATUS_ITEM2` (`ITEM_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `REVIEW_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USER_ID` int(11) NOT NULL,
  `ITEM_ID` int(11) NOT NULL,
  `RATING` tinyint(4) NOT NULL,
  `COMMENT` text,
  PRIMARY KEY (`REVIEW_ID`),
  KEY `FK_ITEM_REVIEWS` (`ITEM_ID`),
  KEY `FK_USER_REVIEW` (`USER_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `ROLE_ID` tinyint(4) NOT NULL,
  `ROLE_NAME` varchar(25) NOT NULL,
  `DESCRIPTION` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ROLE_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(60) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `default` tinyint(1) NOT NULL DEFAULT '0',
  `can_delete` tinyint(1) NOT NULL DEFAULT '1',
  `login_destination` varchar(255) NOT NULL DEFAULT '/',
  `default_context` varchar(255) DEFAULT 'content',
  `deleted` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`role_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`, `description`, `default`, `can_delete`, `login_destination`, `default_context`, `deleted`) VALUES
(1, 'Administrator', 'Has full control over every aspect of the site.', 0, 0, '', 'content', 0),
(2, 'Editor', 'Can handle day-to-day management, but does not have full power.', 0, 1, '', 'content', 0),
(4, 'User', 'This is the default user with access to login.', 1, 0, '', 'content', 0),
(6, 'Developer', 'Developers typically are the only ones that can access the developer tools. Otherwise identical to Administrators, at least until the site is handed off.', 0, 1, '', 'content', 0);

-- --------------------------------------------------------

--
-- Table structure for table `role_permissions`
--

DROP TABLE IF EXISTS `role_permissions`;
CREATE TABLE IF NOT EXISTS `role_permissions` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  PRIMARY KEY (`role_id`,`permission_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role_permissions`
--

INSERT INTO `role_permissions` (`role_id`, `permission_id`) VALUES
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 23),
(1, 24),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(1, 36),
(1, 37),
(1, 38),
(1, 39),
(1, 40),
(1, 41),
(1, 42),
(1, 43),
(1, 44),
(1, 45),
(1, 48),
(1, 49),
(2, 2),
(2, 3),
(6, 2),
(6, 3),
(6, 4),
(6, 5),
(6, 6),
(6, 7),
(6, 8),
(6, 9),
(6, 10),
(6, 11),
(6, 12),
(6, 13),
(6, 48);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
CREATE TABLE IF NOT EXISTS `role_user` (
  `ROLE_ID` tinyint(4) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  PRIMARY KEY (`ROLE_ID`,`USER_ID`),
  KEY `FK_ROLE_USER2` (`USER_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schema_version`
--

DROP TABLE IF EXISTS `schema_version`;
CREATE TABLE IF NOT EXISTS `schema_version` (
  `type` varchar(40) NOT NULL,
  `version` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `schema_version`
--

INSERT INTO `schema_version` (`type`, `version`) VALUES
('core', 43);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `name` varchar(30) NOT NULL,
  `module` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`name`, `module`, `value`) VALUES
('site.title', 'core', 'My Bonfire'),
('site.system_email', 'core', 'admin@mybonfire.com'),
('site.status', 'core', '1'),
('site.list_limit', 'core', '25'),
('site.show_profiler', 'core', '1'),
('site.show_front_profiler', 'core', '1'),
('auth.allow_register', 'core', '1'),
('auth.login_type', 'core', 'email'),
('auth.use_usernames', 'core', '1'),
('auth.allow_remember', 'core', '1'),
('auth.remember_length', 'core', '1209600'),
('auth.do_login_redirect', 'core', '1'),
('auth.use_extended_profile', 'core', '0'),
('sender_email', 'email', ''),
('protocol', 'email', 'mail'),
('mailpath', 'email', '/usr/sbin/sendmail'),
('smtp_host', 'email', ''),
('smtp_user', 'email', ''),
('smtp_pass', 'email', ''),
('smtp_port', 'email', ''),
('smtp_timeout', 'email', ''),
('mailtype', 'email', 'text'),
('site.languages', 'core', 'a:3:{i:0;s:7:"english";i:1;s:10:"portuguese";i:2;s:7:"persian";}'),
('auth.allow_name_change', 'core', '1'),
('auth.name_change_frequency', 'core', '1'),
('auth.name_change_limit', 'core', '1'),
('auth.password_min_length', 'core', '8'),
('auth.password_force_numbers', 'core', '0'),
('auth.password_force_symbols', 'core', '0'),
('auth.password_force_mixed_case', 'core', '0'),
('form_save', 'core.ui', 'ctrl+s/⌘+s'),
('goto_content', 'core.ui', 'alt+c'),
('auth.user_activation_method', 'core', '0'),
('auth.password_show_labels', 'core', '0'),
('password_iterations', 'users', '8'),
('site.offline_reason', 'core', '');

-- --------------------------------------------------------

--
-- Table structure for table `shippingtype`
--

DROP TABLE IF EXISTS `shippingtype`;
CREATE TABLE IF NOT EXISTS `shippingtype` (
  `SHIPPING_TYPE_ID` int(11) NOT NULL,
  `SHIPPING_TYPE_NAME` varchar(50) NOT NULL,
  `SHIPPING_COST` float(6,0) NOT NULL,
  `SHIPPING_DAYS` tinyint(4) NOT NULL,
  PRIMARY KEY (`SHIPPING_TYPE_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE IF NOT EXISTS `supplier` (
  `SUPPLIER_ID` int(11) NOT NULL,
  `SUPPLIER_NAME` varchar(50) NOT NULL,
  `SUPPLIER_TYPE` varchar(50) NOT NULL,
  PRIMARY KEY (`SUPPLIER_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trackingtable`
--

DROP TABLE IF EXISTS `trackingtable`;
CREATE TABLE IF NOT EXISTS `trackingtable` (
  `TRACKING_ID` int(11) NOT NULL AUTO_INCREMENT,
  `POSITION` varchar(200) NOT NULL,
  `TIME` datetime NOT NULL,
  PRIMARY KEY (`TRACKING_ID`,`POSITION`,`TIME`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `userpayment`
--

DROP TABLE IF EXISTS `userpayment`;
CREATE TABLE IF NOT EXISTS `userpayment` (
  `PAYMENT_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `CARD_NAME` varchar(50) NOT NULL,
  `CREDIT_CARD_NUMBER` varchar(20) NOT NULL,
  `SECURITY_NUMBER` int(11) NOT NULL,
  `EXP_DATE` varchar(1024) NOT NULL,
  PRIMARY KEY (`PAYMENT_ID`),
  KEY `FK_USER_PAYMENT` (`USER_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `email`, `username`, `password_hash`, `reset_hash`, `last_login`, `last_ip`, `created_on`, `deleted`, `reset_by`, `banned`, `ban_message`, `display_name`, `display_name_changed`, `timezone`, `language`, `active`, `activate_hash`, `force_password_reset`) VALUES
(1, 1, 'admin@mybonfire.com', 'admin', '$2a$08$8DW9IP/B/xA7AIFvrMHhTOIFjfnfNLmDunE.J7iZ94QDV66lmHpxS', NULL, '2016-05-04 07:48:27', '127.0.0.1', '2016-04-22 22:01:17', 0, NULL, 0, NULL, 'admin', NULL, 'UM6', 'english', 1, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_cookies`
--

DROP TABLE IF EXISTS `user_cookies`;
CREATE TABLE IF NOT EXISTS `user_cookies` (
  `user_id` bigint(20) unsigned NOT NULL,
  `token` varchar(128) NOT NULL,
  `created_on` datetime NOT NULL,
  KEY `token` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_item_favourite`
--

DROP TABLE IF EXISTS `user_item_favourite`;
CREATE TABLE IF NOT EXISTS `user_item_favourite` (
  `USER_ID` int(11) NOT NULL,
  `ITEM_ID` int(11) NOT NULL,
  PRIMARY KEY (`USER_ID`,`ITEM_ID`),
  KEY `FK_USER_ITEM_FAVOURITE2` (`ITEM_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_meta`
--

DROP TABLE IF EXISTS `user_meta`;
CREATE TABLE IF NOT EXISTS `user_meta` (
  `meta_id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) NOT NULL DEFAULT '',
  `meta_value` text,
  PRIMARY KEY (`meta_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

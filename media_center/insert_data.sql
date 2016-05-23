-- --------------------------------------------------------
-- Host:                         192.168.33.12
-- Server version:               5.1.73 - Source distribution
-- Server OS:                    redhat-linux-gnu
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- Dumping data for table media_center.activities: 1 rows
DELETE FROM `activities`;
/*!40000 ALTER TABLE `activities` DISABLE KEYS */;
INSERT INTO `activities` (`activity_id`, `user_id`, `activity`, `module`, `created_on`, `deleted`) VALUES
	(1, 1, 'logged in from: 127.0.0.1', 'users', '2016-05-04 07:48:27', 0);
/*!40000 ALTER TABLE `activities` ENABLE KEYS */;

-- Dumping data for table media_center.cart: 0 rows
DELETE FROM `cart`;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;

-- Dumping data for table media_center.cart_item: 0 rows
DELETE FROM `cart_item`;
/*!40000 ALTER TABLE `cart_item` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart_item` ENABLE KEYS */;

-- Dumping data for table media_center.category: 17 rows
DELETE FROM `category`;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`CATEGORY_ID`, `CATEGORY_CATEGORY_ID`, `CATEGORY_NAME`, `CATEGORY_PRIORITY`) VALUES
	(1, NULL, 'Sách', 0),
	(2, NULL, 'Máy Ảnh', 3),
	(3, 1, 'Programming Languages', 1),
	(4, 1, 'Truyện Tranh', 2),
	(5, NULL, 'Di Động', 4),
	(6, NULL, 'Máy Tính', 5),
	(7, NULL, 'TV & Âm Thanh', 6),
	(8, 7, 'LED TV', 7),
	(9, 7, 'TV 4K', 8),
	(10, 7, 'Smart TV', 9),
	(11, 6, 'Laptop', 10),
	(12, 6, 'Máy để bàn', 11),
	(13, 5, 'Smart phone', 12),
	(14, 5, 'Tablet', 13),
	(15, 1, 'Văn Học', 14),
	(16, 1, 'Sách Giáo Khoa', 15),
	(17, 7, 'Loa', 16);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;


-- Dumping data for table media_center.customeraddress: 0 rows
DELETE FROM `customeraddress`;
/*!40000 ALTER TABLE `customeraddress` DISABLE KEYS */;
/*!40000 ALTER TABLE `customeraddress` ENABLE KEYS */;

-- Dumping data for table media_center.email_queue: 0 rows
DELETE FROM `email_queue`;
/*!40000 ALTER TABLE `email_queue` DISABLE KEYS */;
/*!40000 ALTER TABLE `email_queue` ENABLE KEYS */;

-- Dumping data for table media_center.item: 29 rows
DELETE FROM `item`;
/*!40000 ALTER TABLE `item` DISABLE KEYS */;
INSERT INTO `item` (`ITEM_ID`, `MANUFACTURER_ID`, `PROMOTION_ID`, `CATEGORY_ID`, `ITEM_NAME`, `ITEM_PRICE`, `ITEM_QUANTITY`, `IMAGE`) VALUES
	(1, 2, NULL, 1, 'Modern PHP: New Features and Good Practices', 116000, 10, 'ebook_php_1.jpg'),
	(2, 2, NULL, 1, 'PhP: Learn PHP Programming Quick & Easy', 100000, 10, 'ebook_php_2.jpg'),
	(3, 2, NULL, 1, 'PHP and MySQL Web Development (4th Edition)', 99000, 10, 'ebook_php_3.jpg'),
	(4, 2, NULL, 1, 'PHP Cookbook: Solutions & Examples for PHP Programmers', 86500, 10, 'ebook_php_4.jpg'),
	(25, 5, NULL, 14, 'iPad Air 2 Cellular 16 GB', 12990000, 100000, 'ipad-mini-witb-gold-wif-201410.jpg'),
	(24, 1, NULL, 2, 'Máy Ảnh Sony DSC WX220 - 18.2 Megapixel, Zoom 10x', 3450000, 100000, 'sony-2837-159831-1-zoom.jpg'),
	(23, 1, NULL, 2, 'Máy Ảnh Sony WX500', 6490000, 100000, '632a391d86154e7c2e570b00bc7f4ed4.jpg'),
	(21, 5, NULL, 13, 'iPhone 6 16GB', 15600000, 100000, 'iphone-hong-1_1_1_11=.jpg'),
	(22, 10, NULL, 13, 'Samsung Galaxy S6', 18600000, 100000, 'gold1.jpg'),
	(9, 2, NULL, 3, 'Hamilton: The Revolution', 172000, 22, '20810558.jpg'),
	(10, 2, NULL, 3, 'The Rainbow Comes and Goes: A Mother and Son On Life, Love, and Loss', 28000, 2, 'e15f2d8e988bca99901aaeb16d4bec045143e690.f246x186.jpg'),
	(11, 2, NULL, 3, 'Oh, The Places You\'ll Go!', 51000, 2, 'ebook_php.jpg'),
	(12, 2, NULL, 3, 'Cravings: Recipes for All the Food You Want to Eat', 116000, 2, 'ebook_php_1.jpg'),
	(13, 2, NULL, 4, 'Me Before You', 56000, 2, 'ebook_php_2.jpg'),
	(14, 2, NULL, 4, 'It\'s All Easy: Delicious Weekday Recipes for the Super-Busy Home Cook', 88600, 2, 'ebook_php_3.jpg'),
	(15, 2, NULL, 4, 'The Tumor: A Non-Legal Thriller', 116000, 2, 'ebook_php_4.jpg'),
	(16, 2, NULL, 4, 'Left Alive #1: A Zombie Apocalypse Novel', 16000, 2, 'images.jpg'),
	(17, 2, NULL, 15, 'Seduction Wears Sapphires (The Jaded Gentlemen Book 2)', 26000, 2, 'list-explosion-plr-ebook-cover-246x186.jpg'),
	(18, 2, NULL, 16, 'Isle of Night (The Watchers Book 1)', 98000, 2, 'targeted-traffic-simplified-plr-ebook-cover-246x186.jpg'),
	(19, 2, NULL, 16, 'Come the Dawn (The Dangerous Delameres Book 2)', 76000, 2, 'your-perfect-right-plr-ebook-cover-246x186.jpg'),
	(20, 2, NULL, 16, 'Summer with a Star (Second Chances Book 1)', 99860, 2, 'ebook_php_4.jpg'),
	(26, 5, NULL, 11, 'Macbook Pro 15 MJLT2ZP/A', 54590000, 100000, 'mjlt2zpa (1).u425.d20160412.t125155.jpg'),
	(27, 5, NULL, 11, 'Macbook Pro 15 MJLT2ZP/A', 54590000, 100000, 'mjlt2zpa (1).u425.d20160412.t125155.jpg'),
	(28, 9, NULL, 11, 'Laptop Dell Latitude 7450 L4I77450 Bạc', 32490000, 100000, 'latitude-7450-5.jpg'),
	(29, 11, NULL, 8, 'Tivi LED LG 42LF550T 42 inch', 8990000, 100000, 'tivi-toshiba-40l2550-40l2550vn-40-inches-4.jpg'),
	(30, 1, NULL, 9, 'Tivi LED Sony KDL-40R350C 40 inch', 7990000, 100000, 'kdl-40r350c.jpg'),
	(31, 10, NULL, 10, 'Tivi LED Samsung UA40J5100 40 inch', 6990000, 100000, 'tivi_samsung_ua40j5100akxxv_led.jpg'),
	(32, 1, NULL, 17, 'Loa Sony SRS-D8', 3650000, 100000, 'loa_sony_srs-d8.jpeg'),
	(33, 1, NULL, 17, 'Loa Bluetooth Sony SRS-X88 ', 9650000, 100000, '51geru8vckl._sl1200_.jpg');
/*!40000 ALTER TABLE `item` ENABLE KEYS */;

-- Dumping data for table media_center.item_supplier: 6 rows
DELETE FROM `item_supplier`;
/*!40000 ALTER TABLE `item_supplier` DISABLE KEYS */;
INSERT INTO `item_supplier` (`SUPPLIER_ID`, `ITEM_ID`) VALUES
	(1, 1),
	(1, 2),
	(1, 3),
	(2, 1),
	(2, 5),
	(3, 15);
/*!40000 ALTER TABLE `item_supplier` ENABLE KEYS */;

-- Dumping data for table media_center.login_attempts: 0 rows
DELETE FROM `login_attempts`;
/*!40000 ALTER TABLE `login_attempts` DISABLE KEYS */;
/*!40000 ALTER TABLE `login_attempts` ENABLE KEYS */;

-- Dumping data for table media_center.manufacturer: 11 rows
DELETE FROM `manufacturer`;
/*!40000 ALTER TABLE `manufacturer` DISABLE KEYS */;
INSERT INTO `manufacturer` (`MANUFACTURER_ID`, `MANUFACTURER_NAME`) VALUES
	(1, 'Sony'),
	(2, 'Kim Đồng'),
	(3, 'Nokia'),
	(4, 'Locker'),
	(5, 'Apple'),
	(6, 'Converse'),
	(7, 'Nike'),
	(8, 'HP'),
	(9, 'DELL'),
	(10, 'Samsung'),
	(11, 'LG');
/*!40000 ALTER TABLE `manufacturer` ENABLE KEYS */;

-- Dumping data for table media_center.orders: 0 rows
DELETE FROM `orders`;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping data for table media_center.order_item: 0 rows
DELETE FROM `order_item`;
/*!40000 ALTER TABLE `order_item` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_item` ENABLE KEYS */;

-- Dumping data for table media_center.paymenttype: 0 rows
DELETE FROM `paymenttype`;
/*!40000 ALTER TABLE `paymenttype` DISABLE KEYS */;
/*!40000 ALTER TABLE `paymenttype` ENABLE KEYS */;


-- Dumping data for table media_center.promotion: 0 rows
DELETE FROM `promotion`;
/*!40000 ALTER TABLE `promotion` DISABLE KEYS */;
/*!40000 ALTER TABLE `promotion` ENABLE KEYS */;

-- Dumping data for table media_center.returnstatus: 0 rows
DELETE FROM `returnstatus`;
/*!40000 ALTER TABLE `returnstatus` DISABLE KEYS */;
/*!40000 ALTER TABLE `returnstatus` ENABLE KEYS */;

-- Dumping data for table media_center.returnstatus_item: 0 rows
DELETE FROM `returnstatus_item`;
/*!40000 ALTER TABLE `returnstatus_item` DISABLE KEYS */;
/*!40000 ALTER TABLE `returnstatus_item` ENABLE KEYS */;

-- Dumping data for table media_center.reviews: 0 rows
DELETE FROM `reviews`;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;

-- Dumping data for table media_center.role: 0 rows
DELETE FROM `role`;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
/*!40000 ALTER TABLE `role` ENABLE KEYS */;

-- Dumping data for table media_center.supplier: 3 rows
DELETE FROM `supplier`;
/*!40000 ALTER TABLE `supplier` DISABLE KEYS */;
INSERT INTO `supplier` (`SUPPLIER_ID`, `SUPPLIER_NAME`, `SUPPLIER_TYPE`) VALUES
	(1, 'Tiki', '1'),
	(2, 'FPT Trading', '1'),
	(3, 'Sony Vietnam', '2');
/*!40000 ALTER TABLE `supplier` ENABLE KEYS */;

-- Dumping data for table media_center.trackingtable: 0 rows
DELETE FROM `trackingtable`;
/*!40000 ALTER TABLE `trackingtable` DISABLE KEYS */;
/*!40000 ALTER TABLE `trackingtable` ENABLE KEYS */;

-- Dumping data for table media_center.user: 0 rows
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

-- Dumping data for table media_center.userpayment: 0 rows
DELETE FROM `userpayment`;
/*!40000 ALTER TABLE `userpayment` DISABLE KEYS */;
/*!40000 ALTER TABLE `userpayment` ENABLE KEYS */;


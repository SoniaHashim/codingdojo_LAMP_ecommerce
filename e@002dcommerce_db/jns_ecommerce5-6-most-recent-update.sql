:e@002dcommerce_db/jns_ecommercedb.sql
SELECT 
products.id as id, products.name as name, images.file_path as image, products.description as description, products.price as price
FROM products_has_categories 
LEFT JOIN products ON products.id = products_has_categories.product_id 
LEFT JOIN categories ON categories.id = products_has_categories.category_id 
LEFT JOIN images ON products.image_id = images.id
WHERE name LIKE '%%' AND  category LIKE '%Marvel%' 
ORDER BY id ASC
LIMIT 0, 5 
-- MySQL dump 10.13  Distrib 5.6.19, for osx10.7 (i386)
--
-- Host: 127.0.0.1    Database: jns_ecommercedb
-- ------------------------------------------------------
-- Server version	5.5.38

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
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `addresses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `zip` varchar(45) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addresses`
--

LOCK TABLES `addresses` WRITE;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
INSERT INTO `addresses` VALUES (1,'Lorem','Ipsum','100 Ipsum Way',NULL,'Ipsum City','10203','CA','2015-05-04 10:05:42','2015-05-04 10:05:42'),(2,'Cheese','Ipsum','121 Ipsum Way',NULL,'Ipsum city','10402','CA','2015-05-04 10:11:24','2015-05-04 10:11:24'),(3,'Zombie','Ipsum','111 Ipsum Way',NULL,'Ipsum City','10100','CA','2015-05-04 10:11:24','2015-05-04 10:11:24'),(4,'Coffee','Ipsum','121 Ipsum Way',NULL,'Ipsum City','10402','CA','2015-05-04 10:11:24','2015-05-04 10:11:24'),(5,'Corporate','Ipsum','100 Technology Drive',NULL,'San Jose','95110','CA','2015-05-04 10:11:24','2015-05-04 10:11:24');
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `salt` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES (1,'soniashashim@gmail.com','ad029de9c34846b458d902abd31e1cc8','06B8'),(2,'fortis201@gmail.com','2de51804b1ee919f7800c91edaa6d20b','YHH8'),(3,'jae@admin.com','ad029de9c34846b458d902abd31e1cc8','06B8'),(4,'jerome@admin.com','ad029de9c34846b458d902abd31e1cc8','06B8');
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carts`
--

DROP TABLE IF EXISTS `carts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carts`
--

LOCK TABLES `carts` WRITE;
/*!40000 ALTER TABLE `carts` DISABLE KEYS */;
INSERT INTO `carts` VALUES (1,'2015-05-05 12:39:04','2015-05-05 12:39:04'),(2,'2015-05-05 12:39:04','2015-05-05 12:39:04'),(3,'2015-05-05 12:39:05','2015-05-05 12:39:05'),(4,'2015-05-05 12:41:10','2015-05-05 12:41:10'),(5,'2015-05-05 12:41:10','2015-05-05 12:41:10'),(6,'2015-05-05 12:41:11','2015-05-05 12:41:11'),(7,'2015-05-05 13:10:32','2015-05-05 13:10:32'),(8,'2015-05-05 13:10:32','2015-05-05 13:10:32'),(9,'2015-05-05 13:10:33','2015-05-05 13:10:33'),(10,'2015-05-06 09:32:26','2015-05-06 09:32:26'),(11,'2015-05-06 09:32:27','2015-05-06 09:32:27'),(12,'2015-05-06 15:07:20','2015-05-06 15:07:20'),(13,'2015-05-06 15:07:21','2015-05-06 15:07:21');
/*!40000 ALTER TABLE `carts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carts_has_products`
--

DROP TABLE IF EXISTS `carts_has_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carts_has_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quantity` int(11) DEFAULT NULL,
  `products_id` int(11) NOT NULL,
  `carts_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_carts_has_products_products1_idx` (`products_id`),
  KEY `fk_carts_has_products_carts1_idx` (`carts_id`),
  CONSTRAINT `fk_carts_has_products_carts1` FOREIGN KEY (`carts_id`) REFERENCES `carts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_carts_has_products_products1` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carts_has_products`
--

LOCK TABLES `carts_has_products` WRITE;
/*!40000 ALTER TABLE `carts_has_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `carts_has_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Figma'),(2,'Graphic Novel'),(3,'DC'),(4,'Marvel'),(5,'Final Fantasy'),(6,'Legend Of Zelda'),(7,'Persona 4'),(8,'Star Wars'),(9,'Tomb Raider'),(10,'Star Trek'),(11,'Batman'),(12,'Final Fantasy 7'),(13,'Final Fantasy 13'),(14,'Green Lantern'),(15,'Avengers'),(16,'X-men');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_path` varchar(255) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,'/assets/products/AbsoluteVisionVol1.jpg',15),(2,'/assets/products/AbsoluteVisionVol1.jpg',16),(3,'/assets/products/AgentOfTheEmpireVol1.jpg',22),(4,'/assets/products/AgentOfTheEmpireVol2.jpg',23),(5,'/assets/products/AgeOfApocalypseVol1.jpg',18),(6,'/assets/products/AgeOfApocalypseVol2.jpg',19),(7,'/assets/products/AgeOfUltron.jpg',17),(8,'/assets/products/ALongTimeAgoVol2.jpg',24),(9,'/assets/products/AbsoluteBlackestNight.jpg',12),(10,'/assets/products/AbsoluteGreenLanternRebirth.jpg',13),(11,'/assets/products/AssignmentEarth.jpg',20),(12,'/assets/products/Batman-CourtOfOwls.jpg',10),(13,'/assets/products/BatmanAndRobinTheBoyWonder.jpg',11),(14,'/assets/products/BlackestNightTheCorps.jpg',14),(15,'/assets/products/CloudBack.jpg',2),(16,'/assets/products/CloudMain.jpg',2),(17,'/assets/products/CloudOmnislash.jpg',2),(18,'/assets/products/CloudStance.jpg',2),(19,'/assets/products/DarthVaderGrip.jpg',8),(20,'/assets/products/DarthVaderMain.jpg',8),(21,'/assets/products/DarthVaderSide.jpg',8),(22,'/assets/products/DarthVaderSlash.jpg',8),(23,'/assets/products/DS9FoolsGold.jpg',21),(24,'/assets/products/HarleyVairantBack.jpg',1),(25,'/assets/products/HarleyVairantMain.jpg',1),(26,'/assets/products/HarleyVairantStance.jpg',1),(27,'/assets/products/HarleyVairantWalk.jpg',1),(28,'/assets/products/IronManBack.jpg',6),(29,'/assets/products/IronManMain.jpg',6),(30,'/assets/products/IronManShot.jpg',6),(31,'/assets/products/IronManStance.jpg',6),(32,'/assets/products/LaraGeared.jpg',9),(33,'/assets/products/LaraMain.jpg',9),(34,'/assets/products/LaraSide.jpg',9),(35,'/assets/products/LaraStance.jpg',9),(36,'/assets/products/LightningBack.jpg',4),(37,'/assets/products/LightningMain.jpg',4),(38,'/assets/products/LightningStance.jpg',4),(39,'/assets/products/LightningStance2.jpg',4),(40,'/assets/products/LinkBack.jpg',5),(41,'/assets/products/LinkMain.jpg',5),(42,'/assets/products/LinkPreview.jpg',5),(43,'/assets/products/LinkStance.jpg',5),(44,'/assets/products/NarukamiYuCard.jpg',7),(45,'/assets/products/NarukamiYuMain.jpg',7),(46,'/assets/products/NarukamiYuPreview.jpg',7),(47,'/assets/products/NarukamiYuStance.jpg',7),(48,'/assets/products/TifaBack.jpg',3),(49,'/assets/products/TifaMain.jpg',3),(50,'/assets/products/TifaStance.jpg',3),(51,'/assets/products/TifaStance2.jpg',3);
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(255) DEFAULT NULL,
  `subtotal` float(6,2) DEFAULT NULL,
  `shipping_fee` float(3,2) DEFAULT NULL,
  `total` float(6,2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `billing_address_id` int(11) NOT NULL,
  `ship_address_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_orders_addresses1_idx` (`billing_address_id`),
  KEY `fk_orders_addresses2_idx` (`ship_address_id`),
  CONSTRAINT `fk_orders_addresses1` FOREIGN KEY (`billing_address_id`) REFERENCES `addresses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_orders_addresses2` FOREIGN KEY (`ship_address_id`) REFERENCES `addresses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,'order_in_process',269.96,5.00,274.96,'2015-05-04 15:25:51','2015-05-04 15:25:51',1,2),(2,'shipped',369.92,5.00,374.92,'2015-05-04 15:50:43','2015-05-04 15:50:43',3,3),(3,'order_in_process',124.99,5.00,129.99,'2015-05-04 15:50:43','2015-05-04 15:50:43',1,1),(4,'cancelled',164.97,5.00,169.97,'2015-05-04 16:13:53','2015-05-04 16:13:53',4,4),(5,'order_in_process',424.96,5.00,429.96,'2015-05-06 16:38:25','2015-05-06 16:38:25',5,5),(6,'cancelled',214.96,5.00,219.96,'2015-05-06 17:05:59','2015-05-06 17:05:59',3,3),(7,'order_in_process',129.94,5.00,134.94,'2015-05-06 17:05:59','2015-05-06 17:05:59',4,2),(8,'shipped',179.94,5.00,184.94,'2015-05-06 17:05:59','2015-05-06 17:05:59',1,3),(9,'order_in_process',889.93,5.00,894.93,'2015-05-06 17:05:59','2015-05-06 17:05:59',1,2),(10,'order_in_process',149.99,5.00,154.99,'2015-05-06 17:05:59','2015-05-06 17:05:59',3,3),(11,'order_in_process',219.97,5.00,224.97,'2015-05-06 17:05:59','2015-05-06 17:05:59',5,4),(12,'order_in_process',249.98,5.00,254.98,'2015-05-06 17:05:59','2015-05-06 17:05:59',4,5),(13,'order_in_process',249.98,5.00,254.98,'2015-05-06 17:05:59','2015-05-06 17:05:59',2,2),(14,'shipped',229.95,5.00,234.95,'2015-05-06 17:05:59','2015-05-06 17:05:59',1,4),(15,'order_in_process',249.98,5.00,254.98,'2015-05-06 17:05:59','2015-05-06 17:05:59',4,3),(16,'order_in_process',104.97,5.00,109.97,'2015-05-06 17:05:59','2015-05-06 17:05:59',2,2),(17,'order_in_process',199.98,5.00,204.98,'2015-05-06 17:05:59','2015-05-06 17:05:59',5,1),(18,'order_in_process',99.99,5.00,104.99,'2015-05-06 17:05:59','2015-05-06 17:05:59',1,5),(19,'order_in_process',99.99,5.00,104.99,'2015-05-06 17:05:59','2015-05-06 17:05:59',3,4),(20,'order_in_process',89.97,5.00,94.97,'2015-05-06 17:05:59','2015-05-06 17:05:59',3,3);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders_has_products`
--

DROP TABLE IF EXISTS `orders_has_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders_has_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_orders_has_products_products1_idx` (`product_id`),
  KEY `fk_orders_has_products_orders1_idx` (`order_id`),
  CONSTRAINT `fk_orders_has_products_orders1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_orders_has_products_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders_has_products`
--

LOCK TABLES `orders_has_products` WRITE;
/*!40000 ALTER TABLE `orders_has_products` DISABLE KEYS */;
INSERT INTO `orders_has_products` VALUES (1,1,1,1),(2,1,5,1),(3,1,10,2),(4,2,8,2),(5,2,22,3),(6,2,23,3),(7,3,8,1),(19,4,18,1),(20,4,19,1),(21,4,17,1),(22,5,6,3),(23,5,8,1),(24,6,14,3),(25,6,8,1),(26,7,20,2),(27,7,21,2),(28,7,24,2),(29,8,12,2),(30,8,13,2),(31,8,14,2),(32,9,4,3),(33,9,9,2),(34,9,1,2),(35,10,4,1),(36,11,5,2),(37,11,20,1),(38,12,2,1),(39,12,3,1),(40,13,2,1),(41,13,2,1),(42,14,7,1),(43,14,15,2),(44,14,16,2),(45,15,8,2),(46,16,15,1),(47,16,16,1),(48,16,17,1),(49,17,6,1),(50,17,5,1),(51,18,9,1),(52,19,5,1),(53,20,18,1),(54,20,19,1),(55,20,20,1);
/*!40000 ALTER TABLE `orders_has_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) DEFAULT NULL,
  `description` text,
  `price` float(6,2) DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `inventory_count` int(11) DEFAULT NULL,
  `quantity_sold` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Harley Quinn','Harley Quinn - DC Comics VARIANT PLAY ARTS Kai!\n	- Size: about W 115mm × D 80 × H 250mm\n	- Parts included: hand × 2 hammer, replacement',119.99,25,130,1002,'2015-05-04 14:12:25','2015-05-04 14:15:40'),(2,'Cloud Strife','Cloud Strife from Final Fantasy VII: Advent Children by PLAY ARTS Kai! \n	- Includes the melancholy expression and hair style, cloudy Wolf shoulder armor, all of the ornaments that were decorated in the costume. \n	- Includes one large Buster Sword and six separated swords, for a total of seven swords.',124.99,16,124,1050,'2015-05-04 14:12:25','2015-05-04 14:15:40'),(3,'Tifa Lockhart','Tifa Lockheart from Final Fanasy VII: Advent Children by PLAYARTS Kai! 	\n	- Separate interchangeable parts allow a change of expression and style.	\n	- Accessories: Replacement head, and replacement hands × 7 ',124.99,49,123,1002,'2015-05-04 14:12:25','2015-05-04 14:15:40'),(4,'Lightning','Lightning from Final Fanasy XIII: Lightning Returns by PLAYARTS Kai!\n	-  A soft cloak is attached to the shoulder and waist. \n	- Figure can be moved  to reproduce the various scenes with Night Lotus and Crimson Blitz which are attached as an accessory.\n	- Attached parts: change hand × 3, Crimson Blitz, Night Lotus\n\n\nItem Size/Weight : 30.1 x 23.2 x 10.5 cm / 705g\n\n',149.99,37,123,1003,'2015-05-04 14:12:25','2015-05-04 14:15:40'),(5,'Link','Link from Legend of Zelda by PLAYARTS Kai!\n	-The hilt tip of the Master Sword is not designed to come off, \n	  so please do not try to detach it by force. \n	-If you are having difficulties attaching the Master Sword to the hand, \n	  warming the sword-holding hand part using hair dryer etc. will make it easier.\n	-Item Size/Weight : 22 x 15.1 x 7.6 cm / 261g\n',99.99,41,123,1012,'2015-05-04 14:12:25','2015-05-04 14:15:40'),(6,'Iron Man','Iron Man from Marvel by PLAYARTS Kai!\n	- Accessories and parts: Thigh Micro Missile Parts, Back Flap Replacement Parts, Fist x2, Repulsor Hand x2, Boot Jet Part x2\n	   IItem Size : 30 x 23 x 10 cm\n',99.99,29,120,1020,'2015-05-04 14:12:25','2015-05-04 14:15:40'),(7,'Yu Narukami','Yu Narukami from Persona 4 by PLAYARTS Kai! 	- Figma can stand and pose in a variety of ways via its smooth joints. 	- Parts included: katana, loose glasses, and a persona card 	- An articulated figma stand is included, which allows various poses to be taken.',89.99,45,102,1022,'2015-05-04 14:12:25','2015-05-04 14:15:40'),(8,'Darth Vader','Darth Vader Figma from Star Wars by PLAYARTS Kai!  	- First in this new line, a villain so iconic that has inspired legions of future dark lords: Darth Vader. Featuring a stylish and edgy design inspired by Vader\'s original samurai armor concepts, this is a suit that emanates Vader\'s dark malice. With a flowing cloak and waistcoat, along with a variety of accessories including his iconic lightsaber and force blast, this is the ultimate collector\'s figure of this Dark Lord.  	- Accessories and parts: Lightsaber, Lightsaber With Effects, Force Blast, Replacement Hand x5 	- Item Size : 30 x 27 x 13 cm ',124.99,20,100,1023,'2015-05-04 14:12:25','2015-05-04 14:15:40'),(9,'Lara Croft','Lara Croft by PLAYARTS Kai!\n	- This figma is a reproduction of the heroic adventure. Body dirt and clothes included.\n	- Size: W85mm × D54mm × H202mm about Parts - Accessories: bow, shotgun, handgun, ice ax, × 3 Hand recombinant',99.99,33,101,1029,'2015-05-04 14:12:25','2015-05-04 14:15:40'),(10,'Batman: Court Of Owls','The explosive “Court of Owls” storyline gets the Absolute Edition treatment, collecting Batman issues #1 to 11! It all begins when a series of brutal murders rocks not only Gotham City to its core but also the Caped Crusader himself when the prime suspect is one of Batman’s closest allies – Dick Grayson! After a series of deadly discoveries, Bruce Wayne has learned that the Court of Owls is real — and a deadly threat out to control Gotham City! Written by Scott Snyder and James Tynion IV, with art by Greg Capullo and Jonathan Glapion, featuring cover artwork by Greg Capullo.',24.99,12,103,2010,'2015-05-04 14:12:25','2015-05-04 14:15:40'),(11,'Batman: All-Star Batman and Robin the Boy Won','The smash-hit Batman epic by modern master Frank Miller (Batman: Year One, The Dark Knight Returns) and artists extraordinaire Jim Lee and Scott Williams (Batman, Superman) is now collected in DC’s Absolute format, including issues #1 to 9! Lee and Miller join forces to tell a new version of Dick Grayson’s origin in a high-octane tale that unfolds with guest appearances by Superman, Wonder Woman, Green Lantern, Black Canary and more!',24.99,13,1030,2011,'2015-05-04 14:12:25','2015-05-04 14:15:40'),(12,'Green Lantern: Absolute Blackest Night','The prophecy of the Blackest Night descends on the DC Universe! Can Hal Jordan lead DC’s champions against an army of Black Lanterns? Expanded to include Blackest Night #0, Blackest Night issues #1 to 8, Untold Tales Of The Blackest Night #1, DC Universe #0, the Blackest Night Director’s Cut #1, and Green Lantern issues #43 to 48 and #50 to 52, written by Geoff Johns, Peter J. Tomasi and others, with art by Ivan Reis and others, featuring cover artwork by Ivan Reis and Oclair Albert.',29.99,9,1030,2012,'2015-05-04 14:12:25','2015-05-04 14:15:40'),(13,'Green Lantern: Rebirth','Follow Hal Jordan on his journey from fearless test pilot to Super Hero, from villain to the spirit of vengeance, and finally, returning to his true calling as Green Lantern of Space Sector 2814. This amazing Absolute edition includes Green Lantern: Rebirth issues #1 to 6, Green Lantern #1, the preview story from Wizard Magazine and a tale from Green Lantern Secret Files 2005 featuring spectacular artwork by Darwyn Cooke. ',29.99,10,1321,2023,'2015-05-04 14:12:25','2015-05-04 14:15:40'),(14,'Green Lantern - Blackest Night: Tales Of The Corps','From the pages of Tales Of The Corps issues #1 to 3, Green Lantern #49 and Adventure Comics issues #4 and 5: witness Saint Walker’s pilgrimage of hope, Carol Ferris’ sacrifice for love, the first appearance of the Indigo Tribe and much more! Written by Geoff Johns, Peter J. Tomasi and Sterling Gates. With art by Dave Gibbons, Jerry Ordway, Ivan Reis, Doug Mahnke and others; features a cover by Dave Gibbons and Rudolfo Migliari.',29.99,14,1302,2122,'2015-05-04 14:12:25','2015-05-04 14:15:40'),(15,'Avengers: Absolute Vision Book 1','The ultimate Vision story begins with catastrophe, as the android Avenger is laid low by…the Barrier! But if it doesn’t kill him, will his experience only make him stronger? And are Earth’s Mightiest prepared for the answer? The old order changeth once again as the Avengers welcome aboard Starfox and a new Captain Marvel — but does that leave any room for Spider-Man?',34.99,1,1350,2122,'2015-05-04 14:12:25','2015-05-04 14:15:40'),(16,'Avengers: Absolute Vision Book 2','The Vision takes command! As many of Earth\'s Mightiest are whisked away to fight in the Secret Wars, the newly assertive synthezoid seizes the chair. He has changes in store when the heroes return, not least his idea for a new team of Avengers on the West Coast. But there are Dire Wraiths and demons to deal with back East, not to mention an army of Hulks and Thanos\' monstrous minions the Blood Brothers! Hercules and Black Knight return to the fold, while Starfox discovers an uncanny connection to the Eternals just in time to face the menace of Maelstrom. ',34.99,2,1329,2133,'2015-05-04 14:12:25','2015-05-04 14:15:40'),(17,'Avengers: Age of Ultron','Humanity’s time is over. Submit or perish, because the Age of Ultron has arrived! The artificial intelligence known as Ultron has fought for years to eradicate mankind — and now, it has all but succeeded. The few remaining heroes are battered, broken, almost beaten and left considering desperate measures — some more desperate than others. But when Wolverine breaks ranks and pursues his own plan to defeat Ultron, will his drastic action cause more problems than it solves? ',34.99,7,1203,2133,'2015-05-04 14:12:25','2015-05-04 14:15:40'),(18,'X-men: Age of Apocalypse Vol 1','Return to the Age of Apocalypse, as the AOA X-Men make their final stand against the evil Weapon X - and lose! New AOA super-hero team the X-Terminated must rise to take the fallen X-Men’s place — but what makes them so drastically different? With Jean Grey and Sabretooth at their lowest ebb, and Weapon X resurrecting dead X-Men to destroy the human race, the X-Terminated activate their secret weapon: the AOA version of the Hulk! Then, Jean Grey goes on her first mission with the X-Terminated, but will she survive it? ',34.99,5,1401,2312,'2015-05-04 14:12:25','2015-05-04 14:15:40'),(19,'X-men: Age of Apocalypse Vol 2','The other-dimensional stakes are raised as the lady Penance rises, promising salvation for all who follow her — and a reincarnated Alpha mutant returns! Meanwhile, the X-Terminated travel to Latveria — but can they get the information they need to defeat Weapon Omega from Dr. Doom? Deadeye may be able to help! ',34.99,6,1420,2312,'2015-05-04 14:12:25','2015-05-04 14:15:40'),(20,'Star Trek: Assignment Earth','The 1968 TV episode \"Assignment Earth\" had been the Season Two finale for the original Star Trek series (the one which saw the Enterprise go back to what was then the present day of the late 1960s and gave us the spectacle of a USAF fighter jet trying to intercept the Enterprise), and was intended by Gene Roddenberry as the pilot for a spin-off series that never came to pass.',19.99,11,1419,2121,'2015-05-04 14:12:25','2015-05-04 14:15:40'),(21,'Star Trek - Deep Space Nine: Fool\'s Gold','Captain Sisko and the crew of Deep Space Nine make their triumphant return to comics! When the station begins to be overrun by thieves, treasure-seekers, bounty-hunters, and other assorted ne\'er-do-wells, Major Kira and Constable Odo must find out why. Can they get to the bottom of it before the station\'s new visitors bring things to a boiling point? Written by Scott and David Tipton, with art by Fabio Montovani and The Sharp Bros, with a cover by Sharp Bros.',19.99,23,1320,2121,'2015-05-04 14:12:25','2015-05-04 14:15:40'),(22,'Star Wars: Agent of the Empire Vol 1','Imperial power is at its height. With Palpatine on the throne and his chief enforcer, Darth Vader, leading fleets of Star Destroyers and legions of stormtroopers across the galaxy, the Empire is an unstoppable force for order and peace. But not every political problem requires military might; not every negotiation depends on a show of force. Sometimes all diplomacy needs to succeed is the right man, in the right place, with the willingness to get the job done. No matter what it takes. Collects Star Wars: Agent of the Empire--Iron Eclipse #1-5, written by John Ostrander, with pencils and cover artwork by Stephane Roux, inks by Julien Hugonnard-Bert and colours by Wes Dzioba.',19.99,3,1325,2155,'2015-05-04 14:12:25','2015-05-04 14:15:40'),(23,'Star Wars: Agent of the Empire Vol 2','When the current Count Dooku is assassinated—and Boba Fett is framed for the deed—the Count’s young heir becomes a political pawn. Agent Cross has his orders, but when the boy’s fate is left to a murderous uncle, an angry bounty hunter, and two lethal ladies, Cross changes his mission! Guest-starring Boba Fett, Princess Leia, and Darth Vader! Written by John Ostrander, with pencils and inks by Davidé Fabbri, inks by Christian Dalla Vecchia, colouring by Wes Dzioba and cover artwork from Stéphane Roux.',19.99,4,1322,1324,'2015-05-04 14:12:25','2015-05-04 14:15:40'),(24,'Star Wars: A Long Time Ago','Star Wars: A Long Time Ago... features classic Star Wars stories not seen in over twenty years! Originally printed by Marvel Comics, these stories have been re-colored using today’s computer technology, giving \"old\" work a fresh face. Volume 2 collects issues of the original Marvel run and contains such riveting classics as \"Crucible\" and the unforgettable \"What Ever Happened to Jabba the Hut?\"',24.99,8,1322,1232,'2015-05-04 14:12:25','2015-05-04 14:15:40');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products_has_categories`
--

DROP TABLE IF EXISTS `products_has_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products_has_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_products_has_categories_products1_idx` (`product_id`),
  KEY `fk_products_has_categories_categories1_idx` (`category_id`),
  CONSTRAINT `fk_products_has_categories_categories1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_products_has_categories_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products_has_categories`
--

LOCK TABLES `products_has_categories` WRITE;
/*!40000 ALTER TABLE `products_has_categories` DISABLE KEYS */;
INSERT INTO `products_has_categories` VALUES (1,1,1),(2,1,3),(3,2,1),(4,2,5),(5,2,12),(6,3,1),(7,3,5),(8,3,12),(9,4,1),(10,4,5),(11,4,13),(15,5,1),(16,5,6),(17,6,1),(18,6,4),(19,6,15),(20,7,1),(21,7,7),(22,8,1),(23,8,8),(24,9,9),(25,9,1),(26,10,2),(27,10,3),(28,10,11),(29,11,2),(30,11,3),(31,11,11),(32,12,2),(33,12,3),(34,12,14),(35,13,2),(36,13,3),(37,13,14),(38,14,2),(39,14,3),(40,14,14),(41,15,2),(42,15,4),(43,15,15),(44,16,2),(45,16,4),(46,16,15),(47,17,2),(48,17,4),(49,17,15),(50,18,2),(51,18,4),(52,18,16),(53,19,16),(54,19,2),(55,19,4),(56,20,2),(57,20,10),(58,21,2),(59,21,10),(60,22,2),(61,22,8),(67,23,2),(68,23,8),(69,24,8),(70,24,2);
/*!40000 ALTER TABLE `products_has_categories` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-05-06 21:03:13
admin:e@002dcommerce_db/jns_ecommerce5-6-most-recent-update.sql

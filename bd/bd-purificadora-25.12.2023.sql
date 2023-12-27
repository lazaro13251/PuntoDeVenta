-- MySQL dump 10.13  Distrib 8.0.35, for Linux (x86_64)
--
-- Host: localhost    Database: purificadora
-- ------------------------------------------------------
-- Server version	8.0.35-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `table_articles`
--

DROP TABLE IF EXISTS `table_articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `table_articles` (
  `id_article` int NOT NULL AUTO_INCREMENT,
  `column_ups_article` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `column_name_article` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `column_price_coste_article` double DEFAULT NULL,
  `column_price_sale_article` double DEFAULT NULL,
  `id_article_category` int DEFAULT NULL,
  `id_department` int DEFAULT NULL,
  `column_route_image_article` varchar(255) DEFAULT NULL,
  `id_articles_measure` int DEFAULT NULL,
  `column_internal_reference_article` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `column_internal_notes_article` varchar(255) DEFAULT NULL,
  `active` int NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_article`),
  KEY `id_article_category` (`id_article_category`),
  KEY `FK_DEPARTMENT` (`id_department`),
  KEY `FK_ARTICLES_MEASURE` (`id_articles_measure`),
  CONSTRAINT `FK_ARTICLE_CATEGORY` FOREIGN KEY (`id_article_category`) REFERENCES `table_articles_category` (`id_article_category`),
  CONSTRAINT `FK_ARTICLES_MEASURE` FOREIGN KEY (`id_articles_measure`) REFERENCES `table_articles_measure` (`id_articles_measure`),
  CONSTRAINT `FK_DEPARTMENT` FOREIGN KEY (`id_department`) REFERENCES `table_department` (`id_department`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_articles`
--

LOCK TABLES `table_articles` WRITE;
/*!40000 ALTER TABLE `table_articles` DISABLE KEYS */;
INSERT INTO `table_articles` VALUES (2,'750102290833','GARRAFON DE AGUA PURIFICADA - 20 LITROS',25,55,1,1,'img',1,'GAAGPU20L','Presentación de agua purificada venta liquido',1,'2023-11-28 21:48:03','2023-12-23 20:39:41'),(3,'750102089908','GARRAFON DE AGUA PURIFICADA - 10 LITROS',15,30,1,1,'img',1,'GAAGPU10L','Presentación de agua purificada venta liquido',1,'2023-11-29 19:28:08','2023-11-29 22:44:40');
/*!40000 ALTER TABLE `table_articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table_articles_category`
--

DROP TABLE IF EXISTS `table_articles_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `table_articles_category` (
  `id_article_category` int NOT NULL AUTO_INCREMENT,
  `column_name_category` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `active` int NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_article_category`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_articles_category`
--

LOCK TABLES `table_articles_category` WRITE;
/*!40000 ALTER TABLE `table_articles_category` DISABLE KEYS */;
INSERT INTO `table_articles_category` VALUES (1,'EMBOTELLADO',1,'2023-11-27 14:21:15','2023-11-27 14:21:08'),(2,'DEFAULT',0,'2023-11-30 13:55:10','2023-11-30 21:03:47');
/*!40000 ALTER TABLE `table_articles_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table_articles_measure`
--

DROP TABLE IF EXISTS `table_articles_measure`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `table_articles_measure` (
  `id_articles_measure` int NOT NULL AUTO_INCREMENT,
  `column_name_measure` varchar(50) DEFAULT NULL,
  `active` int NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_articles_measure`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_articles_measure`
--

LOCK TABLES `table_articles_measure` WRITE;
/*!40000 ALTER TABLE `table_articles_measure` DISABLE KEYS */;
INSERT INTO `table_articles_measure` VALUES (1,'PIEZA',1,'2023-11-27 14:21:46','2023-11-27 14:21:33');
/*!40000 ALTER TABLE `table_articles_measure` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table_customers`
--

DROP TABLE IF EXISTS `table_customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `table_customers` (
  `id_customers` int NOT NULL AUTO_INCREMENT,
  `column_name_customers` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `column_paternal_customers` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `column_maternal_customers` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `column_mail_customers` varchar(50) DEFAULT NULL,
  `column_phone_customers` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `column_birth_customers` date DEFAULT NULL,
  `id_customers_category` int DEFAULT NULL,
  `active` int NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_customers`),
  KEY `FK_CUSTOMERS_CATEGORY` (`id_customers_category`),
  CONSTRAINT `FK_CUSTOMERS_CATEGORY` FOREIGN KEY (`id_customers_category`) REFERENCES `table_customers_category` (`id_customers_category`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_customers`
--

LOCK TABLES `table_customers` WRITE;
/*!40000 ALTER TABLE `table_customers` DISABLE KEYS */;
INSERT INTO `table_customers` VALUES (1,'Fernando','Garcia','Lazaro','lazaro13251@gmail.com','2223327168','2001-05-30',1,1,'2023-12-21 19:38:20','2023-12-23 23:44:48');
/*!40000 ALTER TABLE `table_customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table_customers_category`
--

DROP TABLE IF EXISTS `table_customers_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `table_customers_category` (
  `id_customers_category` int NOT NULL AUTO_INCREMENT,
  `column_name_category` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `active` int NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_customers_category`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_customers_category`
--

LOCK TABLES `table_customers_category` WRITE;
/*!40000 ALTER TABLE `table_customers_category` DISABLE KEYS */;
INSERT INTO `table_customers_category` VALUES (1,'Basico',1,'2023-12-21 19:36:55','2023-12-25 15:37:51');
/*!40000 ALTER TABLE `table_customers_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table_department`
--

DROP TABLE IF EXISTS `table_department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `table_department` (
  `id_department` int NOT NULL AUTO_INCREMENT,
  `column_name_department` varchar(50) DEFAULT NULL,
  `active` int NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_department`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_department`
--

LOCK TABLES `table_department` WRITE;
/*!40000 ALTER TABLE `table_department` DISABLE KEYS */;
INSERT INTO `table_department` VALUES (1,'LIQUIDOS',1,'2023-11-27 13:12:38','2023-11-27 13:12:16');
/*!40000 ALTER TABLE `table_department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table_inventory`
--

DROP TABLE IF EXISTS `table_inventory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `table_inventory` (
  `id_inventory` int NOT NULL AUTO_INCREMENT,
  `id_article` int NOT NULL,
  `column_stock_article` int NOT NULL,
  `column_minimum_inventory` int NOT NULL,
  `updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_inventory`),
  KEY `FK_ARTICLES` (`id_article`),
  CONSTRAINT `FK_ARTICLES` FOREIGN KEY (`id_article`) REFERENCES `table_articles` (`id_article`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='apdated';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_inventory`
--

LOCK TABLES `table_inventory` WRITE;
/*!40000 ALTER TABLE `table_inventory` DISABLE KEYS */;
/*!40000 ALTER TABLE `table_inventory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table_personnel`
--

DROP TABLE IF EXISTS `table_personnel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `table_personnel` (
  `id_person` int NOT NULL AUTO_INCREMENT,
  `column_name_person` varchar(50) DEFAULT NULL,
  `column_paternal_person` varchar(50) DEFAULT NULL,
  `column_maternal_person` varchar(50) DEFAULT NULL,
  `active` int NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_person`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_personnel`
--

LOCK TABLES `table_personnel` WRITE;
/*!40000 ALTER TABLE `table_personnel` DISABLE KEYS */;
/*!40000 ALTER TABLE `table_personnel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table_sales`
--

DROP TABLE IF EXISTS `table_sales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `table_sales` (
  `id_sales` int NOT NULL AUTO_INCREMENT,
  `id_customers` int NOT NULL,
  `colum_total_sales` double NOT NULL,
  `active` int NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_sales`),
  KEY `FK_CUSTOMERS` (`id_customers`),
  CONSTRAINT `FK_CUSTOMERS` FOREIGN KEY (`id_customers`) REFERENCES `table_customers` (`id_customers`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_sales`
--

LOCK TABLES `table_sales` WRITE;
/*!40000 ALTER TABLE `table_sales` DISABLE KEYS */;
/*!40000 ALTER TABLE `table_sales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table_sales_detail`
--

DROP TABLE IF EXISTS `table_sales_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `table_sales_detail` (
  `id_sales_detail` int NOT NULL AUTO_INCREMENT,
  `id_sales` int NOT NULL,
  `id_article` int NOT NULL,
  `colum_number_article` double NOT NULL,
  `colum_subtotal_sales` double NOT NULL,
  `active` int NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_sales_detail`),
  KEY `FK_SALES` (`id_sales`),
  KEY `FK_ARTICLE` (`id_article`),
  CONSTRAINT `FK_ARTICLE` FOREIGN KEY (`id_article`) REFERENCES `table_articles` (`id_article`),
  CONSTRAINT `FK_SALES` FOREIGN KEY (`id_sales`) REFERENCES `table_sales` (`id_sales`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_sales_detail`
--

LOCK TABLES `table_sales_detail` WRITE;
/*!40000 ALTER TABLE `table_sales_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `table_sales_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table_tickets`
--

DROP TABLE IF EXISTS `table_tickets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `table_tickets` (
  `id_ticket` int NOT NULL AUTO_INCREMENT,
  `column_total_ticket` double DEFAULT NULL,
  `id_sale` int NOT NULL,
  `active` int NOT NULL DEFAULT '1',
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_ticket`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_tickets`
--

LOCK TABLES `table_tickets` WRITE;
/*!40000 ALTER TABLE `table_tickets` DISABLE KEYS */;
/*!40000 ALTER TABLE `table_tickets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table_users`
--

DROP TABLE IF EXISTS `table_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `table_users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `column_name_user` varchar(50) DEFAULT NULL,
  `column_password_user` varchar(200) NOT NULL,
  `id_user_roll` int DEFAULT NULL,
  `active` int NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_user`),
  KEY `FK_USER_ROLL` (`id_user_roll`),
  CONSTRAINT `FK_USER_ROLL` FOREIGN KEY (`id_user_roll`) REFERENCES `table_users_rolls` (`id_user_roll`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_users`
--

LOCK TABLES `table_users` WRITE;
/*!40000 ALTER TABLE `table_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `table_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table_users_rolls`
--

DROP TABLE IF EXISTS `table_users_rolls`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `table_users_rolls` (
  `id_user_roll` int NOT NULL AUTO_INCREMENT,
  `column_name_user_roll` varchar(50) DEFAULT NULL,
  `active` int NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_user_roll`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_users_rolls`
--

LOCK TABLES `table_users_rolls` WRITE;
/*!40000 ALTER TABLE `table_users_rolls` DISABLE KEYS */;
/*!40000 ALTER TABLE `table_users_rolls` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-25 16:37:30

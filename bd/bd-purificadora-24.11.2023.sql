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
  `column_nombre_article` varchar(100) DEFAULT NULL,
  `column_precio_coste_article` double DEFAULT NULL,
  `column_precio_venta_article` double DEFAULT NULL,
  `id_article_category` int DEFAULT NULL,
  `id_department` int DEFAULT NULL,
  `column_route_image_article` varchar(255) DEFAULT NULL,
  `id_articles_measure` int DEFAULT NULL,
  `column_Internal_reference_article` varchar(255) DEFAULT NULL,
  `column_internal_notes_article` varchar(255) DEFAULT NULL,
  `active` int NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_articles`
--

LOCK TABLES `table_articles` WRITE;
/*!40000 ALTER TABLE `table_articles` DISABLE KEYS */;
INSERT INTO `table_articles` VALUES (1,'750101208111','Coca Cola de 3 L - Retornable',27,35.5,1,1,'ls',1,'COCA3L','Coca Cola de 3 L',1,'2023-11-24 12:58:59','2023-11-24 12:55:49');
/*!40000 ALTER TABLE `table_articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table_articles_category`
--

DROP TABLE IF EXISTS `table_articles_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `table_articles_category` (
  `id_article_category` int NOT NULL,
  `column_nombre_category` varchar(50) DEFAULT NULL,
  `active` int NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_article_category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_articles_category`
--

LOCK TABLES `table_articles_category` WRITE;
/*!40000 ALTER TABLE `table_articles_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `table_articles_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `table_customers`
--

DROP TABLE IF EXISTS `table_customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `table_customers` (
  `id_customers` int NOT NULL AUTO_INCREMENT,
  `column_nombre_customers` varchar(50) DEFAULT NULL,
  `column_paterno_customers` varchar(50) DEFAULT NULL,
  `column_materno_customers` varchar(50) DEFAULT NULL,
  `column_mail_customers` varchar(50) DEFAULT NULL,
  `column_telefono_customers` varchar(10) DEFAULT NULL,
  `column_nacimiento_customers` date DEFAULT NULL,
  `id_customers_category` int DEFAULT NULL,
  `active` int NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_customers`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_customers`
--

LOCK TABLES `table_customers` WRITE;
/*!40000 ALTER TABLE `table_customers` DISABLE KEYS */;
INSERT INTO `table_customers` VALUES (1,'fernando','ls','Lazaro','lazaro13251@gmail.com','2223327168','2001-05-30',2,0,'2023-11-23 20:07:45','2023-11-23 20:45:40');
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
  `column_nombre_category` varchar(50) DEFAULT NULL,
  `active` int NOT NULL DEFAULT '1',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_customers_category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `table_customers_category`
--

LOCK TABLES `table_customers_category` WRITE;
/*!40000 ALTER TABLE `table_customers_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `table_customers_category` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-24 15:10:46

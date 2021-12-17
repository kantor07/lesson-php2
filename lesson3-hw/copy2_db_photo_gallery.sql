-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: db_photo_gallery
-- ------------------------------------------------------
-- Server version	8.0.26

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
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `photos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `media_type` varchar(10) NOT NULL,
  `photo_name` varchar(25) NOT NULL,
  `price` varchar(255) NOT NULL,
  `size` int DEFAULT NULL,
  `address_photo` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `view_count` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photos`
--

LOCK TABLES `photos` WRITE;
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
INSERT INTO `photos` VALUES (1,'Photo','Мишка','100',559,'/images/3.jpg','2021-11-23 10:27:51','2021-12-16 17:22:02','2'),(2,'Photo','Мотоцикл','200',323,'/images/7.jpg','2021-11-23 10:27:51','2021-11-30 14:36:57',NULL),(3,'Photo','Лесное озеро','110',679,'/images/8.jpg','2021-11-23 10:27:51','2021-11-30 14:36:57',NULL),(4,'Photo','Кошка-Геймер','220',343,'/images/11.jpg','2021-11-23 10:27:51','2021-11-30 14:36:57',NULL),(5,'Photo','Осенний клен','130',223,'/images/16.jpg','2021-11-23 10:27:51','2021-11-30 14:36:57',NULL),(6,'Photo','Дорога на восходе','230',390,'/images/17.jpg','2021-11-23 10:27:51','2021-11-30 14:36:57',NULL),(7,'Photo','Зима','140',518,'/images/24.jpg','2021-11-23 10:27:51','2021-11-30 14:36:57',NULL),(8,'Photo','Белка-Зомби','240',313,'/images/25.jpg','2021-11-23 10:27:51','2021-11-30 14:36:57',NULL),(9,'Photo','Дельфин','150',343,'/images/27.jpg','2021-11-23 10:27:51','2021-11-30 14:36:57',NULL),(10,'Photo','Река в лесу','250',742,'/images/29.jpg','2021-11-23 10:27:51','2021-11-30 14:36:57',NULL),(11,'Photo','Весна в парке','160',356,'/images/32.jpg','2021-11-23 10:27:51','2021-11-30 14:36:57',NULL);
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `is_deleted` bit(1) DEFAULT b'0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'wall','users@mail.ru','123',_binary '\0'),(2,'anton','root@mail.ru','$2y$10$0.kGd0s.1gqOjEyD.TQxJu1XQy2fBmyUCu1YVtTsCFArjL1AlmD7.',_binary '\0');
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

-- Dump completed on 2021-12-17 15:34:31

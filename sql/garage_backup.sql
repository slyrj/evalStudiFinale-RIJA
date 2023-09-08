-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: garage
-- ------------------------------------------------------
-- Server version	10.4.28-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `car_features`
--

DROP TABLE IF EXISTS `car_features`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `car_features` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cars_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `value` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `car_features_cars_id_fk` (`cars_id`),
  CONSTRAINT `car_features_cars_id_fk` FOREIGN KEY (`cars_id`) REFERENCES `cars` (`id`),
  CONSTRAINT `car_features_ibfk_1` FOREIGN KEY (`cars_id`) REFERENCES `cars` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car_features`
--

LOCK TABLES `car_features` WRITE;
/*!40000 ALTER TABLE `car_features` DISABLE KEYS */;
INSERT INTO `car_features` VALUES (1,3,'Toit panoramique ouvrant','Oui'),(2,3,'Syst&egrave;me navigation GPS','Oui'),(3,4,'Options','Full'),(4,5,'Options','Full'),(5,5,'Jantes','19&quot;'),(6,6,'Options','Full'),(7,6,'Carburation','Diesel'),(8,7,'Bo&icirc;te','Manuelle'),(9,7,'Options','Full'),(10,8,'Jantes','18&quot;'),(11,8,'Bo&icirc;te','Auto'),(12,10,'Options','Full'),(13,11,'Options','Full');
/*!40000 ALTER TABLE `car_features` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `car_images`
--

DROP TABLE IF EXISTS `car_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `car_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cars_id` int(11) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `car_images_cars_id_fk` (`cars_id`),
  CONSTRAINT `car_images_cars_id_fk` FOREIGN KEY (`cars_id`) REFERENCES `cars` (`id`),
  CONSTRAINT `car_images_ibfk_1` FOREIGN KEY (`cars_id`) REFERENCES `cars` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car_images`
--

LOCK TABLES `car_images` WRITE;
/*!40000 ALTER TABLE `car_images` DISABLE KEYS */;
INSERT INTO `car_images` VALUES (3,2,'fiat-4298163_1280.jpg'),(4,2,'fiat-4372246_1280.jpg'),(5,3,'volkswagen-golf-r-3170253_1280.jpg'),(6,3,'vw-2442122_1280.jpg'),(7,4,'porsche-6607502_640.jpg'),(8,4,'red-5329407_1280.jpg'),(9,5,'car-4048220_1280.jpg'),(10,5,'mercedes-benz-2498264_1280.jpg'),(11,5,'mercedes-benz-1470136_1280.jpg'),(12,6,'sky-3248376_1280.jpg'),(13,7,'audi-801389_1280.jpg'),(14,9,'sports-car-6282703_1280.jpg'),(15,10,'cross-speed-4814979_1280.jpg'),(16,11,'car-5581028_1280.jpg'),(17,13,'ferrari-4735775_1280.jpg');
/*!40000 ALTER TABLE `car_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `mileage` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `cars_users_id_fk` (`users_id`),
  CONSTRAINT `cars_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`),
  CONSTRAINT `cars_users_id_fk` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cars`
--

LOCK TABLES `cars` WRITE;
/*!40000 ALTER TABLE `cars` DISABLE KEYS */;
INSERT INTO `cars` VALUES (2,1,'Fiat',4500,'64f4529d67ff7.jpg',1968,130000,'2023-09-08 15:29:53'),(3,1,'Golf',6000,'vw-4332807_1280.jpg',2019,95000,'2023-09-08 15:32:18'),(4,1,'Porsche',55000,'porsche-911-gt3-2865400_1280.jpg',2022,23000,'2023-09-08 15:35:14'),(5,1,'Mercedes',30000,'mercedes-benz-1470118_1280.jpg',2022,75000,'2023-09-08 15:36:48'),(6,1,'Bmw',17000,'bmw-5665352_1280.jpg',2017,111000,'2023-09-08 15:39:01'),(7,1,'Audi',28000,'audi-798531_1280.jpg',2021,33000,'2023-09-08 15:42:28'),(8,1,'Peugeot Rcz',14000,'car-6968973_1280.jpg',2014,143000,'2023-09-08 15:46:25'),(9,2,'Nissan',12000,'sports-car-6282702_1280.jpg',2006,72998,'2023-09-08 15:49:03'),(10,2,'Toyaota',9000,'luxury-car-6602359_1280.jpg',2010,180000,'2023-09-08 15:50:38'),(11,2,'Mazda',18500,'mazda-mx-5-7418536_1280.jpg',2019,130000,'2023-09-08 15:51:53'),(12,2,'Ford Mustang',59000,'ford m.jpg',2022,22999,'2023-09-08 15:54:55'),(13,2,'Ferrari',120000,'ferrari-5922873_1280.jpg',2023,5000,'2023-09-08 15:55:43');
/*!40000 ALTER TABLE `cars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_forms`
--

DROP TABLE IF EXISTS `contact_forms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_forms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cars_id` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `object` varchar(20) NOT NULL,
  `content` longtext NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `contact_forms_cars_id_fk` (`cars_id`),
  CONSTRAINT `contact_forms_cars_id_fk` FOREIGN KEY (`cars_id`) REFERENCES `cars` (`id`),
  CONSTRAINT `contact_forms_ibfk_1` FOREIGN KEY (`cars_id`) REFERENCES `cars` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_forms`
--

LOCK TABLES `contact_forms` WRITE;
/*!40000 ALTER TABLE `contact_forms` DISABLE KEYS */;
INSERT INTO `contact_forms` VALUES (2,NULL,'rija','rija@mail.fr','123456789','t cross','renseignements compl&eacute;mentaires par t cross','2023-09-08 14:18:23'),(3,NULL,'rija','kljj@gghg.fr','123456789','upoupo','gdghdghdh','2023-09-08 14:31:57');
/*!40000 ALTER TABLE `contact_forms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `garages`
--

DROP TABLE IF EXISTS `garages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `garages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `is_opened` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `garages_users_id_fk` (`users_id`),
  CONSTRAINT `garages_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`),
  CONSTRAINT `garages_users_id_fk` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `garages`
--

LOCK TABLES `garages` WRITE;
/*!40000 ALTER TABLE `garages` DISABLE KEYS */;
INSERT INTO `garages` VALUES (1,1,'V-Parrot',0);
/*!40000 ALTER TABLE `garages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `opening_hours`
--

DROP TABLE IF EXISTS `opening_hours`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `opening_hours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `day` varchar(20) NOT NULL,
  `opening_time` time NOT NULL,
  `closing_time` time NOT NULL,
  PRIMARY KEY (`id`),
  KEY `opening_hours_users_id_fk` (`users_id`),
  CONSTRAINT `opening_hours_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`),
  CONSTRAINT `opening_hours_users_id_fk` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `opening_hours`
--

LOCK TABLES `opening_hours` WRITE;
/*!40000 ALTER TABLE `opening_hours` DISABLE KEYS */;
INSERT INTO `opening_hours` VALUES (1,1,'Lundi','08:30:00','18:30:00'),(2,1,'Mardi','08:30:00','18:30:00'),(3,1,'Mercredi','09:00:00','19:00:00'),(4,1,'Jeudi','08:30:00','18:30:00'),(5,1,'Vendredi','08:30:00','18:30:00'),(6,1,'Samedi','09:30:00','15:00:00');
/*!40000 ALTER TABLE `opening_hours` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `operations`
--

DROP TABLE IF EXISTS `operations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `operations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `operations_service_id_fk` (`service_id`),
  CONSTRAINT `operations_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`),
  CONSTRAINT `operations_service_id_fk` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `operations`
--

LOCK TABLES `operations` WRITE;
/*!40000 ALTER TABLE `operations` DISABLE KEYS */;
INSERT INTO `operations` VALUES (7,1,'Contrôle des fluides'),(8,1,'Changement des filtres'),(9,1,'Changement des bougies'),(10,3,'Distribution'),(11,3,'Disque embrayage'),(12,3,'Freins'),(13,4,'Peinture '),(14,4,'Réparation petit impact'),(15,1,'Rénovation'),(16,4,'Rénovation'),(17,5,'Recherche personnalisée'),(18,5,'Financement'),(19,5,'Essaie sur route');
/*!40000 ALTER TABLE `operations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `content` longtext NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `is_published` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `reviews_users_id_fk` (`users_id`),
  CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`),
  CONSTRAINT `reviews_users_id_fk` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT INTO `reviews` VALUES (1,1,'Dragon','message test vendredi',3,'2023-09-08 13:51:42',1);
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'Entretien ','64fb203cb95c5.png'),(3,'Mécanique','mec.png'),(4,'Carrosserie','carro.png'),(5,'Voitures occasions','vente.png');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(180) NOT NULL,
  `roles` tinyint(1) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'vparrot@mail.fr',1,'$2y$10$mXFVmz2LeQG7z2re0rMb9.WyDCCginV4Oc7Qa/iG.uf33JRjAAl9q','vincent'),(2,'john@doe.fr',1,'$2y$10$XDV.vjUWIg2PpmdC1JZjueCSFkK6lqGOFD./Uf4wsTug9upW7Kyh6','john');
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

-- Dump completed on 2023-09-08 17:18:57

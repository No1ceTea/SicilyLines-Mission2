-- MySQL dump 10.13  Distrib 8.0.27, for Linux (x86_64)
--
-- Host: localhost    Database: SicilyLinesDB
-- ------------------------------------------------------
-- Server version	8.0.27

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
-- Table structure for table `bateau`
--

DROP TABLE IF EXISTS `bateau`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bateau` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longueur` double NOT NULL,
  `largeur` double NOT NULL,
  `vitesse` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bateau`
--

LOCK TABLES `bateau` WRITE;
/*!40000 ALTER TABLE `bateau` DISABLE KEYS */;
INSERT INTO `bateau` VALUES (3,'Eduardo',37.2,8.6,26),(4,'Platone',25,7,16);
/*!40000 ALTER TABLE `bateau` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categorie` (
  `id` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorie`
--

LOCK TABLES `categorie` WRITE;
/*!40000 ALTER TABLE `categorie` DISABLE KEYS */;
INSERT INTO `categorie` VALUES (1,'A'),(2,'B'),(3,'C');
/*!40000 ALTER TABLE `categorie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `client` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client`
--

LOCK TABLES `client` WRITE;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` VALUES (12,'thomas uyel','0781724394','thomas-uyel@gmail.com'),(19,'Paul Nord','0781424394','Paul-Nord@gmail.com'),(21,'Paul Sud','0781424394','Paul-Sud@gmail.com');
/*!40000 ALTER TABLE `client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contenir`
--

DROP TABLE IF EXISTS `contenir`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contenir` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nb_max` int NOT NULL,
  `bateau_id` int DEFAULT NULL,
  `categorie_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_3C914DFDA9706509` (`bateau_id`),
  KEY `IDX_3C914DFDBCF5E72D` (`categorie_id`),
  CONSTRAINT `FK_3C914DFDA9706509` FOREIGN KEY (`bateau_id`) REFERENCES `bateau` (`id`),
  CONSTRAINT `FK_3C914DFDBCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contenir`
--

LOCK TABLES `contenir` WRITE;
/*!40000 ALTER TABLE `contenir` DISABLE KEYS */;
INSERT INTO `contenir` VALUES (1,210,3,1),(2,9,3,2),(3,2,3,3),(4,155,4,1),(5,0,4,2),(6,0,4,3);
/*!40000 ALTER TABLE `contenir` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_migration_versions`
--

LOCK TABLES `doctrine_migration_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_migration_versions` DISABLE KEYS */;
INSERT INTO `doctrine_migration_versions` VALUES ('DoctrineMigrations\\Version20220420230737','2022-04-21 01:08:02',43),('DoctrineMigrations\\Version20220420231406','2022-04-21 01:14:10',28),('DoctrineMigrations\\Version20220420231756','2022-04-21 01:18:03',53),('DoctrineMigrations\\Version20220420232041','2022-04-21 01:20:49',46),('DoctrineMigrations\\Version20220420232357','2022-04-21 01:28:52',48),('DoctrineMigrations\\Version20220420232845','2022-04-21 01:28:52',32),('DoctrineMigrations\\Version20220420233217','2022-04-21 01:32:26',68),('DoctrineMigrations\\Version20220420233422','2022-04-21 01:34:25',56),('DoctrineMigrations\\Version20220420233533','2022-04-21 01:35:50',48),('DoctrineMigrations\\Version20220420233620','2022-04-21 01:36:22',46),('DoctrineMigrations\\Version20220420233942','2022-04-21 01:39:46',48),('DoctrineMigrations\\Version20220420234018','2022-04-21 01:40:21',53),('DoctrineMigrations\\Version20220420234121','2022-04-21 01:42:07',43),('DoctrineMigrations\\Version20220420234209','2022-04-21 01:42:11',48),('DoctrineMigrations\\Version20220420234353','2022-04-21 01:43:56',86),('DoctrineMigrations\\Version20220420234642','2022-04-21 01:46:44',42),('DoctrineMigrations\\Version20220420234726','2022-04-21 01:47:29',64),('DoctrineMigrations\\Version20220420235207','2022-04-21 01:52:11',45),('DoctrineMigrations\\Version20220420235728','2022-04-21 01:57:36',70),('DoctrineMigrations\\Version20220420235917','2022-04-21 01:59:19',48),('DoctrineMigrations\\Version20220421003555','2022-04-21 02:35:59',93),('DoctrineMigrations\\Version20220421062155','2022-04-21 08:22:01',33);
/*!40000 ALTER TABLE `doctrine_migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipement`
--

DROP TABLE IF EXISTS `equipement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `equipement` (
  `id` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipement`
--

LOCK TABLES `equipement` WRITE;
/*!40000 ALTER TABLE `equipement` DISABLE KEYS */;
INSERT INTO `equipement` VALUES (3,'Acces Handicape'),(4,'Bar'),(5,'Pont Promenade'),(6,'Salon Video');
/*!40000 ALTER TABLE `equipement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `liaison`
--

DROP TABLE IF EXISTS `liaison`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `liaison` (
  `id` int NOT NULL AUTO_INCREMENT,
  `duree` time NOT NULL,
  `port_arrivee_id` int DEFAULT NULL,
  `port_depart_id` int DEFAULT NULL,
  `port_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_225AC37141EAE06` (`port_arrivee_id`),
  KEY `IDX_225AC3794C9CCD3` (`port_depart_id`),
  KEY `IDX_225AC3776E92A9C` (`port_id`),
  CONSTRAINT `FK_225AC37141EAE06` FOREIGN KEY (`port_arrivee_id`) REFERENCES `port` (`id`),
  CONSTRAINT `FK_225AC3776E92A9C` FOREIGN KEY (`port_id`) REFERENCES `port` (`id`),
  CONSTRAINT `FK_225AC3794C9CCD3` FOREIGN KEY (`port_depart_id`) REFERENCES `port` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `liaison`
--

LOCK TABLES `liaison` WRITE;
/*!40000 ALTER TABLE `liaison` DISABLE KEYS */;
INSERT INTO `liaison` VALUES (1,'01:30:00',6,2,NULL),(2,'04:00:00',7,2,NULL),(3,'01:25:00',8,3,NULL),(4,'01:45:00',9,3,NULL),(5,'02:05:00',10,3,NULL),(6,'00:50:00',7,4,NULL),(7,'00:40:00',9,4,NULL),(8,'02:30:00',11,5,NULL),(9,'00:30:00',12,5,NULL),(10,'00:55:00',8,4,NULL),(11,'01:25:00',6,8,NULL),(12,'01:55:00',5,9,NULL),(13,'03:00:00',6,5,NULL);
/*!40000 ALTER TABLE `liaison` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `participer`
--

DROP TABLE IF EXISTS `participer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `participer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` int NOT NULL,
  `type_id` int DEFAULT NULL,
  `reservation_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_EDBE16F8C54C8C93` (`type_id`),
  KEY `IDX_EDBE16F8B83297E7` (`reservation_id`),
  CONSTRAINT `FK_EDBE16F8B83297E7` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`id`),
  CONSTRAINT `FK_EDBE16F8C54C8C93` FOREIGN KEY (`type_id`) REFERENCES `type` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `participer`
--

LOCK TABLES `participer` WRITE;
/*!40000 ALTER TABLE `participer` DISABLE KEYS */;
/*!40000 ALTER TABLE `participer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `periode`
--

DROP TABLE IF EXISTS `periode`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `periode` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `periode`
--

LOCK TABLES `periode` WRITE;
/*!40000 ALTER TABLE `periode` DISABLE KEYS */;
INSERT INTO `periode` VALUES (1,'2021-09-01','2022-06-15'),(2,'2022-06-16','2022-09-15'),(3,'2022-09-16','2023-05-31');
/*!40000 ALTER TABLE `periode` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `port`
--

DROP TABLE IF EXISTS `port`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `port` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `port`
--

LOCK TABLES `port` WRITE;
/*!40000 ALTER TABLE `port` DISABLE KEYS */;
INSERT INTO `port` VALUES (2,'Palerme'),(3,'Messine'),(4,'Milazzo'),(5,'Trapani'),(6,'Ustica'),(7,'Lipari'),(8,'Stromboli'),(9,'Vulcano'),(10,'Panarea'),(11,'Pantelleria'),(12,'Favignagna');
/*!40000 ALTER TABLE `port` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proposer`
--

DROP TABLE IF EXISTS `proposer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `proposer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `quantite` int NOT NULL,
  `bateau_id` int DEFAULT NULL,
  `equipement_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_21866C15A9706509` (`bateau_id`),
  KEY `IDX_21866C15806F0F5C` (`equipement_id`),
  CONSTRAINT `FK_21866C15806F0F5C` FOREIGN KEY (`equipement_id`) REFERENCES `equipement` (`id`),
  CONSTRAINT `FK_21866C15A9706509` FOREIGN KEY (`bateau_id`) REFERENCES `bateau` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proposer`
--

LOCK TABLES `proposer` WRITE;
/*!40000 ALTER TABLE `proposer` DISABLE KEYS */;
INSERT INTO `proposer` VALUES (2,2,3,3),(3,1,3,4),(4,1,3,5),(5,1,3,6),(6,1,4,3),(7,1,4,5);
/*!40000 ALTER TABLE `proposer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reservation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `code_reservation` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `traversee_id` int DEFAULT NULL,
  `client_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_42C84955ED2BB15B` (`traversee_id`),
  KEY `IDX_42C8495519EB6921` (`client_id`),
  CONSTRAINT `FK_42C8495519EB6921` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`),
  CONSTRAINT `FK_42C84955ED2BB15B` FOREIGN KEY (`traversee_id`) REFERENCES `traversee` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation`
--

LOCK TABLES `reservation` WRITE;
/*!40000 ALTER TABLE `reservation` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `secteur`
--

DROP TABLE IF EXISTS `secteur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `secteur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `liaison_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_8045251FED31185` (`liaison_id`),
  CONSTRAINT `FK_8045251FED31185` FOREIGN KEY (`liaison_id`) REFERENCES `liaison` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `secteur`
--

LOCK TABLES `secteur` WRITE;
/*!40000 ALTER TABLE `secteur` DISABLE KEYS */;
INSERT INTO `secteur` VALUES (1,'Palerme',1),(2,'Palerme',2),(3,'Messine',3),(4,'Messine',4),(5,'Messine',5),(6,'Milazzo',6),(7,'Milazzo',7),(8,'Trapani',8),(9,'Trapani',9);
/*!40000 ALTER TABLE `secteur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tarifer`
--

DROP TABLE IF EXISTS `tarifer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tarifer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tarif` double NOT NULL,
  `type_id` int DEFAULT NULL,
  `periode_id` int DEFAULT NULL,
  `liaison_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6904C4FFC54C8C93` (`type_id`),
  KEY `IDX_6904C4FFF384C1CF` (`periode_id`),
  KEY `IDX_6904C4FFED31185` (`liaison_id`),
  CONSTRAINT `FK_6904C4FFC54C8C93` FOREIGN KEY (`type_id`) REFERENCES `type` (`id`),
  CONSTRAINT `FK_6904C4FFED31185` FOREIGN KEY (`liaison_id`) REFERENCES `liaison` (`id`),
  CONSTRAINT `FK_6904C4FFF384C1CF` FOREIGN KEY (`periode_id`) REFERENCES `periode` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=325 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tarifer`
--

LOCK TABLES `tarifer` WRITE;
/*!40000 ALTER TABLE `tarifer` DISABLE KEYS */;
INSERT INTO `tarifer` VALUES (1,18,1,1,9),(2,20,1,2,9),(3,19,1,3,9),(4,11.1,2,1,9),(5,13.1,2,2,9),(6,12.1,2,3,9),(7,5.6,3,1,9),(8,7,3,2,9),(9,6.4,3,3,9),(10,86,4,1,9),(11,95,4,2,9),(12,91,4,3,9),(13,129,5,1,9),(14,142,5,2,9),(15,136,5,3,9),(16,189,6,1,9),(17,208,6,2,9),(18,199,6,3,9),(19,205,7,1,9),(20,226,7,2,9),(21,216,7,3,9),(22,268,8,1,9),(23,295,8,2,9),(24,282,8,3,9),(25,27.2,1,1,2),(26,29.3,1,2,2),(27,28.5,1,3,2),(28,17.3,2,1,2),(29,18.6,2,2,2),(30,18.1,2,3,2),(31,9.8,3,1,2),(32,10.6,3,2,2),(33,10.2,3,3,2),(34,129,4,1,2),(35,139,4,2,2),(36,135,4,3,2),(37,194,5,1,2),(38,209,5,2,2),(39,203,5,3,2),(40,284,6,1,2),(41,306,6,2,2),(42,298,6,3,2),(43,308,7,1,2),(44,332,7,2,2),(45,323,7,3,2),(46,402,8,1,2),(47,434,8,2,2),(48,422,8,3,2),(49,12,1,1,1),(53,12,1,1,1),(54,15,1,2,1),(55,16,1,3,1),(56,8,2,1,1),(57,23,2,2,1),(58,48,2,3,1),(59,56,3,1,1),(60,11,3,2,1),(61,14,3,3,1),(62,15.3,4,1,1),(63,89,4,2,1),(64,754,4,3,1),(65,36.1,5,1,1),(66,78,5,2,1),(67,45,5,3,1),(68,68,6,1,1),(69,9,6,2,1),(70,46.3,6,3,1),(71,785,7,1,1),(72,694,7,2,1),(73,136,7,3,1),(74,421,8,1,1),(75,1202.45,8,2,1),(76,248.99,8,3,1),(77,12,1,1,3),(78,15,1,2,3),(79,16,1,3,3),(80,8,2,1,3),(81,23,2,2,3),(82,48,2,3,3),(83,56,3,1,3),(84,11,3,2,3),(85,14,3,3,3),(86,15.3,4,1,3),(87,89,4,2,3),(88,754,4,3,3),(89,36.1,5,1,3),(90,78,5,2,3),(91,45,5,3,3),(92,68,6,1,3),(93,9,6,2,3),(94,46.3,6,3,3),(95,785,7,1,3),(96,694,7,2,3),(97,136,7,3,3),(98,421,8,1,3),(99,1202.45,8,2,3),(100,248.99,8,3,3),(101,7,1,1,4),(102,12,1,2,4),(103,16,1,3,4),(104,8,2,1,4),(105,74,2,2,4),(106,48,2,3,4),(107,41,3,1,4),(108,17,3,2,4),(109,14,3,3,4),(110,15.3,4,1,4),(111,45,4,2,4),(112,74,4,3,4),(113,36.1,5,1,4),(114,78,5,2,4),(115,45,5,3,4),(116,68,6,1,4),(117,9,6,2,4),(118,46.3,6,3,4),(119,85,7,1,4),(120,64,7,2,4),(121,396,7,3,4),(122,421,8,1,4),(123,102.45,8,2,4),(124,848.99,8,3,4),(125,12,1,1,5),(126,15,1,2,5),(127,16,1,3,5),(128,8,2,1,5),(129,23,2,2,5),(130,48,2,3,5),(131,56,3,1,5),(132,11,3,2,5),(133,14,3,3,5),(134,15.3,4,1,5),(135,89,4,2,5),(136,754,4,3,5),(137,36.1,5,1,5),(138,78,5,2,5),(139,45,5,3,5),(140,68,6,1,5),(141,9,6,2,5),(142,46.3,6,3,5),(143,785,7,1,5),(144,694,7,2,5),(145,136,7,3,5),(146,421,8,1,5),(147,1202.45,8,2,5),(148,248.99,8,3,5),(149,12,1,1,6),(150,14,1,2,6),(151,18,1,3,6),(152,10.56,2,1,6),(153,23.3,2,2,6),(154,48,2,3,6),(155,45,3,1,6),(156,68,3,2,6),(157,140,3,3,6),(158,15.3,4,1,6),(159,89,4,2,6),(160,754,4,3,6),(161,36.1,5,1,6),(162,78,5,2,6),(163,45,5,3,6),(164,68,6,1,6),(165,9,6,2,6),(166,46.3,6,3,6),(167,785,7,1,6),(168,694,7,2,6),(169,136,7,3,6),(170,421,8,1,6),(171,1202.45,8,2,6),(172,248.99,8,3,6),(173,2,1,1,7),(174,5,1,2,7),(175,6,1,3,7),(176,8,2,1,7),(177,243,2,2,7),(178,48,2,3,7),(179,56,3,1,7),(180,11,3,2,7),(181,15,3,3,7),(182,15.3,4,1,7),(183,89,4,2,7),(184,754,4,3,7),(185,36.1,5,1,7),(186,78,5,2,7),(187,45,5,3,7),(188,68,6,1,7),(189,9,6,2,7),(190,46.3,6,3,7),(191,75,7,1,7),(192,694,7,2,7),(193,136,7,3,7),(194,421,8,1,7),(195,1202.45,8,2,7),(196,248.99,8,3,7),(197,2,1,1,1),(198,26,1,2,1),(199,16,1,3,1),(200,15,2,1,1),(201,23,2,2,1),(202,48,2,3,1),(203,56,3,1,1),(204,11,3,2,1),(205,14,3,3,8),(206,15.3,4,1,8),(207,89,4,2,8),(208,754,4,3,8),(209,36.1,5,1,8),(210,78,5,2,8),(211,45,5,3,8),(212,68,6,1,8),(213,9,6,2,8),(214,46.3,6,3,8),(215,75,7,1,8),(216,484,7,2,8),(217,136,7,3,8),(218,121,8,1,8),(219,122.45,8,2,8),(220,269.99,8,3,8),(221,12,1,1,10),(222,15,1,2,10),(223,16,1,3,10),(224,8,2,1,10),(225,23,2,2,10),(226,48,2,3,10),(227,56,3,1,10),(228,11,3,2,10),(229,14,3,3,10),(230,15.3,4,1,10),(231,89,4,2,10),(232,754,4,3,10),(233,36.1,5,1,10),(234,78,5,2,10),(235,45,5,3,10),(236,68,6,1,10),(237,9,6,2,10),(238,46.3,6,3,10),(239,785,7,1,10),(240,694,7,2,10),(241,136,7,3,10),(242,421,8,1,10),(243,1202.45,8,2,10),(244,248.99,8,3,10),(245,12,1,1,8),(246,15,1,2,8),(247,16,1,3,8),(248,8,2,1,8),(249,23,2,2,8),(250,48,2,3,8),(251,56,3,1,8),(252,11,3,2,8),(253,10,1,1,11),(254,11,1,2,11),(255,13,1,3,11),(256,15,2,1,11),(257,21,2,2,11),(258,26,2,3,11),(259,35,3,1,11),(260,39,3,2,11),(261,42,3,3,11),(262,45.3,4,1,11),(263,51,4,2,11),(264,63,4,3,11),(265,76.1,5,1,11),(266,79,5,2,11),(267,86,5,3,11),(268,92,6,1,11),(269,99.99,6,2,11),(270,103,6,3,11),(271,109,7,1,11),(272,123,7,2,11),(273,136,7,3,11),(274,154,8,1,11),(275,254,8,2,11),(276,249.56,8,3,11),(277,10,1,1,12),(278,11,1,2,12),(279,13,1,3,12),(280,15,2,1,12),(281,21,2,2,12),(282,26,2,3,12),(283,35,3,1,12),(284,39,3,2,12),(285,42,3,3,12),(286,45.3,4,1,12),(287,51,4,2,12),(288,63,4,3,12),(289,76.1,5,1,12),(290,79,5,2,12),(291,86,5,3,12),(292,92,6,1,12),(293,99.99,6,2,12),(294,103,6,3,12),(295,109,7,1,12),(296,123,7,2,12),(297,136,7,3,12),(298,154,8,1,12),(299,254,8,2,12),(300,249.56,8,3,12),(301,10,1,1,13),(302,11,1,2,13),(303,13,1,3,13),(304,15,2,1,13),(305,21,2,2,13),(306,26,2,3,13),(307,35,3,1,13),(308,39,3,2,13),(309,42,3,3,13),(310,45.3,4,1,13),(311,51,4,2,13),(312,63,4,3,13),(313,76.1,5,1,13),(314,79,5,2,13),(315,86,5,3,13),(316,92,6,1,13),(317,100.99,6,2,13),(318,103,6,3,13),(319,109,7,1,13),(320,215,7,2,13),(321,325,7,3,13),(322,410,8,1,13),(323,421,8,2,13),(324,659.56,8,3,13);
/*!40000 ALTER TABLE `tarifer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `traversee`
--

DROP TABLE IF EXISTS `traversee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `traversee` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `heure` time NOT NULL,
  `bateau_id` int DEFAULT NULL,
  `liaison_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B688F501A9706509` (`bateau_id`),
  KEY `IDX_B688F501ED31185` (`liaison_id`),
  CONSTRAINT `FK_B688F501A9706509` FOREIGN KEY (`bateau_id`) REFERENCES `bateau` (`id`),
  CONSTRAINT `FK_B688F501ED31185` FOREIGN KEY (`liaison_id`) REFERENCES `liaison` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `traversee`
--

LOCK TABLES `traversee` WRITE;
/*!40000 ALTER TABLE `traversee` DISABLE KEYS */;
/*!40000 ALTER TABLE `traversee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_8CDE5729BCF5E72D` (`categorie_id`),
  CONSTRAINT `FK_8CDE5729BCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type`
--

LOCK TABLES `type` WRITE;
/*!40000 ALTER TABLE `type` DISABLE KEYS */;
INSERT INTO `type` VALUES (1,'A1',1),(2,'A2',1),(3,'A3',1),(4,'B1',2),(5,'B2',2),(6,'C1',3),(7,'C2',3),(8,'C3',3);
/*!40000 ALTER TABLE `type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'noam@gmail.com','[]','$argon2id$v=19$m=65536,t=4,p=1$GLqEQ87IEy2GVe8QZk1a1w$x/O1wTFCv2/MTqgWZzsKBPK1JIkh2Rai6ARRrfrYaKE');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-21 11:33:43

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bateau`
--

LOCK TABLES `bateau` WRITE;
/*!40000 ALTER TABLE `bateau` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorie`
--

LOCK TABLES `categorie` WRITE;
/*!40000 ALTER TABLE `categorie` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client`
--

LOCK TABLES `client` WRITE;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contenir`
--

LOCK TABLES `contenir` WRITE;
/*!40000 ALTER TABLE `contenir` DISABLE KEYS */;
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
INSERT INTO `doctrine_migration_versions` VALUES ('DoctrineMigrations\\Version20220420230737','2022-04-21 01:08:02',43),('DoctrineMigrations\\Version20220420231406','2022-04-21 01:14:10',28),('DoctrineMigrations\\Version20220420231756','2022-04-21 01:18:03',53),('DoctrineMigrations\\Version20220420232041','2022-04-21 01:20:49',46),('DoctrineMigrations\\Version20220420232357','2022-04-21 01:28:52',48),('DoctrineMigrations\\Version20220420232845','2022-04-21 01:28:52',32),('DoctrineMigrations\\Version20220420233217','2022-04-21 01:32:26',68),('DoctrineMigrations\\Version20220420233422','2022-04-21 01:34:25',56),('DoctrineMigrations\\Version20220420233533','2022-04-21 01:35:50',48),('DoctrineMigrations\\Version20220420233620','2022-04-21 01:36:22',46),('DoctrineMigrations\\Version20220420233942','2022-04-21 01:39:46',48),('DoctrineMigrations\\Version20220420234018','2022-04-21 01:40:21',53),('DoctrineMigrations\\Version20220420234121','2022-04-21 01:42:07',43),('DoctrineMigrations\\Version20220420234209','2022-04-21 01:42:11',48),('DoctrineMigrations\\Version20220420234353','2022-04-21 01:43:56',86),('DoctrineMigrations\\Version20220420234642','2022-04-21 01:46:44',42),('DoctrineMigrations\\Version20220420234726','2022-04-21 01:47:29',64),('DoctrineMigrations\\Version20220420235207','2022-04-21 01:52:11',45),('DoctrineMigrations\\Version20220420235728','2022-04-21 01:57:36',70),('DoctrineMigrations\\Version20220420235917','2022-04-21 01:59:19',48),('DoctrineMigrations\\Version20220421003555','2022-04-21 02:35:59',93);
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipement`
--

LOCK TABLES `equipement` WRITE;
/*!40000 ALTER TABLE `equipement` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `liaison`
--

LOCK TABLES `liaison` WRITE;
/*!40000 ALTER TABLE `liaison` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `periode`
--

LOCK TABLES `periode` WRITE;
/*!40000 ALTER TABLE `periode` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `port`
--

LOCK TABLES `port` WRITE;
/*!40000 ALTER TABLE `port` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proposer`
--

LOCK TABLES `proposer` WRITE;
/*!40000 ALTER TABLE `proposer` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `secteur`
--

LOCK TABLES `secteur` WRITE;
/*!40000 ALTER TABLE `secteur` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tarifer`
--

LOCK TABLES `tarifer` WRITE;
/*!40000 ALTER TABLE `tarifer` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type`
--

LOCK TABLES `type` WRITE;
/*!40000 ALTER TABLE `type` DISABLE KEYS */;
/*!40000 ALTER TABLE `type` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-21  2:36:18

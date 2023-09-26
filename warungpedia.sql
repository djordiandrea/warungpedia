-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: warungpedia
-- ------------------------------------------------------
-- Server version	8.0.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `mst_stuff`
--

DROP TABLE IF EXISTS `mst_stuff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mst_stuff` (
  `mstf_id` int NOT NULL,
  `mstf_stuffCode` varchar(20) DEFAULT NULL,
  `mstf_stuffName` varchar(100) DEFAULT NULL,
  `mstf_stuffTotal` int DEFAULT NULL,
  `mstf_createDate` datetime DEFAULT NULL,
  PRIMARY KEY (`mstf_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mst_stuff`
--

LOCK TABLES `mst_stuff` WRITE;
/*!40000 ALTER TABLE `mst_stuff` DISABLE KEYS */;
INSERT INTO `mst_stuff` VALUES (1,'MT_CHK','Chicken Meat',20,'2023-09-27 01:58:56'),(2,'MT_BEF','Beef Meat',10,'2023-09-27 01:59:28');
/*!40000 ALTER TABLE `mst_stuff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mst_table`
--

DROP TABLE IF EXISTS `mst_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mst_table` (
  `mstb_id` int NOT NULL AUTO_INCREMENT,
  `mstb_tableCode` varchar(20) DEFAULT NULL,
  `mstb_tableName` varchar(50) DEFAULT NULL,
  `mstb_capacity` int DEFAULT NULL,
  `mstb_totalTable` int DEFAULT NULL,
  `mstb_createDate` datetime DEFAULT NULL,
  PRIMARY KEY (`mstb_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mst_table`
--

LOCK TABLES `mst_table` WRITE;
/*!40000 ALTER TABLE `mst_table` DISABLE KEYS */;
INSERT INTO `mst_table` VALUES (1,'SM_TBL','Small Table',2,10,'2023-09-27 01:56:53'),(2,'LG_TBL','Large Table',4,10,'2023-09-27 02:16:14'),(3,'LG_TBL_F','Large Table Family',5,5,'2023-09-27 02:58:28'),(4,'LG_TBL_C','Large Table Couple',2,5,'2023-09-27 02:59:45'),(5,'SM_TBL_F','Small Table Family',3,4,'2023-09-27 03:01:52');
/*!40000 ALTER TABLE `mst_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mst_user`
--

DROP TABLE IF EXISTS `mst_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `mst_user` (
  `mus_id` bigint NOT NULL,
  `mus_username` varchar(45) DEFAULT NULL,
  `mus_name` varchar(100) DEFAULT NULL,
  `mus_password` varchar(45) DEFAULT NULL,
  `mus_role` varchar(10) DEFAULT NULL,
  `mus_createDate` datetime DEFAULT NULL,
  PRIMARY KEY (`mus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mst_user`
--

LOCK TABLES `mst_user` WRITE;
/*!40000 ALTER TABLE `mst_user` DISABLE KEYS */;
INSERT INTO `mst_user` VALUES (1,'admin','Admin','123','ADM','2023-09-27 01:53:36');
/*!40000 ALTER TABLE `mst_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-09-27  3:10:07

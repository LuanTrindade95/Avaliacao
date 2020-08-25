CREATE DATABASE  IF NOT EXISTS `rh_candidatos` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `rh_candidatos`;
-- MySQL dump 10.13  Distrib 5.7.23, for Win64 (x86_64)
--
-- Host: localhost    Database: rh_candidatos
-- ------------------------------------------------------
-- Server version	5.7.23

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
-- Table structure for table `candidatos`
--

DROP TABLE IF EXISTS `candidatos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `candidatos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `email` varchar(70) NOT NULL,
  `rg` int(11) NOT NULL,
  `cpf` int(11) NOT NULL,
  `dtnasc` date DEFAULT NULL,
  `sexo` enum('M','F') DEFAULT NULL,
  `endereco` varchar(60) DEFAULT NULL,
  `telefone` varchar(13) NOT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `nascionalidade` varchar(20) DEFAULT NULL,
  `cargo_pretendido` varchar(100) NOT NULL,
  `formacao` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `candidatos`
--

LOCK TABLES `candidatos` WRITE;
/*!40000 ALTER TABLE `candidatos` DISABLE KEYS */;
INSERT INTO `candidatos` VALUES (1,'Luan Adilson Trindade','luan.trindade24@gmail.com',12121,12121,'1991-08-16','M',NULL,'18996469516','Adamantina','12','as','Centro Universitário de Adamantina - UNIFAI'),(2,'Luan Adilson Trindade','luan.trindade24@gmail.com',12121,12121,'1991-08-16','M',NULL,'18996469516','Adamantina','12','as','Centro Universitário de Adamantina - UNIFAI'),(3,'Luan Adilson Trindade','luan.trindade24@gmail.com',23123123,3213123,'0123-03-12','M',NULL,'18996469516','Adamantina','asdad','asdasd','asdas'),(4,'Luan Adilson Trindade','luan.trindade24@gmail.com',23123123,3213123,'0123-03-12','M',NULL,'18996469516','Adamantina','asdad','asdasd','asdas'),(5,'Luan Adilson Trindade','luan.trindade24@gmail.com',23123123,3213123,'0123-03-12','M',NULL,'18996469516','Adamantina','asdad','asdasd','asdas'),(6,'Luan Adilson Trindade','luan.trindade24@gmail.com',444444,44444444,'4444-04-04','M',NULL,'18996469516','Adamantina','fdgfdgdf','Desenvolvedor web','dfgdfg'),(7,'Luan Adilson Trindade','luan.trindade24@gmail.com',444444,44444444,'4444-04-04','M',NULL,'18996469516','Adamantina','fdgfdgdf','Desenvolvedor web','dfgdfg'),(8,'Luan Adilson Trindade','luan.trindade24@gmail.com',444444,44444444,'4444-04-04','M',NULL,'18996469516','Adamantina','fdgfdgdf','Desenvolvedor web','dfgdfg'),(9,'Luan Adilson Trindade','luan.trindade24@gmail.com',444444,44444444,'4444-04-04','M',NULL,'18996469516','Adamantina','fdgfdgdf','Desenvolvedor web','dfgdfg'),(10,'Luan Adilson Trindade','luan.trindade24@gmail.com',444444,44444444,'4444-04-04','M',NULL,'18996469516','Adamantina','fdgfdgdf','Desenvolvedor web','dfgdfg'),(11,'Luan Adilson Trindade','luan.trindade24@gmail.com',444444,44444444,'4444-04-04','M',NULL,'18996469516','Adamantina','fdgfdgdf','Desenvolvedor web','dfgdfg'),(12,'Luan Adilson Trindade','luan.trindade24@gmail.com',9999,999,'0002-02-22','M',NULL,'18996469516','Adamantina','ajdhj','Desenvolvedor web','asdjlk');
/*!40000 ALTER TABLE `candidatos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cargo`
--

DROP TABLE IF EXISTS `cargo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cargo` (
  `id_vagas` int(11) NOT NULL,
  `id_tecnologias` int(11) NOT NULL,
  PRIMARY KEY (`id_vagas`,`id_tecnologias`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cargo`
--

LOCK TABLES `cargo` WRITE;
/*!40000 ALTER TABLE `cargo` DISABLE KEYS */;
/*!40000 ALTER TABLE `cargo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tecnologias`
--

DROP TABLE IF EXISTS `tecnologias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tecnologias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tecnologias`
--

LOCK TABLES `tecnologias` WRITE;
/*!40000 ALTER TABLE `tecnologias` DISABLE KEYS */;
INSERT INTO `tecnologias` VALUES (1,'PHP'),(2,'CSS');
/*!40000 ALTER TABLE `tecnologias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vaga_cargo`
--

DROP TABLE IF EXISTS `vaga_cargo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vaga_cargo` (
  `id_cargo` int(11) NOT NULL AUTO_INCREMENT,
  `id_vagas` int(11) DEFAULT NULL,
  `id_tec` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_cargo`),
  KEY `id_vagas` (`id_vagas`),
  KEY `id_tec` (`id_tec`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vaga_cargo`
--

LOCK TABLES `vaga_cargo` WRITE;
/*!40000 ALTER TABLE `vaga_cargo` DISABLE KEYS */;
/*!40000 ALTER TABLE `vaga_cargo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vagas`
--

DROP TABLE IF EXISTS `vagas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vagas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vagas`
--

LOCK TABLES `vagas` WRITE;
/*!40000 ALTER TABLE `vagas` DISABLE KEYS */;
INSERT INTO `vagas` VALUES (1,'Desenvolvedor web'),(2,'Desenvolvedor Back-End'),(3,'Desenvolvedor Back-Endwe'),(4,'Desenvolvedor web'),(5,'Desenvolvedor web'),(6,'Desenvolvedor web'),(7,'Desenvolvedor web'),(8,'Desenvolvedor web'),(9,'Desenvolvedor C#'),(10,'Desenvolvedor C#'),(11,'Desenvolvedor C#'),(12,'Desenvolvedor C#'),(13,'Desenvolvedor web'),(14,'Desenvolvedor web'),(15,'Desenvolvedor web'),(16,'Desenvolvedor web'),(17,'Desenvolvedor web'),(18,'Desenvolvedor web'),(19,'Desenvolvedor web'),(20,'Desenvolvedor web'),(21,'Desenvolvedor web'),(22,'Desenvolvedor web'),(23,'Desenvolvedor Back-End'),(24,'Desenvolvedor Back-End'),(25,'Desenvolvedor Back-End'),(26,'Desenvolvedor Back-End'),(27,'Desenvolvedor web'),(28,'Desenvolvedor web'),(29,'Desenvolvedor web'),(30,'Desenvolvedor web'),(31,'Desenvolvedor web'),(32,'Desenvolvedor web'),(33,'Desenvolvedor web'),(34,'Desenvolvedor web');
/*!40000 ALTER TABLE `vagas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'rh_candidatos'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-23  1:52:06

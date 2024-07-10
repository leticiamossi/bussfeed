-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: db_bussfeed
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

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
-- Table structure for table `tb_alunoempresa`
--

DROP TABLE IF EXISTS `tb_alunoempresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_alunoempresa` (
  `id_alunoEmpresa` int(11) NOT NULL AUTO_INCREMENT,
  `empresa_id` int(11) NOT NULL,
  `aluno_id` int(11) NOT NULL,
  `dataSolicitacao_alunoEmpresa` datetime NOT NULL,
  `dataConfirmacao_alunoEmpresa` datetime DEFAULT NULL,
  `dataExpiracao_alunoEmpresa` datetime NOT NULL,
  `status_alunoEmpresa` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_alunoEmpresa`),
  KEY `fk_alunoEmpresa'_empresa1` (`empresa_id`),
  KEY `fk_alunoEmpresa'_aluno1` (`aluno_id`),
  CONSTRAINT `fk_alunoEmpresa'_aluno1` FOREIGN KEY (`aluno_id`) REFERENCES `tb_aluno` (`id_aluno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_alunoEmpresa'_empresa1` FOREIGN KEY (`empresa_id`) REFERENCES `tb_empresa` (`id_empresa`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_alunoempresa`
--

LOCK TABLES `tb_alunoempresa` WRITE;
/*!40000 ALTER TABLE `tb_alunoempresa` DISABLE KEYS */;
INSERT INTO `tb_alunoempresa` VALUES (1,1,1,'2024-07-08 00:00:00','2024-07-07 00:00:00','2024-12-31 00:00:00',1),(2,1,2,'2024-07-08 00:00:00','2024-07-07 00:00:00','2024-12-31 00:00:00',1),(3,1,1,'2024-07-09 00:00:00','2024-07-08 00:00:00','2024-12-31 00:00:00',1);
/*!40000 ALTER TABLE `tb_alunoempresa` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-07-10 17:02:13

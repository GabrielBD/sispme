-- MySQL dump 10.13  Distrib 5.5.55, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: sispme
-- ------------------------------------------------------
-- Server version	5.5.55-0ubuntu0.14.04.1

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
-- Table structure for table `destinatario`
--

DROP TABLE IF EXISTS `destinatario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `destinatario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `apellidos` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombres` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `destinatario`
--

LOCK TABLES `destinatario` WRITE;
/*!40000 ALTER TABLE `destinatario` DISABLE KEYS */;
INSERT INTO `destinatario` VALUES (1,'Lopez Gomez','Jose Juan'),(2,'Perez','Jorge');
/*!40000 ALTER TABLE `destinatario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado_formulario`
--

DROP TABLE IF EXISTS `estado_formulario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estado_formulario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado_formulario`
--

LOCK TABLES `estado_formulario` WRITE;
/*!40000 ALTER TABLE `estado_formulario` DISABLE KEYS */;
/*!40000 ALTER TABLE `estado_formulario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado_nota`
--

DROP TABLE IF EXISTS `estado_nota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estado_nota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado_nota`
--

LOCK TABLES `estado_nota` WRITE;
/*!40000 ALTER TABLE `estado_nota` DISABLE KEYS */;
INSERT INTO `estado_nota` VALUES (1,'Recibida'),(2,'Enviada'),(3,'Rechazada / No Aceptada');
/*!40000 ALTER TABLE `estado_nota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formulario`
--

DROP TABLE IF EXISTS `formulario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formulario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nroPreinscripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fechaPreinscripcion` datetime NOT NULL,
  `motivo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nroSorteo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estadoformulario_id` int(11) DEFAULT NULL,
  `postulante_id` int(11) DEFAULT NULL,
  `confirmado` tinyint(1) NOT NULL,
  `preinscripcion_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_24D6FBD70C5DD80` (`estadoformulario_id`),
  KEY `IDX_24D6FBDCCC19F66` (`postulante_id`),
  KEY `IDX_24D6FBDAA4AD0C8` (`preinscripcion_id`),
  CONSTRAINT `FK_24D6FBD70C5DD80` FOREIGN KEY (`estadoformulario_id`) REFERENCES `estado_formulario` (`id`),
  CONSTRAINT `FK_24D6FBDAA4AD0C8` FOREIGN KEY (`preinscripcion_id`) REFERENCES `preinscripcion` (`id`),
  CONSTRAINT `FK_24D6FBDCCC19F66` FOREIGN KEY (`postulante_id`) REFERENCES `postulante` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formulario`
--

LOCK TABLES `formulario` WRITE;
/*!40000 ALTER TABLE `formulario` DISABLE KEYS */;
INSERT INTO `formulario` VALUES (12,'l0op3','2017-05-01 01:41:13','Vivo cerca.','5',NULL,11,1,1);
/*!40000 ALTER TABLE `formulario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fos_user`
--

DROP TABLE IF EXISTS `fos_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fos_user`
--

LOCK TABLES `fos_user` WRITE;
/*!40000 ALTER TABLE `fos_user` DISABLE KEYS */;
INSERT INTO `fos_user` VALUES (1,'gabriel','gabriel','gabriel.hruza@gmail.com','gabriel.hruza@gmail.com',1,NULL,'$2y$13$7UojZq5lMLQnjhN1pd94lOLHTzrRawZXaD6FEAxK628JBI/D/7TT.','2017-05-01 10:32:58',NULL,NULL,'a:1:{i:0;s:10:\"ROLE_ADMIN\";}');
/*!40000 ALTER TABLE `fos_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nota`
--

DROP TABLE IF EXISTS `nota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nota` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `motivo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estadonota_id` int(11) DEFAULT NULL,
  `destinatario_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_C8D03E0D3051037` (`estadonota_id`),
  KEY `IDX_C8D03E0DB564FBC1` (`destinatario_id`),
  CONSTRAINT `FK_C8D03E0D3051037` FOREIGN KEY (`estadonota_id`) REFERENCES `estado_nota` (`id`),
  CONSTRAINT `FK_C8D03E0DB564FBC1` FOREIGN KEY (`destinatario_id`) REFERENCES `destinatario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nota`
--

LOCK TABLES `nota` WRITE;
/*!40000 ALTER TABLE `nota` DISABLE KEYS */;
INSERT INTO `nota` VALUES (1,'2018-01-01 00:00:00','Vacante','Solicitud Vacante',1,NULL),(2,'2018-01-01 00:00:00','Vacante','Solicitud Vacante',1,NULL),(3,'2012-01-01 00:00:00','Vacante','Solicitud Vacante',1,NULL),(4,'2012-01-01 00:00:00','Vacante','Solicitud Vacante',2,2),(5,'2012-01-01 00:00:00','Vacante','Solicitud Vacante',2,1),(6,'2012-01-01 00:00:00','Vacante','Solicitud Vacante',2,1);
/*!40000 ALTER TABLE `nota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `padres_hijos`
--

DROP TABLE IF EXISTS `padres_hijos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `padres_hijos` (
  `postulante_id` int(11) NOT NULL,
  `usuario_externo_id` int(11) NOT NULL,
  PRIMARY KEY (`postulante_id`,`usuario_externo_id`),
  KEY `IDX_F18A026CCCC19F66` (`postulante_id`),
  KEY `IDX_F18A026C736EE94` (`usuario_externo_id`),
  CONSTRAINT `FK_F18A026C736EE94` FOREIGN KEY (`usuario_externo_id`) REFERENCES `usuario_externo` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_F18A026CCCC19F66` FOREIGN KEY (`postulante_id`) REFERENCES `postulante` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `padres_hijos`
--

LOCK TABLES `padres_hijos` WRITE;
/*!40000 ALTER TABLE `padres_hijos` DISABLE KEYS */;
/*!40000 ALTER TABLE `padres_hijos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `postulante`
--

DROP TABLE IF EXISTS `postulante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `postulante` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `apellidos` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombres` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fechaNacimiento` datetime NOT NULL,
  `edad` int(11) NOT NULL,
  `edadal30dejunio` int(11) NOT NULL,
  `nacionalidad` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `domicilio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefonos` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `viveCon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hnoMismaEdad` tinyint(1) NOT NULL,
  `padre_id` int(11) DEFAULT NULL,
  `madre_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1C949887613CEC58` (`padre_id`),
  UNIQUE KEY `UNIQ_1C9498878682C8A2` (`madre_id`),
  CONSTRAINT `FK_1C949887613CEC58` FOREIGN KEY (`padre_id`) REFERENCES `usuario_externo` (`id`),
  CONSTRAINT `FK_1C9498878682C8A2` FOREIGN KEY (`madre_id`) REFERENCES `usuario_externo` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `postulante`
--

LOCK TABLES `postulante` WRITE;
/*!40000 ALTER TABLE `postulante` DISABLE KEYS */;
INSERT INTO `postulante` VALUES (1,'Hruza','Gabriel Carlos','2013-01-01 00:00:00',4,4,'Argentino','Saenz Peña 234','3434343443','gabriel.hruza@gmail.com','padre',1,NULL,NULL),(2,'Hruza','Gabriel Carlos','2012-01-01 00:00:00',3,4,'Argentino','Saenz Peña 234','3434343443','gabriel.hruza@gmail.com','padre',0,NULL,NULL),(3,'Hruza','Gabriel Carlos','2012-01-01 00:00:00',3,4,'Argentino','Saenz Peña 234','3434343443','gabriel.hruza@gmail.com','padre',1,NULL,NULL),(4,'Hruza','Gabriel Carlos','2012-01-01 00:00:00',3,4,'Argentino','Saenz Peña 234','3434343443','gabriel.hruza@gmail.com','padre',1,NULL,NULL),(5,'Hruza','Gabriel Carlos','2012-01-01 00:00:00',3,4,'Argentino','Saenz Peña 234','3434343443','gabriel.hruza@gmail.com','padre',1,1,NULL),(6,'Hruza','Gabriel Carlos','2012-01-01 00:00:00',3,4,'Argentino','Saenz Peña 234','3434343443','gabriel.hruza@gmail.com','padre',0,2,3),(7,'Hruza','Gabriel Carlos','2012-01-01 00:00:00',3,4,'Argentino','Saenz Peña 234','3434343443','gabriel.hruza@gmail.com','padre',0,4,5),(9,'Hruza','Gabriel Carlos','2012-01-01 00:00:00',3,4,'Argentino','Saenz Peña 234','3434343443','gabriel.hruza@gmail.com','padre',0,8,9),(10,'Hruza','Gabriel Carlos','2012-01-01 00:00:00',3,4,'Argentino','Saenz Peña 234','3434343443','gabriel.hruza@gmail.com','padre',1,10,11),(11,'Hruza','Gabriel Carlos','2012-01-01 00:00:00',3,4,'Argentino','Saenz Peña 234','3434343443','gabriel.hruza@gmail.com','padre',1,12,13);
/*!40000 ALTER TABLE `postulante` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `postulante_usuario_externo`
--

DROP TABLE IF EXISTS `postulante_usuario_externo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `postulante_usuario_externo` (
  `postulante_id` int(11) NOT NULL,
  `usuario_externo_id` int(11) NOT NULL,
  PRIMARY KEY (`postulante_id`,`usuario_externo_id`),
  KEY `IDX_607A4C9DCCC19F66` (`postulante_id`),
  KEY `IDX_607A4C9D736EE94` (`usuario_externo_id`),
  CONSTRAINT `FK_607A4C9D736EE94` FOREIGN KEY (`usuario_externo_id`) REFERENCES `usuario_externo` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_607A4C9DCCC19F66` FOREIGN KEY (`postulante_id`) REFERENCES `postulante` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `postulante_usuario_externo`
--

LOCK TABLES `postulante_usuario_externo` WRITE;
/*!40000 ALTER TABLE `postulante_usuario_externo` DISABLE KEYS */;
/*!40000 ALTER TABLE `postulante_usuario_externo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `preinscripcion`
--

DROP TABLE IF EXISTS `preinscripcion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `preinscripcion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fechaApertura` datetime NOT NULL,
  `fechaCierre` datetime NOT NULL,
  `ultimoNroSorteo` int(11) NOT NULL,
  `vacantes` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preinscripcion`
--

LOCK TABLES `preinscripcion` WRITE;
/*!40000 ALTER TABLE `preinscripcion` DISABLE KEYS */;
INSERT INTO `preinscripcion` VALUES (1,'2017-03-01 00:00:00','2017-06-01 00:00:00',5,30),(2,'2017-04-01 00:00:00','2017-05-06 00:00:00',0,10);
/*!40000 ALTER TABLE `preinscripcion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario_externo`
--

DROP TABLE IF EXISTS `usuario_externo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario_externo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `apellidos` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombres` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `domicilio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `celular` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tutor` tinyint(1) NOT NULL,
  `hijo_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_AB195E37230917F5` (`hijo_id`),
  CONSTRAINT `FK_AB195E37230917F5` FOREIGN KEY (`hijo_id`) REFERENCES `postulante` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario_externo`
--

LOCK TABLES `usuario_externo` WRITE;
/*!40000 ALTER TABLE `usuario_externo` DISABLE KEYS */;
INSERT INTO `usuario_externo` VALUES (1,'Hruza','Carlos','Saenz Peña 235','34343344','gabriel.hruza@gmail.com',0,NULL),(2,'Hruza','Carlos','Saenz Peña 235','34343344','gabriel.hruza@gmail.com',0,NULL),(3,'Vastik','Marta Elvira','Saenz Peña 235','3434343434','webcopada@gmail.com',1,NULL),(4,'Hruza','Carlos','Saenz Peña 235','34343344','gabriel.hruza@gmail.com',0,NULL),(5,'Vastik','Marta Elvira','Saenz Peña 235','3434343434','webcopada@gmail.com',1,NULL),(8,'Hruza','Carlos','Saenz Peña 235','34343344','gabriel.hruza@gmail.com',0,NULL),(9,'Vastik','Marta Elvira','Saenz Peña 235','3434343434','webcopada@gmail.com',1,NULL),(10,'Hruza','Carlos','Saenz Peña 235','34343344','gabriel.hruza@gmail.com',0,NULL),(11,'Vastik','Marta Elvira','Saenz Peña 235','3434343434','webcopada@gmail.com',0,NULL),(12,'Hruza','Carlos','Saenz Peña 235','34343344','gabriel.hruza@gmail.com',0,NULL),(13,'Vastik','Marta Elvira','Saenz Peña 235','3434343434','webcopada@gmail.com',1,NULL);
/*!40000 ALTER TABLE `usuario_externo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-01 11:09:44

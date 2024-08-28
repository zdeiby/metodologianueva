-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: dbmetodologia
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
-- Table structure for table `t1_hogarcondicionesalimentarias`
--

DROP TABLE IF EXISTS `t1_hogarcondicionesalimentarias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t1_hogarcondicionesalimentarias` (
  `folio` bigint(20) NOT NULL,
  `numerocomidas` varchar(40) DEFAULT NULL,
  `accesibilidadalimentos1` varchar(40) DEFAULT NULL,
  `accesibilidadalimentos2` varchar(40) DEFAULT NULL,
  `accesibilidadalimentos3` varchar(40) DEFAULT NULL,
  `accesibilidad` varchar(40) DEFAULT NULL,
  `sincro` int(11) DEFAULT 0,
  `estado` varchar(45) DEFAULT '0',
  `usuario` varchar(45) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`folio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t1_hogarcondicionesalimentarias`
--

LOCK TABLES `t1_hogarcondicionesalimentarias` WRITE;
/*!40000 ALTER TABLE `t1_hogarcondicionesalimentarias` DISABLE KEYS */;
/*!40000 ALTER TABLE `t1_hogarcondicionesalimentarias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t1_hogarcondicioneshabitabilidad`
--

DROP TABLE IF EXISTS `t1_hogarcondicioneshabitabilidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t1_hogarcondicioneshabitabilidad` (
  `folio` bigint(20) NOT NULL,
  `tipovivienda` varchar(40) DEFAULT NULL,
  `materialesdeparedes` varchar(40) DEFAULT NULL,
  `materialestecho` varchar(40) DEFAULT NULL,
  `materialsuelo` varchar(40) DEFAULT NULL,
  `banococina` varchar(40) DEFAULT NULL,
  `hacimiento` varchar(255) DEFAULT NULL,
  `tipodetenenciau` varchar(40) DEFAULT NULL,
  `serviciospublicos` longtext NOT NULL,
  `telecomunicaciones` longtext NOT NULL,
  `documentodepropiedad` longtext NOT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `estado` int(11) DEFAULT 0,
  `sincro` int(11) DEFAULT 0,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`folio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t1_hogarcondicioneshabitabilidad`
--

LOCK TABLES `t1_hogarcondicioneshabitabilidad` WRITE;
/*!40000 ALTER TABLE `t1_hogarcondicioneshabitabilidad` DISABLE KEYS */;
/*!40000 ALTER TABLE `t1_hogarcondicioneshabitabilidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t1_hogarconformacionfamiliar`
--

DROP TABLE IF EXISTS `t1_hogarconformacionfamiliar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t1_hogarconformacionfamiliar` (
  `folio` bigint(20) NOT NULL,
  `tipologia` varchar(40) DEFAULT NULL,
  `familiamultiespecie1` varchar(40) DEFAULT NULL,
  `familiamultiespecie2` varchar(40) DEFAULT NULL,
  `laboresdecuidado` longtext DEFAULT NULL,
  `familiacuidadoracual` varchar(255) DEFAULT NULL,
  `familiacuidadora2` varchar(40) DEFAULT NULL,
  `condicionespecial` longtext NOT NULL,
  `familiacuidadora` longtext NOT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `estado` int(11) DEFAULT 0,
  `sincro` int(11) DEFAULT 0,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`folio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t1_hogarconformacionfamiliar`
--

LOCK TABLES `t1_hogarconformacionfamiliar` WRITE;
/*!40000 ALTER TABLE `t1_hogarconformacionfamiliar` DISABLE KEYS */;
/*!40000 ALTER TABLE `t1_hogarconformacionfamiliar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t1_hogardatosgeograficos`
--

DROP TABLE IF EXISTS `t1_hogardatosgeograficos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t1_hogardatosgeograficos` (
  `folio` bigint(20) NOT NULL,
  `estrato` varchar(40) DEFAULT NULL,
  `comuna` varchar(40) DEFAULT NULL,
  `barrio` varchar(40) DEFAULT NULL,
  `ubicacion` varchar(40) DEFAULT NULL,
  `campesina` varchar(40) DEFAULT NULL,
  `dirCampo1` varchar(45) DEFAULT NULL,
  `dirCampo2` varchar(45) DEFAULT NULL,
  `dirCampo3` varchar(45) DEFAULT NULL,
  `dirCampo4` varchar(45) DEFAULT NULL,
  `dirCampo5` varchar(45) DEFAULT NULL,
  `dirCampo6` varchar(45) DEFAULT NULL,
  `dirCampo7` varchar(45) DEFAULT NULL,
  `dirCampo8` varchar(45) DEFAULT NULL,
  `dirCampo9` varchar(45) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `estado` int(11) DEFAULT 0,
  `sincro` int(11) DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`folio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t1_hogardatosgeograficos`
--

LOCK TABLES `t1_hogardatosgeograficos` WRITE;
/*!40000 ALTER TABLE `t1_hogardatosgeograficos` DISABLE KEYS */;
/*!40000 ALTER TABLE `t1_hogardatosgeograficos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t1_hogarentornofamiliar`
--

DROP TABLE IF EXISTS `t1_hogarentornofamiliar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t1_hogarentornofamiliar` (
  `folio` bigint(20) NOT NULL,
  `rutasvef1` varchar(40) DEFAULT NULL,
  `rutasvef2` varchar(40) DEFAULT NULL,
  `redesdeapoyo` varchar(40) DEFAULT NULL,
  `factoresderiesgovef` longtext NOT NULL,
  `rutasvef3` longtext NOT NULL,
  `planeacionfinanciera4` longtext NOT NULL,
  `disciplinapositiva` longtext NOT NULL,
  `tiempolibre` longtext NOT NULL,
  `cualtiempolibre` varchar(45) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `estado` int(11) DEFAULT 0,
  `sincro` int(11) DEFAULT 0,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`folio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t1_hogarentornofamiliar`
--

LOCK TABLES `t1_hogarentornofamiliar` WRITE;
/*!40000 ALTER TABLE `t1_hogarentornofamiliar` DISABLE KEYS */;
/*!40000 ALTER TABLE `t1_hogarentornofamiliar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t1_integrantesfinanciero`
--

DROP TABLE IF EXISTS `t1_integrantesfinanciero`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t1_integrantesfinanciero` (
  `folio` bigint(20) NOT NULL,
  `idintegrante` bigint(20) NOT NULL,
  `ingresos1` varchar(40) NOT NULL,
  `trabajoinfantil` longtext NOT NULL,
  `cualtrabajoinfantil` varchar(255) DEFAULT NULL,
  `trabajoinfantil2` varchar(45) DEFAULT NULL,
  `trabajo15a17anhos` varchar(40) DEFAULT NULL,
  `generaciondeingresos` varchar(40) DEFAULT NULL,
  `formalidaddelempleo` varchar(40) DEFAULT NULL,
  `ingresos2` varchar(40) DEFAULT NULL,
  `ingresos3` varchar(40) DEFAULT NULL,
  `desempleodelargaduracion` varchar(40) DEFAULT NULL,
  `desempleo` varchar(40) DEFAULT NULL,
  `intermediacionlaboral` varchar(40) DEFAULT NULL,
  `emprendimiento1` varchar(40) DEFAULT NULL,
  `bancarizacion` longtext NOT NULL,
  `endeudamiento1` varchar(40) DEFAULT NULL,
  `endeudamiento3` varchar(40) DEFAULT NULL,
  `endeudamiento2` varchar(40) DEFAULT NULL,
  `endeudamiento4` varchar(45) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `estado` int(11) DEFAULT 0,
  `sincro` int(11) DEFAULT 0,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`folio`,`idintegrante`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t1_integrantesfinanciero`
--

LOCK TABLES `t1_integrantesfinanciero` WRITE;
/*!40000 ALTER TABLE `t1_integrantesfinanciero` DISABLE KEYS */;
/*!40000 ALTER TABLE `t1_integrantesfinanciero` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t1_integrantesfisicoyemocional`
--

DROP TABLE IF EXISTS `t1_integrantesfisicoyemocional`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t1_integrantesfisicoyemocional` (
  `idintegrante` bigint(20) NOT NULL,
  `folio` bigint(20) NOT NULL,
  `regimendesalud` varchar(255) DEFAULT NULL,
  `acceso1` int(11) DEFAULT NULL,
  `acceso2` int(11) DEFAULT NULL,
  `acceso3` longtext NOT NULL,
  `enfermedad` longtext DEFAULT NULL,
  `discapacidad` int(11) DEFAULT NULL,
  `tipodediscapacidad` int(11) DEFAULT NULL,
  `atenciondiscapacidad` int(11) DEFAULT NULL,
  `certificadodiscapacidad` int(11) DEFAULT NULL,
  `consumospa1` int(11) DEFAULT NULL,
  `consumospa2` int(11) DEFAULT NULL,
  `consumospa3` longtext NOT NULL,
  `consumospa4` int(11) DEFAULT NULL,
  `consumospa5` int(11) DEFAULT NULL,
  `cualconsumospa5` varchar(45) DEFAULT NULL,
  `consumospa6` longtext NOT NULL,
  `psicosocial1` varchar(45) NOT NULL,
  `psicosocial2` longtext NOT NULL,
  `cualpsicosocial2` varchar(45) DEFAULT NULL,
  `planexequial` int(11) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `estado` int(11) DEFAULT 0,
  `sincro` int(11) DEFAULT 0,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idintegrante`,`folio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t1_integrantesfisicoyemocional`
--

LOCK TABLES `t1_integrantesfisicoyemocional` WRITE;
/*!40000 ALTER TABLE `t1_integrantesfisicoyemocional` DISABLE KEYS */;
/*!40000 ALTER TABLE `t1_integrantesfisicoyemocional` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t1_integranteshogar`
--

DROP TABLE IF EXISTS `t1_integranteshogar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t1_integranteshogar` (
  `idintegrante` bigint(20) NOT NULL,
  `folio` bigint(20) NOT NULL,
  `nombre1` varchar(45) DEFAULT NULL,
  `nombre2` varchar(45) DEFAULT NULL,
  `apellido1` varchar(45) DEFAULT NULL,
  `apellido2` varchar(45) DEFAULT NULL,
  `nombreidentatario1` varchar(45) DEFAULT NULL,
  `nombreidentatario2` varchar(45) DEFAULT NULL,
  `fechanacimiento` varchar(45) DEFAULT NULL,
  `edad` varchar(45) DEFAULT NULL,
  `nacionalidad` varchar(45) DEFAULT NULL,
  `tipodocumento` varchar(45) DEFAULT NULL,
  `documento` varchar(45) DEFAULT NULL,
  `representante` varchar(45) DEFAULT NULL,
  `parentesco` varchar(45) DEFAULT NULL,
  `jefedelhogar` varchar(45) DEFAULT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  `privadodelalibertad` varchar(45) DEFAULT NULL,
  `estadocivil` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `avatar` varchar(45) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `estado` int(11) DEFAULT 0,
  `sincro` int(11) DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idintegrante`,`folio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t1_integranteshogar`
--

LOCK TABLES `t1_integranteshogar` WRITE;
/*!40000 ALTER TABLE `t1_integranteshogar` DISABLE KEYS */;
/*!40000 ALTER TABLE `t1_integranteshogar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t1_integrantesidentitario`
--

DROP TABLE IF EXISTS `t1_integrantesidentitario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t1_integrantesidentitario` (
  `idintegrante` bigint(20) NOT NULL,
  `folio` bigint(20) NOT NULL,
  `hijos` varchar(45) DEFAULT NULL,
  `gestante` varchar(45) DEFAULT NULL,
  `lactante` varchar(45) DEFAULT NULL,
  `situacionmilitar` varchar(45) DEFAULT NULL,
  `orientacion` varchar(45) DEFAULT NULL,
  `cualorientacion` varchar(45) DEFAULT NULL,
  `identidad` varchar(45) DEFAULT NULL,
  `cualidentidad` varchar(45) DEFAULT NULL,
  `etnia` varchar(45) DEFAULT NULL,
  `certificacionetnica` varchar(45) DEFAULT NULL,
  `victima1` varchar(45) DEFAULT NULL,
  `victima2` varchar(45) DEFAULT NULL,
  `victima3` varchar(45) DEFAULT NULL,
  `migrantes1` varchar(45) DEFAULT NULL,
  `migrantes2` varchar(45) DEFAULT NULL,
  `cualong` varchar(45) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `estado` int(11) DEFAULT 0,
  `sincro` int(11) DEFAULT 0,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idintegrante`,`folio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t1_integrantesidentitario`
--

LOCK TABLES `t1_integrantesidentitario` WRITE;
/*!40000 ALTER TABLE `t1_integrantesidentitario` DISABLE KEYS */;
/*!40000 ALTER TABLE `t1_integrantesidentitario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t1_integrantesintelectual`
--

DROP TABLE IF EXISTS `t1_integrantesintelectual`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t1_integrantesintelectual` (
  `idintegrante` bigint(20) NOT NULL,
  `folio` bigint(20) NOT NULL,
  `alfabetizacion` varchar(40) DEFAULT NULL,
  `educacion` varchar(40) DEFAULT NULL,
  `cuidadomenores` varchar(45) DEFAULT NULL,
  `niveleducativo1` varchar(40) DEFAULT NULL,
  `niveleducativo2` varchar(40) DEFAULT NULL,
  `niveleducativo3` varchar(40) DEFAULT NULL,
  `niveleducativo4` varchar(40) DEFAULT NULL,
  `niveleducativo5` varchar(40) DEFAULT NULL,
  `alfabetizaciondigital` varchar(40) DEFAULT NULL,
  `deseaaccedereducacion` varchar(40) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `estado` int(11) DEFAULT 0,
  `sincro` int(11) DEFAULT 0,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idintegrante`,`folio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t1_integrantesintelectual`
--

LOCK TABLES `t1_integrantesintelectual` WRITE;
/*!40000 ALTER TABLE `t1_integrantesintelectual` DISABLE KEYS */;
/*!40000 ALTER TABLE `t1_integrantesintelectual` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t1_integranteslegal`
--

DROP TABLE IF EXISTS `t1_integranteslegal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t1_integranteslegal` (
  `folio` bigint(20) NOT NULL,
  `idintegrante` bigint(20) NOT NULL,
  `mecanismosdeproteccionddhh` varchar(40) DEFAULT NULL,
  `mecanismosdeproteccionddhh3` longtext DEFAULT NULL,
  `mecanismosdeproteccionddhh2` varchar(40) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `estado` int(11) DEFAULT 0,
  `sincro` int(11) DEFAULT 0,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`folio`,`idintegrante`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t1_integranteslegal`
--

LOCK TABLES `t1_integranteslegal` WRITE;
/*!40000 ALTER TABLE `t1_integranteslegal` DISABLE KEYS */;
/*!40000 ALTER TABLE `t1_integranteslegal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t1_principalhogar`
--

DROP TABLE IF EXISTS `t1_principalhogar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t1_principalhogar` (
  `folio` bigint(20) NOT NULL,
  `idintegrantetitular` bigint(20) NOT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `habeasdata` int(11) DEFAULT 0,
  `sincro` int(11) DEFAULT 1,
  `folioactivo` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`folio`,`idintegrantetitular`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t1_principalhogar`
--

LOCK TABLES `t1_principalhogar` WRITE;
/*!40000 ALTER TABLE `t1_principalhogar` DISABLE KEYS */;
/*!40000 ALTER TABLE `t1_principalhogar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t1_privacion1`
--

DROP TABLE IF EXISTS `t1_privacion1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t1_privacion1` (
  `idprivacion` int(11) NOT NULL,
  `folio` bigint(20) NOT NULL,
  `idintegrante` bigint(20) NOT NULL,
  `edad` varchar(45) DEFAULT NULL,
  `sabeleeryescribir` varchar(45) DEFAULT NULL,
  `codigoprivacionDI` varchar(45) DEFAULT NULL,
  `codigoprivacionDA` varchar(45) DEFAULT NULL,
  `sincro` varchar(45) DEFAULT NULL,
  `fecharegistroDI` varchar(45) DEFAULT NULL,
  `fecharegistroDA` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`folio`,`idintegrante`,`idprivacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t1_privacion1`
--

LOCK TABLES `t1_privacion1` WRITE;
/*!40000 ALTER TABLE `t1_privacion1` DISABLE KEYS */;
/*!40000 ALTER TABLE `t1_privacion1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_bancopreguntas`
--

DROP TABLE IF EXISTS `t_bancopreguntas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_bancopreguntas` (
  `id` int(11) NOT NULL,
  `pregunta` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_bancopreguntas`
--

LOCK TABLES `t_bancopreguntas` WRITE;
/*!40000 ALTER TABLE `t_bancopreguntas` DISABLE KEYS */;
INSERT INTO `t_bancopreguntas` VALUES (0,'No aplica'),(1,'A. SI'),(2,'B. NO'),(3,'A. Registro Civil'),(4,'B. Tarjeta Identidad'),(5,'C. Cédula de Ciudadanía'),(6,'D. Cédula de Extranjería'),(7,'E. Estatuto de Protección Temporal PPT'),(8,'F. Salvo conducto SC2 (solicitud de refugio)'),(9,'G. Pasaporte'),(10,'H. Otro documento extranjero'),(11,'I. No tiene documento'),(12,'A. Hombre'),(13,'B. Mujer'),(14,'A. Heterosexual'),(15,'B. Bisexual'),(16,'C. Lesbiana'),(17,'D. Gay'),(18,'E. Asexual'),(19,'F. Pansexual'),(20,'G. Otra'),(21,'H. Prefiere no decirlo'),(22,'A. Mujer CISgénero'),(23,'B. Hombre CISgénero'),(24,'C. Mujer Transgénero'),(25,'D. Hombre Transgénero'),(26,'E. Género fluido'),(27,'F. No binario'),(28,'K. Otra'),(29,'L. Prefiere no identificarse'),(30,'J. Transformista '),(31,'A. Afrodescendiente/ Afrocolombiano'),(32,'B. Negro'),(33,'C. Palanquero'),(34,'D. Raizal'),(35,'E. ROM - Gitano.'),(36,'F. Indígena'),(37,'G. Ninguna de las anteriores'),(38,'A. Cancillería'),(39,'B. Sedes diplomáticas'),(40,'C. ACNUR'),(41,'D. ONG ¿cuál?'),(42,'E. Otro.'),(43,'A. Régimen Subsidiado'),(44,'B. Régimen Contributivo'),(45,'C. Régimen especial'),(46,'D. No Cuenta con afiliación'),(47,'A. RIAS Atención Materno Perinatal'),(48,'B. RIAS Primera Infancia Control y desarrollo'),(49,'C. RIAS Primera Infancia Vacunación completa según su edad.'),(50,'D. Detección de alteraciones visuales'),(51,'E. Odontología'),(52,'F. Prevención del Embarazo'),(53,'G. Riesgo cardiovascular'),(54,'H. RIAS Joven Sano'),(55,'I. Citología realizada en los últimos 3 años'),(56,'J. Prueba de ADN de  VPH realizada en los últimos 5 años '),(57,'K. Autoexamen de seno en el último mes '),(58,'L. Mamografía realizada en los últimos 2 años '),(59,'M.  Antígeno prostático'),(60,'N.  Examen próstata, tacto rectal'),(61,'vacia'),(62,'A. Física'),(63,'B. Psicosocial (mental)'),(64,'C. Intelectual'),(65,'D. Auditiva'),(66,'E. Visual'),(67,'F. Múltiple'),(68,'G. Sordo ceguera'),(69,'A. SÍ accede o ha acedido'),(70,'B. No accede o no ha podido acceder'),(71,'A. Estimulantes (ej. cocaína, anfetaminas, nicotina, MDMA - extasis)'),(72,'B. Alucinógenas (ej. LSD, psilocibina - hongos, peyote, Ayahuasca, DMT - Dimetiltriptamina)'),(73,'C. Depresoras (ej. alcohol, benzodiacepinas, Barbitúricos, GHB - Ácido gamma-hidroxibutírico)'),(74,'D. Mixtas (ej. cannabis, éxtasis, Ketamina, PCP - Fenciclidina)'),(75,'A. Consumo ocasional (menos de una vez por semana)'),(76,'B. Consumo habitual (dos o más veces por semana)'),(77,'A. Recreativo (diversión, socialización)'),(78,'B. Terapéutico (alivio del dolor, ansiedad, insomnio)'),(79,'C. Exploración personal (autoconocimiento, espiritualidad)'),(80,'D. Otro (especificar)'),(81,'A. No ha tenido consecuencias negativas'),(82,'B. Problemas de salud física'),(83,'C. Problemas de salud mental'),(84,'D. Problemas sociales (familia, amigos)'),(85,'E. Problemas legales'),(86,'F. Problemas laborales/educativos'),(87,'A. SI'),(88,'B. No ha tenido la necesidad'),(89,'C. No conoce la ruta para acceder'),(90,'D. Ha intentado acceder al servicio, pero no le han dado la cita'),(91,'E. No le interesa'),(92,'A. Yoga'),(93,'B. Técnicas de relajación y meditación'),(94,'C. Participación en  actividades de grupo'),(95,'D. Gestión de apoyo social (familiares y amigos)'),(96,'E. Gestión de ayuda profesional'),(97,'F. Actividades físicas'),(98,'G. Alimentación sana'),(99,'H. Planificación de actividades cotidianas'),(100,'I. Higiene del sueño'),(101,'J. Mindfulness '),(102,'K. Voluntariado'),(103,'L. Tiempo en la naturaleza'),(104,'M. Terapia de arte o musicoterapia.'),(105,'N. Rutinas de autocuidado'),(106,'O. Otro (especificar)'),(107,'A. No tiene ningún nivel educativo.'),(108,'B. Servicios de primera infancia'),(109,'C. Pre escolar'),(110,'D. Básica Primaria (grados 1 a 5)'),(111,'E. Básica Secundaria (grados 6 a 9)'),(112,'F. Media (grados 10 a 11)'),(113,'G. Media Técnica'),(114,'H. Grado 12 y 13. Normalista.'),(115,'I. Técnica laboral incompleta'),(116,'J. Técnica laboral con titulo'),(117,'K. Técnica incompleta'),(118,'L. Técnica con Título'),(119,'M. Tecnológica incompleta'),(120,'N. Tecnológica con Título'),(121,'O. Universitario Pre-grado incompleto'),(122,'P. Universitario Pre-grado Completo'),(123,'A. 1'),(124,'B. 2'),(125,'C. 3'),(126,'D. 4'),(127,'E. 5'),(128,'F. 6'),(129,'G. 7'),(130,'H. 8'),(131,'I. 9'),(132,'J. 10'),(133,'K. 11'),(134,'A. SI (ocupados: realiza una actividad paga que le genera ingresos económicos)'),(135,'B. NO (desempleado: no realiza una actividad paga que le genera ingresos económicos)'),(136,'C. Es pensionado.'),(137,'A. Trabajador doméstico'),(138,'B. Labores agrícolas (campesino)'),(139,'C. Trabajo en minas'),(140,'D. Comercio en espacio público / ambulante'),(141,'E. Comercio en establecimiento'),(142,'G. Reciclaje'),(143,'H. Trabajo en calle (domiciliario, lava carros, etc)'),(144,'I. Mendicidad'),(145,'J. Explotación sexual (ESCNNA)'),(146,'K. Otra? Cúal'),(147,'A. Empleo formal'),(148,'B. Contratista o trabajador independiente.'),(149,'H. Trabajo por días'),(150,'I. Mi propio emprendimiento o negocio.'),(151,'J. Labores del campo (Campesino)'),(152,'A. Deseo emplearme formalmente en una empresa'),(153,'B. Deseo emplearme formalmente desde casa'),(154,'C. Deseo trabajar independiente.'),(155,'D. Deseo emprender o mejorar mi emprendimiento.'),(156,'E. No está en mis planes emplearme o generar ingresos'),(157,'A. Crédito bancario / hipotecario'),(158,'B. Cuenta de ahorros'),(159,'C. Tarjeta de crédito'),(160,'D. Productos de ahorro como CDT u otros'),(161,'E. Banca digital tipo NEQUI, DAVIPLATA, etc.'),(162,'F. App de banca móvil.'),(163,'G. ¿Otro?'),(164,'H. Ninguno'),(165,'A. CAVIF'),(166,'B. Fiscalía General de la Nación'),(167,'C. Comisaría de familia'),(168,'D. Inspección de policía'),(169,'E. Centro zonal ICBF'),(170,'F. CAIVAS'),(171,'G. URI'),(172,'H. Casa de justicia'),(173,'I. Despacho judicial (juzgado)'),(174,'J. Superintendencias'),(175,'K. Jurisdicción especial indígena'),(176,'L. Defensoría del Pueblo'),(177,'M. Personería Municipal'),(178,'N. Las conozco pero no la he requerido'),(179,'A. Familia nuclear.'),(180,'B. Familia extensa.'),(181,'C. Familia monoparental jefatura femenina'),(182,'D. Familia monoparental jefatura masculina.'),(183,'E. Familia simultánea o reconstituida.'),(184,'F. Familia homoparental.'),(185,'G. Familia de padres separados.'),(186,'H. Familia multinuclear.'),(187,'I. Familia LAT - Living apart together (Viviendo juntos pero separados)'),(188,'J. Familia DINK (sin hijos)'),(189,'K. Hogar unipersonal.'),(190,'L. Familia poli amorosa'),(191,'M.  Hogar confomado solo por personas mayores'),(192,'A. Cuidadora de personas con discapacidad.'),(193,'B. Cuidadora de menores de edad. '),(194,'C. Cuidadora de personas mayores.'),(195,'D. Cuidadora de persona con enfermedades que requieren atención especial (enfermedades crónicas, infecciosas, autoinmunes, neurodegenerativas, oncológicas, psiquiátricas).'),(196,'F. Ninguna'),(197,'A. No me afecta'),(198,'B. Acceso a educación.'),(199,'C. Capacidad de generación de ingresos.'),(200,'D. Otro ¿cuál?'),(201,'A. 1'),(202,'B. 2'),(203,'C. 3'),(204,'D. 4'),(205,'E. 5'),(206,'F. 6'),(207,'G. No tiene'),(208,'A. Urbana'),(209,'B. Rural'),(210,'A. Casa'),(211,'B. Apartamento'),(212,'C. Habitación'),(213,'D. Inquilinato'),(214,'E. Rancho'),(215,'A. Bloque, ladrillo, piedra, madera pulida'),(216,'B. Tapia pisada, adobe'),(217,'C. Bahareque'),(218,'D. Material prefabricado'),(219,'E. Madera burda, tabla, tablón'),(220,'F. Guadua, caña, esterilla, otros vegetales'),(221,'G. Zinc, tela, lona, cartón, latas, desechos plásticos'),(222,'H. Sin paredes'),(223,'A. Teja de barro'),(224,'B. Bloque,  ladrillo,  piedra,  madera pulida'),(225,'C. Tapia pisada,  adobe, bahareque'),(226,'D. Teja plástica'),(227,'E. Material prefabricado'),(228,'F. Teja en fibrocemento'),(229,'G. Cemento  o concreto'),(230,'H. Guadua, caña, esterilla,  otro vegetal'),(231,'I. Zinc,  tela,  lona,  cartón,  latas,  desechos plásticos'),(232,'J. Madera burda, tabla,  tablón'),(233,'K. Sin techo'),(234,'A. Cemento, gravilla'),(235,'B. Baldosa, vinilo, ladrillo'),(236,'C. Mármol, madera pulida'),(237,'D. Madera burda, madera en mal estado, tabla o tablón'),(238,'E. Cerámica, porcelanato'),(239,'F. Tapete sobre tierra'),(240,'G. Tierra, arena'),(241,'H. Otro material'),(242,'A. Energía eléctrica'),(243,'B. Acueducto'),(244,'C. Alcantarillado'),(245,'D. Gas natural domiciliario'),(246,'E. Recolección de basuras'),(247,'F. Ningún servicio (la vivienda no cuenta con servicios básicos domiciliarios)'),(248,'A. Teléfono celular (flechita)'),(249,'B. Teléfono celular inteligente (Smart Phone)'),(250,'C. Teléfono fijo '),(251,'D. Internet'),(252,'E. Servicio televisión abierta'),(253,'F. Servicio televisión paga'),(254,'G. Radio '),(255,'H. Ningún servicio (la vivienda no cuenta con servicios de telecomunicaciones)'),(256,'A. Propia, la están pagando'),(257,'B. Propia, totalmente pagada'),(258,'C. En arriendo o subarriendo'),(259,'D. En usufructo'),(260,'E. Ocupante de hecho o poseedor'),(261,'F. Familiar'),(262,'A. Escritura pública y/o folio de matrícula'),(263,'B. Certificado de compraventa'),(264,'C. No tiene documentación de la vivienda'),(265,'A. Trabajo infantil'),(266,'B. Explotación sexual comercial de niños, niñas y adolescentes (ESCNNA)'),(267,'C. Integrantes que laboran en actividades sexuales pagas (PPASP)'),(268,'D. Embarazo adolescente; maternidad o paternidad a temprana edad (menores de 18 años)'),(269,'E. Consumo de sustancias psicoactivas'),(270,'E. Afectaciones o problemas de salud mental en alguno de sus integrantes.'),(271,'F. Conflictos no resueltos entre los integrantes del hogar.'),(272,'G. Dificultades o diferencias para el manejo de la norma y la autoridad (ya sea por género, edad o estatus socioeconómico)'),(273,'H. Aislamiento social o falta de redes de apoyo social.'),(274,'I. Dificultades económicas, crisis por desempleo y estrés financiero (deudas).'),(275,'J. Creencias religiosas, culturales y sociales en conflicto.'),(276,'K. Falta de estrategias para la resolución de conflictos.'),(277,'L. Violencia verbal (insultos)'),(278,'S. Ninguna de las anteriores'),(279,'Violencia verbal (insultos)'),(280,'Violencia basada en género'),(281,'Violencia física (golpes)'),(282,'Violencia emocional'),(283,'Violencia sexual'),(284,'Violencia económica'),(285,'Negligencia'),(286,'A. CAVIF. Centro de Atención para la Violencia Intrafamiliar.'),(287,'B. Institución prestadora servicios de salud IPS/EPS'),(288,'C. Fiscalía General de la Nación '),(289,'D. Línea Nacional de Atención a la mujer 155'),(290,'E. Comisaría de familia   '),(291,'F. Inspección de policía       '),(292,'G. Centro zonal ICBF'),(293,'H. CAIVAS. Centro de Atención Integral a Víctimas de Abuso Sexual.'),(294,'I. Personería o Defensoría del Pueblo.'),(295,'A. Ingresos economicos'),(296,'B. Objetivos de  ahorro familiar o de inversión'),(297,'C. Priorización de gastos y uso de excendentes'),(298,'A. Se propician espacios de dialogo para la resolución de conflictos.'),(299,'B. Se reconoce y afirma de forma positiva el cumplimiento de los deberes o acuerdos.'),(300,'C. Se promueve una comunicación amable y firme, evitando insultos y golpes.'),(301,'D. Se fomentan espacios para compartir las experiencias del día a día.'),(302,'E. Se establecen estrategias para atender las dificultades generadas por comportamientos repetitivos negativos.'),(303,'F. En el hogar se muestra interés cuando se evidencian cambios en los estados de ánimo de sus integrantes.'),(304,'G. No se implementa ninguna de las estrategias mencionadas.'),(305,'A. Actividades culturales como obras de teatro, conciertos, etc.'),(306,'B. Actividades de recreación o deporte.'),(307,'C. Actividades espirituales y reflexivas.'),(308,'D. Otra, ¿cuál?'),(309,'E. Ninguna,'),(310,'A. Padres'),(311,'B. Cónyuge  o compañero(a) permanente'),(312,'C. Hijo (a)'),(313,'D. Hermano (a)'),(314,'E. Abuelo (a)'),(315,'F. Nieto (a)'),(316,'G. Tíos'),(317,'H. Sobrinos'),(318,'I. Bisabuelos'),(319,'J. Bisnietos'),(320,'K. Suegros'),(321,'L. Yerno'),(322,'M. Nuera'),(323,'N. Hijastro(a)'),(324,'O. Padrastro'),(325,'P. Madrastra'),(326,'Q. Cuñada'),(327,'R. Padres adoptantes'),(328,'S. Hijos Adoptivos'),(329,'T. Otros Parientes'),(330,'U. Otros No Parientes'),(331,'A. Soltero'),(332,'B. Casado'),(333,'C. Unión libre'),(334,'D. Separado'),(335,'E. Viudo (a)'),(336,'F. Divorciado'),(337,'G. Mujer Transexual'),(338,'H. Hombre Transexual '),(339,'I.  Travesti'),(340,'A. Algún tipo de cáncer'),(341,'B. Enfermedad Renal Crónica'),(342,'C. Problemas de hipertensión o infarto'),(343,'D. VIH-SIDA'),(344,'E. Otra'),(345,'F. Ninguna'),(346,'H. Si, se desconoce'),(347,'P. No implementa ninguna'),(348,'Q. Posgrado incompleto'),(349,'F. Negocio familiar'),(350,'D. Reciclaje'),(351,'C. Rentista'),(352,'D. Reciclaje'),(353,'E. Rebusque'),(354,'F. Servicios sexuales pagos (prostitución)'),(355,'G. Mendicidad y sobrevivencia'),(356,'A. Orientación / formación'),(357,'B. Apoyo económico'),(358,'C. Apoyo en especie'),(359,'D. No ha recibido'),(360,'O. Unidad de víctimas'),(361,'E. Cuidado de personas y mantenimiento del hogar en hogares distintos al propio.'),(362,'M. Violencia basada en género'),(363,'N. Violencia física (golpes)'),(364,'O.  Violencia emocional'),(365,'P. Violencia sexual'),(366,'Q. Violencia económica'),(367,'R. Negligencia'),(368,'D. No implementan ninguna acción para la priorización de gastos y administración de recursos económicos.'),(369,'P.  No  he hecho uso '),(370,'R. Posgrado completo');
/*!40000 ALTER TABLE `t_bancopreguntas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_barrios`
--

DROP TABLE IF EXISTS `t_barrios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_barrios` (
  `codigo` int(11) NOT NULL DEFAULT 0 COMMENT 'Codigo del Barrio',
  `barriovereda` varchar(200) DEFAULT NULL COMMENT 'Nombre del Barrio o Vereda',
  `comuna` int(11) DEFAULT NULL COMMENT 'Numero de la Comuna',
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_barrios`
--

LOCK TABLES `t_barrios` WRITE;
/*!40000 ALTER TABLE `t_barrios` DISABLE KEYS */;
INSERT INTO `t_barrios` VALUES (101,' 101 Santo Domingo Savio Nº 1',1),(102,' 102 Santo Domingo Savio Nº 2',1),(103,' 103 Popular',1),(104,' 104 Granizal',1),(105,' 105 Moscú Nº 2',1),(106,' 106 Villa de Guadalupe',1),(107,' 107 San Pablo',1),(108,' 108 El Compromiso',1),(109,' 109 La Aldea Pablo VI',1),(110,' 110 La Esperanza Nº 2',1),(111,' 111 La Avanzada',1),(112,' 112 El Carpinelo',1),(201,' 201 La Isla',2),(202,' 202 El Playón de Los Comuneros',2),(203,' 203 Pablo VI',2),(204,' 204 La Frontera',2),(205,' 205 La Francia',2),(206,' 206 Andalucia',2),(207,' 207 Villa del Socorro',2),(208,' 208 Villa Niza',2),(209,' 209 Moscú Nº 1',2),(210,' 210 Santa Cruz',2),(211,' 211 La Rosa',2),(301,' 301 La Salle',3),(302,' 302 Las Granjas',3),(303,' 303 Campo Vladés Nº 2',3),(304,' 304 Santa Inés',3),(305,' 305 El Raizal',3),(306,' 306 El Pomar',3),(307,' 307 Manrique Central',3),(308,' 308 Manrique Oriental',3),(309,' 309 Versalles Nº 1',3),(310,' 310 Versalles Nº 2',3),(311,' 311 La Cruz',3),(312,' 312 Oriente',3),(313,' 313 María Cano-Carambolas',3),(314,' 314 San José la Cima Nº 1',3),(315,' 315 San José la Cima Nº 2',3),(401,' 401 Berlín',4),(402,' 402 San Isidro',4),(403,' 403 Palermo',4),(404,' 404 Bermejal',4),(405,' 405 Moravia',4),(406,' 406 Universidad de Antioquia',4),(407,' 407 Sevilla',4),(408,' 408 San Pedro',4),(409,' 409 Manrique Central',4),(410,' 410 Campo Valdés Nº 1',4),(411,' 411 Las Esmeraldas',4),(412,' 412 La Piñuela',4),(413,' 413 Aranjuez',4),(414,' 414 Brasilia',4),(415,' 415 Miranda',4),(416,' 416 Jardín Botánico',4),(417,' 417 Parque Norte',4),(501,' 501 Toscana',5),(502,' 502 Las Brisas',5),(503,' 503 Florencia',5),(504,' 504 Tejelo',5),(505,' 505 Boyaca',5),(506,' 506 Plaza de Ferias',5),(507,' 507 Héctor Abad Gómez',5),(508,' 508 Belalcázar',5),(509,' 509 Girardot',5),(510,' 510 Tricentenario',5),(511,' 511 Castilla',5),(512,' 512 Oleoducto',5),(513,' 513 Francisco Antonio Zea',5),(514,' 514 Alfonso López',5),(515,' 515 Cementerio Universal',5),(516,' 516 Terminal de Transporte',5),(517,' 517 Caribe',5),(518,' 518 Everfit',5),(519,' 519 Progreso',5),(601,' 601 Santander',6),(602,' 602 Doce de Octubre Nº 1',6),(603,' 603 Doce de Octubre Nº 2',6),(604,' 604 Pedregal',6),(605,' 605 La Esperanza',6),(606,' 606 San Martín de Porres',6),(607,' 607 Kennedy',6),(608,' 608 Picacho',6),(609,' 609 Picachito',6),(610,' 610 El Mirador del Doce',6),(611,' 611 El Progreso Nº 2',6),(612,' 612 El Triunfo',6),(701,' 701 Universidad Nacional',7),(702,' 702 Cerro el Volador',7),(703,' 703 San Germán',7),(704,' 704 Liceo Universidad de Antioquia',7),(705,' 705 Facultad de Minas Universidad Nacional',7),(706,' 706 La Pilarica',7),(707,' 707 Bosques de San Pablo',7),(708,' 708 Altamira',7),(709,' 709 Córdoba',7),(710,' 710 López de Mesa',7),(711,' 711 El Diamante',7),(712,' 712 Aures Nº 2',7),(713,' 713 Aures Nº 1',7),(714,' 714 Bello Horizonte',7),(715,' 715 Villa Flora',7),(716,' 716 Palenque',7),(717,' 717 Robledo',7),(718,' 718 El Cucaracho',7),(719,' 719 Fuente Clara',7),(720,' 720 Santa Margarita',7),(721,' 721 Nazareth',7),(722,' 722 Olaya Herrera',7),(723,' 723 Pajarito',7),(724,' 724 Monteclaro',7),(725,' 725 Nueva Villa de la Iguana',7),(801,' 801 Villa Hermosa',8),(802,' 802 La Mansión',8),(803,' 803 San Miguel',8),(804,' 804 La Ladera',8),(805,' 805 Batallón Girardot',8),(806,' 806 Llanaditas',8),(807,' 807 Los Mangos',8),(808,' 808 Enciso',8),(809,' 809 Sucre',8),(810,' 810 El Pinal',8),(811,' 811 Trece de Noviembre',8),(812,' 812 La Libertad',8),(813,' 813 Villatina',8),(814,' 814 San Antonio',8),(815,' 815 Las Estancias',8),(816,' 816 Villa Turbay',8),(817,' 817 La Sierra',8),(818,' 818 Santa Lucía Las Estancias',8),(819,' 819 Villa Lilliam',8),(901,' 901 Juan Pablo II',9),(902,' 902 Barrios de Jesús',9),(903,' 903 Bomboná Nº 2',9),(904,' 904 Los Cerros - El Vergel',9),(905,' 905 Alejandro Echavarría',9),(906,' 906 Barrio Caicedo',9),(907,' 907 Buenos Aires',9),(908,' 908 Miraflores',9),(909,' 909 Cataluña',9),(910,' 910 La Milagrosa',9),(911,' 911 Gerona',9),(912,' 912 El Salvador',9),(913,' 913 Loreto',9),(914,' 914 Asomadera Nº 1',9),(915,' 915 Asomadera Nº 2',9),(916,' 916 Asomadera Nº 3',9),(917,' 917 Ocho de Marzo',9),(1001,'1001 Prado',10),(1002,'1002 Hospital San Vicente',10),(1003,'1003 Jesús Nazareno',10),(1004,'1004 El Chagualo',10),(1005,'1005 Estación Villa',10),(1006,'1006 San Benito',10),(1007,'1007 Guayaquil',10),(1008,'1008 Corazón de Jesús',10),(1009,'1009 La Alpujarra',10),(1010,'1010 Centro Administrativo',10),(1011,'1011 Calle Nueva',10),(1012,'1012 Perpetuo Socorro',10),(1013,'1013 Barrio Colón',10),(1014,'1014 Las Palmas',10),(1015,'1015 Bomboná Nº 1',10),(1016,'1016 Bostón',10),(1017,'1017 Los Angeles',10),(1018,'1018 Villa Nueva',10),(1019,'1019 La Candelaria',10),(1020,'1020 San Diego',10),(1101,'1101 Carlos E. Restrepo',11),(1102,'1102 Suramericana',11),(1103,'1103 Naranjal',11),(1104,'1104 San Joaquín',11),(1105,'1105 Los Conquistadores',11),(1106,'1106 Universidad Pontificia',11),(1107,'1107 Bolivariana',11),(1108,'1108 Laureles',11),(1109,'1109 Las Acacias',11),(1110,'1110 La Castellana',11),(1111,'1111 Lorena',11),(1112,'1112 El Velódromo',11),(1113,'1113 Estadio',11),(1114,'1114 Los Colores',11),(1115,'1115 Cuarta Brigada',11),(1116,'1116 U.D. Atanasio Girardot',11),(1117,'1117 Florida Nueva',11),(1201,'1201 Ferrini',12),(1202,'1202 Calasanz',12),(1203,'1203 Los Pinos',12),(1204,'1204 La América',12),(1205,'1205 La Floresta',12),(1206,'1206 Santa Lucía',12),(1207,'1207 El Danubio',12),(1208,'1208 Campo Alegre',12),(1209,'1209 Santa Mónica',12),(1210,'1210 Barrio Cristóbal',12),(1211,'1211 Simón Bolivar',12),(1212,'1212 Santa Teresita',12),(1213,'1213 Calasanz Parte Alta',12),(1301,'1301 El Pesebre',13),(1302,'1302 Blanquizal',13),(1303,'1303 Santa Rosa de Lima',13),(1304,'1304 Los Alcázares',13),(1305,'1305 Metropolitano',13),(1306,'1306 La Pradera',13),(1307,'1307 Juan XXIII - La Queibra',13),(1308,'1308 San Javier Nº 2',13),(1309,'1309 San Javier Nº 1',13),(1310,'1310 Veinte de Julio',13),(1311,'1311 Belencito',13),(1312,'1312 Betania',13),(1313,'1313 El Corazón',13),(1314,'1314 Las Independencias',13),(1315,'1315 Nuevos Conquistadores',13),(1316,'1316 El Salado',13),(1317,'1317 Eduardo Santos',13),(1318,'1318 Antonio Nariño',13),(1319,'1319 El Socorro',13),(1320,'1320 La Gabriela',13),(1401,'1401 Barrio Colombia',14),(1402,'1402 SIMESA',14),(1403,'1403 Villa Carlota',14),(1404,'1404 Castropol',14),(1405,'1405 Lalinde',14),(1406,'1406 Las Lomas Nº 1',14),(1407,'1407 Las Lomas Nº 2',14),(1408,'1408 Altos del Poblado',14),(1409,'1409  El Tesoro',14),(1410,'1410 Los Naranjos',14),(1411,'1411 Los Balsos Nº 1',14),(1412,'1412 San Lucas',14),(1413,'1413 El Diamante Nº 2',14),(1414,'1414 El Castillo',14),(1415,'1415 Los Balsos Nº 2',14),(1416,'1416 Alejandría',14),(1417,'1417 La Florida',14),(1418,'1418 El Poblado',14),(1419,'1419 Manila',14),(1420,'1420 Astorga',14),(1421,'1421 Patio Bonito',14),(1422,'1422 La Aguacatala',14),(1423,'1423 Santa María de los Angeles',14),(1501,'1501 El Rodeo',15),(1502,'1502 Tenche',15),(1503,'1503 Trinidad',15),(1504,'1504 Santa Fé',15),(1505,'1505 Shellmar',15),(1506,'1506 Parque Juan Pablo II',15),(1507,'1507 Campo Amor',15),(1508,'1508 Noel',15),(1509,'1509 Cristo Rey',15),(1510,'1510 Guayabal',15),(1511,'1511 La Colina',15),(1601,'1601 Fátima',16),(1602,'1602 Rosales',16),(1603,'1603 Belén',16),(1604,'1604 Granada',16),(1605,'1605 San Bernardo',16),(1606,'1606 Las Playas',16),(1607,'1607 Diego Echavarría',16),(1608,'1608 La Mota',16),(1609,'1609 Hondonada',16),(1610,'1610 El Rincón',16),(1611,'1611 La Loma de los Bernal',16),(1612,'1612 La Gloria',16),(1613,'1613 Altavista',16),(1614,'1614 La Palma',16),(1615,'1615 Los Alpes',16),(1616,'1616 Las Violetas',16),(1617,'1617 Las Mercedes',16),(1618,'1618 Nueva Villa de Aburrá',16),(1619,'1619 Miravalle',16),(1620,'1620 El Nogal Los Almendros',16),(1621,'1621 Cerro Nutibara',16),(1701,'1701 Ciudadela',17),(5000,'5000 Cabecera Palmitas',50),(5001,'5001 La Suiza',50),(5002,'5002 La Sucia',50),(5003,'5003 Urquita',50),(5004,'5004 Sector Central',50),(5005,'5005 Volcana Guayabal',50),(5006,'5006 La Frisola',50),(5007,'5007 La Aldea',50),(5008,'5008 Potrera Miserenga',50),(6000,'6000 Cabecera San Cristóbal',60),(6001,'6001 La Palma',60),(6002,'6002 El Patio',60),(6003,'6003 El Uvito',60),(6004,'6004 La Cuchilla',60),(6005,'6005 Naranjal',60),(6006,'6006 Boquerón',60),(6007,'6007 San José de La Montaña',60),(6008,'6008 La Ilusión',60),(6009,'6009 El Yolombó',60),(6010,'6010 El Carmelo',60),(6011,'6011 El Picacho',60),(6012,'6012 Pajarito',60),(6013,'6013 Pedregal Alto',60),(6014,'6014 La Loma',60),(6015,'6015 Las Playas',60),(6016,'6016 Travesías',60),(6017,'6017 El Llano',60),(6018,'6018 San Cristóbal',60),(7000,'7000 Cabecera Altavista',70),(7001,'7001 Buga Patio Bonito',70),(7002,'7002 Aguas Frías',70),(7003,'7003 El Corazón El Morro',70),(7004,'7004 San Pablo',70),(7005,'7005 Altavista Central',70),(7006,'7006 La Esperanza',70),(7007,'7007 San José del Manzanillo',70),(7008,'7008 El Jardín',70),(8000,'8000 Cabecera San Ant de Pr.',80),(8001,'8001 La Florida',80),(8002,'8002 Potrerito',80),(8003,'8003 Montañita',80),(8004,'8004 Yarumalito',80),(8005,'8005 Astillero',80),(8006,'8006 El Salado',80),(8007,'8007 La Verde',80),(8008,'8008 San José',80),(9000,'9000 Cabecera Sta Elena',90),(9001,'9001 Las Palmas',90),(9002,'9002 Media Luna',90),(9003,'9003 Piedras Blancas',90),(9004,'9004 Barro Blanco',90),(9005,'9005 El Placer',90),(9006,'9006 Sector Central',90),(9007,'9007 El Cerro',90),(9008,'9008 El Llano',90),(9009,'9009 El Plan',90),(9010,'9010 Piedra Gorda',90),(9011,'9011 Mazo',90);
/*!40000 ALTER TABLE `t_barrios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_cif`
--

DROP TABLE IF EXISTS `t_cif`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_cif` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombrecif` varchar(100) DEFAULT NULL,
  `comuna` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_cif`
--

LOCK TABLES `t_cif` WRITE;
/*!40000 ALTER TABLE `t_cif` DISABLE KEYS */;
INSERT INTO `t_cif` VALUES (1,'CIF POPULAR','1'),(2,'CIF SANTA CRUZ','2'),(3,'CIF MANRIQUE','3'),(4,'CIF ARANJUEZ','4'),(5,'CIF CASTILLA','5'),(6,'CIF DOCE DE OCTUBRE','6'),(7,'CIF ROBLEDO','7'),(8,'CIF VILLA HERMOSA','8'),(9,'CIF BUENOS AIRES','9'),(10,'CIF LA CANDELARIA','10'),(11,'CIF LAURELES ESTADIO','11'),(12,'CIF LA AMERICA','12'),(13,'CIF SAN JAVIER','13'),(14,'CIF EL POBLADO','14'),(15,'CIF GUAYABAL','15'),(16,'CIF BELEN','16'),(17,'CIF SAN SEBASTIAN DE PALMITAS','50'),(18,'CIF SAN CRISTOBAL','60'),(19,'CIF ALTAVISTA','70'),(20,'CIF SAN ANTONIO DE PRADO','80'),(21,'CIF SANTA ELENA','90');
/*!40000 ALTER TABLE `t_cif` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_comunas`
--

DROP TABLE IF EXISTS `t_comunas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_comunas` (
  `codigo` int(11) NOT NULL DEFAULT 0,
  `comuna` varchar(53) DEFAULT NULL,
  `nbarrios` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_comunas`
--

LOCK TABLES `t_comunas` WRITE;
/*!40000 ALTER TABLE `t_comunas` DISABLE KEYS */;
INSERT INTO `t_comunas` VALUES (1,'1 Popular',0),(2,'2 Santa Cruz',0),(3,'3 Manrique',12),(4,'4 Aranjuez',11),(5,'5 Castilla',15),(6,'6 Doce de Octubre',17),(7,'7 Robledo',19),(8,'8 Villa Hermosa',12),(9,'9 Buenos Aires',25),(10,'10 La Candelaria',19),(11,'11 Laureles Estadio',17),(12,'12 La América',20),(13,'13 San Javier',17),(14,'14 El Poblado',13),(15,'15 Guayabal',20),(16,'16 Belén',23),(17,'17 Ciudadela',11),(50,'50 Palmitas',21),(60,'60 San Cristóbal',0),(70,'70 Altavista',9),(80,'80 San Antonio de Prado',19),(90,'90 Santa Elena',9);
/*!40000 ALTER TABLE `t_comunas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_estacionestado`
--

DROP TABLE IF EXISTS `t_estacionestado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_estacionestado` (
  `folio` int(11) DEFAULT NULL,
  `idestacion` int(11) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `intermedia` varchar(45) DEFAULT NULL,
  `fecharegistro` varchar(45) DEFAULT NULL,
  `sincro` varchar(45) DEFAULT NULL,
  `fechasincro` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_estacionestado`
--

LOCK TABLES `t_estacionestado` WRITE;
/*!40000 ALTER TABLE `t_estacionestado` DISABLE KEYS */;
INSERT INTO `t_estacionestado` VALUES (7,11,'2','0','2015-09-25 23:07:43','3','2023-12-07 18:25:00'),(113385,10,'2','0','2022-08-27 15:40:20','3','2023-12-07 18:25:00'),(113385,12,'2','0','2023-04-05 09:41:26','3','2023-12-07 18:25:00'),(113385,21,'2','0','2023-05-22 12:18:03','3','2023-12-07 18:25:00'),(113385,22,'2','0','2023-07-20 10:17:55','3','2023-12-07 18:25:00'),(138986,10,'2','0','2021-05-03 14:41:42','3','2023-12-07 18:25:00'),(138986,11,'2','0','2021-06-02 16:37:45','3','2023-12-07 18:25:00'),(138986,12,'2','0','2022-05-23 15:05:09','3','2023-12-07 18:25:00'),(138986,21,'2','0','2023-06-24 13:54:43','3','2023-12-07 18:25:00'),(138986,22,'2','0','2023-07-29 11:21:14','3','2023-12-07 18:25:00'),(138986,23,'2','0','2023-09-04 15:10:13','3','2023-12-07 18:25:00'),(138986,24,'2','0','2023-10-06 14:53:06','3','2023-12-07 18:25:00'),(139880,10,'2','0','2018-03-06 22:15:10','3','2023-12-07 18:25:00'),(139880,11,'2','0','2022-04-27 11:51:51','3','2023-12-07 18:25:00'),(139880,12,'2','0','2022-06-04 16:50:13','3','2023-12-07 18:25:00'),(139880,21,'2','0','2023-03-22 14:44:30','3','2023-12-07 18:25:00'),(139880,22,'2','0','2023-04-27 13:30:54','3','2023-12-07 18:25:00'),(139880,23,'2','0','2023-06-06 13:15:12','3','2023-12-07 18:25:00'),(139880,24,'2','0','2023-07-14 17:53:07','3','2023-12-07 18:25:00'),(139880,25,'2','0','2023-08-18 13:04:48','3','2023-12-07 18:25:00'),(139880,26,'2','0','2023-09-22 16:10:10','3','2023-12-07 18:25:00'),(139880,27,'2','0','2023-10-30 14:20:15','3','2023-12-07 18:25:00'),(155469,10,'2','0','2019-10-29 10:27:29','3','2023-12-07 18:25:00'),(155469,11,'2','0','2019-12-19 13:31:51','3','2023-12-07 18:25:00'),(155469,12,'2','0','2020-02-11 13:14:02','3','2023-12-07 18:25:00'),(155469,21,'2','0','2020-12-09 09:15:22','3','2023-12-07 18:25:00'),(155469,22,'2','0','2021-04-14 14:29:22','3','2023-12-07 18:25:00'),(155469,23,'2','0','2021-05-26 10:04:56','3','2023-12-07 18:25:00'),(155469,24,'2','0','2021-07-02 15:03:24','3','2023-12-07 18:25:00'),(155469,25,'2','0','2021-12-21 13:45:49','3','2023-12-07 18:25:00'),(155469,26,'2','0','2023-05-09 10:35:23','3','2023-12-07 18:25:00'),(155469,27,'2','0','2023-07-25 11:39:10','3','2023-12-07 18:25:00'),(155469,28,'2','0','2023-09-12 12:13:19','3','2023-12-07 18:25:00'),(157542,10,'2','0','2019-10-31 11:35:54','3','2023-12-07 18:25:00'),(157542,11,'2','0','2021-05-06 14:58:21','3','2023-12-07 18:25:00'),(157542,12,'2','0','2021-11-18 14:35:12','3','2023-12-07 18:25:00'),(157542,21,'2','0','2021-12-20 20:58:27','3','2023-12-07 18:25:00'),(159688,10,'2','0','2019-11-13 13:14:02','3','2023-12-07 18:25:00'),(159688,11,'2','0','2020-01-17 09:25:05','3','2023-12-07 18:25:00'),(159688,12,'2','0','2021-05-03 17:29:23','3','2023-12-07 18:25:00'),(159688,21,'2','0','2021-06-15 20:05:15','3','2023-12-07 18:25:00'),(159688,22,'2','0','2021-07-17 19:11:24','3','2023-12-07 18:25:00'),(159688,23,'2','0','2022-03-21 20:47:51','3','2023-12-07 18:25:00'),(159688,24,'2','0','2023-04-23 11:51:52','3','2023-12-07 18:25:00'),(159688,25,'2','0','2023-07-02 11:47:57','3','2023-12-07 18:25:00'),(159688,26,'2','0','2023-08-27 11:42:14','3','2023-12-07 18:25:00'),(161273,10,'2','0','2021-07-30 10:36:41','3','2023-12-07 18:25:00'),(161273,11,'2','0','2022-03-22 19:55:22','3','2023-12-07 18:25:00'),(161273,12,'2','0','2022-05-26 09:40:13','3','2023-12-07 18:25:00'),(161273,21,'2','0','2022-07-23 18:49:15','3','2023-12-07 18:25:00'),(161273,22,'2','0','2022-08-30 16:42:12','3','2023-12-07 18:25:00'),(161273,23,'2','0','2022-10-27 20:16:23','3','2023-12-07 18:25:00'),(161273,24,'2','0','2022-11-30 20:25:35','3','2023-12-07 18:25:00'),(161273,25,'2','0','2023-07-16 11:25:54','3','2023-12-07 18:25:00'),(161274,10,'2','0','2021-07-30 09:08:17','3','2023-12-07 18:25:00'),(161274,11,'2','0','2022-03-27 14:01:23','3','2023-12-07 18:25:00'),(161274,12,'2','0','2022-07-15 12:08:26','3','2023-12-07 18:25:00'),(161274,21,'2','0','2022-09-15 13:42:00','3','2023-12-07 18:25:00'),(161274,22,'2','0','2022-11-11 17:04:43','3','2023-12-07 18:25:00'),(161274,23,'2','0','2023-05-19 12:31:11','3','2023-12-07 18:25:00'),(161274,24,'2','0','2023-06-21 12:42:06','3','2023-12-07 18:25:00'),(161274,25,'2','0','2023-07-26 09:51:43','3','2023-12-07 18:25:00'),(161274,26,'2','0','2023-08-29 14:44:00','3','2023-12-07 18:25:00'),(161274,27,'2','0','2023-10-02 10:47:03','3','2023-12-07 18:25:00'),(161274,28,'2','0','2023-11-09 10:35:28','3','2023-12-07 18:25:00'),(402781,10,'2','0','2022-02-27 16:46:17','3','2023-12-07 18:25:00'),(402781,11,'2','0','2022-03-27 15:20:41','3','2023-12-07 18:25:00'),(402781,12,'2','0','2022-07-15 13:37:14','3','2023-12-07 18:25:00'),(402781,21,'2','0','2022-08-17 11:13:26','3','2023-12-07 18:25:00'),(402781,22,'2','0','2022-09-19 13:34:09','3','2023-12-07 18:25:00'),(402781,23,'2','0','2022-11-14 13:13:29','3','2023-12-07 18:25:00'),(402781,24,'2','0','2023-05-18 15:20:14','3','2023-12-07 18:25:00'),(402781,25,'2','0','2023-07-06 16:07:29','3','2023-12-07 18:25:00'),(402781,26,'2','1','2023-08-14 18:14:31','3','2023-12-07 18:25:00'),(402781,81,'2','0','2023-09-29 15:51:16','3','2023-12-07 18:25:00'),(407769,10,'2','0','2023-07-04 10:45:17','3','2023-12-07 18:25:00'),(407769,11,'2','0','2023-08-12 10:31:08','3','2023-12-07 18:25:00'),(407769,12,'2','0','2023-09-18 15:34:07','3','2023-12-07 18:25:00'),(407769,21,'2','0','2023-10-21 10:27:31','3','2023-12-07 18:25:00'),(407769,22,'2','0','2023-11-25 09:28:21','3','2023-12-07 18:25:00'),(423121,10,'2','0','2021-07-12 10:04:26','3','2023-12-07 18:25:00'),(423121,11,'2','0','2023-05-19 09:55:39','3','2023-12-07 18:25:00'),(423121,12,'2','0','2023-06-28 11:23:14','3','2023-12-07 18:25:00'),(423121,21,'2','0','2023-07-31 12:56:30','3','2023-12-07 18:25:00'),(423121,22,'2','0','2023-09-12 13:52:45','3','2023-12-07 18:25:00'),(502192,1,'2','0','2020-09-30 10:24:55','3','2023-12-07 18:25:00'),(502192,10,'2','0','2020-11-05 11:46:14','3','2023-12-07 18:25:00'),(502192,11,'2','0','2020-12-04 10:57:04','3','2023-12-07 18:25:00'),(502192,12,'2','0','2021-04-19 14:15:58','3','2023-12-07 18:25:00'),(502192,21,'2','0','2021-05-28 14:06:31','3','2023-12-07 18:25:00'),(502192,22,'2','0','2021-07-03 00:01:57','3','2023-12-07 18:25:00'),(502192,23,'2','0','2022-09-13 16:12:36','3','2023-12-07 18:25:00'),(502192,24,'2','0','2023-06-30 10:49:24','3','2023-12-07 18:25:00'),(502192,25,'2','0','2023-08-04 16:06:05','3','2023-12-07 18:25:00'),(502192,26,'2','0','2023-09-06 17:03:59','3','2023-12-07 18:25:00'),(502192,27,'2','0','2023-10-09 16:12:02','3','2023-12-07 18:25:00'),(502192,28,'2','0','2023-11-20 18:09:31','3','2023-12-07 18:25:00'),(505062,10,'2','0','2021-04-19 16:37:14','3','2023-12-07 18:25:00'),(505062,11,'2','0','2021-06-12 19:30:05','3','2023-12-07 18:25:00'),(505062,12,'2','0','2021-07-16 13:17:12','3','2023-12-07 18:25:00'),(505062,21,'2','0','2022-02-23 14:10:50','3','2023-12-07 18:25:00'),(505062,22,'2','0','2022-06-20 13:47:39','3','2023-12-07 18:25:00'),(505062,23,'2','0','2022-08-05 16:55:10','3','2023-12-07 18:25:00'),(505062,24,'2','0','2022-09-16 12:37:15','3','2023-12-07 18:25:00'),(505062,25,'2','0','2022-10-28 16:16:05','3','2023-12-07 18:25:00'),(506594,10,'2','0','2021-05-27 10:07:09','3','2023-12-07 18:25:00'),(506594,11,'2','0','2021-07-14 16:01:11','3','2023-12-07 18:25:00'),(506594,12,'2','0','2021-12-19 23:20:59','3','2023-12-07 18:25:00'),(506594,21,'2','0','2022-02-26 17:37:15','3','2023-12-07 18:25:00'),(506594,22,'2','0','2022-03-27 13:46:56','3','2023-12-07 18:25:00'),(506594,23,'2','0','2022-05-04 15:27:26','3','2023-12-07 18:25:00'),(506594,24,'2','0','2022-06-11 15:54:07','3','2023-12-07 18:25:00'),(506594,25,'2','0','2023-03-21 14:04:07','3','2023-12-07 18:25:00'),(506594,26,'2','0','2023-05-01 12:41:16','3','2023-12-07 18:25:00'),(506594,27,'2','0','2023-07-02 13:35:06','3','2023-12-07 18:25:00'),(506594,28,'2','0','2023-08-13 14:14:36','3','2023-12-07 18:25:00'),(506594,90,'2','0','2023-10-07 11:25:56','3','2023-12-07 18:25:00'),(506873,10,'2','0','2021-06-02 09:33:14','3','2023-12-07 18:25:00'),(506873,11,'2','0','2021-07-22 10:22:43','3','2023-12-07 18:25:00'),(506873,12,'2','0','2021-11-23 07:58:04','3','2023-12-07 18:25:00'),(506873,21,'2','0','2022-02-28 19:17:29','3','2023-12-07 18:25:00'),(506873,22,'2','0','2022-03-28 17:33:43','3','2023-12-07 18:25:00'),(506873,23,'2','0','2022-05-23 19:05:46','3','2023-12-07 18:25:00'),(506873,24,'2','0','2022-08-12 16:22:24','3','2023-12-07 18:25:00'),(506873,25,'2','0','2022-09-14 15:23:51','3','2023-12-07 18:25:00'),(506873,26,'2','0','2022-10-27 15:20:22','3','2023-12-07 18:25:00'),(508963,10,'2','0','2021-11-23 15:00:35','3','2023-12-07 18:25:00'),(508963,11,'2','0','2021-12-23 12:29:16','3','2023-12-07 18:25:00'),(508963,12,'2','0','2022-03-10 17:26:12','3','2023-12-07 18:25:00'),(508963,21,'2','0','2022-05-11 16:35:06','3','2023-12-07 18:25:00'),(508963,22,'2','0','2022-07-28 16:15:35','3','2023-12-07 18:25:00'),(508963,23,'2','0','2022-09-06 16:44:52','3','2023-12-07 18:25:00'),(508963,24,'2','0','2022-10-07 14:54:31','3','2023-12-07 18:25:00'),(508963,25,'2','0','2022-11-08 15:04:48','3','2023-12-07 18:25:00'),(508963,26,'2','0','2023-04-11 16:34:03','3','2023-12-07 18:25:00'),(508963,27,'2','0','2023-06-13 18:20:14','3','2023-12-07 18:25:00'),(508963,28,'2','0','2023-08-02 16:46:46','3','2023-12-07 18:25:00'),(508963,90,'2','0','2023-11-02 16:08:50','3','2023-12-07 18:25:00'),(511231,10,'2','0','2021-06-18 19:21:12','3','2023-12-07 18:25:00'),(511231,11,'2','0','2021-07-15 17:49:49','3','2023-12-07 18:25:00'),(511231,12,'2','0','2022-02-19 18:04:08','3','2023-12-07 18:25:00'),(511231,21,'2','0','2022-03-26 15:40:37','3','2023-12-07 18:25:00'),(511231,22,'2','0','2022-10-26 20:22:37','3','2023-12-07 18:25:00'),(511231,23,'2','0','2023-06-21 11:17:55','3','2023-12-07 18:25:00'),(511231,24,'2','0','2023-08-04 17:46:49','3','2023-12-07 18:25:00'),(511231,25,'2','0','2023-09-11 14:33:57','3','2023-12-07 18:25:00'),(511231,26,'2','0','2023-10-30 16:27:56','3','2023-12-07 18:25:00'),(511256,10,'2','0','2021-06-22 13:31:13','3','2023-12-07 18:25:00'),(511256,11,'2','0','2022-08-19 12:36:30','3','2023-12-07 18:25:00'),(511256,12,'2','0','2022-11-20 13:10:09','3','2023-12-07 18:25:00'),(511256,21,'2','0','2023-11-22 11:17:13','3','2023-12-07 18:25:00'),(513756,10,'2','0','2022-03-02 16:54:02','3','2023-12-07 18:25:00'),(513756,11,'2','0','2022-04-08 12:16:45','3','2023-12-07 18:25:00'),(513756,12,'2','0','2022-05-21 11:08:21','3','2023-12-07 18:25:00'),(513756,21,'2','0','2022-09-02 16:29:53','3','2023-12-07 18:25:00'),(513756,22,'2','0','2022-10-07 09:31:11','3','2023-12-07 18:25:00'),(513756,23,'2','0','2022-11-09 16:34:37','3','2023-12-07 18:25:00'),(513756,24,'2','0','2023-09-07 17:54:27','3','2023-12-07 18:25:00'),(513756,25,'2','0','2023-10-25 10:59:15','3','2023-12-07 18:25:00'),(513841,10,'2','0','2021-07-22 10:16:00','3','2023-12-07 18:25:00'),(513841,11,'2','0','2022-03-23 15:38:16','3','2023-12-07 18:25:00'),(513841,12,'2','0','2022-04-29 16:12:21','3','2023-12-07 18:25:00'),(513841,21,'2','0','2022-08-24 15:37:48','3','2023-12-07 18:25:00'),(513841,22,'2','0','2022-09-28 12:19:32','3','2023-12-07 18:25:00'),(513841,23,'2','0','2022-11-01 12:53:33','3','2023-12-07 18:25:00'),(513841,24,'2','0','2023-04-27 10:56:39','3','2023-12-07 18:25:00'),(513841,25,'2','0','2023-07-31 17:26:53','3','2023-12-07 18:25:00'),(513841,26,'2','0','2023-09-15 16:19:47','3','2023-12-07 18:25:00'),(513841,27,'2','0','2023-11-03 11:35:03','3','2023-12-07 18:25:00'),(515079,10,'2','0','2022-02-16 12:11:11','3','2023-12-07 18:25:00'),(515079,11,'2','0','2022-03-17 13:47:06','3','2023-12-07 18:25:00'),(515079,12,'2','0','2022-05-17 12:36:15','3','2023-12-07 18:25:00'),(515079,21,'2','0','2022-06-22 18:50:41','3','2023-12-07 18:25:00'),(515079,22,'2','0','2022-08-26 15:03:37','3','2023-12-07 18:25:00'),(515079,23,'2','1','2022-10-11 20:25:22','3','2023-12-07 18:25:00'),(515079,24,'2','0','2023-05-10 10:08:11','3','2023-12-07 18:25:00'),(515079,25,'2','0','2023-06-14 11:00:03','3','2023-12-07 18:25:00'),(515079,26,'2','0','2023-07-17 14:30:20','3','2023-12-07 18:25:00'),(515079,81,'2','0','2023-08-18 15:32:48','3','2023-12-07 18:25:00'),(520539,10,'2','0','2022-09-24 19:09:22','3','2023-12-07 18:25:00'),(520539,11,'2','0','2023-06-23 14:55:36','3','2023-12-07 18:25:00'),(520539,12,'2','0','2023-08-02 14:00:36','3','2023-12-07 18:25:00'),(520539,21,'2','0','2023-09-06 15:16:37','3','2023-12-07 18:25:00'),(520539,22,'2','0','2023-11-01 14:14:33','3','2023-12-07 18:25:00'),(520542,10,'2','0','2022-09-19 09:16:25','3','2023-12-07 18:25:00'),(520542,11,'2','0','2023-04-11 12:38:43','3','2023-12-07 18:25:00'),(520542,12,'2','0','2023-06-05 12:41:17','3','2023-12-07 18:25:00'),(520542,21,'2','0','2023-08-03 15:35:49','3','2023-12-07 18:25:00'),(520542,22,'2','0','2023-09-15 12:23:03','3','2023-12-07 18:25:00'),(520542,23,'2','0','2023-10-25 12:51:59','3','2023-12-07 18:25:00'),(520544,10,'2','0','2022-09-24 19:23:12','3','2023-12-07 18:25:00'),(520544,11,'2','0','2023-05-05 09:16:37','3','2023-12-07 18:25:00'),(520544,12,'2','0','2023-06-21 09:30:20','3','2023-12-07 18:25:00'),(520544,21,'2','0','2023-07-27 09:25:02','3','2023-12-07 18:25:00'),(520544,22,'2','0','2023-09-10 10:38:12','3','2023-12-07 18:25:00'),(520544,23,'2','0','2023-10-14 09:09:16','3','2023-12-07 18:25:00'),(520544,24,'2','0','2023-11-18 09:02:10','3','2023-12-07 18:25:00'),(520549,10,'2','0','2022-09-25 19:48:30','3','2023-12-07 18:25:00'),(520549,11,'2','0','2023-05-09 12:35:12','3','2023-12-07 18:25:00'),(520549,12,'2','0','2023-06-16 14:05:17','3','2023-12-07 18:25:00'),(520549,21,'2','0','2023-07-29 09:48:19','3','2023-12-07 18:25:00'),(520549,22,'2','0','2023-08-30 14:05:15','3','2023-12-07 18:25:00'),(520549,23,'2','0','2023-10-06 13:02:54','3','2023-12-07 18:25:00'),(520549,24,'2','0','2023-11-10 16:26:34','3','2023-12-07 18:25:00'),(520551,10,'2','0','2022-08-20 12:59:53','3','2023-12-07 18:25:00'),(520551,11,'2','0','2023-04-19 14:25:24','3','2023-12-07 18:25:00'),(520551,12,'2','0','2023-06-02 13:49:02','3','2023-12-07 18:25:00'),(520551,21,'2','0','2023-07-26 11:30:47','3','2023-12-07 18:25:00'),(520551,22,'2','0','2023-09-07 11:17:52','3','2023-12-07 18:25:00'),(520551,23,'2','0','2023-10-18 11:50:34','3','2023-12-07 18:25:00'),(520711,10,'2','0','2022-08-08 11:44:35','3','2023-12-07 18:25:00'),(520711,11,'2','0','2022-09-23 11:42:35','3','2023-12-07 18:25:00'),(520711,12,'2','0','2022-10-23 15:08:19','3','2023-12-07 18:25:00'),(520711,21,'2','0','2022-11-23 16:27:33','3','2023-12-07 18:25:00'),(520711,22,'2','0','2023-03-27 12:19:28','3','2023-12-07 18:25:00'),(520711,23,'2','0','2023-05-02 13:43:57','3','2023-12-07 18:25:00'),(520711,24,'2','0','2023-06-06 11:31:07','3','2023-12-07 18:25:00'),(520711,25,'2','0','2023-07-09 14:10:00','3','2023-12-07 18:25:00'),(520711,26,'2','0','2023-08-14 14:43:42','3','2023-12-07 18:25:00'),(520711,27,'2','0','2023-09-15 14:48:13','3','2023-12-07 18:25:00'),(520711,28,'2','0','2023-10-18 15:34:02','3','2023-12-07 18:25:00'),(520711,90,'2','0','2023-11-18 16:44:19','3','2023-12-07 18:25:00'),(520712,10,'2','0','2022-08-08 14:57:59','3','2023-12-07 18:25:00'),(520712,11,'2','0','2022-09-23 18:09:38','3','2023-12-07 18:25:00'),(520712,12,'2','0','2022-10-25 13:28:39','3','2023-12-07 18:25:00'),(520712,21,'2','0','2022-11-25 18:53:25','3','2023-12-07 18:25:00'),(520712,22,'2','0','2023-04-03 11:55:15','3','2023-12-07 18:25:00'),(520712,23,'2','0','2023-05-17 11:50:50','3','2023-12-07 18:25:00'),(520712,24,'2','0','2023-06-22 13:52:31','3','2023-12-07 18:25:00'),(520712,25,'2','0','2023-08-02 12:29:53','3','2023-12-07 18:25:00'),(520712,26,'2','0','2023-09-06 13:12:14','3','2023-12-07 18:25:00'),(520712,27,'2','0','2023-10-09 18:32:14','3','2023-12-07 18:25:00'),(520712,28,'2','0','2023-11-22 13:01:44','3','2023-12-07 18:25:00'),(520716,10,'2','0','2022-08-09 13:23:46','3','2023-12-07 18:25:00'),(520716,11,'2','0','2022-09-22 19:43:02','3','2023-12-07 18:25:00'),(520716,12,'2','0','2022-10-25 15:13:00','3','2023-12-07 18:25:00'),(520716,21,'2','0','2022-11-26 10:57:21','3','2023-12-07 18:25:00'),(520716,22,'2','0','2023-03-27 15:22:18','3','2023-12-07 18:25:00'),(520716,23,'2','0','2023-05-02 11:59:35','3','2023-12-07 18:25:00'),(520716,24,'2','0','2023-06-09 10:33:36','3','2023-12-07 18:25:00'),(520716,25,'2','0','2023-07-14 10:52:23','3','2023-12-07 18:25:00'),(520716,26,'2','0','2023-08-17 11:03:33','3','2023-12-07 18:25:00'),(520716,27,'2','0','2023-09-25 11:27:05','3','2023-12-07 18:25:00'),(520716,28,'2','0','2023-10-28 11:49:50','3','2023-12-07 18:25:00'),(520717,10,'2','0','2022-09-25 19:16:20','3','2023-12-07 18:25:00'),(520717,11,'2','0','2023-06-06 15:59:23','3','2023-12-07 18:25:00'),(520717,12,'2','0','2023-09-01 17:12:06','3','2023-12-07 18:25:00'),(520717,21,'2','0','2023-10-26 16:28:21','3','2023-12-07 18:25:00'),(520721,10,'2','0','2022-09-19 08:43:16','3','2023-12-07 18:25:00'),(520721,11,'2','0','2023-04-21 14:13:27','3','2023-12-07 18:25:00'),(520721,12,'2','0','2023-08-03 12:47:47','3','2023-12-07 18:25:00'),(520721,21,'2','0','2023-09-14 14:02:30','3','2023-12-07 18:25:00'),(520721,22,'2','0','2023-11-09 16:26:26','3','2023-12-07 18:25:00'),(520728,10,'2','0','2022-08-13 14:55:26','3','2023-12-07 18:25:00'),(520728,11,'2','0','2023-04-26 16:34:28','3','2023-12-07 18:25:00'),(520728,12,'2','0','2023-06-20 12:48:25','3','2023-12-07 18:25:00'),(520728,21,'2','0','2023-07-28 12:48:51','3','2023-12-07 18:25:00'),(520728,22,'2','0','2023-08-31 14:11:36','3','2023-12-07 18:25:00'),(520728,23,'2','0','2023-10-09 14:39:58','3','2023-12-07 18:25:00'),(520728,24,'2','0','2023-11-16 15:27:05','3','2023-12-07 18:25:00'),(520729,10,'2','0','2022-08-17 09:09:51','3','2023-12-07 18:25:00'),(520729,11,'2','0','2022-09-22 15:02:14','3','2023-12-07 18:25:00'),(520729,12,'2','0','2022-10-23 16:25:21','3','2023-12-07 18:25:00'),(520729,21,'2','0','2022-11-23 17:10:04','3','2023-12-07 18:25:00'),(520729,22,'2','0','2023-04-19 15:49:06','3','2023-12-07 18:25:00'),(520729,23,'2','0','2023-05-20 16:01:32','3','2023-12-07 18:25:00'),(520729,24,'2','0','2023-06-28 15:41:29','3','2023-12-07 18:25:00'),(520729,25,'2','0','2023-07-31 14:20:25','3','2023-12-07 18:25:00'),(520729,26,'2','0','2023-08-31 16:13:42','3','2023-12-07 18:25:00'),(520729,27,'2','0','2023-10-05 13:06:56','3','2023-12-07 18:25:00'),(520729,28,'2','0','2023-11-15 16:28:10','3','2023-12-07 18:25:00'),(520730,10,'2','0','2022-09-19 08:55:37','3','2023-12-07 18:25:00'),(520730,11,'2','0','2023-05-06 10:44:44','3','2023-12-07 18:25:00'),(520730,12,'2','0','2023-06-09 13:47:21','3','2023-12-07 18:25:00'),(520730,21,'2','0','2023-07-17 17:17:53','3','2023-12-07 18:25:00'),(520730,22,'2','0','2023-08-23 13:49:43','3','2023-12-07 18:25:00'),(520730,23,'2','0','2023-09-25 14:20:16','3','2023-12-07 18:25:00'),(520730,24,'2','0','2023-11-04 12:03:23','3','2023-12-07 18:25:00'),(524224,10,'2','0','2022-11-02 10:19:14','3','2023-12-07 18:25:00'),(524224,11,'2','0','2023-04-04 11:24:13','3','2023-12-07 18:25:00'),(524224,12,'2','0','2023-05-24 13:11:34','3','2023-12-07 18:25:00'),(524224,21,'2','0','2023-06-29 11:15:22','3','2023-12-07 18:25:00'),(524224,22,'2','0','2023-08-03 11:21:57','3','2023-12-07 18:25:00'),(524224,23,'2','0','2023-09-09 13:24:12','3','2023-12-07 18:25:00'),(524224,24,'2','0','2023-10-14 12:02:34','3','2023-12-07 18:25:00'),(524224,25,'2','0','2023-11-16 11:01:48','3','2023-12-07 18:25:00'),(524227,10,'2','0','2022-12-01 12:25:29','3','2023-12-07 18:25:00'),(524227,11,'2','0','2023-03-30 15:26:40','3','2023-12-07 18:25:00'),(524227,12,'2','0','2023-06-17 10:28:20','3','2023-12-07 18:25:00'),(524227,21,'2','0','2023-07-28 11:10:00','3','2023-12-07 18:25:00'),(524227,22,'2','0','2023-08-31 17:59:40','3','2023-12-07 18:25:00'),(524227,23,'2','0','2023-10-06 18:34:29','3','2023-12-07 18:25:00'),(524227,24,'2','0','2023-11-20 13:53:01','3','2023-12-07 18:25:00'),(529528,10,'2','0','2023-07-04 13:31:00','3','2023-12-07 18:25:00'),(529528,11,'2','0','2023-08-09 11:15:49','3','2023-12-07 18:25:00'),(529528,12,'2','0','2023-09-13 16:48:56','3','2023-12-07 18:25:00'),(529528,21,'2','0','2023-10-20 14:02:40','3','2023-12-07 18:25:00'),(529529,10,'2','0','2023-07-12 13:57:04','3','2023-12-07 18:25:00'),(529529,11,'2','0','2023-09-06 11:28:42','3','2023-12-07 18:25:00'),(529530,10,'2','0','2023-06-30 13:13:41','3','2023-12-07 18:25:00'),(529530,11,'2','0','2023-08-04 14:46:35','3','2023-12-07 18:25:00'),(529530,12,'2','0','2023-09-26 09:27:14','3','2023-12-07 18:25:00'),(529532,10,'2','0','2023-07-04 14:58:43','3','2023-12-07 18:25:00'),(529532,11,'2','0','2023-08-25 11:47:04','3','2023-12-07 18:25:00'),(529532,12,'2','0','2023-09-29 18:12:22','3','2023-12-07 18:25:00'),(529532,21,'2','0','2023-11-08 12:07:22','3','2023-12-07 18:25:00'),(529798,10,'2','0','2023-09-08 15:37:08','3','2023-12-07 18:25:00'),(529798,11,'2','0','2023-10-25 16:17:21','3','2023-12-07 18:25:00'),(529799,10,'2','0','2023-08-12 12:45:52','3','2023-12-07 18:25:00'),(529799,11,'2','0','2023-10-21 12:57:14','3','2023-12-07 18:25:00'),(529800,10,'2','0','2023-07-05 14:41:03','3','2023-12-07 18:25:00'),(529800,11,'2','0','2023-08-17 17:25:19','3','2023-12-07 18:25:00'),(529801,10,'2','0','2023-08-10 12:43:48','3','2023-12-07 18:25:00'),(529801,11,'2','0','2023-09-16 16:48:00','3','2023-12-07 18:25:00'),(529801,12,'2','0','2023-10-19 11:20:17','3','2023-12-07 18:25:00'),(529801,21,'2','0','2023-11-22 15:24:44','3','2023-12-07 18:25:00'),(529802,10,'2','0','2023-08-23 15:14:07','3','2023-12-07 18:25:00'),(529802,11,'2','0','2023-09-28 17:47:05','3','2023-12-07 18:25:00'),(529802,12,'2','0','2023-10-30 19:15:12','3','2023-12-07 18:25:00'),(529803,10,'2','0','2023-08-10 11:14:23','3','2023-12-07 18:25:00'),(529803,11,'2','0','2023-09-14 12:19:49','3','2023-12-07 18:25:00'),(529803,12,'2','0','2023-10-18 13:40:21','3','2023-12-07 18:25:00'),(529803,21,'2','0','2023-11-25 10:59:26','3','2023-12-07 18:25:00'),(529804,10,'2','0','2023-07-29 14:20:23','3','2023-12-07 18:25:00'),(529804,11,'2','0','2023-08-30 12:49:01','3','2023-12-07 18:25:00'),(529804,12,'2','0','2023-10-03 13:48:17','3','2023-12-07 18:25:00'),(529804,21,'2','0','2023-11-04 13:52:06','3','2023-12-07 18:25:00'),(529805,10,'2','0','2023-08-16 10:18:32','3','2023-12-07 18:25:00'),(529805,11,'2','0','2023-09-20 10:14:36','3','2023-12-07 18:25:00'),(529805,12,'2','0','2023-10-25 09:32:26','3','2023-12-07 18:25:00'),(529806,10,'2','0','2023-07-14 12:26:04','3','2023-12-07 18:25:00'),(529806,11,'2','0','2023-08-23 12:33:38','3','2023-12-07 18:25:00'),(529806,12,'2','0','2023-09-27 14:08:04','3','2023-12-07 18:25:00'),(529806,21,'2','0','2023-11-02 13:14:57','3','2023-12-07 18:25:00'),(529807,10,'2','0','2023-08-16 15:59:30','3','2023-12-07 18:25:00'),(529807,11,'2','0','2023-09-20 14:51:48','3','2023-12-07 18:25:00'),(529807,12,'2','0','2023-10-26 11:01:04','3','2023-12-07 18:25:00'),(529808,10,'2','0','2023-08-16 12:49:12','3','2023-12-07 18:25:00'),(529808,11,'2','0','2023-09-20 11:43:26','3','2023-12-07 18:25:00'),(529808,12,'2','0','2023-10-27 10:19:55','3','2023-12-07 18:25:00'),(529809,10,'2','0','2023-09-01 13:51:21','3','2023-12-07 18:25:00'),(529809,11,'2','0','2023-10-04 14:51:36','3','2023-12-07 18:25:00'),(529809,12,'2','0','2023-11-09 13:00:18','3','2023-12-07 18:25:00'),(529810,10,'2','0','2023-08-30 15:42:14','3','2023-12-07 18:25:00'),(529810,11,'2','0','2023-10-05 10:10:57','3','2023-12-07 18:25:00'),(529810,12,'2','0','2023-11-15 14:27:31','3','2023-12-07 18:25:00'),(529812,10,'2','0','2023-09-09 10:27:14','3','2023-12-07 18:25:00'),(529812,11,'2','0','2023-10-13 10:26:53','3','2023-12-07 18:25:00'),(529812,12,'2','0','2023-11-18 10:25:54','3','2023-12-07 18:25:00'),(529813,10,'2','0','2023-08-30 18:30:52','3','2023-12-07 18:25:00'),(529813,11,'2','0','2023-10-04 13:25:53','3','2023-12-07 18:25:00'),(529813,12,'2','0','2023-11-10 11:30:09','3','2023-12-07 18:25:00'),(529814,10,'2','0','2023-09-09 11:49:21','3','2023-12-07 18:25:00'),(529814,11,'2','0','2023-10-14 14:13:23','3','2023-12-07 18:25:00'),(529814,12,'2','0','2023-11-18 11:44:28','3','2023-12-07 18:25:00'),(529815,10,'2','0','2023-08-19 11:34:56','3','2023-12-07 18:25:00'),(529815,11,'2','0','2023-09-27 11:25:08','3','2023-12-07 18:25:00'),(529815,12,'2','0','2023-11-01 15:16:23','3','2023-12-07 18:25:00'),(529816,10,'2','0','2023-07-08 12:44:26','3','2023-12-07 18:25:00'),(529816,11,'2','0','2023-08-26 09:41:56','3','2023-12-07 18:25:00'),(529816,12,'2','0','2023-10-07 13:32:03','3','2023-12-07 18:25:00'),(529817,10,'2','0','2023-08-16 14:17:28','3','2023-12-07 18:25:00'),(529817,11,'2','0','2023-09-20 13:26:57','3','2023-12-07 18:25:00'),(529817,12,'2','0','2023-10-25 14:02:23','3','2023-12-07 18:25:00'),(529819,10,'2','0','2023-08-10 10:02:13','3','2023-12-07 18:25:00'),(529819,11,'2','0','2023-09-14 10:44:25','3','2023-12-07 18:25:00'),(529819,12,'2','0','2023-10-18 09:09:10','3','2023-12-07 18:25:00'),(529819,21,'2','0','2023-11-22 09:55:58','3','2023-12-07 18:25:00'),(529820,10,'2','0','2023-07-13 16:06:49','3','2023-12-07 18:25:00'),(529820,11,'2','0','2023-08-23 11:17:07','3','2023-12-07 18:25:00'),(529820,12,'2','0','2023-09-29 12:23:36','3','2023-12-07 18:25:00'),(529820,21,'2','0','2023-11-04 10:29:23','3','2023-12-07 18:25:00'),(529821,10,'2','0','2023-08-23 16:51:22','3','2023-12-07 18:25:00'),(529821,11,'2','0','2023-09-27 12:45:28','3','2023-12-07 18:25:00'),(529821,12,'2','0','2023-11-08 15:24:52','3','2023-12-07 18:25:00'),(529822,10,'2','0','2023-08-12 14:31:22','3','2023-12-07 18:25:00'),(529822,11,'2','0','2023-09-16 10:03:17','3','2023-12-07 18:25:00'),(529822,12,'2','0','2023-10-20 16:22:31','3','2023-12-07 18:25:00'),(529822,21,'2','0','2023-11-25 13:01:28','3','2023-12-07 18:25:00'),(529823,10,'2','0','2023-08-16 11:31:44','3','2023-12-07 18:25:00'),(529823,11,'2','0','2023-10-18 10:22:25','3','2023-12-07 18:25:00'),(529825,10,'2','0','2023-08-24 12:15:04','3','2023-12-07 18:25:00'),(529825,11,'2','0','2023-10-04 10:51:19','3','2023-12-07 18:25:00'),(529825,12,'2','0','2023-11-15 09:45:11','3','2023-12-07 18:25:00'),(529827,10,'2','0','2023-09-07 14:56:35','3','2023-12-07 18:25:00'),(529827,11,'2','0','2023-10-20 18:53:48','3','2023-12-07 18:25:00'),(529828,10,'2','0','2023-08-25 16:37:26','3','2023-12-07 18:25:00'),(529828,11,'2','0','2023-10-04 12:06:39','3','2023-12-07 18:25:00'),(529828,12,'2','0','2023-11-10 10:07:06','3','2023-12-07 18:25:00'),(529829,10,'2','0','2023-08-18 16:55:55','3','2023-12-07 18:25:00'),(529829,11,'2','0','2023-09-28 13:05:43','3','2023-12-07 18:25:00'),(529829,12,'2','0','2023-11-09 14:51:51','3','2023-12-07 18:25:00'),(529830,10,'2','0','2023-07-08 11:30:47','3','2023-12-07 18:25:00'),(529831,10,'2','0','2023-07-05 13:10:46','3','2023-12-07 18:25:00'),(529831,11,'2','0','2023-08-10 15:52:01','3','2023-12-07 18:25:00'),(529831,12,'2','0','2023-09-18 11:34:59','3','2023-12-07 18:25:00'),(529831,21,'2','0','2023-10-20 10:45:01','3','2023-12-07 18:25:00'),(529832,10,'2','0','2023-08-12 11:41:08','3','2023-12-07 18:25:00'),(529832,11,'2','0','2023-09-22 17:57:28','3','2023-12-07 18:25:00'),(529832,12,'2','0','2023-10-28 09:58:42','3','2023-12-07 18:25:00'),(529833,10,'2','0','2023-08-14 16:46:52','3','2023-12-07 18:25:00'),(529833,11,'2','0','2023-09-14 19:19:34','3','2023-12-07 18:25:00'),(529833,12,'2','0','2023-10-19 14:29:16','3','2023-12-07 18:25:00'),(529834,10,'2','0','2023-08-24 14:09:01','3','2023-12-07 18:25:00'),(529834,11,'2','0','2023-10-27 15:39:09','3','2023-12-07 18:25:00'),(529836,10,'2','0','2023-07-08 10:13:00','3','2023-12-07 18:25:00'),(529836,11,'2','0','2023-08-09 16:14:30','3','2023-12-07 18:25:00'),(529836,12,'2','0','2023-09-11 12:59:57','3','2023-12-07 18:25:00'),(529836,21,'2','0','2023-10-14 10:35:33','3','2023-12-07 18:25:00'),(529837,10,'2','0','2023-08-31 12:29:37','3','2023-12-07 18:25:00'),(529837,11,'2','0','2023-10-05 11:32:34','3','2023-12-07 18:25:00'),(529837,12,'2','0','2023-11-15 11:21:40','3','2023-12-07 18:25:00'),(529839,10,'2','0','2023-07-08 08:42:38','3','2023-12-07 18:25:00'),(529839,11,'2','0','2023-08-26 08:27:02','3','2023-12-07 18:25:00'),(529839,12,'2','0','2023-10-07 08:14:56','3','2023-12-07 18:25:00'),(529840,10,'2','0','2023-07-20 11:44:10','3','2023-12-07 18:25:00'),(529840,11,'2','0','2023-08-25 13:19:38','3','2023-12-07 18:25:00'),(529840,12,'2','0','2023-09-29 14:01:48','3','2023-12-07 18:25:00'),(529840,21,'2','0','2023-10-30 13:09:33','3','2023-12-07 18:25:00'),(529842,10,'2','0','2023-07-10 16:20:59','3','2023-12-07 18:25:00'),(529842,11,'2','0','2023-09-07 12:55:36','3','2023-12-07 18:25:00'),(529842,12,'2','0','2023-10-26 13:15:09','3','2023-12-07 18:25:00'),(530506,10,'2','0','2023-09-07 16:13:46','3','2023-12-07 18:25:00'),(530506,11,'2','0','2023-10-09 13:18:40','3','2023-12-07 18:25:00'),(530506,12,'2','0','2023-11-17 11:33:07','3','2023-12-07 18:25:00'),(531602,10,'2','0','2023-10-07 10:02:49','3','2023-12-07 18:25:00'),(531604,10,'2','0','2023-09-21 13:37:02','3','2023-12-07 18:25:00'),(531604,11,'2','0','2023-10-27 14:05:33','3','2023-12-07 18:25:00'),(531605,10,'2','0','2023-09-28 14:38:01','3','2023-12-07 18:25:00'),(531605,11,'2','0','2023-11-08 10:44:54','3','2023-12-07 18:25:00'),(531606,10,'2','0','2023-09-22 14:58:32','3','2023-12-07 18:25:00'),(531606,11,'2','0','2023-11-01 17:04:19','3','2023-12-07 18:25:00'),(531607,10,'2','0','2023-09-22 13:34:00','3','2023-12-07 18:25:00'),(531607,11,'2','0','2023-11-03 10:08:00','3','2023-12-07 18:25:00'),(531608,10,'2','0','2023-09-25 16:35:50','3','2023-12-07 18:25:00'),(531608,11,'2','0','2023-11-02 14:29:33','3','2023-12-07 18:25:00'),(532548,10,'2','0','2023-10-11 09:47:54','3','2023-12-07 18:25:00'),(532548,11,'2','0','2023-11-20 11:32:42','3','2023-12-07 18:25:00'),(532549,10,'2','0','2023-10-11 11:32:59','3','2023-12-07 18:25:00'),(532549,11,'2','0','2023-11-15 12:33:18','3','2023-12-07 18:25:00'),(532550,10,'2','0','2023-10-11 14:23:51','3','2023-12-07 18:25:00'),(532550,11,'2','0','2023-11-20 16:43:48','3','2023-12-07 18:25:00'),(532551,10,'2','0','2023-10-12 13:22:17','3','2023-12-07 18:25:00'),(532551,11,'2','0','2023-11-16 12:12:37','3','2023-12-07 18:25:00'),(532552,10,'2','0','2023-10-11 12:53:28','3','2023-12-07 18:25:00'),(532553,10,'2','0','2023-10-12 11:46:18','3','2023-12-07 18:25:00'),(532553,11,'2','0','2023-11-16 13:49:28','3','2023-12-07 18:25:00'),(532554,10,'2','0','2023-10-12 10:20:40','3','2023-12-07 18:25:00'),(532554,11,'2','0','2023-11-20 15:28:10','3','2023-12-07 18:25:00'),(532555,10,'2','0','2023-10-13 13:59:18','3','2023-12-07 18:25:00'),(532555,11,'2','0','2023-11-21 17:22:27','3','2023-12-07 18:25:00'),(532556,10,'2','0','2023-10-13 12:13:15','3','2023-12-07 18:25:00'),(532556,11,'2','0','2023-11-21 14:05:17','3','2023-12-07 18:25:00'),(532557,10,'2','0','2023-10-27 11:32:23','3','2023-12-07 18:25:00'),(533335,10,'2','0','2023-10-21 14:03:16','3','2023-12-07 18:25:00'),(533337,10,'2','0','2023-11-10 14:02:21','3','2023-12-07 18:25:00'),(7146495,10,'2','0','2023-09-23 12:19:44','3','2023-12-07 18:25:00'),(7146495,11,'2','0','2023-11-08 13:52:39','3','2023-12-07 18:25:00'),(7149222,10,'2','0','2023-09-01 15:22:04','3','2023-12-07 18:25:00'),(7149222,11,'2','0','2023-10-06 16:17:46','3','2023-12-07 18:25:00'),(7149222,12,'2','0','2023-11-10 12:53:44','3','2023-12-07 18:25:00'),(7181954,10,'2','0','2023-07-04 12:25:04','3','2023-12-07 18:25:00'),(7181954,11,'2','0','2023-08-09 12:48:07','3','2023-12-07 18:25:00'),(7181954,12,'2','0','2023-09-13 15:18:23','3','2023-12-07 18:25:00'),(7181954,21,'2','0','2023-10-19 13:07:25','3','2023-12-07 18:25:00'),(7181954,22,'2','0','2023-11-22 17:01:38','3','2023-12-07 18:25:00'),(100027164,10,'2','0','2023-09-08 13:43:30','3','2023-12-07 18:25:00'),(100027164,11,'2','0','2023-10-26 14:55:09','3','2023-12-07 18:25:00'),(100049170,10,'2','0','2023-07-05 16:30:56','3','2023-12-07 18:25:00'),(100049170,11,'2','0','2023-08-10 13:56:12','3','2023-12-07 18:25:00'),(100049170,12,'2','0','2023-09-18 12:59:25','3','2023-12-07 18:25:00'),(100049170,21,'2','0','2023-10-19 16:45:16','3','2023-12-07 18:25:00'),(100062607,10,'2','0','2023-07-29 12:30:13','3','2023-12-07 18:25:00'),(100062607,11,'2','0','2023-08-30 11:23:24','3','2023-12-07 18:25:00'),(100062607,12,'2','0','2023-10-03 15:31:42','3','2023-12-07 18:25:00'),(100062607,21,'2','0','2023-11-09 11:48:16','3','2023-12-07 18:25:00');
/*!40000 ALTER TABLE `t_estacionestado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_nombrevia`
--

DROP TABLE IF EXISTS `t_nombrevia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_nombrevia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_nombrevia`
--

LOCK TABLES `t_nombrevia` WRITE;
/*!40000 ALTER TABLE `t_nombrevia` DISABLE KEYS */;
INSERT INTO `t_nombrevia` VALUES (1,'SUR'),(2,'NORTE'),(3,'ESTE'),(4,'OESTE'),(5,'BIS');
/*!40000 ALTER TABLE `t_nombrevia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_paises`
--

DROP TABLE IF EXISTS `t_paises`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_paises` (
  `codigo` int(11) NOT NULL,
  `pais` varchar(65) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_paises`
--

LOCK TABLES `t_paises` WRITE;
/*!40000 ALTER TABLE `t_paises` DISABLE KEYS */;
INSERT INTO `t_paises` VALUES (101,'ALBANIA'),(102,'AUSTRIA'),(103,'BELGICA'),(104,'BULGARIA'),(106,'CHIPRE'),(107,'DINAMARCA'),(108,'ESPAÑA'),(109,'FINLANDIA'),(110,'FRANCIA'),(111,'GRECIA'),(112,'HUNGRIA'),(113,'IRLANDA'),(114,'ISLANDIA'),(115,'ITALIA'),(116,'LIECHTENSTEIN'),(117,'LUXEMBURGO'),(118,'MALTA'),(119,'MONACO'),(120,'NORUEGA'),(121,'PAISES BAJOS'),(122,'POLONIA'),(123,'PORTUGAL'),(124,'ANDORRA'),(125,'REINO UNIDO'),(126,'ALEMANIA'),(128,'RUMANIA'),(129,'SAN MARINO'),(130,'SANTA SEDE'),(131,'SUECIA'),(132,'SUIZA'),(135,'UCRANIA'),(136,'LETONIA'),(137,'MOLDAVIA'),(138,'BELARUS'),(139,'GEORGIA'),(141,'ESTONIA'),(142,'LITUANIA'),(143,'REPUBLICA CHECA'),(144,'REPUBLICA ESLOVACA'),(145,'BOSNIA Y HERZEGOVINA'),(146,'CROACIA'),(147,'ESLOVENIA'),(148,'ARMENIA'),(154,'RUSIA'),(156,'MACEDONIA '),(157,'SERBIA'),(158,'MONTENEGRO'),(170,'GUERNESEY'),(171,'SVALBARD Y JAN MAYEN'),(172,'ISLAS FEROE'),(173,'ISLA DE MAN'),(174,'GIBRALTAR'),(175,'ISLAS DEL CANAL'),(176,'JERSEY'),(177,'ISLAS ALAND'),(198,'OTROS PAISES O TERRITORIOS DE LA UNION EUROPEA'),(199,'OTROS PAISES O TERRITORIOS DEL RESTO DE EUROPA'),(201,'BURKINA FASO'),(202,'ANGOLA'),(203,'ARGELIA'),(204,'BENIN'),(205,'BOTSWANA'),(206,'BURUNDI'),(207,'CABO VERDE'),(208,'CAMERUN'),(209,'COMORES'),(210,'CONGO'),(211,'COSTA DE MARFIL'),(212,'DJIBOUTI'),(213,'EGIPTO'),(214,'ETIOPIA'),(215,'GABON'),(216,'GAMBIA'),(217,'GHANA'),(218,'GUINEA'),(219,'GUINEA-BISSAU'),(220,'GUINEA ECUATORIAL'),(221,'KENIA'),(222,'LESOTHO'),(223,'LIBERIA'),(224,'LIBIA'),(225,'MADAGASCAR'),(226,'MALAWI'),(227,'MALI'),(228,'MARRUECOS'),(229,'MAURICIO'),(230,'MAURITANIA'),(231,'MOZAMBIQUE'),(232,'NAMIBIA'),(233,'NIGER'),(234,'NIGERIA'),(235,'REPUBLICA CENTROAFRICANA'),(236,'SUDAFRICA'),(237,'RUANDA'),(238,'SANTO TOME Y PRINCIPE'),(239,'SENEGAL'),(240,'SEYCHELLES'),(241,'SIERRA LEONA'),(242,'SOMALIA'),(243,'SUDAN'),(244,'SWAZILANDIA'),(245,'TANZANIA'),(246,'CHAD'),(247,'TOGO'),(248,'TUNEZ'),(249,'UGANDA'),(250,'REP.DEMOCRATICA DEL CONGO'),(251,'ZAMBIA'),(252,'ZIMBABWE'),(253,'ERITREA'),(260,'SANTA HELENA'),(261,'REUNION'),(262,'MAYOTTE'),(263,'SAHARA OCCIDENTAL'),(299,'OTROS PAISES O TERRITORIOS DE AFRICA'),(301,'CANADA'),(302,'ESTADOS UNIDOS DE AMERICA'),(303,'MEXICO'),(310,'ANTIGUA Y BARBUDA'),(311,'BAHAMAS'),(312,'BARBADOS'),(313,'BELICE'),(314,'COSTA RICA'),(315,'CUBA'),(316,'DOMINICA'),(317,'EL SALVADOR'),(318,'GRANADA'),(319,'GUATEMALA'),(320,'HAITI'),(321,'HONDURAS'),(322,'JAMAICA'),(323,'NICARAGUA'),(324,'PANAMA'),(325,'SAN VICENTE Y LAS GRANADINAS'),(326,'REPUBLICA DOMINICANA'),(327,'TRINIDAD Y TOBAGO'),(328,'SANTA LUCIA'),(329,'SAN CRISTOBAL Y NIEVES'),(340,'ARGENTINA'),(341,'BOLIVIA'),(342,'BRASIL'),(343,'COLOMBIA'),(344,'CHILE'),(345,'ECUADOR'),(346,'GUYANA'),(347,'PARAGUAY'),(348,'PERU'),(349,'SURINAM'),(350,'URUGUAY'),(351,'VENEZUELA'),(370,'SAN PEDRO Y MIQUELON '),(371,'GROENLANDIA'),(380,'ISLAS CAIMÁN'),(381,'ISLAS TURCAS Y CAICOS'),(382,'ISLAS VÍRGENES DE LOS ESTADOS UNIDOS'),(383,'GUADALUPE'),(384,'ANTILLAS HOLANDESAS'),(385,'SAN MARTIN (PARTE FRANCESA)'),(386,'ARUBA'),(387,'MONTSERRAT'),(388,'ANGUILLA'),(389,'SAN BARTOLOME'),(390,'MARTINICA'),(391,'PUERTO RICO'),(392,'BERMUDAS'),(393,'ISLAS VIRGENES BRITANICAS'),(394,'GUAYANA FRANCESA'),(395,'ISLAS MALVINAS'),(396,'OTROS PAISES  O TERRITORIOS DE AMERICA DEL NORTE'),(398,'OTROS PAISES O TERRITORIOS DEL CARIBE Y AMERICA CENTRAL'),(399,'OTROS PAISES O TERRITORIOS  DE SUDAMERICA'),(401,'AFGANISTAN'),(402,'ARABIA SAUDI'),(403,'BAHREIN'),(404,'BANGLADESH'),(405,'MYANMAR'),(407,'CHINA'),(408,'EMIRATOS ARABES UNIDOS'),(409,'FILIPINAS'),(410,'INDIA'),(411,'INDONESIA'),(412,'IRAQ'),(413,'IRAN'),(414,'ISRAEL'),(415,'JAPON'),(416,'JORDANIA'),(417,'CAMBOYA'),(418,'KUWAIT'),(419,'LAOS'),(420,'LIBANO'),(421,'MALASIA'),(422,'MALDIVAS'),(423,'MONGOLIA'),(424,'NEPAL'),(425,'OMAN'),(426,'PAKISTAN'),(427,'QATAR'),(430,'COREA'),(431,'COREA DEL NORTE '),(432,'SINGAPUR'),(433,'SIRIA'),(434,'SRI LANKA'),(435,'TAILANDIA'),(436,'TURQUIA'),(437,'VIETNAM'),(439,'BRUNEI'),(440,'ISLAS MARSHALL'),(441,'YEMEN'),(442,'AZERBAIYAN'),(443,'KAZAJSTAN'),(444,'KIRGUISTAN'),(445,'TADYIKISTAN'),(446,'TURKMENISTAN'),(447,'UZBEKISTAN'),(448,'ISLAS MARIANAS DEL NORTE'),(449,'PALESTINA'),(450,'HONG KONG'),(453,'BHUTÁN'),(454,'GUAM'),(455,'MACAO'),(499,'OTROS PAISES O TERRITORIOS DE ASIA'),(501,'AUSTRALIA'),(502,'FIJI'),(504,'NUEVA ZELANDA'),(505,'PAPUA NUEVA GUINEA'),(506,'ISLAS SALOMON'),(507,'SAMOA'),(508,'TONGA'),(509,'VANUATU'),(511,'MICRONESIA'),(512,'TUVALU'),(513,'ISLAS COOK'),(515,'NAURU'),(516,'PALAOS'),(517,'TIMOR ORIENTAL'),(520,'POLINESIA FRANCESA'),(521,'ISLA NORFOLK'),(522,'KIRIBATI'),(523,'NIUE'),(524,'ISLAS PITCAIRN'),(525,'TOKELAU'),(526,'NUEVA CALEDONIA'),(527,'WALLIS Y FORTUNA'),(528,'SAMOA AMERICANA'),(599,'OTROS PAISES O TERRITORIOS DE OCEANIA');
/*!40000 ALTER TABLE `t_paises` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_tipovia`
--

DROP TABLE IF EXISTS `t_tipovia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_tipovia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_tipovia`
--

LOCK TABLES `t_tipovia` WRITE;
/*!40000 ALTER TABLE `t_tipovia` DISABLE KEYS */;
INSERT INTO `t_tipovia` VALUES (1,'AUTOPISTA'),(2,'AVENIDA'),(3,'AVENIDA CALLE'),(4,'AVENIDA CARRERA'),(5,'BULEVAR'),(6,'CALLE'),(7,'CARRERA'),(8,'CIRCULAR'),(9,'KILOMETRO'),(10,'CIRCUNVALAR'),(11,'CTAS CORRIDAS'),(12,'DIAGONAL'),(13,'PASAJE'),(14,'PASEO'),(15,'PEATONAL'),(16,'TRANSVERSAL'),(17,'TRONCAL'),(18,'VARIANTE'),(20,'OTRA');
/*!40000 ALTER TABLE `t_tipovia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_usuario`
--

DROP TABLE IF EXISTS `t_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `t_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `documento` varchar(45) DEFAULT NULL,
  `nombre1` varchar(45) DEFAULT NULL,
  `nombre2` varchar(45) DEFAULT NULL,
  `apellido1` varchar(45) DEFAULT NULL,
  `apellido2` varchar(45) DEFAULT NULL,
  `contrasena` varchar(255) DEFAULT NULL,
  `nom_dinamizador` varchar(100) DEFAULT NULL,
  `doc_dinamizador` varchar(45) DEFAULT NULL,
  `cif` varchar(100) DEFAULT NULL,
  `updated_at` timestamp(6) NULL DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_usuario`
--

LOCK TABLES `t_usuario` WRITE;
/*!40000 ALTER TABLE `t_usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-08-26 17:55:12

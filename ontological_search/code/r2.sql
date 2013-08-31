-- MySQL dump 10.13  Distrib 5.5.28, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: testphp
-- ------------------------------------------------------
-- Server version	5.5.28-0ubuntu0.12.04.3

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `flag` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`username`, `fname`, `lname`, `email`, `password`, `status`, `flag`) VALUES ('','jayesh','','jayesh@lahori.com','123','d','us'),('bphani1992','phani','bod','bphani1992@gmail.com','1234','a','ad'),('k1','k1','k1','karan.dhamele@yahoo.com','k1','d','us'),('phani','phani','boddulari','boddulari.phani@students.iiit.ac.in','phani','a','us'),('rounak','rounak','patni','r@e.com','rounak','p','us'),('sabby','sabby','sabby','sagar.balwani@gmail.com','sabby','p','us'),('sagar','sagar','balwani','sagar.balwani@students.iiit.ac.in','temptemp','a','ad'),('sam','sam','sam','sam@gmail.com','sam','p','us');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eng`
--

DROP TABLE IF EXISTS `eng`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eng` (
  `entity1` varchar(100) NOT NULL,
  `relation` varchar(100) NOT NULL,
  `entity2` varchar(100) NOT NULL,
  PRIMARY KEY (`entity1`,`relation`,`entity2`),
  KEY `entity2` (`entity2`),
  KEY `relation` (`relation`),
  CONSTRAINT `eng_ibfk_1` FOREIGN KEY (`entity1`) REFERENCES `entity` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `eng_ibfk_2` FOREIGN KEY (`entity2`) REFERENCES `entity` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `eng_ibfk_3` FOREIGN KEY (`relation`) REFERENCES `entity` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eng`
--

LOCK TABLES `eng` WRITE;
/*!40000 ALTER TABLE `eng` DISABLE KEYS */;
/*!40000 ALTER TABLE `eng` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `entity`
--

DROP TABLE IF EXISTS `entity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entity` (
  `name` varchar(100) NOT NULL,
  `flag` int(11) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `entity`
--

LOCK TABLES `entity` WRITE;
/*!40000 ALTER TABLE `entity` DISABLE KEYS */;
INSERT INTO `entity` (`name`, `flag`) VALUES ('',2),('A.P',4),('banyan_tree',4),('blueness',1),('btech',4),('can_be',2),('capital',2),('charminar',4),('computer',4),('computer_science',4),('courses_offered',2),('create_graph',5),('deals_with',2),('degrees_offered',2),('DFGHJKL',1),('emotional',6),('famous_for',2),('foller',1),('has',2),('has_logo',2),('home',4),('hyderabad',4),('iiit',4),('iiit-h',4),('iit',4),('in',2),('india',4),('in_city_of',2),('in_state_of',2),('is',2),('is_in',2),('is_to',2),('lab',1),('log_out',5),('may_be',2),('modify_dictionary',5),('old_city',4),('ontology',4),('programming',4),('research_in',2),('rounak',4),('running',5),('say',5),('search',5),('serl',4),('software_development',4),('software_engineering',4),('someday',2),('spiritual',6),('state',4),('state_of_matter',4),('students_study',2),('study_of',2),('sweet',6),('sweetness',1),('tell',5),('whats_app',4);
/*!40000 ALTER TABLE `entity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `graph1`
--

DROP TABLE IF EXISTS `graph1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `graph1` (
  `entity1` varchar(100) NOT NULL,
  `relation` varchar(100) NOT NULL,
  `entity2` varchar(100) NOT NULL,
  PRIMARY KEY (`entity1`,`relation`,`entity2`),
  KEY `entity2` (`entity2`),
  KEY `relation` (`relation`),
  CONSTRAINT `graph1_ibfk_1` FOREIGN KEY (`entity1`) REFERENCES `entity` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `graph1_ibfk_2` FOREIGN KEY (`entity2`) REFERENCES `entity` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `graph1_ibfk_3` FOREIGN KEY (`relation`) REFERENCES `entity` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `graph1`
--

LOCK TABLES `graph1` WRITE;
/*!40000 ALTER TABLE `graph1` DISABLE KEYS */;
INSERT INTO `graph1` (`entity1`, `relation`, `entity2`) VALUES ('computer_science','study_of','computer'),('computer_science','deals_with','programming'),('computer_science','deals_with','software_development');
/*!40000 ALTER TABLE `graph1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `iiit`
--

DROP TABLE IF EXISTS `iiit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `iiit` (
  `entity1` varchar(100) NOT NULL,
  `relation` varchar(100) NOT NULL,
  `entity2` varchar(100) NOT NULL,
  PRIMARY KEY (`entity1`,`relation`,`entity2`),
  KEY `entity2` (`entity2`),
  KEY `relation` (`relation`),
  CONSTRAINT `iiit_ibfk_1` FOREIGN KEY (`entity1`) REFERENCES `entity` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `iiit_ibfk_2` FOREIGN KEY (`entity2`) REFERENCES `entity` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `iiit_ibfk_3` FOREIGN KEY (`relation`) REFERENCES `entity` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `iiit`
--

LOCK TABLES `iiit` WRITE;
/*!40000 ALTER TABLE `iiit` DISABLE KEYS */;
INSERT INTO `iiit` (`entity1`, `relation`, `entity2`) VALUES ('hyderabad','in_state_of','A.P'),('iiit','in_state_of','A.P'),('iiit','degrees_offered','btech'),('hyderabad','famous_for','charminar'),('iiit','students_study','computer_science'),('state','can_be','emotional'),('A.P','has','hyderabad'),('iiit','in_city_of','hyderabad'),('serl','is_in','hyderabad'),('serl','is_in','iiit'),('serl','is','lab'),('charminar','is_in','old_city'),('state','is_to','say'),('serl','deals_with','software_development'),('iiit','research_in','software_engineering'),('state','can_be','spiritual'),('A.P','is','state'),('state','may_be','state_of_matter');
/*!40000 ALTER TABLE `iiit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `iit`
--

DROP TABLE IF EXISTS `iit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `iit` (
  `entity1` varchar(100) NOT NULL,
  `relation` varchar(100) NOT NULL,
  `entity2` varchar(100) NOT NULL,
  PRIMARY KEY (`entity1`,`relation`,`entity2`),
  KEY `entity2` (`entity2`),
  KEY `relation` (`relation`),
  CONSTRAINT `iit_ibfk_1` FOREIGN KEY (`entity1`) REFERENCES `entity` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `iit_ibfk_2` FOREIGN KEY (`entity2`) REFERENCES `entity` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `iit_ibfk_3` FOREIGN KEY (`relation`) REFERENCES `entity` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `iit`
--

LOCK TABLES `iit` WRITE;
/*!40000 ALTER TABLE `iit` DISABLE KEYS */;
INSERT INTO `iit` (`entity1`, `relation`, `entity2`) VALUES ('iit','in','india');
/*!40000 ALTER TABLE `iit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rounak`
--

DROP TABLE IF EXISTS `rounak`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rounak` (
  `entity1` varchar(100) NOT NULL,
  `relation` varchar(100) NOT NULL,
  `entity2` varchar(100) NOT NULL,
  PRIMARY KEY (`entity1`,`relation`,`entity2`),
  KEY `entity2` (`entity2`),
  KEY `relation` (`relation`),
  CONSTRAINT `rounak_ibfk_1` FOREIGN KEY (`entity1`) REFERENCES `entity` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `rounak_ibfk_2` FOREIGN KEY (`entity2`) REFERENCES `entity` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `rounak_ibfk_3` FOREIGN KEY (`relation`) REFERENCES `entity` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rounak`
--

LOCK TABLES `rounak` WRITE;
/*!40000 ALTER TABLE `rounak` DISABLE KEYS */;
INSERT INTO `rounak` (`entity1`, `relation`, `entity2`) VALUES ('rounak','someday','whats_app');
/*!40000 ALTER TABLE `rounak` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `welcome`
--

DROP TABLE IF EXISTS `welcome`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `welcome` (
  `entity1` varchar(100) NOT NULL,
  `relation` varchar(100) NOT NULL,
  `entity2` varchar(100) NOT NULL,
  PRIMARY KEY (`entity1`,`relation`,`entity2`),
  KEY `entity2` (`entity2`),
  KEY `relation` (`relation`),
  CONSTRAINT `welcome_ibfk_1` FOREIGN KEY (`entity1`) REFERENCES `entity` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `welcome_ibfk_2` FOREIGN KEY (`entity2`) REFERENCES `entity` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `welcome_ibfk_3` FOREIGN KEY (`relation`) REFERENCES `entity` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `welcome`
--

LOCK TABLES `welcome` WRITE;
/*!40000 ALTER TABLE `welcome` DISABLE KEYS */;
INSERT INTO `welcome` (`entity1`, `relation`, `entity2`) VALUES ('ontology','','create_graph'),('ontology','','home'),('ontology','','log_out'),('ontology','','modify_dictionary'),('ontology','','search');
/*!40000 ALTER TABLE `welcome` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-03-15 16:40:04

-- MySQL dump 10.13  Distrib 5.5.28, for Win32 (x86)
--
-- Host: localhost    Database: acc
-- ------------------------------------------------------
-- Server version	5.0.41-community-nt

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
-- Not dumping tablespaces as no INFORMATION_SCHEMA.FILES table on this server
--

--
-- Table structure for table `assignment`
--

DROP TABLE IF EXISTS `assignment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE IF NOT EXISTS `assignment` (
  `assign_id` int(11) NOT NULL auto_increment,
  `assign_name` varchar(20) NOT NULL,
  `filename` varchar(40) NOT NULL,
  `filesize` int(11) NOT NULL,
  `class` varchar(20) NOT NULL,
  `ins_id` varchar(20) default NULL,
  PRIMARY KEY  (`assign_id`),
  KEY `ins_id` (`ins_id`),
  CONSTRAINT `assignment_ibfk_1` FOREIGN KEY (`ins_id`) REFERENCES `instructor` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assignment`
--

LOCK TABLES `assignment` WRITE;
/*!40000 ALTER TABLE `assignment` DISABLE KEYS */;
/*!40000 ALTER TABLE `assignment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coursepdf`
--

DROP TABLE IF EXISTS `coursepdf`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE IF NOT EXISTS `coursepdf` (
  `sub_id` varchar(10) default NULL,
  `cid` int(11) NOT NULL auto_increment,
  `filename` varchar(20) default NULL,
  `filesize` int(11) default NULL,
  `ins_id` varchar(30) default NULL,
  PRIMARY KEY  (`cid`),
  KEY `sub_id` (`sub_id`),
  KEY `ins_id` (`ins_id`),
  CONSTRAINT `coursepdf_ibfk_2` FOREIGN KEY (`ins_id`) REFERENCES `instructor` (`username`),
  CONSTRAINT `coursepdf_ibfk_1` FOREIGN KEY (`sub_id`) REFERENCES `sub_category` (`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coursepdf`
--

LOCK TABLES `coursepdf` WRITE;
/*!40000 ALTER TABLE `coursepdf` DISABLE KEYS */;
/*!40000 ALTER TABLE `coursepdf` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `instructor`
--

DROP TABLE IF EXISTS `instructor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE IF NOT EXISTS`instructor` (
  `name` varchar(30) default NULL,
  `email` varchar(30) default NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) default NULL,
  PRIMARY KEY  (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `instructor`
--

LOCK TABLES `instructor` WRITE;
/*!40000 ALTER TABLE `instructor` DISABLE KEYS */;
/*!40000 ALTER TABLE `instructor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quiz_ques`
--

DROP TABLE IF EXISTS `quiz_ques`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE IF NOT EXISTS `quiz_ques` (
  `sub_id` varchar(20) default NULL,
  `qid` int(11) NOT NULL auto_increment,
  `question` varchar(150) NOT NULL,
  `opt_a` varchar(50) NOT NULL,
  `opt_b` varchar(50) NOT NULL,
  `opt_c` varchar(50) NOT NULL,
  `opt_d` varchar(50) NOT NULL,
  `corr_opt` varchar(1) NOT NULL,
  PRIMARY KEY  (`qid`),
  KEY `sub_id` (`sub_id`),
  CONSTRAINT `quiz_ques_ibfk_1` FOREIGN KEY (`sub_id`) REFERENCES `sub_category` (`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quiz_ques`
--

LOCK TABLES `quiz_ques` WRITE;
/*!40000 ALTER TABLE `quiz_ques` DISABLE KEYS */;
/*!40000 ALTER TABLE `quiz_ques` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE IF NOT EXISTS `student` (
  `name` varchar(30) default NULL,
  `email` varchar(30) default NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) default NULL,
  `class` varchar(20) default NULL,
  PRIMARY KEY  (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sub_assign`
--

DROP TABLE IF EXISTS `sub_assign`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE IF NOT EXISTS `sub_assign` (
  `assign_id` int(11) NOT NULL,
  `filename` varchar(40) default NULL,
  `filesize` int(11) default NULL,
  `stud_name` varchar(40) default NULL,
  PRIMARY KEY  (`assign_id`),
  CONSTRAINT `sub_assign_ibfk_1` FOREIGN KEY (`assign_id`) REFERENCES `assignment` (`assign_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sub_assign`
--

LOCK TABLES `sub_assign` WRITE;
/*!40000 ALTER TABLE `sub_assign` DISABLE KEYS */;
/*!40000 ALTER TABLE `sub_assign` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sub_category`
--

DROP TABLE IF EXISTS `sub_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE IF NOT EXISTS `sub_category` (
  `sub_id` varchar(10) NOT NULL,
  `sub_name` varchar(30) default NULL,
  PRIMARY KEY  (`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sub_category`
--

LOCK TABLES `sub_category` WRITE;
/*!40000 ALTER TABLE `sub_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `sub_category` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-02 20:31:17

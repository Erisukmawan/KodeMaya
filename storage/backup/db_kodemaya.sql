-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: db_kodemaya
-- ------------------------------------------------------
-- Server version	10.4.28-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `bank_account`
--

LOCK TABLES `bank_account` WRITE;
/*!40000 ALTER TABLE `bank_account` DISABLE KEYS */;
/*!40000 ALTER TABLE `bank_account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `chat`
--

LOCK TABLES `chat` WRITE;
/*!40000 ALTER TABLE `chat` DISABLE KEYS */;
/*!40000 ALTER TABLE `chat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `enum`
--

LOCK TABLES `enum` WRITE;
/*!40000 ALTER TABLE `enum` DISABLE KEYS */;
INSERT INTO `enum` VALUES (1,'account_type','A','Admin'),(2,'account_type','M','Mentor'),(3,'account_type','C','Customer'),(4,'user_status','C','Pending'),(5,'user_status','A','Active'),(6,'user_status','B','Banned'),(7,'service_type','T','Tulung'),(8,'payment_type','D','Direct'),(9,'payment_type','R','Redirect'),(10,'invoice_status','U','Unpaid'),(11,'invoice_status','P','Paid'),(12,'invoice_status','E','Expired'),(13,'chat_type','T','Text'),(14,'chat_type','I','Image'),(15,'chat_type','V','Video'),(16,'chat_type','D','Document'),(17,'chat_type','P','Payment'),(18,'consultation_status','D','Done'),(19,'tulung_status','W','Waiting'),(20,'tulung_status','A','Active'),(21,'tulung_status','R','Review'),(22,'tulung_status','D','Done'),(23,'transaction_type','K','Kredit'),(24,'transaction_type','D','Debit'),(25,'transaction_status','P','Pending'),(26,'transaction_status','D','Done'),(27,'transaction_status','F','Failed'),(28,'transaction_status','C','Cancelled'),(29,'account_status','P','Pending'),(30,'account_status','A','Active'),(31,'account_status','I','Invalid'),(32,'parameter_type','S','String'),(33,'parameter_type','I','Integer'),(34,'parameter_type','T','Datetime'),(35,'parameter_type','D','Double');
/*!40000 ALTER TABLE `enum` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `file_batch`
--

LOCK TABLES `file_batch` WRITE;
/*!40000 ALTER TABLE `file_batch` DISABLE KEYS */;
/*!40000 ALTER TABLE `file_batch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `files`
--

LOCK TABLES `files` WRITE;
/*!40000 ALTER TABLE `files` DISABLE KEYS */;
/*!40000 ALTER TABLE `files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `global_parameter`
--

LOCK TABLES `global_parameter` WRITE;
/*!40000 ALTER TABLE `global_parameter` DISABLE KEYS */;
INSERT INTO `global_parameter` VALUES (1,'2023-06-05 09:07:40','Pesan Banned','ban_message','S',NULL,NULL,'Akun anda telah ditangguhkan, Hubungi CS admin@kodemaya.my.id.','2023-06-05 00:00:00',NULL);
/*!40000 ALTER TABLE `global_parameter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `invoice`
--

LOCK TABLES `invoice` WRITE;
/*!40000 ALTER TABLE `invoice` DISABLE KEYS */;
/*!40000 ALTER TABLE `invoice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `payment`
--

LOCK TABLES `payment` WRITE;
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `rating`
--

LOCK TABLES `rating` WRITE;
/*!40000 ALTER TABLE `rating` DISABLE KEYS */;
/*!40000 ALTER TABLE `rating` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `transactions`
--

LOCK TABLES `transactions` WRITE;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tulung`
--

LOCK TABLES `tulung` WRITE;
/*!40000 ALTER TABLE `tulung` DISABLE KEYS */;
/*!40000 ALTER TABLE `tulung` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tulung_post`
--

LOCK TABLES `tulung_post` WRITE;
/*!40000 ALTER TABLE `tulung_post` DISABLE KEYS */;
/*!40000 ALTER TABLE `tulung_post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,NULL,NULL,'MRHRTZ','hanifsyauqi61@gmail.com',NULL,NULL,'$2y$10$gB0IHqa.9FZcKi.SiY7dRuXc1O57/44M87xuhopm.KIDGTtK/m9eq',NULL,'A',250050,'A','2023-06-02 06:07:49','2023-06-05 15:14:44',NULL),(2,NULL,NULL,'Sicara cicadas','sicara.cicadas41@gmail.com',NULL,NULL,'$2y$10$z19bISwP7kBlr/mZXP0fb.VQvCVMeGtJE.R0rpw2zMz7waHujQr6K',NULL,'C',0,'A','2023-06-05 08:08:20','2023-06-05 16:35:13',NULL),(8,NULL,NULL,'Wabot Cli','wabotcli@gmail.com',NULL,NULL,'$2y$10$fk23dzq73oZD/gHSjD7yOOyGlfuNK.HThoBuMYdMTv7nruZrjBHfi',NULL,'C',0,'A','2023-06-15 07:20:30','2023-06-15 07:28:24','');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-15 19:37:02

-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: kodemaya
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
-- Dumping data for table `kontrak`
--

LOCK TABLES `kontrak` WRITE;
/*!40000 ALTER TABLE `kontrak` DISABLE KEYS */;
/*!40000 ALTER TABLE `kontrak` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `mentor`
--

LOCK TABLES `mentor` WRITE;
/*!40000 ALTER TABLE `mentor` DISABLE KEYS */;
INSERT INTO `mentor` VALUES (1,'KodeMaya Mentor','mentor@kodemaya.my.id','Bandung','0850000000','$2y$10$J8bDuJaRbNNFxeTJWCFAcuoEeOKEhlxJRwlCxivaAwBYHhxkwLcOa',NULL,'Website','document.zip','AKTIF','AKTIF');
/*!40000 ALTER TABLE `mentor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `pegawai`
--

LOCK TABLES `pegawai` WRITE;
/*!40000 ALTER TABLE `pegawai` DISABLE KEYS */;
INSERT INTO `pegawai` VALUES (1,'KodeMaya Administrasi','administrasi@kodemaya.my.id','Kota Gotham','0850000000','$2y$10$J8bDuJaRbNNFxeTJWCFAcuoEeOKEhlxJRwlCxivaAwBYHhxkwLcOa',NULL,'ADMINISTRASI','AKTIF'),(2,'KodeMaya Keuangan','keuangan@kodemaya.my.id','Kota Gotham','0850000000','$2y$10$J8bDuJaRbNNFxeTJWCFAcuoEeOKEhlxJRwlCxivaAwBYHhxkwLcOa',NULL,'KEUANGAN','AKTIF');
/*!40000 ALTER TABLE `pegawai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `pelanggan`
--

LOCK TABLES `pelanggan` WRITE;
/*!40000 ALTER TABLE `pelanggan` DISABLE KEYS */;
INSERT INTO `pelanggan` VALUES (1,'Eri Sukmawan','erisukmawan03@gmail.com','Cianjur','08987528332','$2y$10$VCZWVJMZ7lLU04vqykrVJeAnWVEtb21D7SdEXJEanR6BuGec/6ME2',NULL,'AKTIF'),(2,'KodeMaya Customer','customer@kodemaya.my.id','Cijerah, kalmahera timur','0850000000','$2y$10$J8bDuJaRbNNFxeTJWCFAcuoEeOKEhlxJRwlCxivaAwBYHhxkwLcOa',NULL,'AKTIF'),(3,'Edwin Liona Jaya','edwinkudo.07@gmail.com','Gotham','1111','$2y$10$cUiYULFM6OtpcZ4WH08Ri.yIU7Cb7Eda6U6lZAQrfxuCMnYvy9eBm',NULL,'AKTIF');
/*!40000 ALTER TABLE `pelanggan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `pemesanan`
--

LOCK TABLES `pemesanan` WRITE;
/*!40000 ALTER TABLE `pemesanan` DISABLE KEYS */;
/*!40000 ALTER TABLE `pemesanan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-07-31 20:34:32

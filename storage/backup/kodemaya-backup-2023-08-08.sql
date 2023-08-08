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
INSERT INTO `kontrak` VALUES (2,1,2,'Web Ponpes Al Zaytun','<p><strong>Fitur</strong> <strong>Utama</strong></p><ol><li><p>Konsultasi Awal: Tim kami akan berkomunikasi dengan Anda untuk mendapatkan pemahaman mendalam tentang kebutuhan dan harapan Anda terhadap website sekolah.</p></li><li><p>Perancangan: Setelah mengetahui kebutuhan Anda, kami akan merancang tata letak dan mengembangkan konsep visual untuk website.</p></li><li><p>Pengembangan: Setelah Anda menyetujui desain, kami akan mulai mengembangkan website dengan teknologi terkini dan standar terbaik.</p></li><li><p>Uji Coba: Kami akan menguji website secara menyeluruh untuk memastikan kinerja dan keamanannya sebelum diluncurkan.</p></li><li><p>Peluncuran: Setelah semuanya siap, website akan diunggah dan diluncurkan untuk publik</p></li></ol>','2023-08-06 00:00:00','2023-08-13 00:00:00',3450000,'TIDAK SETUJU'),(3,1,2,'Web Ponpes Al Zaytun','<p><strong>Fitur</strong> <strong>Utama</strong></p><ol><li><p>Konsultasi Awal: Tim kami akan berkomunikasi dengan Anda untuk mendapatkan pemahaman mendalam tentang kebutuhan dan harapan Anda terhadap website sekolah.</p></li><li><p>Perancangan: Setelah mengetahui kebutuhan Anda, kami akan merancang tata letak dan mengembangkan konsep visual untuk website.</p></li><li><p>Pengembangan: Setelah Anda menyetujui desain, kami akan mulai mengembangkan website dengan teknologi terkini dan standar terbaik.</p></li><li><p>Uji Coba: Kami akan menguji website secara menyeluruh untuk memastikan kinerja dan keamanannya sebelum diluncurkan.</p></li><li><p>Peluncuran: Setelah semuanya siap, website akan diunggah dan diluncurkan untuk publik</p></li></ol>','2023-08-06 00:00:00','2023-08-11 00:00:00',3450000,'SETUJU');
/*!40000 ALTER TABLE `kontrak` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `mentor`
--

LOCK TABLES `mentor` WRITE;
/*!40000 ALTER TABLE `mentor` DISABLE KEYS */;
INSERT INTO `mentor` VALUES (1,'KodeMaya Mentor','mentor@kodemaya.my.id','Bandungs','0850000000','$2y$10$J8bDuJaRbNNFxeTJWCFAcuoEeOKEhlxJRwlCxivaAwBYHhxkwLcOa','https://drive.google.com/uc?id=1Iduy53E1v8Zuuz_6MNRwoogznKjiLf6g&export=media','WEBSITE','document.zip','','AKTIF'),(2,'Edo Gunawan','wabotcli@gmail.com','California Timur','085559052484','$2y$10$dZG5EGSrEecsyh2QL/owJeMLkcNr/x2ELctkswp63m8iOFRSOHahK','https://drive.google.com/uc?id=1QUC7HUW8MJZ5xe2T7b2t6RlbZulcqcnH&export=media','WEBSITE','https://drive.google.com/uc?id=1cTSRxMtIP0_OuNWF8jbx9d88DzETlEuP&export=media',NULL,'AKTIF');
/*!40000 ALTER TABLE `mentor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `pegawai`
--

LOCK TABLES `pegawai` WRITE;
/*!40000 ALTER TABLE `pegawai` DISABLE KEYS */;
INSERT INTO `pegawai` VALUES (1,'Kodemaya administrasi','employee@kodemaya.my.id','Kota Gotham','0850000000','$2y$10$J8bDuJaRbNNFxeTJWCFAcuoEeOKEhlxJRwlCxivaAwBYHhxkwLcOa','https://drive.google.com/uc?id=1MPQkqE9bpTvs56MQCBCsG1sUub5Y8ba3&export=media','ADMINISTRASI','AKTIF'),(2,'KodeMaya Keuangans','keuangan@kodemaya.my.id','Kota Gotham, hehe','0850000000','$2y$10$J8bDuJaRbNNFxeTJWCFAcuoEeOKEhlxJRwlCxivaAwBYHhxkwLcOa','https://drive.google.com/uc?id=11zx_HFphumMEUY0ltA-plM3qG4U0Sp_4&export=media','KEUANGAN','AKTIF');
/*!40000 ALTER TABLE `pegawai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `pelanggan`
--

LOCK TABLES `pelanggan` WRITE;
/*!40000 ALTER TABLE `pelanggan` DISABLE KEYS */;
INSERT INTO `pelanggan` VALUES (1,'Eri Sukmawan','erisukmawan03@gmail.com','Cianjur','08987528332','$2y$10$VCZWVJMZ7lLU04vqykrVJeAnWVEtb21D7SdEXJEanR6BuGec/6ME2',NULL,'AKTIF'),(2,'KodeMaya Customer','customer@kodemaya.my.id','Cijerah, kalmahera timurs','0850000000','$2y$10$J8bDuJaRbNNFxeTJWCFAcuoEeOKEhlxJRwlCxivaAwBYHhxkwLcOa','https://drive.google.com/uc?id=1Bw5MMIif5AyxNWmh2RYSZddNKLhFaL-3&export=media','AKTIF'),(3,'Edwin Liona Jaya','edwinkudo.07@gmail.com','Gotham','1111','$2y$10$cUiYULFM6OtpcZ4WH08Ri.yIU7Cb7Eda6U6lZAQrfxuCMnYvy9eBm',NULL,'AKTIF');
/*!40000 ALTER TABLE `pelanggan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `pemesanan`
--

LOCK TABLES `pemesanan` WRITE;
/*!40000 ALTER TABLE `pemesanan` DISABLE KEYS */;
INSERT INTO `pemesanan` VALUES (2,2,1,NULL,3,'CIMBVA','DEV-T50241151996X7D7',NULL,'WEBSITE','TERTUNDA','DIPROSES','Web Ponpes Al Zaytun','<p><strong>Fitur</strong> <strong>Utama</strong></p>\r\n<ol>\r\n<li>\r\n<p>Konsultasi Awal: Tim kami akan berkomunikasi dengan Anda untuk mendapatkan pemahaman mendalam tentang kebutuhan dan harapan Anda terhadap website sekolah.</p>\r\n</li>\r\n<li>\r\n<p>Perancangan: Setelah mengetahui kebutuhan Anda, kami akan merancang tata letak dan mengembangkan konsep visual untuk website.</p>\r\n</li>\r\n<li>\r\n<p>Pengembangan: Setelah Anda menyetujui desain, kami akan mulai mengembangkan website dengan teknologi terkini dan standar terbaik.</p>\r\n</li>\r\n<li>\r\n<p>Uji Coba: Kami akan menguji website secara menyeluruh untuk memastikan kinerja dan keamanannya sebelum diluncurkan.</p>\r\n</li>\r\n<li>\r\n<p>Peluncuran: Setelah semuanya siap, website akan diunggah dan diluncurkan untuk publik</p>\r\n</li>\r\n</ol>',NULL,3450000);
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

-- Dump completed on 2023-08-08 12:13:49

/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
DROP TABLE IF EXISTS `bank_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bank_account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `bank_name` varchar(15) DEFAULT NULL,
  `account_name` varchar(150) DEFAULT NULL,
  `account_no` varchar(30) DEFAULT NULL,
  `account_status` enum('P','A','R') DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `bank_name` (`bank_name`),
  CONSTRAINT `bank_account_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  CONSTRAINT `bank_account_ibfk_2` FOREIGN KEY (`bank_name`) REFERENCES `payment` (`payment_method`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_type` enum('K','T') DEFAULT NULL,
  `category_type` varchar(50) DEFAULT NULL,
  `category_name` varchar(100) DEFAULT 'NULL',
  `category_description` text DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `chat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chat` (
  `chat_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `file_batch_id` int(11) DEFAULT NULL,
  `invoice_no` varchar(30) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `chat_type` enum('T','I','V','D','P') NOT NULL DEFAULT 'T',
  `created_at` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`chat_id`),
  KEY `user_id` (`user_id`),
  KEY `file_batch_id` (`file_batch_id`),
  KEY `invoice_no` (`invoice_no`),
  CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  CONSTRAINT `chat_ibfk_2` FOREIGN KEY (`file_batch_id`) REFERENCES `file_batch` (`file_batch_id`),
  CONSTRAINT `chat_ibfk_3` FOREIGN KEY (`invoice_no`) REFERENCES `invoice` (`invoice_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `enum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enum` (
  `enum_id` int(11) NOT NULL AUTO_INCREMENT,
  `enum_name` varchar(25) DEFAULT NULL,
  `enum_code` varchar(5) DEFAULT NULL,
  `enum_description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`enum_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `file_batch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `file_batch` (
  `file_batch_id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`file_batch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `files` (
  `file_id` int(11) NOT NULL AUTO_INCREMENT,
  `owner_id` int(11) DEFAULT NULL,
  `file_gid` varchar(50) DEFAULT NULL,
  `file_batch_id` int(11) DEFAULT NULL,
  `file_name` varchar(60) DEFAULT NULL,
  `file_type` varchar(10) DEFAULT NULL,
  `file_mimetype` varchar(50) DEFAULT NULL,
  `file_url` varchar(255) DEFAULT NULL,
  `file_size` int(11) DEFAULT NULL,
  `file_description` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`file_id`),
  KEY `owner_id` (`owner_id`),
  KEY `file_batch_id` (`file_batch_id`),
  CONSTRAINT `files_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `users` (`user_id`),
  CONSTRAINT `files_ibfk_2` FOREIGN KEY (`file_batch_id`) REFERENCES `file_batch` (`file_batch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `global_parameter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `global_parameter` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `name` varchar(100) DEFAULT NULL,
  `code` varchar(50) DEFAULT 'NULL',
  `parameter_type` enum('S','I','T','D') DEFAULT 'S',
  `description` varchar(255) DEFAULT NULL,
  `value_integer` int(11) DEFAULT 0,
  `value_string` text DEFAULT NULL,
  `value_datetime` datetime DEFAULT NULL,
  `value_double` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `invoice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `invoice` (
  `invoice_no` varchar(30) NOT NULL,
  `service_id` int(11) DEFAULT NULL,
  `service_type` enum('K','T') DEFAULT NULL,
  `service_tax` int(11) DEFAULT NULL,
  `total_cost` int(11) DEFAULT NULL,
  `invoice_status` enum('U','P','E') NOT NULL DEFAULT 'U',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`invoice_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment` (
  `payment_method` varchar(15) NOT NULL,
  `payment_name` varchar(30) DEFAULT NULL,
  `payment_type` enum('D','R') DEFAULT NULL,
  `tax` int(11) DEFAULT NULL,
  PRIMARY KEY (`payment_method`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `rating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rating` (
  `rating_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(10) unsigned DEFAULT 0,
  `service_type` enum('K','T') DEFAULT NULL,
  `rating_star` float DEFAULT NULL,
  `rating_description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`rating_id`),
  KEY `post_id` (`post_id`),
  CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `tulung_post` (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transactions` (
  `transaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `reference_code` varchar(20) NOT NULL,
  `source_id` int(11) NOT NULL,
  `target_id` int(11) NOT NULL,
  `payment_method` varchar(15) DEFAULT NULL,
  `service_type` enum('K','T','W') DEFAULT NULL,
  `transaction_type` enum('K','D') DEFAULT 'D',
  `amount` int(11) DEFAULT NULL,
  `transaction_status` enum('P','D','F','C') NOT NULL DEFAULT 'P',
  `notes` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`transaction_id`),
  KEY `source_id` (`source_id`),
  KEY `target_id` (`target_id`),
  KEY `payment_method` (`payment_method`),
  CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`source_id`) REFERENCES `users` (`user_id`),
  CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`target_id`) REFERENCES `users` (`user_id`),
  CONSTRAINT `transactions_ibfk_3` FOREIGN KEY (`payment_method`) REFERENCES `payment` (`payment_method`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `tulung`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tulung` (
  `tulung_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_no` varchar(30) DEFAULT NULL,
  `mentor_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `chat_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `file_batch_id` int(11) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `tulung_status` enum('W','A','R','D') NOT NULL DEFAULT 'W',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deadline_at` datetime DEFAULT NULL,
  `ends_on` datetime DEFAULT NULL,
  PRIMARY KEY (`tulung_id`),
  KEY `invoice_no` (`invoice_no`),
  KEY `mentor_id` (`mentor_id`),
  KEY `customer_id` (`customer_id`),
  KEY `chat_id` (`chat_id`),
  KEY `category_id` (`category_id`),
  KEY `file_batch_id` (`file_batch_id`),
  CONSTRAINT `tulung_ibfk_1` FOREIGN KEY (`invoice_no`) REFERENCES `invoice` (`invoice_no`),
  CONSTRAINT `tulung_ibfk_2` FOREIGN KEY (`mentor_id`) REFERENCES `users` (`user_id`),
  CONSTRAINT `tulung_ibfk_3` FOREIGN KEY (`customer_id`) REFERENCES `users` (`user_id`),
  CONSTRAINT `tulung_ibfk_4` FOREIGN KEY (`chat_id`) REFERENCES `chat` (`chat_id`),
  CONSTRAINT `tulung_ibfk_5` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  CONSTRAINT `tulung_ibfk_6` FOREIGN KEY (`file_batch_id`) REFERENCES `file_batch` (`file_batch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `tulung_post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tulung_post` (
  `post_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pic_id` int(11) NOT NULL DEFAULT 0,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `mentor_id` int(11) NOT NULL DEFAULT 0,
  `start_from` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`post_id`),
  KEY `mentor_id` (`mentor_id`),
  CONSTRAINT `tulung_post_ibfk_1` FOREIGN KEY (`mentor_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `attachment_id` int(11) DEFAULT NULL,
  `pic_id` int(11) DEFAULT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `account_type` enum('A','M','C') DEFAULT 'C',
  `balance` double NOT NULL DEFAULT 0,
  `account_status` enum('A','P','B') DEFAULT 'P',
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `verify_token` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `pic_id` (`pic_id`),
  KEY `attachment_id` (`attachment_id`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`pic_id`) REFERENCES `files` (`file_id`),
  CONSTRAINT `users_ibfk_2` FOREIGN KEY (`attachment_id`) REFERENCES `file_batch` (`file_batch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

INSERT INTO `migrations` VALUES (1,'2019_12_14_000001_create_personal_access_tokens_table',1);

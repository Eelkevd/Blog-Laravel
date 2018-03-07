-- MySQL dump 10.16  Distrib 10.1.29-MariaDB, for Win32 (AMD64)
--
-- Host: 127.0.0.1    Database: blog2
-- ------------------------------------------------------
-- Server version	10.1.29-MariaDB

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
-- Table structure for table `article_category`
--

DROP TABLE IF EXISTS `article_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(10) unsigned NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `article_category_article_id_foreign` (`article_id`),
  KEY `article_category_category_id_foreign` (`category_id`),
  CONSTRAINT `article_category_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`),
  CONSTRAINT `article_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_category`
--

LOCK TABLES `article_category` WRITE;
/*!40000 ALTER TABLE `article_category` DISABLE KEYS */;
INSERT INTO `article_category` VALUES (1,6,1,NULL,NULL),(2,7,2,NULL,NULL),(3,8,2,NULL,NULL),(4,9,2,NULL,NULL),(5,10,2,NULL,NULL),(6,11,2,NULL,NULL),(7,12,2,NULL,NULL),(8,13,2,NULL,NULL),(9,14,2,NULL,NULL),(10,15,2,NULL,NULL),(11,17,2,NULL,NULL),(12,18,1,NULL,NULL),(13,18,2,NULL,NULL),(14,20,1,NULL,NULL);
/*!40000 ALTER TABLE `article_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bodytext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (1,4,6,'test4 artikel','test4 artikel','2018-02-28 15:12:48','2018-02-28 15:12:48'),(2,4,6,'rfsrfsrf','serfserfser','2018-02-28 15:13:18','2018-02-28 15:13:18'),(3,4,6,'rfserfserf','serfserfserf','2018-02-28 15:13:24','2018-02-28 15:13:24'),(4,4,6,'serfserfserf','refserfserfserf','2018-02-28 15:13:29','2018-02-28 15:13:29'),(5,4,6,'serfserfserf','erfserfserfsf','2018-02-28 15:13:35','2018-02-28 15:13:35'),(6,6,8,'fgsdgs','sdfgsdfgs','2018-03-01 10:16:38','2018-03-01 10:16:38'),(7,10,12,'teset1','teset1','2018-03-01 14:46:39','2018-03-01 14:46:39'),(8,10,12,'teset2','teset2','2018-03-01 14:46:59','2018-03-01 14:46:59'),(9,10,12,'teset3','teset3','2018-03-01 14:47:42','2018-03-01 14:47:42'),(10,10,12,'teset4','teset4','2018-03-01 14:47:54','2018-03-01 14:47:54'),(11,10,12,'teset5','teset','2018-03-01 14:48:04','2018-03-01 14:48:04'),(12,10,12,'teset6','teset6','2018-03-01 14:48:32','2018-03-01 14:48:32'),(13,10,12,'teset7','teset7','2018-03-01 14:48:57','2018-03-01 14:48:57'),(14,10,12,'teset8','teset8','2018-03-01 14:49:17','2018-03-01 14:49:17'),(15,10,12,'teset9','teset9','2018-03-01 14:49:52','2018-03-01 14:49:52'),(16,11,13,'Big blog 1','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac libero id quam maximus porttitor. Phasellus aliquam rhoncus libero, nec tristique dolor porta et. Suspendisse semper elit in ante facilisis, dictum eleifend massa iaculis. Aenean sed leo non arcu fringilla luctus. Nullam sit amet varius nunc, sit amet finibus ligula. Aenean varius metus id nisl vehicula semper. Suspendisse potenti. Sed nunc metus, interdum eu ultricies vel, mollis sit amet elit. Nam congue ipsum ac ante maximus, non viverra magna malesuada.\r\n\r\nVestibulum facilisis, erat id porttitor vulputate, lacus mauris cursus mauris, ac pretium ante mi nec dolor. In hac habitasse platea dictumst. Nulla cursus vehicula mauris, auctor interdum magna. Aenean lacinia dapibus tincidunt. Maecenas lobortis condimentum libero. Mauris pulvinar dui vitae eros efficitur placerat. Vivamus eu feugiat ipsum, et cursus ex. Morbi vulputate posuere bibendum. In posuere leo urna, ullamcorper sodales ante venenatis in. Donec tristique turpis eu fermentum ullamcorper. Nunc a consectetur eros, id bibendum ipsum. Phasellus efficitur auctor sagittis. Quisque euismod ipsum eu ante posuere dapibus. Aenean malesuada nisl vitae erat maximus, at gravida lorem vestibulum. Phasellus est libero, posuere vitae enim sit amet, facilisis congue turpis.\r\n\r\nAliquam hendrerit maximus sapien vitae luctus. Praesent iaculis lobortis nisl, eu aliquam mi venenatis ut. Aliquam at tempus tellus. Quisque viverra orci in enim tempor, et suscipit orci auctor. Fusce lacinia fringilla cursus. Donec laoreet posuere ante, sit amet porta urna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin tincidunt nibh eget diam ultrices, quis tincidunt quam elementum. Duis luctus in dui ac porta. Sed efficitur consectetur commodo. Aenean orci massa, tincidunt sed purus vitae, ultricies suscipit ipsum. Maecenas at urna elit. Phasellus rhoncus lectus augue, ut rutrum sem imperdiet id. Nunc vitae molestie turpis, ut egestas nulla.','2018-03-02 08:52:01','2018-03-02 08:52:01'),(17,11,13,'Big blog 2','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac libero id quam maximus porttitor. Phasellus aliquam rhoncus libero, nec tristique dolor porta et. Suspendisse semper elit in ante facilisis, dictum eleifend massa iaculis. Aenean sed leo non arcu fringilla luctus. Nullam sit amet varius nunc, sit amet finibus ligula. Aenean varius metus id nisl vehicula semper. Suspendisse potenti. Sed nunc metus, interdum eu ultricies vel, mollis sit amet elit. Nam congue ipsum ac ante maximus, non viverra magna malesuada.\r\n\r\nVestibulum facilisis, erat id porttitor vulputate, lacus mauris cursus mauris, ac pretium ante mi nec dolor. In hac habitasse platea dictumst. Nulla cursus vehicula mauris, auctor interdum magna. Aenean lacinia dapibus tincidunt. Maecenas lobortis condimentum libero. Mauris pulvinar dui vitae eros efficitur placerat. Vivamus eu feugiat ipsum, et cursus ex. Morbi vulputate posuere bibendum. In posuere leo urna, ullamcorper sodales ante venenatis in. Donec tristique turpis eu fermentum ullamcorper. Nunc a consectetur eros, id bibendum ipsum. Phasellus efficitur auctor sagittis. Quisque euismod ipsum eu ante posuere dapibus. Aenean malesuada nisl vitae erat maximus, at gravida lorem vestibulum. Phasellus est libero, posuere vitae enim sit amet, facilisis congue turpis.\r\n\r\nAliquam hendrerit maximus sapien vitae luctus. Praesent iaculis lobortis nisl, eu aliquam mi venenatis ut. Aliquam at tempus tellus. Quisque viverra orci in enim tempor, et suscipit orci auctor. Fusce lacinia fringilla cursus. Donec laoreet posuere ante, sit amet porta urna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin tincidunt nibh eget diam ultrices, quis tincidunt quam elementum. Duis luctus in dui ac porta. Sed efficitur consectetur commodo. Aenean orci massa, tincidunt sed purus vitae, ultricies suscipit ipsum. Maecenas at urna elit. Phasellus rhoncus lectus augue, ut rutrum sem imperdiet id. Nunc vitae molestie turpis, ut egestas nulla.','2018-03-02 08:53:13','2018-03-02 08:53:13'),(18,11,13,'Big blog 3','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac libero id quam maximus porttitor. Phasellus aliquam rhoncus libero, nec tristique dolor porta et. Suspendisse semper elit in ante facilisis, dictum eleifend massa iaculis. Aenean sed leo non arcu fringilla luctus. Nullam sit amet varius nunc, sit amet finibus ligula. Aenean varius metus id nisl vehicula semper. Suspendisse potenti. Sed nunc metus, interdum eu ultricies vel, mollis sit amet elit. Nam congue ipsum ac ante maximus, non viverra magna malesuada.\r\n\r\nVestibulum facilisis, erat id porttitor vulputate, lacus mauris cursus mauris, ac pretium ante mi nec dolor. In hac habitasse platea dictumst. Nulla cursus vehicula mauris, auctor interdum magna. Aenean lacinia dapibus tincidunt. Maecenas lobortis condimentum libero. Mauris pulvinar dui vitae eros efficitur placerat. Vivamus eu feugiat ipsum, et cursus ex. Morbi vulputate posuere bibendum. In posuere leo urna, ullamcorper sodales ante venenatis in. Donec tristique turpis eu fermentum ullamcorper. Nunc a consectetur eros, id bibendum ipsum. Phasellus efficitur auctor sagittis. Quisque euismod ipsum eu ante posuere dapibus. Aenean malesuada nisl vitae erat maximus, at gravida lorem vestibulum. Phasellus est libero, posuere vitae enim sit amet, facilisis congue turpis.\r\n\r\nAliquam hendrerit maximus sapien vitae luctus. Praesent iaculis lobortis nisl, eu aliquam mi venenatis ut. Aliquam at tempus tellus. Quisque viverra orci in enim tempor, et suscipit orci auctor. Fusce lacinia fringilla cursus. Donec laoreet posuere ante, sit amet porta urna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin tincidunt nibh eget diam ultrices, quis tincidunt quam elementum. Duis luctus in dui ac porta. Sed efficitur consectetur commodo. Aenean orci massa, tincidunt sed purus vitae, ultricies suscipit ipsum. Maecenas at urna elit. Phasellus rhoncus lectus augue, ut rutrum sem imperdiet id. Nunc vitae molestie turpis, ut egestas nulla.','2018-03-02 08:53:43','2018-03-02 08:53:43'),(19,11,13,'Big blog 4','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac libero id quam maximus porttitor. Phasellus aliquam rhoncus libero, nec tristique dolor porta et. Suspendisse semper elit in ante facilisis, dictum eleifend massa iaculis. Aenean sed leo non arcu fringilla luctus. Nullam sit amet varius nunc, sit amet finibus ligula. Aenean varius metus id nisl vehicula semper. Suspendisse potenti. Sed nunc metus, interdum eu ultricies vel, mollis sit amet elit. Nam congue ipsum ac ante maximus, non viverra magna malesuada.\r\n\r\nVestibulum facilisis, erat id porttitor vulputate, lacus mauris cursus mauris, ac pretium ante mi nec dolor. In hac habitasse platea dictumst. Nulla cursus vehicula mauris, auctor interdum magna. Aenean lacinia dapibus tincidunt. Maecenas lobortis condimentum libero. Mauris pulvinar dui vitae eros efficitur placerat. Vivamus eu feugiat ipsum, et cursus ex. Morbi vulputate posuere bibendum. In posuere leo urna, ullamcorper sodales ante venenatis in. Donec tristique turpis eu fermentum ullamcorper. Nunc a consectetur eros, id bibendum ipsum. Phasellus efficitur auctor sagittis. Quisque euismod ipsum eu ante posuere dapibus. Aenean malesuada nisl vitae erat maximus, at gravida lorem vestibulum. Phasellus est libero, posuere vitae enim sit amet, facilisis congue turpis.\r\n\r\nAliquam hendrerit maximus sapien vitae luctus. Praesent iaculis lobortis nisl, eu aliquam mi venenatis ut. Aliquam at tempus tellus. Quisque viverra orci in enim tempor, et suscipit orci auctor. Fusce lacinia fringilla cursus. Donec laoreet posuere ante, sit amet porta urna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin tincidunt nibh eget diam ultrices, quis tincidunt quam elementum. Duis luctus in dui ac porta. Sed efficitur consectetur commodo. Aenean orci massa, tincidunt sed purus vitae, ultricies suscipit ipsum. Maecenas at urna elit. Phasellus rhoncus lectus augue, ut rutrum sem imperdiet id. Nunc vitae molestie turpis, ut egestas nulla.','2018-03-02 08:54:13','2018-03-02 08:54:13'),(20,11,13,'Big blog 5','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac libero id quam maximus porttitor. Phasellus aliquam rhoncus libero, nec tristique dolor porta et. Suspendisse semper elit in ante facilisis, dictum eleifend massa iaculis. Aenean sed leo non arcu fringilla luctus. Nullam sit amet varius nunc, sit amet finibus ligula. Aenean varius metus id nisl vehicula semper. Suspendisse potenti. Sed nunc metus, interdum eu ultricies vel, mollis sit amet elit. Nam congue ipsum ac ante maximus, non viverra magna malesuada.\r\n\r\nVestibulum facilisis, erat id porttitor vulputate, lacus mauris cursus mauris, ac pretium ante mi nec dolor. In hac habitasse platea dictumst. Nulla cursus vehicula mauris, auctor interdum magna. Aenean lacinia dapibus tincidunt. Maecenas lobortis condimentum libero. Mauris pulvinar dui vitae eros efficitur placerat. Vivamus eu feugiat ipsum, et cursus ex. Morbi vulputate posuere bibendum. In posuere leo urna, ullamcorper sodales ante venenatis in. Donec tristique turpis eu fermentum ullamcorper. Nunc a consectetur eros, id bibendum ipsum. Phasellus efficitur auctor sagittis. Quisque euismod ipsum eu ante posuere dapibus. Aenean malesuada nisl vitae erat maximus, at gravida lorem vestibulum. Phasellus est libero, posuere vitae enim sit amet, facilisis congue turpis.\r\n\r\nAliquam hendrerit maximus sapien vitae luctus. Praesent iaculis lobortis nisl, eu aliquam mi venenatis ut. Aliquam at tempus tellus. Quisque viverra orci in enim tempor, et suscipit orci auctor. Fusce lacinia fringilla cursus. Donec laoreet posuere ante, sit amet porta urna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin tincidunt nibh eget diam ultrices, quis tincidunt quam elementum. Duis luctus in dui ac porta. Sed efficitur consectetur commodo. Aenean orci massa, tincidunt sed purus vitae, ultricies suscipit ipsum. Maecenas at urna elit. Phasellus rhoncus lectus augue, ut rutrum sem imperdiet id. Nunc vitae molestie turpis, ut egestas nulla.','2018-03-02 08:54:56','2018-03-02 08:54:56');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `blogs_title_unique` (`title`),
  KEY `blogs_user_id_foreign` (`user_id`),
  CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (1,1,'title','beschijving','2018-02-28 09:20:28','2018-02-28 09:20:28'),(2,2,'TestBlog','TestDiscription','2018-02-28 13:59:18','2018-02-28 13:59:18'),(3,5,'Test2','Test2','2018-02-28 14:25:51','2018-02-28 14:25:51'),(4,6,'test4articles','test4articles','2018-02-28 15:02:01','2018-02-28 15:02:01'),(5,7,'test0103','test0103','2018-03-01 08:32:36','2018-03-01 08:32:36'),(6,8,'dfasdfasf','sdfasdfasf','2018-03-01 10:16:27','2018-03-01 10:16:27'),(7,9,'dfgsdfgsdfg','fgdfgsdgf','2018-03-01 10:26:50','2018-03-01 10:26:50'),(8,10,'sdfasdfas','sasdfasdf','2018-03-01 10:39:14','2018-03-01 10:39:14'),(9,11,'wow','wow','2018-03-01 11:14:42','2018-03-01 11:14:42'),(10,12,'teset','teset','2018-03-01 14:46:23','2018-03-01 14:46:23'),(11,13,'The big Bloggg','Dit is mijn blog over CodeGorilla','2018-03-02 08:50:20','2018-03-02 08:50:20');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'fgadfgsdfg','2018-02-28 15:17:23','2018-02-28 15:17:23'),(2,'teset','2018-03-01 14:46:30','2018-03-01 14:46:30');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(11) NOT NULL,
  `body` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_02_19_155927_create_articles_table',1),(4,'2018_02_22_082727_create_comments_table',1),(5,'2018_02_22_135511_create_categories_table',1),(6,'2018_02_26_141947_create_blogs_table',1),(7,'2018_02_28_095018_create_paywalls_table',2),(8,'2018_02_28_143453_add_payed_to_users',2),(9,'2018_03_01_083130_add_dowloaded_to_paywalls',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paywall_user`
--

DROP TABLE IF EXISTS `paywall_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paywall_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `paywall_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `paywall_user_paywall_id_foreign` (`paywall_id`),
  KEY `paywall_user_user_id_foreign` (`user_id`),
  CONSTRAINT `paywall_user_paywall_id_foreign` FOREIGN KEY (`paywall_id`) REFERENCES `paywalls` (`id`),
  CONSTRAINT `paywall_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paywall_user`
--

LOCK TABLES `paywall_user` WRITE;
/*!40000 ALTER TABLE `paywall_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `paywall_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paywalls`
--

DROP TABLE IF EXISTS `paywalls`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paywalls` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `IBAN` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BIC` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mandaatid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mandaatdatum` datetime NOT NULL,
  `bedrag` decimal(5,2) NOT NULL,
  `naam` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beschrijving` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endtoendid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `downloaded` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paywalls`
--

LOCK TABLES `paywalls` WRITE;
/*!40000 ALTER TABLE `paywalls` DISABLE KEYS */;
INSERT INTO `paywalls` VALUES (1,'f234234523452345','','9375a9','2018-02-28 16:13:57',9.99,'test4','First Blog payment','',0,'2018-02-28 15:13:57','2018-02-28 15:13:57'),(2,'tesetiban','','28495a','2018-03-01 15:48:17',9.99,'teset','First Blog payment','',0,'2018-03-01 14:48:17','2018-03-01 14:48:17'),(3,'123456789','','38605a','2018-03-02 09:55:47',9.99,'dhr, EELKE','First Blog payment','',0,'2018-03-02 08:55:47','2018-03-02 08:55:47');
/*!40000 ALTER TABLE `paywalls` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payed` tinyint(1) NOT NULL DEFAULT '0',
  `owner` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'eelke','evandijk89@gmail.com','$2y$10$Yo5kl5gZXu84/rPWEpEDeO90CtzCjdHMxsmtWNGx6SieunSkoR9VK',0,0,'Zh4cBCwa42OeKYW8cPuYX22rH2GBpm61d8gzvyEUv8dVzx4nuRUScKH3TCMe','2018-02-28 09:20:28','2018-02-28 09:20:28'),(2,'TestName','Testemail@email.com','$2y$10$88UYjEJk9vy9NF6mzpoVre5589ERATZccHGajiJmTQ.Jn8Hw2gus6',0,0,'HG0eqNw4EpTO5nUOELh5TYhDd7UQjf2uiHkm6dwghmEKuXJCI8ohTyq3JzGm','2018-02-28 13:59:18','2018-02-28 13:59:18'),(4,'Owner','email@example.com','$2y$10$JpGjwn4THro6Bc3QIPEa7e8O7ka3PTuBn75zMEn1BVJ6kncbR5Xv2',0,1,'Glr9TUw7yKV4In4xGqYuQqxf7KeL2CViJv80SDS4k7pPczW7DghuyzckP42P',NULL,NULL),(5,'Test2','Test2@test.com','$2y$10$kvHmB9mqOL6JwNwVFfFaIecXGNji9q9QOARQV54Xj9IlYOlsf7FSu',0,0,'G9GogpOledsdKcKO8zBqNlm4QdjAZPiEj3iOP1iy6Pzoq3HwZfZGn9sNp6wS','2018-02-28 14:25:51','2018-02-28 14:25:51'),(6,'test4articles','test4@test.com','$2y$10$j.DAWYYizHNgw41US5bwue7pHiIpmPBvLKWks8Au.hJ/qMHPRpG8m',1,0,'vACtXzrkkEpuoefedpMepzAlv8FsMgTFT9nyIPNPOD9HKCK3J5HD1N3s9mQL','2018-02-28 15:02:01','2018-02-28 15:13:57'),(7,'test0103','test0103@email.com','$2y$10$xCHhmPYPwQKImbO2c.jaLumO.ufVrcHN9kITQLRPxTWXIzqlNWKs.',0,0,'DkaZ19NvZlQxhWZzvpoXCZ7koZwTyAqUbQnY1Yd1sL718BXw7Oa3RkbJznFf','2018-03-01 08:32:36','2018-03-01 08:32:36'),(8,'dfasdfa','asdfafdasd@email.com','$2y$10$zs8koEo25oJAmz9.3MIWt.fvsuBlvCDjigJUasBnI8RS1/TUJVB8W',0,0,'7cYEjdb4cLKzZAv2OLic2Rm65u6hEKXGmq1Yswd4g6IcAXzhkluKF7UUmPMA','2018-03-01 10:16:27','2018-03-01 10:16:27'),(9,'gsdfvgdfgs','sadf@email.com','$2y$10$h4SmNRa0CEyi28OKaYGfdu8GMG.1iXSymyvxplQ6mK0.3lm3fsuVy',0,0,'PauhZTWnKZCWGfk3ttVIoJkg3b1FutS6zKkXYuwRlKC1KzYqFs9y4n22ioe7','2018-03-01 10:26:50','2018-03-01 10:26:50'),(10,'\\aedfasd','dfasd@email.com','$2y$10$spLMxWMqD.OpbDRRi/OR7.pRNr6r5NiJ36HjNsmM1omJkuM9F7sZO',0,0,'5hXtaoQSD3h4OlOHDSEKnyt9z3lBWWI5h9aHAtwbJEHnXzsl1KXwNHuvkZIx','2018-03-01 10:39:14','2018-03-01 10:39:14'),(11,'wow','wow@example.com','$2y$10$5C8XbU9DHhBVe7Qvi0OGpOtUTqerVsItwchixdllR5Rpi9fqMqxNq',0,0,'RmCN90zZRLFVLf1M6Z2Ykn1gSm3TL4QkPD6WNjf0ONfQ5jwFohyUB9oCV8o2','2018-03-01 11:14:41','2018-03-01 11:14:41'),(12,'teset','teset@email.com','$2y$10$LzjcIHzoBiVhvhjo8g2urugZnpOWB5PiB4iPKVp98wZ8fDCp6TKQm',1,0,'KAOIpREmibBFzy4BdrOUbgyNYLJigl4jpZPfW1rmq1x6QcJmOcQ4X8bSfPLI','2018-03-01 14:46:22','2018-03-01 14:48:17'),(13,'Eelke12','e.vandijk02@hotmail.com','$2y$10$oPL/TG48EjAs8IvAhVS4/O9vnCAXXFr7HDjtqsamKBr3dYpU7i4ve',1,0,'WTBBYQ68RyhWxS0fJeGgAXL0vjNfOlHsHdMFteijXg7Zf5l5LjOT73S1EtgH','2018-03-02 08:50:20','2018-03-02 08:55:48'),(15,'Admin','test@example.com','$2y$10$zNs9o1yEsHV7daHyjHJ4fOOUIK/XbFN3P.71QTrWFRBYfG8/HRZHm',0,1,NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-02 16:22:26

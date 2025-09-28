-- MySQL dump 10.13  Distrib 9.4.0, for macos26.0 (arm64)
--
-- Host: localhost    Database: db_game_studios
-- ------------------------------------------------------
-- Server version	9.3.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
INSERT INTO `cache` VALUES ('laravel-cache-01a7cc3687a0c7841b938f958b4cae33','i:1;',1759089541),('laravel-cache-01a7cc3687a0c7841b938f958b4cae33:timer','i:1759089541;',1759089541);
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `games`
--

DROP TABLE IF EXISTS `games`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `games` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `studio_id` bigint unsigned NOT NULL,
  `game_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `released_date` date NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `genre` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `games_studio_id_foreign` (`studio_id`),
  CONSTRAINT `games_studio_id_foreign` FOREIGN KEY (`studio_id`) REFERENCES `studios` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `games`
--

LOCK TABLES `games` WRITE;
/*!40000 ALTER TABLE `games` DISABLE KEYS */;
INSERT INTO `games` VALUES (1,1,'Little Nightmares','https://m.media-amazon.com/images/I/91HQ+aAlwTL._UF1000,1000_QL80_.jpg','2017-04-28','A suspense-adventure game where you help Six escape from a mysterious vessel.','Puzzle-platform, horror','2025-09-28 18:57:53','2025-09-28 18:57:53'),(2,1,'Little Nightmares II','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_-PLuMzlJznsp6zLkkcEMcI7ISfHf7iRH7A&s','2021-02-11','A boy named Mono explores a distorted world, joined by Six, from the first game.','Puzzle-platform, horror','2025-09-28 18:57:53','2025-09-28 18:57:53'),(3,2,'Dark Souls','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRto1RbusWG71j29hA6eCnhtf5sZwJFMYLT2g&s','2011-09-22','A dark fantasy RPG known for its challenging combat and deep lore.','Action RPG','2025-09-28 18:57:53','2025-09-28 18:57:53'),(4,2,'Bloodborne','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdc9EbGYa7RtQrtkrxfbDjKLErr-R_HhwAfQ&s','2015-03-24','A gothic action RPG set in the cursed city of Yharnam, plagued by beasts.','Action RPG','2025-09-28 18:57:53','2025-09-28 18:57:53'),(5,2,'Sekiro: Shadows Die Twice','https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/814380/capsule_616x353.jpg?t=1754933982','2019-03-22','Play as a shinobi on a quest to rescue his lord in Sengoku-era Japan.','Action-adventure','2025-09-28 18:57:53','2025-09-28 18:57:53'),(6,2,'Elden Ring','https://image.api.playstation.com/vulcan/ap/rnd/202110/2000/M2IBVSWR2ao2oHizClzsUaYL.png','2022-02-25','Explore the Lands Between in a vast open world crafted by FromSoftware and George R. R. Martin.','Action RPG, Open world','2025-09-28 18:57:53','2025-09-28 18:57:53'),(7,3,'Hollow Knight','https://upload.wikimedia.org/wikipedia/en/thumb/0/04/Hollow_Knight_first_cover_art.webp/250px-Hollow_Knight_first_cover_art.webp.png','2017-02-24','A mysterious knight explores the vast, ruined kingdom of Hallownest.','Metroidvania, action-adventure','2025-09-28 18:57:53','2025-09-28 18:57:53'),(8,3,'Silksong','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8UsX9y7SAirCr8-c5Y5OQO66Rh6JwX3-1Tw&s','2025-09-04','Explore, fight and survive.','Metroidvania, action-adventure','2025-09-28 18:57:53','2025-09-28 18:57:53'),(9,4,'The Legend of Zelda: Breath of the Wild','https://upload.wikimedia.org/wikipedia/en/thumb/c/c6/The_Legend_of_Zelda_Breath_of_the_Wild.jpg/250px-The_Legend_of_Zelda_Breath_of_the_Wild.jpg','2017-03-03','An open-world Zelda adventure redefining exploration and freedom.','Action-adventure, Open world','2025-09-28 18:57:53','2025-09-28 18:57:53'),(10,4,'Super Mario Odyssey','https://upload.wikimedia.org/wikipedia/pt/9/99/Super_Mario_Odyssey_Capa.png','2017-10-27','Mario embarks on a globe-trotting adventure with his new friend Cappy.','Platformer','2025-09-28 18:57:53','2025-09-28 18:57:53'),(11,4,'Metroid Dread','https://www.nintendo.com/eu/media/images/10_share_images/games_15/nintendo_switch_4/H2x1_NSwitch_MetroidDread_image1600w.jpg','2021-10-08','Samus faces new mechanical threats on the planet ZDR.','Action-adventure, Metroidvania','2025-09-28 18:57:53','2025-09-28 18:57:53'),(12,5,'Final Fantasy VII Remake','https://external-preview.redd.it/final-fantasy-7-remake-part-3-development-is-going-v0-5j3ZMJxllEmNJVF4SI7pFuIHz_6q_Txt8v3A-q--Bj0.jpeg?auto=webp&s=87f4ce062e32db8c631efe87af747dae84d66e51','2020-04-10','A modern reimagining of the legendary Final Fantasy VII.','JRPG','2025-09-28 18:57:53','2025-09-28 18:57:53'),(13,5,'Final Fantasy XVI','https://upload.wikimedia.org/wikipedia/en/0/00/Final_Fantasy_XVI_cover_art.png','2023-06-22','A dark fantasy tale of dominance and Eikons in Valisthea.','Action RPG','2025-09-28 18:57:53','2025-09-28 18:57:53'),(14,5,'Dragon Quest XI','https://image.api.playstation.com/vulcan/ap/rnd/202007/1607/7PxHVp3tCaQQkVeHalUtPcND.png','2018-09-04','Follow the Luminary in this classic turn-based Dragon Quest adventure.','JRPG','2025-09-28 18:57:53','2025-09-28 18:57:53'),(15,6,'Persona 5','https://image.api.playstation.com/cdn/EP4062/CUSA06638_00/0fSaYhFhEVP183JLTwVec7qkzmaHNMS2.png?w=440','2017-04-04','Join the Phantom Thieves of Hearts to change corrupt minds.','JRPG, social simulation','2025-09-28 18:57:53','2025-09-28 18:57:53'),(16,6,'Persona 4','https://upload.wikimedia.org/wikipedia/en/1/10/Shin_Megami_Tensei_Persona_4.jpg','2020-06-10','A mysterious string of murders is taking place.','JRPG, social simulation','2025-09-28 18:57:53','2025-09-28 18:57:53'),(17,7,'Grand Theft Auto V','https://upload.wikimedia.org/wikipedia/pt/8/80/Grand_Theft_Auto_V_capa.png','2013-09-17','Switch between three characters in the vast city of Los Santos.','Action-adventure, Open world','2025-09-28 18:57:53','2025-09-28 18:57:53'),(18,7,'Red Dead Redemption 2','https://image.api.playstation.com/gs2-sec/appkgo/prod/CUSA08519_00/12/i_3da1cf7c41dc7652f9b639e1680d96436773658668c7dc3930c441291095713b/i/icon0.png','2018-10-26','An epic tale of life in America’s unforgiving heartland.','Action-adventure, Open world','2025-09-28 18:57:53','2025-09-28 18:57:53'),(19,8,'Resident Evil 4 (Remake)','https://upload.wikimedia.org/wikipedia/en/9/98/Resident_Evil_4_remake_cover_art.jpg','2023-03-24','Modern remake of the classic survival horror set in rural Spain.','Survival horror','2025-09-28 18:58:39','2025-09-28 18:58:39'),(20,8,'Monster Hunter: World','https://upload.wikimedia.org/wikipedia/en/5/5c/Monster_Hunter_World_cover_art.jpg','2018-01-26','Hunt massive monsters across living ecosystems solo or with friends.','Action RPG','2025-09-28 18:58:39','2025-09-28 18:58:39'),(21,8,'Devil May Cry 5','https://upload.wikimedia.org/wikipedia/en/9/9a/Devil_May_Cry_5.jpg','2019-03-08','Hack-and-slash action with multiple playable demon hunters.','Action','2025-09-28 18:58:39','2025-09-28 18:58:39'),(22,8,'Street Fighter 6','https://upload.wikimedia.org/wikipedia/en/3/3b/Street_Fighter_6_box_art.jpg','2023-06-02','Next-gen fighting game with World Tour and Battle Hub modes.','Fighting','2025-09-28 18:58:39','2025-09-28 18:58:39'),(23,8,'Mega Man 11','https://upload.wikimedia.org/wikipedia/en/6/6a/Mega_Man_11.jpg','2018-10-02','Classic platforming returns with the new Double Gear system.','Platformer','2025-09-28 18:58:39','2025-09-28 18:58:39');
/*!40000 ALTER TABLE `games` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2025_09_21_111634_create_studios_table',1),(5,'2025_09_21_111654_create_games_table',1),(6,'2025_09_21_111718_add_role_to_users_table',1),(7,'2025_09_21_132029_add_description_to_studios_table',1),(8,'2025_09_21_154205_add_description_to_games_table',1),(9,'2025_09_21_154244_add_genre_to_games_table',1),(10,'2025_09_21_175049_add_timestamps_to_games_table',1),(11,'2025_09_28_114949_add_two_factor_columns_to_users_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('eM7UnliKUacIPdSmWbttCg5p6EFTygE9oyh4GYlI',1,'127.0.0.1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/26.0 Safari/605.1.15','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWEhTcWhLSXhLWXNMSE1xZE9LVlU3cFhYeUkxSEY0U3dFT3hhZndvVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==',1759092820);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `studios`
--

DROP TABLE IF EXISTS `studios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `studios` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `studio_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `studios`
--

LOCK TABLES `studios` WRITE;
/*!40000 ALTER TABLE `studios` DISABLE KEYS */;
INSERT INTO `studios` VALUES (1,'Tarsier Studios','https://upload.wikimedia.org/wikipedia/commons/7/75/Tarsier_Studios.svg','2025-09-28 18:57:53','2025-09-28 18:57:53','Swedish indie studio known for Little Nightmares.'),(2,'FromSoftware','https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Fromsoftware_logo.svg/2560px-Fromsoftware_logo.svg.png','2025-09-28 18:57:53','2025-09-28 18:57:53','Japanese studio behind Dark Souls, Elden Ring.'),(3,'Team Cherry','https://upload.wikimedia.org/wikipedia/commons/3/3e/Team_cherry_Logo_Red.png','2025-09-28 18:57:53','2025-09-28 18:57:53','Australian indie studio known for Hollow Knight.'),(4,'Nintendo','https://cdn.freebiesupply.com/logos/large/2x/nintendo-2-logo-png-transparent.png','2025-09-28 18:57:53','2025-09-28 18:57:53','Japanese gaming giant, creators of Mario, Zelda, and more.'),(5,'Square Enix','https://download.logo.wine/logo/Square_Enix/Square_Enix-Logo.wine.png','2025-09-28 18:57:53','2025-09-28 18:57:53','Japanese developer known for Final Fantasy, Dragon Quest.'),(6,'Atlus','https://download.logo.wine/logo/Atlus/Atlus-Logo.wine.png','2025-09-28 18:57:53','2025-09-28 18:57:53','Japanese studio famous for the Persona series.'),(7,'Rockstar','https://upload.wikimedia.org/wikipedia/commons/9/97/Rockstar_logo_for_tweets.png','2025-09-28 18:57:53','2025-09-28 18:57:53','American studio behind Grand Theft Auto, Red Dead Redemption.'),(8,'Capcom','https://upload.wikimedia.org/wikipedia/commons/6/6a/Capcom_logo.svg','2025-09-28 18:58:06','2025-09-28 18:58:06','Japanese developer and publisher known for Resident Evil and Street Fighter.'),(9,'Naughty Dog','https://upload.wikimedia.org/wikipedia/commons/0/0d/Naughty_Dog.png','2025-09-28 18:58:06','2025-09-28 18:58:06','US studio behind Uncharted and The Last of Us.'),(10,'Bethesda Game Studios','https://upload.wikimedia.org/wikipedia/commons/3/3b/Bethesda_Game_Studios_logo.svg','2025-09-28 18:58:06','2025-09-28 18:58:06','Creators of The Elder Scrolls and Fallout series.'),(11,'Blizzard Entertainment','https://upload.wikimedia.org/wikipedia/commons/3/30/Blizzard_Entertainment_Logo_2015.svg','2025-09-28 18:58:06','2025-09-28 18:58:06','Studio known for Warcraft, StarCraft and Overwatch.'),(12,'CD Projekt Red','https://upload.wikimedia.org/wikipedia/en/1/15/CD_Projekt_logo.svg','2025-09-28 18:58:06','2025-09-28 18:58:06','Polish studio behind The Witcher and Cyberpunk.'),(13,'Insomniac Games','https://upload.wikimedia.org/wikipedia/commons/9/9f/Insomniac_Games_2014_logo.svg','2025-09-28 18:58:06','2025-09-28 18:58:06','Known for Ratchet & Clank and Marvel’s Spider-Man.'),(14,'Bandai Namco','https://upload.wikimedia.org/wikipedia/commons/5/59/Bandai_Namco_Holdings_logo.svg','2025-09-28 18:58:06','2025-09-28 18:58:06','Publisher of Tekken, Tales and Elden Ring (co-publisher).'),(15,'Sega','https://upload.wikimedia.org/wikipedia/commons/6/6b/SEGA_logo.svg','2025-09-28 18:58:06','2025-09-28 18:58:06','Japanese company behind Sonic the Hedgehog and Yakuza/Like a Dragon.'),(16,'Larian Studios','https://upload.wikimedia.org/wikipedia/en/1/1c/Larian_Studios_logo.png','2025-09-28 18:58:06','2025-09-28 18:58:06','Belgian studio known for Divinity and Baldur’s Gate 3.'),(17,'Remedy Entertainment','https://upload.wikimedia.org/wikipedia/commons/2/2a/Remedy_Entertainment_logo.svg','2025-09-28 18:58:06','2025-09-28 18:58:06','Finnish studio behind Max Payne, Control and Alan Wake.');
/*!40000 ALTER TABLE `studios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Sara','sara@email.com','2025-09-28 18:57:52','$2y$12$4PzYdnSH8uOyIPLG9wxBruxuhX/4HDvAawcx7P3J4uVE10v7OHClu',NULL,NULL,NULL,'PtkAastGw1','2025-09-28 18:57:53','2025-09-28 18:57:53','user');
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

-- Dump completed on 2025-09-28 22:13:05

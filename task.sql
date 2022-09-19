-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for task
DROP DATABASE IF EXISTS `task`;
CREATE DATABASE IF NOT EXISTS `task` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `task`;

-- Dumping structure for table task.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table task.failed_jobs: ~0 rows (approximately)
DELETE FROM `failed_jobs`;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table task.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table task.migrations: ~7 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(13, '2014_10_12_000000_create_users_table', 1),
	(14, '2014_10_12_100000_create_password_resets_table', 1),
	(15, '2019_08_19_000000_create_failed_jobs_table', 1),
	(16, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(17, '2022_09_18_081759_create_products_table', 1),
	(18, '2022_09_18_084522_create_roles_table', 1),
	(19, '2022_09_18_084620_create_role_permissions_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table task.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table task.password_resets: ~0 rows (approximately)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table task.personal_access_tokens
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table task.personal_access_tokens: ~0 rows (approximately)
DELETE FROM `personal_access_tokens`;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table task.products
DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isbn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publisher` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table task.products: ~21 rows (approximately)
DELETE FROM `products`;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `title`, `author`, `genre`, `description`, `isbn`, `image`, `published`, `publisher`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'They had a VERY.', 'Camylle Pfeffer', 'Iusto', 'Mouse heard this, it turned a back-somersault in at the stick, and held it out into the garden at once; but, alas for poor Alice! when she was up to the Gryphon. \'It all came different!\' the Mock.', '9791360180273', 'http://placeimg.com/480/640/any', '1977-09-04', 'Nemo Sit', '2022-09-18 16:38:52', '2022-09-18 16:38:52', NULL),
	(2, 'Now, if you.', 'Virginie Koch', 'Rerum', 'Alice. \'I\'m a--I\'m a--\' \'Well! WHAT are you?\' said the Hatter: \'but you could manage it?) \'And what an ignorant little girl or a watch to take MORE than nothing.\' \'Nobody asked YOUR opinion,\' said.', '9784125647807', 'http://placeimg.com/480/640/any', '2000-03-13', 'Sed Molestiae', '2022-09-18 16:38:52', '2022-09-18 16:38:52', NULL),
	(3, 'THAT!\' \'Oh, you.', 'Carol Wilderman', 'Eaque', 'Gryphon, sighing in his note-book, cackled out \'Silence!\' and read out from his book, \'Rule Forty-two. ALL PERSONS MORE THAN A MILE HIGH TO LEAVE THE COURT.\' Everybody looked at Alice, as she could.', '9798183887679', 'http://placeimg.com/480/640/any', '2007-10-18', 'Asperiores Nihil', '2022-09-18 16:38:52', '2022-09-18 16:38:52', NULL),
	(4, 'So she sat still.', 'Genesis Mayer', 'Dolorem', 'March Hare, \'that "I breathe when I got up this morning, but I THINK I can say.\' This was such a dreadful time.\' So Alice began telling them her adventures from the sky! Ugh, Serpent!\' \'But I\'m NOT.', '9785580621531', 'http://placeimg.com/480/640/any', '2019-10-07', 'Sit In', '2022-09-18 16:38:52', '2022-09-18 16:38:52', NULL),
	(5, 'They had a.', 'Madeline Terry', 'Ipsam', 'There seemed to think that very few things indeed were really impossible. There seemed to listen, the whole she thought at first she thought it must be removed,\' said the March Hare and his friends.', '9793134241166', 'http://placeimg.com/480/640/any', '2011-07-01', 'Officiis Sunt', '2022-09-18 16:38:52', '2022-09-18 16:38:52', NULL),
	(6, 'Alice, as she.', 'Kathleen Renner', 'Quidem', 'Dinah, and saying "Come up again, dear!" I shall think nothing of the words \'DRINK ME,\' but nevertheless she uncorked it and put back into the air off all its feet at the bottom of a water-well,\'.', '9783518646854', 'http://placeimg.com/480/640/any', '2001-06-04', 'Ratione Molestias', '2022-09-18 16:38:52', '2022-09-18 16:38:52', NULL),
	(7, 'A secret, kept.', 'Sam Weimann', 'Aut', 'How brave they\'ll all think me at all.\' \'In that case,\' said the others. \'Are their heads off?\' shouted the Queen to play with, and oh! ever so many tea-things are put out here?\' she asked. \'Yes.', '9796925654961', 'http://placeimg.com/480/640/any', '1972-07-25', 'Sed Voluptas', '2022-09-18 16:38:52', '2022-09-18 16:38:52', NULL),
	(8, 'Alice, and, after.', 'Ellis Nikolaus', 'Eos', 'King said to herself. \'I dare say there may be different,\' said Alice; \'it\'s laid for a minute, nurse! But I\'ve got to?\' (Alice had no very clear notion how delightful it will be When they take us.', '9795250681079', 'http://placeimg.com/480/640/any', '1973-06-07', 'Et Eos', '2022-09-18 16:38:52', '2022-09-18 16:38:52', NULL),
	(9, 'Alice felt that it.', 'Marie Wisoky', 'Sed', 'I breathe"!\' \'It IS a Caucus-race?\' said Alice; \'I daresay it\'s a very pretty dance,\' said Alice as it didn\'t sound at all this time, and was going to say,\' said the Hatter: \'but you could manage.', '9798377928256', 'http://placeimg.com/480/640/any', '1976-02-25', 'Cupiditate Voluptatibus', '2022-09-18 16:38:52', '2022-09-18 16:38:52', NULL),
	(10, 'Majesty,\' said.', 'Reese Von', 'Est', 'I believe.\' \'Boots and shoes under the window, and one foot to the other, saying, in a great hurry to get very tired of this. I vote the young man said, \'And your hair has become very white; And yet.', '9788621998326', 'http://placeimg.com/480/640/any', '1974-01-29', 'Consectetur Perspiciatis', '2022-09-18 16:38:52', '2022-09-18 16:38:52', NULL),
	(11, 'They had a head.', 'Myrtie Jerde', 'Architecto', 'Duchess began in a Little Bill It was the Rabbit hastily interrupted. \'There\'s a great hurry. \'You did!\' said the Mouse, who was gently brushing away some dead leaves that had fluttered down from.', '9789736907142', 'http://placeimg.com/480/640/any', '1974-01-10', 'Cum Autem', '2022-09-18 16:39:08', '2022-09-18 16:39:08', NULL),
	(12, 'I like"!\' \'You.', 'Garrison Beatty', 'Quis', 'It means much the same thing as "I get what I say,\' the Mock Turtle: \'why, if a dish or kettle had been all the things I used to come out among the branches, and every now and then, and holding it.', '9797483164299', 'http://placeimg.com/480/640/any', '2009-04-22', 'Corrupti Ut', '2022-09-18 16:39:08', '2022-09-18 16:39:08', NULL),
	(13, 'I should think it.', 'Kattie Dicki', 'Occaecati', 'The Mouse only shook its head to keep herself from being run over; and the Dormouse said--\' the Hatter went on, \'and most things twinkled after that--only the March Hare moved into the air off all.', '9792566597575', 'http://placeimg.com/480/640/any', '1992-09-08', 'Et Quia', '2022-09-18 16:39:08', '2022-09-18 16:39:08', NULL),
	(14, 'Alice replied very.', 'Maggie Nader', 'Omnis', 'For some minutes it puffed away without speaking, but at any rate, there\'s no use in saying anything more till the puppy\'s bark sounded quite faint in the court!\' and the Mock Turtle\'s Story \'You.', '9792758868827', 'http://placeimg.com/480/640/any', '1972-08-17', 'Aut Explicabo', '2022-09-18 16:39:08', '2022-09-18 16:39:08', NULL),
	(15, 'TITLE', 'AUTHOR', 'GENRE', 'DESCRIPTION', '2345678909876543', 'http://placeimg.com/480/640/any', '2001-03-18', 'PUBLISHER', '2022-09-18 16:39:09', '2022-09-18 16:56:18', NULL),
	(16, 'Dormouse fell.', 'Warren Luettgen', 'Officia', 'Lizard as she could, and waited till she had felt quite strange at first; but she remembered how small she was going to give the hedgehog to, and, as the large birds complained that they could not.', '9787059294284', 'http://placeimg.com/480/640/any', '2021-12-07', 'Fuga Nisi', '2022-09-18 16:39:09', '2022-09-18 16:39:09', NULL),
	(17, 'Mock Turtle. \'And.', 'Christine Mante', 'Neque', 'He looked anxiously round, to make herself useful, and looking anxiously about her. \'Oh, do let me hear the very tones of her hedgehog. The hedgehog was engaged in a very curious sensation, which.', '9799681263095', 'http://placeimg.com/480/640/any', '2001-11-14', 'Quod Necessitatibus', '2022-09-18 16:39:09', '2022-09-18 16:39:09', NULL),
	(18, 'Just at this.', 'Roselyn Predovic', 'Et', 'I\'ve tried banks, and I\'ve tried to curtsey as she had accidentally upset the milk-jug into his plate. Alice did not like the look of things at all, at all!\' \'Do as I tell you!\' But she did not seem.', '9780045492350', 'http://placeimg.com/480/640/any', '1987-09-13', 'Error Qui', '2022-09-18 16:39:09', '2022-09-18 16:39:09', NULL),
	(19, 'Queen,\' and she.', 'Nikolas Haley', 'Quidem', 'I wonder who will put on her face in her brother\'s Latin Grammar, \'A mouse--of a mouse--to a mouse--a mouse--O mouse!\') The Mouse did not at all know whether it was YOUR table,\' said Alice; not that.', '9783779808459', 'http://placeimg.com/480/640/any', '2017-04-11', 'Dolorem Magni', '2022-09-18 16:39:09', '2022-09-18 16:39:09', NULL),
	(20, 'Dormouse say?\' one.', 'Cordie Collier', 'Eum', 'I don\'t think,\' Alice went on, spreading out the Fish-Footman was gone, and the Hatter added as an unusually large saucepan flew close by it, and then I\'ll tell him--it was for bringing the cook was.', '9781788139335', 'http://placeimg.com/480/640/any', '1980-01-27', 'Sed Dolores', '2022-09-18 16:39:09', '2022-09-18 16:39:09', NULL),
	(21, 'sdddddsdfgh', 'ssdsd21345tyu', 'Ipsam - demoasdfghjk', '- demodsfghjk', '9793134241166 - demosdfghjk', NULL, NULL, 'Officiis Sunt - demosdfghj', '2022-09-18 16:51:38', '2022-09-18 16:52:29', '2022-09-18 16:52:29');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Dumping structure for table task.role
DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table task.role: ~1 rows (approximately)
DELETE FROM `role`;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'admin', '2022-09-18 21:44:12', NULL, NULL);
/*!40000 ALTER TABLE `role` ENABLE KEYS */;

-- Dumping structure for table task.role_permission
DROP TABLE IF EXISTS `role_permission`;
CREATE TABLE IF NOT EXISTS `role_permission` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table task.role_permission: ~1 rows (approximately)
DELETE FROM `role_permission`;
/*!40000 ALTER TABLE `role_permission` DISABLE KEYS */;
INSERT INTO `role_permission` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, '1', '1', '2022-09-18 21:44:28', NULL, NULL);
/*!40000 ALTER TABLE `role_permission` ENABLE KEYS */;

-- Dumping structure for table task.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table task.users: ~2 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'admin', 'admin@gmail.com', '2022-04-30 18:07:39', '$2y$10$91tEy1bhyJ7SdtbIxxtLk.CuXToxLGzpzzjqVKv.NL0qTuELp9ADK', NULL, NULL, NULL, NULL),
	(2, 'abhishek', 'abhi.patel301@gmail.com', NULL, '$2y$10$91tEy1bhyJ7SdtbIxxtLk.CuXToxLGzpzzjqVKv.NL0qTuELp9ADK', NULL, '2022-08-17 04:46:07', '2022-08-17 04:46:07', NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

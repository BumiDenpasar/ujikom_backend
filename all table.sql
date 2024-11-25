-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table ujikom_backend.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `img` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ujikom_backend.categories: ~3 rows (approximately)
INSERT INTO `categories` (`id`, `img`, `title`, `created_at`, `updated_at`) VALUES
	(1, '/storage/images/WY6G7aqz8IuMP6w1VtjLvZPKu7qyOjdOXIupxaSj.jpg', 'Teknik Otomotif', NULL, '2024-11-09 08:43:27'),
	(2, '/storage/images/j0YBbWYqCK9uqop2CbXmfFAn4BzXpivxklrjdRmW.jpg', 'Lomba', '2024-10-30 21:01:55', '2024-11-09 08:44:14'),
	(3, '/storage/images/cgIEx7SmhJg0ABFSkLNj6OSnhrTO8h1vpXMyemzW.jpg', 'Paskibraka', '2024-10-30 23:55:03', '2024-10-30 23:55:03');

-- Dumping structure for table ujikom_backend.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_post_id_foreign` (`post_id`),
  CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ujikom_backend.comments: ~4 rows (approximately)
INSERT INTO `comments` (`id`, `name`, `text`, `post_id`, `created_at`, `updated_at`) VALUES
	(3, 'Bumi Denpasar', 'Great News!', 2, '2024-11-11 10:08:51', '2024-11-11 10:08:52'),
	(4, 'Fachru Buchori', 'Great app, good job', 3, '2024-11-11 10:09:17', '2024-11-11 10:09:17'),
	(6, 'Fahrizal Aldi', 'Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet', 2, '2024-11-11 15:20:02', '2024-11-11 15:20:02'),
	(7, 'SMKN 4 Bogor', 'test comment', 2, '2024-11-19 05:57:49', '2024-11-19 05:57:49'),
	(8, 'Bumi Denpasar', 'cool!', 2, '2024-11-20 19:25:33', '2024-11-20 19:25:33');

-- Dumping structure for table ujikom_backend.events
CREATE TABLE IF NOT EXISTS `events` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `social_media` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `date` date NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ujikom_backend.events: ~2 rows (approximately)
INSERT INTO `events` (`id`, `name`, `short_desc`, `desc`, `img`, `social_media`, `date`, `time_start`, `time_end`, `created_at`, `updated_at`) VALUES
	(11, 'Trans4Krab', 'Job Fair dan edu fair', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\r\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\r\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\r\ntenetur error, harum nesciunt ipsum debitis quas aliquid.', '/storage/images/M2jLN8GHMWNmdv3n8JTSlRdSPassY5FHR2mNF0g4.jpg', 'https://www.instagram.com/transforkr4b', '2024-11-30', '10:00:00', '14:00:00', '2024-11-09 04:44:33', '2024-11-20 19:31:09'),
	(12, 'Launching Aplikasi 4Hype', 'Launching aplikasi', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\r\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\r\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\r\ntenetur error, harum nesciunt ipsum debitis quas aliquid.', '/storage/images/aDcPNPhTuYJEIvcUTQ2oHy2RIZjxgTwcJJ6Lppd8.png', 'https://www.instagram.com/transforkr4b', '2024-11-29', '10:10:00', '10:30:00', '2024-11-10 19:34:31', '2024-11-20 19:31:26');

-- Dumping structure for table ujikom_backend.galleries
CREATE TABLE IF NOT EXISTS `galleries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ujikom_backend.galleries: ~3 rows (approximately)
INSERT INTO `galleries` (`id`, `name`, `desc`, `img`, `created_at`, `updated_at`) VALUES
	(2, 'Kegiatan P5', 'Lorem ipsum dolor sit amet, usu at dicam dolore inimicus. Ad voluptua definiebas vim, te vim omnes postulant. Oblique facilisis id qui. Eros latine pertinax no pri, his ei lorem nominati. Malis tractatos mnesarchum cum ut, at cibo sale pro. Qui ex nibh augue vituperata, ut nec fabulas evertitur vituperata. In eos natum populo malorum, equidem ancillae invenire nec ut, no his quas tation ponderum.', 'https://1.bp.blogspot.com/-jVGOTFTcteo/WkzpwPyj3tI/AAAAAAAAPBE/2BAOozJ1ttUimdoMZQEthnr6sy0i_2NtwCLcBGAs/s1600/siswa%2Bsd.jpg', NULL, NULL),
	(3, 'Before and after SMKN 4 Bogor', 'Edited Before and after SMKN 4 Bogor', '/storage/images/9YcDxRCwxPHGYSIuP2lxOtpxKLv3RYz0WGstu1U4.jpg', '2024-10-29 08:29:06', '2024-10-29 08:30:47');

-- Dumping structure for table ujikom_backend.gallery_images
CREATE TABLE IF NOT EXISTS `gallery_images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `gallery_images_gallery_id_foreign` (`gallery_id`),
  CONSTRAINT `gallery_images_gallery_id_foreign` FOREIGN KEY (`gallery_id`) REFERENCES `galleries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ujikom_backend.gallery_images: ~2 rows (approximately)
INSERT INTO `gallery_images` (`id`, `image`, `gallery_id`, `created_at`, `updated_at`) VALUES
	(16, '/storage/images/6tcU8GBsdgUrg3cahVmGVHBtQxApZgNzrfoIoEzu.jpg', 3, '2024-11-10 04:01:07', '2024-11-10 04:01:07'),
	(18, '/storage/images/zuVv7JTjIKBz4fE4ITjgCoxDoMQ4uhivnRPkOc2D.jpg', 2, '2024-11-20 19:27:52', '2024-11-20 19:27:52'),
	(19, '/storage/images/cNLkyjinKpIyICL2LGEK6MW3rplrGogASKXBYx0M.jpg', 2, '2024-11-20 19:28:08', '2024-11-20 19:28:08');

-- Dumping structure for table ujikom_backend.images
CREATE TABLE IF NOT EXISTS `images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `images_post_id_foreign` (`post_id`),
  CONSTRAINT `images_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ujikom_backend.images: ~2 rows (approximately)
INSERT INTO `images` (`id`, `image`, `post_id`, `created_at`, `updated_at`) VALUES
	(3, 'storage/images/vPokrOvSH38hIzsdazABVSJD8E5JcIx0YDfOGZZc.jpg', 2, '2024-10-30 23:51:25', '2024-10-30 23:51:25'),
	(4, 'storage/images/ViTSdQvTNonzeQyfRcfM4Zck3IGczeQDOH46ToDe.jpg', 2, '2024-10-30 23:51:30', '2024-10-30 23:51:30');

-- Dumping structure for table ujikom_backend.love
CREATE TABLE IF NOT EXISTS `love` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `post_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `love_user_id_foreign` (`user_id`),
  KEY `love_post_id_foreign` (`post_id`),
  CONSTRAINT `love_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `love_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ujikom_backend.love: ~4 rows (approximately)
INSERT INTO `love` (`id`, `user_id`, `post_id`, `created_at`, `updated_at`) VALUES
	(1, 1, 3, '2024-11-05 18:29:26', '2024-11-05 18:29:26'),
	(5, 6, 3, '2024-11-20 07:47:25', '2024-11-20 07:47:25'),
	(6, 6, 6, '2024-11-20 07:47:31', '2024-11-20 07:47:31'),
	(7, 3, 2, '2024-11-20 18:56:58', '2024-11-20 18:56:58'),
	(8, 6, 2, '2024-11-20 19:25:18', '2024-11-20 19:25:18');

-- Dumping structure for table ujikom_backend.majors
CREATE TABLE IF NOT EXISTS `majors` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ujikom_backend.majors: ~4 rows (approximately)
INSERT INTO `majors` (`id`, `name`, `desc`, `link`, `img`, `created_at`, `updated_at`) VALUES
	(1, 'PPLG', 'Pengembangan Perangkat Lunak dan Gim merupakan kompetensi keahlian yang awal mulanya bernama Rekayasa Perangkat Lunak (RPL). Sesuai dengan namanya keahlian yang dipelajari pada kompetensi ini pun berkisar seputar pembuatan perangkat lunak (software) dan pembuatan gim.', 'https://www.instagram.com/kr4bat_pplg', '/assets/images/pplg.webp', '2024-11-18 02:34:13', '2024-11-18 02:34:14'),
	(2, 'TJKT', 'Teknik Jaringan Komputer dan Telekomunikasi awalnya bernama Teknik Komputer dan Jaringan (TKJ). Sesuai dengan namanya kompetensi keahlian TKJ berfokus pada pembuatan jaringan untuk layanan komunikasi dan perakitan komputer.\r\n\r\n', 'https://www.instagram.com/official.tkjsmkn4bogor', '/assets/images/tjkt.webp', '2024-11-18 02:41:38', '2024-11-18 02:41:39'),
	(3, 'Teknik Kendaraan Ringan', 'Teknik Otomotif merupakan kompetensi keahlian yang berfokus untuk melakukan perbaikan pada berbagai kendaraan roda empat. Semula jurusan ini bernama Teknik Kendaraan Ringan (TKR), namun kini berganti nama seiring dengan perubahan kurikulum merdeka.', 'https://www.instagram.com/kr4bat_otomotif', '/assets/images/tkr.webp', '2024-11-18 02:42:44', '2024-11-17 20:52:11'),
	(4, 'TFLM', 'Teknik Pengelasan dan Fabrikasi Logam, merupakan jurusan yang di dominasi oleh kaum laki-laki. Seperti namanya, kompetensi keahlian ini berfokus pada pembuatan perangkat dengan meggunakan bahan dasar logam, seperti halnya rak sepatu, tralis, lemari besi, dan lain sebagainya.', 'https://www.instagram.com/kr4bat_welding', '/assets/images/tflm.webp', '2024-11-18 02:43:05', '2024-11-18 02:43:16');

-- Dumping structure for table ujikom_backend.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `img` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `body` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_time` int NOT NULL DEFAULT '0',
  `views` bigint unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_user_id_foreign` (`user_id`),
  CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ujikom_backend.posts: ~3 rows (approximately)
INSERT INTO `posts` (`id`, `img`, `title`, `user_id`, `body`, `read_time`, `views`, `created_at`, `updated_at`) VALUES
	(2, '/storage/images/FrlsoWANTWeApMtHZamhippAAah6PKITOWVkJtsA.jpg', 'SMKN 4 torehkan prestasi di lomba paskibra', 3, 'Edited Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse molestie at elit blandit convallis. Phasellus cursus risus et tortor gravida, a suscipit tellus tincidunt. Integer id scelerisque arcu. Aliquam ac ante lacus. Vestibulum maximus tortor sed metus porttitor, ut interdum eros blandit. Mauris pellentesque ultricies cursus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris gravida congue magna, eget tincidunt elit feugiat at. Pellentesque eu orci non risus interdum lobortis non eu urna. Sed ut auctor ligula. Etiam ut tellus vel mauris tempus interdum a vitae est. Aliquam faucibus, dolor a sollicitudin interdum, purus tellus ullamcorper massa, at condimentum erat tortor sed nisi.\r\n\r\nEdited Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse molestie at elit blandit convallis. Phasellus cursus risus et tortor gravida, a suscipit tellus tincidunt. Integer id scelerisque arcu. Aliquam ac ante lacus. Vestibulum maximus tortor sed metus porttitor, ut interdum eros blandit. Mauris pellentesque ultricies cursus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris gravida congue magna, eget tincidunt elit feugiat at. Pellentesque eu orci non risus interdum lobortis non eu urna. Sed ut auctor ligula. Etiam ut tellus vel mauris tempus interdum a vitae est. Aliquam faucibus, dolor a sollicitudin interdum, purus tellus ullamcorper massa, at condimentum erat tortor sed nisi.', 5, 146, '2024-10-30 18:48:49', '2024-11-20 19:45:07'),
	(3, '/storage/images/MYdW68peajIlONnFzfldKpaTuMAzA6FzC8TetiBW.jpg', 'Pelatihan KOMATSU untuk jurusan teknik pengelasan', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse molestie at elit blandit convallis. Phasellus cursus risus et tortor gravida, a suscipit tellus tincidunt. Integer id scelerisque arcu. Aliquam ac ante lacus. Vestibulum maximus tortor sed metus porttitor, ut interdum eros blandit. Mauris pellentesque ultricies cursus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris gravida congue magna, eget tincidunt elit feugiat at. Pellentesque eu orci non risus interdum lobortis non eu urna. Sed ut auctor ligula. Etiam ut tellus vel mauris tempus interdum a vitae est. Aliquam faucibus, dolor a sollicitudin interdum, purus tellus ullamcorper massa, at condimentum erat tortor sed nisi.', 5, 23, '2024-10-31 03:16:43', '2024-11-20 10:08:50'),
	(6, '/storage/images/KPJ8ypGuvKWjyilGylHCUQvsf8tC72GVVgTUNkp8.jpg', 'LKBB Paskibraka SMKN 4 Bogor', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse molestie at elit blandit convallis. Phasellus cursus risus et tortor gravida, a suscipit tellus tincidunt. Integer id scelerisque arcu. Aliquam ac ante lacus. Vestibulum maximus tortor sed metus porttitor, ut interdum eros blandit. Mauris pellentesque ultricies cursus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris gravida congue magna, eget tincidunt elit feugiat at. Pellentesque eu orci non risus interdum lobortis non eu urna. Sed ut auctor ligula. Etiam ut tellus vel mauris tempus interdum a vitae est. Aliquam faucibus, dolor a sollicitudin interdum, purus tellus ullamcorper massa, at condimentum erat tortor sed nisi.', 10, 10, '2024-11-10 00:00:36', '2024-11-20 19:44:41');

-- Dumping structure for table ujikom_backend.post_category
CREATE TABLE IF NOT EXISTS `post_category` (
  `post_id` bigint unsigned NOT NULL,
  `category_id` bigint unsigned NOT NULL,
  KEY `post_category_post_id_foreign` (`post_id`),
  KEY `post_category_category_id_foreign` (`category_id`),
  CONSTRAINT `post_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `post_category_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ujikom_backend.post_category: ~5 rows (approximately)
INSERT INTO `post_category` (`post_id`, `category_id`) VALUES
	(2, 3),
	(3, 1),
	(6, 2),
	(6, 3),
	(2, 2);

-- Dumping structure for table ujikom_backend.socials
CREATE TABLE IF NOT EXISTS `socials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ujikom_backend.socials: ~0 rows (approximately)

-- Dumping structure for table ujikom_backend.statistics
CREATE TABLE IF NOT EXISTS `statistics` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ujikom_backend.statistics: ~2 rows (approximately)
INSERT INTO `statistics` (`id`, `name`, `amount`, `created_at`, `updated_at`) VALUES
	(1, 'Jumlah Siswa', 1015, '2024-11-16 00:41:29', '2024-11-17 08:29:45'),
	(2, 'Program Keahlian', 4, '2024-11-16 00:41:46', '2024-11-16 00:41:47'),
	(3, 'Kerja Sama Industri', 30, '2024-11-16 00:42:04', '2024-11-16 00:42:05');

-- Dumping structure for table ujikom_backend.texts
CREATE TABLE IF NOT EXISTS `texts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `placement` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci,
  `cta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ujikom_backend.texts: ~4 rows (approximately)
INSERT INTO `texts` (`id`, `placement`, `title`, `subtitle`, `desc`, `cta`, `created_at`, `updated_at`) VALUES
	(1, 'hero', 'AKHLAK terpuji ILMU terkaji TERAMPIL dan Teruji', 'SMKN 4 Bogor', 'Merupakan sekolah kejuruan berbasis Teknologi Informasi dan Komunikasi. Sekolah ini didirikan dan dirintis pada tahun 2008 kemudian dibuka pada tahun 2009 yang saat ini terakreditasi A. Terdapat 54 staff pengajar dan 22 orang staff tata usaha, dikepalai oleh Drs. Mulya Mulprihartono, M. Si, sekolah ini merupakan investasi pendidikan yang tepat untuk putra/putri anda.', 'Download Aplikasi Kami', '2024-11-16 00:30:07', '2024-11-17 07:58:31'),
	(2, 'majors', 'Kompetensi Keahlian', 'Temukan', NULL, NULL, '2024-11-16 00:31:16', '2024-11-17 08:08:29'),
	(3, 'gallery', 'Galeri Foto di Lingkungan Sekolah SMKN 4 Bogor', 'Fasilitas Sekolah Kami', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum nobis in, expedita excepturi praesentium quia, eum fugiat magni voluptates sit, neque error sapiente deserunt dolor reprehenderit voluptas tempore sunt harum?', 'Lihat Galeri', '2024-11-16 00:34:20', '2024-11-17 08:09:53'),
	(4, 'news', 'Berita Terbaru', 'Bacalah', NULL, NULL, '2024-11-16 00:34:29', '2024-11-17 08:05:47'),
	(5, 'event', 'Event Mendatang', 'Datanglah Ke', NULL, NULL, '2024-11-16 00:35:11', '2024-11-17 08:01:29');

-- Dumping structure for table ujikom_backend.visits
CREATE TABLE IF NOT EXISTS `visits` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table ujikom_backend.visits: ~5 rows (approximately)
INSERT INTO `visits` (`id`, `created_at`, `updated_at`) VALUES
	(1, '2024-11-10 23:47:37', '2024-11-10 23:47:38'),
	(2, '2024-11-10 23:47:41', '2024-11-10 23:47:42'),
	(3, '2024-11-11 16:22:22', '2024-11-11 16:22:22'),
	(4, '2024-11-11 16:22:25', '2024-11-11 16:22:25'),
	(5, '2024-11-11 16:22:28', '2024-11-11 16:22:28');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

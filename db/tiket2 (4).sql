-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 24, 2022 at 01:28 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_ticket`
--

CREATE TABLE `admin_ticket` (
  `id` int(11) NOT NULL,
  `description` text COLLATE utf8_persian_ci NOT NULL,
  `tiket_files` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `member_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `admin_ticket`
--

INSERT INTO `admin_ticket` (`id`, `description`, `tiket_files`, `member_id`, `user_id`, `ticket_id`, `created_at`, `updated_at`) VALUES
(7, 'test', '94e8996827f4155b85cb2b8cf1b5c68a713990.jpg', 3, 1, 5, '2022-06-15 06:11:51', '2022-06-15 06:11:51');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_path` text COLLATE utf8mb4_unicode_ci,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `page_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image_path`, `title`, `description`, `page_url`, `created_at`, `updated_at`) VALUES
(1, 'b-17b3d8436c41183b47e12741114cb57a.jpg', 'علی', 'سنگ است و گچ، نهایت سرت میشکند …!\r\n\r\nولى اگر مردى رهایت کرد\r\n\r\nدلت میشکند\r\n\r\nروح و تمام زندگیت میشکند\r\n\r\nو زنى که بشکند\r\n\r\nسنگ میشود، سرد و سخت\r\n\r\nکه نه میخندد، و نه میگرید …!\r\n\r\nو این یعنى فاجعه…!\r\nفاجعه زنیست که از دلداده گى ترسیده\r\n\r\n***\r\n\r\nمتن غمگین طولانی\r\nدلم؛ برای خودم تنگ می شود\r\nروزهایی که بیشتر می خندیدم\r\nروزهایی که اتاق\r\nهوای بیشتری داشت ،\r\nروزهایی که تو را داشتم …\r\nجملات احساسی و زیبا غمگین\r\nباور کن\r\n\r\nآنقدر ها هم سخت نیست فهمیدن اینکه بعضی ها می آیند\r\n\r\nکه نمانند\r\n\r\nنباشند\r\n\r\nنبینند\r\n\r\nو تــو اگر تمامی دنیا را هم حتی به پایشان بریزی\r\n\r\nآنها تمامی بهانه های دنیا را جمع می کنند\r\n\r\nتا از بین آنها بهانه ای پیدا کنند که بروند دور شوند\r\nکه نمانند اصلا\r\n\r\nپس به دلت بسپار وقتی از خستگی های روزگار پناه بردی به هر کسی\r\n\r\nلااقل خوب فکر کن ببین از سر علاقه آمده، یا از سر … !\r\n\r\nتا دنیایت پر نشود از دوست داشتن هایِ پر بغض\r\n\r\nکه دمار از روزگارت درآورد !\r\n\r\n***\r\n\r\nشعر بلند در مورد غم و ناراحتی\r\nدیدمت انگار چیزى بر دلم تأثیر کرد\r\nبا نگاه ساده ات دنیاى من تغییر کرد\r\nدیدمت با لحن آرامى صدایم کردى و\r\nاین دل مغرور در لحن صدایت گیر کرد\r\nغرق آرامش مرا خواندى و گفتى میشود\r\nبا سوالم ذهنتان را هم کمى درگیر کرد؟\r\nمیشود با من بمانى! ساده… میخواهم تو را\r\nجمله ای ساده دلم را بردو در زنجیر کرد\r\nاندکی با شوق، بی وقفه نگاهت کردمو\r\nدر دلم گفتم که چشمانت دلم را پیر کرد!\r\nرفتى و از دور میدیدم پر از دلشوره ای\r\nتو نفهمیدى که عشقت در دلم تکثیر کرد\r\nتیر اخر را زدی وقتی که گفتی عاشقم\r\nعاشقت بودن مرا از هر تجرد سیر کرد\r\n\r\n***\r\n\r\nببینید: عکس پروفایل بغض و گریه | عکس نوشته های غمگین و بعض\r\nمتن طولانی غمگین با جملات مفهومی\r\nایستاده بودم\r\n\r\nهوا سرد بود\r\n\r\nرد شدی\r\n\r\nنگاهم کردی\r\n\r\nهوا سردتر شد\r\n\r\nمرا ندیدی و رد شدی\r\n\r\nولی من\r\n\r\nهنوز ایستاده بودم\r\n\r\nهرروز نگاهت را مرور میکنم\r\n\r\nو هرروز\r\n\r\nسردتر میشود\r\n\r\n***\r\n\r\nمتن پر از غم عاشقانه\r\nگاهی دست خودت نیست\r\nدوست داشتن کسی\r\nکه می دانی نمی شود او را داشت\r\nاما مطمئنی تا ابد\r\nدوست داشتنش\r\nتکه تکه ات می کند …\r\n\r\n***', NULL, '2021-05-14 13:40:08', '2021-05-16 18:40:23'),
(6, 'b-47cae5895bd0aa7a33820e445a4b697f.jpg', 'یسیسشی', 'سشیشسیشسیشس', NULL, '2021-05-16 15:41:04', '2021-05-16 15:41:04'),
(7, 'b-ee726ea287adf2269d5b1faa7ca0c2f0.jpg', 'سشسش', 'سشسیس', NULL, '2021-05-16 15:41:12', '2021-05-16 15:41:12'),
(8, 'b-bba225c487f9376ced0627ff0b0b90d8.jpg', 'سشش', 'سنگ است و گچ، نهایت سرت میشکند …!\r\n\r\nولى اگر مردى رهایت کرد\r\n\r\nدلت میشکند\r\n\r\nروح و تمام زندگیت میشکند\r\n\r\nو زنى که بشکند\r\n\r\nسنگ میشود، سرد و سخت\r\n\r\nکه نه میخندد، و نه میگرید …!\r\n\r\nو این یعنى فاجعه…!\r\nفاجعه زنیست که از دلداده گى ترسیده\r\n\r\n***\r\n\r\nمتن غمگین طولانی\r\nدلم؛ برای خودم تنگ می شود\r\nروزهایی که بیشتر می خندیدم\r\nروزهایی که اتاق\r\nهوای بیشتری داشت ،\r\nروزهایی که تو را داشتم …', NULL, '2021-05-16 15:41:23', '2021-05-16 15:41:23'),
(9, 'b-4825c7451c4608fb91b0d4b1f3f66af0.jpg', 'ییسسش', 'سشیشسیسشیشس', NULL, '2021-05-16 15:41:37', '2021-05-16 15:41:37'),
(10, 'b-b614d2d7828718ad376440ae91f22a63.jpg', 'شش', 'شسشسش', NULL, '2021-05-16 15:41:47', '2021-05-16 15:41:47'),
(11, 'b-aa42964c358914fabfe6e9c21a3a6efa.jpg', 'ششش', 'ششششش', NULL, '2021-05-16 15:41:55', '2021-05-16 15:41:55');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(4, 'طراحی وب', '2021-07-23 02:37:24', '2021-07-23 02:37:24'),
(5, 'طراحی اپلیکشین', '2021-07-23 02:37:51', '2021-07-23 02:37:51'),
(6, 'طراحی امور گرافیکی', '2021-07-23 02:38:19', '2021-07-23 02:38:19');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `fullname`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'ali', 'asas@gmail.com', 'fsdfsd', '2021-07-28 15:19:11', '2021-07-28 15:19:11');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(10) UNSIGNED NOT NULL,
  `feild` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `university` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `university_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `feild`, `university`, `university_date`, `education_description`, `created_at`, `updated_at`) VALUES
(1, 'نرم افزار', 'باهنر', 'مهر 96-بهمن 98', 'سیسیسیسی', '2021-07-21 22:09:31', '2021-07-21 22:09:31');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(10) UNSIGNED NOT NULL,
  `post` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `post`, `company_name`, `experience_date`, `experience_description`, `created_at`, `updated_at`) VALUES
(2, 'برنامه نویس', 'وستا', 'فروردین 1400-مرداد 1400', 'sdadsd', '2021-07-21 15:54:21', '2021-07-21 15:54:21'),
(3, 'dsadas', 'sdsad', 'dsadas', 'sadasd', '2021-07-21 15:54:25', '2021-07-21 15:54:25'),
(4, 'sdasd', 'dsad', 'sdsa', 'sdsad', '2021-07-21 15:54:29', '2021-07-21 15:54:29'),
(5, 'sdasd', 'dsad', 'sdsa', 'sdsad', '2021-07-21 15:54:29', '2021-07-21 15:54:29');

-- --------------------------------------------------------

--
-- Table structure for table `headers`
--

CREATE TABLE `headers` (
  `id` int(10) UNSIGNED NOT NULL,
  `welcome_message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `headers`
--

INSERT INTO `headers` (`id`, `welcome_message`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'خوش آمدی', 'وبسایت رسمی علی مولایی', 'سلام عزیزم میتونی اینجا منو بشناسی و ازم کلی چی یاد بگیری و اگه میخای کسب و کارت رونق بگیره باهام تماس بگیر تا وبسایت کسب و کارت رو تحویلت بدم.', 'b-2e40ab8ecab9434e29d7065a531ca5f4.png', '2021-07-17 08:40:11', '2021-07-17 12:39:29');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `first_name`, `last_name`, `user_name`, `email`, `password`, `phone`, `created_at`, `updated_at`) VALUES
(3, 'reza', 'molaie', 'reza', 'reza@gmail.com', '$2y$10$Fh1/Hh2BA2.mKFoAgsPED.alFhDWwZVu5dx5DvBF7ruFt3eaVTPme', '09172924736', '2022-06-14 09:55:34', '2022-06-14 09:55:34');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 2),
(15, '2021_04_17_162039_create_blogs_table', 3),
(27, '2021_04_17_162820_create_profiles_table', 4),
(28, '2021_04_17_191009_create_contacts_table', 4),
(29, '2021_07_15_095414_create_headers_table', 4),
(30, '2021_07_20_080729_create_experiences_table', 5),
(31, '2021_07_21_140355_create_education_table', 6),
(34, '2021_07_21_194825_create_category_works_table', 8),
(39, '2021_07_21_162147_create_works_table', 9),
(40, '2021_07_21_213008_create_categories_table', 9),
(41, '2021_07_21_213644_add_category_to_works_table', 9),
(49, '2021_07_26_152605_create_projects_table', 10),
(50, '2021_07_26_153321_add_category_to_projects_table', 10),
(51, '2021_07_26_211008_create_prices_table', 10),
(52, '2021_07_26_211343_add_prices_to_projects_table', 10),
(53, '2021_07_28_102255_create_skills_table', 11),
(54, '2022_06_01_183737_create_members_table', 12),
(55, '2022_06_04_173706_create_user_tikets_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` int(10) UNSIGNED NOT NULL,
  `prices` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `prices`, `created_at`, `updated_at`) VALUES
(1, 'از 200 هزار تومان تا 500 هزار تومان', '2021-07-27 06:50:08', '2021-07-27 06:50:08'),
(2, 'از 600 هزار تومان تا یک میلیون تومان', '2021-07-27 06:50:25', '2021-07-27 06:50:25'),
(3, 'از 1 میلیون تومان تا 2 میلیون تومان', '2021-07-27 06:50:33', '2021-07-27 06:50:33'),
(4, 'از 2 میلیون تومان تا3 میلیون تومان', '2021-07-27 06:50:50', '2021-07-27 06:50:50'),
(5, 'از 3 میلیون تومان تا 5 میلیون تومان', '2021-07-27 06:50:55', '2021-07-27 06:50:55');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brith_day` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resume_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `full_name`, `brith_day`, `address`, `facebook`, `twitter`, `instagram`, `linkedin`, `profile_image`, `work`, `phone`, `email`, `resume_file`, `created_at`, `updated_at`) VALUES
(1, 'علی مولایی', '3.1.22', 'ایران-شیراز', NULL, NULL, NULL, NULL, 'b-d631a64edbf5a5106f44c79f8ff4bd81.jpeg', 'برنامه نویس', '09172924737', 'ali@gmail.com', 'b-d631a64edbf5a5106f44c79f8ff4bd81.docx', '2021-07-17 08:51:00', '2021-07-17 09:00:34');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `price_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `day`, `description`, `created_at`, `updated_at`, `category_id`, `price_id`) VALUES
(4, 'وبسایت ایران موبایل', '60', 'وبسایت فرشگاهی ایران موبایل با کد نویسی', '2021-07-27 20:33:34', '2021-07-27 20:33:34', 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'وردپرس', 'b-f155289eac25b2a6018bbae4aeab104c.png', '2021-07-28 18:20:30', '2021-07-28 18:20:30'),
(2, 'html', 'b-16be4c64b488f81fc6c043ed392fcfe6.png', '2021-07-28 18:20:55', '2021-07-28 18:20:55'),
(3, 'bootstrap', 'b-784023d6e5aad0369f917da73fd1bd36.png', '2021-07-28 18:21:20', '2021-07-28 18:21:20'),
(4, 'java script', 'b-55ed9ada604081e8770fbefb1f0df826.png', '2021-07-28 18:21:36', '2021-07-28 18:21:36');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `section` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `priority` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `member_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `section`, `title`, `priority`, `member_id`, `created_at`, `updated_at`) VALUES
(5, 'امور مالی و فروش', 'ارور 404', 'بالا', 3, '2022-06-15 12:44:11', '2022-06-15 12:44:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'علی مولایی', 'reza.safdari@gmail.com', 1, '$2y$10$XApIY4.kVw.hawzlC6zgR.3e47uDoM8JWrhU4GQ7z9FGixjDQ/Sz2', 'XHDTXQ69YISLfegBvLs4Rd1jBz2xggEJkiTfTcCX8hIBLtdLVzBKKWMix5g5', '2021-04-26 16:30:47', '2021-04-26 16:30:47'),
(2, 'رضا صفدری', 'reza@gmail.com', 0, '$2y$10$YOKrJQK2zAyF6ji4NNns7.E6Xcz4NvPLOYQxFXmzF0jhSWZfBwzlq', NULL, '2022-06-24 05:36:25', '2022-06-24 05:36:25');

-- --------------------------------------------------------

--
-- Table structure for table `user_tikets`
--

CREATE TABLE `user_tikets` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tiket_files` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_tikets`
--

INSERT INTO `user_tikets` (`id`, `description`, `tiket_files`, `member_id`, `ticket_id`, `created_at`, `updated_at`) VALUES
(13, 'ارور 404', '7f2d55b4855457f54f3454e6cea6ddd9148885.png', 3, 5, NULL, NULL),
(14, 'test200000', '15865e157d4bf36b1eb8c60f38dbe1413409782.png', 3, 5, NULL, NULL),
(15, 'test6', '', 3, 5, NULL, NULL),
(16, 'test99', '', 3, 5, NULL, NULL),
(17, 'tsetsssss', '', 3, 5, NULL, NULL),
(18, 'wwww', '', 3, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descrition` text COLLATE utf8mb4_unicode_ci,
  `items` text COLLATE utf8mb4_unicode_ci,
  `category_details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `release_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `title`, `image`, `descrition`, `items`, `category_details`, `release_date`, `company_name`, `created_at`, `updated_at`, `category_id`) VALUES
(15, 'وبسایت ایران موبایل', 'b-d0df93a9d61f297bdeb5a703292d4778.PNG', 'وبسایت ایران موبایل\r\nوبسایت ایران موبایل', 'وبسایت ایران موبایل\r\nوبسایت ایران موبایل', 'سایت فروشگاهی', 'مرداد 99', 'وستا', '2021-07-26 21:04:06', '2021-07-26 21:04:06', 4),
(16, 'وبسایت ایران موبایل', 'b-ce6a6cdba187f8a77ea3b3672a68c362.PNG', 'وبسایت ایران موبایل', 'وبسایت ایران موبایل', 'سایت فروشگاهی', 'خرداد 99', 'شیراز یاب', '2021-07-26 21:04:26', '2021-07-26 21:04:26', 4),
(17, 'وبسایت ایران موبایل', 'b-3d0e1b9634cc7137b7d29562b4d8778b.PNG', 'وبسایت ایران موبایل', 'وبسایت ایران موبایل', 'سایت فروشگاهی', 'مرداد 99', 'وستا', '2021-07-26 21:04:48', '2021-07-26 21:04:48', 4),
(18, 'وبسایت ایران موبایل', 'b-0c13d0a7ce8d712444670284ca47f477.PNG', 'وبسایت ایران موبایل', 'وبسایت ایران موبایل', 'سایت فروشگاهی', 'خرداد 99', 'شیراز یاب', '2021-07-26 21:05:10', '2021-07-26 21:05:10', 4),
(19, 'وبسایت ایران موبایل', 'b-b70d805f99f49b3e8650624b905d3d47.jpg', 'mkmkk', 'mkk', 'سایت فروشگاهی', 'مرداد 99', 'وستا', '2021-07-27 23:31:37', '2021-07-27 23:31:37', 4),
(20, 'وبسایت ایران موبایل', 'works/lYt2pkhjQc8HWNmvJrOo8C8XOdJ6LfTPoILeL10U.jpg', 'njnj', 'mknjjnk', 'سایت فروشگاهی', 'مرداد 99', 'وستا', '2021-07-27 23:38:03', '2021-07-27 23:38:03', 4),
(21, 'fds', 'b-123e0e4972f3614793d3e4bd439daca2.jpg', 'fgfg', 'gfdsf', 'fdsds', 'fdsfsd', 'dfsfs', '2021-07-27 23:52:20', '2021-07-27 23:52:20', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_ticket`
--
ALTER TABLE `admin_ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headers`
--
ALTER TABLE `headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_category_id_foreign` (`category_id`),
  ADD KEY `projects_price_id_foreign` (`price_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_tikets`
--
ALTER TABLE `user_tikets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`),
  ADD KEY `works_category_id_foreign` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_ticket`
--
ALTER TABLE `admin_ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `headers`
--
ALTER TABLE `headers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_tikets`
--
ALTER TABLE `user_tikets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `projects_price_id_foreign` FOREIGN KEY (`price_id`) REFERENCES `prices` (`id`);

--
-- Constraints for table `works`
--
ALTER TABLE `works`
  ADD CONSTRAINT `works_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

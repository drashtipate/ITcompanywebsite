-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 12:14 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lara_web_it`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `author` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `category_id`, `author`, `image`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'All You Need To Know About Mobile App Development Services', 1, 'Alona O.', 'front/images/blog/blog1.webp', '<h2><b>What is the definition of mobile app development?</b></h2>\r\n\r\nA coding application for hand-held devices such as mobile phones is known to be a series of processes and modus operandi. The process of mobile application development is just like software development has its roots in the same old web application development. The only significant distinction is that handheld device applications are frequently developed explicitly to remove the benefits of a given mobile phone\'s distinctive capabilities. Gaming apps, for example, can be developed to take advantage of the iPhone\'s acceleration. Apple\'s IOS and Google\'s Android are two mobile platforms that have excelled in the IT sector with their remarkable performance. Apple\'s better-searched phones include critical programs pre-installed on the device. Android phones also come with pre-installed programs, from which you can add more and more via the Google Play Store.\r\n\r\n\r\n<h2><b>Mobile Application Types:</b></h2>\r\n\r\nIf the technology parts of the coding system are separated, there are three sorts of mobile applications.\r\n<br><br>\r\n• Native Apps<br>\r\n• Web Apps<br>\r\n• Hybrid Apps<br>', 'active', '2021-12-14 08:31:12', NULL),
(2, 'Think Web Application Development Services In India, Zambia, And USA', 1, 'Inna M. ', 'front/images/blog/blog2.webp', '<h2>What is a web application development service?</b></h2>\r\n\r\nA web application is a piece of software that performs specific functions and can only be accessed through a web browser. HTML, CSS, and Javascript are common frontend languages. Java, Python, and Javascript are common backend languages the language to employ are determined by the software\'s capabilities. To fulfill the tasks specified by the user, this program executes code on both the client and server sides.\r\n<br><br>\r\n<h2><b>Types of web applications:</b></h2>\r\nE-commerce app\r\nApp for social networking\r\nWeb-based portal\r\n\r\nE-commerce app: E-commerce web applications feature numerous components, ranging from product selection to electronic payment. When comparing web pages and web apps, this is an important distinction to make. Websites are typically used by users to consume material and learn about a company. Web apps are used to conduct business, and as a result, they have all of the necessary features.\r\nWeb-based portal: A web portal is a beneficial web-based platform that gathers information from various sources on the internet and displays it to the user in the most relevant places for his benefit. These were created to provide users with the information they requested, but they have subsequently developed to include a variety of other services.\r\nApp for social networking: With Facebook and Instagram, this is probably the most popular type of web app. The majority of these social networking services began as online applications and are now mostly used as mobile applications.', 'active', '2021-12-01 08:31:12', NULL),
(3, 'Software Development Company In India, Zambia, And The USA', 1, 'Inna M. ', 'front/images/blog/blog3.webp', 'A software development company creates custom software development services in India, Zambia, and the USA. The frameworks, and tools to assist in the solution of issues or the achievement of a certain goal. The members of this team, as you may have surmised, are extremely intelligent. While every software development team, the organization is different. Most will include software architects or developers, at least one product owner, and a project manager. While developing custom software development tools and applications is as complicated as you might think, the process of doing so is simple. While every software development company will put its spin on things consumers will go through a process that looks something like this. The services take Web design, SEO & Digital Marketing, Graphic Design, E-Commerce, Mobile Apps.\r\n\r\n<h2><b>Software Developer Skills</b></h2>\r\nTo comprehend customer needs and design, build, change, test, debug, and maintain software. Software engineers use standard engineering concepts. Along with a computer science/information science degree, software engineers must have strong mathematical, statistical, logical, and analytical skills. The demand for competent software engineers is at an all-time high, as computer science permeates practically every business today. If you want to enter and succeed in this field, you\'ll need to learn all of the skills that constitute a good software engineer. Furthermore, because the technical field evolves at a rapid pace, you must keep your knowledge and abilities up to date.', 'active', '2021-12-06 08:31:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Development', 'development', 'active', '2024-04-24 08:21:46', NULL),
(2, 'CompanyNews', 'companynews', 'active', '2024-04-24 08:21:46', NULL),
(3, 'Fashion', 'fashion', 'active', '2024-04-24 08:24:07', NULL),
(4, 'IT Blog', 'itblog', 'active', '2024-04-24 08:24:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_phonenumber` varchar(255) NOT NULL,
  `contact_subject` varchar(255) DEFAULT NULL,
  `contact_message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `contact_name`, `contact_email`, `contact_phonenumber`, `contact_subject`, `contact_message`, `created_at`, `updated_at`) VALUES
(12, 'cipherhex', 'cipherhex910@gmail.com', '1234567890', 'php/laravel developer', 'qwcsfrtr', '2024-04-30 04:31:17', '2024-04-30 04:31:17'),
(13, 'drashti', 'drashtivaghasiya95@gmail.com', '9586049254', 'data Entry', 'i want to job....', '2024-04-30 04:41:55', '2024-04-30 04:41:55');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_04_22_113721_create_servicedetails_table', 2),
(6, '2024_04_24_071803_create_categories_table', 3),
(7, '2024_04_24_071726_create_articles_table', 4),
(8, '2024_04_26_092608_create_contactuses_table', 5),
(9, '2024_04_29_045348_create_contacts_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `servicedetails`
--

CREATE TABLE `servicedetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `servicedetails`
--

INSERT INTO `servicedetails` (`id`, `title`, `image`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Web App Development', 'front/images/services/107Z_html_set_Converted-02.jpg', '<h2>HTML​ Development Services</h2>\r\n<p><b>HTML development services</b> create visually appealing and high-performance websites. We specialize in responsive, cross-browser compatible sites with clean HTML markup for enhanced accessibility and search engine visibility. Whether you need a static website, dynamic web app, or e-commerce platform, our services adapt to diverse needs. Following the latest HTML standards, we ensure future-proof websites that excel with evolving technologies.</p><br>\r\n<p>Customer satisfaction is our priority, and we collaborate closely with clients to deliver tailored solutions aligned with their brand identity and business goals. Choose our HTML development services for efficient, reliable, and innovative solutions that bring your digital vision to life.</p>', 'active', '2024-04-22 12:01:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_category_id_foreign` (`category_id`);

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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `servicedetails`
--
ALTER TABLE `servicedetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servicedetails`
--
ALTER TABLE `servicedetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

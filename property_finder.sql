-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2022 at 07:39 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `property_finder`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `languages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_agent` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience_since` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_profile_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb_profile_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `hit_count` int(11) NOT NULL DEFAULT 0,
  `extra` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `company_id`, `name`, `phone`, `email`, `position`, `nationality`, `languages`, `location`, `about_agent`, `image`, `license_number`, `experience_since`, `linkedin_profile_url`, `fb_profile_url`, `whatsapp_number`, `status`, `hit_count`, `extra`, `created_at`, `updated_at`) VALUES
(1, 1, 'Karataeva Arailym', '12345678', 'agent@email.com', 'Specialist', 'Kazakhstan', 'kazakhtan, english', 'Nur-Sultan (Astana), Esil district, Khalel Dosmukhamedovich 90', '<p>Sales department</p>\r\n\r\n<p>lorem</p>', 'admin-assets/img/agents/1646920988391.jpg', '234', '2003', NULL, NULL, NULL, 1, 0, NULL, '2022-03-10 08:03:08', '2022-03-10 08:03:08');

-- --------------------------------------------------------

--
-- Table structure for table `agent_areas`
--

CREATE TABLE `agent_areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `agent_id` bigint(20) NOT NULL,
  `area_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agent_areas`
--

INSERT INTO `agent_areas` (`id`, `agent_id`, `area_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'dhaka', 1, '2022-03-10 08:03:09', '2022-03-10 08:03:09'),
(2, 1, 'chandpur', 1, '2022-03-10 08:03:09', '2022-03-10 08:03:09'),
(3, 1, 'matlab', 1, '2022-03-10 08:03:09', '2022-03-10 08:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status_id` bigint(20) UNSIGNED DEFAULT NULL,
  `location_id` bigint(20) UNSIGNED DEFAULT NULL,
  `assigned_to_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assets_histories`
--

CREATE TABLE `assets_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `asset_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status_id` bigint(20) UNSIGNED DEFAULT NULL,
  `location_id` bigint(20) UNSIGNED DEFAULT NULL,
  `assigned_user_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `asset_categories`
--

CREATE TABLE `asset_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `asset_locations`
--

CREATE TABLE `asset_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `asset_statuses`
--

CREATE TABLE `asset_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `asset_statuses`
--

INSERT INTO `asset_statuses` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Available', '2021-04-10 02:09:20', '2021-04-10 02:09:20', NULL),
(2, 'Not Available', '2021-04-10 02:09:20', '2021-04-10 02:09:20', NULL),
(3, 'Broken', '2021-04-10 02:09:20', '2021-04-10 02:09:20', NULL),
(4, 'Out for Repair', '2021-04-10 02:09:20', '2021-04-10 02:09:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_category_id` bigint(20) NOT NULL,
  `blog_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hit_count` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `extra` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_category_id`, `blog_title`, `main_image`, `content`, `slug`, `hit_count`, `status`, `extra`, `created_at`, `updated_at`) VALUES
(1, 2, 'Best Landscaping Companies in Dubai', 'admin-assets/img/blogs/1647695644166.webp', '<p>Are you moving to a new home and need some help with landscaping? Do you want to renovate your home&rsquo;s outdoor area? If yes, then this article is your ultimate guide.&nbsp;</p>\r\n\r\n<p>Dubai is home to numerous landscaping companies which offer you a variety of high quality services. Have a look below to find the full list of the best landscaping companies in Dubai.&nbsp;</p>\r\n\r\n<h3><strong><a href=\"https://www.propertyfinder.ae/blog/best-landscaping-companies-in-dubai/#1.-Green-Glades\">Green Glades</a></strong></h3>\r\n\r\n<h3><strong><a href=\"https://www.propertyfinder.ae/blog/best-landscaping-companies-in-dubai/#2.-Aswat-AlMadinah-Landscaping-\">Aswat AlMadinah Landscaping</a></strong></h3>\r\n\r\n<h3><strong><a href=\"https://www.propertyfinder.ae/blog/best-landscaping-companies-in-dubai/#3.-Azhar-Al-Madina-Landscape-\">Azhar Al Madina Landscape</a>&nbsp;</strong></h3>\r\n\r\n<h3><strong><a href=\"https://www.propertyfinder.ae/blog/best-landscaping-companies-in-dubai/#4.-Proscape-\">Proscape</a></strong></h3>\r\n\r\n<h3><strong><a href=\"https://www.propertyfinder.ae/blog/best-landscaping-companies-in-dubai/#5.-Milestone-Landscaping\">Milestone Landscaping</a></strong></h3>\r\n\r\n<h3><strong><a href=\"https://www.propertyfinder.ae/blog/best-landscaping-companies-in-dubai/#6.-Green-Creation-Landscaping\">Green Creation Landscaping</a></strong></h3>\r\n\r\n<h3><strong><a href=\"https://www.propertyfinder.ae/blog/best-landscaping-companies-in-dubai/#7.-Sunscape-Landscape\">Sunscape Landscape</a></strong></h3>\r\n\r\n<h3><strong><a href=\"https://www.propertyfinder.ae/blog/best-landscaping-companies-in-dubai/#8.-Opal-Landscaping\">Opal Landscaping</a></strong></h3>\r\n\r\n<h3><strong><a href=\"https://www.propertyfinder.ae/blog/best-landscaping-companies-in-dubai/#9.-Areej-Landscaping-\">Areej Landscaping</a></strong></h3>\r\n\r\n<h3><strong><a href=\"https://www.propertyfinder.ae/blog/best-landscaping-companies-in-dubai/#10.-Dreams-Garden\">Dreams Garden</a></strong></h3>\r\n\r\n<h3><strong><a href=\"https://www.propertyfinder.ae/blog/best-landscaping-companies-in-dubai/#11.-Beautiful-Garden-\">Beautiful Garden&nbsp;</a></strong></h3>\r\n\r\n<h3><strong><a href=\"https://www.propertyfinder.ae/blog/best-landscaping-companies-in-dubai/#12.-Desert-Ink-\">Desert Ink</a>&nbsp;</strong></h3>\r\n\r\n<h3><strong><a href=\"https://www.propertyfinder.ae/blog/best-landscaping-companies-in-dubai/#13.-Agriculture-Group\">Agriculture Group</a></strong></h3>\r\n\r\n<h3><strong><a href=\"https://www.propertyfinder.ae/blog/best-landscaping-companies-in-dubai/#14.-Terraforma-Landscaping-and-Garden-Works\">Terraforma Landscaping and Garden Works</a></strong></h3>\r\n\r\n<h3><strong><a href=\"https://www.propertyfinder.ae/blog/best-landscaping-companies-in-dubai/#15.-Green-Vision\">Green Vision</a></strong></h3>\r\n\r\n<p><img alt=\"landscaping company in Dubai\" src=\"https://www.propertyfinder.ae/blog/wp-content/uploads/2022/03/shutterstock_1464786650-1-1-800x534.jpeg\" style=\"height:534px; width:800px\" /></p>\r\n\r\n<h2>1.&nbsp;<strong>Green Glades</strong></h2>\r\n\r\n<p>Do you want to make changes in your home&rsquo;s garden? If yes, Green Glades can do this task for you. It&rsquo;s one of the leading companies in Dubai for landscapes.&nbsp;</p>\r\n\r\n<p>Whether you want to make a lovely garden from scratch or redesign it, they will professionally handle it. Not just that, they have pools and water features services in case you&rsquo;re thinking of a total change.&nbsp;</p>\r\n\r\n<p>All you have to do is to reach them and their expert team will impress you with the results.</p>\r\n\r\n<h3><strong>Location&nbsp;</strong></h3>\r\n\r\n<p>It&rsquo;s located in Al Warsan 3, Dubai.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Services&nbsp;</strong></h3>\r\n\r\n<ul>\r\n	<li>Soft landscaping</li>\r\n	<li>Hard landscaping&nbsp;</li>\r\n	<li>Irrigation</li>\r\n	<li>Maintenance</li>\r\n	<li>Pools and water features&nbsp;</li>\r\n	<li>Lighting&nbsp;&nbsp;</li>\r\n</ul>\r\n\r\n<h3><strong>Highlights&nbsp;</strong></h3>\r\n\r\n<ul>\r\n	<li>It&rsquo;s a one stop shop as the company has its own fully stocked garden, from where you can get all your needs. You can buy plants, trees, pots, pebbles, outdoor furniture, and garden accessories.&nbsp;</li>\r\n	<li>They have branches in India and Hong Kong.&nbsp;</li>\r\n</ul>\r\n\r\n<h3><strong>Customer Reviews</strong></h3>\r\n\r\n<ul>\r\n	<li>&ldquo;Green Glades&rsquo; team are excellent in landscaping works; they made my villa like a beautiful palace&rdquo;</li>\r\n	<li>&ldquo;They offer excellent work with good prices; I will surely deal with them in all my future landscaping needs.&rdquo;</li>\r\n</ul>\r\n\r\n<h3><strong>Opening Hours&nbsp;</strong></h3>\r\n\r\n<p>9 am &ndash; 6 pm daily, off on Fridays&nbsp;</p>\r\n\r\n<h3><strong>Contact Information&nbsp;</strong></h3>\r\n\r\n<ul>\r\n	<li>+971 (0)52 588 3965/6</li>\r\n	<li>+971 (0)54 454 4000</li>\r\n	<li><a href=\"mailto:enquiry@greenglades.ae\" rel=\"noreferrer noopener\" target=\"_blank\">enquiry@greenglades.ae</a>&nbsp;</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><img alt=\"\" src=\"https://www.propertyfinder.ae/blog/wp-content/uploads/2022/03/our-projects2-1.jpeg\" style=\"height:480px; width:640px\" /></li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><img alt=\"\" src=\"https://www.propertyfinder.ae/blog/wp-content/uploads/2022/03/our-projects17-1.jpeg\" style=\"height:531px; width:800px\" /></li>\r\n</ul>\r\n\r\n<p>Real Projects Photos</p>\r\n\r\n<h2>2.&nbsp;<strong>Aswat AlMadinah Landscaping&nbsp;</strong></h2>\r\n\r\n<p>This is one of the best landscaping companies in Dubai which you can surely trust. Aswat AlMadinah has a variety of services starting from the maintenance of your garden or pool to designing and renovating any outdoor area.&nbsp;</p>\r\n\r\n<p>Besides, whether you&rsquo;re a home or business owner who needs to add a magical touch to your setting, this company is the perfect choice; it offers both residential and commercial services.&nbsp;</p>\r\n\r\n<h3><strong>Location&nbsp;</strong></h3>\r\n\r\n<p>It&rsquo;s located on 34th street, Al Fahidi,&nbsp;<a href=\"https://www.propertyfinder.ae/en/community-guides/dubai/bur-dubai\" title=\"Bur Dubai\">Bur Dubai</a>, Dubai.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Services&nbsp;</strong></h3>\r\n\r\n<ul>\r\n	<li>Gardening&nbsp;</li>\r\n	<li>Landscaping</li>\r\n	<li>Swimming pools&nbsp;</li>\r\n	<li>Water features</li>\r\n	<li>Garden lighting&nbsp;</li>\r\n	<li>Flower and plants&nbsp;</li>\r\n	<li>Garden maintenance</li>\r\n	<li>Fibre optic light</li>\r\n</ul>\r\n\r\n<h3><strong>Highlights</strong></h3>\r\n\r\n<ul>\r\n	<li>They have been in the field since 2014.&nbsp;</li>\r\n</ul>\r\n\r\n<h3><strong>Customer Reviews&nbsp;</strong></h3>\r\n\r\n<ul>\r\n	<li>&ldquo;They are very responsive, professional, and punctual.&rdquo;</li>\r\n</ul>\r\n\r\n<h3><strong>Opening Hours&nbsp;</strong></h3>\r\n\r\n<p>9 am &ndash; 6 pm daily, off on Fridays&nbsp;</p>\r\n\r\n<h3><strong>Contact Information&nbsp;</strong></h3>\r\n\r\n<ul>\r\n	<li><strong>Phone</strong>: +971 (0)4 284 7433&nbsp;</li>\r\n	<li><strong>Mobile</strong>: +971 (0)50 654 9514, +971 (0)50 282 5462</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><img alt=\"\" src=\"https://www.propertyfinder.ae/blog/wp-content/uploads/2022/03/palm1-1.jpeg\" style=\"height:484px; width:500px\" /></li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><img alt=\"\" src=\"https://www.propertyfinder.ae/blog/wp-content/uploads/2022/03/BARARI-2-1.jpeg\" style=\"height:590px; width:599px\" /></li>\r\n</ul>\r\n\r\n<p>Real Projects Photos</p>\r\n\r\n<h2>3.&nbsp;<strong>Azhar Al Madina Landscape&nbsp;</strong></h2>\r\n\r\n<p>If you&rsquo;re thinking about relocating to a spacious home but worried about the gardening and landscaping works, don&rsquo;t worry we got you. Azhar Al Madina Landscape is a highly recommended one in this field.&nbsp;</p>\r\n\r\n<p>This owes to the high quality of their work, professionalism of the staff, and variety of services. Besides, they work on pool construction, landscape design, in addition to its installation.&nbsp;</p>\r\n\r\n<p>With such a notable company, you will surely have lovely outdoor space where you can spend quality time.&nbsp;</p>\r\n\r\n<h3><strong>Location&nbsp;</strong></h3>\r\n\r\n<p>It&rsquo;s located on the 2nd floor, Yes Business Center,&nbsp;<a href=\"https://www.propertyfinder.ae/en/community-guides/dubai/al-barsha\" title=\"Al Barsha\">Al Barsha</a>&nbsp;1, Dubai.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Services&nbsp;</strong></h3>\r\n\r\n<ul>\r\n	<li>Residential landscaping&nbsp;</li>\r\n	<li>Commercial landscaping</li>\r\n	<li>Swimming pool construction</li>\r\n	<li>Pergolas designs and construction</li>\r\n	<li>Gazebo designs and construction</li>\r\n	<li>Swimming pool design&nbsp;</li>\r\n	<li>Swimming pool maintenance&nbsp;</li>\r\n</ul>\r\n\r\n<h3><strong>Highlights&nbsp;</strong></h3>\r\n\r\n<ul>\r\n	<li>They offer you customised solutions to ensure your satisfaction.&nbsp;</li>\r\n	<li>This company uses sustainable ways and environment friendly tools to help in protecting the ecosystem.&nbsp;</li>\r\n</ul>\r\n\r\n<h3><strong>Customer Reviews</strong></h3>\r\n\r\n<ul>\r\n	<li>&ldquo;We had a fantastic experience with the company while working on swimming pool services. They worked with us to design and install an in-ground pool in our new house. They also made amazing hardscaping work. The final look was amazing.&rdquo;</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>&ldquo;It&rsquo;s a very easy company to work with. They constructed my swimming pool on time and the quality was very nice.&rdquo;</li>\r\n</ul>\r\n\r\n<p><img alt=\"landscaping company in Dubai\" src=\"https://www.propertyfinder.ae/blog/wp-content/uploads/2022/03/shutterstock_1428845474-1-800x534.jpeg\" style=\"height:534px; width:800px\" /></p>\r\n\r\n<h3><strong>Opening Hours&nbsp;</strong></h3>\r\n\r\n<p>9 am &ndash; 6 pm daily, off on Fridays&nbsp;</p>\r\n\r\n<h3><strong>Contact Information&nbsp;</strong></h3>\r\n\r\n<ul>\r\n	<li>+971 (0)55 980 4287&nbsp;</li>\r\n	<li>&nbsp;+971 (0)4 277 8093</li>\r\n	<li><a href=\"mailto:info@aamlpools.com\" rel=\"noreferrer noopener\" target=\"_blank\">info@aamlpools.com</a>&nbsp;</li>\r\n</ul>\r\n\r\n<p>If you&rsquo;re still searching for a spacious home, you can simply have a look at&nbsp;<a href=\"https://www.propertyfinder.ae/en/rent/dubai/villas-for-rent.html\" rel=\"noreferrer noopener\" target=\"_blank\">the villas for rent in Dubai</a>&nbsp;on Property Finder to enjoy your dream residency.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.propertyfinder.ae/en/rent/villa-for-rent-dubai-jumeirah-park-legacy-8601111.html\"><img src=\"https://www.propertyfinder.ae/property/4e7a83d131a42731c2b577c5fd81c7c4/500/356/MODE/b1921a/8601111-d4d53o.jpg?ctr=ae\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><a href=\"https://www.propertyfinder.ae/en/rent/villa-for-rent-dubai-jumeirah-park-legacy-8601111.html\">District 2 | Landscaped | Well Maintained</a></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>370,000 AED/year</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.propertyfinder.ae/en/rent/villa-for-rent-dubai-arabian-ranches-2-rasha-8575698.html\"><img src=\"https://www.propertyfinder.ae/property/e490b1e4c05e0acec332b2e6e36f1cd3/500/356/MODE/ea0ef0/8575698-05c8ao.jpg?ctr=ae\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><a href=\"https://www.propertyfinder.ae/en/rent/villa-for-rent-dubai-arabian-ranches-2-rasha-8575698.html\">Landscaped Plot | Vacant Now | Best Price</a></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>300,000 AED/year</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.propertyfinder.ae/en/rent/villa-for-rent-dubai-serena-casa-viva-8547702.html\"><img src=\"https://www.propertyfinder.ae/property/38249bb951e238b79be37df1c7740601/500/356/MODE/868637/8547702-20c0fo.jpg?ctr=ae\" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><a href=\"https://www.propertyfinder.ae/en/rent/villa-for-rent-dubai-serena-casa-viva-8547702.html\">Open House on Weekend! Spanish Style Home! Type D+</a></h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>89,999 AED/year</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>4.&nbsp;<strong>Proscape&nbsp;</strong></h2>\r\n\r\n<p>It&rsquo;s not an exaggeration saying that this is one of the top landscaping companies in Dubai. Proscape is the one behind the stunning landscapes of many lovely attractions in the emirate like the Walk, Burj Khalifa surrounding area, and much more.&nbsp;</p>\r\n\r\n<p>You can expect nothing but perfection regarding the quality, creativity, and final outcome. Don&rsquo;t hesitate to reach this premium landscaping company in Dubai for villa or penthouse renovation.&nbsp;</p>\r\n\r\n<h3><strong>Location&nbsp;</strong></h3>\r\n\r\n<p>It&rsquo;s located in Building 3, Bay Square,&nbsp;<a href=\"https://www.propertyfinder.ae/en/community-guides/dubai/business-bay\" title=\"Business Bay\">Business Bay</a>, Dubai.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Services&nbsp;</strong></h3>\r\n\r\n<ul>\r\n	<li>Hard landscaping&nbsp;</li>\r\n	<li>Soft landscaping&nbsp;</li>\r\n	<li>Automatic irrigation</li>\r\n	<li>Design and build&nbsp;</li>\r\n	<li>Swimming pools&nbsp;</li>\r\n	<li>Steams and cascades</li>\r\n	<li>Fountains&nbsp;</li>\r\n	<li>Spa and health retreat</li>\r\n</ul>\r\n\r\n<h3><strong>Highlights</strong></h3>\r\n\r\n<ul>\r\n	<li>It&rsquo;s the executive landscaping company for Burj Khalifa landscapes, La Mer, and JBR the Walk.&nbsp;&nbsp;</li>\r\n</ul>\r\n\r\n<h3><strong>Customer Reviews</strong></h3>\r\n\r\n<ul>\r\n	<li>&ldquo;They have a team of professionals and experts in the landscaping industry.&rdquo;</li>\r\n	<li>&ldquo;They&rsquo;re one of the best landscape and irrigation companies in the UAE.&rdquo;</li>\r\n</ul>\r\n\r\n<h3><strong>Contact Information&nbsp;</strong></h3>\r\n\r\n<ul>\r\n	<li>+971 (0)4 277 0244</li>\r\n	<li><a href=\"mailto:info@proscapeuae.com\" rel=\"noreferrer noopener\" target=\"_blank\">info@proscapeuae.com</a>&nbsp;</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><img alt=\"\" src=\"https://www.propertyfinder.ae/blog/wp-content/uploads/2022/03/BK-4-1-1-800x601.jpeg\" style=\"height:601px; width:800px\" /></li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><img alt=\"\" src=\"https://www.propertyfinder.ae/blog/wp-content/uploads/2022/03/BK-5-1-1-800x488.jpeg\" style=\"height:488px; width:800px\" /></li>\r\n</ul>\r\n\r\n<p>Real Projects Photos</p>\r\n\r\n<h2>5.&nbsp;<strong>Milestone Landscaping</strong></h2>\r\n\r\n<p>In case you&rsquo;re planning to have a garden and a swimming pool in your sweet home, Milestone Landscaping is the one for such a mission.&nbsp;</p>\r\n\r\n<p>You won&rsquo;t search for different companies for each task as Milestone offers you both services. In addition, you can tell them what exactly you need and they will assign the best team members to execute the work.</p>\r\n\r\n<p>Besides, they will tell you all the suitable options and ideas that fit your home for outstanding results. Milestone is a good one among the swimming pool and landscaping companies in Dubai.</p>\r\n\r\n<h3><strong>Location&nbsp;</strong></h3>\r\n\r\n<p>It&rsquo;s located on 13A street,&nbsp;<a href=\"https://www.propertyfinder.ae/en/community-guides/dubai/al-quoz\" title=\"Al Quoz\">Al Quoz</a>&nbsp;Industrial Area 3, Dubai.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Services&nbsp;</strong></h3>\r\n\r\n<ul>\r\n	<li>Landscaping design&nbsp;</li>\r\n	<li>Pool design&nbsp;</li>\r\n	<li>Interior design</li>\r\n</ul>\r\n\r\n<h3><strong>Highlights&nbsp;</strong></h3>\r\n\r\n<ul>\r\n	<li>They offer both interior and landscape designing services.</li>\r\n</ul>\r\n\r\n<h3><strong>Customer Reviews</strong></h3>\r\n\r\n<ul>\r\n	<li>&ldquo;During the conversation with the responsible person from Milestone, I didn&rsquo;t feel that she wanted to win the business but rather gave me guidance. This is what I needed from day one.&rdquo;&nbsp;</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>&ldquo;When I met the team, I found them extremely efficient and aware of project management. Besides, the most important point for me and my husband was that they were able to work in our absence without any supervision from us, as we both travel a lot.&rdquo;</li>\r\n</ul>\r\n\r\n<h3><strong>Opening Hours&nbsp;</strong></h3>\r\n\r\n<p>9 am &ndash; 6 pm daily, off on Fridays and Saturdays&nbsp;</p>\r\n\r\n<h3><strong>Contact Information&nbsp;</strong></h3>\r\n\r\n<ul>\r\n	<li>+971 (0)4 340 9404</li>\r\n	<li>+971(0)52 219 4947</li>\r\n	<li><a href=\"mailto:sejal@milestonedubai.com\" rel=\"noreferrer noopener\" target=\"_blank\">sejal@milestonedubai.com</a>&nbsp;</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><img alt=\"\" src=\"https://www.propertyfinder.ae/blog/wp-content/uploads/2022/03/tenth-1-800x640.jpeg\" style=\"height:640px; width:800px\" /></li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><img alt=\"\" src=\"https://www.propertyfinder.ae/blog/wp-content/uploads/2022/03/10-1-1-800x521.jpeg\" style=\"height:521px; width:800px\" /></li>\r\n</ul>\r\n\r\n<p><strong>Real Projects Photos</strong></p>\r\n\r\n<p>You can check this guide for&nbsp;<a href=\"https://www.propertyfinder.ae/blog/the-cost-of-building-a-swimming-pool/\" rel=\"noreferrer noopener\" target=\"_blank\">the cost of building, maintaining, and cooling a pool in Dubai</a>&nbsp;on Property Finder for more information about the process.</p>\r\n\r\n<h2>6.&nbsp;<strong>Green Creation Landscaping</strong></h2>\r\n\r\n<p>Here is one more notable company for landscaping and gardening services in Dubai. Green Creation provides its customers with numerous services for both residential and commercial landscaping.&nbsp;</p>\r\n\r\n<p>If you&rsquo;re a business owner and want to make an office with innovative designs, you can surely contact them. Not just that, this company cares about the after sale experience, so they&rsquo;re welcome for any inquiries later on.&nbsp;</p>\r\n\r\n<h3><strong>Location</strong></h3>\r\n\r\n<p>It&rsquo;s located on Al Wasl road, Al Quoz, Dubai.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Services&nbsp;</strong></h3>\r\n\r\n<ul>\r\n	<li>Commercial landscaping&nbsp;</li>\r\n	<li>Residential landscaping&nbsp;</li>\r\n	<li>Landscape installation<strong>&nbsp;</strong></li>\r\n	<li>Outdoor furnishing&nbsp;</li>\r\n	<li>Outdoor lighting&nbsp;</li>\r\n	<li>Swimming pool maintenance&nbsp;</li>\r\n	<li>Water features</li>\r\n	<li>Irrigation installation</li>\r\n</ul>\r\n\r\n<h3><strong>Highlights&nbsp;</strong></h3>\r\n\r\n<ul>\r\n	<li>They have been in the field since 2008.&nbsp;</li>\r\n</ul>\r\n\r\n<h3><strong>Customer Reviews&nbsp;</strong></h3>\r\n\r\n<ul>\r\n	<li>&ldquo;I contacted them for my pool&rsquo;s maintenance and they were available in 48 hours with all the important tools. I was very satisfied with their service.&rdquo;&nbsp;</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>&ldquo;I got my pool and garden renovated by their team; they&rsquo;re very friendly, disciplined, and professional.&rdquo;</li>\r\n</ul>\r\n\r\n<h3><strong>Opening Hours&nbsp;</strong></h3>\r\n\r\n<p>9 am &ndash; 6 pm daily, off on Fridays&nbsp;</p>\r\n\r\n<h3><strong>Contact Information</strong></h3>\r\n\r\n<ul>\r\n	<li>+971 (0)50 948 4081&nbsp;</li>\r\n	<li><a href=\"mailto:info@green-creation.com\" rel=\"noreferrer noopener\" target=\"_blank\">info@green-creation.com</a>&nbsp;</li>\r\n</ul>\r\n\r\n<p><img alt=\"best landscaping companies in Dubai\" src=\"https://www.propertyfinder.ae/blog/wp-content/uploads/2022/03/shutterstock_1572478477-1-1-800x534.jpeg\" style=\"height:534px; width:800px\" /></p>\r\n\r\n<h2>7.&nbsp;<strong>Sunscape Landscape</strong></h2>\r\n\r\n<p>If you&rsquo;re living in Al Warsan and searching for a good company nearby, Sunscape is the optimum one. It&rsquo;s among the notable landscaping companies in the emirate thanks to its dedicated staff and management.&nbsp;</p>\r\n\r\n<p>At Sunscape, they hire highly talented and professional landscapers to ensure you a perfect experience. Besides, you will deal with the same designer through the whole process to avoid any misunderstandings and have the best results.&nbsp;</p>\r\n\r\n<p>Don&rsquo;t hesitate to book an appointment for a marvellous renovation.</p>\r\n\r\n<h3><strong>Location&nbsp;</strong></h3>\r\n\r\n<p>It&rsquo;s located in Florestic Garden street, Al Warsan 3, Dubai.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Services&nbsp;</strong></h3>\r\n\r\n<ul>\r\n	<li>Lawn and garden care&nbsp;</li>\r\n	<li>Irrigation and drainage</li>\r\n	<li>Planting and removal</li>\r\n	<li>Spring and fall cleanup&nbsp;</li>\r\n	<li>Green wall installation</li>\r\n	<li>Stone and hardscaping&nbsp;</li>\r\n</ul>\r\n\r\n<h3><strong>Highlights&nbsp;</strong></h3>\r\n\r\n<ul>\r\n	<li>You can shop different products, gardening tools, and decoration items from their online shop.&nbsp;</li>\r\n	<li>They worked with Jumeirah, Emaar, and Dubai&rsquo;s Government.</li>\r\n</ul>\r\n\r\n<h3><strong>Customer Reviews</strong></h3>\r\n\r\n<ul>\r\n	<li>&ldquo;They offered me the highest quality with affordable prices. My balcony turned out very beautiful&rdquo;&nbsp;</li>\r\n	<li>&ldquo;This is the best place in Warsan for plant shopping; they have the best collections with the best prices. Besides, the owner has great knowledge about the products so we can ask him for guidance.&rdquo;</li>\r\n</ul>\r\n\r\n<h3><strong>Opening Hours&nbsp;</strong></h3>\r\n\r\n<p>7 am &ndash; 9 pm daily, except Sundays 7 am &ndash; 1 pm&nbsp;</p>\r\n\r\n<h3><strong>Contact Information</strong></h3>\r\n\r\n<ul>\r\n	<li>+971 (0)54 335 5678</li>\r\n	<li><a href=\"mailto:info@souqgarden.com\" rel=\"noreferrer noopener\" target=\"_blank\">info@souqgarden.com</a>&nbsp;</li>\r\n</ul>\r\n\r\n<p><img alt=\"swimming pool and landscaping companies in Dubai\" src=\"https://www.propertyfinder.ae/blog/wp-content/uploads/2022/03/shutterstock_1789023152-1-1-800x422.jpeg\" style=\"height:422px; width:800px\" /></p>\r\n\r\n<h2>8.&nbsp;<strong>Opal Landscaping</strong></h2>\r\n\r\n<p>Whether you have a backyard or a rooftop in your home and want to add some green areas to it, Opal Landscaping is a highly recommended one.&nbsp;</p>\r\n\r\n<p>This awesome company has various landscaping services, so whatever change you need they will perfectly execute it. Moreover, in case you already have a home garden, they can help you in its maintenance and planting.&nbsp;</p>\r\n\r\n<p>With Opal Landscaping, you will enjoy the outdoors with your friends all day long.</p>\r\n\r\n<h3><strong>Location&nbsp;</strong></h3>\r\n\r\n<p>It&rsquo;s located in office no. 210, Al Makhawi building, Oud Metha road, Al Karama, Dubai.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Services&nbsp;</strong></h3>\r\n\r\n<ul>\r\n	<li>Mainatiance&nbsp;</li>\r\n	<li>Arborist&nbsp;</li>\r\n	<li>Planting&nbsp;</li>\r\n	<li>Construction</li>\r\n	<li>Design and Architecture.</li>\r\n</ul>\r\n\r\n<h3><strong>Highlights&nbsp;</strong></h3>\r\n\r\n<ul>\r\n	<li>In 2021, they were awarded Landscape upgradation works in&nbsp;<a href=\"https://www.propertyfinder.ae/en/community-guides/dubai/arabian-ranches\" title=\"Arabian Ranches\">Arabian Ranches</a>&nbsp;Communities by Emaar.&nbsp;&nbsp;</li>\r\n</ul>\r\n\r\n<h3><strong>Customer Reviews&nbsp;</strong></h3>\r\n\r\n<ul>\r\n	<li>&ldquo;It&rsquo;s a highly recommended one for landscaping and maintenance for villas with affordable prices.&rdquo;</li>\r\n	<li>&ldquo;It&rsquo;s a leading company in the landscaping business; they provide the best service with their experienced team, making my garden glow.&rdquo;&nbsp;</li>\r\n</ul>\r\n\r\n<h3><strong>Opening Hours&nbsp;</strong></h3>\r\n\r\n<ul>\r\n	<li>8:30 am &ndash; 6 pm daily</li>\r\n	<li>Saturdays and Sundays are off.</li>\r\n</ul>\r\n\r\n<h3><strong>Contact Information</strong></h3>\r\n\r\n<ul>\r\n	<li>+971 (0)4 370 6747</li>\r\n	<li><a href=\"mailto:opalland@eim.ae\" rel=\"noreferrer noopener\" target=\"_blank\">opalland@eim.ae</a>&nbsp;</li>\r\n</ul>', 'Best-Landscaping-Companies-in-Dubai', '19', 1, NULL, '2022-03-19 06:43:49', '2022-03-28 22:30:31');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `has_children` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 = no children, 1 = has children.',
  `children_id` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `image`, `has_children`, `children_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Community Guides', 'admin-assets/img/blog-category/1647324661659.jpg', 0, NULL, 1, '2022-03-15 00:11:01', '2022-03-15 00:11:01'),
(2, 'Property Blog', 'admin-assets/img/blog-category/1647324684550.jpg', 0, NULL, 1, '2022-03-15 00:11:24', '2022-03-15 00:11:24'),
(3, 'Renter\'s Guide', 'admin-assets/img/blog-category/1647324842857.jpg', 0, NULL, 1, '2022-03-15 00:14:02', '2022-03-15 00:14:02'),
(4, 'Buyer\'s Guide', 'admin-assets/img/blog-category/1647324867410.jpg', 0, NULL, 1, '2022-03-15 00:14:27', '2022-03-15 00:14:27');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `big_logo_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `small_logo_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_office_area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_office_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_office_state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_map_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_office` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `phone_number`, `email`, `big_logo_image`, `small_logo_image`, `head_office_area`, `head_office_city`, `head_office_state`, `orn`, `location`, `location_map_url`, `about_office`, `fb_url`, `whatsapp_number`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Verkhoturov Ivan', '12345678', 'company@email.com', 'admin-assets/img/companies/big/1646920268529.jpg', NULL, 'Nur-Sultan (Astana),', 'Esil district , st. K.', 'Mukhamedkhanova, 5, BC \"Centro\" 2nd floor, office 2-3', '66511', 'Nur-Sultan (Astana), Esil district, st. K. Mukhamedkhanova, 5, BC \"Centro\" 2nd floor, office 2-3', NULL, '<p>Trust the professionals!<br />\r\nOur company brings new standards of service quality to the real estate market, while being aware that the key figure in the company&#39;s business is the Client.<br />\r\nWe are the link between society and developer companies, clearly fixing all the requirements of our Clients for the quality of real estate.&nbsp;Thus, contributing to the improvement of the standard of living of its Clients and the creation of a competitive product for its Partners.<br />\r\nOur goal:<br />\r\nTo maintain a leading position in the real estate market.&nbsp;To be not just the largest company, but an authoritative expert organization.&nbsp;Perform the functions of a regulator and reviewer in the real estate market through the creation and implementation of its own system for assessing the quality of objects being sold.<br />\r\nOur values:<br />\r\nHonesty and reliability with Clients, Partners and employees<br />\r\nTransparency of business processes and mutual settlements<br />\r\nInformational openness to society<br />\r\nThe founders of the company have been in this field of activity for more than 7 years, employees have full information about the current situation in the real estate market in Astana and can confidently give a competent analysis to anyone residential facility.&nbsp;The same applies to construction companies.&nbsp;Attentive attitude to clients, careful study of every detail of the transaction allowed the company to take a leading position in the real estate market.<br />\r\nThe company has gained wide popularity due to its policy in the market of new buildings, offering customers affordable and comfortable housing on the most favorable terms.<br />\r\nIn its work, the company puts the interests of customers in the first place.&nbsp;Among the special options: socially oriented tariffs in the primary housing market, accompaniment to objects, competent analysis of construction companies from the company&#39;s catalog, an estimated calculation of profit from investments by the time construction is completed. A wide range of new buildings from reliable construction companies.</p>', NULL, '115615', 1, '2022-03-10 07:51:08', '2022-03-10 07:51:08');

-- --------------------------------------------------------

--
-- Table structure for table `fortnoxes`
--

CREATE TABLE `fortnoxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `integrations`
--

CREATE TABLE `integrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `platform_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2021_04_18_000001_create_media_table', 1),
(4, '2021_04_18_000002_create_permissions_table', 1),
(5, '2021_04_18_000003_create_fortnoxes_table', 1),
(6, '2021_04_18_000004_create_platforms_table', 1),
(7, '2021_04_18_000005_create_integrations_table', 1),
(8, '2021_04_18_000006_create_assets_histories_table', 1),
(9, '2021_04_18_000007_create_assets_table', 1),
(10, '2021_04_18_000008_create_asset_statuses_table', 1),
(11, '2021_04_18_000009_create_asset_locations_table', 1),
(12, '2021_04_18_000010_create_asset_categories_table', 1),
(13, '2021_04_18_000011_create_users_table', 1),
(14, '2021_04_18_000012_create_roles_table', 1),
(15, '2021_04_18_000013_create_role_user_pivot_table', 1),
(16, '2021_04_18_000014_create_permission_role_pivot_table', 1),
(17, '2021_04_18_000015_add_relationship_fields_to_assets_table', 1),
(18, '2021_04_18_000016_add_relationship_fields_to_assets_histories_table', 1),
(19, '2021_04_18_000017_add_relationship_fields_to_integrations_table', 1),
(20, '2021_04_18_000018_add_relationship_fields_to_fortnoxes_table', 1),
(21, '2022_03_04_180708_create_blog_categories_table', 2),
(22, '2022_03_05_065350_create_blogs_table', 3),
(23, '2022_03_05_093855_create_companies_table', 4),
(24, '2022_03_05_134330_create_agents_table', 5),
(25, '2022_03_06_041234_create_agent_areas_table', 6),
(26, '2022_03_06_050522_create_property_types_table', 7),
(27, '2022_03_06_063526_create_property_promotion_types_table', 8),
(28, '2022_03_06_071735_create_property_sub_images_table', 9),
(29, '2022_03_06_072906_create_property_ads_types_table', 9),
(31, '2022_03_06_080436_create_properties_table', 10),
(32, '2022_03_08_070654_create_s_e_o_s_table', 11),
(33, '2022_03_10_163236_check_verify', 12),
(34, '2022_03_19_133339_create_blog_seo', 13),
(35, '2022_03_22_140849_create_searches_table', 14);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user_management_access', NULL, NULL, NULL),
(2, 'permission_create', NULL, NULL, NULL),
(3, 'permission_edit', NULL, NULL, NULL),
(4, 'permission_show', NULL, NULL, NULL),
(5, 'permission_delete', NULL, NULL, NULL),
(6, 'permission_access', NULL, NULL, NULL),
(7, 'role_create', NULL, NULL, NULL),
(8, 'role_edit', NULL, NULL, NULL),
(9, 'role_show', NULL, NULL, NULL),
(10, 'role_delete', NULL, NULL, NULL),
(11, 'role_access', NULL, NULL, NULL),
(12, 'user_create', NULL, NULL, NULL),
(13, 'user_edit', NULL, NULL, NULL),
(14, 'user_show', NULL, NULL, NULL),
(15, 'user_delete', NULL, NULL, NULL),
(16, 'user_access', NULL, NULL, NULL),
(17, 'asset_management_access', NULL, NULL, NULL),
(18, 'asset_category_create', NULL, NULL, NULL),
(19, 'asset_category_edit', NULL, NULL, NULL),
(20, 'asset_category_show', NULL, NULL, NULL),
(21, 'asset_category_delete', NULL, NULL, NULL),
(22, 'asset_category_access', NULL, NULL, NULL),
(23, 'asset_location_create', NULL, NULL, NULL),
(24, 'asset_location_edit', NULL, NULL, NULL),
(25, 'asset_location_show', NULL, NULL, NULL),
(26, 'asset_location_delete', NULL, NULL, NULL),
(27, 'asset_location_access', NULL, NULL, NULL),
(28, 'asset_status_create', NULL, NULL, NULL),
(29, 'asset_status_edit', NULL, NULL, NULL),
(30, 'asset_status_show', NULL, NULL, NULL),
(31, 'asset_status_delete', NULL, NULL, NULL),
(32, 'asset_status_access', NULL, NULL, NULL),
(33, 'asset_create', NULL, NULL, NULL),
(34, 'asset_edit', NULL, NULL, NULL),
(35, 'asset_show', NULL, NULL, NULL),
(36, 'asset_delete', NULL, NULL, NULL),
(37, 'asset_access', NULL, NULL, NULL),
(38, 'assets_history_access', NULL, NULL, NULL),
(39, 'integration_create', NULL, NULL, NULL),
(40, 'integration_edit', NULL, NULL, NULL),
(41, 'integration_show', NULL, NULL, NULL),
(42, 'integration_delete', NULL, NULL, NULL),
(43, 'integration_access', NULL, NULL, NULL),
(44, 'platform_create', NULL, NULL, NULL),
(45, 'platform_edit', NULL, NULL, NULL),
(46, 'platform_show', NULL, NULL, NULL),
(47, 'platform_delete', NULL, NULL, NULL),
(48, 'platform_access', NULL, NULL, NULL),
(49, 'fortnox_create', NULL, NULL, NULL),
(50, 'fortnox_edit', NULL, NULL, NULL),
(51, 'fortnox_show', NULL, NULL, NULL),
(52, 'fortnox_delete', NULL, NULL, NULL),
(53, 'fortnox_access', NULL, NULL, NULL),
(54, 'profile_password_edit', NULL, NULL, NULL),
(55, 'blog-module', '2022-03-05 03:31:20', '2022-03-05 03:31:20', NULL),
(56, 'blog-categories', '2022-03-05 03:31:46', '2022-03-05 03:31:46', NULL),
(57, 'blogs-section', '2022-03-05 03:32:12', '2022-03-05 03:32:12', NULL),
(58, 'company-module', '2022-03-05 03:35:47', '2022-03-05 03:35:47', NULL),
(59, 'company-menu', '2022-03-05 03:35:55', '2022-03-05 03:35:55', NULL),
(60, 'agent-menu', '2022-03-05 03:36:04', '2022-03-05 03:36:04', NULL),
(61, 'property-module', '2022-03-05 23:28:12', '2022-03-05 23:28:12', NULL),
(62, 'property-type', '2022-03-05 23:37:35', '2022-03-05 23:37:35', NULL),
(63, 'property-promotion-type', '2022-03-06 01:14:00', '2022-03-06 01:14:00', NULL),
(64, 'property-ads-type', '2022-03-06 01:49:41', '2022-03-06 01:49:41', NULL),
(65, 'property-menu', '2022-03-06 04:12:24', '2022-03-06 04:12:24', NULL),
(66, 'seo-module', '2022-03-08 01:04:01', '2022-03-08 01:04:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(1, 36),
(1, 37),
(1, 38),
(1, 39),
(1, 40),
(1, 41),
(1, 42),
(1, 43),
(1, 44),
(1, 45),
(1, 46),
(1, 47),
(1, 48),
(1, 49),
(1, 50),
(1, 51),
(1, 52),
(1, 53),
(1, 54),
(2, 17),
(2, 18),
(2, 19),
(2, 20),
(2, 21),
(2, 22),
(2, 23),
(2, 24),
(2, 25),
(2, 26),
(2, 27),
(2, 28),
(2, 29),
(2, 30),
(2, 31),
(2, 32),
(2, 33),
(2, 34),
(2, 35),
(2, 36),
(2, 37),
(2, 38),
(2, 39),
(2, 40),
(2, 41),
(2, 42),
(2, 43),
(2, 44),
(2, 45),
(2, 46),
(2, 47),
(2, 48),
(2, 49),
(2, 50),
(2, 51),
(2, 52),
(2, 53),
(2, 54),
(1, 55),
(1, 56),
(1, 57),
(1, 58),
(1, 59),
(1, 60),
(1, 61),
(1, 62),
(1, 63),
(1, 64),
(1, 65),
(1, 66);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `platforms`
--

CREATE TABLE `platforms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `platforms`
--

INSERT INTO `platforms` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'test', '2022-03-04 12:00:24', '2022-03-04 12:00:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) NOT NULL,
  `agent_id` bigint(20) DEFAULT NULL,
  `property_type_id` bigint(20) NOT NULL,
  `property_ads_type_id` bigint(20) NOT NULL,
  `property_promotion_type_id` bigint(20) NOT NULL,
  `property_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bedrooms` mediumint(9) DEFAULT NULL,
  `bathrooms` mediumint(9) DEFAULT NULL,
  `parking` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_price` double(10,2) NOT NULL DEFAULT 0.00,
  `yearly_service_charge` int(11) DEFAULT NULL,
  `rent_charge_per_year` int(11) DEFAULT NULL,
  `property_interest_rate` int(11) DEFAULT NULL,
  `location_area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_completion` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0 => not completed, 1=> completed',
  `is_furnished` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0 => not furnished, 1=> furnished',
  `main_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_map_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_video_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `panoramic_360_view` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_ordered` int(11) NOT NULL DEFAULT 0,
  `lat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hit_count` int(11) NOT NULL DEFAULT 0,
  `updated_by` int(11) DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_verified` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `company_id`, `agent_id`, `property_type_id`, `property_ads_type_id`, `property_promotion_type_id`, `property_title`, `property_size`, `bedrooms`, `bathrooms`, `parking`, `property_price`, `yearly_service_charge`, `rent_charge_per_year`, `property_interest_rate`, `location_area`, `location_city`, `location_country`, `property_completion`, `is_furnished`, `main_image`, `property_map_url`, `property_description`, `property_video_url`, `panoramic_360_view`, `total_ordered`, `lat`, `lon`, `hit_count`, `updated_by`, `slug`, `extra`, `status`, `created_at`, `updated_at`, `is_verified`) VALUES
(1, 1, 1, 1, 1, 1, '1-room apartment, 36.1 m², 8/9 floor, E-102 street', '16000', 1, 1, 'no', 16600000.00, NULL, NULL, NULL, 'Nur-Sultan (Astana)', 'Yesil', 'kazakistan', 1, 0, 'admin-assets/img/properties/1647000101228.jpg', NULL, '<p>Developed infrastructure. Within walking distance: a school, kindergartens, a cardiac surgery center, a children&#39;s rehabilitation center, Magnum shopping center. near the university. Nazarbayev, EXPO.</p>\r\n\r\n<pre>\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto corporis deleniti dolor ea earum, explicabo id inventore nobis perferendis quod ratione sed tempore? Assumenda error laudantium obcaecati optio? Expedita, incidunt?</pre>\r\n\r\n<pre>\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto corporis deleniti dolor ea earum, explicabo id inventore nobis perferendis quod ratione sed tempore? Assumenda error laudantium obcaecati optio? Expedita, incidunt?</pre>\r\n\r\n<pre>\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto corporis deleniti dolor ea earum, explicabo id inventore nobis perferendis quod ratione sed tempore? Assumenda error laudantium obcaecati optio? Expedita, incidunt?</pre>\r\n\r\n<pre>\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto corporis deleniti dolor ea earum, explicabo id inventore nobis perferendis quod ratione sed tempore? Assumenda error laudantium obcaecati optio? Expedita, incidunt?</pre>\r\n\r\n<pre>\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto corporis deleniti dolor ea earum, explicabo id inventore nobis perferendis quod ratione sed tempore? Assumenda error laudantium obcaecati optio? Expedita, incidunt?</pre>\r\n\r\n<pre>\r\nLcorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto corporis deleniti dolor ea earum, explicabo id inventore nobis perferendis quod ratione sed tempore? Assumenda error laudantium obcaecati optio? Expedita, incidunt?</pre>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto corporis deleniti dolor ea earum, explicabo id inventore nobis perferendis quod ratione sed tempore? Assumenda error laudantium obcaecati optio? Expedita, incidunt?</p>', NULL, NULL, 0, '54.98', '82.89', 65, 1, '1-room-apartment,-36.1-m²,-8/9-floor,-E-102-street', NULL, 1, '2022-03-11 06:01:41', '2022-03-26 12:44:43', 1),
(2, 1, 1, 2, 2, 2, '2-room apartment, 62.2 m², 2/5 floor, Raiymbek avenue 502A', '622', 2, 2, '1', 34000000.00, 12000, 10, NULL, 'Almaty', 'Auezovsky district', 'kazakistan', 1, 1, 'admin-assets/img/properties/1647000375991.webp', NULL, '<p>A 2-room apartment is put up for sale in the Auezov district of Almaty. Apartment on the 2nd floor, spacious, bright rooms, windows to the north, isolated rooms, large hall. Kitchen with an attached loggia of about 25 m2. Loggia for the whole apartment. Partially furnished, by agreement. Great layout, spacious rooms. Developed infrastructure, within walking distance: Kindergarten No. 52, 50 and 44, 28 and 111. Schools 121, 42 and 133. Grand Park, Asia Park, Metro, Obi, 12 months, market, banks, beauty salons, pharmacies, dentistry , all within walking distance. Convenient transportation. Profitable investment, the apartment is convenient both for living and for renting. The object is sold by a real estate agent, the buyer does NOT pay for the service! Thank you for looking at this object, good luck with your search.</p>', NULL, NULL, 0, '54.98', '82.89', 9, 1, '2-room-apartment,-62.2-m²,-2/5-floor,-Raiymbek-avenue-502A', NULL, 1, '2022-03-11 06:06:15', '2022-03-29 10:24:23', 0),
(3, 1, 1, 4, 3, 1, '2-room apartment, 57 m², 9/12 floor, Aksai-1 microdistrict - Sain', '912', NULL, NULL, '1', 33000000.00, 33000, 10, NULL, 'Almaty', 'Auezovsky district', 'kazakistan', 1, 1, 'admin-assets/img/properties/1647000585410.webp', NULL, '<div class=\"a-options-text a-text-white-spaces\" style=\"padding:0px; text-align:start\"><span style=\"font-size:14px\"><span style=\"color:#000000\"><span style=\"font-family:&quot;Open Sans&quot;,sans-serif\"><span style=\"background-color:#ffffff\">Plastic windows, non-corner, isolated rooms, built-in kitchen, new plumbing, counters, quiet courtyard, air conditioning, convenient for commerce.</span></span></span></span></div>\r\n\r\n<div class=\"a-text a-text-white-spaces\" style=\"padding:0px; text-align:start\"><span style=\"font-size:14px\"><span style=\"color:#000000\"><span style=\"font-family:&quot;Open Sans&quot;,sans-serif\"><span style=\"background-color:#ffffff\">Dear buyers! The real estate agency &quot;D&amp;R&quot; will present you with an object for purchase. &bull; general INFORMATION: &bull; total area - 57 &bull; Living area - 36 &bull; Kitchen area - 9 &bull; year of construction -1991 &bull; Wall material - monolith &bull; Ceiling height -2.8 &bull; Floor - laminate &bull; Floors - 9/12 &bull; Furnished - completely remains in sq. &bull; Air conditioning - 1 &bull; Condition - excellent fresh &bull; Bathroom - separate &bull; Balcony - 1 &bull; Glazed balcony - yes &bull; Parking - in the yard &bull; Infrastructure The apartment is located in the Aksay1 microdistrict, between Tole bi and Raimbek, Momyshuly and Sain. Great price! Documents are in order. Friendly neighbors. Good hosts. Very comfortable, bright, warm, clean apartment. rooms are isolated. The apartment is freshly renovated, the apartment is odorless. The front door is new. The hall has a balcony glazed with wardrobes. The apartment presented to your attention is located in one of the sought-after urban areas. The yard is clean, quiet with playgrounds. Everything you need for your life, you can easily find in close proximity to the house. Near the shopping center Asia Park, a chain of construction stores 12 months, trading house Aksai3, a chain of supermarkets SMALL, MAGNUM, preschool, secondary educational institutions, school number 133, medical. institutions, clinics, restaurants, entertainment centers. Parking is no problem! Transport is developed in all directions. Good offer for living and renting. View at a convenient time for you. Additional information by phone. Trade is appropriate. Consultations. call! ___________________ &bull; Call and sign up for a viewing! &bull; VIEWING OBJECTS - FREE OF CHARGE!</span></span></span></span></div>', NULL, NULL, 0, '54.98', '82.89', 12, 1, '2-room-apartment,-57-m²,-9/12-floor,-Aksai-1-microdistrict---Sain', NULL, 1, '2022-03-11 06:09:45', '2022-03-28 22:27:22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `property_ads_types`
--

CREATE TABLE `property_ads_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_ads_types`
--

INSERT INTO `property_ads_types` (`id`, `type_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Buy', 1, '2022-03-10 08:29:50', '2022-03-10 08:29:50'),
(2, 'Rent', 1, '2022-03-10 08:30:05', '2022-03-10 08:30:05'),
(3, 'Commercial', 1, '2022-03-10 08:30:33', '2022-03-10 08:30:33');

-- --------------------------------------------------------

--
-- Table structure for table `property_promotion_types`
--

CREATE TABLE `property_promotion_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_promotion_types`
--

INSERT INTO `property_promotion_types` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'PREMIUM', 1, '2022-03-10 08:21:07', '2022-03-10 08:21:07'),
(2, 'FEATURED', 1, '2022-03-10 08:25:57', '2022-03-10 08:25:57');

-- --------------------------------------------------------

--
-- Table structure for table `property_sub_images`
--

CREATE TABLE `property_sub_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` bigint(20) NOT NULL,
  `big_img_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `small_img_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_sub_images`
--

INSERT INTO `property_sub_images` (`id`, `property_id`, `big_img_url`, `small_img_url`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin-assets/img/property-sub-images/big/1647000101944.jpg', NULL, '2022-03-11 06:01:41', '2022-03-11 06:01:41'),
(2, 1, 'admin-assets/img/property-sub-images/big/1647000101508.jpg', NULL, '2022-03-11 06:01:41', '2022-03-11 06:01:41'),
(3, 1, 'admin-assets/img/property-sub-images/big/1647000101950.jpg', NULL, '2022-03-11 06:01:41', '2022-03-11 06:01:41'),
(4, 1, 'admin-assets/img/property-sub-images/big/164700010154.jpg', NULL, '2022-03-11 06:01:41', '2022-03-11 06:01:41'),
(5, 2, 'admin-assets/img/property-sub-images/big/1647000375756.webp', NULL, '2022-03-11 06:06:15', '2022-03-11 06:06:15'),
(6, 2, 'admin-assets/img/property-sub-images/big/1647000375245.webp', NULL, '2022-03-11 06:06:15', '2022-03-11 06:06:15'),
(7, 2, 'admin-assets/img/property-sub-images/big/1647000375940.webp', NULL, '2022-03-11 06:06:15', '2022-03-11 06:06:15'),
(8, 3, 'admin-assets/img/property-sub-images/big/164700058511.webp', NULL, '2022-03-11 06:09:45', '2022-03-11 06:09:45'),
(9, 3, 'admin-assets/img/property-sub-images/big/1647000585347.webp', NULL, '2022-03-11 06:09:45', '2022-03-11 06:09:45'),
(10, 3, 'admin-assets/img/property-sub-images/big/1647000585679.webp', NULL, '2022-03-11 06:09:45', '2022-03-11 06:09:45');

-- --------------------------------------------------------

--
-- Table structure for table `property_types`
--

CREATE TABLE `property_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_types`
--

INSERT INTO `property_types` (`id`, `type_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Apartments', 1, '2022-03-10 08:18:59', '2022-03-10 08:18:59'),
(2, 'Villas', 1, '2022-03-10 08:19:07', '2022-03-10 08:19:07'),
(3, 'Townhouses', 1, '2022-03-10 08:19:22', '2022-03-10 08:19:22'),
(4, 'Offices', 1, '2022-03-10 08:19:38', '2022-03-10 08:19:38'),
(5, 'Warehouses', 1, '2022-03-10 08:20:20', '2022-03-10 08:20:20'),
(6, 'Shops', 1, '2022-03-10 08:20:30', '2022-03-10 08:20:30');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', NULL, NULL, NULL),
(2, 'Agent', NULL, NULL, NULL),
(3, 'User', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `searches`
--

CREATE TABLE `searches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `search_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_id` bigint(20) DEFAULT NULL,
  `property_ads_type_id` bigint(20) DEFAULT NULL,
  `property_type_id` bigint(20) DEFAULT NULL,
  `bedrooms` mediumint(9) DEFAULT NULL,
  `bathrooms` mediumint(9) DEFAULT NULL,
  `min_price` double(10,2) DEFAULT NULL,
  `max_price` double(10,2) DEFAULT NULL,
  `req_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'buy' COMMENT 'buy or rent',
  `property_size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_furnished` tinyint(4) DEFAULT 1 COMMENT '1 => furnished & 0 => not furnished',
  `is_completed` tinyint(4) DEFAULT 1 COMMENT '1 => completed & 0 => not completed',
  `extra_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hit_count` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `searches`
--

INSERT INTO `searches` (`id`, `search_text`, `property_id`, `property_ads_type_id`, `property_type_id`, `bedrooms`, `bathrooms`, `min_price`, `max_price`, `req_type`, `property_size`, `is_furnished`, `is_completed`, `extra_content`, `hit_count`, `created_at`, `updated_at`) VALUES
(1, 'room', NULL, 1, 4, 2, 3, 200.00, 400.00, NULL, NULL, NULL, NULL, NULL, 8, '2022-03-25 09:15:10', '2022-03-26 11:24:26'),
(2, 'room', NULL, 1, 4, 2, 3, 200.00, 400.00, NULL, NULL, NULL, NULL, NULL, 7, '2022-03-25 09:17:18', '2022-03-26 11:24:26'),
(3, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'rent', NULL, 1, NULL, NULL, 6, '2022-03-26 11:18:48', '2022-03-27 09:11:39'),
(4, 'room', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2022-03-26 11:19:57', '2022-03-26 11:24:26'),
(5, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'rent', NULL, 1, NULL, NULL, 5, '2022-03-26 11:20:27', '2022-03-27 09:11:39'),
(6, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'rent', NULL, 1, NULL, NULL, 4, '2022-03-26 11:24:16', '2022-03-27 09:11:39'),
(7, 'room', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-03-26 11:24:26', '2022-03-26 11:24:26'),
(8, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, '2022-03-27 09:11:25', '2022-03-27 09:11:39'),
(9, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2022-03-27 09:11:36', '2022-03-27 09:11:40'),
(10, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-03-27 09:11:40', '2022-03-27 09:11:40');

-- --------------------------------------------------------

--
-- Table structure for table `s_e_o_s`
--

CREATE TABLE `s_e_o_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` bigint(20) DEFAULT NULL,
  `static_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `blog_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$lTVtafHcgc93qDjhQDYiUeu0bYWR6EG.64x1n6eQPVAf52WcGLzou', NULL, NULL, NULL, NULL),
(2, 'Man', 'admin@gmail.com', NULL, '$2y$10$0Tde1IQN8znWeG2XfL0XKOkUF6nuuQzPdAy7401fsqh7UBbQarYqO', NULL, '2022-03-21 07:32:03', '2022-03-21 07:32:03', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agent_areas`
--
ALTER TABLE `agent_areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_fk_3639352` (`category_id`),
  ADD KEY `status_fk_3639356` (`status_id`),
  ADD KEY `location_fk_3639357` (`location_id`),
  ADD KEY `assigned_to_fk_3639359` (`assigned_to_id`);

--
-- Indexes for table `assets_histories`
--
ALTER TABLE `assets_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `asset_fk_3639364` (`asset_id`),
  ADD KEY `status_fk_3639365` (`status_id`),
  ADD KEY `location_fk_3639366` (`location_id`),
  ADD KEY `assigned_user_fk_3639367` (`assigned_user_id`);

--
-- Indexes for table `asset_categories`
--
ALTER TABLE `asset_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asset_locations`
--
ALTER TABLE `asset_locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asset_statuses`
--
ALTER TABLE `asset_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fortnoxes`
--
ALTER TABLE `fortnoxes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fortnoxes_client_unique` (`client`),
  ADD UNIQUE KEY `fortnoxes_access_code_unique` (`access_code`),
  ADD KEY `user_fk_3694240` (`user_id`);

--
-- Indexes for table `integrations`
--
ALTER TABLE `integrations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_fk_3664297` (`user_id`),
  ADD KEY `platform_fk_3694310` (`platform_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `role_id_fk_3639322` (`role_id`),
  ADD KEY `permission_id_fk_3639322` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `platforms`
--
ALTER TABLE `platforms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `platforms_name_unique` (`name`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_ads_types`
--
ALTER TABLE `property_ads_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_promotion_types`
--
ALTER TABLE `property_promotion_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_sub_images`
--
ALTER TABLE `property_sub_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_types`
--
ALTER TABLE `property_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `user_id_fk_3639331` (`user_id`),
  ADD KEY `role_id_fk_3639331` (`role_id`);

--
-- Indexes for table `searches`
--
ALTER TABLE `searches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_e_o_s`
--
ALTER TABLE `s_e_o_s`
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
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agent_areas`
--
ALTER TABLE `agent_areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assets_histories`
--
ALTER TABLE `assets_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `asset_categories`
--
ALTER TABLE `asset_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `asset_locations`
--
ALTER TABLE `asset_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `asset_statuses`
--
ALTER TABLE `asset_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fortnoxes`
--
ALTER TABLE `fortnoxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `integrations`
--
ALTER TABLE `integrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `platforms`
--
ALTER TABLE `platforms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `property_ads_types`
--
ALTER TABLE `property_ads_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `property_promotion_types`
--
ALTER TABLE `property_promotion_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `property_sub_images`
--
ALTER TABLE `property_sub_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `property_types`
--
ALTER TABLE `property_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `searches`
--
ALTER TABLE `searches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `s_e_o_s`
--
ALTER TABLE `s_e_o_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assets`
--
ALTER TABLE `assets`
  ADD CONSTRAINT `assigned_to_fk_3639359` FOREIGN KEY (`assigned_to_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `category_fk_3639352` FOREIGN KEY (`category_id`) REFERENCES `asset_categories` (`id`),
  ADD CONSTRAINT `location_fk_3639357` FOREIGN KEY (`location_id`) REFERENCES `asset_locations` (`id`),
  ADD CONSTRAINT `status_fk_3639356` FOREIGN KEY (`status_id`) REFERENCES `asset_statuses` (`id`);

--
-- Constraints for table `assets_histories`
--
ALTER TABLE `assets_histories`
  ADD CONSTRAINT `asset_fk_3639364` FOREIGN KEY (`asset_id`) REFERENCES `assets` (`id`),
  ADD CONSTRAINT `assigned_user_fk_3639367` FOREIGN KEY (`assigned_user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `location_fk_3639366` FOREIGN KEY (`location_id`) REFERENCES `asset_locations` (`id`),
  ADD CONSTRAINT `status_fk_3639365` FOREIGN KEY (`status_id`) REFERENCES `asset_statuses` (`id`);

--
-- Constraints for table `fortnoxes`
--
ALTER TABLE `fortnoxes`
  ADD CONSTRAINT `user_fk_3694240` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `integrations`
--
ALTER TABLE `integrations`
  ADD CONSTRAINT `platform_fk_3694310` FOREIGN KEY (`platform_id`) REFERENCES `platforms` (`id`),
  ADD CONSTRAINT `user_fk_3664297` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_id_fk_3639322` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_id_fk_3639322` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_id_fk_3639331` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id_fk_3639331` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

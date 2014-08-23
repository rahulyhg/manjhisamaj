-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 23, 2014 at 01:43 PM
-- Server version: 5.5.37-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `manjhi`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievers`
--

CREATE TABLE IF NOT EXISTS `achievers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `profile_picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_no` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_approved` tinyint(4) NOT NULL DEFAULT '0',
  `is_enabled` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `achievers`
--

INSERT INTO `achievers` (`id`, `name`, `profile_picture`, `address`, `contact_no`, `email`, `position`, `is_approved`, `is_enabled`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Vikas Burman', 'new image', 'Ace ', '9039545170', 'vikas.b@cisinlabs.com', 'Software Developer', 1, 1, '2014-07-17 13:26:28', '2014-07-17 13:26:28', NULL),
(2, 'dfsdf', 'Fu8XVM_comingsoon.jpg', 'sdf', 'sdf', 'sdf@gmail.com', 'sdf', 1, 1, '2014-07-27 08:03:07', '2014-07-27 08:03:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `castes`
--

CREATE TABLE IF NOT EXISTS `castes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `is_enabled` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `castes`
--

INSERT INTO `castes` (`id`, `title`, `is_enabled`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 'Kewat', 1, '2014-07-12 07:00:44', '2014-07-12 07:00:44', NULL),
(8, 'Mewari', 1, '2014-07-12 07:00:52', '2014-07-12 07:00:52', NULL),
(9, 'Mallah', 1, '2014-07-13 10:04:53', '2014-07-13 10:04:53', NULL),
(10, 'Machhva', 1, '2014-07-13 10:06:45', '2014-07-13 10:06:45', NULL),
(12, 'jai', 1, '2014-07-13 11:16:08', '2014-07-13 11:16:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `childs`
--

CREATE TABLE IF NOT EXISTS `childs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `profile_picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `father_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `school` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `percent` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `is_archived` tinyint(4) NOT NULL DEFAULT '0',
  `is_enabled` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `childs`
--

INSERT INTO `childs` (`id`, `name`, `profile_picture`, `father_name`, `address`, `class`, `school`, `percent`, `is_archived`, `is_enabled`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'Vikas Burman', 'ZICe6a_comingsoon.jpg', 'Mannulal Burman', 'ACE', 'MCA', 'IGNOU', '75', 1, 1, '2014-07-27 05:25:29', '2014-07-27 07:01:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `is_enabled` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `country_id`, `state_id`, `title`, `is_enabled`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 1, 1, 'Jabalpur', 1, '2014-07-13 09:22:53', '2014-07-13 09:22:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `is_enabled` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `title`, `is_enabled`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'India', 1, '2014-07-12 14:19:48', '2014-07-12 14:20:14', NULL),
(3, 'USA', 1, '2014-07-12 14:20:24', '2014-07-12 14:20:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `donates`
--

CREATE TABLE IF NOT EXISTS `donates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_no` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `amount` decimal(7,2) NOT NULL,
  `donate_date` datetime NOT NULL,
  `is_enabled` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE IF NOT EXISTS `educations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `education_category_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_enabled` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `education_category_id`, `title`, `is_enabled`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'MCA', 1, '2014-07-13 12:04:52', '2014-07-13 12:04:52', NULL),
(2, 2, 'BCA', 1, '2014-07-13 13:59:01', '2014-07-13 13:59:01', NULL),
(3, 1, 'MSc', 1, '2014-07-13 13:59:19', '2014-07-13 13:59:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `education_categories`
--

CREATE TABLE IF NOT EXISTS `education_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_enabled` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `education_categories`
--

INSERT INTO `education_categories` (`id`, `title`, `is_enabled`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Master Degree', 1, '2014-07-13 11:44:53', '2014-07-13 11:44:53', NULL),
(2, 'Bachelor Degree', 1, '2014-07-13 11:45:55', '2014-07-13 11:45:55', NULL),
(3, 'Post Graduation', 1, '2014-07-13 11:46:10', '2014-07-13 11:46:10', NULL),
(4, 'Certification', 1, '2014-07-13 11:47:03', '2014-07-13 11:50:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `place` text COLLATE utf8_unicode_ci NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `duration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_no1` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `contact_no2` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `is_enabled` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `place`, `start_date`, `end_date`, `duration`, `contact_no1`, `contact_no2`, `is_enabled`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'jai', 'sdfsdfdsf', 'dsfsdfdsfdsf', '2014-03-01 00:00:00', '1901-01-10 00:00:00', 'sdf', 'sdfsdf', 'sdfdsf', 1, '2014-07-27 11:51:55', '2014-07-27 12:58:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `link_category_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_enabled` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `link_category_id`, `title`, `link`, `is_enabled`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 'http://www.google.co.in', '', 1, '2014-07-16 12:45:43', '2014-07-16 12:45:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `link_categories`
--

CREATE TABLE IF NOT EXISTS `link_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `is_enabled` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `link_categories`
--

INSERT INTO `link_categories` (`id`, `title`, `is_enabled`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Goverment ', 1, '2014-07-16 12:44:50', '2014-07-16 12:44:50', NULL),
(2, 'Educational', 1, '2014-07-16 12:44:58', '2014-07-16 12:44:58', NULL),
(3, 'Others', 1, '2014-07-16 12:45:05', '2014-07-16 12:45:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_06_28_141029_create_users_table', 1),
('2014_06_28_163454_create_castes_table', 1),
('2014_06_28_163521_create_countries_table', 1),
('2014_06_28_163547_create_states_table', 1),
('2014_06_28_163604_create_cities_table', 1),
('2014_06_28_163618_create_education_categories_table', 1),
('2014_06_28_163637_create_educations_table', 1),
('2014_06_28_170237_create_childs_table', 1),
('2014_06_28_170302_create_events_table', 1),
('2014_06_28_170339_create_suggestions_table', 1),
('2014_06_28_170420_create_link_categories_table', 1),
('2014_06_28_170436_create_links_table', 1),
('2014_06_28_170611_create_donates_table', 1),
('2014_06_28_170633_create_achievers_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `is_enabled` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `country_id`, `title`, `is_enabled`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Madhya Pradesh [MP]', 1, '2014-07-12 15:27:01', '2014-07-12 15:27:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

CREATE TABLE IF NOT EXISTS `suggestions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_no` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `is_approved` tinyint(4) NOT NULL DEFAULT '0',
  `is_enabled` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `suggestions`
--

INSERT INTO `suggestions` (`id`, `name`, `email`, `contact_no`, `message`, `is_approved`, `is_enabled`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Vikas Burman', 'vikas.b@cisinlabs.com', '9039545170', 'test test', 2, 1, '2014-07-16 13:22:01', '2014-07-17 13:10:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `profile_code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `middile_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` datetime NOT NULL,
  `age` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `gender` tinyint(4) NOT NULL DEFAULT '2',
  `street` text COLLATE utf8_unicode_ci NOT NULL,
  `village` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `mobile1` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `mobile2` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `marital_status` tinyint(4) NOT NULL DEFAULT '0',
  `caste_id` int(11) NOT NULL,
  `sub_caste` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gothra` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `height` decimal(2,2) NOT NULL,
  `weight` decimal(3,2) NOT NULL,
  `body_type` tinyint(4) NOT NULL DEFAULT '2',
  `complexion` tinyint(4) NOT NULL DEFAULT '3',
  `physical_status` tinyint(4) NOT NULL DEFAULT '1',
  `handicap_description` text COLLATE utf8_unicode_ci NOT NULL,
  `highest_education` tinyint(4) NOT NULL,
  `employeed_in` tinyint(4) NOT NULL DEFAULT '2',
  `occupation_description` text COLLATE utf8_unicode_ci NOT NULL,
  `annual_income` decimal(7,2) NOT NULL,
  `food` tinyint(4) NOT NULL DEFAULT '2',
  `smoking` tinyint(4) NOT NULL DEFAULT '1',
  `drinking` tinyint(4) NOT NULL DEFAULT '1',
  `is_manglik` tinyint(4) NOT NULL DEFAULT '3',
  `rashi` tinyint(4) NOT NULL DEFAULT '0',
  `family_status` tinyint(4) NOT NULL DEFAULT '2',
  `family_type` tinyint(4) NOT NULL DEFAULT '2',
  `family_values` tinyint(4) NOT NULL DEFAULT '0',
  `family_origin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `father_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `father_occupation` text COLLATE utf8_unicode_ci NOT NULL,
  `mother_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mother_occupation` text COLLATE utf8_unicode_ci NOT NULL,
  `brother_nos` tinyint(4) NOT NULL,
  `brother_married` tinyint(4) NOT NULL,
  `sister_nos` tinyint(4) NOT NULL,
  `sister_married` tinyint(4) NOT NULL,
  `about_yourself` text COLLATE utf8_unicode_ci NOT NULL,
  `partner_description` text COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `skype` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_archived` tinyint(4) NOT NULL DEFAULT '0',
  `is_enabled` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `profile_code`, `email`, `username`, `password`, `first_name`, `middile_name`, `last_name`, `date_of_birth`, `age`, `gender`, `street`, `village`, `city_id`, `state_id`, `country_id`, `phone`, `mobile1`, `mobile2`, `marital_status`, `caste_id`, `sub_caste`, `gothra`, `height`, `weight`, `body_type`, `complexion`, `physical_status`, `handicap_description`, `highest_education`, `employeed_in`, `occupation_description`, `annual_income`, `food`, `smoking`, `drinking`, `is_manglik`, `rashi`, `family_status`, `family_type`, `family_values`, `family_origin`, `father_name`, `father_occupation`, `mother_name`, `mother_occupation`, `brother_nos`, `brother_married`, `sister_nos`, `sister_married`, `about_yourself`, `partner_description`, `facebook`, `twitter`, `skype`, `is_archived`, `is_enabled`, `created_at`, `updated_at`, `deleted_at`, `remember_token`) VALUES
(1, '101', 'bvikasvburman@gmail.com', 'admin', '$2y$10$wD1/5L1eWUvjqZ7bcG/n/OgvLk8114EC8tXGGrjn8pSvnf/m8TLKa', 'Vikas', '', 'Burman', '0000-00-00 00:00:00', '', 2, '', '', 0, 0, 0, '', '', '', 0, 0, '', '', 0.00, 0.00, 2, 3, 1, '', 0, 2, '', 0.00, 2, 1, 1, 3, 0, 2, 2, 0, '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', 0, 1, '0000-00-00 00:00:00', '2014-07-06 13:20:59', NULL, 'ZKR9XZmtwXYPUEAot6radyDHNKGBBFb8DEyh6D9iDu36ohXLrFu3AtCInxKI');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2016 at 08:32 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `resume`
--

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `section` varchar(255) NOT NULL,
  `status` enum('visible','hidden') NOT NULL,
  `updated_on` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `section`, `status`, `updated_on`) VALUES
(1, 'education', 'visible', '2016-09-19 01:09:02'),
(2, 'education_master', 'hidden', '2016-09-17 00:00:00'),
(3, 'education_bachelor', 'hidden', '2016-09-17 00:00:00'),
(4, 'work_experience', 'visible', '2016-09-19 01:09:57'),
(6, 'skills_competencies', 'visible', '2016-09-19 01:09:19'),
(7, 'projects', 'visible', '2016-09-19 07:09:19'),
(8, 'clubs_and_activities', 'visible', '2016-09-19 09:09:16'),
(9, 'publications', 'visible', '2016-09-19 09:09:07'),
(10, 'interests', 'visible', '2016-09-19 07:09:07'),
(11, 'researcher', 'hidden', '2016-09-17 00:00:00'),
(12, 'software_engineer', 'hidden', '2016-09-17 00:00:00'),
(13, 'engineering_intern', 'hidden', '2016-09-17 00:00:00'),
(14, 'healthscope', 'hidden', '2016-09-17 00:00:00'),
(15, 'multi_thesis_funded_by_shephard_pie', 'hidden', '2016-09-17 00:00:00'),
(16, 'roger_tennis_on_webgl', 'hidden', '2016-09-17 00:00:00'),
(17, 'husky_tennis_club', 'hidden', '2016-09-17 00:00:00'),
(18, 'rotaract_club', 'hidden', '2016-09-17 00:00:00'),
(19, 'sahara_toast_master_club', 'hidden', '2016-09-17 00:00:00'),
(20, 'pathrobot_finder', 'hidden', '2016-09-17 00:00:00'),
(21, 'mca_digital_2015', 'hidden', '2016-09-17 00:00:00'),
(22, 'clf_2011 ', 'hidden', '2016-09-17 00:00:00'),
(23, 'heading', 'visible', '2016-09-19 01:09:00'),
(24, 'profile_image', 'visible', '2016-09-19 09:09:55'),
(25, 'social_info', 'visible', '2016-09-19 11:09:31'),
(26, 'achievements', 'visible', '2016-09-20 08:09:19');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

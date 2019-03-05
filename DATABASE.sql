-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 19, 2014 at 12:24 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `post`
--
CREATE DATABASE IF NOT EXISTS `post` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `post`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `hash` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `hash`) VALUES
(1, '', ''),
(2, 'saddam', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(4, 'ziaa', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');

-- --------------------------------------------------------

--
-- Table structure for table `freead`
--

CREATE TABLE IF NOT EXISTS `freead` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` int(10) unsigned NOT NULL,
  `ad_title` varchar(45) NOT NULL,
  `photo_name` varchar(45) NOT NULL,
  `description` text NOT NULL,
  `price` int(10) unsigned NOT NULL,
  `contact_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `m_number` int(10) unsigned NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`id`,`cat_id`),
  KEY `FK_freead_1` (`cat_id`),
  FULLTEXT KEY `ad_title` (`ad_title`,`description`,`address`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=14 ;

--
-- Dumping data for table `freead`
--

INSERT INTO `freead` (`id`, `cat_id`, `ad_title`, `photo_name`, `description`, `price`, `contact_name`, `email`, `m_number`, `address`) VALUES
(11, 1, 'loin', 'Abstract HD Wallpaper (35).jpg', 'not in range of keeping in home ', 500000, 'zia', 'zia@yahoo.com', 4294967295, 'abc non regional'),
(13, 6, 'fasfdkljas;kjfl;jk', '(2).jpg', ' asdflkjasd;jkfjkasd', 545646554, 'fasfdasdf', 'asad@yahoo.com', 66656545, 'asdfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `heading`
--

CREATE TABLE IF NOT EXISTS `heading` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `visible` tinyint(1) unsigned NOT NULL,
  `extension` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=7 ;

--
-- Dumping data for table `heading`
--

INSERT INTO `heading` (`id`, `title`, `visible`, `extension`) VALUES
(1, 'For Sale', 1, 'for_sale'),
(2, 'Comunity', 1, 'comunity'),
(3, 'Jobs', 1, 'jobs'),
(4, 'Class', 1, 'class'),
(5, 'Real Estate', 1, 'real_estate'),
(6, 'Services', 1, 'services');

-- --------------------------------------------------------

--
-- Table structure for table `sub_heading`
--

CREATE TABLE IF NOT EXISTS `sub_heading` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `sub_id` int(10) unsigned NOT NULL,
  `sub_title` varchar(45) NOT NULL,
  `position` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`,`sub_id`),
  KEY `FK_sub_heading_1` (`sub_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=81 ;

--
-- Dumping data for table `sub_heading`
--

INSERT INTO `sub_heading` (`id`, `sub_id`, `sub_title`, `position`) VALUES
(1, 1, 'Animals', 1),
(2, 1, 'Art-Collections', 2),
(3, 1, 'Books-Magzines', 3),
(4, 1, 'Bussiness-Industrial', 4),
(5, 1, 'Cameras-Camera Accessories', 5),
(6, 1, 'Cars', 6),
(7, 1, 'Car parts', 7),
(8, 1, 'CDs-Records', 8),
(9, 1, 'Cell Phones-Accessories', 9),
(10, 1, 'Clothing', 10),
(11, 1, 'Computer Hardware', 11),
(12, 1, 'DVD', 12),
(13, 1, 'Electronics', 13),
(14, 1, 'For Babies_ Infants', 14),
(15, 1, 'Garage Sale', 15),
(18, 1, 'Jewelery', 16),
(19, 1, 'Musical Instruments', 17),
(20, 1, 'Motorcycles-Scooters', 18),
(21, 1, 'Sporting Goods-Bicycles', 19),
(22, 1, 'Tickets', 20),
(23, 1, 'Toys-Games', 21),
(24, 1, 'Video Games-Consoles', 22),
(25, 2, 'Carpool', 1),
(26, 2, 'Community Activities', 2),
(27, 2, 'Events', 3),
(28, 2, 'Musicians-Artists-Brands', 4),
(29, 2, 'Volunteers', 5),
(30, 2, 'Lost and Found', 6),
(31, 3, 'Accounting Jobs - Finance Jobs', 1),
(32, 3, 'Advertising Jobs - Public Relations Jobs', 2),
(33, 3, 'Arts Jobs - Entertainment Jobs', 3),
(34, 3, 'Publishing Jobs', 4),
(35, 3, 'Clerical Jobs - Administratice Jobs', 5),
(36, 3, 'Customer Service Jobs', 6),
(37, 3, 'Clerical Jobs - Administrative Jobs', 7),
(38, 3, 'Customer Service Jobs', 8),
(39, 3, 'Customer Service Jobs', 9),
(40, 3, 'Education Jobs - Teaching Jobs', 10),
(41, 3, 'Engineering Jobs - Architecture Jobs', 11),
(42, 3, 'Healthcare Jobs', 12),
(43, 3, 'Hotel Jobs - Travel Jobs', 13),
(44, 3, 'Internal Jobs', 14),
(45, 3, 'Legal Jobs', 15),
(46, 3, 'Manual Labor Jobs', 16),
(47, 3, 'Manufacturing Jobs - Operations Jobs', 17),
(48, 3, 'Marketing Jobs', 18),
(49, 3, 'Non-Profite Jobs', 19),
(50, 3, 'Resturant Jobs - Food Service Jobs', 20),
(51, 3, 'Retail Jobs', 21),
(52, 3, 'Sales Jobs', 22),
(53, 3, 'Technology Jobs', 23),
(54, 4, 'Computer - Multimedia Classes', 1),
(55, 4, 'Language Classes', 2),
(56, 4, 'Music -Theatre - Dance Classes', 3),
(57, 4, 'Tutoring - Private Lessons', 4),
(58, 5, 'Houses - Apartements for Sale', 1),
(59, 5, 'Houses - Apartements for Rent', 2),
(60, 5, 'Rooms for Rent - Shared', 3),
(61, 5, 'Housing Swap', 4),
(62, 5, 'Vacation Rentals', 5),
(63, 5, 'Parking Spots', 6),
(64, 5, 'Land', 7),
(65, 5, 'Office - Commercial Space', 8),
(66, 5, 'Shops for Rent - Sale', 9),
(67, 6, 'Babysitter - Nanny', 1),
(68, 6, 'Casting - Auditions', 2),
(69, 6, 'Chauffeur- Driver', 3),
(70, 6, 'Health - Beauty - Fitness', 4),
(71, 6, 'House hold - Domestic Help', 5),
(72, 6, 'Moving - Storage', 6),
(73, 6, 'Repair', 7),
(74, 6, 'Writing - Editing - Translating', 8),
(75, 6, 'Matrimonial', 9),
(76, 6, 'Brides', 10),
(77, 6, 'Groomes', 11);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `f_name` varchar(45) NOT NULL,
  `l_name` varchar(45) NOT NULL,
  `u_email` varchar(45) NOT NULL,
  `u_hash` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=11 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `f_name`, `l_name`, `u_email`, `u_hash`, `username`) VALUES
(0, '', '', '', '', ''),
(1, '', '', '', '', ''),
(3, '', '', '', '', ''),
(4, '', '', '', '', ''),
(5, '', '', '', '', ''),
(6, 'zidan', 'syed', 'zidansyed@yahoo.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'zidansyed'),
(7, 'zia ', 'rehman', 'ziarehman@yahoo.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'zia'),
(8, 'asad', 'khan', 'asadkhan@yahoo.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'asad'),
(9, 'nana', 'walamba', 'nana@yahoo.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'nana'),
(10, 'syed', 'adnan', 'zidansyed3@gmial.com', '8cb2237d0679ca88db6464eac60da96345513964', 'saddamahmad');

-- --------------------------------------------------------

--
-- Table structure for table `userad`
--

CREATE TABLE IF NOT EXISTS `userad` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` int(10) unsigned NOT NULL,
  `ad_title` varchar(45) NOT NULL,
  `photo_name` varchar(45) NOT NULL,
  `description` text NOT NULL,
  `price` int(10) unsigned NOT NULL,
  `contact_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `m_number` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `u_name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`,`cat_id`,`u_name`) USING BTREE,
  KEY `FK_userad_1` (`cat_id`),
  FULLTEXT KEY `ad_title` (`ad_title`,`description`,`address`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=14 ;

--
-- Dumping data for table `userad`
--

INSERT INTO `userad` (`id`, `cat_id`, `ad_title`, `photo_name`, `description`, `price`, `contact_name`, `email`, `m_number`, `address`, `u_name`) VALUES
(7, 6, 'landcruser ', 'bbCOM (3).jpg', ' used 9 months great condition', 150000, 'zidansyed', 'suhail@yahoo.com', '923445540067', 'rahat abad, palosai , kpk , pakistan.', 'zidansyed'),
(11, 1, 'cat', 'w00016.jpg', ' 5 years old having 1 baby', 2000, 'asad khan', 'asad@yahoo.com', '92345879369', 'palosai rahatabad peshawar kpk', 'zidansyed'),
(9, 58, 'My villa', '1 (38).jpg', ' its the best place i have ever lived on the earth, its on amazing location having nice sunset and angle of sunrise. Visit any time for survey if you are intrested.', 2000500, 'Syed Saddam Ahmad', 'zidansyed2@gmail.com', '92449636448', 'brooklyn, manchuests, U.S ', 'zidansyed'),
(10, 6, 'Bugati veron', '1 (54).jpg', ' highly expensive , raw condition, fresh tyres and rim. original color non touched.', 2000500, 'Suhail arbabi sheikh', 'suhail@yahoo.com', '92510034586', 'Near markaz market f8-11, lahore, pakistan.', 'zidansyed'),
(12, 32, 'Oracle developer needed', 'Abstract HD Wallpaper (80).jpg', ' Experience 2 years', 500000, 'asad khan', 'zia@yahoo.com', '92345568528', 'nana solutions swat pakistan ', 'zidansyed'),
(13, 6, 'asfdklaksdfj', '(1).jpg', ' ljs;fl;kjasdl;fkjd;slkgjls;dfkjgl;djksfgl;kdfsl;jkg', 2000000, 'lkfasdlfjl;asdk', 'abc@yahoo.c', '92345879369', 'fasdjfl;kasd;fljklk;asdf', 'zidansyed');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

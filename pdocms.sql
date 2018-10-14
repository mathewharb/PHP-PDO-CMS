-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 14, 2018 at 04:07 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdocms`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `artcle_id` int(11) NOT NULL AUTO_INCREMENT,
  `article_title` varchar(255) NOT NULL,
  `article_content` text NOT NULL,
  `article_timestamp` int(11) NOT NULL,
  PRIMARY KEY (`artcle_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`artcle_id`, `article_title`, `article_content`, `article_timestamp`) VALUES
(1, 'First Article', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce venenatis arcu est. Phasellus vel dignissim tellus. Aenean fermentum fermentum convallis. Maecenas vitae ipsum sed risus viverra volutpat non ac sapien. Donec viverra massa at dolor imperdiet hendrerit. Nullam quis est vitae dui placerat posuere. Phasellus eget erat sit amet lacus semper consectetur. Sed a nisi nisi. Pellentesque hendrerit est id quam facilisis auctor a ut ante. Etiam metus arcu, sagittis vitae massa ac, faucibus tempus dolor. Sed et tempus ex. Aliquam interdum erat vel convallis tristique. Phasellus lectus eros, interdum ac sollicitudin vestibulum, scelerisque vitae ligula. Cras aliquam est id velit laoreet, et mattis massa ultrices. Ut aliquam mi nunc, et tempor neque malesuada in. Nulla at viverra metus, id porttitor nulla. In et arcu id felis eleifend auctor vitae a justo. Nullam eleifend, purus id hendrerit tempus, massa elit vehicula metus, pharetra elementum lectus elit ac felis. Sed fermentum luctus aliquet. Vestibulum pulvinar ornare ipsum, gravida condimentum nulla luctus sit amet. Sed tempor eros a tempor faucibus. Proin orci tortor, placerat sit amet elementum sit amet, ornare vel urna. ', 1539516900),
(2, 'Second Article', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis fermentum, dolor non vulputate pretium, nisl enim posuere leo, vel dictum orci dolor non est. Sed lacus lorem, pulvinar sit amet hendrerit a, varius eu est. Fusce ut turpis enim. Sed vel gravida velit, vel vulputate tortor. Suspendisse ut congue sem, vitae dignissim nulla. In at neque sagittis, pulvinar risus sit amet, tincidunt enim. Proin placerat lorem nisl, a molestie sem ornare quis. Duis bibendum, lectus et rhoncus auctor, massa dolor efficitur risus, a hendrerit quam nulla ut enim. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.\r\n', 1539516900),
(3, 'Third Article', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis fermentum, dolor non vulputate pretium, nisl enim posuere leo, vel dictum orci dolor non est. Sed lacus lorem, pulvinar sit amet hendrerit a, varius eu est. Fusce ut turpis enim. Sed vel gravida velit, vel vulputate tortor. Suspendisse ut congue sem, vitae dignissim nulla. In at neque sagittis, pulvinar risus sit amet, tincidunt enim. Proin placerat lorem nisl, a molestie sem ornare quis. Duis bibendum, lectus et rhoncus auctor, massa dolor efficitur risus, a hendrerit quam nulla ut enim. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.\r\n', 1539516900);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`) VALUES
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2015 at 02:43 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kiwi`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(125) NOT NULL,
  `tag` varchar(125) NOT NULL,
  `cremod` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `tag`, `cremod`) VALUES
(1, 'Production', 'production', '2015-10-08'),
(2, 'Post-Production', 'post-production', '2015-10-08'),
(3, 'Animation / VFX', 'animation', '2015-10-08'),
(4, 'Photography', 'photography', '2015-10-08');

-- --------------------------------------------------------

--
-- Table structure for table `image_table`
--

CREATE TABLE IF NOT EXISTS `image_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag` varchar(125) NOT NULL,
  `name` varchar(125) NOT NULL,
  `cremod` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `image_table`
--

INSERT INTO `image_table` (`id`, `tag`, `name`, `cremod`) VALUES
(1, 'Banner', 'kiwi_bw_bg.jpg', '2015-10-08'),
(2, 'Services', 'camera.jpg', '2015-10-08'),
(3, 'Featured Work', 'axel.jpg', '2015-10-08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(125) NOT NULL,
  `password` text NOT NULL,
  `cremod` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `cremod`) VALUES
(1, 'test', 'test', '0000-00-00'),
(2, 'sample', 'sample1234', '0000-00-00'),
(5, 'sample1', 'sample', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE IF NOT EXISTS `works` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `name` varchar(125) NOT NULL,
  `cover` varchar(125) NOT NULL,
  `cremod` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `category_id`, `name`, `cover`, `cremod`) VALUES
(1, 3, 'Foto Albums', 'Portfolio-pic1.jpg', '2015-10-08'),
(2, 2, 'Luca Theme', 'Portfolio-pic2.jpg', '2015-10-08'),
(3, 1, 'Uni Sans', 'Portfolio-pic3.jpg', '2015-10-08'),
(4, 4, 'Vinyl Record', 'Portfolio-pic4.jpg', '2015-10-08'),
(5, 1, 'Hipster', 'Portfolio-pic5.jpg', '2015-10-08'),
(6, 4, 'Windmills', 'Portfolio-pic6.jpg', '2015-10-08');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

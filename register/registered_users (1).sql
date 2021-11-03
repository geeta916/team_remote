-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 03, 2021 at 01:52 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

DROP TABLE IF EXISTS `registered_users`;
CREATE TABLE IF NOT EXISTS `registered_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`id`, `name`, `email`, `mobile`, `password`) VALUES
(1, '$name', '$email', '$mobile', '$password'),
(2, '$name', '$email', '123456789', '$password'),
(3, 'sdas', 'geeta@gmail.com', '9128989078', 'agdgfg'),
(4, 'SOURAV DAS', 'geeta@gmail.com', '', 'geeta'),
(5, 'SOURAV DAS', 'geeta@gmail.com', '', 'geeta'),
(6, 'Sourav das', 'sdasas@gmail.com', '910213', 'sdas'),
(7, 'SOURAV DAS', 'sdas99579@gmail.com', '9101131735', 'Sdas@1'),
(8, 'SOURAV DAS', 'sdas99579@gmail.com', '9101131735', 'Sdas@1'),
(9, 'SOURAV DAS', 'sdas99579@gmail.com', '9101131735', 'Sdas@1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

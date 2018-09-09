-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 09, 2018 at 03:26 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

DROP TABLE IF EXISTS `tblproduct`;
CREATE TABLE IF NOT EXISTS `tblproduct` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `gender` varchar(20) NOT NULL,
  `Type` varchar(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`code`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `gender`, `Type`, `name`, `code`, `image`, `price`) VALUES
(3, 'male', 'denim', 'Denims', 'MD01', 'Cloth Samples/MEN/Sample3.jpg', 350.00),
(2, 'male', 'suit', 'Suits', 'MS01', 'Cloth Samples/MEN/Sample2.jpg', 400.00),
(1, 'female', 'saree', 'Sarees', 'FS01', 'Cloth Samples/WOMEN/Ladies6.png', 100.00),
(4, 'kid', 'shirt', 'Kids', 'KS01', 'Cloth Samples/KIDS/child1.jpg', 250.00),
(5, 'male', 'suit', 'Men', 'MS02', 'Cloth Samples/MEN/Sample5.jpg', 300.00),
(6, 'female', 'salkam', 'Women', 'FSK01', 'Cloth Samples/WOMEN/Ladies1.png', 150.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `srno` bigint(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `number` bigint(11) NOT NULL,
  `gender` varchar(7) NOT NULL,
  PRIMARY KEY (`srno`) USING BTREE,
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `number` (`number`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`srno`, `username`, `email`, `password`, `number`, `gender`) VALUES
(1, 'first', 'first@gmail.com', 'first', 321321, 'male');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

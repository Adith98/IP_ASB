-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 08, 2018 at 06:37 PM
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
-- Table structure for table `cart_account_name`
--

DROP TABLE IF EXISTS `cart_account_name`;
CREATE TABLE IF NOT EXISTS `cart_account_name` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart_ajaysoni`
--

DROP TABLE IF EXISTS `cart_ajaysoni`;
CREATE TABLE IF NOT EXISTS `cart_ajaysoni` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart_asddasd`
--

DROP TABLE IF EXISTS `cart_asddasd`;
CREATE TABLE IF NOT EXISTS `cart_asddasd` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart_parthsethia`
--

DROP TABLE IF EXISTS `cart_parthsethia`;
CREATE TABLE IF NOT EXISTS `cart_parthsethia` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart_sidd`
--

DROP TABLE IF EXISTS `cart_sidd`;
CREATE TABLE IF NOT EXISTS `cart_sidd` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`code`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_sidd`
--

INSERT INTO `cart_sidd` (`id`, `name`, `code`, `image`, `price`) VALUES
(2, 'Denim_01', 'MD01', 'Cloth Samples/MEN/denim/d01.jpg', 350.00);

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

DROP TABLE IF EXISTS `home`;
CREATE TABLE IF NOT EXISTS `home` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `image` (`image`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `name`, `image`) VALUES
(1, 'MEN', 'Cloth Samples/MEN/men.jpg'),
(2, 'WOMEN', 'Cloth Samples/WOMEN/women.jpg'),
(3, 'KIDS', 'Cloth Samples/KIDS/kid.jpg'),
(4, 'SUIT', 'Cloth Samples/MEN/suit/s01.jpg'),
(5, 'SAREE', 'Cloth Samples/WOMEN/saree/s01.png'),
(6, 'FROCK', 'Cloth Samples/KIDS/frock/f01.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

DROP TABLE IF EXISTS `tblproduct`;
CREATE TABLE IF NOT EXISTS `tblproduct` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `gender` varchar(20) NOT NULL,
  `Type` varchar(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`code`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `gender`, `Type`, `name`, `code`, `image`, `price`) VALUES
(3, 'DENIM', 'denim', 'Denim_01', 'MD01', 'Cloth Samples/MEN/denim/d01.jpg', 350.00),
(2, 'MEN', 'suit', 'Suit_01', 'MS01', 'Cloth Samples/MEN/suit/s01.jpg', 400.00),
(1, 'WOMEN', 'saree', 'Saree_01', 'WS01', 'Cloth Samples/WOMEN/saree/s01.png', 100.00),
(4, 'KIDS', 'kids shirt', 'KShirt_01', 'KS01', 'Cloth Samples/KIDS/shirt/s01.jpg', 250.00),
(5, 'MEN', 'suit', 'Suit_02', 'MS02', 'Cloth Samples/MEN/suit/s02.jpg', 300.00),
(6, 'WOMEN', 'salvar kameez', 'Salvar Kameez_01', 'WSK01', 'Cloth Samples/WOMEN/salkam/s01.png', 150.00),
(7, 'MEN', 'suit', 'Suit_03', 'MS03', 'Cloth Samples/MEN/suit/s03.jpg', 300.00),
(8, 'MEN', 'suit', 'Suit_04', 'MS04', 'Cloth Samples/MEN/suit/s04.jpg', 300.00),
(9, 'MEN', 'suit', 'Suit_05', 'MS05', 'Cloth Samples/MEN/suit/s05.jpg', 300.00),
(10, 'MEN', 'suit', 'Suit_06', 'MS06', 'Cloth Samples/MEN/suit/s06.jpg', 300.00),
(11, 'MEN', 'suit', 'Suit_07', 'MS07', 'Cloth Samples/MEN/suit/s07.jpg', 300.00),
(12, 'MEN', 'shirt', 'Shirt_01', 'MSH01', 'Cloth Samples/MEN/shirt/sh01.jpg', 300.00),
(13, 'WOMEN', 'salvar kameez', 'Salvar Kameez_02', 'WSK02', 'Cloth Samples/WOMEN/salkam/s02.png', 350.00),
(14, 'WOMEN', 'salvar kameez', 'Salvar Kameez_03', 'WSK03', 'Cloth Samples/WOMEN/salkam/s03.jpg', 350.00),
(15, 'WOMEN', 'salvar kameez', 'Salvar Kameez_04', 'WSK04', 'Cloth Samples/WOMEN/salkam/s04.jpg', 350.00),
(16, 'WOMEN', 'salvar kameez', 'Salvar Kameez_05', 'WSK05', 'Cloth Samples/WOMEN/salkam/s05.jpg', 350.00),
(17, 'WOMEN', 'salvar kameez', 'Salvar Kameez_06', 'WSK06', 'Cloth Samples/WOMEN/salkam/s06.jpg', 350.00),
(18, 'WOMEN', 'salvar kameez', 'Salvar Kameez_07', 'WSK07', 'Cloth Samples/WOMEN/salkam/s07.jpg', 350.00),
(19, 'WOMEN', 'salvar kameez', 'Salvar Kameez_08', 'WSK08', 'Cloth Samples/WOMEN/salkam/s08.jpg', 350.00),
(20, 'WOMEN', 'saree', 'Saree_02\r\n', 'WS02', 'Cloth Samples/WOMEN/saree/s02.png', 350.00),
(21, 'WOMEN', 'saree', 'Saree_03\r\n', 'WS03', 'Cloth Samples/WOMEN/saree/s03.png', 350.00),
(22, 'WOMEN', 'saree', 'Saree_04', 'WS04', 'Cloth Samples/WOMEN/saree/s04.png', 350.00),
(23, 'WOMEN', 'saree', 'Saree_05', 'WS05', 'Cloth Samples/WOMEN/saree/s05.jpg', 350.00),
(24, 'WOMEN', 'saree', 'Saree_06', 'WS06', 'Cloth Samples/WOMEN/saree/s06.jpg', 350.00),
(25, 'WOMEN', 'saree', 'Saree_07', 'WS07', 'Cloth Samples/WOMEN/saree/s07.jpg', 350.00),
(26, 'WOMEN', 'saree', 'Saree_08', 'WS08', 'Cloth Samples/WOMEN/saree/s08.jpg', 350.00),
(27, 'WOMEN', 'saree', 'Saree_09', 'WS09', 'Cloth Samples/WOMEN/saree/s09.jpg', 350.00),
(28, 'WOMEN', 'saree', 'Saree_10', 'WS10', 'Cloth Samples/WOMEN/saree/s10.jpg', 350.00),
(29, 'WOMEN', 'saree', 'Saree_11', 'WS11', 'Cloth Samples/WOMEN/saree/s11.jpg', 350.00),
(30, 'WOMEN', 'saree', 'Saree_12', 'WS12', 'Cloth Samples/WOMEN/saree/s12.jpg', 350.00),
(31, 'WOMEN', 'saree', 'Saree_13', 'WS13', 'Cloth Samples/WOMEN/saree/s13.jpg', 350.00),
(32, 'MEN', 'suit', 'Suit_08', 'MS08', 'Cloth Samples/MEN/suit/s08.jpg', 300.00),
(33, 'MEN', 'suit', 'Suit_09', 'MS09', 'Cloth Samples/MEN/suit/s09.jpg', 300.00),
(34, 'MEN', 'suit', 'Suit_10', 'MS10', 'Cloth Samples/MEN/suit/s10.jpg', 300.00),
(35, 'MEN', 'suit', 'Suit_11', 'MS11', 'Cloth Samples/MEN/suit/s11.jpg', 300.00),
(36, 'MEN', 'suit', 'Suit_12', 'MS12', 'Cloth Samples/MEN/suit/s12.jpg', 300.00),
(37, 'MEN', 'shirt', 'Shirt_02', 'MSH02', 'Cloth Samples/MEN/shirt/sh02.jpg', 300.00),
(38, 'MEN', 'shirt', 'Shirt_03', 'MSH03', 'Cloth Samples/MEN/shirt/sh03.jpg', 300.00),
(39, 'MEN', 'shirt', 'Shirt_04', 'MSH04', 'Cloth Samples/MEN/shirt/sh04.jpg', 300.00),
(40, 'MEN', 'shirt', 'Shirt_05', 'MSH05', 'Cloth Samples/MEN/shirt/sh05.jpg', 300.00),
(41, 'MEN', 'shirt', 'Shirt_06', 'MSH06', 'Cloth Samples/MEN/shirt/sh06.jpg', 300.00),
(42, 'MEN', 'shirt', 'Shirt_07', 'MSH07', 'Cloth Samples/MEN/shirt/sh07.jpg', 300.00),
(43, 'MEN', 'shirt', 'Shirt_08', 'MSH08', 'Cloth Samples/MEN/shirt/sh08.jpg', 300.00),
(44, 'MEN', 'shirt', 'Shirt_09', 'MSH09', 'Cloth Samples/MEN/shirt/sh09.jpg', 300.00),
(45, 'MEN', 'shirt', 'Shirt_10', 'MSH10', 'Cloth Samples/MEN/shirt/sh10.jpg', 300.00),
(46, 'MEN', 'shirt', 'Shirt_11', 'MSH11', 'Cloth Samples/MEN/shirt/sh11.jpg', 300.00),
(47, 'MEN', 'shirt', 'Shirt_12', 'MSH12', 'Cloth Samples/MEN/shirt/sh12.jpg', 300.00),
(48, 'MEN', 'shirt', 'Shirt_13', 'MSH13', 'Cloth Samples/MEN/shirt/sh13.jpg', 300.00),
(49, 'MEN', 'shirt', 'Shirt_14', 'MSH14', 'Cloth Samples/MEN/shirt/sh14.jpg', 300.00),
(50, 'MEN', 'shirt', 'Shirt_15', 'MSH15', 'Cloth Samples/MEN/shirt/sh15.jpg', 300.00),
(51, 'MEN', 'shirt', 'Shirt_16', 'MSH16', 'Cloth Samples/MEN/shirt/sh16.jpg', 300.00),
(52, 'DENIM', 'denim', 'Denim_02', 'MD02', 'Cloth Samples/MEN/denim/d02.jpg', 350.00),
(53, 'DENIM', 'denim', 'Denim_03', 'MD03', 'Cloth Samples/MEN/denim/d03.jpg', 350.00),
(54, 'DENIM', 'denim', 'Denim_04', 'MD04', 'Cloth Samples/MEN/denim/d04.jpg', 350.00),
(55, 'DENIM\r\n', 'denim', 'Denim_05', 'MD05', 'Cloth Samples/MEN/denim/d05.jpg', 350.00),
(56, 'DENIM\r\n', 'denim', 'Denim_06', 'MD06', 'Cloth Samples/MEN/denim/d06.jpg', 350.00),
(57, 'DENIM', 'denim', 'Denim_07', 'MD07', 'Cloth Samples/MEN/denim/d07.jpg', 350.00),
(58, 'DENIM', 'denim', 'Denim_08', 'MD08', 'Cloth Samples/MEN/denim/d08.jpg', 350.00);

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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`srno`, `username`, `email`, `password`, `number`, `gender`) VALUES
(1, 'first', 'first@gmail.com', 'first', 321321, 'male'),
(9, 'Account_name', 'account@gmail.com', 'account', 1234567891, '3'),
(10, 'sidd', 'tsidd02@gmail.com', 'sidd', 8745426795, '1'),
(11, 'ajaysoni', 'ajay@gmail.com', 'ajay', 3213654987, '3'),
(12, 'parthsethia', 'parth@gmail.com', 'parth', 354684351684, '1'),
(13, 'asddasd', 'ankitshetty09@gmail.com', '24184075', 7875462317, '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

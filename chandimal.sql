-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 30, 2019 at 11:15 AM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chandimal`
--

-- --------------------------------------------------------

--
-- Table structure for table `main_category`
--

DROP TABLE IF EXISTS `main_category`;
CREATE TABLE IF NOT EXISTS `main_category` (
  `cat_id` int(20) NOT NULL AUTO_INCREMENT,
  `main_cat_name` varchar(150) NOT NULL,
  `status` varchar(250) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_category`
--

INSERT INTO `main_category` (`cat_id`, `main_cat_name`, `status`) VALUES
(1, 'Women', '1'),
(2, 'Men', '1'),
(3, 'Kids', '1'),
(4, 'Homeware', '1'),
(5, 'Backstage', '1');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `product_name` text NOT NULL,
  `description` text NOT NULL,
  `new_arrivals` varchar(250) NOT NULL,
  `best_sellers` varchar(250) NOT NULL,
  `img_1` varchar(150) DEFAULT NULL,
  `main_cat` int(20) NOT NULL,
  `status` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `description`, `new_arrivals`, `best_sellers`, `img_1`, `main_cat`, `status`) VALUES
(22, 'Code: GER 4187', '<ul><li>Code: GER 4187</li><li>Dimensions: 600mmX60mmX25mm</li><li>Trim Length: 70mm</li><li>Wooden Block</li><li>Eranga Fiber</li></ul>', '1', '1', '22_1.jpg', 3, '0'),
(23, 'Code: GER 2127', '<ul><li>Code: GER 2127</li><li>Dimensions: 500mmX55mmX24mm</li><li>Trim Length: 75mm</li><li>Wooden Block</li><li>Coco fiber</li></ul>', '0', '1', '23_1.jpg', 3, '0'),
(24, 'Code: FRN600MM ZEB', '<br><ul><li>600MM UN VARNISED ZEBRE BROOM WITH COCO+PP FIBER AND WITH A METAL SOCKET</li><li>Dimensions:600 mmX60mmX22mm</li><li>Trim Length:75 mm</li><li>Wooden Block</li><li>Coco + BLUE PP Fiber</li><li>Metal Socket</li></ul>', '1', '1', '24_1.jpg', 3, '0'),
(25, 'Code: 182493', '<ul><li>Code: 182493</li><li>24â€³ D/WAY APPLICATOR BRUSH</li><li>Dimensions: 610mmX45mmX21mm</li><li>Trim Length: 30mm</li><li>Wooden Block</li><li>Basin Fiber</li></ul>', '1', '0', '25_1.jpg', 3, '0'),
(26, 'Code: BEL151062', '<ul><li>Code: BEL151062</li><li>ROUND BACK, NATURAL VARNISHED BROOM</li><li>Dimensions: 600 x 70 x 35 mm</li><li>Trim Length: 70mm</li><li>Wooden Block</li><li>Fiber: Coco</li></ul>', '1', '0', '26_1.jpg', 3, '0'),
(27, 'Code: AUS12400', '<ul><li>Code: AUS12400</li><li>FLAT MODEL SCRUB</li></ul>', '0', '0', '27_1.jpg', 4, '1'),
(28, 'Code: AUS355BCH', '<ul><li>Code: AUS355BCH</li><li>FLAT MODEL (END Straight) Un VARNISHED BROOM</li><li>Dimensions: 350mmX88mmX35mm</li><li>Trim Length: 125mm</li><li>Wooden Block</li><li>Palmyra + Stalk</li><li>Stud Hole</li></ul>', '0', '0', '28_1.jpg', 5, '1'),
(29, 'Code: FRN 2732D', '<ul><li>Code: FRN 2732D</li><li>CANTONNIER 32CM PIASSAVA (32CM CANTONNIER BROOM WITH BROWN STALK FIBER )</li><li>Dimensions: 320mmX74mmX24mm</li><li>Trim Length: 90mm</li><li>Wooden Block</li><li>Fibre Stalk</li></ul>', '1', '0', '29_1.jpg', 2, '1'),
(30, 'Code: B 260/50', '<ul><li>Code: B 260/50</li><li>Wood Block</li><li>280 x 50/29 x 19</li><li>Fiber â€“ MIXED FIBER PP</li><li>Trim 65 mm</li></ul>', '0', '1', '30_1.jpg', 1, '1'),
(31, 'Code: FRN 210474', '<ul><li>Code: FRN 210474</li><li>280MM FLAT MODEL NATURAL VARNISHED GERMAN MODEL HAND BANNISTER WITH \r\nERANGA + GREEN PP MIXED UNION FIBER WITH A FOUR COLOUR STICKER 4PCS FOR A\r\n BUNDEL AND 10 BUNDELS FOR A MASTER CTN</li><li>Dimensions: 280mmX40mmX17mm</li><li>Trim Length: 75mm</li><li>Wooden Block</li><li>Arenga/Green PP</li></ul>', '1', '0', '31_1.jpg', 1, '1'),
(32, 'Code: GER 2097', '<ul><li>Code: GER 2097</li><li>Dimensions: mmXmmXmm</li><li>Trim Length: mm</li><li>Wooden Block</li><li>Coco Fiber</li></ul>', '0', '0', '32_1.jpg', 1, '1'),
(33, ' Code: BEL079', '<ul><li>Code: BEL079</li><li>FLAT TYPE SCRUB BRUSH</li><li>Dimensions: 181mmX63mmX19mm</li><li>Trim Length: 26mm</li><li>Wooden Block</li><li>Fiber: Yellow PP</li></ul>', '0', '1', '33_1.jpg', 4, '1'),
(34, 'Code: BEL193', '<ul><li>Code: BEL193</li><li>SCRUB BRUSH</li><li>Dimensions: 190 x 40 x 17 mm</li><li>Trim length: 35mm</li><li>Wooden Block</li><li>Fiber: coco</li></ul>', '0', '1', '34_1.jpg', 4, '1'),
(35, 'Code: B 460/43', '<ul><li>Code: B 460/43</li><li>Wood Block</li><li>460 x 43/28 x 19</li><li>Fiber â€“ 18 CM</li><li>ERANGA FIBER</li><li>Trim 75 mm</li></ul>', '0', '0', '35_1.jpg', 1, '1'),
(36, 'Code: GER 2147', '<ul><li>Code: GER 2147</li><li>Dimensions: 280mmX40mmX17mm</li><li>Trim Length: 75mm</li><li>Wooden Block,Red Varnish</li><li>Coco Fiber</li></ul>', '0', '0', '36_1.jpg', 1, '1'),
(37, 'dedwef', 'ded', '1', '0', '37_1.jpg', 2, '0'),
(38, 'Neck T Shirt', 'gywgefyearfyrfbfe<br>', '0', '0', '38_1.jpg', 2, '1'),
(39, 'Printed Evening Dress', 'ergrtgrtg<br>', '0', '0', '39_1.jpg', 5, '1'),
(40, 'Kids Coat ', 'fwerfwr<br>', '1', '0', '40_1.jpg', 3, '1'),
(41, 'Kids Coat Yellow', 'juikuil<br>', '1', '0', '41_1.jpg', 3, '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `role` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `last_log_date` date NOT NULL,
  `active` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `status`, `last_log_date`, `active`) VALUES
(1, 'Admin', 'admin123', 'admin', '1', '2015-05-19', '0'),
(2, 'Akalanka', 'admin123', 'user', '1', '2018-10-10', '0'),
(6, 'kusal2', 'kusal1232', 'admin', '1', '2018-10-16', '0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

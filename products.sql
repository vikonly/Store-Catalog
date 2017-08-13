-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 11, 2017 at 11:12 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_1531`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `store_id` tinyint(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `type` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`store_id`, `name`, `image`, `type`, `price`, `description`) VALUES
(1, '2017 Lamborghini Aventador', 'img/Aventador.jpg', 'Sports Car', 535500.00, 'The Lamborghini Aventador is a mid-engined sports car produced by the Italian manufacturer Lamborghini.'),
(2, '2017 Maserati GranTurismo', 'img/maserati.jpg', 'Sports Car', 165627.00, 'The 2017 Maserati GranTurismo coupe lineup sports a Ferrari-built 454-hp, 384-lb-ft of torque 4.7-liter V-8 that routes power through a six-speed automatic.'),
(3, '2017 Dodge Challenger', 'img/dodge-challenger.jpg', 'Sports Car', 62495.00, 'Dodge has added a new T/A variant to the 2017 Challenger lineup, bringing standard 20-inch alloy wheels, Satin Black exterior graphics, Brembo brakes, sport seats, a modified directed cold-air hood system, a cold-air induction system, and “Air Catcher” headlights inspired by the Challenger SRT Hellcat.'),
(4, '2017 Chevrolet Camaro', 'img/Chevrolet-Camaro.jpg', 'Sports Car', 67140.00, 'Although the sixth-generation pony car debuted in 2016, the 2017 Chevrolet Camaro isn’t resting on its laurels. '),
(5, '2017 Ford Mustang', 'img/Mustang-6.jpg\r\n', 'Sports Car', 54845.00, 'Grabber Blue, Lightning Blue, and White Platinum replace Kona Blue, Guard, Deep Impact Blue, and Competition Orange for the 2017 Ford Mustang’s exterior color options.'),
(6, '2018 FERRARI 812', 'img/2018-FERRARI.jpg', 'Sports Car', 98000.00, '812 Superfast. The name tells you a lot about Ferrari’s muscular new front engine coupé. It has 800 horsepower—well, 800 European horses, at least, which translates to 789 American ponies. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`store_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `store_id` tinyint(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

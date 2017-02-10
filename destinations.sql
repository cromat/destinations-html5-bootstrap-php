-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 17, 2017 at 11:38 
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS destinations CHARACTER SET utf8 COLLATE utf8_general_ci;
USE destinations;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `destinations`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` float NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `name`, `price`, `image`) VALUES
(1, 'New York', 2000, '../uploads/tours-01.jpg'),
(3, 'Amsterdam', 1700, '../uploads/amsterdam.jpg'),
(4, 'Kansas City', 1850, '../uploads/kansas.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `type` varchar(10) NOT NULL,
  `price` float NOT NULL,
  `image` text NOT NULL,
  `event_date` date NOT NULL,
  `duration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`id`, `name`, `description`, `type`, `price`, `image`, `event_date`, `duration`) VALUES
(1, 'Mazatlan', 'Mazatlan is teeming with awesome eateries and fresh, interesting dishes', 'city', 1200, '../uploads/Mazatlan.jpg', '2017-01-13', 5),
(2, 'Australia', 'Australia and New Zealand Backpacker Index includes 6 cities that are generally the most popular for foreign visitors.', 'nature', 2300, '../uploads/australia.jpg', '2017-01-21', 5),
(3, 'Africa and Middle East', 'Africa and Middle East Backpacker Index once again shows that travel is quite inexpensive to many popular cities.', 'nature', 1500, '../uploads/africa.jpg', '2017-01-13', 6),
(4, 'Los Angeles', 'In LA, popular hostels have suddenly made that city more within reach of a typical backpacker', 'city', 1990, '../uploads/losangeles.jpg', '2017-01-28', 3),
(5, 'Iceland', 'Iceland had gone from absurdly expensive to somewhat reasonable in cost, and that has prompted thousands of new tourists to stream in to see what all the fuss is about.', 'nature', 2300, '../uploads/iceland.jpg', '2017-06-06', 5),
(6, 'Asia', 'Many Asian currencies weakened against the US Dollar during 2016, but many other international currencies did so as well, so the region only really got cheaper for Americans.', 'nature', 3000, '../uploads/asia.jpg', '2017-02-17', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

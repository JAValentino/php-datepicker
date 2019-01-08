-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2018 at 06:55 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `date_picker`
--

-- --------------------------------------------------------

--
-- Table structure for table `date_range`
--

CREATE TABLE `date_range` (
  `order_id` int(11) NOT NULL,
  `order_customer` varchar(100) NOT NULL,
  `order_item` varchar(100) NOT NULL,
  `order_value` double(12,2) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `date_range`
--

INSERT INTO `date_range` (`order_id`, `order_customer`, `order_item`, `order_value`, `order_date`) VALUES
(1, 'Gime', 'Cellphone', 15000.00, '2018-02-07'),
(2, 'John', 'Computer', 50000.00, '2018-02-08'),
(3, 'David E. Gary', 'Shuttering Plywood', 1500.00, '2017-01-14'),
(4, 'Eddie M. Douglas', 'Aluminium Heavy Windows', 2000.00, '2017-01-08'),
(5, 'Oscar D. Scoggins', 'Plaster Of Paris', 150.00, '2016-12-29'),
(6, 'Clara C. Kulik', 'Spin Driller Machine', 350.00, '2016-12-30'),
(7, 'Christopher M. Victory', 'Shopping Trolley', 100.00, '2017-01-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `date_range`
--
ALTER TABLE `date_range`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `date_range`
--
ALTER TABLE `date_range`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

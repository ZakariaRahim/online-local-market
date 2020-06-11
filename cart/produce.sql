-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2020 at 03:21 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `produce`
--

-- --------------------------------------------------------

--
-- Table structure for table `cereals_t`
--

CREATE TABLE `cereals_t` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `quantity` varchar(30) DEFAULT NULL,
  `price` decimal(18,2) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cereals_t`
--

INSERT INTO `cereals_t` (`id`, `name`, `quantity`, `price`, `image`) VALUES
(1, 'Rice', '10', '50.00', 'gaf\\cereals\\\r\nrice.jpg'),
(2, 'Maize', '20', '70.00', 'gaf\\cereals\\maize.jpg'),
(3, 'Wheat', '25', '120.00', 'gaf\\cereals\\wheat.jpg'),
(4, 'Guinea corn', '10', '50.00', 'gaf\\cereals\\guineacorn.jpg'),
(5, 'Sorghum', '30', '100.00', 'gaf\\cereals\\sorghum.jpg'),
(6, 'Millet', '50', '90.00', 'gaf\\cereals\\millet.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `general_orders_t`
--

CREATE TABLE `general_orders_t` (
  `id` int(11) NOT NULL,
  `Fullname` varchar(100) DEFAULT NULL,
  `Rigion` varchar(50) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Tel` varchar(16) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Gps` varchar(20) DEFAULT NULL,
  `ProductName` varchar(150) DEFAULT NULL,
  `quantity` varchar(255) NOT NULL,
  `unitPrice` varchar(130) DEFAULT NULL,
  `totalPrice` varchar(130) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_orders_t`
--

INSERT INTO `general_orders_t` (`id`, `Fullname`, `Rigion`, `Address`, `Tel`, `Email`, `Gps`, `ProductName`, `quantity`, `unitPrice`, `totalPrice`) VALUES
(4, 'rahim1', 'Northern', 'kak 489', '0549041452', 'me@gmail.com', 'N123-332-222', 'Peas', '1', '120.00', '120.00'),
(5, 'rahim1', 'Northern', 'kak 489', '0549041452', 'me@gmail.com', 'N123-332-222', 'Peas', '1', '120.00', '120.00'),
(6, 'Abdulrahim zak', 'Northern', 'kak 489', '0549041452', 'me@gmail.com', 'N123-332-222', 'Peas', '1', '120.00', '120.00'),
(9, 'Gafaru', 'Northern', 'kak 489', '0549041452', 'me@gmail.com', 'N123-332-222', 'Peas', '1', '120.00', '120.00'),
(10, 'chamtooni', 'Bono', 'bl 33', '03683732', 'zaj@gmail.com', 'B-222-1233', 'Casava', '23', '50.00', '1,150.00');

-- --------------------------------------------------------

--
-- Table structure for table `legumes_t`
--

CREATE TABLE `legumes_t` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `quantity` varchar(30) DEFAULT NULL,
  `price` decimal(18,2) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `legumes_t`
--

INSERT INTO `legumes_t` (`id`, `name`, `quantity`, `price`, `image`) VALUES
(1, 'Beans', '25', '150.00', 'gaf\\legumes\\beans1.jpg'),
(2, 'Groundnut', '130', '70.00', 'gaf\\legumes\\groundnut1.jpg'),
(3, 'Peas', '25', '120.00', 'gaf\\legumes\\peas1.jpg'),
(4, 'Soybeans corn', '20', '50.00', 'gaf\\legumes\\soybeans1.jpg'),
(5, 'Tamarind', '30', '100.00', 'gaf\\legumes\\tamarind1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders_t`
--

CREATE TABLE `orders_t` (
  `id` int(11) NOT NULL,
  `customerId` varchar(255) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `quantity` varchar(255) NOT NULL,
  `unitPrice` varchar(130) DEFAULT NULL,
  `totalPrice` varchar(130) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders_t`
--

INSERT INTO `orders_t` (`id`, `customerId`, `name`, `quantity`, `unitPrice`, `totalPrice`) VALUES
(1, 'rahim', 'Rice', '1', '50.00', '50.00'),
(2, 'rahim', 'Maize', '1', '70.00', '70.00'),
(3, 'rahim', 'Guinea corn', '22', '50.00', '1,100.00');

-- --------------------------------------------------------

--
-- Table structure for table `roots_t`
--

CREATE TABLE `roots_t` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `quantity` varchar(30) DEFAULT NULL,
  `price` decimal(18,2) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roots_t`
--

INSERT INTO `roots_t` (`id`, `name`, `quantity`, `price`, `image`) VALUES
(1, 'Casava', '50', '50.00', 'gaf\\Roots\\casava1.jpg'),
(2, 'Cocoyam', '20', '70.00', 'gaf\\Roots\\cocoyam1.jpg'),
(3, 'Radhies', '25', '120.00', 'gaf\\Roots\\radishes1.jpg'),
(4, 'Sweet Potato', '10', '50.00', 'gaf\\Roots\\sweetpotato1.jpg'),
(5, 'Yam', '30', '100.00', 'gaf\\Roots\\yam1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vegetables_t`
--

CREATE TABLE `vegetables_t` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `quantity` varchar(30) DEFAULT NULL,
  `price` decimal(18,2) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vegetables_t`
--

INSERT INTO `vegetables_t` (`id`, `name`, `quantity`, `price`, `image`) VALUES
(1, 'Cabbage', '50', '50.00', 'gaf\\vegetables\\cabbage1.jpg'),
(2, 'Carrot', '20', '70.00', 'gaf\\vegetables\\carrot1.jpg'),
(3, 'Cucumber', '25', '120.00', 'gaf\\vegetables\\cucumber1.jpg'),
(4, 'Tomatoes', '10', '50.00', 'gaf\\vegetables\\tomatoes1.jpg'),
(5, 'Garlic', '30', '100.00', 'gaf\\vegetables\\garlic1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cereals_t`
--
ALTER TABLE `cereals_t`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_orders_t`
--
ALTER TABLE `general_orders_t`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `legumes_t`
--
ALTER TABLE `legumes_t`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_t`
--
ALTER TABLE `orders_t`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roots_t`
--
ALTER TABLE `roots_t`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vegetables_t`
--
ALTER TABLE `vegetables_t`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cereals_t`
--
ALTER TABLE `cereals_t`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `general_orders_t`
--
ALTER TABLE `general_orders_t`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `legumes_t`
--
ALTER TABLE `legumes_t`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders_t`
--
ALTER TABLE `orders_t`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roots_t`
--
ALTER TABLE `roots_t`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vegetables_t`
--
ALTER TABLE `vegetables_t`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

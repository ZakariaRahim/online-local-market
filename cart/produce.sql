-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2020 at 03:03 AM
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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `username` varchar(60) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `password`) VALUES
('Admin', '1234');

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
(5, 'rahim123', 'Cocoyam', '13', '150.00', '1,950.00'),
(6, 'rahim123', 'Carrot', '78', '70.00', '5,460.00'),
(7, 'Gafaru', 'Cabbage', '12', '120.00', '1,440.00'),
(8, 'Gafaru', 'Wheat', '16', '80.00', '1,280.00'),
(9, 'Gafaru', 'Peas', '10', '189.00', '1,890.00'),
(10, 'Gafaru', 'Cocoyam', '1', '150.00', '150.00'),
(11, 'Gafaru', 'Peas', '10', '189.00', '1,890.00'),
(12, 'Gafaru', 'Cocoyam', '1', '150.00', '150.00'),
(13, 'Gafaru', 'Tomatoes', '15', '110.00', '1,650.00'),
(14, 'Gafaru', 'Tomatoes', '15', '110.00', '1,650.00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `type`, `quantity`, `price`, `image`) VALUES
(1, 'Rice', 'cereal', '40', '120.00', 'rice.jpg'),
(2, 'Maize', 'cereal', '30', '100.00', 'maize.jpg'),
(3, 'Wheat', 'cereal', '28', '80.00', 'wheat.jpg'),
(4, 'Guinea Corn', 'cereal', '68', '110.00', 'guineacorn.jpg'),
(5, 'Sorghum', 'cereal', '78', '80.00', 'sorghum.jpg'),
(6, 'Millet', 'cereal', '28', '160.00', 'millet.jpg'),
(7, 'Beans', 'Legume', '200', '30.00', 'beans1.jpg'),
(8, 'Groundnut', 'Legume', '100', '80.00', 'groundnut1.jpg'),
(9, 'Peas', 'Legume', '100', '189.00', 'peas1.jpg'),
(10, 'Soybeans', 'Legume', '25', '200.00', 'soybeans1.jpg'),
(11, 'Tamarind', 'Legume', '180', '190.00', 'tamarind1.jpg'),
(12, 'Cassava', 'tuber', '60', '120.00', 'casava1.jpg'),
(13, 'Cocoyam', 'tuber', '90', '150.00', 'cocoyam1.jpg'),
(14, 'Radishes', 'tuber', '70', '50.00', 'radishes1.jpg'),
(15, 'Sweet Potato', 'tuber', '90', '100.00', 'sweetpotato1.jpg'),
(16, 'Yam', 'tuber', '90', '101.00', 'yam1.jpg'),
(17, 'Cabbage', 'vegetable', '60', '120.00', 'cabbage1.jpg'),
(18, 'Carrot', 'vegetable', '50', '70.00', 'carrot1.jpg'),
(19, 'Cucumber', 'vegetable', '60', '120.00', 'cucumber1.jpg'),
(20, 'Tomatoes', 'vegetable', '80', '110.00', 'tomatoes1.jpg'),
(21, 'Garlic', 'vegetable', '90', '190.00', 'garlic1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `gps` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `fullName`, `region`, `telephone`, `gps`, `address`, `email`, `password`) VALUES
('Gafaru', 'Gafaru Alhassan', 'NORTHERN', '0549041484', 'B-222-1233', 'Kakapayili 489, Tamale', 'gaf72@gmail.com', '$2y$10$oS/0HQpfmiUCPHP5mbSflulwbp8CZmUr1vLS7wOdkFxJNdZlsdBTC'),
('rahim123', 'Zakaria Abdulrahim', 'Select', '0549041452', 'N123-332-222', 'Kak 489, Tamale', 'zakariaabdulrahim72@gmail.com', '$2y$10$ZD6iayMo/B6QNtw0uz62HO/mS/9kdGQZxV.XWaavUuZHF9B7pc8ta'),
('username', 'fullname', 'region', '+2229900020', 'somewhere', 'address', 'somebody@nobody.com', '$2y$10$cicmFt6Ug71g3ybD.Alv5OcoDuhE3fFkWBH/Q6LazQteud4eU4rC.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `general_orders_t`
--
ALTER TABLE `general_orders_t`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_t`
--
ALTER TABLE `orders_t`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `general_orders_t`
--
ALTER TABLE `general_orders_t`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders_t`
--
ALTER TABLE `orders_t`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

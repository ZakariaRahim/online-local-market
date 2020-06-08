-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2020 at 05:06 PM
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
(3, 'Rice', '10', '50.00', 'gaf\\cereals\\\r\nrice.jpg'),
(4, 'Maize', '20', '70.00', 'gaf\\cereals\\maize.jpg'),
(5, 'Wheat', '25', '120.00', 'gaf\\cereals\\wheat.jpg'),
(6, 'Guinea corn', '10', '50.00', 'gaf\\cereals\\guineacorn.jpg'),
(7, 'Sorghum', '30', '100.00', 'gaf\\cereals\\sorghum.jpg'),
(8, 'Millet', '50', '90.00', 'gaf\\cereals\\millet.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cereals_t`
--
ALTER TABLE `cereals_t`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cereals_t`
--
ALTER TABLE `cereals_t`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

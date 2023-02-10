-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2023 at 08:49 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `mid_name` varchar(20) NOT NULL,
  `mobile_num` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--


-- --------------------------------------------------------

--
-- Table structure for table `cottage`
--

CREATE TABLE `cottage` (
  `id` int(11) NOT NULL,
  `cottype` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `capacity` varchar(50) NOT NULL,
  `inclusion` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cottage`
--

INSERT INTO `cottage` (`id`, `cottype`, `description`, `capacity`, `inclusion`, `price`, `status`) VALUES
(1, 'Small', 'Small Cottage', 'Max of 8 Persons Only', 'cottage only', '700.00', 'Available'),
(2, 'Bahay Kubo', 'bahay KUbo cottage', 'Max of 15 Persons Only', 'COttage only', '100000.00', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `amount_to_less` varchar(10) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_rooms`
--

CREATE TABLE `hotel_rooms` (
  `id` int(11) NOT NULL,
  `roomtype` varchar(50) NOT NULL,
  `roomdescription` varchar(100) NOT NULL,
  `capacity` varchar(50) NOT NULL,
  `inclusion` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel_rooms`
--

INSERT INTO `hotel_rooms` (`id`, `roomtype`, `roomdescription`, `capacity`, `inclusion`, `price`, `status`) VALUES
(1, 'Standard Room', 'Fully Air-Conditioned Standard Room', '2 Persons Only', 'Free Breakfast for Two\r\nFree Entrance for Two', '1100.00', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `otheramenities`
--

CREATE TABLE `otheramenities` (
  `id` int(11) NOT NULL,
  `amenity` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `capacity` varchar(100) NOT NULL,
  `inclusion` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `promos`
--

CREATE TABLE `promos` (
  `id` int(11) NOT NULL,
  `promo_name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `promo_type` varchar(50) NOT NULL,
  `amount_to_less` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff_profile`
--

CREATE TABLE `staff_profile` (
  `id` int(10) NOT NULL,
  `photo` text DEFAULT NULL,
  `lastname` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middle` varchar(5) DEFAULT NULL,
  `contact` varchar(20) NOT NULL,
  `birthday` date NOT NULL,
  `position` varchar(30) NOT NULL,
  `user_type` varchar(30) NOT NULL,
  `unit` varchar(10) DEFAULT NULL,
  `street` varchar(20) NOT NULL,
  `barangay` varchar(20) NOT NULL,
  `city` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_profile`
--

INSERT INTO `staff_profile` (`id`, `photo`, `lastname`, `firstname`, `middle`, `contact`, `birthday`, `position`, `user_type`, `unit`, `street`, `barangay`, `city`, `username`, `password`) 
VALUES (1, NULL, 'Sanson', 'Bernard', NULL, '09564615377', '1992-11-20', 'Owner', 'admin', NULL, 'Zone 1', 'Lumbangan', 'Zamboanga', 'admin', 'admin');
(2, NULL, 'Tan', 'Kenneth', NULL, '09354127896', '1992-11-21', 'Cashier', 'cashier', NULL, 'Zone 2', 'Lumbangan', 'Zamboanga', 'cashier', 'cashier');
(3, NULL, 'Amarante', 'Jesrhylle', NULL, '09563241879', '1992-11-22', 'Receptionist', 'receptionist', NULL, 'Zone 3', 'Lumbangan', 'Zamboanga', 'recept', 'recept');

-- --------------------------------------------------------

--
-- Table structure for table `villas`
--

CREATE TABLE `villas` (
  `id` int(11) NOT NULL,
  `vill_type` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `capacity` varchar(50) NOT NULL,
  `inclusion` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `villas`
--

INSERT INTO `villas` (`id`, `vill_type`, `description`, `capacity`, `inclusion`, `price`, `status`) VALUES
(1, 'Villa #1', 'Two Storey Villa', '8 Persons Only', 'free enttrance for 8 persons', '1500.00', 'Available'),
(2, 'Villa #2', 'Two Storey Villa', '15 Persons Only', 'free breakfast for 15 persons', '2500.00', 'Available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cottage`
--
ALTER TABLE `cottage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_rooms`
--
ALTER TABLE `hotel_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otheramenities`
--
ALTER TABLE `otheramenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promos`
--
ALTER TABLE `promos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_profile`
--
ALTER TABLE `staff_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `villas`
--
ALTER TABLE `villas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cottage`
--
ALTER TABLE `cottage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel_rooms`
--
ALTER TABLE `hotel_rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `otheramenities`
--
ALTER TABLE `otheramenities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `promos`
--
ALTER TABLE `promos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff_profile`
--
ALTER TABLE `staff_profile`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `villas`
--
ALTER TABLE `villas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

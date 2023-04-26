-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2023 at 06:34 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `se_azzurabeach`
--

-- --------------------------------------------------------

--
-- Table structure for table `accommodations`
--

CREATE TABLE `accommodations` (
  `id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `acc_name` varchar(255) NOT NULL,
  `description` varchar(2555) NOT NULL,
  `capacity` varchar(255) NOT NULL,
  `free_entrance` int(11) NOT NULL,
  `inclusion` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accommodations`
--

INSERT INTO `accommodations` (`id`, `images`, `type`, `acc_name`, `description`, `capacity`, `free_entrance`, `inclusion`, `price`, `status`) VALUES
(61, '331122376_546383290806887_5614360142040330581_n.jpg,12580.png,png-clipart-triangle-trademark-circle-logo-area-a-letter-angle-text.png,326794042_707578751086410_8465820187418498571_n.jpg', 'Hotel', 'Standard Room A', 'Fully Air-Conditioned Standard Room', '2', 2, 'Free Breakfast for 2,Free Entrance for 2', '1100.00', 'Unavailable'),
(62, 'png-clipart-triangle-trademark-circle-logo-area-a-letter-angle-text.png,326794042_707578751086410_8465820187418498571_n.jpg,327016005_1399328054170227_7581475838561344719_n.jpg,azzura_logo-removebg-preview.png', 'Villa', 'Villa #1', 'Two Storey Villa', '10', 6, 'Free Entrance for 6,Free Breakfast for 6', '2500.00', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `acc_archived`
--

CREATE TABLE `acc_archived` (
  `id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `acc_name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `capacity` varchar(30) NOT NULL,
  `free_entrance` int(11) NOT NULL,
  `inclusion` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(20) NOT NULL,
  `user_who_delete` int(11) DEFAULT NULL,
  `date_deleted` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acc_archived`
--

INSERT INTO `acc_archived` (`id`, `images`, `type`, `acc_name`, `description`, `capacity`, `free_entrance`, `inclusion`, `price`, `status`, `user_who_delete`, `date_deleted`) VALUES
(55, '336169357_184012134383806_2494704526109333215_n.png,329620198_156411460549692_7378074510242728429_n (1).jpg', 'Hotel', 'roseskie', 'kekw', '22', 22, 'roseskie,bernskie', '22.00', 'Available', 1, '2023-04-01 15:07:21'),
(56, '315109955_839816204132969_8401995422654136551_n.jpg', 'Hotel', 'bernskie', 'kekw', '2', 2, 'roseskie,bernskie', '20000.00', 'Available', 1, '2023-04-08 23:51:37'),
(57, '255641087_3279693102258091_7441108308129121058_n.jpg,335015350_3754700378134083_6815375927509656013_n.jpg', 'Hotel', 'roseskie', 'tests', '2', 2, 'roseskie', '2323.00', 'Available', NULL, '2023-04-01 14:22:09'),
(58, '299751515_780832259772606_5164226732944406811_n.png,257738529_1189638641445168_6134527062294049843_n.jpg', 'Hotel', 'bernskie', 'tests', '12312', 123, 'bernskie', '124155.00', 'Available', 1, '2023-04-01 14:38:48');

-- --------------------------------------------------------

--
-- Table structure for table `acc_inclusion`
--

CREATE TABLE `acc_inclusion` (
  `id` int(11) NOT NULL,
  `acc_inc_name` varchar(100) NOT NULL,
  `acc_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acc_inclusion`
--

INSERT INTO `acc_inclusion` (`id`, `acc_inc_name`, `acc_type`) VALUES
(5, 'Free Breakfast for 2', 'Hotel'),
(6, 'Free Entrance for 2', 'Hotel'),
(7, 'Free Breakfast for 3', 'Hotel'),
(8, 'Free Entrance for 3', 'Hotel'),
(9, 'Free Breakfast for 6', 'Hotel'),
(10, 'Free Entrance for 6', 'Hotel'),
(11, 'Free Entrance for 6', 'Villa'),
(12, 'Free Breakfast for 6', 'Villa'),
(13, 'Free Breakfast for 8', 'Villa'),
(14, 'Free Entrance for 8', 'Villa');

-- --------------------------------------------------------

--
-- Table structure for table `acc_type`
--

CREATE TABLE `acc_type` (
  `id` int(11) NOT NULL,
  `acc_type_name` varchar(100) NOT NULL,
  `acc_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acc_type`
--

INSERT INTO `acc_type` (`id`, `acc_type_name`, `acc_type`) VALUES
(7, 'Standard Room A', 'Hotel'),
(8, 'Family Room B', 'Hotel'),
(9, 'Barkada Room C', 'Hotel'),
(10, 'Standard Room D', 'Hotel'),
(11, 'Family Room E', 'Hotel'),
(12, 'Barkada Room F', 'Hotel'),
(13, 'Standard Room G', 'Hotel'),
(14, 'Family Room H', 'Hotel'),
(15, 'Barkada Room I', 'Hotel'),
(16, 'Standard Room J', 'Hotel'),
(17, 'Family Room K', 'Hotel'),
(18, 'Barkada Room L', 'Hotel'),
(19, 'Standard Room M', 'Hotel'),
(20, 'Family Room N', 'Hotel'),
(21, 'Barkada Room O', 'Hotel'),
(22, 'Standard Room P', 'Hotel'),
(23, 'Family Room Q', 'Hotel'),
(24, 'Barkada Room R', 'Hotel'),
(25, 'Standard Room S', 'Hotel'),
(26, 'Family Room T', 'Hotel'),
(30, 'Villa #1', 'Villa'),
(31, 'Villa #2', 'Villa'),
(32, 'Villa #3', 'Villa'),
(33, 'Villa #4', 'Villa'),
(34, 'Villa #5', 'Villa'),
(35, 'Villa #6', 'Villa'),
(36, 'Villa #7', 'Villa'),
(37, 'Villa #8', 'Villa'),
(38, 'Villa #9', 'Villa'),
(39, 'Villa #10', 'Villa'),
(40, 'Villa #11', 'Villa'),
(41, 'Villa #12', 'Villa');

-- --------------------------------------------------------

--
-- Table structure for table `booking_summary`
--

CREATE TABLE `booking_summary` (
  `summary_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `villas_id` int(11) NOT NULL,
  `hr_id` int(11) NOT NULL,
  `cottage_id` int(11) NOT NULL,
  `promo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `check_availability`
--

CREATE TABLE `check_availability` (
  `villa_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `cottage_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cottage`
--

CREATE TABLE `cottage` (
  `id` int(11) NOT NULL,
  `pic1` text NOT NULL,
  `type` varchar(100) NOT NULL,
  `pic2` text NOT NULL,
  `pic3` text NOT NULL,
  `pic4` text NOT NULL,
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

INSERT INTO `cottage` (`id`, `pic1`, `type`, `pic2`, `pic3`, `pic4`, `cottype`, `description`, `capacity`, `inclusion`, `price`, `status`) VALUES
(9, 'evvaaa.jpg', 'cotttage', '', '', '', 'Small Cottage', 'dfg', 'fdgfdgdf', 'dfgdfgfdgdfgfdg', '2500.00', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `cottagearchived`
--

CREATE TABLE `cottagearchived` (
  `id` int(11) NOT NULL,
  `pic1` text NOT NULL,
  `pic2` text NOT NULL,
  `pic3` text NOT NULL,
  `pic4` text NOT NULL,
  `cottype` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  `capacity` varchar(30) NOT NULL,
  `inclusion` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(20) NOT NULL,
  `user_who_delete` varchar(50) NOT NULL,
  `date_deleted` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `birth_date` date NOT NULL,
  `age` varchar(11) NOT NULL,
  `suffix` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `contact_num` varchar(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `lastname`, `firstname`, `middlename`, `birth_date`, `age`, `suffix`, `sex`, `contact_num`, `username`, `password`, `email`) VALUES
(10, 'Abdulla', 'Julkipli', 's', '2002-05-17', '20', '', '', '09123456789', 'jaydee', '12345678', 'julkipli11124@gmail.com'),
(11, 'Abdulla', 'Julkipli', 's', '2002-05-17', '20', '', '', '09123456789', 'jaydee', '12345678', 'katsuhito21x@gmail.com'),
(12, 'Abdulla', 'Julkipli', 's', '2002-05-17', '20', '', '', '09123456789', 'jaydee', '12345678', 'natsu@sdasd.com'),
(13, 'Shinkai', 'kai', 'A', '2220-11-21', '21', '', '', '09275689622', 'shinkai', '09275689622', 'wew@gmail.com'),
(14, 'Kai', 'Shin', 'A', '2001-11-23', '21', 'jr', 'Male', '09275689622', 'Shinkai', 'Shinkai', 'Shinkai21x@gmail.com'),
(15, 'Torrico', 'TJ', 'p', '2023-03-16', '20', '', 'Male', '09663261147', 'torrico', 'torrico', 'torricotj@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `discountarchived`
--

CREATE TABLE `discountarchived` (
  `id` int(11) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `dtype` enum('percentage','amount') NOT NULL,
  `dvalue` decimal(10,2) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `user_who_delete` varchar(30) NOT NULL,
  `date_deleted` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `id` int(11) NOT NULL,
  `dname` varchar(100) DEFAULT NULL,
  `dtype` enum('percentage','amount') DEFAULT NULL,
  `dvalue` decimal(10,2) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`id`, `dname`, `dtype`, `dvalue`, `start_date`, `end_date`, `status`) VALUES
(6, 'gfhgfhgf', 'percentage', '5.00', '2023-03-25', '0000-00-00', 'Unavailable'),
(7, 'sadasdas', 'amount', '50.00', '2023-03-18', '2023-04-03', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `entrance_fee`
--

CREATE TABLE `entrance_fee` (
  `id` int(11) NOT NULL,
  `entrance_type_id` int(11) NOT NULL,
  `timeframe_id` int(11) NOT NULL,
  `e_fee` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entrance_fee`
--

INSERT INTO `entrance_fee` (`id`, `entrance_type_id`, `timeframe_id`, `e_fee`, `created_at`, `updated_at`) VALUES
(5, 1, 1, 70, '2023-04-06 07:54:15', '2023-04-06 07:54:15'),
(6, 2, 1, 50, '2023-04-06 07:54:15', '2023-04-06 07:54:15'),
(7, 1, 2, 140, '2023-04-06 07:54:50', '2023-04-06 07:54:50'),
(8, 2, 2, 100, '2023-04-06 07:54:50', '2023-04-06 07:54:50'),
(9, 1, 3, 200, '2023-04-06 07:55:15', '2023-04-06 07:55:15'),
(10, 2, 3, 100, '2023-04-06 07:55:15', '2023-04-06 07:55:15');

-- --------------------------------------------------------

--
-- Table structure for table `entrance_type`
--

CREATE TABLE `entrance_type` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entrance_type`
--

INSERT INTO `entrance_type` (`id`, `name`) VALUES
(1, 'Adult'),
(2, 'Child');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_rooms`
--

CREATE TABLE `hotel_rooms` (
  `id` int(11) NOT NULL,
  `roomtype` varchar(50) NOT NULL,
  `roomdescription` varchar(100) NOT NULL,
  `capacity` varchar(255) NOT NULL,
  `inclusion` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel_rooms`
--

INSERT INTO `hotel_rooms` (`id`, `roomtype`, `roomdescription`, `capacity`, `inclusion`, `price`, `status`) VALUES
(4, 'Barkada Room', 'wewfdghfgsedfsdfsd', 'sdsds', 'zxczxdasdadas das da', '232.00', 'Available'),
(6, 'Family Room', 'testing', 'None', 'testing hehe', '1234.00', 'Not Available'),
(11, 'Barkada Room', 'QN', '21 asda', 'A D QN JQJ', '2314.00', 'Available'),
(12, 'Barkada Room', 'asdasdasd', 'trertwe', 'wewsdwr', '1234576.00', 'Available'),
(13, 'asda', 'dasd', 'asda', 'asda', '0.00', 'Not Available'),
(14, 'adad', 'das', 'dasd', 'asad', '6969.00', 'Not Available'),
(16, 'a', 'b', 'c2', 'd', '74.00', 'Available'),
(17, 'abc', 'def', 'gh1', 'jklmnop', '981.00', 'Not Available'),
(18, 'wew', 'ewws', 'wewsad', 'sadasd', '2341.00', 'Available'),
(19, 'q', 'q', '1', 'q', '21.00', 'Available'),
(20, 'test', 'EHEd', '8 Persons Only', 'free enttrance for 8 persons', '2500.00', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `otheramenities`
--

CREATE TABLE `otheramenities` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `amenity` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `capacity` varchar(100) NOT NULL,
  `inclusion` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `otheramenities`
--

INSERT INTO `otheramenities` (`id`, `photo`, `amenity`, `description`, `capacity`, `inclusion`, `price`, `status`) VALUES
(8, 'Screenshot (2).png', 'Aqua Park', 'Park in a Beach', 'good for 2 person', '2 hours in Aqua Park', '200.00', 'Unavailable'),
(9, 'Screenshot (6).png', 'sdfsdf', 'sdfsdfsdf', 'sdfsdfds', 'sfadfasdasd', '700.00', 'Unavailable'),
(10, 'Screenshot (62).png', 'adas', 'dasd', 'asddsf121', 'kgjkhhdfgf', '2341.00', 'Unavailable');

-- --------------------------------------------------------

--
-- Table structure for table `otheramenitiesarchived`
--

CREATE TABLE `otheramenitiesarchived` (
  `id` int(11) NOT NULL,
  `photo` text NOT NULL,
  `amenity` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `capacity` varchar(100) NOT NULL,
  `inclusion` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(30) NOT NULL,
  `user_who_delete` varchar(30) NOT NULL,
  `date_deleted` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id` int(11) NOT NULL,
  `promo_code` varchar(20) NOT NULL,
  `promo_name` varchar(50) DEFAULT NULL,
  `minimum_amount` decimal(10,2) DEFAULT NULL,
  `discount_value` decimal(10,2) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`id`, `promo_code`, `promo_name`, `minimum_amount`, `discount_value`, `start_date`, `end_date`, `status`) VALUES
(1, '11457', 'Valentines Promo', '1500.00', '150.00', '2023-03-03', '2023-03-31', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `booking_number` varchar(100) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `customer_fname` varchar(100) NOT NULL,
  `customer_mname` varchar(100) DEFAULT NULL,
  `customer_lname` varchar(100) DEFAULT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_contact` int(11) NOT NULL,
  `total_amenities_fee` decimal(10,2) DEFAULT NULL,
  `total_adult_fee` decimal(10,2) NOT NULL,
  `total_child_fee` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `total` decimal(10,2) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`booking_number`, `customer_id`, `customer_fname`, `customer_mname`, `customer_lname`, `customer_email`, `customer_contact`, `total_amenities_fee`, `total_adult_fee`, `total_child_fee`, `discount`, `total`, `status`, `created_at`, `updated_at`) VALUES
('AZURA64323151cae76', 12, '', NULL, NULL, '', 0, NULL, '140.00', '200.00', NULL, '1440.00', 'Pending', '2023-04-09 03:30:25', '2023-04-09 03:30:25');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_accommodation`
--

CREATE TABLE `reservation_accommodation` (
  `id` int(11) NOT NULL,
  `booking_number` varchar(255) NOT NULL,
  `accommodation_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `timeframe_name` varchar(50) NOT NULL,
  `time_in` time NOT NULL,
  `time_out` time NOT NULL,
  `adult_qty` int(11) NOT NULL,
  `child_qty` int(11) NOT NULL,
  `adult_total_efee` decimal(10,2) NOT NULL,
  `child_total_efee` decimal(10,2) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation_accommodation`
--

INSERT INTO `reservation_accommodation` (`id`, `booking_number`, `accommodation_id`, `type`, `start_date`, `end_date`, `timeframe_name`, `time_in`, `time_out`, `adult_qty`, `child_qty`, `adult_total_efee`, `child_total_efee`, `subtotal`) VALUES
(17, 'AZURA64323151cae76', 61, 'Hotel', '2023-04-12', '2023-04-13', 'Day', '09:00:00', '14:00:00', 2, 4, '140.00', '200.00', '1440.00');

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
  `password` varchar(30) NOT NULL,
  `enter` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_profile`
--

INSERT INTO `staff_profile` (`id`, `photo`, `lastname`, `firstname`, `middle`, `contact`, `birthday`, `position`, `user_type`, `unit`, `street`, `barangay`, `city`, `username`, `password`, `enter`) VALUES
(1, 'bern.jpg', 'Sanson', 'Bernard', '', '09564615377', '1992-11-20', 'Owner', 'Admin', '', 'Zone 1', 'Lumbangan', 'Zamboanga', 'admin', 'admin12345678', ''),
(14, '215097516_131098922483042_8847060356769244214_n.jpg', 'sanson', 'tutung1234', 'T.', '77533444', '2023-03-14', 'Cashier', 'Cashier', 'sadsad', 'Zone 4', 'Lumbangan', 'Zamboanga', 'root', '12345', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `time_frame`
--

CREATE TABLE `time_frame` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `can_change` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time_frame`
--

INSERT INTO `time_frame` (`id`, `name`, `start_time`, `end_time`, `can_change`) VALUES
(1, 'Day', '08:00:00', '17:00:00', '1'),
(2, 'Night', '18:00:00', '07:00:00', '1'),
(3, 'Whole Day', '08:00:00', '07:00:00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `villaarchived`
--

CREATE TABLE `villaarchived` (
  `id` int(11) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `img4` text NOT NULL,
  `vill_type` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `capacity` varchar(30) NOT NULL,
  `inclusion` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(50) NOT NULL,
  `user_who_delete` varchar(50) NOT NULL,
  `date_deleted` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `villaarchived`
--

INSERT INTO `villaarchived` (`id`, `img1`, `img2`, `img3`, `img4`, `vill_type`, `description`, `capacity`, `inclusion`, `price`, `status`, `user_who_delete`, `date_deleted`) VALUES
(3, '', '', '', '', 'None', 'Two Storey Villa', '0', '', '2500.00', 'Available', 'Bernard  Sanson', '2023-03-21'),
(4, '', '', '', '', 'Family Room', 'Two Storey Villa', '23', '', '2500.00', 'Available', 'Bernard  Sanson', '2023-03-21'),
(5, 'evvaaa.jpg', 'evvaaa.jpg', 'evvaaa.jpg', 'evvaaa.jpg', 'zxxzxzzxz', 'cvfgcvcfg', '0', 'dgfdfddf', '2500.00', 'Available', 'Bernard  Sanson', '2023-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `villas`
--

CREATE TABLE `villas` (
  `id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `vill_type` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `free_entrance` int(11) NOT NULL,
  `capacity` varchar(50) NOT NULL,
  `inclusion` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accommodations`
--
ALTER TABLE `accommodations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acc_archived`
--
ALTER TABLE `acc_archived`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acc_inclusion`
--
ALTER TABLE `acc_inclusion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acc_type`
--
ALTER TABLE `acc_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_summary`
--
ALTER TABLE `booking_summary`
  ADD PRIMARY KEY (`summary_id`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `cottage_id` (`cottage_id`),
  ADD KEY `hr_id` (`hr_id`),
  ADD KEY `promo_id` (`promo_id`),
  ADD KEY `villas_id` (`villas_id`);

--
-- Indexes for table `check_availability`
--
ALTER TABLE `check_availability`
  ADD KEY `cottage_id` (`cottage_id`),
  ADD KEY `hotel_id` (`hotel_id`),
  ADD KEY `villa_id` (`villa_id`);

--
-- Indexes for table `cottage`
--
ALTER TABLE `cottage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cottagearchived`
--
ALTER TABLE `cottagearchived`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `discountarchived`
--
ALTER TABLE `discountarchived`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entrance_fee`
--
ALTER TABLE `entrance_fee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `entrance_type_id` (`entrance_type_id`),
  ADD KEY `timeframe_id` (`timeframe_id`);

--
-- Indexes for table `entrance_type`
--
ALTER TABLE `entrance_type`
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
-- Indexes for table `otheramenitiesarchived`
--
ALTER TABLE `otheramenitiesarchived`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`booking_number`),
  ADD KEY `reservation_ibfk_1` (`customer_id`);

--
-- Indexes for table `reservation_accommodation`
--
ALTER TABLE `reservation_accommodation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `booking_number` (`booking_number`),
  ADD KEY `accommodation_id` (`accommodation_id`);

--
-- Indexes for table `staff_profile`
--
ALTER TABLE `staff_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_frame`
--
ALTER TABLE `time_frame`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `villaarchived`
--
ALTER TABLE `villaarchived`
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
-- AUTO_INCREMENT for table `accommodations`
--
ALTER TABLE `accommodations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `acc_archived`
--
ALTER TABLE `acc_archived`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `acc_inclusion`
--
ALTER TABLE `acc_inclusion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `acc_type`
--
ALTER TABLE `acc_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `booking_summary`
--
ALTER TABLE `booking_summary`
  MODIFY `summary_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cottage`
--
ALTER TABLE `cottage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cottagearchived`
--
ALTER TABLE `cottagearchived`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `discountarchived`
--
ALTER TABLE `discountarchived`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `entrance_fee`
--
ALTER TABLE `entrance_fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `entrance_type`
--
ALTER TABLE `entrance_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hotel_rooms`
--
ALTER TABLE `hotel_rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `otheramenities`
--
ALTER TABLE `otheramenities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `otheramenitiesarchived`
--
ALTER TABLE `otheramenitiesarchived`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reservation_accommodation`
--
ALTER TABLE `reservation_accommodation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `staff_profile`
--
ALTER TABLE `staff_profile`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `time_frame`
--
ALTER TABLE `time_frame`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `villaarchived`
--
ALTER TABLE `villaarchived`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `villas`
--
ALTER TABLE `villas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_summary`
--
ALTER TABLE `booking_summary`
  ADD CONSTRAINT `booking_summary_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `booking_summary_ibfk_2` FOREIGN KEY (`cottage_id`) REFERENCES `cottage` (`id`),
  ADD CONSTRAINT `booking_summary_ibfk_3` FOREIGN KEY (`hr_id`) REFERENCES `accommodations` (`id`),
  ADD CONSTRAINT `booking_summary_ibfk_4` FOREIGN KEY (`promo_id`) REFERENCES `promo` (`id`),
  ADD CONSTRAINT `booking_summary_ibfk_5` FOREIGN KEY (`villas_id`) REFERENCES `villas` (`id`);

--
-- Constraints for table `check_availability`
--
ALTER TABLE `check_availability`
  ADD CONSTRAINT `check_availability_ibfk_1` FOREIGN KEY (`cottage_id`) REFERENCES `cottage` (`id`),
  ADD CONSTRAINT `check_availability_ibfk_2` FOREIGN KEY (`hotel_id`) REFERENCES `hotel_rooms` (`id`),
  ADD CONSTRAINT `check_availability_ibfk_3` FOREIGN KEY (`villa_id`) REFERENCES `villas` (`id`);

--
-- Constraints for table `entrance_fee`
--
ALTER TABLE `entrance_fee`
  ADD CONSTRAINT `entrance_fee_ibfk_1` FOREIGN KEY (`entrance_type_id`) REFERENCES `entrance_type` (`id`),
  ADD CONSTRAINT `entrance_fee_ibfk_2` FOREIGN KEY (`timeframe_id`) REFERENCES `time_frame` (`id`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);

--
-- Constraints for table `reservation_accommodation`
--
ALTER TABLE `reservation_accommodation`
  ADD CONSTRAINT `reservation_accommodation_ibfk_1` FOREIGN KEY (`booking_number`) REFERENCES `reservation` (`booking_number`),
  ADD CONSTRAINT `reservation_accommodation_ibfk_2` FOREIGN KEY (`accommodation_id`) REFERENCES `accommodations` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

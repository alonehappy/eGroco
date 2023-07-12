-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2023 at 07:46 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcart`
--

CREATE TABLE `addcart` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addcart`
--

INSERT INTO `addcart` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(11, 'Cabbage', '100', 'Uploadimage/product1.png', 1),
(12, 'Potato', '130', 'Uploadimage/product3.png', 1),
(13, 'water melon', '90', 'Uploadimage/cart-img-1.png', 3),
(14, 'Orange', '130', 'Uploadimage/product4.png', 1),
(15, 'Pineapple', '100', 'Uploadimage/product-5.png', 1),
(16, 'Onion', '120', 'Uploadimage/cart-img-2.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `userpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `userpassword`) VALUES
(1, 'admin', 'admin111');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `method` varchar(100) NOT NULL,
  `flat` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `pin_code` int(10) NOT NULL,
  `total_products` varchar(255) NOT NULL,
  `total_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `state`, `country`, `pin_code`, `total_products`, `total_price`) VALUES
(11, 'Rahman', '03111370146', 'rahmanishfaq146@gmail.com', 'cash on delivery', 'chak no 146/wb', 'street 3 near road', 'Jahanian, 146 /wb', 'Punjab', 'Pakistan', 61170, 'Cabbage (1) , Potato (1) , water melon (3) , Orange (1) , Pineapple (1) , Onion (1) ', '850'),
(12, 'Rahman', '03111370146', 'rahmanishfaq146@gmail.com', 'cash on delivery', 'chak no 146/wb', 'street 3 near road', 'Jahanian, 146 /wb', 'Punjab', 'Pakistan', 61170, 'Cabbage (1) , Potato (1) , water melon (3) , Orange (1) , Pineapple (1) , Onion (1) ', '850');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(11) NOT NULL,
  `PName` varchar(100) NOT NULL,
  `PPrice` varchar(100) NOT NULL,
  `Pimage` varchar(200) NOT NULL,
  `PDesc` text NOT NULL,
  `PCategory` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `PName`, `PPrice`, `Pimage`, `PDesc`, `PCategory`) VALUES
(10, 'water melon', '90', 'Uploadimage/cart-img-1.png', 'water melon is delicious fruit', 'Fruits'),
(16, 'Onion', '120', 'Uploadimage/cart-img-2.png', 'Onion Is Really necessary For handi', 'Vegetables'),
(17, 'Cabbage', '100', 'Uploadimage/product1.png', 'Cabbage is really good vegetable to eat.', 'Vegetables'),
(18, 'Potato', '130', 'Uploadimage/product3.png', 'Potato Is Used For mix Vegetables', 'Vegetables'),
(19, 'Carrot', '150', 'Uploadimage/product2.png', 'Carrot use in different dishes', 'Vegetables'),
(20, 'Orange', '130', 'Uploadimage/product4.png', 'orange, any of several species of small trees or shrubs of the genus Citrus of the family Rutaceae and their nearly round fruits, which have leathery and oily rinds and edible, juicy inner flesh', 'Fruits'),
(21, 'Pineapple', '100', 'Uploadimage/product-5.png', 'Bromelain, the digestive enzyme in pineapple, has anti-inflammatory and pain-relieving properties.', 'Fruits'),
(22, 'Lemon', '80', 'Uploadimage/product-6.png', 'What is the health benefits of lemon? Lemons contain about 50 milligrams of vitamin C, which is over half the amount of vitamin C needed in your daily diet.', 'Fruits');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcart`
--
ALTER TABLE `addcart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcart`
--
ALTER TABLE `addcart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 06, 2021 at 07:12 PM
-- Server version: 8.0.23-0ubuntu0.20.04.1
-- PHP Version: 7.2.34-8+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `full_name`, `email`, `password`, `image`) VALUES
(20, 'MOHAMMAD IBRAHIM', 'mohamad3010d@hotmail.com', '3010', 'moh.png'),
(25, 'MOHAMMAD IBRAHIM', 'admin@admin.com', '3010', 'moh.png'),
(26, 'ali', 'ali@ali.com', '3010', 'php');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int NOT NULL,
  `cat_name` varchar(45) DEFAULT NULL,
  `cat_des` varchar(45) DEFAULT NULL,
  `cat_image` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_des`, `cat_image`) VALUES
(49, 'Man', 'All items for men', 'blog-02.jpg'),
(50, 'Woman', 'All items for women', 'product-08.jpg'),
(51, 'Sports', 'All sports supplies', 'images.jpeg'),
(52, 'ELECTRONICS', 'All electronic supplies', 'Electricals.jpeg'),
(54, 'BEAUTY & FRAGRANCE', 'All care items', 'images (3).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `cotactUs`
--

CREATE TABLE `cotactUs` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int NOT NULL,
  `massege` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cotactUs`
--

INSERT INTO `cotactUs` (`id`, `name`, `email`, `mobile`, `massege`) VALUES
(1, '', 'mohammad92d@gmail.com', 788888888, 'sefrdhtjtjrt'),
(2, '', 'mohammad92d@gmail.com', 799999999, 'dflkfkljle'),
(3, '', 'admin@admin.com', 788888888, 'mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm'),
(4, '', 'admin@admin.com', 788888888, 'nather');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int NOT NULL,
  `cust_name` varchar(45) DEFAULT NULL,
  `cust_email` varchar(45) DEFAULT NULL,
  `cust_password` varchar(45) DEFAULT NULL,
  `cust_mobile` int DEFAULT NULL,
  `cust_address` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `cust_email`, `cust_password`, `cust_mobile`, `cust_address`) VALUES
(23, 'MOHAMMAD IBRAHIM', 'mohammad92d@gmail.com', 'MOJOJOJOJ', 788888888, 'paris'),
(26, 'hani9999', 'hani@hotmail.com', '888888888', 77777777, 'amman'),
(27, 'nather', 'Nather@gmail.com', '3010', 789999999, 'Abu Dhabi'),
(31, 'sholy', 'sholy@gmail.com', '123456', 123456789, 'Abu Dhabi'),
(32, 'salem', 'salem@gmail.com', '3010', 789999999, 'Abu Dhabi'),
(33, 'aaaaaaaaaaa', 'mohamad3010d@hotmail.com', '1111111', 77777777, 'Prince Ali Street'),
(34, 'aaaaaaaaaaa', 'mohamad3010d@hotmail.com', '1111111', 77777777, 'Prince Ali Street'),
(35, 'aaaaaaaaaaa', 'mohamad3010d@hotmail.com', '1111111', 77777777, 'Prince Ali Street'),
(36, 'nader', 'admin@admin.com', '12345', 78888888, 'Prince Ali Street'),
(38, 'fadi', 'fadi@gmail.com', '3010', 799999999, 'amman'),
(40, 'ham', 'mazen@hotmail.com', '3010', 788888888, 'Abu Dhabi'),
(41, 'MOHAMMAD IBRAHIM', 'admin@admin.com', '301030103010', 799999999, 'Prince Ali Street'),
(42, 'MOHAMMAD IBRAHIM', 'moh@gmail.com', '123456789', 799999999, 'Prince Ali Street');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int NOT NULL,
  `order_data` date NOT NULL,
  `cust_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_data`, `cust_id`) VALUES
(93, '2021-02-03', 36),
(94, '2021-02-03', 36),
(95, '2021-02-04', 36),
(96, '2021-02-04', 36),
(97, '2021-02-04', 36),
(98, '2021-02-05', 36);

-- --------------------------------------------------------

--
-- Table structure for table `orders_detalis`
--

CREATE TABLE `orders_detalis` (
  `id` int NOT NULL,
  `order_id` int NOT NULL,
  `pro_id` int NOT NULL,
  `qty` int NOT NULL,
  `total` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders_detalis`
--

INSERT INTO `orders_detalis` (`id`, `order_id`, `pro_id`, `qty`, `total`) VALUES
(63, 93, 18, 1, 300),
(64, 93, 11, 1, 222),
(65, 93, 23, 1, 300),
(66, 94, 15, 1, 500),
(67, 95, 15, 2, 1000),
(68, 95, 12, 1, 666),
(69, 96, 16, 1, 3),
(70, 96, 12, 1, 666),
(71, 97, 16, 1, 3),
(72, 97, 13, 1, 500),
(73, 97, 17, 23, 2553),
(74, 97, 23, 4, 1200),
(75, 97, 11, 100, 22200),
(76, 98, 17, 4, 444),
(77, 98, 15, 1, 500);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int NOT NULL,
  `pro_name` varchar(45) DEFAULT NULL,
  `pro_desc` varchar(45) CHARACTER SET cp850 COLLATE cp850_general_ci DEFAULT NULL,
  `pro_price` varchar(45) DEFAULT NULL,
  `pro_image` varchar(45) DEFAULT NULL,
  `cat_id` int DEFAULT NULL,
  `qty` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `pro_name`, `pro_desc`, `pro_price`, `pro_image`, `cat_id`, `qty`) VALUES
(52, 'mohamad', 'sdsd', '500', 'gallery-06.jpg', 51, '2500'),
(53, 'T-shirt', '55555', '5555', 'download.jpeg', 52, '333'),
(54, 'clothes', 'good phone', '3010', 'product-07.jpg', 50, '3010');

-- --------------------------------------------------------

--
-- Table structure for table `productVendor`
--

CREATE TABLE `productVendor` (
  `prodV_id` int NOT NULL,
  `pro_name` varchar(200) NOT NULL,
  `pro_desc` varchar(200) NOT NULL,
  `pro_price` varchar(200) NOT NULL,
  `pro_image` text NOT NULL,
  `pro_image1` text NOT NULL,
  `pro_image2` text NOT NULL,
  `cat_id` int NOT NULL,
  `qty` int NOT NULL,
  `vendor_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `productVendor`
--

INSERT INTO `productVendor` (`prodV_id`, `pro_name`, `pro_desc`, `pro_price`, `pro_image`, `pro_image1`, `pro_image2`, `cat_id`, `qty`, `vendor_id`) VALUES
(11, 'clothes', 'T-shirt for men ,good quality', '17', 'banner-02.jpg', 'banner-02.jpg', 'banner-02.jpg', 49, 50, 4),
(12, 'phons', 'iphon', '666', 'iphon.jpeg', 'iphon.jpeg', 'iphon.jpeg', 52, 3010, 6),
(13, 'clothes', 'T-shirt for woman ,good quality', '21', '2-b.png', '2-b.png', '2-b.png', 50, 599, 6),
(15, 'Shoes', 'Speed-O-Nick Running Shoes Speed-O-Nick Black-White', '220', 'product-09.jpg', 'product-09.jpg', 'product-09.jpg', 49, 100, 4),
(16, 'Cap', 'low cost', '3', 'banner-03.jpg', 'banner-03.jpg', 'banner-03.jpg', 49, 100, 8),
(17, 'Wristwatch', 'CHENXI Luxury Brand Fashion watches Women ', '500', 'CHENXI-Luxury-Brand-Fashion-watches-Women-xfcs-Ladies-Rhinestone-Quartz-Watch-Women-s-Dress-Clock-Wristwatches.webp', 'CHENXI-Luxury-Brand-Fashion-watches-Women-xfcs-Ladies-Rhinestone-Quartz-Watch-Women-s-Dress-Clock-Wristwatches.webp', 'CHENXI-Luxury-Brand-Fashion-watches-Women-xfcs-Ladies-Rhinestone-Quartz-Watch-Women-s-Dress-Clock-Wristwatches.webp', 49, 20, 4),
(18, 'a bag', 'PU Leather Women Shoulder Bag Female Purse Deer', '10', 'PU-Leather-Women-Shoulder-Bag-Female-Purse-Deer-Pendant-Handbags-Girl-Mini-Crossbody-Bags-Vintage-Small.jpg_220x220xz.jpg_.webp', 'PU-Leather-Women-Shoulder-Bag-Female-Purse-Deer-Pendant-Handbags-Girl-Mini-Crossbody-Bags-Vintage-Small.jpg_220x220xz.jpg_.webp', 'PU-Leather-Women-Shoulder-Bag-Female-Purse-Deer-Pendant-Handbags-Girl-Mini-Crossbody-Bags-Vintage-Small.jpg_220x220xz.jpg_.webp', 50, 60, 4),
(23, 'washing machine', '200Pcs Color Catcher Sheet Washing Machine', '300', '200.webp', '200.webp', '200.webp', 52, 30, 6),
(24, 'T-shirt', 'good', '300', 'gallery-06.jpg', 'product-03.jpg', 'slide-01.jpg', 51, 13, 12),
(25, 'parfum', 'so nice', '125', '2230006-2037490637.jpg', '2230006-2037490637.jpg', '2230006-2037490637.jpg', 54, 600, 8),
(26, 'Creams', 'Best-Olay-Creams-For-Oily-Skin', '25', 'Best-Olay-Creams-For-Oily-Skin.jpg.crdownload', 'Best-Olay-Creams-For-Oily-Skin.jpg.crdownload', 'Best-Olay-Creams-For-Oily-Skin.jpg.crdownload', 54, 300, 8),
(27, 'hair-cream', 'The-best-hair-cream', '7', 'The-best-hair-cream.webp', '5f3a5d396d6f7.webp', 'The-best-hair-cream.webp', 54, 560, 8);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int NOT NULL,
  `image1_slider` text NOT NULL,
  `image2_slider` text NOT NULL,
  `image3_slider` text NOT NULL,
  `image4_slider` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `image1_slider`, `image2_slider`, `image3_slider`, `image4_slider`) VALUES
(1, 'Electricals.jpeg', 'gallery-03.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendor_id` int NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `mobile` int NOT NULL,
  `address` varchar(200) NOT NULL,
  `image` text NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendor_id`, `full_name`, `email`, `password`, `company_name`, `mobile`, `address`, `image`, `status`) VALUES
(1, 'nader shatarat', 'nader@gmail.com', '12345', 'plo', 799999999, 'Prince Ali Street', 'p2.jpg', 1),
(4, 'MOHAMMAD Shatarat', 'mohammad92d@gmail.com', '3010', 'plo', 782114847, 'Prince Ali Street', 'product-03.jpg', 1),
(6, 'ali', 'Ali@ali.ali', '2021', 'plo9', 788888888, 'Prince Ali Street', 'moh.png', 1),
(8, 'kolthom', 'kolthom@gmail.com', '3010', 'plo87', 799999999, 'Prince Ali Street', 'download.jpeg', 1),
(9, 'salem', 'salem@gmail.com', '3010', 'plo787', 788888888, 'Prince Ali Street', 'p4.jpg', 0),
(10, 'nader nader', 'moh@gmail.com', 'nader nader', 'mmmm', 799999999, 'Prince Ali Street', 'p4.jpg', 0),
(11, 'nather', 'nather@yahoo.vcom', '12345678', 'ploplo', 88888888, 'Prince Ali Street', 'p3.jpg', 0),
(12, '3abood', '3abood@gmail.com', '3010', 'plo00', 788888888, 'amman', 'moh.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `cotactUs`
--
ALTER TABLE `cotactUs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `orders_detalis`
--
ALTER TABLE `orders_detalis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `order_detalis_ibfk_2` (`pro_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `productVendor`
--
ALTER TABLE `productVendor`
  ADD PRIMARY KEY (`prodV_id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `vendor_id` (`vendor_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `cotactUs`
--
ALTER TABLE `cotactUs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `orders_detalis`
--
ALTER TABLE `orders_detalis`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `productVendor`
--
ALTER TABLE `productVendor`
  MODIFY `prodV_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendor_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders_detalis`
--
ALTER TABLE `orders_detalis`
  ADD CONSTRAINT `orders_detalis_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_detalis_ibfk_2` FOREIGN KEY (`pro_id`) REFERENCES `productVendor` (`prodV_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `productVendor`
--
ALTER TABLE `productVendor`
  ADD CONSTRAINT `productVendor_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `productVendor_ibfk_2` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`vendor_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

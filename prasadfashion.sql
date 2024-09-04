-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 05:55 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prasadfashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `userEmail` int(11) NOT NULL,
  `itemId` int(11) NOT NULL,
  `cartAmount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`userEmail`, `itemId`, `cartAmount`) VALUES
(0, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `itemId` int(11) NOT NULL,
  `itemName` text NOT NULL,
  `itemDescription` text NOT NULL,
  `itemImage` text NOT NULL,
  `itemPrice` int(11) NOT NULL,
  `itemCategory` text NOT NULL,
  `itemAddedDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemId`, `itemName`, `itemDescription`, `itemImage`, `itemPrice`, `itemCategory`, `itemAddedDate`) VALUES
(7, 'Slim Fit Shirt', 'Printed Slim Fit Mens Shirt', '0E4A5019.jpg', 1300, 'Shirts', '2022-12-09 04:31:13'),
(8, 'Casual Shirt', 'Casual Shirt for men', '81vuqr1DAtL._AC._SR360,460.jpg', 2400, 'Shirts', '2022-12-09 04:31:46'),
(9, 'Casual Shirt Light Blue', 'Casual Shirt in Light Blue Color', '81LThZqBayL._AC._SR360,460.jpg', 3200, 'Shirts', '2022-12-09 04:32:57'),
(10, 'Long sleeve shirt', 'Long sleeve and going out shirt', '200505973-1-black.webp', 2100, 'Shirts', '2022-12-09 04:33:55'),
(11, 'Plain T shirt', 'Plain T shirt pink color', 'rose_pink_plain_t-shirt_men_base_30_5_2022_400x533.jpg', 700, 'Shirts', '2022-12-09 04:34:31'),
(12, 'Casual Stylish Shirt', 'Casual Stylish Shirt outfit for men', '45c26a5dba859633c9ef9566f751e3f7--blue-shirts-shirts-for-men.jpg', 4300, 'Shirts', '2022-12-09 04:35:26'),
(13, 'Fancy formal shirt', 'Mens fancy formal shirt', 'men-s-formal-shirt-500x500.webp', 1000, 'Shirts', '2022-12-09 04:36:12'),
(14, 'White shirt', 'White color shirt', 'unnamed.webp', 1000, 'Shirts', '2022-12-09 04:36:48'),
(15, 'Black trousers', 'Black color trousers', '32-cyfor-a-cyphus-original-imag6yyyedypgvke.webp', 2100, 'Trousers', '2022-12-09 04:39:03'),
(16, 'White trouser', 'White color trouser', '32-cyfor-f-cyphus-original-imag6yzhz8kfsfpr-bb.webp', 2100, 'Trousers', '2022-12-09 04:39:48'),
(17, 'Green trouser', 'Green color trouser', 'watergreen2.webp', 2300, 'Trousers', '2022-12-09 04:40:11'),
(18, 'Denim Western Slim', 'Western Slim Denim Blue color', 'W1MZUG301_1.webp', 4200, 'Trousers', '2022-12-09 04:41:55'),
(19, 'JD Williams Coat', 'JD Williams Coat Best quality', '4_LDxXkBi3hVRumjIR1t.jpg', 3100, 'Coats', '2022-12-09 04:43:10'),
(20, 'Jacket Coat', 'Jacket Coat Black color', '41dC9Rr1DkL.jpg', 3100, 'Coats', '2022-12-09 04:43:58'),
(21, 'Formal coat with blazers', 'Formal coat with blazers', '22_M_MenBlazer_EMTB22-6788_C1.webp', 5300, 'Coats', '2022-12-09 04:44:43'),
(23, 'Camel coat', 'stylish Camel coat', '1660576481-screen-shot-2022-08-15-at-11-14-02-am-1660576456.png', 5300, 'Coats', '2022-12-09 04:47:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userName` text NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userPassword` text NOT NULL,
  `userPhoneNumber` text NOT NULL,
  `userAddress` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userName`, `userEmail`, `userPassword`, `userPhoneNumber`, `userAddress`) VALUES
('Kaveesh', 'prasadfashion7@gmail.com', '2022', '0717713094', 'Mathara');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `itemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2021 at 08:52 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerece`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123'),
(2, 'admin2', 'admin345');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(100) NOT NULL,
  `PName` varchar(100) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_img` varchar(100) NOT NULL,
  `categeory` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `PName`, `product_price`, `product_img`, `categeory`) VALUES
(15, 'vivi y51', '34400', 'Upload/m.jpg', 'Mobile'),
(17, 'laptop', '500', 'Upload/75a2592ddd009eabe9337991939b80c7.png', 'Laptop'),
(18, 'laptop', '500', 'Upload/41sLWzMkUQL._SX38_SY50_CR,0,0,38,50_.jpg', 'laptop'),
(19, 'BAG', '2300', 'Upload/BAG2.jpg', 'bag'),
(20, 'vivi y51', '2322', 'Upload/download (1).png', 'Home'),
(21, 'samsung', '23', 'Upload/download.png', 'HOME'),
(22, 'laptop', '34400', 'Upload/data-entry-women-key-information-computer-83820057.jpg', 'HOME'),
(24, 'zeeshan', '500', 'Upload/download (9).jpg', 'Laptop'),
(25, 'sams', '$500', 'Upload/download (2).jpg', 'bag'),
(26, 'zeeshan', '2300', 'Upload/images (1).jpg', ' Home'),
(27, 'Iphone1', '700000', 'Upload/iphone1.jpg', 'Mobile'),
(28, 'Iphone2', '80000', 'Upload/iphone2.jpg', 'Mobile'),
(29, 'Iphone3', '90000', 'Upload/appleXr.jpg', 'Mobile'),
(30, 'Iphone', '120000', 'Upload/iphone11.jpg', 'Mobile'),
(31, 'oppo', '50000', 'Upload/oppo1.jpg', 'Mobile'),
(32, 'iphone', '24000', 'Upload/Iphone5.jpg', 'Mobile'),
(33, 'iphone6', '45000', 'Upload/iphone6.jpg', ' Mobile'),
(34, 'iphone7', '55000', 'Upload/iphone7.jpg', 'Mobile'),
(35, 'oppo', '65000', 'Upload/oppo2.jpg', 'Mobile');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(22) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Number` varchar(10) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `username`, `email`, `Number`, `Password`) VALUES
(1, 'fawad', 'fawad@gmail.com', '0301557722', '123'),
(2, 'zain', 'zain@gmail.com', '03021444', '3456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2023 at 09:21 AM
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
-- Database: `event_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `rrp` decimal(7,2) NOT NULL DEFAULT 0.00,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`, `date_added`) VALUES
(1, 'Model 037', '<p>Lorem Ipsum Dolor Sit Amet</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n</ul>', '299.00', '0.00', 10, 'model037.png', '2023-10-15 13:01:22'),
(2, 'Model 057', '<p>Lorem Ipsum Dolor Sit Amet</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n</ul>', '259.00', '299.00', 10, 'model057.png', '2019-03-13 18:52:49'),
(3, 'Model 067', '<p>Lorem Ipsum Dolor Sit Amet</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n</ul>', '359.00', '0.00', 10, 'model067.png', '2019-03-13 18:47:56'),
(4, 'model087', '<p>Lorem Ipsum Dolor Sit Amet</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n</ul>', '469.00', '499.00', 10, 'model087.png', '2019-03-13 17:42:04'),
(6, 'Model 127', '<p>Lorem Ipsum Dolor Sit Amet</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n</ul>', '499.00', '619.00', 10, 'model127.png', '2023-10-15 13:04:32'),
(7, 'Model 167', '<p>Lorem Ipsum Dolor Sit Amet</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n</ul>', '559.00', '0.00', 10, 'model167.png', '2023-10-15 13:08:25'),
(8, 'Model 177', '<p>Lorem Ipsum Dolor Sit Amet</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n</ul>', '499.00', '0.00', 10, 'model177.png', '2023-10-15 13:08:25'),
(9, 'Model 197', '<p>Lorem Ipsum Dolor Sit Amet</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n</ul>', '719.00', '0.00', 10, 'model197.png', '2023-10-15 13:08:25'),
(10, 'Model 217', '<p>Lorem Ipsum Dolor Sit Amet</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n</ul>', '459.00', '0.00', 10, 'model217.png', '2023-10-15 13:08:25'),
(11, 'Model 277', '<p>Lorem Ipsum Dolor Sit Amet</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n</ul>', '799.00', '0.00', 10, 'model277.png', '2023-10-15 13:08:25'),
(12, 'Model 287', '<p>Lorem Ipsum Dolor Sit Amet</p>\r\n<h3>Features</h3>\r\n<ul>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n<li>Lorem Ipsum Dolor Sit Amet</li>\r\n</ul>', '799.00', '0.00', 10, 'model287.png', '2023-10-15 13:08:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'vinit', 'vinit@gmail.com', 'vinit'),
(2, 'aryan', 'aryan@gmail.com', 'aryan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

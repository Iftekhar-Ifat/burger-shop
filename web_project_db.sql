-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2023 at 04:15 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_project_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `burgers`
--

CREATE TABLE `burgers` (
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `burgers`
--

INSERT INTO `burgers` (`name`, `description`, `price`, `image`) VALUES
('Vegetable Burger', 'vegetable burger description', 399, 'uploads/burger_64ae9c83454cf.jpg'),
('Egg Burger', 'Egg Burger description', 249, 'uploads/burger_64ae9d9ee4c44.jpg'),
('Beef burger', 'Beef Burger description', 399, 'uploads/burger_64ae9dcc0edee.jpg'),
('Chicken Burger', 'Chicken Burger description', 299, 'uploads/burger_64ae9e000a306.jpg'),
('BBQ Burger ', 'BBQ Burger description', 399, 'uploads/burger_64ae9e3fea7e5.jpg'),
('Hot dog', 'Hot dog description', 199, 'uploads/burger_64ae9e6c98a39.jpg'),
('Fish Burger ', 'Fish burger description', 249, 'uploads/burger_64ae9ea621c9c.jpg'),
('Mushroom Burger', 'Mushroom burger description', 299, 'uploads/burger_64ae9efeaf96d.jpg'),
('Cheeseburger', 'Cheeseburger description', 399, 'uploads/burger_64ae9f8fabc30.jpg'),
('Double cheeseburger', 'Double cheeseburger description', 499, 'uploads/burger_64aea04d1f8b9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `burger_name` varchar(255) NOT NULL,
  `burger_price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_email`, `burger_name`, `burger_price`, `quantity`) VALUES
('Beef burger64b124f87b56f', 'cse_2012020302@lus.ac.bd', 'Beef burger', 399, 1),
('Double cheeseburger64b12adcc7a28', 'cse_2012020302@lus.ac.bd', 'Double cheeseburger', 499, 1),
('Egg Burger64b124f7a7aa7', 'cse_2012020302@lus.ac.bd', 'Egg Burger', 249, 1),
('Egg Burger64b1579f8ed7f', 'cse_2012020100@lus.ac.bd', 'Egg Burger', 249, 1),
('Vegetable Burger64b124f6c0e45', 'cse_2012020302@lus.ac.bd', 'Vegetable Burger', 399, 1),
('Vegetable Burger64b1579ed7209', 'cse_2012020100@lus.ac.bd', 'Vegetable Burger', 399, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `mobile`, `role`) VALUES
('Iftekhar Admin', 'ifat1234', 'cse_2012020100@lus.ac.bd', '01782565398', 'seller'),
('Iftekhar Updated', 'ifat1234', 'cse_2012020302@lus.ac.bd', '01782565398', 'buyer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `burgers`
--
ALTER TABLE `burgers`
  ADD PRIMARY KEY (`image`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

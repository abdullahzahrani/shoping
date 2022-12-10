-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2022 at 12:18 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `site1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`, `email`) VALUES
(1, 'admin', '12345', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `logo`) VALUES
(1, 'phone card', 'Recommended phone card', 'images/xx.png'),
(2, 'Gaming card', 'Recommended Gaming card', 'images/uuuu.png\"'),
(3, 'shopping card', 'Recommended shopping card', 'images/vvvv.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `CategoryId` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `price` int(255) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `CategoryId`, `name`, `description`, `logo`, `price`) VALUES
(1, 1, 'stc', '100SR stc card', 'uploads/16513528831651088743stc.jpeg', 100),
(2, 1, 'mobily', '100SR mobily card', 'images/mobily.png', 100),
(3, 1, 'zain', '100SR zain card', 'images/zain-.png', 100),
(4, 2, 'playstation', '375SR playstation store card', 'images/sony.png', 375),
(5, 2, 'steam', '375SR steam store card', 'images/steam.png', 375),
(6, 2, 'xbox', '375SR xbox store card', 'images/xbox-.png', 375),
(7, 3, 'noon', '100SR noon Gift card', 'uploads/1651352915noon.png', 100),
(8, 3, 'amazon', '375SR steam Gift card', 'images/amazon-.png', 375),
(9, 3, 'apple', '375SR xbox Gift card', 'images/apple.png', 375);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) DEFAULT NULL,
  `item_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `item_id`, `name`, `body`, `rating`) VALUES
(1, 1, 'saeed', 'Everything is good', 1),
(2, 1, 'bassel', 'fast deleviry', 5),
(3, 2, 'Osama', 'Amazing website', 5),
(4, 2, 'abady', 'Great!', 5),
(5, 3, 'Eyad', 'bad item', 3),
(6, 3, 'saad', 'Excellent service', 5),
(7, 4, 'abdulrahman', 'the prices very good', 5),
(8, 4, 'Gassan', 'so easy to get it', 4),
(9, 5, 'Ayman', 'amazing cards', 4),
(10, 5, 'Abdulaziz', 'so fast to get the card!', 5),
(11, 6, 'Hanadi', 'hgih price on some item', 3),
(12, 6, 'Tareq', 'fast respons', 5),
(13, 7, 'Faisal', 'grate coustmer service', 2),
(14, 7, 'Nawaf', 'very fast contact', 5),
(15, 8, 'naiif', 'hgih price on some item', 4),
(16, 8, 'yasser', 'grate coustmer service', 5),
(17, 9, 'ali', 'Amazing website', 5),
(18, 9, 'Meshari', 'fast respons', 5),
(NULL, 2, 'gg', 'fgg', 5),
(NULL, 2, 'gg', 'fgg', 5),
(NULL, 2, '555', '55555', 5),
(NULL, 2, '555', '55555', 5),
(NULL, 3, 'test', 'nice', 5),
(NULL, 3, 'test', 'nice', 5),
(NULL, 3, 'test', 'nice', 5),
(NULL, 3, 'test', 'nice', 5),
(NULL, 3, 'p[klp[k', 'pkjioj', 5),
(NULL, 3, 'oull', 'iolioloi', 5),
(NULL, 3, 'l,;l,l;,l;,l;,l;,l;,', 'jkljnjknkjnjknjknjknkjnkjn ', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `price` (`id`),
  ADD KEY `par_ind` (`CategoryId`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD KEY `item_ind` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`CategoryId`) REFERENCES `category` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`) ON DELETE CASCADE;
COMMIT;
ALTER TABLE `admin` CHANGE `ID` `ID` INT(11) NOT NULL AUTO_INCREMENT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

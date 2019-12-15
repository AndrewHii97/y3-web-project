-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2019 at 07:59 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `USERID` int(5) UNSIGNED NOT NULL,
  `USERNAME` varchar(32) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `CONTACT` varchar(11) NOT NULL,
  `ADDRESS` varchar(100) NOT NULL,
  `USERSTATUS` tinyint(1) DEFAULT NULL,
  `USERPASSWORD` varchar(15) NOT NULL,
  `CLIENTID` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`USERID`, `USERNAME`, `EMAIL`, `CONTACT`, `ADDRESS`, `USERSTATUS`, `USERPASSWORD`, `CLIENTID`) VALUES
(1, 'andrewhii', 'andrewhii@hotmail.com', '1110588215', '95-1-6,Sungai Dua', 1, 'andrewhii', ''),
(2, 'Karren', 'karren@hotmail.com', '1110588216', 'Jalan Burma, Pulau Tikus, 10350 George Town, Penang', 1, 'karren', 'AbVmwoFG00J2ivBqjJWqNuQwwVcmzrNPXs57iYhIoXLdqMInHS'),
(3, 'Chris', 'sad@hotmail.com', '1110588217', '52, Lorong Usahaniaga 5, Taman Usahaniaga, 14000 Bukit Mertajam, Pulau Pinang', 1, 'chris', 'AfjZLDYxRgX3lD7nngGfvnjzStZ1Gel5_3XUQcJ2Q4MH0qOdiA'),
(4, 'Kelvin', 'kelvin@hotmail.com', '1110588218', 'No 559, Jalan Sungai Dua, Sri Saujana, 11700 George Town, Pulau Pinang', 1, 'kelvin', 'AZeSuzBNUskU1Hdg-0SyIFNos9IRvQec4YVA77vSWmgdSbxEfq'),
(5, 'John', 'john@hotmail.com', '1110588219', '95-1-10,Sungai Dua', 1, 'john', ''),
(6, 'Jane', 'jane@hotmail.com', '1110588220', '163A, Gurney Dr, Pulau Tikus, 10250 George Town, Penang', 1, 'jane', ''),
(7, 'Max', 'max@hotmail.com', '1110588221', '6L, Jalan Tanjong Tokong, Seri Tanjung Pinang, 10470 Tanjung Tokong, Pulau Pinang', 1, 'max', ''),
(8, 'Abu', 'abu@hotmail.com', '1110588222', 'Airmas Condominium, 2A 2B Desa, Jalan Helang, Desa Permai Indah, 11700 Gelugor, Penang', 1, 'abu', ''),
(9, 'Ali', 'ali@hotmail.com', '1110588223', 'Desasiswa Tekun M05, Universiti Sains Malaysia, Halaman Bukit Gambir 4, 11700 Gelugor, Pulau Pinang', 1, 'ali', ''),
(10, 'Will Smith', 'will@hotmail.com', '1110588224', '95-1-10,Desasiswa Tekun M05, Universiti Sains Malaysia\r\nHalaman Bukit Gambir 4, 11700 Gelugor, Pulau', 1, 'will', '');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `BOOKID` int(5) UNSIGNED NOT NULL,
  `BOOKNAME` varchar(50) NOT NULL,
  `GENRE` varchar(10) DEFAULT NULL,
  `AUTHOR` varchar(50) NOT NULL,
  `PUBLISHER` varchar(50) NOT NULL,
  `PRICE` float UNSIGNED NOT NULL,
  `RENT_RATE` float UNSIGNED NOT NULL,
  `BOOKOWNERID` int(5) UNSIGNED NOT NULL,
  `URL` varchar(100) NOT NULL,
  `CLICKS` int(11) NOT NULL DEFAULT '0',
  `TIMESTAMP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`BOOKID`, `BOOKNAME`, `GENRE`, `AUTHOR`, `PUBLISHER`, `PRICE`, `RENT_RATE`, `BOOKOWNERID`, `URL`, `CLICKS`, `TIMESTAMP`) VALUES
(1, 'Letter To My Husband', 'Romance', 'Stephanie Butland', 'Penguin', 19.9, 1, 2, 'src/1.png', 4, '2019-11-29 22:37:09'),
(2, 'Making Things Happened', 'Self-help', 'Elizabeth Murphy', 'Penguin', 22.9, 3.5, 2, 'src/2.png', 3, '2019-11-29 22:37:09'),
(3, 'Ego Is The Enemy', 'Self-help', 'Ryan Holiday', 'Free Press', 22.9, 2, 2, 'src/3.png', 2, '2019-11-29 22:37:09'),
(4, 'Disappearing Earth', 'Sci-Fi', 'Julia Philips', 'Hachette', 22.9, 0.5, 3, 'src/4.png', 1, '2019-11-29 22:37:09'),
(5, 'This Have Nothing To Do With You', 'Romance', 'Lauren Carter', 'Simon & Schuster', 25.9, 1.5, 4, 'src/5.png', 0, '2019-11-29 22:37:09'),
(6, 'The Lord of The Ring', 'Fiction', 'Tolkien', 'Penguin', 39.9, 1, 4, 'src/6.png', 0, '2019-11-30 01:44:46'),
(7, 'The Prince of Milk', 'Fiction', 'Exurb1a', 'Dutton', 49.9, 3.5, 2, 'src/7.png', 0, '2019-11-30 01:44:46'),
(8, 'An Absolute Remarkable Things', 'Sci-Fi', 'Hank Green', 'Dutton', 69.9, 2, 3, 'src/8.png', 0, '2019-11-30 02:00:22'),
(9, 'Little Prince', 'Fable', 'Antoine de Saint-Exupéry', 'Reynal & Hitchcock', 25.9, 0.5, 4, 'src/9.png', 0, '2019-11-30 02:00:22'),
(10, 'The Fault In Our Stars', 'Romance', 'John Green', 'Dutton', 39.9, 1.5, 4, 'src/10.png', 0, '2019-11-30 02:00:22'),
(11, 'Bear Town', 'Adventure', 'Ferdrik Backman', 'Macmillan Publisher', 19.9, 1, 3, 'src/11.png', 0, '2019-11-29 22:37:09'),
(12, 'Set For Life', 'Self-Help', 'Scott Trench', 'Hachette', 16.9, 0.5, 4, 'src/12.png', 0, '2019-11-30 06:40:10'),
(13, 'Mr Mercedes', 'Suspense', 'Stephan King', 'Simon & Schuster', 16.9, 0.5, 2, 'src/13.png', 0, '2019-11-30 06:56:50'),
(14, 'Your Only Limit Is You', 'Self-Help', 'Johnson Leen', 'Penguin', 9.9, 0.2, 2, 'src/14.png', 0, '2019-11-30 06:58:35'),
(15, 'Seven Studies In Pop Piano', 'Music', 'Bill Hilton', 'Simon & Schuster', 11.9, 0.5, 3, 'src/15.png', 0, '2019-11-30 07:00:47'),
(16, 'Beneath A Scarlet Sky', 'Adventure', 'Mark Sullivan', 'Hachette', 12.9, 1, 4, 'src/16.png', 0, '2019-11-30 07:03:43'),
(17, 'Unleashing The Great Teaching', 'Self-Help', 'David Wetson And Bridget Clay', 'Penguin', 9.9, 0.5, 3, 'src/17.png', 0, '2019-11-30 07:17:37'),
(18, 'Scuba Driving', 'Horror', 'Simon Pridmore', 'Penguin', 49.9, 2, 3, 'src/18.png', 0, '2019-11-30 07:22:04'),
(19, 'The Exiting Voyage Of Newborns', 'Parenting', 'Alex Roberts', 'Hachette', 29.9, 1, 2, 'src/19.png', 0, '2019-11-30 07:29:43'),
(20, 'The Fellowship Of The Ring', 'Adventure', 'J.R.R Tolkien', 'George Allen & Unwin', 49.9, 2, 2, 'src/20.png', 0, '2019-11-30 07:33:25');

-- --------------------------------------------------------

--
-- Table structure for table `bookbuy`
--

CREATE TABLE `bookbuy` (
  `BOOKID` int(5) UNSIGNED NOT NULL,
  `PAYMENTID` int(11) NOT NULL,
  `USERID` int(5) UNSIGNED NOT NULL,
  `SELL_PRICE` float UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bookrent`
--

CREATE TABLE `bookrent` (
  `BOOKID` int(5) UNSIGNED NOT NULL,
  `USERID` int(5) UNSIGNED NOT NULL,
  `PAYMENTID` int(11) NOT NULL,
  `RENT_DATE` date DEFAULT NULL,
  `RETURNED_DATE` date DEFAULT NULL,
  `RENT_PRICE` float UNSIGNED NOT NULL,
  `RENT_RATE` float UNSIGNED NOT NULL,
  `RETURNED` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `BOOKID` int(5) UNSIGNED NOT NULL,
  `USERID` int(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`BOOKID`, `USERID`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `BOOKID` int(5) UNSIGNED NOT NULL,
  `PAYMENTID` int(5) NOT NULL,
  `PAYMENT_AMOUNT` float NOT NULL,
  `PAYMENT_DATE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`USERID`),
  ADD UNIQUE KEY `USERNAME` (`USERNAME`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`BOOKID`),
  ADD KEY `BOOKOWNERID` (`BOOKOWNERID`);

--
-- Indexes for table `bookbuy`
--
ALTER TABLE `bookbuy`
  ADD PRIMARY KEY (`BOOKID`,`USERID`),
  ADD KEY `USERID` (`USERID`),
  ADD KEY `PAYMENTID` (`PAYMENTID`);

--
-- Indexes for table `bookrent`
--
ALTER TABLE `bookrent`
  ADD PRIMARY KEY (`BOOKID`,`USERID`),
  ADD KEY `USERID` (`USERID`),
  ADD KEY `PAYMENTID` (`PAYMENTID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`BOOKID`,`USERID`),
  ADD KEY `USERID` (`USERID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PAYMENTID`),
  ADD KEY `payment_ibfk_1` (`BOOKID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `USERID` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `BOOKID` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PAYMENTID` int(5) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`BOOKOWNERID`) REFERENCES `account` (`USERID`);

--
-- Constraints for table `bookbuy`
--
ALTER TABLE `bookbuy`
  ADD CONSTRAINT `bookbuy_ibfk_1` FOREIGN KEY (`BOOKID`) REFERENCES `book` (`BOOKID`),
  ADD CONSTRAINT `bookbuy_ibfk_2` FOREIGN KEY (`USERID`) REFERENCES `account` (`USERID`),
  ADD CONSTRAINT `bookbuy_ibfk_3` FOREIGN KEY (`PAYMENTID`) REFERENCES `payment` (`PAYMENTID`);

--
-- Constraints for table `bookrent`
--
ALTER TABLE `bookrent`
  ADD CONSTRAINT `bookrent_ibfk_1` FOREIGN KEY (`BOOKID`) REFERENCES `book` (`BOOKID`),
  ADD CONSTRAINT `bookrent_ibfk_2` FOREIGN KEY (`USERID`) REFERENCES `account` (`USERID`),
  ADD CONSTRAINT `bookrent_ibfk_3` FOREIGN KEY (`PAYMENTID`) REFERENCES `payment` (`PAYMENTID`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`BOOKID`) REFERENCES `book` (`BOOKID`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`USERID`) REFERENCES `account` (`USERID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`BOOKID`) REFERENCES `book` (`BOOKID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

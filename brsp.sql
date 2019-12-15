-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2019 at 07:30 AM
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
CREATE DATABASE IF NOT EXISTS `brsp` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `brsp`;

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
  ADD KEY `USERID` (`USERID`);

--
-- Indexes for table `bookrent`
--
ALTER TABLE `bookrent`
  ADD PRIMARY KEY (`BOOKID`,`USERID`),
  ADD KEY `USERID` (`USERID`);

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
  ADD CONSTRAINT `bookbuy_ibfk_2` FOREIGN KEY (`USERID`) REFERENCES `account` (`USERID`);

--
-- Constraints for table `bookrent`
--
ALTER TABLE `bookrent`
  ADD CONSTRAINT `bookrent_ibfk_1` FOREIGN KEY (`BOOKID`) REFERENCES `book` (`BOOKID`),
  ADD CONSTRAINT `bookrent_ibfk_2` FOREIGN KEY (`USERID`) REFERENCES `account` (`USERID`);

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
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"brsp\",\"table\":\"cart\"},{\"db\":\"brsp\",\"table\":\"account\"},{\"db\":\"brsp\",\"table\":\"bookrent\"},{\"db\":\"brsp\",\"table\":\"book\"},{\"db\":\"brsp\",\"table\":\"payment\"},{\"db\":\"brsp\",\"table\":\"bookbuy\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2019-12-15 06:30:29', '{\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

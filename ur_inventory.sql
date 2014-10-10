-- phpMyAdmin SQL Dump
-- version 4.2.9.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 09, 2014 at 12:53 PM
-- Server version: 5.5.38-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ur_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('1c234150c2c360ab8ca9c809621ecc05', '113.255.139.217', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.78.2 (KHTML, like Gecko) Version/7.0.6 Safari/537.78.2', 1412873448, ''),
('3e33246341ae4ecc615de32ac377da12', '107.178.200.34', 'AppEngine-Google; (+http://code.google.com/appengine; appid: getfavicon)', 1412873519, ''),
('7d001f4c4bb95de2d034f250aadb6b8b', '61.92.3.110', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.124 Safari/537.36', 1412873482, ''),
('c61867a322c5663fd6fc67e6fa65f5b2', '118.165.132.42', '0', 1412868210, ''),
('dba70e6a2bac7005fd43c5316ba92b0c', '173.252.120.117', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 1412873451, ''),
('fa694f1009a90d20528da0baefa7c114', '5.255.253.43', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)', 1412870376, '');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
`districtId` int(11) NOT NULL,
  `districtName` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`districtId`, `districtName`, `description`, `lat`, `lng`) VALUES
(-1, 'N/A', 'Admin use', -1, -1),
(1, '旺角', '這是旺角的description', 22.3208021, 114.1690685),
(2, '銅鑼灣', '這是銅鑼灣的description', 22.2798575, 114.1842325),
(3, '尖沙咀', '這是尖沙咀的description', 22.31762, 114.167598),
(4, '金鐘', '這是金鐘的description', 22.2803294, 114.1647682);

-- --------------------------------------------------------

--
-- Table structure for table `district_item`
--

CREATE TABLE IF NOT EXISTS `district_item` (
`id` int(11) NOT NULL,
  `itemId` int(11) NOT NULL,
  `description` text NOT NULL,
  `level` tinyint(4) NOT NULL,
  `districtId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `district_item_cat`
--

CREATE TABLE IF NOT EXISTS `district_item_cat` (
`id` int(11) NOT NULL,
  `catId` int(11) NOT NULL,
  `level` tinyint(4) NOT NULL,
  `districtId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
`itemId` int(11) NOT NULL,
  `itemName` varchar(30) NOT NULL,
  `catId` int(11) NOT NULL,
  `imgUrl` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `item_cat`
--

CREATE TABLE IF NOT EXISTS `item_cat` (
`catId` int(11) NOT NULL,
  `catName` varchar(30) NOT NULL,
  `imgUrl` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item_cat`
--

INSERT INTO `item_cat` (`catId`, `catName`, `imgUrl`) VALUES
(1, '食物', ''),
(2, '飲品', ''),
(3, '工具', ''),
(4, '急救', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`newsId` int(11) NOT NULL,
  `description` text NOT NULL,
  `time` datetime NOT NULL,
  `districtId` int(11) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsId`, `description`, `time`, `districtId`, `userId`) VALUES
(1, 'news1 for mk', '2014-10-21 15:00:00', 1, 3),
(2, 'news2 for mk', '2014-10-05 05:06:14', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE IF NOT EXISTS `station` (
`stationId` int(11) NOT NULL,
  `stationName` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `districtId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`userId` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` char(64) NOT NULL,
  `role` varchar(15) NOT NULL,
  `districtId` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `username`, `password`, `role`, `districtId`) VALUES
(1, 'uradmin1', '$5$jryACWqwe1mevnBx$rBbtaK/id0FgoRsKHi8Z3DHLXF/BjIuImUi5GfU2Vk4', 'admin', -1),
(2, 'uradmin2', '$5$z7l63ZX+9ok//WlJ$0HQisCKHwgAcAyRZzcsjSvkCJA7tH2quzIKkU4dQJW9', 'admin', -1),
(3, 'mk01', '$5$uYX56dD7s6YGw0jq$Bb3A.wa7gA0uqq2dn8JK96y70KS..kVnxbsbYoeDhL8', 'helper', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
 ADD PRIMARY KEY (`districtId`);

--
-- Indexes for table `district_item`
--
ALTER TABLE `district_item`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district_item_cat`
--
ALTER TABLE `district_item_cat`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
 ADD PRIMARY KEY (`itemId`);

--
-- Indexes for table `item_cat`
--
ALTER TABLE `item_cat`
 ADD PRIMARY KEY (`catId`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`newsId`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
 ADD PRIMARY KEY (`stationId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
MODIFY `districtId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `district_item`
--
ALTER TABLE `district_item`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `district_item_cat`
--
ALTER TABLE `district_item_cat`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
MODIFY `itemId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `item_cat`
--
ALTER TABLE `item_cat`
MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `newsId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `station`
--
ALTER TABLE `station`
MODIFY `stationId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

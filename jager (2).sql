-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2016 at 05:51 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jager`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_item`
--

CREATE TABLE IF NOT EXISTS `cart_item` (
  `CartItemID` int(11) NOT NULL,
  `ItemID` int(11) NOT NULL,
  `Status` varchar(45) DEFAULT 'pending',
  `UserID` int(11) DEFAULT NULL,
  `Qty` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart_item`
--

INSERT INTO `cart_item` (`CartItemID`, `ItemID`, `Status`, `UserID`, `Qty`) VALUES
(2, 2, 'pending', 1, '20'),
(4, 1, 'pending', 1, '2');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `ItemID` int(11) NOT NULL,
  `ItemName` varchar(45) DEFAULT NULL,
  `ItemPrice` varchar(45) DEFAULT NULL,
  `ItemDes` text,
  `ItemTitle` varchar(200) NOT NULL,
  `ItemImg` text,
  `ItemType` varchar(45) DEFAULT NULL,
  `ItemImg2` varchar(255) DEFAULT NULL,
  `ItemImg3` varchar(255) DEFAULT NULL,
  `ItemSize` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`ItemID`, `ItemName`, `ItemPrice`, `ItemDes`, `ItemTitle`, `ItemImg`, `ItemType`, `ItemImg2`, `ItemImg3`, `ItemSize`) VALUES
(1, 'Gorilla T-shirt', '1000', '<p>The unisex T-shirt of the US cult brand from California comes around in a super trendy heather look. The blended fabrics combine durability with silky smooth comfort wear.</p><ul><li>Unisex tailoring fits men rather tight and women more loosely (when in doubt, choose a size bigger or smaller)</li><li>Light, super smooth fabrics 108g/m²</li><li>Material: 50% polyester, 25% cotton, 25% rayon</li></ul>', 'gorilla t shirt cheap', 'it1455859413-img-1.jpg', 'Green', 'it1455859439-img-2.jpg', 'it1455859454-img-3.jpg', 'S,M'),
(2, 'Hasitha T shirt ', '1200', '<p>industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make.</p><ul><li>Unisex tailoring fits men rather tight and women more loosely (when in doubt, choose a size bigger or smaller)</li><li>Light, super smooth fabrics 108g/m²</li><li>Material: 50% polyester, 25% cotton, 25% rayon</li></ul>', 't shirt by hasitha priyasad', 'it1455859636-img-4.jpg', 'Black', 'it1455859645-img-5.jpg', 'it1455859650-img-6.jpg', 'S,M,L,XL'),
(3, 'Thulara T shirt ', '1400', '<p>industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make.</p><ul><li>Unisex tailoring fits men rather tight and women more loosely (when in doubt, choose a size bigger or smaller)</li><li>Light, super smooth fabrics 108g/m²</li><li>Material: 50% polyester, 25% cotton, 25% rayon</li></ul>', 'thulara t shirt company', 'default.jpg', 'Red', 'default.jpg', 'default.jpg', 'S,M'),
(4, 'Jager t shirt ', '2400', '<p>industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make.</p><ul><li>Unisex tailoring fits men rather tight and women more loosely (when in doubt, choose a size bigger or smaller)</li><li>Light, super smooth fabrics 108g/m²</li><li>Material: 50% polyester, 25% cotton, 25% rayon</li></ul>', 'jager t shirt command', 'it1455860779-img-7.jpg', 'Red', 'it1455860785-img-8.jpg', 'it1455860791-img-9.jpg', 'S,M,L,XL');

-- --------------------------------------------------------

--
-- Table structure for table `item_likes`
--

CREATE TABLE IF NOT EXISTS `item_likes` (
  `ID` int(11) NOT NULL,
  `ItemID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_likes`
--

INSERT INTO `item_likes` (`ID`, `ItemID`, `UserID`, `Status`) VALUES
(1, 1, 1, '1'),
(2, 1, 1, '1'),
(3, 1, 1, '1'),
(4, 1, 1, '1'),
(5, 1, 1, '1'),
(6, 2, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `UserID` int(11) NOT NULL,
  `FirstName` varchar(45) DEFAULT NULL,
  `LastName` varchar(45) DEFAULT NULL,
  `Address` text,
  `Country` varchar(45) DEFAULT NULL,
  `City` varchar(45) DEFAULT NULL,
  `Email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `status` enum('1','0') DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `FirstName`, `LastName`, `Address`, `Country`, `City`, `Email`, `password`, `status`) VALUES
(1, 'Hasitha', 'Priyasad', '11/3 Janapriya lane', 'Sri lanka', 'Moratuwa', 'has@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`CartItemID`), ADD KEY `fk_cartitem_idx` (`ItemID`), ADD KEY `fk_userid_idx` (`UserID`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`ItemID`);

--
-- Indexes for table `item_likes`
--
ALTER TABLE `item_likes`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`), ADD UNIQUE KEY `Email_UNIQUE` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `CartItemID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `ItemID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `item_likes`
--
ALTER TABLE `item_likes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_item`
--
ALTER TABLE `cart_item`
ADD CONSTRAINT `fk_itemid` FOREIGN KEY (`ItemID`) REFERENCES `item` (`ItemID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_userid` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

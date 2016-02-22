-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2016 at 06:49 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
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
  `CartItemID` int(11) NOT NULL AUTO_INCREMENT,
  `ItemID` int(11) NOT NULL,
  `Status` varchar(45) DEFAULT 'pending',
  `UserID` int(11) DEFAULT NULL,
  `Qty` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`CartItemID`),
  KEY `fk_cartitem_idx` (`ItemID`),
  KEY `fk_userid_idx` (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `ItemID` int(11) NOT NULL AUTO_INCREMENT,
  `ItemName` varchar(45) DEFAULT NULL,
  `ItemPrice` varchar(45) DEFAULT NULL,
  `ItemDes` text,
  `ItemTitle` varchar(200) NOT NULL,
  `ItemImg` text,
  `ItemType` varchar(45) DEFAULT NULL,
  `ItemImg2` varchar(255) DEFAULT NULL,
  `ItemImg3` varchar(255) DEFAULT NULL,
  `ItemSize` varchar(255) NOT NULL,
  `ItemFor` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ItemID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`ItemID`, `ItemName`, `ItemPrice`, `ItemDes`, `ItemTitle`, `ItemImg`, `ItemType`, `ItemImg2`, `ItemImg3`, `ItemSize`, `ItemFor`) VALUES
(1, 'Gorilla T-shirt', '1000', '<p>The unisex T-shirt of the US cult brand from California comes around in a super trendy heather look. The blended fabrics combine durability with silky smooth comfort wear.</p><ul><li>Unisex tailoring fits men rather tight and women more loosely (when in doubt, choose a size bigger or smaller)</li><li>Light, super smooth fabrics 108g/m²</li><li>Material: 50% polyester, 25% cotton, 25% rayon</li></ul>', 'gorilla t shirt cheap', 'default.jpg', 'Green', 'default.jpg', 'default.jpg', 'S,M', 'Girls,Guys'),
(2, 'Hasitha T shirt ', '1200', '<p>industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make.</p><ul><li>Unisex tailoring fits men rather tight and women more loosely (when in doubt, choose a size bigger or smaller)</li><li>Light, super smooth fabrics 108g/m²</li><li>Material: 50% polyester, 25% cotton, 25% rayon</li></ul>', 't shirt by hasitha priyasad', 'it1455859636-img-4.jpg', 'Black', 'it1455859645-img-5.jpg', 'it1455859650-img-6.jpg', 'S,M,L,XL', NULL),
(3, 'Thulara T shirt ', '1400', '<p>industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make.</p><ul><li>Unisex tailoring fits men rather tight and women more loosely (when in doubt, choose a size bigger or smaller)</li><li>Light, super smooth fabrics 108g/m²</li><li>Material: 50% polyester, 25% cotton, 25% rayon</li></ul>', 'thulara t shirt company', 'default.jpg', 'Red', 'default.jpg', 'default.jpg', 'S,M', NULL),
(4, 'Jager t shirt ', '2400', '<p>industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make.</p><ul><li>Unisex tailoring fits men rather tight and women more loosely (when in doubt, choose a size bigger or smaller)</li><li>Light, super smooth fabrics 108g/m²</li><li>Material: 50% polyester, 25% cotton, 25% rayon</li></ul>', 'jager t shirt command', 'it1455860779-img-7.jpg', 'Red', 'it1455860785-img-8.jpg', 'it1455860791-img-9.jpg', 'S,M,L,XL', NULL),
(5, 'Contrary to popula', '2000', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Contrary to popula', 'it1456158966-img-9.jpg', 'Green', 'default.jpg', 'default.jpg', 'S,M,L,XL', 'Guys'),
(6, 'the printing ', '2400', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ', 'the printing ', 'it1456159133-img-12.jpg', 'Black', 'default.jpg', 'default.jpg', 'S,M', 'Guys'),
(7, 'the printing 2', '2400', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ', 'the printing ', 'it1456159205-img-11.jpg', 'White', 'default.jpg', 'default.jpg', 'S,M', 'Guys'),
(8, 'the printing 3', '2400', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ', 'the printing ', 'it1456159246-img-10.jpg', 'White', 'default.jpg', 'default.jpg', 'S,M,L,XL', 'Guys'),
(9, 'the printing 4', '2400', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ', 'the printing 4', 'it1456159285-img-9.jpg', 'Purple', 'default.jpg', 'default.jpg', 'S,M', 'Guys'),
(10, 'the printing 5', '2200', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ', 'the printing 5', 'it1456159325-img-6.jpg', 'Purple', 'default.jpg', 'default.jpg', 'S,M,L,XL', 'Guys'),
(11, 'the printing 6', '2200', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ', 'the printing 6', 'it1456159561-img-5.jpg', 'Brown', 'default.jpg', 'default.jpg', 'S,M,L,XL', 'Girls'),
(12, 'the printing 7', '2200', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ', 'the printing 7', 'it1456159598-img-1.jpg', 'Brown', 'default.jpg', 'default.jpg', 'S,M,L,XL', 'Girls');

-- --------------------------------------------------------

--
-- Table structure for table `item_likes`
--

CREATE TABLE IF NOT EXISTS `item_likes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ItemID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Status` enum('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `item_likes`
--

INSERT INTO `item_likes` (`ID`, `ItemID`, `UserID`, `Status`) VALUES
(1, 1, 1, '1'),
(2, 1, 2, '1'),
(3, 1, 3, '1'),
(4, 1, 4, '1'),
(5, 1, 5, '1'),
(6, 1, 6, '1'),
(7, 1, 7, '1'),
(8, 1, 8, '1'),
(9, 1, 9, '1'),
(10, 1, 10, '1'),
(11, 2, 1, '1'),
(12, 2, 2, '1'),
(13, 2, 3, '1'),
(14, 2, 4, '1'),
(15, 2, 5, '1'),
(16, 2, 6, '1'),
(17, 2, 7, '1'),
(18, 2, 8, '1'),
(19, 2, 9, '1'),
(20, 2, 10, '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(45) DEFAULT NULL,
  `LastName` varchar(45) DEFAULT NULL,
  `Address` text,
  `Country` varchar(45) DEFAULT NULL,
  `City` varchar(45) DEFAULT NULL,
  `Email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `status` enum('1','0') DEFAULT '0',
  PRIMARY KEY (`UserID`),
  UNIQUE KEY `Email_UNIQUE` (`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `FirstName`, `LastName`, `Address`, `Country`, `City`, `Email`, `password`, `status`) VALUES
(1, 'Thulara', 'Bethmage', '', 'Sri lanka', NULL, 'thularaofficial@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1'),
(2, 'Test', '', '', 'Sri lanka', NULL, 'test@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1');

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

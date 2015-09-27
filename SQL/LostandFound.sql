-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 27, 2015 at 01:47 PM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `LostandFound`
--

-- --------------------------------------------------------

--
-- Table structure for table `Brand`
--

CREATE TABLE IF NOT EXISTS `Brand` (
  `Id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Sub_Id` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Brand`
--

INSERT INTO `Brand` (`Id`, `Name`, `Sub_Id`) VALUES
(2, 'Nokia', 2);

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE IF NOT EXISTS `Category` (
  `Id` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`Id`, `Name`) VALUES
(1, 'Electronics');

-- --------------------------------------------------------

--
-- Table structure for table `Item`
--

CREATE TABLE IF NOT EXISTS `Item` (
  `Id` int(11) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Detail` varchar(200) NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Date` date NOT NULL,
  `Location` varchar(40) NOT NULL,
  `PhotoUrl` varchar(100) DEFAULT NULL,
  `Cat_Id` int(5) NOT NULL,
  `Sub_Id` int(5) DEFAULT NULL,
  `P_Id` int(5) NOT NULL,
  `brand_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Item`
--

INSERT INTO `Item` (`Id`, `Title`, `Detail`, `Type`, `Status`, `Date`, `Location`, `PhotoUrl`, `Cat_Id`, `Sub_Id`, `P_Id`, `brand_id`) VALUES
(1, 'Moto G', 'Black Moto G', '1', '0', '2015-09-21', 'Biratnagar', 'null', 1, 2, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Login`
--

CREATE TABLE IF NOT EXISTS `Login` (
  `Id` int(11) NOT NULL,
  `UserId` int(5) NOT NULL,
  `PersonId` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Person`
--

CREATE TABLE IF NOT EXISTS `Person` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(15) NOT NULL,
  `MiddleName` varchar(15) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `PhoneNumber` bigint(20) NOT NULL,
  `Type` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Person`
--

INSERT INTO `Person` (`Id`, `FirstName`, `MiddleName`, `LastName`, `Email`, `PhoneNumber`, `Type`) VALUES
(1, 'Ashim', 'Sangram', 'Regmi', 'aregmee@gmail.com', 9842378755, '1');

-- --------------------------------------------------------

--
-- Table structure for table `SubCategory`
--

CREATE TABLE IF NOT EXISTS `SubCategory` (
  `Id` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Cat_Id` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SubCategory`
--

INSERT INTO `SubCategory` (`Id`, `Name`, `Cat_Id`) VALUES
(2, 'Mobile', 1);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `Id` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Citizenship_Number` varchar(25) NOT NULL,
  `License_Number` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Brand`
--
ALTER TABLE `Brand`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Sub_Id` (`Sub_Id`);

--
-- Indexes for table `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Item`
--
ALTER TABLE `Item`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Cat_Id` (`Cat_Id`),
  ADD KEY `Sub_Id` (`Sub_Id`),
  ADD KEY `P_Id` (`P_Id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `Login`
--
ALTER TABLE `Login`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `PersonId` (`PersonId`);

--
-- Indexes for table `Person`
--
ALTER TABLE `Person`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `SubCategory`
--
ALTER TABLE `SubCategory`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Cat_Id` (`Cat_Id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Brand`
--
ALTER TABLE `Brand`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Category`
--
ALTER TABLE `Category`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Item`
--
ALTER TABLE `Item`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Login`
--
ALTER TABLE `Login`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Person`
--
ALTER TABLE `Person`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `SubCategory`
--
ALTER TABLE `SubCategory`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Brand`
--
ALTER TABLE `Brand`
  ADD CONSTRAINT `Brand_ibfk_1` FOREIGN KEY (`Sub_Id`) REFERENCES `SubCategory` (`Id`);

--
-- Constraints for table `Item`
--
ALTER TABLE `Item`
  ADD CONSTRAINT `Item_ibfk_1` FOREIGN KEY (`Cat_Id`) REFERENCES `Category` (`Id`),
  ADD CONSTRAINT `Item_ibfk_2` FOREIGN KEY (`Sub_Id`) REFERENCES `SubCategory` (`Id`),
  ADD CONSTRAINT `Item_ibfk_3` FOREIGN KEY (`P_Id`) REFERENCES `Person` (`Id`),
  ADD CONSTRAINT `Item_ibfk_4` FOREIGN KEY (`brand_id`) REFERENCES `Brand` (`Id`);

--
-- Constraints for table `Login`
--
ALTER TABLE `Login`
  ADD CONSTRAINT `Login_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `User` (`Id`),
  ADD CONSTRAINT `Login_ibfk_2` FOREIGN KEY (`PersonId`) REFERENCES `Person` (`Id`);

--
-- Constraints for table `SubCategory`
--
ALTER TABLE `SubCategory`
  ADD CONSTRAINT `SubCategory_ibfk_1` FOREIGN KEY (`Cat_Id`) REFERENCES `Category` (`Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

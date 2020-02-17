-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 27, 2019 at 04:01 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Ecomm2`
--

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `cid` int(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`cid`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'Alien', 'Gurung', 'gurungalien2727@gmail.com', '111Account'),
(3, 'Sani', 'Pradhan', 'sannypradhan@yahoo.com', '111Account');

-- --------------------------------------------------------

--
-- Table structure for table `Orderdetails`
--

CREATE TABLE `Orderdetails` (
  `oid` int(20) NOT NULL,
  `zipcode` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(40) NOT NULL,
  `streetaddress` varchar(40) NOT NULL,
  `cardtype` varchar(20) NOT NULL,
  `cardnumber` varchar(40) NOT NULL,
  `expirydate` varchar(40) NOT NULL,
  `securitycode` varchar(40) NOT NULL,
  `buyerid` int(20) NOT NULL,
  `productid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Orderdetails`
--

INSERT INTO `Orderdetails` (`oid`, `zipcode`, `city`, `state`, `streetaddress`, `cardtype`, `cardnumber`, `expirydate`, `securitycode`, `buyerid`, `productid`) VALUES
(4, '36081', 'Troy', 'Alabama', '217 N Franklin Drive', 'Discover', '1234', '', '128', 3, 18),
(5, '36081', 'Troy', 'Alabama', '217 N Franklin Drive', 'American Express', '4567', '', '478', 3, 1),
(6, '36081', 'Troy', 'Alabama', '100 Blackmon Street Apt 4', 'Discover', '4763', '', '789', 1, 12),
(7, '34353', 'Troy', 'Alabama', '100 Blackmon Street Apt 4', 'Discover', '7845', '', '685', 1, 24),
(8, '36081', 'Troy', 'Alabama', '217 N Franklin Drive', 'Discover', '9086', '', '908', 1, 4),
(9, '36081', 'Troy', 'Alabama', '217 N Franklin Drive', 'American Express', '998', '', '990', 1, 9),
(10, '34353', 'Troy', 'Alabama', '100', 'American Express', '3442', '', '122', 1, 3),
(11, '36081', 'Troy', 'Alabama', '217 N Franklin Drive', 'Discover', '543', '', '121', 1, 6),
(12, '36081', 'Troy', 'Alabama', '217 N Franklin Drive', 'American Express', '235', '', '211', 1, 16),
(13, '36081', 'Troy', 'Alabama', '217 N Franklin Drive', 'American Express', '324', '', '115', 1, 14);

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE `Product` (
  `pid` int(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `brandname` varchar(20) NOT NULL,
  `price` int(20) NOT NULL,
  `sellerid` int(20) NOT NULL,
  `imagename` varchar(50) NOT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`pid`, `category`, `brandname`, `price`, `sellerid`, `imagename`, `description`) VALUES
(1, 'Shoes', 'Addidas', 120, 1, 'addidas3.jpeg', 'This is a white addidas shoes'),
(2, 'Monitor', 'Dell', 220, 1, 'dell2.jpg', 'This is a dell monitor'),
(3, 'Tshirt', 'Nautica', 22, 1, 'nautica2.jpeg', 'This is nautica tshirt'),
(4, 'Laptop', 'Apple', 1200, 1, 'mac1.jpg', 'This is a mac book pro'),
(5, 'Shoes', 'Vans', 60, 2, 'vans.jpeg', 'This a vans shoes'),
(6, 'Pants', 'Levis', 55, 2, 'levis2.png', 'This is a levis pant'),
(7, 'Monitor', 'HP', 160, 2, 'hp2.jpeg', 'This is HP monitor'),
(8, 'Laptop', 'Windows', 650, 2, 'windows2.jpg', 'This is a windows monitor'),
(9, 'Shoes', 'Nike', 85, 2, 'nike3.jpeg', 'This is nike shoes'),
(10, 'Shoes', 'Nike', 68, 1, 'nike2.png', 'This is a nike shoes'),
(11, 'Tshirt', 'Nike', 28, 1, 'niketshirt1.jpeg', 'Nike tshirt'),
(12, 'Monitor', 'Dell', 150, 1, 'dellm1.jpeg', 'Dell Monitor'),
(13, 'Shoes', 'Addidas', 200, 1, 'addi9.jpeg', 'Addidas  Shoes'),
(14, 'Laptop', 'Dell', 350, 1, 'dell4.jpg', 'Dell Laptop'),
(15, 'Tshirt', 'Nike', 32, 1, 'niketshirt2.jpeg', 'Nke Tshirt '),
(16, 'Shoes', 'OniksuraTiger', 75, 1, 'oni2.jpeg', 'Oniksura Tiger'),
(17, 'Shoes', 'Nike', 78, 1, 'nike6.jpeg', 'Nike shoes'),
(18, 'Shoes', 'Nike', 95, 1, 'nike7.jpeg', 'Nike shoes'),
(19, 'Shoes', 'Vans', 48, 1, 'van2.jpeg', 'Vans Shoes'),
(20, 'Shoes', 'Vans', 65, 1, 'van3.jpeg', 'Vans Shoes'),
(21, 'Tshirt', 'Nike', 35, 2, 'niketshirt3.jpeg', 'Nike Tshirt'),
(22, 'Tshirt', 'Nautica', 40, 2, 'nau1.jpeg', 'Nautica Tshirt'),
(23, 'Pants', 'Under Armour', 45, 2, 'underarmor.jpeg', 'Under Armour Track'),
(24, 'CellPhone', 'Apple', 650, 2, 'iphoneX.jpeg', 'Iphone X '),
(25, 'CellPhone', 'Huawei', 450, 2, 'Huwaei.jpeg', 'Huawei phone'),
(26, 'Tshirt', 'Nautica', 40, 1, 'nau2.jpeg', 'Nautica Tshirt'),
(27, 'Tshirt', 'Nike', 48, 1, 'niketshirt4.jpeg', 'Nike Tshirt'),
(28, 'Tshirt', 'Nike', 30, 1, 'niketshirt5.jpeg', 'Nike Tshirt'),
(29, 'Pants', 'Hollister', 70, 1, 'hollister.jpeg', 'Hollister Pants'),
(30, 'Shoes', 'Vans', 65, 1, 'van4.jpeg', 'Vans Shoes'),
(31, 'Monitor', 'Dell', 300, 1, 'dellm2.jpeg', 'Dell Monitor'),
(32, 'Laptop', 'Asus', 700, 1, 'asus1.jpeg', 'Asus Laptop'),
(33, 'Monitor', 'Asus', 130, 1, 'asusm.jpeg', 'Asus Monitor');

-- --------------------------------------------------------

--
-- Table structure for table `Seller`
--

CREATE TABLE `Seller` (
  `sid` int(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Seller`
--

INSERT INTO `Seller` (`sid`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'First ', 'Seller', 'gurung.alien@yahoo.com', '111Account'),
(2, 'Second', 'Seller', '1234', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `Orderdetails`
--
ALTER TABLE `Orderdetails`
  ADD PRIMARY KEY (`oid`),
  ADD KEY `buyerid` (`buyerid`),
  ADD KEY `Orderdetails_ibfk_1` (`productid`);

--
-- Indexes for table `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `sellerid` (`sellerid`);

--
-- Indexes for table `Seller`
--
ALTER TABLE `Seller`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `cid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Orderdetails`
--
ALTER TABLE `Orderdetails`
  MODIFY `oid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `Product`
--
ALTER TABLE `Product`
  MODIFY `pid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `Seller`
--
ALTER TABLE `Seller`
  MODIFY `sid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Orderdetails`
--
ALTER TABLE `Orderdetails`
  ADD CONSTRAINT `Orderdetails_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `Product` (`pid`);

--
-- Constraints for table `Product`
--
ALTER TABLE `Product`
  ADD CONSTRAINT `Product_ibfk_1` FOREIGN KEY (`sellerid`) REFERENCES `Seller` (`sid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

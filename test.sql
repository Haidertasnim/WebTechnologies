-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2021 at 07:34 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(6) UNSIGNED NOT NULL,
  `cname` varchar(30) NOT NULL,
  `cemail` varchar(30) NOT NULL,
  `cphone` varchar(15) DEFAULT NULL,
  `cpassword` varchar(64) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `picture` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `cname`, `cemail`, `cphone`, `cpassword`, `reg_date`, `picture`) VALUES
(1, 'Amrita Ganguly', 'amritaganguly72@gmail.com', '01911111111', '1122', '2021-08-18 13:39:43', 'amrita.jpg'),
(2, 'Tasnim Haider', 'tasnim@gmail.com', '01911111111', '1122', '2021-08-18 13:40:01', 'tasnim.jpg'),
(3, 'Ahona Ganguly', 'ahona@gmail.com', '11111111111', 'Ahona12@', '2021-08-18 13:38:01', 'amrita.jpg'),
(4, 'Abir Hasan', 'example@gmail.com', '11111111111', 'Abir123@', '2021-08-19 05:33:05', '1602572784560.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(6) UNSIGNED NOT NULL,
  `euserid` varchar(12) NOT NULL,
  `ename` varchar(30) NOT NULL,
  `efname` varchar(30) NOT NULL,
  `emname` varchar(30) NOT NULL,
  `eemail` varchar(30) NOT NULL,
  `ephone` varchar(15) NOT NULL,
  `enid` varchar(15) NOT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `dob` date NOT NULL,
  `bg` varchar(4) DEFAULT NULL,
  `education` varchar(150) DEFAULT NULL,
  `present` varchar(150) DEFAULT NULL,
  `permanent` varchar(150) DEFAULT NULL,
  `epassword` varchar(64) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `picture` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `euserid`, `ename`, `efname`, `emname`, `eemail`, `ephone`, `enid`, `gender`, `dob`, `bg`, `education`, `present`, `permanent`, `epassword`, `reg_date`, `picture`) VALUES
(1, '1001', 'Amrita Ganguly', 'Debendra Ganguly', 'Neha Ganguly', 'amrita@gmail.com', '01911111111', '123456789', 'F', '2021-08-14', 'A+', 'Student', 'Mohammadpur, Dhaka', 'Mohammadpur, Dhaka', '1122', '2021-08-18 13:41:42', 'amrita.jpg'),
(2, '1002', 'Tasnim Haider', 'Mr.', 'Mrs.', 'tasnim@gmail.com', '01911111111', '12345', 'F', '2021-08-14', 'A+', 'Student', 'Dhaka', 'Dhaka', '1122', '2021-08-18 13:35:15', 'tasnim.jpg'),
(3, '1003', 'Ahona Ganguly', 'Mr Xx', 'Mrs Yzx', 'ahona@gmail.com', '11111111111', '123456', 'F', '2021-08-17', 'A+', 'Student', 'Dhaka, Bangladesh', 'Dhaka Bangladesh', 'Ahona1234@', '2021-08-19 05:15:41', 'amrita.jpg'),
(4, '1004', 'Abir Hasan', 'Mr Xx', 'Mrs Ys', '', '11111111111', '1234567', 'M', '2021-08-19', 'B+', 'Student', 'Dhaka, Bangladesh', 'Dhaka Bangladesh', 'Abir123@', '2021-08-19 05:33:35', 'pp.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `icustomer`
--

CREATE TABLE `icustomer` (
  `date` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `oid` int(20) NOT NULL,
  `norder` int(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `delivary` varchar(15) NOT NULL,
  `ddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `icustomer`
--

INSERT INTO `icustomer` (`date`, `email`, `oid`, `norder`, `status`, `delivary`, `ddate`) VALUES
('2021-08-14', 'amritaganguly72@gmail.com', 101, 5, 'Online', 'On the way', '2021-08-16'),
('2021-06-26', 'tasnim@gmail.com', 102, 5, 'Online', 'Done', '2021-08-28'),
('2021-06-25', 'tasnim@gmail.com', 103, 5, 'Online', 'Done', '2021-06-28');

-- --------------------------------------------------------

--
-- Table structure for table `iemployee`
--

CREATE TABLE `iemployee` (
  `euserid` int(50) NOT NULL,
  `date` date NOT NULL,
  `stime` time(6) NOT NULL,
  `jtime` time(6) NOT NULL,
  `etime` time(6) NOT NULL,
  `ltime` time(6) NOT NULL,
  `zone` int(50) NOT NULL,
  `comment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iemployee`
--

INSERT INTO `iemployee` (`euserid`, `date`, `stime`, `jtime`, `etime`, `ltime`, `zone`, `comment`) VALUES
(1001, '2021-08-14', '08:01:31.000000', '09:04:31.000000', '14:01:26.000000', '14:01:31.099000', 1, 'Good'),
(1002, '2021-08-14', '08:01:31.000000', '09:04:31.000000', '14:01:26.000000', '14:01:45.099000', 2, 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(6) UNSIGNED NOT NULL,
  `pname` varchar(30) NOT NULL,
  `pcetegory` varchar(30) NOT NULL,
  `pprice` int(6) NOT NULL,
  `numofproduct` int(6) NOT NULL,
  `pbrand` varchar(15) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `picture` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pname`, `pcetegory`, `pprice`, `numofproduct`, `pbrand`, `reg_date`, `picture`) VALUES
(1, 'Mango', 'Fruit', 50, 100, 'Sunset', '2021-08-18 12:29:28', 'mango.jpg'),
(2, 'Guava', 'Fruit', 55, 100, 'Sunset', '2021-08-18 12:30:01', 'guava.jpg'),
(3, 'Potato', 'Vegetable', 20, 250, 'Sunset', '2021-08-18 12:30:31', 'potato.jpg'),
(4, 'Cow Meat', 'Meat', 550, 10, 'Sunset', '2021-08-18 12:31:13', 'meat.jpg'),
(5, 'Hilsha Fish', 'Fish', 1000, 100, 'Sunset', '2021-08-18 12:31:50', 'hilsa.jpg'),
(6, 'Cow Milk', 'Milk', 55, 100, 'Sunset', '2021-08-18 12:32:41', 'milk.jpg'),
(7, 'Chicken', 'Meat', 150, 100, 'Sunset', '2021-08-18 12:33:17', 'chicken.jpeg'),
(8, 'Spoon', 'Cook', 20, 50, 'Sunset', '2021-08-18 12:34:33', 'spoon.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cemail` (`cemail`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `euserid` (`euserid`),
  ADD UNIQUE KEY `eemail` (`eemail`),
  ADD UNIQUE KEY `enid` (`enid`);

--
-- Indexes for table `icustomer`
--
ALTER TABLE `icustomer`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `iemployee`
--
ALTER TABLE `iemployee`
  ADD UNIQUE KEY `euserid` (`euserid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

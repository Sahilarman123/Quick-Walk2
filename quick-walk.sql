-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 07:03 AM
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
-- Database: `quick-walk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `fname`, `lname`, `email`, `phone`, `password`, `cpassword`) VALUES
(1, 'sahildeshwali003@gmail.com', 'sahil arman', 'arman', 'sahildeshwali98@gmail.com', '7357753260', '1234', '1234'),
(3, 'sahildeshwali123@gmail.com', 'sahil', 'vmhv', 'sahildeshwali98@gmail.com', '7357753260', '1234', '1234'),
(4, 'admin', 'sahil', 'vmhv', 'sahildeshwali345@gmail.com', '7357753260', '3456', '3456'),
(5, 'admin', 'sahil', 'vmhv', 'sahildeshwali345@gmail.com', '7357753260', '2345', '2345'),
(6, '', 'sahil', 'vmhv', 'sahildeshwali123@gmail.com', '7357753260', '1234', '1234'),
(7, '', 'sahil', 'vmhv', 'sahildeshwali123@gmail.com', '7357753260', '1234', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `apointment`
--

CREATE TABLE `apointment` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `comment` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apointment`
--

INSERT INTO `apointment` (`id`, `name`, `phone`, `city`, `comment`) VALUES
(3, 'Sahil Araman', '7357753260', 'Jaipur', 'comment'),
(4, 'Sahil Araman', '7357753260', 'Jaipur', 'comment'),
(5, 'Sahil Araman', '7357753260', 'Merta', 'comment'),
(6, 'Sahil Araman', '7357753260', 'Merta', 'ok'),
(7, 'Sahil Araman', '7357753260', 'Merta', 'ok'),
(8, 'Sahil Araman', '7357753260', 'Merta', 'Ok'),
(9, 'Sahil Araman', '7357753260', 'Merta', 'ok'),
(10, 'sahil', '7357753260', 'Ahamdabad', 'my  name is ......');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apointment`
--
ALTER TABLE `apointment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `apointment`
--
ALTER TABLE `apointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

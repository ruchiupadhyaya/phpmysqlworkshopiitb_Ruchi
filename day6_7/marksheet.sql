-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 01:48 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marksheet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Shweta Shah', 'shweta@gmail.com', '4207e1e6e3809688a8b9ed1b2c1b7faa'),
(2, 'Anand More', 'anand123@gmail.com', '8bda8e915e629a9fd1bbca44f8099c81');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `division` varchar(10) NOT NULL,
  `rollno` int(10) NOT NULL,
  `sub1` int(5) NOT NULL,
  `sub2` int(5) NOT NULL,
  `sub3` int(5) NOT NULL,
  `total` int(5) NOT NULL,
  `percentage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `name`, `division`, `rollno`, `sub1`, `sub2`, `sub3`, `total`, `percentage`) VALUES
(1, 'Vidhi Thakkar', 'A', 27, 90, 91, 85, 266, 88.6667),
(2, 'Ruchi Upadhyaya', 'A', 22, 97, 89, 80, 266, 88.6667),
(3, 'Rohan Sharma', 'A', 56, 89, 67, 80, 236, 78.6667),
(4, 'Harshit Upadhyaya', 'D', 20, 98, 89, 67, 254, 84.6667),
(5, 'Shriya Deshpande', 'A', 13, 99, 95, 85, 279, 93);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `division` varchar(10) NOT NULL,
  `rollno` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `firstname`, `lastname`, `division`, `rollno`, `email`, `password`) VALUES
(1, 'Ruchi', 'Upadhyaya', 'A', 22, 'ruchi@gmail.com', '996c43b3df35048358e637b5f80e9954'),
(2, 'Vidhi', 'Thakkar', 'A', 27, 'vidhi@gmail.com', '140362895bb6a05eed71d66b03b95553'),
(3, 'Rohan', 'Sharma', 'A', 56, 'rohan@gmail.com', 'c916d142f0dc7f9389653a164f1d4e9d'),
(4, 'Harshit', 'Upadhyaya', 'D', 20, 'harshit@gmail.com', '83a75f0b31435193bafd3b9c5fd45aec'),
(5, 'Shriya', 'Deshpande', 'A', 13, 'shriya@gmail', '42d73ceb10cb15af40ff36fb124d2c2c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

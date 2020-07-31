-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2020 at 09:40 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kraft_work`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_mst`
--

CREATE TABLE `category_mst` (
  `catid` int(11) NOT NULL,
  `catname` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `catimagepath` varchar(255) NOT NULL,
  `status` char(1) DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_mst`
--

INSERT INTO `category_mst` (`catid`, `catname`, `description`, `catimagepath`, `status`) VALUES
(1, 'poster', 'posters', '../uploads/category/poster.png', 'Y'),
(3, 'model', 'models', '../uploads/category/model.png', 'Y'),
(4, 'chocolate', 'chocolates', '../uploads/category/chocolate.png', 'Y'),
(7, 'charts', 'charts.. ', '../uploads/category/charts.png', 'Y'),
(8, 'Project file', 'project files', '../uploads/category/Project file.png', 'Y'),
(9, 'Fancy Dresses', 'fancy', '../uploads/category/Fancy Dresses.png', 'Y'),
(10, 'Bookmarks', 'bookmark', '../uploads/category/Bookmarks.png', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_mst`
--
ALTER TABLE `category_mst`
  ADD PRIMARY KEY (`catid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_mst`
--
ALTER TABLE `category_mst`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 13, 2022 at 02:02 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project3`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminconfirm`
--

CREATE TABLE `adminconfirm` (
  `id` int(10) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `tripdate` date NOT NULL,
  `duration` int(3) NOT NULL,
  `summary` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminconfirm`
--

INSERT INTO `adminconfirm` (`id`, `heading`, `tripdate`, `duration`, `summary`) VALUES
(1, 'halifax', '2017-04-12', 4, 'Laurem ipsum dolor sit amet, consectetur adipisicing elit,                     sed do eiusmod tempor incididunt ut labore et dolore                     magna aliqua. Ut enim ad minim venlam proident, sunt in                     culpa qui officia deserunt mollit anim id est laborum.                 '),
(2, 'sydney', '2017-05-10', 2, 'Laurem ipsum dolor sit amet, consectetur adipisicing elit,                     sed do eiusmod tempor incididunt ut labore et dolore                     magna aliqua. Ut enim ad minim venlam proident, sunt in                     culpa qui officia deserunt mollit anim id est laborum.               ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminconfirm`
--
ALTER TABLE `adminconfirm`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminconfirm`
--
ALTER TABLE `adminconfirm`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

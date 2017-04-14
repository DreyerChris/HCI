-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2017 at 01:59 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `numetro`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `nameMovie` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `rating` float UNSIGNED NOT NULL,
  `ageRestriction` int(5) NOT NULL,
  `releaseDate` date NOT NULL,
  `Director` varchar(100) NOT NULL,
  `Music` varchar(100) NOT NULL,
  `runningTime` varchar(10) NOT NULL,
  `synopsis` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`nameMovie`, `image`, `rating`, `ageRestriction`, `releaseDate`, `Director`, `Music`, `runningTime`, `synopsis`) VALUES
('Chips', '3.jpg', 5, 13, '2017-03-24', '', '', '', ''),
('John Wick', '2.jpg', 7, 16, '2017-03-07', '', '', '', ''),
('Kong Skull island', '4.jpg', 8.5, 16, '2017-03-10', 'Some Guy', 'another guy', '2hr20min', 'Big giant monkey wrecks some shit on an island full of skulls lol, 10/10 would watch again.'),
('LaLaLand', '', 8.4, 13, '2017-01-27', '', '', '', ''),
('Miss Sloane', '5.jpg', 6.8, 13, '2017-03-17', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`nameMovie`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

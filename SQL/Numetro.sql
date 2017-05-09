-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2017 at 01:14 AM
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
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `index` int(11) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`index`, `heading`, `username`, `comment`) VALUES
(1, 'Pieter watched and commented on', 'Pieter Bezuidenhout', 'Excellent movie!! 10/10 Would watch again!'),
(2, 'Pieter watched and commented on', 'jannie', 'I agree man'),
(3, 'Pieter watched and commented on\r\n', 'Carol', 'It was okay I suppose...');

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE `feed` (
  `heading` varchar(100) NOT NULL,
  `feedDate` varchar(100) NOT NULL,
  `movie` varchar(100) NOT NULL,
  `likes` int(11) NOT NULL,
  `numComments` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`heading`, `feedDate`, `movie`, `likes`, `numComments`) VALUES
('Pieter watched and commented on', '25 Feb at 7:22 am', '3.jpg', 17, 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `suburb` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `contact` int(50) NOT NULL,
  `profilepic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `suburb`, `city`, `contact`, `profilepic`) VALUES
('Idrian', '123', 'test@mail.com', 'Wonderboom', 'Pretoria', 123456789, '0.jpg'),
('jannie', '123', 'email@example.com', 'wonderboom', 'Pretoria', 123456789, '0.jpg'),
('Justin Clarke', '123', 'justin@email.com', 'Brooklyn', 'Pretoria', 123456789, '1.jpg'),
('Pieter Bezuidenhout', '123', 'PieterBZ@gmail.com', 'Menlyn', 'Pretoria', 87546297, 'jaco.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`index`),
  ADD KEY `index` (`index`);

--
-- Indexes for table `feed`
--
ALTER TABLE `feed`
  ADD PRIMARY KEY (`heading`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`nameMovie`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `index` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

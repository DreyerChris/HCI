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
  `ageRestriction` varchar(100) NOT NULL,
  `releaseDate` varchar(100) NOT NULL,
  `Director` varchar(100) NOT NULL,
  `Music` varchar(100) NOT NULL,
  `runningTime` varchar(10) NOT NULL,
  `synopsis` varchar(500) NOT NULL,
  `IMDB` varchar(1000) NOT NULL,
  `youtube` varchar(1000) NOT NULL,
  `blurb` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`nameMovie`, `image`, `rating`, `ageRestriction`, `releaseDate`, `Director`, `Music`, `runningTime`, `synopsis`, `IMDB`, `youtube`, `blurb`, `genre`) VALUES
('Chips', '3.jpg', 6, 'R18', '6 April', 'Dax Shepard', 'Hanz Zimmer', '1hr 20min', 'A rookie officer is teamed with a hardened pro at the California Highway Patrol, though the newbie soon learns his partner is really an undercover Fed investigating a heist that may involved some crooked cops.', 'http://www.imdb.com/title/tt0493405/?ref_=fn_al_tt_1', 'https://www.youtube.com/embed/FKlbX-t9GLg', 'Funny South African Movie', 'Comedy'),
('John Wick', '2.jpg', 8, 'R18', '7 March', 'Chad Stahelski', 'Hanz Zimmer', '2h 2min', 'After returning to the criminal underworld to repay a debt, John Wick discovers that a large bounty has been put on his life.', 'http://www.imdb.com/title/tt4425200/?ref_=nv_sr_1', 'https://www.youtube.com/embed/XGk2EfbD_Ps', 'Legendary assassin John Wick', 'Action'),
('Kong Skull island', '4.jpg', 7, 'PG13', '10 March', 'Jordan Vogt-Roberts', 'Hanz Zimmer', '1hr 58min', 'A team of scientists explore an uncharted island in the Pacific, venturing into the domain of the mighty Kong, and must fight to escape a primal Eden.', 'http://www.imdb.com/title/tt3731562/?ref_=nv_sr_1', 'https://www.youtube.com/embed/h9y6oPka3us', 'Big monkey on island', 'Fantasy/Science'),
('La La Land', '6.jpg', 8, 'PG13', '27 January', 'Damien Chazelle', 'Hanz Zimmer', '2h 8min', 'A jazz pianist falls for an aspiring actress in Los Angeles.', 'http://www.imdb.com/title/tt3783958/?ref_=nv_sr_1', 'https://www.youtube.com/embed/0pdqf4P9MB8', 'Two lovers drawn together by what they love', 'Drama/Romance'),
('Miss Sloane', '5.jpg', 7, 'R18', '17 March', 'John Madden', 'Hanz Zimmer', '2h 12min', 'In the high-stakes world of political power-brokers, Elizabeth Sloane is the most sought after and formidable lobbyist in D.C. But when taking on the most powerful opponent of her career, she finds winning may come at too high a price.', 'http://www.imdb.com/title/tt4540710/?ref_=nv_sr_1', 'https://www.youtube.com/embed/AMUkfmUu44k', 'Elizabeth Sloane is one of the most sought-after lobbyists in Washington', 'Drama');


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

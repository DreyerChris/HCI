-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 23, 2017 at 09:31 PM
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

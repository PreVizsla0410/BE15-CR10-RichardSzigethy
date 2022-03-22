-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2022 at 03:54 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `be15_cr10_richardszigethy_biglibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `mediaType` enum('Book','DVD','Cd') NOT NULL,
  `shortDescr` varchar(255) NOT NULL,
  `authorLastName` varchar(255) NOT NULL,
  `authorFirstName` varchar(255) NOT NULL,
  `publisherName` varchar(255) NOT NULL,
  `publisherAddress` varchar(255) NOT NULL,
  `publishDate` year(4) NOT NULL,
  `mediaStatus` enum('Available','Not Available') NOT NULL,
  `ISBN` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `img`, `title`, `mediaType`, `shortDescr`, `authorLastName`, `authorFirstName`, `publisherName`, `publisherAddress`, `publishDate`, `mediaStatus`, `ISBN`) VALUES
(1, 'Bible.jpeg', 'The Bible', '', 'A book we are all sure it is based on true events. The only fact is, that many people threat this book way too seriously.', 'The almighty', 'God', 'Heaven', 'Jerusalem', 2022, 'Available', '9788610023824'),
(2, 'AlbertCamus.jpg', 'the myth of sisyphus', '', 'A real book about philosophy.', 'Albert', 'Camus', 'Voyereur', 'Paris', 2022, 'Available', '94545453824'),
(3, 'chemisch.jpg', 'Komisch, alles chemisch', '', 'A book about chemistry in our everyday lives', 'Ying', 'Yang', 'Chemieverlag', 'Berlin', 2022, 'Not Available', '343438610023824'),
(4, 'ThinkFast.jpg', 'Think Fast, Think Slow', '', 'A book about reorganazing you thinking', 'Daniel', 'Kahnemann', 'Eisbergverlag', 'USA', 2022, 'Not Available', '434343453824'),
(5, 'Faceoff.jpg', 'Faceoff', '', 'A MOVIE WITH NICOLAS CAGE AND JOHN TRAVOLTA. YOU NEED MORE TEASING???', 'Nicolas', 'Cage', 'Hollywood', 'USA', 2022, 'Available', '865543453824'),
(6, 'Rammstein.jpg', 'Rammstein', '', 'Rammstein: Deutschland', 'Ramm', 'Stein', 'Berlin', 'Germany', 2022, 'Available', '122243453824'),
(7, 'DerEkel.jpg', 'Nausea', '', 'A men who has nausea against everything', 'Jean-Paul', 'Sartre', 'Paris', 'France', 2022, 'Not Available', '8554453824'),
(8, 'MrDeeds.jpg', 'Mr.Deeds', '', 'It´s Adam Sandler?!', 'Adam', 'Sandler', 'America', 'Usa', 2022, 'Available', '7852153824'),
(9, 'britney.jpg', 'Britney Spears', '', 'Best musician ever', 'Britney', 'Spears', 'Maybach music', 'Usa', 2022, 'Not Available', '9552453824'),
(10, 'theroom.jpg', 'The room', '', 'Best movie ever', 'Tommy', 'Wiseu', 'Hollywood', 'Usa', 2022, 'Available', '5544453824');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

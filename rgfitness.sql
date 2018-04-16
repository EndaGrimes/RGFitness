-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2018 at 11:22 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rgfitness`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `firstname` varchar(55) NOT NULL,
  `lastname` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `phone` varchar(55) NOT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL,
  `pt` varchar(55) NOT NULL,
  `user_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `firstname`, `lastname`, `email`, `phone`, `date`, `time`, `pt`, `user_fk`) VALUES
(12, 'Enda', 'anc', 'abc@abc.com', '07544211256', '2018-04-06', '8am', 'Ruari Grimes', 6),
(13, 'Enda', 'Grimes', 'enda.grimes@hotmail.co.uk', '07544211256', '2018-04-24', '4pm', 'Ruari Grimes', 1),
(14, 'kumar', 'harold', 'kumar@hotmail.com', '077777777777', '2018-04-20', '7pm', 'Ruari Grimes', 6),
(15, 'kumar', 'harold', 'kumar@hotmail.com', '077777777777', '2018-04-26', '8pm', 'Elaine Kelly', 6);

-- --------------------------------------------------------

--
-- Table structure for table `mailer`
--

CREATE TABLE `mailer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mailer`
--

INSERT INTO `mailer` (`id`, `name`, `email`, `message`) VALUES
(1, '', '', ''),
(2, '', '', ''),
(3, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `user_type`, `password`) VALUES
(1, '1234', '1234@123.com', 'user', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'EndaGrimes', 'enda.grimes@hotmail.co.uk', 'admin', '785c81b7f679da56c7def1f7509c93c6'),
(3, '789', '789@aol.com', 'user', '68053af2923e00204c3ca7c6a3150cf7'),
(6, 'kumar', 'kumar@hotmail.com', 'user', '79cfac6387e0d582f83a29a04d0bcdc4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `user_fk` (`user_fk`);

--
-- Indexes for table `mailer`
--
ALTER TABLE `mailer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `mailer`
--
ALTER TABLE `mailer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`user_fk`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2019 at 03:48 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', '$2y$10$4r7d7RZS37aRhpID5OcmPu9zvIAqPO4vRsicS03gScy3wfW4/4WHy', 'admin@admin.com'),
(2, 'admin2', '$2y$10$4r7d7RZS37aRhpID5OcmPu9zvIAqPO4vRsicS03gScy3wfW4/4WHy', 'aslam4webz@gmail.com'),
(3, 'admin3', '$2y$10$NWfmBdw3tXYxFKPxsSMf0uvLdS3BOOv8h4oGMhDaJSMGw5YpUMP/6', 'em4tlc@gmail.com'),
(7, 'm', '$2y$10$bN41BDJH.Fn6507jvZ1ZUuOL5VFE4m5NR.sRj9yY4jvKO8VoqBWAG', 'aslam4webz@gmail.com'),
(8, 'aslam', '$2y$10$WWUL0V284xrbu/zbguQWJOsyl7EaeDYyCyqaaimDCnWSg66a.L0XC', 'aslam4webz@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

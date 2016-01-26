-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1build0.15.04.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 26, 2016 at 09:50 AM
-- Server version: 5.6.27-0ubuntu0.15.04.1
-- PHP Version: 5.6.4-4ubuntu6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phonebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `phone_data`
--

CREATE TABLE IF NOT EXISTS `phone_data` (
`id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `birthday` date NOT NULL,
  `file` varchar(30) NOT NULL,
  `operator` varchar(30) NOT NULL,
  `mobile` int(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `hobbies` varchar(100) NOT NULL,
  `textarea` varchar(255) NOT NULL,
  `deleted_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phone_data`
--

INSERT INTO `phone_data` (`id`, `name`, `email`, `password`, `birthday`, `file`, `operator`, `mobile`, `gender`, `hobbies`, `textarea`, `deleted_at`) VALUES
(1, 'yasinfaruk', 'yasin.faruk8585@gmail.com', '1234', '2017-01-02', 'steve-jobs.jpg', 'Banglalink', 1914686203, 'Male', 'Coding', 'Hi ,\r\nI am Mohammad Faruk.', '1453732324'),
(4, 'yasinfaruk', 'root', 'root', '0000-00-00', 'aptana.png', 'Robi', 1914686203, 'Male', 'Cricket , Football , Coding', 'hi', NULL),
(5, 'yasinfaruk', 'root', 'root', '2016-01-01', 'scare.jpg', 'Banglalink', 1914686203, 'Male', 'Coding', '', NULL),
(8, 'mohammad faruk', 'root', 'root', '0000-00-00', 'scare.jpg', 'select', 1914686203, 'Female', 'Cricket , Football', '', NULL),
(9, 'Rahim', 'root', 'root', '0000-00-00', 'steve-jobs.jpg', 'select', 0, 'Male', 'Cricket , Football', '', NULL),
(10, 'yf', 'root', 'root', '0000-00-00', '1453705593aptana.png', 'select', 0, 'Male', '', '', '1453733179'),
(11, 'faruk', 'root', 'root', '0000-00-00', '1453705617scare.jpg', 'select', 0, 'Male', '', '', '1453733178'),
(12, 'Soma', 'root', 'root', '0000-00-00', '1453705641scare.jpg', 'select', 0, 'Male', '', '', '1453733177');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phone_data`
--
ALTER TABLE `phone_data`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phone_data`
--
ALTER TABLE `phone_data`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

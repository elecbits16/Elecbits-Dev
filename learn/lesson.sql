-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2017 at 12:49 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testsite1`
--

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `lesson_id` varchar(255) DEFAULT NULL,
  `lesson_title` varchar(255) DEFAULT NULL,
  `lesson_youtube` varchar(255) DEFAULT NULL,
  `lesson_aim` text,
  `lesson_compo` text,
  `lesson_inst` text,
  `lesson_quiz_id` varchar(100) DEFAULT NULL,
  `points` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`lesson_id`, `lesson_title`, `lesson_youtube`, `lesson_aim`, `lesson_compo`, `lesson_inst`, `lesson_quiz_id`, `points`) VALUES
('LS1', 'Pre- Elecd', 'http://gaana.com/playlist/', '<p>Jitna tumko</p>', '<p>pataka guddi</p>', '<p>tumko jo paaya</p>', 'Q123', 1000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD UNIQUE KEY `lesson_id` (`lesson_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

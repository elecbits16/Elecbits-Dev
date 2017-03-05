-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2017 at 09:33 AM
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
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `quiz_id` varchar(255) DEFAULT NULL,
  `question_id1` varchar(255) DEFAULT NULL,
  `question1` text,
  `opt_A1` text,
  `opt_B1` text,
  `opt_C1` text,
  `opt_D1` text,
  `correct_opt1` text,
  `question_id4` varchar(455) DEFAULT NULL,
  `question4` text,
  `opt_A4` text,
  `opt_B4` text,
  `opt_C4` text,
  `opt_D4` text,
  `correct_opt4` text,
  `question_id3` varchar(355) DEFAULT NULL,
  `question3` text,
  `opt_A3` text,
  `opt_B3` text,
  `opt_C3` text,
  `opt_D3` text,
  `correct_opt3` text,
  `question_id2` varchar(255) DEFAULT NULL,
  `question2` text,
  `opt_A2` text,
  `opt_B2` text,
  `opt_C2` text,
  `opt_D2` text,
  `correct_opt2` text,
  `quiz_lesson_id` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quiz_id`, `question_id1`, `question1`, `opt_A1`, `opt_B1`, `opt_C1`, `opt_D1`, `correct_opt1`, `question_id4`, `question4`, `opt_A4`, `opt_B4`, `opt_C4`, `opt_D4`, `correct_opt4`, `question_id3`, `question3`, `opt_A3`, `opt_B3`, `opt_C3`, `opt_D3`, `correct_opt3`, `question_id2`, `question2`, `opt_A2`, `opt_B2`, `opt_C2`, `opt_D2`, `correct_opt2`, `quiz_lesson_id`) VALUES
('QZ24', '1', '<p>What is your name ?</p>', 'john', 'sue', 'lucy', 'adam', 'A', '4', '<p>what is cricket</p>', 'MSD', 'VIRAT', 'ABD', 'Kane', 'A', '3', '<p>What is bank</p>', 'Tyra', 'Naomi', 'Namia', 'Johhny', 'D', '2', '<p>What is your fav singer ?</p>', 'pitbull', 'katy', 'enrique', 'AKON', 'C', 'LS4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD UNIQUE KEY `quiz_id` (`quiz_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

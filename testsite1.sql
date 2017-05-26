-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2017 at 05:32 AM
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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `user_id` int(10) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`user_id`, `user_email`, `user_pass`) VALUES
(1, 'saurav.rav67@gmail.com', '678'),
(2, 'kp@gmail.com', '567');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) DEFAULT NULL,
  `ip_add` varchar(255) DEFAULT NULL,
  `qty` int(10) DEFAULT '1',
  `xq` int(10) DEFAULT NULL,
  `uv` int(10) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`, `xq`, `uv`, `id`) VALUES
(3, '::1', 1, 700, 700, 1),
(5, '::1', 1, 678, 678, 2),
(567, '::1', 1, NULL, 800, 3);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Android Project'),
(2, 'Arduino Project'),
(3, 'Artificial Intelligence'),
(4, 'Biomedical Projects'),
(5, 'Communication Projects'),
(8, 'General Electronics Project'),
(9, 'Green Projects'),
(67, 'keep calm'),
(11, 'Mobile Communication'),
(12, 'Radio Projects'),
(13, 'Raspberry Pi Projects'),
(14, 'Robotics Projeects'),
(15, 'Sensors Projects');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_ip` varchar(255) DEFAULT NULL,
  `customer_name` text,
  `customer_email` varchar(100) DEFAULT NULL,
  `customer_pass` varchar(100) DEFAULT NULL,
  `customer_country` text,
  `customer_city` text,
  `customer_contact` varchar(255) DEFAULT NULL,
  `customer_image` text,
  `customer_address` text,
  `custom_roll` varchar(255) DEFAULT NULL,
  `custom_univ` varchar(255) DEFAULT NULL,
  `custom_result` varchar(255) DEFAULT NULL,
  `offer_cat` varchar(255) DEFAULT NULL,
  `ddate` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_ip`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_image`, `customer_address`, `custom_roll`, `custom_univ`, `custom_result`, `offer_cat`, `ddate`) VALUES
(15, '::1', 'Sample', 'sample@gmail.com', '8989', 'India', 'Delhi', '89898', NULL, ',dshgkaqf', NULL, NULL, NULL, NULL, '0'),
(14, '::1', 'Saurav Kumar', 'abc@gmail.com', '787', 'India', 'Delhi', '8860394267', NULL, 'F-282 3rd floor , nanakpura                     ', '', '', '', '', ''),
(17, '::1', 'abc', 'kbc@gmail.com', 'lddhfw', NULL, NULL, '4597396', NULL, NULL, NULL, NULL, NULL, NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `c_report`
--

CREATE TABLE `c_report` (
  `order_id` varchar(256) DEFAULT NULL,
  `title_p` varchar(256) DEFAULT NULL,
  `hardware_cost` float DEFAULT NULL,
  `time_construct` float DEFAULT NULL,
  `extra_cost` float DEFAULT NULL,
  `time_to_deliver` float DEFAULT NULL,
  `profit` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c_report`
--

INSERT INTO `c_report` (`order_id`, `title_p`, `hardware_cost`, `time_construct`, `extra_cost`, `time_to_deliver`, `profit`) VALUES
('ELDIN080006', 'abhay', 100, 3, 50, 2, 9029.85);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_no` varchar(255) DEFAULT NULL,
  `c_name` varchar(255) DEFAULT NULL,
  `c_mail` varchar(255) DEFAULT NULL,
  `c_address` varchar(255) DEFAULT NULL,
  `c_phone` varchar(255) DEFAULT NULL,
  `items` varchar(255) DEFAULT NULL,
  `prices` varchar(255) DEFAULT NULL,
  `disc` int(11) DEFAULT NULL,
  `total` float DEFAULT NULL,
  `serial_no` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_no`, `c_name`, `c_mail`, `c_address`, `c_phone`, `items`, `prices`, `disc`, `total`, `serial_no`) VALUES
('ELDIN080006', 'Abhay', 'saurav.rav67@gmail.com', 'dil ', '8860394267', 'hear|gfrd||||||||', '898|8765|||||||||', 5, 9179.85, 1),
('ELCOD059019', 'Mohit Chhikara', 'mohitchhikara.08@gmail.com', ' ', '8053983617', 'Passive Infrared Sensor|Temprature Sensor LM35|Smoke Senor|LPG Sensor|GSM Module|Arduino Uno R3 (With Cable)||||', '150|65|155|155|999|475||||', 0, 1999, 2);

-- --------------------------------------------------------

--
-- Table structure for table `keep`
--

CREATE TABLE `keep` (
  `value` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keep`
--

INSERT INTO `keep` (`value`) VALUES
('5');

-- --------------------------------------------------------

--
-- Table structure for table `learn`
--

CREATE TABLE `learn` (
  `customer_id` int(10) NOT NULL,
  `customer_ip` varchar(255) DEFAULT NULL,
  `customer_name` text,
  `customer_email` varchar(100) DEFAULT NULL,
  `customer_pass` varchar(100) DEFAULT NULL,
  `customer_image` text,
  `customer_contact` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `learn`
--

INSERT INTO `learn` (`customer_id`, `customer_ip`, `customer_name`, `customer_email`, `customer_pass`, `customer_image`, `customer_contact`) VALUES
(15, '::1', 'Sample', 'sample@gmail.com', '8989', NULL, NULL),
(14, '::1', 'Saurav Kumar', 'abc@gmail.com', '787', NULL, '8860394267'),
(17, '::1', 'abc', 'kbc@gmail.com', 'lddhfw', NULL, NULL);

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
('LS4', 'Post_ElecD', 'https://www.youtube.com/embed/1MqqsbMsgBc', '<p>Shape of you</p>', '<p>In</p>', '<p>Kewl</p>', 'QZ34', 800);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(100) NOT NULL,
  `p_id` int(100) NOT NULL,
  `c_id` varchar(255) NOT NULL,
  `qty` int(100) DEFAULT NULL,
  `track_order` varchar(255) NOT NULL DEFAULT 'Getting Manufactured',
  `pxq` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `p_id`, `c_id`, `qty`, `track_order`, `pxq`) VALUES
(74, 5, 'abc@gmail.com', 5, 'Getting Manufactured', 3390),
(73, 567, 'abc@gmail.com', 1, 'Getting Manufactured', 800),
(72, 3, 'abc@gmail.com', 1, 'Getting Manufactured', 700);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) DEFAULT NULL,
  `product_cat1` text,
  `product_cat2` text,
  `product_cat3` text,
  `product_cat4` text,
  `product_title` varchar(255) DEFAULT NULL,
  `product_price` int(100) DEFAULT NULL,
  `product_diy_price` int(100) DEFAULT NULL,
  `product_desc` text,
  `product_keywords` text,
  `product_image` text,
  `product_doc` text,
  `product_block` text,
  `product_hs` text,
  `product_high` text,
  `product_where` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat1`, `product_cat2`, `product_cat3`, `product_cat4`, `product_title`, `product_price`, `product_diy_price`, `product_desc`, `product_keywords`, `product_image`, `product_doc`, `product_block`, `product_hs`, `product_high`, `product_where`) VALUES
(567, 'Radio Projects', 'Android Project', 'Sensors Projects', 'Mobile Communication', 'tech', 800, 300, '<p>Orange i</p>', 'color', '300x200.png', 'Elecbits_Synopsis.doc', '500.png', '<p>what</p>', '<p>do</p>', 'New_arrivals'),
(3, 'Arduino Project', 'Radio Projects', 'Raspberry Pi Projects', 'Wireless Projects', 'Rise', 700, 6000, '<p>1</p>', 'wish, 3rf', '3.png', NULL, NULL, '<p>3</p>', '<p class="MsoNormal" style="display: inline !important;"><span style="font-size: 10pt; font-family: Candara, sans-serif;">Cheap as compared to its competitors</span></p>\r\n<p class="MsoNormal"><span style="font-size: 10pt; font-family: Candara, sans-serif;">Uses Bluetooth Module</span></p>\r\n<p class="MsoNormal"><span style="font-size: 10pt; font-family: Candara, sans-serif;">Can be also used by using phone senor</span></p>\r\n<p class="MsoNormal"><span style="font-size: 10pt; font-family: Candara, sans-serif;">Uses Arduinos as the Controller boards</span></p>', 'New_arrivals'),
(5, 'Robotics Projeects', 'Control System Projects', 'Sensors Projects', 'Android Project', 'check', 678, 576, '<p>ndhfsek</p>', 'new', 'Capture.PNG', NULL, NULL, '', '', 'Trending_now');

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

-- --------------------------------------------------------

--
-- Table structure for table `software`
--

CREATE TABLE `software` (
  `soft_id` int(10) DEFAULT NULL,
  `soft_title` varchar(255) DEFAULT NULL,
  `soft_person_name` varchar(255) DEFAULT NULL,
  `soft_desc` varchar(255) DEFAULT NULL,
  `soft_coding` varchar(255) DEFAULT NULL,
  `soft_profile` varchar(255) DEFAULT NULL,
  `pic1` varchar(255) DEFAULT NULL,
  `output1` varchar(255) DEFAULT NULL,
  `output2` varchar(255) DEFAULT NULL,
  `output3` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `software`
--

INSERT INTO `software` (`soft_id`, `soft_title`, `soft_person_name`, `soft_desc`, `soft_coding`, `soft_profile`, `pic1`, `output1`, `output2`, `output3`) VALUES
(658, 'ngd', 'eyfgwe', '<p>,adhjf</p>', '<p>mdhfg</p>', 'http://gaana.com/playlist/gaana-dj-gaana-international-top-50', 'avatar.jpg', 'v5.jpg', 'http://gaana.com/playlist/gaana-dj-gaana-international-top-50', 'http://gaana.com/playlist/gaana-dj-gaana-international-top-50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD UNIQUE KEY `cat_id` (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`serial_no`);

--
-- Indexes for table `learn`
--
ALTER TABLE `learn`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD UNIQUE KEY `lesson_id` (`lesson_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD UNIQUE KEY `order_id` (`order_id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD UNIQUE KEY `quiz_id` (`quiz_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `serial_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `learn`
--
ALTER TABLE `learn`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

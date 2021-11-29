-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2020 at 08:18 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `Date` varchar(100) DEFAULT NULL,
  `In_time` time DEFAULT NULL,
  `Out_time` time DEFAULT '00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`id`, `user_id`, `Date`, `In_time`, `Out_time`) VALUES
(5, 'p1', '08/19/2020', '05:54:52', '11:27:22'),
(8, 'p1', '08/21/2020', '11:30:24', '11:30:29');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` int(11) NOT NULL,
  `catname` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `catname`) VALUES
(1, 'ARM'),
(2, 'CHEST'),
(3, 'BACK');

-- --------------------------------------------------------

--
-- Table structure for table `measurements`
--

CREATE TABLE `measurements` (
  `p_id` varchar(100) NOT NULL,
  `Blood` double DEFAULT NULL,
  `Pulse` double DEFAULT NULL,
  `Cholesterols` double DEFAULT NULL,
  `Weight` double DEFAULT NULL,
  `Chest` double DEFAULT NULL,
  `Arm` double DEFAULT NULL,
  `Waist` double DEFAULT NULL,
  `Thigh` double DEFAULT NULL,
  `Calf` double DEFAULT NULL,
  `date` varchar(100) NOT NULL,
  `Hip` double DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `measurements`
--

INSERT INTO `measurements` (`p_id`, `Blood`, `Pulse`, `Cholesterols`, `Weight`, `Chest`, `Arm`, `Waist`, `Thigh`, `Calf`, `date`, `Hip`, `id`) VALUES
('p1', 7, 9, 6, 4, 9, 3, 8, 4, 3, '2020-08-20', 7, 1),
('p1', 5, 6, 7, 8, 7, 6, 4, 3, 2, '2020-08-18', 5, 3),
('p1', 7, 8, 7, 8, 7, 8, 8, 7, 8, '2020-08-21', 7, 4);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `player_id` varchar(100) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `dlstatus` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `player_id`, `amount`, `date`, `status`, `dlstatus`) VALUES
(7, 'p1', 1500, '2020-08-20', 1, 0),
(8, 'p1', 1500, '2020-08-20', 1, 0),
(9, 'p2', 1500, '2020-08-10', 1, 0),
(10, 'p3', 1500, '2020-08-19', 1, 0),
(11, 'p4', 1500, '2020-08-19', 1, 0),
(12, NULL, 1500, NULL, 0, 0),
(13, 'root', 0, '2020-08-20', 1, 0),
(14, 'root', 0, '2020-08-20', 1, 0),
(15, 'root', 0, '2020-08-20', 1, 0),
(16, 'root', 0, '2020-08-20', 1, 0),
(17, 'root', 0, '2020-08-20', 1, 0),
(18, 'root', 0, '2020-08-20', 1, 0),
(19, 'root', 0, '2020-08-20', 1, 0),
(20, 'root', 0, '2020-08-20', 1, 0),
(21, 'root', 0, '2020-08-20', 1, 0),
(22, 'root', 0, '2020-08-20', 1, 0),
(23, 'root', 0, '2020-08-20', 1, 0),
(24, 'p1', 1500, '2020-08-20', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `id` int(11) NOT NULL,
  `plan` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `bdate` date DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `nic` varchar(50) DEFAULT NULL,
  `bgroup` varchar(100) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `weight` varchar(100) DEFAULT NULL,
  `about` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`id`, `plan`, `username`, `email`, `fname`, `lname`, `bdate`, `address`, `nic`, `bgroup`, `mobile`, `gender`, `weight`, `about`) VALUES
(2, 'Silver', 'p1', 'player1@gmail.com', 'Diltha', 'Liyanage', '2020-08-03', 'Kahawala', '96787654v', 'A', 766873650, 'Male', '6', NULL),
(3, 'Silver', 'p2', 'player2@gmail.com', 'Buddhi', 'Chanaka', '2022-07-17', 'Nabada', '966980613V', 'A-', 766873650, 'Male', '60-70', NULL),
(4, 'Silver', 'p3', 'player3@gmail.com', 'Kasun ', 'Madhawa', '2014-07-17', 'Gampaha', '962601804v', 'A', 766873623, 'Female', '30-40', NULL),
(5, 'Golden', 'p4', 'player4@gmail.com', 'Chathura', 'Lokuwithana', '2016-07-16', 'Horana', '956161383V', 'A', 766873622, 'Male', '30-40', NULL),
(6, 'Silver', 'p5', 'player1@gmail.com', 'sd', 's', '2018-06-16', 'k', 'k', 'A', 76, 'Male', '30-40', NULL),
(7, 'Silver', 'g', 'g@h.m', 'h', 'h', '2019-07-17', 'j', 'j', 'A', 7, 'Male', '30-40', NULL),
(8, 'Silver', 'h', 'h@h.l', 'h', 'h', '2019-07-17', 'hgh', 'hgh', 'A', 56, 'Male', '30-40', NULL),
(9, 'Silver', 'hjh', 'hjh@e', 'hjh', 'jhj', '2019-07-17', 'jhj', 'jhj', 'A', 676, 'Male', '30-40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `player_shedule`
--

CREATE TABLE `player_shedule` (
  `p_id` varchar(100) DEFAULT NULL,
  `shedule_name` varchar(200) DEFAULT NULL,
  `Day` varchar(100) DEFAULT NULL,
  `Res` varchar(200) DEFAULT NULL,
  `category` varchar(200) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player_shedule`
--

INSERT INTO `player_shedule` (`p_id`, `shedule_name`, `Day`, `Res`, `category`, `id`) VALUES
('p1', 'A2', 'day2', '8*4', NULL, 25),
('p1', 'A2', 'day3', NULL, NULL, 26),
('p1', 'C1', 'day3', NULL, NULL, 27),
('p1', 'C5', 'day1', '10*3', NULL, 28),
('p1', 'C5', 'day2', NULL, NULL, 29),
('p1', 'B1', 'day1', NULL, NULL, 30),
('p1', 'B1', 'day2', NULL, NULL, 31),
('p1', 'fffffffffffffffffff', 'day1', NULL, NULL, 32);

-- --------------------------------------------------------

--
-- Table structure for table `sells`
--

CREATE TABLE `sells` (
  `item_id` varchar(100) DEFAULT NULL,
  `Amount` int(11) DEFAULT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sells`
--

INSERT INTO `sells` (`item_id`, `Amount`, `date`) VALUES
('suppliment', 200, '2020-08-19'),
('suppliment', 100, '2020-08-20'),
('suppliment', 111, '2020-08-21');

-- --------------------------------------------------------

--
-- Table structure for table `sells1`
--

CREATE TABLE `sells1` (
  `item_id` varchar(100) DEFAULT NULL,
  `Amount` int(11) DEFAULT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sells1`
--

INSERT INTO `sells1` (`item_id`, `Amount`, `date`) VALUES
('bar', 200, '2020-08-20');

-- --------------------------------------------------------

--
-- Table structure for table `shedule`
--

CREATE TABLE `shedule` (
  `sheduleid` int(11) NOT NULL,
  `categoryid` int(11) DEFAULT NULL,
  `shedule_name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shedule`
--

INSERT INTO `shedule` (`sheduleid`, `categoryid`, `shedule_name`) VALUES
(2, 1, 'A2'),
(3, 1, 'A3'),
(4, 1, 'A4'),
(5, 2, 'C1'),
(6, 2, 'C2'),
(7, 2, 'C3'),
(8, 2, 'C4'),
(9, 2, 'C5'),
(10, 1, 'A5'),
(11, 3, 'B1'),
(12, 1, 'fffffffffffffffffff');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(12) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `nic` varchar(100) DEFAULT NULL,
  `bdate` date DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` varchar(6) NOT NULL,
  `role_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `email`, `phone`, `nic`, `bdate`, `gender`, `address`, `password`, `role`, `role_id`) VALUES
('', '', '', '', NULL, NULL, NULL, NULL, NULL, 'd41d8cd98f00b204e9800998ecf8427e', '', 3),
('admin', 'Admin', 'User', 'admin@admin.com', 710000001, '900000001v', '1980-05-05', 'male', 'address1', '0192023a7bbd73250516f069df18b500', 'admin', 1),
('attendence', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'f1668e05384f7b1feec922e968a65233', 'attend', 4),
('coach', 'Coach', 'User', 'coach@coach.com', 710000002, '900000002v', '1979-12-09', 'male', 'address2', '94f3b3a16d8ce064c808b16bee5003c5', 'coach', 2),
('g', 'h', 'h', 'g@h.m', 7, 'j', '2019-07-17', 'Male', 'j', '81dc9bdb52d04dc20036dbd8313ed055', 'player', 3),
('h', 'h', 'h', 'h@h.l', 56, 'hgh', '2019-07-17', 'Male', 'hgh', '81dc9bdb52d04dc20036dbd8313ed055', 'player', 3),
('hjh', 'hjh', 'jhj', 'hjh@e', 676, 'jhj', '2019-07-17', 'Male', 'jhj', '81dc9bdb52d04dc20036dbd8313ed055', 'player', 3),
('p1', 'Diltha', 'Liyanage', 'player1@gmail.com', 766873650, '96787654v', '2020-08-03', 'Male', 'Kahawala', '81dc9bdb52d04dc20036dbd8313ed055', 'player', 3),
('p2', 'Buddhi', 'Chanaka', 'player2@gmail.com', 766873650, '966980613V', '2022-07-17', 'Male', 'Nabada', '81dc9bdb52d04dc20036dbd8313ed055', 'player', 3),
('p3', 'Kasun ', 'Madhawa', 'player3@gmail.com', 766873623, '962601804v', '2014-07-17', 'Female', 'Gampaha', '81dc9bdb52d04dc20036dbd8313ed055', 'player', 3),
('p4', 'Chathura', 'Lokuwithana', 'player4@gmail.com', 766873622, '956161383V', '2016-07-16', 'Male', 'Horana', '81dc9bdb52d04dc20036dbd8313ed055', 'player', 3),
('p5', 'sd', 's', 'player1@gmail.com', 76, 'k', '2018-06-16', 'Male', 'k', '81dc9bdb52d04dc20036dbd8313ed055', 'player', 3),
('player', 'Player', 'User', 'player@player.com', 710000003, '900000003', '1990-08-11', 'male', 'address3', '46bf36a7193438f81fccc9c4bcc8343e', 'player', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `measurements`
--
ALTER TABLE `measurements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `player_shedule`
--
ALTER TABLE `player_shedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sells`
--
ALTER TABLE `sells`
  ADD PRIMARY KEY (`date`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `sells1`
--
ALTER TABLE `sells1`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `shedule`
--
ALTER TABLE `shedule`
  ADD PRIMARY KEY (`sheduleid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `measurements`
--
ALTER TABLE `measurements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `player_shedule`
--
ALTER TABLE `player_shedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `shedule`
--
ALTER TABLE `shedule`
  MODIFY `sheduleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

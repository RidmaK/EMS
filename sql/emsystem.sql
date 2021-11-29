-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2020 at 11:01 AM
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
-- Database: `emsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `student_id` varchar(100) DEFAULT NULL,
  `cource` varchar(100) DEFAULT NULL,
  `student_name` varchar(100) DEFAULT NULL,
  `student_surname` varchar(100) DEFAULT NULL,
  `NIC` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telephone_no` int(11) DEFAULT NULL,
  `mobile_no` int(11) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `ol` varchar(100) NOT NULL DEFAULT 'No',
  `al` varchar(100) NOT NULL DEFAULT 'No',
  `ielts` varchar(100) NOT NULL DEFAULT 'No',
  `servce_letter` varchar(100) NOT NULL DEFAULT 'No',
  `file` varchar(1000) DEFAULT NULL,
  `remarks` varchar(100) DEFAULT NULL,
  `apdate` varchar(100) DEFAULT NULL,
  `apfile` varchar(1000) DEFAULT NULL,
  `offerdate` varchar(100) DEFAULT NULL,
  `semester` varchar(200) DEFAULT NULL,
  `intakedate` varchar(100) DEFAULT NULL,
  `offerfile` varchar(1000) DEFAULT NULL,
  `date_added` date NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `received_date` varchar(100) DEFAULT NULL,
  `d_co` varchar(100) DEFAULT NULL,
  `a_co` varchar(100) DEFAULT NULL,
  `o_co` varchar(100) DEFAULT NULL,
  `i_co` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `student_id`, `cource`, `student_name`, `student_surname`, `NIC`, `email`, `telephone_no`, `mobile_no`, `address`, `city`, `dob`, `gender`, `ol`, `al`, `ielts`, `servce_letter`, `file`, `remarks`, `apdate`, `apfile`, `offerdate`, `semester`, `intakedate`, `offerfile`, `date_added`, `status`, `received_date`, `d_co`, `a_co`, `o_co`, `i_co`) VALUES
(2, 'student1', 'Physical Science', 'Ridma Kanchana', 'Athukorala', '961771803v', 'Ridma@gmail.com', 344900379, 716309982, 'No,175/2,Dewala Road,Mahena,Horana', 'Horana', '2020-09-16', 'Select Gender', 'Yes', 'Yes', 'Yes', 'Yes', 'table.pdf', 'All submited', '2020-09-08', 'app.pdf', '2020-09-04', '1 st year 1st semester', '2020-09-16', 'mycvedited.pdf', '2020-09-02', 1, '2020-09-04', 'kanchana', 'counselar', 'counselar', 'counselar'),
(3, 'student2', 'Engineering', 'Ashen Udithamal', 'Perera', '9567876533v', 'ashen@gmail.com', 344900379, 765679234, 'No,222/2,Dewala Road,Mahena,Kottawa', 'Kottawa', '2020-09-23', 'Select Gender', 'Yes', 'Yes', 'Yes', 'Yes', 'table(1)(1).pdf', 'All submited', '2020-09-04', 'table(14).pdf', '2020-09-04', '1 st year 1st semester', '2020-09-16', 'table(15).pdf', '2020-08-02', 1, '2020-09-04', 'kanchana', 'kanchana', 'kanchana', 'counselar'),
(4, 'student3', 'Physical Science', 'Isuru Dulanjana', 'Athukorala', '965789876v', 'isuru@gmail.com', 344900379, 765679234, 'No,175/2,Dewala Road,Mahena,Horana', 'Mahena', '2020-09-23', 'male', 'Yes', 'Yes', '', '', 'table(12).pdf', '', '2020-09-04', 'table(14).pdf', '2020-09-15', '2 st year 2st semester', '2020-09-24', 'table(17).pdf', '2020-08-28', 1, '2020-09-04', 'counselar', 'counselar', 'counselar', 'counselar'),
(7, 'student4', 'Physical Science', 'Dilitha Theekshana', 'Liyanage', '967876783v', 'dilitha@gmail.com', 344900987, 765678322, 'Kahawala,Padukka', 'Kahawala', '2020-09-23', 'male', 'Yes', 'Yes', 'Yes', 'Yes', '', '', NULL, NULL, NULL, NULL, NULL, NULL, '2020-09-03', 1, '2020-09-03', NULL, NULL, NULL, 'counselar'),
(8, 'student5', 'Physical Science', 'Pabasara Kavindu', 'Athukorala', '9876545678v', 'pabasara@gmail.com', 987657899, 765434566, 'No,175/2,Dewala Road,Mahena,Horana', 'Horana', '2020-09-24', 'male', 'No', 'No', 'No', 'Yes', '', 'Select', NULL, NULL, NULL, NULL, NULL, NULL, '2020-09-03', 1, '2020-09-03', NULL, NULL, NULL, 'counselar'),
(9, 'student6', 'Biological Science', 'Buddi Chanaka', 'Samarasinghe', '9765787666v', 'buddi@gmail.com', 78656787, 32278987, 'Nabada,Mathugama', 'Nabada', '2020-09-09', 'male', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-09-03', 1, NULL, NULL, NULL, NULL, 'counselar'),
(10, 'student7', 'Physical Science', 'Chulana Madushan', 'Perera', '976543567v', 'chulana@gmail.com', 765434568, 344488899, 'Moronthuduwa,Horana', 'Horana', '2020-09-08', 'male', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-09-03', 1, NULL, NULL, NULL, NULL, 'kanchana'),
(12, 'student8', 'Physical Science', 'Kasun Madhawa', 'Sandaruwan', '9567876533v', 'kasun@gmail.com', 344900379, 765434566, 'No,222/2,Dewala Road,Mahena,Kottawa', 'Kottawa', '2020-09-22', 'male', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-09-04', 1, NULL, NULL, NULL, NULL, 'kanchana'),
(13, 'student9', 'Select Cource', 'Gihan Madushan', 'Ranasinghe', '967876783v', 'gihan@gmail.com', 344900379, 765679234, 'Nabada,Mathugama', 'Horana', '2020-09-08', 'male', 'No', 'No', 'No', 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-09-04', 1, NULL, NULL, NULL, NULL, 'kanchana');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_type` varchar(100) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `role_name` varchar(100) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_type`, `full_name`, `user_name`, `password`, `role_id`, `role_name`, `status`) VALUES
(1, 'admin', 'Ridma Kanchana', 'admin', 'admin123', 1, 'administrator', 1),
(2, 'administrator', 'ashen', 'ashen', 'ashen123', 1, 'administrator', 1),
(3, 'counselar', 'tilla', 'tilla', 'tilla123', 2, 'counselar', 0),
(4, 'admin', 'q', 'q', 'q', 1, 'administrator', 0),
(5, 'counselar', 'Ashen Udithamal', 'counselar', 'c123', 2, 'counselar', 1),
(6, 'counselar', 'ridma ', 'kanchana', 'ridma123', 2, 'counselar', 1),
(7, 'counselar', 'j', 'j', 'j', 2, 'counselar', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

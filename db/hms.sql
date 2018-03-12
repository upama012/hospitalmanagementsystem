-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2018 at 11:43 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.0.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `account_name` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `doctors_fee` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `account_name`, `type`, `doctors_fee`, `date`, `description`) VALUES
(1, 'ayesha', 'purna', '11112', '2018-03-12', '111axhcbsduguyvsjhbvshcb sjhcvusygv'),
(2, 'ayesha', 'purna', '11112', '2018-03-12', '111axhcbsduguyvsjhbvshcb sjhcvusygv'),
(3, 'ayesha', 'purna', '11112', '2018-03-12', '111axhcbsduguyvsjhbvshcb sjhcvusygv');

-- --------------------------------------------------------

--
-- Table structure for table `appoin`
--

CREATE TABLE `appoin` (
  `id` int(11) NOT NULL,
  `patient_name` varchar(30) NOT NULL,
  `doctor` varchar(30) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `contact` varchar(11) NOT NULL,
  `visible` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appoin`
--

INSERT INTO `appoin` (`id`, `patient_name`, `doctor`, `gender`, `time`, `date`, `contact`, `visible`) VALUES
(1, 'ayesha', 'heart', 'female', '10:30:00', '2018-03-14', '09875432', 1),
(2, 'ayerin', 'purna', 'female', '10:30:00', '2018-03-15', '01725932105', 1),
(3, 'ayesha', 'sarwar', 'female', '10:30:00', '2018-02-20', '09875432', 0),
(4, 'ayesha', 'purna', 'female', '10:30:00', '2018-03-03', '1111111111', 0),
(5, 'ayesha', 'suman', 'female', '10:30:00', '2018-03-02', '01725932105', 0),
(6, 'ayesha', 'purna', 'female', '00:00:10', '2018-03-16', '1111111111', 0),
(7, 'suman', 'purna', 'female', '10:30:00', '2018-03-08', '01725932105', 1),
(8, 'koli', 'purna', 'female', '10:30:00', '2018-03-10', '09875432', 1),
(9, 'suman', 'sarwar', 'female', '10:30:00', '2018-03-08', '01725932105', 1),
(10, 'ayesha', 'purna', 'female', '10:30:00', '2018-03-10', '01725932105', 1),
(11, 'amatun', 'purna', 'female', '10:30:00', '2018-03-04', '01725932105', 1),
(12, 'suman', 'sarwar', 'female', '10:30:00', '2018-03-08', '01725932105', 1),
(13, 'ayesha', 'purna', 'female', '10:30:00', '2018-03-20', '01725932105', 0),
(14, 'zss', 'ss', 'ssssss', '10:30:00', '2018-03-02', '1111111111', 0),
(15, 'cjhsdgasiyd', ' csj', ' cgsf', '00:00:00', '2018-03-03', 'cvgsfdwe', 0),
(16, 'dbcjkdhifguwsdbviu', 'v skghs', 's xjkcuw', '00:00:00', '2018-03-07', '0192929', 0),
(17, 'ssssss', 'ssss', 'ssssss', '00:00:00', '2018-02-14', '01725932105', 0),
(18, ' xjzj ', ' zjck ', ' cjzk', '00:00:00', '2018-03-14', '92e83473t57', 0),
(19, ' xjzj ', ' zjck ', ' cjzk', '00:00:00', '2018-03-14', '92e83473t57', 0),
(20, 'adib', 'asad', 'male', '00:00:00', '2018-03-01', '29524956247', 0),
(21, 'adib', 'asad', 'male', '00:00:00', '2018-03-01', '29524956247', 0),
(22, 'adib', 'asad', 'male', '00:00:00', '2018-03-01', '29524956247', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `visible` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `comment`, `date`, `visible`) VALUES
(1, 'aidb', 'adib@gmail.com', 'snjsnfvmkcndinv mdtkigvnmkdjfignkvjrkt', '2018-03-19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `doctor_name` varchar(30) NOT NULL,
  `specialzation` varchar(30) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `visible` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `doctor_name`, `specialzation`, `time`, `date`, `visible`) VALUES
(1, 'purn', '  gynocologist', '10:30:00', '1970-01-01', 0),
(2, 'asha', '  heart', '10:30:00', '2018-02-27', 0),
(3, 'sarwar', 'heart', '10:30:00', '2018-03-19', 1),
(4, 'Ayerin', '  Heart', '00:00:10', '2018-03-13', 1),
(5, 'purna', 'heart', '11:45:00', '2018-03-08', 1),
(6, 'ayerin', 'gynocologist', '00:00:11', '2018-03-23', 1),
(7, 'purna', 'heart', '00:00:10', '2018-03-08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `noticeboard`
--

CREATE TABLE `noticeboard` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` varchar(300) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noticeboard`
--

INSERT INTO `noticeboard` (`id`, `title`, `description`, `start_date`, `end_date`) VALUES
(1, 'ayesha', 'purna', '2018-02-20', '2018-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `patient_name` varchar(30) NOT NULL,
  `doctor_name` varchar(30) NOT NULL,
  `visible` int(11) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `gender` varchar(11) NOT NULL,
  `address` varchar(30) NOT NULL,
  `location` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `patient_name`, `doctor_name`, `visible`, `time`, `date`, `gender`, `address`, `location`) VALUES
(1, 'adib', 'suman', 1, '10:30:00', '2018-02-03', 'female', 'dinajpur,Bangladesh', ''),
(2, 'adib', 'suman', 0, '10:30:00', '2018-02-03', 'female', 'dinajpur,Bangladesh', ''),
(3, 'sarwar', 'suman', 1, '10:30:00', '2018-03-02', 'female', 'dinajpur,Bangladesh', ''),
(4, 'sarwar', 'aysha', 1, '10:30:00', '2018-03-02', 'female', 'dinajpur,Bangladesh', ''),
(5, 'adib', 'suman', 1, '10:30:00', '2018-03-07', 'male', 'dinajpur,Bangladesh', '');

-- --------------------------------------------------------

--
-- Table structure for table `patient_info`
--

CREATE TABLE `patient_info` (
  `id` int(11) NOT NULL,
  `patient_name` varchar(30) NOT NULL,
  `age` varchar(30) NOT NULL,
  `visible` int(11) NOT NULL,
  `visiting_date` date NOT NULL,
  `problem_test` varchar(30) NOT NULL,
  `test_digise` varchar(30) NOT NULL,
  `next_visiting_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_info`
--

INSERT INTO `patient_info` (`id`, `patient_name`, `age`, `visible`, `visiting_date`, `problem_test`, `test_digise`, `next_visiting_date`) VALUES
(1, 'adib', '12', 1, '2018-02-20', 'ffffff', '', '0000-00-00'),
(2, 'sarwar', '12', 1, '2018-02-27', 's s', 'sss', '0000-00-00'),
(3, 'sarwar', '12', 1, '2018-02-27', 's s', 'sss', '0000-00-00'),
(4, 'sarwar', '12', 1, '2018-02-20', 'ffffff', 'sss', '0000-00-00'),
(5, 'adib', '12', 1, '2018-02-28', 'ffffff', 'sss', '0000-00-00'),
(6, 'adib', '12', 1, '2018-02-28', 'ffffff', 'sss', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `visible` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `first_name`, `last_name`, `email`, `login`, `password`, `visible`) VALUES
(5, 'amatun', 'aysha', 'amatunaysha@gmail.com', 'aysha', '1234', 1),
(6, 'ayerin', 'neshat', 'ayerinneshat2@gmail.com', 'asha', '1234', 0);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `doctor_name` varchar(30) NOT NULL,
  `specialzation` varchar(30) NOT NULL,
  `available_days` varchar(30) NOT NULL,
  `available_time` time NOT NULL,
  `patient_fees` varchar(30) NOT NULL,
  `visible` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `doctor_name`, `specialzation`, `available_days`, `available_time`, `patient_fees`, `visible`) VALUES
(1, 'korim', 'kkkkkk', '03/01/2018', '838:59:59', 'mon day', 0),
(2, 'Ayerin', 'Heart', '03/13/2018', '10:30:00', '150', 0),
(3, 'koli', 'koli', '03/09/2018', '00:00:00', 'aaaaaa', 0),
(4, 'lllllllllllllll', 'kkkkkkkkkkkkk', 'tuesday', '00:00:00', '1111', 1),
(5, 'purna', 'heart', '03/16/2018', '10:30:00', '33333333', 1),
(6, 'purna', 'heart', '03/16/2018', '10:30:00', '33333333', 0),
(7, 'purna', 'heart', '03/15/2018', '10:30:00', '111111', 1),
(8, 'purna', 'aysha', '03/07/2018', '10:30:00', '1111', 1),
(9, 'purna', 'aysha', '03/07/2018', '10:30:00', '1111', 1),
(10, 'purna', 'heart', '03/14/2018', '10:30:00', '33333333', 1),
(11, 'purna', 'heart', '03/09/2018', '10:30:00', '33333333', 1),
(12, 'purna', 'heart', '03/09/2018', '10:30:00', '33333333', 1),
(13, 'purna', 'heart', '03/09/2018', '00:00:10', '1111', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image`
--

CREATE TABLE `tbl_image` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `image_location` varchar(30) NOT NULL,
  `visible` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_image`
--

INSERT INTO `tbl_image` (`id`, `first_name`, `last_name`, `image_location`, `visible`, `email`, `mobile`, `address`) VALUES
(11, 'amatun', 'aysha', 'IMG_20171124_114354.jpg', 1, 'amatunaysha@gmail.com', '', '  qqqqqqqqqqqqqqqqqqqqqq'),
(12, 'amatun', 'aysha', 'IMG_20171124_114354.jpg', 1, 'amatunaysha@gmail.com', '01725932105', '  qqqqqqqqqqqqqqqqqqqqqq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appoin`
--
ALTER TABLE `appoin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticeboard`
--
ALTER TABLE `noticeboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_info`
--
ALTER TABLE `patient_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_image`
--
ALTER TABLE `tbl_image`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `appoin`
--
ALTER TABLE `appoin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `noticeboard`
--
ALTER TABLE `noticeboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patient_info`
--
ALTER TABLE `patient_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_image`
--
ALTER TABLE `tbl_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

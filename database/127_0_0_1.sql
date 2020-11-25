-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2020 at 01:48 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_project`
--
CREATE DATABASE IF NOT EXISTS `student_project` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `student_project`;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(5) NOT NULL,
  `Roll` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `studentname` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `Roll`, `name`, `email`, `studentname`, `password`, `photo`, `status`, `datetime`) VALUES
(1, 1810021, 'S.M. Faizul Islam Fair', 'faizul@gmail.com', 'faizulece18', 'f638f4354ff089323d1a5f78fd8f63ca', '', 'active', '2020-11-11 15:55:04'),
(2, 1810022, 'Md. Shahriar Sajid', 'sajid@gmail.com', 'sajid', '30220cfd902d347400efcfef5ca9d655', '', 'active', '2020-11-24 13:26:48');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll` int(7) NOT NULL,
  `class` varchar(8) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pcontact` varchar(11) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `name`, `roll`, `class`, `city`, `pcontact`, `photo`, `datetime`) VALUES
(1, 'S.M. Faizul Islam Fair', 1810021, '2nd', 'Rajshahi', '01715577668', '1810021.jpg', '2020-10-01 00:13:06'),
(2, 'MD. Turag Islam', 1810020, '2nd', 'Dhaka', '01556418446', '1810020.jpg', '2020-10-01 00:14:32'),
(3, 'Md. Shahriar Sajid', 1810022, '2nd', 'Dhaka', '01715547888', '1810022.jpg', '2020-10-01 00:16:17'),
(4, 'Munem Shahriar', 1810008, '2nd', 'Rangpur', '01315748965', '1810008.jpg', '2020-10-01 00:24:13'),
(5, 'Roxy Sarker', 1810040, '2nd', 'Dhaka', '01556309776', '1810040.jpg', '2020-10-01 00:25:24'),
(6, 'Rabbi Hasan', 1810014, '2nd', 'Sirajganj', '01715577555', '1810014.jpg', '2020-10-01 00:26:21'),
(7, 'Masum Ahmed', 1810009, '2nd', 'Comilla', '01556309775', '1810009.jpg', '2020-10-01 00:27:12'),
(8, 'Hasan Faruq', 1810065, '2nd', 'Rajshahi', '01715555555', '1810065.jpg', '2020-11-08 12:56:25');

-- --------------------------------------------------------

--
-- Table structure for table `student_marks1`
--

CREATE TABLE `student_marks1` (
  `Roll` int(11) NOT NULL,
  `Electrical_Machines` int(11) NOT NULL,
  `Data_Structure_&_Algorithms` int(11) NOT NULL,
  `Digital_Techniques` int(11) NOT NULL,
  `Mathematics` int(11) NOT NULL,
  `Chemistry` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_marks1`
--

INSERT INTO `student_marks1` (`Roll`, `Electrical_Machines`, `Data_Structure_&_Algorithms`, `Digital_Techniques`, `Mathematics`, `Chemistry`) VALUES
(1810016, 10, 12, 10, 10, 10),
(1810017, 20, 20, 20, 20, 20),
(1810021, 10, 10, 10, 10, 15),
(1810022, 20, 20, 20, 20, 20),
(1810027, 15, 20, 20, 20, 20),
(1810051, 15, 15, 15, 15, 15),
(1810060, 14, 14, 14, 14, 14);

-- --------------------------------------------------------

--
-- Table structure for table `student_marks2`
--

CREATE TABLE `student_marks2` (
  `Roll` int(11) NOT NULL,
  `Electrical_Machines` int(11) NOT NULL,
  `Data_Structure_&_Algorithms` int(11) NOT NULL,
  `Digital_Techniques` int(11) NOT NULL,
  `Mathematics` int(11) NOT NULL,
  `Chemistry` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_marks2`
--

INSERT INTO `student_marks2` (`Roll`, `Electrical_Machines`, `Data_Structure_&_Algorithms`, `Digital_Techniques`, `Mathematics`, `Chemistry`) VALUES
(1810021, 10, 12, 10, 10, 10),
(1810022, 15, 15, 15, 15, 15),
(1810024, 15, 15, 15, 15, 15),
(1810025, 12, 12, 12, 12, 12);

-- --------------------------------------------------------

--
-- Table structure for table `student_marks3`
--

CREATE TABLE `student_marks3` (
  `Roll` int(11) NOT NULL,
  `Electrical_Machines` int(11) NOT NULL,
  `Data_Structure_&_Algorithms` int(11) NOT NULL,
  `Digital_Techniques` int(11) NOT NULL,
  `Mathematics` int(11) NOT NULL,
  `Chemistry` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_marks3`
--

INSERT INTO `student_marks3` (`Roll`, `Electrical_Machines`, `Data_Structure_&_Algorithms`, `Digital_Techniques`, `Mathematics`, `Chemistry`) VALUES
(1810021, 10, 10, 12, 10, 10),
(1810022, 15, 15, 15, 15, 15);

-- --------------------------------------------------------

--
-- Table structure for table `student_marks4`
--

CREATE TABLE `student_marks4` (
  `Roll` int(11) NOT NULL,
  `Electrical_Machines` int(11) NOT NULL,
  `Data_Structure_&_Algorithms` int(11) NOT NULL,
  `Digital_Techniques` int(11) NOT NULL,
  `Mathematics` int(11) NOT NULL,
  `Chemistry` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_marks4`
--

INSERT INTO `student_marks4` (`Roll`, `Electrical_Machines`, `Data_Structure_&_Algorithms`, `Digital_Techniques`, `Mathematics`, `Chemistry`) VALUES
(1810021, 10, 10, 10, 15, 10),
(1810022, 15, 15, 15, 15, 15);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `teachername` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `email`, `teachername`, `password`, `photo`, `status`, `datetime`) VALUES
(1, 'Teacher 1', 'teacher@gmail.com', 'teacher1', '65cff42757952893f25858c3d497202b', '', 'active', '2020-11-11 14:53:33'),
(2, 'Hasan', 'hasan@gmail.com', 'hasan', 'e807f1fcf82d132f9bb018ca6738a19f', '', 'active', '2020-11-24 12:53:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `photo`, `status`, `datetime`) VALUES
(1, 'S.M. Faizul Islam Fair', 'faizulislamfair@gmail.com', 'faizulece18', 'f638f4354ff089323d1a5f78fd8f63ca', 'faizulece18.jpg', 'active', '2020-09-25 06:58:10'),
(9, '  MD. Turag Islam', 't@gmail.com', 'turagece18', 'a1b46d8a752d09f81160b704b2c846fd', '  MD. Turag Islam.jpg', 'active', '2020-10-27 16:17:16'),
(10, 'hasan', 'hasan@yahoo.com', 'Hasan Faruq', 'd814aab555fd5b99bfae1df0494bc79b', 'Hasan Faruq.jpg', 'inactive', '2020-11-08 12:51:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `studentname` (`studentname`),
  ADD UNIQUE KEY `Roll` (`Roll`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`roll`);

--
-- Indexes for table `student_marks1`
--
ALTER TABLE `student_marks1`
  ADD PRIMARY KEY (`Roll`);

--
-- Indexes for table `student_marks2`
--
ALTER TABLE `student_marks2`
  ADD PRIMARY KEY (`Roll`);

--
-- Indexes for table `student_marks3`
--
ALTER TABLE `student_marks3`
  ADD PRIMARY KEY (`Roll`);

--
-- Indexes for table `student_marks4`
--
ALTER TABLE `student_marks4`
  ADD PRIMARY KEY (`Roll`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teachername` (`teachername`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

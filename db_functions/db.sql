-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 07, 2018 at 02:11 AM
-- Server version: 5.6.33
-- PHP Version: 5.6.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `tutoring_mgmt_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `session_id_fk` int(11) DEFAULT NULL,
  `student_id_fk` int(11) DEFAULT NULL,
  `absent` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `bill_id` int(11) NOT NULL,
  `student_id_fk` int(11) DEFAULT NULL,
  `class_id_fk` int(11) DEFAULT NULL,
  `amount` decimal(10,0) DEFAULT NULL,
  `paid` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`bill_id`, `student_id_fk`, `class_id_fk`, `amount`, `paid`) VALUES
(2, 4, 1, '100', 0),
(3, 1, 2, '100', 0),
(4, 2, 1, '100', 0),
(5, 2, 1, '100', 0),
(6, 3, 4, '100', 0),
(7, 3, 1, '100', 0);

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(255) NOT NULL DEFAULT '',
  `level` varchar(8) NOT NULL,
  `class_price` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_id`, `class_name`, `level`, `class_price`) VALUES
(1, 'English', '1', '100'),
(2, 'English ', '2', '100'),
(3, 'English', '3', '100'),
(4, 'Math', '1', '100'),
(5, 'Math', '2', '100'),
(6, 'Math', '3', '100'),
(7, 'Writing', '1', '100'),
(8, 'Writing', '2', '100'),
(9, 'Writing', '3', '100'),
(10, 'SAT', 'Saturday', '100'),
(11, 'SAT', 'Sunday', '100'),
(12, 'PSAT', 'Saturday', '100'),
(13, 'PSAT', 'Sunday', '100'),
(14, 'SHSAT', 'Saturday', '100'),
(15, 'SHSAT', 'Sunday', '100');

-- --------------------------------------------------------

--
-- Table structure for table `class_session`
--

CREATE TABLE `class_session` (
  `student_id_fk` int(11) DEFAULT NULL,
  `tutor_id_fk` int(11) DEFAULT NULL,
  `class_id_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `class_session`
--

INSERT INTO `class_session` (`student_id_fk`, `tutor_id_fk`, `class_id_fk`) VALUES
(2, NULL, 1),
(5, NULL, 4),
(5, NULL, 8),
(3, NULL, 4),
(5, NULL, 9),
(1, NULL, 1),
(7, NULL, 1),
(7, NULL, 4),
(7, NULL, 4),
(1, NULL, 4),
(1, NULL, 4),
(4, NULL, 6),
(4, NULL, 6),
(2, NULL, 7),
(2, NULL, 7),
(2, NULL, 4),
(2, NULL, 4),
(4, NULL, 8),
(4, NULL, 8),
(2, NULL, 7),
(2, NULL, 7),
(2, NULL, 1),
(2, NULL, 1),
(1, NULL, 2),
(1, NULL, 2),
(2, NULL, 1),
(2, NULL, 1),
(2, NULL, 1),
(2, NULL, 1),
(3, NULL, 4),
(3, NULL, 4),
(3, NULL, 1),
(3, NULL, 1),
(3, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gets_lunch` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `firstname`, `lastname`, `email`, `gets_lunch`) VALUES
(1, 'Edward', 'Elric', 'ed@aol.com', 1),
(2, 'Steve', 'Rogers', 'cap@aol.com', 0),
(3, 'John', 'Doe', 'jon@gmail.com', 0),
(4, 'John', 'Doe', 'jon@gmail.com', 0),
(5, 'John', 'Doe', 'jon@gmail.com', 0),
(6, 'Julissa', 'Nap', 'julienap@yahoo.com', 0),
(7, 'Julissa', 'Nap', 'julienap@yahoo.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `tutor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `location` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` char(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `location`, `type`, `username`, `password`) VALUES
(2, 'Julissa', 'Nap', 'brooklyn', 'admin', 'julienap', 'd46d2ea9aa8c18b89a0aa9b300110d8f7d4e54b6'),
(3, 'jane ', 'doe', 'location2', 'manager', '', ''),
(4, 'Von ', 'Hohenheim', 'location1', 'employee', '', ''),
(5, 'Alphonse ', 'Elric', 'location2', 'manager', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD KEY `session_id_fk` (`session_id_fk`),
  ADD KEY `student_id_fk` (`student_id_fk`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `student_id_fk` (`student_id_fk`),
  ADD KEY `class_id_fk` (`class_id_fk`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `class_session`
--
ALTER TABLE `class_session`
  ADD KEY `student_id_fk` (`student_id_fk`),
  ADD KEY `tutor_id_fk` (`tutor_id_fk`),
  ADD KEY `class_id_fk` (`class_id_fk`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`tutor_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tutor`
--
ALTER TABLE `tutor`
  MODIFY `tutor_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`student_id_fk`) REFERENCES `student` (`student_id`);

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`student_id_fk`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `bills_ibfk_2` FOREIGN KEY (`class_id_fk`) REFERENCES `classes` (`class_id`);

--
-- Constraints for table `class_session`
--
ALTER TABLE `class_session`
  ADD CONSTRAINT `class_session_ibfk_1` FOREIGN KEY (`student_id_fk`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `class_session_ibfk_2` FOREIGN KEY (`tutor_id_fk`) REFERENCES `tutor` (`tutor_id`),
  ADD CONSTRAINT `class_session_ibfk_3` FOREIGN KEY (`class_id_fk`) REFERENCES `classes` (`class_id`);

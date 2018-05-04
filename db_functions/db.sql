-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 04, 2018 at 09:10 PM
-- Server version: 5.6.33
-- PHP Version: 5.6.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `tutoring_mgmt_sys`
--

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
(3, NULL, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_session`
--
ALTER TABLE `class_session`
  ADD KEY `student_id_fk` (`student_id_fk`),
  ADD KEY `tutor_id_fk` (`tutor_id_fk`),
  ADD KEY `class_id_fk` (`class_id_fk`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class_session`
--
ALTER TABLE `class_session`
  ADD CONSTRAINT `class_session_ibfk_1` FOREIGN KEY (`student_id_fk`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `class_session_ibfk_2` FOREIGN KEY (`tutor_id_fk`) REFERENCES `tutor` (`tutor_id`),
  ADD CONSTRAINT `class_session_ibfk_3` FOREIGN KEY (`class_id_fk`) REFERENCES `classes` (`class_id`);

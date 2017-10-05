-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2017 at 02:41 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `gradeexe`
--

-- --------------------------------------------------------

--
-- Table structure for table `grade1`
--

CREATE TABLE `grade1` (
  `SubjectNumber` int(10) NOT NULL,
  `Grade` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade1`
--

INSERT INTO `grade1` (`SubjectNumber`, `Grade`) VALUES
(3002001, '333'),
(5003001, '90'),
(5003004, '67'),
(5003005, '89'),
(5003006, '89'),
(5003007, '78'),
(5003008, '67'),
(5076001, '90'),
(5076004, '89'),
(5076005, '53'),
(5076006, '85'),
(5076010, '90'),
(5076011, '87');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `SubjectNumber` int(8) NOT NULL,
  `SubjectFullName` varchar(255) NOT NULL,
  `Credit` int(2) NOT NULL,
  `Year` int(2) NOT NULL,
  `Semester` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`SubjectNumber`, `SubjectFullName`, `Credit`, `Year`, `Semester`) VALUES
(3002001, 'Englist for scientist 1', 3, 1, 1),
(5003001, 'Mathematics 1', 3, 1, 1),
(5003004, 'General Chemistry', 3, 1, 1),
(5003005, 'General Chemistry Laboratory', 1, 1, 1),
(5003006, 'General Physics', 3, 1, 1),
(5003007, 'General Physics Laboratory', 1, 1, 1),
(5003008, 'Elementary Statistics', 3, 1, 1),
(5076001, 'Programming Fundamentals', 3, 1, 1),
(5076004, 'Data Structures and Algorithms', 3, 1, 2),
(5076005, 'Computer Organization and Architectures', 3, 1, 2),
(5076006, 'Automata Theory and Programming Lanuages', 3, 1, 2),
(5076010, 'Operating Systems', 3, 1, 2),
(5076011, 'Database Systems', 3, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grade1`
--
ALTER TABLE `grade1`
  ADD PRIMARY KEY (`SubjectNumber`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`SubjectNumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grade1`
--
ALTER TABLE `grade1`
  MODIFY `SubjectNumber` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5076012;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `SubjectNumber` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5076012;
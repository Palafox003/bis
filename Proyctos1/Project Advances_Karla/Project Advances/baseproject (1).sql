-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2017 at 02:31 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baseproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id_Ass` int(11) NOT NULL,
  `id_teacher` int(11) NOT NULL,
  `id_sub` int(11) NOT NULL,
  `id_group` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id_career` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `final`
--

CREATE TABLE `final` (
  `id_score1` int(11) NOT NULL,
  `id_score2` int(11) NOT NULL,
  `id_score3` int(11) NOT NULL,
  `id_sub` int(11) NOT NULL,
  `id_teacher` int(11) NOT NULL,
  `id_student` int(11) NOT NULL,
  `Average` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id_group` int(11) NOT NULL,
  `Name_of_classroom` varchar(150) NOT NULL,
  `Number_assing` int(11) NOT NULL,
  `id_teacher` int(11) NOT NULL,
  `id_career` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `partial 1`
--

CREATE TABLE `partial 1` (
  `id_score` int(11) NOT NULL,
  `Score` int(11) NOT NULL,
  `id_sub` int(11) NOT NULL,
  `id_teacher` int(11) NOT NULL,
  `id_student` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `partial 2`
--

CREATE TABLE `partial 2` (
  `id_score` int(11) NOT NULL,
  `Score` int(11) NOT NULL,
  `id_sub` int(11) NOT NULL,
  `id_teacher` int(11) NOT NULL,
  `id_student` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `partial 3`
--

CREATE TABLE `partial 3` (
  `id_score` int(11) NOT NULL,
  `Score` int(11) NOT NULL,
  `id_sub` int(11) NOT NULL,
  `id_teacher` int(11) NOT NULL,
  `id_student` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id_student` int(11) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `LastName` varchar(150) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Genre` varchar(150) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `id_group` int(11) NOT NULL,
  `Name_sub` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id_sub` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `id_teacher` int(11) NOT NULL,
  `id_group` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id_teacher` int(11) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `LastName` varchar(150) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Genre` varchar(150) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `id_university` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id_Ass`),
  ADD KEY `id_teacher` (`id_teacher`,`id_sub`,`id_group`),
  ADD KEY `id_sub` (`id_sub`),
  ADD KEY `id_group` (`id_group`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id_career`);

--
-- Indexes for table `final`
--
ALTER TABLE `final`
  ADD KEY `id_score1` (`id_score1`,`id_score2`,`id_score3`,`id_sub`,`id_teacher`,`id_student`),
  ADD KEY `id_score2` (`id_score2`),
  ADD KEY `id_score3` (`id_score3`),
  ADD KEY `id_sub` (`id_sub`),
  ADD KEY `id_teacher` (`id_teacher`),
  ADD KEY `id_student` (`id_student`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id_group`),
  ADD KEY `id_teacher` (`id_teacher`),
  ADD KEY `id_career` (`id_career`);

--
-- Indexes for table `partial 1`
--
ALTER TABLE `partial 1`
  ADD PRIMARY KEY (`id_score`),
  ADD KEY `id_sub` (`id_sub`,`id_teacher`,`id_student`),
  ADD KEY `id_teacher` (`id_teacher`),
  ADD KEY `id_student` (`id_student`);

--
-- Indexes for table `partial 2`
--
ALTER TABLE `partial 2`
  ADD PRIMARY KEY (`id_score`),
  ADD KEY `id_sub` (`id_sub`,`id_teacher`,`id_student`),
  ADD KEY `id_teacher` (`id_teacher`),
  ADD KEY `id_student` (`id_student`);

--
-- Indexes for table `partial 3`
--
ALTER TABLE `partial 3`
  ADD PRIMARY KEY (`id_score`),
  ADD KEY `id_sub` (`id_sub`,`id_teacher`,`id_student`),
  ADD KEY `id_teacher` (`id_teacher`),
  ADD KEY `id_student` (`id_student`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_student`),
  ADD KEY `id_group` (`id_group`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id_sub`),
  ADD KEY `id_teacher` (`id_teacher`,`id_group`),
  ADD KEY `id_group` (`id_group`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id_teacher`),
  ADD KEY `id_university` (`id_university`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id_career` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id_group` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignment`
--
ALTER TABLE `assignment`
  ADD CONSTRAINT `assignment_ibfk_1` FOREIGN KEY (`id_teacher`) REFERENCES `teacher` (`id_teacher`),
  ADD CONSTRAINT `assignment_ibfk_2` FOREIGN KEY (`id_sub`) REFERENCES `subject` (`id_sub`),
  ADD CONSTRAINT `assignment_ibfk_3` FOREIGN KEY (`id_group`) REFERENCES `groups` (`id_group`);

--
-- Constraints for table `final`
--
ALTER TABLE `final`
  ADD CONSTRAINT `final_ibfk_1` FOREIGN KEY (`id_score1`) REFERENCES `partial 1` (`id_score`),
  ADD CONSTRAINT `final_ibfk_2` FOREIGN KEY (`id_score2`) REFERENCES `partial 2` (`id_score`),
  ADD CONSTRAINT `final_ibfk_3` FOREIGN KEY (`id_score3`) REFERENCES `partial 3` (`id_score`),
  ADD CONSTRAINT `final_ibfk_4` FOREIGN KEY (`id_sub`) REFERENCES `subject` (`id_sub`),
  ADD CONSTRAINT `final_ibfk_5` FOREIGN KEY (`id_teacher`) REFERENCES `teacher` (`id_teacher`),
  ADD CONSTRAINT `final_ibfk_6` FOREIGN KEY (`id_student`) REFERENCES `student` (`id_student`);

--
-- Constraints for table `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`id_teacher`) REFERENCES `teacher` (`id_teacher`),
  ADD CONSTRAINT `groups_ibfk_2` FOREIGN KEY (`id_career`) REFERENCES `career` (`id_career`);

--
-- Constraints for table `partial 1`
--
ALTER TABLE `partial 1`
  ADD CONSTRAINT `partial 1_ibfk_1` FOREIGN KEY (`id_sub`) REFERENCES `subject` (`id_sub`),
  ADD CONSTRAINT `partial 1_ibfk_2` FOREIGN KEY (`id_teacher`) REFERENCES `teacher` (`id_teacher`),
  ADD CONSTRAINT `partial 1_ibfk_3` FOREIGN KEY (`id_student`) REFERENCES `student` (`id_student`);

--
-- Constraints for table `partial 2`
--
ALTER TABLE `partial 2`
  ADD CONSTRAINT `partial 2_ibfk_1` FOREIGN KEY (`id_sub`) REFERENCES `subject` (`id_sub`),
  ADD CONSTRAINT `partial 2_ibfk_2` FOREIGN KEY (`id_teacher`) REFERENCES `teacher` (`id_teacher`),
  ADD CONSTRAINT `partial 2_ibfk_3` FOREIGN KEY (`id_student`) REFERENCES `student` (`id_student`);

--
-- Constraints for table `partial 3`
--
ALTER TABLE `partial 3`
  ADD CONSTRAINT `partial 3_ibfk_1` FOREIGN KEY (`id_sub`) REFERENCES `subject` (`id_sub`),
  ADD CONSTRAINT `partial 3_ibfk_2` FOREIGN KEY (`id_teacher`) REFERENCES `teacher` (`id_teacher`),
  ADD CONSTRAINT `partial 3_ibfk_3` FOREIGN KEY (`id_student`) REFERENCES `student` (`id_student`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`id_group`) REFERENCES `groups` (`id_group`);

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`id_teacher`) REFERENCES `teacher` (`id_teacher`),
  ADD CONSTRAINT `subject_ibfk_2` FOREIGN KEY (`id_group`) REFERENCES `groups` (`id_group`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

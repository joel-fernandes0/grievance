-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2020 at 12:10 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grievance`
--

-- --------------------------------------------------------

--
-- Table structure for table `grievance_info`
--

CREATE TABLE `grievance_info` (
  `full_name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `college` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `semester` int(5) NOT NULL,
  `contact_no` bigint(10) NOT NULL,
  `category` varchar(50) NOT NULL,
  `grievance_type` varchar(20) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `date_of_grievance` date NOT NULL,
  `detail` text NOT NULL,
  `root_cause` varchar(20) NOT NULL,
  `date_post` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grievance_info`
--

INSERT INTO `grievance_info` (`full_name`, `gender`, `college`, `department`, `semester`, `contact_no`, `category`, `grievance_type`, `date_of_grievance`, `detail`, `root_cause`, `date_post`) VALUES
('jo', 'm', 'frcrce', 'Information Technology', 5, 1234567890, 'college_institute', 'admission', '0000-00-00', 'test', 'cause1', '2020-12-01 00:00:00'),
('jo', 'm', 'frcrce', 'Information Technology', 5, 1234567890, 'college_institute', 'admission', '0000-00-00', 'test', 'cause1', '2020-12-01 16:20:45'),
('dsf', 'z', 'frcrce', 'Information Technology', 6, 1234567890, 'university', 'attendance', '2020-12-16', 'asa', 'dd', '2020-12-01 16:31:38');

-- --------------------------------------------------------

--
-- Table structure for table `staff_info`
--

CREATE TABLE `staff_info` (
  `staff_name` varchar(50) NOT NULL,
  `staff_id` varchar(10) NOT NULL,
  `staff_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_info`
--

INSERT INTO `staff_info` (`staff_name`, `staff_id`, `staff_password`) VALUES
('ok', 'tes1', 'fa3fb6e0dccc657b57251c97db271b05');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `stud_name` varchar(50) NOT NULL,
  `stud_id` varchar(10) NOT NULL,
  `stud_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`stud_name`, `stud_id`, `stud_pass`) VALUES
('jo', 'test1', '5a105e8b9d40e1329780d62ea2265d8a');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

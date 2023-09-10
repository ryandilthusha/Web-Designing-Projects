-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2022 at 08:24 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `u_name`, `u_password`) VALUES
(1, 'admin', 'admin'),
(2, 'lakshan', '123'),
(3, 'ryan', 'ryan');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(10) NOT NULL,
  `p_card` varchar(50) NOT NULL,
  `p_f_name` varchar(50) NOT NULL,
  `p_l_name` varchar(50) NOT NULL,
  `p_address` varchar(50) NOT NULL,
  `p_mobile` varchar(50) NOT NULL,
  `p_gender` varchar(20) NOT NULL,
  `p_age` int(10) NOT NULL,
  `p_admit` varchar(10) NOT NULL,
  `p_history` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `p_card`, `p_f_name`, `p_l_name`, `p_address`, `p_mobile`, `p_gender`, `p_age`, `p_admit`, `p_history`) VALUES
(7, '11111', 'lakshan', 'sandaruwan', 'test', '07643902833', 'Male', 20, 'OP2', 'history');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(10) NOT NULL,
  `s_card` varchar(10) NOT NULL,
  `s_f_name` varchar(50) NOT NULL,
  `s_l_name` varchar(50) NOT NULL,
  `s_phone` int(10) NOT NULL,
  `s_address` varchar(50) NOT NULL,
  `s_gender` varchar(10) NOT NULL,
  `s_type` varchar(10) NOT NULL,
  `s_dob` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `s_card`, `s_f_name`, `s_l_name`, `s_phone`, `s_address`, `s_gender`, `s_type`, `s_dob`) VALUES
(13, '11111111', 'nurse', 'adad', 5343, 'dfsdfds', 'Female', 'Nurse', '2022-05-27'),
(15, '9999', 'aasdasd', 'asdasd', 0, 'asdsa', 'Male', 'Attendant', '2022-05-26'),
(16, '5242', 'aasd', 'sda', 0, 'asda', 'Male', 'Doctor', '2022-05-11'),
(17, 'asdad', 'asda', 'asad', 0, 'asdasd', 'Female', 'Nurse', '2022-05-20'),
(18, '5445544', 'aasdas', 'asdada', 0, 'sdfss', 'Male', 'Attendant', '2022-05-27'),
(19, '55555', 'ryan', 'dithusha', 76123456, 'test adddress', 'Male', 'Doctor', '2022-06-24');

-- --------------------------------------------------------

--
-- Table structure for table `wards`
--

CREATE TABLE `wards` (
  `id` int(10) NOT NULL,
  `w_number` varchar(50) NOT NULL,
  `Doctor1` varchar(50) NOT NULL,
  `Doctor2` varchar(50) NOT NULL,
  `Nurse1` varchar(50) NOT NULL,
  `Nurse2` varchar(50) NOT NULL,
  `Nurse3` varchar(50) NOT NULL,
  `Nurse4` varchar(50) NOT NULL,
  `Attendant1` varchar(50) NOT NULL,
  `Attendant2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wards`
--

INSERT INTO `wards` (`id`, `w_number`, `Doctor1`, `Doctor2`, `Nurse1`, `Nurse2`, `Nurse3`, `Nurse4`, `Attendant1`, `Attendant2`) VALUES
(1, 'OP1', 'Lakshan Sandaruwan', '', '', '', '', '', '', ''),
(2, 'OP2', 'Lakshan Sandaruwan', 'Lakshan Sandaruwan', 'nurse adad', 'nurse adad', 'nurse adad', 'nurse adad', 'aasdasd asdasd', ''),
(3, 'OP3', 'Lakshan Sandaruwan', 'Lakshan Sandaruwan', 'nurse adad', 'asda asad', 'nurse adad', 'nurse adad', 'aasdasd asdasd', 'aasdas asdada'),
(4, 'OP5', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wards`
--
ALTER TABLE `wards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `wards`
--
ALTER TABLE `wards`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

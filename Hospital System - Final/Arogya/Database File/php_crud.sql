-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 22, 2022 at 04:59 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

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

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(50) NOT NULL,
  `u_password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `u_name`, `u_password`) VALUES
(1, 'admin', 'admin'),
(3, 'ryan', 'ryan');

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

DROP TABLE IF EXISTS `bills`;
CREATE TABLE IF NOT EXISTS `bills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bill_no` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `bill_name` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `bill_total` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `bill_phone` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `bill_no`, `bill_name`, `bill_total`, `bill_phone`) VALUES
(1, '1', 'Ryan', '1000', '0764170647'),
(2, '2', 'Judith', '500', '0764170485'),
(3, '3', 'safd', '23', '2132'),
(4, '4', 'Yupun', '1000', '524520'),
(5, '10', 'fgdertg', '545', '525235');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

DROP TABLE IF EXISTS `medicine`;
CREATE TABLE IF NOT EXISTS `medicine` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `m_card` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `m_name` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `m_type` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `m_price` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `m_quantity` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `m_card`, `m_name`, `m_type`, `m_price`, `m_quantity`) VALUES
(1, '1', 'Panadol', 'Antibiotics', '5', 100),
(3, '2', 'Paracetamo', 'Pain Killers', '10', 500),
(4, '3', 'Cough Syrup', 'Other', '100', 50),
(5, '4', 'Gastic Syrup', 'Other', '100', 50);

-- --------------------------------------------------------

--
-- Table structure for table `other`
--

DROP TABLE IF EXISTS `other`;
CREATE TABLE IF NOT EXISTS `other` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `o_card` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `o_name` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `o_type` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `o_price` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `o_quantity` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other`
--

INSERT INTO `other` (`id`, `o_card`, `o_name`, `o_type`, `o_price`, `o_quantity`) VALUES
(1, '1', 'Pen', 'Office Stationary', '10', 20),
(3, '2', 'Bed', 'Beds and Metrresses', '10000', 5),
(4, '3', 'Metresses', 'Beds and Metrresses', '5000', 10),
(5, '4', 'Van', 'Vehicles', '4000000', 2);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `p_card` varchar(50) NOT NULL,
  `p_f_name` varchar(50) NOT NULL,
  `p_l_name` varchar(50) NOT NULL,
  `p_address` varchar(50) NOT NULL,
  `p_mobile` varchar(50) NOT NULL,
  `p_gender` varchar(20) NOT NULL,
  `p_age` int(10) NOT NULL,
  `p_admit` varchar(10) NOT NULL,
  `p_history` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `p_card`, `p_f_name`, `p_l_name`, `p_address`, `p_mobile`, `p_gender`, `p_age`, `p_admit`, `p_history`) VALUES
(7, '1', 'Judith', 'Michelle', 'test', '0764170485', 'Male', 20, 'Ward 2', 'Good medical history.'),
(8, '2', 'Ryan', 'Wickramaratne', '181/124, Baseline Road, Negombo.', '0764170647', 'Male', 25, 'Ward 1', 'Well behaved'),
(9, '3', 'Pavel', 'Fernando', '610 King Street Holyoke, MA 01040', '0769845321', 'Male', 15, 'Ward 3', '15 yo kidâ€“ swelling of tongue and difficulty breathing and swallowing'),
(10, '4', 'Malshan', 'Fernando', '105 Swanson St. Pataskala, OH 43062', '0756419789', 'Male', 25, 'Ward 2', '25 yo man â€“ new onset of fever, HTN, rigidity and altered mental status');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ward_id` varchar(20) CHARACTER SET utf32 NOT NULL,
  `room1` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `room2` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `room3` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `room4` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `ward_id`, `room1`, `room2`, `room3`, `room4`) VALUES
(1, 'Ward 1', 'No', 'No', 'Available', 'Available'),
(2, 'Ward 2', 'Available', 'Available', 'Available', 'Available'),
(3, 'Ward 3', 'No', 'No', 'No', 'Available'),
(4, 'Ward 4', 'No', 'No', 'No', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `s_card` varchar(10) NOT NULL,
  `s_f_name` varchar(50) NOT NULL,
  `s_l_name` varchar(50) NOT NULL,
  `s_phone` varchar(20) NOT NULL,
  `s_address` varchar(50) NOT NULL,
  `s_gender` varchar(10) NOT NULL,
  `s_type` varchar(10) NOT NULL,
  `s_dob` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `s_card`, `s_f_name`, `s_l_name`, `s_phone`, `s_address`, `s_gender`, `s_type`, `s_dob`) VALUES
(13, '1', 'Pavel', 'Fernandoooo', '31222721111', 'Basiyawatta', 'Male', 'Doctor', '2022-05-14'),
(20, '2', 'Ryan', 'Wickramaratne', '764170647', 'Negombo', 'Male', 'Nurse', '2022-06-07'),
(27, '3', 'Judith', 'Michelle', '0764170647', '8933 Lower River Lane Muncie, IN 47302', 'Male', 'Technician', '1997-06-24'),
(28, '4', 'Kyle', 'Wickramaratne', '0764357567', '36 Briarwood St. Holly Springs, NC 27540', 'Male', 'Attendant', '2022-01-05'),
(29, '5', 'Sadew', 'Fernando', '0745196753', '105 Swanson St. Pataskala, OH 43062', 'Male', 'Doctor', '2022-06-07'),
(30, '6', 'Mashi ', 'Perera', '0749823584', '7456 N. Wellington Drive Dalton, GA 30721', 'Female', 'Nurse', '2022-06-10'),
(31, '7', 'Shyni', 'Perera', '0786431987', '162 Ketch Harbour Rd. Davenport, IA 52804', 'Female', 'Attendant', '2022-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `wards`
--

DROP TABLE IF EXISTS `wards`;
CREATE TABLE IF NOT EXISTS `wards` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `w_number` varchar(50) NOT NULL,
  `Doctor1` varchar(50) NOT NULL,
  `Doctor2` varchar(50) NOT NULL,
  `Nurse1` varchar(50) NOT NULL,
  `Nurse2` varchar(50) NOT NULL,
  `Nurse3` varchar(50) NOT NULL,
  `Nurse4` varchar(50) NOT NULL,
  `Attendant1` varchar(50) NOT NULL,
  `Attendant2` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wards`
--

INSERT INTO `wards` (`id`, `w_number`, `Doctor1`, `Doctor2`, `Nurse1`, `Nurse2`, `Nurse3`, `Nurse4`, `Attendant1`, `Attendant2`) VALUES
(1, 'Ward 1', 'Pavel Fernandoooo', 'Sadew Fernando', 'Ryan Wickramaratne', 'Mashi  Perera', '', '', 'Kyle Wickramaratne', 'Shyni Perera'),
(2, 'Ward 2', 'Pavel Fernandoooo', '', 'Ryan Wickramaratne', '', '', '', 'Kyle Wickramaratne', ''),
(3, 'Ward 3', 'Sadew Fernando', '', 'Mashi  Perera', '', '', '', 'Shyni Perera', ''),
(4, 'Ward 4', 'Pavel Fernandoooo', '', 'Mashi  Perera', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

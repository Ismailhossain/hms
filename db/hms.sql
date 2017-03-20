-- phpMyAdmin SQL Dump
-- version 3.4.5deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 14, 2013 at 07:58 AM
-- Server version: 5.1.63
-- PHP Version: 5.3.6-13ubuntu3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_info`
--

CREATE TABLE IF NOT EXISTS `account_info` (
  `status_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `status_name` int(11) NOT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'ismail', '12345'),
(3, 'rahat', 'rahat'),
(4, 'guest', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `doct_info`
--

CREATE TABLE IF NOT EXISTS `doct_info` (
  `doct_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `doct_name` varchar(254) NOT NULL,
  `doct_designation` varchar(254) NOT NULL,
  `doct_gender` varchar(20) NOT NULL,
  `doct_type` int(11) NOT NULL,
  `doct_department` varchar(254) NOT NULL,
  `doct_description` text NOT NULL,
  `doct_address` varchar(254) NOT NULL,
  `doct_contact` int(25) NOT NULL,
  `doct_email` varchar(254) NOT NULL,
  `doct_image` varchar(254) NOT NULL,
  `doct_duty_time` varchar(254) NOT NULL,
  `doct_joinning_date` date NOT NULL,
  `salary` float NOT NULL,
  `status` varchar(25) NOT NULL,
  PRIMARY KEY (`doct_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=95 ;

--
-- Dumping data for table `doct_info`
--

INSERT INTO `doct_info` (`doct_id`, `doct_name`, `doct_designation`, `doct_gender`, `doct_type`, `doct_department`, `doct_description`, `doct_address`, `doct_contact`, `doct_email`, `doct_image`, `doct_duty_time`, `doct_joinning_date`, `salary`, `status`) VALUES
(58, 'Ismail', 'MBBS', 'male', 1, 'pathology', 'best', 'Dhanmondi', 1911019134, 'ismail@yahoo.com', '0edec2b32bbacca64f1a2cb3b44c6a78_0.jpg', '2 to 4', '2012-07-01', 5000, 'not paid'),
(60, 'Ismail', 'MBBS', 'male', 1, 'ICU', 'best', '   Dhanmondi', 1911019134, 'ismail@yahoo.com', '27d27489f484505895039daf1222afe3_0.jpg', '2 to 4', '2012-07-01', 5000, 'not paid'),
(61, 'Ismail', 'MBBS', 'male', 1, 'internal critical care', 'best', 'Mirpur', 1911019134, 'ismail@yahoo.com', 'b9900a32d42e2e4022eafba93a2e3f53_0.jpg', '2 to 4', '2012-07-01', 5000, 'not paid'),
(62, 'Ismail', 'mbbs', 'male', 1, 'pathology', 'good', ' mirpur ', 1911019134, 'ismail@yahoo.com', 'a52b86396faef53bc65148fa5642492c_0.jpg', '12 to 2', '2012-07-23', 5000, 'paid'),
(63, 'Ismail', 'mbbs', 'male', 1, 'pathology', 'good', ' mirpur ', 1911019134, 'ismail@yahoo.com', 'a412e24d47c1c524514dd1ef482d7bc2_0.jpg', '12 to 2', '2012-07-23', 5000, 'paid'),
(64, 'Ismail', 'mbbs', 'male', 1, 'emergency', 'good', '  mirpur ', 1911019134, 'ismail@yahoo.com', '250f8acfe127352a7fcf9e8d443adfa6_0.jpg', '12 to 2', '2012-07-23', 5000, 'paid'),
(65, 'Ismail', 'mbbs', 'male', 1, 'pathology', 'good', '  mirpur ', 1911019134, 'ismail@yahoo.com', 'aa91452bade9b3da48724dba89e588dc_0.jpg', '12 to 2', '2012-07-23', 5000, 'not paid'),
(67, 'Ismail', 'mbbs', 'male', 1, 'internal medicine', 'good', '  mirpur ', 1911019134, 'ismail@yahoo.com', 'db78363d11d69ebe6069f557fbfe640f_0.jpg', '12 to 2', '2012-07-23', 5000, 'paid'),
(68, 'Ismail', 'mbbs', 'male', 1, 'neurology', 'good doctor', '  mirpur ', 1911019134, 'ismail@yahoo.com', 'a11323be0933be7213eb6921bcb9c907_0.jpg', '2 to 4', '2012-07-28', 5000, 'paid'),
(69, 'Ismail', 'mbbs', 'male', 1, 'general surgery', 'good doctor', ' mirpur ', 1911019134, 'ismail@yahoo.com', 'e8e0269bc9fb9a07697f85777f1c4e33_0.jpg', '2 to 4', '2012-07-28', 5000, 'paid'),
(70, 'Ismail', 'mbbs', 'male', 1, 'neurosurgery', 'good doctor', '  mirpur ', 1911019134, 'ismail@yahoo.com', '84ef1fdcf98daf378a8653edbe67f3aa_0.jpg', '2 to 4', '2012-07-28', 5000, 'paid'),
(72, 'Ismail', 'mbbs', 'male', 1, 'neurosurgery', 'good doctor', '  mirpur ', 1911019134, 'ismail@yahoo.com', 'c2c4218d9ad7a523a54711d86762c195_0.jpg', '2 to 4', '2012-07-28', 5000, 'paid'),
(73, 'Ismail', 'mbbs', 'male', 1, 'chest', 'good doctor', '  mirpur ', 1911019134, 'ismail@yahoo.com', 'cd5f92f93461c4dbc3095dfe45293846_0.jpg', '2 to 4', '2012-07-28', 5000, 'paid'),
(74, 'Ismail', 'mbbs', 'male', 1, 'chest', 'good doctor', '  mirpur ', 1911019134, 'ismail@yahoo.com', '8141bd089e1cdeb5709f22f250f95937_0.jpg', '2 to 4', '2012-07-28', 5000, 'paid'),
(75, 'Ismail', 'mbbs', 'male', 1, 'general surgery', 'good doctor', ' mirpur ', 1911019134, 'ismail@yahoo.com', '47952caa6904f9024fa905c8f2b06063_0.jpg', '2 to 4', '2012-07-28', 5000, 'paid'),
(77, 'Ismail', 'mbbs', 'male', 1, 'general surgery', 'good doctor', ' mirpur ', 1911019134, 'ismail@yahoo.com', 'd57f720e62d1678a2b2b7312c52a2d99_0.jpg', '2 to 4', '2012-07-28', 5000, 'paid'),
(78, 'Ismail', 'mbbs', 'male', 1, 'emergency', 'good doctor', '  mirpur ', 1911019134, 'ismail@yahoo.com', '42cc6af6313787398e63058c3eb0fdbe_0.jpg', '2 to 4', '2012-07-28', 5000, 'paid'),
(80, 'Ismail', 'mbbs', 'male', 1, 'ICU', 'good doctor', '  mirpur ', 1911019134, 'ismail@yahoo.com', 'd094d9e5233c4f94f085555f58e249f6_0.jpg', '2 to 4', '2012-07-28', 5000, 'paid'),
(81, 'Ismail', 'mbbs', 'male', 1, 'emergency', 'good doctor', '  mirpur ', 1911019134, 'ismail@yahoo.com', '3683759a68e1d8e68f4a0c38c4e27476_0.jpg', '2 to 4', '2012-07-28', 5000, 'paid'),
(82, 'Ismail', 'mbbs', 'male', 1, 'general surgery', 'good doctor', ' mirpur ', 1911019134, 'ismail@yahoo.com', '556c9c2e1ec54073e2c2972a8c28a03f_0.jpg', '2 to 4', '2012-07-28', 5000, 'paid'),
(83, 'Ismail', 'mbbs', 'male', 1, 'emergency', 'good doctor', '  mirpur ', 1911019134, 'ismail@yahoo.com', 'f9c22299d84946b678fcbe31c834e6f6_0.jpg', '2 to 4', '2012-07-28', 5000, 'paid'),
(85, 'Ismail', 'mbbs', 'male', 1, 'oncology', 'good doctor', '  mirpur ', 1911019134, 'ismail@yahoo.com', '7ab88941101a6c1cc5529f4fa6fa7ec4_0.jpg', '2 to 4', '2012-07-28', 5000, 'paid'),
(86, 'Ismail', 'mbbs', 'male', 1, 'oncology', 'good doctor', '  mirpur ', 1911019134, 'ismail@yahoo.com', 'dde1f53603c3190f53f48725bb3cb9c5_0.jpg', '2 to 4', '2012-07-28', 5000, 'paid'),
(87, 'asdad', 'asdasd', 'male', 1, 'general surgery', 'good', '  mirpur ', 1911019134, 'ismail@yahoo.com', '7a3f218c6bca0184340f5bcae503214c_0.jpg', '2 to 4', '2012-07-31', 5000, 'paid'),
(88, 'asdad', 'asdasd', 'male', 1, 'general surgery', 'good', '  mirpur ', 1911019134, 'ismail@yahoo.com', '30538f950ed993b6fff13d10d53e47e3_0.jpg', '2 to 4', '2012-07-31', 5000, 'paid'),
(89, 'asdad', 'asdasd', 'male', 1, 'general surgery', 'good', '  mirpur ', 1911019134, 'ismail@yahoo.com', 'c53821b385d838ca4faf7e599559163a_0.jpg', '2 to 4', '2012-07-31', 5000, 'paid'),
(90, 'asdad', 'asdasd', 'male', 1, 'general surgery', 'good', '  mirpur ', 1911019134, 'ismail@yahoo.com', '22f762f29cd0e2d73d21286bcaa9e68f_0.jpg', '2 to 4', '2012-07-31', 5000, 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE IF NOT EXISTS `employee_info` (
  `employee_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `employee_name` varchar(254) DEFAULT NULL,
  `employee_gender` varchar(20) NOT NULL,
  `employee_description` text NOT NULL,
  `employee_address` varchar(250) NOT NULL,
  `employee_contact` varchar(254) NOT NULL,
  `employee_duty_time` varchar(250) NOT NULL,
  `employee_joining_date` date NOT NULL,
  `employee_type` int(11) NOT NULL,
  `salary` float NOT NULL,
  `status` varchar(40) NOT NULL,
  `employee_image` varchar(250) NOT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`employee_id`, `employee_name`, `employee_gender`, `employee_description`, `employee_address`, `employee_contact`, `employee_duty_time`, `employee_joining_date`, `employee_type`, `salary`, `status`, `employee_image`) VALUES
(3, 'rahat', 'male', 'Good ', 'Motijeel', '12312', '12', '2012-06-10', 2, 213213, 'paid', '0165e6dd52e7ab9b25a0244c4e5ec3b2_0.jpg'),
(8, 'rahat', 'male', 'Good', 'Motijeel', '12312', '12', '2012-06-07', 2, 2000, 'not paid', '3e403c242eb51939344c2cc51fc8fb14_0.jpg'),
(9, 'ismail', 'male', 'Good', 'Motijeel', '12312', '12', '2012-06-06', 2, 5000, 'paid', '66939abb1b87021e090eab2f6e9765d4_0.jpg'),
(10, 'rahat', 'male', 'sincere', 'mirpur  ', '01911019134', '1 to 4', '2012-07-28', 2, 5000, 'paid', 'ef1da3bbb68e774a9e790a01ca28c03b_0.jpg'),
(11, 'rahat', 'male', 'sincere', 'mirpur ', '01911019134', '1 to 4', '2012-07-28', 2, 5000, 'not paid', '0901f77f43c39ce219386bd9a2674b9b_0.jpg'),
(12, 'rahat', 'male', 'sincere', 'mirpur ', '01911019134', '1 to 4', '2012-07-28', 2, 5000, 'not paid', '6e3d023352553c5a1250d131bf3547b5_0.jpg'),
(13, 'rahat', 'male', 'sincere', 'mirpur ', '01911019134', '1 to 4', '2012-07-28', 2, 5000, 'not paid', 'fe0722b2f44f1ff8ab4012a46ab644dc_0.jpg'),
(14, 'rahat', 'male', 'sincere', 'mirpur ', '01911019134', '1 to 4', '2012-07-28', 2, 5000, 'not paid', '80c2c8f76d02482e549b6f9de487ad21_0.jpg'),
(15, 'rahat', 'male', 'sincere', 'mirpur ', '01911019134', '1 to 4', '2012-07-28', 2, 5000, 'not paid', 'fdbd7cfc32139e55e8aed65b456fa875_0.jpg'),
(16, 'rahat', 'male', 'sincere', 'mirpur ', '01911019134', '1 to 4', '2012-07-28', 2, 5000, 'not paid', '5b645cfb1d9b7a63d216799fa659efb3_0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_info`
--

CREATE TABLE IF NOT EXISTS `feedback_info` (
  `feedback_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(100) NOT NULL,
  `patient_gender` varchar(50) NOT NULL,
  `your_name` varchar(100) NOT NULL,
  `relation` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `country` varchar(100) NOT NULL,
  `doctor_name` varchar(100) NOT NULL,
  `contact_no` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `suggestion` varchar(500) NOT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `feedback_info`
--

INSERT INTO `feedback_info` (`feedback_id`, `patient_name`, `patient_gender`, `your_name`, `relation`, `address`, `country`, `doctor_name`, `contact_no`, `email`, `suggestion`) VALUES
(1, 'Heera', 'male', 'asdasd', 'asdsad', 'dasd34324', 'bangladesh', 'asdasd', 213123, 'gipsy.heera@gmail.com', 'asdsadasd'),
(2, 'rahat', 'male', 'asdasd', 'asdsad', 'asdasd21331', 'germany', 'asdasd', 213123, 'gipsy.heera@gmail.com', 'asdqwdwqd'),
(3, 'rahat', 'male', 'ismail', 'brother', 'mirpur', 'bangladesh', 'karim', 1911, 'gipsy.heera@gmail.com', 'good'),
(4, 'rahat', 'male', 'ismail', 'brother', 'mirpur', 'bangladesh', 'karim', 1911, 'gipsy.heera@gmail.com', 'good'),
(5, 'rahat', 'male', 'ismail', 'brother', 'mirpur', 'bangladesh', 'karim', 1911, 'gipsy.heera@gmail.com', 'good'),
(6, 'rahat', 'male', 'ismail', 'brother', 'mirpur', 'bangladesh', 'karim', 1911, 'gipsy.heera@gmail.com', 'good'),
(7, 'rahat', 'male', 'ismail', 'brother', 'mirpur', 'bangladesh', 'karim', 1911, 'gipsy.heera@gmail.com', 'good'),
(8, 'rahat', 'male', 'ismail', 'brother', 'mirpur', 'bangladesh', 'karim', 1911, 'gipsy.heera@gmail.com', 'good'),
(9, 'rahat', 'male', 'ismail', 'brother', 'mirpur', 'bangladesh', 'karim', 1911, 'gipsy.heera@gmail.com', 'good'),
(10, 'rahat', 'male', 'ismail', 'brother', 'mirpur', 'bangladesh', 'karim', 1911, 'gipsy.heera@gmail.com', 'good'),
(11, 'rahat', 'male', 'ismail', 'brother', 'mirpur', 'bangladesh', 'karim', 1911, 'gipsy.heera@gmail.com', 'good'),
(12, 'rahat', 'male', 'ismail', 'brother', 'mirpur', 'bangladesh', 'karim', 1911, 'gipsy.heera@gmail.com', 'good'),
(13, 'rahat', 'male', 'ismail', 'brother', 'mirpur', 'bangladesh', 'karim', 1911, 'gipsy.heera@gmail.com', 'good'),
(14, 'rahat', 'male', 'ismail', 'brother', 'mirpur', 'bangladesh', 'karim', 1911, 'gipsy.heera@gmail.com', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `online_appointment`
--

CREATE TABLE IF NOT EXISTS `online_appointment` (
  `online_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `doctor_name` varchar(100) NOT NULL,
  `doct_department` varchar(250) NOT NULL,
  `contact_no` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `genarate_id` varchar(200) NOT NULL,
  PRIMARY KEY (`online_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=89 ;

--
-- Dumping data for table `online_appointment`
--

INSERT INTO `online_appointment` (`online_id`, `patient_name`, `address`, `doctor_name`, `doct_department`, `contact_no`, `email`, `genarate_id`) VALUES
(74, 'rahat', 'mirpur', 'ismail', 'general surgery', 1911, 'gipsy.heera@gmail.com', 'general surgery00055'),
(77, 'rahat', 'mirpur', 'ismail', 'urology', 1911, 'gipsy.heera@gmail.com', 'urology 000718'),
(80, 'rahat', 'mirpur', 'ismail', 'urology', 1911, 'gipsy.heera@gmail.com', 'urology 000640'),
(81, 'rahat', 'mirpur', 'ismail', 'urology', 1911, 'gipsy.heera@gmail.com', 'urology ismail000228'),
(82, 'rahat', 'mirpur', 'ismail', 'urology', 1911, 'gipsy.heera@gmail.com', 'urology 000649'),
(83, 'rahat', 'mirpur', 'ismail', 'general surgery', 1911, 'gipsy.heera@gmail.com', 'general surgery 000476'),
(84, 'rahat', 'mirpur', 'ismail', 'general surgery', 213123, 'gipsy.heera@gmail.com', 'general surgery 000731'),
(85, 'dssad', 'sdasdsad', 'dasd', 'neurosurgery', 2132, 'gipsy.heera@gmail.com', 'neurosurgery 000155'),
(86, 'ziko', 'bjhcasbcsacash', 'ziko', 'neurology', 49494949, 'ziko@iut.com', 'neurology 000545'),
(87, 'ghd', 'ug', 'jkh', 'emergency', 8987, 'gipsy.heera@gmail.com', 'emergency 000609'),
(88, 'hasan', 'mirpur', 'ismail', 'neurology', 987, 'admin@admin.com', 'neurology 000350');

-- --------------------------------------------------------

--
-- Table structure for table `patient_info`
--

CREATE TABLE IF NOT EXISTS `patient_info` (
  `patient_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(254) NOT NULL,
  `patient_gender` varchar(25) NOT NULL,
  `patient_address` varchar(254) NOT NULL,
  `patient_contact` int(11) NOT NULL,
  `patient_email` varchar(254) NOT NULL,
  `patient_admitted_date` date NOT NULL,
  `patient_room_catagory` varchar(100) NOT NULL,
  `duty_doctor_name` varchar(254) NOT NULL,
  `deposit` float NOT NULL,
  `due` float NOT NULL,
  `total_amount` float NOT NULL,
  `status` varchar(25) NOT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `patient_info`
--

INSERT INTO `patient_info` (`patient_id`, `patient_name`, `patient_gender`, `patient_address`, `patient_contact`, `patient_email`, `patient_admitted_date`, `patient_room_catagory`, `duty_doctor_name`, `deposit`, `due`, `total_amount`, `status`) VALUES
(12, 'rahat', 'male', 'Dhanmondi', 123123, 'ismail@yahoo.com', '2012-06-01', 'double bed room', 'ismail', 1231, 213, 25, 'not paid'),
(13, 'rahat', 'male', 'Dhanmondi  ', 123123, 'ismail@yahoo.com', '2012-06-06', 'ward', 'ismail', 12213, 1.32131e+07, 251, 'not paid'),
(14, 'rahat', 'male', ' Dhanmondi  ', 123123, 'ismail@yahoo.com', '2012-06-01', 'ward', 'ismail', 12, 13, 251, 'not paid'),
(15, 'rahat', 'male', 'Dhanmondi', 123123, 'ismail@yahoo.com', '2012-06-01', 'ward', 'ismail', 12, 13, 251, 'not paid'),
(16, 'rahat', 'male', ' Dhanmondi  ', 123123, 'ismail@yahoo.com', '2012-06-01', 'ward', 'ismail', 12, 13, 251, 'not paid'),
(17, 'Heera', 'male', 'Mirpur', 213213, 'ismail@yahoo.com', '2012-06-05', 'suite', 'hasib', 1231, 1.32131e+07, 2.51231e+10, 'not paid'),
(18, 'akranm', 'male', 'Mirpur', 132234, 'ismail@yahoo.com', '2012-07-13', 'double bed room', 'hasib', 1231, 1.32131e+07, 2.51231e+10, 'not paid');

-- --------------------------------------------------------

--
-- Table structure for table `patient_room_catagory`
--

CREATE TABLE IF NOT EXISTS `patient_room_catagory` (
  `catagory_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `catagory_name` varchar(254) NOT NULL,
  PRIMARY KEY (`catagory_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_info`
--

CREATE TABLE IF NOT EXISTS `pharmacy_info` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `doct_name` varchar(200) NOT NULL,
  `patient_name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `medicine` varchar(1000) NOT NULL,
  `contact_no` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `room_no` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `pharmacy_info`
--

INSERT INTO `pharmacy_info` (`id`, `doct_name`, `patient_name`, `address`, `medicine`, `contact_no`, `email`, `room_no`) VALUES
(1, 'Ismail', 'rahat', '', '', 0, '', ''),
(2, 'Ismail', 'rahat', '', '', 0, '', ''),
(3, '', '', '', '', 0, '', ''),
(4, 'Ismail', 'rahat', 'mirpur', '', 213123, 'gipsy.heera@gmail.com', '333'),
(5, 'Ismail', 'rahat', 'mirpur', '', 213123, 'gipsy.heera@gmail.com', '333'),
(6, 'Ismail', 'rahat', 'mirpur', '', 213123, 'gipsy.heera@gmail.com', '333'),
(7, 'Ismail', 'rahat', 'mirpur', '', 213123, 'gipsy.heera@gmail.com', '333'),
(8, 'Ismail', 'rahat', 'mirpur', '', 213123, 'gipsy.heera@gmail.com', '333'),
(9, 'Ismail', 'rahat', 'mirpur', '', 213123, 'gipsy.heera@gmail.com', '333'),
(10, '', '', '', ' ', 0, '', ''),
(11, '', '', '', ' ', 0, '', ''),
(12, '', '', '', ' ', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

CREATE TABLE IF NOT EXISTS `tbl_type` (
  `type_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(254) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_type`
--

INSERT INTO `tbl_type` (`type_id`, `type_name`) VALUES
(1, 'doctor'),
(2, 'employer');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

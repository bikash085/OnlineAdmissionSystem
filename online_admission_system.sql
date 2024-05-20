-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2018 at 01:35 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online admission system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `password`) VALUES
('admin123', 'password123');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `admissionid` int(10) NOT NULL,
  `apply_id` int(100) NOT NULL,
  `rollno` varchar(100) NOT NULL,
  `fee` int(10) NOT NULL,
  `dateofadmission` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `year` int(10) NOT NULL,
  `course_id` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `cardtype` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `eon` varchar(50) NOT NULL,
  `cvv` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`admissionid`, `apply_id`, `rollno`, `fee`, `dateofadmission`, `year`, `course_id`, `bank`, `cardtype`, `name`, `eon`, `cvv`) VALUES
(21, 30, 'HS1002/2018/1', 5400, '2018-12-22 18:51:30', 2018, 'HS1002', 'HDFC', 'DEBIT', 'BIKASH GOGOI', '12/24', 123),
(22, 32, 'HS1002/2018/2', 5400, '2018-12-22 18:52:16', 2018, 'HS1002', 'HDFC', 'CREDIT', 'MNBV', '12/24', 678),
(23, 37, 'HS1002/2018/3', 5400, '2018-12-22 19:14:09', 2018, 'HS1002', 'PNB', 'DEBIT', 'HABIBUR RAHMAN', '12/19', 543),
(17, 42, 'BA1001/2018/1', 5100, '2018-12-22 18:33:41', 2018, 'BA1001', 'HDFC', 'DEBIT', 'ANKIT GOGOI', '12/24', 445),
(18, 40, 'BA1002/2018/1', 5100, '2018-12-22 18:40:35', 2018, 'BA1002', 'HDFC', 'DEBIT', 'BIKASH GOGOI', '12/24', 765),
(19, 49, 'BA1002/2018/2', 5100, '2018-12-22 18:41:50', 2018, 'BA1002', 'HDFC', 'CREDIT', 'BIKASH GOGOI', '12/24', 654),
(20, 50, 'BA1002/2018/3', 5100, '2018-12-22 18:49:29', 2018, 'BA1002', 'HDFC', 'CREDIT', 'MNBV', '13/25', 678),
(24, 31, 'HS1002/2018/4', 5400, '2018-12-22 19:15:29', 2018, 'HS1002', 'UBI', 'DEBIT', 'PODUM BORUAH', '11/20', 111),
(25, 35, 'HS1002/2018/5', 5400, '2018-12-22 19:16:45', 2018, 'HS1002', 'SBI', 'DEBIT', 'ANANDA UPADHAYA', '01/21', 124),
(26, 38, 'HS1002/2018/6', 5400, '2018-12-22 19:20:03', 2018, 'HS1002', 'BOI', 'CREDIT', 'AJAY TYE', '03/21', 156),
(27, 33, 'HS1002/2018/7', 5400, '2018-12-23 03:52:25', 2018, 'HS1002', 'HDFC', 'DEBIT', 'BIKASH GOGOI', '13/22', 654);

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `apply_id` int(100) NOT NULL,
  `semail` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `m_number` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `caste` varchar(100) NOT NULL,
  `course_id` varchar(50) NOT NULL,
  `hslc_per` float NOT NULL,
  `hslc_tot` varchar(100) NOT NULL,
  `hslc_subs` varchar(100) NOT NULL,
  `hslc_bd_cn` varchar(100) NOT NULL,
  `hs_per` varchar(100) NOT NULL,
  `hs_tot` varchar(100) NOT NULL,
  `hs_subs` varchar(100) NOT NULL,
  `hs_bd_cn` varchar(100) NOT NULL,
  `hslc_mkst` varchar(400) NOT NULL,
  `hslc_cer` varchar(400) NOT NULL,
  `hs_mkst` varchar(400) NOT NULL,
  `hs_cer` varchar(400) NOT NULL,
  `prc_cer` varchar(400) NOT NULL,
  `cast_cer` varchar(400) NOT NULL,
  `state` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`apply_id`, `semail`, `name`, `fname`, `mname`, `dob`, `m_number`, `gender`, `caste`, `course_id`, `hslc_per`, `hslc_tot`, `hslc_subs`, `hslc_bd_cn`, `hs_per`, `hs_tot`, `hs_subs`, `hs_bd_cn`, `hslc_mkst`, `hslc_cer`, `hs_mkst`, `hs_cer`, `prc_cer`, `cast_cer`, `state`, `district`, `address`) VALUES
(32, 'priyam123@gmail.com', 'Priyam Gogoi', 'Probal Gogoi', 'PronitaGogoi', '1993-12-12', '6578903214', 'Male', 'OBC', 'HS1002', 70, '420', 'Eng Ass G.Math G.Sci S.Sci C.Sc.', 'SEBA', '56', '345', 'Ass Eng Phy Chem Maths Stats', 'AHSEC', '140_1920.jpg', '141_1920.jpg', '00939_mirror_1920x1200.jpg', '00943_hanginout_1920x1200.jpg', '00954_lakeofgruyere_1920x1200.jpg', '00960_leaf38_1920x1200.jpg', '2', '11', 'tawan'),
(33, 'pator123@gmail.com', 'Pator Phangcho', 'Pan Singh Phangcho', 'Priya Phangcho', '1992-12-13', '8765432198', 'Male', 'SC', 'HS1002', 77, '445', 'Eng Alt.Enf G.Sci G.Maths S.Sci Hindi', 'SEBA', '65', '375', 'Eng Alt.Eng Phy Chem Maths Bio', 'AHSEC', '00970_glacierrunoff_1920x1200.jpg', '00975_goldensun_1920x1200.jpg', '00977_caribbeanharbor_1920x1200.jpg', '00979_octobersky_1920x1200.jpg', '00982_sunsetcelebration_1920x1200.jpg', '00988_paradiselost_1920x1200.jpg', '5', '45', 'Senapati'),
(37, 'habib123@gmail.com', 'Habibur Rahman', 'Abdul Rahman', 'Tusnin Rahman', '1993-04-21', '9087689043', 'Male', 'General', 'HS1002', 91, '569', 'Eng Ass G.Maths G.Sc S.Sc Arbic', 'SEBA', '45', '250', 'Eng Ass Phy Chem Maths Bio', 'AHSEC', '2004-10-29-1920x1200.jpg', '2004-11-01-1920x1200.jpg', '2004-11-02-1920x1200.jpg', '2004-11-03-1920x1200.jpg', '2004-11-05-1920x1200.jpg', '2004-11-10-1920x1200.jpg', '8', '67', 'East Skkim'),
(38, 'ajay123@gmail.com', 'Ajay Tie', 'Bijoy Tie', 'Priya Tie', '1994-12-02', '1234567489', 'Male', 'SC', 'HS1002', 81, '460', 'Eng Alt.Eng G.Sc G.Maths S.Sc C.Sc', 'SEBA', '91', '576', 'Eng Alt.Eng Phy Chem Maths C.Sc', 'AHSEC', '2004-11-13-1920x1200.jpg', '2004-11-23-1920x1200.jpg', '2004-11-25-1920x1200.jpg', '2004-12-05-1920x1200.jpg', '2004-12-07-1920x1200.jpg', '2004-12-09-1920x1200.jpg', '6', '51', 'Aizwal'),
(35, 'ananda123@gmail.com', 'Ananda Upadhaya', 'Arun Upadhaya', 'Shruti Upadhaya', '1995-03-07', '9806543217', 'Male', 'General', 'HS1002', 88, '556', 'Eng Alt.Eng G.Sc G.Maths S.Sci Hindi', 'BBE', '56', '335', 'Eng Alt. Eng Phy Maths Chem C.Sc', 'AHSEC', '2004-09-10-1920x1200.jpg', '2004-09-15-1920x1200.jpg', '2004-09-18-1920x1200.jpg', '2004-09-26-1920x1200.jpg', '2004-09-27-1920x1200.jpg', '2004-09-30-1920x1200.jpg', '7', '59', 'Haflong'),
(50, 'pallab123@gmail.com', 'Pallab Gogoi', 'Amar Gogoi', 'Angela Gogoi', '1993-12-10', '8796543210', 'Male', 'SC', 'BA1002', 82, '490', 'Eng. Ass. G.Sc S.Sc G.Math Snkt', 'SEBA', '89', '557', 'Eng. Alt.Eng Philo Edu Soc Eco', 'AHSEC', '2005-04-10-1920x1200.jpg', '01017_lonelyseagull_1920x1200.jpg', '2004-09-15-1920x1200.jpg', '00938_sunsetoverstockholm_1920x1200.jpg', '2004-11-01-1920x1200.jpg', '2004-09-30-1920x1200.jpg', '6', '51', 'Aizawl'),
(40, 'mriganka123@gmail.com', 'Mriganka Gogoi', 'Abhisek Gogoi', 'Simran Gogoi', '1987-01-01', '123123123', 'Male', 'OBC', 'BA1002', 80, '500', 'adasdnasdasdasdads', 'ahec', '70', '600', 'adasdasd', 'asdasd', '', '', '', '', '', '', '1', '1', ''),
(42, 'ankit123@gmail.com', 'Ankit Gogoi', 'Arun Gogoi', 'Prity Gogoi', '1994-11-23', '7689054323', 'Male', 'General', 'BA1001', 74, '415', 'Eng Alt.Eng G.Sc G.Maths GS.Sc His ', 'SEBA', '84', '457', 'Eng Alt.Eng Pol Edu Eco Soc', 'AHSEC', '141_1920.jpg', '00938_sunsetoverstockholm_1920x1200.jpg', '2005-03-09-1920x1200.jpg', '2005-01-21-1920x1200.jpg', '2004-12-05-1920x1200.jpg', '2005-03-02-1920x1200.jpg', '3', '21', 'Dimapur'),
(30, 'bikash123@gmail.com', 'Bikash Konwar', 'Rajib Konwar', 'Prity Konwar', '1994-12-11', '8876653980', 'Male', 'OBC', 'HS1002', 78, '453', 'Eng Ass G.Sci G.Maths S.Sci His', 'SEBA', '75', '435', 'Eng Ass Phy Chem Math Biol', 'AHSEC', '0001_03.JPG', '0007-1920x1200.jpg', '131_1920.jpg', '133_1920.jpg', '137_1920.jpg', '138_1920.jpg', '1', '3', 'Amguri'),
(31, 'pranab123@gmail.com', 'Pranab Boruah', 'Podum Boruah', 'Pubali Boruah', '1993-12-17', '9876543210', 'Male', 'OBC', 'HS1002', 80, '385', 'Eng Ass G.Sci G.Maths S.Sci A.Maths', 'SEBA', '77', '455', 'Eng Ass Phy Chem Maths Biol', 'AHSEC', '142_1920.jpg', '143_1920.jpg', '00933_scottishlowlands_1920x1200.jpg', '00936_truecolorsofstrasbourg_1920x1200.jpg', '00938_sunsetoverstockholm_1920x1200.jpg', '139_1920.jpg', '1', '8', 'Roha'),
(49, 'gulap123@gmail.com', 'Gulap Sonowal', 'Abhijit Sonawal', 'Sunita Sonawal', '1994-12-11', '6543289065', 'Male', 'General', 'BA1002', 92, '555', 'Eng Alt.Eng G.Maths G.Sc Hist S.Sc', 'SEBA', '85', '457', 'Eng Alt.Eng Eco Soc Edu Pol', 'AHSEC', '2004-11-05-1920x1200.jpg', '2004-12-24-1920x1200.jpg', '01017_lonelyseagull_1920x1200.jpg', '2004-12-07-1920x1200.jpg', '2005-02-22-1920x1200.jpg', '2005-01-21-1920x1200.jpg', '1', '2', 'Modarkhat');

-- --------------------------------------------------------

--
-- Table structure for table `course_details`
--

CREATE TABLE `course_details` (
  `course_id` varchar(50) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `programme` varchar(50) NOT NULL,
  `total` int(50) NOT NULL,
  `open` int(50) NOT NULL,
  `obc` int(50) NOT NULL,
  `sc` int(50) NOT NULL,
  `st` int(50) NOT NULL,
  `course_duration` varchar(50) NOT NULL,
  `e_criteria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_details`
--

INSERT INTO `course_details` (`course_id`, `course_name`, `programme`, `total`, `open`, `obc`, `sc`, `st`, `course_duration`, `e_criteria`) VALUES
('BA1001', 'English    ', 'Bachelor of Arts    ', 30, 20, 5, 3, 2, '3  years    ', '10 +  2 in relevant discipline'),
('BA1002', 'Philosopy    ', 'Bachelor of Arts    ', 30, 20, 5, 3, 2, '3 years     ', '10 +  2 in relevant discipline'),
('BA1003', 'Economics  ', 'Bachelor of Arts  ', 30, 20, 5, 3, 2, '3 years  ', '10 + 2 in relevant discipline'),
('BA1004', 'Political Science  ', 'Bachelor of Arts  ', 30, 20, 5, 3, 2, '3 years  ', '10 + 2 in relevant discipline'),
('BA1005', 'History  ', 'Bachelor of Arts  ', 30, 20, 5, 3, 2, '3 years  ', '10 + 2 in relevant discipline'),
('BA1006', 'Education  ', 'Bachelor of Arts  ', 30, 20, 5, 3, 2, '3 years  ', '10 + 2 in relevant discipline'),
('BCA1001', 'Computer Application  ', 'Bachelor in Computer Application  ', 30, 20, 5, 3, 2, '3 years  ', '10 + 2 in relevant discipline'),
('BSc1001', 'Chemistry  ', 'Bachelor of Science  ', 30, 20, 5, 3, 2, '3 years  ', '10 + 2 in relevant discipline'),
('BSc1002', 'Physics  ', 'Bachelor of Science  ', 30, 20, 5, 3, 2, '3 years  ', '10 + 2 in relevant discipline'),
('BSc1003', 'Mathematics  ', 'Bachelor of Science  ', 30, 20, 5, 3, 2, '3 years  ', '10 + 2 in relevant discipline'),
('BSc1004', 'Zoology  ', 'Bachelor of Science  ', 30, 20, 5, 3, 2, '3 years  ', '10 + 2 in relevant discipline'),
('BSc1005', 'Botany  ', 'Bachelor of Science  ', 30, 20, 5, 3, 2, '3 years  ', '10 + 2 in relevant discipline'),
('BSc1006', 'Geology  ', 'Bachelor of Science  ', 30, 20, 5, 3, 2, '3 years  ', '10 + 2 in relevant discipline'),
('BSc1007', 'Statistics ', 'Bachelor of Science ', 30, 20, 5, 3, 2, '3 years ', '10 + 2 in relevant discipline'),
('BSc1008', 'Economics      ', 'Bachelor of Science   ', 30, 20, 5, 3, 2, '3 years', '10 + 2 in relevant discipline'),
('HS1001', 'Arts(H.S 1st year)   ', 'Higher Secondary  ', 30, 20, 5, 3, 2, '2 years    ', '10th pass'),
('HS1002', 'Science(H.S. 1st year) ', 'Higher Secondary  ', 30, 20, 5, 3, 2, '2 years ', '10th pass');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `did` int(10) NOT NULL,
  `dname` varchar(100) NOT NULL,
  `sid` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`did`, `dname`, `sid`) VALUES
(12, 'WEST KAMENG', 2),
(11, 'TAWANG', 2),
(17, 'EAST SIANG', 2),
(1, 'TINSUKIA', 1),
(2, 'DIBRUGARH', 1),
(3, 'SIVASAGAR', 1),
(4, 'JORHAT', 1),
(7, 'GOLAGHAT', 1),
(8, 'NAGAON', 1),
(9, 'KAMRUP METRO', 1),
(10, 'KAMRUP', 1),
(13, 'EAST KAMENG', 2),
(14, 'PAPUM PARE', 2),
(15, 'KURUNG KUMEY', 2),
(16, 'KRA DAADI', 2),
(18, 'UPPER SIANG', 2),
(19, 'LOHIT', 2),
(20, 'NAMSAI', 2),
(21, 'DIMAPUR', 3),
(22, 'KIPHIRE', 3),
(23, 'KOHIMA', 3),
(24, 'LONGLENG', 3),
(25, 'MOKOKCHUNG', 3),
(26, 'MON', 3),
(27, 'PEREN', 3),
(28, 'PHEK', 3),
(29, 'TUENSANG', 3),
(30, 'WOKHA', 3),
(31, 'WEST JAINTIA HILLS(JOWAI)', 4),
(32, 'EAST JAINTIA HILLS(KHLIEHRIAT)', 4),
(33, 'EAST KHASI HILLS(SHILLONG)', 4),
(34, 'WEST KHASI HILLS(NONGSTOIN)', 4),
(35, 'SOUTH WEST KHASI HILLS(MAWKYRWAT)', 4),
(36, 'RI-BHOI(NONGPOH)', 4),
(37, 'NORTH GARO HILLS(RESUBELPARA)', 4),
(38, 'EAST GARO HILLS(WILLIAMNAGAR)', 4),
(39, 'SOUTH GARO HILLS(BAGHMARA)', 4),
(40, 'WEST GARO HILLS(TURA)', 4),
(41, 'BISHNUPUR', 5),
(42, 'THOUBAL', 5),
(43, 'IMPHAL EAST', 5),
(44, 'IMPHAL WEST', 5),
(45, 'SENAPATI', 5),
(46, 'UKHRUL', 5),
(47, 'JIRIBAM', 5),
(48, 'KANGPOKPI', 5),
(49, 'KAMJONG', 5),
(50, 'NONEY', 5),
(51, 'AIZWAL', 6),
(52, 'KOLASIL', 6),
(53, 'LAWNGTLAI', 6),
(54, 'LUNGLEI', 6),
(55, 'MAMIT', 6),
(56, 'SAIHA', 6),
(57, 'SERCHHIP', 6),
(58, 'CHAMPHAI', 6),
(59, 'DHALAI', 7),
(60, 'SIPAHIJALA', 7),
(61, 'KHOWAI', 7),
(62, 'GOMATI', 7),
(63, 'UNAKOTI', 7),
(64, 'NORTH TRIPURA', 7),
(65, 'SOUTH TRIPURA', 7),
(66, 'WEST TRIPURA', 7),
(67, 'EAST SIKKIM', 8),
(68, 'NORTH SIKKIM', 8),
(69, 'SOUTH SIKKIM', 8),
(70, 'WEST SIKKIM', 8);

-- --------------------------------------------------------

--
-- Table structure for table `fees_details`
--

CREATE TABLE `fees_details` (
  `fees_id` int(50) NOT NULL,
  `course_id` varchar(50) NOT NULL,
  `tution_fees` float NOT NULL,
  `examination_fees` float NOT NULL,
  `student_activity` float NOT NULL,
  `sports_gym` float NOT NULL,
  `registration_fees` float NOT NULL,
  `medical_services` float NOT NULL,
  `lab` float NOT NULL,
  `library_information` float NOT NULL,
  `group_insurance_fees` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees_details`
--

INSERT INTO `fees_details` (`fees_id`, `course_id`, `tution_fees`, `examination_fees`, `student_activity`, `sports_gym`, `registration_fees`, `medical_services`, `lab`, `library_information`, `group_insurance_fees`, `total`) VALUES
(1, 'BA1001', 2000, 1200, 400, 300, 600, 200, 0, 300, 100, 5100),
(2, 'BA1002', 2000, 1200, 400, 300, 600, 200, 0, 300, 100, 5100),
(3, 'BA1003', 2000, 1200, 400, 300, 600, 200, 0, 300, 100, 5100),
(4, 'BA1004', 2000, 1200, 400, 300, 600, 200, 0, 300, 100, 5100),
(5, 'BA1005', 2000, 1200, 400, 300, 600, 200, 0, 300, 100, 5100),
(6, 'BA1006', 2000, 1200, 400, 300, 600, 200, 0, 300, 100, 5100),
(7, 'BCA1001', 2000, 1200, 400, 300, 600, 200, 1000, 300, 100, 6100),
(8, 'BSc1001', 2000, 1200, 400, 300, 600, 200, 1000, 300, 100, 6100),
(9, 'BSc1002', 2000, 1200, 400, 300, 600, 200, 1000, 300, 100, 6100),
(10, 'BSc1003', 2000, 1200, 400, 300, 600, 200, 1000, 300, 100, 6100),
(11, 'BSc1004', 2000, 1200, 400, 300, 600, 200, 1000, 300, 100, 6100),
(12, 'BSc1005', 2000, 1200, 400, 300, 600, 200, 1000, 300, 100, 6100),
(13, 'BSc1006', 2000, 1200, 400, 300, 600, 200, 1000, 300, 100, 6100),
(14, 'BSc1007', 2000, 1200, 400, 300, 600, 200, 1000, 300, 100, 6100),
(15, 'BSc1007', 2000, 1200, 400, 300, 600, 200, 1000, 300, 100, 6100),
(16, 'BSc1008', 2000, 1200, 400, 300, 600, 200, 1000, 300, 100, 6100),
(17, 'BSc1008', 2000, 1200, 400, 300, 600, 200, 1000, 300, 100, 6100),
(18, 'HS1001', 1500, 1000, 400, 300, 600, 200, 0, 300, 100, 4400),
(19, 'HS1002', 1500, 1000, 400, 300, 600, 200, 1000, 300, 100, 5400);

-- --------------------------------------------------------

--
-- Table structure for table `meritlist`
--

CREATE TABLE `meritlist` (
  `meritlistid` int(10) NOT NULL,
  `apply_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meritlist`
--

INSERT INTO `meritlist` (`meritlistid`, `apply_id`) VALUES
(1, 42),
(2, 32),
(3, 30),
(4, 31),
(5, 37),
(6, 35),
(13, 50),
(8, 40),
(9, 41),
(10, 49),
(11, 38),
(12, 33);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `sid` int(10) NOT NULL,
  `sname` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`sid`, `sname`) VALUES
(1, 'ASSAM'),
(2, 'ARUNACHAL PRADESH'),
(3, 'NAGALAND'),
(4, 'MEGHALAYA'),
(5, 'MANIPUR'),
(6, 'MIZORAM'),
(7, 'TRIPURA'),
(8, 'SIKKIM');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `semail` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`semail`, `password`) VALUES
('bikash123@gmail.com', 'bikash123'),
('pator123@gmail.com', 'pator123'),
('habib123@gmail.com', 'habib123'),
('ananda123@gmail.com', 'ananda123'),
('abhijit123@gmail.com', 'abhijit123'),
('ajay123@gmail.com', 'ajay123'),
('akash123@gmail.com', 'akash123'),
('pranab123@gmail.com', 'pranab123'),
('priyam123@gmail.com', 'priyam123'),
('pallab123@gmail.com', 'pallab123'),
('mriganka123@gmail.com', 'mriganka123'),
('ankit123@gmail.com', 'ankit123'),
('barua.99@gmail.com', '123'),
('atowar91626@gmail.com', '98644'),
('qqq@gmail.com', '123'),
('gulap123@gmail.com', 'gulap123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`admissionid`);

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`apply_id`);

--
-- Indexes for table `course_details`
--
ALTER TABLE `course_details`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `fees_details`
--
ALTER TABLE `fees_details`
  ADD PRIMARY KEY (`fees_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `meritlist`
--
ALTER TABLE `meritlist`
  ADD PRIMARY KEY (`meritlistid`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`semail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `admissionid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `apply_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `fees_details`
--
ALTER TABLE `fees_details`
  MODIFY `fees_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `meritlist`
--
ALTER TABLE `meritlist`
  MODIFY `meritlistid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `fees_details`
--
ALTER TABLE `fees_details`
  ADD CONSTRAINT `fees_details_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `course_details` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

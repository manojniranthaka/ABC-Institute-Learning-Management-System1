-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2019 at 02:07 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `abc_institute`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
`id` int(5) NOT NULL,
  `subject` varchar(20) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `teacher` varchar(50) DEFAULT NULL,
  `upload` varchar(150) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `subject`, `title`, `teacher`, `upload`) VALUES
(70, 'bio', 'Divercity', 'Mr. Jananayake', 'pdf_upload/lab report 2.docx'),
(74, 'combined', 'Vectors', 'Ms. Namali', 'pdf_upload/paf lec 1.docx'),
(76, 'chemistry', 'tyyff', 'mr.santha', 'pdf_upload/SPRING 2.docx'),
(77, 'chemistry', 'ghhg', 'jjuu', 'pdf_upload/paf lec 1.docx'),
(80, 'bio', 'serse', 'ser', 'pdf_upload/Call Sheet - March - malith-1.xlsx'),
(85, '', 'itpm', 'mr dilshan', 'pdf_upload/buy and sell (IT17048088).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
`fid` int(3) NOT NULL,
  `location` varchar(500) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `details` varchar(2000) DEFAULT NULL,
  `outcome` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `location`, `date`, `details`, `outcome`) VALUES
(2, 'dfsdf', '2019-05-10', 'sdfsdf', 'sdffds'),
(3, 'hjghj', '2019-05-09', 'ghjghj', 'ghjghj'),
(4, 'sdf', '2019-05-15', 'dfsd', 'zdfsd'),
(5, 'sd', '2019-05-11', 'dz', 'sdf'),
(6, 'hjghj', '2019-05-01', 'sdf', 'df'),
(7, 'sdz', '2019-05-08', 'sdf', 'sdf'),
(8, 'df', '2019-05-24', 'vfv', 'f'),
(9, 'sliit', '2019-05-08', 'in front of olive canteen', 'ABC'),
(10, 'hdw', '2019-05-15', 'dhqjd', 'qnbergqe');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
`id` int(11) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(200) NOT NULL,
  `details` varchar(500) NOT NULL,
  `year` varchar(11) DEFAULT NULL,
  `semester` varchar(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `date`, `title`, `details`, `year`, `semester`) VALUES
(9, '2019-05-25', 'Exams', 'Exam date published', '2', '2'),
(10, '2019-05-25', 'Vacations', 'The dates will be informed in the future', '2', '1'),
(11, '2019-05-25', 'Registration Repeat', 'Fees for the registrations', '1', '2'),
(12, '2019-05-25', 'poya day', 'poya day', '2', '1'),
(13, '2019-05-25', 'assignment', 'ITPM final submision', '3', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE IF NOT EXISTS `tbl_events` (
`id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`id`, `title`, `start`, `end`) VALUES
(30, 'wiramaya', '2019-05-09', '2019-05-10'),
(31, 'ganthera', '2019-05-23', '2019-05-24'),
(32, 'donation camp', '2019-05-31', '2019-06-01'),
(33, 'poson thorana', '2019-06-19', '2019-06-20'),
(34, 'dfdfdf', '2019-05-02', '2019-05-03'),
(35, 'wiramaya', '2019-05-01', '2019-05-02'),
(36, 'Get ', '2019-04-30', '2019-05-01'),
(37, 'Ganthera', '2019-06-08', '2019-06-09'),
(38, 'wiramay', '2019-05-04', '2019-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE IF NOT EXISTS `timetable` (
`tid` int(5) NOT NULL,
  `year` varchar(100) DEFAULT NULL,
  `semester` varchar(100) DEFAULT NULL,
  `upload` varchar(1500) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`tid`, `year`, `semester`, `upload`) VALUES
(32, '1styear', '2ndsemester', 'pdf_upload/AssignmentLab_Report_Cover_Page (8).pdf'),
(33, '1styear', '1stsemester', 'pdf_upload/____Z-blog_____ Client-side development 1 - jQuery(IT17048088).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `uploadfile`
--

CREATE TABLE IF NOT EXISTS `uploadfile` (
`id` int(11) NOT NULL,
  `regno` varchar(45) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploadfile`
--

INSERT INTO `uploadfile` (`id`, `regno`, `image`) VALUES
(9, 'IT17003292', 'file/index1.php.txt'),
(15, 'IT17003292', 'file/IT17048088.pdf'),
(16, 'IT17003292', 'file/IT17048088(Lab02).pdf'),
(17, 'iT17509350', 'file/PAF(IT17048088).pdf'),
(18, 'it17048088', 'file/BacklogItem(edited) (2) I.docx'),
(19, 'it17048088', 'file/AssignmentLab_Report_Cover_Page (8).pdf'),
(20, 'it17048088', 'file/admin_notice_management(it17055154).pdf'),
(21, 'it17048088', 'file/____Z-blog_____ Distributed systems.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(11) NOT NULL,
  `user_first` varchar(256) DEFAULT NULL,
  `user_last` varchar(256) DEFAULT NULL,
  `user_email` varchar(256) DEFAULT NULL,
  `user_uid` varchar(256) DEFAULT NULL,
  `user_dob` varchar(256) DEFAULT NULL,
  `user_address` varchar(256) DEFAULT NULL,
  `user_contact` varchar(256) DEFAULT NULL,
  `user_pwd` varchar(256) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_dob`, `user_address`, `user_contact`, `user_pwd`) VALUES
(2, 'Malith', 'Iddamalgoda', 'malith9595@gmail.com', '123', '', 'malabe', '077889966', '202cb962ac59075b964b07152d234b70'),
(5, 'Kasun', 'Malind', 'kaku@gmail.com', 'kaku', '', 'malabee', '077774669', 'faccbbc4cb54d70b669eb4bce4153355'),
(6, 'Malithz', 'Iddamalgoda', 'malith9595@gmail.com', 'Maliya', '', 'Colombo', '0774430067', '202cb962ac59075b964b07152d234b70'),
(8, 'loops', 'Jay', 'hi@loops.lk', 'loops', '', 'malabe', '0774430012', '202cb962ac59075b964b07152d234b70'),
(9, 'Chatura', 'Madusanka', 'c4@gmail.com', 'c4', '', 'malabe', '0715698425', '202cb962ac59075b964b07152d234b70'),
(12, 'Manoa', 'Ariyarathn', 'manori@gmail.com', 'mano', '', 'borella', '0778863369', '202cb962ac59075b964b07152d234b70'),
(13, 'Manoj', 'Niranthaka', 'ormnmanoj@gmail.com', 'Manoj', '', 'D 67 Kandy road Tholangamuwa', '0766703899', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`name`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
 ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
 ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `uploadfile`
--
ALTER TABLE `uploadfile`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `fid` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
MODIFY `tid` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `uploadfile`
--
ALTER TABLE `uploadfile`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

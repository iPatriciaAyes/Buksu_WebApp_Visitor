-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2022 at 03:30 AM
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
-- Database: `qrcodedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `ID` int(11) NOT NULL,
  `STUDENTID` varchar(250) NOT NULL,
  `TIMEIN` varchar(250) NOT NULL,
  `TIMEOUT` varchar(250) NOT NULL,
  `LOGDATE` varchar(250) NOT NULL,
  `LOCATION` varchar(250) NOT NULL,
  `STATUS` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`ID`, `STUDENTID`, `TIMEIN`, `TIMEOUT`, `LOGDATE`, `LOCATION`, `STATUS`) VALUES
(327, '202200026', '21:21:02 PM', '', '2022-06-06', 'Main Gate', '0'),
(328, '202200026', '21:21:14 PM', '', '2022-06-06', 'Admin Building', '0'),
(329, '202200026', '21:21:29 PM', '', '2022-06-06', 'Exit Gate', '0'),
(330, '202200077alvinacudo@gmail.comAlvinaSuguihanCudo', '22:51:50 PM', '', '2022-06-06', 'Main Gate', '0'),
(331, '202200077alvinacudo@gmail.comAlvinaSuguihanCudo', '22:52:01 PM', '', '2022-06-06', 'Admin Building', '0'),
(332, '202200077alvinacudo@gmail.comAlvinaSuguihanCudo', '22:52:10 PM', '', '2022-06-06', 'College of Technology', '0'),
(333, '202200077', '00:17:56 AM', '', '2022-06-06', 'Main Gate', '0'),
(334, '202200077', '00:19:16 AM', '', '2022-06-06', 'College of Technology', '0'),
(335, '202200078', '01:08:11 AM', '', '2022-06-06', 'Main Gate', '0'),
(336, '202200079', '01:08:37 AM', '', '2022-06-06', '', '0'),
(337, '202200080', '01:09:02 AM', '', '2022-06-06', 'Admin Building', '0'),
(338, '202200082', '14:23:06 PM', '', '2022-06-07', '', '0'),
(339, '202200082', '14:23:16 PM', '', '2022-06-07', 'Main Gate', '0'),
(340, '202200082', '14:23:30 PM', '', '2022-06-07', 'College of Technology', '0'),
(341, '202200082', '14:23:44 PM', '', '2022-06-07', 'Exit Gate', '0');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(11) NOT NULL,
  `STUDENTID` varchar(250) NOT NULL,
  `FIRSTNAME` varchar(250) NOT NULL,
  `MNAME` varchar(250) NOT NULL,
  `LASTNAME` varchar(250) NOT NULL,
  `AGE` varchar(250) NOT NULL,
  `GENDER` varchar(250) NOT NULL,
  `q1` varchar(5) NOT NULL,
  `q2` varchar(5) NOT NULL,
  `q3` varchar(5) NOT NULL,
  `q4` varchar(5) NOT NULL,
  `q5` varchar(5) NOT NULL,
  `q6` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(5, 'admin1', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(6, 'example', 'c1285a470f0fc8f14f54851c5d8eb32f', 'patricia'),
(7, 'example1', '66b375b08fc869632935c9e6a9c7f8da', 'kim'),
(10, 'kimgwapo', 'e00cf25ad42683b3df678c61f42c6bda', 'kim'),
(11, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(13, 'admin101', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `IDNUM` int(50) NOT NULL,
  `STUDENTID` varchar(250) NOT NULL,
  `FIRSTNAME` varchar(50) NOT NULL,
  `MNAME` varchar(50) NOT NULL,
  `LASTNAME` varchar(50) NOT NULL,
  `AGE` int(5) NOT NULL,
  `GENDER` varchar(50) NOT NULL,
  `PURPOSE` varchar(250) NOT NULL,
  `TEMPERATURE` decimal(5,0) NOT NULL,
  `q1` varchar(50) NOT NULL,
  `q2` varchar(50) NOT NULL,
  `q3` varchar(50) NOT NULL,
  `q4` varchar(50) NOT NULL,
  `q5` varchar(50) NOT NULL,
  `q6` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`IDNUM`, `STUDENTID`, `FIRSTNAME`, `MNAME`, `LASTNAME`, `AGE`, `GENDER`, `PURPOSE`, `TEMPERATURE`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`) VALUES
(202200014, 'kimleonardoibanez@gmail.com', 'kim leonardo', 'g', 'ibanez', 25, 'MALE', 'cashier', '38', 'no', 'no', 'no', 'no', 'no', 'no'),
(202200015, 'patriciaayes@gmail.com', 'patricia', 'D.', 'ayes', 24, 'FEMALE', 'it department', '38', 'no', 'yes', 'no', 'yes', 'no', 'no'),
(202200016, 'patriciaayes@gmail.com', 'patricia', 'D.', 'ayes', 24, 'FEMALE', 'it department', '38', 'no', 'yes', 'no', 'yes', 'no', 'no'),
(202200017, 'cj@gmail.com', 'CJ Brent Kyl', 'L', 'Bayhon', 24, 'MALE', 'Dorm', '38', 'no', 'no', 'no', 'no', 'no', 'no'),
(202200018, 'cj@gmail.com', 'CJ Brent Kyl', 'L', 'Bayhon', 24, 'MALE', 'Dorm', '38', 'no', 'no', 'no', 'no', 'no', 'no'),
(202200019, 'cj@gmail.com', 'CJ Brent Kyl', 'L', 'Bayhon', 24, 'MALE', 'Dorm', '38', 'no', 'no', 'no', 'no', 'no', 'no'),
(202200020, 'cj@gmail.com', 'CJ Brent Kyl', 'L', 'Bayhon', 24, 'MALE', 'Dorm', '38', 'no', 'no', 'no', 'no', 'no', 'no'),
(202200021, 'cj@gmail.com', 'CJ Brent Kyl', 'L', 'Bayhon', 24, 'MALE', 'Dorm', '38', 'no', 'no', 'no', 'no', 'no', 'no'),
(202200022, 'cj@gmail.com', 'CJ Brent Kyl', 'L', 'Bayhon', 24, 'MALE', 'Dorm', '38', 'no', 'no', 'no', 'no', 'no', 'no'),
(202200023, 'iallenwalker123@gmail.com', 'Kristine', 'Guanzon', 'Ibanez', 21, 'FEMALE', 'COB', '37', 'no', 'no', 'no', 'no', 'no', 'no'),
(202200024, 'sample@gmail.com', 'sample', 'samp', 'samples', 23, 'FEMALE', 'Main Gate', '38', 'no', 'no', 'no', 'no', 'no', 'no'),
(202200025, 'admin@gmail.com', 'admin', 'A', 'Adminx', 23, 'FEMALE', 'COB', '38', 'no', 'yes', 'yes', 'yes', 'yes', 'no'),
(202200026, 'kimleonard', 'Kim Leonardo', 'Guanzon', 'Ibañez', 24, 'MALE', 'TOR', '37', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes'),
(202200027, 'kim@gmail.com', 'kim', 'k', 'kimmy', 25, 'MALE', 'TOR', '37', 'no', 'yes', 'no', 'yes', 'no', 'yes'),
(202200028, 'patriciaayes.0323@gmail.com', 'Patricia', 'D', 'Ayes', 22, 'FEMALE', 'Maka graduate', '45', 'no', 'no', 'no', 'no', 'no', 'no'),
(202200029, 'cj@gmail.com', 'cj', 'labajo', 'bayhon', 23, 'MALE', 'tor', '35', 'no', 'no', 'no', 'no', 'no', 'no'),
(202200030, 'Rheoarranchado52@gmail.com ', 'Rheo James Anderson ', 'Esperat ', 'Arranchado ', 22, 'MALE', 'Claim of TOR', '37', 'no', 'no', 'no', 'no', 'no', 'no'),
(202200031, 'Rheoarranchado52@gmail.com ', 'Rheo James Anderson ', 'Esperat ', 'Arranchado ', 22, 'MALE', 'Claim of TOR', '37', 'no', 'no', 'no', 'no', 'no', 'no'),
(202200032, 'Cjbogok@gmail.com', 'Cj', 'Bobo', 'Tanga', 69, 'FEMALE', 'Fapfap to the max', '69', 'no', 'no', 'no', 'no', 'no', 'no'),
(202200033, 'big.boss11772000@gmail.com', 'Ednecs', 'Gingoog', 'Paru-Paru', 22, 'FEMALE', 'Want to slap their faces. haha charot.', '35', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes'),
(202200034, 'naikee145@gmail.com', 'Nigelle Nicholet', 'Labajo', 'Bayhon', 26, 'MALE', 'Attend graduation', '37', 'no', 'no', 'no', 'no', 'no', 'no'),
(202200035, 'angelqueen16@gmail.com', 'Angely', 'Suguihan', 'Cudo', 19, 'FEMALE', 'To submit some missing activity', '36', 'no', 'no', 'no', 'no', 'no', 'no'),
(202200036, 'angelqueen16@gmail.com', 'Angely', 'Suguihan', 'Cudo', 19, 'FEMALE', 'To submit some missing activity', '36', 'no', 'no', 'no', 'no', 'no', 'no'),
(202200038, 'isaysorry123@gmail.com', 'kim', 'guanzon', 'ibanez', 25, 'MALE', 'COB', '38', 'no', 'no', 'no', 'no', 'no', 'no'),
(202200039, 'isaysorry123@gmail.com', 'kim', 'guanzon', 'ibanez', 25, 'MALE', 'COB', '38', 'no', 'no', 'no', 'no', 'no', 'no'),
(202200051, '1801102697@student.buksu.edu.ph', 'Rhizisel Mar', 'Lumapac', 'Prayon', 22, 'FEMALE', 'Process documents', '37', 'no', 'no', 'no', 'no', 'no', 'no'),
(202200053, 'jmclarranchado@gmail.com', 'John Mc Levann ', 'Esperat', 'Arranchado', 24, 'MALE', 'Claim of TOR', '36', 'no', 'no', 'no', 'no', 'yes', 'no'),
(202200077, 'alvinacudo@gmail.com', 'Alvina', 'Suguihan', 'Cudo', 23, 'FEMALE', 'manghanyo na mu paso', '37', 'no', 'no', 'no', 'no', 'no', 'no'),
(202200078, 'karlodelacerna@gmail.com', 'Karlo Pastor', 'C', 'Dela Cerna', 25, 'MALE', 'Alumni', '27', 'no', 'no', 'yes', 'yes', 'no', 'no'),
(202200079, 'karlodelacerna@gmail.com', 'Karlo Pastor', 'C', 'Dela Cerna', 25, 'MALE', 'Alumni', '27', 'no', 'no', 'yes', 'yes', 'no', 'no'),
(202200080, 'jaroldjohn02162018@gmail.com', 'Jarold John ', 'Lunda', 'Sumente', 23, 'MALE', 'Follow up grades.', '37', 'no', 'no', 'no', 'no', 'no', 'no'),
(202200081, 'sampol@gmail.com', 'sampol', 'sampoli', 'sampo', 24, 'MALE', 'TOR', '37', 'no', 'yes', 'yes', 'yes', 'yes', 'yes'),
(202200082, 'sample101@gmail.com', 'sample101', 'sample', 'sample1', 25, 'MALE', 'Cashier', '38', 'no', 'no', 'no', 'no', 'no', 'no'),
(202200083, 'admin@', 'admin', 'admin', 'admin', 25, 'FEMALE', 'Dorm', '37', 'no', 'no', 'no', 'no', 'no', 'no'),
(202200084, 'enerio.paulwillian@gmail.com', 'Paul', '-', 'Enerio', 19, 'MALE', 'To Register', '37', 'no', 'no', 'no', 'no', 'no', 'no'),
(202200085, '1801103121@student.buksu.edu.ph', 'Mapple', 'F', 'Ucab', 22, 'FEMALE', 'ID validation', '36', 'no', 'no', 'no', 'no', 'no', 'no'),
(202200086, 'delfinclandestine13@gmail.com', 'Clandestine', 'Ore', 'Delfin', 20, 'FEMALE', 'Visit the university', '36', 'no', 'no', 'no', 'no', 'no', 'no'),
(202200087, 'cj@gmail.com', 'cj', 'labajo', 'bayhon', 20, 'MALE', 'tor', '35', 'no', 'no', 'no', 'no', 'no', 'no'),
(202200088, '1801100212@student.buksu.edu.ph', 'Mae', 'Gapas', 'Samonte', 23, 'FEMALE', 'Grammarly Test in Buksu research center ', '32', 'no', 'no', 'no', 'no', 'no', 'no'),
(202200089, 'panesalmajane@gmail.com', 'Alma Jane', 'O', 'Panes', 23, 'FEMALE', 'Evaluate', '36', 'no', 'no', 'no', 'no', 'no', 'no'),
(202200090, 'panesalmajane@gmail.com', 'Alma Jane', 'O', 'Panes', 23, 'FEMALE', 'Evaluate ', '36', 'no', 'no', 'no', 'no', 'no', 'no'),
(202200091, 'labradorjohnlester0@gmail.com ', 'John Lester ', 'Belecario', 'Labrador ', 22, 'MALE', 'Survey ', '36', 'no', 'no', 'no', 'no', 'no', 'no'),
(202200092, 'zentsuma@gmail.com', 'Zent', 'A', 'Suma', 19, 'MALE', 'Testing', '37', 'no', 'no', 'no', 'no', 'no', 'no'),
(202200093, 'sample201@gmail.com', 'sample201', 'sample', 'sample2', 27, 'MALE', 'cashier', '37', 'no', 'no', 'no', 'no', 'no', 'no'),
(202200094, 'sample301@gmail.com', 'sample301', 'sample', 'sample3', 24, 'FEMALE', 'TOR', '38', 'no', 'no', 'no', 'no', 'no', 'no'),
(202200095, '1234@gmail.com', 'Kim Leonardo', 'guanzon', 'ibanez', 25, 'MALE', 'it department', '38', 'no', 'no', 'no', 'no', 'no', 'no'),
(202200096, 'samp@gmail.com', 'sam', 'samph', 'phsam', 24, 'FEMALE', 'Dorm', '37', 'no', 'no', 'no', 'yes', 'yes', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`IDNUM`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=342;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `IDNUM` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202200097;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

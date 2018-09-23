-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2018 at 07:05 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pj`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `Schedule _ID` varchar(8) NOT NULL COMMENT 'รหัสกำหนดการ',
  `Year` date NOT NULL COMMENT 'ปีการศึกษา',
  `Event_ Name` varchar(20) NOT NULL COMMENT 'ชื่อกิจกรรม',
  `Start_Date` date NOT NULL COMMENT 'วันที่เริ่มต้น',
  `End_Date` date NOT NULL COMMENT 'วันที่สิ้นสุด',
  `Create_Data` text NOT NULL COMMENT 'ข้อมูลกิจกรรมงาน',
  `Last_update` text NOT NULL COMMENT 'ข้อมูลกิจกรรมล่าสุด'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `compensation`
--

CREATE TABLE `compensation` (
  `Remuneration _ID` varchar(8) NOT NULL COMMENT 'เลขที่อัตราค่าตอบแทน',
  `Remuneration` int(5) NOT NULL COMMENT 'อัตราค่าตอบแทน',
  `Work_ID` int(4) NOT NULL COMMENT 'รหัสการทำงาน',
  `explanation` varchar(80) NOT NULL COMMENT 'คำอธิบายค่าตอบแทน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `OFFICERID` varchar(8) NOT NULL COMMENT 'เลขที่พนักงาน',
  `OFFICERNAME` varchar(100) NOT NULL COMMENT 'ชื่อพนักงาน',
  `Position` varchar(20) NOT NULL COMMENT 'ตำแหน่งงาน',
  `Jobs` varchar(20) NOT NULL COMMENT 'สังกัดงาน',
  `contact` varchar(20) NOT NULL COMMENT 'ช่องทางการติดต่อ',
  `Emp_Username` varchar(20) NOT NULL COMMENT 'ชื่อผู้เข้าสู่ระบบ',
  `Emp_Password` varchar(10) NOT NULL COMMENT 'รหัสผ่าน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `Resume_ID` varchar(8) NOT NULL COMMENT 'รหัสประวัติการทำงาน',
  `Work_ID` int(4) NOT NULL COMMENT 'รหัสการทำงาน',
  `Job_ID` int(4) NOT NULL COMMENT 'เลขที่งาน',
  `ST_ID` int(8) NOT NULL COMMENT 'รหัสนักศึกษา'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `Job_ID` int(8) NOT NULL COMMENT 'รหัสเลขที่งาน',
  `job_name_ss` varchar(30) DEFAULT NULL,
  `Job_Name` varchar(20) DEFAULT NULL COMMENT 'ชื่องาน',
  `Category` text COMMENT 'ประเภทงาน',
  `Job_description` text COMMENT 'ลักษณะงาน',
  `term` int(1) DEFAULT NULL COMMENT 'ภาคเรียน',
  `year` int(4) DEFAULT NULL COMMENT 'ปีการศึกษา',
  `Remaining` int(3) DEFAULT NULL COMMENT 'ตำแหน่งงานคงเหลือ',
  `STUDENTCODE` varchar(16) DEFAULT NULL COMMENT 'รหัสนักศึกษา',
  `Attribute_applicants` text COMMENT 'คุณสมบัติผู้สมัคร',
  `Frist_date` date DEFAULT NULL COMMENT 'วันที่ทำงานวันแรก',
  `Sex` varchar(1) DEFAULT NULL COMMENT 'เพศ',
  `Working_time` date DEFAULT NULL COMMENT 'เวลาการทำงาน(เริ่มต้น-สิ้นสุดงาน)',
  `Receiving_number` int(2) DEFAULT NULL COMMENT 'จำนวนที่รับ',
  `Job_history` text COMMENT 'ประวัติการเสนองาน',
  `Job_status` varchar(1) DEFAULT NULL COMMENT 'สถานะงาน(ผ่าน/ไม่ผ่าน/รอการตรวจสอบ)',
  `Contact` int(11) DEFAULT NULL,
  `ss` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`Job_ID`, `job_name_ss`, `Job_Name`, `Category`, `Job_description`, `term`, `year`, `Remaining`, `STUDENTCODE`, `Attribute_applicants`, `Frist_date`, `Sex`, `Working_time`, `Receiving_number`, `Job_history`, `Job_status`, `Contact`, `ss`) VALUES
(1, 'จารุวรรณ บัวเเย้ม', 'ขนของ', 'ธุรการ', 'ขนของ', 1, 2561, 8, '58118696', 'เเข็งเเรง', '2018-09-08', 'Y', '2018-09-30', 10, 'ทำงานดี', '1', 955848786, 'อาคารวิชาการ5');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(8) NOT NULL,
  `username` varchar(10) NOT NULL,
  `student_code` int(8) NOT NULL,
  `password` varchar(20) NOT NULL,
  `ST` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `student_code`, `password`, `ST`) VALUES
(1, '58118696', 58118696, '123456', 1),
(2, '58122235', 58122235, '123456', 1),
(3, '58112848', 58112848, '123456', 3),
(4, '58142597', 58142597, '123456', 4);

-- --------------------------------------------------------

--
-- Table structure for table `register_form`
--

CREATE TABLE `register_form` (
  `Register_ID` varchar(8) NOT NULL COMMENT 'เลขทืใบสมัคร',
  `Registe_date` date NOT NULL COMMENT 'วันที่สมัคร',
  `STUDENTCODE` varchar(16) NOT NULL COMMENT 'รหัสนักศึกษา',
  `Job_ID` varchar(8) NOT NULL COMMENT 'เลขที่งาน',
  `Reason` text NOT NULL COMMENT 'เหตุผลการขอทุน',
  `Result` varchar(1) NOT NULL COMMENT 'ผลการตัดสินใจ',
  `Verification_Status` varchar(10) NOT NULL COMMENT 'สถานะยืนยันการทำงาน{ยืนยัน/ปฏิเสธ/เพิกเฉย/ละทิ้งงาน}',
  `Confirmation_date` date NOT NULL COMMENT 'วันที่ยืนยันการทำงาน',
  `Reject_reason` varchar(60) NOT NULL COMMENT 'เหตุผลปฏิเสธงาน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_code` int(8) NOT NULL COMMENT 'รหัสนักศึกษา',
  `STUDENTNAME` varchar(100) NOT NULL COMMENT 'ชื่อ-นามสกุล',
  `FACULTYNAME` varchar(100) NOT NULL COMMENT 'สำนักวิชา',
  `PROGRAMNAME` varchar(100) NOT NULL COMMENT 'สาขาวิชา',
  `GPAX` varchar(5) NOT NULL COMMENT 'เกรดเฉลี่ยล่าสุด',
  `PARENTPHONENO` varchar(32) NOT NULL COMMENT 'เบอร์ติดต่อ',
  `BANKACCOUNT` varchar(16) NOT NULL COMMENT 'เลขที่บัญชี',
  `HOMEADDRESS1` varchar(100) NOT NULL COMMENT 'ที่อยู่',
  `HOMEDISTRICT` varchar(32) NOT NULL COMMENT 'อำเภอ',
  `PROVINCENAME` varchar(100) NOT NULL COMMENT 'จังหวัด',
  `Expenses` int(6) NOT NULL COMMENT 'ค่าใช่จ่ายรายเดือน',
  `Talent` text NOT NULL COMMENT 'ความสามารถพิเศษ',
  `Re_status` varchar(1) NOT NULL COMMENT 'สถานะการสมัคร',
  `STUDENTSEX` varchar(1) NOT NULL COMMENT 'เพศ',
  `RELIGIONNAME` varchar(100) NOT NULL COMMENT 'ศาสนา',
  `STUDENTEMAIL` varchar(32) NOT NULL COMMENT 'อีเมลล์ติดต่อ',
  `Status` varchar(10) NOT NULL COMMENT 'สถานภาพรับทุน',
  `Bank_Name` varchar(30) NOT NULL COMMENT 'ชื่อบัญชี',
  `Tele_Number_update` varchar(10) NOT NULL COMMENT 'เบอร์ติดต่อล่าสุด',
  `Bank_id_update` varchar(15) NOT NULL COMMENT 'เลขที่บัญชีล่าสุด',
  `Bank_Name_update16` varchar(30) NOT NULL COMMENT 'ชื่อบัญชีล่าสุด',
  `Job_ID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_code`, `STUDENTNAME`, `FACULTYNAME`, `PROGRAMNAME`, `GPAX`, `PARENTPHONENO`, `BANKACCOUNT`, `HOMEADDRESS1`, `HOMEDISTRICT`, `PROVINCENAME`, `Expenses`, `Talent`, `Re_status`, `STUDENTSEX`, `RELIGIONNAME`, `STUDENTEMAIL`, `Status`, `Bank_Name`, `Tele_Number_update`, `Bank_id_update`, `Bank_Name_update16`, `Job_ID`) VALUES
(58112848, 'นายชวนัท ชาญอาวุธ', 'ส่่ิอไ', 'ิ่สิ้บ่ลางส่ยนี', '2.00', '51615', '1314125', '153', 'หงกมๆบ', 'วืย', 5, 'หฟืดยแยื', 'ย', 'ส', 'สืย', 'สืสส', 'สืืยืย', '1', 'สืสืย', 'สืืืยบ', 'สืสยย', 1),
(58118696, 'ภาณุพงศ์ จันทมุณี', 'สารสนเทศศาสตร์', 'เทคโนโลยีสารสนเทศ', '4.00', '0915241383', '787964152365', '107 ม.5 ต.ชะมาย', 'ทุ่งสง', 'นครศรีธรรมราช', 3000, 'ความสมารถด้านคอมพิวเตอร์', '0', 'M', 'พุทธ', 'panupong_963@hotmail.com', 'ดี', '1', '0622426715', '8281464785003', 'panupong jantamunee', 1),
(58122235, 'นางสาวสุรีพร สุขะวัลลิ', 'สารสนเทศศาสตร์', 'เทคโนโลยีสารสนเทศ', '3.99', '0622426715', '12345678910', '107 ม.5 ต.ชะม้อย', 'เมือง', 'นครศรีธรรมราช', 15948, 'วพ่ำ้', '-', '-', '--', 'Panda@hotmail.com', '-', '1', '-', '-', '-', 1),
(58142597, '----', '---------', '--------', '4.0', '----', '-----', '------', '---------', '-------', 1, '-ส้น', '-', '-', '----', '----', '----', '2', '----', '----', '-----', 1);

-- --------------------------------------------------------

--
-- Table structure for table `warning`
--

CREATE TABLE `warning` (
  `Notifications _ID` varchar(8) NOT NULL COMMENT 'เลขที่การแจ้งเตือน',
  `Notifications _Type` varchar(20) NOT NULL COMMENT 'หัวข้อผลการเตือน',
  `Notifications _Date` date NOT NULL COMMENT 'วันที่เตือน',
  `Notifications _Detail` varchar(20) NOT NULL COMMENT 'รายละเอียดการเตือน',
  `Notifications _Number` int(3) NOT NULL COMMENT 'จำนวนที่แจ้งเตือน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `Work_ID` int(8) NOT NULL COMMENT 'รหัสการทำงาน',
  `Work_Date` date DEFAULT NULL COMMENT 'วันที่การทำงาน',
  `Work_Start` text COMMENT 'เวลาเริ่มต้นการทำงาน',
  `Work_Finish` text COMMENT 'เวลาสิ้นสุดการทำงาน',
  `Work_ Status` varchar(20) DEFAULT NULL COMMENT 'สถานะการทำงาน(รับรองผล/รอรับรองผล)',
  `Work_ Hour` int(3) DEFAULT NULL COMMENT 'ชั่วโมงการทำงาน',
  `approval` varchar(10) DEFAULT NULL COMMENT 'ผลการอนุมัติ',
  `Work _S_ Hour` int(3) DEFAULT NULL COMMENT 'สรุปชั่วโมงการทำงาน',
  `Job_ID` varchar(8) DEFAULT NULL COMMENT 'เลขที่งาน',
  `Remuneration _ID` varchar(8) DEFAULT NULL COMMENT 'เลขที่อัตราตอบแทน',
  `Job_Description` varchar(80) DEFAULT NULL COMMENT 'รายละเอียดการทำงาน',
  `Work_status_certificate` varchar(1) DEFAULT NULL COMMENT 'สถานะรับรองผลการทำงาน(ผ่าน/ไม่ผ่าน)',
  `Reason_certifying` varchar(80) DEFAULT NULL COMMENT 'เหตุผลการไม่รับรอง',
  `Balance` int(5) DEFAULT NULL COMMENT 'ยอดเงิน',
  `Accumulated _hours` int(3) DEFAULT NULL COMMENT 'จำนวนชั่วโมงสะสม'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`Work_ID`, `Work_Date`, `Work_Start`, `Work_Finish`, `Work_ Status`, `Work_ Hour`, `approval`, `Work _S_ Hour`, `Job_ID`, `Remuneration _ID`, `Job_Description`, `Work_status_certificate`, `Reason_certifying`, `Balance`, `Accumulated _hours`) VALUES
(1, '2018-09-08', '2018-09-08', '2018-09-30', 'รับรองผล', 100, 'ผ่าน', 100, '1', '10254896', 'ขยัน', '1', 'ไม่อยากทำ', 12000, 70),
(354, '2018-09-07', '0000-00-00', '0000-00-00', NULL, NULL, NULL, NULL, NULL, NULL, '1234', NULL, NULL, NULL, NULL),
(355, '2018-09-27', '22:59', '01:58', NULL, NULL, NULL, NULL, NULL, NULL, '585', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `working_hours`
--

CREATE TABLE `working_hours` (
  `summary _ID` varchar(8) NOT NULL COMMENT 'เลขที่ผลการทำงาน',
  `Hour_ summary` int(3) NOT NULL COMMENT 'สรุปชั่วโมงการทำงานทั้งหมด',
  `summary _Balance` int(5) NOT NULL COMMENT 'สรุปยอดเงินทั้งหมด',
  `STUDENTCODE` varchar(16) NOT NULL COMMENT 'รหัสนักศึกษา',
  `employee_ID` varchar(8) NOT NULL COMMENT 'เลขที่พนักงาน',
  `Work_ID` varchar(8) NOT NULL COMMENT 'รหัสการทำงาน',
  `Remuneration_ID` varchar(8) NOT NULL COMMENT 'เลขที่อัตราค่าตอบแทน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`Schedule _ID`);

--
-- Indexes for table `compensation`
--
ALTER TABLE `compensation`
  ADD PRIMARY KEY (`Remuneration _ID`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`OFFICERID`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`Resume_ID`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`Job_ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`),
  ADD KEY `student_code` (`student_code`);

--
-- Indexes for table `register_form`
--
ALTER TABLE `register_form`
  ADD PRIMARY KEY (`Register_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_code`),
  ADD KEY `Job_ID` (`Job_ID`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`Work_ID`);

--
-- Indexes for table `working_hours`
--
ALTER TABLE `working_hours`
  ADD PRIMARY KEY (`summary _ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `Job_ID` int(8) NOT NULL AUTO_INCREMENT COMMENT 'รหัสเลขที่งาน', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `Work_ID` int(8) NOT NULL AUTO_INCREMENT COMMENT 'รหัสการทำงาน', AUTO_INCREMENT=356;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `fk_student_code` FOREIGN KEY (`student_code`) REFERENCES `student` (`student_code`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

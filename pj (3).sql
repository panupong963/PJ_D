-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2018 at 06:09 PM
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
  `Schedule_ID` varchar(8) NOT NULL COMMENT 'รหัสกำหนดการ',
  `semester` varchar(3) NOT NULL COMMENT 'เทอม',
  `Year` text NOT NULL COMMENT 'ปีการศึกษา',
  `Event_ Name` varchar(20) DEFAULT NULL COMMENT 'ชื่อกิจกรรม',
  `Start_Date` date NOT NULL COMMENT 'วันที่เริ่มต้น',
  `End_Date` date NOT NULL COMMENT 'วันที่สิ้นสุด',
  `Create_Data` text NOT NULL COMMENT 'ข้อมูลกิจกรรมงาน',
  `Last_update` text COMMENT 'ข้อมูลกิจกรรมล่าสุด'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`Schedule_ID`, `semester`, `Year`, `Event_ Name`, `Start_Date`, `End_Date`, `Create_Data`, `Last_update`) VALUES
('1', '1', '2561', NULL, '2018-11-16', '2018-12-25', 'ผู้เสนองานทำการเสนองาน', NULL),
('2', '1', '2561', NULL, '2018-10-01', '2018-10-07', 'เจ้าหน้าที่งานทุนพิจรณางานที่หน่วยงานเสนอ	', NULL),
('3', '1', '2561', NULL, '2018-10-01', '2018-10-07', 'นักศึกษาสมัครทุนทำงานพิเศษ	', NULL),
('4', '1', '2561', NULL, '2018-10-15', '2018-10-21', 'ผู้เสนองานคัดเลือกผู้สมัคร	', NULL),
('5', '1', '2561', NULL, '2018-10-22', '2018-10-29', 'ผู้เสนองานจัดสรรงานคงเหลือให้กับนักศึกษา	', NULL),
('6', '1', '2561', NULL, '2018-09-29', '2018-09-30', 'ประกาศผลการสมัคร	', NULL),
('7', '1', '2561', NULL, '2018-11-01', '2018-12-31', 'เริ่มปฏิบัติงาน\r\n', NULL);

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
  `OFFICERID` int(8) NOT NULL COMMENT 'เลขที่พนักงาน',
  `OFFICERNAME` varchar(100) NOT NULL COMMENT 'ชื่อพนักงาน',
  `Position` varchar(20) NOT NULL COMMENT 'ตำแหน่งงาน',
  `Jobs` varchar(20) NOT NULL COMMENT 'สังกัดงาน',
  `contact` varchar(20) NOT NULL COMMENT 'ช่องทางการติดต่อ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`OFFICERID`, `OFFICERNAME`, `Position`, `Jobs`, `contact`) VALUES
(147852, 'ชวนัน หารกล้า', '', '', ''),
(11223344, 'กล้า ไม่ทำงาน ', '', '', ''),
(12345678, 'อรนี ไม่รอด', '', '', ''),
(741852963, 'มนเสก จันเเก้ว\r\n', '', '', '');

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
  `Job_description2` text,
  `Job_description3` text,
  `Job_description4` text,
  `Job_description5` text,
  `Job_description6` text CHARACTER SET utf16,
  `term` int(1) DEFAULT NULL COMMENT 'ภาคเรียน',
  `year` int(4) DEFAULT NULL COMMENT 'ปีการศึกษา',
  `Remaining` int(3) DEFAULT NULL COMMENT 'ตำแหน่งงานคงเหลือ',
  `STUDENTCODE` varchar(16) DEFAULT NULL COMMENT 'รหัสนักศึกษา',
  `Attribute_applicants` text COMMENT 'คุณสมบัติผู้สมัคร',
  `Attribute_applicants2` text,
  `Attribute_applicants3` text,
  `Attribute_applicants4` text,
  `Attribute_applicants5` text CHARACTER SET utf32,
  `Attribute_applicants6` text,
  `Attribute_applicants7` text,
  `Attribute_applicants8` text,
  `Attribute_applicants9` text,
  `Attribute_applicants10` text,
  `Frist_date` date DEFAULT NULL COMMENT 'วันที่ทำงานวันแรก',
  `Sex` varchar(1) DEFAULT NULL COMMENT 'เพศ',
  `Working_time` date DEFAULT NULL COMMENT 'เวลาการทำงาน(เริ่มต้น-สิ้นสุดงาน)',
  `Receiving_number` int(2) DEFAULT NULL COMMENT 'จำนวนที่รับ',
  `Job_history` text COMMENT 'ประวัติการเสนองาน',
  `Job_status` varchar(1) DEFAULT NULL COMMENT 'สถานะงาน(ผ่าน/ไม่ผ่าน/รอการตรวจสอบ)',
  `Department` varchar(100) DEFAULT NULL COMMENT 'หน่วยงาน',
  `Reason_job` text NOT NULL COMMENT 'เหตุผล',
  `Contact` int(11) DEFAULT NULL COMMENT 'ติดต่อ',
  `ss` varchar(20) DEFAULT NULL,
  `OFFICERID` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`Job_ID`, `job_name_ss`, `Job_Name`, `Category`, `Job_description`, `Job_description2`, `Job_description3`, `Job_description4`, `Job_description5`, `Job_description6`, `term`, `year`, `Remaining`, `STUDENTCODE`, `Attribute_applicants`, `Attribute_applicants2`, `Attribute_applicants3`, `Attribute_applicants4`, `Attribute_applicants5`, `Attribute_applicants6`, `Attribute_applicants7`, `Attribute_applicants8`, `Attribute_applicants9`, `Attribute_applicants10`, `Frist_date`, `Sex`, `Working_time`, `Receiving_number`, `Job_history`, `Job_status`, `Department`, `Reason_job`, `Contact`, `ss`, `OFFICERID`) VALUES
(1, 'จารุวรรณ บัวเเย้ม', 'ขนของ', 'ธุรการ', 'ขนของ', NULL, NULL, NULL, NULL, NULL, 1, 2561, 8, '58118696', 'เเข็งเเรง', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-08', 'Y', '2018-09-30', 10, 'ทำงานดี', '1', 'ศูนย์บรรณาสารเเละสื่อการศึกษา', '', 955848786, 'อาคารวิชาการ5', 12345678),
(2, 'จิตรา การแก้ว', 'ถ่ายเอกสาร', 'บริการ', 'ถ่ายเอกสารต่างๆ', NULL, NULL, NULL, NULL, NULL, 1, 2561, NULL, '58118696', 'เเข็งเเรง', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-22', 'M', '2018-09-29', 20, 'ทำงานดี', '1', 'ศูนณ์เครื่องมือวิทยาศาสตร์และเทคโนโลยี', '', 622426715, 'อาคารวิชาการ3', 12345678),
(3, 'อามิต ก้านเเก้ว', 'ประกอบคอมพิวเตอร์', 'บริการ', 'ซ่อมคอม', NULL, NULL, NULL, NULL, NULL, 1, 2561, NULL, '58118696', 'เเข็งเเรง มีความรู้ทางด้านคอมพิวเตอร์', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-22', 'M', '2018-09-29', 20, 'ทำงานดี', '2', 'ศูนณ์เครื่องมือวิทยาศาสตร์และเทคโนโลยี', 'ไม่ผ่าน', 622426715, 'อาคารวิชาการ7', 12345678);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(8) NOT NULL,
  `username` varchar(10) DEFAULT NULL,
  `student_code` int(8) DEFAULT NULL,
  `password` varchar(20) NOT NULL,
  `ST` int(1) DEFAULT NULL,
  `OFFICERID` int(8) DEFAULT NULL COMMENT 'id พนักงาน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `student_code`, `password`, `ST`, `OFFICERID`) VALUES
(1, '58118696', 58118696, '123456', 1, NULL),
(2, '58122235', 58122235, '123456', 1, NULL),
(3, '58112848', 58112848, '123456', 2, NULL),
(4, '58142597', 58142597, '123456', 4, NULL),
(5, '58112233', 58112233, '123456', 3, NULL),
(6, '12345678', NULL, '123456', 4, 12345678),
(7, '11223344', NULL, '123456', 5, 87654321),
(8, '741852963', NULL, '123456', 2, 741852963),
(9, '147852', NULL, '123456', 3, 147852);

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
  `Moo` varchar(10) DEFAULT NULL COMMENT 'หมู่',
  `district` varchar(20) DEFAULT NULL COMMENT 'ตำบล',
  `Road` varchar(50) DEFAULT NULL COMMENT 'ถนน / ซอย',
  `HOMEDISTRICT` varchar(32) NOT NULL COMMENT 'อำเภอ',
  `PROVINCENAME` varchar(100) NOT NULL COMMENT 'จังหวัด',
  `Zip_code` int(6) DEFAULT NULL COMMENT 'รหัสไปรษณีย์',
  `Expenses` int(6) NOT NULL COMMENT 'ค่าใช่จ่ายรายเดือน',
  `Talent` text NOT NULL COMMENT 'ความสามารถพิเศษ',
  `Necessary` text NOT NULL COMMENT 'ความจำเป็น',
  `Re_status` varchar(1) NOT NULL COMMENT 'สถานะการสมัคร',
  `STUDENTSEX` varchar(1) NOT NULL COMMENT 'เพศ',
  `RELIGIONNAME` varchar(100) NOT NULL COMMENT 'ศาสนา',
  `Nationality` varchar(10) DEFAULT NULL COMMENT 'สัญชาติ',
  `STUDENTEMAIL` varchar(32) NOT NULL COMMENT 'อีเมลล์ติดต่อ',
  `Status` varchar(10) NOT NULL COMMENT 'สถานภาพรับทุน',
  `Bank_Name` varchar(30) NOT NULL COMMENT 'ชื่อบัญชี',
  `Tele_Number_update` varchar(10) NOT NULL COMMENT 'เบอร์ติดต่อล่าสุด',
  `Bank_id_update` varchar(15) NOT NULL COMMENT 'เลขที่บัญชีล่าสุด',
  `Bank_Name_update16` varchar(30) NOT NULL COMMENT 'ชื่อบัญชีล่าสุด',
  `Career_History` varchar(1) DEFAULT NULL COMMENT 'ประวัติการทำงาน',
  `Reason_ST` text NOT NULL COMMENT 'เหตุผล',
  `Job_ID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_code`, `STUDENTNAME`, `FACULTYNAME`, `PROGRAMNAME`, `GPAX`, `PARENTPHONENO`, `BANKACCOUNT`, `HOMEADDRESS1`, `Moo`, `district`, `Road`, `HOMEDISTRICT`, `PROVINCENAME`, `Zip_code`, `Expenses`, `Talent`, `Necessary`, `Re_status`, `STUDENTSEX`, `RELIGIONNAME`, `Nationality`, `STUDENTEMAIL`, `Status`, `Bank_Name`, `Tele_Number_update`, `Bank_id_update`, `Bank_Name_update16`, `Career_History`, `Reason_ST`, `Job_ID`) VALUES
(58112233, 'จิตใจ เเซ่ตั้ง', 'เทคนิคการเเพทย์', 'เเพทย์', '2.00', '0887854125', '581128484125', '37/5', '1', 'หนองหง', '-', 'นาหลวงเสน', 'พัทลุง', 80145, 3000, 'เเก้ไข', 'ลอง', '1', 'M', 'พุทธ', 'ไทย', '', '', '2', '', '', '', NULL, '', 1),
(58112848, 'นายชวนัท ชาญอาวุธ', 'ส่่ิอไ', 'ิ่สิ้บ่ลางส่ยนี', '2.00', '51615', '1314125', '153', NULL, NULL, NULL, 'หงกมๆบ', 'วืย', NULL, 5, 'หฟืดยแยื', '', '2', 'ส', 'สืย', NULL, 'สืสส', 'สืืยืย', '1', 'สืสืย', 'สืืืยบ', 'สืสยย', NULL, '', 1),
(58118696, 'ภาณุพงศ์ จันทมุณี', 'สารสนเทศศาสตร์', 'เทคโนโลยีสารสนเทศ', '4.00', '0915241383', '828147852369', '107', '5', 'ชะมาย', '-', 'ทุ่งสง', 'นครศรีธรรมราช', 80110, 15000, 'กินเก่ง', 'เดือนร้อนทางการเงิน', '1', 'M', 'พุทธ', 'ไทย', 'panupong_963@hotmail.com', 'ดี', '2', '0622426715', '8281464785003', 'panupong jantamunee', '0', '', 1),
(58122235, 'นางสาวสุรีพร สุขะวัลลิ', 'สารสนเทศศาสตร์', 'เทคโนโลยีสารสนเทศ', '3.99', '0622426715', '', '107 ม.5 ต.ชะม้อย', NULL, NULL, NULL, 'เมือง', 'นครศรีธรรมราช', NULL, 0, '', '', '1', '-', '--', NULL, 'Panda@hotmail.com', '-', '1', '-', '-', '-', NULL, '', 2),
(58142597, '----', '---------', '--------', '4.0', '----', '-----', '------', NULL, NULL, NULL, '---------', '-------', NULL, 1, '-ส้น', '', '1', '-', '----', NULL, '----', '----', '2', '----', '----', '-----', NULL, '', 2);

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
  `Work_Start` int(3) DEFAULT NULL COMMENT 'เวลาเริ่มต้นการทำงาน/ นาที',
  `Work_Finish` int(3) DEFAULT NULL COMMENT 'เวลาสิ้นสุดการทำงาน / นาที',
  `Work_Start2` int(3) DEFAULT NULL,
  `Work_Finish2` int(3) DEFAULT NULL,
  `Work_Status` varchar(20) DEFAULT NULL COMMENT 'สถานะการทำงาน(รับรองผล/รอรับรองผล)',
  `Work_Hour` int(4) DEFAULT NULL COMMENT 'ชั่วโมงการทำงาน',
  `approval` varchar(10) DEFAULT NULL COMMENT 'ผลการอนุมัติ',
  `Work _S_ Hour` int(3) DEFAULT NULL COMMENT 'สรุปชั่วโมงการทำงาน',
  `Job_ID` int(8) DEFAULT NULL COMMENT 'เลขที่งาน',
  `Remuneration _ID` varchar(8) DEFAULT NULL COMMENT 'เลขที่อัตราตอบแทน',
  `Job_Description` varchar(80) DEFAULT NULL COMMENT 'รายละเอียดการทำงาน',
  `Work_status_certificate` varchar(1) DEFAULT NULL COMMENT 'สถานะรับรองผลการทำงาน(ผ่าน/ไม่ผ่าน)',
  `Reason_certifying` varchar(80) DEFAULT NULL COMMENT 'เหตุผลการไม่รับรอง',
  `Balance` int(5) DEFAULT NULL COMMENT 'ยอดเงิน',
  `Accumulated _hours` int(3) DEFAULT NULL COMMENT 'จำนวนชั่วโมงสะสม',
  `STUDENTCODE` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`Work_ID`, `Work_Date`, `Work_Start`, `Work_Finish`, `Work_Start2`, `Work_Finish2`, `Work_Status`, `Work_Hour`, `approval`, `Work _S_ Hour`, `Job_ID`, `Remuneration _ID`, `Job_Description`, `Work_status_certificate`, `Reason_certifying`, `Balance`, `Accumulated _hours`, `STUDENTCODE`) VALUES
(361, '2018-09-21', 8, 9, 0, 0, '1', 60, NULL, NULL, 1, NULL, 'กรอกเอกสาร', NULL, NULL, NULL, NULL, 58118696),
(363, '2018-09-23', 10, 11, 0, 30, '1', 90, NULL, NULL, 1, NULL, 'ขนของอาคารเรียนรวม 3 ', NULL, NULL, NULL, NULL, 58118696),
(364, '2018-09-25', 8, 8, 20, 40, '1', 20, NULL, NULL, 1, NULL, '25', NULL, NULL, NULL, NULL, 58118696),
(372, '2018-09-25', 8, 9, 30, 30, '2', 60, NULL, NULL, 1, NULL, 'ฟอด', NULL, 'ลองอีกที', NULL, NULL, 58118696),
(373, '2018-09-28', 8, 9, 30, 30, '2', 60, NULL, NULL, 1, NULL, 'ลอง+', NULL, '', NULL, NULL, 58118696),
(374, '2018-09-29', 10, 11, 0, 0, '2', 60, NULL, NULL, 1, NULL, 'อิอิ', NULL, '12121', NULL, NULL, 58118696),
(375, '2018-09-30', 8, 9, 0, 0, '1', 60, NULL, NULL, 1, NULL, '858', NULL, NULL, NULL, NULL, 58118696),
(376, '2018-10-01', 8, 9, 30, 0, '0', 90, NULL, NULL, 1, NULL, '74', NULL, NULL, NULL, NULL, 58118696);

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
  ADD PRIMARY KEY (`Schedule_ID`);

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
  ADD KEY `student_code` (`student_code`),
  ADD KEY `OFFICERID` (`OFFICERID`);

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
  ADD PRIMARY KEY (`Work_ID`),
  ADD KEY `Job_ID` (`Job_ID`);

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
  MODIFY `Job_ID` int(8) NOT NULL AUTO_INCREMENT COMMENT 'รหัสเลขที่งาน', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `Work_ID` int(8) NOT NULL AUTO_INCREMENT COMMENT 'รหัสการทำงาน', AUTO_INCREMENT=377;

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

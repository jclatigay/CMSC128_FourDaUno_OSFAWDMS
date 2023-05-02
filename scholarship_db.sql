-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 05:09 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scholarship_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(4) NOT NULL,
  `givenname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `givenname`, `middlename`, `lastname`, `username`, `password`) VALUES
(1001, 'Jester', 'Mortero', 'Bustamante', 'admin', 'jes'),
(1002, 'Rosseau Nilo', 'Gamama', 'Maamor', 'rg', 'password'),
(1003, 'John Isaac', 'Cura', 'Latigay', 'john', 'admin'),
(1004, 'David Andre', 'S', 'Barredo', 'david', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `course_info`
--

CREATE TABLE `course_info` (
  `Student_ID` int(10) NOT NULL,
  `college` varchar(50) NOT NULL,
  `course` varchar(100) NOT NULL,
  `year_level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_info`
--

INSERT INTO `course_info` (`Student_ID`, `college`, `course`, `year_level`) VALUES
(20184526, 'College of Social Science', 'BS Economics', 2),
(20190463, 'College of Science', 'BS Computer Science', 3),
(20201011, 'College of Science', 'BS Computer Science', 2),
(20201022, 'College of Science', 'BS Computer Science', 3),
(20201044, 'College of Social Science', 'BS Economics', 3),
(20201347, 'College of Social Science', 'BA Anthropology', 3),
(20202472, 'College of Science', 'BS Biology', 2),
(20202864, 'College of Science', 'BS Physics', 4),
(20206754, 'College of Social Science', 'BA Social Science major in History', 1),
(20212034, 'College of Science', 'BS Mathematics', 1);

-- --------------------------------------------------------

--
-- Table structure for table `other_grants`
--

CREATE TABLE `other_grants` (
  `Student_ID` int(10) NOT NULL,
  `other_grant_source` varchar(50) NOT NULL,
  `other_grant_type` varchar(30) NOT NULL,
  `other_grant_relperiod` varchar(30) NOT NULL,
  `other_grant_start` year(4) DEFAULT NULL,
  `other_grant_end` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `other_grants`
--

INSERT INTO `other_grants` (`Student_ID`, `other_grant_source`, `other_grant_type`, `other_grant_relperiod`, `other_grant_start`, `other_grant_end`) VALUES
(20184526, '', '', '', 0000, 0000),
(20190463, '', '', '', 0000, 0000),
(20201011, 'SKOO Foundation', 'Private', 'Semestral', 2022, 2024),
(20201022, '', '', '', NULL, NULL),
(20201044, '', '', '', NULL, NULL),
(20201347, '', '', '', NULL, NULL),
(20202472, '', '', '', NULL, NULL),
(20202864, '', '', '', NULL, NULL),
(20206754, '', '', '', NULL, NULL),
(20212034, '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `relative_dependent_occupation`
--

CREATE TABLE `relative_dependent_occupation` (
  `Student_ID` int(10) NOT NULL,
  `relative_name` varchar(50) NOT NULL,
  `relative_occupation` varchar(50) NOT NULL,
  `rel_annual_gross_salary` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `relative_dependent_occupation`
--

INSERT INTO `relative_dependent_occupation` (`Student_ID`, `relative_name`, `relative_occupation`, `rel_annual_gross_salary`) VALUES
(20184526, '', '', 0),
(20190463, '', '', 0),
(20201011, '', '', 0),
(20201022, '', '', 0),
(20201044, '', '', 0),
(20201347, '', '', 0),
(20202472, '', '', 0),
(20202864, '', '', 0),
(20206754, '', '', 0),
(20212034, 'Watis Wong', 'Retired', 144000);

-- --------------------------------------------------------

--
-- Table structure for table `scholarship_info`
--

CREATE TABLE `scholarship_info` (
  `Student_ID` int(10) NOT NULL,
  `scholarship_source` varchar(50) NOT NULL,
  `scholarship_type` varchar(50) NOT NULL,
  `release_period` varchar(20) NOT NULL,
  `period_start` year(4) NOT NULL,
  `period_end` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scholarship_info`
--

INSERT INTO `scholarship_info` (`Student_ID`, `scholarship_source`, `scholarship_type`, `release_period`, `period_start`, `period_end`) VALUES
(20184526, 'SMIC', 'Private', 'Annual', 2021, 2024),
(20190463, 'CHED', 'Government', 'Semestral', 2022, 2024),
(20201011, 'DOST', 'Government', 'Semestral', 2022, 2024),
(20201022, 'CHED', 'Government', 'Semestral', 2022, 2024),
(20201044, 'Applet Inc.', 'Private', 'Annual', 2022, 2024),
(20201347, 'OWWA', 'Government', 'Semestral', 2019, 2022),
(20202472, 'DOST', 'Government', 'Semestral', 2021, 2025),
(20202864, 'DOST', 'Government', 'Semestral', 2019, 2022),
(20206754, 'CHED', 'Government', 'Semestral', 2022, 2026),
(20212034, 'DOST', 'Government', 'Semestral', 2021, 2026);

-- --------------------------------------------------------

--
-- Table structure for table `scholar_basic_info`
--

CREATE TABLE `scholar_basic_info` (
  `Student_ID` int(10) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `given_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `birthdate` date NOT NULL,
  `citizenship` varchar(30) NOT NULL,
  `civil_status` varchar(30) NOT NULL,
  `permanent_address` varchar(100) NOT NULL,
  `present_address` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `mobile_number` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `scholar_basic_info`
--

INSERT INTO `scholar_basic_info` (`Student_ID`, `last_name`, `given_name`, `middle_name`, `sex`, `birthdate`, `citizenship`, `civil_status`, `permanent_address`, `present_address`, `email_address`, `mobile_number`) VALUES
(20184526, 'Diana', 'Jane', 'Rose', 'Female', '2000-12-30', 'Filipino', 'Single', 'Jose Abad Santos Dr, Baguio City', 'Jose Abad Santos Dr, Baguio City', 'janediana@gmail.com', '09516841655'),
(20190463, 'Doe', 'John', 'The', 'Male', '2001-07-23', 'Filipino', 'Single', '28 Kisad Rd, Baguio City', '28 Kisad Rd, Baguio City', 'johndoe@gmail.com', '09115451574'),
(20201011, 'Dela Cruz', 'Juan', 'Uno', 'Male', '2000-07-10', 'Filipino', 'Single', '#123 Juan Village, Baguio City', '#123 Juan Village, Baguio City', 'Juan123@gmail.com', '09210811213'),
(20201022, 'Haveuben', 'Ben', 'Where', 'Male', '2001-12-25', 'Filipino', 'Single', '#234 Lit Street, Baguio City', '#234 Lit Street, Baguio City', 'benwben@gmail.com', '09133652434'),
(20201044, 'Wagpo', 'Akio', 'Batapa', 'Female', '2002-01-27', 'Filipino', 'Single', '#15 Liwanag Hills, Baguio City', '#15 Liwanag Hills, Baguio City', 'Akiobwagpo@gmail.com', '09635475835'),
(20201347, 'Tan', 'Mike', 'Si', 'Male', '2000-09-28', 'Filipino', 'Single', 'Lourdes, Baguio City', 'Lourdes, Baguio City', 'tanmike@gmail.com', '09466309209'),
(20202472, 'Mortero', 'Jes', 'Lucina', 'Male', '2002-10-02', 'Filipino', 'Single', 'Aurora Hills, Baguio City', 'Aurora Hills, Baguio City', 'jesmortero@gmail.com', '09129356789'),
(20202864, 'Peter', 'Simon', 'Park', 'Male', '2001-04-12', 'Filipino', 'Single', 'Magsaysay Ave, Baguio City', 'Magsaysay Ave, Baguio City', 'peterpark@gmail.com', '09468128496'),
(20206754, 'Nelmida', 'Junel', 'Pascua', 'Male', '2002-06-28', 'Filipino', 'Single', 'Mirador Hill, Baguio City', 'Mirador Hill, Baguio City', 'junelpnelmida@gmail.com', '09916452098'),
(20212034, 'Wong', 'Sam', 'Ting', 'Female', '2003-04-26', 'Filipino', 'Single', '#10 Dangda Building, Baguio City', '#12 Ting St, China Village, Quezon City', 'Samtwong@gmail.com', '09675428345');

-- --------------------------------------------------------

--
-- Table structure for table `studparents_occupation`
--

CREATE TABLE `studparents_occupation` (
  `Student_ID` int(10) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `father_occupation` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `mother_occupation` varchar(50) NOT NULL,
  `annual_gross_salary` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studparents_occupation`
--

INSERT INTO `studparents_occupation` (`Student_ID`, `father_name`, `father_occupation`, `mother_name`, `mother_occupation`, `annual_gross_salary`) VALUES
(20184526, 'Joseph Smiths', 'Businessperson', 'Rose Smith', 'Businessperson', 400000),
(20190463, 'Johnny Doe', 'Firefighter', 'Johanna Doe', 'Nurse', 250000),
(20201011, 'Juano Dela Cruz', 'Farmer', 'Juanita Dela Cruz', 'Farmer', 200000),
(20201022, 'Benner Haveuben', 'Policeman', 'Lota Haveuben', 'Policewoman', 350000),
(20201044, 'Sonny Wagpo', 'Bank Clerk', 'Shina Wagpo', 'Teacher', 290000),
(20201347, 'Michael Tan', 'Businessperson', 'Jasmine Tan', 'Office clerk', 210000),
(20202472, 'Wilson Mortero', 'Carpenter', 'Dahlia Mortero', 'Secretariat', 190000),
(20202864, 'Rizal Park', 'Poet', 'Jennifer Park', 'Entrepreneur', 500000),
(20206754, 'Jun Nelmida', 'Entrepreneur', 'Edrianna Nelmida', 'Barangay Chairperson', 200000),
(20212034, 'Man Wong', 'Retired', 'Noting Wong', 'Retired', 144000);

-- --------------------------------------------------------

--
-- Table structure for table `stud_allowance_dependency`
--

CREATE TABLE `stud_allowance_dependency` (
  `Student_ID` int(10) NOT NULL,
  `parent_dependent` varchar(3) NOT NULL,
  `relative_dependent` varchar(3) NOT NULL,
  `employment_dependent` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stud_allowance_dependency`
--

INSERT INTO `stud_allowance_dependency` (`Student_ID`, `parent_dependent`, `relative_dependent`, `employment_dependent`) VALUES
(20184526, 'No', 'No', 'Yes'),
(20190463, 'Yes', 'No', 'No'),
(20201011, 'Yes', 'No', 'No'),
(20201022, 'Yes', 'No', 'No'),
(20201044, 'No', 'Yes', 'Yes'),
(20201347, 'Yes', 'No', 'No'),
(20202472, 'Yes', 'No', 'No'),
(20202864, 'Yes', 'No', 'No'),
(20206754, 'Yes', 'No', 'No'),
(20212034, 'Yes', 'Yes', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `stud_employ_status`
--

CREATE TABLE `stud_employ_status` (
  `Student_ID` int(10) NOT NULL,
  `employ_status` varchar(30) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `shift_length` varchar(30) NOT NULL,
  `stud_annual_gross_salary` int(10) NOT NULL,
  `employer_name` varchar(50) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `work_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stud_employ_status`
--

INSERT INTO `stud_employ_status` (`Student_ID`, `employ_status`, `occupation`, `shift_length`, `stud_annual_gross_salary`, `employer_name`, `company_name`, `work_address`) VALUES
(20184526, 'Employed', 'Saleslady', 'Part-time', 100000, 'Ei Sy', 'SMIC', 'SM Baguio'),
(20190463, 'Unemployed', 'Student', '', 0, '', '', ''),
(20200535, 'notemployed', 'Student', 'full', 0, '', '', ''),
(20201011, 'Unemployed', 'Student', '', 0, '', '', ''),
(20201022, 'Unemployed', 'Student', '', 0, '', '', ''),
(20201044, 'Employed', 'Accountant', 'Part-time', 120000, 'Tim Raw', 'Applet, Inc', 'Applet Headquarters, General Road, Baguio CIty'),
(20201347, 'Unemployed', 'Student', '', 0, '', '', ''),
(20202472, 'Unemployed', 'Student', '', 0, '', '', ''),
(20202864, 'Self-Employed', 'Freelance', 'Part-time', 150000, 'Simon Peter', '', 'Magsaysay Ave, Baguio City'),
(20206754, 'Unemployed', 'Student', '', 0, '', '', ''),
(20212034, 'Unemployed', 'Student', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Student_ID` int(10) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `givenname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `upmail` varchar(30) NOT NULL,
  `secretword` varchar(30) NOT NULL,
  `favething` varchar(30) NOT NULL,
  `faveperson` varchar(30) NOT NULL,
  `favedate` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Student_ID`, `lastname`, `givenname`, `middlename`, `username`, `upmail`, `secretword`, `favething`, `faveperson`, `favedate`, `password`) VALUES
(20184526, 'Diana', 'Jane', 'Rose', 'rose', 'jdrose@up.edu.ph', 'Rose', 'Rose', 'Rose', '2010-05-25', 'rose'),
(20190463, 'Doe', 'John', 'The', 'doe', 'jtdoe@up.edu.ph', 'Doe', 'Doe', 'Doe', '2014-07-15', 'doe'),
(202001354, 'Latigay', 'John Isaac', 'Cura', 'john', 'jclatigay@up.edu.ph', 'Secret', 'Thing', 'Person', '2001-04-06', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_info`
--
ALTER TABLE `course_info`
  ADD PRIMARY KEY (`Student_ID`);

--
-- Indexes for table `other_grants`
--
ALTER TABLE `other_grants`
  ADD PRIMARY KEY (`Student_ID`);

--
-- Indexes for table `relative_dependent_occupation`
--
ALTER TABLE `relative_dependent_occupation`
  ADD PRIMARY KEY (`Student_ID`);

--
-- Indexes for table `scholarship_info`
--
ALTER TABLE `scholarship_info`
  ADD PRIMARY KEY (`Student_ID`);

--
-- Indexes for table `scholar_basic_info`
--
ALTER TABLE `scholar_basic_info`
  ADD PRIMARY KEY (`Student_ID`);

--
-- Indexes for table `studparents_occupation`
--
ALTER TABLE `studparents_occupation`
  ADD PRIMARY KEY (`Student_ID`);

--
-- Indexes for table `stud_allowance_dependency`
--
ALTER TABLE `stud_allowance_dependency`
  ADD PRIMARY KEY (`Student_ID`);

--
-- Indexes for table `stud_employ_status`
--
ALTER TABLE `stud_employ_status`
  ADD PRIMARY KEY (`Student_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Student_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1005;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

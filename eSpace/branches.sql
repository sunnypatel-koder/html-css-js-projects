-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2022 at 06:57 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `branches`
--

-- --------------------------------------------------------

--
-- Table structure for table `civil-1st-sem`
--

CREATE TABLE `civil-1st-sem` (
  `s/n` int(11) NOT NULL,
  `subjects` varchar(70) NOT NULL,
  `chapter1` varchar(70) NOT NULL,
  `chapter2` varchar(70) NOT NULL,
  `chapter3` varchar(70) NOT NULL,
  `chapter4` varchar(70) NOT NULL,
  `chapter5` varchar(70) NOT NULL,
  `chapter6` varchar(70) NOT NULL,
  `chapter7` varchar(70) NOT NULL,
  `chapter8` varchar(70) NOT NULL,
  `chapter9` varchar(70) NOT NULL,
  `chapter10` varchar(70) NOT NULL,
  `chapter11` varchar(70) NOT NULL,
  `chapter12` varchar(70) NOT NULL,
  `chapter13` varchar(70) NOT NULL,
  `chapter14` varchar(70) NOT NULL,
  `chapter15` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `civil-2nd-sem`
--

CREATE TABLE `civil-2nd-sem` (
  `s/n` int(11) NOT NULL,
  `subjects` varchar(70) NOT NULL,
  `chapter1` varchar(70) NOT NULL,
  `chapter2` varchar(70) NOT NULL,
  `chapter3` varchar(70) NOT NULL,
  `chapter4` varchar(70) NOT NULL,
  `chapter5` varchar(70) NOT NULL,
  `chapter6` varchar(70) NOT NULL,
  `chapter7` varchar(70) NOT NULL,
  `chapter8` varchar(70) NOT NULL,
  `chapter9` varchar(70) NOT NULL,
  `chapter10` varchar(70) NOT NULL,
  `chapter11` varchar(70) NOT NULL,
  `chapter12` varchar(70) NOT NULL,
  `chapter13` varchar(70) NOT NULL,
  `chapter14` varchar(70) NOT NULL,
  `chapter15` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `civil-3rd-sem`
--

CREATE TABLE `civil-3rd-sem` (
  `s/n` int(11) NOT NULL,
  `subjects` varchar(70) NOT NULL,
  `chapter1` varchar(70) NOT NULL,
  `chapter2` varchar(70) NOT NULL,
  `chapter3` varchar(70) NOT NULL,
  `chapter4` varchar(70) NOT NULL,
  `chapter5` varchar(70) NOT NULL,
  `chapter6` varchar(70) NOT NULL,
  `chapter7` varchar(70) NOT NULL,
  `chapter8` varchar(70) NOT NULL,
  `chapter9` varchar(70) NOT NULL,
  `chapter10` varchar(70) NOT NULL,
  `chapter11` varchar(70) NOT NULL,
  `chapter12` varchar(70) NOT NULL,
  `chapter13` varchar(70) NOT NULL,
  `chapter14` varchar(70) NOT NULL,
  `chapter15` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `civil-4th-sem`
--

CREATE TABLE `civil-4th-sem` (
  `s/n` int(11) NOT NULL,
  `subjects` varchar(70) NOT NULL,
  `chapter1` varchar(70) NOT NULL,
  `chapter2` varchar(70) NOT NULL,
  `chapter3` varchar(70) NOT NULL,
  `chapter4` varchar(70) NOT NULL,
  `chapter5` varchar(70) NOT NULL,
  `chapter6` varchar(70) NOT NULL,
  `chapter7` varchar(70) NOT NULL,
  `chapter8` varchar(70) NOT NULL,
  `chapter9` varchar(70) NOT NULL,
  `chapter10` varchar(70) NOT NULL,
  `chapter11` varchar(70) NOT NULL,
  `chapter12` varchar(70) NOT NULL,
  `chapter13` varchar(70) NOT NULL,
  `chapter14` varchar(70) NOT NULL,
  `chapter15` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `civil-5th-sem`
--

CREATE TABLE `civil-5th-sem` (
  `s/n` int(11) NOT NULL,
  `subjects` varchar(70) NOT NULL,
  `chapter1` varchar(70) NOT NULL,
  `chapter2` varchar(70) NOT NULL,
  `chapter3` varchar(70) NOT NULL,
  `chapter4` varchar(70) NOT NULL,
  `chapter5` varchar(70) NOT NULL,
  `chapter6` varchar(70) NOT NULL,
  `chapter7` varchar(70) NOT NULL,
  `chapter8` varchar(70) NOT NULL,
  `chapter9` varchar(70) NOT NULL,
  `chapter10` varchar(70) NOT NULL,
  `chapter11` varchar(70) NOT NULL,
  `chapter12` varchar(70) NOT NULL,
  `chapter13` varchar(70) NOT NULL,
  `chapter14` varchar(70) NOT NULL,
  `chapter15` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `civil-6th-sem`
--

CREATE TABLE `civil-6th-sem` (
  `s/n` int(11) NOT NULL,
  `subjects` varchar(70) NOT NULL,
  `chapter1` varchar(70) NOT NULL,
  `chapter2` varchar(70) NOT NULL,
  `chapter3` varchar(70) NOT NULL,
  `chapter4` varchar(70) NOT NULL,
  `chapter5` varchar(70) NOT NULL,
  `chapter6` varchar(70) NOT NULL,
  `chapter7` varchar(70) NOT NULL,
  `chapter8` varchar(70) NOT NULL,
  `chapter9` varchar(70) NOT NULL,
  `chapter10` varchar(70) NOT NULL,
  `chapter11` varchar(70) NOT NULL,
  `chapter12` varchar(70) NOT NULL,
  `chapter13` varchar(70) NOT NULL,
  `chapter14` varchar(70) NOT NULL,
  `chapter15` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cse-1st-sem`
--

CREATE TABLE `cse-1st-sem` (
  `s/n` int(11) NOT NULL,
  `subjects` varchar(70) NOT NULL,
  `chapter1` varchar(70) NOT NULL,
  `chapter2` varchar(70) NOT NULL,
  `chapter3` varchar(70) NOT NULL,
  `chapter4` varchar(70) NOT NULL,
  `chapter5` varchar(70) NOT NULL,
  `chapter6` varchar(70) NOT NULL,
  `chapter7` varchar(70) NOT NULL,
  `chapter8` varchar(70) NOT NULL,
  `chapter9` varchar(70) NOT NULL,
  `chapter10` varchar(70) NOT NULL,
  `chapter11` varchar(70) NOT NULL,
  `chapter12` varchar(70) NOT NULL,
  `chapter13` varchar(70) NOT NULL,
  `chapter14` varchar(70) NOT NULL,
  `chapter15` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cse-1st-sem`
--

INSERT INTO `cse-1st-sem` (`s/n`, `subjects`, `chapter1`, `chapter2`, `chapter3`, `chapter4`, `chapter5`, `chapter6`, `chapter7`, `chapter8`, `chapter9`, `chapter10`, `chapter11`, `chapter12`, `chapter13`, `chapter14`, `chapter15`) VALUES
(1, 'Communication_Skill_-_I\r\n', 'Basics of Communication ', 'Application of Grammar ', 'Reading Skill ', 'Writing Skill ', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'Fundamentals_of_Computer_and_Information_Technology', 'Fundamentals of Computer ', 'Data Representation ', 'DOS & Windows Operating Systems', 'Fundamentals of Internet', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'Applied_Mathematics_-_I', 'Algebra -I', 'Algebra- II', 'Trigonometry', 'Differential Calculus - I', 'Differential Calculus - II ', '', '', '', '', '', '', '', '', '', ''),
(4, 'Applied_Physics_-_I', 'Units and Dimensions', 'Force and Motion', 'Work, Power and Energy', 'Rotational Motion ', 'Motion of planets and satellites', 'Properties of Matter', 'Heat and Thermodynamics ', '', '', '', '', '', '', '', ''),
(5, 'Applied_Chemistry', 'Atomic Structure, Periodic Table and Chemical Bonding', 'Fuelsand Lubricants ', 'Water', 'Electrochemistry', 'Corrosion and its Control ', 'Organic compounds, Polymers and Plastics', '', '', '', '', '', '', '', '', ''),
(6, 'Technical_Drawing', 'Drawing Instruments and their uses', 'Active Devices', 'Orthographic projections', 'Isometric projection', 'Logic gates(With the help of rough sketch/clues given)', 'Graphical Representation of data', 'Circuit Diagram(With the help of rough sketch/clues given) ', '', '', '', '', '', '', '', ''),
(7, 'Workshop_Practice', 'Fitting Shop', 'Sheet Metal Shop', 'Carpentry Shop', 'Painting And Polishing Shop', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cse-2nd-sem`
--

CREATE TABLE `cse-2nd-sem` (
  `s/n` int(11) NOT NULL,
  `subjects` varchar(70) NOT NULL,
  `chapter1` varchar(70) NOT NULL,
  `chapter2` varchar(70) NOT NULL,
  `chapter3` varchar(70) NOT NULL,
  `chapter4` varchar(70) NOT NULL,
  `chapter5` varchar(70) NOT NULL,
  `chapter6` varchar(70) NOT NULL,
  `chapter7` varchar(70) NOT NULL,
  `chapter8` varchar(70) NOT NULL,
  `chapter9` varchar(70) NOT NULL,
  `chapter10` varchar(70) NOT NULL,
  `chapter11` varchar(70) NOT NULL,
  `chapter12` varchar(70) NOT NULL,
  `chapter13` varchar(70) NOT NULL,
  `chapter14` varchar(70) NOT NULL,
  `chapter15` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cse-2nd-sem`
--

INSERT INTO `cse-2nd-sem` (`s/n`, `subjects`, `chapter1`, `chapter2`, `chapter3`, `chapter4`, `chapter5`, `chapter6`, `chapter7`, `chapter8`, `chapter9`, `chapter10`, `chapter11`, `chapter12`, `chapter13`, `chapter14`, `chapter15`) VALUES
(3, 'Applied_Mathematics_-_II', 'Integral Calculus - I ', 'Integral Calculus – II', 'Co-ordinate Geometry (2 Dimension)', 'Co-ordinate Geometry (3 Dimension)', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'Applied_Physic_-_II', 'Wave motion and its applications', 'Wave Optics', 'Electrostatics', 'Current Electricity', 'Magneto Statics and Electromagnetism', 'Semiconductor physics', 'Modern Physics', '', '', '', '', '', '', '', ''),
(5, 'Basics_Of_Electrical_And_Electronics_Engineering', 'Application and Advantages of Electricity', 'Basic Electrical Quantities', 'AC Fundamentals', 'Transformers', 'D.C. Circuits', 'Basic Electronics', '', '', '', '', '', '', '', '', ''),
(6, 'Multimedia_And_Animation', 'Introduction to Multimedia Systems', 'Architecture & Issues For Distributed Multimedia System', 'Compression/Decompression & File Formats', 'Multimedia Authoring and User Interface', 'Multimedia Tool', 'Animation Technology', '', '', '', '', '', '', '', '', ''),
(7, 'Concept_Of_Programming_Using_C', 'Algorithm and Programming Development', 'Program Structure ', 'Control Structures', 'Functions', 'Arrays and Strings', 'Pointers', 'Structures and Unions', 'File Handling', '', '', '', '', '', '', ''),
(8, 'Office_Automation_Tools', 'Word Processing', 'SpreadSheet', 'Presentation', 'Database', 'Google Office Tools', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cse-3rd-sem`
--

CREATE TABLE `cse-3rd-sem` (
  `s/n` int(11) NOT NULL,
  `subjects` varchar(70) NOT NULL,
  `chapter1` varchar(70) NOT NULL,
  `chapter2` varchar(70) NOT NULL,
  `chapter3` varchar(70) NOT NULL,
  `chapter4` varchar(70) NOT NULL,
  `chapter5` varchar(70) NOT NULL,
  `chapter6` varchar(70) NOT NULL,
  `chapter7` varchar(70) NOT NULL,
  `chapter8` varchar(70) NOT NULL,
  `chapter9` varchar(70) NOT NULL,
  `chapter10` varchar(70) NOT NULL,
  `chapter11` varchar(70) NOT NULL,
  `chapter12` varchar(70) NOT NULL,
  `chapter13` varchar(70) NOT NULL,
  `chapter14` varchar(70) NOT NULL,
  `chapter15` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cse-3rd-sem`
--

INSERT INTO `cse-3rd-sem` (`s/n`, `subjects`, `chapter1`, `chapter2`, `chapter3`, `chapter4`, `chapter5`, `chapter6`, `chapter7`, `chapter8`, `chapter9`, `chapter10`, `chapter11`, `chapter12`, `chapter13`, `chapter14`, `chapter15`) VALUES
(1, 'Applied_Mathematics_-_III', 'Matrices', 'Differential Calculus ', 'Differential Equation', 'Integral Calculus-II', 'Probability and Statistics ', '', '', '', '', '', '', '', '', '', ''),
(2, 'Internet_And_Web_Technology', 'Web Development Introduction', 'HTML', 'Cascading Style Sheets', 'Java Scripts', 'jQuery', 'Bootstrap', 'XML & JSON', '', '', '', '', '', '', '', ''),
(3, 'Environmental_Studies', 'Introduction', 'Air Pollution', 'Water Pollution', 'Soil Pollution', 'Noise pollution', 'Environmental Legislation', 'Impact of Energy Usage on Environment', '', '', '', '', '', '', '', ''),
(4, 'Data_Communication_And_Computer_Networks', 'Introduction to Data Communication', 'Communication Methodologies ', 'Networks Basics', 'Networking Models', 'TCP/IP Addressing', 'Network Architecture', 'Network Connectivity', 'Network Administration', 'Introduction to Wireless Networks', '', '', '', '', '', ''),
(5, 'Data_Structures_Using_C', 'Fundamental Notations', 'Arrays', 'Linked Lists', 'Stacks, Queues and Recursion', 'Trees', 'Sorting and Searching', 'Graph', '', '', '', '', '', '', '', ''),
(6, 'Digital_Electronics', 'Introduction ', 'Number System ', 'Codes and Parity', 'Logic Gates and Families', 'Logic Simplification ', 'Arithmetic circuits', 'Combinational Circuit', 'Introduction to Sequential circuit', 'Counters', 'Shift Register', 'A/D and D/A Converters ', 'Semiconductor Memories', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cse-4th-sem`
--

CREATE TABLE `cse-4th-sem` (
  `s/n` int(11) NOT NULL,
  `subjects` varchar(70) NOT NULL,
  `chapter1` varchar(70) NOT NULL,
  `chapter2` varchar(70) NOT NULL,
  `chapter3` varchar(70) NOT NULL,
  `chapter4` varchar(70) NOT NULL,
  `chapter5` varchar(70) NOT NULL,
  `chapter6` varchar(70) NOT NULL,
  `chapter7` varchar(70) NOT NULL,
  `chapter8` varchar(70) NOT NULL,
  `chapter9` varchar(70) NOT NULL,
  `chapter10` varchar(70) NOT NULL,
  `chapter11` varchar(70) NOT NULL,
  `chapter12` varchar(70) NOT NULL,
  `chapter13` varchar(70) NOT NULL,
  `chapter14` varchar(70) NOT NULL,
  `chapter15` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cse-4th-sem`
--

INSERT INTO `cse-4th-sem` (`s/n`, `subjects`, `chapter1`, `chapter2`, `chapter3`, `chapter4`, `chapter5`, `chapter6`, `chapter7`, `chapter8`, `chapter9`, `chapter10`, `chapter11`, `chapter12`, `chapter13`, `chapter14`, `chapter15`) VALUES
(1, 'Communication_Skill_-_II', 'Functional Grammar', 'Reading', 'Writing Skill', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'Database_Managment_System', 'Database System Concept & Data Modeling', 'Data Model', 'Relation Model', 'Relational Database Design', 'MYSQL/SQL', 'PL-SQL', 'NO-SQL', 'SECURITY ', '', '', '', '', '', '', ''),
(3, 'Object_Oriented_Programming_Using_Java', 'Introduction and Features', 'Language Constructs', 'Classes and Objects', 'Inheritance', 'Abstract Class and Interface', 'Polymorphism', 'Exception Handling', 'Multithreading', '', '', '', '', '', '', ''),
(4, 'Operating_System', 'Overview of Operating Systems', 'Process Management (Principles and Brief Concept) ', 'Deadlocks (Principles and Brief Concept)', 'Memory Management Function (Principles and Brief Concept)', 'I/O Management Functions (Principles and Brief Concept) ', 'File Management (Principles and Brief Concept)', 'Linux Operating System', '', '', '', '', '', '', '', ''),
(5, 'E-Commerce_And_Digital_Marketing', 'Electronics Commerce', 'E-Commerce Payment', 'Principles of Digital Marketing', 'Search Engine Optimization', 'Google AdWords', 'Google Analytics', 'Social Media Marketing', '', '', '', '', '', '', '', ''),
(6, 'Energy_Conservation', 'Basics of Energy', 'Energy Conservation and EC Act 2001', 'Electrical Supply System and Motors ', 'Energy Efficiency in Electrical Utilities', 'Lighting and DG Systems ', 'Energy Efficiency in Thermal Utilities', 'Energy Conservation Building Code (ECBC)', 'Waste Heat Recovery and Co-Generation ', 'General Energy Saving Tips', 'Energy Audit', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cse-5th-sem`
--

CREATE TABLE `cse-5th-sem` (
  `s/n` int(11) NOT NULL,
  `subjects` text NOT NULL,
  `chapter1` text NOT NULL,
  `chapter2` text NOT NULL,
  `chapter3` text NOT NULL,
  `chapter4` text NOT NULL,
  `chapter5` text NOT NULL,
  `chapter6` text NOT NULL,
  `chapter7` text NOT NULL,
  `chapter8` text NOT NULL,
  `chapter9` text NOT NULL,
  `chapter10` text NOT NULL,
  `chapter11` text NOT NULL,
  `chapter12` text NOT NULL,
  `chapter13` text NOT NULL,
  `chapter14` text NOT NULL,
  `chapter15` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cse-5th-sem`
--

INSERT INTO `cse-5th-sem` (`s/n`, `subjects`, `chapter1`, `chapter2`, `chapter3`, `chapter4`, `chapter5`, `chapter6`, `chapter7`, `chapter8`, `chapter9`, `chapter10`, `chapter11`, `chapter12`, `chapter13`, `chapter14`, `chapter15`) VALUES
(1, 'Computer_Programming_Using_Python', 'Introduction ', 'Basic Python Syntax', 'Language Components ', 'Collections ', 'Functions ', 'Modules ', 'Exceptions', 'Input and Output', 'Classes in Python', 'Regular Expressions ', '', '', '', '', ''),
(2, 'Web_Development_Using_Php', ' PHP Introduction ', 'PHP and MySQL', 'Ajax', 'WordPress (CMS)', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'Software_Engineering', 'Introduction to Software Engineering', 'Software Life Cycle Models', 'Software Planning', 'Requirement Analysis and Specification', 'Software Design and Implementation', 'Software Testing', '', '', '', '', '', '', '', '', ''),
(4, 'Computer_Architecture_And_Hardware_Maintenance', 'Hardware Organisation of Computer System', 'Memory Organisation', 'Arithmetic Operations', 'I/O Organization', '8085 Microprocessor', 'Architecture of multi processor systems', '', '', '', '', '', '', '', '', ''),
(5, 'Internet_Of_Things', 'Introduction to Internet Of Things (IoT) ', 'IoT Devices', 'IoT Networks', 'IoT chapter 4(null)', 'IoT and M2M', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cse-6th-sem`
--

CREATE TABLE `cse-6th-sem` (
  `s/n` int(11) NOT NULL,
  `subjects` varchar(70) NOT NULL,
  `chapter1` varchar(70) NOT NULL,
  `chapter2` varchar(70) NOT NULL,
  `chapter3` varchar(70) NOT NULL,
  `chapter4` varchar(70) NOT NULL,
  `chapter5` varchar(70) NOT NULL,
  `chapter6` varchar(70) NOT NULL,
  `chapter7` varchar(70) NOT NULL,
  `chapter8` varchar(70) NOT NULL,
  `chapter9` varchar(70) NOT NULL,
  `chapter10` varchar(70) NOT NULL,
  `chapter11` varchar(70) NOT NULL,
  `chapter12` varchar(70) NOT NULL,
  `chapter13` varchar(70) NOT NULL,
  `chapter14` varchar(70) NOT NULL,
  `chapter15` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cse-6th-sem`
--

INSERT INTO `cse-6th-sem` (`s/n`, `subjects`, `chapter1`, `chapter2`, `chapter3`, `chapter4`, `chapter5`, `chapter6`, `chapter7`, `chapter8`, `chapter9`, `chapter10`, `chapter11`, `chapter12`, `chapter13`, `chapter14`, `chapter15`) VALUES
(1, 'Development_Of_Android_Applications', 'Introduction to ANDROID', 'Environment Setup and Basic Project Structure', 'Android Fundaments and User Interface Design', 'Menus and Preferences', 'Advanced UI Components ', 'Threads in Android', 'Notifications & Services', 'Storage and Content Provider', '', '', '', '', '', '', ''),
(2, 'Cloud_Computing', 'Introduction ', 'Service and Deployment Models', 'Service Level Agreement (SLA) Management', 'Virtualization Concepts', 'Cloud Security', 'Cloud Storage', 'Scheduling in Cloud', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ee-1st-sem`
--

CREATE TABLE `ee-1st-sem` (
  `s/n` int(11) NOT NULL,
  `subjects` varchar(70) NOT NULL,
  `chapter1` varchar(70) NOT NULL,
  `chapter2` varchar(70) NOT NULL,
  `chapter3` varchar(70) NOT NULL,
  `chapter4` varchar(70) NOT NULL,
  `chapter5` varchar(70) NOT NULL,
  `chapter6` varchar(70) NOT NULL,
  `chapter7` varchar(70) NOT NULL,
  `chapter8` varchar(70) NOT NULL,
  `chapter9` varchar(70) NOT NULL,
  `chapter10` varchar(70) NOT NULL,
  `chapter11` varchar(70) NOT NULL,
  `chapter12` varchar(70) NOT NULL,
  `chapter13` varchar(70) NOT NULL,
  `chapter14` varchar(70) NOT NULL,
  `chapter15` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ee-2nd-sem`
--

CREATE TABLE `ee-2nd-sem` (
  `s/n` int(11) NOT NULL,
  `subjects` varchar(70) NOT NULL,
  `chapter1` varchar(70) NOT NULL,
  `chapter2` varchar(70) NOT NULL,
  `chapter3` varchar(70) NOT NULL,
  `chapter4` varchar(70) NOT NULL,
  `chapter5` varchar(70) NOT NULL,
  `chapter6` varchar(70) NOT NULL,
  `chapter7` varchar(70) NOT NULL,
  `chapter8` varchar(70) NOT NULL,
  `chapter9` varchar(70) NOT NULL,
  `chapter10` varchar(70) NOT NULL,
  `chapter11` varchar(70) NOT NULL,
  `chapter12` varchar(70) NOT NULL,
  `chapter13` varchar(70) NOT NULL,
  `chapter14` varchar(70) NOT NULL,
  `chapter15` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ee-3rd-sem`
--

CREATE TABLE `ee-3rd-sem` (
  `s/n` int(11) NOT NULL,
  `subjects` varchar(70) NOT NULL,
  `chapter1` varchar(70) NOT NULL,
  `chapter2` varchar(70) NOT NULL,
  `chapter3` varchar(70) NOT NULL,
  `chapter4` varchar(70) NOT NULL,
  `chapter5` varchar(70) NOT NULL,
  `chapter6` varchar(70) NOT NULL,
  `chapter7` varchar(70) NOT NULL,
  `chapter8` varchar(70) NOT NULL,
  `chapter9` varchar(70) NOT NULL,
  `chapter10` varchar(70) NOT NULL,
  `chapter11` varchar(70) NOT NULL,
  `chapter12` varchar(70) NOT NULL,
  `chapter13` varchar(70) NOT NULL,
  `chapter14` varchar(70) NOT NULL,
  `chapter15` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ee-4th-sem`
--

CREATE TABLE `ee-4th-sem` (
  `s/n` int(11) NOT NULL,
  `subjects` varchar(70) NOT NULL,
  `chapter1` varchar(70) NOT NULL,
  `chapter2` varchar(70) NOT NULL,
  `chapter3` varchar(70) NOT NULL,
  `chapter4` varchar(70) NOT NULL,
  `chapter5` varchar(70) NOT NULL,
  `chapter6` varchar(70) NOT NULL,
  `chapter7` varchar(70) NOT NULL,
  `chapter8` varchar(70) NOT NULL,
  `chapter9` varchar(70) NOT NULL,
  `chapter10` varchar(70) NOT NULL,
  `chapter11` varchar(70) NOT NULL,
  `chapter12` varchar(70) NOT NULL,
  `chapter13` varchar(70) NOT NULL,
  `chapter14` varchar(70) NOT NULL,
  `chapter15` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ee-5th-sem`
--

CREATE TABLE `ee-5th-sem` (
  `s/n` int(11) NOT NULL,
  `subjects` varchar(70) NOT NULL,
  `chapter1` varchar(70) NOT NULL,
  `chapter2` varchar(70) NOT NULL,
  `chapter3` varchar(70) NOT NULL,
  `chapter4` varchar(70) NOT NULL,
  `chapter5` varchar(70) NOT NULL,
  `chapter6` varchar(70) NOT NULL,
  `chapter7` varchar(70) NOT NULL,
  `chapter8` varchar(70) NOT NULL,
  `chapter9` varchar(70) NOT NULL,
  `chapter10` varchar(70) NOT NULL,
  `chapter11` varchar(70) NOT NULL,
  `chapter12` varchar(70) NOT NULL,
  `chapter13` varchar(70) NOT NULL,
  `chapter14` varchar(70) NOT NULL,
  `chapter15` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ee-6th-sem`
--

CREATE TABLE `ee-6th-sem` (
  `s/n` int(11) NOT NULL,
  `subjects` varchar(70) NOT NULL,
  `chapter1` varchar(70) NOT NULL,
  `chapter2` varchar(70) NOT NULL,
  `chapter3` varchar(70) NOT NULL,
  `chapter4` varchar(70) NOT NULL,
  `chapter5` varchar(70) NOT NULL,
  `chapter6` varchar(70) NOT NULL,
  `chapter7` varchar(70) NOT NULL,
  `chapter8` varchar(70) NOT NULL,
  `chapter9` varchar(70) NOT NULL,
  `chapter10` varchar(70) NOT NULL,
  `chapter11` varchar(70) NOT NULL,
  `chapter12` varchar(70) NOT NULL,
  `chapter13` varchar(70) NOT NULL,
  `chapter14` varchar(70) NOT NULL,
  `chapter15` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `me-1st-sem`
--

CREATE TABLE `me-1st-sem` (
  `s/n` int(11) NOT NULL,
  `subjects` varchar(70) NOT NULL,
  `chapter1` varchar(70) NOT NULL,
  `chapter2` varchar(70) NOT NULL,
  `chapter3` varchar(70) NOT NULL,
  `chapter4` varchar(70) NOT NULL,
  `chapter5` varchar(70) NOT NULL,
  `chapter6` varchar(70) NOT NULL,
  `chapter7` varchar(70) NOT NULL,
  `chapter8` varchar(70) NOT NULL,
  `chapter9` varchar(70) NOT NULL,
  `chapter10` varchar(70) NOT NULL,
  `chapter11` varchar(70) NOT NULL,
  `chapter12` varchar(70) NOT NULL,
  `chapter13` varchar(70) NOT NULL,
  `chapter14` varchar(70) NOT NULL,
  `chapter15` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `me-2nd-sem`
--

CREATE TABLE `me-2nd-sem` (
  `s/n` int(11) NOT NULL,
  `subjects` varchar(70) NOT NULL,
  `chapter1` varchar(70) NOT NULL,
  `chapter2` varchar(70) NOT NULL,
  `chapter3` varchar(70) NOT NULL,
  `chapter4` varchar(70) NOT NULL,
  `chapter5` varchar(70) NOT NULL,
  `chapter6` varchar(70) NOT NULL,
  `chapter7` varchar(70) NOT NULL,
  `chapter8` varchar(70) NOT NULL,
  `chapter9` varchar(70) NOT NULL,
  `chapter10` varchar(70) NOT NULL,
  `chapter11` varchar(70) NOT NULL,
  `chapter12` varchar(70) NOT NULL,
  `chapter13` varchar(70) NOT NULL,
  `chapter14` varchar(70) NOT NULL,
  `chapter15` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `me-3rd-sem`
--

CREATE TABLE `me-3rd-sem` (
  `s/n` int(11) NOT NULL,
  `subjects` varchar(70) NOT NULL,
  `chapter1` varchar(70) NOT NULL,
  `chapter2` varchar(70) NOT NULL,
  `chapter3` varchar(70) NOT NULL,
  `chapter4` varchar(70) NOT NULL,
  `chapter5` varchar(70) NOT NULL,
  `chapter6` varchar(70) NOT NULL,
  `chapter7` varchar(70) NOT NULL,
  `chapter8` varchar(70) NOT NULL,
  `chapter9` varchar(70) NOT NULL,
  `chapter10` varchar(70) NOT NULL,
  `chapter11` varchar(70) NOT NULL,
  `chapter12` varchar(70) NOT NULL,
  `chapter13` varchar(70) NOT NULL,
  `chapter14` varchar(70) NOT NULL,
  `chapter15` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `me-4th-sem`
--

CREATE TABLE `me-4th-sem` (
  `s/n` int(11) NOT NULL,
  `subjects` varchar(70) NOT NULL,
  `chapter1` varchar(70) NOT NULL,
  `chapter2` varchar(70) NOT NULL,
  `chapter3` varchar(70) NOT NULL,
  `chapter4` varchar(70) NOT NULL,
  `chapter5` varchar(70) NOT NULL,
  `chapter6` varchar(70) NOT NULL,
  `chapter7` varchar(70) NOT NULL,
  `chapter8` varchar(70) NOT NULL,
  `chapter9` varchar(70) NOT NULL,
  `chapter10` varchar(70) NOT NULL,
  `chapter11` varchar(70) NOT NULL,
  `chapter12` varchar(70) NOT NULL,
  `chapter13` varchar(70) NOT NULL,
  `chapter14` varchar(70) NOT NULL,
  `chapter15` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `me-5th-sem`
--

CREATE TABLE `me-5th-sem` (
  `s/n` int(11) NOT NULL,
  `subjects` varchar(70) NOT NULL,
  `chapter1` varchar(70) NOT NULL,
  `chapter2` varchar(70) NOT NULL,
  `chapter3` varchar(70) NOT NULL,
  `chapter4` varchar(70) NOT NULL,
  `chapter5` varchar(70) NOT NULL,
  `chapter6` varchar(70) NOT NULL,
  `chapter7` varchar(70) NOT NULL,
  `chapter8` varchar(70) NOT NULL,
  `chapter9` varchar(70) NOT NULL,
  `chapter10` varchar(70) NOT NULL,
  `chapter11` varchar(70) NOT NULL,
  `chapter12` varchar(70) NOT NULL,
  `chapter13` varchar(70) NOT NULL,
  `chapter14` varchar(70) NOT NULL,
  `chapter15` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `me-6th-sem`
--

CREATE TABLE `me-6th-sem` (
  `s/n` int(11) NOT NULL,
  `subjects` varchar(70) NOT NULL,
  `chapter1` varchar(70) NOT NULL,
  `chapter2` varchar(70) NOT NULL,
  `chapter3` varchar(70) NOT NULL,
  `chapter4` varchar(70) NOT NULL,
  `chapter5` varchar(70) NOT NULL,
  `chapter6` varchar(70) NOT NULL,
  `chapter7` varchar(70) NOT NULL,
  `chapter8` varchar(70) NOT NULL,
  `chapter9` varchar(70) NOT NULL,
  `chapter10` varchar(70) NOT NULL,
  `chapter11` varchar(70) NOT NULL,
  `chapter12` varchar(70) NOT NULL,
  `chapter13` varchar(70) NOT NULL,
  `chapter14` varchar(70) NOT NULL,
  `chapter15` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `otp_resetpsw`
--

CREATE TABLE `otp_resetpsw` (
  `s/n` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `otp` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `otp_resetpsw`
--

INSERT INTO `otp_resetpsw` (`s/n`, `email`, `otp`) VALUES
(9, 'musicloverved37@gmail.com', 404220);

-- --------------------------------------------------------

--
-- Table structure for table `otp_verification`
--

CREATE TABLE `otp_verification` (
  `s/n` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `otp` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user-registration`
--

CREATE TABLE `user-registration` (
  `s/n` int(11) NOT NULL,
  `full_name` varchar(40) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `year` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `phone_number` varchar(25) NOT NULL,
  `gender` text NOT NULL,
  `date/time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user-registration`
--

INSERT INTO `user-registration` (`s/n`, `full_name`, `user_name`, `email`, `password`, `branch`, `year`, `semester`, `phone_number`, `gender`, `date/time`) VALUES
(1, 'Ved Patel', 'sunny', 'musicloverved37@gmail.com', '123', 'Computer Science & Engineering', '3rd Year', '5th SEM', '8303339223', 'Male', '2021-11-01 13:29:11'),
(6, 'Murli Chauhan', 'murli_87', 'murli@gmail.com', 'yogesh', 'Computer Science & Engineering', '1st Year', '1st SEM', '736888797', 'Male', '2021-11-01 13:40:32'),
(9, 'Abhishek', 'anonnymous_47', 'abhishek@gmail.com', 'kalihumain', 'Computer Science & Engineering', '2nd Year', '3rd SEM', '9794748329', 'Male', '2021-11-01 13:56:18'),
(14, 'Sunny Patel', 'sunny_37', 'sunny@gmail.com', 'sunnyji', 'Computer Science & Engineering', '2nd Year', '4th SEM', '933993993', 'Male', '2021-11-01 15:02:24'),
(16, 'K Prapanjan', 'kp_47', 'prapanjan@gmail.com', 'vedpatel', 'Computer Science & Engineering', '3rd Year', '5th SEM', '837373837', 'Female', '2021-11-01 20:19:36'),
(17, 'abhishek kumar', 'ak9283', 'admin@admin.com', 'same', 'Computer Science & Engineering', '3rd Year', '5th SEM', '1234567890', 'Male', '2021-11-16 09:20:42'),
(18, 'sundram ', 'sundram', 'sundram@admin.com', 'same1', 'Computer Science & Engineering', '3rd Year', '5th SEM', '1234567890', 'Male', '2021-11-16 09:25:50'),
(19, 'sundaram chaurasiya', 'smart razz', 'sundaramraj326@gmail.com', 'smart9935', 'Computer Science & Engineering', '3rd Year', '5th SEM', '9129143855', 'Male', '2021-11-16 09:32:45'),
(20, 'Babu rao', 'Babu37', 'Babu37@gmail.com', 'Babuji', 'Computer Science & Engineering', '3rd Year', '5th SEM', '8303339223', 'Male', '2021-11-27 20:16:00'),
(21, 'Shivraj', 'Shivra_55', 'Shivraj@gmail.com', 'Shivrajbabu', 'Computer Science & Engineering', '1st Year', '5th SEM', '9696121756', 'Male', '2021-11-28 05:20:20'),
(22, 'Murli Chauhan', 'Murli_37', 'murlichauhan@gmail.com', 'Murliji', 'Computer Science & Engineering', '3rd Year', '5th SEM', '9696645047', 'Male', '2021-12-01 07:21:19'),
(23, 'Sardar Jogindar', 'jogindar_12', 'singhjogindar1256@gmail.com', '12345678', 'Computer Science & Engineering', '3rd Year', '5th SEM', '7897636693', 'Male', '2021-12-03 06:06:27'),
(24, 'ANAND KUMAR YADAV', 'anand123', 'yadavanand10699@gmail.com', '1234567899', 'Computer Science & Engineering', '3rd Year', '5th SEM', '8874019467', 'Male', '2021-12-03 06:20:55'),
(25, '', '', 'haridas@gmail.com', '', '', '', '', '', '', '2021-12-05 07:54:20'),
(26, '', '', 'sp5944409@gmail.com', '', '', '', '', '', '', '2021-12-05 08:12:18'),
(27, '', '', 'ved@gmail.com', '', '', '', '', '', '', '2021-12-05 08:21:18'),
(28, '', '', 'ved@gmail.com', '', '', '', '', '', '', '2021-12-05 09:34:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cse-1st-sem`
--
ALTER TABLE `cse-1st-sem`
  ADD PRIMARY KEY (`s/n`);

--
-- Indexes for table `cse-2nd-sem`
--
ALTER TABLE `cse-2nd-sem`
  ADD PRIMARY KEY (`s/n`);

--
-- Indexes for table `cse-3rd-sem`
--
ALTER TABLE `cse-3rd-sem`
  ADD PRIMARY KEY (`s/n`);

--
-- Indexes for table `cse-4th-sem`
--
ALTER TABLE `cse-4th-sem`
  ADD PRIMARY KEY (`s/n`);

--
-- Indexes for table `cse-5th-sem`
--
ALTER TABLE `cse-5th-sem`
  ADD PRIMARY KEY (`s/n`);

--
-- Indexes for table `cse-6th-sem`
--
ALTER TABLE `cse-6th-sem`
  ADD PRIMARY KEY (`s/n`);

--
-- Indexes for table `otp_resetpsw`
--
ALTER TABLE `otp_resetpsw`
  ADD PRIMARY KEY (`s/n`);

--
-- Indexes for table `otp_verification`
--
ALTER TABLE `otp_verification`
  ADD PRIMARY KEY (`s/n`);

--
-- Indexes for table `user-registration`
--
ALTER TABLE `user-registration`
  ADD PRIMARY KEY (`s/n`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cse-1st-sem`
--
ALTER TABLE `cse-1st-sem`
  MODIFY `s/n` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cse-2nd-sem`
--
ALTER TABLE `cse-2nd-sem`
  MODIFY `s/n` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cse-3rd-sem`
--
ALTER TABLE `cse-3rd-sem`
  MODIFY `s/n` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cse-4th-sem`
--
ALTER TABLE `cse-4th-sem`
  MODIFY `s/n` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cse-5th-sem`
--
ALTER TABLE `cse-5th-sem`
  MODIFY `s/n` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cse-6th-sem`
--
ALTER TABLE `cse-6th-sem`
  MODIFY `s/n` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `otp_resetpsw`
--
ALTER TABLE `otp_resetpsw`
  MODIFY `s/n` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `otp_verification`
--
ALTER TABLE `otp_verification`
  MODIFY `s/n` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user-registration`
--
ALTER TABLE `user-registration`
  MODIFY `s/n` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

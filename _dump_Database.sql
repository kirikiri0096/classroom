-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql56
-- Generation Time: 2018 年 5 月 12 日 08:08
-- サーバのバージョン： 5.6.33
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kirikiri0096_webtech00`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `chat`
--

CREATE TABLE `chat` (
  `asker_id` char(8) COLLATE utf8_unicode_ci NOT NULL,
  `ask_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ask_msg` text COLLATE utf8_unicode_ci NOT NULL,
  `reply_time` timestamp NULL DEFAULT NULL,
  `reply_msg` text COLLATE utf8_unicode_ci,
  `class_code` char(6) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `chat`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `chatbot_a`
--

CREATE TABLE `chatbot_a` (
  `a_id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `a_msg` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class_id` char(6) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `chatbot_a`
--


-- --------------------------------------------------------

--
-- テーブルの構造 `chatbot_q`
--

CREATE TABLE `chatbot_q` (
  `q_id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `q_msg` text COLLATE utf8_unicode_ci NOT NULL,
  `a_id` int(3) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `chatbot_q`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `class`
--

CREATE TABLE `class` (
  `class_id` char(8) COLLATE utf8_unicode_ci NOT NULL,
  `class_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `class_code` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `class_attend` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `section` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `t_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `class`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `enroll`
--

CREATE TABLE `enroll` (
  `std_id` char(8) COLLATE utf8_unicode_ci NOT NULL,
  `class_code` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(1) NOT NULL DEFAULT '0',
  `act_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `enroll`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `files`
--

CREATE TABLE `files` (
  `FilesID` int(100) NOT NULL,
  `FilesName` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Date` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `class_code` char(6) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `files`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `member`
--

CREATE TABLE `member` (
  `UserID` int(3) UNSIGNED ZEROFILL NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Status` enum('ADMIN','USER') NOT NULL DEFAULT 'USER'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- テーブルの構造 `post`
--

CREATE TABLE `post` (
  `post_id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `post_info` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `post_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `class_code` char(6) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `post`
--


-- --------------------------------------------------------

--
-- テーブルの構造 `student_info`
--

CREATE TABLE `student_info` (
  `std_id` char(8) COLLATE utf8_unicode_ci NOT NULL,
  `std_fname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `std_lname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `std_pass` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `std_email` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `student_info`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `teacher_info`
--

CREATE TABLE `teacher_info` (
  `t_id` char(8) COLLATE utf8_unicode_ci NOT NULL,
  `t_fname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `t_lname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `t_pass` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `t_email` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `t_tel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `t_office` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `teacher_info`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`asker_id`,`ask_time`,`class_code`),
  ADD KEY `ClassRelationship` (`class_code`);

--
-- Indexes for table `chatbot_a`
--
ALTER TABLE `chatbot_a`
  ADD PRIMARY KEY (`a_id`),
  ADD KEY `Class_id` (`class_id`);

--
-- Indexes for table `chatbot_q`
--
ALTER TABLE `chatbot_q`
  ADD PRIMARY KEY (`q_id`),
  ADD KEY `a_id` (`a_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_code`),
  ADD KEY `Class_id` (`class_id`),
  ADD KEY `class` (`t_id`);

--
-- Indexes for table `enroll`
--
ALTER TABLE `enroll`
  ADD PRIMARY KEY (`std_id`,`class_code`),
  ADD KEY `classR` (`class_code`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`FilesID`),
  ADD KEY `class_code` (`class_code`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `Class_code` (`class_code`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`std_id`);

--
-- Indexes for table `teacher_info`
--
ALTER TABLE `teacher_info`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatbot_a`
--
ALTER TABLE `chatbot_a`
  MODIFY `a_id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `chatbot_q`
--
ALTER TABLE `chatbot_q`
  MODIFY `q_id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `FilesID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `UserID` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `ClassRelationship` FOREIGN KEY (`class_code`) REFERENCES `class` (`class_code`);

--
-- テーブルの制約 `chatbot_a`
--
ALTER TABLE `chatbot_a`
  ADD CONSTRAINT `classID` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_code`);

--
-- テーブルの制約 `chatbot_q`
--
ALTER TABLE `chatbot_q`
  ADD CONSTRAINT `answer` FOREIGN KEY (`a_id`) REFERENCES `chatbot_a` (`a_id`);

--
-- テーブルの制約 `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class` FOREIGN KEY (`t_id`) REFERENCES `teacher_info` (`t_id`);

--
-- テーブルの制約 `enroll`
--
ALTER TABLE `enroll`
  ADD CONSTRAINT `classR` FOREIGN KEY (`class_code`) REFERENCES `class` (`class_code`),
  ADD CONSTRAINT `studentR` FOREIGN KEY (`std_id`) REFERENCES `student_info` (`std_id`);

--
-- テーブルの制約 `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `toClassCode` FOREIGN KEY (`class_code`) REFERENCES `class` (`class_code`);

--
-- テーブルの制約 `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `classRelation` FOREIGN KEY (`class_code`) REFERENCES `class` (`class_code`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

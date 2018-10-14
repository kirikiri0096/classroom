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

INSERT INTO `chat` (`asker_id`, `ask_time`, `ask_msg`, `reply_time`, `reply_msg`, `class_code`) VALUES
('59011088', '2018-05-03 10:07:09', 't1', '2018-05-03 10:07:09', '&#91;BOT Said&#93; a1', 'EDjigI'),
('59011088', '2018-05-03 10:08:23', 'ฉันทำผิดมั้ย', '2018-05-03 10:08:23', '&#91;BOT Said&#93; ผิดคะ', 'EDjigI'),
('59011088', '2018-05-03 10:10:05', '3+2 = 5', '2018-05-03 10:10:05', '&#91;BOT Said&#93; ถูกคะ', 'EDjigI'),
('59011088', '2018-05-03 10:11:07', '1+2 = 3', '2018-05-03 10:11:07', '&#91;BOT Said&#93; ถูกคะ', 'EDjigI'),
('s1', '2018-05-02 00:06:16', 'dsadsad', '2018-05-02 00:11:04', 'fghj', '7HfZKA'),
('s1', '2018-05-02 00:16:18', 'สวัสดี', '2018-05-02 00:22:48', 'จ้ะ', '7HfZKA'),
('s1', '2018-05-02 00:16:55', 'วันนี้วันอะไร', '2018-05-02 00:23:03', 'วันที่เธอแอบแก้บัค', '7HfZKA'),
('s1', '2018-05-02 00:20:18', 'ทำไรอะ ตาวิเศษเห็นนะ', '2018-05-03 02:13:48', 'ทำไมคุณทำอย่างนี้', '7HfZKA'),
('s1', '2018-05-02 00:28:30', 'Try', NULL, NULL, '7HfZKA'),
('S1', '2018-05-03 09:45:24', 'ถูกป่ะ', '2018-05-03 09:45:24', '&#91;BOT Said&#93; เอิ่ม', '7HfZKA'),
('s1', '2018-05-03 09:54:04', 'วันนี้อาจารย์จะมีควิซไหม', NULL, NULL, '7HfZKA'),
('s2', '2018-05-02 00:13:42', 'ยกคลาสไหมครับ', NULL, NULL, '1beeMs'),
('s2', '2018-05-02 00:14:01', 'พรุ่งนี้ยกคลาสไหม', NULL, NULL, '1beeMs'),
('s4', '2018-05-02 00:10:52', 'ง่วงจังคะ', '2018-05-02 00:11:34', 'ก็นอนสิคะ', 'BwOsCT'),
('s4', '2018-05-02 00:11:53', 'อาจรย์ทำไมแก้ข้อนี้ไม่ได้', '2018-05-02 00:11:53', '&#91;BOT Said&#93; ทำอะไรผิดเปล่าคะ', 'BwOsCT'),
('s4', '2018-05-02 00:12:13', 'จริงปะคะอาจารย์', NULL, NULL, 'BwOsCT'),
('s4', '2018-05-02 00:16:00', 'Hi', '2018-05-02 00:18:13', 'good morning teacher เอ้ย student', '5KMlpX'),
('s4', '2018-05-02 00:16:23', 'ทำไมไม่ตอบอร่ะ', '2018-05-02 00:17:37', 'สวัสดีจ้าาา', '5KMlpX');

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

INSERT INTO `chatbot_a` (`a_id`, `a_msg`, `class_id`) VALUES
(001, 'ยกครับ', '7HfZKA'),
(002, 'เอิ่ม', '7HfZKA'),
(003, 'อัพรูปไม่ได้แล้วอาจารย์จะเห็นได้ไหม 5555', '7HfZKA'),
(004, 'ถูกคะ', 'EDjigI'),
(005, 'ผิดคะ', 'EDjigI'),
(006, 'เเน่นอน', '5KMlpX'),
(007, 'ไม่คะ', '2gDYRp'),
(008, 'มีคลาสตามปกติครับ', 'ZEOZBP'),
(009, 'เอิ่ม', 'NM8mki'),
(010, 'วันนี้เริ่มเรียน 9.30 น. นะครับ', 'ZEOZBP'),
(011, 'ผิดจ้า', '5KMlpX'),
(012, '1', 'NM8mki'),
(013, 'test', '7HfZKA'),
(014, 'จริงคะ', 'Kt4JKy'),
(015, 'ทำอะไรผิดเปล่าคะ', 'BwOsCT'),
(016, 'มีคลาสตามปกติครับ', '4mvLiI'),
(017, 'test again', 'NM8mki'),
(018, 'มีคลาสตามปกติครับ', '4mvLiI'),
(019, 'a1', 'EDjigI'),
(020, 'a2', 'EDjigI'),
(021, 'Yeser', '1beeMs'),
(022, 'ไม่รู้คะ', '2gDYRp'),
(023, 'No', '1beeMs'),
(024, 'รักนศทุกคนเหมือนกันครับ', '4mvLiI'),
(025, 'กินแล้วจ้า', 'C8s9Ao'),
(026, 'ใส่นักศึกษาครับ', 'C8s9Ao'),
(027, 'สวัสดีครับ', '3RQae0'),
(028, '-5 คะแนนครับ', '3RQae0');

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

INSERT INTO `chatbot_q` (`q_id`, `q_msg`, `a_id`) VALUES
(001, 'พรุ่งนี้ยกไหมครับ', 001),
(002, 'ยกไหม', 001),
(003, 'ถูกป่ะ', 002),
(004, 'ถูกม่ะ', 002),
(005, 'เห็นหรือยัง', 003),
(006, '1+1 = 2', 004),
(007, '2+3 = 5', 004),
(008, '3+2 = 5', 004),
(009, '1+2 = 3', 004),
(010, 'หนูทำถูกมั้ย', 005),
(011, 'ฉันทำผิดมั้ย', 005),
(012, 'IT หน้าตาดีทุกคน', 006),
(013, 'เวลานอนไม่ได้นอน', 006),
(014, 'สจล.คนดี', 006),
(015, 'วันหยุดไม่หยุด', 006),
(016, 'ยกคลาสมั้ยครับ', 007),
(017, 'วันนี้ยกไหมคะ', 008),
(018, 'เรียนไหมครับ', 008),
(019, 'ยกป่าวครับ', 008),
(020, 'วันนี้เรียนตามปกติไหมครับ', 008),
(021, 'ทำยังไงดี', 009),
(022, 'เรียนกี่โมง', 010),
(023, 'เวลาเรียนปกติไหมคะ', 010),
(024, '1-1=10', 011),
(025, '1', 012),
(026, 'test', 013),
(027, 'จริงปะจะ', 014),
(028, 'อาจรย์ทำไมแก้ข้อนี้ไม่ได้', 015),
(029, 'วันนี้ยกไหมคะ', 016),
(030, 'ยกคลาสไหมครับ', 016),
(031, 'ยกป่าวครับ', 016),
(032, 'วันนี้เรียนตามปกติไหมครับ', 016),
(033, 'q1', 017),
(034, 'q2', 017),
(035, 'q2', 017),
(036, 'วันนี้ยกไหมคะ', 018),
(037, 'ยกคลาสไหมครับ', 018),
(038, 'ยกป่าวครับ', 018),
(039, 'วันนี้เรียนตามปกติไหมครับ', 018),
(040, 't1', 019),
(041, 't1', 019),
(042, 'q1', 020),
(043, 'q2', 020),
(044, 'A', 021),
(045, 'B', 021),
(046, 'C', 021),
(047, 'น่ารักจัง', 022),
(048, 'ไม่รู้จะกินอะไรดี', 022),
(049, 'น่าเบื่อ', 022),
(050, 'X', 023),
(051, 'Y', 023),
(052, 'Z', 023),
(053, 'รักอาจารย์จังค่ะ', 024),
(054, 'รักอาจารย์นะคะ', 024),
(055, 'รักอาจารย์ครับผม', 024),
(056, 'รักอาจารย์นะครับ', 024),
(057, 'กินข้าวยังคะ', 025),
(058, 'กินแล้วยังครับ', 025),
(059, 'วันนี้ขอใส่ชอปได้ไหมคะ', 026),
(060, 'ใส่ชอปได้ปะครับ', 026),
(061, 'วันนี้ใส่ชุดนักศึกษาหรือชอปครับ', 026),
(062, 'สวัสดีค่ะ', 027),
(063, 'สวัสดีครับ', 027),
(064, 'เลทได้ไหมครับ', 028),
(065, 'เลทได้ไหมคะ', 028);

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

INSERT INTO `class` (`class_id`, `class_name`, `class_code`, `class_attend`, `section`, `t_id`) VALUES
('D', 'D', '1beeMs', 'eBwdGK', '1', 't2'),
('B', 'B', '2gDYRp', 'ngJVWB', '1', 't1'),
('F', 'F', '3RQae0', 'a8VPlc', '2', 't2'),
('E', 'E', '4mvLiI', 'P06ABj', '1', 't2'),
('D', 'D', '5KMlpX', 'sYmY9C', '2', 't2'),
('A', 'A', '7HfZKA', '2AfFRn', '1', 't1'),
('C', 'C', 'BwOsCT', 'xoYAWr', '2', 't1'),
('E', 'E', 'C8s9Ao', 'yTtdw1', '2', 't2'),
('A', 'A', 'EDjigI', 'HFJvjE', '2', 't1'),
('A', 'A', 'it66qu', 'VWSalb', 'A', 'Ameen'),
('C', 'C', 'Kt4JKy', '5gtJTD', '1', 't1'),
('B', 'B', 'NM8mki', 'OKg9qE', '2', 't1'),
('654', 'm', 'UtiHZA', 'fXhHtz', '60', 't1'),
('F', 'F', 'ZEOZBP', '7vJciX', '1', 't2');

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

INSERT INTO `enroll` (`std_id`, `class_code`, `active`, `act_time`) VALUES
('59011088', 'EDjigI', 0, '2018-05-03 09:49:36'),
('s1', '2gDYRp', 0, '2018-05-01 23:32:32'),
('s1', '7HfZKA', 0, '2018-05-01 23:32:15'),
('s2', '1beeMs', 0, '2018-05-02 00:03:37'),
('s2', '2gDYRp', 0, '2018-05-02 00:03:12'),
('s2', '7HfZKA', 0, '2018-05-02 00:03:05'),
('s3', '5KMlpX', 0, '2018-05-01 23:31:40'),
('s3', 'C8s9Ao', 0, '2018-05-01 23:31:47'),
('s4', '5KMlpX', 0, '2018-05-01 23:32:16'),
('s4', 'BwOsCT', 0, '2018-05-01 23:32:09'),
('s4', 'C8s9Ao', 0, '2018-05-01 23:32:22');

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

INSERT INTO `files` (`FilesID`, `FilesName`, `Date`, `class_code`) VALUES
(1, 'Lecture 1 Introduction of Web Technology.pptx', '2018-05-01', '7HfZKA'),
(2, 'Lecture 2 HTML.ppt', '2018-05-01', '7HfZKA'),
(3, 'Lecture 3 CSS.ppt', '2018-05-01', '7HfZKA'),
(4, 'Lecture 1 Introduction of Web Technology.pptx', '2018-05-01', 'EDjigI'),
(5, 'Lecture 2 HTML.ppt', '2018-05-01', 'EDjigI'),
(6, 'Lecture 3 CSS.ppt', '2018-05-01', 'EDjigI'),
(7, '01 Course Outline.pdf', '2018-05-01', '2gDYRp'),
(8, '02 CIAAAAPDR.pdf', '2018-05-01', '2gDYRp'),
(9, '04-05 Firewall and Policy.pdf', '2018-05-01', '2gDYRp'),
(10, '01 Course Outline.pdf', '2018-05-01', 'NM8mki'),
(11, '02 CIAAAAPDR.pdf', '2018-05-01', 'NM8mki'),
(12, '04-05 Firewall and Policy.pdf', '', 'NM8mki'),
(13, 'Lecture01-1 IntroCG.pdf', '2018-05-01', 'Kt4JKy'),
(14, 'Lecture01-1 IntroCG.pdf', '2018-05-01', 'BwOsCT'),
(15, '101-python-v1-06-list-sort-search-max.pptx.pptx', '2018-05-01', '1beeMs'),
(16, '101-python-v1-Decision-Loop.pptx', '2018-05-01', '1beeMs'),
(17, '101-python-v1-Decision-Loop.pptx', '', '5KMlpX'),
(18, 'A101-python-v1-02-var-expr.pptx', '2018-05-01', '5KMlpX'),
(19, 'Ch01 Introduction.pdf', '2018-05-01', '4mvLiI'),
(20, 'Ch01 Introduction.pdf', '', 'C8s9Ao'),
(21, '1_Introduction_CourseInfo.ppt', '2018-05-01', 'ZEOZBP'),
(22, '1_Introduction_CourseInfo.ppt', '2018-05-01', '3RQae0');

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

INSERT INTO `post` (`post_id`, `post_info`, `post_date`, `class_code`) VALUES
(0000000001, 'Lorem ipsum dolor sit amet.', '2018-05-01 23:33:29', '7HfZKA'),
(0000000002, 'พรุ่งนี้ยกนะครับ', '2018-05-01 23:36:10', '7HfZKA'),
(0000000003, 'อาทิตย์นี้เรียนตามปกตินะครับ\r\n', '2018-05-01 23:36:39', '7HfZKA'),
(0000000004, 'สวัสดีครับ', '2018-05-01 23:37:14', '1beeMs'),
(0000000005, 'อาทิตย์นี้เรียนตามปกตินะจะ', '2018-05-01 23:37:40', 'EDjigI'),
(0000000006, 'พน.เรียนปกติ', '2018-05-01 23:37:41', '1beeMs'),
(0000000007, 'วันนี้ฝนตก', '2018-05-01 23:37:52', '1beeMs'),
(0000000008, 'มีอะไรถามได้นะคะ', '2018-05-01 23:38:32', 'EDjigI'),
(0000000009, 'วันนี้วันพุธ', '2018-05-01 23:38:36', '5KMlpX'),
(0000000010, 'วันนี้วันปีใหม่', '2018-05-01 23:38:54', '2gDYRp'),
(0000000011, 'สุขสันส์วันเเรงงาน', '2018-05-01 23:39:01', '5KMlpX'),
(0000000012, 'ท้องฟ้าแจ่มใส ร่างเริงแจ่มสันต์', '2018-05-01 23:39:12', '2gDYRp'),
(0000000013, 'กลุ่มนี้ได้ a', '2018-05-01 23:39:28', '5KMlpX'),
(0000000014, 'hello', '2018-05-01 23:39:30', 'NM8mki'),
(0000000015, 'วันนี้ฝนตกนะ', '2018-05-01 23:40:00', 'NM8mki'),
(0000000016, 'สวัสดีครับ วันนี้เรียนตามปกตินะครับ', '2018-05-01 23:40:11', 'ZEOZBP'),
(0000000017, 'เดี๋ยวอาจารย์จะส่งการบ้านให้ตอนเที่ยงคืนนะครับ', '2018-05-01 23:40:39', 'ZEOZBP'),
(0000000018, 'อาทิตย์หน้าขออนุญาตงดการเรียนการสอนนะครับ', '2018-05-01 23:41:09', 'ZEOZBP'),
(0000000019, 'อย่าลืมทบทวนที่อาจารย์สอนนะครับ ขอสอบออกตามที่สอน', '2018-05-01 23:41:43', 'ZEOZBP'),
(0000000020, 'ไม่มีอะไรคะแค่คิดถึง', '2018-05-01 23:45:56', 'Kt4JKy'),
(0000000021, 'ง่วงนอนจัง\r\n', '2018-05-01 23:46:27', 'BwOsCT'),
(0000000022, 'ยกคลาสนะคะ', '2018-05-01 23:46:33', 'BwOsCT'),
(0000000023, 'I love kmitl', '2018-05-01 23:47:15', '4mvLiI'),
(0000000024, 'วันนี้เรียนตามปกติครับ', '2018-05-01 23:47:17', '4mvLiI'),
(0000000025, 'Pay attention', '2018-05-01 23:47:30', '4mvLiI'),
(0000000026, 'สวัสดีครับ', '2018-05-01 23:53:22', 'C8s9Ao'),
(0000000027, 'วันนี้ฝนตกอาจารย์ยกคลาสครับ', '2018-05-01 23:53:35', 'C8s9Ao'),
(0000000028, 'อาจารย์พาคุณพ่อไปโรงพยาบาลวันนี้ขอยกคลาสครับ', '2018-05-01 23:54:02', 'C8s9Ao'),
(0000000029, 'สวัสดีครับ', '2018-05-01 23:56:29', '3RQae0'),
(0000000030, 'ทานข้าวกันมาก่อนเรียนนะครับเดี๋ยวหิว', '2018-05-01 23:56:46', '3RQae0'),
(0000000031, 'โค้ดนายมีบัคนะ', '2018-05-02 00:07:19', 'EDjigI'),
(0000000032, 'นายๆเราเข้าไปดูResourceไม่ได้อะ', '2018-05-02 00:08:03', 'EDjigI'),
(0000000033, 'ยิ้มให้กันในวันปีใหม่ ', '2018-05-02 00:08:52', '2gDYRp'),
(0000000034, 'ปวดท้องขี้', '2018-05-02 00:18:50', 'NM8mki'),
(0000000035, 'อ้าวนายเมื่อกี้ยังมีบัคอยู่เลยเราเห็นนะอิอิ', '2018-05-02 00:19:04', 'EDjigI'),
(0000000036, 'เห็นนะนักเรียนแอบลบบัค', '2018-05-02 00:20:45', '7HfZKA'),
(0000000037, 'ไม่มีอะไรครับแค่คิดจะพักคิดถึงคิทแคท', '2018-05-02 00:20:53', 'Kt4JKy');

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

INSERT INTO `student_info` (`std_id`, `std_fname`, `std_lname`, `std_pass`, `std_email`) VALUES
('59010005', 's5', 's5', '437f57809f82b9e2947f70fd488eb536', 'Student@kmitl.ac.th'),
('59010800', 'P', 'P', '83878c91171338902e0fe0fb97a8c47a', 'hhjj@kmitl.ac.th'),
('59010817', 'Primwat', 'Panyakiattikun', 'd79fed34363cbde4833765bed336869d', '59010817@kmitl.ac.th'),
('59011088', 'matichon', 'maneegard', 'ed2b1f468c5f915f3f1cf75d7068baae', '59011088@kmitl.ac.th'),
('59011205', 'Wasin ', 'Nimlaor', '81dc9bdb52d04dc20036dbd8313ed055', '59011205@kmitl.ac.th'),
('59011456', 'suriyapong', 'kongurai', '76399478c411834d2f2e607e7b5ac62a', 'mafiahos0@gmail.com'),
('s1', 's1', 's1', '8ddf878039b70767c4a5bcf4f0c4f65e', 's1@example.com'),
('s2', 's2', 's2', 'fac989447cad2edbc89fbcba70003b36', 's2@example.com'),
('s22', 's2', 's2', 'fac989447cad2edbc89fbcba70003b36', 's2@example.com'),
('s3', 's3', 's3', 'c0828e0381730befd1f7a025057c74fb', 's3@example.com'),
('s4', 's4', 's4', '7e7cb6814b74d6596098fc80127569a5', 's4@example.com');

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

INSERT INTO `teacher_info` (`t_id`, `t_fname`, `t_lname`, `t_pass`, `t_email`, `t_tel`, `t_office`) VALUES
('1234', 'www', 'www', '81dc9bdb52d04dc20036dbd8313ed055', '59011295@kmitl.ac.th', '0813001244', '2'),
('Ameen', 'Ameen', 'Gulistan', 'c4ca4238a0b923820dcc509a6f75849b', 'mafiahos0@gmail.com', '0941400375', 'Sec2'),
('t1', 't1', 't1', '83f1535f99ab0bf4e9d02dfd85d3e3f7', 't1@example.com', '0000000000', 'E12'),
('t2', 't2', 't2', '0f826a89cf68c399c5f4cf320c1a5842', 't2@example.com', '0000000000', 'E12');

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

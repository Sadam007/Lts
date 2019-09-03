-- phpMyAdmin SQL Dump
-- version 4.4.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 17, 2016 at 06:52 AM
-- Server version: 5.6.25
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `letter_tracking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`) VALUES
(2, 'Computer scince'),
(3, 'Information technology(IT)'),
(4, 'Social work'),
(5, 'Socialogy'),
(6, 'Parmacy'),
(7, 'Law'),
(8, 'English'),
(9, 'Education'),
(10, 'Islamyat'),
(14, 'civel engineering'),
(17, 'software engineering'),
(23, 'software engineering1'),
(24, 'managment studies'),
(25, 'it'),
(26, 'vice chancellor'),
(27, 'Registrar'),
(28, 'hotel and management'),
(29, 'provost office'),
(30, 'chief proctor'),
(31, 'Dean of sciences'),
(32, 'Warden old boys hostel'),
(33, 'warden news boys hostel');

-- --------------------------------------------------------

--
-- Table structure for table `letterstatus`
--

CREATE TABLE IF NOT EXISTS `letterstatus` (
  `LStatusId` int(10) unsigned NOT NULL,
  `Department` varchar(45) NOT NULL,
  `id` int(10) unsigned NOT NULL,
  `Status` tinyint(4) NOT NULL DEFAULT '0',
  `DeptID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=185 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `letterstatus`
--

INSERT INTO `letterstatus` (`LStatusId`, `Department`, `id`, `Status`, `DeptID`) VALUES
(26, '24', 777, 0, 0),
(27, '900', 59, 0, 0),
(28, '4', 900, 0, 0),
(29, '19191', 61, 0, 0),
(30, '4', 19191, 0, 0),
(31, '123456', 63, 1, 0),
(32, '0000', 64, 0, 0),
(33, '7', 0, 0, 0),
(34, '898', 66, 0, 0),
(35, '9009', 67, 0, 0),
(36, '6665', 71, 0, 4),
(37, '767', 72, 0, 4),
(38, '987', 73, 0, 7),
(39, '!@#123', 74, 1, 17),
(40, '0009', 75, 0, 4),
(41, '17', 9, 0, 0),
(42, '6555', 77, 0, 4),
(43, '8', 6555, 0, 0),
(44, '878', 79, 0, 2),
(45, '17', 878, 0, 0),
(46, '01', 81, 0, 17),
(47, '8', 1, 0, 0),
(48, '02', 83, 0, 17),
(49, '17', 2, 0, 0),
(50, '9', 2, 0, 0),
(51, '03', 86, 0, 6),
(52, '8', 3, 0, 0),
(53, '04', 88, 0, 7),
(54, '17', 4, 0, 0),
(55, '9', 4, 0, 0),
(56, '17', 4, 0, 0),
(57, '17', 4, 0, 0),
(58, '17', 4, 0, 0),
(59, '8', 4, 0, 0),
(60, '8', 4, 0, 0),
(61, '05', 96, 0, 8),
(62, '6', 5, 0, 0),
(63, '9', 5, 0, 0),
(64, '06', 99, 0, 6),
(65, '07', 100, 0, 6),
(66, '8', 7, 0, 0),
(67, '08', 102, 0, 2),
(68, '10', 103, 0, 17),
(69, 'red11', 104, 0, 17),
(70, '13', 105, 0, 17),
(71, '9', 13, 0, 0),
(72, '93839', 107, 0, 3),
(73, '01', 108, 0, 3),
(74, '6', 1, 0, 0),
(75, '17', 1, 0, 0),
(76, '001', 114, 0, 2),
(77, '002', 125, 0, 8),
(78, '002', 129, 0, 6),
(79, '002', 131, 0, 6),
(80, '002', 133, 0, 6),
(81, '002', 135, 0, 6),
(82, '002', 138, 0, 6),
(83, '002', 141, 0, 6),
(84, '4', 2, 0, 0),
(85, '6', 2, 0, 0),
(86, '7', 6, 0, 0),
(87, '007', 145, 0, 2),
(88, '17', 7, 0, 0),
(89, '008', 147, 0, 17),
(90, '020', 148, 0, 3),
(91, '9', 20, 0, 0),
(92, '6', 20, 0, 0),
(93, '2', 20, 0, 0),
(94, '0204', 152, 0, 3),
(95, '17', 204, 0, 0),
(96, '9', 204, 0, 0),
(97, '6', 204, 0, 0),
(98, '8', 204, 0, 0),
(99, '17', 204, 0, 0),
(100, '6', 204, 0, 0),
(101, '555555', 159, 0, 2),
(102, '1010', 160, 0, 4),
(103, '030', 161, 0, 6),
(104, '031', 162, 0, 3),
(105, '032', 163, 0, 4),
(106, '2', 32, 0, 0),
(107, '033', 165, 0, 6),
(108, '034', 166, 0, 8),
(109, '17', 34, 0, 0),
(110, '035', 168, 0, 7),
(111, '036', 169, 0, 4),
(112, '037', 170, 0, 3),
(113, '038', 171, 0, 8),
(114, '17', 38, 0, 0),
(115, '040', 173, 0, 10),
(116, '8', 40, 0, 0),
(117, '045', 175, 0, 8),
(118, '0123', 176, 0, 2),
(119, '051', 177, 0, 2),
(120, '011', 178, 0, 8),
(121, '0543', 179, 0, 7),
(122, '046', 180, 0, 17),
(123, '057', 181, 0, 8),
(124, '9', 46, 0, 0),
(125, '001', 183, 0, 17),
(126, '2', 1, 0, 0),
(127, '001', 185, 0, 4),
(128, '055', 186, 0, 8),
(129, '9', 57, 0, 0),
(130, '009', 188, 0, 8),
(131, '17', 9, 0, 0),
(132, '010', 190, 0, 8),
(133, '3', 10, 0, 0),
(134, '012', 192, 0, 3),
(135, '8', 12, 0, 0),
(136, '17', 12, 0, 0),
(137, '017', 195, 0, 3),
(138, '9', 17, 0, 0),
(139, '9', 17, 0, 0),
(140, '018', 198, 0, 3),
(141, '9', 18, 0, 0),
(142, '8', 18, 0, 0),
(143, '17', 18, 0, 0),
(144, '019', 202, 0, 3),
(145, '8', 19, 0, 0),
(146, '025', 204, 0, 3),
(147, '099', 205, 0, 17),
(148, '9', 99, 0, 0),
(149, '5678', 207, 0, 9),
(150, '3', 5678, 0, 0),
(151, '333', 209, 0, 8),
(152, '17', 333, 0, 0),
(153, '544', 211, 0, 3),
(154, '9', 544, 0, 0),
(155, '101', 213, 0, 4),
(156, '17', 101, 0, 0),
(157, '6', 101, 0, 0),
(158, '1999', 216, 0, 2),
(159, '9', 1999, 0, 0),
(160, '1998', 218, 0, 3),
(161, '0929', 219, 0, 3),
(162, '17', 929, 0, 0),
(163, '17', 929, 0, 0),
(164, '17', 929, 0, 0),
(165, '17', 929, 0, 0),
(166, '17', 929, 0, 0),
(167, '17', 929, 0, 0),
(168, '17', 929, 0, 0),
(169, '1290', 226, 0, 17),
(170, '1290', 227, 0, 17),
(171, '1290', 228, 0, 17),
(172, '1290', 229, 0, 17),
(173, '1290', 230, 0, 17),
(174, '8', 1290, 0, 0),
(175, '6', 1290, 0, 0),
(176, '10101', 233, 0, 17),
(177, '6', 10101, 0, 0),
(178, '9', 10101, 0, 0),
(179, '17', 10101, 0, 0),
(180, '3', 10101, 0, 0),
(181, '420', 240, 0, 3),
(182, '9', 420, 0, 0),
(183, '25', 1998, 0, 0),
(184, '057', 243, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `letter_status`
--

CREATE TABLE IF NOT EXISTS `letter_status` (
  `id` int(30) NOT NULL,
  `date11` varchar(250) DEFAULT NULL,
  `post_title` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `reference_number` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `reciver` varchar(50) NOT NULL,
  `comments` text NOT NULL,
  `status` varchar(40) NOT NULL,
  `reciver_comm` text NOT NULL,
  `file` varchar(500) NOT NULL,
  `latter_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=244 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `letter_status`
--

INSERT INTO `letter_status` (`id`, `date11`, `post_title`, `name`, `email`, `reference_number`, `department`, `reciver`, `comments`, `status`, `reciver_comm`, `file`, `latter_id`) VALUES
(178, '27/09/16', 'shakil khan', 'saeed khan', 'saeed@gmail.com', '011', '8', 'anwarkhan@yahoo.com', 'hi this is khan', 'received', '', 'download.jpg', 0),
(179, '27/09/16', 'hellooo', 'saeed khan', 'saeed@gmail.com', '0543', '7', 'imran@yahoo.com', 'khan', 'pending', '', 'download (3).jpg', 0),
(180, '27/09/16', 'shakil khan deer de tang kram', 'imran khan', 'imran@yahoo.com', '046', '23', 'ayazyousafzai786@gmail.com', 'darwakhla', 'final', '', 'download (4).jpg', 0),
(181, '27/09/16', 'subject for testing', 'asad', 'asad@yahoo.com', '057', '8', 'anwarkhan@yahoo.com', 'please received this and forward to other.', 'pending', '', '13335891_510349442498523_1885876428989502520_n.jpg', 0),
(182, '28/Sep/2016', 'shakil khan deer de tang kram', 'ayaz', 'ayazyousafzai786@gmail.com', '046', '9', 'shahid@yahoo.com', 'please forward to other...', 'received', '', '', 180),
(183, '28/09/16', 'to check its', 'shahid', 'shahid@yahoo.com', '001', '17', 'ayazyousafzai786@gmail.com', 'this is testing', 'final', '', 'download (4).jpg', 0),
(186, '28/09/16', 'subject', 'ayaz', 'ayazyousafzai786@gmail.com', '055', '8', 'anwarkhan@yahoo.com', 'hi i am ayaz', 'pending', '', 'download (1).jpg', 0),
(187, '28/Sep/2016', 'subject for testing', 'anwar', 'anwarkhan@yahoo.com', '057', '9', 'shahid@yahoo.com', 'jhfftf\r\n			', 'received', '', '', 181),
(188, '29/09/16 01:33:08', 'hjahsdhs', 'ayaz', 'ayazyousafzai786@gmail.com', '009', '8', 'anwarkhan@yahoo.com', 'jhfuhf', 'pending', '', 'mailbox-19973__340.jpg', 0),
(190, '29/09/16 01:40:01', 'hgdysgtf', 'ayaz', 'ayazyousafzai786@gmail.com', '010', '8', 'anwarkhan@yahoo.com', 'jsfhuhd', 'pending', '', 'download (4).jpg', 0),
(191, '29/09/16 09:42:41', 'hgdysgtf', 'anwar', 'anwarkhan@yahoo.com', '010', '3', 'barkat@yahoo.com', 'njhuh', 'pending', '', '', 190),
(192, '29/09/16 01:50:42', 'ayaz', 'ayaz', 'ayazyousafzai786@gmail.com', '012', '3', 'barkat@yahoo.com', 'kdsjvijsuv', 'pending', '', 'download (2).jpg', 0),
(193, '29/09/16 09:51:24', 'ayaz', 'barkat', 'barkat@yahoo.com', '012', '8', 'anwarkhan@yahoo.com', 'dsfd\r\n			', 'pending', '', '', 192),
(194, '29/09/16 09:52:00', 'ayaz', 'anwar', 'anwarkhan@yahoo.com', '012', '17', 'asad@yahoo.com', 'dfbfngnf\r\n			', 'pending', '', '', 193),
(195, '29/09/16 03:06:21', 'final testing', 'ayaz', 'ayazyousafzai786@gmail.com', '017', '3', 'barkat@yahoo.com', 'please forward to next node', 'pending', '', 'letters-1659716__340.jpg', 0),
(196, '29/09/16 11:07:20', 'final testing', 'barkat', 'barkat@yahoo.com', '017', '9', 'shahid@yahoo.com', 'i am serious\r\n			', 'pending', '', '', 195),
(197, '29/09/16 11:08:01', 'final testing', 'shahid', 'shahid@yahoo.com', '017', '9', 'shahid@yahoo.com', 'send to other plz			', 'pending', '', '', 196),
(198, '29/09/16 03:36:54', 'sadam', 'ayaz', 'ayazyousafzai786@gmail.com', '018', '3', 'barkat@yahoo.com', 'hudshu', 'pending', '', 'butterfly-1127666_1280.jpg', 0),
(199, '29/09/16 11:37:58', 'sadam', 'barkat', 'barkat@yahoo.com', '018', '9', 'shahid@yahoo.com', '\r\n	kjiovjivjdiv		', 'pending', '', '', 198),
(200, '29/09/16 11:39:09', 'sadam', 'shahid', 'shahid@yahoo.com', '018', '8', 'anwarkhan@yahoo.com', 'cudhuyd7dyd\r\n			', 'pending', '', '', 199),
(201, '29/09/16 11:40:34', 'sadam', 'anwar', 'anwarkhan@yahoo.com', '018', '17', 'asad@yahoo.com', 'hdhudhhd\r\n			', 'pending', '', '', 200),
(202, '29/09/16 03:47:01', 'zahirshah', 'ayaz', 'ayazyousafzai786@gmail.com', '019', '3', 'barkat@yahoo.com', 'hi this is checking', 'pending', '', 'butterfly-1127666_1280.jpg', 0),
(203, '29/09/16 11:48:05', 'zahirshah', 'barkat', 'barkat@yahoo.com', '019', '8', 'anwarkhan@yahoo.com', 'hi its ok\r\n			', '', '', '', 202),
(204, '01/10/16 06:40:53', 'helooo ', 'ayaz', 'ayazyousafzai786@gmail.com', '025', '3', 'barkat@yahoo.com', 'hiruh', 'pending', '', '12046714_827275764036561_4128963994655502874_n.jpg', 0),
(205, '01/10/16 06:44:19', 'ghuuyyty', 'barkat', 'barkat@yahoo.com', '099', '17', 'ayazyousafzai786@gmail.com', 'hfugryfu', 'received', '', '12046714_827275764036561_4128963994655502874_n.jpg', 0),
(206, '01/10/16 02:50:54', 'ghuuyyty', 'ayaz', 'ayazyousafzai786@gmail.com', '099', '9', 'shahid@yahoo.com', 'jfhuihgivhr\r\n			', '', '', '', 205),
(207, '02/10/16 10:59:38', 'jhaifue', 'ayaz', 'ayazyousafzai786@gmail.com', '5678', '9', 'shahid@yahoo.com', 'ki8u8uy8uu', 'pending', '', 'Array', 0),
(208, '02/10/16 07:00:20', 'jhaifue', 'shahid', 'shahid@yahoo.com', '5678', '3', 'barkat@yahoo.com', 'gvygtfty\r\n			', '', '', '', 207),
(209, '02/10/16 11:07:56', 'thuiii', 'barkat', 'barkat@yahoo.com', '333', '8', 'anwarkhan@yahoo.com', 'gfsydyu', 'pending', '', 'Array', 0),
(210, '02/10/16 07:08:31', 'thuiii', 'anwar', 'anwarkhan@yahoo.com', '333', '17', 'ayazyousafzai786@gmail.com', 'hfusduf\r\n			', '', '', '', 209),
(211, '02/10/16 10:15:05', 'jdhudyf7d', 'ayaz', 'ayazyousafzai786@gmail.com', '544', '3', 'barkat@yahoo.com', 'jdjvhfuv', 'received', '', 'Array', 0),
(212, '02/10/16 06:16:25', 'jdhudyf7d', 'barkat', 'barkat@yahoo.com', '544', '9', 'shahid@yahoo.com', '\r\n	iuefewyye		', 'received', '', '', 211),
(213, '03/10/16 12:30:06', 'asad ', 'shahid', 'shahid@yahoo.com', '101', '4', 'irfankhan@yahoo.com', 'hi irfan this ayaz', 'received', '', 'Array', 0),
(214, '03/10/16 08:31:16', 'asad ', 'irfan', 'irfankhan@yahoo.com', '101', '17', 'ayazyousafzai786@gmail.com', 'please forward to next node', 'received', '', '', 213),
(215, '03/10/16 08:41:25', 'asad ', 'ayaz', 'ayazyousafzai786@gmail.com', '101', '6', 'saeed@gmail.com', 'Forward it to rafiullah\r\n			', 'received', '', '', 214),
(216, '03/10/16 01:26:59', 'lsakjdflaksjflkjasl;gjla;sdjfl', 'saeed khan', 'saeed@gmail.com', '1999', '2', 'rashid123@gmail.com', 'ldsajfjlksjflksdjflsajdfkhasdkbsdjhvbuahbrauhwbu', 'received', '', '18728-hazrat.docx', 0),
(217, '03/10/16 09:27:55', 'lsakjdflaksjflkjasl;gjla;sdjfl', 'rashid khan', 'rashid123@gmail.com', '1999', '9', 'shahid@yahoo.com', 'forward it to ayaz\r\n			', 'pending', '', '', 216),
(218, '03/10/16 01:50:43', 'testing002', 'rashid khan', 'rashid123@gmail.com', '1998', '3', 'barkat@yahoo.com', 'forward it to asad', 'received', '', '35596-hazrat.docx', 0),
(219, '03/10/16 02:05:50', 'testinglsdjf', 'rashid khan', 'rashid123@gmail.com', '0929', '3', 'barkat@yahoo.com', 'forward it to ayaz', 'received', '', 'hazrat.docx', 0),
(226, '03/10/16 10:28:21', 'testinglsdjf', 'barkat', 'barkat@yahoo.com', '0929', '17', 'ayazyousafzai786@gmail.com', 'sldkfjlsdjf\r\n			', 'pending', '', 'hazrat.docx', 0),
(230, '03/10/16 03:58:40', 'file_upload', 'barkat', 'barkat@yahoo.com', '1290', '17', 'ayazyousafzai786@gmail.com', 'forward it to someone else', 'received', '', '29762-screen 7.png', 0),
(231, '03/10/16 11:59:35', 'file_upload', 'ayaz', 'ayazyousafzai786@gmail.com', '1290', '8', 'anwarkhan@yahoo.com', 'forward it to pharmacy		', 'received', '', '29762-screen 7.png', 0),
(232, '03/10/16 12:00:48', 'file_upload', 'anwar', 'anwarkhan@yahoo.com', '1290', '6', 'saeed@gmail.com', 'forward it to it\r\n			', 'final', '', '29762-screen 7.png', 0),
(233, '03/10/16 04:06:09', 'time testing', 'saeed khan', 'saeed@gmail.com', '10101', '17', 'asad@yahoo.com', 'Forward it to Pharmacy', 'received', '', '40297-screen 2.png', 0),
(234, '03/10/16 04:06:52', 'time testing', 'asad', 'asad@yahoo.com', '10101', '6', 'saeed@gmail.com', 'Forward it to education\r\n			', 'received', '', '40297-screen 2.png', 0),
(235, '03/10/16 04:07:45', 'time testing', 'saeed khan', 'saeed@gmail.com', '10101', '9', 'shahid@yahoo.com', 'Forward it to Information Technology\r\n			', 'received', '', '40297-screen 2.png', 0),
(236, '03/10/16 04:57:26', 'time testing', 'shahid', 'shahid@yahoo.com', '10101', '17', 'rafi@yahoo.com', 'Forward it to software\r\n			', 'received', '', '40297-screen 2.png', 0),
(237, '03/10/16 04:58:49', 'time testing', 'rafi', 'rafi@yahoo.com', '10101', '3', 'barkat@yahoo.com', 'Forward it to education\r\n			', 'final', '', '40297-screen 2.png', 0),
(238, '03/10/16', 'Roohullah ws ba de ptha wlgi', 'asad', 'asad@yahoo.com', '420', '3', 'barkat@yahoo.com', 'Forward it to Mr.Barbar', 'received', '', 'screenshot-16.png', 0),
(239, '03/10/16', 'Roohullah ws ba de ptha wlgi', 'asad', 'asad@yahoo.com', '420', '3', 'barkat@yahoo.com', 'Forward it to Mr.Barbar', 'received', '', 'screenshot-17.png', 0),
(240, '03/10/16', 'Roohullah ws ba de ptha wlgi', 'asad', 'asad@yahoo.com', '420', '3', 'barkat@yahoo.com', 'Forward it to Mr.Barbar', 'received', '', 'screenshot-18.png', 0),
(242, '04/10/16 12:25:56', 'testing002', 'barkat', 'barkat@yahoo.com', '1998', '25', 'zahid@zahid.com', 'jldfkjlaj\r\n			', 'pending', '', '35596-hazrat.docx', 0),
(243, '04/10/16 02:49:33', 'subject', 'ayaz', 'ayazyousafzai786@gmail.com', '057', '3', 'barkat@yahoo.com', 'gefyegyfg', 'pending', '', '63570-screen 7.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `status_update`
--

CREATE TABLE IF NOT EXISTS `status_update` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `ref_number` int(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `reciver` varchar(50) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `date1` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `department` varchar(45) NOT NULL,
  `designation` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `department`, `designation`) VALUES
(67, 'shahid', 'shahid@yahoo.com', '25f9e794323b453885f5181f1b624d0b', '9', 'std'),
(68, 'anwar', 'anwarkhan@yahoo.com', '25f9e794323b453885f5181f1b624d0b', '8', 'std'),
(69, 'ayaz', 'ayazyousafzai786@gmail.com', '25f9e794323b453885f5181f1b624d0b', '17', 'student'),
(70, 'asad', 'asad@yahoo.com', '202cb962ac59075b964b07152d234b70', '17', 'student'),
(71, 'irfan', 'irfankhan@yahoo.com', '25f9e794323b453885f5181f1b624d0b', '4', 'std'),
(72, 'rafi', 'rafi@yahoo.com', '25f9e794323b453885f5181f1b624d0b', '17', 'std'),
(73, 'jawhar ali', 'jawharali@yahoo.com', '25f9e794323b453885f5181f1b624d0b', '26', 'vc'),
(74, 'rashid khan', 'rashid123@gmail.com', '25f9e794323b453885f5181f1b624d0b', '2', 'teacher'),
(75, 'naveed khan', 'naveed@yahoo.com', '25f9e794323b453885f5181f1b624d0b', '4', 'student'),
(76, 'imran khan', 'imran@yahoo.com', '25f9e794323b453885f5181f1b624d0b', '7', 'teacher'),
(77, 'saeed khan', 'saeed@gmail.com', '202cb962ac59075b964b07152d234b70', '6', 'student'),
(78, 'irfan khan', 'irfan45@yahoo.com', '25f9e794323b453885f5181f1b624d0b', '24', 'student'),
(79, 'barkat', 'barkat@yahoo.com', '202cb962ac59075b964b07152d234b70', '3', 'std'),
(80, 'sajad ali', 'sajad@yahoo.com', '25f9e794323b453885f5181f1b624d0b', '29', 'lecturer'),
(81, 'inam ullah', 'inam@yahoo.com', '25f9e794323b453885f5181f1b624d0b', '30', 'chief proctor'),
(82, 'roohullah jan lawangen', 'rooh123@yahoo.com', '25f9e794323b453885f5181f1b624d0b', '33', 'warden'),
(83, 'siraj uddin', 'siraj@yahoo.com', '25f9e794323b453885f5181f1b624d0b', '33', 'warden'),
(84, 'rohail', 'rohail@yahoo.com', '25f9e794323b453885f5181f1b624d0b', '8', 'std'),
(85, 'afnan', 'afnankhan@yahoo.com', '25f9e794323b453885f5181f1b624d0b', '10', 'std'),
(86, 'waqas', 'waqaskhan@yahoo.com', '25f9e794323b453885f5181f1b624d0b', '24', 'std'),
(87, 'zahid', 'zahid@zahid.com', '25f9e794323b453885f5181f1b624d0b', '25', 'about this');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `letterstatus`
--
ALTER TABLE `letterstatus`
  ADD PRIMARY KEY (`LStatusId`);

--
-- Indexes for table `letter_status`
--
ALTER TABLE `letter_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_update`
--
ALTER TABLE `status_update`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `letterstatus`
--
ALTER TABLE `letterstatus`
  MODIFY `LStatusId` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=185;
--
-- AUTO_INCREMENT for table `letter_status`
--
ALTER TABLE `letter_status`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=244;
--
-- AUTO_INCREMENT for table `status_update`
--
ALTER TABLE `status_update`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=88;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

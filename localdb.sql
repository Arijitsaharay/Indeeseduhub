-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:49691
-- Generation Time: Sep 20, 2020 at 05:20 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `localdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `img_table`
--

CREATE TABLE `img_table` (
  `img_id` int(11) NOT NULL,
  `img1` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `img_table`
--

INSERT INTO `img_table` (`img_id`, `img1`) VALUES
(1, 'dello1.jpg'),
(13, ''),
(12, ''),
(11, ''),
(14, '');

-- --------------------------------------------------------

--
-- Table structure for table `job_table`
--

CREATE TABLE `job_table` (
  `job_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `agenda` varchar(1000) NOT NULL,
  `class` varchar(30) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `video` varchar(1000) NOT NULL,
  `presentation` varchar(100) NOT NULL,
  `date` varchar(20) NOT NULL,
  `join_id` varchar(200) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `img1` text NOT NULL,
  `img2` text NOT NULL,
  `img3` text NOT NULL,
  `apply` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_table`
--

INSERT INTO `job_table` (`job_id`, `user_id`, `name`, `email`, `phone`, `agenda`, `class`, `subject`, `video`, `presentation`, `date`, `join_id`, `pwd`, `img1`, `img2`, `img3`, `apply`) VALUES
(34, 46, 'Priyam Mazundar', 'tirthadeepbfb.com@gmail.com', '9748196335', 'Learning about Sets and Relations', 'XI', 'Mathematics', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '01-09-2020', '62891198547', 'XIMATHS', 'Set-Theory.jpg', '', '', 'https://teams.live.com/l/invite/FBAAvrDPkL0amf6-Q'),
(28, 44, 'Praloy Dutta ', 'proloydutta89@gmail.com', '7862365600', 'Optics: 1. Convex lens2. Sums on convex lens3. Previous year question solve', '11', 'Physics Optics', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '04-09-2020', '34524534', 'Optics123', 'IMG-20200918-WA0018.jpg', '', '', 'https://teams.live.com/l/invite/FBAvSO0tj9T1NCGSQ'),
(29, 44, 'Praloy Dutta ', 'proloydutta89@gmail.com', '7862365600', 'Thermodynamics1. Sums2. Exam', '12', 'Thermodynamics', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '10-09-2020', '34524534667', 'Thermodynamics123', 'IMG-20200918-WA0017.jpg', '', '', 'https://teams.live.com/l/invite/FBAvSO0tj9T1NCGSQ'),
(30, 44, 'Praloy Dutta ', 'proloydutta89@gmail.com', '7862365600', 'Quantum Physics basic Introduction and discussion ', '11', 'Quantum Physics', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '02-09-2020', '527277373', 'Quantum123', 'IMG-20200918-WA0020.jpg', '', '', 'https://teams.live.com/l/invite/FBAvSO0tj9T1NCGSQ'),
(35, 46, 'Priyam Mazundar', 'tirthadeepbfb.com@gmail.com', '9748196335', 'Integration ', 'XII', 'Mathematics', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '03-09-2020', '62891198547', 'XIIMATHS', 'integration.jpg', '', '', 'https://teams.live.com/l/invite/FBAAvrDPkL0amf6-Q'),
(36, 46, 'Priyam Mazundar', 'tirthadeepbfb.com@gmail.com', '9748196335', 'Learning about higher algebra', 'XI', 'Mathematics', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '05-09-2020', '62891198547', 'XIMATHS', 'algebra.jpeg', '', '', 'https://teams.live.com/l/invite/FBAAvrDPkL0amf6-Q'),
(37, 46, 'Priyam Mazundar', 'tirthadeepbfb.com@gmail.com', '9748196335', 'Basics of Trigometry', 'IX', 'Mathematics', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '07-09-2020', '62891198547', 'IXMATHS', 'trigonometry_basics.jpg', '', '', 'https://teams.live.com/l/invite/FBAAvrDPkL0amf6-Q'),
(38, 46, 'Priyam Mazundar', 'tirthadeepbfb.com@gmail.com', '9748196335', 'More about Trigometry', 'IX', 'Mathematics', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '09-09-2020', '62891198547', 'IXMATHS', 'trigonometry.jpg', '', '', 'https://teams.live.com/l/invite/FBAAvrDPkL0amf6-Q'),
(39, 44, 'Praloy Dutta ', 'proloydutta89@gmail.com', '7862365600', 'Discussion on Basic physics of light', '8', 'Physic Light', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '06-09-2020', '62882672', 'Light123', 'IMG-20200918-WA0023.jpg', '', '', 'https://teams.live.com/l/invite/FBAvSO0tj9T1NCGSQ'),
(40, 46, 'Priyam Mazundar', 'tirthadeepbfb.com@gmail.com', '9748196335', 'Learning Higher Trigonometry', 'XI', 'Mathematics', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '11-09-2020', '62891198547', 'XIMATHS', 'trigonometry.jpg', '', '', 'https://teams.live.com/l/invite/FBAAvrDPkL0amf6-Q'),
(41, 46, 'Priyam Mazundar', 'tirthadeepbfb.com@gmail.com', '9748196335', 'Learning Higher Trigonometry (Part 2)', 'XI', 'Mathematics', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '13-09-2020', '62891198547', 'XIMATHS', 'Icon-Trigonometry.jpg', '', '', 'https://teams.live.com/l/invite/FBAAvrDPkL0amf6-Q'),
(42, 44, 'Praloy Dutta ', 'proloydutta89@gmail.com', '7862365600', 'Today I will discuss basis principles of waves', '8', 'Physics Waves', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '12-09-2020', '62778628', 'Waves123', 'IMG-20200918-WA0027.jpg', '', '', 'https://teams.live.com/l/invite/FBAvSO0tj9T1NCGSQ'),
(43, 46, 'Priyam Mazundar', 'tirthadeepbfb.com@gmail.com', '9748196335', 'Construction of Triangles', 'X', 'Mathematics', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '15-09-2020', '62891198547', 'XMATHS', 'triangle1.jpg', '', '', 'https://teams.live.com/l/invite/FBAAvrDPkL0amf6-Q'),
(44, 44, 'Praloy Dutta ', 'proloydutta89@gmail.com', '7862365600', 'Todays agenda SHM', '11', 'Physics SHM', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '14-09-2020', '52767886', 'PhysicsSHM123', 'IMG-20200918-WA0021.jpg', '', '', 'https://teams.live.com/l/invite/FBAvSO0tj9T1NCGSQ'),
(45, 46, 'Priyam Mazundar', 'tirthadeepbfb.com@gmail.com', '9748196335', 'Construction of Polygons of higher order', 'X', 'Mathematics', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '17-09-2020', '62891198547', 'XMATHS', 'polygons.jpg', '', '', 'https://teams.live.com/l/invite/FBAAvrDPkL0amf6-Q'),
(46, 46, 'Priyam Mazundar', 'tirthadeepbfb.com@gmail.com', '9748196335', 'Learning about other geometric shapes', 'XII', 'Mathematics', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '19-09-2020', '62891198547', 'XIIMATHS', 'conic_section.jpg', '', '', 'https://teams.live.com/l/invite/FBAAvrDPkL0amf6-Q'),
(47, 46, 'Priyam Mazundar', 'tirthadeepbfb.com@gmail.com', '9748196335', 'Concepts of Line and Plane', 'XI', 'Mathematics', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '21-09-2020', '62891198547', 'XIMATHS', 'plane_line.jpg', '', '', 'https://teams.live.com/l/invite/FBAAvrDPkL0amf6-Q'),
(48, 44, 'Praloy Dutta ', 'proloydutta89@gmail.com', '7862365600', 'Fluid Mechanis', '12', 'Physics Fluid Mechanics', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '16-09-2020', '5266526727', 'Passcode232', 'IMG-20200918-WA0028.jpg', '', '', 'https://teams.live.com/l/invite/FBAvSO0tj9T1NCGSQ'),
(49, 44, 'Praloy Dutta ', 'proloydutta89@gmail.com', '7862365600', 'Today I will take a short exam on Thermodynamics and Optics', '12', 'Physics exam', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '18-09-2020', '34524534', 'Passcode232', 'IMG-20200918-WA0031.jpg', '', '', 'https://teams.live.com/l/invite/FBAvSO0tj9T1NCGSQ'),
(50, 46, 'Priyam Mazundar', 'tirthadeepbfb.com@gmail.com', '9748196335', 'Concepts of 3D', 'XII', 'Mathematics', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '23-09-2020', '62891198547', 'XIIMATHS', '3d.jpg', '', '', 'https://teams.live.com/l/invite/FBAAvrDPkL0amf6-Q'),
(51, 44, 'Praloy Dutta ', 'proloydutta89@gmail.com', '7862365600', 'Today I will discuss basic concepts of Semiconductor ', '11', 'Physics Semiconductor ', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '20-09-2020', '34524534667', 'Passcode23266', 'IMG-20200918-WA0030.jpg', '', '', 'https://teams.live.com/l/invite/FBAvSO0tj9T1NCGSQ'),
(52, 46, 'Priyam Mazundar', 'tirthadeepbfb.com@gmail.com', '9748196335', 'Reflection', 'IX', 'Mathematics', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '25-09-2020', '62891198547', 'IXMATHS', 'reflection.jpg', '', '', 'https://teams.live.com/l/invite/FBAAvrDPkL0amf6-Q'),
(53, 44, 'Praloy Dutta ', 'proloydutta89@gmail.com', '7862365600', 'Today I will discuss the 2nd part of Semiconductor \r\nAnd discuss previous Year question...', '11', 'Physics Semiconductor 2', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '24-09-2020', '34524534667', 'Passcode23266', 'IMG-20200918-WA0030.jpg', '', '', 'https://teams.live.com/l/invite/FBAvSO0tj9T1NCGSQ'),
(54, 46, 'Priyam Mazundar', 'tirthadeepbfb.com@gmail.com', '9748196335', 'Ogive Drawing', 'X', 'Mathematics', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '27-09-2020', '62891198547', 'XMATHS', 'ogive.jpg', '', '', 'https://teams.live.com/l/invite/FBAAvrDPkL0amf6-Q'),
(55, 44, 'Praloy Dutta ', 'proloydutta89@gmail.com', '7862365600', 'Wave nature of sound', '12', 'Physics Wave 2', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '22-09-2020', '57562727', 'Passcode23266', 'IMG-20200918-WA0027.jpg', '', '', 'https://teams.live.com/l/invite/FBAvSO0tj9T1NCGSQ'),
(56, 44, 'Praloy Dutta ', 'proloydutta89@gmail.com', '7862365600', 'Today I will discuss 2nd part of quantum physics ', '12', 'Quantum Physics', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '26-09-2020', '47565457', '244355', 'IMG-20200918-WA0020.jpg', '', '', 'https://teams.live.com/l/invite/FBAvSO0tj9T1NCGSQ'),
(57, 44, 'Praloy Dutta ', 'proloydutta89@gmail.com', '7862365600', 'Today I will take exam on full syllabus', '11', 'Physics exam', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '30-09-2020', '5266252', 'Pass4625', 'IMG-20200918-WA0031.jpg', '', '', 'https://teams.live.com/l/invite/FBAvSO0tj9T1NCGSQ'),
(58, 46, 'Priyam Mazundar', 'tirthadeepbfb.com@gmail.com', '9748196335', 'Learning about Quadratic Equation', 'IX', 'Mathematics', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '29-09-2020', '62891198547', 'IXMATHS', 'quadratic.png', '', '', 'https://teams.live.com/l/invite/FBAAvrDPkL0amf6-Q'),
(59, 44, 'Praloy Dutta ', 'proloydutta89@gmail.com', '7862365600', '1. Today I will revise Numericals of optics\r\n2. Suggestion will be given for next exam', '11', 'Physics Optics', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '28-09-2020', '5262625', 'Passcode232', 'IMG-20200918-WA0018.jpg', '', '', 'https://teams.live.com/l/invite/FBAvSO0tj9T1NCGSQ'),
(60, 44, 'Praloy Dutta ', 'proloydutta89@gmail.com', '7862365600', 'Basic concepts of Sound wave', '8', 'Physics sound ', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '08-09-2020', '5628627', 'Physics8888', 'IMG-20200918-WA0032.jpg', '', '', 'https://teams.live.com/l/invite/FBAvSO0tj9T1NCGSQ'),
(61, 50, 'Arijit Saha Ray', 'arijitsaharay07@gmail.com', '+91 7003959492', 'Understand the concept of functions and recursion.', '12', 'Computer Science', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '03-09-2020', '54789512', 'recursion12', 'recursion.jpeg', '', '', 'https://teams.live.com/l/invite/FBA9zWwsu0si7NyVA'),
(62, 50, 'Arijit Saha Ray', 'arijitsaharay07@gmail.com', '+91 7003959492', ' Learn how to create and use Python libraries.', '12', 'Computer Science', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '06-09-2020', '78951542', 'python12', 'python.png', '', '', 'https://teams.live.com/l/invite/FBA9zWwsu0si7NyVA'),
(63, 50, 'Arijit Saha Ray', 'arijitsaharay07@gmail.com', '+91 7003959492', 'Learn about the concept of efficiency in algorithms and computing in general.', '11', 'Computer Science', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '09-09-2020', '69851423', 'algo437', 'algorithms.jpg', '', '', 'https://teams.live.com/l/invite/FBA9zWwsu0si7NyVA'),
(64, 50, 'Arijit Saha Ray', 'arijitsaharay07@gmail.com', '+91 7003959492', 'Learn basic data structures: lists, stacks, and queues.', '12', 'Computer Science', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '12-09-2020', '89546258', 'dataStruct12', 'dataStructures.jpg', '', '', 'https://teams.live.com/l/invite/FBA9zWwsu0si7NyVA'),
(65, 50, 'Arijit Saha Ray', 'arijitsaharay07@gmail.com', '+91 7003959492', 'Learn file handling.', '9', 'Computer Science', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '15-09-2020', '58964562', 'filehandl32', 'file_handling.jpg', '', '', 'https://teams.live.com/l/invite/FBA9zWwsu0si7NyVA'),
(66, 50, 'Arijit Saha Ray', 'arijitsaharay07@gmail.com', '+91 7003959492', 'Get a basic understanding of computer networks: network stack, basic network hardware, basic protocols, and basic tools.', '12', 'Computer Science', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '18-09-2020', '58964588', 'network12', 'network.jpg', '', '', 'https://teams.live.com/l/invite/FBA9zWwsu0si7NyVA'),
(67, 50, 'Arijit Saha Ray', 'arijitsaharay07@gmail.com', '+91 7003959492', 'Connect a Python program with an SQL database, and learn aggregation functions in SQL.', '12', 'Computer Science', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '21-09-2020', '55698554', 'sqldata12', 'sql.png', '', '', 'https://teams.live.com/l/invite/FBA9zWwsu0si7NyVA'),
(68, 50, 'Arijit Saha Ray', 'arijitsaharay07@gmail.com', '+91 7003959492', 'Have a clear understanding of cyber ethics and cybercrime. Understand the value of technology in societies, gender and disability issues, and the technology behind biometric ids.', '12', 'Computer Science', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '24-09-2020', '56894577', 'hack57', 'security.png', '', '', 'https://teams.live.com/l/invite/FBA9zWwsu0si7NyVA'),
(69, 50, 'Arijit Saha Ray', 'arijitsaharay07@gmail.com', '+91 7003959492', 'Familiarity with basics of computers.', '9', 'Computer Science', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '27-09-2020', '54896545', 'basics9', 'computerBasics.png', '', '', 'https://teams.live.com/l/invite/FBA9zWwsu0si7NyVA'),
(70, 50, 'Arijit Saha Ray', 'arijitsaharay07@gmail.com', '+91 7003959492', 'Ability to navigate the file system.', '9', 'Computer Science', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '30-09-2020', '78552489', 'filehandl9', 'filesystem.png', '', '', 'https://teams.live.com/l/invite/FBA9zWwsu0si7NyVA'),
(71, 50, 'Arijit Saha Ray', 'arijitsaharay07@gmail.com', '+91 7003959492', 'Microsoft Power Point Basics', '8', 'Computer Science', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '07-09-2020', '95894689', 'powpoint8', 'Power-Point.jpg', '', '', 'https://teams.live.com/l/invite/FBA9zWwsu0si7NyVA'),
(72, 50, 'Arijit Saha Ray', 'arijitsaharay07@gmail.com', '+91 7003959492', 'Create and edit rich text documents, spreadsheets, and presentations.', '10', 'Computer Science', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '14-09-2020', '78959546', 'document45', 'office.jpg', '', '', 'https://teams.live.com/l/invite/FBA9zWwsu0si7NyVA'),
(73, 50, 'Arijit Saha Ray', 'arijitsaharay07@gmail.com', '+91 7003959492', 'Perform basic data manipulation using spreadsheets.', '7', 'Computer Science', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '22-09-2020', '45896585', 'spreadsheet7', 'spreadsheets.png', '', '', 'https://teams.live.com/l/invite/FBA9zWwsu0si7NyVA'),
(74, 50, 'Arijit Saha Ray', 'arijitsaharay07@gmail.com', '+91 7003959492', 'Safe and correct usage of websites, social networks, chat sites, and email.', '10', 'Computer Science', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '28-09-2020', '98654752', 'cyber10', 'cyberbullying.jpg', '', '', 'https://teams.live.com/l/invite/FBA9zWwsu0si7NyVA'),
(75, 50, 'Arijit Saha Ray', 'arijitsaharay07@gmail.com', '+91 7003959492', 'Send and receive emails, follow email etiquette, and communicate over the internet.', '9', 'Computer Science', 'https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '17-09-2020', '58964851', 'emailequity9', 'email.png', '', '', 'https://teams.live.com/l/invite/FBA9zWwsu0si7NyVA'),
(76, 45, 'soumya bhattacherjee', 'sb3567cv@gmail.com', '7980775239', 'Organic chemistry -OH bonding alcohol formation ', '12', 'Chemistry', ' https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '03-09-2020', 'Chemistry_12', 'chemistry12', 'free-chemistry-books.jpg', '', '', 'https://teams.live.com/l/invite/FBAiMGl60nKcNY-gg'),
(77, 45, 'soumya bhattacherjee', 'sb3567cv@gmail.com', '7980775239', 'Basic idea about organic chemistry', '12', 'Chemistry', ' https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '01-09-2020', 'Chemistry_12', 'chemistry12', 'apps.33325.14369444307494184.16fbe8f7-06c4-4e13-b0a2-3483175db1af.jpg', '', '', 'https://teams.live.com/l/invite/FBAiMGl60nKcNY-gg'),
(78, 51, 'Ritam Dey', 'ritam@gmail.com', '9007635827', 'English Language PracticeArticlesVoices', '10', 'English Language', ' https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '01-09-2020', '123456', 'englang', 'englang.jpg', '', '', 'https://teams.live.com/l/invite/FBAkNBrEq3BK3OTOw'),
(79, 45, 'soumya bhattacherjee', 'sb3567cv@gmail.com', '7980775239', 'Basic idea About physical Chemistry', '11', 'Chemistry', ' https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '10-09-2020', 'Chemistry_11', 'chemistry11', 'Physical-Chemistry.jpg', '', '', 'https://teams.live.com/l/invite/FBAiMGl60nKcNY-gg'),
(80, 51, 'Ritam Dey', 'ritam@gmail.com', '9007635827', 'English Language Practice\r\nTenses', '10', 'English Language', ' https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '04-09-2020', '123456', 'englang', 'englang3.jpg', '', '', 'https://teams.live.com/l/invite/FBAkNBrEq3BK3OTOw'),
(81, 45, 'soumya bhattacherjee', 'sb3567cv@gmail.com', '7980775239', 'Why we study inorganic chemistry', '11', 'Chemistry', ' https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '05-09-2020', 'Chemistry_11', 'chemistry11', 'inorganic.jpg', '', '', 'https://teams.live.com/l/invite/FBAiMGl60nKcNY-gg'),
(82, 51, 'Ritam Dey', 'ritam@gmail.com', '9007635827', 'Prepositions', '10', 'English Language', ' https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '08-09-2020', '123456', 'englang', 'englang4.jpg', '', '', 'https://teams.live.com/l/invite/FBAkNBrEq3BK3OTOw'),
(83, 45, 'soumya bhattacherjee', 'sb3567cv@gmail.com', '7980775239', 'Study about Different kind of R-group', '12', 'Chemistry', ' https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '07-09-2020', 'Chemistry_12', 'chemistry12', 'fgroup.gif', '', '', 'https://teams.live.com/l/invite/FBAiMGl60nKcNY-gg'),
(84, 51, 'Ritam Dey', 'ritam@gmail.com', '9007635827', 'Change the Voice', '10', 'English Language', ' https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '12-09-2020', '123456', 'englang', 'englang5.jpg', '', '', 'https://teams.live.com/l/invite/FBAkNBrEq3BK3OTOw'),
(85, 51, 'Ritam Dey', 'ritam@gmail.com', '9007635827', 'Gammar Practice 1', '10', 'English Language', ' https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '16-09-2020', '123456', 'englang', 'englang6.jpg', '', '', 'https://teams.live.com/l/invite/FBAkNBrEq3BK3OTOw'),
(86, 45, 'soumya bhattacherjee', 'sb3567cv@gmail.com', '7980775239', 'Study On Functional group', '12', 'Chemistry', ' https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '18-09-2020', 'Chemistry_12', 'chemistry12', '60b63548a51b0c80ecdcd8076d81362a.png', '', '', 'https://teams.live.com/l/invite/FBAiMGl60nKcNY-gg'),
(87, 51, 'Ritam Dey', 'ritam@gmail.com', '9007635827', 'Grammar Practice 2', '10', 'English Language', ' https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '20-09-2020', '123456', 'englang', 'englang7.jpg', '', '', 'https://teams.live.com/l/invite/FBAkNBrEq3BK3OTOw'),
(88, 45, 'soumya bhattacherjee', 'sb3567cv@gmail.com', '7980775239', 'Study on periodic table', '11', 'Chemistry', ' https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '10-09-2020', 'Chemistry_11', 'chemistry11', 'version-periodic-table-elements.jpg', '', '', 'https://teams.live.com/l/invite/FBAiMGl60nKcNY-gg'),
(89, 51, 'Ritam Dey', 'ritam@gmail.com', '9007635827', 'Nouns', '10', 'English Language', ' https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '24-09-2020', '123456', 'englang', 'englang8.jpg', '', '', 'https://teams.live.com/l/invite/FBAkNBrEq3BK3OTOw'),
(90, 51, 'Ritam Dey', 'ritam@gmail.com', '9007635827', 'Adjectives', '10', 'English Language', ' https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '28-09-2020', '123456', 'englang', 'englang9.jpg', '', '', 'https://teams.live.com/l/invite/FBAkNBrEq3BK3OTOw'),
(91, 45, 'soumya bhattacherjee', 'sb3567cv@gmail.com', '7980775239', 'Re  activity series\r\n', '12', 'Chemistry', ' https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '25-09-2020', 'Chemistry_12', 'chemistry12', 'reactivity-series-of-metals.jpeg', '', '', 'https://teams.live.com/l/invite/FBAiMGl60nKcNY-gg'),
(92, 45, 'soumya bhattacherjee', 'sb3567cv@gmail.com', '7980775239', 'Acid vs base', '11', 'Chemistry', ' https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '13-09-2020', 'Chemistry_11', 'chemistry11', 'Acids-Vs-Bases.png', '', '', 'https://teams.live.com/l/invite/FBAiMGl60nKcNY-gg'),
(93, 45, 'soumya bhattacherjee', 'sb3567cv@gmail.com', '7980775239', 'Halogens', '11', 'Chemistry', ' https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '23-09-2020', 'Chemistry_11', 'chemistry11', 'maxresdefault.jpg', '', '', 'https://teams.live.com/l/invite/FBAiMGl60nKcNY-gg'),
(94, 45, 'soumya bhattacherjee', 'sb3567cv@gmail.com', '7980775239', 'Alkali group of meatals', '11', 'Chemistry', ' https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '15-09-2020', 'Chemistry_11', 'chemistry11', 'maxresdefault (1).jpg', '', '', 'https://teams.live.com/l/invite/FBAiMGl60nKcNY-gg'),
(95, 45, 'soumya bhattacherjee', 'sb3567cv@gmail.com', '7980775239', 'Solid state', '11', 'Chemistry', ' https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '30-09-2020', 'Chemistry_11', 'chemistry11', '2017728-121453262-8347-particles-of-matter-are-arranged-to-form-solid-shape.png', '', '', 'https://teams.live.com/l/invite/FBAiMGl60nKcNY-gg'),
(96, 45, 'soumya bhattacherjee', 'sb3567cv@gmail.com', '7980775239', 'Molecular structure of air molecule', '12', 'Chemistry', ' https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '24-09-2020', 'Chemistry_12', 'chemistry12', 'molecular-structure-air-molecules-16914042.jpg', '', '', 'https://teams.live.com/l/invite/FBAiMGl60nKcNY-gg'),
(97, 45, 'soumya bhattacherjee', 'sb3567cv@gmail.com', '7980775239', 'chemical bonding', '11', 'Chemistry', ' https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '09-09-2020', 'Chemistry_11', 'chemistry11', 'big_thumb.jpg', '', '', 'https://teams.live.com/l/invite/FBAiMGl60nKcNY-gg'),
(98, 45, 'soumya bhattacherjee', 'sb3567cv@gmail.com', '7980775239', 'kinetic theory of gases', '11', 'Chemistry', ' https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '26-09-2020', 'Chemistry_11', 'chemistry11', 'hi_4648.jpg', '', '', 'https://teams.live.com/l/invite/FBAiMGl60nKcNY-gg'),
(99, 51, 'Ritam Dey', 'ritam@gmail.com', '9007635827', 'Adverbs', '10', 'English Language', ' https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '03-09-2020', '123456', 'englang', 'englang10.jpg', '', '', 'https://teams.live.com/l/invite/FBAkNBrEq3BK3OTOw'),
(100, 51, 'Ritam Dey', 'ritam@gmail.com', '9007635827', 'Punctuation', '10', 'English Language', ' https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '06-09-2020', '123456', 'englang', 'englang11.jpg', '', '', 'https://teams.live.com/l/invite/FBAkNBrEq3BK3OTOw'),
(101, 51, 'Ritam Dey', 'ritam@gmail.com', '9007635827', 'Pronouns', '10', 'English Language', ' https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '09-09-2020', '123456', 'englang', 'englang12.jpg', '', '', 'https://teams.live.com/l/invite/FBAkNBrEq3BK3OTOw'),
(102, 51, 'Ritam Dey', 'ritam@gmail.com', '9007635827', 'Basic Grammar Practice', '10', 'English Language', ' https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '17-09-2020', '123456', 'englang', 'englang13.jpg', '', '', 'https://teams.live.com/l/invite/FBAkNBrEq3BK3OTOw'),
(103, 51, 'Ritam Dey', 'ritam@gmail.com', '9007635827', 'Determiners', '10', 'English Language', ' https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '22-09-2020', '123456', 'englang', 'englang15.jpg', '', '', 'https://teams.live.com/l/invite/FBAkNBrEq3BK3OTOw'),
(104, 51, 'Ritam Dey', 'ritam@gmail.com', '9007635827', 'Basic Grammar Practice', '10', 'English Language', ' https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '23-09-2020', '123456', 'englang', 'englang14.jpg', '', '', 'https://teams.live.com/l/invite/FBAkNBrEq3BK3OTOw'),
(105, 51, 'Ritam Dey', 'ritam@gmail.com', '9007635827', 'Verb tenses', '10', 'English Language', ' https://aka.ms/azuremediaplayer?url=https%3A%2F%2Findeesvideo-aase.streaming.media.azure.net%2Fa0ced634-629d-4120-9f6d-faf94b1b03d0%2FIndees2.ism%2Fmanifest', 'https://1drv.ms/u/s!Aibwdbk2vSojeQD7rLP6Vh_QbC8?e=lfXU7O', '29-09-2020', '123456', 'englang', 'english16.jpg', '', '', 'https://teams.live.com/l/invite/FBAkNBrEq3BK3OTOw');

-- --------------------------------------------------------

--
-- Table structure for table `stud_table`
--

CREATE TABLE `stud_table` (
  `stud_id` int(10) NOT NULL,
  `user_id` int(20) NOT NULL,
  `name` text NOT NULL,
  `address` varchar(300) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `profession` varchar(200) NOT NULL,
  `objective` varchar(500) NOT NULL,
  `education` varchar(500) NOT NULL,
  `experience` varchar(500) NOT NULL,
  `skill` varchar(500) NOT NULL,
  `language` varchar(500) NOT NULL,
  `links` varchar(50) NOT NULL,
  `img1` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stud_table`
--

INSERT INTO `stud_table` (`stud_id`, `user_id`, `name`, `address`, `email`, `phone`, `profession`, `objective`, `education`, `experience`, `skill`, `language`, `links`, `img1`) VALUES
(6, 13, 'Angelina Stuart', 'Sukanta Pally, Agarpara, Kolkata-700109', 'angelinastuart@gmail.com', 1995645389, 'Software Engineer', 'Young engineer with 2 years knowledge in software industry.', 'B.Tech - Georgia State University (CGPA-7/10). ', 'IBM-2 years as software developer and tester, already done 2 projects one for data science and other for machine learning.', 'C, C++, .Net, NodeJS, React, AngularJS, PHP, MySQL', 'English, Spanish, Japanese', 'www.github.com/Arijit', 'job1.jpg'),
(7, 13, 'Jason Bourne', '17/A Manhattan Street, New York, United States of America', 'jasonbourne@hotmail.com', 1783456712, 'Ethical Hacker', 'Young dynamic professional hacker qualified with penetration testing and cyber security as well as hands on experience in digital financial transactions.', 'MS - MIT (CGPA-5/5)', '4 years as bug finder in Facebook, Microsoft.', 'Networking, Problem Solving, SQL Injection.', 'English,Chinese', 'www.github.com/JasonBourne', 'job2.jpg'),
(10, 13, 'Scarlett Johansson', 'Manhattan, New York city, United States of America', 'witchscarlet@hotmail.com', 1994367890, 'Business Analyst', 'Responsible for bridging the gap between IT and the business using data analytics to assess processes, determine requirements and deliver data-driven recommendations and reports to executives and stakeholders.', 'MS - California State University, Los Angeles (CGPA-4/5)', '2 years as business and marketing engineer in Deloitte,USA. 1 year as project manager and Team Leader in Deloitte,USA.', 'MBA in marketing and finance as well as in strategies. Having knowledge of .Net and C#.', 'English, Russian, Italian, Spanish', 'www.github.com/witch', 'job7.jpg'),
(12, 13, 'Chris Evans', 'Brooklyn, New York city, United States of America', 'evans@office.com', 1973435645, 'Web Analyst', 'Experienced in web development and website maintainance. Perform gap analyses and root case analyses on goals and objectives. Define, track, measure and analyze performance of both internal and external promotions including multi/omni channel attribution. Design A/B and multivariate test strategies to optimize performance of a feature, product or offering. Utilize mathematical and anal.', 'MCA - IIT Kharagpur (CGPA-9/10)', '1 year experience as web developer in Technotrix Solutions. 2 years experience as web analyst in Capgemini.', 'Formulate market, audience and product analyses and provide actionable insights to stakeholders to help drive digital subscriptions, grow audience and optimize revenue.', 'English, Russian, Japanese, Spanish.', 'www.github.com/Chrisevans', 'job10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `test4`
--

CREATE TABLE `test4` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `radio` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `u_name`, `password`, `name`, `phone`, `email`, `radio`) VALUES
(13, 'applicant', 'applicant@123', 'Rudrasish Bagchi', '+91-9007837970', 'rudrasishbagchi@gmail.com', 'applicant'),
(39, 'rookie', 'rookie@123', 'Arijit Saha Ray', '+91-7003959492', 'arijitsaharay07@gmail.com', 'Student'),
(14, 'deep', 'arijit@123', 'Arijit Saha Ray', '+919830887076', 'arijitsaharay07@gmail.com', 'Teacher'),
(44, 'Praloy Dutta', '12345', 'Praloy Dutta ', '7862365600', 'proloydutta89@gmail.com', 'recruiter'),
(43, 'deep', 'deep@1234', 'Deep Saha', '4569874562', 'deep@gmail.com', 'recruiter'),
(45, 'soumya', 'soumya@123', 'soumya bhattacherjee', '7980775239', 'sb3567cv@gmail.com', 'Teacher'),
(46, 'tirtha2208', 'tirthaindees', 'Priyam Mazundar', '9748196335', 'tirthadeepbfb.com@gmail.com', 'recruiter'),
(47, 'ritam', 'ritam@123456', 'Ritam rfmor', '9738477572', 'ritam34@gmail.com', 'Student'),
(48, 'deep', 'deep', 'deep@123', '456554645', 'deep@123', 'applicant'),
(49, 'deep', 'deep', 'deep@123', '456554645', 'deep@123', 'applicant'),
(50, 'arijit', 'arijit@123', 'Arijit Saha Ray', '+91 7003959492', 'arijitsaharay07@gmail.com', 'recruiter'),
(51, 'Ritam', 'ritam123', 'Ritam Dey', '9007635827', 'ritam@gmail.com', 'recruiter');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `img_table`
--
ALTER TABLE `img_table`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `job_table`
--
ALTER TABLE `job_table`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `stud_table`
--
ALTER TABLE `stud_table`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `test4`
--
ALTER TABLE `test4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `img_table`
--
ALTER TABLE `img_table`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `job_table`
--
ALTER TABLE `job_table`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
--
-- AUTO_INCREMENT for table `stud_table`
--
ALTER TABLE `stud_table`
  MODIFY `stud_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `test4`
--
ALTER TABLE `test4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

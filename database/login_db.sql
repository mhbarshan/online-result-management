-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2023 at 12:36 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` text NOT NULL,
  `designation` text NOT NULL,
  `mobile` int(15) NOT NULL,
  `email` text NOT NULL,
  `user_name` text NOT NULL,
  `user_password` text NOT NULL,
  `verification_code` text NOT NULL,
  `email_verified_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `designation`, `mobile`, `email`, `user_name`, `user_password`, `verification_code`, `email_verified_at`) VALUES
('Barshan', 'Lecturer', 1993634522, 'mdmhb247@gmail.com', 'mh_barshan7', '1e48c4420b7073bc11916c6c1de226bb', '160963', '2022-10-03 00:29:48'),
('Hassan Barshan', 'Lecturer', 1987548760, 'mdmhb247@gmail.com', 'Barshan07', '1e48c4420b7073bc11916c6c1de226bb', '108664', '2022-11-09 14:58:37');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `name` text NOT NULL,
  `dept` text NOT NULL,
  `series` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `subject_1` float NOT NULL,
  `subject_2` float NOT NULL,
  `subject_3` float NOT NULL,
  `subject_4` float NOT NULL,
  `subject_5` float NOT NULL,
  `subject_gpa_1` float NOT NULL,
  `subject_gpa_2` float NOT NULL,
  `subject_gpa_3` float NOT NULL,
  `subject_gpa_4` float NOT NULL,
  `subject_gpa_5` float NOT NULL,
  `CGPA` text NOT NULL,
  `res` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`name`, `dept`, `series`, `id`, `subject_1`, `subject_2`, `subject_3`, `subject_4`, `subject_5`, `subject_gpa_1`, `subject_gpa_2`, `subject_gpa_3`, `subject_gpa_4`, `subject_gpa_5`, `CGPA`, `res`) VALUES
('Abir Hossain', 'ECE', 19, 1910000, 45, 75, 66, 35, 45, 2.25, 3.75, 3.25, 0, 2.25, 'Not Calculated', 'All courses are not cleared'),
('Kabir Hossain', 'ECE', 19, 1910001, 76, 70, 60, 80, 70, 3.75, 3.5, 3, 4, 3.5, '3.55', 'Cleared all courses'),
('Test', 'ECE', 19, 1910002, 80, 80, 80, 80, 80, 4, 4, 4, 4, 4, '4', 'Cleared all courses'),
('Mithan Sakider', 'ECE', 19, 1910033, 60, 75, 70, 80, 68, 3, 3.75, 3.5, 4, 3.25, '3.5', 'Cleared all courses'),
('Wasi Ahmad', 'ECE', 19, 1910057, 80, 80, 80, 80, 100, 4, 4, 4, 4, 4, '4', 'Cleared all courses'),
('Sudipto Saha', 'ECE', 19, 1910039, 80, 80, 80, 80, 80, 4, 4, 4, 4, 4, '4', 'Cleared all courses'),
('Rahul Kundu', 'ECE', 19, 1910056, 80, 60, 55, 79, 69, 4, 3, 2.75, 3.75, 3.25, '3.35', 'Cleared all courses');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `first_name` text NOT NULL,
  `dept` text NOT NULL,
  `series` int(3) NOT NULL,
  `id` int(15) NOT NULL,
  `email` text NOT NULL,
  `last_name` text NOT NULL,
  `user_password` text NOT NULL,
  `verification_code` text NOT NULL,
  `email_verified_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`first_name`, `dept`, `series`, `id`, `email`, `last_name`, `user_password`, `verification_code`, `email_verified_at`) VALUES
('Mahamudul ', 'ECE', 19, 1910058, 'mdmhb247@gmail.com', 'Hassan', '1e48c4420b7073bc11916c6c1de226bb', '309191', '2022-11-04 13:13:24'),
('Tutul', 'ECE', 19, 1910003, 'abir@mse.ruet', 'Kumar', '1e48c4420b7073bc11916c6c1de226bb', '295738', '2022-10-04 15:05:42'),
('Abir', 'ECE', 19, 1910000, 'labib@ruet.ac.bd', 'Khan', '1e48c4420b7073bc11916c6c1de226bb', '187006', '2022-10-04 15:28:20'),
('Labub', 'ECE', 19, 1910024, 'mdmhb247@gmail.com', 'Muhtahsim', '1e48c4420b7073bc11916c6c1de226bb', '310481', '2022-11-04 13:07:48'),
('Kabir', 'ECE', 19, 1910001, 'mdmhb247@gmail.com', 'Hossain', '1e48c4420b7073bc11916c6c1de226bb', '327270', '2022-10-04 16:55:49'),
('Shojib', 'ECE', 19, 1910049, 'sajibhossain79509@gmail.com', 'Hossain', '1e48c4420b7073bc11916c6c1de226bb', '146592', '2022-10-09 23:38:19'),
('Mithan', 'ECE', 19, 1910033, 'mithan.ece19@gmail.com', 'Shakider', '1e48c4420b7073bc11916c6c1de226bb', '826369', '2022-11-08 12:42:44'),
('Zeba ', 'ECE', 19, 1910034, 'mhmh@gmail.com', 'Islam  Sotota', '1e48c4420b7073bc11916c6c1de226bb', '194784', '2022-11-08 14:59:57'),
('Wasi', 'ECE', 19, 1910057, 'wasiahmad0569@gmail.com', 'Ahmad', '7813d1590d28a7dd372ad54b5d29d033', '216416', '2022-11-08 16:21:02'),
('Shaikat', 'ECE', 19, 1910037, 'khudhitopshan001@gmail.com', 'Hassan', '1e48c4420b7073bc11916c6c1de226bb', '981556', '2022-11-09 16:32:11'),
('Kabir ', 'ECE', 19, 1910061, 'mdmhb247@gmail.com', 'Hossain', '1e48c4420b7073bc11916c6c1de226bb', '165647', '2022-12-21 10:28:17'),
('Md.', 'ECE', 19, 19000000, 'mdmhb247@gmail.com', 'Hassan', '1e48c4420b7073bc11916c6c1de226bb', '287147', ''),
('Md.', 'ECE', 20, 2010058, 'mdmhb247@gmail.com', 'Hassan', '81dc9bdb52d04dc20036dbd8313ed055', '273021', ''),
('Sudipto', 'ECE', 19, 1910039, 'sudiptosaha618@gmail.com', 'Saha', '1e48c4420b7073bc11916c6c1de226bb', '113264', '2023-04-05 23:56:05'),
('Sudipto', 'ECE', 19, 1910065, 'sudiptosaha618@gmail.com', 'Saha', '1e48c4420b7073bc11916c6c1de226bb', '835096', '2023-04-07 19:17:32'),
('Rahul', 'ECE', 19, 1910056, 'rahulkundu18182112@gmail.com', 'Kundu', '81dc9bdb52d04dc20036dbd8313ed055', '276198', '2023-05-03 11:14:19'),
('alice123', 'ece', 19, 10000000, 'alice123@hotmail.com', 'a', '81dc9bdb52d04dc20036dbd8313ed055', '349925', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

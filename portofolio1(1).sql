-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2023 at 09:18 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio1`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `info_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(500) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL,
  `Created_date` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`info_id`, `name`, `email`, `mobile`, `subject`, `message`, `Created_date`) VALUES
(1, 'Liptimayee Sahoo', 'liptimayee15@gmail.com', '07381689624', 'sdsdssdsds', 'sdsdsdsd', '2023-09-10 19:48:12.300890'),
(2, 'dfgdsdf', 'sdfsdf@gmail.com', '48413', 'sdfdfssdfsdf', 'fdsdfsdf', '2023-09-10 19:59:36.475581'),
(3, 'dfghj', 'tfjkj@gjhkjh.com', '48562265', 'rdftghj', 'gjhkn,m', '2023-09-10 20:14:42.043840'),
(4, 'tfgyhj', 'hjkkjkn@ygjhnk.com', '89522222', 'tfhgyjkhukj', 'gvghhjn,n', '2023-09-10 20:19:13.768146'),
(5, 'tfgyhj', 'hjkkjkn@ygjhnk.com', '89522222', 'tfhgyjkhukj', 'gvghhjn,n', '2023-09-10 20:28:24.841861'),
(6, 'udhsakdasd', 'hjgsdks@gmail.com', '5896556565', 'nchkdcd', 'jbdcksjdh', '2023-09-10 20:41:51.101529'),
(7, 'djchkdcds', 'gtd@gmail.com', '5455', 'hghcskd', 'smkdhsld', '2023-09-10 20:42:46.303832'),
(8, 'djchkdcds', 'sdfsdf@gmail.com', '44554545', 'sbks,jd', 'jckzbjxcxc', '2023-09-10 20:44:16.764504'),
(9, 'dsfsdf', 'dgycakdjb@hghdf', '456562', 'jhdhs', 'jhdhfk', '2023-09-10 20:44:49.979904'),
(10, 'dsfsdf', 'dgycakdjb@hghdf', '456562', 'jhdhs', 'jhdhfk', '2023-09-10 20:49:02.095555'),
(11, 'dasdasd', 'jhkdhlas@kjhgh', '4644543', 'kjsdufhaldfskjsdgksd', 'jksdhflsdfds', '2023-09-10 20:53:01.773272'),
(12, 'jhslkdsd', 'jdbksd@gmail.com', '5652356', 'kjkdshflkdf', 'msbf,dzcs', '2023-09-14 21:12:57.712642'),
(13, 'Rojalin Sahoo', 'rojalinsahoo@gmail.com', '7377825562', 'Need a website', 'Can I contact For Website!', '2023-09-14 23:13:34.562917'),
(14, 'Rojalin Sahoo', 'rojalinsahoo163@gmail.com', '7377825562', 'i want to doll', 'i want ', '2023-09-15 19:42:23.258224'),
(15, '', '', '', '', '', '2023-09-24 21:47:04.761690');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`info_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2024 at 08:58 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecourses2`
--

-- --------------------------------------------------------

--
-- Table structure for table `receive_goods`
--

CREATE TABLE `receive_goods` (
  `receive_id` int(11) NOT NULL,
  `po_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=Delivery, 1=Received,\r\n2=Late Delivery',
  `employee_id` int(11) DEFAULT NULL,
  `due_date` date NOT NULL,
  `received_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `receive_goods`
--

INSERT INTO `receive_goods` (`receive_id`, `po_id`, `status`, `employee_id`, `due_date`, `received_date`) VALUES
(19, 59, 0, 1, '2024-05-20', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `receive_goods`
--
ALTER TABLE `receive_goods`
  ADD PRIMARY KEY (`receive_id`),
  ADD UNIQUE KEY `unique_po_id` (`po_id`),
  ADD KEY `po_id` (`po_id`),
  ADD KEY `employee_id` (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `receive_goods`
--
ALTER TABLE `receive_goods`
  MODIFY `receive_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

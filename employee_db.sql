-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2024 at 07:42 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_page`
--

CREATE TABLE `employee_page` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `work_email` varchar(255) NOT NULL,
  `employee_type` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `monthly_salary` varchar(255) NOT NULL,
  `account_bonus` varchar(255) NOT NULL,
  `client` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `employment_status` varchar(255) NOT NULL,
  `start_shift_day` varchar(255) NOT NULL,
  `end_shift_day` varchar(255) NOT NULL,
  `shift_time_in` varchar(250) NOT NULL,
  `lunch_break_start` varchar(250) NOT NULL,
  `sss_number` varchar(255) NOT NULL,
  `sss_contribution` varchar(255) NOT NULL,
  `pagibig_number` varchar(255) NOT NULL,
  `pagibig_contribution` varchar(255) NOT NULL,
  `philhealth_number` varchar(255) NOT NULL,
  `philhealth_contribution` varchar(255) NOT NULL,
  `tin_number` varchar(255) NOT NULL,
  `tax_percentage` varchar(255) NOT NULL,
  `lunch_break_end` varchar(250) NOT NULL,
  `shift_time_out` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_page`
--

INSERT INTO `employee_page` (`id`, `first_name`, `middle_name`, `last_name`, `address`, `password`, `birthdate`, `contact_number`, `civil_status`, `email`, `work_email`, `employee_type`, `start_date`, `monthly_salary`, `account_bonus`, `client`, `position`, `employment_status`, `start_shift_day`, `end_shift_day`, `shift_time_in`, `lunch_break_start`, `sss_number`, `sss_contribution`, `pagibig_number`, `pagibig_contribution`, `philhealth_number`, `philhealth_contribution`, `tin_number`, `tax_percentage`, `lunch_break_end`, `shift_time_out`) VALUES
(11, 'Mark davy', 'Articulo', 'Marquez', 'Manapla', '$2y$10$lls8uo7r2k9K4abKXHGlFu6H8bM4P77ljfsQmbfvk7fid6CxpPBZe', '2002-12-21', '09952551990', 'Single', 'mark@gmail.com', 'mark@gmail.com', 'Admin', '2024-10-31', '12000', '5000', 'iReply Back Office Services', 'IT Administrator', 'Part-Time', 'Monday', 'Friday', '17:18', '18:18', '121', 'wee', '123', 'erw', '234', 'fge', '4545', 'rfer', '06:18', '06:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_page`
--
ALTER TABLE `employee_page`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_page`
--
ALTER TABLE `employee_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

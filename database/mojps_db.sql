-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2024 at 11:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mojps_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `job_description` text DEFAULT NULL,
  `job_requirements` text DEFAULT NULL,
  `job_location` varchar(100) DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `job_title`, `job_description`, `job_requirements`, `job_location`, `salary`, `created_at`) VALUES
(1, 'Software Engineer', 'We are looking for a skilled software engineer to join our team...', 'Bachelors degree in Computer Science or related field..', 'Manila', 43000.00, '2024-05-19 19:24:33'),
(2, 'Graphic Designer', 'We are looking for a skilled software engineer to join our team...', 'Bachelors degree in Computer Science or related field..', 'Manila', 40000.00, '2024-05-19 19:26:08'),
(3, 'Software Developer', 'Description for Software Developer', 'Requirements for Software Developer', 'Boac, Marinduque', 60000.00, '2024-05-19 20:18:46'),
(4, 'Marketing Coordinator', 'Description for Marketing Coordinator', 'Requirements for Marketing Coordinator', 'Gasan, Marinduque', 55000.00, '2024-05-19 20:18:46'),
(5, 'Data Analyst', 'Description for Data Analyst', 'Requirements for Data Analyst', 'Mogpog, Marinduque', 50000.00, '2024-05-19 20:18:46'),
(6, 'Graphic Designer', 'Description for Graphic Designer', 'Requirements for Graphic Designer', 'Santa Cruz, Marinduque', 45000.00, '2024-05-19 20:18:46'),
(7, 'Customer Service Representative', 'Description for Customer Service Representative', 'Requirements for Customer Service Representative', 'Torrijos, Marinduque', 40000.00, '2024-05-19 20:18:46'),
(8, 'Financial Analyst', 'Description for Financial Analyst', 'Requirements for Financial Analyst', 'Boac, Marinduque', 70000.00, '2024-05-19 20:18:46'),
(9, 'Human Resources Manager', 'Description for Human Resources Manager', 'Requirements for Human Resources Manager', 'Gasan, Marinduque', 75000.00, '2024-05-19 20:18:46'),
(10, 'Sales Manager', 'Description for Sales Manager', 'Requirements for Sales Manager', 'Mogpog, Marinduque', 65000.00, '2024-05-19 20:18:46'),
(11, 'Web Developer', 'Description for Web Developer', 'Requirements for Web Developer', 'Santa Cruz, Marinduque', 70000.00, '2024-05-19 20:18:46'),
(12, 'Content Writer', 'Description for Content Writer', 'Requirements for Content Writer', 'Torrijos, Marinduque', 50000.00, '2024-05-19 20:18:46'),
(13, 'Project Manager', 'Description for Project Manager', 'Requirements for Project Manager', 'Boac, Marinduque', 75000.00, '2024-05-19 20:18:46'),
(14, 'Accountant', 'Description for Accountant', 'Requirements for Accountant', 'Gasan, Marinduque', 60000.00, '2024-05-19 20:18:46'),
(15, 'IT Support Specialist', 'Description for IT Support Specialist', 'Requirements for IT Support Specialist', 'Mogpog, Marinduque', 55000.00, '2024-05-19 20:18:46'),
(16, 'Operations Manager', 'Description for Operations Manager', 'Requirements for Operations Manager', 'Santa Cruz, Marinduque', 70000.00, '2024-05-19 20:18:46'),
(17, 'Business Analyst', 'Description for Business Analyst', 'Requirements for Business Analyst', 'Torrijos, Marinduque', 65000.00, '2024-05-19 20:18:46'),
(18, 'Digital Marketing Specialist', 'Description for Digital Marketing Specialist', 'Requirements for Digital Marketing Specialist', 'Boac, Marinduque', 60000.00, '2024-05-19 20:18:46'),
(19, 'Product Manager', 'Description for Product Manager', 'Requirements for Product Manager', 'Gasan, Marinduque', 75000.00, '2024-05-19 20:18:46'),
(20, 'Administrative Assistant', 'Description for Administrative Assistant', 'Requirements for Administrative Assistant', 'Mogpog, Marinduque', 50000.00, '2024-05-19 20:18:46'),
(21, 'Quality Assurance Engineer', 'Description for Quality Assurance Engineer', 'Requirements for Quality Assurance Engineer', 'Santa Cruz, Marinduque', 70000.00, '2024-05-19 20:18:46'),
(22, 'Social Media Manager', 'Description for Social Media Manager', 'Requirements for Social Media Manager', 'Torrijos, Marinduque', 60000.00, '2024-05-19 20:18:46'),
(23, 'Software Engineer', 'Description for Software Engineer', 'Requirements for Software Engineer', 'Boac, Marinduque', 60000.00, '2024-05-19 20:20:17'),
(24, 'Digital Designer', 'Description for Digital Designer', 'Requirements for Digital Designer', 'Gasan, Marinduque', 55000.00, '2024-05-19 20:20:17'),
(25, 'Sales Representative', 'Description for Sales Representative', 'Requirements for Sales Representative', 'Mogpog, Marinduque', 50000.00, '2024-05-19 20:20:17'),
(26, 'Account Manager', 'Description for Account Manager', 'Requirements for Account Manager', 'Santa Cruz, Marinduque', 45000.00, '2024-05-19 20:20:17'),
(27, 'Customer Success Manager', 'Description for Customer Success Manager', 'Requirements for Customer Success Manager', 'Torrijos, Marinduque', 40000.00, '2024-05-19 20:20:17'),
(28, 'Quality Control Inspector', 'Description for Quality Control Inspector', 'Requirements for Quality Control Inspector', 'Boac, Marinduque', 70000.00, '2024-05-19 20:20:17'),
(29, 'Operations Coordinator', 'Description for Operations Coordinator', 'Requirements for Operations Coordinator', 'Gasan, Marinduque', 75000.00, '2024-05-19 20:20:17'),
(30, 'Content Strategist', 'Description for Content Strategist', 'Requirements for Content Strategist', 'Mogpog, Marinduque', 65000.00, '2024-05-19 20:20:17'),
(31, 'UX/UI Designer', 'Description for UX/UI Designer', 'Requirements for UX/UI Designer', 'Santa Cruz, Marinduque', 70000.00, '2024-05-19 20:20:17'),
(32, 'HR Coordinator', 'Description for HR Coordinator', 'Requirements for HR Coordinator', 'Torrijos, Marinduque', 50000.00, '2024-05-19 20:20:17'),
(33, 'Data Scientist', 'Description for Data Scientist', 'Requirements for Data Scientist', 'Boac, Marinduque', 75000.00, '2024-05-19 20:20:17'),
(34, 'Marketing Specialist', 'Description for Marketing Specialist', 'Requirements for Marketing Specialist', 'Gasan, Marinduque', 60000.00, '2024-05-19 20:20:17'),
(35, 'Logistics Coordinator', 'Description for Logistics Coordinator', 'Requirements for Logistics Coordinator', 'Mogpog, Marinduque', 55000.00, '2024-05-19 20:20:17'),
(36, 'Research Analyst', 'Description for Research Analyst', 'Requirements for Research Analyst', 'Santa Cruz, Marinduque', 70000.00, '2024-05-19 20:20:17'),
(37, 'Technical Support Specialist', 'Description for Technical Support Specialist', 'Requirements for Technical Support Specialist', 'Torrijos, Marinduque', 65000.00, '2024-05-19 20:20:17'),
(38, 'Event Coordinator', 'Description for Event Coordinator', 'Requirements for Event Coordinator', 'Boac, Marinduque', 60000.00, '2024-05-19 20:20:17'),
(39, 'Supply Chain Manager', 'Description for Supply Chain Manager', 'Requirements for Supply Chain Manager', 'Gasan, Marinduque', 75000.00, '2024-05-19 20:20:17'),
(40, 'Legal Assistant', 'Description for Legal Assistant', 'Requirements for Legal Assistant', 'Mogpog, Marinduque', 50000.00, '2024-05-19 20:20:17'),
(41, 'IT Manager', 'Description for IT Manager', 'Requirements for IT Manager', 'Santa Cruz, Marinduque', 70000.00, '2024-05-19 20:20:17'),
(42, 'Social Worker', 'Description for Social Worker', 'Requirements for Social Worker', 'Torrijos, Marinduque', 60000.00, '2024-05-19 20:20:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'applicant',
  `username` varchar(50) NOT NULL,
  `birthdate` date DEFAULT NULL,
  `gender` varchar(25) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `middle_name`, `last_name`, `email`, `role`, `username`, `birthdate`, `gender`, `password`, `created_at`) VALUES
(1, '', '', '', 'admin123@gmail.com', 'Admin', 'admin', '0000-00-00', NULL, 'password', '2024-05-18 13:55:45'),
(2, 'John', 'Smith', 'Doe', 'doejohn@gmail.com', 'applicant', 'doewee1', '2002-05-09', NULL, 'password', '2024-05-18 14:26:46'),
(3, 'Sarah', 'Parks', 'Smith', 'sarahsmith@gmail.com', 'applicant', 'sarahsm5', '2000-07-15', NULL, 'sarah', '2024-05-18 15:47:54'),
(4, 'Grey', 'Smith', 'Du', 'dugrrey2@gmail.com', 'applicant', 'greeyd3', '2001-05-20', NULL, 'grey', '2024-05-18 15:52:51'),
(5, 'Jessica', 'Miranda', 'Soco', 'socojess@gmail.com', 'applicant', 'jsoho12', NULL, NULL, 'jessica', '2024-05-19 07:15:38'),
(16, 'Anna', 'Cruz', 'Sanchez', 'annacruz@gmail.com', 'applicant', 'asanch', NULL, NULL, 'annasan', '2024-05-19 07:27:21'),
(17, 'Linda', 'Padilla', 'Sanchez', 'wsanchez@gmail.com', 'employer', 'lynda2', '2000-05-01', 'Female', 'pass', '2024-05-19 16:42:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

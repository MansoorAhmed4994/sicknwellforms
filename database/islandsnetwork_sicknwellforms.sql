-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2020 at 04:46 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `islandsnetwork_sicknwellforms`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `company_name` text NOT NULL,
  `job_title` text NOT NULL,
  `industry` text NOT NULL,
  `user_name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `confirm_password` text NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `company_name`, `job_title`, `industry`, `user_name`, `email`, `password`, `confirm_password`, `remember_token`, `created_at`, `created_by`, `updated_at`, `updated_by`, `status`) VALUES
(1, 'mansoor', 'dese', 'Educator', 'Boutiques & Lodges', 'mansoor ahmed', 'mansoor@gmail.com', '1', '1', NULL, '2020-05-06 00:06:58', 11, '2020-05-06 00:06:58', 11, 'active'),
(2, 'faizan', '21', 'Educator', 'Resorts', '212', 'mansoor7@yopmail.com', '1', '1', NULL, '2020-05-06 00:46:48', 11, '2020-05-06 00:46:48', 11, 'active'),
(3, 'faizan', '21', 'Educator', 'Resorts', '212', 'mansoor7@yopmail.com', '1', '1', NULL, '2020-05-06 00:50:36', 11, '2020-05-06 00:50:36', 11, 'active'),
(4, 'rija', '1', 'Educator', 'Agriculture, Farm Animals & Forestry', '1', 'john@example.com', '1', '1', NULL, '2020-05-06 00:55:48', 11, '2020-05-06 00:55:48', 11, 'active'),
(5, 'rija', '1', 'Educator', 'Agriculture, Farm Animals & Forestry', '1', 'john@example.com', '1', '1', NULL, '2020-05-06 00:56:34', 11, '2020-05-06 00:56:34', 11, 'active'),
(6, 'rija', '1', 'Educator', 'Agriculture, Farm Animals & Forestry', '1', 'john@example.com', '1', '1', NULL, '2020-05-06 00:57:53', 11, '2020-05-06 00:57:53', 11, 'active'),
(7, 'rija', '1', 'Educator', 'Agriculture, Farm Animals & Forestry', '1', 'john@example.com', '1', '1', NULL, '2020-05-06 00:58:02', 11, '2020-05-06 00:58:02', 11, 'active'),
(8, 'rija', '1', 'Educator', 'Agriculture, Farm Animals & Forestry', '1', 'john@example.com', '1', '1', NULL, '2020-05-06 00:59:08', 11, '2020-05-06 00:59:08', 11, 'active'),
(9, 'rija', '1', 'Educator', 'Agriculture, Farm Animals & Forestry', '1', 'john@example.com', '1', '1', NULL, '2020-05-06 00:59:30', 11, '2020-05-06 00:59:30', 11, 'active'),
(10, 'tsting', '1', 'Vice President / Assistant Vice President', 'Accommodation', '1', '2@gmail.com', '1', '1', NULL, '2020-05-06 11:48:17', 11, '2020-05-06 11:48:17', 11, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `client_forms`
--

CREATE TABLE `client_forms` (
  `id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `clients_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_forms`
--

INSERT INTO `client_forms` (`id`, `form_id`, `clients_id`, `created_at`, `created_by`, `updated_at`, `updated_by`, `status`) VALUES
(11, 2, 1, '2020-05-06 00:06:58', 1, '2020-05-06 00:06:58', 1, NULL),
(12, 1, 1, '2020-05-06 00:06:58', 1, '2020-05-06 00:06:58', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` int(11) NOT NULL,
  `form_name` text NOT NULL,
  `title` text NOT NULL,
  `sub_title` text NOT NULL,
  `fields_count` int(11) NOT NULL,
  `form_link` text NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `form_name`, `title`, `sub_title`, `fields_count`, `form_link`, `created_date`, `created_by`, `updated_date`, `updated_by`, `status`) VALUES
(1, 'Qcm Telemedicine', 'Qcm Telemedicine', 'Medical Registration', 25, '{{route(''QcmTelemedicineForm'',''1'')}}', '0000-00-00 00:00:00', 0, '0000-00-00 00:00:00', 0, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qcm_telemedicine_data_details`
--

CREATE TABLE `qcm_telemedicine_data_details` (
  `id` int(11) NOT NULL,
  `visit_type` text NOT NULL,
  `description` text NOT NULL,
  `appointment_from` time DEFAULT NULL,
  `appointment_to` time NOT NULL,
  `appointment_date` date NOT NULL,
  `patient_first_name` text NOT NULL,
  `patient_middle_name` text NOT NULL,
  `patient_last_name` text NOT NULL,
  `telephone` text NOT NULL,
  `email` text NOT NULL,
  `qcard_number` text NOT NULL,
  `payment_option` text NOT NULL,
  `membership_type` text NOT NULL,
  `cc_first_name` text NOT NULL,
  `cc_last_name` text NOT NULL,
  `cc_number` text NOT NULL,
  `cc_cvc` int(11) NOT NULL,
  `cc_expiration` text NOT NULL,
  `client_forms_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qcm_telemedicine_data_details`
--

INSERT INTO `qcm_telemedicine_data_details` (`id`, `visit_type`, `description`, `appointment_from`, `appointment_to`, `appointment_date`, `patient_first_name`, `patient_middle_name`, `patient_last_name`, `telephone`, `email`, `qcard_number`, `payment_option`, `membership_type`, `cc_first_name`, `cc_last_name`, `cc_number`, `cc_cvc`, `cc_expiration`, `client_forms_id`, `created_at`, `created_by`, `updated_at`, `updated_by`, `status`) VALUES
(1, 'Fever', 'headache', '10:00:00', '10:30:00', '2020-05-06', 'Mansoor', 'Zaheer', 'ahmed', '03412199313', 'mansoor.zaheer994@gmail.com', 'mansoor.zaheer994@gmail.com', 'on', 'Qcard - Established Member', 'Mansoor', 'Ahmed', '1111 1111 1111 111', 111, '11 / 11', 1, '2020-05-06 00:12:43', 1, '2020-05-06 00:12:43', 1, 'active'),
(2, 'Fever', 'headache', '10:00:00', '10:30:00', '2020-05-06', 'Mansoor', 'Zaheer', 'ahmed', '03412199313', 'mansoor.zaheer994@gmail.com', 'mansoor.zaheer994@gmail.com', 'on', 'Qcard - Established Member', 'Mansoor', 'Ahmed', '1111 1111 1111 111', 111, '11 / 11', 1, '2020-05-06 00:17:41', 1, '2020-05-06 00:17:41', 1, 'active'),
(3, 'Fever', 'headache', '10:00:00', '10:30:00', '2020-05-06', 'Mansoor', 'Zaheer', 'ahmed', '03412199313', 'mansoor.zaheer994@gmail.com', 'mansoor.zaheer994@gmail.com', 'on', 'Qcard - Established Member', 'Mansoor', 'Ahmed', '1111 1111 1111 111', 111, '11 / 11', 1, '2020-05-06 00:18:32', 1, '2020-05-06 00:18:32', 1, 'active'),
(4, 'Cough', '1', '14:00:00', '13:30:00', '2020-05-06', 'Mansoor', '1', 'Ahmed', '1', 'mansoor.zaheer994@gmail.com', '1@gmail.com', 'on', 'Select Membership Type', '111111', '111', '1111 1111 1111 111', 111, '11 / 22', 10, '2020-05-06 11:58:10', 1, '2020-05-06 11:58:10', 1, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mansoor Ahmed', 'mansoor.zaheer994@gmail.com', '$2y$10$UkgYOq1DWnZt0AU4jVIl5OMLvaq43MYubrkpPEz9o59Ui6OyiyxtC', '3lXzZeaj08WQKAP8duzWml48xeZQOjDgbAp0gCAwwd7uF0AknvI1tvcF8owV', '2020-04-29 16:17:38', '2020-04-29 16:17:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_forms`
--
ALTER TABLE `client_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qcm_telemedicine_data_details`
--
ALTER TABLE `qcm_telemedicine_data_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `client_forms`
--
ALTER TABLE `client_forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `qcm_telemedicine_data_details`
--
ALTER TABLE `qcm_telemedicine_data_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

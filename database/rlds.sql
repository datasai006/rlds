-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2024 at 02:19 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rlds`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_audits`
--

CREATE TABLE `tbl_audits` (
  `id` bigint(255) NOT NULL,
  `Assign_to` varchar(255) DEFAULT NULL,
  `Verification_Type` varchar(255) DEFAULT NULL,
  `Contact_person` varchar(255) DEFAULT NULL,
  `Contact_number` varchar(255) DEFAULT NULL,
  `address_line_1` varchar(255) DEFAULT NULL,
  `address_line_2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_audits`
--

INSERT INTO `tbl_audits` (`id`, `Assign_to`, `Verification_Type`, `Contact_person`, `Contact_number`, `address_line_1`, `address_line_2`, `city`, `pincode`, `state`, `status`) VALUES
(1, 'venkateswarlu', 'Income Verification', 'rachuru venkateswarlu', '09550262808', 'ramalayam', 'guru raghavendra nagar', 'kurnool', '518411', 'Andhra Pradesh', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_code_type`
--

CREATE TABLE `tbl_code_type` (
  `id` int(11) NOT NULL,
  `code_type_cd` varchar(255) DEFAULT NULL,
  `code_type_desc` varchar(255) DEFAULT NULL,
  `code_type_desc_val` varchar(255) DEFAULT NULL,
  `parent_code_type_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_code_type`
--

INSERT INTO `tbl_code_type` (`id`, `code_type_cd`, `code_type_desc`, `code_type_desc_val`, `parent_code_type_id`, `created_at`, `updated_at`, `created_by`, `updated_by`, `status`) VALUES
(1, 'DISTRICT', 'district', 'district', NULL, '2024-02-13 05:59:06', '2024-02-13 07:34:26', NULL, NULL, 'active'),
(2, 'Countries', 'Country', 'country', NULL, '2024-02-13 06:00:52', '2024-02-13 07:16:10', NULL, NULL, 'active'),
(3, 'State', 'state', 'state', NULL, '2024-02-13 06:01:06', '2024-02-13 07:16:13', NULL, NULL, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_code_value`
--

CREATE TABLE `tbl_code_value` (
  `id` int(11) NOT NULL,
  `code_value_cd` varchar(255) DEFAULT NULL,
  `code_type_id` int(11) DEFAULT NULL,
  `code_value_desc` varchar(255) DEFAULT NULL,
  `code_value_desc_val` varchar(255) DEFAULT NULL,
  `parent_code_value_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_code_value`
--

INSERT INTO `tbl_code_value` (`id`, `code_value_cd`, `code_type_id`, `code_value_desc`, `code_value_desc_val`, `parent_code_value_id`, `created_at`, `updated_at`, `created_by`, `updated_by`, `status`) VALUES
(1, 'IN', 2, 'INDIA', 'india', NULL, '2024-03-06 04:22:46', '2024-03-06 04:25:44', NULL, NULL, 'active'),
(3, 'AP', 3, 'Andhra Pradesh', 'andhra pradesh', NULL, '2024-02-13 06:18:14', '2024-03-06 04:21:23', NULL, NULL, 'active'),
(4, 'Tamil Nadu', 3, 'tamil nadu', 'tamil nadu', NULL, '2024-02-13 06:22:47', '2024-02-13 07:15:09', NULL, NULL, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employees`
--

CREATE TABLE `tbl_employees` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gendar` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `doj` date NOT NULL,
  `qualification` varchar(25) NOT NULL,
  `role_id` int(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_employees`
--

INSERT INTO `tbl_employees` (`id`, `first_name`, `last_name`, `email`, `password`, `gendar`, `country`, `state`, `mobile_no`, `doj`, `qualification`, `role_id`, `created_at`, `updated_at`, `created_by`, `updated_by`, `status`) VALUES
(1, 'rachuru', 'venkateswarlu', 'datasai006@gmail.com', '$2y$10$sDzSE1y7XGu5D1ihR.edIe84LNpT2tMyaW2kuf0.lnUaO3KQbmlmG', 'male', '1', '3', '09550262808', '2023-07-16', 'Btech ', 1, '2024-02-15 05:10:38', '2024-04-02 07:22:47', NULL, NULL, 'active'),
(8, 'madhu y', 'reddy', 'madhu@gmail.com', '$2y$10$XhuaFRINj2uXQVlkQQU/2OT3zNhaNN9CyWTbp85.Gp46JACoYM.fy', 'male', '1', '4', '9177386765', '2024-02-01', 'Btech ', 1, '2024-02-18 15:08:42', '2024-02-20 05:26:17', NULL, NULL, 'active'),
(10, 'rachuru', 'saibaba', 'sai@gmail.com', '$2y$10$o1MBjllkNxkwfRas0PGKvOrvJhx8gOKIlg0v9jpefxJ7.Xuzavesm', 'male', '1', '3', '09550262808', '2024-02-13', 'Btech ', 1, '2024-02-18 16:03:53', '2024-04-02 07:25:35', NULL, NULL, 'active'),
(11, 'rami reddy', 'm', 'reddy@gmail.com', '$2y$10$FsBMV3.In6ghJtNIG1tFhuuY7o4EBAOABBnBR6O2u/JWgAWR0.PQa', 'male', '1', '3', '09550262808', '2024-03-03', 'Btech ', 1, '2024-03-06 15:57:00', '2024-03-06 15:57:00', NULL, NULL, 'active'),
(12, 'bhavitha', 'reddy', 'demo8@gmail.com', '$2y$10$kqRJNaijCyGePsP7Ot4yjeCIlIqGSSX4KKSkYrVeab5epYhPzsERK', 'female', '1', '3', '09550262808', '2024-03-05', 'Btech ', 3, '2024-03-14 08:17:14', '2024-04-02 07:23:44', NULL, NULL, 'active'),
(13, 'rachuru', 'venkateswarlu', 'datasai006@gmail.com', '$2y$10$Q6jjvkv5lBXxtED72VIl9.HIDrLCc5h3qGujCIUNZqrIAQ3x4oj0G', 'male', '1', '3', '09550262808', '2024-03-17', 'Btech ', 1, '2024-03-18 10:57:47', '2024-03-18 10:57:47', NULL, NULL, 'active'),
(14, 'shoba', 'rani', 'shoba@gmail.com', '$2y$10$u5gVCxnMpDYaSPteqj6bsujPVhgy9lA3TqqRpzVKTQDQ0jg8SyqTW', 'female', '1', '3', '09550262808', '2024-05-13', 'pg', 3, '2024-05-24 10:58:24', '2024-05-24 10:58:24', NULL, NULL, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_entities`
--

CREATE TABLE `tbl_entities` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `table_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_entities`
--

INSERT INTO `tbl_entities` (`id`, `name`, `table_name`, `created_at`, `updated_at`, `created_by`, `updated_by`, `status`) VALUES
(1, 'Code Type', 'tbl_code_type', '2024-02-13 07:39:22', '2024-02-13 07:39:22', 1, 1, 'active'),
(2, 'Code Value', 'tbl_code_value', '2024-02-13 07:39:22', '2024-02-13 07:39:22', 1, 1, 'active'),
(3, 'Employees', 'tbl_employees', '2024-02-13 07:39:22', '2024-02-13 07:39:22', 1, 1, 'active'),
(4, 'Roles', 'tbl_roles', '2024-02-13 07:39:22', '2024-02-13 07:39:22', 1, 1, 'active'),
(5, 'Role Permissions', 'tbl_role_permissions', '2024-02-13 07:39:22', '2024-02-13 07:39:22', 1, 1, 'active'),
(6, 'Users', 'tbl_users', '2024-02-13 07:39:22', '2024-02-13 07:39:22', 1, 1, 'active'),
(7, 'Users Regions', 'tbl_users_regions', '2024-02-13 07:39:22', '2024-02-13 07:39:22', 1, 1, 'active'),
(8, 'Menu', 'tbl_menu', '2024-03-04 07:42:42', '2024-03-04 07:42:42', 1, 1, NULL),
(9, 'Incomtax', 'tbl_incometax', '2024-03-04 07:43:33', '2024-03-04 07:43:33', 1, 1, NULL),
(10, 'Office', 'tbl_office', '2024-03-04 07:44:11', '2024-03-04 07:44:11', 1, 1, NULL),
(11, 'Residence', 'tbl_residence', '2024-03-04 07:45:04', '2024-03-04 07:45:04', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_incometax`
--

CREATE TABLE `tbl_incometax` (
  `id` int(11) NOT NULL,
  `application_name` varchar(255) DEFAULT NULL,
  `los_no` varchar(50) DEFAULT NULL,
  `branch_name` varchar(255) DEFAULT NULL,
  `income_type` varchar(50) DEFAULT NULL,
  `yearly_income` varchar(255) DEFAULT NULL,
  `assessment_year` varchar(50) DEFAULT NULL,
  `verifying_income_proof` varchar(255) DEFAULT NULL,
  `pan_no` varchar(50) DEFAULT NULL,
  `proof_submitted` varchar(255) DEFAULT NULL,
  `acknowledgement_number` varchar(50) DEFAULT NULL,
  `Submission_date` date DEFAULT NULL,
  `gross_income` varchar(255) DEFAULT NULL,
  `auditor_name` varchar(255) DEFAULT NULL,
  `office_address` varchar(255) DEFAULT NULL,
  `status_type` varchar(50) DEFAULT NULL,
  `itr` varchar(255) DEFAULT NULL,
  `executive_name` varchar(255) DEFAULT NULL,
  `signature` varchar(255) DEFAULT NULL,
  `stamp` varchar(255) DEFAULT NULL,
  `system_case_id` varchar(50) DEFAULT NULL,
  `applicant_name` varchar(255) DEFAULT NULL,
  `ref_number` varchar(50) DEFAULT NULL,
  `status` varchar(11) NOT NULL DEFAULT 'In-review'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_incometax`
--

INSERT INTO `tbl_incometax` (`id`, `application_name`, `los_no`, `branch_name`, `income_type`, `yearly_income`, `assessment_year`, `verifying_income_proof`, `pan_no`, `proof_submitted`, `acknowledgement_number`, `Submission_date`, `gross_income`, `auditor_name`, `office_address`, `status_type`, `itr`, `executive_name`, `signature`, `stamp`, `system_case_id`, `applicant_name`, `ref_number`, `status`) VALUES
(1, 'Venky', '', '', '', '', NULL, NULL, NULL, '--select--', NULL, '0000-00-00', '', '', '', '--select--', '--select--', '', NULL, NULL, '', '', '', 'Reject'),
(2, 'ppp', '12543', 'kurnool branch', 'business income', '2621011', '2023-2024', 'kurnool', 'bwupv7761c', 'YES', '12356825412', '2024-03-07', '51252132', 'rlds', 'hyderbad', 'companies and firms', 'ITR-2', 'venky', 'vvv87.jpg', 'vvv88.jpg', '279/15468', 'rachuru venkateswarlu', '97/145284', 'In-review');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id` bigint(255) NOT NULL,
  `menu_level` bigint(20) DEFAULT NULL,
  `menu_id` bigint(20) DEFAULT NULL,
  `entity_id` int(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `menu_icon` varchar(255) DEFAULT NULL,
  `menu_link` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`id`, `menu_level`, `menu_id`, `entity_id`, `name`, `menu_icon`, `menu_link`, `parent_id`, `created_at`, `updated_at`, `created_by`, `updated_by`, `status`) VALUES
(1, 1, 1, NULL, 'Dashboard', 'fas fa-tachometer-alt', '/Dashboard', 0, '2024-02-26 23:50:47', '2024-03-19 05:26:23', NULL, NULL, 'active'),
(2, 1, 2, NULL, ' Manage Employee', 'fa-solid fa-users', '#', 0, '2024-02-27 00:08:59', '2024-03-03 23:35:43', NULL, NULL, 'active'),
(3, 2, 3, 3, 'Add Employee', 'far fa-circle ', '/Employee/Employe/add_employee', 2, '2024-02-27 00:10:10', '2024-03-04 07:54:04', NULL, NULL, 'active'),
(4, 2, 4, 3, 'View Employee', 'far fa-circle ', '/Employee/Employe/view_employee', 2, '2024-02-27 23:43:46', '2024-03-04 07:54:08', NULL, NULL, 'active'),
(5, 2, 5, 5, 'assign roles', 'far fa-circle ', '/roles/Rolesass', 2, '2024-02-27 23:49:30', '2024-03-04 07:54:20', NULL, NULL, 'active'),
(6, 1, 6, NULL, ' Manage Settings', 'fa fa-cog', '#', 0, '2024-02-27 23:51:36', '2024-03-03 23:36:03', NULL, NULL, 'active'),
(7, 2, 7, 2, 'Manage Code Values', 'far fa-circle ', '/Code_values', 6, '2024-02-27 23:52:20', '2024-03-04 07:54:34', NULL, NULL, 'active'),
(8, 2, 8, 1, 'Manage Code Types', 'far fa-circle ', '/Code_types', 6, '2024-02-27 23:53:16', '2024-03-04 07:54:39', NULL, NULL, 'active'),
(9, 2, 9, NULL, 'manage roles', 'far fa-envelope', '#', 6, '2024-02-27 23:54:51', '2024-03-03 23:36:19', NULL, NULL, 'active'),
(10, 3, 10, 4, 'add roles', 'far fa-circle ', '/roles/Rolesmanage', 9, '2024-02-28 00:02:00', '2024-03-04 07:55:45', NULL, NULL, 'active'),
(11, 2, 11, NULL, 'manage menu', 'far fa-envelope', '#', 6, '2024-02-28 06:13:05', '2024-03-03 23:36:26', NULL, NULL, 'active'),
(12, 3, 12, 8, 'add menu', 'far fa-circle ', '/Menu/add', 11, '2024-02-28 06:26:39', '2024-03-04 07:55:56', NULL, NULL, 'active'),
(13, 3, 13, 8, 'view menu', 'far fa-circle ', '/Menu', 11, '2024-02-28 06:27:39', '2024-03-04 07:55:59', NULL, NULL, 'active'),
(14, 1, 14, NULL, ' Manage Work', 'fa fa-cog', '#', 0, '2024-02-28 06:30:23', '2024-03-03 23:36:42', NULL, NULL, 'active'),
(15, 2, 15, NULL, 'income verification', 'far fa-envelope', '#', 14, '2024-02-28 06:31:35', '2024-03-04 07:56:16', NULL, NULL, 'active'),
(16, 3, 16, 9, 'audit', 'far fa-circle ', '/verification/Income', 15, '2024-02-28 06:34:14', '2024-03-04 07:56:19', NULL, NULL, 'active'),
(17, 3, 17, 9, 'view audits', 'far fa-circle ', '/verification/Income/view_income_data', 15, '2024-03-03 23:00:55', '2024-03-04 07:56:23', NULL, NULL, 'active'),
(18, 2, 18, NULL, 'residence verification', 'far fa-envelope', '#', 14, '2024-03-03 23:05:57', '2024-03-03 23:36:58', NULL, NULL, 'active'),
(19, 3, 19, 11, 'audit', 'far fa-circle ', '/verification/Residence', 18, '2024-03-03 23:08:50', '2024-03-04 07:56:30', NULL, NULL, 'active'),
(20, 3, 20, 11, 'view audits', 'far fa-circle ', '/verification/Residence/view_residence_data', 18, '2024-03-03 23:18:27', '2024-03-04 07:56:33', NULL, NULL, 'active'),
(21, 2, 21, NULL, 'office verification', 'far fa-envelope', '#', 14, '2024-03-03 23:29:06', '2024-03-03 23:37:12', NULL, NULL, 'active'),
(22, 3, 22, 10, 'audit', 'far fa-circle ', '/verification/Office', 21, '2024-03-04 06:14:52', '2024-03-04 07:56:40', NULL, NULL, 'active'),
(23, 3, 23, 10, 'view audits', 'far fa-circle ', '/verification/Office/view_office_data', 21, '2024-03-04 06:16:43', '2024-03-04 07:56:44', NULL, NULL, 'active'),
(24, 1, 24, NULL, ' Audits', 'far fa-envelope', '#', 0, '2024-03-04 06:18:08', '2024-03-04 06:19:02', NULL, NULL, 'active'),
(25, 2, 25, NULL, 'assign audits', 'far fa-circle ', '/Audits', 24, '2024-03-04 06:19:54', '2024-03-07 05:26:08', NULL, NULL, 'active'),
(26, 2, 26, 0, 'view all Audits', 'far fa-circle ', '/Audits/view_data', 24, '2024-03-04 06:20:31', '2024-03-11 10:59:55', NULL, NULL, 'active'),
(27, 2, 27, 0, 'approved audits', 'far fa-circle ', '/Audits/approved', 24, '2024-03-04 06:20:59', '2024-03-11 11:08:27', NULL, NULL, 'active'),
(28, 2, 28, 0, 'pending audits', 'far fa-circle ', '/Audits/pending', 24, '2024-03-04 06:21:25', '2024-03-11 11:10:36', NULL, NULL, 'active'),
(29, 2, 29, 0, 'rejected audits', 'far fa-circle ', '/Audits/rejected', 24, '2024-03-04 06:21:55', '2024-03-11 11:12:15', NULL, NULL, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_office`
--

CREATE TABLE `tbl_office` (
  `id` int(11) NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `los_no` varchar(50) NOT NULL,
  `Reference_no` varchar(50) DEFAULT NULL,
  `Typeofloan` varchar(100) DEFAULT NULL,
  `Mobile_no` varchar(15) DEFAULT NULL,
  `Applicantname` varchar(255) DEFAULT NULL,
  `Office_Address` varchar(255) DEFAULT NULL,
  `Receipt_date` date DEFAULT NULL,
  `DateoftheReport` date DEFAULT NULL,
  `ExactCompany` varchar(255) DEFAULT NULL,
  `Designation` varchar(100) DEFAULT NULL,
  `EmployeeId` varchar(50) DEFAULT NULL,
  `Personcontacted` varchar(255) DEFAULT NULL,
  `WorkingSince` varchar(255) DEFAULT NULL,
  `NetSalary` varchar(255) DEFAULT NULL,
  `PersonMet` varchar(255) DEFAULT NULL,
  `Designationoftheperson` varchar(100) DEFAULT NULL,
  `NatureofBusiness` text DEFAULT NULL,
  `LandMark` varchar(255) DEFAULT NULL,
  `Numberofemployeesseen` varchar(50) DEFAULT NULL,
  `PersonmetatOffice` varchar(255) DEFAULT NULL,
  `Indicate` varchar(255) DEFAULT NULL,
  `LocatingOffice` varchar(255) DEFAULT NULL,
  `Boardsighted` varchar(255) DEFAULT NULL,
  `BusinessActivity` text DEFAULT NULL,
  `Equipmentsighted` text DEFAULT NULL,
  `Visitingcard` varchar(255) DEFAULT NULL,
  `Office_is_in` varchar(255) DEFAULT NULL,
  `FieldExecutiveComments` text DEFAULT NULL,
  `fieldexecutive` varchar(255) DEFAULT NULL,
  `signature` varchar(255) DEFAULT NULL,
  `stamp` varchar(255) DEFAULT NULL,
  `system_case_id` varchar(50) DEFAULT NULL,
  `applicant_name` varchar(255) DEFAULT NULL,
  `ref_number` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'In-review',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_office`
--

INSERT INTO `tbl_office` (`id`, `branch_name`, `los_no`, `Reference_no`, `Typeofloan`, `Mobile_no`, `Applicantname`, `Office_Address`, `Receipt_date`, `DateoftheReport`, `ExactCompany`, `Designation`, `EmployeeId`, `Personcontacted`, `WorkingSince`, `NetSalary`, `PersonMet`, `Designationoftheperson`, `NatureofBusiness`, `LandMark`, `Numberofemployeesseen`, `PersonmetatOffice`, `Indicate`, `LocatingOffice`, `Boardsighted`, `BusinessActivity`, `Equipmentsighted`, `Visitingcard`, `Office_is_in`, `FieldExecutiveComments`, `fieldexecutive`, `signature`, `stamp`, `system_case_id`, `applicant_name`, `ref_number`, `status`, `created_at`, `updated_at`) VALUES
(1, 'hyderbad branch', '12543', '00-01-254', 'persnol loan', '09550262808', 'rachuru venkateswarlu', 'goa', '2024-03-31', '2024-04-01', 'kraftbees', 'developer', 'kraftbees001', 'Yes', '2', '800000', '2', '2', 'it', 'ramalayam', 'Few', 'Yes', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'yes', '2nd Floor', 'good', 'MANJULA VENKATESH- 7893342498', 'vvv89.jpg', 'vvv90.jpg', NULL, 'rachuru venkateswarlu', '97/145284', 'In-review', '2024-04-01 05:34:59', '2024-04-01 06:04:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_residence`
--

CREATE TABLE `tbl_residence` (
  `id` int(11) NOT NULL,
  `branch_name` varchar(255) DEFAULT NULL,
  `los_no` varchar(255) DEFAULT NULL,
  `reference_no` varchar(255) DEFAULT NULL,
  `typeofloan` varchar(255) DEFAULT NULL,
  `Receipt_date` date DEFAULT NULL,
  `applicant_name` varchar(255) DEFAULT NULL,
  `Address` text DEFAULT NULL,
  `Receipt` date DEFAULT NULL,
  `Locality` varchar(255) DEFAULT NULL,
  `Accessibility` varchar(255) DEFAULT NULL,
  `entrance_motorable` varchar(255) DEFAULT NULL,
  `Area_Sq_Ft` varchar(255) DEFAULT NULL,
  `aadhar_card` varchar(255) DEFAULT NULL,
  `pan_card` varchar(255) DEFAULT NULL,
  `Visible_Items` varchar(255) DEFAULT NULL,
  `Land_Mark` varchar(255) DEFAULT NULL,
  `Land_Line_No` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `mobile_no2` varchar(255) DEFAULT NULL,
  `Within_Municipal_Limit` varchar(255) DEFAULT NULL,
  `Address_Confirmed` varchar(255) DEFAULT NULL,
  `Relationship` varchar(255) DEFAULT NULL,
  `Interior_Furniture` varchar(255) DEFAULT NULL,
  `typeofroof` varchar(255) DEFAULT NULL,
  `Numberoffloors` varchar(255) DEFAULT NULL,
  `VechielsfoundatResidence` varchar(255) DEFAULT NULL,
  `Nameplatesighted` varchar(255) DEFAULT NULL,
  `NeighboursVerification` varchar(255) DEFAULT NULL,
  `PoliticalLink` varchar(255) DEFAULT NULL,
  `TypeofResidence` varchar(255) DEFAULT NULL,
  `NeighboursVerification1` varchar(255) DEFAULT NULL,
  `FieldExecutiveComments` text DEFAULT NULL,
  `Verifier_Name` varchar(255) DEFAULT NULL,
  `AuthoriedSignatury` varchar(255) DEFAULT NULL,
  `ResidenceDetails` text DEFAULT NULL,
  `OwnershipResidence` varchar(255) DEFAULT NULL,
  `Numberofyearsstay` varchar(255) DEFAULT NULL,
  `TotalFamilyMembers` varchar(255) DEFAULT NULL,
  `residence_permitted` varchar(255) DEFAULT NULL,
  `NeighborsVerification2` varchar(255) DEFAULT NULL,
  `comments` text DEFAULT NULL,
  `positive_image` varchar(555) DEFAULT NULL,
  `signature` varchar(255) DEFAULT NULL,
  `stamp` varchar(255) DEFAULT NULL,
  `system_case_id` varchar(255) DEFAULT NULL,
  `applicant_name1` varchar(255) DEFAULT NULL,
  `ref_number` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'In-review'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_residence`
--

INSERT INTO `tbl_residence` (`id`, `branch_name`, `los_no`, `reference_no`, `typeofloan`, `Receipt_date`, `applicant_name`, `Address`, `Receipt`, `Locality`, `Accessibility`, `entrance_motorable`, `Area_Sq_Ft`, `aadhar_card`, `pan_card`, `Visible_Items`, `Land_Mark`, `Land_Line_No`, `mobile_no`, `mobile_no2`, `Within_Municipal_Limit`, `Address_Confirmed`, `Relationship`, `Interior_Furniture`, `typeofroof`, `Numberoffloors`, `VechielsfoundatResidence`, `Nameplatesighted`, `NeighboursVerification`, `PoliticalLink`, `TypeofResidence`, `NeighboursVerification1`, `FieldExecutiveComments`, `Verifier_Name`, `AuthoriedSignatury`, `ResidenceDetails`, `OwnershipResidence`, `Numberofyearsstay`, `TotalFamilyMembers`, `residence_permitted`, `NeighborsVerification2`, `comments`, `positive_image`, `signature`, `stamp`, `system_case_id`, `applicant_name1`, `ref_number`, `status`) VALUES
(1, 'Town Branch', '12543', '121612', '--select--', '0000-00-00', '', '', '0000-00-00', 'CHAWL AREA', '--select--', 'YES', '', '', '', '', '', '', '', '', 'YES', '', 'Applicant', 'Semi-Furnished', '--select--', '--select--', '--select--', '', '', '', '--select--', '--select--', '', 'select', '', '', 'Own', '--select--', '--select--', '', '--select--', '', '', '', '', '', '', '', 'In-review'),
(2, 'Main Branch', '12543', NULL, NULL, NULL, NULL, '', '0000-00-00', 'CHAWL AREA', '', 'YES', NULL, NULL, NULL, '', '', '', NULL, NULL, 'YES', 'Yes', 'Applicant', 'Semi-Furnished', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, NULL, 'In-review');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `id` int(11) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`id`, `role`, `description`, `created_at`, `updated_at`, `created_by`, `updated_by`, `status`) VALUES
(1, 'Admin', NULL, '2024-02-14 06:55:25', '2024-02-14 06:56:06', NULL, NULL, 'active'),
(2, 'manager', NULL, '2024-03-04 11:18:15', '2024-03-04 11:18:15', NULL, NULL, 'active'),
(3, 'employee', NULL, '2024-03-18 11:02:23', '2024-03-18 11:02:23', NULL, NULL, 'active'),
(10, 'HOD', NULL, '2024-03-19 10:04:17', '2024-03-21 04:26:49', NULL, NULL, 'inactive'),
(11, 'ceo', NULL, '2024-03-19 10:07:01', '2024-03-21 04:26:48', NULL, NULL, 'inactive'),
(12, 'HOD', NULL, '2024-03-19 10:07:48', '2024-03-21 04:26:46', NULL, NULL, 'inactive'),
(13, 'HOD', NULL, '2024-03-19 10:08:26', '2024-03-21 04:26:44', NULL, NULL, 'inactive'),
(14, 'accountent', NULL, '2024-03-19 10:10:08', '2024-03-21 04:26:41', NULL, NULL, 'inactive'),
(15, 'accountent', NULL, '2024-03-19 10:10:54', '2024-03-21 04:26:38', NULL, NULL, 'inactive'),
(16, 'accountent', NULL, '2024-03-19 10:11:13', '2024-03-21 04:26:36', NULL, NULL, 'inactive'),
(17, 'accountent', NULL, '2024-03-19 10:13:05', '2024-03-21 04:26:33', NULL, NULL, 'inactive'),
(18, 'ceo', NULL, '2024-03-19 10:16:46', '2024-03-21 04:26:30', NULL, NULL, 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role_menu_permissions`
--

CREATE TABLE `tbl_role_menu_permissions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_role_menu_permissions`
--

INSERT INTO `tbl_role_menu_permissions` (`id`, `user_id`, `role_id`, `menu_id`, `status`) VALUES
(1, 2, 1, 1, 'active'),
(2, 2, 1, 2, 'active'),
(3, 2, 1, 3, 'active'),
(4, 2, 1, 4, 'active'),
(5, 2, 1, 5, 'active'),
(6, 2, 1, 6, 'active'),
(7, 2, 1, 7, 'active'),
(8, 2, 1, 8, 'active'),
(9, 2, 1, 9, 'active'),
(10, 2, 1, 10, 'active'),
(11, 2, 1, 11, 'active'),
(12, 2, 1, 12, 'active'),
(13, 0, 1, 13, 'active'),
(14, 0, 1, 14, 'active'),
(15, 0, 1, 15, 'active'),
(16, 0, 1, 16, 'active'),
(17, 0, 1, 17, 'active'),
(18, 0, 1, 18, 'active'),
(19, 0, 1, 19, 'active'),
(20, 0, 1, 20, 'active'),
(21, 0, 1, 21, 'active'),
(22, 0, 1, 22, 'active'),
(23, 0, 1, 23, 'active'),
(24, 0, 1, 24, 'active'),
(25, 0, 1, 25, 'active'),
(26, 0, 1, 26, 'active'),
(27, 0, 1, 27, 'active'),
(28, 0, 1, 28, 'active'),
(29, 0, 1, 29, 'active'),
(30, 0, 3, 3, 'active'),
(31, 0, 3, 4, 'active'),
(32, 0, 3, 5, 'active'),
(33, 0, 3, 7, 'active'),
(34, 0, 3, 8, 'active'),
(35, 0, 3, 9, 'active'),
(36, 0, 3, 10, 'active'),
(37, 0, 3, 11, 'active'),
(38, 0, 3, 12, 'active'),
(39, 0, 3, 13, 'active'),
(40, 0, 3, 15, 'active'),
(41, 0, 3, 16, 'active'),
(42, 0, 3, 17, 'active'),
(43, 0, 3, 18, 'active'),
(44, 0, 2, 3, 'active'),
(45, 0, 2, 4, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role_permissions`
--

CREATE TABLE `tbl_role_permissions` (
  `id` int(11) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `user_id` int(255) DEFAULT NULL,
  `entity_id` int(11) DEFAULT NULL,
  `can_add` int(255) DEFAULT NULL,
  `can_view` tinyint(1) DEFAULT NULL,
  `can_edit` tinyint(1) DEFAULT NULL,
  `can_delete` tinyint(1) DEFAULT NULL,
  `can_approve` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_role_permissions`
--

INSERT INTO `tbl_role_permissions` (`id`, `role_id`, `user_id`, `entity_id`, `can_add`, `can_view`, `can_edit`, `can_delete`, `can_approve`, `created_at`, `updated_at`, `created_by`, `updated_by`, `status`) VALUES
(1, 1, 2, 1, 1, 1, 1, 1, 1, '2024-03-01 05:13:21', '2024-03-06 04:33:10', NULL, NULL, 'active'),
(2, 1, 2, 2, 1, 1, 1, 1, 1, '2024-03-01 05:13:21', '2024-03-05 09:13:37', NULL, NULL, 'active'),
(3, 1, 2, 3, 1, 1, 1, 1, 1, '2024-03-01 05:13:21', '2024-03-05 12:03:45', NULL, NULL, 'active'),
(4, 1, 2, 4, 1, 1, 1, 1, 1, '2024-03-01 05:13:21', '2024-03-06 04:37:36', NULL, NULL, 'active'),
(5, 1, 2, 5, 1, 1, 1, 1, 1, '2024-03-01 05:13:21', '2024-03-06 07:49:00', NULL, NULL, 'active'),
(6, 1, 2, 6, 1, 1, 1, 1, 1, '2024-03-01 05:13:21', '2024-03-05 09:13:48', NULL, NULL, 'active'),
(7, 1, 2, 7, 1, 1, 1, 1, 1, '2024-03-01 05:13:21', '2024-03-05 09:13:50', NULL, NULL, 'active'),
(8, 1, 2, 8, 1, 1, 1, 1, 1, '2024-03-04 07:22:54', '2024-03-05 09:13:53', NULL, NULL, 'active'),
(9, 1, 2, 9, 1, 1, 1, 1, 1, '2024-03-04 07:22:54', '2024-03-06 07:49:16', NULL, NULL, 'active'),
(10, 1, 2, 10, 1, 1, 1, 1, 1, '2024-03-04 07:22:54', '2024-03-06 08:13:08', NULL, NULL, 'active'),
(11, 1, 2, 11, 1, 1, 1, 1, 1, '2024-03-04 07:22:54', '2024-03-05 09:13:59', NULL, NULL, 'active'),
(12, 2, 4, 1, 0, 0, 0, 0, 0, '2024-03-05 05:12:49', '2024-05-24 06:30:47', NULL, NULL, 'active'),
(13, 2, 4, 2, 0, 0, 0, 0, 0, '2024-03-05 05:12:49', '2024-05-24 06:30:47', NULL, NULL, 'active'),
(14, 2, 4, 3, 1, 1, 1, 1, 1, '2024-03-05 05:12:49', '2024-05-24 06:30:47', NULL, NULL, 'active'),
(15, 2, 4, 4, 0, 0, 0, 0, 0, '2024-03-05 05:12:49', '2024-05-24 06:30:47', NULL, NULL, 'active'),
(16, 2, 4, 5, 0, 0, 0, 0, 0, '2024-03-05 05:12:49', '2024-05-24 06:30:47', NULL, NULL, 'active'),
(17, 2, 4, 6, 0, 0, 0, 0, 0, '2024-03-05 05:12:49', '2024-05-24 06:30:47', NULL, NULL, 'active'),
(18, 2, 4, 7, 0, 0, 0, 0, 0, '2024-03-05 05:12:49', '2024-05-24 06:30:47', NULL, NULL, 'active'),
(19, 2, 4, 8, 0, 0, 0, 0, 0, '2024-03-05 05:12:49', '2024-05-24 06:30:47', NULL, NULL, 'active'),
(20, 2, 4, 9, 0, 0, 0, 0, 0, '2024-03-05 05:12:49', '2024-05-24 06:30:47', NULL, NULL, 'active'),
(21, 2, 4, 10, 0, 0, 0, 0, 0, '2024-03-05 05:12:49', '2024-05-24 06:30:47', NULL, NULL, 'active'),
(22, 2, 4, 11, 0, 0, 0, 0, 0, '2024-03-05 05:12:49', '2024-05-24 06:30:47', NULL, NULL, 'active'),
(23, 3, 1, 1, 1, 1, 0, 0, 0, '2024-03-18 06:32:56', '2024-03-18 06:32:56', NULL, NULL, 'active'),
(24, 3, 1, 2, 0, 1, 0, 0, 0, '2024-03-18 06:32:56', '2024-03-18 06:32:56', NULL, NULL, 'active'),
(25, 3, 1, 3, 0, 0, 0, 0, 0, '2024-03-18 06:32:56', '2024-03-18 06:32:56', NULL, NULL, 'active'),
(26, 3, 1, 4, 0, 0, 0, 0, 0, '2024-03-18 06:32:56', '2024-03-18 06:32:56', NULL, NULL, 'active'),
(27, 3, 1, 5, 0, 0, 0, 0, 0, '2024-03-18 06:32:56', '2024-03-18 06:32:56', NULL, NULL, 'active'),
(28, 3, 1, 6, 0, 0, 0, 0, 0, '2024-03-18 06:32:56', '2024-03-18 06:32:56', NULL, NULL, 'active'),
(29, 3, 1, 7, 0, 0, 1, 0, 0, '2024-03-18 06:32:56', '2024-03-18 06:32:56', NULL, NULL, 'active'),
(30, 3, 1, 8, 0, 1, 0, 0, 0, '2024-03-18 06:32:56', '2024-03-18 06:32:56', NULL, NULL, 'active'),
(31, 3, 1, 9, 0, 1, 0, 0, 0, '2024-03-18 06:32:56', '2024-03-18 06:32:56', NULL, NULL, 'active'),
(32, 3, 1, 10, 0, 0, 0, 0, 0, '2024-03-18 06:32:56', '2024-03-18 06:32:56', NULL, NULL, 'active'),
(33, 3, 1, 11, 1, 1, 0, 0, 0, '2024-03-18 06:32:56', '2024-03-18 06:32:56', NULL, NULL, 'active'),
(34, 3, 4, 1, 1, 1, 1, 1, 1, '2024-05-24 03:46:09', '2024-05-24 06:04:48', NULL, NULL, 'active'),
(35, 3, 4, 2, 1, 1, 1, 1, 1, '2024-05-24 03:46:09', '2024-05-24 06:04:48', NULL, NULL, 'active'),
(36, 3, 4, 3, 1, 1, 1, 1, 1, '2024-05-24 03:46:09', '2024-05-24 06:04:48', NULL, NULL, 'active'),
(37, 3, 4, 4, 0, 0, 0, 0, 0, '2024-05-24 03:46:09', '2024-05-24 06:04:48', NULL, NULL, 'active'),
(38, 3, 4, 5, 0, 0, 0, 0, 0, '2024-05-24 03:46:09', '2024-05-24 06:04:48', NULL, NULL, 'active'),
(39, 3, 4, 6, 0, 0, 0, 0, 0, '2024-05-24 03:46:09', '2024-05-24 06:04:48', NULL, NULL, 'active'),
(40, 3, 4, 7, 0, 0, 0, 0, 0, '2024-05-24 03:46:09', '2024-05-24 06:04:48', NULL, NULL, 'active'),
(41, 3, 4, 8, 0, 0, 0, 0, 0, '2024-05-24 03:46:09', '2024-05-24 06:04:48', NULL, NULL, 'active'),
(42, 3, 4, 9, 0, 0, 0, 0, 0, '2024-05-24 03:46:09', '2024-05-24 06:04:48', NULL, NULL, 'active'),
(43, 3, 4, 10, 0, 0, 0, 0, 0, '2024-05-24 03:46:09', '2024-05-24 06:04:48', NULL, NULL, 'active'),
(44, 3, 4, 11, 0, 0, 0, 0, 0, '2024-05-24 03:46:09', '2024-05-24 06:04:48', NULL, NULL, 'active'),
(45, 3, 7, 1, 0, 0, 0, 0, 0, '2024-05-24 07:32:21', '2024-05-24 07:32:21', NULL, NULL, 'active'),
(46, 3, 7, 2, 0, 0, 0, 0, 0, '2024-05-24 07:32:21', '2024-05-24 07:32:21', NULL, NULL, 'active'),
(47, 3, 7, 3, 1, 1, 1, 1, 0, '2024-05-24 07:32:21', '2024-05-24 07:32:21', NULL, NULL, 'active'),
(48, 3, 7, 4, 0, 0, 0, 0, 0, '2024-05-24 07:32:21', '2024-05-24 07:32:21', NULL, NULL, 'active'),
(49, 3, 7, 5, 0, 0, 0, 0, 0, '2024-05-24 07:32:21', '2024-05-24 07:32:21', NULL, NULL, 'active'),
(50, 3, 7, 6, 0, 0, 0, 0, 0, '2024-05-24 07:32:21', '2024-05-24 07:32:21', NULL, NULL, 'active'),
(51, 3, 7, 7, 0, 0, 0, 0, 0, '2024-05-24 07:32:21', '2024-05-24 07:32:21', NULL, NULL, 'active'),
(52, 3, 7, 8, 0, 0, 0, 0, 0, '2024-05-24 07:32:21', '2024-05-24 07:32:21', NULL, NULL, 'active'),
(53, 3, 7, 9, 0, 0, 0, 0, 0, '2024-05-24 07:32:21', '2024-05-24 07:32:21', NULL, NULL, 'active'),
(54, 3, 7, 10, 0, 0, 0, 0, 0, '2024-05-24 07:32:21', '2024-05-24 07:32:21', NULL, NULL, 'active'),
(55, 3, 7, 11, 0, 0, 0, 0, 0, '2024-05-24 07:32:21', '2024-05-24 07:32:21', NULL, NULL, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_states`
--

CREATE TABLE `tbl_states` (
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `email`, `password`, `employee_id`, `role_id`, `created_at`, `updated_at`, `created_by`, `updated_by`, `status`) VALUES
(1, 'venky', 'demo@gmail.com', '123456', NULL, NULL, '2024-02-13 05:58:56', '2024-02-13 05:58:56', NULL, NULL, 'active'),
(2, 'reddy', 'madhu@gmail.com', '$2y$10$D.5QKp4Rxmuh2gU2t3AVQuBSX1mDGmrzAKXNjc27QbFAwRXiJDBWe', 8, 1, '2024-02-18 15:08:42', '2024-02-29 14:47:26', NULL, NULL, 'active'),
(4, 'vasu', 'vasu@gmail.com', '$2y$10$0i.phA0C1dkU10d4FEvtFeqetCPNNQgo5vdOnFAy9FVD6wLRrjHky', 10, 1, '2024-02-18 16:03:53', '2024-02-29 14:47:33', NULL, NULL, 'active'),
(5, 'reddy', 'demo8@gmail.com', '$2y$10$5OWwZ4CenROm0FxrOmO9j.21aL24BuiD3VvJsrZjwzC3HXgDgXoAe', 12, 2, '2024-03-14 08:17:14', '2024-03-14 08:17:14', NULL, NULL, 'pending'),
(6, 'venkateswarlu', 'datasai006@gmail.com', '$2y$10$PPs0Kw8XdFUbJm6CXoT6JONyNUGx65lTGm4uKvodRh8pRA0DICpxG', 13, 1, '2024-03-18 10:57:47', '2024-03-18 10:57:47', NULL, NULL, 'pending'),
(7, 'rani', 'shoba@gmail.com', '$2y$10$746mlkd.4P0m8th47ftAXO/124R0ET1d4Y9XDk0oZ3J/JGDjrX.nO', 14, 3, '2024-05-24 10:58:24', '2024-05-24 11:01:35', NULL, NULL, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users_regions`
--

CREATE TABLE `tbl_users_regions` (
  `id` int(11) NOT NULL,
  `region_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_audits`
--
ALTER TABLE `tbl_audits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_code_type`
--
ALTER TABLE `tbl_code_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_code_value`
--
ALTER TABLE `tbl_code_value`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_code_value_code_type` (`code_type_id`);

--
-- Indexes for table `tbl_employees`
--
ALTER TABLE `tbl_employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_entities`
--
ALTER TABLE `tbl_entities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_incometax`
--
ALTER TABLE `tbl_incometax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_office`
--
ALTER TABLE `tbl_office`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_residence`
--
ALTER TABLE `tbl_residence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_role_menu_permissions`
--
ALTER TABLE `tbl_role_menu_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_role_permissions`
--
ALTER TABLE `tbl_role_permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_role_permissions_roles` (`role_id`),
  ADD KEY `fk_role_permissions_entities` (`entity_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_states`
--
ALTER TABLE `tbl_states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_users_employee` (`employee_id`),
  ADD KEY `fk_users_roles` (`role_id`);

--
-- Indexes for table `tbl_users_regions`
--
ALTER TABLE `tbl_users_regions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_users_regions_users` (`user_id`),
  ADD KEY `fk_users_regions_code_values` (`region_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_audits`
--
ALTER TABLE `tbl_audits`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_code_type`
--
ALTER TABLE `tbl_code_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_code_value`
--
ALTER TABLE `tbl_code_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_employees`
--
ALTER TABLE `tbl_employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_entities`
--
ALTER TABLE `tbl_entities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_incometax`
--
ALTER TABLE `tbl_incometax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_office`
--
ALTER TABLE `tbl_office`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_residence`
--
ALTER TABLE `tbl_residence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_role_menu_permissions`
--
ALTER TABLE `tbl_role_menu_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tbl_role_permissions`
--
ALTER TABLE `tbl_role_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tbl_states`
--
ALTER TABLE `tbl_states`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_users_regions`
--
ALTER TABLE `tbl_users_regions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_code_value`
--
ALTER TABLE `tbl_code_value`
  ADD CONSTRAINT `fk_code_value_code_type` FOREIGN KEY (`code_type_id`) REFERENCES `tbl_code_type` (`id`);

--
-- Constraints for table `tbl_role_permissions`
--
ALTER TABLE `tbl_role_permissions`
  ADD CONSTRAINT `fk_role_permissions_entities` FOREIGN KEY (`entity_id`) REFERENCES `tbl_entities` (`id`),
  ADD CONSTRAINT `fk_role_permissions_roles` FOREIGN KEY (`role_id`) REFERENCES `tbl_roles` (`id`);

--
-- Constraints for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD CONSTRAINT `fk_users_employee` FOREIGN KEY (`employee_id`) REFERENCES `tbl_employees` (`id`),
  ADD CONSTRAINT `fk_users_roles` FOREIGN KEY (`role_id`) REFERENCES `tbl_roles` (`id`);

--
-- Constraints for table `tbl_users_regions`
--
ALTER TABLE `tbl_users_regions`
  ADD CONSTRAINT `fk_users_regions_code_values` FOREIGN KEY (`region_id`) REFERENCES `tbl_code_value` (`id`),
  ADD CONSTRAINT `fk_users_regions_users` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

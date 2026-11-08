-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2025 at 07:25 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `chating_account`
--

CREATE TABLE `chating_account` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chating_account`
--

INSERT INTO `chating_account` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(1, 913244101, 'akrem', 'mohamed', 'akrem@gail.com', 'bbce1c5ace509b3632b745476b2f807f', '1747554256tick_grey.png', 'Offline now'),
(2, 1359374375, 'LDS', 'DASS', 'new@gmail.com', '53afe262349c8c7109b2f6e348c47860', '1748093609user.png', 'Offline now');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 913244101, 1359374375, 'ADJKLFJKLD');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `recipient` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `is_read` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `message`, `recipient`, `type`, `date`, `is_read`) VALUES
(17, '\'fhjfhjsd\' has been assigned to you. Please review and start working on it', 4, 'New Task Assigned', '2025-05-24', 0),
(18, '\'new\' has been assigned to you. Please review and start working on it', 3, 'New Task Assigned', '2025-05-24', 0),
(19, '\'new2\' has been assigned to you. Please review and start working on it', 4, 'New Task Assigned', '2025-05-24', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `assigned_to` int(11) DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `status` enum('pending','in_progress','completed') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `description`, `assigned_to`, `due_date`, `status`, `created_at`) VALUES
(29, 'fhjfhjsd', 'astjskxjgs', 4, '2025-05-24', 'pending', '2025-05-24 12:13:37'),
(30, 'new', 'test', 3, '2025-05-24', 'pending', '2025-05-24 13:12:19'),
(31, 'new2lkhkhjlhh', 'test2', 4, '2025-05-24', 'pending', '2025-05-24 13:12:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_academic_qualification`
--

CREATE TABLE `tbl_academic_qualification` (
  `id` int(255) NOT NULL,
  `member_no` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `timeframe` varchar(255) NOT NULL,
  `certificate` longblob NOT NULL,
  `transcript` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_academic_qualification`
--

INSERT INTO `tbl_academic_qualification` (`id`, `member_no`, `country`, `institution`, `course`, `level`, `timeframe`, `certificate`, `transcript`) VALUES
(1, 'EM502831748', 'Albania', 'Wello University', 'Software ', 'Degree', '2025', 0x3c212d2d20466f72206d6f72652070726f6a656374733a20566973697420636f6465617374726f2e636f6d20202d2d3e0a3c6272202f3e0a3c623e5761726e696e673c2f623e3a202066696c657479706528293a204c73746174206661696c656420666f7220433a2f696e766f696365732f616c6c5f696e766f696365732f662d43412d323930303330302e70646620696e203c623e433a5c78616d70705c6874646f63735c6e657720706861726d6163795c646f776e6c6f61642e7068703c2f623e206f6e206c696e65203c623e31383c2f623e3c6272202f3e0a3c6272202f3e0a3c623e5761726e696e673c2f623e3a202066696c6573697a6528293a2073746174206661696c656420666f7220433a2f696e766f696365732f616c6c5f696e766f696365732f662d43412d323930303330302e70646620696e203c623e433a5c78616d70705c6874646f63735c6e657720706861726d6163795c646f776e6c6f61642e7068703c2f623e206f6e206c696e65203c623e32313c2f623e3c6272202f3e0a3c6272202f3e0a3c623e5761726e696e673c2f623e3a20207265616466696c6528433a2f696e766f696365732f616c6c5f696e766f696365732f662d43412d323930303330302e706466293a206661696c656420746f206f70656e2073747265616d3a204e6f20737563682066696c65206f72206469726563746f727920696e203c623e433a5c78616d70705c6874646f63735c6e657720706861726d6163795c646f776e6c6f61642e7068703c2f623e206f6e206c696e65203c623e32333c2f623e3c6272202f3e0a, 0x3c212d2d20466f72206d6f72652070726f6a656374733a20566973697420636f6465617374726f2e636f6d20202d2d3e0a3c6272202f3e0a3c623e5761726e696e673c2f623e3a202066696c657479706528293a204c73746174206661696c656420666f7220433a2f696e766f696365732f616c6c5f696e766f696365732f662d43412d303339323032392e70646620696e203c623e433a5c78616d70705c6874646f63735c6e657720706861726d6163795c646f776e6c6f61642e7068703c2f623e206f6e206c696e65203c623e31383c2f623e3c6272202f3e0a3c6272202f3e0a3c623e5761726e696e673c2f623e3a202066696c6573697a6528293a2073746174206661696c656420666f7220433a2f696e766f696365732f616c6c5f696e766f696365732f662d43412d303339323032392e70646620696e203c623e433a5c78616d70705c6874646f63735c6e657720706861726d6163795c646f776e6c6f61642e7068703c2f623e206f6e206c696e65203c623e32313c2f623e3c6272202f3e0a3c6272202f3e0a3c623e5761726e696e673c2f623e3a20207265616466696c6528433a2f696e766f696365732f616c6c5f696e766f696365732f662d43412d303339323032392e706466293a206661696c656420746f206f70656e2073747265616d3a204e6f20737563682066696c65206f72206469726563746f727920696e203c623e433a5c78616d70705c6874646f63735c6e657720706861726d6163795c646f776e6c6f61642e7068703c2f623e206f6e206c696e65203c623e32333c2f623e3c6272202f3e0a);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alerts`
--

CREATE TABLE `tbl_alerts` (
  `id` int(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_alerts`
--

INSERT INTO `tbl_alerts` (`id`, `code`, `description`, `type`) VALUES
(1, '1123', 'You have been registered successfully', 'success'),
(2, '4568', 'Unknown error occurred while performing your request', 'danger'),
(3, '0927', 'Email address is already registered', 'warning'),
(4, '0346', 'Invalid email or password', 'danger'),
(5, '9837', 'Your profile have been updated successfully', 'success'),
(6, '9564', 'Password updated successfully', 'success'),
(9, '2305', 'Professional qualification was added successfully', 'success'),
(11, '0521', 'Qualification was deleted successfully', 'success'),
(13, '9367', 'language have been added', 'success'),
(14, '0591', 'Language was deleted successfully', 'success'),
(15, '8763', 'Language have been updated', 'success'),
(16, '6734', 'Professional qualification was updated', 'success'),
(17, '9843', 'Your job advertise have been posted successfully', 'success'),
(18, '1964', 'Training / Workshop have been added successfully', 'success'),
(20, '9210', 'working experience have been added', 'success'),
(22, '9215', 'working experience updated successfully', 'success'),
(24, '0593', 'working experience was deleted', 'success'),
(26, '9522', 'Training / workshop record have been deleted', 'success'),
(28, '2303', 'Academic qualification have been added successfully', 'success'),
(30, '1521', 'Academic qualification was deleted', 'success'),
(32, '3214', 'Academic qualification have been updated', 'success'),
(34, '2380', 'Referee was added successfully', 'success'),
(36, '7642', 'Referee information have been updated', 'success'),
(38, '0173', 'Job Ad have been deleted', 'success'),
(40, '0369', 'Job Ad has been updated successfully', 'success'),
(42, '2974', 'An error occurred while sending your message', 'danger'),
(43, '5634', 'Your message was sent successfully', 'success'),
(44, '3091', 'You have successfully changed your password', 'success'),
(45, '3591', 'An error occurred while updating your password', 'danger'),
(46, '2290', 'Your certificate size must be less or equal to <strong>1MB</strong>', 'warning'),
(47, '2490', 'Your transcript size must be less or equal to <strong>1MB</strong>', 'warning'),
(48, '5790', 'Training information was updated', 'success'),
(50, '3478', 'Your image size must be less or equal to <strong>1MB</strong>', 'warning'),
(51, '6789', 'Attachment was added successfully', 'success'),
(53, '6784', 'Attachment was deleted successfully', 'success'),
(55, '7764', 'Attachment was updated successfully', 'success'),
(57, '9517', 'Referee have been deleted', 'success');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `id` int(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`id`, `category`) VALUES
(1, 'Accounting'),
(2, 'Auditing'),
(3, 'Banking and Financial Services'),
(4, 'CEO and General Management'),
(5, 'Community and Social Devt'),
(6, 'Creative and Design'),
(7, 'Education and Training'),
(8, 'Engineering and Construction'),
(9, 'Farming and Agribusiness'),
(10, 'Healthcare and Pharmaceutical'),
(11, 'HR & Administration'),
(12, 'IT and Telecoms'),
(13, 'Legal'),
(14, 'Manufacturing'),
(15, 'Marketing,Media and Brand'),
(16, 'Mining and Natural Resources'),
(17, 'Project & Programme Mngmnt'),
(18, 'Research,Science and Biotech'),
(19, 'Security'),
(20, 'Strategy and Consulting'),
(21, 'Tourism and Travel'),
(22, 'Trades and Services'),
(23, 'Transport and Logistics'),
(24, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_countries`
--

CREATE TABLE `tbl_countries` (
  `id` int(11) NOT NULL,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_countries`
--

INSERT INTO `tbl_countries` (`id`, `country_code`, `country_name`) VALUES
(1, 'ET', 'Ethiopia');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_experience`
--

CREATE TABLE `tbl_experience` (
  `id` int(255) NOT NULL,
  `member_no` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `supervisor` varchar(255) NOT NULL,
  `supervisor_phone` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `duties` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_experience`
--

INSERT INTO `tbl_experience` (`id`, `member_no`, `title`, `institution`, `supervisor`, `supervisor_phone`, `start_date`, `end_date`, `duties`) VALUES
(1, 'EM502831748', 'Web Development', 'Welo University', 'Amare', '0963635404', '01/2/2024', '15/3/2024', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jobs`
--

CREATE TABLE `tbl_jobs` (
  `job_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `responsibility` longtext NOT NULL,
  `requirements` longtext NOT NULL,
  `company` varchar(255) NOT NULL,
  `date_posted` varchar(255) NOT NULL,
  `closing_date` varchar(255) NOT NULL,
  `enc_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_applications`
--

CREATE TABLE `tbl_job_applications` (
  `id` int(255) NOT NULL,
  `member_no` varchar(255) NOT NULL,
  `job_id` varchar(255) NOT NULL,
  `application_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_language`
--

CREATE TABLE `tbl_language` (
  `id` int(255) NOT NULL,
  `member_no` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `speak` varchar(255) NOT NULL,
  `reading` varchar(255) NOT NULL,
  `writing` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_language`
--

INSERT INTO `tbl_language` (`id`, `member_no`, `language`, `speak`, `reading`, `writing`) VALUES
(1, 'EM502831748', 'Amharic', 'Very Good', 'Very Good', 'Very Good');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_other_attachments`
--

CREATE TABLE `tbl_other_attachments` (
  `id` int(255) NOT NULL,
  `member_no` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `issuer` varchar(255) NOT NULL,
  `attachment` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_other_attachments`
--

INSERT INTO `tbl_other_attachments` (`id`, `member_no`, `title`, `issuer`, `attachment`) VALUES
(2, 'EM502831748', 'Driver License ', 'Test', 0x3c212d2d20466f72206d6f72652070726f6a656374733a20566973697420636f6465617374726f2e636f6d20202d2d3e0a3c6272202f3e0a3c623e5761726e696e673c2f623e3a202066696c657479706528293a204c73746174206661696c656420666f7220433a2f696e766f696365732f616c6c5f696e766f696365732f662d43412d303339323032392e70646620696e203c623e433a5c78616d70705c6874646f63735c6e657720706861726d6163795c646f776e6c6f61642e7068703c2f623e206f6e206c696e65203c623e31383c2f623e3c6272202f3e0a3c6272202f3e0a3c623e5761726e696e673c2f623e3a202066696c6573697a6528293a2073746174206661696c656420666f7220433a2f696e766f696365732f616c6c5f696e766f696365732f662d43412d303339323032392e70646620696e203c623e433a5c78616d70705c6874646f63735c6e657720706861726d6163795c646f776e6c6f61642e7068703c2f623e206f6e206c696e65203c623e32313c2f623e3c6272202f3e0a3c6272202f3e0a3c623e5761726e696e673c2f623e3a20207265616466696c6528433a2f696e766f696365732f616c6c5f696e766f696365732f662d43412d303339323032392e706466293a206661696c656420746f206f70656e2073747265616d3a204e6f20737563682066696c65206f72206469726563746f727920696e203c623e433a5c78616d70705c6874646f63735c6e657720706861726d6163795c646f776e6c6f61642e7068703c2f623e206f6e206c696e65203c623e32333c2f623e3c6272202f3e0a);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_professional_qualification`
--

CREATE TABLE `tbl_professional_qualification` (
  `id` int(255) NOT NULL,
  `member_no` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `timeframe` varchar(255) NOT NULL,
  `certificate` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_professional_qualification`
--

INSERT INTO `tbl_professional_qualification` (`id`, `member_no`, `country`, `institution`, `title`, `timeframe`, `certificate`) VALUES
(2, 'EM502831748', 'Ethiopia', 'Wello Univrsity', 'Software Engineer ', '2025', 0x3c212d2d20466f72206d6f72652070726f6a656374733a20566973697420636f6465617374726f2e636f6d20202d2d3e0a3c6272202f3e0a3c623e5761726e696e673c2f623e3a202066696c657479706528293a204c73746174206661696c656420666f7220433a2f696e766f696365732f616c6c5f696e766f696365732f662d43412d303339323032392e70646620696e203c623e433a5c78616d70705c6874646f63735c6e657720706861726d6163795c646f776e6c6f61642e7068703c2f623e206f6e206c696e65203c623e31383c2f623e3c6272202f3e0a3c6272202f3e0a3c623e5761726e696e673c2f623e3a202066696c6573697a6528293a2073746174206661696c656420666f7220433a2f696e766f696365732f616c6c5f696e766f696365732f662d43412d303339323032392e70646620696e203c623e433a5c78616d70705c6874646f63735c6e657720706861726d6163795c646f776e6c6f61642e7068703c2f623e206f6e206c696e65203c623e32313c2f623e3c6272202f3e0a3c6272202f3e0a3c623e5761726e696e673c2f623e3a20207265616466696c6528433a2f696e766f696365732f616c6c5f696e766f696365732f662d43412d303339323032392e706466293a206661696c656420746f206f70656e2073747265616d3a204e6f20737563682066696c65206f72206469726563746f727920696e203c623e433a5c78616d70705c6874646f63735c6e657720706861726d6163795c646f776e6c6f61642e7068703c2f623e206f6e206c696e65203c623e32333c2f623e3c6272202f3e0a);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_referees`
--

CREATE TABLE `tbl_referees` (
  `id` int(255) NOT NULL,
  `member_no` varchar(255) NOT NULL,
  `ref_name` varchar(255) NOT NULL,
  `ref_mail` varchar(255) NOT NULL,
  `ref_title` varchar(255) NOT NULL,
  `ref_phone` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_referees`
--

INSERT INTO `tbl_referees` (`id`, `member_no`, `ref_name`, `ref_mail`, `ref_title`, `ref_phone`, `institution`) VALUES
(2, 'EM502831748', 'Welo', 'akremmohamed1993@gmail.com', 'Data Encoder ', '0917578903', 'WELO UNIVERSITY');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tokens`
--

CREATE TABLE `tbl_tokens` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_training`
--

CREATE TABLE `tbl_training` (
  `id` int(255) NOT NULL,
  `member_no` varchar(255) NOT NULL,
  `training` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `timeframe` varchar(255) NOT NULL,
  `certificate` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_training`
--

INSERT INTO `tbl_training` (`id`, `member_no`, `training`, `institution`, `timeframe`, `certificate`) VALUES
(1, 'EM502831748', 'Internship ', 'Wello University', '2024', 0x3c212d2d20466f72206d6f72652070726f6a656374733a20566973697420636f6465617374726f2e636f6d20202d2d3e0a3c6272202f3e0a3c623e5761726e696e673c2f623e3a202066696c657479706528293a204c73746174206661696c656420666f7220433a2f696e766f696365732f616c6c5f696e766f696365732f662d43412d323930303330302e70646620696e203c623e433a5c78616d70705c6874646f63735c6e657720706861726d6163795c646f776e6c6f61642e7068703c2f623e206f6e206c696e65203c623e31383c2f623e3c6272202f3e0a3c6272202f3e0a3c623e5761726e696e673c2f623e3a202066696c6573697a6528293a2073746174206661696c656420666f7220433a2f696e766f696365732f616c6c5f696e766f696365732f662d43412d323930303330302e70646620696e203c623e433a5c78616d70705c6874646f63735c6e657720706861726d6163795c646f776e6c6f61642e7068703c2f623e206f6e206c696e65203c623e32313c2f623e3c6272202f3e0a3c6272202f3e0a3c623e5761726e696e673c2f623e3a20207265616466696c6528433a2f696e766f696365732f616c6c5f696e766f696365732f662d43412d323930303330302e706466293a206661696c656420746f206f70656e2073747265616d3a204e6f20737563682066696c65206f72206469726563746f727920696e203c623e433a5c78616d70705c6874646f63735c6e657720706861726d6163795c646f776e6c6f61642e7068703c2f623e206f6e206c696e65203c623e32333c2f623e3c6272202f3e0a);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(50) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL DEFAULT '-',
  `bdate` varchar(255) NOT NULL DEFAULT '-',
  `bmonth` varchar(255) NOT NULL DEFAULT '-',
  `byear` varchar(255) NOT NULL DEFAULT '-',
  `email` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL DEFAULT '-',
  `title` varchar(255) NOT NULL DEFAULT 'Your professional',
  `city` varchar(255) NOT NULL DEFAULT '-',
  `street` varchar(255) NOT NULL DEFAULT '-',
  `zip` varchar(255) NOT NULL DEFAULT '-',
  `country` varchar(255) NOT NULL DEFAULT '-',
  `phone` varchar(255) NOT NULL DEFAULT '-',
  `about` longtext DEFAULT NULL,
  `avatar` longblob DEFAULT NULL,
  `services` longtext DEFAULT NULL,
  `expertise` longtext DEFAULT NULL,
  `people` varchar(255) NOT NULL DEFAULT '-',
  `last_login` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL DEFAULT '-',
  `login` varchar(255) NOT NULL,
  `member_no` varchar(255) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `first_name`, `last_name`, `gender`, `bdate`, `bmonth`, `byear`, `email`, `education`, `title`, `city`, `street`, `zip`, `country`, `phone`, `about`, `avatar`, `services`, `expertise`, `people`, `last_login`, `role`, `website`, `login`, `member_no`, `status`) VALUES
(1, 'Akrem', 'Mohamed', '-', '-', '-', '-', 'akrem@gail.com', '-', 'Your professional', '-', '-', '-', '-', '-', NULL, NULL, NULL, NULL, '-', '2025-05-27 20:17:39', 'admin', '-', 'bbce1c5ace509b3632b745476b2f807f', 'EM516233685', 'Active'),
(5, 'Ak', '', '-', '-', '-', '-', 'akrem1@gail.com', '-', 'Klkl;', '-', '-', '-', '-', '-', NULL, NULL, NULL, NULL, '-', '2025-05-27 20:22:26', 'employer', '-', 'bbce1c5ace509b3632b745476b2f807f', 'CM968721607', 'Active'),
(6, 'Akrem', 'Mohamed', '-', '-', '-', '-', 'akrem2@gail.com', '-', 'Your professional', '-', '-', '-', '-', '-', NULL, NULL, NULL, NULL, '-', '2025-05-27 20:23:38', 'employee', '-', 'bbce1c5ace509b3632b745476b2f807f', 'EM780115666', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chating_account`
--
ALTER TABLE `chating_account`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assigned_to` (`assigned_to`);

--
-- Indexes for table `tbl_academic_qualification`
--
ALTER TABLE `tbl_academic_qualification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_alerts`
--
ALTER TABLE `tbl_alerts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_countries`
--
ALTER TABLE `tbl_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_experience`
--
ALTER TABLE `tbl_experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jobs`
--
ALTER TABLE `tbl_jobs`
  ADD PRIMARY KEY (`enc_id`),
  ADD UNIQUE KEY `job_id` (`job_id`);

--
-- Indexes for table `tbl_job_applications`
--
ALTER TABLE `tbl_job_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_language`
--
ALTER TABLE `tbl_language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_other_attachments`
--
ALTER TABLE `tbl_other_attachments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_professional_qualification`
--
ALTER TABLE `tbl_professional_qualification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_referees`
--
ALTER TABLE `tbl_referees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tokens`
--
ALTER TABLE `tbl_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_training`
--
ALTER TABLE `tbl_training`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chating_account`
--
ALTER TABLE `chating_account`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_academic_qualification`
--
ALTER TABLE `tbl_academic_qualification`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_alerts`
--
ALTER TABLE `tbl_alerts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_countries`
--
ALTER TABLE `tbl_countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT for table `tbl_experience`
--
ALTER TABLE `tbl_experience`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_jobs`
--
ALTER TABLE `tbl_jobs`
  MODIFY `enc_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_job_applications`
--
ALTER TABLE `tbl_job_applications`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_language`
--
ALTER TABLE `tbl_language`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_other_attachments`
--
ALTER TABLE `tbl_other_attachments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_professional_qualification`
--
ALTER TABLE `tbl_professional_qualification`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_referees`
--
ALTER TABLE `tbl_referees`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_tokens`
--
ALTER TABLE `tbl_tokens`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_training`
--
ALTER TABLE `tbl_training`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

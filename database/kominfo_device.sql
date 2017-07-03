-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2017 at 04:22 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kominfo_device`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE IF NOT EXISTS `activity_log` (
  `activity_log_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `action` varchar(128) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=366 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`activity_log_id`, `username`, `date`, `action`) VALUES
(281, 'admin', '2017-01-25 02:03:30', 'Add device Detail id 9&nbspName&nbspspeaker'),
(282, 'admin', '2017-01-25 02:06:23', 'Add Client User moh'),
(283, 'admin', '2017-01-25 05:59:00', 'Add Client User angga'),
(284, 'admin', '2017-01-25 23:04:51', 'Edit device info speaker'),
(285, 'admin', '2017-01-25 23:14:34', 'Edit device info kyboard'),
(286, '', '2017-01-25 23:15:28', 'Edit device info kyboard'),
(287, 'admin', '2017-01-25 23:21:51', 'Edit device info kyboard'),
(288, 'admin', '2017-01-26 08:39:00', 'Assign Device id 123&nbspName&nbspCentral Processing unit (CPU) to location id 25&nbspName&nbspLibrary'),
(289, 'admin', '2017-01-26 08:39:02', 'Assign Device id 123&nbspName&nbspCentral Processing unit (CPU) to location id 25&nbspName&nbspLibrary'),
(290, 'admin', '2017-01-26 08:39:03', 'Assign Device id 123&nbspName&nbspCentral Processing unit (CPU) to location id 25&nbspName&nbspLibrary'),
(291, 'admin', '2017-01-26 08:39:46', 'Update Status Central Processing unit (CPU) to Used '),
(292, 'admin', '2017-01-26 08:40:23', 'Update Status Central Processing unit (CPU) to Damage '),
(293, 'admin', '2017-01-26 08:40:52', 'Update Status Central Processing unit (CPU) to Used '),
(294, 'admin', '2017-01-26 22:53:20', 'Add device Type Tanah'),
(295, 'admin', '2017-01-26 23:07:11', 'Add device Detail id 10&nbspName&nbspTanah'),
(296, 'admin', '2017-01-26 23:21:48', 'Add device Detail id 10&nbspName&nbspTanah'),
(324, 'admin', '2017-02-18 09:19:48', 'Update Status TANAH to Used '),
(325, 'admin', '2017-02-18 09:22:42', 'transfer Device  TANAH to location id 38&nbspName&nbspkasubag management'),
(326, 'admin', '2017-02-18 09:37:22', 'Assign Device id 130&nbspName&nbspTANAH to location id 38&nbspName&nbspkasubag management'),
(327, 'admin', '2017-02-18 09:37:22', 'Assign Device id 129&nbspName&nbspTANAH to location id 38&nbspName&nbspkasubag management'),
(328, 'admin', '2017-02-18 09:37:22', 'Assign Device id 128&nbspName&nbspmouse to location id 38&nbspName&nbspkasubag management'),
(329, 'admin', '2017-02-18 09:37:22', 'Assign Device id 124&nbspName&nbspMonitor to location id 38&nbspName&nbspkasubag management'),
(330, 'admin', '2017-02-18 09:37:25', 'Assign Device id 130&nbspName&nbspTANAH to location id 38&nbspName&nbspkasubag management'),
(331, 'admin', '2017-02-18 09:37:25', 'Assign Device id 129&nbspName&nbspTANAH to location id 38&nbspName&nbspkasubag management'),
(332, 'admin', '2017-02-18 09:37:25', 'Assign Device id 128&nbspName&nbspmouse to location id 38&nbspName&nbspkasubag management'),
(333, 'admin', '2017-02-18 09:37:25', 'Assign Device id 124&nbspName&nbspMonitor to location id 38&nbspName&nbspkasubag management'),
(334, 'admin', '2017-02-18 09:37:42', 'Assign Device id 122&nbspName&nbspkyboard to location id 37&nbspName&nbspkasubag keuangan'),
(335, 'admin', '2017-02-18 09:41:19', 'Add device Detail id 3&nbspName&nbspPower cord'),
(336, 'admin', '2017-02-18 22:35:03', 'Update Status TANAH to Damage/Rusak '),
(337, 'admin', '2017-02-18 22:42:45', 'Update Status TANAH to Damage '),
(338, 'admin', '2017-02-18 22:43:19', 'Dump Device TANAH Inventory Code:01.01.11.04.01'),
(339, 'admin', '2017-02-18 22:49:20', 'Update Status mouse to Damage/Rusak '),
(340, 'admin', '2017-02-18 22:50:13', 'Repair Device mouse Inventory Code:9898'),
(341, 'admin', '2017-02-18 23:06:56', 'Update Status TANAH to Damage/Rusak '),
(342, 'admin', '2017-02-19 00:30:30', 'Add device Detail id 4&nbspName&nbspmouse'),
(343, 'admin', '2017-02-19 00:31:04', 'Assign Device id 132&nbspName&nbspmouse to location id 37&nbspName&nbspkasubag keuangan'),
(344, 'admin', '2017-02-19 00:31:54', 'Update Status mouse to Damage/Rusak '),
(345, 'admin', '2017-02-21 01:13:20', 'Add device Detail id 12&nbspName&nbspAlat Berat'),
(346, 'admin', '2017-02-21 01:58:06', 'Add device Detail id 13&nbspName&nbspAlat Angkutan'),
(347, 'admin', '2017-02-21 02:03:53', 'Add device Detail id 14&nbspName&nbspAlat Bengkel dan Alat Ukur'),
(348, 'admin', '2017-02-21 02:25:34', 'Add device Detail id 16&nbspName&nbspAlat Studio dan Komunikasi'),
(349, 'admin', '2017-02-21 02:29:26', 'Edit Device Type Gedung dan Bangunan'),
(350, 'admin', '2017-02-21 02:31:58', 'Add device Detail id 17&nbspName&nbspGedung dan Bangunan'),
(351, 'admin', '2017-02-21 02:34:49', 'Add device Detail id 18&nbspName&nbspINSTALASI'),
(352, 'admin', '2017-02-21 02:40:57', 'Add device Detail id 15&nbspName&nbspAlat Kantor dan Rumah Tangga'),
(353, 'admin', '2017-02-21 08:40:45', 'Assign Device id 133&nbspName&nbspAlat Berat to location id 37&nbspName&nbspkasubag keuangan'),
(354, 'admin', '2017-02-21 08:41:02', 'Update Status Alat Berat to Damage/Rusak '),
(355, 'admin', '2017-02-21 08:42:20', 'Edit device info Gedung dan Bangunan'),
(356, 'admin', '2017-02-21 09:19:30', 'transfer Device  TANAH to location id 37&nbspName&nbspkasubag keuangan'),
(357, 'admin', '2017-02-24 06:59:06', 'Add device Type TANAH'),
(358, 'admin', '2017-02-24 06:59:23', 'Add device Type Alat Berat'),
(359, 'admin', '2017-02-24 07:02:13', 'Add device Type Alat Angkutan'),
(360, 'admin', '2017-02-24 07:02:23', 'Add device Type Alat Bengkel dan Alat Ukur'),
(361, 'admin', '2017-02-24 07:02:30', 'Add device Type Alat Kantor dan Rumah Tangga'),
(362, 'admin', '2017-02-24 07:02:37', 'Add device Type Alat Studio dan Komunikasi'),
(363, 'admin', '2017-02-24 07:02:45', 'Add device Type Gedung dan Bangunan'),
(364, 'admin', '2017-02-24 07:02:53', 'Add device Type INSTALASI'),
(365, 'admin', '2017-02-24 07:39:31', 'Menambahkan barang dengan id 23&nbspName&nbspAlat Berat');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(128) NOT NULL,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `adminthumbnails` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `firstname`, `lastname`, `username`, `password`, `adminthumbnails`) VALUES
(5, 'syaiful', '9507', 'admin', 'admin', 'uploads/biru.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `client_id` int(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `thumbnails` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `username`, `password`, `firstname`, `lastname`, `thumbnails`) VALUES
(13, 'zadi', 'zadi', 'moh', 'zadi', 'images/NO-IMAGE-AVAILABLE.jpg'),
(14, 'angga', 'angga', 'angga', 'firnando', 'images/NO-IMAGE-AVAILABLE.jpg'),
(15, 'anggi', 'anggi', 'anggi', 'rahadi', 'images/NO-IMAGE-AVAILABLE.jpg'),
(16, 't', 't', 't', 't', 'images/NO-IMAGE-AVAILABLE.jpg'),
(17, 'syaiful', 'staff', 'syaiful', '9507', 'images/NO-IMAGE-AVAILABLE.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `device_name`
--

CREATE TABLE IF NOT EXISTS `device_name` (
  `dev_id` int(11) NOT NULL,
  `dev_name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `device_name`
--

INSERT INTO `device_name` (`dev_id`, `dev_name`) VALUES
(22, 'TANAH'),
(23, 'Alat Berat'),
(24, 'Alat Angkutan'),
(25, 'Alat Bengkel dan Alat Ukur'),
(26, 'Alat Kantor dan Rumah Tangga'),
(27, 'Alat Studio dan Komunikasi'),
(28, 'Gedung dan Bangunan'),
(29, 'INSTALASI');

-- --------------------------------------------------------

--
-- Table structure for table `location_details`
--

CREATE TABLE IF NOT EXISTS `location_details` (
  `ld_id` int(11) NOT NULL,
  `stdev_id` int(11) NOT NULL,
  `date_deployment` date NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `notification_id` int(11) NOT NULL,
  `fullname` varchar(128) NOT NULL,
  `notification` varchar(100) NOT NULL,
  `date_of_notification` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notification_id`, `fullname`, `notification`, `date_of_notification`, `link`) VALUES
(1, 'moh zadi', 'Add device id 5&nbspName&nbspCentral Processing unit (CPU), Serial Number: 68858', '2017-01-25 05:56:46', 'device_stocks.php'),
(2, 'angga firnando', 'Add device id 8&nbspName&nbspMonitor, Serial Number: 989898', '2017-01-26 11:13:00', 'device_stocks.php'),
(3, 'moh zadi', 'Add device id 4&nbspName&nbspmouse, Serial Number: 9898', '2017-01-27 08:04:15', 'device_stocks.php');

-- --------------------------------------------------------

--
-- Table structure for table `notification_read`
--

CREATE TABLE IF NOT EXISTS `notification_read` (
  `notification_read_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `admin_read` varchar(50) NOT NULL,
  `notification_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification_read`
--

INSERT INTO `notification_read` (`notification_read_id`, `admin_id`, `admin_read`, `notification_id`) VALUES
(1, 5, 'yes', 1),
(2, 5, 'yes', 2),
(3, 5, 'yes', 3),
(4, 5, 'yes', 4);

-- --------------------------------------------------------

--
-- Table structure for table `stdevice`
--

CREATE TABLE IF NOT EXISTS `stdevice` (
  `id` int(11) NOT NULL,
  `dev_id` int(11) NOT NULL,
  `dev_desc` varchar(128) NOT NULL,
  `dev_serial` varchar(128) NOT NULL,
  `dev_brand` varchar(128) NOT NULL,
  `dev_model` varchar(128) NOT NULL,
  `dev_status` varchar(128) NOT NULL,
  `register` int(10) NOT NULL,
  `no_sertificat` varchar(40) NOT NULL,
  `material` varchar(30) NOT NULL,
  `get_device` varchar(20) NOT NULL,
  `get_year` varchar(20) NOT NULL,
  `dev_size` varchar(20) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `dev_condition` varchar(30) NOT NULL,
  `dev_stocks` int(20) NOT NULL,
  `dev_price` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=141 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stdevice`
--

INSERT INTO `stdevice` (`id`, `dev_id`, `dev_desc`, `dev_serial`, `dev_brand`, `dev_model`, `dev_status`, `register`, `no_sertificat`, `material`, `get_device`, `get_year`, `dev_size`, `unit`, `dev_condition`, `dev_stocks`, `dev_price`) VALUES
(140, 23, '', '87987', 'desell', '', 'New', 1, '', '', '', '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `stlocation`
--

CREATE TABLE IF NOT EXISTS `stlocation` (
  `stdev_id` int(11) NOT NULL,
  `stdev_location_name` varchar(128) NOT NULL,
  `thumbnails` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stlocation`
--

INSERT INTO `stlocation` (`stdev_id`, `stdev_location_name`, `thumbnails`) VALUES
(37, 'kasubag keuangan', 'images/line_location.jpg'),
(38, 'kasubag management', 'images/line_location.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE IF NOT EXISTS `user_log` (
  `user_log_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `login_date` varchar(30) NOT NULL,
  `logout_date` varchar(128) NOT NULL,
  `admin_id` int(128) NOT NULL,
  `client_id` int(128) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=265 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`user_log_id`, `username`, `login_date`, `logout_date`, `admin_id`, `client_id`) VALUES
(190, 'admin', '2017-01-25 01:54:11', '2017-02-24', 5, 0),
(191, 'zadi', '2017-01-25 03:52:01', '2017-01-27', 0, 13),
(192, 'admin', '2017-01-25 03:55:50', '2017-02-24', 5, 0),
(193, 'admin', '2017-01-25 05:48:53', '2017-02-24', 5, 0),
(194, 'zadi', '2017-01-25 05:54:00', '2017-01-27', 0, 13),
(195, 'admin', '2017-01-25 22:29:32', '2017-02-24', 5, 0),
(196, 'admin', '2017-01-25 23:18:09', '2017-02-24', 5, 0),
(197, 'admin', '2017-01-25 23:29:23', '2017-02-24', 5, 0),
(198, 'admin', '2017-01-26 00:33:00', '2017-02-24', 5, 0),
(199, 'admin', '2017-01-26 05:36:55', '2017-02-24', 5, 0),
(200, 'zadi', '2017-01-26 08:09:06', '2017-01-27', 0, 13),
(201, 'admin', '2017-01-26 08:10:34', '2017-02-24', 5, 0),
(202, 'admin', '2017-01-26 10:48:53', '2017-02-24', 5, 0),
(203, 'zadi', '2017-01-26 11:05:18', '2017-01-27', 0, 13),
(204, 'admin', '2017-01-26 11:11:31', '2017-02-24', 5, 0),
(205, 'angga', '2017-01-26 11:11:58', '2017-02-20', 0, 14),
(206, 'admin', '2017-01-26 11:13:14', '2017-02-24', 5, 0),
(207, 'admin', '2017-01-26 13:10:28', '2017-02-24', 5, 0),
(208, 'admin', '2017-01-26 14:17:41', '2017-02-24', 5, 0),
(209, 'admin', '2017-01-26 20:38:13', '2017-02-24', 5, 0),
(210, 'admin', '2017-01-26 20:44:02', '2017-02-24', 5, 0),
(211, 'admin', '2017-01-27 06:26:36', '2017-02-24', 5, 0),
(212, 'admin', '2017-01-27 08:00:02', '2017-02-24', 5, 0),
(213, 'zadi', '2017-01-27 08:03:41', '2017-01-27', 0, 13),
(214, 'admin', '2017-01-27 08:04:30', '2017-02-24', 5, 0),
(215, 'admin', '2017-01-27 08:19:06', '2017-02-24', 5, 0),
(216, 'admin', '2017-01-27 08:19:07', '2017-02-24', 5, 0),
(217, 'admin', '2017-02-09 10:09:40', '2017-02-24', 5, 0),
(218, 'admin', '2017-02-10 09:42:30', '2017-02-24', 5, 0),
(219, 'admin', '2017-02-16 15:56:35', '2017-02-24', 5, 0),
(220, 'angga', '2017-02-16 17:00:11', '2017-02-20', 0, 14),
(221, 'angga', '2017-02-16 20:22:16', '2017-02-20', 0, 14),
(222, 'admin', '2017-02-16 22:19:40', '2017-02-24', 5, 0),
(223, 'angga', '2017-02-16 22:23:49', '2017-02-20', 0, 14),
(224, 'admin', '2017-02-16 23:08:10', '2017-02-24', 5, 0),
(225, 'syaiful', '2017-02-16 23:08:57', '2017-02-24', 0, 17),
(226, 'syaiful', '2017-02-16 23:09:01', '2017-02-24', 0, 17),
(227, 'admin', '2017-02-16 23:37:44', '2017-02-24', 5, 0),
(228, 'admin', '2017-02-17 06:15:52', '2017-02-24', 5, 0),
(229, 'syaiful', '2017-02-17 07:11:51', '2017-02-24', 0, 17),
(230, 'angga', '2017-02-17 20:19:52', '2017-02-20', 0, 14),
(231, 'admin', '2017-02-17 20:26:35', '2017-02-24', 5, 0),
(232, 'angga', '2017-02-17 20:29:38', '2017-02-20', 0, 14),
(233, 'admin', '2017-02-17 20:58:58', '2017-02-24', 5, 0),
(234, 'angga', '2017-02-17 21:00:09', '2017-02-20', 0, 14),
(235, 'admin', '2017-02-17 21:48:45', '2017-02-24', 5, 0),
(236, 'admin', '2017-02-17 22:27:07', '2017-02-24', 5, 0),
(237, 'admin', '2017-02-17 22:28:54', '2017-02-24', 5, 0),
(238, 'angga', '2017-02-17 22:44:55', '2017-02-20', 0, 14),
(239, 'admin', '2017-02-17 22:45:28', '2017-02-24', 5, 0),
(240, 'angga', '2017-02-17 22:48:44', '2017-02-20', 0, 14),
(241, 'admin', '2017-02-17 22:50:53', '2017-02-24', 5, 0),
(242, 'admin', '2017-02-18 09:01:50', '2017-02-24', 5, 0),
(243, 'admin', '2017-02-18 09:05:45', '2017-02-24', 5, 0),
(244, 'admin', '2017-02-18 09:17:34', '2017-02-24', 5, 0),
(245, 'syaiful', '2017-02-18 09:24:56', '2017-02-24', 0, 17),
(246, 'admin', '2017-02-18 09:33:43', '2017-02-24', 5, 0),
(247, 'admin', '2017-02-18 22:12:59', '2017-02-24', 5, 0),
(248, 'admin', '2017-02-18 22:30:19', '2017-02-24', 5, 0),
(249, 'admin', '2017-02-18 22:30:24', '2017-02-24', 5, 0),
(250, 'admin', '2017-02-21 00:19:49', '2017-02-24', 5, 0),
(251, 'angga', '2017-02-21 04:03:21', '2017-02-20', 0, 14),
(252, 'admin', '2017-02-21 06:24:20', '2017-02-24', 5, 0),
(253, 'syaiful', '2017-02-21 09:22:40', '2017-02-24', 0, 17),
(254, 'admin', '2017-02-23 21:09:13', '2017-02-24', 5, 0),
(255, 'syaiful', '2017-02-23 21:10:38', '2017-02-24', 0, 17),
(256, 'admin', '2017-02-23 21:36:33', '2017-02-24', 5, 0),
(257, 'admin', '2017-02-23 22:09:11', '2017-02-24', 5, 0),
(258, 'admin', '2017-02-23 22:11:29', '2017-02-24', 5, 0),
(259, 'admin', '2017-02-23 22:13:06', '2017-02-24', 5, 0),
(260, 'admin', '2017-02-24 06:45:18', '2017-02-24', 5, 0),
(261, 'admin', '2017-02-24 06:45:19', '2017-02-24', 5, 0),
(262, 'syaiful', '2017-02-24 07:39:51', '2017-02-24', 0, 17),
(263, 'admin', '2017-02-24 07:40:23', '', 5, 0),
(264, 'syaiful', '2017-02-24 07:40:43', '', 0, 17);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`activity_log_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `device_name`
--
ALTER TABLE `device_name`
  ADD PRIMARY KEY (`dev_id`);

--
-- Indexes for table `location_details`
--
ALTER TABLE `location_details`
  ADD PRIMARY KEY (`ld_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `notification_read`
--
ALTER TABLE `notification_read`
  ADD PRIMARY KEY (`notification_read_id`);

--
-- Indexes for table `stdevice`
--
ALTER TABLE `stdevice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stlocation`
--
ALTER TABLE `stlocation`
  ADD PRIMARY KEY (`stdev_id`);

--
-- Indexes for table `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`user_log_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `activity_log_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=366;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(128) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(128) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `device_name`
--
ALTER TABLE `device_name`
  MODIFY `dev_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `location_details`
--
ALTER TABLE `location_details`
  MODIFY `ld_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `notification_read`
--
ALTER TABLE `notification_read`
  MODIFY `notification_read_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `stdevice`
--
ALTER TABLE `stdevice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=141;
--
-- AUTO_INCREMENT for table `stlocation`
--
ALTER TABLE `stlocation`
  MODIFY `stdev_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `user_log`
--
ALTER TABLE `user_log`
  MODIFY `user_log_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=265;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

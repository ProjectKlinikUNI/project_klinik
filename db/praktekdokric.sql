-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2021 at 06:32 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praktekdokric`
--

-- --------------------------------------------------------

--
-- Table structure for table `sys_logs`
--

CREATE TABLE `sys_logs` (
  `log_id` int(11) NOT NULL,
  `log_name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sys_modules`
--

CREATE TABLE `sys_modules` (
  `module_id` int(11) NOT NULL,
  `navbar_id` int(11) DEFAULT NULL,
  `module_name` varchar(150) NOT NULL,
  `link` varchar(250) NOT NULL,
  `src` varchar(250) NOT NULL,
  `m_view` enum('Y','N') DEFAULT 'N' COMMENT 'Y Jika module mempunya fungsi view, N Jika module tidak mempunya fungsi view',
  `m_add` enum('Y','N') DEFAULT 'N',
  `m_upd` enum('Y','N') DEFAULT 'N',
  `m_del` enum('Y','N') DEFAULT 'N',
  `active` enum('Y','N') DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sys_navbar`
--

CREATE TABLE `sys_navbar` (
  `navbar_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `navbar_icon` varchar(100) DEFAULT NULL,
  `navbar_name` varchar(50) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT 0,
  `active` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sys_rules`
--

CREATE TABLE `sys_rules` (
  `rule_id` int(11) NOT NULL,
  `rule_name` varchar(150) NOT NULL,
  `active` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sys_rulesmodules`
--

CREATE TABLE `sys_rulesmodules` (
  `rule_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `m_view` enum('Y','N') DEFAULT NULL,
  `m_add` enum('Y','N') DEFAULT NULL,
  `m_upd` enum('Y','N') DEFAULT NULL,
  `m_del` enum('Y','N') DEFAULT NULL,
  `active` enum('Y','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sys_users`
--

CREATE TABLE `sys_users` (
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(250) NOT NULL DEFAULT '',
  `session_id` varchar(250) DEFAULT NULL,
  `active` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sys_logs`
--
ALTER TABLE `sys_logs`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `sys_modules`
--
ALTER TABLE `sys_modules`
  ADD PRIMARY KEY (`module_id`);

--
-- Indexes for table `sys_navbar`
--
ALTER TABLE `sys_navbar`
  ADD PRIMARY KEY (`navbar_id`);

--
-- Indexes for table `sys_rules`
--
ALTER TABLE `sys_rules`
  ADD PRIMARY KEY (`rule_id`);

--
-- Indexes for table `sys_rulesmodules`
--
ALTER TABLE `sys_rulesmodules`
  ADD PRIMARY KEY (`rule_id`,`module_id`),
  ADD KEY `FK_sys_rulesmodules_sys_modules` (`module_id`);

--
-- Indexes for table `sys_users`
--
ALTER TABLE `sys_users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sys_logs`
--
ALTER TABLE `sys_logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_modules`
--
ALTER TABLE `sys_modules`
  MODIFY `module_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_navbar`
--
ALTER TABLE `sys_navbar`
  MODIFY `navbar_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sys_rules`
--
ALTER TABLE `sys_rules`
  MODIFY `rule_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sys_rulesmodules`
--
ALTER TABLE `sys_rulesmodules`
  ADD CONSTRAINT `FK_sys_rulesmodules_sys_modules` FOREIGN KEY (`module_id`) REFERENCES `sys_modules` (`module_id`),
  ADD CONSTRAINT `FK_sys_rulesmodules_sys_rules` FOREIGN KEY (`rule_id`) REFERENCES `sys_rules` (`rule_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

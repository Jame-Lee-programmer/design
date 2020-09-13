-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2020 at 10:05 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saas_erp`
--

-- --------------------------------------------------------

--
-- Table structure for table `installer`
--

CREATE TABLE `installer` (
  `id` int(1) NOT NULL,
  `installer_flag` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accounts`
--

CREATE TABLE `tbl_accounts` (
  `account_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `account_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `balance` decimal(18,2) NOT NULL DEFAULT 0.00,
  `permission` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account_details`
--

CREATE TABLE `tbl_account_details` (
  `account_details_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `fullname` varchar(160) COLLATE utf8_unicode_ci DEFAULT NULL,
  `employment_id` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(100) COLLATE utf8_unicode_ci DEFAULT 'en_US',
  `address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(32) COLLATE utf8_unicode_ci DEFAULT '-',
  `mobile` varchar(32) COLLATE utf8_unicode_ci DEFAULT '',
  `skype` varchar(100) COLLATE utf8_unicode_ci DEFAULT '',
  `language` varchar(40) COLLATE utf8_unicode_ci DEFAULT 'english',
  `designations_id` int(11) DEFAULT 0,
  `avatar` varchar(200) COLLATE utf8_unicode_ci DEFAULT 'uploads/default_avatar.jpg',
  `joining_date` date DEFAULT NULL,
  `present_address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `gender` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maratial_status` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `father_name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mother_name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `passport` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direction` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbl_account_details`
--

INSERT INTO `tbl_account_details` (`account_details_id`, `user_id`, `fullname`, `employment_id`, `company`, `city`, `country`, `locale`, `address`, `phone`, `mobile`, `skype`, `language`, `designations_id`, `avatar`, `joining_date`, `present_address`, `date_of_birth`, `gender`, `maratial_status`, `father_name`, `mother_name`, `passport`, `direction`) VALUES
(1, 1, 'Admin', NULL, NULL, NULL, NULL, 'en_US', NULL, '-', '', '', 'english', 0, 'uploads/default_avatar.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities`
--

CREATE TABLE `tbl_activities` (
  `activities_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `user` int(11) NOT NULL,
  `module` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `module_field_id` int(11) DEFAULT NULL,
  `activity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activity_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `icon` varchar(32) COLLATE utf8_unicode_ci DEFAULT 'fa-coffee',
  `link` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value1` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `value2` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_advance_salary`
--

CREATE TABLE `tbl_advance_salary` (
  `advance_salary_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `advance_amount` varchar(200) NOT NULL,
  `deduct_month` varchar(30) DEFAULT NULL,
  `reason` text DEFAULT NULL,
  `request_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(2) NOT NULL DEFAULT 0 COMMENT '0 =pending,1=accpect , 2 = reject and 3 = paid',
  `approve_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_announcements`
--

CREATE TABLE `tbl_announcements` (
  `announcements_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('published','unpublished') NOT NULL DEFAULT 'unpublished' COMMENT '0 = unpublished, 1 = published',
  `view_status` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1=Read 2=Unread',
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `all_client` varchar(20) DEFAULT NULL,
  `attachment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applied_coupon`
--

CREATE TABLE `tbl_applied_coupon` (
  `id` int(11) NOT NULL,
  `coupon_id` int(11) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `coupon` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_assign_item`
--

CREATE TABLE `tbl_assign_item` (
  `assign_item_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `stock_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `assign_inventory` int(5) NOT NULL,
  `assign_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE `tbl_attendance` (
  `attendance_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `leave_application_id` int(11) DEFAULT 0,
  `date_in` date DEFAULT NULL,
  `date_out` date DEFAULT NULL,
  `attendance_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT 'status 0=absent 1=present 3 = onleave',
  `clocking_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`attendance_id`, `companies_id`, `user_id`, `leave_application_id`, `date_in`, `date_out`, `attendance_status`, `clocking_status`) VALUES
(1, NULL, 1, 0, '2020-09-08', '2020-09-08', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bug`
--

CREATE TABLE `tbl_bug` (
  `bug_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `opportunities_id` int(11) DEFAULT NULL,
  `task_id` int(11) NOT NULL DEFAULT 0,
  `bug_title` varchar(200) NOT NULL,
  `bug_description` text NOT NULL,
  `bug_status` varchar(30) DEFAULT NULL,
  `notes` text NOT NULL,
  `priority` varchar(10) NOT NULL,
  `reporter` int(11) DEFAULT NULL,
  `created_time` timestamp NULL DEFAULT NULL,
  `update_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `permission` text DEFAULT NULL,
  `client_visible` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_calls`
--

CREATE TABLE `tbl_calls` (
  `calls_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `leads_id` int(11) DEFAULT NULL,
  `opportunities_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `call_summary` varchar(200) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE `tbl_client` (
  `client_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `primary_contact` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `short_note` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipcode` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `currency` varchar(32) COLLATE utf8_unicode_ci DEFAULT 'USD',
  `skype_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `language` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vat` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hosting_company` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hostname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `port` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `client_status` tinyint(1) DEFAULT NULL COMMENT '1 = person and 2 = company',
  `profile_photo` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `leads_id` int(11) DEFAULT NULL,
  `latitude` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `longitude` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `customer_group_id` int(11) DEFAULT NULL,
  `active` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client_menu`
--

CREATE TABLE `tbl_client_menu` (
  `menu_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `label` varchar(20) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `icon` varchar(50) NOT NULL,
  `parent` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sort` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_client_menu`
--

INSERT INTO `tbl_client_menu` (`menu_id`, `companies_id`, `label`, `link`, `icon`, `parent`, `time`, `sort`, `status`) VALUES
(1, NULL, 'projects', 'client/projects', 'fa fa-folder-open-o', 0, '2017-04-19 22:18:26', 3, 0),
(2, NULL, 'bugs', 'client/bugs', 'fa fa-bug', 0, '2017-04-19 22:18:39', 4, 0),
(3, NULL, 'invoices', 'client/invoice/manage_invoice', 'fa fa-shopping-cart', 0, '2017-04-19 22:18:42', 5, 0),
(4, NULL, 'estimates', 'client/estimates', 'fa fa-tachometer', 0, '2017-04-19 22:18:45', 6, 0),
(5, NULL, 'payments', 'client/invoice/all_payments', 'fa fa-money', 0, '2017-04-19 22:18:48', 7, 0),
(6, NULL, 'tickets', 'client/tickets', 'fa fa-ticket', 0, '2017-06-12 12:11:21', 8, 0),
(7, NULL, 'quotations', 'client/quotations', 'fa fa-paste', 0, '2017-04-19 22:18:56', 9, 0),
(8, NULL, 'users', 'client/user/user_list', 'fa fa-users', 0, '2017-04-19 22:18:59', 10, 0),
(9, NULL, 'settings', 'client/settings', 'fa fa-cogs', 0, '2017-04-19 22:19:03', 11, 0),
(12, NULL, 'answered', 'client/tickets/answered', 'fa fa-circle-o', 6, '2017-04-19 22:12:34', 1, 0),
(17, NULL, 'dashboard', 'client/dashboard', 'icon-speedometer', 0, '2017-04-19 22:17:21', 1, 0),
(18, NULL, 'mailbox', 'client/mailbox', 'fa fa-envelope', 0, '2017-04-19 22:17:21', 2, 0),
(19, NULL, 'private_chat', 'chat/conversations', 'fa fa-envelope', 0, '2017-12-10 03:03:43', 12, 0),
(20, NULL, 'filemanager', 'client/filemanager', 'fa fa-file', 0, '2017-06-03 10:08:23', 2, 1),
(21, NULL, 'proposals', 'client/proposals', 'fa fa-leaf', 0, '2017-07-21 09:21:08', 7, 1),
(22, NULL, 'knowledgebase', 'knowledgebase', 'fa fa-question-circle', 0, '2017-11-09 09:04:12', 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client_role`
--

CREATE TABLE `tbl_client_role` (
  `client_role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clock`
--

CREATE TABLE `tbl_clock` (
  `clock_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `attendance_id` int(11) NOT NULL,
  `clockin_time` time DEFAULT NULL,
  `clockout_time` time DEFAULT NULL,
  `comments` text DEFAULT NULL,
  `clocking_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1= clockin_time',
  `ip_address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_clock`
--

INSERT INTO `tbl_clock` (`clock_id`, `companies_id`, `attendance_id`, `clockin_time`, `clockout_time`, `comments`, `clocking_status`, `ip_address`) VALUES
(1, NULL, 1, '03:06:59', '03:07:34', NULL, 0, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clock_history`
--

CREATE TABLE `tbl_clock_history` (
  `clock_history_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `clock_id` int(11) NOT NULL,
  `clockin_edit` time NOT NULL,
  `clockout_edit` time DEFAULT NULL,
  `reason` varchar(300) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=pending and 2 = accept  3= reject',
  `notify_me` tinyint(4) NOT NULL DEFAULT 1,
  `view_status` tinyint(4) NOT NULL DEFAULT 2,
  `request_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_companies`
--

CREATE TABLE `tbl_companies` (
  `companies_id` int(11) NOT NULL,
  `primary_contact` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `mobile` varchar(30) DEFAULT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(50) DEFAULT NULL,
  `zip_code` varchar(20) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `vat` varchar(50) DEFAULT NULL,
  `skype_id` varchar(50) DEFAULT NULL,
  `facebook` varchar(50) DEFAULT NULL,
  `twitter` varchar(50) DEFAULT NULL,
  `linkedin` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `banned` tinyint(1) DEFAULT NULL,
  `ban_reason` varchar(200) DEFAULT NULL,
  `logo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_config`
--

CREATE TABLE `tbl_config` (
  `companies_id` int(11) DEFAULT NULL,
  `config_key` varchar(235) DEFAULT NULL,
  `value` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_config`
--

INSERT INTO `tbl_config` (`companies_id`, `config_key`, `value`) VALUES
(NULL, '2checkout_private_key', 'CE6B7C6E-CDC4-404A-80D7-08F40CC0C65D'),
(NULL, '2checkout_publishable_key', 'D188F8DC-3B8A-408E-A479-15A54113C461'),
(NULL, '2checkout_seller_id', '901386312'),
(NULL, '2checkout_status', 'active'),
(NULL, 'absent_color', 'rgba(247,23,36,0.92)'),
(NULL, 'absent_on_calendar', 'on'),
(NULL, 'accounting_snapshot', '0'),
(NULL, 'active_background', '#1c7086'),
(NULL, 'active_color', '#c1c1c1'),
(NULL, 'active_cronjob', 'on'),
(NULL, 'active_custom_color', '0'),
(NULL, 'active_pre_loader', '1'),
(NULL, 'advance_salary', 'true'),
(NULL, 'advance_salary_email', NULL),
(NULL, 'allowed_files', 'gif|png|jpeg|jpg|pptx|pdf|doc|txt|docx|xlsx|csv|zip|rar|xls|mp4|ico|xls|xlsx'),
(NULL, 'allow_client_project', 'TRUE'),
(NULL, 'allow_client_registration', 'TRUE'),
(NULL, 'allow_customer_edit_amount', 'No'),
(NULL, 'allow_multiple_client_in_project', NULL),
(NULL, 'allow_sub_tasks', 'TRUE'),
(NULL, 'announcements_email', NULL),
(NULL, 'aside-collapsed', NULL),
(NULL, 'aside-float', NULL),
(NULL, 'attendance_report', '2'),
(NULL, 'authorize', 'login id'),
(NULL, 'authorize_status', 'active'),
(NULL, 'authorize_transaction_key', 'transfer key'),
(NULL, 'automatic_database_backup', 'on'),
(NULL, 'automatic_email_on_recur', 'TRUE'),
(NULL, 'auto_check_for_new_notifications', '0'),
(NULL, 'auto_close_ticket', '72'),
(NULL, 'award_email', NULL),
(NULL, 'bank_cash', '0'),
(NULL, 'bitcoin_address', '0'),
(NULL, 'bitcoin_status', 'active'),
(NULL, 'body_background', 'rgba(229,252,252,0.81)'),
(NULL, 'braintree_default_account', NULL),
(NULL, 'braintree_live_or_sandbox', 'TRUE'),
(NULL, 'braintree_merchant_id', '9m2qzhrptx7wyccy'),
(NULL, 'braintree_private_key', 'aa804bc269d4a9c8d8170ab8aed353b3'),
(NULL, 'braintree_public_key', '62grv2dnvfpg599v'),
(NULL, 'braintree_status', 'active'),
(NULL, 'bugs_color', '#1f3d1c'),
(NULL, 'bugs_on_calendar', 'on'),
(NULL, 'build', '0'),
(NULL, 'ccavenue_key', '201F5203749670E18D664192B594B74E'),
(NULL, 'ccavenue_merchant_id', '161761'),
(NULL, 'ccavenue_status', 'active'),
(NULL, 'client_default_menu', 'a:1:{s:19:\"client_default_menu\";a:13:{i:0;s:2:\"17\";i:1;s:2:\"22\";i:2;s:2:\"19\";i:3;s:1:\"7\";i:4;s:1:\"6\";i:5;s:1:\"5\";i:6;s:2:\"21\";i:7;s:1:\"4\";i:8;s:1:\"3\";i:9;s:1:\"2\";i:10;s:1:\"1\";i:11;s:2:\"18\";i:12;s:2:\"20\";}}'),
(NULL, 'company_address', 'House:10 Block KA,PC Culture Housing Society,Rizia Villa,Ring Road Shyamoli'),
(NULL, 'company_city', 'Dhaka'),
(NULL, 'company_country', 'Bangladesh'),
(NULL, 'company_domain', 'https://saas.codexcube.com/'),
(NULL, 'company_email', 'info@unique_coder.gmail.com'),
(NULL, 'company_legal_name', 'unique_coder'),
(NULL, 'company_logo', 'uploads/cron_logo_white.png'),
(NULL, 'company_name', 'unique_coder'),
(NULL, 'company_phone', '+8801723611125'),
(NULL, 'company_phone_2', ''),
(NULL, 'company_vat', 'TRN 100317977500003'),
(NULL, 'company_zip_code', '1207'),
(NULL, 'config_additional_flag', '/novalidate-cert'),
(NULL, 'config_host', 'imap.gmail.com'),
(NULL, 'config_imap', '0'),
(NULL, 'config_imap_or_pop', 'on'),
(NULL, 'config_mailbox', 'INBOX'),
(NULL, 'config_password', ''),
(NULL, 'config_pop3', '0'),
(NULL, 'config_port', '993'),
(NULL, 'config_ssl', 'on'),
(NULL, 'config_username', 'uniquecoder007@gmail.com'),
(NULL, 'contact_person', 'unique_coder'),
(NULL, 'contract_expiration_reminder', ''),
(NULL, 'copyright_name', 'CODEXCUBE.COM'),
(NULL, 'copyright_url', 'https://codexcube.com/'),
(NULL, 'country', '0'),
(NULL, 'cron_key', '34WI2L12L87I1A65M90M9A42N41D08A26I'),
(NULL, 'currency_position', '1'),
(NULL, 'date_format', '%m.%d.%Y'),
(NULL, 'date_php_format', 'Y.m.d'),
(NULL, 'date_picker_format', 'yyyy.mm.dd'),
(NULL, 'decimal_separator', ''),
(NULL, 'default_account', '1'),
(NULL, 'default_currency', 'USD'),
(NULL, 'default_currency_symbol', '$'),
(NULL, 'default_department', '0'),
(NULL, 'default_language', 'english'),
(NULL, 'default_leads_source', '0'),
(NULL, 'default_lead_permission', 'all'),
(NULL, 'default_lead_status', '0'),
(NULL, 'default_priority', 'low'),
(NULL, 'default_status', 'closed'),
(NULL, 'default_tax', 'N;'),
(NULL, 'default_terms', 'Thank you for <span xss=\"removed\">your</span> busasiness. Please process this invoice within the due date.'),
(NULL, 'delete_mail_after_import', NULL),
(NULL, 'demo_mode', 'FALSE'),
(NULL, 'desktop_notifications', '1'),
(NULL, 'developer', 'ig63Yd/+yuA8127gEyTz9TY4pnoeKq8dtocVP44+BJvtlRp8Vqcetwjk51dhSB6Rx8aVIKOPfUmNyKGWK7C/gg=='),
(NULL, 'display_estimate_badge', '0'),
(NULL, 'display_invoice_badge', 'FALSE'),
(NULL, 'email_account_details', 'TRUE'),
(NULL, 'email_estimate_message', 'Hi {CLIENT}<br>Thanks for your business inquiry. <br>The estimate EST {REF} is attached with this email. <br>Estimate Overview:<br>Estimate # : EST {REF}<br>Amount: {CURRENCY} {AMOUNT}<br> You can view the estimate online at:<br>{LINK}<br>Best Regards,<br>{COMPANY}'),
(NULL, 'email_invoice_message', 'Hello {CLIENT}<br>Here is the invoice of {CURRENCY} {AMOUNT}<br>You can view the invoice online at:<br>{LINK}<br>Best Regards,<br>{COMPANY}'),
(NULL, 'email_staff_tickets', 'TRUE'),
(NULL, 'enable_languages', 'TRUE'),
(NULL, 'estimate_color', 'rgba(160,29,171,1)'),
(NULL, 'estimate_footer', '<span style=\"font-weight: bold; line-height: 21.4px; text-align: right;\">Estimate&nbsp;</span>was created on a computer and is valid without the signature and seal'),
(NULL, 'estimate_language', 'en'),
(NULL, 'estimate_on_calendar', 'on'),
(NULL, 'estimate_prefix', 'EST'),
(NULL, 'estimate_start_no', '1'),
(NULL, 'estimate_state', 'block'),
(NULL, 'estimate_terms', 'Hey Looking forward to doing business with you.'),
(NULL, 'expense_email', NULL),
(NULL, 'favicon', 'uploads/codexcube-logo.png'),
(NULL, 'file_max_size', '80000'),
(NULL, 'for_invoice', '0'),
(NULL, 'for_leads', NULL),
(NULL, 'for_tickets', NULL),
(NULL, 'gcal_api_key', 'AIzaSyBXcmmcboEyAgtoUtXjKXe4TfpsnEtoUDQ'),
(NULL, 'gcal_id', 'kla83orf1u7hrj6p0u5gdmpji4@group.calendar.google.com'),
(NULL, 'goal_tracking_color', '#537015'),
(NULL, 'goal_tracking_on_calendar', 'on'),
(NULL, 'google_api_key', ''),
(NULL, 'gst_state', 'AN'),
(NULL, 'holiday_on_calendar', 'on'),
(NULL, 'imap_search', '0'),
(NULL, 'imap_search_for_leads', 'Leads'),
(NULL, 'imap_search_for_tickets', 'Ti'),
(NULL, 'increment_estimate_number', 'TRUE'),
(NULL, 'increment_invoice_number', 'TRUE'),
(NULL, 'increment_proposal_number', 'TRUE'),
(NULL, 'installed', 'TRUE'),
(NULL, 'invoices_due_after', '5'),
(NULL, 'invoice_color', '#53b567'),
(NULL, 'invoice_footer', 'Invoice was created on a computer and is valid without the signature and seal'),
(NULL, 'invoice_language', 'en'),
(NULL, 'invoice_logo', 'uploads/logo_tranparent.png'),
(NULL, 'invoice_on_calendar', 'on'),
(NULL, 'invoice_prefix', 'INV'),
(NULL, 'invoice_start_no', '1'),
(NULL, 'invoice_state', 'block'),
(NULL, 'invoice_view', '1'),
(NULL, 'job_circular_email', NULL),
(NULL, 'language', 'english'),
(NULL, 'languages', 'spanish'),
(NULL, 'last_autobackup', '1543485234'),
(NULL, 'last_check', '1436363002'),
(NULL, 'last_cronjob_run', '1543487517'),
(NULL, 'last_postmaster_run', '1461786636'),
(NULL, 'last_seen_activities', '0'),
(NULL, 'layout-boxed', NULL),
(NULL, 'layout-fixed', 'layout-fixed'),
(NULL, 'leads_keyword', 'New Leads'),
(NULL, 'leave_email', NULL),
(NULL, 'locale', 'en_US'),
(NULL, 'login_background', 'uploads/p3.jpg'),
(NULL, 'login_bg', 'bg-login.jpg'),
(NULL, 'login_position', 'left'),
(NULL, 'logofile', '0'),
(NULL, 'logo_or_icon', 'logo_title'),
(NULL, 'mark_attendance_from_login', 'Yes'),
(NULL, 'max_file_size', '100'),
(NULL, 'milestone_color', '#a86495'),
(NULL, 'milestone_on_calendar', 'on'),
(NULL, 'mollie_api_key', 'test_tkjFqFF6fP92FDSwBDHpeCzBRMBQBD'),
(NULL, 'mollie_partner_id', '3106644'),
(NULL, 'mollie_status', 'active'),
(NULL, 'money_format', '3'),
(NULL, 'navbar_logo_background', 'rgba(104,155,162,0.95)'),
(NULL, 'notified_user', '[\"1\"]'),
(NULL, 'notify_bug_assignment', 'TRUE'),
(NULL, 'notify_bug_comments', 'TRUE'),
(NULL, 'notify_bug_status', 'TRUE'),
(NULL, 'notify_message_received', 'TRUE'),
(NULL, 'notify_project_assignments', 'TRUE'),
(NULL, 'notify_project_comments', 'TRUE'),
(NULL, 'notify_project_files', 'TRUE'),
(NULL, 'notify_task_assignments', 'TRUE'),
(NULL, 'office_hours', '8'),
(NULL, 'office_time', 'same_time'),
(NULL, 'on_leave_color', '#bd1a10'),
(NULL, 'on_leave_on_calendar', 'on'),
(NULL, 'opportunities_color', '#349685'),
(NULL, 'opportunities_on_calendar', 'on'),
(NULL, 'overtime_email', NULL),
(NULL, 'payments_color', '#7f21c9'),
(NULL, 'payments_on_calendar', 'on'),
(NULL, 'paypal_cancel_url', 'paypal/cancel'),
(NULL, 'paypal_email', 'billing@coderitems.com'),
(NULL, 'paypal_ipn_url', 'paypal/t_ipn/ipn'),
(NULL, 'paypal_live', 'FALSE'),
(NULL, 'paypal_status', 'active'),
(NULL, 'paypal_success_url', 'paypal/success'),
(NULL, 'payslip_email', NULL),
(NULL, 'payumoney_enable_test_mode', 'TRUE'),
(NULL, 'payumoney_key', 'etzFvcmV'),
(NULL, 'payumoney_salt', 'Q3AbuWZ05e'),
(NULL, 'payumoney_status', 'active'),
(NULL, 'pdf_engine', 'invoicr'),
(NULL, 'performance_email', '1'),
(NULL, 'postmark_api_key', ''),
(NULL, 'postmark_from_address', ''),
(NULL, 'project_color', '#e61755'),
(NULL, 'project_details_view', '1'),
(NULL, 'project_on_calendar', 'on'),
(NULL, 'project_prefix', 'PRO'),
(NULL, 'proposal_footer', '<span style=\"font-weight: 700; text-align: right;\">This Proposal&nbsp;</span>was created on a computer and is valid without the signature and seal'),
(NULL, 'proposal_prefix', 'PRO-'),
(NULL, 'proposal_start_no', '1'),
(NULL, 'proposal_terms', 'Hey Looking forward to doing business with you.'),
(NULL, 'protocol', 'mail'),
(NULL, 'purchase_code', ''),
(NULL, 'pusher_app_id', '401479'),
(NULL, 'pusher_app_key', '4cf88668659dc9c987c3'),
(NULL, 'pusher_app_secret', '6fce183b214d17c20dd5'),
(NULL, 'pusher_cluster', 'ap2'),
(NULL, 'qty_calculation_from_items', 'Yes'),
(NULL, 'realtime_notification', '1'),
(NULL, 'recaptcha_secret_key', ''),
(NULL, 'recaptcha_site_key', ''),
(NULL, 'recurring_invoice', '0'),
(NULL, 'reminder_message', 'Hello {CLIENT}<br>This is a friendly reminder to pay your invoice of {CURRENCY} {AMOUNT}<br>You can view the invoice online at:<br>{LINK}<br>Best Regards,<br>{COMPANY}'),
(NULL, 'reset_key', '34WI2L12L87I1A65M90M9A42N41D08A26I'),
(NULL, 'rows_per_table', '25'),
(NULL, 'RTL', '0'),
(NULL, 'security_token', '5027133599'),
(NULL, 'send_email_when_recur', 'TRUE'),
(NULL, 'settings', 'theme'),
(NULL, 'show_estimate_tax', 'TRUE'),
(NULL, 'show_invoice_tax', 'TRUE'),
(NULL, 'show_item_tax', '0'),
(NULL, 'show_login_image', 'TRUE'),
(NULL, 'show_only_logo', 'FALSE'),
(NULL, 'show_proposal_tax', 'TRUE'),
(NULL, 'sidebar_active_background', '#0f778e'),
(NULL, 'sidebar_active_color', '#b3b8cb'),
(NULL, 'sidebar_background', 'rgba(2,53,60,0.95)'),
(NULL, 'sidebar_color', '#fffafa'),
(NULL, 'sidebar_theme', 'bg-info'),
(NULL, 'site_appleicon', 'logo.png'),
(NULL, 'site_author', 'William M.'),
(NULL, 'site_desc', 'Ultimate Project Manager CRM Pro is a Web based PHP application for Freelancers - buy it on Codecanyon'),
(NULL, 'site_favicon', 'logo.png'),
(NULL, 'site_icon', 'fa-flask'),
(NULL, 'smtp_encryption', 'ssl'),
(NULL, 'smtp_host', 'smtp.gmail.com'),
(NULL, 'smtp_pass', '966eaee5dbf21525c39876eff6bf92f07b785b0595b576060ffdb65c783b29c930c6ff9463cb4a8324612892cae4f88759facdbc7b486602c217b69c615099ad44ZYa8dKjQA7LFjZm8XUxf4w3Il8vezIiDUE1ux+tiQ='),
(NULL, 'smtp_port', '465'),
(NULL, 'smtp_user', 'uniquecoder007@gmail.com'),
(NULL, 'stripe_private_key', 'sk_test_g7PUZTcwwFnxdlHrWSOicHfu'),
(NULL, 'stripe_public_key', 'pk_test_x9as1c9jBDpODI7IbC7D0MEB'),
(NULL, 'stripe_status', 'active'),
(NULL, 'submenu_open_background', '#227f85'),
(NULL, 'system_font', 'roboto_condensed'),
(NULL, 'tables_pagination_limit', '20'),
(NULL, 'tasks_color', '#0239c7'),
(NULL, 'tasks_on_calendar', 'on'),
(NULL, 'task_details_view', '2'),
(NULL, 'thousand_separator', ','),
(NULL, 'tickets_keyword', '0'),
(NULL, 'timezone', 'Asia/Yakutsk'),
(NULL, 'time_format', 'g:i a'),
(NULL, 'top_bar_background', '#1f9494'),
(NULL, 'top_bar_color', '#d9d9d9'),
(NULL, 'training_email', NULL),
(NULL, 'use_gravatar', 'TRUE'),
(NULL, 'use_postmark', 'FALSE'),
(NULL, 'valid_license', 'TRUE'),
(NULL, 'version', '1.1.1'),
(NULL, 'webmaster_email', 'support@example.com'),
(NULL, 'website_name', 'unique_coder'),
(NULL, 'office_address', '403# Maze Tower Sheikd Zayed Road, Dubai, UAE'),
(NULL, 'office_contact_no', '+971 4 355 5581 '),
(NULL, 'office_email', 'info@easyappx.com'),
(NULL, 'office_facebook', 'easyappx'),
(NULL, 'office_google_plus', 'easyappx'),
(NULL, 'office_twitter', 'easyappx'),
(NULL, 'office_linkedin', 'easyappx'),
(NULL, 'encryption', 'ssl'),
(NULL, 'unread_email', NULL),
(NULL, 'fully_management_system', 'uploads/tooopen_sy_171640582455.jpg'),
(NULL, 'happy_clients', '252'),
(NULL, 'awards_win', '86'),
(NULL, 'finished_work', '225'),
(NULL, 'team_members', '60'),
(NULL, 'saas_server', 'local'),
(NULL, 'saas_cpanel_password', 'd4b89858b8a7427831c5771e9cc72555d5e9745fb5f80670967eb5be40526917aaa37b09c17868ef0c33e0b3ae1700ff00fbed7db7a4252bbde12ab4c97bd02bQ7EvDEKZXyDTb79nKbCoV2e4HAsbWA7LTIvIUxYgA/8='),
(NULL, 'saas_cpanel_host', 'localhost'),
(NULL, 'saas_cpanel_port', '2083'),
(NULL, 'saas_cpanel_username', 'cp1057134p03'),
(NULL, 'two_checkout_live ', 'FALSE'),
(NULL, 'aim_api_login_id', '7F6eJh7uFyD'),
(NULL, 'aim_authorize_transaction_key', '64uhZ93mqH6c3MWf'),
(NULL, 'aim_authorize_status', 'active'),
(NULL, 'aim_authorize_live ', 'FALSE'),
(NULL, 'ccavenue_access_code', 'AVEB75FA40AM89BEMA'),
(NULL, 'ccavenue_enable_test_mode', 'TRUE'),
(NULL, 'deposit_email', '1'),
(NULL, 'purchase_prefix', 'PUR-18001'),
(NULL, 'purchase_start_no', '1'),
(NULL, 'show_purchase_tax', 'TRUE'),
(NULL, 'increment_purchase_number', 'TRUE'),
(NULL, 'purchase_terms', 'Hey Looking forward to doing business with you.'),
(NULL, 'purchase_footer', '<span xss=\"removed\">ThisÃ‚Â </span><span xss=\"removed\">PurchaseÃ‚Â </span>was created on a computer and is valid without the signature and seal'),
(NULL, 'saas_cpanel_output', 'json'),
(NULL, 'privacy', '<span style=\"font-size: 16px; caret-color: rgb(34, 34, 34); color: rgb(34, 34, 34); font-family: arial, sans-serif;\">A&nbsp;</span><b style=\"font-size: 16px; caret-color: rgb(34, 34, 34); color: rgb(34, 34, 34); font-family: arial, sans-serif;\">privacy policy</b><span style=\"font-size: 16px; caret-color: rgb(34, 34, 34); color: rgb(34, 34, 34); font-family: arial, sans-serif;\">&nbsp;is a statement or a legal document (in&nbsp;</span><b style=\"font-size: 16px; caret-color: rgb(34, 34, 34); color: rgb(34, 34, 34); font-family: arial, sans-serif;\">privacy</b><span style=\"font-size: 16px; caret-color: rgb(34, 34, 34); color: rgb(34, 34, 34); font-family: arial, sans-serif;\">&nbsp;law) that discloses some or all of the ways a party gathers, uses, discloses, and manages a customer or client\'s data. It fulfills a legal requirement to protect a customer or client\'s&nbsp;</span><b style=\"font-size: 16px; caret-color: rgb(34, 34, 34); color: rgb(34, 34, 34); font-family: arial, sans-serif;\">privacy</b><span style=\"font-size: 16px; caret-color: rgb(34, 34, 34); color: rgb(34, 34, 34); font-family: arial, sans-serif;\">.</span>'),
(NULL, 'paypal_api_username', 'abc.gmail.com'),
(NULL, 'api_signature', 'ASyS9flVHpw.TVh9qeZ5ZvDRSbV4AR3W82KYi0ak8rHt4rsmMgRH1DkJ'),
(NULL, 'paypal_api_password', 'bkg4VG9ZeTk2NGduR1RMTUx4aVhVckJCS2xGd2NkMVVJMnFvTmhCaFp2Zz0=');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contract_type`
--

CREATE TABLE `tbl_contract_type` (
  `contract_type_id` int(11) NOT NULL,
  `contract_type` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `description` varchar(500) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_countries`
--

CREATE TABLE `tbl_countries` (
  `id` int(6) NOT NULL,
  `value` varchar(250) CHARACTER SET latin1 NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_countries`
--

INSERT INTO `tbl_countries` (`id`, `value`) VALUES
(1, 'Afghanistan'),
(2, 'Aringland Islands'),
(3, 'Albania'),
(4, 'Algeria'),
(5, 'American Samoa'),
(6, 'Andorra'),
(7, 'Angola'),
(8, 'Anguilla'),
(9, 'Antarctica'),
(10, 'Antigua and Barbuda'),
(11, 'Argentina'),
(12, 'Armenia'),
(13, 'Aruba'),
(14, 'Australia'),
(15, 'Austria'),
(16, 'Azerbaijan'),
(17, 'Bahamas'),
(18, 'Bahrain'),
(19, 'Bangladesh'),
(20, 'Barbados'),
(21, 'Belarus'),
(22, 'Belgium'),
(23, 'Belize'),
(24, 'Benin'),
(25, 'Bermuda'),
(26, 'Bhutan'),
(27, 'Bolivia'),
(28, 'Bosnia and Herzegovina'),
(29, 'Botswana'),
(30, 'Bouvet Island'),
(31, 'Brazil'),
(32, 'British Indian Ocean territory'),
(33, 'Brunei Darussalam'),
(34, 'Bulgaria'),
(35, 'Burkina Faso'),
(36, 'Burundi'),
(37, 'Cambodia'),
(38, 'Cameroon'),
(39, 'Canada'),
(40, 'Cape Verde'),
(41, 'Cayman Islands'),
(42, 'Central African Republic'),
(43, 'Chad'),
(44, 'Chile'),
(45, 'China'),
(46, 'Christmas Island'),
(47, 'Cocos (Keeling) Islands'),
(48, 'Colombia'),
(49, 'Comoros'),
(50, 'Congo'),
(51, 'Congo'),
(52, ' Democratic Republic'),
(53, 'Cook Islands'),
(54, 'Costa Rica'),
(55, 'Ivory Coast (Ivory Coast)'),
(56, 'Croatia (Hrvatska)'),
(57, 'Cuba'),
(58, 'Cyprus'),
(59, 'Czech Republic'),
(60, 'Denmark'),
(61, 'Djibouti'),
(62, 'Dominica'),
(63, 'Dominican Republic'),
(64, 'East Timor'),
(65, 'Ecuador'),
(66, 'Egypt'),
(67, 'El Salvador'),
(68, 'Equatorial Guinea'),
(69, 'Eritrea'),
(70, 'Estonia'),
(71, 'Ethiopia'),
(72, 'Falkland Islands'),
(73, 'Faroe Islands'),
(74, 'Fiji'),
(75, 'Finland'),
(76, 'France'),
(77, 'French Guiana'),
(78, 'French Polynesia'),
(79, 'French Southern Territories'),
(80, 'Gabon'),
(81, 'Gambia'),
(82, 'Georgia'),
(83, 'Germany'),
(84, 'Ghana'),
(85, 'Gibraltar'),
(86, 'Greece'),
(87, 'Greenland'),
(88, 'Grenada'),
(89, 'Guadeloupe'),
(90, 'Guam'),
(91, 'Guatemala'),
(92, 'Guinea'),
(93, 'Guinea-Bissau'),
(94, 'Guyana'),
(95, 'Haiti'),
(96, 'Heard and McDonald Islands'),
(97, 'Honduras'),
(98, 'Hong Kong'),
(99, 'Hungary'),
(100, 'Iceland'),
(101, 'India'),
(102, 'Indonesia'),
(103, 'Iran'),
(104, 'Iraq'),
(105, 'Ireland'),
(106, 'Israel'),
(107, 'Italy'),
(108, 'Jamaica'),
(109, 'Japan'),
(110, 'Jordan'),
(111, 'Kazakhstan'),
(112, 'Kenya'),
(113, 'Kiribati'),
(114, 'Korea (north)'),
(115, 'Korea (south)'),
(116, 'Kuwait'),
(117, 'Kyrgyzstan'),
(118, 'Lao People\'s Democratic Republic'),
(119, 'Latvia'),
(120, 'Lebanon'),
(121, 'Lesotho'),
(122, 'Liberia'),
(123, 'Libyan Arab Jamahiriya'),
(124, 'Liechtenstein'),
(125, 'Lithuania'),
(126, 'Luxembourg'),
(127, 'Macao'),
(128, 'Macedonia'),
(129, 'Madagascar'),
(130, 'Malawi'),
(131, 'Malaysia'),
(132, 'Maldives'),
(133, 'Mali'),
(134, 'Malta'),
(135, 'Marshall Islands'),
(136, 'Martinique'),
(137, 'Mauritania'),
(138, 'Mauritius'),
(139, 'Mayotte'),
(140, 'Mexico'),
(141, 'Micronesia'),
(142, 'Moldova'),
(143, 'Monaco'),
(144, 'Mongolia'),
(145, 'Montserrat'),
(146, 'Morocco'),
(147, 'Mozambique'),
(148, 'Myanmar'),
(149, 'Namibia'),
(150, 'Nauru'),
(151, 'Nepal'),
(152, 'Netherlands'),
(153, 'Netherlands Antilles'),
(154, 'New Caledonia'),
(155, 'New Zealand'),
(156, 'Nicaragua'),
(157, 'Niger'),
(158, 'Nigeria'),
(159, 'Niue'),
(160, 'Norfolk Island'),
(161, 'Northern Mariana Islands'),
(162, 'Norway'),
(163, 'Oman'),
(164, 'Pakistan'),
(165, 'Palau'),
(166, 'Palestinian Territories'),
(167, 'Panama'),
(168, 'Papua New Guinea'),
(169, 'Paraguay'),
(170, 'Peru'),
(171, 'Philippines'),
(172, 'Pitcairn'),
(173, 'Poland'),
(174, 'Portugal'),
(175, 'Puerto Rico'),
(176, 'Qatar'),
(177, 'Runion'),
(178, 'Romania'),
(179, 'Russian Federation'),
(180, 'Rwanda'),
(181, 'Saint Helena'),
(182, 'Saint Kitts and Nevis'),
(183, 'Saint Lucia'),
(184, 'Saint Pierre and Miquelon'),
(185, 'Saint Vincent and the Grenadines'),
(186, 'Samoa'),
(187, 'San Marino'),
(188, 'Sao Tome and Principe'),
(189, 'Saudi Arabia'),
(190, 'Senegal'),
(191, 'Serbia and Montenegro'),
(192, 'Seychelles'),
(193, 'Sierra Leone'),
(194, 'Singapore'),
(195, 'Slovakia'),
(196, 'Slovenia'),
(197, 'Solomon Islands'),
(198, 'Somalia'),
(199, 'South Africa'),
(200, 'South Georgia and the South Sandwich Islands'),
(201, 'Spain'),
(202, 'Sri Lanka'),
(203, 'Sudan'),
(204, 'Suriname'),
(205, 'Svalbard and Jan Mayen Islands'),
(206, 'Swaziland'),
(207, 'Sweden'),
(208, 'Switzerland'),
(209, 'Syria'),
(210, 'Taiwan'),
(211, 'Tajikistan'),
(212, 'Tanzania'),
(213, 'Thailand'),
(214, 'Togo'),
(215, 'Tokelau'),
(216, 'Tonga'),
(217, 'Trinidad and Tobago'),
(218, 'Tunisia'),
(219, 'Turkey'),
(220, 'Turkmenistan'),
(221, 'Turks and Caicos Islands'),
(222, 'Tuvalu'),
(223, 'Uganda'),
(224, 'Ukraine'),
(225, 'United Arab Emirates'),
(226, 'United Kingdom'),
(227, 'United States of America'),
(228, 'Uruguay'),
(229, 'Uzbekistan'),
(230, 'Vanuatu'),
(231, 'Vatican City'),
(232, 'Venezuela'),
(233, 'Vietnam'),
(234, 'Virgin Islands (British)'),
(235, 'Virgin Islands (US)'),
(236, 'Wallis and Futuna Islands'),
(237, 'Western Sahara'),
(238, 'Yemen'),
(239, 'Zaire'),
(240, 'Zambia'),
(241, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_currencies`
--

CREATE TABLE `tbl_currencies` (
  `code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `symbol` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `xrate` decimal(12,5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_currencies`
--

INSERT INTO `tbl_currencies` (`code`, `name`, `symbol`, `xrate`) VALUES
('AED', 'Dirhams', 'AED', NULL),
('AUD', 'Australian Dollar', '$', NULL),
('BAN', 'Bangladesh', 'BDT', NULL),
('BRL', 'Brazilian Real', 'R$', NULL),
('CAD', 'Canadian Dollar', '$', NULL),
('CHF', 'Swiss Franc', 'Fr', NULL),
('CLP', 'Chilean Peso', '$', NULL),
('CNY', 'Chinese Yuan', '¥', NULL),
('CZK', 'Czech Koruna', 'K', NULL),
('DKK', 'Danish Krone', 'kr', NULL),
('EUR', 'Euro', '€', NULL),
('GBP', 'British Pound', '?', NULL),
('HKD', 'Hong Kong Dollar', '$', NULL),
('HUF', 'Hungarian Forint', 'Ft', NULL),
('IDR', 'Indonesian Rupiah', 'Rp', NULL),
('ILS', 'Israeli New Shekel', '?', NULL),
('INR', 'Indian Rupee', 'INR', NULL),
('JPY', 'Japanese Yen', '?', NULL),
('KRW', 'Korean Won', '?', NULL),
('MXN', 'Mexican Peso', '$', NULL),
('MYR', 'Malaysian Ringgit', 'RM', NULL),
('NOK', 'Norwegian Krone', 'kr', NULL),
('NZD', 'New Zealand Dollar', '$', NULL),
('PHP', 'Philippine Peso', '?', NULL),
('PKR', 'Pakistan Rupee', '?', NULL),
('PLN', 'Polish Zloty', 'zl', NULL),
('RUB', 'Russian Ruble', '?', NULL),
('SEK', 'Swedish Krona', 'kr', NULL),
('SGD', 'Singapore Dollar', '$', NULL),
('THB', 'Thai Baht', '?', NULL),
('TRY', 'Turkish Lira', '?', NULL),
('TWD', 'Taiwan Dollar', '$', NULL),
('USD', 'US Dollar', '$', '1.00000'),
('VEF', 'Bol?var Fuerte', 'Bs.', NULL),
('ZAR', 'South African Rand', 'R', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_currencywise_price`
--

CREATE TABLE `tbl_currencywise_price` (
  `currencywise_price_id` int(11) NOT NULL,
  `frontend_pricing_id` int(11) NOT NULL,
  `currency` varchar(52) DEFAULT NULL,
  `monthly` varchar(52) DEFAULT NULL,
  `yearly` varchar(52) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_group`
--

CREATE TABLE `tbl_customer_group` (
  `customer_group_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL COMMENT 'customer group,item group',
  `customer_group` varchar(200) NOT NULL,
  `description` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_ratings`
--

CREATE TABLE `tbl_customer_ratings` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `position` varchar(200) NOT NULL,
  `ratings` varchar(20) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_custom_field`
--

CREATE TABLE `tbl_custom_field` (
  `custom_field_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `form_id` int(11) DEFAULT NULL,
  `field_label` varchar(100) NOT NULL,
  `default_value` text DEFAULT NULL,
  `help_text` varchar(200) NOT NULL,
  `field_type` enum('text','textarea','dropdown','date','checkbox','numeric','url','email') NOT NULL,
  `required` varchar(5) NOT NULL DEFAULT 'false',
  `status` enum('active','deactive') NOT NULL DEFAULT 'deactive',
  `show_on_table` varchar(5) DEFAULT NULL,
  `visible_for_admin` varchar(5) DEFAULT NULL,
  `show_on_details` varchar(5) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_damage_product`
--

CREATE TABLE `tbl_damage_product` (
  `damage_product_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `saved_items_id` int(11) NOT NULL,
  `damage_quantity` int(1) NOT NULL,
  `decrease_from_stock` enum('Yes','No') NOT NULL,
  `notes` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dashboard`
--

CREATE TABLE `tbl_dashboard` (
  `id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `col` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `order_no` int(2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `report` tinyint(1) NOT NULL DEFAULT 0,
  `for_staff` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_dashboard`
--

INSERT INTO `tbl_dashboard` (`id`, `companies_id`, `name`, `col`, `order_no`, `status`, `report`, `for_staff`) VALUES
(5, NULL, 'goal_report', 'col-md-6 ', 48, 1, 0, 1),
(6, NULL, 'overdue_report', 'col-md-12', 45, 1, 0, 1),
(11, NULL, 'my_project', 'col-md-6', 44, 1, 0, 1),
(12, NULL, 'my_tasks', 'col-md-6', 41, 1, 0, 1),
(14, NULL, 'announcements', 'col-md-6', 38, 1, 0, 1),
(15, NULL, 'payments_report', 'col-md-6', 35, 1, 0, 1),
(16, NULL, 'income_expense', 'col-md-6', 32, 1, 0, 1),
(17, NULL, 'income_report', 'col-md-6', 29, 1, 0, 1),
(18, NULL, 'expense_report', 'col-md-6', 26, 1, 0, 1),
(19, NULL, 'recently_paid_invoices', 'col-md-6', 23, 1, 0, 1),
(20, NULL, 'recent_activities', 'col-md-6', 20, 1, 0, 1),
(21, NULL, 'finance_overview', 'col-md-12', 15, 1, 0, 1),
(22, NULL, 'todo_list', 'col-md-6', 9, 1, 0, 1),
(23, NULL, 'paid_amount', 'col-md-3', 2, 1, 2, 1),
(24, NULL, 'due_amount', 'col-md-3', 4, 1, 2, 1),
(25, NULL, 'invoice_amount', 'col-md-3', 1, 1, 2, 1),
(26, NULL, 'paid_percentage', 'col-md-3', 3, 1, 2, 1),
(29, NULL, 'recent_invoice', 'col-sm-6', 3, 1, 3, 1),
(30, NULL, 'recent_projects', 'col-sm-6', 4, 1, 3, 1),
(31, NULL, 'recent_emails', 'col-sm-4', 5, 1, 3, 1),
(34, NULL, 'my_calendar', 'col-md-6', 6, 1, 0, 1),
(91, NULL, 'income_expenses_report', 'col-sm-4', 3, 1, 1, 1),
(92, NULL, 'invoice_payment_report', 'col-sm-4', 1, 1, 1, 1),
(93, NULL, 'ticket_tasks_report', 'col-sm-4', 2, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_days`
--

CREATE TABLE `tbl_days` (
  `day_id` int(5) NOT NULL,
  `day` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_days`
--

INSERT INTO `tbl_days` (`day_id`, `day`) VALUES
(1, 'Saturday'),
(2, 'Sunday'),
(3, 'Monday'),
(4, 'Tuesday'),
(5, 'Wednesday'),
(6, 'Thursday'),
(7, 'Friday');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_departments`
--

CREATE TABLE `tbl_departments` (
  `departments_id` int(10) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `deptname` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `department_head_id` int(11) DEFAULT NULL COMMENT 'department_head_id == user_id'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_designations`
--

CREATE TABLE `tbl_designations` (
  `designations_id` int(5) NOT NULL,
  `departments_id` int(11) NOT NULL,
  `designations` varchar(100) NOT NULL,
  `permission` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_discipline`
--

CREATE TABLE `tbl_discipline` (
  `discipline_id` int(5) NOT NULL,
  `user_id` int(11) NOT NULL,
  `offence_id` int(5) NOT NULL,
  `penalty_id` int(5) NOT NULL,
  `discipline_break_date` varchar(100) NOT NULL,
  `discipline_action_date` varchar(100) NOT NULL,
  `discipline_remarks` varchar(200) NOT NULL,
  `discipline_comments` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_draft`
--

CREATE TABLE `tbl_draft` (
  `draft_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `to` text NOT NULL,
  `subject` varchar(300) NOT NULL,
  `message_body` text NOT NULL,
  `attach_file` varchar(200) DEFAULT NULL,
  `attach_file_path` text DEFAULT NULL,
  `attach_filename` text DEFAULT NULL,
  `message_time` datetime NOT NULL,
  `deleted` enum('Yes','No') NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_email_templates`
--

CREATE TABLE `tbl_email_templates` (
  `email_templates_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `email_group` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `template_body` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_email_templates`
--

INSERT INTO `tbl_email_templates` (`email_templates_id`, `companies_id`, `email_group`, `subject`, `template_body`) VALUES
(1, NULL, 'registration', 'Registration successful', '<div style=\"height: 7px; background-color: #535353;\"></div><div style=\"background-color:#E8E8E8; margin:0px; padding:55px 20px 40px 20px; font-family:Open Sans, Helvetica, sans-serif; font-size:12px; color:#535353;\"><div style=\"text-align:center; font-size:24px; font-weight:bold; color:#535353;\">Welcome to {SITE_NAME}</div><div style=\"border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;\">Thanks for joining {SITE_NAME}. We listed your sign in details below, make sure you keep them safe.<br>To open your {SITE_NAME} homepage, please follow this link:<br><big><b><a href=\"{SITE_URL}\">{SITE_NAME} Account!</a></b></big><br>Link doesn\'t work? Copy the following link to your browser address bar:<br><a href=\"{SITE_URL}\">{SITE_URL}</a><br>Your username: {USERNAME}<br>Your email address: {EMAIL}<br>Your password: {PASSWORD}<br>Have fun!<br>The {SITE_NAME} Team.<br><br></div></div>'),
(2, NULL, 'forgot_password', 'Forgot Password', '        <div style=\"height: 7px; background-color: #535353;\"></div><div style=\"background-color:#E8E8E8; margin:0px; padding:55px 20px 40px 20px; font-family:Open Sans, Helvetica, sans-serif; font-size:12px; color:#535353;\"><div style=\"text-align:center; font-size:24px; font-weight:bold; color:#535353;\">New Password</div><div style=\"border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;\">Forgot your password, huh? No big deal.<br>To create a new password, just follow this link:<br><br><big><b><a href=\"{PASS_KEY_URL}\">Create a new password</a></b></big><br>Link doesn\'t work? Copy the following link to your browser address bar:<br><a href=\"{PASS_KEY_URL}\">{PASS_KEY_URL}</a><br><br><br>You received this email, because it was requested by a <a href=\"{SITE_URL}\">{SITE_NAME}</a> user. <p></p><p>This is part of the procedure to create a new password on the system. If you DID NOT request a new password then please ignore this email and your password will remain the same.</p><br>Thank you,<br>The {SITE_NAME} Team</div></div>'),
(3, NULL, 'change_email', 'Change Email', '<div style=\"height: 7px; background-color: #535353;\"></div>\r\n<div style=\"background-color:#E8E8E8; margin:0px; padding:55px 20px 40px 20px; font-family:Open Sans, Helvetica, sans-serif; font-size:12px; color:#535353;\"><div style=\"text-align:center; font-size:24px; font-weight:bold; color:#535353;\">New email address on {SITE_NAME}</div>\r\n\r\n<div style=\"border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;\">You have changed your email address for {SITE_NAME}.<br>Follow this link to confirm your new email address:<br><big><b><a href=\"{NEW_EMAIL_KEY_URL}\">Confirm your new email</a></b></big><br>Link doesn\'t work? Copy the following link to your browser address bar:<br><a href=\"{NEW_EMAIL_KEY_URL}\">{NEW_EMAIL_KEY_URL}</a><br><br>Your email address: {NEW_EMAIL}<br><br>You received this email, because it was requested by a <a href=\"{SITE_URL}\">{SITE_NAME}</a> user. If you have received this by mistake, please DO NOT click the confirmation link, and simply delete this email. After a short time, the request will be removed from the system.<br>Thank you,<br>The {SITE_NAME} Team</div>\r\n\r\n</div>'),
(4, NULL, 'activate_account', 'Activate Account', '<p>Welcome to {SITE_NAME}!</p>\r\n\r\n<p>Thanks for joining {SITE_NAME}. We listed your sign in details below, make sure you keep them safe.</p>\r\n\r\n<p>To verify your email address, please follow this link:<br />\r\n<big><strong><a href=\"{ACTIVATE_URL}\">Finish your registration...</a></strong></big><br />\r\nLink doesn&#39;t work? Copy the following link to your browser address bar:<br />\r\n<a href=\"{ACTIVATE_URL}\">{ACTIVATE_URL}</a></p>\r\n\r\n<p><br />\r\n<br />\r\nPlease verify your email within {ACTIVATION_PERIOD} hours, otherwise your registration will become invalid and you will have to register again.<br />\r\n<br />\r\n<br />\r\nYour username: {USERNAME}<br />\r\nYour email address: {EMAIL}<br />\r\nYour password: {PASSWORD}<br />\r\n<br />\r\nHave fun!<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(5, NULL, 'reset_password', 'Reset Password', '<div style=\"height: 7px; background-color: #535353;\"></div>\r\n<div style=\"background-color:#E8E8E8; margin:0px; padding:55px 20px 40px 20px; font-family:Open Sans, Helvetica, sans-serif; font-size:12px; color:#535353;\"><div style=\"text-align:center; font-size:24px; font-weight:bold; color:#535353;\">New password on {SITE_NAME}</div>\r\n<div style=\"border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;\"><p>You have changed your password.<br>Please, keep it in your records so you don\'t forget it.<br></p>\r\nYour username: {USERNAME}<br>Your email address: {EMAIL}<br>Your new password: {NEW_PASSWORD}<br><br>Thank you,<br>The {SITE_NAME} Team</div>\r\n</div>'),
(6, NULL, 'bug_assigned', 'New Bug Assigned', '<p>Hi there,</p>\r\n\r\n<p>A new bug &nbsp;{BUG_TITLE} &nbsp;has been assigned to you by {ASSIGNED_BY}.</p>\r\n\r\n<p>You can view this bug by logging in to the portal using the link below.</p>\r\n\r\n<p><br />\r\n<big><strong><a href=\"{BUG_URL}\">View Bug</a></strong></big><br />\r\n<br />\r\nRegards<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(7, NULL, 'bug_updated', 'Bug status changed', '<p>Hi there,</p>\r\n\r\n<p>Bug {BUG_TITLE} has been marked as {STATUS} by {MARKED_BY}.</p>\r\n\r\n<p>You can view this bug by logging in to the portal using the link below.</p>\r\n\r\n<p><big><strong><a href=\"{BUG_URL}\">View Bug</a></strong></big><br />\r\nRegards<br />\r\nThe {SITE_NAME} Team</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(8, NULL, 'bug_comments', 'New Bug Comment Received', '<p>Hi there,</p>\r\n\r\n<p>A new comment has been posted by {POSTED_BY} to bug {BUG_TITLE}.</p>\r\n\r\n<p>You can view the comment using the link below.</p>\r\n\r\n<p><em>{COMMENT_MESSAGE}</em></p>\r\n\r\n<p><br />\r\n<big><strong><a href=\"{COMMENT_URL}\">View Comment</a></strong></big><br />\r\nRegards<br />\r\nThe {SITE_NAME} Team</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(9, NULL, 'bug_attachment', 'New bug attachment', '<p>Hi there,</p>\r\n\r\n<p>A new attachment&nbsp;has been uploaded by {UPLOADED_BY} to issue {BUG_TITLE}.</p>\r\n\r\n<p>You can view the bug using the link below.</p>\r\n\r\n<p><br />\r\n<big><strong><a href=\"{BUG_URL}\">View Bug</a></strong></big></p>\r\n\r\n<p><br />\r\nRegards<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(10, NULL, 'bug_reported', 'New bug Reported', '<p>Hi there,</p>\r\n\r\n<p>A new bug ({BUG_TITLE}) has been reported by {ADDED_BY}.</p>\r\n\r\n<p>You can view the Bug using the Dashboard Page.</p>\r\n\r\n<p><br />\r\n<big><strong><a href=\"{BUG_URL}\">View Bug</a></strong></big></p>\r\n\r\n<p><br />\r\nRegards<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(13, NULL, 'refund_confirmation', 'Refund Confirmation', '<p>Refund Confirmation</p>\r\n\r\n<p>Hello {CLIENT}</p>\r\n\r\n<p>This is confirmation that a refund has been processed for Invoice&nbsp; of {CURRENCY} {AMOUNT}&nbsp;sent on {INVOICE_DATE}.<br />\r\nYou can view the invoice online at:<br />\r\n<big><strong><a href=\"{INVOICE_LINK}\">View Invoice</a></strong></big><br />\r\n<br />\r\nBest Regards,<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(14, NULL, 'payment_confirmation', 'Payment Confirmation', '<p>Payment Confirmation</p>\r\n\r\n<p>Hello {CLIENT}</p>\r\n\r\n<p>This is a payment receipt for your invoice of {CURRENCY} {AMOUNT}&nbsp;sent on {INVOICE_DATE}.<br />\r\nYou can view the invoice online at:<br />\r\n<big><strong><a href=\"{INVOICE_LINK}\">View Invoice</a></strong></big><br />\r\n<br />\r\nBest Regards,<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(15, NULL, 'payment_email', 'Payment Received', '<div style=\"height: 7px; background-color: #535353;\"></div>\n<div style=\"background-color:#E8E8E8; margin:0px; padding:55px 20px 40px 20px; font-family:Open Sans, Helvetica, sans-serif; font-size:12px; color:#535353;\"><div style=\"text-align:center; font-size:24px; font-weight:bold; color:#535353;\">Payment Received</div>\n<div style=\"border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;\"><p>Dear Customer</p>\n<p>We have received your payment of {INVOICE_CURRENCY} {PAID_AMOUNT}. </p>\n<p>Thank you for your Payment and business. We look forward to working with you again.</p>\n--------------------------<br>Regards<br>The {SITE_NAME} Team</div>\n</div>'),
(16, NULL, 'invoice_overdue_email', 'Invoice Overdue Notice', '<p>Invoice Overdue</p>\r\n\r\n<p>INVOICE {REF}</p>\r\n\r\n<p><strong>Hello {CLIENT}</strong></p>\r\n\r\n<p>This is the notice that your invoice overdue.&nbsp;The invoice {CURRENCY} {AMOUNT}. and Due Date: {DUE_DATE}</p>\r\n\r\n<p>You can view the invoice online at:<br />\r\n<big><strong><a href=\"{INVOICE_LINK}\">View Invoice</a></strong></big><br />\r\n<br />\r\nBest Regards,<br />\r\nThe {SITE_NAME} Team</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(17, NULL, 'invoice_message', 'New Invoice', '<div style=\"height: 7px; background-color: #535353;\"></div><div style=\"background-color:#E8E8E8; margin:0px; padding:55px 20px 40px 20px; font-family:Open Sans, Helvetica, sans-serif; font-size:12px; color:#535353;\"><div style=\"text-align:center; font-size:24px; font-weight:bold; color:#535353;\">INVOICE {REF}</div><div style=\"border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;\"><span class=\"style1\"><span style=\"font-weight:bold;\">Hello {CLIENT}</span></span><br><br>Here is the invoice of {CURRENCY} {AMOUNT}.<br><br>You can view the invoice online at:<br><big><b><a href=\"{INVOICE_LINK}\">View Invoice</a></b></big><br><br>Best Regards<br><br>The {SITE_NAME} Team</div></div>'),
(18, NULL, 'invoice_reminder', 'Invoice Reminder', '<div style=\"height: 7px; background-color: #535353;\"></div>\r\n<div style=\"background-color:#E8E8E8; margin:0px; padding:55px 20px 40px 20px; font-family:Open Sans, Helvetica, sans-serif; font-size:12px; color:#535353;\"><div style=\"text-align:center; font-size:24px; font-weight:bold; color:#535353;\">Invoice Reminder</div>\r\n<div style=\"border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;\"><p>Hello {CLIENT}</p>\r\n<br><p>This is a friendly reminder to pay your invoice of {CURRENCY} {AMOUNT}<br>You can view the invoice online at:<br><big><b><a href=\"{INVOICE_LINK}\">View Invoice</a></b></big><br><br>Best Regards,<br>The {SITE_NAME} Team</p>\r\n</div>\r\n</div>'),
(19, NULL, 'message_received', 'Message Received', '<div style=\"height: 7px; background-color: #535353;\"></div>\r\n<div style=\"background-color:#E8E8E8; margin:0px; padding:55px 20px 40px 20px; font-family:Open Sans, Helvetica, sans-serif; font-size:12px; color:#535353;\"><div style=\"text-align:center; font-size:24px; font-weight:bold; color:#535353;\">Message Received</div>\r\n<div style=\"border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;\"><p>Hi {RECIPIENT},</p>\r\n<p>You have received a message from {SENDER}. </p>\r\n------------------------------------------------------------------<br><blockquote>\r\n{MESSAGE}</blockquote>\r\n<big><b><a href=\"{SITE_URL}\">Go to Account</a></b></big><br><br>Regards<br>The {SITE_NAME} Team</div>\r\n</div>'),
(20, NULL, 'estimate_email', 'New Estimate', '<p>Estimate {ESTIMATE_REF}</p>\r\n\r\n<p>Hi {CLIENT}</p>\r\n\r\n<p>Thanks for your business inquiry.</p>\r\n\r\n<p>The estimate {ESTIMATE_REF} is attached with this email.<br />\r\nEstimate Overview:<br />\r\nEstimate # : {ESTIMATE_REF}<br />\r\nAmount: {CURRENCY} {AMOUNT}<br />\r\n<br />\r\nYou can view the estimate online at:<br />\r\n<big><strong><a href=\"{ESTIMATE_LINK}\">View Estimate</a></strong></big><br />\r\n<br />\r\nBest Regards,<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(21, NULL, 'ticket_staff_email', 'New Ticket [TICKET_CODE]', '<div style=\"height: 7px; background-color: #535353;\"></div>\r\n<div style=\"background-color:#E8E8E8; margin:0px; padding:55px 20px 40px 20px; font-family:Open Sans, Helvetica, sans-serif; font-size:12px; color:#535353;\"><div style=\"text-align:center; font-size:24px; font-weight:bold; color:#535353;\">New Ticket</div>\r\n<div style=\"border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;\"><p>Ticket #{TICKET_CODE} has been created by the client.</p>\r\n<p>You may view the ticket by clicking on the following link <br><br>  Client Email : {REPORTER_EMAIL}<br><br> <big><b><a href=\"{TICKET_LINK}\">View Ticket</a></b></big> <br><br>Regards<br><br>{SITE_NAME}</p>\r\n</div>\r\n</div>'),
(22, NULL, 'ticket_client_email', 'Ticket [TICKET_CODE] Opened', '<p>Ticket Opened</p>\r\n\r\n<p>Hello {CLIENT_EMAIL},</p>\r\n\r\n<p>Your ticket has been opened with us.<br />\r\n<br />\r\nTicket # {TICKET_CODE}<br />\r\nStatus : Open<br />\r\n<br />\r\nClick on the below link to see the ticket details and post additional comments.<br />\r\n<br />\r\n<big><strong><a href=\"{TICKET_LINK}\">View Ticket</a></strong></big><br />\r\n<br />\r\nRegards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(23, NULL, 'ticket_reply_email', 'Ticket [TICKET_CODE] Response', '<div style=\"height: 7px; background-color: #535353;\"></div>\r\n<div style=\"background-color:#E8E8E8; margin:0px; padding:55px 20px 40px 20px; font-family:Open Sans, Helvetica, sans-serif; font-size:12px; color:#535353;\"><div style=\"text-align:center; font-size:24px; font-weight:bold; color:#535353;\">Ticket Response</div>\r\n<div style=\"border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;\"><p>A new response has been added to Ticket #{TICKET_CODE}<br><br> Ticket : #{TICKET_CODE} <br>Status : {TICKET_STATUS} <br><br></p>\r\nTo see the response and post additional comments, click on the link below.<br><br>         <big><b><a href=\"{TICKET_LINK}\">View Reply</a> </b></big><br><br>          Note: Do not reply to this email as this email is not monitored.<br><br>     Regards<br>The {SITE_NAME} Team<br></div>\r\n</div>'),
(24, NULL, 'ticket_closed_email', 'Ticket [TICKET_CODE] Closed', '<div style=\"height: 7px; background-color: #535353;\"></div>\r\n<div style=\"background-color:#E8E8E8; margin:0px; padding:55px 20px 40px 20px; font-family:Open Sans, Helvetica, sans-serif; font-size:12px; color:#535353;\"><div style=\"text-align:center; font-size:24px; font-weight:bold; color:#535353;\">Ticket Closed</div>\r\n<div style=\"border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;\">Hi {REPORTER_EMAIL}<br><br>Ticket #{TICKET_CODE} has been closed by {STAFF_USERNAME} <br><br>          Ticket : #{TICKET_CODE} <br>     Status : {TICKET_STATUS}<br><br>Replies : {NO_OF_REPLIES}<br><br>          To see the responses or open the ticket, click on the link below.<br><br>          <big><b><a href=\"{TICKET_LINK}\">View Ticket</a></b></big> <br><br>          Note: Do not reply to this email as this email is not monitored.<br><br>    Regards<br>The {SITE_NAME} Team</div>\r\n</div>'),
(26, NULL, 'task_updated', 'Task updated', '<div style=\"height: 7px; background-color: #535353;\"></div>\r\n<div style=\"background-color:#E8E8E8; margin:0px; padding:55px 20px 40px 20px; font-family:Open Sans, Helvetica, sans-serif; font-size:12px; color:#535353;\"><div style=\"text-align:center; font-size:24px; font-weight:bold; color:#535353;\">Task updated</div>\r\n<div style=\"border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;\"><p>Hi there,</p>\r\n<p>{TASK_NAME} in {PROJECT_TITLE} has been updated by {ASSIGNED_BY}.</p>\r\n<p>You can view this project by logging in to the portal using the link below.</p>\r\n-----------------------------------<br><big><b><a href=\"{PROJECT_URL}\">View Project</a></b></big><br><br>Regards<br>The {SITE_NAME} Team</div>\r\n</div>'),
(27, NULL, 'quotations_form', 'Your Quotation Request', '<p>QUOTATION</p>\r\n\r\n<p><strong>Hello {CLIENT}</strong><br />\r\n&nbsp;</p>\r\n\r\n<p>Thank you for you for filling in our Quotation Request Form.<br />\r\n<br />\r\nPlease find below are our quotation:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table cellpadding=\"8\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Quotation Date</td>\r\n			<td><strong>{DATE}</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Our Quotation</td>\r\n			<td><strong>{CURRENCY} {AMOUNT}</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Addtitional Comments</td>\r\n			<td><strong>{NOTES}</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\nYou can view the estimate online at:<br />\r\n<big><strong><a href=\"{QUOTATION LINK}\">View Quotation</a></strong></big></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\nThank you and we look forward to working with you.<br />\r\n<br />\r\nBest Regards,<br />\r\nThe {SITE_NAME} Team</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(28, NULL, 'client_notification', 'New project created', '<p>Hello, <strong>{CLIENT_NAME}</strong>,<br />\r\nwe have created a new project with your account.<br />\r\n<br />\r\nProject name : <strong>{PROJECT_NAME}</strong><br />\r\nYou can login to see the status of your project by using this link:<br />\r\n<big><a href=\"{PROJECT_LINK}\"><strong>View Project</strong></a></big></p>\r\n\r\n<p><br />\r\nBest Regards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(29, NULL, 'assigned_project', 'Assigned Project', '<p>Hi There,</p>\r\n\r\n<p>A<strong> {PROJECT_NAME}</strong> has been assigned by <strong>{ASSIGNED_BY} </strong>to you.You can view this project by logging in to the portal using the link below:<br />\r\n<big><a href=\"{PROJECT_URL}\"><strong>View Project</strong></a></big><br />\r\n<br />\r\nBest Regards<br />\r\nThe {SITE_NAME} Team</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(30, NULL, 'complete_projects', 'Project Completed', '<p>Hi <strong>{CLIENT_NAME}</strong>,</p>\r\n\r\n<p>Project : <strong>{PROJECT_NAME}</strong> &nbsp;has been completed.<br />\r\nYou can view the project by logging into your portal Account:<br />\r\n<big><a href=\"{PROJECT_LINK}\"><strong>View Project</strong></a></big><br />\r\n<br />\r\nBest Regards,<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(31, NULL, 'project_comments', 'New Project Comment Received', '<p>Hi There,</p>\r\n\r\n<p>A new comment has been posted by <strong>{POSTED_BY}</strong> to project <strong>{PROJECT_NAME}</strong>.</p>\r\n\r\n<p>You can view the comment using the link below:<br />\r\n<big><a href=\"{COMMENT_URL}\"><strong>View Project</strong></a></big><br />\r\n<br />\r\n<em>{COMMENT_MESSAGE}</em><br />\r\n<br />\r\nBest Regards,<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(32, NULL, 'project_attachment', 'New Project  Attachment', '<p>Hi There,</p>\r\n\r\n<p>A new file has been uploaded by <strong>{UPLOADED_BY}</strong> to project <strong>{PROJECT_NAME}</strong>.<br />\r\nYou can view the Project using the link below:<br />\r\n<big><a href=\"{PROJECT_URL}\"><strong>View Project</strong></a></big><br />\r\n<br />\r\n<br />\r\nBest Regards,<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(33, NULL, 'responsible_milestone', 'Responsible for a Milestone', '<p>Hi There,</p>\r\n\r\n<p>You are a responsible&nbsp;for a project milestone&nbsp;<strong>{MILESTONE_NAME}</strong>&nbsp; assigned to you by <strong>{ASSIGNED_BY}</strong> in project <strong>{PROJECT_NAME}</strong>.</p>\r\n\r\n<p>You can view this Milestone&nbsp;by logging in to the portal using the link below:<br />\r\n<big><strong><a href=\"{PROJECT_URL}\">View Project</a></strong></big><br />\r\n<br />\r\n<br />\r\nBest Regards,<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(34, NULL, 'task_assigned', 'Task assigned', '<p>Hi there,</p>\r\n\r\n<p>A new task <strong>{TASK_NAME}</strong> &nbsp;has been assigned to you by <strong>{ASSIGNED_BY}</strong>.</p>\r\n\r\n<p>You can view this task by logging in to the portal using the link below.</p>\r\n\r\n<p><br />\r\n<big><strong><a href=\"{TASK_URL}\">View Task</a></strong></big><br />\r\n<br />\r\nRegards<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(35, NULL, 'tasks_comments', 'New Task Comment Received', '<p>Hi There,</p>\r\n\r\n<p>A new comment has been posted by <strong>{POSTED_BY}</strong> to <strong>{TASK_NAME}</strong>.</p>\r\n\r\n<p>You can view the comment using the link below:<br />\r\n<big><strong><a href=\"{COMMENT_URL}\">View Comment</a></strong></big><br />\r\n<br />\r\n<em>{COMMENT_MESSAGE}</em><br />\r\n<br />\r\nBest Regards,<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(36, NULL, 'tasks_attachment', 'New Tasks Attachment', '<p>Hi There,</p>\r\n\r\n<p>A new file has been uploaded by <strong>{UPLOADED_BY} </strong>to Task <strong>{TASK_NAME}</strong>.<br />\r\nYou can view the Task&nbsp;using the link below:</p>\r\n\r\n<p><br />\r\n<big><a href=\"{TASK_URL}\"><strong>View Task</strong></a></big><br />\r\n<br />\r\nBest Regards,<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(37, NULL, 'tasks_updated', 'Task updated', '<p>Hi there,</p>\r\n\r\n<p><strong>{TASK_NAME}</strong> has been updated by <strong>{ASSIGNED_BY}</strong>.</p>\r\n\r\n<p>You can view this Task by logging in to the portal using the link below.</p>\r\n\r\n<p><br />\r\n<big><strong><a href=\"{TASK_URL}\">View Task</a></strong></big><br />\r\n<br />\r\nRegards<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(38, NULL, 'goal_not_achieve', 'Not Achieve Goal', '<p><strong>Unfortunately!</strong> We failed to achieve goal!</p>\r\n\r\n<p><strong>Here is a Goal Details</strong></p>\r\n\r\n<p>Goal Type :&nbsp;<strong>{Goal_Type}</strong><br />\r\nTarget Achievement:&nbsp;<strong>{achievement}</strong><br />\r\nTotal Achievement:&nbsp;<strong>{total_achievement}</strong><br />\r\nStart Date:&nbsp;<strong>{start_date}</strong><br />\r\nEnd Date:&nbsp;<strong>{End_date}</strong><br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(39, NULL, 'goal_achieve', 'Achieve Goal', '<p><strong>Congratulation!</strong> We achieved new goal.</p>\r\n\r\n<p><strong>Here is a Goal Details</strong></p>\r\n\r\n<p>Goal Type :<strong>{Goal_Type}</strong><br />\r\nTarget Achievement:<strong>{achievement}</strong><br />\r\nTotal Achievement:<strong>{total_achievement}</strong><br />\r\nStart Date:<strong>{start_date}</strong><br />\r\nEnd Date:<strong>{End_date}</strong><br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(40, NULL, 'leave_request_email', 'A Leave Request from you', '<p>Hi there,</p>\r\n\r\n<p><strong>{NAME}</strong> &nbsp;Want to leave from you.</p>\r\n\r\n<p>You can view this leave request by logging in to the portal using the link below<br />\r\n<big><strong><a href=\"{APPLICATION_LINK}\">View Application</a></strong></big><br />\r\n<br />\r\n<br />\r\nRegards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(41, NULL, 'leave_approve_email', 'Your leave request has been approved', '<h1>Your leave request has been approved</h1>\r\n\r\n<p><strong>Congratulations!</strong> Your leave request from <strong>{START_DATE}</strong> to <strong>{END_DATE}</strong> has been approved by your company management.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\nRegards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(42, NULL, 'leave_reject_email', 'Your leave request has been Rejected', '<h1>Your leave request has been Rejected</h1>\r\n\r\n<p><strong>Unfortunately !</strong>&nbsp;Your leave request from&nbsp;<strong>{START_DATE}</strong>&nbsp;to&nbsp;<strong>{END_DATE}</strong>&nbsp;has been Rejected by your company management.</p>\r\n\r\n<p><br />\r\nRegards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(43, NULL, 'overtime_request_email', 'Overtime Request', '<p>Hi there,</p>\r\n\r\n<p><strong>{NAME}</strong>&nbsp;&nbsp;to do an overtime.<br />\r\n<br />\r\n<br />\r\nRegards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(44, NULL, 'overtime_approved_email', 'Your overtime request has been approved', '<h1>Your leave request has been approved</h1>\r\n\r\n<p><strong>Congratulations!</strong>&nbsp;Your overtime&nbsp;request at&nbsp;<strong>{DATE}</strong>&nbsp;and&nbsp;<strong>{HOUR}</strong>&nbsp;has been approved by your company management.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\nRegards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(45, NULL, 'overtime_reject_email', 'Your Overtime request has been Rejected', '<h1>Your leave request has been Rejected</h1>\r\n\r\n<p><strong>Unfortunately&nbsp;!</strong>&nbsp;Your overtime&nbsp;request at&nbsp;<strong>{DATE}</strong>&nbsp;and&nbsp;<strong>{HOUR}</strong>&nbsp;has been Rejected by your company management.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\nRegards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(46, NULL, 'wellcome_email', 'Welcome Email ', '<p>Hello <strong>{NAME}</strong>,</p>\r\n\r\n<p>Welcome to <strong>{COMPANY_NAME}</strong> .Thanks for joining <strong>{COMPANY_NAME}</strong>.</p>\r\n\r\n<p>We just wanted to say welcome.</p>\r\n\r\n<p>Please contact us if you need any help.</p>\r\n\r\n<p>Click here to view your profile: <strong>{COMPANY_URL}</strong></p>\r\n\r\n<p><br />\r\nHave fun!<br />\r\nThe <strong>{COMPANY_NAME}</strong> Team.</p>\r\n'),
(47, NULL, 'payslip_generated_email', 'Payslip generated', '<p>Hello&nbsp;<strong>{NAME}</strong>,</p>\r\n\r\n<p>Your payslip generated for the month <strong>{MONTH_YEAR} .</strong></p>\r\n\r\n<p><br />\r\nRegards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(48, NULL, 'advance_salary_email', 'Advance Salary Reqeust', '<p>Hi there,</p>\r\n\r\n<p><strong>{NAME}</strong>&nbsp;&nbsp;Want to Advance Salary from you.</p>\r\n\r\n<p>You can view this Advance Salary by logging in to the portal using the link below.<br />\r\n<br />\r\n<big><strong><a href=\"{LINK}\">View Advance Salary</a></strong></big><br />\r\n<br />\r\n<br />\r\nRegards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(49, NULL, 'advance_salary_approve_email', 'Your advance salary request has been approved', '<h1>Your advance salary request has been approved</h1>\r\n\r\n<p><strong>Congratulations!</strong>&nbsp;Your advance salary&nbsp;requested &nbsp;<strong>{AMOUNT}</strong>&nbsp;has been approved by your company management.</p>\r\n\r\n<p>This advance amount will deduct the next <strong>{DEDUCT_MOTNH}</strong> .</p>\r\n\r\n<p><br />\r\nRegards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(50, NULL, 'advance_salary_reject_email', 'Your advance salary request has been Rejected', '<h1>Your advance salary request has been Rejected</h1>\r\n\r\n<p><strong>Unfortunately !</strong>&nbsp;Your advance salary requested&nbsp;<strong>{AMOUNT}</strong>&nbsp;has been Rejected by your company management.</p>\r\n\r\n<p><br />\r\nRegards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(51, NULL, 'award_email', 'Award Received', '<p>Hello&nbsp;<strong>{NAME}</strong>,</p>\r\n\r\n<p>You have been&nbsp;awarded <strong>{AWARD_NAME} </strong>for this<strong> {MONTH} .</strong></p>\r\n\r\n<p><br />\r\nRegards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(52, NULL, 'new_job_application_email', 'New job application submitted', '<p>Hi there,</p>\r\n\r\n<p>&nbsp;<strong>{NAME}&nbsp;</strong>has submitted the job application</p>\r\n\r\n<p>Please find below are job application Details:</p>\r\n\r\n<table cellpadding=\"8\" style=\"width:100%\">\r\n	<tbody>\r\n		<tr>\r\n			<td>Job Title</td>\r\n			<td><strong>{JOB_TITLE}</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Email</td>\r\n			<td><strong>{EMAIL}</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mobile</td>\r\n			<td><strong>{MOBILE}</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Cover Latter</td>\r\n			<td><strong>{COVER_LETTER}</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\nYou can view the Job Application online at:<br />\r\n<br />\r\n<big><strong><a href=\"{LINK}\">View Job Application</a></strong></big><br />\r\n<br />\r\nBest Regards,<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(53, NULL, 'new_notice_published', 'New Notice published', '<p>Hello&nbsp;<strong>{NAME}</strong>,</p>\r\n\r\n<p>New Notice Published&nbsp;<strong>{TITLE}</strong></p>\r\n\r\n<p><br />\r\nYou can view the Notice online at:<br />\r\n<br />\r\n<big><strong><a href=\"{LINK}\">View Notice</a></strong></big><br />\r\n<br />\r\nBest Regards,<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(54, NULL, 'new_training_email', 'Training  Assigned ', '<p>Hi there,</p>\r\n\r\n<p>A new Training  &nbsp;<strong>{TRAINING_NAME}</strong>&nbsp;&nbsp;has been assigned to you by&nbsp;<strong>{ASSIGNED_BY}</strong>.</p>\r\n\r\n<p>You can view this Training  by logging in to the portal using the link below.</p>\r\n\r\n<p><br />\r\n<big><strong><a href=\"{LINK}\">View Training</a></strong></big><br />\r\n<br />\r\nRegards<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(55, NULL, 'performance_appraisal_email', 'New Performance Appraisal', ''),
(56, NULL, 'expense_request_email', 'A New Expense Request have been Recieved', '<p>Hi there,</p>\r\n\r\n<p><strong>{NAME}</strong> &nbsp;Create a New Expense The Amount is <strong>{AMOUNT}</strong></p>\r\n\r\n<p>You can view this expense by logging in to the portal using the link below.<br />\r\n<br />\r\n<big><strong><a href=\"{URL}\">View Expense</a></strong></big><br />\r\n<br />\r\n<br />\r\nRegards,<br />\r\n<br />\r\nThe <strong>{SITE_NAME}</strong> Team</p>\r\n'),
(57, NULL, 'expense_approved_email', 'Expense Approved', '<p>Dear&nbsp;<strong>{NAME} ,</strong></p>\r\n\r\n<h1>Your Expense request has been approved</h1>\r\n\r\n<p><strong>Congratulations!</strong>&nbsp;Your Expense request from&nbsp;<strong>{AMOUNT}</strong>&nbsp;has been approved by your company management.</p>\r\n\r\n<p>Please Contact&nbsp;with our Accountant for collect the amount.</p>\r\n\r\n<p><br />\r\nRegards,<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(58, NULL, 'expense_paid_email', 'Expense have been Paid', '<p>Hi there,</p>\r\n\r\n<p>The&nbsp;<strong>{NAME}</strong>&nbsp;expense&nbsp;<strong>{AMOUNT}&nbsp;</strong>has been paid by <strong>{PAID_BY}.</strong></p>\r\n\r\n<p>You can view this expense by logging in to the portal using the link below.<br />\r\n<br />\r\n<big><strong><a href=\"{URL}\">View Expense</a></strong></big><br />\r\n<br />\r\n<br />\r\nRegards,<br />\r\n<br />\r\nThe&nbsp;<strong>{SITE_NAME}</strong>&nbsp;Team</p>\r\n'),
(59, NULL, 'auto_close_ticket', 'Ticket Auto Closed', '<p>Ticket Closed</p>\r\n\r\n<p>Hello <strong>{REPORTER_EMAIL}</strong>,</p>\r\n\r\n<p>Ticket&nbsp;<strong>{SUBJECT}</strong>&nbsp;has been auto closed due to inactivity.&nbsp;<br />\r\n<br />\r\nTicket # <strong>{TICKET_CODE}</strong><br />\r\nStatus : &nbsp;<strong>{TICKET_STATUS}</strong><br />\r\n<br />\r\nTo see the responses or open the ticket, click on the link below:ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Â ÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡Ãƒâ€šÃ‚Â¬ÃƒÆ’Ã¢â‚¬Â¦Ãƒâ€šÃ‚Â¡ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¬ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ãƒâ€¦Ã‚Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¬ÃƒÆ’Ã†â€™ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¹<br />\r\n<br />\r\n<big><strong><a href=\"{TICKET_LINK}\">View Ticket</a></strong></big><br />\r\n<br />\r\nRegards<br />\r\n<br />\r\nThe <strong>{SITE_NAME}</strong> Team</p>\r\n'),
(60, NULL, 'proposal_email', 'New Proposal', '<p>Proposal <strong>{PROPOSAL_REF}</strong></p> <p>Hi <strong>{CLIENT}</strong></p> <p>Thanks for your business inquiry.</p> <p>The Proposal <strong>{PROPOSAL_REF} </strong>is attached with this email.<br /> Proposal&nbsp;Overview:<br /> Proposal&nbsp;# :<strong> {PROPOSAL_REF}</strong><br /> Amount: <strong>{CURRENCY} {AMOUNT}</strong><br /> <br /> You can view the estimate online at:<br /> <big><strong><a href=\"{PROPOSAL_LINK}\">View Proposal</a></strong></big><br /> <br /> Best Regards,<br /> The <strong>{SITE_NAME}</strong> Team</p> '),
(61, NULL, 'project_overdue_email', 'Project Overdue Notice', '<p>Project Overdue</p>\r\n\r\n<p><strong>Hello {CLIENT}</strong></p>\r\n\r\n<p>This is the notice that your project overdue.&nbsp;<br />\r\n<br />\r\nProject name : <strong>{PROJECT_NAME}</strong><br />\r\nDue date : <strong>{DUE_DATE}</strong><br />\r\nYou can login to see the status of your project by using this link:<br />\r\n<big><a href=\"{PROJECT_LINK}\"><strong>View Project</strong></a></big></p>\r\n\r\n<p><br />\r\nBest Regards<br />\r\nThe {SITE_NAME} Team</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(62, NULL, 'estimate_overdue_email', 'Estimate Overdue Notice', '<p>Estimate {ESTIMATE_REF}</p>\r\n\r\n<p>Hi {CLIENT}</p>\r\n\r\n<p>This is the notice that your Estimate&nbsp;overdue.&nbsp;Ã¢â‚¬â€¹<br />\r\n<br />\r\nEstimate Overview:<br />\r\nEstimate # : {ESTIMATE_REF}<br />\r\nAmount: {DUE_DATE}<br />\r\nAmount: {CURRENCY} {AMOUNT}<br />\r\n<br />\r\nYou can view the estimate online at:<br />\r\n<big><strong><a href=\"{ESTIMATE_LINK}\">View Estimate</a></strong></big><br />\r\n<br />\r\nBest Regards,<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(63, NULL, 'proposal_overdue_email', 'New Estimate', '<p>Proposal&nbsp;<strong>{PROPOSAL_REF}</strong></p>\r\n\r\n<p>Hi&nbsp;<strong>{CLIENT}</strong></p>\r\n\r\n<p>This is the notice that your Proposal&nbsp;overdue.&nbsp;<br />\r\n<br />\r\nProposal&nbsp;Overview:<br />\r\nProposal&nbsp;# :<strong>&nbsp;{PROPOSAL_REF}</strong><br />\r\nDue Date: <strong>{DUE_DATE}</strong>Ã¢â‚¬â€¹<br />\r\nAmount:&nbsp;<strong>{CURRENCY} {AMOUNT}</strong><br />\r\n<br />\r\nYou can view the estimate online at:<br />\r\n<big><strong><a href=\"{PROPOSAL_LINK}\">View Proposal</a></strong></big><br />\r\n<br />\r\nBest Regards,<br />\r\nThe&nbsp;<strong>{SITE_NAME}</strong>&nbsp;Team</p>\r\n'),
(64, NULL, 'call_for_interview', 'You have an interview offer!!!', '<p>Hello&nbsp;<strong>{NAME}</strong>,</p>\r\n\r\n<p>You have an interview offer for you.please see the details.&nbsp;<br />\r\n<br />\r\n<strong>Job Summary</strong>:<br />\r\nJob Title # :<strong>&nbsp;{JOB_TITLE}</strong><br />\r\nDesignation # :<strong>&nbsp;{DESIGNATION}</strong><br />\r\nInterview Date: <strong>{DATE}</strong></p>\r\n\r\n<p><strong>Postal Address</strong><br />\r\nPO Box 16122 Collins Street West<br />\r\nVictoria 8007 Australia<br />\r\n121 King Street, Melbourne<br />\r\nVictoria 3000 Australia &ndash;&nbsp;<a href=\"https://www.google.com.au/maps/place/Envato/@-37.8173306,144.9534631,17z/data=!3m1!4b1!4m2!3m1!1s0x6ad65d4c2b349649:0xb6899234e561db11\" target=\"_blank\">Map</a></p>\r\n\r\n<p><br />\r\nYou can view the circular details online at:<br />\r\n<big><strong><a href=\"{LINK}\">View Job Circular</a></strong></big><br />\r\n<br />\r\nBest Regards,<br />\r\nThe&nbsp;<strong>{SITE_NAME}</strong>&nbsp;Team</p>\r\n'),
(65, NULL, 'token_activate_account', 'Activate Account', '<p>Welcome to {SITE_NAME}!</p>\n\n<p>Thanks for joining {SITE_NAME}. We listed your Your activation token  below.</p>\n\n<p>To verify your Your activation token please copy the activation code: <strong> {ACTIVATION_TOKEN} </strong>\n<br />\n<br />\nplease follow this link:<br />\n<big><strong><a href=\"{ACTIVATE_URL}\">Start your registration...</a></strong></big><br />\nLink doesn&#39;t work? Copy the following link to your browser address bar:<br />\n<a href=\"{ACTIVATE_URL}\">{ACTIVATE_URL}</a></p>\n\n<p><br />\n<br />\nPlease verify your Your activation token within {ACTIVATION_PERIOD} hours, otherwise your registration will become invalid and you will have to register again.<br />\n<br />\n<br />\nHave fun!<br />\nThe {SITE_NAME} Team</p>\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee_award`
--

CREATE TABLE `tbl_employee_award` (
  `employee_award_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `award_name` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `gift_item` varchar(300) NOT NULL,
  `award_amount` int(5) NOT NULL,
  `award_date` varchar(10) NOT NULL,
  `view_status` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1=Read 2=Unread',
  `given_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee_bank`
--

CREATE TABLE `tbl_employee_bank` (
  `employee_bank_id` int(5) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bank_name` varchar(300) NOT NULL,
  `branch_name` varchar(300) NOT NULL,
  `account_name` varchar(300) NOT NULL,
  `account_number` varchar(300) NOT NULL,
  `routing_number` varchar(50) DEFAULT NULL,
  `type_of_account` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee_document`
--

CREATE TABLE `tbl_employee_document` (
  `document_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `resume` text DEFAULT NULL,
  `resume_path` text DEFAULT NULL,
  `resume_filename` text DEFAULT NULL,
  `offer_letter` text DEFAULT NULL,
  `offer_letter_filename` text DEFAULT NULL,
  `offer_letter_path` text DEFAULT NULL,
  `joining_letter` text DEFAULT NULL,
  `joining_letter_filename` text DEFAULT NULL,
  `joining_letter_path` text DEFAULT NULL,
  `contract_paper` text DEFAULT NULL,
  `contract_paper_filename` text DEFAULT NULL,
  `contract_paper_path` text DEFAULT NULL,
  `id_proff` text DEFAULT NULL,
  `id_proff_filename` text DEFAULT NULL,
  `id_proff_path` text DEFAULT NULL,
  `other_document` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee_payroll`
--

CREATE TABLE `tbl_employee_payroll` (
  `payroll_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `salary_template_id` int(11) DEFAULT NULL,
  `hourly_rate_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_estimates`
--

CREATE TABLE `tbl_estimates` (
  `estimates_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `reference_no` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT 0,
  `estimate_date` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estimate_month` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estimate_year` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `due_date` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alert_overdue` tinyint(1) NOT NULL DEFAULT 0,
  `currency` varchar(32) COLLATE utf8_unicode_ci DEFAULT 'USD',
  `discount_percent` int(2) DEFAULT NULL,
  `notes` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `tax` int(11) NOT NULL DEFAULT 0,
  `total_tax` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Pending',
  `date_sent` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `est_deleted` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `date_saved` timestamp NOT NULL DEFAULT current_timestamp(),
  `emailed` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT 'No',
  `show_client` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT 'No',
  `invoiced` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT 'No',
  `invoices_id` int(11) NOT NULL DEFAULT 0,
  `permission` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `client_visible` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `discount_type` enum('before_tax','after_tax') COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0 COMMENT 'sales agent',
  `adjustment` decimal(18,2) NOT NULL DEFAULT 0.00,
  `discount_total` decimal(18,2) NOT NULL DEFAULT 0.00,
  `show_quantity_as` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_estimate_items`
--

CREATE TABLE `tbl_estimate_items` (
  `estimate_items_id` int(11) NOT NULL,
  `estimates_id` int(11) NOT NULL,
  `saved_items_id` int(11) DEFAULT 0,
  `item_tax_rate` decimal(10,2) NOT NULL DEFAULT 0.00,
  `item_tax_name` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `item_name` varchar(150) COLLATE utf8_unicode_ci DEFAULT 'Item Name',
  `item_desc` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit_cost` decimal(10,2) DEFAULT 0.00,
  `quantity` decimal(10,2) DEFAULT 0.00,
  `item_tax_total` decimal(10,2) DEFAULT 0.00,
  `total_cost` decimal(10,2) DEFAULT 0.00,
  `date_saved` timestamp NOT NULL DEFAULT current_timestamp(),
  `unit` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hsn_code` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_expense_category`
--

CREATE TABLE `tbl_expense_category` (
  `expense_category_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `expense_category` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_files`
--

CREATE TABLE `tbl_files` (
  `files_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `project_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `uploaded_by` int(11) NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_form`
--

CREATE TABLE `tbl_form` (
  `form_id` int(11) NOT NULL,
  `form_name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `tbl_name` varchar(25) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_form`
--

INSERT INTO `tbl_form` (`form_id`, `form_name`, `tbl_name`) VALUES
(1, 'deposit', 'tbl_transactions'),
(2, 'expense', 'tbl_transactions'),
(3, 'tasks', 'tbl_task'),
(4, 'project', 'tbl_project'),
(5, 'leads', 'tbl_leads'),
(6, 'bugs', 'tbl_bug'),
(7, 'tickets', 'tbl_tickets'),
(8, 'opportunities', 'tbl_opportunities'),
(9, 'invoice', 'tbl_invoices'),
(10, 'estimates', 'tbl_estimates'),
(11, 'proposal', 'tbl_proposals'),
(12, 'client', 'tbl_client'),
(13, 'users', 'tbl_account_details'),
(14, 'job_circular', 'tbl_job_circular'),
(15, 'training', 'tbl_training'),
(16, 'announcements', 'tbl_announcements'),
(17, 'leave_management', 'tbl_leave_application');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_frontend_coupon`
--

CREATE TABLE `tbl_frontend_coupon` (
  `id` int(11) NOT NULL,
  `pricing_id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  `amount` varchar(50) DEFAULT NULL,
  `type` tinyint(1) DEFAULT 0 COMMENT '0=fixed,1=discount',
  `end_date` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `show_on_pricing` enum('Yes','No') NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_frontend_features`
--

CREATE TABLE `tbl_frontend_features` (
  `id` int(11) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `icon` text DEFAULT NULL,
  `sort` int(2) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_frontend_features`
--

INSERT INTO `tbl_frontend_features` (`id`, `type`, `title`, `description`, `icon`, `sort`, `status`) VALUES
(1, 'features', 'CREATIVE DESIGN', '<span style=\"color: rgb(101, 119, 134); text-align: center;\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</span>', 'flaticon-business', 2, 1),
(2, 'features', 'EASY TO CUSTOMIZE', '<span style=\"color: rgb(101, 119, 134); text-align: center;\">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</span>', 'flaticon-briefcase', 1, 1),
(4, 'best_services', '24 / 7 Professional Support', 'An expert team of support staff available by email, phone, or live chat.', 'flaticon-chat', NULL, 1),
(5, 'consultant', 'Financial Analysis', 'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.', 'uploads/154.jpg', NULL, 1),
(6, 'consultant', 'Business Growth', 'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.', 'uploads/2.jpg', NULL, 1),
(7, 'consultant', 'Investment Planningy', 'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.', 'uploads/3.jpg', NULL, 1),
(8, 'latest_project', 'Startup Business ', 'services / Trading', 'uploads/l1.jpg', NULL, 1),
(9, 'latest_project', 'Financial Service ', 'services / Trading', 'uploads/l2.jpg', NULL, 1),
(10, 'latest_project', 'Business Planning ', 'services / Trading', 'uploads/l3.jpg', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_frontend_menu`
--

CREATE TABLE `tbl_frontend_menu` (
  `menu_id` int(11) NOT NULL,
  `label` varchar(50) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `icon` varchar(50) NOT NULL,
  `parent` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sort` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_frontend_menu`
--

INSERT INTO `tbl_frontend_menu` (`menu_id`, `label`, `link`, `icon`, `parent`, `time`, `sort`, `status`) VALUES
(1, 'home', '#', '', 0, '2018-03-05 20:36:12', 1, 1),
(2, 'features', 'features', '', 0, '2018-03-11 03:21:48', 8, 1),
(3, 'addons', 'addons', '', 0, '2018-03-11 03:21:48', 10, 1),
(4, 'pricing', 'pricing', '', 0, '2018-03-11 03:21:47', 4, 1),
(5, 'resources', '#', '', 0, '2018-03-11 03:21:49', 15, 1),
(6, 'partners', 'partners', '', 0, '2018-03-11 03:21:49', 16, 1),
(7, 'contact_us', 'contact_us', '', 0, '2018-03-11 03:21:49', 19, 1),
(8, 'company', '#', '', 0, '2018-03-11 03:21:49', 21, 1),
(9, 'support', 'support', '', 5, '2018-03-11 03:21:47', 3, 1),
(10, 'status_page', 'status_page', '', 5, '2018-03-11 03:21:47', 5, 1),
(11, 'knowledge_base', 'knowledge_base', '', 5, '2018-03-11 03:21:48', 7, 1),
(12, 'faqs', 'faqs', '', 5, '2018-03-11 03:21:48', 12, 1),
(13, 'products_documentation', 'products_documentation', '', 5, '2018-03-11 03:21:49', 14, 1),
(14, 'products_updates', 'products_updates', '', 5, '2018-03-11 03:21:49', 17, 1),
(15, 'developper_docs', 'developper_docs', '', 5, '2018-03-11 03:21:49', 20, 1),
(16, 'api_documentation', 'api_documentation', '', 5, '2018-03-11 03:21:49', 22, 1),
(17, 'video_tutorials', 'video_tutorials', '', 5, '2018-03-11 03:21:49', 23, 1),
(18, 'webinars', 'webinars', '', 5, '2018-03-11 03:21:49', 24, 1),
(19, 'about_us', 'about_us', 'our_team', 8, '2018-03-11 03:21:47', 2, 1),
(20, 'careers', 'careers', '', 8, '2018-03-11 03:21:47', 6, 1),
(21, 'blog', 'blog', '', 8, '2018-03-11 03:21:48', 9, 1),
(22, 'resellers', 'resellers', '', 8, '2018-03-11 03:21:48', 11, 1),
(23, 'customers', 'customers', '', 8, '2018-03-11 03:21:48', 13, 1),
(24, 'affiliate_programs', 'affiliate_programs', '', 8, '2018-03-11 03:21:49', 18, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_frontend_pricing`
--

CREATE TABLE `tbl_frontend_pricing` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `amount` varchar(350) DEFAULT NULL,
  `sort` int(2) DEFAULT NULL,
  `multi_branch` varchar(50) DEFAULT NULL,
  `employee_no` varchar(20) DEFAULT NULL,
  `client_no` varchar(20) DEFAULT NULL,
  `project_no` varchar(20) DEFAULT NULL,
  `invoice_no` varchar(20) DEFAULT NULL,
  `leads` varchar(50) DEFAULT NULL,
  `accounting` varchar(50) DEFAULT NULL,
  `bank_account` varchar(50) DEFAULT NULL,
  `online_payment` varchar(50) NOT NULL,
  `calendar` varchar(50) DEFAULT NULL,
  `mailbox` varchar(50) DEFAULT NULL,
  `live_chat` varchar(50) DEFAULT NULL,
  `tickets` varchar(50) DEFAULT NULL,
  `tasks` varchar(50) DEFAULT NULL,
  `filemanager` varchar(50) DEFAULT NULL,
  `stock_manager` varchar(50) DEFAULT NULL,
  `recruitment` varchar(50) DEFAULT NULL,
  `attendance` varchar(50) DEFAULT NULL,
  `payroll` varchar(50) DEFAULT NULL,
  `leave_management` varchar(50) DEFAULT NULL,
  `performance` varchar(50) DEFAULT NULL,
  `training` varchar(50) DEFAULT NULL,
  `reports` varchar(50) DEFAULT NULL,
  `disk_space` varchar(100) DEFAULT NULL,
  `trial_period` varchar(20) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `allow_paypal` enum('Yes','No') DEFAULT 'No',
  `allow_stripe` enum('Yes','No') DEFAULT 'No',
  `allow_2checkout` enum('Yes','No') DEFAULT 'No',
  `allow_authorize` enum('Yes','No') DEFAULT 'No',
  `allow_ccavenue` enum('Yes','No') DEFAULT 'No',
  `allow_braintree` enum('Yes','No') DEFAULT 'No',
  `allow_mollie` enum('Yes','No') DEFAULT 'No',
  `allow_payumoney` enum('Yes','No') DEFAULT 'Yes',
  `recommended` enum('Yes','No') DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_frontend_slider`
--

CREATE TABLE `tbl_frontend_slider` (
  `id` int(11) NOT NULL,
  `title` varchar(350) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `slider` text DEFAULT NULL,
  `button_one` varchar(200) DEFAULT NULL,
  `button_one_link` varchar(50) DEFAULT NULL,
  `button_two` varchar(250) DEFAULT NULL,
  `button_two_link` varchar(250) DEFAULT NULL,
  `sort` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_frontend_slider`
--

INSERT INTO `tbl_frontend_slider` (`id`, `title`, `description`, `slider`, `button_one`, `button_one_link`, `button_two`, `button_two_link`, `sort`, `status`) VALUES
(1, 'Ultimate ERP Solution', 'The application you need to manage your busines. We have bundled all the features you need into easy to use, beautifully designed plateform', 'uploads/6.jpg', 'Live Demo', '', 'Free trial', '', 1, 1),
(3, 'Grow Your Business With Right Solution', 'The application you need to manage your busines. We have bundled all the features you need into easy to use, beautifully designed plateform', 'uploads/1.jpg', 'Live Demo', '', 'Free trial', '', 0, 1),
(4, 'Helping Small Businesses to Grow', 'We provide comprehensive business & financial solutions with our expert over 10 years experience', 'uploads/5.jpg', 'Live Demo', '', 'Free trial', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_goal_tracking`
--

CREATE TABLE `tbl_goal_tracking` (
  `goal_tracking_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `subject` varchar(200) NOT NULL,
  `goal_type_id` int(11) NOT NULL,
  `achievement` int(10) NOT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `account_id` int(11) DEFAULT 0,
  `description` mediumtext NOT NULL,
  `notify_goal_achive` varchar(5) DEFAULT NULL,
  `notify_goal_not_achive` varchar(5) DEFAULT NULL,
  `permission` mediumtext DEFAULT NULL,
  `email_send` varchar(5) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_goal_type`
--

CREATE TABLE `tbl_goal_type` (
  `goal_type_id` int(11) NOT NULL,
  `type_name` varchar(200) NOT NULL,
  `description` mediumtext NOT NULL,
  `tbl_name` varchar(200) NOT NULL,
  `query` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_goal_type`
--

INSERT INTO `tbl_goal_type` (`goal_type_id`, `type_name`, `description`, `tbl_name`, `query`) VALUES
(1, 'achive_total_income', 'to get total income report from this start and end date and notify user. ', 'tbl_transactions', 'Income'),
(2, 'achive_total_income_by_bank', 'to get total income report from this start and end date and notify user. ', 'tbl_transactions', 'Income'),
(3, 'achieve_total_expense', 'to get total expense report from this start and end date and notify user. ', 'tbl_transactions', 'Expense'),
(4, 'achive_total_expense_by_bank', 'to get total expense report from this start and end date and notify user. ', 'tbl_transactions', 'Expense'),
(5, 'make_invoice', 'to get targeted invoice from this start and end date and notify user. ', 'tbl_invoices', NULL),
(6, 'make_estimate', 'to get targeted estimate from this start and end date and notify user.', 'tbl_estimates', NULL),
(7, 'goal_payment', 'to get total payment report from this start and end date and notify user. ', 'tbl_payments', NULL),
(8, 'task_done', 'to get total done tasks report from this start and end date and notify user. ', 'tbl_task', NULL),
(9, 'resolved_bugs', 'to get total resolve bugs report from this start and end date and notify user. ', 'tbl_bug', NULL),
(10, 'convert_leads_to_client', 'to get total Convert leads to client report from this start and end date and notify user. ', 'tbl_client', NULL),
(11, 'direct_client', 'to get total client report from this start and end date and notify user. ', 'tbl_client', NULL),
(12, 'complete_project_goal', 'to get total complete project report from this start and end date and notify user. ', 'tbl_project', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_holiday`
--

CREATE TABLE `tbl_holiday` (
  `holiday_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `event_name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `color` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hourly_rate`
--

CREATE TABLE `tbl_hourly_rate` (
  `hourly_rate_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `hourly_grade` varchar(200) NOT NULL,
  `hourly_rate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inbox`
--

CREATE TABLE `tbl_inbox` (
  `inbox_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `to` varchar(100) NOT NULL,
  `from` varchar(100) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `message_body` text NOT NULL,
  `attach_file` varchar(200) DEFAULT NULL,
  `attach_file_path` text DEFAULT NULL,
  `attach_filename` text DEFAULT NULL,
  `message_time` datetime NOT NULL,
  `view_status` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1=Read 2=Unread',
  `favourites` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0= no 1=yes',
  `notify_me` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=on 0=off',
  `deleted` enum('Yes','No') NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_income_category`
--

CREATE TABLE `tbl_income_category` (
  `income_category_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `income_category` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoices`
--

CREATE TABLE `tbl_invoices` (
  `invoices_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `recur_start_date` timestamp NULL DEFAULT NULL,
  `recur_end_date` timestamp NULL DEFAULT NULL,
  `reference_no` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `invoice_date` timestamp NULL DEFAULT NULL,
  `invoice_month` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `invoice_year` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `due_date` timestamp NULL DEFAULT NULL,
  `alert_overdue` tinyint(1) NOT NULL DEFAULT 0,
  `notes` text COLLATE utf8_unicode_ci NOT NULL,
  `tax` decimal(10,2) NOT NULL DEFAULT 0.00,
  `total_tax` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `discount_percent` int(2) DEFAULT NULL,
  `recurring` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `recuring_frequency` int(11) NOT NULL DEFAULT 31,
  `recur_frequency` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `recur_next_date` timestamp NULL DEFAULT NULL,
  `currency` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'USD',
  `status` enum('Cancelled','Unpaid','Paid','draft','partially_paid') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Unpaid',
  `archived` int(11) DEFAULT 0,
  `date_sent` timestamp NULL DEFAULT NULL,
  `inv_deleted` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `date_saved` timestamp NOT NULL DEFAULT current_timestamp(),
  `emailed` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `show_client` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Yes',
  `viewed` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `allow_paypal` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Yes',
  `allow_stripe` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Yes',
  `allow_2checkout` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Yes',
  `allow_authorize` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `allow_ccavenue` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `allow_braintree` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `allow_mollie` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT 'No',
  `allow_payumoney` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT 'No',
  `permission` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `client_visible` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT 'No',
  `discount_type` enum('before_tax','after_tax') COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0 COMMENT 'sales agent',
  `adjustment` decimal(18,2) NOT NULL DEFAULT 0.00,
  `discount_total` decimal(18,2) NOT NULL DEFAULT 0.00,
  `show_quantity_as` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_items`
--

CREATE TABLE `tbl_items` (
  `items_id` int(11) NOT NULL,
  `invoices_id` int(11) NOT NULL,
  `item_tax_rate` decimal(10,2) NOT NULL DEFAULT 0.00,
  `item_tax_name` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `item_tax_total` decimal(10,2) NOT NULL DEFAULT 0.00,
  `quantity` decimal(10,2) DEFAULT 0.00,
  `total_cost` decimal(10,2) DEFAULT 0.00,
  `item_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'Item Name',
  `item_desc` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit_cost` decimal(10,2) DEFAULT 0.00,
  `order` int(11) DEFAULT 0,
  `date_saved` timestamp NOT NULL DEFAULT current_timestamp(),
  `unit` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hsn_code` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `saved_items_id` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item_history`
--

CREATE TABLE `tbl_item_history` (
  `item_history_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `stock_id` int(11) NOT NULL,
  `inventory` int(5) NOT NULL,
  `purchase_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_appliactions`
--

CREATE TABLE `tbl_job_appliactions` (
  `job_appliactions_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `job_circular_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `cover_letter` text NOT NULL,
  `resume` text NOT NULL,
  `application_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=pending 1=accept 2 = reject',
  `apply_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `send_email` varchar(20) DEFAULT NULL,
  `interview_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_circular`
--

CREATE TABLE `tbl_job_circular` (
  `job_circular_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `job_title` varchar(200) NOT NULL,
  `designations_id` int(11) NOT NULL,
  `vacancy_no` varchar(50) NOT NULL,
  `posted_date` timestamp NULL DEFAULT NULL,
  `employment_type` enum('contractual','full_time','part_time') NOT NULL DEFAULT 'full_time',
  `experience` varchar(200) DEFAULT NULL,
  `age` varchar(200) DEFAULT NULL,
  `salary_range` varchar(200) DEFAULT NULL,
  `last_date` timestamp NULL DEFAULT NULL,
  `description` text NOT NULL,
  `status` enum('published','unpublished') NOT NULL DEFAULT 'unpublished' COMMENT '1=publish 2=unpublish',
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `permission` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kb_category`
--

CREATE TABLE `tbl_kb_category` (
  `kb_category_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `category` varchar(200) NOT NULL,
  `description` longtext DEFAULT NULL,
  `type` varchar(50) NOT NULL,
  `sort` int(2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_knowledgebase`
--

CREATE TABLE `tbl_knowledgebase` (
  `kb_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `kb_category_id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `attachments` text DEFAULT NULL,
  `for_all` enum('Yes','No') DEFAULT 'No',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `total_view` int(11) NOT NULL DEFAULT 0,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `sort` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_languages`
--

CREATE TABLE `tbl_languages` (
  `code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` int(2) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_languages`
--

INSERT INTO `tbl_languages` (`code`, `companies_id`, `name`, `icon`, `active`) VALUES
('ar', NULL, 'arabic', 'ae', 1),
('cs', NULL, 'czech', 'cz', 0),
('da', NULL, 'danish', 'dk', 0),
('de', NULL, 'german', 'at', 1),
('el', NULL, 'greek', 'cy', 0),
('en', NULL, 'english', 'us', 1),
('es', NULL, 'spanish', 'ar', 0),
('fr', NULL, 'french', 'be', 0),
('gu', NULL, 'gujarati', 'in', 0),
('hi', NULL, 'hindi', 'in', 0),
('id', NULL, 'indonesian', 'id', 0),
('it', NULL, 'italian', 'ch', 0),
('ja', NULL, 'japanese', 'jp', 0),
('nl', NULL, 'dutch', 'aw', 0),
('no', NULL, 'norwegian', 'no', 0),
('pl', NULL, 'polish', 'pl', 0),
('pt', NULL, 'portuguese', 'br', 0),
('ro', NULL, 'romanian', 'md', 0),
('ru', NULL, 'russian', 'ru', 0),
('tr', NULL, 'turkish', 'cy', 0),
('zh', NULL, 'chinese', 'cn', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leads`
--

CREATE TABLE `tbl_leads` (
  `leads_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `lead_name` varchar(50) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `organization` varchar(50) NOT NULL,
  `lead_status_id` int(11) DEFAULT NULL,
  `lead_source_id` int(11) DEFAULT NULL,
  `company_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `country` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(32) NOT NULL,
  `mobile` varchar(32) NOT NULL,
  `facebook` varchar(32) NOT NULL,
  `notes` text NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `skype` varchar(200) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `permission` text DEFAULT NULL,
  `converted_client_id` int(11) NOT NULL DEFAULT 0,
  `index_no` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lead_source`
--

CREATE TABLE `tbl_lead_source` (
  `lead_source_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `lead_source` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lead_status`
--

CREATE TABLE `tbl_lead_status` (
  `lead_status_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `lead_status` varchar(50) NOT NULL,
  `lead_type` varchar(20) DEFAULT NULL,
  `order_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leave_application`
--

CREATE TABLE `tbl_leave_application` (
  `leave_application_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `leave_category_id` int(2) NOT NULL,
  `reason` text NOT NULL,
  `leave_type` enum('single_day','multiple_days','hours') NOT NULL DEFAULT 'single_day',
  `hours` varchar(20) DEFAULT NULL,
  `leave_start_date` timestamp NULL DEFAULT NULL,
  `leave_end_date` timestamp NULL DEFAULT NULL,
  `application_status` int(2) NOT NULL DEFAULT 1 COMMENT '1=pending,2=accepted 3=rejected',
  `view_status` tinyint(1) NOT NULL DEFAULT 2,
  `application_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `attachment` text DEFAULT NULL,
  `comments` text DEFAULT NULL,
  `approve_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leave_category`
--

CREATE TABLE `tbl_leave_category` (
  `leave_category_id` int(2) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `leave_category` varchar(100) NOT NULL,
  `leave_quota` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_locales`
--

CREATE TABLE `tbl_locales` (
  `locale` varchar(10) NOT NULL,
  `code` varchar(10) DEFAULT NULL,
  `language` varchar(100) DEFAULT NULL,
  `name` varchar(250) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_locales`
--

INSERT INTO `tbl_locales` (`locale`, `code`, `language`, `name`) VALUES
('aa_DJ', 'aa', 'afar', 'Afar (Djibouti)'),
('aa_ER', 'aa', 'afar', 'Afar (Eritrea)'),
('aa_ET', 'aa', 'afar', 'Afar (Ethiopia)'),
('af_ZA', 'af', 'afrikaans', 'Afrikaans (South Africa)'),
('am_ET', 'am', 'amharic', 'Amharic (Ethiopia)'),
('an_ES', 'an', 'aragonese', 'Aragonese (Spain)'),
('ar_AE', 'ar', 'arabic', 'Arabic (United Arab Emirates)'),
('ar_BH', 'ar', 'arabic', 'Arabic (Bahrain)'),
('ar_DZ', 'ar', 'arabic', 'Arabic (Algeria)'),
('ar_EG', 'ar', 'arabic', 'Arabic (Egypt)'),
('ar_IN', 'ar', 'arabic', 'Arabic (India)'),
('ar_IQ', 'ar', 'arabic', 'Arabic (Iraq)'),
('ar_JO', 'ar', 'arabic', 'Arabic (Jordan)'),
('ar_KW', 'ar', 'arabic', 'Arabic (Kuwait)'),
('ar_LB', 'ar', 'arabic', 'Arabic (Lebanon)'),
('ar_LY', 'ar', 'arabic', 'Arabic (Libya)'),
('ar_MA', 'ar', 'arabic', 'Arabic (Morocco)'),
('ar_OM', 'ar', 'arabic', 'Arabic (Oman)'),
('ar_QA', 'ar', 'arabic', 'Arabic (Qatar)'),
('ar_SA', 'ar', 'arabic', 'Arabic (Saudi Arabia)'),
('ar_SD', 'ar', 'arabic', 'Arabic (Sudan)'),
('ar_SY', 'ar', 'arabic', 'Arabic (Syria)'),
('ar_TN', 'ar', 'arabic', 'Arabic (Tunisia)'),
('ar_YE', 'ar', 'arabic', 'Arabic (Yemen)'),
('ast_ES', 'ast', 'asturian', 'Asturian (Spain)'),
('as_IN', 'as', 'assamese', 'Assamese (India)'),
('az_AZ', 'az', 'azerbaijani', 'Azerbaijani (Azerbaijan)'),
('az_TR', 'az', 'azerbaijani', 'Azerbaijani (Turkey)'),
('bem_ZM', 'bem', 'bemba', 'Bemba (Zambia)'),
('ber_DZ', 'ber', 'berber', 'Berber (Algeria)'),
('ber_MA', 'ber', 'berber', 'Berber (Morocco)'),
('be_BY', 'be', 'belarusian', 'Belarusian (Belarus)'),
('bg_BG', 'bg', 'bulgarian', 'Bulgarian (Bulgaria)'),
('bn_BD', 'bn', 'bengali', 'Bengali (Bangladesh)'),
('bn_IN', 'bn', 'bengali', 'Bengali (India)'),
('bo_CN', 'bo', 'tibetan', 'Tibetan (China)'),
('bo_IN', 'bo', 'tibetan', 'Tibetan (India)'),
('br_FR', 'br', 'breton', 'Breton (France)'),
('bs_BA', 'bs', 'bosnian', 'Bosnian (Bosnia and Herzegovina)'),
('byn_ER', 'byn', 'blin', 'Blin (Eritrea)'),
('ca_AD', 'ca', 'catalan', 'Catalan (Andorra)'),
('ca_ES', 'ca', 'catalan', 'Catalan (Spain)'),
('ca_FR', 'ca', 'catalan', 'Catalan (France)'),
('ca_IT', 'ca', 'catalan', 'Catalan (Italy)'),
('crh_UA', 'crh', 'crimean turkish', 'Crimean Turkish (Ukraine)'),
('csb_PL', 'csb', 'kashubian', 'Kashubian (Poland)'),
('cs_CZ', 'cs', 'czech', 'Czech (Czech Republic)'),
('cv_RU', 'cv', 'chuvash', 'Chuvash (Russia)'),
('cy_GB', 'cy', 'welsh', 'Welsh (United Kingdom)'),
('da_DK', 'da', 'danish', 'Danish (Denmark)'),
('de_AT', 'de', 'german', 'German (Austria)'),
('de_BE', 'de', 'german', 'German (Belgium)'),
('de_CH', 'de', 'german', 'German (Switzerland)'),
('de_DE', 'de', 'german', 'German (Germany)'),
('de_LI', 'de', 'german', 'German (Liechtenstein)'),
('de_LU', 'de', 'german', 'German (Luxembourg)'),
('dv_MV', 'dv', 'divehi', 'Divehi (Maldives)'),
('dz_BT', 'dz', 'dzongkha', 'Dzongkha (Bhutan)'),
('ee_GH', 'ee', 'ewe', 'Ewe (Ghana)'),
('el_CY', 'el', 'greek', 'Greek (Cyprus)'),
('el_GR', 'el', 'greek', 'Greek (Greece)'),
('en_AG', 'en', 'english', 'English (Antigua and Barbuda)'),
('en_AS', 'en', 'english', 'English (American Samoa)'),
('en_AU', 'en', 'english', 'English (Australia)'),
('en_BW', 'en', 'english', 'English (Botswana)'),
('en_CA', 'en', 'english', 'English (Canada)'),
('en_DK', 'en', 'english', 'English (Denmark)'),
('en_GB', 'en', 'english', 'English (United Kingdom)'),
('en_GU', 'en', 'english', 'English (Guam)'),
('en_HK', 'en', 'english', 'English (Hong Kong SAR China)'),
('en_IE', 'en', 'english', 'English (Ireland)'),
('en_IN', 'en', 'english', 'English (India)'),
('en_JM', 'en', 'english', 'English (Jamaica)'),
('en_MH', 'en', 'english', 'English (Marshall Islands)'),
('en_MP', 'en', 'english', 'English (Northern Mariana Islands)'),
('en_MU', 'en', 'english', 'English (Mauritius)'),
('en_NG', 'en', 'english', 'English (Nigeria)'),
('en_NZ', 'en', 'english', 'English (New Zealand)'),
('en_PH', 'en', 'english', 'English (Philippines)'),
('en_SG', 'en', 'english', 'English (Singapore)'),
('en_TT', 'en', 'english', 'English (Trinidad and Tobago)'),
('en_US', 'en', 'english', 'English (United States)'),
('en_VI', 'en', 'english', 'English (Virgin Islands)'),
('en_ZA', 'en', 'english', 'English (South Africa)'),
('en_ZM', 'en', 'english', 'English (Zambia)'),
('en_ZW', 'en', 'english', 'English (Zimbabwe)'),
('eo', 'eo', 'esperanto', 'Esperanto'),
('es_AR', 'es', 'spanish', 'Spanish (Argentina)'),
('es_BO', 'es', 'spanish', 'Spanish (Bolivia)'),
('es_CL', 'es', 'spanish', 'Spanish (Chile)'),
('es_CO', 'es', 'spanish', 'Spanish (Colombia)'),
('es_CR', 'es', 'spanish', 'Spanish (Costa Rica)'),
('es_DO', 'es', 'spanish', 'Spanish (Dominican Republic)'),
('es_EC', 'es', 'spanish', 'Spanish (Ecuador)'),
('es_ES', 'es', 'spanish', 'Spanish (Spain)'),
('es_GT', 'es', 'spanish', 'Spanish (Guatemala)'),
('es_HN', 'es', 'spanish', 'Spanish (Honduras)'),
('es_MX', 'es', 'spanish', 'Spanish (Mexico)'),
('es_NI', 'es', 'spanish', 'Spanish (Nicaragua)'),
('es_PA', 'es', 'spanish', 'Spanish (Panama)'),
('es_PE', 'es', 'spanish', 'Spanish (Peru)'),
('es_PR', 'es', 'spanish', 'Spanish (Puerto Rico)'),
('es_PY', 'es', 'spanish', 'Spanish (Paraguay)'),
('es_SV', 'es', 'spanish', 'Spanish (El Salvador)'),
('es_US', 'es', 'spanish', 'Spanish (United States)'),
('es_UY', 'es', 'spanish', 'Spanish (Uruguay)'),
('es_VE', 'es', 'spanish', 'Spanish (Venezuela)'),
('et_EE', 'et', 'estonian', 'Estonian (Estonia)'),
('eu_ES', 'eu', 'basque', 'Basque (Spain)'),
('eu_FR', 'eu', 'basque', 'Basque (France)'),
('fa_AF', 'fa', 'persian', 'Persian (Afghanistan)'),
('fa_IR', 'fa', 'persian', 'Persian (Iran)'),
('ff_SN', 'ff', 'fulah', 'Fulah (Senegal)'),
('fil_PH', 'fil', 'filipino', 'Filipino (Philippines)'),
('fi_FI', 'fi', 'finnish', 'Finnish (Finland)'),
('fo_FO', 'fo', 'faroese', 'Faroese (Faroe Islands)'),
('fr_BE', 'fr', 'french', 'French (Belgium)'),
('fr_BF', 'fr', 'french', 'French (Burkina Faso)'),
('fr_BI', 'fr', 'french', 'French (Burundi)'),
('fr_BJ', 'fr', 'french', 'French (Benin)'),
('fr_CA', 'fr', 'french', 'French (Canada)'),
('fr_CF', 'fr', 'french', 'French (Central African Republic)'),
('fr_CG', 'fr', 'french', 'French (Congo)'),
('fr_CH', 'fr', 'french', 'French (Switzerland)'),
('fr_CM', 'fr', 'french', 'French (Cameroon)'),
('fr_FR', 'fr', 'french', 'French (France)'),
('fr_GA', 'fr', 'french', 'French (Gabon)'),
('fr_GN', 'fr', 'french', 'French (Guinea)'),
('fr_GP', 'fr', 'french', 'French (Guadeloupe)'),
('fr_GQ', 'fr', 'french', 'French (Equatorial Guinea)'),
('fr_KM', 'fr', 'french', 'French (Comoros)'),
('fr_LU', 'fr', 'french', 'French (Luxembourg)'),
('fr_MC', 'fr', 'french', 'French (Monaco)'),
('fr_MG', 'fr', 'french', 'French (Madagascar)'),
('fr_ML', 'fr', 'french', 'French (Mali)'),
('fr_MQ', 'fr', 'french', 'French (Martinique)'),
('fr_NE', 'fr', 'french', 'French (Niger)'),
('fr_SN', 'fr', 'french', 'French (Senegal)'),
('fr_TD', 'fr', 'french', 'French (Chad)'),
('fr_TG', 'fr', 'french', 'French (Togo)'),
('fur_IT', 'fur', 'friulian', 'Friulian (Italy)'),
('fy_DE', 'fy', 'western frisian', 'Western Frisian (Germany)'),
('fy_NL', 'fy', 'western frisian', 'Western Frisian (Netherlands)'),
('ga_IE', 'ga', 'irish', 'Irish (Ireland)'),
('gd_GB', 'gd', 'scottish gaelic', 'Scottish Gaelic (United Kingdom)'),
('gez_ER', 'gez', 'geez', 'Geez (Eritrea)'),
('gez_ET', 'gez', 'geez', 'Geez (Ethiopia)'),
('gl_ES', 'gl', 'galician', 'Galician (Spain)'),
('gu_IN', 'gu', 'gujarati', 'Gujarati (India)'),
('gv_GB', 'gv', 'manx', 'Manx (United Kingdom)'),
('ha_NG', 'ha', 'hausa', 'Hausa (Nigeria)'),
('he_IL', 'he', 'hebrew', 'Hebrew (Israel)'),
('hi_IN', 'hi', 'hindi', 'Hindi (India)'),
('hr_HR', 'hr', 'croatian', 'Croatian (Croatia)'),
('hsb_DE', 'hsb', 'upper sorbian', 'Upper Sorbian (Germany)'),
('ht_HT', 'ht', 'haitian', 'Haitian (Haiti)'),
('hu_HU', 'hu', 'hungarian', 'Hungarian (Hungary)'),
('hy_AM', 'hy', 'armenian', 'Armenian (Armenia)'),
('ia', 'ia', 'interlingua', 'Interlingua'),
('id_ID', 'id', 'indonesian', 'Indonesian (Indonesia)'),
('ig_NG', 'ig', 'igbo', 'Igbo (Nigeria)'),
('ik_CA', 'ik', 'inupiaq', 'Inupiaq (Canada)'),
('is_IS', 'is', 'icelandic', 'Icelandic (Iceland)'),
('it_CH', 'it', 'italian', 'Italian (Switzerland)'),
('it_IT', 'it', 'italian', 'Italian (Italy)'),
('iu_CA', 'iu', 'inuktitut', 'Inuktitut (Canada)'),
('ja_JP', 'ja', 'japanese', 'Japanese (Japan)'),
('ka_GE', 'ka', 'georgian', 'Georgian (Georgia)'),
('kk_KZ', 'kk', 'kazakh', 'Kazakh (Kazakhstan)'),
('kl_GL', 'kl', 'kalaallisut', 'Kalaallisut (Greenland)'),
('km_KH', 'km', 'khmer', 'Khmer (Cambodia)'),
('kn_IN', 'kn', 'kannada', 'Kannada (India)'),
('kok_IN', 'kok', 'konkani', 'Konkani (India)'),
('ko_KR', 'ko', 'korean', 'Korean (South Korea)'),
('ks_IN', 'ks', 'kashmiri', 'Kashmiri (India)'),
('ku_TR', 'ku', 'kurdish', 'Kurdish (Turkey)'),
('kw_GB', 'kw', 'cornish', 'Cornish (United Kingdom)'),
('ky_KG', 'ky', 'kirghiz', 'Kirghiz (Kyrgyzstan)'),
('lg_UG', 'lg', 'ganda', 'Ganda (Uganda)'),
('li_BE', 'li', 'limburgish', 'Limburgish (Belgium)'),
('li_NL', 'li', 'limburgish', 'Limburgish (Netherlands)'),
('lo_LA', 'lo', 'lao', 'Lao (Laos)'),
('lt_LT', 'lt', 'lithuanian', 'Lithuanian (Lithuania)'),
('lv_LV', 'lv', 'latvian', 'Latvian (Latvia)'),
('mai_IN', 'mai', 'maithili', 'Maithili (India)'),
('mg_MG', 'mg', 'malagasy', 'Malagasy (Madagascar)'),
('mi_NZ', 'mi', 'maori', 'Maori (New Zealand)'),
('mk_MK', 'mk', 'macedonian', 'Macedonian (Macedonia)'),
('ml_IN', 'ml', 'malayalam', 'Malayalam (India)'),
('mn_MN', 'mn', 'mongolian', 'Mongolian (Mongolia)'),
('mr_IN', 'mr', 'marathi', 'Marathi (India)'),
('ms_BN', 'ms', 'malay', 'Malay (Brunei)'),
('ms_MY', 'ms', 'malay', 'Malay (Malaysia)'),
('mt_MT', 'mt', 'maltese', 'Maltese (Malta)'),
('my_MM', 'my', 'burmese', 'Burmese (Myanmar)'),
('naq_NA', 'naq', 'namibia', 'Namibia'),
('nb_NO', 'nb', 'norwegian bokm?l', 'Norwegian Bokm?l (Norway)'),
('nds_DE', 'nds', 'low german', 'Low German (Germany)'),
('nds_NL', 'nds', 'low german', 'Low German (Netherlands)'),
('ne_NP', 'ne', 'nepali', 'Nepali (Nepal)'),
('nl_AW', 'nl', 'dutch', 'Dutch (Aruba)'),
('nl_BE', 'nl', 'dutch', 'Dutch (Belgium)'),
('nl_NL', 'nl', 'dutch', 'Dutch (Netherlands)'),
('nn_NO', 'nn', 'norwegian nynorsk', 'Norwegian Nynorsk (Norway)'),
('no_NO', 'no', 'norwegian', 'Norwegian (Norway)'),
('nr_ZA', 'nr', 'south ndebele', 'South Ndebele (South Africa)'),
('nso_ZA', 'nso', 'northern sotho', 'Northern Sotho (South Africa)'),
('oc_FR', 'oc', 'occitan', 'Occitan (France)'),
('om_ET', 'om', 'oromo', 'Oromo (Ethiopia)'),
('om_KE', 'om', 'oromo', 'Oromo (Kenya)'),
('or_IN', 'or', 'oriya', 'Oriya (India)'),
('os_RU', 'os', 'ossetic', 'Ossetic (Russia)'),
('pap_AN', 'pap', 'papiamento', 'Papiamento (Netherlands Antilles)'),
('pa_IN', 'pa', 'punjabi', 'Punjabi (India)'),
('pa_PK', 'pa', 'punjabi', 'Punjabi (Pakistan)'),
('pl_PL', 'pl', 'polish', 'Polish (Poland)'),
('ps_AF', 'ps', 'pashto', 'Pashto (Afghanistan)'),
('pt_BR', 'pt', 'portuguese', 'Portuguese (Brazil)'),
('pt_GW', 'pt', 'portuguese', 'Portuguese (Guinea-Bissau)'),
('pt_PT', 'pt', 'portuguese', 'Portuguese (Portugal)'),
('ro_MD', 'ro', 'romanian', 'Romanian (Moldova)'),
('ro_RO', 'ro', 'romanian', 'Romanian (Romania)'),
('ru_RU', 'ru', 'russian', 'Russian (Russia)'),
('ru_UA', 'ru', 'russian', 'Russian (Ukraine)'),
('rw_RW', 'rw', 'kinyarwanda', 'Kinyarwanda (Rwanda)'),
('sa_IN', 'sa', 'sanskrit', 'Sanskrit (India)'),
('sc_IT', 'sc', 'sardinian', 'Sardinian (Italy)'),
('sd_IN', 'sd', 'sindhi', 'Sindhi (India)'),
('seh_MZ', 'seh', 'sena', 'Sena (Mozambique)'),
('se_NO', 'se', 'northern sami', 'Northern Sami (Norway)'),
('sid_ET', 'sid', 'sidamo', 'Sidamo (Ethiopia)'),
('si_LK', 'si', 'sinhala', 'Sinhala (Sri Lanka)'),
('sk_SK', 'sk', 'slovak', 'Slovak (Slovakia)'),
('sl_SI', 'sl', 'slovenian', 'Slovenian (Slovenia)'),
('sn_ZW', 'sn', 'shona', 'Shona (Zimbabwe)'),
('so_DJ', 'so', 'somali', 'Somali (Djibouti)'),
('so_ET', 'so', 'somali', 'Somali (Ethiopia)'),
('so_KE', 'so', 'somali', 'Somali (Kenya)'),
('so_SO', 'so', 'somali', 'Somali (Somalia)'),
('sq_AL', 'sq', 'albanian', 'Albanian (Albania)'),
('sq_MK', 'sq', 'albanian', 'Albanian (Macedonia)'),
('sr_BA', 'sr', 'serbian', 'Serbian (Bosnia and Herzegovina)'),
('sr_ME', 'sr', 'serbian', 'Serbian (Montenegro)'),
('sr_RS', 'sr', 'serbian', 'Serbian (Serbia)'),
('ss_ZA', 'ss', 'swati', 'Swati (South Africa)'),
('st_ZA', 'st', 'southern sotho', 'Southern Sotho (South Africa)'),
('sv_FI', 'sv', 'swedish', 'Swedish (Finland)'),
('sv_SE', 'sv', 'swedish', 'Swedish (Sweden)'),
('sw_KE', 'sw', 'swahili', 'Swahili (Kenya)'),
('sw_TZ', 'sw', 'swahili', 'Swahili (Tanzania)'),
('ta_IN', 'ta', 'tamil', 'Tamil (India)'),
('teo_UG', 'teo', 'teso', 'Teso (Uganda)'),
('te_IN', 'te', 'telugu', 'Telugu (India)'),
('tg_TJ', 'tg', 'tajik', 'Tajik (Tajikistan)'),
('th_TH', 'th', 'thai', 'Thai (Thailand)'),
('tig_ER', 'tig', 'tigre', 'Tigre (Eritrea)'),
('ti_ER', 'ti', 'tigrinya', 'Tigrinya (Eritrea)'),
('ti_ET', 'ti', 'tigrinya', 'Tigrinya (Ethiopia)'),
('tk_TM', 'tk', 'turkmen', 'Turkmen (Turkmenistan)'),
('tl_PH', 'tl', 'tagalog', 'Tagalog (Philippines)'),
('tn_ZA', 'tn', 'tswana', 'Tswana (South Africa)'),
('to_TO', 'to', 'tongan', 'Tongan (Tonga)'),
('tr_CY', 'tr', 'turkish', 'Turkish (Cyprus)'),
('tr_TR', 'tr', 'turkish', 'Turkish (Turkey)'),
('ts_ZA', 'ts', 'tsonga', 'Tsonga (South Africa)'),
('tt_RU', 'tt', 'tatar', 'Tatar (Russia)'),
('ug_CN', 'ug', 'uighur', 'Uighur (China)'),
('uk_UA', 'uk', 'ukrainian', 'Ukrainian (Ukraine)'),
('ur_PK', 'ur', 'urdu', 'Urdu (Pakistan)'),
('uz_UZ', 'uz', 'uzbek', 'Uzbek (Uzbekistan)'),
('ve_ZA', 've', 'venda', 'Venda (South Africa)'),
('vi_VN', 'vi', 'vietnamese', 'Vietnamese (Vietnam)'),
('wa_BE', 'wa', 'walloon', 'Walloon (Belgium)'),
('wo_SN', 'wo', 'wolof', 'Wolof (Senegal)'),
('xh_ZA', 'xh', 'xhosa', 'Xhosa (South Africa)'),
('yi_US', 'yi', 'yiddish', 'Yiddish (United States)'),
('yo_NG', 'yo', 'yoruba', 'Yoruba (Nigeria)'),
('zh_CN', 'zh', 'chinese', 'Chinese (China)'),
('zh_HK', 'zh', 'chinese', 'Chinese (Hong Kong SAR China)'),
('zh_SG', 'zh', 'chinese', 'Chinese (Singapore)'),
('zh_TW', 'zh', 'chinese', 'Chinese (Taiwan)'),
('zu_ZA', 'zu', 'zulu', 'Zulu (South Africa)');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manufacturer`
--

CREATE TABLE `tbl_manufacturer` (
  `manufacturer_id` int(5) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `manufacturer` varchar(100) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `menu_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `label` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `parent` int(11) NOT NULL DEFAULT 0,
  `sort` int(11) NOT NULL DEFAULT 0,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(1) DEFAULT 1 COMMENT '1= active 0=inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`menu_id`, `companies_id`, `label`, `link`, `icon`, `parent`, `sort`, `time`, `status`) VALUES
(1, NULL, 'dashboard', 'admin/dashboard', 'fa fa-dashboard', 0, 0, '2018-10-19 17:41:54', 1),
(2, NULL, 'calendar', 'admin/calendar', 'fa fa-calendar', 0, 1, '2018-10-19 17:42:57', 1),
(4, NULL, 'client', 'admin/client/manage_client', 'fa fa-users', 0, 11, '2018-11-25 08:43:03', 1),
(5, NULL, 'mailbox', 'admin/mailbox', 'fa fa-envelope-o', 0, 2, '2018-11-21 02:16:07', 1),
(6, NULL, 'tickets', '#', 'fa fa-ticket', 0, 12, '2018-11-25 08:43:03', 1),
(7, NULL, 'all_tickets', 'admin/tickets', 'fa fa-ticket', 6, 0, '2018-10-19 17:41:54', 1),
(8, NULL, 'answered', 'admin/tickets/answered', 'fa fa-circle-o', 6, 1, '2018-10-19 17:41:54', 1),
(9, NULL, 'open', 'admin/tickets/open', 'fa fa-circle-o', 6, 2, '2018-10-19 17:41:54', 1),
(10, NULL, 'in_progress', 'admin/tickets/in_progress', 'fa fa-circle-o', 6, 3, '2018-10-19 17:41:54', 1),
(11, NULL, 'closed', 'admin/tickets/closed', 'fa fa-circle-o', 6, 4, '2018-10-19 17:41:54', 1),
(12, NULL, 'sales', '#', 'fa fa-shopping-cart', 0, 5, '2018-11-21 23:55:47', 1),
(13, NULL, 'invoice', 'admin/invoice/manage_invoice', 'fa fa-circle-o', 12, 1, '2018-11-21 02:16:07', 1),
(14, NULL, 'estimates', 'admin/estimates', 'fa fa-circle-o', 12, 2, '2018-11-21 02:16:07', 1),
(15, NULL, 'payments_received', 'admin/invoice/all_payments', 'fa fa-circle-o', 12, 3, '2018-11-21 02:16:07', 1),
(16, NULL, 'tax_rates', 'admin/invoice/tax_rates', 'fa fa-circle-o', 12, 4, '2018-11-21 02:16:07', 1),
(21, NULL, 'quotations', '#', 'fa fa-paste', 12, 5, '2018-11-21 02:16:07', 1),
(22, NULL, 'quotations_list', 'admin/quotations', 'fa fa-circle-o', 21, 0, '2017-05-18 15:19:03', 1),
(23, NULL, 'quotations_form', 'admin/quotations/quotations_form', 'fa fa-circle-o', 21, 1, '2016-05-30 07:20:23', 1),
(24, NULL, 'user', 'admin/user/user_list', 'fa fa-users', 0, 28, '2018-11-25 04:10:18', 1),
(25, NULL, 'settings', 'admin/settings', 'fa fa-cogs', 0, 29, '2018-11-25 08:43:03', 1),
(26, NULL, 'database_backup', 'admin/settings/database_backup', 'fa fa-database', 0, 27, '2018-11-25 08:43:03', 1),
(29, NULL, 'transactions', '#', 'fa fa-building-o', 0, 6, '2018-11-25 04:10:18', 1),
(30, NULL, 'deposit', 'admin/transactions/deposit', 'fa fa-circle-o', 29, 0, '2018-10-19 17:40:38', 1),
(31, NULL, 'expense', 'admin/transactions/expense', 'fa fa-circle-o', 29, 1, '2018-10-19 17:40:38', 1),
(32, NULL, 'transfer', 'admin/transactions/transfer', 'fa fa-circle-o', 29, 2, '2018-10-19 17:24:50', 1),
(33, NULL, 'transactions_report', 'admin/transactions/transactions_report', 'fa fa-circle-o', 29, 3, '2018-10-19 17:24:50', 1),
(34, NULL, 'balance_sheet', 'admin/transactions/balance_sheet', 'fa fa-circle-o', 29, 4, '2018-10-19 17:40:38', 1),
(36, NULL, 'bank_cash', 'admin/account/manage_account', 'fa fa-money', 29, 5, '2018-10-19 17:40:38', 1),
(39, NULL, 'items', 'admin/items/items_list', 'fa fa-cube', 148, 0, '2018-10-19 17:43:04', 1),
(42, NULL, 'report', '#', 'fa fa-bar-chart', 0, 14, '2018-11-25 08:43:03', 1),
(43, NULL, 'account_statement', 'admin/report/account_statement', 'fa fa-circle-o', 146, 0, '2018-10-19 17:24:50', 1),
(44, NULL, 'income_report', 'admin/report/income_report', 'fa fa-circle-o', 146, 1, '2018-10-19 17:24:50', 1),
(45, NULL, 'expense_report', 'admin/report/expense_report', 'fa fa-circle-o', 146, 2, '2018-10-19 17:24:50', 1),
(46, NULL, 'income_expense', 'admin/report/income_expense', 'fa fa-circle-o', 146, 3, '2018-10-19 17:24:50', 1),
(47, NULL, 'date_wise_report', 'admin/report/date_wise_report', 'fa fa-circle-o', 146, 4, '2018-10-19 17:24:50', 1),
(48, NULL, 'all_income', 'admin/report/all_income', 'fa fa-circle-o', 146, 5, '2018-10-19 17:24:50', 1),
(49, NULL, 'all_expense', 'admin/report/all_expense', 'fa fa-circle-o', 146, 6, '2018-10-19 17:24:50', 1),
(50, NULL, 'all_transaction', 'admin/report/all_transaction', 'fa fa-circle-o', 146, 7, '2018-10-19 17:24:50', 1),
(51, NULL, 'recurring_invoice', 'admin/invoice/recurring_invoice', 'fa fa-circle-o', 12, 6, '2018-11-21 02:16:07', 1),
(52, NULL, 'transfer_report', 'admin/transactions/transfer_report', 'fa fa-circle-o', 29, 6, '2018-10-19 17:40:38', 1),
(53, NULL, 'report_by_month', 'admin/report/report_by_month', 'fa fa-circle-o', 146, 8, '2018-10-19 17:24:50', 1),
(54, NULL, 'tasks', 'admin/tasks/all_task', 'fa fa-tasks', 0, 15, '2018-11-25 08:43:03', 1),
(55, NULL, 'leads', 'admin/leads', 'fa fa-rocket', 0, 10, '2018-11-25 08:43:03', 1),
(56, NULL, 'opportunities', 'admin/opportunities', 'fa fa-filter', 0, 22, '2018-11-25 08:43:03', 1),
(57, NULL, 'projects', 'admin/projects', 'fa fa-folder-open-o', 0, 9, '2018-11-25 08:43:03', 1),
(58, NULL, 'bugs', 'admin/bugs', 'fa fa-bug', 54, 0, '2018-10-19 17:24:50', 1),
(59, NULL, 'project', '#', 'fa fa-folder-open-o', 0, 13, '2018-11-25 08:43:03', 1),
(60, NULL, 'tasks_report', 'admin/report/tasks_report', 'fa fa-circle-o', 42, 0, '2018-11-21 02:16:07', 1),
(61, NULL, 'bugs_report', 'admin/report/bugs_report', 'fa fa-circle-o', 42, 1, '2018-11-21 02:16:07', 1),
(62, NULL, 'tickets_report', 'admin/report/tickets_report', 'fa fa-circle-o', 42, 2, '2018-11-21 02:16:07', 1),
(63, NULL, 'client_report', 'admin/report/client_report', 'fa fa-circle-o', 42, 3, '2018-11-21 02:16:07', 1),
(66, NULL, 'tasks_assignment', 'admin/report/tasks_assignment', 'fa fa-dot-circle-o', 59, 0, '2018-10-19 17:24:50', 1),
(67, NULL, 'bugs_assignment', 'admin/report/bugs_assignment', 'fa fa-dot-circle-o', 59, 1, '2018-10-19 17:24:50', 1),
(68, NULL, 'project_report', 'admin/report/project_report', 'fa fa-dot-circle-o', 59, 2, '2018-10-19 17:24:50', 1),
(69, NULL, 'goal_tracking', 'admin/goal_tracking', 'fa fa-shield', 73, 0, '2018-10-19 17:40:38', 1),
(70, NULL, 'departments', 'admin/departments', 'fa fa-user-secret', 0, 23, '2018-11-25 08:43:03', 1),
(71, NULL, 'holiday', 'admin/holiday', 'fa fa-calendar-plus-o', 73, 1, '2018-10-19 17:40:38', 1),
(72, NULL, 'leave_management', 'admin/leave_management', 'fa fa-plane', 0, 24, '2018-11-25 08:43:03', 1),
(73, NULL, 'utilities', '#', 'fa fa-gift', 0, 17, '2018-11-25 08:43:03', 1),
(74, NULL, 'overtime', 'admin/utilities/overtime', 'fa fa-clock-o', 89, 0, '2018-10-19 17:40:38', 1),
(75, NULL, 'stock', '#', 'fa fa-codepen', 0, 8, '2018-11-25 08:43:03', 1),
(76, NULL, 'stock_category', 'admin/stock/stock_category', 'fa fa-sliders', 75, 0, '2018-10-19 17:24:50', 1),
(77, NULL, 'manage_stock', '#', 'fa fa-archive', 75, 1, '2018-10-19 17:40:38', 1),
(78, NULL, 'assign_stock', '#', 'fa fa-align-left', 75, 2, '2018-10-19 17:40:38', 1),
(79, NULL, 'stock_report', 'admin/stock/report', 'fa fa-line-chart', 75, 3, '2018-10-19 17:40:38', 1),
(81, NULL, 'stock_list', 'admin/stock/stock_list', 'fa fa-stack-exchange', 75, 4, '2018-10-19 17:40:38', 1),
(82, NULL, 'assign_stock', 'admin/stock/assign_stock', 'fa fa-align-left', 78, 0, '2018-10-19 17:24:50', 1),
(83, NULL, 'assign_stock_report', 'admin/stock/assign_stock_report', 'fa fa-bar-chart', 78, 1, '2018-10-19 17:24:50', 1),
(84, NULL, 'stock_history', 'admin/stock/stock_history', 'fa fa-file-text-o', 77, 0, '2018-10-19 17:24:50', 1),
(85, NULL, 'performance', '#', 'fa fa-dribbble', 0, 18, '2018-11-25 08:43:03', 1),
(86, NULL, 'performance_indicator', 'admin/performance/performance_indicator', 'fa fa-random', 85, 0, '2018-10-19 17:24:50', 1),
(87, NULL, 'performance_report', 'admin/performance/performance_report', 'fa fa-calendar-o', 85, 1, '2018-10-19 17:40:38', 1),
(88, NULL, 'give_appraisal', 'admin/performance/give_performance_appraisal', 'fa fa-plus', 85, 2, '2018-10-19 17:40:38', 1),
(89, NULL, 'payroll', '#', 'fa fa-usd', 0, 16, '2018-11-25 08:43:03', 1),
(90, NULL, 'manage_salary_details', 'admin/payroll/manage_salary_details', 'fa fa-usd', 89, 1, '2018-10-19 17:40:38', 1),
(91, NULL, 'employee_salary_list', 'admin/payroll/employee_salary_list', 'fa fa-user-secret', 89, 2, '2018-10-19 17:40:38', 1),
(92, NULL, 'make_payment', 'admin/payroll/make_payment', 'fa fa-tasks', 89, 3, '2018-10-19 17:40:38', 1),
(93, NULL, 'generate_payslip', 'admin/payroll/generate_payslip', 'fa fa-list-ul', 89, 4, '2018-10-19 17:40:38', 1),
(94, NULL, 'salary_template', 'admin/payroll/salary_template', 'fa fa-money', 89, 5, '2018-10-19 17:40:38', 1),
(95, NULL, 'hourly_rate', 'admin/payroll/hourly_rate', 'fa fa-clock-o', 89, 6, '2018-10-19 17:40:38', 1),
(96, NULL, 'payroll_summary', 'admin/payroll/payroll_summary', 'fa fa-camera-retro', 89, 7, '2018-10-19 17:40:38', 1),
(97, NULL, 'provident_fund', 'admin/payroll/provident_fund', 'fa fa-briefcase', 89, 8, '2018-10-19 17:24:50', 1),
(98, NULL, 'advance_salary', 'admin/payroll/advance_salary', 'fa fa-cc-mastercard', 89, 9, '2018-10-19 17:40:38', 1),
(99, NULL, 'employee_award', 'admin/award', 'fa fa-trophy', 89, 10, '2018-10-19 17:24:50', 1),
(100, NULL, 'announcements', 'admin/announcements', 'fa fa-bullhorn icon', 0, 4, '2018-11-25 08:43:03', 1),
(101, NULL, 'training', 'admin/training', 'fa fa-suitcase', 0, 25, '2018-11-25 08:43:03', 1),
(102, NULL, 'job_circular', '#', 'fa fa-globe', 0, 19, '2018-11-25 08:43:03', 1),
(103, NULL, 'jobs_posted', 'admin/job_circular/jobs_posted', 'fa fa-ticket', 102, 0, '2018-10-19 17:24:50', 1),
(104, NULL, 'jobs_applications', 'admin/job_circular/jobs_applications', 'fa fa-compass', 102, 1, '2018-10-19 17:24:50', 1),
(105, NULL, 'attendance', '#', 'fa fa-file-text', 0, 20, '2018-11-25 08:43:03', 1),
(106, NULL, 'timechange_request', 'admin/attendance/timechange_request', 'fa fa-calendar-o', 105, 0, '2018-10-19 17:40:38', 1),
(107, NULL, 'attendance_report', 'admin/attendance/attendance_report', 'fa fa-file-text', 105, 1, '2018-10-19 17:40:38', 1),
(108, NULL, 'time_history', 'admin/attendance/time_history', 'fa fa-clock-o', 105, 2, '2018-10-19 17:40:38', 1),
(109, NULL, 'pull-down', '', '', 0, 0, '2018-10-19 17:43:04', 0),
(110, NULL, 'filemanager', 'admin/filemanager', 'fa fa-file', 0, 3, '2018-11-25 08:43:03', 1),
(111, NULL, 'company_details', 'admin/settings', 'fa fa-fw fa-info-circle', 25, 1, '2017-04-25 15:38:46', 2),
(112, NULL, 'system_settings', 'admin/settings/system', 'fa fa-fw fa-desktop', 25, 2, '2017-04-25 15:38:46', 2),
(113, NULL, 'email_settings', 'admin/settings/email', 'fa fa-fw fa-envelope', 25, 3, '2017-04-25 15:38:46', 2),
(114, NULL, 'email_templates', 'admin/settings/templates', 'fa fa-fw fa-pencil-square', 25, 4, '2017-04-25 15:38:46', 2),
(115, NULL, 'email_integration', 'admin/settings/email_integration', 'fa fa-fw fa-envelope-o', 25, 5, '2017-04-25 15:38:46', 2),
(116, NULL, 'payment_settings', 'admin/settings/payments', 'fa fa-fw fa-dollar', 25, 6, '2017-04-25 15:38:46', 2),
(117, NULL, 'invoice_settings', 'admin/settings/invoice', 'fa fa-fw fa-money', 25, 0, '2017-04-25 15:38:46', 2),
(118, NULL, 'estimate_settings', 'admin/settings/estimate', 'fa fa-fw fa-file-o', 25, 0, '2017-04-25 15:38:46', 2),
(119, NULL, 'tickets_leads_settings', 'admin/settings/tickets', 'fa fa-fw fa-ticket', 25, 0, '2017-04-25 15:38:46', 2),
(120, NULL, 'theme_settings', 'admin/settings/theme', 'fa fa-fw fa-code', 25, 0, '2017-04-25 15:38:46', 2),
(121, NULL, 'working_days', 'admin/settings/working_days', 'fa fa-fw fa-calendar', 25, 0, '2017-04-25 15:43:41', 2),
(122, NULL, 'leave_category', 'admin/settings/leave_category', 'fa fa-fw fa-pagelines', 25, 0, '2017-04-25 15:43:41', 2),
(123, NULL, 'income_category', 'admin/settings/income_category', 'fa fa-fw fa-certificate', 25, 0, '2017-04-25 15:43:41', 2),
(124, NULL, 'expense_category', 'admin/settings/expense_category', 'fa fa-fw fa-tasks', 25, 0, '2017-04-25 15:43:41', 2),
(125, NULL, 'customer_group', 'admin/settings/customer_group', 'fa fa-fw fa-users', 25, 0, '2017-04-25 15:43:41', 2),
(126, NULL, 'contract_type', 'admin/settings/contract_type', 'fa fa-fw fa-file-o', 25, 0, '2017-04-25 15:43:41', 2),
(127, NULL, 'lead_status', 'admin/settings/lead_status', 'fa fa-fw fa-list-ul', 25, 0, '2017-04-25 15:43:41', 2),
(128, NULL, 'lead_source', 'admin/settings/lead_source', 'fa fa-fw fa-arrow-down', 25, 0, '2017-04-25 15:43:41', 2),
(129, NULL, 'opportunities_state_reason', 'admin/settings/opportunities_state_reason', 'fa fa-fw fa-dot-circle-o', 25, 0, '2017-04-25 15:43:41', 2),
(130, NULL, 'custom_field', 'admin/settings/custom_field', 'fa fa-fw fa-star-o', 25, 0, '2017-04-25 15:43:41', 2),
(131, NULL, 'payment_method', 'admin/settings/payment_method', 'fa fa-fw fa-money', 25, 0, '2017-04-25 15:43:41', 2),
(132, NULL, 'cronjob', 'admin/settings/cronjob', 'fa fa-fw fa-contao', 25, 0, '2017-04-25 15:46:20', 2),
(133, NULL, 'menu_allocation', 'admin/settings/menu_allocation', 'fa fa-fw fa fa-compass', 25, 0, '2017-04-25 15:46:20', 2),
(134, NULL, 'notification', 'admin/settings/notification', 'fa fa-fw fa-bell-o', 25, 0, '2017-04-25 15:46:20', 2),
(135, NULL, 'email_notification', 'admin/settings/email_notification', 'fa fa-fw fa-bell-o', 25, 0, '2017-04-25 15:46:20', 2),
(136, NULL, 'database_backup', 'admin/settings/database_backup', 'fa fa-fw fa-database', 25, 0, '2017-04-25 15:46:20', 2),
(137, NULL, 'translations', 'admin/settings/translations', 'fa fa-fw fa-language', 25, 0, '2017-04-25 15:46:20', 2),
(138, NULL, 'system_update', 'admin/settings/system_update', 'fa fa-fw fa-pencil-square-o', 25, 0, '2017-04-25 15:46:20', 2),
(139, NULL, 'private_chat', 'chat/conversations', 'fa fa-envelope', 0, 26, '2018-11-25 08:43:03', 1),
(140, NULL, 'proposals', 'admin/proposals', 'fa fa-circle-o', 12, 7, '2018-11-21 02:16:07', 1),
(141, NULL, 'knowledgebase', '#', 'fa fa-question-circle', 0, 21, '2018-11-25 08:43:03', 1),
(142, NULL, 'categories', 'admin/knowledgebase/categories', 'fa fa-circle-o', 141, 0, '2018-10-19 17:40:38', 1),
(143, NULL, 'articles', 'admin/knowledgebase/articles', 'fa fa-circle-o', 141, 1, '2018-10-19 17:24:50', 1),
(144, NULL, 'knowledgebase', 'admin/knowledgebase', 'fa fa-circle-o', 141, 2, '2018-10-19 17:40:38', 1),
(145, NULL, 'dashboard_settings', 'admin/settings/dashboard', 'fa fa-fw fa-dashboard', 25, 11, '2017-04-25 15:38:46', 2),
(146, NULL, 'transactions_r', '#', 'fa fa-building-o', 42, 4, '2018-11-21 02:16:07', 1),
(147, NULL, 'sales_report', 'admin/report/sales_report', 'fa fa-shopping-cart', 42, 5, '2018-11-21 02:16:07', 1),
(148, NULL, 'manage_purchase', '#', 'fa fa-truck', 0, 7, '2018-11-25 08:43:03', 1),
(149, NULL, 'supplier', 'admin/purchase/supplier', 'fa fa-gift', 148, 1, '2018-10-19 17:43:04', 1),
(150, NULL, 'purchase', 'admin/purchase/manage_purchase', 'fa fa-archive', 148, 3, '2018-11-21 02:16:07', 1),
(151, NULL, 'proposals_settings', 'admin/settings/proposals', 'fa fa-fw fa-leaf', 25, 0, '2017-04-25 15:38:46', 2),
(152, NULL, 'purchase_settings', 'admin/settings/purchase', 'fa fa-fw fa-truck', 25, 0, '2017-04-25 15:38:46', 2),
(153, NULL, 'purchase_payment', 'admin/purchase/all_payments', 'fa fa-money', 148, 2, '2018-10-29 16:12:29', 1),
(154, NULL, 'pos_sales', 'admin/invoice/pos_sales', 'fa fa-circle-o', 12, 0, '2018-10-29 16:12:33', 1),
(155, NULL, 'damage_items', 'admin/items/damage_items', 'fa fa-bitbucket', 148, 3, '2018-12-13 09:22:06', 1),
(156, NULL, 'manufacturer', 'admin/settings/manufacturer', 'fa fa-fw fa-empire', 25, 2, '2018-12-13 07:44:13', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mettings`
--

CREATE TABLE `tbl_mettings` (
  `mettings_id` int(11) NOT NULL,
  `leads_id` int(11) DEFAULT NULL,
  `opportunities_id` int(11) DEFAULT NULL,
  `meeting_subject` varchar(200) NOT NULL,
  `attendees` varchar(300) NOT NULL,
  `user_id` int(11) NOT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `location` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_migrations`
--

CREATE TABLE `tbl_migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_migrations`
--

INSERT INTO `tbl_migrations` (`version`) VALUES
(111);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_milestones`
--

CREATE TABLE `tbl_milestones` (
  `milestones_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `milestone_name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `start_date` varchar(20) NOT NULL,
  `end_date` varchar(20) NOT NULL,
  `client_visible` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notes`
--

CREATE TABLE `tbl_notes` (
  `notes_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `is_client` enum('Yes','No') NOT NULL DEFAULT 'No',
  `notes` mediumtext DEFAULT NULL,
  `added_by` int(11) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notifications`
--

CREATE TABLE `tbl_notifications` (
  `notifications_id` int(11) NOT NULL,
  `read` int(11) NOT NULL DEFAULT 0,
  `read_inline` tinyint(1) NOT NULL DEFAULT 0,
  `date` datetime NOT NULL,
  `description` text NOT NULL,
  `from_user_id` int(11) NOT NULL DEFAULT 0,
  `to_user_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(200) DEFAULT NULL,
  `link` text DEFAULT NULL,
  `icon` varchar(200) DEFAULT NULL,
  `value` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_offence_category`
--

CREATE TABLE `tbl_offence_category` (
  `offence_id` int(2) NOT NULL,
  `offence_category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_online_payment`
--

CREATE TABLE `tbl_online_payment` (
  `online_payment_id` int(11) NOT NULL,
  `gateway_name` varchar(20) CHARACTER SET latin1 NOT NULL,
  `icon` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_online_payment`
--

INSERT INTO `tbl_online_payment` (`online_payment_id`, `gateway_name`, `icon`) VALUES
(1, 'paypal', 'paypal.png'),
(2, 'Stripe', 'stripe.jpg'),
(3, '2checkout', '2checkout.jpg'),
(4, 'Authorize.net', 'Authorizenet.png'),
(5, 'CCAvenue', 'CCAvenue.jpg'),
(6, 'Braintree', 'Braintree.png'),
(7, 'Mollie', 'ideal_mollie.png'),
(8, 'PayUmoney', 'payumoney.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_opportunities`
--

CREATE TABLE `tbl_opportunities` (
  `opportunities_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `opportunity_name` varchar(100) NOT NULL,
  `stages` varchar(20) NOT NULL,
  `probability` varchar(20) NOT NULL,
  `close_date` timestamp NULL DEFAULT NULL,
  `opportunities_state_reason_id` int(2) NOT NULL,
  `expected_revenue` decimal(10,2) NOT NULL,
  `new_link` varchar(20) NOT NULL,
  `next_action` varchar(100) NOT NULL,
  `next_action_date` timestamp NULL DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `permission` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_opportunities_state_reason`
--

CREATE TABLE `tbl_opportunities_state_reason` (
  `opportunities_state_reason_id` int(2) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `opportunities_state` varchar(20) NOT NULL,
  `opportunities_state_reason` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_overtime`
--

CREATE TABLE `tbl_overtime` (
  `overtime_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `overtime_date` date NOT NULL,
  `overtime_hours` varchar(20) NOT NULL,
  `notes` text DEFAULT NULL,
  `status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_partners`
--

CREATE TABLE `tbl_partners` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `profile` text DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `linkedin` varchar(50) NOT NULL,
  `dribbble` varchar(50) DEFAULT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_partners`
--

INSERT INTO `tbl_partners` (`id`, `type`, `profile`, `name`, `designation`, `facebook`, `twitter`, `linkedin`, `dribbble`, `description`, `status`) VALUES
(2, 'partners', 'uploads/team2.jpg', 'John Francois', 'CEO & Managing Director', 'https://www.facebook.com/codexcubeit/', 'https://www.facebook.com/codexcubeit/', 'https://www.facebook.com/codexcubeit/', 'https://www.facebook.com/codexcubeit/', 'Since joining Squarespace, David has master minded five Super Bowl campaigns. Prior to Squarespace, David served as Worldwide Digital Executive Creative Director of TBWA Worldwide and as a Creative Director', 1),
(3, 'partners', 'uploads/team3.jpg', 'PEDRO C. VINSON', 'Head of Operations', 'nayem.tct', 'nayem.tct', 'nayem.tct', 'nayem.tct', 'Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet.', 1),
(4, 'partners', 'uploads/team5.jpg', 'JUSTIN W. TUCK', 'CEO & Managing Director', 'nayem.tct', 'nayem.tct', 'nayem.tct', 'nayem.tct', 'Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet.', 1),
(5, 'partners', 'uploads/team6.jpg', 'KATHRYN D. GRACE', 'HR Manager', 'nayem.tct', 'nayem.tct', 'nayem.tct', 'nayem.tct', 'Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet.', 1),
(6, 'team', 'uploads/3_1.jpg', 'Anthony Casalena', 'CHIEF EXECUTIVE OFFICER', 'https://www.facebook.com/codexcubeit/', 'https://www.facebook.com/codexcubeit/', 'https://www.facebook.com/codexcubeit/', 'https://www.facebook.com/codexcubeit/', 'Anthony Casalena is the Founder and CEO of Squarespace, which he started from his dorm room in 2003. During the company’s early years, Anthony acted as the sole engineer, designer, and support representative for the entire Squarespace platform.', 1),
(7, 'team', 'uploads/3_3.jpg', 'Nicole Anasenes', 'CHIEF OPERATING OFFICER', 'https://www.facebook.com/codexcubeit/', 'https://www.facebook.com/codexcubeit/', 'https://www.facebook.com/codexcubeit/', 'https://www.facebook.com/codexcubeit/', 'Nicole brings to Squarespace 20 years of experience building new businesses and transforming legacy business models. Most recently, she served as Chief Financial Officer at Infor, one of the largest providers of enterprise applications in the world.', 1),
(8, 'team', 'uploads/3_4.jpg', 'Raphael Fontes', 'VICE PRESIDENT', 'https://www.facebook.com/codexcubeit/', 'https://www.facebook.com/codexcubeit/', 'https://www.facebook.com/codexcubeit/', 'https://www.facebook.com/codexcubeit/', 'As the leader of Squarespace’s Strategy division, Andrew is responsible for developing the analytical frameworks that shape the company’s business. Since joining Squarespace, he has grown the division into a team that covers everything from business strategy and customer insights to data science.', 1),
(9, 'team', 'uploads/3_2.jpg', 'David Lee', 'CHIEF CREATIVE OFFICER', 'https://www.facebook.com/codexcubeit/', 'https://www.facebook.com/codexcubeit/', 'https://www.facebook.com/codexcubeit/', 'https://www.facebook.com/codexcubeit/', 'As the Chief Creative Officer of Squarespace, David Lee leads the company’s award-winning creative team, whose work encapsulates all brand creative, web design, and product design efforts for the company. In 2017, he was named one of the Most Creative People in Business by Fast Company.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payments`
--

CREATE TABLE `tbl_payments` (
  `payments_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `invoices_id` int(11) NOT NULL,
  `trans_id` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payer_email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_method` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency` varchar(64) COLLATE utf8_unicode_ci DEFAULT 'USD',
  `notes` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_date` timestamp NULL DEFAULT NULL,
  `month_paid` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `year_paid` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `paid_by` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `account_id` int(11) NOT NULL DEFAULT 0 COMMENT 'account_id means tracking deposit from which account'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment_methods`
--

CREATE TABLE `tbl_payment_methods` (
  `payment_methods_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `method_name` varchar(64) NOT NULL DEFAULT 'Paypal'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_payment_methods`
--

INSERT INTO `tbl_payment_methods` (`payment_methods_id`, `companies_id`, `method_name`) VALUES
(1, NULL, 'Online'),
(2, NULL, 'PayPal'),
(3, NULL, 'Payoneer'),
(4, NULL, 'Bank Transfer'),
(5, NULL, 'Cash '),
(6, NULL, 'Stripe');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penalty_category`
--

CREATE TABLE `tbl_penalty_category` (
  `penalty_id` int(2) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `penalty_type` varchar(100) NOT NULL,
  `fine_amount` int(11) NOT NULL,
  `penalty_days` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_performance_apprisal`
--

CREATE TABLE `tbl_performance_apprisal` (
  `performance_appraisal_id` int(5) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `user_id` int(2) NOT NULL,
  `general_remarks` text NOT NULL,
  `appraisal_month` varchar(100) NOT NULL,
  `customer_experiece_management` tinyint(1) DEFAULT NULL COMMENT 'Technical - 1 = Beginner, 2 = Intermediate, 3 = Advanced, 4 = Expert / Leader',
  `marketing` tinyint(1) DEFAULT NULL COMMENT 'Technical - 1 = Beginner, 2 = Intermediate, 3 = Advanced, 4 = Expert / Leader',
  `management` tinyint(1) DEFAULT NULL COMMENT 'Technical - 1 = Beginner, 2 = Intermediate, 3 = Advanced, 4 = Expert / Leader',
  `administration` tinyint(1) DEFAULT NULL COMMENT 'Technical - 1 = Beginner, 2 = Intermediate, 3 = Advanced, 4 = Expert / Leader',
  `presentation_skill` tinyint(1) DEFAULT NULL COMMENT 'Technical - 1 = Beginner, 2 = Intermediate, 3 = Advanced, 4 = Expert / Leader',
  `quality_of_work` tinyint(1) DEFAULT NULL COMMENT 'Technical - 1 = Beginner, 2 = Intermediate, 3 = Advanced, 4 = Expert / Leader',
  `efficiency` tinyint(1) DEFAULT NULL COMMENT 'Technical - 1 = Beginner, 2 = Intermediate, 3 = Advanced, 4 = Expert / Leader',
  `integrity` tinyint(1) DEFAULT NULL COMMENT 'Behavioural - 1 (S) = Satisfactory, 2 (U) = Unsatisfactory, 3 (N) = Needs Improvement',
  `professionalism` tinyint(1) DEFAULT NULL COMMENT 'Behavioural - 1 (S) = Satisfactory, 2 (U) = Unsatisfactory, 3 (N) = Needs Improvement',
  `team_work` tinyint(1) DEFAULT NULL COMMENT 'Behavioural - 1 (S) = Satisfactory, 2 (U) = Unsatisfactory, 3 (N) = Needs Improvement',
  `critical_thinking` tinyint(1) DEFAULT NULL COMMENT 'Behavioural - 1 (S) = Satisfactory, 2 (U) = Unsatisfactory, 3 (N) = Needs Improvement',
  `conflict_management` tinyint(1) DEFAULT NULL COMMENT 'Behavioural - 1 (S) = Satisfactory, 2 (U) = Unsatisfactory, 3 (N) = Needs Improvement',
  `attendance` tinyint(1) DEFAULT NULL COMMENT 'Behavioural - 1 (S) = Satisfactory, 2 (U) = Unsatisfactory, 3 (N) = Needs Improvement',
  `ability_to_meed_deadline` tinyint(1) DEFAULT NULL COMMENT 'Behavioural - 1 (S) = Satisfactory, 2 (U) = Unsatisfactory, 3 (N) = Needs Improvement'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_performance_indicator`
--

CREATE TABLE `tbl_performance_indicator` (
  `performance_indicator_id` int(5) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `designations_id` int(2) NOT NULL,
  `customer_experiece_management` tinyint(1) DEFAULT NULL COMMENT 'Technical - 1 = Beginner, 2 = Intermediate, 3 = Advanced, 4 = Expert / Leader',
  `marketing` tinyint(1) DEFAULT NULL COMMENT 'Technical - 1 = Beginner, 2 = Intermediate, 3 = Advanced, 4 = Expert / Leader',
  `management` tinyint(1) DEFAULT NULL COMMENT 'Technical - 1 = Beginner, 2 = Intermediate, 3 = Advanced, 4 = Expert / Leader',
  `administration` tinyint(1) DEFAULT NULL COMMENT 'Technical - 1 = Beginner, 2 = Intermediate, 3 = Advanced, 4 = Expert / Leader',
  `presentation_skill` tinyint(1) DEFAULT NULL COMMENT 'Technical - 1 = Beginner, 2 = Intermediate, 3 = Advanced, 4 = Expert / Leader',
  `quality_of_work` tinyint(1) DEFAULT NULL COMMENT 'Technical - 1 = Beginner, 2 = Intermediate, 3 = Advanced, 4 = Expert / Leader',
  `efficiency` tinyint(1) DEFAULT NULL COMMENT 'Technical - 1 = Beginner, 2 = Intermediate, 3 = Advanced, 4 = Expert / Leader',
  `integrity` tinyint(1) DEFAULT NULL COMMENT 'Behavioural - 1 = Beginner, 2 = Intermediate, 3 = Advanced',
  `professionalism` tinyint(1) DEFAULT NULL COMMENT 'Behavioural - 1 = Beginner, 2 = Intermediate, 3 = Advanced',
  `team_work` tinyint(1) DEFAULT NULL COMMENT 'Behavioural - 1 = Beginner, 2 = Intermediate, 3 = Advanced',
  `critical_thinking` tinyint(1) DEFAULT NULL COMMENT 'Behavioural - 1 = Beginner, 2 = Intermediate, 3 = Advanced',
  `conflict_management` tinyint(1) DEFAULT NULL COMMENT 'Behavioural - 1 = Beginner, 2 = Intermediate, 3 = Advanced',
  `attendance` tinyint(1) DEFAULT NULL COMMENT 'Behavioural - 1 = Beginner, 2 = Intermediate, 3 = Advanced',
  `ability_to_meed_deadline` tinyint(1) DEFAULT NULL COMMENT 'Behavioural - 1 = Beginner, 2 = Intermediate, 3 = Advanced'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pinaction`
--

CREATE TABLE `tbl_pinaction` (
  `pinaction_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `module_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_priorities`
--

CREATE TABLE `tbl_priorities` (
  `priority` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_priorities`
--

INSERT INTO `tbl_priorities` (`priority`) VALUES
('High'),
('medium'),
('low');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_priority`
--

CREATE TABLE `tbl_priority` (
  `priority_id` int(11) NOT NULL,
  `priority` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_priority`
--

INSERT INTO `tbl_priority` (`priority_id`, `priority`) VALUES
(1, 'High'),
(2, 'Medium'),
(3, 'Low');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_private_chat`
--

CREATE TABLE `tbl_private_chat` (
  `private_chat_id` int(11) NOT NULL,
  `chat_title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_private_chat_messages`
--

CREATE TABLE `tbl_private_chat_messages` (
  `private_chat_messages_id` int(11) NOT NULL,
  `private_chat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `message_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_private_chat_users`
--

CREATE TABLE `tbl_private_chat_users` (
  `private_chat_users_id` int(11) NOT NULL,
  `private_chat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `active` int(11) NOT NULL COMMENT '0 == minimize chat,1 == open chat and  2 == close chat ',
  `unread` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT 0 COMMENT 'keep last message id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project`
--

CREATE TABLE `tbl_project` (
  `project_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `project_name` varchar(100) NOT NULL,
  `client_id` text DEFAULT NULL,
  `progress` varchar(50) NOT NULL,
  `calculate_progress` varchar(50) DEFAULT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `alert_overdue` tinyint(1) NOT NULL DEFAULT 0,
  `project_cost` decimal(18,2) NOT NULL DEFAULT 0.00,
  `demo_url` varchar(100) NOT NULL,
  `project_status` varchar(20) NOT NULL,
  `description` text DEFAULT NULL,
  `notify_client` enum('Yes','No') NOT NULL,
  `timer_status` enum('on','off') DEFAULT NULL,
  `timer_started_by` int(11) DEFAULT NULL,
  `start_time` int(11) DEFAULT NULL,
  `logged_time` int(11) DEFAULT NULL,
  `permission` text DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `hourly_rate` varchar(200) DEFAULT NULL,
  `fixed_rate` varchar(200) DEFAULT NULL,
  `project_settings` text DEFAULT NULL,
  `with_tasks` enum('yes','no') NOT NULL DEFAULT 'no',
  `estimate_hours` varchar(50) DEFAULT NULL,
  `billing_type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project_settings`
--

CREATE TABLE `tbl_project_settings` (
  `settings_id` int(11) NOT NULL,
  `settings` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_project_settings`
--

INSERT INTO `tbl_project_settings` (`settings_id`, `settings`, `description`) VALUES
(1, 'show_team_members', 'view team members'),
(2, 'show_milestones', 'view project milestones'),
(5, 'show_project_tasks', 'view project tasks'),
(6, 'show_project_attachments', 'view project attachments'),
(7, 'show_timesheets', 'view project timesheets'),
(8, 'show_project_bugs', 'view project bugs'),
(9, 'show_project_history', 'view project history'),
(10, 'show_project_calendar', 'view project calendars'),
(11, 'show_project_comments', 'view project comments'),
(13, 'show_gantt_chart', 'view Gantt chart'),
(14, 'show_project_hours', 'view project hours'),
(15, 'comment_on_project_tasks', 'access To comment on project tasks'),
(16, 'show_project_tasks_attachments', 'view task attachments'),
(20, 'show_tasks_hours', 'show_tasks_hours'),
(21, 'show_finance_overview', 'show_finance_overview');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_proposals`
--

CREATE TABLE `tbl_proposals` (
  `proposals_id` int(11) NOT NULL,
  `reference_no` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `subject` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `module` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `module_id` int(11) DEFAULT 0,
  `proposal_date` timestamp NULL DEFAULT NULL,
  `proposal_month` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `proposal_year` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `due_date` timestamp NULL DEFAULT NULL,
  `alert_overdue` tinyint(1) DEFAULT 0,
  `currency` varchar(32) COLLATE utf8_unicode_ci DEFAULT 'USD',
  `notes` text COLLATE utf8_unicode_ci NOT NULL,
  `tax` int(11) NOT NULL DEFAULT 0,
  `total_tax` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'draft',
  `date_sent` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `proposal_deleted` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `emailed` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT 'No',
  `show_client` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT 'No',
  `convert` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `convert_module` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `convert_module_id` int(11) DEFAULT 0,
  `converted_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `permission` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `discount_type` enum('before_tax','after_tax') COLLATE utf8_unicode_ci DEFAULT NULL,
  `discount_percent` int(2) NOT NULL DEFAULT 0,
  `discount_total` decimal(18,2) NOT NULL DEFAULT 0.00,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `adjustment` decimal(18,2) NOT NULL DEFAULT 0.00,
  `show_quantity_as` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `allowed_cmments` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_proposals_items`
--

CREATE TABLE `tbl_proposals_items` (
  `proposals_items_id` int(11) NOT NULL,
  `proposals_id` int(11) NOT NULL,
  `saved_items_id` int(11) DEFAULT 0,
  `item_name` varchar(150) COLLATE utf8_unicode_ci DEFAULT 'Item Name',
  `item_desc` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` decimal(10,2) DEFAULT 0.00,
  `unit_cost` decimal(10,2) DEFAULT 0.00,
  `item_tax_rate` decimal(10,2) NOT NULL DEFAULT 0.00,
  `item_tax_name` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `item_tax_total` decimal(10,2) DEFAULT 0.00,
  `total_cost` decimal(10,2) DEFAULT 0.00,
  `date_saved` timestamp NOT NULL DEFAULT current_timestamp(),
  `order` int(11) DEFAULT 0,
  `unit` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hsn_code` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchases`
--

CREATE TABLE `tbl_purchases` (
  `purchase_id` int(11) NOT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `reference_no` varchar(100) DEFAULT NULL,
  `total` decimal(20,2) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `update_stock` enum('Yes','No') DEFAULT 'Yes',
  `emailed` enum('Yes','No') DEFAULT NULL,
  `date_sent` varchar(20) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `purchase_date` timestamp NULL DEFAULT NULL,
  `due_date` timestamp NULL DEFAULT NULL,
  `discount_type` enum('before_tax','after_tax') DEFAULT NULL,
  `discount_percent` decimal(10,2) DEFAULT NULL,
  `attachement` text DEFAULT NULL,
  `adjustment` decimal(18,2) DEFAULT NULL,
  `discount_total` decimal(18,2) DEFAULT NULL,
  `show_quantity_as` varchar(10) DEFAULT NULL,
  `permission` text DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `total_tax` text DEFAULT NULL,
  `tax` decimal(20,2) DEFAULT NULL,
  `notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchase_items`
--

CREATE TABLE `tbl_purchase_items` (
  `items_id` int(11) NOT NULL,
  `purchase_id` int(11) NOT NULL,
  `item_tax_rate` decimal(10,2) NOT NULL DEFAULT 0.00,
  `item_tax_name` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `item_tax_total` decimal(10,2) NOT NULL DEFAULT 0.00,
  `quantity` decimal(10,2) DEFAULT 0.00,
  `total_cost` decimal(10,2) DEFAULT 0.00,
  `item_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'Item Name',
  `item_desc` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit_cost` decimal(10,2) DEFAULT 0.00,
  `order` int(11) DEFAULT 0,
  `date_saved` timestamp NOT NULL DEFAULT current_timestamp(),
  `unit` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hsn_code` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `saved_items_id` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchase_payments`
--

CREATE TABLE `tbl_purchase_payments` (
  `payments_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `purchase_id` int(11) DEFAULT NULL,
  `trans_id` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_method` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency` varchar(64) COLLATE utf8_unicode_ci DEFAULT 'USD',
  `notes` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_date` timestamp NULL DEFAULT NULL,
  `month_paid` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `year_paid` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `paid_to` int(11) NOT NULL,
  `paid_by` int(11) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `account_id` int(11) NOT NULL DEFAULT 0 COMMENT 'account_id means tracking deduct from which account'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quotationforms`
--

CREATE TABLE `tbl_quotationforms` (
  `quotationforms_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `quotationforms_title` varchar(200) NOT NULL,
  `quotationforms_code` text NOT NULL,
  `quotationforms_status` varchar(20) NOT NULL DEFAULT 'enabled' COMMENT 'enabled/disabled',
  `quotations_created_by_id` int(11) NOT NULL,
  `quotationforms_date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quotations`
--

CREATE TABLE `tbl_quotations` (
  `quotations_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `quotations_form_title` varchar(250) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `quotations_amount` decimal(10,2) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `reviewer_id` int(11) DEFAULT NULL,
  `reviewed_date` timestamp NULL DEFAULT NULL,
  `quotations_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `quotations_status` varchar(15) DEFAULT 'pending' COMMENT 'completed/pending'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quotation_details`
--

CREATE TABLE `tbl_quotation_details` (
  `quotation_details_id` int(11) NOT NULL,
  `quotations_id` int(11) NOT NULL,
  `quotation_form_data` text DEFAULT NULL,
  `quotation_data` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reminders`
--

CREATE TABLE `tbl_reminders` (
  `reminder_id` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `date` datetime NOT NULL,
  `notified` enum('Yes','No') NOT NULL DEFAULT 'No',
  `module` varchar(200) NOT NULL,
  `module_id` int(11) NOT NULL,
  `user_id` varchar(40) NOT NULL,
  `notify_by_email` enum('Yes','No') NOT NULL DEFAULT 'No',
  `created_by` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_request_quote`
--

CREATE TABLE `tbl_request_quote` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `ip_address` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary_allowance`
--

CREATE TABLE `tbl_salary_allowance` (
  `salary_allowance_id` int(11) NOT NULL,
  `salary_template_id` int(11) NOT NULL,
  `allowance_label` varchar(200) NOT NULL,
  `allowance_value` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary_deduction`
--

CREATE TABLE `tbl_salary_deduction` (
  `salary_deduction_id` int(11) NOT NULL,
  `salary_template_id` int(11) NOT NULL,
  `deduction_label` varchar(200) NOT NULL,
  `deduction_value` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary_payment`
--

CREATE TABLE `tbl_salary_payment` (
  `salary_payment_id` int(5) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `payment_month` varchar(20) NOT NULL,
  `fine_deduction` varchar(200) NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  `comments` text DEFAULT NULL,
  `paid_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `deduct_from` int(11) NOT NULL DEFAULT 0 COMMENT 'deduct from means tracking deduct from which account'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary_payment_allowance`
--

CREATE TABLE `tbl_salary_payment_allowance` (
  `salary_payment_allowance_id` int(11) NOT NULL,
  `salary_payment_id` int(11) NOT NULL,
  `salary_payment_allowance_label` varchar(200) NOT NULL,
  `salary_payment_allowance_value` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary_payment_deduction`
--

CREATE TABLE `tbl_salary_payment_deduction` (
  `salary_payment_deduction` int(11) NOT NULL,
  `salary_payment_id` int(11) NOT NULL,
  `salary_payment_deduction_label` varchar(200) NOT NULL,
  `salary_payment_deduction_value` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary_payment_details`
--

CREATE TABLE `tbl_salary_payment_details` (
  `salary_payment_details_id` int(11) NOT NULL,
  `salary_payment_id` int(11) NOT NULL,
  `salary_payment_details_label` varchar(200) NOT NULL,
  `salary_payment_details_value` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary_payslip`
--

CREATE TABLE `tbl_salary_payslip` (
  `payslip_id` int(5) NOT NULL,
  `payslip_number` varchar(100) DEFAULT NULL,
  `salary_payment_id` int(5) NOT NULL,
  `payslip_generate_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary_template`
--

CREATE TABLE `tbl_salary_template` (
  `salary_template_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `salary_grade` varchar(200) NOT NULL,
  `basic_salary` varchar(200) NOT NULL,
  `overtime_salary` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_saved_items`
--

CREATE TABLE `tbl_saved_items` (
  `saved_items_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `manufacturer_id` int(11) DEFAULT NULL,
  `item_name` varchar(200) COLLATE utf8_unicode_ci DEFAULT 'Item Name',
  `code` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `barcode_symbology` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_image` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `item_desc` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `cost_price` decimal(18,2) DEFAULT NULL,
  `unit_cost` decimal(18,2) DEFAULT 0.00,
  `customer_group_id` int(11) NOT NULL DEFAULT 0,
  `unit_type` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tax_rates_id` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `item_tax_rate` decimal(18,2) DEFAULT 0.00,
  `item_tax_total` decimal(18,2) DEFAULT 0.00,
  `quantity` decimal(18,0) DEFAULT 1,
  `total_cost` decimal(18,2) DEFAULT 0.00,
  `hsn_code` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sent`
--

CREATE TABLE `tbl_sent` (
  `sent_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `to` varchar(100) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `message_body` text NOT NULL,
  `attach_file` varchar(200) DEFAULT NULL,
  `attach_file_path` text DEFAULT NULL,
  `attach_filename` text DEFAULT NULL,
  `message_time` datetime NOT NULL,
  `deleted` enum('Yes','No') NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sessions`
--

CREATE TABLE `tbl_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_sessions`
--

INSERT INTO `tbl_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('5ut0h8f9hmtj79vvs56r4uk7hs712no7', '::1', 1598961391, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383936313339313b),
('6nadui93tegpug49f0pjv7b9m5r4n62o', '::1', 1598961904, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383936313930343b),
('6ut8i0mr4v3b0c0orkhgiq7cdndm7rph', '::1', 1598503730, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383530333733303b),
('7762aigidj2til2u434n3emanc9hfnd0', '127.0.0.1', 1598962074, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383936313930303b6d656e755f6163746976655f69647c613a323a7b693a303b733a333a22313039223b693a313b733a313a2230223b7d);
INSERT INTO `tbl_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('7e7kn94cklv9lffjvprlhgoie6elh46c', '::1', 1599541362, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393534313336323b6d656e755f6163746976655f69647c613a323a7b693a303b733a313a2231223b693a313b733a313a2230223b7d757365725f6e616d657c733a353a2261646d696e223b656d61696c7c733a32303a2273746566616e6f326b3440676d61696c2e636f6d223b6e616d657c733a353a2241646d696e223b70686f746f7c733a32363a2275706c6f6164732f64656661756c745f6176617461722e6a7067223b64657369676e6174696f6e735f69647c733a313a2230223b757365725f69647c733a313a2231223b6c6173745f6c6f67696e7c733a31393a22323031392d30352d30352030303a30303a3030223b73757065725f61646d696e7c733a353a226f776e6572223b636f6d70616e6965735f69647c4e3b6f6e6c696e655f74696d657c693a313539393534303936313b6c6f67676564696e7c623a313b757365725f747970657c733a313a2231223b757365725f666c61677c693a313b646972656374696f6e7c733a333a226c7472223b75726c7c733a31353a2261646d696e2f636f6d70616e696573223b757365725f726f6c6c7c613a3134313a7b693a303b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a313a2231223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a393a2264617368626f617264223b733a343a226c696e6b223b733a31353a2261646d696e2f64617368626f617264223b733a343a2269636f6e223b733a31353a2266612066612d64617368626f617264223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34313a3534223b733a363a22737461747573223b733a313a2231223b7d693a313b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a313a2232223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a383a2263616c656e646172223b733a343a226c696e6b223b733a31343a2261646d696e2f63616c656e646172223b733a343a2269636f6e223b733a31343a2266612066612d63616c656e646172223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34323a3537223b733a363a22737461747573223b733a313a2231223b7d693a323b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a313a2234223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a363a22636c69656e74223b733a343a226c696e6b223b733a32363a2261646d696e2f636c69656e742f6d616e6167655f636c69656e74223b733a343a2269636f6e223b733a31313a2266612066612d7573657273223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223131223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a333b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a313a2235223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a373a226d61696c626f78223b733a343a226c696e6b223b733a31333a2261646d696e2f6d61696c626f78223b733a343a2269636f6e223b733a31363a2266612066612d656e76656c6f70652d6f223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d31312d32312031323a31363a3037223b733a363a22737461747573223b733a313a2231223b7d693a343b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a313a2236223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a373a227469636b657473223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31323a2266612066612d7469636b6574223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223132223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a353b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a313a2237223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31313a22616c6c5f7469636b657473223b733a343a226c696e6b223b733a31333a2261646d696e2f7469636b657473223b733a343a2269636f6e223b733a31323a2266612066612d7469636b6574223b733a363a22706172656e74223b733a313a2236223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34313a3534223b733a363a22737461747573223b733a313a2231223b7d693a363b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a313a2238223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a383a22616e737765726564223b733a343a226c696e6b223b733a32323a2261646d696e2f7469636b6574732f616e737765726564223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a313a2236223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34313a3534223b733a363a22737461747573223b733a313a2231223b7d693a373b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a313a2239223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a343a226f70656e223b733a343a226c696e6b223b733a31383a2261646d696e2f7469636b6574732f6f70656e223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a313a2236223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34313a3534223b733a363a22737461747573223b733a313a2231223b7d693a383b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223130223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31313a22696e5f70726f6772657373223b733a343a226c696e6b223b733a32353a2261646d696e2f7469636b6574732f696e5f70726f6772657373223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a313a2236223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34313a3534223b733a363a22737461747573223b733a313a2231223b7d693a393b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223131223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a363a22636c6f736564223b733a343a226c696e6b223b733a32303a2261646d696e2f7469636b6574732f636c6f736564223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a313a2236223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34313a3534223b733a363a22737461747573223b733a313a2231223b7d693a31303b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223132223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a353a2273616c6573223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31393a2266612066612d73686f7070696e672d63617274223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031382d31312d32322030393a35353a3437223b733a363a22737461747573223b733a313a2231223b7d693a31313b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223133223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a373a22696e766f696365223b733a343a226c696e6b223b733a32383a2261646d696e2f696e766f6963652f6d616e6167655f696e766f696365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31312d32312031323a31363a3037223b733a363a22737461747573223b733a313a2231223b7d693a31323b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223134223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a393a22657374696d61746573223b733a343a226c696e6b223b733a31353a2261646d696e2f657374696d61746573223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d31312d32312031323a31363a3037223b733a363a22737461747573223b733a313a2231223b7d693a31333b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223135223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31373a227061796d656e74735f7265636569766564223b733a343a226c696e6b223b733a32363a2261646d696e2f696e766f6963652f616c6c5f7061796d656e7473223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d31312d32312031323a31363a3037223b733a363a22737461747573223b733a313a2231223b7d693a31343b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223136223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a393a227461785f7261746573223b733a343a226c696e6b223b733a32333a2261646d696e2f696e766f6963652f7461785f7261746573223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d31312d32312031323a31363a3037223b733a363a22737461747573223b733a313a2231223b7d693a31353b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223231223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31303a2271756f746174696f6e73223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31313a2266612066612d7061737465223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031382d31312d32312031323a31363a3037223b733a363a22737461747573223b733a313a2231223b7d693a31363b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223232223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31353a2271756f746174696f6e735f6c697374223b733a343a226c696e6b223b733a31363a2261646d696e2f71756f746174696f6e73223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223231223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30352d31392030313a31393a3033223b733a363a22737461747573223b733a313a2231223b7d693a31373b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223233223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31353a2271756f746174696f6e735f666f726d223b733a343a226c696e6b223b733a33323a2261646d696e2f71756f746174696f6e732f71756f746174696f6e735f666f726d223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223231223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d33302031373a32303a3233223b733a363a22737461747573223b733a313a2231223b7d693a31383b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223234223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a343a2275736572223b733a343a226c696e6b223b733a32303a2261646d696e2f757365722f757365725f6c697374223b733a343a2269636f6e223b733a31313a2266612066612d7573657273223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223238223b733a343a2274696d65223b733a31393a22323031382d31312d32352031343a31303a3138223b733a363a22737461747573223b733a313a2231223b7d693a31393b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223235223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a383a2273657474696e6773223b733a343a226c696e6b223b733a31343a2261646d696e2f73657474696e6773223b733a343a2269636f6e223b733a31303a2266612066612d636f6773223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223239223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a32303b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223236223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31353a2264617461626173655f6261636b7570223b733a343a226c696e6b223b733a33303a2261646d696e2f73657474696e67732f64617461626173655f6261636b7570223b733a343a2269636f6e223b733a31343a2266612066612d6461746162617365223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223237223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a32313b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223239223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31323a227472616e73616374696f6e73223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31363a2266612066612d6275696c64696e672d6f223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031382d31312d32352031343a31303a3138223b733a363a22737461747573223b733a313a2231223b7d693a32323b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223330223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a373a226465706f736974223b733a343a226c696e6b223b733a32363a2261646d696e2f7472616e73616374696f6e732f6465706f736974223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a32333b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223331223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a373a22657870656e7365223b733a343a226c696e6b223b733a32363a2261646d696e2f7472616e73616374696f6e732f657870656e7365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a32343b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223332223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a383a227472616e73666572223b733a343a226c696e6b223b733a32373a2261646d696e2f7472616e73616374696f6e732f7472616e73666572223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a32353b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223333223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31393a227472616e73616374696f6e735f7265706f7274223b733a343a226c696e6b223b733a33383a2261646d696e2f7472616e73616374696f6e732f7472616e73616374696f6e735f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a32363b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223334223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31333a2262616c616e63655f7368656574223b733a343a226c696e6b223b733a33323a2261646d696e2f7472616e73616374696f6e732f62616c616e63655f7368656574223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a32373b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223336223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a393a2262616e6b5f63617368223b733a343a226c696e6b223b733a32383a2261646d696e2f6163636f756e742f6d616e6167655f6163636f756e74223b733a343a2269636f6e223b733a31313a2266612066612d6d6f6e6579223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a32383b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223339223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a353a226974656d73223b733a343a226c696e6b223b733a32323a2261646d696e2f6974656d732f6974656d735f6c697374223b733a343a2269636f6e223b733a31303a2266612066612d63756265223b733a363a22706172656e74223b733a333a22313438223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34333a3034223b733a363a22737461747573223b733a313a2231223b7d693a32393b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223432223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a363a227265706f7274223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31353a2266612066612d6261722d6368617274223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223134223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a33303b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223433223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31373a226163636f756e745f73746174656d656e74223b733a343a226c696e6b223b733a33303a2261646d696e2f7265706f72742f6163636f756e745f73746174656d656e74223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a33313b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223434223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31333a22696e636f6d655f7265706f7274223b733a343a226c696e6b223b733a32363a2261646d696e2f7265706f72742f696e636f6d655f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a33323b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223435223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31343a22657870656e73655f7265706f7274223b733a343a226c696e6b223b733a32373a2261646d696e2f7265706f72742f657870656e73655f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a33333b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223436223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31343a22696e636f6d655f657870656e7365223b733a343a226c696e6b223b733a32373a2261646d696e2f7265706f72742f696e636f6d655f657870656e7365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a33343b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223437223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31363a22646174655f776973655f7265706f7274223b733a343a226c696e6b223b733a32393a2261646d696e2f7265706f72742f646174655f776973655f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a33353b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223438223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31303a22616c6c5f696e636f6d65223b733a343a226c696e6b223b733a32333a2261646d696e2f7265706f72742f616c6c5f696e636f6d65223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a33363b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223439223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31313a22616c6c5f657870656e7365223b733a343a226c696e6b223b733a32343a2261646d696e2f7265706f72742f616c6c5f657870656e7365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a33373b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223530223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31353a22616c6c5f7472616e73616374696f6e223b733a343a226c696e6b223b733a32383a2261646d696e2f7265706f72742f616c6c5f7472616e73616374696f6e223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2237223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a33383b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223531223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31373a22726563757272696e675f696e766f696365223b733a343a226c696e6b223b733a33313a2261646d696e2f696e766f6963652f726563757272696e675f696e766f696365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031382d31312d32312031323a31363a3037223b733a363a22737461747573223b733a313a2231223b7d693a33393b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223532223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31353a227472616e736665725f7265706f7274223b733a343a226c696e6b223b733a33343a2261646d696e2f7472616e73616374696f6e732f7472616e736665725f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a34303b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223533223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31353a227265706f72745f62795f6d6f6e7468223b733a343a226c696e6b223b733a32383a2261646d696e2f7265706f72742f7265706f72745f62795f6d6f6e7468223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2238223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a34313b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223534223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a353a227461736b73223b733a343a226c696e6b223b733a32303a2261646d696e2f7461736b732f616c6c5f7461736b223b733a343a2269636f6e223b733a31313a2266612066612d7461736b73223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223135223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a34323b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223535223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a353a226c65616473223b733a343a226c696e6b223b733a31313a2261646d696e2f6c65616473223b733a343a2269636f6e223b733a31323a2266612066612d726f636b6574223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223130223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a34333b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223536223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31333a226f70706f7274756e6974696573223b733a343a226c696e6b223b733a31393a2261646d696e2f6f70706f7274756e6974696573223b733a343a2269636f6e223b733a31323a2266612066612d66696c746572223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223232223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a34343b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223537223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a383a2270726f6a65637473223b733a343a226c696e6b223b733a31343a2261646d696e2f70726f6a65637473223b733a343a2269636f6e223b733a31393a2266612066612d666f6c6465722d6f70656e2d6f223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2239223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a34353b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223538223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a343a2262756773223b733a343a226c696e6b223b733a31303a2261646d696e2f62756773223b733a343a2269636f6e223b733a393a2266612066612d627567223b733a363a22706172656e74223b733a323a223534223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a34363b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223539223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a373a2270726f6a656374223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31393a2266612066612d666f6c6465722d6f70656e2d6f223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223133223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a34373b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223630223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31323a227461736b735f7265706f7274223b733a343a226c696e6b223b733a32353a2261646d696e2f7265706f72742f7461736b735f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31312d32312031323a31363a3037223b733a363a22737461747573223b733a313a2231223b7d693a34383b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223631223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31313a22627567735f7265706f7274223b733a343a226c696e6b223b733a32343a2261646d696e2f7265706f72742f627567735f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31312d32312031323a31363a3037223b733a363a22737461747573223b733a313a2231223b7d693a34393b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223632223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31343a227469636b6574735f7265706f7274223b733a343a226c696e6b223b733a32373a2261646d696e2f7265706f72742f7469636b6574735f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d31312d32312031323a31363a3037223b733a363a22737461747573223b733a313a2231223b7d693a35303b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223633223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31333a22636c69656e745f7265706f7274223b733a343a226c696e6b223b733a32363a2261646d696e2f7265706f72742f636c69656e745f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d31312d32312031323a31363a3037223b733a363a22737461747573223b733a313a2231223b7d693a35313b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223636223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31363a227461736b735f61737369676e6d656e74223b733a343a226c696e6b223b733a32393a2261646d696e2f7265706f72742f7461736b735f61737369676e6d656e74223b733a343a2269636f6e223b733a31383a2266612066612d646f742d636972636c652d6f223b733a363a22706172656e74223b733a323a223539223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a35323b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223637223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31353a22627567735f61737369676e6d656e74223b733a343a226c696e6b223b733a32383a2261646d696e2f7265706f72742f627567735f61737369676e6d656e74223b733a343a2269636f6e223b733a31383a2266612066612d646f742d636972636c652d6f223b733a363a22706172656e74223b733a323a223539223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a35333b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223638223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31343a2270726f6a6563745f7265706f7274223b733a343a226c696e6b223b733a32373a2261646d696e2f7265706f72742f70726f6a6563745f7265706f7274223b733a343a2269636f6e223b733a31383a2266612066612d646f742d636972636c652d6f223b733a363a22706172656e74223b733a323a223539223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a35343b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223639223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31333a22676f616c5f747261636b696e67223b733a343a226c696e6b223b733a31393a2261646d696e2f676f616c5f747261636b696e67223b733a343a2269636f6e223b733a31323a2266612066612d736869656c64223b733a363a22706172656e74223b733a323a223733223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a35353b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223730223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31313a226465706172746d656e7473223b733a343a226c696e6b223b733a31373a2261646d696e2f6465706172746d656e7473223b733a343a2269636f6e223b733a31373a2266612066612d757365722d736563726574223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223233223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a35363b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223731223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a373a22686f6c69646179223b733a343a226c696e6b223b733a31333a2261646d696e2f686f6c69646179223b733a343a2269636f6e223b733a32313a2266612066612d63616c656e6461722d706c75732d6f223b733a363a22706172656e74223b733a323a223733223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a35373b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223732223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31363a226c656176655f6d616e6167656d656e74223b733a343a226c696e6b223b733a32323a2261646d696e2f6c656176655f6d616e6167656d656e74223b733a343a2269636f6e223b733a31313a2266612066612d706c616e65223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223234223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a35383b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223733223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a393a227574696c6974696573223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31303a2266612066612d67696674223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223137223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a35393b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223734223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a383a226f76657274696d65223b733a343a226c696e6b223b733a32343a2261646d696e2f7574696c69746965732f6f76657274696d65223b733a343a2269636f6e223b733a31333a2266612066612d636c6f636b2d6f223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a36303b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223735223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a353a2273746f636b223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31333a2266612066612d636f646570656e223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2238223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a36313b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223736223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31343a2273746f636b5f63617465676f7279223b733a343a226c696e6b223b733a32363a2261646d696e2f73746f636b2f73746f636b5f63617465676f7279223b733a343a2269636f6e223b733a31333a2266612066612d736c6964657273223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a36323b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223737223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31323a226d616e6167655f73746f636b223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31333a2266612066612d61726368697665223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a36333b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223738223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31323a2261737369676e5f73746f636b223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31363a2266612066612d616c69676e2d6c656674223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a36343b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223739223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31323a2273746f636b5f7265706f7274223b733a343a226c696e6b223b733a31383a2261646d696e2f73746f636b2f7265706f7274223b733a343a2269636f6e223b733a31363a2266612066612d6c696e652d6368617274223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a36353b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223831223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31303a2273746f636b5f6c697374223b733a343a226c696e6b223b733a32323a2261646d696e2f73746f636b2f73746f636b5f6c697374223b733a343a2269636f6e223b733a32303a2266612066612d737461636b2d65786368616e6765223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a36363b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223832223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31323a2261737369676e5f73746f636b223b733a343a226c696e6b223b733a32343a2261646d696e2f73746f636b2f61737369676e5f73746f636b223b733a343a2269636f6e223b733a31363a2266612066612d616c69676e2d6c656674223b733a363a22706172656e74223b733a323a223738223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a36373b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223833223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31393a2261737369676e5f73746f636b5f7265706f7274223b733a343a226c696e6b223b733a33313a2261646d696e2f73746f636b2f61737369676e5f73746f636b5f7265706f7274223b733a343a2269636f6e223b733a31353a2266612066612d6261722d6368617274223b733a363a22706172656e74223b733a323a223738223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a36383b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223834223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31333a2273746f636b5f686973746f7279223b733a343a226c696e6b223b733a32353a2261646d696e2f73746f636b2f73746f636b5f686973746f7279223b733a343a2269636f6e223b733a31373a2266612066612d66696c652d746578742d6f223b733a363a22706172656e74223b733a323a223737223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a36393b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223835223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31313a22706572666f726d616e6365223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31343a2266612066612d6472696262626c65223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223138223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a37303b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223836223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a32313a22706572666f726d616e63655f696e64696361746f72223b733a343a226c696e6b223b733a33393a2261646d696e2f706572666f726d616e63652f706572666f726d616e63655f696e64696361746f72223b733a343a2269636f6e223b733a31323a2266612066612d72616e646f6d223b733a363a22706172656e74223b733a323a223835223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a37313b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223837223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31383a22706572666f726d616e63655f7265706f7274223b733a343a226c696e6b223b733a33363a2261646d696e2f706572666f726d616e63652f706572666f726d616e63655f7265706f7274223b733a343a2269636f6e223b733a31363a2266612066612d63616c656e6461722d6f223b733a363a22706172656e74223b733a323a223835223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a37323b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223838223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31343a22676976655f61707072616973616c223b733a343a226c696e6b223b733a34343a2261646d696e2f706572666f726d616e63652f676976655f706572666f726d616e63655f61707072616973616c223b733a343a2269636f6e223b733a31303a2266612066612d706c7573223b733a363a22706172656e74223b733a323a223835223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a37333b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223839223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a373a22706179726f6c6c223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a393a2266612066612d757364223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223136223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a37343b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223930223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a32313a226d616e6167655f73616c6172795f64657461696c73223b733a343a226c696e6b223b733a33353a2261646d696e2f706179726f6c6c2f6d616e6167655f73616c6172795f64657461696c73223b733a343a2269636f6e223b733a393a2266612066612d757364223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a37353b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223931223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a32303a22656d706c6f7965655f73616c6172795f6c697374223b733a343a226c696e6b223b733a33343a2261646d696e2f706179726f6c6c2f656d706c6f7965655f73616c6172795f6c697374223b733a343a2269636f6e223b733a31373a2266612066612d757365722d736563726574223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a37363b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223932223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31323a226d616b655f7061796d656e74223b733a343a226c696e6b223b733a32363a2261646d696e2f706179726f6c6c2f6d616b655f7061796d656e74223b733a343a2269636f6e223b733a31313a2266612066612d7461736b73223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a37373b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223933223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31363a2267656e65726174655f706179736c6970223b733a343a226c696e6b223b733a33303a2261646d696e2f706179726f6c6c2f67656e65726174655f706179736c6970223b733a343a2269636f6e223b733a31333a2266612066612d6c6973742d756c223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a37383b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223934223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31353a2273616c6172795f74656d706c617465223b733a343a226c696e6b223b733a32393a2261646d696e2f706179726f6c6c2f73616c6172795f74656d706c617465223b733a343a2269636f6e223b733a31313a2266612066612d6d6f6e6579223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a37393b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223935223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31313a22686f75726c795f72617465223b733a343a226c696e6b223b733a32353a2261646d696e2f706179726f6c6c2f686f75726c795f72617465223b733a343a2269636f6e223b733a31333a2266612066612d636c6f636b2d6f223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a38303b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223936223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31353a22706179726f6c6c5f73756d6d617279223b733a343a226c696e6b223b733a32393a2261646d696e2f706179726f6c6c2f706179726f6c6c5f73756d6d617279223b733a343a2269636f6e223b733a31383a2266612066612d63616d6572612d726574726f223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2237223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a38313b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223937223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31343a2270726f766964656e745f66756e64223b733a343a226c696e6b223b733a32383a2261646d696e2f706179726f6c6c2f70726f766964656e745f66756e64223b733a343a2269636f6e223b733a31353a2266612066612d627269656663617365223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2238223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a38323b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223938223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31343a22616476616e63655f73616c617279223b733a343a226c696e6b223b733a32383a2261646d696e2f706179726f6c6c2f616476616e63655f73616c617279223b733a343a2269636f6e223b733a31393a2266612066612d63632d6d617374657263617264223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2239223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a38333b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223939223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31343a22656d706c6f7965655f6177617264223b733a343a226c696e6b223b733a31313a2261646d696e2f6177617264223b733a343a2269636f6e223b733a31323a2266612066612d74726f706879223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a323a223130223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a38343b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313030223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31333a22616e6e6f756e63656d656e7473223b733a343a226c696e6b223b733a31393a2261646d696e2f616e6e6f756e63656d656e7473223b733a343a2269636f6e223b733a31393a2266612066612d62756c6c686f726e2069636f6e223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a38353b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313031223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a383a22747261696e696e67223b733a343a226c696e6b223b733a31343a2261646d696e2f747261696e696e67223b733a343a2269636f6e223b733a31343a2266612066612d7375697463617365223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223235223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a38363b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313032223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31323a226a6f625f63697263756c6172223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31313a2266612066612d676c6f6265223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223139223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a38373b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313033223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31313a226a6f62735f706f73746564223b733a343a226c696e6b223b733a33303a2261646d696e2f6a6f625f63697263756c61722f6a6f62735f706f73746564223b733a343a2269636f6e223b733a31323a2266612066612d7469636b6574223b733a363a22706172656e74223b733a333a22313032223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a38383b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313034223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31373a226a6f62735f6170706c69636174696f6e73223b733a343a226c696e6b223b733a33363a2261646d696e2f6a6f625f63697263756c61722f6a6f62735f6170706c69636174696f6e73223b733a343a2269636f6e223b733a31333a2266612066612d636f6d70617373223b733a363a22706172656e74223b733a333a22313032223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a38393b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313035223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31303a22617474656e64616e6365223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31353a2266612066612d66696c652d74657874223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223230223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a39303b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313036223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31383a2274696d656368616e67655f72657175657374223b733a343a226c696e6b223b733a33353a2261646d696e2f617474656e64616e63652f74696d656368616e67655f72657175657374223b733a343a2269636f6e223b733a31363a2266612066612d63616c656e6461722d6f223b733a363a22706172656e74223b733a333a22313035223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a39313b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313037223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31373a22617474656e64616e63655f7265706f7274223b733a343a226c696e6b223b733a33343a2261646d696e2f617474656e64616e63652f617474656e64616e63655f7265706f7274223b733a343a2269636f6e223b733a31353a2266612066612d66696c652d74657874223b733a363a22706172656e74223b733a333a22313035223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a39323b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313038223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31323a2274696d655f686973746f7279223b733a343a226c696e6b223b733a32393a2261646d696e2f617474656e64616e63652f74696d655f686973746f7279223b733a343a2269636f6e223b733a31333a2266612066612d636c6f636b2d6f223b733a363a22706172656e74223b733a333a22313035223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a39333b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313039223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a393a2270756c6c2d646f776e223b733a343a226c696e6b223b733a303a22223b733a343a2269636f6e223b733a303a22223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34333a3034223b733a363a22737461747573223b733a313a2230223b7d693a39343b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313130223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31313a2266696c656d616e61676572223b733a343a226c696e6b223b733a31373a2261646d696e2f66696c656d616e61676572223b733a343a2269636f6e223b733a31303a2266612066612d66696c65223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a39353b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313131223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31353a22636f6d70616e795f64657461696c73223b733a343a226c696e6b223b733a31343a2261646d696e2f73657474696e6773223b733a343a2269636f6e223b733a32333a2266612066612d66772066612d696e666f2d636972636c65223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39363b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313132223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31353a2273797374656d5f73657474696e6773223b733a343a226c696e6b223b733a32313a2261646d696e2f73657474696e67732f73797374656d223b733a343a2269636f6e223b733a31393a2266612066612d66772066612d6465736b746f70223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39373b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313133223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31343a22656d61696c5f73657474696e6773223b733a343a226c696e6b223b733a32303a2261646d696e2f73657474696e67732f656d61696c223b733a343a2269636f6e223b733a32303a2266612066612d66772066612d656e76656c6f7065223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39383b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313134223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31353a22656d61696c5f74656d706c61746573223b733a343a226c696e6b223b733a32343a2261646d696e2f73657474696e67732f74656d706c61746573223b733a343a2269636f6e223b733a32353a2266612066612d66772066612d70656e63696c2d737175617265223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39393b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313135223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31373a22656d61696c5f696e746567726174696f6e223b733a343a226c696e6b223b733a33323a2261646d696e2f73657474696e67732f656d61696c5f696e746567726174696f6e223b733a343a2269636f6e223b733a32323a2266612066612d66772066612d656e76656c6f70652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a3130303b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313136223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31363a227061796d656e745f73657474696e6773223b733a343a226c696e6b223b733a32333a2261646d696e2f73657474696e67732f7061796d656e7473223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d646f6c6c6172223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a3130313b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313137223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31363a22696e766f6963655f73657474696e6773223b733a343a226c696e6b223b733a32323a2261646d696e2f73657474696e67732f696e766f696365223b733a343a2269636f6e223b733a31373a2266612066612d66772066612d6d6f6e6579223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a3130323b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313138223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31373a22657374696d6174655f73657474696e6773223b733a343a226c696e6b223b733a32333a2261646d696e2f73657474696e67732f657374696d617465223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d66696c652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a3130333b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313139223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a32323a227469636b6574735f6c656164735f73657474696e6773223b733a343a226c696e6b223b733a32323a2261646d696e2f73657474696e67732f7469636b657473223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d7469636b6574223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a3130343b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313230223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31343a227468656d655f73657474696e6773223b733a343a226c696e6b223b733a32303a2261646d696e2f73657474696e67732f7468656d65223b733a343a2269636f6e223b733a31363a2266612066612d66772066612d636f6465223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a3130353b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313231223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31323a22776f726b696e675f64617973223b733a343a226c696e6b223b733a32373a2261646d696e2f73657474696e67732f776f726b696e675f64617973223b733a343a2269636f6e223b733a32303a2266612066612d66772066612d63616c656e646172223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130363b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313232223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31343a226c656176655f63617465676f7279223b733a343a226c696e6b223b733a32393a2261646d696e2f73657474696e67732f6c656176655f63617465676f7279223b733a343a2269636f6e223b733a32313a2266612066612d66772066612d706167656c696e6573223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130373b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313233223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31353a22696e636f6d655f63617465676f7279223b733a343a226c696e6b223b733a33303a2261646d696e2f73657474696e67732f696e636f6d655f63617465676f7279223b733a343a2269636f6e223b733a32333a2266612066612d66772066612d6365727469666963617465223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130383b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313234223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31363a22657870656e73655f63617465676f7279223b733a343a226c696e6b223b733a33313a2261646d696e2f73657474696e67732f657870656e73655f63617465676f7279223b733a343a2269636f6e223b733a31373a2266612066612d66772066612d7461736b73223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130393b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313235223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31343a22637573746f6d65725f67726f7570223b733a343a226c696e6b223b733a32393a2261646d696e2f73657474696e67732f637573746f6d65725f67726f7570223b733a343a2269636f6e223b733a31373a2266612066612d66772066612d7573657273223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3131303b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313236223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31333a22636f6e74726163745f74797065223b733a343a226c696e6b223b733a32383a2261646d696e2f73657474696e67732f636f6e74726163745f74797065223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d66696c652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3131313b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313237223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31313a226c6561645f737461747573223b733a343a226c696e6b223b733a32363a2261646d696e2f73657474696e67732f6c6561645f737461747573223b733a343a2269636f6e223b733a31393a2266612066612d66772066612d6c6973742d756c223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3131323b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313238223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31313a226c6561645f736f75726365223b733a343a226c696e6b223b733a32363a2261646d696e2f73657474696e67732f6c6561645f736f75726365223b733a343a2269636f6e223b733a32323a2266612066612d66772066612d6172726f772d646f776e223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3131333b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313239223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a32363a226f70706f7274756e69746965735f73746174655f726561736f6e223b733a343a226c696e6b223b733a34313a2261646d696e2f73657474696e67732f6f70706f7274756e69746965735f73746174655f726561736f6e223b733a343a2269636f6e223b733a32343a2266612066612d66772066612d646f742d636972636c652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3131343b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313330223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31323a22637573746f6d5f6669656c64223b733a343a226c696e6b223b733a32373a2261646d696e2f73657474696e67732f637573746f6d5f6669656c64223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d737461722d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3131353b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313331223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31343a227061796d656e745f6d6574686f64223b733a343a226c696e6b223b733a32393a2261646d696e2f73657474696e67732f7061796d656e745f6d6574686f64223b733a343a2269636f6e223b733a31373a2266612066612d66772066612d6d6f6e6579223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3131363b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313332223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a373a2263726f6e6a6f62223b733a343a226c696e6b223b733a32323a2261646d696e2f73657474696e67732f63726f6e6a6f62223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d636f6e74616f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131373b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313333223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31353a226d656e755f616c6c6f636174696f6e223b733a343a226c696e6b223b733a33303a2261646d696e2f73657474696e67732f6d656e755f616c6c6f636174696f6e223b733a343a2269636f6e223b733a32323a2266612066612d66772066612066612d636f6d70617373223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131383b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313334223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31323a226e6f74696669636174696f6e223b733a343a226c696e6b223b733a32373a2261646d696e2f73657474696e67732f6e6f74696669636174696f6e223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d62656c6c2d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131393b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313335223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31383a22656d61696c5f6e6f74696669636174696f6e223b733a343a226c696e6b223b733a33333a2261646d696e2f73657474696e67732f656d61696c5f6e6f74696669636174696f6e223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d62656c6c2d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3132303b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313336223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31353a2264617461626173655f6261636b7570223b733a343a226c696e6b223b733a33303a2261646d696e2f73657474696e67732f64617461626173655f6261636b7570223b733a343a2269636f6e223b733a32303a2266612066612d66772066612d6461746162617365223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3132313b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313337223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31323a227472616e736c6174696f6e73223b733a343a226c696e6b223b733a32373a2261646d696e2f73657474696e67732f7472616e736c6174696f6e73223b733a343a2269636f6e223b733a32303a2266612066612d66772066612d6c616e6775616765223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3132323b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313338223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31333a2273797374656d5f757064617465223b733a343a226c696e6b223b733a32383a2261646d696e2f73657474696e67732f73797374656d5f757064617465223b733a343a2269636f6e223b733a32373a2266612066612d66772066612d70656e63696c2d7371756172652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3132333b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313339223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31323a22707269766174655f63686174223b733a343a226c696e6b223b733a31383a22636861742f636f6e766572736174696f6e73223b733a343a2269636f6e223b733a31343a2266612066612d656e76656c6f7065223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223236223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a3132343b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313430223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a393a2270726f706f73616c73223b733a343a226c696e6b223b733a31353a2261646d696e2f70726f706f73616c73223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2237223b733a343a2274696d65223b733a31393a22323031382d31312d32312031323a31363a3037223b733a363a22737461747573223b733a313a2231223b7d693a3132353b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313431223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31333a226b6e6f776c6564676562617365223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a32313a2266612066612d7175657374696f6e2d636972636c65223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223231223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a3132363b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313432223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31303a2263617465676f72696573223b733a343a226c696e6b223b733a33303a2261646d696e2f6b6e6f776c65646765626173652f63617465676f72696573223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313431223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a3132373b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313433223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a383a2261727469636c6573223b733a343a226c696e6b223b733a32383a2261646d696e2f6b6e6f776c65646765626173652f61727469636c6573223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313431223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a3132383b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313434223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31333a226b6e6f776c6564676562617365223b733a343a226c696e6b223b733a31393a2261646d696e2f6b6e6f776c6564676562617365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313431223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a3132393b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313435223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31383a2264617368626f6172645f73657474696e6773223b733a343a226c696e6b223b733a32343a2261646d696e2f73657474696e67732f64617368626f617264223b733a343a2269636f6e223b733a32313a2266612066612d66772066612d64617368626f617264223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a323a223131223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a3133303b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313436223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31343a227472616e73616374696f6e735f72223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31363a2266612066612d6275696c64696e672d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d31312d32312031323a31363a3037223b733a363a22737461747573223b733a313a2231223b7d693a3133313b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313437223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31323a2273616c65735f7265706f7274223b733a343a226c696e6b223b733a32353a2261646d696e2f7265706f72742f73616c65735f7265706f7274223b733a343a2269636f6e223b733a31393a2266612066612d73686f7070696e672d63617274223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031382d31312d32312031323a31363a3037223b733a363a22737461747573223b733a313a2231223b7d693a3133323b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313438223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31353a226d616e6167655f7075726368617365223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31313a2266612066612d747275636b223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2237223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a3133333b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313439223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a383a22737570706c696572223b733a343a226c696e6b223b733a32333a2261646d696e2f70757263686173652f737570706c696572223b733a343a2269636f6e223b733a31303a2266612066612d67696674223b733a363a22706172656e74223b733a333a22313438223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34333a3034223b733a363a22737461747573223b733a313a2231223b7d693a3133343b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313530223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a383a227075726368617365223b733a343a226c696e6b223b733a33303a2261646d696e2f70757263686173652f6d616e6167655f7075726368617365223b733a343a2269636f6e223b733a31333a2266612066612d61726368697665223b733a363a22706172656e74223b733a333a22313438223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d31312d32312031323a31363a3037223b733a363a22737461747573223b733a313a2231223b7d693a3133353b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313531223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31383a2270726f706f73616c735f73657474696e6773223b733a343a226c696e6b223b733a32343a2261646d696e2f73657474696e67732f70726f706f73616c73223b733a343a2269636f6e223b733a31363a2266612066612d66772066612d6c656166223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a3133363b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313532223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31373a2270757263686173655f73657474696e6773223b733a343a226c696e6b223b733a32333a2261646d696e2f73657474696e67732f7075726368617365223b733a343a2269636f6e223b733a31373a2266612066612d66772066612d747275636b223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a3133373b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313533223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31363a2270757263686173655f7061796d656e74223b733a343a226c696e6b223b733a32373a2261646d696e2f70757263686173652f616c6c5f7061796d656e7473223b733a343a2269636f6e223b733a31313a2266612066612d6d6f6e6579223b733a363a22706172656e74223b733a333a22313438223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d31302d33302030323a31323a3239223b733a363a22737461747573223b733a313a2231223b7d693a3133383b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313534223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a393a22706f735f73616c6573223b733a343a226c696e6b223b733a32333a2261646d696e2f696e766f6963652f706f735f73616c6573223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31302d33302030323a31323a3333223b733a363a22737461747573223b733a313a2231223b7d693a3133393b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313535223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31323a2264616d6167655f6974656d73223b733a343a226c696e6b223b733a32343a2261646d696e2f6974656d732f64616d6167655f6974656d73223b733a343a2269636f6e223b733a31353a2266612066612d6269746275636b6574223b733a363a22706172656e74223b733a333a22313438223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d31322d31332031393a32323a3036223b733a363a22737461747573223b733a313a2231223b7d693a3134303b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313536223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31323a226d616e756661637475726572223b733a343a226c696e6b223b733a32373a2261646d696e2f73657474696e67732f6d616e756661637475726572223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d656d70697265223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d31322d31332031373a34343a3133223b733a363a22737461747573223b733a313a2232223b7d7d);
INSERT INTO `tbl_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('8eo4gi0mq9kv6r4onuidvb8ihp4qhbft', '::1', 1598505292, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383530353239323b),
('a1p5mqulohbm974knstv2ujfnckis8cu', '::1', 1598964040, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383936343034303b6d656e755f6163746976655f69647c613a323a7b693a303b733a333a22313039223b693a313b733a313a2230223b7d);
INSERT INTO `tbl_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('d8c5h4ohan5rter8ln1agb5cmhda28oi', '::1', 1599541655, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539393534313336323b6d656e755f6163746976655f69647c613a323a7b693a303b733a333a22313130223b693a313b733a313a2230223b7d757365725f6e616d657c733a353a2261646d696e223b656d61696c7c733a32303a2273746566616e6f326b3440676d61696c2e636f6d223b6e616d657c733a353a2241646d696e223b70686f746f7c733a32363a2275706c6f6164732f64656661756c745f6176617461722e6a7067223b64657369676e6174696f6e735f69647c733a313a2230223b757365725f69647c733a313a2231223b6c6173745f6c6f67696e7c733a31393a22323031392d30352d30352030303a30303a3030223b73757065725f61646d696e7c733a353a226f776e6572223b636f6d70616e6965735f69647c4e3b6f6e6c696e655f74696d657c693a313539393534303936313b6c6f67676564696e7c623a313b757365725f747970657c733a313a2231223b757365725f666c61677c693a313b646972656374696f6e7c733a333a226c7472223b75726c7c733a31373a2261646d696e2f66696c656d616e61676572223b757365725f726f6c6c7c613a3134313a7b693a303b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a313a2231223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a393a2264617368626f617264223b733a343a226c696e6b223b733a31353a2261646d696e2f64617368626f617264223b733a343a2269636f6e223b733a31353a2266612066612d64617368626f617264223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34313a3534223b733a363a22737461747573223b733a313a2231223b7d693a313b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a313a2232223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a383a2263616c656e646172223b733a343a226c696e6b223b733a31343a2261646d696e2f63616c656e646172223b733a343a2269636f6e223b733a31343a2266612066612d63616c656e646172223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34323a3537223b733a363a22737461747573223b733a313a2231223b7d693a323b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a313a2234223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a363a22636c69656e74223b733a343a226c696e6b223b733a32363a2261646d696e2f636c69656e742f6d616e6167655f636c69656e74223b733a343a2269636f6e223b733a31313a2266612066612d7573657273223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223131223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a333b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a313a2235223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a373a226d61696c626f78223b733a343a226c696e6b223b733a31333a2261646d696e2f6d61696c626f78223b733a343a2269636f6e223b733a31363a2266612066612d656e76656c6f70652d6f223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d31312d32312031323a31363a3037223b733a363a22737461747573223b733a313a2231223b7d693a343b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a313a2236223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a373a227469636b657473223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31323a2266612066612d7469636b6574223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223132223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a353b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a313a2237223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31313a22616c6c5f7469636b657473223b733a343a226c696e6b223b733a31333a2261646d696e2f7469636b657473223b733a343a2269636f6e223b733a31323a2266612066612d7469636b6574223b733a363a22706172656e74223b733a313a2236223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34313a3534223b733a363a22737461747573223b733a313a2231223b7d693a363b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a313a2238223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a383a22616e737765726564223b733a343a226c696e6b223b733a32323a2261646d696e2f7469636b6574732f616e737765726564223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a313a2236223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34313a3534223b733a363a22737461747573223b733a313a2231223b7d693a373b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a313a2239223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a343a226f70656e223b733a343a226c696e6b223b733a31383a2261646d696e2f7469636b6574732f6f70656e223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a313a2236223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34313a3534223b733a363a22737461747573223b733a313a2231223b7d693a383b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223130223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31313a22696e5f70726f6772657373223b733a343a226c696e6b223b733a32353a2261646d696e2f7469636b6574732f696e5f70726f6772657373223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a313a2236223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34313a3534223b733a363a22737461747573223b733a313a2231223b7d693a393b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223131223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a363a22636c6f736564223b733a343a226c696e6b223b733a32303a2261646d696e2f7469636b6574732f636c6f736564223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a313a2236223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34313a3534223b733a363a22737461747573223b733a313a2231223b7d693a31303b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223132223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a353a2273616c6573223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31393a2266612066612d73686f7070696e672d63617274223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031382d31312d32322030393a35353a3437223b733a363a22737461747573223b733a313a2231223b7d693a31313b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223133223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a373a22696e766f696365223b733a343a226c696e6b223b733a32383a2261646d696e2f696e766f6963652f6d616e6167655f696e766f696365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31312d32312031323a31363a3037223b733a363a22737461747573223b733a313a2231223b7d693a31323b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223134223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a393a22657374696d61746573223b733a343a226c696e6b223b733a31353a2261646d696e2f657374696d61746573223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d31312d32312031323a31363a3037223b733a363a22737461747573223b733a313a2231223b7d693a31333b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223135223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31373a227061796d656e74735f7265636569766564223b733a343a226c696e6b223b733a32363a2261646d696e2f696e766f6963652f616c6c5f7061796d656e7473223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d31312d32312031323a31363a3037223b733a363a22737461747573223b733a313a2231223b7d693a31343b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223136223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a393a227461785f7261746573223b733a343a226c696e6b223b733a32333a2261646d696e2f696e766f6963652f7461785f7261746573223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d31312d32312031323a31363a3037223b733a363a22737461747573223b733a313a2231223b7d693a31353b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223231223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31303a2271756f746174696f6e73223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31313a2266612066612d7061737465223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031382d31312d32312031323a31363a3037223b733a363a22737461747573223b733a313a2231223b7d693a31363b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223232223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31353a2271756f746174696f6e735f6c697374223b733a343a226c696e6b223b733a31363a2261646d696e2f71756f746174696f6e73223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223231223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30352d31392030313a31393a3033223b733a363a22737461747573223b733a313a2231223b7d693a31373b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223233223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31353a2271756f746174696f6e735f666f726d223b733a343a226c696e6b223b733a33323a2261646d696e2f71756f746174696f6e732f71756f746174696f6e735f666f726d223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223231223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031362d30352d33302031373a32303a3233223b733a363a22737461747573223b733a313a2231223b7d693a31383b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223234223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a343a2275736572223b733a343a226c696e6b223b733a32303a2261646d696e2f757365722f757365725f6c697374223b733a343a2269636f6e223b733a31313a2266612066612d7573657273223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223238223b733a343a2274696d65223b733a31393a22323031382d31312d32352031343a31303a3138223b733a363a22737461747573223b733a313a2231223b7d693a31393b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223235223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a383a2273657474696e6773223b733a343a226c696e6b223b733a31343a2261646d696e2f73657474696e6773223b733a343a2269636f6e223b733a31303a2266612066612d636f6773223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223239223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a32303b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223236223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31353a2264617461626173655f6261636b7570223b733a343a226c696e6b223b733a33303a2261646d696e2f73657474696e67732f64617461626173655f6261636b7570223b733a343a2269636f6e223b733a31343a2266612066612d6461746162617365223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223237223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a32313b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223239223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31323a227472616e73616374696f6e73223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31363a2266612066612d6275696c64696e672d6f223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031382d31312d32352031343a31303a3138223b733a363a22737461747573223b733a313a2231223b7d693a32323b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223330223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a373a226465706f736974223b733a343a226c696e6b223b733a32363a2261646d696e2f7472616e73616374696f6e732f6465706f736974223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a32333b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223331223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a373a22657870656e7365223b733a343a226c696e6b223b733a32363a2261646d696e2f7472616e73616374696f6e732f657870656e7365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a32343b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223332223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a383a227472616e73666572223b733a343a226c696e6b223b733a32373a2261646d696e2f7472616e73616374696f6e732f7472616e73666572223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a32353b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223333223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31393a227472616e73616374696f6e735f7265706f7274223b733a343a226c696e6b223b733a33383a2261646d696e2f7472616e73616374696f6e732f7472616e73616374696f6e735f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a32363b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223334223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31333a2262616c616e63655f7368656574223b733a343a226c696e6b223b733a33323a2261646d696e2f7472616e73616374696f6e732f62616c616e63655f7368656574223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a32373b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223336223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a393a2262616e6b5f63617368223b733a343a226c696e6b223b733a32383a2261646d696e2f6163636f756e742f6d616e6167655f6163636f756e74223b733a343a2269636f6e223b733a31313a2266612066612d6d6f6e6579223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a32383b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223339223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a353a226974656d73223b733a343a226c696e6b223b733a32323a2261646d696e2f6974656d732f6974656d735f6c697374223b733a343a2269636f6e223b733a31303a2266612066612d63756265223b733a363a22706172656e74223b733a333a22313438223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34333a3034223b733a363a22737461747573223b733a313a2231223b7d693a32393b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223432223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a363a227265706f7274223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31353a2266612066612d6261722d6368617274223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223134223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a33303b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223433223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31373a226163636f756e745f73746174656d656e74223b733a343a226c696e6b223b733a33303a2261646d696e2f7265706f72742f6163636f756e745f73746174656d656e74223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a33313b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223434223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31333a22696e636f6d655f7265706f7274223b733a343a226c696e6b223b733a32363a2261646d696e2f7265706f72742f696e636f6d655f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a33323b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223435223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31343a22657870656e73655f7265706f7274223b733a343a226c696e6b223b733a32373a2261646d696e2f7265706f72742f657870656e73655f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a33333b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223436223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31343a22696e636f6d655f657870656e7365223b733a343a226c696e6b223b733a32373a2261646d696e2f7265706f72742f696e636f6d655f657870656e7365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a33343b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223437223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31363a22646174655f776973655f7265706f7274223b733a343a226c696e6b223b733a32393a2261646d696e2f7265706f72742f646174655f776973655f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a33353b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223438223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31303a22616c6c5f696e636f6d65223b733a343a226c696e6b223b733a32333a2261646d696e2f7265706f72742f616c6c5f696e636f6d65223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a33363b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223439223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31313a22616c6c5f657870656e7365223b733a343a226c696e6b223b733a32343a2261646d696e2f7265706f72742f616c6c5f657870656e7365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a33373b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223530223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31353a22616c6c5f7472616e73616374696f6e223b733a343a226c696e6b223b733a32383a2261646d696e2f7265706f72742f616c6c5f7472616e73616374696f6e223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2237223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a33383b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223531223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31373a22726563757272696e675f696e766f696365223b733a343a226c696e6b223b733a33313a2261646d696e2f696e766f6963652f726563757272696e675f696e766f696365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031382d31312d32312031323a31363a3037223b733a363a22737461747573223b733a313a2231223b7d693a33393b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223532223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31353a227472616e736665725f7265706f7274223b733a343a226c696e6b223b733a33343a2261646d696e2f7472616e73616374696f6e732f7472616e736665725f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223239223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a34303b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223533223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31353a227265706f72745f62795f6d6f6e7468223b733a343a226c696e6b223b733a32383a2261646d696e2f7265706f72742f7265706f72745f62795f6d6f6e7468223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313436223b733a343a22736f7274223b733a313a2238223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a34313b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223534223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a353a227461736b73223b733a343a226c696e6b223b733a32303a2261646d696e2f7461736b732f616c6c5f7461736b223b733a343a2269636f6e223b733a31313a2266612066612d7461736b73223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223135223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a34323b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223535223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a353a226c65616473223b733a343a226c696e6b223b733a31313a2261646d696e2f6c65616473223b733a343a2269636f6e223b733a31323a2266612066612d726f636b6574223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223130223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a34333b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223536223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31333a226f70706f7274756e6974696573223b733a343a226c696e6b223b733a31393a2261646d696e2f6f70706f7274756e6974696573223b733a343a2269636f6e223b733a31323a2266612066612d66696c746572223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223232223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a34343b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223537223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a383a2270726f6a65637473223b733a343a226c696e6b223b733a31343a2261646d696e2f70726f6a65637473223b733a343a2269636f6e223b733a31393a2266612066612d666f6c6465722d6f70656e2d6f223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2239223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a34353b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223538223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a343a2262756773223b733a343a226c696e6b223b733a31303a2261646d696e2f62756773223b733a343a2269636f6e223b733a393a2266612066612d627567223b733a363a22706172656e74223b733a323a223534223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a34363b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223539223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a373a2270726f6a656374223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31393a2266612066612d666f6c6465722d6f70656e2d6f223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223133223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a34373b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223630223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31323a227461736b735f7265706f7274223b733a343a226c696e6b223b733a32353a2261646d696e2f7265706f72742f7461736b735f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31312d32312031323a31363a3037223b733a363a22737461747573223b733a313a2231223b7d693a34383b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223631223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31313a22627567735f7265706f7274223b733a343a226c696e6b223b733a32343a2261646d696e2f7265706f72742f627567735f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31312d32312031323a31363a3037223b733a363a22737461747573223b733a313a2231223b7d693a34393b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223632223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31343a227469636b6574735f7265706f7274223b733a343a226c696e6b223b733a32373a2261646d696e2f7265706f72742f7469636b6574735f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d31312d32312031323a31363a3037223b733a363a22737461747573223b733a313a2231223b7d693a35303b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223633223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31333a22636c69656e745f7265706f7274223b733a343a226c696e6b223b733a32363a2261646d696e2f7265706f72742f636c69656e745f7265706f7274223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d31312d32312031323a31363a3037223b733a363a22737461747573223b733a313a2231223b7d693a35313b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223636223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31363a227461736b735f61737369676e6d656e74223b733a343a226c696e6b223b733a32393a2261646d696e2f7265706f72742f7461736b735f61737369676e6d656e74223b733a343a2269636f6e223b733a31383a2266612066612d646f742d636972636c652d6f223b733a363a22706172656e74223b733a323a223539223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a35323b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223637223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31353a22627567735f61737369676e6d656e74223b733a343a226c696e6b223b733a32383a2261646d696e2f7265706f72742f627567735f61737369676e6d656e74223b733a343a2269636f6e223b733a31383a2266612066612d646f742d636972636c652d6f223b733a363a22706172656e74223b733a323a223539223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a35333b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223638223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31343a2270726f6a6563745f7265706f7274223b733a343a226c696e6b223b733a32373a2261646d696e2f7265706f72742f70726f6a6563745f7265706f7274223b733a343a2269636f6e223b733a31383a2266612066612d646f742d636972636c652d6f223b733a363a22706172656e74223b733a323a223539223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a35343b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223639223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31333a22676f616c5f747261636b696e67223b733a343a226c696e6b223b733a31393a2261646d696e2f676f616c5f747261636b696e67223b733a343a2269636f6e223b733a31323a2266612066612d736869656c64223b733a363a22706172656e74223b733a323a223733223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a35353b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223730223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31313a226465706172746d656e7473223b733a343a226c696e6b223b733a31373a2261646d696e2f6465706172746d656e7473223b733a343a2269636f6e223b733a31373a2266612066612d757365722d736563726574223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223233223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a35363b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223731223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a373a22686f6c69646179223b733a343a226c696e6b223b733a31333a2261646d696e2f686f6c69646179223b733a343a2269636f6e223b733a32313a2266612066612d63616c656e6461722d706c75732d6f223b733a363a22706172656e74223b733a323a223733223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a35373b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223732223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31363a226c656176655f6d616e6167656d656e74223b733a343a226c696e6b223b733a32323a2261646d696e2f6c656176655f6d616e6167656d656e74223b733a343a2269636f6e223b733a31313a2266612066612d706c616e65223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223234223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a35383b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223733223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a393a227574696c6974696573223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31303a2266612066612d67696674223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223137223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a35393b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223734223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a383a226f76657274696d65223b733a343a226c696e6b223b733a32343a2261646d696e2f7574696c69746965732f6f76657274696d65223b733a343a2269636f6e223b733a31333a2266612066612d636c6f636b2d6f223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a36303b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223735223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a353a2273746f636b223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31333a2266612066612d636f646570656e223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2238223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a36313b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223736223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31343a2273746f636b5f63617465676f7279223b733a343a226c696e6b223b733a32363a2261646d696e2f73746f636b2f73746f636b5f63617465676f7279223b733a343a2269636f6e223b733a31333a2266612066612d736c6964657273223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a36323b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223737223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31323a226d616e6167655f73746f636b223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31333a2266612066612d61726368697665223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a36333b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223738223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31323a2261737369676e5f73746f636b223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31363a2266612066612d616c69676e2d6c656674223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a36343b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223739223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31323a2273746f636b5f7265706f7274223b733a343a226c696e6b223b733a31383a2261646d696e2f73746f636b2f7265706f7274223b733a343a2269636f6e223b733a31363a2266612066612d6c696e652d6368617274223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a36353b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223831223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31303a2273746f636b5f6c697374223b733a343a226c696e6b223b733a32323a2261646d696e2f73746f636b2f73746f636b5f6c697374223b733a343a2269636f6e223b733a32303a2266612066612d737461636b2d65786368616e6765223b733a363a22706172656e74223b733a323a223735223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a36363b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223832223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31323a2261737369676e5f73746f636b223b733a343a226c696e6b223b733a32343a2261646d696e2f73746f636b2f61737369676e5f73746f636b223b733a343a2269636f6e223b733a31363a2266612066612d616c69676e2d6c656674223b733a363a22706172656e74223b733a323a223738223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a36373b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223833223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31393a2261737369676e5f73746f636b5f7265706f7274223b733a343a226c696e6b223b733a33313a2261646d696e2f73746f636b2f61737369676e5f73746f636b5f7265706f7274223b733a343a2269636f6e223b733a31353a2266612066612d6261722d6368617274223b733a363a22706172656e74223b733a323a223738223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a36383b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223834223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31333a2273746f636b5f686973746f7279223b733a343a226c696e6b223b733a32353a2261646d696e2f73746f636b2f73746f636b5f686973746f7279223b733a343a2269636f6e223b733a31373a2266612066612d66696c652d746578742d6f223b733a363a22706172656e74223b733a323a223737223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a36393b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223835223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31313a22706572666f726d616e6365223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31343a2266612066612d6472696262626c65223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223138223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a37303b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223836223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a32313a22706572666f726d616e63655f696e64696361746f72223b733a343a226c696e6b223b733a33393a2261646d696e2f706572666f726d616e63652f706572666f726d616e63655f696e64696361746f72223b733a343a2269636f6e223b733a31323a2266612066612d72616e646f6d223b733a363a22706172656e74223b733a323a223835223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a37313b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223837223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31383a22706572666f726d616e63655f7265706f7274223b733a343a226c696e6b223b733a33363a2261646d696e2f706572666f726d616e63652f706572666f726d616e63655f7265706f7274223b733a343a2269636f6e223b733a31363a2266612066612d63616c656e6461722d6f223b733a363a22706172656e74223b733a323a223835223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a37323b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223838223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31343a22676976655f61707072616973616c223b733a343a226c696e6b223b733a34343a2261646d696e2f706572666f726d616e63652f676976655f706572666f726d616e63655f61707072616973616c223b733a343a2269636f6e223b733a31303a2266612066612d706c7573223b733a363a22706172656e74223b733a323a223835223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a37333b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223839223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a373a22706179726f6c6c223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a393a2266612066612d757364223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223136223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a37343b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223930223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a32313a226d616e6167655f73616c6172795f64657461696c73223b733a343a226c696e6b223b733a33353a2261646d696e2f706179726f6c6c2f6d616e6167655f73616c6172795f64657461696c73223b733a343a2269636f6e223b733a393a2266612066612d757364223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a37353b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223931223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a32303a22656d706c6f7965655f73616c6172795f6c697374223b733a343a226c696e6b223b733a33343a2261646d696e2f706179726f6c6c2f656d706c6f7965655f73616c6172795f6c697374223b733a343a2269636f6e223b733a31373a2266612066612d757365722d736563726574223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a37363b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223932223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31323a226d616b655f7061796d656e74223b733a343a226c696e6b223b733a32363a2261646d696e2f706179726f6c6c2f6d616b655f7061796d656e74223b733a343a2269636f6e223b733a31313a2266612066612d7461736b73223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a37373b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223933223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31363a2267656e65726174655f706179736c6970223b733a343a226c696e6b223b733a33303a2261646d696e2f706179726f6c6c2f67656e65726174655f706179736c6970223b733a343a2269636f6e223b733a31333a2266612066612d6c6973742d756c223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a37383b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223934223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31353a2273616c6172795f74656d706c617465223b733a343a226c696e6b223b733a32393a2261646d696e2f706179726f6c6c2f73616c6172795f74656d706c617465223b733a343a2269636f6e223b733a31313a2266612066612d6d6f6e6579223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a37393b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223935223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31313a22686f75726c795f72617465223b733a343a226c696e6b223b733a32353a2261646d696e2f706179726f6c6c2f686f75726c795f72617465223b733a343a2269636f6e223b733a31333a2266612066612d636c6f636b2d6f223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a38303b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223936223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31353a22706179726f6c6c5f73756d6d617279223b733a343a226c696e6b223b733a32393a2261646d696e2f706179726f6c6c2f706179726f6c6c5f73756d6d617279223b733a343a2269636f6e223b733a31383a2266612066612d63616d6572612d726574726f223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2237223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a38313b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223937223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31343a2270726f766964656e745f66756e64223b733a343a226c696e6b223b733a32383a2261646d696e2f706179726f6c6c2f70726f766964656e745f66756e64223b733a343a2269636f6e223b733a31353a2266612066612d627269656663617365223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2238223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a38323b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223938223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31343a22616476616e63655f73616c617279223b733a343a226c696e6b223b733a32383a2261646d696e2f706179726f6c6c2f616476616e63655f73616c617279223b733a343a2269636f6e223b733a31393a2266612066612d63632d6d617374657263617264223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a313a2239223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a38333b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a323a223939223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31343a22656d706c6f7965655f6177617264223b733a343a226c696e6b223b733a31313a2261646d696e2f6177617264223b733a343a2269636f6e223b733a31323a2266612066612d74726f706879223b733a363a22706172656e74223b733a323a223839223b733a343a22736f7274223b733a323a223130223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a38343b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313030223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31333a22616e6e6f756e63656d656e7473223b733a343a226c696e6b223b733a31393a2261646d696e2f616e6e6f756e63656d656e7473223b733a343a2269636f6e223b733a31393a2266612066612d62756c6c686f726e2069636f6e223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a38353b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313031223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a383a22747261696e696e67223b733a343a226c696e6b223b733a31343a2261646d696e2f747261696e696e67223b733a343a2269636f6e223b733a31343a2266612066612d7375697463617365223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223235223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a38363b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313032223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31323a226a6f625f63697263756c6172223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31313a2266612066612d676c6f6265223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223139223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a38373b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313033223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31313a226a6f62735f706f73746564223b733a343a226c696e6b223b733a33303a2261646d696e2f6a6f625f63697263756c61722f6a6f62735f706f73746564223b733a343a2269636f6e223b733a31323a2266612066612d7469636b6574223b733a363a22706172656e74223b733a333a22313032223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a38383b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313034223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31373a226a6f62735f6170706c69636174696f6e73223b733a343a226c696e6b223b733a33363a2261646d696e2f6a6f625f63697263756c61722f6a6f62735f6170706c69636174696f6e73223b733a343a2269636f6e223b733a31333a2266612066612d636f6d70617373223b733a363a22706172656e74223b733a333a22313032223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a38393b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313035223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31303a22617474656e64616e6365223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31353a2266612066612d66696c652d74657874223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223230223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a39303b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313036223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31383a2274696d656368616e67655f72657175657374223b733a343a226c696e6b223b733a33353a2261646d696e2f617474656e64616e63652f74696d656368616e67655f72657175657374223b733a343a2269636f6e223b733a31363a2266612066612d63616c656e6461722d6f223b733a363a22706172656e74223b733a333a22313035223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a39313b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313037223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31373a22617474656e64616e63655f7265706f7274223b733a343a226c696e6b223b733a33343a2261646d696e2f617474656e64616e63652f617474656e64616e63655f7265706f7274223b733a343a2269636f6e223b733a31353a2266612066612d66696c652d74657874223b733a363a22706172656e74223b733a333a22313035223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a39323b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313038223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31323a2274696d655f686973746f7279223b733a343a226c696e6b223b733a32393a2261646d696e2f617474656e64616e63652f74696d655f686973746f7279223b733a343a2269636f6e223b733a31333a2266612066612d636c6f636b2d6f223b733a363a22706172656e74223b733a333a22313035223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a39333b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313039223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a393a2270756c6c2d646f776e223b733a343a226c696e6b223b733a303a22223b733a343a2269636f6e223b733a303a22223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34333a3034223b733a363a22737461747573223b733a313a2230223b7d693a39343b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313130223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31313a2266696c656d616e61676572223b733a343a226c696e6b223b733a31373a2261646d696e2f66696c656d616e61676572223b733a343a2269636f6e223b733a31303a2266612066612d66696c65223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a39353b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313131223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31353a22636f6d70616e795f64657461696c73223b733a343a226c696e6b223b733a31343a2261646d696e2f73657474696e6773223b733a343a2269636f6e223b733a32333a2266612066612d66772066612d696e666f2d636972636c65223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39363b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313132223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31353a2273797374656d5f73657474696e6773223b733a343a226c696e6b223b733a32313a2261646d696e2f73657474696e67732f73797374656d223b733a343a2269636f6e223b733a31393a2266612066612d66772066612d6465736b746f70223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39373b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313133223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31343a22656d61696c5f73657474696e6773223b733a343a226c696e6b223b733a32303a2261646d696e2f73657474696e67732f656d61696c223b733a343a2269636f6e223b733a32303a2266612066612d66772066612d656e76656c6f7065223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39383b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313134223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31353a22656d61696c5f74656d706c61746573223b733a343a226c696e6b223b733a32343a2261646d696e2f73657474696e67732f74656d706c61746573223b733a343a2269636f6e223b733a32353a2266612066612d66772066612d70656e63696c2d737175617265223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a39393b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313135223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31373a22656d61696c5f696e746567726174696f6e223b733a343a226c696e6b223b733a33323a2261646d696e2f73657474696e67732f656d61696c5f696e746567726174696f6e223b733a343a2269636f6e223b733a32323a2266612066612d66772066612d656e76656c6f70652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a3130303b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313136223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31363a227061796d656e745f73657474696e6773223b733a343a226c696e6b223b733a32333a2261646d696e2f73657474696e67732f7061796d656e7473223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d646f6c6c6172223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2236223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a3130313b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313137223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31363a22696e766f6963655f73657474696e6773223b733a343a226c696e6b223b733a32323a2261646d696e2f73657474696e67732f696e766f696365223b733a343a2269636f6e223b733a31373a2266612066612d66772066612d6d6f6e6579223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a3130323b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313138223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31373a22657374696d6174655f73657474696e6773223b733a343a226c696e6b223b733a32333a2261646d696e2f73657474696e67732f657374696d617465223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d66696c652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a3130333b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313139223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a32323a227469636b6574735f6c656164735f73657474696e6773223b733a343a226c696e6b223b733a32323a2261646d696e2f73657474696e67732f7469636b657473223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d7469636b6574223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a3130343b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313230223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31343a227468656d655f73657474696e6773223b733a343a226c696e6b223b733a32303a2261646d696e2f73657474696e67732f7468656d65223b733a343a2269636f6e223b733a31363a2266612066612d66772066612d636f6465223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a3130353b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313231223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31323a22776f726b696e675f64617973223b733a343a226c696e6b223b733a32373a2261646d696e2f73657474696e67732f776f726b696e675f64617973223b733a343a2269636f6e223b733a32303a2266612066612d66772066612d63616c656e646172223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130363b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313232223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31343a226c656176655f63617465676f7279223b733a343a226c696e6b223b733a32393a2261646d696e2f73657474696e67732f6c656176655f63617465676f7279223b733a343a2269636f6e223b733a32313a2266612066612d66772066612d706167656c696e6573223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130373b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313233223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31353a22696e636f6d655f63617465676f7279223b733a343a226c696e6b223b733a33303a2261646d696e2f73657474696e67732f696e636f6d655f63617465676f7279223b733a343a2269636f6e223b733a32333a2266612066612d66772066612d6365727469666963617465223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130383b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313234223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31363a22657870656e73655f63617465676f7279223b733a343a226c696e6b223b733a33313a2261646d696e2f73657474696e67732f657870656e73655f63617465676f7279223b733a343a2269636f6e223b733a31373a2266612066612d66772066612d7461736b73223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3130393b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313235223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31343a22637573746f6d65725f67726f7570223b733a343a226c696e6b223b733a32393a2261646d696e2f73657474696e67732f637573746f6d65725f67726f7570223b733a343a2269636f6e223b733a31373a2266612066612d66772066612d7573657273223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3131303b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313236223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31333a22636f6e74726163745f74797065223b733a343a226c696e6b223b733a32383a2261646d696e2f73657474696e67732f636f6e74726163745f74797065223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d66696c652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3131313b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313237223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31313a226c6561645f737461747573223b733a343a226c696e6b223b733a32363a2261646d696e2f73657474696e67732f6c6561645f737461747573223b733a343a2269636f6e223b733a31393a2266612066612d66772066612d6c6973742d756c223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3131323b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313238223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31313a226c6561645f736f75726365223b733a343a226c696e6b223b733a32363a2261646d696e2f73657474696e67732f6c6561645f736f75726365223b733a343a2269636f6e223b733a32323a2266612066612d66772066612d6172726f772d646f776e223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3131333b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313239223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a32363a226f70706f7274756e69746965735f73746174655f726561736f6e223b733a343a226c696e6b223b733a34313a2261646d696e2f73657474696e67732f6f70706f7274756e69746965735f73746174655f726561736f6e223b733a343a2269636f6e223b733a32343a2266612066612d66772066612d646f742d636972636c652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3131343b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313330223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31323a22637573746f6d5f6669656c64223b733a343a226c696e6b223b733a32373a2261646d696e2f73657474696e67732f637573746f6d5f6669656c64223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d737461722d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3131353b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313331223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31343a227061796d656e745f6d6574686f64223b733a343a226c696e6b223b733a32393a2261646d696e2f73657474696e67732f7061796d656e745f6d6574686f64223b733a343a2269636f6e223b733a31373a2266612066612d66772066612d6d6f6e6579223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a34333a3431223b733a363a22737461747573223b733a313a2232223b7d693a3131363b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313332223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a373a2263726f6e6a6f62223b733a343a226c696e6b223b733a32323a2261646d696e2f73657474696e67732f63726f6e6a6f62223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d636f6e74616f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131373b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313333223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31353a226d656e755f616c6c6f636174696f6e223b733a343a226c696e6b223b733a33303a2261646d696e2f73657474696e67732f6d656e755f616c6c6f636174696f6e223b733a343a2269636f6e223b733a32323a2266612066612d66772066612066612d636f6d70617373223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131383b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313334223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31323a226e6f74696669636174696f6e223b733a343a226c696e6b223b733a32373a2261646d696e2f73657474696e67732f6e6f74696669636174696f6e223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d62656c6c2d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3131393b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313335223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31383a22656d61696c5f6e6f74696669636174696f6e223b733a343a226c696e6b223b733a33333a2261646d696e2f73657474696e67732f656d61696c5f6e6f74696669636174696f6e223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d62656c6c2d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3132303b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313336223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31353a2264617461626173655f6261636b7570223b733a343a226c696e6b223b733a33303a2261646d696e2f73657474696e67732f64617461626173655f6261636b7570223b733a343a2269636f6e223b733a32303a2266612066612d66772066612d6461746162617365223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3132313b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313337223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31323a227472616e736c6174696f6e73223b733a343a226c696e6b223b733a32373a2261646d696e2f73657474696e67732f7472616e736c6174696f6e73223b733a343a2269636f6e223b733a32303a2266612066612d66772066612d6c616e6775616765223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3132323b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313338223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31333a2273797374656d5f757064617465223b733a343a226c696e6b223b733a32383a2261646d696e2f73657474696e67732f73797374656d5f757064617465223b733a343a2269636f6e223b733a32373a2266612066612d66772066612d70656e63696c2d7371756172652d6f223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a34363a3230223b733a363a22737461747573223b733a313a2232223b7d693a3132333b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313339223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31323a22707269766174655f63686174223b733a343a226c696e6b223b733a31383a22636861742f636f6e766572736174696f6e73223b733a343a2269636f6e223b733a31343a2266612066612d656e76656c6f7065223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223236223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a3132343b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313430223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a393a2270726f706f73616c73223b733a343a226c696e6b223b733a31353a2261646d696e2f70726f706f73616c73223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2237223b733a343a2274696d65223b733a31393a22323031382d31312d32312031323a31363a3037223b733a363a22737461747573223b733a313a2231223b7d693a3132353b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313431223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31333a226b6e6f776c6564676562617365223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a32313a2266612066612d7175657374696f6e2d636972636c65223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a323a223231223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a3132363b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313432223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31303a2263617465676f72696573223b733a343a226c696e6b223b733a33303a2261646d696e2f6b6e6f776c65646765626173652f63617465676f72696573223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313431223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a3132373b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313433223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a383a2261727469636c6573223b733a343a226c696e6b223b733a32383a2261646d696e2f6b6e6f776c65646765626173652f61727469636c6573223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313431223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a32343a3530223b733a363a22737461747573223b733a313a2231223b7d693a3132383b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313434223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31333a226b6e6f776c6564676562617365223b733a343a226c696e6b223b733a31393a2261646d696e2f6b6e6f776c6564676562617365223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a333a22313431223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34303a3338223b733a363a22737461747573223b733a313a2231223b7d693a3132393b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313435223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31383a2264617368626f6172645f73657474696e6773223b733a343a226c696e6b223b733a32343a2261646d696e2f73657474696e67732f64617368626f617264223b733a343a2269636f6e223b733a32313a2266612066612d66772066612d64617368626f617264223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a323a223131223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a3133303b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313436223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31343a227472616e73616374696f6e735f72223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31363a2266612066612d6275696c64696e672d6f223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2234223b733a343a2274696d65223b733a31393a22323031382d31312d32312031323a31363a3037223b733a363a22737461747573223b733a313a2231223b7d693a3133313b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313437223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31323a2273616c65735f7265706f7274223b733a343a226c696e6b223b733a32353a2261646d696e2f7265706f72742f73616c65735f7265706f7274223b733a343a2269636f6e223b733a31393a2266612066612d73686f7070696e672d63617274223b733a363a22706172656e74223b733a323a223432223b733a343a22736f7274223b733a313a2235223b733a343a2274696d65223b733a31393a22323031382d31312d32312031323a31363a3037223b733a363a22737461747573223b733a313a2231223b7d693a3133323b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313438223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31353a226d616e6167655f7075726368617365223b733a343a226c696e6b223b733a313a2223223b733a343a2269636f6e223b733a31313a2266612066612d747275636b223b733a363a22706172656e74223b733a313a2230223b733a343a22736f7274223b733a313a2237223b733a343a2274696d65223b733a31393a22323031382d31312d32352031383a34333a3033223b733a363a22737461747573223b733a313a2231223b7d693a3133333b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313439223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a383a22737570706c696572223b733a343a226c696e6b223b733a32333a2261646d696e2f70757263686173652f737570706c696572223b733a343a2269636f6e223b733a31303a2266612066612d67696674223b733a363a22706172656e74223b733a333a22313438223b733a343a22736f7274223b733a313a2231223b733a343a2274696d65223b733a31393a22323031382d31302d32302030333a34333a3034223b733a363a22737461747573223b733a313a2231223b7d693a3133343b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313530223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a383a227075726368617365223b733a343a226c696e6b223b733a33303a2261646d696e2f70757263686173652f6d616e6167655f7075726368617365223b733a343a2269636f6e223b733a31333a2266612066612d61726368697665223b733a363a22706172656e74223b733a333a22313438223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d31312d32312031323a31363a3037223b733a363a22737461747573223b733a313a2231223b7d693a3133353b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313531223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31383a2270726f706f73616c735f73657474696e6773223b733a343a226c696e6b223b733a32343a2261646d696e2f73657474696e67732f70726f706f73616c73223b733a343a2269636f6e223b733a31363a2266612066612d66772066612d6c656166223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a3133363b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313532223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31373a2270757263686173655f73657474696e6773223b733a343a226c696e6b223b733a32333a2261646d696e2f73657474696e67732f7075726368617365223b733a343a2269636f6e223b733a31373a2266612066612d66772066612d747275636b223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031372d30342d32362030313a33383a3436223b733a363a22737461747573223b733a313a2232223b7d693a3133373b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313533223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31363a2270757263686173655f7061796d656e74223b733a343a226c696e6b223b733a32373a2261646d696e2f70757263686173652f616c6c5f7061796d656e7473223b733a343a2269636f6e223b733a31313a2266612066612d6d6f6e6579223b733a363a22706172656e74223b733a333a22313438223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d31302d33302030323a31323a3239223b733a363a22737461747573223b733a313a2231223b7d693a3133383b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313534223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a393a22706f735f73616c6573223b733a343a226c696e6b223b733a32333a2261646d696e2f696e766f6963652f706f735f73616c6573223b733a343a2269636f6e223b733a31343a2266612066612d636972636c652d6f223b733a363a22706172656e74223b733a323a223132223b733a343a22736f7274223b733a313a2230223b733a343a2274696d65223b733a31393a22323031382d31302d33302030323a31323a3333223b733a363a22737461747573223b733a313a2231223b7d693a3133393b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313535223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31323a2264616d6167655f6974656d73223b733a343a226c696e6b223b733a32343a2261646d696e2f6974656d732f64616d6167655f6974656d73223b733a343a2269636f6e223b733a31353a2266612066612d6269746275636b6574223b733a363a22706172656e74223b733a333a22313438223b733a343a22736f7274223b733a313a2233223b733a343a2274696d65223b733a31393a22323031382d31322d31332031393a32323a3036223b733a363a22737461747573223b733a313a2231223b7d693a3134303b4f3a383a22737464436c617373223a393a7b733a373a226d656e755f6964223b733a333a22313536223b733a31323a22636f6d70616e6965735f6964223b4e3b733a353a226c6162656c223b733a31323a226d616e756661637475726572223b733a343a226c696e6b223b733a32373a2261646d696e2f73657474696e67732f6d616e756661637475726572223b733a343a2269636f6e223b733a31383a2266612066612d66772066612d656d70697265223b733a363a22706172656e74223b733a323a223235223b733a343a22736f7274223b733a313a2232223b733a343a2274696d65223b733a31393a22323031382d31322d31332031373a34343a3133223b733a363a22737461747573223b733a313a2232223b7d7d);
INSERT INTO `tbl_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('h3v1sn98g9uupsudqp2mdv2aooqrgguu', '::1', 1598960896, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383936303839363b),
('hr2mlrb8730l9gn2hf9e4fah5a0on68k', '127.0.0.1', 1598961641, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383936313634313b6d656e755f6163746976655f69647c613a323a7b693a303b733a333a22313039223b693a313b733a313a2230223b7d),
('jg8p3nk9iech5nh1oj9rpm31k2v2cg74', '127.0.0.1', 1598960701, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383936303730313b6d656e755f6163746976655f69647c613a323a7b693a303b733a333a22313039223b693a313b733a313a2230223b7d6572726f727c733a34373a22757365726e616d65206f722070617373776f726420696e666f726d6174696f6e20646f65736e277420657869737421223b5f5f63695f766172737c613a313a7b733a353a226572726f72223b733a333a226f6c64223b7d),
('jq50mfaah2vq6bofsca5rorenlrgmr5n', '::1', 1598505310, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383530353239323b),
('mjjrlgadf7g3s8u42p7ecduaea4jeh9k', '::1', 1598960209, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383936303230393b),
('nmi7b645mk9lfk9cp2v1qhaa3b7pra95', '::1', 1598964081, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383936343034303b6d656e755f6163746976655f69647c613a323a7b693a303b733a333a22313039223b693a313b733a313a2230223b7d),
('qcjv6upkjrt0hcjkophbc7g6dm75p442', '::1', 1598504969, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383530343936393b),
('qo46ikukn2e1rh25652qd8f4431mv1n4', '::1', 1598960285, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383936303230393b),
('t1m757nfcfgslu2o4k4r0pccm07cim94', '::1', 1598503059, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539383530333035393b);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `status_id` int(11) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`status_id`, `status`) VALUES
(1, 'answered'),
(2, 'closed'),
(3, 'open'),
(5, 'in_progress');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock`
--

CREATE TABLE `tbl_stock` (
  `stock_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `stock_sub_category_id` int(11) NOT NULL,
  `saved_items_id` int(11) DEFAULT NULL,
  `total_stock` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock_category`
--

CREATE TABLE `tbl_stock_category` (
  `stock_category_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `stock_category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock_sub_category`
--

CREATE TABLE `tbl_stock_sub_category` (
  `stock_sub_category_id` int(11) NOT NULL,
  `stock_category_id` int(11) NOT NULL,
  `stock_sub_category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscribers`
--

CREATE TABLE `tbl_subscribers` (
  `subscribers_id` int(11) UNSIGNED NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `date_of_unsubscribe` date DEFAULT NULL,
  `ip` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscriptions`
--

CREATE TABLE `tbl_subscriptions` (
  `subscriptions_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `domain` varchar(250) DEFAULT NULL,
  `status` enum('pending','running','expired','suspended','terminated') DEFAULT 'pending',
  `db_id` int(10) UNSIGNED NOT NULL,
  `activation_tocken` varchar(50) DEFAULT NULL,
  `pricing_id` int(11) NOT NULL,
  `frequency` enum('monthly','yearly') DEFAULT NULL,
  `trial_period` varchar(20) DEFAULT NULL,
  `is_trial` enum('Yes','No') DEFAULT 'No',
  `expired_date` date DEFAULT NULL,
  `currency` varchar(20) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `remarks` text DEFAULT NULL,
  `maintenance_mode_message` varchar(200) DEFAULT NULL,
  `maintenance_mode` varchar(20) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscriptions_database`
--

CREATE TABLE `tbl_subscriptions_database` (
  `id` int(10) UNSIGNED NOT NULL,
  `database_name` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscriptions_history`
--

CREATE TABLE `tbl_subscriptions_history` (
  `id` int(10) UNSIGNED NOT NULL,
  `invoice_id` int(11) DEFAULT NULL,
  `subscriptions_id` int(11) DEFAULT NULL,
  `currency` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frequency` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `validity` date DEFAULT NULL,
  `amount` decimal(25,5) NOT NULL DEFAULT 0.00000,
  `source` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `multi_branch` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_no` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_no` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_no` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_no` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leads` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accounting` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_account` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `online_payment` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `calendar` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mailbox` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `live_chat` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tickets` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tasks` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filemanager` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock_manager` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recruitment` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attendance` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payroll` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leave_management` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `performance` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `training` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reports` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk_space` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('pending','running','expired','suspended','terminated') COLLATE utf8mb4_unicode_ci DEFAULT 'pending',
  `i_have_read_agree` enum('Yes','No') COLLATE utf8mb4_unicode_ci DEFAULT 'Yes',
  `payment_method` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscription_payment`
--

CREATE TABLE `tbl_subscription_payment` (
  `subscription_payment_id` int(11) NOT NULL,
  `subscriptions_history_id` int(11) DEFAULT NULL,
  `reference_no` text DEFAULT NULL,
  `transaction_id` text DEFAULT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `payment_date` varchar(20) DEFAULT NULL,
  `currency` varchar(20) DEFAULT NULL,
  `subtotal` varchar(50) DEFAULT NULL,
  `discount_percent` varchar(50) DEFAULT NULL,
  `discount_amount` varchar(50) DEFAULT NULL,
  `coupon_code` varchar(50) DEFAULT NULL,
  `total_amount` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_suppliers`
--

CREATE TABLE `tbl_suppliers` (
  `supplier_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `company` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `zip_code` varchar(10) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `tax` varchar(20) DEFAULT NULL,
  `permission` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task`
--

CREATE TABLE `tbl_task` (
  `task_id` int(5) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `milestones_id` int(11) DEFAULT NULL,
  `opportunities_id` int(11) DEFAULT NULL,
  `goal_tracking_id` int(11) DEFAULT NULL,
  `sub_task_id` int(11) DEFAULT NULL,
  `task_name` varchar(200) NOT NULL,
  `task_description` text NOT NULL,
  `task_start_date` timestamp NULL DEFAULT NULL,
  `due_date` timestamp NULL DEFAULT NULL,
  `task_created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `task_status` varchar(30) DEFAULT NULL,
  `task_progress` int(2) NOT NULL,
  `calculate_progress` varchar(200) DEFAULT NULL,
  `task_hour` varchar(10) NOT NULL,
  `tasks_notes` text DEFAULT NULL,
  `timer_status` enum('on','off') NOT NULL DEFAULT 'off',
  `timer_started_by` int(11) DEFAULT NULL,
  `start_time` int(11) DEFAULT NULL,
  `logged_time` int(11) NOT NULL DEFAULT 0,
  `leads_id` int(11) DEFAULT NULL,
  `bug_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `permission` text DEFAULT NULL,
  `client_visible` varchar(5) DEFAULT NULL,
  `custom_date` text DEFAULT NULL,
  `hourly_rate` decimal(18,2) DEFAULT 0.00,
  `billable` varchar(20) NOT NULL DEFAULT 'No',
  `index_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tasks_timer`
--

CREATE TABLE `tbl_tasks_timer` (
  `tasks_timer_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `start_time` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `end_time` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_timed` timestamp NOT NULL DEFAULT current_timestamp(),
  `reason` text CHARACTER SET utf8 DEFAULT NULL,
  `edited_by` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task_attachment`
--

CREATE TABLE `tbl_task_attachment` (
  `task_attachment_id` int(5) NOT NULL,
  `task_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `upload_time` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `leads_id` int(11) DEFAULT NULL,
  `opportunities_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `bug_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task_comment`
--

CREATE TABLE `tbl_task_comment` (
  `task_comment_id` int(5) NOT NULL,
  `task_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `comment` text NOT NULL,
  `comments_attachment` text DEFAULT NULL,
  `comment_datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `leads_id` int(11) DEFAULT NULL,
  `opportunities_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `bug_id` int(11) DEFAULT NULL,
  `goal_tracking_id` int(11) DEFAULT NULL,
  `task_attachment_id` int(11) DEFAULT 0,
  `uploaded_files_id` int(11) DEFAULT 0,
  `comments_reply_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task_uploaded_files`
--

CREATE TABLE `tbl_task_uploaded_files` (
  `uploaded_files_id` int(11) NOT NULL,
  `task_attachment_id` int(11) NOT NULL,
  `files` text NOT NULL,
  `uploaded_path` text NOT NULL,
  `file_name` text NOT NULL,
  `size` int(10) NOT NULL,
  `ext` varchar(100) NOT NULL,
  `is_image` int(2) NOT NULL,
  `image_width` int(5) NOT NULL,
  `image_height` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tax_rates`
--

CREATE TABLE `tbl_tax_rates` (
  `tax_rates_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `tax_rate_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `tax_rate_percent` decimal(10,2) NOT NULL DEFAULT 0.00,
  `permission` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tickets`
--

CREATE TABLE `tbl_tickets` (
  `tickets_id` int(10) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT 0,
  `ticket_code` varchar(32) DEFAULT NULL,
  `subject` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` text DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `departments_id` int(11) DEFAULT NULL,
  `reporter` int(10) DEFAULT 0,
  `priority` varchar(50) DEFAULT NULL,
  `upload_file` text DEFAULT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `permission` text DEFAULT NULL,
  `last_reply` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tickets_replies`
--

CREATE TABLE `tbl_tickets_replies` (
  `tickets_replies_id` int(10) NOT NULL,
  `tickets_id` bigint(10) DEFAULT NULL,
  `ticket_reply_id` int(11) DEFAULT 0,
  `body` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `replier` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `replierid` int(10) DEFAULT NULL,
  `attachment` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_todo`
--

CREATE TABLE `tbl_todo` (
  `todo_id` int(11) NOT NULL,
  `title` longtext COLLATE utf8_unicode_ci NOT NULL,
  `user_id` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `due_date` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '1= in_progress 2= on hold 3= done',
  `assigned` int(11) NOT NULL DEFAULT 0,
  `order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_training`
--

CREATE TABLE `tbl_training` (
  `training_id` int(5) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `assigned_by` int(11) NOT NULL,
  `training_name` varchar(100) NOT NULL,
  `vendor_name` varchar(100) NOT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `finish_date` timestamp NULL DEFAULT NULL,
  `training_cost` varchar(300) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = pending, 1 = started, 2 = completed, 3 = terminated',
  `performance` tinyint(1) DEFAULT 0 COMMENT '0 = not concluded, 1 = satisfactory, 2 = average, 3 = poor, 4 = excellent',
  `remarks` text NOT NULL,
  `upload_file` text DEFAULT NULL,
  `permission` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transactions`
--

CREATE TABLE `tbl_transactions` (
  `transactions_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `account_id` int(11) NOT NULL,
  `invoices_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(200) DEFAULT NULL,
  `type` enum('Income','Expense','Transfer') NOT NULL,
  `category_id` int(11) NOT NULL,
  `amount` decimal(18,2) NOT NULL,
  `paid_by` int(11) NOT NULL DEFAULT 0,
  `payment_methods_id` int(11) NOT NULL,
  `reference` varchar(200) NOT NULL,
  `status` enum('non_approved','paid','unpaid') DEFAULT 'non_approved',
  `notes` text NOT NULL,
  `tags` text NOT NULL,
  `tax` decimal(18,2) NOT NULL DEFAULT 0.00,
  `date` timestamp NULL DEFAULT NULL,
  `debit` decimal(18,2) NOT NULL DEFAULT 0.00,
  `credit` decimal(18,2) NOT NULL DEFAULT 0.00,
  `total_balance` decimal(18,2) NOT NULL DEFAULT 0.00,
  `transfer_id` int(11) NOT NULL DEFAULT 0,
  `permission` text DEFAULT NULL,
  `attachement` text DEFAULT NULL,
  `client_visible` enum('Yes','No') NOT NULL DEFAULT 'No',
  `added_by` int(11) NOT NULL DEFAULT 0,
  `paid` int(11) NOT NULL DEFAULT 0,
  `billable` enum('Yes','No') NOT NULL DEFAULT 'No',
  `customer_deposit` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transfer`
--

CREATE TABLE `tbl_transfer` (
  `transfer_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `to_account_id` int(11) NOT NULL,
  `from_account_id` int(11) NOT NULL,
  `amount` decimal(18,2) NOT NULL,
  `payment_methods_id` int(11) NOT NULL,
  `reference` varchar(200) NOT NULL,
  `status` enum('Cleared','Uncleared','Reconciled','Void') NOT NULL DEFAULT 'Cleared',
  `notes` text NOT NULL,
  `date` date NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'Transfer',
  `permission` mediumtext DEFAULT NULL,
  `attachement` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uploaded_files`
--

CREATE TABLE `tbl_uploaded_files` (
  `uploaded_files_id` int(11) NOT NULL,
  `files_id` int(11) NOT NULL,
  `files` text NOT NULL,
  `uploaded_path` text NOT NULL,
  `file_name` text NOT NULL,
  `size` int(10) NOT NULL,
  `ext` varchar(100) NOT NULL,
  `is_image` int(2) NOT NULL,
  `image_width` int(5) NOT NULL,
  `image_height` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `super_admin` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT 2,
  `activated` tinyint(1) NOT NULL DEFAULT 0,
  `banned` tinyint(4) NOT NULL DEFAULT 0,
  `ban_reason` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_login` datetime NOT NULL DEFAULT '2019-05-05 00:00:00',
  `created` datetime NOT NULL DEFAULT '2019-05-05 00:00:00',
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `online_time` int(32) NOT NULL DEFAULT 0 COMMENT '1 = online 0 = offline ',
  `permission` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `active_email` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtp_email_type` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtp_encription` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtp_action` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtp_host_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtp_username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtp_password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtp_port` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtp_additional_flag` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_postmaster_run` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `media_path_slug` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `password`, `email`, `super_admin`, `companies_id`, `role_id`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`, `online_time`, `permission`, `active_email`, `smtp_email_type`, `smtp_encription`, `smtp_action`, `smtp_host_name`, `smtp_username`, `smtp_password`, `smtp_port`, `smtp_additional_flag`, `last_postmaster_run`, `media_path_slug`) VALUES
(1, 'admin', '55677fc54be3b674770b697114ce0730300da0f6783202e2d17d7191ba68ec97cab4b61d3470f298d0ca2435111c29b8d5ad63058b725916336fdab9584829f4', 'stefano2k4@gmail.com', 'owner', NULL, 1, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, '2019-05-05 00:00:00', '2020-08-27 06:25:46', '2020-09-08 05:07:35', 1599541655, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_role`
--

CREATE TABLE `tbl_user_role` (
  `user_role_id` int(11) NOT NULL,
  `designations_id` int(11) DEFAULT NULL,
  `menu_id` int(11) NOT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `created` int(11) NOT NULL DEFAULT 0,
  `edited` int(11) NOT NULL DEFAULT 0,
  `deleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_working_days`
--

CREATE TABLE `tbl_working_days` (
  `working_days_id` int(11) NOT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `day_id` int(5) NOT NULL,
  `start_hours` varchar(30) NOT NULL,
  `end_hours` varchar(20) NOT NULL,
  `flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `installer`
--
ALTER TABLE `installer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `tbl_account_details`
--
ALTER TABLE `tbl_account_details`
  ADD PRIMARY KEY (`account_details_id`);

--
-- Indexes for table `tbl_activities`
--
ALTER TABLE `tbl_activities`
  ADD PRIMARY KEY (`activities_id`);

--
-- Indexes for table `tbl_advance_salary`
--
ALTER TABLE `tbl_advance_salary`
  ADD PRIMARY KEY (`advance_salary_id`);

--
-- Indexes for table `tbl_announcements`
--
ALTER TABLE `tbl_announcements`
  ADD PRIMARY KEY (`announcements_id`);

--
-- Indexes for table `tbl_applied_coupon`
--
ALTER TABLE `tbl_applied_coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_assign_item`
--
ALTER TABLE `tbl_assign_item`
  ADD PRIMARY KEY (`assign_item_id`);

--
-- Indexes for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `tbl_bug`
--
ALTER TABLE `tbl_bug`
  ADD PRIMARY KEY (`bug_id`);

--
-- Indexes for table `tbl_calls`
--
ALTER TABLE `tbl_calls`
  ADD PRIMARY KEY (`calls_id`);

--
-- Indexes for table `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `tbl_client_menu`
--
ALTER TABLE `tbl_client_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `tbl_client_role`
--
ALTER TABLE `tbl_client_role`
  ADD PRIMARY KEY (`client_role_id`);

--
-- Indexes for table `tbl_clock`
--
ALTER TABLE `tbl_clock`
  ADD PRIMARY KEY (`clock_id`);

--
-- Indexes for table `tbl_clock_history`
--
ALTER TABLE `tbl_clock_history`
  ADD PRIMARY KEY (`clock_history_id`);

--
-- Indexes for table `tbl_companies`
--
ALTER TABLE `tbl_companies`
  ADD PRIMARY KEY (`companies_id`);

--
-- Indexes for table `tbl_contract_type`
--
ALTER TABLE `tbl_contract_type`
  ADD PRIMARY KEY (`contract_type_id`);

--
-- Indexes for table `tbl_countries`
--
ALTER TABLE `tbl_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_currencies`
--
ALTER TABLE `tbl_currencies`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `tbl_currencywise_price`
--
ALTER TABLE `tbl_currencywise_price`
  ADD PRIMARY KEY (`currencywise_price_id`);

--
-- Indexes for table `tbl_customer_group`
--
ALTER TABLE `tbl_customer_group`
  ADD PRIMARY KEY (`customer_group_id`);

--
-- Indexes for table `tbl_customer_ratings`
--
ALTER TABLE `tbl_customer_ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_custom_field`
--
ALTER TABLE `tbl_custom_field`
  ADD PRIMARY KEY (`custom_field_id`);

--
-- Indexes for table `tbl_damage_product`
--
ALTER TABLE `tbl_damage_product`
  ADD PRIMARY KEY (`damage_product_id`);

--
-- Indexes for table `tbl_dashboard`
--
ALTER TABLE `tbl_dashboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_days`
--
ALTER TABLE `tbl_days`
  ADD PRIMARY KEY (`day_id`);

--
-- Indexes for table `tbl_departments`
--
ALTER TABLE `tbl_departments`
  ADD PRIMARY KEY (`departments_id`);

--
-- Indexes for table `tbl_designations`
--
ALTER TABLE `tbl_designations`
  ADD PRIMARY KEY (`designations_id`);

--
-- Indexes for table `tbl_discipline`
--
ALTER TABLE `tbl_discipline`
  ADD PRIMARY KEY (`discipline_id`);

--
-- Indexes for table `tbl_draft`
--
ALTER TABLE `tbl_draft`
  ADD PRIMARY KEY (`draft_id`);

--
-- Indexes for table `tbl_email_templates`
--
ALTER TABLE `tbl_email_templates`
  ADD PRIMARY KEY (`email_templates_id`);

--
-- Indexes for table `tbl_employee_award`
--
ALTER TABLE `tbl_employee_award`
  ADD PRIMARY KEY (`employee_award_id`);

--
-- Indexes for table `tbl_employee_bank`
--
ALTER TABLE `tbl_employee_bank`
  ADD PRIMARY KEY (`employee_bank_id`);

--
-- Indexes for table `tbl_employee_document`
--
ALTER TABLE `tbl_employee_document`
  ADD PRIMARY KEY (`document_id`);

--
-- Indexes for table `tbl_employee_payroll`
--
ALTER TABLE `tbl_employee_payroll`
  ADD PRIMARY KEY (`payroll_id`);

--
-- Indexes for table `tbl_estimates`
--
ALTER TABLE `tbl_estimates`
  ADD PRIMARY KEY (`estimates_id`);

--
-- Indexes for table `tbl_estimate_items`
--
ALTER TABLE `tbl_estimate_items`
  ADD PRIMARY KEY (`estimate_items_id`);

--
-- Indexes for table `tbl_expense_category`
--
ALTER TABLE `tbl_expense_category`
  ADD PRIMARY KEY (`expense_category_id`);

--
-- Indexes for table `tbl_files`
--
ALTER TABLE `tbl_files`
  ADD PRIMARY KEY (`files_id`);

--
-- Indexes for table `tbl_form`
--
ALTER TABLE `tbl_form`
  ADD PRIMARY KEY (`form_id`);

--
-- Indexes for table `tbl_frontend_coupon`
--
ALTER TABLE `tbl_frontend_coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_frontend_features`
--
ALTER TABLE `tbl_frontend_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_frontend_menu`
--
ALTER TABLE `tbl_frontend_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `tbl_frontend_pricing`
--
ALTER TABLE `tbl_frontend_pricing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_frontend_slider`
--
ALTER TABLE `tbl_frontend_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_goal_tracking`
--
ALTER TABLE `tbl_goal_tracking`
  ADD PRIMARY KEY (`goal_tracking_id`);

--
-- Indexes for table `tbl_goal_type`
--
ALTER TABLE `tbl_goal_type`
  ADD PRIMARY KEY (`goal_type_id`);

--
-- Indexes for table `tbl_holiday`
--
ALTER TABLE `tbl_holiday`
  ADD PRIMARY KEY (`holiday_id`);

--
-- Indexes for table `tbl_hourly_rate`
--
ALTER TABLE `tbl_hourly_rate`
  ADD PRIMARY KEY (`hourly_rate_id`);

--
-- Indexes for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  ADD PRIMARY KEY (`inbox_id`);

--
-- Indexes for table `tbl_income_category`
--
ALTER TABLE `tbl_income_category`
  ADD PRIMARY KEY (`income_category_id`);

--
-- Indexes for table `tbl_invoices`
--
ALTER TABLE `tbl_invoices`
  ADD PRIMARY KEY (`invoices_id`);

--
-- Indexes for table `tbl_items`
--
ALTER TABLE `tbl_items`
  ADD PRIMARY KEY (`items_id`);

--
-- Indexes for table `tbl_item_history`
--
ALTER TABLE `tbl_item_history`
  ADD PRIMARY KEY (`item_history_id`);

--
-- Indexes for table `tbl_job_appliactions`
--
ALTER TABLE `tbl_job_appliactions`
  ADD PRIMARY KEY (`job_appliactions_id`);

--
-- Indexes for table `tbl_job_circular`
--
ALTER TABLE `tbl_job_circular`
  ADD PRIMARY KEY (`job_circular_id`);

--
-- Indexes for table `tbl_kb_category`
--
ALTER TABLE `tbl_kb_category`
  ADD PRIMARY KEY (`kb_category_id`);

--
-- Indexes for table `tbl_knowledgebase`
--
ALTER TABLE `tbl_knowledgebase`
  ADD PRIMARY KEY (`kb_id`);

--
-- Indexes for table `tbl_languages`
--
ALTER TABLE `tbl_languages`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `tbl_leads`
--
ALTER TABLE `tbl_leads`
  ADD PRIMARY KEY (`leads_id`);

--
-- Indexes for table `tbl_lead_source`
--
ALTER TABLE `tbl_lead_source`
  ADD PRIMARY KEY (`lead_source_id`);

--
-- Indexes for table `tbl_lead_status`
--
ALTER TABLE `tbl_lead_status`
  ADD PRIMARY KEY (`lead_status_id`);

--
-- Indexes for table `tbl_leave_application`
--
ALTER TABLE `tbl_leave_application`
  ADD PRIMARY KEY (`leave_application_id`);

--
-- Indexes for table `tbl_leave_category`
--
ALTER TABLE `tbl_leave_category`
  ADD PRIMARY KEY (`leave_category_id`);

--
-- Indexes for table `tbl_locales`
--
ALTER TABLE `tbl_locales`
  ADD PRIMARY KEY (`locale`);

--
-- Indexes for table `tbl_manufacturer`
--
ALTER TABLE `tbl_manufacturer`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `tbl_mettings`
--
ALTER TABLE `tbl_mettings`
  ADD PRIMARY KEY (`mettings_id`);

--
-- Indexes for table `tbl_milestones`
--
ALTER TABLE `tbl_milestones`
  ADD PRIMARY KEY (`milestones_id`);

--
-- Indexes for table `tbl_notes`
--
ALTER TABLE `tbl_notes`
  ADD PRIMARY KEY (`notes_id`);

--
-- Indexes for table `tbl_notifications`
--
ALTER TABLE `tbl_notifications`
  ADD PRIMARY KEY (`notifications_id`);

--
-- Indexes for table `tbl_offence_category`
--
ALTER TABLE `tbl_offence_category`
  ADD PRIMARY KEY (`offence_id`);

--
-- Indexes for table `tbl_online_payment`
--
ALTER TABLE `tbl_online_payment`
  ADD PRIMARY KEY (`online_payment_id`);

--
-- Indexes for table `tbl_opportunities`
--
ALTER TABLE `tbl_opportunities`
  ADD PRIMARY KEY (`opportunities_id`);

--
-- Indexes for table `tbl_opportunities_state_reason`
--
ALTER TABLE `tbl_opportunities_state_reason`
  ADD PRIMARY KEY (`opportunities_state_reason_id`);

--
-- Indexes for table `tbl_overtime`
--
ALTER TABLE `tbl_overtime`
  ADD PRIMARY KEY (`overtime_id`);

--
-- Indexes for table `tbl_partners`
--
ALTER TABLE `tbl_partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payments`
--
ALTER TABLE `tbl_payments`
  ADD PRIMARY KEY (`payments_id`);

--
-- Indexes for table `tbl_payment_methods`
--
ALTER TABLE `tbl_payment_methods`
  ADD PRIMARY KEY (`payment_methods_id`);

--
-- Indexes for table `tbl_penalty_category`
--
ALTER TABLE `tbl_penalty_category`
  ADD PRIMARY KEY (`penalty_id`);

--
-- Indexes for table `tbl_performance_apprisal`
--
ALTER TABLE `tbl_performance_apprisal`
  ADD PRIMARY KEY (`performance_appraisal_id`);

--
-- Indexes for table `tbl_performance_indicator`
--
ALTER TABLE `tbl_performance_indicator`
  ADD PRIMARY KEY (`performance_indicator_id`);

--
-- Indexes for table `tbl_pinaction`
--
ALTER TABLE `tbl_pinaction`
  ADD PRIMARY KEY (`pinaction_id`);

--
-- Indexes for table `tbl_priority`
--
ALTER TABLE `tbl_priority`
  ADD PRIMARY KEY (`priority_id`);

--
-- Indexes for table `tbl_private_chat`
--
ALTER TABLE `tbl_private_chat`
  ADD PRIMARY KEY (`private_chat_id`);

--
-- Indexes for table `tbl_private_chat_messages`
--
ALTER TABLE `tbl_private_chat_messages`
  ADD PRIMARY KEY (`private_chat_messages_id`);

--
-- Indexes for table `tbl_private_chat_users`
--
ALTER TABLE `tbl_private_chat_users`
  ADD PRIMARY KEY (`private_chat_users_id`);

--
-- Indexes for table `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `tbl_project_settings`
--
ALTER TABLE `tbl_project_settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Indexes for table `tbl_proposals`
--
ALTER TABLE `tbl_proposals`
  ADD PRIMARY KEY (`proposals_id`);

--
-- Indexes for table `tbl_proposals_items`
--
ALTER TABLE `tbl_proposals_items`
  ADD PRIMARY KEY (`proposals_items_id`);

--
-- Indexes for table `tbl_purchases`
--
ALTER TABLE `tbl_purchases`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `tbl_purchase_items`
--
ALTER TABLE `tbl_purchase_items`
  ADD PRIMARY KEY (`items_id`);

--
-- Indexes for table `tbl_purchase_payments`
--
ALTER TABLE `tbl_purchase_payments`
  ADD PRIMARY KEY (`payments_id`);

--
-- Indexes for table `tbl_quotationforms`
--
ALTER TABLE `tbl_quotationforms`
  ADD PRIMARY KEY (`quotationforms_id`);

--
-- Indexes for table `tbl_quotations`
--
ALTER TABLE `tbl_quotations`
  ADD PRIMARY KEY (`quotations_id`);

--
-- Indexes for table `tbl_quotation_details`
--
ALTER TABLE `tbl_quotation_details`
  ADD PRIMARY KEY (`quotation_details_id`);

--
-- Indexes for table `tbl_reminders`
--
ALTER TABLE `tbl_reminders`
  ADD PRIMARY KEY (`reminder_id`),
  ADD KEY `rel_id` (`module`),
  ADD KEY `rel_type` (`user_id`);

--
-- Indexes for table `tbl_request_quote`
--
ALTER TABLE `tbl_request_quote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_salary_allowance`
--
ALTER TABLE `tbl_salary_allowance`
  ADD PRIMARY KEY (`salary_allowance_id`);

--
-- Indexes for table `tbl_salary_deduction`
--
ALTER TABLE `tbl_salary_deduction`
  ADD PRIMARY KEY (`salary_deduction_id`);

--
-- Indexes for table `tbl_salary_payment`
--
ALTER TABLE `tbl_salary_payment`
  ADD PRIMARY KEY (`salary_payment_id`);

--
-- Indexes for table `tbl_salary_payment_allowance`
--
ALTER TABLE `tbl_salary_payment_allowance`
  ADD PRIMARY KEY (`salary_payment_allowance_id`);

--
-- Indexes for table `tbl_salary_payment_deduction`
--
ALTER TABLE `tbl_salary_payment_deduction`
  ADD PRIMARY KEY (`salary_payment_deduction`);

--
-- Indexes for table `tbl_salary_payment_details`
--
ALTER TABLE `tbl_salary_payment_details`
  ADD PRIMARY KEY (`salary_payment_details_id`);

--
-- Indexes for table `tbl_salary_payslip`
--
ALTER TABLE `tbl_salary_payslip`
  ADD PRIMARY KEY (`payslip_id`);

--
-- Indexes for table `tbl_salary_template`
--
ALTER TABLE `tbl_salary_template`
  ADD PRIMARY KEY (`salary_template_id`);

--
-- Indexes for table `tbl_saved_items`
--
ALTER TABLE `tbl_saved_items`
  ADD PRIMARY KEY (`saved_items_id`);

--
-- Indexes for table `tbl_sent`
--
ALTER TABLE `tbl_sent`
  ADD PRIMARY KEY (`sent_id`);

--
-- Indexes for table `tbl_sessions`
--
ALTER TABLE `tbl_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `tbl_stock_category`
--
ALTER TABLE `tbl_stock_category`
  ADD PRIMARY KEY (`stock_category_id`);

--
-- Indexes for table `tbl_stock_sub_category`
--
ALTER TABLE `tbl_stock_sub_category`
  ADD PRIMARY KEY (`stock_sub_category_id`);

--
-- Indexes for table `tbl_subscribers`
--
ALTER TABLE `tbl_subscribers`
  ADD PRIMARY KEY (`subscribers_id`);

--
-- Indexes for table `tbl_subscriptions`
--
ALTER TABLE `tbl_subscriptions`
  ADD PRIMARY KEY (`subscriptions_id`);

--
-- Indexes for table `tbl_subscriptions_database`
--
ALTER TABLE `tbl_subscriptions_database`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_subscriptions_history`
--
ALTER TABLE `tbl_subscriptions_history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subscriptions_instance_id_foreign` (`subscriptions_id`),
  ADD KEY `subscriptions_currency_id_foreign` (`currency`);

--
-- Indexes for table `tbl_subscription_payment`
--
ALTER TABLE `tbl_subscription_payment`
  ADD PRIMARY KEY (`subscription_payment_id`);

--
-- Indexes for table `tbl_suppliers`
--
ALTER TABLE `tbl_suppliers`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `tbl_task`
--
ALTER TABLE `tbl_task`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `tbl_tasks_timer`
--
ALTER TABLE `tbl_tasks_timer`
  ADD PRIMARY KEY (`tasks_timer_id`);

--
-- Indexes for table `tbl_task_attachment`
--
ALTER TABLE `tbl_task_attachment`
  ADD PRIMARY KEY (`task_attachment_id`);

--
-- Indexes for table `tbl_task_comment`
--
ALTER TABLE `tbl_task_comment`
  ADD PRIMARY KEY (`task_comment_id`);

--
-- Indexes for table `tbl_task_uploaded_files`
--
ALTER TABLE `tbl_task_uploaded_files`
  ADD PRIMARY KEY (`uploaded_files_id`);

--
-- Indexes for table `tbl_tax_rates`
--
ALTER TABLE `tbl_tax_rates`
  ADD KEY `Index 1` (`tax_rates_id`);

--
-- Indexes for table `tbl_tickets`
--
ALTER TABLE `tbl_tickets`
  ADD PRIMARY KEY (`tickets_id`);

--
-- Indexes for table `tbl_tickets_replies`
--
ALTER TABLE `tbl_tickets_replies`
  ADD PRIMARY KEY (`tickets_replies_id`);

--
-- Indexes for table `tbl_todo`
--
ALTER TABLE `tbl_todo`
  ADD PRIMARY KEY (`todo_id`);

--
-- Indexes for table `tbl_training`
--
ALTER TABLE `tbl_training`
  ADD PRIMARY KEY (`training_id`);

--
-- Indexes for table `tbl_transactions`
--
ALTER TABLE `tbl_transactions`
  ADD PRIMARY KEY (`transactions_id`);

--
-- Indexes for table `tbl_transfer`
--
ALTER TABLE `tbl_transfer`
  ADD PRIMARY KEY (`transfer_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  ADD PRIMARY KEY (`user_role_id`);

--
-- Indexes for table `tbl_working_days`
--
ALTER TABLE `tbl_working_days`
  ADD PRIMARY KEY (`working_days_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_account_details`
--
ALTER TABLE `tbl_account_details`
  MODIFY `account_details_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_activities`
--
ALTER TABLE `tbl_activities`
  MODIFY `activities_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_advance_salary`
--
ALTER TABLE `tbl_advance_salary`
  MODIFY `advance_salary_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_announcements`
--
ALTER TABLE `tbl_announcements`
  MODIFY `announcements_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_applied_coupon`
--
ALTER TABLE `tbl_applied_coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_assign_item`
--
ALTER TABLE `tbl_assign_item`
  MODIFY `assign_item_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_bug`
--
ALTER TABLE `tbl_bug`
  MODIFY `bug_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_calls`
--
ALTER TABLE `tbl_calls`
  MODIFY `calls_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_client_menu`
--
ALTER TABLE `tbl_client_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_client_role`
--
ALTER TABLE `tbl_client_role`
  MODIFY `client_role_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_clock`
--
ALTER TABLE `tbl_clock`
  MODIFY `clock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_clock_history`
--
ALTER TABLE `tbl_clock_history`
  MODIFY `clock_history_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_companies`
--
ALTER TABLE `tbl_companies`
  MODIFY `companies_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_contract_type`
--
ALTER TABLE `tbl_contract_type`
  MODIFY `contract_type_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_countries`
--
ALTER TABLE `tbl_countries`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT for table `tbl_currencywise_price`
--
ALTER TABLE `tbl_currencywise_price`
  MODIFY `currencywise_price_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_customer_group`
--
ALTER TABLE `tbl_customer_group`
  MODIFY `customer_group_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_customer_ratings`
--
ALTER TABLE `tbl_customer_ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_custom_field`
--
ALTER TABLE `tbl_custom_field`
  MODIFY `custom_field_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_damage_product`
--
ALTER TABLE `tbl_damage_product`
  MODIFY `damage_product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_dashboard`
--
ALTER TABLE `tbl_dashboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `tbl_days`
--
ALTER TABLE `tbl_days`
  MODIFY `day_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_departments`
--
ALTER TABLE `tbl_departments`
  MODIFY `departments_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_designations`
--
ALTER TABLE `tbl_designations`
  MODIFY `designations_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_discipline`
--
ALTER TABLE `tbl_discipline`
  MODIFY `discipline_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_draft`
--
ALTER TABLE `tbl_draft`
  MODIFY `draft_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_email_templates`
--
ALTER TABLE `tbl_email_templates`
  MODIFY `email_templates_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tbl_employee_award`
--
ALTER TABLE `tbl_employee_award`
  MODIFY `employee_award_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_employee_bank`
--
ALTER TABLE `tbl_employee_bank`
  MODIFY `employee_bank_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_employee_document`
--
ALTER TABLE `tbl_employee_document`
  MODIFY `document_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_employee_payroll`
--
ALTER TABLE `tbl_employee_payroll`
  MODIFY `payroll_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_estimates`
--
ALTER TABLE `tbl_estimates`
  MODIFY `estimates_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_estimate_items`
--
ALTER TABLE `tbl_estimate_items`
  MODIFY `estimate_items_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_expense_category`
--
ALTER TABLE `tbl_expense_category`
  MODIFY `expense_category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_files`
--
ALTER TABLE `tbl_files`
  MODIFY `files_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_form`
--
ALTER TABLE `tbl_form`
  MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_frontend_coupon`
--
ALTER TABLE `tbl_frontend_coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_frontend_features`
--
ALTER TABLE `tbl_frontend_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_frontend_menu`
--
ALTER TABLE `tbl_frontend_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_frontend_pricing`
--
ALTER TABLE `tbl_frontend_pricing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_frontend_slider`
--
ALTER TABLE `tbl_frontend_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_goal_tracking`
--
ALTER TABLE `tbl_goal_tracking`
  MODIFY `goal_tracking_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_goal_type`
--
ALTER TABLE `tbl_goal_type`
  MODIFY `goal_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_holiday`
--
ALTER TABLE `tbl_holiday`
  MODIFY `holiday_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_hourly_rate`
--
ALTER TABLE `tbl_hourly_rate`
  MODIFY `hourly_rate_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  MODIFY `inbox_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_income_category`
--
ALTER TABLE `tbl_income_category`
  MODIFY `income_category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_invoices`
--
ALTER TABLE `tbl_invoices`
  MODIFY `invoices_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_items`
--
ALTER TABLE `tbl_items`
  MODIFY `items_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_item_history`
--
ALTER TABLE `tbl_item_history`
  MODIFY `item_history_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_job_appliactions`
--
ALTER TABLE `tbl_job_appliactions`
  MODIFY `job_appliactions_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_job_circular`
--
ALTER TABLE `tbl_job_circular`
  MODIFY `job_circular_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kb_category`
--
ALTER TABLE `tbl_kb_category`
  MODIFY `kb_category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_knowledgebase`
--
ALTER TABLE `tbl_knowledgebase`
  MODIFY `kb_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_leads`
--
ALTER TABLE `tbl_leads`
  MODIFY `leads_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_lead_source`
--
ALTER TABLE `tbl_lead_source`
  MODIFY `lead_source_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_lead_status`
--
ALTER TABLE `tbl_lead_status`
  MODIFY `lead_status_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_leave_application`
--
ALTER TABLE `tbl_leave_application`
  MODIFY `leave_application_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_leave_category`
--
ALTER TABLE `tbl_leave_category`
  MODIFY `leave_category_id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_manufacturer`
--
ALTER TABLE `tbl_manufacturer`
  MODIFY `manufacturer_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `tbl_mettings`
--
ALTER TABLE `tbl_mettings`
  MODIFY `mettings_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_milestones`
--
ALTER TABLE `tbl_milestones`
  MODIFY `milestones_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_notes`
--
ALTER TABLE `tbl_notes`
  MODIFY `notes_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_notifications`
--
ALTER TABLE `tbl_notifications`
  MODIFY `notifications_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_offence_category`
--
ALTER TABLE `tbl_offence_category`
  MODIFY `offence_id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_online_payment`
--
ALTER TABLE `tbl_online_payment`
  MODIFY `online_payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_opportunities`
--
ALTER TABLE `tbl_opportunities`
  MODIFY `opportunities_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_opportunities_state_reason`
--
ALTER TABLE `tbl_opportunities_state_reason`
  MODIFY `opportunities_state_reason_id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_overtime`
--
ALTER TABLE `tbl_overtime`
  MODIFY `overtime_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_partners`
--
ALTER TABLE `tbl_partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_payments`
--
ALTER TABLE `tbl_payments`
  MODIFY `payments_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_payment_methods`
--
ALTER TABLE `tbl_payment_methods`
  MODIFY `payment_methods_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_penalty_category`
--
ALTER TABLE `tbl_penalty_category`
  MODIFY `penalty_id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_performance_apprisal`
--
ALTER TABLE `tbl_performance_apprisal`
  MODIFY `performance_appraisal_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_performance_indicator`
--
ALTER TABLE `tbl_performance_indicator`
  MODIFY `performance_indicator_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_pinaction`
--
ALTER TABLE `tbl_pinaction`
  MODIFY `pinaction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_priority`
--
ALTER TABLE `tbl_priority`
  MODIFY `priority_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_private_chat`
--
ALTER TABLE `tbl_private_chat`
  MODIFY `private_chat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_private_chat_messages`
--
ALTER TABLE `tbl_private_chat_messages`
  MODIFY `private_chat_messages_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_private_chat_users`
--
ALTER TABLE `tbl_private_chat_users`
  MODIFY `private_chat_users_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_project`
--
ALTER TABLE `tbl_project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_project_settings`
--
ALTER TABLE `tbl_project_settings`
  MODIFY `settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_proposals`
--
ALTER TABLE `tbl_proposals`
  MODIFY `proposals_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_proposals_items`
--
ALTER TABLE `tbl_proposals_items`
  MODIFY `proposals_items_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_purchases`
--
ALTER TABLE `tbl_purchases`
  MODIFY `purchase_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_purchase_items`
--
ALTER TABLE `tbl_purchase_items`
  MODIFY `items_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_purchase_payments`
--
ALTER TABLE `tbl_purchase_payments`
  MODIFY `payments_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_quotationforms`
--
ALTER TABLE `tbl_quotationforms`
  MODIFY `quotationforms_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_quotations`
--
ALTER TABLE `tbl_quotations`
  MODIFY `quotations_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_quotation_details`
--
ALTER TABLE `tbl_quotation_details`
  MODIFY `quotation_details_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_reminders`
--
ALTER TABLE `tbl_reminders`
  MODIFY `reminder_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_request_quote`
--
ALTER TABLE `tbl_request_quote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_salary_allowance`
--
ALTER TABLE `tbl_salary_allowance`
  MODIFY `salary_allowance_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_salary_deduction`
--
ALTER TABLE `tbl_salary_deduction`
  MODIFY `salary_deduction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_salary_payment`
--
ALTER TABLE `tbl_salary_payment`
  MODIFY `salary_payment_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_salary_payment_allowance`
--
ALTER TABLE `tbl_salary_payment_allowance`
  MODIFY `salary_payment_allowance_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_salary_payment_deduction`
--
ALTER TABLE `tbl_salary_payment_deduction`
  MODIFY `salary_payment_deduction` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_salary_payment_details`
--
ALTER TABLE `tbl_salary_payment_details`
  MODIFY `salary_payment_details_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_salary_payslip`
--
ALTER TABLE `tbl_salary_payslip`
  MODIFY `payslip_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_salary_template`
--
ALTER TABLE `tbl_salary_template`
  MODIFY `salary_template_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_saved_items`
--
ALTER TABLE `tbl_saved_items`
  MODIFY `saved_items_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_sent`
--
ALTER TABLE `tbl_sent`
  MODIFY `sent_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_stock_category`
--
ALTER TABLE `tbl_stock_category`
  MODIFY `stock_category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_stock_sub_category`
--
ALTER TABLE `tbl_stock_sub_category`
  MODIFY `stock_sub_category_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_subscribers`
--
ALTER TABLE `tbl_subscribers`
  MODIFY `subscribers_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_subscriptions`
--
ALTER TABLE `tbl_subscriptions`
  MODIFY `subscriptions_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_subscriptions_database`
--
ALTER TABLE `tbl_subscriptions_database`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_subscriptions_history`
--
ALTER TABLE `tbl_subscriptions_history`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_subscription_payment`
--
ALTER TABLE `tbl_subscription_payment`
  MODIFY `subscription_payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_suppliers`
--
ALTER TABLE `tbl_suppliers`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_task`
--
ALTER TABLE `tbl_task`
  MODIFY `task_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_tasks_timer`
--
ALTER TABLE `tbl_tasks_timer`
  MODIFY `tasks_timer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_task_attachment`
--
ALTER TABLE `tbl_task_attachment`
  MODIFY `task_attachment_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_task_comment`
--
ALTER TABLE `tbl_task_comment`
  MODIFY `task_comment_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_task_uploaded_files`
--
ALTER TABLE `tbl_task_uploaded_files`
  MODIFY `uploaded_files_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_tax_rates`
--
ALTER TABLE `tbl_tax_rates`
  MODIFY `tax_rates_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_tickets`
--
ALTER TABLE `tbl_tickets`
  MODIFY `tickets_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_tickets_replies`
--
ALTER TABLE `tbl_tickets_replies`
  MODIFY `tickets_replies_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_todo`
--
ALTER TABLE `tbl_todo`
  MODIFY `todo_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_training`
--
ALTER TABLE `tbl_training`
  MODIFY `training_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_transactions`
--
ALTER TABLE `tbl_transactions`
  MODIFY `transactions_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_transfer`
--
ALTER TABLE `tbl_transfer`
  MODIFY `transfer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user_role`
--
ALTER TABLE `tbl_user_role`
  MODIFY `user_role_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_working_days`
--
ALTER TABLE `tbl_working_days`
  MODIFY `working_days_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

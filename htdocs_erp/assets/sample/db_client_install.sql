--
-- Table structure for table `installer`
--

CREATE TABLE IF NOT EXISTS `installer` (
  `id` int(1) DEFAULT NULL,
  `installer_flag` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accounts`
--

CREATE TABLE IF NOT EXISTS `tbl_accounts` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `account_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `balance` decimal(18,2) NOT NULL DEFAULT '0.00',
  `permission` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account_details`
--

CREATE TABLE IF NOT EXISTS `tbl_account_details` (
  `account_details_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `fullname` varchar(160) COLLATE utf8_unicode_ci DEFAULT NULL,
  `employment_id` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(100) COLLATE utf8_unicode_ci DEFAULT 'en_US',
  `address` varchar(64) COLLATE utf8_unicode_ci DEFAULT '-',
  `phone` varchar(32) COLLATE utf8_unicode_ci DEFAULT '-',
  `mobile` varchar(32) COLLATE utf8_unicode_ci DEFAULT '',
  `skype` varchar(100) COLLATE utf8_unicode_ci DEFAULT '',
  `language` varchar(40) COLLATE utf8_unicode_ci DEFAULT 'english',
  `designations_id` int(11) DEFAULT '0',
  `avatar` varchar(200) COLLATE utf8_unicode_ci DEFAULT 'uploads/default_avatar.jpg',
  `joining_date` date DEFAULT NULL,
  `present_address` text COLLATE utf8_unicode_ci,
  `date_of_birth` date DEFAULT NULL,
  `gender` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `maratial_status` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `father_name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mother_name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `passport` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direction` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`account_details_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities`
--

CREATE TABLE IF NOT EXISTS `tbl_activities` (
  `activities_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `module` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `module_field_id` int(11) DEFAULT NULL,
  `activity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activity_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `icon` varchar(32) COLLATE utf8_unicode_ci DEFAULT 'fa-coffee',
  `link` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value1` text COLLATE utf8_unicode_ci,
  `value2` text COLLATE utf8_unicode_ci,
  `deleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`activities_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_advance_salary`
--

CREATE TABLE IF NOT EXISTS `tbl_advance_salary` (
  `advance_salary_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `advance_amount` varchar(200) DEFAULT NULL,
  `deduct_month` varchar(30) DEFAULT NULL,
  `reason` text,
  `request_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(2) NOT NULL DEFAULT '0' COMMENT '0 =pending,1=accpect , 2 = reject and 3 = paid',
  `approve_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`advance_salary_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_announcements`
--

CREATE TABLE IF NOT EXISTS `tbl_announcements` (
  `announcements_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('published','unpublished') NOT NULL DEFAULT 'unpublished' COMMENT '0 = unpublished, 1 = published',
  `view_status` tinyint(1) NOT NULL DEFAULT '2' COMMENT '1=Read 2=Unread',
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `all_client` varchar(20) DEFAULT NULL,
  `attachment` text,
  PRIMARY KEY (`announcements_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applied_coupon`
--

CREATE TABLE IF NOT EXISTS `tbl_applied_coupon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coupon_id` int(11) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `coupon` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_assign_item`
--

CREATE TABLE IF NOT EXISTS `tbl_assign_item` (
  `assign_item_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `stock_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `assign_inventory` int(5) DEFAULT NULL,
  `assign_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`assign_item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE IF NOT EXISTS `tbl_attendance` (
  `attendance_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `leave_application_id` int(11) DEFAULT '0',
  `date_in` date DEFAULT NULL,
  `date_out` date DEFAULT NULL,
  `attendance_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'status 0=absent 1=present 3 = onleave',
  `clocking_status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`attendance_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bug`
--

CREATE TABLE IF NOT EXISTS `tbl_bug` (
  `bug_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `opportunities_id` int(11) DEFAULT NULL,
  `task_id` int(11) NOT NULL DEFAULT '0',
  `bug_title` varchar(200) DEFAULT NULL,
  `bug_description` text DEFAULT NULL,
  `bug_status` varchar(30) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `priority` varchar(10) DEFAULT NULL,
  `reporter` int(11) DEFAULT NULL,
  `created_time` timestamp NULL DEFAULT NULL,
  `update_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `permission` text,
  `client_visible` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`bug_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_calls`
--

CREATE TABLE IF NOT EXISTS `tbl_calls` (
  `calls_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `leads_id` int(11) DEFAULT NULL,
  `opportunities_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  `call_summary` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`calls_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE IF NOT EXISTS `tbl_client` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `primary_contact` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `short_note` text COLLATE utf8_unicode_ci,
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
  `password` text COLLATE utf8_unicode_ci,
  `username` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `client_status` tinyint(1) DEFAULT NULL COMMENT '1 = person and 2 = company',
  `profile_photo` text COLLATE utf8_unicode_ci,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `leads_id` int(11) DEFAULT NULL,
  `latitude` text COLLATE utf8_unicode_ci,
  `longitude` text COLLATE utf8_unicode_ci,
  `customer_group_id` int(11) DEFAULT NULL,
  `active` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client_menu`
--

CREATE TABLE IF NOT EXISTS `tbl_client_menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `label` varchar(20) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sort` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_client_menu`
--

INSERT INTO `tbl_client_menu` (`menu_id`, `companies_id`, `label`, `link`, `icon`, `parent`, `time`, `sort`, `status`) VALUES
(1, NULL, 'projects', 'client/projects', 'fa fa-folder-open-o', 0, '2017-04-20 16:18:26', 3, 0),
(2, NULL, 'bugs', 'client/bugs', 'fa fa-bug', 0, '2017-04-20 16:18:39', 4, 0),
(3, NULL, 'invoices', 'client/invoice/manage_invoice', 'fa fa-shopping-cart', 0, '2017-04-20 16:18:42', 5, 0),
(4, NULL, 'estimates', 'client/estimates', 'fa fa-tachometer', 0, '2017-04-20 16:18:45', 6, 0),
(5, NULL, 'payments', 'client/invoice/all_payments', 'fa fa-money', 0, '2017-04-20 16:18:48', 7, 0),
(6, NULL, 'tickets', 'client/tickets', 'fa fa-ticket', 0, '2017-06-13 06:11:21', 8, 0),
(7, NULL, 'quotations', 'client/quotations', 'fa fa-paste', 0, '2017-04-20 16:18:56', 9, 0),
(8, NULL, 'users', 'client/user/user_list', 'fa fa-users', 0, '2017-04-20 16:18:59', 10, 0),
(9, NULL, 'settings', 'client/settings', 'fa fa-cogs', 0, '2017-04-20 16:19:03', 11, 0),
(12, NULL, 'answered', 'client/tickets/answered', 'fa fa-circle-o', 6, '2017-04-20 16:12:34', 1, 0),
(17, NULL, 'dashboard', 'client/dashboard', 'icon-speedometer', 0, '2017-04-20 16:17:21', 1, 0),
(18, NULL, 'mailbox', 'client/mailbox', 'fa fa-envelope', 0, '2017-04-20 16:17:21', 2, 0),
(19, NULL, 'private_chat', 'chat/conversations', 'fa fa-envelope', 0, '2017-12-10 20:03:43', 12, 0),
(20, NULL, 'filemanager', 'client/filemanager', 'fa fa-file', 0, '2017-06-04 04:08:23', 2, 1),
(21, NULL, 'proposals', 'client/proposals', 'fa fa-leaf', 0, '2017-07-22 03:21:08', 7, 1),
(22, NULL, 'knowledgebase', 'knowledgebase', 'fa fa-question-circle', 0, '2017-11-10 02:04:12', 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client_role`
--

CREATE TABLE IF NOT EXISTS `tbl_client_role` (
  `client_role_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`client_role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clock`
--

CREATE TABLE IF NOT EXISTS `tbl_clock` (
  `clock_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `attendance_id` int(11) DEFAULT NULL,
  `clockin_time` time DEFAULT NULL,
  `clockout_time` time DEFAULT NULL,
  `comments` text,
  `clocking_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1= clockin_time',
  `ip_address` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`clock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clock_history`
--

CREATE TABLE IF NOT EXISTS `tbl_clock_history` (
  `clock_history_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `clock_id` int(11) DEFAULT NULL,
  `clockin_edit` time DEFAULT NULL,
  `clockout_edit` time DEFAULT NULL,
  `reason` varchar(300) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=pending and 2 = accept  3= reject',
  `notify_me` tinyint(4) NOT NULL DEFAULT '1',
  `view_status` tinyint(4) NOT NULL DEFAULT '2',
  `request_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`clock_history_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_companies`
--

CREATE TABLE IF NOT EXISTS `tbl_companies` (
  `companies_id` int(11) NOT NULL AUTO_INCREMENT,
  `primary_contact` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `mobile` varchar(30) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `zip_code` varchar(20) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `address` text,
  `vat` varchar(50) DEFAULT NULL,
  `skype_id` varchar(50) DEFAULT NULL,
  `facebook` varchar(50) DEFAULT NULL,
  `twitter` varchar(50) DEFAULT NULL,
  `linkedin` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `banned` tinyint(1) DEFAULT NULL,
  `ban_reason` varchar(200) DEFAULT NULL,
  `logo` text,
  PRIMARY KEY (`companies_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_config`
--

CREATE TABLE IF NOT EXISTS `tbl_config` (
  `companies_id` int(11) DEFAULT NULL,
  `config_key` varchar(235) DEFAULT NULL,
  `value` text
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
(NULL, 'advance_salary_email', '1'),
(NULL, 'allowed_files', 'gif|png|jpeg|jpg|pdf|doc|txt|docx|xls|zip|rar|xls|mp4|ico'),
(NULL, 'allow_client_project', 'TRUE'),
(NULL, 'allow_client_registration', 'TRUE'),
(NULL, 'allow_customer_edit_amount', 'No'),
(NULL, 'allow_multiple_client_in_project', NULL),
(NULL, 'allow_sub_tasks', 'TRUE'),
(NULL, 'announcements_email', '1'),
(NULL, 'aside-collapsed', NULL),
(NULL, 'aside-float', NULL),
(NULL, 'attendance_report', '1'),
(NULL, 'authorize', 'login id'),
(NULL, 'authorize_status', 'active'),
(NULL, 'authorize_transaction_key', 'transfer key'),
(NULL, 'automatic_database_backup', 'on'),
(NULL, 'automatic_email_on_recur', 'TRUE'),
(NULL, 'auto_check_for_new_notifications', '0'),
(NULL, 'auto_close_ticket', '72'),
(NULL, 'award_email', '1'),
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
(NULL, 'client_default_menu', 'a:1:{s:19:"client_default_menu";a:13:{i:0;s:2:"17";i:1;s:2:"22";i:2;s:2:"19";i:3;s:1:"7";i:4;s:1:"6";i:5;s:1:"5";i:6;s:2:"21";i:7;s:1:"4";i:8;s:1:"3";i:9;s:1:"2";i:10;s:1:"1";i:11;s:2:"18";i:12;s:2:"20";}}'),
(NULL, 'company_address', '123, XYZ street'),
(NULL, 'company_city', 'Hongkong '),
(NULL, 'company_country', 'China'),
(NULL, 'company_domain', 'www.sina.com'),
(NULL, 'company_email', 'Armiles2013@gmail.com'),
(NULL, 'company_legal_name', 'SaaS Inventory'),
(NULL, 'company_logo', 'uploads/cron_logo_white.png'),
(NULL, 'company_name', 'SaaS Inventory'),
(NULL, 'company_phone', '809-582-2222'),
(NULL, 'company_phone_2', ''),
(NULL, 'company_vat', '5%'),
(NULL, 'company_zip_code', '51000'),
(NULL, 'config_additional_flag', '/novalidate-cert'),
(NULL, 'config_host', 'imap.gmail.com'),
(NULL, 'config_imap', '0'),
(NULL, 'config_imap_or_pop', 'on'),
(NULL, 'config_mailbox', 'INBOX'),
(NULL, 'config_password', ''),
(NULL, 'config_pop3', '0'),
(NULL, 'config_port', '993'),
(NULL, 'config_ssl', 'on'),
(NULL, 'config_username', 'nayeem.edu01@gmail.com'),
(NULL, 'contact_person', 'Jackson '),
(NULL, 'contract_expiration_reminder', ''),
(NULL, 'copyright_name', 'Uniquecoder'),
(NULL, 'copyright_url', 'https://codecanyon.net/user/unique_coder'),
(NULL, 'country', '0'),
(NULL, 'cron_key', '34WI2L12L87I1A65M90M9A42N41D08A26I'),
(NULL, 'currency_position', '2'),
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
(NULL, 'default_terms', '<p>&lt;style type="text/css"&gt;</p><p>p.p1 {margin: 0.0px 0.0px 0.0px 0.0px; font: 12.0px ''Helvetica Neue''}</p><p>&lt;/style&gt;</p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p>&lt;style type="text/css"&gt;</p><p>p.p1 {margin: 0.0px 0.0px 0.0px 0.0px; font: 12.0px ''Helvetica Neue''}</p><p>p.p2 {margin: 0.0px 0.0px 0.0px 0.0px; font: 12.0px ''Helvetica Neue''; min-height: 15.0px}</p><p>span.s1 {font: 12.0px ''.PingFang SC''}</p><p>span.s2 {text-decoration: underline}</p><p>span.s3 {text-decoration: underline ; color: #dca10d}</p><p>span.Apple-tab-span {white-space:pre}</p><p>&lt;/style&gt;</p><p><br></p><p><br></p><p><p class="p1"><b>Beneficiary Bank: </b>Commercial Bank of Dubai</p></p><p><p class="p1"><br></p></p><p><p class="p1"><b>Swift Code: </b>CBDUAEAD</p></p><p><p class="p1"><b>Account Title:</b></p></p><p><p class="p1">EASY PAY PAYMENT SERVICES LLC</p></p><p><p class="p1"><b>AED Account No. 1002162301</b></p></p><p><p class="p1">IBAN AE640230000001002162301</p></p><p><p class="p1"><b>USD Account No. 1002162319</b></p></p><p><p class="p1">IBAN AE630230000001002162319</p></p><p><p class="p2"><b></b><br></p></p><p><p class="p1"><br></p></p>'),
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
(NULL, 'estimate_footer', '<span xss=removed>Estimate </span>was created on a computer and is valid without the signature and seal'),
(NULL, 'estimate_language', 'en'),
(NULL, 'estimate_on_calendar', 'on'),
(NULL, 'estimate_prefix', 'EST'),
(NULL, 'estimate_start_no', '1'),
(NULL, 'estimate_state', 'block'),
(NULL, 'estimate_terms', 'Hey Looking forward to doing business with you.&nbsp;<span xss=removed>Estimate</span>'),
(NULL, 'expense_email', '1'),
(NULL, 'favicon', 'uploads/logo.png'),
(NULL, 'file_max_size', '80000'),
(NULL, 'for_invoice', '0'),
(NULL, 'for_leads', NULL),
(NULL, 'for_tickets', NULL),
(NULL, 'gcal_api_key', 'AIzaSyBXcmmcboEyAgtoUtXjKXe4TfpsnEtoUDQ'),
(NULL, 'gcal_id', 'kla83orf1u7hrj6p0u5gdmpji4@group.calendar.google.com'),
(NULL, 'goal_tracking_color', '#537015'),
(NULL, 'goal_tracking_on_calendar', 'on'),
(NULL, 'google_api_key', 'Desmotracion en vivo'),
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
(NULL, 'invoice_logo', 'uploads/LOGO.png'),
(NULL, 'invoice_on_calendar', 'on'),
(NULL, 'invoice_prefix', 'INV'),
(NULL, 'invoice_start_no', '1'),
(NULL, 'invoice_state', 'none'),
(NULL, 'invoice_view', '0'),
(NULL, 'job_circular_email', '1'),
(NULL, 'language', 'english'),
(NULL, 'languages', 'spanish'),
(NULL, 'last_autobackup', '1515398440'),
(NULL, 'last_check', '1436363002'),
(NULL, 'last_cronjob_run', '1515398438'),
(NULL, 'last_postmaster_run', '1461786636'),
(NULL, 'last_seen_activities', '0'),
(NULL, 'layout-boxed', NULL),
(NULL, 'layout-fixed', 'layout-fixed'),
(NULL, 'leads_keyword', 'New Leads'),
(NULL, 'leave_email', '1'),
(NULL, 'locale', 'en_US'),
(NULL, 'login_background', 'uploads/p3.jpg'),
(NULL, 'login_bg', 'bg-login.jpg'),
(NULL, 'login_position', 'left'),
(NULL, 'logofile', '0'),
(NULL, 'logo_or_icon', 'logo_title'),
(NULL, 'mark_attendance_from_login', 'Yes'),
(NULL, 'max_file_size', '5000'),
(NULL, 'milestone_color', '#a86495'),
(NULL, 'milestone_on_calendar', 'on'),
(NULL, 'mollie_api_key', 'test_tkjFqFF6fP92FDSwBDHpeCzBRMBQBD'),
(NULL, 'mollie_partner_id', '3106644'),
(NULL, 'mollie_status', 'active'),
(NULL, 'money_format', '2'),
(NULL, 'navbar_logo_background', 'rgba(104,155,162,0.95)'),
(NULL, 'notified_user', '["1"]'),
(NULL, 'notify_bug_assignment', 'TRUE'),
(NULL, 'notify_bug_comments', 'TRUE'),
(NULL, 'notify_bug_status', 'TRUE'),
(NULL, 'notify_message_received', 'TRUE'),
(NULL, 'notify_project_assignments', 'TRUE'),
(NULL, 'notify_project_comments', 'TRUE'),
(NULL, 'notify_project_files', 'TRUE'),
(NULL, 'notify_task_assignments', 'TRUE'),
(NULL, 'office_hours', '8'),
(NULL, 'office_time', 'Monday - Friday : 9.00 AM - 7.00 PM'),
(NULL, 'on_leave_color', '#bd1a10'),
(NULL, 'on_leave_on_calendar', 'on'),
(NULL, 'opportunities_color', '#349685'),
(NULL, 'opportunities_on_calendar', 'on'),
(NULL, 'overtime_email', '1'),
(NULL, 'payments_color', '#7f21c9'),
(NULL, 'payments_on_calendar', 'on'),
(NULL, 'paypal_cancel_url', 'paypal/cancel'),
(NULL, 'paypal_email', 'billing@coderitems.com'),
(NULL, 'paypal_ipn_url', 'paypal/t_ipn/ipn'),
(NULL, 'paypal_live', 'TRUE'),
(NULL, 'paypal_status', 'active'),
(NULL, 'paypal_success_url', 'paypal/success'),
(NULL, 'payslip_email', '1'),
(NULL, 'payumoney_enable_test_mode', 'TRUE'),
(NULL, 'payumoney_key', 'etzFvcmV'),
(NULL, 'payumoney_salt', 'Q3AbuWZ05e'),
(NULL, 'payumoney_status', 'active'),
(NULL, 'pdf_engine', 'invoicr'),
(NULL, 'performance_email', '1'),
(NULL, 'postmark_api_key', ''),
(NULL, 'postmark_from_address', ''),
(NULL, 'project_color', '#e61755'),
(NULL, 'project_details_view', '2'),
(NULL, 'project_on_calendar', NULL),
(NULL, 'project_prefix', 'PRO'),
(NULL, 'proposal_footer', '<span xss=removed>This Proposal </span>was created on a computer and is valid without the signature and seal'),
(NULL, 'proposal_prefix', 'PRO-'),
(NULL, 'proposal_start_no', '1'),
(NULL, 'proposal_terms', 'Hey Looking forward to doing business with you.<span xss=removed>Proposal</span>'),
(NULL, 'protocol', 'mail'),
(NULL, 'purchase_code', ''),
(NULL, 'pusher_app_id', '401479'),
(NULL, 'pusher_app_key', '4cf88668659dc9c987c3'),
(NULL, 'pusher_app_secret', '6fce183b214d17c20dd5'),
(NULL, 'pusher_cluster', 'ap2'),
(NULL, 'qty_calculation_from_items', 'Yes'),
(NULL, 'realtime_notification', '0'),
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
(NULL, 'sidebar_theme', 'bg-danger-dark'),
(NULL, 'site_appleicon', 'logo.png'),
(NULL, 'site_author', 'William M.'),
(NULL, 'site_desc', 'Ultimate Project Manager CRM Pro is a Web based PHP application for Freelancers - buy it on Codecanyon'),
(NULL, 'site_favicon', 'logo.png'),
(NULL, 'site_icon', 'fa-flask'),
(NULL, 'smtp_encryption', ''),
(NULL, 'smtp_host', 'smtp.gmail.com'),
(NULL, 'smtp_pass', '87f8011a8459a290e840820109659949302de2113345d16bad1183151f92ebe6b77bdfcd21b3f9cbeee722361d156b07b4c88266c90db9cde0fb8051e0c5876bqtSBYTQRsBSAYfJM1Y9BlSRjy0VoNpeXlNCT1mF1Tn0='),
(NULL, 'smtp_port', '25'),
(NULL, 'smtp_user', 'codexcubetext@gmail.com'),
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
(NULL, 'timezone', 'Asia/Dubai'),
(NULL, 'time_format', 'g:i a'),
(NULL, 'top_bar_background', '#1f9494'),
(NULL, 'top_bar_color', '#d9d9d9'),
(NULL, 'training_email', '1'),
(NULL, 'use_gravatar', 'TRUE'),
(NULL, 'use_postmark', 'FALSE'),
(NULL, 'valid_license', 'TRUE'),
(NULL, 'version', '1.1.1'),
(NULL, 'webmaster_email', 'support@example.com'),
(NULL, 'website_name', 'SaaS Inventory'),
(NULL, 'office_address', '221, rue Lafayette 75010 Paris France'),
(NULL, 'office_contact_no', '1-800000'),
(NULL, 'office_email', 'Rosanna@demo.com'),
(NULL, 'office_facebook', 'vedos'),
(NULL, 'office_google_plus', 'vedos'),
(NULL, 'office_twitter', 'vedos'),
(NULL, 'office_linkedin', 'vedos'),
(NULL, 'encryption', 'ssl'),
(NULL, 'unread_email', NULL),
(NULL, 'fully_management_system', 'uploads/mechanicalimg.jpg'),
(NULL, 'happy_clients', '2525'),
(NULL, 'awards_win', '860'),
(NULL, 'finished_work', '2250'),
(NULL, 'team_members', '600'),
(NULL, 'saas_server', 'cpanel'),
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
(NULL, 'purchase_prefix', 'PUR-'),
(NULL, 'purchase_start_no', '1'),
(NULL, 'show_purchase_tax', 'TRUE'),
(NULL, 'increment_purchase_number', 'TRUE'),
(NULL, 'purchase_terms', 'Hey Looking forward to doing business with you.'),
(NULL, 'purchase_footer', '<span xss=removed>This </span><span xss=removed>Purchase </span>was created on a computer and is valid without the signature and seal'),
(NULL, 'saas_cpanel_output', 'json'),
(NULL, 'company_description', 'We provide comprehensive business financial solutions with our expert over 10 years experience'),
(NULL, 'about_us', '<h1 style="margin-top: 0px; margin-bottom: 0px; font-family: Roboto, sans-serif; font-weight: normal; line-height: 40px; color: rgb(12, 67, 131); font-size: 24px;">We are Web Design and Development Company<br><br></h1><p style="margin-bottom: 10px; font-size: 13px; line-height: 24px; color: rgb(90, 90, 90); font-family: Arimo, sans-serif; text-align: justify;">CODEXCUBE IT Solutions is an innovative Web Design and Development Company that creates healthy Website, Plugin, Web application and Web-based software. We have highly professional and skilled Web Designers and Developers to handle all kinds of Web Design and Development project needs. During the last five years in Software Development Industry, our experience and expertise exceeded in certain sections of the Web technology areas more with the help of our expert Web Developer and Designer team. These include building Responsive Website, Plugin, E-commerce payment gateway, customization of Joomla, WordPress, Magento, Drupal and Oscommerce Website. We implement the latest technologies most often, our Development practices backed by traditional IT processes and methodologies to ensure quality.</p><h1 style="margin-top: 0px; margin-bottom: 0px; font-family: Roboto, sans-serif; font-weight: normal; line-height: 40px; color: rgb(12, 67, 131); font-size: 24px; text-rendering: optimizelegibility;">We are skilled&nbsp;on&nbsp;Web Design and Development!</h1><h1 style="margin-top: 0px; margin-bottom: 0px; font-family: Roboto, sans-serif; font-weight: normal; line-height: 40px; color: rgb(12, 67, 131); font-size: 24px; text-rendering: optimizelegibility;"><br></h1><p style="margin-bottom: 10px; font-size: 13px; line-height: 24px; color: rgb(90, 90, 90); font-family: Arimo, sans-serif; text-align: justify;">A productive Website is much important for a business these days, if you are thinking to develop a Website for your business – we will be glad to discuss your requirement. We promise you to be your most favorite Website Design and Development Company. The process of working with us is simple from beginning to conclusion with no confusing technical language – our skilled Developers and Designers are cordial enough to understand about business and how to present your business model to online success. Our job is not only creating the best websites for your company, but we discuss an extra mile to move you forward in deploying a brand strategy, reorganizing your online existence and help you to dominate your business area. Our skilled personnel always analyze all the changes that occur over the internet and hence we can give clear suggestions to our outsource clients based on their business strategies and locations. We are located in Bangladesh; we love where we work and what we do. Our offshore outsourcing Web Design and Development Services will help your dominating business existence on the Web. We are committed to align your Web Design project with your Company’s goals and objectives. We are loyal to serve for individuals and companies, and meet timeline as they need, which awarded us to create many satisfied clients all over World.</p>'),
(NULL, 'tos', '<h3 style="font-family: Lato, sans-serif; line-height: 1.20833; color: rgb(38, 38, 38); margin-top: 0px; margin-bottom: 10px; font-size: 3.6rem; text-align: center; background-color: rgba(255, 255, 255, 0.8);">Do you need to know more?<br>Or Confused?</h3><p open="" sans",="" sans-serif;="" text-align:="" center;="" background-color:="" rgba(255,="" 255,="" 0.8);"="" style="margin-top: 15px; margin-bottom: 0px; color: rgb(38, 38, 38);">SaaSera is focused on Tech Startups, SaaS based business, App Showcase Landing Page mainly. If you want to use it for different purpose, please check carefully everything, or ask pre-sale questions. We are happy to answer your pre-sale questions. We''ll not approve your mistaken purchase refund. Please ask a question or you can request a feature, We''ll try to give your features to the next update.</p>'),
(NULL, 'privacy', '<center style="color: rgb(77, 77, 77); font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px;"><h3 style="text-rendering: optimizelegibility; margin: 0.2rem 0px 0.5rem; padding: 0px; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans&quot;, Verdana, Geneva, sans-serif; color: rgb(52, 78, 103); line-height: 1.4; font-size: 1.25rem;">WELCOME TO SOFTWARE ADVICE! PLEASE TAKE TIME TO READ OUR PRIVACY POLICY!</h3></center><p style="text-rendering: optimizelegibility; margin-bottom: 1.25rem; padding: 0px; line-height: 1.6; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; color: rgb(77, 77, 77);">This Privacy Policy covers the privacy practices of Software Advice, a Texas company, and our Affiliates ("Software Advice" "we" or "us"), along with the Sites on which this Privacy Policy is posted (the "Sites"). This Policy does not apply to those of our Affiliates, which due to their different business models, have developed their own privacy policies: CEB, Iconoculture, L2&nbsp;and&nbsp;Gartner.</p><p style="text-rendering: optimizelegibility; margin-bottom: 1.25rem; padding: 0px; line-height: 1.6; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; color: rgb(77, 77, 77);"><span style="line-height: inherit; font-weight: 700;">WHAT WE DO:</span>&nbsp;We millions of users to research and evaluate the right software solutions and services for their organizations. As part of our comprehensive directory of products and services, we provide verified user reviews, original research&nbsp;and&nbsp;personalized guidance. Users may also connect directly with software vendors that choose to participate in our lead generation programs.</p><p style="text-rendering: optimizelegibility; margin-bottom: 1.25rem; padding: 0px; line-height: 1.6; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; color: rgb(77, 77, 77);"><span style="line-height: inherit; font-weight: 700;">OUR PRIVACY PRACTICES:</span>&nbsp;While using our Sites and Services, and as part of the normal course of business, we may collect personal information ("Information") about you. We want you to understand how we use the information we collect, and that you share with us, and how you may protect your privacy while using our Sites.</p><p style="text-rendering: optimizelegibility; margin-bottom: 1.25rem; padding: 0px; line-height: 1.6; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; color: rgb(77, 77, 77);"><span style="line-height: inherit; font-weight: 700;">YOUR CONSENT:</span>&nbsp;When you provide your Information to us, you consent to the collection, storage and use of your Information by us, our Affiliates and third parties in accordance with the terms set out in this Policy. "Affiliate" is any legal entity that controls, is controlled by or is under common control with Gartner (our parent company).</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contract_type`
--

CREATE TABLE IF NOT EXISTS `tbl_contract_type` (
  `contract_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `contract_type` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `description` varchar(500) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`contract_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_countries`
--

CREATE TABLE IF NOT EXISTS `tbl_countries` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `value` varchar(250) CHARACTER SET latin1 NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=242 DEFAULT CHARSET=utf8;

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
(118, 'Lao People''s Democratic Republic'),
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

CREATE TABLE IF NOT EXISTS `tbl_currencies` (
  `code` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `symbol` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `xrate` decimal(12,5) DEFAULT NULL,
  PRIMARY KEY (`code`)
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
('CNY', 'Chinese Yuan', '?', NULL),
('CZK', 'Czech Koruna', 'K??', NULL),
('DKK', 'Danish Krone', 'kr', NULL),
('EUR', 'Euro', '?', NULL),
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

CREATE TABLE IF NOT EXISTS `tbl_currencywise_price` (
  `currencywise_price_id` int(11) NOT NULL AUTO_INCREMENT,
  `frontend_pricing_id` int(11) DEFAULT NULL,
  `currency` varchar(52) DEFAULT NULL,
  `monthly` varchar(52) DEFAULT NULL,
  `yearly` varchar(52) DEFAULT NULL,
  PRIMARY KEY (`currencywise_price_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_group`
--

CREATE TABLE IF NOT EXISTS `tbl_customer_group` (
  `customer_group_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL COMMENT 'customer group,item group',
  `customer_group` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`customer_group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_ratings`
--

CREATE TABLE IF NOT EXISTS `tbl_customer_ratings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `position` varchar(200) DEFAULT NULL,
  `ratings` varchar(20) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customer_ratings`
--

INSERT INTO `tbl_customer_ratings` (`id`, `name`, `position`, `ratings`, `image`, `description`, `status`) VALUES
(1, 'Anthony Casalena', 'FOUNDER & CHIEF EXECUTIVE OFFICER', '11', 'uploads/2_1.jpg', 'Anthony Casalena is the Founder and CEO of Squarespace, which he started from his dorm room in 2003. During the company’s early years, Anthony acted as the sole engineer, designer, and support representative for the entire Squarespace platform. In addition to running the company and setting overall product strategy.In addition to running the company and setting overall product strategy.', 1),
(3, 'Andrew Bartholomew', 'SENIOR VICE PRESIDENT, STRATEGY', '66', 'uploads/2_2.jpg', 'As the leader of Squarespace’s Strategy division, Andrew is responsible for developing the analytical frameworks that shape the company’s business. Since joining Squarespace, he has grown the division into a team that covers everything from business strategy and customer insights to analytics and data science. Prior to Squarespace, Andrew worked at the New York County District Attorney’s Office .', 1),
(4, 'John Colton', 'SENIOR VICE PRESIDENT, ENGINEERING', '55', 'uploads/2_3.jpg', 'John Colton, SVP of Engineering, oversees Squarespace’s vast engineering organization which drives the core programming for the company. Before joining Squarespace, John served in senior leadership roles at a number of organizations including database security vendor Application Security, business and service assurance vendor Micromuse, and videoconferencing vendor VisualScape.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_custom_field`
--

CREATE TABLE IF NOT EXISTS `tbl_custom_field` (
  `custom_field_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `form_id` int(11) DEFAULT NULL,
  `field_label` varchar(100) DEFAULT NULL,
  `default_value` text,
  `help_text` varchar(200) DEFAULT NULL,
  `field_type` enum('text','textarea','dropdown','date','checkbox','numeric','url','email') DEFAULT NULL,
  `required` varchar(5) NOT NULL DEFAULT 'false',
  `status` enum('active','deactive') NOT NULL DEFAULT 'deactive',
  `show_on_table` varchar(5) DEFAULT NULL,
  `visible_for_admin` varchar(5) DEFAULT NULL,
  `show_on_details` varchar(5) NOT NULL DEFAULT '',
  PRIMARY KEY (`custom_field_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_damage_product`
--

CREATE TABLE IF NOT EXISTS `tbl_damage_product` (
  `damage_product_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `saved_items_id` int(11) DEFAULT NULL,
  `damage_quantity` int(1) DEFAULT NULL,
  `decrease_from_stock` enum('Yes','No') DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`damage_product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dashboard`
--

CREATE TABLE IF NOT EXISTS `tbl_dashboard` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `name` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `col` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `order_no` int(2) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `report` tinyint(1) NOT NULL DEFAULT '0',
  `for_staff` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8;

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
(22, NULL, 'todo_list', 'col-md-6', 13, 1, 0, 1),
(23, NULL, 'paid_amount', 'col-md-3', 2, 1, 2, 1),
(24, NULL, 'due_amount', 'col-md-3', 4, 1, 2, 1),
(25, NULL, 'invoice_amount', 'col-md-3', 1, 1, 2, 1),
(26, NULL, 'paid_percentage', 'col-md-3', 3, 1, 2, 1),
(29, NULL, 'recent_invoice', 'col-sm-6', 3, 1, 3, 1),
(30, NULL, 'recent_projects', 'col-sm-6', 4, 1, 3, 1),
(31, NULL, 'recent_emails', 'col-sm-4', 5, 1, 3, 1),
(34, NULL, 'my_calendar', 'col-md-6', 10, 1, 0, 1),
(91, NULL, 'income_expenses_report', 'col-sm-4', 1, 1, 1, 1),
(92, NULL, 'invoice_payment_report', 'col-sm-4', 2, 1, 1, 1),
(93, NULL, 'ticket_tasks_report', 'col-sm-4', 3, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_days`
--

CREATE TABLE IF NOT EXISTS `tbl_days` (
  `day_id` int(5) NOT NULL AUTO_INCREMENT,
  `day` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`day_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

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

CREATE TABLE IF NOT EXISTS `tbl_departments` (
  `departments_id` int(10) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `deptname` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `department_head_id` int(11) DEFAULT NULL COMMENT 'department_head_id == user_id',
  PRIMARY KEY (`departments_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_designations`
--

CREATE TABLE IF NOT EXISTS `tbl_designations` (
  `designations_id` int(5) NOT NULL AUTO_INCREMENT,
  `departments_id` int(11) DEFAULT NULL,
  `designations` varchar(100) DEFAULT NULL,
  `permission` text,
  PRIMARY KEY (`designations_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_discipline`
--

CREATE TABLE IF NOT EXISTS `tbl_discipline` (
  `discipline_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `offence_id` int(5) DEFAULT NULL,
  `penalty_id` int(5) DEFAULT NULL,
  `discipline_break_date` varchar(100) DEFAULT NULL,
  `discipline_action_date` varchar(100) DEFAULT NULL,
  `discipline_remarks` varchar(200) DEFAULT NULL,
  `discipline_comments` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`discipline_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_draft`
--

CREATE TABLE IF NOT EXISTS `tbl_draft` (
  `draft_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `to` text DEFAULT NULL,
  `subject` varchar(300) DEFAULT NULL,
  `message_body` text DEFAULT NULL,
  `attach_file` varchar(200) DEFAULT NULL,
  `attach_file_path` text,
  `attach_filename` text,
  `message_time` datetime DEFAULT NULL,
  `deleted` enum('Yes','No') NOT NULL DEFAULT 'No',
  PRIMARY KEY (`draft_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_email_templates`
--

CREATE TABLE IF NOT EXISTS `tbl_email_templates` (
  `email_templates_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `email_group` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `template_body` text COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`email_templates_id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_email_templates`
--

INSERT INTO `tbl_email_templates` (`email_templates_id`, `companies_id`, `email_group`, `subject`, `template_body`) VALUES
(1, NULL, 'registration', 'Registration successful', '<div style="height: 7px; background-color: #535353;"></div><div style="background-color:#E8E8E8; margin:0px; padding:55px 20px 40px 20px; font-family:Open Sans, Helvetica, sans-serif; font-size:12px; color:#535353;"><div style="text-align:center; font-size:24px; font-weight:bold; color:#535353;">Welcome to {SITE_NAME}</div><div style="border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;">Thanks for joining {SITE_NAME}. We listed your sign in details below, make sure you keep them safe.<br>To open your {SITE_NAME} homepage, please follow this link:<br><big><b><a href="{SITE_URL}">{SITE_NAME} Account!</a></b></big><br>Link doesn''t work? Copy the following link to your browser address bar:<br><a href="{SITE_URL}">{SITE_URL}</a><br>Your username: {USERNAME}<br>Your email address: {EMAIL}<br>Your password: {PASSWORD}<br>Have fun!<br>The {SITE_NAME} Team.<br><br></div></div>'),
(2, NULL, 'forgot_password', 'Forgot Password', '        <div style="height: 7px; background-color: #535353;"></div><div style="background-color:#E8E8E8; margin:0px; padding:55px 20px 40px 20px; font-family:Open Sans, Helvetica, sans-serif; font-size:12px; color:#535353;"><div style="text-align:center; font-size:24px; font-weight:bold; color:#535353;">New Password</div><div style="border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;">Forgot your password, huh? No big deal.<br>To create a new password, just follow this link:<br><br><big><b><a href="{PASS_KEY_URL}">Create a new password</a></b></big><br>Link doesn''t work? Copy the following link to your browser address bar:<br><a href="{PASS_KEY_URL}">{PASS_KEY_URL}</a><br><br><br>You received this email, because it was requested by a <a href="{SITE_URL}">{SITE_NAME}</a> user. <p></p><p>This is part of the procedure to create a new password on the system. If you DID NOT request a new password then please ignore this email and your password will remain the same.</p><br>Thank you,<br>The {SITE_NAME} Team</div></div>'),
(3, NULL, 'change_email', 'Change Email', '<div style="height: 7px; background-color: #535353;"></div>\r\n<div style="background-color:#E8E8E8; margin:0px; padding:55px 20px 40px 20px; font-family:Open Sans, Helvetica, sans-serif; font-size:12px; color:#535353;"><div style="text-align:center; font-size:24px; font-weight:bold; color:#535353;">New email address on {SITE_NAME}</div>\r\n\r\n<div style="border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;">You have changed your email address for {SITE_NAME}.<br>Follow this link to confirm your new email address:<br><big><b><a href="{NEW_EMAIL_KEY_URL}">Confirm your new email</a></b></big><br>Link doesn''t work? Copy the following link to your browser address bar:<br><a href="{NEW_EMAIL_KEY_URL}">{NEW_EMAIL_KEY_URL}</a><br><br>Your email address: {NEW_EMAIL}<br><br>You received this email, because it was requested by a <a href="{SITE_URL}">{SITE_NAME}</a> user. If you have received this by mistake, please DO NOT click the confirmation link, and simply delete this email. After a short time, the request will be removed from the system.<br>Thank you,<br>The {SITE_NAME} Team</div>\r\n\r\n</div>'),
(4, NULL, 'activate_account', 'Activate Account', '<p>Welcome to {SITE_NAME}!</p>\r\n\r\n<p>Thanks for joining {SITE_NAME}. We listed your sign in details below, make sure you keep them safe.</p>\r\n\r\n<p>To verify your email address, please follow this link:<br />\r\n<big><strong><a href="{ACTIVATE_URL}">Finish your registration...</a></strong></big><br />\r\nLink doesn&#39;t work? Copy the following link to your browser address bar:<br />\r\n<a href="{ACTIVATE_URL}">{ACTIVATE_URL}</a></p>\r\n\r\n<p><br />\r\n<br />\r\nPlease verify your email within {ACTIVATION_PERIOD} hours, otherwise your registration will become invalid and you will have to register again.<br />\r\n<br />\r\n<br />\r\nYour username: {USERNAME}<br />\r\nYour email address: {EMAIL}<br />\r\nYour password: {PASSWORD}<br />\r\n<br />\r\nHave fun!<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(5, NULL, 'reset_password', 'Reset Password', '<div style="height: 7px; background-color: #535353;"></div>\r\n<div style="background-color:#E8E8E8; margin:0px; padding:55px 20px 40px 20px; font-family:Open Sans, Helvetica, sans-serif; font-size:12px; color:#535353;"><div style="text-align:center; font-size:24px; font-weight:bold; color:#535353;">New password on {SITE_NAME}</div>\r\n<div style="border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;"><p>You have changed your password.<br>Please, keep it in your records so you don''t forget it.<br></p>\r\nYour username: {USERNAME}<br>Your email address: {EMAIL}<br>Your new password: {NEW_PASSWORD}<br><br>Thank you,<br>The {SITE_NAME} Team</div>\r\n</div>'),
(6, NULL, 'bug_assigned', 'New Bug Assigned', '<p>Hi there,</p>\r\n\r\n<p>A new bug &nbsp;{BUG_TITLE} &nbsp;has been assigned to you by {ASSIGNED_BY}.</p>\r\n\r\n<p>You can view this bug by logging in to the portal using the link below.</p>\r\n\r\n<p><br />\r\n<big><strong><a href="{BUG_URL}">View Bug</a></strong></big><br />\r\n<br />\r\nRegards<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(7, NULL, 'bug_updated', 'Bug status changed', '<p>Hi there,</p>\r\n\r\n<p>Bug {BUG_TITLE} has been marked as {STATUS} by {MARKED_BY}.</p>\r\n\r\n<p>You can view this bug by logging in to the portal using the link below.</p>\r\n\r\n<p><big><strong><a href="{BUG_URL}">View Bug</a></strong></big><br />\r\nRegards<br />\r\nThe {SITE_NAME} Team</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(8, NULL, 'bug_comments', 'New Bug Comment Received', '<p>Hi there,</p>\r\n\r\n<p>A new comment has been posted by {POSTED_BY} to bug {BUG_TITLE}.</p>\r\n\r\n<p>You can view the comment using the link below.</p>\r\n\r\n<p><em>{COMMENT_MESSAGE}</em></p>\r\n\r\n<p><br />\r\n<big><strong><a href="{COMMENT_URL}">View Comment</a></strong></big><br />\r\nRegards<br />\r\nThe {SITE_NAME} Team</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(9, NULL, 'bug_attachment', 'New bug attachment', '<p>Hi there,</p>\r\n\r\n<p>A new attachment&nbsp;has been uploaded by {UPLOADED_BY} to issue {BUG_TITLE}.</p>\r\n\r\n<p>You can view the bug using the link below.</p>\r\n\r\n<p><br />\r\n<big><strong><a href="{BUG_URL}">View Bug</a></strong></big></p>\r\n\r\n<p><br />\r\nRegards<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(10, NULL, 'bug_reported', 'New bug Reported', '<p>Hi there,</p>\r\n\r\n<p>A new bug ({BUG_TITLE}) has been reported by {ADDED_BY}.</p>\r\n\r\n<p>You can view the Bug using the Dashboard Page.</p>\r\n\r\n<p><br />\r\n<big><strong><a href="{BUG_URL}">View Bug</a></strong></big></p>\r\n\r\n<p><br />\r\nRegards<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(13, NULL, 'refund_confirmation', 'Refund Confirmation', '<p>Refund Confirmation</p>\r\n\r\n<p>Hello {CLIENT}</p>\r\n\r\n<p>This is confirmation that a refund has been processed for Invoice&nbsp; of {CURRENCY} {AMOUNT}&nbsp;sent on {INVOICE_DATE}.<br />\r\nYou can view the invoice online at:<br />\r\n<big><strong><a href="{INVOICE_LINK}">View Invoice</a></strong></big><br />\r\n<br />\r\nBest Regards,<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(14, NULL, 'payment_confirmation', 'Payment Confirmation', '<p>Payment Confirmation</p>\r\n\r\n<p>Hello {CLIENT}</p>\r\n\r\n<p>This is a payment receipt for your invoice of {CURRENCY} {AMOUNT}&nbsp;sent on {INVOICE_DATE}.<br />\r\nYou can view the invoice online at:<br />\r\n<big><strong><a href="{INVOICE_LINK}">View Invoice</a></strong></big><br />\r\n<br />\r\nBest Regards,<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(15, NULL, 'payment_email', 'Payment Received', '<div style="height: 7px; background-color: #535353;"></div>\n<div style="background-color:#E8E8E8; margin:0px; padding:55px 20px 40px 20px; font-family:Open Sans, Helvetica, sans-serif; font-size:12px; color:#535353;"><div style="text-align:center; font-size:24px; font-weight:bold; color:#535353;">Payment Received</div>\n<div style="border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;"><p>Dear Customer</p>\n<p>We have received your payment of {INVOICE_CURRENCY} {PAID_AMOUNT}. </p>\n<p>Thank you for your Payment and business. We look forward to working with you again.</p>\n--------------------------<br>Regards<br>The {SITE_NAME} Team</div>\n</div>'),
(16, NULL, 'invoice_overdue_email', 'Invoice Overdue Notice', '<p>Invoice Overdue</p>\r\n\r\n<p>INVOICE {REF}</p>\r\n\r\n<p><strong>Hello {CLIENT}</strong></p>\r\n\r\n<p>This is the notice that your invoice overdue.&nbsp;The invoice {CURRENCY} {AMOUNT}. and Due Date: {DUE_DATE}</p>\r\n\r\n<p>You can view the invoice online at:<br />\r\n<big><strong><a href="{INVOICE_LINK}">View Invoice</a></strong></big><br />\r\n<br />\r\nBest Regards,<br />\r\nThe {SITE_NAME} Team</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(17, NULL, 'invoice_message', 'New Invoice', '<div style="height: 7px; background-color: #535353;"></div><div style="background-color:#E8E8E8; margin:0px; padding:55px 20px 40px 20px; font-family:Open Sans, Helvetica, sans-serif; font-size:12px; color:#535353;"><div style="text-align:center; font-size:24px; font-weight:bold; color:#535353;">INVOICE {REF}</div><div style="border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;"><span class="style1"><span style="font-weight:bold;">Hello {CLIENT}</span></span><br><br>Here is the invoice of {CURRENCY} {AMOUNT}.<br><br>You can view the invoice online at:<br><big><b><a href="{INVOICE_LINK}">View Invoice</a></b></big><br><br>Best Regards<br><br>The {SITE_NAME} Team</div></div>'),
(18, NULL, 'invoice_reminder', 'Invoice Reminder', '<div style="height: 7px; background-color: #535353;"></div>\r\n<div style="background-color:#E8E8E8; margin:0px; padding:55px 20px 40px 20px; font-family:Open Sans, Helvetica, sans-serif; font-size:12px; color:#535353;"><div style="text-align:center; font-size:24px; font-weight:bold; color:#535353;">Invoice Reminder</div>\r\n<div style="border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;"><p>Hello {CLIENT}</p>\r\n<br><p>This is a friendly reminder to pay your invoice of {CURRENCY} {AMOUNT}<br>You can view the invoice online at:<br><big><b><a href="{INVOICE_LINK}">View Invoice</a></b></big><br><br>Best Regards,<br>The {SITE_NAME} Team</p>\r\n</div>\r\n</div>'),
(19, NULL, 'message_received', 'Message Received', '<div style="height: 7px; background-color: #535353;"></div>\r\n<div style="background-color:#E8E8E8; margin:0px; padding:55px 20px 40px 20px; font-family:Open Sans, Helvetica, sans-serif; font-size:12px; color:#535353;"><div style="text-align:center; font-size:24px; font-weight:bold; color:#535353;">Message Received</div>\r\n<div style="border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;"><p>Hi {RECIPIENT},</p>\r\n<p>You have received a message from {SENDER}. </p>\r\n------------------------------------------------------------------<br><blockquote>\r\n{MESSAGE}</blockquote>\r\n<big><b><a href="{SITE_URL}">Go to Account</a></b></big><br><br>Regards<br>The {SITE_NAME} Team</div>\r\n</div>'),
(20, NULL, 'estimate_email', 'New Estimate', '<p>Estimate {ESTIMATE_REF}</p>\r\n\r\n<p>Hi {CLIENT}</p>\r\n\r\n<p>Thanks for your business inquiry.</p>\r\n\r\n<p>The estimate {ESTIMATE_REF} is attached with this email.<br />\r\nEstimate Overview:<br />\r\nEstimate # : {ESTIMATE_REF}<br />\r\nAmount: {CURRENCY} {AMOUNT}<br />\r\n<br />\r\nYou can view the estimate online at:<br />\r\n<big><strong><a href="{ESTIMATE_LINK}">View Estimate</a></strong></big><br />\r\n<br />\r\nBest Regards,<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(21, NULL, 'ticket_staff_email', 'New Ticket [TICKET_CODE]', '<div style="height: 7px; background-color: #535353;"></div>\r\n<div style="background-color:#E8E8E8; margin:0px; padding:55px 20px 40px 20px; font-family:Open Sans, Helvetica, sans-serif; font-size:12px; color:#535353;"><div style="text-align:center; font-size:24px; font-weight:bold; color:#535353;">New Ticket</div>\r\n<div style="border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;"><p>Ticket #{TICKET_CODE} has been created by the client.</p>\r\n<p>You may view the ticket by clicking on the following link <br><br>  Client Email : {REPORTER_EMAIL}<br><br> <big><b><a href="{TICKET_LINK}">View Ticket</a></b></big> <br><br>Regards<br><br>{SITE_NAME}</p>\r\n</div>\r\n</div>'),
(22, NULL, 'ticket_client_email', 'Ticket [TICKET_CODE] Opened', '<p>Ticket Opened</p>\r\n\r\n<p>Hello {CLIENT_EMAIL},</p>\r\n\r\n<p>Your ticket has been opened with us.<br />\r\n<br />\r\nTicket # {TICKET_CODE}<br />\r\nStatus : Open<br />\r\n<br />\r\nClick on the below link to see the ticket details and post additional comments.<br />\r\n<br />\r\n<big><strong><a href="{TICKET_LINK}">View Ticket</a></strong></big><br />\r\n<br />\r\nRegards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(23, NULL, 'ticket_reply_email', 'Ticket [TICKET_CODE] Response', '<div style="height: 7px; background-color: #535353;"></div>\r\n<div style="background-color:#E8E8E8; margin:0px; padding:55px 20px 40px 20px; font-family:Open Sans, Helvetica, sans-serif; font-size:12px; color:#535353;"><div style="text-align:center; font-size:24px; font-weight:bold; color:#535353;">Ticket Response</div>\r\n<div style="border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;"><p>A new response has been added to Ticket #{TICKET_CODE}<br><br> Ticket : #{TICKET_CODE} <br>Status : {TICKET_STATUS} <br><br></p>\r\nTo see the response and post additional comments, click on the link below.<br><br>         <big><b><a href="{TICKET_LINK}">View Reply</a> </b></big><br><br>          Note: Do not reply to this email as this email is not monitored.<br><br>     Regards<br>The {SITE_NAME} Team<br></div>\r\n</div>'),
(24, NULL, 'ticket_closed_email', 'Ticket [TICKET_CODE] Closed', '<div style="height: 7px; background-color: #535353;"></div>\r\n<div style="background-color:#E8E8E8; margin:0px; padding:55px 20px 40px 20px; font-family:Open Sans, Helvetica, sans-serif; font-size:12px; color:#535353;"><div style="text-align:center; font-size:24px; font-weight:bold; color:#535353;">Ticket Closed</div>\r\n<div style="border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;">Hi {REPORTER_EMAIL}<br><br>Ticket #{TICKET_CODE} has been closed by {STAFF_USERNAME} <br><br>          Ticket : #{TICKET_CODE} <br>     Status : {TICKET_STATUS}<br><br>Replies : {NO_OF_REPLIES}<br><br>          To see the responses or open the ticket, click on the link below.<br><br>          <big><b><a href="{TICKET_LINK}">View Ticket</a></b></big> <br><br>          Note: Do not reply to this email as this email is not monitored.<br><br>    Regards<br>The {SITE_NAME} Team</div>\r\n</div>'),
(26, NULL, 'task_updated', 'Task updated', '<div style="height: 7px; background-color: #535353;"></div>\r\n<div style="background-color:#E8E8E8; margin:0px; padding:55px 20px 40px 20px; font-family:Open Sans, Helvetica, sans-serif; font-size:12px; color:#535353;"><div style="text-align:center; font-size:24px; font-weight:bold; color:#535353;">Task updated</div>\r\n<div style="border-radius: 5px 5px 5px 5px; padding:20px; margin-top:45px; background-color:#FFFFFF; font-family:Open Sans, Helvetica, sans-serif; font-size:13px;"><p>Hi there,</p>\r\n<p>{TASK_NAME} in {PROJECT_TITLE} has been updated by {ASSIGNED_BY}.</p>\r\n<p>You can view this project by logging in to the portal using the link below.</p>\r\n-----------------------------------<br><big><b><a href="{PROJECT_URL}">View Project</a></b></big><br><br>Regards<br>The {SITE_NAME} Team</div>\r\n</div>'),
(27, NULL, 'quotations_form', 'Your Quotation Request', '<p>QUOTATION</p>\r\n\r\n<p><strong>Hello {CLIENT}</strong><br />\r\n&nbsp;</p>\r\n\r\n<p>Thank you for you for filling in our Quotation Request Form.<br />\r\n<br />\r\nPlease find below are our quotation:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table cellpadding="8" style="width:100%">\r\n	<tbody>\r\n		<tr>\r\n			<td>Quotation Date</td>\r\n			<td><strong>{DATE}</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Our Quotation</td>\r\n			<td><strong>{CURRENCY} {AMOUNT}</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Addtitional Comments</td>\r\n			<td><strong>{NOTES}</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\nYou can view the estimate online at:<br />\r\n<big><strong><a href="{QUOTATION LINK}">View Quotation</a></strong></big></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\nThank you and we look forward to working with you.<br />\r\n<br />\r\nBest Regards,<br />\r\nThe {SITE_NAME} Team</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(28, NULL, 'client_notification', 'New project created', '<p>Hello, <strong>{CLIENT_NAME}</strong>,<br />\r\nwe have created a new project with your account.<br />\r\n<br />\r\nProject name : <strong>{PROJECT_NAME}</strong><br />\r\nYou can login to see the status of your project by using this link:<br />\r\n<big><a href="{PROJECT_LINK}"><strong>View Project</strong></a></big></p>\r\n\r\n<p><br />\r\nBest Regards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(29, NULL, 'assigned_project', 'Assigned Project', '<p>Hi There,</p>\r\n\r\n<p>A<strong> {PROJECT_NAME}</strong> has been assigned by <strong>{ASSIGNED_BY} </strong>to you.You can view this project by logging in to the portal using the link below:<br />\r\n<big><a href="{PROJECT_URL}"><strong>View Project</strong></a></big><br />\r\n<br />\r\nBest Regards<br />\r\nThe {SITE_NAME} Team</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(30, NULL, 'complete_projects', 'Project Completed', '<p>Hi <strong>{CLIENT_NAME}</strong>,</p>\r\n\r\n<p>Project : <strong>{PROJECT_NAME}</strong> &nbsp;has been completed.<br />\r\nYou can view the project by logging into your portal Account:<br />\r\n<big><a href="{PROJECT_LINK}"><strong>View Project</strong></a></big><br />\r\n<br />\r\nBest Regards,<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(31, NULL, 'project_comments', 'New Project Comment Received', '<p>Hi There,</p>\r\n\r\n<p>A new comment has been posted by <strong>{POSTED_BY}</strong> to project <strong>{PROJECT_NAME}</strong>.</p>\r\n\r\n<p>You can view the comment using the link below:<br />\r\n<big><a href="{COMMENT_URL}"><strong>View Project</strong></a></big><br />\r\n<br />\r\n<em>{COMMENT_MESSAGE}</em><br />\r\n<br />\r\nBest Regards,<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(32, NULL, 'project_attachment', 'New Project  Attachment', '<p>Hi There,</p>\r\n\r\n<p>A new file has been uploaded by <strong>{UPLOADED_BY}</strong> to project <strong>{PROJECT_NAME}</strong>.<br />\r\nYou can view the Project using the link below:<br />\r\n<big><a href="{PROJECT_URL}"><strong>View Project</strong></a></big><br />\r\n<br />\r\n<br />\r\nBest Regards,<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(33, NULL, 'responsible_milestone', 'Responsible for a Milestone', '<p>Hi There,</p>\r\n\r\n<p>You are a responsible&nbsp;for a project milestone&nbsp;<strong>{MILESTONE_NAME}</strong>&nbsp; assigned to you by <strong>{ASSIGNED_BY}</strong> in project <strong>{PROJECT_NAME}</strong>.</p>\r\n\r\n<p>You can view this Milestone&nbsp;by logging in to the portal using the link below:<br />\r\n<big><strong><a href="{PROJECT_URL}">View Project</a></strong></big><br />\r\n<br />\r\n<br />\r\nBest Regards,<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(34, NULL, 'task_assigned', 'Task assigned', '<p>Hi there,</p>\r\n\r\n<p>A new task <strong>{TASK_NAME}</strong> &nbsp;has been assigned to you by <strong>{ASSIGNED_BY}</strong>.</p>\r\n\r\n<p>You can view this task by logging in to the portal using the link below.</p>\r\n\r\n<p><br />\r\n<big><strong><a href="{TASK_URL}">View Task</a></strong></big><br />\r\n<br />\r\nRegards<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(35, NULL, 'tasks_comments', 'New Task Comment Received', '<p>Hi There,</p>\r\n\r\n<p>A new comment has been posted by <strong>{POSTED_BY}</strong> to <strong>{TASK_NAME}</strong>.</p>\r\n\r\n<p>You can view the comment using the link below:<br />\r\n<big><strong><a href="{COMMENT_URL}">View Comment</a></strong></big><br />\r\n<br />\r\n<em>{COMMENT_MESSAGE}</em><br />\r\n<br />\r\nBest Regards,<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(36, NULL, 'tasks_attachment', 'New Tasks Attachment', '<p>Hi There,</p>\r\n\r\n<p>A new file has been uploaded by <strong>{UPLOADED_BY} </strong>to Task <strong>{TASK_NAME}</strong>.<br />\r\nYou can view the Task&nbsp;using the link below:</p>\r\n\r\n<p><br />\r\n<big><a href="{TASK_URL}"><strong>View Task</strong></a></big><br />\r\n<br />\r\nBest Regards,<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(37, NULL, 'tasks_updated', 'Task updated', '<p>Hi there,</p>\r\n\r\n<p><strong>{TASK_NAME}</strong> has been updated by <strong>{ASSIGNED_BY}</strong>.</p>\r\n\r\n<p>You can view this Task by logging in to the portal using the link below.</p>\r\n\r\n<p><br />\r\n<big><strong><a href="{TASK_URL}">View Task</a></strong></big><br />\r\n<br />\r\nRegards<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(38, NULL, 'goal_not_achieve', 'Not Achieve Goal', '<p><strong>Unfortunately!</strong> We failed to achieve goal!</p>\r\n\r\n<p><strong>Here is a Goal Details</strong></p>\r\n\r\n<p>Goal Type :&nbsp;<strong>{Goal_Type}</strong><br />\r\nTarget Achievement:&nbsp;<strong>{achievement}</strong><br />\r\nTotal Achievement:&nbsp;<strong>{total_achievement}</strong><br />\r\nStart Date:&nbsp;<strong>{start_date}</strong><br />\r\nEnd Date:&nbsp;<strong>{End_date}</strong><br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(39, NULL, 'goal_achieve', 'Achieve Goal', '<p><strong>Congratulation!</strong> We achieved new goal.</p>\r\n\r\n<p><strong>Here is a Goal Details</strong></p>\r\n\r\n<p>Goal Type :<strong>{Goal_Type}</strong><br />\r\nTarget Achievement:<strong>{achievement}</strong><br />\r\nTotal Achievement:<strong>{total_achievement}</strong><br />\r\nStart Date:<strong>{start_date}</strong><br />\r\nEnd Date:<strong>{End_date}</strong><br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(40, NULL, 'leave_request_email', 'A Leave Request from you', '<p>Hi there,</p>\r\n\r\n<p><strong>{NAME}</strong> &nbsp;Want to leave from you.</p>\r\n\r\n<p>You can view this leave request by logging in to the portal using the link below<br />\r\n<big><strong><a href="{APPLICATION_LINK}">View Application</a></strong></big><br />\r\n<br />\r\n<br />\r\nRegards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(41, NULL, 'leave_approve_email', 'Your leave request has been approved', '<h1>Your leave request has been approved</h1>\r\n\r\n<p><strong>Congratulations!</strong> Your leave request from <strong>{START_DATE}</strong> to <strong>{END_DATE}</strong> has been approved by your company management.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\nRegards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(42, NULL, 'leave_reject_email', 'Your leave request has been Rejected', '<h1>Your leave request has been Rejected</h1>\r\n\r\n<p><strong>Unfortunately !</strong>&nbsp;Your leave request from&nbsp;<strong>{START_DATE}</strong>&nbsp;to&nbsp;<strong>{END_DATE}</strong>&nbsp;has been Rejected by your company management.</p>\r\n\r\n<p><br />\r\nRegards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(43, NULL, 'overtime_request_email', 'Overtime Request', '<p>Hi there,</p>\r\n\r\n<p><strong>{NAME}</strong>&nbsp;&nbsp;to do an overtime.<br />\r\n<br />\r\n<br />\r\nRegards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(44, NULL, 'overtime_approved_email', 'Your overtime request has been approved', '<h1>Your leave request has been approved</h1>\r\n\r\n<p><strong>Congratulations!</strong>&nbsp;Your overtime&nbsp;request at&nbsp;<strong>{DATE}</strong>&nbsp;and&nbsp;<strong>{HOUR}</strong>&nbsp;has been approved by your company management.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\nRegards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(45, NULL, 'overtime_reject_email', 'Your Overtime request has been Rejected', '<h1>Your leave request has been Rejected</h1>\r\n\r\n<p><strong>Unfortunately&nbsp;!</strong>&nbsp;Your overtime&nbsp;request at&nbsp;<strong>{DATE}</strong>&nbsp;and&nbsp;<strong>{HOUR}</strong>&nbsp;has been Rejected by your company management.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\nRegards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(46, NULL, 'wellcome_email', 'Welcome Email ', '<p>Hello <strong>{NAME}</strong>,</p>\r\n\r\n<p>Welcome to <strong>{COMPANY_NAME}</strong> .Thanks for joining <strong>{COMPANY_NAME}</strong>.</p>\r\n\r\n<p>We just wanted to say welcome.</p>\r\n\r\n<p>Please contact us if you need any help.</p>\r\n\r\n<p>Click here to view your profile: <strong>{COMPANY_URL}</strong></p>\r\n\r\n<p><br />\r\nHave fun!<br />\r\nThe <strong>{COMPANY_NAME}</strong> Team.</p>\r\n'),
(47, NULL, 'payslip_generated_email', 'Payslip generated', '<p>Hello&nbsp;<strong>{NAME}</strong>,</p>\r\n\r\n<p>Your payslip generated for the month <strong>{MONTH_YEAR} .</strong></p>\r\n\r\n<p><br />\r\nRegards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(48, NULL, 'advance_salary_email', 'Advance Salary Reqeust', '<p>Hi there,</p>\r\n\r\n<p><strong>{NAME}</strong>&nbsp;&nbsp;Want to Advance Salary from you.</p>\r\n\r\n<p>You can view this Advance Salary by logging in to the portal using the link below.<br />\r\n<br />\r\n<big><strong><a href="{LINK}">View Advance Salary</a></strong></big><br />\r\n<br />\r\n<br />\r\nRegards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(49, NULL, 'advance_salary_approve_email', 'Your advance salary request has been approved', '<h1>Your advance salary request has been approved</h1>\r\n\r\n<p><strong>Congratulations!</strong>&nbsp;Your advance salary&nbsp;requested &nbsp;<strong>{AMOUNT}</strong>&nbsp;has been approved by your company management.</p>\r\n\r\n<p>This advance amount will deduct the next <strong>{DEDUCT_MOTNH}</strong> .</p>\r\n\r\n<p><br />\r\nRegards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(50, NULL, 'advance_salary_reject_email', 'Your advance salary request has been Rejected', '<h1>Your advance salary request has been Rejected</h1>\r\n\r\n<p><strong>Unfortunately !</strong>&nbsp;Your advance salary requested&nbsp;<strong>{AMOUNT}</strong>&nbsp;has been Rejected by your company management.</p>\r\n\r\n<p><br />\r\nRegards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(51, NULL, 'award_email', 'Award Received', '<p>Hello&nbsp;<strong>{NAME}</strong>,</p>\r\n\r\n<p>You have been&nbsp;awarded <strong>{AWARD_NAME} </strong>for this<strong> {MONTH} .</strong></p>\r\n\r\n<p><br />\r\nRegards<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(52, NULL, 'new_job_application_email', 'New job application submitted', '<p>Hi there,</p>\r\n\r\n<p>&nbsp;<strong>{NAME}&nbsp;</strong>has submitted the job application</p>\r\n\r\n<p>Please find below are job application Details:</p>\r\n\r\n<table cellpadding="8" style="width:100%">\r\n	<tbody>\r\n		<tr>\r\n			<td>Job Title</td>\r\n			<td><strong>{JOB_TITLE}</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Email</td>\r\n			<td><strong>{EMAIL}</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mobile</td>\r\n			<td><strong>{MOBILE}</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Cover Latter</td>\r\n			<td><strong>{COVER_LETTER}</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\nYou can view the Job Application online at:<br />\r\n<br />\r\n<big><strong><a href="{LINK}">View Job Application</a></strong></big><br />\r\n<br />\r\nBest Regards,<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(53, NULL, 'new_notice_published', 'New Notice published', '<p>Hello&nbsp;<strong>{NAME}</strong>,</p>\r\n\r\n<p>New Notice Published&nbsp;<strong>{TITLE}</strong></p>\r\n\r\n<p><br />\r\nYou can view the Notice online at:<br />\r\n<br />\r\n<big><strong><a href="{LINK}">View Notice</a></strong></big><br />\r\n<br />\r\nBest Regards,<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(54, NULL, 'new_training_email', 'Training  Assigned ', '<p>Hi there,</p>\r\n\r\n<p>A new Training  &nbsp;<strong>{TRAINING_NAME}</strong>&nbsp;&nbsp;has been assigned to you by&nbsp;<strong>{ASSIGNED_BY}</strong>.</p>\r\n\r\n<p>You can view this Training  by logging in to the portal using the link below.</p>\r\n\r\n<p><br />\r\n<big><strong><a href="{LINK}">View Training</a></strong></big><br />\r\n<br />\r\nRegards<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(55, NULL, 'performance_appraisal_email', 'New Performance Appraisal', ''),
(56, NULL, 'expense_request_email', 'A New Expense Request have been Recieved', '<p>Hi there,</p>\r\n\r\n<p><strong>{NAME}</strong> &nbsp;Create a New Expense The Amount is <strong>{AMOUNT}</strong></p>\r\n\r\n<p>You can view this expense by logging in to the portal using the link below.<br />\r\n<br />\r\n<big><strong><a href="{URL}">View Expense</a></strong></big><br />\r\n<br />\r\n<br />\r\nRegards,<br />\r\n<br />\r\nThe <strong>{SITE_NAME}</strong> Team</p>\r\n'),
(57, NULL, 'expense_approved_email', 'Expense Approved', '<p>Dear&nbsp;<strong>{NAME} ,</strong></p>\r\n\r\n<h1>Your Expense request has been approved</h1>\r\n\r\n<p><strong>Congratulations!</strong>&nbsp;Your Expense request from&nbsp;<strong>{AMOUNT}</strong>&nbsp;has been approved by your company management.</p>\r\n\r\n<p>Please Contact&nbsp;with our Accountant for collect the amount.</p>\r\n\r\n<p><br />\r\nRegards,<br />\r\n<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(58, NULL, 'expense_paid_email', 'Expense have been Paid', '<p>Hi there,</p>\r\n\r\n<p>The&nbsp;<strong>{NAME}</strong>&nbsp;expense&nbsp;<strong>{AMOUNT}&nbsp;</strong>has been paid by <strong>{PAID_BY}.</strong></p>\r\n\r\n<p>You can view this expense by logging in to the portal using the link below.<br />\r\n<br />\r\n<big><strong><a href="{URL}">View Expense</a></strong></big><br />\r\n<br />\r\n<br />\r\nRegards,<br />\r\n<br />\r\nThe&nbsp;<strong>{SITE_NAME}</strong>&nbsp;Team</p>\r\n'),
(59, NULL, 'auto_close_ticket', 'Ticket Auto Closed', '<p>Ticket Closed</p>\r\n\r\n<p>Hello <strong>{REPORTER_EMAIL}</strong>,</p>\r\n\r\n<p>Ticket&nbsp;<strong>{SUBJECT}</strong>&nbsp;has been auto closed due to inactivity.&nbsp;<br />\r\n<br />\r\nTicket # <strong>{TICKET_CODE}</strong><br />\r\nStatus : &nbsp;<strong>{TICKET_STATUS}</strong><br />\r\n<br />\r\nTo see the responses or open the ticket, click on the link below:ÃƒÆ’Ã†â€™Ãƒâ€ Ã¢â‚¬â„¢ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â‚¬Å¡Ã‚Â¬Ãƒâ€¦Ã‚Â¡ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¬ÃƒÆ’Ã†â€™Ãƒâ€šÃ‚Â¢ÃƒÆ’Ã‚Â¢ÃƒÂ¢Ã¢â€šÂ¬Ã…Â¡Ãƒâ€šÃ‚Â¬ÃƒÆ’Ã¢â‚¬Å¡Ãƒâ€šÃ‚Â¹<br />\r\n<br />\r\n<big><strong><a href="{TICKET_LINK}">View Ticket</a></strong></big><br />\r\n<br />\r\nRegards<br />\r\n<br />\r\nThe <strong>{SITE_NAME}</strong> Team</p>\r\n'),
(60, NULL, 'proposal_email', 'New Proposal', '<p>Proposal <strong>{PROPOSAL_REF}</strong></p> <p>Hi <strong>{CLIENT}</strong></p> <p>Thanks for your business inquiry.</p> <p>The Proposal <strong>{PROPOSAL_REF} </strong>is attached with this email.<br /> Proposal&nbsp;Overview:<br /> Proposal&nbsp;# :<strong> {PROPOSAL_REF}</strong><br /> Amount: <strong>{CURRENCY} {AMOUNT}</strong><br /> <br /> You can view the estimate online at:<br /> <big><strong><a href="{PROPOSAL_LINK}">View Proposal</a></strong></big><br /> <br /> Best Regards,<br /> The <strong>{SITE_NAME}</strong> Team</p> '),
(61, NULL, 'project_overdue_email', 'Project Overdue Notice', '<p>Project Overdue</p>\r\n\r\n<p><strong>Hello {CLIENT}</strong></p>\r\n\r\n<p>This is the notice that your project overdue.&nbsp;<br />\r\n<br />\r\nProject name : <strong>{PROJECT_NAME}</strong><br />\r\nDue date : <strong>{DUE_DATE}</strong><br />\r\nYou can login to see the status of your project by using this link:<br />\r\n<big><a href="{PROJECT_LINK}"><strong>View Project</strong></a></big></p>\r\n\r\n<p><br />\r\nBest Regards<br />\r\nThe {SITE_NAME} Team</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(62, NULL, 'estimate_overdue_email', 'Estimate Overdue Notice', '<p>Estimate {ESTIMATE_REF}</p>\r\n\r\n<p>Hi {CLIENT}</p>\r\n\r\n<p>This is the notice that your Estimate&nbsp;overdue.&nbsp;â€‹<br />\r\n<br />\r\nEstimate Overview:<br />\r\nEstimate # : {ESTIMATE_REF}<br />\r\nAmount: {DUE_DATE}<br />\r\nAmount: {CURRENCY} {AMOUNT}<br />\r\n<br />\r\nYou can view the estimate online at:<br />\r\n<big><strong><a href="{ESTIMATE_LINK}">View Estimate</a></strong></big><br />\r\n<br />\r\nBest Regards,<br />\r\nThe {SITE_NAME} Team</p>\r\n'),
(63, NULL, 'proposal_overdue_email', 'New Estimate', '<p>Proposal&nbsp;<strong>{PROPOSAL_REF}</strong></p>\r\n\r\n<p>Hi&nbsp;<strong>{CLIENT}</strong></p>\r\n\r\n<p>This is the notice that your Proposal&nbsp;overdue.&nbsp;<br />\r\n<br />\r\nProposal&nbsp;Overview:<br />\r\nProposal&nbsp;# :<strong>&nbsp;{PROPOSAL_REF}</strong><br />\r\nDue Date: <strong>{DUE_DATE}</strong>â€‹<br />\r\nAmount:&nbsp;<strong>{CURRENCY} {AMOUNT}</strong><br />\r\n<br />\r\nYou can view the estimate online at:<br />\r\n<big><strong><a href="{PROPOSAL_LINK}">View Proposal</a></strong></big><br />\r\n<br />\r\nBest Regards,<br />\r\nThe&nbsp;<strong>{SITE_NAME}</strong>&nbsp;Team</p>\r\n'),
(64, NULL, 'call_for_interview', 'You have an interview offer!!!', '<p>Hello&nbsp;<strong>{NAME}</strong>,</p>\r\n\r\n<p>You have an interview offer for you.please see the details.&nbsp;<br />\r\n<br />\r\n<strong>Job Summary</strong>:<br />\r\nJob Title # :<strong>&nbsp;{JOB_TITLE}</strong><br />\r\nDesignation # :<strong>&nbsp;{DESIGNATION}</strong><br />\r\nInterview Date: <strong>{DATE}</strong></p>\r\n\r\n<p><strong>Postal Address</strong><br />\r\nPO Box 16122 Collins Street West<br />\r\nVictoria 8007 Australia<br />\r\n121 King Street, Melbourne<br />\r\nVictoria 3000 Australia &ndash;&nbsp;<a href="https://www.google.com.au/maps/place/Envato/@-37.8173306,144.9534631,17z/data=!3m1!4b1!4m2!3m1!1s0x6ad65d4c2b349649:0xb6899234e561db11" target="_blank">Map</a></p>\r\n\r\n<p><br />\r\nYou can view the circular details online at:<br />\r\n<big><strong><a href="{LINK}">View Job Circular</a></strong></big><br />\r\n<br />\r\nBest Regards,<br />\r\nThe&nbsp;<strong>{SITE_NAME}</strong>&nbsp;Team</p>\r\n'),
(65, NULL, 'token_activate_account', 'Activate Account', '<p>Welcome to {SITE_NAME}!</p>\n\n<p>Thanks for joining {SITE_NAME}. We listed your Your activation token  below.</p>\n\n<p>To verify your Your activation token please copy the activation code: <strong> {ACTIVATION_TOKEN} </strong>\n<br />\n<br />\nplease follow this link:<br />\n<big><strong><a href="{ACTIVATE_URL}">Start your registration...</a></strong></big><br />\nLink doesn&#39;t work? Copy the following link to your browser address bar:<br />\n<a href="{ACTIVATE_URL}">{ACTIVATE_URL}</a></p>\n\n<p><br />\n<br />\nPlease verify your Your activation token within {ACTIVATION_PERIOD} hours, otherwise your registration will become invalid and you will have to register again.<br />\n<br />\n<br />\nHave fun!<br />\nThe {SITE_NAME} Team</p>\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee_award`
--

CREATE TABLE IF NOT EXISTS `tbl_employee_award` (
  `employee_award_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `award_name` varchar(100) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `gift_item` varchar(300) DEFAULT NULL,
  `award_amount` int(5) DEFAULT NULL,
  `award_date` varchar(10) DEFAULT NULL,
  `view_status` tinyint(1) NOT NULL DEFAULT '2' COMMENT '1=Read 2=Unread',
  `given_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`employee_award_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee_bank`
--

CREATE TABLE IF NOT EXISTS `tbl_employee_bank` (
  `employee_bank_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `bank_name` varchar(300) DEFAULT NULL,
  `branch_name` varchar(300) DEFAULT NULL,
  `account_name` varchar(300) DEFAULT NULL,
  `account_number` varchar(300) DEFAULT NULL,
  `routing_number` varchar(50) DEFAULT NULL,
  `type_of_account` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`employee_bank_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee_document`
--

CREATE TABLE IF NOT EXISTS `tbl_employee_document` (
  `document_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `resume` text,
  `resume_path` text,
  `resume_filename` text,
  `offer_letter` text,
  `offer_letter_filename` text,
  `offer_letter_path` text,
  `joining_letter` text,
  `joining_letter_filename` text,
  `joining_letter_path` text,
  `contract_paper` text,
  `contract_paper_filename` text,
  `contract_paper_path` text,
  `id_proff` text,
  `id_proff_filename` text,
  `id_proff_path` text,
  `other_document` text,
  PRIMARY KEY (`document_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee_payroll`
--

CREATE TABLE IF NOT EXISTS `tbl_employee_payroll` (
  `payroll_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `salary_template_id` int(11) DEFAULT NULL,
  `hourly_rate_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`payroll_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_estimates`
--

CREATE TABLE IF NOT EXISTS `tbl_estimates` (
  `estimates_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `reference_no` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT '0',
  `estimate_date` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estimate_month` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estimate_year` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `due_date` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alert_overdue` tinyint(1) NOT NULL DEFAULT '0',
  `currency` varchar(32) COLLATE utf8_unicode_ci DEFAULT 'USD',
  `discount_percent` int(2) DEFAULT NULL,
  `notes` text COLLATE utf8_unicode_ci,
  `tax` int(11) NOT NULL DEFAULT '0',
  `total_tax` text COLLATE utf8_unicode_ci,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Pending',
  `date_sent` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `est_deleted` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `date_saved` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `emailed` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT 'No',
  `show_client` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT 'No',
  `invoiced` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT 'No',
  `invoices_id` int(11) NOT NULL DEFAULT '0',
  `permission` text COLLATE utf8_unicode_ci,
  `client_visible` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `discount_type` enum('before_tax','after_tax') COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT 'sales agent',
  `adjustment` decimal(18,2) NOT NULL DEFAULT '0.00',
  `discount_total` decimal(18,2) NOT NULL DEFAULT '0.00',
  `show_quantity_as` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`estimates_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_estimate_items`
--

CREATE TABLE IF NOT EXISTS `tbl_estimate_items` (
  `estimate_items_id` int(11) NOT NULL AUTO_INCREMENT,
  `estimates_id` int(11) DEFAULT NULL,
  `saved_items_id` int(11) DEFAULT '0',
  `item_tax_rate` decimal(10,2) NOT NULL DEFAULT '0.00',
  `item_tax_name` text COLLATE utf8_unicode_ci,
  `item_name` varchar(150) COLLATE utf8_unicode_ci DEFAULT 'Item Name',
  `item_desc` longtext COLLATE utf8_unicode_ci,
  `unit_cost` decimal(10,2) DEFAULT '0.00',
  `quantity` decimal(10,2) DEFAULT '0.00',
  `item_tax_total` decimal(10,2) DEFAULT '0.00',
  `total_cost` decimal(10,2) DEFAULT '0.00',
  `date_saved` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `unit` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hsn_code` text COLLATE utf8_unicode_ci,
  `order` int(11) DEFAULT '0',
  PRIMARY KEY (`estimate_items_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_expense_category`
--

CREATE TABLE IF NOT EXISTS `tbl_expense_category` (
  `expense_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `expense_category` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`expense_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_files`
--

CREATE TABLE IF NOT EXISTS `tbl_files` (
  `files_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `uploaded_by` int(11) DEFAULT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`files_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_form`
--

CREATE TABLE IF NOT EXISTS `tbl_form` (
  `form_id` int(11) NOT NULL AUTO_INCREMENT,
  `form_name` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `tbl_name` varchar(25) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`form_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

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

CREATE TABLE IF NOT EXISTS `tbl_frontend_coupon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pricing_id` int(11) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  `amount` varchar(50) DEFAULT NULL,
  `type` tinyint(1) DEFAULT '0' COMMENT '0=fixed,1=discount',
  `end_date` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `show_on_pricing` enum('Yes','No') NOT NULL DEFAULT 'No',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_frontend_features`
--

CREATE TABLE IF NOT EXISTS `tbl_frontend_features` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `icon` text,
  `sort` int(2) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_frontend_features`
--

INSERT INTO `tbl_frontend_features` (`id`, `type`, `title`, `description`, `icon`, `sort`, `status`) VALUES
(1, 'features', 'CREATIVE DESIGN', '<span style="color: rgb(101, 119, 134); text-align: center;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</span>', 'flaticon-business', 2, 1),
(2, 'features', 'EASY TO CUSTOMIZE', '<span style="color: rgb(101, 119, 134); text-align: center;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</span>', 'flaticon-briefcase', 1, 1),
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

CREATE TABLE IF NOT EXISTS `tbl_frontend_menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(50) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `parent` int(11) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sort` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_frontend_menu`
--

INSERT INTO `tbl_frontend_menu` (`menu_id`, `label`, `link`, `icon`, `parent`, `time`, `sort`, `status`) VALUES
(1, 'home', '#', '', 0, '2018-03-06 13:36:12', 1, 1),
(2, 'features', 'features', '', 0, '2018-03-11 21:21:48', 8, 1),
(3, 'addons', 'addons', '', 0, '2018-03-11 21:21:48', 10, 1),
(4, 'pricing', 'pricing', '', 0, '2018-03-11 21:21:47', 4, 1),
(5, 'resources', '#', '', 0, '2018-03-11 21:21:49', 15, 1),
(6, 'partners', 'partners', '', 0, '2018-03-11 21:21:49', 16, 1),
(7, 'contact_us', 'contact_us', '', 0, '2018-03-11 21:21:49', 19, 1),
(8, 'company', '#', '', 0, '2018-03-11 21:21:49', 21, 1),
(9, 'support', 'support', '', 5, '2018-03-11 21:21:47', 3, 1),
(10, 'status_page', 'status_page', '', 5, '2018-03-11 21:21:47', 5, 1),
(11, 'knowledge_base', 'knowledge_base', '', 5, '2018-03-11 21:21:48', 7, 1),
(12, 'faqs', 'faqs', '', 5, '2018-03-11 21:21:48', 12, 1),
(13, 'products_documentation', 'products_documentation', '', 5, '2018-03-11 21:21:49', 14, 1),
(14, 'products_updates', 'products_updates', '', 5, '2018-03-11 21:21:49', 17, 1),
(15, 'developper_docs', 'developper_docs', '', 5, '2018-03-11 21:21:49', 20, 1),
(16, 'api_documentation', 'api_documentation', '', 5, '2018-03-11 21:21:49', 22, 1),
(17, 'video_tutorials', 'video_tutorials', '', 5, '2018-03-11 21:21:49', 23, 1),
(18, 'webinars', 'webinars', '', 5, '2018-03-11 21:21:49', 24, 1),
(19, 'about_us', 'about_us', 'our_team', 8, '2018-03-11 21:21:47', 2, 1),
(20, 'careers', 'careers', '', 8, '2018-03-11 21:21:47', 6, 1),
(21, 'blog', 'blog', '', 8, '2018-03-11 21:21:48', 9, 1),
(22, 'resellers', 'resellers', '', 8, '2018-03-11 21:21:48', 11, 1),
(23, 'customers', 'customers', '', 8, '2018-03-11 21:21:48', 13, 1),
(24, 'affiliate_programs', 'affiliate_programs', '', 8, '2018-03-11 21:21:49', 18, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_frontend_pricing`
--

CREATE TABLE IF NOT EXISTS `tbl_frontend_pricing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `amount` varchar(350) DEFAULT NULL,
  `sort` int(2) DEFAULT NULL,
  `employee_no` varchar(20) DEFAULT NULL,
  `multi_branch` varchar(20) DEFAULT NULL,
  `client_no` varchar(20) DEFAULT NULL,
  `project_no` varchar(20) DEFAULT NULL,
  `invoice_no` varchar(20) DEFAULT NULL,
  `leads` varchar(50) DEFAULT NULL,
  `accounting` varchar(50) DEFAULT NULL,
  `bank_account` varchar(50) DEFAULT NULL,
  `online_payment` varchar(50) DEFAULT NULL,
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
  `description` text,
  `status` tinyint(1) DEFAULT NULL,
  `allow_paypal` enum('Yes','No') DEFAULT 'No',
  `allow_stripe` enum('Yes','No') DEFAULT 'No',
  `allow_2checkout` enum('Yes','No') DEFAULT 'No',
  `allow_authorize` enum('Yes','No') DEFAULT 'No',
  `allow_ccavenue` enum('Yes','No') DEFAULT 'No',
  `allow_braintree` enum('Yes','No') DEFAULT 'No',
  `allow_mollie` enum('Yes','No') DEFAULT 'No',
  `allow_payumoney` enum('Yes','No') DEFAULT 'Yes',
  `recommended` enum('Yes','No') DEFAULT 'No',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_frontend_slider`
--

CREATE TABLE IF NOT EXISTS `tbl_frontend_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(350) DEFAULT NULL,
  `description` text,
  `slider` text,
  `button_one` varchar(200) DEFAULT NULL,
  `button_one_link` varchar(50) DEFAULT NULL,
  `button_two` varchar(250) DEFAULT NULL,
  `button_two_link` varchar(250) DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_frontend_slider`
--

INSERT INTO `tbl_frontend_slider` (`id`, `title`, `description`, `slider`, `button_one`, `button_one_link`, `button_two`, `button_two_link`, `sort`, `status`) VALUES
(1, 'Ultimate ERP Solution', 'The application you need to manage your busines.<br> We have bundled all the features<br> you need into easy to use,<br> beautifully designed plateform', 'uploads/2.jpg', 'Live Demo', '', 'Free trial', '', 1, 1),
(3, 'Grow your Business, <br>We are here to <br>support you', 'The application you need to manage your busines.  <br>We have bundled all the features you need into easy to use, <br>beautifully designed plateform', 'uploads/1.jpg', 'Live Demo', '', 'Free trial', '', 0, 1),
(4, 'Helping <br> Small Businesses to Grow', 'We provide comprehensive business & <br> financial solutions with our expert <br> over 10 years experience', 'uploads/3.jpg', 'Live Demo', '', 'Free trial', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_goal_tracking`
--

CREATE TABLE IF NOT EXISTS `tbl_goal_tracking` (
  `goal_tracking_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `goal_type_id` int(11) DEFAULT NULL,
  `achievement` int(10) DEFAULT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `account_id` int(11) DEFAULT '0',
  `description` mediumtext DEFAULT NULL,
  `notify_goal_achive` varchar(5) DEFAULT NULL,
  `notify_goal_not_achive` varchar(5) DEFAULT NULL,
  `permission` mediumtext,
  `email_send` varchar(5) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`goal_tracking_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_goal_type`
--

CREATE TABLE IF NOT EXISTS `tbl_goal_type` (
  `goal_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(200) DEFAULT NULL,
  `description` mediumtext DEFAULT NULL,
  `tbl_name` varchar(200) DEFAULT NULL,
  `query` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`goal_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

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

CREATE TABLE IF NOT EXISTS `tbl_holiday` (
  `holiday_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `event_name` varchar(200) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `color` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`holiday_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hourly_rate`
--

CREATE TABLE IF NOT EXISTS `tbl_hourly_rate` (
  `hourly_rate_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `hourly_grade` varchar(200) DEFAULT NULL,
  `hourly_rate` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`hourly_rate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inbox`
--

CREATE TABLE IF NOT EXISTS `tbl_inbox` (
  `inbox_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `to` varchar(100) DEFAULT NULL,
  `from` varchar(100) DEFAULT NULL,
  `subject` varchar(300) DEFAULT NULL,
  `message_body` text DEFAULT NULL,
  `attach_file` varchar(200) DEFAULT NULL,
  `attach_file_path` text,
  `attach_filename` text,
  `message_time` datetime DEFAULT NULL,
  `view_status` tinyint(1) NOT NULL DEFAULT '2' COMMENT '1=Read 2=Unread',
  `favourites` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0= no 1=yes',
  `notify_me` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=on 0=off',
  `deleted` enum('Yes','No') NOT NULL DEFAULT 'No',
  PRIMARY KEY (`inbox_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_income_category`
--

CREATE TABLE IF NOT EXISTS `tbl_income_category` (
  `income_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `income_category` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`income_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoices`
--

CREATE TABLE IF NOT EXISTS `tbl_invoices` (
  `invoices_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `recurring` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `recuring_frequency` int(11) NOT NULL DEFAULT '31',
  `recur_frequency` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `recur_next_date` timestamp NULL DEFAULT NULL,
  `recur_start_date` timestamp NULL DEFAULT NULL,
  `recur_end_date` timestamp NULL DEFAULT NULL,
  `reference_no` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `invoice_date` timestamp NULL DEFAULT NULL,
  `invoice_month` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `invoice_year` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `due_date` timestamp NULL DEFAULT NULL,
  `alert_overdue` tinyint(1) NOT NULL DEFAULT '0',
  `notes` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `tax` decimal(10,2) NOT NULL DEFAULT '0.00',
  `total_tax` text COLLATE utf8_unicode_ci,
  `discount_percent` int(2) DEFAULT NULL,
  `currency` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'USD',
  `status` enum('Cancelled','Unpaid','Paid','draft','partially_paid') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Unpaid',
  `archived` int(11) DEFAULT '0',
  `date_sent` timestamp NULL DEFAULT NULL,
  `inv_deleted` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `date_saved` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
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
  `permission` text COLLATE utf8_unicode_ci,
  `client_visible` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT 'No',
  `discount_type` enum('before_tax','after_tax') COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT 'sales agent',
  `adjustment` decimal(18,2) NOT NULL DEFAULT '0.00',
  `discount_total` decimal(18,2) NOT NULL DEFAULT '0.00',
  `show_quantity_as` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`invoices_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_items`
--

CREATE TABLE IF NOT EXISTS `tbl_items` (
  `items_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoices_id` int(11) DEFAULT NULL,
  `item_tax_rate` decimal(10,2) NOT NULL DEFAULT '0.00',
  `item_tax_name` text COLLATE utf8_unicode_ci,
  `item_tax_total` decimal(10,2) NOT NULL DEFAULT '0.00',
  `quantity` decimal(10,2) DEFAULT '0.00',
  `total_cost` decimal(10,2) DEFAULT '0.00',
  `item_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'Item Name',
  `item_desc` longtext COLLATE utf8_unicode_ci,
  `unit_cost` decimal(10,2) DEFAULT '0.00',
  `order` int(11) DEFAULT '0',
  `date_saved` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `unit` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hsn_code` text COLLATE utf8_unicode_ci,
  `saved_items_id` int(11) DEFAULT '0',
  PRIMARY KEY (`items_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item_history`
--

CREATE TABLE IF NOT EXISTS `tbl_item_history` (
  `item_history_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `stock_id` int(11) DEFAULT NULL,
  `inventory` int(5) DEFAULT NULL,
  `purchase_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`item_history_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_appliactions`
--

CREATE TABLE IF NOT EXISTS `tbl_job_appliactions` (
  `job_appliactions_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `job_circular_id` int(11) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `cover_letter` text DEFAULT NULL,
  `resume` text DEFAULT NULL,
  `application_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=pending 1=accept 2 = reject',
  `apply_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `send_email` varchar(20) DEFAULT NULL,
  `interview_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`job_appliactions_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job_circular`
--

CREATE TABLE IF NOT EXISTS `tbl_job_circular` (
  `job_circular_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `job_title` varchar(200) DEFAULT NULL,
  `designations_id` int(11) DEFAULT NULL,
  `vacancy_no` varchar(50) DEFAULT NULL,
  `posted_date` timestamp NULL DEFAULT NULL,
  `employment_type` enum('contractual','full_time','part_time') NOT NULL DEFAULT 'full_time',
  `experience` varchar(200) DEFAULT NULL,
  `age` varchar(200) DEFAULT NULL,
  `salary_range` varchar(200) DEFAULT NULL,
  `last_date` timestamp NULL DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` enum('published','unpublished') NOT NULL DEFAULT 'unpublished' COMMENT '1=publish 2=unpublish',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `permission` text,
  PRIMARY KEY (`job_circular_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kb_category`
--

CREATE TABLE IF NOT EXISTS `tbl_kb_category` (
  `kb_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `category` varchar(200) DEFAULT NULL,
  `description` longtext,
  `type` varchar(50) DEFAULT NULL,
  `sort` int(2) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`kb_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_knowledgebase`
--

CREATE TABLE IF NOT EXISTS `tbl_knowledgebase` (
  `kb_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `kb_category_id` int(11) DEFAULT NULL,
  `title` text,
  `slug` text,
  `description` text,
  `attachments` text,
  `for_all` enum('Yes','No') DEFAULT 'No',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `total_view` int(11) NOT NULL DEFAULT '0',
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sort` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`kb_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_languages`
--

CREATE TABLE IF NOT EXISTS `tbl_languages` (
  `code` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` int(2) DEFAULT '0',
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_languages`
--

INSERT INTO `tbl_languages` (`code`, `companies_id`, `name`, `icon`, `active`) VALUES
('ar', NULL, 'arabic', 'ae', 0),
('cs', NULL, 'czech', 'cz', 0),
('da', NULL, 'danish', 'dk', 0),
('de', NULL, 'german', 'at', 1),
('el', NULL, 'greek', 'cy', 0),
('en', NULL, 'english', 'us', 1),
('es', NULL, 'spanish', 'ar', 1),
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
('zh', NULL, 'chinese', 'cn', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leads`
--

CREATE TABLE IF NOT EXISTS `tbl_leads` (
  `leads_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `lead_name` varchar(50) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `organization` varchar(50) DEFAULT NULL,
  `lead_status_id` int(11) DEFAULT NULL,
  `lead_source_id` int(11) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `contact_name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(32) DEFAULT NULL,
  `mobile` varchar(32) DEFAULT NULL,
  `facebook` varchar(32) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `skype` varchar(200) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `permission` text,
  `converted_client_id` int(11) NOT NULL DEFAULT '0',
  `index_no` int(11) DEFAULT '0',
  PRIMARY KEY (`leads_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lead_source`
--

CREATE TABLE IF NOT EXISTS `tbl_lead_source` (
  `lead_source_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `lead_source` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`lead_source_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lead_status`
--

CREATE TABLE IF NOT EXISTS `tbl_lead_status` (
  `lead_status_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `lead_status` varchar(50) DEFAULT NULL,
  `lead_type` varchar(20) DEFAULT NULL,
  `order_no` int(11) DEFAULT NULL,
  PRIMARY KEY (`lead_status_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leave_application`
--

CREATE TABLE IF NOT EXISTS `tbl_leave_application` (
  `leave_application_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `leave_category_id` int(2) DEFAULT NULL,
  `reason` text DEFAULT NULL,
  `leave_type` enum('single_day','multiple_days','hours') NOT NULL DEFAULT 'single_day',
  `hours` varchar(20) DEFAULT NULL,
  `leave_start_date` timestamp NULL DEFAULT NULL,
  `leave_end_date` timestamp NULL DEFAULT NULL,
  `application_status` int(2) NOT NULL DEFAULT '1' COMMENT '1=pending,2=accepted 3=rejected',
  `view_status` tinyint(1) NOT NULL DEFAULT '2',
  `application_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `attachment` text,
  `comments` text,
  `approve_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`leave_application_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leave_category`
--

CREATE TABLE IF NOT EXISTS `tbl_leave_category` (
  `leave_category_id` int(2) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `leave_category` varchar(100) DEFAULT NULL,
  `leave_quota` int(2) DEFAULT NULL,
  PRIMARY KEY (`leave_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_locales`
--

CREATE TABLE IF NOT EXISTS `tbl_locales` (
  `locale` varchar(10) DEFAULT NULL,
  `code` varchar(10) DEFAULT NULL,
  `language` varchar(100) DEFAULT NULL,
  `name` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`locale`)
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

CREATE TABLE IF NOT EXISTS `tbl_manufacturer` (
  `manufacturer_id` int(5) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `manufacturer` varchar(100) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`manufacturer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE IF NOT EXISTS `tbl_menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `label` varchar(100) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '0',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) DEFAULT '1' COMMENT '1= active 0=inactive',
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=157 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`menu_id`, `companies_id`, `label`, `link`, `icon`, `parent`, `sort`, `time`, `status`) VALUES
(1, NULL, 'dashboard', 'admin/dashboard', 'fa fa-dashboard', 0, 0, '2018-10-19 20:41:54', 1),
(2, NULL, 'calendar', 'admin/calendar', 'fa fa-calendar', 0, 1, '2018-10-19 20:42:57', 1),
(4, NULL, 'client', 'admin/client/manage_client', 'fa fa-users', 0, 11, '2018-11-25 11:43:03', 1),
(5, NULL, 'mailbox', 'admin/mailbox', 'fa fa-envelope-o', 0, 2, '2018-11-21 05:16:07', 1),
(6, NULL, 'tickets', '#', 'fa fa-ticket', 0, 12, '2018-11-25 11:43:03', 1),
(7, NULL, 'all_tickets', 'admin/tickets', 'fa fa-ticket', 6, 0, '2018-10-19 20:41:54', 1),
(8, NULL, 'answered', 'admin/tickets/answered', 'fa fa-circle-o', 6, 1, '2018-10-19 20:41:54', 1),
(9, NULL, 'open', 'admin/tickets/open', 'fa fa-circle-o', 6, 2, '2018-10-19 20:41:54', 1),
(10, NULL, 'in_progress', 'admin/tickets/in_progress', 'fa fa-circle-o', 6, 3, '2018-10-19 20:41:54', 1),
(11, NULL, 'closed', 'admin/tickets/closed', 'fa fa-circle-o', 6, 4, '2018-10-19 20:41:54', 1),
(12, NULL, 'sales', '#', 'fa fa-shopping-cart', 0, 5, '2018-11-22 02:55:47', 1),
(13, NULL, 'invoice', 'admin/invoice/manage_invoice', 'fa fa-circle-o', 12, 1, '2018-11-21 05:16:07', 1),
(14, NULL, 'estimates', 'admin/estimates', 'fa fa-circle-o', 12, 2, '2018-11-21 05:16:07', 1),
(15, NULL, 'payments_received', 'admin/invoice/all_payments', 'fa fa-circle-o', 12, 3, '2018-11-21 05:16:07', 1),
(16, NULL, 'tax_rates', 'admin/invoice/tax_rates', 'fa fa-circle-o', 12, 4, '2018-11-21 05:16:07', 1),
(21, NULL, 'quotations', '#', 'fa fa-paste', 12, 5, '2018-11-21 05:16:07', 1),
(22, NULL, 'quotations_list', 'admin/quotations', 'fa fa-circle-o', 21, 0, '2017-05-18 18:19:03', 1),
(23, NULL, 'quotations_form', 'admin/quotations/quotations_form', 'fa fa-circle-o', 21, 1, '2016-05-30 10:20:23', 1),
(24, NULL, 'user', 'admin/user/user_list', 'fa fa-users', 0, 28, '2018-11-25 07:10:18', 1),
(25, NULL, 'settings', 'admin/settings', 'fa fa-cogs', 0, 29, '2018-11-25 11:43:03', 1),
(26, NULL, 'database_backup', 'admin/settings/database_backup', 'fa fa-database', 0, 27, '2018-11-25 11:43:03', 1),
(29, NULL, 'transactions', '#', 'fa fa-building-o', 0, 6, '2018-11-25 07:10:18', 1),
(30, NULL, 'deposit', 'admin/transactions/deposit', 'fa fa-circle-o', 29, 0, '2018-10-19 20:40:38', 1),
(31, NULL, 'expense', 'admin/transactions/expense', 'fa fa-circle-o', 29, 1, '2018-10-19 20:40:38', 1),
(32, NULL, 'transfer', 'admin/transactions/transfer', 'fa fa-circle-o', 29, 2, '2018-10-19 20:24:50', 1),
(33, NULL, 'transactions_report', 'admin/transactions/transactions_report', 'fa fa-circle-o', 29, 3, '2018-10-19 20:24:50', 1),
(34, NULL, 'balance_sheet', 'admin/transactions/balance_sheet', 'fa fa-circle-o', 29, 4, '2018-10-19 20:40:38', 1),
(36, NULL, 'bank_cash', 'admin/account/manage_account', 'fa fa-money', 29, 5, '2018-10-19 20:40:38', 1),
(39, NULL, 'items', 'admin/items/items_list', 'fa fa-cube', 148, 0, '2018-10-19 20:43:04', 1),
(42, NULL, 'report', '#', 'fa fa-bar-chart', 0, 14, '2018-11-25 11:43:03', 1),
(43, NULL, 'account_statement', 'admin/report/account_statement', 'fa fa-circle-o', 146, 0, '2018-10-19 20:24:50', 1),
(44, NULL, 'income_report', 'admin/report/income_report', 'fa fa-circle-o', 146, 1, '2018-10-19 20:24:50', 1),
(45, NULL, 'expense_report', 'admin/report/expense_report', 'fa fa-circle-o', 146, 2, '2018-10-19 20:24:50', 1),
(46, NULL, 'income_expense', 'admin/report/income_expense', 'fa fa-circle-o', 146, 3, '2018-10-19 20:24:50', 1),
(47, NULL, 'date_wise_report', 'admin/report/date_wise_report', 'fa fa-circle-o', 146, 4, '2018-10-19 20:24:50', 1),
(48, NULL, 'all_income', 'admin/report/all_income', 'fa fa-circle-o', 146, 5, '2018-10-19 20:24:50', 1),
(49, NULL, 'all_expense', 'admin/report/all_expense', 'fa fa-circle-o', 146, 6, '2018-10-19 20:24:50', 1),
(50, NULL, 'all_transaction', 'admin/report/all_transaction', 'fa fa-circle-o', 146, 7, '2018-10-19 20:24:50', 1),
(51, NULL, 'recurring_invoice', 'admin/invoice/recurring_invoice', 'fa fa-circle-o', 12, 6, '2018-11-21 05:16:07', 1),
(52, NULL, 'transfer_report', 'admin/transactions/transfer_report', 'fa fa-circle-o', 29, 6, '2018-10-19 20:40:38', 1),
(53, NULL, 'report_by_month', 'admin/report/report_by_month', 'fa fa-circle-o', 146, 8, '2018-10-19 20:24:50', 1),
(54, NULL, 'tasks', 'admin/tasks/all_task', 'fa fa-tasks', 0, 15, '2018-11-25 11:43:03', 1),
(55, NULL, 'leads', 'admin/leads', 'fa fa-rocket', 0, 10, '2018-11-25 11:43:03', 1),
(56, NULL, 'opportunities', 'admin/opportunities', 'fa fa-filter', 0, 22, '2018-11-25 11:43:03', 1),
(57, NULL, 'projects', 'admin/projects', 'fa fa-folder-open-o', 0, 9, '2018-11-25 11:43:03', 1),
(58, NULL, 'bugs', 'admin/bugs', 'fa fa-bug', 54, 0, '2018-10-19 20:24:50', 1),
(59, NULL, 'project', '#', 'fa fa-folder-open-o', 0, 13, '2018-11-25 11:43:03', 1),
(60, NULL, 'tasks_report', 'admin/report/tasks_report', 'fa fa-circle-o', 42, 0, '2018-11-21 05:16:07', 1),
(61, NULL, 'bugs_report', 'admin/report/bugs_report', 'fa fa-circle-o', 42, 1, '2018-11-21 05:16:07', 1),
(62, NULL, 'tickets_report', 'admin/report/tickets_report', 'fa fa-circle-o', 42, 2, '2018-11-21 05:16:07', 1),
(63, NULL, 'client_report', 'admin/report/client_report', 'fa fa-circle-o', 42, 3, '2018-11-21 05:16:07', 1),
(66, NULL, 'tasks_assignment', 'admin/report/tasks_assignment', 'fa fa-dot-circle-o', 59, 0, '2018-10-19 20:24:50', 1),
(67, NULL, 'bugs_assignment', 'admin/report/bugs_assignment', 'fa fa-dot-circle-o', 59, 1, '2018-10-19 20:24:50', 1),
(68, NULL, 'project_report', 'admin/report/project_report', 'fa fa-dot-circle-o', 59, 2, '2018-10-19 20:24:50', 1),
(69, NULL, 'goal_tracking', 'admin/goal_tracking', 'fa fa-shield', 73, 0, '2018-10-19 20:40:38', 1),
(70, NULL, 'departments', 'admin/departments', 'fa fa-user-secret', 0, 23, '2018-11-25 11:43:03', 1),
(71, NULL, 'holiday', 'admin/holiday', 'fa fa-calendar-plus-o', 73, 1, '2018-10-19 20:40:38', 1),
(72, NULL, 'leave_management', 'admin/leave_management', 'fa fa-plane', 0, 24, '2018-11-25 11:43:03', 1),
(73, NULL, 'utilities', '#', 'fa fa-gift', 0, 17, '2018-11-25 11:43:03', 1),
(74, NULL, 'overtime', 'admin/utilities/overtime', 'fa fa-clock-o', 89, 0, '2018-10-19 20:40:38', 1),
(75, NULL, 'stock', '#', 'fa fa-codepen', 0, 8, '2018-11-25 11:43:03', 1),
(76, NULL, 'stock_category', 'admin/stock/stock_category', 'fa fa-sliders', 75, 0, '2018-10-19 20:24:50', 1),
(77, NULL, 'manage_stock', '#', 'fa fa-archive', 75, 1, '2018-10-19 20:40:38', 1),
(78, NULL, 'assign_stock', '#', 'fa fa-align-left', 75, 2, '2018-10-19 20:40:38', 1),
(79, NULL, 'stock_report', 'admin/stock/report', 'fa fa-line-chart', 75, 3, '2018-10-19 20:40:38', 1),
(81, NULL, 'stock_list', 'admin/stock/stock_list', 'fa fa-stack-exchange', 75, 4, '2018-10-19 20:40:38', 1),
(82, NULL, 'assign_stock', 'admin/stock/assign_stock', 'fa fa-align-left', 78, 0, '2018-10-19 20:24:50', 1),
(83, NULL, 'assign_stock_report', 'admin/stock/assign_stock_report', 'fa fa-bar-chart', 78, 1, '2018-10-19 20:24:50', 1),
(84, NULL, 'stock_history', 'admin/stock/stock_history', 'fa fa-file-text-o', 77, 0, '2018-10-19 20:24:50', 1),
(85, NULL, 'performance', '#', 'fa fa-dribbble', 0, 18, '2018-11-25 11:43:03', 1),
(86, NULL, 'performance_indicator', 'admin/performance/performance_indicator', 'fa fa-random', 85, 0, '2018-10-19 20:24:50', 1),
(87, NULL, 'performance_report', 'admin/performance/performance_report', 'fa fa-calendar-o', 85, 1, '2018-10-19 20:40:38', 1),
(88, NULL, 'give_appraisal', 'admin/performance/give_performance_appraisal', 'fa fa-plus', 85, 2, '2018-10-19 20:40:38', 1),
(89, NULL, 'payroll', '#', 'fa fa-usd', 0, 16, '2018-11-25 11:43:03', 1),
(90, NULL, 'manage_salary_details', 'admin/payroll/manage_salary_details', 'fa fa-usd', 89, 1, '2018-10-19 20:40:38', 1),
(91, NULL, 'employee_salary_list', 'admin/payroll/employee_salary_list', 'fa fa-user-secret', 89, 2, '2018-10-19 20:40:38', 1),
(92, NULL, 'make_payment', 'admin/payroll/make_payment', 'fa fa-tasks', 89, 3, '2018-10-19 20:40:38', 1),
(93, NULL, 'generate_payslip', 'admin/payroll/generate_payslip', 'fa fa-list-ul', 89, 4, '2018-10-19 20:40:38', 1),
(94, NULL, 'salary_template', 'admin/payroll/salary_template', 'fa fa-money', 89, 5, '2018-10-19 20:40:38', 1),
(95, NULL, 'hourly_rate', 'admin/payroll/hourly_rate', 'fa fa-clock-o', 89, 6, '2018-10-19 20:40:38', 1),
(96, NULL, 'payroll_summary', 'admin/payroll/payroll_summary', 'fa fa-camera-retro', 89, 7, '2018-10-19 20:40:38', 1),
(97, NULL, 'provident_fund', 'admin/payroll/provident_fund', 'fa fa-briefcase', 89, 8, '2018-10-19 20:24:50', 1),
(98, NULL, 'advance_salary', 'admin/payroll/advance_salary', 'fa fa-cc-mastercard', 89, 9, '2018-10-19 20:40:38', 1),
(99, NULL, 'employee_award', 'admin/award', 'fa fa-trophy', 89, 10, '2018-10-19 20:24:50', 1),
(100, NULL, 'announcements', 'admin/announcements', 'fa fa-bullhorn icon', 0, 4, '2018-11-25 11:43:03', 1),
(101, NULL, 'training', 'admin/training', 'fa fa-suitcase', 0, 25, '2018-11-25 11:43:03', 1),
(102, NULL, 'job_circular', '#', 'fa fa-globe', 0, 19, '2018-11-25 11:43:03', 1),
(103, NULL, 'jobs_posted', 'admin/job_circular/jobs_posted', 'fa fa-ticket', 102, 0, '2018-10-19 20:24:50', 1),
(104, NULL, 'jobs_applications', 'admin/job_circular/jobs_applications', 'fa fa-compass', 102, 1, '2018-10-19 20:24:50', 1),
(105, NULL, 'attendance', '#', 'fa fa-file-text', 0, 20, '2018-11-25 11:43:03', 1),
(106, NULL, 'timechange_request', 'admin/attendance/timechange_request', 'fa fa-calendar-o', 105, 0, '2018-10-19 20:40:38', 1),
(107, NULL, 'attendance_report', 'admin/attendance/attendance_report', 'fa fa-file-text', 105, 1, '2018-10-19 20:40:38', 1),
(108, NULL, 'time_history', 'admin/attendance/time_history', 'fa fa-clock-o', 105, 2, '2018-10-19 20:40:38', 1),
(109, NULL, 'pull-down', '', '', 0, 0, '2018-10-19 20:43:04', 0),
(110, NULL, 'filemanager', 'admin/filemanager', 'fa fa-file', 0, 3, '2018-11-25 11:43:03', 1),
(111, NULL, 'company_details', 'admin/settings', 'fa fa-fw fa-info-circle', 25, 1, '2017-04-25 18:38:46', 2),
(112, NULL, 'system_settings', 'admin/settings/system', 'fa fa-fw fa-desktop', 25, 2, '2017-04-25 18:38:46', 2),
(113, NULL, 'email_settings', 'admin/settings/email', 'fa fa-fw fa-envelope', 25, 3, '2017-04-25 18:38:46', 2),
(114, NULL, 'email_templates', 'admin/settings/templates', 'fa fa-fw fa-pencil-square', 25, 4, '2017-04-25 18:38:46', 2),
(115, NULL, 'email_integration', 'admin/settings/email_integration', 'fa fa-fw fa-envelope-o', 25, 5, '2017-04-25 18:38:46', 2),
(116, NULL, 'payment_settings', 'admin/settings/payments', 'fa fa-fw fa-dollar', 25, 6, '2017-04-25 18:38:46', 2),
(117, NULL, 'invoice_settings', 'admin/settings/invoice', 'fa fa-fw fa-money', 25, 0, '2017-04-25 18:38:46', 2),
(118, NULL, 'estimate_settings', 'admin/settings/estimate', 'fa fa-fw fa-file-o', 25, 0, '2017-04-25 18:38:46', 2),
(119, NULL, 'tickets_leads_settings', 'admin/settings/tickets', 'fa fa-fw fa-ticket', 25, 0, '2017-04-25 18:38:46', 2),
(120, NULL, 'theme_settings', 'admin/settings/theme', 'fa fa-fw fa-code', 25, 0, '2017-04-25 18:38:46', 2),
(121, NULL, 'working_days', 'admin/settings/working_days', 'fa fa-fw fa-calendar', 25, 0, '2017-04-25 18:43:41', 2),
(122, NULL, 'leave_category', 'admin/settings/leave_category', 'fa fa-fw fa-pagelines', 25, 0, '2017-04-25 18:43:41', 2),
(123, NULL, 'income_category', 'admin/settings/income_category', 'fa fa-fw fa-certificate', 25, 0, '2017-04-25 18:43:41', 2),
(124, NULL, 'expense_category', 'admin/settings/expense_category', 'fa fa-fw fa-tasks', 25, 0, '2017-04-25 18:43:41', 2),
(125, NULL, 'customer_group', 'admin/settings/customer_group', 'fa fa-fw fa-users', 25, 0, '2017-04-25 18:43:41', 2),
(126, NULL, 'contract_type', 'admin/settings/contract_type', 'fa fa-fw fa-file-o', 25, 0, '2017-04-25 18:43:41', 2),
(127, NULL, 'lead_status', 'admin/settings/lead_status', 'fa fa-fw fa-list-ul', 25, 0, '2017-04-25 18:43:41', 2),
(128, NULL, 'lead_source', 'admin/settings/lead_source', 'fa fa-fw fa-arrow-down', 25, 0, '2017-04-25 18:43:41', 2),
(129, NULL, 'opportunities_state_reason', 'admin/settings/opportunities_state_reason', 'fa fa-fw fa-dot-circle-o', 25, 0, '2017-04-25 18:43:41', 2),
(130, NULL, 'custom_field', 'admin/settings/custom_field', 'fa fa-fw fa-star-o', 25, 0, '2017-04-25 18:43:41', 2),
(131, NULL, 'payment_method', 'admin/settings/payment_method', 'fa fa-fw fa-money', 25, 0, '2017-04-25 18:43:41', 2),
(132, NULL, 'cronjob', 'admin/settings/cronjob', 'fa fa-fw fa-contao', 25, 0, '2017-04-25 18:46:20', 2),
(133, NULL, 'menu_allocation', 'admin/settings/menu_allocation', 'fa fa-fw fa fa-compass', 25, 0, '2017-04-25 18:46:20', 2),
(134, NULL, 'notification', 'admin/settings/notification', 'fa fa-fw fa-bell-o', 25, 0, '2017-04-25 18:46:20', 2),
(135, NULL, 'email_notification', 'admin/settings/email_notification', 'fa fa-fw fa-bell-o', 25, 0, '2017-04-25 18:46:20', 2),
(136, NULL, 'database_backup', 'admin/settings/database_backup', 'fa fa-fw fa-database', 25, 0, '2017-04-25 18:46:20', 2),
(137, NULL, 'translations', 'admin/settings/translations', 'fa fa-fw fa-language', 25, 0, '2017-04-25 18:46:20', 2),
(138, NULL, 'system_update', 'admin/settings/system_update', 'fa fa-fw fa-pencil-square-o', 25, 0, '2017-04-25 18:46:20', 2),
(139, NULL, 'private_chat', 'chat/conversations', 'fa fa-envelope', 0, 26, '2018-11-25 11:43:03', 1),
(140, NULL, 'proposals', 'admin/proposals', 'fa fa-circle-o', 12, 7, '2018-11-21 05:16:07', 1),
(141, NULL, 'knowledgebase', '#', 'fa fa-question-circle', 0, 21, '2018-11-25 11:43:03', 1),
(142, NULL, 'categories', 'admin/knowledgebase/categories', 'fa fa-circle-o', 141, 0, '2018-10-19 20:40:38', 1),
(143, NULL, 'articles', 'admin/knowledgebase/articles', 'fa fa-circle-o', 141, 1, '2018-10-19 20:24:50', 1),
(144, NULL, 'knowledgebase', 'admin/knowledgebase', 'fa fa-circle-o', 141, 2, '2018-10-19 20:40:38', 1),
(145, NULL, 'dashboard_settings', 'admin/settings/dashboard', 'fa fa-fw fa-dashboard', 25, 11, '2017-04-25 18:38:46', 2),
(146, NULL, 'transactions_r', '#', 'fa fa-building-o', 42, 4, '2018-11-21 05:16:07', 1),
(147, NULL, 'sales_report', 'admin/report/sales_report', 'fa fa-shopping-cart', 42, 5, '2018-11-21 05:16:07', 1),
(148, NULL, 'manage_purchase', '#', 'fa fa-truck', 0, 7, '2018-11-25 11:43:03', 1),
(149, NULL, 'supplier', 'admin/purchase/supplier', 'fa fa-gift', 148, 1, '2018-10-19 20:43:04', 1),
(150, NULL, 'purchase', 'admin/purchase/manage_purchase', 'fa fa-archive', 148, 3, '2018-11-21 05:16:07', 1),
(151, NULL, 'proposals_settings', 'admin/settings/proposals', 'fa fa-fw fa-leaf', 25, 0, '2017-04-25 18:38:46', 2),
(152, NULL, 'purchase_settings', 'admin/settings/purchase', 'fa fa-fw fa-truck', 25, 0, '2017-04-25 18:38:46', 2),
(153, NULL, 'purchase_payment', 'admin/purchase/all_payments', 'fa fa-money', 148, 2, '2018-10-29 19:12:29', 1),
(154, NULL, 'pos_sales', 'admin/invoice/pos_sales', 'fa fa-circle-o', 12, 0, '2018-10-29 19:12:33', 1),
(155, NULL, 'damage_items', 'admin/items/damage_items', 'fa fa-bitbucket', 148, 3, '2018-12-13 12:22:06', 1),
(156, NULL, 'manufacturer', 'admin/settings/manufacturer', 'fa fa-fw fa-empire', 25, 2, '2018-12-13 10:44:13', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mettings`
--

CREATE TABLE IF NOT EXISTS `tbl_mettings` (
  `mettings_id` int(11) NOT NULL AUTO_INCREMENT,
  `leads_id` int(11) DEFAULT NULL,
  `opportunities_id` int(11) DEFAULT NULL,
  `meeting_subject` varchar(200) DEFAULT NULL,
  `attendees` varchar(300) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `description` mediumtext DEFAULT NULL,
  PRIMARY KEY (`mettings_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_migrations`
--

CREATE TABLE IF NOT EXISTS `tbl_migrations` (
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

CREATE TABLE IF NOT EXISTS `tbl_milestones` (
  `milestones_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `milestone_name` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `start_date` varchar(20) DEFAULT NULL,
  `end_date` varchar(20) DEFAULT NULL,
  `client_visible` text,
  PRIMARY KEY (`milestones_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notes`
--

CREATE TABLE IF NOT EXISTS `tbl_notes` (
  `notes_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `is_client` enum('Yes','No') NOT NULL DEFAULT 'No',
  `notes` mediumtext,
  `added_by` int(11) DEFAULT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`notes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notifications`
--

CREATE TABLE IF NOT EXISTS `tbl_notifications` (
  `notifications_id` int(11) NOT NULL AUTO_INCREMENT,
  `read` int(11) NOT NULL DEFAULT '0',
  `read_inline` tinyint(1) NOT NULL DEFAULT '0',
  `date` datetime DEFAULT NULL,
  `description` text DEFAULT NULL,
  `from_user_id` int(11) NOT NULL DEFAULT '0',
  `to_user_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(200) DEFAULT NULL,
  `link` text,
  `icon` varchar(200) DEFAULT NULL,
  `value` text,
  PRIMARY KEY (`notifications_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_offence_category`
--

CREATE TABLE IF NOT EXISTS `tbl_offence_category` (
  `offence_id` int(2) NOT NULL AUTO_INCREMENT,
  `offence_category` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`offence_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_online_payment`
--

CREATE TABLE IF NOT EXISTS `tbl_online_payment` (
  `online_payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `gateway_name` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `icon` text CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`online_payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

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

CREATE TABLE IF NOT EXISTS `tbl_opportunities` (
  `opportunities_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `opportunity_name` varchar(100) DEFAULT NULL,
  `stages` varchar(20) DEFAULT NULL,
  `probability` varchar(20) DEFAULT NULL,
  `close_date` timestamp NULL DEFAULT NULL,
  `opportunities_state_reason_id` int(2) DEFAULT NULL,
  `expected_revenue` decimal(10,2) DEFAULT NULL,
  `new_link` varchar(20) DEFAULT NULL,
  `next_action` varchar(100) DEFAULT NULL,
  `next_action_date` timestamp NULL DEFAULT NULL,
  `notes` text,
  `permission` text,
  PRIMARY KEY (`opportunities_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_opportunities_state_reason`
--

CREATE TABLE IF NOT EXISTS `tbl_opportunities_state_reason` (
  `opportunities_state_reason_id` int(2) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `opportunities_state` varchar(20) DEFAULT NULL,
  `opportunities_state_reason` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`opportunities_state_reason_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_overtime`
--

CREATE TABLE IF NOT EXISTS `tbl_overtime` (
  `overtime_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `overtime_date` timestamp NULL DEFAULT NULL,
  `overtime_hours` varchar(20) DEFAULT NULL,
  `notes` text,
  `status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`overtime_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_partners`
--

CREATE TABLE IF NOT EXISTS `tbl_partners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) DEFAULT NULL,
  `profile` text,
  `name` varchar(50) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `facebook` varchar(50) DEFAULT NULL,
  `twitter` varchar(50) DEFAULT NULL,
  `linkedin` varchar(50) DEFAULT NULL,
  `dribbble` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

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

CREATE TABLE IF NOT EXISTS `tbl_payments` (
  `payments_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `invoices_id` int(11) DEFAULT NULL,
  `trans_id` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payer_email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_method` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` longtext COLLATE utf8_unicode_ci,
  `currency` varchar(64) COLLATE utf8_unicode_ci DEFAULT 'USD',
  `notes` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_date` timestamp NULL DEFAULT NULL,
  `month_paid` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `year_paid` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `paid_by` int(11) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `account_id` int(11) NOT NULL DEFAULT '0' COMMENT 'account_id means tracking deposit from which account',
  PRIMARY KEY (`payments_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment_methods`
--

CREATE TABLE IF NOT EXISTS `tbl_payment_methods` (
  `payment_methods_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `method_name` varchar(64) NOT NULL DEFAULT 'Paypal',
  PRIMARY KEY (`payment_methods_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

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

CREATE TABLE IF NOT EXISTS `tbl_penalty_category` (
  `penalty_id` int(2) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `penalty_type` varchar(100) DEFAULT NULL,
  `fine_amount` int(11) DEFAULT NULL,
  `penalty_days` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`penalty_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_performance_apprisal`
--

CREATE TABLE IF NOT EXISTS `tbl_performance_apprisal` (
  `performance_appraisal_id` int(5) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `user_id` int(2) DEFAULT NULL,
  `general_remarks` text DEFAULT NULL,
  `appraisal_month` varchar(100) DEFAULT NULL,
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
  `ability_to_meed_deadline` tinyint(1) DEFAULT NULL COMMENT 'Behavioural - 1 (S) = Satisfactory, 2 (U) = Unsatisfactory, 3 (N) = Needs Improvement',
  PRIMARY KEY (`performance_appraisal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_performance_indicator`
--

CREATE TABLE IF NOT EXISTS `tbl_performance_indicator` (
  `performance_indicator_id` int(5) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `designations_id` int(2) DEFAULT NULL,
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
  `ability_to_meed_deadline` tinyint(1) DEFAULT NULL COMMENT 'Behavioural - 1 = Beginner, 2 = Intermediate, 3 = Advanced',
  PRIMARY KEY (`performance_indicator_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pinaction`
--

CREATE TABLE IF NOT EXISTS `tbl_pinaction` (
  `pinaction_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `module_id` int(11) DEFAULT NULL,
  `module_name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`pinaction_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_priorities`
--

CREATE TABLE IF NOT EXISTS `tbl_priorities` (
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

CREATE TABLE IF NOT EXISTS `tbl_priority` (
  `priority_id` int(11) NOT NULL AUTO_INCREMENT,
  `priority` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`priority_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

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

CREATE TABLE IF NOT EXISTS `tbl_private_chat` (
  `private_chat_id` int(11) NOT NULL AUTO_INCREMENT,
  `chat_title` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`private_chat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_private_chat_messages`
--

CREATE TABLE IF NOT EXISTS `tbl_private_chat_messages` (
  `private_chat_messages_id` int(11) NOT NULL AUTO_INCREMENT,
  `private_chat_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `message_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`private_chat_messages_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_private_chat_users`
--

CREATE TABLE IF NOT EXISTS `tbl_private_chat_users` (
  `private_chat_users_id` int(11) NOT NULL AUTO_INCREMENT,
  `private_chat_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `to_user_id` int(11) DEFAULT NULL,
  `active` int(11) NOT NULL COMMENT '0 == minimize chat,1 == open chat and  2 == close chat ',
  `unread` int(11) DEFAULT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0' COMMENT 'keep last message id',
  PRIMARY KEY (`private_chat_users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project`
--

CREATE TABLE IF NOT EXISTS `tbl_project` (
  `project_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `project_name` varchar(100) DEFAULT NULL,
  `client_id` text,
  `progress` varchar(50) DEFAULT NULL,
  `calculate_progress` varchar(50) DEFAULT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `alert_overdue` tinyint(1) NOT NULL DEFAULT '0',
  `project_cost` decimal(18,2) NOT NULL DEFAULT '0.00',
  `demo_url` varchar(100) DEFAULT NULL,
  `project_status` varchar(20) DEFAULT NULL,
  `description` text,
  `notify_client` enum('Yes','No') DEFAULT NULL,
  `timer_status` enum('on','off') DEFAULT NULL,
  `timer_started_by` int(11) DEFAULT NULL,
  `start_time` int(11) DEFAULT NULL,
  `logged_time` int(11) DEFAULT NULL,
  `permission` text,
  `notes` text,
  `created_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `hourly_rate` varchar(200) DEFAULT NULL,
  `fixed_rate` varchar(200) DEFAULT NULL,
  `project_settings` text,
  `with_tasks` enum('yes','no') NOT NULL DEFAULT 'no',
  `estimate_hours` varchar(50) DEFAULT NULL,
  `billing_type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project_settings`
--

CREATE TABLE IF NOT EXISTS `tbl_project_settings` (
  `settings_id` int(11) NOT NULL AUTO_INCREMENT,
  `settings` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`settings_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

CREATE TABLE IF NOT EXISTS `tbl_proposals` (
  `proposals_id` int(11) NOT NULL AUTO_INCREMENT,
  `reference_no` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `subject` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `module` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `module_id` int(11) DEFAULT '0',
  `proposal_date` timestamp NULL DEFAULT NULL,
  `proposal_month` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `proposal_year` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `due_date` timestamp NULL DEFAULT NULL,
  `alert_overdue` tinyint(1) DEFAULT '0',
  `currency` varchar(32) COLLATE utf8_unicode_ci DEFAULT 'USD',
  `notes` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `tax` int(11) NOT NULL DEFAULT '0',
  `total_tax` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'draft',
  `date_sent` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `proposal_deleted` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `emailed` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT 'No',
  `show_client` enum('Yes','No') COLLATE utf8_unicode_ci DEFAULT 'No',
  `convert` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'No',
  `convert_module` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `convert_module_id` int(11) DEFAULT '0',
  `converted_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `permission` text COLLATE utf8_unicode_ci,
  `discount_type` enum('before_tax','after_tax') COLLATE utf8_unicode_ci DEFAULT NULL,
  `discount_percent` int(2) NOT NULL DEFAULT '0',
  `discount_total` decimal(18,2) NOT NULL DEFAULT '0.00',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `adjustment` decimal(18,2) NOT NULL DEFAULT '0.00',
  `show_quantity_as` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `allowed_cmments` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Yes',
  PRIMARY KEY (`proposals_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_proposals_items`
--

CREATE TABLE IF NOT EXISTS `tbl_proposals_items` (
  `proposals_items_id` int(11) NOT NULL AUTO_INCREMENT,
  `proposals_id` int(11) DEFAULT NULL,
  `saved_items_id` int(11) DEFAULT '0',
  `item_name` varchar(150) COLLATE utf8_unicode_ci DEFAULT 'Item Name',
  `item_desc` longtext COLLATE utf8_unicode_ci,
  `quantity` decimal(10,2) DEFAULT '0.00',
  `unit_cost` decimal(10,2) DEFAULT '0.00',
  `item_tax_rate` decimal(10,2) NOT NULL DEFAULT '0.00',
  `item_tax_name` text COLLATE utf8_unicode_ci,
  `item_tax_total` decimal(10,2) DEFAULT '0.00',
  `total_cost` decimal(10,2) DEFAULT '0.00',
  `date_saved` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `order` int(11) DEFAULT '0',
  `unit` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hsn_code` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`proposals_items_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchases`
--

CREATE TABLE IF NOT EXISTS `tbl_purchases` (
  `purchase_id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier_id` int(11) DEFAULT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `manufacturer_id` int(11) DEFAULT NULL,
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
  `attachement` text,
  `adjustment` decimal(18,2) DEFAULT NULL,
  `discount_total` decimal(18,2) DEFAULT NULL,
  `show_quantity_as` varchar(10) DEFAULT NULL,
  `permission` text,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total_tax` text,
  `tax` decimal(20,2) DEFAULT NULL,
  `notes` text,
  PRIMARY KEY (`purchase_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchase_items`
--

CREATE TABLE IF NOT EXISTS `tbl_purchase_items` (
  `items_id` int(11) NOT NULL AUTO_INCREMENT,
  `purchase_id` int(11) DEFAULT NULL,
  `item_tax_rate` decimal(10,2) NOT NULL DEFAULT '0.00',
  `item_tax_name` text COLLATE utf8_unicode_ci,
  `item_tax_total` decimal(10,2) NOT NULL DEFAULT '0.00',
  `quantity` decimal(10,2) DEFAULT '0.00',
  `total_cost` decimal(10,2) DEFAULT '0.00',
  `item_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'Item Name',
  `item_desc` longtext COLLATE utf8_unicode_ci,
  `unit_cost` decimal(10,2) DEFAULT '0.00',
  `order` int(11) DEFAULT '0',
  `date_saved` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `unit` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hsn_code` text COLLATE utf8_unicode_ci,
  `saved_items_id` int(11) DEFAULT '0',
  PRIMARY KEY (`items_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purchase_payments`
--

CREATE TABLE IF NOT EXISTS `tbl_purchase_payments` (
  `payments_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `purchase_id` int(11) DEFAULT NULL,
  `trans_id` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_method` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` longtext COLLATE utf8_unicode_ci,
  `currency` varchar(64) COLLATE utf8_unicode_ci DEFAULT 'USD',
  `notes` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_date` timestamp NULL DEFAULT NULL,
  `month_paid` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `year_paid` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `paid_to` int(11) DEFAULT NULL,
  `paid_by` int(11) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `account_id` int(11) NOT NULL DEFAULT '0' COMMENT 'account_id means tracking deduct from which account',
  PRIMARY KEY (`payments_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quotationforms`
--

CREATE TABLE IF NOT EXISTS `tbl_quotationforms` (
  `quotationforms_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `quotationforms_title` varchar(200) DEFAULT NULL,
  `quotationforms_code` text DEFAULT NULL,
  `quotationforms_status` varchar(20) NOT NULL DEFAULT 'enabled' COMMENT 'enabled/disabled',
  `quotations_created_by_id` int(11) DEFAULT NULL,
  `quotationforms_date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`quotationforms_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quotations`
--

CREATE TABLE IF NOT EXISTS `tbl_quotations` (
  `quotations_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `quotations_form_title` varchar(250) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `quotations_amount` decimal(10,2) DEFAULT NULL,
  `notes` text,
  `reviewer_id` int(11) DEFAULT NULL,
  `reviewed_date` timestamp NULL DEFAULT NULL,
  `quotations_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `quotations_status` varchar(15) DEFAULT 'pending' COMMENT 'completed/pending',
  PRIMARY KEY (`quotations_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quotation_details`
--

CREATE TABLE IF NOT EXISTS `tbl_quotation_details` (
  `quotation_details_id` int(11) NOT NULL AUTO_INCREMENT,
  `quotations_id` int(11) DEFAULT NULL,
  `quotation_form_data` text,
  `quotation_data` text,
  PRIMARY KEY (`quotation_details_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reminders`
--

CREATE TABLE IF NOT EXISTS `tbl_reminders` (
  `reminder_id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text,
  `date` datetime DEFAULT NULL,
  `notified` enum('Yes','No') NOT NULL DEFAULT 'No',
  `module` varchar(200) DEFAULT NULL,
  `module_id` int(11) DEFAULT NULL,
  `user_id` varchar(40) DEFAULT NULL,
  `notify_by_email` enum('Yes','No') NOT NULL DEFAULT 'No',
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`reminder_id`),
  KEY `rel_id` (`module`),
  KEY `rel_type` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_request_quote`
--

CREATE TABLE IF NOT EXISTS `tbl_request_quote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `message` text,
  `ip_address` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary_allowance`
--

CREATE TABLE IF NOT EXISTS `tbl_salary_allowance` (
  `salary_allowance_id` int(11) NOT NULL AUTO_INCREMENT,
  `salary_template_id` int(11) DEFAULT NULL,
  `allowance_label` varchar(200) DEFAULT NULL,
  `allowance_value` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`salary_allowance_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary_deduction`
--

CREATE TABLE IF NOT EXISTS `tbl_salary_deduction` (
  `salary_deduction_id` int(11) NOT NULL AUTO_INCREMENT,
  `salary_template_id` int(11) DEFAULT NULL,
  `deduction_label` varchar(200) DEFAULT NULL,
  `deduction_value` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`salary_deduction_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary_payment`
--

CREATE TABLE IF NOT EXISTS `tbl_salary_payment` (
  `salary_payment_id` int(5) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `payment_month` varchar(20) DEFAULT NULL,
  `fine_deduction` varchar(200) DEFAULT NULL,
  `payment_type` varchar(20) DEFAULT NULL,
  `comments` text,
  `paid_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deduct_from` int(11) NOT NULL DEFAULT '0' COMMENT 'deduct from means tracking deduct from which account',
  PRIMARY KEY (`salary_payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary_payment_allowance`
--

CREATE TABLE IF NOT EXISTS `tbl_salary_payment_allowance` (
  `salary_payment_allowance_id` int(11) NOT NULL AUTO_INCREMENT,
  `salary_payment_id` int(11) DEFAULT NULL,
  `salary_payment_allowance_label` varchar(200) DEFAULT NULL,
  `salary_payment_allowance_value` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`salary_payment_allowance_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary_payment_deduction`
--

CREATE TABLE IF NOT EXISTS `tbl_salary_payment_deduction` (
  `salary_payment_deduction` int(11) NOT NULL AUTO_INCREMENT,
  `salary_payment_id` int(11) DEFAULT NULL,
  `salary_payment_deduction_label` varchar(200) DEFAULT NULL,
  `salary_payment_deduction_value` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`salary_payment_deduction`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary_payment_details`
--

CREATE TABLE IF NOT EXISTS `tbl_salary_payment_details` (
  `salary_payment_details_id` int(11) NOT NULL AUTO_INCREMENT,
  `salary_payment_id` int(11) DEFAULT NULL,
  `salary_payment_details_label` varchar(200) DEFAULT NULL,
  `salary_payment_details_value` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`salary_payment_details_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary_payslip`
--

CREATE TABLE IF NOT EXISTS `tbl_salary_payslip` (
  `payslip_id` int(5) NOT NULL AUTO_INCREMENT,
  `payslip_number` varchar(100) DEFAULT NULL,
  `salary_payment_id` int(5) DEFAULT NULL,
  `payslip_generate_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`payslip_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary_template`
--

CREATE TABLE IF NOT EXISTS `tbl_salary_template` (
  `salary_template_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `salary_grade` varchar(200) DEFAULT NULL,
  `basic_salary` varchar(200) DEFAULT NULL,
  `overtime_salary` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`salary_template_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_saved_items`
--

CREATE TABLE IF NOT EXISTS `tbl_saved_items` (
  `saved_items_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `manufacturer_id` int(11) DEFAULT NULL,
  `item_name` varchar(200) COLLATE utf8_unicode_ci DEFAULT 'Item Name',
  `code` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `barcode_symbology` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_image` text COLLATE utf8_unicode_ci,
  `item_desc` longtext COLLATE utf8_unicode_ci,
  `cost_price` decimal(18,2) DEFAULT NULL,
  `unit_cost` decimal(18,2) DEFAULT '0.00',
  `customer_group_id` int(11) NOT NULL DEFAULT '0',
  `unit_type` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tax_rates_id` text COLLATE utf8_unicode_ci,
  `item_tax_rate` decimal(18,2) DEFAULT '0.00',
  `item_tax_total` decimal(18,2) DEFAULT '0.00',
  `quantity` decimal(18,0) DEFAULT '1',
  `total_cost` decimal(18,2) DEFAULT '0.00',
  `hsn_code` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`saved_items_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sent`
--

CREATE TABLE IF NOT EXISTS `tbl_sent` (
  `sent_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `to` varchar(100) DEFAULT NULL,
  `subject` varchar(300) DEFAULT NULL,
  `message_body` text DEFAULT NULL,
  `attach_file` varchar(200) DEFAULT NULL,
  `attach_file_path` text,
  `attach_filename` text,
  `message_time` datetime DEFAULT NULL,
  `deleted` enum('Yes','No') NOT NULL DEFAULT 'No',
  PRIMARY KEY (`sent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sessions`
--

CREATE TABLE IF NOT EXISTS `tbl_sessions` (
  `id` varchar(40) DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_sessions`
--

INSERT INTO `tbl_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('qei7d5t6qoicupdbone8g84vjc3h8gru', '::1', 1547655736, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE IF NOT EXISTS `tbl_status` (
  `status_id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

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

CREATE TABLE IF NOT EXISTS `tbl_stock` (
  `stock_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `stock_sub_category_id` int(11) DEFAULT NULL,
  `saved_items_id` int(11) DEFAULT NULL,
  `total_stock` int(5) DEFAULT NULL,
  PRIMARY KEY (`stock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock_category`
--

CREATE TABLE IF NOT EXISTS `tbl_stock_category` (
  `stock_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `stock_category` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`stock_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock_sub_category`
--

CREATE TABLE IF NOT EXISTS `tbl_stock_sub_category` (
  `stock_sub_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `stock_category_id` int(11) DEFAULT NULL,
  `stock_sub_category` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`stock_sub_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscribers`
--

CREATE TABLE IF NOT EXISTS `tbl_subscribers` (
  `subscribers_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `date_of_unsubscribe` date DEFAULT NULL,
  `ip` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`subscribers_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscriptions`
--

CREATE TABLE IF NOT EXISTS `tbl_subscriptions` (
  `subscriptions_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `domain` varchar(250) DEFAULT NULL,
  `status` enum('pending','running','expired','suspended','terminated') DEFAULT 'pending',
  `db_id` int(10) UNSIGNED DEFAULT NULL,
  `activation_tocken` varchar(50) DEFAULT NULL,
  `pricing_id` int(11) DEFAULT NULL,
  `frequency` enum('monthly','yearly') DEFAULT NULL,
  `trial_period` varchar(20) DEFAULT NULL,
  `is_trial` enum('Yes','No') DEFAULT 'No',
  `expired_date` date DEFAULT NULL,
  `currency` varchar(20) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `remarks` text,
  `maintenance_mode_message` varchar(200) DEFAULT NULL,
  `maintenance_mode` varchar(20) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`subscriptions_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscriptions_database`
--

CREATE TABLE IF NOT EXISTS `tbl_subscriptions_database` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `database_name` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscriptions_history`
--

CREATE TABLE IF NOT EXISTS `tbl_subscriptions_history` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `invoice_id` int(11) DEFAULT NULL,
  `subscriptions_id` int(11) DEFAULT NULL,
  `currency` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frequency` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `validity` date DEFAULT NULL,
  `amount` decimal(25,5) NOT NULL DEFAULT '0.00000',
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
  `online_payment` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `payment_method` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `subscriptions_instance_id_foreign` (`subscriptions_id`),
  KEY `subscriptions_currency_id_foreign` (`currency`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscription_payment`
--

CREATE TABLE IF NOT EXISTS `tbl_subscription_payment` (
  `subscription_payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `subscriptions_history_id` int(11) DEFAULT NULL,
  `reference_no` text,
  `transaction_id` text,
  `payment_method` varchar(50) DEFAULT NULL,
  `payment_date` varchar(20) DEFAULT NULL,
  `currency` varchar(20) DEFAULT NULL,
  `subtotal` varchar(50) DEFAULT NULL,
  `discount_percent` varchar(50) DEFAULT NULL,
  `discount_amount` varchar(50) DEFAULT NULL,
  `coupon_code` varchar(50) DEFAULT NULL,
  `total_amount` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`subscription_payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_suppliers`
--

CREATE TABLE IF NOT EXISTS `tbl_suppliers` (
  `supplier_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `permission` text,
  PRIMARY KEY (`supplier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task`
--

CREATE TABLE IF NOT EXISTS `tbl_task` (
  `task_id` int(5) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `milestones_id` int(11) DEFAULT NULL,
  `opportunities_id` int(11) DEFAULT NULL,
  `goal_tracking_id` int(11) DEFAULT NULL,
  `sub_task_id` int(11) DEFAULT NULL,
  `task_name` varchar(200) DEFAULT NULL,
  `task_description` text DEFAULT NULL,
  `task_start_date` timestamp NULL DEFAULT NULL,
  `due_date` timestamp NULL DEFAULT NULL,
  `task_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `task_status` varchar(30) DEFAULT NULL,
  `task_progress` int(2) DEFAULT NULL,
  `calculate_progress` varchar(200) DEFAULT NULL,
  `task_hour` varchar(10) DEFAULT NULL,
  `tasks_notes` text,
  `timer_status` enum('on','off') NOT NULL DEFAULT 'off',
  `timer_started_by` int(11) DEFAULT NULL,
  `start_time` int(11) DEFAULT NULL,
  `logged_time` int(11) NOT NULL DEFAULT '0',
  `leads_id` int(11) DEFAULT NULL,
  `bug_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `permission` text,
  `client_visible` varchar(5) DEFAULT NULL,
  `custom_date` text,
  `hourly_rate` decimal(18,2) DEFAULT '0.00',
  `billable` varchar(20) NOT NULL DEFAULT 'No',
  `index_no` int(10) DEFAULT NULL,
  PRIMARY KEY (`task_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tasks_timer`
--

CREATE TABLE IF NOT EXISTS `tbl_tasks_timer` (
  `tasks_timer_id` int(11) NOT NULL AUTO_INCREMENT,
  `task_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `start_time` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `end_time` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_timed` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `reason` text CHARACTER SET utf8,
  `edited_by` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`tasks_timer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task_attachment`
--

CREATE TABLE IF NOT EXISTS `tbl_task_attachment` (
  `task_attachment_id` int(5) NOT NULL AUTO_INCREMENT,
  `task_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `upload_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `leads_id` int(11) DEFAULT NULL,
  `opportunities_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `bug_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`task_attachment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task_comment`
--

CREATE TABLE IF NOT EXISTS `tbl_task_comment` (
  `task_comment_id` int(5) NOT NULL AUTO_INCREMENT,
  `task_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `comments_attachment` text,
  `comment_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `leads_id` int(11) DEFAULT NULL,
  `opportunities_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `bug_id` int(11) DEFAULT NULL,
  `goal_tracking_id` int(11) DEFAULT NULL,
  `task_attachment_id` int(11) DEFAULT '0',
  `uploaded_files_id` int(11) DEFAULT '0',
  `comments_reply_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`task_comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task_uploaded_files`
--

CREATE TABLE IF NOT EXISTS `tbl_task_uploaded_files` (
  `uploaded_files_id` int(11) NOT NULL AUTO_INCREMENT,
  `task_attachment_id` int(11) DEFAULT NULL,
  `files` text DEFAULT NULL,
  `uploaded_path` text DEFAULT NULL,
  `file_name` text DEFAULT NULL,
  `size` int(10) DEFAULT NULL,
  `ext` varchar(100) DEFAULT NULL,
  `is_image` int(2) DEFAULT NULL,
  `image_width` int(5) DEFAULT NULL,
  `image_height` int(5) DEFAULT NULL,
  PRIMARY KEY (`uploaded_files_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tax_rates`
--

CREATE TABLE IF NOT EXISTS `tbl_tax_rates` (
  `tax_rates_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `tax_rate_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `tax_rate_percent` decimal(10,2) NOT NULL DEFAULT '0.00',
  `permission` text COLLATE utf8_unicode_ci,
  KEY `Index 1` (`tax_rates_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tickets`
--

CREATE TABLE IF NOT EXISTS `tbl_tickets` (
  `tickets_id` int(10) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT '0',
  `ticket_code` varchar(32) DEFAULT NULL,
  `subject` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` text,
  `status` varchar(200) DEFAULT NULL,
  `departments_id` int(11) DEFAULT NULL,
  `reporter` int(10) DEFAULT '0',
  `priority` varchar(50) DEFAULT NULL,
  `upload_file` text,
  `comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `permission` text,
  `last_reply` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`tickets_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tickets_replies`
--

CREATE TABLE IF NOT EXISTS `tbl_tickets_replies` (
  `tickets_replies_id` int(10) NOT NULL AUTO_INCREMENT,
  `tickets_id` bigint(10) DEFAULT NULL,
  `ticket_reply_id` int(11) DEFAULT '0',
  `body` text COLLATE utf8_unicode_ci,
  `replier` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `replierid` int(10) DEFAULT NULL,
  `attachment` text COLLATE utf8_unicode_ci,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`tickets_replies_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_todo`
--

CREATE TABLE IF NOT EXISTS `tbl_todo` (
  `todo_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `due_date` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '1= in_progress 2= on hold 3= done',
  `assigned` int(11) NOT NULL DEFAULT '0',
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`todo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_training`
--

CREATE TABLE IF NOT EXISTS `tbl_training` (
  `training_id` int(5) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `assigned_by` int(11) DEFAULT NULL,
  `training_name` varchar(100) DEFAULT NULL,
  `vendor_name` varchar(100) DEFAULT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `finish_date` timestamp NULL DEFAULT NULL,
  `training_cost` varchar(300) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 = pending, 1 = started, 2 = completed, 3 = terminated',
  `performance` tinyint(1) DEFAULT '0' COMMENT '0 = not concluded, 1 = satisfactory, 2 = average, 3 = poor, 4 = excellent',
  `remarks` text DEFAULT NULL,
  `upload_file` text,
  `permission` text,
  PRIMARY KEY (`training_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transactions`
--

CREATE TABLE IF NOT EXISTS `tbl_transactions` (
  `transactions_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `account_id` int(11) DEFAULT NULL,
  `invoices_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(200) DEFAULT NULL,
  `type` enum('Income','Expense','Transfer') DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `amount` decimal(18,2) DEFAULT NULL,
  `paid_by` int(11) NOT NULL DEFAULT '0',
  `payment_methods_id` int(11) DEFAULT NULL,
  `reference` varchar(200) DEFAULT NULL,
  `status` enum('non_approved','paid','unpaid') DEFAULT 'non_approved',
  `notes` text DEFAULT NULL,
  `tags` text DEFAULT NULL,
  `tax` decimal(18,2) NOT NULL DEFAULT '0.00',
  `date` timestamp NULL DEFAULT NULL,
  `debit` decimal(18,2) NOT NULL DEFAULT '0.00',
  `credit` decimal(18,2) NOT NULL DEFAULT '0.00',
  `total_balance` decimal(18,2) NOT NULL DEFAULT '0.00',
  `transfer_id` int(11) NOT NULL DEFAULT '0',
  `permission` text,
  `attachement` text,
  `client_visible` enum('Yes','No') NOT NULL DEFAULT 'No',
  `added_by` int(11) NOT NULL DEFAULT '0',
  `paid` int(11) NOT NULL DEFAULT '0',
  `billable` enum('Yes','No') NOT NULL DEFAULT 'No',
  PRIMARY KEY (`transactions_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transfer`
--

CREATE TABLE IF NOT EXISTS `tbl_transfer` (
  `transfer_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `to_account_id` int(11) DEFAULT NULL,
  `from_account_id` int(11) DEFAULT NULL,
  `amount` decimal(18,2) DEFAULT NULL,
  `payment_methods_id` int(11) DEFAULT NULL,
  `reference` varchar(200) DEFAULT NULL,
  `status` enum('Cleared','Uncleared','Reconciled','Void') NOT NULL DEFAULT 'Cleared',
  `notes` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'Transfer',
  `permission` mediumtext,
  `attachement` mediumtext,
  PRIMARY KEY (`transfer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uploaded_files`
--

CREATE TABLE IF NOT EXISTS `tbl_uploaded_files` (
  `uploaded_files_id` int(11) DEFAULT NULL,
  `files_id` int(11) DEFAULT NULL,
  `files` text DEFAULT NULL,
  `uploaded_path` text DEFAULT NULL,
  `file_name` text DEFAULT NULL,
  `size` int(10) DEFAULT NULL,
  `ext` varchar(100) DEFAULT NULL,
  `is_image` int(2) DEFAULT NULL,
  `image_width` int(5) DEFAULT NULL,
  `image_height` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `super_admin` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `companies_id` int(11) DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT '2',
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(4) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_login` datetime NOT NULL DEFAULT '2016-10-10 10:10:00',
  `created` datetime NOT NULL DEFAULT '2016-10-10 10:10:10',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `online_time` int(32) NOT NULL DEFAULT '0' COMMENT '1 = online 0 = offline ',
  `permission` text COLLATE utf8_unicode_ci,
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
  `media_path_slug` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_role`
--

CREATE TABLE IF NOT EXISTS `tbl_user_role` (
  `user_role_id` int(11) NOT NULL AUTO_INCREMENT,
  `designations_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `view` int(11) NOT NULL DEFAULT '0',
  `created` int(11) NOT NULL DEFAULT '0',
  `edited` int(11) NOT NULL DEFAULT '0',
  `deleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_working_days`
--

CREATE TABLE IF NOT EXISTS `tbl_working_days` (
  `working_days_id` int(11) NOT NULL AUTO_INCREMENT,
  `companies_id` int(11) DEFAULT NULL,
  `day_id` int(5) DEFAULT NULL,
  `start_hours` varchar(30) DEFAULT NULL,
  `end_hours` varchar(20) DEFAULT NULL,
  `flag` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`working_days_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_working_days`
--

INSERT INTO `tbl_working_days` (`working_days_id`, `companies_id`, `day_id`, `start_hours`, `end_hours`, `flag`) VALUES
(1, NULL, 1, '10:00 am', '4:00 pm', 1),
(2, NULL, 2, '9:00 am', '6:00 pm', 1),
(3, NULL, 3, '9:00 am', '6:00 pm', 1),
(4, NULL, 4, '9:00 am', '6:00 pm', 1),
(5, NULL, 5, '9:00 am', '6:00 pm', 1),
(6, NULL, 6, '9:00 am', '6:00 pm', 1),
(7, NULL, 7, '00:00:00', '00:00:00', 0);
-- phpMyAdmin SQL Dump
-- version 4.4.15.8
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 11, 2018 at 11:09 AM
-- Server version: 5.6.31
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `main_store`
--

CREATE TABLE IF NOT EXISTS `main_store` (
  `id` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `item` varchar(255) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `supplier_address` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `received` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price_each` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_store`
--

INSERT INTO `main_store` (`id`, `created_at`, `updated_at`, `item`, `supplier_name`, `supplier_address`, `department`, `received`, `quantity`, `price_each`, `total`, `user_id`) VALUES
(1, '2018-03-25 03:54:00', '2018-03-25 03:54:00', 'Gear Box', 'BigSam', 'Kijitonyama', 'Engineering', 'Main Store', '4', 370000, 1480000, 4),
(2, '2018-04-06 13:12:46', '2018-04-06 13:12:46', 'Ledger B', 'ABEtools', 'Mbezi Juu', 'Accounts', 'Main Store', '14', 3500, 450000, 5),
(3, '2018-04-07 12:45:10', '2018-04-07 12:45:10', 'Goodrich tyres', 'Leicester', 'Jangwani A', 'Engineering', 'Main Store', '8', 450000, 3600000, 4),
(4, '2018-04-07 14:08:54', '2018-04-07 14:08:54', 'Engine Filter', 'Southa', 'Bagamoyo', 'Engineering', 'Main Store', '4', 15000, 60000, 4),
(7, '2018-04-07 14:24:21', '2018-04-07 14:24:21', 'RIMA4', 'AFC', 'Sakina', 'Accounts', 'Main Store', '15', 0, 0, 5),
(8, '2018-04-08 07:02:12', '2018-04-08 07:02:12', 'HP aspire', 'Etihad', 'Njoro', 'ICT', 'Main Store', '10', 0, 0, 1),
(9, '2018-04-15 08:08:28', '2018-04-15 08:08:28', 'Monitor Samsung', 'Argentina', 'Mianzini', 'ICT', 'Main Store', '3', 0, 0, 1),
(10, '2018-05-24 17:41:02', '2018-05-24 17:41:02', 'Board banners', 'Ulloa', 'Magomeni', 'Marketing', 'Store', '13', 17000, 221000, 7),
(11, '2018-06-01 05:29:00', '2018-06-01 05:29:00', 'Distilled Water', 'AllisonChem', 'Upanga', 'Production', 'Main Store', '100litres', 550000, 5500000, 6);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_03_13_125200_create_posts_table', 1),
(4, '2018_03_24_071459_add_user_id_to_posts', 2),
(5, '2018_03_24_090645_create_receives_table', 3),
(6, '2018_03_25_073917_add_user_id_to_receives', 4);

-- --------------------------------------------------------

--
-- Table structure for table `notify_order`
--

CREATE TABLE IF NOT EXISTS `notify_order` (
  `id` int(10) NOT NULL,
  `item` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notify_order`
--

INSERT INTO `notify_order` (`id`, `item`, `quantity`, `department`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'HP aspire', '1', 'Stores', 1, '2018-04-17 17:16:12', '2018-04-14 09:18:28'),
(2, 'HP aspire one', '1', 'ICT', 1, '2018-04-17 17:15:46', '2018-04-14 09:35:39'),
(3, 'Gear Box', '2', 'Engineering', 4, '2018-05-25 10:37:37', '2018-04-14 09:54:45');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('tayloralex@one.com', '$2y$10$97l2m3PL6BPj.rktHsUhUu9k.Qi5geDGkpNj8NL2KnJRznbTU/C6.', '2018-05-03 09:09:08');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `label`, `created_at`, `updated_at`) VALUES
(1, 'enter_stocks', 'Enter the stocks', '2018-04-20 15:34:04', '0000-00-00 00:00:00'),
(2, 'purchase_request', 'Prepare purchase request', '2018-04-20 15:34:04', '0000-00-00 00:00:00'),
(3, 'print_prequest', 'Print purchase request', '2018-04-20 15:35:06', '0000-00-00 00:00:00'),
(4, 'user_admin', 'Admin', '2018-04-20 15:35:06', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE IF NOT EXISTS `permission_role` (
  `permission_id` int(10) NOT NULL,
  `role_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 2),
(4, 8);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `StockName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `StockNumber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PriceInfo` int(10) NOT NULL,
  `Discount` int(10) NOT NULL,
  `TAX` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `created_at`, `updated_at`, `StockName`, `StockNumber`, `Quantity`, `PriceInfo`, `Discount`, `TAX`, `Department`, `user_id`) VALUES
(1, '2018-03-13 14:03:39', '2018-03-24 09:56:45', 'Mac Book Pro 2017', 'MBP17', '8', 2500000, 0, '15%', 'ICT', 2),
(2, '2018-03-31 04:48:09', '2018-03-31 09:59:08', 'Gear box', 'GB041', '4', 4025000, 0, '15%', 'Engineering', 2);

-- --------------------------------------------------------

--
-- Table structure for table `p_order`
--

CREATE TABLE IF NOT EXISTS `p_order` (
  `id` int(10) NOT NULL,
  `item_no` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `quantity` int(10) NOT NULL,
  `uom` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `supplier_name` varchar(255) NOT NULL,
  `supplier_address` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_order`
--

INSERT INTO `p_order` (`id`, `item_no`, `description`, `department`, `quantity`, `uom`, `price`, `total`, `created_at`, `updated_at`, `supplier_name`, `supplier_address`) VALUES
(1, 'GB012', 'Gea Box', 'Engineering', 3, '1each', 270000, 810000, '2018-05-19 10:12:56', '0000-00-00 00:00:00', 'BigSam', 'Kijitonyama');

-- --------------------------------------------------------

--
-- Table structure for table `receives`
--

CREATE TABLE IF NOT EXISTS `receives` (
  `id` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `item` varchar(255) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `supplier_address` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `received` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price_each` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receives`
--

INSERT INTO `receives` (`id`, `created_at`, `updated_at`, `item`, `supplier_name`, `supplier_address`, `department`, `received`, `quantity`, `price_each`, `total`, `user_id`) VALUES
(1, '2018-03-25 03:54:00', '2018-03-25 03:54:00', 'Gear Box', 'BigSam', 'Kijitonyama', 'Engineering', 'Main Store', '4', 370000, 1480000, 4),
(2, '2018-04-06 13:12:46', '2018-04-06 13:12:46', 'Ledger B', 'ABEtools', 'Mbezi Juu', 'Accounts', 'Main Store', '14', 3500, 450000, 5),
(3, '2018-04-07 12:45:10', '2018-04-07 12:45:10', 'Goodrich tyres', 'Leicester', 'Jangwani A', 'Engineering', 'Main Store', '8', 450000, 3600000, 4),
(4, '2018-04-07 14:08:54', '2018-04-07 14:08:54', 'Engine Filter', 'Southa', 'Bagamoyo', 'Engineering', 'Main Store', '4', 15000, 60000, 4),
(7, '2018-04-07 14:24:21', '2018-04-07 14:24:21', 'RIMA4', 'AFC', 'Sakina', 'Accounts', 'Main Store', '15', 0, 0, 5),
(8, '2018-04-08 07:02:12', '2018-04-08 07:02:12', 'HP aspire', 'Etihad', 'Njoro', 'ICT', 'Main Store', '10', 0, 0, 1),
(9, '2018-04-15 08:08:28', '2018-04-15 08:08:28', 'Monitor Samsung', 'Argentina', 'Mianzini', 'ICT', 'Main Store', '3', 0, 0, 1),
(10, '2018-05-24 17:41:02', '2018-05-24 17:41:02', 'Board banners', 'Ulloa', 'Magomeni', 'Marketing', 'Store', '13', 17000, 221000, 7),
(11, '2018-06-01 05:29:00', '2018-06-01 05:29:00', 'Distilled Water', 'AllisonChem', 'Upanga', 'Production', 'Main Store', '100litres', 550000, 5500000, 6);

-- --------------------------------------------------------

--
-- Table structure for table `requisitions`
--

CREATE TABLE IF NOT EXISTS `requisitions` (
  `description` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id` int(10) NOT NULL,
  `user_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requisitions`
--

INSERT INTO `requisitions` (`description`, `quantity`, `department`, `created_at`, `updated_at`, `id`, `user_id`) VALUES
('Goodrich tyres', '8', 'Engineering', '2018-05-24 06:53:52', '2018-05-22 05:22:42', 1, 4),
('HP keyboards', '12', 'ICT', '2018-05-24 06:53:23', '0000-00-00 00:00:00', 2, 1),
('Engine Oil', '40 liters', 'Production ', '2018-05-24 05:07:34', '0000-00-00 00:00:00', 3, 6),
('Samsung lcd', '4', 'ICT', '2018-05-24 02:46:36', '2018-05-24 02:46:36', 4, 1),
('White board ad banner', '15', 'Marketing', '2018-05-24 14:43:41', '2018-05-24 14:43:41', 5, 7);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `label`, `created_at`, `updated_at`) VALUES
(1, 'stores', 'Stores Manager', '2018-03-29 12:37:29', '0000-00-00 00:00:00'),
(2, 'procure', 'Procurement & Supplies Manager', '2018-03-30 19:22:26', '0000-00-00 00:00:00'),
(3, 'ict', 'Ict Manager', '2018-03-30 20:00:24', '0000-00-00 00:00:00'),
(4, 'engineering', 'Eng. Manager', '2018-03-30 20:00:40', '0000-00-00 00:00:00'),
(5, 'accounts', 'Accounts Manager', '2018-03-30 20:00:52', '0000-00-00 00:00:00'),
(6, 'sales', 'Sales Manager', '2018-03-30 20:01:04', '0000-00-00 00:00:00'),
(7, 'marketing', 'Marketing Manager\r\n', '2018-03-30 20:02:49', '0000-00-00 00:00:00'),
(8, 'admin', 'Admin Manager', '2018-04-20 11:28:49', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE IF NOT EXISTS `role_user` (
  `role_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`) VALUES
(1, 2),
(2, 3),
(8, 8);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `supplier_name` varchar(255) NOT NULL,
  `supplier_address` varchar(255) NOT NULL,
  `supplier_contact` int(10) NOT NULL,
  `supplier_goods` varchar(255) NOT NULL,
  `supplier_discounts` varchar(255) NOT NULL,
  `delivery_time` int(11) NOT NULL,
  `goods_guarantee` int(10) NOT NULL,
  `g_quality` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_name`, `supplier_address`, `supplier_contact`, `supplier_goods`, `supplier_discounts`, `delivery_time`, `goods_guarantee`, `g_quality`, `user_id`, `created_at`, `updated_at`, `id`) VALUES
('BigSam', 'Kijitonyama', 755257505, 'Car Engineering', '4', 7, 4, 7, 3, '2018-05-31 13:29:21', '0000-00-00 00:00:00', 1),
('ABEtools', 'Kijitonyama', 784528321, 'Stationary', '5', 7, 10, 8, 3, '2018-05-31 08:46:25', '2018-05-31 08:46:25', 2),
('Leicester', 'Jangwani A', 745321780, 'Car Spares', '3', 6, 7, 8, 3, '2018-05-31 10:31:28', '2018-05-31 10:31:28', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `department`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hamisi Jabe', 'ICT', 'hamisi@gmail.com', '$2y$10$oqb6sXW2lbySrvGI08fEv.G0gSyjaT1oGBeeZX6jc2rK0IkUZwpcq', 'QpMph4UsA3Om4sF8WEbNFEAbEUsSp8s3ihf1LDBzRRUK0bm5bScEaB0cOiqZ', '2018-03-23 09:49:12', '2018-03-23 09:49:12'),
(2, 'Anna John', 'Stores', 'johnanna@gmail.com', '$2y$10$opT3X3/154H7VDBc2QteluWLVy2RFCcCy2Q9WxeY1qsDu0QNFTte.', '5yhu42T0yJcHI3TbLs6qdTPQSTEPh4zSiHocLdHZFczGkPHehbrDX9QDMqTB', '2018-03-25 04:01:26', '2018-03-25 04:01:26'),
(3, 'Hamza Kibaji', 'Procurement', 'hamza@banana.com', '$2y$10$bTac10Dkjy9z5nRUQbZPmeS2Eb7jso/muVZL/8Wj2bukqTQsGBm0m', '6UaOk1KvKSsbwd6b9ZCe2mmkadhm2dKOfRZgFF9JgmZa4fbzzpF7J27eeMSk', '2018-03-30 16:33:11', '2018-03-30 16:33:11'),
(4, 'John Doe', 'Engineering', 'doe@hls.com', '$2y$10$XPcSWCXuYYKhHY5IcAK0xu9vXFUnskZFz56uC29Qe6MFgqnSCHtoS', 'hkCQaEs8L0Q5NLg5H1RxQHjkTocu9DsMtVVlwjEg7w8gNMocTjYTmyQCDraG', '2018-04-07 05:50:53', '2018-04-07 05:50:53'),
(5, 'Goodluck Silayo', 'Accounts', 'gsilayo@one.com', '$2y$10$XPcSWCXuYYKhHY5IcAK0xu9vXFUnskZFz56uC29Qe6MFgqnSCHtoS', 'Fg93CysF7OsIIfw8lHEzAhXD53okaH1CYC0VbV9jrVUxRrCbS8Tq8eiccueI', NULL, NULL),
(6, 'Robert Shigella', 'Production', 'rshigella@one.com', '$2y$10$XPcSWCXuYYKhHY5IcAK0xu9vXFUnskZFz56uC29Qe6MFgqnSCHtoS', 'amW6qNbt03O1hG2dqtbbifFjUhfveZKkPlGCwU4GqA1urMyt1GtL4cNfUNvG', NULL, NULL),
(7, 'Alex Taylor', 'Marketing', 'tayloralex@one.com', '$2y$10$KGgcYKcA0mU3P/31wsEe2OXhRYvnLrkX0uI3Zu34/1cLq0vOAp50a', 'E4Gn1rp632B6iUVHM3nB6Mjzy1D6Wic0JZ9ySbrnGCdV6AOzey8jC23mchHj', '2018-04-20 11:47:12', '2018-04-20 11:47:12'),
(8, 'Mac Eric', 'ICT', 'admincore@one.com', '$2y$10$XPcSWCXuYYKhHY5IcAK0xu9vXFUnskZFz56uC29Qe6MFgqnSCHtoS', '4bad2bcxv2EGKXsz8wwpF4YXXnsReBvRQVlAZwSq0IblUPZWx7j9RNFBl4Uz', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `main_store`
--
ALTER TABLE `main_store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notify_order`
--
ALTER TABLE `notify_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_order`
--
ALTER TABLE `p_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receives`
--
ALTER TABLE `receives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requisitions`
--
ALTER TABLE `requisitions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `main_store`
--
ALTER TABLE `main_store`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `notify_order`
--
ALTER TABLE `notify_order`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `p_order`
--
ALTER TABLE `p_order`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `receives`
--
ALTER TABLE `receives`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `requisitions`
--
ALTER TABLE `requisitions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `requisitions`
--
ALTER TABLE `requisitions`
  ADD CONSTRAINT `requisitions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

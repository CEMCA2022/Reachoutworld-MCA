-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 24, 2020 at 11:58 AM
-- Server version: 8.0.16
-- PHP Version: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tanadi`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent_table`
--

CREATE TABLE `agent_table` (
  `id` int(10) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `phone` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `clearance_Id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `agent_table`
--

INSERT INTO `agent_table` (`id`, `name`, `phone`, `clearance_Id`, `password`, `status`) VALUES
(2, 'Illodigwe Ifeanyi', '08011111112', 'agent895', '49fb9028c8ccfb94364368ed28df5759', 0),
(3, 'Michael Ebube', '09097666666', 'agent235', '6585742c6aac6dc84c3645ef7ff8e790', 0),
(4, 'Ebube Harrison', '08187970450', 'agent001', '108ca3ab9a22cf0dc10c84737f8185e3', 1),
(5, 'harry John', '08062595829', 'agent703', '30587a8d9cb542a7e886607cae4e0f55', 1),
(6, 'blessing Isaac', '08011111114', 'agent468', '32a87febf483655ba401ab9ae1624c52', 0);

-- --------------------------------------------------------

--
-- Table structure for table `master_table`
--

CREATE TABLE `master_table` (
  `id` int(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `master_table`
--

INSERT INTO `master_table` (`id`, `password`) VALUES
(1, '6585742c6aac6dc84c3645ef7ff8e790');

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `id` int(100) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `quantity` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `redeem_quantity` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `redeem_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `agent_name` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `redemption_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`id`, `name`, `quantity`, `size`, `redeem_quantity`, `phone`, `address`, `redeem_code`, `agent_name`, `status`, `redemption_date`) VALUES
(1, 'Harrison Ebube', '200', NULL, '', '08187970450', 'Number 1, Nuru street Gwarimpa Abuja', '', NULL, 0, '2020-04-19 18:03:22'),
(2, 'Joyg', '20', NULL, '', '08187970450', 'Zone 8', '', NULL, 0, '2020-04-19 18:03:22'),
(3, 'Ste', '133', NULL, '', '08136425849', 'Williams road zone 4', '', NULL, 0, '2020-04-19 18:03:22'),
(4, 'Mary jane', '46', NULL, '', '08189534172', 'Dutse Alhaji market', '', NULL, 0, '2020-04-19 18:03:22'),
(5, 'EMMANUEL-NOBERTS IDOKO ', '2', NULL, '', '08058196193', 'Dutse', '', NULL, 0, '2020-04-19 18:03:22'),
(6, 'VALENTINE ifeanyi ', '10', NULL, '', '08059005420', 'Kubwa', '', NULL, 0, '2020-04-19 18:03:22'),
(7, 'Tester test', '508', NULL, '', '08012345678', 'Test Avenue, QA District, UAT', '', NULL, 0, '2020-04-19 18:03:22'),
(8, 'Tester test', '508', NULL, '', '08012345678', 'Test Avenue, QA District, UAT', '', NULL, 0, '2020-04-19 18:03:22'),
(9, 'Tester test', '508', NULL, '', '08012345678', 'Test Avenue, QA District, UAT', '', NULL, 0, '2020-04-19 18:03:22'),
(10, 'Chika chukwuemeka', '10', NULL, '', '08132885864', 'Living faith church kubwa. Fct  Abuja', '', NULL, 0, '2020-04-19 18:03:22'),
(11, 'Chika chukwuemeka', '10', NULL, '', '08132885864', 'Living faith church kubwa. Fct  Abuja', '', NULL, 0, '2020-04-19 18:03:22'),
(12, 'Ifeanyi Odimnobi', '200', NULL, '', '08187970450', 'Gwagwalada', '', NULL, 0, '2020-04-19 18:03:22'),
(13, 'James Blunt', '20', NULL, '', '08187970450', 'Number 1, Nuru street Gwarimpa Abuja', '', NULL, 0, '2020-04-19 18:03:22'),
(14, 'Okonkwo Philip', '30', NULL, '', '08187970450', 'Number 1, Nuru street Gwarimpa Abuja', '', NULL, 0, '2020-04-19 18:03:22'),
(15, 'Akunna obi', '4', NULL, '', '08187970450', 'Number 1, Nuru street Gwarimpa Abuja', '', NULL, 0, '2020-04-19 18:03:22'),
(16, 'chizoba', '12', NULL, '', '08187970450', 'Opposite Dole police station', '', NULL, 0, '2020-04-19 18:03:22'),
(17, 'AggregatorBeta', '200', NULL, '', '08187970450', 'Number 1, Nuru street Gwarimpa Abuja', '', NULL, 0, '2020-04-19 18:03:22'),
(18, 'Andrew', '5000', NULL, '', '08187970450', 'Number 1, Nuru street Gwarimpa Abuja', '', NULL, 0, '2020-04-19 18:03:22'),
(19, 'Adaeze', '100', NULL, '', '08061179843', 'Behind first Bank, Asokoro Abuja.', '', NULL, 0, '2020-04-19 18:03:22'),
(20, 'AggregatorBeta', '200', NULL, '', '08187970450', 'Number 1, Nuru street Gwarimpa Abuja', '', NULL, 0, '2020-04-19 18:03:22'),
(21, 'AggregatorAlpha', '204', NULL, '', '08187970450', 'Number 1, Nuru street Gwarimpa Abuja', '', NULL, 0, '2020-04-19 18:03:22'),
(22, 'olu', '200', NULL, '', '08187970450', 'Gwagwalada', '', NULL, 0, '2020-04-19 18:03:22'),
(23, 'harry', '5000', NULL, '', '08187970450', 'yelma districk karo', '', NULL, 0, '2020-04-19 18:03:22'),
(24, 'jennifer', '204', NULL, '', '08187970450', 'Gwagwalada', '', NULL, 0, '2020-04-19 18:03:22'),
(25, 'harry', '200', NULL, '', '08187970450', 'Number 1, Nuru street Gwarimpa Abuja', '', NULL, 0, '2020-04-19 18:03:22'),
(38, 'Johnson', '56', NULL, '23', '08187970420', 'Gwagwalada', 'TAN/DIS/38039/0420', NULL, 1, '2020-04-19 18:03:22'),
(39, 'Mary jane', '69', NULL, '20', '08121345289', 'Nyanya', 'TAN/DIS/57780/5289', 'Tanadi', 1, '2020-04-19 18:03:22'),
(40, 'PRECIOUS', '100', NULL, '100', '08032396923', 'Wise 2', 'TAN/DIS/96988/6923', NULL, 1, '2020-04-19 18:03:22'),
(41, 'EMMANUEL-NOBERTS IDOKO ', '2', NULL, NULL, '08058196193', 'Dutse', 'TAN/DIS/99975/6193', NULL, 0, '2020-04-19 18:03:22'),
(42, 'Ogogo yusuf', '25', NULL, NULL, '08178452316', 'Nyanya', 'TAN/DIS/03293/2316', NULL, 0, '2020-04-19 18:03:22'),
(43, 'Treasure', '30', NULL, '23', '08061179843', 'Maitama, Abuja', 'TAN/DIS/01698/9843', NULL, 1, '2020-04-19 18:03:22'),
(44, 'Michael', '1', NULL, '1', '09097666666', '18 Barra street', 'TAN/DIS/39901/6666', NULL, 1, '2020-04-19 18:03:22'),
(45, 'AggregatorBeta', '200', NULL, '12', '08187970450', 'yelma districk karo', 'TAN/DIS/76999/0450', NULL, 1, '2020-04-19 18:03:22'),
(46, 'harry', '200', NULL, '12', '08187970450', 'Number 1, Nuru street Gwarimpa Abuja', 'TAN/DIS/60221/0450', NULL, 1, '2020-04-19 18:03:22'),
(47, 'jude', '200', NULL, '180', '08187970450', 'yelma districk karo', 'TAN/DIS/91784/0450', 'Harrison Ebube', 1, '2020-04-19 18:03:22'),
(48, 'Julius Agu', '15', NULL, '5', '08187970459', 'Aguda', 'TAN/DIS/37862/0459', 'Michael Ebube', 1, '2020-04-19 18:03:22'),
(49, 'Michael', '3', NULL, '2', '08081247148', '18 Barra street', 'TAN/DIS/54054/7148', 'Michael Ebube', 1, '2020-04-19 18:03:22'),
(50, 'Kanayo', '20', NULL, '20', '08022345678', '18 Barra street', 'TAN/DIS/23955/5678', 'Michael Ebube', 1, '2020-04-19 18:03:22'),
(51, 'Kanayo', '20', NULL, '20', '07012345617', '18 Barra street', 'TAN/DIS/79848/5617', 'Michael Ebube', 1, '2020-04-19 18:03:22'),
(52, 'Ifeanyi Harrison ', '10', NULL, NULL, '08035780380', 'Kuje', 'TAN/DIS/17213/0380', NULL, 0, '2020-04-19 18:03:22'),
(53, 'Chika CHUKWUEMEKA', '15', NULL, '12', '08052365487', 'Maraba', 'TAN/DIS/74589/5487', 'Ifeanyi illodigwe', 1, '2020-04-19 18:03:22'),
(54, 'Anomi', '15', NULL, NULL, '09035870157', 'Dutse', 'TAN/DIS/28070/0157', NULL, 0, '2020-04-19 18:03:22'),
(55, 'Jonathan Dansuki', '2', NULL, NULL, '08124567824', 'Jabi Market', 'TAN/DIS/64434/7824', NULL, 0, '2020-04-19 18:03:22'),
(56, 'james Aru', '200', NULL, NULL, '08187970421', 'Dei dei', 'TAN/DIS/38812/0421', NULL, 0, '2020-04-19 18:03:22'),
(57, 'samuel uchenna', '23', NULL, NULL, '08187970451', '4', 'TAN/DIS/88667/0451', NULL, 0, '2020-04-19 18:03:22'),
(58, 'robeto steve', '500', NULL, NULL, '08187970453', 'Opposite Dole police station', 'TAN/DIS/64734/0453', NULL, 0, '2020-04-19 18:03:22'),
(59, 'AggregatorBeta', '5000', NULL, NULL, '08187970452', 'Opposite Dole police station', 'TAN/DIS/78045/0452', NULL, 0, '2020-04-19 18:03:22'),
(60, 'Mark Luke', '200', NULL, NULL, '08187970411', 'Number 1, Nuru street Gwarimpa Abuja', 'TAN/DIS/00171/0411', NULL, 0, '2020-04-19 18:03:22'),
(61, 'jessica Luke', '20', NULL, '19', '08187970412', 'Dei dei', 'TAN/DIS/87111/0412', 'Illodigwe Ifeanyi', 1, '2020-04-20 10:01:15'),
(62, 'jessica Luke', '20', NULL, '19', '08187970414', 'Dei dei', 'TAN/DIS/38700/0414', 'Ebube Harrison', 1, '2020-04-19 18:16:37'),
(63, 'Mercy Chinwe', '15', NULL, '15', '08187970430', 'Jabi Market', 'TAN/DIS/74200/0430', 'Ebube Harrison', 1, '2020-04-19 18:03:22'),
(64, 'saint luke', '20', NULL, '17', '08187970418', 'yelma districk karo', 'TAN/DIS/75550/0418', 'Ebube Harrison', 1, '2020-04-19 18:03:22'),
(65, 'samson Abdulahi', '20', NULL, '20', '08187970454', 'Gwagwalada', 'TAN/DIS/00912/0454', 'Ebube Harrison', 1, '2020-04-19 18:03:22'),
(66, 'maxwell okafor', '20', NULL, '20', '08187970455', 'Gwagwalada', 'TAN/DIS/00073/0455', 'Ebube Harrison', 1, '2020-04-19 18:03:22'),
(67, 'Azubuike Ebube', '200', NULL, '198', '08187970444', 'Number 1, Nuru street Gwarimpa Abuja', 'TAN/DIS/97475/0444', 'Ebube Harrison', 1, '2020-04-19 18:03:22'),
(68, 'becky Adam', '20', NULL, '20', '08187970400', 'Gwagwalada', 'TAN/DIS/09462/0400', 'Segun Bolodeoku', 1, '2020-04-19 18:03:22'),
(69, 'Joy obunze', '30', NULL, '28', '08174521395', 'Suleja', 'TAN/DIS/84414/1395', 'Harrison Ebube', 1, '2020-04-19 18:03:22'),
(70, 'Harrison', '50', NULL, '50', '09092926969', '18 Barra street', 'TAN/DIS/19785/6969', 'Michael Ebube', 1, '2020-04-19 18:03:22'),
(71, 'Samaila Tenebe', '50', NULL, '49', '09037771790', 'Sigma estate, Jabi ', 'TAN/DIS/58242/1790', 'Tanadi', 1, '2020-04-19 18:03:22'),
(72, 'Steve job', '13', NULL, NULL, '08011111112', 'Aguda', 'TAN/DIS/29017/1112', NULL, 0, NULL),
(73, 'Abraham Isaac', '15', NULL, NULL, '08167796710', 'burru de change zone 4', 'TAN/DIS/30805/6710', NULL, 0, NULL),
(74, 'Simeon Luke', '2', 'Gwagwalada', NULL, '08187970413', 'Select your Size of Bag', 'TAN/DIS/32032/0413', NULL, 0, NULL),
(75, 'Chibuzo Maduka', '20', 'Select your Size of Bag', NULL, '08187970423', 'Number 1, Nuru street Gwarimpa Abuja', 'TAN/DIS/90969/0423', NULL, 0, NULL),
(76, 'Chibuzo Madukazi', '20', 'Select your Size of Bag', NULL, '08187970222', 'Gwagwalada', 'TAN/DIS/88316/0222', NULL, 0, NULL),
(77, 'Chinedu Echefu', '20', '25 KG', '15', '08187970111', 'Opposite Dole police station', 'TAN/DIS/97265/0111', 'blessing Isaac', 1, '2020-04-24 11:39:33'),
(78, 'shadrach Oloche', '204', '50 KG', '1', '08187970477', 'lugbe', 'TAN/DIS/51130/0477', 'blessing Isaac', 1, '2020-04-24 11:48:21');

-- --------------------------------------------------------

--
-- Table structure for table `redemption_table`
--

CREATE TABLE `redemption_table` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `redeem_quantity` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `redeem_code` varchar(255) NOT NULL,
  `agent_name` varchar(255) NOT NULL,
  `redeem_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `redemption_table`
--

INSERT INTO `redemption_table` (`id`, `name`, `phone`, `size`, `redeem_quantity`, `amount`, `redeem_code`, `agent_name`) VALUES
(1, 'samson Abdulahi', '', '', '20', '', 'TAN/DIS/00912/0454', 'Ebube Harrison'),
(2, 'saint luke', '08187970418', '', '17', '', 'TAN/DIS/75550/0418', 'Ebube Harrison'),
(3, 'Mercy Chinwe', '08187970430', '', '15', '', 'TAN/DIS/74200/0430', 'Ebube Harrison'),
(4, 'jessica Luke', '08187970414', '', '19', '', 'TAN/DIS/38700/0414', 'Ebube Harrison'),
(5, 'jessica Luke', '08187970412', '', '19', '351500', 'TAN/DIS/87111/0412', 'Illodigwe Ifeanyi'),
(6, 'Chinedu Echefu', '08187970111', '', '15', '150000', 'TAN/DIS/97265/0111', 'blessing Isaac'),
(7, 'shadrach Oloche', '08187970477', '50 KG', '1', '18500', 'TAN/DIS/51130/0477', 'blessing Isaac');

-- --------------------------------------------------------

--
-- Table structure for table `token_table`
--

CREATE TABLE `token_table` (
  `id` int(100) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `token_table`
--

INSERT INTO `token_table` (`id`, `token`, `status`) VALUES
(9, 'TAN/TOKEN/5849', 1),
(10, 'TAN/TOKEN/6298', 1),
(11, 'TAN/TOKEN/7715', 1),
(12, 'TAN/TOKEN/8443', 0),
(13, 'TAN/TOKEN/9491', 0),
(14, 'TAN/TOKEN/0216', 0),
(15, 'TAN/TOKEN/7628', 0),
(16, 'TAN/TOKEN/4098', 1),
(17, 'TAN/TOKEN/5751', 1),
(18, 'TAN/TOKEN/0316', 0),
(19, 'TAN/TOKEN/3120', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `id` int(10) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `wallet_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `first_name`, `last_name`, `wallet_number`, `password`) VALUES
(1, 'harrison', 'Ebube', '08062585929', '1234'),
(2, 'journey', 'walker', '08074321345', '1234'),
(3, 'mmasinachi', 'joseph', '08061179843', '8823'),
(4, 'Valentine', 'Ifeanyi', '12345678912', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent_table`
--
ALTER TABLE `agent_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_table`
--
ALTER TABLE `master_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `redemption_table`
--
ALTER TABLE `redemption_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `token_table`
--
ALTER TABLE `token_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `wallet_number` (`wallet_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent_table`
--
ALTER TABLE `agent_table`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `master_table`
--
ALTER TABLE `master_table`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `redemption_table`
--
ALTER TABLE `redemption_table`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `token_table`
--
ALTER TABLE `token_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

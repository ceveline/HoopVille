-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 07, 2024 at 02:48 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hoopville`
--

-- --------------------------------------------------------

--
-- Table structure for table `Administrator`
--

CREATE TABLE `Administrator` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password_hash` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Booking`
--

CREATE TABLE `Booking` (
  `booking_id` int(11) NOT NULL,
  `booking_type` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `status` int(5) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Booking`
--

INSERT INTO `Booking` (`booking_id`, `booking_type`, `user_id`, `date`, `start_time`, `end_time`, `status`, `timestamp`) VALUES
(1, 'Court', 7, '2024-05-04', '12:42:54', '16:42:54', 1, '2024-05-07 00:47:08'),
(2, 'Fitness', 8, '2024-05-09', '09:47:11', '12:47:11', 1, '2024-05-07 00:47:47');

-- --------------------------------------------------------

--
-- Table structure for table `Booking_Type`
--

CREATE TABLE `Booking_Type` (
  `booking_type` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Booking_Type`
--

INSERT INTO `Booking_Type` (`booking_type`, `price`, `description`) VALUES
('Court', 45.00, '\"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\"\r\n\"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...\"'),
('Fitness', 30.00, '\"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\"\r\n\"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...\"');

-- --------------------------------------------------------

--
-- Table structure for table `Camp`
--

CREATE TABLE `Camp` (
  `camp_id` int(11) NOT NULL,
  `camp_type` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `guest_id` int(11) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Camp`
--

INSERT INTO `Camp` (`camp_id`, `camp_type`, `user_id`, `guest_id`, `timestamp`) VALUES
(1, 'Fall', 4, NULL, '2024-05-07 00:38:46'),
(2, 'Summer', 5, NULL, '2024-05-07 00:38:46'),
(3, 'Winter', 6, NULL, '2024-05-07 00:40:08');

-- --------------------------------------------------------

--
-- Table structure for table `Camp_Type`
--

CREATE TABLE `Camp_Type` (
  `camp_type` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `registration_start` date NOT NULL,
  `registration_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Camp_Type`
--

INSERT INTO `Camp_Type` (`camp_type`, `price`, `description`, `start_date`, `end_date`, `registration_start`, `registration_end`) VALUES
('Fall', 69.99, '\"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\"\r\n\"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...\"', '2024-06-01', '2025-06-18', '2024-07-03', '2024-08-20'),
('Summer', 49.99, '\"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\"\r\n\"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...\"', '2024-05-01', '2024-07-05', '2024-04-04', '2024-07-01'),
('Winter', 49.99, '\"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\"\r\n\"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...\"', '2024-05-01', '2024-08-01', '2024-05-01', '2024-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `Guest`
--

CREATE TABLE `Guest` (
  `guest_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Membership`
--

CREATE TABLE `Membership` (
  `membership_id` int(11) NOT NULL,
  `membership_type` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Membership`
--

INSERT INTO `Membership` (`membership_id`, `membership_type`, `user_id`, `start_date`, `end_date`, `timestamp`) VALUES
(1, 'Basic', 1, '2024-05-01', '2025-05-01', '2024-05-07 00:32:16'),
(2, 'VIP', 2, '2024-05-29', '2025-05-29', '2024-05-07 00:33:22'),
(3, 'PREMIUM', 3, '2024-06-01', '2025-06-01', '2024-05-07 00:33:22');

-- --------------------------------------------------------

--
-- Table structure for table `Membership_Type`
--

CREATE TABLE `Membership_Type` (
  `membership_type` varchar(50) NOT NULL,
  `monthly_price` decimal(10,2) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Membership_Type`
--

INSERT INTO `Membership_Type` (`membership_type`, `monthly_price`, `description`) VALUES
('Basic', 14.99, '\"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\"\r\n\"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...\"'),
('PREMIUM', 99.99, '\"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\"\r\n\"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...\"'),
('VIP', 24.99, '\"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\"\r\n\"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...\"');

-- --------------------------------------------------------

--
-- Table structure for table `Profile`
--

CREATE TABLE `Profile` (
  `profile_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone` varchar(60) NOT NULL,
  `date_of_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Profile`
--

INSERT INTO `Profile` (`profile_id`, `user_id`, `first_name`, `last_name`, `phone`, `date_of_birth`) VALUES
(1, 1, 'John', 'Clayton', '5146543345', '2024-04-01'),
(2, 2, 'Test', 'Second', '5143233454', '2024-04-25'),
(3, 3, 'dgbd', 'dbdb', '5455455454', '2024-04-25'),
(4, 4, 'Michel', 'Paquette', '5311233234', '2024-05-21'),
(5, 5, 'Jack', 'Daniel', '4334554321', '2024-05-30'),
(6, 6, 'Kevin', 'Mark', '5445455656', '2024-06-06'),
(7, 7, 'Kebvin', 'Von', '4334432321', '2024-05-01'),
(8, 8, 'sfgs', 'svsv', '43433443434', '2024-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `Publication`
--

CREATE TABLE `Publication` (
  `publication_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `text` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Review`
--

CREATE TABLE `Review` (
  `review_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` int(5) NOT NULL,
  `review_text` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password_hash` varchar(60) NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `reset_token_hash` varchar(64) DEFAULT NULL,
  `reset_token_expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`user_id`, `email`, `password_hash`, `active`, `reset_token_hash`, `reset_token_expires_at`) VALUES
(1, 'hussain@gmail.com', '123', 0, '818dc2d58d4cb8ed221147009cfd49c9b79732c2b258364476004cceaa6d5ba5', '2024-05-02 05:27:37'),
(2, 'test@gmail.com', '123', 0, '154f06f8e89f0a87f7ec22a7508ac836d01bb79fb09690d799906a0e467cd655', '2024-05-05 09:01:41'),
(3, 'test1@gmail.com', '345', 1, NULL, NULL),
(4, 'michelle.paquette@gmail.com', 'svsvsv', 1, NULL, NULL),
(5, 'jack@gmail.com', 'swvdsdsbdbd', 1, NULL, NULL),
(6, 'kevin@gmail.com', 'dvdvdsvs', 1, NULL, NULL),
(7, 'kevin1@gmail.com', 'sgvfsgs', 1, NULL, NULL),
(8, 'michelle.paquette@gmail.com', 'svsvsv', 1, NULL, NULL),
(9, 'hussainamin285@gmail.com', '123', 1, 'b3f6322a83754a74b636fbd32a038445578630186e6039b0751d1731ec0b5a9c', '2024-05-07 02:53:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Administrator`
--
ALTER TABLE `Administrator`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `Booking`
--
ALTER TABLE `Booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `booking_to_booking_type` (`booking_type`),
  ADD KEY `booking_to_user` (`user_id`);

--
-- Indexes for table `Booking_Type`
--
ALTER TABLE `Booking_Type`
  ADD PRIMARY KEY (`booking_type`);

--
-- Indexes for table `Camp`
--
ALTER TABLE `Camp`
  ADD PRIMARY KEY (`camp_id`),
  ADD KEY `camp_to_camp_type` (`camp_type`),
  ADD KEY `camp_to_guest` (`guest_id`);

--
-- Indexes for table `Camp_Type`
--
ALTER TABLE `Camp_Type`
  ADD PRIMARY KEY (`camp_type`);

--
-- Indexes for table `Guest`
--
ALTER TABLE `Guest`
  ADD PRIMARY KEY (`guest_id`);

--
-- Indexes for table `Membership`
--
ALTER TABLE `Membership`
  ADD PRIMARY KEY (`membership_id`),
  ADD KEY `membership_to_membership_type` (`membership_type`),
  ADD KEY `membership_to_user` (`user_id`);

--
-- Indexes for table `Membership_Type`
--
ALTER TABLE `Membership_Type`
  ADD PRIMARY KEY (`membership_type`);

--
-- Indexes for table `Profile`
--
ALTER TABLE `Profile`
  ADD PRIMARY KEY (`profile_id`),
  ADD KEY `profile_to_user` (`user_id`);

--
-- Indexes for table `Publication`
--
ALTER TABLE `Publication`
  ADD PRIMARY KEY (`publication_id`),
  ADD KEY `publication_to_administrator` (`admin_id`);

--
-- Indexes for table `Review`
--
ALTER TABLE `Review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `review_to_user` (`user_id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `reset_token_hash` (`reset_token_hash`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Administrator`
--
ALTER TABLE `Administrator`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Booking`
--
ALTER TABLE `Booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Camp`
--
ALTER TABLE `Camp`
  MODIFY `camp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Guest`
--
ALTER TABLE `Guest`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Membership`
--
ALTER TABLE `Membership`
  MODIFY `membership_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Profile`
--
ALTER TABLE `Profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `Publication`
--
ALTER TABLE `Publication`
  MODIFY `publication_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Review`
--
ALTER TABLE `Review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Booking`
--
ALTER TABLE `Booking`
  ADD CONSTRAINT `booking_to_booking_type` FOREIGN KEY (`booking_type`) REFERENCES `Booking_Type` (`booking_type`),
  ADD CONSTRAINT `booking_to_user` FOREIGN KEY (`user_id`) REFERENCES `User` (`user_id`);

--
-- Constraints for table `Camp`
--
ALTER TABLE `Camp`
  ADD CONSTRAINT `camp_to_camp_type` FOREIGN KEY (`camp_type`) REFERENCES `Camp_Type` (`camp_type`),
  ADD CONSTRAINT `camp_to_guest` FOREIGN KEY (`guest_id`) REFERENCES `Guest` (`guest_id`);

--
-- Constraints for table `Membership`
--
ALTER TABLE `Membership`
  ADD CONSTRAINT `membership_to_membership_type` FOREIGN KEY (`membership_type`) REFERENCES `Membership_Type` (`membership_type`),
  ADD CONSTRAINT `membership_to_user` FOREIGN KEY (`user_id`) REFERENCES `User` (`user_id`);

--
-- Constraints for table `Profile`
--
ALTER TABLE `Profile`
  ADD CONSTRAINT `profile_to_user` FOREIGN KEY (`user_id`) REFERENCES `User` (`user_id`);

--
-- Constraints for table `Publication`
--
ALTER TABLE `Publication`
  ADD CONSTRAINT `publication_to_administrator` FOREIGN KEY (`admin_id`) REFERENCES `Administrator` (`admin_id`);

--
-- Constraints for table `Review`
--
ALTER TABLE `Review`
  ADD CONSTRAINT `review_to_user` FOREIGN KEY (`user_id`) REFERENCES `User` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

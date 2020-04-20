-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2020 at 05:06 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `name`, `surname`, `job_title`, `email`, `phone_number`, `image_path`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'John', 'Smith', 'Main Agent', 'johnsmith@gmail.com', '0800-666-6666', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Fred', 'Williams', 'Company Agent', 'fredwilliams@gmail.com', '0800-666-6666', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `property_type_id` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `bedrooms` int(11) NOT NULL,
  `bathrooms` int(11) NOT NULL,
  `rooms` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL,
  `agent_id` int(11) NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `name`, `price`, `address`, `description`, `property_type_id`, `size`, `bedrooms`, `bathrooms`, `rooms`, `image_path`, `lat`, `lng`, `agent_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(9, 'Cottage Woods Housed For Sale', 326000, 'Newport st. mebane, nc', 'I truly believe Augustine’s words are true and if you look at history you know it is true. There are many people in.', 4, 1550, 2, 2, 8, '1', 74, 40, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Executive 4 Bed WDM Ranch', 356000, 'Virginia drive temple hills', 'We also know those epic stories, those modern-day legends surrounding the early failures of such supremely successful folks.', 1, 1250, 4, 3, 10, '2', 106, 56, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Stunning 2 Bedroom Home In Village', 645000, 'Virginia drive temple hills', 'The home features private entry copper-clad door leading to salon with marble floors. Stunning great room has soaring 45 foot ceilings with glass windows, polished concrete floors, exposed brick & sculptural steel beams.', 3, 1080, 2, 2, 7, '3', 4, 52, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'The Citizen Apartment 5th Floor', 670000, 'Border st. nicholasville, ky', 'Success isn’t really that difficult. There is a significant portion of the population here in North America, that actually.', 2, 1850, 1, 1, 5, '4', 104, 35, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Cottage Woods Housed For Sale', 326000, 'Newport st. mebane, nc', 'I truly believe Augustine’s words are true and if you look at history you know it is true. There are many people in.', 3, 1550, 2, 2, 8, '5', 74, 40, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Executive 4 Bed WDM Ranch', 356000, 'Virginia drive temple hills', 'We also know those epic stories, those modern-day legends surrounding the early failures of such supremely successful folks.', 2, 1250, 4, 3, 10, '6', 106, 56, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Stunning 2 Bedroom Home In Village', 645000, 'Virginia drive temple hills', 'The home features private entry copper-clad door leading to salon with marble floors. Stunning great room has soaring 45 foot ceilings with glass windows, polished concrete floors, exposed brick & sculptural steel beams.', 1, 1080, 2, 2, 7, '7', 4, 52, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'The Citizen Apartment 5th Floor', 670000, 'Border st. nicholasville, ky', 'Success isn’t really that difficult. There is a significant portion of the population here in North America, that actually.', 4, 1850, 1, 1, 5, '8', 104, 35, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `property_types`
--

CREATE TABLE `property_types` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property_types`
--

INSERT INTO `property_types` (`id`, `type`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'residential', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'commercial', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'industrial', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'apartment', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agent_id` (`agent_id`),
  ADD KEY `properties_ibfk_2` (`property_type_id`);

--
-- Indexes for table `property_types`
--
ALTER TABLE `property_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `property_types`
--
ALTER TABLE `property_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `properties_ibfk_1` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `properties_ibfk_2` FOREIGN KEY (`property_type_id`) REFERENCES `property_types` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

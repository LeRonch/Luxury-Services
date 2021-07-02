-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jun 23, 2021 at 12:15 PM
-- Server version: 10.5.8-MariaDB-1:10.5.8+maria~focal
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `luxury_services`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `id` int(11) NOT NULL,
  `experience_id_id` int(11) DEFAULT NULL,
  `info_admin_candidat_id_id` int(11) DEFAULT NULL,
  `job_category_id_id` int(11) DEFAULT NULL,
  `user_id_id` int(11) NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profil_picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `place_or_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `experience_id_id`, `info_admin_candidat_id_id`, `job_category_id_id`, `user_id_id`, `gender`, `first_name`, `last_name`, `adress`, `country`, `nationality`, `passport`, `cv`, `profil_picture`, `current_location`, `date_of_birth`, `place_or_birth`, `description`) VALUES
(34, NULL, 15, NULL, 74, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, NULL, 21, NULL, 80, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, NULL, 27, NULL, 86, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, NULL, 28, NULL, 87, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `candidature`
--

CREATE TABLE `candidature` (
  `id` int(11) NOT NULL,
  `id_offer_id` int(11) NOT NULL,
  `id_candidat_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `info_admin_client_id_id` int(11) NOT NULL,
  `society_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `info_admin_client_id_id`, `society_name`, `activity`) VALUES
(4, 9, 'SpaceX', 'lancer des super fusée');

-- --------------------------------------------------------

--
-- Table structure for table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210601081901', '2021-06-01 10:19:21', 8808),
('DoctrineMigrations\\Version20210601122239', '2021-06-01 14:22:53', 650),
('DoctrineMigrations\\Version20210602130549', '2021-06-02 15:06:01', 438),
('DoctrineMigrations\\Version20210603082124', '2021-06-03 10:21:34', 397),
('DoctrineMigrations\\Version20210603092014', '2021-06-03 11:20:28', 70),
('DoctrineMigrations\\Version20210603094713', '2021-06-03 11:47:21', 69),
('DoctrineMigrations\\Version20210608082313', '2021-06-08 10:26:35', 1656),
('DoctrineMigrations\\Version20210608092743', '2021-06-08 11:27:50', 279),
('DoctrineMigrations\\Version20210611073853', '2021-06-11 09:41:02', 386),
('DoctrineMigrations\\Version20210611082148', '2021-06-11 10:21:55', 436),
('DoctrineMigrations\\Version20210611100304', '2021-06-11 12:03:06', 1384),
('DoctrineMigrations\\Version20210611114615', '2021-06-11 13:46:19', 1762),
('DoctrineMigrations\\Version20210611120943', '2021-06-11 14:09:46', 1164),
('DoctrineMigrations\\Version20210611121537', '2021-06-11 14:15:42', 615),
('DoctrineMigrations\\Version20210611122928', '2021-06-11 14:29:34', 796),
('DoctrineMigrations\\Version20210611123630', '2021-06-11 14:36:34', 752);

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `experience`) VALUES
(1, '0 - 6 month'),
(2, '6 month - 1 year'),
(3, '1 - 2 years'),
(4, '2+ years'),
(5, '5+ years'),
(6, '10+ years');

-- --------------------------------------------------------

--
-- Table structure for table `info_admin_candidat`
--

CREATE TABLE `info_admin_candidat` (
  `id` int(11) NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_created` datetime NOT NULL,
  `date_deleted` datetime DEFAULT NULL,
  `files` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `info_admin_candidat`
--

INSERT INTO `info_admin_candidat` (`id`, `notes`, `date_created`, `date_deleted`, `files`) VALUES
(15, NULL, '2021-06-11 11:43:55', NULL, NULL),
(16, NULL, '2021-06-11 11:56:28', NULL, NULL),
(17, NULL, '2021-06-11 11:56:47', '2021-06-11 12:04:04', NULL),
(18, NULL, '2021-06-11 11:57:20', NULL, NULL),
(19, NULL, '2021-06-11 12:01:53', '2021-06-11 12:02:26', NULL),
(20, NULL, '2021-06-11 12:11:51', '2021-06-11 12:13:21', NULL),
(21, NULL, '2021-06-11 12:20:13', NULL, NULL),
(22, NULL, '2021-06-11 12:20:33', '2021-06-11 12:38:03', NULL),
(23, NULL, '2021-06-11 12:21:19', '2021-06-11 12:27:29', NULL),
(24, NULL, '2021-06-11 12:29:54', '2021-06-11 12:31:30', NULL),
(25, NULL, '2021-06-11 12:33:04', '2021-06-11 12:35:23', NULL),
(26, NULL, '2021-06-11 12:41:21', NULL, NULL),
(27, NULL, '2021-06-11 14:44:34', NULL, NULL),
(28, NULL, '2021-06-21 09:09:54', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `info_admin_client`
--

CREATE TABLE `info_admin_client` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poste` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `info_admin_client`
--

INSERT INTO `info_admin_client` (`id`, `name`, `poste`, `numero`, `email`, `notes`) VALUES
(5, 'Valentin', 'PDG', '064844759', 'valentin.fonda@edev.com', 'lorem'),
(6, 'Valentin', 'PDG', '064844759', 'valentin.fonda@edev.com', 'lorem'),
(9, 'Tom', 'Formateur Astronaute', '0797678923', 'Tom.astro@spacex.com', 'lorem');

-- --------------------------------------------------------

--
-- Table structure for table `job_category`
--

CREATE TABLE `job_category` (
  `id` int(11) NOT NULL,
  `job_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_category`
--

INSERT INTO `job_category` (`id`, `job_category`) VALUES
(12, 'Technology'),
(17, 'Retail Sales'),
(19, 'Marketing & PR'),
(21, 'Management & HR'),
(24, 'Fashion & Luxury'),
(27, 'Creative');

-- --------------------------------------------------------

--
-- Table structure for table `job_offer`
--

CREATE TABLE `job_offer` (
  `id` int(11) NOT NULL,
  `client_id_id` int(11) DEFAULT NULL,
  `job_type_id_id` int(11) NOT NULL,
  `job_category_id_id` int(11) DEFAULT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `closing_date` date DEFAULT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_de_creation` datetime NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_offer`
--

INSERT INTO `job_offer` (`id`, `client_id_id`, `job_type_id_id`, `job_category_id_id`, `reference`, `active`, `notes`, `location`, `closing_date`, `salary`, `date_de_creation`, `description`, `title`) VALUES
(46, 4, 8, 12, '11111', 1, '12901', 'Paris', '2020-04-04', '30 000', '2021-06-11 12:36:57', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque et perferendis recusandae repellat saepe ab autem. Asperiores veritatis mollitia cumque facere voluptate, porro quo. Adipisci itaque ab voluptatum quam consequuntur.', 'Dev juniors Symfony');

-- --------------------------------------------------------

--
-- Table structure for table `job_type`
--

CREATE TABLE `job_type` (
  `id` int(11) NOT NULL,
  `job_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_type`
--

INSERT INTO `job_type` (`id`, `job_type`) VALUES
(6, 'full time'),
(7, 'part time'),
(8, 'temporary'),
(9, 'Freelance'),
(10, 'Seasonal');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:json)',
  `is_verified` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `roles`, `is_verified`) VALUES
(74, 'romain.simplon@outlook.com', '$argon2id$v=19$m=65536,t=4,p=1$WJAyWtptR98ksN+TnjcsiQ$nRlDUQ9bTA1jIlXiUNBZLBwNOVwePyGIut/2Tnr5RSo', '[\"ROLE_ADMIN\"]', 0),
(80, 'sdfguio@fghjkl', '$argon2id$v=19$m=65536,t=4,p=1$953wCuKzjGVAjGvDW9CoyA$Isirdfdx3YpzJBYhfSmE0C1rEhP0f18ISv/R+955tUM', '[]', 0),
(86, 'xdrtyuio@frtyuiol.com', '$argon2id$v=19$m=65536,t=4,p=1$RGbfKssZLXb8wGta/xVlfQ$29aVhjag7ApiQ+Z57fAJERo/A433wmUwBSHCzXLBgKg', '[]', 0),
(87, 'ronan.perrin@hotmail.fr', '$argon2id$v=19$m=65536,t=4,p=1$A9EBRjTdmIopL0npW5zIAA$RGYXM6GSNHFWUi5INui5dzfnSCHO2N4k3f10MTwfE90', '[\"ROLE_ADMIN\"]', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_C8B28E449D86650F` (`user_id_id`),
  ADD UNIQUE KEY `UNIQ_C8B28E4450E81DB` (`job_category_id_id`),
  ADD UNIQUE KEY `UNIQ_C8B28E4435BCF31B` (`info_admin_candidat_id_id`),
  ADD KEY `IDX_C8B28E441C16E241` (`experience_id_id`);

--
-- Indexes for table `candidature`
--
ALTER TABLE `candidature`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_E33BD3B831D987B` (`id_offer_id`),
  ADD KEY `IDX_E33BD3B810C22675` (`id_candidat_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_C74404557E0F96E5` (`info_admin_client_id_id`);

--
-- Indexes for table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_admin_candidat`
--
ALTER TABLE `info_admin_candidat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_admin_client`
--
ALTER TABLE `info_admin_client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_category`
--
ALTER TABLE `job_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_offer`
--
ALTER TABLE `job_offer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_288A3A4EDC2902E0` (`client_id_id`),
  ADD KEY `IDX_288A3A4E50E81DB` (`job_category_id_id`),
  ADD KEY `IDX_288A3A4E1B3F89BD` (`job_type_id_id`);

--
-- Indexes for table `job_type`
--
ALTER TABLE `job_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `candidature`
--
ALTER TABLE `candidature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `info_admin_candidat`
--
ALTER TABLE `info_admin_candidat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `info_admin_client`
--
ALTER TABLE `info_admin_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `job_category`
--
ALTER TABLE `job_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `job_offer`
--
ALTER TABLE `job_offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `job_type`
--
ALTER TABLE `job_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidate`
--
ALTER TABLE `candidate`
  ADD CONSTRAINT `FK_C8B28E441C16E241` FOREIGN KEY (`experience_id_id`) REFERENCES `experience` (`id`),
  ADD CONSTRAINT `FK_C8B28E4435BCF31B` FOREIGN KEY (`info_admin_candidat_id_id`) REFERENCES `info_admin_candidat` (`id`),
  ADD CONSTRAINT `FK_C8B28E4450E81DB` FOREIGN KEY (`job_category_id_id`) REFERENCES `job_category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_C8B28E449D86650F` FOREIGN KEY (`user_id_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `candidature`
--
ALTER TABLE `candidature`
  ADD CONSTRAINT `FK_E33BD3B810C22675` FOREIGN KEY (`id_candidat_id`) REFERENCES `candidate` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_E33BD3B831D987B` FOREIGN KEY (`id_offer_id`) REFERENCES `job_offer` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `FK_C74404557E0F96E5` FOREIGN KEY (`info_admin_client_id_id`) REFERENCES `info_admin_client` (`id`);

--
-- Constraints for table `job_offer`
--
ALTER TABLE `job_offer`
  ADD CONSTRAINT `FK_288A3A4E1B3F89BD` FOREIGN KEY (`job_type_id_id`) REFERENCES `job_type` (`id`),
  ADD CONSTRAINT `FK_288A3A4E50E81DB` FOREIGN KEY (`job_category_id_id`) REFERENCES `job_category` (`id`),
  ADD CONSTRAINT `FK_288A3A4EDC2902E0` FOREIGN KEY (`client_id_id`) REFERENCES `client` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

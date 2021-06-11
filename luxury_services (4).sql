-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jun 11, 2021 at 08:25 AM
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
(25, 1, 4, 9, 63, '0', 'ihihi', 'ihihi', 'sdfghjk', 'France', 'ghtf', 'drtfgyhujikl', 'jkio', 'jkl', 'kpkpp', '1901-01-01', 'fyufy', 'gyguu'),
(29, 4, 8, 13, 67, '1', 'hhçph', 'hooh', 'jopj', 'jojp', 'joj', 'CV-1-1-60c202068b972.pdf', 'CV-1-60c20206887da.pdf', 'Romain-Chatelet-CV-60c202068a00f.pdf', 'jopjpo', '1901-01-01', 'ojo', 'fyguhjpkmyugjpmfyugijkpml'),
(30, 3, 9, 14, 68, '1', 'fdxyubp', 'wdtryhijopk', 'fcyuijkm', 'sdfghjk', 'sdfghjkl', 'Romain-Chatelet-CV-60c2049e99243.pdf', 'Romain-Chatelet-CV-60c2049e95e47.pdf', 'Romain-Chatelet-CV-60c2049e975ed.pdf', 'xtguihij', '1901-01-01', 'sdfghujk', 'ghjklftgyuhijklfghjnksdrftgyuhijestfgyuhijok'),
(31, 3, 12, 8, 71, 'Male', 'hjk', 'bn,;', 'jklmùlkj', 'hjklmpoi', 'iophiuhioip', NULL, NULL, NULL, 'ijklm', '1901-01-01', 'uioipoihu', 'uioipo');

-- --------------------------------------------------------

--
-- Table structure for table `candidature`
--

CREATE TABLE `candidature` (
  `id` int(11) NOT NULL,
  `id_offer_id` int(11) NOT NULL,
  `id_candidat_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidature`
--

INSERT INTO `candidature` (`id`, `id_offer_id`, `id_candidat_id`) VALUES
(1, 31, 30),
(4, 31, 29),
(5, 32, 29);

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
(2, 3, 'oui', 'o'),
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
('DoctrineMigrations\\Version20210611082148', '2021-06-11 10:21:55', 436);

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
(4, 'ok', '2021-06-08 13:17:00', NULL, NULL),
(6, NULL, '2021-06-08 13:38:17', NULL, NULL),
(7, NULL, '2021-06-09 07:25:43', '2021-06-09 07:58:35', NULL),
(8, NULL, '2021-06-10 12:11:56', NULL, NULL),
(9, NULL, '2021-06-10 12:23:57', NULL, NULL),
(12, NULL, '2021-06-11 08:22:20', NULL, NULL);

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
(3, 'ufyu', 'o', 'o', 'oo', 'o'),
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
(8, 'Fashion & luxury'),
(9, 'commercial'),
(10, 'Retail Sales'),
(11, 'Creative'),
(12, 'Technology'),
(13, 'Marketing & PR'),
(14, 'Management & HR');

-- --------------------------------------------------------

--
-- Table structure for table `job_offer`
--

CREATE TABLE `job_offer` (
  `id` int(11) NOT NULL,
  `client_id_id` int(11) NOT NULL,
  `job_type_id_id` int(11) NOT NULL,
  `job_category_id_id` int(11) NOT NULL,
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
(31, 2, 10, 9, '11111', 1, 'test', 'Renaison', '2019-02-04', '24 000', '2021-06-09 12:29:44', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque et perferendis recusandae repellat saepe ab autem. Asperiores veritatis mollitia cumque facere voluptate, porro quo. Adipisci itaque ab voluptatum quam consequuntur.', 'Dev juniors php'),
(32, 2, 8, 12, '11111', 1, '12901', 'Paris', '2021-02-04', '30 000', '2021-06-09 12:30:38', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque et perferendis recusandae repellat saepe ab autem. Asperiores veritatis mollitia cumque facere voluptate, porro quo. Adipisci itaque ab voluptatum quam consequuntur.', 'Dev juniors Symfony'),
(34, 2, 8, 9, '11111', 1, '12901', 'Paris', '2022-04-05', '30 000', '2021-06-09 12:32:54', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque et perferendis recusandae repellat saepe ab autem. Asperiores veritatis mollitia cumque facere voluptate, porro quo. Adipisci itaque ab voluptatum quam consequuntur.', 'Dev juniors Symfony'),
(35, 2, 9, 10, '1112', 1, '12901', 'Paris', '2020-04-06', '30 000', '2021-06-09 12:36:14', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque et perferendis recusandae repellat saepe ab autem. Asperiores veritatis mollitia cumque facere voluptate, porro quo. Adipisci itaque ab voluptatum quam consequuntur.', 'Dev juniors js'),
(36, 2, 8, 12, '11111', 1, '12901', 'Paris', '2019-04-04', '30 000', '2021-06-11 07:15:02', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque et perferendis recusandae repellat saepe ab autem. Asperiores veritatis mollitia cumque facere voluptate, porro quo. Adipisci itaque ab voluptatum quam consequuntur.', 'Dev juniors Symfony');

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
(63, 'romain.simplon@outlook.com', '$argon2id$v=19$m=65536,t=4,p=1$uDMyXQP893oAjWGjX6yDFQ$HUTfKniaaVlyePD5CcYc3AHTx0OfkLuTPmRQeGjZhTw', '[\"ROLE_ADMIN\"]', 0),
(67, 'ildfhir@foeefj.com', '$argon2id$v=19$m=65536,t=4,p=1$KSkdkZ1hm+v5iimTmA/h9A$6keIOKz5CCjdbP5KvtzTO4aIcAYvGcNceWVRJSTpJc0', '[]', 0),
(68, 'nul@nul.com', '$argon2id$v=19$m=65536,t=4,p=1$Gmdr+GWVHaEr9YirsDiSrw$TjwAE88R+o09F+CwuEfUGVse/mQv1Ds/bvTbKfzGdyc', '[]', 0),
(69, 'nrtht@gthnthhn.com', '$argon2id$v=19$m=65536,t=4,p=1$4znlFo8wx0CgB04ptzkYEQ$SSWSfTVuiq75tzzFy2FtMhRS9PGC3PYHcgnOt1kPqmo', '[]', 0),
(70, 'jhgfds@jhgfds.com', '$argon2id$v=19$m=65536,t=4,p=1$bkRvxYIlI2B82MAQlnXcMw$90yggeNMWKITXVRJmd5L13uYvV8AqR32u+/bo2KOo+0', '[]', 0),
(71, 'cdnfjv@ffjjf', '$argon2id$v=19$m=65536,t=4,p=1$HTXXany8wVxtaYCF1g8kgQ$TJG0VXm8K5HoT8Hf2PDWnt0ZiJzhfdb7oCBEES99Bs8', '[]', 0);

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `candidature`
--
ALTER TABLE `candidature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `info_admin_client`
--
ALTER TABLE `info_admin_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `job_category`
--
ALTER TABLE `job_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `job_offer`
--
ALTER TABLE `job_offer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `job_type`
--
ALTER TABLE `job_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidate`
--
ALTER TABLE `candidate`
  ADD CONSTRAINT `FK_C8B28E441C16E241` FOREIGN KEY (`experience_id_id`) REFERENCES `experience` (`id`),
  ADD CONSTRAINT `FK_C8B28E4435BCF31B` FOREIGN KEY (`info_admin_candidat_id_id`) REFERENCES `info_admin_candidat` (`id`),
  ADD CONSTRAINT `FK_C8B28E4450E81DB` FOREIGN KEY (`job_category_id_id`) REFERENCES `job_category` (`id`),
  ADD CONSTRAINT `FK_C8B28E449D86650F` FOREIGN KEY (`user_id_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `candidature`
--
ALTER TABLE `candidature`
  ADD CONSTRAINT `FK_E33BD3B810C22675` FOREIGN KEY (`id_candidat_id`) REFERENCES `candidate` (`id`),
  ADD CONSTRAINT `FK_E33BD3B831D987B` FOREIGN KEY (`id_offer_id`) REFERENCES `job_offer` (`id`);

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
  ADD CONSTRAINT `FK_288A3A4EDC2902E0` FOREIGN KEY (`client_id_id`) REFERENCES `client` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

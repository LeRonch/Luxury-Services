-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jun 11, 2021 at 07:43 AM
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
  `experience_id_id` int(11) NOT NULL,
  `info_admin_candidat_id_id` int(11) NOT NULL,
  `job_category_id_id` int(11) NOT NULL,
  `user_id_id` int(11) NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passport` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profil_picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `place_or_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `experience_id_id`, `info_admin_candidat_id_id`, `job_category_id_id`, `user_id_id`, `gender`, `first_name`, `last_name`, `adress`, `country`, `nationality`, `passport`, `cv`, `profil_picture`, `current_location`, `date_of_birth`, `place_or_birth`, `description`) VALUES
(25, 1, 4, 9, 63, '0', 'ihihi', 'ihihi', 'sdfghjk', 'France', 'ghtf', 'drtfgyhujikl', 'jkio', 'jkl', 'kpkpp', '1901-01-01', 'fyufy', 'gyguu'),
(29, 4, 8, 13, 67, '1', 'hhçph', 'hooh', 'jopj', 'jojp', 'joj', 'CV-1-1-60c202068b972.pdf', 'CV-1-60c20206887da.pdf', 'Romain-Chatelet-CV-60c202068a00f.pdf', 'jopjpo', '1901-01-01', 'ojo', 'fyguhjpkmyugjpmfyugijkpml'),
(30, 3, 9, 14, 68, '1', 'fdxyubp', 'wdtryhijopk', 'fcyuijkm', 'sdfghjk', 'sdfghjkl', 'Romain-Chatelet-CV-60c2049e99243.pdf', 'Romain-Chatelet-CV-60c2049e95e47.pdf', 'Romain-Chatelet-CV-60c2049e975ed.pdf', 'xtguihij', '1901-01-01', 'sdfghujk', 'ghjklftgyuhijklfghjnksdrftgyuhijestfgyuhijok');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2023 at 08:15 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jadwal`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `ID` bigint(20) NOT NULL,
  `Mata_Kuliah` varchar(50) NOT NULL,
  `Hari` date NOT NULL,
  `Jam` text NOT NULL,
  `Ruang` varchar(50) NOT NULL,
  `Day` varchar(10) NOT NULL,
  `is_praktikum` tinyint(1) NOT NULL DEFAULT 0,
  `is_done` tinyint(1) NOT NULL DEFAULT 0,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`ID`, `Mata_Kuliah`, `Hari`, `Jam`, `Ruang`, `Day`, `is_praktikum`, `is_done`, `updated_at`) VALUES
(1, 'PBD', '2023-12-06', '10.00 - 12.00', 'G 1.3', 'Rabu', 0, 1, NULL),
(2, 'ASD', '2023-12-07', '10.00 - 12.00\r\n', 'F 2.8', 'Kamis', 0, 1, '2023-12-12 06:41:06'),
(3, 'Jaringan Komputer', '2023-12-08', '09.30 - 11.30\n', 'G 1.6', 'Jumat', 0, 1, '2023-12-12 06:41:10'),
(4, 'Statistika', '2023-12-13', '10.00 - 12.00\r\n', 'F 3.7', 'Rabu', 0, 0, NULL),
(5, 'ADSI', '2023-12-14', '13.00 - 15.00\r\n', 'F 4.9', 'Kamis', 0, 0, NULL),
(6, 'PAW', '2023-12-14', '10.00 - 12.00\r\n', 'F 3.16', 'Kamis', 0, 0, NULL),
(7, 'Etika Profesi', '2023-12-15', '09.30 - 11.30\r\n', 'F 4.12', 'Jumat', 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `ID` bigint(11) NOT NULL,
  `Tingkat_Kesiapan` varchar(40) NOT NULL,
  `Link_Materi` varchar(100) NOT NULL,
  `Note` text NOT NULL,
  `ID_Materi` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`ID`, `Tingkat_Kesiapan`, `Link_Materi`, `Note`, `ID_Materi`) VALUES
(1, 'Belum Siap', 'https://brone.ub.ac.id/course/view.php?id=2263', 'Review Materi Lagi', 1),
(2, 'Sangat Sangat Tidak Siap', 'https://brone.ub.ac.id/course/view.php?id=2252', 'Harus belajar semua dari awal', 2),
(3, 'Belum Siap', 'https://brone.ub.ac.id/course/view.php?id=2254', 'Fokus ke Network Layer', 3),
(4, 'Sangat Tidak Siap', 'https://brone.ub.ac.id/course/view.php?id=2255', 'Harus belajar dari awal', 4),
(5, 'Belum Siap', 'https://brone.ub.ac.id/course/view.php?id=2253', 'Banyak pelajari diagram', 5),
(6, 'Cukup Siap', 'https://brone.ub.ac.id/course/view.php?id=2251', 'Review Materi Lagi', 6),
(7, 'Belum Siap', 'Di grup whatsapp', 'Download semua materi, masukin di Google Drive', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`ID_Materi`),
  ADD KEY `ID_Matkul` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `ID_Materi` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `materi_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `jadwal` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

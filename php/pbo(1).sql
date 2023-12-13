-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 08:17 AM
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
-- Database: `pbo`
--

-- --------------------------------------------------------

--
-- Table structure for table `kejadian`
--

CREATE TABLE `kejadian` (
  `perihal` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `harapan` varchar(255) NOT NULL,
  `file_pendukung` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kejadian`
--

INSERT INTO `kejadian` (`perihal`, `lokasi`, `tanggal`, `harapan`, `file_pendukung`) VALUES
('222222', 'jeno', '22 januari', 'harap', 'Screenshot (240).png'),
('222222', 'jeno', '22 januari', 'harap', 'Screenshot (240).png'),
('222222', 'jeno', '22 januari', 'harap', 'Screenshot (240).png'),
('222222', 'jeno', '22 januari', 'harap', 'Screenshot (240).png'),
('222222', 'jeno', '22 januari', 'harap', 'Screenshot (240).png'),
('halo', 'rumah', '22 feb 2023', 'sehatt', 'Screenshot (279).png');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telpon` varchar(255) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `email`, `telpon`, `pesan`) VALUES
(0, 'Tien', 'leejeno@gmail.com', '082378990872', 'Halo');

-- --------------------------------------------------------

--
-- Table structure for table `masuk`
--

CREATE TABLE `masuk` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengadu`
--

CREATE TABLE `pengadu` (
  `nama` varchar(200) NOT NULL,
  `jenis_kelamin` varchar(200) NOT NULL,
  `tipe_identitas` varchar(200) NOT NULL,
  `nomor_identitas` int(200) NOT NULL,
  `file_identitas` varchar(200) NOT NULL,
  `domisili` varchar(200) NOT NULL,
  `nomor_telpon` int(200) NOT NULL,
  `nomor_fax` int(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengadu`
--

INSERT INTO `pengadu` (`nama`, `jenis_kelamin`, `tipe_identitas`, `nomor_identitas`, `file_identitas`, `domisili`, `nomor_telpon`, `nomor_fax`, `email`) VALUES
('jjjj', 'L', 'KTP', 0, 'Screenshot (243).png', '', 22222222, 222222, 'jungkook@gmail.com'),
('jjjj', 'L', 'KTP', 0, 'Screenshot (243).png', '', 22222222, 222222, 'jungkook@gmail.com'),
('jjjj', 'L', 'KTP', 9909189, 'Screenshot (243).png', '', 22222222, 222222, 'jungkook@gmail.com'),
('jjjj', 'L', 'KTP', 9909189, 'Screenshot (243).png', 'ayam', 22222222, 222222, 'jungkook@gmail.com'),
('jjjj', 'L', 'KTP', 9909189, 'Screenshot (243).png', 'ayam', 22222222, 222222, 'jungkook@gmail.com'),
('jaemin', 'L', 'KTP', 73827, 'Screenshot (268).png', 'tanukila', 73737373, 6372627, 'taehyung@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masuk`
--
ALTER TABLE `masuk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `masuk`
--
ALTER TABLE `masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

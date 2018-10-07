-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 03:58 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d_ta5`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_ta5`
--

CREATE TABLE `t_ta5` (
  `NIM` int(10) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `E-mail` varchar(50) NOT NULL,
  `Tanggal` date NOT NULL,
  `Jenis_Kelamin` varchar(255) NOT NULL,
  `Prodi` varchar(255) NOT NULL,
  `Fakultas` varchar(255) NOT NULL,
  `Komentar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_ta5`
--

INSERT INTO `t_ta5` (`NIM`, `Nama`, `E-mail`, `Tanggal`, `Jenis_Kelamin`, `Prodi`, `Fakultas`, `Komentar`) VALUES
(2147483647, 'Nur Latifiyah Aprili', 'fiyaaps@gmail.com', '1998-04-29', 'Perempuan', 'D3MI', 'FIT', 'GAK TAU AH PUSING'),
(2147483647, 'Nur Latifiyah Aprili', 'fiyaaps@gmail.com', '1998-04-29', 'Perempuan', 'D3MI', 'FIT', 'GAK TAU AH PUSING'),
(2147483647, 'Nur Latifiyah Aprili', 'fiyaaps@gmail.com', '1998-04-29', 'Perempuan', 'D3MI', 'FIT', 'GAK TAU AH PUSING'),
(2147483647, 'Nur Latifiyah Aprili', 'fiyaaps@gmail.com', '1998-04-29', 'Perempuan', 'D3MI', 'FIT', 'LIEUR GUSTI'),
(2147483647, 'Nur Latifiyah Aprili', 'fiyaaps@gmail.com', '1998-04-29', 'Perempuan', 'D3MI', 'FIT', 'LIEUR GUSTI'),
(2147483647, 'Nur Latifiyah Aprili', 'fiyaaps@gmail.com', '1998-04-29', 'Perempuan', 'D3MI', 'FIT', 'Naha TAna meuni hese pisan:('),
(2147483647, 'Nur Latifiyah Aprili', 'fiyaaps@gmail.com', '1998-04-29', 'Perempuan', 'D3MI', 'FIT', 'Bismillah Gusti pang lancarkeun langkah Simkuring');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

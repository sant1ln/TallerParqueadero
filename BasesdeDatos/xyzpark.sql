-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2020 at 01:45 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xyzpark`
--

-- --------------------------------------------------------

--
-- Table structure for table `ingresos`
--

CREATE TABLE `ingresos` (
  `NumRegistro` int(10) NOT NULL,
  `matricula` varchar(10) NOT NULL,
  `tipoV` varchar(4) NOT NULL,
  `FechaIngreso` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ingresos`
--

INSERT INTO `ingresos` (`NumRegistro`, `matricula`, `tipoV`, `FechaIngreso`) VALUES
(42, 'rrr345', 'AUTO', '2020-06-08 11:27:40'),
(43, 'tyu65t', 'MOTO', '2020-06-08 11:27:56'),
(44, 'opp90o', 'MOTO', '2020-06-08 11:28:04'),
(45, 'asd234', 'AUTO', '2020-06-08 11:28:10'),
(47, 'ert456', 'AUTO', '2020-06-08 11:28:31'),
(49, 'tre83e', 'MOTO', '2020-06-08 11:32:24'),
(50, 'kkk555', 'AUTO', '2020-06-09 10:07:03'),
(51, '123uuu', 'AUTO', '2020-06-10 08:26:19'),
(52, 'dad01p', 'MOTO', '2020-06-10 08:26:33');

-- --------------------------------------------------------

--
-- Table structure for table `registros`
--

CREATE TABLE `registros` (
  `id` int(10) NOT NULL,
  `matricula` varchar(10) NOT NULL,
  `fechaingreso` datetime NOT NULL,
  `fechasalida` datetime NOT NULL,
  `tipo` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registros`
--

INSERT INTO `registros` (`id`, `matricula`, `fechaingreso`, `fechasalida`, `tipo`) VALUES
(1, 'itv293', '2020-06-08 06:36:42', '2020-06-08 09:35:49', 'AUTO'),
(2, 'ABC444', '2020-06-08 06:40:19', '2020-06-08 09:47:32', 'AUTO'),
(3, 'TUY898', '2020-06-08 06:40:50', '2020-06-08 09:48:25', 'AUTO'),
(4, 'kor33e', '2020-06-08 06:39:33', '2020-06-08 09:53:54', 'MOTO'),
(5, 'kor33e', '2020-06-08 06:39:33', '2020-06-08 09:54:21', 'MOTO'),
(6, 'SNK668', '2020-06-08 09:47:22', '2020-06-08 09:55:15', 'AUTO'),
(7, 'SNK668', '2020-06-08 09:47:22', '2020-06-08 09:55:17', 'AUTO'),
(8, '123uup', '2020-06-08 06:37:14', '2020-06-08 09:55:51', 'MOTO'),
(16, 'toy54d', '2020-06-08 09:56:25', '2020-06-08 10:03:34', 'MOTO'),
(18, 'toy54d', '2020-06-08 09:56:25', '2020-06-08 10:04:25', 'MOTO'),
(19, 'snk543', '2020-06-08 09:56:05', '2020-06-08 10:04:53', 'AUTO'),
(20, 'snk543', '2020-06-08 09:56:05', '2020-06-08 10:04:57', 'AUTO'),
(21, 'hyt65y', '2020-06-08 11:00:52', '2020-06-08 11:04:22', 'MOTO'),
(22, 'itv294', '2020-06-08 10:54:21', '2020-06-08 11:04:26', 'AUTO'),
(23, 'ufo89u', '2020-06-08 09:56:38', '2020-06-08 11:04:28', 'MOTO'),
(24, 'gtr456', '2020-06-08 11:00:46', '2020-06-08 11:04:29', 'AUTO'),
(25, 'stv589', '2020-06-08 11:02:47', '2020-06-08 11:04:31', 'AUTO'),
(26, 'oso45d', '2020-06-08 11:03:06', '2020-06-08 11:04:32', 'MOTO'),
(27, 'kfc901', '2020-06-08 11:03:25', '2020-06-08 11:04:34', 'AUTO'),
(28, 'ron54t', '2020-06-08 11:03:37', '2020-06-08 11:04:35', 'MOTO'),
(29, 'per001', '2020-06-08 11:03:48', '2020-06-08 11:04:37', 'MOTO'),
(30, 'tuy76e', '2020-06-08 09:56:13', '2020-06-08 11:04:39', 'MOTO'),
(31, 'ytr543', '2020-06-03 03:07:08', '2020-06-08 11:19:18', 'moto'),
(32, 'vbv456', '2020-06-08 11:19:31', '2020-06-08 11:25:58', 'AUTO'),
(33, 'vbv456', '2020-06-08 11:19:31', '2020-06-08 11:26:18', 'AUTO'),
(34, 'vbv456', '2020-06-08 11:19:31', '2020-06-08 11:26:50', 'AUTO'),
(35, 'ola614', '2020-06-08 11:28:17', '2020-06-08 11:30:42', 'AUTO'),
(36, 'rat45e', '2020-06-08 11:28:43', '2020-06-09 10:06:40', 'MOTO'),
(37, 'itv294', '2020-06-08 11:27:10', '2020-06-09 10:10:33', 'AUTO'),
(38, 'dad123', '2020-06-08 11:27:26', '2020-06-09 12:27:18', 'AUTO'),
(39, 'itv294', '2020-06-09 03:48:02', '2020-06-09 03:48:43', 'AUTO'),
(40, 'itv294', '2020-06-09 03:48:02', '2020-06-09 03:49:52', 'AUTO'),
(41, 'itv294', '2020-06-09 03:48:02', '2020-06-09 03:50:07', 'AUTO'),
(42, 'itv294', '2020-06-09 03:48:02', '2020-06-09 03:50:20', 'AUTO'),
(43, 'itv294', '2020-06-09 03:48:02', '2020-06-09 03:50:36', 'AUTO'),
(44, 'itv293', '2020-06-09 12:25:28', '2020-06-09 03:50:53', 'AUTO'),
(45, 'rty54r', '2020-06-08 11:27:32', '2020-06-10 08:35:26', 'MOTO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ingresos`
--
ALTER TABLE `ingresos`
  ADD PRIMARY KEY (`NumRegistro`);

--
-- Indexes for table `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ingresos`
--
ALTER TABLE `ingresos`
  MODIFY `NumRegistro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

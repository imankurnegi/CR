-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2025 at 10:46 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `home`
--
CREATE DATABASE IF NOT EXISTS `home` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `home`;

-- --------------------------------------------------------

--
-- Table structure for table `tblfrm`
--

CREATE TABLE `tblfrm` (
  `id` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `exampleselect` int(4) NOT NULL,
  `examplemulti` varchar(10) NOT NULL,
  `description` varchar(50) NOT NULL,
  `insert_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblfrm`
--

INSERT INTO `tblfrm` (`id`, `email`, `exampleselect`, `examplemulti`, `description`, `insert_date`) VALUES
(1, 'nnnnbbn@mm.com', 3, '1,2', 'hbbhbhj', '2025-02-04 14:44:52'),
(2, 'jjjjnj@m.com', 4, '2', 'hbjbjhjb', '2025-02-04 14:45:29'),
(3, 'jknjnj@mm.com', 3, '2', 'jbhbjbhj', '2025-02-04 14:47:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblfrm`
--
ALTER TABLE `tblfrm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblfrm`
--
ALTER TABLE `tblfrm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 01, 2022 at 02:43 PM
-- Server version: 10.3.35-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id19906862_contactusform`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus_table`
--

CREATE TABLE `contactus_table` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus_table`
--

INSERT INTO `contactus_table` (`firstname`, `lastname`, `email`, `message`) VALUES
('June', 'Miller', 'junemiller@gmail.com', 'Would signing up mean that we have to commit to every events?'),
('John', 'Roberts', 'johnroberts@gmail.com', 'Is there a fee to pay to become a member?'),
('', '', '', ''),
('Johnson', 'Roberts', 'johnson123@gmail.com', 'Can I have the particulars of the upcoming clean up events?'),
('', '', '', ''),
('', '', '', ''),
('Lyla', 'William', 'lyla23@gmail.com', 'How much is the member fee?');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

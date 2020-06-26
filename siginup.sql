-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2020 at 03:51 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siginup`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `mobile`, `password`, `cpassword`) VALUES
(16, 'binay kumar giri', 'binaygiri10@gmail.com', '6291922787', '$2y$10$MarfT2e9TEQl8/apO3FVduly1.w91T4OUXfvDa1taPeDT2JxOyNW.', '$2y$10$mreOgYU/0rWU0wDm6Q4.5e4ltpeARsFAolt7P18Wf3c6ck9Tzm8vG'),
(17, 'sudhakar', 'binaygiri28@gmail.com', '6291922787', '$2y$10$8ZOodE5OM1FoTAKgWqOqd.dkCT2MEz3wG9GJ1DXc1iV2aMz8PO/Na', '$2y$10$EasoqcCyY56tfOzosIVNBOp0weioW7E/HpWwu.P2TewoYFmuYsKk.'),
(19, 'binay kumar giri', 'binaygiri20@gmail.com', '6291922787', '$2y$10$F.ZSyevNnN98ZxK6aNr1uedyS4Og8PKbaldYFna4hfraWy4EVR.Wy', '$2y$10$5dkS.pEjfn.m0mgLZOkxaOCg5RAuG6oKEstti2QTz5O7llP6xmnP.'),
(20, '', '', '', '$2y$10$nbJpLseoFKtAiriOaFrHVuafTt0Ur/uoQ9WRiC9Z4tHglDoOY7FMS', '$2y$10$/U81nPQaZdx2uK0lWrj2reDOoKet6YrN6Ufc2FX1Ph9SQ4DpnNwuy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

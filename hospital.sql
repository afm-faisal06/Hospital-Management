-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2023 at 09:03 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `full_name` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `docId` int(11) NOT NULL,
  `docName` varchar(50) NOT NULL,
  `cabinclass` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `medId` int(20) NOT NULL,
  `medName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `estcost` int(50) NOT NULL,
  `row` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`full_name`, `phone`, `docId`, `docName`, `cabinclass`, `date`, `medId`, `medName`, `email`, `estcost`, `row`) VALUES
('Mohammed Faisal', '01111111111', 0, 'No Doctor Selected', 'Class A', '2023-04-25', 0, 'No Medicine Selected', 'mdfaisal@gmail.com', 500, 1),
('Mohammed Faisal', '01111111111', 0, 'No Doctor Selected', 'Class A', '2023-05-10', 0, 'No Medicine Selected', 'mdfaisal@gmail.com', 500, 2),
('Mohammed Faisal', '01111111111', 0, 'No Doctor Selected', 'Class A', '2023-05-10', 0, 'No Medicine Selected', 'mdfaisal@gmail.com', 500, 3),
('Mohammed Faisal', '01111111111', 0, 'No Doctor Selected', 'Class A', '2023-05-10', 0, 'No Medicine Selected', 'mdfaisal@gmail.com', 500, 4),
('Mohammed Faisal', '01111111111', 0, 'No Doctor Selected', 'Class A', '2023-05-10', 0, 'No Medicine Selected', 'mdfaisal@gmail.com', 500, 5),
('Mohammed Faisal', '01111111111', 0, 'No Doctor Selected', 'Class A', '2023-05-10', 0, 'No Medicine Selected', 'mdfaisal@gmail.com', 500, 6),
('Mohammed Faisal', '422424224', 0, 'No Doctor Selected', 'Class A', '2023-04-26', 0, 'No Medicine Selected', 'mdfaisal@gmail.com', 500, 7),
('Mohammed Faisal', '422424224', 0, 'No Doctor Selected', 'Class A', '2023-04-26', 0, 'No Medicine Selected', 'mdfaisal@gmail.com', 500, 8),
('Mohammed Faisal', '422424224', 0, 'No Doctor Selected', 'Class A', '2023-04-26', 0, 'No Medicine Selected', 'mdfaisal@gmail.com', 500, 9),
('Mohammed Faisal', '422424224', 0, 'No Doctor Selected', 'Class A', '2023-04-26', 0, 'No Medicine Selected', 'mdfaisal@gmail.com', 500, 10),
('Mohammed Faisal', '422424224', 0, 'No Doctor Selected', 'Class A', '2023-04-26', 0, 'No Medicine Selected', 'mdfaisal@gmail.com', 500, 11),
('Mohammed Faisal', '422424224', 0, 'No Doctor Selected', 'Class A', '2023-04-26', 0, 'No Medicine Selected', 'mdfaisal@gmail.com', 500, 12),
('Mohammed Faisal', '422424224', 0, 'No Doctor Selected', 'Class A', '2023-04-26', 0, 'No Medicine Selected', 'mdfaisal@gmail.com', 500, 13),
('Mohammed Faisal', '422424224', 0, 'No Doctor Selected', 'Class A', '2023-04-26', 0, 'No Medicine Selected', 'mdfaisal@gmail.com', 500, 14),
('Mohammed Faisal', '422424224', 0, 'No Doctor Selected', 'Class A', '2023-04-26', 0, 'No Medicine Selected', 'mdfaisal@gmail.com', 500, 15),
('Mohammed Faisal', '422424224', 0, 'No Doctor Selected', 'Class A', '2023-04-26', 0, 'No Medicine Selected', 'mdfaisal@gmail.com', 500, 16),
('Mohammed Faisal', '422424224', 0, 'None', 'Class A', '2023-04-26', 0, 'None', 'mdfaisal@gmail.com', 500, 17),
('Mohammed Faisal', '04545546656', 0, 'None', 'Class A', '2023-04-10', 0, 'None', 'mdfaisal@gmail.com', 500, 18),
('apu kumar', '04545546656', 0, 'None', 'Class A', '2023-04-18', 0, 'None', 'apu@gmail.com', 500, 19);

-- --------------------------------------------------------

--
-- Table structure for table `cabin`
--

CREATE TABLE `cabin` (
  `cabinclass` varchar(25) NOT NULL,
  `price` int(10) NOT NULL,
  `available` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cabin`
--

INSERT INTO `cabin` (`cabinclass`, `price`, `available`) VALUES
('Class A', 500, 177),
('Class B', 200, 300),
('Noone', 0, 999999999);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `docId` int(10) NOT NULL,
  `docName` varchar(50) NOT NULL,
  `fdName` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `available` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`docId`, `docName`, `fdName`, `price`, `available`) VALUES
(0, 'None', 'None', 0, 999999978),
(1, 'Sabbir Ahmed', 'Neurologist', 1000, 200),
(2, 'Hasan Mahmud', 'Cardiologist', 1000, 100),
(3, 'Mostafa Kamal', 'Psychiatrist', 500, 100);

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medId` int(10) NOT NULL,
  `medName` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `available` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medId`, `medName`, `price`, `available`) VALUES
(0, 'None', 0, 999999978),
(1, 'Napa', 5, 200),
(2, 'Aspirin', 10, 200),
(3, 'Antipsychotics', 10, 100),
(4, 'Anxiolytics', 20, 100);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `birth_date` date NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `full_name`, `email`, `birth_date`, `password`, `phone_number`, `gender`) VALUES
(1, 'Admin', 'admin1@gmail.com', '1999-06-15', 'admin1', 1756400607, 'Male'),
(3, 'apu kumar', 'apu@gmail.com', '2023-04-11', 'apu', 2147483647, 'Male'),
(5, 'Mohammed Faisal', 'mdfaisal@gmail.com', '1999-06-15', 'mdfaisal', 1935584444, 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`row`);

--
-- Indexes for table `cabin`
--
ALTER TABLE `cabin`
  ADD PRIMARY KEY (`cabinclass`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`docId`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `row` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

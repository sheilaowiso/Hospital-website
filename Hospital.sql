-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2018 at 07:43 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `nextkin`
--

CREATE TABLE `nextkin` (
  `nid` int(255) NOT NULL,
  `parentid` text NOT NULL,
  `firstname` text NOT NULL,
  `surname` text NOT NULL,
  `relationship` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nextkin`
--

INSERT INTO `nextkin` (`nid`, `parentid`, `firstname`, `surname`, `relationship`) VALUES
(1, '8', 'lilian', 'jane', 'sister'),
(2, '1', 'esther', 'moore', 'sister'),
(3, '4', 'pauline', 'esther', 'cousin'),
(4, '3', 'peter', 'paul', 'brother'),
(5, '4', 'ron', 'mark', 'brother'),
(6, '2', 'patrick', 'cole', 'uncle'),
(7, '7', 'millie', 'cain', 'aunt'),
(8, '2', 'james', 'chris', 'uncle'),
(9, '6', 'brenda ', 'julie', 'neighbour'),
(10, '5', 'belinda', 'hut', 'neighbour'),
(11, '1', 'micheal', 'brown', 'brother');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `parentid` int(255) NOT NULL,
  `pid` text NOT NULL,
  `firstname` text NOT NULL,
  `middlename` text NOT NULL,
  `surname` text NOT NULL,
  `dateofbirth` text NOT NULL,
  `gender` text NOT NULL,
  `county` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`parentid`, `pid`, `firstname`, `middlename`, `surname`, `dateofbirth`, `gender`, `county`) VALUES
(1, '1', 'sheila', 'joy', 'owiso', '7/22/1998', 'Female', 'Nairobi'),
(2, '2', 'max', 'ann', 'comd', '9/22/1995', 'Male', 'Mombasa'),
(3, '3', 'mary', 'wendy', 'blessed', '9/22/1995', 'Female', 'Mandera'),
(4, '4', 'christy', 'ul', 'dan', '8/22/1994', 'Female', 'Kisumu'),
(5, '5', 'christine', 'mary', 'chege', '4/3/1997', 'Female', 'Kiambu'),
(6, '6', 'jose', 'gillian', 'arm', '1/1/1991', 'Male', 'Kajiado'),
(7, '7', 'mop', 'mig', 'ol', '12/12/1995', 'Male', 'Kilifi'),
(8, '8', 'billie', 'spencer', 'paul', '1/2/1998', 'Male', 'Nairobi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nextkin`
--
ALTER TABLE `nextkin`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`parentid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nextkin`
--
ALTER TABLE `nextkin`
  MODIFY `nid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `parentid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

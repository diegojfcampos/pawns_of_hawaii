-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 05, 2023 at 09:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pawns_of_hawaii`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `messageid` int(11) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `textmessage` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`messageid`, `firstname`, `lastname`, `email`, `textmessage`) VALUES
(6, 'John', 'Doe', 'john.doe@example.com', 'Hello, this is a message from John Doe.'),
(7, 'Jane', 'Smith', 'jane.smith@example.com', 'Hello, this is a message from Jane Smith.'),
(8, 'Bob', 'Jones', 'bob.jones@example.com', 'Hello, this is a message from Bob Jones.'),
(9, 'Alice', 'Williams', 'alice.williams@example.com', 'Hello, this is a message from Alice Williams.'),
(10, 'Mike', 'Brown', 'mike.brown@example.com', 'Hello, this is a message from Mike Brown.'),
(11, 'Diego', 'Campos', 'diegojfcampos@gmail.com', 'Test'),
(12, 'Diego', 'Campos', 'diegojfcampos@gmail.com', 'Testing'),
(13, 'Diego', 'Campos', 'diegojfcampos@gmail.com', 'Test'),
(14, 'Diego', 'Campos', 'diegojfcampos@gmail.com', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `donationAmount` varchar(50) NOT NULL,
  `address` varchar(50) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pet`
--

CREATE TABLE `pet` (
  `petid` int(11) NOT NULL,
  `code` varchar(11) NOT NULL,
  `name` varchar(15) DEFAULT NULL,
  `age` varchar(15) DEFAULT NULL,
  `breed` varchar(50) NOT NULL,
  `city` varchar(30) DEFAULT NULL,
  `description` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pet`
--

INSERT INTO `pet` (`petid`, `code`, `name`, `age`, `breed`, `city`, `description`) VALUES
(1, '85', 'Jordan', '2', 'Border Collie', 'Dublin', 'Jordan is a 2-year-old Border Collie. He is very smart and lovely.'),
(2, '102', 'Patty', '5', 'Polydactyl', 'Cork', 'Patty  is a 6-year-old domestic shorthair. She is very friendly and loves cuddling up with his humans on the couch.&quot;'),
(3, '110', 'Max', '1', 'Rat Terrier', 'Cork', 'Max is very energetic and loves going on long runs and hikes.'),
(4, '70', 'Sasha', '3', 'Polydactyl', 'Galway', 'Sasha is a friendly and affectionate 3-year-old domestic. She enjoys cuddling and playing with her humans.'),
(5, '1234', 'Fluffy', '5', 'Siamese', 'Galway', 'Fluffy is a 5-year-old Siamese cat.'),
(6, '6789', 'Buddy', '3', 'Labrador', 'Dublin', 'Buddy is a 3-year-old Labrador. He is very friendly and loves playing fetch.'),
(7, '4680', 'Peanut', '2', 'Poodle', 'Dublin', 'Peanut is a 2-year-old Poodle. She is very smart and loves learning new tricks.'),
(8, '3579', 'Mittens', '7', 'Persian', 'Dublin', 'Mittens is a 7-year-old Persian cat. She is very cuddly and loves napping in warm blankets.'),
(9, '7531', 'Sammy', '4', 'Golden Retriever', 'Cork', 'Sammy is a 4-year-old Golden Retriever. He is very energetic and loves going on long walks.'),
(10, '5679', 'Luna', '1', 'Calico', 'Dublin', 'Luna is a 1-year-old Calico cat. She is very curious and loves exploring her surroundings.');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `testimonialid` int(11) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `testimonial` mediumtext DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `visible` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`testimonialid`, `firstname`, `lastname`, `email`, `testimonial`, `user_id`, `visible`) VALUES
(1, 'John', 'Smith', 'john@example.com', 'I adopted my furry best friend from this shelter and I could not be happier. The staff was so helpful and caring, and they really made the process smooth and enjoyable. I highly recommend adopting from this shelter!', 1, 1),
(2, 'Jane', 'Doe', 'jane@example.com', 'I was so nervous about adopting a pet, but the staff at this shelter put me at ease and helped me find the perfect match for my family. We have had our new furry family member for a month now and we are all in love! Thank you for everything.', 1, 1),
(3, 'Jack', 'Brown', 'jack@example.com', 'We adopted our two furry children from this shelter and we could not be happier. They have brought so much joy to our lives and we are so grateful to the staff for all their help and support. If you are thinking about adopting, this is the place to go!', 1, 1),
(4, 'Diego', 'Campos', 'diegojfcampos@gmail.com', 'Testing...', 1, 0),
(5, 'Diego', 'Campos', 'diegojfcampos@gmail.com', 'Testing 123', 1, 0),
(6, 'Diego', 'Campos', 'diegojfcampos@gmail.com', 'testing', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(15) NOT NULL,
  `firstname` varchar(15) DEFAULT NULL,
  `lastname` varchar(15) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `userpassword` varchar(50) NOT NULL,
  `useradmin` int(15) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `firstname`, `lastname`, `email`, `userpassword`, `useradmin`) VALUES
(1, 'Diego', 'Campos', 'diegojfcampos@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
(12, 'Diego', 'Campos', 'diegofariacampos@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
(13, 'Member', 'User', 'member@gmail.com', '202cb962ac59075b964b07152d234b70', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`messageid`);

--
-- Indexes for table `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`petid`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`testimonialid`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `messageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pet`
--
ALTER TABLE `pet`
  MODIFY `petid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `testimonialid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD CONSTRAINT `testimonial_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

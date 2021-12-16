-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2021 at 07:54 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khairaat`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_books`
--

CREATE TABLE `academic_books` (
  `book_id` int(11) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `standard` int(11) NOT NULL,
  `book_name` varchar(100) DEFAULT NULL,
  `author` varchar(20) DEFAULT NULL,
  `publisher` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `academic_books`
--

INSERT INTO `academic_books` (`book_id`, `subject`, `standard`, `book_name`, `author`, `publisher`) VALUES
(21, 'CSE', 12, 'Basics of Web', 'JJ Jones', 'Kaley Publications'),
(22, 'English', 8, 'Intro to Lit', 'Enid Blyton', 'ABSS'),
(23, 'Mathematics', 10, 'Advanced Mathematics', 'RD Sharma', 'Penguin Publications'),
(24, 'Physics', 11, 'Thermodynamics', 'PV Patel', 'Jiminy JSS'),
(25, 'Chemistry', 10, 'P Block', 'Remus Lupin', 'Moony'),
(26, 'Science', 8, 'Scientific Endeavours', 'Sirius Black', 'Padfoot');

-- --------------------------------------------------------

--
-- Table structure for table `donated_books`
--

CREATE TABLE `donated_books` (
  `book_name` varchar(50) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `publisher` varchar(50) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `standard` varchar(50) DEFAULT NULL,
  `genre` varchar(50) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donated_books`
--

INSERT INTO `donated_books` (`book_name`, `author`, `publisher`, `type`, `subject`, `standard`, `genre`, `address`) VALUES
('Sherlock Holmes', 'Sir Arthur Conan Doyle', 'Molly Hooper', 'Non Academ', NULL, NULL, 'Adventure', '221B Baker Street'),
('C++ Basics', 'Jonathan Bailey', 'Jones Publications', 'Academic', 'Computer', '12', NULL, 'P Sherman 42 Wallaby Way'),
('Vilette', 'Charlotte Bronte', 'Classic Pubs', 'Non Academ', NULL, NULL, 'Classic', 'P Sherman 42 Wallaby Way');

-- --------------------------------------------------------

--
-- Table structure for table `nonacademic_books`
--

CREATE TABLE `nonacademic_books` (
  `book_id` int(11) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `book_name` varchar(100) DEFAULT NULL,
  `author` varchar(20) DEFAULT NULL,
  `publisher` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nonacademic_books`
--

INSERT INTO `nonacademic_books` (`book_id`, `genre`, `book_name`, `author`, `publisher`) VALUES
(13, 'Kids', 'Harry Potter', 'JK Rowling', 'JKR'),
(14, 'Kids', 'Percy Jackson', 'Rick Riordan', 'GreekMythos'),
(15, 'Fantasy', 'Six of Crows', 'Leigh Bardugo', 'AlinaStarkov'),
(16, 'Play', 'Romeo and Juliet', 'Shakespeare', 'The World'),
(17, 'Romance', 'Pride and Prejudice', 'Jane Austen', 'Austen Publications'),
(18, 'Horror', 'Dracula', 'Bram Stoker', 'Fang Publications'),
(19, 'Classics', 'Great Expectations', 'Charles Dickens', 'CSI');

-- --------------------------------------------------------

--
-- Table structure for table `requested`
--

CREATE TABLE `requested` (
  `book_name` varchar(50) DEFAULT NULL,
  `id` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requested`
--

INSERT INTO `requested` (`book_name`, `id`, `address`) VALUES
('Pride and Prejudice', 'ishiyadav2002@gmail.com', '221B Baker Street'),
('P Block', 'ishiyadav2002@gmail.com', '221B Baker Street'),
('Pride and Prejudice', 'ishiyadav2002@gmail.com', '123'),
('Harry Potter', 'ishiyadav2002@gmail.com', '123 Laker street'),
('Harry Potter', 'ishiyadav2002@gmail.com', '123 Laker street');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobileNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `name`, `mobileNo`) VALUES
(7, 'ishiyadav2002@gmail.com', 'ishita', 'Ishita Yadav', 2147483647),
(8, 'anushayadav55@gmail.com', '123456', 'Anusha Yadav', 1234567899),
(9, 'rishimagupta@gmail.com', 'aaaaaa', 'Rishima Gupta', 1234567890),
(10, 'jai@gmail.com', 'jaiiiiii', 'Jai Prakash', 1234567890),
(11, 'priya.mehra@gmail.com', 'priyayayaya', 'Priya Mehra', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_books`
--
ALTER TABLE `academic_books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `nonacademic_books`
--
ALTER TABLE `nonacademic_books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_books`
--
ALTER TABLE `academic_books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `nonacademic_books`
--
ALTER TABLE `nonacademic_books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

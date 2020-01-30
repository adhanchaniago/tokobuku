-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2019 at 08:54 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbbookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`category_id`, `category_name`) VALUES
(11, 'Komputer'),
(12, 'Pendidikan'),
(13, 'Pengetahuan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mybooks`
--

CREATE TABLE `tbl_mybooks` (
  `book_id` int(11) NOT NULL,
  `ISBN` varchar(30) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `publisher_id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `publish_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mybooks`
--

INSERT INTO `tbl_mybooks` (`book_id`, `ISBN`, `category_id`, `title`, `author`, `price`, `publisher_id`, `img`, `publish_date`) VALUES
(23, '1-2345-5678-9', 12, 'Negara Merah Putih', 'Wanyad.S.Kom', 50000, 9, 'ID_GPU2016MTH01NPB_B.jpg', '2019-05-23'),
(25, '1-2345-5678-11', 13, 'DILAN 1990', 'Pidi Baiq', 100000, 11, 'images.jfif', '2019-05-23'),
(26, '1-2345-5678-12', 13, 'Belajar Mencintai', 'Pidi Baiq', 100000, 10, 'images.jfif', '2019-05-23'),
(27, '1-2345-5678-13', 11, 'Belajar PHP', 'Rinaldi Munir', 5000000, 11, 'MUDAH-BELAJAR-PHP_2894.jpg', '2019-05-23'),
(28, '1-2345-5678-14', 11, 'Belajar PHP MYSQL', 'Kemplud.M.Kom', 100000, 9, 'thF3YT43HJ.jpg', '2019-05-23'),
(30, '1-2345-5678-15', 11, 'Belajar PHP MYSQL', 'Wanyad.S.Kom', 100000, 10, 'MUDAH-BELAJAR-PHP_2894.jpg', '2019-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_publishers`
--

CREATE TABLE `tbl_publishers` (
  `publisher_id` int(11) NOT NULL,
  `publisher_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_publishers`
--

INSERT INTO `tbl_publishers` (`publisher_id`, `publisher_name`) VALUES
(9, 'Gramedia'),
(10, 'Kompas'),
(11, 'Informatika');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_mybooks`
--
ALTER TABLE `tbl_mybooks`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `publisher_id` (`publisher_id`);

--
-- Indexes for table `tbl_publishers`
--
ALTER TABLE `tbl_publishers`
  ADD PRIMARY KEY (`publisher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_mybooks`
--
ALTER TABLE `tbl_mybooks`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_publishers`
--
ALTER TABLE `tbl_publishers`
  MODIFY `publisher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_mybooks`
--
ALTER TABLE `tbl_mybooks`
  ADD CONSTRAINT `tbl_mybooks_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tbl_categories` (`category_id`),
  ADD CONSTRAINT `tbl_mybooks_ibfk_2` FOREIGN KEY (`publisher_id`) REFERENCES `tbl_publishers` (`publisher_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

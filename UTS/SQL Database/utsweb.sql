-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2020 at 02:59 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utsweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) NOT NULL,
  `tgl` varchar(50) NOT NULL,
  `ket` varchar(200) NOT NULL,
  `isi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `tgl`, `ket`, `isi`) VALUES
(0, 'February 6<sup>th</sup> 2000', 'Little Pedro was born', 'Little Pedro was born on February 6<sup>th</sup> 2000 at dawn in a hospital in Sragen, Central Java'),
(1, 'April 2000', 'My family moved to Jakarta', 'My mom said, our family moved from Sragen to Jakarta when i was 3 months old and it was the first trip i took in my life'),
(2, '2004', 'Little Pedro entered kindergarten', 'I entered kindergarten when I was 4 years old, the kindergarten was called TK Bintang Kejora'),
(3, 'July 2006', 'Little Pedro becomes a student', 'I entered primary school when I was 6 years old, the primary school is SDN 04 Bintaro'),
(4, 'July 2012', 'Pedro entered junior highschool', 'I entered junior highschool when I was 12 years old, the junior highschool is SMP PERWIRA JAKARTA'),
(5, 'July 2015', 'Pedro entered highschool', 'I entered highschool when I was 15 years old, the highschool is SMAN 86 JAKARTA'),
(6, 'August 2018', 'Pedro becomes a college student', 'I entered university when I was 18 years old, the university is Pembangunan Jaya University'),
(7, 'Saturday, October 31<sup>st</sup> 2020', 'Pedro made this website', 'I made this web as an assignment for midterm exams on web programming and projects class');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(3) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `pesan` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `nama`, `email`, `nohp`, `pesan`) VALUES
(2, 'Rico', 'ricorodriguez767@gmail.com', '129123791236', 'Hello Pedro!');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `programs` varchar(20) NOT NULL,
  `alamat` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `nama`, `status`, `programs`, `alamat`) VALUES
(1, 'SMP PERWIRA JAKARTA', 'has been taken', 'Basic', 'Jl. H. Dilun No.4, RT.6/RW.7, Ulujami, Kec. Pesanggrahan, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12250'),
(2, 'SMAN 86 JAKARTA', 'has been taken', 'Social and Humanitie', 'Jl. Bintaro Permai IV No.36, RW.9, Bintaro, Kec. Pesanggrahan, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12330'),
(3, 'UNIVERSITAS PEMBANBANGUNAN JAYA', 'curently taking', 'Informatics Engineer', 'Jalan Cendrawasih Raya Blok B7/P, Sawah Baru, Kec. Ciputat, Kota Tangerang Selatan, Banten 15413');

-- --------------------------------------------------------

--
-- Table structure for table `exp`
--

CREATE TABLE `exp` (
  `id` int(3) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `isi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exp`
--

INSERT INTO `exp` (`id`, `judul`, `isi`) VALUES
(0, 'C++', 'When I was in semester 1, I was able to understand algorithm and programming classes using C++.'),
(1, 'HTML', 'When I was in semester 2, I was able to understand Web Design classes using HTML.'),
(2, 'PHP', 'When I was in semester 5, I was able to understand Web Programming and Project classes using PHP.'),
(3, 'JAVA', 'When I was in semester 5, I was able to understand Object Oriented Programming classes using Java.'),
(4, 'PYTHON', 'When I was in semester 5, I was able to understand Visual Processing classes using Python Language.'),
(5, 'MICROCONTROLLER', 'When I was in semester 4, I was able to understand Microcontroller classes using Arduino.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

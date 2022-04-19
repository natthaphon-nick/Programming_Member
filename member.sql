-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2022 at 07:34 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `member`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_User` int(8) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Password` int(10) NOT NULL,
  `FullName` varchar(1000) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Create_Date` date NOT NULL,
  `Update_Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_User`, `Username`, `Password`, `FullName`, `Email`, `Create_Date`, `Update_Date`) VALUES
(1, 'natthaphon', 123456789, 'Natthaphon_Ngamrit', 'natthaphon@gmail.com', '2022-04-19', '2022-04-19'),
(2, 'Testing001', 123456, 'Testing001', 'Testing001@gmail.com', '2022-04-19', '2022-04-19'),
(3, 'nick', 0, 'Test0001', 'nick@nnmaill.com', '2020-02-08', '2022-04-19'),
(6, 'newuser', 123456, 'newuser001', 'newuser@gmail.com', '2017-04-13', '2022-04-19'),
(7, 'qwew', 123456, 'qweqwe', '123qwe@dihohdo.com', '2022-04-04', '2022-04-19'),
(8, 'nnaattee', 123456, 'testeditname', '1231312@gmail.com', '2022-04-19', '2022-04-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_User` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

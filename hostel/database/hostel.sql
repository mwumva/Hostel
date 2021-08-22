-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2021 at 12:23 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `hostel_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `firstname`, `lastname`, `hostel_name`, `email`, `password`, `date`) VALUES
(38, 'Abizera', 'Benoit', '   Vuba', 'abizera@gmail.com', '$2y$10$fVMy57DSX8It1EKz/mQWse2CCn9IkUD0.kDq9dB01k3vbhDFqqNvO', '2021-08-19 21:55:16'),
(39, 'Rwego', 'Savio', 'Titanic', 'savio@gmail.com', '$2y$10$ihUOWzqbKWWZpsklsj9DZefA/mYWQIjXBYJPMOhEKTz.LwyDDeghq', '2021-08-19 21:45:47'),
(40, 'Kampire', 'Anne', 'Bengazi', 'kampire@gmail.com', '$2y$10$xPq4T6zMr8B1qMe/l05Udedlr73wu0NN1wvVHpV6l8YiRL40tbWQO', '2021-08-19 21:47:20'),
(41, 'Rugenera', 'Alphonse', 'Mizereor', 'rugenera@gmail.com', '$2y$10$.ZvuQhgpWyL9gOTFbQAo.OqsuRnYb5SAAFig8mTrArWnQ1TU6Fnb2', '2021-08-19 21:49:33'),
(42, 'Ndayambaje', 'Patrick', 'Kiza', 'ndayambaje@gmail.com', '$2y$10$oNL3ICUHSBFCbBln/RokieMWNYj5/E5ReoT52k6AH4R/sspekoeyC', '2021-08-19 21:52:10'),
(43, 'Karake', 'Francois', 'Cambodge', 'karake@gmail.com', '$2y$10$Jjr3ei3F5hCKI2EXUsxNQ.rl8eDALDdaCJ0io9QteJrV7mH2iXXyG', '2021-08-19 21:53:43');

-- --------------------------------------------------------

--
-- Table structure for table `applied`
--

CREATE TABLE `applied` (
  `Id` int(255) NOT NULL,
  `Reg_number` int(255) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `college` varchar(20) NOT NULL,
  `level` varchar(255) NOT NULL,
  `sponsorship` varchar(50) NOT NULL,
  `guardian_phone` int(10) NOT NULL,
  `Decision` varchar(30) NOT NULL,
  `hostel_name` varchar(120) NOT NULL,
  `appl_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `room` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applied`
--

INSERT INTO `applied` (`Id`, `Reg_number`, `firstname`, `lastname`, `nationality`, `email`, `phonenumber`, `birthdate`, `gender`, `college`, `level`, `sponsorship`, `guardian_phone`, `Decision`, `hostel_name`, `appl_date`, `room`) VALUES
(38, 2143948783, 'Rugano', 'Bakame', 'KENYA', 'augustinous@gmail.com', 787847854, '2007-09-06', ' male', ' CBE', 'YEAR 2', 'Government sponsored', 798957656, 'Allowed', 'Benghazi', '2021-08-19 21:16:38', 45),
(39, 2147483647, 'kanyange', 'Emeline', ' RWANDA', 'kanyange@gmail.com', 789678565, '2001-04-19', ' male', ' CMHS', 'YEAR 1', 'Government sponsored', 789765463, 'Allowed', 'Titanic', '2021-08-19 22:20:06', 53),
(40, 2122000000, 'Kalisa', 'Eric', ' Namibia', 'kalisa@gmail.com', 786876568, '2006-07-26', ' fema', ' CMHS', 'YEAR 1', 'Government sponsored', 789643453, 'Allowed', 'Misereole', '2021-08-19 22:20:42', 35),
(41, 2147483647, 'kanyandekwe', 'aurole', 'Morrocco', 'kanya@gmail.com', 8765, '1982-02-23', ' male', ' CBE', 'YEAR 1', 'Private sponsored', 2147483647, 'Allowed', 'Titanic', '2021-08-19 21:17:56', 50),
(42, 232324409, 'Karimunda', 'Evariste', ' Tanzania', 'karimunda@gmail.com', 798754365, '1989-01-01', ' male', ' CAVM', 'YEAR 3', 'Private sponsored', 786758765, 'Allowed', 'Misereole', '2021-08-19 22:22:08', 32),
(43, 212000064, 'Kanyange', 'Ange', 'Uganda', 'kanyange@gmail.com', 784563655, '1995-07-24', ' fema', ' CMHS', 'YEAR 4', 'Government sponsored', 789676563, 'Allowed', 'Benghazi', '2021-08-19 21:40:15', 53),
(44, 213260005, 'Jean Claude', 'hakuzimana ', 'Kenya', 'hakuza@gmail.com', 784654747, '1998-07-29', ' fema', ' CST', 'YEAR 2', 'Private sponsored', 786570045, 'not Allowed', 'Misereole', '2021-08-19 21:40:58', 67),
(45, 222000212, 'Mihigo', ' Paul', 'Rwanda', 'mihigo@gmail.com', 795342537, '1998-09-20', ' fema', ' CST', 'YEAR 2', 'Private sponsored', 786867543, 'Allowed', 'Misereole', '2021-08-19 21:41:14', 43),
(46, 220001034, 'Nyirarukundo', 'Yvette', 'RWANDA', 'nyira@gmail.com', 785433242, '1992-07-26', ' male', ' CST', 'YEAR 3', 'Government sponsored', 793442352, 'Allowed', 'Benghazi', '2021-08-19 21:40:49', 43);

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE `booked` (
  `book_id` int(11) NOT NULL,
  `hostel_name` int(11) NOT NULL,
  `room_number` int(11) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `booking_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hostels`
--

CREATE TABLE `hostels` (
  `hostel_id` int(11) NOT NULL,
  `hostel_name` varchar(255) NOT NULL,
  `room_number` int(11) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `room_capacity` int(10) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hostels`
--

INSERT INTO `hostels` (`hostel_id`, `hostel_name`, `room_number`, `room_type`, `room_capacity`, `register_date`) VALUES
(12, ' bengazi', 678, 'female', 8, '2021-08-14 19:33:30'),
(14, ' Kiza', 435, 'male', 5, '2021-08-14 19:35:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `applied`
--
ALTER TABLE `applied`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Id` (`Id`);

--
-- Indexes for table `booked`
--
ALTER TABLE `booked`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `hostels`
--
ALTER TABLE `hostels`
  ADD PRIMARY KEY (`hostel_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `applied`
--
ALTER TABLE `applied`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `booked`
--
ALTER TABLE `booked`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hostels`
--
ALTER TABLE `hostels`
  MODIFY `hostel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

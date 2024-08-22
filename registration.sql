-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2024 at 03:00 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `Id` int(100) NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`Id`, `Designation`, `Name`, `Description`, `Image`) VALUES
(1, 'Web Developer', 'Apurbo Saha', 'I work in the sweet spot for innovation, somewhere between strategy, design and technology. I love the Web and the work we do.', '66c02baabce14.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `Id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Massage` varchar(200) NOT NULL,
  `Status` int(100) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`Id`, `Name`, `Email`, `Subject`, `Massage`, `Status`) VALUES
(2, 'Apurbo Saha', 'sahaanik436@gmail.com', 'web development', 'dfdfedfrre4trergrhgrgh', 1),
(3, 'guest ', 'sahaanik436@gmail.com', 'web development', 'hello', 1),
(4, 'DFJDKFJ', 'sahaanik436@gmail.com', 'FDFDFAD', 'FDFDFDFDF', 1),
(5, 'Apurbo Saha', 'sahaanik436@gmail.com', 'web development', 'hwllo', 1),
(6, 'Apurbo Saha', 'sahaanik436@gmail.com', 'web development', 'hi', 1),
(7, 'Apurbo Saha', 'sahaanik436@gmail.com', 'web development', 'hello', 1),
(8, 'Anik', 'sahaanik436@gmail.com', 'Biology', 'Who is the father of biology', 1),
(9, 'Apurbo Saha', 'sahaanik436@gmail.com', 'web development', 'jjghghghgh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `Id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Feedback` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`Id`, `Name`, `Designation`, `Image`, `Feedback`) VALUES
(10, 'Mr. X', 'Web Developer', '66c48ac3eb1b6.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industrys standard dummy text ever since the 1500s when an unknown printer took a galley of type and '),
(11, 'Mr. Y', 'web Developer', '66c48ae305692.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industrys standard dummy text ever since the 1500s when an unknown printer took a galley of type and '),
(13, 'Mr. Z', 'web Designer', '66c48b3642e51.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industrys standard dummy text ever since the 1500s when an unknown printer took a galley of type and ');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `Id` int(100) NOT NULL,
  `Header` varchar(100) NOT NULL,
  `Footer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`Id`, `Header`, `Footer`) VALUES
(1, '66c4a55f6b910.png', '66c4a60db6d44.png');

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `Id` int(100) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Catagory` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Status` int(100) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`Id`, `Title`, `Catagory`, `Image`, `Status`) VALUES
(12, 'Web Development', 'Php, Laravel', '66c1f14c79898.jpg', 1),
(14, 'Web Development', 'Php, Laravel', '66c1f161bd509.jpg', 1),
(15, 'Web Development', 'Php, Laravel', '66c1f16f8b7c2.jpg', 1),
(18, 'web development', 'Php, Laravel', '66c1f4a954797.jpg', 1),
(22, 'Web Development', 'Php, Laravel', '66c49005596fd.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `Id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Status` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`Id`, `Name`, `Description`, `Status`) VALUES
(1, 'Back end development', 'It can change the way we feel about a company and the products & services they offer.', '1'),
(4, 'Front End Design Development', 'It can change the way we feel about a company and the products & services they offer.', '1'),
(5, 'Digital Content Marketing', 'It can change the way we feel about a company and the products & services they offer.', '1'),
(6, 'Application devlopment', 'It can change the way we feel about a company and the products & services they offer.', '0'),
(7, 'Videography Photography', 'It can change the way we feel about a company and the products & services they offer.', '1'),
(8, 'Wordpress Development', 'It can change the way we feel about a company and the products & services they offer.', '1');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `Id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Parcentage` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`Id`, `Name`, `Parcentage`, `Status`) VALUES
(1, 'Html', '95', '1'),
(2, 'Css', '80', '1'),
(3, 'Tailwind Css', '95', '1'),
(6, 'BootStrap', '50', '1'),
(7, 'Php', '60', '1'),
(8, 'React Js', '20', '0'),
(17, 'Firebase', '5', '0'),
(18, 'Laravel', '50', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Photo` varchar(100) DEFAULT NULL,
  `Role` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Email`, `Password`, `Country`, `Gender`, `Photo`, `Role`) VALUES
(3, 'apu@gmail.com', '$2y$10$fQc9JkNy.Nmln6O6MbJV6ug87taCdyxPYCPZexiyLenFgonqGS0Je', 'BAN', 'male', '66bb78e16860a.jpg', 1),
(4, '01@gmail.com', '$2y$10$1j2V7K0JVAR/vUAqBYvRlefBoBIbrzSmAV3CaPey5gsvFtJV866G2', 'BAN', 'female', '66b749f1371ee.jpg', 2),
(5, '02@gmail.com', '$2y$10$a3hjYhJt6eC6BUsAPomRQeiiHATWdoEGUOhxCTuSGorn6oh7J7WLu', 'BAN', 'female', NULL, 3),
(6, '03@gmail.com', '$2y$10$CszW9tBOq2137CbaH2MOz./kBXW95Vekqx2AaHzaDWVEcMgL89qIS', 'BAN', 'male', NULL, 4),
(8, '05@gmail.com', '$2y$10$9DuAsTGRCe.aU0.vIpzsFu59l5/h9lARtpBOh6LdrcikUUfpg5UX6', 'USA', 'female', NULL, 0),
(9, '06@gmail.com', '$2y$10$gf3fcz.v3ejW6Y4F7Mwqc./oZw1aId4Z7BIdYZGx7qLB/cAvV1XIi', 'BAN', 'male', '66b8935826e71.jpg', 0),
(10, '07@gmail.com', '$2y$10$s2J7uPY4jOOENuZat1vmuuDwG34JYsxKctc/yh8FJ81fmdC0fxqW2', 'UK', 'female', NULL, 0),
(11, '08@gmail.com', '$2y$10$bspnfeg59FgZXiexzXXSgeLo8VYe0jtWVBjbqqFO4gTxDBXYsb3/O', 'USA', 'female', NULL, 0),
(12, '09@gmail.com', '$2y$10$N0IgLW2HnU7ANB1ENGigKOdoqhXAfwB4WEnaHzAtRhGTUJgzSVLQK', 'USA', 'male', NULL, 0),
(13, '10@gmail.com', '$2y$10$1Hn6MDCXYAEbd0SXa51clu6rty4dMoweotvBWoDmDCwFZA2yCdbJK', 'BAN', 'female', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

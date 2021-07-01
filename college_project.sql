-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2019 at 01:34 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college project`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `file_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(500) NOT NULL,
  `img_dir` varchar(255) DEFAULT NULL,
  `club_id` int(11) NOT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_id`, `name`, `description`, `img_dir`, `club_id`, `time`) VALUES
(22, 'IETE TECH FEST 2K17', 'Tech Fest, 2019 is to be held on the campus of STCET on 9th May, 2019. Interested people should meet there class representative.', 'Images/IETE-TECH-FEST-2K17.jpg', 6, '2019-05-06 18:18:47'),
(24, 'Tree Plant', 'Tree Plantation will be organized on 22nd May, 2019. Classes will be suspended.', 'Images/tree-plant.jpg', 5, '2019-05-06 18:35:57'),
(26, 'Rashtriya Indian Millitary 1', 'College Magazine has been issued. Students can collect their copies from the library.', 'Images/rashtriya-indian-millitary-1.jpg', 4, '2019-05-06 18:38:43'),
(29, 'Maxresdefault', 'Music competition on 30th May,2019.', 'Images/maxresdefault.jpg', 3, '2019-05-06 18:43:49'),
(30, 'Gunjan Dance Acedamy Dolamundai Cuttack Dance Classes Tqtwm', 'Odissi is the state dance of Orissa. SangaMitra Das of IT 4th year is a prominent figure in that dance form.', 'Images/gunjan-dance-acedamy-dolamundai-cuttack-dance-classes-tqtwm.jpg', 3, '2019-05-06 18:45:14'),
(31, 'Compi RP 2017103101', 'Coding competition to be organized on May 9th,2019. 4th year students are requested to participate.', 'Images/Compi RP-2017103101.jpg', 2, '2019-05-06 18:46:48'),
(33, 'IMG 20190223 WA0005', 'IT reached the finals this year. Had won last year. ', 'Images/IMG-20190223-WA0005.jpg', 1, '2019-05-06 18:48:43'),
(34, '1488467351 B249b5939f Small_poster', 'Tech Fest 2019.', 'Images/1488467351-b249b5939f-small_poster.jpg', 6, '2019-05-06 18:49:56'),
(35, '66106525', 'A blood donation occurs when a person voluntarily has blood drawn and used for transfusions and/or made into biopharmaceutical medications by a process called fractionation.', 'Images/66106525.jpg', 5, '2019-05-06 18:50:48'),
(36, 'Essay2015 750x349', 'Essay competition 2019', 'Images/essay2015-750x349.jpg', 4, '2019-05-06 18:51:54'),
(37, '1488467351 B249b5939f Small_poster', 'Game of Codes 2019', 'Images/1488467351-b249b5939f-small_poster.jpg', 2, '2019-05-06 18:52:53'),
(38, 'Project3', 'Farewell 2019. IT batch.', 'Images/project3.PNG', 3, '2019-05-06 18:54:03'),
(39, 'Winning Team Of DU Inter College_Shradhanand', 'Winners 2019.', 'Images/Winning-Team-of-DU-Inter-College_Shradhanand.jpg', 1, '2019-05-06 18:55:44'),
(40, NULL, 'Cricket is a bat-and-ball game played between two teams of eleven players on a field at the centre of which is a 20-metre (22-yard) pitch with a wicket at each end, each comprising two bails balanced on three stumps. The batting side scores runs by striking the ball bowled at the wicket with the bat, while the bowling and fielding side tries to prevent this and dismiss each player (so they are \"out\"). ', NULL, 1, '2019-05-06 18:56:41'),
(41, '29873317_1412941275477051_5551281596735702790_o', 'Team Vision Quest Won Smart India Hackathon, 2018.', 'Images/29873317_1412941275477051_5551281596735702790_o.jpg', 2, '2019-05-07 08:50:34'),
(42, '29983345_1412941058810406_6807650103099550366_o', 'Team Vision Quest Won Smart India Hackathon, 2018.', 'Images/29983345_1412941058810406_6807650103099550366_o.jpg', 2, '2019-05-07 08:50:45'),
(44, 'Hackathon Winners', 'Atul Shivam Sai Rahul Roshan Smriti', NULL, 2, '2019-05-07 09:41:31'),
(45, 'Cricket Information', 'Cricket is a bat-and-ball game played between two teams of eleven players on a field at the center of which is a 20-metre (22-yard) pitch with a wicket at each end, each comprising two bails balanced on three stumps. The batting side scores runs by striking the ball bowled at the wicket with the bat, while the bowling and fielding side tries to prevent this and dismiss each player (so they are \"out\"). ', NULL, 1, '2019-05-07 09:45:42'),
(46, 'Notice Coding Contest', 'A great way to improve your skills when learning to code is by solving coding challenges. Solving different types of challenges and puzzles can help you become a better problem solver, learn the intricacies of a programming language, prepare for job interviews, learn new algorithms, and more.', NULL, 2, '2019-05-07 09:47:27'),
(47, 'Tech Fest Notice', 'Tech Fest, 2019 is to be held on the campus of STCET on 9th May, 2019. Interested people should meet there class representative.Tech Fest is the annual science and technology festival of Indian Institute of Technology Bombay. It also refers to the independent body of students who organize this event along with many other social initiatives and outreach programs around the year', NULL, 6, '2019-05-07 09:48:21'),
(48, 'Blood Donation Notice', 'A blood donation occurs when a person voluntarily has blood drawn and used for transfusions and/or made into biopharmaceutical medications by a process called fractionation. Donation may be of whole blood, or of specific components directly.', NULL, 5, '2019-05-07 09:49:39'),
(49, '29983345_1412941058810406_6807650103099550366_o', 'Hackathon winners 2018.', 'Images/29983345_1412941058810406_6807650103099550366_o.jpg', 2, '2019-05-07 11:33:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `club_id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`club_id`, `username`, `password`) VALUES
(1, 'sports123', '12345'),
(2, 'coding123', '12345'),
(3, 'culture123', '12345'),
(4, 'lit123', '12345'),
(5, 'social123', '12345'),
(6, 'tech123', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`club_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `club_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

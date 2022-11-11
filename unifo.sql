-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3365
-- Generation Time: Nov 11, 2022 at 04:57 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unifo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_articles`
--

CREATE TABLE `tbl_articles` (
  `article_id` int(11) NOT NULL,
  `article_attachid` varchar(255) NOT NULL,
  `article_title` varchar(255) NOT NULL,
  `article_keyword` varchar(100) NOT NULL,
  `article_desc` varchar(255) NOT NULL,
  `article_blog` varchar(8000) NOT NULL,
  `writer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_articles`
--

INSERT INTO `tbl_articles` (`article_id`, `article_attachid`, `article_title`, `article_keyword`, `article_desc`, `article_blog`, `writer_id`) VALUES
(59, '', 'asdasd', 'IT', 'asdasdasdasdasdasd', 'asdasdasd', 2),
(60, '', 'zxczxcz', 'IT', 'cvbcvbcvb', 'zxczcxvbcvbc', 2),
(61, '', 'zxczxcz', 'IT', 'cvbcvbcvb', 'zxczcxvbcvbc', 2),
(62, '', 'asd', 'IT', 'asd gdf', 'asdasd', 2),
(63, '', 'sacvbkjhk', 'IT', 'uiouiouiouio', 'jhkjiuouiouio', 2),
(64, '', 'vbnbnvbn', 'IT', 'm,n,nm,nm,nm,', 'nvbnvbnv', 2),
(65, '', 'tyutu', 'IT', 'jghjghhhhj', 'tyutyu', 2),
(66, '', 'asdasd', 'IT', 'cxvxcvxcv', 'asdasd', 2),
(67, '', 'zxczc', 'IT', 'zxczczxczxc', 'zxczxczxc', 2),
(68, '', 'zxczc', 'IT', 'zxczczxczxc', 'zxczxczxc', 2),
(69, '5562022-11-1170', 'asdasd', 'IT', 'asdasdasd', 'asdasdasdas', 2),
(70, '2342022-11-11403', 'xcvxcvxvxc', 'IT', 'xcvxcvxcv', 'vxcvxcvcxv', 2),
(71, '72022-11-1151', 'asdasd', 'IT', 'asdasdasd', 'asdasdasdasdasd', 2),
(72, '662022-11-11359', 'zxcz', 'IT', 'zxczxc', 'zxczxczxc', 2),
(73, '2462022-11-1164', 'zxczxc', 'IT', 'ccccccccccccccccccc', 'zxczxczxc', 2),
(74, '3062022-11-11437', 'zxczxc', 'IT', 'zxczxczcx', 'zxczxc', 2),
(75, '2912022-11-1183', 'zczxc', 'IT', 'vcvxcvxcv', 'zxczxc', 2),
(76, '5692022-11-11324', 'Article Nam', 'IT', 'Article NamArticle NamArticle Nam', 'Article Nam', 2),
(77, '4762022-11-11417', 'adasd', 'IT', 'asdasd', 'asdasd', 2),
(78, '2512022-11-11407', 'asdas', 'IT', 'asdasd', 'asdasd', 2),
(79, '1842022-11-1194', 'asdas', 'IT', 'asdasd', 'asdasd', 2),
(80, '4712022-11-1120', 'ASasAS', 'IT', 'asAS', 'sASas', 2),
(81, '1562022-11-11339', 'asdsdsxzxxz', 'IT', 'zxczxczxc', 'ASDASD', 2),
(82, '4012022-11-1159', 'ghjghj', 'IT', 'ghjghjghj', 'ghjghjghj', 2),
(83, '4882022-11-11237', 'asdasdasd', 'IT', 'xcvxcxcv', 'cxvcxvxcv', 2),
(84, '2902022-11-11481', 'xzczxc', 'IT', 'zxczxcxzc', 'zxczxczxc', 2),
(85, '1342022-11-11382', 'asdasdasd', 'IT', 'asdasd', 'asdasd', 2),
(86, '2082022-11-11325', 'asdadsad', 'IT', 'fsdfsdfsdf', 'asdasd', 2),
(87, '3712022-11-11268', 'asasdasd', 'IT', 'asdasds', 'asdasd', 2),
(88, '5352022-11-11347', 'asasdasd', 'IT', 'sadasd', 'asdasd', 2),
(89, '2862022-11-11309', 'asasdasdadasds', 'IT', 'sadasdasdasd', 'asdasdasdasd', 2),
(90, '2532022-11-1161', 'asd', 'IT', 'asdasd', 'asdasd', 2),
(91, '4252022-11-11155', 'asdasd', 'IT', 'asdasdasdasd', 'asdasdasd', 2),
(92, '5512022-11-11310', 'asdasd', 'IT', 'asdasdasdasd', 'asdasdasd', 2),
(93, '5932022-11-1197', 'asdasd', 'IT', 'asdasd', 'dasdasd', 2),
(94, '4682022-11-1194', 'ASa', 'IT', 'SasASasA', 'sASas', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_filearticle`
--

CREATE TABLE `tbl_filearticle` (
  `article_id` int(11) NOT NULL,
  `article_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_filearticle`
--

INSERT INTO `tbl_filearticle` (`article_id`, `article_file`) VALUES
(83, 'article_doc8889d_111122.txt'),
(84, 'article_doc1907d_111122.txt'),
(85, 'article_doc3985d_111122.txt'),
(86, 'article_doc6639d_111122.txt'),
(87, 'article_doc2096d_111122.txt'),
(89, 'article_doc4370d_111122.xlsx'),
(90, 'article_doc927d_111122.txt'),
(91, 'article_doc5543d_111122.txt'),
(92, 'article_doc1697d_111122.txt'),
(93, 'article_doc1040d_111122.txt'),
(94, 'article_doc778d_111122.txt');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profile`
--

CREATE TABLE `tbl_profile` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_dob` date DEFAULT NULL,
  `user_phone` varchar(15) DEFAULT NULL,
  `user_quali` varchar(100) DEFAULT NULL,
  `user_field` varchar(100) DEFAULT NULL,
  `user_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_profile`
--

INSERT INTO `tbl_profile` (`user_id`, `user_name`, `user_dob`, `user_phone`, `user_quali`, `user_field`, `user_image`) VALUES
(2, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_email`, `user_pass`) VALUES
(1, 'djgoswami25@gmail.com', '1eba9614763773df08dd49049663c3e3'),
(2, 'nallaabhi@gmail.com', 'abhi'),
(3, 'goswami@gmail.com', '64ca60972a6ec926d1c4b9d31080c687');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_videoarticle`
--

CREATE TABLE `tbl_videoarticle` (
  `article_id` int(11) NOT NULL,
  `videolink` varchar(550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_videoarticle`
--

INSERT INTO `tbl_videoarticle` (`article_id`, `videolink`) VALUES
(94, 'ASasASasA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_articles`
--
ALTER TABLE `tbl_articles`
  ADD PRIMARY KEY (`article_id`),
  ADD KEY `writer_aricle` (`writer_id`);

--
-- Indexes for table `tbl_filearticle`
--
ALTER TABLE `tbl_filearticle`
  ADD KEY `article_id` (`article_id`);

--
-- Indexes for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  ADD KEY `user_profile` (`user_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- Indexes for table `tbl_videoarticle`
--
ALTER TABLE `tbl_videoarticle`
  ADD KEY `article_id` (`article_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_articles`
--
ALTER TABLE `tbl_articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_articles`
--
ALTER TABLE `tbl_articles`
  ADD CONSTRAINT `1tomany` FOREIGN KEY (`writer_id`) REFERENCES `tbl_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_filearticle`
--
ALTER TABLE `tbl_filearticle`
  ADD CONSTRAINT `tbl_filearticle_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `tbl_articles` (`article_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  ADD CONSTRAINT `user_profile` FOREIGN KEY (`user_id`) REFERENCES `tbl_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_videoarticle`
--
ALTER TABLE `tbl_videoarticle`
  ADD CONSTRAINT `tbl_videoarticle_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `tbl_articles` (`article_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

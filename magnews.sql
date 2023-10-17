-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 17, 2023 at 07:44 PM
-- Server version: 10.3.22-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magnews`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` mediumtext NOT NULL,
  `meta_keyword` mediumtext NOT NULL,
  `status` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `slug`, `description`, `image`, `meta_title`, `meta_description`, `meta_keyword`, `status`, `created_at`) VALUES
(7, 'The Vital Role of Staying Informed in the Digital Age', 'the-vital-role-of-staying-informed-in-the-digital-age', '<p><span style=\"color: rgb(104, 116, 127); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">Summernote uses the Open Source libraries jQuery and Bootstrap, if you are using the Boostrap 3 or 4 versions of Summernote, or just jQuery if you use the Lite version of Summernote. Include the Following code in the</span><span style=\"color: rgb(104, 116, 127); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">&nbsp;area of your HTML page</span><span style=\"background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); color: rgb(104, 116, 127); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">Summernote uses the Open Source libraries jQuery and Bootstrap, if you are using the Boostrap 3 or 4 versions of Summernote, or just jQuery if you use the Lite version of Summernote. Include the Following code in the</span><span style=\"background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); color: rgb(104, 116, 127); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">&nbsp;area of your HTML page</span><span style=\"background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); color: rgb(104, 116, 127); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">Summernote uses the Open Source libraries jQuery and Bootstrap, if you are using the Boostrap 3 or 4 versions of Summernote, or just jQuery if you use the Lite version of Summernote. Include the Following code in the</span><span style=\"background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); color: rgb(104, 116, 127); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">&nbsp;area of your HTML page</span></p><p><span style=\"color: rgb(104, 116, 127); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">Summernote uses the Open Source libraries jQuery and Bootstrap, if you are using the Boostrap 3 or 4 versions of Summernote, or just jQuery if you use the Lite version of Summernote. Include the Following code in the</span><span style=\"color: rgb(104, 116, 127); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">&nbsp;area of your HTML page</span><span style=\"background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); color: rgb(104, 116, 127); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><br></span><br></p>', '1696602630.png', 'The Vital Role of Staying Informed in the Digital Age | Shahala', 'Learn how to navigate a complex landscape, distinguish reliable sources, and strike a balance for a healthier news consumption.', 'Staying informed News consumption Digital age Reliable news sources Information overload Civic ', 0, '2023-10-06 10:30:30'),
(8, 'The Vital Role of Staying Informed in the Digital Age', 'the-vital-role-of-staying-informed-in-the-digital-age', '<p><span style=\"color: rgb(104, 116, 127); font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">Summernote uses the Open Source libraries jQuery and Bootstrap, if you are using the Boostrap 3 or 4 versions of Summernote, or just jQuery if you use the Lite version of Summernote. Include the Following code in the</span><span style=\"color: rgb(104, 116, 127); font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">&nbsp;ar<span style=\"background-color: rgb(255, 0, 0);\">ea of your HTML page</span></span><span style=\"background-color: rgb(255, 0, 0);\"><span style=\"font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); color: rgb(104, 116, 127);\" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">Summernote uses the Open Source libraries jQuery and Bootstrap, if you are using the Boostrap 3 or 4 versions of Summernote, or just jQuery if you use the Lite version of Summernote. Include the Following code in the</span><span style=\"font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); color: rgb(104, 116, 127);\" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">&nbsp;area of your HTML page</span><span style=\"font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); color: rgb(104, 116, 127);\" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">Summernote uses the Open Source libraries jQuery and Bootstrap, if </span></span><span style=\"background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); color: rgb(104, 116, 127); font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">you are using the Boostrap 3 or 4 versions of Summernote, or just jQuery if you use the Lite version of Summernote. Include the Following code in the</span><span style=\"background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); color: rgb(104, 116, 127); font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">&nbsp;area of your HTML page</span></p><p><span style=\"color: rgb(104, 116, 127); font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">Summernote uses the Open Source libraries jQuery and Bootstrap, if you are using the Boostrap 3 or 4 versions of Summernote, or just jQuery if you use the Lite version of Summernote. Include the Following code in the</span><span style=\"color: rgb(104, 116, 127); font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">&nbsp;area of your HTML page</span><span style=\"background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); color: rgb(104, 116, 127); font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\"><br></span><br></p>', '1696602630.png', 'The Vital Role of Staying Informed in the Digital Age | Shahala', 'Learn how to navigate a complex landscape, distinguish reliable sources, and strike a balance for a healthier news consumption.', 'Staying informed News consumption Digital age Reliable news sources Information overload Civic ', 0, '2023-10-06 10:30:30'),
(9, 'This is a new title', 'the-vital-role-of-staying-informed-in-the-digital-age', '<p><span style=\"color: rgb(104, 116, 127); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-size: 14px;\">Summernote uses the Open Source libraries jQuery and Bootstrap, if you are using the Boostrap 3 or 4 versions of Summernote, or just jQuery if you use the Lite version of Summernote. Include the Following code in the</span><span style=\"color: rgb(104, 116, 127); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-size: 14px;\"> area of your HTML page</span><span style=\"background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); color: rgb(104, 116, 127); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-size: 14px;\">Summernote uses the Open Source libraries jQuery and Bootstrap, if you are using the Boostrap 3 or 4 versions of Summernote, or just jQuery if you use the Lite version of Summernote. Include the Following code in the</span><span style=\"background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); color: rgb(104, 116, 127); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-size: 14px;\"> area of your HTML page</span><span style=\"background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); color: rgb(104, 116, 127); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-size: 14px;\">Summernote uses the Open Source libraries jQuery and Bootstrap, if you are using the Boostrap 3 or 4 versions of Summernote, or just jQuery if you use the Lite version of Summernote. Include the Following code in the</span><span style=\"background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); color: rgb(104, 116, 127); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-size: 14px;\"> area of your HTML page</span></p><p><span style=\"color: rgb(104, 116, 127); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-size: 14px;\">Summernote uses the Open Source libraries jQuery and Bootstrap, if you are using the Boostrap 3 or 4 versions of Summernote, or just jQuery if you use the Lite version of Summernote. Include the Following code in the</span><span style=\"color: rgb(104, 116, 127); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-size: 14px;\"> area of your HTML page</span><span style=\"background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); color: rgb(104, 116, 127); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-size: 14px;\"><br></span><br></p>', '1696602630.png', 'The Vital Role of Staying Informed in the Digital Age | Shahala', 'Learn how to navigate a complex landscape, distinguish reliable sources, and strike a balance for a healthier news consumption.', 'Staying informed News consumption Digital age Reliable news sources Information overload Civic ', 0, '2023-10-06 10:30:30'),
(10, ' Digital Age of the universe', 'the-vital-role-of-staying-informed-in-the-digital-age', '<p><span style=\"color: rgb(104, 116, 127); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-size: 14px;\">Summernote uses the Open Source libraries jQuery and Bootstrap, if you are using the Boostrap 3 or 4 versions of Summernote, or just jQuery if you use the Lite version of Summernote. Include the Following code in the</span><span style=\"color: rgb(104, 116, 127); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-size: 14px;\"> area of your HTML page</span><span style=\"background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); color: rgb(104, 116, 127); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-size: 14px;\">Summernote uses the Open Source libraries jQuery and Bootstrap, if you are using the Boostrap 3 or 4 versions of Summernote, or just jQuery if you use the Lite version of Summernote. Include the Following code in the</span><span style=\"background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); color: rgb(104, 116, 127); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-size: 14px;\"> area of your HTML page</span><span style=\"background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); color: rgb(104, 116, 127); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-size: 14px;\">Summernote uses the Open Source libraries jQuery and Bootstrap, if you are using the Boostrap 3 or 4 versions of Summernote, or just jQuery if you use the Lite version of Summernote. Include the Following code in the</span><span style=\"background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); color: rgb(104, 116, 127); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-size: 14px;\"> area of your HTML page</span></p><p><span style=\"color: rgb(104, 116, 127); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-size: 14px;\">Summernote uses the Open Source libraries jQuery and Bootstrap, if you are using the Boostrap 3 or 4 versions of Summernote, or just jQuery if you use the Lite version of Summernote. Include the Following code in the</span><span style=\"color: rgb(104, 116, 127); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-size: 14px;\"> area of your HTML page</span><span style=\"background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); color: rgb(104, 116, 127); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-size: 14px;\"><br></span><br></p>', '1696602630.png', 'The Vital Role of Staying Informed in the Digital Age | Shahala', 'Learn how to navigate a complex landscape, distinguish reliable sources, and strike a balance for a healthier news consumption.', 'Staying informed News consumption Digital age Reliable news sources Information overload Civic ', 0, '2023-10-06 10:30:30'),
(11, 'Distinguish reliable sources, and strike a balance for a healthier news consumption.', 'the-vital-role-of-staying-informed-in-the-digital-age', '<p><span style=\"color: rgb(104, 116, 127); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-size: 14px;\">Summernote uses the Open Source libraries jQuery and Bootstrap, if you are using the Boostrap 3 or 4 versions of Summernote, or just jQuery if you use the Lite version of Summernote. Include the Following code in the</span><span style=\"color: rgb(104, 116, 127); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-size: 14px;\"> area of your HTML page</span><span style=\"background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); color: rgb(104, 116, 127); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-size: 14px;\">Summernote uses the Open Source libraries jQuery and Bootstrap, if you are using the Boostrap 3 or 4 versions of Summernote, or just jQuery if you use the Lite version of Summernote. Include the Following code in the</span><span style=\"background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); color: rgb(104, 116, 127); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-size: 14px;\"> area of your HTML page</span><span style=\"background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); color: rgb(104, 116, 127); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-size: 14px;\">Summernote uses the Open Source libraries jQuery and Bootstrap, if you are using the Boostrap 3 or 4 versions of Summernote, or just jQuery if you use the Lite version of Summernote. Include the Following code in the</span><span style=\"background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); color: rgb(104, 116, 127); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-size: 14px;\"> area of your HTML page</span></p><p><span style=\"color: rgb(104, 116, 127); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-size: 14px;\">Summernote uses the Open Source libraries jQuery and Bootstrap, if you are using the Boostrap 3 or 4 versions of Summernote, or just jQuery if you use the Lite version of Summernote. Include the Following code in the</span><span style=\"color: rgb(104, 116, 127); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-size: 14px;\"> area of your HTML page</span><span style=\"background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); color: rgb(104, 116, 127); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-size: 14px;\"><br></span><br></p>', '1696602630.png', 'The Vital Role of Staying Informed in the Digital Age | Shahala', 'Learn how to navigate a complex landscape, distinguish reliable sources, and strike a balance for a healthier news consumption.', 'Staying informed News consumption Digital age Reliable news sources Information overload Civic ', 0, '2023-10-06 10:30:30'),
(12, 'The Vital Role of New Title', 'the-vital-role-of-staying-informed-in-the-digital-age', '<p><span style=\"color: rgb(104, 116, 127); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">Summernote uses the Open Source libraries jQuery and Bootstrap, if you are using the Boostrap 3 or 4 versions of Summernote, or just jQuery if you use the Lite version of Summernote. Include the Following code in the</span><span style=\"color: rgb(104, 116, 127); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">&nbsp;area of your HTML page</span><span style=\"background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); color: rgb(104, 116, 127); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">Summernote uses the Open Source libraries jQuery and Bootstrap, if you are using the Boostrap 3 or 4 versions of Summernote, or just jQuery if you use the Lite version of Summernote. Include the Following code in the</span><span style=\"background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); color: rgb(104, 116, 127); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">&nbsp;area of your HTML page</span><span style=\"background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); color: rgb(104, 116, 127); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">Summernote uses the Open Source libraries jQuery and Bootstrap, if you are using the Boostrap 3 or 4 versions of Summernote, or just jQuery if you use the Lite version of Summernote. Include the Following code in the</span><span style=\"background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); color: rgb(104, 116, 127); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">&nbsp;area of your HTML page</span></p><p><span style=\"color: rgb(104, 116, 127); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">Summernote uses the Open Source libraries jQuery and Bootstrap, if you are using the Boostrap 3 or 4 versions of Summernote, or just jQuery if you use the Lite version of Summernote. Include the Following code in the</span><span style=\"color: rgb(104, 116, 127); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\">&nbsp;area of your HTML page</span><span style=\"background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align); color: rgb(104, 116, 127); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px;\"><br></span><br></p>', '1696602630.png', 'The Vital Role of Staying Informed in the Digital Age | Shahala', 'Learn how to navigate a complex landscape, distinguish reliable sources, and strike a balance for a healthier news consumption.', 'Staying informed News consumption Digital age Reliable news sources Information overload Civic ', 0, '2023-10-06 10:30:30'),
(13, 'asc', 'asv', '<p>asfcf</p>', 'C:\\Users\\karen\\Desktop\\OpenServer\\domains\\magnews\\admin\\php/../../images/posts/Blob Shape.png', 'asc', 'advv', 'adv', 0, '2023-10-17 15:51:50'),
(14, 'asc', 'asv', '<p>asfcf</p>', 'C:\\Users\\karen\\Desktop\\OpenServer\\domains\\magnews\\admin\\php/../../images/posts/Blob Shape.png', 'asc', 'advv', 'adv', 0, '2023-10-17 15:51:58'),
(15, 'asc', 'asv', '<p>asfcf</p>', 'C:\\Users\\karen\\Desktop\\OpenServer\\domains\\magnews\\admin\\php/../../images/posts/Blob Shape.png', 'asc', 'advv', 'adv', 0, '2023-10-17 15:52:42'),
(16, 'asc', 'asv', '<p>asfcf</p>', 'C:\\Users\\karen\\Desktop\\OpenServer\\domains\\magnews\\admin\\php/../../images/posts/Blob Shape.png', 'asc', 'advv', 'adv', 0, '2023-10-17 15:53:28'),
(17, 'asccccccccccccccccccccasv  afamslm kamlcalv  alsmc', ' lavsl,salv', '<p>avav amvka</p>', 'C:\\Users\\karen\\Desktop\\OpenServer\\domains\\magnews\\admin\\php/../../images/posts/case-2.png', 'asvasva', 'ava', 'asf', 0, '2023-10-17 16:11:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(191) NOT NULL,
  `lname` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `image` varchar(255) DEFAULT '1.png',
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `role_as` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `image`, `status`, `created_at`, `role_as`) VALUES
(3, 'asc', 'acas', 'asca@ass.asca', '$2y$10$TTXBD6YQ6kGeem8qa6Nv3.d05w/iVIya5YBKnA5zrFslKjmi32.sS', NULL, 0, '2023-10-14 18:40:51', 1),
(4, 'asca', 'ascasc', 'ascasc@assssas.asc', '$2y$10$A4S0z.x7Rj4/5b7kUCzbmuqeU5hxDnGbtH60YluVMrqu.BblWNj46', NULL, 0, '2023-10-14 18:46:47', 1),
(7, 'Karen', 'Ter-Makarov', 'karen.wr@mail.ru', '$2y$10$0XsRpPcjyfIZe47yAimSl..VyBN4kuluUISf8qbcTkPk7iQ9yWKE2', '1.png', 0, '2023-10-17 12:10:02', 1),
(11, 'ac', 'asc', 'acs@aasc.asc', '$2y$10$zsZQMtuius09Mzgqh0L0Ueum8wYNsgUhufX8XBVKCKPnLd31BwPUm', NULL, 0, '2023-10-17 12:33:02', 1),
(12, 'asc', 'sdv', 'ass@aff.as', '$2y$10$nPzCNajMDQA9gqzIXRXBYOmoOfhwmXnZ2YhkRfzWhQMKWpkGEVku2', NULL, 0, '2023-10-17 12:34:25', 0),
(13, 'asc', 'aca', 'db@ass.mmmmmmmmmmm', '$2y$10$EYhhoWWjdNhUMnsHAIWYzuDM91IDy2BIOg7XKfuk0l.ubRujPPEUe', '1.png', 0, '2023-10-17 12:47:08', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

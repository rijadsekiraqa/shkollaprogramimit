-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 20, 2023 at 01:32 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shkollaeprogramimit`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(1, 'Mobile Development', 'Trajnime ne Web Development'),
(8, 'Web Development', 'Hyrje ne baze te te dhenavee'),
(9, 'Software Development', 'Hyrje ne PHP OOP');

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE `description` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `paragraph` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `description`
--

INSERT INTO `description` (`id`, `title`, `paragraph`) VALUES
(1, 'stafi', 'Shkolla jone eshte e pajisur me nje staf profesional me shume vite pervoje pune dhe te deshmuar ne programim'),
(2, 'certifikime', '90% e studenteve te shkolles tone perfundojne me sukses trajnimet dhe qertifikohen'),
(4, 'teknologjite', 'Trajnimet tona konsistojnë prej materialeve dhe teknologjive më të qendrushme ne tregun nacional dhe internacional'),
(5, 'programe', 'Programi i shkolles tone eshte nje program evropian i cili kombinon pjesen teorike me pjesen praktike me projekte konkrete');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `categoryid` int NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `content` text COLLATE utf8mb4_general_ci NOT NULL,
  `author` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tags` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `published_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `categoryid`, `title`, `content`, `author`, `photo`, `tags`, `published_date`) VALUES
(1, 1, 'OOP PhP & MySQL', 'Trajnimi OOP PhP & MySQL ofron mesimin e pjeses se programimit te orientuar ne objekte dhe MySQL. Ne kuader te trajnimit perfshihet dhe projekti Blog.', 'Burim Avdiu', 'programming1.jpg', 'php,mysql', '0000-00-00 00:00:00'),
(2, 1, 'OOP PhP & Laravel', 'Trajnimii OOP PhP & Laravel ofron mesimin e pjeses se programimit te orientuar ne objekte dukee perdorur Laravel Framework . Ne kuader te trajnimit perfshihet dhe projekti CMS.', 'Tahir Hoxha', 'download.png', 'php,mysql.laravel,oop', '0000-00-00 00:00:00'),
(15, 8, 'Hyrje ne Web Development', 'Ne kete trajnim do te mesoheN bazat e programimit te bazuar ne Ueb.Studentet do te mesojne disa teknologji te Ueb-it si:Html,Css,Javascript,PHP,Mysql.', 'Rijad Sekiraqa', 'programming1.jpg', 'Html,Css,Javascript,Php,Mysql', '2023-04-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `paragraph` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `paragraph`) VALUES
(20, 'E-Learning', 'Mësimi elektronik ka ndikim pozitiv në mësim sepse fëmijët zhvillojnë koordinim më të mirë me sy dhe aftësi motorike.'),
(21, 'Trajner te certifikuar', 'Shkolla jone posedon trajner te certifikuar me gradat me te larta ne drejtimet e Shkencave Kompjuterike dhe Inxhinierise.'),
(22, 'Klasa Moderne', 'Klasa atraktive te pajisura me llaptop,pc,projektor,monitor dhe shume pajisje tjera te teknologjive te fundit.'),
(23, 'Siguria', 'Siguria ne shkollen tone eshte ne rend te pare,andaj qdo nxenes ose staf i shkolles tone eshte i sigurte ne objektin tone.'),
(24, 'Ligjerata Kreative', 'Tema me mjaft interes ku diskutohen karakteristikat e kreativitetit jo vetem ne programim por edhe ne fusha tjera.'),
(25, 'Mesim Praktik', 'Shkolla jone kombinon pjesen teorike dhe praktike.Pa marre parasysh pervojen ju do te krijoni aplikacione reale.');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int NOT NULL,
  `h5` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `p` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `h5`, `p`, `photo`) VALUES
(11, 'Web Development 4', 'Javascript,React Js,Angular Js', '2.png'),
(12, 'Web Development 3', 'Inxhinieri Softueri,Laravel,React,Microservices', 'web-development3.jpeg'),
(13, 'Web Development 2', 'Bootstrap,Git,Php OOP', 'web-development1.png'),
(14, 'Web Development 1', 'Html,Css,Javascript,Php,Mysql', 'web-development.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE `statistics` (
  `id` int NOT NULL,
  `number` int NOT NULL,
  `paragraph` varchar(50) NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`id`, `number`, `paragraph`, `icon`) VALUES
(18, 50, 'Trajnime', ''),
(120, 1000, 'Student', ''),
(121, 100, 'Studentet e Punesuar', ''),
(122, 30, 'Stafi', '');

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `id` int NOT NULL,
  `title` varchar(50) NOT NULL,
  `paragraph` varchar(50) NOT NULL,
  `review` int NOT NULL,
  `price` int NOT NULL,
  `photo` varchar(250) NOT NULL,
  `dataefillimit` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`id`, `title`, `paragraph`, `review`, `price`, `photo`, `dataefillimit`) VALUES
(2, 'Hyrje ne React JS', 'Programim', 15, 200, '1270f621-600b72f9-react-1024x680-1.png', '15 Dhjetor 2023'),
(3, 'Hyrje ne Laravel', 'Programim', 15, 120, 'laravel.png', '15 Dhjetor 2023'),
(4, 'Hyrje ne Bootstrap', 'Programim', 15, 80, '3.png', '15 Dhjetor 2023'),
(5, 'Full Stack Development', 'Programim', 13, 250, 'full-stack-web-developer1.png', '15 Dhjetor 2023'),
(6, 'Hyrje ne Angular Js', 'Programim', 20, 220, '2.png', '15 Dhjetor 2023'),
(7, 'PHP OOP & MYSQL', 'Programim', 17, 120, 'phpoop.jpg', '15 Dhjetor 2023');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `firstname` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `phone`, `email`, `password`) VALUES
(21, 'ddaf', 'afasdfdsa', '4334343434', 'admin', 'admin123'),
(22, 'assaassasasaas', 'asdadsdas', '4334343434', 'admin', 'admin123'),
(23, 'ddaf', 'afasdfdsa', '4334343434', 'admin', 'admin123'),
(24, 'sasasa', 'sasasa', '1201968373', 'admin', 'admin123'),
(26, 'sasasa', 'sasasa', '0744217257', 'admin', 'admin123'),
(28, 'sasasa', 'sasasa', '1713339264', 'admin', 'admin123'),
(29, 'sasasa', 'sasasa', '2194771624', 'admin', 'admin123'),
(30, 'sasasa', 'sasasa', '3035871727', 'admin', 'admin123'),
(36, 'sadsa', 'adsdasads', '4334343434', 'admin@hotmail.com', 'admin123'),
(37, 'rijad', 'Kastratii', '4334343434', 'admin', 'adsadsaasdsad'),
(38, 'asddsadsa', 'Kastratii', '4334343434', 'admin', 'asddsdasdas'),
(39, 'rijadd', 'Kastratii', '4334343434', 'admin', 'sasadadssasda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `description`
--
ALTER TABLE `description`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `statistics`
--
ALTER TABLE `statistics`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

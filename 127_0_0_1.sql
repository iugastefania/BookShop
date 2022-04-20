-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2021 at 01:55 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdmadeleinevionnet`
--
CREATE DATABASE IF NOT EXISTS `bdmadeleinevionnet` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bdmadeleinevionnet`;

-- --------------------------------------------------------

--
-- Table structure for table `tlmadeleinevionnet`
--

CREATE TABLE `tlmadeleinevionnet` (
  `id` int(11) NOT NULL,
  `namemadeleine` varchar(255) NOT NULL,
  `lnamemadeleine` varchar(255) NOT NULL,
  `subjectmadeleine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tlmadeleinevionnet`
--

INSERT INTO `tlmadeleinevionnet` (`id`, `namemadeleine`, `lnamemadeleine`, `subjectmadeleine`) VALUES
(1, 'fkds', 'mvvdv', 0),
(2, 'd', 'd', 0),
(3, 'a', 'a', 0),
(4, 'a', 'a', 0),
(5, 'a', 'a', 0),
(6, 'a', 'a', 0),
(7, 'a', 'a', 0),
(8, 'a', 'a', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tlmadeleinevionnet`
--
ALTER TABLE `tlmadeleinevionnet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tlmadeleinevionnet`
--
ALTER TABLE `tlmadeleinevionnet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Database: `dbcristobalbalenciaga`
--
CREATE DATABASE IF NOT EXISTS `dbcristobalbalenciaga` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dbcristobalbalenciaga`;

-- --------------------------------------------------------

--
-- Table structure for table `tbcristobalbalenciaga`
--

CREATE TABLE `tbcristobalbalenciaga` (
  `id` int(11) NOT NULL,
  `namecristobal` varchar(250) NOT NULL,
  `lnamecristobal` varchar(250) NOT NULL,
  `subjectcristobal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbcristobalbalenciaga`
--

INSERT INTO `tbcristobalbalenciaga` (`id`, `namecristobal`, `lnamecristobal`, `subjectcristobal`) VALUES
(1, 'aaa', 'aaaa', ''),
(2, 'aaa', 'aaaa', ''),
(3, 'aaa', 'aaaa', ''),
(4, 'fwee', 'fff', 'eeee'),
(5, 'dadsa', 'dassa', 'dasad'),
(6, 'f', 'f', 's'),
(7, 'a', 'a', 'a'),
(8, 'a', 'a', 'a'),
(9, 'a', 'aa', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbcristobalbalenciaga`
--
ALTER TABLE `tbcristobalbalenciaga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbcristobalbalenciaga`
--
ALTER TABLE `tbcristobalbalenciaga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Database: `db_feedback`
--
CREATE DATABASE IF NOT EXISTS `db_feedback` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_feedback`;

-- --------------------------------------------------------

--
-- Table structure for table `feedbackdior`
--

CREATE TABLE `feedbackdior` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `subject` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedbackdior`
--

INSERT INTO `feedbackdior` (`id`, `firstname`, `lastname`, `subject`) VALUES
(1, 'Ioneescu', 'Maria', 'Slabut'),
(3, 'George', 'Goj', 'Nu sunt de acord'),
(13, 'vdsds', 'vdsvd', 'vsdsd'),
(14, 'fsdfd', 'fsddsfds', 'fsdd'),
(15, 'fas', 'dsa', 'dd'),
(16, 'a', 'a', 'a'),
(17, 'aaa', 'aaaa', 'aaa'),
(18, 'aaa', 'aaaa', 'aaa'),
(19, 'a', 'a', 'a'),
(20, 'a', 'a', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedbackdior`
--
ALTER TABLE `feedbackdior`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedbackdior`
--
ALTER TABLE `feedbackdior`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Database: `db_product`
--
CREATE DATABASE IF NOT EXISTS `db_product` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_product`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(1, 'Samsung J2 Pro', '1.jpg', 100.00),
(2, 'HP Notebook', '2.jpg', 299.00),
(3, 'Panasonic T44 Lite', '3.jpg', 125.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Database: `db_register`
--
CREATE DATABASE IF NOT EXISTS `db_register` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_register`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `status`) VALUES
(2, 'andreea', '$2y$10$Qi38sEf5QFAIx.CacXgZmOjNwKaUcFO29bko/wdUwNaK22OpDph3G', 0),
(11, 'ion', '$2y$10$RJtlSak5CkjBwNrNMIwru.zP9/e7Pq7q/6iFxfTTkxliIRNRbH3Ee', 0),
(12, 'andreea1', '$2y$10$MdL2NrOG21fkBlE6f8EPsO2BG6ByYVZv6gyfELetfvmUWCSawyWQC', 0),
(13, 'ionescu', '$2y$10$U8b/lVadPM4Dn8lL6wUBp.Nnf/EULrXEenE0QCB0IjaAJFD8IsUia', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Database: `dpaulpoiret`
--
CREATE DATABASE IF NOT EXISTS `dpaulpoiret` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dpaulpoiret`;

-- --------------------------------------------------------

--
-- Table structure for table `bpaulpoiret`
--

CREATE TABLE `bpaulpoiret` (
  `id` int(11) NOT NULL,
  `namepoiret` varchar(255) NOT NULL,
  `lnamepoiret` varchar(255) NOT NULL,
  `subjectpoiret` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bpaulpoiret`
--

INSERT INTO `bpaulpoiret` (`id`, `namepoiret`, `lnamepoiret`, `subjectpoiret`) VALUES
(1, 'ana', 'dsada', ''),
(2, 'ana', 'dsada', 'dsas'),
(3, 'dsadsa', '', ''),
(4, 'Andreea', 'Cristian', 'De acord'),
(5, 'Andreea', 'Iordache', 'imi place'),
(6, 'Andreea', 'Iordache', 'imi place'),
(7, 'Andreea', 'Iordache', 'imi place'),
(8, 'Andreea', 'Iordacheeeee', 'imi place'),
(9, 'Andreea', 'Iordacheeeee', 'imi place'),
(10, 'Andreea', 'Iordacheeeee', 'imi place'),
(11, 'Andreea', 'Iordacheeeee', 'imi place'),
(12, 'Andreea', 'Iordacheeeee', 'imi place'),
(13, 'aaa', 'aaa', 'aaaa'),
(14, '', '', ''),
(15, 'Andreea', 'Iordacheeeee', 'imi place'),
(16, '', '', ''),
(17, 'a', 'a', 'a'),
(18, 'andreea', 'maria', 'imi place'),
(19, 'andreea', 'maria', 'gsg'),
(20, 'dqnwq', 'dqwdwqdw', 'dqwqq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bpaulpoiret`
--
ALTER TABLE `bpaulpoiret`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bpaulpoiret`
--
ALTER TABLE `bpaulpoiret`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Database: `elsaschiaparelli`
--
CREATE DATABASE IF NOT EXISTS `elsaschiaparelli` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `elsaschiaparelli`;

-- --------------------------------------------------------

--
-- Table structure for table `tblelsaschiaparelli`
--

CREATE TABLE `tblelsaschiaparelli` (
  `id` int(11) NOT NULL,
  `nameelsaschiaparelli` varchar(255) NOT NULL,
  `lnameelsaschiaparelli` varchar(255) NOT NULL,
  `subjectelsaschiaparelli` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblelsaschiaparelli`
--

INSERT INTO `tblelsaschiaparelli` (`id`, `nameelsaschiaparelli`, `lnameelsaschiaparelli`, `subjectelsaschiaparelli`) VALUES
(1, 'casas', 'casacs', 'csasacsaa'),
(2, 'gsdvsd', 'fdss', 'fsdds'),
(3, 'a', 'd', 'd'),
(4, 'a', 'a', 'a'),
(5, 'a', 'a', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblelsaschiaparelli`
--
ALTER TABLE `tblelsaschiaparelli`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblelsaschiaparelli`
--
ALTER TABLE `tblelsaschiaparelli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Database: `gabriellechanel`
--
CREATE DATABASE IF NOT EXISTS `gabriellechanel` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `gabriellechanel`;

-- --------------------------------------------------------

--
-- Table structure for table `tblgabriellechanel`
--

CREATE TABLE `tblgabriellechanel` (
  `id` int(11) NOT NULL,
  `namegabriellechanel` varchar(255) NOT NULL,
  `lnamegabriellechanel` varchar(255) NOT NULL,
  `subjectgabriellechanel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblgabriellechanel`
--

INSERT INTO `tblgabriellechanel` (`id`, `namegabriellechanel`, `lnamegabriellechanel`, `subjectgabriellechanel`) VALUES
(1, 'csas', 'csasa', 'cascsa'),
(2, 'DAWDA', 'sss', 'gsgssd'),
(3, 'g', 'r', 'g'),
(4, 'a', 'a', 'a'),
(5, 'a', 'a', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblgabriellechanel`
--
ALTER TABLE `tblgabriellechanel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblgabriellechanel`
--
ALTER TABLE `tblgabriellechanel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Database: `items`
--
CREATE DATABASE IF NOT EXISTS `items` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `items`;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `fname`, `description`, `images`) VALUES
(12, '\"DIOR - CHRISTIAN DIOR\"', '29.99$', 'all_images/a9922df4b43cdf5230b12cc75bf7bfd2fwewefw.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `dop` datetime NOT NULL DEFAULT current_timestamp(),
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `qty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `dop`, `name`, `email`, `qty`) VALUES
(2, '2021-11-04 20:51:33', 'Andreea', 'Enescu@iii.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `dop` (`dop`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Database: `itemscb`
--
CREATE DATABASE IF NOT EXISTS `itemscb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `itemscb`;

-- --------------------------------------------------------

--
-- Table structure for table `bookscb`
--

CREATE TABLE `bookscb` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookscb`
--

INSERT INTO `bookscb` (`id`, `fname`, `description`, `images`) VALUES
(1, '\"Balenciaga and His Legacy\"', '86.99$', 'all_images/496fee08a9e248ff9039d5d893661977fewgweg.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `orderscb`
--

CREATE TABLE `orderscb` (
  `order_id` int(11) NOT NULL,
  `dop` datetime NOT NULL DEFAULT current_timestamp(),
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `qty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookscb`
--
ALTER TABLE `bookscb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderscb`
--
ALTER TABLE `orderscb`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `dop` (`dop`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookscb`
--
ALTER TABLE `bookscb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orderscb`
--
ALTER TABLE `orderscb`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Database: `itemses`
--
CREATE DATABASE IF NOT EXISTS `itemses` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `itemses`;

-- --------------------------------------------------------

--
-- Table structure for table `bookses`
--

CREATE TABLE `bookses` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookses`
--

INSERT INTO `bookses` (`id`, `fname`, `description`, `images`) VALUES
(1, '\"Schiaparelli and the Artists\"', '56.00$', 'all_images/2107ed87ccd4d537fc6673b3936b21e09780847860456.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orderses`
--

CREATE TABLE `orderses` (
  `order_id` int(11) NOT NULL,
  `dop` datetime NOT NULL DEFAULT current_timestamp(),
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `qty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookses`
--
ALTER TABLE `bookses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderses`
--
ALTER TABLE `orderses`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `dop` (`dop`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookses`
--
ALTER TABLE `bookses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orderses`
--
ALTER TABLE `orderses`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Database: `itemsgc`
--
CREATE DATABASE IF NOT EXISTS `itemsgc` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `itemsgc`;

-- --------------------------------------------------------

--
-- Table structure for table `booksgc`
--

CREATE TABLE `booksgc` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booksgc`
--

INSERT INTO `booksgc` (`id`, `fname`, `description`, `images`) VALUES
(1, '\"The Queen of Paris: A Novel of Coco Chanel\"', '99.99$', 'all_images/0d15a566455db2a21b0ce2029cacc75c9781982546847.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ordersgc`
--

CREATE TABLE `ordersgc` (
  `order_id` int(11) NOT NULL,
  `dop` datetime NOT NULL DEFAULT current_timestamp(),
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `qty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booksgc`
--
ALTER TABLE `booksgc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordersgc`
--
ALTER TABLE `ordersgc`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `dop` (`dop`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booksgc`
--
ALTER TABLE `booksgc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ordersgc`
--
ALTER TABLE `ordersgc`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Database: `itemsjl`
--
CREATE DATABASE IF NOT EXISTS `itemsjl` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `itemsjl`;

-- --------------------------------------------------------

--
-- Table structure for table `booksjl`
--

CREATE TABLE `booksjl` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booksjl`
--

INSERT INTO `booksjl` (`id`, `fname`, `description`, `images`) VALUES
(1, '\"Jeanne Lanvin\"', '38.99$', 'all_images/087cb5cab9851d1ea612ba0ed0a6bc3e9780847829538.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ordersjl`
--

CREATE TABLE `ordersjl` (
  `order_id` int(11) NOT NULL,
  `dop` datetime NOT NULL DEFAULT current_timestamp(),
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `qty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booksjl`
--
ALTER TABLE `booksjl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordersjl`
--
ALTER TABLE `ordersjl`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `dop` (`dop`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booksjl`
--
ALTER TABLE `booksjl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ordersjl`
--
ALTER TABLE `ordersjl`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Database: `itemsmv`
--
CREATE DATABASE IF NOT EXISTS `itemsmv` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `itemsmv`;

-- --------------------------------------------------------

--
-- Table structure for table `booksmv`
--

CREATE TABLE `booksmv` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booksmv`
--

INSERT INTO `booksmv` (`id`, `fname`, `description`, `images`) VALUES
(1, '\"Madeleine Vionnet\"', '26.99$', 'all_images/43a4725a4484ef46572226ce0570e28e41EufWvED2L.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ordersmv`
--

CREATE TABLE `ordersmv` (
  `order_id` int(11) NOT NULL,
  `dop` datetime NOT NULL DEFAULT current_timestamp(),
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `qty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ordersmv`
--

INSERT INTO `ordersmv` (`order_id`, `dop`, `name`, `email`, `qty`) VALUES
(2, '2021-11-09 20:27:48', 'a', 'a@a', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booksmv`
--
ALTER TABLE `booksmv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordersmv`
--
ALTER TABLE `ordersmv`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `dop` (`dop`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booksmv`
--
ALTER TABLE `booksmv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ordersmv`
--
ALTER TABLE `ordersmv`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Database: `itemspp`
--
CREATE DATABASE IF NOT EXISTS `itemspp` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `itemspp`;

-- --------------------------------------------------------

--
-- Table structure for table `bookspp`
--

CREATE TABLE `bookspp` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookspp`
--

INSERT INTO `bookspp` (`id`, `fname`, `description`, `images`) VALUES
(5, 'fewe', '29.99$', 'all_images/dc013fa4c95c193525e00947ed41811e6f7f2d956efb01211a36a24b939017e9King-of-fashion.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orderspp`
--

CREATE TABLE `orderspp` (
  `order_id` int(11) NOT NULL,
  `dop` datetime NOT NULL DEFAULT current_timestamp(),
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `qty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderspp`
--

INSERT INTO `orderspp` (`order_id`, `dop`, `name`, `email`, `qty`) VALUES
(4, '2021-11-10 18:06:21', 'aaa', 'a@a', 2),
(5, '2021-11-15 14:15:53', 'andreea maria', 'pratologie@gmail.com', 3),
(6, '2021-11-17 18:05:56', 'andreea', 'aya@yaaa', 4),
(7, '2021-11-19 17:13:48', 'feewwew', 'dqfwq@aa', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookspp`
--
ALTER TABLE `bookspp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderspp`
--
ALTER TABLE `orderspp`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `dop` (`dop`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookspp`
--
ALTER TABLE `bookspp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orderspp`
--
ALTER TABLE `orderspp`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Database: `itemssl`
--
CREATE DATABASE IF NOT EXISTS `itemssl` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `itemssl`;

-- --------------------------------------------------------

--
-- Table structure for table `bookssl`
--

CREATE TABLE `bookssl` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookssl`
--

INSERT INTO `bookssl` (`id`, `fname`, `description`, `images`) VALUES
(1, '\"Yves Saint Laurent\"', '40.00$', 'all_images/40a01c3f300dfee3b795717d8ebde83131OzEogb-RS._SX420_BO1,204,203,200_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orderssl`
--

CREATE TABLE `orderssl` (
  `order_id` int(11) NOT NULL,
  `dop` datetime NOT NULL DEFAULT current_timestamp(),
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `qty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookssl`
--
ALTER TABLE `bookssl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderssl`
--
ALTER TABLE `orderssl`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `dop` (`dop`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookssl`
--
ALTER TABLE `bookssl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orderssl`
--
ALTER TABLE `orderssl`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Database: `jeannelanvin`
--
CREATE DATABASE IF NOT EXISTS `jeannelanvin` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `jeannelanvin`;

-- --------------------------------------------------------

--
-- Table structure for table `tbljeannelanvin`
--

CREATE TABLE `tbljeannelanvin` (
  `id` int(11) NOT NULL,
  `namejeannelanvin` varchar(250) NOT NULL,
  `lnamejeannelanvin` varchar(250) NOT NULL,
  `subjectjeannelanvin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbljeannelanvin`
--

INSERT INTO `tbljeannelanvin` (`id`, `namejeannelanvin`, `lnamejeannelanvin`, `subjectjeannelanvin`) VALUES
(1, 'aa', 'dsadsd', 'ffffew'),
(2, 'sss', 'ssss', 'saSA'),
(3, 'xass', 'xsa', 'xsaxs'),
(4, 'sss', 'ssss', 'sss'),
(5, 'aa', 'aaa', 'aaa'),
(6, 'Andrei', 'Cristian', 'apreciez'),
(7, 'a', 'a', 'a'),
(8, '', '', ''),
(9, 'a', 'a', 'a'),
(10, 'a', 'a', 'a'),
(11, 'a', 'a', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbljeannelanvin`
--
ALTER TABLE `tbljeannelanvin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbljeannelanvin`
--
ALTER TABLE `tbljeannelanvin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Database: `laurent`
--
CREATE DATABASE IF NOT EXISTS `laurent` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `laurent`;

-- --------------------------------------------------------

--
-- Table structure for table `tblsaint`
--

CREATE TABLE `tblsaint` (
  `id` int(11) NOT NULL,
  `namesl` varchar(255) NOT NULL,
  `lnamesl` varchar(255) NOT NULL,
  `subjectsj` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblsaint`
--

INSERT INTO `tblsaint` (`id`, `namesl`, `lnamesl`, `subjectsj`) VALUES
(1, 'fsdfds', 'fdsd', 'fdssdsfs'),
(2, 'ljl', 'jj', 'jjj'),
(3, 'a', 'a', 'a'),
(4, 'a', 'a', 'a'),
(5, 'a', 'a', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblsaint`
--
ALTER TABLE `tblsaint`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblsaint`
--
ALTER TABLE `tblsaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"db_register\",\"table\":\"users\"},{\"db\":\"items\",\"table\":\"books\"},{\"db\":\"itemspp\",\"table\":\"bookspp\"},{\"db\":\"itemssl\",\"table\":\"bookssl\"},{\"db\":\"itemses\",\"table\":\"bookses\"},{\"db\":\"itemsgc\",\"table\":\"booksgc\"},{\"db\":\"itemsmv\",\"table\":\"booksmv\"},{\"db\":\"itemsjl\",\"table\":\"booksjl\"},{\"db\":\"itemscb\",\"table\":\"bookscb\"},{\"db\":\"itemspp\",\"table\":\"orderspp\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2021-11-22 12:52:51', '{\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `registeradmin`
--
CREATE DATABASE IF NOT EXISTS `registeradmin` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `registeradmin`;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', '$2y$10$y8xpaIWc7FKWn/jBVI78U.1VL0m4a4avqCyT6210SdG8QYe/ghjMO', '2021-11-03 13:47:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

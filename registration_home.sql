-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 26, 2018 at 01:29 PM
-- Server version: 10.0.33-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 7.2.2-3+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `registration_home`
--

CREATE TABLE `registration_home` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `career` varchar(100) NOT NULL,
  `acadamic` varchar(100) NOT NULL,
  `personal` varchar(100) NOT NULL,
  `declaration` varchar(100) NOT NULL,
  `Upload` varchar(100) NOT NULL,
  `tmp_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration_home`
--

INSERT INTO `registration_home` (`id`, `name`, `designation`, `phone`, `email`, `career`, `acadamic`, `personal`, `declaration`, `Upload`, `tmp_name`) VALUES
(69, 'rrrrrrrrrrrrrr ', 'qqqqqqqqqqqqqqq', 1234567890, 's@mail.com', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'uytredfghjshdvchvadsjcvadjcv', 'nnnnnnnnnnnnnnnnnnnn', 'ooooooooooooooo', '', ''),
(70, 'rrrrrrrrrrrrrr ', 'qqqqqqqqqqqqqqq', 1234567890, 's@mail.com', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'uytredfghjshdvchvadsjcvadjcv', 'nnnnnnnnnnnnnnnnnnnn', 'ooooooooooooooo', '', ''),
(71, 'rrrrrrrrrrrrrr ', 'qqqqqqqqqqqqqqq', 1234567890, 's@mail.com', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'uytredfghjshdvchvadsjcvadjcv', 'nnnnnnnnnnnnnnnnnnnn', 'ooooooooooooooo', '', ''),
(72, 'rrrrrrrrrrrrrr ', 'qqqqqqqqqqqqqqq', 1234567890, 's@mail.com', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'uytredfghjshdvchvadsjcvadjcv', 'nnnnnnnnnnnnnnnnnnnn', 'ooooooooooooooo', '', ''),
(73, 'rrrrrrrrrrrrrr ', 'qqqqqqqqqqqqqqq', 1234567890, 's@mail.com', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'uytredfghjshdvchvadsjcvadjcv', 'nnnnnnnnnnnnnnnnnnnn', 'ooooooooooooooo', '', ''),
(74, 'rrrrrrrrrrrrrr ', 'qqqqqqqqqqqqqqq', 1234567890, 's@mail.com', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'uytredfghjshdvchvadsjcvadjcv', 'nnnnnnnnnnnnnnnnnnnn', 'ooooooooooooooo', '', ''),
(75, 'rrrrrrrrrrrrrr ', 'qqqqqqqqqqqqqqq', 1234567890, 's@mail.com', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'uytredfghjshdvchvadsjcvadjcv', 'nnnnnnnnnnnnnnnnnnnn', 'ooooooooooooooo', '', ''),
(76, 'rrrrrrrrrrrrrr ', 'qqqqqqqqqqqqqqq', 1234567890, 's@mail.com', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'uytredfghjshdvchvadsjcvadjcv', 'nnnnnnnnnnnnnnnnnnnn', 'ooooooooooooooo', '', ''),
(77, 'rrrrrrrrrrrrrr ', 'qqqqqqqqqqqqqqq', 1234567890, 'fbdbdbbdgbdbdb@mail.com', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'asdfg', 'ssssssssssssssssssss', 'cccccccccccccccccccccccccccccc', '', ''),
(78, 'rrrrrrrrrrrrrr ', 'qqqqqqqqqqqqqqq', 1234567890, 'fbdbdbbdgbdbdb@mail.com', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'asdfg', 'ssssssssssssssssssss', 'cccccccccccccccccccccccccccccc', '', ''),
(79, 'aaaaaaaaaaaaaaaa ', 'qqqqqqqqqqqqqqq', 1234567890, 's@mail.com', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'asdfg', 'qqqqqqqqqqqqqqqqqqq', 'wwww', '', ''),
(80, 'test ', 'test', 1234567890, 'fbdbdbbdgbdbdb@mail.com', 'vvvvvvvvv', 'vvvvvvvvv', 'rrrrrrrrrrrrr', 'ttttttttttttt', '', ''),
(81, 'test ', 'test', 1234567890, 'fbdbdbbdgbdbdb@mail.com', 'vvvvvvvvv', 'vvvvvvvvv', 'rrrrrrrrrrrrr', 'ttttttttttttt', '', ''),
(82, 'test ', 'test', 1234567890, 'fbdbdbbdgbdbdb@mail.com', 'vvvvvvvvv', 'vvvvvvvvv', 'rrrrrrrrrrrrr', 'ttttttttttttt', '', ''),
(83, 'test ', 'test', 1234567890, 'fbdbdbbdgbdbdb@mail.com', 'vvvvvvvvv', 'vvvvvvvvv', 'rrrrrrrrrrrrr', 'ttttttttttttt', '', ''),
(84, 'aaaaaaaaaaaaaaaa ', 'qqqqqqqqqqqqqqq', 1234567890, 's@mail.com', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'asdfg', 'egrsgwrgergheh', 'hygfd', '', ''),
(85, 'aaaaaaaaaaaaaaaa ', 'qqqqqqqqqqqqqqq', 1234567890, 's@mail.com', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'asdfg', 'egrsgwrgergheh', 'hygfd', '', ''),
(86, 'ssssss ', 'ddddddddddddddd', 987654321, 's@mail.com', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'asdfg', 'ddddd', 'fffff', '', ''),
(87, 'aaaaaaaaaaaaaaaa ', 'qqqqqqqqqqqqqqq', 1234567890, 's@mail.com', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'uytredfghjshdvchvadsjcvadjcv', 'poiuytrewdf', 'ccccccccccccccccc', '', ''),
(88, 'rrrrrrrrrrrrrr ', 'qqqqqqqqqqqqqqq', 1234567890, 'fbdbdbbdgbdbdb@mail.com', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'asdfg', 'bbbbbbbbbbbbbb', 'ccccccccccccccccc', '', ''),
(89, 'rrrrrrrrrrrrrr ', 'qqqqqqqqqqqqqqq', 1234567890, 'fbdbdbbdgbdbdb@mail.com', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'asdfg', 'bbbbbbbbbbbbbb', 'ccccccccccccccccc', '', ''),
(90, 'aaaaaaaaaaaaaaaa ', 'qqqqqqqqqqqqqqq', 1234567890, 'fbdbdbbdgbdbdb@mail.com', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'asdfg', 'egrsgwrgergheh', 'ccccccccccccccccc', '', ''),
(91, 'aaaaaaaaaaaaaaaa ', 'qqqqqqqqqqqqqqq', 1234567890, 'fbdbdbbdgbdbdb@mail.com', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'asdfg', 'egrsgwrgergheh', 'ccccccccccccccccc', 'aaaaaaaaaaaaaaaa26-02-2018desktop-nature-wallpaper-hd-free-download.jpg', ''),
(92, 'rrrrrrrrrrrrrr ', 'hhhhhhhhhhhhhhhhhhh', 1234567890, 's@mail.com', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'uytredfghjshdvchvadsjcvadjcv', 'egrsgwrgergheh', 'ccccccccccccccccc', 'rrrrrrrrrrrrrr26-02-2018desktop-nature-wallpaper-hd-free-download.jpg', ''),
(93, 'aaaaaaaaaaaaaaaa ', 'qqqqqqqqqqqqqqq', 1234567890, 'fbdbdbbdgbdbdb@mail.com', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'asdfg', 'vvvvvvvvvvvvvvvvvvvvvvvvvvvvvv', 'hygfd', 'aaaaaaaaaaaaaaaa26-02-2018Football-Wallpapers-nike.jpg', ''),
(94, 'aaaaaaaaaaaaaaaa ', 'qqqqqqqqqqqqqqq', 1234567890, 'fbdbdbbdgbdbdb@mail.com', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'asdfg', 'vvvvvvvvvvvvvvvvvvvvvvvvvvvvvv', 'hygfd', 'aaaaaaaaaaaaaaaa26-02-2018Football-Wallpapers-nike.jpg', ''),
(95, 'aaaaaaaaaaaaaaaa ', 'qqqqqqqqqqqqqqq', 1234567890, 's@mail.com', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'uytredfghjshdvchvadsjcvadjcv', 'xxxxxxxxxxxxxxx', 'ccccccccccccccccc', 'aaaaaaaaaaaaaaaa26-02-2018desktop-nature-wallpaper-hd-free-download.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration_home`
--
ALTER TABLE `registration_home`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration_home`
--
ALTER TABLE `registration_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

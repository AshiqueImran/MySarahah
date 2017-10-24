-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- হোষ্ট: 127.0.0.1
-- তৈরী করতে ব্যবহৃত সময়: অক্ট 09, 2017 at 06:18 ?????????
-- সার্ভার সংস্করন: 10.1.13-MariaDB
-- পিএইছপির সংস্করন: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- ডাটাবেইজ: `mydb`
--

-- --------------------------------------------------------

--
-- টেবলের জন্য টেবলের গঠন `datatable`
--

CREATE TABLE `datatable` (
  `Id` int(11) NOT NULL,
  `Hint` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Comment` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Ip` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- টেবলের জন্য তথ্য স্তুপ করছি `datatable`
--

INSERT INTO `datatable` (`Id`, `Hint`, `Comment`, `Ip`, `datetime`) VALUES
(1, 'wellwisher', 'you are so cute.', '103.49.168.26', '2017-10-09 10:16:27'),
(2, 'guess me', 'তোমার এখন কোন খবর পাই না কেন? ', '103.49.168.26', '2017-10-09 10:16:27'),
(3, 'sabbir', 'tui onk valo re dst.', '::2', '2017-10-09 10:16:27'),
(4, 'sujon', 'koi thakish vai ekhn tui.khuje pai na .', '::2', '2017-10-09 10:16:27'),
(5, 'Sohel', 'kemn acho bondhu?', '::2', '2017-10-09 10:16:27'),
(6, 'Pial', 'Tui ekta pocha!', '::1', '2017-10-09 10:16:27');

--
-- স্তুপকৃত টেবলের ইনডেক্স
--

--
-- টেবিলের ইনডেক্সসমুহ `datatable`
--
ALTER TABLE `datatable`
  ADD PRIMARY KEY (`Id`);

--
-- স্তুপকৃত টেবলের জন্য স্বয়ক্রীয় বর্দ্ধিত মান (AUTO_INCREMENT)
--

--
-- টেবলের জন্য স্বয়ক্রীয় বর্দ্ধিত মান (AUTO_INCREMENT) `datatable`
--
ALTER TABLE `datatable`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

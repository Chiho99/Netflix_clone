-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 14, 2019 at 07:57 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reeceflix`
--

-- --------------------------------------------------------

--
-- Table structure for table `entities`
--

CREATE TABLE `entities` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `thumbnail` varchar(250) NOT NULL,
  `preview` varchar(250) NOT NULL,
  `categoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entities`
--

INSERT INTO `entities` (`id`, `name`, `thumbnail`, `preview`, `categoryId`) VALUES
(1, 'Friends', 'entities/thumbnails-real-images/friends.jpg', 'entities/previews/1.mp4', 3),
(3, 'The Simpsons', 'entities/thumbnails-real-images/thesimpsons.jpg', 'entities/previews/6.mp4', 20),
(4, 'Toy Story', 'entities/thumbnails-real-images/toystory.jpg', 'entities/previews/1.mp4', 13),
(45, 'Inbetweeners', 'entities/thumbnails-real-images/inbetw.jpg', 'entities/previews/2.mp4', 3),
(46, 'Suits', 'entities/thumbnails-real-images/Suits.jpg', 'entities/previews/3.mp4', 4),
(47, 'Captain Underpants', 'entities/thumbnails-real-images/cu.jpg', 'entities/previews/4.mp4', 13),
(48, 'Brooklyn Nine-Nine', 'entities/thumbnails-real-images/bnn.jpg', 'entities/previews/5.mp4', 3),
(49, 'That 70s Show', 'entities/thumbnails-real-images/tss.jpg', 'entities/previews/6.mp4', 3),
(50, 'Pokemon', 'entities/thumbnails-real-images/pok.jpg', 'entities/previews/2.mp4', 20),
(51, 'Spongebob Squarepants', 'entities/thumbnails-real-images/sbsp.jpg', 'entities/previews/3.mp4', 20),
(52, 'Futurama', 'entities/thumbnails-real-images/fut.jpg', 'entities/previews/1.mp4', 20),
(53, 'Johnny Bravo', 'entities/thumbnails-real-images/jb.jpg', 'entities/previews/4.mp4', 20),
(54, 'Teenage Mutant Ninja Turtles', 'entities/thumbnails-real-images/ninj.jpg', 'entities/previews/5.mp4', 20),
(55, 'Power Puff Girls', 'entities/thumbnails-real-images/ppg.jpg', 'entities/previews/6.mp4', 20),
(56, 'Teen Titans Go', 'entities/thumbnails-real-images/ttg.jpg', 'entities/previews/2.mp4', 20),
(57, 'Jurassic Park', 'entities/thumbnails-real-images/jp.jpg', 'entities/previews/3.mp4', 9),
(58, 'Grease', 'entities/thumbnails-real-images/grease.jpg', 'entities/previews/4.mp4', 17),
(59, 'Paddington Bear', 'entities/thumbnails-real-images/pb.jpg', 'entities/previews/5.mp4', 13),
(60, 'Santa Clause', 'entities/thumbnails-real-images/santa.jpg', 'entities/previews/1.mp4', 18),
(61, 'Monster Family', 'entities/thumbnails-real-images/monsterfamily.jpg', 'entities/previews/6.mp4', 13),
(62, 'Top Gun', 'entities/thumbnails-real-images/tg.jpg', 'entities/previews/2.mp4', 1),
(63, 'Home Alone', 'entities/thumbnails-real-images/ha.jpg', 'entities/previews/3.mp4', 18),
(64, 'The Grinch', 'entities/thumbnails-real-images/gr.jpg', 'entities/previews/4.mp4', 18),
(65, 'National Lampoon\'s Christmas Vacation', 'entities/thumbnails-real-images/la.jpg', 'entities/previews/5.mp4', 18),
(66, 'Elf', 'entities/thumbnails-real-images/elf.jpg', 'entities/previews/6.mp4', 18),
(67, 'Fred Claus', 'entities/thumbnails-real-images/fc.jpg', 'entities/previews/2.mp4', 18),
(68, 'Jaws', 'entities/thumbnails-real-images/jaws.jpg', 'entities/previews/3.mp4', 9),
(69, 'Live Die Repeat', 'entities/thumbnails-real-images/ldr.jpg', 'entities/previews/4.mp4', 9),
(70, 'Into the Storm', 'entities/thumbnails-real-images/its.jpg', 'entities/previews/1.mp4', 9),
(81, 'Mission Impossible', 'entities/thumbnails-real-images/mi.jpg', 'entities/previews/5.mp4', 1),
(82, 'Never Back Down', 'entities/thumbnails-real-images/nbd.jpg', 'entities/previews/6.mp4', 1),
(83, 'Mechanic', 'entities/thumbnails-real-images/mec.jpg', 'entities/previews/2.mp4', 1),
(84, 'Need for Speed', 'entities/thumbnails-real-images/nfs.jpg', 'entities/previews/3.mp4', 1),
(85, 'Gravity', 'entities/thumbnails-real-images/gra.jpg', 'entities/previews/4.mp4', 7),
(86, 'Step Brothers', 'entities/thumbnails-real-images/sb.jpg', 'entities/previews/5.mp4', 3),
(87, 'Game of Thrones', 'entities/thumbnails-real-images/got.jpg', 'entities/previews/1.mp4', 4),
(88, 'Dark Money', 'entities/thumbnails-real-images/dm.jpg', 'entities/previews/6.mp4', 4),
(89, 'Yellowstone', 'entities/thumbnails-real-images/yel.jpg', 'entities/previews/2.mp4', 4),
(90, 'Manifest', 'entities/thumbnails-real-images/man.jpg', 'entities/previews/3.mp4', 4),
(91, 'The Sound of Music', 'entities/thumbnails-real-images/som.jpg', 'entities/previews/4.mp4', 17),
(92, 'Hairspray', 'entities/thumbnails-real-images/hs.jpg', 'entities/previews/1.mp4', 17),
(93, 'Believe', 'entities/thumbnails-real-images/bel.jpg', 'entities/previews/5.mp4', 17),
(94, 'Chris Brown: Till I Die', 'entities/thumbnails-real-images/tid.jpg', 'entities/previews/6.mp4', 17),
(95, 'Men in Black', 'entities/thumbnails-real-images/mib.jpg', 'entities/previews/2.mp4', 7),
(96, 'Interstellar', 'entities/thumbnails-real-images/int.jpg', 'entities/previews/3.mp4', 7),
(97, 'Transformers', 'entities/thumbnails-real-images/tra.jpg', 'entities/previews/1.mp4', 7),
(98, 'Cloudy with a Chance of Meatballs', 'entities/thumbnails-real-images/cwc.jpg', 'entities/previews/4.mp4', 13),
(99, 'District 9', 'entities/thumbnails-real-images/d9.jpg', 'entities/previews/5.mp4', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entities`
--
ALTER TABLE `entities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryId` (`categoryId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entities`
--
ALTER TABLE `entities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `entities`
--
ALTER TABLE `entities`
  ADD CONSTRAINT `entities_ibfk_1` FOREIGN KEY (`categoryId`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

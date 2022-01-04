-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 04, 2022 at 06:55 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `b92vesti`
--

-- --------------------------------------------------------

--
-- Table structure for table `vesti`
--

DROP TABLE IF EXISTS `vesti`;
CREATE TABLE IF NOT EXISTS `vesti` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `author` varchar(150) NOT NULL,
  `tekst` text NOT NULL,
  `img` varchar(100) NOT NULL,
  `datum` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vesti`
--

INSERT INTO `vesti` (`id`, `author`, `tekst`, `img`, `datum`) VALUES
(1, 'Pera Perić', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse iaculis mi sed nisl malesuada, at iaculis felis porta. Integer dui.', 'img1.jpg', '2021-05-12'),
(2, 'Mika Mikić', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non lectus mattis, ultricies lacus a, consequat mi. Suspendisse diam velit.', 'img2.jpg', '2020-02-26'),
(3, 'Todor Todorović', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in libero condimentum, convallis velit vitae, convallis elit. Duis porttitor est.', 'img3.jpg', '2022-07-22'),
(4, 'Žika Žikić', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies ex ut nunc convallis, ut placerat augue luctus. Nunc molestie.', 'img4.jpg', '2020-09-27'),
(5, 'Isidora Milivojević', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut sagittis leo. Fusce nec pellentesque nibh, ut efficitur erat. Integer.', 'img5.jpg', '2021-10-12'),
(6, 'Žaklina Smiljanić', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec tellus dui. In et pharetra velit. Morbi lobortis ligula at.', 'img6.jpg', '2022-02-26'),
(7, 'Sara Vranotić', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sapien libero, dignissim sed lacus at, accumsan finibus libero. Duis quis.\r\n\r\n', 'img7.jpg', '2021-05-30'),
(8, 'Marko Marković', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam aliquam, massa in tincidunt fermentum, sem sapien convallis justo, ac semper.', 'img8.jpg', '2021-12-01'),
(9, 'Slobodan Milošević', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur laoreet odio tortor, ac euismod ligula facilisis quis. Nullam lacus lacus.', 'img9.jpg', '2022-01-19'),
(10, 'Boris Tadić', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nulla tellus, facilisis et dui nec, maximus ullamcorper dolor. Ut eu.', 'img10.jpg', '2021-06-28');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

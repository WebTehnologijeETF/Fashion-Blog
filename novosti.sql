-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2015 at 10:38 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `novosti`
--

-- --------------------------------------------------------

--
-- Table structure for table `novost`
--

CREATE TABLE IF NOT EXISTS `novost` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datum` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `autor` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `naslov` varchar(70) COLLATE utf8_slovenian_ci NOT NULL,
  `slika` text COLLATE utf8_slovenian_ci NOT NULL,
  `tekst` text COLLATE utf8_slovenian_ci NOT NULL,
  `detaljniTekst` text COLLATE utf8_slovenian_ci NOT NULL,
  `kategorija` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `novost`
--

INSERT INTO `novost` (`id`, `datum`, `autor`, `naslov`, `slika`, `tekst`, `detaljniTekst`, `kategorija`) VALUES
(1, '2015-03-23 11:23:12', 'Emina Muharemovic', 'BACK TO BUSINESS BABY', 'homePhoto1.jpg', 'It seems quit fitting that my first outfit post would be an outfit that makes me think of the world of business\r\n(and weirdly fifty shades of grey, maybe because the promo stuff is everywhere and im wearing all...', 'neki dodatni\r\ntekst ide ovdje', 'home'),
(2, '2015-03-22 10:23:12', 'Emina Muharemovic', 'KAVITA DOES LISBON - SHORT HAIR DON''T CARE', 'homePhoto2.jpg', 'One of the last outfit posts from Portugal.. and no your eyes aren''t deceiving you - my hair is SHORT! Okay so my hair isn''t actually short. I have been uh-ming and ahh-ing about cutting my hair for a while...', '', 'home'),
(3, '2015-03-18 14:43:15', 'Emina Muharemovic', 'KAVITA DOES LISBON - WHITE OUT.', 'homePhoto3.jpg', 'Another post from the lovely Lisbon, and this outfit is definitely one of my faves! It wasn''t the hottest of days when we were away, but it was still sunny, so grabbing a pair of shades and wearing a bralet with...', '', 'home'),
(4, '2015-03-10 12:23:12', 'Emina Muharemovic', 'KAVITA DOES LISBON - THE TRAMS', 'homePhoto4.jpg', 'Lisbon is known for quite a few things. From their love of fish and sardines, to the beautiful architecture, I was so excited to explore. One of the other amazing things they are known for are the old school trams...', '', 'home'),
(5, '2015-03-23 11:23:12', 'Emina Muharemovic', 'BEST DRUGSTORE SKINCARE', 'beautyPhoto1.jpg', 'As the last part of DrugstoreBeautyWeek I wanted to focus on affordable skincare. I find drugstore skincare to be very hit and miss and as someone with extremely sensitive skin.', '', 'beauty'),
(6, '2015-03-22 14:23:12', 'Emina Muharemovic', 'GETTING READY FOR SPRING', 'beautyPhoto2.jpg', 'I''m so happy Spring is almost here! I genuinely don''t think I can take much more of this gloomy weather. When the sun comes out and the winter coats go away I feel much more energetic and fresh!', '', 'beauty'),
(7, '2015-03-19 21:23:12', 'Emina Muharemovic', 'BARE MINERALS GET STARTED COMPLEXION KIT', 'beautyPhoto3.jpg', 'Mineral make up seems to be a love it or hate it thing, but I''ve always been on the "I love it!" side of the fence. I think it''s because I hate my makeup to feel heavy on my skin, especially on casual days.', '', 'beauty'),
(8, '2015-03-23 21:23:12', 'Emina Muharemovic', 'OOTD: WIDE', 'fashionPhoto1.jpg', 'While cleaning out my closet and boxes, I''m finding different items that for a long time has been forgotten. One of my favorite findings may be these jeans. I don''t know if it''s because the wide and comfortable legs, or the soft tuch. Either way it''s a fun pant!', '', 'fashion'),
(9, '2015-03-22 14:53:12', 'Emina Muharemovic', 'LONDON STREET STYLE', 'fashionPhoto2.jpg', '', '', 'fashion'),
(10, '2015-03-19 22:12:12', 'Emina Muharemovic', 'WISHLIST UPDATE', 'fashionPhoto3.jpg', '', '', 'fashion'),
(11, '2015-04-07 10:23:12', 'Emina Muharemovic', 'WAYS TO WEAR THE LATEST TRENDS', 'trendsPhoto1.jpg', '', '', 'trends'),
(12, '2015-04-06 11:13:22', 'Emina Muharemovic', 'AWARD WINNING DRESSES: MONOCHROME STYLE', 'trendsPhoto2.png', '', '', 'trends'),
(13, '2015-05-28 18:56:32', 'Emina Muharemovic', 'HOW TO SUORCE AND ADAPT CATWALK STYLES TO FASHION ', 'trendsPhoto3.png', '', '', 'trends'),
(14, '2015-04-07 10:23:12', 'Emina Muharemovic', 'A BARDOT TOP', 'wearPhoto1.png', '', '', 'wear'),
(15, '2015-04-06 10:23:12', 'Emina Muharemovic', 'THE WHITE SHIRT', 'wearPhoto2.jpg', '', '', 'wear');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

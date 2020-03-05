-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2020-03-05 09:35:39
-- 服务器版本： 10.1.38-MariaDB
-- PHP 版本： 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `movies`
--

-- --------------------------------------------------------

--
-- 表的结构 `movies`
--

CREATE TABLE `movies` (
  `profileid` int(1) NOT NULL,
  `picture` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `movielines` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `movies`
--

INSERT INTO `movies` (`profileid`, `picture`, `name`, `movielines`) VALUES
(1, 'images/icon-exoticpets.jpeg', 'Gisaengchung', 'In 2019, the film won the Golden Palm Award at the 72nd Cannes International Film Festival, which is the first time that a Korean film has won the Golden Palm Award. At the 92nd Academy Awards, Parasite won the Best Director Award, Best Original Screenplay Award, Best International Film Award, and made history the first non-English film to win the Best Film Award.'),
(2, 'images/icon-grooming.jpeg', 'Joker', 'The film was released in the United States on October 4, 2019 , and then topped the North American weekend box office list with a revenue of $ 96.2 million, setting the highest box office record of the first weekend of North American film history in October . As of November 8, 2019, the global box office of \"The Clown\" will exceed $ 957 million, becoming the most profitable change film in movie history .'),
(3, 'images/icon-health.jpg', 'Jojo Rabbit', 'The story is set during the Second World War. It tells the story of the boy Jojo and his mother living under Nazi Germany, but the mother secretly helped the innocent Jewish girl, so it also changed the story of Jojo.'),
(4, 'images/icon-nutrition.jpeg', '1917', '《1917》is a war movie produced by the American DreamWorks, directed by Sam Mendes, starring George Mackay and Dean Charles Chapman. The film will be released in the United States on January 10, 2020. The film focuses on two young British soldiers. It tells the story of two British soldiers taking risks to pass hundreds of thousands of lives across the enemy\'s territory in order to save hundreds of lives.'),
(5, 'images/icon-pestcontrol.jpeg', 'Toy Story 4', '《Toy Story 4》is the fourth in the 《Toy Story》 animated film series, directed by Josh Curry, and voiced by Tom Hanks, Annie Potts, Tim Allen, Tony Haier and others. The film was released simultaneously in North America and Mainland China on June 21, 2019. In order to let the new toy fork fork find a sense of belonging, the film embarked on a journey of adventure again and encountered various problems on the road And surprise stories'),
(6, 'images/icon-vaccinations.jpeg', 'Ford v Ferrari', '《Speed King》 is directed by James Mangold, starring Christian Bell, Matt Damon, Joe Bonser, Katerina Balff, Noah Yupe, Josh Lucas The action biopic feature film will be released in the United States on November 15, 2019. The film is adapted from A.J. Bemi\'s documentary novel 《Hell Driving: Ford, Ferrari and Le Mans Endurance Race》, telling the story of several partners running Ford together and eventually becoming the first Le Mans Endurance Championship team .');

--
-- 转储表的索引
--

--
-- 表的索引 `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`profileid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

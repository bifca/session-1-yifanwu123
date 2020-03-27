/*
Navicat MySQL Data Transfer

Source Server         : php3307
Source Server Version : 50726
Source Host           : localhost:3307
Source Database       : panda

Target Server Type    : MYSQL
Target Server Version : 50726
File Encoding         : 65001

Date: 2020-03-22 20:03:42
*/
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `starwars`
--
CREATE DATABASE IF NOT EXISTS `panda` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `panda`;

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for films
-- ----------------------------
DROP TABLE IF EXISTS `films`;
CREATE TABLE `films` (
  `id` int(11) DEFAULT NULL,
  `filmname` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imdbID` varchar(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `poster` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trailer` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of films
-- ----------------------------
INSERT INTO `films` VALUES ('1', 'Kung Fu Panda', 'tt0441773', 'panda.jpg', 'panda.mp4');
INSERT INTO `films` VALUES ('2', 'Kung Fu Panda 2', 'tt1302011', 'panda2.jpg', 'panda2.mp4');
INSERT INTO `films` VALUES ('3', 'Kung Fu Panda 3', 'tt2267968', 'panda3.jpg', 'panda3.mp4');
INSERT INTO `panda`.`films` (`id`, `filmname`, `imdbID`, `poster`, `trailer`) VALUES ('4', 'Kung Fu Panda: Legends of Awesomeness', 'tt1545214', 'Legends of Awesomeness.jpg', 'Legends of Awesomeness.mp4');
INSERT INTO `panda`.`films` (`id`, `filmname`, `imdbID`, `poster`, `trailer`) VALUES ('5', 'Kung Fu Panda: The Paws of Destiny', 'tt8271176', 'The Paws of Destiny.jpg', 'The Paws of Destiny.mp4');
INSERT INTO `panda`.`films` (`id`, `filmname`, `imdbID`, `poster`, `trailer`) VALUES ('6', 'Kung Fu Panda (2008) (Video Game)', 'tt1191122', 'Kung Fu Panda (2008) (Video Game).jpg', 'Kung Fu Panda (2008) (Video Game).mp4');

ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

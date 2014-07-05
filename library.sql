-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2014-07-02 16:36:54
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- 表的结构 `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `bookname` varchar(20) NOT NULL,
  `author` varchar(20) NOT NULL,
  `owner` varchar(20) NOT NULL,
  `mark` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- 转存表中的数据 `book`
--

INSERT INTO `book` (`id`, `bookname`, `author`, `owner`, `mark`) VALUES
(1, '1984', '乔治奥威尔', '13111298', 0),
(2, '百年孤独', '马尔克斯', '13111298', 0),
(3, '活着', '余华', '13111298', 1),
(4, '受活', '阎连科', '13111298', 0),
(5, '日光流年', '阎连科', '13111298', 0),
(6, '数据结构', '严蔚敏', '13111302', 0),
(10, '数据结构', '严蔚敏', '13111298', 0),
(11, 'web工程', '霍秋燕', '13111290', 1),
(22, '数据挖掘', '张三', '13111290', 0),
(23, '数据库', '李四', '13111302', 0),
(24, '数据分析', '王五', '13111298', 0),
(25, '互联网数据挖掘', '陈', '13111290', 0),
(26, '系统分析', '保量', '13111290', 0);

-- --------------------------------------------------------

--
-- 表的结构 `record`
--

CREATE TABLE IF NOT EXISTS `record` (
  `record_id` int(2) NOT NULL AUTO_INCREMENT,
  `id` varchar(10) NOT NULL,
  `bookname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `mark` int(1) NOT NULL,
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `record`
--

INSERT INTO `record` (`record_id`, `id`, `bookname`, `username`, `mark`) VALUES
(1, '0011', 'web工程', '13111290', 1),
(2, '0011', 'web工程', '13111298', 0),
(5, '3', '活着', '13111298', 1),
(6, '3', '活着', '13111290', 0);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='存储用户信息';

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`username`, `password`, `count`) VALUES
('13111298', '13111298', 140),
('13111290', '13111290', 85),
('13111302', '13111302', 20),
('13111299', '13111299', 40);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

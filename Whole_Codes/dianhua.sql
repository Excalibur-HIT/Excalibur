-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2014-10-28 16:49:16
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dianhua`
--

-- --------------------------------------------------------

--
-- 表的结构 `dh_huafei`
--

CREATE TABLE IF NOT EXISTS `dh_huafei` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yys` varchar(100) NOT NULL COMMENT '运营商',
  `package` varchar(100) NOT NULL COMMENT '套餐名',
  `llpackage` int(11) NOT NULL COMMENT '流量包',
  `llmore` double NOT NULL COMMENT '流量超出部分',
  `callpackage` int(11) NOT NULL COMMENT '电话包',
  `callmore` double NOT NULL COMMENT '电话超出部分',
  `msgpackage` int(11) NOT NULL COMMENT '短信包',
  `msgmore` double NOT NULL COMMENT '短信超出部分',
  `money` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- 表的结构 `dh_member_user`
--

CREATE TABLE IF NOT EXISTS `dh_member_user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` char(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `sex` tinyint(1) unsigned NOT NULL,
  `photo` char(100) NOT NULL,
  `regtime` int(10) unsigned NOT NULL DEFAULT '0',
  `regip` char(15) NOT NULL,
  `islock` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `dh_member_user`
--

INSERT INTO `dh_member_user` (`user_id`, `username`, `password`, `email`, `sex`, `photo`, `regtime`, `regip`, `islock`) VALUES
(1, 'admin', '1bbd886460827015e5d605ed44252251', '1111@11.com', 1, '', 1413268352, '127.0.0.1', 0),
(2, 'admin', '96e79218965eb72c92a549dd5a330112', '', 0, '', 1414500469, '127.0.0.1', 0),
(3, 'admins', '96e79218965eb72c92a549dd5a330112', '', 0, '', 1414511096, '127.0.0.1', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

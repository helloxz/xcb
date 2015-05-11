-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2015 �?05 �?11 �?18:08
-- 服务器版本: 5.6.11
-- PHP 版本: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `xsb`
--
CREATE DATABASE IF NOT EXISTS `xsb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `xsb`;

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` tinyint(6) NOT NULL AUTO_INCREMENT COMMENT '管理员信息',
  `nickname` char(12) NOT NULL COMMENT '昵称',
  `name` char(20) NOT NULL COMMENT '姓名',
  `email` char(40) NOT NULL COMMENT '邮箱',
  `password` varchar(64) NOT NULL COMMENT '密码',
  `ip` char(20) DEFAULT NULL COMMENT 'IP地址',
  `time` time DEFAULT NULL COMMENT '登录时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `nickname`, `name`, `email`, `password`, `ip`, `time`) VALUES
(1, 'xiaoz', '邹修平', 'xiaozblog@163.com', 'xiaoz', NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `id` int(4) NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `name` char(60) NOT NULL COMMENT '用户姓名',
  `grade` char(12) NOT NULL COMMENT '用户年级',
  `cla` char(60) NOT NULL COMMENT '用户班级',
  `tel` char(11) NOT NULL COMMENT '联系电话',
  `email` char(60) NOT NULL COMMENT '邮箱',
  `qq` char(11) DEFAULT NULL COMMENT 'QQ号',
  `other` text COMMENT '团队信息',
  `reg_time` char(20) NOT NULL COMMENT '注册时间',
  `is_team` int(6) NOT NULL COMMENT '是否团队',
  `ip` char(20) NOT NULL COMMENT 'IP地址',
  `browser` char(120) NOT NULL COMMENT '浏览器信息',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='网页设计大赛' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `userinfo`
--

INSERT INTO `userinfo` (`id`, `name`, `grade`, `cla`, `tel`, `email`, `qq`, `other`, `reg_time`, `is_team`, `ip`, `browser`) VALUES
(4, '邹修平', '13级', '网络1班', '15882546602', '337003006@qq.com', '337003006', '你好啊。', '1431359852', 0, '::1', 'Windows 7 - Firefox(31.0)'),
(2, '邹修平', '13级', '网络1班', '15882546602', 'lexunsswh@163.com', '337003006', '放入个人', '1431355492', 0, '::1', 'Windows 7 - Firefox(31.0)');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

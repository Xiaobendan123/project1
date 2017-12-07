-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2017-12-07 20:55:21
-- 服务器版本： 5.6.35
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- 表的结构 `test_user`
--

CREATE TABLE `test_user` (
  `id` int(11) NOT NULL COMMENT 'user id',
  `email` varchar(64) NOT NULL COMMENT 'email',
  `password` varchar(128) NOT NULL COMMENT 'password'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='user';

--
-- 转存表中的数据 `test_user`
--

INSERT INTO `test_user` (`id`, `email`, `password`) VALUES
(1, 'lucy@qq.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'lily@qq.com', '77b3e6926e7295494dd3be91c6934899'),
(3, 'anna@qq.com', 'f379eaf3c831b04de153469d1bec345e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `test_user`
--
ALTER TABLE `test_user`
  ADD PRIMARY KEY (`id`);

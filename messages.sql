-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2022 年 06 月 07 日 11:25
-- 伺服器版本： 10.7.3-MariaDB
-- PHP 版本： 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `messageboard`
--

-- --------------------------------------------------------

--
-- 資料表結構 `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL COMMENT '流水號',
  `name` varchar(11) COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '留言者',
  `message` text COLLATE utf8mb4_unicode_520_ci NOT NULL COMMENT '內容',
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT '時間'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `messages`
--

INSERT INTO `messages` (`id`, `name`, `message`, `time`) VALUES
(11, 'ann11', '11', '2022-06-02 01:45:16'),
(13, 'abc', 'cba', '2022-06-02 07:11:18'),
(15, 'ann8', '寫完啦~', '2022-05-30 15:12:09'),
(26, 'z', 'z～', '2022-06-01 14:44:21'),
(27, 'ann', 'nna', '2022-06-01 09:09:05'),
(28, 'ann', '2223223456782', '2022-06-01 16:45:20'),
(29, 'sdfgjk', 's', '2022-06-02 00:45:18'),
(30, 'ann', 'test', '2022-06-02 00:46:23'),
(31, 'anneee', 'testagain', '2022-06-02 00:49:31'),
(32, 'an', 'testagain', '2022-06-02 00:50:13'),
(33, 'an', 'aa', '2022-06-02 00:50:32'),
(34, 'an', 'aa', '2022-06-02 00:51:15'),
(35, 'an', 'aaaa', '2022-06-02 00:51:33'),
(36, '12', '21', '2022-06-02 00:51:46'),
(37, 'anntsai', '21', '2022-06-02 00:52:14'),
(38, 'anntsai', '21', '2022-06-02 00:52:32'),
(39, 'anntsai', 'sss', '2022-06-02 00:53:38'),
(40, 'aaa', 'bbb', '2022-06-02 00:54:02'),
(41, 'annt', 'aa', '2022-06-02 01:21:39'),
(42, 'kaka', 'nna', '2022-06-02 01:41:17'),
(43, '1', '123', '2022-06-02 01:44:09'),
(44, 'annnna', 'aaaaa', '2022-06-02 01:46:41'),
(45, '짜쯩', '나', '2022-06-02 01:59:55'),
(46, 'aa', 'aaa', '2022-06-02 03:00:48'),
(47, '1', 'a', '2022-06-02 03:03:30'),
(48, 'sf', '11111', '2022-06-02 03:29:30'),
(49, 'ss', 'ss', '2022-06-02 03:33:46'),
(50, '12345678', 'aa', '2022-06-02 04:00:56'),
(51, '23', 'aa', '2022-06-02 05:37:51'),
(52, '1', 's', '2022-06-02 06:59:05');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '流水號', AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

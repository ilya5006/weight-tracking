-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 25 2020 г., 11:35
-- Версия сервера: 8.0.15
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `weight-tracking`
--

-- --------------------------------------------------------

--
-- Структура таблицы `weights`
--

CREATE TABLE `weights` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `weight` float NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `weights`
--

INSERT INTO `weights` (`id`, `username`, `weight`, `date`) VALUES
(30, 'Мама', 56.2, '2020-03-25 11:34:07'),
(31, 'Мама', 11.5, '2020-03-25 11:34:10'),
(32, 'Мама', 0.52, '2020-03-25 11:34:15'),
(33, 'Мама', 70.5, '2020-03-25 11:34:18'),
(34, 'Папа', 15.67, '2020-03-25 11:34:26'),
(35, 'Папа', 25.6, '2020-03-25 11:34:29'),
(36, 'Папа', 110, '2020-03-25 11:34:33'),
(37, 'Папа', 70.6, '2020-03-25 11:34:36'),
(38, 'Папа', 11.5, '2020-03-25 11:34:39'),
(39, 'Друг семьи', 156, '2020-03-25 11:34:57'),
(40, 'Друг семьи', 0, '2020-03-25 11:34:59'),
(41, 'Друг семьи', 15, '2020-03-25 11:35:01'),
(42, 'Друг семьи', 111, '2020-03-25 11:35:04');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `weights`
--
ALTER TABLE `weights`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `weights`
--
ALTER TABLE `weights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

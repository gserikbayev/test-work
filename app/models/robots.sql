-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Окт 18 2015 г., 18:30
-- Версия сервера: 5.6.26
-- Версия PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `robots`
--

-- --------------------------------------------------------

--
-- Структура таблицы `robots`
--

CREATE TABLE IF NOT EXISTS `robots` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `year` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `robots`
--

INSERT INTO `robots` (`id`, `name`, `type`, `year`) VALUES
(1, 'ASIMO', 'humanoid', 2000),
(2, 'Android', 'operating system', 2003),
(3, 'Название робота', 'Тип робота', 2014),
(14, 'Название робота', 'Тип робота', 2015),
(15, 'Название робота', 'Тип робота', 2013),
(16, 'Название робота', 'Тип робота', 2014),
(17, 'Название робота', 'Тип робота', 2013),
(18, 'Название робота', 'Тип робота', 2013);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `robots`
--
ALTER TABLE `robots`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `robots`
--
ALTER TABLE `robots`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

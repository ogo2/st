-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 07 2023 г., 15:11
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `calculator`
--

-- --------------------------------------------------------

--
-- Структура таблицы `otvet`
--

CREATE TABLE `otvet` (
  `id` int NOT NULL,
  `ip_users` varchar(50) NOT NULL,
  `otv` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `otvet`
--

INSERT INTO `otvet` (`id`, `ip_users`, `otv`) VALUES
(11, '127.0.0.1', '33+3=36'),
(12, '127.0.0.1', '55*5=275'),
(13, '127.0.0.1', '55-5=50'),
(14, '127.0.0.1', '565*4=2260'),
(15, '127.0.0.1', '66-3=63'),
(16, '127.0.0.1', '55+2=57'),
(17, '127.0.0.1', '55+3=58'),
(18, '127.0.0.1', '5555-6=5549');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `otvet`
--
ALTER TABLE `otvet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `otvet`
--
ALTER TABLE `otvet`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

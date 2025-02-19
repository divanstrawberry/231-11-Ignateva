-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 19 2025 г., 11:25
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
-- База данных: `cwp1_231`
--

-- --------------------------------------------------------

--
-- Структура таблицы `ignateva_231`
--

CREATE TABLE `ignateva_231` (
  `id` int NOT NULL,
  `login` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `ignateva_231`
--

INSERT INTO `ignateva_231` (`id`, `login`, `pass`) VALUES
(15, 'jeonghyo@gmail.com', '$2y$10$4MzgF2BHteuQD.Vbs1bFH.lYngr4i//OzIk5/5GW4fOp8DrQPvmX6'),
(16, 'wexztn@gmail.com', '$2y$10$qciMbNtP4gHjCBZiMmvckO0edmJ6Yo/gdzqDjqEFFF9l/CL/q1vCW'),
(17, 'orhishi@gmail.com', '$2y$10$9j9zrKrv.waKsbgD7e1/K.O1jnhsOeqH7ise79LYhEDpg2k94NMEi'),
(18, 'dcdae@gmail.com', '$2y$10$VLaSdvJpknlgZyu3KdVq..ZDODywb2q6pIQNZB4OGOpFwLaXkvdy6'),
(19, 'meowsnxxx@gmail.com', '$2y$10$og8G7pxFnppwpNe5ur0a3OSXp9WNzLrc/2xysyBgZT0m1AbC6g9P.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `ignateva_231`
--
ALTER TABLE `ignateva_231`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `ignateva_231`
--
ALTER TABLE `ignateva_231`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

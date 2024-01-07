-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Янв 06 2024 г., 14:27
-- Версия сервера: 8.0.33
-- Версия PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `maktab`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Структура таблицы `ariza`
--

CREATE TABLE `ariza` (
  `id` int NOT NULL,
  `name` varchar(150) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `fage` int NOT NULL,
  `phone` varchar(100) NOT NULL,
  `comment` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `ariza`
--

INSERT INTO `ariza` (`id`, `name`, `fname`, `fage`, `phone`, `comment`) VALUES
(2, 'Nafisaxon', 'Oydin', 7, '998991234567', 'Sizni maktabingiz yaxshi deb eshitganim uchun farzandim sizlarda o\'qishini hohlayman');

-- --------------------------------------------------------

--
-- Структура таблицы `courses`
--

CREATE TABLE `courses` (
  `id` int NOT NULL,
  `name` varchar(150) NOT NULL,
  `teacher` varchar(150) NOT NULL,
  `pic` varchar(150) NOT NULL,
  `description` varchar(150) NOT NULL,
  `start` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `courses`
--

INSERT INTO `courses` (`id`, `name`, `teacher`, `pic`, `description`, `start`) VALUES
(1, 'Fizika', 'Mahbuba Sobirova', 'unnamed (1).png', 'Boshlang\'ich fizika darslari', '10.01.2023'),
(6, 'Web dasturlash', 'Dilshod Rahmonov', 'boshlovchilar-uchun-web-dasturlashni-organish-xaritasi.jpg', 'Web dasturlash darslari va dasturlash asoslari', '07.01.2023'),
(7, 'Matematika', 'Jahongir Karimov', 'unnamed.png', 'Boshlang\'ich ta\'lim o\'quvchilari uchun bepul to\'garak', '08.01.2023'),
(8, 'Informatika', 'Sadulla Fatxullayev', '142d3279bcb5ba5cca983fcf8d6b6b7e.jpg', 'Yuqori sinf o\'quvchilari uchun chuqurlashtirilgan darslar', '13.01.2023'),
(9, 'Ona tili va adabiyot', 'Nozima Hakimova', '2-42.jpg', 'Yuqori sinf va boshlang\'ichlar uchun ona tili va adabiyot darslari', '11.01.2023');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ariza`
--
ALTER TABLE `ariza`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `ariza`
--
ALTER TABLE `ariza`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

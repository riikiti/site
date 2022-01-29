-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 30 2022 г., 01:35
-- Версия сервера: 8.0.19
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cars`
--

CREATE TABLE `cars` (
  `id_car` int NOT NULL,
  `car_name` varchar(300) DEFAULT NULL,
  `car_photo` varchar(2000) DEFAULT NULL,
  `car_status` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `cars`
--

INSERT INTO `cars` (`id_car`, `car_name`, `car_photo`, `car_status`) VALUES
(11, '11', 'uploads/1642451001image 11.png', '123'),
(12, 'Mercedes A45 AMG', 'uploads/1642451105image 5 (1).png', '123'),
(13, 'Ford Mustang 2.3 EcoBoost', 'uploads/1642451155image 20.png', 'admin'),
(14, 'BMW M2 Competition', 'uploads/1642451202image 21.png', 'admin'),
(16, 'Mercedes A45 AMG', 'uploads/1642885813image 9.png', 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `client-state`
--

CREATE TABLE `client-state` (
  `id_cs` int NOT NULL,
  `link` varchar(300) DEFAULT NULL,
  `date_start` datetime(6) DEFAULT NULL,
  `date_finish` datetime(6) DEFAULT NULL,
  `id_state` int DEFAULT NULL,
  `id_client` int DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `client-state`
--

INSERT INTO `client-state` (`id_cs`, `link`, `date_start`, `date_finish`, `id_state`, `id_client`, `status`) VALUES
(1, 'прарапр', '2022-01-23 21:53:46.000000', '2022-01-28 21:53:46.000000', 1, 11, '1'),
(2, 'dsfds', '2022-01-23 21:45:32.000000', '2022-01-28 23:18:37.000000', 1, 11, '1');

-- --------------------------------------------------------

--
-- Структура таблицы `client-tour`
--

CREATE TABLE `client-tour` (
  `id_ct` int NOT NULL,
  `id_client` int DEFAULT NULL,
  `id_tour` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `client-tour`
--

INSERT INTO `client-tour` (`id_ct`, `id_client`, `id_tour`) VALUES
(6, 12, 12),
(7, 11, 12),
(8, 11, 11),
(9, 11, 10),
(10, 11, 10);

-- --------------------------------------------------------

--
-- Структура таблицы `doctors`
--

CREATE TABLE `doctors` (
  `id_doc` int NOT NULL,
  `docName` varchar(255) DEFAULT NULL,
  `code_name` varchar(255) DEFAULT NULL,
  `start_time` int DEFAULT NULL,
  `end_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `doctors`
--

INSERT INTO `doctors` (`id_doc`, `docName`, `code_name`, `start_time`, `end_time`) VALUES
(1, 'Шац Дарья Сергеевна', 'doc1', 8, 19),
(2, 'Лыщиков Павел Анатольевич', 'doc2', 10, 17),
(3, 'Оленина Марина Николаевна', 'doc3', 12, 15);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id_news` int NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `content` varchar(3800) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id_news`, `title`, `time`, `content`) VALUES
(3, '1234', '2012-11-12 00:00:00', '1234'),
(6, 'Вакантные туры по Анапе и Волгограду', '2021-12-23 00:00:00', 'С 01.02.2022 на туры по Анапе и Волгограду объявлена скидка 15%. Множество достопримечательностей Волгограда и Анапы ждут вас! Опытные навигаторы, комфортная поездка уже ждёт вас. Количество билетов ограничено. Перейти к заказу билетов.'),
(7, 'Новый тур – Варшава', '2022-01-09 00:00:00', 'Прокатитесь по великой столице Польши – Варшаве! Узнайте много нового о Королевском замке, Большом театре и многом другом в нашем туре. Забронируйте место заранее – получите скидку в 15%. Акция продлится до 29.01.2022. Количество билетов ограничено. '),
(13, 'Твой Краш', '2012-12-12 00:00:00', '21вывфыв'),
(14, 'Первые посетители уже довольны!!!', '2012-12-12 00:00:00', 'waasdsad'),
(16, 'ggggggggggg', '2011-11-11 00:00:00', 'qwwwwwwwwe'),
(17, '1234', '2011-11-11 00:00:00', 'dsfsdfsdf');

-- --------------------------------------------------------

--
-- Структура таблицы `res`
--

CREATE TABLE `res` (
  `id_res` int NOT NULL,
  `login` varchar(255) DEFAULT NULL,
  `code_name` varchar(255) DEFAULT NULL,
  `time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `res`
--

INSERT INTO `res` (`id_res`, `login`, `code_name`, `time`) VALUES
(6, '123', 'doc1', '2021-12-21 08:00:00'),
(7, '123', 'doc1', '2000-01-01 12:00:00'),
(8, '123', 'doc1', '2000-01-01 12:00:00'),
(9, '123', 'doc1', '2021-12-09 08:00:00'),
(10, '123', 'doc1', '2021-12-12 08:00:00'),
(11, '123', 'doc1', '2021-12-10 08:00:00'),
(12, '123', 'doc1', '2021-12-23 12:00:00'),
(13, '1234', 'doc3', '2000-01-01 12:00:00'),
(15, '123', 'doc2', '2021-12-17 08:00:00'),
(16, '123', 'doc2', '2000-01-01 12:00:00'),
(17, '123', 'doc3', '2000-01-01 12:00:00'),
(18, '123', 'doc1', '2021-12-23 08:00:00'),
(19, '123', 'doc1', '2021-12-23 10:00:00'),
(21, '123', 'doc1', '2000-01-01 12:00:00'),
(22, '1234', 'doc1', '2000-01-01 12:00:00'),
(23, '123', 'doc3', '2021-12-24 15:00:00'),
(26, '123', 'doc3', '2021-12-24 14:00:00'),
(28, '123', 'doc1', '2021-12-24 19:00:00'),
(31, 'admin', 'doc1', '2022-01-12 19:00:00'),
(32, 'admin', 'doc1', '2022-01-12 18:00:00'),
(33, 'admin', 'doc2', '2022-01-12 17:00:00'),
(34, 'admin', 'doc2', '2022-01-21 16:00:00'),
(35, 'admin', 'doc3', '2022-01-18 13:00:00'),
(36, 'admin', 'doc1', '2022-01-12 09:00:00'),
(37, 'admin', 'doc1', '2022-01-12 16:00:00'),
(38, 'admin', 'doc1', '2022-01-12 17:00:00'),
(39, 'admin', 'doc1', '2022-01-21 08:00:00'),
(40, 'admin', 'doc3', '2022-01-31 12:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id_reviews` int NOT NULL,
  `login` varchar(255) DEFAULT NULL,
  `text` varchar(3500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `date` datetime(6) DEFAULT NULL,
  `id_state` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id_reviews`, `login`, `text`, `date`, `id_state`) VALUES
(27, 'admin', ' sadsadsavggff', '2022-01-26 19:53:40.000000', 0),
(29, 'admin', ' dsfdsf', '2022-01-26 19:54:56.000000', 0),
(30, 'admin', ' dasdsad', '2022-01-28 21:10:14.000000', 6),
(31, 'admin', ' sadasdas', '2022-01-28 21:18:44.000000', 0),
(32, 'admin', ' фывфывыф', '2022-01-28 21:19:16.000000', 6),
(33, 'admin', ' dsfsd', '2022-01-28 22:29:10.000000', 24);

-- --------------------------------------------------------

--
-- Структура таблицы `sale`
--

CREATE TABLE `sale` (
  `id_sale` int NOT NULL,
  `discount` int DEFAULT NULL,
  `date_start` datetime DEFAULT NULL,
  `date_finish` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `sale`
--

INSERT INTO `sale` (`id_sale`, `discount`, `date_start`, `date_finish`) VALUES
(1, 300, '2022-01-23 21:45:32', '2022-03-28 21:45:32'),
(4, 1200, '2021-01-18 12:17:00', '2023-01-21 12:18:00');

-- --------------------------------------------------------

--
-- Структура таблицы `state`
--

CREATE TABLE `state` (
  `id_state` int NOT NULL,
  `tittle` varchar(255) DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `preview` varchar(2000) DEFAULT NULL,
  `content` varchar(2000) DEFAULT NULL,
  `date` datetime(6) DEFAULT NULL,
  `sale` int DEFAULT NULL,
  `price` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `state`
--

INSERT INTO `state` (`id_state`, `tittle`, `description`, `preview`, `content`, `date`, `sale`, `price`) VALUES
(6, 'state', 'lorem', 'uploads/16432253901.jpg ', 'uploads/1643225390avto.rar', '2022-01-26 22:29:50.000000', 1, 750),
(23, 'as3', 'as3', 'uploads/1643292890Audi-A4-Avant-1-960x550.png ', 'uploads/1643292890image 5.png', '2022-01-27 17:14:50.000000', 0, 1500),
(24, 'as4', 'as4', 'uploads/1643292930Audi-A4-Avant-1-960x550.png ', 'uploads/1643292930image 5.png', '2022-01-27 17:15:30.000000', 1, 250),
(25, 'robot', 'lorem', 'uploads/1643293397im 754963131275756 1.jpg ', 'uploads/16432933971b45456s-1920 1.png', '2022-01-27 17:23:17.000000', 0, 440),
(26, 'state', 'lorem', 'uploads/1643299657low-angle-shot-of-grey-skyscrapers-in-front-of-the-river-under-the-dark-cloudy-sky 1.png ', 'uploads/1643299657image 5 (1).png', '2022-01-27 19:07:37.000000', 0, 1200),
(27, 'test2', 'lorem', 'uploads/1643387391young-couple-choosing-a-car-in-a-car-showroom 1.png ', 'uploads/1643387391Porsche-Panamera-960x550.png', '2022-01-28 19:29:51.000000', 4, 5000);

-- --------------------------------------------------------

--
-- Структура таблицы `tours`
--

CREATE TABLE `tours` (
  `id_tour` int NOT NULL,
  `tour_name` varchar(300) DEFAULT NULL,
  `tour_date` datetime DEFAULT NULL,
  `tour_count` int DEFAULT NULL,
  `tour_photo` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `tours`
--

INSERT INTO `tours` (`id_tour`, `tour_name`, `tour_date`, `tour_count`, `tour_photo`) VALUES
(10, 'Геленджик', '2011-11-11 00:00:00', 4, 'uploads/1642887277Gelendzhik-1.jpg'),
(11, 'Сочи', '2011-11-11 00:00:00', 15, 'uploads/1642887291Sochi.jpg'),
(12, 'Анапа', '2011-11-12 00:00:00', 10, 'uploads/1642928948Anapa_2018_d_850.jpg'),
(13, 'Санкт-Петербург', '2011-11-11 00:00:00', 15, 'uploads/16429594671b45456s-1920 1.png');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `full_name` varchar(355) DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `avatar` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES
(9, '123', '123', '1234@1234', '202cb962ac59075b964b07152d234b70', 'uploads/163891232657cd71b598f10156fa842d7a.png'),
(10, 'gg', 'gg', '123@123', '81dc9bdb52d04dc20036dbd8313ed055', 'uploads/163895396157cd71b598f10156fa842d7a.png'),
(11, 'admin', 'admin', 'admin@admin.ru', '21232f297a57a5a743894a0e4a801fc3', 'uploads/1640110190krasavchic.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id_car`);

--
-- Индексы таблицы `client-state`
--
ALTER TABLE `client-state`
  ADD PRIMARY KEY (`id_cs`);

--
-- Индексы таблицы `client-tour`
--
ALTER TABLE `client-tour`
  ADD PRIMARY KEY (`id_ct`);

--
-- Индексы таблицы `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id_doc`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Индексы таблицы `res`
--
ALTER TABLE `res`
  ADD PRIMARY KEY (`id_res`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id_reviews`);

--
-- Индексы таблицы `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`id_sale`);

--
-- Индексы таблицы `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id_state`);

--
-- Индексы таблицы `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id_tour`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cars`
--
ALTER TABLE `cars`
  MODIFY `id_car` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `client-state`
--
ALTER TABLE `client-state`
  MODIFY `id_cs` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `client-tour`
--
ALTER TABLE `client-tour`
  MODIFY `id_ct` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id_doc` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `res`
--
ALTER TABLE `res`
  MODIFY `id_res` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id_reviews` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT для таблицы `sale`
--
ALTER TABLE `sale`
  MODIFY `id_sale` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `state`
--
ALTER TABLE `state`
  MODIFY `id_state` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `tours`
--
ALTER TABLE `tours`
  MODIFY `id_tour` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

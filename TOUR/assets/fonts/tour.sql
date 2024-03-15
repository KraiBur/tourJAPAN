-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 14 2024 г., 15:52
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tour`
--

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `number` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `arrival` date NOT NULL,
  `departure` date NOT NULL,
  `first_name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adults` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `room_pref` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`order_id`, `number`, `status`, `reason`, `arrival`, `departure`, `first_name`, `last_name`, `phone`, `email`, `adults`, `children`, `room_pref`, `created_at`, `updated_at`) VALUES
(185, '1459920296', 'Подтверждённый', NULL, '2024-03-13', '2024-03-02', 'Карина', 'Буранбаева', '+79871429193', 'deputatk12@gmail.com', 2, 0, 'Deluxe', '2024-03-12 20:02:41', '2024-03-12 20:25:34');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `image` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`product_id`, `name`, `hotel`, `price`, `created_at`, `image`) VALUES
(300, 'Классическая Япония Две столицы', 'AIRPORT: LA', 80000, '2023-11-02 09:40:41', 'assets/img/image14.png'),
(500, 'Транзитный тур Токио-Киото-Нара', 'AIRPORT: LAF', 84000, '2023-11-02 09:40:41', 'assets/img/image14-1.png'),
(501, 'Пляжный тур на Окинаве', 'AIRPORT: LAD', 56500, '2023-11-02 09:40:41', 'assets/img/image14-2.png'),
(502, 'Классическая Япония Две столицы', '', 79600, '2023-11-02 09:40:41', 'assets/img/image14.png'),
(503, 'Транзитный тур Токио-Киото-Нара', '', 54600, '2023-11-02 09:40:41', 'assets/img/image14-1.png'),
(504, 'Пляжный тур на Окинаве', '', 95000, '2023-11-02 09:40:41', 'assets/img/image14-2.png'),
(505, 'Классическая Япония Две столицы', '', 45000, '2023-11-02 09:40:41', 'assets/img/image14.png'),
(506, 'Транзитный тур Токио-Киото-Нара', '', 60000, '2023-11-02 09:40:41', 'assets/img/image14-1.png'),
(507, 'Пляжный тур на Окинаве', '', 50000, '2023-11-02 09:40:41', 'assets/img/image14-2.png'),
(508, 'Классическая Япония Две столицы', '', 90000, '2023-11-02 09:40:41', 'assets/img/image14.png'),
(509, 'Транзитный тур Токио-Киото-Нара', 'AIRPORT: LA', 120000, '2023-11-02 09:40:41', 'assets/img/image14-1.png'),
(510, 'Пляжный тур на Окинаве', 'AIRPORT: LAD', 85000, '2023-11-02 09:40:41', 'assets/img/image14-2.png'),
(511, 'Классическая Япония Две столицы', 'AIRPORT: LAF', 100000, '2023-11-02 09:40:41', 'assets/img/image14.png'),
(512, 'Транзитный тур Токио-Киото-Нара', 'AIRPORT: LA', 94000, '2023-11-02 09:40:41', 'assets/img/image14-1.png'),
(513, 'Пляжный тур на Окинаве', 'AIRPORT: LAD', 100000, '2023-11-02 09:40:41', 'assets/img/image14-2.png'),
(514, 'Классическая Япония Две столицы', 'AIRPORT: LAF', 50000, '2023-11-02 09:40:41', 'assets/img/image14.png'),
(515, 'Транзитный тур Токио-Киото-Нара', 'AIRPORT: LA', 54000, '2023-11-02 09:40:41', 'assets/img/image14-1.png'),
(516, 'Пляжный тур на Окинаве', 'AIRPORT: LAF', 59000, '2023-11-02 09:40:41', 'assets/img/image14-2.png'),
(517, 'Классическая Япония Две столицы', 'AIRPORT: LA', 80000, '2023-11-02 09:40:41', 'assets/img/image14.png'),
(518, 'Транзитный тур Токио-Киото-Нара', 'AIRPORT: LAD', 90000, '2023-11-02 09:40:41', 'assets/img/image14-1.png'),
(519, 'Пляжный тур на Окинаве', 'AIRPORT: LA', 100000, '2023-11-02 09:40:41', 'assets/img/image14-2.png'),
(520, 'Классическая Япония Две столицы', 'AIRPORT: LA', 55000, '2023-11-02 09:40:41', 'assets/img/image14.png'),
(521, 'Транзитный тур Токио-Киото-Нара', 'AIRPORT: LAF', 65000, '2023-11-02 09:40:41', 'assets/img/image14-1.png'),
(522, 'Пляжный тур на Окинаве', 'AIRPORT: LAD', 75000, '2023-11-02 09:40:41', 'assets/img/image14-2.png');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patronymic` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `name`, `surname`, `patronymic`, `login`, `email`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin@ds', 'admin', 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=535;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

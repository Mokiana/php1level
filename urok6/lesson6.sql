-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 19 2019 г., 12:32
-- Версия сервера: 5.6.41
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lesson6`
--

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `info` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `price`, `img`, `info`, `description`) VALUES
(1, 'Товар 1', 2400, 'photo1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam debitis id laboriosam, magni pariatur sint ullam veniam voluptate! Adipisci amet aut cupiditate debitis deleniti dolorem fuga, fugiat hic id itaque laudantium nisi provident quaerat quia quidem repellat, similique suscipit vitae!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur ducimus magnam natus nisi nostrum quas, recusandae soluta? Cumque dolorem eius laborum nesciunt, vel velit veniam? A, deserunt impedit neque nulla omnis veniam vero. Assumenda at consectetur consequatur culpa cum deserunt, doloribus esse facere fugiat illum incidunt iusto labore mollitia natus nisi odio perspiciatis quas sunt, tempora ut? Accusantium atque dicta dolores ducimus eaque eos est ex facilis id impedit natus nisi, officiis quibusdam similique sint tempora veniam vitae! Autem corporis cumque excepturi impedit ipsum labore necessitatibus odio perspiciatis quasi quia. Accusamus eius labore odio qui sapiente sed sint totam, vel!'),
(2, 'Товар 2', 1400, 'photo2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam debitis id laboriosam, magni pariatur sint ullam veniam voluptate! Adipisci amet aut cupiditate debitis deleniti dolorem fuga, fugiat hic id itaque laudantium nisi provident quaerat quia quidem repellat, similique suscipit vitae!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur ducimus magnam natus nisi nostrum quas, recusandae soluta? Cumque dolorem eius laborum nesciunt, vel velit veniam? A, deserunt impedit neque nulla omnis veniam vero. Assumenda at consectetur consequatur culpa cum deserunt, doloribus esse facere fugiat illum incidunt iusto labore mollitia natus nisi odio perspiciatis quas sunt, tempora ut? Accusantium atque dicta dolores ducimus eaque eos est ex facilis id impedit natus nisi, officiis quibusdam similique sint tempora veniam vitae! Autem corporis cumque excepturi impedit ipsum labore necessitatibus odio perspiciatis quasi quia. Accusamus eius labore odio qui sapiente sed sint totam, vel!'),
(4, 'Товар 3', 500, 'photo3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam debitis id laboriosam, magni pariatur sint ullam veniam voluptate! Adipisci amet aut cupiditate debitis deleniti dolorem fuga, fugiat hic id itaque laudantium nisi provident quaerat quia quidem repellat, similique suscipit vitae!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur ducimus magnam natus nisi nostrum quas, recusandae soluta? Cumque dolorem eius laborum nesciunt, vel velit veniam? A, deserunt impedit neque nulla omnis veniam vero. Assumenda at consectetur consequatur culpa cum deserunt, doloribus esse facere fugiat illum incidunt iusto labore mollitia natus nisi odio perspiciatis quas sunt, tempora ut? Accusantium atque dicta dolores ducimus eaque eos est ex facilis id impedit natus nisi, officiis quibusdam similique sint tempora veniam vitae! Autem corporis cumque excepturi impedit ipsum labore necessitatibus odio perspiciatis quasi quia. Accusamus eius labore odio qui sapiente sed sint totam, vel!'),
(5, 'Товар 4', 3700, 'photo4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam debitis id laboriosam, magni pariatur sint ullam veniam voluptate! Adipisci amet aut cupiditate debitis deleniti dolorem fuga, fugiat hic id itaque laudantium nisi provident quaerat quia quidem repellat, similique suscipit vitae!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur ducimus magnam natus nisi nostrum quas, recusandae soluta? Cumque dolorem eius laborum nesciunt, vel velit veniam? A, deserunt impedit neque nulla omnis veniam vero. Assumenda at consectetur consequatur culpa cum deserunt, doloribus esse facere fugiat illum incidunt iusto labore mollitia natus nisi odio perspiciatis quas sunt, tempora ut? Accusantium atque dicta dolores ducimus eaque eos est ex facilis id impedit natus nisi, officiis quibusdam similique sint tempora veniam vitae! Autem corporis cumque excepturi impedit ipsum labore necessitatibus odio perspiciatis quasi quia. Accusamus eius labore odio qui sapiente sed sint totam, vel!');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

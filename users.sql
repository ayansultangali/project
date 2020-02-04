-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Мар 18 2016 г., 18:02
-- Версия сервера: 10.1.9-MariaDB
-- Версия PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `users`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `IIN` varchar(12) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`IIN`, `password`, `name`, `surname`) VALUES
('860104780704', 'erma', 'Ермахан', 'Магзым');

-- --------------------------------------------------------

--
-- Структура таблицы `doska_p`
--

CREATE TABLE `doska_p` (
  `IIN` varchar(12) NOT NULL,
  `iin_s` varchar(12) NOT NULL,
  `class` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `doska_p`
--

INSERT INTO `doska_p` (`IIN`, `iin_s`, `class`) VALUES
('860104780704', '980109301245', '11B');

-- --------------------------------------------------------

--
-- Структура таблицы `materials`
--

CREATE TABLE `materials` (
  `id` int(11) NOT NULL,
  `class` varchar(5) NOT NULL,
  `file` blob NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `iin_t` int(12) NOT NULL,
  `name_t` varchar(30) NOT NULL,
  `surname_t` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `materials`
--

INSERT INTO `materials` (`id`, `class`, `file`, `message`, `date`, `iin_t`, `name_t`, `surname_t`) VALUES
(21, '11B', '', 'Подготовьтесь к уроку. Ссылка на материал http://egemen.kz/old/?act=readarticle&id=11416\r\n', '2016-02-10', 2147483647, 'Эльмира', 'Кусбекова'),
(22, '11B', '', 'Че там', '2016-02-11', 2147483647, 'Эльмира', 'Кусбекова'),
(23, '11B', '', 'Азиз мал', '2016-02-16', 2147483647, 'Эльмира', 'Кусбекова');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `IIN` varchar(12) NOT NULL,
  `date` date NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `IIN`, `date`, `message`) VALUES
(1, '860104780704', '2016-02-10', 'Ученик 11 «В» класса Жумадил Азизхан выиграл олимпиаду по физике и получил грант  '),
(2, '860104780704', '2016-02-16', 'fghjkopojhbnml');

-- --------------------------------------------------------

--
-- Структура таблицы `parent`
--

CREATE TABLE `parent` (
  `iin_p` varchar(12) NOT NULL,
  `surname` varchar(15) CHARACTER SET utf32 NOT NULL,
  `name` varchar(15) NOT NULL,
  `father` varchar(15) NOT NULL,
  `birthday` date NOT NULL,
  `education` varchar(30) NOT NULL,
  `iin_s` varchar(12) NOT NULL,
  `work` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `role` varchar(5) NOT NULL,
  `adress` varchar(80) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `parent`
--

INSERT INTO `parent` (`iin_p`, `surname`, `name`, `father`, `birthday`, `education`, `iin_s`, `work`, `phone`, `mail`, `role`, `adress`, `password`) VALUES
('730608125009', 'Дуйсебай', 'Ернар', 'Шоханович', '1973-06-08', 'Высшее', '010108501179', 'Исследовательский центр «Исаак Ньютон»', '87475073293', 'e.duisebai1@mail.ru', '', 'Ул. Курмангазы 10', 'ernar');

-- --------------------------------------------------------

--
-- Структура таблицы `sms`
--

CREATE TABLE `sms` (
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `iin` varchar(12) NOT NULL,
  `iin_p` varchar(12) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sms`
--

INSERT INTO `sms` (`id`, `date`, `iin`, `iin_p`, `name`, `surname`, `message`) VALUES
(10, '2016-02-26', '741212402001', '730608125009', 'Асель', 'Журумбаева', 'Сегодня ваш сын Жумадил Азизхан не пришел в школу');

-- --------------------------------------------------------

--
-- Структура таблицы `teacher`
--

CREATE TABLE `teacher` (
  `iin_t` varchar(12) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `father` varchar(20) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `birthday` varchar(10) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `adress` varchar(80) NOT NULL,
  `mail` varchar(25) NOT NULL,
  `experience` varchar(10) NOT NULL,
  `education` varchar(30) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `class` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `teacher`
--

INSERT INTO `teacher` (`iin_t`, `surname`, `name`, `father`, `gender`, `birthday`, `phone`, `adress`, `mail`, `experience`, `education`, `nationality`, `class`, `password`) VALUES
('1', '123', '123', '123', 'м', '2016-02-03', 'phone', 'adress', '123', '12 лет', 'Высшее', 'Казах(казашка)', '1A', '123'),
('840511504001', 'Кусбекова', 'Эльмира', 'Жарылгаповна', 'ж', '1984-05-11', 'phone', 'adress', 'Elmira.kusbekova@mail.ru', '10 лет', 'Высшее', 'Казах(казашка)', '11B', 'elmira');

-- --------------------------------------------------------

--
-- Структура таблицы `tutor`
--

CREATE TABLE `tutor` (
  `iin` varchar(12) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `father` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birthday` varchar(14) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `adress` varchar(80) NOT NULL,
  `mail` varchar(25) NOT NULL,
  `experience` varchar(10) NOT NULL,
  `education` varchar(30) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `class` varchar(5) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tutor`
--

INSERT INTO `tutor` (`iin`, `surname`, `name`, `father`, `gender`, `birthday`, `phone`, `adress`, `mail`, `experience`, `education`, `nationality`, `class`, `password`) VALUES
('741212402001', 'Журумбаева', 'Асель', 'Куатбековна', 'женский', '1974-12-12', '87014559636', 'Ул. Толе би 145', 'asel.zhurumbayeva@bk.ru', '16 лет', 'Среднее ', 'Русский(Русская)', '11B', 'asel');

-- --------------------------------------------------------

--
-- Структура таблицы `uchenik`
--

CREATE TABLE `uchenik` (
  `iin_s` varchar(12) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `father` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `birthday` varchar(12) NOT NULL,
  `nationality` varchar(15) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `adress` varchar(40) NOT NULL,
  `class` varchar(5) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sfamily` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `uchenik`
--

INSERT INTO `uchenik` (`iin_s`, `surname`, `name`, `father`, `password`, `birthday`, `nationality`, `gender`, `adress`, `class`, `phone`, `email`, `sfamily`) VALUES
('980109301123', 'Жумадил', 'Азиавыфа', 'Саматович', 'aziz', '1998-09-01', 'Казах', 'м', 'ул. Косы батыр 12', '11B', '87775641232', 'aziz_zhumadil@mail.ru', 'Полная'),
('980109301245', 'Жумадил', 'Азизхан', 'Саматович', 'aziz', '1998-09-01', 'Казах', 'м', 'ул. Косы батыр 12', '11B', '87775641232', 'aziz_zhumadil@mail.ru', 'Полная');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`IIN`);

--
-- Индексы таблицы `doska_p`
--
ALTER TABLE `doska_p`
  ADD PRIMARY KEY (`iin_s`),
  ADD KEY `IIN` (`IIN`);

--
-- Индексы таблицы `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iin_t` (`iin_t`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IIN` (`IIN`);

--
-- Индексы таблицы `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`iin_p`),
  ADD UNIQUE KEY `iin` (`iin_p`),
  ADD KEY `iin_s` (`iin_s`);

--
-- Индексы таблицы `sms`
--
ALTER TABLE `sms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iin` (`iin`);

--
-- Индексы таблицы `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`iin_t`),
  ADD UNIQUE KEY `class` (`class`);

--
-- Индексы таблицы `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`iin`),
  ADD KEY `class` (`class`);

--
-- Индексы таблицы `uchenik`
--
ALTER TABLE `uchenik`
  ADD PRIMARY KEY (`iin_s`),
  ADD KEY `class` (`class`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `sms`
--
ALTER TABLE `sms`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

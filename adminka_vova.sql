-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 01 2019 г., 13:50
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `adminka_vova`
--

-- --------------------------------------------------------

--
-- Структура таблицы `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content1` text NOT NULL,
  `content2` text CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `aboutus`
--

INSERT INTO `aboutus` (`id`, `title`, `content1`, `content2`) VALUES
(1, 'О компании', 'OVER TIME - динамично развивающаяся компания осуществляющая заправку и восстановление картриджей (замену фотобарабана, замену дозирующего лезвия, замену ракеля, замену магнитного вала, замену зарядного ролика), а также ремонт оргтехники. На данный момент заправка картриджей - основной вид деятельности нашей фирмы. Мы предоставляем услуги по высококачественной заправке и перезаправке картриджей, восстановлению печатающих свойств картриджей к лазерным принтерам, а также другой офисной техники в г. Ростове-на-Дону.', 'Заправка картриджей выполняется только высококачественным и проверенным на совместимость тонером для лазерных принтеров, что обеспечивает отменное качество печати и многократное использование одного и того же картриджа. Выезд к клиенту. По Вашему звонку, наши курьеры забирают у Вас использованные картриджи и привозят их к нам. Наши специалисты заправляют их в мастерской. На следующий день или даже в этот (в зависимости от договоренности) Вам доставляют заправленные картриджи (стоимость выезда на место колеблется от 0 до 300 руб в зависимости от района города). Став нашим клиентом, Вы, прежде всего, приобретете надежного партнера, который никогда Вас не подведет. Мы не оставим Вас наедине с Вашими проблемами!');

-- --------------------------------------------------------

--
-- Структура таблицы `cartridges_sale`
--

CREATE TABLE `cartridges_sale` (
  `id` int(11) NOT NULL,
  `printer` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cartridges_sale`
--

INSERT INTO `cartridges_sale` (`id`, `printer`, `model`, `price`) VALUES
(2, 'картридж', 'ddd', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `cartridge_repair`
--

CREATE TABLE `cartridge_repair` (
  `id` int(11) NOT NULL,
  `printer` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cartridge_repair`
--

INSERT INTO `cartridge_repair` (`id`, `printer`, `model`, `price`) VALUES
(3, 'fdfd', 'fddfd', 10),
(4, 'картридж', 'картридж222', 345),
(5, 'qwq', 'qwq', 34533);

-- --------------------------------------------------------

--
-- Структура таблицы `printer_repair`
--

CREATE TABLE `printer_repair` (
  `id` int(11) NOT NULL,
  `printer` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `printer_repair`
--

INSERT INTO `printer_repair` (`id`, `printer`, `model`, `price`) VALUES
(3, 'Принтер 2', 'хороший', 2345),
(4, 'иконки надо ', 'поменять - медленные', 354),
(5, 'tre', 'rttrrt', 123);

-- --------------------------------------------------------

--
-- Структура таблицы `refilling_cartridges`
--

CREATE TABLE `refilling_cartridges` (
  `id` int(11) NOT NULL,
  `printer` varchar(255) NOT NULL,
  `cartridge` varchar(255) NOT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `refilling_cartridges`
--

INSERT INTO `refilling_cartridges` (`id`, `printer`, `cartridge`, `price`) VALUES
(9, 'tr', 't90', 90),
(11, 'df', 'df878', 990),
(14, 'terminator', 't-90', 500),
(15, 'или под кажого производителя', 'свою таблицу?', 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cartridges_sale`
--
ALTER TABLE `cartridges_sale`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cartridge_repair`
--
ALTER TABLE `cartridge_repair`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `printer_repair`
--
ALTER TABLE `printer_repair`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `refilling_cartridges`
--
ALTER TABLE `refilling_cartridges`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `cartridges_sale`
--
ALTER TABLE `cartridges_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `cartridge_repair`
--
ALTER TABLE `cartridge_repair`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `printer_repair`
--
ALTER TABLE `printer_repair`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `refilling_cartridges`
--
ALTER TABLE `refilling_cartridges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

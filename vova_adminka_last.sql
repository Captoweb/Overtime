-- phpMyAdmin SQL Dump
-- version 4.0.10.20
-- https://www.phpmyadmin.net
--
-- Хост: 10.0.0.5:3306
-- Время создания: Авг 19 2019 г., 23:00
-- Версия сервера: 10.1.41-MariaDB
-- Версия PHP: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `9085097564_adminkavova`
--

-- --------------------------------------------------------

--
-- Структура таблицы `aboutus`
--

CREATE TABLE IF NOT EXISTS `aboutus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `content1` text NOT NULL,
  `content2` text CHARACTER SET utf8mb4,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `aboutus`
--

INSERT INTO `aboutus` (`id`, `title`, `content1`, `content2`) VALUES
(1, 'О компании', 'OVER TIME - динамично развивающаяся компания осуществляющая заправку и восстановление картриджей (замену фотобарабана, замену дозирующего лезвия, замену ракеля, замену магнитного вала, замену зарядного ролика), а также ремонт оргтехники. На данный момент заправка картриджей - основной вид деятельности нашей фирмы. Мы предоставляем услуги по высококачественной заправке и перезаправке картриджей, восстановлению печатающих свойств картриджей к лазерным принтерам, а также другой офисной техники в г. Ростове-на-Дону.', 'Заправка картриджей выполняется только высококачественным и проверенным на совместимость тонером для лазерных принтеров, что обеспечивает отменное качество печати и многократное использование одного и того же картриджа. Выезд к клиенту. По Вашему звонку, наши курьеры забирают у Вас использованные картриджи и привозят их к нам. Наши специалисты заправляют их в мастерской. На следующий день или даже в этот (в зависимости от договоренности) Вам доставляют заправленные картриджи (стоимость выезда на место колеблется от 0 до 300 руб в зависимости от района города). Став нашим клиентом, Вы, прежде всего, приобретете надежного партнера, который никогда Вас не подведет. Мы не оставим Вас наедине с Вашими проблемами!');

-- --------------------------------------------------------

--
-- Структура таблицы `cartridges_sale`
--

CREATE TABLE IF NOT EXISTS `cartridges_sale` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `printer` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `cartridges_sale`
--

INSERT INTO `cartridges_sale` (`id`, `printer`, `model`, `price`) VALUES
(2, 'картридж', 'ddd', 1),
(3, 'New super kartridge', 'nano banano', 30000);

-- --------------------------------------------------------

--
-- Структура таблицы `cartridge_repair`
--

CREATE TABLE IF NOT EXISTS `cartridge_repair` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `printer` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

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

CREATE TABLE IF NOT EXISTS `printer_repair` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `printer` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

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

CREATE TABLE IF NOT EXISTS `refilling_cartridges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `printer` varchar(255) NOT NULL,
  `cartridge` varchar(255) NOT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Дамп данных таблицы `refilling_cartridges`
--

INSERT INTO `refilling_cartridges` (`id`, `printer`, `cartridge`, `price`) VALUES
(9, 'HP LJ 1100/ 3200', 'C4092A', 300),
(11, 'HP LJ 1010/1012', 'Q2612A', 300),
(14, 'МФУ HP LJ 3015/3020', 'Q2612A', 300),
(15, 'МФУ MFP 3300/3310', 'C7115X', 400),
(16, 'HP LJ 1200/1220', 'C7115A', 300),
(17, 'HP LJ 1300_1150', 'Q2613A, Q2624A', 300),
(18, 'HP LJ 1160/1320', 'Q5949А', 300),
(19, 'HP LJ 1320', 'Q5949X', 400),
(20, 'HP LJ P2014/2015', 'Q7553A', 300),
(21, 'HP LJ P2015', 'Q7553X', 400);

-- --------------------------------------------------------

--
-- Структура таблицы `refilling_cartridges2`
--

CREATE TABLE IF NOT EXISTS `refilling_cartridges2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `printer` varchar(255) NOT NULL,
  `cartridge` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `refilling_cartridges2`
--

INSERT INTO `refilling_cartridges2` (`id`, `printer`, `cartridge`, `price`) VALUES
(1, 'Canon LBP 800/ 810', 'EP-22', 300),
(2, 'Canon LBP 1210', 'EP-25', 300),
(3, 'Canon LBP 3010', 'Type 712', 300),
(4, 'Canon FC 100/108', 'E16/30/31', 300),
(5, 'Canon LBP 6000', 'Type 725', 300),
(6, 'Canon MF 4410', 'Type 728', 300),
(7, 'Canon LBP 6300/6650', 'Type 719', 300),
(8, 'Canon  MF 5840/5880', 'Type 719H', 6400),
(9, 'Canon i-sensys 4018/ 4120/ 4140/ 4150/ MF4270', 'FX-10', 300);

-- --------------------------------------------------------

--
-- Структура таблицы `refilling_cartridges3`
--

CREATE TABLE IF NOT EXISTS `refilling_cartridges3` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `printer` varchar(255) NOT NULL,
  `cartridge` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `refilling_cartridges3`
--

INSERT INTO `refilling_cartridges3` (`id`, `printer`, `cartridge`, `price`) VALUES
(1, 'Samsung ML1010/1020', 'ML1210D3', 300),
(2, 'Samsung ML1210/1220/1250/1430', 'ML1210D3', 300),
(3, 'Samsung ML1510/1710/1740/1750', 'ML1710D3', 300),
(4, 'Samsung ML1610/1615/1650', 'ML1610D2', 300),
(5, 'Samsung SCX4016/ 4216F', 'SCX4216D3', 300),
(6, 'Samsung SCX4100', 'SCX4100D3', 300);

-- --------------------------------------------------------

--
-- Структура таблицы `refilling_cartridges4`
--

CREATE TABLE IF NOT EXISTS `refilling_cartridges4` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `printer` varchar(255) NOT NULL,
  `cartridge` varchar(255) NOT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `refilling_cartridges4`
--

INSERT INTO `refilling_cartridges4` (`id`, `printer`, `cartridge`, `price`) VALUES
(2, 'Brother HL 2130R/ DCP 7055', 'TN-2080', 350),
(3, 'Brother HL-2035', 'TN-2085', 350),
(4, 'Brother HL-2132/ DCP 7057R', 'TN-2090', 350);

-- --------------------------------------------------------

--
-- Структура таблицы `refilling_cartridges5`
--

CREATE TABLE IF NOT EXISTS `refilling_cartridges5` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `printer` varchar(255) NOT NULL,
  `cartridge` varchar(255) NOT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `refilling_cartridges5`
--

INSERT INTO `refilling_cartridges5` (`id`, `printer`, `cartridge`, `price`) VALUES
(1, 'Xerox', 'Xerox', 122);

-- --------------------------------------------------------

--
-- Структура таблицы `refilling_cartridges6`
--

CREATE TABLE IF NOT EXISTS `refilling_cartridges6` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `printer` varchar(255) NOT NULL,
  `cartridge` varchar(255) NOT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `refilling_cartridges6`
--

INSERT INTO `refilling_cartridges6` (`id`, `printer`, `cartridge`, `price`) VALUES
(1, 'Kyocera', 'Kyocera', 112);

-- --------------------------------------------------------

--
-- Структура таблицы `refilling_cartridges7`
--

CREATE TABLE IF NOT EXISTS `refilling_cartridges7` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `printer` varchar(255) NOT NULL,
  `cartridge` varchar(255) NOT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `refilling_cartridges7`
--

INSERT INTO `refilling_cartridges7` (`id`, `printer`, `cartridge`, `price`) VALUES
(1, 'Panasonic', 'Panasonic', 11),
(4, 'Panasonic', 'Panasonic', 300);

-- --------------------------------------------------------

--
-- Структура таблицы `refilling_cartridges8`
--

CREATE TABLE IF NOT EXISTS `refilling_cartridges8` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `printer` varchar(255) NOT NULL,
  `cartridge` varchar(255) NOT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `refilling_cartridges8`
--

INSERT INTO `refilling_cartridges8` (`id`, `printer`, `cartridge`, `price`) VALUES
(1, 'Sharp', 'Sharp', 11);

-- --------------------------------------------------------

--
-- Структура таблицы `refilling_cartridges9`
--

CREATE TABLE IF NOT EXISTS `refilling_cartridges9` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `printer` varchar(255) NOT NULL,
  `cartridge` varchar(255) NOT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `refilling_cartridges9`
--

INSERT INTO `refilling_cartridges9` (`id`, `printer`, `cartridge`, `price`) VALUES
(1, 'Ricoh', 'Ricoh', 11);

-- --------------------------------------------------------

--
-- Структура таблицы `refilling_cartridges10`
--

CREATE TABLE IF NOT EXISTS `refilling_cartridges10` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `printer` varchar(255) NOT NULL,
  `cartridge` varchar(255) NOT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `refilling_cartridges10`
--

INSERT INTO `refilling_cartridges10` (`id`, `printer`, `cartridge`, `price`) VALUES
(1, 'Oki', 'Oki', 111);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

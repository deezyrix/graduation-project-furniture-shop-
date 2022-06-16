-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Май 27 2022 г., 08:43
-- Версия сервера: 5.7.35-38
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cj58677_main`
--

-- --------------------------------------------------------

--
-- Структура таблицы `applications`
--

CREATE TABLE IF NOT EXISTS `applications` (
  `application_id` int(11) NOT NULL AUTO_INCREMENT,
  `application_name` tinytext CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL,
  `application_phone` tinytext CHARACTER SET utf8 NOT NULL,
  `application_date` datetime NOT NULL,
  PRIMARY KEY (`application_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `applications`
--

INSERT INTO `applications` (`application_id`, `application_name`, `application_phone`, `application_date`) VALUES
(1, 'Дмитрий', '127', '2022-05-27 08:16:40'),
(2, 'Тест', '127', '2022-05-27 08:26:45'),
(3, 'Тест', '127', '2022-05-27 08:28:45'),
(4, 'выопывпавпав', '127', '2022-05-27 08:34:41'),
(5, 'Проверка', '87777777777', '2022-05-27 08:37:51');

-- --------------------------------------------------------

--
-- Структура таблицы `applications_deleted`
--

CREATE TABLE IF NOT EXISTS `applications_deleted` (
  `application_id` int(11) NOT NULL AUTO_INCREMENT,
  `application_name` tinytext CHARACTER SET utf8 NOT NULL,
  `application_phone` tinytext CHARACTER SET utf8 NOT NULL,
  `application_date` datetime NOT NULL,
  `removed_at` datetime NOT NULL,
  PRIMARY KEY (`application_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `managers`
--

CREATE TABLE IF NOT EXISTS `managers` (
  `manager_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `manager_login` varchar(15) CHARACTER SET utf8 NOT NULL,
  `manager_pass` varchar(32) CHARACTER SET ucs2 NOT NULL,
  PRIMARY KEY (`manager_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `managers`
--

INSERT INTO `managers` (`manager_id`, `manager_login`, `manager_pass`) VALUES
(1, 'manager', 'mebel2022');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

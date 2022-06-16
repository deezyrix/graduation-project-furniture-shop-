-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 13 2022 г., 10:33
-- Версия сервера: 8.0.24
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `goods`
--

-- --------------------------------------------------------

--
-- Структура таблицы `1`
--

CREATE TABLE `1` (
  `product_id` int NOT NULL,
  `product_img` varchar(12) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `1`
--

INSERT INTO `1` (`product_id`, `product_img`, `product_name`, `product_desc`, `product_price`) VALUES
(1, 'bed1.jpg', 'Соната', 'Размер спального места — 1600х2000 мм. Мягкое изголовье кровати создает дополнительный комфорт для отдыха.', 68200),
(2, 'bed2.jpg', 'Версаль', 'Размер спального места — 1200х2000 мм. Спинка кровати декорирована оригинальной фрезеровкой с патиной.', 52000),
(3, 'bed3.jpg', 'Кашемир', 'Размер спального места – 1600х2000 мм. Спинка кровати из софт-велюра отличается повышенной степенью комфорта, что обеспечивается мягким наполнителем.', 66350),
(4, 'bed4.jpg', 'Кашемир 2', 'Размер спального места – 900х2000 мм. Спинка кровати из софт-велюра отличается повышенной степенью комфорта, что обеспечивается приятной на ощупь тканью обивки.', 34700);

-- --------------------------------------------------------

--
-- Структура таблицы `2`
--

CREATE TABLE `2` (
  `product_id` int NOT NULL,
  `product_img` varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `2`
--

INSERT INTO `2` (`product_id`, `product_img`, `product_name`, `product_desc`, `product_price`) VALUES
(1, 'tablesit1.jpg', 'Стол Орфей', 'В сложенном виде размер стола – 120х75 см, в разложенном – 160х75 см (с одной вставкой), 200х75 см (с двумя вставками); стола – 76 см.', 37380),
(2, 'tablesit2.jpg', 'Стул Десерт бежевый', 'Современный эргономичный стул в самых актуальных цветах. Размеры: 450х620х850.', 7850),
(3, 'tablesit3.jpg', 'Стул Десерт коричневый', 'Современный эргономичный стул в самых актуальных цветах. Размеры: 450х620х850.', 7800);

-- --------------------------------------------------------

--
-- Структура таблицы `3`
--

CREATE TABLE `3` (
  `product_id` int NOT NULL,
  `product_img` varchar(25) NOT NULL,
  `product_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `3`
--

INSERT INTO `3` (`product_id`, `product_img`, `product_name`, `product_desc`, `product_price`) VALUES
(1, 'kid1.jpg', 'Британия 1', 'Лестницу в кровати-чердаке можно установить как справа, так и слева. Размер спального места - 900х2000 мм. Матрас не входит в состав кровати, Вы можете приобрести его отдельно.', 30500),
(2, 'kid2.jpg', 'Британия 2', 'Все кромки модулей покрыты противоударным кантом, защищающим края изделий от сколов и влаги и увеличивает срок службы. Регулируемые ножки изделий позволяют скорректировать неровности пола.', 47000);

-- --------------------------------------------------------

--
-- Структура таблицы `4`
--

CREATE TABLE `4` (
  `product_id` int NOT NULL,
  `product_img` varchar(25) NOT NULL,
  `product_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `4`
--

INSERT INTO `4` (`product_id`, `product_img`, `product_name`, `product_desc`, `product_price`) VALUES
(1, 'sp1.jpg', 'Версаль', 'Элегантная классика, выполненная в трендовых светлых цветах: Сосна «Астрид» и «Ваниль». Сложная многоступенчатая фрезеровка выгодно оттеняется патинированием.', 93000),
(2, 'sp2.jpg', 'Сонтэ', 'Фасады спальни украшены сложной фрезеровкой, глиттерным рисунком и кристаллами премиум-класса. Высокую надежность и длительный срок эксплуатации изделий обеспечивает установленная в модулях европейская фурнитура.', 99000),
(3, 'sp3.jpg', 'Верил', 'Модули оснащены регулируемыми по высоте ножками и опорами, которые позволяют компенсировать возможные неровности пола при установке.', 67000);

-- --------------------------------------------------------

--
-- Структура таблицы `5`
--

CREATE TABLE `5` (
  `product_id` int NOT NULL,
  `product_img` varchar(25) NOT NULL,
  `product_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `5`
--

INSERT INTO `5` (`product_id`, `product_img`, `product_name`, `product_desc`, `product_price`) VALUES
(1, 'mmeb1.jpg', 'Диван-кровать Атланта', 'Строгие формы смягчены за счет пышных приспинных подушек, рельеф которых сформирован при помощи утяжек. Твердые накладки на боковинах выполняют роль столика.', 17990),
(2, 'mmeb2.jpg', 'Диван-кровать Риммини', 'Обивочная ткань с мягкой бархатистой поверхностью. Материал устойчив к заломам и выпадению ворсинок, обладает высоким показателем истираемости.', 41900),
(3, 'mmeb3.jpg', 'Диван-кровать Аликанте', 'Чёткие формы и строгие линии дивана Аликанте станут украшением современного интерьера.', 38000),
(4, 'mmeb4.jpg', 'Диван-кровать Мансберг', 'Угловой диван-кровать серии Мансберг – это стильный и эргономичный вариант для оформления и оснащения любой гостиной или спальни.', 30000);

-- --------------------------------------------------------

--
-- Структура таблицы `6`
--

CREATE TABLE `6` (
  `product_id` int NOT NULL,
  `product_img` varchar(25) NOT NULL,
  `product_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `6`
--

INSERT INTO `6` (`product_id`, `product_img`, `product_name`, `product_desc`, `product_price`) VALUES
(1, 'kum1.jpg', 'Мегаполис', 'Крепежная фурнитура прилагается в комплекте. Комод можно использовать не только в сочетании с другими модулями подростковой, но и как отдельный предмет мебели.', 13200),
(2, 'kum2.jpg', 'Эверест', 'В комоде установлены четыре выдвижных ящика. Шариковые направляющие обеспечивают длительный срок эксплуатации. Ножки модуля регулируются по высоте, что позволяет скорректировать неровности пола.', 12300),
(3, 'kum3.jpg', 'Фреска', 'Комод состоит из четырех выдвижных ящиков и вместительной ниши закрытой дверцей. Дверца оснащена петлями с доводчиками. Необходимо крепление к стене во избежание опрокидывания.', 29900),
(4, 'kum4.jpg', 'Венеция', 'Комод состоит из четырех выдвижных вместительных ящиков. Ножки изделия регулируются по высоте для удобной установки на любую поверхность. Во избежание опрокидывания необходимо крепление модуля.', 15900);

-- --------------------------------------------------------

--
-- Структура таблицы `7`
--

CREATE TABLE `7` (
  `product_id` int NOT NULL,
  `product_img` varchar(25) NOT NULL,
  `product_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `7`
--

INSERT INTO `7` (`product_id`, `product_img`, `product_name`, `product_desc`, `product_price`) VALUES
(1, 'kuh1.jpg', 'Каролина', 'Набор мебели для кухни «Каролина» выполнен в цветовом сочетании «Дуб Сантана» / «Каролина Карамель». Фасады украшены фрезеровкой и мерцающим глиттерным рисунком.', 102000),
(2, 'kuh2.jpg', 'Виктория', 'Набор мебели для кухни «Виктория» выполнен в интересном контрастном сочетании цветов «Ваниль» и «Бордо». Модули украшены фрезеровкой и кристаллами премиум-класса.', 95000),
(3, 'kuh3.jpg', 'Шарлотта', 'Древесная текстура и декоративные розетки делают кухню необыкновенной и приковывают взгляд. Витрины с дизайнерским рисунком делают кухню визуально легкой и изящной.', 150000),
(4, 'kuh4.jpg', 'Надежда', 'Плавное закрывание дверок обеспечивают петли с доводчиками. Регулируемые по высоте ножки позволяют компенсировать возможные неровности пола.', 127000);

-- --------------------------------------------------------

--
-- Структура таблицы `8`
--

CREATE TABLE `8` (
  `product_id` int NOT NULL,
  `product_img` varchar(25) NOT NULL,
  `product_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `8`
--

INSERT INTO `8` (`product_id`, `product_img`, `product_name`, `product_desc`, `product_price`) VALUES
(1, 'gos1.jpg', 'Тиффани', 'Ажурная фрезеровка на фасадах дополнена глиттерным рисунком и кристаллами премиум-класса, что придаст гостиной дополнительный шарм.', 66750),
(2, 'gos2.jpg', 'Фреска', 'Коллекция создана для независимых, целеустремленных, идущих в ногу со временем людей. Она дарит ощущение свободы и легкости.', 71900),
(3, 'gos3.jpg', 'Фреска 2', 'Отразите свой неповторимый стиль за счет форм и чарующего рисунка золотой патиной на фасадах, который хочется разглядывать часами!', 66350),
(4, 'gos4.jpg', 'Фреска 3', 'Изысканность в сочетании с теплыми мягкими оттенками, а также многообразие деталей, помогающих улучшить вид общего пространства.', 77000);

-- --------------------------------------------------------

--
-- Структура таблицы `9`
--

CREATE TABLE `9` (
  `product_id` int NOT NULL,
  `product_img` varchar(25) NOT NULL,
  `product_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_desc` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `product_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `9`
--

INSERT INTO `9` (`product_id`, `product_img`, `product_name`, `product_desc`, `product_price`) VALUES
(1, 'ost1.jpg', 'Стеллаж Соната', 'Модуль является универсальным и может быть собран как на левую, так и на правую сторону. Для большей устойчивости рекомендуется ставить совместно с другими модулями.', 11600),
(2, 'ost2.jpg', 'Стеллаж Версаль', 'Плавное закрывание дверцы обеспечивают петли с доводчиками. Шариковые направляющие обеспечивают плавный бесшумный ход и длительный срок эксплуатации изделия.', 19500);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `1`
--
ALTER TABLE `1`
  ADD PRIMARY KEY (`product_id`);

--
-- Индексы таблицы `2`
--
ALTER TABLE `2`
  ADD PRIMARY KEY (`product_id`);

--
-- Индексы таблицы `3`
--
ALTER TABLE `3`
  ADD PRIMARY KEY (`product_id`);

--
-- Индексы таблицы `4`
--
ALTER TABLE `4`
  ADD PRIMARY KEY (`product_id`);

--
-- Индексы таблицы `5`
--
ALTER TABLE `5`
  ADD PRIMARY KEY (`product_id`);

--
-- Индексы таблицы `6`
--
ALTER TABLE `6`
  ADD PRIMARY KEY (`product_id`);

--
-- Индексы таблицы `7`
--
ALTER TABLE `7`
  ADD PRIMARY KEY (`product_id`);

--
-- Индексы таблицы `8`
--
ALTER TABLE `8`
  ADD PRIMARY KEY (`product_id`);

--
-- Индексы таблицы `9`
--
ALTER TABLE `9`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `1`
--
ALTER TABLE `1`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `2`
--
ALTER TABLE `2`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `3`
--
ALTER TABLE `3`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `4`
--
ALTER TABLE `4`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `5`
--
ALTER TABLE `5`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `6`
--
ALTER TABLE `6`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `7`
--
ALTER TABLE `7`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `8`
--
ALTER TABLE `8`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `9`
--
ALTER TABLE `9`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

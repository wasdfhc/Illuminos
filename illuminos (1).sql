-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 12 2023 г., 19:26
-- Версия сервера: 10.8.4-MariaDB
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `illuminos`
--

-- --------------------------------------------------------

--
-- Структура таблицы `films`
--

CREATE TABLE `films` (
  `film_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(9999) NOT NULL,
  `genres` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `estimation` varchar(255) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `trailer` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `films`
--

INSERT INTO `films` (`film_id`, `name`, `description`, `genres`, `age`, `estimation`, `poster`, `category`, `trailer`) VALUES
(1, 'Назад в будущее', 'Подросток Марти с помощью машины времени, сооружённой его другом-профессором доком Брауном, попадает из 80-х в далекие 50-е. Там он встречается со своими будущими родителями, ещё подростками, и другом-профессором, совсем молодым.', 'Фантастика, комедия, приключения', '12+', '8.6', 'asset/img/film1.png', 'Фильм', '<iframe class =\"video_trailer\" src=\"https://www.youtube.com/embed/ou8w0gQHlRE?si=euU5nInotOchC4op\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(2, 'Дивергент', 'В антиутопическом Чикаго будущего существует общество, члены которого придумали способ избегать конфликтов и поддерживать вокруг незыблемый порядок. Каждый человек по достижении 16 лет должен определить, к чему лежит его душа, и в зависимости от своих личностных качеств присоединиться к одной из пяти фракций – Искренность, Бесстрашие, Эрудиция, Дружелюбие или Отречение.\r\n\r\nДля того, чтобы и не ошибиться с фракцией, накануне церемонии выбора подростки проходят специальное тестирование. Юная Беатрис оказывается угрозой для всей сложившейся системы, когда тесты выявляют в ней дивергента – человека, которого невозможно однозначно определить в одну из фракций. Способные мыслить независимо и не питающие особого уважения к правительству, дивергенты одним своим существованием дискредитируют принципы, на которых строится общество. И теперь Беатрис – одна из таких людей, живущих вне закона и борющихся с системой, которая намерена любой ценой от них избавиться.', 'Фантастика, детектив', '12+', '6.7', 'asset/img/film2.png', 'Фильм', '<iframe class=\"video_trailer\" src=\"https://www.youtube.com/embed/p0vfRNuVWwI?si=KS3E50Aww-teB2Ii\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(3, 'Обитель зла', 'В гигантской подземной лаборатории выходит из-под контроля опаснейший вирус и мгновенно превращает своих жертв в прожорливых зомби. Достаточно одного их укуса или царапины, чтобы человек стал обезумевшим пожирателем живой плоти.\r\n\r\nВоенные посылают в кишащий голодными монстрами секретный комплекс отряд спецназа, к которому присоединяются Элис и полицейский Мэтт. У них есть только три часа, чтобы уничтожить вирус.', 'Ужасы, боевик, фантастика', '18+', '7.6', 'asset/img/film3.png', 'Фильм', '<iframe class=\"video_trailer\" src=\"https://www.youtube.com/embed/tgPcsV-mvxQ?si=NrblU9tRADXMcbRR\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(4, 'Ходячий замок', 'Злая ведьма заточила 18-летнюю Софи в тело старухи. Девушка-бабушка бежит из города куда глаза глядят и встречает удивительный дом на ножках, где знакомится с могущественным волшебником Хаулом и демоном Кальцифером. Кальцифер должен служить Хаулу по договору, условия которого он не может разглашать. Девушка и демон решают помочь друг другу избавиться от злых чар.', 'Аниме, мелодрама', '6+', '8.3', 'asset/img/film4.png', 'Фильм', '<iframe class=\"video_trailer\" src=\"https://www.youtube.com/embed/otCW9XEZwlY?si=tmuApNGfT6ju5GB9\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(5, 'Унесенные призраками', 'Тихиро с мамой и папой переезжает в новый дом. Заблудившись по дороге, они оказываются в странном пустынном городе, где их ждет великолепный пир. Родители с жадностью набрасываются на еду и к ужасу девочки превращаются в свиней, став пленниками злой колдуньи Юбабы. Теперь, оказавшись одна среди волшебных существ и загадочных видений, Тихиро должна придумать, как избавить своих родителей от чар коварной старухи.', 'Аниме, фэнтези', '12+', '8.5', 'asset/img/film5.png', 'Фильм', '<iframe class=\"video_trailer\" src=\"https://www.youtube.com/embed/bgxiTkAlQrw?si=Cm9iOMMl9t3abO3T\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(6, 'Твое имя', 'Токийский парень Таки и провинциальная девушка Мицуха обнаруживают, что между ними существует странная связь. Во сне они меняются телами и проживают жизни друг друга. Но однажды эта способность исчезает так же внезапно, как появилась. Таки решает во что бы то ни стало отыскать Мицуху.', 'Аниме, драма', '12+', '8.4', 'asset/img/film6.png', 'Фильм', '<iframe class=\"video_trailer\" src=\"https://www.youtube.com/embed/tT7b5wR0IOM?si=ZDx7slff07HvClR_\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `total_price`) VALUES
(1, 14499),
(2, 14499),
(3, 11990),
(4, 15999),
(5, 31998),
(6, 17500);

-- --------------------------------------------------------

--
-- Структура таблицы `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`) VALUES
(1, 1, 2, 1),
(2, 2, 2, 1),
(3, 3, 3, 1),
(4, 4, 1, 1),
(5, 5, 1, 2),
(6, 6, 42, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(9999) NOT NULL,
  `genres` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `estimation` varchar(255) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `trailer` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `genres`, `age`, `estimation`, `poster`, `category`, `trailer`) VALUES
(1, 'Барби', 'Самая обыкновенная стереотипная Барби живёт в великолепном розовом Барбиленде, и каждый её день идеален. Она меняет наряды, загорает на пляже, проводит время с другими Барби, день заканчивается шумной вечеринкой с танцами, и в этой позитивной кутерьме с блёстками влюблённый Кен — всего лишь приложение к Барби. Однажды куклу посещают мысли о смерти, и её сделанные под туфли с каблуками ноги вдруг становятся плоскими. Чтобы разобраться в происходящем и вернуть привычный пластмассовый мир, Барби придётся отправиться в мир реальный и найти там свою девочку-хозяйку. За ней увязывается не мыслящий жизни без своего кумира Кен.', 'Комедия, приключения, фэнтези', '18+', '7,1', 'asset/img/1.png', 'Фильм', ''),
(2, 'Оппенгеймер', 'История жизни американского физика Роберта Оппенгеймера, который стоял во главе первых разработок ядерного оружия.', 'Биография, драма, история', '16+', '8.5', 'asset/img/2.png', 'Фильм', ''),
(3, 'Поехавшая', 'Обычная жительница мегаполиса Аня Смолина после череды неудач решает, что пришло время всё изменить. Она достает запылившийся велосипед, сажает в прицеп таксу Капу и отправляется через всю Россию — мириться с мамой. Девушку ждёт долгая и трудная дорога с массой испытаний, борьба с самой собой, дружелюбные (и не очень) дальнобойщики и пирожки с трассы. И, конечно, это путешествие принесет судьбоносные встречи.', 'Комедия, мелодрама, драма', '16+', '7.7', 'asset/img/3.png', 'Фильм', ''),
(4, 'Леди Баг и Супер-Кот', 'В обыкновенной французской школе учатся девочка Маринетт и мальчик Адриан, в которого она влюблена. Казалось бы, классическая история первой любви, но эти ребята совсем не те, за кого себя выдают. Когда городу угрожает опасность, Маринетт превращается в супергероиню Леди Баг, а Адриан — в Супер-Кота. Их невероятные способности помогают бороться со злом, но при этом никто из них не знает, кто на самом деле скрывается под маской.', 'Мультфильм, семейный, детский', '6+', '7.7', 'asset/img/4.png', 'Фильм', ''),
(5, 'Содержанки', 'Москва, наши дни. Город больших денег и страстей, великолепных женщин и состоятельных мужчин, светских раутов и опасных интриг. Здесь красивые девушки мечтают попасть в мир гламура, струящихся шелков и сверкающих драгоценностей, а главная светская сваха города ловко пристраивает их в надежные руки. Приехав в столицу, Даша - искусствовед из провинции - мечтает о новой лучшей жизни, но загадочное жестокое происшествие изменит все.', 'Триллер, драма', '18+', '6.7', 'asset/img/soderzhanki.png', 'Сериал', '<iframe class=\"video_trailer\" src=\"https://www.youtube.com/embed/aT35UdLZpNs?si=uaH6g_pbphdMCaqB\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(6, 'Бег улиток', 'Марина работает в кризисном центре для подростков. От сумасшедшей нагрузки у нее случается инсульт, появляются провалы в памяти. Она не помнит, что случилось с ее пациенткой Лерой, которая загадочным образом исчезла из центра. Марина пытается найти и спасти девочку, замечая, что мир вокруг нее становится все более странным. Зритель втягивается в воронку опасности, открывая для себя существование параллельного мира, в котором Марина — отчаянная журналистка, ведущая рискованное расследование. Героиням придется пройти большой путь, чтобы понять, что происходит на самом деле…', 'Драма, триллер', '18+', '6.4', 'asset/img/beg_ulitok.png', 'Сериал', '<iframe class=\"video_trailer\" src=\"https://www.youtube.com/embed/x3h96vppxJ8?si=c2SYaNdOtI2Kk5qL\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(7, 'Красная королева', 'Сериал расскажет о любви и трагической судьбе первой красавицы Советского Союза Регины Збарской.', 'Биография, драма', '16+', '7.8', 'asset/img/red_queen.png', 'Сериал', '<iframe class=\"video_trailer\" src=\"https://www.youtube.com/embed/eed0-TmkKow?si=EsuOla3oEIZC9gJK\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Структура таблицы `serials`
--

CREATE TABLE `serials` (
  `serial_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(9999) NOT NULL,
  `genres` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `estimation` varchar(255) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `trailer` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `serials`
--

INSERT INTO `serials` (`serial_id`, `name`, `description`, `genres`, `age`, `estimation`, `poster`, `category`, `trailer`) VALUES
(1, 'Содержанки', 'Москва, наши дни. Город больших денег и страстей, великолепных женщин и состоятельных мужчин, светских раутов и опасных интриг. Здесь красивые девушки мечтают попасть в мир гламура, струящихся шелков и сверкающих драгоценностей, а главная светская сваха города ловко пристраивает их в надежные руки. Приехав в столицу, Даша - искусствовед из провинции - мечтает о новой лучшей жизни, но загадочное жестокое происшествие изменит все.', 'Триллер, драма', '18+', '6.7', 'asset/img/soderzhanki.png', 'Сериал', '<iframe class=\"video_trailer\" src=\"https://www.youtube.com/embed/aT35UdLZpNs?si=uaH6g_pbphdMCaqB\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(2, 'Бег улиток', 'Марина работает в кризисном центре для подростков. От сумасшедшей нагрузки у нее случается инсульт, появляются провалы в памяти. Она не помнит, что случилось с ее пациенткой Лерой, которая загадочным образом исчезла из центра. Марина пытается найти и спасти девочку, замечая, что мир вокруг нее становится все более странным. Зритель втягивается в воронку опасности, открывая для себя существование параллельного мира, в котором Марина — отчаянная журналистка, ведущая рискованное расследование. Героиням придется пройти большой путь, чтобы понять, что происходит на самом деле…', 'Драма, триллер', '18+', '6.4', 'asset/img/beg_ulitok.png', 'Сериал', '<iframe class=\"video_trailer\" src=\"https://www.youtube.com/embed/x3h96vppxJ8?si=c2SYaNdOtI2Kk5qL\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(3, 'Красная королева', 'Сериал расскажет о любви и трагической судьбе первой красавицы Советского Союза Регины Збарской.', 'Биография, драма', '16+', '7.8', 'asset/img/red_queen.png', 'Сериал', '<iframe class=\"video_trailer\" src=\"https://www.youtube.com/embed/eed0-TmkKow?si=EsuOla3oEIZC9gJK\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(4, 'Бесстыжие', 'О взбалмошной многодетной семье Галлагеров и их соседях, которые веселятся, попадают в самые невероятные ситуации и пытаются выжить в этом мире всеми возможными средствами, но при этом как можно меньше работая.', 'Драма, комедия', '18+', '8.7', 'asset/img/serials4.png', 'Сериал', '<iframe class = \"video_trailer\" src=\"https://www.youtube.com/embed/EsoHeT5HyKo?si=FmZYILy4PZntmfrK\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(5, 'Отель “Феникс”', '19-летняя Лера Пичугина просыпается в гостиничном номере, залитом кровью. Она видит, как ее безжизненное тело лежит в ванной... что с ней случилось? Убегая от гостиницы, она пытается позвать на помощь, но никто ее не замечает. Через несколько дней все сомнения развеваются. Тело Леры вылавливают из затопленного карьера. Неужели она действительно мертва? Если да, то почему она все еще ходит среди живых? И почему на самом деле ее могут видеть только несколько человек? И почему именно они? Ей придется найти ответы - живой или мертвой.', 'Детектив', '18+', '7.4', 'asset/img/serials5.png', 'Сериал', '<iframe class=\"video_trailer\" src=\"https://www.youtube.com/embed/osaLH1qaGDY?si=m31noNUhIWW2LJ-e\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>'),
(6, 'Эйфория', '17-летняя Ру Беннетт возвращается домой после лечения в реабилитационной клинике. Не теряя времени, она опять берется за старые привычки — наркотики и тусовки. Однако появление в городе девушки Джулс становится для Ру знаком надежды.', 'Драма', '18+', '7.5', 'asset/img/serials6.png', 'Сериал', '<iframe class =\"video_trailer\" src=\"https://www.youtube.com/embed/-ZlcXvYLnmg?si=jylwe8cWmaVSTtd7\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `patronymic` varchar(255) NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `login`, `password`, `name`, `surname`, `patronymic`, `role`) VALUES
(2, 'sss@gmail.com', 'boris', 'ssssss', 'Борис', 'Борис', 'Борис', ''),
(3, '', 'admin', 'admin', '', '', '', 'admin'),
(4, '', 'admin', 'admin', '', '', '', ''),
(5, 'sss111@gmail.com', 'qwerty', 'qwerty', 'Ааааааа', 'азязя', 'Азязя', ''),
(6, 'qweqwe@gmail.com', 'qweqwe', '123123', 'Абоба', 'Абоба', 'Абоба', 'client'),
(7, 'kent@gmail.com', 'kent', 'qwerty', 'Кент', 'Кент', 'Кент', 'client'),
(8, 'aboba@gmail.com', 'Aboba', '123456', 'Абоба', 'Абоба', 'Абоба', 'client'),
(9, '123sss@gmail.com', 'qwerty123', '123123', 'Ахахах', 'Ахахах', 'Ахахах', 'client');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`film_id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `serials`
--
ALTER TABLE `serials`
  ADD PRIMARY KEY (`serial_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT для таблицы `serials`
--
ALTER TABLE `serials`
  MODIFY `serial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

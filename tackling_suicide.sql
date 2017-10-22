-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 22 2017 г., 20:11
-- Версия сервера: 10.1.26-MariaDB
-- Версия PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tackling_suicide`
--

-- --------------------------------------------------------

--
-- Структура таблицы `chatter_categories`
--

CREATE TABLE `chatter_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `chatter_categories`
--

INSERT INTO `chatter_categories` (`id`, `parent_id`, `order`, `name`, `color`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Music', '#1abc9c', 'music', NULL, NULL),
(2, NULL, 5, 'Education/Learning', '#34495e', 'education', NULL, NULL),
(4, NULL, 4, 'Sport', '#9b59b6', 'sport', NULL, NULL),
(5, NULL, 8, 'Books/Literature', '#e74c3c', 'books', NULL, NULL),
(6, NULL, 3, 'Movies/ TV Series', '#3498db', 'movies', NULL, NULL),
(7, NULL, 7, 'Anime', '#e67e22', 'Anime', NULL, NULL),
(9, NULL, 9, 'Animals', '#2c3e50', 'animals', NULL, NULL),
(10, NULL, 6, 'Humor', '#f1c40f', 'humor', NULL, NULL),
(11, NULL, 2, 'Games', '#2ecc71', 'games', NULL, NULL),
(12, NULL, 10, 'Other', '#7f8c8d', 'other', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `chatter_discussion`
--

CREATE TABLE `chatter_discussion` (
  `id` int(10) UNSIGNED NOT NULL,
  `chatter_category_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `sticky` tinyint(1) NOT NULL DEFAULT '0',
  `views` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `answered` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT '#232629'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `chatter_discussion`
--

INSERT INTO `chatter_discussion` (`id`, `chatter_category_id`, `title`, `user_id`, `sticky`, `views`, `answered`, `created_at`, `updated_at`, `slug`, `color`) VALUES
(16, 11, 'PUBG_', 9, 0, 0, 0, '2017-10-21 17:02:25', '2017-10-21 17:02:25', 'pubg', NULL),
(17, 12, 'I wnat buy a car', 9, 0, 0, 0, '2017-10-21 17:07:14', '2017-10-21 17:07:14', 'i-wnat-buy-a-car', NULL),
(18, 6, 'Movies', 10, 0, 0, 0, '2017-10-21 17:07:24', '2017-10-21 17:07:24', 'movies', NULL),
(19, 5, 'Stephen King', 8, 0, 0, 0, '2017-10-21 17:10:53', '2017-10-21 17:10:53', 'stephen-king', NULL),
(20, 11, 'Please, do feed the trolls!', 11, 0, 0, 0, '2017-10-21 17:20:55', '2017-10-21 17:20:55', 'please-do-feed-the-trolls', NULL),
(21, 1, 'Metal', 9, 0, 0, 0, '2017-10-21 17:34:00', '2017-10-21 17:34:00', 'metal', NULL),
(24, 12, 'Hello HACK', 9, 0, 0, 0, '2017-10-22 08:27:23', '2017-10-22 08:27:23', 'hello-hack', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `chatter_post`
--

CREATE TABLE `chatter_post` (
  `id` int(10) UNSIGNED NOT NULL,
  `chatter_discussion_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `markdown` tinyint(1) NOT NULL DEFAULT '0',
  `locked` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `chatter_post`
--

INSERT INTO `chatter_post` (`id`, `chatter_discussion_id`, `user_id`, `body`, `created_at`, `updated_at`, `markdown`, `locked`) VALUES
(18, 16, 9, '<p>Look for new game like PUBG but dont have money for what, say me please what alternative can I play.</p>', '2017-10-21 17:02:25', '2017-10-21 17:02:25', 0, 0),
(19, 16, 8, '<p><span style=\"color: #000000; font-family: -apple-system, BlinkMacSystemFont, Roboto, \'Open Sans\', \'Helvetica Neue\', sans-serif; font-size: 13px;\">U can buy something like dayz&nbsp;</span></p>', '2017-10-21 17:03:19', '2017-10-21 17:03:19', 0, 0),
(20, 17, 9, '<p>I want to buy a new car, i was looking for Toyota Avensis or BMW m3 both are mad in 2013, can u help me please.</p>', '2017-10-21 17:07:14', '2017-10-21 17:07:39', 0, 0),
(21, 18, 10, '<p><span style=\"color: #000000; font-family: -apple-system, BlinkMacSystemFont, Roboto, \'Open Sans\', \'Helvetica Neue\', sans-serif; font-size: 13px;\">Yesterday I watched the movie arrival, I liked the meaning of the movie, the actors play,who and what he thinks?</span></p>', '2017-10-21 17:07:24', '2017-10-21 17:07:24', 0, 0),
(22, 17, 8, '<p><span style=\"color: #000000; font-family: -apple-system, BlinkMacSystemFont, Roboto, \'Open Sans\', \'Helvetica Neue\', sans-serif; font-size: 13px;\">&nbsp;I really like the m3 cuz the BMW vehicle are sustainable and i like them very like&nbsp;</span></p>', '2017-10-21 17:07:41', '2017-10-21 17:07:41', 0, 0),
(23, 18, 9, '<p>&nbsp;the movie really has a strong religious meaning</p>\r\n<p>&nbsp;</p>', '2017-10-21 17:08:32', '2017-10-21 17:08:32', 0, 0),
(24, 17, 10, '<p><span style=\"color: #000000; font-family: -apple-system, BlinkMacSystemFont, Roboto, \'Open Sans\', \'Helvetica Neue\', sans-serif; font-size: 13px;\">&nbsp;I dont know look for yourself, try the both cars and lok that u like more.&nbsp;</span></p>', '2017-10-21 17:08:38', '2017-10-21 17:08:38', 0, 0),
(25, 18, 8, '<p><span style=\"color: #000000; font-family: -apple-system, BlinkMacSystemFont, Roboto, \'Open Sans\', \'Helvetica Neue\', sans-serif; font-size: 13px;\">I agree with you,i especially liked the end of the movie and the message it sent.</span></p>', '2017-10-21 17:08:51', '2017-10-21 17:08:51', 0, 0),
(26, 16, 10, '<p><span style=\"color: #000000; font-family: -apple-system, BlinkMacSystemFont, Roboto, \'Open Sans\', \'Helvetica Neue\', sans-serif; font-size: 13px;\">Or MINCRAft :D</span></p>', '2017-10-21 17:09:42', '2017-10-21 17:09:42', 0, 0),
(27, 19, 8, '<p><span style=\"color: #000000; font-family: -apple-system, BlinkMacSystemFont, Roboto, \'Open Sans\', \'Helvetica Neue\', sans-serif; font-size: 13px;\">hello, where can I find the stephen king 11/22/63 in electronic format?</span></p>', '2017-10-21 17:10:53', '2017-10-21 17:10:53', 0, 0),
(28, 19, 10, '<p><span style=\"color: #000000; font-family: -apple-system, BlinkMacSystemFont, Roboto, \'Open Sans\', \'Helvetica Neue\', sans-serif; font-size: 13px;\">I bought from Amazon, but it\'s on the booktop.</span></p>', '2017-10-21 17:11:11', '2017-10-21 17:11:11', 0, 0),
(29, 19, 9, '<p>he movie really has a strong religious meaning</p>', '2017-10-21 17:11:48', '2017-10-21 17:11:48', 0, 0),
(30, 20, 11, '<p>Quelling blade<br />Slippers of agility x2<br />Tango<br />-Farm<br />Quelling blade<br />Tango (optional)<br />Poorman\'s shield<br />Phase Boots<br />Morbid Mask<br />-Farm<br />Quelling blade<br />Poorman\'s shield<br />Phase boots<br />Sange and Yasha<br />Silver Edge<br />Satanic<br />-Farm<br />Quelling Blade<br />Boots of Travel<br />Daedalus<br />Silver Edge<br />Satanic<br />Eye of Skadi</p>', '2017-10-21 17:20:55', '2017-10-21 17:20:55', 0, 0),
(31, 21, 9, '<p>How lisen to System of a down or Slipknot</p>\r\n<p>&nbsp;</p>', '2017-10-21 17:34:00', '2017-10-21 17:34:00', 0, 0),
(32, 21, 8, '<p>I listen Disturbed and AA :)</p>', '2017-10-21 17:35:29', '2017-10-21 17:35:29', 0, 0),
(33, 21, 10, '<p>Ария</p>\r\n<p>Кипелов</p>\r\n<p>Би-2</p>\r\n<p>SOAD</p>\r\n<p>Mumiy Troll</p>\r\n<p>Zemfira</p>\r\n<p> </p>', '2017-10-21 17:38:59', '2017-10-21 17:57:04', 0, 0),
(36, 24, 9, '<p>Hello</p>\r\n<p>&nbsp;</p>', '2017-10-22 08:27:23', '2017-10-22 08:27:23', 0, 0),
(37, 24, 9, '<p>heeey TImur wats up</p>\r\n<p>&nbsp;</p>', '2017-10-22 08:29:23', '2017-10-22 08:29:23', 0, 0),
(38, 24, 8, '<p>Hello !! How are you ?</p>', '2017-10-22 08:29:26', '2017-10-22 08:29:26', 0, 0),
(39, 24, 9, '<p style=\"text-align: center;\"><strong>ЭТО ФИАСКО БРАТАН</strong></p>', '2017-10-22 08:32:04', '2017-10-22 08:32:04', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `chatter_user_discussion`
--

CREATE TABLE `chatter_user_discussion` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `discussion_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `chatter_user_discussion`
--

INSERT INTO `chatter_user_discussion` (`user_id`, `discussion_id`) VALUES
(8, 19),
(9, 16),
(9, 17),
(9, 21),
(9, 24),
(10, 18),
(11, 20);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2016_07_29_171118_create_chatter_categories_table', 1),
(3, '2016_07_29_171118_create_chatter_discussion_table', 1),
(4, '2016_07_29_171118_create_chatter_post_table', 1),
(5, '2016_07_29_171128_create_foreign_keys', 1),
(6, '2016_08_02_183143_add_slug_field_for_discussions', 1),
(7, '2016_08_03_121747_add_color_row_to_chatter_discussions', 1),
(8, '2017_01_16_121747_add_markdown_and_lock_to_chatter_posts', 1),
(9, '2017_01_16_121747_create_chatter_user_discussion_pivot_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `remember_token`, `created_at`, `updated_at`, `avatar`, `background`) VALUES
(8, 'farras', '$2y$10$hnhVjQgSQn0IUzAq15RxrOaCJuEz9v6fE8De6qXfFErJiXt0TpkSu', 'cZhWkQeizn1YzOl9OtuloT3d1KGRjYYipzdjI5vgfp13Kd3vFd7p5eqRKSK8', '2017-10-20 20:30:02', '2017-10-22 08:51:55', '59ebf76911a9e.jpg', 'bg2.jpg'),
(9, 'swaggasocsk', '$2y$10$vLO.BvHUfZI1yKu3/YzG2.cT24gqjHfmVZcvMD5lQ3.j8ggc.BxSW', 'GV0Dp79snsu4eTcOeyNGkwxvua8qNTqPlvfPr3hyk7NGOX1SDUXojbNqojRd', '2017-10-21 17:01:14', '2017-10-22 03:56:09', '22.jpg', 'bg2.jpg'),
(10, 'Ion', '$2y$10$Xtq.DLDtxP.NJqB6bkaa3.AWofSNLhNHHkYHTTbz2u67J8fO.nq2S', 'HD09qOc5WUB7ieU82C2Uh08UK0ZgmXQCbGXA1k3MPnVbnXJpSRrn0H16xIwZ', '2017-10-21 17:06:04', '2017-10-21 17:06:04', '3.jpg', 'bg2.jpg'),
(11, 'Wrynn', '$2y$10$ku/b8F6Ek1MQtOiO9BarzOwEm0V5M4PTpvVqs7i2G61MgwPaNeixG', NULL, '2017-10-21 17:15:44', '2017-10-21 17:15:44', '3.jpg', 'bg2.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `chatter_categories`
--
ALTER TABLE `chatter_categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `chatter_discussion`
--
ALTER TABLE `chatter_discussion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chatter_discussion_chatter_category_id_foreign` (`chatter_category_id`),
  ADD KEY `chatter_discussion_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `chatter_post`
--
ALTER TABLE `chatter_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chatter_post_chatter_discussion_id_foreign` (`chatter_discussion_id`),
  ADD KEY `chatter_post_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `chatter_user_discussion`
--
ALTER TABLE `chatter_user_discussion`
  ADD PRIMARY KEY (`user_id`,`discussion_id`),
  ADD KEY `chatter_user_discussion_user_id_index` (`user_id`),
  ADD KEY `chatter_user_discussion_discussion_id_index` (`discussion_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `chatter_categories`
--
ALTER TABLE `chatter_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `chatter_discussion`
--
ALTER TABLE `chatter_discussion`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `chatter_post`
--
ALTER TABLE `chatter_post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `chatter_discussion`
--
ALTER TABLE `chatter_discussion`
  ADD CONSTRAINT `chatter_discussion_chatter_category_id_foreign` FOREIGN KEY (`chatter_category_id`) REFERENCES `chatter_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chatter_discussion_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `chatter_post`
--
ALTER TABLE `chatter_post`
  ADD CONSTRAINT `chatter_post_chatter_discussion_id_foreign` FOREIGN KEY (`chatter_discussion_id`) REFERENCES `chatter_discussion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chatter_post_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `chatter_user_discussion`
--
ALTER TABLE `chatter_user_discussion`
  ADD CONSTRAINT `chatter_user_discussion_discussion_id_foreign` FOREIGN KEY (`discussion_id`) REFERENCES `chatter_discussion` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `chatter_user_discussion_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

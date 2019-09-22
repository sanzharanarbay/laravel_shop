-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 22 2019 г., 09:12
-- Версия сервера: 10.1.37-MariaDB
-- Версия PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laravel_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `address`
--

CREATE TABLE `address` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `pincode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `address`
--

INSERT INTO `address` (`id`, `fullname`, `state`, `city`, `country`, `payment_type`, `user_id`, `pincode`, `created_at`, `updated_at`) VALUES
(1, 'Aspan Dzhanuzak', 'Almaty', 'Almaty', 'Kazakhstan', 'COD', 1, '14785', '2019-09-10 03:30:31', '2019-09-10 03:30:31'),
(3, 'Yernur Aidaraly', 'Yernur 10', 'fsdfds', 'Ukraine', 'COD', 1, '115', '2019-09-12 08:29:59', '2019-09-12 08:29:59'),
(4, 'Yernur Aidaraly', 'Aktobe Region', 'Aktobe', 'France', 'COD', 2, '12345', '2019-09-12 08:37:51', '2019-09-12 08:37:51'),
(5, 'Symbat Dzhanuzakova', 'Fdsfsd', 'Astana', 'Italy', 'COD', 1, '1515', '2019-09-12 08:40:23', '2019-09-12 08:40:23'),
(6, 'Aspan Dzhanuzak', 'fdafsdfds', 'fsdfdsfdsfdsfds', 'Ukraine', 'COD', 3, '556256', '2019-09-12 08:42:06', '2019-09-12 08:42:06'),
(7, 'Anar Amankozhaeva', 'Shymkent', 'Shymkent', 'Kazakhstan', 'paypal', 4, '1111', '2019-09-12 10:10:06', '2019-09-12 10:10:06');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Phone', '2019-09-05 04:25:19', '2019-09-05 04:25:19'),
(2, 'Laptop', '2019-09-05 04:25:26', '2019-09-05 04:25:26'),
(3, 'Gadget', '2019-09-05 04:25:32', '2019-09-05 04:25:32'),
(4, 'Cars', '2019-09-05 04:25:57', '2019-09-05 04:25:57');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_09_04_080334_add_admin_column_to_users', 1),
(12, '2019_09_04_092220_create_products_table', 1),
(13, '2019_09_04_124726_create_categories_table', 1),
(17, '2019_09_05_095651_create_wishlist_table', 1),
(18, '2019_09_05_095719_create_recommends_table', 1),
(19, '2019_09_05_132134_create_sliders_table', 2),
(22, '2019_09_05_095408_create_addresses_table', 3),
(23, '2019_09_05_095500_create_orders_table', 3),
(24, '2019_09_05_095616_create_orders_product_table', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `status`, `total`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'pending', '484.00', 1, '2019-09-10 03:30:31', '2019-09-10 03:30:31'),
(2, 'pending', '2,359.50', 1, '2019-09-10 03:32:39', '2019-09-10 03:32:39'),
(3, 'pending', '2,420.00', 1, '2019-09-12 08:30:00', '2019-09-12 08:30:00'),
(4, 'pending', '544.50', 2, '2019-09-12 08:37:51', '2019-09-12 08:37:51'),
(5, 'pending', '1,028.50', 1, '2019-09-12 08:40:23', '2019-09-12 08:40:23'),
(6, 'pending', '2,420.00', 3, '2019-09-12 08:42:06', '2019-09-12 08:42:06'),
(7, 'pending', '96.80', 4, '2019-09-12 10:10:06', '2019-09-12 10:10:06');

-- --------------------------------------------------------

--
-- Структура таблицы `orders_products`
--

CREATE TABLE `orders_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tax` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `orders_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders_products`
--

INSERT INTO `orders_products` (`id`, `tax`, `total`, `products_id`, `orders_id`, `qty`, `created_at`, `updated_at`) VALUES
(1, 84, 400, 10, 1, 1, NULL, NULL),
(2, 410, 100, 5, 2, 1, NULL, NULL),
(3, 410, 1000, 1, 2, 1, NULL, NULL),
(4, 410, 850, 2, 2, 1, NULL, NULL),
(5, 420, 2000, 8, 3, 1, NULL, NULL),
(6, 95, 450, 6, 4, 1, NULL, NULL),
(7, 179, 850, 2, 5, 1, NULL, NULL),
(8, 420, 2000, 1, 6, 2, NULL, NULL),
(9, 17, 80, 5, 7, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pro_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_price` int(11) NOT NULL,
  `pro_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spl_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `pro_name`, `pro_code`, `pro_price`, `pro_info`, `stock`, `category_id`, `image`, `spl_price`, `created_at`, `updated_at`) VALUES
(1, 'IPhone X', 'iphnx64564', 1000, 'IPhone X From Japan', 10, 1, 'iPhone-XR-4.jpg', 950, '2019-09-05 04:36:27', '2019-09-05 06:48:16'),
(2, 'Samsung Galaxy S10', 'SGS10u566', 850, 'Samsung Galaxy S10 From USA , 64 GB', 5, 1, 's10.jpg', 700, '2019-09-05 04:37:08', '2019-09-05 05:34:33'),
(3, 'Acer Swift 3', 'as3', 1450, 'Acer Swift 3 From UAE', 11, 2, 'acers3.jpg', 1450, '2019-09-05 05:39:55', '2019-09-05 05:39:55'),
(4, 'IPhone 11', 'iphn1156asd', 2000, 'IPhone XI From Japan', 1, 1, 'iphone11.jpg', 1900, '2019-09-05 08:06:37', '2019-09-05 08:06:37'),
(5, 'Mi Band 4', 'mb4', 100, 'Mi band 4', 15, 3, 'miband4.jpg', 80, '2019-09-05 22:49:13', '2019-09-05 22:49:13'),
(6, 'Apple Watch 4', 'appw4', 450, 'Apple Watch 4', 12, 3, 'apple4.jpg', 400, '2019-09-05 22:52:32', '2019-09-05 22:52:32'),
(7, 'MacBook Pro', 'mbpro12', 1100, 'MacBook Pro', 2, 2, 'macpro.jpg', 1000, '2019-09-05 22:56:16', '2019-09-05 22:56:16'),
(8, 'Dell Xps 15', 'dlxps15', 2000, 'Dell XPS 15', 3, 2, 'dell.jpg', 1800, '2019-09-05 22:57:46', '2019-09-05 22:57:46'),
(9, 'Xiaomi mijia m365', 'xmm365', 350, 'xiaomi mijia m365', 4, 3, 'mijia.jpg', 300, '2019-09-05 23:00:43', '2019-09-05 23:00:43'),
(10, 'Xiomi mi 9', 'xmi9567', 400, 'xiomi mi 9', 10, 1, 'mi9.jpg', 350, '2019-09-05 23:03:12', '2019-09-12 07:40:38');

-- --------------------------------------------------------

--
-- Структура таблицы `recommends`
--

CREATE TABLE `recommends` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pro_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sli_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sliders`
--

INSERT INTO `sliders` (`id`, `sli_title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Iphone 11', 'iphone11.jpg', '2019-09-05 07:49:46', '2019-09-05 07:49:46'),
(2, 'Mi band 4', 'miband4.jpg', '2019-09-05 07:50:46', '2019-09-05 07:50:46'),
(3, 'Mi A3', 'mia3.jpg', '2019-09-05 07:52:14', '2019-09-05 07:52:14');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `admin`) VALUES
(1, 'Sanzhar Anarbay', 'anarbay.sanzhar1999@gmail.com', NULL, '$2y$10$cI/EX0NZCNHI.93ttiD/OezaMC6Q0iCjkwZgOtuoleda8iB.Cfj5u', NULL, '2019-09-05 04:15:26', '2019-09-12 07:34:09', 1),
(2, 'Yernur Aidaraly', 'yernur@gmail.com', NULL, '$2y$10$OFik4I6XZh8RumSmHBfXgu/AlDwKkD03R4LHWmzEJcPKmoiDucIr6', NULL, '2019-09-12 08:23:38', '2019-09-12 08:23:38', NULL),
(3, 'Aspan Dzanuzak', 'aspan@gmail.com', NULL, '$2y$10$SyiMlDE8C.pjdlGxqFtli.oya3X1RE0bI9fyorDHIqK6CU/f21LvS', NULL, '2019-09-12 08:41:28', '2019-09-12 08:41:28', NULL),
(4, 'Anar Amankozhaeva', 'anar@gmail.com', NULL, '$2y$10$0OWFEyvYFGOXmHf7KB1RsOXmUsHaPyffAM9q6Y6Y0B.QxUYsziGvS', NULL, '2019-09-12 10:06:13', '2019-09-12 10:06:13', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `wishlist`
--

CREATE TABLE `wishlist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders_products`
--
ALTER TABLE `orders_products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `recommends`
--
ALTER TABLE `recommends`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Индексы таблицы `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `address`
--
ALTER TABLE `address`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `orders_products`
--
ALTER TABLE `orders_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `recommends`
--
ALTER TABLE `recommends`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

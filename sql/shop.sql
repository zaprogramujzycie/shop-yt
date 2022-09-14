-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 24 Lip 2022, 11:14
-- Wersja serwera: 10.4.17-MariaDB
-- Wersja PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `shop`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_no` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_no` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `addresses`
--

INSERT INTO `addresses` (`id`, `city`, `zip_code`, `street`, `street_no`, `home_no`, `created_at`, `updated_at`, `user_id`) VALUES
(4, '1', '2', '3', '4', '5', '2021-12-19 17:09:42', '2021-12-19 17:09:42', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_22_141809_add_phone_number_and_surname_columns_to_users_table', 1),
(5, '2021_04_01_162252_create_products_table', 2),
(7, '2021_04_08_165242_add_image_path_to_products_table', 3),
(11, '2021_05_21_131558_create_product_categories_table', 4),
(13, '2021_07_24_095344_add_role_column_to_users_table', 5),
(14, '2021_11_27_183035_create_addresses_table', 6),
(15, '2021_12_19_181300_create_orders_table', 7),
(16, '2021_12_19_185215_create_order_product_table', 8),
(18, '2022_03_28_182416_create_payments_table', 9);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `orders`
--

INSERT INTO `orders` (`id`, `quantity`, `price`, `created_at`, `updated_at`, `user_id`) VALUES
(7, 1, '10000.00', '2022-03-28 17:10:34', '2022-03-28 17:10:34', 1),
(8, 1, '10000.00', '2022-03-28 17:25:08', '2022-03-28 17:25:08', 1),
(9, 1, '10000.00', '2022-03-28 17:25:10', '2022-03-28 17:25:10', 1),
(10, 1, '10000.00', '2022-03-28 17:25:11', '2022-03-28 17:25:11', 1),
(11, 1, '10000.00', '2022-03-28 17:28:30', '2022-03-28 17:28:30', 1),
(12, 1, '10000.00', '2022-03-28 17:28:34', '2022-03-28 17:28:34', 1),
(13, 2, '10005.00', '2022-04-13 16:12:15', '2022-04-13 16:12:15', 1),
(14, 2, '10005.00', '2022-04-13 16:12:21', '2022-04-13 16:12:21', 1),
(15, 2, '10005.00', '2022-04-13 16:12:59', '2022-04-13 16:12:59', 1),
(16, 2, '10005.00', '2022-04-13 16:13:05', '2022-04-13 16:13:05', 1),
(17, 2, '10005.00', '2022-04-13 16:13:45', '2022-04-13 16:13:45', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `order_product`
--

CREATE TABLE `order_product` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `order_product`
--

INSERT INTO `order_product` (`order_id`, `product_id`) VALUES
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2),
(13, 3),
(13, 2),
(14, 3),
(14, 2),
(15, 3),
(15, 2),
(16, 3),
(16, 2),
(17, 3),
(17, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('in_progress','success','fail') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'in_progress',
  `error_code` int(11) DEFAULT NULL,
  `error_description` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `session_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `payments`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_path` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `products`
--

INSERT INTO `products` (`id`, `image_path`, `name`, `description`, `amount`, `price`, `category_id`, `created_at`, `updated_at`) VALUES
(2, 'products/u7F8ssecOuw61Czf1oiHw5M4wqZ8FOoGk7z9gBbE.jpg', 'MacBook', 'MacBook opis', 1, '10000.00', 1, '2021-04-01 16:46:43', '2021-10-17 07:42:59'),
(3, 'products/8n8ZPqrKYQeXR6VyQc5abjHT0CQg4dACJLSqs09u.jpg', 'Ciastko', 'Słodkie ciasteczko', 20, '5.00', 3, '2021-04-08 15:09:35', '2021-05-27 12:07:15'),
(4, 'products/nR9rj297u3j1WmgXcqzWYuMvMlvxRMewC4OQ6iMD.jpg', 'Iphone', 'Super Iphone', 10, '1000.00', 1, '2021-04-08 15:54:09', '2021-05-27 12:07:19'),
(5, 'products/aoD2EBPtbkk5SUHXxKTuuWOlBobtvBhWe4ajFrmW.jpg', 'Okulary', 'okulary czarne', 25, '15.00', 2, '2021-04-08 15:54:25', '2021-05-27 12:07:27'),
(6, 'products/4gcKdQnxJcHYqXoMsSpbac4KMO5oCVa7TYTklHZa.jpg', 'Super buty', 'Wygodne buty', 100, '200.00', 2, '2021-04-08 15:54:42', '2021-05-27 12:07:32'),
(7, 'products/fF2sXSKGxLghaD3b2k5r5geGY8sJudDXcmKxHeUV.jpg', 'Otwieracz', 'Otwieracz', 200, '10.00', 3, '2021-04-08 15:55:15', '2021-05-27 12:07:36');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Elektronika', '2021-05-21 11:57:24', '2021-05-21 11:58:10'),
(2, 'Odzież', '2021-05-21 11:58:35', '2021-05-21 11:58:35'),
(3, 'Inne', '2021-05-21 11:58:43', '2021-05-21 11:58:43'),
(4, 'Jedzenie', NULL, NULL),
(5, 'Akcesoria', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `phone_number`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test', 'test', 'test@test.pl', 'admin', '2021-07-23 13:46:53', '$2y$10$h70zjlJeWbzmj6JK2hWehOXskmlPNpWUxJxcO7nFcxGhdbYk7C9KS', NULL, '2021-03-11 15:27:54', '2021-07-23 13:46:53'),
(12, 'Test 2', 'Test 2', '000', 'test2@tet.pl', 'user', NULL, '$2y$10$IKrnOOjOdhjK.f1AA2EDjutLvMI9JDLB7m/2.8mmTJ0TM7Kevvtz.', NULL, '2021-07-24 08:28:53', '2021-07-24 08:28:53'),
(13, 'Test 2', 'Test 2', '000', 'test3@test.pl', 'user', NULL, '$2y$10$1NJt2bBjVAKOfOR7r3p6P.7/JXWFXtSpVy5Fb6kIFaoRVgW/Hqhge', NULL, '2021-07-24 08:30:40', '2021-07-24 08:30:40');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_user_id_foreign` (`user_id`);

--
-- Indeksy dla tabeli `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeksy dla tabeli `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indeksy dla tabeli `order_product`
--
ALTER TABLE `order_product`
  ADD KEY `order_product_order_id_foreign` (`order_id`),
  ADD KEY `order_product_product_id_foreign` (`product_id`);

--
-- Indeksy dla tabeli `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeksy dla tabeli `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_order_id_foreign` (`order_id`);

--
-- Indeksy dla tabeli `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indeksy dla tabeli `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT dla tabeli `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT dla tabeli `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT dla tabeli `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT dla tabeli `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ograniczenia dla tabeli `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ograniczenia dla tabeli `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Ograniczenia dla tabeli `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Ograniczenia dla tabeli `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `product_categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `assignment` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `assignment`;

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_07_05_124332_create_users_table', 1),
(5, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `created_at`, `updated_at`) VALUES
(2, 'dummyname12322', 'test@5.com', '$2y$10$wr6qRTelFhlDLzrhtpBLMOrgt1hm7yY4LgV3X9ZgRROfck.p8Ur6a', NULL, NULL, NULL, '2023-07-05 20:07:55', '2023-07-08 13:20:12'),
(4, 'dummyname4', 'dummmy4@dummyname.com', '$2y$10$PsJO6BAmasfkNCYpoRZ/d.o5nUvqpHxqVe2uQ/UUmg2ojqz.gmiaW', NULL, NULL, NULL, '2023-07-05 20:07:55', '2023-07-05 20:07:55'),
(16, 'blabla', 'blabla@blabla.com', '$2y$10$.EtAZdkWtx80N8K057QQhO0/V6ovccSOffFwkxn08EVcb0uVc21Em', NULL, NULL, NULL, '2023-07-06 13:03:38', '2023-07-06 13:03:38'),
(17, 'wddwv@wddwv.cy', 'wddwv@wddwv.cy', '$2y$10$pBRYqAn3Agd2wUDHZVTm5eJDRH7OzGO6YrWoL8Al1Rfuujs9nwQZC', NULL, NULL, NULL, '2023-07-06 14:04:34', '2023-07-06 14:04:34'),
(18, 'wddwv@wddwv.cu', 'wddwv@wddwv.cu', '$2y$10$Y2wEaLwoM80ekQHjfi3RaeWMQA2e7cPq935m0QHpkMd2IHs8peoju', NULL, NULL, NULL, '2023-07-06 14:07:23', '2023-07-06 14:07:23'),
(19, 'wddwv@wddwv.cz', 'wddwv@wddwv.cz', '$2y$10$fxnSRX8u55wnlp617eMGXON6aph6XuoNbcXsSiiIkArOp6sRCzhAO', NULL, NULL, NULL, '2023-07-06 14:09:56', '2023-07-06 14:09:56'),
(21, 'ff', 'e@5.com', '$2y$10$ldhJYnQ1Zgi4zSFA7kdNEeKeYs9PhhfPxUjS6govuVT/RFLf7vyhK', NULL, NULL, NULL, '2023-07-06 14:36:36', '2023-07-06 14:36:36'),
(23, '555', 'e@5.cm', '$2y$10$ail.rCqcJ83RxyKAC.DIZOLEit6da3T40DTHh9d7Ue1w9JvcuiI4u', NULL, NULL, NULL, '2023-07-06 14:37:02', '2023-07-06 14:37:02'),
(44, '555', 'e@5.cyhhm', '$2y$10$kLRktrJnUno0AUCJbzn5ueZw50ORFgaKBqlAXiQVkXfA6tjZsbpFe', NULL, NULL, NULL, '2023-07-06 14:37:45', '2023-07-06 14:37:45'),
(47, 'kravcik@gmail.commm', 'kravcik@gmail.commm', '$2y$10$RFzWbbilCHPlyt4H2FB1t./oZJfOrnpXM6DebbwEVEMYCvCLvMSQe', NULL, NULL, NULL, '2023-07-07 18:21:28', '2023-07-07 18:21:28'),
(48, 'Tom', 'thomas.kravcik@gmail.com', '$2y$10$gWA6hI5LVp3A.wSpVtLYxOc67nDTsQn4MU96u46DiJ1hmbtvPdpbW', NULL, NULL, NULL, '2023-07-08 18:24:04', '2023-07-08 18:24:04');


ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);


ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

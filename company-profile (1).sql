-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Mar 2026 pada 16.37
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company-profile`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `articles`
--

-- Dumping data untuk tabel `articles`
--

INSERT INTO `articles` (`id`, `category_id`, `title`, `slug`, `excerpt`, `content`, `image`, `created_at`, `updated_at`) VALUES
(11, 1, 'PBG ITU APA?', 'pbg-itu-apa', 'IZIN BANGUNAN YANG DIBUTUHKAN', '<h2><strong>Contrary to popular belief,</strong>&nbsp;</h2><p>Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney&nbsp;</p><p>College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.&nbsp;</p><p>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\",</p><p>&nbsp;comes from a line in section 1.10.32. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 'articles/zWviyd49T2sSdiEyOhLw0PfmaDAsCEEn5IDy0cV4.jpg', '2026-03-22 12:25:32', '2026-03-22 13:45:45'),
(12, 2, 'coba artikel', 'coba-artikel', 'percobaan', '<p><strong>What is Lorem Ipsum?</strong>&nbsp;</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley .</p><p>f type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of</p><p>&nbsp;Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply&nbsp;</p><p>dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>', 'articles/ipwgchojhTIdnyDP7ZmGh42fUXx26gSqGnRVjOYk.jpg', '2026-03-22 13:41:14', '2026-03-22 13:44:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`

--
-- Struktur dari tabel `cache_locks`
--
-----------------------------

--
-- Struktur dari tabel `categories`
--

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Bangunan', 'bangunan', '2026-03-22 04:57:55', '2026-03-22 04:57:55'),
(2, 'Regulasi', 'regulasi', '2026-03-22 04:58:12', '2026-03-22 04:58:12'),
(3, 'Lingkungan', 'lingkungan', '2026-03-22 04:58:19', '2026-03-22 04:58:19'),
(5, 'Tata Ruang', 'tata-ruang', '2026-03-22 04:59:08', '2026-03-22 04:59:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `clients`
--

-- Dumping data untuk tabel `clients`
--

INSERT INTO `clients` (`id`, `name`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'SIERA', 'clients/UTWZv46S7kVSftRmV2Ip8eEMcOMmv989Hl2KeCAL.jpg', '2026-03-25 06:36:35', '2026-03-25 06:36:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `galleries`
--

-- Dumping data untuk tabel `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'pbg', 'galleries/WCUCeGHAvCdJdykA43ZxHljEHz1pLk4hcgd3Ic6M.jpg', '2026-03-25 06:47:19', '2026-03-25 06:47:19'),
(2, 'sad', 'galleries/KXEfJG0wvfFTKASTV5pQxQmXY6mNgahYyNNRxUER.jpg', '2026-03-25 06:47:27', '2026-03-25 06:47:27'),
(3, 'aa', 'galleries/wVXLw5hRSZR90tYJJpcIV5MCcSTUt0qQZDc209OZ.jpg', '2026-03-25 06:47:36', '2026-03-25 06:47:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--
-------------------

--
-- Struktur dari tabel `job_batches`
--
----------------------

--
-- Struktur dari tabel `migrations`


INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_03_05_083334_create_services_table', 1),
(5, '2026_03_09_080125_add_gambar_to_services_table', 1),
(6, '2026_03_09_093513_create_portfolios_table', 1),
(7, '2026_03_22_000000_create_categories_table', 1),
(8, '2026_03_22_101203_create_articles_table', 1),
(9, '2026_03_22_130117_add_slug_to_services_table', 1),
(10, '2026_03_25_114524_create_settings_table', 2),
(11, '2026_03_25_125246_create_pricings_table', 3),
(12, '2026_03_25_125317_create_pricing_items_table', 3),
(13, '2026_03_25_132304_create_clients_table', 4),
(14, '2026_03_25_133901_create_galleries_table', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
-----------------------

--
-- Struktur dari tabel `portfolios`
--

-- Dumping data untuk tabel `portfolios`
--

INSERT INTO `portfolios` (`id`, `judul`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'RUMAH SAKIT GIGI DAN MULUT UNJANI', 'SLF MANTAP', '1773052040.jpeg', '2026-03-09 03:00:53', '2026-03-09 03:27:20'),
(3, 'UKL - UPL', 'ini dokumen lingkungan', '1773089440.jpeg', '2026-03-09 13:50:40', '2026-03-09 13:50:40'),
(4, 'SIERA', 'MINUM', '1773405539.jpeg', '2026-03-13 05:38:59', '2026-03-13 05:38:59'),
(5, 'BIZNET', 'WKKWKW', '1773405555.jpeg', '2026-03-13 05:39:15', '2026-03-13 05:39:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pricings`
--
--
-- Dumping data untuk tabel `pricings`
--

INSERT INTO `pricings` (`id`, `title`, `price`, `is_popular`, `created_at`, `updated_at`) VALUES
(1, 'Pengurusan SLF & PBG', 10000000, 1, '2026-03-25 05:54:45', '2026-03-25 06:14:16'),
(2, 'ANDALALIN', 35000000, 1, '2026-03-25 06:10:27', '2026-03-25 06:14:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pricing_items`
--

-- Dumping data untuk tabel `pricing_items`
--

INSERT INTO `pricing_items` (`id`, `pricing_id`, `item`, `type`, `created_at`, `updated_at`) VALUES
(14, 1, 'Survey Lapangan', 'pekerjaan', '2026-03-25 06:14:16', '2026-03-25 06:14:16'),
(15, 1, 'Dokumen Lengkap', 'syarat', '2026-03-25 06:14:16', '2026-03-25 06:14:16'),
(16, 2, 'Survey Lapangan', 'pekerjaan', '2026-03-25 06:14:26', '2026-03-25 06:14:26'),
(17, 2, 'TC Kendaraan', 'pekerjaan', '2026-03-25 06:14:26', '2026-03-25 06:14:26'),
(18, 2, 'Dokumen Lengkap', 'syarat', '2026-03-25 06:14:26', '2026-03-25 06:14:26'),
(19, 2, 'MANTAP', 'syarat', '2026-03-25 06:14:26', '2026-03-25 06:14:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `services`
--

--
-- Dumping data untuk tabel `services`
--

INSERT INTO `services` (`id`, `nama`, `deskripsi`, `icon`, `created_at`, `updated_at`, `gambar`, `slug`) VALUES
(1, 'PBG', 'INI PBG AJA', NULL, '2026-03-09 01:16:03', '2026-03-10 12:15:19', '1773170119.jpeg', 'pbg'),
(3, 'SLF', 'ini deskripsi SLF', NULL, '2026-03-09 01:56:02', '2026-03-09 01:56:02', '1773046562.jpeg', 'slf'),
(4, 'DOKUMEN LINGKUNGAN', 'ini DOKUMEN LINGKUNGAN', NULL, '2026-03-10 12:09:13', '2026-03-10 12:09:13', '1773169753.jpeg', 'dokumen-lingkungan'),
(5, 'ANDALALIN', 'ini andalalin', NULL, '2026-03-10 12:17:35', '2026-03-10 12:17:35', '1773170255.jpeg', 'andalalin'),
(6, 'SEDOT WC', 'CEPAT  BANGERT', NULL, '2026-03-13 05:38:10', '2026-03-13 05:38:10', '1773405490.jpeg', 'sedot-wc');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('cmldoNQkWTZZFp3kidPnYvVQ3Z7QjlPmXQNDs0HU', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/146.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiTjMzckxpZnE4M0hOSk1xOE9WbE1Dd2x4VzJWejAwd09nOVFDQjNZdSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9nYWxsZXJpZXMiO3M6NToicm91dGUiO3M6MTU6ImdhbGxlcmllcy5pbmRleCI7fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1774450943);

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

-- Dumping data untuk tabel `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'site_name', 'Konsultan Perizinan', '2026-03-25 05:07:46', '2026-03-25 05:07:46'),
(2, 'email', 'wiyasaarthamultiguna@gmail.com', '2026-03-25 05:07:46', '2026-03-25 05:07:46'),
(3, 'whatsapp', '6285137399974', '2026-03-25 05:07:46', '2026-03-25 07:56:23'),
(4, 'alamat', 'Jl. Pamekar Barat Asri II No. 11 Kota Bandung', '2026-03-25 05:07:46', '2026-03-25 05:07:46'),
(5, 'hero_title', 'Solusi Cepat, Tepat dan Legal....', '2026-03-25 05:07:46', '2026-03-25 05:07:46'),
(6, 'hero_desc', 'Kami membantu pengurusan PBG, SLF, PKKPR dan dokumen lingkungan secara profesional, cepat, dan sesuai regulasi pemerintah.', '2026-03-25 05:07:46', '2026-03-25 05:07:46'),
(7, 'wa_message', 'Halo Wiyasa Artha Multiguna,\r\n\r\nSaya ingin berkonsultasi mengenai layanan pengurusan perizinan.\r\n\r\nBerikut data saya:\r\nNama:\r\nNomor HP:\r\nLokasi Proyek:\r\nJenis Layanan (PBG / SLF / PKKPR / Lainnya):\r\nKeterangan:\r\n\r\nTerima kasih.', '2026-03-25 05:07:46', '2026-03-25 05:07:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hadi', 'hadi@gmail.com', NULL, '$2y$12$mqcZSODQPXtzCOV27n69ruGV8nLEHvXCVwkCR.2lCzhPIJbu9esre', NULL, '2026-03-05 01:30:47', '2026-03-05 01:30:47'),
(2, 'Admin', 'admin@gmail.com', NULL, '$2y$12$UaIPBCAGvZ.I.o91..KAm.fSOwEiRPVV43wltlM/rRgIPKfct.L/m', NULL, '2026-03-09 00:31:02', '2026-03-09 00:31:02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_slug_unique` (`slug`),
  ADD KEY `articles_category_id_foreign` (`category_id`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indeks untuk tabel `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pricings`
--
ALTER TABLE `pricings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pricing_items`
--
ALTER TABLE `pricing_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pricing_items_pricing_id_foreign` (`pricing_id`);

--
-- Indeks untuk tabel `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_slug_unique` (`slug`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pricings`
--
ALTER TABLE `pricings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pricing_items`
--
ALTER TABLE `pricing_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pricing_items`
--
ALTER TABLE `pricing_items`
  ADD CONSTRAINT `pricing_items_pricing_id_foreign` FOREIGN KEY (`pricing_id`) REFERENCES `pricings` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

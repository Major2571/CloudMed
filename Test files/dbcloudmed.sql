-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 16-Jun-2023 às 19:38
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbcloudmed`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `card_sus`
--

DROP TABLE IF EXISTS `card_sus`;
CREATE TABLE IF NOT EXISTS `card_sus` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_user` int(10) UNSIGNED NOT NULL,
  `number_cardSUS` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_cardSUS_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `card_sus_id_user_foreign` (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `card_sus`
--

INSERT INTO `card_sus` (`id`, `id_user`, `number_cardSUS`, `file_cardSUS_name`, `created_at`, `updated_at`) VALUES
(2, 1, '12345678911 2345', '1686842938_receitaMedica.png', '2023-06-15 15:28:58', '2023-06-15 15:28:58'),
(3, 3, '12345678996 3258', NULL, '2023-06-15 18:19:06', '2023-06-15 18:19:06'),
(4, 4, '12345678996 3258', '1686940109_receitaMedica.png', '2023-06-16 17:51:33', '2023-06-16 18:28:29'),
(5, 5, '99999999999 99999', '1686942699_ex_card.png', '2023-06-16 18:34:01', '2023-06-16 19:11:39');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clinical_information`
--

DROP TABLE IF EXISTS `clinical_information`;
CREATE TABLE IF NOT EXISTS `clinical_information` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_user` int(10) UNSIGNED NOT NULL,
  `height` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_donor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allergies` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `clinical_information_id_user_foreign` (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `clinical_information`
--

INSERT INTO `clinical_information` (`id`, `id_user`, `height`, `weight`, `is_donor`, `blood_type`, `allergies`, `created_at`, `updated_at`) VALUES
(1, 1, '1.70', '0.00', NULL, 'Não Informado', NULL, '2023-06-15 17:42:46', '2023-06-15 17:47:14'),
(2, 3, '1.72', '66.00', NULL, NULL, NULL, '2023-06-15 18:18:51', '2023-06-15 18:18:51'),
(3, 4, '1.72', '66.00', 'Sim', 'A+', 'Nenhuma!', '2023-06-16 17:46:37', '2023-06-16 17:48:15'),
(4, 5, '1.72', '66.00', 'Sim', 'O+', 'Nenhuma', '2023-06-16 18:31:49', '2023-06-16 18:33:10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `exam`
--

DROP TABLE IF EXISTS `exam`;
CREATE TABLE IF NOT EXISTS `exam` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_user` int(10) UNSIGNED DEFAULT NULL,
  `id_uf` int(10) UNSIGNED DEFAULT NULL,
  `id_medical_specialty` int(10) UNSIGNED DEFAULT NULL,
  `exam_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exam_date` date DEFAULT NULL,
  `institution` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_exam_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `exam_id_user_foreign` (`id_user`),
  KEY `exam_id_uf_foreign` (`id_uf`),
  KEY `exam_id_medical_specialty_foreign` (`id_medical_specialty`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `exam`
--

INSERT INTO `exam` (`id`, `id_user`, `id_uf`, `id_medical_specialty`, `exam_title`, `exam_date`, `institution`, `city`, `file_exam_name`, `created_at`, `updated_at`) VALUES
(6, 1, 16, 1, 'aaa', '2023-06-10', 'SUS', 'NYC', '1686847584_hemograma.png', '2023-06-15 16:46:24', '2023-06-15 16:48:08'),
(2, 1, 25, 2, 'Exame 2', '2022-02-02', 'Instituição 2', 'city 2', NULL, '2023-06-08 17:14:18', '2023-06-08 17:14:18'),
(3, 2, 25, 1, 'Eletrocardiograma33', '2023-02-14', 'Calil', 'São Paulo', '1686245095_eletrocardiograma.png', '2023-06-08 17:24:55', '2023-06-08 17:25:22'),
(4, 1, 25, 6, 'aaa', '2023-06-02', 'Calil', 'São Paulo', '1686841459_eletrocardiograma.png', '2023-06-15 15:04:21', '2023-06-15 15:04:21'),
(5, 1, 25, 24, 'Receita', '2023-06-08', 'Dante Pazzanese', 'São Paulo', '1686845088_receitaMedica.pdf', '2023-06-15 16:04:48', '2023-06-15 16:15:21'),
(7, 1, 25, 1, 'Eletrocardiograma', '2023-06-07', 'Calil', 'São Paulo', '1686936133_eletrocardiograma.png', '2023-06-16 17:22:14', '2023-06-16 17:22:14'),
(11, 4, 25, 1, 'Eletrocardiograma', '2023-06-02', 'SUS', 'São Paulo', '1686939970_eletrocardiograma.png', '2023-06-16 18:26:10', '2023-06-16 18:26:10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `health_insurance`
--

DROP TABLE IF EXISTS `health_insurance`;
CREATE TABLE IF NOT EXISTS `health_insurance` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_user` int(10) UNSIGNED NOT NULL,
  `insurance_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insurance_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insurance_plan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_insurance_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `health_insurance_id_user_foreign` (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `health_insurance`
--

INSERT INTO `health_insurance` (`id`, `id_user`, `insurance_number`, `insurance_name`, `insurance_plan`, `file_insurance_name`, `created_at`, `updated_at`) VALUES
(1, 1, '1632158415156', 'GNDI', 'Enfermagem', '1686843148_receitaMedica.png', '2023-06-15 15:32:10', '2023-06-15 15:32:28'),
(2, 4, '1632158415156', 'GNDI', 'Enfermagem', '1686937970_Rectangle 56.png', '2023-06-16 17:52:50', '2023-06-16 17:52:50'),
(3, 5, '1632158415156', 'GNDI', 'Enfermagem', '1686942715_ex_card2.png', '2023-06-16 18:35:05', '2023-06-16 19:11:55');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medical_specialty`
--

DROP TABLE IF EXISTS `medical_specialty`;
CREATE TABLE IF NOT EXISTS `medical_specialty` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `medical_specialty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `medical_specialty`
--

INSERT INTO `medical_specialty` (`id`, `medical_specialty`, `created_at`, `updated_at`) VALUES
(1, 'Cardiologia', NULL, NULL),
(2, 'Cirurgia Cardiovascular', NULL, NULL),
(3, 'Cirurgia de Mão', NULL, NULL),
(4, 'Cirurgia de Cabeça e Pescoço', NULL, NULL),
(5, 'Cirurgia do Aparelho Digestivo', NULL, NULL),
(6, 'Cirurgia Geral', NULL, NULL),
(7, 'Cirurgia Oncológica', NULL, NULL),
(8, 'Cirurgia Pediátrica', NULL, NULL),
(9, 'Cirurgia Plástica', NULL, NULL),
(10, 'Cirurgia Torácica', NULL, NULL),
(11, 'Cirurgia Vascular', NULL, NULL),
(12, 'Clinico Geral', NULL, NULL),
(13, 'Dermatologia', NULL, NULL),
(14, 'Endocrinologia e Metabologia', NULL, NULL),
(15, 'Endoscopia', NULL, NULL),
(16, 'Gastroenterologia', NULL, NULL),
(17, 'Genética Médica', NULL, NULL),
(18, 'Geriatria', NULL, NULL),
(19, 'Ginecologia e Obstetrícia', NULL, NULL),
(20, 'Hematologia e Hemoterapia', NULL, NULL),
(21, 'Homeopatia', NULL, NULL),
(22, 'Infectologia', NULL, NULL),
(23, 'Mastologia', NULL, NULL),
(24, 'Neurologia', NULL, NULL),
(25, 'Oftalmologia', NULL, NULL),
(26, 'Ortopedia', NULL, NULL),
(27, 'Oncologia', NULL, NULL),
(28, 'Pediatria', NULL, NULL),
(29, 'Urologia', NULL, NULL),
(30, 'Outro', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `medications`
--

DROP TABLE IF EXISTS `medications`;
CREATE TABLE IF NOT EXISTS `medications` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_user` int(10) UNSIGNED DEFAULT NULL,
  `medication_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dosage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `laboratory` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frequency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `treatment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `observations` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `medications_id_user_foreign` (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `medications`
--

INSERT INTO `medications` (`id`, `id_user`, `medication_name`, `dosage`, `laboratory`, `frequency`, `treatment`, `observations`, `created_at`, `updated_at`) VALUES
(8, 4, 'Losartana', '50mg', 'NeoQuímica', 'Contínuo', 'Pressão alta', NULL, '2023-06-16 18:27:12', '2023-06-16 18:27:12'),
(2, 2, 'Dipirona', '500mg', 'Neo Química', NULL, 'Dor, em geral', NULL, '2023-06-08 17:26:50', '2023-06-08 17:26:50'),
(4, 1, 'Losartana', '50mg', NULL, 'Contínuo', 'Pressão alta', NULL, '2023-06-16 17:23:17', '2023-06-16 17:23:17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_19_162051_create_vaccines_table', 1),
(6, '2023_04_19_162127_create_exam_table', 1),
(7, '2023_04_19_162221_create_user_details_table', 1),
(8, '2023_04_19_162251_create_clinical_information_table', 1),
(9, '2023_04_19_162313_create_card_sus_table', 1),
(10, '2023_04_19_162333_create_health_insurance_table', 1),
(11, '2023_05_11_010359_create_uf_table', 1),
(12, '2023_05_11_010420_create_medical_specialty_table', 1),
(13, '2023_05_11_010444_create_name_vaccines_table', 1),
(14, '2023_05_11_143515_create_sessions_table', 1),
(15, '2023_05_29_232834_create_medications_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `name_vaccines`
--

DROP TABLE IF EXISTS `name_vaccines`;
CREATE TABLE IF NOT EXISTS `name_vaccines` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_vaccine` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `name_vaccines`
--

INSERT INTO `name_vaccines` (`id`, `name_vaccine`, `created_at`, `updated_at`) VALUES
(1, 'BCG', NULL, NULL),
(2, 'Cólera', NULL, NULL),
(3, 'COVID-19', NULL, NULL),
(4, 'DTP (tríplice bacteriana)', NULL, NULL),
(5, 'DTP/Tríplice bacteriana (Difteria, tétano e coqueluche)', NULL, NULL),
(6, 'dT (dupla adulto)', NULL, NULL),
(7, 'dTpa (DTP adulto)', NULL, NULL),
(8, 'Febre amarela', NULL, NULL),
(9, 'Febre amarela fracionada', NULL, NULL),
(10, 'Febre tifoide', NULL, NULL),
(11, 'Hepatite A', NULL, NULL),
(12, 'Hepatite B', NULL, NULL),
(13, 'Hepatite delta (para pessoas com hepatite B crônica)', NULL, NULL),
(14, 'Hepatite E', NULL, NULL),
(15, 'HPV', NULL, NULL),
(16, 'HPV quadrivalente', NULL, NULL),
(17, 'Influenza (Gripe)', NULL, NULL),
(18, 'Influenza de alta dose (pessoas acima de 65 anos)', NULL, NULL),
(19, 'Encefalite Japonesa', NULL, NULL),
(20, 'Meningocócica ACWY', NULL, NULL),
(21, 'Meningocócica B', NULL, NULL),
(22, 'Meningocócica C', NULL, NULL),
(23, 'Penta (DTP/Hib/Hep. B)', NULL, NULL),
(24, 'Pneumocócica', NULL, NULL),
(25, 'Poliomielite', NULL, NULL),
(26, 'Raiva', NULL, NULL),
(27, 'Rotavírus Humano (VRH)', NULL, NULL),
(28, 'Sarampo, Rubéola e Caxumba (Tríplice Viral / SRC)', NULL, NULL),
(29, 'Tetraviral (sarampo, caxumba, rubéola e varicela)', NULL, NULL),
(30, 'Varicela', NULL, NULL),
(31, 'Varicela Zoster', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('gEhsJkiTCTFGmvIGmbwfl3NYZYWSgsRZF3TmFqxS', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNkZKakVMSWN1c0pOMzRpUzRmRE16UFhqdFcxNGZqM2d1Vm9nWEV1OSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1686944038);

-- --------------------------------------------------------

--
-- Estrutura da tabela `uf`
--

DROP TABLE IF EXISTS `uf`;
CREATE TABLE IF NOT EXISTS `uf` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `estado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uf` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `uf`
--

INSERT INTO `uf` (`id`, `estado`, `uf`, `created_at`, `updated_at`) VALUES
(1, 'Acre', 'AC', NULL, NULL),
(2, 'Alagoas', 'AL', NULL, NULL),
(3, 'Amapá', 'AP', NULL, NULL),
(4, 'Amazonas', 'AM', NULL, NULL),
(5, 'Bahia', 'BA', NULL, NULL),
(6, 'Ceará', 'CE', NULL, NULL),
(7, 'Distrito Federal', 'DF', NULL, NULL),
(8, 'Espírito Santo', 'ES', NULL, NULL),
(9, 'Goiás', 'GO', NULL, NULL),
(10, 'Maranhão', 'MA', NULL, NULL),
(11, 'Mato Grosso', 'MT', NULL, NULL),
(12, 'Mato Grosso do Sul', 'MS', NULL, NULL),
(13, 'Minas Gerais', 'MG', NULL, NULL),
(14, 'Pará', 'PA', NULL, NULL),
(15, 'Paraíba', 'PB', NULL, NULL),
(16, 'Paraná', 'PR', NULL, NULL),
(17, 'Pernambuco', 'PE', NULL, NULL),
(18, 'Piauí', 'PI', NULL, NULL),
(19, 'Rio de Janeiro', 'RJ', NULL, NULL),
(20, 'Rio Grande do Norte', 'RN', NULL, NULL),
(21, 'Rio Grande do Sul', 'RS', NULL, NULL),
(22, 'Rondônia', 'RO', NULL, NULL),
(23, 'Roraima', 'RR', NULL, NULL),
(24, 'Santa Catarina', 'SC', NULL, NULL),
(25, 'São Paulo', 'SP', NULL, NULL),
(26, 'Sergipe', 'SE', NULL, NULL),
(27, 'Tocantins', 'TO', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Adm', 'adm@email.com', NULL, '$2y$10$AQxQGH/RA.oo8Qbo3SBGUu51A2l/CNRAIQ1BM62.u1FIveTDTOx0q', NULL, '2023-06-08 17:14:19', '2023-06-08 17:14:19'),
(2, 'Carol', 'carol@email.com', NULL, '$2y$10$Ble6vxeCovYMoeNpAY8yt.a14vnsmReee.WEF3veiyUS01IUgIMoy', NULL, '2023-06-08 17:20:47', '2023-06-08 17:20:47'),
(3, 'Carol', 'carol2@email.com', NULL, '$2y$10$UNQkODw6LdyQLnp5pvbQoeEcq12uU/ueYLNDoSDRW4bPj34atkCPK', NULL, '2023-06-15 18:00:09', '2023-06-15 18:00:09'),
(4, 'caroline', 'caroline@email.com', NULL, '$2y$10$5BYxhfd4lNZIjohxb88xGefxTydrBZDxdyC4Yx5mvRumxGcJvjTJO', NULL, '2023-06-16 17:38:49', '2023-06-16 17:38:49'),
(5, 'aaa', 'adm3@email.com', NULL, '$2y$10$L3l2t7JDAr6dlIWTQCznMepXRY/0ZuF37EqE3Gl2EepeGgsnt0M3G', NULL, '2023-06-16 18:30:42', '2023-06-16 18:30:42');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_details`
--

DROP TABLE IF EXISTS `user_details`;
CREATE TABLE IF NOT EXISTS `user_details` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_uf` int(10) UNSIGNED DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `rg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cpf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_details_id_user_foreign` (`id_user`),
  KEY `user_details_id_uf_foreign` (`id_uf`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `user_details`
--

INSERT INTO `user_details` (`id`, `id_user`, `id_uf`, `last_name`, `date_of_birth`, `rg`, `cpf`, `city`, `phone`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 25, 'Moura', '2000-04-15', '98.789.789-7', '789.789.789-87', 'São Paulo', '(11) 18888-8888', 1, '2023-06-15 17:19:29', '2023-06-15 17:26:49'),
(2, 3, NULL, NULL, NULL, '12.345.678-9', '123.456.789-44', NULL, '(11) 98526-3741', 1, '2023-06-15 18:18:03', '2023-06-15 18:18:22'),
(3, 4, 25, 'Moura', NULL, '99.999.999-9', '999.999.999999-99', 'São Paulo', '(11) 99999-9999', 1, '2023-06-16 17:46:13', '2023-06-16 17:46:13');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vaccines`
--

DROP TABLE IF EXISTS `vaccines`;
CREATE TABLE IF NOT EXISTS `vaccines` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_user` int(10) UNSIGNED DEFAULT NULL,
  `id_vaccine` int(10) UNSIGNED DEFAULT NULL,
  `id_uf` int(10) UNSIGNED DEFAULT NULL,
  `new_vaccine_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doses` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vaccination_date` date DEFAULT NULL,
  `manufacturer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lot_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `vaccines_id_user_foreign` (`id_user`),
  KEY `vaccines_id_vaccine_foreign` (`id_vaccine`),
  KEY `vaccines_id_uf_foreign` (`id_uf`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `vaccines`
--

INSERT INTO `vaccines` (`id`, `id_user`, `id_vaccine`, `id_uf`, `new_vaccine_name`, `doses`, `vaccination_date`, `manufacturer`, `lot_number`, `city`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '', 'Dose Única', '2022-01-01', 'manufacturer 1', '000001', 'city 1', '2023-06-08 17:14:18', '2023-06-08 17:14:18'),
(2, 2, 12, 25, NULL, 'Primeira Dose', '2003-11-28', 'Não Sei', '021011117', 'São Paulo', '2023-06-08 17:23:46', '2023-06-08 17:23:46'),
(3, 1, 2, 25, NULL, 'Dose Única', '2023-06-01', 'Pfizer', '0000188', 'São Paulo', '2023-06-13 19:59:57', '2023-06-15 15:08:54'),
(4, 1, 3, 16, NULL, 'Dose Única', '2023-06-03', 'Pfizer', '00001', 'São Paulo', '2023-06-13 20:00:22', '2023-06-13 20:00:22'),
(5, 1, 3, NULL, NULL, 'Primeira Dose', '2023-06-09', 'Pfizer32', '00001', 'São Paulo', '2023-06-13 20:00:45', '2023-06-13 20:00:45'),
(6, 1, 11, 18, NULL, 'Dose Única', '2023-06-10', 'Pfi', '00001', 'São Paulo', '2023-06-13 20:01:04', '2023-06-13 20:01:04'),
(7, 1, 17, 15, NULL, 'Dose Única', '2023-06-10', 'Pfizer', '00001', 'São Paulo', '2023-06-13 20:01:50', '2023-06-13 20:01:50'),
(8, 1, 28, 17, NULL, 'Dose Única', '2023-05-17', 'Pfizer', '00001333333', 'São Paulo', '2023-06-13 20:04:31', '2023-06-15 16:42:51'),
(9, 1, 0, NULL, 'Teste', 'Dose Única', '2023-06-03', 'Não Sei', '0000188', 'NYC', '2023-06-15 16:34:13', '2023-06-15 16:35:01'),
(10, 1, 0, NULL, 'aaaaaaaaaa', 'Segunda Dose', '2023-06-02', NULL, '0000188', 'NYC', '2023-06-15 16:39:34', '2023-06-15 16:39:34'),
(11, 1, 1, NULL, NULL, 'Dose Única', '2023-06-10', 'Pfizer', '00001', 'São Paulo', '2023-06-15 16:42:08', '2023-06-15 16:42:08'),
(12, 1, 0, NULL, 'Teste3333', 'Primeira Dose', '2023-06-03', 'Pfizer', '00001', 'NYC', '2023-06-15 16:44:00', '2023-06-15 16:44:00'),
(13, 1, 3, 25, NULL, 'Segunda Dose', '2023-05-10', 'Pfizer', '00001', 'São Paulo', '2023-06-16 17:19:41', '2023-06-16 17:19:41'),
(17, 4, 3, 25, NULL, 'Primeira Dose', '2023-06-02', 'Pfizer', '0000188', 'São Paulo', '2023-06-16 18:23:55', '2023-06-16 18:23:55');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

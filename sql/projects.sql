-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 01 2024 г., 10:24
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `jpti`
--

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `text` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`id`, `name`, `text`) VALUES
(1, 'Business in Human Rights', ' Our work in the realm of business and human rights specifically focuses on\n                    protecting\n                    entrepreneurs and small to medium-sized enterprises (SMEs) from human rights abuses in corporate\n                    settings. We advocate for stringent adherence to the UN Guiding Principles on Business and Human\n                    Rights, promoting ethical business practices that prioritize human rights and sustainable\n                    development.\n                '),
(2, 'Whistleblowers and Journalists', 'We provide robust support to whistleblowers and journalists, vital cogs in the wheel of\n                    transparent governance and human rights advocacy. Our organization stands with those who\n                    courageously expose wrongdoing, offering them legal protection, securing their safety, and\n                    ensuring their fundamental freedoms are respected, particularly their freedom of expression and\n                    right to information.'),
(3, 'Human Rights Defenders', 'Justice for All International\" champions human rights defenders across the globe, ensuring they\n                    have the necessary protections and resources to carry out their critical work. We provide\n                    support through legal assistance, emergency interventions, and global advocacy to bring\n                    international attention to their struggles and successes in promoting human rights.'),
(4, 'Equality', ' Our commitment to equality is unwavering. We tackle systemic discrimination and advocate for\n                    equal rights for all, regardless of gender, race, ethnicity, or sexual orientation. Through\n                    strategic litigation and public campaigns, we strive to dismantle barriers to equality and\n                    foster a more inclusive and just society.'),
(5, 'Police Reform', 'Justice for All International\" is committed to reforming police practices to meet international\n                    human rights standards. Our efforts promote procedural justice, transparency, and accountability\n                    to prevent power abuse and corruption. We focus on the adverse effects of policing on vulnerable\n                    groups, pushing for reforms that address systemic inequalities and respect individual rights.\n                    Our programs support human rights training, conflict resolution, and community engagement,\n                    aiming to foster cooperation between police and communities. Additionally, we undertake\n                    strategic litigation against unlawful practices and collaborate with policymakers and\n                    international entities to achieve comprehensive police reform. This commitment reflects our\n                    belief in reform\'s potential to significantly improve law enforcement agencies\' integrity and\n                    adherence to human rights.'),
(6, 'Independence of Judges and Lawyers', ' The independence of judges and lawyers is fundamental to the integrity of justice systems\n                    worldwide. \"Justice for All International\" advocates for policies and practices that protect\n                    legal practitioners from political interference and ensure their ability to uphold justice\n                    without fear or favor.'),
(7, 'Child Rights', 'Children\'s rights are at the heart of our advocacy efforts. We work tirelessly to protect\n                    children from abuse, exploitation, and neglect while promoting their access to basic services\n                    such as education and healthcare. Our initiatives support the implementation of international\n                    treaties and national laws designed to safeguard children\'s rights and promote their well-being\n                    in societies around the world.\n                    These expanded descriptions provide a comprehensive view of the NGO\'s extensive activities,\n                    highlighting its commitment to tackling a wide array of human rights issues through well-defined\n                    projects and initiatives. Each section is crafted to incorporate relevant keywords and themes to\n                    enhance visibility and impact.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

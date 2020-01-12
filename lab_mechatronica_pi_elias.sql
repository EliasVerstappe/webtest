-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Gegenereerd op: 12 jan 2020 om 11:47
-- Serverversie: 10.3.17-MariaDB-0+deb10u1
-- PHP-versie: 7.3.11-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab_mechatronica`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `measurements`
--

CREATE TABLE `measurements` (
  `id` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `sensor` varchar(32) NOT NULL DEFAULT 'MCU123'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `measurements`
--

INSERT INTO `measurements` (`id`, `value`, `date`, `sensor`) VALUES
(1, 23, '2020-01-09 18:31:51', 'MCU123'),
(2, 129, '2020-01-09 18:31:51', 'MCU123'),
(3, 129, '2020-01-09 18:31:51', 'MCU123'),
(4, 129, '2020-01-09 18:31:51', 'MCU123'),
(5, 129, '2020-01-09 18:31:51', 'MCU123'),
(6, 129, '2020-01-09 18:31:51', 'MCU123'),
(7, 3, '2020-01-09 18:31:51', 'MCU123'),
(8, 3, '2020-01-09 18:31:51', 'MCU123'),
(9, 2, '2020-01-09 18:31:51', 'MCU123'),
(10, 2, '2020-01-09 18:31:51', 'MCU123'),
(11, 129, '2020-01-09 18:31:51', 'MCU123'),
(12, 129, '2020-01-09 18:31:51', 'MCU123'),
(13, 129, '2020-01-09 18:32:13', 'MCU123'),
(14, 129, '2020-01-09 18:32:14', 'MCU123'),
(15, 129, '2020-01-09 18:36:07', 'MCU123'),
(16, 66, '2020-01-09 18:37:06', 'MCU123'),
(17, 66, '2020-01-09 18:40:43', 'MCU123'),
(18, 66, '2020-01-09 18:41:37', 'MCU123'),
(19, 130, '2020-01-09 18:41:59', 'MCU123'),
(20, 130, '2020-01-09 18:42:02', 'MCU123'),
(21, 130, '2020-01-09 18:42:06', 'MCU123'),
(22, 129, '2020-01-09 18:42:10', 'MCU123'),
(23, 129, '2020-01-09 18:42:11', 'MCU123'),
(24, 129, '2020-01-09 18:42:14', 'MCU123'),
(25, 65, '2020-01-09 18:42:27', 'MCU123'),
(26, 65, '2020-01-09 18:42:29', 'MCU123'),
(27, 65, '2020-01-09 18:42:33', 'MCU123'),
(28, 66, '2020-01-09 18:42:38', 'MCU123'),
(29, 66, '2020-01-09 18:42:39', 'MCU123');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `pending_users`
--

CREATE TABLE `pending_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `pending_users`
--

INSERT INTO `pending_users` (`id`, `username`, `password`, `email`) VALUES
(31, 'Franky', '$2y$10$KHHlYx8Ta8OMkEP279KQSOFxf4F2p/DvKGHu5YCaNlyO2C0YF5y8C', 'franky@gmail.com'),
(32, 'Peter Ffoulkes', '$2y$10$xtU/0NiJVIFaRfdtzKMTh.GStkQKF624FyK9VP5Sv51dXK8gOYDPi', 'last.name.no.typo@gmail.com'),
(33, 'Yentel Kint', '$2y$10$wAkibJXQSO4IO0Hp6BEAJODIUn2PJ6MYrzlX6myks0rki2ceqze5q', 'yentel.kint@student.kuleuven.be'),
(34, 'Aleksandr Sergejevitsj Poesjkin', '$2y$10$Knx3JXxSv5.6CkJPcfZ.4e8U2l0zpiudCkV5NVC7QHCj2CBCv8Y82', 'defnotarussinatroll@cccp.ru'),
(35, 'Steve Jobs', '$2y$10$I6JFxYhMTO/dBaqReY8Lr.WVdy0umz3ySaj7Zgm/ID1JtiW71okHK', 'steve.jobs@apple.com'),
(36, 'Felix Kjellberg', '$2y$10$I4PelEL5k8oo8QCPTCxe4OSLCkcRc5xznbZSaLDmrCy84xHPjF.Mq', 'pewdiepie@youtube.com'),
(41, 'dummy', '', ''),
(42, 'dummy', '', ''),
(43, 'dummy', '', ''),
(44, 'dummy', '', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `admin`) VALUES
(6, 'admin', '$2y$10$Pct2/jrtU3D7IK.b3dMgkeuwx/v2fOHXIfzcODaRIco9V0cmBVGhi', 'admin@admin.admin', 1),
(10, 'Elias Verstappe', '$2y$10$T6h42yMN/Z6OvN1OSN5LBeN18eKaz4USe2UgzaQOTQyLraf9LLck.', 'elias.verstappe@gmail.com', 1),
(11, 'dummy', '$2y$10$DCaPj1TzHsaWtAL9gjQ9oeidmn/lGNix17R4Q7iXjHi1rnKOs9B7K', 'test@test.test', 0);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `measurements`
--
ALTER TABLE `measurements`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `pending_users`
--
ALTER TABLE `pending_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `measurements`
--
ALTER TABLE `measurements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT voor een tabel `pending_users`
--
ALTER TABLE `pending_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

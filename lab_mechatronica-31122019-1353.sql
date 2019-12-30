-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 30 dec 2019 om 13:53
-- Serverversie: 10.4.8-MariaDB
-- PHP-versie: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
(36, 'Felix Kjellberg', '$2y$10$I4PelEL5k8oo8QCPTCxe4OSLCkcRc5xznbZSaLDmrCy84xHPjF.Mq', 'pewdiepie@youtube.com');

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
-- AUTO_INCREMENT voor een tabel `pending_users`
--
ALTER TABLE `pending_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

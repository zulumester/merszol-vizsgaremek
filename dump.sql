-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Már 22. 21:24
-- Kiszolgáló verziója: 10.4.27-MariaDB
-- PHP verzió: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `merszol`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `e-mail` varchar(255) NOT NULL,
  `message` varchar(5000) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `messages`
--

INSERT INTO `messages` (`id`, `name`, `e-mail`, `message`, `date`) VALUES
(1, 'Teszt Elek', 'teszt@teszt.hu', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac ex eget risus aliquet euismod. Quisque turpis leo, vestibulum ut dictum in, euismod nec enim. Pellentesque mauris mauris, dictum vel eros sed, pretium aliquet metus. Donec ultrices sapien vel nunc placerat, id semper nibh consectetur. Etiam tempor porttitor quam, mattis.', '2023-03-17'),
(2, 'Teszt Elek', 'teszt@teszt.hu', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac ex eget risus aliquet euismod. Quisque turpis leo, vestibulum ut dictum in, euismod nec enim. Pellentesque mauris mauris, dictum vel eros sed, pretium aliquet metus.', '2023-03-17');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `quotation`
--

CREATE TABLE `quotation` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `quotation`
--

INSERT INTO `quotation` (`id`, `type`, `emailAddress`, `description`, `date`) VALUES
(1, 'ÚT-02-es karbantartás, javítás, felújítás', 'teszt@teszt.hu', 'Szeretnénk egy ÚT-02-es karbantartás és javítás árajánlatot kérni.', '2023-03-15 17:50:09'),
(2, 'Mérőóra javítás', 'teszt@teszt.hu', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut neque at augue varius blandit non et quam. Suspendisse quis nunc pulvinar, ultricies lacus vel, eleifend sem. Praesent hendrerit, est a convallis tristique, est lorem ultrices lectus, eu mollis diam odio ac felis. Vivamus massa ligula, lacinia tempus elit vitae, finibus venenatis urna. Fusce sem tellus, efficitur efficitur sodales id, ullamcorper ac nibh. Duis tristique leo tempor scelerisque faucibus. Nullam porttitor et ante quis maximus. Fusce nec vulputate ligula. Vivamus lacus nisi, tristique nec orci ac, dignissim eleifend lacus. Nam dignissim, ante a malesuada placerat, nibh enim semper nibh, sed.', '2023-03-15 18:09:42'),
(3, 'Szita felújítás', 'teszt@teszt.hu', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut neque at augue varius blandit non et quam. Suspendisse quis nunc pulvinar, ultricies lacus vel, eleifend sem. Praesent hendrerit, est a convallis tristique, est lorem ultrices lectus, eu mollis diam odio ac felis. Vivamus massa ligula, lacinia tempus elit vitae, finibus venenatis urna. Fusce sem tellus, efficitur efficitur sodales id, ullamcorper ac nibh. Duis tristique leo tempor scelerisque faucibus. Nullam porttitor et ante quis maximus. Fusce nec vulputate ligula. Vivamus lacus nisi, tristique nec orci ac, dignissim eleifend lacus. Nam dignissim, ante a malesuada placerat, nibh enim semper nibh, sed.', '2023-03-15 18:12:47'),
(4, 'Szita felújítás', 'teszt@teszt.hu', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut neque at augue varius blandit non et quam. Suspendisse quis nunc pulvinar, ultricies lacus vel, eleifend sem. Praesent hendrerit, est a convallis tristique, est lorem ultrices lectus, eu mollis diam odio ac felis. Vivamus massa ligula, lacinia tempus elit vitae, finibus venenatis urna. Fusce sem tellus, efficitur efficitur sodales id, ullamcorper ac nibh. Duis tristique leo tempor scelerisque faucibus. Nullam porttitor et ante quis maximus. Fusce nec vulputate ligula. Vivamus lacus nisi, tristique nec orci ac, dignissim eleifend lacus. Nam dignissim, ante a malesuada placerat, nibh enim semper nibh, sed.', '2023-03-15 18:12:52'),
(5, 'Szita felújítás', 'teszt@teszt.hu', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut neque at augue varius blandit non et quam. Suspendisse quis nunc pulvinar, ultricies lacus vel, eleifend sem. Praesent hendrerit, est a convallis tristique, est lorem ultrices lectus, eu mollis diam odio ac felis. Vivamus massa ligula, lacinia tempus elit vitae, finibus venenatis urna. Fusce sem tellus, efficitur efficitur sodales id, ullamcorper ac nibh. Duis tristique leo tempor scelerisque faucibus. Nullam porttitor et ante quis maximus. Fusce nec vulputate ligula. Vivamus lacus nisi, tristique nec orci ac, dignissim eleifend lacus. Nam dignissim, ante a malesuada placerat, nibh enim semper nibh, sed.', '2023-03-15 18:23:03'),
(6, 'Szita felújítás', 'teszt@teszt.hu', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut neque at augue varius blandit non et quam. Suspendisse quis nunc pulvinar, ultricies lacus vel, eleifend sem. Praesent hendrerit, est a convallis tristique, est lorem ultrices lectus, eu mollis diam odio ac felis. Vivamus massa ligula, lacinia tempus elit vitae, finibus venenatis urna. Fusce sem tellus, efficitur efficitur sodales id, ullamcorper ac nibh. Duis tristique leo tempor scelerisque faucibus. Nullam porttitor et ante quis maximus. Fusce nec vulputate ligula. Vivamus lacus nisi, tristique nec orci ac, dignissim eleifend lacus. Nam dignissim, ante a malesuada placerat, nibh enim semper nibh, sed.', '2023-03-15 18:23:24'),
(7, 'Mérőóra javítás', 'teszt@teszt.hu', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut neque at augue varius blandit non et quam. Suspendisse quis nunc pulvinar, ultricies lacus vel, eleifend sem. Praesent hendrerit, est a convallis tristique, est lorem ultrices lectus, eu mollis diam odio ac felis. Vivamus massa ligula, lacinia tempus elit vitae, finibus venenatis urna. Fusce sem tellus, efficitur efficitur sodales id, ullamcorper ac nibh. Duis tristique leo tempor scelerisque faucibus. Nullam porttitor et ante quis maximus. Fusce nec vulputate ligula. Vivamus lacus nisi, tristique nec orci ac, dignissim eleifend lacus. Nam dignissim, ante a malesuada placerat, nibh enim semper nibh, sed.', '2023-03-15 18:23:31'),
(8, 'Mérőóra javítás', 'teszt@teszt.hu', 'Kalibrálási és kalibráltatási tanácsadás és ügyintézés', '2023-03-15 18:31:09'),
(9, 'Proctor és Marshall tömörítő karbantartás, javítás, beállítás', 'teszt@teszt.hu', 'Kalibrálási és kalibráltatási tanácsadás és ügyintézés', '2023-03-15 18:31:41'),
(10, 'SRT inga javítás', 'teszt@teszt.hu', 'Teszt.', '2023-03-15 18:42:50'),
(11, '3 és 4 méteres alumínium mérőléc', 'teszt@teszt.hu', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec pretium ex, quis feugiat diam. Duis id nibh non ex porta cursus. Quisque convallis egestas nunc, a congue nisi pharetra ut. Duis quis lobortis tortor. Phasellus tempor eu magna vulputate mollis. Duis commodo vel ante nec mattis. Nulla vel lacus non tortor sodales dictum. Proin sed odio blandit, maximus purus eget, aliquet purus. Donec tristique ipsum urna, sit amet posuere mi egestas eu. Donec porta.', '2023-03-22 20:09:22');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `referenceimages`
--

CREATE TABLE `referenceimages` (
  `id` int(11) NOT NULL,
  `imageSource` varchar(255) NOT NULL,
  `imageTitle` varchar(255) NOT NULL,
  `imageAlt` varchar(255) NOT NULL,
  `imageDescription` varchar(750) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `referenceimages`
--

INSERT INTO `referenceimages` (`id`, `imageSource`, `imageTitle`, `imageAlt`, `imageDescription`) VALUES
(1, 'img/Fotó-1-155x100.png', 'Tárcsás teherbírás mérő', 'Eszköz egy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin accumsan ornare rhoncus. Vivamus condimentum, ipsum.'),
(2, 'img/Fotó-3-155x100.png', 'Dunamóméter', 'Eszköz kettő', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin accumsan ornare rhoncus. Vivamus condimentum, ipsum.'),
(3, 'img/Fotó-4-155x100.png', 'Erőmérő készlet', 'Eszköz három', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin accumsan ornare rhoncus. Vivamus condimentum, ipsum.'),
(4, 'img/Fotó-6-155x100.png', 'Betonvizsgáló készülék', 'Eszköz négy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin accumsan ornare rhoncus. Vivamus condimentum, ipsum.'),
(6, 'img/nyomasmero.jpg', 'Nyomásmérő óra', 'NyomasmeroOra', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin accumsan ornare rhoncus. Vivamus condimentum, ipsum.'),
(7, 'img/IMG_0559.jpeg', 'Hajtóműves motor', 'Motor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin accumsan ornare rhoncus. Vivamus condimentum, ipsum.');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `quotation`
--
ALTER TABLE `quotation`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `referenceimages`
--
ALTER TABLE `referenceimages`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT a táblához `quotation`
--
ALTER TABLE `quotation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT a táblához `referenceimages`
--
ALTER TABLE `referenceimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

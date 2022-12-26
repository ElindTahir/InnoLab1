-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 26. Dez 2022 um 03:14
-- Server-Version: 10.4.21-MariaDB
-- PHP-Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `innolab1`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bank`
--

CREATE TABLE `bank` (
  `Name` varchar(30) NOT NULL,
  `Srasse` varchar(30) NOT NULL,
  `PLZ` int(10) NOT NULL,
  `Land` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `benutzer`
--

CREATE TABLE `benutzer` (
  `BenutzerID` int(11) NOT NULL,
  `Geschlecht` varchar(128) NOT NULL,
  `Vorname` varchar(128) NOT NULL,
  `Nachname` varchar(128) NOT NULL,
  `Benutzername` varchar(128) NOT NULL,
  `Email` varchar(128) NOT NULL,
  `Passwort` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `benutzer`
--

INSERT INTO `benutzer` (`BenutzerID`, `Geschlecht`, `Vorname`, `Nachname`, `Benutzername`, `Email`, `Passwort`) VALUES
(1, 'm', 'Elind', 'Tahir', 'Elind', 'elind99@live.de', '$2y$10$bzXSKOD3WzKkVsK9XnojgOeLLaeAy7.dC4PVe9CTBJI7be33hk3bO'),
(2, 'm', 'Ahmed', 'Abdelhady', 'underline', 'abdelhady@gmx.at', '$2y$10$MFpxZHKA9Qe.LmDsu3wLAuVtb6D6mPUrkYbnfRdSfQh8dIAYFS5Gq');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `konten`
--

CREATE TABLE `konten` (
  `Bezeichnung` varchar(50) NOT NULL,
  `Kostenwechselservice` tinyint(1) NOT NULL,
  `Online` tinyint(1) NOT NULL,
  `Gebühren` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kontoarten`
--

CREATE TABLE `kontoarten` (
  `Bezeichnung` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `benutzer`
--
ALTER TABLE `benutzer`
  ADD PRIMARY KEY (`BenutzerID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `benutzer`
--
ALTER TABLE `benutzer`
  MODIFY `BenutzerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

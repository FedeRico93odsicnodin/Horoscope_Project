-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 30, 2022 alle 18:10
-- Versione del server: 10.4.24-MariaDB
-- Versione PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `horoscope_db`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `enum_periods`
--

CREATE TABLE `enum_periods` (
  `Id` int(11) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `enum_periods`
--

INSERT INTO `enum_periods` (`Id`, `Description`) VALUES
(1, 'Giorno'),
(2, 'Mese'),
(3, 'Settimana');

-- --------------------------------------------------------

--
-- Struttura della tabella `gender`
--

CREATE TABLE `gender` (
  `Id` int(11) NOT NULL,
  `Descrizione` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `gender`
--

INSERT INTO `gender` (`Id`, `Descrizione`) VALUES
(1, 'Female'),
(2, 'Male'),
(3, 'Other');

-- --------------------------------------------------------

--
-- Struttura della tabella `horoscope_objects`
--

CREATE TABLE `horoscope_objects` (
  `Id` int(11) NOT NULL DEFAULT 1,
  `Period_ID` int(11) NOT NULL,
  `DatePrevision` date NOT NULL,
  `Sign_ID` int(11) NOT NULL,
  `Description_Prevision` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `horoscope_signs`
--

CREATE TABLE `horoscope_signs` (
  `Id` int(11) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Start_Date` date NOT NULL,
  `End_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `horoscope_signs`
--

INSERT INTO `horoscope_signs` (`Id`, `Description`, `Start_Date`, `End_Date`) VALUES
(1, 'Ariete', '2000-03-21', '2000-04-19'),
(2, 'Toro', '2000-04-20', '2000-05-20'),
(3, 'Gemelli', '2000-05-21', '2000-06-20'),
(4, 'Cancro', '2000-06-21', '2000-07-22'),
(5, 'Leone', '2000-07-23', '2000-08-23'),
(6, 'Vergine', '2000-08-24', '2000-09-22'),
(7, 'Bilancia', '2000-09-23', '2000-10-22'),
(8, 'Scorpione', '2000-10-23', '2000-11-21'),
(9, 'Sagittario', '2000-11-22', '2000-12-21'),
(10, 'Capricorno', '2000-12-22', '2000-01-19'),
(11, 'Acquario', '2000-01-20', '2000-02-19'),
(12, 'Pesci', '2000-02-20', '2000-03-20');

-- --------------------------------------------------------

--
-- Struttura della tabella `subscription_types`
--

CREATE TABLE `subscription_types` (
  `Id` int(11) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `subscription_types`
--

INSERT INTO `subscription_types` (`Id`, `Description`) VALUES
(1, 'Standard'),
(2, 'Premium'),
(3, 'Developer');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL DEFAULT 1,
  `Name` varchar(100) NOT NULL,
  `Surname` varchar(100) NOT NULL,
  `Birthday` date NOT NULL,
  `Gender_ID` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `PhoneNum` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `ZipCode` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `SubscriptionType_ID` int(11) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`Id`, `Name`, `Surname`, `Birthday`, `Gender_ID`, `Email`, `PhoneNum`, `City`, `ZipCode`, `Country`, `SubscriptionType_ID`, `Password`) VALUES
(1, 'Developer', 'Admin', '1993-02-13', 2, 'federico.nigro93@gmail.com', '3460200436', 'Milan', '20131', 'Italy', 3, '12345'),
(2, 'Account', 'Standard', '2000-02-13', 1, 'account.standard@test.com', '39999999999', 'Milan', '20131', 'Italy', 1, '12345'),
(3, 'Account', 'Premium', '2000-04-13', 3, 'account.premium@test.com', '39988888888', 'Milan', '20131', 'Italy', 2, '98765'),
(4, 'test', 'eee', '2022-05-18', 1, 'test_test@genter.it', '333333333333', 'Milano', '20131', 'Italy', 1, '123'),
(5, 'account inserimento', 'in fase di test', '2022-05-24', 3, 'test_test_2@genter.it', '333333333333', 'Milano', '20131', 'Italy', 2, '12345');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `enum_periods`
--
ALTER TABLE `enum_periods`
  ADD PRIMARY KEY (`Id`);

--
-- Indici per le tabelle `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`Id`);

--
-- Indici per le tabelle `horoscope_objects`
--
ALTER TABLE `horoscope_objects`
  ADD PRIMARY KEY (`Id`);

--
-- Indici per le tabelle `horoscope_signs`
--
ALTER TABLE `horoscope_signs`
  ADD PRIMARY KEY (`Id`);

--
-- Indici per le tabelle `subscription_types`
--
ALTER TABLE `subscription_types`
  ADD PRIMARY KEY (`Id`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `fk_gender` (`Gender_ID`),
  ADD KEY `fk_subscription` (`SubscriptionType_ID`);

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_gender` FOREIGN KEY (`Gender_ID`) REFERENCES `gender` (`Id`),
  ADD CONSTRAINT `fk_subscription` FOREIGN KEY (`SubscriptionType_ID`) REFERENCES `subscription_types` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

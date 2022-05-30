-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Maio-2022 às 17:07
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `soccer_team_app`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `player`
--

CREATE TABLE `player` (
  `id_player` int(11) NOT NULL,
  `name_player` varchar(60) DEFAULT NULL,
  `birth_player` date DEFAULT NULL,
  `country_player` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `player`
--

INSERT INTO `player` (`id_player`, `name_player`, `birth_player`, `country_player`) VALUES
(1, 'Lionel Messi', '1987-06-24', 'Argentina'),
(2, 'Cristiano Ronaldo', '1985-02-05', 'Portugal'),
(3, 'Neymar da Silva Santos Júnior', '1992-02-05', 'Brazil'),
(4, 'Alisson Becker', '1992-10-02', 'Brazil'),
(5, 'Edouard Mendy', '1992-03-01', 'France'),
(6, 'Ederson Moraes', '1993-08-17', 'Brazil'),
(7, 'Thibaut Courtois', '1992-03-11', 'Belgium'),
(8, 'Manuel Neuer', '1986-03-27', 'Germany'),
(9, 'Yassine Bounou', '1991-04-05', 'Canada'),
(10, 'Milan Borjan', '1987-10-23', 'Croatia'),
(11, 'Samir Handanovic', '1984-07-14', 'Slovenia'),
(12, 'Odisseas Vlachodimos', '1996-04-26', 'Germany'),
(13, 'Hugo Lloris', '1986-12-26', 'France'),
(14, 'Trent Alexander-Arnold', '1998-10-07', 'England'),
(15, 'Andrew Robertson', '1994-03-11', 'Scotland'),
(16, 'João Cancelo', '1994-05-27', 'Portugal'),
(17, 'James Tavernier', '1991-01-27', 'England'),
(18, 'Daley Blind', '1990-03-09', 'Netherlands'),
(19, 'Angeliño', '1997-01-02', 'Spain'),
(20, 'Alphonso Davies', '2000-11-02', 'Liberia'),
(21, 'César Azpilicueta', '1989-08-28', 'Spain'),
(22, 'Alejandro Grimaldo', '1995-09-15', 'Spain'),
(23, 'Achraf Hakimi', '1998-11-04', 'Spain'),
(24, 'Virgil van Dijk', '1991-07-08', 'Netherlands'),
(25, 'Aymeric Laporte', '1994-05-27', 'France'),
(26, 'Marquinhos', '1994-05-14', 'Brazil'),
(27, 'Antonio Rüdiger', '1993-03-03', 'Germany'),
(28, 'Thiago Silva', '1984-09-22', 'Brazil'),
(29, 'Michael Ngadeu-Ngadjui', '1990-11-23', 'Cameroon'),
(30, 'Éder Militão', '1998-01-18', 'Brazil'),
(31, 'Andreas Christensen', '1996-04-10', 'Denmark'),
(32, 'Nayef Aguerd', '1996-03-30', 'Morocco'),
(33, 'David Alaba', '1992-06-24', 'Austria'),
(34, 'Kevin De Bruyne', '1991-08-06', 'Belgium'),
(35, 'Bernardo Silva', '1994-08-10', 'Portugal'),
(36, 'Luka Modric', '1985-09-09', 'Croatia'),
(37, 'Ilkay Gündogan', '1990-10-24', 'Germany'),
(38, 'Jorginho', '1991-12-20', 'Brazil'),
(39, 'Jordan Henderson', '1990-06-17', 'England'),
(40, 'Jude Bellingham', '2003-06-29', 'England'),
(41, 'Rodri', '1996-06-22', 'Spain'),
(42, 'Hans Vanaken', '1992-08-24', 'Belgium'),
(43, 'Fabinho', '1993-10-23', 'Brazil'),
(44, 'Christopher Nkunku', '1997-11-14', 'France'),
(45, 'Thomas Müller', '1989-09-13', 'Germany'),
(46, 'Leroy Sané', '1996-01-11', 'Germany'),
(47, 'Luis Díaz', '1997-01-13', 'Colombia'),
(48, 'Luis Sinisterra', '1999-06-17', 'Colombia'),
(49, 'Karl Toko Ekambi', '1992-09-14', 'France'),
(50, 'Dusan Tadic', '1998-11-20', 'Serbia'),
(51, 'Heung-min Son', '1992-07-08', 'South Korea'),
(52, 'Serge Gnabry', '1995-07-14', 'Germany'),
(53, 'Mason Mount', '1999-01-10', 'England'),
(54, 'Robert Lewandowski', '1988-08-21', 'Poland'),
(55, 'Karim Benzema', '1987-12-19', 'France'),
(56, 'Mohamed Salah', '1992-06-15', 'Egypt'),
(57, 'Kylian Mbappé', '1998-12-20', 'France'),
(58, 'Sadio Mané', '1992-04-10', 'Senagal'),
(59, 'Harry Kane', '1993-07-28', 'England'),
(60, 'Riyad Mahrez', '1991-02-21', 'France'),
(61, 'Sébastian Haller', '1994-06-22', 'France'),
(62, 'Vinícius Júnior', '2000-07-12', 'Brazil');

-- --------------------------------------------------------

--
-- Estrutura da tabela `team`
--

CREATE TABLE `team` (
  `id_team` int(11) NOT NULL,
  `name_team` varchar(50) DEFAULT NULL,
  `description_team` varchar(500) DEFAULT NULL,
  `website_team` varchar(60) DEFAULT NULL,
  `type_team` tinyint(4) DEFAULT NULL,
  `tags_team` varchar(500) DEFAULT NULL,
  `formation_team` int(4) DEFAULT NULL,
  `members_team` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='		';

--
-- Extraindo dados da tabela `team`
--

INSERT INTO `team` (`id_team`, `name_team`, `description_team`, `website_team`, `type_team`, `tags_team`, `formation_team`, `members_team`) VALUES
(1, 'Barcelona FC', 'Barcelona FC Squad', 'https://www.fcbarcelona.com/', 1, 'Pass,Ofensive', 352, 'positionTeamValue0-6,positionTeamValue1-10,positionTeamValue2-5,positionTeamValue3-7,positionTeamValue4-9,positionTeamValue5-2,positionTeamValue6-11,positionTeamValue7-1,positionTeamValue8-4,positionTeamValue9-8,positionTeamValue10-3,'),
(2, 'Real Madrid CF', 'Real Madrid CF Squad', 'https://www.realmadrid.com/pt', 1, 'Champion', 4231, 'positionTeamValue0-10,positionTeamValue1-7,positionTeamValue2-2,positionTeamValue3-11,positionTeamValue4-5,positionTeamValue5-6,positionTeamValue6-9,positionTeamValue7-8,positionTeamValue8-3,positionTeamValue9-1,positionTeamValue10-4,');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id_player`);

--
-- Índices para tabela `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id_team`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `player`
--
ALTER TABLE `player`
  MODIFY `id_player` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `team`
--
ALTER TABLE `team`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

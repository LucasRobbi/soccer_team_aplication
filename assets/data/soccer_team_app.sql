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
(4, 'Petr Cech', '2022-05-10', 'Alemanha'),
(5, 'Luiz Souza', '2020-05-19', 'Brazil'),
(6, 'Guga Guimaraes', '2014-02-05', 'Spain'),
(7, 'John', '2017-05-10', 'United States'),
(8, 'Mark Rufallo', '2014-08-15', 'England'),
(9, 'Elisa Robbi', '2015-01-08', 'Canada'),
(10, 'Almir Robbi', '2020-05-08', 'Italy'),
(11, 'Bubbaloo Chiclete', '2019-05-01', 'Madagascar');

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

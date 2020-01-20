-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 20-Jan-2020 às 20:39
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `Bena`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `Equipa`
--

CREATE TABLE `Equipa` (
  `id_equipa` int(5) NOT NULL,
  `total_jogos` int(5) NOT NULL DEFAULT 0,
  `total_treinos` int(5) DEFAULT 0,
  `n_golos_marcados` int(5) NOT NULL DEFAULT 0,
  `n_golos_sofridos` int(5) NOT NULL DEFAULT 0,
  `n_vitorias` int(5) NOT NULL DEFAULT 0,
  `n_empates` int(5) NOT NULL DEFAULT 0,
  `n_derrotas` int(5) NOT NULL DEFAULT 0,
  `n_cartoes_amarelos` int(5) NOT NULL DEFAULT 0,
  `n_cartoes_vermelhos` int(5) NOT NULL DEFAULT 0,
  `nome` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7;

--
-- Extraindo dados da tabela `Equipa`
--

INSERT INTO `Equipa` (`id_equipa`, `total_jogos`, `total_treinos`, `n_golos_marcados`, `n_golos_sofridos`, `n_vitorias`, `n_empates`, `n_derrotas`, `n_cartoes_amarelos`, `n_cartoes_vermelhos`, `nome`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Benavente'),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Santarém'),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Cartaxo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Estatistica_Equipa`
--

CREATE TABLE `Estatistica_Equipa` (
  `id_jogo` int(5) NOT NULL,
  `id_equipa` int(5) NOT NULL,
  `golos_marcados` int(5) NOT NULL DEFAULT 0,
  `golos_sofridos` int(5) NOT NULL DEFAULT 0,
  `cartoes_amarelos` int(5) NOT NULL DEFAULT 0,
  `cartoes_vermelhos` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin7;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Estatistica_Jogador`
--

CREATE TABLE `Estatistica_Jogador` (
  `id_jogador` int(5) NOT NULL,
  `id_jogo` int(5) NOT NULL,
  `golos_marcados` int(5) NOT NULL DEFAULT 0,
  `golos_sofridos` int(5) NOT NULL DEFAULT 0,
  `assistencias` int(5) NOT NULL DEFAULT 0,
  `cartoes_amarelos` int(5) NOT NULL DEFAULT 0,
  `cartoes_vermelhos` int(5) NOT NULL DEFAULT 0,
  `minutos_jogados` decimal(9,1) NOT NULL DEFAULT 0.0
) ENGINE=InnoDB DEFAULT CHARSET=latin7;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Jogador`
--

CREATE TABLE `Jogador` (
  `id_jogador` int(11) NOT NULL,
  `id_equipa` int(11) DEFAULT NULL,
  `nome` varchar(254) DEFAULT NULL,
  `n_golos_marcados` int(11) DEFAULT 0,
  `n_golos_sofridos` int(11) DEFAULT 0,
  `n_jogos` int(11) DEFAULT 0,
  `n_assistencias` int(11) DEFAULT 0,
  `n_cartoes_amarelos` int(11) DEFAULT 0,
  `minutos_jogados` double DEFAULT 0,
  `n_treinos` int(11) DEFAULT 0,
  `numero_camisola` smallint(6) DEFAULT NULL,
  `data_nascimento` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7;

--
-- Extraindo dados da tabela `Jogador`
--

INSERT INTO `Jogador` (`id_jogador`, `id_equipa`, `nome`, `n_golos_marcados`, `n_golos_sofridos`, `n_jogos`, `n_assistencias`, `n_cartoes_amarelos`, `minutos_jogados`, `n_treinos`, `numero_camisola`, `data_nascimento`) VALUES
(1, 1, 'Raul Iglesias', 0, 0, 0, 0, 0, 0, 0, 1, '1990-05-27 00:00:00'),
(2, 1, 'Jacinto a bola nos pes', 0, 0, 0, 0, 0, 0, 0, 3, '1998-07-20 00:00:00'),
(3, 1, 'Eder le dieu', 0, 0, 0, 0, 0, 0, 0, 7, '2000-05-01 00:00:00'),
(4, 2, 'Rafael Lopes', 0, 0, 0, 0, 0, 0, 0, 1, '1990-05-27 00:00:00'),
(5, 2, 'ZéZé camarinha', 0, 0, 0, 0, 0, 0, 0, 2, '1998-07-20 00:00:00'),
(6, 2, 'Raul iglesias', 0, 0, 0, 0, 0, 0, 0, 5, '2000-05-01 00:00:00'),
(7, 3, 'Valter Gomes', 0, 0, 0, 0, 0, 0, 0, 9, '1998-09-04 00:00:00'),
(8, 3, 'Alfredo Branco', 0, 0, 0, 0, 0, 0, 0, 11, '1998-07-20 00:00:00'),
(9, 3, 'Ruben Santos', 0, 0, 0, 0, 0, 0, 0, 13, '2000-05-01 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Jogadores_Treino`
--

CREATE TABLE `Jogadores_Treino` (
  `id_jogador` int(5) NOT NULL,
  `id_treino` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7;

--
-- Extraindo dados da tabela `Jogadores_Treino`
--

INSERT INTO `Jogadores_Treino` (`id_jogador`, `id_treino`) VALUES
(2, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `Jogo`
--

CREATE TABLE `Jogo` (
  `id_jogo` int(5) NOT NULL,
  `tipo_jogo` varchar(10) NOT NULL,
  `duracao` decimal(5,2) NOT NULL,
  `data` datetime NOT NULL DEFAULT curdate(),
  `local` varchar(254) NOT NULL,
  `golos_equipa_local` int(3) NOT NULL DEFAULT 0,
  `golos_equipa_visitante` int(3) NOT NULL DEFAULT 0,
  `n_cartoes_amarelos_local` int(3) NOT NULL DEFAULT 0,
  `n_cartoes_amarelos_visitante` int(3) NOT NULL DEFAULT 0,
  `n_cartoes_vermelhos_visitante` int(3) NOT NULL DEFAULT 0,
  `n_cartoes_vermelhos_local` int(3) NOT NULL DEFAULT 0,
  `id_local` int(5) NOT NULL DEFAULT 0,
  `id_visitante` int(5) NOT NULL DEFAULT 0,
  `terminado` bit(1) DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=latin7;

--
-- Extraindo dados da tabela `Jogo`
--

INSERT INTO `Jogo` (`id_jogo`, `tipo_jogo`, `duracao`, `data`, `local`, `golos_equipa_local`, `golos_equipa_visitante`, `n_cartoes_amarelos_local`, `n_cartoes_amarelos_visitante`, `n_cartoes_vermelhos_visitante`, `n_cartoes_vermelhos_local`, `id_local`, `id_visitante`, `terminado`) VALUES
(1, '11vs11', '90.00', '2020-01-19 00:00:00', 'Campo da Uniao', 1, 1, 1, 0, 1, 0, 2, 1, b'1'),
(2, '11vs11', '90.00', '2020-01-25 00:00:00', 'Campo do cartaxo', 0, 0, 0, 0, 0, 0, 3, 2, b'0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Treino`
--

CREATE TABLE `Treino` (
  `id_treino` int(5) NOT NULL,
  `local` varchar(254) DEFAULT NULL,
  `terminado` bit(1) NOT NULL DEFAULT b'0',
  `data` datetime DEFAULT curdate(),
  `id_equipa` int(5) NOT NULL,
  `duracao` decimal(5,2) DEFAULT 60.00
) ENGINE=InnoDB DEFAULT CHARSET=latin7;

--
-- Extraindo dados da tabela `Treino`
--

INSERT INTO `Treino` (`id_treino`, `local`, `terminado`, `data`, `id_equipa`, `duracao`) VALUES
(1, 'Santarém', b'1', '2020-01-13 15:09:00', 2, '90.00'),
(2, 'Benavente', b'0', '2020-01-19 00:00:00', 1, '60.00'),
(3, 'Cartaxo', b'0', '2020-01-27 15:00:13', 3, '60.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Users`
--

CREATE TABLE `Users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `nome` varchar(254) DEFAULT NULL,
  `email` varchar(254) DEFAULT NULL,
  `password` varchar(254) DEFAULT NULL,
  `admin` bit(1) DEFAULT b'0',
  `treinador` bit(1) DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=latin7;

--
-- Extraindo dados da tabela `Users`
--

INSERT INTO `Users` (`id_user`, `username`, `nome`, `email`, `password`, `admin`, `treinador`) VALUES
(1, 'admin', 'Administrador', 'admin@admin.pt', 'd033e22ae348aeb5660fc2140aec35850c4da997', b'1', b'1'),
(2, 'teste', 'teste', 'asdasd', 'f10e2821bbbea527ea02200352313bc059445190', b'1', b'1'),
(3, 'vsantos', 'Valter', 'valtermontez@gmail.com', '2e6f9b0d5885b6010f9167787445617f553a735f', b'0', b'0');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `Equipa`
--
ALTER TABLE `Equipa`
  ADD PRIMARY KEY (`id_equipa`);

--
-- Índices para tabela `Estatistica_Equipa`
--
ALTER TABLE `Estatistica_Equipa`
  ADD PRIMARY KEY (`id_jogo`,`id_equipa`);

--
-- Índices para tabela `Estatistica_Jogador`
--
ALTER TABLE `Estatistica_Jogador`
  ADD PRIMARY KEY (`id_jogador`,`id_jogo`);

--
-- Índices para tabela `Jogador`
--
ALTER TABLE `Jogador`
  ADD PRIMARY KEY (`id_jogador`);

--
-- Índices para tabela `Jogo`
--
ALTER TABLE `Jogo`
  ADD PRIMARY KEY (`id_jogo`);

--
-- Índices para tabela `Treino`
--
ALTER TABLE `Treino`
  ADD PRIMARY KEY (`id_treino`);

--
-- Índices para tabela `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `Equipa`
--
ALTER TABLE `Equipa`
  MODIFY `id_equipa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `Jogador`
--
ALTER TABLE `Jogador`
  MODIFY `id_jogador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `Jogo`
--
ALTER TABLE `Jogo`
  MODIFY `id_jogo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `Treino`
--
ALTER TABLE `Treino`
  MODIFY `id_treino` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `Users`
--
ALTER TABLE `Users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

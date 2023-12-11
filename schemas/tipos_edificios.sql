-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/12/2023 às 07:07
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_26`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipos_edificios`
--

CREATE TABLE `tipos_edificios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` text DEFAULT NULL,
  `requisitos` longtext DEFAULT NULL,
  `tempo_base_construcao` int(11) DEFAULT 3,
  `custo_recursos` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`custo_recursos`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tipos_edificios`
--

-- Inserir dados na tabela `tipos_edificios`
INSERT INTO `tipos_edificios` (`id`, `nome`, `descricao`, `requisitos`, `tempo_base_construcao`, `custo_recursos`) VALUES
(1, 'Centro da Vila', 'Principal centro administrativo da vila.', NULL, 3, NULL),
(2, 'Quartel', 'Treina soldados para a batalha.', NULL, 3, NULL),
(3, 'Campo de Tiro com Arco', 'Treina arqueiros para defesa.', NULL, 3, NULL),
(4, 'Porto', 'Constrói navios para exploração e guerra.', NULL, 3, NULL),
(5, 'Celeiro', 'Armazena alimentos para a população.', NULL, 3, NULL),
(6, 'Poço de Armazenagem', 'Armazena recursos essenciais.', NULL, 3, NULL),
(7, 'Templo', 'Local de culto e recrutamento de sacerdotes.', NULL, 3, NULL),
(8, 'Mercado', 'Facilita o comércio e troca de recursos.', NULL, 3, NULL),
(9, 'Estábulo', 'Treina cavaleiros para a batalha.', NULL, 3, NULL),
(10, 'Academia', 'Local de treinamento avançado para unidades especiais.', NULL, 3, NULL),
(11, 'Centro Governamental', 'Usado para pesquisar tecnologias que melhorem edifícios e unidades militares. Necessário para construir centros urbanos adicionais.', NULL, 3, NULL),
(12, 'Oficina de Cerco', 'Constrói máquinas de cerco para atacar fortificações.', NULL, 3, NULL),
(13, 'Fazendas', 'Produz alimentos para a população.', NULL, 3, NULL),
(14, 'Casas', 'Aumenta a capacidade populacional.', NULL, 3, NULL),
(15, 'Torre de Vigilância', 'Fortificações defensivas para proteger a vila.', NULL, 3, NULL),
(16, 'Muralhas', 'Fortificações defensivas para proteger a vila.', NULL, 3, NULL),
(17, 'Maravilha', 'Construção monumental que conduz à vitória.', NULL, 3, NULL);

-- Atualizar custos de recursos substituindo "comida" por "pedra"
UPDATE tipos_edificios SET custo_recursos = '{"ouro": 100, "madeira": 50, "pedra": 75}' WHERE nome = 'Centro da Vila';
UPDATE tipos_edificios SET custo_recursos = '{"ouro": 150, "madeira": 100, "pedra": 60}' WHERE nome = 'Quartel';
UPDATE tipos_edificios SET custo_recursos = '{"ouro": 200, "madeira": 150, "pedra": 150}' WHERE nome = 'Campo de Tiro com Arco';
UPDATE tipos_edificios SET custo_recursos = '{"ouro": 250, "madeira": 200, "pedra": 120}' WHERE nome = 'Porto';
UPDATE tipos_edificios SET custo_recursos = '{"ouro": 300, "madeira": 250, "pedra": 200}' WHERE nome = 'Celeiro';
UPDATE tipos_edificios SET custo_recursos = '{"ouro": 350, "madeira": 300, "pedra": 250}' WHERE nome = 'Poço de Armazenagem';
UPDATE tipos_edificios SET custo_recursos = '{"ouro": 400, "madeira": 350, "pedra": 300}' WHERE nome = 'Templo';
UPDATE tipos_edificios SET custo_recursos = '{"ouro": 450, "madeira": 400, "pedra": 350}' WHERE nome = 'Mercado';
UPDATE tipos_edificios SET custo_recursos = '{"ouro": 500, "madeira": 450, "pedra": 400}' WHERE nome = 'Estábulo';
UPDATE tipos_edificios SET custo_recursos = '{"ouro": 550, "madeira": 500, "pedra": 450}' WHERE nome = 'Academia';
UPDATE tipos_edificios SET custo_recursos = '{"ouro": 550, "madeira": 500, "pedra": 450}' WHERE nome = 'Centro Governamental';
UPDATE tipos_edificios SET custo_recursos = '{"ouro": 600, "madeira": 550, "pedra": 500}' WHERE nome = 'Oficina de Cerco';
UPDATE tipos_edificios SET custo_recursos = '{"ouro": 650, "madeira": 600, "pedra": 550}' WHERE nome = 'Fazendas';
UPDATE tipos_edificios SET custo_recursos = '{"ouro": 700, "madeira": 650, "pedra": 600}' WHERE nome = 'Casas';
UPDATE tipos_edificios SET custo_recursos = '{"ouro": 750, "madeira": 700, "pedra": 650}' WHERE nome = 'Torres';
UPDATE tipos_edificios SET custo_recursos = '{"ouro": 800, "madeira": 750, "pedra": 700}' WHERE nome = 'Muralhas';
UPDATE tipos_edificios SET custo_recursos = '{"ouro": 850, "madeira": 800, "pedra": 750}' WHERE nome = 'Maravilha';


--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tipos_edificios`
--
ALTER TABLE `tipos_edificios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tipos_edificios`
--
ALTER TABLE `tipos_edificios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
vel_fazenda": 50}', 120);

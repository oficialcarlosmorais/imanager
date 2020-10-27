-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 15-Jun-2020 às 19:54
-- Versão do servidor: 5.7.30-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imanager`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pf_hist`
--

CREATE TABLE `pf_hist` (
  `hpf_id` int(11) NOT NULL,
  `hpf_mov` varchar(30) DEFAULT NULL,
  `hpf_valor` int(11) DEFAULT NULL,
  `hpf_data` varchar(20) DEFAULT NULL,
  `hpf_tipo` varchar(1) DEFAULT NULL,
  `hpf_us_id` int(11) DEFAULT NULL,
  `hpf_origem` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pf_hist`
--

INSERT INTO `pf_hist` (`hpf_id`, `hpf_mov`, `hpf_valor`, `hpf_data`, `hpf_tipo`, `hpf_us_id`, `hpf_origem`) VALUES
(9, 'nova', 7690, '2020-06-17', 'r', 1, NULL),
(10, 'mineração', 200, '2020-06-09', 'r', 1, '-'),
(12, 'Salário', 10000, '2020-06-19', 'r', 24, '-'),
(13, 'Venda', 800, '2020-06-11', 'r', 24, '-'),
(14, 'Outra', 550, '2020-06-05', 'r', 24, '-'),
(17, 'luz', 300, '2020-06-11', 'd', 24, 'banco'),
(18, 'água', 40, '2020-06-11', 'd', 24, 'banco'),
(22, 'Qualquer coisa', 2000, '2020-06-12', 'r', 24, NULL),
(24, 'Luz', 176, '2020-06-05', 'd', 26, NULL),
(25, 'Salário', 996, '2020-06-05', 'r', 26, NULL),
(27, 'Lanche', 20, '2020-06-12', 'd', 26, NULL),
(28, 'Natura-Ray', 100, '2020-06-09', 'r', 26, NULL),
(29, 'Natura Katia', 186, '2020-06-11', 'r', 26, NULL),
(30, 'Nat. Edna', 64, '2020-06-11', 'r', 26, NULL),
(31, 'lavagem da moto', 10, '2020-06-11', 'd', 26, NULL),
(32, 'Uber', 11, '2020-06-12', 'd', 26, NULL),
(33, 'Alimentação', 42, '2020-06-11', 'd', 26, NULL),
(40, 'Salario', 1045, '1992-12-22', 'r', 28, NULL),
(41, 'Salario', 1045, '2020-06-12', 'r', 28, NULL),
(42, 'Salario', 1045, '2020-04-23', 'r', 28, NULL),
(43, 'Mensalidade Meta', 365, '2020-06-12', 'd', 28, NULL),
(44, 'Salário', 1000, '2020-06-12', 'r', 29, NULL),
(45, 'Fatura Cartão', 487, '275760-06-12', 'd', 28, NULL),
(46, 'Mensalidade Meta', 543654, '44445-03-12', 'd', 28, NULL),
(47, 'Aluguel', 500, '2020-06-12', 'd', 29, NULL),
(48, 'Salario', -2000, '2020-06-12', 'r', 37, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `us_fisico`
--

CREATE TABLE `us_fisico` (
  `usf_id` int(11) NOT NULL,
  `usf_cpf` varchar(11) NOT NULL,
  `usf_senha` varchar(100) NOT NULL,
  `usf_nome` varchar(60) NOT NULL,
  `usf_sobrenome` varchar(60) NOT NULL,
  `usf_tipo` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `us_fisico`
--

INSERT INTO `us_fisico` (`usf_id`, `usf_cpf`, `usf_senha`, `usf_nome`, `usf_sobrenome`, `usf_tipo`) VALUES
(24, '85549703220', '$2y$10$vLshSZeoIM17p/a86BXvJu8jMwuB7Ai/T7HTM87rrX70nXjFMsx6i', 'José Carlos', 'Nogueira Morais', 'f'),
(26, '32489994204', '$2y$10$3Q2iopK0MuJcueSe5YfDheMsyVrNu98rY2Ww4Ja8VwGlt3KtOGx3m', 'TEREZINHA', 'TAVARES DA SILVA', 'f'),
(27, '1234', '$2y$10$j/8NcIMEPJjBuziVwAyTwubrvGIctG2iFcd1n1qz13UtbQQsLAlXO', 'El Anara', 'Nascimento', 'f'),
(28, '01536970247', '$2y$10$3WERUlofF4w3YSR0oG76FuusTITDNvUH91yhmZ/9CgLDrvUKl3p2W', 'El Anara ', 'Nascimento da Silva', 'f'),
(29, '01672073260', '$2y$10$DsuQXX7Jf1decPX7aq..OOGwQFfF2CZBZ.E0maTLHeCTgj9.0doU.', 'Roseany ', 'Sousa', 'f'),
(30, '12345', '$2y$10$PoY3RIJ1WWx38dEjJCAVZOSYtqPkxyO7UhOzh1bsKaXw4i5COl77W', 'Novo', 'Usuario', 'f'),
(31, '12345', '$2y$10$IFFCByVG.PiPYvBg6Oogs.YF00IsoN8dH4WXu7OMqKhyNkCMS2Cci', 'Novo', 'usurário', 'f'),
(32, '00820882259', '$2y$10$8mspYoqEHap8aL2G7SZvlenFAnS3eBRTIMA8Tgob4OLj2URpUfQZG', 'Rayanne', 'de Paulo', 'j'),
(33, '12345', '$2y$10$rp/3O.pZuLI6lhI5gp9AAeo4YeRPPW/cX3VN3b94ajrxCBJ4LyBcy', 'usuário', 'novo', 'j'),
(34, '12345', '$2y$10$2LUoRG4WupX8q/6Lxu8yQuVsLcIOywpznqjaC6sIRyqnlqj.yQ0Mu', 'Rayanne', 'de Paulo', 'f'),
(35, '123456', '$2y$10$z2BmIO45NFVpURJZS0Gti.wiGVCxyW3BXsfCoT/Du22irKq/Gfpxm', 'novo', 'usuário', 'j'),
(36, '1234567', '$2y$10$J/ofVCqZSL01Zq.jN9dDaerP8MBLJBeJf1XLmn6M.Y666uSiDIFTG', 'Rayanne', 'de Paulo', 'f'),
(37, '99977755523', '$2y$10$pIY4Lu9q384xgSVCt8TW3OdG5ACGwV5DIVzqrNiEcvsAQp6LPpoWi', 'Julia ', 'Andrade', 'f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pf_hist`
--
ALTER TABLE `pf_hist`
  ADD PRIMARY KEY (`hpf_id`);

--
-- Indexes for table `us_fisico`
--
ALTER TABLE `us_fisico`
  ADD PRIMARY KEY (`usf_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pf_hist`
--
ALTER TABLE `pf_hist`
  MODIFY `hpf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `us_fisico`
--
ALTER TABLE `us_fisico`
  MODIFY `usf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

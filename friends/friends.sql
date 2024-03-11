-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2023 at 09:53 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btswebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `amis`
--

CREATE TABLE `amis` (
  `idR` int(11) NOT NULL,
  `idUser1` int(11) NOT NULL,
  `idUser2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `amis`
--

INSERT INTO `amis` (`idR`, `idUser1`, `idUser2`) VALUES
(3, 5, 4),
(11, 8, 7);

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `idBranche` int(11) NOT NULL,
  `nomBranche` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `invitations`
--

CREATE TABLE `invitations` (
  `id` int(11) NOT NULL,
  `exp` int(11) NOT NULL,
  `des` int(11) NOT NULL,
  `dateEnvoie` date NOT NULL,
  `etat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invitations`
--

INSERT INTO `invitations` (`id`, `exp`, `des`, `dateEnvoie`, `etat`) VALUES
(3, 4, 5, '0000-00-00', 'refus'),
(4, 4, 5, '0000-00-00', 'refus'),
(5, 7, 6, '2023-01-11', 'En cours de traiteme'),
(6, 7, 6, '2023-01-11', 'En cours de traiteme'),
(12, 8, 7, '2023-01-11', 'Accepter'),
(13, 8, 7, '2023-01-11', 'Accepter'),
(14, 7, 8, '2023-01-11', 'Accepter');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `exp` int(11) NOT NULL,
  `des` int(11) NOT NULL,
  `message` text NOT NULL,
  `dateEnvoi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `exp`, `des`, `message`, `dateEnvoi`) VALUES
(1, 7, 7, 'salam', '0000-00-00'),
(2, 7, 8, 'salam', '0000-00-00'),
(3, 7, 8, 'haha', '0000-00-00'),
(4, 7, 8, 'jnanskaj\r\n', '0000-00-00'),
(5, 8, 8, 'haha', '0000-00-00'),
(6, 8, 8, 'ana hada', '0000-00-00'),
(7, 8, 8, 'hada message jdid lik a bessi mn aa', '0000-00-00'),
(8, 8, 8, 'hada msg jdid', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `idRole` int(11) NOT NULL,
  `nomRole` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`idRole`, `nomRole`) VALUES
(1, 'Etudiant'),
(2, 'Professeur');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `branche` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `idRole` int(11) NOT NULL,
  `ddN` date NOT NULL,
  `mdp` varchar(500) NOT NULL,
  `photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUser`, `nom`, `prenom`, `branche`, `email`, `idRole`, `ddN`, `mdp`, `photo`) VALUES
(4, 'Bouhaddou', 'Mohammed', 1, 'mohamedbouhaddou37@gmail.com', 1, '2003-08-25', '$2y$10$59B81UC4zlcsOkOOUCPEcOmHCD02j5hjnvz6CWIyPONjsCkPwVTQW', 'uploads/activite.jpg'),
(5, 'Deriouch', 'Hassan', 1, 'hassan@gmail.com', 1, '2023-01-05', '$2y$10$3IP1PeWyjP0UFWcZVOfVfuEY1BvApP2A.Yn2OWYLVMnfLYoj7BTne', 'uploads/activite.jpg'),
(6, 'ss', 'ss', 1, 'ss@gmail.com', 1, '2001-04-25', '$2y$10$aftwoYkk5em8wU4ZzwpXIez9joh/3oXFFkHsJqSMhYx0AWcQB.k.G', 'uploads/default.jpg'),
(7, 'bessi', 'Haitam', 1, 'bessi@gmail.com', 1, '2013-01-08', '3691308f2a4c2f6983f2880d32e29c84', 'samah.jpg'),
(8, 'aa', 'aaa', 1, 'aa@gmail.com', 2, '2013-01-08', '4124bc0a9335c27f086f24ba207a4912', 'aa.jpg'),
(9, 'bb', 'bbbb', 1, 'bb@gmail.com', 1, '2013-01-08', '21ad0bd836b90d08f4cf640b4c298e7c', 'bb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amis`
--
ALTER TABLE `amis`
  ADD PRIMARY KEY (`idR`),
  ADD KEY `idUser1` (`idUser1`),
  ADD KEY `idUser2` (`idUser2`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`idBranche`);

--
-- Indexes for table `invitations`
--
ALTER TABLE `invitations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk3` (`exp`),
  ADD KEY `fk4` (`des`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exp` (`exp`),
  ADD KEY `des` (`des`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRole`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk1` (`branche`),
  ADD KEY `fk2` (`idRole`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amis`
--
ALTER TABLE `amis`
  MODIFY `idR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `idBranche` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `invitations`
--
ALTER TABLE `invitations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `idRole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `amis`
--
ALTER TABLE `amis`
  ADD CONSTRAINT `amis_ibfk_1` FOREIGN KEY (`idUser1`) REFERENCES `users` (`idUser`),
  ADD CONSTRAINT `amis_ibfk_2` FOREIGN KEY (`idUser2`) REFERENCES `users` (`idUser`);

--
-- Constraints for table `invitations`
--
ALTER TABLE `invitations`
  ADD CONSTRAINT `fk3` FOREIGN KEY (`exp`) REFERENCES `users` (`idUser`),
  ADD CONSTRAINT `fk4` FOREIGN KEY (`des`) REFERENCES `users` (`idUser`);

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`exp`) REFERENCES `users` (`idUser`),
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`des`) REFERENCES `users` (`idUser`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk` FOREIGN KEY (`idRole`) REFERENCES `roles` (`idRole`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

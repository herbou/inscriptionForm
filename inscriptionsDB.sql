DROP TABLE IF EXISTS `inscriptions`;

CREATE TABLE IF NOT EXISTS `inscriptions` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `civilite` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `date_naissance` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `languages` set('AR','FR','EN') NOT NULL DEFAULT 'AR',
  `niveau` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `loisirs` set('V','L','S','I') NOT NULL DEFAULT 'V',
  `cp` int(20) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `paye` varchar(100) NOT NULL,
  `commentaire` varchar(300) NOT NULL,
  `cv` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
)

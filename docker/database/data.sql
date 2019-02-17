DROP TABLE IF EXISTS `compteur`;

CREATE TABLE `compteur` (
  `cpt` int default 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `compteur` WRITE;

INSERT INTO compteur (cpt) VALUES (0);

UNLOCK TABLES;

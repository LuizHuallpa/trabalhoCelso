# Host: localhost  (Version 5.7.34-log)
# Date: 2021-06-25 11:25:30
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "votacao"
#

DROP TABLE IF EXISTS `votacao`;
CREATE TABLE `votacao` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `zona` int(11) DEFAULT NULL,
  `secao` int(11) DEFAULT NULL,
  `urna` int(11) DEFAULT NULL,
  `candidato1` int(11) DEFAULT NULL,
  `candidato2` int(11) DEFAULT NULL,
  `candidato3` int(11) DEFAULT NULL,
  `candidato4` int(11) DEFAULT NULL,
  `candidato5` int(11) DEFAULT NULL,
  `branco` int(11) DEFAULT NULL,
  `nulo` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "votacao"
#


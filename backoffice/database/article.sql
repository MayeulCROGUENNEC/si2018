USE Voyage;

DROP TABLE IF EXISTS Partenaire;

CREATE TABLE Partenaire (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(110) NOT NULL,
  `image` VARCHAR(2048) NOT NULL,
  `alt` VARCHAR(100)NOT NULL,
  `type` VARCHAR(100)NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;


USE Voyage;

DROP TABLE IF EXISTS Article;

CREATE TABLE Article (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(110) NOT NULL,
  `texte` VARCHAR(3000) NOT NULL,
  `image` VARCHAR(2048)NOT NULL,
  `alt` VARCHAR(100)NOT NULL,
  `pdate` VARCHAR(100)NOT NULL,
  `auteur` VARCHAR(40)NOT NULL,
  `signature` VARCHAR(200) NOT NULL,
  `logo` VARCHAR(2048) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;


INSERT INTO `Article` (`title`,`texte`,`image`,`alt`,`pdate`,`auteur`, `signature`, `logo`) VALUES ('Airfrance','lalalala','test.jpg','success','12/12/2012','Caroline', 'carolo', 'logo.jpg');


USE Voyage;

DROP TABLE IF EXISTS Admin;

CREATE TABLE Admin (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `pseudo` VARCHAR(100) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;


INSERT INTO `Admin` (`pseudo`,`password`) VALUES ('admin','admin');


USE Voyage;

DROP TABLE IF EXISTS Top;

CREATE TABLE Top (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(110) NOT NULL,
  `type` VARCHAR(100) NOT NULL,
  `image` VARCHAR(2048)NOT NULL,
  `alt` VARCHAR(100)NOT NULL,
  `desc` VARCHAR(100)NOT NULL,
  `Adresse` VARCHAR(100)NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;


USE Voyage;

DROP TABLE IF EXISTS Boite;

CREATE TABLE Boite (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(110) NOT NULL,
  `image` VARCHAR(2048)NOT NULL,
  `alt` VARCHAR(100)NOT NULL,
  `type` VARCHAR(100)NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;


USE Voyage;

DROP TABLE IF EXISTS Twitter;

CREATE TABLE Twitter (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(110) NOT NULL,
  `image` VARCHAR(2048)NOT NULL,
  `alt` VARCHAR(100)NOT NULL,
  `type` VARCHAR(100)NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;



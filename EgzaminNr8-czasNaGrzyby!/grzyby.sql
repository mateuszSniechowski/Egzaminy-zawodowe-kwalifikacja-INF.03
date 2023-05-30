DROP DATABASE IF EXISTS bazaGrzybow;
CREATE DATABASE bazaGrzybow;
USE bazaGrzybow;


CREATE TABLE rodzina(
	id INT AUTO_INCREMENT PRIMARY KEY,
	nazwa TEXT
);

CREATE TABLE potrawy(
	id INT AUTO_INCREMENT PRIMARY KEY,
	nazwa TEXT
);

CREATE TABLE grzyby(
	id INT AUTO_INCREMENT PRIMARY KEY,
	rodzina_id INT,
	FOREIGN KEY (rodzina_id) REFERENCES rodzina(id),
	potrawy_id INT,
	FOREIGN KEY (potrawy_id) REFERENCES potrawy(id),
	nazwa TEXT,
	potoczna TEXT,
	jadalny BOOL,
	miesiac_zbierania INT,
	nazwa_pliku TEXT
); 	

INSERT INTO `potrawy`(nazwa) VALUES("sos");
INSERT INTO `potrawy`(nazwa) VALUES("duszone");
INSERT INTO `potrawy`(nazwa) VALUES("spagetti");
INSERT INTO `potrawy`(nazwa) VALUES("zupa");
INSERT INTO `potrawy`(nazwa) VALUES("niejadalne");

INSERT INTO `rodzina`(nazwa) VALUES("pieczarkowate");
INSERT INTO `rodzina`(nazwa) VALUES("borowikowate");
INSERT INTO `rodzina`(nazwa) VALUES("pieprznikowate");
INSERT INTO `rodzina`(nazwa) VALUES("truflowate");
INSERT INTO `rodzina`(nazwa) VALUES("boczniakowate");

INSERT INTO `grzyby`(`rodzina_id`, `potrawy_id`, `nazwa`, `potoczna`, `jadalny`, `miesiac_zbierania`, `nazwa_pliku`) 
VALUES (1, 2, "pieczarka dwuzarodnikowa", "pieczarka", 1, 7, "pieczarka.jpg");
INSERT INTO `grzyby`(`rodzina_id`, `potrawy_id`, `nazwa`, `potoczna`, `jadalny`, `miesiac_zbierania`, `nazwa_pliku`) 
VALUES (3, 2, "czubajka kania", "kania", 1, 7, "kaja.jpg");
INSERT INTO `grzyby`(`rodzina_id`, `potrawy_id`, `nazwa`, `potoczna`, `jadalny`, `miesiac_zbierania`, `nazwa_pliku`) 
VALUES (2, 4, "borowik szlachetny", "prawdziwek", 1, 7, "prawdziwek.jpg");
INSERT INTO `grzyby`(`rodzina_id`, `potrawy_id`, `nazwa`, `potoczna`, `jadalny`, `miesiac_zbierania`, `nazwa_pliku`) 
VALUES (5, 3, "xerocomus", "podgrzybek", 1, 6, "podgrzybek.jpg");
INSERT INTO `grzyby`(`rodzina_id`, `potrawy_id`, `nazwa`, `potoczna`, `jadalny`, `miesiac_zbierania`, `nazwa_pliku`) 
VALUES (3, 3, "pieprznik jadalny", "kurka", 1,  6, "kurka.jpg");
INSERT INTO `grzyby`(`rodzina_id`, `potrawy_id`, `nazwa`, `potoczna`, `jadalny`, `miesiac_zbierania`, `nazwa_pliku`) 
VALUES (5, 5, "pieurotus", "boczniak", 0, 8, "boczniak.jpg");
INSERT INTO `grzyby`(`rodzina_id`, `potrawy_id`, `nazwa`, `potoczna`, `jadalny`, `miesiac_zbierania`, `nazwa_pliku`) 
VALUES (4, 1, "trufla letnia", "trufla", 1, 7, "trufla.jpg");
DROP DATABASE IF EXISTS biuro;
CREATE DATABASE biuro;
USE biuro; 


CREATE TABLE zdjecia(
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    nazwaPliku text, 
    podpis text
);

CREATE TABLE wycieczki(
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    zdjecia_id INT(10) UNSIGNED ,
    FOREIGN KEY (zdjecia_id) REFERENCES zdjecia(id),
    dataWyjazdu date, 
    cel text, 
    cena DOUBLE,
    dostepna tinyint(1)
);


DROP DATABASE IF EXISTS malarz;
CREATE DATABASE malarz;
USE malarz;

CREATE TABLE farby(
    id_farby INT PRIMARY KEY,
    kolor TEXT,
    cena INT,
    pojemnosc INT
);

CREATE TABLE malowanie(
    id_pomieszczenia INT PRIMARY KEY,
    id_sciany INT,
    id_farby INT,
    liczba_puszek INT,
    FOREIGN KEY (id_farby) REFERENCES farby(id_farby)
);



INSERT INTO `farby`(`id_farby`, `kolor`, `cena`, `pojemnosc`) VALUES(1, "biały", 20, 5);
INSERT INTO `farby`(`id_farby`, `kolor`, `cena`, `pojemnosc`) VALUES(2, "czerwony", 30, 3);
INSERT INTO `farby`(`id_farby`, `kolor`, `cena`, `pojemnosc`) VALUES(3, "niebieski", 35, 3);
INSERT INTO `farby`(`id_farby`, `kolor`, `cena`, `pojemnosc`) VALUES(4, "żółty", 22, 4);
INSERT INTO `farby`(`id_farby`, `kolor`, `cena`, `pojemnosc`) VALUES(5, "zielony", 30, 4);
INSERT INTO `farby`(`id_farby`, `kolor`, `cena`, `pojemnosc`) VALUES(6, "czarny", 50, 2);
INSERT INTO `farby`(`id_farby`, `kolor`, `cena`, `pojemnosc`) VALUES(7, "fioletowy", 64, 3);


INSERT INTO `malowanie`(`id_pomieszczenia`, `id_sciany`, `id_farby`, `liczba_puszek`) VALUES(1, 2, 2, 3);
INSERT INTO `malowanie`(`id_pomieszczenia`, `id_sciany`, `id_farby`, `liczba_puszek`) VALUES(2, 1, 3, 1);
INSERT INTO `malowanie`(`id_pomieszczenia`, `id_sciany`, `id_farby`, `liczba_puszek`) VALUES(3, 1, 4, 2);



-- Kwerenda 1: wybierającą jedynie cenę niebieskiej puszki farby

SELECT cena FROM farby WHERE kolor = 'niebieski';


-- Kwerenda 2: wybierającą jedynie nazwę koloru oraz cenę jednego litra farby 
-- obliczoną zapomocą pól cena i pojemnosc dla wszystkich wierszy tabeli farby

SELECT kolor, cena/pojemnosc FROM farby GROUP BY kolor


-- Kwerenda 3: wybierającą jedynie nazwy kolorów farb dla pomieszczenia 3

SELECT kolor FROM farby LEFT JOIN malowanie ON farby.id_farby = malowanie.id_farby WHERE id_pomieszczenia = 3
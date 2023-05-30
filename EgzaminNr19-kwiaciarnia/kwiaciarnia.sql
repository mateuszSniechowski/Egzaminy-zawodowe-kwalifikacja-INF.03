DROP DATABASE IF EXISTS kwiaciarnia;
CREATE DATABASE kwiaciarnia;
USE kwiaciarnia;

CREATE TABLE kwiaciarnie(
    id_kwiaciarni INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nazwa VARCHAR(20),
    miasto VARCHAR(20),
    ulica VARCHAR(20)
);

CREATE TABLE zamowienia(
    id_zam int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    id_kwiaciarni INT(20) UNSIGNED,
    data date,
    kwiaty TEXT,
    cena FLOAT,
    FOREIGN KEY (id_kwiaciarni) REFERENCES kwiaciarnie(id_kwiaciarni)
);

ZAPYTANIE 1:
SELECT nazwa, ulica FROM kwiaciarnie WHERE miasto = "Malbork";


Zapytanie 2: wybierające jedynie pole id_kwiaciarni oraz liczące liczbę zamówień dla
poszczególnych kwiaciarni

SELECT id_kwiaciarni, COUNT(id_zam) FROM zamowienia GROUP BY id_kwiaciarni



Zapytanie 3: wybierające jedynie pola nazwa i miasto z tabeli kwiaciarnie i odpowiadające im pole
kwiaty z tabeli zamowienia dla zamówień z dnia 7 stycznia 2017. Należy posłużyć się relacją

SELECT nazwa, miasto, zamowienia.kwiaty FROM kwiaciarnie LEFT JOIN zamowienia ON kwiaciarnie.id_kwiaciarni = zamowienia.id_kwiaciarni WHERE zamowienia.data = "2017-01-07";




Zapytanie 4: tworzące nową tabelę klienci o polach:
‒ id, klucz główny, automatycznie inkrementowany, nie może przyjmować wartości NULL
‒ imie, typu tekstowego o długości 15 znaków
‒ nazwisko, typu tekstowego o długości 15 znaków
‒ rabat, przyjmujący jedynie liczby naturalne

CREATE TABLE klienci(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    imie TEXT(15),
    nazwisko TEXT(15),
    rabat INT
);
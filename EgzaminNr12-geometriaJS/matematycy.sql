DROP DATABASE IF EXISTS matematycy;
CREATE DATABASE matematycy;
USE matematycy;


CREATE TABLE Matematycy(
    id INT PRIMARY KEY,
    imie TEXT,
    nazwisko TEXT
);

CREATE TABLE Publikacje(
    id INT PRIMARY KEY,
    tytul TEXT,
    rokWydania INT,
    idAutora INT,
    FOREIGN KEY (idAutora) REFERENCES Matematycy(id)
);

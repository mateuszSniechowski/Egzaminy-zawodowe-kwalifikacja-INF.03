DROP DATABASE IF EXISTS ogloszeniaEg;
CREATE DATABASE ogloszeniaEg;
USE ogloszeniaEg;


CREATE table uzytkownik(
    id INT PRIMARY KEY NOT NULL,
    imie TEXT,
    nazwisko TEXT,
    telefon TEXT,
    email TEXT
);

CREATE table ogloszenia(
    id INT PRIMARY KEY NOT NULL,
    FOREIGN KEY (uzytkownik_id) REFERENCES uzytkownik(id),
    uzytkownik_id INT NOT NULL,
    kategoria INT NOT NULL,
    podkategoria INT NOT NULL,
    tytul TEXT NOT NULL,
    tresc TEXT NOT NULL
);


INSERT INTO `uzytkownik`(`id`, `imie`, `nazwisko`, `telefon`, `email`) VALUES (1, "Mateusz", "Sniechowski", "607 454 699", "egzaminzawodowy@gmail.com");
INSERT INTO `uzytkownik`(`id`, `imie`, `nazwisko`, `telefon`, `email`) VALUES (2, "Zuzia", "Kowalska", "420 454 699", "zuziak@gmail.com");
INSERT INTO `uzytkownik`(`id`, `imie`, `nazwisko`, `telefon`, `email`) VALUES (3, "Tosia", "Nowak", "322 454 699", "tosiapos@gmail.com");
INSERT INTO `uzytkownik`(`id`, `imie`, `nazwisko`, `telefon`, `email`) VALUES (4, "Robert", "Brzeczyszczykiweicz", "331 154 693", "robertasu@gmail.com");
INSERT INTO `uzytkownik`(`id`, `imie`, `nazwisko`, `telefon`, `email`) VALUES (5, "Ellena", "Heat", "321 123 693", "ellenka@gmail.com");

INSERT INTO `ogloszenia`(`id`, `uzytkownik_id`, `kategoria`, `podkategoria`, `tytul`, `tresc`) VALUES (1, 1, 1, 1, "Think and grow rich", "life changing book");
INSERT INTO `ogloszenia`(`id`, `uzytkownik_id`, `kategoria`, `podkategoria`, `tytul`, `tresc`) VALUES (2, 2, 2, 1, "Eminem", "Old school hip-hop");
INSERT INTO `ogloszenia`(`id`, `uzytkownik_id`, `kategoria`, `podkategoria`, `tytul`, `tresc`) VALUES (3, 3, 1, 1, "Cyfrowa twierdza", "Trzymająca w napięciu książka");
INSERT INTO `ogloszenia`(`id`, `uzytkownik_id`, `kategoria`, `podkategoria`, `tytul`, `tresc`) VALUES (4, 4, 2, 1, "Kaz bałagane", "Legenda plskiego rapu");
INSERT INTO `ogloszenia`(`id`, `uzytkownik_id`, `kategoria`, `podkategoria`, `tytul`, `tresc`) VALUES (5, 5, 1, 1, "Gra o tron", "must have do przeczytania/oglądnięcia");


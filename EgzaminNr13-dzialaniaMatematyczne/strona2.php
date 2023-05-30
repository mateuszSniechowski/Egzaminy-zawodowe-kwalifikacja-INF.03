<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <header><a href="index.html"><img src="baner.png"></a></header>
        <main>
            <div class="panele">
                <div class="panel-lewy">
                    <nav>
                        <p>Menu</p>
                        <ul>
                            <li type="none">- <a href="strona1.html">proste działania</a></li>
                            <li type="none">- <a href="strona2.php">potęgowanie</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="panel-prawy">
                <form method="POST">
                <div>
                    <label for="podstawaPotegi"><i>Podaj podstawę potęgi: </i></label>
                    <input type="number" id="podstawaPotegi" name="podstawaPotegi">
                </div>

                <div>
                    <label for="wykladnikPotegi"><i>Podaj dodatni, całkowity wykładnik potęgi: </i></label>
                    <input type="number" id="wykladnikPotegi" name="wykladnikPotegi">
                </div>

                <input type="submit" id="potegowanie" value="POTĘGOWANIE">
            </form>

            <?php 
                if($_SERVER["REQUEST_METHOD"] === 'POST'){
                
                    $podstawaPotegi = $_POST['podstawaPotegi'];
                    $wykladnikPotegi = $_POST['wykladnikPotegi'];

                    if($podstawaPotegi === "" || $wykladnikPotegi === "" || ($podstawaPotegi === "" && $wykladnikPotegi === "")){
                        echo("<p>Wpisz podstawę i wykładnik potęgi</p>");
                    } else if($wykladnikPotegi < 0){
                        echo("Wykładnik potęgi musi być dodatni");
                    } else{
                        $wynikPotegowania = $podstawaPotegi**$wykladnikPotegi;
                        echo("<p>Wynik działania wynosi: ".$wynikPotegowania."</p>");
                    }
                
                }
            ?>
                </div>
            </div>
        </main>
    </body>
</html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <a href="index.html"><img src="baner.png" alt="baner"></a>
        </header>
        <main>
            <div class="menu">
                <h5>Menu</h5>
                <nav>
                    <ul>
                        <li><a href="strona1.html">Proste działania</a></li>
                        <li><a href="strona2.php">Potęgowanie</a></li>
                    </ul>
                </nav>
            </div>
            <div class="content-kalk">
                <h1>Potęgowanie</h1>

                <form method="POST">
                    <div>
                        <label for="podstawa">Podaj podstawę potęgi: </label>
                        <input type="number" id="podstawa" name="podstawa">
                    </div>

                    <div>
                        <label for="wykladnik">Podaj dodatni, całkowity wykładnik potęgi: </label>
                        <input type="number" id="wykladnik" name="wykladnik">
                    </div>

                    <input type="submit" value="POTĘGOWANIE">
                </form>

                <?php 
                    if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['podstawa']) && !empty($_POST['wykladnik']) ){
                        $podstawa = $_POST['podstawa'];
                        $wykladnik = $_POST['wykladnik'];

                        if($wykladnik < 0){

                            echo("<p>Wykładnik potęgi musi być dodatni</p>");

                        }else{

                            $potegowanie = $podstawa ** $wykladnik;
                            echo("<p>Wynik działania wynosi: ".$potegowanie."</p>");

                        }
                    } else if($_SERVER['REQUEST_METHOD'] === "POST" && empty($_POST['podstawa']) && empty($_POST['wykladnik'])){

                        echo("<p>Wpisz podstawę i wykładnik potęgi</p>");
                        
                    } else if($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['wykladnik'] == 0){

                            echo("<p>Wynik działania wynosi 1</p>");
                    }
                ?>
                
            </div>
        </main>
    </body>
</html>
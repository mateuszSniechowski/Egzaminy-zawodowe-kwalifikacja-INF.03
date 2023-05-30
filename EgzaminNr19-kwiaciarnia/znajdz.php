<?php 
    $host = "localhost";
    $user = "root";
    $passwd = "";
    $db_name = "kwiaciarnia";
    
    $conn = new mysqli($host, $user, $passwd, $db_name) or  
        die("ERROR: ".mysqli_error($conn));
?>

<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <link href="styl3.css" rel="stylesheet"> 
        <title>Kwiaty</title>
    </head>
    <body>
        <header>
            <div class="baner">
                <h1>Grupa Polskich Kwiaciarni</h1>
            </div>
        </header>
        <main>
            <div class="lewy">
                <h2>Menu</h2>
                <ol>
                    <li><a href="index.html">Storna główna</a></li>
                    <li><a href="https://www.kwiaty.pl/" target="_blank">Rozpoznaj kwiaty</a></li>
                    <li>
                        <a href="znajdz.php">Znajdź kwiaciarnię</a>
                        <ul>
                            <li><p>w Warszawie</p></li>
                            <li><p>w Malborku</p></li>
                            <li><p>w Poznaniu</p></li>
                        </ul>
                    </li>
                </ol>
            </div>
            <div class="prawy">
                <h2>Znajdź kwiaciarnię</h2>

                <form method="POST" action="#">
                    <label for="miasto">Podaj nazwę miasta:</label>
                    <input type="text" id="miasto" name="miasto">

                    <input type="submit" id="submit" value="SPRAWDŹ">
                </form>

                <?php 
                    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['miasto'])){
                        
                        $miasto = $_POST['miasto'];

                        $sql = "SELECT nazwa, ulica FROM kwiaciarnie WHERE miasto = '$miasto'";
                        $result = mysqli_query($conn, $sql);

                        while($row = mysqli_fetch_array($result)){
                            $nazwa = $row[0];
                            $ulica = $row[1];

                            echo("
                                <h3>".$nazwa .", ". $ulica ."</h3>
                            ");
                        } 
                    }
                ?>
            </div>
        </main>
        <footer><p>Stronę opracował: o00000000</p></footer>
        <?php $conn -> close() ?>
    </body>
</html>
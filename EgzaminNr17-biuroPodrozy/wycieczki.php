<?php 
    $host = "localhost";
    $user = "root";
    $passwd = "";
    $db_name = "biuro";

    $conn = new mysqli($host, $user, $passwd, $db_name) or  
        die("ERROR: ".mysqli_error($conn));
?>

<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <link href="styl4.css" rel="stylesheet">
        <title>Wycieczki po Europie</title>
    </head>
    <body>
        <header>
            <div class="baner">
                <h1>BIURO TURYSTYCZNE</h1>
            </div>
            <div class="dane">
                <h3>Wycieczki, na które są wolne miejsca</h3>

                <?php 
                    $sql = "SELECT id, dataWyjazdu, cel, cena FROM wycieczki WHERE dostepna = 1";
                    $result = mysqli_query($conn, $sql);

                    while($row = mysqli_fetch_array($result)){
                        $id = $row[0];
                        $dataWyjazdu = $row[1];
                        $cel = $row[2];
                        $cena = $row[3];
                ?>

                <ul>
                    <li><?php echo($id);?>. dnia <?php echo($dataWyjazdu) ?> jedziemy do <?php echo($cel);?>, cena: <?php echo($cena);?> </li>
                </ul>

                <?php }?>
            </div>
        </header>
        <main>
            <div class="lewy">
                <h2>Bestselery</h2>

                <table>
                    <tr>
                        <td>Wenecja</td>
                        <td>kwiecień</td>
                    </tr>
                    <tr>
                        <td>Londyn</td>
                        <td>lipiec</td>
                    </tr>
                    <tr>
                        <td>Rzym</td>
                        <td>wrzesień</td>
                    </tr>
                </table>
            </div>
            <div class="srodkowy">
                <h2>Nasze zdjęcia</h2>

                <?php 
                    $sql = "SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis DESC";
                    $result = mysqli_query($conn, $sql);

                    while($row = mysqli_fetch_array($result)){
                        $plik = $row['nazwaPliku'];
                        $podpis = $row['podpis'];
                ?>

                <img src="<?php echo($plik); ?>" alt="<?php echo($podpis); ?>">
                
                <?php } ?>
            </div>
            <div class="prawy">
                <h2>Skontaktuj się</h2>
                <a href="mailto: turysta@wycieczki.pl">Napisz do nas</a>
                <p>telefon: 111222333</p>
            </div>
        </main>
        <footer>
            <p>Steonę wykonał: 00000000000000</p>
        </footer>
        <?php 
            $conn -> close();
        ?>
    </body>
</html>
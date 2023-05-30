<?php 
    $host="localhost";
    $user="root";
    $passwd="";
    $db_name="komis";
?>

<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <link href="auto.css" rel="stylesheet">
        <title>Komis Samochodowy</title>
    </head>
    <body>
        <header>
            <div class="baner">
                <h1>SAMOCHODY</h1>
            </div>
        </header>
        <main>
            <div class="panel-lewy">
                <h2>Wykaz samochodów</h2>

                <?php 
                    $conn = new mysqli($host, $user, $passwd, $db_name) or  
                        die("ERROR: ".mysqli_error($conn));

                    $sql = "SELECT id, marka, model FROM samochody";
                    $result = mysqli_query($conn, $sql);

                    while($row = mysqli_fetch_array($result)){
                        $id = $row[0];
                        $marka = $row[1];
                        $model = $row[2];
                ?>

                <ul>
                    <li>
                        <?php echo($id);?>
                        <?php echo($marka);?>
                        <?php echo($model);?>
                    </li>
                </ul>
                <?php } ?>

                <h2>Zamówienia</h2>
                <?php 
                    $sql = "SELECT Samochody_id, Klient FROM `zamowienia`";
                    $result = mysqli_query($conn, $sql);

                    while($row = mysqli_fetch_array($result)){
                        $id = $row[0];
                        $klient = $row[1];
                    
                ?>
                <ul>
                    <li>
                        <?php echo($id); ?>
                        <?php echo($klient);?>
                    </li>
                </ul>
                <?php } ?>
            </div>
            <div class="panel-prawy">
                <h2>Pełne dane: Fiat</h2>
                    
                <?php 
                    $sql = "SELECT * FROM `samochody` WHERE marka = 'FIAT'";
                    $result = mysqli_query($conn, $sql);

                    while($row = mysqli_fetch_array($result)){
                        $id = $row[0];
                        $marka = $row[1];
                        $model = $row[2];
                        $rocznik = $row[3];
                        $kolor = $row[4];
                        $stan = $row[5];

                        echo(
                            "<p>$id / $marka / $model / $rocznik / $kolor / $stan </p>"
                        );
                    }
                ?>
            </div>
        </main>
        <footer>
            <table>
                <tr>
                    <td><a href="kwarendy.txt">Kwarendy</a></td>
                    <td><p>Autor: 000000000</p></td>
                    <td><img src="komis/auto.png" alt="komis samochodowy"></td>
                </tr>
            </table>
        </footer>
        <?php $conn -> close(); ?>
    </body>
</html>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link href="./styl.css" rel="stylesheet">
    <title>cena</title>
</head>
<body>
    <div class="baner">
        <h1>
            <a href="index.html">Koszty farby</a>
        </h1>
    </div>
    
    <div class="panelLewy">
        <h3>Mieszamy czy wyceniamy?</h3>
        <p class="paragraf2">
            <a href="mieszamy.html">Mieszamy</a><br>
            <a href="cena.html">Wyceniamy</a>
        </p>
    </div>

    <div class="panelPrawy">
    <h3>Obliczanie na podstawie powierzchni zapotrzebowania na farbę</h3>
        <div class="kalkulator">
            

        <form action="#" method="POST">  
            <span>Podaj powierzchnię:</span>  
            <input id="pow" name="pow" type="number"> <br>
            <input style="margin: 20px;" id="submit" type="submit" value="Policz">
        </form>

<?php
    $host = 'localhost';
    $user = 'root';
    $passwd = '';
    $db_name = 'malarz';

    $connect = mysqli_connect($host, $user, $passwd, $db_name) or 
        die("ERROR: ".mysqli_connect_error());

    $result = 0;

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(!empty($_POST['pow'])){
            $pow = $_POST['pow'];
            $a = 4;
            $result = floor($pow / $a);

            echo("
            <p>Liczba jednolitrowych puszek 
            farby potrzebnych do pomalowania wynosi: $result</p>
            ");
        }
    }
    $connect->close();
?>

        </div>
    </div>

    <footer>
        <p class="footer">
            MALARZ<br>
            Stronę opracował: 000000000000
        </p>
    </footer>
</body>
</html>


<?php 
    $host='localhost';
    $user='root';
    $passwd='';
    $db_name='sklep';
?>

<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Artykuły papiernicze</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="baner">
        <h1>W naszym sklepie internetowym kupisz najtaniej</h1>
    </div>
    <div class="container">
        <div class="lewy">
            <h2>Kontakt</h2>
            <p>telefon: 444333222 <br>e-mail: <a href="mailto: bok@sklep.pl"> bok@sklep.pl</a></p>
            <img src="promocja2.png" alt="promocja">
        </div>
        <div class="srodkowy">
            <h2>Promocja 10% obejmuje artykuły:</h2>
            <ul>
                <?php 
                    $connect = mysqli_connect($host, $user, $passwd, $db_name) or
                        die("ERROR: ".mysqli_errno());

                    $sql = "SELECT nazwa FROM towary WHERE promocja = 1";
                    $query = mysqli_query($connect, $sql);
                    while($row = mysqli_fetch_array($query)){
                        $nazwa = $row[0];
                        echo(
                            "<li>   
                                $nazwa
                            </li>"
                        );
                    }
                ?>
            </ul>
        </div>
        <div class="prawy">
            <h2>Cena wybranego artykułu w promocji</h2>
            <form method="POST">
                <select name="id">
                    <?php 
                        $sqlV2 = "SELECT id, nazwa FROM towary WHERE promocja = 1";
                        $query = mysqli_query($connect, $sqlV2);

                        while($row = mysqli_fetch_array($query)){
                            $id = $row[0];
                            $data = $row[1];
                            
                            echo("
                            <option value=".$row[0].">$data</option>");
                        }
                    ?>
                    
                </select>
                    <input type="submit" value="Wybierz">
            </form>
            <?php 
                $connect = mysqli_connect($host, $user, $passwd, $db_name) or
                    die("ERROR: ".mysqli_error());

                    

                if($_SERVER['REQUEST_METHOD'] === 'POST'){
                    $id = $_POST['id'];
                    $sqlV3 = "SELECT cena FROM towary WHERE id='$id'";
                    $result2 = mysqli_query($connect, $sqlV3);

                    while($row2 = mysqli_fetch_array($result2)){
                        $cena = $row2['cena'];
                        $cena_promocyjna = round($cena * 0.9, 2);
                        echo("<p>$cena_promocyjna</p>");
                }
                }
            ?>
        </div>
    </div>

    <footer>
        <h3>Autor strony: 00000000000000</h3>
    </footer>
</body>    
</html>
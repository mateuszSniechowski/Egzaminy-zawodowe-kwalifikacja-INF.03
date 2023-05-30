<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl1.css">
    <title>Portal ogłoszeniowy</title>
</head>
<body>

<div class="container"> 

<div class="baner">
    <h1>Portal ogłoszeniowy</h1>
</div>

<div class="panelLewy">
    <h2>Kategorie ogłoszeń</h2>
    <ol type="I">
        <li>Książki</li>
        <li>Muzyka</li>
        <li>Filmy</li>
    </ol>
    <img src="ksiazki.jpg" alt="kupię / sprzedam książkę">

<table>
    <tr>
        <th>Lista ogłoszeń</th>
        <th>Cena ogłoszenia</th>
        <th>Bonus</th>
    </tr>
        <tr>
            <td>1 - 10</td>
            <td>1 PLN</td>
        </tr>
        
        <tr>
            <td>11 - 50</td>
            <td>0.80 PLN</td>
        </tr>

        <tr>
            <td>51 i wiecej</td>
            <td>0.60 PLN</td>
        </tr>
</table>
</div>

<div class="panelPrawy">
    <h2>Ogłoszenia kategorii książki</h2>

<?php 
    require_once "connect.php";
    $connect = mysqli_connect($host, $user, $passwd, $db_name) or 
        die("ERROR: ".mysql_error());

    $sql = "SELECT id, tytul, tresc FROM ogloszenia where kategoria = 1";
    $result = mysqli_query($connect, $sql);

    while($row = mysqli_fetch_array($result)){
        $id = $row[0];
        $nazwa = $row[1];
        $opis = $row[2];

        echo("
        <h3>$id $nazwa</h3>
        <p>$opis</p>"); 

    $query = "SELECT uzytkownik.telefon 
    FROM uzytkownik 
    JOIN ogloszenia ON uzytkownik.id = ogloszenia.uzytkownik_id
    WHERE ogloszenia.id = $id";

    $result2 = mysqli_query($connect, $query);
    while($r = mysqli_fetch_array($result2)){
        $telefon = $r[0];

        echo("
        <p>telefon kontaktowy: $r[0]</p>
        ");
    }}
    $connect -> close();
?>

</div>

</div>

    <footer><p>Mateusz Sniechowski</p></footer>

</body>
</html>


<!-- II opcja  -->

<!-- <?php 
$db = mysqli_connect("localhost", "root", "", "ogłoszeniaeg");
if(!db){
    die("Something went wrong. Unexpected error: ".mysql_error());
}


$sql1 = "SELECT id, tytul, tresc FROM ogłoszenia where kategoria = 1";
$result1 = mysqli_query($db, $sql1);
while($row = mysqli_fetch_array($result1)){
    echo("<h3>". $row["id"] . " " . $row["tytul"] . "</h3>");
    echo("<p>". $row["tresc"] ."</p>");
}
mysqli_close($db);
?> -->

<!-- 
// fetch row zworci nam tablice gdzue kazda koljena kolumna trzeba sie do niej odlwaoc czyli row[1], row[2]

// fetch_array odwolujemt sie od id,

// fetch_aasoc pozwal nam na oba opcje  -->




<?php 
    $host = 'localhost';
    $user = 'root';
    $passwd = '';
    $db_name = 'malarz';

    $con = new mysqli($host, $user, $passwd, $db_name) or  
        die("ERROR: ".mysqli_error($con));
?>

<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>malarz</title>
</head>
<body>
    <header>
        <div class="baner">
            <h1><a href="index.html">Koszty farby</a></h1>
        </div>
    </header>
    <main>
        <div class="lewy">
            <h3>Mieszamy czy wyceniamy?</h3>

            <div><a href="mieszamy.html">Mieszamy</a></div>
            <div><a href="cena.html">Wycenimay</a></div>
        </div>
        <div class="prawy">
            <h3>Znajdź swój kolor - wpisz po 3 losowe cyfry w każde pole!</h3>

            <form method="POST">
                <label for="r"><b>R:</b></label>
                <input type="number" id="r" name="r" placeholder="Wpisz 3 cyfry">

                <label for="g"><b>G:</b></label>
                <input type="number" id="g" name="g" placeholder="Wpisz 3 cyfry">

                <label for="b"><b>B:</b></label>
                <input type="number" id="b" name="b" placeholder="Wpisz 3 cyfry"><br>

                <input type="submit" id="ok" value="OK">
            </form>

            <?php 
                if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['r']) && !empty($_POST['g']) && !empty($_POST['b'])){
                    $r = $_POST['r'];
                    $g = $_POST['g'];
                    $b = $_POST['b'];
                } 
            ?>
                <canvas 
                    id="square"
                    width="200px" 
                    height="200px" 
                    style="background-color: rgb(<?php echo($r .", ". $g .", ". $b )  ?>);
                           border-radius: 10px;"
                >
                </canvas>
           <?php 

                $sql = "SELECT id_farby, kolor FROM farby";
                $result = mysqli_query($con, $sql);
            ?>
                <ol id="lista"><h4>Nasze dostępne kolory: </h4>

            <?php
                while($row = mysqli_fetch_array($result)){
                    $kolory = $row['kolor'];
                    $id = $row['id_farby'];
           ?>
                    <li><a href="#" id="id_<?php echo($id);?>">
                        <?php echo($kolory);?>
                    </a></li>
            <?php 
                } 
            ?>
                </ol>

            <script src="colorForm.js"></script>
        </div>
    </main>
    <footer>
        <p>MALARZ</p><br>
        <p>Stronę opracował: 000000</p>
    </footer>
</body>
</html>
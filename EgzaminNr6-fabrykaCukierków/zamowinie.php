<html>
<head>
    <meta charset="UTF-8">
    <title>Fabryka Cukierków</title>
    <link href="styl10.css" rel="stylesheet">
</head>
<body>
    <div class="container">

        <div class="blokiGorne"> 
            <div class="blokGorny1">

                <div class="image1">
                    <a href="zamowienie.html">Zamów Cukierki</a>
                </div>

            </div>
            <div class="blokGorny2">
                <a href="index.html"><img src="./zdjęcia/logotyp.png" alt="Nasze Logo"></a>
            </div>
        </div>

        <div class="baner">
            <h1>Strefa zamówień</h1>
        </div>

        <div class="blokiGlowne">

            <div class="blokGlownyLewy">

                <form method="POST">
                    <label>Numer kształtu</label><br>
                    <input type="number" name="ksztalt" id="ksztalt"><br>

                    <label>Skomponuj swój kolor, podaj RGB: </label><br>
                    R: <input type="number" name="R">
                    G: <input type="number" name="G">
                    B: <input type="number" name="B"><br>

                    <button type="submit" name="submit">Zamówienie</button><br>
                    
                    <p>
                        <?php

                            if(isset($_POST['submit'])){
                                $ksztalt = $_POST['ksztalt'];

                                $tekst = "Twoje zamówienie to cukierek ";
                                switch($ksztalt){
                                    case 1:
                                        $tekst .= "cytryna";
                                        break;
                                    case 2:
                                        $tekst .= "liść";
                                        break;
                                    case 3:
                                        $tekst .= "banan";
                                        break;
                                    default:
                                        $tekst = "Twoje zamówienie";
                                }
                                echo( '<p>'. $tekst .'</p>');
                            } else{
                                echo("Twoje zamówienie ". "<br>");
                            }

                            if(!empty($_POST['R'] && !empty($_POST['G']) && !empty($_POST['B']))){
                                $R = $_POST['R'];
                                $G = $_POST['G'];
                                $B = $_POST['B'];
                                echo('<button class="button" name="kolor" style="background-color: rgb('.$R.', '.$G.', '.$B.');">kolor</button>');
                           } else{
                                echo("<button>kolor</button>");
                           }
                        ?>
                        </p>                    
                    </form>
            </div>
                
            <div class="blokGlownyPrawy">
                <h2>Nasza oferta</h2>
                <table>
                    <tr>
                        <td>Kształt</td>
                        <td rowspan="2">Możesz zamówić <br> dowolny kolor cukierka</td>
                    </tr>
                    <tr>
                        <td>
                            <ol>
                                <li>cytryna</li>
                                <li>liść</li>
                                <li>banan</li>
                            </ol>
                        </td>
                    </tr>
                </table>
            </div>

        </div>
    
        <footer>
            <p>Autor strony: <strong>0101010101001</strong></p>
        </footer>
    </div>

</body>
</html>


<?php 
    $host = 'localhost';
    $user = 'root';
    $passwd = '';
    $db_name = "wedkowanie";

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $conn = new mysqli($host, $user, $passwd, $db_name) or 
            die("ERROR: ".mysqli_error());

        $lowisko = $_POST['lowisko'];
        $data = $_POST['data'];
        $sedzia = $_POST['sedzia'];

        if($lowisko != "" && $data != "" && $sedzia != ""){
            $sql = "INSERT INTO zawody_wedkarskie(Karty_wedkarskie_id, Lowisko_id, data_zawodow, sedzia) VALUES(0, $lowisko, '$data', '$sedzia')";
            $result = mysqli_query($conn, $sql);

            Header("Location: zawody.html");
            $conn -> close();
        } else{
            Header("Location: zawody.html");
            $conn -> close();
        }
    }
?>
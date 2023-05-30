<?php 
    $user = 'root';
    $host = 'localhost';
    $db_name = "matematycy";
    $passwd = "";


    $connect = new mysqli($host, $user, $passwd, $db_name) or 
        die("ERROR: ".mysqli_error());

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $id = $_POST['id'];
        $imie = $_POST['imie'];
        $nazwisko = $_POST['nazwisko'];
        $idPublikacji = $_POST['idPublikacji'];
        $tytul = $_POST['tytul'];
        $rok = $_POST['rok'];
        $idAutora = $_POST['idAutora'];

        $sqlM = "INSERT INTO Matematycy(id, imie, nazwisko) VALUES('$id', '$imie', '$nazwisko')";
        $sqlP = "INSERT INTO Publikacje(id, tytul, rokWydania, idAutora) VALUES('$idPublikacji', '$tytul', '$rok', '$idAutora')";
        
        mysqli_begin_transaction($connect);

        if(mysqli_query($connect, $sqlM) && mysqli_query($connect, $sqlP)){
            mysqli_commit($connect);
            return;
        } else{
            mysqli_rollback($connect);
            return;
        }
    }
?>
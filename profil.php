<?php
    require_once("funkcije.php");
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Zadatak 2 - Profil</h1>
    <?php
    if(isset($_SESSION['ime']) and isset($_SESSION['prezime']) and isset($_SESSION['datum'])){
        $ime = $_SESSION['ime'];
        $prezime = $_SESSION['prezime'];
        $datum = $_SESSION['datum'];
        echo "Ime: ".$ime."<br>Prezime: ".$prezime."<br>Datum: ".$datum."<br><br>";
        echo "<a href='odjava.php?odjava'>Odjavite se</a>";
    }
    else{
        echo "Sesija ne postoji!!";
    }

?>
</body>
</html>
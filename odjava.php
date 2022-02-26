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
    <h1>Zadatak 2 - odjava</h1>
    <?php
        if((isset($_SESSION['ime']) and isset($_SESSION['prezime']) and isset($_SESSION['datum']))){
            session_destroy();
            echo "<a href='index.php'>Prijavi se</a>";
        }
        else{
            echo "Sesija nije napravljena!!!";
        }
    ?>
    
</body>
</html>

<?php
    require_once("funkcije.php");
    session_start();
    if(isset($_GET['odjava'])){
        logout();
    }
    if(login()) header("Location: profil.php");
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
    <h1>Zadatak 2 - Prijava</h1>
    <form action="index.php" method="post">
        Ime: <input type="text" name="ime" id="ime" placeholder="Unesite ime:"><br><br>
        Prezime: <input type="text" name="prezime" id="prezime" placeholder="Unesite prezime:"> <br><br>
        Datum: <input type="date" name="datum" id="datum"><br><br>
        <button type="subbmit" name="dugme">Snimi podatke</button><br><hr>
    </form>
    
    <?php
        if(isset($_POST['dugme'])){
            $ime = $_POST['ime'];
            $prezime = $_POST['prezime'];
            $datum = $_POST['datum'];

            if($ime!="" and $prezime!="" and $datum!=""){
                //echo "Uneli ste: ".$ime.", ".$prezime.", ".$datum;
                $_SESSION['ime'] = $ime;
                $_SESSION['prezime'] = $prezime;
                $_SESSION['datum'] = $datum;
                header("Location: profil.php");
                
            }
            else{
                echo "Niste uneli podatke!!";
            }
        }
        else{
            echo "Dobro dosli na stranicu!!";
        }
    ?>
</body>
</html>
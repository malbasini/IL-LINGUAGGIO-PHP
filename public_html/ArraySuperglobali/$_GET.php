<?php
//$_GET
/*--Una richiesta tra client e server può essere effettuata in diversi modi.
Questi vengono chiamati metodi HTTP. Una classica comunicazione tra client e server
avviene con il metodo GET o POST. Quando digitiamo un URL nella barra degli indirizzi
di un browser stiamo effettuando una richiesta get. Se andiamo all'interno di un browser
e apriamo gli strumenti per sviluppatori (F12 per Chrome) vedremo una richiesta GET nella
scheda Network se abbiamo la lingua impostata in Inglese */

var_dump($_GET);
//extract($_GET);
//echo "Corso {$corso} realizzato da {$nome}";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action='$_GET.php' method='GET'>
        <input type='text' name = 'nome' placeholder='Nome...'>
        <input type='text' name = 'corso' placeholder='Corso...'>
        <br>
        <br>
        <input type='submit' value="Invia..">
    </form>
</body>
</html>
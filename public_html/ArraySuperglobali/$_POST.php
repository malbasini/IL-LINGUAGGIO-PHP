<?php
//$_POST
/*--Con il metodo POST i valori non vengono passati all'URL.
Se apriamo gli strumenti per sviluppatori (F12) poi scheda network
rifacciamo la richiesta, facciamo click sul file PHP notiamo
che i dati sono passati attraverso il payload. Una cosa da non fare mai
è quella di fidarsi di quello che l'utente digita nelle caselle di testo,
può infatti introdurre codice malevolo o appropiarsi di autorizzazioni
non pertinenti. Per quanto riguarda $_POST è da preferire a $_GET
in quanto i dati non viaggiano nell'URL. Possiamo utilizzare $_GET quando
i dati che viaggiano nell'URL non sono dati sensibili. I dati sia che utilizziamo GET
o POST sono costruiti e codificati dall'attributo enctype.*/

//var_dump($_POST);
extract($_POST);
if (isset($nome))
    $nomeClean = htmlspecialchars($nome); //evita codice javascript iniettato
    echo $nomeClean;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action='$_POST.php' method='POST' enctype="multipart/form-data">
        <input type='text' name = 'nome' placeholder='Nome...'>
        <input type='text' name = 'corso' placeholder='Corso...'>
        <br>
        <br>
        <input type='submit' value="Invia..">
    </form>
</body>
</html>
<?php
//STATO DELLA SESSIONE
/*--Se vogliamo cambiare il Path delle
informazioni di sessione lo possiamo fare.*/
$path = $_SERVER['DOCUMENT_ROOT'].
'/corsi/php/ArraySuperglobali/sessioni';
session_save_path($path);
session_start();//Con l'invocazione del primo
//session_start() viene creato un ID di sessione.
echo session_id();
/* $statoSessione = session_status();
//Al valore 1 corrisponde
//sessione non attiva, 2 attiva (dopo session_start())
/*--Anzichè usare 1 e 2 possiamo usare due costanti.*/
/*
if($statoSessione === PHP_SESSION_NONE){
    echo 'Sessione non attiva';
}
else if ($statoSessione === PHP_SESSION_ACTIVE){
    echo 'Sessione attiva';
} */

?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="pagina3.php">Pagina 3</a>
</body>

</html>

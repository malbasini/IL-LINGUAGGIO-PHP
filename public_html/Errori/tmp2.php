<?php
set_error_handler('errorHandler',E_ALL);

function errorHandler(int $errno,string $errstr)
{
    $errore = "Numero errore $errno <br> messaggio $errstr";
    error_log($errore);
}

echo $nonDefinita;
?>
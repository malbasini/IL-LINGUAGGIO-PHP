<?php
//MATCH (PHP 8)
$errorCode = "502";
/*switch ($errorCode){
   case 401: 
   case 403: 
   case 404: echo "Errore richiesta";
   break;
   case 500: echo "Errore server";
   break;
}*/
//match è un'espressione quindi ritorna un valore. Esegue un confronto stretto, quindi non si può
//usare una stringa "404" andrebbe in errore controllando il tipo se non esiste un default. In match dobbiamo per forza
//avere una corrispondenza, oppure usiamo default, nello switch non veniva segnalato un errore se non vi era
//corrispondenza nei case.
$msg = match( $errorCode ){
     401,403,404 => 'Errore richiesta',
     500, 502 => 'Errore interno del server',
     default => 'Codice di errore non riconosciuto'
};
echo $msg;
?>
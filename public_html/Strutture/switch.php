<?php
//SWITCH
$errorCode = 404;
$errorCode = "404";//Conversione automatica ad intero
switch ($errorCode){
   case 401: echo "Non autenticazione";
   break;
   case 403: echo "Non autorizzazione";
   break;
   case 404: echo "Not found";
   break;
   case 500: echo "Errore server";
   break;
}

$errorCode = 400;//In questo caso alcuni blocchi dello switch sono vuoti, PHP prosegue su un'altra riga
//non essendoci un break.
switch ($errorCode){
   case 401: 
   case 403: 
   case 404: echo "Errore richiesta";
   break;
   case 500: echo "Errore server";
   break;
   default: echo "Codice di errore non riconosciuto"; //default è un pò come else nella struttura if-else.
   //default deve essere l'ultima istruzione all'interno dello switch. Se cancelliamo default
   //anche se non c'è alcuna corrispondenza all'interno dello switch non c'è errore.
}

?>
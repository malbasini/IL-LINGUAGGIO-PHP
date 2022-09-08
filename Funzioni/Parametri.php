<?php
//PARAMETRI DELLE FUNZIONI
function calcolaValore($fattore1,$fattore2 = 1){
    return rand(1,10) * $fattore1 * $fattore2;
}
/*Se non indichiamo entrambi i valori ci viene segnalato un errore fatale, 
se ne indichiamo tre la funzione non va in errore. A volte abbiamo bisogno di parametri 
opzionali, per fare ciò in PHP si indica un valore di default negli ultimi parametri. 
Prima si indicano i parametri richiesti poi quelli opzionali alla fine.*/
echo calcolaValore(0.8) . "\n\r";
//Alla variabile $fattore2 verrà assegnato il valore di default 1.
echo calcolaValore(0.8,0.7) . "\n\r";  
//Alla variabile $fattore2 verrà assegnato il valore 0.7.


function calcolaValore2($fattore1 , $fattore2 = 1){
    return $fattore2;
}
echo calcolaValore2(0.8) . "\n\r";
//Alla variabile $fattore2 verrà assegnato il valore di default 1.
echo calcolaValore2(0.8,0.7);  
//Alla variabile $fattore2 verrà assegnato il valore 0.7.

?>
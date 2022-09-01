<?php
//OPERATORE TERNARIO ?:
$anni = 14;
if ($anni < 13){
    $costoBiglietto = 10;
}else{
    $costoBiglietto = 20;
}
//In questo codice non c'è nulla di sbagliato, possiamo usare una forma ancora
//più compatta con l'operatore ternario.
$costoBiglietto = ( $anni < 13) ? 10 : 20;
/*--Se la condizione è verificata assegna alla variabile il valore 10, altrimenti 20.*/
echo $costoBiglietto;
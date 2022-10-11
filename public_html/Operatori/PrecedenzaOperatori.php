<?php
//PRECEDENZA TRA GLI OPERATORI
var_dump(true && false)."\n\r";
var_dump(true and false)."\n\r";
$test = true && false;//false
$test = true and false;/*--true. Abbiamo due operatori, l'assegnamento e l'operatore
logico and. L'operatore di assegnamento ha una precedenza maggiore rispetto all'operatore
and scritto in questo modo.(true) Se invece usiamo && questo ha una precedenza maggiore
rispetto all'assegnamento. (false). Se vogliamo che l'espressione sia sempre false
usiamo le parentesi.*/
$test = (true and false);
var_dump($test)."\n\r";
$sole = true;
$voglia = false;
if( ($sole === true ) && ( $voglia === true) ){  //Funziona tutto correttamente perchè && ha una precedenza
    //Passeggiata OK                     //inferiore rispetto a ===. Non è sbagliato usare le parentesi
                                         //in questo modo è più semplice capire che l'and logico &&
                                         //lega le due condizioni.
}
//SHORT-CIRCUIT EVALUATION
function fn1(){
    echo "Funzione ".__FUNCTION__ ." eseguita";
}
false && fn1();/*La funzione non viene invocata per il motivo seguente. PHP valuta la prima espressione
che inizia con un false, quindi in fn1() sia che ci sia true o false non cambia il risultato che sarà
sempre false.*/
true && fn1();/*La funzione viene invocata per il motivo seguente. PHP valuta la prima espressione
che inizia con un true, quindi PHP deve controllare fn1() perchè se sarà true
il risultato sarà true, se sarà false il risultato dell'espressione sarà false.
quindi in questo caso fn1() viene eseguita.*/
true || fn1(); //Non viene eseguita, la prima espressione è true, l'espressione sarà sempre true
// a prescindere da fn1(). Se la prima espressione determina già il risultato PHP non valuta
//la seconda espressione.
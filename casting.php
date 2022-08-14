<?php
//TYPE CASTING
/*--In PHP non dobbiamo esplicitamente dichiarare il tipo di una variabile
il tipo è impostato da PHP stesso. Ci sono delle volte però in cui
abbiamo bisogno di cambiare il tipo di una variabile*/

$stringa = '22';
$intero = (int)$stringa;
var_dump($intero); 
//In PHP abbiamo una serie di operatori di cast
// int, bool, string, float, array, object
$booleano = true;
$intero = (int) $booleano;
var_dump($intero); 

$numero = 30;
$array = (array) $numero;
var_dump($array);

$array = [10, 'Corso PHP' , true];
$oggetto = (object) $array;
var_dump($oggetto);
?>
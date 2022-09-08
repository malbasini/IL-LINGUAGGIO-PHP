<?php  
//NULLABLE E UNION TYPES
/*--Se vogliamo che la funzione come parametro $p1 accetti un int e un float
lo possiamo fare grazie a union types introdotto in PHP 8. Basta aggiungere
una barra verticale e l'altro tipo che vogliamo sia ammesso. Se vogliamo che un
parametro sia di qualsiasi tipo indichiamo mixed. In questo caso possiamo passare
qualsiasi tipo di dato.*/
declare(strict_types = 1);
function fn1(int|float $p1){

}
function fn2(mixed $p1){

}
function fn3(?float $p1){

}


fn1(20.9);
fn3(null); //ERRORE FATALE POSSIAMO BYPASSARE L'ERRORE UTILIZZANDO PRIMA DEL TIPO UN ?
fn2(null);
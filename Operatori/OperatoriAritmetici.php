<?php
//OPERATORI ARITMETICI
// + - * / % ** (Addizione +) (Sottrazione -) (Moltiplicazione *) 
//              (Divisione /) (Modulo %) (Elevamento a potenza **)
$numero = 10;
echo -$numero; //-10(int)
$numeroInStringa = "28";
var_dump(+$numeroInStringa);//Conversione automatica in (int)28
var_dump ( 4/2 );  //(int)2
$risultato = 4/3;
var_dump($risultato);//float(1.3333333333333333)
if (is_float($risultato)){
    echo "E' un float......";
}
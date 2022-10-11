<?php
//ARRAY SUPERGLOBALI

//GLOBALS
$corso = "PHP\n\r";
/*--Abbiamo definito una variabile $corso, in GLOBALS avremo un elemento
con chiave corso. Se vogliamo accedere dall'interno di una funzione a $corso
dobbiamo utilizzare l'array GLOBALS oppure la keyword global*/
echo $GLOBALS['corso'];
function test(){
    //echo $GLOBALS['corso'];
    global $corso;//ACCEDIAMO ALLA VARIABILE GLOBALE
    echo $corso;
}
test();

?>
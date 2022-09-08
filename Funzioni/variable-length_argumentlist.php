<?php
//VARIABLE-LENGTH ARGUMENT LIST
function test($p1,$p2,$p3 = 1){

}

test(1,2);
/*--Se la funzione è stata definita con tre parametri obbligatori
otteniamo un errore fatale se ne passiamo di meno. Assegniamo al
terzo parametro un valore di default. Ora non ci sono errori.
Alcune volte non sappiamo a priori quanti parametri passeremo alla
funzione, vogliamo avere una funzione che accetti un numero
variabile di valori. Per farlo utilizziamo l'operatore ...
Se ad esempio la funzione somma si aspetta due parametri 
li possiamo aggiungere*/

function test1(...$valori){
     //var_dump($valori);//Otteniamo un array dei valori passati in input.
     foreach($valori as $valore){
          echo $valore ."\n\r";
     }
}
test1(1,2,3);

function somma( $a, $b, ...$valori){
     var_dump($valori);
     $totale = 0; 
     foreach($valori as $valore){
          $totale += $valore;
     }
     return $totale;
}
echo 'Il risultato della somma è: ' .somma(10,26,31,10,15);

/*--I primi due argomenti non entrano a far parte dell'array perchè
sono rispettivamente i valori passati a $a e $b. I restanti valori 
entrano a far parte dell'array.*/


?>
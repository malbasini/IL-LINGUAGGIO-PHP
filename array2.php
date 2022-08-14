<?php
//ARRAY
/*--Per aggiungere un elemento ad un array esistente la sintassi
più semplice è la seguente*/   
$alunni = ['Michele'];//Prende il nome di array ordinato o numerato perchè
//ad ogni elemento dell'array viene associato un indice numerico a partire da 0.
//Aggiungo due elementi
$alunni[] = 'Anna';
$alunni[] = 'Miriam';
/*--Possiamo anche aggiungere più elementi con la seguente sintassi:*/
array_push($alunni,'Marco','Andrea');
/*--Questi due modi di aggiungere elementi aggiungono gli stessi alla fine.
Se vogliamo aggiungerli all'inizio usiamo:*/
array_unshift($alunni,'Luca','Carlo');
/*--Con array_shift rimuoviamo il primo elemento, array_pop l'ultimo.*/
array_pop($alunni);
array_shift($alunni);
var_dump($alunni);

$alfabeto = ['a' , 'b' , 'c' ,'d' ,'e'];
/*--Per rimuovere un elemento intermedio usiamo unset*/
//unset($alfabeto[1]);
/*--unset lascia dei buchi negli indici. Se vogliamo riportare una ordinazione numerica
usiamo array_values*/
$alfabeto = array_values($alfabeto);
//Se vogliamo rimuovere più elementi e riordinare l'indice usiamo array_splice
array_splice($alfabeto,2,2);
//Rimuove a partire dall'indice 2 due elementi
var_dump($alfabeto);
?>
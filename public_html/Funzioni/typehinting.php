<?php
//TYPE HINTING
/*--A partire da PHP5 è stao introdotto il type hinding
ossia il tipo di dato che i parametri delle funzioni si
attendono.*/
declare(strict_types = 1);
function calcolaValore(float $p1) :string{
      return "Maestro PHP";
}
$valore = 22;
calcolaValore($valore);
/*--Quando invochiamo una funzione non vi è alcun controllo
sui parametri, possiamo passare qualsiasi tipo di dato.
se vogliamo avere un minimo di controllo sui valori passati
mettiamo prima del parametro il tipo che si aspetta. Se ora
proviamo a passare la stringa PHP otterremo un errore fatale.
Se passiamo un intero tale valore viene convertito in automatico
da PHP in float. Anche se passiamo una stringa con all'interno
un intero questa viene convertita da PHP in float. Se vogliamo
lavorare in modo ancor più rigoroso senza che PHP effettui queste
sue conversioni automatiche aggiungiamo questa istruzione.
declare(strict_types = 1); L'istruzione declare deve essere la
prima istruzione dello script. Possiamo effettuare type hinting
anche per i valori che la funzione ritorna,basta indicare due punti
e il tipo dopo la dichiarazione dei parametri.*/
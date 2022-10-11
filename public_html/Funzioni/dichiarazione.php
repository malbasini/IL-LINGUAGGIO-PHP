<?php
//DICHIARAZIONE DELLE FUNZIONI
/*--Si definisce una funzione con la keyword function e un nome significativo. Non è bene dare
nomi che non idendificano la funzione svolta dall'algoritmo. Se vogliamo che le istruzioni interne a una funzione
siano eseguite dobbiamo, come si dice, invocare la funzione. Anche se poniamo la call alla
funzione prima della definizione non abbiamo alcun errore, il codice viene preventivamente
analizzato e le funzioni vengono messe in memoria. In PHP possiamo definire anche funzioni anonime.
quello che possiamo fare con tali funzioni è assegnarla a una variabile, eseguirla o usarla come
callback.*/

function fn1(){
    echo 'Funzione '. __FUNCTION__ . " eseguita. \n\r";
}
fn1();
//INVOCAZIONE FUNZIONE ANONIMA

(function (){
    echo 'Funzione anonima eseguita solo una volta.' . "\n\r";
})();

//ASSEGNAZIONE FUNZIONE ANONIMA A UNA VARIABILE
$corso = 'PHP';
$fn = function(){
     global $corso;//oppure usiamo l'array superglobale $GLOBALS['corso'];
     echo 'Funzione assegnata a $fn eseguita.' ."\n\r";
     echo $corso;
};

$fn();

/*--Una funzione può ricevere dati in input e restituire valori, in questo senso essa
è un blocco a sè stante, tramite l'input e l'output dialoga con il mondo esterno.
Una funzione può essere invocata un qualsiasi numero di volte, questo ci consente di non
duplicare il codice. La duplicazione del codice è una cosa da evitare quando sviluppiamo
un'applicazione. Per quanto possiamo modificare dall'interno di una funzione una variabile definita
nello scope globale, in realtà questa non è una buona pratica di programmazione. Le funzioni sono
un livello di astrazione, questo significa che noi dialoghiamo con una funzione attraverso il suo
nome, ma non dobbiamo conoscere i dettagli implementativi, astrarre significa allontanarci dai
dettagli implementativi di una funzione che realizza un determinato compito.*/
?>
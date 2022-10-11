<?php
//REQUIRE E INCLUDE
/*--Possiamo scrivere migliaia di righe di codice in uno script,
ma ciò non è ottimale da un punto di vista organizzativo e strutturale
nonchè la gestione del codice stesso. In PHP possiamo suddividere uno script in
più files per avere script di piccole dimensioni e importarle con REQUIRE E INCLUDE
Se il codice importato è fondamentale per lo script usiamo REQUIRE, altrimenti se non
è strettamente necessario INCLUDE.*/


/*--Con include se lo script non viene trovato abbiamo un warning, ma l'esecuzione continua
con require l'esecuzione si arresta e abbiamo un fatal error*/
require 'funzioni.php';
/*--E' come se facessimo un copia e incolla all'interno dello script.*/
fn1();
fn2();
require 'a.php';
require 'b.php';
/*--E' come se facessimo un copia e incolla all'interno dello script.*/
$nomeCorso = "Corso PHP";
$nomeCorso = "Corso Javascript";//sovrascrive la variabile.

echo $nomeCorso;
?>
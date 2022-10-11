<?php
//FUNZIONI COME LIVELLO DI ASTRAZIONE

/*Supponiamo di voler fare tre sequenze come mostrato nel codice.
Questo codice in linea generale potrebbe andare bene, solo che ogni
volta che vogliamo ottenere questa funzionalità dobbiamo riscrivere
il codice di basso livello. Possiamo creare però un livello di astrazione
grazie alle funzioni. mostraSequenza astrae i 3 cicli precedentemente
creati. Creiamo una libreria e portiamo la funzione dentro a lib.php. Abbiamo
ottenuto lo stesso risultato aggiungendo un livello di astrazione e il
codice derivante è molto più pulito.*/

require 'lib.php';
mostraSequenza(4,8,5);
mostraSequenza(12,20,18);
mostraSequenza(1,5,4);



/* for ($i = 4; $i<= 8; $i++){
    if ($i === 5){
        continue;
    }
    echo $i . " ";
}
echo "\n";

/* for ($i = 12; $i<= 20; $i++){
    if ($i === 18){
        continue;
    }
    echo $i . " ";
}
echo "\n";

for ($i = 1; $i<= 5; $i++){
    if ($i === 4){
        continue;
    }
    echo $i . " ";
} */
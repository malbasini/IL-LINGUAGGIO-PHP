<?php
//CALLBACK E FUNZIONI DI ORDINE SUPERIORE

/*--Una funzione può essere assegnata a una variabile e passata ad un'altra
funzione. Lavoriamo con le funzioni come facciamo con qualsiasi valore passato
in input. Una funzione passata in input ad un'altra è chiamata callback. Facciamo
subito un esempio. Se vogliamo fare typy hinting dobbiamo indicare il parametro
come callable o closure. Una funzione che riceve in input un'altra funzione
come fn1 è chiamata funzione di ordine superiore. Con le funzioni di ordine
superiore possiamo effettuare un'astrazione sulle azioni, ovvero per quanto riguarda
la stampa di una sequenza da un numero iniziale a un numero finale effettuavamo un'astrazione
sui valori, ovvero i valori mostrati come sequenza venivano indicati in fase di
invocazione della funzione. Con le funzioni di ordine superiore non definiamo all'interno
il comportamento della funzione stessa.
*/

function fn1(int $a ,closure $cb){
     $cb(); //E' una funzione la possiamo invocare.
}
$anonima1 = function(){
    echo "Funzione anonima in \$anonima1 eseguita." ."\n";
};

$anonima2 = function(){
    echo "Funzione anonima in \$anonima2 eseguita." ."\n";
};


fn1(1,$anonima1);
fn1(1,$anonima2);
/*--fn2 farà la callback passando in input l'array $a. Però fn2 non sa effettivamente
il comportamento della callback che invocherà, ovverò quello che verrà fatto sull'array
$a è un qualcosa definito all'interno della callback stessa. Possiamo definire una funzione
anonima ma anche una normale funzione, sommaPari e sommaDispari. Se usiamo closure prima del
parametro $cb abbiamo un errore fatale, questo perchè l'argomento due deve essere di tipo
closure mentre noi abbiamo indicato una stringa. Una closure è una funzione anonima, non
avendo definito funzioni anonime dobbiamo indicare come type hinting callable. L'azione
determinata sull'array non sta nella funzione di ordine superiore fn2, ma è determinata
dalla funzione che passiamo come secondo argomento. In questo modo abbiamo effettuato
un'astrazione sull'azione. Andiamo nel browser e digitiamo php.net. Rechiamoci a questo
indirizzo: https://www.php.net/manual/en/function.usort .usort ordina un array per valore
usando una funzione definita dall'utente. Copiamo il codice di esempio e incolliamolo in
Visual studio code.*/
function fn2(array $a ,callable $cb){
    return $cb($a); //E' una funzione la possiamo invocare.
}
function sommaPari(array $valori){
    $totale = 0;
    for ($i = 0; $i < count($valori); $i += 2){
        $totale += $valori[$i];
    } 
    return $totale;
}

function sommaDispari(array $valori){
    $totale = 0;
    for ($i = 1; $i < count($valori); $i += 2){
        $totale += $valori[$i];
    }
    return $totale;
}
echo fn2([3,6,1,5,9],'sommaPari') ."\n";
echo fn2([3,6,1,5,9],'Sommadispari') ."\n";

//USORT
function cmp($a, $b)
{
    /* if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? 1 : -1; */
    return $a <=> $b;
}

$a = array(3, 2, 5, 6, 1);

usort($a, "cmp");

foreach ($a as $key => $value) {
    echo "$key: $value\n";
}
/*--Se scambiamo -1 con 1 e 1 con -1 l'ordinamento sarà decrescente.
Usiamo l'operatore spece shift*/
?>
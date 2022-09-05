<?php
//CICLO FOR
$alunni = ['Marco' , 'Simona', 'Francesca'];
$numeroAlunni = count( $alunni );
$i = 0;
while ($i < $numeroAlunni){
    echo $alunni[$i++] . "<br>";
}/*--Il ciclo for è un pò quello che abbiamo fatto con il ciclo while*/

/*--SINTASSI DEL FOR. Nel while la prima cosa che facevamo era inizializzare
*una variabile a zero. Nel for lo facciamo internamente. expr1 verrà eseguita
solo una volta, cioè quando PHP incontra il for. exr2 è la condizione,
$i < $numeroAlunni. In expr3 incrementiamo la variabile contatore. Mettere
$i++ all'interno del for è come se la togliessimo e la mettessimo
come ultima istruzione all'interno del for. La condizione viene verificata
ogni volta che raggiungiamo l'ultima istruzione all'interno del for. Per quanto
riguarda la prima e la terza espressione possiamo anche non indicarle, l'importante
è inizializzare la variabile fuori dal for, e fare il post incremento come
ultima istruzione. Sicuramente il ciclo for risulta più compatto rispetto al
ciclo while./

//SINTASSI
for (expr1; expr2; expr3){

}
*/
for ($i = 0; $i < $numeroAlunni; $i++){
     
    echo $alunni[$i] . '<br>';
}
$i = 0;
for (; $i < $numeroAlunni; ){
     
    echo $alunni[$i] . '<br>';
    $i++;
}


/*--Se vogliamo partire dall'ultimo elemento scriveremo:*/

for ($i = $numeroAlunni -1; $i >= 0; $i--){

    echo $alunni[$i] . '<br>';
}
?>
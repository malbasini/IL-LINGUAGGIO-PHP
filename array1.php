<?php
//ARRAY ORDINATI
$alunni = array('Michele','Silvia','Luca');
$alunni = ['Michele','Silvia','Luca'];//Prende il nome di array ordinato o numerato perchè
//ad ogni elemento dell'array viene associato un indice numerico a partire da 0.
var_dump($alunni);
echo $alunni[1];
/*--Se vogliamo accedere all'ultimo elemento ma non sappiamo di quanti elementi è composto
L'array possiamo fare:*/
$numeroElementi = count($alunni);
echo $numeroElementi;
echo $alunni[$numeroElementi-1];//accede all'ultimo elemento
//ARRAY ASSOCIATIVI
/*--Associamo ad ogni elemento di un array una chiave stringa*/
$user = [
    'nome' => 'Gianluca',
    'professione' => 'Developer'
];
//nome e professione sono le due chiavi di tipo stringa.
var_dump($user);
echo $user['nome'] . ' ' . $user['professione'] ."\n\r";
//Se vogliamo utilizzare i doppi apici avremo
echo "{$user['nome']} {$user['professione']} \n\r";
/*--Negli array associativi possiamo trasformare gli elementi in variabili*/
extract($user);
/*--extract creerà 2 variabili $nome con valore Gianluca e $professione con valore Developer*/
echo $nome . ' '. $professione;
/*--Si può avere anche un mix tra array associativi e numerici*/
$user = [
    'nome' => 'Gianluca',
    'professione' => 'Developer',
    28 //età
];
var_dump($user);
echo $user[0];
?>
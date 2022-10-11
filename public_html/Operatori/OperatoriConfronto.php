<?php
//OPERATORI DI CONFRONTO

$a = 10;
$b = "10";//Viene trasformato in (int)10;
/*--Se non vogliamo demandare a PHP la conversione automatica
da string a int possiamo fare noi la conversione.*/
//$b = (int)"10";
var_dump($a == $b);//== Operatore di uguaglianza
/*--Se vogliamo essere certi che non solo il valore sia
uguale ma anche il tipo usiamo l'operatore === 
(uguaglianza stretta)*/
var_dump($a === $b);//false la prima cosa che fa PHP è
//controllare se il tipo di dato è uguale.
var_dump($a != $b);//Operatore di disuguaglianza
var_dump($a !== $b);//Operatore di disuguaglianza stretta
//Controlliamo anche il tipo
$a = 10;
$b = (int)"12";
var_dump($a < $b);//Operatori di disuguaglianza <;<=;>;>=
/*-- In PHP 7 è stato introdotto un nuovo operatore di
confronto, l'operatore spaceship <=> confronta due valori
e ritorna -1 se il primo valore è minore del secondo,
0 se sono uguali 1 se il primo valore è maggiore del
secondo.*/
$a = 10;
$b = 20;
echo $a <=> $b;
/*--Tale operatore viene utilizzato spesso nelle funzioni di
callback cioè una funzione che passiamo come argomento
nell'invocazione di un'altra funzione.*/

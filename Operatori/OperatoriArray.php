<?php
//OPERATORI SU ARRAY

$a = [1];
$b = ["1"];
var_dump($a == $b);//true il confronto tra i valori viene effettuato con l'uguaglianza semplice ==.
var_dump($a === $b);//false prima viene controllato il tipo. Non essendo uguali il risultato sarà false.
$a = ["valore 1" => 1];
$b = ["valore 2" => 1];
var_dump($a == $b);//false abbiamo chiavi diverse.
var_dump($a === $b);//false abbiamo chiavi diverse.
$a = ["valore 1" => 1];
$b = ["valore 1" => "1"];
var_dump($a == $b);//true confronta i valori a parità di chiave con l'uguaglianza semplice.
var_dump($a === $b);//false confronta i valori a parità di chiave con l'uguaglianza stretta.
$a = ["valore 1" => 1, "valore 2" => 2];
$b = ["valore 1" => 1, "valore 2" => 2];
var_dump($a == $b);//true confronta i valori a parità di chiave con l'uguaglianza semplice.
var_dump($a === $b);//true confronta i valori a parità di chiave con l'uguaglianza stretta.
$a = ["valore 2" => 2, "valore 1" => 1];
$b = ["valore 1" => 1, "valore 2" => 2];
var_dump($a == $b);//true.
var_dump($a === $b);//false deve corrispondere anche l'ordine.
$c = ["pizzaPreferita" => "margherita" , 28, 'JS',2];
$d = ["pizzaPreferita" => "capricciosa" , 30, "PHP"];
$e = $c + $d;
var_dump($e);
/*--Per quanto riguarda l'unione tra due array nel caso di elementi con la stessa chiave viene
preso l'array indicato sulla sinistra dell'operatore + */
$e = $d + $c;
var_dump($e);
/*--(Inversione degli array)Per quanto riguarda l'unione tra due array nel caso di elementi con la stessa chiave viene
preso l'array indicato sulla sinistra dell'operatore + */
<?php   
require __DIR__ .'/lib/corso1.php';

$corsoPHP = new Corso1();//CREAZIONE DELL'OGGETTO CON L'OPERATORE NEW
$corsoPHP -> titolo = "Maestro PHP.";
$corsoPHP -> categoria = "Backend.";
$corsoPHP -> prezzo = 10 . "<br><br>"; 

echo $corsoPHP -> riepilogo();

$corsoJS = new Corso1();//CREAZIONE DELL'OGGETTO CON L'OPERATORE NEW
$corsoJS -> titolo = "Maestro JS.";
$corsoJS -> categoria = "Frontend.";
$corsoJS -> prezzo = 20;

echo $corsoJS -> riepilogo();
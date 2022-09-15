<?php
declare (strict_types=1);

require __DIR__ .'/lib/promotion.php';

$corsoPHP = new Corso("Maestro PHP","Gianluca","Backend",10);//CREAZIONE DELL'OGGETTO CON L'OPERATORE NEW
$corsoJS = new Corso("Maestro JS","Gianluca","Frontend",20);//CREAZIONE DELL'OGGETTO CON L'OPERATORE NEW
echo $corsoPHP -> riepilogo();
echo $corsoJS -> riepilogo();
?>
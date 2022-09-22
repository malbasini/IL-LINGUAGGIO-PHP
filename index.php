<?php
//INDEX.PHP
require __DIR__ . '/OOP/lib/Corso.php';
require __DIR__ . '/OOP/lib/Frontend.php';
require __DIR__ . '/OOP/lib/Backend.php';
require __DIR__ . '/OOP/lib/Statistiche.php';

$corsoPHP = new Corso("Corso PHP");
$corsoJS = new Frontend("Corso JavaScript",19);//Frontend è una sottoclasse della classe Corso
/*--Nel type hinting nel costruttore della classe Statistiche abbiamo indicato un oggetto di
tipo Corso.*/


$statistiche = new Statistiche($corsoPHP);
$statistiche = new Statistiche($corsoJS);

echo Corso::$piattaforma;  //Proprietà statica


Frontend::info(); 
echo Corso::info();

echo $corsoPHP->curriculum([]);
echo $corsoPHP->requisiti();
?>


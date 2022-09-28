<?php
//INDEX.PHP
require __DIR__ . '/OOP/lib/Corso.php';
require __DIR__ . '/OOP/lib/Frontend.php';
require __DIR__ . '/OOP/lib/Backend.php';
require __DIR__ . '/OOP/lib/Statistiche.php';

$corsoPHP = new Corso("Corso PHP");
$statistiche = new Statistiche($corsoPHP);
$corsoJS = new Frontend("Corso JavaScript",19);//Frontend è una sottoclasse della classe Corso
/*--Nel type hinting nel costruttore della classe Statistiche abbiamo indicato un oggetto di
tipo Corso.*/
$statistiche = new Statistiche($corsoJS);

echo Corso::$piattaforma;  //Proprietà statica
Frontend::info(); //Metodo statico
echo Corso::info(); //Metodo statico




echo $corsoPHP->curriculum([]);
echo $corsoPHP->requisiti();
?>


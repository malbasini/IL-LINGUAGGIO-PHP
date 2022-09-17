<?php
require __DIR__ . '/OOP/lib/corso.php';
require __DIR__ . '/OOP/lib/frontend.php';
require __DIR__ . '/OOP/lib/backend.php';

$css = new Frontend("css",19,"Configurazione corso css");
$php = new Backend("PHP",23, "Configurazione corso PHP");
$css->frontendConfig1 = "Modificata";
echo $css->riepilogo()."<br><br>";
echo $php->riepilogo()."<br><br>"; 

//PROPRIETà READ-ONLY
$corsoPHP = new Corso("Corso PHP",prezzo:99);
//$corsoPHP->prezzo = 99;ERRORE PROPRIETA' READ-ONLY
var_dump($corsoPHP);
?>


<?php   
// PROGRAMMAZIONE ORIENTATA AGLI OGGETTI (OOP)
class Corso1
{
     public $titolo = 'Corso X';
     public $autore = 'Gianluca';
     public $categoria = 'Senza categoria';
     public $prezzo = 0;
     /*--Abbiamo creato delle proprietà che di default verranno ereditate
     da tutti gli oggetti appartenenti alla classe Corso.*/
}
$corsoPHP = new Corso1();//CREAZIONE DELL'OGGETTO CON L'OPERATORE NEW
$corsoJS = new Corso1();
$corsoNode = new Corso1();


/*--Se vogliamo accedere a una proprietà della classe usiamo questa sintassi:*/
//echo $corsoPHP -> titolo. "\n";
/*--Dato che le proprietà sono public possiamo impostare un titolo per l'oggetto $corsoPHP.*/
$corsoPHP -> titolo = "Corso PHP" ."\n";
$corsoPHP -> categoria = "Backend" ."\n";
$corsoPHP -> prezzo = 10;
//echo $corsoPHP -> titolo;

$corsoJS -> titolo = "Corso JS" ."\n";
$corsoJS -> categoria = "Frontend" ."\n";
$corsoJS -> prezzo = 19;

var_dump($corsoPHP, $corsoJS, $corsoNode);
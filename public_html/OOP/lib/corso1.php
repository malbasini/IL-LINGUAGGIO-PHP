<?php
/*--Il primo metodo magico che andiamo ad analizzare è  __construct (costruttore)
Grazie al costruttore possiamo inizializzare un oggetto con certi valori. Tale
metodo viene automaticamente invocato da PHP in fase di creazione dell'oggetto.*/
class Corso1
{
     public $titolo = "Corso X";
     public $autore = "Gianluca";
     public $categoria = "Senza categoria";
     public $prezzo = 0;
     /*--Abbiamo creato delle proprietà che di default verranno ereditate
     da tutti gli oggetti appartenenti alla classe Corso.*/

     public function riepilogo(){
          //echo __METHOD__ ."\n";
          //echo $this -> titolo;//Accesso alle proprietà della classe
          return "Titolo: " . $this -> titolo . "<br>"
          . "Autore: ". $this -> autore ."<br>"
          . "Categoria: " .$this -> categoria ."<br>"
          . "Prezzo: ".$this -> prezzo ."<br>"; 
     }
}
<?php
/*--PHP 8 migliora ulteriormente la leggibilità del codice. Invece di dichiarare
proprietà pubbliche e assegnarle nel costruttore possiamo usare una sintassi abbreviata.*/
class Corso
{


     public function __construct(
                           public string $titolo,
                           public string $autore,
                           public string $categoria,
                           public int|float $prezzo = 0 //VALORE DI DEFAULT
                            ){
     }

     public function riepilogo(){
          //echo __METHOD__ ."\n";
          //echo $this -> titolo;//Accesso alle proprietà della classe
          return "Titolo: " . $this -> titolo . "<br>"
          . "Autore: ". $this -> autore ."<br>"
          . "Categoria: " .$this -> categoria ."<br>"
          . "Prezzo: ".$this -> prezzo ."<br>"; 
     }
}
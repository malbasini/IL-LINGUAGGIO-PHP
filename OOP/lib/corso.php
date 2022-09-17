<?php
/*--Il primo metodo magico che andiamo ad analizzare è  __construct (costruttore)
Grazie al costruttore possiamo inizializzare un oggetto con certi valori. Tale
metodo viene automaticamente invocato da PHP in fase di creazione dell'oggetto.*/

class Corso
{  
     
     public function __construct(
               public string $titolo,
               public string $autore = "Gianluca",
               public string $categoria = "Senza categoria",
               public readonly int|float $prezzo = 0
           )
           {
              
           }

          protected function riepilogo()
          {
               return "Titolo: " . $this -> titolo . "<br>"
               . "Autore: ". $this -> autore ."<br>"
               . "Categoria: " .$this -> categoria ."<br>"
               . "Prezzo: ".$this -> prezzo ."<br>"; 
          }
          
          
}

?>
<?php
//CORSO.PHP
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
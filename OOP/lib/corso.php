<?php
//CORSO.PHP
include 'UdemyCourse.php';
include 'GianlucaCourse.php';
class Corso implements UdemyCourse,GianlucaCourse
{  
     public function curriculum(array|null $lezioni):string{
          return "Implementato metodo ".__METHOD__ ." dell'interfaccia UdemyCourse";
     }
     public function requisiti():string{
          return "Implementato metodo ".__METHOD__ ." dell'interfaccia GianlucaCourse";
     }
     public static string $piattaforma = "Piattaforma X";

     public const LIVELLO_BASE = 1;
     public const LIVELLO_PRO = 2;

     /*--Se vogliamo accedere alla proprietà 
     $piattaforma definita 
     in Corso usiamo la keyword self.*/
     public static function info(){
          echo static::$piattaforma ."<br>";
          echo self::LIVELLO_BASE ."<br>";
     }
     /*--Se vogliamo accedere alla proprietà $piattaforma definita 
     in Frontend usiamo la keyword static.*/
     /*public static function info(){
          echo static::$piattaforma;
     }*/

     public function __construct(
               public string $titolo,
               public string $autore = "Gianluca",
               public string $categoria = "Senza categoria",
               public  int|float $prezzo = 0
           )
           {
              
           }

     protected function riepilogo():string//TYPE HINTING
     {
          return "Titolo: " . $this -> titolo . "<br>"
          . "Autore: ". $this -> autore ."<br>"
          . "Categoria: " .$this -> categoria ."<br>"
          . "Prezzo: ".$this -> prezzo ."<br>"; 
     }       
          
}

?>
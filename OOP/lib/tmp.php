<?php
//METODI GETTER E SETTER
declare (strict_types=1);
class Tmp{
    public int $p1;//PROPRIETA' TIPIZZATA
    // private $p1;

    // public function getP1(){
    //     return $this->p1;
    // }
    // public function setP1(int $valore){
    //     $this->p1 = $valore;
    // }
}
$tmp = new Tmp();
//$tmp->p1 = 10; //NON POSSIAMO ACCEDERE A UNA PROPRIETA' PRIVATA CON LE ISTANZE.  ERRORE FATALE.
$tmp->p1 = 20;
echo $tmp->p1;
?>
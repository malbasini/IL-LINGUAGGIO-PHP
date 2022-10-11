<?php
//METODO MAGICO __CALLSTATIC
class CreaCorso{
    public function crea(){
        if($this -> step1() && $this -> step2())
        {
            return "Corso creato correttamente....";
        }
        return "Problemi nella creazione del corso...";
    }
    public function step1(){return true;}
    public function step2(){return true;}
}
class Course{
    public static function __callStatic($metodo, $args){
        if ($metodo === 'creaCorso'){
            $creaCorso = new CreaCorso();
            echo $creaCorso -> crea();
        }
    }
    
}
Course::creaCorso();//Metodo non esistente intercettato da __callStatic.
?>
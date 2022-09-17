<?php
//BACKEND.PHP
class Backend extends Corso{

    public $backendConfig1;
    public function __construct($titolo,$prezzo,$conf1=""){
        parent::__construct($titolo,categoria:"Backend",prezzo:$prezzo); 
        $this->backendConfig1 = $conf1;
    } 

    public function serverConfig(){
        echo "Metodo ". __METHOD__ ." invocato <br>";
    }

    public function riepilogo(){
        
        $riepilogo = parent::riepilogo();
        return $riepilogo ." Configurazione: ". $this->backendConfig1;
    }
}


?>
<?php 
//FRONTEND.PHP
class Frontend extends Corso{
    public static string $piattaforma = "Piattaforma Y (di Frontend)";
    
    public $frontendConfig1;
    public function __construct($titolo,$prezzo,$conf1="" ){
       parent::__construct($titolo, categoria:"Frontend", prezzo: $prezzo); 
       $this -> frontendConfig1 = $conf1;
    } 
    public function moduleBundlerConfig(){
        echo "Metodo ". __METHOD__ ." invocato <br>";
    }

    public function riepilogo():string{
        
        $riepilogo = parent::riepilogo();
        return $riepilogo ." Configurazione: ". $this->frontendConfig1;
    }

    

    
}

?>
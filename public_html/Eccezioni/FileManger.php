<?php
//ECCEZIONI IN PHP

class FileManager{
    public function __construct(private string $filename){
        try{
            $this->checkIfFileExists();
        }
        catch(Exception $e){
            $info = "Messaggio: ".$e->getMessage() ."<br>";
            var_dump($e->getTrace());
        }
    }
    private function checkIfFileExists(){
        if(!file_exists($this->filename)){
            throw new Exception(message:"Il file non esiste!");
            //risale lo stack fino al costruttore
        }
    }
}
    $errorLogManager = new FileManager('error.log');//Passiamo un file sbagliato
?>
<?php
set_error_handler([new ErrorHandler , "handle"],E_ALL);
class ErrorHandler{
    public function handle(int $errno, string $errstr){
       echo "Numero errore $errno <br> messaggio: $errstr";
       
    }
}
echo $nonDefinita; 
/*--Non tutti gli errori sono gestibili. Se importiamo uno script 
inesistente avremo un errore fatale*/
?>
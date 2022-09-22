<?php
//INTERFACE
/*--Se vogliamo implementare questa interfaccia in una classe, tale classe dovrà
rispettare la firma dell'interfaccia, cioè implementare un metodo curriculum
con la stessa signature*/
interface UdemyCourse{
    public function curriculum(array|null $lezioni):string;
}

?>
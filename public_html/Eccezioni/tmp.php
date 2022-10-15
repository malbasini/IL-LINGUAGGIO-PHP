<?php
try{
    throw new Error("Errore...");
    //throw new Exception("Eccezione...");   
} 
/*Sia la classe Exception che la classe Error 
implmentano l'interfaccia throwable. 
Non è un buon metodo mettere nel catch throwable 
perchè è molto generica e si è costretti a fare 
valutazioni sulla sorgente dell'errore, cioè $e. 
E' meglio utilizzare eccezioni specifiche.*/
catch(Error $e){
    echo "Problema gestito..".$e->getMessage();
}
?>
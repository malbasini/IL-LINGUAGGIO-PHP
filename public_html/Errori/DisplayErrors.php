<?php
//DISPLAY ERRORS ED ERROR REPORTING
ini_set('display_errors',0);
/*Questa direttiva display_errors a 0 impedisce di visulizzare gli errori*/
error_reporting(E_ALL);
/*--Visualizziamo tutti gli errori con E_ALL con 0 non visualizziamo alcun errore.
Error_reporting fa in modo che l'errore venga scritto in un file sul server. Se
impostiamo 0 l'errore non viene scritto nel file.*/
echo $a; //Dovremmo avere un warning in quanto la variabile è insesistente.
//Invece non visualizziamo null. Se impostiamo display_errors a 1 
//visualizziamo un warning.
?>
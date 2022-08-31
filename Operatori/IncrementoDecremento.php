<?php
//OPERATORI DI INCREMENTO E DECREMENTO ++; --
$a = 1;
$b = 2;
//$a++;//2
echo $a++ ."\n\r";/*--Post incremento, significa che prima viene 
ritornato $a e mostrata con echo e poi viene incrementato. 
Se facciamo un echo subito dopo abbiamo 2. La variabile viene 
incrementata dopo l'istruzione*/
echo $a."\n\r";
echo ++$b ."\n\r"; /*--Pre incremento, prima viene incrementato b
poi ritornato con echo.*/
$a = 1;
echo $a--."\n\r";/*--Post decremento, significa che prima viene 
ritornato $a e mostrato con echo e poi viene decrementato. 
Se facciamo un echo subito dopo abbiamo 0. La variabile viene 
incrementata dopo l'istruzione*/
echo $a."\n\r";
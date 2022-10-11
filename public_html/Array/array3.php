<?php
//ARRAY UNPACKING
$a = [1,2,3];
$b = [...$a,4,5];
/*--Operatore spread ... copia l'array $a in $b*/  
$a = [1,'due' => 2,3];//solo con PHP 8.1 in poi
$b = [...$a,4,5];
phpinfo();
var_dump($b); 
?>
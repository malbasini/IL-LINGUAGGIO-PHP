<?php
//OPERATORE NULL COLESCING (PHP 7)
/*--Prendiamo in esame questo url*/
//http://localhost/corsi/php/Operatori/OperatoreNullColescing.php?page=3

//http://localhost/corsi/php/Operatori/OperatoreNullColescing.php

//$page = isset($_GET['page']) ? $_GET['page'] : 1;
$page = $_GET['page'] ?? 1 ?? 30;
echo $page;
/*--Il null colescing operator ritorna il primo parametro che non è null
ritorna il primo valore non null da sinistra a destra.*/


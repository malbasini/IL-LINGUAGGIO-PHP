<?php
//FUNZIONI SULLE STRINGHE
//ECHO E PRINT
echo 1;
print 2;
//EXPLODE E IMPLODE
$user = 'Guido Rossi programmatore';
/*--Con explode si trasforma una stringa in un array
implode trasforma un array in una stringa. Lo spazio
è il delimitatore*/
$arr = explode(" ",$user);
var_dump($arr);
var_dump(implode(" ",$arr));
//ADDSLASHES
$user = "Guido D'Elia\n\r";
echo addslashes($user);
//STR_CONTAINS
/*--Verifica se una sottostringa è presente in una stringa. Restituisce true o false.*/
var_dump(str_contains("Corso PHP","PHP"));
//STR_STARTS_WITH 
/*--Controlliamo se una stringa inizia con una certa sequenza. Restituisce true o false*/
var_dump(str_starts_with("Corso PHP","xo"));
//STR_ENDS_WITH 
/*--Controlliamo se una stringa termina con una certa sequenza. Restituisce true o false*/
var_dump(str_ends_with("Corso PHP","PHP"));
//TRIM,RTRIM,LTRIM
/*--se non indichiamo nulla come secondo argomento TRIM rimuove gli spazi a inizio e fine stringa
altrimenti rimuove ciò che indichiamo come secondo argomento. Stesso discorso vale per
RTRIM (Right) e LTRIM (Left)*/
$path = "/user/";
echo trim($path,'/');
echo ltrim($path,'/');
echo rtrim($path,'/');
//LCFIRST,UCFIRST,UCWORDS
/*--Lcfirst mette in minuscolo la prima lettera di una stringa,ucfirst mette in maiuscolo
la prima lettera di una stringa, ucwords mette in maiuscolo la prima lettera di ogni
parola in una stringa*/
$stringa = "Questo è un corso PHP\n\r";
echo lcfirst($stringa);
$stringa = "questo è un corso PHP\n\r";
echo ucfirst($stringa);
echo ucwords($stringa);
//STRTOLOWER, STRTOUPPER
/*--strtolower mette in minuscolo una stringa, strtoupper in maiuscolo.
Se vogliamo anche la è maiuscola usiamo la variante mb.*/
echo strtolower($stringa);
echo strtoupper($stringa);
echo mb_strtolower($stringa);
echo mb_strtoupper($stringa);
?>
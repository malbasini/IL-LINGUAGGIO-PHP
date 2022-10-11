<?php
//SCOPE (AMBITO DI VISIBILITA' DELLE VARIABILI) 
$nome = "Gianluca \n\r"; //scope globale
/*$nome = 'Corso PHP'; /*-- Questo assegnamento sovrascrive il primo. Se le due righe di codice
sono distanti e non volevamo la sovrascrittura possiamo definire un ambito a livello
di funzione. Quando creiamo una funzione stiamo di fatto separando l'ambito globale dall'ambito
della funzione. */  
function informazioniCorso($valore) {
     //$nome = 'Corso PHP';
     //echo $nome;
     //echo $valore;
     return $valore * 1.2;//Ritorna un valore nell'ambito globale
}

echo $nome; //stamperà la variabile globale
//informazioniCorso();//stamperà la variabile locale (interna alla funzione)
/*--Le 2 variabili pur avendo lo stesso nome non vanno tra loro a interferire.
I due ambiti globale e interno alla funzione possono comunicare attraverso i
parametri passati in input alla funzione la quale può ritornare un valore
nell'ambito globale.*/
$valore = 1;//Viene passato un valore dall'ambito globale a quello della funzione
$risultato = informazioniCorso($valore);
echo $risultato;
?>
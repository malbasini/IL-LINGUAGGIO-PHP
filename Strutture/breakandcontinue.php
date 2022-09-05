<?php
//BREAK AND CONTINUE
function lanciaDadi(){
    $dado1 = [1,2,3,4,5,6];
    $dado2 = [1,2,3,4,5,6];
    return $dado1[rand(0,5)] + $dado2[rand(0,5)];
}
$lanci = 20;

for ($i = 1; $i <= 20; $i++){
    $risultato = lanciaDadi();
    echo "lancio numero: $i ", "risultato: $risultato ".'<br>';
    if ($risultato === 7){
        echo "Hai vinto!!!";
        break; //Interrompe il for. Con break terminiamo il ciclo.
    }
}
for ($i = 1; $i <= 10; $i++)
{
    if ($i === 5){
        continue; //salta l'iterazione corrente (5)
    }
    echo "$i <br>";
}
?>
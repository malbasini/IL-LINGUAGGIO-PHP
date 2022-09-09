<?php 

//ARROW FUNCTION
/*--Le arrow function sono un miglioramento della sintassi delle funzioni anonime.
per definire una arrow function dobbiamo mettere fn al posto di function , una freccia
al posto delle graffe. L'istruzione return si rimuove.*/
$cmp = function ($a, $b)
{
    return $a <=> $b;
};

$a = array(3, 2, 5, 6, 1);

usort($a, $cmp);

foreach ($a as $key => $value) {
    //echo "$key: $value\n";
}

$array1 = [3,2,5,6,1];
$array2 = [4,1,5,16,10];

usort($array1, fn ($a, $b) => $a <=> $b);//Ordinamento crescente


usort($array2, fn ($a, $b) => $b <=> $a);//Ordinamento decrescente


var_dump($array1,$array2);

/*--Le Arrow function non definiscono un prorio scope. Non c'è bisogno di usare use. */ 

$b = 10;

$anonima1 = function($a) use (&$b){
     return $a + $b;
};
$anonima2 = fn($a) => $a+$b;
echo $anonima1(6) ."\n";
echo $anonima2(16);
<?php
//CICLO FOREACH
$user = [
    'nome' => 'Matteo',
    'professione' => 'Medico',
    'anni' => 32
];
/*--Stiamo praticamente dicendo: Per ogni valore dell'array associativo $user esegui
le istruzioni definite nel corpo del foreach. Visualizzare gli esempi nel browser.*/

foreach ( $user as $valore ){
      echo $valore , '<br>';
}
foreach ( $user as $chiave => $valore ){
    echo " $chiave : $valore " , '<br>';
}
$user = [
    'nome' => 'Matteo',
    'professione' => ['Medico','Ricercatore'],
    'anni' => 32
];
foreach ( $user as $chiave => $valore ){
    echo "$chiave: ";
    if ( !is_array($valore) ){

        echo $valore  , '<br>';

    }else{

        echo implode(", " , $valore),'<br>';
    }
   
}
?>